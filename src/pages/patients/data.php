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

$sideBar    = new SideBar($_SESSION['routes']);
$controller = new Controllers();
$connection = new Connection();

$patientId  = !empty($vacId) ? $vacId : (!empty($famId) ? $famId : '');

$patientData    = [];
$dataById       = [];
$patientInfo    = [];

$render = new ModalComponent('Add New', 'Add New', 'Add new data to patient');

if (!empty($vacId)) {

    $patientData    =   $controller->getDataById($connection->conn, 'patient_vaccination_records', 'patient_id', $vacId);
    $datas          =   $controller->get($connection->conn, 'vaccines');
    $table          =   'patient_vaccination_records';
    $patientInfo    =   $controller->getDataById($connection->conn, 'vaccinations', 'user_id', $vacId);
}

if (!empty($famId)) {

    $patientData    =   $controller->getDataById($connection->conn, 'patient_family_planning_records', 'patient_id', $famId);
    $datas          =   $controller->get($connection->conn, 'family_planning_methods');
    $table          =   'patient_family_planning_records';
    $patientInfo    =   $controller->getDataById($connection->conn, 'family_planning', 'user_id', $famId);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['vaccine']) || !empty($_POST['method'])) {

        storePatientData($connection, $controller, $patientId, $vacId, $famId);
    }

    if (!empty($_POST['date']) || !empty($_POST['time'])) {

        $name = $patientInfo[0]['first_name'];
        storePatientSchedule($connection, $controller, $patientId, 'schedules', $name);
    }

    header("Refresh:0");
}

if (isset($_GET['removeMethod'])) {

    removePatientData($connection, $controller, $_GET['removeMethod']);
}

$selectOptionsData = formatSelectedOptions($datas);

$formatSelectedOptionsMethod = formatSelectedOptionsMethod($patientData);

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
            <p><b>Patient Name:</b> <?= ucfirst($patientInfo[0]['first_name']) . " " . ucfirst($patientInfo[0]['last_name']) ?></p>
            <p><b>Appointment Type:</b> <span class="badge badge-info"><?= ucfirst($patientInfo[0]['appointment_type']) ?></span></p>

            <br>
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

                $render->createModal([
                    [
                    'label' => 'Date of Visit',
                    'id' => 'date_of_visit',
                    'name' => 'date_of_visit',
                    'type' => 'date',
                    'required' => false
                    ],
                    [
                    'label' => 'Medical Findings',
                    'id' => 'medical_findings',
                    'name' => 'medical_findings',
                    'type' => 'text',
                    'required' => false
                    ],
            ], $selectOptionsData);
            }
            ?>

            <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Date of  Visit</th>
                        <th>Medical Findings</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($patientData as  $index => $data) : ?>
                        <tr class="odd gradeX">
                            <td><?= $index + 1 ?></td>
                            <td><?= isset($data['date_of_visit']) ? convertMonth($data['date_of_visit']) : '' ?></td>
                            <td><?= isset($data['medical_findings']) ? $data['medical_findings'] : '' ?></td>
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
                        <th>Date of  Visit</th>
                        <th>Medical Findings</th>
                        <th>Method</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </tfoot>
            </table>
            <br /> <br />
            <h2>Patient Schedules</h2>
            <?php
            $render->createModal([
                [
                    'label' => 'Date',
                    'id' => 'date',
                    'name' => 'date',
                    'type' => 'date',
                    'required' => true
                ],
                [
                    'label' => 'Time',
                    'id' => 'time',
                    'name' => 'time',
                    'type' => 'time',
                    'required' => true
                ],
            ], $formatSelectedOptionsMethod);
            ?>
            <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($controller->getDataById($connection->conn, 'schedules', 'patient_id', $patientId) as $index => $schedule) : ?>
                        <tr class="odd gradeX">
                            <td><?= $index + 1 ?></td>
                            <td><?= $schedule['title'] ?? '?' ?></td>
                            <td><?= convertMonth($schedule['date']) ?></td>
                            <td>
                                <?= convertTime($schedule['time']) ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </tfoot>
            </table>
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