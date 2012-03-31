<?php
class LibrarieService{
	
	var $paser;
	
	function __construct(){
		$ci=&get_instance();
		$ci->load->library('librarie/LibrarieParser');
		
		$this->paser = new LibrarieParser();
	}
	
	function requestBookSearch($searchOption){
		
	
		$searchUrl = "http://lib.jejunu.ac.kr/DLiWeb20fr/components/searchir/result.aspx";
		$elementName = "table";
		$elementId = "tblSearchResult";
		$books = array();
		
		$searchUrlForGetMethod = $searchUrl.'?'.$searchOption;
		
		$html = $this->paser->request($searchUrlForGetMethod);
		$bookElements = $html->getElementById($elementId);
		$books = $this->paser->getBooks($bookElements);
		
		return $books;
	}
	
}