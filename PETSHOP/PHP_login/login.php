<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập</title>
    <link rel="stylesheet" href="style_login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Itim|Lobster|Montserrat:500|Noto+Serif|Nunito|Patrick+Hand|Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i|Roboto+Slab|Saira" rel="stylesheet">
</head>
<body>
    <form>
        <div class="form_dangki">
            <div class="form">
                <form action ="<?php echo $_SERVER['PHP_SELF']?>" method = "post">
                    <div class = "header">
                        <img src="logo.png" alt ="logo_brand">
                        <h2><p>Đăng nhập</p></h2>
                    </div>
                    <div class = "body_form">
                        <div class = "username">
                            <label>Tên đăng nhập</label>
                            <input type="text" name="hoten" value = "username"><br>
                        </div>
                        <div class = "password">
                            <label>Mật khẩu</label>
                            <input type="password" name="password" value = "password"><br>
                        </div>
                    </div>
                    <div class = "footer_form">
                        <input id="submit" type="submit" name="submit" value="Đăng Nhập">
                    </div>
                </form>
            </div>				
        </div>
    </form>

</body>
</html>