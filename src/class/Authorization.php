<?php

class Authorization
{
    /**
     * get users permissions
     *
     * @return array $permissions
     */
    public static function authorize($role)
    {

        $permissions = [
            1 => [
                'Dashboard' => ['dashboard', 'chart-pie'],
                'Appointments' => ['appointments', 'bell'],
                'Patients' => ['patients', 'users'],
                'Vaccine Management' => ['vaccination', 'archive'],
                'Reports' => ['reports', 'chart-area'],
                'Users' => ['users', 'user']
            ],
            2 => [
                'General' => ['general', 'folder'],
                'Schedules' => ['schedules', 'clock'],
                'Records' => ['records', 'folder'],
                'Family Planning' => ['family_planning', 'users']
            ],
            3 => [
                'Schedules' => ['schedules', 'clock'],
                'Family Planning' => ['family_planning', 'users'],
                'Patients' => ['patients', 'users'],
                'Vaccinations', ['vaccinations', 'archive']
            ]
        ];

        return $permissions[$role] ?? [];
    }
}
