-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 05:54 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(225) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(225) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(5) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'Sepatu All Star', 'Sepatu Merk All Star New', 'pakaian_pria', 300000, 15, 'sepatu.jpg'),
(2, 'Kamera', 'Kamera Canon EOS 700D', 'elektronik', 4500000, 7, 'kamera.jpg'),
(3, 'Samsung Galaxy A20', 'Samsung Galaxy A20 4/128GB', 'elektronik', 3500000, 30, 'hp.jpg'),
(4, 'Laptop Asus', 'Laptop Asus Ram4GB Core i3', 'elektronik', 5000000, 35, 'laptop.jpg'),
(6, 'Jam Tangan', 'Jam Merk Swiss', 'pakaian_pria', 450000, 23, 'jam_tangan.jpg'),
(8, 'Tas Jimshoney', 'Tas Wanita Terbaru', 'pakaian_wanita', 670000, 23, 'Tas-Wanita1.jpg'),
(9, 'Raket Badminton Yanex', 'Raket Badminton Terbaru', 'peralatan_olahraga', 150000, 20, 'racket_yanex.jpg'),
(10, 'Bola Baket Spalding', 'Bola Basket Terbaru', 'peralatan_olahraga', 350000, 31, 'bola_basket.jpg'),
(12, 'Gaun Cantik', 'Gaun Cantik untuk anak perempuan', 'pakaian_anak', 165000, 33, 'baju_anak.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `tgl_pesan`, `batas_bayar`) VALUES
(1, 'Tubagus M Fadillah', 'Jl. Kembang Beji No.38 Beji Depok', '2022-08-23 22:43:47', '2022-08-24 22:43:47'),
(2, 'Dliya Husnafatin', 'Jl. Mangga Jagakarsa No.57, Jakarta Selatan', '2022-08-23 22:46:56', '2022-08-24 22:46:56'),
(3, 'Sahnal Layyin Hutasuhut', 'Jl. M Ahmad Rais', '2022-08-24 10:07:19', '2022-08-25 10:07:19'),
(8, 'Zainal Arifin', 'Jl. Kukusan Beji No. 3 Depok', '2022-09-04 13:03:00', '2022-09-05 13:03:00'),
(9, 'Dewi Nur', 'Jl. Kedondong Manggis No.42 ', '2022-09-04 13:04:30', '2022-09-05 13:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(1, 1, 6, 'Jam Tangan', 1, 450000, ''),
(2, 2, 3, 'Samsung Galaxy A20', 1, 3500000, ''),
(3, 3, 3, 'Samsung Galaxy A20', 1, 3500000, ''),
(7, 8, 2, 'Kamera', 1, 4500000, ''),
(8, 9, 12, 'Gaun Cantik', 2, 165000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan penjualan` BEFORE INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
update tb_barang set stok = stok-new.jumlah where id_brg = new.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'admin', 'admin', 'admin123', 1),
(2, 'Dliya Husnafatin', 'dliya', 'dliya123', 2),
(3, 'Tubagus M Fadillah', 'tubagus', 'tubagus123', 1),
(4, 'Sahnal Layyin Hutasuhut', 'sahnal', 'sahnal123', 2),
(5, 'Habib Luqman', 'habib', 'habib123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
