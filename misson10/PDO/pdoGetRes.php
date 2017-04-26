<?php
	try{
		$dsn="mysql:dbname=xuebiancheng;host:=127.0.0.1;";
		$user="root";
		$password="";
		$pdo=new PDO($dsn,$user,$password);
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//$pdo->query('set names utf8;');
	}catch(PDOException $e){
		echo $e->getMessage();
	}
	$res=$pdo->QUERY("SELECT * FROM xuebiancheng;");

	//var_dump($res);
	foreach($res as $value){
		echo "{$value['ID']}--{$value['USERNAME']}--<br/>";
	}
?>