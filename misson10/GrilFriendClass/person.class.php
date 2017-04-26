<?php
	class person{
	    static protected $soul="弥赛亚";
		protected $name;
		protected $age;
		protected $height;
		public function __construct($name='',$age='',$height=''){
			$this->name="Alice".rand(0,999)."号";
			$this->age=rand(15,25);
			$this->height=rand(160,175)."cm";
		}
		
	}
	class GirlFriend extends person{
		protected $HumanAttribute=array("温柔贤惠","热情活泼","肤白貌美","真白富美","娇柔萝莉");
		public function date(){
			echo "年龄为".$this->age."岁的".$this->name ."身高".$this->height."性格为<span style='color:red;'>".$this->HumanAttribute[rand(0,4)]."</span>有着同一个灵魂,灵魂名为【图灵】》》》》》》";
			echo parent::$soul;
			echo "《《《《《《与<em>PHP程序员</em>约会<hr/>";
		}
	}
	for($i=0;$i<1000;$i++){
		$Cici=new GirlFriend();
		$Cici->date();
		$Cici=null;
	}
?>