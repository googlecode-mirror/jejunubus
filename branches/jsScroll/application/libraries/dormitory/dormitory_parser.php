<?php

class dormitory_parser {

	var $dayOfWeekIndex = array('mon'=>4, 'tue'=>5, 'wed'=>6, 'thu'=>7, 'fri'=>8, 'sat'=>9, 'sun'=>10);
 	var $url= "http://dormitory.jejunu.ac.kr/board/adm/Recipe/restaurant.php";	
 	var $mealIndex = array('date'=>0, 'earlyMorning'=>1, 'breakfast'=>2, 'lunch'=>3, 'dinner'=>4);
 	
	var $html;
	var $menu;
	var $ci;
	
	function __construct() {
		$this->ci=&get_instance();
		$this->ci->load->library('simple_html_dom');
		$this->html = file_get_html($this->url);
	}
	
	function cafeteria(){
		$this->ci->load->model('menu_table');
		
		$this->menu = new menu_table();
		foreach ($this->dayOfWeekIndex as $dayIndex){
			
			$day = $this->html->find('tr', $dayIndex);
			
			foreach ($this->mealIndex as $index){
				$foundMenu = $day->find('td',$index);
				$meal = strip_tags(iconv("EUC-KR", "UTF-8", $foundMenu));
				
				$this->menu->addMenu($meal);
			}
		}
	}
	
	function getMenuTableToArray(){
		return $this->menu->getMenu();
	}
}
?>