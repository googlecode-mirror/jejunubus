<?php

//db 객체 생성
$db = new mysqldb();
//DB연결 
$db->connect();
//Defult Page = 1으로 지정
$page = 1;
//Page정보를 GET Type으로 받아옴 
$page = $_GET['page'];

//입력된 Page가 0이하인 경우
if($page <= 0)
{
	$page = 1;
	$result = $db->read($page);
	
	while($row_array = mysql_fetch_array($result))
       	 {
       		 echo("<div class=\"viewform\"> 
       		 <div class=\"name\"> 작성자 : $row_array[name] </div>
       		 <div class=\"content\"> $row_array[content] </div>
       		 </div>");
       	 }

}
//입력된 Page가 1이상인 경우
else
{
	$result = $db->read($page);
        while($row_array = mysql_fetch_array($result))
         {       
                 echo("<div class=\"viewform\"> 
                 <div class=\"name\"> 작성자 : $row_array[name] </div>
                 <div class=\"content\"> $row_array[content] </div>
                 </div>");
         }       
}

//하단 Page정보 나타내기
echo("<div id=\"pageform\">");
//Page가 1일때
if($page == 1)
{
	//DB에 저장된 게시물의 Page가 1 Page밖에 없을경우
	if($page == $db->limitpage())
	{
	}
	//DB에 저장된 게시물의 Page가 1 Page가 넘어갈 경우
	if($page < $db->limitpage())
	{
		$nextpage = $page + 1;
		echo("<div class=\"nextpage\"><a href=\"../../board.php?page=". $nextpage ."\">". ">" ."</a></div>");
	}
}
//Page가 DB에 저장된 게시물의 Page와 같을경우
else if($page == $db->limitpage())
{
	$backpage = $page -1;
	echo("<div class=\"backpage\"><a href=\"../../board.php?page=". $backpage ."\">". "<" ."</a></div>");
}
//Page가 DB에 저장된 게시물의 Page보다 작고 1 Page보다 클경우
else
{
	$nextpage = $page + 1;
	$backpage = $page - 1;
	echo("<div class=\"backpage\"><a href=\"../../board.php?page=". $backpage ."\">". "<" ."</a></div>");
	echo("<div class=\"nextpage\"><a href=\"../../board.php?page=". $nextpage ."\">". ">" ."</a></div>");
}
echo("<div>". $page ."</div>");


echo("</div>");

?>
