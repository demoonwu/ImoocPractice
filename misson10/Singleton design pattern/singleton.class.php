<?php
	class demo{
		static $obj=null;
		private function __construct(){
			echo "数据库链接中<br/>";
		}
		static function getObj(){
			if(is_null(self::$obj)){
				self::$obj=new self();
			}
			return self::$obj;
			
		}
		public function select(){
			echo "选择中";
		}
		
	}
	var_dump(demo::getObj());
	var_dump(demo::$obj);
	var_dump(demo::getObj());
?>