-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Apr 2022 pada 06.46
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.28

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `f_hotel`
--

CREATE TABLE `f_hotel` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` text NOT NULL,
  `img` text NOT NULL,
  `deks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `f_hotel`
--

INSERT INTO `f_hotel` (`id`, `nama_fasilitas`, `img`, `deks`) VALUES
(1, 'F1', 'http://localhost/phpmyadmin/themes/pmahomme/img/logo_left.png', 'tes'),
(2, 'Asidaraji', 'https://atpetsi.or.id/uploads/article/view/210507061237200228114324hotel.jpg', 'Nandeyo deyo'),
(3, 'f2', 'http://localhost/phpmyadmin/themes/pmahomme/img/logo_left.png', 'tes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `f_kamar`
--

CREATE TABLE `f_kamar` (
  `id_fkamar` int(11) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `nama_fasilitas` text DEFAULT NULL,
  `kategory` varchar(255) DEFAULT NULL,
  `img` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `f_kamar`
--

INSERT INTO `f_kamar` (`id_fkamar`, `id_kamar`, `nama_fasilitas`, `kategory`, `img`) VALUES
(1, 1, 'TV LED 360inc', 'Electronic', 'http://img.global.news.samsung.com/global/wp-content/uploads/2015/04/TV_SUHD_Main_1.jpg'),
(2, 1, 'Sofa Biru', 'Aksesoris', 'https://cf.shopee.co.id/file/2a42be431db7b8262da1f1bbcf44e815'),
(3, 1, 'Meja meeting', 'Aksesoris', 'https://images.tokopedia.net/img/cache/500-square/product-1/2018/11/4/160040/160040_017a91fd-9b71-476f-a4ea-6a611c761be1_2048_2048.jpg'),
(4, 1, 'Kasur Twince', 'Aksesoris', 'https://asset.kompas.com/crop/407x139:1811x1076/750x500/data/photo/2019/03/28/2463628903.jpg'),
(5, 1, 'asdas', 'asdas', 'asdas'),
(6, 2, 'asdasa', 'ddddd', 'dddd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_hp` varchar(35) NOT NULL,
  `nama_tamu` varchar(50) NOT NULL,
  `id_kamar` int(11) NOT NULL,
  `tgl_cekin` date NOT NULL,
  `tgl_cekout` date NOT NULL,
  `jml_kamar` int(11) NOT NULL,
  `Harga` int(11) NOT NULL,
  `PayBay` varchar(244) NOT NULL,
  `PayEND` int(1) NOT NULL,
  `Status_Kamar` varchar(255) NOT NULL,
  `RefPB` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pesanan`, `nama_pemesan`, `email`, `no_hp`, `nama_tamu`, `id_kamar`, `tgl_cekin`, `tgl_cekout`, `jml_kamar`, `Harga`, `PayBay`, `PayEND`, `Status_Kamar`, `RefPB`) VALUES
(10, 'Agustinus Yoube', 'lagustinus211@gmail.com', '081221723872', 'Gariner,Suge', 1, '2022-02-02', '2022-02-03', 2, 20000, 'Bayar Di Tempat', 1, 'Cekin', '020222Q5R8n161514'),
(11, 'Agustinus Yoube', 'lagustinus211@gmail.com', '081221723872', 'agus,iksan', 1, '2022-02-04', '2022-02-06', 2, 20000, 'Bayar Di Tempat', 1, 'Cekin', '020422rvqT3075446'),
(12, 'Agustinus Yoube', 'lagustinus211@gmail.com', '081221723872', 'Gariner', 1, '2022-02-05', '2022-02-06', 1, 10000, 'Bayar Di Tempat', 0, '0', '020522UfPOX102400'),
(13, 'Agustinus Yoube', 'lagustinus211@gmail.com', '081221723872', 'Gariner', 1, '2022-02-05', '2022-02-06', 1, 10000, 'Bayar Di Tempat', 1, 'Cekin', '020522B0paw102401');

--
-- Trigger `pemesanan`
--
DELIMITER $$
CREATE TRIGGER `Batal` AFTER DELETE ON `pemesanan` FOR EACH ROW BEGIN
UPDATE tipe_room SET Stok = Stok+ OLD.jml_kamar
WHERE
id_kamar = OLD.jml_kamar;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `Stok Kamar` AFTER INSERT ON `pemesanan` FOR EACH ROW BEGIN
UPDATE
tipe_room SET Stok = Stok-NEW.jml_kamar
WHERE
id = NEW.id_kamar;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tipe_room`
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
-- Dumping data untuk tabel `tipe_room`
--

INSERT INTO `tipe_room` (`id_kamar`, `Nama_room`, `harga`, `Stok`, `onuse`, `onbook`, `img_room`) VALUES
(1, 'VIP23', 3000000, 13, 0, 0, 'https://asset.kompas.com/crops/33vZ6Rt128kzOfcC_aU3fy7oo0I=/0x36:640x463/750x500/data/photo/2020/07/10/5f081b41cc76c.jpeg'),
(2, 'Deluxe', 2000000, 10, 0, 0, 'https://asset.kompas.com/crops/33vZ6Rt128kzOfcC_aU3fy7oo0I=/0x36:640x463/750x500/data/photo/2020/07/10/5f081b41cc76c.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_login`, `username`, `password`, `Nama`, `Jenis_Kelamin`, `tgllahir`, `no_telp`, `level`) VALUES
(7, 'admin', 'admin', 'Admin', 'Laki-Laki', '0000-00-00', '081221823861', 'admin'),
(17, 'ZX', '1234', 'Oka Wardana', 'Laki-Laki', '2022-03-15', '083807602009', 'tamu'),
(18, 'oka', '123', 'Oka Wardana', 'Laki-Laki', '2022-04-11', '083807602009', 'tamu'),
(19, 'Zero', '1234', 'zero', 'Laki-Laki', '2022-04-12', '081212121', 'tamu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `f_hotel`
--
ALTER TABLE `f_hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `f_kamar`
--
ALTER TABLE `f_kamar`
  ADD PRIMARY KEY (`id_fkamar`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `id_kamar` (`id_kamar`);

--
-- Indeks untuk tabel `tipe_room`
--
ALTER TABLE `tipe_room`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `f_hotel`
--
ALTER TABLE `f_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `f_kamar`
--
ALTER TABLE `f_kamar`
  MODIFY `id_fkamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tipe_room`
--
ALTER TABLE `tipe_room`
  MODIFY `id_kamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `f_kamar`
--
ALTER TABLE `f_kamar`
  ADD CONSTRAINT `f_kamar_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_room` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_kamar`) REFERENCES `tipe_room` (`id_kamar`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
