-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 04:46 PM
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
-- Database: `reviews`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(50) NOT NULL,
  `comment` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `review_id` int(50) NOT NULL,
  `role` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `review` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `stars` int(10) NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `viewed` varchar(11) NOT NULL,
  `reply` varchar(50) NOT NULL,
  `parent_review_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `date`, `time`, `review`, `stars`, `email`, `name`, `title`, `viewed`, `reply`, `parent_review_id`) VALUES
(2, '2023-10-17', '05:27:00', 'sdfgfsgsdfgfsdgfgdgdsgdgg', 2, 'mubvumbigenius01@gmail.comgdgdg', 'Genius Mubvumbi', 'hivhvhhwrfgsdg', '1', 'heyaaaa', ''),
(3, '2023-10-17', '15:05:13', 'fsdfsdfsdfsdfsdfsd', 4, 'mubvumbigenius01@gmail.com', 'Deon Chiruka', 'sdfsdf', '0', 'heyyaa', ''),
(4, '2023-10-17', '15:05:13', 'fsdfsdfsdfsdfsdfsd', 4, 'mubvumbigenius01@gmail.com', 'Deon Chiruka', 'sdfsdf', '0', '', ''),
(5, '2023-10-17', '15:05:13', 'fsdfsdfsdfsdfsdfsds', 4, 'mubvumbigenius01@gmail.coms', 'Deon Chirukas', 'sdfsdfs', '0', '', ''),
(6, '2023-10-17', '15:05:13', 'fsdfsdfsdfsdfsdfsdsdfgdfg', 4, 'mubvumbigenius01@gmail.comsfgdfg', 'Deon Chirukasfgf', 'sdfsdfsgdfgdfg', '0', '', ''),
(7, '2023-10-17', '15:05:13', 'dgggdgdsfgdgdfgdfgdf', 4, 'mubvumbigenius01@gmail.comsfgdfg', 'Deon Chirukasfgf', 'dg', '0', '', ''),
(8, '2023-10-17', '15:05:13', 'dgggdgdsfgdgdfgdgdfgdfgdfgd', 4, 'mubvumbigeniusfgfsdgdsfgdfs01@gmail.comsfgdfgfsdfs', 'Deon Chirukasfgf', 'dgdsdfd', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
