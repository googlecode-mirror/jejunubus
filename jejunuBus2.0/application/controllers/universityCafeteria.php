<?php
class UniversityCafeteria extends CI_Controller{
	
	function UniversityCafeteria(){
		parent::__construct();
		
	}
	
	function index() {
		$this->load->view('universityCafeteria');
	}
}
?>