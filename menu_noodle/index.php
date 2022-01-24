<?php

require_once('connection.php');

if (isset($_REQUEST['delete_id'])) {
    $id = $_REQUEST['delete_id'];

    $select_stmt = $db->prepare('SELECT * FROM tbl_file WHERE id = :id');
    $select_stmt->bindParam(':id', $id);
    $select_stmt->execute();
    $row = $select_stmt->fetch(PDO::FETCH_ASSOC);
    unlink("upload/" . $row['image']); // unlin functoin permanently remove your file

    // delete an original record from db
    $delete_stmt = $db->prepare('DELETE FROM tbl_file WHERE id = :id');
    $delete_stmt->bindParam(':id', $id);
    $delete_stmt->execute();

    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Page</title>
    <link rel="stylesheet" href="index.css?v=<?php echo time(); ?>">

</head>

<body>
    <div class = "logout">
        <a href="../login/login.php">Logout</a>
        
    </div>
    <div class = "website">
        <a href="../index.php">go to website</a>
    </div>
    <div class="container">
        <h1>อาหาร</h1>
        <div class="bottonMenu">
            <a href="index.php">อาหาร</a>
            <a href="../menu_snack/index.php">ขนม</a>
            <a href="../menu_drink/index.php">น้ำดื่ม</a>
        </div>
        <div class="botton">
            <a href="add.php" class="bottonAdd">Add</a>
        </div>
        <table>
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Image</td>
                    <td>ราคาธรรมดา</td>
                    <td>ราคาพิเศษ</td>
                    <td>ราคาจัมโบ้</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </thead>

            <tbody>
                <?php
                $select_stmt = $db->prepare('SELECT * FROM tbl_file');
                $select_stmt->execute();

                while ($row = $select_stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><img src="upload/<?php echo $row['image']; ?>" width="100px" height="100px" alt=""></td>
                        <td> <?php
                                if ($row['priceone'] == null) {
                                    echo ('-');
                                } else {
                                    echo $row['priceone'];
                                } ?></td>
                        <td> <?php
                                if ($row['pricetwo'] == null) {
                                    echo ('-');
                                } else {
                                    echo $row['pricetwo'];
                                }
                                ?></td>
                        <td> <?php
                                if ($row['pricethree'] == null) {
                                    echo ('-');
                                } else {
                                    echo $row['pricethree'];
                                } ?></td>
                        <td><a href="edit.php?update_id=<?php echo $row['id']; ?>" class="bottonEdit">Edit</a></td>
                        <td><a href="?delete_id=<?php echo $row['id']; ?>" class="bottonDel">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>