<?php
	$filedata="cloud_data.txt";
	$maxSize=10000000;
	$allowpictype=array("gif","jpeg","jpg","png");
	$path="./wucloud";
	$num=count($_FILES['myfile']['name']);
	//图片处理函数
	function zoomPic($filename,$zoomfilename,$w=100,$h=100){
		$allowtype=array("jpeg","jpg","png","gif");
		$name=explode('/',$filename);
		$name=array_pop($name);
		$suffix=explode('.',$name);
		$pictype=array_pop($suffix);
		if(!in_array($pictype,$allowtype)){
			echo $pictype;
			die("输入非法的图片文件");
		}
		list($orig_w,$orig_h)=getimagesize($filename);
		if($orig_w>$orig_h){
			$h=$orig_h*$w/$orig_w;
		}else{
			$w=$orig_w*$h/$orig_h;
		};
		$image_p=imagecreatetruecolor($w,$h);
		switch($pictype){
			case "jpeg":
			$image=imagecreatefromjpeg($filename);
			break;
			case "jpg":
			$image=imagecreatefromjpeg($filename);
			break;
			case "png":
			$image=imagecreatefrompng($filename);
			break;
			case "gif":
			$image=imagecreatefromgif($filename);
			break;
		}
		imagecopyresampled($image_p,$image,0,0,0,0,$w,$h,$orig_w,$orig_h);
		imagejpeg($image_p,"./wucloudThumbnail".'/'.$zoomfilename);
		imagedestroy($image);
		imagedestroy($image_p);
	}
	//---------------------------------------
	echo "<pre>";
	var_dump($_FILES);
	//上传错误判断
	for($i=0;$i<$num;$i++){
		if($_FILES["myfile"]['error'][$i]>0){
			echo $_FILES["myfile"]['error'][$i];
			echo "上传失败,";
			switch($_FILES['myfile']['error'][$i]){
				case 1:die("第{$i}个上传文件大小超过了PHP中配置文件中的约定值:upload_max_filesize");
				case 2:die("第{$i}个上传文件大小超过了表单中的约定值:MAX_FILE_SIZE");
				case 3:die("第{$i}个文件只被部分上载");
				case 4:die("第{$i}个文件完全没有上传");
				default:echo $_FILES["myfile"]["error'"][$i];
						die("错误{$_FILES["myfile"]['error'][$i]},未知错误");
			};
		};
	//判断上传的后缀名
		list($maintype,$suffix)=explode('/',$_FILES["myfile"]["type"][$i]);
		//echo $suffix.'<br/>';
		//本段加写图片处理功能模块
		// if(in_array($suffix,$allowpictype)){
			// //echo "图片类型为{$suffix}";
			// $handle=fopen($_FILES["myfile"]["tmp_name"][$i]);
			// var_dump($handle);
			// echo "<br/>";
			
			
		// }
		//
		if($_FILES['myfile']["size"][$i]>$maxSize){
			die("第{$i}个超过了允许的最大<b>{$maxSize}</b>字节大小");
		}
		$filename=date("YmdHis").rand(100,999).'.'.$suffix;
		$zoomfilename="zoom".date("YmdHis").rand(100,999).'.'.$suffix;
		if(is_uploaded_file($_FILES["myfile"]["tmp_name"][$i])){
			if(!move_uploaded_file($_FILES["myfile"]["tmp_name"][$i],$path.'/'.$filename)){
				die("问题：不能将文件移动到制定的目录");
			};
		}else{
				die("问题:上传的文件{$_FILES["myfile"]["tmp_name"][$i]}不是一个合法的文件");
		};
		//本段加写图片处理功能模块
		if(in_array($suffix,$allowpictype)){
			//图片缩放函数
			zoomPic($path.'/'.$filename,$zoomfilename);
		}else{
			$zoomfilename="defaultThumbnail.jpg";
		}
		//本段加写数据地址保存模块
		$handle=fopen("./data.txt",'a') or die("打开数据库文件<b>./data.txt</b>失败");
		fwrite($handle,$i."======>exname:{$_FILES['myfile']['name'][$i]}|");
		fwrite($handle,"path:./wucloud/{$filename}|");
		fwrite($handle,"zoompath:./wucloudThumbnail/{$zoomfilename}|");
		fwrite($handle,"size:{$_FILES['myfile']['size'][$i]}byte".PHP_EOL);
		fclose($handle);
		
		//-----------------
		echo "文件{$_FILES["myfile"]["name"][$i]}上传成功,保存在服务器{$path}目录中，大小为{$_FILES['myfile']["size"][$i]}字节<br/>";
		echo "<script>location.href='./index_1.php';</script>";
	}
?>