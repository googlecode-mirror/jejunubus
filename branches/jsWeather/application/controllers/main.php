<?php
class main extends CI_Controller{
	
	function main(){
		parent::__construct();
	}
	
	function index() {
		$time = date("Hi");

		if(isset($_GET['time'])){
			$time = $_GET['time'];
		}
		
		$data['contents'] = array("dormi"=>2405);
		$this->load->model('bus_schedules');
		
		if($time > 600 && $time < 2000){
			$bus = new bus_schedules();
			$data['contents'] = array(	"up"=>$bus->getBusScheduleToUp(), 
										"down"=>$bus->getBusScheduleToDown(),
										"stopBy"=>$bus->getBusScheduleStopBy()
										);
			
			$data['special'] = "아래로 스크롤 하면 더 많은 시간을 확인 할수 있어요";
		}else {
		//	$data['busTitle'] = "시험기간엔 도서관 버스닷!!!!";
		//	$data['contents'] = array("libBus"=>array(2405, 105, 205));
			$data['special'] = "시간을 누르면 중도버스의 경유지를 볼수 있어요.";
			$data['busTitle'] = "365일 언제나 중도버스";
			$data['contents'] = array("libBus"=>array(2405));
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