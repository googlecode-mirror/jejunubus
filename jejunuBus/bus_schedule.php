﻿<?php
$goOverSchedule = array(750, 805, 820, 835, 850, 905, 920, 935,  950, 1005,
					1015, 1025,  1035, 1050,  1105,  1115, 1125, 1135, 1145, 1155, 1220, 1250,
					1305, 1335, 1405, 1425, 1445, 1505, 1525, 1545, 1605, 1625, 1645, 1705, 1715,
					1725, 1735, 1745, 1755, 1805, 1815, 1825, 1835, 1845);
$goDownSchedule = array(805, 820, 835, 850, 905, 920, 935, 950, 1005, 1015,
					1025, 1035, 1050, 1105, 1115, 1125, 1135, 1145, 1155, 1205, 1235, 1320, 1350,
					1405, 1425, 1445, 1505, 1525, 1545, 1605, 1625, 1645, 1705, 1715, 1725, 1735,
					1745, 1755, 1805, 1815, 1825, 1835, 1845, 1855);

// echo "server time is : ". date("G",time()) .":". date("i", time()).":". date("s",time());
echo "<div id = 'schedule'>";

echo "<ul id = 'goOver'>";
echo "<li> 정문->해대</li>";
foreach($goOverSchedule as $schedule){
	echo "<li>";
	printf('%02d시 %02d분',$schedule/100, $schedule%100);
	echo "</li>";
}
echo "</ul>";

echo "<ul id = 'goDown'>";
echo "<li> 해대->정문</li>";
foreach($goDownSchedule as $schedule){
	echo "<li>";
	printf('%02d시 %02d분',$schedule/100, $schedule%100);
	echo "</li>";
}
echo "</ul>";
echo "<br /> ";

echo "</div>";
?>