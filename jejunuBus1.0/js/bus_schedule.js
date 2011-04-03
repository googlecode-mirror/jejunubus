Event.observe(window, "load", function(){loadMethod();});
var busSchedule = new BusSchedule(); 

function loadMethod(){
	Event.observe("changeSchedule", "click", changeScheduleClick);
	
	displaySchedule();
	
}

function changeScheduleClick(){
	var div = $("schedule");
	var el = $("changeSchedule");

	div.removeChild($("goOver"));
	div.removeChild($("goDown"))
	
	var id = el.value;
	
	if(id == "전체보기") {
		el.value = "현재보기";
		busSchedule.AllTimeDomCreate(div);					
	}
	else {	
		displaySchedule();
		el.value = "전체보기";
	}
}

function displaySchedule(){
	var div = $("schedule");
	
	var ulGoOverSchedule = busSchedule.CurrentTimeGoOverScheduleDomCreate();
	var ulGoDownSchedule = busSchedule.CurrentTimeGoDownScheduleDomCreate();
	div.appendChild(ulGoOverSchedule);
	div.appendChild(ulGoDownSchedule);
}
