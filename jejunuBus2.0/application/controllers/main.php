<?php
class main extends CI_Controller{
	
	function main(){
		parent::__construct();
	}
	
	function index() {
		$time = date("Hi",time());
		
		$data['contents'] = array("dormi"=>2405);
		$this->load->model('bus_schedules');
		
		if($time > 600 && $time < 2000){
			$bus = new bus_schedules();
			$data['contents'] = array(	"up"=>$bus->getBusScheduleToUp(), 
										"down"=>$bus->getBusScheduleToDown(),
										"stopBy"=>$bus->getBusScheduleStopBy());
			
			$data['special'] = "시간을 누르면 전체시간표를 볼 수 있어요.<br> 다시 누르면 원상복귀!!";
		}else {
			$data['special'] = "1시, 2시 구간은 21일까지. 시간을 누르면 노선을 볼수 있어요.";
			$data['busTitle'] = "시험기간엔 도서관 버스닷!!!!";
			$data['contents'] = array("libBus"=>array(2405, 105, 205));
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