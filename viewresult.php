<?php

$roll = $_POST['roll'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn = new mysqli("$servername","$username","","$dbname");

if($conn->connect_error)
{
    die("Connection Error:".$conn->connect_error);
}

$sql = "SELECT * FROM `result` WHERE roll='$roll'";
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

        </style>
        <title>Chcek Students Details</title>
    </head>

    <body style="margin: 0px;">

        <div class="addstdnt">
            <center>

                <section>
                    <div style="height: 550px; overflow: auto" ;>
                        <table style="height: 400px" ;>

                            <th>
                                <h1>Result</h1>
                            </th>

                            <?php
                    while($rows = $result->fetch_assoc())
                    {
                ?>
                                <tr>
                                    <td>Student Name: </td>
                                    <td>Abhijeet</td>
                                    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>Roll Number:</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td>Student Name: </td>
                                    <td>Abhijeet</td>
                                </tr>
                                <tr>
                                    <td>Student Name: </td>
                                    <td>Abhijeet</td>
                                </tr>
                                <tr>
                                    <td>Student Name: </td>
                                    <td>Abhijeet</td>
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