
-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `product` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_type` varchar(100) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



INSERT INTO `product` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`,`item_type`,`item_register`) VALUES
(1, 'seeds', 'Cotton Seed Kaveri ATM BG-2',730.00, './images/cotton1.jpeg','cotton','2020-11-11 11:08:57'), -- NOW()
(2, 'seeds', 'Cotton Seed Ankur Suvarna BG-2', 745.00, './images/cotton2.jpg','cotton','2020-11-11 11:08:57'),
(3, 'seeds', 'Cotton Seed Bayer Surpass BG-2', 735.00, './images/cotton3.jpg','cotton', '2020-11-11 11:08:57'),
(4, 'seeds', 'Cotton Seed Chaithanya Mahyco BG-2', 736.00, './images/cotton4.jpg', 'cotton','2020-11-11 11:08:57'),
(5, 'seeds', 'Cotton Seed Green Gold kuber BG-2', 750.00, './images/cotton5.jpg','cotton', '2020-11-11 11:08:57'),
(6, 'seeds', 'Cotton Seed Green Gold Vithal BG-2', 734.00, './images/cotton6.jpg', 'cotton','22020-11-11 11:08:57'),
(7, 'seeds', 'Cotton Seed kaveri jaadoo BG-2', 723.00, './images/cotton7.png','cotton', '2020-11-11 11:08:57'),
(8, 'seeds', 'Cotton Seed Mahyco 7351 BG-2', 745.00, './images/cotton8.png','cotton', '2020-11-11 11:08:57'),
(9, 'seeds', 'Cotton Seed Mahyco Nikki plus BG-2', 734.00, './images/cotton9.jpg','cotton', '2020-11-11 11:08:57'),
(10, 'seeds', 'Cotton Seed Monsanto Paras Brahma BG-2', 751.00, './images/cotton10.jpg','cotton', '2020-11-11 11:08:57'),
(11, 'seeds', 'Cotton Seed Nuziveedu Bhakti NCS BG-2', 732.00, './images/cotton11.jpg', 'cotton','2020-11-11 11:08:57'),
(12, 'seeds', 'Cotton Seed Nuziveedu Mallika NCS BG-2', 740.00, './images/cotton12.jpg', 'cotton','2020-11-11 11:08:57'),
(13, 'seeds', 'Cotton Seed Rasi 602 BG-2', 732.00, './images/cotton13.jpg', 'cotton','2020-11-11 11:08:57'),
(14, 'seeds', 'Cotton Seed Rasi 659 BG-2', 734.00, './images/cotton14.jpg', 'cotton','2020-11-11 11:08:57'),
(15, 'seeds', 'Cotton Seed Rasi 776 BG-2', 742.00, './images/cotton15.jpg', 'cotton','2020-11-11 11:08:57'),
(16, 'seeds', 'Bengal Gram(chana)', 1250.00, './images/fc1.jpg', 'field','2020-11-11 11:08:57'),
(17, 'seeds', 'Bengal Gram(chana)', 200.00, './images/fc2.jpg', 'field','2020-11-11 11:08:57'),
(18, 'seeds', 'Corn Flower Seed', 70.00, './images/fr1.jpg', 'flower','2020-11-11 11:08:57'),
(19, 'pesticides', 'Blue Sticky Trap(6*8 inch)', 350.00, './images/bc.jpg', 'biological','2020-11-11 11:08:57');

-- --------------------------------------------------------



CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,

  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Daily', 'Tuition', '2020-03-28 13:07:17'),
(2, 'Akshay', 'Kashyap', '2020-03-28 13:07:17');



CREATE TABLE `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`item_id`);


ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);


ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `product`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;


ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;