<?php
class dormitory_repository{
	var $ci;
	
	function __construct(){
		$this->ci=&get_instance();
		$this->ci->load->database('jejunubus');		
	}
	
	function updateConnectionDate(){
		$this->ci->db->query('UPDATE updateSchedule SET dormitory_updated = now() where id=1');
	}
	
	function selectUpdatedDay(){
		$query = $this->ci->db->query('SELECT dormitory_updated FROM updateSchedule LIMIT 1');
		
		return $query->row()->dormitory_updated;
	}
	
	function deleteCafeteriaMenuTableAll(){
		$this->ci->db->query('DELETE FROM dormitoryMeal');
	}
	
	function insertDoneToCafeUpdate(){
		$this->ci->db->query("UPDATE updateSchedule SET state='1' where id='1'");
	}
	function insertError($desc){
		$this->ci->db->query("INSERT INTO errorLog(description) VALUES ('$desc')");
	}
	
	function insertMenuTable($menuTable){
		$mealIndex = array('date'=>0, 'earlyMorning'=>1, 'breakfast'=>2, 'lunch'=>3, 'dinner'=>4);
		$dormitoryMeal = "dormitoryMeal";
		
		foreach ($menuTable as $meals){
		
		$this->ci->db->query("INSERT INTO 
			{$dormitoryMeal} (menuDate, earlyMorning, breakfast, lunch, dinner)
			VALUES ('{$meals[$mealIndex['date']]}', 
					'{$meals[$mealIndex['earlyMorning']]}', 
					'{$meals[$mealIndex['breakfast']]}', 
					'{$meals[$mealIndex['lunch']]}', 
					'{$meals[$mealIndex['dinner']]}')");
		}
	}
}