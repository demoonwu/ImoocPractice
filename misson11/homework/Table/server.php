<?php
	header("Content-Type: application/json;charset=utf-8"); 
	
	$action=!empty($_REQUEST["action"])?$_REQUEST["action"]:"欢迎使用server端";
	switch ($action) {
		case 'init_data_list':
			$data = array(
				array('id'=>'3','name' =>"吴小蔚" ,'age'=>'18','office'=>'保安','salary'=>'30000'),
				array('id'=>'4','name' =>"吴小蔚" ,'age'=>'19','office'=>'保安','salary'=>'30000')
			);
			echo json_encode($data);
			break;
		case 'del_data':
			# code... do something
			$delId=$_REQUEST["delId"];
			$data = array('success' =>'true','msg'=>'删除成功' ,"delId"=>$delId);
			echo json_encode($data);
			break;
		case 'edit_data':
			# code...
			$editId=$_REQUEST["id"];
			$content=$_POST;
			unset($content['action']);
			//do something...
			$content['success']='true';
			echo json_encode($content);
			break;
		default:
			echo $action;
			break;
	}
	