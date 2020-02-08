<?php

$servername = "localhost";
$username = "fpm";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
print_r( $_GET);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO data.sharplocker (password) VALUES ('". mysqli_real_escape_string($_GET['']) ."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error";
}

$conn->close();