<?php
	class myException extends Exception{
		public function getInfo(){
			return "信息是".$this->getMessage()."异常代码是".$this->getCode()."trace数组是".$this->getTraceAsString()."<br/>";
		}
	}
	
	try{
		if(@$_GET['id']==1){
			throw new myException("定义的异常ID定义为非法的1");
		}elseif(@$_GET['id']==2){
			throw new Exception("系统的异常处理");
		}
		echo "成功";
		
	}catch(myException $e){
		echo $e->getInfo();
	}catch(Exception $e){
		echo $e->getMessage().$e->getCode();
	}

?>