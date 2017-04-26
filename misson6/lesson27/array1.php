<?php
	$arrOne[1]="第一个数组1";
	$arrOne[2]="第一个数组2";
	$arrTwo = array(123,'ASDASDAS','c',"你好你好你好","sdasdasdasasdassad",999999999999999999999999999);
	$arrThree=array('1'=>"asd",'key2'=>"我得过",'key3'=>"world",'4'=>"1231213",5=>"1231231321312",'asd'=>"我的我的",);
	$arrFour[0][1]=array(123,123,123,123,123);
	$arrFive=array('1'=>array("asd","qwe","asda","asdasda","sdasa","阿斯大多数"),'2'=>array(123,1231,213,123,123,123,1254,454,345,345,346,563,7));
	echo"<pre>";
		var_dump($arrOne);
		var_dump($arrTwo);
		var_dump($arrThree);
		var_dump($arrFour);
		var_dump($arrFive);
	echo"</pre>";
?>