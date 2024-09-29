<?php
require_once '../components/Cards.php';
require_once '../components/usersCard.php';
require_once '../components/SideBar.php';
require_once '../class/Controllers.php';
require_once '../config/Connection.php';
require_once '../functions/functions.php';

session_start();
isAuthenticated();

$connection = new Connection;
$controller = new Controllers;
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

$todayDate = date('Y-m-d');
$tomorrowDate = date('Y-m-d', strtotime('+1 day'));

$todaySchedules = $controller->getDataById($connection->conn, 'schedules', 'date', $todayDate);
$tomorrowSchedules = $controller->getDataById($connection->conn, 'schedules', 'date', $tomorrowDate);

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
			<!-- <h1>Dashboard</h1 -->

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
							text: 'Appointments this month',
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


			<?php if (false) :
			?>
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
			<br><br>
			<?php if ($_SESSION['role'] == 2 || $_SESSION['role'] == 3): ?>
				<h2>Welcome <?= ucwords($_SESSION['username']) ?></h2>
			<?php endif; ?>
			<?php if ($_SESSION['role'] !== 2 && $_SESSION['role'] !== 3 && $_SESSION['role'] !== 0) : ?>
				<div class="mt-5">
					<div class="row">
						<div class="col-md-6">
							<h2>Schedules for Today</h2>
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Type</th>
										<th scope="col">Patient</th>
										<th scope="col">Time</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($todaySchedules)) : ?>
										<?php foreach ($todaySchedules as $index => $todaySchedule) : ?>
											<tr>
												<th scope="row"><?php echo $index + 1; ?></th>
												<td><?php echo $todaySchedule['title']; ?></td>
												<td><?php echo $todaySchedule['name']; ?></td>
												<td><?php echo convertTime($todaySchedule['time']); ?></td>
											</tr>
										<?php endforeach; ?>
									<?php else : ?>
										<tr>
											<td colspan="3">No schedules for today</td>
										</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
						<div class="col-md-6">
							<h2>Schedules for Tomorrow</h2>
							<table class="table table-hover">
								<thead>
									<tr>
										<th scope="col">#</th>
										<th scope="col">Type</th>
										<th scope="col">Patient</th>
										<th scope="col">Time</th>
									</tr>
								</thead>
								<tbody>
									<?php if (!empty($tomorrowSchedules)) : ?>
										<?php foreach ($tomorrowSchedules as $index => $tomorrowSchedule) : ?>
											<tr>
												<th scope="row"><?php echo $index + 1; ?></th>
												<td><?php echo $todaySchedule['title']; ?></td>
												<td><?php echo $tomorrowSchedule['name']; ?></td>
												<td><?php echo convertTime($tomorrowSchedule['time']); ?></td>
											</tr>
										<?php endforeach; ?>
									<?php else : ?>
										<tr>
											<td colspan="3">No schedules for tomorrow</td>
										</tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			<?php endif; ?>
</body>

</html>