-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2023 at 04:59 AM
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
-- Database: `snap`
--

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_confirm` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `numOfPeople` int(11) NOT NULL,
  `background` enum('Blue','Brown','White') NOT NULL,
  `paket` enum('Weekdays','Weekend','Promo') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_confirm`, `name`, `email`, `phone`, `instagram`, `numOfPeople`, `background`, `paket`) VALUES
(1, 'rahel tiona gracella simanjuntak', 'rahel@gmail.com', '081775284771', 'gracella._r', 2, 'Brown', 'Weekdays'),
(2, 'aditya rahmatdiyansyah', 'adit@gmail.com', '08233966056', 'randyaadt', 2, 'Blue', 'Weekdays'),
(3, 'risfanda audiarrahman c', 'risfanda@gmail.com', '085338966734', 'ifanrisfanda_', 2, 'Brown', 'Weekend'),
(9, '', '', '', '', 0, '', ''),
(10, '', '', '', '', 0, '', ''),
(11, '', '', '', '', 0, '', ''),
(12, '', '', '', '', 0, '', ''),
(13, '', '', '', '', 0, '', ''),
(14, '', '', '', '', 0, '', ''),
(15, '', '', '', '', 0, '', ''),
(16, '', '', '', '', 0, '', ''),
(17, 'rahel tiona gracella simanjuntak', 'rahel@gmail.com', '081775284771', 'gracella._r', 2, 'Blue', 'Weekdays'),
(18, '', '', '', '', 0, '', ''),
(19, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 2, 'Blue', 'Weekdays'),
(20, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 2, 'Blue', 'Weekdays'),
(21, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 2, 'Brown', 'Weekdays'),
(22, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 2, 'Brown', 'Weekdays'),
(23, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 2, 'White', 'Promo'),
(24, 'nazmi wardiani', 'nabila@gmail.com', '081991916331', 'nazmiwardiani', 2, 'Brown', 'Weekend'),
(25, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'nazmiwardiani', 1, 'Blue', 'Weekdays'),
(26, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 2, 'Blue', 'Weekend'),
(27, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 2, 'Blue', 'Weekend'),
(28, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 2, 'Blue', 'Weekend'),
(29, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 3, 'Blue', 'Weekend'),
(30, 'nabila ummul husna', 'afiqachu23@gmail.com', '081991916331', 'beee24__', 5, 'Blue', 'Promo'),
(31, '', '', '', '', 0, '', ''),
(32, 'fairuz hanifah', 'billa2405@gmail.com', '081987654321', 'fairuzzhanifah', 5, 'Brown', 'Weekdays'),
(33, '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `number` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `username`, `email`, `number`, `password`) VALUES
(1, 'fairuz', 'fairuzhanifah@gmail.com', '081234567890', '123'),
(2, 'nabila', 'nabila24@gmail.com', '081991916331', 'lala123'),
(3, 'nazmi', 'nazmi@gmail.com', '081987654321', 'amiami'),
(14, 'lalaaa', 'lala123@gmail.com', '081942916170', '01234'),
(15, 'shafa', 'shafa.io@gmail.com', '085987654287', 'shafa01'),
(16, 'fiqa_23', 'afiqah@gmail.com', '087963532977', 'fiqachu'),
(17, 'juanri', 'juanri@gmail.com', '082837456834', 'juan'),
(18, 'gita_mlnd', 'gitamailand@gmail.com', '081907977994', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_confirm`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_confirm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
