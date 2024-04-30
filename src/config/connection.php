<?php
class Connection
{
    private $host     = 'localhost';
    private $database = 'healthcare';
    private $username = 'root';
    private $password = '';

    public  $connect;

    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->connect = null;

        try {
            $this->connect = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->username, $this->password);

            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            echo "Connected successfully";

        } catch (PDOException $e) {

            echo 'Connection failed: ' . $e->getMessage();
        }

        return $this->connect;
    }
}