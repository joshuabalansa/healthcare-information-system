<?php
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';

session_start();
isAuthenticated();

$user_id = $_SESSION['user_id'];

$connection = new Connection();

$fields = [
    'user_id',
    'id',
    'first_name',
    'last_name',
    'phone_number',
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

$sideBar  = new Sidebar($_SESSION['routes']);
$header   = new Header();

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

            <h3>Patients Records</h3>
            <table class="table table-bordered datatable" id="table-1">
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
                                <a href="<?= htmlspecialchars($_SESSION['base_url']) ?>pages/patients/show.php?<?= $appointment['appointment_type'] ?>=<?= htmlspecialchars($appointment['user_id']) ?>" class="btn btn-sm btn-primary" title="Patient Information"><i class="entypo-info"></i></a>
                                <a href="<?= htmlspecialchars($_SESSION['base_url']) ?>pages/patients/data.php?<?= $appointment['appointment_type'] ?>=<?= htmlspecialchars($appointment['user_id']) ?>" class="btn btn-sm btn-primary" title="Patient Data"><i class="entypo-archive"></i></a>
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