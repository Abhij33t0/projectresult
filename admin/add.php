<?php
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$roll = $_POST['roll'];
$hindi = $_POST['hindi'];
$english = $_POST['english'];
$science = $_POST['science'];
$math = $_POST['math'];
$cmptr = $_POST['cmptr'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli("$servername","$username","","$dbname");

if($conn->connect_error)
{
    die("Connection Error:".$conn->connect_error);
}

$sql = "INSERT INTO result(fname,lname,roll,hindi,english,science,math,cmptr) VALUES('$fname','$lname','$roll','$hindi','$english','$science','$math','$cmptr')";


if($conn->query($sql)==TRUE)
{
    echo "SUCCES:";
}
else {
    echo "Connection Error:".$sql.$conn->error;
}
$conn->close();

?>