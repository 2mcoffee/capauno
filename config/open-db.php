<?php

// Create connection
$conn=mysqli_connect("localhost","root","","capauno");
$conn->set_charset('utf-8');


// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
	die();
}

?>
