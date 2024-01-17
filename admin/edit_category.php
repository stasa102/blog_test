<?php

include_once "../includes/inc.admin.php";

$id = $_REQUEST['id'];                         // setting id to id from url 

$category = Category::fetch("id", $id);        // fetching category with matching id


$smarty->assign("category", $category);        // send OBJECT to template
$smarty->display("admin/edit_category.tpl");
