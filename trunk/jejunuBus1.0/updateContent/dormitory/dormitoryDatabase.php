<?php

include_once 'dormitoryDBFactory.php';

class dormitoryDatabase {
	var $factory;
	var $connection;
	
	function __construct(){
		$this->connection = dormitoryDBFactory::getdormitoryDBConnection();
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

	function update($table, $attribute, $value, $condition){
		$query = "UPDATE $table SET $attribute = $value WHERE $condition";
		mysql_query($query, $this->connection);
	}
	
	function select($table, $attributes = '*', $condition = ''){
		if(!$condition == ''){
			$condition = 'WHERE '.$condition;
		}
		$query = "SELECT $attributes FROM $table $condition";
		
		return mysql_query($query, $this->connection);
	}
}
?>