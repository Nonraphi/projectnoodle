<?php

require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>ก๋วยเตี๋ยวหลังโกลบอล</title>
   <link rel="icon" type="image/png" href="../image/logo project.png" />
   <link rel="stylesheet" href="snack.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body id="top">

    <!-- header section start -->

    <header>
        
        <nav>
            <div class="logo"><a href="../index/jnoi.html"><img src="../image/logo project.png"></a></div>
            <ul id="js-menu">
                <li><a href="../index.php">หน้าแรก</a></li>
                <li><a href="../menu_noodle/noodle.php">เมนูอาหาร</a></li>
                <li class = "snack"><a href="../menu_snack/snack.php">ขนม</a></li>
                <li><a href="../menu_drink/drink.php">เครื่องดื่ม</a></li>
                <li><a href="../about/about.php">เกี่ยวกับร้าน</a></li>
            </ul>
            <span class="toggle" id="js-toggle" style="padding-left: 6px; "><i class="fas fa-bars"></i></span>
        </nav>
    </header>

    <!-- header section start -->

    <!-- body section start-->
    <section>
        <div class="heading">
            <p>ขนมหวาน</p>
        </div>
        <div class="menu_container">
            <?php
            $select_stmt = $db->prepare('SELECT * FROM tbl_file');
            $select_stmt->execute();
            while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <div class="grid-menu"  data-aos="zoom-in">
                    <img src="upload/<?php echo $row['image']; ?>" alt="">
                    <h3><?php echo $row['name']; ?></h3>
                    <p>ราคา <?php
                                if ($row['price'] == null) {
                                    echo ('-');
                                } else {
                                    echo $row['price'];
                                } ?> บาท</p>
                </div>
                <?php } ?>
        </div>
    </section>
    <!-- body section end-->

    <!-- footer section start-->
    <footer>
        <p>Copyright © 2021 All Right Reserved.</p>
        <a href="#top">กลับไปด้านบน</a>
    </footer>
    <!-- footer section end-->
    
    <script src="snack.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
      </script>
</body>

</html>