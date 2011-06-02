<?php
include_once 'Scheduler.php';
include_once 'SchedulerInterface.php';
include_once 'BusSchedulerFactory.php';

class GoDownScheduler implements SchedulerInterface{
	var $scheduler;
	
	public function __construct() {
		$this->scheduler = BusSchedulerFactory::getGoDownBusScheduler();
	}

	public function suggest() {
		return $this->scheduler->suggest();		
	}
	
	
}