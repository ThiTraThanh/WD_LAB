<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="styleDangNhap.css">
</head>
<body>
    <h3>Đăng nhập hệ thống xem điểm</h3>
    <form action="bangdiem.php" method="post" > <!--<php echo htmlspecialchars() $_SERVER['PHP_SELF']);?> : sử dụng cho trường hợp sử dụng lại nhiều lần,"htmlspecialchars giúp tránh sự tấn công đơn giản-->
        <table>
            <tr>
                <td>Tên đăng nhập</td>
                <td><input type="input" name="tdn"></td>
            </tr>
            <tr>
                <td>Mật khẩu</td>
                <td><input type="password" name="mk"></td>
            </tr>
            <tr>
                <td class ="submit" colspan="2"><input type="submit" value="Đăng nhập" name="submit"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>