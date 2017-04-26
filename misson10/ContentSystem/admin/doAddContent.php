<?php
include_once('./public/addpdorow.class.php');
echo "<pre>";
$content=$_POST;
$content['createdTime']=time();
$row=new addPdoRow($content,"content","Content");
$row->addPdoRow();
// $field=array_keys($content);
// $field=implode(",",$field);
// $value="'".implode("','",$content)."'";
// $sql=<<<EOF
	// INSERT INTO content ({$field}) VALUES (:username,:name,:tel,:info,:createdTime);
// EOF;
// $sql=htmlspecialchars($sql);//防止xss攻击
// try{
	// $link->setAttribute(PDO::ATTR_AUTOCOMMIT,0);
	// //事务处理开始
	// $link->beginTransaction();
	// $res=$link->prepare($sql);
	// //参数绑定bindParam,注意bindParam第二个参数要求使用引用参数
	// foreach($content as $key=>&$value){
		// $res->bindParam(":".$key,$value);
	// }
	// $res->execute();
	// // echo "已注册成功{$res}位,您是本网站第".$link->lastInsertId()."位注册成功的用户,{$user['username']}注册成功";
	// //事务处理结束
	// $link->commit();
	// $link->setAttribute(PDO::ATTR_AUTOCOMMIT,1);
	// echo "<script>window.location.href='./controlPanelContent.php'</script>";
// }catch(PDOException $e){
	// $link->rollBack();
	// echo $e->getMessage();
	// $link->setAttribute(PDO::ATTR_AUTOCOMMIT,1);
	// echo "<script>window.location.href='./addContent.php'</script>";
// }

//htmlspecialchars;