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
            'philhealth'            =>  ['Philhealth Number', 'text', ''],
            '4ps_number'            =>  ['4Ps Number', 'text', ''],
            'mother_maiden_name'    =>  ['Mother Maiden Name', 'text', ''],
            'mother_birth_date'     =>  ['Mother Birth Date', 'date', ''],
            'mother_age'            =>  ['Mother Age', 'number', ''],
            'mother_occupation'     =>  ['Mother Occupation', 'text', ''],
            'father_name'           =>  ['Father Name', 'text', ''],
            'father_birth_date'     =>  ['Father Birth Date', 'date', ''],
            'father_age'            =>  ['Father Age', 'number', ''],
            'father_occupation'     =>  ['Father Occupation', 'text', ''],
            'phone_number'          =>  ['Phone Number', 'number', 'required'],
            'appointment_time'      =>  ['Appointment Time', 'time', 'required'],
            'appointment_date'      =>  ['Appointment Date', 'date', 'required'],
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
            'first_name'        =>  ['First Name', 'text', 'required'],
            'middle_name'       =>  ['Middle Name', 'text', 'required'],
            'last_name'         =>  ['Last Name', 'text', 'required'],
            'birth_date'        =>  ['Birth Date', 'date', 'required'],
            'address'           =>  ['address', 'text', 'required'],
            'phone_number'      =>  ['Phone Number', 'number', 'required'],
            'appointment_time'  =>  ['Appointment Time', 'time', 'required'],
            'appointment_date'  =>  ['Appointment Date', 'date', 'required'],
        ];

        return $fields;
    }
}
