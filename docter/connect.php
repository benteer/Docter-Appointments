<?php
// Database connection parameters
$hostname = 'localhost'; // or your host name
$username = ' debian-sys-maint'; // your MySQL username
$password = 'xveTEC8PboluHpDI'; // your MySQL password
$database = 'sign'; // your MySQL database name


// Connect to MySQL database

$connection = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

echo "Connected successfully";


?>