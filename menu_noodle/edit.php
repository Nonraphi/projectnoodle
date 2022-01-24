<?php

require_once('connection.php');

if (isset($_REQUEST['update_id'])) {
    try {
        $id = $_REQUEST['update_id'];
        $select_stmt = $db->prepare('SELECT * FROM tbl_file WHERE id = :id');
        $select_stmt->bindParam(":id", $id);
        $select_stmt->execute();
        $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
        extract($row);
    } catch (PDOException $e) {
        $e->getMessage();
    }
}

if (isset($_REQUEST['btn_update'])) {
    try {

        $name = $_REQUEST['txt_name'];
        $priceone = $_REQUEST['txt_priceone'];
        $pricetwo = $_REQUEST['txt_pricetwo'];
        $pricethree = $_REQUEST['txt_pricethree'];

        $image_file = $_FILES['txt_file']['name'];
        $type = $_FILES['txt_file']['type'];
        $size = $_FILES['txt_file']['size'];
        $temp = $_FILES['txt_file']['tmp_name'];

        $path = "upload/" . $image_file;
        $directory = "upload/"; 

        if (empty($name)) {
            $errorMsg = "Please Enter name";
        }
        if ($image_file) {
            if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
                if (!file_exists($path)) { 
                    if ($size < 5000000) { 
                        unlink($directory . $row['image']); 
                        move_uploaded_file($temp, 'upload/' . $image_file); 
                    } else {
                        $errorMsg = "Your file to large please upload 5MB size";
                    }
                } else {
                    $errorMsg = "File already exists... Check upload folder";
                }
            } else {
                $errorMsg = "Upload JPG, JPEG, PNG & GIF formats...";
            }
        } else {
            $image_file = $row['image']; 
        }

        if (!isset($errorMsg)) {
            $update_stmt = $db->prepare("UPDATE tbl_file SET name = :name_up, image = :file_up, priceone = :priceone_up, pricetwo = :pricetwo_up, pricethree = :pricethree_up WHERE id = :id");
            $update_stmt->bindParam(':name_up', $name);
            $update_stmt->bindParam(':file_up', $image_file);
            $update_stmt->bindParam(':priceone_up', $priceone);
            $update_stmt->bindParam(':pricetwo_up', $pricetwo);
            $update_stmt->bindParam(':pricethree_up', $pricethree);
            $update_stmt->bindParam(':id', $id);

            if ($update_stmt->execute()) {
                $updateMsg = "File update successfully...";
                header("refresh:2;index.php");
            }
        }
    } catch (PDOException $e) {
        $e->getMessage();
    }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>

    <link rel="stylesheet" href="edit.css">
</head>

<body>


    <div class="container">
        <h1>Edit file page</h1>
        <?php
        if (isset($errorMsg)) {
        ?>
            <div class="danger">
                <strong><?php echo $errorMsg; ?></strong>
            </div>
        <?php } ?>

        <?php
        if (isset($updateMsg)) {
        ?>
            <div class="success">
                <strong><?php echo $updateMsg; ?></strong>
            </div>
        <?php } ?>

        <form action="" method="post" class="form-inline" enctype="multipart/form-data">
            <div class="form-group">
                <div class="row">
                    <label for="name">Name</label>
                    <div class="textAll">
                        <input type="text" name="txt_name" class="form-control" value="<?php echo $name; ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label for="name">ราคาธรรมดา</label>
                    <div class="textAll">
                        <input type="text" name="txt_priceone" class="form-control" value="<?php
                                                                                            if ($row['priceone'] == null) {
                                                                                                echo ('-');
                                                                                            } else {
                                                                                                echo $row['priceone'];
                                                                                            } ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label for="name">ราคาพิเศษ</label>
                    <div class="textAll">
                        <input type="text" name="txt_pricetwo" class="form-control" value="<?php
                                                                                            if ($row['pricetwo'] == null) {
                                                                                                echo ('-');
                                                                                            } else {
                                                                                                echo $row['pricetwo'];
                                                                                            } ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label for="name">ราคาจัมโบ้</label>
                    <div class="textAll">
                        <input type="text" name="txt_pricethree" class="form-control" value="<?php
                                                                                                if ($row['pricethree'] == null) {
                                                                                                    echo ('-');
                                                                                                } else {
                                                                                                    echo $row['pricethree'];
                                                                                                } ?>">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <label for="name">File</label>
                    <div class="textAll">
                        <input type="file" name="txt_file" class="form-control" value="<?php echo $image; ?>">
                        <p>
                            <img src="upload/<?php echo $image; ?>" height="100" width="100" alt="">
                        </p>
                    </div>
                </div>
            </div>
            <div class="botton">
                <div class="bottonIn">
                    <input type="submit" name="btn_update" value="Update">
                    <a href="index.php">Cancel</a>
                </div>
            </div>
        </form>
    </div>

    
</body>

</html>