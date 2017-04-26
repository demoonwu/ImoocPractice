<?php
	include("../public/acl.php");
	include("../public/function.php");
	include("../public/dbconnect.php");
	echo "<pre>";
	if($_POST){
		$comment=$_POST;
		$comment['createdTime']=time();
		$field=implode(',',array_keys($comment));
		$value="'".implode("','",$comment)."'";
		$sql="INSERT INTO comment ({$field})VALUES({$value});";
		if(mysqli_query($link,$sql)){
			echo "<script>window.location.href='./comment.php'</script>";
		}else{
			echo "<script>window.location.href='./addComment.php'</script>";
		}
		// echo $sql;
		// var_dump($comment);
		// var_dump($_FILES);
		// var_dump($article);
		// array_filter($user);
		// var_dump($user);
		// var_dump($subscript);
		
	}

?>