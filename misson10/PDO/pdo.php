<?php
	// $link=mysqli_connect("localhost","root","","xuebiancheng");
	// var_dump($link);
	try{
		$dsn="mysql:dbname=xuebiancheng;host=127.0.0.1";
		$user="root";
		$password="";
		$pdo=new PDO($dsn,$user,$password);
		var_dump($pdo);
		//����PDO���� ���ô����׳���ʽ
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		//����PDO���� �����Զ��ύ
		$pdo->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
		//����PDO���� ���÷�������
		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
	}catch(PDOException $e){
		echo $e->getMessage();
		echo $e->getFile();
		echo $e->getLine();
		echo $e->getCode();
	}
	echo "<hr/><pre>";
	var_dump(get_object_vars($pdo));
?>