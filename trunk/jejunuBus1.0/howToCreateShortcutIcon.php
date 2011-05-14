<?php
include_once 'checkDevice.php';

$userInformation = new UserInformation;
$os = $userInformation->getOperatingSystem();
$deviceArray = $userInformation->getDeviceArray();
$viewFile = './view/shortcutIcon/for'.$os.'.html';

if(is_file($viewFile)){
	foreach ($deviceArray as $device){
		if($os == $device){
			include_once $viewFile;
		}
	}
}else {
	include_once './view/shortcutIcon/forUnknown.html';
	
	//@ Todo: 사용자의 디바이스 정보를 저장할수있는 코드 필요.
}

