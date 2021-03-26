<?php


class Database{
	private $localhost = 'localhost';
	private $userid  = 'root';
	private $password  = 'abc';
	private $database  = 'shopline';
	public $connect;
	public function __construct()
	{
		$this->connect = mysqli_connect($this->localhost,$this->userid,$this->password,$this->database);
        $this->connect -> set_charset("utf8");
	}
	public function sendToDB($sql){
		$this->connect->query($sql);
	}
    public function getFromDB($sql){
		$data = $this->connect->query($sql);
        return $data;
	}
}

?>