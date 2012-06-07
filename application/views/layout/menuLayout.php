<div class='menuList'>
	<ul>
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
		<li>
			<a title="프로젝트호스팅홈페이지" href='http://code.google.com/p/jejunubus'>프로젝트 홈페이지</a>
		</li>
	</ul>
</div>