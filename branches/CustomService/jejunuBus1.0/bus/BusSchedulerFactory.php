<?php
include_once 'Scheduler.php';
class BusSchedulerFactory{
	
	public static function getGoOverBusScheduler(){
		return new Scheduler(array(800, 812, 824, 836, 848, 900, 912, 924, 936, 948,
						1000, 1012, 1024, 1036, 1048, 1100, 1112, 1124, 1136, 1148, 
						1212, 1236, 1300, 1324, 1348, 1400, 1412, 1424, 1436, 1448, 
						1500, 1512, 1524, 1536, 1548, 1600, 1612, 1624, 1636, 1648, 
						1715, 1730, 1800, 1810, 1820, 1830, 1840, 1850));
			
	}
	
	public static function getGoDownBusScheduler(){
		$scheduler = new Scheduler(array(812, 824, 836, 848, 900, 912, 924, 936, 948, 1000, 
						1012, 1024, 1036, 1048, 1100, 1112, 1124, 1136, 1148, 1200, 
						1224, 1248, 1312, 1336,	1400, 1412, 1424, 1436, 1448, 1500, 
						1512, 1524, 1536, 1548, 1600, 1612, 1624, 1636, 1648, 1700, 
						1745, 1800, 1810, 1820, 1830, 1840, 1850, 1900));
		$scheduler->setStopByDormitorySchedule(self::getStopByDormitorySchedule());
		return $scheduler;
	}
	
	public static function getStopByDormitorySchedule(){
		return array(836, 848, 900, 912, 1648, 1700, 1745, 1800);
	}
}