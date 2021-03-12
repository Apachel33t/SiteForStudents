<?php

include '../Utils/Mail.php';

$objects = json_decode(file_get_contents('php://input'));

(new Mail($objects));