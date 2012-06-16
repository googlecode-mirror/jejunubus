<?

class search extends CI_Controller{
	
	function search() {
		parent :: __construct();
		
	}
	
	function index(){
		$this->load->view('search');
	}
}