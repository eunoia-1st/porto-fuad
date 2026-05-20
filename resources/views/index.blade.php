<!doctype html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio | Fuad Ma'ruf</title>
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: #f4f7f6;
            color: #333;
            line-height: 1.6;
        }

        /* Container */
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px 20px;
        }

        /* Header / Profile Section */
        header {
            text-align: center;
            margin-bottom: 50px;
        }

        .profile-img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background-color: #ddd;
            margin-bottom: 20px;
            object-fit: cover;
            border: 5px solid #fff;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 1.2rem;
            color: #3498db;
            font-weight: 600;
        }

        /* Section Styles */
        section {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.05);
        }

        h2 {
            border-bottom: 2px solid #3498db;
            display: inline-block;
            margin-bottom: 20px;
            padding-bottom: 5px;
            color: #2c3e50;
        }

        /* Skills Tags */
        .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skill-tag {
            background: #e1f0fa;
            color: #3498db;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: bold;
        }

        /* Portfolio Grid Styles */
        .portfolio-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 20px;
        }

        @media (min-width: 600px) {
            .portfolio-grid {
                grid-template-columns: 1fr 1fr;
            }
        }

        .portfolio-card {
            border: 1px solid #eee;
            border-radius: 8px;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.02);
        }

        .portfolio-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }

        .portfolio-info {
            padding: 15px;
        }

        .portfolio-info h3 {
            margin-bottom: 8px;
            color: #2c3e50;
        }

        .portfolio-info p {
            font-size: 0.9rem;
            color: #666;
        }

        /* Footer / Contact */
        footer {
            text-align: center;
            margin-top: 40px;
            color: #7f8c8d;
        }

        .social-links a {
            margin: 0 10px;
            color: #3498db;
            text-decoration: none;
            font-weight: bold;
        }

        .social-links a:hover {
            text-decoration: underline;
        }

        /* Responsive */
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <img src="{{ asset('images/foto_profil.png') }}" alt="Foto Profil" class="profile-img" />
            <h1>Halo, Saya Fuad Ma'ruf</h1>
            <p class="subtitle">
                Mahasiswa Teknik Informatika & Network Enthusiast
            </p>
        </header>

        <section id="about">
            <h2>Tentang Saya</h2>
            <p>
                Saya adalah seorang mahasiswa IT yang memiliki minat besar dalam dunia
                teknologi, khususnya dalam pengembangan jaringan dan keamanan siber.
                Saya senang mempelajari hal baru dan membangun proyek-proyek teknis di
                waktu luang.
            </p>
        </section>

        <section id="skills">
            <h2>Keahlian</h2>
            <div class="skills">
                <span class="skill-tag">Network Engineering</span>
                <span class="skill-tag">Linux Administration</span>
                <span class="skill-tag">Virtualization</span>
                <span class="skill-tag">Cybersecurity</span>
                <span class="skill-tag">Python</span>
                <span class="skill-tag">HTML/CSS</span>
            </div>
        </section>

        <section id="projects">
            <h2>Proyek Portofolio</h2>
            <div class="portfolio-grid">
                @forelse($projects as $project)
                    <div class="portfolio-card">
                        <img src="{{ $project->media }}" alt="{{ $project->title }}">
                        <div class="portfolio-info">
                            <h3>{{ $project->title }}</h3>
                            <p>{{ $project->description }}</p>
                        </div>
                    </div>
                @empty
                    <p style="color: #999; grid-column: 1/-1;">Belum ada proyek yang ditambahkan.</p>
                @endforelse
            </div>
        </section>

        <section id="contact">
            <h2>Kontak</h2>
            <p>
                Mari terhubung! Anda bisa menghubungi saya melalui platform di bawah
                ini:
            </p>
            <div class="social-links" style="margin-top: 15px">
                <a href="mailto:email@anda.com">Email</a>
                <a href="https://linkedin.com/in/username">LinkedIn</a>
                <a href="https://github.com/username">GitHub</a>
            </div>
        </section>

        <footer>
            <p>&copy; 2026 Fuad Ma'ruf. Copyright.</p>
        </footer>
    </div>
</body>

</html>
