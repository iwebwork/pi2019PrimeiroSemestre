<?php
	class Banco{
		protected $pdo;
		
		public function __construct(){
			$this->pdo = new PDO("mysql:dbname=pi2019;host=127.0.0.1","root","");
		}

	}