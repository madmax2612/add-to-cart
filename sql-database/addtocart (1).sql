-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 06:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addtocart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `name`, `password`) VALUES
(1, 'niti@gmail.com', 'nitithakar');

-- --------------------------------------------------------

--
-- Table structure for table `brandtype`
--

CREATE TABLE `brandtype` (
  `bcode` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brandtype`
--

INSERT INTO `brandtype` (`bcode`, `name`, `pid`) VALUES
(3, 'Samsung', 10),
(4, 'Motorola', 10),
(8, 'Canon', 20),
(9, 'Sony', 20),
(5, 'Vivo', 10),
(6, 'Nokia', 10),
(10, 'hp', 30),
(11, 'dell', 30),
(12, 'lenovo', 30),
(13, 'oppo', 10);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_type` varchar(20) NOT NULL,
  `brand_type` varchar(20) NOT NULL,
  `upload_image` varchar(20) NOT NULL,
  `product_desc` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `product_name`, `product_type`, `brand_type`, `upload_image`, `product_desc`, `cost`) VALUES
(1, 'Galaxy S4', 'Mobile', 'Samsung', 'mob1.jpeg', 'Galaxy S4,16GB', '29990'),
(2, 'Galaxy S3', 'Mobile', 'Samsung', 'mob2.jpeg', 'Galaxy S3,16GB', '12689'),
(6, 'Vivo V5', 'Mobile', 'Vivo', 'mob6.jpeg', 'Vivo V5,Dual light c', '25099'),
(7, 'Canon A900', 'Camera', 'Canon', 'cam1.jpeg', 'Canon A900,Point And', '20400'),
(8, 'Sony DSC-W830', 'Camera', 'Sony', 'cam2.jpeg', 'Sony DSC-W830,Point ', '7990'),
(16, 'Dell', '30', '', 'dell.jpeg', 'inspiron-5559', '64000'),
(17, 'oppo', '10', '', 'oppo-f3.jpeg', 'Oppo f3,32GB ', '21000'),
(19, 'camera', '20', '', 'cam4.jpg', 'Sony Dual cam', '70000'),
(20, 'hp', '30', '', 'hp1.jpg', 'hp', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `producttype`
--

CREATE TABLE `producttype` (
  `pcode` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producttype`
--

INSERT INTO `producttype` (`pcode`, `name`, `pid`) VALUES
(0, 'select', 0),
(101, 'mobile', 10),
(102, 'camera', 20),
(103, 'laptop', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, '', 'abc@gmail.com', 'abc'),
(2, '', 'abc@gmail.com', 'abc'),
(3, '', 'abc@gmail.com', 'niti'),
(4, '', 'abc@gmail.com', 'niti'),
(5, '', 'abc@gmail.com', 'niti'),
(6, '', 'abc@gmail.com', 'niti'),
(7, 'niti', 'niti@gmail.com', 'niti'),
(8, '', '', ''),
(9, '', '', 'kjkj'),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, '', '', ''),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, 'bmm', '', ''),
(20, '', '', ''),
(21, 'a', 'abc@gmail.com', 'abc123'),
(22, '', '', ''),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, 'aishwarya', 'xyz@gmail.com', '123as'),
(27, '', '', ''),
(28, '', '', ''),
(29, 'aisha123', 'aishwaryashaharkar23@gmail.com', 'aisha123'),
(30, 'aisha123', 'aishwaryashaharkar23@gmail.com', 'aisha123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
