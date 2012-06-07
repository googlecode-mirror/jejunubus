var formValidPrototype = {
	setDefultText : function(elements){
		for(var i = 0; i < elements.length; i++){
			this.setValue(elements[i]);
		}
	},
	onValid : function(elements){
		return function(){
			for(var i = 0; i < elements.length; i++){
				if(elements[i].ele.value == elements[i].defaultText){
					alert("의견과 이름을 작성해주세요");
					return false;
				}
			}
		}
	},
	setValue : function(obj){
		var ele = obj.ele;
		
		ele.value = obj.defaultText;
		
		ele.onclick = function(){
			if(ele.value = obj.defaultText){
				ele.value = "";
			}
		}
		ele.onblur = function(){
			if(ele.value == ""){
				ele.value = obj.defaultText;
			}
		}
	}
};

function valid(){
	function F(){};
	F.prototype = formValidPrototype;
	var f = new F();
	return f;
}

/*
 * var validForm = valid();
 * var author = document.getElementById('author');
 * var comment = document.getElementById('comment');
 * var btn = document.getElementsByClassName('submit')[0];
 * var validFormat = new Array({ele:comment, defaultText:'좋은 의견 많이주세요^^'},
 * 							{ele:author, defaultText:'작성자'});
 * validForm.setDefultText(validFormat);
 * btn.onclick = validForm.onValid(validFormat);
*/