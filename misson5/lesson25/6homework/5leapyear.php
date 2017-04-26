<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>判断是否为闰年</title>
	</head>
	<body>
		<div>
			<form action="" method="get">
				<input type="number" required name="year"/>
				<input type="submit" required value="计算是否为闰年"/>
			</form>
		</div>
		<div>
			<?php
			/*作业提示：
				1、普通年能被4整除而不能被100整除的为闰年。
				2、世纪年能被400整除而不能被3200整除的为闰年。
				3、If语句。
			*/
			if(isset($_GET['year'])){
				$year=$_GET['year'];
				if($year%400==0&&$year%3200!=0){
					echo "{$year}年是闰年";
				}else{
					if($year%4==0&&$year%100!=0){
						echo "{$year}年是闰年";
					}else{
						echo "{$year}年不是闰年";
					}
				}
			}
			?>
		</div>
	</body>
</html>