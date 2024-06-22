<?php
require_once '../components/Cards.php';
require_once '../components/UsersCard.php';
require_once '../components/SideBar.php';
require_once '../class/Controllers.php';
require_once '../config/Connection.php';
require_once '../functions/functions.php';

session_start();
isAuthenticated();

$connection = new Connection;
$pendingVacData = Controllers::countData($connection->conn, 'vaccinations', 'status = ?', ['pending']);
$pendingFamData = Controllers::countData($connection->conn, 'family_planning', 'status = ?', ['pending']);

$pendingCount = $pendingVacData + $pendingFamData;

$approvedVacData = Controllers::countData($connection->conn, 'vaccinations', 'status = ?', ['approved']);
$approvedFamData = Controllers::countData($connection->conn, 'family_planning', 'status = ?', ['approved']);

$vaccineCount    = Controllers::countData($connection->conn, 'vaccines', 'status = ?', ['active']);
$usersCount      = Controllers::countData($connection->conn, 'users', 'status = ?', ['active']);

$healthcareCount  = Controllers::countData($connection->conn, 'users', 'role = ?', [4]);

$approvedCount   = $approvedVacData + $approvedFamData;

$sideBar = new SideBar($_SESSION['routes']);

$cards = new Cards($connection);

$usersCard = new UsersCard($connection);

$monthlyAppointmentsData = getMonthlyGraphData($connection->conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />
	<title>Dashboard</title>

</head>

<body class="page-body  page-fade">

	<div class="page-container">

		<?php $sideBar->render() ?>

		<div class="main-content">

			<?php include '../includes/header.php' ?>

			<hr />
			<?php
			if ($_SESSION['role'] == 1) {
				$cards->render();
			}
			if ($_SESSION['role'] == 0) {
				$usersCard->render();
			}
			?>
			<br />
			<h1>Dashboard</h1>

			<?php if ($_SESSION['role'] == 1) : ?>
				<div id="areaChart"></div>

				<script>
					var monthlyAppointmentsData = <?php echo $monthlyAppointmentsData; ?>;
					var categories = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

					var options = {
						series: [{
							name: "Patients",
							data: monthlyAppointmentsData
						}],
						chart: {
							height: 350,
							type: 'area',
							zoom: {
								enabled: false
							}
						},
						dataLabels: {
							enabled: false
						},
						stroke: {
							curve: 'straight'
						},
						title: {
							text: 'Patients by Month',
							align: 'left'
						},
						grid: {
							row: {
								colors: ['#f3f3f3', 'transparent'],
								opacity: 0.5
							},
						},
						xaxis: {
							categories: categories,
						}
					};

					var chart = new ApexCharts(document.querySelector("#areaChart"), options);
					chart.render();
				</script>
			<?php endif; ?>


			<?php if ($_SESSION['role'] !== 1 && $_SESSION['role'] !== 4 && $_SESSION['role'] !== 0) : ?>
				<div id='calendar'></div>

				<script>
					document.addEventListener('DOMContentLoaded', function() {
						var calendarEl = document.getElementById('calendar');

						var calendar = new FullCalendar.Calendar(calendarEl, {
							timeZone: 'UTC',
							initialView: 'dayGridMonth',
							events: 'https://fullcalendar.io/api/demo-feeds/events.json',
							editable: true,
							selectable: true
						});

						calendar.render();
					});
				</script>
			<?php endif; ?>
</body>

</html>