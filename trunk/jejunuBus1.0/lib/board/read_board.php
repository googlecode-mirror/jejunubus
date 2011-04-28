<?php
$db = new mysqldb();
$db->connect();
$page = 1;
$page = $_GET['page'];
if($page <= 0)
{
	$page = 1;
	$db->read($page);
}
else
{
	$db->read($page);
}
echo("<div id=\"pageform\">");
if($page == 1)
{
	$nextpage = $page + 1;
	echo("<div class=\"nextpage\"><a href=\"http://117.17.102.207/board.php?page=". $nextpage ."\">". ">" ."</a></div>");
}
else if($page == $db->limitpage())
{
	$backpage = $page -1;
	echo("<div class=\"backpage\"><a href=\"http://117.17.102.207/board.php?page=". $backpage ."\">". "<" ."</a></div>");
}
else
{
	$nextpage = $page + 1;
	$backpage = $page - 1;
	echo("<div class=\"backpage\"><a href=\"http://117.17.102.207/board.php?page=". $backpage ."\">". "<" ."</a></div>");
	echo("<div class=\"nextpage\"><a href=\"http://117.17.102.207/board.php?page=". $nextpage ."\">". ">" ."</a></div>");
}
echo("<div>". $page ."</div>");


echo("</div>");

?>
