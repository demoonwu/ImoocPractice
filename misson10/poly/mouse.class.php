<?php
	include_once("./usb.interface.php");
	class mouse implements USB{
		private function init(){
			echo "鼠标初始化<br/>";
		}
		private function useMouse(){
			echo "鼠标正在使用<br/>";
		}
		public function run(){
			 $this->init();
			 $this->useMouse();			 
		}
	}

	
	//(new mouse())->run();





?>