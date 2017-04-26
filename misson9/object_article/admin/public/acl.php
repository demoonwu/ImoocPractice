<?php
	session_start();
	if($_SESSION['isLogin']!=1){
		echo "<script>window.location.href='/practice/misson9/object_article/admin/login.php'</script>";
	}
?>