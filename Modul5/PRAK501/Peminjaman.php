<?php
require "Model.php";
if (isset($_GET['hapus'])) {
    hapusPeminjaman($_GET['hapus']);
    header("Location: Peminjaman.php");
}
$peminjamans = getPeminjaman();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Peminjaman Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header-section">
            <div>
                <a href="index.php" class="btn btn-back">← Kembali</a>
                <h2 style="margin-top: 10px;">Data Peminjaman</h2>
            </div>
            <a href="FormPeminjaman.php" class="btn btn-tambah" style="background: #f97316;">+ Tambah Peminjaman</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>No</th><th>ID Member</th><th>ID Buku</th><th>Tgl Pinjam</th><th>Tgl Kembali</th><th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($peminjamans)): ?>
                    <tr><td colspan="6" class="empty-row">Belum ada data peminjaman.</td></tr>
                <?php else: ?>
                    <?php $no = 1; foreach ($peminjamans as $p): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><code style="background:#f1f5f9; padding:2px 6px; border-radius:4px;"><?= htmlspecialchars($p['id_member']); ?></code></td>
                            <td><code style="background:#f1f5f9; padding:2px 6px; border-radius:4px;"><?= htmlspecialchars($p['id_buku']); ?></code></td>
                            <td><?= date('d M Y', strtotime($p['tgl_pinjam'])); ?></td>
                            <td><?= date('d M Y', strtotime($p['tgl_kembali'])); ?></td>
                            <td style="text-align: center;">
                                <a href="FormPeminjaman.php?id=<?= $p['id_peminjaman']; ?>" class="btn btn-edit">Edit</a>
                                <a href="Peminjaman.php?hapus=<?= $p['id_peminjaman']; ?>" class="btn btn-hapus" onclick="return confirm('Yakin menghapus data peminjaman ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>