<?php
class dormitory_service {
	
	var $repository;
	var $paser;
	
	function __construct(){
		$ci=&get_instance();
		$ci->load->library('dormitory/dormitory_repository');	
		$ci->load->library('dormitory/dormitory_parser');
		
		$this->repository = new DormitoryRepository();
		$this->paser = new dormitoryParser($ci);
	}
	
	function updateDorimitoryCafeteria(){
		$this->paser->cafeteria();
		$menuTable = $this->paser->getMenuTableToArray();
		
		$this->repository->deleteCafeteriaMenuTableAll();
		$this->repository->insertMenuTable($menuTable);
	}
	
	function updateConnectionDate(){
			$this->repository->updateConnectionDate();
	}
	
	function markDoneToCafeUpdate(){
		$this->repository->insertDoneToCafeUpdate();
		
	}
	
	function errorLog($errorDesc){
		$this->repository->insertError($errorDesc);
	}
	
	function isUpdatedToday(){
		
		$updatedDay = $this->repository->selectUpdatedDay();
		
		$today = date("Y-m-d", time(0));
		
		if($today != $updatedDay)
			return true;
		else
			return false;
	}
}