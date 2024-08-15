-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2024 at 07:30 PM
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
-- Database: `filament-laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `lat` varchar(255) DEFAULT NULL,
  `lan` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `name`, `description`, `lat`, `lan`, `city`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'مزرعة الخير', 'الحديدة', '2123', '5456', 'صنعاء', 1, '2024-08-07 07:17:24', '2024-08-08 21:41:39'),
(2, 'مطعم البركة', 'صمعاء الحي السياسي', '213.323.6456.32', '214', 'صنعاء', 3, '2024-08-07 07:19:46', '2024-08-08 22:01:04'),
(3, 'سعوان', 'مدينة البنك', NULL, NULL, 'صنعاء', 4, '2024-08-07 02:37:01', '2024-08-07 02:37:01'),
(4, 'نقم', 'مدينة البنك', NULL, NULL, 'صنعاء', 4, '2024-08-07 02:37:01', '2024-08-07 02:37:01'),
(5, 'yt', 'hgjh', '456', '456', 'Sanaa', 4, '2024-08-08 22:35:44', '2024-08-08 22:35:44'),
(6, 'hadaa', 'sanaa', '46.454545', '46.454545', 'sanaa', 5, '2024-08-12 11:42:12', '2024-08-12 11:42:12'),
(7, 'home', 'sanaa', '46.454545', '46.454545', 'sanaa', 5, '2024-08-12 14:24:38', '2024-08-12 14:24:38'),
(8, 'home', 'sanaa', '46.454545', '46.454545', 'sanaa', 5, '2024-08-12 14:30:45', '2024-08-12 14:30:45'),
(9, 'اااا', 'اااا', '15.4371138', '44.200189', 'ااااا', 5, '2024-08-12 14:31:36', '2024-08-12 14:31:36'),
(10, 'home', 'sanaa', '46.454545', '46.454545', 'sanaa', 5, '2024-08-12 14:31:45', '2024-08-12 14:31:45'),
(11, 'ببب', 'بببب', '15.4371199', '44.2001901', 'ببب', 5, '2024-08-12 15:48:02', '2024-08-12 15:48:02'),
(12, 'تووو', 'ووو', '15.437119', '44.2001925', 'ووو', 5, '2024-08-12 15:58:41', '2024-08-12 15:58:41'),
(13, 'home', 'sanaa', '46.454545', '46.454545', 'sanaa', 5, '2024-08-12 17:08:35', '2024-08-12 17:08:35'),
(14, 'home', 'sanaa', '46.454545', '46.454545', 'sanaa', 14, '2024-08-12 17:12:12', '2024-08-12 17:12:12'),
(15, 'home2', 'sanaa2', '46.4545452', '46.4545452', 'sanaa2', 14, '2024-08-12 17:12:23', '2024-08-12 17:12:23'),
(16, 'home222', 'sanaa222', '46.4545452', '46.4545452', 'sanaa2', 14, '2024-08-12 17:12:28', '2024-08-12 17:12:28'),
(17, 'lkjkjlkj', 'lkjkjlkj', '545.3256', '4526.325', 'Sanaa', 1, '2024-08-13 18:43:01', '2024-08-13 18:43:01'),
(18, 'sssFDS', 'lkjkjlkj', '545.3256', '4526.325', 'Sanaa', 10, '2024-08-15 00:56:08', '2024-08-15 00:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `describtion` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `describtion`, `image`, `created_at`, `updated_at`) VALUES
(1, 'خضروات', 'تشمل مجموعة متنوعة من الخضروات الطازجة مثل الطماطم، الخيار، الجزر، والبطاطس.', '01J56XETXGQ4K1XS1QP6E3NJZF.jpg', '2024-08-11 21:43:05', '2024-08-13 19:24:09'),
(2, 'حبوب', 'تشمل الحبوب مثل القمح، الأرز، الشعير، والذرة، التي تستخدم في العديد من الأطعمة.', '01J56XEA1GPCFCYY4XPZQ7DJ6W.jpeg', '2024-08-11 21:43:05', '2024-08-13 19:23:51'),
(3, 'فواكة', 'تشمل مجموعة متنوعة من الفواكه الطازجة مثل التفاح، البرتقال، الموز، والعنب.', '01J56XDATQCG26H3FJBDMF6M04.jpg', '2024-08-11 21:43:05', '2024-08-13 19:23:19'),
(4, 'المواشي و الدواجن', 'تشمل منتجات اللحوم مثل لحوم الأبقار، الأغنام، والدواجن المختلفة.', '01J56WQR9V1HBSJZRT7WKGXXCP.jpg', '2024-08-11 21:43:05', '2024-08-13 19:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_details`
--

