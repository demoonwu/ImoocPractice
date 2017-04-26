<?php
function create_verificationcodeimg($w=600,$h=300,$n=4){
	$im=imagecreatetruecolor($w,$h);
	$color=imagecolorallocate($im,rand(128,255),rand(128,255),rand(128,255));
	imagefill($im,0,0,$color);
	//绘制干扰元素
	for($i=0;$i<30;$i++){
		$color=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
		imagesetpixel($im,rand(0,$w),rand(0,$h),$color);
		imageline($im,rand(0,$w),rand(0,$w),rand(0,$h),rand(0,$h),$color);
		imagerectangle($im,rand(0,$w),rand(0,$h),rand(0,$w),rand(0,$h),$color);
		$arrxy=array();
		$num_points=rand(3,10);
		for($j=0;$j<=$num_points;$j++){
			$arrxy[]=rand(0,$w);
			$arrxy[]=rand(0,$h);
		}
		imagepolygon($im,$arrxy,$num_points,$color);
		$ellipse_x=rand(0,$w);
		$ellipse_y=rand(0,$h);
		imageellipse($im,$ellipse_x,$ellipse_y,rand(0,($w-$ellipse_x)),rand(0,($h-$ellipse_y)),$color);
		$arc_x=rand(0,$w);
		$arc_y=rand(0,$h);
		imagearc($im,$arc_x,$arc_y,rand(0,($w-$arc_x)),rand(0,($h-$arc_y)),rand(-360,360),rand(-360,360),$color);
	}
	//绘制字符串
	$str = "qwuipasjkxcvbnmQWPAKLZXCVBNM134589";
	//$str = "赵钱孙李依不依随你";
	$code=null;
	for($i=0;$i<$n;$i++){
		// $index=rand(0,(strlen($str)-1));
		// $index=($index%3==0)?$index:(($index%3==1)?$index+2:$index+1);
		// $code.=$str[$index].$str[$index+1].$str[$index+2];
		$code.=$str[rand(0,(strlen($str)-1))];
	}
	$_SESSION['code'] = $code;
	//$code=array('潦','草','风','尘');
	//$code="我要吃饭";
	$font_size=ceil(($w-20)/$n);
	$color = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
	//imagettftext($im,$font_size,0,10,ceil(($h+$font_size)/2),$color,"./1.ttf",$code);
	for($i=0;$i<$n;$i++){
		//$codes=$code[3*$i].$code[3*$i+1].$code[3*$i+2];
		imagettftext($im,$font_size,rand(-20,20),20+$w/($n+1)*$i,ceil(($h+$font_size)/2),$color,"./3.ttf",$code[$i]);
	}
	//输出图像 
	
	header("content-type:image/png");
	imagepng($im);
	imagedestroy($im);
}

create_verificationcodeimg();
?>