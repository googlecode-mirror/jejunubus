<?php
class university extends CI_Controller{
	
	function university(){
		parent::__construct();
	}
	
	function index() {
	}
	
	function cafeteria(){
		$this->load->view('universityCafeteria');
	}
}
?>