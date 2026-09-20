<?php
$dbhost = "localhost";
$dbuser = "root";
$dbname = "test";
$dbpass = "";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    echo"unsuccessfull";
    }
?>