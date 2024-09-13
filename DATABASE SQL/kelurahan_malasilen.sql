-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Sep 2024 pada 18.53
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
-- Struktur dari tabel `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(11) NOT NULL,
  `Nama_Kelurahan` varchar(100) DEFAULT NULL,
  `RT_RW` varchar(50) DEFAULT NULL,
  `Distrik` varchar(50) DEFAULT NULL,
  `Kabupaten_Kota` varchar(50) DEFAULT NULL,
  `Provinsi` varchar(50) DEFAULT NULL,
  `Jumlah_Penduduk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `Nama_Kelurahan`, `RT_RW`, `Distrik`, `Kabupaten_Kota`, `Provinsi`, `Jumlah_Penduduk`) VALUES
(1, 'Kelurahan A', '001/002', 'Centrum', 'Kota Bandung', 'Jawa Barat', 500),
(2, 'Kelurahan B', '002/003', 'Panyileukan', 'Kota Bandung', 'Jawa Barat', 800);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penduduk`
--

CREATE TABLE `penduduk` (
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

--
-- Dumping data untuk tabel `penduduk`
--

INSERT INTO `penduduk` (`Nik`, `Nama`, `Agama`, `Tempat_Lhr`, `Tanggal_Lhr`, `Jenis_Kelamin`, `Gol_Darah`, `Pendidikan`, `Pekerjaan`, `Status`) VALUES
(2147483647, 'djisadjisajdi', 'dasiodhioashd', 'kjadskajds', '0000-00-00', 'aodsjposjado', 'idjsijdsaidjisd', 'asjdojdsa', 'ksdaodk', 'asdjkoadsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `plurah`
--

CREATE TABLE `plurah` (
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

--
-- Dumping data untuk tabel `plurah`
--

INSERT INTO `plurah` (`Nip`, `Nama`, `Agama`, `Tempat_Lhr`, `Tanggal_Lhr`, `Jns_Kelamin`, `Gol_Darah`, `Pendidikan`, `Jabatan`) VALUES
(890489032, 'Andre', 'Kristen', 'Sorong', '2002-09-21', 'Pria', 'O', 'SMA', 'Lurah');

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
(1, 1, 1, '2000');

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
-- Indeks untuk tabel `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`Nik`);

--
-- Indeks untuk tabel `plurah`
--
ALTER TABLE `plurah`
  ADD PRIMARY KEY (`Nip`);

--
-- Indeks untuk tabel `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`Visi_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
