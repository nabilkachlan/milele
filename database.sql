-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 17, 2023 at 02:53 AM
-- Server version: 5.7.32
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `milele`
--

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `row_id` int(11) NOT NULL,
  `supplier` varchar(255) NOT NULL,
  `wholeSeller` varchar(255) NOT NULL,
  `steeringType` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `sfx` varchar(255) NOT NULL,
  `variant` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL,
  `year` int(11) NOT NULL DEFAULT '2023',
  `month` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `row_id`, `supplier`, `wholeSeller`, `steeringType`, `model`, `sfx`, `variant`, `color`, `year`, `month`, `quantity`) VALUES
(2, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jan', 32),
(3, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Feb', 3),
(4, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Mar', 2),
(5, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Apr', 0),
(6, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'May', 12),
(7, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jun', 0),
(8, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jul', 12),
(9, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Aug', 32),
(10, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Sep', 0),
(11, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Oct', 23),
(12, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Nov', 34),
(13, 0, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Dec', 0),
(14, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jan', 12),
(15, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Feb', 3),
(16, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Mar', 4),
(17, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Apr', 21),
(18, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'May', 4),
(19, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jun', 0),
(20, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jul', 0),
(21, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Aug', 12),
(22, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Sep', 0),
(23, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Oct', 0),
(24, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Nov', 0),
(25, 78849, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Dec', 213),
(26, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jan', 32),
(27, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Feb', 4),
(28, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Mar', 1),
(29, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Apr', 4),
(30, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'May', 0),
(31, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jun', 12),
(32, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jul', 0),
(33, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Aug', 32),
(34, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Sep', 0),
(35, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Oct', 0),
(36, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Nov', 23),
(37, 87497, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Dec', 0),
(38, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jan', 2),
(39, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Feb', 0),
(40, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Mar', 3),
(41, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Apr', 0),
(42, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'May', 0),
(43, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jun', 4),
(44, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jul', 0),
(45, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Aug', 0),
(46, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Sep', 0),
(47, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Oct', 12),
(48, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Nov', 0),
(49, 99721, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Dec', 0),
(50, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jan', 34),
(51, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Feb', 0),
(52, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Mar', 0),
(53, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Apr', 2),
(54, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'May', 0),
(55, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jun', 1),
(56, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jul', 0),
(57, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Aug', 0),
(58, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Sep', 0),
(59, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Oct', 0),
(60, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Nov', 0),
(61, 38966, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Dec', 0),
(62, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jan', 34),
(63, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Feb', 0),
(64, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Mar', 0),
(65, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Apr', 2),
(66, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'May', 0),
(67, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jun', 1),
(68, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jul', 0),
(69, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Aug', 0),
(70, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Sep', 0),
(71, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Oct', 0),
(72, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Nov', 0),
(73, 49744, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Dec', 0),
(74, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jan', 3),
(75, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Feb', 4),
(76, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Mar', 0),
(77, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Apr', 0),
(78, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'May', 0),
(79, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jun', 0),
(80, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Jul', 0),
(81, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Aug', 0),
(82, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Sep', 0),
(83, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Oct', 0),
(84, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Nov', 4),
(85, 54272, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'B1', 'SomeCar_1', 'Black', 2023, 'Dec', 0),
(86, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jan', 2),
(87, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Feb', 3),
(88, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Mar', 0),
(89, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Apr', 0),
(90, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'May', 2),
(91, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jun', 4),
(92, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jul', 1),
(93, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Aug', 2),
(94, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Sep', 0),
(95, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Oct', 0),
(96, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Nov', 0),
(97, 67220, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Dec', 4),
(98, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jan', 32),
(99, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Feb', 23),
(100, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Mar', 0),
(101, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Apr', 1),
(102, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'May', 0),
(103, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jun', 0),
(104, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jul', 5),
(105, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Aug', 3),
(106, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Sep', 0),
(107, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Oct', 0),
(108, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Nov', 0),
(109, 58064, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Dec', 4),
(110, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jan', 3),
(111, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Feb', 1),
(112, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Mar', 0),
(113, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Apr', 4),
(114, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'May', 0),
(115, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jun', 23),
(116, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Jul', 0),
(117, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Aug', 0),
(118, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Sep', 0),
(119, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Oct', 34),
(120, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Nov', 43),
(121, 4613, 'Supplier Two', 'Whole Seller Two', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_1', 'White', 2023, 'Dec', 0),
(122, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Jan', 34),
(123, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Feb', 2),
(124, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Mar', 34),
(125, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Apr', 366),
(126, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'May', 234),
(127, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Jun', 43),
(128, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Jul', 0),
(129, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Aug', 343),
(130, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Sep', 0),
(131, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Oct', 32),
(132, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Nov', 0),
(133, 86994, 'Supplier Two', 'Whole Seller One', 'Left Hand Driven (LHD)', 'Model One', 'A1', 'SomeCar_2', 'White', 2023, 'Dec', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
