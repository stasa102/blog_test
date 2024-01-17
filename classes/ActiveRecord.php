<?php

class ActiveRecord {

	private $db_properties;		// array of properties names which exist both in mysql table and class, that is: properties that will be written to db when class is saved
	
	static function createFromArray($assoc_array){
			
		$rez= new static();		// create the object of the class that was used to call this method

		if (!empty($assoc_array)){
			foreach($assoc_array as $item=>$value){
				$rez->$item=$value;
			}
		}
		
		return $rez;
		
	}	// __construct
	
	
	function updateFromArray($assoc_array){		// update object values from assoc array
		
		//-- get class properties, only theese keys will be populated from array (other keys in array will be ignored)
		$properties=get_class_vars(get_called_class());
		$properties=array_keys($properties);
		//echo "class properties: ";
		//var_dump($properties);
		
		//-- update object properties with values from assocc_array
		foreach($assoc_array as $prop=>$val){
			if ($prop!="id" and in_array($prop, $properties)){
				$this->$prop=$val;
			}
		}
		
	
	}
	
	private function getProperties(){			// private
		
		global $mysql_db;
		
		//echo "LAZY CALCULATING DB PROPERTIES FOR CLASS ".get_called_class()."<br>";
		
		//-- get fields from table
		$sql="SHOW FIELDS FROM ".static::$db_table;		// static:: reffers to class that was used to call the static property, gets static property of caller class
		//echo "SQL: $sql";
		$rez=$mysql_db->query($sql);
		$rez->setFetchMode(PDO::FETCH_ASSOC);	
		$table_fields=$rez->fetchAll();

		$fields=array();
		foreach ($table_fields as $field){
			
			$fields[$field['Field']] = $field['Key'];
			
		}

		//-- get class properties
		$properties=get_class_vars(get_called_class());		// returns assoc array "property"=>val 
		$properties=array_keys($properties);		// get just keys, that is property names
		
		//-- run through class properties and filter just the ones that exist in mysql table
		
		$keys = array_keys($fields);
		$unique=array_intersect($properties, $keys);
		
		$rez=array();
		foreach ($unique as $r){
			 $rez[$r] = $fields[$r];
			 
		}
		return $rez;	
	}
	
	function save($verbose=0, &$err=null, $force_save_new_with_id = false){			// save object to database
		//-- $force_save_new_with_id - save as new record, even if id exists in object (used on creating new company from member)
		
		global $mysql_db;
		
		//-- lazy load db_properties array
		if (!is_array($this->db_properties))
			$this->db_properties=$this->getProperties();
	
		
		if (empty($this->id) or $force_save_new_with_id){			// save a new object, with new id
			//-- create mysql INSERT statement
			//$sql="INSERT INTO ".static::$db_table." (".implode(", ", array_keys($this->db_properties)).")";
			$vals=array();
			
			foreach($this->db_properties as $prop => $key){
				/*
				if (get_magic_quotes_gpc()) {
       				 $prop = stripslashes($prop);
    			}
				*/
				//echo "<br>$prop -> $key";
				
				if ($this->$prop!==NULL){
						

						//$vals[$prop]=$mysql_db->quote($this->$prop);		// if field has value, quote it for DB

						if($this->$prop==="NULL" OR ($prop==="id" and !$this->id ))  			// special string value "NULL", allows to update field to NULL.. or when ID is empty
							$vals[$prop]="NULL";		// if field has exact value "NULL", quote set this field to NULL
						else
							$vals[$prop]=$mysql_db->quote($this->$prop);		// if field has value, quote it for DB

				}
				elseif($key){
						$vals[$prop]="NULL";				// if field does not have value, but is a foreign key, insert NULL value, otherwise omit that field from SQL statement
				}
				
			}		// foreach
			
			//-- create mysql INSERT/REPLACE statement
			$sql="REPLACE INTO ".static::$db_table." (".implode(", ", array_keys($vals)).")";
			$sql.=" VALUES (".implode(", ", $vals).")";
		
		}
		else {			// update current object (same id)
			//-- create mysql UPDATE statement
			$vals=array();
			foreach($this->db_properties as $prop => $key){
				if ($prop!="id") {
					
					
					if ($this->$prop!==NULL){
						
						//$vals[$prop]="$prop=".$mysql_db->quote($this->$prop);		// if field has value, quote it for DB
					
						if($this->$prop==="NULL")			// special string value "NULL", allows to update field to NULL
							$vals[$prop]="$prop=NULL";		// if field has exact value "NULL", quote set this field to NULL
						else
							$vals[$prop]="$prop=".$mysql_db->quote($this->$prop);		// if field has value, quote it for DB

					}
					elseif($key){
						$vals[$prop]="$prop=NULL";				// if field does not have value, but is a foreign key, insert NULL value, otherwise omit that field from SQL statement
					}
					
				}		// if prop!=id
			}
			$sql="UPDATE ".static::$db_table." SET ".implode(", ", $vals)." WHERE id='$this->id'";
		}
		
		if ($verbose) echo $sql;
		
		//-- execute SAVE command - write object to db
		$num=$mysql_db->exec($sql);
		
		if ($num===false) {
			//print_r($mysql_db->errorInfo());
			$err = $mysql_db->errorInfo();
			return 0;
		}
		else{
			//-- return id of object, inserted or updated
		
			
			if (empty($this->id)){				// update object id if just inserted to db
				$this->id=$mysql_db->lastInsertId();
			}
			
			//return 1;	// successfully saved
			//echo "num: $num";	
			return $this->id;
		}
		
	
	}


