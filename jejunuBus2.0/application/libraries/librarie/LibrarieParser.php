<?php
class LibrarieParser{
	var $ci;
	
	function __construct() {
		$this->ci=&get_instance();
		$this->ci->load->library('simple_html_dom');
		$this->ci->load->model('Book');
	}
	
	function request($url){
		return file_get_html($url);
	}
		
	function getBooks($ele){
		$bookElementRegularExpression = 'tr[id^=trCID_]';
		$ele = $ele->find($bookElementRegularExpression);
		$books = array();
		
		for ($i = 0; $i < sizeof($ele); $i++) {
			$author = $this->getSpanContent($ele[$i],  '저자');
			$publisher = $this->getSpanContent($ele[$i], '출판사');
			$publish_date = $this->getSpanContent($ele[$i], '출판년도');
			$title = $this->getTitleContent($ele[$i]);
			$location = $this->getBookLocation($ele[$i]);
			
			$books[$i] = new Book();
			if($location != null){
			$books[$i]->setBook(array('title' => $title[0], 
									'publisher' => $publisher[0],
									'publishDate' => $publish_date[0],
									'author' => $author[0],
									'location' => $location[0])
								);
			}
		}
		return $books;
	}
	
//	function getBookCount($cid){
//		$cid = $this->getValue($ele[$i]);
//		$libUrl = "http://lib.jejunu.ac.kr/DLiWeb20fr/components/common/bookstock.aspx?cid=" . $cid;
//		$page = file_get_contents($libUrl);
//			
//		preg_match_all("+대출가능+", $page, $match);
//		$bookCount = sizeof($match[0]);
//		return $bookCount[0];
//		
//	}
//	
//	function getValue($element){
//		$valueInInputTag = 'input[value]';
//		$inputTag =  $element->find($valueInInputTag);
//		return $inputTag[0]->value;
//	}
	
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