<form method="POST">
    Tinggi: <input type="number" name="tinggi" value="<?= isset($_POST['tinggi']) ? $_POST['tinggi'] : '' ?>"><br>
    Alamat Gambar: <input type="text" name="gambar" value="<?= isset($_POST['gambar']) ? $_POST['gambar'] : '' ?>"><br>
    <button type="submit" name="cetak">Cetak</button>
</form>

<?php
if (isset($_POST['cetak'])) {
    $tinggi = $_POST['tinggi'];
    $gambar = $_POST['gambar'];
    $i = 0;
    while ($i < $tinggi) {
        $j = 0;
        while ($j < $i) {
            echo '<img src="" style="width:25px; opacity:0;">';
            $j++;
        }
        $k = $tinggi;
        while ($k > $i) {
            echo "<img src='$gambar' width='25px' height='25px'>";
            $k--;
        }
        echo "<br>";
        $i++;
    }
}
?>