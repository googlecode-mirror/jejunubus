<!DOCTYPE HTML>
<html>
	<head>
	<title>제주대순환버스</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0,user-scalable=no">
		<link rel="stylesheet" type="text/css" href="../resource/css/mainView.css">
		
		<script src="../resource/js/googleAnalytics.js"></script>
	</head>
	<body>
		<div id='doc'>
			<div id='searchBar'>
				<form action="librarie/search" method="get">
					<input id="searchInputbox" type="text" name="keyword" value="책이름은??"></input>
					<input type="submit" value="찾아봅시다!!"></input>
				</form>
			</div>
			<script type="text/javascript" src="../resource/js/board.js"></script>
			<script type="text/javascript">
				clearText('searchInputbox');	
			</script>
			<div id='special'>
				<?php if(isset($special)){?>
				<h6><?php echo $special; ?></h6>
				<?php  }?>
			</div>
			<script type="text/javascript">
				self.location.hash = 'special';
			</script>
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
				<script src="../resource/js/touchScroller.js"></script>
				<script src="../resource/js/scrollbutton.js"></script>
				
				<script type="text/javascript">
				var touchScrollableDivId = "bus";
				touchScroll(touchScrollableDivId);
				
				scrollbutton('bus');
			
				</script>
			<?php }else {?>
				<div id="lib">
					<h5><?php echo $busTitle; ?></h5>
					<ul id='libBus'>
						<?php foreach ($contents['libBus'] as $bus):?>
						<li class=' on'><?php printf("%02d : %02d", $bus/100, $bus%100);?></li>
						<?php endforeach;?>
					</ul>
						<script>
							var aa = document.getElementById('libBus');
							console.log(aa);
							var aas = aa.children;
								</script>
					<ul id='wayPoint'>
						<li><span class='bold'>구제주방면=></span>중앙도서관→염광APT→아라주공APT→아라동사무소→제주여고→중앙여고→법원→구세무서→시청→한국통신→구신중→구신고→양돈조합→중앙여중→농협중앙회→동문로터리→동초등교→제주여상→이도2동사무소→인화동(구행복예식장)→인화초등교→문예회관→삼성의원(종점)</li>
						<li><span class='bold'>(셤기간)02:05 버스(삼양,화북추가구간)=></span>인화동(구행복예식장)→삼화아파트→오현고정류소→화북남문→화북주공→삼양초등학교→인화초등교</li>
						<li><span class='bold'>(셤기간)신제주방면=></span>중앙도서관→법원→시청→터미널→건설회관→신제주로터리→한라병원→노형로터리→부영아파트사거리(종점)</li>
					</ul>
					<script>
						var bb = document.getElementById('wayPoint');
							var bbs = bb.children;
							var path = "";
							console.log(bbs.length, bbs[0].textContent);
							for(var i=0; i<bbs.length; i++){
								path += bbs[i].textContent+"\n\n";
							}
							aas[0].onclick = function(){alert(path);};
					</script>
				</div>
				<script type="text/javascript" src="../resource/js/libBus.js"></script>
				<script type="text/javascript">
					var fx = new Fx({target:'bus', idSet:{wayPoint:'wayPoint'}});
				</script>
			<?php }?>
			</div>
			<ul class="mainMenu">
				<li class="contributor">
					<a title="참여자정보" href='contributor'>참여자정보</a>
				</li>
				<li class="dormitoryCafeteria">
					<a title="기숙사 식당 메뉴" href='dormitory/cafeteria'>기숙사식당메뉴 </a>
				</li>
				<li class="universityCafeteria">
					<a title="신관 식당 메뉴" href='university/cafeteria'>신관메뉴 </a>
				</li>
				<li class="dormitoryCafeteria">
					<a id='citybus' title="제주 시내버스 출발 시간표" href='jeju_citybus'>제대출발 시내버스</a>
					<script>
					var date = new Date();
					var hhmm = date.getHours();
					hhmm = hhmm+""+date.getMinutes();
					var citybus = document.getElementById('citybus');
					citybus.href = citybus.href+'?clientTime='+hhmm;
					</script>
				</li>
				<li class="universityDomitory">
					<a title="제대 도서관" href='librarie/meetingRoom'>중도나이트</a>
				</li>
				<li class="opinionBoard">
					<a title="의견 게시판" href='board/page/1'>의견게시판</a>
				</li>
			</ul>
			<ul class="subMenu">
				<li><a title="프로젝트호스팅홈페이지" href='http://code.google.com/p/jejunubus'>프로젝트 홈페이지</a></li>
			</ul>
		</div>
	</body>
</html>