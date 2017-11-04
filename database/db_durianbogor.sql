-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2017 at 12:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_durianbogor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(2) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `email`, `password`, `foto`) VALUES
(1, 'Admin', 'admin@admin.com', '7b902e6ff1db9f560443f2048974fd7d386975b0', '../../images/user/admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id_cart` int(8) NOT NULL,
  `id_produk` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `jumlah_produk` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`id_cart`, `id_produk`, `id_user`, `jumlah_produk`) VALUES
(31, 5, 2, 1);

--
-- Triggers `tb_cart`
--
DELIMITER $$
CREATE TRIGGER `tg_kembali` BEFORE DELETE ON `tb_cart` FOR EACH ROW BEGIN
 UPDATE tb_produk SET stok=stok+OLD.jumlah_produk
 WHERE id_produk=OLD.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_updatestok_produk` BEFORE INSERT ON `tb_cart` FOR EACH ROW BEGIN
 UPDATE tb_produk SET stok=stok-NEW.jumlah_produk
 WHERE id_produk=NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluhan`
--

CREATE TABLE `tb_keluhan` (
  `id_keluhan` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `jenis_keluhan` varchar(40) NOT NULL,
  `keluhan` varchar(200) NOT NULL,
  `foto` varchar(60) NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keluhan`
--

INSERT INTO `tb_keluhan` (`id_keluhan`, `id_user`, `jenis_keluhan`, `keluhan`, `foto`, `waktu`) VALUES
(6, 2, 'Sistem Bermasalah', 'Aduh sistemnya bermasalah nih gak bisa diakses troli nya. Tolong diperbaiki', '', '2017-05-18 22:16:02'),
(8, 1, 'Produk Belum Terkirim', 'aduh euy', '', '2017-06-06 04:28:40');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE `tb_komentar` (
  `id_komentar` int(8) NOT NULL,
  `id_user` int(8) NOT NULL,
  `id_produk` int(8) NOT NULL,
  `komentar` text NOT NULL,
  `waktu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_user`, `id_produk`, `komentar`, `waktu`) VALUES
(6, 1, 6, 'Mantap\n', '2017-05-02'),
(15, 2, 4, 'Keren Gan\n', '2017-05-03'),
(16, 1, 5, 'mantap', '2017-06-06');

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk`
--

CREATE TABLE `tb_produk` (
  `id_produk` int(8) NOT NULL,
  `produk` varchar(50) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `ukuran` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `stok` int(8) NOT NULL,
  `asal` varchar(20) NOT NULL,
  `tanggal_post` varchar(40) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `terjual` int(8) NOT NULL,
  `view` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_produk`
--

INSERT INTO `tb_produk` (`id_produk`, `produk`, `jenis`, `ukuran`, `harga`, `foto`, `stok`, `asal`, `tanggal_post`, `deskripsi`, `terjual`, `view`) VALUES
(4, 'Durian Sidikalang', 'Lokal', 'Sedang', '50000', 'buah-durian.jpg', 91, 'Bukit Tinggi', '28 April, 2017', 'Rasa Manis, Legit', 3, 32),
(5, 'Durian Petruk', 'Montong', '1 Kg - 1.5 Kg', '70000', 'Khasiat-Buah-Durian-untuk-Kesehatan-dan-Kecantikan1 (1).jpg', 59, 'Rancamaya', '3 May, 2017', 'Rasa Manis, Isi lebih tebal, dan legit', 4, 22),
(8, 'Durian Padang', 'Montong', '1.5 Kg - 2 Kg', '90000', 'fresh-durian-fruit-985312.jpg', 48, 'Padang', '5 May, 2017', 'Ukuran Jumbo, Rasa Puas, Isi lebih tebal dan nikmat', 2, 5),
(9, 'Durian Medan', 'Lokal', 'Besar', '70000', '4.jpg', 46, 'Medan', '5 May, 2017', 'Rasa Manis dan terasa kaya keju', 4, 16),
(10, 'Durian Banten', 'Lokal', 'Kecil', '40000', '1318560_orig.jpg', 50, 'Pandeglang, Banten', '5 May, 2017', 'Walaupun kecil , tetapi rasa banten punya, manis dan sedikit gurih', 3, 5),
(11, 'Durian Padang', 'Montong', '3 Kg - 3.5 Kg', '170000', 'durian gambar foto.jpg', 29, 'Padang Sidikalang', '5 May, 2017', 'Rasa Manis, legit, montong', 1, 15),
(12, 'Durian Medan', 'Lokal', 'Kecil', '40000', 'durian.png', 60, 'Medan', '5 May, 2017', 'Rasa Manis dan legit, isi tebal', 0, 2),
(13, 'Durian Lampung', 'Lokal', 'Kecil', '40000', 'durian-01.png', 39, 'Lampung', '4 May, 2017', 'Rasa Manis dan Legit', 1, 2),
(14, 'Durian Banten', 'Lokal', 'Sedang', '50000', 'durian-300x279.jpg', 59, 'Banten', '5 May, 2017', 'Rasa Manis, warna lebih kuning', 1, 8),
(15, 'Durian Lampung', 'Lokal', 'Jumbo', '120000', 'Manfaat-Durian.jpg', 49, 'Lampung', '5 May, 2017', 'Rasa Manis dan Tebal isinya, warna lebih kuning', 1, 12),
(16, 'Durian Bukit Tinggi', 'Lokal', 'Kecil', '40000', 'file.jpg', 64, 'Padang Bukit Tinggi', '5 May, 2017', 'Rasa Manis, isi tebal , warna lebih kuning', 7, 56),
(17, 'Durian Banten', 'Lokal', 'Kecil', '40000', 'gabar_buah_durian_montong.jpg', 51, 'Banten', '4 May, 2017', 'Rasa Manis, dan harum', 0, 8),
(18, 'Durian Montong', 'Montong', '2 Kg - 2.5 Kg', '130000', 'Durian-Kupas-2.jpg', 49, 'Rancamaya', '5 May, 2017', 'Rasa Manis, warna kulit  hijau dan isi tebal', 1, 3),
(19, 'Durian Bengkulu', 'Lokal', 'Kecil', '40000', 'images (13).jpg', 64, 'Bengkulu', '4 May, 2017', 'Rasa Manis dan Harum', 6, 8),
(20, 'Durian Petruk', 'Lokal', 'Sedang', '50000', 'images (5).jpg', 79, 'Rancamaya', '4 May, 2017', 'Rasa Manis, biji kecil dan harum', 1, 2),
(21, 'Durian Petruk', 'Lokal', 'Sedang', '50000', 'images (10).jpg', 87, 'Rancamaya', '4 May, 2017', 'Rasa Manis, Legit dan harum', 3, 17);

-- --------------------------------------------------------

--
-- Table structure for table `tb_tanggapan`
--

CREATE TABLE `tb_tanggapan` (
  `id_tanggapan` int(8) NOT NULL,
  `id_keluhan` int(8) NOT NULL,
  `id_admin` int(8) NOT NULL,
  `tanggapan` text NOT NULL,
  `waktu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tanggapan`
--

INSERT INTO `tb_tanggapan` (`id_tanggapan`, `id_keluhan`, `id_admin`, `tanggapan`, `waktu`) VALUES
(5, 3, 2, 'Terimakasih atas keluhannya, kami akan segera memperbaiki secepatnya', '2017-05-18 21:09:27'),
(6, 5, 2, 'Terimakasih atas keluhannya, kami akan segera memperbaiki sistem yang bermasalah tersebut secepatnya', '2017-05-18 22:03:48'),
(9, 6, 2, 'Terimakasih atas keluhannya, kami akan segera memperbaiki secepatnya', '2017-05-18 22:25:07'),
(10, 7, 2, 'hampura ngaranna ge dagang', '2017-06-02 10:40:17'),
(11, 9, 2, 'hampura nya', '2017-06-07 04:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(20) NOT NULL,
  `id_cart` int(8) NOT NULL,
  `id_produk` int(8) NOT NULL,
  `id_user` int(20) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `total` varchar(20) NOT NULL,
  `tanggal_transaksi` varchar(30) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `status` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `expired` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id_transaksi`, `id_cart`, `id_produk`, `id_user`, `jumlah`, `total`, `tanggal_transaksi`, `pembayaran`, `status`, `foto`, `expired`) VALUES
(159, 1, 5, 2, 1, '90000', '2017-06-02', 'Cash On Delivery', '', 'cod.png', '2017-06-02'),
(161, 3, 8, 2, 2, '180000', '2017-06-02', 'Bank BRI', '', 'BUKTI.PNG', '2017-06-02'),
(162, 1, 5, 1, 1, '90000', '2017-06-06', 'Bank BRI', '', '', '2017-06-06');

--
-- Triggers `tb_transaksi`
--
DELIMITER $$
CREATE TRIGGER `hapus_cart` AFTER INSERT ON `tb_transaksi` FOR EACH ROW BEGIN
 DELETE FROM tb_cart
 WHERE id_cart=NEW.id_cart;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_updateproduk` BEFORE DELETE ON `tb_transaksi` FOR EACH ROW BEGIN
 UPDATE tb_produk SET stok=stok+OLD.jumlah, terjual=terjual-OLD.jumlah
 WHERE id_produk=OLD.id_produk;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tg_updatestok` BEFORE INSERT ON `tb_transaksi` FOR EACH ROW BEGIN
 UPDATE tb_produk SET stok=stok-NEW.jumlah, terjual=terjual+NEW.jumlah
 WHERE id_produk=NEW.id_produk;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `name`, `password`, `jenis_kelamin`, `email`, `alamat`, `telepon`, `foto`) VALUES
