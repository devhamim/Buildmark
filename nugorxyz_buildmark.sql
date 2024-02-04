-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2024 at 04:03 PM
-- Server version: 10.6.16-MariaDB-cll-lve
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nugorxyz_buildmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `define` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `subtitle`, `title`, `image`, `description`, `define`, `status`, `created_at`, `updated_at`) VALUES
(3, 'About Us', 'Modern Food BD', 'IwobP129622.jpg', '<p>Welcome to Modern Food, your ultimate destination for exquisite food and beverage experiences. As a premier food and beverage company, we take pride in offering a diverse range of high-quality products that cater to the unique tastes and preferences of our customers. With a commitment to excellence, we source the finest ingredients and employ innovative culinary techniques to create delectable dishes and beverages.</p><p><br></p><p>Our team of passionate chefs, food scientists, and experts is dedicated to crafting flavors that delight the senses and elevate your dining and drinking moments. We prioritize freshness, authenticity, and sustainability in every product we offer, ensuring a memorable experience for our consumers. Whether you\'re savoring our gourmet foods, indulging in our refreshing beverages, or exploring our culinary creations, you\'re embracing a journey of taste, quality, and innovation.</p><p><br></p><p>At Modern Food, we also value customer satisfaction and continuously strive to exceed your expectations. With a focus on customer-centricity, we provide exceptional service, prompt delivery, and unparalleled culinary expertise. Join us in celebrating the art of food and beverage, and let your taste buds embark on an extraordinary adventure with our delectable offerings.</p>', 1, 1, '2023-11-01 03:13:24', '2023-11-01 03:13:24'),
(4, 'About Us', 'Modern Food BD', 'RGLO1635335.jpg', '<p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\">Welcome to Modern Food, your ultimate destination for exquisite food and beverage experiences. As a premier food and beverage company, we take pride in offering a diverse range of high-quality products that cater to the unique tastes and preferences of our customers. With a commitment to excellence, we source the finest ingredients and employ innovative culinary techniques to create delectable dishes and beverages.</p><p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\"><br></p><p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\">Our team of passionate chefs, food scientists, and experts is dedicated to crafting flavors that delight the senses and elevate your dining and drinking moments. We prioritize freshness, authenticity, and sustainability in every product we offer, ensuring a memorable experience for our consumers. Whether you\'re savoring our gourmet foods, indulging in our refreshing beverages, or exploring our culinary creations, you\'re embracing a journey of taste, quality, and innovation.</p><p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\"><br></p><p style=\"margin-bottom: 0px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif;\">At Modern Food, we also value customer satisfaction and continuously strive to exceed your expectations. With a focus on customer-centricity, we provide exceptional service, prompt delivery, and unparalleled culinary expertise. Join us in celebrating the art of food and beverage, and let your taste buds embark on an extraordinary adventure with our delectable offerings.</p>', 2, 1, '2023-11-01 03:22:43', '2023-11-01 03:22:43');

-- --------------------------------------------------------

--
-- Table structure for table `achieves`
--

