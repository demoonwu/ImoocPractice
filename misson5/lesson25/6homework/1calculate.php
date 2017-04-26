<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>计算器</title>
		<style>
			#mainbox{
				position:relative;
				top:50px;
				height:50px;
				width:582px;
				margin:0 auto;
			}
			#calculateresult{
				position:relative;
				top:60px;
				height:50px;
				width:582px;
				margin:0 auto;
				font-size:40px;
			}
			.inputbox{
				
				width:200px;
				height:50px;
				font-size:40px;
			}
			.selectbox{
				width:50px;
				height:50px;
				font-size:40px;
			}
			.submitbutton{
				width:100px;
				height:50px;
				font-size:40px;
			}
		</style>
	</head>
	<body>
		<div id="mainbox">
			<form action="" method="get">
				<input class="inputbox" type="number" name="input_1"/>
				<select class="selectbox" name="selectbox">
					<option>+</option>
					<option>-</option>
					<option>x</option>
					<option>÷</option>
				</select>
				<input class="inputbox" type="number" name="input_2"/>
				<input class="submitbutton" type="submit" value="计算">
			</form>
		</div>
		<div id="calculateresult">计算结果:
			<?php
				if(isset($_GET['input_1'])){
					$input_1=$_GET['input_1'];
					$input_2=$_GET['input_2'];
					$selectbox=$_GET['selectbox'];
					if(($input_1==' '||$input_2==' '||$input_1==null||$input_2==null||($input_2==0&&$selectbox=='÷'))){
						echo "输入错误";
						exit;
					}
					switch ($selectbox){
						case '+':
							echo "{$input_1}+{$input_2}=".($input_1+$input_2);
							break;
						case '-':
							echo "{$input_1}-{$input_2}=".($input_1-$input_2);
							break;
						case 'x':
							echo "{$input_1}x{$input_2}=".($input_1*$input_2);
							break;
						case '÷':
							echo "{$input_1}÷{$input_2}=".($input_1/$input_2);
							break;
						default:
							echo "计算错误";
					}
					
				}
			?>
		</div>
	</body>
</html>