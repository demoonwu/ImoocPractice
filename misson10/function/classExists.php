<?php
	function __autoload($className){
		$classPathName="./{$className}.class.php";
		// if(file_exists($classPathName)){
			// include_once($classPathName);
		// }else{
			// die("不存在的类{$className}");
		// }
		//使用try catch用法 提升代码可读性 避免未知错误产生  但会使得代码效率降低倍级
		try{
			if(!file_exists($classPathName)){
				throw new Exception("不存在的类{$className}");
			}
			include_once($classPathName);
		}catch(Exception $e){
			echo $e->getMessage()."<br/>";
		}
	}

	
	var_dump(class_exists("humaan",true));
	echo "<hr/>";
	$Hellon=new human;
	var_dump(get_class_methods($Hellon));

?>