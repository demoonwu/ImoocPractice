<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	if($_POST){
		$category=$_POST;
		$field=implode(',',array_keys($category));
		$value="'".implode("','",$category)."'";
		$sql="INSERT INTO categorys ({$field})VALUES({$value});";
		if(mysqli_query($link,$sql)){
			echo "<script>window.location.href='./category.php'</script>";
		}else{
			echo "<script>window.location.href='./category.php'</script>";
		}
	}

?>