<?php
class main extends CI_Controller{
	
	function main(){
		parent::__construct();
	}
	
	function index() {
		$data['contents'] = array('1000','1100');
		
		$this->load->view('main', $data);
	}
	
	function test(){
		echo "test";
	}
}