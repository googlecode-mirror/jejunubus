<html>
<head>
<title> 제주대 순환버스 for Smart phone</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=deivce-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<!--	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />-->
	<link rel="apple-touch-icon" href="./favicon.png"/>
	<link rel="apple-touch-startup-image" href="./favicon.png">
	
	<link rel="stylesheet" type="text/css" href="./css/defaultStyle.css"/> 
	<link rel="stylesheet" type="text/css" href="./css/DormitoryBus.css"/> 
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

<div id = 'information'>
<!-- <h3><a href='library'>Library</a></h3> -->
<h3><a href='contributor'>내가 만들었지롱 ㅋㅋ </a></h3>
<h3><a href='dormitoryCafeteria'>기숙사밥 </a></h3>
<h3><a href='universityCafeteria'>신관밥 </a></h3>
<h3><a href='./board.php'>의견게시판</a></h3>
<br />
<a href='http://code.google.com/p/jejunubus'>code.google.com/p/jejunubus</a>에서 프로젝트에 대한 내용을 볼수 있습니다. <br />
</div>

</body>
</html>