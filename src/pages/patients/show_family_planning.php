<?php

session_start();

require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';

isAuthenticated();

$sideBar = new SideBar($_SESSION['routes']);
$vacId = $_GET['vaccination'] ?? '';
$famId = $_GET['family_planning'] ?? '';

$controller = new Controllers();
$connection = new Connection();

$vacData = $controller->getDataById($connection->conn, 'vaccinations', 'user_id', $vacId);
$famData = $controller->getDataById($connection->conn, 'family_planning', 'user_id', $famId);

$patientData    = [];

if (!empty($vacId)) {

    $patientData    =   $controller->getDataById($connection->conn, 'patient_vaccination_records', 'patient_id', $vacId);
}

if (!empty($famId)) {

    $patientData    =   $controller->getDataById($connection->conn, 'patient_family_planning_records', 'patient_id', $famId);
    $userData       =   $controller->getDataById($connection->conn, 'users', 'user_id', $famId);
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

        <?php $sideBar->render(); ?>


        <div class="main-content">

            <?php include '../../includes/header.php'; ?>

            <hr />

            <br />

            <h3>All Information</h3>
            <a href="index.php" class="btn btn-primary" style="margin-bottom: 10px;">Back to List</a> <br> <br>
            Login Details <br>
            Username: <?= $userData[0]['username'] ?? '' ?> <br>
            Password: <?= $userData[0]['password'] ?? '' ?>
            <table class="table" style="background-color: pink;">
                <tbody>
                    <tr>
                        <th scope="row"><b>First Name:</b>
                            <?= $vacData ? $vacData[0]['first_name'] : $famData[0]['first_name'] ?></th>
                        <td></td>
                    <tr>
                        <th scope="row"><b>Middle Name:</b>
                            <?= $vacData ? $vacData[0]['middle_name'] : $famData[0]['middle_name'] ?></th>
                        <td></td>
                    <tr>
                        <th scope="row"><b>Last Name:</b>
                            <?= $vacData ? $vacData[0]['last_name'] : $famData[0]['last_name'] ?></th>
                        <td></td>
                    <tr>
                        <th scope="row"><b>Birth Date:</b>
                            <?= $vacData ? $vacData[0]['birth_date'] : $famData[0]['birth_date'] ?></th>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row"><b>Address:</b>
                            <?= $vacData ? $vacData[0]['address'] : $famData[0]['address'] ?></th>
                        <td></td>
                    <tr>
                        <th scope="row"><b>Phone Number:
                            </b>P<?= $vacData ? $vacData[0]['phone_number'] : $famData[0]['phone_number'] ?></th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <h3 style="text-align: center;">METHODS</h3>
            <table class="table" style="background-color: pink;">
                <thead>
                    <tr>
                        <th scope="col">METHODS</th>
                        <th scope="col">Date</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($patientData as  $index => $data) : ?>
                        <tr class="odd gradeX">
                            <td><?= strtoupper(isset($data['vaccine']) ? $data['vaccine'] : $data['method']) ?></td>
                            <td>
                                <?= convertMonth($data['created_at']) ?>
                            </td>
                        </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
</body>

</html>
