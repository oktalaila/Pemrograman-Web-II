<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku - Floral Aesthetic</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --brown-dark: #4A2E2B;
            --pink-lily: #E295B0;
            --pink-dark: #C87A96;
            --cream-bg: #F9F4F0;
        }
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: var(--cream-bg); 
            color: var(--brown-dark); 
            display: flex; 
            align-items: center; 
            min-height: 100vh; 
        }
        .card-custom { 
            border: none; 
            border-radius: 20px; 
            box-shadow: 0 15px 35px rgba(74, 46, 43, 0.08); 
            background: #ffffff; 
            padding: 2rem; 
        }
        .btn-primary-custom { 
            background-color: var(--pink-lily); 
            color: #ffffff; 
            border-radius: 12px; 
            padding: 0.8rem; 
            font-weight: 600; 
            border: none; 
            width: 100%; 
            transition: all 0.3s ease; 
        }
        .btn-primary-custom:hover { 
            background-color: var(--pink-dark); 
            transform: translateY(-2px); 
        }
        .btn-back { 
            color: var(--brown-dark); 
            font-weight: 600; 
            text-decoration: none; 
            display: inline-flex; 
            align-items: center; 
            margin-bottom: 1.5rem; 
            transition: color 0.2s; 
        }
        .btn-back:hover { color: var(--pink-lily); }
        .form-control { 
            border-radius: 10px; 
            border: 1.5px solid #EEDCD3; 
            padding: 0.7rem 1rem; 
            background-color: #FAFAF9; 
            color: var(--brown-dark); 
            font-size: 0.95rem;
        }
        .form-control:focus { 
            border-color: var(--pink-lily); 
            box-shadow: 0 0 0 4px rgba(226, 149, 176, 0.15); 
            background-color: #ffffff; 
        }
        .form-label { 
            font-weight: 600; 
            color: var(--brown-dark); 
            font-size: 0.85rem; 
            margin-bottom: 0.4rem; 
        }
    </style>
</head>
<body>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                
                <a href="<?= base_url('/buku') ?>" class="btn-back">
                    <i class="bi bi-arrow-left me-2"></i>Kembali ke Daftar
                </a>

                <div class="card card-custom">
                    <div class="text-center mb-4">
                        <div class="d-inline-block p-3 rounded-circle mb-3" style="background-color: var(--cream-bg);">
                            <i class="bi bi-flower1 fs-2" style="color: var(--pink-lily);"></i>
                        </div>
                        <h4 class="fw-bold" style="color: var(--brown-dark);">Tambah Buku</h4>
                    </div>

                    <?php if (session()->has('errors')) : ?>
                        <div class="alert alert-danger" style="border-radius: 10px; font-size: 0.85rem; background-color: #FFF2F2; border: none; color: #D32F2F;">
                            <ul class="mb-0 ps-3">
                                <?php foreach (session('errors') as $error) : ?>
                                    <li><?= $error ?></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('/buku/store') ?>" method="post">
                        <?= csrf_field() ?>

                        <div class="mb-3">
                            <label class="form-label">Judul Buku</label>
                            <input type="text" name="judul" class="form-control" value="<?= old('judul') ?>" placeholder="Cth: Laskar Pelangi">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penulis</label>
                            <input type="text" name="penulis" class="form-control" value="<?= old('penulis') ?>" placeholder="Nama penulis">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Penerbit</label>
                            <input type="text" name="penerbit" class="form-control" value="<?= old('penerbit') ?>" placeholder="Nama penerbit">
                        </div>

                        <div class="mb-4">
                            <label class="form-label">Tahun Terbit</label>
                            <input type="text" name="tahun_terbit" class="form-control" value="<?= old('tahun_terbit') ?>" placeholder="Cth: 2023">
                        </div>

                        <button type="submit" class="btn btn-primary-custom mt-2">
                            Simpan Buku Baru
                        </button>
                    </form>

                </div>
            </div>
        </div>
    </div>

</body>
</html>