CREATE TABLE `achieves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `total` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `achieves`
--

INSERT INTO `achieves` (`id`, `title`, `icon`, `total`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Vero ex quas anim li', 'ULPU4558391.png', '500', 1, '2023-10-29 23:22:30', '2023-10-29 23:22:30');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(11, 'PERSONAL AND ELEGANT RESIDENCE', NULL, 'pvgQ8745687.jpg', 1, '2024-01-27 10:01:48', '2024-01-27 11:14:52'),
(12, 'DESIGN OF CLASSY AND STYLISH BUILDING', NULL, 'O7LxG598733.jpg', 1, '2024-01-27 10:04:03', '2024-01-27 10:04:03'),
(13, 'DESIGN OF TRISHAL ECONOMIC ZONE DORMITORY BUILDING', NULL, 'SRWjV661566.jpg', 1, '2024-01-27 10:06:32', '2024-01-27 10:06:32'),
(14, 'DESIGN AND RENOVATION                 OF FLAT IN DHAKA', NULL, 'aUP4a678854.jpeg', 1, '2024-01-27 10:09:06', '2024-02-02 08:46:16'),
(15, 'LUXURIOUS AND PRIVATE RESIDENCES', NULL, 'HUAIV522988.jpeg', 1, '2024-01-27 10:09:23', '2024-02-02 08:52:06'),
(16, 'MONUMENT STRUCTURE DESIGN AT BANDARBAN', NULL, 'HOG5B640924.jpeg', 1, '2024-02-02 08:43:20', '2024-02-02 08:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `define` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `slug`, `title`, `tags`, `image`, `description`, `added_by`, `define`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc', 'Unde suscipit ducimu', NULL, 'vtm8n782739.jpg', '<p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p><blockquote style=\"margin-top: 27px; margin-bottom: 30px; font-size: 18px; line-height: 28px; font-style: italic; color: rgb(76, 76, 76); padding-left: 90px; position: relative; padding-right: 30px; font-family: Roboto, sans-serif;\">Agriculture is the science and art of cultivating plants and livestock. Agriculture was the key development in the rise of sedentary human.</blockquote><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p><div class=\"blog-details-img\" style=\"display: flex; align-items: center; margin: 45px 0px 40px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif; font-size: 14px;\"><img src=\"file:///D:/httrack/modern_food/themebeyond.com/html/agrifram/agrifram/img/blog/blog_details_img01.jpg\" alt=\"img\" style=\"border-style: none; margin-right: 20px;\"><img src=\"file:///D:/httrack/modern_food/themebeyond.com/html/agrifram/agrifram/img/blog/blog_details_img02.jpg\" alt=\"img\" style=\"border-style: none;\"></div><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p>', 1, 2, 1, '2023-10-29 05:32:01', '2023-10-30 00:53:58'),
(2, 'unde-suscipit-ducimu-336738', 'Unde suscipit ducimu', NULL, '28T9r869738.jpg', '<p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p><blockquote style=\"margin-top: 27px; margin-bottom: 30px; font-size: 18px; line-height: 28px; font-style: italic; color: rgb(76, 76, 76); padding-left: 90px; position: relative; padding-right: 30px; font-family: Roboto, sans-serif;\">Agriculture is the science and art of cultivating plants and livestock. Agriculture was the key development in the rise of sedentary human.</blockquote><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p><div class=\"blog-details-img\" style=\"display: flex; align-items: center; margin: 45px 0px 40px; color: rgb(125, 125, 125); font-family: Roboto, sans-serif; font-size: 14px;\"><img src=\"file:///D:/httrack/modern_food/themebeyond.com/html/agrifram/agrifram/img/blog/blog_details_img01.jpg\" alt=\"img\" style=\"border-style: none; margin-right: 20px;\"><img src=\"file:///D:/httrack/modern_food/themebeyond.com/html/agrifram/agrifram/img/blog/blog_details_img02.jpg\" alt=\"img\" style=\"border-style: none;\"></div><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Express dolor sit amet, consectetur adipiscing elit. Cras sollicitudin, tellus vitae condimem egestlibos dolor auctor tellus, eu consectetur neque elit quis nunc. Cras elementum pretiumi Nullam justo efficitur, trist ligula pellentue ipsum Quisque thsr augue ipsum, vehicula tellus maximus. Was popularised in the 1960s withs the release of Letraset sheets containing Lorem Ipsum passags, and more recently with desktop publishing software.</p><p style=\"margin-bottom: 10px; font-size: 14px; line-height: 28px; color: rgb(125, 125, 125); letter-spacing: 0.2px; font-family: Roboto, sans-serif;\">Farming dolor sit amet, consectetur adipiscing elit. Cras sollicitin, tellus vitae condimem egestlibers dolosr auctor tellus, eu consectetur neque elit quinunc. Cras elemenm pretiumi Nullam justo efficitur, trist ligula pellentesque ipsum Quisque thsr augue ipsum, vehicula tellus maximus.</p>', 1, 2, 1, '2023-10-29 05:40:30', '2023-10-29 05:41:03');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `blogs_id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `name`, `blogs_id`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Guinevere Zimmerman', 1, 'mofuxujona@mailinator.com', 'Deserunt distinctio', '2023-10-30 01:20:58', '2023-10-30 01:20:58');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Modern Express', 'bDjTq683928.jpg', 1, '2023-11-01 04:11:32', '2023-11-01 04:11:32'),
(5, 'Modern School & College', '0dYbo253073.jpg', 1, '2023-11-01 04:12:05', '2023-11-01 04:12:05'),
(6, 'Modern Hospital', 'NVaiL488996.jpg', 1, '2023-11-01 04:12:48', '2023-11-01 04:12:48'),
(7, 'Modern Export & Important', '5vMyY479721.jpg', 1, '2023-11-01 04:13:17', '2023-11-01 04:13:17');

-- --------------------------------------------------------

--
-- Table structure for table `customer_messages`
--

CREATE TABLE `customer_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_says`
--

CREATE TABLE `customer_says` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dealerforms`
--

CREATE TABLE `dealerforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conpany_name` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `husband_father` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `dealer_address` varchar(255) DEFAULT NULL,
  `nid_birth` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `warehouse` varchar(255) DEFAULT NULL,
  `agree` int(11) NOT NULL,
  `visiting_area` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dealerforms`
--

