<?php
/**说明:该类是选择查询类




*/

class selectpage{
	private $allCount;//数据总数目
	private $tableName;//数据表名称------------------》需要手工输入
	private $each_disNums;//每页显示的条目数------>需要手工输入
	private $pageNums;//总页数	 
	private $subPage_link;//每个分页的链接=============》需要手工输入
	private $current_page;//当前被选中的页===============》需要手工输入
	//需要手工输入查询数组
	public function __construct($tableName,$selectArray,$each_disNums,$subPage_link,$current_page){
		$this->allCount=$this->getAllCount($tableName);//自动计算总数目
		$this->tableName=$tableName;//数据表名称
		$this->selectArray=$selectArray;//查询字段名称
		$this->each_disNums=intval($each_disNums);//每页显示的条目数
		$this->pageNums=ceil($this->allCount/$this->each_disNums);//总页数
		$this->subPage_link=htmlspecialchars($subPage_link);//每个分页的链接，防止xss攻击
		if(!isset($current_page)){
			$this->current_page=1;
		}elseif($current_page>$this->pageNums){
			$this->current_page=$this->pageNums;
		}else{
			$this->current_page=intval($current_page);
		}
	}	
	//获得数据总数
	private function getAllCount($tableName){
		try{
			include_once("./public/pdodbconnect.php");
			// $dsn="mysql:host=localhost;dbname=content";
			// $username="root";
			// $password="";
			// $link=new PDO($dsn,$username,$password);
			// $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//设置异常处理
			$link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//设置返回数组类型值
			$sql="SELECT COUNT(*) FROM {$tableName}";
			$res=$link->query($sql);
			$allCount=$res->fetch()["COUNT(*)"];
			return $allCount;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	//获得查询对象
	public function selectResult(){
		try{
			include("./public/pdodbconnect.php");
			// $dsn="mysql:host=localhost;dbname=content";
			// $user="root";
			// $password="";
			// $link=new PDO($dsn,$user,$password);
			// $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);//设置异常处理
			// $link->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//设置返回数组类型值
			//$searchArray=array("id","username","name","tel","info","createdTime");//模拟传入的数组
			$searchArray=$this->selectArray;
			$current_page_s=($this->current_page-1)*$this->each_disNums;
			$field=implode(',',$searchArray);
			//绑定参数会报错
			/*
			$sql=<<<EOF
					SELECT {$field} FROM {$this->tableName} LIMIT ?,?;
EOF;
			*/
			$sql=<<<EOF
					SELECT {$field} FROM {$this->tableName} LIMIT {$current_page_s},{$this->each_disNums};
EOF;
			$sql=htmlspecialchars($sql);
			$res=$link->prepare($sql);
			// $res->bindParam(1,$this->each_disNums);
			// $res->bindParam(2,$current_page_s);
			//执行语句
			$res->execute();
			//将res写成返回值
			return $res;
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		
	}
	 /*
     构造普通模式的分页
     共4523条记录,每页显示10条,当前第1/453页 [首页] [上页] [下页] [尾页]
	 当前第1/453页 [首页] [上页]  2 3 4 5 6 第1/453页 7 8 9 10 [下页] [尾页]
     */
	public function showPages(){
		$showPageStrings="共{$this->allCount}条记录,每页显示{$this->each_disNums}条<br/>";
		for($i=5;$i>=1;$i--){
			$page_previous=$this->current_page-$i;
			if($page_previous>0){
				$showPageStrings.="<a href='".$this->subPage_link.$page_previous."'>".$page_previous."</a>";
			}
		}
		
		$showPageStrings.="第{$this->current_page}/{$this->pageNums}页";
		
		
		for($i=1;$i<=5;$i++){
			$page_next=$this->current_page+$i;
			if($page_next<=$this->pageNums){
				$showPageStrings.="<a href='".$this->subPage_link.$page_next."'>".$page_next."</a>";
			}
		}
		
		return $showPageStrings;	
	}	
}
