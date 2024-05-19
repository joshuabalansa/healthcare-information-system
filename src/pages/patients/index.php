<?php

session_start();

require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../class/Authorization.php';
require_once '../../class/Sms.php';
require_once '../../functions/functions.php';

if (!isset($_SESSION['user_id'], $_SESSION['username'])) {

    die("<center>401 Authorization Required</center>");
}

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

            <h1>Patients</h1>
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


        <script>
            function confirmCancel(id) {
                var confirmation = confirm("Are you sure you want to Delete Appointment?")

                if (confirmation) {
                    window.location.href = "index.php?cancel=" + id
                }
            }

            function confirmApprove(id) {
                var confirmation = confirm("Are you sure you want to Approve Appointment?")

                if (confirmation) {
                    window.location.href = "index.php?approve=" + id
                }
            }
        </script>
</body>

</html>