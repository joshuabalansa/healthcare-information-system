<?php
session_start();
require '../../vendor/autoload.php';
require_once '../class/Controllers.php';
require_once '../config/Connection.php';
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

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $fileTmpPath = $_FILES['image']['tmp_name'];
        $fileName = $_FILES['image']['name'];
        $fileSize = $_FILES['image']['size'];
        $fileType = $_FILES['image']['type'];
        $fileNameCmps = explode(".", $fileName);
        $fileExtension = strtolower(end($fileNameCmps));

        $allowedfileExtensions = ['jpg', 'gif', 'png', 'jpeg'];

        if (in_array($fileExtension, $allowedfileExtensions)) {

            $newFileName = md5(time() . $fileName) . '.' . $fileExtension;

            $uploadFileDir = '../assets/uploads/';

            if (!is_dir($uploadFileDir)) {

                mkdir($uploadFileDir, 0777, true);
            }

            $dest_path = $uploadFileDir . $newFileName;

            move_uploaded_file($fileTmpPath, $dest_path);
        }
    }

    appointmentRegistration($registrationType, $connection, $controller, $form, $uuid->toString(), $newFileName);

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

                <h1 style="margin-bottom: 1em; text-align: center;">
                    <b><?= $appointmentType == 'vaccination' ? 'Register for Vaccination' : 'Register for Family Planning' ?></b>
                </h1>
                <div class="card-body">
                    <form method="POST" action="registration.php?registration=<?= $appointmentType ?>" enctype="multipart/form-data">
                        <?php
                        $fields = ($appointmentType == 'vaccination') ? $form->vaccinationFields() : $form->familyPlanningFields();

                        $selectField = [
                            'Province'  => 'provincesSelect',
                            'City'      => 'citiesSelect',
                            'Barangay'  => 'barangaysSelect'
                        ];

                        foreach ($fields as $field => [$label, $type, $isRequired, $options]) :
                        ?>

                            <div class="form-group row">
                                <label for="<?= $field ?>" class="col-md-4 col-form-label text-md-right">
                                    <?= $label == 'Address' ? 'Street, Purok or Subdvision' : $label ?>:
                                    <span style="color: #ff0000">
                                        <?= !empty($isRequired) ? '*' : '' ?>
                                    </span>
                                </label>

                                <div class="col-md-6 mb-3">
                                    <input id="<?= $field ?>" <?=$options?> type="<?= $type ?>" onkeypress="<?= $type == 'number' ? 'return isNumberKey(event)' : '' ?>" class="form-control" name="<?= $field ?>" placeholder=" <?= $label ?>" <?= $isRequired ?>>
                                </div>
                            </div>

                            <?php if ($field == 'address') : ?>

                                <?php foreach ($selectField as $label => $id) : ?>
                                    <div class="form-group row">
                                        <label for="<?= $label ?> " class="col-md-4 col-form-label text-md-right"><?= $label ?>:</label>

                                        <div class="col-md-6 mb-3">
                                            <select class="form-control" name="<?= $id ?>" id="<?= $id ?>" required>
                                                <option value="">-- Select a <?= $label ?> --</option>
                                            </select>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <label for="file">
                            Attach a Verification Document (e.g., National ID, Health Card):
                            <span style="color: #ff0000">*</span>
                        </label>
                        <input type="file" name="image" id="file" accept="image/*" required>

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
    <script>
        function isNumberKey(evt) {
            var charCode = evt.key;

            if (!charCode.match(/[0-9]/)) {

                return false;
            }

            return true;
        }
    </script>

    <!-- fetch address api -->
    <script src="../js/fetchAddress.js"></script>
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