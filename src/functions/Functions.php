<?php
require_once '../config/connection.php';

class Functions
{
    public function getAllData($conn, $table)
    {
        try {
            $stmt = $conn->query("SELECT * FROM $table");
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            echo 'Query failed: ' . $e->getMessage();
            return false;
        }
    }
}
