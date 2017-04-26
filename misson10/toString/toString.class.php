<?php
	class demo{
		static $obj=null;
		public function __construct(){
			echo "数据库链接中<br/>";
		}
		private function functionOne(){
			echo "功能模块1<br/>";
		}
		public function __toString(){
			$this->functionOne();
			return 'toString功能<hr/>';
		}
		public function select(){
			echo "选择中<br/>";
		}
		
	}
	echo new demo();
	//var_dump(demo::getObj());
	
?>