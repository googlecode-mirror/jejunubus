var secretPrototype = {
	init: function(args){
		if(!document.getElementById(args.target))return;
		for(id in args.idSet){
			if(!document.getElementById(id))return;
		}
		this.target = document.getElementById(args.target);
		this.idSet = args.idSet;
		
		var lis = this.target.getElementsByTagName('li');
		for(li in lis){
			if(!li.className){
				li.className ='';
			}
		}
	},
	showAll: function(){
		for(id in this.idSet){
			this.allContentClassNameOn(id);
		}
		if(document.getElementById('weather')){
			var weatherOl = document.getElementById('weather');
			var lis = weatherOl.getElementsByTagName('li');
			
			for(var i = 0; i<lis.length; i++){
				if(lis[i].className.indexOf(' on') < 0){
					lis[i].className = lis[i].className + ' on';
				}
			}
		}
	},
	allContentClassNameOn: function(ulId){
		var ul = document.getElementById(ulId);
		var liList = ul.getElementsByTagName('li');
		
		for(var i = 0; i < liList.length; i++){
			if(liList[i].className.indexOf(' on') < 0){
				liList[i].className = liList[i].className + ' on';
			}
		}
	},
	
	showLittle: function(){
		for(id in this.idSet){
			this.someContentClassNameOn(id);
		}
		if(document.getElementById('weather')){
			var weatherOl = document.getElementById('weather');
			var lis = weatherOl.getElementsByTagName('li');
			for(var i = 0; i<lis.length; i++){
				if(lis[i].className.indexOf(' on') >= 0 ){
					lis[i].className = lis[i].className.replace(' on', '');
				}
			}
			lis[0].className = lis[0].className + ' on';
			lis[1].className = lis[1].className + ' on';
		}
	},
	
	someContentClassNameOn: function(ulId){
		var date = new Date();
		var now = date.getHours()+""+date.getMinutes();
		//now = 1900;
		
		var ul = document.getElementById(ulId);
		var time = ul.getElementsByTagName('li');
		var past = 2, next = 3;
		var index = time.length-3;

		for(var i = 0; i < time.length; i++){
			var pre = time[i].value;
			var name = time[i].className;
			time[i].className = name.replace(' on', '');
			
			if(pre > now){
				index = i;
				break;
			}
		}
		
		if(index - past < 0){
			index = past;
		}
			
		for(var i = index - past; i < index ; i++){
			if(time[i].className.indexOf(' on') < 0){
				time[i].className = time[i].className + ' on';
			}
		}

		if(index+next > time.length){
			index = time.length-next;
		}
		
		for(var i = index; i < index + next; i++){
			if(time[i].className.indexOf(' on') < 0){
				time[i].className = time[i].className + ' on';
			}
		}
		
		for(var i = index + next; i < time.length; i++){
			if(time[i].className.indexOf(" on") >= 0){
				var name = time[i].className;
				time[i].className = name.replace(' on', '');
			}
		}
	}
};

function Secret(args){
	function F(){};
	F.prototype = secretPrototype;
	var f = new F();
	f.init(args);
	f.showLittle();
	
	var target = document.getElementById(args.target);
	target.onclick = function(){
		if(!window.isLookAll){
			f.showAll();
			window.isLookAll = 1;
		}else{
			f.showLittle();
			window.isLookAll = 0;
		}
	};
}
