<?php
$servername = "mysqldb";
$username = "biky";
$password = "begucool";
$dbname = "blog";



$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "konfig berhasil";

//$conn->close();
?>