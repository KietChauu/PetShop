<?php
include("connect.php");
$masp = $_GET['masp'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET METHOD
    //Gán dữ liệu vào các thẻ input
    if (!isset($_GET['masp'])) {
        header('location: ../index-product.php');
        exit;
    }
    $sql = "SELECT * FROM sanpham WHERE masp = '$masp' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location: ../index-product.php");
        exit;
    }
    $masp = $row['masp'];
    $tensp = $row['tensp'];
    $gia = $row['gia'];
    $maloai = $row['maloai'];
} else {
    //POST METHOD
    // Xử lý dữ liệu khi ngườu dùng nhấn Cập Nhật
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $maloai = $_POST['maloai'];

    $sql = "UPDATE sanpham SET tensp = '$tensp',gia = '$gia' , maloai = '$maloai' WHERE  masp = '$masp'";
    $result = $conn->query($sql);
    if (!$result) {
        die("Lỗi kết nối" . $conn->connect_error);
    }
    header("location: ../index-product.php");
}
?>

<!-- php
require_once './connect.php';
$masp = $_GET['masp'];
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    //GET METHOD
    //Gán dữ liệu vào các thẻ input
    if (!isset($_GET['masp'])) {
        header('location: ../index-product.php');
        exit;
    }
    $sql = "SELECT * FROM production WHERE masp = '$masp' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    if (!$row) {
        header("location: ../index-product.php");
        exit;
    }
    $masp = $row['masp'];
    $tensp = $row['tensp'];
    $anhsp = $row['anhsp'];
    $soluong = $row['soluong'];
    $gia = $row['gia'];
    $gioitinh = $row['gioitinh'];
    $thuonghieu = $row['thuonghieu'];
} else {
    //POST METHOD
    // Xử lý dữ liệu khi ngườu dùng nhấn Cập Nhật
    $masp = $_POST['masp'];
    $tensp = $_POST['tensp'];
    $anhsp = $_POST['anhsp'];
    $soluong = $_POST['soluong'];
    $gia = $_POST['gia'];
    $gioitinh = $_POST['gioitinh'];
    $thuonghieu = $_POST['thuonghieu'];

    // Xử lý cập nhật ảnh sản phẩm (nếu có)
    if ($_FILES['image']['error'] == 0) {
        $upload_directory = "../../assets/img/images/"; // Đường dẫn thư mục lưu trữ ảnh
        $new_image = $_FILES["image"]["name"];
        $temp_image = $_FILES["image"]["tmp_name"];
        $target_path = $upload_directory . $new_image;

        move_uploaded_file($temp_image, $target_path);

        // Cập nhật đường dẫn ảnh trong CSDL
        $update_image_sql = "UPDATE production SET anhsp = ? WHERE masp = ?";
        $update_image_statement = $conn->prepare($update_image_sql);
        $update_image_statement->bind_param("si", $target_path, $masp);
        $update_image_statement->execute();
        $update_image_statement->close();
    }


    $sql = "UPDATE production SET  tensp = '$tensp' , anhsp = '$anhsp', soluong = '$soluong', gia = '$gia', gioitinh = '$gioitinh' , thuonghieu ='$thuonghieu' WHERE masp = '$masp' ";
    $result = $conn->query($sql);
    if (!$result) {
        die("Lỗi kết nối" . $conn->connect_error);
    }
    header("location: ../index-product.php");
    exit;
}

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Sản Phẩm</title>

    <link rel="stylesheet" href="edit.css">
</head>
</head>

<body>
    <div class="container">
        <h3 class="title">Sửa sản phẩm</h3>
        <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="masp">Mã sản phẩm</label>
                    <input type="text" name="masp" id="masp" value="<?php echo $masp; ?>">
                </div>
                <div>
                    <label for="tensp">Tên sản phẩm</label>
                    <input type="text" name="tensp" id="" value="<?php echo $tensp; ?>">
                </div>
                <div>
                    <label for="gia">Giá tiền</label>
                    <input type="text" name="gia" id="" value="<?php echo $gia ?>">
                </div>
                <div>
                    <label for="gioitinh">Mã loại</label>
                    <input type="text" name="maloai" id="" value="<?php echo $maloai; ?>">
                </div>
                <input type="submit" value="Cập nhật" name="submit">
                <!-- Khi người dùng ấn huỷ sẽ quay về trang index -->
                <a href="../index-product.php">
                    <input type="button" value="Huỷ" class="cancel">
                </a>
        </form>
    </div>
</body>

</html>