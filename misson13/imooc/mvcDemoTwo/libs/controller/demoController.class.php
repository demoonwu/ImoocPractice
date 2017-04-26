<?php

	class demoController{
		public function show(){
			$testModel=M("demoModel");
			$data=$testModel->get();
			$testView=V("demoView");
			$testView->display($data);
		}
	}