INSERT INTO `dealerforms` (`id`, `conpany_name`, `name`, `husband_father`, `company_address`, `dealer_address`, `nid_birth`, `phone`, `email`, `warehouse`, `agree`, `visiting_area`, `created_at`, `updated_at`) VALUES
(2, 'Gannon Kirby', 'Hanna Brock', 'Proident ea consequ', 'Avila Daniels Plc', 'Amet doloremque ist', 'Eum saepe est tempor', '+1 (837) 669-5128', 'dygotabop@mailinator.com', 'Et dignissimos totam', 1, 'Voluptatem Dolor cu', '2023-10-31 04:50:18', '2023-10-31 04:50:18'),
(5, 'Alec Acosta', 'Aiko Winters', 'Velit enim cillum fu', 'Maddox and Gray Co', 'Eiusmod autem perspi', 'Blanditiis dolor est', '+1 (421) 302-4568', 'feladipiqi@mailinator.com', 'Dolor commodo cillum', 1, 'Sunt cum ut qui duci', '2023-10-31 07:08:04', '2023-10-31 07:08:04'),
(6, 'JUpBJChTpy', 'JUpBJChTpy', 'upUEOcQYiISnCFnspTTxFuOQX', 'LBrVQvVDFKj 43969', 'LBrVQvVDFKj 43969', 'upUEOcQYiISnCFnspTTxFuOQX', '067-535-00-07', 'info@007strategies.com', 'upUEOcQYiISnCFnspTTxFuOQX', 1, 'upUEOcQYiISnCFnspTTxFuOQX', '2023-11-10 21:01:49', '2023-11-10 21:01:49'),
(7, 'bXssVNWEkjlowJ', 'bXssVNWEkjlowJ', 'JiVWiQstyAIOqxjylCwbw', 'RaTJTFaAkuD 79731', 'RaTJTFaAkuD 79731', 'JiVWiQstyAIOqxjylCwbw', '981-314-49-59', 'nikkinguyen92@gmail.com', 'JiVWiQstyAIOqxjylCwbw', 1, 'JiVWiQstyAIOqxjylCwbw', '2023-11-12 11:58:27', '2023-11-12 11:58:27'),
(8, 'reJvPJNBoh', 'reJvPJNBoh', 'xwqlqEuCtlRMSiDKuozPWj', 'pJNlxtJtbqM 59115', 'pJNlxtJtbqM 59115', 'xwqlqEuCtlRMSiDKuozPWj', '063-683-43-30', 'txYEwQ.hwtwbwm@silesia.life', 'xwqlqEuCtlRMSiDKuozPWj', 1, 'xwqlqEuCtlRMSiDKuozPWj', '2023-11-29 18:49:49', '2023-11-29 18:49:49'),
(9, 'Joanna', 'Joanna', 'Davian Wilson', '905 Ware', '905 Ware', 'Davian Wilson', '240-743-81-04', 'wUqhhE.bhtpphm@tonetics.biz', 'Davian Wilson', 1, 'Davian Wilson', '2023-12-25 06:08:41', '2023-12-25 06:08:41'),
(10, 'Modern BDF Agro', 'সততা এন্টারপ্রাইস', 'Father', 'Borua,Khilkhet, Dhaka-1229', 'Char Biswas, GALACHIPA, PATUAKHALI', '3759205937', '01751940560', 'smdip771@gmail.com', 'Char Biswas', 1, 'Char biswas/char kajol/char shiva', '2023-12-30 05:13:45', '2023-12-30 05:13:45'),
(11, 'Modern BDF Agro', 'Satata enterprise', 'Father', 'Borua, Khilkhet, Dhaka-1229', 'Char Biswas', '3759205937', '01751940560', 'smdip771@gmail.com', 'Char Biswas', 1, 'Char biswas/char kajol/char shiva', '2023-12-30 05:17:05', '2023-12-30 05:17:05');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `address`, `description`, `status`, `created_at`, `updated_at`) VALUES
(17, 'ANANYA', 'nP3E4479436.jpg', 'JASHORE', 'Project Type: Residential duplex building, Address: Shankorpur, Ishaq sarak, Jashore, Total Development area: 3260 sft (Approximate), Total storied: Duplex building.', 1, '2024-01-28 05:21:00', '2024-01-28 05:21:00');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sort_desp` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `slug`, `title`, `sort_desp`, `image`, `description`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(1, 'et-eiusmod-voluptati-599039', 'Farming Has A Banking Problem Crop', 'Whereby farming was the key development in the rise of sedentary human civilization, whereby farming domesticated specie available, but the majory have suffered alteration in some form but the majority have suffered alteration Ipsum versions have evolved some injected or words.', 'hI65Y956826.jpg', '<span style=\"color: rgb(125, 125, 125); font-family: Roboto, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Whereby farming was the key development in the rise of sedentary human civilization, whereby farming domesticated specie available, but the majory have suffered alteration in some form but the majority have suffered alteration Ipsum versions have evolved some injected or words.</span><span style=\"color: rgb(125, 125, 125); font-family: Roboto, sans-serif; font-size: 14px; letter-spacing: 0.2px;\">Whereby farming was the key development in the rise of sedentary human civilization, whereby farming domesticated specie available, but the majory have suffered alteration in some form but the majority have suffered alteration Ipsum versions have evolved some injected or words.</span>', 1, 1, '2023-10-30 01:56:15', '2023-10-30 05:21:21');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_16_091028_create_settings_table', 1),
(7, '2023_10_18_120350_create_features_table', 1),
(8, '2023_10_19_053423_create_abouts_table', 1),
(9, '2023_10_19_074934_create_teams_table', 1),
(10, '2023_10_19_090648_create_customer_says_table', 1),
(11, '2023_10_19_095341_create_clients_table', 1),
(12, '2023_10_19_103509_create_portfolios_table', 1),
(13, '2023_10_21_054156_create_blogs_table', 1),
(14, '2023_10_23_060741_create_services_table', 1),
(15, '2023_10_23_065009_create_pricings_table', 1),
(16, '2023_10_23_073730_create_privacy_policies_table', 1),
(17, '2023_10_25_052005_create_galleries_table', 1),
(18, '2023_10_25_055948_create_achieves_table', 1),
(19, '2023_10_25_070628_create_customer_messages_table', 1),
(20, '2023_10_28_054429_create_banners_table', 1),
(21, '2023_10_29_050538_create_blog_comments_table', 1),
(22, '2023_10_30_052550_create_products_table', 2),
(24, '2023_10_30_073843_create_media_table', 3),
(25, '2023_10_31_053006_create_videos_table', 4),
(26, '2023_10_31_101022_create_dealerforms_table', 5),
(27, '2023_10_31_101055_create_visitingareas_table', 5),
(28, '2024_01_28_095455_create_multigalleries_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `multigalleries`
--

CREATE TABLE `multigalleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `protfolio_id` int(11) DEFAULT NULL,
  `gallery` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multigalleries`
--

INSERT INTO `multigalleries` (`id`, `protfolio_id`, `gallery`, `created_at`, `updated_at`) VALUES
(1, 16, 'nvkDC491503.jpg', NULL, NULL),
(2, 16, 'nXuQy565947.jpeg', NULL, NULL),
(3, 17, 'HN9oG957963.jpg', NULL, NULL),
(4, 17, 'hzUtT64883.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feature_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `client` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `completed` int(11) NOT NULL DEFAULT 1,
  `define` int(11) NOT NULL DEFAULT 1,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pricings`
