<?php 
	
session_start();
//var_dump($_REQUEST);
		
include("../includes/inc.globals.php");		
	
if ($_REQUEST['logout']){			// logout=1 or not just attempted login..
		
		unset($_SESSION[A_USER]);
		unset($_SESSION[A_PASS]);
		
		//echo "logout";
		g_goto("login.php");
		
}
elseif (!$_REQUEST['login']){
		//echo "login";
		$smarty->display('admin/login.tpl');
}
else
{


	include("../includes/inc.admin_auth.php");	
	
	$user=$_REQUEST['user'];		
	$pass=$_REQUEST['pass'];	
	
	$mysql_db=db_connect_pdo();									
	
	
	if ($logged_user=admin_auth($user, sha1($pass))) {			// perform admin auth with typed username/pass combination
		
		$_SESSION[A_USER]=$logged_user->username;			// if user/pass combination matches, write username to session
		$_SESSION[A_PASS]=$logged_user->password;
		$_SESSION['KCFINDER'] = array();
		$_SESSION['KCFINDER']['disabled'] = false;
		//echo "OK, transfer!";
		
		g_goto("admin.php");
	
	}
		
}		

?>

