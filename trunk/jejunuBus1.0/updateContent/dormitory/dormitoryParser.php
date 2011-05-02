<?php

include_once './simple_html_dom.php';
include_once './dormitoryDBFactory.php';
include_once './dormitoryDatabase.php';
include_once './menu.php';

class dormitoryParser {

	var $dayOfWeekIndex = array('mon'=>4, 'tue'=>5, 'wed'=>6, 'thu'=>7, 'fri'=>8, 'sat'=>9, 'sun'=>10);
	var $mealIndex = array('date'=>0, 'earlyMorning'=>1, 'breakfast'=>2, 'lunch'=>3, 'dinner'=>4);
	var $titleIndex = 1;
	var $timeTableIndex = 5;
	var $url= "http://dormitory.jejunu.ac.kr/board/adm/Recipe/restaurant.php";
	var $dormitoryMeal = "dormitoryMeal";
	
	var $html;
	var $connection;
	var $database;
	var $menu;
	
	function __construct() {
		
		$this->connection = dormitoryDBFactory::getdormitoryDBConnection();
		$this->database = new dormitoryDatabase;
		$this->html = file_get_html($this->url);
	}
	
	function dormitoryCafeteria(){
		
		$this->database->deleteAll($this->dormitoryMeal);
		
//		$weeklyTitle = $this->html->find('tr', $this->titleIndex);
//		$weeklyTitle = iconv("EUC-KR", "UTF-8", $weeklyTitle);
//		echo strip_tags($weeklyTitle)."<br />";
		
		$this->menu = new menu();
		
		foreach ($this->dayOfWeekIndex as $dayIndex){
			
			$day = $this->html->find('tr', $dayIndex);
			
			foreach ($this->mealIndex as $index){
				$foundMenu = $day->find('td',$index);
				$value = strip_tags(iconv("EUC-KR", "UTF-8", $foundMenu));
				
				$this->menu->addMenu($value);
			}
		}
		
		$results = $this->menu->getMenu();
		foreach ($results as $array ){
		
		$this->database->excute("INSERT INTO 
			{$this->dormitoryMeal} (menuDate, earlyMorning, breakfast, lunch, dinner)
			VALUES ('{$array[$this->mealIndex['date']]}', 
					'{$array[$this->mealIndex['earlyMorning']]}', 
					'{$array[$this->mealIndex['breakfast']]}', 
					'{$array[$this->mealIndex['lunch']]}', 
					'{$array[$this->mealIndex['dinner']]}')");
		}

		$timeTable = $this->html->find('table',$this->timeTableIndex);

	//	echo iconv("EUC-KR", "UTF-8", $timeTable);
	}
	
	function isUpdated(){
		
		return true;
	}
}
?>