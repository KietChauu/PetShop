<?php
    require "inc/header.php"
?>
<link rel="stylesheet" href="Style/style_maincart.css">
        <div id = "body">
            <div class = "head_body">
                <div class = "border"></div>
                <div class = "nav_body"> 
                    <ul class = ul_body>
                        <li><a href="index.php" target="_self">Home</a></li>
                        <li><a href="about.php" target="_self">About</a></li>
                        <li><a href="products.php" target="_self">Product</a></li>
                        <li><a href="contact.php" target="_self">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class = "topic">
            <p id = "p1">Home</p>
            <p id = "p2">/</p>
            <p id = "p3">Main Cart</p>
        </div>
        <div class = "maincart"><p>Main Cart</p></div>
        <div id = "div1">
            <div id = "col1">
                <div class = "col_name1"><p>Remove</p></div>
                <div class = "icon_trash1"><i class="fa-solid fa-trash"></i></div>
                <div class = "icon_trash2"><i class="fa-solid fa-trash"></i></div>
            </div>
            <div id = "col2">
                <div class = "col_name2">Product image</div>
                <div class="Product_image"><img src="image/FOOD/detail_product/1/WhiskasOceanFishAdultDryCatFood_f5bbf1f9-31dd-433e-99bd-00582d979f60.webp" alt ="logo_brand"></div>
                <div class="Product_image"><img src="image/FOOD/detail_product/1/WhiskasOceanFishAdultDryCatFood_f5bbf1f9-31dd-433e-99bd-00582d979f60.webp" alt ="logo_brand"></div>
            </div>
            <div id = "col3">
                <div class = "col_name3">Product Detail</div>
                <div class = "Product_Detail">
                    <p id = "p_1">Harry Potter Lounger Bed - Welcome to Hogwarts Dog Beg</p>
                    <p id = "p_2">200.000 đ</p>
                </div>
                <div class = "Product_Detail">
                    <p id = "p_1">Harry Potter Lounger Bed - Welcome to Hogwarts Dog Beg</p>
                    <p id = "p_2">200.000 đ</p>
                </div>
            </div>
            <div id = "col4">
                <div class = "col_name4">Quantity</div>
                <div class = "quantity">
                    <div class = "minus"><p>-</p></div>
                    <div class="main_quantity"><p>1</p></div>
                    <div class = "plus"><p>+</p></div>
                </div>
                <div class = "quantity">
                    <div class = "minus"><p>-</p></div>
                    <div class="main_quantity"><p>1</p></div>
                    <div class = "plus"><p>+</p></div>
                </div>
            </div>
            <div>
                <div class = "col_name5">Total</div>
                <div class = "price">
                    <p>200.000 đ</p>
                </div>
                <div class = "price">
                    <p>200.000 đ</p>
                </div>
            </div>
        </div>
        <div id = "div2">
            <div id = "left">
                <p>Special instructions for seller</p>
                <input type="text" name="gift_text">
            </div>
            <div id = "right">
                <div class = "top_text">
                    <p class = "subtotal">SubTotal</p>
                    <p class = "vnd">200.000 đ</p>
                </div>
                <div class = "mid_text"><p class = "p_mid_text">Taxes and shipping calculated at checkout</p></div>
                <div class = "sub_button">
                    <p id = "Checkout">Check out</p>
                    <p id = "Continue_Shopping">Continue Shopping</p>
                </div>
            </div>
        </div>
        <div id = "div3">
            <div class = "left_form">
                <form class = "left_form1">
                    <input type="checkbox" id="Gift" name="Gift" value="Gift">
                    <label for="Gift">Do you want a gift wrap? Only 20.000 đ</label><br>
                </form>
                <div class = "content_under_the_form">
                    <div class = "icon_and_text">
                        <i class="fa-solid fa-gift"></i>
                        <p class = "icon_and_text_p">Gift message (free and optional)</p>
                    </div>
                    <div class="text_box_bottom">                    
                        <input type="text" id="text_box_bottom" nameC="" value="" placeholder="">
                    </div>
                </div>
            </div>
            <div class = "right_form">
                <p class = "p2_right_form_content">Enter coupon or discount code </p>
                <div class = "right_form_content">
                    <input type="text" id="Coupon Code" name="Coupon Code" value="Coupon Code" placeholder="Coupon Code">
                    <p class = "p1_right_form_content">Apply</p>
                </div>
            </div>
        </div>
        <div id = "div4">
            <form id = "shipping_form">
                <p class = "top_p">Shipping</p>
                <label for="hoten">Họ Tên:</label><br>
                <input type="text" id="hoten" name="hoten"><br>
                <label for="diachi">Địa chỉ:</label><br>
                <input type="text" id="diachi" name="diachi"><br>
                <label for="sdt">Số Điện Thoại:</label><br>
                <input type="text" id="sdt" name="sdt"><br>
                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email">
                <p class = "the_last_p"><strong>Shipping</strong></p>
            </form>
        </div>
        <?php
            require "inc/footer.php"
        ?>
</body>
</html>