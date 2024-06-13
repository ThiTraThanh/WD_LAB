<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="#">
        Nhập tên cần tìm <input type="text" name="ten">
        <br>
        <input type="submit" value="Tìm" name="submit1">
        <br>
        <br>
        Nhập tên thêm <input type="text" name="tenMoi" placeholder="tên"><input type="text" name="tuoi" placeholder="tuổi">
        <br>
        <input type="submit" value="Thêm" name="submit3">
        <br>
        <br>
        <input type="submit" value="Xuất tên các bạn lớn hơn 20 tuổi" name="submit1">
        <br>
        <br>
        <input type="submit" value="Sắp xếp danh sách theo tuổi" name="submit2">
        <br>
        <br>
        Nhập tuổi muốn tìm <input type="text" name = "tuoi2" placeholder="tuổi">
        <br>
        <input type="submit" value="Tìm theo tuổi" name="submit4">
        <br>
        <br>
        Nhập tên muốn xóa <input type="text" name="tenXoa">
        <br>
        <input type="submit" value="Xóa theo tên" name="submit5">
    </form>
    <?php
    
    function coTen($ten, $ban) {
        $dem=0;
        foreach ($ban as $name=>$age) {
            if ($name == $ten) $dem++;
        }
        if ($dem != 0) {return 1;}
        else return 0;
    }
    function tuoiLonHon20($ban){
        echo "Các bạn hơn 20 tuổi:<br>";
        foreach($ban as $ten=>$tuoi){
            if($tuoi>20) echo $ten." ".$tuoi."<br>";
        }
    }
    function sapXepTheoTuoi($ban) {
        asort($ban);
        foreach ($ban as $ten=>$tuoi) echo $ten." ".$tuoi."<br>";
    }
    function themPhanTu($tenMoi, $tuoi, $ban) {
        $ban+=[$tenMoi=>$tuoi];
        echo "Danh sách mới: <br>";
        foreach ($ban as $ten=>$age) {
            echo $ten." ".$tuoi."<br>";
        }
    }
    function timPhanTuTheoTuoi($tuoiMoi, $ban) {
        foreach ($ban as $ten=>$tuoi) {
            if ($tuoi == $tuoiMoi) echo $ten."<br>";
        }
    }
    function xoaPhanTuTheoTen($tenXoa, $ban) {
        foreach ($ban as $ten=>$tuoi) {
            if($ten == $tenXoa) unset($ban[$tenXoa]);
        }
        echo "Danh sách sau khi xóa: <br>";
        foreach ($ban as $ten=>$tuoi) echo $ten." ".$tuoi."<br>";
    }
    $ban=array("Tuấn"=>21, "Tú"=>19, "Tâm"=>22, "Tùng"=>20);
    if(isset($_GET['submit']) && $_GET['submit'] == "Tìm"){
        $ten = $_GET['ten'];
        if (coTen($ten, $ban)) {echo "Tìm thấy ".$ten." trong mảng<br>";}
        else {
            foreach ($ban as $name=>$age) {
            echo $name." ".$age."<br>";
          }
        }
    }
    if(isset($_GET['submit1']) && $_GET['submit1'] == "Xuất tên các bạn lớn hơn 20 tuổi"){
        //In danh sách tuổi lớn hơn 20
        tuoiLonHon20($ban);
    }
    if(isset($_GET['submit2']) && $_GET['submit2'] == "Sắp xếp danh sách theo tuổi"){
        sapXepTheoTuoi($ban);
    }
    if(isset($_GET['submit3']) && $_GET['submit3'] == "Thêm" ){
        //Thêm phần tử mới
        $tenMoi=$_GET['tenMoi'];
        $tuoi=$_GET['tuoi'];
        themPhanTu($tenMoi,$tuoi,$ban);
    }
    if(isset($_GET['submit4']) && $_GET['submit4']=="Tìm theo tuổi"){    
        //Tìm một phần tử theo tuổi
        $tuoiMoi=$_GET['tuoi2'];
        timPhanTuTheoTuoi($tuoiMoi, $ban);
    }
    if(isset($_GET['submit5']) && $_GET['submit5']=="Xóa theo tên") {
        $tenXoa=$_GET['tenXoa'];
        xoaPhanTuTheoTen($tenXoa, $ban);
    }
    ?>
</body>
</html>