    /**
     * @param $field
     * @param $id
     * @return $this
     */
	static function fetch($field, $id){
		
		global $mysql_db;
		
		$sql="SELECT * FROM ".static::$db_table." WHERE $field = ?";
		$st = $mysql_db->prepare($sql);
		$st->execute(array($id));
		$st->setFetchMode(PDO::FETCH_CLASS , get_called_class());		// create object of class
		$result = $st->fetch();
	
		//var_dump($result);
		
		return $result;
	}


    /**
     * @param null $where
     * @param null $order_by
     * @param int $limit_start
     * @param int $limit_count
     * @param int $verbose
     * @return $this[]
     */
	static function fetchAll($where=NULL, $order_by=NULL, $limit_start=0, $limit_count=1000, $verbose=0){				//

		
		global $mysql_db;	// PDO object, connection to DB
		
		if (!empty($where)){
			$where_sql=" WHERE $where";
		}
		
		if (!empty($order_by)) {
			$order_sql=" ORDER BY $order_by";
		}
		
		if ($limit_start!=0 or !empty($limit_count)) {
			$limit_sql=" LIMIT $limit_start, $limit_count";
		}
		
		
		$sql="SELECT * FROM ".static::$db_table.$where_sql.$order_sql.$limit_sql;
		if ($verbose) echo $sql;

		$srez=$mysql_db->query($sql, PDO::FETCH_CLASS , get_called_class());	//returns result as PDOStatement object, BUT EACH ROW will be FETCHED AS OBJECT OF A CLASS
		//var_dump($srez);

		if ($srez instanceof PDOStatement){
			$result = $srez->fetchAll();
		}
		else{       // sql error, notify me
			$backtrace=print_r(debug_backtrace(), true);        //get backtrace
			@mail("milos@happynovisad.com", "ActiveRecord FetchAll SQL error on BlogIn", "SQL executed: $sql \n\n".$backtrace);
		}
		
		return $result;
	}
	

	static function deleteIds($delete){
		
		global $mysql_db;
		
		$num=0;
		
		if (!empty($delete)){
			
			$st=$mysql_db->prepare("DELETE FROM ".static::$db_table." WHERE id = ?");
			
			if (!is_array($delete)) $delete=array($delete);		// create array if only one id sent
			
			
			foreach($delete as $del_id){
				//echo "<br>deleting id: $del_id";
				$rez=$st->execute(array($del_id));
				if ($rez) $num++;
				
			}
		}
		
		return $num;	// number of deleted ids
		
	}
	
	static function count($where=NULL){			// counts items in db (used for pagination)
	
		global $mysql_db;
		
		if (!empty($where)){
			$where_sql=" WHERE $where";
		}
		
		$sql="SELECT count(*) FROM ".static::$db_table.$where_sql;
		//echo $sql;
		
		$srez=$mysql_db->query($sql);       // returns PDOStatement object or false on failure

		if ($srez){
			$count=$srez->fetch();
			//echo $count[0];
			return $count[0];
		}
		else{

			mail("milos@happynovisad.com", "ActiveRecord count bug",  "SQL executed: $sql");
			return 0;
		}

		
	}
	

	
	static function getMaxValue($field, $where=""){			// get maximum value for a field (used for setting up next position val)
	
		global $mysql_db;
		
		if (empty($field)){
			return 0;
		}
		
		if (!empty($where))
			$where_sql=" WHERE $where";
	
		$sql="SELECT max($field) FROM ".static::$db_table.$where_sql;
		//echo $sql;
		$srez=$mysql_db->query($sql);
		$max=$srez->fetch();
		//var_dump($max);
		
		return $max[0];
			
	}
	
	
	
}	// class Category


?>
