<?php
include_once 'UserInformation.php';

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

	// TODO  리팩토링 필요.
	$connection = mysql_connect('mysql2.hosting.paran.com','jejunubus','sne95ic19');
	mysql_select_db("jejunubus_db", $connection);
	mysql_query("set names 'utf8'");
	$query = "INSERT INTO unknownDevice(unknownOs) VALUES('$os') ON DUPLICATE KEY UPDATE unknownOs = '$os'";
	
	if(!mysql_query($query,$connection)){
		  	die('Error : '.mysql_error());
	}
		
	mysql_close($connection);
	
	include_once './view/shortcutIcon/forUnknown.html';
	
	
}

