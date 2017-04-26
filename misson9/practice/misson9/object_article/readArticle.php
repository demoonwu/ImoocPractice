<?php
	include("./public/dbconnect.php");
	$articleId=$_REQUEST['id'];

	$sql="SELECT id,title,author,content,summary,status,pic,createdTime FROM article WHERE id={$articleId};";
	if($res=mysqli_query($link,$sql)){
		$article=mysqli_fetch_assoc($res);
	}
?>
	
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $article['title']?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<!-- <link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'> -->
	<!-- <link href='http://fonts.useso.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<header id="fh5co-header" role="banner">
		 <?php  include("./public/navbar.php");?>
	</header>
	<!-- END .header -->
	

	<div id="fh5co-main">
		<div class="fh5co-intro text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h1 class="intro-lead"><?php echo $article['title']?></h1>
						<p class="">作者:<?echo $articleId?><a href="#"  ><?php echo $article['author']?></a></p>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-content">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<div class="col-md-3 col-md-push-9 animate-box">
								<h3>摘要</h3>
								<p><?php echo $article['summary']?></p>
								<p>读者评论:
									<form method="post" action="./doAddComment.php">
									<input type="hidden" name="articleId" value="<?php echo $articleId?>">
									<input type="hidden" name="username" 
										value="<?php 
											if(@$_SESSION['isLogin']==1 || @$_SESSION['isLogin']==2){
												echo $_SESSION['master']['username'];	
											}else{
												echo "陌生访客";
											}	
										?>"/>
									<input type="text" name="content"/>
									<input type="submit" value="提交评论"/>
									</form>
								</p>
							</div>
							<div class="col-md-9 col-md-pull-3">
								<p class="animate-box"><?php echo nl2br($article['content'])?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-services">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div class="row">
							<h2 class="section-lead text-center">读者评论</h2>
							<?php
								$sql="SELECT COUNT(*) FROM comment WHERE articleId={$articleId}";
								$res=mysqli_query($link,$sql);
								$count=mysqli_fetch_assoc($res)['COUNT(*)'];
								$limit=9;
								$pageCount=ceil($count/$limit);
								$page=!empty($_GET['page'])?($_GET['page']<=$pageCount?($_GET['page']>=0?$_GET['page']:1):$pageCount):1;
								$sql="SELECT createdTime,username,content,reply  FROM comment WHERE articleId={$articleId} AND status=1 LIMIT ".($page-1)*$limit.",".$limit.";";
								$res=mysqli_query($link,$sql);
								while(list($createdTime,$username,$content,$reply)=mysqli_fetch_row($res)){
							
							?>
							<div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 fh5co-service">
								<div class="fh5co-icon to-animate"><i class="icon-eye"></i></div>
								<div class="fh5co-desc">
									<h3><?php echo $username?></h3>
									<p><?php 
										date_default_timezone_set("PRC");
										echo date('Y年m月d日H:i:s',$createdTime).'<br/>'.$content;
									?></p>
									<span><?php echo !empty($reply)?'回复:'.$reply:null;?></span>
								</div>	
							</div>
							<?php
							
								}
							?>
							<div class="clearfix visible-sm-block visible-xs-block"></div>
							
						</div>
					</div>
				</div>
				<div class="list-page"> 
							<?php 
								echo "<a href='./readArticle.php?page=1&id={$articleId}'>首页</a>";
								for($page_i=5;$page_i>0;$page_i--){
									$page_previous=$page-$page_i;
									if($page_previous>0){
										echo "<a href='./readArticle.php?page={$page_previous}&id={$articleId}'>".$page_previous."</a>";
									}
								}
								echo "第{$page}/";
								echo "{$pageCount}页";
								for($page_i=1;$page_i<=5;$page_i++){
									$page_next=$page+$page_i;
									if($page_next<=$pageCount){
										echo "<a href='./readArticle.php?page={$page_next}&id={$articleId}'>".$page_next."</a>";
									}
								}
								echo "<a href='./readArticle.php?page={$pageCount}&id={$articleId}'>尾页</a>"
							?>
						</div>
			</div>
		</div>

	</div>

	<footer id="fh5co-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-md-offset-1 text-center">
					<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	
	</body>
</html>
