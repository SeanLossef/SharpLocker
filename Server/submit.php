<?php

$servername = "localhost";
$username = "fpm";
$password = "";

$p = $_GET["p"];

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO data.sharplocker (password) VALUES ('". mysqli_real_escape_string($p) ."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error";
}

$conn->close();