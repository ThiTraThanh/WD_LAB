
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin công ty</title>
</head>
<body>
    <form method="get" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <table>
            <tr><td colspan="2" class="header">Thêm công ty</td></tr>
            <tr>
                <td>Mã công ty</td>
                <td><input type="input" name="ma"></td>
            </tr>
            <tr>
                <td>Tên công ty</td>
                <td><input type="input" name="ten"></td>
            </tr>
            <tr>
                <td>Địa chỉ</td>
                <td><input type="input" name="diachi"></td>
            </tr>
            <tr>
                <td colspan="2" class="button">
                    <input type="Submit" value="Thêm" name="Submit">
                    <input type="Reset" value="Reset">
                </td>
            </tr>
        </table>
    </form>
    <?php
        
        if(isset($_GET['Submit'])&&($_GET['Submit']=="Thêm")){
            include "connect.php";
            $macongty= $_GET['ma'];
            $tencongty=$_GET['ten'];
            $diachi= $_GET['diachi'];
            $str = "insert into CONGTY values ('$macongty','$tencongty','$diachi')";
            // echo $str;
            if($connect->query($str)===true) {
                echo "Thêm thành công";
            }
            else {
                echo "Thêm không thành công";
            }
            $connect->close();
        }
        
    ?>
</body>
</html>