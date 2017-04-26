<?php 
	/*
	1、浏览者-》调用控制器control对他发出指令；
	2、控制器-》按照指令选取一个合适的模型；
	3、模型-》按控制器指令取相应的数据
	4、控制器-》按指令选取相应视图；
	5、视图View-》把第三部渠道的数据按用户想要的样子显示出来


	*/
	function __autoload($className){
		require_once("./".$className.".class.php");//调用自动加载类
	}
	//require_once("./demoController.class.php");//控制器Controller的作用是调用模型并调用视图，将模型产生的数据传递给视图，并让相关视图去显示
	require_once("./demoView.class.php");//视图的作用是将取得的数据进行组织、美化等，并最终向用户终端输出;
	require_once("./demoModel.class.php");//模型Model的作用是获取数据并处理返回数据
	$demo=new demoController();
	$demo->show();
 ?>