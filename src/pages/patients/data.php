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
}

if (!empty($famId)) {

    $patientData = $controller->getDataById($connection->conn, 'patient_family_planning_records', 'patient_id', $famId);
    $datas =  $controller->get($connection->conn, 'family_planning_methods');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $patientId = !empty($vacId) ? $vacId : (!empty($famId) ? $famId : '');

    if (!empty($vacId)) {

        storePatientRecords($connection, $controller, $patientId, 'patient_vaccination_records');
    }

    if (!empty($famId)) {

        storePatientRecords($connection, $controller, $patientId, 'patient_family_planning_records');
    }

    header('Refresh:0');
}

$selectOptions = [];

foreach ($datas as $data) {

    $selectOptions[] = [
        'label' => !empty($data['vaccine']) ? $data['vaccine'] : (!empty($data['method_name']) ? $data['method_name'] : []),
        'value' => !empty($data['vaccine']) ? $data['vaccine'] : (!empty($data['method_name']) ? $data['method_name'] : [])
    ];
}

$selectOptionsData = [
    'label' => 'Select ' . ucfirst(getPatientDataTypeDB()),
    'id' => 'select_option',
    'name' => getPatientDataTypeDB(),
    'required' => true,
    'options' => [
        $selectOptions
    ]
];
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

        <?php $sideBar->render() ?>


        <div class="main-content">

            <?php include '../../includes/header.php'; ?>

            <hr />

            <br />

            <h3>Patient Data</h3>
            <p>This shows the patient Data</p>
            <!-- <p>Appointment Schedule: june, 20, 2021 wed 2:20PM</p> -->
            <div style="display: flex; justify-content: space-between; align-items: start;">

                <a href="index.php" class="btn btn-sm btn-primary">Back to patient</a>
                    <?php
                    if (!empty($vacId)) {

                        $render->createModal([
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
                                'required' => true
                            ],
                        ], $selectOptionsData);
                    }

                    if (!empty($famId)) {

                        $render->createModal([], $selectOptionsData);
                    }
                    ?>
                <a href="#" class="btn btn-primary" title="Patient Schedules"><i class="entypo-clock"></i>Create Schedule</a>
            </div>

            <table class="table table-hover">
                <tbody>
                    <?php foreach ($patientData as $data) : ?>
                        <tr>
                            <th scope="row">
                                <?= strtoupper(isset($data['vaccine']) ? $data['vaccine'] : $data['method']) ?>
                            </th>
                            <td>

                                <span class="badge badge-<?= $data['status'] == 'not approved' ? 'danger' : 'info' ?>">
                                    <?= ucwords($data['status']) ?>
                                </span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-sm btn-info">Edit</a>
                                <a href="#">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
            <br />
        </div>
</body>

</html>