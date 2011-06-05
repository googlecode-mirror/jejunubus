<?php
class dormitoryDBFactory{
	public static $connection;
	
	public static function getdormitoryDBConnection(){
		if(!isset(self::$connection)){
			self::$connection = mysql_connect('mysql2.hosting.paran.com','jejunubus','sne95ic19');
			
		}
		return self::$connection;
	}
}
?>