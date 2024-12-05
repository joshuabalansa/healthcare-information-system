<?php

session_start();

require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';

isAuthenticated();

$sideBar = new SideBar($_SESSION['routes']);

$controller = new Controllers();
$connection = new Connection();

$patientId = $_SESSION['patient_id'];
$patientInformation = [];
$vacData = $controller->getDataById($connection->conn, 'vaccinations', 'user_id', $patientId);
$famData = $controller->getDataById($connection->conn, 'family_planning', 'user_id', $patientId);

if ($vacData) {
    $patientInformation =   $vacData;
} else {
    $patientInformation =   $famData;
}

$patientData = [];

$vacData1    =   $controller->getDataById($connection->conn, 'patient_vaccination_records', 'patient_id', $patientId);
$famData2   =   $controller->getDataById($connection->conn, 'patient_family_planning_records', 'patient_id', $patientId);

if($vacData1) {
    $patientData =   $vacData1;
} else {
    $patientData =   $famData2;
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
    <style>
        table {
            color: #000;
        }
    </style>
</head>

<body class="page-body  page-fade">

    <div class="page-container">

        <?php $sideBar->render(); ?>


        <div class="main-content">

            <?php include '../../includes/header.php'; ?>

            <hr />

            <br />

            <h3 style="text-align: center;">Family Planning Records</h3> <br> <br>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">DATE OF VISIT</th>
                    <th scope="col">MEDICAL FINDINGS</th>
                    <th scope="col">METHOD ACCEPTED</th>
                    <th scope="col">APPROVAL</th>
                    </tr>
                </thead>
                    <tbody>
                    <?php foreach ($patientData as  $index => $data) : ?>
                        <tr>
                            <td><?= isset($data['date_of_visit']) ? convertMonth($data['date_of_visit']) : '' ?></td>
                            <td><?= isset($data['medical_findings']) ? $data['medical_findings'] : '' ?></td>
                            <td><?= strtoupper(isset($data['vaccine']) ? $data['vaccine'] : $data['method']) ?></td>
                            <td class="center">
                                    <span class="badge badge-<?= $data['status'] == 'not approved' ? 'danger' : 'info' ?>">
                                        <?= ucwords($data['status']) ?>
                                    </span>
                                </td>
                        </tr>
                    <?php endforeach; ?>
                        </tr>
                    </tbody>
                </table>
        </div>
</body>

</html>
