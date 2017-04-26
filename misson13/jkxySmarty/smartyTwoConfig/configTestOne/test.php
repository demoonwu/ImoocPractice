<?php 
	require("../smarty/Smarty.class.php");
	define("ROOT",str_replace('\\', '/', dirname(__FILE__)));
	$smarty=new Smarty();
	//以下为配置文件 五配置两方法
	//下面为五配置
	$smarty->left_delimiter="<{";//坐定界符
	$smarty->right_delimiter="}>";//右定界符
	$smarty->template_dir="tpl";//html模版地址
	//$smarty->config_dir="config";//html模版地址

	$smarty->setConfigDir(ROOT."/config");
	$smarty->compile_dir="template_c";//模版编译生成的文件
	$smarty->cache_dir="cache";//缓存

	$smarty->caching=false;//开启缓存，不过现在一般用memocached
	$smarty->cache_lifetime=60*60*24;//缓存时间
	//下面为两方法

	$smarty->assign("demoTitle","你好，世界!");//定义方法
	$smarty->display("test.html");//display展示方法



 ?>