-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2018 at 10:55 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Laptops', '2017-08-31 09:06:34', '2017-08-31 09:06:34'),
(6, 'Smart Phones', '2018-03-06 05:56:26', '2018-03-06 05:56:26'),
(7, 'Tablets', '2018-03-06 05:56:35', '2018-03-06 05:56:35'),
(8, 'Desktop PC', '2018-03-06 05:56:56', '2018-03-06 05:56:56');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2017_08_30_062353_create_categories_table', 1),
(8, '2017_08_31_105714_create_products_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `price`, `availability`, `image`, `created_at`, `updated_at`) VALUES
(30, 1, 'Dell Laptop', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '1500.00', 1, 'laptop-upload_1520320696.jpg', '2018-03-06 06:18:16', '2018-03-06 06:18:16'),
(31, 1, 'HP Laptop', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '1250.00', 1, 'laptop-upload_1520320731.jpg', '2018-03-06 06:18:51', '2018-03-06 06:18:51'),
(33, 6, 'HTC One', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '500.00', 1, 'smartphone-upload_1520320826.jpg', '2018-03-06 06:20:26', '2018-03-06 06:20:26'),
(34, 7, 'iPad', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '750.00', 1, 'tablet-upload_1520320865.jpg', '2018-03-06 06:21:05', '2018-03-06 06:21:05'),
(36, 1, 'Acer Laptop', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '1250.00', 1, 'laptop-upload_1520320936.jpg', '2018-03-06 06:22:16', '2018-03-06 06:22:16'),
(37, 6, 'Galaxy s5', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '650.00', 1, 'smartphone-upload_1520321073.jpg', '2018-03-06 06:24:33', '2018-03-06 06:24:33'),
(38, 7, 'Nexus 7', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '1000.00', 1, 'tablet-upload_1520321111.jpg', '2018-03-06 06:25:11', '2018-03-06 06:25:11'),
(40, 8, 'Asus Desktop', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '1500.00', 1, 'desktop-upload_1520321207.jpg', '2018-03-06 06:26:48', '2018-03-06 06:26:48'),
(41, 6, 'Samsung', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '550.00', 1, 'smartphone-upload_1520321265.jpg', '2018-03-06 06:27:45', '2018-03-06 06:27:45'),
(44, 8, 'Dell Desktop', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '1200.00', 1, 'desktop-upload_1520321734.jpg', '2018-03-06 06:35:34', '2018-03-06 06:35:34'),
(46, 8, 'HP Desktop', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '1200.00', 1, 'desktop-upload_1520321815.jpg', '2018-03-06 06:36:55', '2018-03-06 06:36:55'),
(47, 7, 'Sony Tab', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '550.00', 1, 'tablet-upload_1520321865.jpg', '2018-03-06 06:37:45', '2018-03-06 06:37:45'),
(48, 6, 'iPhone', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '1500.00', 1, 'smartphone-upload_1520321911.jpg', '2018-03-06 06:38:31', '2018-03-06 06:38:31'),
(51, 1, 'Macbook Pro', 'This is an awesome product, with lot of great features. You will able to use it many years. Every product is made at a cost and each is sold at a price. The price that can be charged depends on the market, the quality, the marketing and the segment that is targeted.', '2000.00', 1, 'laptop-upload_1520322514.jpg', '2018-03-06 06:48:34', '2018-03-06 06:48:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin@gmail.com', '$2y$10$TB7R47EhPuO2Wwp2KHn/H.u5CT1vKF9sjbHC6RwQJUvLCtP24bQv2', 'Q8ZmqgnxZxVPuyTPBbFvn18wRIJxsvpUUrkKWHxl9S3SQSvuEUuH4cztAMHB', '2017-09-01 13:27:21', '2017-09-01 13:27:21'),
(3, 'user2', 'user2@gmail.com', '$2y$10$Rme4pp5QrFfAWoAYW033X.E9oz7YUT.6kdUxXnKLBrFgpUB9nm8w2', 'v9k2ViidYw6GJfzN0jm2kOtMKe6QvS2LHgLYKX7FRJN1rAUVyTZNCUQi04HH', '2017-09-01 14:14:37', '2017-09-01 14:14:37'),
(4, 'user3', 'user3@gmail.com', '$2y$10$YKIKsv2JGEJ8WiHj2WcJxuwqmWd0sKV.PVqMwLfYeuc5ds9jT8AFS', 'bMNHa38erxUKyg7z5FAPsbx6iXQ7zPdedyYaJcHsVMJHyjxn8tBkNWIokqJv', '2017-09-01 14:29:19', '2017-09-01 14:29:19'),
(5, 'user4', 'user4@gmail.com', '$2y$10$irA5.olJoBWCXq5BCvjMxuEyGL4VnvW/9t43uah/cOPhbKofYndya', 'ah2VLBMqhC4Hejvuw4dao7t25xBpicrGCHC8tgQLZ1q8TuonGBxLS6PceflF', '2017-09-01 15:30:48', '2017-09-01 15:30:48'),
(6, 'user5', 'user5@gmail.com', '$2y$10$nah2vI9nUVW1Jtq.vwNUDOMAhltfZiWb/n/kLR1Mnk7JBJA/ALOtO', '41NwH15lFD3J43w5Dj0Ytcmvarsx3R4KdLDdLdkInNNCR9dHAgm7FdHNyrE0', '2018-02-14 17:24:04', '2018-02-14 17:24:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