CREATE TABLE `delivery_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `usar_id` bigint(20) UNSIGNED NOT NULL,
  `vehicletype` varchar(255) NOT NULL,
  `vehiclenumber` varchar(255) NOT NULL,
  `vehicleimage` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `delivery_details`
--

INSERT INTO `delivery_details` (`id`, `usar_id`, `vehicletype`, `vehiclenumber`, `vehicleimage`, `created_at`, `updated_at`) VALUES
(1, 5, 'شاحنة', '11425', 'https://images.unsplash.com/photo-1607226054468-cad0c7a60d98?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fHRydWNr&ixlib=rb-1.2.1&q=80&w=400', '2024-08-11 21:55:38', '2024-08-11 21:55:38'),
(2, 12, 'دراجة نارية', '66589', 'https://images.unsplash.com/photo-1556740749-5a810fda9664?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fGRhdm8tbm9jbGFyfGVufDE2NjczMzg4&ixlib=rb-1.2.1&q=80&w=400', '2024-08-11 21:55:38', '2024-08-11 21:55:38'),
(3, 1, 'سيارة صغيرة', '77859', 'https://images.unsplash.com/photo-1558173916-fab3c5f9a8f5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fGNhci1wYW5lbg&ixlib=rb-1.2.1&q=80&w=400', '2024-08-11 21:55:38', '2024-08-11 21:55:38'),
(4, 4, 'شاحنة', '22569', 'https://images.unsplash.com/photo-1582204131654-46a1a8f891c0?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MnwzNjUyOXwwfDF8c2VhcmNofDJ8fHRydWNr&ixlib=rb-1.2.1&q=80&w=400', '2024-08-11 21:55:38', '2024-08-11 21:55:38'),
(5, 7, 'نقل', '54554', 'images/20ن.jpg', '2024-08-11 19:02:57', '2024-08-11 19:02:57'),
(6, 1, 'jjj', '5455', 'vehicle_images/01J571M9FA9HSPPSACMH3SQCVM.PNG', '2024-08-13 20:37:02', '2024-08-13 20:37:02'),
(7, 1, 'jjjحححح', '545588', 'vehicle_images/01J5A3E2FEBRT3AGEDGFV3JTJ9.jpeg', '2024-08-15 01:06:18', '2024-08-15 01:06:18'),
(8, 7, 'jjjخخخ87اى', '5455999999', 'vehicle_images/01J5A3K0J76YZ4HQ9TJFK7BBVE.jpg', '2024-08-15 01:09:00', '2024-08-15 01:09:00');

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
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `commercialregistrationno` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`id`, `name`, `commercialregistrationno`, `image`, `user_id`, `address_id`, `created_at`, `updated_at`) VALUES
(1, 'مزرعة النخيل', 123456, 'https://unsplash.com/photos/YpBteCj3x1k/download?force=true&w=640', 1, 1, '2024-08-11 21:49:02', '2024-08-11 21:49:02'),
(2, 'مزرعة الورد', 654321, 'https://unsplash.com/photos/BXgK_n_Dctk/download?force=true&w=640', 2, 2, '2024-08-11 21:49:02', '2024-08-11 21:49:02'),
(3, 'مزرعة الزيتون', 789012, 'https://unsplash.com/photos/vh6ZyqV6g0A/download?force=true&w=640', 3, 3, '2024-08-11 21:49:02', '2024-08-11 21:49:02'),
(4, 'مزرعة الليمون', 345678, 'https://unsplash.com/photos/nJ2bbH5HEAw/download?force=true&w=640', 4, 4, '2024-08-11 21:49:02', '2024-08-11 21:49:02'),
(5, 'مزرعة الكروم', 901234, 'https://unsplash.com/photos/YPjNbiQ7X_4/download?force=true&w=640', 5, 5, '2024-08-11 21:49:02', '2024-08-11 21:49:02');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_08_12_065040_create_categories_table', 2),
(6, '2024_08_13_062337_create_subcategories_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `delivery_id` bigint(20) UNSIGNED DEFAULT NULL,
  `orderdelivrytime` time NOT NULL,
  `deliverycost` decimal(8,2) DEFAULT NULL,
  `totalorderprice` decimal(8,2) NOT NULL,
  `orderstatas` varchar(255) DEFAULT NULL,
  `paymentmethod` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `address_id`, `delivery_id`, `orderdelivrytime`, `deliverycost`, `totalorderprice`, `orderstatas`, `paymentmethod`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '12:00:00', 10000.00, 12000.00, 'Delivered', 'Bank Transfer', '2024-08-07 09:05:20', '2024-08-07 15:11:25'),
(3, 1, 5, NULL, '12:00:00', NULL, 15000.00, NULL, NULL, '2024-08-09 17:51:02', '2024-08-09 17:51:02'),
(4, 1, 1, 1, '12:00:00', 121.00, 150.00, 'Delivered', 'Credit Card', '2024-08-10 21:16:36', '2024-08-10 21:16:36'),
(5, 4, 3, 1, '15:30:00', 10.00, 100.50, 'In preparation', 'Credit Card', '2024-08-11 13:02:45', '2024-08-11 13:04:22'),
(6, 4, 3, NULL, '15:00:00', 10.00, 150.50, 'pending', 'credit_card', '2024-08-11 17:24:03', '2024-08-11 17:24:03'),
(7, 4, 3, NULL, '15:00:00', 10.00, 150.50, 'pending', 'credit_card', '2024-08-11 17:25:29', '2024-08-11 17:25:29'),
(8, 1, 1, NULL, '02:53:54', 15200.00, 4522.00, 'Pending', 'Credit Card', '2024-08-13 20:51:05', '2024-08-13 20:51:05'),
(9, 2, 3, NULL, '02:00:26', 9999.00, 9999.00, 'Pending', 'Credit Card', '2024-08-13 20:57:45', '2024-08-13 20:57:45'),
(10, 7, 2, NULL, '03:00:25', 44.00, 44.00, 'Completed', 'PayPal', '2024-08-13 21:00:34', '2024-08-13 21:00:34'),
(11, 8, 3, NULL, '03:10:44', 333.00, 333.00, 'Pending', 'Credit Card', '2024-08-13 21:10:57', '2024-08-13 21:10:57'),
(12, 9, 2, NULL, '03:15:40', 1111.00, 1111.00, 'Canceled', 'Cash', '2024-08-13 21:13:51', '2024-08-13 21:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `total_product_price` decimal(10,2) NOT NULL,
  `order_delivery_time` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `product_id`, `order_id`, `user_id`, `quantity`, `total_product_price`, `order_delivery_time`, `status`, `created_at`, `updated_at`) VALUES
(78, 1, NULL, 4, 3, 120000.00, '2024-08-21 09:00:00', 0, '2024-08-11 12:22:39', '2024-08-11 12:26:57'),
(79, NULL, NULL, 4, 0, 0.00, '2024-08-21 09:00:00', 0, '2024-08-11 12:22:39', '2024-08-11 12:22:39'),
(80, 1, NULL, 4, 2, 80000.00, '2024-08-21 09:00:00', 1, '2024-08-11 12:26:37', '2024-08-11 12:26:37'),
(81, 1, NULL, 4, 3, 120000.00, '2024-08-21 09:00:00', 3, '2024-08-11 12:26:57', '2024-08-11 12:26:57'),
(82, 1, NULL, 4, 10, 400000.00, '2024-08-20 11:00:00', 0, '2024-08-11 12:30:43', '2024-08-11 12:30:43'),
(83, 2, NULL, 4, 5, 2500.00, '2024-08-21 06:30:00', 0, '2024-08-11 12:30:43', '2024-08-11 12:30:43'),
(84, 2, NULL, 4, 2, 1000.00, '2024-08-22 13:00:00', 0, '2024-08-11 12:30:43', '2024-08-11 12:30:43'),
(85, 2, NULL, 4, 8, 4000.00, '2024-08-23 08:00:00', 0, '2024-08-11 12:30:43', '2024-08-11 12:30:43'),
(86, 1, NULL, 4, 12, 480000.00, '2024-08-24 10:00:00', 0, '2024-08-11 12:30:43', '2024-08-11 12:30:43');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `prais` decimal(8,2) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `season_id` bigint(20) UNSIGNED NOT NULL,
  `farm_id` bigint(20) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `productstatus` tinyint(1) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `prais`, `quantity`, `photo`, `description`, `category_id`, `season_id`, `farm_id`, `data`, `productstatus`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'طماطم', 3.50, 100, 'https://upload.wikimedia.org/wikipedia/commons/8/89/Tomato_je.jpg', 'طماطم طازجة ومغذية.', 1, 1, 1, '2024-08-10', 1, 'tomato', '2024-08-11 21:36:56', '2024-08-11 21:36:56'),
(2, 'أرز بسمتي', 15.00, 50, 'https://upload.wikimedia.org/wikipedia/commons/1/17/Basmati_rice.jpg', 'أرز بسمتي ذو جودة عالية.', 2, 1, 1, '2024-08-10', 1, 'basmati-rice', '2024-08-11 21:36:56', '2024-08-11 21:36:56'),
(3, 'تفاح', 5.00, 200, 'https://upload.wikimedia.org/wikipedia/commons/1/15/Red_Apple.jpg', 'تفاح طازج وناضج.', 3, 1, 1, '2024-08-10', 1, 'apple', '2024-08-11 21:36:56', '2024-08-11 21:36:56'),
(4, 'دجاج بلدي', 25.00, 30, 'https://upload.wikimedia.org/wikipedia/commons/1/1b/Chicken.jpg', 'دجاج بلدي صحي وطازج.', 4, 1, 1, '2024-08-10', 1, 'local-chicken', '2024-08-11 21:36:56', '2024-08-11 21:36:56'),
(5, 'بطاطس', 2.00, 150, 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Patates.jpg', 'بطاطس طازجة وصحية.', 1, 1, 1, '2024-08-10', 1, 'potato', '2024-08-11 21:36:56', '2024-08-11 21:36:56'),
(6, 'شعير', 10.00, 40, 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Barley_field.jpg', 'شعير ذو جودة عالية.', 2, 1, 1, '2024-08-10', 1, 'barley', '2024-08-11 21:36:56', '2024-08-11 21:36:56'),
(7, 'برتقال', 4.00, 120, 'https://upload.wikimedia.org/wikipedia/commons/c/c4/Orange-Fruit-Pieces.jpg', 'برتقال طازج ولذيذ.', 3, 1, 1, '2024-08-10', 1, 'orange', '2024-08-11 21:36:56', '2024-08-11 21:36:56'),
(8, 'لحم ضأن', 50.00, 20, 'https://upload.wikimedia.org/wikipedia/commons/4/40/Lamb_ribs_raw.jpg', 'لحم ضأن طازج.', 4, 1, 1, '2024-08-10', 1, 'lamb-meat', '2024-08-11 21:36:56', '2024-08-11 21:36:56'),
(9, 'احمد منصور هزاع عبد الباري العفوري', 150.00, 6, 'photos/01J5714YQXHCZ87VWT8BEY3TVV.PNG', 'نتاناناناتاتنا', 2, 2, 5, '2024-08-22', 0, 'kokokokoko', '2024-08-13 20:28:39', '2024-08-13 20:29:19');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rating` tinyint(3) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `product_id`, `user_id`, `rating`, `comment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 5, 'ال', '2024-08-09 18:47:05', '2024-08-09 18:47:05'),
(2, 1, 4, 4, 'This is a great product!', '2024-08-11 17:53:19', '2024-08-11 17:53:19'),
(3, 1, 1, 3, 'ةوى', '2024-08-13 21:42:58', '2024-08-13 21:42:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `display_name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'client', 'client_Pepole', NULL, NULL, NULL),
(2, 'Delivery_driver', 'Delivery_driver_pepole', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
(1, 3, 'App\\Models\\User'),
(2, 4, 'App\\Models\\User'),
(2, 5, 'App\\Models\\User'),
(2, 6, 'App\\Models\\User'),
(2, 7, 'App\\Models\\User'),
(2, 8, 'App\\Models\\User'),
(1, 9, 'App\\Models\\User'),
(2, 10, 'App\\Models\\User'),
(2, 11, 'App\\Models\\User'),
(2, 12, 'App\\Models\\User'),
(1, 13, 'App\\Models\\User');

-- --------------------------------------------------------

--
-- Table structure for table `seasons`
--

CREATE TABLE `seasons` (
  `id` int(10) UNSIGNED NOT NULL,
  `seasonsname` varchar(255) NOT NULL,
  `startdaet` date NOT NULL,
  `enddate` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seasons`
--

INSERT INTO `seasons` (`id`, `seasonsname`, `startdaet`, `enddate`, `created_at`, `updated_at`) VALUES
(1, 'الربيع', '2024-03-20', '2024-06-20', '2024-08-11 21:52:19', '2024-08-11 21:52:19'),
(2, 'الصيف', '2024-06-21', '2024-09-22', '2024-08-11 21:52:19', '2024-08-11 21:52:19'),
(3, 'الخريف', '2024-09-23', '2024-12-21', '2024-08-11 21:52:19', '2024-08-11 21:52:19'),
(4, 'الشتاء', '2024-12-22', '2024-03-19', '2024-08-11 21:52:19', '2024-08-11 21:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ahmed', 'ahmedalafoori@gmail.com', '', NULL, '$2y$12$TFa.llSN6NeBkVuEbToDCebk14a5LBzC48fmPSVvfh0FRFFUs8Gse', 'QJeuh5TimoxuSkoHtY4DdztF4f9fTLDfVcPJEb32vDRzLw46iuIbX8mD8s61', '2024-08-12 02:39:38', '2024-08-12 02:39:38'),
(2, 'kalid', 'kalid@gmail.com', '', NULL, '$2y$12$KXs56Uc6Z.H1/SkLBINmlulb0ZcLzDG16AM3ZgN1yGZ9QggZUSWEm', NULL, '2024-08-12 03:24:59', '2024-08-12 03:24:59'),
(3, 'تجربة عميل 1', 'custmartest1@gmail.com', '', '2024-08-07 04:17:38', '$2y$12$.mVzcuBszsfyS77HjUZo7.MYimIuWe1V4zffrxpf9gZm0YzzEmssm', '12345678', '2024-08-07 04:18:26', '2024-08-07 04:18:26'),
(4, 'ahmed ma', 'ahmedalafoor7i@gmail.com', '', NULL, '$2y$12$Bw2swAvCICLPxYfXcJsPOeTR6OcxSEUb.RGc2komLDS21EQsBXFey', NULL, '2024-08-06 23:17:48', '2024-08-06 23:17:48'),
(5, 'asdasd', 'asd@gmail.com', '', NULL, '$2y$12$5rlwXw54RYIyc8qnkcjnXOIEYhoahu2v2DtP6CdIyUmeqApVWIuQe', NULL, '2024-08-07 09:02:07', '2024-08-07 09:02:07'),
(6, 'asdasd', 'asda@gmail.com', '', NULL, '$2y$12$8V..OLyWr4GYgt1KcFt/4OcKYeCEg7qj/swC7IBFVuzNBDtB3YfV.', NULL, '2024-08-09 14:58:11', '2024-08-09 14:58:11'),
(7, 'wael', 'asd3@gmail.com', '', NULL, '$2y$12$BYyEX6FS5ZBs5bhxg4jqnOwEUPALcMcdyDZ6mYgxX2Q4wiXYUmMXe', NULL, '2024-08-09 15:35:25', '2024-08-09 15:35:25'),
(8, 'alhiss', 'alhoss@gmail.com', '', NULL, '$2y$12$BevObfMKQG39Eg22Tn4N8.wg4C/moMhikck4zbwZ71U8qguhyMVge', NULL, '2024-08-09 17:58:41', '2024-08-09 17:58:41'),
(9, 'Ahmed Aliadmin', 'admin@gmail.com3435', '', '2024-08-11 13:36:08', '$2y$12$aI5pngH/l4VNzitxgyI64.cX49yz0Rcr6UBR7QFs.J1JrCV/KEYl.', 'admin', '2024-08-11 13:36:29', '2024-08-11 13:36:29'),
(10, 'Ahmed Al', 'admin00@gmail.com', '', NULL, '$2y$12$JiSnsCve6e9fSMpf6TcYreCNJhvO8z6SYODQNqpENWj2VcKL2ADfy', NULL, '2024-08-11 13:49:08', '2024-08-11 13:49:08'),
(11, 'Ahmed Alp', 'admin112@gmail.com', '778138153', NULL, '$2y$12$Z08jUJRMK6SwviKAhENeduy06s5Cd7kd1PZkNs3stNjDAY8vAOd5O', NULL, '2024-08-11 13:53:05', '2024-08-11 13:53:05'),
(12, 'asd', 'asdasd@gmail.com', '777000111', NULL, '$2y$12$J.IVnwc6CU3Sp9MUTogXCOuR8befUKauW0VTnvK1tSGXjAf59oRq2', NULL, '2024-08-11 14:07:51', '2024-08-11 14:07:51'),
(13, 'وائل', 'waelali@gmail.com', '770105533', NULL, '$2y$12$qrf5qJ2R3j2.R65kBL5Lj.PS2j/Z2.C.uxLc3PklI.CQqsgCyhCYG', NULL, '2024-08-11 16:08:31', '2024-08-11 16:08:31');

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
-- Indexes for table `delivery_details`
--
ALTER TABLE `delivery_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `farms`
--
ALTER TABLE `farms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `farms_user_id_foreign` (`user_id`);

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
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  ADD KEY `role_user_role_id_foreign` (`role_id`);

--
-- Indexes for table `seasons`
--
ALTER TABLE `seasons`
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
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `delivery_details`
--
ALTER TABLE `delivery_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `farms`
--
ALTER TABLE `farms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seasons`
--
ALTER TABLE `seasons`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
