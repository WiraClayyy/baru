-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Feb 2023 pada 17.20
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `merahputih`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `nama`, `pass`, `type`) VALUES
(1, 'coba1', 'bf0c95ff56e3b2598456cd455a8684c1', '1'),
(2, 'coba2', '17146a464726f22dc5ff649fca94761e', '2'),
(3, 'coba3', 'fb1b8e85a800886adeadb7cccf12a524', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `dom` varchar(255) NOT NULL,
  `ni` varchar(255) NOT NULL,
  `hauling` varchar(255) NOT NULL,
  `solar` int(11) NOT NULL,
  `retase` varchar(255) NOT NULL,
  `pj` varchar(255) NOT NULL,
  `alat1` int(11) NOT NULL,
  `alat2` int(11) NOT NULL,
  `alat3` int(11) NOT NULL,
  `alat4` int(11) NOT NULL,
  `alat5` int(11) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `nama`, `tanggal`, `total`, `dom`, `ni`, `hauling`, `solar`, `retase`, `pj`, `alat1`, `alat2`, `alat3`, `alat4`, `alat5`, `gambar1`, `gambar2`, `gambar3`) VALUES
(8, '1', '1', '1', '1', '1.8', '1', 1, '1', '1', 1, 1, 1, 1, 1, '2.jpg', 'az.jpg', 'az.jpg'),
(9, '4', '4', '4', '4', '2.0', '4', 4, '4', '4', 4, 4, 4, 4, 4, 'a (2).jpg', 'a (2).jpg', 'a (2).jpg'),
(10, '4', '2023-02-06', '4', '4', '2.0', '4', 4, '4', '4', 4, 4, 4, 4, 4, 'a (2).jpg', 'az.jpg', 'az.jpg'),
(11, '1', '1', '1', '1', '1.8', '1', 1, '1', '1', 1, 1, 1, 1, 1, '2.jpg', 'az.jpg', 'az.jpg'),
(12, '4', '4', '4', '4', '2.0', '4', 4, '4', '4', 4, 4, 4, 4, 4, 'a (2).jpg', 'a (2).jpg', 'a (2).jpg'),
(13, '4', '2023-02-06', '4', '4', '2.0', '4', 4, '4', '4', 4, 4, 4, 4, 4, 'a (2).jpg', 'az.jpg', 'az.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keuangan`
--

CREATE TABLE `keuangan` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keuangan`
--

INSERT INTO `keuangan` (`id`, `tanggal`, `total`, `gambar1`, `gambar2`, `gambar3`) VALUES
(4, '2023-02-23', 20000, '4.jpg', '4.jpg', '4.jpg'),
(5, '2023-02-01', 3000, '2.jpg', '3.jpg', '4.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar1` varchar(255) NOT NULL,
  `gambar2` varchar(255) NOT NULL,
  `gambar3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `keterangan`, `tanggal`, `jumlah`, `harga`, `gambar1`, `gambar2`, `gambar3`) VALUES
(3, 'asd', '2023-02-05', 2, 2, '3.jpg', '4.jpg', '2.jpg'),
(4, 'a', '2023-02-05', 2, 2, '2.jpg', '2.jpg', '3.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `solar`
--

CREATE TABLE `solar` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `solar`
--

INSERT INTO `solar` (`id`, `tanggal`, `total`) VALUES
(7, '2023-02-07', 10),
(8, '2023-02-21', 50),
(9, '2023-02-21', 15);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `solar`
--
ALTER TABLE `solar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `keuangan`
--
ALTER TABLE `keuangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `solar`
--
ALTER TABLE `solar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
