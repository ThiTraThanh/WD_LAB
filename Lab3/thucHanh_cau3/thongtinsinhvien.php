<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin sinh viên</title>
    <link rel="stylesheet" href="styleThongTin.css">
</head>
<body>
    <h3>Thông tin sinh viên</h3>
    <?php
    $tdn = $_SESSION['tdn'];
    $mk = $_SESSION['mk'];
    echo "<p>Tên: ".$tdn."</p>";
    echo "<p>Mật khẩu: ".$mk."</p>";
    ?>
</body>
</html>