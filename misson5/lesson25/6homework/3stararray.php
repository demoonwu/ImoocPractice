<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>星阵</title>
	</head>
	<body>
		<h1>实现制定行数的星阵</h1>
		<form method="get" action="">
			<span>输入行数</span>
			<input type="number" required name="starnum"/>
			<input type="submit" value="提交"/>
		</form><hr/>
		<?php
			//正三角形
			function triangle($starnum){
				echo"<p>正三角形</p>";
				for($i=1;$i<=$starnum;$i++){
					for($j=1;$j<=$i;$j++){
						echo "*";
					}
					echo "<br/>";
				}
			}
			//反三角形
			function triangle_1($starnum){
				echo"<p>反三角形</p>";
				for($i=1;$i<=$starnum;$i++){
					for($j=1;$j<=($starnum-$i);$j++){
						echo "&nbsp";
					}
					for($j=1;$j<=$i;$j++){
						echo "*";
					}
					echo "<br/>";
				}
			}
			//平行四边形
			function parallelogram($starnum){
				echo"<p>平行四边形</p>";
				for($i=1;$i<=$starnum;$i++){
					for($j=1;$j<=($starnum-$i);$j++){
						echo "<span style=\"color:white;\">-</span>";
					}
					for($j=1;$j<=$starnum;$j++){
						echo "*";
					}
					echo "<br/>";
				}
			}
			//等腰三角形
			function triangle_2($starnum){
				echo"<p>等腰三角形</p>";
				for($i=1;$i<=$starnum;$i++){
					for($j=1;$j<=($starnum-$i);$j++){
						echo "<span style=\"color:white;\">-</span>";
					}
					for($j=1;$j<=($i*2-1);$j++){
						echo "*";
					}
					echo "<br/>";
				}
			}
			//倒立等腰三角形
			function triangle_3($starnum){
				echo"<p>倒立等腰三角形</p>";
				for($i=1;$i<=$starnum;$i++){
					for($j=1;$j<$i;$j++){
						echo "<span style=\"color:white;\">-</span>";
					}
					for($j=1;$j<=($starnum*2-$i*2+1);$j++){
						echo "*";
					}					
					echo "<br/>";
				}
			}
			//菱形 能否使用递归？
			function diamond($starnum){
				echo"<p>菱形</p>";
				if($starnum%2!=0){
					for($i=1;$i<=$starnum/2;$i++){
						for($j=1;$j<=$starnum/2-$i+0.5;$j++){
							echo "<span style=\"color:white;\">-</span>";
						}
						for($j=1;$j<=2*$i-1;$j++){
							echo "*";
						}
						echo "<br/>";
					}
					for($j=1;$j<=$starnum;$j++){
							echo "*";
						}
						echo "<br/>";
					
					for($i=1;$i<=$starnum/2;$i++){
						for($j=1;$j<=$i;$j++){
							echo "<span style=\"color:white;\">-</span>";
						}
						for($j=1;$j<=$starnum-2*$i+0.5;$j++){
							echo "*";
						}
						echo "<br/>";
					}
				}else{
					for($i=1;$i<=$starnum/2;$i++){
						for($j=1;$j<=$starnum/2-$i+0.5;$j++){
							echo "<span style=\"color:white;\">-</span>";
						}
						for($j=1;$j<=2*$i-1;$j++){
							echo "*";
						}
						echo "<br/>";
					}					
					for($i=1;$i<=$starnum/2;$i++){
						for($j=1;$j<=$i-1;$j++){
							echo "<span style=\"color:white;\">-</span>";
						}
						for($j=1;$j<=$starnum-2*$i+1;$j++){
							echo "*";
						}
						echo "<br/>";
					}
				}
			}
			//主程序
			if(isset($_GET['starnum'])){
				$starnum=$_GET['starnum'];
				triangle($starnum);
				echo "<hr/>";
				triangle_1($starnum);
				echo "<hr/>";
				parallelogram($starnum);
				echo "<hr/>";
				triangle_2($starnum);
				echo "<hr/>";
				triangle_3($starnum);
				echo "<hr/>";
				diamond($starnum);
				echo "<hr/>";
			}
		?>
	</body>
</html>