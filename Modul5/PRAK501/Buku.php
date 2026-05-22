<?php
require "Model.php";
if (isset($_GET['hapus'])) {
    hapusBuku($_GET['hapus']);
    header("Location: Buku.php");
}
$bukus = getBuku();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Katalog Buku Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header-section">
            <div>
                <a href="index.php" class="btn btn-back">← Kembali</a>
                <h2 style="margin-top: 10px;">Katalog Buku</h2>
            </div>
            <a href="FormBuku.php" class="btn btn-tambah" style="background: #22c55e;">+ Tambah Koleksi Buku</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th><th>Judul Koleksi Buku</th><th>Nama Penulis</th><th>Nama Penerbit</th><th>Tahun Terbit</th><th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($bukus)): ?>
                    <tr><td colspan="6" class="empty-row">Belum ada katalog buku.</td></tr>
                <?php else: ?>
                    <?php $no = 1; foreach ($bukus as $b): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td style="font-weight: 600; color: #0f172a;"><?= htmlspecialchars($b['judul_buku']); ?></td>
                            <td><?= htmlspecialchars($b['penulis']); ?></td>
                            <td><?= htmlspecialchars($b['penerbit']); ?></td>
                            <td><span style="background: #f0fdf4; color: #16a34a; padding: 2px 8px; border-radius: 12px; font-size: 12px; font-weight: 600;"><?= $b['tahun_terbit']; ?></span></td>
                            <td style="text-align: center;">
                                <a href="FormBuku.php?id=<?= $b['id_buku']; ?>" class="btn btn-edit">Edit</a>
                                <a href="Buku.php?hapus=<?= $b['id_buku']; ?>" class="btn btn-hapus" onclick="return confirm('Yakin menghapus data buku ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>