<?php
	include("../admin/public/function.php");
	include("../public/dbconnect.php");
	if($_POST){
		$user=$_POST;
		if($user['password']==$user['repassword']){
			$user['password']=md5($user['password']);
			unset($user['repassword']);
		}else{
			exit("密码与确认密码不相等");
		};
		if($_FILES){
			$user['pic']=upload($_FILES['pic'],"../admin/uploads");	
		};
		$user['createdTime']=time();
		$field=implode(',',array_keys($user));
		$value="'".implode("','",$user)."'";
		$sql="INSERT INTO USER ({$field})VALUES({$value});";
		if(mysqli_query($link,$sql)){
			echo "<script>window.location.href='../login.php'</script>";
		}else{
			echo "<script>window.location.href='./register.php'</script>";
		}
		
	};

?>