<?php


class Database
{

    public $host = DB_HOST;
    private $db_name = DB_NAME;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    public $db_conn;

    // get the database connection
    public function getConnection()
    {
        $this->db_conn = null;

        try {
            $this->db_conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Database Connection Error: " . $exception->getMessage();
        }
        return $this->db_conn;
    }
}