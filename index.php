<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Sampah | Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            padding-top: 76px;
            color: #2C3E50;
        }

        /* Hero Section */
        .hero {
            position: relative;
            height: 100vh;
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('img/carousel/banner1.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 100px;
            background: linear-gradient(to top, #fff, transparent);
        }

        .hero-content {
            max-width: 900px;
            margin: 0 auto;
            padding: 2rem;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 4rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.4rem;
            margin-bottom: 2.5rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .hero-btn {
            padding: 1.2rem 3rem;
            font-size: 1.2rem;
            border-radius: 50px;
            transition: all 0.4s;
            background: #2ECC71;
            border: none;
            box-shadow: 0 4px 15px rgba(46, 204, 113, 0.3);
        }

        .hero-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(46, 204, 113, 0.4);
            background: #27AE60;
        }

        /* Statistics Section */
        .stats {
            padding: 7rem 0;
            background: #F8FAFB;
            position: relative;
        }

        .stat-card {
            background: white;
            padding: 2.5rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            transition: all 0.4s;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: #3498DB;
            transform: scaleX(0);
            transition: transform 0.4s;
        }

        .stat-card:hover {
            transform: translateY(-15px);
        }

        .stat-card:hover::before {
            transform: scaleX(1);
        }

        .stat-icon {
            font-size: 3rem;
            color: #3498DB;
            margin-bottom: 1.5rem;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            color: #2C3E50;
            margin-bottom: 0.5rem;
        }

        /* Process Section */
        .process {
            padding: 7rem 0;
            background: white;
        }

        .section-title {
            text-align: center;
            margin-bottom: 5rem;
        }

        .section-title h2 {
            font-size: 3rem;
            color: #2C3E50;
            font-weight: 700;
            margin-bottom: 1rem;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #3498DB;
            border-radius: 2px;
        }

        .process-step {
            text-align: center;
            padding: 2rem;
            position: relative;
        }

        .process-icon {
            width: 120px;
            height: 120px;
            background: #3498DB;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem auto;
            color: white;
            font-size: 2.5rem;
            transition: all 0.5s;
            position: relative;
            z-index: 1;
        }

        .process-icon::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            border: 2px dashed #3498DB;
            animation: spin 20s linear infinite;
            z-index: -1;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .process-step:hover .process-icon {
            transform: rotateY(360deg);
            background: #2ECC71;
        }

        /* About Section */
        .about {
            padding: 7rem 0;
            background: linear-gradient(135deg, #F8FAFB 0%, #EBF5FB 100%);
            position: relative;
            overflow: hidden;
        }

        .about::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(52, 152, 219, 0.1) 0%, transparent 70%);
            transform: rotate(45deg);
        }

        .about-img {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            position: relative;
        }

        .about-img img {
            width: 100%;
            height: auto;
            transition: transform 0.5s;
        }

        .about-img:hover img {
            transform: scale(1.1);
        }

        .about-content {
            padding: 2.5rem;
        }

        .about-content h2 {
            font-size: 2.8rem;
            color: #2C3E50;
            margin-bottom: 1.5rem;
            font-weight: 700;
        }

        .about-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #7F8C8D;
            margin-bottom: 2rem;
        }

        .about .btn-primary {
            padding: 1rem 2.5rem;
            border-radius: 50px;
            background: #3498DB;
            border: none;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
            transition: all 0.4s;
        }

        .about .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
            background: #2980B9;
        }

        /* Map Section */
        .map {
            padding: 7rem 0;
            background: white;
            position: relative;
        }

        .map iframe {
            width: 100%;
            height: 500px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            border: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.1rem;
            }
            
            .stat-card {
                margin-bottom: 2rem;
            }
            
            .process-step {
                margin-bottom: 3rem;
            }
            
            .about-img {
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container hero-content">
            <h1>Bersama Menuju Indonesia Bebas Sampah</h1>
            <p>Mari bergabung dalam gerakan nasional pengelolaan sampah yang berkelanjutan untuk masa depan yang lebih baik</p>
            <a href="registrasi.php" class="btn btn-primary hero-btn">Bergabung Sekarang</a>
        </div>
    </section>

    

    <!-- Process Section -->
    <section class="process">
        <div class="container">
            <div class="section-title">
                <h2>Cara Bergabung</h2>
                <p>Tinggal Klik tombol pendaftaran di Bawah ini </p>
            </div>
            <a href="registrasi.php">
            <div class="row" style="display: flex; justify-content: center; align-items: center;">
    <div class="col-md-3 mb-4" style="display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
        <div class="process-step">
            <div class="process-icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <h3>Pendaftaran</h3>
           
            <p>Daftar sebagai nasabah Bank Sampah</p>
        </div>
    </div>
</div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4">
                    <div class="about-img">
                        <img src="img/content/5.png" alt="About Bank Sampah">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>Tentang Bank Sampah</h2>
                        <p>Bank sampah adalah solusi inovatif untuk mengelola sampah secara berkelanjutan. Dengan sistem yang terorganisir, kami membantu masyarakat mengubah sampah menjadi sumber daya bernilai ekonomi sambil menjaga kelestarian lingkungan.</p>
                        <p>Program ini tidak hanya membantu mengurangi jumlah sampah yang berakhir di tempat pembuangan akhir, tetapi juga memberikan nilai ekonomi bagi masyarakat dengan cara menukar sampah yang dapat didaur ulang dengan uang atau barang kebutuhan sehari-hari.</p>
                        <a href="informasiSampah.php" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map">
        <div class="container">
            <div class="section-title">
                <h2>Lokasi Kami</h2>
                <p>Temukan Bank Sampah terdekat di wilayah Anda</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d248.35493604009892!2d119.42704740006356!3d-5.155259274815347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1734589956340!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animation on scroll
        window.addEventListener('scroll', function() {
            const elements = document.querySelectorAll('.stat-card, .process-step, .about-img');
            
            elements.forEach(element => {
                const position = element.getBoundingClientRect();
                
                // If element is in viewport
                if(position.top >= 0 && position.bottom <= window.innerHeight) {
                    element.style.opacity = '1';
                    element.style.transform = 'translateY(0)';
                }
            });
        });

        // Initialize elements with opacity 0
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.stat-card, .process-step, .about-img');
            
            elements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'all 0.6s ease-out';
            });
        });

        // Add hover effect to process icons
        const processIcons = document.querySelectorAll('.process-icon');
        processIcons.forEach(icon => {
            icon.addEventListener('mouseenter', function() {
                this.style.transform = 'rotateY(180deg)';
            });
            
            icon.addEventListener('mouseleave', function() {
                this.style.transform = 'rotateY(0deg)';
            });
        });
    </script>
</body>
</html>