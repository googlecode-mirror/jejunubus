<!DOCTYPE HTML>
<html>
<head>
<title>제주대 순환버스</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=deivce-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
	<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css">
	<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/defaultStyle.css">
</head>
<body>
<?php 
$hour = date("Hi", time(0));
if($hour < 1930 && $hour > 220){
	//include_once './view/BusScheduleView.php';	
}else{
//	include_once './view/DormitoryBusForFinalExam.php';	
}

?>

<div id='doc'>
	<ul class="mainMenu content">
		<li class="contributor"><a title="참여자정보" href='contributor'>내가 만들었지롱 ㅋㅋ</a></li>
		<li class="dormitoryCafeteria"><a title="기숙사 식당 메뉴" href='dormitory/cafeteria'>기숙사식당메뉴 </a></li>
		<li class="universityCafeteria"><a title="신관 식당 메뉴" href='university/cafeteria'>신관메뉴 </a></li>
		<li class="opinionBoard"><a title="의견 게시판" href='./board.php'>의견게시판</a></li>
	</ul>
	<ul class="subMenu content">
		<li><a title="프로젝트호스팅홈페이지" href='http://code.google.com/p/jejunubus'>프로젝트 홈페이지</a></li>
	</ul>
	<br>
	<p style="padding-left:10px;">
	ToDo: 의견 게시판작업,<br>
	기숙사메뉴자동갱신작업,<br>
	버스시간표작업(도서관, 학기중),<br>
	JavaScript
	</p>
	
	
</div>
</body>
</html>