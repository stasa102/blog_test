<?php 
	include_once "../includes/inc.admin.php";
	//-- authorisation over, content starts 
		
	//$smarty->assign("message","Login successfull!");
	$smarty->assign("admin", $admin);			// information if user is admin
	$smarty->display("admin/admin.tpl");

?>
