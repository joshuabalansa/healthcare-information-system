<?php


/**
 * @param mixed $data
 * @return void
 */
function die_dump($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}


/**
 * @param mixed $data
 * @return void
 */
function dump($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}


function __include($filepath, $variable = [], $print = true) {

    extract($variables);

    ob_start();

    include $filePath;

    $output = ob_get_clean();

    if (!$print) {
        return $output;
    }

    echo $output;
}