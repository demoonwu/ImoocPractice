<?php
	echo "<pre>";
	echo $_SERVER['SERVER_ADDR'].'<br/>';
	ECHO $_SERVER['HTTP_REFERER'].'<br/>';
	echo $_SERVER['REMOTE_ADDR'].'<br/>';
	var_dump($_SERVER);
	echo"<hr/>";
	foreach($_SERVER as $key=>$value){
		echo $key."=>".$value."<br/>";//$key和$value是自定义变量
	};
	echo "</pre>";
?>