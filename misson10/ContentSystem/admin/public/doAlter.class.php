<?php
class doAlter{
	private $tableName;
	private $alterArr;
	private $id;
	public function __construct($tableName,$alterArr,$id){
		$this->tableName=$tableName;
		$this->alterArr=$alterArr;
		$this->id=$id;
	}
	public function alterSql(){
		try{
			include_once("./public/pdodbconnect.php");
			// $dsn="mysql:host=localhost;dbname=content";
			// $user="root";
			// $password="";
			// $link=new PDO($dsn,$user,$password);
			// $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//设置异常处理
			$sql="UPDATE {$this->tableName} SET ";
			foreach($this->alterArr as $key=>$value){
				$sql.=$key."='".$value."',";
			}
			$sql=trim($sql,",")." WHERE id={$this->id}";
			if($res=$link->exec($sql)){
				echo "修改成功,更改了{$res}条记录";
			}else{
				echo "修改失败,没有数据被更改";
			}
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
	
}