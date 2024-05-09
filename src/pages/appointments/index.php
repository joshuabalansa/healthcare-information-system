<?php

session_start();

require_once '../../class/Validator.php';
require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../class/Authorization.php';

if (!isset($_SESSION['user_id'], $_SESSION['username'])) {

	die("<h1>401 Authorization Required</h1>");
}

$user_id = $_SESSION['user_id'];

$validator = new Validator();
$validator->validateUserSession($_SESSION['user_id']);

$controller = new Controllers();
$connection = new Connection();

// $user = $controller->getDataById($connection->conn, 'users', $user_id);

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

	<link rel="stylesheet" href="../../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="../../assets/css/font-icons/entypo/css/entypo.css">

	<link rel="stylesheet" href="../../assets/css/bootstrap.css">
	<link rel="stylesheet" href="../../assets/css/neon-core.css">
	<link rel="stylesheet" href="../../assets/css/neon-theme.css">
	<link rel="stylesheet" href="../../assets/css/neon-forms.css">
	<link rel="stylesheet" href="../../assets/css/custom.css">

	<script src="../../assets/js/jquery-1.11.3.min.js"></script>

</head>

<body class="page-body  page-fade">

	<div class="page-container">

		<?php include '../../includes/sidebar-menu.php'; ?>


		<div class="main-content">

			<?php include '../../includes/header.php'; ?>

			<hr />

			<br />

			<h1>Appointments</h1>
			<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Date Appointment</th>
						<th>Time</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($controller->get($connection->conn, 'vaccinations') as $vaccination) : ?>
						<tr class="odd gradeX">
							<td><?= $vaccination['first_name'] . ' ' . $vaccination['last_name'] ?></td>
							<td><?= $vaccination['phone_number'] ?></td>
							<td><?= $vaccination['appointment_date'] ?></td>
							<td><?= $vaccination['appointment_time'] ?></td>
							<td><?= $vaccination['status'] ?></td>
							<td class="center">
								<a href="http://healthcare.test/src/pages/appointments/show.php?show=<?= $vaccination['id'] ?>" class="btn btn-sm btn-info">Info</a>
								<a href="http://healthcare.test/src/pages/appointments/show.php?show=<?= $vaccination['id'] ?>" class="btn btn-sm btn-outline-success">Approve</a>
								<button onclick="confirmCancel(<?= $vaccination['id'] ?>)" class="btn btn-sm btn-secondary">Cancel</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Date Appointment</th>
						<th>Time</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					</thead>
				</tfoot>
			</table>

			<br />
		</div>


		<script>
			function confirmCancel(id) {
				var confirmation = confirm("Are you sure you want to Cancel Appointment?")

				if (confirmation) {
					window.location.href = "user.php?userDelete=" + userId
				}
			}
		</script>


		<!-- Imported styles on this page -->
		<link rel="stylesheet" href="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
		<link rel="stylesheet" href="../../assets/js/rickshaw/rickshaw.min.css">

		<!-- Bottom scripts (common) -->
		<script src="../../assets/js/gsap/TweenMax.min.js"></script>
		<script src="../../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
		<script src="../../assets/js/bootstrap.js"></script>
		<script src="../../assets/js/joinable.js"></script>
		<script src="../../assets/js/resizeable.js"></script>
		<script src="../../assets/js/neon-api.js"></script>
		<script src="../../assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


		<!-- Imported scripts on this page -->
		<script src="../../assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
		<script src="../../assets/js/jquery.sparkline.min.js"></script>
		<script src="../../assets/js/rickshaw/vendor/d3.v3.js"></script>
		<script src="../../assets/js/rickshaw/rickshaw.min.js"></script>
		<script src="../../assets/js/raphael-min.js"></script>
		<script src="../../assets/js/morris.min.js"></script>
		<script src="../../assets/js/toastr.js"></script>
		<script src="../../assets/js/neon-chat.js"></script>


		<!-- JavaScripts initializations and stuff -->
		<script src="../../assets/js/neon-custom.js"></script>


		<!-- Demo Settings -->
		<script src="../../assets/js/neon-demo.js"></script>

		<!-- Imported styles on this page -->
		<link rel="stylesheet" href="../../assets/js/datatables/datatables.css">
		<link rel="stylesheet" href="../../assets/js/select2/select2-bootstrap.css">
		<link rel="stylesheet" href="../../assets/js/select2/select2.css">
		<script src="../../assets/js/datatables/datatables.js"></script>
		<script src="../../assets/js/select2/select2.min.js"></script>
		<script src="../../assets/js/neon-chat.js"></script>
		<script src="../../assets/datatable/datatable.js"></script>
</body>

</html>