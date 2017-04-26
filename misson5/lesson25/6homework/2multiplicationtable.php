<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>九九乘法表</title>
		<style>
			.box{
				float:left;
				width:90px;
				height:27px;
				font-size:27px;
				line-height:27px;
				border:1px solid;
				margin:5px;
			}
			.clearbox{
				clear:both;
			}
		</style>
	</head>
	<body>
		<?php
			for($i=1;$i<=9;$i++){
				for($j=1;$j<=$i;$j++){
					echo "<div class=\"box\">{$j}X{$i}=".$i*$j."</div>";
				}
				echo "<div class=\"clearbox\"></div>";
			}
		?>
	</body>
</html>