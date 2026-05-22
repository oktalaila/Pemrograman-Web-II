<?php
require "Model.php";

$id = ""; $id_member = ""; $id_buku = ""; 

$tgl_pinjam = date('Y-m-d');
$tgl_kembali = date('Y-m-d', strtotime('+7 days'));

$is_edit = false;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getPeminjamanById($id);
    if ($data) {
        $id_member = $data['id_member']; 
        $id_buku = $data['id_buku'];
        $tgl_pinjam = $data['tgl_pinjam']; 
        $tgl_kembali = $data['tgl_kembali'];
        $is_edit = true;
    }
}

if (isset($_POST['submit'])) {
    if ($is_edit) {
        editPeminjaman($id, $_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    } else {
        tambahPeminjaman($_POST['id_member'], $_POST['id_buku'], $_POST['tgl_pinjam'], $_POST['tgl_kembali']);
    }
    header("Location: Peminjaman.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $is_edit ? "Edit Peminjaman" : "Tambah Peminjaman"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-card">
        <h2 style="border-bottom: 2px solid #f1f5f9; padding-bottom: 10px; margin-bottom: 25px;">
            <?= $is_edit ? "Edit Detail Peminjaman" : "Tambah Peminjaman Baru"; ?>
        </h2>
        <form action="" method="post">
            <div class="form-group">
                <label>ID Member:</label>
                <input type="text" name="id_member" value="<?= htmlspecialchars($id_member); ?>" required>
            </div>
            <div class="form-group">
                <label>ID Buku:</label>
                <input type="text" name="id_buku" value="<?= htmlspecialchars($id_buku); ?>" required>
            </div>
            
            <div class="form-group">
                <label>Tanggal Pinjam:</label>
                <input type="date" id="tgl_pinjam" name="tgl_pinjam" value="<?= $tgl_pinjam; ?>" required onchange="hitungOtomatis()">
            </div>
            
            <div class="form-group">
                <label>Tanggal Kembali (Max 7 Hari):</label>
                <input type="date" id="tgl_kembali" name="tgl_kembali" value="<?= $tgl_kembali; ?>" required>
            </div>
            
            <div class="btn-container">
                <a href="Peminjaman.php" class="btn btn-batal">Batal</a>
                <button type="submit" name="submit" class="btn btn-submit" style="background: #f97316;">Simpan Data</button>
            </div>
        </form>
    </div>

    <script>
        function hitungOtomatis() {
            let tglPinjam = document.getElementById('tgl_pinjam').value;
            
            if (tglPinjam) {
                let dateObj = new Date(tglPinjam);
                
                dateObj.setDate(dateObj.getDate() + 7);
                
                let year = dateObj.getFullYear();
                let month = String(dateObj.getMonth() + 1).padStart(2, '0');
                let day = String(dateObj.getDate()).padStart(2, '0');
                
                document.getElementById('tgl_kembali').value = `${year}-${month}-${day}`;
            }
        }
    </script>
</body>
</html>