<?php
	$arrOne=array('k1'=>123,'k2'=>123,'k3'=>123,'k4'=>123,'k5'=>123,'k6'=>123);
	for($i=0;$i<10;$i++){
		$key="key".$i;
		$arrTwo[$key]=100+$i+23*$i;
	}
	echo"<pre>";
	print_r($arrOne);
	echo"<hr/>";
	print_r($arrTwo);
	echo"<hr/><h1>函数array_values</h1>";
	print_r(array_values($arrOne));
	echo"<hr/><h1>函数array_keys</h1>";
	//----------in_array 检查数组中是否存在某个值---------
	if(in_array(122,$arrOne)){
		echo"存在123";
		print_r(in_array(123,$arrOne));
	}else{
		echo"不存在";
		print_r(in_array(122,$arrOne));
	};
	echo"<hr/><h1>array_flip flip快速翻转</h1>";	
	//--------------array_flip flip快速翻转--------------	
	print_r(array_flip($arrTwo));
	echo"<hr/><h1>array_reverse reverse反转</h1>";	
	print_r(array_reverse($arrTwo));
	//--------------------数组相关处理函数--------------------------
	echo"<hr/><h1>count数量</h1>";
	print_r(count($arrTwo));	
	echo"<hr/><h1>array_count_values数量</h1>";
	print_r(array_count_values($arrOne));	
	echo"<hr/>";
	print_r(array_count_values($arrTwo));
	echo"<hr/><h1>array_unique除去数组中重复的值</h1>";
	print_r(array_unique($arrOne));
	//---------------------------过滤函数----------------------------------------------------------------------------------
	echo"<hr/><h1>array_filter使用回调函数来过滤（filter）原来的数组</h1>";
	function arrFilter($var){
		return($var%5==0);
	};
	print_r($arrTwo);
	print_r(array_filter($arrTwo,"arrFilter"));
	//----------------------array_walk对数组中的每个成员应用用户函数---------------------------------------------------------------------------------------
	echo"<hr/><h1>array_filter使用回调函数来使用（walk）原来的数组</h1>";
	function arrwalkFun(&$value,$key,$prefix){
		$value=$prefix."后面是".$key."加上".$value;
	}
	array_walk($arrOne,"arrWalkFun","我是前缀");
	print_r($arrOne);
	//-------------------------array_map对数组中的每个成员应用用户函数,返回一个数组对象--------------------------------------------------
	echo"<hr/><h1>array_map对数组中的每个成员应用用户函数,返回一个数组对象</h1>";
	function arrMap($value){
		return($value."经过map处理");
	}
	print_r(array_map("arrMap",$arrTwo));
	//-------------------------array  sort排序系列-------------------------------------------------
	echo"<hr/><h1>rsort(arrTwo)对数组逆向排序,返回一个布尔值</h1>";
	rsort($arrTwo);
	foreach($arrTwo as $key=>$value){
		echo"{$key}是{$value}<br/>";
	};
	echo"<hr/><h1>sort(\$arrTwo)对数组逆向排序,返回一个布尔值</h1>";
	sort($arrTwo);
	foreach($arrTwo as $key=>$value){
		echo"{$key}是{$value}<br/>";
	};
	asort($arrOne);
	echo"<hr/><h1>asort(\$arrOne)对数组正向排序，并保持索引关系,返回一个布尔值</h1>";
	foreach($arrOne as $key=>$value){
		echo"{$key}是{$value}<br/>";
	};
	echo"<hr/><h1>asort(\$arrOne)对数组逆向排序，并保持索引关系,返回一个布尔值</h1>";
	arsort($arrOne);
	foreach($arrOne as $key=>$value){
		echo"{$key}是{$value}<br/>";
	};
	//---------------------使用自定义函数usort进行排序，多用于多维数组-----------------------------------------------
	echo"<hr/><h1>usort(\$arrOne)对数组进行自定义排序,返回一个布尔值</h1>";
	function arrUsort($a,$b){
		if($a['id']==$b['id']){
			return 0;
		}else{
			return(($a['id']<$b['id'])?1:-1);
		};
	};
	function arrUrsort($a,$b){
		if($a['id']==$b['id']){
			return 0;
		}else{
			return(($a['id']>$b['id'])?1:-1);
		};
	};
	for($i=0;$i<=8;$i++){
		$arrThree[$i]['id']=$i;
		$arrThree[$i]['name']="我是人造数据{$i}号";
		$arrThree[$i]['address']="我居住在{$i}室";
	};
	print_r($arrThree);
	echo"<hr/>usort排序";
	usort($arrThree,"arrUsort");
	print_r($arrThree);
	echo"<hr/>";
	usort($arrThree,"arrUrsort");
	print_r($arrThree);
	echo"<hr/>uasort排序";
	uasort($arrThree,"arrUsort");
	print_r($arrThree);
	uasort($arrThree,"arrUrsort");
	//使用键名排序
	echo"<hr/>ksort键名排序";
	ksort($arrOne);
	var_dump($arrOne);
	krsort($arrOne);
	print_r($arrOne);
	//uksort的使用
	$arrFour['id']="四号";
	$arrFour['name']="我是人造数据四号";
	$arrFour['address']="我居住在四号室";
	function arrUksort($a,$b){
		if($a=="address"){
			echo"{$a}<br/>";
			return -1;
			
		}elseif($a=="name"){
			echo"{$a}<br/>";
			return -1;
			
		}else{
			echo"{$a}<br/>";
			return 1;
		};
	};
	uksort($arrFour,"arrUksort");
	print_r($arrFour);
	//------------使用自然排序算法nat进行排序------------------		
	echo"<hr/><h1>nat排序\$arrOne)对数组进行自定义排序,返回一个布尔值</h1>";
	for($i=0;$i<=100;$i++){
		if($i%2==0){
			$arrFive[$i]="A机器生成的图片{$i}";
		}else{
			$arrFive[$i]="a机器生成的图片{$i}";
		}
	};
	shuffle($arrFive);
	print_r($arrFive);
	echo"<hr/>使用sort排序";
	sort($arrFive);
	print_r($arrFive);
	echo"<hr/>使用natsort排序";
	natsort($arrFive);
	$arrSix[0]=0;;
	foreach($arrFive as $key=>$value){
		static $i=0;
		$arrSix[$i++]=$value;
	};
	print_r(array_values($arrFive));
	echo"<hr/>使用natcasesort进行不区分大小写排序";
	natcasesort($arrFive);
	print_r($arrFive);

?>