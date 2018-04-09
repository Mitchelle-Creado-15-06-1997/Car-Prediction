-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2018 at 07:00 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prediction`
--

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `code` text NOT NULL,
  `image` text NOT NULL,
  `price` varchar(100) DEFAULT NULL,
  `sale` text NOT NULL,
  `average` varchar(100) NOT NULL,
  `yearlaunch` text NOT NULL,
  `path` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `code`, `image`, `price`, `sale`, `average`, `yearlaunch`, `path`) VALUES
(1, 'Maruti Swift Desire', 'MSD', 'uploads/MSD.jpg\r\n', 'RS. 5.56 lakh', '1197cc', '22.00', '2016', ''),
(2, 'MAruti Alto 800', 'MA', 'uploads/MA.jpg', 'Rs.2.64 lakh', '796cc', '33.44kmpl', '2016', ''),
(3, 'Maruti Alto K10', 'MAK', 'uploads/MAK.jpg', 'Rs. 3.42 lakh', '998cc', '24.07 kmpl', '2016', ''),
(4, 'Maruti Swift', 'MS', 'uploads/MS.jpg', 'Rs. 4.99 lakh', '1248cc', '28.4 kmpl', '2017', ''),
(5, 'Maruti Baleno', 'MB', 'uploads/MB.jpg', 'Rs. 5.41 lakh', '1248cc', '27.39 kmpl', '2017', ''),
(6, 'Maruti Vagon R', 'MVR', 'uploads/MVR.jpg', 'Rs. 4.22 lakh', '998cc', '20.51 kmpl', '2016', ''),
(7, 'Haundai Elite i20', 'MEi', 'uploads/HEi.jpg', 'Rs. 5.37 lakh', '1396cc', '22.54 kmpl', '2017', ''),
(8, 'Maruti Vitara Brezza', 'MVB', 'uploads/MVB.jpg', 'Rs. 7.36 lakh', '1248cc', '24.3 kmpl', '2017', ''),
(9, 'Hyundi Grand i10', 'HGi', 'uploads/HGi.jpg', 'Rs. 4.70 lakh', '1197cc', '1809 kmpl', '2017', ''),
(10, 'Hyundi Creta', 'HC', 'uploads/HC.jpg', 'Rs. 9.29 lakh', '1591cc', '15.29 kmpl', '2017', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` bigint(30) NOT NULL,
  `message` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`name`, `email`, `phone`, `message`) VALUES
('mars', 'mars@gmail.com', 0, 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`email`, `pass`) VALUES
('creado@gmail.com', 'mars');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `stars` int(11) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `email`, `stars`, `message`) VALUES
(1, 'alisha', 'abc@gmail.com', 4, 'great product!'),
(2, 'rhea', 'pqrs@gmail.com', 3, 'good'),
(3, 'mitchelle', 'lmno@gmail.com', 2, 'okay'),
(4, 'priya', 'res@gmail.com', 1, 'bad product '),
(5, 'ABC', 'abc@gmail', 4, 'cdjcbkcbk'),
(6, 'admin', 'creadomitchellee@gma', 5, 'HI'),
(7, 'jhgj', 'jhg@yugbkj', 3, 'jgu'),
(8, '', 'mars@gmail.com', 0, ''),
(9, '', 'mars@gmail.com', 0, ''),
(10, '', 'mars@gmail.com', 0, ''),
(11, '', 'mars@gmail.com', 0, ''),
(12, '', 'marsdel@gmail.com', 0, ''),
(13, '', 'mars@gmail.com', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
