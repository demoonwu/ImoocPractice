<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	$id=$_GET['id'];
	$pic=$_GET['pic'];
	$sql="DELETE FROM USER WHERE ID={$id}";
	if(mysqli_query($link,$sql)){
		unlink("../uploads/{$pic}");
		echo "<script>window.location.href='./user.php'</script>";
	}else{
		echo"aletr('删除失败');";
	}
?>