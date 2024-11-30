<?php
require_once 'connect.php';
if (isset($_GET["masp"])) {
    $masp = $_GET["masp"];


    $sql = "DELETE FROM sanpham WHERE masp = '$masp' ";
    $conn->query($sql);
    if ($conn->query($sql) == TRUE) {
        echo "Xóa dữ liệu thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }
    header("location: ../index-product.php");
    exit;
}
