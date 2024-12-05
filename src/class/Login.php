<?php
session_start();

require_once '../config/Connection.php';
require_once 'Authorization.php';
require_once 'Controllers.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = htmlspecialchars($_POST['username']) ?? '';
    $password = htmlspecialchars($_POST['password']) ?? '';

    $connection = new Connection();

    $db = $connection->conn;

    $statement = $db->prepare("SELECT * FROM users WHERE username = :username AND password = :password AND status = 'active' ");

    $statement->execute([':username' => $username, ':password' => $password]);

    $user = $statement->fetch(PDO::FETCH_ASSOC);

    if ($user) {

        setSessions($user);

        storeLoginLogs($connection, $user);

        header('location: ../pages/dashboard.php');
        
    } else {

        echo "<script>
                alert('Invalid Credentials! Try again');
                window.location.href = '../index.php';
            </script>";
    }

    exit;
}

function setSessions($user)
{

    $_SESSION['user_id']     =  $user['id'];
    $_SESSION['patient_id']  =  $user['user_id'];
    $_SESSION['username']    =  $user['username'];
    $_SESSION['role']        =  $user['role'];
    $_SESSION['base_url']    =  'https://localhost/healthcare/src/';
    $_SESSION['profile']     =  $_SESSION['base_url'] . 'pages/profile/index.php';
    $_SESSION['routes']      =  Authorization::routes($user['role']);
}

function storeLoginLogs($connection, $user)
{
    $data = [
        'name' => $user['name'],
        'role' => $user['role']
    ];

    $controller = new Controllers;

    $controller->store($connection->conn, 'logs', $data);
}
