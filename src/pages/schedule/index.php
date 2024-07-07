<?php
require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../class/Authorization.php';
require_once '../../class/Sms.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';
require_once '../../components/modalComponent.php';
require_once '../../class/Controllers.php';

session_start();
isAuthenticated();

$user_id    = $_SESSION['user_id'];

$connection = new Connection();

$sideBar    = new Sidebar($_SESSION['routes']);
$header     = new Header();
$controller = new Controllers;

$render = new ModalComponent('New Method', 'Add Method', 'Add a family planning method: ex IUD');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    storeMethod($connection, $controller);
}

if (isset($_GET['remove'])) {
    $id = $_GET['remove'];

    Controllers::delete($connection->conn, 'family_planning_methods', $id);

    header('location: index.php');
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
    <title>Methods Management</title>
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

            <h3>Schedules</h3>
            <p>Shows your schedules</p>


            <!-- <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Method</th>
                        <th>Info</th>
                    </tr>
                </thead>
                <tbody>
                  
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Method</th>
                        <th>Info</th>
                    </tr>
                    </thead>
                </tfoot>
            </table> -->
            <br />
        </div>

</body>

</html>