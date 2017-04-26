<?php
	include("../public/acl.php");
	include("../public/function.php");
	include("../public/dbconnect.php");
	echo "<pre>";
	if($_POST){
		$article=$_POST;
		if($_FILES){
			$article['pic']=upload($_FILES['pic'],"../../upload_article_img");
		};
		$article['summary']=mb_substr($article['content'],0,100,'utf-8');
		$article['createdTime']=time();
		$field=implode(',',array_keys($article));
		$value="'".implode("','",$article)."'";
		$sql="INSERT INTO article ({$field})VALUES({$value});";
		if(mysqli_query($link,$sql)){
			echo "<script>window.location.href='./article.php'</script>";
		}else{
			echo "<script>window.location.href='./addArticle.php'</script>";
		}
		// echo $sql;
		// var_dump($_POST);
		// var_dump($_FILES);
		// var_dump($article);
		// array_filter($user);
		// var_dump($user);
		// var_dump($subscript);
		
	}

?>