<?php
	include_once("./public/pdodbconnect.php");
	$id=htmlspecialchars($_GET['id']);
	echo $sql="DELETE FROM  user WHERE ID={$id}";
	if($link->exec($sql)){
		echo "<script>window.location.href='./controlPanelUser.php'</script>";
	}else{
		echo "É¾³ýÊ§°Ü";
	};




?>