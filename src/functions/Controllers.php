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
     * @param object $connect
     * @param string $table
     * @param string $column
     * @param string $data
     * @return void
     */
    public function store($connect, $table, $column, $data)
    {
        try {

            // $valuePlaceHolders = rtrim(str_repeat('? ', count($data), ', '));


        } catch(PDOException $e) {

            return false;
        }
    }
}
