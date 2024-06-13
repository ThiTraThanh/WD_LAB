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
        <input type="submit" value="Tìm" name="submit">
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
    if(isset($_GET['submit']) && $_GET['submit'] == "Tìm"){
        $ban=array("Tuấn"=>21, "Tú"=>19, "Tâm"=>22, "Tùng"=>20);
        $ten = $_GET['ten'];
        if (coTen($ten, $ban)) {echo "Tìm thấy ".$ten." trong mảng";}
        else {
            foreach ($ban as $name=>$age) {
            echo $name." ".$age."<br>";
          }
        }
    }
    ?>
</body>
</html>