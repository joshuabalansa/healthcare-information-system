<?php
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';
require_once '../../class/Controllers.php';

session_start();
isAuthenticated();

$user_id = $_SESSION['user_id'];

$connection = new Connection();

$vacId = $_GET['vaccination'] ?? '';
$famId  = $_GET['family_planning'] ?? '';

$controller = new Controllers();
$sideBar  = new Sidebar($_SESSION['routes']);
$header   = new Header();

$patientData = [];

if (!empty($vacId)) {

    $patientData = $controller->getDataById($connection->conn, 'patient_vaccination_records', 'patient_id', $vacId);
}

if (!empty($famId)) {

    $patientData = $controller->getDataById($connection->conn, 'patient_family_planning_records', 'patient_id', $famId);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['id'];
    $status = $_POST['status'];

    if ($_POST['type'] == 'vaccination') {

        Controllers::update($connection->conn, 'patient_vaccination_records', 'id', $id, 'status', 'approved');
    }
    if ($_POST['type'] == 'family_planning') {

        Controllers::update($connection->conn, 'patient_family_planning_records', 'id', $id, 'status', 'approved');
    }
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/jquery-1.11.3.min.js"></script>

</head>

<body class="page-body  page-fade">

    <div class="page-container">

        <?php $sideBar->render(); ?>


        <div class="main-content">

            <?php include '../../includes/header.php'; ?>

            <hr />

            <br />
            <a href="index.php" class="btn btn-primary">Back</a>
            <h3>Patient Assessment</h3>
            <p>Examining patient records allows for comprehensive health evaluation.</p>
            <!-- <a href="#" class="btn btn-success">Mark This Patient as Completed</a> <br><br> -->
            <?php if (!empty($vacId)) : ?>
                <table class="table table-bordered datatable" id="table-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Vaccine</th>
                            <th>Age</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Temperature</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($patientData as $index => $assessment) :  ?>
                            <tr class="odd gradeX">
                                <td><?= $index + 1 ?></td>
                                <td><?= $assessment['vaccine'] ?></td>
                                <td><?= $assessment['age'] ?></td>
                                <td><?= $assessment['wt'] ?></td>
                                <td><?= $assessment['ht'] ?></td>
                                <td><?= $assessment['temp'] ?></td>
                                <td>
                                    <span class="badge badge-<?= $assessment['status'] == 'not approved' ? 'danger' : 'info' ?>">
                                        <?= $assessment['status'] ?>
                                    </span>
                                </td>
                                <td class="center">
                                    <button onclick="updateVaccinationAssessment(<?= $assessment['id'] ?>)" class="btn btn-sm btn-info btn-icon icon-left">
                                        Approve<i class="entypo-check"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Vaccine</th>
                            <th>Age</th>
                            <th>Weight</th>
                            <th>Height</th>
                            <th>Temperature</th>
                            <th>Status</th>99
                            <th>Action</th>
                        </tr>
                        </thead>
                    </tfoot>
                </table>
            <?php endif; ?>

            <?php if (!empty($famId)) : ?>
                <table class="table table-bordered datatable" id="table-1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Method</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($patientData as $index => $assessment) :  ?>
                            <tr class="odd gradeX">
                                <td><?= $index + 1 ?></td>
                                <td><?= $assessment['method'] ?></td>
                                <td>
                                    <span class="badge badge-<?= $assessment['status'] == 'not approved' ? 'danger' : 'info' ?>">
                                        <?= $assessment['status'] ?>
                                    </span>
                                </td>
                                <td class="center">
                                    <button onclick="updateFamilyPlanningAssessment(<?= $assessment['id'] ?>)" class="btn btn-sm btn-info btn-icon icon-left">
                                        Approve<i class="entypo-check"></i>
                                    </button>
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
            <?php endif; ?>
            <br />
        </div>
        <script>
            function updateVaccinationAssessment(id) {
                $.ajax({
                    url: '<?php echo $_SERVER["PHP_SELF"]; ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        status: 'approved',
                        type: 'vaccination'
                    },
                    success: function(response) {
                        alert('approved');
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        alert('Failed to update status');
                    }
                });
            }

            function updateFamilyPlanningAssessment(id) {
                $.ajax({
                    url: '<?php echo $_SERVER["PHP_SELF"]; ?>',
                    type: 'POST',
                    data: {
                        id: id,
                        status: 'approved',
                        type: 'family_planning'
                    },
                    success: function(response) {
                        alert('approved');
                        location.reload();
                    },
                    error: function(xhr, status, error) {
                        alert('Failed to update status');
                    }
                });
            }
        </script>
</body>

</html>