<?php
include_once 'dormitoryParser.php';
include_once 'dormitoryDatabase.php';

class dormitory{
	var $dormitory;
	var $database;
	
	function __construct(){
		$this->dormitory = new dormitoryParser;
		$this->database = new dormitoryDatabase;
	}
	
	function cafeteria(){
		$isFirst = self::isFirstOfDay(); 
		
		if($isFirst){
			$this->dormitory->dormitoryCafeteria();	
			
		}else {
			$table = 'updateSchedule';
			$attribute = 'dormitory_updated';
			$updateValue = 'now()';
			$condition = 'id = 1';
			$this->database->update($table, $attribute, $updateValue, $condition);
		}
	}
	
	function isFirstOfDay(){
		$table = 'updateSchedule';
		$attribute = 'dormitory_updated';
		
		$result = $this->database->select($table, $attribute, $condition);
		
		$row = mysql_fetch_row($result);
		
		$today = date("Y-m-d", time(0));
		
		if($today != $row[0])
			return true;
		else 
			return false;
		
	}
}

?>
