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
		}elseif(is_dir($realpath)){//����·����Ϊ����
			$cSize+=countsize($realpath);//ʹ�õݹ�
		}elseif(is_file($realpath)){
			$cSize+=filesize($realpath);
		};
	};
	return $cSize;
}	
echo countsize($path);
?>

