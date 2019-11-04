-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 04, 2019 at 05:07 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `splash_carwash`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `services` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `hour` int(11) NOT NULL,
  `min` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone`, `services`, `date`, `hour`, `min`) VALUES
(3, 'Richa Deka', 'richadeka255@gmail.com', 8472009078, 'Royal Package', '2019-10-24', 8, 5),
(4, 'Nunjeevan Adhikari', 'nunji@gmail.com', 1234567890, 'Royal Package', '2019-10-24', 8, 5),
(5, 'Moonsoon Bhuyan', 'lee@gmail.com', 7689542134, 'Economic Package', '2019-10-18', 22, 10),
(6, 'hrisikesh', 'hrisikesh@gmail.com', 6543789013, 'Deluxe Package', '2019-10-25', 8, 5),
(7, 'Manali Baruah', 'manali@gmail.com', 7689543670, 'Premium Package', '2019-10-31', 8, 5),
(8, 'Sahil Islam', 'islam@gmail.com', 5678901234, 'Premium Package', '2019-11-08', 12, 5),
(10, 'Wuzu Huss', 'wuzu@gmaiil.com', 84720090789, 'Premium Package', '2019-11-22', 11, 45),
(11, 'Upasana', 'alupitika@gmail.com', 8472001123, 'Deluxe Package', '2019-11-08', 12, 40),
(12, 'Uday', 'UdY@gmail.com', 8472023458, 'Royal Package', '2019-11-28', 12, 30),
(17, 'Richa Deka', 'hadeka5@gmail.com', 8472009078, 'SERVICES', '2019-11-15', 8, 5),
(18, 'abc', 'abc@gmail.com', 2345789043, 'Economic Package', '2019-11-13', 8, 5),
(19, 'efg', 'grfr@gmail.com', 8472009078, 'Premium Package', '2019-11-15', 8, 5),
(20, 'akshdkjahs', 'asjdh@jkhsd.com', 7267, 'Deluxe Package', '2019-11-13', 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `name`, `cost`) VALUES
(1, 'Economic Package', 1000),
(2, 'Premium Package', 1200),
(3, 'Deluxe Package', 1500),
(4, 'Royal Package', 1800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
