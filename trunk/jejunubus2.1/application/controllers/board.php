<?php
class board extends	CI_Controller{
	protected $factor = 6;	
	
	function board(){
		parent :: __construct();
	}
	
	function index(){
		$this->page();
	}
	
	function write(){
		$this->load->database('jejunubus');
		if(($this->input->post('title') != FALSE) && ($this->input->post('content') != FALSE)){
			$data['no'] = NULL;
			$data['name'] = $this->input->post('title');
			$data['content'] = $this->input->post('content');
			$data['user_agent'] = $_SERVER['HTTP_USER_AGENT']; 
		
			$this->db->insert('board',$data);
		}
		
		$this->load->helper('url');
		redirect('/board/page/1', 'refresh');
		
	}
	
	function page($page = 1){
		$this->load->database('jejunubus');
		
		$feedlimit = 0;
		/***
		 * page & 게시글 범위 지정
		 */
		$pagelimit = $this->_limitpage();
		if($page > $pagelimit || $page <= 0)
		{
			show_error('잘못된 접근입니다. 페이지 정보를 바르게 입력하여 주십시오.');	
		}
		else if($page == 1){
			$pagedata['nextpage'] = $page + 1;
			$pagedata['page'] = $page;
			$data['page'] = $this->load->view('board/page_next',$pagedata,true);
			
			$feedlimit = 0;
		}
		else if($page == $pagelimit){
			$pagedata['backpage'] = $page - 1;
			$pagedata['page'] = $page;
			$data['page'] = $this->load->view('board/page_back',$pagedata,true);
			
			$feedlimit = ($page-1)*$this->factor;
		}
		else{
			$pagedata['nextpage'] = $page + 1;
			$pagedata['backpage'] = $page - 1;
			$pagedata['page'] = $page;
			$data['page'] = $this->load->view('board/page',$pagedata,true);
			
			$feedlimit = ($page-1)*$this->factor;
		}
		
		/***
		 * 게시글 불러오는 쿼리 생성
		 */
		$this->db->from('board');
		$this->db->order_by("no","desc");
		$this->db->limit($this->factor, $feedlimit);
		
		$query = $this->db->get();
		$data['feed'] = "";
		
		/***
		 * 게시글 불러오기
		 */
		foreach ($query->result_array() as $row) {
			$feed['name'] = $row['name'];
			$feed['content'] = $row['content'];
			$data['feed'] = $data['feed'] . $this->load->view('board/feed',$feed,true);
		}

		/***
		 * view 출력
		 */
		$this->load->view('board/form',$data);
	}
	
	/***
	 * page limit 계산 함수
	 */
	function _limitpage()
	{
		$total = $this->db->count_all('board');
		$limit = $total / $this->factor;

		return ceil($limit);
	}
	
}
?>