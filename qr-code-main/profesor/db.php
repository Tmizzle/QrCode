<?php

// DATABASE CONNECTION PARAMETERS

$host = "localhost";
$user = "root";
$password = "";
$dbname = "qr_code_baza";

$mysqli = new mysqli($host, $user, $password, $dbname);

if($mysqli->connect_error){
    die('Error : (' . $this->mysqli->connect_error . ') ' . $this->mysqli->connect_error);
}

?>