<?php
	include_once('./link.php');
	ECHO "<PRE>";
	//var_dump($_POST);
	echo"<hr/>";
	// $username=$_POST["username"];
	$password=md5($_POST["password"]);//password不能直接像username那样直接写个post在sql语句中，为什么？
	$loginId=$_POST["loginId"];
	// echo md5($_POST["password"]);
	if(!mysql_query("INSERT INTO XUEBIANCHENG (USERNAME,PASSWORD,LOGINID)VALUES('{$_POST["username"]}','{$password}','{$_POST["loginId"]}')")){
		echo "插入数据失败";
	}else{
		echo "注册成功<hr/>";
	};
	$sql="SELECT * FROM XUEBIANCHENG";
	if($result=mysql_query($sql)){
		while($arr=mysql_fetch_assoc($result)){
			var_dump($arr);
			echo"<hr/>";
		};
	}
	
	
	
?>