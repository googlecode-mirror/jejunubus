/*
<form>
	<textarea id='comment' class=content rows=5 cols=40 name=content>좋은 의견 많이 주세요~ *^^*</textarea>
</form>		// 이처럼 사용하고 싶은 tag의 부모 tag가 닫힌 다음에 js를 삽입하는 것이 좋다. main view파일참조.
<script type="text/javascript" src="http://jejunubus.hosting.paran.com/js/board.js"></script> //js 임포트(??)
<script type="text/javascript">
	clearText('comment');	//function실행.
</script>
*/
function clearText(tagId){
	var target = document.getElementById(tagId);
	if(!target)return;
	
	target.onclick = function(){
		target.value = "";
	}
}

	