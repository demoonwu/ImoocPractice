<?php
//------------------自动加载类-----------------
	function __autoload($className){
		include_once("./".$className.".class.php");
	}
	
	class computer{
		public function useUsb($obj){
				$obj->run();
		}
	}
	$computerOne=new computer();
	$computerOne->useUsb(new mouse);
	echo "<hr/>";
	$computerOne->useUsb(new keyboard);
?>