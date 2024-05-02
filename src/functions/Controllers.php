<?php
require_once '../config/connection.php';

class Controllers
{
    public function getData($connnect, $table, $user_id)
    {
        try {

            $stmt = $connnect->prepare("SELECT * FROM $table WHERE id = ?");
            $stmt->execute([$user_id]);

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;

        } catch (PDOException $e) {

            echo 'Query failed: ' . $e->getMessage();

            return false;
        }
    }
}
