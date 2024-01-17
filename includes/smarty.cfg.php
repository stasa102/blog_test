<?php
/*****************************
Smarty configuration
******************************/

// ROOT must be defined to root of current site

define("SMARTY_DIR", ROOT."_smarty/");

define("TEMPLATE_DIR", ROOT."_templates/");
define("TEMPLATEC_DIR", ROOT."/_templates_c/");
define("CACHE_DIR", ROOT."/_cache/");
define("CONFIG_DIR", ROOT."/_config/");


require(SMARTY_DIR.'Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir(TEMPLATE_DIR);
$smarty->setCompileDir(TEMPLATEC_DIR);
$smarty->setCacheDir(CACHE_DIR);
$smarty->setConfigDir(CONFIG_DIR);

//$smarty->error_reporting = E_ALL & ~E_NOTICE; // dont display NOTICEs, unset variable etc..

// old smarty 2
//$smarty->template_dir = TEMPLATE_DIR;
//$smarty->compile_dir = TEMPLATEC_DIR;
//$smarty->cache_dir = CACHE_DIR;
//$smarty->config_dir = CONFIG_DIR;


?>
