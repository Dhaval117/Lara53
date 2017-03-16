-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2017 at 03:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `Cart_ID` int(11) NOT NULL,
  `Item_Name` varchar(255) NOT NULL,
  `Item_Price` int(11) NOT NULL,
  `Item_Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`Cart_ID`, `Item_Name`, `Item_Price`, `Item_Quantity`) VALUES
(1, 'Puff', 18, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_ID` int(10) UNSIGNED NOT NULL,
  `Item_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Item_Price` int(11) NOT NULL,
  `Item_Ingredients` text COLLATE utf8_unicode_ci NOT NULL,
  `Item_Description` text COLLATE utf8_unicode_ci NOT NULL,
  `Availability` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`Item_ID`, `Item_Name`, `Item_Price`, `Item_Ingredients`, `Item_Description`, `Availability`, `created_at`, `updated_at`) VALUES
(1, 'Dabeli', 20, 'Bread, Peanuts, Masala', 'Tasty and Yummy', 24, NULL, NULL),
(2, 'Vadapav', 20, 'Bread, Vadu, Masala', 'Spicy and Yummy', 16, NULL, NULL),
(3, 'Cheese Slice', 25, 'Cheese, Bread', 'Healthy and Tasty', 17, NULL, NULL),
(5, 'Jam Slice', 15, 'Bread, Jam, Butter', 'Yummy', 16, NULL, NULL),
(6, 'Puff', 18, 'Khari, Masala', 'SPicy and Yummy', 12, NULL, NULL),
(7, 'Pizza', 200, 'Cheese, Bread, Onion, Olives, Capsicum', 'Yummy and Cheesy', 7, NULL, NULL),
(8, 'Aloo Tikki Burger', 35, 'Mashed Potatoes, Bun, Vegetables ', 'Tasty and Healthy', 9, NULL, NULL),
(9, 'Butter Slice', 15, 'Butter, Bread', 'Tasty and Healthy', 20, NULL, NULL);

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
(23, '2014_10_12_000000_create_users_table', 1),
(24, '2014_10_12_100000_create_password_resets_table', 1),
(25, '2017_01_22_173322_create_items_table', 1),
(26, '2017_03_03_090330_create_orders_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_ID` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `Item_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Item_Price` int(11) NOT NULL,
  `Quantity` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Order_ID`, `Item_Name`, `Item_Price`, `Quantity`, `Total`) VALUES
('abc', 'Puff', 18, '1', 18),
('abc', 'Jam Slice', 15, '1', 15),
('def', 'Puff', 18, '2', 36),
('def', 'Vadapav', 20, '2', 40),
('ghi', 'Aloo Tikki Burger', 35, '3', 105);

-- --------------------------------------------------------

--
-- Table structure for table `passwords`
--

CREATE TABLE `passwords` (
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passwords`
--

INSERT INTO `passwords` (`password`) VALUES
('abc'),
('def'),
('abc'),
('ghi'),
('jkl');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Camilla Hahn', 'arunte@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'fUh3fG89PM', '2017-01-22 14:57:43', '2017-01-22 14:57:43'),
(2, 'Cassidy Swaniawski', 'ottis.sawayn@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'Eev7xdvckX', '2017-01-22 14:57:43', '2017-01-22 14:57:43'),
(3, 'Olaf Schroeder', 'brown.mac@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'FSNXSdAQO6nAcqZND7tkxG1hFKopbTxTsxyE3hnVxx4wqjmistDqRLJ8npAi', '2017-01-22 14:57:44', '2017-03-16 01:00:30'),
(4, 'Bulah Ryan', 'emory80@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '4S8TmDYWjD', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(5, 'Celia Larson', 'qgislason@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '4WMwXkcObw', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(6, 'Jeramie Goyette', 'wiza.ernesto@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'JT0WKoTmxy', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(7, 'Jovan Hoeger', 'mallie.crooks@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'LiUeXWHRPN', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(8, 'Lizeth Morissette', 'jose67@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '4QKHCpaqAH', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(9, 'Lyric McLaughlin', 'ureichel@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'iFnYV9MuVG', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(10, 'Jermey Beer', 'ryann.feil@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'P1wSS9NzNp', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(11, 'Presley Heaney MD', 'anne.mosciski@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'V73fO3k7b2', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(12, 'Phyllis Keebler', 'marks.tommie@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'QvdswMQ6MW', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(13, 'Aurelio Kerluke', 'ledner.lorine@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'qRq94E8zCQ', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(14, 'Mrs. Hilma Mann PhD', 'klocko.minnie@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'PrvpBtfy32', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(15, 'Colin Waelchi', 'murphy.kip@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '98FKsvONn4', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(16, 'Rosamond Pouros PhD', 'estevan.altenwerth@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '6PdXTCZbsF', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(17, 'Dr. Emiliano Skiles', 'leuschke.darion@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'BeOOCYUCfo', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(18, 'Stuart White', 'gorczany.lloyd@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'TZuESXf8wH', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(19, 'Bennie Reinger V', 'reinger.marilou@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'MqWiu5mBVL', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(20, 'Adele King I', 'dubuque.kiarra@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'krLUgFPGwt', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(21, 'Ms. Lenora Fisher IV', 'maybell97@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'rpiw2k6sqn', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(22, 'Maximo Langworth', 'hallie.shanahan@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'cDNXVA0cfr', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(23, 'Darrin Lebsack', 'bobbie.rodriguez@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'lKCnkihxMT', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(24, 'Jalyn Lynch', 'stacy.stark@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '6wtPvbQHCa', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(25, 'Efrain Thompson', 'ritchie.carmela@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'yy3us3NEjm', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(26, 'Kimberly Aufderhar V', 'sratke@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'XqPKil6k3Y', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(27, 'Easton Boehm', 'wisoky.rowena@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'RFCDEkEAG1', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(28, 'Patience Predovic II', 'ycasper@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'zLBnI4XuSd', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(29, 'Prof. Gianni Murazik', 'wilton.altenwerth@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'OUW9FnvXTL', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(30, 'Parker Brekke', 'elroy02@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '0Mg3gkyiTs', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(31, 'Dr. Gilberto McKenzie PhD', 'keshaun06@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'kY4M5ODpiL', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(32, 'Alexandria Feest', 'yesenia97@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'QTIrfmxiPg', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(33, 'Prof. Deshawn Kozey', 'wkunde@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '89tTukb3Uy', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(34, 'Pascale Hermiston', 'ayden54@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'hUdkiRsX14', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(35, 'Prof. Alden Quigley', 'patsy36@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'mBBBpUjLJ1', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(36, 'Ezra Kuhlman', 'cruickshank.adah@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'szPJFNAT5b', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(37, 'Adam Kreiger', 'bwatsica@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'YvQF8NmQ0y', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(38, 'Hubert Johnston PhD', 'stracke.jennyfer@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'vVftDvMeMg', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(39, 'Colton Cole V', 'aufderhar.sarai@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'Ha5PHPsxuE', '2017-01-22 14:57:44', '2017-01-22 14:57:44'),
(40, 'Miss Dominique Maggio III', 'esta.goodwin@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'm85JMwVnPM', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(41, 'Skylar Brown', 'collins.ruthie@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'eyJ1DMJHIR', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(42, 'Alfonso Jacobs', 'gcremin@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'bUGLhOva2Q', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(43, 'Evans Gerhold', 'nbuckridge@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'ltQifTrd5e', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(44, 'Meghan Walker', 'tressa37@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'WkY8hBNE6t', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(45, 'Bart Kirlin', 'ebba45@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'o9ztBBJAWU', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(46, 'Adele Auer IV', 'spagac@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'Wz2dCg7waO', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(47, 'Imani Gutkowski', 'cremin.natasha@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'NAI9Zd3KpO', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(48, 'Prof. Alessia Rippin V', 'czulauf@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'LrEGJUi6Qo', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(49, 'Hoyt Hammes DVM', 'xboehm@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'rt19zF9Bxb', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(50, 'Laverne Schamberger Jr.', 'ezequiel.connelly@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'k5LR8LwQ7n', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(51, 'Ezekiel King', 'runolfsson.kristina@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'xgNtjJNugO', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(52, 'Loraine Hudson II', 'jherzog@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'DPBwIdcFEs', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(53, 'Nels Schamberger DVM', 'casper.dale@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'vxbsaLHvAw', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(54, 'Miss Leilani Davis Jr.', 'nettie94@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '1N7vov3Vgu', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(55, 'Chanel Dickens', 'block.jacklyn@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'jQMQiMwfbC', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(56, 'Rachel Bosco', 'lamar.luettgen@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'hKXccggBSV', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(57, 'Kellen Kozey PhD', 'spinka.liliana@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'Qqeta3lcPG', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(58, 'Eloisa Lindgren', 'enos.halvorson@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'CXTO7Dm9DA', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(59, 'Vida Roob', 'harmon64@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'WhH9hBNRTG', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(60, 'Alta Runolfsson', 'willms.mallie@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'lMjWv1jxTO', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(61, 'Cheyenne Monahan', 'kautzer.alexandra@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'JVww9ZtLZ8', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(62, 'Kody Cole', 'marlon.rutherford@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'riCOggTAoE', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(63, 'Dr. Kathryne Doyle', 'jameson62@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '81wgfwO5qp', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(64, 'Rae Kilback', 'brekke.jerrod@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'wuCO1n9DOI', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(65, 'Tyreek Pacocha', 'letitia01@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '77A1JRyIRe', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(66, 'Sabrina Quitzon', 'rodrigo07@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'SEsERvLOd1', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(67, 'Marques Becker Sr.', 'dimitri.schamberger@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'YgKFMYbfhn', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(68, 'Kailyn Thiel', 'lilla75@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'qEstyZi3m8', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(69, 'Seamus Flatley', 'keebler.priscilla@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'ZKbig1zrOY', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(70, 'Mabelle Herman', 'damaris40@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'aCUfjOGnxI', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(71, 'Thomas Ullrich', 'vivien.mitchell@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'mc4xKwAa9w', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(72, 'Prof. Carlie Gutmann I', 'zoie78@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'N2QP2jTvh6', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(73, 'Cleve Rippin', 'hermann.kip@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'Xmmkb5bbXG', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(74, 'Jamaal Johnston', 'bertrand.schimmel@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'gRKCyWatXO', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(75, 'Ms. Aiyana Veum', 'sipes.gerald@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'snZ3EPaSi6', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(76, 'Gregoria Connelly', 'darrion25@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '4BE9plFY1X', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(77, 'Elva Ferry', 'sbosco@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'iZRNW9zUb7', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(78, 'Dr. Kailey Weber', 'shayes@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'bRBaD9gl4r', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(79, 'Jan Leffler', 'wunsch.mabelle@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'o8lBEEjPZ7', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(80, 'Brown Walker IV', 'emerald.wiegand@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '6J2wKYmPva', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(81, 'Emmanuelle Williamson IV', 'elvis.beahan@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'BRiOaBAlpa', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(82, 'Tomas Crooks', 'cummerata.kaela@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'bawMRtP0m5', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(83, 'Ms. Leilani Abbott I', 'kelsie.terry@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '3gNn8K1sBe', '2017-01-22 14:57:45', '2017-01-22 14:57:45'),
(84, 'Carmine Gleichner', 'allie.ferry@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '6OHSqx7I51', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(85, 'Amya Howe', 'arnaldo.gerhold@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'H1bb34L1X8', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(86, 'Mellie Mraz', 'jokon@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'UOdazDWOuC', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(87, 'Monique Lang', 'ijohns@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'CAclXl3WCV', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(88, 'Miss Rachelle Hermann III', 'klocko.susie@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'ehJUmP9ayC', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(89, 'Guido Trantow', 'kaylie45@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'vnvMWxtexD', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(90, 'Prof. Agustina Boyle', 'uriah49@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'p3kYkqUGoh', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(91, 'Brody Littel', 'kdonnelly@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'MovAtUBLJN', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(92, 'Ollie Abbott', 'aaron.treutel@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'RFozh2143l', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(93, 'Madie Greenholt', 'nsauer@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'qi0u0xIihh', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(94, 'Clyde Balistreri', 'addison64@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'tQMYZXIwrM', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(95, 'Myrtle Ziemann DVM', 'qkling@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', 'VujhmmhIWH', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(96, 'Eryn Bogan', 'carter.blanda@example.com', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '4dJUbzI2BZ', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(97, 'Adrain Thiel', 'mjast@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '4zUNSvsaCv', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(98, 'Ms. Maryse Stamm', 'vmcdermott@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '4ii5jpFR6G', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(99, 'Jordi Fay', 'hquigley@example.net', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '85zRz2AUHa', '2017-01-22 14:57:46', '2017-01-22 14:57:46'),
(100, 'Dr. Charles Wolff', 'dean.erdman@example.org', '$2y$10$MyLbFdKAp9bflo.ifvaLYOzTfpzgMFFrX9i7MI844E9yDOSaIkZnq', '10W5UAKthB', '2017-01-22 14:57:46', '2017-01-22 14:57:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`Cart_ID`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `Cart_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `Item_ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
