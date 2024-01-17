<?php



function clean_url($string, $sep="-", $maxLength = null) {
   
	$string=str_replace("&quot;", "", $string);
	$string=str_replace("&amp;", "", $string);
	
	$string=mb_strtolower($string, "UTF-8");
	//$string=strtolower($string);
	
   	$string=str_replace("š","s", $string);
	$string=str_replace("đ","dj", $string);
	$string=str_replace("č","c", $string);
	$string=str_replace("ć","c", $string);
	$string=str_replace("ž","z", $string);
	
	$string=str_replace("ö", "o", $string);
	$string=str_replace("ä", "a", $string);
	$string=str_replace("ü", "u", $string);
	
    $url = (preg_replace(array('/[^a-z0-9\- ]/i', '/[ \-]+/'), array('', $sep), trim($string)));
    //if ($maxLength) $url = substr($url, 0, $maxLength);
	
	$url=str_replace("039", "", $url);
	
    return $url;
}



?>
