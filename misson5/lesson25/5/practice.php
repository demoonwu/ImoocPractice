<?php
	function demo1($a){
		echo "{$a}函数一<hr/>";
	}
	function demo2($b){
		$b++;
		demo1(++$b);
		echo "{$b}函数二<hr/>";
	}
	demo2(13);
?>