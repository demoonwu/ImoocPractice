<?php
	session_start();
	include("./public/dbconnect.php");
	echo "<pre>";
	//var_dump($_POST);
	$user=$_POST;
	$pwd=md5($user['pwd']);
	$sql="SELECT * FROM USER WHERE username='{$user["username"]}' AND PASSWORD='{$pwd}';";
	if($res=mysqli_query($link,$sql)){
		$master=mysqli_fetch_assoc($res);
		if(!empty($master)){
			$_SESSION['master']=$master;
			$_SESSION['isLogin']=2;
			echo "<script>window.location.href='./index.php'</script>";
		}else{
			echo "<script>alert('用户名或密码错误')</script>";
			echo "<script>window.history.back()</script>";
		}
	}
?>