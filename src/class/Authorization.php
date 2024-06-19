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
        $baseUrl = $_SESSION['base_url'] . 'pages/';

        $permissions = [
            1 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'chart-pie'],
                'Appointments'                  =>   [$baseUrl . 'appointments', 'bell'],
                'Patients Records'              =>   [$baseUrl . 'patients', 'users'],
                'Vaccines Management'        =>   [$baseUrl . 'vaccine', 'archive'],
                'Family Planning Methods'    =>   [$baseUrl . 'methods', 'archive'],
                'Reports Analytics'             =>   [$baseUrl . 'reports', 'chart-area'],
                'Users'                         =>   [$baseUrl . 'users', 'user']
            ],
            2 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'folder'],
                'Vaccinations'                  =>   [$baseUrl . 'vaccination', 'archive'],
                'Schedules'                     =>   [$baseUrl . 'schedule', 'clock'],
                'Records'                       =>   [$baseUrl . 'records', 'folder']
            ],
            3 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'folder'],
                'Family Planning'               =>   [$baseUrl . 'family_planning', 'users'],
                'Schedules'                     =>   [$baseUrl . 'schedules', 'clock'],
                'Records'                       =>   [$baseUrl . 'records', 'folder']
            ],
            4 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'folder'],
                'Schedules'                     =>   [$baseUrl . 'schedules', 'clock'],
                'Records'                       =>   [$baseUrl . 'records', 'folder'],
                'Family Planning Assessment'    =>   [$baseUrl . 'family_planning', 'users'],
                'Vaccination Assessment'        =>   [$baseUrl . 'vaccinations', 'archive']
            ],
        ];

        return $permissions[$role] ?? [];
    }
}
