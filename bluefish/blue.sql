-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2016 at 10:17 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blue`
--

-- --------------------------------------------------------

--
-- Table structure for table `egg_stock`
--

CREATE TABLE `egg_stock` (
  `id` int(30) NOT NULL,
  `name` varchar(35) NOT NULL,
  `amount` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `egg_stock`
--

INSERT INTO `egg_stock` (`id`, `name`, `amount`) VALUES
(1, 'egg1', '100'),
(2, 'egg2', '200'),
(3, 'egg3', '300'),
(4, 'egg4', '400'),
(5, 'egg5', '500'),
(6, 'egg6', '600'),
(7, 'egg7', '700'),
(8, 'egg8', '800'),
(9, 'egg9', '900'),
(10, 'egg10', '1000');

-- --------------------------------------------------------

--
-- Table structure for table `feed_consumption`
--

CREATE TABLE `feed_consumption` (
  `id` int(30) NOT NULL,
  `feed_quantity` varchar(30) NOT NULL,
  `date_of_consumption` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_consumption`
--

INSERT INTO `feed_consumption` (`id`, `feed_quantity`, `date_of_consumption`) VALUES
(4, '100kg', '2016-12-17'),
(5, '150kg', '2016-12-18'),
(6, '200kg', '2016-12-19'),
(7, '250kg', '2016-12-20'),
(8, '300kg', '2016-12-21'),
(9, '350kg', '2016-12-22'),
(10, '400kg', '2016-12-23'),
(11, '450kg', '2016-12-24'),
(12, '500kg', '2016-12-25'),
(13, '550kg', '2016-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `feed_stock`
--

CREATE TABLE `feed_stock` (
  `id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed_stock`
--

INSERT INTO `feed_stock` (`id`, `category`, `amount`, `date`) VALUES
(2, 'A', '100kg', '2016-12-17'),
(3, 'B', '110kg', '2016-12-18'),
(4, 'C', '120kg', '2016-12-19'),
(5, 'D', '130kg', '2016-12-20'),
(6, 'E', '140kg', '2016-12-21'),
(7, 'F', '150kg', '2016-12-22'),
(8, 'G', '160kg', '2016-12-23'),
(9, 'H', '170kg', '2016-12-24'),
(10, 'I', '180kg', '2016-12-25'),
(11, 'J', '190kg', '2016-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(35) NOT NULL,
  `name` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `name`) VALUES
(2, 'Dhaka'),
(3, 'Chittagong'),
(4, 'Barisal'),
(5, 'Khulna'),
(6, 'Rangpur'),
(7, 'Rajshahi'),
(8, 'Sylhet'),
(9, 'Feni'),
(10, 'Comilla'),
(11, 'Dinajpur');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nid` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `repassword` varchar(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `dob` date NOT NULL,
  `user` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `email`, `nid`, `password`, `repassword`, `gender`, `dob`, `user`) VALUES
(1, 'sadman ', 'hasan', 'sadman@hasan.com', '1234567890', '123', '123', 'male', '2016-12-04', 'worker'),
(1, 'shafin', 'haq', 'shafin@haq.com', '123123', '123', '123', 'male', '2016-10-05', 'admin'),
(2, 'wordh', 'hasan', 'wordh@hasan.com', '121212', '123', '123', 'male', '2016-12-08', 'worker'),
(1, 'jiban', 'khan', 'jiban@khan.com', '0987654', '123', '123', 'female', '2016-12-01', 'admin'),
(1, 'sorwar', 'resim', 'sorwar@resim.com', '1234567890', '123', '123', 'male', '1983-12-17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `medicine_consumption`
--

CREATE TABLE `medicine_consumption` (
  `id` int(30) NOT NULL,
  `date_of_consumption` date NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_consumption`
--

INSERT INTO `medicine_consumption` (`id`, `date_of_consumption`, `type`) VALUES
(2, '2016-12-17', 'Hydrocodone'),
(3, '2016-12-18', 'Generic Zocor'),
(4, '2016-12-19', 'Lisinopril'),
(5, '2016-12-20', 'Generic Synthroid'),
(6, '2016-12-21', 'Generic Norvasc'),
(7, '2016-12-22', 'Generic Prilosec'),
(8, '2016-12-23', 'Azithromycin'),
(9, '2016-12-24', 'Amoxicillin'),
(10, '2016-12-25', 'Generic Glucophage'),
(11, '2016-12-26', 'Hydrochlorothiazide');

-- --------------------------------------------------------

--
-- Table structure for table `medicine_stock`
--

CREATE TABLE `medicine_stock` (
  `id` int(30) NOT NULL,
  `purchase_date` date NOT NULL,
  `medicine_type` varchar(30) NOT NULL,
  `quantity` varchar(30) NOT NULL,
  `feed_type` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine_stock`
--

INSERT INTO `medicine_stock` (`id`, `purchase_date`, `medicine_type`, `quantity`, `feed_type`) VALUES
(2, '2016-12-17', 'Hydrocodone', '100g', 'average'),
(3, '2016-12-18', 'Generic Zocor', '150g', 'small'),
(4, '2016-12-19', 'Lisinopril ', '200g', 'large'),
(5, '2016-12-20', 'Generic Synthroid', '250g', 'small'),
(6, '2016-12-21', 'Generic Norvasc', '300g', 'large'),
(7, '2016-12-22', 'Generic Prilosec', '350g', 'average'),
(8, '2016-12-23', 'Azithromycin', '400g', 'average'),
(9, '2016-12-24', 'Amoxicillin', '450g', 'small'),
(10, '2016-12-25', 'Generic Glucophage', '500g', 'large'),
(11, '2016-12-26', 'Hydrochlorothiazide', '550g', 'small');

-- --------------------------------------------------------

--
-- Table structure for table `opening`
--

CREATE TABLE `opening` (
  `id` int(11) NOT NULL,
  `date` varchar(30) NOT NULL,
  `opening` varchar(30) NOT NULL,
  `closing` varchar(30) NOT NULL,
  `features` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opening`
--

INSERT INTO `opening` (`id`, `date`, `opening`, `closing`, `features`) VALUES
(1, 'Sat', '9.00am', '9.00pm', ''),
(2, 'Sun', 'close', 'close', 'close'),
(3, 'Mon', '9.00am', '9.00pm', ''),
(4, 'Tue', '9.00am', '9.00pm', ''),
(5, 'Wed', '9.00am', '9.00pm', ''),
(6, 'Thu', '9.00am', '9.00pm', ''),
(7, 'Fri', '10.00am', '6.00pm', 'Free Visit');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(30) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_amount` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'not delivered',
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_quantity`, `order_amount`, `price`, `status`, `date`) VALUES
(2, 11, '121kg', 'Tk.110', 'delivered', '2016-12-17'),
(3, 12, '144kg', 'Tk.120', 'not delivered', '2016-12-18'),
(4, 13, '169kg', 'Tk.130', 'delivered', '2016-12-19'),
(5, 14, '196kg', 'Tk.140', 'not delivered', '2016-12-20'),
(6, 15, '225kg', 'Tk.150', 'not delivered', '2016-12-21'),
(7, 16, '256kg', 'Tk.160', 'delivered', '2016-12-22'),
(8, 17, '289kg', 'Tk.170', 'delivered', '2016-12-23'),
(9, 18, '324kg', 'Tk.180', 'not delivered', '2016-12-24'),
(10, 19, '361kg', 'Tk.190', 'delivered', '2016-12-25'),
(11, 20, '400kg', 'Tk.200', 'not delivered', '2016-12-26'),
(14, 1, '5kg', '300$', 'not delivered', '2016-12-05'),
(13, 1, '5kg', '300$', 'not delivered', '2016-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(20) NOT NULL,
  `Species` varchar(25) NOT NULL,
  `Rate` int(20) NOT NULL,
  `Size` int(11) NOT NULL,
  `Production_Session` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `Species`, `Rate`, `Size`, `Production_Session`) VALUES
(3, 'A', 100, 11, 'January '),
(4, 'B', 110, 12, 'February'),
(5, 'C', 120, 13, 'March'),
(6, 'D', 130, 14, 'April'),
(7, 'E', 140, 15, 'May'),
(8, 'F', 150, 16, 'June'),
(9, 'G', 160, 17, 'July'),
(10, 'H', 170, 18, 'August'),
(11, 'a', 12, 19, 'September'),
(14, 'Jk', 1, 190, 'July');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `egg_stock`
--
ALTER TABLE `egg_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_consumption`
--
ALTER TABLE `feed_consumption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feed_stock`
--
ALTER TABLE `feed_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`,`id`);

--
-- Indexes for table `medicine_consumption`
--
ALTER TABLE `medicine_consumption`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicine_stock`
--
ALTER TABLE `medicine_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opening`
--
ALTER TABLE `opening`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `egg_stock`
--
ALTER TABLE `egg_stock`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `feed_consumption`
--
ALTER TABLE `feed_consumption`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `feed_stock`
--
ALTER TABLE `feed_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medicine_consumption`
--
ALTER TABLE `medicine_consumption`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `medicine_stock`
--
ALTER TABLE `medicine_stock`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `opening`
--
ALTER TABLE `opening`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
