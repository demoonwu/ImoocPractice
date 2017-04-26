<?php
	$name="zhangsan";
	function demo(){
		global $name;
		$name="lisi";
		echo $name.'<hr/>';
	}
	
	echo $name.'<hr/>' ;
	demo();
?>