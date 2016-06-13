-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2016 at 04:17 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bestpizza`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `order_nr` int(6) NOT NULL,
  `user_id` int(4) NOT NULL,
  `pizza_type` varchar(20) NOT NULL,
  `qty` int(3) NOT NULL,
  `description` varchar(200) NOT NULL,
  `total_tops` decimal(6,2) NOT NULL,
  `total` decimal(6,2) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=69 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_nr`, `user_id`, `pizza_type`, `qty`, `description`, `total_tops`, `total`, `status`) VALUES
(53, 49, 3, 'Medium', 2, 'Becon, Mushroom, Extracheese, ', '4.00', '20.00', 1),
(54, 49, 3, 'Large', 1, 'Becon, Extracheese, Pepperoni, Ham, ', '6.50', '13.50', 1),
(55, 49, 3, 'Large', 1, 'Pepperoni, ', '1.50', '8.50', 1),
(56, 50, 3, 'Medium', 4, 'Extracheese, Pepperoni, ', '2.50', '34.00', 0),
(57, 50, 3, 'Large', 4, 'Bacon, Mushroom, ', '3.00', '40.00', 0),
(58, 50, 3, 'Large', 2, 'Mushroom, Extracheese, Pepperoni, Ham, ', '5.50', '25.00', 0),
(59, 51, 3, 'Medium', 3, 'Bacon, Mushroom, Extracheese, ', '4.00', '30.00', 0),
(60, 52, 3, 'Medium', 2, 'Mushroom, Extracheese, ', '2.00', '16.00', 0),
(61, 53, 3, 'Medium', 2, 'Bacon, Mushroom, Extracheese, ', '4.00', '20.00', 0),
(62, 53, 3, 'Medium', 1, 'Extracheese, Pepperoni, ', '2.50', '8.50', 0),
(63, 54, 5, 'Medium', 3, 'Mushroom, Extracheese, ', '2.00', '24.00', 0),
(64, 54, 5, 'Large', 2, 'Bacon, Mushroom, Extracheese, Pepperoni, Ham, ', '7.50', '29.00', 0),
(65, 55, 3, 'Small', 1, 'Bacon, ', '2.00', '7.00', 0),
(66, 55, 3, 'Medium', 1, 'Bacon, Mushroom, ', '3.00', '9.00', 0),
(67, 56, 2, 'Medium', 4, 'Mushroom, Extracheese, Pepperoni, ', '3.50', '38.00', 0),
(68, 56, 2, 'Large', 2, 'Bacon, Mushroom, Extracheese, Pepperoni, Ham, ', '7.50', '29.00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE IF NOT EXISTS `pizzas` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `size` varchar(10) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `size`, `price`) VALUES
(1, 'Small', '5.00'),
(2, 'Medium', '6.00'),
(3, 'Large', '7.00');

-- --------------------------------------------------------

--
-- Table structure for table `toppings`
--

CREATE TABLE IF NOT EXISTS `toppings` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `toppings`
--

INSERT INTO `toppings` (`id`, `name`, `price`) VALUES
(1, 'Bacon', '2.00'),
(2, 'Mushroom', '1.00'),
(3, 'Extracheese', '1.00'),
(4, 'Pepperoni', '1.50'),
(5, 'Ham', '2.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `passwd`, `address`, `phone`, `type`) VALUES
(1, 'waiter', 'waiter@bpizza.com', '111', '', '', 1),
(2, 'John Travolta', 'john@gmail.com', '111', '1110 Baubien Montreal', '514-555-7878', 0),
(3, 'maria', 'maria@yahoo.com', '111', '999 du Parc', '514-787-9988', 0),
(4, 'Vasea Pupkin', 'vasea@gmail.com', '111', '999 1 avenue', '514-787-9999', 0),
(5, 'Katya', 'katya@gmail.com', '111', '78 Cote Vertu', '438-878-9999', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
