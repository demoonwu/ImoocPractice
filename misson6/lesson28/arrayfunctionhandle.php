<?php
	for($i=0;$i<=10;$i++){
		$arrOne["第一组第{$i}个"]="人造数据第一组第{$i}个";
		$arrTwo["第二组第".($i+100)."个"]="人造数据第二组第".($i+100)."个";
		$arrThree[$i]="人造数据第三组第".($i+100)."个";
	};
	//while(list($key,$value)=each($arrTwo)){
	//	echo "{$key}=======>{$value}<br/>";
	//}
	echo"<pre>";
	print_r($arrOne);
	print_r(array_slice($arrOne,(count($arrOne)-5),3,1));
	print_r(array_slice($arrOne,-3,5,1));
	print_r(array_slice($arrThree,-3,5));//false仅对索引数组有用
	$arrOne_2=$arrOne;
	array_splice($arrOne_2,3,-3,$arrTwo);//splice胶连
	$arrOne_2=array_values($arrOne_2);
	echo"<hr/>使用solice胶连";
	print_r($arrOne_2);
	print_r(array_combine($arrOne,$arrThree));//combine合并使联合
	print_r(array_merge($arrThree,$arrOne));
	print_r(array_intersect(array_merge($arrOne,$arrTwo),array_merge($arrThree,$arrTwo)));
	print_r(array_diff(array_merge($arrOne,$arrTwo,$arrThree),array_merge($arrOne,$arrTwo)));
	//--------------出入栈---------------
	echo"<hr/>使用array_pop出栈<br/>";
	while($i=array_pop($arrOne_2)){
		var_dump($i);
		print_r($arrOne_2);
	};
	//-------------玩完了，再加一遍
	echo"<hr/>使用array_pop出栈<br/>";
	array_splice($arrOne_2,0,0,$arrOne);
	print_r($arrOne_2);
	$arrOne_2[]="我是后来的";
	print_r($arrOne_2);
	array_push($arrOne_2,"我是第二个后来的","我是第三个后来的");
	print_r($arrOne_2);
	//-----------使用shift操作表头-------------
	echo"<hr/>使用array_shift操作栈头部<br/>";
	while($i=array_shift($arrOne_2)){
		var_dump($i);
		print_r($arrOne_2);
	}
	$arrOne_2=array_values($arrOne);
	echo"<hr/>使用array_unshift操作栈头部<br/>";
	print_r($arrOne_2);
	array_unshift($arrOne_2,"插入的第一个头","插入的第二个头");
	print_r($arrOne_2);
	//-----array_rand返回随机数----
	echo"<hr/>使用array_rand获得随机数<br/>";
	$arrOne_3=array_rand($arrTwo,2);
	print_r($arrTwo);
	var_dump($arrTwo[$arrOne_3[0]]);
	var_dump($arrTwo[$arrOne_3[1]]);
	echo"<hr/>使用shuffle打乱数组<br/>";
	$arrOne_2=$arrTwo;
	print_r($arrOne_2);
	shuffle($arrOne_2);
	print_r($arrOne_2);
?>