<?php
	$user=array_filter($_POST);
	$field=array_keys($user);
	$id=$user['id'];
	unset($user['id']);
	include_once("./public/doAlter.class.php");	
	$alterUser=new doAlter("user",$user,$id);
	$alterUser->alterSql();
?>