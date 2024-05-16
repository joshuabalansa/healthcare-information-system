<?php
session_start();

require_once '../config/Connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = htmlspecialchars($_POST['username']) ?? '';
    $password = htmlspecialchars($_POST['password']) ?? '';

    $connection = new Connection();

    $db = $connection->conn;

    $statement = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password AND status = 'active' ");

    $statement->execute([':username' => $username, ':password' => sha1($password)]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        $_SESSION['user_id']  = $user['id'];
        $_SESSION['username'] = $user['username'];

        $_SESSION['base_url'] = 'http://healthcare.test/src/';

        header('location: ../pages/dashboard.php');
    } else {

        $_SESSION['error'] = 'Wrong Username or Password';
        header('location: ../index.php');
    }

    exit;
}
