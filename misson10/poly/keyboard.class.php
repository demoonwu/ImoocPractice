<?php
	include_once("./usb.interface.php");
	class keyboard implements USB{
		public function run(){
			$this->usekeyboard();
		}
		private function usekeyboard(){
			echo "键盘正在使用";
		}
	}
	// $keyboardOne=new keyboard();
	// $keyboardOne->run();
?>