<!DOCTYPE html>
<html>
<head>
    <title>Danh sách nhân viên</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Danh sách nhân viên</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>Mã chí nhanh</th>
            <th>Chức năng</th>
        </tr>
        <?php
        include 'connect.php';
        $sql = "SELECT * FROM NHANVIEN";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["MaNhanVien"] . "</td>";
                echo "<td>" . $row["name_nv"] . "</td>";
                echo "<td><a href='?id=" . $row["MaNhanVien"] . "'>Xóa</a></td>";
                echo "</tr>";
            }
        } else {
            echo "Không có dữ liệu";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>