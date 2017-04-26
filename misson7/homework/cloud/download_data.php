<?php
	$path = $_GET["path"];
	$file = pathinfo($path);
	$fileType = mime_content_type($path);
	$filesize = filesize($path);
	$filename =$_GET["name"];
	header("Content-Type:{$fileType}");
	header("Content-Disposition:attachment;filename={$filename}");
	header("Content-Length:{$filesize}");
	readfile($path);
?>