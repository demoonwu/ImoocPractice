<?php 
	class demoController{
		public function show(){
			$testModel=new demoModel();
			$data=$testModel->get();
			$testView=new demoView();
			$testView->display($data);
		}
	}


 ?>