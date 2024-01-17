<?php

include_once "../includes/inc.admin.php";


$smarty->assign("selected", "pages");
$smarty->assign("page", "page");
$smarty->display("admin/add_page.tpl");
