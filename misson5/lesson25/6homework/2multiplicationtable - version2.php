<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>九九乘法表</title>
		<style>
			.box{
				float:left;
				width:100px;
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
			//增加while和dowhile
			function whileout(){
				$i=1;
				while($i<=9){
					$j=1;
					while($j<=$i){
						echo "<div class=\"box\">{$j}X{$i}=".$i*$j."</div>";
						$j++;
					}
					echo "<div class=\"clearbox\"></div>";
					$i++;
				}
				return false;
			}
			function dowhileout(){
				$i=1;
				$j=9;
				do{
					do{
						echo "<div class=\"box\">{$i}X{$j}=".$i*$j."</div>";
						$i++;
					}while($i<=$j);
					$i=1;
					$j--;
					echo "<div class=\"clearbox\"></div>";
				}while($j>0);
				
			}
			function forout(){
				for($i=1;$i<=9;$i++){
					for($j=1;$j<=$i;$j++){
						echo "<div class=\"box\">{$j}X{$i}=".$i*$j."</div>";
					}
				echo "<div class=\"clearbox\"></div>";
				}
			}
			forout();
			echo"<hr/>";
			whileout();
			echo"<hr/>";
			dowhileout();
			echo"<hr/>";
		?>
	</body>
</html>