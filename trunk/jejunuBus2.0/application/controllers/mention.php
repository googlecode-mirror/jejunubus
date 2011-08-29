<?php
class mention extends CI_Controller{
	
	function main(){
		parent::__construct();
	}
	
	function index() {
		$this->load->helper('url');
		
		redirect('http://117.17.102.67/zend/jejunubus/jejunubus1.0/board.php');
	}
}
?>