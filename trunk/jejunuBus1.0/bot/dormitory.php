<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- index.php 로 유입시 필요 없음. header에 삽입되어 있음. -->
<?php
include_once './dormitoryParser.php';

cafeteria();

function cafeteria(){
	$dormitory = new dormitoryParser;
	$dormitory->dormitoryCafeteria();
}

?>
