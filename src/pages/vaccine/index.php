<?php

session_start();

require_once '../../class/Validator.php';
require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../class/Authorization.php';
require_once '../../api/sms.php';
require_once '../../functions/functions.php';

if (!isset($_SESSION['user_id'], $_SESSION['username'])) {

    die("<center>401 Authorization Required</center>");
}

$user_id = $_SESSION['user_id'];

$validator = new Validator();
$validator->validateUserSession($_SESSION['user_id']);

$controller = new Controllers();
$connection = new Connection();

if (isset($_GET['cancel'])) {
    $id = $_GET['cancel'];

    Controllers::update($connection->conn, 'vaccinations', 'status', 'cancelled', $id, 'index.php');
}


if (isset($_GET['approve']) && $appointmentData == 'pending') {

    $id = $_GET['approve'];
    $appointmentData = $controller->getDataById($connection->conn, 'vaccinations', 'id', $id);

    $username = setUsername($appointmentData);
    $password = rand(99999, 999999);

    // $data = ;

    $message = "Your appointment has been approved. you may login using the provided credentials to track your records \n \n Username: $username \n Password: $password";

    $controller->store($connection->conn, 'users', userData($appointmentData, $username, $password));

    SMS::sendMessageNotification(
        '',
        $appointmentData[0]['phone_number'],
        $message,
        'SEMAPHORE',
        'https://semaphore.co/api/v4/messages'
    );

    Controllers::update($connection->conn, 'vaccinations', $id, 'status', 'approved', 'index.php');
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

    <div class="page-container">

        <?php include '../../includes/sidebar-menu.php'; ?>


        <div class="main-content">

            <?php include '../../includes/header.php'; ?>

            <hr />

            <br />

            <h1>Vaccine Management</h1>
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
                            <td><span class="badge text-bg-<?= $vaccination['status'] == 'approved' ? 'success' : 'danger' ?>"><?= ucfirst($vaccination['status']) ?></span></td>
                            <td class="center">
                                <a href="<?= $_SESSION['base_url'] ?>/pages/appointments/show.php?show=<?= $vaccination['id'] ?>" class="btn btn-sm btn-info">Info</a>
                                <button onclick="confirmApprove(<?= $vaccination['id'] ?>)" class="btn btn-sm btn-success">Approve</button>
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


        <!-- Imported styles on this page -->

</body>

</html>