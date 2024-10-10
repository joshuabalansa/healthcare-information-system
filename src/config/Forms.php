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
            'first_name'            =>  ['First Name', 'text', 'required', ''],
            'middle_name'           =>  ['Middle Name', 'text', 'required', ''],
            'last_name'             =>  ['Last Name', 'text', 'required', ''],
            'suffix'                =>  ['Suffix', 'text', 'required', ''],
            'birth_date'            =>  ['Birth Date', 'date', 'required', ''],
            'body_weight'           =>  ['Body Weight', 'text', 'required', ''],
            'body_length'           =>  ['Body Length', 'text', 'required', ''],
            'address'               =>  ['Address', 'text', 'required', ''],
            'philhealth'            =>  ['Philhealth Number', 'text', '', ''],
            '4ps_number'            =>  ['4Ps Number', 'text', '', ''],
            'mother_maiden_name'    =>  ['Mother Maiden Name', 'text', '', ''],
            'mother_birth_date'     =>  ['Mother Birth Date', 'date', '', 'min="2010-01-01"'],
            'mother_occupation'     =>  ['Mother Occupation', 'text', '', ''],
            'father_name'           =>  ['Father Name', 'text', '', ''],
            'father_birth_date'     =>  ['Father Birth Date', 'date', '', 'min="2010-01-01"'],
            'father_occupation'     =>  ['Father Occupation', 'text', '', ''],
            'phone_number'          =>  ['Contact # +63', 'number', 'required', ''],
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
            'first_name'        =>  ['Enter First Name', 'text', 'required', ''],
            'middle_name'       =>  ['Middle Name', 'text', 'required', ''],
            'last_name'         =>  ['Last Name', 'text', 'required', ''],
            'suffix'            =>  ['Suffix', 'text', 'required', ''],
            'Age'               =>  ['Age', 'number', 'required', 'min="14" max="50"'],
            'birth_date'        =>  ['Birth Date', 'date', 'required', 'min="2010-01-01"'],
            'address_1'         =>  ['Current Address', 'text', 'required', ''],
            'address_2'         =>  ['Permanent Address', 'text', 'required', ''],
            'phone_number'      =>  ['Contact # +63', 'number', 'required', ''],
        ];

        return $fields;
    }
}
