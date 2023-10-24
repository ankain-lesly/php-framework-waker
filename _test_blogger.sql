-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 02:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_blogger`
--

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `_id` int(5) NOT NULL,
  `topic_id` varchar(50) NOT NULL,
  `topic` varchar(20) NOT NULL,
  `created_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`_id`, `topic_id`, `topic`, `created_on`) VALUES
(1, 'kasfnbfe1d343', 'Gaming', '2023-10-04 01:19:18'),
(2, 'sadfnfae1d3fd', 'Web Design', '2023-10-04 01:19:18'),
(3, 'dnfe1d343fadf', 'Football', '2023-10-04 01:19:18'),
(4, 'qurlxkasfnfe1', 'Digital Marketting', '2023-10-04 01:19:18'),
(5, 'sfnfe1asdfe34', 'Cooking', '2023-10-04 01:19:18'),
(6, 'zzeefekasfnfe', 'Groceries', '2023-10-04 01:19:18');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `_id` int(5) NOT NULL,
  `post_id` varchar(50) NOT NULL,
  `title` varchar(40) NOT NULL,
  `body` varchar(50) NOT NULL,
  `topic_id` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`_id`, `post_id`, `topic_id`, `title`, `body`, `added_on`) VALUES
(1, 'adsfedxfegbvera', 5, 'Default posts title.', 'How to cook', '2023-10-04 01:31:19'),
(2, 'edxfegbverafafd', 6, 'Default posts title.', 'Best stores to get groceries in 2024', '2023-10-04 01:31:19'),
(3, 'zzwadsfedxfegbv', 1, 'Default posts title.', 'Gaming Gear in 2024', '2023-10-04 01:31:19'),
(4, 'dxfegbverafe324', 5, 'Default posts title.', 'Best spicies to use next week', '2023-10-04 01:31:19'),
(5, 'vvadsfedxfegbve', 3, 'Default posts title.', 'Play who made thing right at the end', '2023-10-04 01:31:19'),
(6, 'fedxfegbverarrq', 3, 'Default posts title.', 'Top this players moves', '2023-10-04 01:31:19'),
(7, 'adfadsdfaefexzz', 2, 'Default posts title.', 'Get latest updates', '2023-10-04 01:40:44'),
(8, 'fdxfegbverapqes', 3, 'Default posts title.', 'Getting started', '2023-10-08 11:15:18'),
(10,'abcdfexfegbvera',  0, 'Default posts title.', '', '2023-10-08 11:24:43'),
(11,'235dafxfegbvera',  0, 'Default posts title.', '', '2023-10-08 11:24:44'),
(12,'12dafds63432era',  2, 'Default posts title.', 'Get latest updates', '2023-10-08 11:29:10'),
(13,'adxrwaqqsfedxfv',  3, 'Default posts title.', 'Build the ultimate experience', '2023-10-08 11:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `users` (
  `_id` int(5) NOT NULL PRIMARY KEY AUTO_INCREMENT,
  `user_id` varchar(50) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` int(2) NOT NULL Default 1,
  `added_on` datetime NOT NULL DEFAULT current_timestamp()
);
--
-- Indexes for dumped tables
--

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `_id`
--
ALTER TABLE `topics`
  MODIFY `_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
