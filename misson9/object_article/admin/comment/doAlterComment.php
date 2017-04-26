<?php
	include("../public/acl.php");
	include('../public/dbconnect.php');
	$id=$_POST['id'];
	unset($_POST['id']);
	$comment=$_POST;
	$comment=array_filter($comment);
	$str=null;
	foreach($comment as $key=>$value){
		$str.=$key.'="'.$value.'",';
	}
	$str=trim($str,',');
	$str="UPDATE comment SET {$str} WHERE ID={$id}";
	if(mysqli_query($link,$str)){
		echo"<script>window.location.href='./comment.php'</script>";
	}else{
		echo"<script>alert('修改失败')</script>";
		echo"<script>window.history.back()</script>";
	}
?>