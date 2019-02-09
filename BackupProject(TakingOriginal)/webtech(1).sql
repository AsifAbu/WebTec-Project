-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2018 at 09:53 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `confirmpassword` varchar(10) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `phonenumber` varchar(14) NOT NULL,
  `gmail` varchar(25) NOT NULL,
  `nidnumber` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `confirmpassword`, `gender`, `phonenumber`, `gmail`, `nidnumber`) VALUES
('ASIF', '111', '111', 'male', '01780963777', 'mdabuasif306@gmail.com', '1111111111111'),
('ee', '222', '222', 'male', '01733333333', 'a@gmail.com', '1111111111111'),
('JH Jitu', '111', '111', 'male', '01777312313', 'jitu@gmail.com', '1111111111111'),
('Munna', '123', '123', 'male', '01600000000', 'munna@gmail.com', '3333333333333'),
('Smith', '123', '123', 'male', '01799999999', 'smith@gmail.com', '2222222222222'),
('Smith1', '123', '123', 'male', '01799999999', 'smith@gmail.com', '2222222222222'),
('Smith2', '123', '123', 'male', '01799999999', 'smith@gmail.com', '2222222222222'),
('Smith3', '123', '123', 'male', '01799999999', 'smith@gmail.com', '2222222222222'),
('Smith4', '123', '123', 'male', '01799999999', 'smith@gmail.com', '2222222222222'),
('Soumik', '123', '123', 'male', '01600000000', 'soumik@gmail.com', '2222222222222');

-- --------------------------------------------------------

--
-- Table structure for table `kidscloth`
--

CREATE TABLE `kidscloth` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidscloth`
--

INSERT INTO `kidscloth` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'kidscloth', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(2, 'kidscloth', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kidscosmetic`
--

CREATE TABLE `kidscosmetic` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidscosmetic`
--

INSERT INTO `kidscosmetic` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'kidscosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(2, 'kidscosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(3, 'kidscosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kidsshoe`
--

CREATE TABLE `kidsshoe` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kidsshoe`
--

INSERT INTO `kidsshoe` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'kidsshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(2, 'kidsshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(3, 'kidsshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(4, 'kidsshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(5, 'kidsshoe', 'KIDBrand', 'Shirt&updated', '1000', 'Small', 20, 'Kids Red Color Shirt', '');

-- --------------------------------------------------------

--
-- Table structure for table `mencloth`
--

CREATE TABLE `mencloth` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `size` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mencloth`
--

INSERT INTO `mencloth` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'mencloth', 'Easy', 'Formal Black Shirt', '2000', 'M', 20, 'Fromal Black Shirt. Pure Black Color.', 'imagename'),
(6, 'mencloth', 'Estacy', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15337566_1271702696226134_1926589084554355046_n.jpg'),
(9, 'mencloth', 'KIDBrand', 'Jeans', '1000', 'M', 20, 'Mens Red Color Shirt', '1217.sdt-news.jpg'),
(10, 'mencloth', 'Estacy', 'Jeans', '1000', 'M', 20, 'Mens Red Color Shirt', 'image1.jpg'),
(11, 'mencloth', 'KIDBrand', 'Jeansedited', '1000', 'M', 20, 'Mens Red Color Shirt', '');

-- --------------------------------------------------------

--
-- Table structure for table `mencosmetic`
--

CREATE TABLE `mencosmetic` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mencosmetic`
--

INSERT INTO `mencosmetic` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'mencosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(2, 'mencosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(3, 'mencosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(4, 'mencosmetic', 'Estacy', 'Jeans', '1000', 'Small', 20, 'Kids Red Color Shirt', '15337566_1271702696226134_1926589084554355046_n.jpg'),
(5, 'mencosmetic', 'Estacyupdated', 'Jeans', '1000', 'Small', 20, 'asif......updated', '');

-- --------------------------------------------------------

--
-- Table structure for table `menshoe`
--

CREATE TABLE `menshoe` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menshoe`
--

INSERT INTO `menshoe` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'menshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(2, 'menshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(3, 'menshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `Id` int(11) NOT NULL,
  `Name` varchar(70) NOT NULL,
  `Phone` varchar(254) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`Id`, `Name`, `Phone`) VALUES
(1, 'Bob', '017'),
(2, 'Anne', '018'),
(4, 'Kent1323', '019'),
(3, 'James', '016'),
(5, 'Temp', '018');

-- --------------------------------------------------------

--
-- Table structure for table `womencloth`
--

CREATE TABLE `womencloth` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womencloth`
--

INSERT INTO `womencloth` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'womencloth', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(2, 'womencloth', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(3, 'womencloth', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(4, 'womencloth', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(5, 'womencloth', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(6, 'womencloth', 'KIDBrand', 'Jeans', '1000', 'Small', 20, 'Kids Red Color Shirt', '15319182_1271702712892799_3460994768809797687_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `womencosmetic`
--

CREATE TABLE `womencosmetic` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womencosmetic`
--

INSERT INTO `womencosmetic` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'womencosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(2, 'womencosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(3, 'womencosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(4, 'womencosmetic', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `womenshoe`
--

CREATE TABLE `womenshoe` (
  `id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `title` varchar(100) NOT NULL,
  `price` varchar(20) NOT NULL,
  `size` varchar(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `womenshoe`
--

INSERT INTO `womenshoe` (`id`, `category`, `brand`, `title`, `price`, `size`, `quantity`, `description`, `image`) VALUES
(1, 'womenshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg'),
(2, 'womenshoe', 'KIDBrand', 'Shirt', '1000', 'Small', 20, 'Kids Red Color Shirt', '15284938_1271702626226141_3884935144172762758_n.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kidscloth`
--
ALTER TABLE `kidscloth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kidscosmetic`
--
ALTER TABLE `kidscosmetic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kidsshoe`
--
ALTER TABLE `kidsshoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mencloth`
--
ALTER TABLE `mencloth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mencosmetic`
--
ALTER TABLE `mencosmetic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menshoe`
--
ALTER TABLE `menshoe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `womencloth`
--
ALTER TABLE `womencloth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womencosmetic`
--
ALTER TABLE `womencosmetic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `womenshoe`
--
ALTER TABLE `womenshoe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kidscloth`
--
ALTER TABLE `kidscloth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kidscosmetic`
--
ALTER TABLE `kidscosmetic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kidsshoe`
--
ALTER TABLE `kidsshoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mencloth`
--
ALTER TABLE `mencloth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mencosmetic`
--
ALTER TABLE `mencosmetic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menshoe`
--
ALTER TABLE `menshoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `womencloth`
--
ALTER TABLE `womencloth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `womencosmetic`
--
ALTER TABLE `womencosmetic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `womenshoe`
--
ALTER TABLE `womenshoe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
