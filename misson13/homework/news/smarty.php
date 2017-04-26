<?php 
	require_once("../smarty/Smarty.class.php");

	$smarty=new Smarty();

	$smarty ->setTemplateDir("./Template")//设置模版目录
			->setCompileDir("./Compile")//设置编译目录
			->setCacheDir("./Cache")//设置缓存目录
			->setConfigDir("./Config");//设置配置目录

	$smarty->auto_literal=false; //The Smarty delimiter tags { and } will be ignored so long as they are surrounded by white space. This behavior can be disabled by setting auto_literal to false.
	$smarty->caching=true;
	$smarty->cache_lifetime=60*60;

	$smarty->right_delimiter="}>";
	$smarty->left_delimiter="<{";
 ?>