<?php


/**
 * @param mixed $data
 * @return void
 */
function dd($data)
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

/**
 * Update Appointment function
 *
 * @param array $appointmentData
 * @param string $appointment_type
 * @param object $controller
 * @param object $connection
 * @param string $id
 * @return void
 */
function updateAppointment($appointmentData, $appointment_type, $controller, $connection, $id)
{

    $username = setUsername($appointmentData);
    $password = getRandomChars();
    $message  = "Your appointment has been approved. you may login using the provided credentials to track your records \n \n Username: $username \n Password: $password";

    $controller->store($connection->conn, 'users', setUserData($appointmentData, $username, $password), 'index.php');

    sendSms($appointmentData, $message);

    Controllers::update($connection->conn, $appointment_type, 'user_id', $id, 'status', 'approved');

    header('location: index.php');
}


/**
 * Get combined data from two tables selecting all fields dynamically.
 *
 * @param object $connection
 * @param string $table1 
 * @param string $table2 
 * @return array 
 */
function joinTable($connection, $table1, $table2)
{
    function getTableColumns($connection, $table)
    {
        $stmt = $connection->query("DESCRIBE $table");
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    $fields1 = getTableColumns($connection, $table1);
    $fields2 = getTableColumns($connection, $table2);

    $allFields = array_unique(array_merge($fields1, $fields2));

    $fields1List = implode(', ', array_map(function ($field) use ($table1, $fields1) {
        return in_array($field, $fields1) ? "$table1.$field" : "NULL AS $field";
    }, $allFields));

    $fields2List = implode(', ', array_map(function ($field) use ($table2, $fields2) {
        return in_array($field, $fields2) ? "$table2.$field" : "NULL AS $field";
    }, $allFields));

    $sql = "SELECT 
                '$table1' AS source,
                $fields1List
            FROM
                $table1

            UNION ALL

            SELECT 
                '$table2' AS source,
                $fields2List
            FROM 
                $table2";

    $stmt = $connection->query($sql);

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $data;
}

/**
 * Get combined appointments data from two tables with specified fields and a where clause
 *
 * @param object $connection
 * @param string $table1
 * @param string $table2
 * @param array $fields1
 * @param array $fields2 
 * @param string $whereClause 
 * @return array 
 */
function joinTableWhereClause($connection, $table1, $table2, $fields1, $fields2, $whereClause = '')
{
    try {
        $fields1List = implode(', ', array_map(fn ($field) => "$table1.$field", $fields1));
        $fields2List = implode(', ', array_map(fn ($field) => "$table2.$field", $fields2));

        $sql = "SELECT 
                    '$table1' AS source,
                    $fields1List
                FROM
                    $table1
                $whereClause

                UNION ALL

                SELECT 
                    '$table2' AS source,
                    $fields2List
                FROM 
                    $table2
                $whereClause";

        $stmt = $connection->query($sql);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $data;
    } catch (\Exception $e) {

        return [];
    }
}

/**
 * Check and Update Appointment function
 *
 * @param array  $data
 * @param object $controller
 * @param object $connection
 * @param string $id
 * @return void
 */
function checkAndUpdateAppointment($data, $controller, $connection, $id)
{
    $appointmentType = $data[0]['appointment_type'];

    if ($appointmentType === 'vaccination') {
        $appointmentType = 'vaccinations';
    }

    updateAppointment($data, $appointmentType, $controller, $connection, $id);
}


/**
 * Check if user is authenticated
 *
 * @return void
 */
function isAuthenticated()
{

    if (!isset($_SESSION['user_id'], $_SESSION['username'])) {

        die("<center>401 Authorization Required</center>");
    }
}
