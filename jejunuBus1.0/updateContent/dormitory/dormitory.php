<?php
include_once './dormitoryParser.php';

class dormitory{
	$dormitory = new dormitoryparser;
	
	function cafeteria(){
		$this->dormitory->dormitoryCafeteria();
	}
}

?>
