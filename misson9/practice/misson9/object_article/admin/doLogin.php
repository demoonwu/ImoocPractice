<?php
	session_start();
	include("./public/dbconnect.php");
	echo "<pre>";
	$user=$_POST;
	$pwd=md5($user['pwd']);
	$sql="SELECT * FROM USER WHERE username='{$user["username"]}' AND PASSWORD='{$pwd}' AND isAdmin='2';";
	if($res=mysqli_query($link,$sql)){
		$master=mysqli_fetch_assoc($res);
		if(!empty($master)){
			$_SESSION['master']=$master;
			$_SESSION['isLogin']=1;
			echo "<script>window.location.href='./index.php'</script>";
		}else{
			echo "<script>alert('用户名或密码错误')</script>";
			echo "<script>window.history.back()</script>";
		}
	}
?>