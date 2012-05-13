<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/test/css/dormitoryCafeteria.css"/>
<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css"/>
<style>
	.orginLink {text-align:right; display:block; }
</style>
</head>

<body>
	<div id='doc'>
		<a class='orginLink' href="http://dormitory.jejunu.ac.kr/recipe/02.php">&#8730 기숙사 식당 페이지 바로가기</a>
		<div id='menu'>
			<?php foreach ($menu->result_array() as $meal):?>
			<div>
				<h5><?php echo $meal['menuDate']; ?> </h5>
			  	<ul>
					<li><?php echo "조식 : ".$meal['earlyMorning']; ?> </li>
					<li><?php echo "아침 : ".$meal['breakfast']; ?> </li>
					<li><?php echo "점심 : ".$meal['lunch']; ?> </li>
					<li><?php echo "저녁 : ".$meal['dinner']; ?> </li>
				</ul>
			</div>
			<?php endforeach;?>
		</div>
		<script type="text/javascript">
			function shortenMenu(id){
				var date = new Date();
				var weekDayIndex = date.getDay();
				weekDayIndex = weekDayIndex == 0 ? 7: weekDayIndex;
				weekDayIndex--;
								
				var div = document.getElementById(id);
				var week = div.getElementsByTagName('div');

				week[weekDayIndex].className = "on";
				week[weekDayIndex == 6 ? 0: weekDayIndex+1].className = "on";
			}
			shortenMenu('menu');
		</script>
		<h5>평 일</h5>
		<ul>
			<li> 조기 : 07:00 - 07:30(빵,우유)</li>
			<li> 아침 : 07:30 - 09:00</li>
			<li> 저녁 : 17:00 - 19:00</li>
		</ul>
		<h5>주 말</h5>
		<ul>
			<li> 아침 : 07:30 - 09:00</li>
			<li> 점심 : 12:30 - 13:30(신청자에 한함)</li>
			<li> 저녁 : 17:30 - 19:00 </li>
		</ul>
		<h5> 방학 중 특별개관</h5>
		<ul>
			<li> 조기 : 07:00 - 07:30(빵,우유)</li>
			<li> 아침 : 07:30 - 09:00</li>
			<li> 저녁 : 17:30 - 19:00</li>
		</ul>
		<iframe id='hidden' src = '../update/dormitory/cafeteria'>
		</iframe>
	</div>
</body>
</html>

