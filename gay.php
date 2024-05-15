<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>狗狗py | Shop</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <style>

div{
  width: 1000px;
  height: 500px;
  border:5px solid gray;
  background-image: url("images/esog.png");
}
        /* 商品外容器 */
.product_box {
    border: 1px solid #ccc;
    padding: 20px;
    margin-bottom: 20px;
    background-color: #fff;
}

/* 商品圖片 */
.product_box img {
    width: 100%;
    height: auto;
    margin-bottom: 10px;
}

/* 商品名稱 */
.product_box h4 {
    font-size: 18px;
    margin-bottom: 10px;
}

/* 價格 */
.product_box .price {
    font-size: 16px;
    color: #f00; /* 改變價格顏色，這裡設為紅色 */
    margin-bottom: 10px;
}

/* 商品描述 */
.product_box p {
    font-size: 14px;
    line-height: 1.5;
    margin-bottom: 10px;
}

/* 按鈕容器 */
.btn-box {
    text-align: center;
}

/* 加入購物車按鈕 */
.btn-box button {
    background-color: #E6D14C; /* 深黃色 */
    color: #fff; /* 文字顏色 */
    border: none;
    padding: 8px 20px;
    font-size: 14px;
    cursor: pointer;
    transition: background-color 0.6s ease; /* 背景色漸變效果 */
}

.btn-box button:hover {
    background-color: #E6B800; /* 滑鼠懸停時的較深黃色 */
}

    </style>
    <?php
    include "database_connection.php";
    session_start();
    ?>

</head>

<body class="sub_page">
    <div class="hero_area">
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container">
                    <a class="navbar-brand" href="gogo.html">
                        <img src="images/logo.png" alt="">
                    </a>
                    <div class="User_option">
                        <form class="form-inline my-2  mb-3 mb-lg-0">
                            <input type="search" placeholder="Search">
                            <button class="btn my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                    <div class="custom_menu-btn">
                        <button onclick="openNav()">
                            <span class="s-1"></span>
                            <span class="s-2"></span>
                            <span class="s-3"></span>
                        </button>
                    </div>
                    <div id="myNav" class="overlay">
                        <div class="overlay-content">
                            <a href="gogo.html">Home</a>
                            <a href="shop.php">Shop</a>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>

    <section class="about_section layout_padding">
        <div></div>
    </section>
    
    <section class="about_section layout_padding">
        <div class="container">
            <div class="detail-box">
              <div class="heading_container">
                <a href="shoping_car.php"> <!-- 加入這一行 -->
                  <img src="images/heading-img.png" alt="">
                  </a> <!-- 到這一行 -->
                <h2> ⬈點狗狗進入購物車車 ⬉</h2>
              </div>


    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script>
        function openNav() {
            document.getElementById("myNav").classList.toggle("menu_width")
            document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
        }
    </script>
</body>

</html>