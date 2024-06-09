<?php
require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';
require_once '../../class/Controllers.php';

session_start();
isAuthenticated();

$user_id    = $_SESSION['user_id'];

$connection = new Connection();

$sideBar    = new Sidebar($_SESSION['routes']);
$header     = new Header();
$controller = new Controllers;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    storeVaccineData($connection, $controller);
}

if (isset($_GET['deactivate'])) {
    $id = $_GET['deactivate'];

    Controllers::update($connection->conn, 'users', 'id', $id, 'status', 'inactive');
}

if (isset($_GET['reactivate'])) {
    $id = $_GET['reactivate'];

    Controllers::update($connection->conn, 'users', 'id', $id, 'status', 'active');
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
    <title>Vaccine</title>
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

            <h3>User Management</h3>
            <button class="btn btn-sm btn-primary" style="margin-bottom: 10px;">New User</button>
            <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($controller->get($connection->conn, 'users') as $index => $user) :  ?>
                        <?php if ($user['role'] !== 1) : ?>
                            <tr class="odd gradeX">
                                <td><?= $index + 1 ?></td>
                                <td><?= htmlspecialchars($user['name']) ?></td>
                                <td><?= $user['role'] == 2 ? 'Patient' : 'Doctor' ?></td>
                                <td><span class="badge badge-<?= $user['status'] == 'active' ? 'success' : 'secondary' ?>"><?= $user['status'] ?></span></td>
                                <td class="center">
                                    <?php if ($user['status'] == 'active') : ?>
                                        <a href="#" onclick="confirmation(<?= $user['id'] ?>, 'deactivate')"><i class="entypo-cancel"></i> Deactivate</a>
                                    <?php else : ?>
                                        <a href="#" onclick="confirmation(<?= $user['id'] ?>, 'reactivate')"><i class="entypo-check"></i> Reactivate</a>
                                    <?php endif ?>
                                </td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                </tfoot>
            </table>
            <br />
        </div>

        <script src="../../js/alert.js"></script>
</body>

</html>