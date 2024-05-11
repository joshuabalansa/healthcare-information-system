<?php

/**
 * @param mixed $data
 * @return void
 */
function die_dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}


/**
 * @param mixed $data
 * @return void
 */
function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

/**
 * Get data from form
 *
 * @param array $fields
 * @return array $data
 */
function getFormData($fields)
{

    $data = [];

    foreach ($fields as $field => [$label, $type]) {

        if (isset($_POST[$field])) {

            $data[$field] = htmlspecialchars($_POST[$field]);
        } else {

            $data[$field] = '';
        }
    }
    return $data;
}

