-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 09:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mountain_handicraft`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `first_name`, `last_name`, `company`, `country`, `city`, `zip_code`, `address1`, `address2`, `is_primary`, `created_at`, `updated_at`) VALUES
(12, 1, NULL, NULL, NULL, NULL, NULL, 54353, 'tokyo', 'japan', 0, '2021-01-08 05:16:43', '2021-01-08 05:16:43'),
(13, 2, NULL, NULL, NULL, NULL, NULL, 3231, 'dasda', 'dsada', 0, '2021-01-08 05:23:27', '2021-01-08 05:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `slug`, `brand_name`, `brand_image`, `created_at`, `updated_at`) VALUES
(1, 'addidas', 'Addidas', '1603253884.png', '2020-10-20 22:33:04', '2020-10-20 22:33:04'),
(2, 'puma', 'Puma', '1603253898.png', '2020-10-20 22:33:18', '2020-10-20 22:33:18'),
(3, 'nike', 'Nike', '1603253914.png', '2020-10-20 22:33:34', '2020-10-20 22:33:34'),
(4, 'fila', 'Fila', '1603254252.png', '2020-10-20 22:39:12', '2020-10-20 22:39:12'),
(5, 'samsung', 'Samsung', '1614064539.jpg', '2021-01-31 11:20:06', '2021-02-23 12:15:39'),
(6, 'godrej', 'Godrej', '1612075027.png', '2021-01-31 11:37:07', '2021-01-31 11:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_special` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `name`, `slug`, `image`, `is_special`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 0, 'Cashmere Product', 'cashmere-product', '1611060145.jpg', '1', NULL, '2020-10-20 22:34:36', '2022-09-08 04:19:36'),
(2, 0, 'Computer & Laptops', 'computer-laptops', '1611060334.webp', '1', NULL, '2020-10-20 22:36:09', '2021-01-19 17:45:34'),
(3, 0, 'Mobile & Accessories', 'mobile-accessories', '1611060449.png', '1', NULL, '2020-10-20 22:36:31', '2021-01-19 17:47:29'),
(4, 1, 'Cashmere Poncho', 'cashmere-poncho', '1611060622.jpg', '1', NULL, '2020-10-20 23:01:09', '2022-09-08 04:20:08'),
(8, 0, 'Electronics', 'electronics', '1611060548.webp', '1', NULL, '2021-01-19 17:12:16', '2021-01-19 17:57:59'),
(9, 1, 'Audio & Video Devices', 'audio-video-devices', NULL, '0', NULL, '2021-01-19 17:51:33', '2021-01-19 17:51:33'),
(10, 3, 'Mobiles', 'mobiles', NULL, '0', NULL, '2021-01-19 17:52:43', '2021-01-19 17:52:43'),
(11, 3, 'Tablets', 'tablets', NULL, '0', NULL, '2021-01-19 17:53:02', '2021-01-19 17:53:02'),
(12, 3, 'Ear/Head phones', 'earhead-phones', NULL, '0', NULL, '2021-01-19 17:53:53', '2021-01-19 17:53:53'),
(13, 3, 'Chargers', 'chargers', NULL, '0', NULL, '2021-01-19 17:54:09', '2021-01-19 17:54:09'),
(14, 3, 'Cover', 'cover', NULL, '0', NULL, '2021-01-19 17:54:30', '2021-01-19 17:54:30'),
(15, 3, 'Smart Watch', 'smart-watch', NULL, '0', NULL, '2021-01-19 17:56:48', '2021-01-19 17:56:48'),
(16, 2, 'Dell laptops', 'dell-laptops', NULL, '0', NULL, '2021-01-31 11:22:06', '2021-01-31 11:22:06'),
(17, 1, 'Fridge', 'fridge', NULL, '0', NULL, '2021-01-31 11:40:17', '2021-02-23 12:13:11'),
(18, 0, 'Vaccum Cleaner', 'vaccum-cleaner', NULL, '0', NULL, '2021-01-31 11:57:07', '2021-01-31 11:57:07');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu', 1, '2020-10-20 22:40:33', '2020-10-20 22:40:33'),
(2, 'Dharan', 1, '2020-10-20 22:40:40', '2020-10-20 22:40:40'),
(3, 'Melbourne', 2, '2020-10-20 22:41:03', '2020-10-20 22:41:03'),
(4, 'Sydney', 2, '2020-10-20 22:41:14', '2020-10-20 22:41:14');

-- --------------------------------------------------------

--
-- Table structure for table `cl_banner`
--

CREATE TABLE `cl_banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_banner`
--

