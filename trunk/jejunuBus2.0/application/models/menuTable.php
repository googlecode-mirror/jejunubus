<?php
class MenuTable extends CI_Model{
	
	var $food = array(array('','','','',''), 
						array('','','','',''), 
						array('','','','',''), 
						array('','','','',''), 
						array('','','','',''),
						array('','','','',''), 
						array('','','','',''));
	private $dayIndex = 0;
	private $timeIndex = 0;
	private $menuLength;
	
	public function __construct(){
		$this->menuLength = count($this->food[0])-1;
	}
	
	public function getMenu(){
		return $this->food;
	}
	
	public function addMenu($meal){
		$this->food[$this->dayIndex][$this->timeIndex] = $meal;
	if($this->timeIndex >= $this->menuLength){
			$this->dayIndex++;
			$this->timeIndex = 0;
		}else{
			$this->timeIndex++;
		}
	}
}