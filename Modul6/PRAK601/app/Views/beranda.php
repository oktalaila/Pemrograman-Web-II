<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home. - PRAK601</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Quicksand', sans-serif; background-color: #F4C9D6; color: #3E2723; overflow: hidden; height: 100vh; }
        
        .ground { position: fixed; bottom: 0; left: 0; width: 100%; height: 25vh; background-color: #C1E1C1; border-top: 3px solid #3E2723; z-index: 1; }
        .desktop-icons { position: fixed; top: 40px; left: 40px; display: flex; flex-direction: column; gap: 30px; z-index: 10; }
        .nav-icon { display: flex; flex-direction: column; align-items: center; text-decoration: none; color: #3E2723; font-weight: 700; font-size: 0.9rem; transition: transform 0.2s; }
        .nav-icon:hover { transform: translateY(-5px); }
        .icon-emoji { font-size: 2.8rem; margin-bottom: 5px; }
        
        .window-container { position: absolute; top: 0; left: 0; width: 100vw; height: 100vh; display: flex; align-items: center; justify-content: center; z-index: 5; pointer-events: none; }
        
        .os-window { pointer-events: auto; background-color: #FFFDF5; border: 3px solid #3E2723; border-radius: 12px; box-shadow: 8px 8px 0px #3E2723; overflow: hidden; width: 90%; max-width: 550px; display: flex; flex-direction: column; }
        
        .os-header { border-bottom: 3px solid #3E2723; padding: 12px 18px; display: flex; justify-content: space-between; align-items: center; background-color: #FFFDF5; }
        .dots { display: flex; gap: 8px; }
        .dot { width: 14px; height: 14px; border-radius: 50%; border: 2px solid #3E2723; }
        .dot.red { background-color: #FF5E5B; }
        .dot.yellow { background-color: #FFC93C; }
        .dot.green { background-color: #C1E1C1; }
        .window-title { font-weight: 700; font-size: 1.1rem; letter-spacing: 0.5px; }
        
        .os-content { padding: 50px 30px; text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; gap: 15px; }
        
        .main-heading { font-size: 2.2rem; font-weight: 700; color: #3E2723; }
        .sub-heading { font-size: 1rem; font-weight: 600; color: #6D4C41; margin-bottom: 15px; }
        
        .btn-about { display: inline-block; text-decoration: none; background-color: #C1E1C1; color: #3E2723; font-weight: 700; font-size: 1rem; padding: 12px 40px; border: 3px solid #3E2723; border-radius: 50px; box-shadow: 0px 4px 0px #3E2723; transition: all 0.2s; cursor: pointer; }
        .btn-about:hover { transform: translateY(-2px); box-shadow: 0px 6px 0px #3E2723; }
        .btn-about:active { transform: translateY(2px); box-shadow: 0px 2px 0px #3E2723; }
    </style>
</head>
<body>
    <div class="ground"></div>

    <div class="desktop-icons">
        <a href="<?= base_url('/') ?>" class="nav-icon">
            <span class="icon-emoji">🐰</span>
            <span>homepage</span>
        </a>
        <a href="<?= base_url('/profil') ?>" class="nav-icon">
            <span class="icon-emoji">🌷</span>
            <span>about me</span>
        </a>
    </div>

    <div class="window-container">
        <div class="os-window">
            <div class="os-header">
                <div class="dots">
                    <div class="dot red"></div>
                    <div class="dot yellow"></div>
                    <div class="dot green"></div>
                </div>
                <div class="window-title">home.</div>
            </div>
            
            <div class="os-content">
                <h1 class="main-heading">hi, i'm <?= esc($nama); ?></h1>
                <p class="sub-heading"><?= esc($prodi); ?> student • NIM. <?= esc($nim); ?></p>
                <a href="<?= base_url('/profil') ?>" class="btn-about">About Me</a>
            </div>
        </div>
    </div>
</body>
</html>