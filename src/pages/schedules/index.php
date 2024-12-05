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

$role       = $_SESSION['role'];
$patientId  = $_SESSION['patient_id'];
$schedules  = fetchPatientSchedules($connection->conn, $controller, $role, $patientId);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <title>Schedules</title>
    <link rel="stylesheet" href="../../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="../../assets/css/font-icons/entypo/css/entypo.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/neon-core.css">
    <link rel="stylesheet" href="../../assets/css/neon-theme.css">
    <link rel="stylesheet" href="../../assets/css/neon-forms.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <script src="../../assets/js/jquery-1.11.3.min.js"></script>
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .modal.active {
            display: flex;
        }
    </style>
</head>

<body class="page-body  page-fade">

    <body>


        <div class="page-container" x-data="{ showModal: false }">


            <?php $sideBar->render(); ?>

            <div class="main-content">

                <?php include '../../includes/header.php'; ?>
                <hr />

                <br />

                <h3>Schedules</h3>
                <p>Shows your schedules</p>

                <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        var calendarEl = document.getElementById('calendar');
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            initialView: 'dayGridMonth',
                            events: <?= $schedules ?>,
                            eventClick: function(info) {
                                info.jsEvent.preventDefault();


                                var start = new Date(info.event.start);
                                var hours = start.getHours();
                                var minutes = start.getMinutes();
                                var ampm = hours >= 12 ? 'PM' : 'AM';
                                hours = hours % 12;
                                hours = hours ? hours : 12;
                                minutes = minutes < 10 ? '0' + minutes : minutes;
                                var startTime = hours + ':' + minutes + ' ' + ampm;

                                alert(
                                    'Type: ' + info.event.title + '\n' +
                                    'Time: ' + startTime + '\n' +
                                    'Patient Name: ' + info.event.extendedProps.name);
                            }
                        });
                        calendar.render();
                    });
                </script>


                <div id='calendar'></div>
            </div>

    </body>

</html>