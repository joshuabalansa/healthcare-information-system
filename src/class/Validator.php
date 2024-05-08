<?php

class Validator
{

    /**
     * validate user session
     *
     * @param int $sessionId
     * @return void
     */
    public static function validateUserSession($sessionId)
    {
        if (!$sessionId) {

            header('location: ../index');
        }
    }
}
