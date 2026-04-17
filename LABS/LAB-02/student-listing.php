<?php
// Author: Joseph ABAIA
// Date: 14 April 2026
// Unit:Web Application Development
include 'db.php';

$sql = "SELECT * FROM Student";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Listing</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: lightgray;
        }
    </style>
</head>
<body>

<h2>Student Listing</h2>

<table>
<tr>
    <th>StudentNo</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Gender</th>
    <th>ContactNo</th>
    <th>ProgramCode</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['StudentNo']}</td>
                <td>{$row['Firstname']}</td>
                <td>{$row['Lastname']}</td>
                <td>{$row['Gender']}</td>
                <td>{$row['ContactNo']}</td>
                <td>{$row['ProgramCode']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No records found</td></tr>";
}
?>

</table>

</body>
</html>