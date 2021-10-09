<?php
class Database
{
	public $conn;

	public function __construct($host, $dbname, $username, $password)
	{
		$con = new PDO('mysql:host=' . $host . '; dbname=' . $dbname . ';', $username, $password);

		$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$this->conn = $con;
	}
}