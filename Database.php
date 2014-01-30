<?php
class Database {
	public static $db;

	public function instance()
	{
		if (!self::$db) {
			$db = new Database();
			self::$db = $this -> connect();

		}
		return self::$db;
	}

	private function connect()
	{
		$db = new PDO ("mysql:host=localhost;dbname=phpoo","root","12345678");
		#$db -> setAttribute (PDO::ATTR_ERRMODE,ERRMODE_EXCEPTION);
		$db -> setAttribute (PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		return $db;
	}
}

/*
TESTANDO A INSERÇÃO DE DADOS NA BASE DE DADOS

$db = new Database();
$bancoDeDamos = $db -> instance();
$bancoDeDamos -> query("INSERT INTO phpoo (nome) values ('Testando')");
*/

?>