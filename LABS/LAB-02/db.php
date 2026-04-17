<?php
// Author: Joseph ABAIA
// Date: 14 April 2026
// Unit:Web Application Development

$host = "localhost";
$user = "root";
$pass = "";
$db = "FRU10";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>