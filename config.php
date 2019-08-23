<?php
date_default_timezone_set('Asia/Calcutta');

$host = 'localhost';
$username = 'root';
$password  = 'password';
$db = 'ecell';



// Connect mySql

$mysqli = new mysqli($host, $username, $password, $db);
//Check if Safe connection established

if ($mysqli->connect_error) {
    die("Connect Error:Could not cconnect to database");
}
