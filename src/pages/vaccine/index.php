<?php

session_start();

require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../class/Authorization.php';
require_once '../../class/Sms.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';
require_once '../../components/CreateVaccineModal.php';
require_once '../../class/Controllers.php';

isAuthenticated();

$user_id = $_SESSION['user_id'];

$connection = new Connection();

$fields = [
    'user_id',
    'id',
    'first_name',
    'last_name',
    'phone_number',
    'appointment_date',
    'appointment_time',
    'appointment_type',
    'status'
];

$patients = joinTableWhereClause(
    $connection->conn,
    'vaccinations',
    'family_planning',
    $fields,
    $fields,
    "WHERE status = 'approved'"
);

$routes = $_SESSION['routes'];
$sideBar = new Sidebar($routes);
$header = new Header();
$modal = new CreateVaccineModal('Create', 'Add Vaccine', 'Add a vaccine records');

$controller = new Controllers;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $vaccine_name = sanitizeInput($_POST['vaccine_name']);
    $abbreviation = sanitizeInput($_POST['abbreviation']);
    $manufacturer = sanitizeInput($_POST['manufacturer']);
    $doses          = sanitizeInput($_POST['doses']);
    $approved_ages = sanitizeInput($_POST['approved_ages']);
    $description = sanitizeInput($_POST['description']);

    $vaccineData = [
        'vaccine' => $vaccine_name,
        'abbreviation' => $abbreviation,
        'manufacturer' => $manufacturer,
        'doses' => $doses,
        'approved_ages' => $approved_ages,
        'description' => $description,
    ];

    $controller->store($connection->conn, 'vaccines', $vaccineData);

    echo "<script>window.location.reload</script>";
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

    <div class="page-container" x-data="{ showModal: false }">


        <?php $sideBar->render(); ?>

        <div class="main-content">

            <?php include '../../includes/header.php'; ?>
            <hr />

            <br />

            <h1>Vaccine Management</h1>

            <?php $modal->render() ?>

            <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Abbreviation</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($controller->get($connection->conn, 'vaccines') as $index => $vac) :  ?>
                        <tr class="odd gradeX">
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($vac['vaccine']) ?></td>
                            <td><?= htmlspecialchars($vac['abbreviation']) ?></td>
                            <td class="center">
                                <a href="<?= htmlspecialchars($_SESSION['base_url']) ?>pages/appointments/show.php?<?= $appointment['appointment_type'] ?>=<?= htmlspecialchars($appointment['user_id']) ?>" class="btn btn-sm btn-info">Info</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Abbreviation</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </tfoot>
            </table>

            <br />
        </div>

</body>

</html>