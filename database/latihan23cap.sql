-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mei 2025 pada 07.52
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `latihan23cap`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `idberita` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `headline` varchar(20) NOT NULL,
  `isi_berita` text NOT NULL,
  `pengirim` varchar(20) NOT NULL,
  `tanggal_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`idberita`, `judul`, `kategori`, `headline`, `isi_berita`, `pengirim`, `tanggal_publish`) VALUES
(2, 'indonesia minim lite', 'pendidikan', 'kurang membaca', '<p>Minimnya literasi di masyarakat <span style=\"color: rgb(0, 0, 255);\">menyebabkan</span> miss komunikasi dalam informasi yang di sampaikan </p>', 'triono', '2025-03-02'),
(3, 'dd', 'dd', 'dd', '<p>dddd</p>', 'dd', '2025-04-02'),
(4, 'Bek Timnas Indonesia', 'Olah Raga', 'Bek Timnas Indonesia', '<p>Bek Timnas Indonesia Jay Idzes menjadi salah satu pemain paling diburu jelang bursa transfer musim panas.</p><p><span style=\"font-size: 1rem;\">Jay Idzes saat ini jadi incaran banyak klub papan atas Serie A Italia, dari Inter Milan, Juventus hingga AC Milan.</span></p><p><span style=\"font-size: 1rem;\">Tak hanya klub papan atas, Jay Idzes juga dibidik oleh klub papan tengah seperti Bologna dan Torino.</span></p><p><span style=\"font-size: 1rem;\">Salah satu media lokal Turin, Toro.it melaporkan Torino juga kepincut dengan permainan Jay Idzes bersama Venezia musim ini.</span></p><p><span style=\"font-size: 1rem;\">Bek timnas Indonesia, Jay Idzes tidak masuk dalam daftar pemain yang ingin dibeli AC Milan. (Instagram/@jayidzes)</span></p><p>Bek timnas Indonesia, Jay Idzes tidak masuk dalam daftar pemain yang ingin dibeli AC Milan. (Instagram/@jayidzes)</p><p>\"Siapakah Jay Idzes, bek Venezia yang disukai Torino,\" tulis media Italia tersebut.</p><p><span style=\"font-size: 1rem;\">Ketertarikan Torino kepada Jay Idzes bahkan sejak musim lalu. Menurut media lokal Turin itu, gaya bermain Jay Idze sangat dibutuhkan Torino.</span></p><p><span style=\"font-size: 1rem;\">\"Idzes merupakan pemain bertahan yang kekuatannya ada pada keserbabisaannya. Ia dapat bermain di posisi mana saja,\"</span></p><p><span style=\"font-size: 1rem;\">\"Dari menjadi seorang bek sayap hingga bek tengah, bahkan bila diperlukan mengisi peran sebagai gelandang,\"</span></p><p><span style=\"font-size: 1rem;\">\"Dalam hal ini, gaya permainannya mengingatkan kita pada Adrien Tameze yang bermain di lini tengah dan bertahan\"</span></p>', 'Triono', '2025-04-07'),
(5, 'lagi lagi', 'olah raga', 'pindah pemain', '<p>adfadfadsfadfadfadsfadsfadf</p>', 'triono', '2025-04-15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `idkategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_berita`
--

INSERT INTO `kategori_berita` (`idkategori`, `kategori`) VALUES
(1, 'olah raga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user','','') NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `create_at`) VALUES
(1, 'triono', '$2y$10$T6VG7O4ppr5qvFC2zKEgJepNZs7rddbIDoRHlAjP33SPO3KBnuvHa', 'admin', '2025-03-18 02:17:36'),
(2, 'triono1', '$2y$10$T6VG7O4ppr5qvFC2zKEgJepNZs7rddbIDoRHlAjP33SPO3KBnuvHa', 'user', '2025-03-18 03:02:27'),
(3, 'admin1', '$2y$10$OHfX/0JLiVejQYhqC7M/tOh0wicZyVrowBdjDyRMPx40iC4wv4.Pu', 'admin', '2025-05-13 13:26:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
