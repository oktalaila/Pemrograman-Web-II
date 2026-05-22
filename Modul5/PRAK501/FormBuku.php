<?php
require "Model.php";
$id = ""; $judul = ""; $penulis = ""; $penerbit = ""; $tahun = ""; $is_edit = false;
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getBukuById($id);
    if ($data) {
        $judul = $data['judul_buku']; $penulis = $data['penulis'];
        $penerbit = $data['penerbit']; $tahun = $data['tahun_terbit'];
        $is_edit = true;
    }
}
if (isset($_POST['submit'])) {
    if ($is_edit) editBuku($id, $_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    else tambahBuku($_POST['judul_buku'], $_POST['penulis'], $_POST['penerbit'], $_POST['tahun_terbit']);
    header("Location: Buku.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $is_edit ? "Edit Buku" : "Tambah Buku"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-card">
        <h2 style="border-bottom: 2px solid #f1f5f9; padding-bottom: 10px; margin-bottom: 25px;">
            <?= $is_edit ? "Edit Detail Buku" : "Tambah Buku Baru"; ?>
        </h2>
        <form action="" method="post">
            <div class="form-group"><label>Judul Buku:</label><input type="text" name="judul_buku" value="<?= htmlspecialchars($judul); ?>" required></div>
            <div class="form-group"><label>Penulis / Pengarang:</label><input type="text" name="penulis" value="<?= htmlspecialchars($penulis); ?>" required></div>
            <div class="form-group"><label>Penerbit:</label><input type="text" name="penerbit" value="<?= htmlspecialchars($penerbit); ?>" required></div>
            <div class="form-group"><label>Tahun Terbit:</label><input type="number" name="tahun_terbit" value="<?= $tahun; ?>" required></div>
            <div class="btn-container">
                <a href="Buku.php" class="btn btn-batal">Batal</a>
                <button type="submit" name="submit" class="btn btn-submit" style="background: #22c55e;">Simpan Buku</button>
            </div>
        </form>
    </div>
</body>
</html>