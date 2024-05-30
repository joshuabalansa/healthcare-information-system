<?php
require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../class/Authorization.php';
require_once '../../class/Sms.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';
require_once '../../components/VaccineModalComponent.php';
require_once '../../class/Controllers.php';

session_start();
isAuthenticated();

$user_id    = $_SESSION['user_id'];

$connection = new Connection();

$sideBar    = new Sidebar($_SESSION['routes']);
$header     = new Header();
$render     = new CreateVaccineModal('New Record', 'Add Vaccine', 'Add a vaccine records');
$controller = new Controllers;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    storeVaccineData($connection, $controller);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <title>Reports</title>
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

    <div class="page-container" x-data="{ showModal: false }">


        <?php $sideBar->render(); ?>

        <div class="main-content">

            <?php include '../../includes/header.php'; ?>
            <hr />

            <br />

            <h3>Reports</h3>

            <?php $render->createModal() ?>
            <div id="chart"></div>
            <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Appointment Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($controller->get($connection->conn, 'vaccines') as $index => $vac) :  ?>
                        <tr class="odd gradeX">
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($vac['vaccine']) ?></td>
                            <td><?= htmlspecialchars($vac['vaccine']) ?></td>
                            <td><?= htmlspecialchars($vac['abbreviation']) ?></td>
                            <td class="center">
                                <?= $render->show($controller->getDataById($connection->conn, 'vaccines', 'id', $vac['id'])) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>Appointment Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </tfoot>
            </table>
            <br />
        </div>
        <script>
            var options = {
                series: [{
                    name: 'Vaccination',
                    data: [31, 40, 28, 51, 42, 109, 100]
                }, {
                    name: 'Family Planning',
                    data: [11, 32, 45, 32, 34, 52, 41]
                }],
                chart: {
                    height: 350,
                    type: 'area'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth'
                },
                xaxis: {
                    type: 'datetime',
                    categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                },
                tooltip: {
                    x: {
                        format: 'dd/MM/yy HH:mm'
                    },
                },
            };

            var chart = new ApexCharts(document.querySelector("#chart"), options);
            chart.render();
        </script>
</body>

</html>