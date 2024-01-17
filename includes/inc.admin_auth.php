<?php
	session_start();
	
	function admin_auth($u_username="", $u_p="", $force_redirect=1, $redirect_target="login.php"){
	
			
		if (empty($u_username)){
			$u_username=$_SESSION[A_USER];
			$u_p=$_SESSION[A_PASS];
		}
		
		
		global $mysql_db;
		global $smarty;
	
		
		if (!empty($u_username) and !empty($u_p)){
			
			$logged_user=User::fetch("username", $u_username);		// get user with username from DB, result is object, instance of class User
			
			if ($logged_user and $logged_user->password == $u_p){
				$smarty->assign("logged_user", $logged_user);
				
				return $logged_user;
				
			}
			else {

				if ($force_redirect){	
					unset($_SESSION[A_USER]);
					unset($_SESSION[A_PASS]);
					g_goto($redirect_target);
					exit();
				}
				return false;
			}
			
		}
		else {

			if ($force_redirect){
				g_goto($redirect_target);
				exit();
			}
			return false;
		}	
	}

?>