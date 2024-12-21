<?php 
require 'functions.php';
$jumlahBeritaPerhalaman = 6;
$jumlahBerita = count(query("SELECT * FROM berita"));
$jumlahHalaman = ceil($jumlahBerita / $jumlahBeritaPerhalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalBerita = ( $jumlahBeritaPerhalaman * $halamanAktif ) - $jumlahBeritaPerhalaman;
$halamanAktif = intval($halamanAktif);

$postingan = query("SELECT * FROM berita ORDER BY idBerita LIMIT $awalBerita, $jumlahBeritaPerhalaman");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Informasi Sampah</title>
    <link rel="icon" type="image/png" href="img/logo/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap' rel='stylesheet'>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #2C3E50;
            background-color: #F8FAFB;
            padding-top: 76px;
        }

        /* Navbar Styling */
        .navbar {
            background: rgba(33, 37, 41, 0.98) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        }

        .navbar-brand img {
            transition: transform 0.3s;
        }

        .navbar-brand:hover img {
            transform: scale(1.05);
        }

        .nav-link {
            position: relative;
            padding: 0.5rem 1rem;
            transition: color 0.3s;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: #3498DB;
            transition: all 0.3s;
            transform: translateX(-50%);
        }

        .nav-link:hover::after {
            width: 80%;
        }

        /* Blog Section Styling */
        .container-about {
            padding: 5rem 0;
            background: linear-gradient(135deg, #F8FAFB 0%, #EBF5FB 100%);
        }

        .title-un {
            font-size: 2.5rem;
            color: #2C3E50;
            font-weight: 700;
            text-align: center;
            margin-bottom: 1rem;
            position: relative;
        }

        .title-un::after {
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

        .title-un-icon {
            text-align: center;
            color: #3498DB;
            font-size: 2rem;
            margin: 1.5rem 0;
        }

        .title-un-des {
            text-align: center;
            color: #7F8C8D;
            max-width: 800px;
            margin: 0 auto 3rem;
            line-height: 1.8;
        }

        /* Blog Posts Styling */
        .blog-posts-g {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .blog-posts-g li {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .blog-posts-g li:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }

        .post-img {
            position: relative;
            overflow: hidden;
        }

        .post-img img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .post-img:hover img {
            transform: scale(1.1);
        }

        .post-content {
            padding: 1.5rem;
        }

        .post-content h5 {
            margin-bottom: 1rem;
        }

        .post-content h5 a {
            color: #2C3E50;
            text-decoration: none;
            transition: color 0.3s;
        }

        .post-content h5 a:hover {
            color: #3498DB;
        }

        .post-content p {
            color: #7F8C8D;
            line-height: 1.6;
        }

        /* Pagination Styling */
        .pagination {
            margin: 3rem 0;
            display: flex;
            justify-content: center;
            gap: 0.5rem;
        }

        .button {
            padding: 0.8rem 1.5rem;
            background: #ffffff;
            color: #2C3E50;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .button:hover {
            background: #3498DB;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
        }

        /* Footer Styling */
        .footer-distributed {
            background: #2C3E50;
            color: white;
            padding: 4rem 0;
        }

        .footer-distributed .logo img {
            transition: transform 0.3s;
        }

        .footer-distributed .logo img:hover {
            transform: scale(1.05);
        }

        .footer-left, .footer-center, .footer-right {
            padding: 1.5rem;
        }

        .footer-company-about span {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 1rem;
            display: block;
        }

        .footer-icons {
            margin-top: 1.5rem;
        }

        .footer-icons a {
            display: inline-block;
            width: 45px;
            height: 45px;
            background: rgba(255,255,255,0.1);
            border-radius: 8px;
            font-size: 1.5rem;
            color: white;
            text-align: center;
            line-height: 45px;
            margin-right: 1rem;
            transition: all 0.3s;
        }

        .footer-icons a:hover {
            background: #3498DB;
            transform: translateY(-3px);
        }

        /* Preloader Styling */
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .title-un {
                font-size: 2rem;
            }
            
            .blog-posts-g {
                grid-template-columns: 1fr;
            }
            
            .footer-distributed {
                text-align: center;
            }
            
            .footer-center {
                margin: 2rem 0;
            }
        }
    </style>

    <script src="js/manual/preloader.js" type="text/javascript"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".preloader").fadeOut();
        });
    </script>
</head>
<body>
  <!--Pre Loader-->
  <div class="preloader">
    <div class="loading">
      <img src="img/aset/spiner.gif" width="80">
    </div>
  </div>
  
  <?php include 'navbar.php'; ?>

    <!-- Blog Section -->
      <div class="container-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h3 class="title-un" style="margin-top: 90px;">BERITA DAN INFORMASI TENTANG SAMPAH</h3>
                  <div class="title-un-icon"><i class="fas fa-newspaper"></i></div>
                  <p class="title-un-des">Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, </p>
                  <ul class="blog-posts-g">
                    <?php foreach ($postingan as $row) : ?>
                     <li>
                        <div class="post-img">
                           <a href="<?= $row['sumber']; ?>/"target="_blank" >
                              <img style="max-width: 100%; max-height: 50%;" src="img/berita/<?= $row['gambar'] ?>" alt="<?= $row['judul']; ?>">
                           </a>
                        </div>
                        <div class="post-content">
                           <h5> <a href="<?= $row['sumber']; ?>/" target="_blank"><?= $row['judul']; ?></a></h5>
                           <!-- <div class="post-info"><span> 4 October 2015</span>/<span><a href="#"> By John Deo</a></span></div> -->
                           <p>
                              <?php 
                                $a = $row['isi'];
                                // echo $a;
                                if (strlen($a) > 250) {
                                    echo substr($a, 0, 250), " (...)";
                                } else {
                                    echo $a;
                                }
                              ?>
                           </p>
                        </div>  
                     </li>
                     <?php endforeach; ?>
                  </ul>
               </div>
            </div>
         </div>
      </div>
        <!-- bagian pagination -->
        <div class="align-center pagination" style="margin-left: 40%;">
            <?php if($halamanAktif != 1){ 
                $a = $halamanAktif -1;
                echo "<a class='button' href='?halaman=$a'>Previous</a>";
            }elseif($halamanAktif = 1){
              echo "<a class='button' href='?halaman=1'>Previous</a>";
            } ?>
            
            <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : 
            // var_dump($i);
                ?>

                <?php if($halamanAktif != $i) : ?>
                    <a class="button" href="?halaman=<?= $i; ?>"><?= $i; ?></a>
                <?php else : ?>
                    <a class="button" style="background-color: #8a8f6a; color: white;" href="?halaman=<?= $i; ?>" ><?= $i; ?></a>
                <?php endif; ?>
            <?php endfor; ?>
            <?php if($halamanAktif < $jumlahHalaman){ 
                $a = $halamanAktif +1;
                echo "<a class='button' href='?halaman=$a'>Next</a>";
            }elseif ($halamanAktif = $jumlahHalaman) {
              $a = $jumlahHalaman;
              echo "<a class='button' href='?halaman=$a'>Next</a>";
            } ?>
        </div>
      
      </div>

    <?php include 'footer.php'; ?>
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>