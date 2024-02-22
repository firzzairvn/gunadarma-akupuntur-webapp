-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230628.1f935e57f7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 22 Feb 2024 pada 01.37
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akupuntur`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbakun`
--

CREATE TABLE `dbakun` (
  `npm` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbakun`
--

INSERT INTO `dbakun` (`npm`, `username`, `email`, `password`) VALUES
(51421003, 'admin', 'admin@gmail.com', 'admin123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dblogin`
--

CREATE TABLE `dblogin` (
  `npm` int(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dbregisterpasien`
--

CREATE TABLE `dbregisterpasien` (
  `npm` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tempat_lhr` varchar(50) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `jekel` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dbregisterpasien`
--

INSERT INTO `dbregisterpasien` (`npm`, `nama`, `tempat_lhr`, `tanggal_lhr`, `jekel`, `alamat`, `tanggal`) VALUES
(10590200, 'Muhammad Irvan Arfirza', 'New York', '2024-01-03', 'Laki-laki', 'Jakarta', '2024-01-18'),
(11502930, 'Aden', 'Tokyo', '2024-01-03', 'Laki-laki', 'Jakarta Pusat', '2024-01-24'),
(51412019, 'Helise Agate', 'New York', '2022-02-10', 'Laki-laki', 'Jakarta', '2024-01-11'),
(51421003, 'Evelyn', 'Jakarta', '2022-06-09', 'Laki-laki', 'Jakarta Utara', '2024-01-18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dbakun`
--
ALTER TABLE `dbakun`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `dblogin`
--
ALTER TABLE `dblogin`
  ADD PRIMARY KEY (`npm`);

--
-- Indeks untuk tabel `dbregisterpasien`
--
ALTER TABLE `dbregisterpasien`
  ADD PRIMARY KEY (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
