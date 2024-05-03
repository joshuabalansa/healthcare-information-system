<?php
require_once '../config/connection.php';

class Controllers
{

    /**
     * Get data by id function
     *
     * @param object $connnect
     * @param string $table
     * @param int $user_id
     * @return array
     */
    public function getDataById($connnect, $table, $user_id)
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

    /**
     * Store data
     *
     * @param string $table
     * @param array $data
     * @return void
     */
    public function store($table, $data)
    {
        try {

            $keys = array_keys($data);
            $placeholders = implode(', ', array_fill(0, count($keys), '?'));

            $connection = new Connection();
            $conn = $connection->conn;

            $sql = "INSERT INTO $table (" . implode(', ', $keys) . ") VALUES ($placeholders)";
            $stmt = $conn->prepare($sql);

            $stmt->execute(array_values($data));

        } catch(PDOException $e) {

            return false;
        }
    }
}
