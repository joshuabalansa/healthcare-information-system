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
