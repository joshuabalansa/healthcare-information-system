<?php

session_start();

require_once '../../class/Controllers.php';
require_once '../../config/Connection.php';
require_once '../../functions/functions.php';
require_once '../../components/SideBar.php';

isAuthenticated();

$sideBar = new SideBar($_SESSION['routes']);
$vacId = $_GET['vaccination'] ?? '';
$famId = $_GET['family_planning'] ?? '';

$controller = new Controllers();
$connection = new Connection();


$vacData = $controller->getDataById($connection->conn, 'vaccinations', 'user_id', $vacId);
$famData = $controller->getDataById($connection->conn, 'family_planning', 'user_id', $famId);

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

            <h3>All Information</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col"><a href="index.php" class="btn btn-primary">Back</a></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($vacData ? $vacData[0] : $famData[0] as $field => $value) : ?>
                        <?php if ($field !== 'id' && $field !== 'user_id') : ?>
                            <tr>
                                <th scope="row"><?= ucwords(str_replace('_', ' ', $field)) ?>:</th>
                                <td><?= $value ?></td>
                            </tr>
                        <?php endif ?>
                    <?php endforeach ?>
                </tbody>
            </table>

            <br />
        </div>
</body>

</html>