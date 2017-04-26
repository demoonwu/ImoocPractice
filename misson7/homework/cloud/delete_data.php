<?php
	$path = $_GET["path"];
	$zoompath=$_GET["zoompath"];
	unlink($path);
	if($zoompath!="./wucloudThumbnail/defaultThumbnail.jpg"){
		unlink($zoompath);
	};
	$filename="./data.txt";
	error_reporting(E_ALL^E_NOTICE);
	
	if(file_exists($filename)){
		deleteData($filename,$path);
	}
	function deleteData($filename,$path){
		$handle=fopen($filename,'r');
		$data=null;
		while(!feof($handle)){
			$exdata=fgets($handle);
			list($exname,$expath,$zoompath,$size)=explode('|',$exdata);
			$expath=substr($expath,strrpos($expath,":")+1);
			if($expath==$path){
				continue;
			}
			$data[]=$exdata;
		}
		$handle=fopen($filename,'w');
		$num=count($data);
		for($i=0;$i<$num-1;$i++){
			fwrite($handle,$data[$i]);
		}
		fclose($handle);
	}
	echo "<script>location.href='./index_1.php';</script>";
?>