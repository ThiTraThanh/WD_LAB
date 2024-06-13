<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <h3>Tính diện tích và chu vi của hình hộp chữ nhật</h3>
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
                <td>Chiều cao</td>
                <td><input type="text" name="chieucao"></td>
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
    class hinhLapPhuong extends hinhChuNhat {
        public $chieuCao;
        function __construct($chieuDai, $chieuRong, $chieuCao) {
            $this->chieuDai = $chieuDai;
            $this->chieuRong = $chieuRong;
            $this->chieuCao = $chieuCao;
        }
        function khoiTaoDoiSo()
        {
            $this->chieuDai = 1;
        }
        function tinhTheTich() {
            return $this->chieuDai * $this->chieuRong * $this->chieuCao;
        }
        function tinhDienTich() {
            return ($this->chieuDai + $this->chieuRong)*2*$this->chieuCao + $this->chieuDai*$this->chieuRong*2;
        }
        function goiTen() {
            echo "Tôi là hình chữ nhật".$this->chieuDai;
        }
    }
    if(isset($_GET['submit']) && $_GET['submit'] == "Tính"){
        $dai = $_GET['chieudai'];
        $rong = $_GET['chieurong'];
        $cao = $_GET['chieucao'];
        $hinhLapPhuong = new hinhLapPhuong($dai, $rong, $cao);
        echo "Diện tích: ".$hinhLapPhuong->tinhDienTich()."<br>";
        echo "Thể tích: ".$hinhLapPhuong->tinhTheTich();
        $hinhLapPhuong->goiTen();
    }
    ?>
    </div>
</body>
</html>
