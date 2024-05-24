<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>狗狗py | Home</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <?php
    session_start();
  ?>
</head>

<body>
  <div class="hero_area ">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="gogo.php">
            <img src="images/pinkcock.png" alt="">
          </a>
          <div class="" id="">
            <div class="User_option">
              <form class="form-inline my-2  mb-3 mb-lg-0">
                <input type="search" placeholder="Search">
                <button class="btn   my-sm-0 nav_search-btn" type="submit"></button>
              </form>
            </div>

            <div class="custom_menu-btn">
              <button onclick="openNav()">
                <span class="s-1">

                </span>
                <span class="s-2">

                </span>
                <span class="s-3">

                </span>
              </button>
            </div>
            <div id="myNav" class="overlay">
              <div class="overlay-content">
                <a href="gogo.php">Home</a>
                <a href="shop.php">Shop</a>
                <a href="upload.php">Upload games</a>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        
                      </h5>
                    </div>
                    <h1>
                      歡迎歡迎 <br>
                      <span>
                        狗狗商城
                      </span>
                    </h1>
                    <p>
                      快去買點遊戲！
                    </p>
                    <div class="btn-box">
                      <a  class="btn-1">
                        你好，
                        <?php
                          
                          echo $_SESSION['username'];
                        ?>
                      </a>
                      <a href="index.php" class="btn-2">
                        馬上登出
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/pg1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        
                      </h5>
                    </div>
                    <h1>
                      歡迎歡迎 <br>
                      <span>
                        狗狗商城
                      </span>
                    </h1>
                    <p>
                      右上角！三條線
                    </p>
                    <div class="btn-box">
                      <a  class="btn-1">
                      哈嘍，
                      <?php
                          
                          echo $_SESSION['username'];
                        ?>
                      </a>
                      <a href="index.php" class="btn-2">
                        馬上登出
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/pg1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        
                      </h5>
                    </div>
                    <h1>
                      歡迎歡迎 <br>
                      <span>
                      狗狗商城
                      </span>
                    </h1>
                    <p>
                      去點開右上角！
                    </p>
                    <div class="btn-box">
                      <a  class="btn-1">
                      嗨～
                      <?php
                          
                          echo $_SESSION['username'];
                        ?>
                      </a>
                      <a href="index.php" class="btn-2">
                        馬上登出
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/pg1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-5 offset-md-1">
                  <div class="detail-box">
                    <div class="number">
                      <h5>
                        
                      </h5>
                    </div>
                    <h1>
                      歡迎歡迎 <br>
                      <span>
                        狗狗商城
                      </span>
                    </h1>
                    <p>
                      你要買了嗎？
                    </p>
                    <div class="btn-box">
                      <a  class="btn-1">
                      嘿！
                      <?php
                          
                          echo $_SESSION['username'];
                        ?>
                      </a>
                      <a href="index.php" class="btn-2">
                        馬上登出
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="images/pg1.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="detail-box">
        <div class="heading_container">
          <img src="images/esokissRicardo.gif" alt="">
          <h2>
            關於此網站
          </h2>
        </div>
        <p>
          看了我的網站，我打賭你會去洗手間。
        </p>
        <div class="btn-box">
          <a href="">
            <span>
              Read More
            </span>
            <img src="images/link-arrow.png" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- animal section -->

  <section class="animal_section layout_padding">
    <div class="container">
      <div class="animal_container">
        <div class="box b1">
          <div class="img-box">
            <img src="images/ps5.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              PS5
            </h5>
            <p>
              本機為PS4的後續機型，是第九世代 遊戲機之一。
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/xbox.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Xbox

            </h5>
            <p>
              Xbox Series X與Xbox Series S是微軟於2020年11月10日推出的第九世代家用電子遊戲機。
            </p>
          </div>
        </div>
        <div class="box b1">
          <div class="img-box">
            <img src="images/ns.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              NS
            </h5>
            <p>
              任天堂Switch，是日本任天堂公司出品的電子遊戲機。
            </p>
          </div>
        </div>
        <div class="box b2">
          <div class="img-box">
            <img src="images/pc.jpg" alt="">
          </div>
          <div class="detail-box">
            <h5>
              PC
            </h5>
            <p>
              就是個人電腦。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end animal section -->

  <!-- pet section -->

  <section class="pet_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/gg.jpg" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <img src="images/esokissRicardo.gif" alt="">
              <h2>
                來買遊戲，然後玩它。
              </h2>
            </div>
            <p>
              提供各式各樣的主機平台上的熱門遊戲，快點買，回家玩！
            </p>
            <div class="btn-box">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="images/link-arrow.png" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  

  

  
  
  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <div class="info_contact">
            <h5>
              CONTACT INFO
            </h5>
            <div>
              <img src="images/call.png" alt="" />
              <p>
                1919810 114514
              </p>
            </div>
            <div>
              <img src="images/mail.png" alt="" />
              <p>
                cbb111209@nptu.edu.tw
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_time">
            <h5>
              Opening Hours Shop
            </h5>
            <div>
              <p>
                Everyday
              </p>
            </div>
            <div>
              <p>
                24Hours
              </p>
            </div>
          </div>
        </div>

        <div class="col-md-6 col-lg-3">
          <div class="info_social">
            <h5>
              social media
            </h5>
            <div class="social_container">
              <div>
                <a href="">
                  <img src="images/fb.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/twitter.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/linkedin.png" alt="" />
                </a>
              </div>
              <div>
                <a href="">
                  <img src="images/instagram.png" alt="" />
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="info_form pl-lg-4">
            <h5>
              Newsletter
            </h5>
            <form action="">
              <input type="text" placeholder="Enter Your Email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->




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