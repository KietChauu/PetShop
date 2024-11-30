<!-- ?php header('Content-Type: text/html; charset=utf-8'); ?> -->

<?php
require_once 'dbconfig.php';
$masp = $_POST['masp'];
$tensp = $_POST['tensp'];
$gia = $_POST['gia'];
$maloai = $_POST['maloai'];


$sql = "UPDATE  sanpham SET tensp = $tensp,gia = $gia ,maloai = $maloai WHERE  masp = $masp";

mysqli_query($conn, $sql);
mysqli_close($conn);

//Chuyển tiếp về trang index khi thêm mới thành công
header("location: ../index-product.php");

?>
