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
$sql = UPDATE `result` SET `fname`='[]',`lname`='[value-2]',`roll`='[value-3]',
`hindi`='[value-4]',`english`='[value-5]',`science`='[value-6]',`math`='[value-7]',`cmptr`='[value-8]' WHERE 1
$result = $conn->query($sql);
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="navBar.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="admin.css">
    <style>
    table {
        margin: 0 auto;
        font-size: medium;
        border: 1px solid black;
    }

    td {
        background-color: #E4F5D4;
        border: 1px solid black;
    }

    th {
        background-color: ;
    }

    th,
    td {
        font-weight: bold;
        border: 0.8px solid black;
        padding: 7px;
        text-align: center;
    }

    td {
        font-weight: lighter;
    }
    </style>
    <title>Chcek Students Details</title>
</head>

<body style="margin: 0px;">
    <nav>
        <ul>
            <li><a href="/projectresult/home.html">Home</a></li>
            <li>
                <a href="#">Panels</a>
                <ul>
                    <li><a href="/projectresult/orgResult.html" class="fontsize">See Result</a></li>
                </ul>
            </li>
            <li>
                <a href="#">More</a>
                <ul>
                    <li><a href="/projectresult/about.html" class="fontsize">About Project</a></li>
                    <li><a href="/projectresult/contact.html" class="fontsize">Contact us</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <br><br>
    <div class="menubar">
        <ul class="hidden"></ul>
        <ul class="menuitems">
            <a class="asd" href="dashboard.html">Dashboard</a>
        </ul>
        <ul class="menuitems"><a class="asd" href="chckstdnt.php">Check Students</a></ul>
        <ul class="menuitems"><a class="asd" href="addstdnt.php">Add Student Result</a></ul>
        <ul class="menuitems"><a style="background-color: brown" class="asd" href="#">Edit Details</a></ul>
        <ul class="menuitems"><a class="asd" href="more.html">More Info</a></ul>

    </div>
    <div class="addstdnt">
        <center><br>

        </center>
    </div>
</body>

</html>