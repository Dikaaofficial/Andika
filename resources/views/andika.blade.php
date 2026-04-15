<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMIT - Himpunan Mahasiswa Informatika</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', system-ui, sans-serif;
            line-height: 1.7;
            color: #1f2937;
        }
        .hero {
            background: linear-gradient(rgba(15, 23, 42, 0.88), rgba(30, 64, 175, 0.85)), 
                        url('https://source.unsplash.com/random/1920x1080/?coding,technology') center/cover no-repeat;
            height: 100vh;
            display: flex;
            align-items: center;
            color: white;
            text-align: center;
        }
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 24px;
        }
        nav {
            background: rgba(255, 255, 255, 0.97);
            backdrop-filter: blur(12px);
            position: fixed;
            width: 100%;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }
        .nav-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 18px 0;
        }
        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 28px;
            font-weight: 700;
            color: #1e40af;
        }
        .nav-links a {
            margin: 0 18px;
            text-decoration: none;
            color: #374151;
            font-weight: 500;
        }
        .nav-links a:hover {
            color: #1e40af;
        }
        .btn {
            padding: 12px 32px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.4s;
        }
        .btn-primary {
            background: #1e40af;
            color: white;
        }
        .btn-primary:hover {
            background: #1e3a8a;
            transform: translateY(-3px);
        }

        h1 { font-size: 3.6rem; line-height: 1.15; font-weight: 700; }
        h2 { font-size: 2.6rem; font-weight: 700; color: #1e40af; text-align: center; }

        .section { padding: 100px 0; }
        .visi-misi {
            background: linear-gradient(135deg, #0f172a 0%, #1e40af 100%);
            color: white;
        }
        .card {
            background: white;
            padding: 45px 35px;
            border-radius: 24px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            transition: all 0.4s ease;
            height: 100%;
        }
        .card:hover {
            transform: translateY(-15px);
            box-shadow: 0 30px 60px rgba(0,0,0,0.15);
        }
        .icon-circle {
            width: 85px;
            height: 85px;
            background: linear-gradient(135deg, #1e40af, #60a5fa);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            margin: 0 auto 25px;
        }
        .footer {
            background: #0f172a;
            color: #94a3b8;
            text-align: center;
            padding: 70px 0 40px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav>
        <div class="container nav-content">
            <div class="logo">
                <i class="fas fa-laptop-code"></i>
                HMIT
            </div>
            <div class="nav-links">
                <a href="#tentang">Tentang</a>
                <a href="#visimisi">Visi & Misi</a>
                <a href="#program">Program</a>
                <a href="#kontak">Kontak</a>
            </div>
            <a href="#kontak" class="btn btn-primary">Hubungi Kami</a>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        <div class="container">
            <h1>Himpunan Mahasiswa Informatika</h1>
            <p style="font-size: 1.45rem; max-width: 720px; margin: 25px auto; opacity: 0.95;">
                Wadah aspirasi, inovasi, dan pengembangan diri mahasiswa Informatika
            </p>
            <a href="#visimisi" class="btn btn-primary" style="font-size: 1.15rem; padding: 16px 45px;">
                Kenali HMIT
            </a>
        </div>
    </section>

    <!-- Tentang -->
    <section id="tentang" class="section" style="background: #f8fafc;">
        <div class="container">
            <div style="max-width: 820px; margin: 0 auto; text-align: center;">
                <h2>Tentang HMIT</h2>
                <p style="font-size: 1.25rem; margin-top: 30px;">
                    HMIT (Himpunan Mahasiswa Informatika) adalah organisasi kemahasiswaan resmi yang berfungsi sebagai wadah bagi mahasiswa Informatika untuk mengembangkan potensi akademik, non-akademik, kepemimpinan, kreativitas, serta inovasi di bidang teknologi informasi.
                </p>
            </div>
        </div>
    </section>

    <!-- Visi & Misi (Keren) -->
    <section id="visimisi" class="section visi-misi">
        <div class="container">
            <h2 style="color: white; margin-bottom: 70px;">Visi & Misi</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(380px, 1fr)); gap: 35px;">
                
                <!-- Visi -->
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3 style="font-size: 28px; text-align: center; margin-bottom: 20px; color: #1e40af;">Visi</h3>
                    <p style="font-size: 1.18rem; text-align: center; color: #374151;">
                        Menjadi himpunan mahasiswa yang unggul dalam menciptakan generasi informatika yang inovatif, berintegritas, berprestasi, dan mampu memberikan kontribusi nyata bagi kemajuan teknologi dan masyarakat.
                    </p>
                </div>

                <!-- Misi -->
                <div class="card">
                    <div class="icon-circle">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3 style="font-size: 28px; text-align: center; margin-bottom: 20px; color: #1e40af;">Misi</h3>
                    <ul style="font-size: 1.12rem; line-height: 2.1; color: #374151;">
                        <li><strong>1.</strong> Mengembangkan kompetensi teknis dan soft skill mahasiswa melalui program berkualitas</li>
                        <li><strong>2.</strong> Menyelenggarakan kegiatan inovatif yang mendukung pengembangan karir di bidang IT</li>
                        <li><strong>3.</strong> Membangun kolaborasi strategis dengan industri, alumni, dan komunitas teknologi</li>
                        <li><strong>4.</strong> Menumbuhkan jiwa kepemimpinan, etika profesional, dan kepedulian sosial</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Kerja -->
    <section id="program" class="section" style="background: white;">
        <div class="container">
            <h2>Program Kerja Unggulan</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
                <div class="card">
                    <h3 style="font-size: 1.55rem; margin-bottom: 15px;">💻 Tech Workshop Series</h3>
                    <p>Pelatihan intensif programming, web & mobile development, data science, dan teknologi terkini.</p>
                </div>
                <div class="card">
                    <h3 style="font-size: 1.55rem; margin-bottom: 15px;">🎤 Seminar & Talkshow</h3>
                    <p>Menghadirkan pembicara dari perusahaan teknologi nasional dan internasional.</p>
                </div>
                <div class="card">
                    <h3 style="font-size: 1.55rem; margin-bottom: 15px;">🏆 IT Competition & Hackathon</h3>
                    <p>Kompetisi tahunan untuk mengasah kreativitas dan kemampuan problem solving.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section style="background: linear-gradient(to right, #1e40af, #3b82f6); color: white; text-align: center; padding: 100px 0;">
        <div class="container">
            <h2 style="color: white; font-size: 2.8rem;">Siap Berkontribusi untuk Masa Depan?</h2>
            <p style="font-size: 1.35rem; margin: 25px 0 35px;">Bergabunglah dengan HMIT dan wujudkan ide-ide inovatifmu bersama kami</p>
            <a href="#" class="btn" style="background: white; color: #1e40af; font-size: 1.2rem; padding: 16px 50px;">
                Daftar Menjadi Anggota
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div style="font-size: 32px; font-weight: 700; color: white; margin-bottom: 8px;">HMIT</div>
            <p>Himpunan Mahasiswa Informatika</p>
            <p style="margin-top: 40px; opacity: 0.7;">© 2026 All Rights Reserved</p>
        </div>
    </footer>

</body>
</html>