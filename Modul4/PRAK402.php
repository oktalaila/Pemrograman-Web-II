<!DOCTYPE html>
<html>
<head>
    <title>Nilai Mahasiswa</title>
    <style>
        table { border-collapse: collapse; text-align: left; }
        th, td { padding: 8px; }
        th { background-color: #d3d3d3; }
    </style>
</head>
<body>
    <?php
    $mahasiswa = [
        ["nama" => "Andi", "nim" => "2101001", "uts" => 87, "uas" => 65],
        ["nama" => "Budi", "nim" => "2101002", "uts" => 76, "uas" => 79],
        ["nama" => "Tono", "nim" => "2101003", "uts" => 50, "uas" => 41],
        ["nama" => "Jessica", "nim" => "2101004", "uts" => 60, "uas" => 75]
    ];

    foreach ($mahasiswa as &$m) {
        $m["akhir"] = (0.4 * $m["uts"]) + (0.6 * $m["uas"]);
        
        if ($m["akhir"] >= 80) {
            $m["huruf"] = "A";
        } elseif ($m["akhir"] >= 70) {
            $m["huruf"] = "B";
        } elseif ($m["akhir"] >= 60) {
            $m["huruf"] = "C";
        } elseif ($m["akhir"] >= 50) {
            $m["huruf"] = "D";
        } else {
            $m["huruf"] = "E";
        }
    }
    unset($m);
    ?>

    <table border="1">
        <tr>
            <th>Nama</th><th>NIM</th><th>Nilai UTS</th><th>Nilai UAS</th><th>Nilai Akhir</th><th>Huruf</th>
        </tr>
        <?php foreach ($mahasiswa as $m): ?>
        <tr>
            <td><?= $m["nama"] ?></td>
            <td><?= $m["nim"] ?></td>
            <td><?= $m["uts"] ?></td>
            <td><?= $m["uas"] ?></td>
            <td><?= number_format($m["akhir"], 1) ?></td>
            <td><?= $m["huruf"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>