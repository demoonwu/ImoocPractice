<!DOCTYPE HTML>
<html dir="ltr" lang="en-US">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>登录</title>

	<!--- CSS --->
	<link rel="stylesheet" href="./css/login-style.css" type="text/css" />

	<!--- Javascript libraries (jQuery and Selectivizr) used for the custom checkbox --->

	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="./js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="./js/selectivizr.js"></script>
		<noscript><link rel="stylesheet" href="./css/login-fallback.css" /></noscript>
	<![endif]-->

	</head>

	<body>

		<div id="container">
			<form action="./doLogin.php" method="post">
				<div class="login">登录</div>
				<div class="username-text">用户名:</div>
				<div class="password-text">密码:</div>
				<div class="username-field">
					<input type="text" name="username" value="用户名" required="required" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '用户名';}"/>
				</div>
				<div class="password-field">
					<input type="password" name="pwd" required="required" onfocus="this.value = '';"  />
				</div>
				<input type="checkbox" name="remember-me" id="remember-me" /><label for="remember-me">记住我</label>
				<div class="register"><a href="./user/register.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注册新用户</a></div>
				<input type="submit"  value="登录" />
			</form>

		</div>
		<div id="footer">
			<a target="_blank" href="./index.php">返回首页</a>
		</div>
<div style="display:none">		
		<script type="text/javascript" src="./js/jquery-1.7.1.min.js"></script>
		<script type="text/javascript" src="./js/selectivizr.js"></script></div>
</body>
</html>