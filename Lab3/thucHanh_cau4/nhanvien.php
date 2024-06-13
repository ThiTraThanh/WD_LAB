<?php
     class nhanVien {
        private $ma;
        private $ten;
        private $soNgay;
        private $luongNgay;
        public function __construct($ma, $ten, $soNgay, $luongNgay) {
            $this->ma = $ma;
            $this->ten = $ten;
            $this->soNgay = $soNgay;
            $this->luongNgay = $luongNgay;
        }
        public function getMa(){
            return $this->ma;
        }
        public function getTen(){
            return $this->ten;
        }
        public function getSoNgay(){
            return $this->soNgay;
        }
        public function getLuongNgay(){
            return $this->luongNgay;
        }
        public function inNhanVien() {
            echo "Mã nhân viên: ".$this->ma."<br>";
            echo "Tên nhân viên: ".$this->ten."<br>";
            echo "Số ngày làm việc: ".$this->soNgay."<br>";
            echo "Lương ngày: ".$this->luongNgay."<br>";
        }
        public function tinhLuong() {
            return $this->getSoNgay()*$this->getLuongNgay();
        }
    }
    class nhanVienQL extends nhanVien {
        public $phuCap;
        public function __construct($ma, $ten, $soNgay, $luongNgay,$phuCap) {
            parent::__construct($ma, $ten, $soNgay, $luongNgay);
            $this->phuCap = $phuCap;
        }
        function inNhanVien() {
            parent::inNhanVien();
            echo "Phụ cấp: $this->phuCap<br>"; //gọi phương thức của lớp cha
        }
        function tinhLuong() {
            return parent::tinhLuong()+$this->phuCap;
        }
    }

    if(isset($_POST['tinhLuong'])&&$_POST['tinhLuong']=="Lương tháng") {
        $ma=$_POST['ma'];
        $ten=$_POST['ten'];
        $soNgay=$_POST['soNgay'];
        $luongNgay=$_POST['luongNgay']; 
        $nvql = isset($_POST['nvql']) ? $_POST['nvql'] : 0;
        if($nvql==1) {
            $nhanVien = new nhanVienQL($ma, $ten, $soNgay, $luongNgay, 2000);
            // $nhanVien->gan($ma, $ten, $soNgay, $luongNgay);
            $nhanVien->inNhanVien();
            echo "<h3>Lương tháng: ".$nhanVien->tinhLuong()."<h3>";
        } else {
            $nhanVien = new nhanVien($ma, $ten, $soNgay, $luongNgay);
            // $nhanVien->gan($ma, $ten, $soNgay, $luongNgay);
            $nhanVien->inNhanVien();
            echo "<h3>Lương tháng: ".$nhanVien->tinhLuong()."<h3>";
        }

    }

    ?>