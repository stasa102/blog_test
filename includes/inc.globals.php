<?php

/*****************************
GLOBALS	- global variables, paths, smarty cfg...
 ******************************/

define("ROOT", str_replace("\\", "/", realpath(dirname(__FILE__) . "/../") . "/"));			// ROOT of current site (one level below location of this file)

define(
	"URL",
	"http://" . $_SERVER["HTTP_HOST"] . ""
		. str_replace(
			str_replace("\\", "/", $_SERVER["DOCUMENT_ROOT"]),
			(substr($_SERVER["DOCUMENT_ROOT"], -1, 1) == "/" ? "/" : ""),
			str_replace("\\", "/", realpath(dirname(__FILE__) . "/../") . "/")
		)
);																					// WEB ROOT of current site (for links)


define("ROOT_URL", "/blog_test/");	// local (local dir)
//define("ROOT_URL", "/");	//server

define("KCFINDER_DIR", "uploads/");
define("SLIDER_DIR", "uploads/slider/");
define("ALBUM_DIR", "uploads/albums/");
define("ALBUM_THUMB_DIR", ALBUM_DIR . "thumbs/");

include("smarty.cfg.php");

// $smarty->assign("GALLERY_DIR", GALLERY_DIR);
$smarty->assign("URL", URL);
$smarty->assign("ROOT_URL", ROOT_URL);
$smarty->assign("SLIDER_DIR", SLIDER_DIR);
$smarty->assign("ALBUM_DIR", ALBUM_DIR);
$smarty->assign("ALBUM_THUMB_DIR", ALBUM_THUMB_DIR);

$smarty->assign("KCFINDER_DIR", KCFINDER_DIR);

/*******************************
SESSION LOGIN DATA
 *******************************/

define("A_USER", "a_u");		// admin panel username will be saved in $_SESSION[A_USER] to prevent conflict with other applications
define("A_PASS", "a_p");

define("F_USER", "f_u");		// frontend username will be saved in $_SESSION[F_USER] to prevent conflict with other applications
define("F_PASS", "f_p");


/*******************************
MYSQL SERVER DATA
 *******************************/
$isLocal = true; // this can be removed when putting website online.

if ($isLocal) {

	$server_name = "localhost";
	$server_user = "root";
	$server_pass = "stasarasa";
	$default_db = "blog_test";
} else {
	// $server_name = "localhost";
	// $server_user = "root";
	// $server_pass = "stasarasa";
	// $default_db = "blog_test";
}

/*******************************
PAGINATION PARAMETERS
 *******************************/
//define("ITEMS_PER_PAGE", 10);

/*******************************
FUNCTIONS
 *******************************/

function db_connect_pdo($db_name = "")
{

	global $server_name, $server_user, $server_pass, $default_db;

	if (empty($db_name)) $db_name = $default_db;

	$dsn = "mysql:dbname=$db_name;host=$server_name;port=3306";
	$user = $server_user;
	$password = $server_pass;

	try {
		$pdo = new PDO($dsn, $user, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	} catch (PDOException $e) {
		echo 'Connection failed: ' . $e->getMessage();
	}

	return $pdo;	// PDO db object

}

////////////////////////////////////////////////////////////////////////////////////////////////////////////

function g_goto($page)
{
	if ($_COOKIE[session_name()]) {
		$tmp = "Location: $page";
	} else {
		if (strstr($page, "?"))
			$tmp = "Location: $page&" . session_name() . "=" . session_id();
		else
			$tmp = "Location: $page?" . session_name() . "=" . session_id();
	}

	Header($tmp);

	//do the exit to make sure that header location is enforced immediately
	exit;
} //g_goto

////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
function quote_smart($value)
{
    // Stripslashes
    if (get_magic_quotes_gpc()) {
        $value = stripslashes($value);
    }
    // Quote if not a number or a numeric string
    if (!is_numeric($value)) {
        $value = "'" . mysql_real_escape_string($value) . "'";
    }

    return $value;
}
*/
//////////////////////////////////////////////////////////////////////////////////////////////////////////////

function my__autoload($className)
{
	$className = str_replace("..", "", $className);
	require_once(ROOT . "classes/$className.php");
}

spl_autoload_register("my__autoload");	// register my__autoload function, since smarty also uses his autoloader, and registers his autoload function
