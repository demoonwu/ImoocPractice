<?php
	function createcode($x_size=400,$y_size=300,$n=4,$str="qwuipasjkxcvbnmQWPAKLZXCVBNM134589"){
		$im=imagecreate($x_size,$y_size);
		$color=imagecolorallocate($im,rand(128,255),rand(128,255),rand(128,255));
		imagefill($im,0,0,$color);
		//-------------绘制干扰元素
		for($i=0;$i<18;$i++){
			$color=imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
			imagesetpixel($im,rand(0,$x_size),rand(0,$y_size),$color);
			imageline($im,rand(0,$x_size),rand(0,$x_size),rand(0,$y_size),rand(0,$y_size),$color);
			imagerectangle($im,rand(0,$x_size),rand(0,$y_size),rand(0,$x_size),rand(0,$y_size),$color);
			$arrxy=array();
			$num_points=rand(3,10);
			for($j=0;$j<=$num_points;$j++){
				$arrxy[]=rand(0,$x_size);
				$arrxy[]=rand(0,$y_size);
			}
			imagepolygon($im,$arrxy,$num_points,$color);
			$ellipse_x=rand(0,$x_size);
			$ellipse_y=rand(0,$y_size);
			imageellipse($im,$ellipse_x,$ellipse_y,rand(0,($x_size-$ellipse_x)),rand(0,($y_size-$ellipse_y)),$color);
			$arc_x=rand(0,$x_size);
			$arc_y=rand(0,$y_size);
			imagearc($im,$arc_x,$arc_y,rand(0,($x_size-$arc_x)),rand(0,($y_size-$arc_y)),rand(-360,360),rand(-360,360),$color);
		}
		//-------绘制字符串--------
		$code=null;
		for($i=0;$i<$n;$i++){
			$code.=$str[rand(0,(strlen($str)-1))];
		}
		$_SESSION['code'] = $code;
		
		$font_size=ceil(($x_size-20)/$n);
		$color = imagecolorallocate($im,rand(0,255),rand(0,255),rand(0,255));
		for($i=0;$i<$n;$i++){
			imagettftext($im,$font_size,rand(-20,20),20+$x_size/($n+1)*$i,ceil(($y_size+$font_size)/2),$color,"./3.ttf",$code[$i]);
		}
	//------输出图像 
		header("content-type:image/png");
		imagepng($im);
		imagedestroy($im);
	}
	createcode();
?>