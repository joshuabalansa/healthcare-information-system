<?php
require '../config/Connection.php';

class Helpers
{

    /**
     * validate user session
     *
     * @param int $sessionId
     * @return void
     */
    public function validateUserSession($sessionId)
    {
        if (!$sessionId) {

            header('location: ../index');
        }
    }

    /**
     * get users permissions
     *
     * @return array $permission
     */
    public function getUsersPermission($role) {

        $permissions = [
            1 => ['Appointments' => 'appointments', 'Patients' => 'patients', 'Vaccine Management' => 'vaccination', 'Reports' => 'reports', 'Users' => 'users'],
            2 => ['General' => 'general', 'Schedules' => 'schedules', 'Records' => 'records', 'Family Planning' => 'family_planning'],
            3 => ['Schedules' => 'schedules', 'Family Planning' => 'family_planning', 'Patients' => 'patients', 'Vaccinations', 'vaccinations']
        ];

        return $permissions[$role] ?? [];
    }
}
