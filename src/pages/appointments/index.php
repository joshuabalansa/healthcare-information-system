<?php
require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../class/Authorization.php';
require_once '../../class/Sms.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';

session_start();
isAuthenticated();

$user_id = $_SESSION['user_id'];

$controller = new Controllers();
$connection = new Connection();

$sideBar    = new Sidebar($_SESSION['routes']);
$header     = new Header();

/**
 * Cancel Appointments based on thier user_id
 */
if (isset($_GET['cancel'])) {

	$id = $_GET['cancel'];

	$vacData = $controller->getDataById($connection->conn, 'vaccinations', 'user_id', $id);
	$famData = $controller->getDataById($connection->conn, 'family_planning', 'user_id', $id) ?? [];

	if ($vacData) {

		Controllers::update($connection->conn, 'vaccinations', 'user_id', $id, 'status', 'cancelled');
	} else {

		Controllers::update($connection->conn, 'family_planning', 'user_id', $id, 'status', 'cancelled');
	}

	$toastMsg = 'Appointment has been cancelled.';
}

/**
 * Confirm all appointments
 */
if (isset($_GET['confirm'])) {

	Controllers::update($connection->conn, 'vaccinations', 'status', 'pending', 'status', 'approved');
	Controllers::update($connection->conn, 'family_planning', 'status', 'pending', 'status', 'approved');

	// header('location: index.php');

	$toastMsg = 'All Pending Appointments has been approved.';
}

/**
 * Approve appointment based on thier user_id
 */
if (isset($_GET['approve'])) {

	$id = $_GET['approve'];

	$vacData = $controller->getDataById($connection->conn, 'vaccinations', 'user_id', $id);
	$famData = $controller->getDataById($connection->conn, 'family_planning', 'user_id', $id);

	if ($vacData) {

		checkAndUpdateAppointment($vacData, $controller, $connection, $id);
	} else {

		checkAndUpdateAppointment($famData, $controller, $connection, $id);
	}

	$toastMsg = 'Appointment has been approved.';
}

$appointments = joinTable($connection->conn, 'vaccinations', 'family_planning');

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

		<?php $sideBar->render(); ?>


		<div class="main-content">

			<?php include '../../includes/header.php'; ?>

			<hr />

			<br />

			<h3>Appointments</h3>
			<button onclick="notify('confirm')" style="margin-bottom: 10px;" class="btn btn-sm btn-primary">Approve All</button>
			<table class="table table-bordered datatable" id="table-1">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Type</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($appointments as $index => $appointment) : ?>
						<tr class="odd gradeX">
							<td><?= $index + 1 ?></td>
							<td><?= htmlspecialchars($appointment['first_name'] . ' ' . $appointment['last_name']) ?></td>
							<td><?= htmlspecialchars($appointment['phone_number']) ?></td>
							<td><?= htmlspecialchars(ucwords(str_replace('_', ' ', $appointment['appointment_type']))) ?></td>
							<td>
								<span class="badge <?= $appointment['status'] == 'approved' ? 'badge-success' : 'badge-danger' ?>">
									<?= ucfirst(htmlspecialchars($appointment['status'])) ?>
								</span>
							</td>
							<td class="center">
								<a href="<?= htmlspecialchars($_SESSION['base_url']) ?>pages/appointments/show.php?<?= $appointment['appointment_type'] ?>=<?= htmlspecialchars($appointment['user_id']) ?>" class="btn btn-sm btn-info">
									<i class="entypo-info"></i>
								</a>

								<?php if ($appointment['status'] !== 'approved') : ?>
									<button onclick='confirmation(<?= json_encode($appointment['user_id']) ?>, <?= json_encode('approve') ?>)' class="btn btn-sm btn-green btn-icon icon-left">
										Approve<i class="entypo-check"></i>
									</button>

								<?php endif; ?>
								<button class="btn btn-sm btn-secondary btn-secondary" onclick='confirmation(<?= json_encode($appointment['user_id']) ?>, <?= json_encode('cancel') ?>)'><i class="entypo-cancel"></i></button>


							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>#</th>
						<th>Name</th>
						<th>Phone Number</th>
						<th>Type</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
					</thead>
				</tfoot>
			</table>

			<br />
		</div>
		<?php if (!empty($toastMsg)) : ?>
			<script>
				document.addEventListener('DOMContentLoaded', function() {
					Toastify({
						text: "<?= $toastMsg ?>",
						duration: 3000,
						destination: 'https://github.com/apvarun/toastify-js',
						newWindow: true,
						close: true,
						gravity: 'top',
						position: 'right',
						stopOnFocus: true,
						style: {
							background: '#198754',
						},
					}).showToast();
				});
			</script>
		<?php endif; ?>
		<script src="../../js/alert.js"></script>
</body>

</html>