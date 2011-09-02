<?php
class jeju_citybus extends CI_Controller {

	function jeju_citybus() {
		parent :: __construct();

	}


	function index() {

		//		phpinfo();

		$this->load->database('jejunubus');
		$currentTime = date('Hi');
		
		
		//현재시간 위로 20분 까지 긁어온다		
		$data['citytime'] = $this->db->query('select * from jejuCityBusTime where ' .
				'(time >='.($currentTime).' && time <='.($currentTime+20).') Order by time asc');

		$this->load->view('jeju_citybus', $data);

	}

}
?>
