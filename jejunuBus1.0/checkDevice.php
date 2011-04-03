<?php

if(preg_match('/iPhone | iPad/', $_SERVER['HTTP_USER_AGENT'])){

echo "1. 화면 하단에 메뉴(?)버튼을 누릅니다.";
echo "<img src='./img/webPage.jpg'/>";
echo "<br />";
echo "<br />";
echo "2. 홈 화면에 추가 버튼을 누르세요.";
echo "<br />";
echo "<img src='./img/menu.jpg'/>";
echo "<br />";
echo "<br />";
echo "3. 이름을 입력하고, 추가버튼을 누르세요.";
echo "<br />";
echo "<img src='./img/addPage.jpg'/>";
echo "<br />";
echo "<br />";
echo "4. 웹페이지가 추가 되었습니다.";
echo "<br />";
echo "<img src='./img/iconList.jpg'/>";
echo "<br />";
              
echo "<br />";
} else if(preg_match('/Android/', $_SERVER['HTTP_USER_AGENT'])){
	echo "제작필요."
}
?>