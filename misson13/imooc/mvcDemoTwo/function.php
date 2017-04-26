<?php
	function C($className, $methodName){
		$class="./libs/controller/".$className.".class.php";
		$method=$methodName."()";
		require_once($class);
		$obj=new $className;
		$obj->$methodName();//使用函数
	}

	//echo C("demoController","show");

	function M($className){
		$class="./libs/model/".$className.".class.php";		
		require_once($class);
		$obj= new $className;
		return $obj;
	}

	function V($className){
		$class="./libs/view/".$className.".class.php";		
		require_once($class);
		$obj= new $className;
		return $obj;
	}

	function illegalFilter($str){
		$str=(!get_magic_quotes_gpc())?addslashes($str):$str;//使用get_magic_quotes_gpc()是否打开了，打开了会自动转义 用addslashes这个内置函数来转义str
		return($str);
	}