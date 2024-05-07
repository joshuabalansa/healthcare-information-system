<?php
require_once '../config/connection.php';
include '../functions/functions.php';

class Controllers
{

    /**
     * @var object $connection
     */
    public $connection;

    /**
     * @param $object $connection
     */
    public function __construct() {

        $this->connection = (new Connection())->conn;
    }

    /**
     * Get data by id function
     *
     * @param object $connnect
     * @param string $table
     * @param int   $user_id
     * @return array $result | false
     */
    public function getDataById($table, $user_id)
    {
        try {

            $stmt = $this->connection->prepare("SELECT * FROM $table WHERE id = ?");
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
    public function store($table, $data, $redirect)
    {
        try {

            $keys = array_keys($data);

            $placeholders = implode(', ', array_fill(0, count($keys), '?'));

            $sql = "INSERT INTO $table (" . implode(', ', $keys) . ") VALUES ($placeholders)";

            $stmt = $this->connection->prepare($sql);

            $stmt->execute(array_values($data));

            header("location: $redirect");

        } catch (PDOException $e) {

           die_dump($e);
        }
    }
}
