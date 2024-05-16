<?php
class Connection
{
    private $host     = 'localhost';
    private $database = 'healthcare';
    private $username = 'root';
    private $password = '';

    public  $conn;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->username, $this->password);

            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (PDOException $e) {

            echo $e->getMessage();
        }

        return $this->conn;
    }
}
