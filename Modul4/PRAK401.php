<!DOCTYPE html>
<html>
<head>
    <title>Cetak Matriks</title>
</head>
<body>
    <form method="POST">
        Panjang: <input type="number" name="panjang" required><br>
        Lebar: <input type="number" name="lebar" required><br>
        Nilai: <input type="text" name="nilai" required><br>
        <button type="submit" name="cetak">Cetak</button>
    </form>
    <br>

    <?php
    if (isset($_POST['cetak'])) {
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $nilaiInput = $_POST['nilai'];

        $arrNilai = explode(" ", $nilaiInput);
        $totalElemen = count($arrNilai);

        if ($totalElemen == ($panjang * $lebar)) {
            echo "<table border='1' cellspacing='0' cellpadding='5'>";
            $count = 0;
            for ($i = 0; $i < $panjang; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $lebar; $j++) {
                    echo "<td>" . $arrNilai[$count] . "</td>";
                    $count++;
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Panjang nilai tidak sesuai dengan ukuran matriks";
        }
    }
    ?>
</body>
</html>