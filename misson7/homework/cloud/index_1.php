<html>
	<head>
		<title>吴云盘</title>
		<meta charset='utf-8'/>
	</head>
	<body>
		<table>
			<?php
				error_reporting(E_ALL^E_NOTICE);
				$filename="./data.txt";
				if(file_exists($filename)){
					readData($filename);
				}
				function readData($filename){
					$handle=fopen($filename,'r');
					$num=0;
					flock($handle,LOCK_SH);
					while(!feof($handle)){
						$line=fgets($handle);
						if($line!=""){
							list($exname,$path,$zoompath,$size)=explode('|',$line);
							$exname=substr($exname,strrpos($exname,":")+1);
							$zoompath=substr($zoompath,strrpos($zoompath,":")+1);
							$path=substr($path,strrpos($path,":")+1);
							$size=substr($size,strrpos($size,":")+1);
							$bgcolor=$num++%2==0?'#FFFFFF':'#CCCCCC';
							echo"<tr bgcolor={$bgcolor}>";
							echo "<td><img src=\"{$zoompath}\"</td>";
							echo "<td>文件名:{$exname}</td>";
							echo "<td>大小:{$size}</td>";
							echo"<td><a href=\"./download_data.php?path={$path}&name={$exname}\">下载</a></td>";
							echo"<td><a href=\"./delete_data.php?path={$path}&zoompath={$zoompath}\">删除</a></td>";
							echo"</td></tr>";
						}
					}
					fclose($handle);
				}
			?>	
		</table>
		<form action="file_uploadhandle.php" method="post" enctype="multipart/form-data">
			<input type="hidden" name="MAX_FILE_SIZE" value="1000000">
			选择文件:<input type="file" name="myfile[]" multiple /><br/>
			<input type="submit" name="sub" value="上传文件">
		</form>
	</body>	