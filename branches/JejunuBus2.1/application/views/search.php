<html>
	<head>
		<title>	</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script>
			function send()
			{
				window.open("library.php","testform","width=400, height=500");
			}

		</script>
	</head>
	<body>
	<h3>도서 검색</h3>
	<FORM METHOD="post" Name="frmSearchIRSimple" action="http://lib.jejunu.ac.kr/DLiWeb20fr/components/searchir/result.aspx">
	
	
				<INPUT TYPE="HIDDEN" NAME="m_var"  VALUE="421">
				<input type="HIDDEN" name="srv_id" value="31">
				<input type="HIDDEN" name="qy_frm" value="SIMPLE">
				<input type="HIDDEN" name="cl_id" value="ALL">
				<input type="HIDDEN" name="mc" value="300">
				
				<INPUT TYPE="HIDDEN" NAME="t_path"  VALUE="">
				
				<table id="ucSimple_tblSimple" width="620" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
		<td width="620" align="left" class="stext" height="28">
						
							소장기관
							<select name='brch' style='width=135' ><option value='ALL'>전체</option><option value='01' >중앙도서관</option><option value='02' >의대분관</option><option value='03' >법학분관</option><option value='04' >교육대학분관</option></select>
							
							<span id="spanLocSelectorHolder" style="display:none">
								
								서고
								<span id="spanLocSelector">
								</span>
							</span>
							<script>
							function brch_onchange(selBrch){
								spanLocSelectorHolder.style.display = 'none';
								spanLocSelector.innerHTML = "<select id='selLocSelector' name='loc'><option value=''>전체</option></select>";//무조건 서고 전체 초기화
								var val = selBrch.value;
								if (val != 'ALL' && val.indexOf('^') == -1){ //기관이면
									bindLocSelector(val);
									spanLocSelectorHolder.style.display = 'inline';
								}
							}
							</script>
							<script type="text/javascript"> 
var xmlDomLoc; //서고를 메모리하기위한 변수
var xmlReq = getHTTPObject(); 
		
// declaration of repeater.
var repeaterControl = new RepeaterControl();
repeaterControl.HeaderTemplate = "<select id='selLocSelector'  name='loc'><option value=''>전체</option>"
repeaterControl.ItemTemplate = "<option value='{$LOC_CODE}'>{$LOCATION}</option>"
//repeaterControl.AlternatingItemTemplate = "<tr class=\"alternateitem\"><td>{@ID}</td><td>{$Name}</td><td>{$HireDate}</td><td>{$LastName}</td></tr>";
repeaterControl.FooterTemplate = "</select>"
 
function getLocXML(){
	var url = webAppPath + "components/common/ws.asmx/GetLocList";
    var s = "";
//alert(url + "?" +s );
    //try{ ajaxPost(url , handleHttpResponse); } catch (e) { }
    ajaxPost(url , s , getLocXML_handler);
}
 
function getLocXML_handler() {
  if (xmlReq.readyState == 4) {    
	xmlDomLoc = xmlReq.responseXML;
   }
}
 
function bindLocSelector(brch){
//alert(request.responseXML.xml);		
	// bind repeater.
	repeaterControl.HostControlID = "spanLocSelector";			
    repeaterControl.DataSource = xmlDomLoc.documentElement.selectNodes("//Table[BRCH_CODE[text() = '" + brch + "']]");
    repeaterControl.DataBind();
}
        
function reportError(t) {
	alert('Error ' + t.status + ' -- ' + t.statusText);
}

 
getLocXML(); 

