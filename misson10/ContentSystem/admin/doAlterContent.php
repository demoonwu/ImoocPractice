<?php
	$content=array_filter($_POST);
	$field=array_keys($content);
	$id=$content['id'];
	unset($content['id']);
	include_once("./public/doAlter.class.php");	
	$alterContent=new doAlter("content",$content,$id);
	$alterContent->alterSql();
?>