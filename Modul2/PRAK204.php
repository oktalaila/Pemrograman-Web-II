<!DOCTYPE html>
<html>
<head>
    <title>Ejaan Bilangan</title>
</head>
<body>
    <form method="POST">
        Nilai: <input type="number" name="nilai" required value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
        <button type="submit" name="proses">Konversi</button>
    </form>

    <?php
    if (isset($_POST['proses'])) {
        $n = $_POST['nilai'];
        
        if ($n == 0) {
            $res = "Nol";
        } elseif ($n > 0 && $n < 10) {
            $res = "Satuan";
        } elseif ($n >= 11 && $n < 20) {
            $res = "Belasan";
        } elseif ($n == 10 || ($n >= 20 && $n < 100)) {
            $res = "Puluhan";
        } elseif ($n >= 100 && $n < 1000) {
            $res = "Ratusan";
        } else {
            $res = "Anda Menginput Melebihi Limit Bilangan";
        }
        
        echo "<h2>Hasil: $res</h2>";
    }
    ?>
</body>
</html>