<?php
$path="../../";
$npath="../../new/";
function countsize($path,$npath){
	$path=rtrim($path,'/').'/';
	$npath=rtrim($npath,'/').'/';
	$handle=opendir($path);
	$cSize=0;
	while($file=readdir($handle)){
		$realpath = $path.$file;
		$nrealpath=$npath.$file.'/';
		if($file=='.'||$file=='..'){
			continue;
		}elseif(is_dir($realpath)){//传入路径作为参数
			
			$cSize+=countsize($realpath,$nrealpath);//使用递归
		}elseif(is_file($realpath)){
			//copy($realpath,$npath.$file);
			mkdir(rtrim($nrealpath,'/'));
			$cSize+=filesize($realpath);
		};
	};
	return $cSize;
}	
echo countsize($path,$npath);
?>