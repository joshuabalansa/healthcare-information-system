<?php
require_once('../functions/Controllers.php');

$controller = new Controllers();


$fields = [
    'first_name'        => ['First Name', 'text'],
    'middle_name'       => ['Middle Name', 'text'],
    'last_name'         => ['Last Name', 'text'],
    'birth_date'        => ['Birth Date', 'date'],
    'body_weight'       => ['Body Weight', 'text'],
    'body_length'       => ['Body Length', 'text'],
    'address'           => ['Address', 'text'],
    'gravida'           => ['Gravida', 'text'],
    'para'              => ['Para', 'text'],
    'abortion'          => ['Abortion', 'text'],
    'live_birth'        => ['Live Birth', 'text'],
    'death'             => ['Death', 'text'],
    'philhealth'        => ['Philhealth Number', 'text'],
    '4ps_number'        => ['4Ps Number', 'text'],
    'mother_maiden_name' => ['Mother Maiden Name', 'text'],
    'mother_birth_date' => ['Mother Birth Date', 'date'],
    'mother_age'        => ['Mother Age', 'text'],
    'mother_occupation' => ['Mother Occupation', 'text'],
    'father_name'       => ['Father Name', 'text'],
    'father_birth_date' => ['Father Birth Date', 'date'],
    'father_age'        => ['Father Age', 'text'],
    'father_occupation' => ['Father Occupation', 'text'],
    'phone_number'      => ['Phone Number', 'number'],
    'appointment_time'  => ['Appointment Time', 'time'],
    'appointment_date'  => ['Appointment Date', 'date'],
];




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>

    <link rel="stylesheet" href="../assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
    <link rel="stylesheet" href="../assets/css/font-icons/entypo/css/entypo.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/neon-core.css">
    <link rel="stylesheet" href="../assets/css/neon-theme.css">
    <link rel="stylesheet" href="../assets/css/neon-forms.css">
    <link rel="stylesheet" href="../assets/css/custom.css">

    <script src="assets/js/jquery-1.11.3.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row flex justify-content-center w-full">
            <div class="col-md-8">
                <h1 class="card-header">Vaccination and Family Planning Online Appointment</h1>
                <div class="card-body">
                    <form method="POST" action="appointment-registration">

                        <?php foreach ($fields as $field => [$label, $type]) : ?>
                            <div class="form-group row">
                                <label for="<?= $field ?>" class="col-md-4 col-form-label text-md-right"><?= $label ?>:</label>

                                <div class="col-md-6 mb-3">
                                    <input id="<?= $field ?>" type="<?= $type ?>" class="form-control" name="<?= $field ?>" value="" placeholder="Enter <?= $label ?>">
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Register an Appointment
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom scripts (common) -->
    <script src="../assets/js/gsap/TweenMax.min.js"></script>
    <script src="../assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <!-- <script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>
	<script src="assets/js/jquery.validate.min.js"></script>
	<script src="assets/js/neon-login.js"></script> -->


    <!-- JavaScripts initializations and stuff -->
    <script src="../assets/js/neon-custom.js"></script>


    <!-- Demo Settings -->
    <script src="../assets/js/neon-demo.js"></script>
</body>

</html>