<?php 
	class MySql{
		public static $pdo;
		public static function connect(){
			if(self::$pdo == null){
				self::$pdo = new PDO("mysql:host=".HOST.";dbname=".DB, USER, PASS);
			}
			return self::$pdo;
		}
	}
?>
