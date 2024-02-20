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
                    <li class="dropdown"><a href="#" class="nav-link scrollto active"><span>Dokter</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="index.php#dokter">Dokter Spesialis</a></li>
                            <li><a href="jadwal-praktik.php">Jadwal Praktik</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="index.php#contact">Tentang Kami</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">Daftar</span> Online</a>

        </div>
    </header><!-- End Header -->

    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Jadwal Praktik</h2>
                    <ol>
                        <li><a href="index.php">Home</a></li>
                        <li>Jadwal Praktik</li>
                    </ol>
                </div>
            </div>
        </section><!-- End Breadcrumbs Section -->

        <!-- ======= Calendar Section ======= -->
        <section id="calendar" class="calendar">
            <div class="container">
                <div class="calendar">
                    <div class="calendar-header">
                        <span class="month-picker" id="month-picker"> Januari</span>
                        <div class="year-picker" id="year-picker">
                            <span class="year-change" id="pre-year">
                                <pre><</pre>
                            </span>
                            <span id="year">2024</span>
                            <span class="year-change" id="next-year">
                                <pre>></pre>
                            </span>
                        </div>
                    </div>

                    <div class="calendar-body">
                        <div class="calendar-week-days">
                            <div>Minggu</div>
                            <div>Senin</div>
                            <div>Selasa</div>
                            <div>Rabu</div>
                            <div>Kamis</div>
                            <div>Jumat</div>
                            <div>Sabtu</div>
                        </div>
                        <div class="calendar-days">
                        </div>
                    </div>
                    <div class="calendar-footer">
                    </div>
                    <div class="date-time-formate">
                        <div class="day-text-formate">Hari Ini</div>
                        <div class="date-time-value">
                            <div class="time-formate">00:00:00</div>
                            <div class="date-formate">01 - Januari - 2024</div>
                        </div>
                    </div>
                    <div class="month-list"></div>
                </div>
        </section><!-- End Contact Section -->

        <section id="cekJadwal" class="cekJadwal">
            <div class="section-title">
                <h2>Cek Jadwal</h2>
            </div>
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">

                </div>
                <style>
                    form {
                        max-width: 400px;
                        margin: auto;
                    }

                    input,
                    select {
                        width: 100%;
                        padding: 8px;
                        margin-bottom: 12px;
                        box-sizing: border-box;
                    }
                </style>
                </head>

                <body>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-container">
                        <label for="npm">Cek NPM:</label>
                        <input type="text" id="npm" maxlength="8" pattern="\d{1,8}" placeholder="Nomor Pokok Mahasiswa" title="Masukkan maksimal 8 digit angka" name="npm" required>
                        <br>
                        <button type="submit" id="submit" name="submit" class="btn-submit" style="padding-left: 2.5rem; padding-right: 2.5rem;">Submit</button>
                    </form>
                    <?php
                    include 'connect.php';

                    $message = []; // Inisialisasi pesan
                    $status = '';

                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $npm = mysqli_real_escape_string($conn, $_POST["npm"]);

                        // Query untuk mendapatkan data mahasiswa berdasarkan npm
                        $query = "SELECT npm, nama, tempat_lhr, jekel, tanggal FROM dbregisterpasien WHERE npm = '$npm'";
                        $result = mysqli_query($conn, $query);

                        if (mysqli_num_rows($result) > 0) {
                            echo "<table class='table'>";
                            echo "<thead>";
                            echo "<tr>";
                            echo "<th>NPM</th>";
                            echo "<th>Nama</th>";
                            echo "<th>Tempat Lahir</th>";
                            echo "<th>Jenis Kelamin</th>";
                            echo "<th>Tanggal</th>";
                            echo "</tr>";
                            echo "</thead>";
                            echo "<tbody>";

                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['npm'] . "</td>";
                                echo "<td>" . $row['nama'] . "</td>";
                                echo "<td>" . $row['tempat_lhr'] . "</td>";
                                echo "<td>" . $row['jekel'] . "</td>";
                                echo "<td>" . $row['tanggal'] . "</td>";
                                echo "</tr>";
                            }

                            echo "</tbody>";
                            echo "</table>";
                        } else {
                            // Data tidak ditemukan, tampilkan notifikasi SweetAlert2
                            $message[] = '<span style="color: red;">Data tidak ditemukan, tolong periksa npm kembali!</span>';
                            $status = 'error'; // Menandai status error
                        }
                    }

                    // Tutup koneksi ke database
                    mysqli_close($conn);

                    $response = json_encode(['message' => $message, 'status' => $status]); // Menambahkan status ke dalam response
                    ?>


            </div>
        </section>

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
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">Tentang Kami</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#services">Pelayanan</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Hubungi Kami</a></li>
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
    <script src="assets/js/calendar.js"></script>

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
                echo 'title: "Error!",';
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
            const calendarDays = document.querySelector(".calendar-days");

            // Ambil tanggal-tanggal dari database
            let datesFromDB = [
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "'" . $row['tanggal'] . "',";
                }
                ?>
            ];

            let today = new Date();
            let currentMonth = today.getMonth();
            let currentYear = today.getFullYear();

            // Fungsi untuk menandai hari Sabtu dan Minggu
            function markWeekends(year, month) {
                const date = new Date(year, month, 1);
                while (date.getMonth() === month) {
                    const dayOfWeek = date.getDay();
                    if (dayOfWeek === 0 || dayOfWeek === 6) {
                        const dayCell = calendarDays.querySelector(`[data-date='${date.toISOString().split('T')[0]}']`);
                        if (dayCell) {
                            dayCell.classList.add("weekend");
                        }
                    }
                    date.setDate(date.getDate() + 1);
                }
            }

            markWeekends(currentYear, currentMonth);

            // Tambahkan tanggal dari database ke daftar tanggal yang harus ditandai
            datesFromDB = datesFromDB.map(date => date.slice(0, 10)); // Format tanggal menjadi YYYY-MM-DD
            datesFromDB.forEach(date => {
                const dayCell = calendarDays.querySelector(`[data-date='${date}']`);
                if (dayCell) {
                    dayCell.classList.add("tanggal"); // Ganti kelas CSS sesuai dengan kebutuhan tampilan Anda
                }
            });
        });
    </script>

</body>

</html>