<?php
	session_start();
	if($_SESSION['isLogin']!=1&&$_SESSION['isLogin']!=2){
		echo "<script>window.location.href='/practice/misson9/object_article/login.php'</script>";
	}
?>