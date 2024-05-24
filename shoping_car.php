<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>狗狗py | Shoping cart</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <style>
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

        /* 按鈕容器 */
        .btn-box {
            text-align: center;
        }

        /* 刪除商品按鈕 */
        .btn-box button {
            background-color: #f00; /* 紅色 */
            color: #fff; /* 文字顏色 */
            border: none;
            padding: 8px 20px;
            font-size: 14px;
            cursor: pointer;
            transition: background-color 0.6s ease; /* 背景色漸變效果 */
        }

        .btn-box button:hover {
            background-color: #cc0000; /* 深紅色 */
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
                        <img src="images/pinkcock.png" alt="">
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
                            <a href="gogo.php">Home</a>
                            <a href="shop.php">Shop</a>
                            <a href="upload.php">Upload game</a>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>

    <section class="about_section layout_padding">
        <div class="container">
            <div class="detail-box">
                <div class="heading_container">
                    <a href="shop.php">
                        <img src="images/esokissRicardo.gif" alt="">
                    </a>
                    <h2> ⬈點狗狗進入商店頁面 ⬉</h2>
                </div>
                <div class="heading_container">
                    <a href="gay.php">
                        <img src="images/esokissRicardo.gif" alt="">
                    </a>
                    <h2> ⬈點狗狗就幫你結帳！ ⬉</h2>
                </div>
                <p>瀏覽你的購物清單</p>
                <div class="row">
                    <?php
                    try {
                        $sql = "SELECT * FROM items t1
                                JOIN shoping_car t2 ON t1.item_id=t2.item_id
                                WHERE t2.ID=:ID";

                        $stmt = $db->prepare($sql);
                        $stmt->bindParam(':ID', $_SESSION['user_id']);
                        $stmt->execute();
                        if ($stmt->rowCount() > 0) {
                            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                echo '<div class="col-md-4">';
                                echo '<div class="product_box">';
                                echo '<img src="' . $row['pic'] . '">';
                                echo '<h4>' . $row['name'] . '</h4>';
                                echo '<p class="price">NT ' . $row['price'] . '元</p>';
                                echo '<div class="btn-box">';
                                echo "<form action='delete_item.php' method='post'><input name='delete_item_id' value=" . $row['item_id'] . " type='hidden'>";
                                echo '<button type="submit" name="delete_item" value="true">刪除這個商品</button></form>';
                                echo '</div>';
                                echo '</div>';
                                echo '</div>';
                            }
                        } else {
                            echo "<p>No results found</p>";
                        }
                    } catch (PDOException $e) {
                        echo "<p>Query failed: " . $e->getMessage() . "</p>";
                    }
                    ?>
                </div>
            </div>

            <div class="container">
            <div class="detail-box">
                <div class="heading_container">
                    <a href="shop.php">
                        <img src="images/esokissRicardo.gif" alt="">
                    </a>
                    <h2> ⬈點狗狗進入商店頁面 ⬉</h2>
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