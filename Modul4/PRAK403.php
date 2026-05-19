<!DOCTYPE html>
<html>
<head>
    <title>KRS Mahasiswa</title>
    <style>
        table { border-collapse: collapse; text-align: left; }
        th, td { padding: 5px; }
        th { background-color: #cccccc; }
        .revisi { background-color: red; }
        .aman { background-color: #00cc55; }
    </style>
</head>
<body>
    <?php
    $krs = [
        ["nama" => "Ridho", "matkul" => [
            ["nama_matkul" => "Pemrograman I", "sks" => 2],
            ["nama_matkul" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_matkul" => "Pengantar Lingkungan Lahan Basah", "sks" => 2],
            ["nama_matkul" => "Arsitektur Komputer", "sks" => 3]
        ]],
        ["nama" => "Ratna", "matkul" => [
            ["nama_matkul" => "Basis Data I", "sks" => 2],
            ["nama_matkul" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_matkul" => "Kalkulus", "sks" => 3]
        ]],
        ["nama" => "Tono", "matkul" => [
            ["nama_matkul" => "Rekayasa Perangkat Lunak", "sks" => 3],
            ["nama_matkul" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_matkul" => "Komputasi Awan", "sks" => 3],
            ["nama_matkul" => "Kecerdasan Bisnis", "sks" => 3]
        ]]
    ];

    foreach ($krs as &$k) {
        $totalSKS = 0;
        foreach ($k["matkul"] as $m) {
            $totalSKS += $m["sks"];
        }
        $k["total_sks"] = $totalSKS;
        $k["keterangan"] = ($totalSKS < 7) ? "Revisi KRS" : "Tidak Revisi";
    }
    unset($k);
    ?>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah diambil</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php 
        $no = 1;
        foreach ($krs as $k): 
            $jumlah_matkul = count($k["matkul"]);
            for ($i = 0; $i < $jumlah_matkul; $i++):
        ?>
        <tr>
            <?php 
            if ($i == 0): 
            ?>
                <td><?= $no++ ?></td>
                <td><?= $k["nama"] ?></td>
            <?php 
            else: 
            ?>
                <td></td>
                <td></td>
            <?php endif; ?>
            
            <td><?= $k["matkul"][$i]["nama_matkul"] ?></td>
            <td><?= $k["matkul"][$i]["sks"] ?></td>
            
            <?php 
            if ($i == 0): 
                $bgClass = ($k["total_sks"] < 7) ? "revisi" : "aman";
            ?>
                <td><?= $k["total_sks"] ?></td>
                <td class="<?= $bgClass ?>"><?= $k["keterangan"] ?></td>
            <?php 
            else: 
            ?>
                <td></td>
                <td></td>
            <?php endif; ?>
        </tr>
        <?php 
            endfor; 
        endforeach; 
        ?>
    </table>
</body>
</html>