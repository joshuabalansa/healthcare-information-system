<?php
session_start();
require '../../vendor/autoload.php';
require_once '../class/Controllers.php';
require_once '../config/connection.php';
require_once '../config/Forms.php';
include     '../functions/functions.php';

use Ramsey\Uuid\Uuid;

$appointmentType = $_GET['appointment'] ?? '';

$form = new Forms;
$uuid = Uuid::uuid4();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $connection = new Connection();
    $controller = new Controllers();

    $registrationType = $_GET['registration'] ?? '';

    appointmentRegistration($registrationType, $connection, $controller, $form, $uuid->toString());
}
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
        <div class="row" style="display: flex; justify-content:center">
            <div class="col-md-8">

                <h1 style="margin-bottom: 1em;"><?= $appointmentType == 'vaccination' ? 'Register for Vaccination' : 'Register for Family Planning' ?></h1>
                <div class="card-body">
                    <form method="POST" action="registration.php?registration=<?= $appointmentType ?>">
                        <?php
                        $fields = ($appointmentType == 'vaccination') ? $form->vaccinationFields() : $form->familyPlanningFields();

                        foreach ($fields as $field => [$label, $type, $isRequired]) :
                        ?>
                            <div class="form-group row">
                                <label for="<?= $field ?>" class="col-md-4 col-form-label text-md-right"><?= $label ?>:</label>

                                <div class="col-md-6 mb-3">
                                    <input id="<?= $field ?>" type="<?= $type ?>" class="form-control" name="<?= $field ?>" placeholder="Enter <?= $label ?>" <?= $isRequired ?>>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="float: right; margin-top: 20px;">
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


    <!-- JavaScripts initializations and stuff -->
    <script src="../assets/js/neon-custom.js"></script>


    <!-- Demo Settings -->
    <script src="../assets/js/neon-demo.js"></script>
</body>

</html>