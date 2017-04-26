<?php
/* Smarty version 3.1.30, created on 2017-04-25 21:40:51
  from "D:\xampp\htdocs\practice\misson13\homework\news\Template\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ff51e3ba0e05_06090367',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e81478212ce7bcf585fd3d6af76348c29e89ff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\practice\\misson13\\homework\\news\\Template\\list.html',
      1 => 1493127256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ff51e3ba0e05_06090367 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'D:\\xampp\\htdocs\\practice\\misson13\\homework\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>文章列表页</title>
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
					<!-- 引擎开启 -->
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['article']->value, 'value', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
					<div class="media">
						<div class="pull-left">
							<div class="date"><span><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['createdTime'],'%d');?>
</span><br><span style="font-size: 8px;"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['createdTime'],'%m');?>
月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191"><?php echo $_smarty_tpl->tpl_vars['value']->value['author'];?>
</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['title'];?>
</a></h3>
						</div>
						<div class="content">
							<?php echo $_smarty_tpl->tpl_vars['value']->value['summary'];?>

						</div>
					</div>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

					<!-- 引擎结束 -->
					
					<nav style="text-align: center;">
						<ul class="pagination text-center">
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#">&gt;</a></li>
							<li><a href="#">尾页</a></li>
						</ul>
					</nav>
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
<?php echo '<script'; ?>
 type="text/javascript" src="./js/jquery.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="./js/bootstrap.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	$('#mytab a').click(function(e){
		e.preventDefault();
		$(this).tab('show');
	})

<?php echo '</script'; ?>
>
</body>
</html><?php }
}
