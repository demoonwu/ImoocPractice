<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	$id=$_GET['id'];
	$pic=$_GET['pic'];
	$sql="DELETE FROM USER WHERE ID={$id}";
	if(mysqli_query($link,$sql)){
		unlink("../uploads/{$pic}");
		//无法返回页面状态,比如我在分页后的第三页删的，会直接返回第一页。
		echo "<script>window.history.back()</script>";
	}else{
		echo"aletr('删除失败');";
	}
?>