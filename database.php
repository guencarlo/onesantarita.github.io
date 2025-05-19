<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db1';
$port = 3306;

$connection = new mysqli($host, $user, $password, $database, $port);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
