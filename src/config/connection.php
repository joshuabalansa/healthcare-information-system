<?php

require_once '../functions/Functions.php';

class Database
{
    private $host = 'localhost';
    private $database = 'vims';
    private $username = 'root';
    private $password = '';
    public $conn;

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

            echo "Connected successfully";
        } catch (PDOException $e) {

            echo 'Connection failed: ' . $e->getMessage();
        }

        return $this->conn;
    }
}
$database = new Database();

// Assign the PDO connection object to the $pdo variable
$pdo = $database->conn;

$functions = new Functions();

$data = $functions->getAllData($pdo, 'users');

print_r($data);
