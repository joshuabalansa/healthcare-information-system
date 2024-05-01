<?php
require_once '../config/connection.php';

class Controllers
{
    public function getAllData($connnect, $table)
    {
        try {

            $stmt = $connnect->query("SELECT * FROM $table");

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (PDOException $e) {

            echo 'Query failed: ' . $e->getMessage();

            return false;
        }
    }
}
