<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Buku - Floral Aesthetic</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --brown-dark: #4A2E2B; 
            --pink-lily: #E295B0;  
            --pink-dark: #C87A96;  
            --cream-bg: #F9F4F0;  
            --brown-muted: #8C6A63; 
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--cream-bg);
            color: var(--brown-dark);
        }
        
        .navbar-custom {
            background-color: var(--brown-dark);
            border-bottom: 3px solid var(--pink-lily); 
        }
        .navbar-custom .navbar-brand, 
        .navbar-custom .navbar-text {
            color: var(--cream-bg) !important;
        }

        .btn-logout {
            color: var(--pink-lily);
            border: 1px solid var(--pink-lily);
            background: transparent;
        }
        .btn-logout:hover {
            background-color: var(--pink-lily);
            color: var(--brown-dark) !important;
        }
        
        .card-custom {
            border: none;
            border-radius: 16px;
            background: #ffffff;
            box-shadow: 0 10px 30px rgba(74, 46, 43, 0.08);
        }

        .btn-primary-custom {
            background-color: var(--pink-lily);
            color: #ffffff;
            border-radius: 10px;
            padding: 0.6rem 1.2rem;
            font-weight: 600;
            font-size: 0.9rem;
            border: none;
            transition: all 0.2s ease;
        }
        .btn-primary-custom:hover {
            background-color: var(--pink-dark);
            color: #ffffff;
            transform: translateY(-2px);
        }

        .table > :not(caption) > * > * {
            padding: 1.2rem 1rem;
            border-bottom-color: #F0E6E1; 
        }
        .table thead th {
            background-color: var(--cream-bg);
            color: var(--brown-dark);
            font-size: 0.85rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            border-bottom: none;
        }
        .table tbody tr:hover {
            background-color: #FFF9F7; 
        }
        
        .badge-year {
            background-color: var(--cream-bg);
            color: var(--brown-dark);
            font-weight: 600;
            padding: 0.4rem 0.8rem;
            border-radius: 6px;
            border: 1px solid #EEDCD3;
        }

        .text-muted {
            color: var(--brown-muted) !important;
        }
        
        .btn-action {
            border-radius: 8px;
            padding: 0.4rem 0.8rem;
            font-size: 0.85rem;
        }
        .text-pink { color: var(--pink-lily); }
        .text-pink:hover { color: var(--pink-dark); }
        .text-brown { color: var(--brown-dark); }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-custom py-3 mb-5 shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="bi bi-flower1 me-2" style="color: var(--pink-lily);"></i>SmartLibrary
            </a>
            <div class="d-flex align-items-center">
                <span class="navbar-text me-4 d-none d-md-block" style="font-weight: 500;">
                    Halo, Admin
                </span>
                <a href="<?= base_url('/logout') ?>" class="btn btn-sm btn-logout fw-bold rounded-pill px-3">
                    Logout
                </a>
            </div>
        </div>
    </nav>

    <div class="container">
        
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success border-0 shadow-sm rounded-4 mb-4" style="background-color: #E8F5E9; color: #2E7D32;" role="alert">
                <i class="bi bi-check-circle-fill me-2"></i> <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <div class="card card-custom">
            <div class="card-body p-4 p-md-5">
                
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div>
                        <h4 class="fw-bold mb-1" style="color: var(--brown-dark);">Daftar Buku</h4>
                        <p class="text-muted small mb-0">Manajemen koleksi buku perpustakaan</p>
                    </div>
                    <a href="<?= base_url('/buku/create') ?>" class="btn btn-primary-custom shadow-sm">
                        <i class="bi bi-plus-lg me-1"></i> Tambah Data
                    </a>
                </div>
                
                <div class="table-responsive mt-2">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th class="text-center rounded-start" style="width: 5%;">No</th>
                                <th style="width: 25%;">Judul Buku</th>
                                <th style="width: 20%;">Penulis</th>
                                <th style="width: 20%;">Penerbit</th>
                                <th class="text-center" style="width: 15%;">Tahun</th>
                                <th class="text-center rounded-end" style="width: 15%;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(empty($buku)): ?>
                                <tr>
                                    <td colspan="6" class="text-center py-5 text-muted">
                                        Data buku masih kosong.
                                    </td>
                                </tr>
                            <?php else: ?>
                                <?php $i = 1; foreach($buku as $row): ?>
                                <tr>
                                    <td class="text-center fw-semibold text-muted"><?= $i++ ?></td>
                                    <td class="fw-bold" style="color: var(--brown-dark);"><?= $row['judul'] ?></td>
                                    <td class="text-muted"><?= $row['penulis'] ?></td>
                                    <td class="text-muted"><?= $row['penerbit'] ?></td>
                                    <td class="text-center">
                                        <span class="badge-year"><?= $row['tahun_terbit'] ?></span>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= base_url('/buku/edit/'.$row['id']) ?>" class="btn btn-action text-brown" title="Edit">
                                            <i class="bi bi-pencil-square fs-5"></i>
                                        </a>
                                        <a href="<?= base_url('/buku/delete/'.$row['id']) ?>" class="btn btn-action text-pink" onclick="return confirm('Yakin ingin menghapus?')" title="Hapus">
                                            <i class="bi bi-trash3-fill fs-5"></i>
                                        </a>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>