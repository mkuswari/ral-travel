-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 10:26 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.3.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ral_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blog_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(128) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_code` varchar(64) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` char(16) NOT NULL,
  `duration` int(11) NOT NULL,
  `total_payment` float NOT NULL,
  `travel_date` varchar(128) NOT NULL,
  `user_id` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_code`, `name`, `email`, `phone`, `duration`, `total_payment`, `travel_date`, `user_id`, `travel_id`, `created_at`, `updated_at`) VALUES
(1, '6034a7153d7b5', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 1, 250000, '2021-02-23', 1, 2, '2021-02-23 06:56:21', NULL),
(2, '6034a7cb83872', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 1, 250000, '2021-02-23', 1, 2, '2021-02-23 06:59:23', NULL),
(3, '6034a85164c53', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 3, 750000, '2021-02-24', 1, 2, '2021-02-23 07:01:37', NULL),
(4, '6034a880e1a13', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 3, 750000, '2021-02-24', 1, 2, '2021-02-23 07:02:24', NULL),
(5, '6034aa742c159', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 2, 500000, '2021-02-23', 1, 2, '2021-02-23 07:10:44', NULL),
(6, '6034aa959bd71', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 2, 500000, '2021-02-23', 1, 2, '2021-02-23 07:11:17', NULL),
(7, '6034aaa2d46c6', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 2, 500000, '2021-02-23', 1, 2, '2021-02-23 07:11:30', NULL),
(8, '6034ab8254e36', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 4, 1000000, '2021-02-23', 1, 2, '2021-02-23 07:15:14', NULL),
(9, '6034cc01301b6', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 2, 500000, '2021-02-23', 1, 2, '2021-02-23 09:33:53', NULL),
(10, '6034cc7c504d0', 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 1, 250000, '2021-02-23', 1, 2, '2021-02-23 09:35:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `thumbnail` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_confirmations`
--

CREATE TABLE `payment_confirmations` (
  `id_payment_confirmation` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `transfer_slip` varchar(255) NOT NULL,
  `origin_bank` varchar(128) NOT NULL,
  `sender_name` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_confirmations`
--

INSERT INTO `payment_confirmations` (`id_payment_confirmation`, `booking_id`, `transfer_slip`, `origin_bank`, `sender_name`, `created_at`, `updated_at`) VALUES
(1, 8, '1614072627942.jpg', 'BCA', 'asasas', '2021-02-23 09:30:27', NULL),
(2, 9, '1614072842085.jpg', 'Mandiri', 'Jevi', '2021-02-23 09:34:02', NULL),
(3, 10, '1614072971199.jpg', 'Mandiri', 'rahma', '2021-02-23 09:36:11', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `travel_id` int(11) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `travel_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `images` varchar(255) NOT NULL,
  `location` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`travel_id`, `name`, `slug`, `images`, `location`, `description`, `price`, `created_at`, `updated_at`) VALUES
(2, 'Paket Wisata Gili Terawangan', 'paket-wisata-gili-terawangan', '1613960098708.jpg', 'Lombok Utara', '<p>Gili Trawangan adalah yang terbesar dari ketiga pulau kecil atau gili yang terdapat di sebelah barat laut Lombok. Trawangan juga satu-satunya gili yang ketinggiannya di atas permukaan laut cukup signifikan. Dengan panjang 3 km dan lebar 2 km, Trawangan berpopulasi sekitar 800 jiwa.<br></p>', 250000, '2021-02-22 02:14:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `phone` char(16) NOT NULL,
  `address` text NOT NULL,
  `avatar` varchar(255) NOT NULL DEFAULT 'default.jpg',
  `password` varchar(255) NOT NULL,
  `role` enum('admin','member') NOT NULL DEFAULT 'member',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `address`, `avatar`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Kuswari', 'muhammad.kuswari10@gmail.com', '081939448487', 'Jl. Bunga Matahari, No.11 Gomong Lama, Mataram.', '1613868594626.png', '$2y$10$do93BJQioG4Vwz8zn7AHgOPwdgq9MF3MYBiRUGSrmnRNrhP36uBkm', 'admin', '2021-02-21 00:49:54', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blog_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `travel_id` (`travel_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `payment_confirmations`
--
ALTER TABLE `payment_confirmations`
  ADD PRIMARY KEY (`id_payment_confirmation`),
  ADD KEY `id_payment_confirmation` (`id_payment_confirmation`,`booking_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `travel_id` (`travel_id`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`travel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `payment_confirmations`
--
ALTER TABLE `payment_confirmations`
  MODIFY `id_payment_confirmation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `travel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`travel_id`) REFERENCES `travels` (`travel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_confirmations`
--
ALTER TABLE `payment_confirmations`
  ADD CONSTRAINT `payment_confirmations_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD CONSTRAINT `testimonials_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `testimonials_ibfk_2` FOREIGN KEY (`travel_id`) REFERENCES `travels` (`travel_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
