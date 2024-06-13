<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính lương</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <form method="POST" action="nhanvien.php">
    <table>
        <tr>
            <td>Mã nhân viên</td>
            <td><input type="text" name="ma"></td>
        </tr>
        <tr>
            <td>Tên nhân viên</td>
            <td><input type="text" name="ten"></td>
        </tr>
        <tr>
            <td>Số ngày làm việc</td>
            <td><input type="number" name="soNgay"></td>
        </tr>
        <tr>
            <td>Lương ngày</td>
            <td><input type="number" name="luongNgay"></td>
        </tr>
        <tr>
            <td>Nhân viên quản lý</td>
            <td><input type="checkbox" name="nvql" value="1"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="tinhLuong" value="Lương tháng"></td>
        </tr>
    </table>
    </form>
</body>
</html>