<?php
/* Smarty version 3.1.30, created on 2017-04-25 21:53:52
  from "D:\xampp\htdocs\practice\misson13\homework\news\Template\list.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ff54f074e0f4_36533781',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '31e81478212ce7bcf585fd3d6af76348c29e89ff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\practice\\misson13\\homework\\news\\Template\\list.html',
      1 => 1493127770,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 3600,
),true)) {
function content_58ff54f074e0f4_36533781 (Smarty_Internal_Template $_smarty_tpl) {
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
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>28</span><br><span style="font-size: 8px;">02月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=604">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>01</span><br><span style="font-size: 8px;">03月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=605">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>01</span><br><span style="font-size: 8px;">03月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=606">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>01</span><br><span style="font-size: 8px;">03月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=607">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=608">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=609">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=610">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=611">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=615">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=616">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=617">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=618">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=619">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=620">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=621">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=622">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=630">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=631">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=632">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=633">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=634">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=635">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=636">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=637">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=638">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=639">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=640">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=641">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=642">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=643">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=644">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=645">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=661">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=662">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=663">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=664">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=665">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=666">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=667">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=668">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=669">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=670">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=671">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=672">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=673">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=674">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=675">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=676">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=677">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=678">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸 </small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=679">鹿鼎记</a></h3>
						</div>
						<div class="content">
							《鹿鼎记》是香港作家金庸（查良镛）的最后一部长篇武侠小说作品。该小说于1969年－1972年间创作，背景设置在明末清初（1644年-1689年）。1969年10月24日开始在《明报》连载，到1972年
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=680">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=681">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=682">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=683">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=684">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=685">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=686">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=687">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=688">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=689">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=690">碧血剑</a></h3>
						</div>
						<div class="content">
							明末，社会动荡，朝政腐败，民不聊生，在东北的满族部落却开始崛起，举兵南侵。蓟辽督师袁崇焕屡破清兵，击毙清太祖努尔哈赤，后被崇祯皇帝下狱，半年后以“咐托不效，专恃欺隐，以市米则资盗，以谋疑则斩帅”等罪名
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=691">射雕英雄传</a></h3>
						</div>
						<div class="content">
							南宋中叶，局势纷乱，郭、杨两家惨遭灭门，其后人各散东西。郭家后人郭靖为人正直坚毅，自小得江南七怪传授武艺，更先后习得洪七公之“降龙十八掌”及周伯通之“九阴真经”。结识了灵敏活泼的黄蓉，二人展开了一段生
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>25</span><br><span style="font-size: 8px;">04月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=692">天龙八部</a></h3>
						</div>
						<div class="content">
							小说以宋哲宗时代为背景，通过宋、辽、大理、西夏、吐蕃及女真等王国之间的武林恩怨和民族矛盾，从哲学的高度对人生和社会进行审视和描写，展示了一幅波澜壮阔的生活画卷。所谓“天龙八部”是佛经用语，包括八种神道
						</div>
					</div>
										<div class="media">
						<div class="pull-left">
							<div class="date"><span>02</span><br><span style="font-size: 8px;">03月</span></div>
						</div>
						<div class="media-body">
							<small style="color:#919191">金庸</small>
							<h3 class="media-heading"><a href="./detailSmarty.php?id=724">连城诀</a></h3>
						</div>
						<div class="content">
							《连城诀》，短篇武侠小说，当代著名作家金庸著。最初于1963年刊载于《明报》和新加坡《南洋商报》合办的《东南亚周刊》，书名原叫《素心剑》。台湾武侠作家古龙多部作品曾以《连城诀》为原型。现收录于 《金庸
						</div>
					</div>
					
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
