
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
		<meta charset="utf-8">
		<link href="css/LoginStyle.css" rel='stylesheet' type='text/css' />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</head>
<body>
	 <!-----start-main---->
	 <div class="main">
		<div class="login-form">
			<h1>通讯录管理系统</h1>
			<h2>用户注册</h2>
					<div class="head">
						<img src="images/user.png" alt=""/>
					</div>
				<form method="post" action="./doRegister.php">
						<!-- 怎样使用正则表达式来框定输入范围？-->
						<input type="text" class="text" required="required" value="用户名" name="username" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}" >
						<input type="text" class="text" required="required" value="手机号码" name="tel" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '手机号码';}" >
						<input type="text" required="required" value="密码" name="password" onfocus="this.type='password';this.value = '';" onblur="if (this.value == '') {this.type='text';this.value = '密码';}">
						<div class="submit">
							<input type="submit" onclick="myFunction()" value="注册" >
					</div>	
					<p><a href="./login.php">用户登录</a></p>
				</form>
			</div>
			<!--//End-login-form-->
			 <!-----start-copyright---->
   					<div class="copy-right">
						<p>Copyright &copy; 2017.Company name All rights reserved.<a target="" href="">DemoonWu</a></p> 
					</div>
				<!-----//end-copyright---->
		</div>
			 <!-----//end-main---->
		 		
 <!--<div style="display:none"><script src='./js/LoginJs.js' language='JavaScript' charset='gb2312'></script></div>-->
</body>
</html>