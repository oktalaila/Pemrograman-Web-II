<style>.error { color: red; }</style>
<?php
$namaErr = $nimErr = $genderErr = "";
$nama = $nim = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) { $namaErr = "nama tidak boleh kosong"; } 
    else { $nama = $_POST["nama"]; }

    if (empty($_POST["nim"])) { $nimErr = "nim tidak boleh kosong"; } 
    else { $nim = $_POST["nim"]; }

    if (empty($_POST["gender"])) { $genderErr = "jenis kelamin tidak boleh kosong"; } 
    else { $gender = $_POST["gender"]; }
}
?>

<form method="POST">
    Nama: <input type="text" name="nama" value="<?= $nama ?>"> <span class="error">* <?= $namaErr ?></span><br>
    Nim: <input type="text" name="nim" value="<?= $nim ?>"> <span class="error">* <?= $nimErr ?></span><br>
    Jenis Kelamin: <span class="error">* <?= $genderErr ?></span><br>
    <input type="radio" name="gender" value="Laki-laki" <?php if($gender=="Laki-laki") echo "checked";?>> Laki-laki<br>
    <input type="radio" name="gender" value="Perempuan" <?php if($gender=="Perempuan") echo "checked";?>> Perempuan<br>
    <button type="submit">Submit</button>
</form>

<?php 
if ($nama && $nim && $gender) {
    echo "<h3>Output:</h3> $nama <br> $nim <br> $gender";
}
?>