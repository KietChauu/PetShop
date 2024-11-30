<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "petzy";
//Kết nối CSDL
$conn = new mysqli($servername, $username, $password, $dbname);
//Kiểm tra kết nối
if ($conn->connect_error) {
    die("Lỗi kết nối" . $conn->connect_error);
}


// Đóng kết nối $conn->close();
