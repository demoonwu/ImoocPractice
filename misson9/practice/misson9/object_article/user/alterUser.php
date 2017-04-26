<?php
	include("../public/acl.php");
	include("../public/dbconnect.php");
	$id=$_GET['id'];
	$sql="SELECT * FROM USER WHERE ID={$id}";
	if($res=mysqli_query($link,$sql)){
		$user=mysqli_fetch_assoc($res);
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>修改用户</title>
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
	<h1>修改用户</h1>
	<div class="login-01">
			<form method="post" action="./doAlterUser.php" name="myform" enctype="multipart/form-data">
				<ul>
				<li class="first">
					<a href="#" class=" icon user"></a><input type="text"  name="username"  class="text" required="required" value="<?php echo $user['username']?>" placeholder="用户名" onfocus="this.placeholder = '';" onblur="this.placeholder = '用户名';" />
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon phone"></a>
						<img src="../images/male.png" width=55px height=55px/><input name='sex' type="radio" value="男" checked />
						<img src="../images/female.png" width=55px height=55px/><input name='sex' type="radio" value="女" />
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon phone"></a><input type="text" class="text"  name="password" placeholder = '密码'  onfocus="this.placeholder = ''; this.type='password';" onblur="this.placeholder = '密码';" />
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon phone"></a><input type="text"  class="text" name="repassword" placeholder="确认密码" onfocus="this.placeholder = '';this.type='password';" onblur="this.placeholder = '确认密码';" />
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon email"></a><input type="text" required="required" class="text" name='email' value="<?php echo $user['email']?>" placeholder="Email" onfocus="this.placeholder = '';" onblur="this.placeholder = 'Email';" >
					<div class="clear"></div>
				</li>
				<li class="first">
					<a href="#" class=" icon email"></a><span style="color:white;">上传头像</span><img src="../admin/uploads/<?php echo $user['pic']?>" width=30><input name="pic" type="file" />
					<div class="clear"></div>
				</li>
				<li class="second">
				<a href="#" class=" icon msg"></a><textarea name='info'  required="required" placeholder="个性签名" onfocus="this.placeholder = '';" onblur="this.placeholder= '个性签名';"><?php echo $user['info']?></textarea>
				<div class="clear"></div>
				</li>
			</ul>
			<input type="hidden" name="id" value="<?php echo $id;?>"/>
			<input type="hidden" name="oldPic" value="<?php echo $user['pic'];?>"/>
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