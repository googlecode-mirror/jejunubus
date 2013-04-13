<?php
class LibrarieService{
	
	var $paser;
	
	function __construct(){
		$ci=&get_instance();
		$ci->load->library('librarie/LibrarieParser');
		
		$this->paser = new LibrarieParser();
	}
	
	function getMeetingRoom(){
		$meetingRoomUrl ="http://203.253.194.57/MAPTEMP/1_180.182.28.169.html";
		$html = $this->paser->request($meetingRoomUrl);
		
		return $html;
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