<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>棋阵</title>
		<style>
			#mainbox{
				border:1px solid black;
				width:500px;
				height:500px;
				margin:0 auto;
			}
			#mainbox .blackbox{
				float:left;
				width:50px;
				height:50px;
				background:black;
			}
			#mainbox .whitebox{
				float:left;
				width:50px;
				height:50px;
				background:white;
			}
		</style>
	</head>
	<body>
		<div id="mainbox">
			<?php
				for($i=1;$i<=100;$i++){
					if((($i+floor(($i-1)/10))%2)==0){
						echo"<div class=\"blackbox\"></div>";
					}else{
						echo"<div class=\"whitebox\"></div>";
					}
				}
			?>
		</div>
	</body>
</html>