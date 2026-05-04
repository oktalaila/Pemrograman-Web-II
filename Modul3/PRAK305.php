<!DOCTYPE html>
<html>
<head>
    <title>Pola Karakter String</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="kata" required>
        <button type="submit" name="submit">submit</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $kata = $_POST['kata'];
        $panjang = strlen($kata); 
        $arr = str_split($kata); 

        echo "<br><b>Input:</b><br>";
        echo $kata . "<br>";
        
        echo "<br><b>Output:</b><br>";
        foreach ($arr as $char) {
            echo strtoupper($char);
            
            for ($i = 1; $i < $panjang; $i++) {
                echo strtolower($char);
            }
        }
    }
    ?>
</body>
</html>