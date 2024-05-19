<?php

session_start();

require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../class/Authorization.php';
require_once '../../class/Sms.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';

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

            <h1>Vaccine Management</h1>
            <button class="btn btn-primary" style="margin-bottom: 10px;">Add Vaccine</button>
            <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patients as $index => $appointment) :  ?>
                        <tr class="odd gradeX">
                            <td><?= $index + 1 ?></td>
                            <td><?= htmlspecialchars($appointment['first_name'] . ' ' . $appointment['last_name']) ?></td>
                            <td><?= htmlspecialchars(ucwords(str_replace('_', ' ', $appointment['appointment_type']))) ?></td>
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
                        <th>Type</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </tfoot>
            </table>

            <br />
        </div>

</body>

</html>