<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ก๋วยเตี๋ยวเจ๊หน่อย</title>
    <link rel="icon" type="image/png" href="../image/logo project.png" />
    <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- header section start -->

    <header>
        
        <nav>
            <div class="logo"><a href="../index/jnoi.html"><img src="../image/logo project.png" ></a></div>
            <ul id="js-menu">
                <li><a href="../index.php">หน้าแรก</a></li>
                <li><a href="../menu_noodle/noodle.php">เมนูอาหาร</a></li>
                <li><a href="../menu_snack/snack.php">ขนม</a></li>
                <li><a href="../menu_drink/drink.php">เครื่องดื่ม</a></li>
                <li class="about"><a href="../about/about.php">เกี่ยวกับร้าน</a></li>
            </ul>
            <span class="toggle" id="js-toggle" style="padding-left: 6px; "><i class="fas fa-bars"></i></span>
        </nav>
    </header>

    <!-- header section start -->

    <!-- body section start-->
    <section>
        <div class="heading">
            <p>เกี่ยวกับร้าน</p>
        </div>

        <div class="box-about">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1912.4231694592038!2d104.70504586339152!3d16.53385342225298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313dc73439667e0f%3A0x456f845bc9babb3!2z4LiB4LmL4Lin4Lii4LmA4LiV4Li14LmL4Lii4Lin4LmA4LiI4LmK4Lir4LiZ4LmI4Lit4Lii4Lir4Lil4Lix4LiH4LmC4LiB4Lil4Lia4Lit4Lil!5e0!3m2!1sth!2sth!4v1643014171607!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="about-content">
                <div class="about-content-info">
                    <i class="fas fa-map-marker-alt"></i>
                    <p>   15 ถนนวิทยคุณ ตำบลมุกดาหาร อำเภอเมือง จังหวัดมุกดาหาร 49000</p>
                </div>
                <div class="about-content-info">
                    <i class="fas fa-phone-alt"></i>
                    <p>082-1020818</p>
                </div>
                <div class="about-content-info">
                    <i class="fas fa-envelope-open"></i>
                    <p>j.dai254725@gmail.com</p>
                </div>
                <div class="about-content-info">
                    <i class="fas fa-clock"></i>
                    <p>เปิด 07.00 A.M. - 15.00 P.M.</p>
                </div>
                <div class="about-content-info">
                    <i class="fas fa-table"></i>
                    <p>ปิดทุกๆวันจันทร์</p>
                </div>
            </div>
        </div>
    </section>

    <!-- body section end-->

    <!-- footer section start-->
    <footer>
        <p>Copyright © 2021 All Right Reserved.</p>
        <a href="../login/login.php">Admin only</a>
    </footer>

    <!-- footer section end-->
    
    <script src="about.js"></script>
</body>

</html>