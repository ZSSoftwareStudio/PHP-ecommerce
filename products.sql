-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 10:53 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `link` varchar(2083) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `price`, `link`) VALUES
(1, 'Orange', 1, 'https://i.pinimg.com/736x/05/79/5a/05795a16b647118ffb6629390e995adb.jpg'),
(2, 'Lichi', 3, 'https://i0.wp.com/www.health-yogi.com/wp-content/uploads/2019/06/IMG_20190627_042929.jpg'),
(3, 'Strawberry', 2, 'https://upload.wikimedia.org/wikipedia/commons/7/7e/Strawberry_BNC.jpg'),
(4, 'Mango', 4, 'https://www.simplyrecipes.com/wp-content/uploads/2006/08/how-to-cut-mango-vertical-600.jpg'),
(5, 'Water Melon', 5, 'https://lh3.googleusercontent.com/proxy/hkr_ve_-4Lf1Z2ZAht7bziDP9o1RtOKw1_0anCOWbIIwlithwAdTvbbNawCedj0rYDexenVRI--mLEFKt3RphU8vrZd8OIVYJkg2tzgcnUv-Dgtnbzbn9zIzFFQcaCc'),
(6, 'Banana', 1, 'https://cdn.mos.cms.futurecdn.net/42E9as7NaTaAi4A6JcuFwG-320-80.jpg'),
(7, 'Tomato', 4, 'https://img.freepik.com/free-photo/one-fresh-red-tomato-isolated-white_1205-548.jpg?size=626&ext=jpg'),
(8, 'Pineapple', 3, 'https://www.plantgrower.org/uploads/6/5/5/4/65545169/published/pineapple.jpg?1516498929'),
(9, 'Letuce', 3, 'https://image.shutterstock.com/image-photo/fresh-wet-green-lettuce-organic-260nw-673438291.jpg'),
(10, 'Jackfruit', 7, 'https://upload.wikimedia.org/wikipedia/commons/b/ba/Jackfruit_hanging.JPG'),
(11, 'Blueberry', 3, 'https://image.shutterstock.com/image-photo/blueberries-isolated-260nw-722035450.jpg'),
(12, 'Raspberry', 4, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/69/Raspberries05.jpg/1200px-Raspberries05.jpg'),
(13, 'Papaya', 7, 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Papaya_cross_section_BNC.jpg/220px-Papaya_cross_section_BNC.jpg'),
(14, 'Apple', 2, 'https://i2.wp.com/ceklog.kindel.com/wp-content/uploads/2013/02/firefox_2018-07-10_07-50-11.png'),
(15, 'Onions', 2, 'https://images-na.ssl-images-amazon.com/images/I/81UeYuulNjL._SL1500_.jpg'),
(16, 'Grapes', 4, 'https://pictures.attention-ngn.com/portal/185/191463/products/1499209833.7975_115_o.jpg'),
(17, 'Lemon', 3, 'https://static.toiimg.com/photo/68215164.cms'),
(18, 'Cherry', 8, 'https://upload.wikimedia.org/wikipedia/commons/b/bb/Cherry_Stella444.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
