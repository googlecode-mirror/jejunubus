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
	<script type="text/javascript" src="./js/jquery-1.6.1.min.js"></script>
	<script type="text/javascript" src="./js/DormitoryBusJquery.js"></script>
	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-22873643-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>
<body>
<a href=../jejunubus0.0/index.php id='oldVersionLink'>Old버전</a><br />
<?php 


$hour = date("Hi", time(0));
if($hour < 1930 && $hour > 220){
	include_once './view/BusScheduleView.php';	
}else{
	include_once './view/DormitoryBusForFinalExam.php';	
}

?>



<div id = 'information'>
<h3><a href='./howToCreateShortcutIcon.php'>앱처럼 사용할래 </a></h3>
<h3><a href='./contributor.php'>내가 만들었지롱 ㅋㅋ </a></h3>
<h3><a href='./view/dormitoryCafeteria.php'>기숙사밥 </a></h3>
<h3><a href='./view/UniversityCafeteria.php'>신관밥 </a></h3>
<h3><a href='./board.php'>의견게시판</a></h3>
발 디자인에서 해방 시켜주실 후광을 발산하시는 분(디자이너), <br />
손으로 코딩하는게 심심해서 발로 코딩하시는 분(프로그래머), <br />
이 서비스에 접속자수를 폭발적으로 증가시킬수 있는 분(아이디어) , <br />
kosicheol@gmail.com로연락주세요. <br />
당신의 도움을 기다립니다. <br />
<br />
<a href='http://code.google.com/p/jejunubus'>code.google.com/p/jejunubus</a>에서 프로젝트에 대한 내용을 볼수 있습니다. <br />
</div>

</body>
</html>