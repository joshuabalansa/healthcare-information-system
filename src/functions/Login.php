<?php
session_start();

require_once '../config/Connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $connection = new Connection();

    $db = $connection->conn;


    $statement = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password AND status = 'active' ");

    $statement->execute([':username' => $username, ':password' => sha1($password)]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];

        header('location: ../dashboard.php');
    } else {

        header('location: ../index.php');
    }

    exit;
}
