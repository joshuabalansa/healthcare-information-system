<?php

/**
 * Authorization class for managing user permissions.
 */
class Authorization
{
    /**
     * Authorize user based on role and return corresponding permissions.
     *
     * @param int $role
     * @return array Associative array containing menus permissions.
     */
    public static function routes($role)
    {
        $baseUrl = 'http://healthcare.test/src/';

        $permissions = [
            1 => [
                'Dashboard'             => [$baseUrl . 'pages/dashboard', 'chart-pie'],
                'Appointments'          => [$baseUrl . 'pages/appointments', 'bell'],
                'Patients'              => [$baseUrl . 'pages/patients', 'users'],
                'Vaccine Management'    => [$baseUrl . 'vaccination', 'archive'],
                'Reports'               => [$baseUrl . 'reports', 'chart-area'],
                'Users'                 => [$baseUrl . 'users', 'user']
            ],
            2 => [
                'General'               => [$baseUrl . 'general', 'folder'],
                'Schedules'             => [$baseUrl . 'schedules', 'clock'],
                'Records'               => [$baseUrl . 'records', 'folder'],
                'Vaccinations'          => [$baseUrl . 'vaccinations', 'archive']
            ],
            3 => [
                'General'               => [$baseUrl . 'general', 'folder'],
                'Schedules'             => [$baseUrl . 'schedules', 'clock'],
                'Records'               => [$baseUrl . 'records', 'folder'],
                'Family Planning'       => [$baseUrl . 'family_planning', 'users']
            ],
            4 => [
                'General'               => [$baseUrl . 'general', 'folder'],
                'Schedules'             => [$baseUrl . 'schedules', 'clock'],
                'Records'               => [$baseUrl . 'records', 'folder'],
                'Family Planning'       => [$baseUrl . 'family_planning', 'users'],
                'Vaccinations'          => [$baseUrl . 'vaccinations', 'archive']
            ],
        ];

        return $permissions[$role] ?? [];
    }

    /**
     * Redirect to the login 
     * if not authenticated
     *
     * @param int $sessionId
     * @return void
     */
    public function isAuthenticated($sessionId)
    {
        if (!$sessionId) {

            header('location: ../index');
        }
    }
}
