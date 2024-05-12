<?php
class Controllers
{

    /**
     * Get data by id function
     *
     * @param object $conn
     * @param string $table
     * @param int $user_id
     * @return array $result | false
     */
    public function getDataById($conn, $table, $field, $id)
    {
        try {

            $stmt = $conn->prepare("SELECT * FROM $table WHERE $field = ?");
            $stmt->execute([$id]);

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
    public function store($conn, $table, $data)
    {
        try {

            $keys = array_keys($data);

            $placeholders = implode(', ', array_fill(0, count($keys), '?'));

            $sql = "INSERT INTO $table (" . implode(', ', $keys) . ") VALUES ($placeholders)";

            $stmt = $conn->prepare($sql);

            $stmt->execute(array_values($data));

            // header("location: $redirect");
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    }

    /**
     * Delete data from the database
     *
     * @param object $conn
     * @param string $table
     * @param int $id
     * @return void
     */
    public static function delete($conn, $table, $id, $redirect)
    {

        try {
            $sql = "DELETE FROM $table WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id]);

            header("location: $redirect");
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    }

    /**
     * Update a specific field for a record in the database
     *
     * @param object $conn
     * @param string $table
     * @param int $id
     * @param string $field
     * @param mixed $value
     * @return void
     */
    public static function update($conn, $table, $id, $field, $value, $redirect)
    {
        try {

            $sql = "UPDATE $table SET $field = ? WHERE id = ?";

            $stmt = $conn->prepare($sql);
            $stmt->execute([$value, $id]);

            header("location: $redirect");
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    }
}
