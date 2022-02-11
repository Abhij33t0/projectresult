<?php
$fname = $_POST['fname'];
$fathername = $_POST['fathername'];
$regnum = $_POST['regnum'];
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

$sql = "INSERT INTO result(fname,fathername,regnum,roll,hindi,english,science,math,cmptr) VALUES('$fname','$fathername','$regnum','$roll','$hindi','$english','$science','$math','$cmptr')";


if($conn->query($sql)==TRUE)
{
    $msg = "SUCCESS:";
}
else {
    $msg = "NOT SUCCESS:";
}
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
        <title>Add Students </title>
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

        <div class="menubar">
            <ul class="hidden"></ul>
            <ul class="menuitems">
                <a class="asd" href="dashboard.html">Dashboard</a></ul>
            <ul class="menuitems"><a class="asd" href="chckstdnt.php">Check Students</a></ul>
            <ul class="menuitems"><a style="background-color: brown;" class="asd" href="#">Add Student Result</a></ul>
            <ul class="menuitems"><a class="asd" href="edit.php">Edit Details</a></ul>
            <ul class="menuitems"><a class="asd" href="more.html">More Info</a></ul>

        </div>

        <div class="addstdnt">
            <center>
                <form method="post" action="">
                    <h1>Add Student Result</h1>
                    <table>
                        
                        <tr>
                            <td class="tdclass">First Name:</td>
                            <td><input type="text" required="required" name="fname" placeholder="First Name" id="des"></td>
                        </tr>
                        <tr>
                            <td class="tdclass">Last Name:</td>
                            <td><input type="text" required="required" name="fathername" placeholder="Father's Name" id="des"></td>
                        </tr>
                        <tr>
                            <td class="tdclass">Registration Number:</td>
                            <td><input type="text" required="required" name="regnum" placeholder="Registration Number" id="des"></td>
                        </tr>
                        <tr>
                            <td class="tdclass" id="tdid">Roll Number:</td>
                            <td>
                                <input type="text" required="required" id="des" placeholder="Roll Number" name="roll">
                            </td>
                        </tr>
                        
                        <tr>
                            <td class="tdclass">Hindi:</td>
                            <td>
                                <input type="text" required="required" name="hindi">
                            </td>
                        </tr>
                        <tr>
                            <td class="tdclass">English:</td>
                            <td>
                                <input type="text" required="required" name="english" id="des">
                            </td>
                        </tr>
                        <tr>
                            <td class="tdclass">Science:</td>
                            <td><input type="text" required="required" name="science" id="des"></td>
                        </tr>
                        <tr>
                            <td class="tdclass" id="tdid">Math:</td>
                            <td>
                                <input type="text" required="required" name="math" id="des">
                            </td>
                        </tr>
                        <tr>
                            <td class="tdclass" id="tdid">Computer:</td>
                            <td>
                                <input type="text" required="required" id="des" name="cmptr">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <input type="submit" value="Add">
                                <input type="reset" value="Reset">

                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>

    </body>

    </html>