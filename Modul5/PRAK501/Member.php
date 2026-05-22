<?php
require "Model.php";
if (isset($_GET['hapus'])) {
    hapusMember($_GET['hapus']);
    header("Location: Member.php");
}
$members = getMember();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Member Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="header-section">
            <div>
                <a href="index.php" class="btn btn-back">← Kembali</a>
                <h2 style="margin-top: 10px;">Daftar Member Aktif</h2>
            </div>
            <a href="FormMember.php" class="btn btn-tambah">+ Tambah Member</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>No</th><th>Nama</th><th>Nomor Anggota</th><th>Alamat</th>
                    <th>Waktu Daftar (WITA)</th><th>Terakhir Bayar</th><th style="text-align: center;">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($members)): ?>
                    <tr><td colspan="7" class="empty-row">Belum ada data member terdaftar.</td></tr>
                <?php else: ?>
                    <?php $no = 1; foreach ($members as $m): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td style="font-weight: 600; color: #0f172a;"><?= htmlspecialchars($m['nama_member']); ?></td>
                            <td><code style="background:#f1f5f9; padding:2px 6px; border-radius:4px;"><?= htmlspecialchars($m['nomor_member']); ?></code></td>
                            <td><?= htmlspecialchars($m['alamat']); ?></td>
                            <td><?= date('d M Y - H:i', strtotime($m['tgl_mendaftar'])); ?> WITA</td>
                            <td><?= date('d M Y', strtotime($m['tgl_terakhir_bayar'])); ?></td>
                            <td style="text-align: center;">
                                <a href="FormMember.php?id=<?= $m['id_member']; ?>" class="btn btn-edit">Edit</a>
                                <a href="Member.php?hapus=<?= $m['id_member']; ?>" class="btn btn-hapus" onclick="return confirm('Yakin menghapus member ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>
</html>