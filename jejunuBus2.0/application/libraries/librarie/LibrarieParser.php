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
		$books = array();
		$noResult = "";
		if ($ele == $noResult){
			$books[0] = new Book();
			$author = "고시철";
			$publish_date = "2011";
			$publisher = "jejunuBus Project";
			$title = "검색결과가 없습니다.";
			$location = "공대4호관 405호";
			$books[0]->setBook(array('title' => $title, 
										'publisher' => $publisher,
										'publishDate' => $publish_date,
										'author' => $author,
										'location' => $location)
									);
			return $books;
		}
		$bookElementRegularExpression = 'tr[id^=trCID_]';
		$ele = $ele->find($bookElementRegularExpression);
		
		for ($i = 0; $i < sizeof($ele); $i++) {
			$author = $this->getSpanContent($ele[$i],  '저자');
			$publisher = $this->getSpanContent($ele[$i], '출판사');
			$publish_date = $this->getSpanContent($ele[$i], '출판년도');
			$title = $this->getTitleContent($ele[$i]);
			$location = $this->getBookLocation($ele[$i]);
						
			$books[$i] = new Book();
			if($location != null && 
				$author != null && 
				$publisher != null && 
				$publish_date != null && 
				$title != null){
				$books[$i]->setBook(array('title' => $title, 
										'publisher' => $publisher,
										'publishDate' => $publish_date,
										'author' => $author,
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
		preg_match_all("/<span[^>]*title=[\"']?".$tag_attribute."+[\"']?[^>]*>([^<]+)<\/span>/i", $source, $match);
		$values = $match[1];
		return $values[0];
	}
	
	function getTitleContent($source){
		preg_match_all("/<input[^>]*type=[\"']?checkbox[\"']?[^>]*id=[\"']?chkCID[\"']?[^>]*title=[\"']?([^>]*)[\"']+>/i", $source, $match);
		
		$values = $match[1];
		return $values[0];
	}
	
	function getBookLocation($source){
		preg_match_all("/<a href=[\"']?javascript:toggle_bookstock[^>]*>([^<]*)/i", $source, $match);
		
		$values = $match[1];
		return $values;
	}
}