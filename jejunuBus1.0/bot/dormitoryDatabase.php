<?php
$root = $_SERVER['DOCUMENT_ROOT'];

include_once $root.'/jejunubus/jejunuBus1.0/bot/dormitoryDBFactory.php';

class dormitoryDatabase {
	var $factory;
	var $connection;
	
	function __construct(){
		$this->factory  = new dormitoryDBFactory;
		$this->connection = $this->factory->getdormitoryDBConnection();
		mysql_select_db("jejunubus_db", $this->connection);
		mysql_query("set names 'utf8'");
	}
	
	function excute($query){
		mysql_query($query, $this->connection);
		
	}
	
	function deleteAll($table){
		mysql_query("DELETE FROM ".$table);
	}
	
	function selectAll(){
		$query = "SELECT menuDate, earlyMorning, breakfast, lunch, dinner
			FROM dormitoryMeal";
		
		return mysql_query($query, $this->connection);
	}
	
}
?>