<?php
$root = $_SERVER['DOCUMENT_ROOT'].'/jejunuBus/jejunuBus1.0/updateContent/dormitory';
include_once $root.'/dormitory.php';


$dormitory = new dormitory;

$dormitory->parsing();

?>
