<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Sampah | Bank Sampah</title>
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
        .waste-hero {
            position: relative;
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('img/waste/hero-bg.jpg');
            background-size: cover;
            background-position: center;
            padding: 80px 0;
            color: white;
            text-align: center;
        }

        .waste-hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
        }

        .waste-hero p {
            font-size: 1.2rem;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Category Navigation */
        .category-nav {
            background: white;
            padding: 1rem 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            position: sticky;
            top: 76px;
            z-index: 100;
        }

        .category-nav .nav-pills .nav-link {
            color: #2C3E50;
            border-radius: 50px;
            padding: 0.8rem 1.5rem;
            margin: 0.5rem;
            transition: all 0.3s;
        }

        .category-nav .nav-pills .nav-link.active {
            background: #3498DB;
            color: white;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
        }

        .category-nav .nav-pills .nav-link:hover:not(.active) {
            background: #EBF5FB;
            transform: translateY(-2px);
        }

        /* Waste Items Section */
        .waste-section {
            padding: 4rem 0;
            background: linear-gradient(135deg, #F8FAFB 0%, #EBF5FB 100%);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
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

        .waste-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.4s, box-shadow 0.4s;
            margin-bottom: 30px;
            height: 100%;
        }

        .waste-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .waste-img {
            position: relative;
            overflow: hidden;
            height: 200px;
        }

        .waste-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .waste-card:hover .waste-img img {
            transform: scale(1.1);
        }

        .waste-category {
            position: absolute;
            top: 15px;
            right: 15px;
            background: rgba(52, 152, 219, 0.9);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
        }

        .waste-content {
            padding: 1.5rem;
        }

        .waste-content h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: #2C3E50;
        }

        .waste-price {
            color: #27AE60;
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 1rem;
        }

        .waste-details {
            color: #7F8C8D;
            font-size: 0.9rem;
            margin-bottom: 1rem;
        }

        .waste-details i {
            color: #3498DB;
            margin-right: 0.5rem;
        }

        .waste-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.5rem;
            background: #F8FAFB;
            border-top: 1px solid #EBF5FB;
        }

        .waste-status {
            padding: 0.4rem 1rem;
            border-radius: 50px;
            font-size: 0.9rem;
        }

        .status-available {
            background: #E8F8F5;
            color: #27AE60;
        }

        .status-limited {
            background: #FEF9E7;
            color: #F1C40F;
        }

        /* Search Bar */
        .search-bar {
            max-width: 600px;
            margin: 0 auto 3rem;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1.5rem;
            padding-left: 3rem;
            border: none;
            border-radius: 50px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            font-size: 1rem;
            transition: all 0.3s;
        }

        .search-input:focus {
            box-shadow: 0 4px 20px rgba(52, 152, 219, 0.2);
            outline: none;
        }

        .search-icon {
            position: absolute;
            left: 1.2rem;
            top: 50%;
            transform: translateY(-50%);
            color: #3498DB;
        }

        @media (max-width: 768px) {
            .waste-hero h1 {
                font-size: 2.5rem;
            }
            
            .category-nav .nav-pills {
                flex-wrap: nowrap;
                overflow-x: auto;
                padding-bottom: 0.5rem;
            }
            
            .category-nav .nav-pills .nav-link {
                white-space: nowrap;
            }
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>

    <!-- Hero Section -->
    <section class="waste-hero">
        <div class="container">
            <h1>Daftar Sampah</h1>
            <p>Temukan informasi lengkap tentang jenis-jenis sampah yang kami kelola beserta nilai ekonomisnya</p>
        </div>
    </section>

    <!-- Category Navigation -->
    <div class="category-nav">
        <div class="container">
            <ul class="nav nav-pills justify-content-center">
                <li class="nav-item">
                    <a class="nav-link active" href="#semua">Semua</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#plastik">Plastik</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kertas">Kertas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#logam">Logam</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kaca">Kaca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#elektronik">Elektronik</a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Waste Items Section -->
    <section class="waste-section">
        <div class="container">
            <!-- Search Bar -->
            <div class="search-bar">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Cari jenis sampah...">
            </div>

            <div class="row">
                <!-- Waste Card 1 - Plastik -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/foto sampah/botol mineral plastik.jpg" alt="Botol Plastik">
                            <span class="waste-category">Plastik</span>
                        </div>
                        <div class="waste-content">
                            <h3>Botol Plastik</h3>
                            <div class="waste-price">Rp 1.500/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Botol minuman PET bersih dan kering</p>
                                <p><i class="fas fa-recycle"></i>Mudah didaur ulang</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-available">Tersedia</span>
                            <span><i class="fas fa-clock"></i> Update: 2 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Waste Card 2 - Kertas -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/foto sampah/kardus.jpg" alt="Kardus">
                            <span class="waste-category">Kertas</span>
                        </div>
                        <div class="waste-content">
                            <h3>Kardus Bekas</h3>
                            <div class="waste-price">Rp 1.100/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Kardus bersih tanpa selotip</p>
                                <p><i class="fas fa-recycle"></i>Daur ulang optimal</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-available">Available</span>
                            <span><i class="fas fa-clock"></i> Update: 5 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Waste Card 3 - Logam -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/foto sampah/kaleng.jpg" alt="Kaleng Aluminium">
                            <span class="waste-category">Logam</span>
                        </div>
                        <div class="waste-content">
                            <h3>Kaleng Aluminium</h3>
                            <div class="waste-price">Rp 600/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Kaleng minuman aluminium bersih</p>
                                <p><i class="fas fa-recycle"></i>Nilai ekonomi tinggi</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-available">Tersedia</span>
                            <span><i class="fas fa-clock"></i> Update: 1 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Waste Card 4 - Kaca -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/foto sampah/botol mineral kaca.jpg" alt="Botol Kaca">
                            <span class="waste-category">Kaca</span>
                        </div>
                        <div class="waste-content">
                            <h3>Botol Kaca</h3>
                            <div class="waste-price">Rp 1.500/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Botol kaca utuh dan bersih</p>
                                <p><i class="fas fa-recycle"></i>Dapat didaur ulang 100%</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-available">Tersedia</span>
                            <span><i class="fas fa-clock"></i> Update: 3 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Waste Card 5 - Elektronik -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/sampah/60c0a801c1069.jpg" alt="Limbah Elektronik">
                            <span class="waste-category">Elektronik</span>
                        </div>
                        <div class="waste-content">
                            <h3>Limbah Elektronik</h3>
                            <div class="waste-price">Rp 20.000/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Komponen elektronik bekas</p>
                                <p><i class="fas fa-recycle"></i>Penanganan khusus</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-limited">Stok Terbatas</span>
                            <span><i class="fas fa-clock"></i> Update: 6 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Waste Card 6 - Plastik -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/foto sampah/gelas mineral plastik.jpg" alt="Gelas Plastik">
                            <span class="waste-category">Plastik</span>
                        </div>
                        <div class="waste-content">
                            <h3>Gelas Plastik</h3>
                            <div class="waste-price">Rp 2.500/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Gelas plastik PP bersih</p>
                                <p><i class="fas fa-recycle"></i>Mudah diproses</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-available">Tersedia</span>
                            <span><i class="fas fa-clock"></i> Update: 4 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Waste Card 7 - Kertas -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/foto sampah/kertasputih.jpg" alt="Koran Bekas">
                            <span class="waste-category">Kertas</span>
                        </div>
                        <div class="waste-content">
                            <h3>Koran Bekas</h3>
                            <div class="waste-price">Rp 3.500/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Koran dalam kondisi baik</p>
                                <p><i class="fas fa-recycle"></i>Daur ulang optimal</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-available">Tersedia</span>
                            <span><i class="fas fa-clock"></i> Update: 2 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Waste Card 8 - Logam -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/foto sampah/besi.jpg" alt="Besi Tua">
                            <span class="waste-category">Logam</span>
                        </div>
                        <div class="waste-content">
                            <h3>Besi Tua</h3>
                            <div class="waste-price">Rp 8.000/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Besi bekas berbagai jenis</p>
                                <p><i class="fas fa-recycle"></i>Nilai ekonomi tinggi</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-available">Tersedia</span>
                            <span><i class="fas fa-clock"></i> Update: 5 jam yang lalu</span>
                        </div>
                    </div>
                </div>

                <!-- Waste Card 9 - Kaca -->
                <div class="col-md-4 col-sm-6">
                    <div class="waste-card">
                        <div class="waste-img">
                            <img src="img/foto sampah/pecahan kaca.jpg" alt="Pecahan Kaca">
                            <span class="waste-category">Kaca</span>
                        </div>
                        <div class="waste-content">
                            <h3>Pecahan Kaca</h3>
                            <div class="waste-price">Rp 500/kg</div>
                            <div class="waste-details">
                                <p><i class="fas fa-info-circle"></i>Pecahan kaca bersih</p>
                                <p><i class="fas fa-recycle"></i>Penanganan khusus</p>
                            </div>
                        </div>
                        <div class="waste-footer">
                            <span class="waste-status status-limited">Stok Terbatas</span>
                            <span><i class="fas fa-clock"></i> Update: 7 jam yang lalu</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        // Sticky category navigation
        window.onscroll = function() {stickyNav()};
        
        var categoryNav = document.querySelector('.category-nav');
        var sticky = categoryNav.offsetTop;
        
        function stickyNav() {
            if (window.pageYOffset >= sticky) {
                categoryNav.classList.add("sticky")
            } else {
                categoryNav.classList.remove("sticky");
            }
        }

        // Simple search functionality
        document.querySelector('.search-input').addEventListener('keyup', function(e) {
            const searchText = e.target.value.toLowerCase();
            const wasteCards = document.querySelectorAll('.waste-card');
            
            wasteCards.forEach(card => {
                const title = card.querySelector('h3').textContent.toLowerCase();
                const category = card.querySelector('.waste-category').textContent.toLowerCase();
                
                if(title.includes(searchText) || category.includes(searchText)) {
                    card.style.display = '';
                } else {
                    card.style.display = 'none';
                }
            });
        });

        // Category filter
        document.querySelectorAll('.category-nav .nav-link').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                document.querySelectorAll('.category-nav .nav-link').forEach(navLink => {
                    navLink.classList.remove('active');
                });
                
                // Add active class to clicked link
                this.classList.add('active');
                
                const category = this.textContent.toLowerCase();
                const wasteCards = document.querySelectorAll('.waste-card');
                
                wasteCards.forEach(card => {
                    const cardCategory = card.querySelector('.waste-category').textContent.toLowerCase();
                    
                    if(category === 'semua' || cardCategory === category) {
                        card.style.display = '';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>