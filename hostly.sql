-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 12, 2024 at 06:10 AM
-- Server version: 8.3.0
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostly`
--

-- --------------------------------------------------------

--
-- Table structure for table `billings`
--

DROP TABLE IF EXISTS `billings`;
CREATE TABLE IF NOT EXISTS `billings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint UNSIGNED NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `billing_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `payment_status` enum('pending','completed','failed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `billings_subscription_id_foreign` (`subscription_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

DROP TABLE IF EXISTS `coupons`;
CREATE TABLE IF NOT EXISTS `coupons` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_discount` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `customers_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `phone`, `address`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '01092642498', 'Ayyat - Giza', 2, '2024-10-10 10:33:46', '2024-10-10 10:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `c_m_s_contents`
--

DROP TABLE IF EXISTS `c_m_s_contents`;
CREATE TABLE IF NOT EXISTS `c_m_s_contents` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `page_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domain_plans`
--

DROP TABLE IF EXISTS `domain_plans`;
CREATE TABLE IF NOT EXISTS `domain_plans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `extension` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_reNew` decimal(6,2) NOT NULL,
  `price_1_year` decimal(8,2) NOT NULL,
  `price_2_years` decimal(10,2) NOT NULL,
  `price_3_years` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domain_plans`
--

INSERT INTO `domain_plans` (`id`, `extension`, `price_reNew`, `price_1_year`, `price_2_years`, `price_3_years`, `created_at`, `updated_at`) VALUES
(1, '.com', 8.50, 180.00, 170.00, 160.00, '2024-10-10 14:19:10', '2024-10-10 14:19:10'),
(3, '-eg.com', 9.00, 150.00, 130.00, 120.00, '2024-10-11 00:05:47', '2024-10-11 00:05:47'),
(4, '.org', 9.00, 100.00, 80.00, 50.00, '2024-10-11 00:06:18', '2024-10-11 00:06:18'),
(5, '.shop', 9.00, 100.00, 80.00, 50.00, '2024-10-11 00:06:41', '2024-10-11 00:06:41'),
(6, '.net', 9.00, 100.00, 80.00, 50.00, '2024-10-11 00:07:07', '2024-10-11 00:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `domain_subscriptions`
--

DROP TABLE IF EXISTS `domain_subscriptions`;
CREATE TABLE IF NOT EXISTS `domain_subscriptions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `dns1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dns2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dns3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dns4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime DEFAULT NULL,
  `status` enum('active','pending','ended','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `domain_subscriptions_order_id_foreign` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domain_subscriptions`
--

