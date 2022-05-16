-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 04:13 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_db_hotel`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_f_hotel` (`id` INT(11), `nama_fasilitas` TEXT, `img` TEXT, `deks` TEXT)   BEGIN
	INSERT INTO f_hotel
	VALUES(id,nama_fasilitas,img,deks);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_f_kamar` (`id_fkamar` INT(11), `id_kamar` INT(11), `nama_fasilitas` TEXT, `kategory` VARCHAR(255), `img` TEXT)   BEGIN
	INSERT INTO f_kamar
	VALUES(id_fkamar,id_kamar,nama_fasilitas,kategory,img);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_pemesanan` (`id` INT(11), `nama_pemesan` VARCHAR(50), `email` VARCHAR(35), `no_hp` VARCHAR(35), `nama_tamu` VARCHAR(50), `id_kamar` INT(11), `tgl_cekin` DATE, `tgl_cekout` DATE, `jml_kamar` INT(11), `Harga` INT(11), `PayBay` VARCHAR(244), `PayEND` INT(1), `Nomor_Kamar` VARCHAR(255), `RefPB` VARCHAR(255))   BEGIN
    insert into pemesanan
    values(id,nama_pemesan,email,no_hp,nama_tamu,id_kamar,tgl_cekin,tgl_cekout,jml_kamar,Harga,PayBay,PayEND,Nomor_Kamar,RefPB);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_tipe_kamar` (`id_kamar` INT(11), `Nama_room` VARCHAR(244), `harga` INT(11), `Stok` INT(11), `onuse` INT(11), `onbook` INT(11), `img_room` TEXT)   BEGIN
	INSERT INTO tipe_room
	VALUES(id_kamar,Nama_room,harga,Stok,onuse,onbook,img_room);
    END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `simpan_users` (`id_login` INT(11), `username` VARCHAR(35), `pass` VARCHAR(35), `Nama` VARCHAR(255), `Jenis_kelamin` VARCHAR(255), `tgllahir` DATE, `no_telp` VARCHAR(14), `lev` ENUM('admin','resepsionis','tamu'))   BEGIN
	insert into users
	values(id_login,username,pass,Nama,Jenis_kelamin,tgllahir,no_telp,lev);
    END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `f_hotel`
--

CREATE TABLE `f_hotel` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` text NOT NULL,
  `img` text NOT NULL,
  `deks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_hotel`
--

INSERT INTO `f_hotel` (`id`, `nama_fasilitas`, `img`, `deks`) VALUES
(2, 'Asidaraji', 'https://atpetsi.or.id/uploads/article/view/210507061237200228114324hotel.jpg', 'Nandeyo deyo'),
(3, 'f2', 'http://localhost/phpmyadmin/themes/pmahomme/img/logo_left.png', 'tes'),
(4, 'spa', 'https://73cc8915eb9cf66dad90-91c9e0dc61e2af367a83ca09fafb7723.ssl.cf1.rackcdn.com/u/hermitage-spa.jpg', 'membuat anda relax');

-- --------------------------------------------------------

--
-- Table structure for table `f_kamar`
--

CREATE TABLE `f_kamar` (
  `id_fkamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama_fasilitas` text DEFAULT NULL,
  `kategory` varchar(255) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `f_kamar`
--

INSERT INTO `f_kamar` (`id_fkamar`, `id_kamar`, `nama_fasilitas`, `kategory`, `img`) VALUES
(11, 2, 'TV 200inch', 'Area', '1562724689-picsay.png'),
(12, 2, 'TV 60 inch', 'electronic', 'BackgroundHome.png'),
(13, 2, 'Bantal', 'Aksesoris', ''),
(17, 7, 'Bantal', 'Aksesoris', '');

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tgl_cekin` date NOT NULL,
  `tgl_cekout` date NOT NULL,
  `jml_kamar` int(11) NOT NULL,
  `T_harga` int(11) NOT NULL,
  `PayBy` enum('Bayar Di Tempat','M-Banking') NOT NULL,
  `PayEND` int(1) NOT NULL,
  `Status` enum('CekIn','CekOut') NOT NULL,
  `RefPB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `nama_pemesan`, `email`, `no_hp`, `nama_tamu`, `id_kamar`, `tgl_cekin`, `tgl_cekout`, `jml_kamar`, `T_harga`, `PayBy`, `PayEND`, `Status`, `RefPB`) VALUES
