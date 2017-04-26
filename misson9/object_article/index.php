
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>极客酷鱼文章站</title>
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
	<!-- <link rel="shortcut icon" href="favicon.ico"> -->

	<!-- Google Webfonts -->
	<!-- <link href='http://fonts.useso.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'> -->
	<!-- <link href='http://fonts.useso.com/css?family=Roboto+Slab:400,300,100,500' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="css/simple-line-icons.css">
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
		<!-- <div class="fh5co-intro text-center"> -->
			<!-- <div class="container"> -->
				<!-- <div class="row"> -->
					<!-- <div class="col-md-8 col-md-offset-2"> -->
						<!-- <h1 class="intro-lead">极客酷鱼工作室</h1> -->
						<!-- <p class="">重塑数据的价值 </p> -->
					<!-- </div> -->
				<!-- </div> -->
			<!-- </div> -->
		<!-- </div> -->
		<div id="fh5co-portfolio">
			<?php
				include("./public/dbconnect.php");
				$checkCategory=!empty($_GET['category'])?$_GET['category']:null;
				$searchContent=!empty($_REQUEST['searchContent'])?$_REQUEST['searchContent']:null;
				
				$sql="SELECT COUNT(*) FROM article WHERE category LIKE '%{$checkCategory}%' AND content LIKE '%{$searchContent}%'";
				$res=mysqli_query($link,$sql);
				$count=mysqli_fetch_assoc($res)['COUNT(*)'];
				$limit=10;
				$pageCount=ceil($count/$limit);
				$page=!empty($_GET['page'])?($_GET['page']<=$pageCount?($_GET['page']>=0?$_GET['page']:1):$pageCount):1;
				// 下面这行能不能用=号来判断 
				// WHERE category LIKE'%{$checkCategory}%'写成 category='%{$checkCategory}%'时候会在index后面没有参数时候返回空值，如何修改？
				$sql="SELECT id,title,author,summary,status,pic,createdTime FROM article WHERE category LIKE '%{$checkCategory}%' AND content LIKE '%{$searchContent}%' LIMIT ".($page-1)*$limit.",".$limit.";";
				$res=mysqli_query($link,$sql);
				$i=0;
				while(list($id,$title,$author,$summary,$status,$pic,$createTime)=mysqli_fetch_row($res)){
			?>
			<div 
			<?php
					echo ($i%2==0)?'class="fh5co-portfolio-item fh5co-img-right"':'class="fh5co-portfolio-item"';
			?>>
					<div class="fh5co-portfolio-figure animate-box" style="background-image: url(upload_article_img/<?php echo $pic?>);"></div>
					<div class="fh5co-portfolio-description">
						<h2><?php echo $title?></h2>
						<p><?php  echo $summary?></p>
						<p><a href="./readArticle.php?id=<?php echo $id?>" class="btn btn-primary">点击阅读</a></p>
					</div>
				</div>
				<?php
					$i++;
				};
				?>
				<div class="list-page"> 
					<?php 	
						echo "数据共{$count}条,本页{$i}条";
					?>
				</div>
				<div class="list-page"> 
					<?php 
						echo "<a href='./index.php?page=1&searchContent={$searchContent}&category={$checkCategory}'>首页</a>";
						for($page_i=5;$page_i>0;$page_i--){
							$page_previous=$page-$page_i;
							if($page_previous>0){
								echo "<a href='./index.php?page={$page_previous}&searchContent={$searchContent}&category={$checkCategory}'>".$page_previous."</a>";
							}
						}
						echo "第{$page}/";
						echo "{$pageCount}页";
						for($page_i=1;$page_i<=5;$page_i++){
							$page_next=$page+$page_i;
							if($page_next<=$pageCount){
								echo "<a href='./index.php?page={$page_next}&searchContent={$searchContent}&category={$checkCategory}'>".$page_next."</a>";
							}
						}
						echo "<a href='./index.php?page={$pageCount}&searchContent={$searchContent}&category={$checkCategory}'>尾页</a>"
					?>
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
	<!-- Main JS -->
	<script src="js/main.js"></script>

	
	</body>
</html>
