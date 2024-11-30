<?php
require_once'dbconfig.php';
$masp = $_POST['masp'];
$tensp = $_POST['tensp'];
$gia = $_POST['gia'];
$maloai = $_POST['maloai'];

$sql = "INSERT INTO sanpham(masp,tensp,gia,maloai) VALUES ('$masp', '$tensp','$gia','$maloai')";

mysqli_query($conn, $sql);
mysqli_close($conn);
    //Chuyển tiếp về trang index khi thêm mới thành công
header("location:http://localhost:82/%c4%90%e1%bb%92%20%c3%81N%20CU%e1%bb%90I%20K%c3%8c/admin/index-product.php");

?>
