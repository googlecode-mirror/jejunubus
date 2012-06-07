<?php
class contributor extends CI_Controller{
	
	function contributor(){
		parent::__construct();
		
	}
	
	function index() {
		$this->load->view('contributor');
	}
}
?>