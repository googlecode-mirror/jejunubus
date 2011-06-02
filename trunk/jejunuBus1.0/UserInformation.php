<?php
class UserInformation{
	var $httpAgent;
	var $device;
	
	function __construct(){
		$this->httpAgent = $_SERVER[HTTP_USER_AGENT];
		$this->device[0] = 'iPhone';
		$this->device[1] = 'Android';
		$this->device[2] = 'Windows';
	}
	
	function getOperatingSystem(){
		foreach ($this->device as $device){
			if(preg_match('/'.$device.'/', $this->httpAgent)){
				return $device;
			}
		}
		return -1;
	}
	
	function getDeviceArray(){
		return $this->device;
	}
}
?>