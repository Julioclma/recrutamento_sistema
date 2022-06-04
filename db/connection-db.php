<?php

$serverName = 'localhost';
$dbName = 'db_rh_solidario';
$dbUser = 'root';
$dbPassword = 'usbw';

$conn = mysqli_connect($serverName, $dbUser, $dbPassword, $dbName);
mysqli_set_charset($conn, "utf8");

?>