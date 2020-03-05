-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 03:38 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `urbanplantation`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `blog_title` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `blog_summary` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `blog_introduction` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `blog_body` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `blog_conclusion` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `resource_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cultivation`
--

CREATE TABLE `cultivation` (
  `id` int(11) NOT NULL,
  `plant_id` int(11) DEFAULT NULL,
  `cultivation_tips` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `month_to_start` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `month_to_harvest` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `preferred_soil` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `humadity_needed` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `steps_of_cultivation` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `bloger_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `user_id`, `first_name`, `last_name`, `address`, `phone_number`, `bloger_id`) VALUES
(2, 14, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(3, 15, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(4, 16, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(5, 17, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(6, 18, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(7, 19, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(8, 20, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(9, 21, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(10, 22, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(11, 23, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(12, 24, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL),
(13, 25, 'Md Jahidul', 'Haque', 'Pestalozzistraße / 9, WNr. 4113', 1624722038, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `feature_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `feature_name`) VALUES
(1, 'create_plant_order');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `item_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `order_id` int(11) NOT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `unit_cost` int(11) DEFAULT NULL,
  `num_of_units` int(11) DEFAULT NULL,
  `material_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `loginID` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `loginID`, `password`, `user_id`) VALUES
(1, 'Tonoy_14', '123456', 14),
(2, 'Tonoy_15', '123456', 15),
(3, 'Tonoy_16', '123456', 16),
(4, 'Tonoy_17', '123456', 17),
(5, 'Tonoy_18', '123456', 18),
(6, 'Tonoy_19', '123456', 19),
(7, 'Tonoy_20', '123456', 20),
(8, 'Tonoy_21', '123456', 21),
(9, 'Tonoy_22', '123456', 22),
(10, 'Tonoy_23', '123456', 23),
(11, 'Tonoy_24', '123456', 24),
(12, 'Tonoy_25', '234456', 25);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `display_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `owner_id` int(11) DEFAULT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `unit_price` double DEFAULT NULL,
  `display_info` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `mfd` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `exd` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `recipent_id` int(11) DEFAULT NULL,
  `tracking_id` int(11) DEFAULT NULL,
  `order_summery` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `total_amount` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `plant_info`
--

CREATE TABLE `plant_info` (
  `id` int(11) NOT NULL,
  `plant_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `plant_type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `preferred_season` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `plant_info` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `resource_id` int(11) DEFAULT NULL,
  `cultivation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `provider`
--

CREATE TABLE `provider` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `is_broker` tinyint(1) NOT NULL DEFAULT '0',
  `is_sourcer` tinyint(1) NOT NULL DEFAULT '0',
  `bloger_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `id` int(11) NOT NULL,
  `caption` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `comment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `feature_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `feature_id`) VALUES
(1, 'customer', 1),
(2, 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tracking`
--

CREATE TABLE `tracking` (
  `id` int(11) NOT NULL,
  `sender_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `recipent_address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `current_status` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `user_type` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `user_type`, `role_id`) VALUES
(2, 'tonoy123', 'customer', 1),
(3, 'adminUser', 'admin', 2),
(4, 'tonoynew', 'customer', 1),
(5, 'tonoynew', 'customer', 1),
(6, 'tonoynew', 'customer', 1),
(7, 'tonoynew', 'customer', 1),
(8, 'tonoynew', 'customer', 1),
(9, 'tonoynew', 'customer', 1),
(10, 'tonoynew', 'customer', 1),
(11, 'Tonoy', 'customer', 1),
(12, 'Tonoy', 'customer', 1),
(13, 'Tonoy', 'customer', 1),
(14, 'Tonoy', 'customer', 1),
(15, 'Tonoy', 'customer', 1),
(16, 'Tonoy', 'customer', 1),
(17, 'Tonoy', 'customer', 1),
(18, 'Tonoy', 'customer', 1),
(19, 'Tonoy', 'customer', 1),
(20, 'Tonoy', 'customer', 1),
(21, 'Tonoy', 'customer', 1),
(22, 'Tonoy', 'customer', 1),
(23, 'Tonoy', 'customer', 1),
(24, 'Tonoy', 'customer', 1),
(25, 'Tonoy', 'customer', 1),
(26, 'Tonoy', 'customer', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cultivation_to_plant` (`plant_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_to_customer` (`user_id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `item_to_order` (`order_id`),
  ADD KEY `item_to_resource` (`resource_id`),
  ADD KEY `item_to_material` (`material_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `login_to_user` (`user_id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD KEY `material_to_owner` (`owner_id`),
  ADD KEY `material_to_resource` (`resource_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_to_user` (`sender_id`),
  ADD KEY `recipent_link` (`recipent_id`),
  ADD KEY `order_to_track` (`tracking_id`);

--
-- Indexes for table `plant_info`
--
ALTER TABLE `plant_info`
  ADD PRIMARY KEY (`id`),
  ADD KEY `plant_to_resource` (`resource_id`),
  ADD KEY `plant_to_cultivation` (`cultivation_id`);

--
-- Indexes for table `provider`
--
ALTER TABLE `provider`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_to_provider` (`user_id`),
  ADD KEY `provider_to_blog` (`bloger_id`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `review_to_blog` (`post_id`),
  ADD KEY `review_to_user` (`user_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_to_feature` (`feature_id`);

--
-- Indexes for table `tracking`
--
ALTER TABLE `tracking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_to_role` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `resource`
--
ALTER TABLE `resource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cultivation`
--
ALTER TABLE `cultivation`
  ADD CONSTRAINT `cultivation_to_plant` FOREIGN KEY (`plant_id`) REFERENCES `plant_info` (`id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_to_blog` FOREIGN KEY (`bloger_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `user_to_customer` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_to_material` FOREIGN KEY (`material_id`) REFERENCES `materials` (`id`),
  ADD CONSTRAINT `item_to_order` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `item_to_resource` FOREIGN KEY (`resource_id`) REFERENCES `resource` (`id`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_to_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `material_to_owner` FOREIGN KEY (`owner_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `material_to_resource` FOREIGN KEY (`resource_id`) REFERENCES `resource` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `order_to_track` FOREIGN KEY (`tracking_id`) REFERENCES `tracking` (`id`),
  ADD CONSTRAINT `order_to_user` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `recipent_link` FOREIGN KEY (`recipent_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `plant_info`
--
ALTER TABLE `plant_info`
  ADD CONSTRAINT `plant_to_cultivation` FOREIGN KEY (`cultivation_id`) REFERENCES `cultivation` (`id`),
  ADD CONSTRAINT `plant_to_resource` FOREIGN KEY (`resource_id`) REFERENCES `resource` (`id`);

--
-- Constraints for table `provider`
--
ALTER TABLE `provider`
  ADD CONSTRAINT `provider_to_blog` FOREIGN KEY (`bloger_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `user_to_provider` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_to_blog` FOREIGN KEY (`post_id`) REFERENCES `blog` (`id`),
  ADD CONSTRAINT `review_to_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_to_feature` FOREIGN KEY (`feature_id`) REFERENCES `feature` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_to_role` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
