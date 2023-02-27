<!DOCTYPE html>
<?php session_start()?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nhap </title>
</head>
<form action=""method="POST" enctype="Multipart/form-data" >
    <table>
        <tr>
            <td> Nhập tên sản phẩm:</td>
            <td><input type="text" name="ten"></td>
        </tr>
        <tr>
            <td> Giá sản phẩm:</td>
            <td><input type="number" name="gia"></td>
        </tr>
        <tr>
            <td> Mô tả:</td>
            <td><input type="text" name="mota"></td>
        </tr>
    </table>
            Hinh ảnh:
            <input type="File"name="file_up"value="upload">
            <input type="submit"name="btn-sub"value="upload file">


</form>
<body>
<?php
    if(isset($_POST["btn-sub"])){
        if(isset($_FILES["file_up"])){
            $file=$_FILES["file_up"];
            $tenfile=$file["name"];
            move_uploaded_file($file["tmp_name"],$tenfile);
        $n=0;
        if(isset($_SESSION["traicay1"])){
           
            $n=count($_SESSION["traicay1"]);}
                $_SESSION["traicay1"][$n]["ten"]=$_POST["ten"];
                $_SESSION["traicay1"][$n]["gia"]=$_POST["gia"];
                $_SESSION["traicay1"][$n]["mota"]=$_POST["mota"];
                $_SESSION["traicay1"][$n]["anh"]=$tenfile;
            }


            header ("location: http://localhost:8080/PHP-BT/THEMFILEIMG/index.php");
        }
   
    ?>
   
</body>
</html>