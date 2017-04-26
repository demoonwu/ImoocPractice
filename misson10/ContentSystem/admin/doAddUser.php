<?php
include_once('./public/addpdorow.class.php');
echo "<pre>";
$user=$_POST;
if($user['password']==$user['repassword']){
	$user['password']=md5($user['password']);
	unset($user['repassword']);
}else{
	echo "<script>window.history.back()</script>";
}
$user['createdTime']=time();
$row=new addPdoRow($user,"user","User");
$row->addPdoRow();