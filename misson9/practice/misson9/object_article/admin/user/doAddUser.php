<?php
	include("../public/acl.php");
	include("../public/function.php");
	include("../public/dbconnect.php");
	if($_POST){
		$user=$_POST;
		if($user["password"]==$user["repassword"]){
			$user['password']=md5($_POST['password']);
			unset($user['repassword']);
		}else{
			echo"alert('密码与确认密码不相等')<script>window.location.href='./addUser.php'</script>alert('密码与确认密码不相等');";
			exit("密码与确认密码不相等");
		};
		if($_FILES){
			$user['pic']=upload($_FILES['pic']);
		};
		$user['createdTime']=time();
		$field=implode(',',array_keys($user));
		$value="'".implode("','",$user)."'";
		$sql="INSERT INTO USER ({$field})VALUES({$value});";
		if(mysqli_query($link,$sql)){
			echo "<script>window.location.href='./user.php'</script>";
		}else{
			echo "<script>window.location.href='./addUser.php'</script>";
		}
		//echo $sql;
		// var_dump($_POST);
		// var_dump($_FILES);
		// array_filter($user);
		// var_dump($user);
		// var_dump($subscript);
		
	}

?>