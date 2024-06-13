<?php
function tinhtong($tu1, $mau1, $tu2, $mau2) {
    $tongtu = $tu1 * $mau2 + $tu2 * $mau1;
    $tongmau = $mau1 * $mau2;
    return array($tongtu, $tongmau);
}

function tinhhieu($tu1, $mau1, $tu2, $mau2) {
    $hieutu = $tu1 * $mau2 - $tu2 * $mau1;
    $hieumau = $mau1 * $mau2;
    return array($hieutu, $hieumau);
}

function tinhtich($tu1, $mau1, $tu2, $mau2) {
    $tichtu = $tu1 * $tu2;
    $tichmau = $mau1 * $mau2;
    return array($tichtu, $tichmau);
}

function chiathanh($tu1, $mau1, $tu2, $mau2) {
    $thuongtu = $tu1 * $mau2;
    $thuongmau = $mau1 * $tu2;
    return array($thuongtu, $thuongmau);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tu1 = $_POST["tu1"];
    $mau1 = $_POST["mau1"];
    $tu2 = $_POST["tu2"];
    $mau2 = $_POST["mau2"];
    $pheptinh = $_POST["pheptinh"];

    if ($mau1 == 0 || $mau2 == 0) {
        $ketqua = "Lỗi: Mẫu số không được là 0.";
    } else {
        switch ($pheptinh) {
            case "+":
                list($tongtu, $tongmau) = tinhtong($tu1, $mau1, $tu2, $mau2);
                $ketqua = "$tu1/$mau1 + $tu2/$mau2 = $tongtu/$tongmau";
                break;
            case "-":
                list($hieutu, $hieumau) = tinhhieu($tu1, $mau1, $tu2, $mau2);
                $ketqua = "$tu1/$mau1 - $tu2/$mau2 = $hieutu/$hieumau";
                break;
            case "*":
                list($tichtu, $tichmau) = tinhtich($tu1, $mau1, $tu2, $mau2);
                $ketqua = "$tu1/$mau1 * $tu2/$mau2 = $tichtu/$tichmau";
                break;
            case "/":
                if ($tu2 == 0) {
                    $ketqua = "Lỗi: Không thể chia cho 0.";
                } else {
                    list($thuongtu, $thuongmau) = chiathanh($tu1, $mau1, $tu2, $mau2);
                    $ketqua = "$tu1/$mau1 / $tu2/$mau2 = $thuongtu/$thuongmau";
                }
                break;
        }
    }

    header("Location: index.php?ketqua=" . urlencode($ketqua));
    exit();
}