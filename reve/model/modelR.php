<?php
	require_once "{$ROOT}{$DS}config{$DS}conf.php";
	
class modelR{

	public static $pdo;
	public static function Init(){
		$host=conf::getHostname();
		$dbname=conf::getDatabase();
		$login=conf::getLogin();
		$pass=conf::getPassword();
		try{
			self::$pdo = new PDO("mysql:host=$host;dbname=$dbname", $login, $pass,
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
   
			// On active le mode d'affichage des erreurs, et le lancement d'exception en cas d'erreur
			self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(PDOException $e){
			echo $e->getMessage();
			die;
		}
	}
	public static function getPDO(){
			return self::$pdo;
	}
}
	modelR::Init();
?>