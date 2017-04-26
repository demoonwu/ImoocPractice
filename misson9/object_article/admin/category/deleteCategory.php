<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	$id=$_GET['id'];
	$sql="DELETE FROM categorys WHERE ID={$id}";
	if(mysqli_query($link,$sql)){
		echo "<script>window.location.href='./category.php'</script>";
	}else{
		echo"aletr('删除失败');";
	}
?>