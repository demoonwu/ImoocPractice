<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	$id=$_GET['id'];
	$pic=$_GET['pic'];
	$sql="DELETE FROM article WHERE ID={$id}";
	if(mysqli_query($link,$sql)){
		unlink("../../upload_article_img/{$pic}");
		echo "<script>window.location.href='./article.php'</script>";
	}else{
		echo"aletr('删除失败');";
	}
?>