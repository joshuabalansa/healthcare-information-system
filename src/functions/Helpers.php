<?php
require '../config/Connection.php';

class Helpers
{

    public function validateUserSession($sessionId)
    {
        if (!$sessionId) {

            header('location: ../index.php');
        }
    }
}
