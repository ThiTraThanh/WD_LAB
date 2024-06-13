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
    class hinhChuNhat {
        public $chieuDai;
        public $chieuRong;
        function __construct($chieuDai, $chieuRong) {
            $this->chieuDai = $chieuDai;
            $this->chieuRong = $chieuRong;
        }
        function get_chieuDai() {
            return $this->chieuDai;
        }
        function get_chieuRong() {
            return $this->chieuRong;
        }
        function khoiTaoDoiSo(){
            $this->chieuDai = 1;
            $this->chieuRong = 1;
        }
        function tinhDienTich() {
            return $this->chieuDai * $this->chieuRong;
        }
        function tinhChuVi() {
            return 2 * ($this->chieuDai + $this->chieuRong);
        }
    }
    if(isset($_GET['submit']) && $_GET['submit'] == "Tính"){
        $dai = $_GET['chieudai'];
        $rong = $_GET['chieurong'];
        $hinhChuNhat1 = new hinhChuNhat($dai, $rong);
        echo "Diện tích hình chữ nhật 1: " . $hinhChuNhat1->tinhDienTich() . "<br>"; 
        echo "Chu vi hình chữ nhật 1: " . $hinhChuNhat1->tinhChuVi() . "<br>"; 

        $hinhChuNhat2 = new hinhChuNhat($dai, $rong);
        $hinhChuNhat2->khoiTaoDoiSo();
        echo "Diện tích hình chữ nhật 2: " . $hinhChuNhat2->tinhDienTich() . "<br>"; 
        echo "Chu vi hình chữ nhật 2: " . $hinhChuNhat2->tinhChuVi() . "<br>"; 
    }
    ?>
    </div>
</body>
</html>
