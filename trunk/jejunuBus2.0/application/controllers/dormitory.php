<?php
class dormitory extends CI_Controller{
	
	function dormitory(){
		parent::__construct();
		
	}
	
	function index() {
		
	}
	
	function cafeteria(){
		$this->load->database('jejunubus');
		
		$this->db->select('menuDate, earlyMorning, breakfast, lunch, dinner');
		$this->db->from('dormitoryMeal');
		$data['menu'] = $this->db->get();
		
		$this->db->close();
		$this->load->view('dormitoryCafeteria', $data);
	}
}
?>