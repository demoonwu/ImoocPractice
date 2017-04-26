<?php
include_once('./public/pdodbconnect.php');
echo "<pre>";
$user=$_POST;

try{
	$sql="SELECT COUNT(*) AS COUNT FROM USER WHERE username='{$user["username"]}'";
	$res=$link->query($sql);
	$res=$res->fetch(PDO::FETCH_ASSOC);
	if(!empty($res['COUNT'])){
		echo <<<EOF
			<span >该用户名已被注册</span>
			<script type="text/javascript">
				setTimeout(function(){
					window.history.back();
				}),2000);
		</script>
EOF;
		die();

	 }
}catch(Exception $e){
	echo $e->getMessage();
}

$user['password']=md5($_POST['password']);
$user['createdTime']=time();
$field=array_keys($user);
$field=implode(",",$field);
$value="'".implode("','",$user)."'";
$sql=<<<EOF
	INSERT INTO USER ({$field}) VALUES ({$value});
EOF;
$sql=htmlspecialchars($sql);//防止xss攻击
try{
	$link->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
	//事务处理开始
	$link->beginTransaction();
	$res=$link->exec($sql);
	if($res==0){
		throw new PDOException("注册失败");
	};
	echo "已注册成功{$res}位,您是本网站第".$link->lastInsertId()."位注册成功的用户,{$user['username']}注册成功";
	//事务处理结束
	$link->commit();
	$link->setAttribute(PDO::ATTR_AUTOCOMMIT,1);
}catch(PDOException $e){
	$link->rollBack();
	echo $e->getMessage();
	$link->setAttribute(PDO::ATTR_AUTOCOMMIT,1);
}