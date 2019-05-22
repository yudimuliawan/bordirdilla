-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 07:08 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bordirdila`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryId` int(10) UNSIGNED NOT NULL,
  `categoryName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryId`, `categoryName`, `category`) VALUES
(1, 'Produk Baru', 'baru'),
(2, 'Sepatu Bordir', 'bordir'),
(3, 'Sepatu Sulam', 'sulam'),
(4, 'Selop', 'selop'),
(5, 'Sandal', 'sandal'),
(6, 'Sepatu Bordir Anak - Anak', 'anak');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(10) NOT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `kotaDistribusi` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `alamatEmail` varchar(255) DEFAULT NULL,
  `terkonfirmasi` varchar(45) DEFAULT 'belum'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `customerName`, `kotaDistribusi`, `address`, `phone`, `alamatEmail`, `terkonfirmasi`) VALUES
(0, 'Batman', 'bandung', 'jalan cicicicici', '08777656543', 'batman@mail.com', 'belum'),
(12, 'user', 'bandung', 'JalanJalan', '081111222333', 'user@gmail.com', 'belum'),
(16, 'joker', 'lampung', 'jalanpulang', '089777656543', 'joker@mail.com', 'belum');

-- --------------------------------------------------------

--
-- Table structure for table `history_pemesanan`
--

