<?php

class Dbconnection{
	public $host;
	public $uname;
	public $password;
	public $dbname;
	public $con;
	
	function __construct()
	{
		$this->host = 'localhost';
		$this->uname= 'root';
		$this->password= '';
		$this->dbname= 'mydb';
	}
	public function connect(){
		$this->con = new mysqli($this->host, $this->uname, $this->password, $this->dbname);
	}

	public function disconnect(){
		$this->con->close();
	}
}
?>