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
    public static function authorize($role)
    {

        # menu | url | icon
        $permissions = [
            1 => [
                'Dashboard'   => ['dashboard', 'chart-pie'],
                'Appointments' => ['appointments', 'bell'],
                'Patients' =>   ['patients', 'users'],
                'Vaccine Management' => ['vaccination', 'archive'],
                'Reports' => ['reports', 'chart-area'],
                'Users' => ['users', 'user']
            ],
            2 => [
                'General' => ['general', 'folder'],
                'Schedules' => ['schedules', 'clock'],
                'Records' => ['records', 'folder'],
                'Vaccinations' => ['vaccinations', 'archive']
            ],
            3 => [
                'General' => ['general', 'folder'],
                'Schedules' => ['schedules', 'clock'],
                'Records' => ['records', 'folder'],
                'Family Planning' => ['family_planning', 'users']
            ],
            4 => [
                'General' => ['general', 'folder'],
                'Schedules' => ['schedules', 'clock'],
                'Records' => ['records', 'folder'],
                'Family Planning' => ['family_planning', 'users'],
                'Vaccinations' => ['vaccinations', 'archive']
            ],
        ];

        return $permissions[$role] ?? [];
    }
}
