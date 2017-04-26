<?php
	include("../public/acl.php");
	include('../public/dbconnect.php');
	include('../public/function.php');
	echo "<pre>";
	$id=$_POST['id'];
	unset($_POST['id']);
	$article=$_POST;
	if(!empty($_FILES["pic"]["name"])){
		$article['pic']=upload($_FILES['pic'],"../../upload_article_img");
		$oldPic="../../upload_article_img/".$article['oldPic'];
	};
	unset($article['oldPic']);
	$article['summary']=mb_substr($article['content'],0,100,'utf-8');
	$article=array_filter($article);
	$str=null;
	foreach($article as $key=>$value){
		$str.=$key.'="'.$value.'",';
	}
	$str=trim($str,',');
	$str="UPDATE  article SET {$str} WHERE ID={$id}";
	if(mysqli_query($link,$str)){
		@unlink($oldPic);
		echo"<script>window.location.href='./article.php'</script>";
	}else{
		@unlink("../../upload_article_img/{$article['pic']}");
		echo"<script>alert('修改失败')</script>";
		echo"<script>window.history.back()</script>";
	}
?>