<?php
$db_host = 'localhost';
$db_name = 'tcoer';
$db_user = 'debian-sys-maint';
$db_password = 'xveTEC8PboluHpDI';

$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
