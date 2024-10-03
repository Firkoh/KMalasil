-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2024 pada 16.18
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kelurahan_malasilen`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `Nama`, `Email`) VALUES
(0, 'admin', 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `path_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `Jb` varchar(200) NOT NULL,
  `path_gambar` text NOT NULL,
  `isi` text NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `created_at` text NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `Jb`, `path_gambar`, `isi`, `penulis`, `created_at`) VALUES
(11, 'NGERI PARAH', 'uploads/66f8039d4fe98_Merah Firgenius Kolose Hombore.jpg', 'jasodsaodj', 'dmsadosadok', '2024-09-28 22:24:45'),
(12, 'Masukanya', 'uploads/66f82e86ce0f6_photo biru ig.jpg', 'laskdkdksaldklsadklsakdlsadklsakdlskdlsakdlksadlksdlksaldksaldksaldklsdkl;askdl;sakdlsakdlaskldklasdklsakdlsakdlskdl;askdlaskdlksaldksladk;sakdl;sakdlsakdlksaldlsadl;sakdl;sakdlsakdlsakdlksaldsldksdkdk;fjkldsjfkld', 'dlsakdlsadl', '2024-09-29 01:27:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `te` varchar(15) NOT NULL,
  `em` varchar(120) NOT NULL,
  `wa` varchar(15) NOT NULL,
  `ins` varchar(120) NOT NULL,
  `fa` varchar(120) NOT NULL,
  `yo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kontak`
--

INSERT INTO `kontak` (`id`, `te`, `em`, `wa`, `ins`, `fa`, `yo`) VALUES
(1, '082248766797', 'firgeniusigeni7799@Gmailcom', '082212123', 'kelurahanMalasilens', 'kelurahanMalasilensd', 'kelurahan dmalasilen');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Nik` int(11) NOT NULL,
  `Nama` varchar(50) DEFAULT NULL,
  `Agama` varchar(20) DEFAULT NULL,
  `Tempat_Lhr` varchar(50) DEFAULT NULL,
  `Tanggal_Lhr` date DEFAULT NULL,
  `Jenis_Kelamin` varchar(20) DEFAULT NULL,
  `Gol_Darah` varchar(20) DEFAULT NULL,
  `Pendidikan` varchar(20) DEFAULT NULL,
  `Pekerjaan` varchar(20) DEFAULT NULL,
  `Status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `plurah`
--

CREATE TABLE `plurah` (
  `id` int(11) NOT NULL,
  `Nip` int(14) NOT NULL,
  `Nama` varchar(100) DEFAULT NULL,
  `Agama` varchar(50) DEFAULT NULL,
  `Tempat_Lhr` varchar(100) DEFAULT NULL,
  `Tanggal_Lhr` date DEFAULT NULL,
  `Jns_Kelamin` enum('Pria','Wanita','','') DEFAULT NULL,
  `Gol_Darah` varchar(5) DEFAULT NULL,
  `Pendidikan` varchar(100) DEFAULT NULL,
  `Jabatan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rtrw`
--

CREATE TABLE `rtrw` (
  `id` int(11) DEFAULT NULL,
  `rt` int(11) DEFAULT NULL,
  `rw` int(11) DEFAULT NULL,
  `jumlah_penduduk` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `rtrw`
--

INSERT INTO `rtrw` (`id`, `rt`, `rw`, `jumlah_penduduk`) VALUES
(1, 1, 1, '2000'),
(NULL, 1, 2, '20000'),
(NULL, 1, 2, '1'),
(NULL, 1, 2, '1'),
(NULL, 1, 2, '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `visi_misi`
--

CREATE TABLE `visi_misi` (
  `Visi_Id` int(11) NOT NULL,
  `judul_sejarah` varchar(200) NOT NULL,
  `ISI` text NOT NULL,
  `Visi` text DEFAULT NULL,
  `Misi` text DEFAULT NULL,
  `Tanggal_Update` timestamp(2) NULL DEFAULT current_timestamp(2)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `visi_misi`
--

INSERT INTO `visi_misi` (`Visi_Id`, `judul_sejarah`, `ISI`, `Visi`, `Misi`, `Tanggal_Update`) VALUES
(0, '1.sdsaoodsas', 'Sejarah', '1.sdsaoodsas', '3dasdasdsajsddjasjnjsss', '2024-09-28 06:13:44.00'),
(2, 'Sejarah', 'belum ada', 'belum ada', 'belum ada', '2024-09-13 16:36:23.00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`ID`) USING BTREE,
  ADD UNIQUE KEY `Nik` (`Nik`);

--
-- Indeks untuk tabel `plurah`
--
ALTER TABLE `plurah`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Nip` (`Nip`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`Visi_Id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `plurah`
--
ALTER TABLE `plurah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
