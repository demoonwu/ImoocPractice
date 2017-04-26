<?php
	session_start(); 
	session_destroy();
	$_SESSION=array();
	$_SESSION['isLogin']=0;
	echo "<script>window.location.href='./login.php'</script>";
?>