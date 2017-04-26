<?php
	include("./public/dbconnect.php");
	if($_POST){
		$comment=$_REQUEST;
		$comment['createdTime']=time();
		$field=implode(",",array_keys($comment));
		$value="'".implode("','",$comment)."'";
		echo $sql="INSERT INTO comment ({$field})VALUES({$value});";
		if(mysqli_query($link,$sql)){
			echo "<script>window.location.href='./readArticle.php?id={$comment["articleId"]}'</script>";
		}else{
			echo "<script>alert('评论提交失败')</script>";
		}
	}
?>