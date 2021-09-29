<?php
$servername = "127.0.0.1";
$database = "teste";
$username = "root";
$password = "dhcp3229";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";