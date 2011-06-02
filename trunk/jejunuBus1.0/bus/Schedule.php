<?php
class Schedule{
	var $time;
	var $stopBy;
	
	public function __construct($time, $stopBy = false){
		$this->time = $time;
		$this->stopBy = $stopBy;
	}
	
	public function setStopBy(){
		$this->stopBy = true;
	}
	
	public function isStopByDormitory(){
		return $this->stopBy;
	}
	
	public function getTime(){
		return $this->time;
	}
}