CREATE TABLE `history_pemesanan` (
  `idPemesanan` int(11) NOT NULL,
  `tanggal` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `statusPesanan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kotadistribusi`
--

CREATE TABLE `kotadistribusi` (
  `id` int(11) NOT NULL,
  `namaKota` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kotadistribusi`
--

INSERT INTO `kotadistribusi` (`id`, `namaKota`) VALUES
(1, 'aceh'),
(2, 'bandung'),
(3, 'denpasar'),
(4, 'jakarta'),
(5, 'lampung'),
(6, 'tulungagung'),
(7, 'sorong');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_04_07_060751_create_supplier_table', 1),
(2, '2018_04_07_063500_create_sells_table', 1),
(4, '2018_04_12_181621_create_user_table', 2),
(5, '2018_04_12_183141_create_category_table', 3),
(6, '2018_04_12_183958_create_product_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `idPemesanan` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `namaCustomer` varchar(255) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `totalPrice` double DEFAULT NULL,
  `promo` int(11) DEFAULT NULL,
  `buktiPembayaran` varchar(255) DEFAULT NULL,
  `size` int(10) DEFAULT NULL,
  `jenis` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT 'Kirim bukti pembayaran',
  `display` varchar(45) DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `idPemesanan`, `tanggal`, `namaCustomer`, `productId`, `productName`, `price`, `quantity`, `totalPrice`, `promo`, `buktiPembayaran`, `size`, `jenis`, `status`, `display`) VALUES
(1, '22052019102014UWGrfFTH', '2019-05-22', 'joker', 15, 'Sulam-03', 42000, 1, 42000, NULL, 'storage/image/bukti/Wbu2SDEWJBksOTmYbLO96p4ttQwyjGxJY8dO2ZBR.jpeg', 36, 'Tunai', 'Proses pembuatan', 'yes'),
(2, '22052019102014UWGrfFTH', '2019-05-22', 'joker', 11, 'Bordir-04', 89000, 1, 89000, NULL, 'storage/image/bukti/Wbu2SDEWJBksOTmYbLO96p4ttQwyjGxJY8dO2ZBR.jpeg', 37, 'Tunai', 'Proses pembuatan', 'yes'),
(3, '22052019102042fqjdW8H1', '2019-05-22', 'user', 19, 'Sandal 02', 10000, 1, 10000, NULL, 'storage/image/bukti/uVILGUTsZvH1NskQDSSZDmM3keeQeVBNytthqRwb.jpeg', 41, 'Kredit', 'Menunggu Pengiriman', 'yes'),
(4, '22052019105040x1DASMeN', '2019-05-22', 'joker', 18, 'Sandal-01', 20000, 1, 20000, NULL, 'storage/image/bukti/gX6JJecAGLOqBmuobZYulAomLUA7BRSEz8TyT46C.jpeg', 43, 'Tunai', 'Proses pembuatan', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `idPemesanan` int(11) NOT NULL,
  `totalPembayaran` double DEFAULT NULL,
  `jenisPembayaran` varchar(45) DEFAULT NULL,
  `buktiPembayaran` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_barang`
--

CREATE TABLE `pengajuan_barang` (
  `productId` int(10) NOT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `quantity` int(10) DEFAULT NULL,
  `customerId` int(10) DEFAULT NULL,
  `customerName` varchar(255) DEFAULT NULL,
  `totalQuantity` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pengiriman`
--

CREATE TABLE `pengiriman` (
  `idPemesanan` int(10) NOT NULL,
  `address` varchar(45) DEFAULT NULL,
  `ongkirPengiriman` int(11) DEFAULT NULL,
  `buktiPengiriman` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(10) UNSIGNED NOT NULL,
  `productName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `categoryId` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `price`, `quantity`, `description`, `categoryId`) VALUES
(5, 'Bordir-01', '79999', '500', 'Faaaaaa', '2'),
(6, 'Bordir-02', '120000', '150', '', '2'),
(7, 'Bordir-03', '550000', '1000', '', '2'),
(11, 'Bordir-04', '89000', '20', '', '2'),
(13, 'Sulam-01', '135000', '1225', 'aaa bbbb ccccc', '3'),
(14, 'Sulam-02', '50000', '', '', '3'),
(15, 'Sulam-03', '42000', '', '', '3'),
(16, 'Selop-01', '80000', '', '', '4'),
(17, 'Selop-02', '95000', '', '', '4'),
(18, 'Sandal-01', '20000', '', '', '5'),
(19, 'Sandal 02', '10000', '', '', '5');

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `status_pesanan`
--

CREATE TABLE `status_pesanan` (
  `idPemesanan` int(10) NOT NULL,
  `statusName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `supplierId` int(10) UNSIGNED NOT NULL,
  `supplierName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tagihan`
--

CREATE TABLE `tagihan` (
  `idTagihan` int(11) NOT NULL,
  `customerId` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `type`) VALUES
(10, 'admin', 'admin@aiub.edu', '1234', 'admin'),
(12, 'user', 'user@gmail.com', '1111', 'user'),
(13, 'accounting', 'acconting@gmail.com', '1234', 'accounting'),
(14, 'marketing', 'marketing@gmail.com', '1234', 'marketing'),
(15, 'outside', 'outside@gmail.com', '1234', 'outside'),
(16, 'joker', 'joker@mail.com', '1234', 'user'),
(18, 'Batman', 'batman@mail.com', '1234', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `history_pemesanan`
--
ALTER TABLE `history_pemesanan`
  ADD PRIMARY KEY (`idPemesanan`);

--
-- Indexes for table `kotadistribusi`
--
ALTER TABLE `kotadistribusi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`idPemesanan`);

--
-- Indexes for table `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`idPemesanan`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`);

--
-- Indexes for table `sells`
--
ALTER TABLE `sells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_pesanan`
--
ALTER TABLE `status_pesanan`
  ADD PRIMARY KEY (`idPemesanan`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`supplierId`),
  ADD UNIQUE KEY `suppliers_phone_unique` (`phone`);

--
-- Indexes for table `tagihan`
--
ALTER TABLE `tagihan`
  ADD PRIMARY KEY (`idTagihan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `history_pemesanan`
--
ALTER TABLE `history_pemesanan`
  MODIFY `idPemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kotadistribusi`
--
ALTER TABLE `kotadistribusi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `idPemesanan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengajuan_barang`
--
ALTER TABLE `pengajuan_barang`
  MODIFY `productId` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pengiriman`
--
ALTER TABLE `pengiriman`
  MODIFY `idPemesanan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `sells`
--
ALTER TABLE `sells`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `status_pesanan`
--
ALTER TABLE `status_pesanan`
  MODIFY `idPemesanan` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `supplierId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tagihan`
--
ALTER TABLE `tagihan`
  MODIFY `idTagihan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
