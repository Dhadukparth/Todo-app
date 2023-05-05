<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "phpcrud";

// $con = mysqli_connect($host, $username, $password, $database);
$con = mysqli_connect('localhost', 'root', '', 'phpcrud');

if (!$con) {
    die("Error: Unable to connect to database");
}
