<?php

session_start();

require_once '../class/Validator.php';
require_once '../class/Controllers.php';
require_once '../config/connection.php';
require_once '../class/Authorization.php';
require_once '../functions/functions.php';

if (!isset($_SESSION['user_id'], $_SESSION['username'])) {

	die("<center>401 Authorization Required</center>");
}

$user_id = $_SESSION['user_id'];

$validator = new Validator();
$validator->validateUserSession($_SESSION['user_id']);

$controller = new Controllers();

$connection = new Connection();
$user = $controller->getDataById($connection->conn, 'users', 'id', $user_id);

$_SESSION['routes'] = Authorization::routes($user[0]['role']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<title></title>

</head>

<body class="page-body  page-fade">

	<div class="page-container">

		<?php include '../includes/sidebar-menu.php' ?>

		<div class="main-content">

			<?php include '../includes/header.php' ?>

			<hr />


			<?php include '../includes/cards.php' ?>

			<br />
			<h1>Dashboard</h1>

		</div>
</body>

</html>