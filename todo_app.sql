-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 04:55 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todo_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_color` varchar(50) NOT NULL,
  `cat_create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_color`, `cat_create_at`) VALUES
(1, 'COMPANY', '#AB418B', ''),
(2, 'FAMILY', '#7DAB88', ''),
(3, 'FRIENDS', '#AB4C41', ''),
(4, 'dasdasd', '', '2017-02-07 02:53:17pm'),
(5, 'dasdasdas', '#AB5C82', '2017-02-07 02:56:44pm'),
(6, 'dasdasd', '#9173FF', '2017-02-07 02:56:55pm');

-- --------------------------------------------------------

--
-- Table structure for table `todo_items`
--

CREATE TABLE `todo_items` (
  `todo_item_id` int(11) NOT NULL,
  `todo_item_title` varchar(50) NOT NULL,
  `todo_item_description` longtext NOT NULL,
  `cat_id` int(11) NOT NULL,
  `cat_color` varchar(50) NOT NULL,
  `create_at` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `todo_items`
--

INSERT INTO `todo_items` (`todo_item_id`, `todo_item_title`, `todo_item_description`, `cat_id`, `cat_color`, `create_at`) VALUES
(18, 'dasdasd', 'dasdasd\r\nasdasdasd\r\nasdasdsa\r\ndasdasd', 6, '#9173FF', '2017-02-07 01:51:38pm'),
(20, '3dasdas', 'dasdasd13131', 3, '#AB4C41', '2017-02-07 01:51:50pm'),
(21, 'asdasd', 'dasdasd', 5, '#AB5C82', '2017-02-07 02:13:06pm'),
(22, 'dasdasd', 'dasdasd', 2, '#7DAB88', '2017-02-07 02:13:22pm'),
(24, 'dasdasd', 'dasdasdas', 1, '#AB418B', '2017-02-07 02:15:11pm'),
(27, 'dasdasdas', 'dsadasdas', 1, '#AB418B', '2017-02-07 02:52:41pm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `todo_items`
--
ALTER TABLE `todo_items`
  ADD PRIMARY KEY (`todo_item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `todo_items`
--
ALTER TABLE `todo_items`
  MODIFY `todo_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
