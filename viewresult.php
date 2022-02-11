<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli("$servername","$username","","$dbname");

if($conn->connect_error)
{
    die("Connection Error:".$conn->connect_error);
}
// SQL query to select data from database
$sql = "SELECT * FROM result WHERE 1 ";
$result = $conn->query($sql);
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    
</body>
</html>