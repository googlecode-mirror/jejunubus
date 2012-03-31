<?php
class jeju_citybus extends CI_Controller {

	function jeju_citybus() {
		parent :: __construct();
		
	}

	function index() {
		// 클라이언트에서 시간 던저주면 그시간 기준으로 버스시간 제공 
		$isClientThrowMeTheTime = isset($_GET['clientTime']); 
		if($isClientThrowMeTheTime){
			$currentTime = $_GET['clientTime'];
		}else{
			$serverTime = date("Hi");
			$currentTime = $serverTime;
		}
		
		//쿼리문에 들어가는 시간차이를 계산한다. 60진법과 10진법간의 차이조절(1시간 10분 빼기 20분은 50분, 하지만 110빼기 20은 90)
		$betweenTwentyMinutes = 20;
		$scopeTimeForQuery = $this->getScopeTime($currentTime, $betweenTwentyMinutes);
		
		//현재시간 위로 scope분 까지 긁어온다		
		$this->load->database('jejunubus');
		$data['citytime'] = $this->db->query('select * from jejuCityBusTime where ' .
						'(busTime >='.$currentTime.') && (busTime <='.$scopeTimeForQuery.') Order by busTime asc');
		
		$data['scope'] = $betweenTwentyMinutes;
		$data['clientTime'] = $currentTime;
		$this->load->view('jeju_citybus', $data);
	}
	
	function getScopeTime($currentTime, $scope){
		
		//시간에서 분 범위가 60분 이상 일 시에 시를 1올려주고 분을 60 빼준다
		if ((($currentTime + $scope) % 100) >= 60) {
			
			//넘버포맷함수 반올림되서 0.5뺀다 1을 더함
			$tmp = (($currentTime / 100)- 0.5);
			$tmp = number_format($tmp, 0, `.`, `,`);
			$tmp = $tmp  + 1;
			
			$tmp2 = (($currentTime + $scope) % 100) - 60;
			$tmp2 = number_format($tmp2, 0, `.`, `,`);

			//10의 자리가 10보다 작을 경우 00 01 02 03 이런식으로 표시안된다. 0을 붙여줌
			if ($tmp2 < 10) { 
				$scopeTime = $tmp . '0' . $tmp2;
			} else {
				$scopeTime = $tmp . $tmp2;
	
			}
		}else{
			//아닌 경우 그냥 기존시간에 범위인 scope를 더해줌
			$scopeTime = $currentTime + $scope;
		}
		
		return $scopeTime;
	}

}
?>
