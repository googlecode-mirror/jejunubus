<?php
include "../db/mysqldb.php";
$db = new mysqldb();
$db->connect();
$db->write();
echo("<script>location.href='../../board.php'</script>");
?>
