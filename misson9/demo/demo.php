<?php
	$a=time();
	function demo($name="demoon",$sex="male",$age=18){
		echo "{$name}是性别为{$sex}年龄{$age}的人<hr/>";
	}
	demo();
	demo("wu","man");
	
	//----------类和子类---------------------
	class  Person{
		var $varName='15655133980';
		
		function say($varName='13505646799'){
			$this->varName=$varName;
			echo $this->varName;
		}
	}
	
	class Student extends Person{
		function useProperty(){
			echo "输出父类的varname属性{$this->varName}";
			$this->say();
		}
	}
	$demoon=new Person();
	$demoon->say();
	$demoonwu=new Student();
	$demoonwu->useProperty();
	//----------------------------
	sleep(2);
	echo "<hr/>".(time()-$a);
?>