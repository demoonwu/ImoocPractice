<?php
	error_reporting(E_ALL ^ E_DEPRECATED);
	$link=mysql_connect("localhost","root","");
	var_dump($link);
	echo"<hr/><pre>";
	if(mysql_errno()){
		exit("数据库链接失败，错误代码：".mysql_errno()."错误描述".mysql_error());
	}
	if(!mysql_select_db('bookstore')){
		exit("数据库选择失败");
	}
	mysql_set_charset('utf8');
	$sql="SELECT * FROM fishes";
	if($result=mysql_query($sql)){
		while($arr=mysql_fetch_assoc($result)){
			var_dump($arr);
			echo"<hr/>";
		};
	}
?>