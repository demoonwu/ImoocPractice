<?php
	include("../public/acl.php");
	include('../public/dbconnect.php');
	include('../admin/public/function.php');
	echo "<pre>";
	$id=$_POST['id'];
	unset($_POST['id']);
	$user=$_POST;
	if(!empty($_FILES["pic"]["name"])){
		$user['pic']=upload($_FILES['pic'],"../admin/uploads");
		$oldPic="../admin/uploads/".$user['oldPic'];
	};
	unset($user['oldPic']);
	$user=array_filter($user);
	$str=null;
	foreach($user as $key=>$value){
		$str.=$key.'="'.$value.'",';
	}
	$str=trim($str,',');
	$str="UPDATE  USER SET {$str} WHERE ID={$id}";
	if(mysqli_query($link,$str)){
		@unlink($oldPic);
		session_start(); 
		session_destroy();
		$_SESSION=array();
		$_SESSION['isLogin']=0;
		echo"<script>window.location.href='../login.php'</script>";
	}else{
		@unlink("../admin/uploads/{$user['pic']}");
		echo"<script>alert('修改失败')</script>";
		echo"<script>window.history.back()</script>";
	}
?>