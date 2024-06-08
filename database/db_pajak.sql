-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2024 at 03:17 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pajak`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `email`, `username`, `password`) VALUES
(16, 'ramdhan@nigga.com', 'ramdhan', '$2y$10$Aaa0vVQhHQBSTYZV6NBv5eDTGB1n3J1XLkZ4h5ftv85REBwSVM7p.'),
(17, 'ridhosyahbanaputra@gmail.com', 'ridho syahbana putra', '$2y$10$LjR8wNl2oHH0JSEmjYwS7O3H6KQc9ugK.A2Qc/ekROlSDlVmbP3yS'),
(18, 'nabilaika13@gmail.com', 'nabila cantik', '$2y$10$Vq9My83jtf6/CwJGIuOB/Ofs0l0t4.12pdYlJ/b92J8tu7BfDcfLm');

-- --------------------------------------------------------

--
-- Table structure for table `biliings`
--

CREATE TABLE `biliings` (
  `id_billings` int NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `jenis_pajak` varchar(50) NOT NULL,
  `jenis_pembayaran` varchar(50) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biliings`
--

INSERT INTO `biliings` (`id_billings`, `nama`, `tanggal_pembayaran`, `jenis_pajak`, `jenis_pembayaran`, `total`) VALUES
(7, 'Ridho Syahbana Putra', '2024-06-04', 'Bangunan', 'transfer', '100000000'),
(10, 'admin', '2024-06-05', 'Bangunan', 'Virtual Account', '100000000000'),
(11, 'Ridho Syahbana Putra', '2024-06-05', 'Kendaraan', 'ovo', '854665666565623');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int NOT NULL,
  `npwp` varchar(16) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_usaha` varchar(50) NOT NULL,
  `jenis_pajak` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `no_tlpn` varchar(13) NOT NULL,
  `tanggal` date NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `npwp`, `nama`, `jenis_usaha`, `jenis_pajak`, `alamat`, `no_tlpn`, `tanggal`, `total`) VALUES
(30, '22315152584', 'Ridho', 'Rental mobil', 'Kendaraan', 'Malang', '08512541241', '2024-05-30', '50000000'),
(31, '115155165164', 'gustomo duta ramdhani', 'Sorum Pesawat', 'Kendaraan', 'Surabaya', '081515455525', '2024-05-08', '100000000'),
(32, '1414656516532', 'Ridho Syahbana Putra', 'Rental Pacar', 'Bangunan', 'Jl Polowijen II ,No 467E, kec. Blimbing, Kel. Purwantoro, Kota Malang', '081549729319', '2024-06-01', '100000000'),
(33, '990412', 'dian', 'warung ', 'Bangunan', 'jalan letdjen s.parman gang 6 nomor 17D', '0859554272270', '1981-03-28', '1000000000'),
(34, '646546', 'Bagas', 'mmm', 'Bangunan', 'mmcmcmc', '551515', '2024-06-01', '100000000'),
(35, '646546', 'Bagas', 'mmm', 'Bangunan', 'mmcmcmc', '551515', '2024-06-01', '20000000000'),
(36, '989898', 'Nabila ika nugraha', 'Toko miras', 'Bangunan', 'lesandpuro', '0845623146', '2024-06-01', '100000000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`password`);

--
-- Indexes for table `biliings`
--
ALTER TABLE `biliings`
  ADD PRIMARY KEY (`id_billings`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `biliings`
--
ALTER TABLE `biliings`
  MODIFY `id_billings` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
