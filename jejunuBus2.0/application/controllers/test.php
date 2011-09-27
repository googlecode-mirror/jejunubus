<?php
class test extends CI_Controller {

	function test() {
		parent :: __construct();

	}
	function index(){
		$this->load->view('test');
	}
	function search($keyword=""){
		if($keyword == ""){
			$this->load->view('test');
			return;
		}
		$this->load->library('librarie/LibrarieService');
		
		//$keyword = "ssat";
		
		$bookType = "1^2^56^57";//cl_id 단행본에서만 검색 전자자료등은 파싱하는 데이터 형식이 다름.(위치없음.)
		$pageIndex = 1;
		$numberOfBookInPage = 15;
		$searchOption = "m_var=421&srv_id=31&qy_frm=QUICK&adf=&adt=&cl_id=".$bookType."&rid_all=&st_f=&st_o=&pg=".$pageIndex."&rpp=".$numberOfBookInPage."&mc=300&dp_op=LIST&t_path=&qy_typ=KEYWORD&brch=01&qy_idx=TITL&qy_kwd=".$keyword;
		$service = new LibrarieService();
		$books = $service->requestBookSearch($searchOption);
		
		$data['books'] = $books;
		$this->load->view('test', $data);
	}
	
	function getSpanContent($source, $tag_attribute){
		preg_match_all("/<span[^>]*title=[\"']?".$tag_attribute."+[\"']?[^>]*>([^<\"']+)<\/span>/i", $source, $match);
		
		$values = $match[1];
		
		return $values;
	}
	
	function getTitleContent($source){
		preg_match_all("/<input[^>]*type=[\"']?checkbox[\"']?[^>]*id=[\"']?chkCID[\"']?[^>]*title=[\"']?([^>]*)[\"']+>/i", $source, $match);
		
		$values = $match[1];
		return $values;
	}
	
	function getBookLocation($source){
		preg_match_all("/<a href=[\"']?javascript:toggle_bookstock[^>]*>([^<]*)/i", $source, $match);
		
		$values = $match[1];
		
		return $values;
		
	}
//	function getSources($url, $content){
// 			$opts = array (
//			'http' => array (
//				'method' => "POST",
//				'header' => 
//				"Accept: image/jpeg, application/x-ms-application, image/gif, application/xaml+xml, image/pjpeg, application/x-ms-xbap, application/x-shockwave-flash, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/msword, */*\r\n" .
//				"Accept-Language: ko-KR\r\n" .
//				"Accept-Encoding: utf-8\r\n" .
//				"User-Agent: Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Tablet PC 2.0; InfoPath.2; NCLIENT50_AAP9F696B9077C) Paros/3.2.13\r\n" .
//				"Content-Type: application/x-www-form-urlencoded\r\n" .
//				"Host: lib.jejunu.ac.kr\r\n" .
//				"Content-Length: 181\r\n" .
//				"Proxy-Connection: Keep-Alive\r\n" . 
//				"Cookie: f33d2ed86bd82d4c22123c9da444d8ab=MTMxMzIxOTkwNw%3D%3D\r\n",
//				'content' => $content."\r\n\n"
//			)
//		);
//		$context = stream_context_create($opts);
//		$file = file_get_contents($url, false, $context);
//		$tmp = strstr($file, '<title>Result</title>');
//		$tmp2 = strstr($file, '<title>Result</title>', TRUE);
//		$tmp = $tmp2 . '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . $tmp;
//		return $tmp;
//	}
}
?>
