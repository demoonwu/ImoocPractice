<?php 
	require("../smarty/Smarty.class.php");
	$smarty=new Smarty();
	//以下为配置文件 五配置两方法
	//下面为五配置
	$smarty->left_delimiter="{";//坐定界符
	$smarty->right_delimiter="}";//右定界符
	$smarty->template_dir="tpl";//html模版地址
	$smarty->compile_dir="template_c";//模版编译生成的文件
	$smarty->cache_dir="cache";//缓存

	$smarty->caching=true;//开启缓存，不过现在一般用memocached
	$smarty->cache_lifetime=120;//缓存时间
	//下面为两方法

	$smarty->assign("demoTitle","你好，世界!");//定义方法
	$smarty->display("demo.tpl");//display展示方法



 ?>