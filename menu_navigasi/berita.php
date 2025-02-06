<?php
include ("../inc/connect.php");

$limit = 9; // Jumlah berita per halaman
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$offset = ($page - 1) * $limit;

// Jika ada pencarian
if(isset($_GET['kata_kunci'])){
    $kataKunci = $_GET['kata_kunci'];
    $sql = "SELECT * FROM tb_berita WHERE judul_berita LIKE '%".$kataKunci."%' ORDER BY tanggal_input DESC LIMIT $limit OFFSET $offset";
    $totalSql = "SELECT COUNT(*) as total FROM tb_berita WHERE judul_berita LIKE '%".$kataKunci."%'";
} else {
    $sql = "SELECT * FROM tb_berita ORDER BY tanggal_input DESC LIMIT $limit OFFSET $offset";
    $totalSql = "SELECT COUNT(*) as total FROM tb_berita";
}

$result = mysqli_query($connect, $sql);
$totalResult = mysqli_query($connect, $totalSql);
$totalRow = mysqli_fetch_assoc($totalResult);
$totalData = $totalRow['total'];
$totalPage = ceil($totalData / $limit);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sahabat Tani - Berita</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/bone.png" rel="icon">
  <link href="../assets/img/bone.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">

  <style>
        .card img {
            height: 200px;
            object-fit: cover;
        }
        .card-text {
            max-height: 4rem;
            overflow: hidden;
        }
    </style>

  <!-- =======================================================
  * Template Name: Sahabat Tani - v4.7.0
  * Template URL: https://bootstrapmade.com/Sahabat Tani-free-bootstrap-3-theme-for-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Desa Mattampawalie</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <ul>
            <li><a class="nav-link scrollto" href="../index.php">Home</a></li>
            <li><a class="nav-link scrollto active" href="berita.php">Berita</a></li>
            <li><a class="nav-link scrollto" href="infografis.php">Infografis</a></li>
            <li><a class="nav-link scrollto" href="galeri.php">Galeri</a></li>
            <li><a class="nav-link scrollto" href="belanja.php">Belanja</a></li>
            <li><a class="nav-link scrollto" href="transparansi.php">Transparansi</a></li>
            <li><a class="nav-link scrollto" href="wisata.php">Wisata</a></li>
            <li><a class="nav-link scrollto" href="ppid.php">PPID</a></li>
          </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <br>
          <p>Berita Desa</p>
        </div>
        <div class="container my-5">
        <form action="" method="GET">
          <div class="input-group mb-3 ms-auto mb-5" style="width: 26rem;">
              <input type="search" class="form-control" placeholder="Cari Berita" name="kata_kunci">
              <button class="btn btn-outline-success" type="submit">Cari Berita</button>
          </div>
      </form>

      <?php if ($result->num_rows > 0): ?>
          <div class="row justify-content-start">
              <?php while ($row = $result->fetch_assoc()): ?>
                  <div class="col-md-4 mb-4">
                      <div class="card h-100">
                          <img src="<?= $base_url ?>/admin/images/<?php echo $row['gambar_berita']; ?>" class="card-img-top">
                          <div class="card-body">
                              <h5 class="card-title">
                                  <a href="<?= $base_url ?>/menu_navigasi/detail_berita.php?id=<?= $row['id'] ?>">
                                      <b><?php echo htmlspecialchars($row['judul_berita']); ?></b>
                                  </a>
                              </h5>
                          </div>
                          <div class="card-footer bg-white">
                              <small class="text-muted d-block mb-2">
                                  <i class="bi bi-person"></i> <?= $row['nama_user'] ?>
                              </small>
                              <small class="text-muted">
                                  <i class="bi bi-calendar"></i> <?php echo date('d F Y', strtotime($row['tanggal_input'])); ?>
                              </small>
                          </div>
                      </div>
                  </div>
              <?php endwhile; ?>
          </div>

          <!-- Pagination -->
          <nav>
              <ul class="pagination justify-content-center">
                  <?php if ($page > 1): ?>
                      <li class="page-item">
                          <a class="page-link" href="?page=<?= $page - 1; ?>" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                          </a>
                      </li>
                  <?php endif; ?>

                  <?php for ($i = 1; $i <= $totalPage; $i++): ?>
                      <li class="page-item <?= ($page == $i) ? 'active' : ''; ?>">
                          <a class="page-link" href="?page=<?= $i; ?>"><?= $i; ?></a>
                      </li>
                  <?php endfor; ?>

                  <?php if ($page < $totalPage): ?>
                      <li class="page-item">
                          <a class="page-link" href="?page=<?= $page + 1; ?>" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                          </a>
                      </li>
                  <?php endif; ?>
              </ul>
          </nav>

      <?php else: ?>
          <p class="text-center">Tidak ada artikel tersedia saat ini.</p>
      <?php endif; ?>
      </div>

<!-- buah -->

      </div>
    </section><!-- End Portfolio Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Sahabat Tani</h3>
            <p>
              Jl. Perintis Kemerdekaan, Kota Makassar, Sulawesi Selatan, Kode post 90245<br>
              <br><br>
              <strong>Phone:</strong>+62 852-5502-4646<br>
              <strong>Email:</strong>desamattampawalie64@gmail.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>