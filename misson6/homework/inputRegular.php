<!doctype html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>register用户注册</title>
		<style>
			.main-div{
				width:800px;
				height:500px;
				border:5px gray solid;
				margin:50px auto;
			}
			.inputbox{
				width:200px;
				height:20px;
				margin:10px ;
			}
			.main-title{
				text-align:center;
			}
			.remaind{
				color:red;
			}
		</style>
	</head>
	<body>
		<div class="main-div">
			<form action="" method="get">
				<h1 class="main-title">用户注册</h1>
				&nbsp;&nbsp;&nbsp;&nbsp;<span class="remaind" >*为必填字段</span><br/>
				用户名:&nbsp;<input class="inputbox" type="text" name="username" required <?php if(isset($_GET['username'])){echo "value={$_GET['username']}";}?> />
				<?php
					if(isset($_GET['username'])){
						if(preg_match("/[a-zA-z]+([a-zA-z]|\s){0,14}[a-zA-z]+/",$_GET['username'])){
							echo "<span class=\"remaind\" >*合格</span>";
						}else{
							echo "<span class=\"remaind\" >*只允许字母和空格</span>";
						}
					}
				?><br/>
				密码:&nbsp;&nbsp;<input class="inputbox" type="text" name="password" required <?php if(isset($_GET['username'])){echo "value={$_GET['password']}";}?> />				
				<?php
					if(isset($_GET['username'])){
						if(preg_match("/^[a-zA-z]+\w{5,15}$/",$_GET['password'])){
							echo "<span class=\"remaind\" >*合格</span>";
						}else{
							echo "<span class=\"remaind\" >*以字母开头，长度在6-16位之间，只能包含字母、数字、下划线</span>";
						}
					}
				?><br/>
				个人网站:<input class="inputbox" type="text" name="personweb" required <?php if(isset($_GET['username'])){echo "value={$_GET['personweb']}";}?> />				
				<?php
					if(isset($_GET['username'])){
						if(preg_match("/^(http?|https?)(:\/\/)?(\w+)\.([^\.\/]+)([\.\w]*)/",$_GET['personweb'])){
							echo "<span class=\"remaind\" >*合格</span>";
						}else{
							echo "<span class=\"remaind\" >*网站格式不正确</span>";
						}
					}
				?><br/>
				邮箱:&nbsp;&nbsp;<input class="inputbox" type="text" name="email" required <?php if(isset($_GET['username'])){echo "value={$_GET['email']}";}?> />				
				<?php
					if(isset($_GET['username'])){
						if(preg_match("/\w+@\w+\.\w+$/",$_GET['email'])){
							echo "<span class=\"remaind\" >*合格</span>";
						}else{
							echo "<span class=\"remaind\" >*邮箱格式不正确</span>";
						}
					}
				?><br/>
				性别:&nbsp;&nbsp;
				<input type="radio" name="sex" value="male" checked<?php if(isset($_GET['sex'])){if($_GET['sex']=="male"){echo"=\"checked\"";};}?>>男
				<input type="radio" name="sex" value="female" <?php if(isset($_GET['sex'])){if($_GET['sex']=="female"){echo"checked=\"checked\"";};}?>>女<br/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input  type="submit"  value="提交"/>&nbsp;&nbsp;<input  type="reset"  value="重置"/>
			</form>
		</div>
		
	</body>
</html>