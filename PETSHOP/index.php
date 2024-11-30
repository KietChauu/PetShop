<?php
    require "inc/header.php"
?>
<link rel="stylesheet" href="Style/style_home.css">
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
            <div class = "body_banner">
                <img src="image/BANNER/banner.jpg" alt ="Banner">
            </div>
        </div>
        <div class = "mid_body">
            <div class = "body_logo">
                <img src="image/LOGO/logo.png" alt ="logo_brand">
            </div>
            <div class = "mid_body_text">
                <p>Shop By Categories</p>
            </div>
            <div class = "mid_body_content">
                <ul id = "ul_pics">
                    <li><img src="image/ANIMALS_PIC/1.jpg" alt ="pic1"><p>Cat Food</p></li>
                    <li><img src="image/ANIMALS_PIC/2.jpg" alt ="pic2"><p>Bird Food</p></li>
                    <li><img src="image/ANIMALS_PIC/3.jpg" alt ="pic3"><p>Dog Food</p></li>
                    <li><img src="image/ANIMALS_PIC/4.jpg" alt ="pic4"><p>Hamster Food</p></li>
                    <li><img src="image/ANIMALS_PIC/5.jpg" alt ="pic5"><p>Rabbit Food</p></li>
                </ul>
            </div>
        </div>
    </div>
    <div class ="pic_ads">
        <div class ="pic_ads1">
            <img src="image/FOOD/Banded Pet Accessories/1 (2).png" alt ="pic3">
        </div>
        <div class ="pic_ads2">
            <img src="image/FOOD/Banded Pet Accessories/3.png" alt ="pic3">
            <img src="image/FOOD/Banded Pet Accessories/2.png" alt ="pic3">
        </div>
        <div class ="pic_ads3">
            <img src="image/FOOD/Banded Pet Accessories/4.png" alt ="pic3">
        </div>
    </div>
    <?php
        require "inc/footer.php"
    ?>
</body>
</html>