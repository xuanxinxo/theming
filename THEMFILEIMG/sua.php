<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sua</title>
</head>
<?php $id = $_GET["id"] ?>
<form action="" method="POST" enctype="Multipart/form-data">
    <table>
        <tr>
            <td> Nhập tên sản phẩm:</td>
            <td><input type="text" name="ten" value="<?php echo $_SESSION["traicay1"][$id]["ten"] ?>"></td>
        </tr>
        <tr>
            <td> Giá sản phẩm:</td>
            <td><input type="number" name="gia" value="<?php echo $_SESSION["traicay1"][$id]["gia"] ?>"></td>
        </tr>
        <tr>
            <td> Mô tả:</td>
            <td><input type="text" name="mota" value="<?php echo $_SESSION["traicay1"][$id]["mota"] ?>"></td>
        </tr>
    </table>
    Hinh ảnh:
    <input type="File" name="file_up" value="upload">
    <input type="submit" name="btn-sub" value="upload file">


</form>

<body>
    <?php
    if (isset($_POST["btn-sub"])) {
        if (isset($_FILES["file_up"])) {
            $file = $_FILES["file_up"];
            $tenfile = $file["name"];
            move_uploaded_file($file["tmp_name"], $tenfile);
            if (isset($_SESSION["traicay1"])) { {
                    $_SESSION["traicay1"][$id]["ten"] = $_POST["ten"];
                    $_SESSION["traicay1"][$id]["gia"] = $_POST["gia"];
                    $_SESSION["traicay1"][$id]["mota"] = $_POST["mota"];
                    $_SESSION["traicay1"][$id]["anh"] = $tenfile;
                }


                header("location: http://localhost:8080/PHP-BT/THEMFILEIMG/index.php ");
            }
        }
    }
    ?>

</body>

</html>