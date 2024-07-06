-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 05:25 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cto`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `des`, `image`) VALUES
(1, 'colombo', 'This is colombo', 'ganga.jpg'),
(2, 'Anuradhapura', 'This is Anuradhapura', 'Anuradhapura.jpeg'),
(3, 'Kagella', 'this is kagalla', 'bg_4.jpg'),
(5, 'Kekirawa', 'Best plase', 'hambanthota.jpg'),
(6, 'BAMBALAPITIYA', 'This is colombo', 'image_2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id`, `username`, `password`, `email`, `create_at`) VALUES
(1, 'Imesh', '$2y$10$QMR62xqMm0Z84e/ua2LO6uNkhvr3.4Nj4unBgSVOUPsRgn5pEzxr.', 'imeshekanayaka113@gmail.com', '2023-08-11 09:51:14'),
(2, 'isuru', '$2y$10$6qrBBTST7OSZQaJAgUO3sei2jEjjCUW73I2b3E82zqnfLoB9Yhoe2', 'isuru9761@gmail.com', '2023-08-12 08:53:11'),
(3, 'hiruna ', '$2y$10$s46rSV/eaq3KqasaR/vwluJMgWIwJcoiFNTW97OKgP76USnU4Pjae', 'hirunakanimnaka10@gmail.com', '2023-08-13 12:56:31'),
(4, 'dushan', '$2y$10$qUc11NLSnF4lyN.luX1gveCMRpTnnQZr0iCwcTOKuIWx8nyzR1f8S', 'dushanmalinga999@gmail.com', '2023-08-14 12:47:05'),
(5, 'ishara', '$2y$10$Qgt81Udp1OV1dVWcuNlLt.ArF.tq13fyTvEU2oZde.WpQlHyqLr.K', 'warface23058@gmail.com', '2023-08-16 17:01:57'),
(6, 'hiru', '$2y$10$2vU1wbbfQn8.yTuEczcsVuV77D3Px/RLml7JbHCIzJRc8eOptJJZG', 'warface239@gmail.com', '2023-08-16 17:02:48'),
(7, 'senesh', '$2y$10$QAE39YCxWJhHw/cLTimqhOAohGahhl7zzPFzz1ONj3t/.J7aSokxK', 'seneshdilshan98@gmail.com', '2023-08-20 10:24:12'),
(8, 'kanishka', '$2y$10$F1v39bX8ITANFz8QiaNfwO/k8Tu.nuTcfZjypLCNm2pBebi51U.Pm', 'kanishka12@gmail.com', '2023-08-21 11:27:23'),
(9, 'gihan', '$2y$10$XhgPr75EDiXLjm25pYEcX.9ZSTdTis/S1xJFO.j4zNnC1X2M5itYG', 'gihan@123.gmail.com', '2023-09-04 03:51:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
