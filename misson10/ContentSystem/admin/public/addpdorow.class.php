<?php
class addPdoRow{
	private $arrRow;
	private $site;
	private $tableName;
	public function __construct($arrRow,$tableName,$site){
		$this->arrRow=$arrRow;
		$this->site=$site;
		$this->tableName=$tableName;
	}
	public function addPdoRow(){
		include_once("./public/pdodbconnect.php");
		// try{
			// $dsn="mysql:host=localhost;dbname=content;";
			// $username="root";
			// $password="";
			// $link=new PDO($dsn,$username,$password);
			// $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		// }catch(PDOException $e){
			// echo $e->getMessage();
		// }
		$arrRow=$this->arrRow;
		$field=array_keys($arrRow);
		$bindP=":".implode(",:",$field);
		$field=implode(",",$field);
		$sql=<<<EOF
			INSERT INTO {$this->tableName} ({$field}) VALUES ({$bindP});
EOF;
		//var_dump($arrRow);
		$sql=htmlspecialchars($sql);///防止xss攻击
		try{
			$link->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
			//事务处理开始
			$link->beginTransaction();
			$res=$link->prepare($sql);
			//参数绑定bindParam,注意bindParam第二个参数要求使用引用参数
			foreach($arrRow as $key=>&$value){
				$res->bindParam(":".$key,$value);
			}
			$res->execute();
	//		事务处理结束
			$link->commit();
			$link->setAttribute(PDO::ATTR_AUTOCOMMIT,1);
			echo "<script>window.location.href='./controlPanel".$this->site.".php'</script>";
		}catch(PDOException $e){
			$link->rollBack();
			echo $e->getMessage();
			$link->setAttribute(PDO::ATTR_AUTOCOMMIT,1);
			echo "<script>window.location.href='./add".$this->site.".php</script>";
		}
	}
}
