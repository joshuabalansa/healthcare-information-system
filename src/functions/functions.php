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
        'user_id' => $appointmentData[0]['user_id'],
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

        $additionalAddress = getRegistrationAdditionalAddress();

        $data = array_merge($data, $additionalAddress);

        $data['user_id'] = $uuid;

        $controller->store($connection->conn, 'vaccinations', $data);

        $appointmentData = $controller->getDataById($connection->conn, 'vaccinations', 'id', $connection->conn->lastInsertId());

        // $appointmentFields =  [
        //     'patient_id' => $appointmentData[0]['user_id'],
        //     'appointment_type' => $appointmentData[0]['appointment_type'],
        // ];

        // $controller->store($connection->conn, 'appointments', $appointmentFields);

        storeAppointments($appointmentData, $connection, $controller);
    }

    if ($registrationType == 'family_planning') {

        $data = getFormData($form->familyPlanningFields());

        $additionalAddress = getRegistrationAdditionalAddress();

        $data = array_merge($data, $additionalAddress);

        $data['user_id'] = $uuid;

        $controller->store($connection->conn, 'family_planning', $data);

        $appointmentData = $controller->getDataById($connection->conn, 'family_planning', 'id', $connection->conn->lastInsertId());

        storeAppointments($appointmentData, $connection, $controller);
    }

    header('location: success.php');

    exit;
}

/**
 * get additional address for registration
 *
 * @return array
 */
function getRegistrationAdditionalAddress()
{
    return [
        'province'  =>  $_POST['provincesSelect']   ?? '',
        'city'      =>  $_POST['citiesSelect']      ?? '',
        'brgy'      =>  $_POST['barangaysSelect']   ?? ''
    ];
}

/**
 * store appointments function
 *
 * @param array $appointmentData
 * @param object $connection
 * @param object $controller
 * @return void
 */
function storeAppointments($appointmentData, $connection, $controller)
{
    $appointmentFields = [
        'patient_id' => $appointmentData[0]['user_id'],
        'appointment_type' => $appointmentData[0]['appointment_type'],
    ];

    $controller->store($connection->conn, 'appointments', $appointmentFields);
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

        $html = "<div style='position: absolute; top: 50% ; left: 50%; transform: translate(-50%, -50%); text-align: center;'>
                    <h1>Forbidden</h1
                    <p>You don't have permission to access this page.</p>
                </div>";

        die($html);
    }
}

function sanitizeInput($data)
{
    return htmlspecialchars(strip_tags(trim($data)));
}

/**
 * @param object $connection
 * @param object $controller
 * @return void
 */
function storeVaccineData($connection, $controller)
{

    $vaccine_name   = sanitizeInput($_POST['vaccine_name']);
    $abbreviation   = sanitizeInput($_POST['abbreviation']);
    $manufacturer   = sanitizeInput($_POST['manufacturer']);
    $doses          = sanitizeInput($_POST['doses']);
    $approved_ages  = sanitizeInput($_POST['approved_ages']);
    $description    = sanitizeInput($_POST['description']);

    $vaccineData = [
        'vaccine' => $vaccine_name,
        'abbreviation' => $abbreviation,
        'manufacturer' => $manufacturer,
        'doses' => $doses,
        'approved_ages' => $approved_ages,
        'description' => $description,
    ];

    $controller->store($connection->conn, 'vaccines', $vaccineData);

    $_POST = [];

    header('location: index.php');
}

/**
 * Get area chart data function
 *
 * @param object $conn
 * @return object
 */
function getMonthlyGraphData($conn)
{

    $sql = "SELECT MONTH(created_at) as month, COUNT(*) as count
            FROM appointments
            WHERE YEAR(created_at) = YEAR(CURDATE()) AND status = 'approved'
            GROUP BY MONTH(created_at)";

    $stmt = $conn->query($sql);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $monthlyData = array_fill(0, 12, 0);

    foreach ($data as $row) {
        $month = intval($row['month']) - 1;
        $count = intval($row['count']);
        $monthlyData[$month] = $count;
    }


    return json_encode($monthlyData);
}

function getSplineVaccinationData($conn)
{
    $sql = "SELECT
                DATE_FORMAT(created_at, '%Y-%m') as month,
                COUNT(*) as count
            FROM
                appointments
            WHERE
                YEAR(created_at) = YEAR(CURDATE())
                AND appointment_type = 'vaccination'
            GROUP BY
                DATE_FORMAT(created_at, '%Y-%m')
            ORDER BY
                month;
            ";

    $stmt = $conn->query($sql);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $vaccinationData = array_fill(0, 12, 0);

    foreach ($data as $row) {
        $month = intval(date('m', strtotime($row['month']))) - 1;
        $count = intval($row['count']);
        $vaccinationData[$month] = $count;
    }

    return json_encode($vaccinationData);
}

function getSplineFamilyPlanningData($conn)
{
    $sql = "SELECT
                DATE_FORMAT(created_at, '%Y-%m') as month,
                COUNT(*) as count
            FROM
                appointments
            WHERE
                YEAR(created_at) = YEAR(CURDATE())
                AND appointment_type = 'family_planning'
            GROUP BY
                DATE_FORMAT(created_at, '%Y-%m')
            ORDER BY
                month;
            ";

    $stmt = $conn->query($sql);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $familyPlanningData = array_fill(0, 12, 0);

    foreach ($data as $row) {
        $month = intval(date('m', strtotime($row['month']))) - 1;
        $count = intval($row['count']);
        $familyPlanningData[$month] = $count;
    }

    return json_encode($familyPlanningData);
}

/**
 * Get Spline Chart Data function
 *
 * @param object $conn
 */
function getSplineFamilyPlanningDataCount($conn)
{
    $sql = "SELECT
                DATE_FORMAT(created_at, '%Y-%m') as month,
                COUNT(*) as count
            FROM
                appointments
            WHERE
                YEAR(created_at) = YEAR(CURDATE())
            GROUP BY
                DATE_FORMAT(created_at, '%Y-%m')
            ORDER BY
                month;
            ";

    $stmt = $conn->query($sql);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $familyPlanningData = array_fill(0, 12, 0);

    foreach ($data as $row) {
        $month = intval(date('m', strtotime($row['month']))) - 1;
        $count = intval($row['count']);
        $familyPlanningData[$month] = $count;
    }

    return json_encode($familyPlanningData);
}


/**
 * @param object $connection
 * @param object $controller
 * @return void
 */
function storeMethod($connection, $controller)
{

    $method_name   = sanitizeInput($_POST['method_name']);

    $vaccineData = [
        'method_name' => $method_name,
    ];

    $controller->store($connection->conn, 'family_planning_methods', $vaccineData);

    $_POST = [];

    header('location: index.php');
}

function storeUsers($connection, $controller)
{

    $name   = sanitizeInput($_POST['name']);
    $username   = sanitizeInput($_POST['username']);
    $password         = sanitizeInput(sha1($_POST['password']));

    $userData = [
        'user_id' => null,
        'name' => $name,
        'username' => $username,
        'password' => $password,
        'role' => 4
    ];

    $controller->store($connection->conn, 'users', $userData);

    $_POST = [];

    header('location: index.php');
}

/**
 * store patient records function
 *
 * @param object $connection
 * @param object $controller
 * @param string $patientId
 * @param string $table
 * @return void
 */
function storePatientRecords($connection, $controller, $patientId, $table)
{
    $_POST['patient_id'] = $patientId;

    $controller->store($connection->conn, $table, $_POST);
}
