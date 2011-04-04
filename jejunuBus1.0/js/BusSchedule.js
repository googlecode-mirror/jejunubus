
var BusSchedule = Class.create();
BusSchedule.prototype.initialize = function(domGoOverSchedule, domGoDownSchedule){
	this.goOverSchedule = new Array(750, 805, 820, 835, 850, 905, 920, 935, 950
			1005, 1015, 1025, 1035, 1050, 1105, 1115, 1125, 1135, 1145, 1155, 1220
			1250, 1305, 1335, 1405, 1425, 1445, 1505, 1525, 1545, 1605, 1625, 1645
			1705, 1715, 1725, 1735, 1745, 1755, 1805, 1815, 1825, 1835, 1845);
	this.goDownSchedule = new Array(805, 820, 835, 850, 905, 920, 935, 950, 1005
			1015, 1025, 1035, 1050, 1105, 1115, 1125, 1135, 1145, 1155, 1205, 1235
			1305, 1320, 1350, 1405, 1425, 1445, 1505, 1525, 1545, 1605, 1625, 1645
			1705, 1715, 1725, 1735, 1745, 1755, 1805, 1815, 1825, 1835, 1845, 1855);
	
	this.domGoOverSchedule = domGoOverSchedule;
	this.domGoDownSchedule = domGoDownSchedule;
};

BusSchedule.prototype.CurrentTimeGoOverScheduleDomCreate = function(){
	var findIndex = this.findTimeOfGoOverSchedule();
	var arrayCount = this.goOverSchedule.length;
	
	var ul = document.createElement("ul");
	ul.setAttribute("id", "goOver");
		
	var text = document.createTextNode("정문->해대");
	var li = document.createElement("li");
	li.appendChild(text);	
	ul.appendChild(li);
	
	if(findIndex == -1) return ul;
	
	var time, hour, min;
	var textValue;
	var li, text;
	
	if((findIndex - 2) > 0){
		time = this.goOverSchedule[findIndex-2];
		hour = Math.floor(time / 100);
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);	
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	} 
	
	if((findIndex - 1) > 0){
		time = this.goOverSchedule[findIndex-1];
		hour = Math.floor(time / 100);		
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);	
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	} 
	
	time = this.goOverSchedule[findIndex];
	hour = Math.floor(time / 100);		
	if (time.toString().length == 4) min = time.toString().substr(2);
	else min = time.toString().substr(1);	
	textValue =  hour + "시 " + min + " 분";
	
	text = document.createTextNode(textValue);
	li = document.createElement("li");
	li.appendChild(text);	
	ul.appendChild(li);
	
	
	if((findIndex + 1) <= arrayCount){
		time = this.goOverSchedule[findIndex + 1];
		hour = Math.floor(time / 100);		
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);	
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	}
	
	if((findIndex + 2) <= arrayCount){
		time = this.goOverSchedule[findIndex + 2];
		hour = Math.floor(time / 100);		
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);		
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	}
	
	return ul;
	
};

BusSchedule.prototype.CurrentTimeGoDownScheduleDomCreate = function(){
	var findIndex = this.findTimeOfGoDownSchedule();
	var arrayCount = this.goDownSchedule.length;
	
	var ul = document.createElement("ul");
	ul.setAttribute("id", "goDown");
		
	var text = document.createTextNode("해대->정문");
	var li = document.createElement("li");
	li.appendChild(text);	
	ul.appendChild(li);
	
	if(findIndex == -1) return ul;
	
	var time, hour, min;
	var textValue;
	var li, text;
	
	if((findIndex - 2) > 0){
		time = this.goDownSchedule[findIndex-2];
		hour = Math.floor(time / 100);
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);	
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	} 
	
	if((findIndex - 1) > 0){
		time = this.goDownSchedule[findIndex-1];
		hour = Math.floor(time / 100);		
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);	
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	} 
	
	time = this.goDownSchedule[findIndex];
	hour = Math.floor(time / 100);		
	if (time.toString().length == 4) min = time.toString().substr(2);
	else min = time.toString().substr(1);	
	textValue =  hour + "시 " + min + " 분";
	
	text = document.createTextNode(textValue);
	li = document.createElement("li");
	li.appendChild(text);	
	ul.appendChild(li);
	
	
	if((findIndex + 1) <= arrayCount){
		time = this.goDownSchedule[findIndex + 1];
		hour = Math.floor(time / 100);		
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);	
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	}
	
	if((findIndex + 2) <= arrayCount){
		time = this.goDownSchedule[findIndex + 2];
		hour = Math.floor(time / 100);		
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);		
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	}
	
	return ul;
	
};

BusSchedule.prototype.AllTimeDomCreate = function(el){
	var ul = document.createElement("ul");
	ul.setAttribute("id", "goOver");
	
	var text = document.createTextNode("정문->해대");
	var li = document.createElement("li");
	li.appendChild(text);	
	ul.appendChild(li);
	
	for(var i = 0; i < this.goOverSchedule.length; i++){		
		time = this.goOverSchedule[i];
		hour = Math.floor(time / 100);		
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);		
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	}
	el.appendChild(ul);
	
	var ul = document.createElement("ul");
	ul.setAttribute("id", "goDown");
	var text = document.createTextNode("해대->정문");
	var li = document.createElement("li");
	li.appendChild(text);	
	ul.appendChild(li);
	for(var i = 0; i < this.goDownSchedule.length; i++){		
		time = this.goDownSchedule[i];
		hour = Math.floor(time / 100);		
		if (time.toString().length == 4) min = time.toString().substr(2);
		else min = time.toString().substr(1);		
		textValue =  hour + "시 " + min + " 분";
		
		text = document.createTextNode(textValue);
		li = document.createElement("li");
		li.appendChild(text);	
		ul.appendChild(li);
	}
	el.appendChild(ul);
};

BusSchedule.prototype.findTimeOfGoOverSchedule = function(){
	var currentTime = new Date();
	var hour = currentTime.getHours();
	var min = strpad(currentTime.getMinutes(), 2, "00");
	var findTime = hour + "" + min;
	
	var result = -1;
	for(var i = 0; i < this.goOverSchedule.length; i++){		
		if(this.goOverSchedule[i] >= findTime) return i;		
	}
	return result;
};

BusSchedule.prototype.findTimeOfGoDownSchedule = function(){
	var currentTime = new Date();
	var hour = currentTime.getHours();
	var min = strpad(currentTime.getMinutes(), 2, "00");
	var findTime = hour + "" + min;
	
	var result = -1;
	for(var i = 0; i < this.goOverSchedule.length; i++){		
		if(this.goDownSchedule[i] >= findTime) return i;		
	}
	return result;
};

function strpad(inputString, chars, padSting) {
  result = padSting+inputString;
  remFromLeft=result.length-chars;
  return result.substr(remFromLeft);
}