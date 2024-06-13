<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <form method="GET" action="#">
        <table>
            <tr>
                <td>Hệ số a</td>
                <td><input type="text" name="heSoA"></td>
            </tr>
            <tr>
                <td>Hệ số b</td>
                <td><input type="text" name="heSoB"></td>
            </tr>
            <tr>
                <td>Hệ số c</td>
                <td><input type="text" name="heSoC"></td>
            </tr>
            <tr class="submit">
                <td colspan="2"><input type="submit" value="Giải" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
    if(isset($_GET['submit']) && $_GET['submit'] == "Giải"){
        $heSoA=$_GET['heSoA'];
        $heSoB=$_GET['heSoB'];
        $heSoC=$_GET['heSoC'];
        $delta=$heSoB*$heSoB - 4*$heSoA*$heSoC;
        if ($delta<0) echo "Vô nghiệm";
        else if ($delta == 0) {
            echo "Nghiệm kép: ".-$heSoB/(2*$heSoA);
        }
        else {
            echo "x1 = ".(-$heSoB + $delta)/(2*$heSoA)."<br>";
            echo "x2 = ".(-$heSoB - $delta)/(2*$heSoA);
        }
    }
    ?>
</body>
</html>