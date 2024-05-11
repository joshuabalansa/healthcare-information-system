<?php

$config = [
    'url' => 'http://healthcare.test/'
];

/**
 *  Get the configuration value for the given key.
 *
 * @param string|null $key
 * @return mixed|null
 */
function config($key = null)
{

    global $config;

    if ($key === null) {

        return $config;
    }

    if (array_key_exists($key, $config)) {

        return $config[$key];
    }

    return null;
}
