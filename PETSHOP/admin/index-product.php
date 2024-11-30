<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product new</title>
    <link rel="stylesheet" href="php/admin.css">

</head>

<body>

<h1 class="title-product">KHO SẢN PHẨM</h1>
    <div class="container">
        <a href="php/create.php" class="submit">Thêm sản phẩm</a>
        <div class="table">

            <table>
                <thead>
                    <tr>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Giá tiền</th>
                        <th>Mã loại</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Kết nối CSDL
                    include("php/connect.php");
                    //Câu lệnh select
                    $sql = "SELECT * FROM sanpham";
                    $result = $conn->query($sql);
                    //Đổ dữ liệu lên bảng
                        while ($row = $result->fetch_assoc()) 
                        {
                    ?>
                            <tr>
                                <td><?php echo $row['masp'] ?> </td>
                                <td><?php echo $row['tensp'] ?> </td>
                                <td><?php echo $row['gia'] ?> </td>
                                <td><?php echo $row['maloai'] ?> </td>
                                <td>
                                    <a class="btn primary" href="php/edit.php?masp=<?php echo $row['masp'] ?>">Sửa</a>
                                </td>
                                <td>
                                    <a style="margin-right:0;" class="btn danger" href="php/delete.php?masp=<?php echo $row['masp'] ?>">Xoá</a>
                                </td>
                            </tr>
                    <?php
                        }
                    ?>

                    
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>