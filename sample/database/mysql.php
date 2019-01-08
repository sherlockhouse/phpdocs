<?php
$serverName = "localhost";
$username = "root";
$password = "root";

// mysql
// $conn = new mysqli($serverName, $username, $password);

// if ($conn->connect_error) {
//     die("connect fail: " . $conn->connect_error);
// }

//pdo 
try {
$conn = new PDO("mysql:host=$serverName;", $username, $password);
echo "connect success\n";
} 
catch (PDOException $e) {
    echo $e->getMessage();
}
?>