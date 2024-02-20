<?php
include 'connect.php';

$message = []; // Inisialisasi pesan
$status = '';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Collect form data
  $npm = $_POST['npm'];
  $nama = $_POST['nama'];
  $tempat_lhr = $_POST['tempat_lhr'];
  $tanggal_lhr = $_POST['tanggal_lhr'];
  $jekel = $_POST['jekel'];
  $alamat = $_POST['alamat'];
  $tanggal = $_POST['tanggal'];

  // Insert data into the database
  $sql = "INSERT INTO dbregisterpasien (npm, nama, tempat_lhr, tanggal_lhr, jekel, alamat, tanggal) 
            VALUES ('$npm', '$nama', '$tempat_lhr', '$tanggal_lhr', '$jekel', '$alamat', '$tanggal')";

  //verifikasi cek akun
  $checkAccount = mysqli_query($conn, "SELECT * FROM dbregisterpasien WHERE npm = '$npm' OR nama = '$nama'");
  //verifikasi cek tanggal
  $checkDate = mysqli_query($conn, "SELECT * FROM dbregisterpasien WHERE tanggal = '$tanggal'");

  //check apakah username / npm sudah digunakan
  if (mysqli_num_rows($checkAccount) > 0) {
    $message[] = '<span style="color: red; padding-left: 10px;">User sudah terpakai. Gunakan Username / NPM Lainnya!.</span>';
    $status = 'error'; // Menandai status error
  } else {
    $insert = mysqli_query($conn, "INSERT INTO dbregisterpasien (npm, nama, tempat_lhr, tanggal_lhr, jekel, alamat, tanggal) 
    VALUES('$npm','$nama', '$tempat_lhr', '$tanggal_lhr', '$jekel', '$alamat', '$tanggal')");

    if ($insert) {
      $message[] = '<span style="color: green; padding-left: 10px;">Reservasi Berhasil dibuat.</span>';
      $status = 'success'; // Menandai status berhasil
    } else {
      $message[] = '<span style="color: red; padding-left: 10px;">Reservasi gagal dibuat.</span>';
      $status = 'error'; // Menandai status error
    }
  }

  //cek tanggal
  $used_dates = [];
  if (mysqli_num_rows($checkDate) > 0) {
    while ($row = mysqli_fetch_assoc($checkDate)) {
      $used_dates[] = $row['tanggal'];
    }
  }
  $used_dates_json = json_encode($used_dates);
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
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="section-title">
        <h2>Form Pendaftaran</h2>
        <?php
        if (isset($message)) {
          foreach ($message as $msg) {
            echo '<p class="message">' . $msg . '</p>';
          }
        }
        ?>
      </div>
      <div class="container">


        <div class="d-flex justify-content-between align-items-center">
          
        </div>
        <style>
          body {
            font-family: Arial, sans-serif;
            margin: 20px;
          }

          form {
            max-width: 400px;
            margin: auto;
          }

          label {
            display: block;
            margin-bottom: 8px;
          }

          input,
          select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
          }

          button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
          }

          button:hover {
            background-color: #45a049;
          }
        </style>
        </head>

        <body>
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-container">
            <label for="npm">NPM:</label>
            <input type="text" id="npm" maxlength="8" pattern="\d{1,8}" title="Masukkan maksimal 8 digit angka" name="npm" required>

            <label for="nama">Nama Lengkap:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="tempat_lhr">Tempat Lahir:</label>
            <input type="text" id="tempat_lhr" name="tempat_lhr" required>

            <label for="tangga_lhr">Tanggal Lahir:</label>
            <input type="date" id="tanggal_lhr" name="tanggal_lhr" max="<?php echo date('Y-m-d'); ?>" required>

            <label for="jekel">Jenis Kelamin:</label>
            <select id="jekel" name="jekel" required>
              <option value="" disabled selected>Pilih Jenis Kelamin</option>
              <option value="Laki-laki">Laki-laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>

            <label for="alamat">Alamat/Domisili:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="tanggal">Tanggal Reservasi:</label>
            <input type="date" id="tanggal" name="tanggal" required>
            
            <script>
              // Mendapatkan elemen input tanggal
              const inputTanggal = document.getElementById('tanggal');

              // Mendapatkan tanggal hari ini dalam format YYYY-MM-DD
              const today = new Date().toISOString().split('T')[0];

              // Menetapkan nilai minimum untuk input tanggal
              inputTanggal.setAttribute('min', today);

              // Lakukan pengaturan untuk tanggal-tanggal yang sudah terpakai
              const datesToDisable = ['2024-01-10', '2024-01-15']; // Gantilah dengan tanggal-tanggal yang sudah terpakai dari database

              datesToDisable.forEach(function(date) {
                const option = document.createElement('option');
                option.value = date;
                option.text = date;

                // Cek apakah tanggal sudah terpakai, jika iya, maka disable opsi tanggal
                if (datesToDisable.includes(date)) {
                  option.disabled = true;
                }

                // Tambahkan opsi ke dalam input tanggal
                inputTanggal.appendChild(option);
              });
            </script>

            <button type="submit" id="submit" name="submit" class="btn-submit" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
          </form>

      </div>
    </section><!-- End Breadcrumbs Section -->

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
            <a href="#hero" class="logo me-auto"><img src="assets/img/gundar.png" alt="" class="img-fluid"></a>
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

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const usedDates = <?php echo $used_dates_json; ?>;
      const selectDate = document.getElementById('tanggal');
      usedDates.forEach(function(date) {
        const option = selectDate.querySelector('option[value="' + date + '"]');
        if (option) {
          option.disabled = true;
        }
      });
    });
  </script>

</body>

</html>