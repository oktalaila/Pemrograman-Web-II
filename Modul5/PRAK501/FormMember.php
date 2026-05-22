<?php
date_default_timezone_set('Asia/Makassar');
require "Model.php";

$id = ""; $nama = ""; $nomor = ""; $alamat = ""; 
$tgl_daftar = date('Y-m-d\TH:i'); 
$tgl_bayar = date('Y-m-d');
$is_edit = false;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = getMemberById($id);
    if ($data) {
        $nama = $data['nama_member']; $nomor = $data['nomor_member']; $alamat = $data['alamat'];
        $tgl_daftar = date('Y-m-d\TH:i', strtotime($data['tgl_mendaftar']));
        $tgl_bayar = $data['tgl_terakhir_bayar'];
        $is_edit = true;
    }
}
if (isset($_POST['submit'])) {
    if ($is_edit) editMember($id, $_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    else tambahMember($_POST['nama_member'], $_POST['nomor_member'], $_POST['alamat'], $_POST['tgl_mendaftar'], $_POST['tgl_terakhir_bayar']);
    header("Location: Member.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title><?= $is_edit ? "Edit Member" : "Tambah Member"; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-card">
        <h2 style="border-bottom: 2px solid #f1f5f9; padding-bottom: 10px; margin-bottom: 25px;">
            <?= $is_edit ? "Update Profil Member" : "Registrasi Member Baru"; ?>
        </h2>
        <form action="" method="post">
            <div class="form-group"><label>Nama Lengkap:</label><input type="text" name="nama_member" value="<?= htmlspecialchars($nama); ?>" required></div>
            <div class="form-group"><label>Nomor Anggota (ID):</label><input type="text" name="nomor_member" value="<?= htmlspecialchars($nomor); ?>" required></div>
            <div class="form-group"><label>Alamat Tinggal:</label><textarea name="alamat" required><?= htmlspecialchars($alamat); ?></textarea></div>
            <div class="form-group"><label>Waktu Mendaftar (WITA):</label><input type="datetime-local" name="tgl_mendaftar" value="<?= $tgl_daftar; ?>" required>
            <span class="timezone-badge">🕰 Terkonfigurasi otomatis zona Asia/Makassar (WITA)</span></div>
            <div class="form-group"><label>Tanggal Terakhir Bayar:</label><input type="date" name="tgl_terakhir_bayar" value="<?= $tgl_bayar; ?>" required></div>
            <div class="btn-container">
                <a href="Member.php" class="btn btn-batal">Batal</a>
                <button type="submit" name="submit" class="btn btn-submit">Simpan Data</button>
            </div>
        </form>
    </div>
</body>
</html>