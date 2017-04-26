<?php
//写一个函数，给图片添加水印。要求水印位置可以在背景图片的顶部居左，居右，居中，底部居左，居右。水印图片可以改变透明度。
//$position=顶部居左(0)，居右(1)，居中(2)，底部居左(3)，居右(4)
//$transparent=50调整透明度，范围为0到100
function watermark($filename,$watermarkfilename,$w=100,$h=100,$transparent=50,$position=1){
	//-------后期增加通配性------
	$dst_im=imagecreatefromjpeg($filename);
	//水印图片
	$src_im=imagecreatefromjpeg($watermarkfilename);
	list($orig_w,$orig_h)=getimagesize($watermarkfilename);
	if($orig_w>$orig_h){
		 $h=$orig_h*$w/$orig_w;
	}else{
		$w=$orig_w*$h/$orig_h;
	};
	$image_p=imagecreatetruecolor($w,$h);
	imagecopyresampled($image_p,$src_im,0,0,0,0,$w,$h,$orig_w,$orig_h);
	//调整位置
	switch($position){
		//$position=顶部居左(0)，居右(1)，居中(2)，底部居左(3)，居右(4)
		case 0:
			$dst_x=0;
			$dst_y=0;
			break;
		case 1:
			$dst_x=imagesx($dst_im)-imagesx($image_p);
			$dst_y=0;
			break;
		case 2:
			$dst_x=(imagesx($dst_im)-imagesx($image_p))/2;
			$dst_y=0;
			break;
		case 3:
			$dst_x=0;
			$dst_y=imagesy($dst_im)-imagesy($image_p);
			break;
		case 4:
			$dst_x=imagesx($dst_im)-imagesx($image_p);
			$dst_y=imagesy($dst_im)-imagesy($image_p);
			break;
		default:
			$dst_x=(imagesx($dst_im)-imagesx($image_p))/2;
			$dst_y=(imagesy($dst_im)-imagesy($image_p))/2;
	}
	
	imagecopymerge($dst_im,$image_p,$dst_x,$dst_y, 0, 0, imagesx($image_p), imagesy($image_p),$transparent);
	header("content-type:image/jpeg");
	imagejpeg($dst_im);
}

watermark("./img/Lighthouse.jpg","./img/Penguins.jpg");

?>