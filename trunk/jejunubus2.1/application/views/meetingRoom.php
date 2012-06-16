<!DOCTYPE HTML>
<html>
<head>
<title>제주대 순환버스</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="user-scalable=yes">
	<style type="text/css">
		iframe {border:none; width:100%; height:600px;}
		.roomList {font-size:2.5em; font-weight:bold;}
		.roomList {margin-bottom:20%;}
		.roomList li{float:right; list-style:none; margin:0 1% 8% 1%;}
		
		
	</style>
</head>
<body>
	<div id='doc'>
		<iframe id='resultBox' src='http://203.253.194.57/MAPTEMP/1_180.182.28.169.html'></iframe>
		<ul class='roomList'>
			<li><a href='http://203.253.194.57/MAPTEMP/1_211.246.70.55.html'>1열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/2_211.246.70.55.html'>2열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/6_211.246.70.55.html'>3열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/7_211.246.70.55.html'>4열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/8_211.246.70.55.html'>5열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/9_211.246.70.55.html'>6열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/10_211.246.70.55.html'>자유열람실</a></li>
		</ul>
		<script>
			function showResultToIframe(ele){
				var iframe = document.getElementById('resultBox');
				iframe.src = ele.href;
			}
			
			var list = document.getElementsByTagName('a');
			for(var i=0; i<list.length; i++){
				list[i].onclick = function(){showResultToIframe(this); return false;};
			}
		</script>
	</div>
</body>
</html>