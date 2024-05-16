<?php
$sname = "localhost";
$uname = "root";
$password = "";
$db_name = "ipt101";

$conn = mysqli_connect($sname, $uname, $password, $db_name,);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
    echo"Connected";
?>  