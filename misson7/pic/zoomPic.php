<?php
	function zoomPic($filename,$w=100,$h=100){
		$allowtype=array("jpeg","jpg","png","gif");
		$name=explode('/',$filename);
		$name=array_pop($name);
		$suffix=explode('.',$name);
		$pictype=array_pop($suffix);
		//$pictype=array_pop(explode('.',array_pop(explode('/',$filename))));
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
		imagejpeg($image_p,"./123".'/'.$filename);
		imagedestroy($image);
		imagedestroy($image_p);
	}
	zoomPic("./123.jpg");

?>