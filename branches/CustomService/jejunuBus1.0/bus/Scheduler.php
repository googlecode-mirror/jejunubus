<?php
include_once 'Schedule.php';
class Scheduler{
	var $schedules;
	
	function __construct($_schedule){
		$this->schedules = array();
		
		foreach ($_schedule as $schedule){
			$this->schedules[] = new Schedule($schedule);
		}
		
	}

	function setStopByDormitorySchedule($stopByDormitoryTimes){
		$i = 0;
		
		foreach ($this->schedules as $schedule) {
			if($schedule->getTime() == $stopByDormitoryTimes[$i]){
				$schedule->setStopBy();
				$i++;
			}
		}
	} 
	
	function suggest($past = 2, $front = 3){
		$length = count($this->schedules)-1;
		
		$time = date("Hi",time());
		//$time = 1800;
		
		$index = 0;
		for ($i = 0; $this->schedules[$i]->getTime() <= $time && $i < $length; $i++){
			$index = $i;
		}
		
		if($index < $past - 1){
			$index = $past - 1;
		}else if($index > $length - $front){
			$index = $length - $front;
		}
		
		$results = array();
		for ($i = $index - $past+1; $i < $index + $front+1; $i++){
			$results[] = $this->schedules[$i];
		}
		return $results;
	}
}
?>
