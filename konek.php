<?php
$host = "localhost"; // Nama host database
$user = "root"; // Nama pengguna database
$password = ""; // Kata sandi pengguna database
$database = "smp"; // Nama database

$con = mysqli_connect($host, $user, $password, $database);

if(mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    // echo "Connected to MySQL database successfully.";
}
?>
