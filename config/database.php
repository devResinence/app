<?php
class Database{
	//@var array environnement for database connexion
	public $config = [
	'db_host'=>'localhost',
	'db_name'=>'blog',
	'db_user'=>'root',
	'db_pass'=>''
	];

	public $table='';
	/**
	 * [$PDOinstance is a variable for create instance of PDO]
	 * @var null
	 */
	protected $PDOinstance =null;

	/**
	 * [$instance is static variable of creation pdo]
	 * @var null
	 */
	private static $instance = null;

	/**
	 * [_constructor for instanciate the database connexion]
	 * @param [null by default ,maybe it's possible to passed a array in the place of this viariable ] $config []
	 */
	public function __construct($config=null){
		if(empty($config)){
			$this->PDOinstance = new PDO('mysql:host='.$this->config['db_host'].';dbname='.$this->config['db_name'],$this->config['db_user'],$this->config['db_pass']);
		}else{
			$this->PDOinstance = new PDO('mysql:host='.$config['db_host'].';dbname='.$config['db_name'],$config['db_user'],$config['db_pass']);
		}
		
			
	}

	/**
	 * [getInstance instance pdo]
	 * @return [a Instance pdo ] [description]
	 */
	public static function getInstance(){
		if(is_null(self::$instance)){
			self::$instance = new Database();
		}
		return self::$instance;
	}

	/**
	 * [qry execute a query and show the result]
	 * @param  [string]  $query [it's an sql query]
	 * @param  boolean $one   [if this boolean is true so return one result else returned all result finded]
	 * @return [type]         [query ansd result]
	 */
	public function qry($query,$one=true){
		if(!$query){
			throw new Exception("Error Processing Request", 1);
		}
		return $one ? $this->PDOinstance->query($query)->fetch() : $this->PDOinstance->query($query)->fetchAll();
	}

	public function slct($param,$table,$one=true){
		return $one ? $this->PDOinstance->query("SELECT $param FROM $table")->fetch(PDO::FETCH_OBJ) : $this->PDOinstance->query("SELECT $param FROM $table")->fetchAll(PDO::FETCH_OBJ);
	}

	public function inst(){

	}

	public function updt(){

	}

	public function delt(){

	}

}