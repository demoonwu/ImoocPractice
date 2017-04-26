<?php
	$arrOdd=array();
	for($i=0;$i<20;$i++){
		static $j=1;
		$arrOdd[$i]=$j;
		$j=$j+2;
	}
	echo "<pre>";
	print_r($arrOdd);
	echo "<hr/><h2>转换后</h2>";

	function arrayIntAndSplice($arr){
		if(count($arr)>=10){
			//先取出后五位再splice胶连
			return array_merge(array_splice($arr,-5,5),$arr);
		}else{
			return "输入非法，请输入包含5个元素以上的数组";
		}
	}
	print_r(arrayIntAndSplice($arrOdd));
?>