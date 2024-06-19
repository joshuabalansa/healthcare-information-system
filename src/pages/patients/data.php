<?php

session_start();

require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';

isAuthenticated();

$vacId = $_GET['vaccination'] ?? '';
$famId = $_GET['family_planning'] ?? '';

$controller = new Controllers();
$connection = new Connection();

$patientData = [];

if (!empty($vacId)) {
    $patientData = $controller->get($connection->conn, 'vaccines');
}

if (!empty($famId)) {
    $patientData = $controller->get($connection->conn, 'family_planning_methods');
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

            <h3>Patient Data</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">
                            <a href="index.php" class="btn btn-sm btn-secondary">Back</a>
                            <a href="#" class="btn btn-sm btn-primary">Add New</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patientData as $data) : ?>
                        <tr>
                            <th scope="row"><?= strtoupper(isset($data['vaccine']) ? $data['vaccine'] : $data['method_name']) ?>:</th>
                            <td>
                                <span class="badge badge-<?= $data['status'] == 'incomplete' ? 'danger' : 'success' ?>">
                                    <?= $data['status'] ?>
                                </span>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <br />
        </div>
</body>

</html>