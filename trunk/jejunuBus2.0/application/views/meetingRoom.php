<!DOCTYPE HTML>
<html>
<head>
<title>제주대 순환버스</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="initial-scale=0.3, minimum-scale=0.28, maximum-scale=2.0, user-scalable=yes">
	<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css">
	<style type="text/css">
		iframe {height:600px; border:none; background-color:blue;}
		.aa {position:absolute; width:100%; font-size:2.5em; font-weight:bold;}
		.aa {margin-bottom:20%;}
		.aa li{float:right; margin:0 1%;}
		
		#doc {background-color:red;}
	</style>
</head>
<body>
	<script>
		var supportsOrientationChange = "onorientationchange" in window,
			orientationEvent = supportsOrientationChange ? "orientationchange" : "resize";
		window.addEventListener("onresize", function(){
			console.log('resize', window.width);
		});
		window.addEventListener(orientationEvent, function  () {
			console.log(document.width);
			var isLandscape = true;
			if(isLandscape){
				var viewPort = document.getElementsByName('viewport')[0].content = "initial-scale=0.4";
				console.log(viewPort);
			}
		  //document.getElementsByName('viewport')[0].content="initial-scale=0.4";
		})	
	</script>
	<div id='doc'>
		<iframe id='resultBox' src='http://203.253.194.57/MAPTEMP/1_180.182.28.169.html'></iframe>
		<ul class='aa'>
			<li><a href='http://203.253.194.57/MAPTEMP/1_180.182.28.169.html'>1열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/2_180.182.28.169.html'>2열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/6_180.182.28.169.html'>3열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/7_180.182.28.169.html'>4열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/8_180.182.28.169.html'>5열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/9_180.182.28.169.html'>6열람실</a></li>
			<li><a href='http://203.253.194.57/MAPTEMP/10_180.182.28.169.html'>자유열람실</a></li>
		</ul>
		<script>
			function showResultToIframe(ele){
				var iframe = document.getElementById('resultBox');
				iframe.src = ele.href;
			}
			
			var list = document.getElementsByTagName('a');
			for(var i=0; i<list.length; i++){
				console.log(i, list[i]);
				list[i].onclick = function(){showResultToIframe(this); return false;};
			}
		</script>
	</div>
</body>
</html>