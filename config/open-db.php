<?php

// Create connection
$conn=mysqli_connect("localhost","root","","capauno");
$conn->set_charset('utf8mb4');

$conn->query("SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci");

// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}

?>
