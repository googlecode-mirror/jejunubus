<?php
class mysqldb
{
	//MySQL 접속정보	
	private $mydb;
	private $host = "mysql2.hosting.paran.com";
	private $id = "jejunubus";
	private $passwd = "sne95ic19";
	//불러올 게시물 개수
	protected $factor = 6;	

	function mysqldb()
	{
	}
	
	//MySQL 접속 함수
	function connect()
	{
		$mydb = mysql_connect ( $this->host, $this->id, $this->passwd );
		$this->mydb = $mydb;
	
		if (! $mydb) {
			print ("MySQL접속에 실패하였습니다.") ;
			die ( mysql_error () );
		} 
		mysql_select_db ( 'jejunubus_db', $mydb );
		// 2011.5.1 
		// 인코딩 통일을 위한 코드 추가 
		// 수정자 : 고시철 
		mysql_query("set names 'utf8'");
	}
	
	//게시글 DB 입력 함수
	function write()
	{
		$name = $_POST['title'];
		$content = $_POST['content'];
		echo "처리중.....<br>";
		$submit = "INSERT INTO board(no,name,content)
					VALUES(NULL,'$name','$content')";
		mysql_query($submit,$this->mydb);
	}

	//게시글 DB에서 읽어오는 함수
	function read($page = 1)
	{
		$limit = 0;
		if($page == 1)
		{
			$limit = 0;
		}
		else if ($page <= 0)
		{
			echo("<div class\"viewform\"> Page Error </div>");
		}
		else
		{
			$limit = ($page-1)*$this->factor;
		}

		$read = "SELECT * FROM board order by no desc limit ".$limit.",".$this->factor;
		$result = mysql_query($read,$this->mydb);
		
		return $result;	
	}
	
	//전체 게시글 패이지수 계산함수
	function limitpage()
	{
		$select = "SELECT * FROM board";
		$result = mysql_query($select,$this->mydb);

		$total = mysql_num_rows($result);
		$limit = $total / $this->factor;

		return ceil($limit);
	}

	function delete()
	{
	
	}
	
	function update()
	{
	
	}	
}	
?>

