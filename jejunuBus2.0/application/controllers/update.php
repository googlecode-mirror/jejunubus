<?php
class update extends CI_Controller{
	
	function update(){
		parent::__construct();
	}
	
	function index(){
		echo "업데이트할 내용을 선택하세요.";
	}
	
	function dormitory($lastUrlParamater = "none"){
			if("cafeteria" == $lastUrlParamater){
			$this->load->library('dormitory/dormitoryService');
			
			$dormitoryService = new dormitoryService();

			$firstContecter = $dormitoryService->isUpdatedToday();
			
			if($firstContecter == true){
				$dormitoryService->updateDormitoryCafeteria();
			}
			$dormitoryService->updateConnectionDate();
			echo "done";
		}else{
			show_404();
		}
	}
}