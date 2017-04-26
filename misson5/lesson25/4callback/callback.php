<?php
	function one(){
		return false;
	}
	function two(){
		return "回调callback函数成功";
	}
	$result="two";
	var_dump($result());
	echo '<hr/>';
	function three($num){
		$num+=100;
		return $num;
	}
	function four($fun){
		for($i=0;$i<=5000;$i=$i+36){
			$j=$fun($i);
		echo "\$j{$j}回调参数成功{$_SERVER['SERVER_ADDR']}<hr/>";
		}
	}
	four("three");
?>