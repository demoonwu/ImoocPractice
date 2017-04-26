<?php  
//设置页面内容是html编码格式是utf-8
//header("Content-Type: text/plain;charset=utf-8"); 
//header("Content-Type: application/json;charset=utf-8"); 
//header("Content-Type: text/xml;charset=utf-8"); 
//header("Content-Type: text/html;charset=utf-8"); 
//header("Content-Type: application/javascript;charset=utf-8"); 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	//$json='{"success":"true","msg":"第一个使用json的脚本，使用于公元2017年3月30日"}';
	$array=array("success"=>"true","msg"=>"第一个使用json，encode的脚本,使用于公元2017年3月31日");
	//var_dump($array);
	$json=json_encode($array);
	echo $json;
}