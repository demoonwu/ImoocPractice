<?PHP
	//写一个函数实现字符串 “close_door”转换成”CloseDoor”
	function strTranslate($str){
		$arr=array();
		if(preg_match("/^(.+)_(.+)$/ism",$str,$arr)){
			return ucfirst($arr[1]).ucfirst($arr[2]);
		}else{
			return "输入字符里面没有_或是_在首位处";
		};
	};
	print_r(strTranslate("close_door"));

?>