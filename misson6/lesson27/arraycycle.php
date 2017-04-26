<?php
	$arrOne=array('one','two','three','four','five','six','seven');
	//使用count函数取得数组元素数
	for($i=0;$i<count($arrOne);$i++){
		echo $arrOne[$i];
		echo "<br/>";
	};
	echo "<hr/>";
	foreach($arrOne as $key=>$value){
		echo $key."=>".$value."<br/>";//$key和$value是自定义变量
	};
	echo "<hr/>";
	foreach($arrOne as $value){
		echo $value."<br/>";
	};
	echo "<hr/>";
	//each和list方法
	reset($arrOne);
	echo"<pre>";
	while(list($key,$value)=each($arrOne)){
		echo "{$key}的值是{$value}<br/>";
	};
	foreach($arrOne as $value){
		echo $value."<br/>";
	};
	reset($arrOne);
	echo"</pre><hr/>";
	//数组指针的用法next prev end  reset
	echo"<pre>";
	var_dump(next($arrOne));
	echo"<br/>";
	var_dump(prev($arrOne));
	echo"<br/>";
	
	//reset($arrOne);
	var_dump(each($arrOne)[1]);
	echo"<br/>";
	var_dump(each($arrOne)[1]);
	echo"<br/>";
	var_dump(each($arrOne)[1]);
	echo"<br/>";
	var_dump(prev($arrOne));
	echo"<br/>";
	var_dump(prev($arrOne));
	echo"<br/>";
	var_dump(end($arrOne));
	echo"<br/>";
	var_dump(reset($arrOne));
	echo"<br/>";
	echo"</pre>";
	//---------------------
	echo "<hr/>";
	//--------------------------------------
	echo"<pre>";
	echo var_dump($arrOne);
	echo"</pre>";
?>

