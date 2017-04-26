<?php 
	// require_once("./libs/controller/demoController.class.php");//控制器Controller的作用是调用模型并调用视图，将模型产生的数据传递给视图，并让相关视图去显示
	// require_once("./libs/view/demoView.class.php");//视图的作用是将取得的数据进行组织、美化等，并最终向用户终端输出;
	// require_once("./libs/model/demoModel.class.php");//模型Model的作用是获取数据并处理返回数据
	require_once("./function.php");
	$controllerAllow = array('demoController','index');
	$methodAllow = array('show','index');
	var_dump($_GET);
	if(!empty($_GET)){
		$controller=in_array($_GET["controller"], $controllerAllow)?illegalFilter($_GET["controller"]):'index';
		$method=in_array($_GET["method"], $methodAllow)?illegalFilter($_GET["method"]):'index';

	}

	C($controller,$method);


 ?>