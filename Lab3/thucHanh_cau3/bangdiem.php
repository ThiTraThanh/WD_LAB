<?php
session_start();
if(isset ($_POST['submit']) && ($_POST['submit'])) {
    $tdn=$_POST['tdn'];
    $mk=$_POST['mk'];
    if ($mk != '12345') {
        header("Location: dangnhap.php");
        exit();
    }
    $_SESSION['tdn']=$tdn;
    $_SESSION['mk']=$mk;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bảng điểm</title>
    <link rel="stylesheet" href="styleBangDiem.css">
</head>
<body>
    <h2>BẢNG ĐIỂM</h2>
    
    <?php
    // Kiểm tra nếu $username đã được gán giá trị
    if (isset($_SESSION['tdn'])) {
        echo "<h3>Tên: " . $_SESSION['tdn']. "</h3>";
    } else {
        echo "<h3>Tên: </h3>";
    }
    ?>
    
    <table>
        <tr>
            <th>STT</th>
            <th>Tên môn</th>
            <th>Điểm</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Cơ sở dữ liệu</td>
            <td>7</td>
        </tr>
        <tr>
            <td>2</td>
            <td>Phát triển ứng dụng web</td>
            <td>8</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Lập trình Java</td>
            <td>7.5</td>
        </tr>
    </table>
    <form action="thongtinsinhvien.php" method="post">
        <a href="thongtinsinhvien.php">Xem thông tin sinh viên</a>
    </form>
    
</body>
</html>