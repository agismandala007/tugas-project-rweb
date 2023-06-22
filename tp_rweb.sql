-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2023 at 10:19 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_rweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `tipe` enum('mahasiswa','dosen') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `password`, `tipe`) VALUES
(1, 'agis@gmail.com', '123', 'mahasiswa'),
(2, 'rizki@gmail.com', '123', 'mahasiswa'),
(3, 'fidia@gmail.com', '123', 'mahasiswa'),
(8, 'tedy@email.com', '1234', 'dosen'),
(9, 'taufiq@gmail.com', '123', 'dosen'),
(10, 'supriyanto@gmail.com', '123', 'dosen');

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`id`, `nama`, `email`, `password`) VALUES
(1, 'Drs. Tedy Setiadi, M.T.', 'tedy@email.com', 1234),
(2, 'Taufiq Ismail, S.T., M.Cs.', 'taufiq@gmail.com', 123),
(3, 'Supriyanto, S.T., M.T.', 'supriyanto@gmail.com', 123);

--
-- Triggers `dosen`
--
DELIMITER $$
CREATE TRIGGER `hapus_akun_dosen` AFTER DELETE ON `dosen` FOR EACH ROW BEGIN
    DELETE FROM akun WHERE email = OLD.email AND tipe = 'dosen';
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_akun_dosen` AFTER INSERT ON `dosen` FOR EACH ROW BEGIN
    INSERT INTO akun (email, password, tipe)
    VALUES (NEW.email, NEW.password, 'dosen');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dosenPembimbing` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `email`, `dosenPembimbing`, `password`, `status`) VALUES
(4, 2000018075, 'Agis Satria Mandala', 'agis@gmail.com', 'Drs. Tedy Setiadi, M.T.', '123', 'Proses'),
(5, 2000018430, 'Muhammad Rizki Almansyah', 'rizki@gmail.com', 'Drs. Tedy Setiadi, M.T.', '123', 'Mahasiswanya Kabur'),
(7, 2000018224, 'Fidia Fajri Utami', 'fidia@gmail.com', 'Taufiq Ismail, S.T., M.Cs.', '123', '');

--
-- Triggers `mahasiswa`
--
DELIMITER $$
CREATE TRIGGER `hapus_akun_mahasiswa` AFTER DELETE ON `mahasiswa` FOR EACH ROW BEGIN
    DELETE FROM akun WHERE email = OLD.email AND tipe = 'mahasiswa';
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `tambah_akun_mahasiswa` AFTER INSERT ON `mahasiswa` FOR EACH ROW BEGIN
    INSERT INTO akun (email, password)
    VALUES (NEW.email, NEW.password, 'mahasiswa');
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dosenPembimbing` (`dosenPembimbing`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`dosenPembimbing`) REFERENCES `dosen` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
