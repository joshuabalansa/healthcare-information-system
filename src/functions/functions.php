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

function setUserData($appointmentData, $username, $password)
{
    $data = [
        'appointment_id' => $appointmentData[0]['user_id'],
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

/**
 * Appointment and vaccination store function
 *
 * @param string $registrationType
 * @param object $connection
 * @param object $controller
 * @param object $form
 * @return void
 */
function appointmentRegistration($registrationType, $connection, $controller, $form, $uuid)
{
    if ($registrationType == 'vaccination') {

        $data = getFormData($form->vaccinationFields());

        $data['user_id'] = $uuid;

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

        $data['user_id'] = $uuid;

        $controller->store($connection->conn, 'family_planning', $data);

        $appointmentData = $controller->getDataById($connection->conn, 'family_planning', 'id', $connection->conn->lastInsertId());

        $appointmentFields = [
            'patient_id' => $appointmentData[0]['id'],
            'appointment_type' => $appointmentData[0]['appointment_type'],
        ];

        $controller->store($connection->conn, 'appointments', $appointmentFields);

        header('location: success.php');

        exit;
    }
}

/**
 * Send SMS notification
 *
 * @param array  $appointmentData
 * @param string $message
 * @return void
 */
function sendSms($appointmentData, $message)
{
    SMS::sendMessageNotification(
        '',
        $appointmentData[0]['phone_number'],
        $message,
        'SEMAPHORE',
        'https://semaphore.co/api/v4/messages'
    );
}


/**
 * Generates a string of random characters.
 *
 * @param int $length
 * @return string
 */
function getRandomChars($length = 6)
{
    $characters     = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $randomString   = '';
    $charLength     = strlen($characters);

    for ($i = 0; $i < $length; $i++) {

        $randomString .= $characters[rand(0, $charLength - 1)];
    }

    return $randomString;
}


function updateAppointment($appointmentData, $controller, $connection, $id)
{

    $username = setUsername($appointmentData);
    $password = getRandomChars();
    $message  = "Your appointment has been approved. you may login using the provided credentials to track your records \n \n Username: $username \n Password: $password";

    $controller->store($connection->conn, 'users', setUserData($appointmentData, $username, $password), 'index.php');


    sendSms($appointmentData, $message);

    Controllers::update($connection->conn, 'vaccinations', $id, 'status', 'approved', 'index.php');
}


function getCombinedAppointmentsData($connection)
{
    $sql = "SELECT 
                'vaccinations' AS source,
                user_id, 
                id,
                first_name,
                last_name,
                phone_number,
                appointment_date,
                appointment_time,
                appointment_type,
                status
            FROM 
                vaccinations

            UNION ALL

            SELECT 
                'family_planning' AS source,
                user_id, 
                id,
                first_name,
                last_name,
                phone_number,
                appointment_date,
                appointment_time,
                appointment_type,
                status
            FROM 
                family_planning;";

    $stmt = $connection->query($sql);

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}
