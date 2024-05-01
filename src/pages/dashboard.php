<?php
require_once '../functions/Helpers.php';
require_once '../functions/Controllers.php';
require_once '../config/Connection.php';

session_start();

$helper = new Helpers();

$helper->validateUserSession($_SESSION['user_id']);

$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

$controller = new Controllers();
$connection = new Connection();

$user = $controller->getAllData($connection->conn, 'users');
$role = $user[0]['role'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<!-- <link rel="icon" href="../assets/images/favicon.ico"> -->

	<title></title>

	<link rel="stylesheet" href="../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="../assets/css/font-icons/entypo/css/entypo.css">

	<link rel="stylesheet" href="../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/css/neon-core.css">
	<link rel="stylesheet" href="../assets/css/neon-theme.css">
	<link rel="stylesheet" href="../assets/css/neon-forms.css">
	<link rel="stylesheet" href="../assets/css/custom.css">

	<script src="../assets/js/jquery-1.11.3.min.js"></script>

</head>

<body class="page-body  page-fade">

	<div class="page-container">

		<?php include 'sidebar-menu.php' ?>

		<div class="main-content">

			<?php include 'header.php' ?>

			<hr />


			<?php include 'cards.php' ?>

			<br />
			<h1>Dashboard</h1>

		</div>

		<!-- Imported styles on this page -->
		<link rel="stylesheet" href="../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
		<link rel="stylesheet" href="../assets/js/rickshaw/rickshaw.min.css">

		<!-- Bottom scripts (common) -->
		<script src="../assets/js/gsap/TweenMax.min.js"></script>
		<script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
		<script src="../assets/js/bootstrap.js"></script>
		<script src="../assets/js/joinable.js"></script>
		<script src="../assets/js/resizeable.js"></script>
		<script src="../assets/js/neon-api.js"></script>
		<script src="../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


		<!-- Imported scripts on this page -->
		<script src="../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
		<script src="../assets/js/jquery.sparkline.min.js"></script>
		<script src="../assets/js/rickshaw/vendor/d3.v3.js"></script>
		<script src="../assets/js/rickshaw/rickshaw.min.js"></script>
		<script src="../assets/js/raphael-min.js"></script>
		<script src="../assets/js/morris.min.js"></script>
		<script src="../assets/js/toastr.js"></script>
		<script src="../assets/js/neon-chat.js"></script>


		<!-- JavaScripts initializations and stuff -->
		<script src="../assets/js/neon-custom.js"></script>


		<!-- Demo Settings -->
		<script src="../assets/js/neon-demo.js"></script>

</body>

</html>