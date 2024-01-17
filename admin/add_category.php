<?php

include_once "../includes/inc.admin.php";
//-- authorisation over, content starts 	

$smarty->assign("selected", "categories");
$smarty->assign("category", "category");
$smarty->display("admin/add_category.tpl");
