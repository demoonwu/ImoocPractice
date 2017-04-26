<?php
	function upload($file,$path=null,$type=array('image/jpeg','image/jpg','image/png','image/gif')){
		if(is_uploaded_file($file['tmp_name'])){
			if(!in_array($file['type'],$type)){
				return false;
			};
			if($file['size']>1024*1024){
				return false;
			};
			$filename=explode('.',$file['name']);
			$ext=array_pop($filename);
			$filename=date('YmdHis').rand(100,999);
			$filename=$filename.'.'.$ext;
			if(is_null($path)){
				$path=$_SERVER['DOCUMENT_ROOT']."/practice/misson9/object_article/admin/uploads/";
				$returnFile=$filename;
			}else{
				$path=rtrim($path,'/').'/';
				$returnFile=$filename;
			};
			$filePath=$path.$filename;
			if(move_uploaded_file($file['tmp_name'],$filePath)){
				return $returnFile;
			}else{
				return false;
			}
		}
		
	}
	
	
?>