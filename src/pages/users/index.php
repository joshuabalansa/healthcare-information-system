<?php
require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../class/Controllers.php';
require_once '../../components/modalComponent.php';

session_start();
isAuthenticated();

$user_id    = $_SESSION['user_id'];

$connection = new Connection();

$sideBar    = new Sidebar($_SESSION['routes']);
$controller = new Controllers;

$render = new ModalComponent('New User', 'New User', 'Add a user for head Doctor or Nurse.');


if (isset($_GET['deactivate'])) {
    $id = $_GET['deactivate'];

    Controllers::update($connection->conn, 'users', 'id', $id, 'status', 'inactive');
}

if (isset($_GET['reactivate'])) {
    $id = $_GET['reactivate'];

    Controllers::update($connection->conn, 'users', 'id', $id, 'status', 'active');
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    storeUsers($connection, $controller);
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

            <h3>Users Management</h3>
            <?php $render->createModal([
                [
                    'label' => 'Name',
                    'id'    => 'name',
                    'name' => 'name',
                    'type' => 'text',
                    'required' => true
                ],
                [
                    'label' => 'Username or Email',
                    'id'    => 'username',
                    'name' => 'username',
                    'type' => 'text',
                    'required' => true
                ],
                [
                    'label' => 'Password',
                    'id'    => 'password',
                    'name' => 'password',
                    'type' => 'password',
                    'required' => true
                ],
            ], [
                'label' => 'Select Option',
                'id' => 'select_option',
                'name' => 'userSelect',
                'required' => true,
                'options' => [
                    [
                        'label' => 'Healthcare Volunteers',
                        'value' =>  1
                    ],
                    [
                        'label' => 'Doctor or Nurse',
                        'value' =>  4
                    ]
                ]
            ]) ?>
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
                        <?php if ($user['role'] !== 0) : ?>
                            <tr class="odd gradeX">
                                <td><?= $index + 1 ?></td>
                                <td><?= $user['name'] ?></td>
                                <td><?= $user['role'] == 2 ? 'Patient' : 'Doctor' ?></td>
                                <td><span class="badge badge-<?= $user['status'] == 'active' ? 'success' : 'secondary' ?>"><?= $user['status'] ?></span></td>
                                <td class="center">
                                    <?php if ($user['status'] == 'active') : ?>
                                        <a class="btn btn-sm btn-danger" href="#" onclick="confirmation(<?= $user['id'] ?>, 'deactivate')"><i class="entypo-cancel"></i> Deactivate</a>
                                    <?php else : ?>
                                        <a class="btn btn-sm btn-info" href="#" onclick="confirmation(<?= $user['id'] ?>, 'reactivate')"><i class="entypo-check"></i> Reactivate</a>
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