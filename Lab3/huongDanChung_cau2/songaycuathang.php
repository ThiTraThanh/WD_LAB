<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <table>
            <tr>
                <td>Ngày</td>
                <td><input type="text" name="ngay"></td>
            </tr>
            <tr>
                <td>Tháng</td>
                <td><input type="text" name="thang"></td>
            </tr>
            <tr>
                <td>Năm</td>
                <td><input type="text" name="nam"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Tổng" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    function namNhuanCheck($nam) {
        if ($nam%4==0 || $nam%400==0){
            return false;
        }
        else return true;
    };
    if(isset($_GET['submit']) && $_GET['submit'] == "Tổng")
    {
        $ngay = $_GET['ngay'];
        $thang = $_GET['thang'];
        $nam=$_GET['nam'];
        $tong=0;
        for ($i=0;$i<(float)$thang-1;$i++) {
            $thangTamThoi=$i+1;
            if ($thangTamThoi==1 || $thangTamThoi==3 || $thangTamThoi==5 || $thangTamThoi==7 || $thangTamThoi==8 || $thangTamThoi==10 || $thangTamThoi==12) {
                $tong+=31;
            }
            else if ($thangTamThoi==4 || $thangTamThoi==6 || $thangTamThoi==9 || $thangTamThoi==11){
                $tong+=30;
            }
            else {
                if (!namNhuanCheck($nam)){
                    $tong+=29;
                }
                else $tong+=28;
            } 
        }
        $tong+=(float)$ngay;
        echo "Tổng số ngày từ đầu năm: ".$tong;
    }
    ?>
</body>
</html>