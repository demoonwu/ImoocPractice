<?php 
	try {
		// 数据库名称：demoarticle
		// 
		//header("Content-Type: text/html; charset=utf-8");
		$dsn="mysql:host=127.0.0.1;dbname=demoarticle";
		$username="root";
		$pwd="";
		$pdo=new PDO($dsn, $username, $pwd);
		//$pdo->query('set names gb2312;');
		$pdo->query('set names utf-8');
	} catch (Exception $e) {
		var_dump($e->getMessage());
	}



 ?>