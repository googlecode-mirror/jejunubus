<!DOCTYPE HTML>
<html>
	<head>
	<title>제주대순환버스</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
		
		<style>
		body{margin:0;}
			ul, ol{list-style-type:none;}
			p, ul, h1, h2, h3, h4, h5, h6{padding:0; margin:0;}
			a{text-decoration:none;}
			
			#doc a{color:#000;}
			
			div.menuList{overflow: hidden; width:100%; margin-bottom:10px;}
			div.menuList li{float:left; width:70px; height:80px; margin-right:5px; margin-left:5px;}
			.menuList li a{display:block; padding-top:70px; font-size:8px; text-align:center; background-size:70px; background:url('http://jejunubus.hosting.paran.com/images/che.jpg') no-repeat;}
			
			#bus {position:relative;overflow:auto; height:110px; width:80%;}
			#bus div {float:left; margin-left:30px; margin-right:30px; text-align:center;}
			
			#bus div ul li{}
			#bus div ul li.on {display:block;}
			#bus li.stopBy {color:red;}
			#special {padding-bottom:10px;}
			#searchBar input {width:30%;}
			#searchBar #searchInputbox {width:65%;}
			
			#special h6 span {font-size:2em;}
			#special h6 a span {color:red;}
			#special h6 .detail {font-size:1em; padding-left:190px;}
		
		</style>
	</head>
	<body>
		<div id='doc' style="width:320px;">
			<?php echo $bookSearchBarDiv		;?>
			<?php echo $topSuggestDiv		;?>
			<?php echo $menuIconListDiv	;?>
		</div>
	</body>
</html>