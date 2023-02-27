<!DOCTYPE html>
<?php session_start() ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trai cay</title>
</head>

<body>
    <h1> Danh sach san pham</h1>
    <form action="" method="$_POST">
        <table border="1" text-align="center">
            <tr>
                <td>STT</td>
                <td>Tên sản phẩm</td>
                <td>Giá tiền</td>
                <td>Mô tả</td>
                <td>Hình ảnh</td>
                <td>Hoạt động</td>
            </tr>
    </form>
    <a href="form1.php">nhậpthem</a>
    <?php
    if (isset($_SESSION["traicay1"])) {
        $n = count($_SESSION["traicay1"]);
        for ($i = 0; $i < $n; $i++) {
    ?>
            <tr>
                <td><?php echo ($i + 1) ?></td>
                <td><?php echo $_SESSION["traicay1"][$i]["ten"]; ?></td>
                <td><?php echo $_SESSION["traicay1"][$i]["gia"]; ?></td>
                <td><?php echo $_SESSION["traicay1"][$i]["mota"]; ?></td>
                <td><img src="<?php echo $_SESSION["traicay1"][$i]["anh"]; ?>" alt="" height="100" width="100"> </td>
                <td><a href="xoa.php?id=<?php echo $i ?>">xóa</a> <a href="sua.php?id=<?php echo $i ?>">edit</a></td>
            </tr>
    <?php }
    } ?>
    </table>
</body>

</html>