<form method="POST">
    Nama: 1 <input type="text" name="nama1" value="<?= isset($_POST['nama1']) ? $_POST['nama1'] : '' ?>"><br>
    Nama: 2 <input type="text" name="nama2" value="<?= isset($_POST['nama2']) ? $_POST['nama2'] : '' ?>"><br>
    Nama: 3 <input type="text" name="nama3" value="<?= isset($_POST['nama3']) ? $_POST['nama3'] : '' ?>"><br>
    <button type="submit" name="submit">Urutkan</button>
</form>

<?php
if (isset($_POST['submit'])) {
    $n1 = $_POST['nama1'];
    $n2 = $_POST['nama2'];
    $n3 = $_POST['nama3'];

    $nama = [$n1, $n2, $n3];
    sort($nama); 
    echo "<b>Output:</b><br>";
    foreach ($nama as $n) {
        echo "$n <br>";
    }
}
?>