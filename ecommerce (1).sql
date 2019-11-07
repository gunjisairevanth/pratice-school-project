-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 30, 2019 at 01:30 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--
CREATE DATABASE IF NOT EXISTS `ecommerce` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `ecommerce`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `user_id` int(10) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `token` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`user_id`, `user_email`, `user_pass`, `token`) VALUES
(1, 'awpareshan@gmail.com', 'wali', NULL),
(2, 'saima@yahoo.com', 'khan', NULL),
(3, 'revanth@eunimart.com', 'root', '0a7c0aaf4dbc7143bc274fa8b761da00');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(8, 'Fresh vegetables'),
(9, 'Fresh meat');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(10) NOT NULL,
  `order_id` text,
  `cust_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `order_id`, `cust_id`) VALUES
(16, '13', 1, '539fd53b59e3bb12d203f45a912eeaf2', 13),
(19, '13', 6, 'd759175de8ea5b1d9a2660e45554894f', 13),
(20, '13', 1, 'd759175de8ea5b1d9a2660e45554894f', 13),
(23, '13', 5, 'd759175de8ea5b1d9a2660e45554894f', 13),
(24, '13', 1, 'd759175de8ea5b1d9a2660e45554894f', 13),
(25, '13', 8, '92c8c96e4c37100777c7190b76d28233', 13),
(26, '13', 5, '92c8c96e4c37100777c7190b76d28233', 13);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` varchar(300) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(41, 'Fresh Meat'),
(39, 'Fruits'),
(40, 'Grocery'),
(38, 'Vegetables');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(10) NOT NULL,
  `customer_ip` varchar(255) NOT NULL,
  `customer_name` text NOT NULL,
  `customer_email` varchar(100) NOT NULL,
  `customer_pass` varchar(100) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `token` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_ip`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `token`) VALUES
(6, '119.157.220.50', 'Abdul Wali', 'awpareshan@gmail.com', '902ada0e6da1b83b32470f8c9469a5c0', 'Pakistan', 'Karachi', '3243423', 'dfads', 'abdul-wali-ustaad1.jpg', NULL),
(11, '', 'Sai', '6456456.sairevanth@gmail.com', 'e1e1d3d40573127e9ee0480caf1283d6', 'Israel', 'Hyderabad', '9603354001', 'Banjara hills', 'Untitled design.png', NULL),
(12, '', 'Sai', 'weF6456456.sairevanth@gmail.com', '6ce22b387783a421a2d13d5dce477b48', 'Israel', 'Hyderabad', '9603354001', 'Banjara hills', 'Untitled.png', NULL),
(13, '', 'Sai Revanth', 'gunji.sairevanth@gmail.com', '202cb962ac59075b964b07152d234b70', 'India', 'Hyderabad', '9603354001', 'Banjara hillss', '10001001_5-fresho-chicken-breast-boneless.jpg', '1e47450850daf73f428538c6d9ca9dc6');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(11) NOT NULL,
  `emp_name` varchar(150) DEFAULT NULL,
  `emp_email` varchar(150) DEFAULT NULL,
  `emp_password` varchar(150) DEFAULT NULL,
  `token` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `emp_name`, `emp_email`, `emp_password`, `token`) VALUES
(2, 'G Sai Revanth', 'revanth.gunji@eunimart.com', '123456', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(100) NOT NULL,
  `p_id` int(100) NOT NULL,
  `c_id` int(100) NOT NULL,
  `qty` int(100) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `status` text NOT NULL,
  `order_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `p_id`, `c_id`, `qty`, `invoice_no`, `status`, `order_date`) VALUES
(5, 8, 5, 1, 462643381, 'Completed', '0000-00-00'),
(6, 6, 5, 3, 481994459, 'Completed', '2014-07-21'),
(7, 9, 0, 1, 1545302558, 'Completed', '2014-07-23'),
(8, 5, 0, 2, 705705316, 'in Progress', '2014-08-08'),
(9, 7, 6, 1, 1935681132, 'in Progress', '2014-08-08'),
(10, 9, 6, 3, 1817786416, 'in Progress', '2014-08-08'),
(11, 5, 6, 2, 423122154, 'in Progress', '2014-08-08'),
(12, 8, 6, 4, 496641685, 'in Progress', '2014-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `order_id` text NOT NULL,
  `trx_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `currency` text NOT NULL,
  `status` text,
  `payment_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `order_status` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `amount`, `customer_id`, `order_id`, `trx_id`, `currency`, `status`, `order_status`) VALUES
