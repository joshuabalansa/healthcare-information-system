<?php

session_start();

$_SESSION = [];

session_destroy();

header('location: http://healthcare.test/src/index');

exit;
