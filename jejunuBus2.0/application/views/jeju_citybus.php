<!DOCTYPE HTML>
<html>
	<head>
	<title>제주대순환버스</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=deivce-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css">
		
		<style type="text/css">
			#top li {float:left; margin-right:55px;}
			#body li {float:left; margin-right:7px; width:100px;}
			#body{clear:both;}
			
			#clr {clear:both;}
		</style>
	</head>
	<body>
		<div id='doc'>
		<ul id="top">
			<li>버스번호 </li>
			<li>출발시간</li>
			<li>목적지</li>
			<li>비고</li>
		</ul>	
		<div id="clr"></div>
		<?php foreach ($citytime->result_array() as $bustime):?>
		<h5> </h5>
	  	<ul id="body">
			<li><?php echo $bustime['busNo'].'번'; ?> </li>
			<li><?php echo (($bustime['time']) - date('Hi')).'분전'; ?> </li>
			<li><?php echo $bustime['toWhere'].' 방향'; ?> </li>
			<li><?php echo $bustime['etc']; ?> </li>
		</ul>
		<?php endforeach;?>
	</div>
	</body>
</html>