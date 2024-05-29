<?php

session_start();

require_once '../components/Cards.php';
require_once '../components/SideBar.php';
require_once '../class/Controllers.php';
require_once '../config/Connection.php';
require_once '../functions/functions.php';

isAuthenticated();

$connection = new Connection;
$pendingVacData = Controllers::countData($connection->conn, 'vaccinations', 'status = ?', ['pending']);
$pendingFamData = Controllers::countData($connection->conn, 'family_planning', 'status = ?', ['pending']);

$sideBar = new SideBar($_SESSION['routes']);
$cards = new Cards($pendingVacData + $pendingFamData);

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
	<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
	<title>Dashboard</title>

</head>

<body class="page-body  page-fade">

	<div class="page-container">

		<?php $sideBar->render() ?>

		<div class="main-content">

			<?php include '../includes/header.php' ?>

			<hr />

			<?php $cards->render() ?>

			<br />
			<h1>Dashboard</h1>

			<div id="chart"></div>

			<script>
					var monthlyAppointmentsData = <?php echo $monthlyAppointmentsData; ?>;
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
					colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
					opacity: 0.5
				},
				},
				xaxis: {
				categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
				}
				};

				var chart = new ApexCharts(document.querySelector("#chart"), options);
			chart.render();

			</script>
		</div>
</body>

</html>