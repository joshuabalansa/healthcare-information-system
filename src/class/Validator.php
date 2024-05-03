<?php

class Validator
{

    /**
     * validate user session
     *
     * @param int $sessionId
     * @return void
     */
    public function validateUserSession($sessionId)
    {
        if (!$sessionId) {

            header('location: ../index');
        }
    }
}
