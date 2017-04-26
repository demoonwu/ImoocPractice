<?php
	session_start(); 
	session_destroy();
	$_SESSION=array();
	$_SESSION['isLogin']=0;
	echo "<script>window.location.href='/practice/misson9/object_article/index.php'</script>";
?>