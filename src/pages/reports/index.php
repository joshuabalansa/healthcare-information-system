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

$vaccinationData = getSplineVaccinationData($connection->conn);
$familyPlanningData = getSplineFamilyPlanningData($connection->conn);
$totalData = getSplineFamilyPlanningDataCount($connection->conn);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="" />
    <title>Reports</title>
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

            <h3>Reports</h3> <br>
            <!-- <button class="btn btn-primary">Vaccination</button>
            <button class="btn btn-primary">Family Planning</button> -->
            <!-- <button class="btn btn-primary">Export</button> -->
            <div style="margin-top: 30px;" id="statisticData"></div>
            <br />
        </div>
        <script>
            var options = {
                series: [{
                        name: "Vaccination",
                        data: <?= $vaccinationData ?>
                    },
                    {
                        name: "Family Planning",
                        data: <?= $familyPlanningData ?>
                    }
                ],
                chart: {
                    height: 350,
                    type: 'line',
                    dropShadow: {
                        enabled: true,
                        color: '#000',
                        top: 18,
                        left: 7,
                        blur: 10,
                        opacity: 0.2
                    },
                    zoom: {
                        enabled: false
                    },
                    toolbar: {
                        show: false
                    }
                },
                colors: ['#77B6EA', '#545454'],
                dataLabels: {
                    enabled: true,
                },
                stroke: {
                    curve: 'smooth'
                },
                title: {
                    text: 'Patients',
                    align: 'left'
                },
                grid: {
                    borderColor: '#e7e7e7',
                    row: {
                        colors: ['#f3f3f3', 'transparent'],
                        opacity: 0.5
                    },
                },
                markers: {
                    size: 1
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                    title: {
                        text: 'Month'
                    }
                },
                // yaxis: {
                //     title: {
                //         text: 'Temperature'
                //     },
                //     min: 5,
                //     max: 40
                // },
                legend: {
                    position: 'top',
                    horizontalAlign: 'right',
                    floating: true,
                    offsetY: -25,
                    offsetX: -5
                }
            };

            var lineChart = new ApexCharts(document.querySelector("#lineChart"), options);
            lineChart.render();

            // Statistic chart
            var options = {
                series: [{
                        name: "Vaccination",
                        data: <?= $vaccinationData ?>
                    },
                    {
                        name: "Family Planning",
                        data: <?= $familyPlanningData ?>
                    },
                    {
                        name: 'Total',
                        data: <?= $totalData ?>
                    }
                ],
                chart: {
                    height: 350,
                    type: 'line',
                    zoom: {
                        enabled: false
                    },
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    width: [5, 7, 5],
                    curve: 'straight',
                    dashArray: [0, 8, 5]
                },
                title: {
                    text: 'Statistics',
                    align: 'left'
                },
                legend: {
                    tooltipHoverFormatter: function(val, opts) {
                        return val + ' - <strong>' + opts.w.globals.series[opts.seriesIndex][opts.dataPointIndex] + '</strong>'
                    }
                },
                markers: {
                    size: 0,
                    hover: {
                        sizeOffset: 6
                    }
                },
                xaxis: {
                    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec'],
                },
                tooltip: {
                    y: [{
                            title: {
                                formatter: function(val) {
                                    return val
                                }
                            }
                        },
                        {
                            title: {
                                formatter: function(val) {
                                    return val
                                }
                            }
                        },
                        {
                            title: {
                                formatter: function(val) {
                                    return val;
                                }
                            }
                        }
                    ]
                },
                grid: {
                    borderColor: '#f1f1f1',
                }
            };

            var statisticData = new ApexCharts(document.querySelector("#statisticData"), options);
            statisticData.render();
        </script>
</body>

</html>