(33, 'Oka Wardana', 'oka@gmail.com', '088462747124', 'Oka', 2, '2022-05-16', '2022-05-17', 1, 2000000, 'Bayar Di Tempat', 0, 'CekIn', 'IlbuxdjODo'),
(37, 'Oka Wardana', 'oka@gmail.com', '084126641645', 'Oka', 2, '2022-05-16', '2022-05-17', 1, 800000, 'Bayar Di Tempat', 0, '', 'r9jY0G5Jca'),
(39, 'Oka Wardana', 'oka@gmail.com', '0987216471245', 'Oka', 7, '2022-05-16', '2022-05-17', 1, 200000, 'Bayar Di Tempat', 0, '', '85OxE3cBAf');

-- --------------------------------------------------------

--
-- Table structure for table `tipe_room`
--

CREATE TABLE `tipe_room` (
  `id_kamar` int(11) NOT NULL,
  `Nama_room` varchar(244) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `Stok` int(11) NOT NULL,
  `onuse` int(11) NOT NULL,
  `onbook` int(11) NOT NULL,
  `img_room` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipe_room`
--

INSERT INTO `tipe_room` (`id_kamar`, `Nama_room`, `harga`, `Stok`, `onuse`, `onbook`, `img_room`) VALUES
(2, 'Deluxe', 800000, 10, 0, 0, 'https://cloudstorage.amari.com/property/johor-bahru/hotel-photos/stay/grand-deluxe/grand-deluxe-king.jpg'),
(7, 'Double Bed', 200000, 10, 0, 0, 'https://asset-a.grid.id/crop/0x0:0x0/x/photo/2020/04/23/1232344100.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_login` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Jenis_Kelamin` varchar(255) NOT NULL,
  `tgllahir` date NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `level` enum('admin','resepsionis','tamu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_login`, `username`, `password`, `Nama`, `Jenis_Kelamin`, `tgllahir`, `no_telp`, `level`) VALUES
(7, 'admin', 'admin', 'Admin', 'Laki-Laki', '0000-00-00', '081221823861', 'admin'),
(17, 'ZX', '1234', 'Oka Wardana', 'Laki-Laki', '2022-03-15', '083807602009', 'tamu'),
(18, 'oka', '123', 'Oka Wardana', 'Laki-Laki', '2022-04-11', '083807602009', 'tamu'),
(19, 'Zero', '1234', 'zero', 'Laki-Laki', '2022-04-12', '081212121', 'tamu'),
(21, 'zx25', '12345', 'Oka', 'laki-laki', '2003-10-09', '0889878685', 'tamu'),
(23, 'Resepsionis', '12345', 'Resepsionis', 'Laki-Laki', '2022-05-09', '083807602009', 'resepsionis'),
(24, 'ninja', 'bubha', 'Hatori', 'Laki-Laki', '2022-05-10', '08345756378', 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `f_hotel`
--
ALTER TABLE `f_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_kamar`
--
ALTER TABLE `f_kamar`
  ADD PRIMARY KEY (`id_fkamar`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indexes for table `tipe_room`
--
ALTER TABLE `tipe_room`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `f_hotel`
--
ALTER TABLE `f_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `f_kamar`
--
ALTER TABLE `f_kamar`
  MODIFY `id_fkamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `tipe_room`
--
ALTER TABLE `tipe_room`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `f_kamar`
--
ALTER TABLE `f_kamar`
  ADD CONSTRAINT `f_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_room` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_room` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
