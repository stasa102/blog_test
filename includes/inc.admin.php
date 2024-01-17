<?php
							
	include("inc.globals.php");	
	$mysql_db=db_connect_pdo();		//  PDO db connection object 
	
	include("inc.admin_auth.php");
	$logged_user=admin_auth();	
	
	define("ITEMS_PER_PAGE", 20);
	
?>