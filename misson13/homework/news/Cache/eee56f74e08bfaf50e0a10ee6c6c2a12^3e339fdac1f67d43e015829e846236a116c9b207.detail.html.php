<?php
/* Smarty version 3.1.30, created on 2017-04-25 21:51:24
  from "D:\xampp\htdocs\practice\misson13\homework\news\Template\detail.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ff545c0b4a53_16485944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '994da5d9e5d1a8cd07bec5e7e82954b148c58736' => 
    array (
      0 => 'D:\\xampp\\htdocs\\practice\\misson13\\homework\\news\\Template\\detail.html',
      1 => 1493127798,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_58ff545c0b4a53_16485944 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>鹿鼎记</title>
	<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/list.css">

</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container header-padd">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#example-navbar-collapse">
					<span class="sr-only">切换导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#search-navbar-collapse">
					<a href="#">我的账户</a>
				</button>
				<a href="#" class="navbar-brand logo">学编程</a>
			</div>
			<div class="row collapse navbar-collapse" id="search-navbar-collapse">
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group search">
						<input type="text" name="#" class="form-control search" placeholder="搜索">
						<button class="btn btn-link" type="button"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">登录</a></li>
					<li><a href="#">注册</a></li>
				</ul>
			</div>
		</div>
		<div class="progress-diy"></div>
		<div class="container">
			<div class="collapse navbar-collapse" id="example-navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="dropdown" >
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">全部课程<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">前端开发</a></li>
							<li><a href="#">后端开发</a></li>
							<li><a href="#">移动开发</a></li>
							<li><a href="#">数据库</a></li>
						</ul>
					</li>
					<li  class="dropdown" data-toggle="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#">文章咨询<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#">技术文章</a></li>
							<li><a href="#">行业资讯</a></li>
						</ul>
					<li><a href="#">学习小组</a></li>
					<li><a href="#" id="mytab">捐助本站</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="nav-list">
			<div class="navbar sec-nav" role="navigation">
				<ul class="nav nav-tabs nav-tabs-justified">
					<li><a data-toggle="tab" href="#hot">热门文章频道</a></li>
					<li class="active"><a data-toggle="tab" href="#tec">技术文章</a></li>
					<li><a data-toggle="tab" href="#news">行业资讯</a></li>
				</ul>
				<div class="thr-nav">
					<div class="tab-content">
					    <div id="hot" class="tab-pane fade">
					    </div>
					    <div id="tec" class="tab-pane fade in active">
					      <ul class="nav nav-tabs nav-tabs-justified">
					      	<li><a href="">全部</a></li>
					      	<li><a href="">前端</a></li>
					      	<li><a href="">数据库</a></li>
					      	<li><a href="">服务端</a></li>
					      </ul>
					    </div>
					    <div id="news" class="tab-pane fade">
					    </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container clearfix">
		<div class="row">
			<div class="col-md-8 pull-left">
				<div class="list">
					<ol class="breadcrumb list-unstyled">
						<li><a href="#">热门文章</a></li>
						<li><a href="#">技术文章</a></li>
						<li><a href="#">服务端</a></li>
						<li><a href="#">正文</a></li>
					</ol>
					<div class="media">
						<div class="pull-left">
							<div class="date"><span>01</span><br><span style="font-size: 8px;">03月</span></div>
						</div>
						<div class="media-body">
							<h3 class="media-heading" style="margin-top: 10px">鹿鼎记</h3>
							<div class="sns" style="margin-top: 10px">
								<span><span class="glyphicon glyphicon-eye-open"></span><span>&nbsp;1065</span></span>
								<span><span class="glyphicon glyphicon-comment"></span><span>&nbsp;2</span></span>
								<span><span class="glyphicon glyphicon-heart"></span><span>&nbsp;0</span></span>
							</div>
						</div>
					</div>
					<div class="article">
						《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年9月23日刊完，一共连载了2年11个月。本书是金庸的封笔之作，现收录于《金庸作品集》中。之后，《鹿鼎记》被多次拍成电影和电视剧，同时评书、广播剧、漫画、话剧、游戏等相关作品也陆续推出。 				
					</div>
					<div class="article-tag">
						标签：
						<span class="label label-success">linux</span>
					</div>
					<div class="article-sns">
						<span><span class="glyphicon glyphicon-heart"></span><span>&nbsp;0</span></span>
						<span><span class="glyphicon glyphicon-share"></span><span></span></span>
					</div>
					<p style="text-align: center;color: #919191">
						你还没有登录，请先<a href="#" style="color: #188eee">登录</a>或<a style="color: #188eee" href="#">注册</a>！
					</p>
					<!-- 使用foreach循环遍历数组 -->
											<div class="media">
							<div class="pull-left">
								<img src="./img/avatar.png" style="width: 50px;border-radius: 25px">
							</div>
							<div class="media-body article-com">
								<p class="media-heading article-com"><span style="color: #188eee">0admin</span> &middot; 2017-03-05 11:09:57</p>
								<p>我的评论</p>
								<div class="thread">
									<span class="glyphicon glyphicon-thumbs-up">(2)</span>
									<span>回复<span>(0)</span></span>
								</div>
								<!-- 下面为回复的内容 使用模版引擎触发 -->
																<!-- 结束回复判断 -->
							</div>
						</div>	
											<div class="media">
							<div class="pull-left">
								<img src="./img/avatar.png" style="width: 50px;border-radius: 25px">
							</div>
							<div class="media-body article-com">
								<p class="media-heading article-com"><span style="color: #188eee">1陌生访客</span> &middot; 2017-03-05 11:17:27</p>
								<p>很好</p>
								<div class="thread">
									<span class="glyphicon glyphicon-thumbs-up">(2)</span>
									<span>回复<span>(0)</span></span>
								</div>
								<!-- 下面为回复的内容 使用模版引擎触发 -->
																<!-- 结束回复判断 -->
							</div>
						</div>	
					
				</div>
			</div>
			<div class="col-md-4 pull-left">
				<div class="panel panel-default ri-list">
					<div class="panel-heading">
						<h4 class="panel-title">
							热门文章推荐
						</h4>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled">
							<li><span class="num pull-left">1</span><a href="#">php实现递归的三种基本方式...</a></li>
							<li><span class="num pull-left">2</span><a href="#">Mysql 中创建索引和索引的使用问题...</a></li>
							<li><span class="num pull-left">3</span><a href="#">前端开发者应该知道的 CSS 小技巧...</a></li>
							<li><span class="num pull-left">4</span><a href="#">纯CSS完美实现垂直水平居中的6种方式...</a></li>
							<li><span class="num pull-left">5</span><a href="#">linux下的环境变量详解...</a></li>
							<li><span class="num pull-left">6</span><a href="#">千万级别数据的mysql数据表优化...</a></li>
						</ul>
					</div>
				</div>
				<div class="panel panel-default ri-list">
					<div class="panel-heading">
						<h4 class="panel-title">
							热门标签
						</h4>
					</div>
					<div class="panel-body">
						<ul class="list-unstyled list-inline">
							<li><span class="label label-success">thinkphp</span></li>
							<li><span class="label label-success">Mongodb</span></li>
							<li><span class="label label-success">photoshop</span></li>
							<li><span class="label label-success">hbase</span></li>
							<li><span class="label label-success">hdfs</span></li>
							<li><span class="label label-success">hadoop</span></li>
							<li><span class="label label-success">jquery插件</span></li>
							<li><span class="label label-success">jquery</span></li>
							<li><span class="label label-success">微信公众平台</span></li>
							<li><span class="label label-success">swift</span></li>
							<li><span class="label label-success">游戏开发</span></li>
							<li><span class="label label-success">手机游戏开发</span></li>
						</ul>
					</div>
				</div>
				<div class="panel panel-default ri-list">
					<div class="panel-heading">
						<h4 class="panel-title">
							热门评论
						</h4>
					</div>
					<div class="panel-body">
						<div class="media">
							<div class="pull-left">
								<img src="./img/avatar.png" style="width: 50px;border-radius: 25px">
							</div>
							<div class="media-body">
								<p class="media-heading">小凡 <span style="color: #c1c1c1">评论于</span> linux下的环境变量详解</p>
							</div>
							<div class="content-com">
								文章写的不错，顶一个
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img src="./img/avatar.png" style="width: 50px;border-radius: 25px">
							</div>
							<div class="media-body">
								<p class="media-heading">小凡 <span style="color: #c1c1c1">评论于</span> linux下的环境变量详解</p>
							</div>
							<div class="content-com">
								文章写的不错，顶一个
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img src="./img/avatar.png" style="width: 50px;border-radius: 25px">
							</div>
							<div class="media-body">
								<p class="media-heading">小凡 <span style="color: #c1c1c1">评论于</span> linux下的环境变量详解</p>
							</div>
							<div class="content-com">
								文章写的不错，顶一个
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img src="./img/avatar.png" style="width: 50px;border-radius: 25px">
							</div>
							<div class="media-body">
								<p class="media-heading">小凡 <span style="color: #c1c1c1">评论于</span> linux下的环境变量详解</p>
							</div>
							<div class="content-com">
								文章写的不错，顶一个
							</div>
						</div>
						<div class="media">
							<div class="pull-left">
								<img src="./img/avatar.png" style="width: 50px;border-radius: 25px">
							</div>
							<div class="media-body">
								<p class="media-heading">小凡 <span style="color: #c1c1c1">评论于</span> linux下的环境变量详解</p>
							</div>
							<div class="content-com">
								文章写的不错，顶一个
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer">
		<p>Powered by <a href="#">EduSoho v7.5.12</a> ©2014-2017 <a href="#">好知网   课程存档</a> 课程内容版权均归<a href="#">学编程</a>所有 <a href="#">京ICP备13042384号</a></p>
	</div>
<script type="text/javascript" src="./js/jquery.js"></script>
<script type="text/javascript" src="./js/bootstrap.js"></script>
<script type="text/javascript">
	$('#mytab a').click(function(e){
		e.preventDefault();
		$(this).tab('show');
	})

</script>
</body>
</html><?php }
}