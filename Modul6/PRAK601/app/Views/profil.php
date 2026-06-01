<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about me. - PRAK601</title>
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
        
        .os-window { pointer-events: auto; background-color: #FFFDF5; border: 3px solid #3E2723; border-radius: 12px; box-shadow: 8px 8px 0px #3E2723; overflow: hidden; width: 90%; max-width: 600px; display: flex; flex-direction: column; max-height: 80vh; }
        
        .os-header { flex-shrink: 0; border-bottom: 3px solid #3E2723; padding: 12px 18px; display: flex; justify-content: space-between; align-items: center; background-color: #FFFDF5; }
        .dots { display: flex; gap: 8px; }
        .dot { width: 14px; height: 14px; border-radius: 50%; border: 2px solid #3E2723; }
        .dot.red { background-color: #FF5E5B; }
        .dot.yellow { background-color: #FFC93C; }
        .dot.green { background-color: #C1E1C1; }
        .window-title { font-weight: 700; font-size: 1.1rem; letter-spacing: 0.5px; }
        
        .os-content { overflow-y: auto; padding: 30px 40px; text-align: center; }
        
        .os-content::-webkit-scrollbar { width: 12px; }
        .os-content::-webkit-scrollbar-track { background: #FFFDF5; border-left: 2px solid #F4C9D6; }
        .os-content::-webkit-scrollbar-thumb { background: #FFC93C; border: 2px solid #3E2723; border-radius: 6px; }
        
        .avatar-container { margin: 0 auto 20px auto; width: 110px; height: 110px; border-radius: 50%; border: 3px solid #3E2723; overflow: hidden; background-color: white; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .avatar-img { width: 100%; height: 100%; object-fit: cover; }
        
        .bio-box { border: 2px dashed #3E2723; padding: 25px; border-radius: 12px; font-size: 0.95rem; font-weight: 600; line-height: 1.6; background-color: rgba(255, 255, 255, 0.5); text-align: left; margin-bottom: 25px; }
        
        .info-list { display: flex; flex-direction: column; gap: 12px; }
        .info-item { display: flex; align-items: flex-start; border-bottom: 1px dotted #3E2723; padding-bottom: 8px; }
        .info-item:last-child { border-bottom: none; padding-bottom: 0; }
        .info-label { width: 130px; font-weight: 700; color: #FF5E5B; flex-shrink: 0; }
        .info-value { flex: 1; color: #3E2723; }
        
        .pantun-text { font-style: italic; color: #8A5A44; font-size: 0.95rem; font-weight: 700; text-align: center; line-height: 1.5; padding-bottom: 10px; }
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
                <div class="window-title">about me.</div>
            </div>
            
            <div class="os-content">
                <div class="avatar-container">
                    <img src="<?= base_url('foto.png') ?>" onerror="this.style.display='none'; this.nextElementSibling.style.display='block';" alt="Foto" class="avatar-img">
                    <div style="display: none; font-size: 3.5rem; line-height: 110px;">🌸</div>
                </div>
                
                <div class="bio-box">
                    <div class="info-list">
                        <div class="info-item">
                            <div class="info-label">Nama Lengkap</div>
                            <div class="info-value">: <?= esc($nama); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">NIM</div>
                            <div class="info-value">: <?= esc($nim); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Asal Prodi</div>
                            <div class="info-value">: <?= esc($prodi); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Hobi</div>
                            <div class="info-value">: <?= esc($hobi); ?></div>
                        </div>
                        <div class="info-item">
                            <div class="info-label">Skill</div>
                            <div class="info-value">: <?= esc($skill); ?></div>
                        </div>
                    </div>
                </div>
                
                <div class="pantun-text">
                    "Tukang somay main futsal,<br>
                    pretend to be okay, padahal stress totall"
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>