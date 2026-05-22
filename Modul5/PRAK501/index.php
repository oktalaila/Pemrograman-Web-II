<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Perpustakaan - PRAK501</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="dashboard">
        <h1>Sistem Informasi Perpustakaan</h1>
        <p style="color: #64748b; margin-bottom: 35px;">Manajemen data operasional perpustakaan secara terintegrasi</p>
        <div class="menu-grid">
            <a href="Member.php" class="card">
                <div class="card-icon">👥</div>
                <div class="card-title">Manajemen Member</div>
                <div style="font-size: 13px; color: #94a3b8;">Kelola keanggotaan perpustakaan</div>
            </a>
            <a href="Buku.php" class="card">
                <div class="card-icon" style="background:#f0fdf4; color:#22c55e;">📚</div>
                <div class="card-title">Manajemen Buku</div>
                <div style="font-size: 13px; color: #94a3b8;">Kelola katalog dan data buku</div>
            </a>
            <a href="Peminjaman.php" class="card">
                <div class="card-icon" style="background:#fff7ed; color:#f97316;">⏳</div>
                <div class="card-title">Data Peminjaman</div>
                <div style="font-size: 13px; color: #94a3b8;">Catat sirkulasi pinjam kembali</div>
            </a>
        </div>
    </div>
</body>
</html>