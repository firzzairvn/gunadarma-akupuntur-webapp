<?php
include 'connect.php';

$message = []; // Inisialisasi pesan
$status = '';

if (isset($_POST['submit'])) {
  $npm = $_POST['npm'];
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = $_POST['password'];

  $checkAccount = mysqli_query($conn, "SELECT * FROM dbakun WHERE npm = '$npm' OR username = '$username'");

  if (mysqli_num_rows($checkAccount) > 0) {
    $message[] = '<span style="color: red; padding-left: 10px;">User sudah terpakai. Gunakan Username / NPM Lainnya!.</span>';
    $status = 'error'; // Menandai status error
  } else {
    $insert = mysqli_query($conn, "INSERT INTO dbakun (npm, username, email, password) VALUES('$npm','$username','$email','$password')");

    if ($insert) {
      $message[] = '<span style="color: green; padding-left: 10px;">User Berhasil dibuat.</span>';
      $status = 'success'; // Menandai status berhasil
    } else {
      $message[] = '<span style="color: red; padding-left: 10px;">User gagal dibuat.</span>';
      $status = 'error'; // Menandai status error
    }
  }
  
}

$response = json_encode(['message' => $message, 'status' => $status]); // Menambahkan status ke dalam response
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Layanan Akupuntur Universitas Gunadarma</title>
  <link href="assets/img/gundar.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- CSS -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>


<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope"></i> <a href="mailto:mediacenter@gunadarma.com">mediacenter@gunadarma.com</a>
        <i class="bi bi-phone"></i> 1500158
      </div>
      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="https://www.youtube.com/@ugtvofficial" class="youtube"><i class="bi bi-youtube"></i></a>
        <a href="https://www.facebook.com/ug.shitposting" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/gunadarma/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.linkedin.com/school/universitas-gunadarma/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">Universitas Gunadarma</a></h1>
      <!-- <a href="index.php" class="logo me-auto"><img src="assets/img/gundar-banner.png" alt="" class="img-fluid"></a> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
          <li class="dropdown"><a href="#"><span>Dokter</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="index.php#dokter">Dokter Spesialis</a></li>
              <li><a href="jadwal-praktik.php">Jadwal Praktik</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="index.php#contact">Tentang Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Daftar Online</span> </a>

    </div>
  </header><!-- End Header -->

  <main id="main">
    <br>
    <br>
    <br>
    <!-- ======= Register Section ======= -->
    <section id="register" class="vh-50">
      <div class="section-title">
        <h2>Daftar Akun</h2>
      </div>

      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <?php
        if (isset($message)) {
          foreach ($message as $msg) {
            echo '<p class="message">' . $msg . '</p>';
          }
        }
        ?>

        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-between align-items-center h-100">
            <div class="col-md-6 col-lg-6 col-xl-5">

              <!-- NPM input -->
              <div class="form-outline mb-4">
                <input type="text" id="npm" name="npm" class="form-control form-control-lg" placeholder="Nomor Pokok Mahasiswa" maxlength="8" pattern="\d{1,8}" title="Masukkan maksimal 8 digit angka" required>
                <label class="form-label" for="npm">Masukkan NPM</label>
              </div>

              <!-- Username input -->
              <div class="form-outline mb-3">
                <input type="text" id="username" name="username" class="form-control form-control-lg" placeholder="Username" required />
                <label class="form-label" for="password">Masukkan Username</label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" required />
                <label class="form-label" for="email">Masukkan Email</label>
              </div>
              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
                <label class="form-label" for="email">Masukkan Password</label>
              </div>

              <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" id="submit" name="submit" class="btn-submit" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
              </div>
            </div>

            <div class="col-md-6">
              <img src="assets/img/drawimg.svg" alt="Image" class="img-fluid">
            </div>

          </div>
        </div>
      </form>
      <!-- Tutup tag form -->
      </div>
      </div>
    </section><!-- End Register Section -->
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Universitas<br>Gunadarma</h3>
            <p>
              Jl. Margonda Raya 100, Depok<br>
              West Java - 16424<br>
              Indonesia <br><br>
              <strong>Phone:</strong> +62 - 21 - 78881112 ext. 234<br>
              <strong>Email:</strong> mediacenter@gunadarma.ac.id<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Pelayanan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#contact">Hubungi Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Spesialis Akupuntur</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Spesialis Ortopendi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Spesialis Bedah</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Spesialis Jantung dan Pembuluh Darah</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-img">
            <a href="index.php#hero" class="logo me-auto"><img src="assets/img/gundar.png" alt="" class="img-fluid"></a>
          </div>


        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Created By <strong><span>Muhammad Irvan Arfirza - Alan Darma Saputra - Ahmad Miftahul Huda</span></strong>.
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://www.youtube.com/@ugtvofficial" class="twitter"><i class="bx bxl-youtube"></i></a>
        <a href="https://www.facebook.com/ug.shitposting" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/gunadarma/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://www.linkedin.com/school/universitas-gunadarma/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      <?php
      if (isset($response)) {
        echo 'var messages = ' . $response . ';';
        echo 'if (messages.message.length > 0) {';
        echo 'if (messages.status === "success") {';
        echo 'Swal.fire({';
        echo 'icon: "success",';
        echo 'title: "Berhasil",';
        echo 'html: messages.message.join("<br>"),';
        echo '});';
        echo '} else if (messages.status === "error") {';
        echo 'Swal.fire({';
        echo 'icon: "error",';
        echo 'title: "Gagal",';
        echo 'html: messages.message.join("<br>"),';
        echo '});';
        echo '}';
        echo '}';
      }
      ?>
    });
  </script>


</body>

</html>