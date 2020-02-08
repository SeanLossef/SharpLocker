<?php

$servername = "usdentalpractices.com";
$username = "admin";
$password = "A4QKTg@PLEtqu$FUzK8s8wgws#dWXr";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

return "Cool";