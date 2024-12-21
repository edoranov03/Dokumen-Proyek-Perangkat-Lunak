<!-- footer.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .footer {
            background: linear-gradient(135deg,rgb(0, 132, 42) 0%,rgb(24, 212, 71) 100%);
            color: white;
            padding: 4rem 0 2rem 0;
            position: relative;
            margin-top: 4rem;
        }

        .footer::before {
            content: '';
            position: absolute;
            top: -50px;
            left: 0;
            right: 0;
            height: 50px;
            background: linear-gradient(to right bottom, transparent 49%,rgb(11, 163, 59) 50%);
        }

        .footer-heading {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .footer-content {
            margin-bottom: 2rem;
        }

        .footer-contact {
            list-style: none;
            padding: 0;
        }

        .footer-contact li {
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
        }

        .footer-contact i {
            margin-right: 1rem;
            width: 20px;
        }

        .footer-social {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 1rem;
        }

        .footer-social a {
            color: white;
            font-size: 1.5rem;
            transition: transform 0.3s;
        }

        .footer-social a:hover {
            transform: translateY(-5px);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
        }

        .footer-logo img {
            max-height: 60px;
            margin: 0 10px;
        }

        @media (max-width: 768px) {
            .footer-content {
                text-align: center;
                margin-bottom: 3rem;
            }

            .footer-contact li {
                justify-content: center;
            }

            .footer-social {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 footer-content">
                    <div class="footer-logo mb-4">
                        <img src="img/logo/iconn.png" alt="Bank Sampah Icon">
                    </div>
                    
                </div>
                
                <div class="col-md-4 footer-content">
                    <h3 class="footer-heading">Kontak Kami</h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <span>Lrg. 2, Rappocini, Kec. Rappocini, Kota Makassar, Sulawesi Selatan 90222</span>
                        </li>
                        <li>
                            <i class="fas fa-phone"></i>
                            <span>(+62) 0823-4430-9305</span>
                        </li>
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>edoranov03@gmail.com</span>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 footer-content">
                    <h3 class="footer-heading">Media Sosial</h3>
                    <p>Ikuti kami untuk mendapatkan informasi terbaru:</p>
                    <ul class="footer-social">
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2024 Tangkasa. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>