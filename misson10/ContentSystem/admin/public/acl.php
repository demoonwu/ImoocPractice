<?php
	session_start();
	if($_SESSION['isLogin']!=1){
		echo "<script>window.location.href='./login.php'</script>";
	}