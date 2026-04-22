<!DOCTYPE html>
<html>
<head><title>Konversi Suhu</title></head>
<body>
    <form method="POST">
        Nilai: <input type="number" name="nilai" step="any" required value="<?= isset($_POST['nilai']) ? $_POST['nilai'] : '' ?>"><br>
        Dari: <br>
        <input type="radio" name="dari" value="Celcius" checked> Celcius<br>
        <input type="radio" name="dari" value="Fahrenheit"> Fahrenheit<br>
        <input type="radio" name="dari" value="Rheamur"> Rheamur<br>
        <input type="radio" name="dari" value="Kelvin"> Kelvin<br>
        Ke: <br>
        <input type="radio" name="ke" value="Celcius"> Celcius<br>
        <input type="radio" name="ke" value="Fahrenheit" checked> Fahrenheit<br>
        <input type="radio" name="ke" value="Rheamur"> Rheamur<br>
        <input type="radio" name="ke" value="Kelvin"> Kelvin<br>
        <button type="submit" name="konversi">Konversi</button>
    </form>

    <?php
    if (isset($_POST['konversi'])) {
        $nilai = $_POST['nilai'];
        $dari = $_POST['dari'];
        $ke = $_POST['ke'];
        
        $temp = 0; $hasil = 0; $simbol = "";

        if ($dari == "Celcius") $temp = $nilai;
        elseif ($dari == "Fahrenheit") $temp = ($nilai - 32) * 5/9;
        elseif ($dari == "Rheamur") $temp = $nilai * 5/4;
        elseif ($dari == "Kelvin") $temp = $nilai - 273.15;

        if ($ke == "Celcius") { $hasil = $temp; $simbol = "°C"; }
        elseif ($ke == "Fahrenheit") { $hasil = ($temp * 9/5) + 32; $simbol = "°F"; }
        elseif ($ke == "Rheamur") { $hasil = $temp * 4/5; $simbol = "°Re"; }
        elseif ($ke == "Kelvin") { $hasil = $temp + 273.15; $simbol = "°K"; }

        echo "<h2>Hasil Konversi: " . number_format($hasil, 1) . " $simbol</h2>";
    }
    ?>
</body>
</html>