INSERT INTO `domain_subscriptions` (`id`, `dns1`, `dns2`, `dns3`, `dns4`, `order_id`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'huhuyy', 'piji', 'jkj', 'ihh11', 3, '2024-10-11 17:55:18', '2025-10-11 20:55:18', 'active', '2024-10-11 17:55:18', '2024-10-12 01:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hosting_plans`
--

DROP TABLE IF EXISTS `hosting_plans`;
CREATE TABLE IF NOT EXISTS `hosting_plans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_reNew` decimal(6,2) NOT NULL,
  `price_1_month` decimal(6,2) NOT NULL,
  `price_1_year` decimal(8,2) NOT NULL,
  `price_2_years` decimal(10,2) NOT NULL,
  `price_3_years` decimal(10,2) NOT NULL,
  `features_included` json NOT NULL,
  `features_not_included` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hosting_plans`
--

INSERT INTO `hosting_plans` (`id`, `name`, `description`, `price_reNew`, `price_1_month`, `price_1_year`, `price_2_years`, `price_3_years`, `features_included`, `features_not_included`, `created_at`, `updated_at`) VALUES
(1, 'Premium', 'Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et', 8.50, 200.00, 180.00, 170.00, 160.00, '\"[\\\"Branding and design Identity\\\",\\\"Web site Marketing Solutions\\\",\\\"Unlimited Application Installation\\\"]\"', '\"[\\\"24/7 system Monitoring\\\",\\\"Dedicated IP Address\\\"]\"', '2024-10-10 10:38:38', '2024-10-10 10:38:38');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `LogType` enum('INFO','WARN','ERROR') COLLATE utf8mb4_unicode_ci NOT NULL,
  `Message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(48, '2014_10_12_000000_create_users_table', 4),
(49, '2014_10_12_100000_create_password_reset_tokens_table', 4),
(50, '2019_08_19_000000_create_failed_jobs_table', 4),
(51, '2019_12_14_000001_create_personal_access_tokens_table', 4),
(52, '2024_09_14_150749_create_customers_table', 4),
(53, '2024_09_14_150756_create_domian_plans_table', 4),
(54, '2024_09_14_150756_create_hosting_plans_table', 4),
(55, '2024_09_14_150802_create_servers_table', 4),
(56, '2024_09_14_150828_create_domain_subscriptions_table', 4),
(57, '2024_09_14_150828_create_orders_table', 4),
(58, '2024_09_14_150828_create_subscriptions_table', 4),
(59, '2024_09_14_150836_create_billings_table', 4),
(60, '2024_09_14_150843_create_support_tickets_table', 4),
(28, '2024_09_14_150749_create_coupons_table', 2),
(29, '2024_09_15_150749_create_coupons_table', 3),
(61, '2024_09_14_150855_create_server_configurations_table', 4),
(62, '2024_09_14_150902_create_logs_table', 4),
(63, '2024_09_14_150909_create_c_m_s_contents_table', 4),
(64, '2024_09_14_150949_create_coupons_table', 4),
(65, '2024_09_14_150756_create_vps_plans_table', 5),
(66, '2024_09_14_150828_create_vps_subscriptions_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_number` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `product` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hosting_plan_id` bigint UNSIGNED DEFAULT NULL,
  `domain_plan_id` bigint UNSIGNED DEFAULT NULL,
  `vps_plan_id` bigint UNSIGNED DEFAULT NULL,
  `num_months` smallint NOT NULL,
  `disCount` decimal(8,2) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('new','re_new') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_customer_id_foreign` (`customer_id`),
  KEY `orders_hosting_plan_id_foreign` (`hosting_plan_id`),
  KEY `orders_domain_plan_id_foreign` (`domain_plan_id`),
  KEY `orders_vbs_plan_id_foreign` (`vps_plan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `transaction_number`, `customer_id`, `product`, `hosting_plan_id`, `domain_plan_id`, `vps_plan_id`, `num_months`, `disCount`, `total`, `image_path`, `type`, `created_at`, `updated_at`) VALUES
(1, 'abdulrahmansalem', 'abdulrahmansalem524@gmail.com', '01122334455', '01122334455', 1, 'Hosting : Premuim', 1, NULL, NULL, 48, 0.00, 8755.20, '1728567907-1727054142-vodafone-logo.png', 'new', '2024-10-10 10:45:07', '2024-10-10 10:45:07'),
(2, 'abdulrahmansalem', 'abdulrahmansalem524@gmail.com', '01122334455', '01122334455', 1, 'Hosting : Premuim', 1, NULL, NULL, 48, 0.00, 8755.20, '1728568109-1727054142-vodafone-logo.png', 'new', '2024-10-10 10:48:29', '2024-10-10 10:48:29'),
(3, 'jkgigwdi', 'jhws@gmail.com', '01122334455', '01122334455', 1, 'xnxx-eg.com', NULL, 3, NULL, 12, 0.00, 2052.00, '1728666965-1728568109-1727054142-vodafone-logo.png', 'new', '2024-10-11 14:16:05', '2024-10-11 14:16:05'),
(4, 'kbjhjb', 'bkbk@gmail.com', '01122334455', '01122334455', 1, 'vps: Vps Premium', NULL, NULL, 1, 48, 0.00, 14227.20, '1728703811-1728666965-1728568109-1727054142-vodafone-logo.png', 'new', '2024-10-12 00:30:11', '2024-10-12 00:30:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

DROP TABLE IF EXISTS `servers`;
CREATE TABLE IF NOT EXISTS `servers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `server_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `servers_ip_address_unique` (`ip_address`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `server_configurations`
--

DROP TABLE IF EXISTS `server_configurations`;
CREATE TABLE IF NOT EXISTS `server_configurations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `server_id` bigint UNSIGNED NOT NULL,
  `CPUCores` int NOT NULL,
  `RAMGB` int NOT NULL,
  `disk_spaceGB` int NOT NULL,
  `operating_system` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `server_configurations_server_id_foreign` (`server_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password_host` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cPanel_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `domain_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime DEFAULT NULL,
  `status` enum('active','pending','ended','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_order_id_foreign` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_host`, `password_host`, `cPanel_link`, `domain_name`, `order_id`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sknj', '1457', NULL, 'xnxx-eg.com', 1, '2024-10-10 10:45:07', '2028-10-10 13:45:07', 'active', '2024-10-10 10:45:07', '2024-10-12 00:01:02'),
(2, NULL, NULL, NULL, 'xnxx-eg.com', 2, '2024-10-10 10:48:29', '2028-10-10 13:48:29', 'pending', '2024-10-10 10:48:29', '2024-10-10 10:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `support_tickets`
--

DROP TABLE IF EXISTS `support_tickets`;
CREATE TABLE IF NOT EXISTS `support_tickets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` bigint UNSIGNED NOT NULL,
  `subject` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('open','in_progress','resolved','closed') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'open',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `support_tickets_customer_id_foreign` (`customer_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','customer') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Abdelrahman', 'abdo@gmail.com', '$2y$12$kye9Te.JlYQX8yJ5MDZGf.JccZiI4hBaKEc4mOzzROSvxq4dJ2bfa', 'admin', 'T7cuq8Q6hOON0RIlIJ4BphPWpHqDvHyTJFDaDLP8ZhLyafWqsrVT4OelVeUUvUEQwM9hFdnY8m8C8dwZ', NULL, '2024-10-10 10:33:46', '2024-10-10 10:33:46'),
(2, 'ahmedo', 'abdulrahmansalem524@gmail.com', '$2y$12$EEDjaabYalZsZkdqeP.Io.kaqeS8jP/TFn3bZLFP/d/ag6mjdtXkO', 'customer', 'ZvXubWdN4Z1MY5vviNAPHC9ZIup3XBCJyapwy1EEkDd7DHEccpjwGEMYdqQ6oU3iGYGTNyYF3TjI75ZL', NULL, '2024-10-10 10:33:46', '2024-10-10 10:33:46');

-- --------------------------------------------------------

--
-- Table structure for table `vps_plans`
--

DROP TABLE IF EXISTS `vps_plans`;
CREATE TABLE IF NOT EXISTS `vps_plans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_reNew` decimal(6,2) NOT NULL,
  `price_1_month` decimal(6,2) NOT NULL,
  `price_1_year` decimal(8,2) NOT NULL,
  `price_2_years` decimal(10,2) NOT NULL,
  `price_3_years` decimal(10,2) NOT NULL,
  `features_included` json NOT NULL,
  `features_not_included` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vps_plans`
--

INSERT INTO `vps_plans` (`id`, `name`, `description`, `price_reNew`, `price_1_month`, `price_1_year`, `price_2_years`, `price_3_years`, `features_included`, `features_not_included`, `created_at`, `updated_at`) VALUES
(1, 'Vps Premium', 'Lnteger sapien nec sapien sollicitudin ultrices Cras tempor id lorem et', 9.00, 300.00, 280.00, 270.00, 260.00, '\"[\\\"Branding and design Identity\\\",\\\"Unlimited Application Installation\\\"]\"', '\"[\\\"Dedicated IP Address\\\"]\"', '2024-10-10 15:10:13', '2024-10-10 15:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `vps_subscriptions`
--

DROP TABLE IF EXISTS `vps_subscriptions`;
CREATE TABLE IF NOT EXISTS `vps_subscriptions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` bigint UNSIGNED NOT NULL,
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `end_date` datetime DEFAULT NULL,
  `status` enum('active','pending','ended','cancelled') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `vps_subscriptions_order_id_foreign` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vps_subscriptions`
--

INSERT INTO `vps_subscriptions` (`id`, `user`, `password`, `ip`, `order_id`, `start_date`, `end_date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'sameh', '484845', 'kjiooj', 4, '2024-10-12 00:30:11', '2028-10-12 03:30:11', 'active', '2024-10-12 00:30:11', '2024-10-12 01:18:55');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
