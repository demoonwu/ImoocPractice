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
		}elseif(is_dir($realpath)){//����·����Ϊ����
			
			$cSize+=countsize($realpath,$nrealpath);//ʹ�õݹ�
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