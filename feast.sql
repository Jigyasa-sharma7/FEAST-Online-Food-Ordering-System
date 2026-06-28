-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 28, 2026 at 02:57 PM
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
-- Database: `feast`
--

-- --------------------------------------------------------

--
-- Table structure for table `food_items`
--

CREATE TABLE `food_items` (
  `Id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(100) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_items`
--

INSERT INTO `food_items` (`Id`, `name`, `description`, `price`, `image_url`) VALUES
(1, 'idli', 'Fresh idli with yummy chutney and sambar', 489, 'idli.jpg'),
(2, 'Burger', 'juicy burger with fresh vegetables', 50, 'burger.jpg'),
(3, 'Samosa', 'Crunchy Samosa with red chutney', 99, 'samosa.jpg'),
(4, 'Manchurian', 'Spicy Manchurian garnished with some spring onions', 199, 'manchurian.jpg'),
(5, 'golgappee', 'Golgappee with some curd and red chutney ', 67, 'golgappee.jpg'),
(6, 'Momos', 'Steam Momos with spicy chutney', 70, 'momos.jpg'),
(7, 'kulche', 'kulche with some spicy chole', 40, 'kulche.jpg'),
(8, 'pronthe', 'surinder ke pronthe', 50, 'prontha.jpg'),
(9, 'desserts', 'Hazelnut icecream with some cherry on Top', 190, 'desserts.jpg'),
(10, 'biryani', 'Biryani with some Basmati and juicy Chicken Wings', 350, 'biryani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_id` int(100) NOT NULL,
  `Full_name` text NOT NULL,
  `Phone_no` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Pay_mode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_id`, `Full_name`, `Phone_no`, `Address`, `Pay_mode`) VALUES
(1, 'jigyasa', 7696296271, 'jalandhar', 'COD'),
(2, 'anmol', 7437875, 'patiala', 'COD'),
(3, 'anmol', 7437875, 'patiala', 'COD'),
(4, 'anish', 765453, 'pagalkhana', 'COD'),
(5, 'jigyasa', 756353, 'jalandhar', 'COD'),
(6, 'shiv', 6752624126252, 'patiala', 'COD'),
(7, 'shiv', 87253654, 'patiala', 'COD'),
(8, 'shiv', 6752624126252, 'patiala', 'COD'),
(9, 'ujwal', 123456789, 'asdfggh', 'COD'),
(10, 'vikram', 9876543217, 'patiala', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `full_name` varchar(128) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `full_name`, `email`, `password`) VALUES
(1, 'jigyasa', 'jigyasapb0729@gmail.com', '$2y$10$lyPdfbiaMkMb4o3aDtoCo.rkw6OnDxKfqbNJCUIn8RXbaCFkpkqyK'),
(2, 'diya', 'diya@gmail.com', '$2y$10$0GGJbD8CCHU1rCSYI0346OPuzMNIPy/iU/zLBPVBanUtkuaeDq58G'),
(3, 'anju', 'anjusharma@gmail.com', '$2y$10$d1LffSggrpGsfAAxz2GJc.MjMJeo2SAUfthWTcU033pqUoXs5N04u'),
(4, 'anil', 'anil@gmail.com', '$2y$10$LKPZzcek5E6Uz5s0bbx4juhBTPiKuG7UUaqtkOlyY4VE8sFMd9C4e'),
(5, 'ansh', 'ansh@gmail.com', '$2y$10$.B13kMpGR662lGZBQMNnveK.ygdLPdYAxkTkSP7dMh4OJFJEGoXJ6'),
(6, 'ansh', 'ansh02@gmail.com', '$2y$10$EiXoYTtcrXQbmRB3kxdei.Z4Vr37/VVgC19DMDwWa2Gmiy.R20HtS'),
(7, 'aman', 'aman@gmail.com', '$2y$10$LslW2kS1VPhCKghN//FkiejjoeJH27MebvIaqo3Z6gwT.Mk8DiDDy'),
(8, 'bhawna', 'bhawna@gmail.com', '$2y$10$tDoHr6Xdo9IGIT6NIr9miug33czyBj9Z0B4HIrmjwK9wfVfb3sg12'),
(9, 'anmol', 'anmol@gmail.com', '$2y$10$ouSczqd5SOJGOPYLWZYQqOOWN1KLGXxvmsCzC8RSAPZXj8oFDl2HG'),
(10, 'upma', 'upma@gmail.com', '$2y$10$0l4yVqm6nLFpxJzBeERiiOFYrOjzO850D6d5ZqlLU.0cudosJjYYK'),
(11, 'anish', 'anish@gmail.com', '$2y$10$1zNfnAv6dUn1CuV6N.pwee4BNobwQp9eFsBlAhJQuZ14tJsZgGfba'),
(12, 'vikram', 'vikram@gmail.com', '$2y$10$iXH/6G0W3Uc465tVm0wsze1tKNdKQ22Fs/oh3h.aPkPwD0.6i2G6S'),
(13, 'shiv', 'shiv@gmail.com', '$2y$10$qLqopKMHwF59Mo0tDXki3.LRNb9Qiy49a3vOa4kny7EN7pil1prai'),
(14, 'Ujwal', 'ujwal123@gmail.com', '$2y$10$2S3t2av7eBDE11PqvXHxMOEGbojRk4drK8YBICdB9OJ93Ngfw7GyC'),
(15, 'nimrat', 'nimrat123@gmail.com', '$2y$10$AQr3BRy74Y105zamlceUG.kykHrWcDGaJtRarVp1WvOXdyKLGTPeK'),
(16, 'vikram', 'vikram07@gmail.com', '$2y$10$vfiQxohaPcaY3yfkJgFuYuYG1ejK4oNTXkoMkOHy.qzuyQz2b4f6O');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `Order_id` int(100) NOT NULL,
  `Item_name` text NOT NULL,
  `Price` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`Order_id`, `Item_name`, `Price`, `Quantity`) VALUES
(1, 'manchurian', 150, 2),
(1, 'desserts', 190, 3),
(2, 'manchurian', 150, 3),
(2, 'noodles', 100, 1),
(3, 'samosa', 15, 2),
(3, 'wrap', 40, 2),
(3, 'noodles', 100, 1),
(4, 'manchurian', 150, 2),
(4, 'wrap', 40, 1),
(4, 'samosa', 15, 3),
(5, 'manchurian', 150, 3),
(5, 'desserts', 190, 2),
(5, 'momos', 70, 1),
(6, 'noodles', 100, 2),
(6, 'manchurian', 150, 1),
(7, 'chicken', 380, 3),
(7, 'burger', 50, 1),
(8, 'noodles', 100, 3),
(8, 'desserts', 190, 2),
(9, 'noodles', 100, 1),
(9, 'desserts', 190, 1),
(10, 'noodles', 100, 1),
(10, 'desserts', 190, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food_items`
--
ALTER TABLE `food_items`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food_items`
--
ALTER TABLE `food_items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
