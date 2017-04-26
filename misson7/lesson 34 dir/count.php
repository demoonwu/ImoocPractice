<?php
$path="../../";
function countsize($path){
	$path=rtrim($path,'/').'/';
	$handle=opendir($path);
	$cSize=0;
	while($file=readdir($handle)){
		$realpath = $path.$file;
		if($file=='.'||$file=='..'){
			continue;
		}elseif(is_dir($realpath)){//传入路径作为参数
			$cSize+=countsize($realpath);//使用递归
		}elseif(is_file($realpath)){
			$cSize+=filesize($realpath);
		};
	};
	return $cSize;
}	
echo countsize($path);
?>

