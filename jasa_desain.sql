-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 20, 2020 at 10:26 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jasa_desain`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE `bank` (
  `id_bank` int(11) NOT NULL,
  `nama_bank` varchar(30) NOT NULL,
  `nama_pemilik` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `foto_bank` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`id_bank`, `nama_bank`, `nama_pemilik`, `no_rekening`, `foto_bank`) VALUES
(7, 'BANK BRI', 'MUHAMMAD RIZAL PAHLEVI', '01923123781237', 'download.jpg'),
(8, 'BANK BCA', 'MUHAMMAD RIZAL PAHLEVI', '981738123817', 'download.png');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `catatan` text,
  `status` enum('cart','non_cart') DEFAULT 'cart',
  `expired_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `id_designer` int(11) NOT NULL,
  `nama_designer` varchar(40) NOT NULL,
  `jumlah_yang_dikerjakan` int(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`id_designer`, `nama_designer`, `jumlah_yang_dikerjakan`) VALUES
(2, 'Rizal', 31),
(3, 'Muhammad ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(7, 'Logo Design'),
(8, 'Social Media Management'),
(9, 'Digital Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `username`, `nama`, `email`, `no_hp`, `password`) VALUES
(1, 'member', 'MEMBER a', 'member@gmail.com', '1209381923', 'aa08769cdcb26674c6706093503ff0a3'),
(2, 'rizal', 'Rizal Pahlevi', 'mrizalpahlevi37kaj@asd.as', '01923891823', '150fb021c56c33f82eef99253eb36ee1'),
(3, 'rizal', 'Rizal Pahlevi', 'mrizalpahlevi37kaj@asd.as', '01923891823', '150fb021c56c33f82eef99253eb36ee1');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `harga_paket` int(11) NOT NULL,
  `keterangan` text NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`, `harga_paket`, `keterangan`, `id_kategori`) VALUES
(1, 'LITE', 10000, 'TESTING', 2),
(2, 'LITE', 300000, '<p><strong>Cocok Untuk UMKM</strong></p>\r\n\r\n<ul>\r\n	<li>1 Pilihan Logo</li>\r\n	<li>2x Revisi</li>\r\n	<li>Max 2 Hari Pengerjaan</li>\r\n	<li>Free Konsultasi</li>\r\n</ul>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -27px; top: -6px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 7),
(3, 'MEDIUM', 600000, '<p><strong>Cocok Untuk UD/CV</strong></p>\r\n\r\n<ul>\r\n	<li>2 Pilihan Logo</li>\r\n	<li>3x Revisi</li>\r\n	<li>Max 3 Hari Pengerjaan</li>\r\n	<li>Free Desain Kartu Nama</li>\r\n	<li>Free Konsultasi</li>\r\n</ul>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 160px; top: 38px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 7),
(4, 'BIZ', 900000, '<p><strong>Cocok Untuk PT</strong></p>\r\n\r\n<ul>\r\n	<li>3 Pilihan Logo</li>\r\n	<li>3x Revisi</li>\r\n	<li>Max 3 Hari Pengerjaan</li>\r\n	<li>Free Desain Kartu Nama</li>\r\n	<li>Free Desain Kop Surat</li>\r\n	<li>Free Desain Brosur</li>\r\n	<li>Free Konsultasi</li>\r\n</ul>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: -67px; top: -6px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 7),
(5, 'LITE', 1700000, '<p>Cocok Untuk Baru Memulai Usaha</p>\r\n\r\n<ul>\r\n	<li>1 Postingan/Hari</li>\r\n	<li>Optimasi Followers</li>\r\n	<li>Optimasi Engagement</li>\r\n	<li>Digital Imaging</li>\r\n	<li>Copywriting</li>\r\n	<li>1x Revisi Desain</li>\r\n	<li>Laporan</li>\r\n	<li>Digital Imaging</li>\r\n</ul>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 195px; top: 185px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 8),
(6, 'MEDIUM', 3000000, '<p><strong>Cocok Untuk Bisnis Yang Mulai Berkembang</strong></p>\r\n\r\n<ul>\r\n	<li>Optimasi Followers</li>\r\n	<li>Optimasi Engagement</li>\r\n	<li>Digital Imaging</li>\r\n	<li>Copywriting</li>\r\n	<li>1x Revisi Desain</li>\r\n	<li>Laporan</li>\r\n	<li>Digital Imaging</li>\r\n	<li>1 Video</li>\r\n	<li>Filtered Spam</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div id=\"gtx-trans\" style=\"position: absolute; left: 420px; top: 38px;\">\r\n<div class=\"gtx-trans-icon\">&nbsp;</div>\r\n</div>\r\n', 8),
(7, 'BIZ', 4000000, '<p><strong>Cocok Untuk Bisnis Yang Sudah Maju</strong></p>\r\n\r\n<ul>\r\n	<li>2 Postingan/Hari</li>\r\n	<li>Optimasi Followers</li>\r\n	<li>Optimasi Engagement</li>\r\n	<li>Digital Imaging</li>\r\n	<li>Copywriting</li>\r\n	<li>1x Revisi Desain</li>\r\n	<li>Laporan</li>\r\n	<li>Digital Imaging</li>\r\n	<li>1 Video</li>\r\n	<li>Filtered Spam</li>\r\n	<li>No Respon Comment</li>\r\n</ul>\r\n', 8),
(8, 'PAKET SOSIAL MEDIA ADS', 1000000, '<ul>\r\n	<li>15 Hari Tayangan</li>\r\n	<li>Anggaran harian 50 Ribu</li>\r\n	<li>Harga Termasuk Jasa 20%</li>\r\n	<li>Free Desain Iklan</li>\r\n</ul>\r\n', 9),
(9, 'PAKET GOOGLE ADDWORDS', 1500000, '<ul>\r\n	<li>15 Hari Tayangan</li>\r\n	<li>Anggaran harian 50 Ribu</li>\r\n	<li>Harga Termasuk Jasa 20%</li>\r\n	<li>Free Desain Iklan</li>\r\n</ul>\r\n', 9),
(10, 'CUSTOM', 99, '<p>Untuk Anda Dengan Harga Khusus</p>\r\n', 9);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `bukti_bayar` varchar(100) DEFAULT NULL,
  `tanggal_bayar` date DEFAULT NULL,
  `tanggal_konfirmasi` date DEFAULT NULL,
  `status_pembayaran` enum('Belum Bayar','Menunggu Konfirmasi','Pembayaran Valid','Pembayaran Ditolak') NOT NULL DEFAULT 'Belum Bayar',
  `id_pemesanan` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `jumlah_bayar`, `bukti_bayar`, `tanggal_bayar`, `tanggal_konfirmasi`, `status_pembayaran`, `id_pemesanan`, `id_bank`) VALUES
(2, 600000, '91581437_814891612253679_2706960469477780233_n.jpg', '2020-07-19', '2020-07-19', 'Pembayaran Valid', 6, 7),
(3, 600000, NULL, NULL, NULL, 'Belum Bayar', 7, 7);

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `kode_pemesanan` varchar(20) NOT NULL,
  `jumlah_pemesanan` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `catatan` text NOT NULL,
  `no_resi` varchar(40) DEFAULT NULL,
  `id_member` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `id_designer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `kode_pemesanan`, `jumlah_pemesanan`, `total_bayar`, `status_pemesanan`, `tanggal_pemesanan`, `catatan`, `no_resi`, `id_member`, `id_paket`, `id_designer`) VALUES
(6, 'ORD00001', 1, 600000, 'On Proggress', '2020-07-19', 'asdasd', 'TESTING912389123', 1, 3, 2),
(7, 'ORD00002', 1, 600000, 'Belum Dibayar', '2020-07-20', 'Ini testing boss', NULL, 1, 3, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `bank`
--
ALTER TABLE `bank`
  ADD PRIMARY KEY (`id_bank`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`id_designer`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_bank` (`id_bank`),
  ADD KEY `id_pemesanan` (`id_pemesanan`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD UNIQUE KEY `kode_pemesanan` (`kode_pemesanan`),
  ADD KEY `id_designer` (`id_designer`),
  ADD KEY `id_member` (`id_member`),
  ADD KEY `id_paket` (`id_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bank`
--
ALTER TABLE `bank`
  MODIFY `id_bank` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `designer`
--
ALTER TABLE `designer`
  MODIFY `id_designer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_bank`) REFERENCES `bank` (`id_bank`) ON DELETE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_designer`) REFERENCES `designer` (`id_designer`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_member`) REFERENCES `member` (`id_member`) ON DELETE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
