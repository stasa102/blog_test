<?php

include_once "../includes/inc.admin.php";
//-- authorisation over, content starts 	

$smarty->assign("selected", "users");
$smarty->display("admin/add_user.tpl");
