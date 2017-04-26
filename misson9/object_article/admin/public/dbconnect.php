<?php
	$link=mysqli_connect("localhost","root","","demoarticle");
	if(mysqli_connect_errno()){
		exit("连接数据库失败".mysql_error());
	}
	mysqli_set_charset($link,"utf8");
?>