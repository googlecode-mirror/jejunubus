var fxPrototype = {
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
			this.libBusWayToggle(id);
		}
	},
	libBusWayToggle : function(ulId){		
		var ul = document.getElementById(ulId);
		
		var li = ul.getElementsByTagName('li');

		for(var i = 0; i < li.length; i++){
			
			var name = li[i].className;
			li[i].className = name.replace(' on', '');
		}
	}
};

function Fx(args){
	function F(){};
	F.prototype = fxPrototype;
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
