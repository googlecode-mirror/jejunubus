<!DOCTYPE HTML>
<html>
	<head>
	<title>제주대순환버스</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=deivce-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/common.css">
		<link rel="stylesheet" type="text/css" href="http://jejunubus.hosting.paran.com/css/defaultStyle.css">
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
		<div id='doc'>
			<div id='searchBar'>
				<form action="librarie/search" method="get">
					<input id="searchInputbox" type="text" name="keyword" value="책이름은??"></input>
					<input type="submit" value="찾아봅시다!!"></input>
				</form>
				<script type="text/javascript" src="http://jejunubus.hosting.paran.com/js/board.js"></script>
				<script type="text/javascript">
					clearText('searchInputbox');	
			</script>
			</div>
			<div id='special'>
				<?php if(isset($special)){?>
				<h6><?php echo $special; ?></h6>
				<?php  }?>
			<script type="text/javascript">
				self.location.hash = 'special';
			</script>
			</div>
			<div id='bus'>
			<?php if(isset($contents['up'])){?>
				<div id='up'>
					<h5>정문-></h5>
					<ul id="goUpBus">
						<?php foreach ($contents['up'] as $content):?>
						<li<?php echo " value=".$content?>>
							<?php printf("%02d : %02d", $content/100, $content%100);?>
						</li>
						<?php endforeach;?>
					</ul>
				</div>
				<div id='down'>
					<h5><-해대</h5>
					<ul id="goDownBus">
						<?php $i = 0;?>
						<?php foreach ($contents['down'] as $content):?>
						<?php if($content == $contents['stopBy'][$i]){?>
						<li<?php echo " class=stopBy value=".$content;?>>
						<?php $i = $i < sizeof($contents['stopBy'])-1 ? $i+1 : $i;?>
						<?php }else{?>
						
						
						<li<?php echo " value=".$content?>>
						<?php }?>
							<?php printf("%02d : %02d", $content/100, $content%100);?>
						</li>
						<?php endforeach;?>
					</ul>
				</div>
			<?php } elseif(isset($contents['dormi'])){?>
				<div id="dormi">
					<h5>365일 언제나 중도버스</h5>
					<ul>
						<li class='on'>24 : 05</li>
					</ul>
				</div>
			<?php }?>
			</div>
			<script type="text/javascript" src="http://jejunubus.hosting.paran.com/js/bus.js"></script>
			<script type="text/javascript">
				
			var hyosungToggle = new Secret({target:'bus',idSet:{goUpBus:'goUpBus', goDownBus:'goDownBus'}});
				
			</script>
			<div class="cls">
			</div>
			<ul class="mainMenu content">
				<li class="contributor">
					<a title="참여자정보" href='contributor'>내가 만들었지롱 ㅋㅋ</a>
				</li>
				<li class="dormitoryCafeteria">
					<a title="기숙사 식당 메뉴" href='dormitory/cafeteria'>기숙사식당메뉴 </a>
				</li>
				<li class="universityCafeteria">
					<a title="신관 식당 메뉴" href='university/cafeteria'>신관메뉴 </a>
				</li>
				<li class="jeju_citybus">
					<a title="제주 시내버스 출발 시간표" href='jeju_citybus'>제대 출발 시내버스</a>
				</li>
				<li class="jeju_citybus">
					<a title="제대 도서관" href='librarie'>도서관 도서검색</a>
				</li>
				<li class="opinionBoard">
					<a title="의견 게시판" href='board/page/1'>의견게시판</a>
				</li>
				
			</ul>
			<ul class="subMenu content">
				<li><a title="프로젝트호스팅홈페이지" href='http://code.google.com/p/jejunubus'>프로젝트 홈페이지</a></li>
			</ul>
		</div>
	</body>
</html>