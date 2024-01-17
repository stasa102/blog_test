<?php
include_once "includes/inc.globals.php";
include_once "includes/inc.front.php";

$smarty->assign("name", "Ned");			// assign variable to smarty 
$smarty->display('index.tpl');			// show smarty template
