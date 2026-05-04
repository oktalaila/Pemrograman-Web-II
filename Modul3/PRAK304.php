<?php
$bintang = isset($_POST['bintang']) ? $_POST['bintang'] : 0;
if (isset($_POST['tambah'])) $bintang++;
if (isset($_POST['kurang']) && $bintang > 0) $bintang--;
?>

<?php if ($bintang == 0): ?>
<form method="POST">
    Jumlah bintang <input type="number" name="bintang" required><br>
    <button type="submit" name="submit">Submit</button>
</form>
<?php endif; ?>

<?php if ($bintang > 0): ?>
    <form method="POST">
        <p>Jumlah bintang <?= $bintang ?></p>
        <?php
        for ($i = 0; $i < $bintang; $i++) {
            echo "<img src='https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png' width='50px'> ";
        }
        ?>
        <input type="hidden" name="bintang" value="<?= $bintang ?>">
        <br>
        <button type="submit" name="tambah">Tambah</button>
        <button type="submit" name="kurang">Kurang</button>
    </form>
<?php endif; ?>