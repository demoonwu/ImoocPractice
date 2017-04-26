<?php
	$arrOdd=array();
	for($i=0;$i<20;$i++){
		static $j=1;
		$arrOdd[$i]=$j;
		$j=$j+2;
	}
	echo "<pre>";
	print_r($arrOdd);
?>