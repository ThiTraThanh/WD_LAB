<!DOCTYPE html>
<html>
<head>
    <title>Chương trình cộng, trừ, nhân, chia hai phân số</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <h3>Chương trình cộng, trừ, nhân, chia hai phân số</h3>
    <form method="post" action="phanso.php">
        <table>
            <tr>
                <td><label>Tử phân số 1:</label>
                <input type="text" name="tu1" required><br><br>
                <label>Mẫu phân số 1:</label>
                <input type="text" name="mau1" required><br><br>
                <label>Tử phân số 2:</label>
                <input type="text" name="tu2" required><br><br>
                <label>Mẫu phân số 2:</label>
                <input type="text" name="mau2" required><br><br>
                <input type="submit" name="submit" value="=">
                <p>Kết quả: <?php
                    if (isset($_GET['ketqua'])) {
                    echo $_GET['ketqua'];
                    }
                ?></p>
                <td>
                    <label>Phép tính:</label><br>
                    <div class="container">
                    <input type="radio" name="pheptinh" value="+" checked> + <br>
                    <input type="radio" name="pheptinh" value="-"> -<br>
                    <input type="radio" name="pheptinh" value="*"> *<br>
                    <input type="radio" name="pheptinh" value="/"> /<br>
                </div></td>
            </tr>
        </table>
        
    </form>
    
</body>
</html>