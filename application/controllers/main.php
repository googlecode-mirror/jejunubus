<?php
class main extends CI_Controller{
	
	function main(){
		parent::__construct();
	}
	
	function index() {
		
		if(isset($_GET['time'])){
			$time = $_GET['time'];
		}else{
			$time = date("Hi");
		}
		
		$this->load->library('busService/BusService');
		
		$bs = new BusService();
		if($time > 730 && $time < 2000){
			$data['goUpBus'] = $bs->getGoUpBusSchedule();
			$data['goDownBus'] = $bs->getGoDownBusSchedule();
		}else{
			$data['libBus'] = $bs->getLibBusSchedule();
		}	
		//도서관 버스 필요.
		// 스크롤 버튼 필요.
		$data['weatherToday'] = 'should Todays RealTime Weather';
		
		$toStringType = true;
		
		$divs['bookSearchBarDiv'] = $this->load->view('layout/LibraryBookSearchBar', "", $toStringType);
		$divs['topSuggestDiv'] = $this->load->view('layout/topSuggestLayout', $data, $toStringType);
		$divs['menuIconListDiv'] = $this->load->view('layout/menuLayout',"", $toStringType);
		
		$this->load->view('layout/mainView', $divs);

	}
	
	function test(){
		$this->load->helper('url');
		echo "BASEPATH: \"".BASEPATH."\"";
		echo "<br>";
		echo "APPPATH: \"".APPPATH."\"";
		echo "<br>";
		echo "base_url(): \"".base_url()."\"";
		echo "<br>";
		echo "current_url(): \"".current_url()."\"";
	}
}