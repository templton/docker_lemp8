<?php

/** Just a test file */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
ini_set('error_reporting', E_ALL);

echo 'Checking mysql connection : ';

$data = new PDO('mysql:host=' . getenv('DB_HOST') . ';dbname=' . getenv('DB_NAME'), getenv('DB_USER'), getenv('DB_PASSWORD'));

new mysqli(getenv('DB_HOST'), getenv('DB_USER'), getenv('DB_PASSWORD'), getenv('DB_NAME'));

echo 'OK';