</script>
							<input type="radio" name="qy_typ" value="START_WITH" >전방일치
							<input type="radio" name="qy_typ" value="MATCH" >완전일치
							<input type="radio" name="qy_typ" value="KEYWORD" checked>키워드
							</td>
	</tr>
	<tr>
		<td width="620" align="left" class="stext" height="28">
							<select id='qy_idx' style='width=95' name='qy_idx' onChange='searchItemGuide(this.value , txtSearch)'><option value='TITL' selected>자료명</option><option value='AUTH' >저자</option><option value='PUBN' >출판사</option><option value='TTI' >총서명</option><option value='CLAS' >분류기호</option><option value='CA' >청구기호</option><option value='ISBN' >ISBN</option><option value='ISSN' >ISSN</option><option value='IDID' >등록번호</option><option value='CID' >컨텐츠번호</option></select>							
							<input type="text" size="39" style="HEIGHT:18px"   id="txtSearch" name="qy_kwd" onkeypress="javascript:checkKey();" onfocus="javascript:setImeTarget(this);searchWordClear(this);" class="input"> 
							
						</td>
	</tr>
	<tr>
		<td width="620" align="left" class="stext">
							<table id="ucSimple_tblCondition" width="620" border="0" cellspacing="1" cellpadding="1" align="center">
			<tr>
				<td align="absMiddle" width="108">&nbsp;<span>&nbsp;발행년도</span></td>
				<td bgcolor="#ffffff" width="230"><div id="ucSimple_DATEFROMTO">
					<input id='pyb' name='pyb' type='text' value='' maxlength='4' size='10' width='20' class='input2'><span> - </span><input id='pye' name='pye'  type='text' value='' maxlength='4' size='10' width='20' class='input2'>
				</div></td>
				<td align="absMiddle" width="108">&nbsp;<span>&nbsp;언어</span></td>
				<td bgcolor="#ffffff" width="230"><select name='LANG'><option value='ALL' >전체</option><option value='KOR' >한국어</option><option value='ENG' >영어</option><option value='JPN' >일본어</option><option value='CHI' >중국어</option><option value='GER' >독일어</option><option value='FRE' >프랑스어</option><option value='RUS' >러시아어</option><option value='SPA' >스페인어</option><option value='ITA' >이태리어</option><option value='ETC' >기타</option></select></td>
			</tr>
			<tr>
				<td align="absMiddle" width="108">&nbsp;<span>&nbsp;주제분류</span></td>
				<td bgcolor="#ffffff" colspan="3" width="580"><div id="ucSimple_CLASSIFICATION">
					<input type='HIDDEN' name='qy_idx' id='classify_qy_idx'><input type='HIDDEN' name='qy_kwd' id='classify_qy_kwd'><div id='classify_code_label'  style='color:#FF6347'>
				</div><a href=javascript:openPopupClassify();>이곳을 클릭하여 주제분류를 선택합니다.</td>
			</tr>
			<tr>
				<td align="absMiddle" width="108">&nbsp;<span>&nbsp;수록정보</span></td>
				<td bgcolor="#ffffff" colspan="3" width="580"><table><tr><td><input type='checkbox' name='rid' value='ALL' onclick="javascript:checkingCheckBox(this)" >전체&nbsp;&nbsp;<input type='checkbox' name='rid' value='1' onclick="javascript:checkingCheckBox(this)" >초록&nbsp;&nbsp;<input type='checkbox' name='rid' value='2' onclick="javascript:checkingCheckBox(this)" >해제&nbsp;&nbsp;<input type='checkbox' name='rid' value='3' onclick="javascript:checkingCheckBox(this)" >목차&nbsp;&nbsp;<input type='checkbox' name='rid' value='4' onclick="javascript:checkingCheckBox(this)" >URL&nbsp;&nbsp;<input type='checkbox' name='rid' value='5' onclick="javascript:checkingCheckBox(this)" >원문&nbsp;&nbsp;</td></tr></table><input type='hidden' name=rid_all value='1^2^3^4^5'></td>
			</tr>
		</table>
		
						</td>
	</tr>
</table>
 
				
				
				<table width="100%"><tr><td align="right">
					<!--a href="javascript:Search();"><img src="/DLiWeb20fr/images/btn_search.gif" align="absMiddle" border="0" align="right"></a-->
					<input type="image" src="/DLiWeb20fr/images/btn_search.gif" align="right">
				</td></tr></table>
				
				
			</FORM>

		
	</body>
</html>