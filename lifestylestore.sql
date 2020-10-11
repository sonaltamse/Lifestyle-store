-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 14, 2020 at 01:53 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lifestylestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Samsung galaxy 9', 30999),
(2, 'iphone 7', 29999),
(3, 'iphone XR', 59999),
(4, 'Redmi K20', 49999),
(5, 'One plus 7T pro', 47999),
(6, 'Samsung galaxy S20', 97999),
(7, 'Samsung Galaxy A51', 25250),
(8, 'iPhone XS-Max', 99999),
(9, 'Samsung Galaxy S10', 129999);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(1, 'suman shindey', 'sumanashindey@gmail.com', '5448003dd74ecf2e17ab17f90a533c43', '8798585858', 'Karwar', 'Karnataka'),
(2, 'ruhi chawla', 'ruhichawla@c.om', 'fdb573585851a08231dab1493c4b00e3', '8787878788', 'Karwar', 'Karnataka'),
(3, 'bhuvan', 'bhuvan@xyz.com', 'a61847e6edd918618b2abd065e0b48c6', '8798879898', 'Mumbai', 'Maharashtra'),
(4, 'sid', 'sid@xyz.com', '220433c1a1800dc55feb5989c06942ab', '8745787878', 'Mumbai', 'Maharashtra'),
(5, 'delnaz', 'delnaz@xyz.com', '0afaa8bea3b6b0e4a59e2f099550ce60', '8756895689', 'Karwar', 'Karnataka'),
(6, 'jelena', 'jelena@xyz.com', '98dae0e08c01f9e64dc3f9650eb5a714', '9845784578', 'Mumbai', 'Maharashtra'),
(7, 'hurry', 'hurry@xyz.com', 'cc86a50fb8f3c4840cb346a0829f64a2', '9878784578', 'Mumbai', 'Maharashtra'),
(8, 'shubham', 'shubham@xyz.com', '5583413443164b56500def9a533c7c70', '8978784578', 'Karwar', 'Karnataka'),
(9, 'girish', 'girish@xyz.com', 'ba954023e9ee590ab082b65b81b6b93d', '9447858858', 'Mumbai', 'Maharashtra'),
(10, 'maduri', 'maduri@xyz.com', 'b93188f5b13c95714f75c133b28d326f', '9884578856', 'Mumbai', 'Maharashtra'),
(11, 'sonal ', 'sonal@xyz.com', 'f5bb0c8de146c67b44babbf4e6584cc0', '8745898989', 'Karwar', 'Karnataka'),
(12, 'darshan', 'darshan@xyz.com', 'f07a83b8bd0b5cc4e0d9c36bf4f7f798', '7845747474', 'Karwar', 'Karnataka'),
(13, 'abhishek', 'abhishek@xyz.com', '5344237ad06253d47cee9a4c091aa663', '8712784512', 'Benglore', 'Karnataka'),
(14, 'fayaz', 'fayaz@xyz.com', '9599bc848842acf987aaab48b029b0e0', '7845123636', 'Mumbai', 'Maharashtra'),
(15, 'divya', 'divya@xyz.com', '43e6d250cb09566f7aa3ffeeec44af20', '8958458596', 'Kumta', 'Karnataka'),
(16, 'siya', 'siya@xyz.com', '467b617fec4d9fcb63505734ee224851', '8774745856', 'Mumbai', 'Maharashtra'),
(17, 'manu', 'manu@xyz.com', '9b13e59273c8a9e5a9b46c1cabcf3255', '9847546123', 'Kumta', 'Karnataka'),
(18, 'megha', 'megha@xyz.com', 'a8db65c7f4c89ed2ab28faab7a1bcdcf', '9858451256', 'Mumbai', 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`item_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(2, 1, 2, 'Confirmed'),
(4, 2, 2, 'Confirmed'),
(5, 2, 1, 'Confirmed'),
(10, 6, 5, 'Confirmed'),
(11, 6, 2, 'Confirmed'),
(14, 8, 1, 'Confirmed'),
(15, 13, 7, 'Confirmed'),
(16, 13, 4, 'Confirmed'),
(17, 13, 1, 'Confirmed'),
(18, 18, 5, 'Confirmed'),
(19, 18, 2, 'Confirmed'),
(20, 18, 3, 'Confirmed');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
