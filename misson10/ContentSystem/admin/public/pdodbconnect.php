<?php
	try{
		$dsn="mysql:host=localhost;dbname=content";
		$username="root";
		$password="";
		$link=new PDO($dsn,$username,$password);
		$link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo $e->getMessage();
	}