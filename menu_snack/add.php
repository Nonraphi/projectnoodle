<?php 

    require_once('connection.php');

    if (isset($_REQUEST['btn_insert'])) {
        try {
            $name = $_REQUEST['txt_name'];
            $price = $_REQUEST['txt_price'];

            $image_file = $_FILES['txt_file']['name'];
            $type = $_FILES['txt_file']['type'];
            $size = $_FILES['txt_file']['size'];
            $temp = $_FILES['txt_file']['tmp_name'];

            $path = "upload/" . $image_file; // set upload folder path

            if (empty($name)) {
                $errorMsg = "Please Enter name";
            }
              else if (empty($image_file)) {
                $errorMsg = "please Select Image";
            } else if ($type == "image/jpg" || $type == 'image/jpeg' || $type == "image/png" || $type == "image/gif") {
                if (!file_exists($path)) { // check file not exist in your upload folder path
                    if ($size < 5000000) { // check file size 5MB
                        move_uploaded_file($temp, 'upload/'.$image_file); // move upload file temperory directory to your upload folder
                    } else {
                        $errorMsg = "Your file too large please upload 5MB size"; // error message file size larger than 5mb
                    }
                } else {
                    $errorMsg = "File already exists... Check upload filder"; // error message file not exists your upload folder path
                }
            } else {
                $errorMsg = "Upload JPG, JPEG, PNG & GIF file formate...";
            }

            if (!isset($errorMsg)) {
                $insert_stmt = $db->prepare('INSERT INTO tbl_file(name, image, price) VALUES (:fname, :fimage, :fprice)');
                $insert_stmt->bindParam(':fname', $name);
                $insert_stmt->bindParam(':fimage', $image_file);
                $insert_stmt->bindParam(':fprice', $price);

                if ($insert_stmt->execute()) {
                    $insertMsg = "File Uploaded successfully...";
                    header('refresh:2;index.php');
                }
            }

        } catch(PDOException $e) {
            $e->getMessage();
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page</title>

    <link rel="stylesheet" href="add.css">
</head>
<body>
    

    <div class="container">
        <h1>Insert file page</h1>
        <?php 
            if(isset($errorMsg)) {
        ?>
            <div class="danger">
                <strong><?php echo $errorMsg; ?></strong>
            </div>
        <?php } ?>

        <?php 
            if(isset($insertMsg)) {
        ?>
            <div class="success">
                <strong><?php echo $insertMsg; ?></strong>
            </div>
        <?php } ?>

        <form action="" method="post" class="form-inline" enctype="multipart/form-data">
        <div class="form-group">
            <div class="row">
            <label for="name">Name</label>
            <div class="textAll">
                <input type="text" name="txt_name" class="form-control" placeholder="Enter name">
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <label for="name" >ราคา</label>
            <div class="textAll">
                <input type="text" name="txt_price" class="form-control" placeholder="Enter price">
            </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
            <label for="name" >File</label>
            <div class="textAll">
                <input type="file" name="txt_file" class="form-control">
            </div>
            </div>
        </div>
        <div class="botton">
            <div class="bottonIn">
                <input type="submit" name="btn_insert" value="Insert">
                <a href="index.php">Cancel</a>
            </div>
        </div>
    </form>
    </div>

  
</body>
</html>