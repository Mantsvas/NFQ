-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2018 at 06:00 PM
-- Server version: 10.0.36-MariaDB
-- PHP Version: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lolztk_nfq`
--
CREATE DATABASE IF NOT EXISTS `lolztk_nfq` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `lolztk_nfq`;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total_price` decimal(13,2) NOT NULL,
  `adress` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `customer_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `order_date` date NOT NULL,
  `status` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL DEFAULT 'Vykdomas',
  `customer_last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `customer_email` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `quantity`, `total_price`, `adress`, `city`, `customer_name`, `order_date`, `status`, `customer_last_name`, `customer_email`) VALUES
(54, 1, 4, '568.80', 'Kovo 11-osios g. 12', 'Vilnius', 'Rokas', '2018-08-14', 'Įvykdytas', 'Ažubalis', 'Rokas@gmail.com'),
(55, 1, 1, '142.20', 'S.Nėries g. 55', 'Kaunas', 'Darius', '2018-08-17', 'Įvykdytas', 'Katkus', 'Dar@gmail.com'),
(56, 1, 12, '1706.40', 'S.Nėries g. 55', 'Vilnius', 'Vidas', '2018-08-17', 'Įvykdytas', 'Butrimas', 'vidas@gmail.com'),
(57, 1, 6, '853.20', 'Belgų g. 7', 'Plungė', 'Mantas', '2018-08-18', 'Įvykdytas', 'Jurkus', 'mantas@inbox.lt'),
(58, 1, 4, '568.80', 'Verkių g. 10', 'Marijampolė', 'Dainius', '2018-08-18', 'Įvykdytas', 'Yla', 'Da@gmail.com'),
(59, 1, 4, '568.80', 'Verkių g. 10', 'Šiauliai', 'Raimondas', '2018-08-20', 'Įvykdytas', 'Rimkus', 'raimondas@gmail.com'),
(60, 1, 18, '2559.60', 'Birutės g. 18', 'Varėna', 'Marius', '2018-08-20', 'Įvykdytas', 'Šima', 'msima@gmail.com'),
(61, 1, 10, '1422.00', 'Silvijos g. 18', 'Telšiai', 'Tautvydas', '2018-08-20', 'Įvykdytas', 'Obuolys', 'to@gmail.com'),
(62, 1, 8, '1137.60', 'Rietavo g. 18', 'Plungė', 'Aurimas', '2018-08-22', 'Įvykdytas', 'Kalnas', 'A.Kalnas@gmail.com'),
(63, 1, 7, '995.40', 'Verkių g. 20', 'Klaipėda', 'Danielius', '2018-08-22', 'Įvykdytas', 'Bartuška', 'aba@gmail.com'),
(64, 1, 4, '568.80', 'Perkunkiemio g. 64', 'Vilnius', 'Lina', '2018-08-22', 'Įvykdytas', 'Mizgerytė', 'lina@gmail.com'),
(65, 1, 7, '995.40', 'Klevų g. 64-52', 'Telšiai', 'Tomas', '2018-08-22', 'Įvykdytas', 'Aurys', 'taurys@gmail.com'),
(66, 1, 18, '2559.60', 'S.Nėries g. 44', 'Tauragė', 'Romas', '2018-08-23', 'Įvykdytas', 'Šilvys', 'Romas.s@gmail.com'),
(67, 1, 17, '2417.40', 'S.Nėries g. 40', 'Tauragė', 'Rimas', '2018-08-25', 'Įvykdytas', 'Rimkus', 'Rimas@gmail.com'),
(68, 1, 10, '1422.00', 'S.Nėries g. 40', 'Tauragė', 'Rimas', '2018-08-25', 'Įvykdytas', 'Rimkus', 'Rimas@gmail.com'),
(69, 1, 4, '568.80', 'S.Nėries g. 33', 'Plungė', 'Vidas', '2018-08-25', 'Įvykdytas', 'Bartuška', 'Rimas@gmail.com'),
(70, 1, 4, '568.80', 'Stoties g. 18', 'Alytus', 'Edgaras', '2018-08-27', 'Įvykdytas', 'Kuolys', 'Ekuolys@gmail.com'),
(71, 1, 8, '1137.60', 'Stoties g. 18', 'Alytus', 'Edgaras', '2018-08-29', 'Įvykdytas', 'Kuolys', 'Ekuolys@gmail.com'),
(72, 1, 6, '853.20', 'Žalgirio g. 18', 'Naujoji Akmenė', 'Tomas', '2018-08-30', 'Įvykdytas', 'Karnišovas', 'tkar@gmail.com'),
(73, 1, 4, '568.80', 'Ryto g. 18', 'Zarasai', 'Danielius', '2018-09-01', 'Įvykdytas', 'Guoga', 'guoga@gmail.com'),
(74, 1, 8, '1137.60', 'Vokiečių g. 18', 'Marijampolė', 'Filipas', '2018-09-01', 'Vykdomas', 'Kirkilas', 'kirkilas@gmail.com'),
(75, 1, 6, '853.20', 'Uosių g. 19', 'Panevėžys', 'Edgaras', '2018-09-06', 'Įvykdytas', 'Kulba', 'Ekulba@gmail.com'),
(76, 1, 3, '426.60', 'Sienos g. 18', 'Kaunas', 'Skirmantas', '2018-09-06', 'Įvykdytas', 'Žilinskas', 'skir@gmail.com'),
(77, 1, 12, '1706.40', 'Petrų g. 14', 'Kaunas', 'Petras', '2018-09-09', 'Vykdomas', 'Petraitis', 'petras@gmail.com'),
(78, 1, 10, '1422.00', 'Kauno g. 16', 'Vilnius', 'Arvydas', '2018-09-09', 'Įvykdytas', 'Šimašius', 'sim@gmail.com'),
(79, 1, 18, '2559.60', 'Kauno g. 16', 'Kaunas', 'Tomas', '2018-09-08', 'Vykdomas', 'Lukauskas', 'luka@gmail.com'),
(80, 1, 10, '1422.00', 'Ozo g. 2', 'Vilnius', 'Rimantas', '2018-09-10', 'Įvykdytas', 'Rima', 'rima@gmail.com'),
(81, 1, 4, '568.80', 'Minijos g. 18', 'Klaipėda', 'Vladas', '2018-09-10', 'Vykdomas', 'Kuršius', 'vladas@gmail.com'),
(82, 1, 18, '2559.60', 'Jurininkų g. 26', 'Klaipėda', 'Nerijus', '2018-09-10', 'Įvykdytas', 'Ažubalis', 'nazu@gmail.com'),
(83, 1, 12, '1706.40', 'Pajūrio g. 12', 'Vilnius', 'Darius', '2018-09-10', 'Vykdomas', 'Užkalnis', 'Darius@gmail.com'),
(84, 1, 6, '853.20', 'Romų g. 18', 'Kaunas', 'Rokas', '2018-09-11', 'Vykdomas', 'Žebrauskas', 'zebrau@gmail.com'),
(85, 1, 6, '853.20', 'Naikupės g. 18', 'Klaipėda', 'Mindaugas', '2018-09-11', 'Įvykdytas', 'Katkus', 'mindas@gmail.com'),
(86, 1, 19, '2701.80', 'Naikupės g. 25', 'Klaipėda', 'Audrius', '2018-09-11', 'Vykdomas', 'Audra', 'audra@gmail.com'),
(87, 1, 10, '1422.00', 'Elfų g. 16', 'Mažeikiai', 'Edgaras', '2018-09-12', 'Vykdomas', 'Kuzma', 'kuzma@gmail.com'),
(88, 1, 4, '568.80', 'Uosto g. 16', 'Utena', 'Andrius', '2018-09-12', 'Vykdomas', 'Giedraitis', 'giedra@gmail.com'),
(89, 1, 6, '853.20', 'Uosto g. 19', 'Utena', 'Vytautas', '2018-09-12', 'Įvykdytas', 'Butkus', 'vb@gmail.com'),
(90, 1, 18, '2559.60', 'Pakalnio g. 18', 'Kaunas', 'Deividas', '2018-09-12', 'Vykdomas', 'Šukys', 'sukys@gmail.com'),
(91, 1, 10, '1422.00', 'Pakalnio g. 18', 'Kaunas', 'Deividas', '2018-09-13', 'Įvykdytas', 'Šukys', 'sukys@gmail.com'),
(92, 1, 16, '2275.20', 'Pakalnio g. 18', 'Kaunas', 'Deividas', '2018-09-14', 'Įvykdytas', 'Šukys', 'sukys@gmail.com'),
(93, 1, 12, '1706.40', 'Pakalnio g. 18', 'Kaunas', 'Deividas', '2018-09-14', 'Vykdomas', 'Šukys', 'sukys@gmail.com'),
(94, 1, 4, '568.80', 'Minijos g. 17', 'Klaipėda', 'Vidas', '2018-09-14', 'Vykdomas', 'Kontrimas', 'ViKo@gmail.com'),
(95, 1, 4, '568.80', 'Minijos g. 17', 'Klaipėda', 'Vidas', '2018-09-14', 'Įvykdytas', 'Kontrimas', 'ViKo@gmail.com'),
(96, 1, 8, '1137.60', 'Minijos g. 17', 'Klaipėda', 'Vidas', '2018-09-14', 'Įvykdytas', 'Kontrimas', 'ViKo@gmail.com'),
(97, 1, 4, '568.80', 'Lenkijos g. 16', 'Vilnius', 'Valentas', '2018-09-15', 'Vykdomas', 'Karlas', 'karl@gmail.com'),
(98, 1, 7, '995.40', 'Lenkijos g. 16', 'Vilnius', 'Valentas', '2018-09-15', 'Vykdomas', 'Karlas', 'karl@gmail.com'),
(99, 1, 4, '568.80', 'Taikos g 18', 'Klaipėda', 'Karolis', '2018-09-15', 'Įvykdytas', 'Skrinskas', 'karol@gmail.com'),
(100, 1, 7, '995.40', 'Taikos g 18', 'Klaipėda', 'Karolis', '2018-09-15', 'Vykdomas', 'Skrinskas', 'karol@gmail.com'),
(101, 1, 7, '995.40', 'Tikėjimo g. 18', 'Kupiškis', 'Saulius', '2018-09-15', 'Įvykdytas', 'Sapa', 'saulius@gmail.com'),
(102, 1, 4, '568.80', 'Tikėjimo g. 18', 'Kupiškis', 'Saulius', '2018-09-16', 'Įvykdytas', 'Sapa', 'saulius@gmail.com'),
(103, 1, 4, '568.80', 'Alytaus g. 10', 'Marijampolė', 'Arminas', '2018-09-16', 'Vykdomas', 'Kandys', 'arma@gmail.com'),
(104, 1, 8, '1137.60', 'Alytaus g. 10', 'Marijampolė', 'Arminas', '2018-09-16', 'Vykdomas', 'Kandys', 'arma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `price` decimal(13,2) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `image`, `price`) VALUES
(1, 'MOMO MASSIMO MATT BL', 'R17 / 5 / 114.30', 'public/img/ratlankis.jpg', '142.20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `quantity` (`quantity`),
  ADD KEY `adress` (`adress`),
  ADD KEY `city` (`city`),
  ADD KEY `customer_name` (`customer_name`),
  ADD KEY `order_date` (`order_date`),
  ADD KEY `customer_last_name` (`customer_last_name`),
  ADD KEY `customer_email` (`customer_email`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
