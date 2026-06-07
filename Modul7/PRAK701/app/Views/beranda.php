<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang - SmartLibrary</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
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
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: radial-gradient(#e4d6d4 1.5px, transparent 1.5px);
            background-size: 30px 30px; 
            overflow: hidden;
        }
        
        
        .hero-card {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(10px);
            border-radius: 32px; /* Lengkungan diperhalus */
            padding: 5rem 4rem; 
            box-shadow: 0 20px 40px rgba(74, 46, 43, 0.08);
            border: 2px solid #ffffff;
        }

        .btn-primary-custom {
            background-color: var(--pink-lily);
            color: #ffffff;
            border-radius: 50px;
            padding: 1rem 3rem;
            font-weight: 600;
            font-size: 1.1rem;
            border: none;
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            background-color: var(--pink-dark);
            color: #ffffff;
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(226, 149, 176, 0.4);
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-15px); }
            100% { transform: translateY(0px); }
        }
        .animate-float {
            animation: float 4s ease-in-out infinite;
            display: inline-block;
        }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade-1 { animation: fadeInUp 0.8s ease-out forwards; opacity: 0; }
        .animate-fade-2 { animation: fadeInUp 0.8s ease-out 0.3s forwards; opacity: 0; }
        .animate-fade-3 { animation: fadeInUp 0.8s ease-out 0.6s forwards; opacity: 0; }
    </style>
</head>
<body>

    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="hero-card">
                    
                    <i class="bi bi-flower1 display-1 mb-4 animate-float" style="color: var(--pink-lily); font-size: 5rem;"></i>
                    
                    <h1 class="display-4 fw-bold mb-4 animate-fade-1" style="color: var(--brown-dark); letter-spacing: -1px;">
                        SmartLibrary
                    </h1>
                    
                    <p class="lead mb-5 animate-fade-2" style="color: #8C6A63; font-size: 1.15rem; line-height: 1.8; padding: 0 1rem;">
                        Sistem manajemen perpustakaan modern dengan sentuhan estetika. 
                        Kelola koleksi bukumu dengan lebih mudah, rapi, dan elegan.
                    </p>
                    
                    <div class="animate-fade-3">
                        <a href="<?= base_url('/login') ?>" class="btn btn-primary-custom text-decoration-none">
                            Mulai Login <i class="bi bi-arrow-right ms-2"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
</html>