(28, 32, 13, '539fd53b59e3bb12d203f45a912eeaf2', '20190930111212800110168569000890747', 'INR', 'TXN_SUCCESS', 'approve'),
(26, 205, 13, 'd759175de8ea5b1d9a2660e45554894f', '20190930111212800110168184600913923', 'INR', 'TXN_SUCCESS', 'approve'),
(27, 4097, 13, '92c8c96e4c37100777c7190b76d28233', '20190930111212800110168114400888445', 'INR', 'TXN_SUCCESS', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(15, 38, 8, 'Fresho Ladies Finger,', 45, 'Ladies finger is a green vegetable with a tip at the end and a lighter green head, which is inedibe and to be thrown away. It tastes mild and slightly grassy. ', '10000142_16-fresho-ladies-finger (1).jpg', 'Fresho Ladies Finger,Ladies Finger,vegetables'),
(16, 38, 8, 'Fresho Tomato', 32, 'Tomato Hybrids are high-quality fruits compared to desi, local tomatoes. They contain numerous edible seeds and are red in colour due to lycopene, an anti-oxidant. ', '10000200_17-fresho-tomato-hybrid.jpg', 'vegetables.Fresho Tomato,Tomato,Tomato Hybrids'),
(17, 38, 8, 'Fresho Onion, 1 kg', 52, 'Onion is a vegetable which is almost like a staple in Indian food. This is also known to be one of the essential ingredients of raw salads. They come in different colours like white, red or yellow and are quite in demand in cold salads and hot soups. You can dice, slice or cut it in rings and put it in burgers and sandwiches. Onions emit a sharp flavour and fragrance once they are fried; it is due to the sulphur compound in the vegetable.', '10000148_24-fresho-onion.jpg', 'Fresho Onion,Onion,vegetables'),
(18, 38, 8, 'Fresho Potato, 1 kg', 16, 'Fresho Potatoes are nutrient-dense, non-fattening and have reasonable amount of calories. Include them in your regular meals so that the body receives a good supply of carbohydrates, dietary fibers and essential minerals such as copper, magnesium, and iron. In India, potatoes are probably the second-most consumed vegetables after onions.', '10000159_25-fresho-potato.jpg', 'Fresho Potato,Potato'),
(19, 41, 8, 'Fresho Capsicum - Green, 250 g', 16, 'Leaving a moderately pungent taste on the tongue, Green capsicums, also known as green peppers are bell shaped, medium-sized fruit pods. They have thick and shiny skin with a fleshy texture inside. ', '10000068_22-fresho-capsicum-green.jpg', 'Fresho Capsicum  Green,Fresho Capsicum'),
(20, 38, 8, 'Fresho Carrot - Ooty, 500 g', 25, 'A popular sweet-tasting root vegetable, Carrots are narrow and cone shaped. They have thick, fleshy, deeply colored root, which grows underground, and feathery green leaves that emerge above the ground. While these greens are fresh tasting and slightly bitter, the carrot roots are crunchy textured with a sweet and minty aromatic taste. Fresho brings you the flavour and richness of the finest bright orange, crispy and juicy carrots. ', '10000142_16-fresho-ladies-finger.jpg', 'Fresho Carrot,Carrot,vegetables'),
(21, 38, 8, 'Fresho Lemon, 100 g', 9, 'With a segmented flesh that has a unique pleasant aroma and a strong sour taste, lemons are round/oval and have a yellow, texturized external peel. ', '10000126_16-fresho-lemon.jpg', 'Fresho Lemon,Lemon,vegetables'),
(22, 38, 8, 'Fresho Sponge Gourd, 1 kg', 69, 'With a smooth, green skin and ridges, sponge gourd has a creamy-white flesh with a mild, zucchini-like sweet taste and a silky texture. Mature fruits are fibrous, bitter and brown.', '30000583_3-fresho-sponge-gourd.jpg', 'Fresho Sponge Gourd,vegetables,Sponge Gourd'),
(23, 38, 8, 'Fresho Parwal, 500 g', 36, 'With a yellowish green skin, Parwal is short, slightly pointed at one end and blunt on the other. The flesh of this vegetable is creamy white with small and firm seeds. \r\nIt has a bland flavour, allowing it to absorb a variety of flavours from spices while cooking. ', '10000366_9-fresho-parwal.jpg', 'Fresho Parwal,vegetables'),
(24, 39, 8, 'Fresho Apple - Shimla, 4 pcs (Approx.550 g - 650 g)', 54, 'Considered as most commonly grown apples in India, Shimla apples have a light red skin, juicy and crunchy flesh. We source the best apples with residue and wax free peel from the trusted growers.', '40033819_22-fresho-apple-shimla.jpg', 'apple'),
(25, 41, 9, 'Fresho Chicken Mixed - Boneless, 1 kg', 319, 'Fresho Meats is our in house brand of fresh meat, poultry and seafood. We take utmost care in selecting the best suppliers to provide you with high quality and succulent products. Every product is stored in our cold storage right until your doorstep ensuring freshness and utmost hygiene.\r\n Additionally, every product is packed using food grade plastic which provides a nourishing and wholesome environment.', '10001013_4-fresho-chicken-mixed-boneless.jpg', 'Fresho Chicken Mixed,chicken'),
(26, 41, 9, 'Fresho Chicken Breast - Boneless, 1 kg', 309, 'Fresho Meats is our in house brand of fresh meat, poultry and seafood. We take utmost care in selecting the best suppliers to provide you with high quality and succulent products. Every product is stored in our cold storage right until your doorstep ensuring freshness and utmost hygiene. Additionally, every product is packed using food grade plastic which provides a nourishing and wholesome environment. \r\n\r\nAll our chicken is succulent Halal Meat. Chicken breast boneless is the succulent white meat taken from the beast quarter that is, the tenderloin strips of the upper muscle portion of a chicken. Chicken breast boneless is the least fatty portion of the chicken. ', '10001001_5-fresho-chicken-breast-boneless.jpg', 'Chicken Breast,chicken'),
(27, 41, 9, 'Fresho Chicken Drumstick - Without Skin, 500 g', 319, 'Fresho chicken drumstick without skin can be prepared in various ways to make for delicious, nutritious and complete meals. This low-fat meat is good for your health since it is packed hygienically and stored at the correct temperature to ensure freshness and taste.\r\n\r\nIn Fresho, we take utmost care in selecting the best suppliers to provide you with high quality and succulent products. Every product is stored in our cold storage right until your doorstep ensuring freshness and utmost hygiene. Additionally, every product is packed using food grade plastic which provides a nourishing and wholesome environment. All our Chicken is succulent Halal meat.', '10000904_7-fresho-chicken-drumstick-without-skin.jpg', 'Fresho Chicken Drumstick,Chicken ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_title` (`cat_title`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
