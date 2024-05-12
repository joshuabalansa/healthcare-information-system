<?php

/**
 * @param mixed $data
 * @return void
 */
function die_dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}


/**
 * @param mixed $data
 * @return void
 */
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

/**
 * Get data from form
 *
 * @param array $fields
 * @return array $data
 */
function getFormData($fields)
{

    $data = [];

    foreach ($fields as $field => [$label, $type]) {

        if (isset($_POST[$field])) {

            $data[$field] = htmlspecialchars($_POST[$field]);
        } else {

            $data[$field] = '';
        }
    }
    return $data;
}

function userData($appointmentData, $username, $password)
{
    $data = [
        'name' => $appointmentData[0]['first_name'],
        'username' => $username,
        'role' => 2,
        'password' => sha1($password),
        'status' => 'active'
    ];

    return $data;
}

function setUsername($appointmentData)
{
    $username = strtoupper(substr($appointmentData[0]['last_name'], 0, 1)     .
        substr($appointmentData[0]['first_name'], 0, 1)     .
        substr($appointmentData[0]['middle_name'], 0, 1) .
        str_replace('-', '', $appointmentData[0]['birth_date']));

    return $username;
}


function appointmentRegistration($registrationType, $connection, $controller, $form)
{
    if ($registrationType == 'vaccination') {

        $data = getFormData($form->vaccinationFields());

        $controller->store($connection->conn, 'vaccinations', $data);

        $appointmentData = $controller->getDataById($connection->conn, 'vaccinations', 'id', $connection->conn->lastInsertId());

        $appointmentFields =  [
            'patient_id' => $appointmentData[0]['id'],
            'appointment_type' => $appointmentData[0]['appointment_type'],
        ];

        $controller->store($connection->conn, 'appointments', $appointmentFields);

        header('location: success.php');

        exit;
    }

    if ($registrationType == 'family_planning') {

        $data = getFormData($form->familyPlanningFields());

        $controller->store($connection->conn, 'family_planning', $data);

        $appointmentData = $controller->getDataById($connection->conn, 'family_planning', 'id', $connection->conn->lastInsertId());

        $appointmentFields =  [
            'patient_id' => $appointmentData[0]['id'],
            'appointment_type' => $appointmentData[0]['appointment_type'],
        ];

        $controller->store($connection->conn, 'appointments', $appointmentFields);

        header('location: success.php');

        exit;
    }
}
