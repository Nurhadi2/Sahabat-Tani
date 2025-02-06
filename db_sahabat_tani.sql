-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 24, 2025 at 01:17 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sahabat_tani`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_admin`
--

CREATE TABLE `tabel_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesan`
--

CREATE TABLE `tabel_pesan` (
  `id_pesan` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_pesan`
--

INSERT INTO `tabel_pesan` (`id_pesan`, `nama`, `email`, `subjek`, `pesan`) VALUES
(1, 'Ibe', 'ibe@gmail.com', 'buah', 'jahjshagshgas');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_petani`
--

CREATE TABLE `tabel_petani` (
  `id_petani` int(11) NOT NULL,
  `Nama_Petani` varchar(255) NOT NULL,
  `Alamat` varchar(255) NOT NULL,
  `Luas_Tanah` varchar(255) NOT NULL,
  `Keterangan` varchar(255) NOT NULL,
  `Deskripsi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_petani`
--

INSERT INTO `tabel_petani` (`id_petani`, `Nama_Petani`, `Alamat`, `Luas_Tanah`, `Keterangan`, `Deskripsi`) VALUES
(47, 'Nur Iqbal Ramli', 'Gowa', '50 m', 'aktif', ''),
(48, 'iqbal', 'gowa', '50m', 'aktif', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_category`
--

CREATE TABLE `table_category` (
  `id_category` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `waktu` date NOT NULL,
  `kontak` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `maps` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `foto2` varchar(255) NOT NULL,
  `foto3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_category`
--

INSERT INTO `table_category` (`id_category`, `nama`, `foto`, `harga`, `waktu`, `kontak`, `lokasi`, `maps`, `deskripsi`, `kategori`, `foto2`, `foto3`) VALUES
(41, 'Apel', '24072022193032-SAHABAT_TANI-buah-4.jpg', '10.000', '2022-07-02', '085343781474', 'Bulukumba', 'https://goo.gl/maps/siuP4mD2KoXPAuut7', 'apel adalah salah satu buah yang sangat menyegarkan.', 'Buah', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_mahasiswa`
--

CREATE TABLE `table_mahasiswa` (
  `id_mahasiswa` int(11) NOT NULL,
  `nim` int(8) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `angkatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_mahasiswa`
--

INSERT INTO `table_mahasiswa` (`id_mahasiswa`, `nim`, `nama`, `prodi`, `angkatan`) VALUES
(5, 42520001, 'pulung', 'TRJT', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `table_pembeli`
--

CREATE TABLE `table_pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `usernama` int(11) NOT NULL,
  `password` int(11) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_user`
--

CREATE TABLE `table_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_user`
--

INSERT INTO `table_user` (`id_user`, `username`, `password`, `email`) VALUES
(1, 'pulung', '0192023a7bbd73250516f069df18b500', 'php@gmail.com'),
(2, 'yusri', '0192023a7bbd73250516f069df18b500', 'yusrianto@gmil.com'),
(3, 'php', '0192023a7bbd73250516f069df18b500', 'pulung.hendro@gmail.com'),
(4, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin@gmail.com'),
(10, 'iqbal', 'e10adc3949ba59abbe56e057f20f883e', 'php1@gmail.com'),
(12, 'qwqwq', 'f6dd10f99c73a7162031a0e4ebd81d7b', 'qwqwq@asas'),
(13, 'qwwq', 'e10adc3949ba59abbe56e057f20f883e', 'mae11@gmail.com'),
(14, 'iqbal', 'e10adc3949ba59abbe56e057f20f883e', 'nuriqbalramli11@gmail.com'),
(15, 'dwi', 'e10adc3949ba59abbe56e057f20f883e', 'dwidanastry@gmail.com'),
(16, 'iqbal', '5c2fb951458b57e8e049d48a55cdddad', 'nuriqbalramli@gmail.com'),
(17, 'iqbal', '5c2fb951458b57e8e049d48a55cdddad', 'iqbal@gmail.com'),
(18, 'anchu', 'e10adc3949ba59abbe56e057f20f883e', 'syamsulrijalismail@gmail.com'),
(19, 'Anchu', 'e10adc3949ba59abbe56e057f20f883e', 'syamsulrijalismail@gmail.com'),
(20, 'Achu', 'e10adc3949ba59abbe56e057f20f883e', 'syamsulrijalismail@gmail.com'),
(21, 'Ancu', 'ca9286acf38ddc754adeddd12f26c9bf', 'syamsulrijalismail@gmail.com'),
(24, 'nurhadi', '4297f44b13955235245b2497399d7a93', 'nurhadisasono002@google.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id` int(11) NOT NULL,
  `nama_user` text NOT NULL,
  `judul_berita` text NOT NULL,
  `deskripsi_berita` text NOT NULL,
  `tanggal_input` date NOT NULL,
  `gambar_berita` text NOT NULL,
  `kategori_berita` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_berita`
--

INSERT INTO `tb_berita` (`id`, `nama_user`, `judul_berita`, `deskripsi_berita`, `tanggal_input`, `gambar_berita`, `kategori_berita`) VALUES
(11, ' nurhadi', 'Judul 1', 'Deskripsi 1', '2025-01-24', '24012025005936-SAHABAT_TANI-RGL03963.JPG', 'Kategori 1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kategori_berita`
--

CREATE TABLE `tb_kategori_berita` (
  `id` int(11) NOT NULL,
  `nama_kategori_berita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `tabel_petani`
--
ALTER TABLE `tabel_petani`
  ADD PRIMARY KEY (`id_petani`),
  ADD UNIQUE KEY `Status` (`id_petani`);

--
-- Indexes for table `table_category`
--
ALTER TABLE `table_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `table_mahasiswa`
--
ALTER TABLE `table_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- Indexes for table `table_user`
--
ALTER TABLE `table_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kategori_berita`
--
ALTER TABLE `tb_kategori_berita`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_admin`
--
ALTER TABLE `tabel_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_pesan`
--
ALTER TABLE `tabel_pesan`
  MODIFY `id_pesan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tabel_petani`
--
ALTER TABLE `tabel_petani`
  MODIFY `id_petani` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `table_category`
--
ALTER TABLE `table_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `table_mahasiswa`
--
ALTER TABLE `table_mahasiswa`
  MODIFY `id_mahasiswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `table_user`
--
ALTER TABLE `table_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_kategori_berita`
--
ALTER TABLE `tb_kategori_berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
