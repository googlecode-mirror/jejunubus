<?php
class librarie extends CI_Controller {

	function librarie() {
		parent :: __construct();

	}
	function index(){
		$this->search();
	}
	
	function search(){
		$keyword = "";
		$page = 1;
		
		if(isset($_GET['keyword'])){
			$keyword = $_GET['keyword'];
			$keyword = urlencode($keyword);
		}
		if(isset($_GET['page'])){
			$page = $_GET['page'];
		}
		if($keyword == ""){
			$this->load->view('librarie');
		}else{
			$this->searchBook($keyword, $page);
		}
	}
	
	function meetingRoom(){
		// $this->load->library('librarie/LibrarieService');
		// $service = new LibrarieService();
		// echo $service->getMeetingRoom();
		
		$this->load->view('meetingRoom');
	}
	
	function searchBook($keyword, $page){
		$this->load->library('librarie/LibrarieService');
		
		//$keyword = "ssat";
		
		$bookType = "1^2^56^57";//cl_id 단행본에서만 검색 전자자료등은 파싱하는 데이터 형식이 다름.(위치없음.)
		
		$numberOfBookInPage = 15;
		$searchOption = "m_var=421&srv_id=31&qy_frm=QUICK&adf=&adt=&cl_id=".$bookType."&rid_all=&st_f=&st_o=&pg=".$page."&rpp=".$numberOfBookInPage."&mc=300&dp_op=LIST&t_path=&qy_typ=KEYWORD&brch=01&qy_idx=TITL&qy_kwd=".$keyword;
		$service = new LibrarieService();
		$books = $service->requestBookSearch($searchOption);
		
		$data['books'] = $books;
		$prevPage = $page < 2 ? 1 : $page - 1;
		$data['prevPage'] = $prevPage;
		$data['nextPage'] = $page = $page + 1;
		$data['keyword'] = $keyword; 
		$this->load->view('librarie', $data);
	}
}
?>
