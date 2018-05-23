<?php
class Database extends PDO{
	
	public $pdo;
	public function __construct($config){
		if(empty($this->pdo)){
			if(!is_array($config)){
				throw new Exception("Error Processing Request", 1);	
			}
			try{
				$this->pdo = new PDO('mysql:host='.$config['db_host'].';dbname='.$config['db_name'],$config['db_user'],$config['db_pass']);
				$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				var_dump($this->pdo);

			}catch (PDOException $e) {
	    		echo 'Connexion échouée : ' . $e->getMessage();
			}
		}
		return $this->pdo;
		
	}
}