<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <h3>Tính diện tích và chu vi của hình chữ nhật</h3>
    <form method="get" action="#">
        <table>
            <tr>
                <td>Chiều dài</td>
                <td><input type="text" name="chieudai"></td>
            </tr>
            <tr>
                <td>Chiều rộng</td>
                <td><input type="text" name="chieurong"></td>
            </tr>
            <tr>
                <td class="submit" colspan="2"><input type="submit" value="Tính" name="submit"></td>
            </tr>
        </table> 
    </form>
    <br><br>
    <div>
    <?php
    if(isset($_GET['submit']) && $_GET['submit'] == "Tính")
    {
        $dai = $_GET['chieudai'];
        $rong = $_GET['chieurong'];
        $dientich = (float)$dai * (float)$rong;
        $chuvi = ((float)$dai+(float)$rong)*2;
        echo "Diện tích = ".$dientich."<br>";
        echo "Chu vi = ".$chuvi;
    }
    ?>
    </div>
</body>
</html>
