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
            0 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'chart-pie'],
                'Users Management'              =>   [$baseUrl . 'users', 'users'],
                'Logs Monitoring'               =>   [$baseUrl . 'users/logs', 'list'],
            ],
            1 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'chart-pie'],
                'Appointments'                  =>   [$baseUrl . 'appointments', 'bell'],
                'Patients Records'              =>   [$baseUrl . 'patients', 'users'],
                'Vaccines Management'           =>   [$baseUrl . 'vaccine', 'archive'],
                'Family Planning Methods'       =>   [$baseUrl . 'methods', 'archive'],
                'Reports Analytics'             =>   [$baseUrl . 'reports', 'chart-area']
            ],
            2 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'folder'],
                'Schedules'                     =>   [$baseUrl . 'schedules', 'clock'],
                'Records'                       =>   [$baseUrl . 'patient_user/records', 'folder']
            ],
            3 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'folder'],
                'Schedules'                     =>   [$baseUrl . 'schedules', 'clock'],
                'Records'                       =>   [$baseUrl . 'patient_user/records', 'folder']
            ],
            4 => [
                'Dashboard'                     =>   [$baseUrl . 'dashboard', 'folder'],
                'Calendar'                      =>   [$baseUrl . 'schedules', 'clock'],
                'Patient Assessments'           =>   [$baseUrl . 'assessments', 'users']
            ],
        ];

        return $permissions[$role] ?? [];
    }
}
