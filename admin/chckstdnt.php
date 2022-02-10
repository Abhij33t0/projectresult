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
        <ul class="menuitems"><a style="background-color: brown" class="asd" href="#">Check Students</a></ul>
        <ul class="menuitems"><a class="asd" href="addstdnt.php">Add Student Result</a></ul>
        <ul class="menuitems"><a class="asd" href="edit.php">Edit Details</a></ul>
        <ul class="menuitems"><a class="asd" href="more.html">More Info</a></ul>

    </div>
    <div class="addstdnt">
        <center>
            <h1>Student Details</h1>

            <section>
                <div style="height: 550px; overflow: auto";>
                    <table style="height: 400px" ;>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Roll No</th>
                            <th>Hindi</th>
                            <th>English</th>
                            <th>Science</th>
                            <th>Math</th>
                            <th>Computer</th>
                        </tr>
                        <!-- PHP CODE TO FETCH DATA FROM ROWS-->
                        <?php // LOOP TILL END OF DATA
                    while($rows = $result->fetch_assoc())
                    {
                ?>
                        <tr>
                            <!--FETCHING DATA FROM EACH
                        ROW OF EVERY COLUMN-->
                            <td>
                                <?php echo $rows['fname'];?>
                            </td>
                            <td>
                                <?php echo $rows['lname'];?>
                            </td>
                            <td>
                                <?php echo $rows['roll'];?>
                            </td>
                            <td>
                                <?php echo $rows['hindi'];?>
                            </td>
                            <td>
                                <?php echo $rows['english'];?>
                            </td>
                            <td>
                                <?php echo $rows['science'];?>
                            </td>
                            <td>
                                <?php echo $rows['math'];?>
                            </td>
                            <td>
                                <?php echo $rows['cmptr'];?>
                            </td>
                        </tr>
                        <?php
                    }
                ?>
                    </table>
                </div>
            </section>

        </center>
    </div>
</body>

</html>