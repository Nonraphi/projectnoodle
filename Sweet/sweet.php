<?php

require_once('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ก๋วยเตี๋ยวเจ๊หน่อย</title>
    <link rel="stylesheet" href="sweet.css">
</head>

<body>

    <!-- header section start -->

    <header class="header">
        <a href="../index/jnoi_index.html" class="logo"><img src="J2J-1.jpg"></a>

        <ul class="navbar">
            <li><a href="../index/jnoi_index.html">หน้าแรก</a></li>
            <li><a href="../menu_noodle/noodle.html">เมนูก๋วยเตี๋ยว</a></li>
            <li><a href="#" class="menu-dropdown">เมนูอื่นๆ</a>
                <ul>
                    <li><a href="../menu_drink/drink.html" class="menu-other">เครื่องดื่ม</a></li>
                    <li><a href="../menu_snack/snack.html" class="menu-other">ขนมหวาน</a></li>
                </ul>
            </li>
            <li><a href="../about/about.html">เกี่ยวกับร้าน</a></li>
        </ul>

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

                <div class="grid-menu">
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

</body>

</html>