--

CREATE TABLE `pricings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_policies`
--

CREATE TABLE `privacy_policies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `privacy_policies`
--

INSERT INTO `privacy_policies` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, '<div style=\"color: rgb(204, 204, 204); background-color: rgb(31, 31, 31); font-family: Consolas, \"Courier New\", monospace; font-size: 14px; line-height: 19px; white-space: pre;\"><span style=\"color: #9cdcfe;\">privacyPolicy</span></div>', '2023-10-30 05:55:06', '2023-11-06 01:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `define` int(11) NOT NULL DEFAULT 2,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `title`, `image`, `description`, `define`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Morden Soyabean oil', '500 ML, 1Ltr, 2 Ltr, 5 Ltr', 'AL0so103411.jpg', NULL, 2, 1, '2023-10-29 23:45:17', '2023-11-08 08:58:02'),
(3, 'Original Mastered Oil', '80 ml, 200ml 500ml', 'ck1EX710898.jpg', NULL, 2, 1, '2023-10-29 23:45:26', '2023-11-08 08:59:47'),
(4, 'Modern Super Salt', '1kg', 'la4jK799959.jpg', NULL, 2, 1, '2023-10-29 23:45:39', '2023-11-08 08:54:24'),
(5, 'Chinigura Chal', '1Kg', 'TZUWk634322.jpg', NULL, 2, 1, '2023-10-29 23:53:26', '2023-11-01 06:03:07'),
(6, 'Soyabean oil', '5 Letter', 'FytxZ556755.jpg', NULL, 2, 1, '2023-11-01 05:42:52', '2023-11-01 06:03:30'),
(7, 'Masquito coil', '1 Pack', 'Fvc74585138.jpg', NULL, 1, 1, '2023-11-01 06:13:10', '2023-11-01 06:13:10'),
(8, 'Modern Mango Juice', '250 ML', 'XNKLB804892.jpg', '250 ML 500 ML 1000 ML', 2, 1, '2023-11-06 05:19:45', '2023-11-08 08:53:19'),
(9, 'Modern Lichi Drink', '170 ML', 'iyaS8177233.jpg', NULL, 2, 1, '2023-11-06 05:22:06', '2023-11-06 05:22:06'),
(10, 'Modern Orange Drinks', '170 ML', 'tBJQq393529.jpg', NULL, 2, 1, '2023-11-06 05:23:05', '2023-11-06 05:23:05'),
(11, 'Modern Copiko Candi', '150 pcs', 'xa0CJ153175.jpg', NULL, 2, 1, '2023-11-06 06:31:05', '2023-11-06 06:31:05'),
(12, 'Modern Chili Powder', '200 gm', 'T2jnJ828184.jpg', NULL, 2, 1, '2023-11-06 06:33:17', '2023-11-08 08:56:28'),
(13, 'Modern Turmeric Powder', '200 gm', '06Thz201452.jpg', NULL, 2, 1, '2023-11-08 10:10:46', '2023-11-08 10:10:46'),
(14, 'Modern V - 7 Synthetic Detergent Powder', '500 gm', 'V2AX5727495.jpg', NULL, 2, 1, '2023-11-20 01:32:34', '2023-11-20 01:32:34');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_desp` longtext DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `image`, `sort_desp`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'CONSULTING SERVICES', NULL, 'hehY7130834.jpg', 'Digital Survey - Sub-Soil Investigation - Architectural Design by Registered Architect - Structural Design by Registered Engineer - Plumbing & Electrical Design - Book of quantity (BOQ) - Cost Estimate - Electro-mechanical & Mechanical design - 3D Elevation - Project Management Consulting (PMC) -', NULL, 2, '2024-01-25 03:16:13', '2024-02-02 09:14:31'),
(2, 'BUILDING & CIVIL INFRASTRUCTURE', NULL, 'Yq4iA285045.jpeg', 'We design sustainable infrastructure that is safe to live in, work in, and engage in. With our experienced expertise, we make sure that the structures are well matched with the structure’s spatial design and aesthetic goals. For our clients, we identify the most effective implementation choices through the use of data modeling, our digital services, and simulations that foresee various conditions and usage scenarios. We are among the leading consultants in complex infrastructure design. We believe in safety first, and we pride ourselves on upholding safety standards pre- and post-construction. Together with our customers, we deliver infrastructure solutions at all levels of scale and complexity. Modern design tools for modeling buildings and civil structures using FEM software, such as ETABS, SAP2000, and Safe, are utilized to maximize the best processes and outcomes. Residential / Commercial buildings - Industrial buildings / Steel structure - Hospitals / Community center / Cyclone center - Cultural and educational buildings - Hotels / Monuments / Mosque / pagoda / temple - Retaining wall / RCC Culverts / Bridges -', NULL, 1, '2024-01-25 03:17:03', '2024-02-02 09:32:33'),
(3, 'DESIGN / BUILD CONSTRUCTION', NULL, 'klEHh109199.jpeg', 'WE DESIGN / WE BUILD. With a single point of contact for the whole project, Design-Build Construction makes the process simple, clear, and stress-free. Unlike traditional \"design-bid-select-build\" contracts, the design-build delivery method takes advantage of integrating the design, construction, quality, cost, and schedule under one contract. In order to maximize the design and functionality of your project while keeping budget and scheduling considerations in mind, planners, architects, engineers, and contractors collaborate as a team. Advantages include enhanced \"value engineering\" and pre-construction reviews; early knowledge of guaranteed costs; accelerated delivery, increased quality control, lower design and engineering fees, reduced owner risk, and administrative responsibilities. Design-Build generates savings that traditional approaches just cannot beat.', NULL, 1, '2024-01-29 03:03:08', '2024-02-02 09:20:15'),
(4, 'PROJECT MANAGEMENT CONSULTING (PMC)', NULL, '7pa6i524193.jpg', 'DEDICATED TO ESTABLISHING STRONG RELATIONSHIPS ON ALL CONSTRUCTION PROJECTS, BIG OR SMALL. OUR DESIRE TO DO MORE. Our team supervises every step of the construction process while the client maintains complete financial control over the project. Our ability to customize our services to the requirements of each client sets us apart from other construction management firms. We are aware that no two projects are the same and that every customer has different expectations, goals, and worries. To ensure that our efforts produce the intended results in crucial areas like schedule, cost, design, and construction, we will collaborate closely with your team.', NULL, 2, '2024-01-29 03:03:28', '2024-02-02 09:25:29'),
(5, 'RENOVATION', NULL, 'y8GsK654673.jpeg', 'SMART BUILDING FROM THE INSIDE. A lot of thought goes into choosing the best method for renovation and interior construction. What size should it be? Which area would be ideal for construction? Will it cause havoc on the roads? Will it be a jewel or a blight? Code compliance, accessibility, and modification must be carefully considered. The renovation construction and interior design of a project are essential. It can be particularly difficult for some people to visualize the inside of a planned area. Our Design-Build team assist all clients, whether they are business executives or civic figures, in physically seeing a project through from the beginning.', NULL, 1, '2024-01-29 03:03:45', '2024-02-02 09:23:13'),
(6, 'PROJECT MANAGEMENT CONSULTING (PMC)', NULL, 'fS3ZF99873.jpeg', 'DEDICATED TO ESTABLISHING STRONG RELATIONSHIPS ON ALL CONSTRUCTION PROJECTS, BIG OR SMALL. OUR DESIRE TO DO MORE. Our team supervises every step of the construction process while the client maintains complete financial control over the project. Our ability to customize our services to the requirements of each client sets us apart from other construction management firms. We are aware that no two projects are the same and that every customer has different expectations, goals, and worries. To ensure that our efforts produce the intended results in crucial areas like schedule, cost, design, and construction, we will collaborate closely with your team.', NULL, 1, '2024-02-02 09:25:18', '2024-02-02 09:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `about` varchar(255) DEFAULT NULL,
  `number` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `footer_logo` varchar(255) DEFAULT NULL,
  `favicon` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `footer` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_tag` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `pinterest` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `email`, `about`, `number`, `logo`, `footer_logo`, `favicon`, `address`, `footer`, `title`, `meta_title`, `meta_tag`, `meta_description`, `facebook`, `twitter`, `linkedin`, `instagram`, `youtube`, `pinterest`, `created_at`, `updated_at`) VALUES
(1, 'Build Mark Consultants', 'buildmark.bd@yahoo.com', 'BUILDMARK CONSULTANTS LIMITED is a civil and infrastructure consultancy firm with consulting engineers providing a full range of integrated engineering and related services. Earlier, the firm was known as Buildmark Engineering Limited.', '+8801819496499', 'k1swt977026.png', '1o53T556813.png', 'vzHB7556731.png', 'Lev. 01, H 12, R 03, Bosoti Housing, Mirpur-02, Dhaka-1216, Bangladesh', '© 2023 Copyright Build Mark Consultants |', 'Build Mark Consultants', 'Build Mark Consultants company in Bangladesh', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-02 10:23:43');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `education` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `post`, `image`, `education`, `description`, `status`, `created_at`, `updated_at`) VALUES
(10, 'BRIG GEN SYED MD RAFIQUL ISLAM (RETD)', 'CHAIRMAN', 'JNkEM46086.jpeg', NULL, 'Brigadier General Syed Md Rafiqul Islam (Retd) is an exmilitary expert and has long experience in managing several\r\nstate-owned enterprises. Apart from his military expertise,\r\nhe is well experienced in monitoring, supervising and\r\nimplementing many construction Projects of the Army and\r\nthe Government, as he held various important\r\nappointments like; PD, MD, Principal, DG, Station\r\nCommander etc. Among the army projects; a number of\r\nmulti-storied SM Barracks, Officers\' Mess, Officers\' club,\r\nSainik Club, Cantonment market, Gun shed, Ammunition\r\nDump, MT Garage, Swimming pool, Multipurpose shed,\r\nCSD exclusive shop, Cantonment Public School building,\r\nSena Flour Mill etc. are mentionable. As the Managing\r\nDirector of Bangladesh Diesel Plant Ltd, he directly\r\nsupervised many Government DPM projects like;\r\nConstruction of Sheikh Kamal IT Training and Incubation\r\nCentre in 11 districts, Embankment, Land development,\r\nConstructions and Earth protection works of 1320 MW\r\nCoal Fired Thermal Power Plants at Patuakhali under APCL\r\nand RPCL, Management of Quick Rental Power Plant at\r\nNarayanganj etc.', 1, '2024-01-28 05:39:39', '2024-02-02 09:09:44'),
(11, 'NAZMUL HASSAN', 'MANAGING DIRECTOR', NULL, 'M. ENGG. (STRUCTURE), FIEB, ENLISTED RAJUK & CANTT BOARD, DHAKA', 'His professional expertise spans 16+ years, and\r\nhe has worked on high-rise residential and\r\ncommercial projects, industrial projects, cyclone\r\ncenters, monuments, steel structures, and storm\r\nwater treatment plants (STP). In 2007, he\r\ngraduated from AUST with a bachelor of science\r\nin civil engineering. AUST awarded him a\r\nmaster\'s degree in structural engineering as well\r\n(2022). He is a Fellow of the Institute of\r\nEngineers Bangladesh in addition to being an\r\nenlisted engineer with RAJUK and the\r\ncantonment board.', 1, '2024-01-28 05:40:20', '2024-02-02 09:11:20'),
(12, 'SHAKHILA HASSAN', 'DIRECTOR', 'csLwd199460.jpeg', 'MBA, BBA', 'She is one of the founders of the company. In 2015, he\r\ngraduated from MMC with a bachelor of business\r\nadministration. MMC awarded her a master\'s degree of\r\nbusiness administration in management as well (2018).', 1, '2024-01-28 05:41:07', '2024-01-28 05:49:34'),
(13, 'ABDULLAHEL KAFI', 'DIRECTOR ENGINEERING', 'Splrh977810.jpeg', 'B. SC. ENGG. (CIVIL), FIEB', 'With 18 years of professional experience, he has\r\nworked on high-rise residential and commercial\r\nconstruction projects. He obtained a bachelor of\r\nscience in civil engineering from AUST in 2004.\r\nHe is a Fellow of the Institute of Engineers\r\nBangladesh.', 1, '2024-01-29 02:56:46', '2024-01-29 02:56:46'),
(14, 'ENGR. GEORGE STEPHEN GHOSH', 'SENIOR CONSULTANT', 'HWKPP46548.jpeg', 'B SC ENGG. CIVIL & WRE (BUET), MIEB', 'With 45 years of professional experience,\r\nhe has worked on flood control, drainage\r\nstructures, sluice gates, and water resource\r\nengineering. He obtained a bachelor of\r\nscience in civil engineering from BUET in\r\n1977. He is a member of the Institute of\r\nEngineers Bangladesh.', 1, '2024-01-29 02:57:19', '2024-01-29 02:57:19'),
(15, 'ENGR. MD. ABUBAKER SIDDIK', 'DIRECTOR PMC', NULL, 'B. SC. ENGG. (CIVIL), PGD (PMP), PRINCE2, MIEB', 'His professional expertise spans 15+ years\r\nof expanded and glorious working\r\nexperience with renowned local and\r\nmultinational companies. He has working\r\nexperience in residential, commercial, and\r\nindustrial building projects, road\r\nconstruction, warehouses, high-voltage\r\nsubstations, power plants, transmission\r\nlines, jettys, bridges, offshore piling, interior\r\nand renovation projects, etc. He graduated\r\nfrom SUB with a bachelor of science in civil\r\nengineering. Qualify UK awarded him a\r\nPostgraduate Diploma in Project\r\nManagement Professionals (PMP). Also,\r\nAXELOS UK awarded him PRINCE2, and\r\nthe IOSH Board UK awarded him the\r\nManaging Safely certificate. He is a member\r\nof the Institute of Engineers of Bangladesh\r\n(IEB).', 1, '2024-01-29 02:57:57', '2024-01-29 02:57:57'),
(16, 'MD. MASUD RANA', 'SENIOR ARCHITECT', NULL, 'B. ARCH, MIAB. ENLISTED RAJUK & CANTT BOARD, DHAKA', 'With 13 years of professional experience, he has\r\nworked on concept design, modern architecture,\r\narchitectural working design, exterior and interior\r\ndesign, interior construction, landscape design,\r\n3D Max, and Photoshop. He is a member of the\r\nInstitute of Architects Bangladesh.', 1, '2024-01-29 02:58:22', '2024-01-29 02:58:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'hamim', 'hamim@gmail.com', NULL, '$2y$10$fEBeyhM6WU0pqWJrHfYufeILnOas/oG9ejohK0wYNEuN5.1yb/bgm', NULL, NULL, NULL, NULL),
(2, 'Admin', 'admin@gmail.com', NULL, '$2y$10$YfHCl3./6wg8FtFUK6JeU.L8vbfrZIEyMleW2HJXSCK3xd1Aiv91S', NULL, NULL, '2023-11-01 01:02:41', '2023-11-01 01:02:41');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `link`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'If are interstate apply for dealership', 'https://www.youtube.com/watch?v=SJxu4paAjwY', 'eWgTD774548.jpg', 1, '2023-10-30 23:40:58', '2023-11-01 06:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `visitingareas`
--

CREATE TABLE `visitingareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `dealerform_id` varchar(255) NOT NULL,
  `sl` varchar(255) DEFAULT NULL,
  `visiting_company_name` varchar(255) DEFAULT NULL,
  `visiting_product` varchar(255) DEFAULT NULL,
  `monthly_sell` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitingareas`
--

INSERT INTO `visitingareas` (`id`, `dealerform_id`, `sl`, `visiting_company_name`, `visiting_product`, `monthly_sell`, `created_at`, `updated_at`) VALUES
(7, '2', 'Sit possimus a des', 'Buck and Gill Traders', 'Aut alias quasi nost', '1', '2023-10-31 05:48:39', '2023-10-31 05:48:39'),
(8, '2', 'Exercitationem autem', 'Holder Holman Inc', 'Suscipit doloremque', '12', '2023-10-31 05:48:39', '2023-10-31 05:48:39'),
(9, '2', 'Quia impedit repreh', 'Copeland Roy Inc', 'Dolor ducimus amet', '8', '2023-10-31 05:48:39', '2023-10-31 05:48:39'),
(13, '5', NULL, NULL, NULL, NULL, '2023-10-31 07:08:04', '2023-10-31 07:08:04'),
(14, '5', NULL, NULL, NULL, NULL, '2023-10-31 07:08:04', '2023-10-31 07:08:04'),
(15, '5', NULL, NULL, NULL, NULL, '2023-10-31 07:08:04', '2023-10-31 07:08:04'),
(16, '6', 'upUEOcQYiISnCFnspTTxFuOQX', 'JUpBJChTpy', 'upUEOcQYiISnCFnspTTxFuOQX', 'upUEOcQYiISnCFnspTTxFuOQX', '2023-11-10 21:01:49', '2023-11-10 21:01:49'),
(17, '6', 'upUEOcQYiISnCFnspTTxFuOQX', 'JUpBJChTpy', 'upUEOcQYiISnCFnspTTxFuOQX', 'upUEOcQYiISnCFnspTTxFuOQX', '2023-11-10 21:01:49', '2023-11-10 21:01:49'),
(18, '6', 'upUEOcQYiISnCFnspTTxFuOQX', 'JUpBJChTpy', 'upUEOcQYiISnCFnspTTxFuOQX', 'upUEOcQYiISnCFnspTTxFuOQX', '2023-11-10 21:01:49', '2023-11-10 21:01:49'),
(19, '7', 'JiVWiQstyAIOqxjylCwbw', 'bXssVNWEkjlowJ', 'JiVWiQstyAIOqxjylCwbw', 'JiVWiQstyAIOqxjylCwbw', '2023-11-12 11:58:27', '2023-11-12 11:58:27'),
(20, '7', 'JiVWiQstyAIOqxjylCwbw', 'bXssVNWEkjlowJ', 'JiVWiQstyAIOqxjylCwbw', 'JiVWiQstyAIOqxjylCwbw', '2023-11-12 11:58:27', '2023-11-12 11:58:27'),
(21, '7', 'JiVWiQstyAIOqxjylCwbw', 'bXssVNWEkjlowJ', 'JiVWiQstyAIOqxjylCwbw', 'JiVWiQstyAIOqxjylCwbw', '2023-11-12 11:58:27', '2023-11-12 11:58:27'),
(22, '8', 'xwqlqEuCtlRMSiDKuozPWj', 'reJvPJNBoh', 'xwqlqEuCtlRMSiDKuozPWj', 'xwqlqEuCtlRMSiDKuozPWj', '2023-11-29 18:49:49', '2023-11-29 18:49:49'),
(23, '8', 'xwqlqEuCtlRMSiDKuozPWj', 'reJvPJNBoh', 'xwqlqEuCtlRMSiDKuozPWj', 'xwqlqEuCtlRMSiDKuozPWj', '2023-11-29 18:49:49', '2023-11-29 18:49:49'),
(24, '8', 'xwqlqEuCtlRMSiDKuozPWj', 'reJvPJNBoh', 'xwqlqEuCtlRMSiDKuozPWj', 'xwqlqEuCtlRMSiDKuozPWj', '2023-11-29 18:49:49', '2023-11-29 18:49:49'),
(25, '9', 'Davian Wilson', 'Joanna', 'Davian Wilson', 'Davian Wilson', '2023-12-25 06:08:41', '2023-12-25 06:08:41'),
(26, '9', 'Davian Wilson', 'Joanna', 'Davian Wilson', 'Davian Wilson', '2023-12-25 06:08:41', '2023-12-25 06:08:41'),
(27, '9', 'Davian Wilson', 'Joanna', 'Davian Wilson', 'Davian Wilson', '2023-12-25 06:08:41', '2023-12-25 06:08:41'),
(28, '10', NULL, NULL, NULL, NULL, '2023-12-30 05:13:45', '2023-12-30 05:13:45'),
(29, '10', NULL, NULL, NULL, NULL, '2023-12-30 05:13:45', '2023-12-30 05:13:45'),
(30, '10', NULL, NULL, NULL, NULL, '2023-12-30 05:13:45', '2023-12-30 05:13:45'),
(31, '11', NULL, NULL, NULL, NULL, '2023-12-30 05:17:05', '2023-12-30 05:17:05'),
(32, '11', NULL, NULL, NULL, NULL, '2023-12-30 05:17:05', '2023-12-30 05:17:05'),
(33, '11', NULL, NULL, NULL, NULL, '2023-12-30 05:17:05', '2023-12-30 05:17:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `achieves`
--
ALTER TABLE `achieves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_messages`
--
ALTER TABLE `customer_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_says`
--
ALTER TABLE `customer_says`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealerforms`
--
ALTER TABLE `dealerforms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multigalleries`
--
ALTER TABLE `multigalleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricings`
--
ALTER TABLE `pricings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitingareas`
--
ALTER TABLE `visitingareas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `achieves`
--
ALTER TABLE `achieves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customer_messages`
--
ALTER TABLE `customer_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer_says`
--
ALTER TABLE `customer_says`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dealerforms`
--
ALTER TABLE `dealerforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `multigalleries`
--
ALTER TABLE `multigalleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pricings`
--
ALTER TABLE `pricings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacy_policies`
--
ALTER TABLE `privacy_policies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitingareas`
--
ALTER TABLE `visitingareas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
