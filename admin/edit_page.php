<?php
include_once "../includes/inc.admin.php";


$id = $_REQUEST['id'];

$page = Page::fetch("id", $id);

$smarty->assign("page", $page);        // send OBJECT to template
$smarty->display("admin/edit_page.tpl");
