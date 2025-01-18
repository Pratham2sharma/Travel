<?php

$servername = "localhost";  // replace with your server name
$username = "root";  // replace with your database username
$password = "";  // replace with your database password
$dbname = "travelwish";  // replace with your database name

$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}


?>