(1, 'Avatar Aang', 'd7316a3074d562269cf4302e4eed46369b523687', 'Laki - Laki', 'user@user.com', 'Kp.Kuripan Desa Sukadamai Dramaga, Bogor Barat', '8568849619', 'Aang1.png'),
(2, 'Ahmad Muhyidin', 'a32bb34c498a7c4d996271f0321549046b20acfa', 'Laki - Laki', 'user2@user.com', 'Bogor, Jawa Barat', '85788453627', 'idin.png'),
(3, 'Muhamad Dava', '52a2edd0cb35af9aa83a1ac6385c9d92dc905700', 'Laki - Laki', 'user3@user.com', 'Jl. Cibinong No.57', '586459855', 'dafa.jpg'),
(6, 'Muhamad Kelpin', '5f7d7529a90289d658b1b9ec0edfbbead51e6db9', 'Laki - Laki', 'user4@user.com', 'Kp. Cisasah BL, Tamansari, Kab. Bogor Provinsi Jawa Barat, Indonesia, Asia Tenggara, Bumi, Galaxy Bima Sakti ', '5964561336', 'kelpin.jpg'),
(7, 'Muhamad Sirojudin', '5949645c49683a3702e1f1d0b6659c634f47d642', 'Laki - Laki', 'user5@user.com', 'Kp. Cisasah Anak Gang Sier', '5154564648', 'avatar.png'),
(11, 'Wiz Kahlifa', '5c2fb2424db6ebf28b9937de8e4ecde77d924d21', 'Laki - Laki', 'wizh@user.com', 'Kp. Chicago Desa Amerika', '08438448348', 'user.jpg'),
(12, 'Jhony Depp', '11e7a579899ca8a0d7943e4926932017b647034e', 'Laki - Laki', 'jhonydepp@user.com', 'Kp. Cisaat, Desa Colorado Kabupaten Bintaro', '0239273974089', '871600-aang191.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indexes for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  ADD PRIMARY KEY (`id_keluhan`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  ADD PRIMARY KEY (`id_tanggapan`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `tanggal_transaksi` (`tanggal_transaksi`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id_cart` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tb_keluhan`
--
ALTER TABLE `tb_keluhan`
  MODIFY `id_keluhan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
  MODIFY `id_komentar` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `id_produk` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tb_tanggapan`
--
ALTER TABLE `tb_tanggapan`
  MODIFY `id_tanggapan` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
