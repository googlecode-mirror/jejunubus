<?php

if(preg_match('/iPhone | iPad/', $_SERVER['HTTP_USER_AGENT'])){

	echo "1. 화면 하단의 메뉴(?)버튼을 누릅니다.<br />";
	echo "<img src='./img/iphone_webPage.jpg'/>";
	echo "<br />";
	echo "<br />";
	echo "2. 홈 화면에 추가 버튼을 누르세요.<br />";
	echo "<img src='./img/iphone_menu.jpg'/>";
	echo "<br />";
	echo "<br />";
	echo "3. 이름을 입력하고, 추가버튼을 누르세요.<br />";
	echo "<img src='./img/iphone_addPage.jpg'/>";
	echo "<br />";
	echo "<br />";
	echo "4. 아이콘으로 등록되었습니다.<br />";
	echo "<img src='./img/iphone_iconList.jpg'/>";
	echo "<br />";
	echo "<br />";
} else if(preg_match('/Android/', $_SERVER['HTTP_USER_AGENT'])){
	echo "1. 스마트폰 하단의 메뉴버튼을 누르세요.<br />";
	echo "<img src='./img/android_webPage.jpg'/>";
	echo "<br />";
	echo "<br />";
	echo "2. 더보기 메뉴를 선택하세요.<br />";
	echo "<img src='./img/android_menu.jpg'/>";
	echo "<br />";
	echo "<br />";
	echo "3. 대기화면에 단축메뉴 추가를 선택하세요.<br />";
	echo "<img src='./img/android_datiledMenu.jpg'/>";
	echo "<br />";
	echo "<br />";
	echo "4. 다음과 같은 메세지가 나타날것입니다.<br />";
	echo "<img src='./img/android_notifyAdded.jpg'/>";
	echo "<br />";
	echo "<br />";
	echo "5. 아이콘으로 등록되었습니다.<br />";
	echo "<img src='./img/android_addedAppIcon.jpg'/>";
	echo "<br />";
	echo "<br />";
}else{
	echo "아이폰, 안드로이드 폰이 아니군요.<br />";
	echo "kosicheol@gmail.com으로 메일 주시면 제작방법을 만들어서 올리겠습니다.";
}
?>