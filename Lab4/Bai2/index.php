<!DOCTYPE html>
<html>
<head>
    <title>Danh sách chi nhánh công ty</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>
    <?php
        // include 'connect.php';
        $connect = new mysqli('localhost','root','','quanlynhanvien');
        if (!$connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully";
        $sql = "SELECT MaChiNhanh, TenChiNhanh, DiaChi FROM chinhanh WHERE MaCongTy='CT01'";
        $result = $connect->query($sql);
        echo $result;
        echo "<table>";
        echo "<tr><th>STT</th><th>Mã chi nhánh</th><th>Tên chi nhánh</th></tr>";

        if ($result->num_rows > 0) {
            $stt = 1;
            while ($row = $result->fetch_row()) {
                echo "<tr>";
                echo "<td>$stt</td><td>$row[1]</td><td>$row[2]</td>";
                echo "</tr>";
                $stt++;
            }
        } else {
            echo "Không có dòng nào";
        }

        echo "</table>";
        $connect->close();
    ?>
</body>
</html>