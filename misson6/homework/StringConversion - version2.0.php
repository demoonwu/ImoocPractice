<?PHP
	//写一个函数实现字符串 “close_door”转换成”CloseDoor”
	function strTranslate($str){
		if(preg_match("/^(.+)_.*?(.+)$/ism",$str)){
			return implode("",array_map("ucfirst",explode("_",$str)));
		}else{
			 return "输入字符里面没有_或是_在首位处";
		};
	};
	print_r(strTranslate("close"));

?>