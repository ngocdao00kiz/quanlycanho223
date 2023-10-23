<?php
$servername = "127.0.0.1";
$database = "database";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("connection failed: ".mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>