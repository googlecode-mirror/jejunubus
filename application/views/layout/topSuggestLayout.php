<div id='bus'>
	<div id='scroll'>
		<?php
		if(isset($goUpBus)){
			showBusSchedule($goUpBus, 'goUp');
		}
		if(isset($goDownBus)){
			showBusSchedule($goDownBus, 'goDown');
		}
		if(isset($libBus)){
			showBusSchedule($libBus, 'libBus');
		}
		if(isset($weather)){
			showWeatherToday($weather);
		}
		?>
	</div>
</div>

<script type="text/javascript" src="../resource/js/iscroll.js"></script>
<script type="text/javascript">
var myScroll;
	myScroll = new iScroll('bus');
</script>

<?php
function showBusSchedule($busSchedule, $clsName=''){
	$name = $busSchedule['name'];
	?>
	<div id= <?php echo $clsName?>>
		<h5> <?php echo $name; ?></h5>
		<ul>
		<?php 
		$len = sizeof($busSchedule) - 1;
		for($i=0; $i<$len; $i++){
			?>
			<li <?php if($busSchedule[$i]->isSpecial()) echo " class=stopBy"; ?> >
			<?php echo $busSchedule[$i]->getHour()." : ".$busSchedule[$i]->getMinute() ?>
			</li>
			<?php
		}
		?>
		</ul>
	</div>
	<?php
}

function showWeatherToday($weather){
	return "구현해주세요 ㅋㅋㅋ";
}
?>