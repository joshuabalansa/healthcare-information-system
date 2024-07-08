<?php

session_start();

require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/ModalComponent.php';
require_once '../../components/SideBar.php';

isAuthenticated();

$vacId = $_GET['vaccination'] ?? '';
$famId = $_GET['family_planning'] ?? '';

$sideBar = new SideBar($_SESSION['routes']);
$controller = new Controllers();
$connection = new Connection();

$patientData = [];

$render = new ModalComponent('Add New Record', 'Add New Record', 'Add new record to patient');

if (!empty($vacId)) {

    $patientData = $controller->getDataById($connection->conn, 'patient_vaccination_records', 'patient_id', $vacId);
    $datas =  $controller->get($connection->conn, 'vaccines');
    $table = 'patient_vaccination_records';
}

if (!empty($famId)) {

    $patientData = $controller->getDataById($connection->conn, 'patient_family_planning_records', 'patient_id', $famId);
    $datas =  $controller->get($connection->conn, 'family_planning_methods');
    $table = 'patient_family_planning_records';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $patientId = !empty($vacId) ? $vacId : (!empty($famId) ? $famId : '');

    storePatientData($connection, $controller, $patientId, $vacId, $famId);

}

if (isset($_GET['removeMethod'])) {

    removePatientData($connection, $controller, $_GET['removeMethod']);
}


$selectOptionsData = formatSelectedOptions($datas);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <title>Patient Data</title>
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

            <h3>Patient Data</h3>

            <?php
            if (!empty($vacId)) {

                $render->createModal([
                    [
                        'label' => 'Age',
                        'id' => 'age',
                        'name' => 'age',
                        'type' => 'text',
                        'required' => true
                    ],
                    [
                        'label' => 'Weight',
                        'id' => 'wt',
                        'name' => 'wt',
                        'type' => 'text',
                        'required' => true
                    ],
                    [
                        'label' => 'Height',
                        'id' => 'ht',
                        'name' => 'ht',
                        'type' => 'text',
                        'required' => true
                    ],
                    [
                        'label' => 'Temperature',
                        'id' => 'temp',
                        'name' => 'temp',
                        'type' => 'text',
                        'required' => true
                    ],
                    [
                        'label' => 'Remarks',
                        'id' => 'remarks',
                        'name' => 'remarks',
                        'type' => 'text',
                        'required' => false
                    ],
                ], $selectOptionsData);
            }

            if (!empty($famId)) {

                $render->createModal([], $selectOptionsData);
            }
            ?>

            <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patientData as  $index => $data) : ?>
                        <tr class="odd gradeX">
                            <td><?= $index + 1 ?></td>
                            <td><?= strtoupper(isset($data['vaccine']) ? $data['vaccine'] : $data['method']) ?></td>
                            <td class="center">
                                <span class="badge badge-<?= $data['status'] == 'not approved' ? 'danger' : 'info' ?>">
                                    <?= ucwords($data['status']) ?>
                                </span>
                            </td>
                            <td>
                                <div style="display: flex;">
                                    <?= $render->show($controller->getDataById($connection->conn, $table, 'id', $data['id'])) ?>
                                    <button onclick="removeMethod(<?= $data['id'] ?>)" style="margin-left: 10px;" class="btn btn-sm btn-secondary">Remove</button>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </tfoot>
            </table>
            <br />
        </div>

        <script>
            function removeMethod(id) {
                const confirmation = confirm("Are you sure you want to remove this patient data?");

                if (confirmation) {

                    const url = new URL(window.location.href);
                    const params = new URLSearchParams(url.search);

                    params.set('removeMethod', id);
                    window.location.href = `${url.pathname}?${params.toString()}`;
                }
            }
        </script>

</body>

</html>