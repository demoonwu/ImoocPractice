<?php
//дһ����������ͼƬ���ˮӡ��Ҫ��ˮӡλ�ÿ����ڱ���ͼƬ�Ķ������󣬾��ң����У��ײ����󣬾��ҡ�ˮӡͼƬ���Ըı�͸���ȡ�
//$position=��������(0)������(1)������(2)���ײ�����(3)������(4)
//$transparent=50����͸���ȣ���ΧΪ0��100
function watermark($filename,$watermarkfilename,$w=100,$h=100,$transparent=50,$position=1){
	//-------��������ͨ����------
	$dst_im=imagecreatefromjpeg($filename);
	//ˮӡͼƬ
	$src_im=imagecreatefromjpeg($watermarkfilename);
	list($orig_w,$orig_h)=getimagesize($watermarkfilename);
	if($orig_w>$orig_h){
		 $h=$orig_h*$w/$orig_w;
	}else{
		$w=$orig_w*$h/$orig_h;
	};
	$image_p=imagecreatetruecolor($w,$h);
	imagecopyresampled($image_p,$src_im,0,0,0,0,$w,$h,$orig_w,$orig_h);
	//����λ��
	switch($position){
		//$position=��������(0)������(1)������(2)���ײ�����(3)������(4)
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