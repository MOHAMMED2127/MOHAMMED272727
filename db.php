<?php
$host = "localhost";
$username = "root";
$password = "";
$database_name = "testdatabase";

$conn = new mysqli($host, $username, $password, $database_name);
if ($conn->connect_error) {
    die("Connection Failed");
}
?>
