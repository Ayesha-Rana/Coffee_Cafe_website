-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2024 at 06:48 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'ayeshamanzoor021@gmail.com', 'ayesha1122'),
(2, 'ayeshrana021@gmail.com', 'ayesharana1122');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `image`, `quantity`) VALUES
(7, 'Traditional <strong>PeRU</strong>', 20.00, 'image/1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `checkout_table`
--

CREATE TABLE `checkout_table` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `total_price` decimal(10,2) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `checkout_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_name` varchar(50) DEFAULT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_name`, `customer_email`, `customer_id`, `password`) VALUES
('ayesha', 'asho8331@gmail.com', 1, '12345'),
('laiba', 'laiba@gmail.com', 4, '2233'),
('aina', 'aina123@gmail.com', 5, '3333'),
('admin', 'rishiasho1528@gmail.com', 6, '234ddee'),
('Ayesha', 'arina8331@gmail.com', 11, '$2y$10$AcrX0A2sS1GgERGsDHvAxO7'),
('laiba', 'laiba55@gmail.com', 12, '$2y$10$uFfBll2pKo7UeI3l8Tb5IOm'),
('ayesha', 'sweethome3.2.2018@gmail.com', 13, '827ccb0eea8a706c4c34a16891f84e');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `method` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `total_products` text NOT NULL,
  `total_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `number`, `email`, `method`, `city`, `country`, `total_products`, `total_price`) VALUES
(1, 'Ayesha', '0948038034', 'sweethome3.2.2018@gmail.com', 'cash on delivery', 'sahiwal', 'pakistan', 'Traditional <strong>NiCARAGuA</strong>  (3) , Traditional <strong>ETHiOPiA</strong>  (1) ', 85.00),
(2, 'laiba', '45769870980', 'rishiasho1528@gmail.com', 'credit cart', 'sahiwal', 'pakistan', 'Traditional <strong>ETHiOPiA</strong>  (1) ', 25.00),
(3, 'saniya', '03786756453', 'ayeshamanzoor021@gmail.com', 'cash on delivery', 'sahiwal', 'pakistan', 'Traditional <strong>ETHiOPiA</strong>  (1) ', 25.00),
(4, 'Ayesha Manzoor', '02673567543', 'saweranayyab07@gmail.com', 'credit cart', 'sahiwal', 'pakistan', 'Traditional <strong>ETHiOPiA</strong> (4) ', 100.00),
(5, 'Laraib', '03115576543', 'sweethome3.2.2018@gmail.com', 'paypal', 'sahiwal', 'pakistan', 'Traditional <strong>CoLUMBiA</strong> (1) ', 29.00);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `location` varchar(50) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `contact`, `location`, `reg_date`) VALUES
(1, 'Ayesha Manzoor', 'asho8331@gmail.com', '0305 4577888', 'pakistan', '2024-05-27 13:49:30'),
(8, 'saniya', 'sweethome3.2.2018@gmail.com', '0305 4577888', 'pakistan', '2024-05-27 14:44:40'),
(9, 'saniya', 'sweethome3.2.2018@gmail.com', '0305 4577888', 'pakistan', '2024-05-27 14:45:08'),
(10, 'laiba', 'sweethome3.2.2018@gmail.com', '03054577888', 'sahiwal', '2024-05-28 08:26:37'),
(11, 'sawera', 'saweranayyab07@gmail.com', '03054577888', 'sahiwal', '2024-05-28 12:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`) VALUES
(1, 'Traditional <strong>PeRU</strong>', 20.00, 'image/1.png'),
(2, 'Traditional <strong>ETHiOPiA</strong>', 25.00, 'image/2.png'),
(3, 'Traditional <strong>CoLUMBiA</strong>', 29.00, 'image/3.png'),
(4, 'Traditional <strong>NiCARAGuA</strong>', 20.00, 'image/4.png'),
(5, 'Traditional <strong>PeRU</strong>', 20.00, 'image/1.png'),
(6, 'Traditional <strong>ETHiOPiA</strong>', 25.00, 'image/2.png'),
(7, 'Traditional <strong>CoLUMBiA</strong>', 29.00, 'image/3.png'),
(8, 'Traditional <strong>NiCARAGuA</strong>', 20.00, 'image/4.png');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(6) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `description`, `image`) VALUES
(1, 'Tea Lover', 'Explore a world of soothing teas, each blend curated to perfection for the tea enthusiast.', 'images/m2.jpg'),
(2, 'Coffee Lover', 'Indulge in the rich aroma and bold flavors of our specialty coffee creations.', 'images/m1.jpg'),
(3, 'Casual Snacks', 'Quench your thirst with our refreshing selection of casual drinks, perfect for any occasion.', 'images/m6.jpg'),
(4, 'Chocolates', 'Indulge in a variety of rich and creamy chocolates for any sweet tooth.', 'images/m5.jpg'),
(5, 'Chocolate Bars', 'Enjoy our selection of handcrafted chocolate bars.', 'images/m8.jpg'),
(6, 'Chocolate Cakes', 'Savor our delicious chocolate cakes, perfect for celebrations.', 'images/m7.jpg'),
(7, 'Casual Snacks', 'A delightful array of casual snacks to satisfy your cravings.', 'images/m4.jpg'),
(8, 'Casual Snacks', 'Our casual snacks offer a quick and tasty treat for any time.', 'images/m3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`) VALUES
(5, 'ayesha', '1234'),
(6, 'laiba', '420');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_table`
--
ALTER TABLE `checkout_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `checkout_table`
--
ALTER TABLE `checkout_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
