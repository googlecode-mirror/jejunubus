<?php
class jeju_citybus extends CI_Controller {

	function jeju_citybus() {
		parent :: __construct();
		
	}

	function index() {

		//		phpinfo();

		$this->load->database('jejunubus');
		$currentTime = date('Hi');
		
		//view에도 scope쓴다
		$scope = 20;	
		
		//테스트용 view 페이지에 testTime도 바꿔줘야
//		$testTime = 830;	
//		$currentTime = $testTime;
		
		$scopeTime = $this->getScopeTime($currentTime, $scope);
		
//		echo "범위시간" .$scopeTime;
//		echo "기준시간" .$currentTime;

		//현재시간 위로 scope분 까지 긁어온다		
				$data['citytime'] = $this->db->query('select * from jejuCityBusTime where ' .
						'(busTime >='.$currentTime.') && (busTime <='.$scopeTime.') Order by busTime asc');
		
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
