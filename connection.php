<?php
	class Db {
		
		private static $instance = NULL;		

		private function __construct(){}

		private function __clone(){}
		
		public static function getConnect(){
			if (!isset(self::$instance)) {
				$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
				self::$instance= new PDO('mysql:host=127.0.0.1;dbname=beauty-salon;port=8889','root','root',$pdo_options);
                self::$instance->exec("set names utf8");
			}
			return self::$instance;
		}
	}