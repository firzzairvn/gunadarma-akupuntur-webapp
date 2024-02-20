<?php
// Sisipkan koneksi ke database
include 'connect.php';

// Tangkap data yang dikirimkan dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk mencari data pengguna berdasarkan email dan password
    $query = "SELECT * FROM dbakun WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Jika data ditemukan, redirect ke daftar-pasien.php
        header("Location: daftar-pasien.php");
        exit();
    } else {
        // Jika tidak ditemukan, tampilkan pesan error menggunakan JavaScript
        echo "<script>alert('Akun Tidak Ditemukan.');</script>";
    }
}
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
    <link href="https://fonts.cdnfonts.com/css/dubai" rel="stylesheet">

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
                    <li><a class="nav-link scrollto " href="index.php#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
                    <li><a class="nav-link scrollto" href="index.php#services">Services</a></li>
                    <li class="dropdown"><a href="#" class="nav-link scrollto"><span>Dokter</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="index.php#dokter">Dokter Spesialis</a></li>
                            <li><a href="jadwal-praktik.php">Jadwal Praktik</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index.php#contact">Tentang Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Daftar Online</span></a>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <br>
        <br>
        <br>
        <!-- ======= Login Section ======= -->
        <section id="login" class="vh-50">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <?php
                if (isset($message)) {
                    foreach ($message as $msg) {
                        echo '<p class="message">' . $msg . '</p>';
                    }
                }
                ?>

                <div class="container-fluid h-custom">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-md-9 col-lg-6 col-xl-5">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
                        </div>
                        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                            <div class="section-title">
                                <h2>Login</h2>
                            </div>
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" required />
                                <label class="form-label" for="email">Email address</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Password" required />
                                <label class="form-label" for="password">Password</label>
                            </div>

                            <div class="text-center text-lg-start mt-4 pt-2">
                                <button type="submit" class="btn-submit" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                                <p class="small fw-bold mt-2 pt-1 mb-0">Tidak punya akun? <a href="daftar-akun.php" class="link-danger">Daftar</a></p>
                            </div>
            </form>
            </div>
            </div>
            </div>
            </form>
        </section>

        <!-- End Login Section -->

        <!-- Tutup tag form -->

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
                        <h4>Tautan</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#about">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#services">Pelayanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="index.php#contact">Hubungi Kami</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Pelayanan</h4>
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

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
    <script src="assets/js/calendar.js"></script>

</body>

</html>