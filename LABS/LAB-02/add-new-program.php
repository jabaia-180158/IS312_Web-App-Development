<?php
// Author: Joseph ABAIA
// Date: 14 April 2026
// Unit:Web Application Development

include 'db.php';

$code = $_POST['ProgramCode'];
$name = $_POST['ProgramName'];

// Check if program already exists
$check = "SELECT * FROM Program WHERE ProgramCode='$code'";
$result = $conn->query($check);

if ($result->num_rows > 0) {
    echo "Error: Program code already exists!";
} else {
    $sql = "INSERT INTO Program VALUES ('$code','$name')";

    if ($conn->query($sql) === TRUE) {
        echo "Program added successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();

?>