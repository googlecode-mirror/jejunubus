<?php

class bus_schedules extends CI_Model{
	var $goUpBus = array(800, 816, 832, 848, 904, 920, 940, 1000, 1020, 1040,
					1100, 1120, 1140, 1200, 1300, 1320, 1340, 1400, 1420, 1440, 
					1500, 1520, 1540, 1600, 1620, 1700, 1720, 1740, 1800, 1820, 
					1840, 1900);
			
	var $goDownBus = array(808, 824, 840, 856, 912, 930, 950, 1010, 1030, 1050,
					1110, 1210, 1230, 1250, 1310, 1330, 1350, 1410, 1430, 1450,
					1510, 1530, 1550, 1610, 1630, 1650, 1710, 1730, 1750, 1810,
					1830, 1850};
	
	var $stopByDormi = array();
	
	public function getBusScheduleToUp(){
		return $this->goUpBus;
	}
	public function getBusScheduleToDown(){
		return $this->goDownBus;
	}
	public function getBusScheduleStopBy(){
		return $this->stopByDormi;
	}
}
?>