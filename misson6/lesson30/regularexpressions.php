<?php
	$arrOne=array();
	$strOne="why so serious?";
	$strTwo="mystoryof201623";
	$regularExpression="/\d{3}/";
	preg_match($regularExpression,$strTwo,$arrOne);
	//--------Êä³ö--------
	echo"<pre>";
	print_r($arrOne);
	echo"<br/>";
	print_r(preg_match("/^(http:\/\/)+([\w-\.]*)(\/[\w-\.]*)/ism","http://www.php.net/index.html", $matches));
	print_r($matches);
	echo"<br/>";
?>