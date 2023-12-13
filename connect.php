<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "QLLT";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Thiết lập ký tự cho kết nối CSDL
mysqli_set_charset($conn, "utf8mb4");
?>