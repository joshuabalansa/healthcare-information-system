<?php
class Controllers
{

    /**
     * Get data by id function
     *
     * @param object $conn
     * @param string $table
     * @param int   $user_id
     * @return array $result | false
     */
    public function getDataById($conn, $table, $user_id)
    {
        try {

            $stmt = $conn->prepare("SELECT * FROM $table WHERE id = ?");
            $stmt->execute([$user_id]);

            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $data;
        } catch (PDOException $e) {

            echo 'Query failed: ' . $e->getMessage();

            return false;
        }
    }

    /**
     * Fetch All data from the database function
     *
     * @param object $conn
     * @param string $table
     * @return array $data
     */
    public function get($conn, $table)
    {

        $stmt = $conn->prepare("SELECT * FROM $table");
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    }

    /**
     * Store data
     *
     * @param object $conn
     * @param string $table
     * @param array $data
     * @return void
     */
    public function store($conn, $table, $data, $redirect)
    {
        try {

            $keys = array_keys($data);

            $placeholders = implode(', ', array_fill(0, count($keys), '?'));

            $sql = "INSERT INTO $table (" . implode(', ', $keys) . ") VALUES ($placeholders)";

            $stmt = $conn->prepare($sql);

            $stmt->execute(array_values($data));

            header("location: $redirect");
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    }
}
