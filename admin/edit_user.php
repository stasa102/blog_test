<?php

include_once "../includes/inc.admin.php";
//-- authorisation over, content starts 

$id = $_REQUEST['id'];
// echo "ID: $id";

//$user_mapper=new UserMapper($mysql_db);
$user = User::fetch("id", $id);
// var_dump($user);


$smarty->assign("user", $user);		// send OBJECT to template
$smarty->assign("selected", "users");
$smarty->display("admin/edit_user.tpl");
