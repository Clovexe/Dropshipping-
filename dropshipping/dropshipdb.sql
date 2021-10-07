-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 06:10 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dropshipdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `costumers`
--

CREATE TABLE `costumers` (
  `id` int(11) NOT NULL,
  `costumerId` int(20) NOT NULL,
  `login` varchar(100) DEFAULT NULL,
  `firstname` varchar(120) DEFAULT NULL,
  `middlename` varchar(120) DEFAULT NULL,
  `lastname` varchar(120) DEFAULT NULL,
  `fullname` varchar(7007) DEFAULT NULL,
  `age` int(4) NOT NULL DEFAULT 0,
  `birthdate` date NOT NULL DEFAULT current_timestamp(),
  `country` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `cellphoneNumber` bigint(20) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `telephone` varchar(120) NOT NULL,
  `logged` tinyint(1) NOT NULL DEFAULT 0,
  `lastLogged` date NOT NULL DEFAULT current_timestamp(),
  `lastLoggedOut` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `costumers`
--

INSERT INTO `costumers` (`id`, `costumerId`, `login`, `firstname`, `middlename`, `lastname`, `fullname`, `age`, `birthdate`, `country`, `region`, `address`, `cellphoneNumber`, `email`, `telephone`, `logged`, `lastLogged`, `lastLoggedOut`) VALUES
(1, 20210001, 'clang1', 'Clarissa Claire', 'Ocana', 'Labastida', 'Labastida,Clarissa Claire Ocana', 21, '2000-01-24', 'Philippines', 'NCR', '123 Tejeron St, Malakas, Basta Manila, Manila', 9972962905, 'clarissaclaire@gmail.com', '000000', 0, '2021-09-18', '2021-09-18'),
(2, 20210002, 'Marites', 'Marites', 'Mare Etes', 'Mang', 'Mang,Marites Mare Etes', 21, '2000-01-24', 'Philippines', 'NCR', '123 Tejeron St, Malakas, Basta Manila, Manila', 99729629, 'clarissaclaire@gmail.com', '000000', 0, '2021-09-18', '2021-09-18'),
(4, 20210003, 'clang2', 'Clarissa Claire', 'Ocana', 'Labastida', 'Labastida,Clarissa Mae Ocana', 21, '2000-01-24', 'Philippines', 'NCR', '123 Tejeron St, Malakas, Basta Manila, Manila', 9972962905, 'clarissaclaire@gmail.com', '000000', 0, '2021-09-18', '2021-09-18'),
(5, 20210004, 'clang3', 'Alarissa Claire', 'Ocana', 'Labastida', 'Labastida,Alarissa Claire Ocana', 21, '2000-01-24', 'Philippines', 'NCR', '123 Tejeron St, Malakas, Basta Manila, Manila', 9972962905, 'clarissaclaire@gmail.com', '000000', 0, '2021-09-18', '2021-09-18'),
(6, 20210006, 'Kalamares', 'Karites', 'Kare Etes', 'Kang', 'Kang,Karites Kare Etes', 21, '2000-01-24', 'Philippines', 'NCR', '123 Tejeron St, Malakas, Basta Manila, Manila', 99729629, 'clarissaclaire@gmail.com', '000000', 0, '2021-09-18', '2021-09-18'),
(7, 20210007, 'Awit', 'Lars Mango', 'Ocana', 'Iced', 'Iced, Lars Mango Ocana', 21, '2000-01-24', 'Philippines', 'NCR', '123 Tejeron St, Malakas, Basta Manila, Manila', 9972962905, 'clarissaclaire@gmail.com', '000000', 0, '2021-09-18', '2021-09-18'),
(9, 20210008, 'powerrangers', 'Power', 'Rangers', 'Super', 'Super,Power Rangers', 21, '2000-01-24', 'Philippines', 'NCR', '123 Tejeron St, Malakas, Basta Manila, Manila', 9972962905, 'clarissaclaire@gmail.com', '000000', 0, '2021-09-18', '2021-09-18');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `idproducts` int(11) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  `price` double UNSIGNED NOT NULL DEFAULT 0,
  `number` bigint(20) NOT NULL DEFAULT 0,
  `available` binary(1) NOT NULL DEFAULT '0',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `file_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`idproducts`, `name`, `brand`, `type`, `price`, `number`, `available`, `created_on`, `updated_on`, `file_path`) VALUES
(1, 'jacket blaze', 'H&M', 3, 100, 20, 0x31, '2021-07-28 00:26:45', '2021-07-28 00:26:45', '1.jpg'),
(2, 'shirt blaze', 'Nike', 3, 100, 20, 0x31, '2021-07-28 00:27:38', '2021-07-28 00:27:38', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `test_user`
--

CREATE TABLE `test_user` (
  `idtest_user` int(11) NOT NULL,
  `login` varchar(45) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(18) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `about` varchar(1000) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_on_copy1` timestamp NOT NULL DEFAULT current_timestamp(),
  `online` binary(1) DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_user`
--

INSERT INTO `test_user` (`idtest_user`, `login`, `name`, `password`, `email`, `contact`, `about`, `created_on`, `created_on_copy1`, `online`, `last_login`) VALUES
(1, 'clareng123', 'Clarissa Claire Labastida', '123456789', 'clarissa@gmail.com', 997295, 'hello', '2021-07-30 05:15:50', '2021-07-30 05:15:50', NULL, NULL),
(2, 'drai', 'Draillim Xaviery Valonzo', '123456789', 'draillim@gmail.com', 997295, 'hello', '2021-07-30 05:16:37', '2021-07-30 05:16:37', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `costumers`
--
ALTER TABLE `costumers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `COSTUMERID` (`costumerId`),
  ADD UNIQUE KEY `LOGIN` (`login`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`idproducts`);

--
-- Indexes for table `test_user`
--
ALTER TABLE `test_user`
  ADD PRIMARY KEY (`idtest_user`),
  ADD UNIQUE KEY `login_UNIQUE` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `costumers`
--
ALTER TABLE `costumers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `idproducts` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `test_user`
--
ALTER TABLE `test_user`
  MODIFY `idtest_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
