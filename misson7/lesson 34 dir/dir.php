<?php
	$path="../";
	$handle=opendir($path);
	while($file=readdir($handle)){
		if($file=='.'||$file=='..'){
			continue;
		}elseif(is_file($path.$file)){
			echo "文件名称".$path.$file."文件大小是".filesize($path.$file).'字节<br/>';
		}elseif(is_dir($path.$file)){
			echo "文件目录".$path.$file.'<br/>';
		};	
	};
	
	rewinddir($handle);
	echo readdir($handle).'<br/>';
	echo readdir($handle).'<br/>';
	echo readdir($handle).'<br/>';
	rewinddir($handle);
	echo readdir($handle).'<br/>';
	echo readdir($handle).'<br/>';
	//rmdir($path."demoon");
	 mkdir($path."demoon");
	
	closedir($handle);

?>