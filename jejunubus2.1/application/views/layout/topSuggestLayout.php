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
<script>
	

	function finter(){
		var date = new Date();
		var hhmm = date.getHours();
		hhmm = (hhmm*100)+date.getMinutes();
		if(hhmm > 600 && hhmm < 2100){
			document.getElementById('libBus').style.display = "none";
			document.getElementById('goUp').style.display = "block";
			document.getElementById('goDown').style.display = "block";
		}
		else{
			document.getElementById('libBus').style.display = "block";
			document.getElementById('goUp').style.display = "none";
			document.getElementById('goDown').style.display = "none";
		}
	}

	setInterval(finter(),1000);
	</script>
<script type="text/javascript" src="../resource/js/iscroll.js"></script>
<script type="text/javascript">
var myScroll;
	myScroll = new iScroll('bus');

var BusJs = new Object();

BusJs.getBusTime = function(cTime){
	var ele = document.getElementById('goUp').children[1].children;
	cTime = cTime * 1;
	for(var i =0; i<ele.length; i++){
	  if(cTime<=(ele[i].value*1)){
	    return ele[i<=1 ? 0 : i-2].value;
	   }
	 }
 return 800;
}
BusJs.setValue = function(){
	var tt = document.getElementById('goUp').children[1].children;
	for(var i=0; i<tt.length; i++){ tt[i].value = Number(tt[i].textContent.replace(/^\s+|\s+$/g, '').replace(':','').replace("  ",''))
	}
}
hhmm = 1200;
var tt = document.getElementById('goUp').children[1]
for(var i=0; i<tt.length; i++){ tt[i].value = Number(tt[i].textContent.replace(/^\s+|\s+$/g, '').replace(':','').replace("  ",''))}

var bb = BusJs;

bb.setValue();

var a = new Array;
for(var i=0; i<tt.children.length ;i++){a.push(tt.children[i].value);}

function getV(time) {
 for(var i =0; i<tt.children.length; i++){
  if(time<=(tt.children[i].value*1)){
    return tt.children[i<=1 ? 0 : i-2].value;
   }
 }
 return 800;
}

function getTimeHHMM(){
	var date = new Date();
	var hh = date.getHours();
	var mm = date.getMinutes();
	if(10 > mm * 1)
		mm = "0" + mm;
	
	return hh+""+mm;
}
var bb = BusJs;
var t = getTimeHHMM();
var str = bb.getBusTime(t);
myScroll.scrollToElement("li[value='"+str+"']");
		
var myVar=setInterval(
	function(){
		var bb = BusJs;
		var t = getTimeHHMM();
		var str = bb.getBusTime(t);
		myScroll.scrollToElement("li[value='"+str+"']");
	}
	,60000);
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