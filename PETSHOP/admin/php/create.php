<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới sản phẩm</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="create-container">
        <h3 class="create-title">Thêm mới sản phẩm</h3>
        <form action="../../common/xuly_themsanpham.php" method="post" enctype="multipart/form-data">
        <div>
                <label for="masp">Mã sản phẩm</label>
                <input type="text" name="masp" id="masp">
            </div>
            <div>
                <label for="tensp">Tên sản phẩm</label>
                <input type="text" name="tensp" id="">
            </div>
            <div>
                <label for="gia">Giá tiền</label>
                <input type="number" name="gia" id="">
            </div>
            <div>
                <label for="gia">Mã loại</label>
                <input type="number" name="maloai" id="">
            </div>
            <input type="submit" value="Thêm mới" name="submit-btn">
            <!-- Khi người dùng ấn huỷ sẽ quay về trang index -->
            <a href="../index-product.php">
                <input type="button" value="Huỷ" name= "submit-btn" class="cancel">
            </a>
        </form>
    </div>
    
</body>

</html>