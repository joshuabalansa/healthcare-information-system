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

function getRole($role)
{

    switch ($role) {
        case 0:
            $role = 'System Admin';
            break;
        case 1:
            $role = 'Healthcare Admin';
            break;
        case 2:
            $role = 'Vaccination User';
            break;
        case 3:
            $role = 'Family Planning User';
            break;
        case 4:
            $role = 'Doctor / Nurse';
            break;
    }

    return $role;
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

            <h3>Login Logs Management</h3>

            <table class="table table-bordered datatable mt-5" id="table-1">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($controller->get($connection->conn, 'logs') as $index => $log) :  ?>
                        <tr class="odd gradeX">
                            <td><?= $index + 1 ?></td>
                            <td><?= $log['name'] ?></td>
                            <td><?= getRole($log['role']) ?></td>
                            <td>
                                <?php
                                $originalTimeStamp = $log['timestamp'];

                                $timestamp = new DateTime($originalTimeStamp);
                                $formattedDatetime = $timestamp->format('F j, Y g:iA');

                                echo $formattedDatetime ?? $formattedDatetime;
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Date</th>
                    </tr>
                    </thead>
                </tfoot>
            </table>
            <br />
        </div>

        <script src="../../js/alert.js"></script>
</body>

</html>