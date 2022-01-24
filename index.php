<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ก๋วยเตี๋ยวเจ๊หน่อย</title>
    <link rel="icon" type="image/png" href="./image/logo project.png" />
    <link rel="stylesheet" href="./jnoi/jnoi.css?v=<?php echo time(); ?>">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
      integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
  </head>

  <body>
    <!-- header section start -->

    <header>
      <nav>
        <div class="logo">
          <a href="../index/jnoi.html"
            ><img src="./image/logo project.png"
          /></a>
        </div>
        <ul id="js-menu">
          <li class="menu"><a href="../index.php">หน้าแรก</a></li>
          <li><a href="./menu_noodle/noodle.php">เมนูอาหาร</a></li>
          <li><a href="./menu_snack/snack.php">ขนม</a></li>
          <li><a href="./menu_drink/drink.php">เครื่องดื่ม</a></li>
          <li><a href="./about/about.php">เกี่ยวกับร้าน</a></li>
        </ul>
        <span class="toggle" id="js-toggle" style="padding-left: 6px"
          ><i class="fas fa-bars"></i
        ></span>
      </nav>
    </header>

    <!-- header section start -->

    <!-- body section start-->
    <section>
        <marquee direction="left" 
        ><i class="fas fa-bullhorn"></i>ประกาศ
        สูตรก๋วยเตี๋ยวของทางร้านเป็นสูตรมีพริกลูกค้าท่านใดที่ไม่ต้องการ
        กรุณแจ้งพนักงาน</marquee>
      <div class="slider">
        <div class="slide_viewer">
          <div class="slide_group">
            <div class="slide">
              <img
                src="./image/slide1.png"
                alt=""
              />
            </div>
            <div class="slide">
              <img src="./image/slide2.png" alt="" />
            </div>
            <div class="slide">
              <img
                src="./image/slide3.png"
                alt=""
              />
            </div>
            <div class="slide">
              <img
                src="./image/slide4.png"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
      <div class="slide_buttons"></div>

      <div class="heading">
        <p>เมนูแนะนำ</p>
      </div>

      <div class="hits_menu">
        <div class="grid_menuhits">
          <img
            src="https://img.wongnai.com/p/1920x0/2019/03/17/abef3072f4924196a2ae1d06f5c948ed.jpg"
            alt=""
          />
          <h3>ก๋วยเตี๋ยว</h3>
          <p>ธรรมดา 35 บาท</p>
          <p>พิเศษ 35 บาท</p>
          <p>จัมโบ้ 35 บาท</p>
        </div>
        <div class="grid_menuhits">
          <img
            src="https://img.wongnai.com/p/1920x0/2019/03/17/abef3072f4924196a2ae1d06f5c948ed.jpg"
            alt=""
          />
          <h3>ก๋วยเตี๋ยว</h3>
          <p>ธรรมดา 35 บาท</p>
          <p>พิเศษ 35 บาท</p>
          <p>จัมโบ้ 35 บาท</p>
        </div>
        <div class="grid_menuhits">
          <img
            src="https://img.wongnai.com/p/1920x0/2019/03/17/abef3072f4924196a2ae1d06f5c948ed.jpg"
            alt=""
          />
          <h3>ก๋วยเตี๋ยว</h3>
          <p>ธรรมดา 35 บาท</p>
          <p>พิเศษ 35 บาท</p>
          <p>จัมโบ้ 35 บาท</p>
        </div>
      </div>
    </section>
    <!-- body section end-->

    <!-- footer section start-->
    <footer>
      <p>Copyright © 2021 All Right Reserved.</p>
      <a href="#top">กลับไปด้านบน</a>
    </footer>
    <!-- footer section end-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="./jnoi/jnoi.js"></script>
  </body>
</html>
