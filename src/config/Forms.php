<?php

class Forms
{

    /**
     * Set registration fields
     *
     * @return array $fields
     */
    public function vaccinationFields()
    {

        $fields = [
            'first_name'            =>  ['First Name', 'text', 'required'],
            'middle_name'           =>  ['Middle Name', 'text', 'required'],
            'last_name'             =>  ['Last Name', 'text', 'required'],
            'birth_date'            =>  ['Birth Date', 'date', 'required'],
            'body_weight'           =>  ['Body Weight', 'text', 'required'],
            'body_length'           =>  ['Body Length', 'text', 'required'],
            'address'               =>  ['Address', 'text', 'required'],
            'gravida'               =>  ['Gravida', 'text', ''],
            'para'                  =>  ['Para', 'text', ''],
            'abortion'              =>  ['Abortion', 'text', ''],
            'live_birth'            =>  ['Live Birth', 'text', ''],
            'death'                 =>  ['Death', 'text', ''],
            'philhealth'            =>  ['Philhealth Number', 'text', ''],
            '4ps_number'            =>  ['4Ps Number', 'text', ''],
            'mother_maiden_name'    =>  ['Mother Maiden Name', 'text', ''],
            'mother_birth_date'     =>  ['Mother Birth Date', 'date', ''],
            'mother_age'            =>  ['Mother Age', 'text', ''],
            'mother_occupation'     =>  ['Mother Occupation', 'text', ''],
            'father_name'           =>  ['Father Name', 'text', ''],
            'father_birth_date'     =>  ['Father Birth Date', 'date', ''],
            'father_age'            =>  ['Father Age', 'text', ''],
            'father_occupation'     =>  ['Father Occupation', 'text', ''],
            'phone_number'          =>  ['Phone Number', 'number', ''],
            'appointment_time'      =>  ['Appointment Time', 'time', ''],
            'appointment_date'      =>  ['Appointment Date', 'date', ''],
        ];

        return $fields;
    }


     /**
     * Set registration fields
     *
     * @return array $fields
     */
    public function familyPlanningFields()
    {

        $fields = [
            'first_name'        =>  ['First Name', 'text'],
            'middle_name'       =>  ['Middle Name', 'text'],
            'last_name'         =>  ['Last Name', 'text'],
            'birth_date'        =>  ['Birth Date', 'date'],
            'body_weight'       =>  ['Body Weight', 'text'],
            'body_length'       =>  ['Body Length', 'text'],
            'address'           =>  ['Address', 'text'],
            'phone_number'      =>  ['Phone Number', 'number'],
            'appointment_time'  =>  ['Appointment Time', 'time'],
            'appointment_date'  =>  ['Appointment Date', 'date'],
        ];

        return $fields;
    }
}
