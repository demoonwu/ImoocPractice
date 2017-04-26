<?php
	$b=1000;
	function demo(&$a,$sex='female'){
		$a++;
		return "{$a}性别是{$sex}<hr/>";
	}
	echo $b.'<hr/>';
	echo demo($b);
	$c="male";
	echo demo($b,$c);
	echo $b;
	echo "变量的值通过访问变量地址被改变了";
?>