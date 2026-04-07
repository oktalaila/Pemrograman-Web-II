<!DOCTYPE html>
<html>
<head>
    <style>
        table, td {
            border: 1px solid black;
        }
        th {
            border: 1px solid black;
            text-align: left;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Daftar Smartphone Samsung</th>
        </tr>
        <?php
        $smartphones = [
            "Samsung Galaxy S22", 
            "Samsung Galaxy S22+", 
            "Samsung Galaxy A03", 
            "Samsung Galaxy Xcover 5"
        ];

        foreach ($smartphones as $phone) {
            echo "<tr><td>$phone</td></tr>";
        }
        ?>
    </table>
</body>
</html>