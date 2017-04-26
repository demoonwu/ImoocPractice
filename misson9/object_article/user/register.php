<!DOCTYPE html>
<html>
<head>
<title>注册新用户</title>
<!--navbar头文件-->

	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="../css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="../css/simple-line-icons.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="../css/style.css">
	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>


<!--navbar头文件-->
<link href="./css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pink Contact Form ,Login Forms,Sign up Forms,Registration Forms,News latter Forms,Elements"./>


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<!--webfonts-->
<!-- <link href='http://fonts.useso.com/css?family=Lato:100,300,400,700,100italic,300italic,400italic|Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'> -->
<!-- <link href='http://fonts.useso.com/css?family=Raleway:400,200,300,500,600,800,700,900' rel='stylesheet' type='text/css'> -->
<!--//webfonts-->
</head>
<body style="background:gray;">
	<header id="fh5co-header" role="banner">
	 <?php  include("../public/navbar.php");?>
	</header>
	<h1>注册新用户</h1>
	<div class="login-01">
			<form method="post" action="./doRegister.php" name="myform" enctype="multipart/form-data">
				<ul>
				<li class="first">
					<a href="#" class=" icon user"></a><input type="text"  name="username"  class="text" required="required" placeholder="用户名" onfocus="this.placeholder = '';" onblur="this.placeholder = '用户名';" />
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon phone"></a>
						<img src="../images/male.png" width=55px height=55px/><input name='sex' type="radio" value="男" checked />
						<img src="../images/female.png" width=55px height=55px/><input name='sex' type="radio" value="女" />
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon phone"></a><input type="text" class="text" required="required" name="password" placeholder = '密码'  onfocus="this.placeholder = ''; this.type='password';" onblur="this.placeholder = '密码';" />
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon phone"></a><input type="text" required="required" class="text" name="repassword" placeholder="确认密码" onfocus="this.placeholder = '';this.type='password';" onblur="this.placeholder = '确认密码';" />
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon email"></a><input type="text" required="required" class="text" name='email' placeholder="Email" onfocus="this.placeholder = '';" onblur="this.placeholder = 'Email';" >
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon email"></a><span style="color:white;">上传头像</span><input name="pic" type="file" required="required">
					<div class="clear"></div>
				</li>
				<li class="second">
				<a href="#" class=" icon msg"></a><textarea name='info' required="required" placeholder="个性签名" onfocus="this.placeholder = '';" onblur="this.placeholder= '个性签名';"></textarea>
				<div class="clear"></div>
				</li>
			</ul>
			<input type="submit" onclick="myFunction()" value="提交" >
			<div class="clear"></div>
		</form>
</div>
	<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
	</div>
	<!--//end-copyright-->
</body>
</html>