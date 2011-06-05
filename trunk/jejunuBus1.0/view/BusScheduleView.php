<?php
include_once './bus/GoOverScheduler.php';
include_once './bus/GoDownScheduler.php';

$goOverScheduler = new GoOverScheduler();
$goDownScheduler = new GoDownScheduler();

$suggestedGoOverSchedule = $goOverScheduler->suggest();
$suggestedGoDownSchedule = $goDownScheduler->suggest();

?>
<div id = 'schedule'>
<ul id = 'goOver'>
<li>정문 to 해대</li>
<?php
foreach ($suggestedGoOverSchedule as $schedule) {
	$time = $schedule->getTime();
	echo "<li id = {$time}>";
	printf('%02d시 %02d분', $time / 100, $time % 100);
	echo "</li>";
}
?>
</ul>
<ul id = 'goDown'>
<li>해대 to 정문</li>
<?php 
foreach ($suggestedGoDownSchedule as $schedule) {
	$time = $schedule->getTime();
	if($schedule->isStopByDormitory()){
		echo "<li id = {$schedule->getTime()} class = stopByDormitory>";
	}else{
		echo "<li id = {$schedule->getTime()}>";
	}
	
	printf('%02d시 %02d분', $time / 100, $time % 100);
	echo "</li>";
}
?>
</ul>
</div>