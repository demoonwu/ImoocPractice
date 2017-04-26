<?php
	header("Content-Type: text/html; charset=utf-8");
	require_once("./smarty.php");
	require_once("./pdo.php");
	// 设置时区为中国
	date_default_timezone_set('Asia/Shanghai');
	$key=md5($_SERVER['REQUEST_URI']);
	try {
		if (!$smarty->isCached("list.html",$key)) {
			$sql="SELECT id,author,title,summary,createdTime FROM article";
			$stmt=$pdo->prepare($sql);
			$stmt->execute();
			$num=0;
			$article = array();
			while($res=$stmt->fetch(PDO::FETCH_ASSOC)){
				$article[$num++]=$res;
			};
			$smarty->assign("article",$article);
		}

		$smarty->display("list.html",$key);
		
	} catch (Exception $e) {
		echo $e->getMessage();
	}
 ?>