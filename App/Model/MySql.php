<?php
namespace App\Model;

use Exception;
use PDO;
	class MySql{

		private static $pdo;

		public static function conn(){
			if(self::$pdo == null){
				try{
				self::$pdo = new PDO('mysql: host=127.0.0.1; dbname=erp_estoque', bd['user'], bd['pass'], array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
				}catch(Exception $e){
					echo '<h2>Erro ao conectar</h2>';
				}
			}

			return self::$pdo;
		}

	}
?>