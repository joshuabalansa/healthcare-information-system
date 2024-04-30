<?php

require_once 'config/Connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $connection = new Connection();
    $db = $connection->connect;


    $statement = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");

    $statement->execute([':username' => $username, ':password' => $password]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);
    if ($user) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        $response = ["login_status" => "success", "message" => "Login successful"];

    } else {

        $response = ["login_status" => "invalid", "message" => "Invalid username or password"];

    }

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>