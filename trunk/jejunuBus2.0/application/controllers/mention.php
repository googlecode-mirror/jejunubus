<?php
class mention extends CI_Controller{
	
	function main(){
		parent::__construct();
	}
	
	function index() {
		$this->load->helper('url');
		
		redirect('http://jejunubus.hosting.paran.com/jejunubus1.0/board.php');
	}
}
?>