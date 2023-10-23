-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2023 at 05:11 PM
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
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `review` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
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
(2, '2023-10-17', '05:27:00', 'I recently dined at this restaurant and had an absolutely wonderful experience. The ambiance was warm and inviting, the service was exceptional, and the food was out of this world. Each dish was beautifully presented and bursting with flavor. I highly recommend trying their signature dishes – you won\'t be disappointed!', 2, 'mubvumbigenius01@gmail.comgdgdg', 'Siyathandaza', 'hivhvhhwrfgsdg', '1', 'heyaaaa', ''),
(3, '2023-10-17', '15:05:13', 'This restaurant is a hidden gem! The menu offers a diverse range of dishes, all expertly prepared with fresh, high-quality ingredients. The flavors are rich and authentic, and the portion sizes are generous. The staff is friendly and attentive, making sure your dining experience is nothing short of perfect. Don\'t miss out on their desserts – they are heavenly!', 4, 'mubvumbigenius01@gmail.com', 'Deon Chiruka', 'sdfsdf', '0', 'heyyaa', ''),
(4, '2023-10-17', '15:05:13', 'I took my partner here for a special occasion, and it exceeded our expectations. The dim lighting and cozy atmosphere set the perfect mood for a romantic evening. The staff went above and beyond to make us feel special, and the food was simply divine. The wine selection was impressive, complementing our meal beautifully. This is now our go-to place for romantic dinners.', 4, 'mubvumbigenius01@gmail.com', 'Deon Chiruka', 'sdfsdf', '0', '', ''),
(5, '2023-10-17', '15:05:13', 'Our family had a fantastic time at this restaurant. Not only is the menu diverse enough to cater to all tastes, but the staff was also incredibly accommodating to our children\'s needs. The kids\' menu had a variety of options, and our little ones devoured their meals. The adults enjoyed a delightful array of dishes, and we all left with full stomachs and big smiles.', 4, 'mubvumbigenius01@gmail.coms', 'Deon Chirukas', 'sdfsdfs', '0', '', ''),
(6, '2023-10-17', '15:05:13', 'From the moment we walked in, the service was impeccable. The waitstaff was knowledgeable and provided excellent recommendations. The food was a true delight to the senses – each bite was a burst of exquisite flavors. The chef\'s creativity shines through in every dish. This place is a must-visit for food enthusiasts.', 4, 'mubvumbigenius01@gmail.comsfgdfg', 'Deon Chirukasfgf', 'sdfsdfsgdfgdfg', '0', '', ''),
(7, '2023-10-17', '15:05:13', 'This restaurant is a true oasis for food lovers. The menu is a culinary journey through flavors and textures. The attention to detail in every dish is remarkable. The ingredients are fresh, and the presentation is artful. Whether you\'re a meat lover, vegetarian, or vegan, there are plenty of options to satisfy your palate. Prepare for a taste sensation unlike any other!', 4, 'mubvumbigenius01@gmail.comsfgdfg', 'Deon Chirukasfgf', 'dg', '0', '', ''),
(8, '2023-10-17', '15:05:13', 'I recently celebrated my anniversary at this restaurant, and it was a memorable experience. The staff was incredibly accommodating, making our evening truly special. The menu offers a variety of dishes, from traditional favorites to unique culinary creations. Each dish was beautifully crafted, and the flavors were outstanding. The atmosphere was intimate and perfect for a romantic celebration.', 4, 'mubvumbigeniusfgfsdgdsfgdfs01@gmail.comsfgdfgfsdfs', 'Deon Chirukasfgf', 'dgdsdfd', '0', '', ''),
(9, '2023-10-21', '14:01:00', 'Dining at this restaurant felt like embarking on a gastronomic adventure. The menu is innovative and constantly evolving, showcasing the chef\'s creativity and passion for food. The fusion of flavors and ingredients is bold and exciting. The staff is well-versed in the menu, providing detailed descriptions of each dish. If you\'re looking for a dining experience that challenges your taste buds, this is the place to be.', 4, 'skygemx1@gmail.com', 'Deon Chiruka', 'fgfd', '', '', ''),
(14, '2023-10-21', '15:20:23', 'Prepare your taste buds for a treat! The culinary ', 4, 'terter@gmail.com', 'rtrete', 'rtert', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
