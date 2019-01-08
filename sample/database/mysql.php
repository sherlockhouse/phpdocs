<?php
$serverName = "localhost";
$username = "root";
$password = "root";

$conn = new mysqli($serverName, $username, $password);

if ($conn->connect_error) {
    die("connect fail: " . $conn->connect_error);
}

echo "connect success\n";
?>