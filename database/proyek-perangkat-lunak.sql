-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 07:52 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek-perangkat-lunak`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `nama_ketua` varchar(55) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `pilih_gunung` varchar(55) NOT NULL,
  `pilih_jalur` varchar(55) NOT NULL,
  `tgl_pendakian` date NOT NULL,
  `kelompok_pendakian` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `username`, `nama_ketua`, `no_telp`, `pilih_gunung`, `pilih_jalur`, `tgl_pendakian`, `kelompok_pendakian`) VALUES
(22, 'guntur', 'Usama', '083128184855', 'sindoro', 'Sikatok', '2022-01-26', 'Besar (10 orang lebih)'),
(25, 'user', 'Guntur', '083128184855', 'merbabu', 'Suwanting', '2022-01-30', 'Sedang (4-9 orang)'),
(26, 'user', 'Lutfy', '083128184855', 'prau', 'Mangli Kaliangkrik', '2022-01-31', 'Besar (10 orang lebih)'),
(27, 'user', 'Lutfy', '08312819494', 'merbabu', 'Suwanting', '2022-02-05', 'Kecil (1-3 orang)'),
(28, 'user', 'Lutfy', '08312819494', 'merbabu', 'Suwanting', '2022-02-05', 'Kecil (1-3 orang)'),
(29, 'user', 'daadawd', '083128184855', 'sindoro', 'Bansari', '2022-02-04', 'Besar (10 orang lebih)'),
(30, 'user', 'Lutfy', '083128184855', 'lawu', 'Candi Ceto', '2022-02-05', 'Besar (10 orang lebih)'),
(31, 'user', 'Lutfy', '08312819494', 'sumbing', 'Mangli Kaliangkrik', '2022-02-05', 'Besar (10 orang lebih)'),
(32, 'user', 'Usama', '083128184855', 'merbabu', 'Kopen Thekelan', '2022-01-23', 'Sedang (4-9 orang)'),
(33, 'user', 'Lutfy', '083128184855', 'prau', 'Mangli Kaliangkrik', '2022-01-26', 'Besar (10 orang lebih)'),
(34, 'admin', 'Lutfy', '08312819494', 'lawu', 'Cemoro Kandang', '2021-12-30', 'Besar (10 orang lebih)'),
(35, 'admin', 'Usama', '08312819494', 'lawu', 'Cemoro Kandang', '2022-01-29', 'Sedang (4-9 orang)'),
(36, 'user', 'Usama', '083128184855', 'merbabu', 'Kopen Thekelan', '2022-01-28', 'Sedang (4-9 orang)'),
(37, '', 'dawdawdawd', '083128184855', 'prau', 'Patakbanteng', '2022-01-31', 'Besar (10 orang lebih)'),
(38, '', 'Usama', '083128184855', 'merbabu', 'Suwanting', '2022-01-19', 'Besar (10 orang lebih)'),
(39, '', 'Lutfy', '083128184855', 'sumbing', 'Bowongso', '2022-01-31', 'Besar (10 orang lebih)'),
(40, '', 'Guntur', '083128184855', 'prau', 'Patakbanteng', '2022-01-29', 'Sedang (4-9 orang)'),
(41, '', 'Verel', '083128482929', 'slamet', 'Gunung Malang', '2022-01-31', 'Kecil (1-3 orang)'),
(42, '', 'Guntur', '08312819494', 'sumbing', 'Mangli Kaliangkrik', '2022-01-12', 'Besar (10 orang lebih)');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(30, 0, 'user', 'user@gmail.com', '$2y$10$84A7W0QwGhZ5hAlM1yPObe5lX9vZWZ9h3iHbv8AEtMWsEvOjGXRKm', '2021-01-05 16:34:59'),
(33, 1, 'admin', 'admin@gmail.com', '$2y$10$RFBGKKJbp8BsQQ6YPo1UEu2IYLKkrjrpBJF4TMqsFOsCtVH9Ur8JC', '2021-01-08 03:24:18'),
(38, 0, 'gunturvx', 'guntur@gmail.com', '$2y$10$4U0IocDHWVZxyjjSeGA3I.yi76SbAU3D0YbOLMDcmA32rvNb36t5y', '2022-01-21 12:03:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
