<?php
	header("Content-Type: application/json;charset=utf-8"); 
	include_once("./public/pdodbconnect.php");	
	$action=!empty($_REQUEST["action"])?$_REQUEST["action"]:"欢迎使用server端";
	switch ($action) {
		case 'checkFn':
			$checkName=$_REQUEST['checkName'];
			$checkValue=$_REQUEST['checkValue'];
			$sql="SELECT COUNT(*) FROM USER WHERE ".$checkName."='".$checkValue."';";
			$res=$link->query($sql);
			$res=$res->fetch(PDO::FETCH_ASSOC);
			$count=$res['COUNT(*)'];
			$data = array('success'=>'true','count' =>$count);
			echo json_encode($data);
			break;
		default:
			echo $action;
			break;
	}
	