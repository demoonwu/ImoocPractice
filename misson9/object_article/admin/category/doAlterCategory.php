<?php
	include("../public/acl.php");
	include('../public/dbconnect.php');
	$id=$_POST['id'];
	unset($_POST['id']);
	$category=$_POST;
	$category=array_filter($category);
	$str=null;
	foreach($category as $key=>$value){
		$str.=$key.'="'.$value.'",';
	}
	$str=trim($str,',');
	$str="UPDATE categorys SET {$str} WHERE ID={$id}";
	if(mysqli_query($link,$str)){
		echo"<script>window.location.href='./category.php'</script>";
	}else{
		echo"<script>alert('修改失败')</script>";
		echo"<script>window.history.back()</script>";
	}
?>