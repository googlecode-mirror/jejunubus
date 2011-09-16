<?php
class test extends CI_Controller {

	function test() {
		parent :: __construct();

	}
	
	function index() { //pg=1 (페이지), rpp=30 (한페이지 갯수), qy_kwd=%EB%A6%AC%EB%88%85%EC%8A%A4 (키워드)
		$content = 'm_var=421&srv_id=31&qy_frm=QUICK&adf=&adt=&cl_id=ALL&rid_all=&st_f=&st_o=&pg=1&rpp=30&mc=300&dp_op=LIST&t_path=&qy_typ=KEYWORD&brch=01&qy_idx=TITL&qy_kwd=%EB%A6%AC%EB%88%85%EC%8A%A4';
		$source = $this->getSources('http://lib.jejunu.ac.kr/DLiWeb20fr/components/searchir/result.aspx', $content);
		
		$author = $this->getSpanContent($source,  '저자');
		$publisher = $this->getSpanContent($source, '출판사');
		$publish_date = $this->getSpanContent($source, '출판년도');
		$title = $this->getTitleContent($source);
		$book_location = $this->getBookLocation($source);
		
		
		$data['author'] = $author;
		$data['publisher'] = $publisher;
		$data['publish_date'] = $publish_date;
		$data['title'] = $title;
		$data['book_location'] = $book_location;
		
		echo $source;
		
		$this->load->view('test', $data);
	}
	
	function getSources($url, $content){
		
 			$opts = array (
			'http' => array (
				'method' => "POST",
				'header' => 
				"Accept: image/jpeg, application/x-ms-application, image/gif, application/xaml+xml, image/pjpeg, application/x-ms-xbap, application/x-shockwave-flash, application/vnd.ms-excel, application/vnd.ms-powerpoint, application/msword, */*\r\n" .
				"Accept-Language: ko-KR\r\n" .
				"Accept-Encoding: utf-8\r\n" .
				"User-Agent: Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.1; Trident/4.0; SLCC2; .NET CLR 2.0.50727; .NET CLR 3.5.30729; .NET CLR 3.0.30729; Media Center PC 6.0; Tablet PC 2.0; InfoPath.2; NCLIENT50_AAP9F696B9077C) Paros/3.2.13\r\n" .
				"Content-Type: application/x-www-form-urlencoded\r\n" .
				"Host: lib.jejunu.ac.kr\r\n" .
				"Content-Length: 181\r\n" .
				"Proxy-Connection: Keep-Alive\r\n" . 
				"Cookie: f33d2ed86bd82d4c22123c9da444d8ab=MTMxMzIxOTkwNw%3D%3D\r\n",
				'content' => $content."\r\n\n"
			)
		);

		$context = stream_context_create($opts);
		
		$file = file_get_contents($url, false, $context);
		
			
		$tmp = strstr($file, '<title>Result</title>');
		$tmp2 = strstr($file, '<title>Result</title>', TRUE);
		$tmp = $tmp2 . '<meta http-equiv="Content-Type" content="text/html; charset=utf-8">' . $tmp;
		
		
		
		
		return $tmp;
		
		
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
}
?>
