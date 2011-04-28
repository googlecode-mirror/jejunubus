<?php
class mysqldb
{	
	private $mydb;
	private $host = "localhost";
	private $id = "jinhyeok";
	private $passwd = "kang1226";
	
	function mysqldb()
	{
	}
	
	function connect()
	{
		$mydb = mysql_connect ( $this->host, $this->id, $this->passwd );
		$this->mydb = $mydb;
	
		if (! $mydb) {
			print ("MySQL접속에 실패하였습니다.") ;
			die ( mysql_error () );
		} 
		mysql_select_db ( 'jejubus', $mydb ); 
	}
	
	function write()
	{
		$name = $_POST['title'];
		$content = $_POST['content'];
		echo "처리중.....<br>";
		$submit = "INSERT INTO board(no,name,content)
					VALUES(NULL,'$name','$content')";
		mysql_query($submit,$this->mydb);
	}

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
			$limit = ($page-1)*6;
		}

		$read = "SELECT * FROM board order by no desc limit ".$limit.",6";
		$result = mysql_query($read,$this->mydb);
		
		while($row_array = mysql_fetch_array($result))
		{
			echo("<div class=\"viewform\"> 
			<div class=\"name\"> 작성자 : $row_array[name] </div>
			<div class=\"content\"> $row_array[content] </div>
			</div>");
		}
	}
	
	function limitpage()
	{
		$select = "SELECT * FROM board";
		$result = mysql_query($select,$this->mydb);

		$total = mysql_num_rows($result);
		$limit = $total / 6;

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

