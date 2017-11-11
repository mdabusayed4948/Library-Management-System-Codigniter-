-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2017 at 05:15 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `l_member`
--

CREATE TABLE `l_member` (
  `id` int(10) NOT NULL,
  `m_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `join_date` date DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `l_member`
--

INSERT INTO `l_member` (`id`, `m_name`, `email`, `mobile`, `gender`, `join_date`, `address`) VALUES
(1, 'Sayed', 'sayed@gmail.com', '01723054948', 'Male', '2010-05-20', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `sayissue_book`
--

CREATE TABLE `sayissue_book` (
  `id` int(11) NOT NULL,
  `l_member_id` int(11) DEFAULT NULL,
  `book_id` int(11) DEFAULT NULL,
  `issue_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `remark` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sayissue_book`
--

INSERT INTO `sayissue_book` (`id`, `l_member_id`, `book_id`, `issue_date`, `return_date`, `remark`) VALUES
(1, 1, 1, '2016-12-11', '2016-12-23', 'ok'),
(2, 1, 2, '2016-12-21', '2016-12-30', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `say_role`
--

CREATE TABLE `say_role` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `say_role`
--

INSERT INTO `say_role` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'general');

-- --------------------------------------------------------

--
-- Table structure for table `say_user`
--

CREATE TABLE `say_user` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `say_user`
--

INSERT INTO `say_user` (`id`, `username`, `password`, `role_id`) VALUES
(1, 'sayed', '7821254430ae829a4f6fc0ae08fb80b5', 1);

-- --------------------------------------------------------

--
-- Table structure for table `s_book`
--

CREATE TABLE `s_book` (
  `id` int(10) NOT NULL,
  `book_name` varchar(100) DEFAULT NULL,
  `author` varchar(100) DEFAULT NULL,
  `publisher` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_book`
--

INSERT INTO `s_book` (`id`, `book_name`, `author`, `publisher`) VALUES
(1, 'Laravel', 'IDB-BISEW', 'IDB-Press'),
(2, 'PHP', 'Gilmore', 'IDB-Press');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `l_member`
--
ALTER TABLE `l_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sayissue_book`
--
ALTER TABLE `sayissue_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `say_role`
--
ALTER TABLE `say_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `say_user`
--
ALTER TABLE `say_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `s_book`
--
ALTER TABLE `s_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `l_member`
--
ALTER TABLE `l_member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `sayissue_book`
--
ALTER TABLE `sayissue_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `say_role`
--
ALTER TABLE `say_role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `say_user`
--
ALTER TABLE `say_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `s_book`
--
ALTER TABLE `s_book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
