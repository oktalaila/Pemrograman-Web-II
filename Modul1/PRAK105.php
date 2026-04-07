<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black;
        }
        th {
            border: 1px solid black;
            background-color: red;
            padding: 20px;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php
        $daftar_samsung = [
            "S22" => "Samsung Galaxy S22",
            "S22P" => "Samsung Galaxy S22+",
            "A03" => "Samsung Galaxy A03",
            "X5" => "Samsung Galaxy Xcover 5"
        ];

        foreach ($daftar_samsung as $key => $val) {
            echo "<tr><td>$val</td></tr>";
        }
        ?>
    </table>
</body>
</html>