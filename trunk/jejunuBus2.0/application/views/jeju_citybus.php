<!DOCTYPE HTML>
<html>
	<head>
	<title>제주대순환버스</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=deivce-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css">
		
		<style type="text/css">
			#top li {float:left; margin-right:28px;}
			#body li {float:left; margin-right:7px; width:85px;}
			#body{clear:both;}
			
			#clr {clear:both;}
		</style>
	</head>
	<body>
		<div id='doc'>
		<?php
		
		$currentTime = date('Hi');
		
		if($testTime == 0){
			$testTime = 0;
			$currentHour = (($currentTime / 100)- 0.5);
			$currentHour = number_format($currentHour, 0,`.`,`,`); //소수점 0자리로
			$currentHour = $currentHour;
			$currentMinute = $currentTime % 100;
			
			echo '기준시간 : '.$currentHour.'시 '.$currentMinute.'분'; 
			
		}else{
			echo '기준시간 : '.$testTime; 
			
		}
		
		?>
		<br>
		<br>
		<hr>
		<ul id="top">
			<li>버스번호 </li>
			<li>출발시간</li>
			<li>목적지</li>
			<li>비고</li>
		</ul>
		<br>	
		<hr>
		<div id="clr"></div>
		<?php foreach ($citytime->result_array() as $bustime):?>
		
	  	<ul id="body">
			<li><?php echo $bustime['busNo'].'번'; ?> </li>
			<!--<li><?php echo (($bustime['busTime']) - date('Hi')).'분전'; ?> </li>-->
			<li><?php 
				
				if($testTime == 0){ 
				//실제
					if(($bustime['busTime'] % 100) < ($currentTime % 100)){
						echo ((($bustime['busTime']) - $currentTime) - (60 - $scope)).'분전';
					}else{
						echo (($bustime['busTime']) - $currentTime).'분전'; 
					}
				}else{ 
				//테스트
					if(($bustime['busTime'] % 100) < ($testTime % 100)){
						echo (($bustime['busTime']) - $testTime - (60 - $scope)).'분전';
					}else{
						echo (($bustime['busTime']) - $testTime).'분전';
					}
				}
				?> </li>
				
			<li><?php echo $bustime['toWhere']; ?> </li>
			<li><?php echo $bustime['etc']; ?> </li>
		</ul>
		<?php endforeach;?>
		<br>
		<hr>
		<br>
		<h5> * 제대 정문에서 출발하는 버스 시간표입니다</h5>
		<br>
		<h5> * 시내버스 시간표를 가지고 만든 페이지이기 때문에 100% 정확하지 않을 수 있습니다.</h5>
		<br>
		<h5> * 버스 출발 20분 전까지 표시됩니다.</h5>
		<br>
		<h5> * 현재 평일 시간표만 제공하고 있습니다.</h5>
		<br>
		<h5></h5>
	</div>
	</body>
</html>