<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        :root {
            --primary-color:rgb(0, 151, 45); /* Soft blue like the sky */
            --secondary-color: #60a5fa; /* Lighter blue */
            --hover-color: #93c5fd; /* Soft hover effect */
            --text-color: #333333; /* Neutral dark text */
            --white: #ffffff;
            --shadow-color: rgba(0, 0, 0, 0.15);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            transition: all 0.3s ease;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f0f9ff; /* Light sky background */
        }

        /* Navbar */
        .custom-navbar {
            background: var(--primary-color) !important; /* Force primary color */
            box-shadow: 0 2px 10px var(--shadow-color);
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
        }


        .navbar-brand img {
            height: 50px;
        }

        .navbar-nav {
            margin-left: auto; /* Aligns menu items to the right */
        }

        .nav-link {
            color: var(--text-color) !important;
            font-weight: 600;
            padding: 10px 15px;
            position: relative;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color) !important;
            background: var(--hover-color);
            border-radius: 5px;
        }

        .nav-link.active {
            background: var(--primary-color);
            color: var(--white) !important;
            border-radius: 5px;
        }

        /* Dropdown */
        .dropdown-menu {
            background: var(--white);
            box-shadow: 0 5px 15px var(--shadow-color);
            border: none;
            border-radius: 8px;
            margin-top: 10px;
        }

        .dropdown-item {
            color: var(--text-color);
            padding: 10px 20px;
            transition: all 0.3s ease;
        }

        .dropdown-item:hover {
            background: var(--hover-color);
            color: var(--primary-color);
        }

        /* Navbar Toggler */
        .navbar-toggler {
            border: none;
            color: var(--primary-color);
        }

        .navbar-toggler:focus {
            outline: none;
            box-shadow: 0 0 5px var(--primary-color);
        }

        .navbar-toggler i {
            font-size: 1.5rem;
        }

        /* Adjust Top Bar if Needed */
        .top-bar {
            background: var(--primary-color);
            color: var(--white);
            font-size: 14px;
            padding: 8px 20px;
            box-shadow: 0 2px 10px var(--shadow-color);
            margin-bottom: 60px; /* Ensures space below top bar */
        }

        .top-bar a {
            color: var(--white);
            text-decoration: none;
            margin-right: 20px;
            transition: color 0.3s ease;
        }

        .top-bar a:hover {
            color: var(--hover-color);
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .navbar-collapse {
                background: var(--white);
                padding: 15px;
                box-shadow: 0 5px 15px var(--shadow-color);
            }

            .nav-link {
                padding: 10px 15px;
            }
        }

        @media (max-width: 768px) {
            .navbar-brand img {
                height: 45px;
            }
        }

        @media (max-width: 576px) {
            .nav-link {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container">
            <div class="top-bar-contact">
                <a href="tel:+6282344309305">
                    <i class="fas fa-phone-alt"></i>
                    (+62) 823-4430-9305
                </a>
                <a href="mailto:edoranov03@gmail.com">
                    <i class="fas fa-envelope"></i>
                    edoranov03@gmail.com
                </a>
            </div>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo/iconn.png" alt="Bank Sampah Logo">
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <i class="fas fa-bars"></i>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'index.php') ? 'active' : ''; ?>" href="index.php">
                            <i class="fas fa-home"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'layanan.php') ? 'active' : ''; ?>" href="layanan.php">
                            <i class="fas fa-recycle"></i> Layanan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo (basename($_SERVER['PHP_SELF']) == 'daftarsampah.php') ? 'active' : ''; ?>" href="daftarsampah.php">
                            <i class="fas fa-book"></i> Daftar Sampah
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="fas fa-user-circle"></i> Account
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="registrasi.php">
                                    <i class="fas fa-user-plus"></i> Registration
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="login.php">
                                    <i class="fas fa-sign-in-alt"></i> Login
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.custom-navbar');
            if (window.scrollY > 50) {
                navbar.style.boxShadow = '0 2px 15px rgba(0,0,0,0.1)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });
    </script>
</body>
</html>