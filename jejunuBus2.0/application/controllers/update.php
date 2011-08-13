<?php
class update extends CI_Controller{
	var $ds;
	
	function update(){
		parent::__construct();
		
		$this->load->library('dormitory/dormitoryService');
			
		$this->ds = new dormitoryService();
	}
	
	function index(){
		
	}
	
	function dormitory($lastUrlParamater = "none"){
		if("cafeteria" == $lastUrlParamater){
			$firstContecter = $this->ds->isUpdatedToday();
			
			if($firstContecter == true){
				$this->ds->updateDorimitoryCafeteria();
			}
			
			$this->ds->updateConnectionDate();
			
			$this->ds->markDoneToCafeUpdate();
		}else{
			$this->ds->errorLog("update/dormitory/{$lastUrlParamater}:no match update paramater");
		}
	}
}