<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>各种预定义数组的使用</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
		姓名：<input type="text" name="username" required/><br/>
		性别：<select  name="sex">
				<option>男</option>
				<option>女</option>
			  </select><br/>
		年龄：<input type="text" name="userage"/><br/>
		头像：<input type="file" name="pic"/><br/>
		<input type="submit" value="提交"/>
		</form>
	<!---------------下面为PHP脚本-------------->
	<?php
		if(isset($_POST['username'])){
			print_r($_POST);
			echo "<br/><pre>";
			print_r($_FILES);
			echo "</pre><br/>";
			echo"{$_POST['userage']}<br/>";
			
		}
	?>
	</body>
</html>
