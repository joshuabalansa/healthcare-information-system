<?php
require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';
require_once '../../components/Header.php';

session_start();
isAuthenticated();

$user_id    = $_SESSION['user_id'];
$connection = new Connection();
$sideBar    = new Sidebar($_SESSION['routes']);
$header     = new Header();
$controller = new Controllers;

$user = $controller->getDataById($connection->conn, 'users', 'id', $user_id);

if (isset($_GET['update'])) {

    if (!empty($_POST['username'])) {
        Controllers::update($connection->conn, 'users', 'id', $user_id, 'username', $_POST['username']);
    }

    if (!empty($_POST['password'])) {
        Controllers::update($connection->conn, 'users', 'id', $user_id, 'password', sha1($_POST['username']));
    }

    $_SESSION['notify'] = "SAVED";

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
    <title>Profile</title>
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

            <h3>Profile</h3> <br>
            <form action="index.php?update=<?= $user[0]['id'] ?>" method="post" style="width: 40rem;">
                <input type="text" value="<?= $user[0]['username'] ?>" placeholder="Username" class="form-control mb-5" name="username" required> <br>
                <input type="password" value="" placeholder="Password" class="form-control" name="password"> <br>
                <button type="submit" class="btn btn-primary">Update Information</button> &nbsp;<?= $_SESSION['notify'] . ' - ' .  date('Y-m-d H:i:s') ?? '' ?>
            </form>

            <br />
        </div>

</body>

</html>