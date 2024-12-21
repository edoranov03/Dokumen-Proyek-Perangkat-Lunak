<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layanan | Bank Sampah</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #2C3E50;
            background-color: #F8FAFB;
            padding-top: 76px;
        }

        /* Hero Section */
        .services-hero {
            position: relative;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('img/services/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 100px 0;
            color: white;
            text-align: center;
        }

        .services-hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .services-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Services Section */
        .services-section {
            padding: 5rem 0;
            background: linear-gradient(135deg, #F8FAFB 0%, #EBF5FB 100%);
        }

        .section-title {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-title h2 {
            font-size: 2.5rem;
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

        .service-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.4s, box-shadow 0.4s;
            margin-bottom: 30px;
            position: relative;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .service-icon {
            width: 80px;
            height: 80px;
            background: #3498DB;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: -40px auto 20px;
            color: white;
            font-size: 2rem;
            position: relative;
            z-index: 1;
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        .service-content {
            padding: 2rem;
            text-align: center;
        }

        .service-content h3 {
            color: #2C3E50;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .service-content p {
            color: #7F8C8D;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .service-btn {
            display: inline-block;
            padding: 0.8rem 2rem;
            background: #3498DB;
            color: white;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }

        .service-btn:hover {
            background: #2980B9;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(52, 152, 219, 0.4);
            color: white;
        }

        /* Features Section */
        .features-section {
            padding: 5rem 0;
            background: white;
        }

        .feature-box {
            text-align: center;
            padding: 2rem;
            transition: transform 0.3s;
        }

        .feature-box:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #3498DB;
            margin-bottom: 1.5rem;
        }

        .feature-title {
            font-weight: 600;
            margin-bottom: 1rem;
            color: #2C3E50;
        }

        .feature-text {
            color: #7F8C8D;
            line-height: 1.6;
        }

        /* CTA Section */
        .cta-section {
            padding: 5rem 0;
            background: linear-gradient(rgba(52, 152, 219, 0.9), rgba(52, 152, 219, 0.9)), url('img/services/cta-bg.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
        }

        .cta-content h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .cta-btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: white;
            color: #3498DB;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .cta-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.3);
            background: #f8f9fa;
            color: #2980B9;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .services-hero h1 {
                font-size: 2.5rem;
            }
            
            .section-title h2 {
                font-size: 2rem;
            }
            
            .service-card {
                margin-bottom: 60px;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="services-hero">
        <div class="container">
            <h1>Layanan Bank Sampah</h1>
            <p>Temukan berbagai layanan pengelolaan sampah yang kami sediakan untuk mewujudkan lingkungan yang lebih bersih dan berkelanjutan</p>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Kami</h2>
                <p>Pilih layanan yang sesuai dengan kebutuhan Anda</p>
            </div>
            <div class="row">
                <!-- Service Card 1 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <div class="service-content">
                            <h3>Pengelolaan Sampah</h3>
                            <p>Layanan pengumpulan dan pengelolaan sampah rumah tangga dengan sistem yang terorganisir dan ramah lingkungan.</p>
                            <a href="#" class="service-btn">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 2 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="service-content">
                            <h3>Tabungan Sampah</h3>
                            <p>Tukarkan sampah Anda dengan nilai ekonomis melalui sistem tabungan yang transparan dan menguntungkan.</p>
                            <a href="#" class="service-btn">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                
                <!-- Service Card 3 -->
                <div class="col-md-4">
                    <div class="service-card">
                        <div class="service-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <div class="service-content">
                            <h3>Edukasi Lingkungan</h3>
                            <p>Program pelatihan dan workshop tentang pengelolaan sampah dan pelestarian lingkungan.</p>
                            <a href="#" class="service-btn">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="section-title">
                <h2>Keunggulan Kami</h2>
                <p>Mengapa harus memilih Bank Sampah?</p>
            </div>
            <div class="row">
                <!-- Feature 1 -->
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h4 class="feature-title">Terpercaya</h4>
                        <p class="feature-text">Sistem pengelolaan yang transparan dan dapat dipertanggungjawabkan</p>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h4 class="feature-title">Tepat Waktu</h4>
                        <p class="feature-text">Layanan pengambilan sampah yang teratur dan tepat waktu</p>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h4 class="feature-title">Berkualitas</h4>
                        <p class="feature-text">Standar pengelolaan sampah yang sesuai dengan regulasi</p>
                    </div>
                </div>
                
                <!-- Feature 4 -->
                <div class="col-md-3">
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h4 class="feature-title">Professional</h4>
                        <p class="feature-text">Tim yang terlatih dan berpengalaman dalam pengelolaan sampah</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Mulai Kontribusi Anda Sekarang</h2>
                <p class="mb-4">Bergabunglah dengan kami dalam menciptakan lingkungan yang lebih bersih dan berkelanjutan</p>
                <a href="registrasi.php" class="cta-btn">Daftar Sekarang</a>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>