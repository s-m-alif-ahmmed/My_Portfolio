-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 01:30 PM
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
-- Database: `super_kabab_and_coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `address_two` text DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `default_status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `first_name`, `last_name`, `country`, `company`, `address`, `address_two`, `city`, `postal_code`, `mobile`, `default_status`, `created_at`, `updated_at`) VALUES
(3, 5, 'Steven', 'Scholes', 'Banladesh', 'Spades Marketing Agency', 'Navana DH Tower, Plot-6', 'Panthapath', 'Dhaka, Bangladesh', 1215, 8624628, 0, '2023-08-06 08:18:38', '2023-08-06 08:18:38'),
(4, 6, 'New', 'User', 'Bangladesh', 'New user', 'Gulshan', 'Dhdhhd', 'Dhaka', 1212, 1744646646, 1, '2023-08-06 08:54:19', '2023-11-07 05:23:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Appetizer', NULL, 1, '2023-08-07 03:31:31', '2023-11-07 06:22:09'),
(3, 'Salad', NULL, 1, '2023-08-07 03:31:58', '2023-08-07 05:22:05'),
(4, 'Soup', NULL, 1, '2023-08-07 03:32:07', '2023-08-07 05:22:21'),
(5, 'Grilled Dish', NULL, 1, '2023-08-07 03:32:27', '2023-08-07 05:22:29'),
(6, 'Sizzling', NULL, 1, '2023-08-07 03:32:43', '2023-08-07 05:22:41'),
(7, 'Vegetable', NULL, 1, '2023-08-07 03:33:03', '2023-08-07 07:18:57'),
(8, 'Rice', NULL, 1, '2023-08-07 03:33:18', '2023-08-07 09:41:43'),
(9, 'Noodles', NULL, 1, '2023-08-07 03:33:28', '2023-08-07 09:41:54'),
(10, 'Main Dish', NULL, 1, '2023-08-07 03:33:37', '2023-08-07 09:42:16'),
(11, 'Set Menu', NULL, 1, '2023-08-07 03:33:49', '2023-08-07 09:42:37'),
(12, 'Kabab', NULL, 1, '2023-08-07 03:34:02', '2023-08-07 09:43:20'),
(13, 'Side Dish For Kabab', NULL, 1, '2023-08-07 03:34:29', '2023-08-07 09:44:26'),
(14, 'Steam | B.B.Q | Grill', NULL, 1, '2023-08-07 03:35:04', '2023-08-07 09:45:17'),
(15, 'Meat Box', NULL, 1, '2023-08-07 03:35:15', '2023-08-07 09:45:40'),
(16, 'Indian Item', NULL, 1, '2023-08-07 03:35:26', '2023-08-07 09:46:01'),
(17, 'Steak', NULL, 1, '2023-08-07 03:35:36', '2023-08-07 09:46:18'),
(18, 'Burger', NULL, 1, '2023-08-07 03:35:47', '2023-08-07 09:46:36'),
(19, 'Wrap', NULL, 1, '2023-08-07 03:35:54', '2023-08-07 09:46:56'),
(20, 'Oven Baked Pasta', NULL, 1, '2023-08-07 03:36:11', '2023-08-07 09:48:01'),
(21, 'Pizza', NULL, 1, '2023-08-07 03:36:21', '2023-08-07 09:48:40'),
(22, 'Pan Pasta', NULL, 1, '2023-08-07 03:36:30', '2023-08-07 09:49:33'),
(23, 'Hot Coffee', NULL, 1, '2023-08-07 03:36:41', '2023-08-07 09:49:53'),
(24, 'Cold Coffee', NULL, 1, '2023-08-07 03:36:54', '2023-08-07 09:50:27'),
(25, 'Shake & Smoothy', NULL, 1, '2023-08-07 03:37:16', '2023-08-07 09:51:02'),
(26, 'Mocktails', NULL, 1, '2023-08-07 03:37:31', '2023-08-07 09:51:39'),
(27, 'Tea', NULL, 1, '2023-08-07 03:37:37', '2023-08-07 09:52:29'),
(28, 'Soft Drinks', NULL, 1, '2023-08-07 03:44:15', '2023-08-07 09:52:47'),
(29, 'Yoghurt Drinks', NULL, 1, '2023-08-07 03:44:42', '2023-08-07 09:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh', 1, '2023-08-01 07:09:25', '2023-11-07 04:57:53'),
(2, 'India', 0, '2023-11-07 04:57:40', '2023-11-07 05:52:56');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `max_uses` int(11) DEFAULT NULL,
  `max_uses_user` int(11) DEFAULT NULL,
  `type` enum('percent','fixed') NOT NULL DEFAULT 'fixed',
  `discount_amount` double(10,2) NOT NULL,
  `min_amount` double(10,2) DEFAULT NULL,
  `starts_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `name`, `description`, `max_uses`, `max_uses_user`, `type`, `discount_amount`, `min_amount`, `starts_at`, `status`, `expires_at`, `created_at`, `updated_at`) VALUES
(9, 'IDEA100', 'dhsf', 'dsfsf', 2, 2, 'fixed', 20.00, 300.00, '2023-11-07 10:30:07', 1, '2023-11-16 11:30:09', '2023-10-07 05:30:13', '2023-11-07 04:27:30'),
(12, 'sdfsdf', 'dfsd', 'dsfs', 21, 1, 'percent', 43.00, 3434.00, '2023-11-07 10:38:10', 1, '2023-11-15 10:38:14', '2023-11-07 04:38:18', '2023-11-07 04:38:18'),
(13, 'SUPER200', 'ABC', 'ABC', 2, 1, 'fixed', 200.00, 500.00, '2023-11-07 13:56:06', 1, '2023-11-14 11:56:15', '2023-11-07 05:56:20', '2023-11-07 05:56:20');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `category_id`, `name`, `description`, `price`, `image`, `status`, `created_at`, `updated_at`) VALUES
(3, 2, 'French fry (200 gm)', 'Ing: French fry with cocktail sauce & red chili sauce.', 200.00, 'images/items/image-1.jpg', 1, '2023-08-07 04:01:49', '2023-11-07 06:25:24'),
(4, 2, 'Potato Wedges (200 gm)', 'Ing: Potato with flour spicy mix cocktail sauce & red chili sauce.', 180.00, 'images/items/image-2.jpg', 1, '2023-08-07 04:02:27', '2023-08-07 04:02:27'),
(6, 2, 'Thai spring roll (6 pcs)', 'Ing: Crispy wrap & fluty veggies with minced chicken', 320.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 10:12:43', '2023-08-07 10:12:43'),
(7, 2, 'Fried wonton (6 pcs)', 'Ing: Crispy wrap sauteed with minced chicken, prawn, carrot & onion.', 320.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:13:38', '2023-08-07 10:13:38'),
(8, 2, 'Shrimps tempura (6 pcs)', 'Ing: Deep fried tempura powder mixed with minced shrimp on.', 400.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 10:14:18', '2023-08-07 10:14:18'),
(9, 2, 'Thai Shrimps Roll (6 pcs)', 'Ing: Crispy wrap and fried with spiced shrimp.', 400.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:15:11', '2023-08-07 10:15:11'),
(10, 2, 'Fried Fish Finger (6 pcs)', 'Ing: Crumb Coated finger cut fish with herbs & spice.', 420.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 10:16:09', '2023-08-07 10:16:09'),
(11, 2, 'Fish and Chips (3 pcs)', 'Ing: Finger cutting fish with flower spicy mix crispy deep fried.', 400.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 10:17:04', '2023-08-07 10:17:04'),
(12, 2, 'B.B.Q wings (6 pcs)', 'Ing: Chicken wings B.B.Q spicy marinated with B.B.Q sauce.', 380.00, 'images/items/Chicken_EbiGyoza_1024x1024.jpg', 1, '2023-08-07 10:17:48', '2023-08-07 10:17:48'),
(13, 2, 'Fried Calamari', 'Ing: Crispy fried squid ring with deeping sauce.', 580.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 10:18:42', '2023-11-07 06:28:31'),
(14, 2, 'Chicken Lollipop (6 pcs)', 'Ing: Wings lollipop cutting spicy marinated with B.B.Q sauce.', 520.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 10:19:36', '2023-08-07 10:19:36'),
(15, 3, 'Thai Chicken Cashew nut Salad', 'Ing: Warm fried cube cut chicken, roasted cashew nut, cucumber, onion, coriander and spicy sauce.', 550.00, 'images/items/SesameEdamame_1024x1024.jpg', 1, '2023-08-07 10:20:33', '2023-08-07 10:20:33'),
(16, 3, 'Thai Grilled Chicken Salad', 'Ing: Grilled Boneless chicken, carrot, cucumber, onion, coriander and spicy.', 580.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:21:46', '2023-08-07 10:21:46'),
(17, 3, 'Thai Shrimp Salad', 'Ing: Sharimp, onion, lemon grass, ginger, red chili flakes and roasted ground rice.', 520.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 10:22:22', '2023-08-07 10:22:22'),
(18, 3, 'Fruit and Shrimp Salad', 'Ing: Poached shrimps, fresh vegetable, fresh fruits mixed with honey mustard orange sauce.', 620.00, 'images/items/Chicken_EbiGyoza_1024x1024.jpg', 1, '2023-08-07 10:23:03', '2023-08-07 10:23:03'),
(19, 3, 'Seafood Salad', 'Ing: Fresh vegetable, crab, squid, prawn, dory fish.', 620.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 10:23:51', '2023-08-07 10:23:51'),
(20, 3, 'Chicken Caesar Salad', 'Ing: Roasted chicken, fresh vegetable, parmesan chesse, special Caesar sauce.', 480.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 10:24:33', '2023-08-07 10:24:33'),
(21, 3, 'Fresh Garden Salad', 'Ing: Fresh vegetable Julian cut.', 320.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 10:25:10', '2023-08-07 10:25:10'),
(22, 3, 'Coleslaw Salad', 'Ing: Cabbage, Carrot, Mayonnaise with pepper.', 320.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 10:25:46', '2023-08-07 10:25:46'),
(23, 3, 'Salmam Salad', 'Ing: Slice Salmam Fish, Fresh vegetable, special Fish sauce', 620.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:26:21', '2023-08-07 10:26:21'),
(24, 4, 'Thai hot soup (Tom Yoam)', 'Ing: Sliced chicken, prawn & mushroom cooked with low milk, thai herbs & spicy sauce.', 490.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 10:27:18', '2023-08-07 10:27:18'),
(25, 4, 'Steamboat soup', 'Ing: Boneless sliced chicken, prawn, sea fish and egg boiled with vermeil noodles & seasonal vegetable.', 600.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:28:11', '2023-08-07 10:28:11'),
(26, 4, 'Thai Mixed Vegetable soup', 'Ing: Seasonal vegetable cooked with sliced chicken, prawn, mushroom & baby corn.', 390.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 10:28:52', '2023-08-07 10:28:52'),
(27, 4, 'Steamed chicken soup', 'Ing: Cooked chicken steamed with onion & ginger flavored sauce.', 420.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 10:29:44', '2023-08-07 10:29:44'),
(28, 4, 'Special thai soup thick', 'Ing: Sliced chicken & prawn cooked with mushroom, fried onion and chili tomato purce.', 450.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:30:27', '2023-08-07 10:30:27'),
(29, 4, 'Thai soup clear or thick', 'Ing: Sliced chicken, prawn & mushroom & ginger chili tomato purce', 430.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:31:09', '2023-08-07 10:31:09'),
(30, 4, 'Szechuan Soup', 'Ing: Minced chicken, prawn and mushroom cooked with baby corn and chili tomato sauce.', 520.00, 'images/items/Chicken_EbiGyoza_1024x1024.jpg', 1, '2023-08-07 10:31:50', '2023-08-07 10:31:50'),
(31, 4, 'Cream of Chicken & Mushroom Soup', 'Ing: Blended sauteed mushroom, cube-cut boiled chicken with fresh cream.', 400.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 10:32:30', '2023-08-07 10:32:30'),
(32, 4, 'Chicken Vegetable Soup', 'Ing: Sliced chicken prepared with seasonal mixed vegetable.', 350.00, 'images/items/VegetableTempura_1024x1024.jpg', 1, '2023-08-07 10:33:12', '2023-08-07 10:33:12'),
(33, 4, 'Hot & Sour Soup', 'Ing: Minced chicken and egg cooked with hot & sour tomato sauce.', 430.00, 'images/items/SeafoodTeppanyaki_1024x1024.jpg', 1, '2023-08-07 10:33:47', '2023-08-07 10:33:47'),
(34, 4, 'Chicken Corn Soup', 'Ing: Mild taste soup coked with minced chicken, sweet corn & egg.', 350.00, 'images/items/SalmonSushiNigiri_1024x1024.jpg', 1, '2023-08-07 10:34:34', '2023-08-07 10:34:34'),
(35, 4, 'Special corn soup', 'Ing: Minced chicken, egg, sweet corn and mushroom mixed with butter & cashew nut.', 390.00, 'images/items/Kushiage_1024x1024.jpg', 1, '2023-08-07 10:35:14', '2023-08-07 10:35:14'),
(36, 5, 'Thai Grilled Chicken (8 pcs)', 'Ing: Spicy farm chicken grilled with chef special sauce.', 640.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 10:36:06', '2023-08-07 10:36:06'),
(37, 5, 'Thai Grilled Chicken Wings (6 pcs)', 'Ing: Chicken wings grilled with chilli tomato sauce and spicy.', 520.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 10:36:41', '2023-08-07 10:36:41'),
(38, 5, 'Thai Grilled Beef (200 gm)', 'Ing: Boneless spiced beef grilled with spicy sauce.', 650.00, 'images/items/Chicken_EbiGyoza_1024x1024.jpg', 1, '2023-08-07 10:37:21', '2023-08-07 10:37:21'),
(39, 5, 'Thai Grilled King Prawn (6 pcs)', 'Ing: King prawn grilled with spicy hot & sour sauce.', 700.00, 'images/items/VegetableTempura_1024x1024.jpg', 1, '2023-08-07 10:38:02', '2023-08-07 10:38:02'),
(40, 6, 'Beef Sizzling', 'Beef Sizzling', 500.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 10:45:41', '2023-08-07 10:45:41'),
(41, 6, 'Mutton Sizzling', 'Mutton Sizzling', 580.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 10:46:17', '2023-08-07 10:46:17'),
(42, 6, 'Prawn Sizzling', 'Prawn Sizzling', 520.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 10:46:48', '2023-08-07 10:46:48'),
(43, 6, 'Chicken Sizzling', 'Chicken Sizzling', 450.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:47:25', '2023-08-07 10:47:25'),
(44, 7, 'Thai Mixed Vegetable with Chicken or Prawn. (less gravy)', 'Ing: Seasonal Mixed vegetable cooked with chicken sliced & prawn.', 450.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 10:48:11', '2023-08-07 10:48:11'),
(45, 7, 'Thai Mixed Vegetable with mushroom & Baby Corn, (Less Gravy)', 'Ing: Seasonal mixed vegetable cooked with mushroom & baby corn.', 520.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 10:48:54', '2023-08-07 10:48:54'),
(46, 7, 'Chicken / prawn / Beef Vegetable. (full gravy) = 450 Tk. / = 520 Tk. /', 'Ing: Seasonal mixed vegetable cooked with mushroom & baby corn.', 500.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:49:56', '2023-08-07 10:49:56'),
(47, 7, 'Sweet & Sour Vegetable', 'Ing: Chef selected vegetable boiled with sweet & sour sauce.', 400.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:50:28', '2023-08-07 10:50:28'),
(48, 8, 'Thai Special Fried Rice', 'Ing: Rice prepared with sliced chicken, prawn egg, vegetable, butter oil & sauce.', 550.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 10:51:07', '2023-08-07 10:51:07'),
(49, 8, 'American Fried Rice', 'Ing: Special rice & cashew nut cooked with butter, sliced chicken and spicy sauce.', 600.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:51:55', '2023-08-07 10:51:55'),
(50, 8, 'Thai Vegetable Fried Rice', 'Ing: Spiceal mixed rice cooked with seasonal vegetable & butter oil.', 420.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 10:52:31', '2023-08-07 10:52:31'),
(51, 8, 'Chicken Fried Rice', 'Ing: Special rice cooked with sliced chicken, egg, vegetable & spring onion.', 450.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 10:53:15', '2023-08-07 10:53:15'),
(52, 8, 'Special Fried Rice', 'Ing: Special fried rice with butter, sliced chicken prawn, vegetable, egg & chef’s authentic sauce.', 550.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 10:53:50', '2023-08-07 10:53:50'),
(53, 8, 'Steamed Rice', 'Ing: Selected rice prepared in steam process.', 250.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:54:31', '2023-08-07 10:54:31'),
(54, 8, 'Egg Fried Rice', 'Egg Fried Rice', 450.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 10:55:17', '2023-08-07 10:55:17'),
(55, 9, 'Thai Noodles with Chicken or Prawn', 'Ing: Sauteed mixed vegetable & noodles prepared with chicken or prawn.', 550.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:55:48', '2023-08-07 10:55:48'),
(56, 9, 'Spaghetti Alfredo with Chicken', 'Ing: Italian spaghetti prepared with dice cut chicken, broccoli, butter & Alfredo sauce.', 550.00, 'images/items/Chicken_EbiGyoza_1024x1024.jpg', 1, '2023-08-07 10:56:15', '2023-08-07 10:56:15'),
(57, 9, 'Chicken Chow Mein', 'Ing: Stir fried noodles with sauteed mixed chicken slices & vegetable.', 400.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 10:56:45', '2023-08-07 10:56:45'),
(58, 9, 'Mixed Chow Mein', 'Ing: Stir fried noodles with sauteed mixed chicken slices, prawn & vegetable.', 480.00, 'images/items/VegetableTempura_1024x1024.jpg', 1, '2023-08-07 10:57:23', '2023-08-07 10:57:23'),
(59, 9, 'Sze Chuan Chow Mein', 'Ing: Stir fried noodles prepared with sliced chicken, prawn & mixed vegetable.', 490.00, 'images/items/SalmonSushiNigiri_1024x1024.jpg', 1, '2023-08-07 10:57:58', '2023-08-07 10:57:58'),
(60, 9, 'American Chopsuey', 'Ing: Crispy fried noodles topping with sliced chicken, prawn, vegetable & egg.', 550.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 10:58:30', '2023-08-07 10:58:30'),
(61, 10, 'Fried spring chicken (Sonali) - 6pcs', 'Fried spring chicken (Sonali) - 6pcs', 600.00, 'images/items/VegetableTempura_1024x1024.jpg', 1, '2023-08-07 10:59:06', '2023-08-07 10:59:06'),
(62, 10, 'Thai Fried chicken (6pcs)', 'Thai Fried chicken (6pcs)', 560.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 10:59:35', '2023-08-07 10:59:35'),
(63, 10, 'Thai Special Crispy Chicken (6 pcs)', 'Ing: Thai style spiced boned chicken fried with chef spcial sauce.', 540.00, 'images/items/SalmonCarpaccio_1024x1024.jpg', 1, '2023-08-07 11:00:10', '2023-08-07 11:00:10'),
(64, 10, 'Thai Chicken in Foil Paper', 'Ing: Boned chicken cooked with garlic, onion, carrot, sweet & sour sauce.', 650.00, 'images/items/SalmonSashimi_1024x1024.jpg', 1, '2023-08-07 11:00:41', '2023-08-07 11:00:41'),
(65, 10, 'Thai Chicekn with Garlic & Paper', 'Ing: Sliced chicken prepared with white garlic & thai paper flavored sauce.', 550.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 11:01:20', '2023-08-07 11:01:20'),
(66, 10, 'Thai Chicken with Mushroom & Ginger', 'Ing: Boneless sliced chicken, mushroom, onion & capsicum prepared with flavored testy ginger.', 600.00, 'images/items/SeafoodTeppanyaki_1024x1024.jpg', 1, '2023-08-07 11:02:05', '2023-08-07 11:02:05'),
(67, 10, 'Thai Chicken with Green Chilli', 'Ing: Cube cut chicken cooked with capsicum, spring onion & green chilli.', 580.00, 'images/items/SalmonCarpaccio_1024x1024.jpg', 1, '2023-08-07 11:02:42', '2023-08-07 11:02:42'),
(68, 10, 'Thai Chicken with Cashew Nut', 'Ing: Cube cut chicken cooked with capsicum, onion, pineapple, cashew nut & low fat milk.', 600.00, 'images/items/Kushiage_1024x1024.jpg', 1, '2023-08-07 11:03:19', '2023-08-07 11:03:19'),
(69, 10, 'Thai Chicken Red Curry', 'Ing: Boneless sliced chicken cooked with creamy thai curry sauce & low fat milk.', 480.00, 'images/items/SalmonSushiNigiri_1024x1024.jpg', 1, '2023-08-07 11:03:53', '2023-08-07 11:03:53'),
(70, 10, 'Thai Baked Chicken in Pineapple.', 'Ing: Cube cut chicken cooked with cashew nut, pineaple, carrot, butter & tomato sauce.', 700.00, 'images/items/SalmonSashimi_1024x1024.jpg', 1, '2023-08-07 11:04:31', '2023-08-07 11:04:31'),
(71, 10, 'Thai King Prawn with Garlic Sauce', 'Ing: King prawn prepared with capsicum & garlic flavored chilli sauce,', 720.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 11:05:08', '2023-08-07 11:05:08'),
(72, 10, 'Thai Shrimps with Garlic & Pepper', 'Ing: Shrimps with white garlic & thai pepper flavored sauce.', 700.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 11:05:52', '2023-08-07 11:05:52'),
(73, 10, 'Thai Shrimps Red Curry', 'Ing: Shrimps cooked with red curry sauce.', 600.00, 'images/items/VegetableTempura_1024x1024.jpg', 1, '2023-08-07 11:06:28', '2023-08-07 11:06:28'),
(74, 10, 'Thai baked Shrimps in Pineapple', 'Ing: Shrimps cooked with cashew nut, carrot, butter & tomato sauce served in pineapple.', 600.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 11:07:23', '2023-08-07 11:07:23'),
(75, 10, 'Thai Beef with Mushroom & Ginger', 'Ing: Boneless sliced beef, mushroom, onion & capsicum cooked with flavored testy ginger', 600.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:07:58', '2023-08-07 11:07:58'),
(76, 10, 'Thai Beef Red Curry', 'Ing: Sliced beef prepared with thai red curry sauce & capsicum.', 550.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:08:32', '2023-08-07 11:08:32'),
(77, 10, 'Crispy Chicken Drumsticks (6 pcs)', 'Ing: Crumb cooked deep fried chicken wings prepared with authentic herbs & spices.', 600.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 11:09:07', '2023-08-07 11:09:07'),
(78, 10, 'Szechuan Spring Chicken (Sonali)', 'Ing: Chicken flavored with crust onion & mixed chillis.', 620.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:09:43', '2023-08-07 11:09:43'),
(79, 10, 'Szechuan Chicken Gravy', 'Ing: Cube cut chicken with spicy szechuan hot sauce.', 420.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:10:23', '2023-08-07 11:10:23'),
(80, 10, 'Chicken Chilli Onion', 'Ing: Chicekn Sliced cooked with green chilli & onion.', 400.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:10:58', '2023-08-07 11:10:58'),
(81, 10, 'Sweet & Sour Chicken', 'Ing: Cube cut chicken with capsicum, bean spout, carrot, cuumber & sweet chilli sauce.', 430.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:11:47', '2023-08-07 11:11:47'),
(82, 10, 'Lemon Chicken', 'Ing: Boneless sliced chicken cooked with sauce, lemon & capsicum', 540.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:13:15', '2023-08-07 11:13:15'),
(83, 10, 'Masala Chicken', 'Ing: Boned chicken cooked with chef authentic masala curry sauce.', 410.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:14:00', '2023-08-07 11:14:00'),
(84, 10, 'Szechuan Prawn Chilli Dry', 'Ing: Crispy prawn prepared with spicy chilli sauce.', 520.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:14:41', '2023-08-07 11:14:41'),
(85, 10, 'Beef Chilli Onion', 'Ing: Boneless sliced beef prepared with spring onion & green chilli.', 550.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 11:15:23', '2023-08-07 11:15:23'),
(86, 10, 'Szechuan Beef Chilli Dry', 'Ing: Crispy sliced beef preapred with szechuan hot spicy chilli sauce.', 550.00, 'images/items/SunsetMakiRoll_1_1024x1024.jpg', 1, '2023-08-07 11:16:17', '2023-08-07 11:16:17'),
(87, 11, 'Egg Fried Rice', 'Ing: Chicken Chilli Onion + Crispy Chicken+Cloeslaw Salad.', 380.00, 'images/items/Kushiage_1024x1024.jpg', 1, '2023-08-07 11:17:19', '2023-08-07 11:17:19'),
(88, 11, 'Egg Fried Rice', 'Ing: Chicken Vegetable + Thai Fried Chicken 2 pcs + cloeslaw Salad.', 370.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:18:02', '2023-08-07 11:18:02'),
(89, 11, 'Egg Fried Rice', 'Ing: Buffalo Wings 2 pcs + Mongolian Beef + Thai Fried Chicken 2 Pcs + Cloeslaw Salad.', 450.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 11:18:34', '2023-08-07 11:18:34'),
(90, 11, 'Egg Fried Rice', 'Ing: Beef Curry + Thai Fried 2 Pcs + Cloeslaw Salad.', 490.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:19:07', '2023-08-07 11:19:07'),
(91, 11, 'Masala Rice', 'Ing: B.B.Q Chicken Quarter + Sauteed Vegetable + Fish Finger 2 pcs + Cloeslaw salad.', 520.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:19:43', '2023-08-07 11:19:43'),
(92, 11, 'Masala Rice', 'Ing: Mutton Curry + Thai Fried 2 pcs + Thai Soup + Spring Roll 2 pcs + cloeslaw salad.', 600.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:20:16', '2023-08-07 11:20:16'),
(93, 12, 'Adnan Kabab Lamb', 'Adnan Kabab Lamb', 550.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:21:58', '2023-08-07 11:21:58'),
(94, 12, 'Shish Taouk Chicken', 'Shish Taouk Chicken', 400.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:32:14', '2023-08-07 11:32:14'),
(95, 12, 'Lamb Tikka', 'Lamb Tikka', 430.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 11:32:40', '2023-08-07 11:32:40'),
(96, 12, 'Egg plant Kabab (Lamb)', 'Egg plant Kabab (Lamb)', 520.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:33:14', '2023-08-07 11:33:14'),
(97, 12, 'Kushkash Kabab (Lamb)', 'Kushkash Kabab (Lamb)', 520.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:34:12', '2023-08-07 11:34:12'),
(98, 12, 'Doner Kabab (Chicken)', 'Doner Kabab (Chicken)', 400.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:34:37', '2023-08-07 11:34:37'),
(99, 12, 'Hariali Kabab (Chicken)', 'Hariali Kabab (Chicken)', 400.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:35:36', '2023-08-07 11:35:36'),
(100, 12, 'Chicken Tandori (half)', 'Chicken Tandori (half)', 400.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:36:22', '2023-08-07 11:36:22'),
(101, 12, 'Roti Kabab (Lamb)', 'Roti Kabab (Lamb)', 350.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:37:23', '2023-08-07 11:37:23'),
(102, 12, 'Chicken Reshmi Kabab', 'Chicken Reshmi Kabab', 400.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:37:46', '2023-08-07 11:37:46'),
(103, 12, 'Beef Shik Kabab', 'Beef Shik Kabab', 400.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:38:13', '2023-08-07 11:38:13'),
(104, 12, 'Wings Grill (6 pcs)', 'Wings Grill (6 pcs)', 380.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:38:38', '2023-08-07 11:38:38'),
(105, 13, 'Plain Naan', 'Plain Naan', 60.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:39:26', '2023-08-07 11:39:26'),
(106, 13, 'Butter Naan', 'Butter Naan', 75.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:39:53', '2023-08-07 11:39:53'),
(107, 13, 'Tuskish Bread', 'Tuskish Bread', 150.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:40:17', '2023-08-07 11:40:17'),
(108, 14, 'Snapper Fish (1 kg)', 'Snapper Fish (1 kg)', 1700.00, 'images/items/Chicken_EbiGyoza_1024x1024.jpg', 1, '2023-08-07 11:41:22', '2023-08-07 11:41:22'),
(109, 14, 'Tuna Fish (300 gm)', 'Tuna Fish (300 gm)', 920.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:41:46', '2023-08-07 11:41:46'),
(110, 14, 'Pomfret Fish (400 gm)', 'Pomfret Fish (400 gm)', 950.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:42:19', '2023-08-07 11:42:19'),
(111, 15, 'Chicken Meat Box', 'Chicken Meat Box', 300.00, 'images/items/EbiSushiNigiri_1024x1024.jpg', 1, '2023-08-07 11:42:55', '2023-08-07 11:42:55'),
(112, 15, 'Beef Meat Box', 'Beef Meat Box', 350.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:43:19', '2023-08-07 11:43:19'),
(113, 15, 'Sausages Meat Box', 'Sausages Meat Box', 320.00, 'images/items/SunsetMakiRoll_1_1024x1024.jpg', 1, '2023-08-07 11:43:44', '2023-08-07 11:43:44'),
(114, 17, 'T-Bone Steak (250 gm)', 'T-Bone Steak (250 gm)', 1490.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:45:10', '2023-08-07 11:45:10'),
(115, 17, 'Lamb Chop (250 gm)', 'Lamb Chop (250 gm)', 1250.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 11:45:37', '2023-08-07 11:45:37'),
(116, 17, 'Salmon Steak (250 gm)', 'Salmon Steak (250 gm)', 1800.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:46:01', '2023-08-07 11:46:01'),
(117, 17, 'Lobster (400 gm)', 'Lobster (400 gm)', 1600.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:46:29', '2023-08-07 11:46:29'),
(118, 17, 'Chicken Steak (300 gm)', '(Sauteed vegetable, fried rice)', 800.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 11:47:04', '2023-08-07 11:47:04'),
(119, 18, 'Chicken Crispy Burger', 'Chicken Crispy Burger', 350.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 11:47:38', '2023-08-07 11:47:38'),
(120, 18, 'Chicken Patty Burger', 'Chicken Patty Burger', 320.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:48:06', '2023-08-07 11:48:06'),
(121, 18, 'Beef Cheese Burger', 'Beef Cheese Burger', 450.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:48:33', '2023-08-07 11:48:33'),
(122, 18, 'Beef Patty Burger', 'Beef Patty Burger', 420.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 11:49:09', '2023-08-07 11:49:09'),
(123, 18, 'Dynamic Burger', 'Dynamic Burger', 460.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 11:49:36', '2023-08-07 11:49:36'),
(124, 18, 'Supper Kabab Burger (Double Decker)', 'Supper Kabab Burger (Double Decker)', 550.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 11:50:09', '2023-08-07 11:50:09'),
(125, 19, 'Doner Shawarma Warp (Chicken)', 'Doner Shawarma Warp (Chicken)', 320.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:50:57', '2023-08-07 11:50:57'),
(126, 19, 'Crispy Chicken Warp', 'Crispy Chicken Warp', 300.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:51:21', '2023-08-07 11:51:21'),
(127, 19, 'Shish Tawook Kabab Warp', 'Shish Tawook Kabab Warp', 350.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:51:49', '2023-08-07 11:51:49'),
(128, 19, 'Beef Adanan Kabab Wrap', 'Beef Adanan Kabab Wrap', 420.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:52:16', '2023-08-07 11:52:16'),
(129, 19, 'Fish Tikka Wrap', 'Fish Tikka Wrap', 490.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 11:54:06', '2023-08-07 11:54:06'),
(130, 20, 'Pasta Basta', 'Ing: Pasta, White sauce, Red Sauce, Chicken, Capsicum, Cheese & Black Olive.', 350.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 11:55:11', '2023-08-07 11:55:11'),
(131, 20, 'Pasta Americano', 'Ing: Pasta, Chicken, Sausages, Black Olive, Oregano & Cheese.', 350.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:56:04', '2023-08-07 11:56:04'),
(132, 20, 'Super Kabab & Cafe Special Pasta', 'Ing: Pasta, Chicken, Shrimp, Mixed Sauce, Cheeses, Capsicum & Sausages.', 400.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 11:57:09', '2023-08-07 11:57:09'),
(133, 22, 'Alfredo Pasta', 'Ing: Pasta, Cream, Garlic Keema, Chicken, Oregano, Capsicum, Menaced Garlic & Cheese.', 390.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 12:00:32', '2023-08-07 12:00:32'),
(134, 22, 'Chicken Cheese Pasta', 'Ing: Pasta, Cheese, Garlic Keema, Black Olive & White Sauce.', 350.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 12:01:17', '2023-08-07 12:01:17'),
(135, 22, 'Super Kabab & Cafe Special', 'Ing: Pasta, Cheese, Garlic Keema, Onion Keema, White Sauce, Red Sauce, Chicken, Shrimp, Oregano & Chili Cut.', 450.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:02:10', '2023-08-07 12:02:10'),
(136, 22, 'Bolognese', 'Ing: Spaghetti, Red Sauce, Parsley, Beef Keema & Cheese.', 500.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:02:55', '2023-08-07 12:02:55'),
(137, 23, 'Espresso', '[Raw 30 ml Coffee] 30 ml', 120.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:04:41', '2023-08-07 12:04:41'),
(138, 23, 'Doppio', '[Raw 60 ml Coffee] 60 ml', 220.00, 'images/items/MisoSalmonTartareCone_ed_1024x1024.jpg', 1, '2023-08-07 12:05:25', '2023-08-07 12:05:25'),
(139, 23, 'Macchiato', '[Raw 30 ml Coffee with milk form]', 160.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 12:06:03', '2023-08-07 12:06:03'),
(140, 23, 'Affogato', 'Affogato', 180.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 12:06:34', '2023-08-07 12:06:34'),
(141, 23, 'Americano', 'Americano', 170.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:07:02', '2023-08-07 12:07:02'),
(142, 23, 'Cappuccino (Small 190 ml)', 'Add ons : Vanilla, Caramel, Hazel Nut,\r\nToffee Nut', 210.00, 'images/items/DragonMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:07:32', '2023-08-07 12:38:05'),
(143, 23, 'Latte (Regular 270 ml)', 'Add ons : Vanilla, Caramel, Hazel Nut,\r\nToffee Nut', 240.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:15:42', '2023-08-07 12:44:02'),
(144, 23, 'Hot Chocolate', '(230 ml)', 290.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 12:16:21', '2023-08-07 12:16:21'),
(145, 23, 'White Chocolate Mocha (Regular 230 ml)', 'White Chocolate Mocha', 270.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 12:18:06', '2023-08-07 12:48:18'),
(146, 23, 'Dark Chocolate Mocha (Regular 230ml)', 'Dark Chocolate Mocha', 270.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:19:44', '2023-08-07 12:49:09'),
(147, 24, 'Iced Americano', 'Iced Americano', 190.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 12:23:51', '2023-08-07 12:23:51'),
(148, 24, 'Iced Latte (Regular)', 'Add ons : Vanilla, Hazel Nut Toffee Nut,\r\nCaramel', 280.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 12:25:32', '2023-08-07 12:51:06'),
(149, 24, 'White Chocolate Mocha (Regular)', 'White Chocolate Mocha', 310.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:26:51', '2023-08-07 12:51:49'),
(150, 24, 'Dark Chocolate Mocha (Regular)', 'Dark Chocolate Mocha', 310.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:28:07', '2023-08-07 12:52:16'),
(151, 25, 'Mango Shake', 'Mango Shake', 280.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:28:49', '2023-08-07 12:28:49'),
(152, 25, 'Strawberry Shake', 'Strawberry Shake', 300.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 12:29:21', '2023-08-07 12:29:21'),
(153, 25, 'Oreo Shake', 'Oreo Shake', 300.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:29:55', '2023-08-07 12:29:55'),
(154, 25, 'Kit Kat Shake', 'Kit Kat Shake', 320.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:30:25', '2023-08-07 12:30:25'),
(155, 25, 'Nutella Shake', 'Nutella Shake', 320.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 12:31:04', '2023-08-07 12:31:04'),
(156, 25, 'Sunny Dale', 'Sunny Dale', 350.00, 'images/items/SpicySalmonMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:31:33', '2023-08-07 12:31:33'),
(157, 25, 'Vanilla Shake', 'Vanilla Shake', 250.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 12:32:03', '2023-08-07 12:32:03'),
(158, 25, 'Date & Nut Smoothy', 'Date & Nut Smoothy', 350.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:32:29', '2023-08-07 12:32:29'),
(159, 26, 'Virgin Mojito', 'Virgin Mojito', 240.00, 'images/items/MisoSalmonTartareCone_ed_1024x1024.jpg', 1, '2023-08-07 12:33:09', '2023-08-07 12:33:09'),
(160, 26, 'Green Apple Soda', 'Green Apple Soda', 250.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:33:42', '2023-08-07 12:33:42'),
(161, 26, 'Peach & lime Punch', 'Peach & lime Punch', 280.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:34:18', '2023-08-07 12:34:18'),
(162, 26, 'Blueberry with Apple & Soda', 'Blueberry with Apple & Soda', 280.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:34:54', '2023-08-07 12:34:54'),
(163, 26, 'Blue Ocean', 'Blue Ocean', 280.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:39:28', '2023-08-07 12:39:28'),
(164, 26, 'Mandarire Mojito', 'Mandarire Mojito', 300.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:40:09', '2023-08-07 12:40:09'),
(165, 26, 'Mix Fruit Mocktail', '(Strawberry, Green Apple, Ruby Grape fruit)', 300.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:40:53', '2023-08-07 12:40:53'),
(166, 23, 'Cappuccino (Large 300 ml)', 'Add ons : Vanilla, Caramel, Hazel Nut,\r\nToffee Nut', 300.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 12:42:41', '2023-08-07 12:42:41'),
(167, 23, 'Latte (Large 430 ml)', 'Add ons : Vanilla, Caramel, Hazel Nut,\r\nToffee Nut', 340.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 12:45:06', '2023-08-07 12:45:06'),
(168, 23, 'White Chocolate Mocha (Large 320 ml)', 'White Chocolate Mocha', 340.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 12:54:04', '2023-08-07 12:54:04'),
(169, 23, 'Dark Chocolate Mocha (Large 320 ml)', 'Dark Chocolate Mocha', 380.00, 'images/items/Chicken_EbiGyoza_1024x1024.jpg', 1, '2023-08-07 12:54:51', '2023-08-07 12:54:51'),
(170, 24, 'Iced Latte (Large)', 'Add ons : Vanilla, Hazel Nut Toffee Nut,\r\nCaramel', 360.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:55:44', '2023-08-07 12:57:04'),
(171, 24, 'White Chocolate Mocha (Large)', 'White Chocolate Mocha', 430.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 12:58:00', '2023-08-07 12:58:00'),
(172, 24, 'Dark Chocolate Mocha (Large)', 'Dark Chocolate Mocha', 430.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 12:58:54', '2023-08-07 12:58:54'),
(173, 27, 'Natural Green Tea (1:2)', 'Natural Green Tea', 300.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 12:59:59', '2023-08-07 12:59:59'),
(174, 27, 'Jasmin Tea (1:2)', 'Jasmin Tea', 350.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 13:00:41', '2023-08-07 13:00:41'),
(175, 28, 'Soft Drinks with lemon & Ice', 'Soft Drinks with lemon & Ice', 40.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 13:01:22', '2023-08-07 13:01:22'),
(176, 28, 'Mineral Water (500 ml)', 'Mineral Water', 20.00, 'images/items/MisoSalmonTartareCone_ed_1024x1024.jpg', 1, '2023-08-07 13:02:22', '2023-08-07 13:02:22'),
(177, 28, 'Mineral Water (1500 ml)', 'Mineral Water', 30.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 13:03:03', '2023-08-07 13:03:03'),
(178, 29, 'Strawberry Yoghurt Drink', 'Strawberry Yoghurt Drink', 280.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 13:03:42', '2023-08-07 13:03:42'),
(179, 29, 'Strawberry Yoghurt Drink', 'Strawberry Yoghurt Drink', 280.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 13:04:14', '2023-08-07 13:04:14'),
(180, 29, 'Mango Lacchi Drink', 'Mango Lacchi Drink', 280.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 13:04:35', '2023-08-07 13:04:35'),
(181, 16, 'Kacchi Full', 'Kacchi', 390.00, 'images/items/SalmonSashimi_1024x1024.jpg', 1, '2023-08-07 13:36:59', '2023-08-07 13:36:59'),
(182, 16, 'Tehari Full', 'Tehari', 250.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 13:38:09', '2023-08-07 13:38:09'),
(183, 16, 'Kacchi Half', 'Kacchi', 250.00, 'images/items/SalmonSashimi_1024x1024.jpg', 1, '2023-08-07 13:39:08', '2023-08-07 13:39:08'),
(184, 16, 'Tehari Half', 'Tehari', 180.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 13:40:06', '2023-08-07 13:40:06'),
(185, 16, 'Mutton Korai Full', 'Mutton Korai', 550.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 13:41:02', '2023-08-07 13:41:02'),
(186, 16, 'Beef Korai Full', 'Beef Korai', 490.00, 'images/items/SeafoodTeppanyaki_1024x1024.jpg', 1, '2023-08-07 13:41:54', '2023-08-07 13:41:54'),
(187, 16, 'Borhani (per glass)', 'Borhani', 70.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 13:42:33', '2023-08-07 13:42:33'),
(188, 16, 'Alo Bokhara Chatni (100 gm)', 'Alo Bokhara Chatni', 220.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 13:43:15', '2023-08-07 13:43:15'),
(189, 16, 'Chicken Korai (Sonali) Full', 'Chicken Korai (Sonali)', 400.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 13:44:28', '2023-08-07 13:44:28'),
(190, 16, 'Chicken Butter Masala Full', 'Chicken Butter Masala', 400.00, 'images/items/BeefCheeseSkewer_1024x1024.jpg', 1, '2023-08-07 13:45:03', '2023-08-07 13:45:03'),
(191, 16, 'Mixed Raita Full', 'Mixed Raita', 300.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 13:45:37', '2023-08-07 13:45:37'),
(192, 21, 'Chicken Pizza (small - 8inch)', 'Ing: Chicken, Sauce, chees, Capsicum, Black Olive, Oregano, Mushroom & Sausages.', 600.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 13:49:46', '2023-08-07 13:49:46'),
(193, 21, 'Chicken Pizza (Medium - 10inch)', 'Ing: Chicken, Sauce, chees, Capsicum, Black Olive, Oregano, Mushroom & Sausages.', 750.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 13:52:00', '2023-08-07 13:52:00'),
(194, 21, 'Chicken Pizza (Large - 12inch)', 'Chicken Pizza', 900.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 13:53:02', '2023-08-07 13:53:02'),
(195, 21, 'Meat Lover Pizza (small - 8inch)', 'Ing: Chicken, Sauce, Cheese, Capsicum, Black Olivee, Oregano, Onion Ring & Green Chilli.', 600.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 13:54:15', '2023-08-07 13:54:15'),
(196, 21, 'Meat Lover Pizza (Medium - 10inch)', 'Ing: Chicken, Sauce, Cheese, Capsicum, Black Olivee, Oregano, Onion Ring & Green Chilli.', 750.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 13:55:33', '2023-08-07 13:55:33'),
(197, 21, 'Meat Lover Pizza (Large - 12inch)', 'Ing: Chicken, Sauce, Cheese, Capsicum, Black Olivee, Oregano, Onion Ring & Green Chilli.', 900.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 13:56:31', '2023-08-07 13:56:31'),
(198, 21, 'Mexican Pizza (small - 8inch)', 'Ing: Beef Keema, Sauce, Cut Chili, Bombi Chili, Cheesa, Oregano, Onion Ring & Tomato.', 600.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 13:57:58', '2023-08-07 13:57:58'),
(199, 21, 'Mexican Pizza (Medium - 10inch)', 'Ing: Beef Keema, Sauce, Cut Chili, Bombi Chili, Cheesa, Oregano, Onion Ring & Tomato.', 750.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 13:58:55', '2023-08-07 13:58:55'),
(200, 21, 'Mexican Pizza (Large - 12inch)', 'Ing: Beef Keema, Sauce, Cut Chili, Bombi Chili, Cheesa, Oregano, Onion Ring & Tomato.', 900.00, 'images/items/BeefTeppanyaki_1024x1024.jpg', 1, '2023-08-07 13:59:46', '2023-08-07 13:59:46'),
(201, 21, 'Seafood Pizza (small - 8inch)', 'Ing: Tuna Fish, Prawn, Dori Fish, Onion, Capsicum, Sauce, Cheese, Oregano & Black Olive.', 600.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 14:00:58', '2023-08-07 14:00:58'),
(202, 21, 'Seafood Pizza (Medium - 10inch)', 'Ing: Tuna Fish, Prawn, Dori Fish, Onion, Capsicum, Sauce, Cheese, Oregano & Black Olive.', 750.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 14:01:50', '2023-08-07 14:01:50'),
(203, 21, 'Seafood Pizza (Large - 12inch)', 'Ing: Tuna Fish, Prawn, Dori Fish, Onion, Capsicum, Sauce, Cheese, Oregano & Black Olive.', 900.00, 'images/items/Chicken-Cheese-Yaki-02copy_1_1024x1024.jpg', 1, '2023-08-07 14:02:40', '2023-08-07 14:02:40'),
(204, 21, 'B.B.Q Pizza (small - 8inch)', 'Ing: Chicken, Sauce, Cheese, BBQ Sauce, Onion & Oregano.', 600.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 14:03:39', '2023-08-07 14:03:39'),
(205, 21, 'B.B.Q Pizza (Medium - 10inch)', 'Ing: Chicken, Sauce, Cheese, BBQ Sauce, Onion & Oregano.', 750.00, 'images/items/ChickenBao_1024x1024.jpg', 1, '2023-08-07 14:04:27', '2023-08-07 14:04:27'),
(206, 21, 'B.B.Q Pizza (Large - 12inch)', 'Ing: Chicken, Sauce, Cheese, BBQ Sauce, Onion & Oregano.', 900.00, 'images/items/ChickenCheeseMakiRoll_1024x1024.jpg', 1, '2023-08-07 14:05:19', '2023-08-07 14:05:19'),
(207, 21, 'Super Kabab & Cafe Special Pizza (small - 8inch)', 'Ing: Chicken, Beef Keema, Mushroom, Sausages, Sauce, Cheese, Capsicum, Black Olive & Onion Ring.', 600.00, 'images/items/SunsetMakiRoll_1_1024x1024.jpg', 1, '2023-08-07 14:06:18', '2023-08-07 14:06:18'),
(208, 21, 'Super Kabab & Cafe Special Pizza ( Medium - 10inch)', 'Ing: Chicken, Beef Keema, Mushroom, Sausages, Sauce, Cheese, Capsicum, Black Olive & Onion Ring.', 750.00, 'images/items/DeepFriedShrimpMakiRoll_1024x1024.jpg', 1, '2023-08-07 14:07:30', '2023-08-07 14:07:30'),
(209, 21, 'Super Kabab & Cafe Special Pizza (Large - 12inch)', 'Ing: Chicken, Beef Keema, Mushroom, Sausages, Sauce, Cheese, Capsicum, Black Olive & Onion Ring.', 900.00, 'images/items/Chicken_EbiGyoza_1024x1024.jpg', 1, '2023-08-07 14:08:40', '2023-08-07 14:08:40'),
(210, 21, 'Meat Ball Pizza (small - 8inch)', 'Ing: Beef Keema, Chicken ball, Onion Ring, Green Chili, Tomato, Mushroom, Black Olive, Sauce & cheese.', 600.00, 'images/items/BakedMisoScallopShell_1024x1024.jpg', 1, '2023-08-07 14:09:33', '2023-08-07 14:09:33'),
(211, 21, 'Meat Ball Pizza (Medium - 10inch)', 'Ing: Beef Keema, Chicken ball, Onion Ring, Green Chili, Tomato, Mushroom, Black Olive, Sauce & cheese.', 750.00, 'images/items/SeafoodTeppanyaki_1024x1024.jpg', 1, '2023-08-07 14:10:26', '2023-08-07 14:10:26'),
(212, 21, 'Meat Ball Pizza (Large - 12inch)', 'Ing: Beef Keema, Chicken ball, Onion Ring, Green Chili, Tomato, Mushroom, Black Olive, Sauce & cheese.', 900.00, 'images/items/AburiSalmonBellySushiNigiri_1024x1024.jpg', 1, '2023-08-07 14:12:27', '2023-08-07 14:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_07_15_184422_create_sessions_table', 1),
(7, '2023_07_15_200102_create_categories_table', 1),
(8, '2023_07_17_082349_create_items_table', 1),
(9, '2023_07_27_164504_create_orders_table', 1),
(10, '2023_07_27_164530_create_order_details_table', 1),
(11, '2023_07_29_114843_create_addresses_table', 1),
(12, '2023_07_29_191836_create_countries_table', 1),
(13, '2023_10_07_064003_create_coupons_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) DEFAULT NULL,
  `discount_amount` int(11) DEFAULT NULL,
  `istimate_total` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` text NOT NULL,
  `address_two` text DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` int(11) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `note` varchar(255) DEFAULT NULL,
  `all_terms` varchar(255) NOT NULL,
  `tracking_id` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `coupon_id`, `discount_amount`, `istimate_total`, `first_name`, `last_name`, `country`, `company`, `address`, `address_two`, `city`, `postal_code`, `mobile`, `status`, `note`, `all_terms`, `tracking_id`, `created_at`, `updated_at`) VALUES
(5, 7, NULL, NULL, NULL, 'Hasib', 'Zaman', 'Banladesh', '1idea', 'panthapath', NULL, 'Dhaka', 1205, 1822919044, 0, 'Hasib', 'agree', '7690296', '2023-08-19 03:28:08', '2023-11-07 05:57:04'),
(6, 8, NULL, NULL, NULL, 'sazib', 'hosssian', 'Banladesh', 'vgfgd', 'gfgfdg', 'gfdgfdgdg', 'Dhaka', 1205, 1234567888, 0, 'dfgdfgfdg', 'agree', '8027057', '2023-08-22 06:37:28', '2023-08-22 06:37:28'),
(8, 5, NULL, NULL, NULL, 'Steven', 'Scholes', 'Banladesh', 'Spades Marketing Agency', 'Navana DH Tower, Plot-6, Panthapath', NULL, 'Dhaka, Bangladesh', 1215, 12345678, 0, NULL, 'agree', '8335244', '2023-09-02 05:16:41', '2023-09-02 05:16:41'),
(9, 3, NULL, NULL, NULL, 'S M Alif', 'dhfdfh', 'Banladesh', 'fhfdhf', 'thfgthf', 'gfhgfh', 'Dhaka', 5646, 1918412588, 1, 'ghfhfhfh', 'agree', '7552194', '2023-09-21 03:18:07', '2023-10-07 05:43:33'),
(10, 3, NULL, NULL, NULL, '01614647325', 'dhfdfh', 'Banladesh', 'Alif Ahmmed', 'Badda, Gulshan', 'dfgdg', 'Dhaka', 1212, 1614647325, 0, NULL, 'agree', '4885395', '2023-11-05 05:35:24', '2023-11-05 05:35:24'),
(11, 3, NULL, NULL, NULL, '01614647325', 'dhfdfh', 'Banladesh', 'Alif Ahmmed', 'Badda, Gulshan', 'dfgdg', 'Dhaka', 1212, 1614647325, 0, NULL, 'agree', '3090624', '2023-11-05 05:35:47', '2023-11-05 05:35:47'),
(12, 3, NULL, NULL, NULL, '01614647325', 'dhfdfh', 'Banladesh', 'Alif Ahmmed', 'Badda, Gulshan', 'dfgdg', 'Dhaka', 1212, 1614647325, 0, NULL, 'agree', '4197314', '2023-11-05 05:36:07', '2023-11-05 05:36:07'),
(23, 6, 9, 50, 200, 'New', 'User', 'Banladesh', 'New user', 'Gulshan', 'Dhdhhd', 'Dhaka', 1212, 1744646646, 0, NULL, 'agree', '8665382', '2023-11-07 01:52:03', '2023-11-07 01:52:03'),
(28, 6, 9, 130, 520, 'New', 'User', 'Banladesh', 'New user', 'Gulshan', 'Dhdhhd', 'Dhaka', 1212, 1744646646, 0, NULL, 'agree', '8119259', '2023-11-07 03:14:20', '2023-11-07 05:01:48'),
(30, 6, NULL, NULL, NULL, 'New', 'User', 'Bangladesh', 'New user', 'Gulshan', 'Dhdhhd', 'Dhaka', 1212, 1744646646, 0, NULL, 'agree', '3424585', '2023-11-07 05:09:09', '2023-11-07 05:09:09'),
(31, 6, NULL, NULL, NULL, 'New', 'User', 'Bangladesh', 'New user', 'Gulshan', 'Dhdhhd', 'Dhaka', 1212, 1744646646, 0, NULL, 'agree', '8694219', '2023-11-07 05:31:10', '2023-11-07 05:31:10'),
(32, 6, NULL, NULL, NULL, 'New', 'User', 'Bangladesh', 'New user', 'Gulshan', 'Dhdhhd', 'Dhaka', 1212, 1744646646, 0, NULL, 'agree', '6967995', '2023-11-07 05:39:16', '2023-11-07 05:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `price`, `quantity`, `created_at`, `updated_at`) VALUES
(5, 5, 3, 'French fry (200 gm)', 200, 1, '2023-08-19 03:28:09', '2023-08-19 03:28:09'),
(6, 5, 48, 'Thai Special Fried Rice', 550, 1, '2023-08-19 03:28:09', '2023-08-19 03:28:09'),
(7, 6, 3, 'French fry (200 gm)', 200, 1, '2023-08-22 06:37:29', '2023-08-22 06:37:29'),
(9, 8, 3, 'French fry (200 gm)', 200, 1, '2023-09-02 05:16:42', '2023-09-02 05:16:42'),
(10, 8, 4, 'Potato Wedges (200 gm)', 180, 1, '2023-09-02 05:16:42', '2023-09-02 05:16:42'),
(11, 9, 3, 'French fry (200 gm)', 200, 1, '2023-09-21 03:18:07', '2023-09-21 03:18:07'),
(12, 10, 3, 'French fry (200 gm)', 200, 1, '2023-11-05 05:35:24', '2023-11-05 05:35:24'),
(13, 10, 4, 'Potato Wedges (200 gm)', 180, 1, '2023-11-05 05:35:24', '2023-11-05 05:35:24'),
(27, 23, 3, 'French fry (200 gm)', 200, 1, '2023-11-07 01:52:03', '2023-11-07 01:52:03'),
(32, 28, 3, 'French fry (200 gm)', 200, 1, '2023-11-07 03:14:20', '2023-11-07 03:14:20'),
(33, 28, 6, 'Thai spring roll (6 pcs)', 320, 1, '2023-11-07 03:14:20', '2023-11-07 03:14:20'),
(35, 30, 3, 'French fry (200 gm)', 200, 1, '2023-11-07 05:09:09', '2023-11-07 05:09:09'),
(36, 31, 4, 'Potato Wedges (200 gm)', 180, 1, '2023-11-07 05:31:10', '2023-11-07 05:31:10'),
(37, 31, 13, 'Fried Calamari', 580, 1, '2023-11-07 05:31:10', '2023-11-07 05:31:10'),
(38, 32, 24, 'Thai hot soup (Tom Yoam)', 490, 1, '2023-11-07 05:39:16', '2023-11-07 05:39:16'),
(39, 32, 6, 'Thai spring roll (6 pcs)', 320, 1, '2023-11-07 05:39:16', '2023-11-07 05:39:16'),
(40, 32, 25, 'Steamboat soup', 600, 1, '2023-11-07 05:39:16', '2023-11-07 05:39:16'),
(41, 32, 15, 'Thai Chicken Cashew nut Salad', 550, 1, '2023-11-07 05:39:16', '2023-11-07 05:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('admin@gmail.com', '$2y$10$D99hFSvr/ZfwErSMRNeEQud9PBP5lv23FkPrQK57yxge4TAyB9TdO', '2023-10-02 01:00:55');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iNab9vNbBErE7ycswt0GvL38xsJPaOirE0RteFOA', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/118.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXR1SFVuV1dhMGdmZ05tVVpvTjhGYzl4N3F2d2I1cEVjM1RmOHhQeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly9sb2NhbGhvc3QvMWlkZWFfZGlnaXRhbC9TdXBlcl9LYWJhYl8mX0NvZmZlZS9wdWJsaWMiO319', 1699111637);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `provider_id` varchar(255) DEFAULT NULL,
  `provider_token` varchar(255) DEFAULT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `ban_status` tinyint(4) NOT NULL DEFAULT 0,
  `role` tinyint(4) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `photo` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `username`, `provider`, `provider_id`, `provider_token`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `ban_status`, `role`, `remember_token`, `current_team_id`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'Super', 'Admin', 'admin@gmail.com', '2023-10-07 01:37:25', '$2y$10$Dbg0WU9hHna54CgxsAoFqe46LbMnOuicrQkMzVVFahn4zTFWQSIOu', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 1, NULL, NULL, 'admin/images/profile_photo/Green Modern How To Make Money Online YouTube Thumbnail.png', '2023-08-06 03:55:31', '2023-10-07 01:37:25'),
(5, 'Steven', 'Scholes', 'stevenscholes818@gmail.com', NULL, '$2y$10$BfxC1iE2jH3bs0pvZvC24erQqTaSymqPrQCrMe3K/fhhuxEzUZeZO', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2023-08-06 08:15:55', '2023-08-06 08:15:55'),
(6, 'New', 'User', 'user@gmail.com', '2023-11-07 01:46:31', '$2y$10$3VU1Hwht/qz7XWqEXVaG6uCPmknEJ.6cKQ98lJ5VNGKw49.MQU1Ly', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2023-08-06 08:53:01', '2023-11-07 06:07:57'),
(7, 'Md. Hasibuzzaman', 'Hasib', 'checqlight@gmail.com', NULL, '$2y$10$x5Slk597kst7qC/KmRL86uQaT7Dye/r3VAFXifUmpXlWCUIKuQ6ZO', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2023-08-19 03:24:09', '2023-11-07 06:08:19'),
(8, 'sazib', 'hosssian', 'bdsazib21@gmail.com', NULL, '$2y$10$HLm9ncQVqAXZ7vAYofY1QuBJgHFYZKsWCpVdnLwMBkqpSbc3n9giu', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2023-08-22 06:36:22', '2023-08-22 06:36:22'),
(9, 'Md Toufiqul', 'Karim', 'shuvrasarker54@gmail.com', NULL, '$2y$10$EHVdhYHu4zqaZsnEqvCFC.cztkLXYY.c3G8qNDRVQo0bHRKONQuIq', NULL, NULL, NULL, '', NULL, NULL, NULL, 0, 1, NULL, NULL, NULL, '2023-09-20 06:30:10', '2023-09-20 06:30:10'),
(13, 'fdgdgd', 'dfgdg', '1ideadigitalappdemo@gmail.com', '2023-10-02 01:26:18', '$2y$10$vUAUVRdILxXNNL.4No0biOcHGliN2YMeTb/ZdG4PCVgEG9TLNQ3Pq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 'VnNDQ6lVIFYOQ67eXOhJJlmed3r9elnSD2irgaVKfgTFd7hCOizE3Oik1VSb', NULL, NULL, '2023-10-02 01:19:14', '2023-10-02 04:25:03'),
(14, 'S M Alif', 'ahmmed', 'alif@gmail.com', NULL, '$2y$10$qp2I6PQ27OcLXcoyD.n1ReOjvv.FInMBhLKlwUX.xgEupYOSQ5ei2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, NULL, '2023-11-04 09:27:12', '2023-11-04 09:27:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `addresses_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
