<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - SmartLibrary</title>
    
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
            padding: 2.5rem 2rem; 
        }
        .form-control { 
            border-radius: 10px; 
            border: 1.5px solid #EEDCD3; 
            padding: 0.8rem 1rem; 
            background-color: #FAFAF9; 
            color: var(--brown-dark); 
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
        .btn-primary-custom { 
            background-color: var(--brown-dark); 
            color: #ffffff; 
            border-radius: 12px; 
            padding: 0.8rem; 
            font-weight: 600; 
            border: none; 
            width: 100%; 
            transition: all 0.3s ease; 
        }
        .btn-primary-custom:hover { 
            background-color: #311e1c; 
            color: #ffffff;
            transform: translateY(-2px); 
        }
    </style>
</head>
<body>

    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                
                <div class="text-center mb-4">
                    <a href="<?= base_url('/') ?>" class="text-decoration-none">
                        <i class="bi bi-flower1" style="font-size: 3rem; color: var(--pink-lily);"></i>
                    </a>
                </div>

                <div class="card card-custom">
                    <div class="text-center mb-4">
                        <h4 class="fw-bold" style="color: var(--brown-dark);">Selamat Datang</h4>
                        <p class="text-muted small" style="color: #8C6A63 !important;">Silakan masuk ke akun Anda</p>
                    </div>

                    <?php if(session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger" style="border-radius: 10px; font-size: 0.85rem; background-color: #FFF2F2; border: none; color: #D32F2F;">
                            <i class="bi bi-exclamation-circle me-1"></i> <?= session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>

                    <form action="<?= base_url('/login/process') ?>" method="post">
                        <?= csrf_field() ?>
                        
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Ketik username Anda" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Ketik password Anda" required>
                        </div>
                        
                        <button type="submit" class="btn btn-primary-custom mt-2">
                            Masuk Sekarang
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</body>
</html>