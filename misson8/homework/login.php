<?php
	include_once('./link.php');
	ECHO "<PRE>";
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$sql="SELECT USERNAME,LOGINID,PASSWORD FROM XUEBIANCHENG WHERE USERNAME={$username} OR LOGINID={$username};";
	$res=mysql_query($sql);
	while($arr=mysql_fetch_assoc($res)){
		if($arr==false){
			echo "登录失败，查询不到用户名";//这一行无法输出
		}else{
			if($password==$arr["PASSWORD"]){
				echo "登录成功";
			}else{
				echo "密码错误<BR/>";
			}
		}
	}
	