INSERT INTO `cl_banner` (`id`, `title`, `slug`, `caption`, `content`, `picture`, `link`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Banner 1', NULL, 'Banner 1', 'Banner 1', '1611059635.png', NULL, '1', '2020-12-28 16:56:17', '2021-01-19 17:33:55'),
(7, 'Banner 2', NULL, 'Banner 2', 'Banner 2', '1611059628.png', 'https://www.youtube.com/watch?v=cB-ZRijjIMY', '1', '2020-12-28 16:56:35', '2021-01-19 17:33:48'),
(8, 'Banner 3', NULL, NULL, 'Banner 3', '1611059639.png', NULL, '1', '2020-12-28 16:56:52', '2021-01-19 17:33:59'),
(10, 'banner 4', NULL, 'banner 4', NULL, '1611059662.png', NULL, '1', '2021-01-19 17:34:22', '2021-01-19 17:34:22');

-- --------------------------------------------------------

--
-- Table structure for table `cl_settings`
--

CREATE TABLE `cl_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objective` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vision` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_map` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cl_settings`
--

INSERT INTO `cl_settings` (`id`, `title`, `site_description`, `about`, `objective`, `mission`, `vision`, `twitter_link`, `googleplus_link`, `instagram_link`, `facebook_link`, `contact_no`, `address`, `website`, `email`, `google_map`, `created_at`, `updated_at`) VALUES
(1, 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', '948989', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', 'Himalayan Handicraft', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Blue', 'blue', '2020-10-20 22:33:57', '2020-10-20 22:33:57'),
(2, 'Red', 'red', '2020-10-20 22:34:01', '2020-10-20 22:34:01'),
(3, 'Green', 'green', '2020-10-20 22:34:04', '2020-10-20 22:34:04'),
(4, 'Black', 'black', '2021-01-31 11:20:41', '2021-01-31 11:20:41'),
(5, 'Silver', 'silver', '2021-02-23 12:40:58', '2021-02-23 12:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `color_stocks`
--

CREATE TABLE `color_stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `color_id` int(10) UNSIGNED NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_stocks`
--

INSERT INTO `color_stocks` (`id`, `product_id`, `color_id`, `stock`, `created_at`, `updated_at`) VALUES
(11, 7, 1, 5, NULL, NULL),
(12, 7, 2, 10, NULL, NULL),
(13, 8, 1, 5, NULL, NULL),
(14, 8, 2, 10, NULL, NULL),
(15, 9, 1, 5, NULL, NULL),
(16, 9, 2, 10, NULL, NULL),
(17, 10, 1, 5, NULL, NULL),
(18, 10, 2, 10, NULL, NULL),
(19, 11, 1, 5, NULL, NULL),
(20, 11, 2, 10, NULL, NULL),
(21, 12, 1, 5, NULL, NULL),
(22, 12, 2, 6, NULL, NULL),
(25, 14, 1, 5, NULL, NULL),
(26, 14, 2, 6, NULL, NULL),
(27, 15, 1, 5, NULL, NULL),
(28, 15, 2, 6, NULL, NULL),
(29, 16, 1, 5, NULL, NULL),
(30, 16, 2, 6, NULL, NULL),
(35, 21, 1, 5, NULL, NULL),
(42, 21, 2, 646, NULL, NULL),
(44, 23, 1, 2, NULL, NULL),
(45, 23, 2, 0, NULL, NULL),
(46, 23, 3, 5, NULL, NULL),
(47, 24, 1, 10, NULL, NULL),
(48, 26, 1, 20, NULL, NULL),
(49, 27, 1, 50, NULL, NULL),
(50, 28, 1, 100, NULL, NULL),
(51, 29, 1, 5, NULL, NULL),
(52, 29, 2, 10, NULL, NULL),
(53, 30, 2, 10, NULL, NULL),
(54, 31, 2, 2, NULL, NULL),
(55, 32, 5, 1, NULL, NULL),
(56, 33, 4, 1, NULL, NULL),
(57, 34, 4, 3, NULL, NULL),
(58, 36, 4, 1, NULL, NULL),
(59, 37, 4, 2, NULL, NULL),
(60, 38, 4, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `configurations`
--

CREATE TABLE `configurations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `configuration_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `configuration_value` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configurations`
--

INSERT INTO `configurations` (`id`, `configuration_key`, `configuration_value`, `created_at`, `updated_at`) VALUES
(1, 'about', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam id purus at risus pellentesque faucibus a quis eros. In eu fermentum leo. Integer ut eros lacus. Proin ut accumsan leo. Morbi vitae est eget dolor consequat aliquam eget quis dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis at, pharetra eu nisl. Phasellus id ante at velit tincidunt hendrerit. Aenean dolor dolor tristique nec. Tristique nulla aliquet enim tortor at auctor urna nunc. Sit amet aliquam id diam maecenas ultricies mi eget. Morbi vitae est eget dolor consequat aliquam eget quis dolor. Mauris rutrum fermentum erat, at euismod lorem pharetra nec. Duis erat lectus, ultrices euismod sagittis at, pharetra eu nisl. Phasellus id ante at velit tincidunt hendrerit. Aenean dolor dolor tristique nec. Tristique nulla aliquet enim tortor at auctor urna nunc. Sit amet aliquam id diam maecenas ultricies mi eget.</p>', '2020-12-17 04:19:49', '2020-12-20 00:24:44'),
(2, 'mission', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(3, 'vision', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(4, 'objective', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(5, 'twitter_link', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(6, 'googleplus_link', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(7, 'instagram_link', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(8, 'facebook_link', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(9, 'contact_no', '+977-9858745478', '2020-12-17 04:19:49', '2020-12-27 02:42:02'),
(10, 'address', 'Pako, New Road, Kathmandu, Nepal', '2020-12-17 04:19:49', '2020-12-27 02:42:02'),
(11, 'website', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(12, 'email', 'support@smarthome.com', '2020-12-17 04:19:49', '2020-12-27 02:42:02'),
(13, 'site_title', 'Mountain Handicraft', '2020-12-17 04:19:49', '2022-08-29 04:40:55'),
(14, 'site_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took', '2020-12-17 04:19:49', '2020-12-27 02:42:02'),
(15, 'regulation', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(16, 'recognition', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(17, 'price', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(18, 'link', NULL, '2020-12-17 04:19:49', '2020-12-17 04:19:49'),
(19, 'about_image_1', '1608445269.jpg', '2020-12-20 00:36:09', '2020-12-20 00:36:09'),
(20, 'refund', '<p>This is dummy text to build page content for longer scroll to show navbar sticky behavior. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet justo donec enim. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Pharetra convallis posuere morbi leo urna. Eget nulla facilisi etiam dignissim diam quis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Eget nullam non nisi est. Sapien nec sagittis aliquam malesuada bibendum. Proin libero nunc consequat interdum varius sit. Non quam lacus suspendisse faucibus interdum. Vel facilisis volutpat est velit egestas. This is dummy text to build page content for longer scroll to show navbar sticky behavior. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet justo donec enim. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Pharetra convallis posuere morbi leo urna. Eget nulla facilisi etiam dignissim diam quis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Eget nullam non nisi est. Sapien nec sagittis aliquam malesuada bibendum. Proin libero nunc consequat interdum varius sit. Non quam lacus suspendisse faucibus interdum. Vel facilisis volutpat est velit egestas. This is dummy text to build page content for longer scroll to show navbar sticky behavior. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet justo donec enim. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Pharetra convallis posuere morbi leo urna. Eget nulla facilisi etiam dignissim diam quis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Eget nullam non nisi est. Sapien nec sagittis aliquam malesuada bibendum. Proin libero nunc consequat interdum varius sit. Non quam lacus suspendisse faucibus interdum. Vel facilisis volutpat est velit egestas.</p>', '2020-12-20 01:14:42', '2020-12-20 02:38:24'),
(21, 'privacy', '<p>This is dummy text to build page content for longer scroll to show navbar sticky behavior. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet justo donec enim. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Pharetra convallis posuere morbi leo urna. Eget nulla facilisi etiam dignissim diam quis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Eget nullam non nisi est. Sapien nec sagittis aliquam malesuada bibendum. Proin libero nunc consequat interdum varius sit. Non quam lacus suspendisse faucibus interdum. Vel facilisis volutpat est velit egestas. This is dummy text to build page content for longer scroll to show navbar sticky behavior. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet justo donec enim. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Pharetra convallis posuere morbi leo urna. Eget nulla facilisi etiam dignissim diam quis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Eget nullam non nisi est. Sapien nec sagittis aliquam malesuada bibendum. Proin libero nunc consequat interdum varius sit. Non quam lacus suspendisse faucibus interdum. Vel facilisis volutpat est velit egestas. This is dummy text to build page content for longer scroll to show navbar sticky behavior. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Sit amet justo donec enim. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Pharetra convallis posuere morbi leo urna. Eget nulla facilisi etiam dignissim diam quis. Venenatis tellus in metus vulputate eu scelerisque felis imperdiet proin. Eget nullam non nisi est. Sapien nec sagittis aliquam malesuada bibendum. Proin libero nunc consequat interdum&nbsp;</p>', '2020-12-20 01:14:42', '2020-12-20 02:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', 'nepal', '2020-10-20 22:40:20', '2020-10-20 22:40:20'),
(2, 'Australia', 'australia', '2020-10-20 22:40:50', '2020-10-20 22:40:50');

-- --------------------------------------------------------

--
-- Table structure for table `descriptions`
--

CREATE TABLE `descriptions` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descriptions`
--

INSERT INTO `descriptions` (`id`, `product_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(11, 7, 'home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:21:08', '2020-10-20 23:21:08'),
(12, 7, 'profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:21:08', '2020-10-20 23:21:08'),
(13, 8, 'home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:42:26', '2020-10-20 23:42:26'),
(14, 8, 'profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:42:26', '2020-10-20 23:42:26'),
(15, 9, 'home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:44:50', '2020-10-20 23:44:50'),
(16, 9, 'profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:44:50', '2020-10-20 23:44:50'),
(17, 10, 'home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:45:43', '2020-10-20 23:45:43'),
(18, 10, 'profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:45:43', '2020-10-20 23:45:43'),
(19, 11, 'home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:46:26', '2020-10-20 23:46:26'),
(20, 11, 'profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.', '2020-10-20 23:46:26', '2020-10-20 23:46:26'),
(21, 12, 'Home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2020-10-21 00:08:56', '2020-10-21 00:08:56'),
(22, 12, 'Profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2020-10-21 00:08:56', '2020-10-21 00:08:56'),
(25, 14, 'Home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2020-10-21 00:16:23', '2020-10-21 00:16:23'),
(26, 14, 'Profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2020-10-21 00:16:23', '2020-10-21 00:16:23'),
(27, 15, 'Home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2020-10-21 00:17:14', '2020-10-21 00:17:14'),
(28, 15, 'Profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2020-10-21 00:17:14', '2020-10-21 00:17:14'),
(29, 16, 'Home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2020-10-21 00:23:38', '2020-10-21 00:23:38'),
(30, 16, 'Profile', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2020-10-21 00:23:38', '2020-10-21 00:23:38'),
(32, 21, '940', '51', '2020-11-05 01:16:36', '2020-11-05 01:16:36'),
(34, 18, 'best ejans', 'best quality jeans', '2020-11-18 00:35:52', '2020-11-18 00:35:52'),
(37, 21, NULL, NULL, '2020-12-16 03:53:00', '2020-12-16 03:53:00'),
(39, 23, '474', '502', '2020-12-16 04:02:20', '2020-12-16 04:02:20'),
(40, 16, 'dsad', 'dsada', '2021-01-19 17:40:42', '2021-01-19 17:43:14'),
(41, 16, NULL, NULL, '2021-01-19 17:40:54', '2021-01-19 17:40:54'),
(42, 24, NULL, NULL, '2021-01-20 14:00:01', '2021-01-20 14:00:01'),
(43, 26, NULL, NULL, '2021-01-20 14:14:57', '2021-01-20 14:14:57'),
(44, 27, NULL, NULL, '2021-01-20 14:20:28', '2021-01-20 14:20:28'),
(45, 28, NULL, NULL, '2021-01-20 14:32:27', '2021-01-20 14:32:27'),
(46, 29, 'Home', 'Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica', '2021-01-31 11:27:45', '2021-01-31 11:27:45'),
(47, 29, NULL, NULL, '2021-01-31 11:27:45', '2021-01-31 11:27:45'),
(48, 30, NULL, NULL, '2021-01-31 11:44:45', '2021-01-31 11:44:45'),
(49, 31, NULL, NULL, '2021-02-23 12:25:19', '2021-02-23 12:25:19'),
(50, 32, NULL, NULL, '2021-02-23 12:43:19', '2021-02-23 12:43:19'),
(51, 33, NULL, NULL, '2021-02-24 12:36:12', '2021-02-24 12:36:12'),
(52, 34, NULL, NULL, '2021-02-24 12:42:35', '2021-02-24 12:42:35'),
(53, 36, NULL, NULL, '2021-02-24 12:50:37', '2021-02-24 12:50:37'),
(54, 37, NULL, NULL, '2021-02-24 13:41:09', '2021-02-24 13:41:09'),
(55, 38, NULL, NULL, '2021-02-24 14:06:21', '2021-02-24 14:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Pay with Paypal', '<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore.</p>', '2020-12-20 05:41:09', '2020-12-20 05:41:09');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_main` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `image`, `is_main`, `created_at`, `updated_at`) VALUES
(67, 8, '1611059641500.jpg', 1, '2021-01-19 17:34:01', '2021-01-19 17:34:11'),
(68, 7, '1611060049976.jpg', 1, '2021-01-19 17:40:49', '2021-01-19 17:41:07'),
(69, 16, '1611113320952.jpg', 1, '2021-01-20 08:28:40', '2021-01-20 08:28:57'),
(70, 9, '1611113438403.jpg', 1, '2021-01-20 08:30:38', '2021-01-20 08:30:51'),
(74, 18, '1611114074981.jpg', 1, '2021-01-20 08:41:14', '2021-01-20 08:42:11'),
(76, 12, '1611127977542.jpg', 1, '2021-01-20 12:32:57', '2021-01-20 12:33:41'),
(77, 12, '1611127977177.jpg', 0, '2021-01-20 12:32:57', '2021-01-20 12:33:52'),
(78, 23, '1611128891136.png', 1, '2021-01-20 12:48:11', '2021-01-20 12:48:49'),
(81, 14, '1611129492771.jpg', 1, '2021-01-20 12:58:12', '2021-01-20 12:58:47'),
(82, 15, '1611129728133.jpg', 1, '2021-01-20 13:02:08', '2021-01-20 13:04:36'),
(85, 24, '1611133201920.jpg', 1, '2021-01-20 14:00:01', '2021-01-20 14:00:01'),
(86, 26, '1611134097767.jpg', 1, '2021-01-20 14:14:57', '2021-01-20 14:14:57'),
(87, 27, '1611134428293.jpg', 1, '2021-01-20 14:20:28', '2021-01-20 14:20:28'),
(88, 28, '1611135147876.jpg', 1, '2021-01-20 14:32:27', '2021-01-20 14:32:27'),
(89, 11, '1611137248351.jpg', 1, '2021-01-20 15:07:28', '2021-01-20 15:07:44'),
(90, 29, '1612074465107.jpg', 1, '2021-01-31 11:27:45', '2021-01-31 11:27:45'),
(91, 29, '1612074465487.jpg', 0, '2021-01-31 11:27:45', '2021-01-31 11:27:45'),
(92, 30, '1612075485696.jpg', 1, '2021-01-31 11:44:45', '2021-01-31 11:44:45'),
(93, 31, '1614065119593.jpeg', 1, '2021-02-23 12:25:19', '2021-02-23 12:25:19'),
(98, 31, '1614065549521.jpeg', 0, '2021-02-23 12:32:29', '2021-02-23 12:32:29'),
(99, 31, '1614065549399.jpeg', 0, '2021-02-23 12:32:29', '2021-02-23 12:32:29'),
(100, 32, '1614066199476.jpeg', 1, '2021-02-23 12:43:19', '2021-02-23 12:43:19'),
(101, 32, '1614066199481.jpeg', 0, '2021-02-23 12:43:19', '2021-02-23 12:43:19'),
(103, 34, '1614152555207.webp', 1, '2021-02-24 12:42:35', '2021-02-24 12:42:35'),
(105, 37, '1614156069978.jpg', 1, '2021-02-24 13:41:09', '2021-02-24 13:41:09'),
(106, 38, '1614157581824.jpg', 1, '2021-02-24 14:06:21', '2021-02-24 14:06:21'),
(107, 10, '1662623711137.jpg', 1, '2022-09-08 02:10:11', '2022-09-08 02:10:31'),
(108, 21, '1662631397244.jpg', 1, '2022-09-08 04:18:17', '2022-09-08 04:18:28'),
(109, 33, '1662631654759.jpg', 1, '2022-09-08 04:22:34', '2022-09-08 04:23:36'),
(110, 36, '1662708959723.jpg', 1, '2022-09-09 01:50:59', '2022-09-09 01:51:06');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_06_26_000000_create_shopping_cart_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_09_03_072255_create_categories_table', 1),
(6, '2020_09_08_044517_create_sizes_table', 1),
(7, '2020_09_08_044650_create_brands_table', 1),
(8, '2020_09_09_075913_create_products_table', 1),
(9, '2020_09_14_083541_create_images_table', 1),
(10, '2020_09_14_090927_create_descriptions_table', 1),
(11, '2020_09_14_091133_create_seos_table', 1),
(12, '2020_09_15_042231_create_product_categories_table', 1),
(13, '2020_09_20_082048_create_verify_users_table', 1),
(14, '2020_09_23_081542_create_wishlists_table', 1),
(15, '2020_09_24_155043_create_addresses_table', 1),
(16, '2020_09_24_155836_create_shippings_table', 1),
(17, '2020_09_27_114424_create_countries_table', 1),
(18, '2020_09_27_114439_create_cities_table', 1),
(19, '2020_09_30_054125_create_colors_table', 1),
(20, '2020_09_30_072418_create_color_stocks_table', 1),
(21, '2020_09_31_043546_create_stocks_table', 1),
(22, '2020_10_04_084815_create_orders_table', 1),
(23, '2020_10_04_090036_create_order_addresses_table', 1),
(24, '2020_10_07_035829_create_order_details_table', 1),
(25, '2020_10_11_105726_create_reviews_table', 1),
(26, '2020_12_08_071034_create_payment_methods_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `order_track` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `subtotal`, `tax`, `discount`, `grand_total`, `status`, `order_track`, `shipping_id`, `created_at`, `updated_at`) VALUES
(54, 2, '1000', '130', NULL, '1230', 0, 'OT2-1611119027', 1, '2021-01-20 10:03:47', '2021-01-20 10:03:47'),
(55, 2, '1000', '130', NULL, '1230', 0, 'OT2-1611128587', 1, '2021-01-20 12:43:07', '2021-01-20 12:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_addresses`
--

CREATE TABLE `order_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_addresses`
--

INSERT INTO `order_addresses` (`id`, `first_name`, `last_name`, `email`, `phone`, `company`, `country`, `city`, `zip_code`, `address1`, `address2`, `order_id`, `created_at`, `updated_at`) VALUES
(4, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 4, '2020-12-05 23:55:31', '2020-12-05 23:55:31'),
(5, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 5, '2020-12-06 00:14:14', '2020-12-06 00:14:14'),
(6, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 6, '2020-12-08 04:33:57', '2020-12-08 04:33:57'),
(7, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 7, '2020-12-09 01:06:37', '2020-12-09 01:06:37'),
(8, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '2', '100', 3213, 'Babaramramds', 'dasda', 8, '2020-12-09 03:26:18', '2020-12-09 03:26:18'),
(9, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 9, '2020-12-09 04:51:52', '2020-12-09 04:51:52'),
(10, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 10, '2020-12-09 04:51:55', '2020-12-09 04:51:55'),
(11, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 11, '2020-12-09 04:52:01', '2020-12-09 04:52:01'),
(12, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 12, '2020-12-09 04:52:06', '2020-12-09 04:52:06'),
(13, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 13, '2020-12-09 04:52:07', '2020-12-09 04:52:07'),
(14, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 14, '2020-12-09 04:52:07', '2020-12-09 04:52:07'),
(15, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 15, '2020-12-09 04:52:08', '2020-12-09 04:52:08'),
(16, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '1', '100', 3213, 'Babaramramds', 'dasda', 16, '2020-12-09 04:52:08', '2020-12-09 04:52:08'),
(17, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '2', '100', 3213, 'Babaramramds', 'dasda', 17, '2020-12-09 04:52:38', '2020-12-09 04:52:38'),
(18, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '2', '100', 3213, 'Babaramramds', 'dasda', 18, '2020-12-09 04:52:40', '2020-12-09 04:52:40'),
(19, 'admin', 'hero\"', 'admin@gmail.com', '01421755', NULL, '2', '100', 3213, 'Babaramramds', 'dasda', 19, '2020-12-09 04:52:40', '2020-12-09 04:52:40'),
(20, 'Madonna', 'Blackwell', 'kydisy@mailinator.com', '+1 (713) 864-7856', NULL, '1', '100', 84696, '60 Cowley Extension', 'Sit dolor officia e', 20, '2020-12-09 04:55:45', '2020-12-09 04:55:45'),
(21, 'Madonna', 'Blackwell', 'kydisy@mailinator.com', '+1 (713) 864-7856', NULL, '1', '100', 84696, '60 Cowley Extension', 'Sit dolor officia e', 21, '2020-12-09 04:55:49', '2020-12-09 04:55:49'),
(22, 'Madonna', 'Blackwell', 'kydisy@mailinator.com', '+1 (713) 864-7856', NULL, '1', '100', 84696, '60 Cowley Extension', 'Sit dolor officia e', 22, '2020-12-09 04:55:51', '2020-12-09 04:55:51'),
(23, 'Madonna', 'Blackwell', 'kydisy@mailinator.com', '+1 (713) 864-7856', NULL, '1', '100', 84696, '60 Cowley Extension', 'Sit dolor officia e', 23, '2020-12-09 04:55:51', '2020-12-09 04:55:51'),
(24, 'Madonna', 'Blackwell', 'kydisy@mailinator.com', '+1 (713) 864-7856', NULL, '1', '100', 84696, '60 Cowley Extension', 'Sit dolor officia e', 24, '2020-12-09 04:55:52', '2020-12-09 04:55:52'),
(26, 'Madonna', 'Blackwell', 'kydisy@mailinator.com', '+1 (713) 864-7856', NULL, '1', '100', 84696, '60 Cowley Extension', 'Sit dolor officia e', 26, '2020-12-09 04:55:53', '2020-12-09 04:55:53'),
(36, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 500, 'Kathmandu', 'Nepal', 36, '2021-01-08 00:27:38', '2021-01-08 00:27:38'),
(37, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 231, 'dasdas', 'dasdas', 37, '2021-01-08 00:41:59', '2021-01-08 00:41:59'),
(39, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '2', '100', 56001, 'sydney', 'australia', 44, '2021-01-08 00:50:40', '2021-01-08 00:50:40'),
(43, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3231, 'dasda', 'dsada', 48, '2021-01-19 00:04:58', '2021-01-19 00:04:58'),
(44, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3231, 'dasda', 'dsada', 49, '2021-01-19 00:37:41', '2021-01-19 00:37:41'),
(45, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3231, 'dasda', 'dsada', 50, '2021-01-19 01:19:31', '2021-01-19 01:19:31'),
(46, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3231, 'dasda', 'dsada', 51, '2021-01-19 01:23:26', '2021-01-19 01:23:26'),
(47, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3231, 'dasda', 'dsada', 52, '2021-01-19 01:28:12', '2021-01-19 01:28:12'),
(48, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3231, 'dasda', 'dsada', 53, '2021-01-19 16:50:50', '2021-01-19 16:50:50'),
(49, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3231, 'dasda', 'dsada', 54, '2021-01-20 10:03:47', '2021-01-20 10:03:47'),
(50, 'Bibek', 'Baldwin\"', 'bibekaryal0@gmail.com', '9813190213', NULL, '1', '100', 3231, 'dasda', 'dsada', 55, '2021-01-20 12:43:07', '2021-01-20 12:43:07');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `quantity`, `size`, `discount`, `total`, `color`, `created_at`, `updated_at`) VALUES
(48, 54, 7, '1000', 1, NULL, '0', '1000', 'Red', '2021-01-20 10:03:47', '2021-01-20 10:03:47'),
(49, 55, 7, '1000', 1, NULL, '0', '1000', 'Red', '2021-01-20 12:43:07', '2021-01-20 12:43:07');

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
-- Table structure for table `payment_methods`
--

CREATE TABLE `payment_methods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment_methods`
--

INSERT INTO `payment_methods` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Esewa', '1607417973.png', 1, '2020-12-08 03:14:33', '2020-12-08 03:22:08'),
(3, 'Cash on Delivery', '1607418455.png', 1, '2020-12-08 03:22:35', '2020-12-08 03:22:53'),
(5, 'Pay with Credit Card', '1607423168.png', 1, '2020-12-08 04:41:08', '2020-12-08 04:41:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discount_price` double(8,2) NOT NULL,
  `wholesale_price` double DEFAULT NULL,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `short_description` varchar(10091) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size_variation` tinyint(1) NOT NULL DEFAULT 0,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `is_featured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_popular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `on_sale` tinyint(1) NOT NULL DEFAULT 0,
  `is_special` tinyint(1) NOT NULL DEFAULT 0,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` int(10) UNSIGNED DEFAULT NULL,
  `audio` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `slug`, `price`, `discount_price`, `wholesale_price`, `views`, `short_description`, `long_description`, `size_variation`, `video`, `status`, `is_featured`, `is_popular`, `on_sale`, `is_special`, `sku`, `brand_id`, `audio`, `deleted_at`, `created_at`, `updated_at`) VALUES
(7, 'Samsung OLED TV', 'samsung-oled-tv', 2000, 1000.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'featured', 'notpopular', 0, 1, 'sweaadsada', 3, NULL, NULL, '2020-10-20 23:21:08', '2021-01-19 17:30:22'),
(8, 'Freeze', 'freeze', 2000, 1000.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'featured', 'notpopular', 0, 1, 'sweaadsada', 3, NULL, NULL, '2020-10-20 23:42:25', '2021-01-19 17:34:32'),
(9, 'Juicer', 'juicer', 2000, 1000.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'featured', 'notpopular', 0, 1, 'sweaadsada', 4, NULL, NULL, '2020-10-20 23:44:50', '2021-01-20 08:30:38'),
(10, 'Mono Colored Television', 'mono-colored-television', 2000, 1000.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'featured', 'notpopular', 0, 1, 'sweaadsada', 4, NULL, NULL, '2020-10-20 23:45:42', '2021-01-20 08:37:17'),
(11, 'Redmi Note 8 Pro', 'redmi-note-8-pro', 29999, 25000.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'unfeatured', 'notpopular', 0, 1, 'sweaadsada', 4, NULL, NULL, '2020-10-20 23:46:25', '2021-01-20 15:07:28'),
(12, 'Iphone 12 Mini 128 GB', 'iphone-12-mini-128-gb', 130000, 126000.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'unfeatured', 'popular', 0, 1, 'dasdasda', 1, NULL, NULL, '2020-10-21 00:08:54', '2021-01-20 12:32:57'),
(14, 'Samsung Q60R 82 inch 4K Ultra HD Smart QLED TV', 'samsung-q60r-82-inch-4k-ultra-hd-smart-qled-tv', 80000, 74999.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'unfeatured', 'popular', 0, 1, 'dasdasda', 1, NULL, NULL, '2020-10-21 00:16:23', '2021-01-20 12:58:12'),
(15, 'Redmi Note 9 Pro Max', 'redmi-note-9-pro-max', 32000, 31999.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'unfeatured', 'popular', 0, 1, 'dasdasda', 1, NULL, NULL, '2020-10-21 00:17:14', '2021-01-20 13:05:25'),
(16, 'Canon Camera', 'canon-camera', 60000, 55000.00, 0, '0', '<p>Composition</p><ul><li>Elastic rib: Cotton 95%, Elastane 5%</li><li>Lining: Cotton 100%</li><li>Cotton 80%, Polyester 20%</li></ul><p>Art. No.</p><ul><li>183260098</li></ul>', '<p>Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.Raw denim you probably haven\'t heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Excepteur sint occaecat cupidatat non proident.</p>', 0, NULL, 1, 'unfeatured', 'popular', 0, 1, 'dasdasda', 1, NULL, NULL, '2020-10-21 00:23:37', '2021-01-20 08:28:40'),
(18, 'Water Purifier', 'water-purifier', 1500, 1200.00, 1000, '0', '<p>dsadadsa</p>', '<p>dsada</p>', 1, NULL, 1, 'featured', 'popular', 0, 1, 'Ea lorem aut culpa', 1, NULL, NULL, '2020-11-18 00:35:51', '2021-01-20 08:41:58'),
(21, 'Ocean Blue Cashmere Color shawl (MHCS10)', 'ocean-blue-cashmere-color-shawl-mhcs10', 479, 145.00, 825, '0', '<p>dsada</p>', NULL, 0, NULL, 1, 'unfeatured', 'popular', 0, 1, 'Labore ratione aute', 2, '1608111480.mp3', NULL, '2020-12-16 03:53:00', '2022-09-08 04:18:16'),
(23, 'Audionic Mehfil MH 12 8 Portable Speaker', 'audionic-mehfil-mh-12-8-portable-speaker', 8000, 7499.00, 100, '0', '<p>cxczcz</p>', NULL, 0, NULL, 1, 'unfeatured', 'notpopular', 0, 0, 'Quia est eum exercit', 2, '1608113290.mp3', NULL, '2020-12-16 04:02:20', '2021-01-20 12:48:11'),
(24, 'Hisense 564 Ltr Refrigerators', 'hisense-564-ltr-refrigerators', 96000, 95120.00, NULL, '0', '<p>General</p><p>Brand Samsung</p><p>Colour Black</p>', '<p>General</p><p>Brand Samsung</p><p>Colour Black</p><p>TV Display Type QLED</p><p>TV Display Size 82 inch</p><p>HD Technology 4K Ultra HD (UHD)</p><p>Resolution 3840 x 2160 Pixels</p><p>Motion Rate 200 Hz</p><p>Processor Quantum Processor 4K</p><p>Wi-Fi Type Built In Wi-Fi</p>', 0, NULL, 1, 'unfeatured', 'notpopular', 0, 0, 'rdsdrd', 1, NULL, NULL, '2021-01-20 14:00:01', '2021-01-20 14:00:01'),
(26, 'Haier Refrigerator HRD 1703 SR-R', 'haier-refrigerator-hrd-1703-sr-r', 20000, 1990.00, NULL, '0', '<p>Haier 170 L 3 Star (2019) Direct Cool Single Door Refrigerator(HRD-1703SR-R/HRD-1703SR-E, Burgundy Red)</p>', '<ul><li>Direct Cool, Single Door: Economical requires manual defrosting</li><li>Cacapity 170 L: Suitable for bachelors</li><li>Warranty: 1 year on product, 5 years on compressor</li><li>Energy Rating: 3 Star</li><li>Shelf Type: Wired Shelves</li><li>Also included in the box: User manual, Warranty card</li></ul>', 0, NULL, 1, 'unfeatured', 'notpopular', 0, 0, 'afhiadohf', 2, NULL, NULL, '2021-01-20 14:14:57', '2021-01-20 14:14:57'),
(27, 'Dell XPS 15', 'dell-xps-15', 335000, 334500.00, NULL, '0', '<h2>Dell XPS 15 7590 2019 15.6\" Core I7-9750H 32GB RAM 1TB PCIe SSD FHD IPS 500-NIT Non-Touch (1920X1080) NVIDIA GTX 1650 4GB Windows 10 Home (Renewed)</h2>', '<p>- This pre-owned product has been professionally inspected, tested and cleaned by Amazon-qualified suppliers.<br>- There will be no visible cosmetic imperfections when held at an arm’s length.<br>- Products with batteries will exceed 80% capacity relative to new.<br>- Accessories may not be original, but will be compatible and fully functional. Product may come in generic box.<br>- This product is eligible for a replacement or refund within 90 days of receipt if you are not satisfied under the Amazon Renewed Guarantee</p>', 0, NULL, 1, 'unfeatured', 'notpopular', 0, 0, 'rrpiofgwoeriut', 1, NULL, NULL, '2021-01-20 14:20:28', '2021-01-20 14:20:28'),
(28, 'Canon EOS DSLR Camera', 'canon-eos-dslr-camera', 50000, 49000.00, NULL, '0', '<p>Canon EOS 4000D 18.0 MP DSLR Camera With EF-S 18-55mm IS (16 Gb Card )- Black</p>', '<p>Product details of Canon EOS 4000D 18.0 MP DSLR Camera With EF-S 18-55mm IS (16 Gb Card )- Black</p><p>Brand : Canon.</p><p>Model Number: EOS 4000D.</p><p>SLR Variant : Body with Single Lens: EF-S18-55 IS(16 GB SD Card )</p><p>Brand Color : Black.</p><p>Type : DSLR.</p><p>Effective Pixels : 18.0 MP.</p><p>Compact and Lightweight design.</p><p>Wi-Fi/NFC low energy.</p>', 0, NULL, 1, 'unfeatured', 'notpopular', 0, 0, 'uydgfr87g', 2, NULL, NULL, '2021-01-20 14:32:27', '2021-01-20 14:32:27'),
(29, 'JBL HEADPHONE', 'jbl-headphone', 2500, 2000.00, NULL, '0', '<p>dasdsa</p>', '<p>dsada</p>', 0, NULL, 1, 'featured', 'popular', 1, 1, 'dsadas', 5, NULL, NULL, '2021-01-31 11:27:45', '2021-01-31 11:27:45'),
(30, 'Godrejj Freeze', 'godrejj-freeze', 25000, 20000.00, NULL, '0', '<p>ddasdsad</p>', '<p>dasda</p>', 0, NULL, 1, 'featured', 'popular', 0, 1, 'dsadas', 6, NULL, NULL, '2021-01-31 11:44:45', '2021-01-31 11:44:45'),
(31, 'Samsung 190 L Single Door Refrigerator RR20M2741R2', 'samsung-190-l-single-door-refrigerator-rr20m2741r2', 28800, 28800.00, NULL, '0', '<ul><li>Brand: Samsung</li><li>Model No: RR20M2741R2/IM</li><li>Color: Maroon</li><li>Capacity: 192 LTRS</li><li>Door Type: Single Door</li><li>Cooling Type: External Condenser</li><li>Anti bacterial gasket</li><li>Egg cum and Ice Tray</li><li>Works without Stabilizer</li><li>Door Lock: Yes</li><li>Fastest Ice Making :Yes</li><li>Moist Balance Crisper: Yes</li><li>Anti Bacteria Gasket :Yes</li><li>Shelves Toughened Glass Shelves</li><li>Exteriors High Gloss Designer Panel, Bar Handle</li><li>Transparent Freezer Door, Transparent Shelf Utility</li><li>Warranty: 2 years,Compressor 5 years</li></ul>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 1, 'RR20M2741R2', 5, NULL, NULL, '2021-02-23 12:25:19', '2021-02-23 12:32:25'),
(32, 'Samsung 190L Single Door Refrigerator RR19M2102SE', 'samsung-190l-single-door-refrigerator-rr19m2102se', 27000, 27000.00, NULL, '0', '<p>Brand: Samsung</p><p>Model No: RR19M2102SE/IM</p><p>Color: Silver</p><p>Capacity: 190 LTRS</p><p>Door Type:Single Door</p><p>Cooling Type: External Condenser</p><p>Anti bacterial gasket</p><p>Egg cum and Ice Tray</p><p>Works without Stabilizer</p><p>Door Lock: Yes</p><p>Fastest Ice Making :Yes</p><p>Moist Balance Crisper: Yes</p><p>Anti Bacteria Gasket :Yes</p><p>Shelves Toughened Glass Shelves</p><p>Exteriors High Gloss Designer Panel, Bar Handle</p><p>Transparent Freezer Door, Transparent Shelf Utility</p><p>Warranty: 2 years,Compressor 5 years</p>', NULL, 0, NULL, 1, 'featured', 'popular', 1, 0, 'RR19M2102SE', NULL, NULL, NULL, '2021-02-23 12:43:19', '2021-02-23 12:43:19'),
(33, 'Shady Pink Cashmere Color Shawl (MHCS06)', 'shady-pink-cashmere-color-shawl-mhcs06', 126500, 126500.00, NULL, '0', '<p>Attract the person you like with this beautiful red cashmere shawl. Beautiful, minimalistic, majestic, and handmade, the wrap is one of the many experiences that bring the ultimate delight into your life is the Cashmere Shawl.</p>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'UA55M5500', 5, NULL, NULL, '2021-02-24 12:36:12', '2022-09-09 05:40:02'),
(34, 'Samsung UA43N5300AR 43 inch Full HD Smart LED TV', 'samsung-ua43n5300ar-43-inch-full-hd-smart-led-tv', 53500, 53500.00, NULL, '0', '<p>GENERAL</p><figure class=\"table\"><table><tbody><tr><td>Warranty</td><td>1 year warranty on product</td></tr><tr><td>Model</td><td>UA43N5300AR</td></tr><tr><td>Box Contents</td><td>Television, Remote Control, Batteries, Power Cord, User Manual &amp; Warranty card</td></tr><tr><td>Brand</td><td>Samsung</td></tr></tbody></table></figure><p>POWER SUPPLY</p><figure class=\"table\"><table><tbody><tr><td>Voltage Requirement</td><td>100 - 240 V</td></tr><tr><td>Power Consmption Running</td><td>50 - 60 Hz</td></tr><tr><td>Power Consmption Standby</td><td>0.5 W</td></tr><tr><td>Power Saving Mode</td><td>Yes</td></tr></tbody></table></figure>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'UA43N5300AR', 5, NULL, NULL, '2021-02-24 12:42:35', '2021-02-24 12:42:35'),
(36, 'Woolen Jacket (MHWJK-01)', 'woolen-jacket-mhwjk-01', 30000, 30000.00, NULL, '0', '<ul><li><strong>Display</strong><ul><li>32-inch Display</li><li>HD</li><li>1366x768 Screen Resolution</li><li>LED Screen Type</li><li>Ideal viewing distance of 4 - 6 ft</li></ul></li><li><strong>Size</strong><ul><li>738.4 x 441.7 x 93.2 mm Product Dimensions</li><li>6 kg Item Weight</li></ul></li><li><strong>Connectivity</strong><ul><li>1 USB Port</li><li>1 HDMI Port</li></ul></li><li><strong>Audio</strong><ul><li>Stereo 20W Speakers</li></ul></li></ul>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'UA32FH4003R', 5, NULL, NULL, '2021-02-24 12:50:37', '2022-09-09 01:50:59'),
(37, 'Samsung 24 inch UA24H 4003AR XXL', 'samsung-24-inch-ua24h-4003ar-xxl', 23000, 23000.00, NULL, '0', '<figure class=\"table\"><table><thead><tr><th colspan=\"2\">GENERAL SPECIFICATIONS</th></tr></thead><tbody><tr><td>Dimensions (mm)</td><td>561.8 x 349.1 x 47.9</td></tr><tr><td>Weight with Stand</td><td>4.1kg</td></tr><tr><td>Weight without Stand</td><td>3.9kg</td></tr><tr><td>Remote</td><td>Standard Remote</td></tr><tr><td>Power Consumption (In Use)</td><td>33W</td></tr><tr><td>Warranty</td><td>1 Year</td></tr><tr><td>Package Contents</td><td>TV Unit, Remote Control, TV Stand, Wall Mount</td></tr><tr><td>Convenience Features</td><td>On/Off Timer, Clock, Auto Channel Search</td></tr></tbody></table></figure>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'UA24H 4003AR', 5, NULL, NULL, '2021-02-24 13:41:09', '2021-02-24 13:41:09'),
(38, 'Samsung 80 cm (32 inch) Full HD TV Black (M4010)', 'samsung-80-cm-32-inch-full-hd-tv-black-m4010', 33000, 33000.00, NULL, '0', '<p><strong>GENERAL</strong></p><p><strong>Brand</strong></p><p>Samsung</p><p><strong>Model Name</strong></p><p>UA32M4010DRLXL</p><p><strong>Color</strong></p><p>Black</p><p><strong>Smart Tv</strong></p><p>No</p><p><strong>Curve TV</strong></p><p>No</p><p><strong>HD</strong></p><p>Full HD</p><p><strong>Package includes</strong></p><p>LED, remote, user guide, and warranty card.</p><p>&nbsp;</p>', NULL, 0, NULL, 1, 'featured', 'popular', 0, 0, 'M4010', 5, NULL, NULL, '2021-02-24 14:06:21', '2021-02-24 14:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(12, 10, 4, NULL, NULL),
(22, 16, 1, NULL, NULL),
(23, 16, 2, NULL, NULL),
(38, 18, 1, NULL, NULL),
(49, 23, 8, NULL, NULL),
(50, 12, 8, NULL, NULL),
(51, 14, 8, NULL, NULL),
(52, 7, 8, NULL, NULL),
(53, 8, 2, NULL, NULL),
(54, 9, 1, NULL, NULL),
(58, 15, 3, NULL, NULL),
(59, 24, 1, NULL, NULL),
(62, 26, 1, NULL, NULL),
(63, 27, 2, NULL, NULL),
(64, 28, 9, NULL, NULL),
(65, 11, 3, NULL, NULL),
(66, 29, 12, NULL, NULL),
(67, 30, 17, NULL, NULL),
(68, 31, 17, NULL, NULL),
(69, 32, 17, NULL, NULL),
(70, 33, 4, NULL, NULL),
(71, 34, 4, NULL, NULL),
(73, 36, 4, NULL, NULL),
(74, 37, 4, NULL, NULL),
(75, 38, 4, NULL, NULL),
(77, 7, 1, NULL, NULL),
(78, 21, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` double(8,2) NOT NULL,
  `review` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pros` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cons` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `email`, `rating`, `review`, `pros`, `cons`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Bibek', 'bibekaryal0@gmail.com', 5.00, 'dsada', 'dasda', 'dasda', 16, 1, '2020-11-03 00:46:20', '2020-11-03 00:46:20'),
(2, 'Jared Cobb', 'rozafozavo@mailinator.com', 3.00, 'Dolor eveniet porro', 'Ut laboriosam repel', 'Libero asperiores de', 15, 1, '2020-11-03 01:01:34', '2020-11-03 01:01:34'),
(3, 'Bibek Aryal', 'bibekaryal0@gmail.com', 5.00, 'dsadas', 'dsada', 'dsada', 11, 2, '2020-12-06 01:44:58', '2020-12-06 01:44:58'),
(4, 'Kaden Hobbs', 'towuci@mailinator.com', 2.00, 'A fuga Sed quo eaqu', 'Temporibus qui omnis', 'Ullamco eligendi eli', 23, 5, '2020-12-16 04:37:14', '2020-12-16 04:37:14'),
(6, 'admin', 'admin@gmail.com', 5.00, 'dasda', NULL, NULL, 23, 1, '2021-01-07 04:45:29', '2021-01-07 04:45:29');

-- --------------------------------------------------------

--
-- Table structure for table `seos`
--

CREATE TABLE `seos` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seos`
--

INSERT INTO `seos` (`id`, `product_id`, `seo_keyword`, `seo_description`, `created_at`, `updated_at`) VALUES
(1, 18, '<p>dasda</p>', '<p>dsada</p>', '2020-11-18 00:35:52', '2020-11-18 00:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` int(10) UNSIGNED NOT NULL,
  `shipping_location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_price` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `zip_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `shipping_location`, `shipping_price`, `status`, `zip_code`, `created_at`, `updated_at`) VALUES
(1, 'Kathmandu', 100, 1, '0', '2020-10-20 22:41:29', '2020-10-20 22:41:29'),
(3, 'Melbourne', 500, 0, '0', '2020-10-20 22:41:56', '2020-12-08 02:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'M', 'm', '2020-10-20 22:32:22', '2020-10-20 22:32:22'),
(2, 'S', 's', '2020-10-20 22:32:28', '2020-10-20 22:32:28'),
(3, 'L', 'l', '2020-10-20 22:32:31', '2020-10-20 22:32:31'),
(5, 'Xl', 'xl', '2021-01-31 11:19:31', '2021-01-31 11:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `size_id` int(10) UNSIGNED NOT NULL,
  `color_id` int(10) UNSIGNED NOT NULL,
  `stock` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `size_id`, `color_id`, `stock`, `created_at`, `updated_at`) VALUES
(1, 18, 1, 2, 4, '2020-11-18 00:35:52', '2020-11-18 00:35:52'),
(2, 18, 3, 1, 10, '2020-11-18 00:35:52', '2020-11-18 00:35:52'),
(3, 18, 1, 2, 4, '2020-11-18 00:35:52', '2020-11-18 00:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `roles` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `email_verified_at`, `password`, `verified`, `roles`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'hero', 'admin@gmail.com', '01421755', NULL, '$2y$10$WsxWZvz9XuL/kmN1iLSOhOhQQNx4wJLbMBABabXzRlWcD3MwjE8M2', '1', 'admin', NULL, 'XMdxZYOABbR0B2Kyr37n1o0G7lXYVW9q1yxEDWudptmswjUAVQ8aY9t8lJ8g', '2020-10-20 22:20:44', '2021-01-01 04:10:02'),
(2, 'Bibek', 'Baldwin', 'bibekaryal0@gmail.com', '9813190213', NULL, '$2y$10$WsxWZvz9XuL/kmN1iLSOhOhQQNx4wJLbMBABabXzRlWcD3MwjE8M2', '1', 'user', NULL, 'zVDJgA37LK5aqyOeC1ODFBQ8niBQ5UAmuBWp5RvD3EetDwRg5tQgZhHIR4sn', '2020-11-10 23:27:45', '2021-01-01 03:11:50'),
(5, 'Arsenio', 'Howe', 'wholesale@gmail.com', '+1 (443) 996-5502', NULL, '$2y$10$Simo5.yl0SNyT8kmsibGj.eaBtBgCbpLm5EA1pByf6siJGRDCwgES', '1', 'wholeseller', NULL, NULL, '2020-11-11 10:08:39', '2020-11-11 10:08:39'),
(6, 'Subir', 'joshi', 'kebib96@gmail.com', '312312321', NULL, '$2y$10$SQ9wWxgbgjJIzr4a5EZYh.wFrCToRI0lhqMPPqy4qeAsAUWqgfi0O', '0', 'user', NULL, NULL, '2020-12-08 00:11:37', '2020-12-08 00:11:37'),
(12, NULL, NULL, 'bibekaryal79@yahoo.com', NULL, NULL, NULL, '0', NULL, NULL, NULL, '2020-12-16 02:51:18', '2020-12-16 02:51:18'),
(27, 'Colby', 'Prince', 'arundg2018@gmail.com', '1365868317', NULL, '$2y$10$XK03AY5LmP3VkPoNs5ImP.NVxJV6wmQKBh0Ei20lPBTdjRxhsiIki', '1', 'user', NULL, NULL, '2021-01-20 14:24:35', '2021-01-20 14:26:14'),
(28, 'Manish', 'Adjdo', 'manishadhikari241@gmail.com', '728283838', NULL, '$2y$10$dcyBs5wcEP.XxCydtz0fLOaM03bV.YCjThRx8zrXl2CC/16iSznxK', '0', 'user', NULL, NULL, '2021-01-20 17:44:55', '2021-01-20 17:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

CREATE TABLE `verify_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 2, 'amKjCraGo7qbyxdX8EOI', '2020-11-10 23:27:45', '2020-11-10 23:27:45'),
(2, 6, 'jt6WW8bFGApjDbi2uXlc', '2020-12-08 00:11:37', '2020-12-08 00:11:37'),
(17, 27, 'ytBFZ6DQ4C86O07xGuJ5', '2021-01-20 14:24:35', '2021-01-20 14:24:35'),
(18, 28, 'kDwAoBKgMLiKIvRJPuJU', '2021-01-20 17:44:55', '2021-01-20 17:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `created_at`, `updated_at`) VALUES
(4, 1, 21, '2020-12-22 04:50:53', '2020-12-22 04:50:53');

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
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_country_id_foreign` (`country_id`);

--
-- Indexes for table `cl_banner`
--
ALTER TABLE `cl_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_stocks`
--
ALTER TABLE `color_stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `color_stocks_product_id_foreign` (`product_id`),
  ADD KEY `color_stocks_color_id_foreign` (`color_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `descriptions_product_id_foreign` (`product_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_addresses`
--
ALTER TABLE `order_addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_addresses_order_id_foreign` (`order_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`),
  ADD KEY `order_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment_methods`
--
ALTER TABLE `payment_methods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_product_id_foreign` (`product_id`),
  ADD KEY `product_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`),
  ADD KEY `reviews_user_id_foreign` (`user_id`);

--
-- Indexes for table `seos`
--
ALTER TABLE `seos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seos_product_id_foreign` (`product_id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`,`instance`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_product_id_foreign` (`product_id`),
  ADD KEY `stocks_size_id_foreign` (`size_id`),
  ADD KEY `stocks_color_id_foreign` (`color_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `verify_users_user_id_foreign` (`user_id`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cl_banner`
--
ALTER TABLE `cl_banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `color_stocks`
--
ALTER TABLE `color_stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `descriptions`
--
ALTER TABLE `descriptions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `order_addresses`
--
ALTER TABLE `order_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `payment_methods`
--
ALTER TABLE `payment_methods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seos`
--
ALTER TABLE `seos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `verify_users`
--
ALTER TABLE `verify_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `addresses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `color_stocks`
--
ALTER TABLE `color_stocks`
  ADD CONSTRAINT `color_stocks_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `color_stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `descriptions`
--
ALTER TABLE `descriptions`
  ADD CONSTRAINT `descriptions_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_addresses`
--
ALTER TABLE `order_addresses`
  ADD CONSTRAINT `order_addresses_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`);

--
-- Constraints for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `product_categories_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `seos`
--
ALTER TABLE `seos`
  ADD CONSTRAINT `seos_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_color_id_foreign` FOREIGN KEY (`color_id`) REFERENCES `colors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stocks_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stocks_size_id_foreign` FOREIGN KEY (`size_id`) REFERENCES `sizes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `verify_users`
--
ALTER TABLE `verify_users`
  ADD CONSTRAINT `verify_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
