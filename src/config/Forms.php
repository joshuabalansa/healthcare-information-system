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
            'first_name'            =>  ['FIRST NAME', 'text', 'required', ''],
            'middle_name'           =>  ['MIDDLE NAME', 'text', 'required', ''],
            'last_name'             =>  ['LAST NAME', 'text', 'required', ''],
            'suffix'                =>  ['SUFFIX', 'text', 'required', ''],
            'birth_date'            =>  ['BIRTH DATE', 'date', 'required', ''],
            'body_weight'           =>  ['BODY WEIGHT (KG)', 'number', 'required', 'min="0" max="1000"'],
            'body_length'           =>  ['BODY LENGTH (CM)', 'number', 'required', 'min="0" max="1000"'],
            'philhealth'            =>  ['PHILHEALTH NUMBER #', 'text', 'required', ''],
            '4ps_number'            =>  ['4Ps NUMBER #', 'text', 'required', ''],
            'mother_maiden_name'    =>  ['MOTHER\'S MAIDEN NAME', 'text', 'required', ''],
            'mother_birth_date'     =>  ['MOTHER\'S BIRTH DATE', 'date', 'required', ''],
            'mother_occupation'     =>  ['MOTHER\'S OCCUPATION', 'text', 'required', ''],
            'father_name'           =>  ['FATHER\'S NAME', 'text', 'required', ''],
            'father_birth_date'     =>  ['FATHER\'S BIRTH DATE', 'date', 'required', ''],
            'father_occupation'     =>  ['FATHER\'S OCCUPATION', 'text', 'required', ''],
            'phone_number'          =>  ['CONTACT #', 'number', 'required', ''],
            'address'               =>  ['COMPLETE ADDRESS', 'text', 'required', ''],
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
            'first_name'        =>  ['FIRST NAME', 'text', 'required', ''],
            'middle_name'       =>  ['MIDDLE NAME', 'text', 'required', ''],
            'last_name'         =>  ['LAST NAME', 'text', 'required', ''],
            'suffix'            =>  ['SUFFIX', 'text', 'required', ''],
            'Age'               =>  ['AGE', 'number', 'required', 'min="14" max="50"  onblur="validateAge()"'],
            'birth_date'        =>  ['BIRTH DATE', 'date', 'required', 'min="1980-01-01" max="2010-01-01"'],
            'phone_number'      =>  ['CONTACT #', 'number', 'required', ''],
            'address'           =>  ['COMPLETE ADDRESS', 'text', 'required', ''],
            'spouse_name'       =>  ['SPOUSE\'S NAME', 'text', '', ''],
            'spouse_date_of_birth'  =>  ['SPOUSE\'S BIRTH DATE', 'date', '', 'min="1980-01-01" max="2010-01-01"'],
            'spouse_occupation' =>  ['SPOUSE\'S OCCUPATION', 'text', '', ''],
        ];

        return $fields;
    }
}
