<?php
class dormitoryService {
	
	var $repository;
	var $paser;
	
	function __construct(){
		$ci=&get_instance();
		$ci->load->library('dormitory/DormitoryRepository');	
		$ci->load->library('dormitory/dormitoryParser');
		
		$this->repository = new DormitoryRepository();
		$this->paser = new dormitoryParser($ci);
	}
	
	function updateDormitoryCafeteria(){
		$this->paser->cafeteria();
		$menuTable = $this->paser->getMenuTableToArray();
		
		$this->repository->deleteCafeteriaMenuTableAll();
		$this->repository->insertMenuTable($menuTable);
	}
	
	function updateConnectionDate(){
			$this->repository->updateConnectionDate();
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