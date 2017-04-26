
<?php
session_start();
include("./public/pdodbconnect.php");
echo "<pre>";
$user=$_POST;
$password=md5($user['password']);
$sql="SELECT * FROM user WHERE username='{$user["username"]}' AND password='{$password}';";

if($res=$link->query($sql)){
	$master=$res->fetch(PDO::FETCH_ASSOC);
	if(!empty($master)){
		$_SESSION['master']=$master;
		$_SESSION['isLogin']=1;
		echo "<script>window.location.href='./controlPanel.php'</script>";
	}else{
		echo "<script>alert('用户名或密码错误')</script>";
		echo "<script>window.history.back()</script>";
	}
}
?>