-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2023 at 09:56 PM
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
-- Database: `digimart`
--

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `pid` int(11) UNSIGNED NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `mrp` int(255) UNSIGNED DEFAULT NULL,
  `description` text DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `qty` int(255) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`pid`, `title`, `mrp`, `description`, `detail`, `qty`) VALUES
(1, 'layasa Men\'s Sneakers Walking Shoe', 999, 'Elevate your style with this classy pair of Walking Sneaker Shoes for Men from the house of Layasa Brand These Stylish latest Design Sneaker for Men boasts Synthetic Upper with Rubber SOLE for durability These Walking Sneakers are the perfect choice for all those who do not like to compromise on what they wear These Men\'s Sneaker can be worn for casual and outdoor Purpose. Also best fit for Casual, Outdoor, Fashion and Evening Outing Purpose Layasa Sneakers are made up of High Quality Premium Synthetic material which stays strong and durable - meaning the Sneakers will last much longer Soft Cushioned Insole and Rubber Sole ensures cushioning to the feet removing heel strain Layasa endorses style that strikes a fine balance between the classic and the modern, the discreet and the bold with good taste being the only criterion for selection.', 'Product Dimensions : 30 x 12 x 7 cm; 1.6 Kilograms.,.Date First Available : 4 February 2023.,.Manufacturer : LEVEL INTERNATIONAL.,.ASIN : B0BTV827CN.,.Item model number : LKJ2401.,.Country of Origin : India.,.Department : mens.,.Manufacturer : LEVEL INTERNATIONAL.,.Packer : LEVEL INTERNATIONAL.,.Item Weight : 1 kg 600 g.,.Item Dimensions LxWxH : 30 x 12 x 7 Centimeters.,.Net Quantity : 1.00 count.,.Generic Name : Sneaker', 7),
(2, 'Apple iPhone 14 Plus (512 GB) - Midnight', 119900, 'The iPhone 14 and iPhone 14 Plus (also stylized as iPhone 14+) are smartphones designed, developed, and marketed by Apple Inc. They are the sixteenth generation of iPhones, succeeding the iPhone 13 and iPhone 13 Mini, and were announced during Apple Event, Apple Park in Cupertino, California, on September 7, 2022, alongside the higher-priced iPhone 14 Pro and iPhone 14 Pro Max flagships. The iPhone 14 and iPhone 14 Plus feature a 6.1-inch (15 cm) and 6.7-inch (17 cm) display, improvements to the rear-facing camera, and satellite connectivity for contacting emergency services when a user in trouble is beyond the range of Wi-Fi or cellular networks. The iPhone 14 was made available on September 16, 2022, and iPhone 14 Plus was made available on October 7, 2022.', 'Display : 6.7-inch Super Retina XDR display.,.Capacity : 128GB, 256GB, 512GB, 1TB.,.Face/Touch ID : Face ID.,.Chip : A15 Bionic chip with 6-core CPU (2 performance and 4 efficiency cores), 5-core GPU and 16-core Neural Engine.,.Splash, Water and Dust Resistant : Ceramic Shield front, glass back and aluminum design, water and dust resistant (rated IP68 - maximum depth of 6 meters up to 30 minutes).,.Camera and Video : Dual-camera system: 12MP Main, 12MP Ultrawide with Portrait mode, Depth Control, Portrait Lighting, Smart HDR 4, and 4K Dolby Vision HDR video up to 60 fps.,.Front Camera : 12MP TrueDepth front camera with Portrait mode, Depth Control, Portrait Lighting, and Smart HDR 4.,.Power and Battery : Video playback: Up to 26 hours Video playback (streamed): Up to 20 hours Audio playback: Up to 100 hours 20W adapter or higher (sold separately) Fast-charge capable: Up to 50% charge in around 30 minutes with 20W adapter or higher (available separately).,.Height : 6.33 inches (160.8 mm).,.Width : 3.07 inches (78.1 mm).,.Depth : 0.31 inch (7.80 mm).,.Weight : 7.16 ounces (203 grams)', 100);

-- --------------------------------------------------------

--
-- Table structure for table `pwd_reset`
--

CREATE TABLE `pwd_reset` (
  `id` int(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `reset_key` varchar(255) NOT NULL,
  `exp_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_users`
--

CREATE TABLE `temp_users` (
  `rid` int(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country` char(2) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pwd` varchar(800) NOT NULL,
  `evkey` varchar(255) NOT NULL,
  `exp_time` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `uid` int(11) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `country` char(2) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `pwd` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`uid`, `fname`, `lname`, `email`, `address`, `country`, `phone`, `pwd`) VALUES
(1, 'John', 'Doe', 'email@abc.com', 'House No.1,\r\nABC Street, XYZ City,\r\nA Country', 'us', '+12015550123', '$2y$10$EXHCrcZWCkLtGY2ZrmzV6u1lSAr2GpPSfjnM3HLhgVdkSpL1PHw.e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `pwd_reset`
--
ALTER TABLE `pwd_reset`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `temp_users`
--
ALTER TABLE `temp_users`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `email` (`email`,`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `pid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pwd_reset`
--
ALTER TABLE `pwd_reset`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp_users`
--
ALTER TABLE `temp_users`
  MODIFY `rid` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `uid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
