<?php
	session_start();			
	
	function front_auth($u_username="", $u_p=""){
		
		if (empty($u_username)){
			$u_username=$_SESSION[F_USER];
			$u_p=$_SESSION[F_PASS];
		}
		
		global $mysql_db;
		global $smarty;
		
		if (!empty($u_username) and !empty($u_p)){
			
			
			$logged_front=Customer::fetch("username", $u_username);		// get user with username from DB, result is object, instance of class User
		
			if ($logged_front && $logged_front->password == $u_p) {
				//$smarty->assign("logged_front", $logged_front);
				return $logged_front;
			}
			else {
				//echo "unseting";
				unset($_SESSION[F_USER]);
				unset($_SESSION[F_PASS]);
				return false;
			}
			
		} else {
			return false;
		}
	}

?>