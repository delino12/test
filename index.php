<?php

class DBconnect
{
	protected $host;
	protected $user;
	protected $pass;
	protected $database;
	protected $connect;


	public function __construct()
	{
		$this->host 	= "localhost";
		$this->user 	= "root";
		$this->pass 	= "";
		$this->database = "test_db";
	}

	public function init()
	{
		$this->connect = new mysql_connect(
			$this->host,
			$this->user,
			$this->pass,
			$this->database
		);

		return $connect;
	}
}



?>