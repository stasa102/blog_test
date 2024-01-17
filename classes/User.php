<?php

class User extends ActiveRecord{
	
	static protected $db_table="users";
	
	public $id;
	public $username;
	public $password;
		protected $admin;
	
	function getAdmin() {
		return $this->admin;
	}
}


?>
