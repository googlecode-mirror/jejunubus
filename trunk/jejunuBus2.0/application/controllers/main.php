<?php
class main extends CI_Controller{
	
	function main(){
		parent::__construct();
	}
	
	function index() {
		$time = date("Hi",time());
		
		$data['contents'] = array("dormi"=>2405);
		
		if($time >600 && $time < 2000){
			$this->load->model('BusSchedules');
			$bus = new BusSchedules();
			$data['contents'] = array("up"=>$bus->getBusScheduleToUp(), 
										"down"=>$bus->getBusScheduleToDown(),
										"stopBy"=>$bus->getBusScheduleStopBy());
		}
		$this->load->view('main', $data);
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