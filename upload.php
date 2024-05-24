<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>狗狗py | Upload</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />

  <?php
   session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 檢查所有字段是否都被填寫
    $gamename = $_POST['gname'] ?? '';
    $price = $_POST['price'] ?? '';
    $link = $_POST['link'] ?? '';
    $description = $_POST['des'] ?? '';

    if (!empty($gamename) && !empty($price) && !empty($link) && !empty($description)) {
      include "database_connection.php";
      $stmt = $db->prepare("INSERT INTO items (name, price, pic, description, ID) VALUES (:name, :price, :pic, :description, :ID)");
      if ($stmt) {
        // 將參數綁定到 prepared statement
        $stmt->bindValue(':name', $gamename);
        $stmt->bindValue(':price', $price);
        $stmt->bindValue(':pic', $link);
        $stmt->bindValue(':description', $description);
        $stmt->bindParam(':ID', $_SESSION['ID']);

        // 執行 SQL 語句
        if ($stmt->execute()) {
          echo "資料插入成功！";
        } else {
          echo "資料插入失敗！";
        }
      } else {
        echo "準備 SQL 語句失敗！";
      }
    } else {
      echo "請填寫所有字段！";
    }
  }
  ?>
</head>

<body class="sub_page">
  <div class="hero_area ">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="gogo.php">
            <img src="images/logo.png" alt="">
          </a>
          <div class="" id="">
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
          </div>
        </nav>
      </div>
    </header>
  </div>

  <section class="contact_section layout_padding-top">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-5 offset-md-1">
          <div class="form_container">
            <div class="heading_container">
              <img src="images/heading-img.png" alt="">
              <h2>上架你的遊戲！</h2>
              <p>資料要寫清楚</p>
            </div>
            <form action="upload.php" method="POST">
              <div>
                <input type="text" placeholder="遊戲名稱" name="gname" />
              </div>
              <div>
                <input type="text" placeholder="價格(NTD)" name="price" />
              </div>
              <div>
                <input type="text" placeholder="圖片的連結" name="link" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="遊戲描述" name="des" />
              </div>
              <div class="d-flex ">
                <button type="submit">填寫完成！</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 px-0">
          <div class="map_container">
            <div class="map-responsive">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="container-fluid footer_section ">
    <p>&copy; 2019 All Rights Reserved. Design by <a href="https://html.design/">Free Html Templates</a></p>
  </section>

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
