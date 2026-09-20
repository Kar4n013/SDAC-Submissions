<?php
$dbhost = "localhost";
$dbuser = "root";
$dbname = "employee_db";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    echo"unsuccessfull";
    }
?>