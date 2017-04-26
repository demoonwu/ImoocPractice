<?php
	header("Content-Type: text/html; charset=utf-8");
	require_once("./smarty.php");
	require_once("./pdo.php");
	// 没想好这里怎么处理，先让默认页面就是第604篇文章吧
	$id=isset($_GET['id'])?$_GET['id']:604;
	//设置缓存编码		
	// 设置时区为中国
	date_default_timezone_set('Asia/Shanghai');
	$key=md5($_SERVER['REQUEST_URI']);
	try {
		if (!$smarty->isCached("detail.html",$key)) {
			$sql="SELECT author,title,content,createdTime FROM article WHERE id = {$id}";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			$article=$stmt->fetch(PDO::FETCH_ASSOC);
			$sql="SELECT id,username,content,status,reply,createdTime FROM comment WHERE articleId = {$id}";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			$num=0;
			$comment = array();
			while ($res=$stmt->fetch(PDO::FETCH_ASSOC)) {
				$comment[$num]=$res;
				$num++;
			};
			$smarty->assign("article",$article);
			$smarty->assign("comment",$comment);
		}
		//开启多重缓存
		$smarty->display("detail.html",$key);
		
		
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	

 ?>