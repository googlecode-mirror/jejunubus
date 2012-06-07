<?php
class Bus extends CI_Model{
	var $t;
	var $excp;
	
	function setTime($time, $excp = FALSE){
		$this->t = $time;
		$this->excp = $excp;
	}
	
	function getHour(){
		return str_pad(floor($this->t/100), 2, "0", STR_PAD_LEFT);
	}
	
	function getMinute(){
		return str_pad($this->t%100, 2, "0", STR_PAD_LEFT);
	}
	
	function isSpecial(){
		return $this->excp;
	}
}
	
?>