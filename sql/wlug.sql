-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2019 at 10:41 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wlug`
--

-- --------------------------------------------------------

--
-- Table structure for table `club_service`
--

CREATE TABLE `club_service` (
  `id` int(2) NOT NULL,
  `name` varchar(150) NOT NULL,
  `presenters` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(4) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `feedback`, `date`) VALUES
(1, 'sahg a sdhasd asdhahdas  saahsfshfsh \r\n\r\nsf\r\ndf\r\nsdf\r\nsd\r\nsdgd', '2019-08-14 00:00:00'),
(2, 'width: 250px;\r\n  box-shadow: 0 4px 8px 0 grey;\r\n  text-align: center;\r\npadding: 10px;', '2019-08-13 00:00:00'),
(3, 'sahg a sdhasd asdhahdas  saahsfshfsh \r\n\r\nsf\r\ndf\r\nsdf\r\nsd\r\nsdgd', '2019-08-14 00:00:00'),
(4, 'width: 250px;\r\n  box-shadow: 0 4px 8px 0 grey;\r\n  text-align: center;\r\npadding: 10px;', '2019-08-13 00:00:00'),
(5, 'In modern day web design, cards are used a lot. Cards look clean and also look like the Android Material design. We can very easily create both Text and Picture cards using the box-shadow property. If you do not know about the CSS property box-shadow, follow the link.', '2019-08-02 00:00:00'),
(6, 'In modern day web design, cards are used a lot. Cards look clean and also look like the Android Material design. We can very easily create both Text and Picture cards using the box-shadow property. If you do not know about the CSS property box-shadow, follow the link.', '2019-08-27 00:00:00'),
(7, 'In modern day web design, cards are used a lot. Cards look clean and also look like the Android Material design. We can very easily create both Text and Picture cards using the box-shadow property. If you do not know about the CSS property box-shadow, follow the link.', '2019-08-02 00:00:00'),
(8, 'In modern day web design, cards are used a lot. Cards look clean and also look like the Android Material design. We can very easily create both Text and Picture cards using the box-shadow property. If you do not know about the CSS property box-shadow, follow the link.', '2019-08-27 00:00:00'),
(9, 'In modern day web design, cards are used a lot. Cards look clean and also look like the Android Material design. We can very easily create both Text and Picture cards using the box-shadow property. If you do not know about the CSS property box-shadow, follow the link.', '2019-08-02 00:00:00'),
(10, 'In modern day web design, cards are used a lot. Cards look clean and also look like the Android Material design. We can very easily create both Text and Picture cards using the box-shadow property. If you do not know about the CSS property box-shadow, follow the link.', '2019-08-27 00:00:00'),
(11, 'In modern day web design, cards are used a lot. Cards look clean and also look like the Android Material design. We can very easily create both Text and Picture cards using the box-shadow property. If you do not know about the CSS property box-shadow, follow the link.', '2019-08-02 00:00:00'),
(12, 'In modern day web design, cards are used a lot. Cards look clean and also look like the Android Material design. We can very easily create both Text and Picture cards using the box-shadow property. If you do not know about the CSS property box-shadow, follow the link.', '2019-08-27 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `img_id` int(3) NOT NULL,
  `category` varchar(20) NOT NULL,
  `img_org` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`img_id`, `category`, `img_org`) VALUES
(20, '', 'IMG-20190215-WA0011.jpg'),
(21, 'metamorphosis', 'IMG-20190215-WA0007.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(5) NOT NULL,
  `category` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `post` varchar(30) NOT NULL,
  `thought` varchar(200) NOT NULL,
  `AOI` varchar(50) NOT NULL,
  `contact_no` text NOT NULL,
  `fb` varchar(150) NOT NULL,
  `gmail` varchar(100) NOT NULL,
  `linked_in` varchar(150) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `category`, `name`, `post`, `thought`, `AOI`, `contact_no`, `fb`, `gmail`, `linked_in`, `img`) VALUES
(1, 'dfg', '', '', '', '', '0', '', 'sdf', '', ''),
(1, 'dfg', '', '', '', '', '78', '', 'sdf', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`img_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `img_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
