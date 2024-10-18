-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 07:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tulja`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_name`, `last_name`, `admin_email`, `password`, `role`, `photo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'admin@gmail.com', '$2y$10$w7LU4I5Xn19VKzAjMQZJRO7rvtmRphZAaMyf9fESYnD7cLD5DoqQu', 0, NULL, '1', NULL, NULL),
(3, 'Test', 'test1', 'test@gmail.com', '$2y$10$lcVypNRWQ6OT.zP8CSP4AuVTdQ9IKEdmUgIuj0DhU2No.nZRUaEgq', 1, '1617861616210401151258_1_540x360.jpg', '1', '2021-04-08 00:29:53', '2021-04-08 00:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_units` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_icons` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_sort` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `units_display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icons_display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `attribute_name`, `attribute_type`, `data_type`, `attribute_values`, `attribute_units`, `attribute_icons`, `attribute_sort`, `units_display`, `icons_display`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Brand', '3', '1', 'Tulja Bhavani', '0', '0', '0', '0', '0', '1', '2021-04-02 00:10:44', '2021-04-02 00:10:44'),
(2, 'Caloric Value', '3', '1', '389', '0', '0', '0', '0', '0', '1', '2021-04-02 00:11:15', '2021-04-02 00:11:15'),
(3, 'Certification', '3', '1', 'FSSAI : 22419542000190', '0', '0', '0', '0', '0', '1', '2021-04-02 00:11:46', '2021-04-02 00:11:46'),
(4, 'Container Type', '3', '1', 'Pouch', '0', '0', '0', '0', '0', '1', '2021-04-02 00:12:36', '2021-04-02 00:12:36'),
(5, 'Country of Origin', '3', '1', 'India', '0', '0', '0', '0', '0', '1', '2021-04-02 00:13:00', '2021-04-02 00:13:00'),
(6, 'Flavor', '3', '1', 'Chicory,Natural', '0,0', '0,0', '0,0', '0', '0', '1', '2021-04-02 00:19:59', '2021-04-02 00:19:59'),
(7, 'Form Factor', '3', '1', 'Powder,Nuts', '0,0', '0,0', '0,0', '0', '0', '1', '2021-04-02 00:20:32', '2021-04-02 00:20:32'),
(8, 'Ingredients', '3', '1', 'Coffee,Coffee & Chicory,Black Tea,Mulitigrains', '0,0,0,0', '0,0,0,0', '0,0,0,0', '0', '0', '1', '2021-04-02 00:21:13', '2021-04-02 00:21:13'),
(9, 'Manufactured By', '3', '1', 'Tulja Bhavani Agencies', '0', '0', '0', '0', '0', '1', '2021-04-02 00:21:40', '2021-04-02 00:21:40'),
(10, 'Maximum Shelf Life', '3', '1', '3 Months,6 Months,9 Months', '0,0,0', '0,0,0', '0,0,0', '0', '0', '1', '2021-04-02 00:22:23', '2021-04-02 00:22:23'),
(11, 'Model Name', '3', '1', 'Filter Coffee Powder blended with Chicory', '0', '0', '0', '0', '0', '1', '2021-04-02 00:22:47', '2021-04-02 00:22:47'),
(12, 'Nutrient Content', '3', '1', 'Energy 389Kcal / 100g, Carbohydrates 72.8g / 100g, Total Fat 5.56g / 100g, Total Sugars 6/94g /100g, Diatary Fibre 16.8g / 100g, Caffeine (on dry basis) 0.98%', '0', '0', '0', '0', '0', '1', '2021-04-02 00:23:14', '2021-04-02 00:23:14'),
(13, 'Organic', '3', '1', 'Yes,No', '0,0', '0,0', '0,0', '0', '0', '1', '2021-04-02 00:24:17', '2021-04-02 00:24:17'),
(14, 'Quantity', '3', '1', '500 g', 'Grams', '0', '0', '0', '0', '1', '2021-04-02 00:24:47', '2021-04-02 00:24:47'),
(15, 'Roast Type', '3', '1', 'Low,Medium,High', '0,0,0', '0,0,0', '0,0,0', '0', '0', '1', '2021-04-02 00:26:10', '2021-04-02 00:26:10'),
(16, 'Type', '3', '1', 'Filter Coffee,Nuts,Powder', '0,0,0', '0,0,0', '0,0,0', '0', '0', '1', '2021-04-02 00:26:33', '2021-04-02 00:26:33');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_groups`
--

CREATE TABLE `attribute_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_sorting` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_groups`
--

INSERT INTO `attribute_groups` (`id`, `attribute_group_name`, `attribute_description`, `attribute_sorting`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Dolls', '<p>Wedding Dolls</p>', '1', '1', '2021-04-19 01:03:12', '2021-04-19 01:03:12'),
(2, 'Navrati Kolu Dolls', '<p>Navarathi Dolls</p>', '2', '1', '2021-04-19 01:03:42', '2021-04-19 01:03:42'),
(3, 'Wedding Decoration Dolls', '<p>Wedding Decoration Dolls</p>', '3', '1', '2021-04-19 01:04:10', '2021-04-19 01:04:10'),
(4, 'Babby Shower', '<p>Babby Shower</p>', '4', '1', '2021-04-19 01:04:43', '2021-04-19 01:04:43'),
(5, 'Marapatchi Dolls', '<p>Wooden Dolls</p>', '5', '1', '2021-04-19 01:05:09', '2021-04-19 01:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `attribute_types`
--

CREATE TABLE `attribute_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `attribute_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attribute_types`
--

INSERT INTO `attribute_types` (`id`, `attribute_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Text', '1', NULL, NULL),
(2, 'Textarea', '1', NULL, NULL),
(3, 'Dropdown', '1', NULL, NULL),
(4, 'Multiselect', '1', NULL, NULL),
(5, 'Checkbox', '1', NULL, NULL),
(6, 'Radio', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `web_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting_order` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_name`, `position`, `web_image`, `mobile_image`, `banner_title`, `banner_link`, `sorting_order`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Front 1', '1', '1618656092banner6.4581a1fc.jpg', '1618656092banner6.4581a1fc.jpg', 'Front1', NULL, NULL, '1', '2021-04-17 05:11:32', '2021-04-17 05:11:32'),
(3, 'Front 2', '1', '1618656115banner7.95d99aeb.jpg', '1618656115banner7.95d99aeb.jpg', 'Front 2', NULL, NULL, '1', '2021-04-17 05:11:55', '2021-04-17 05:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cust_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vendor_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ordered_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(45) DEFAULT NULL,
  `parent_category_id` varchar(45) DEFAULT NULL,
  `Category_url` varchar(405) DEFAULT NULL,
  `hns_code` varchar(405) DEFAULT NULL,
  `category_banner` varchar(405) DEFAULT NULL,
  `mobile_image` varchar(405) DEFAULT NULL,
  `short_description` text DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `sort_order` varchar(405) DEFAULT NULL,
  `status` varchar(450) DEFAULT '1',
  `featured_category` varchar(405) DEFAULT NULL,
  `featured_collection` varchar(405) DEFAULT NULL,
  `customer_group` varchar(405) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parent_category_id`, `Category_url`, `hns_code`, `category_banner`, `mobile_image`, `short_description`, `meta_title`, `meta_description`, `meta_keywords`, `sort_order`, `status`, `featured_category`, `featured_collection`, `customer_group`, `created_at`, `updated_at`) VALUES
(1, 'Coffee', '0', 'Coffee', 'sapa', '1618051610210401151258_1_540x360.jpg', '1618051610210401151258_1_540x360.jpg', NULL, NULL, NULL, NULL, NULL, '0', '0', '1', NULL, '2021-04-10 05:16:50', '2021-04-18 23:15:48'),
(2, 'milk', '1', 'milk', '32423423', '1618052116040621_sm_flashyfish_feat-680x383.jpg', '1618052116040621_sm_flashyfish_feat-680x383.jpg', NULL, NULL, NULL, NULL, NULL, '0', '0', '0', NULL, '2021-04-10 05:25:16', '2021-04-18 23:15:47'),
(3, 'Wedding Dolls', '0', 'Wedding-Dolls', 'ASD1105', '1618662688wed.deb893a5.jpeg', '1618662688wed.deb893a5.jpeg', '<p>Wedding dolls</p>', NULL, NULL, NULL, NULL, '1', '0', '0', NULL, '2021-04-17 07:01:28', '2021-04-17 07:01:28'),
(4, 'Navratri Kolu Dolls', '0', 'Navratri-Kolu-Dolls', 'NAV9', '1618807188nava.21e6f8ab.jpeg', '1618807188nava.21e6f8ab.jpeg', '<p>Navratri Kolu Dolls</p>', NULL, NULL, NULL, NULL, '1', '0', '0', NULL, '2021-04-18 23:09:48', '2021-04-18 23:09:48'),
(5, 'Wedding Decoration Accessories', '0', 'Wedding-Decoration-Accessories', 'WDA15', '1618807253wedd.15aca57c.jpeg', '1618807253wedd.15aca57c.jpeg', '<p>Wedding Decoration Accessories</p>', NULL, NULL, NULL, NULL, '1', '0', '0', NULL, '2021-04-18 23:10:53', '2021-04-18 23:10:53'),
(6, 'Baby Shower', '0', 'Baby-Shower', 'BS8', '1618807321baby.cf8f5787.jpeg', '1618807321baby.cf8f5787.jpeg', '<p>Baby Shower</p>', NULL, NULL, NULL, NULL, '1', '0', '0', NULL, '2021-04-18 23:12:01', '2021-04-18 23:12:01'),
(7, 'Marapachi/Wooden Dolls', '0', 'Marapachi-Wooden-Dolls', 'MWD', '1618807394marap.f2f0d4fb.jpeg', '1618807394marap.f2f0d4fb.jpeg', '<p>Marapachi/Wooden Dolls</p>', NULL, NULL, NULL, NULL, '1', '0', '0', NULL, '2021-04-18 23:13:14', '2021-04-18 23:13:14'),
(8, 'Kasiyatra Set', '0', 'Kasiyatra-Set', 'KS005', '1618807454kasi.2f99b593.jpeg', '1618807454kasi.2f99b593.jpeg', '<p>Kasiyatra Set</p>', NULL, NULL, NULL, NULL, '1', '0', '0', NULL, '2021-04-18 23:14:14', '2021-04-18 23:14:14'),
(9, 'Special Events Dolls', '0', 'Special-Events-Dolls', 'SED89', '1618807492special.ba7140ed.jpeg', '1618807492special.ba7140ed.jpeg', '<p>Special Events Dolls</p>', NULL, NULL, NULL, NULL, '1', '0', '0', NULL, '2021-04-18 23:14:52', '2021-04-18 23:14:52'),
(10, 'tamil wedding', '3', 'tamil-wedding', 'HSDF', '1619515880wed.deb893a5.jpeg', '1619515880wed.deb893a5.jpeg', NULL, NULL, NULL, NULL, NULL, '1', '0', '0', NULL, '2021-04-27 04:01:20', '2021-04-27 04:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `state_id`, `city_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 100, '1', 'Chennai', '1', '2021-04-02 06:27:05', '2021-04-02 06:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_code`, `country_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AF', 'Afghanistan', '1', NULL, NULL),
(2, 'AL', 'Albania', '1', NULL, NULL),
(3, 'DZ', 'Algeria', '1', NULL, NULL),
(4, 'DS', 'American Samoa', '1', NULL, NULL),
(5, 'AD', 'Andorra', '1', NULL, NULL),
(6, 'AO', 'Angola', '1', NULL, NULL),
(7, 'AI', 'Anguilla', '1', NULL, NULL),
(8, 'AQ', 'Antarctica', '1', NULL, NULL),
(9, 'AG', 'Antigua and Barbuda', '1', NULL, NULL),
(10, 'AR', 'Argentina', '1', NULL, NULL),
(11, 'AM', 'Armenia', '1', NULL, NULL),
(12, 'AW', 'Aruba', '1', NULL, NULL),
(13, 'AU', 'Australia', '1', NULL, NULL),
(14, 'AT', 'Austria', '1', NULL, NULL),
(15, 'AZ', 'Azerbaijan', '1', NULL, NULL),
(16, 'BS', 'Bahamas', '1', NULL, NULL),
(17, 'BH', 'Bahrain', '1', NULL, NULL),
(18, 'BD', 'Bangladesh', '1', NULL, NULL),
(19, 'BB', 'Barbados', '1', NULL, NULL),
(20, 'BY', 'Belarus', '1', NULL, NULL),
(21, 'BE', 'Belgium', '1', NULL, NULL),
(22, 'BZ', 'Belize', '1', NULL, NULL),
(23, 'BJ', 'Benin', '1', NULL, NULL),
(24, 'BM', 'Bermuda', '1', NULL, NULL),
(25, 'BT', 'Bhutan', '1', NULL, NULL),
(26, 'BO', 'Bolivia', '1', NULL, NULL),
(27, 'BA', 'Bosnia and Herzegovina', '1', NULL, NULL),
(28, 'BW', 'Botswana', '1', NULL, NULL),
(29, 'BV', 'Bouvet Island', '1', NULL, NULL),
(30, 'BR', 'Brazil', '1', NULL, NULL),
(31, 'IO', 'British Indian Ocean Territory', '1', NULL, NULL),
(32, 'BN', 'Brunei Darussalam', '1', NULL, NULL),
(33, 'BG', 'Bulgaria', '1', NULL, NULL),
(34, 'BF', 'Burkina Faso', '1', NULL, NULL),
(35, 'BI', 'Burundi', '1', NULL, NULL),
(36, 'KH', 'Cambodia', '1', NULL, NULL),
(37, 'CM', 'Cameroon', '1', NULL, NULL),
(38, 'CA', 'Canada', '1', NULL, NULL),
(39, 'CV', 'Cape Verde', '1', NULL, NULL),
(40, 'KY', 'Cayman Islands', '1', NULL, NULL),
(41, 'CF', 'Central African Republic', '1', NULL, NULL),
(42, 'TD', 'Chad', '1', NULL, NULL),
(43, 'CL', 'Chile', '1', NULL, NULL),
(44, 'CN', 'China', '1', NULL, NULL),
(45, 'CX', 'Christmas Island', '1', NULL, NULL),
(46, 'CC', 'Cocos (Keeling) Islands', '1', NULL, NULL),
(47, 'CO', 'Colombia', '1', NULL, NULL),
(48, 'KM', 'Comoros', '1', NULL, NULL),
(49, 'CD', 'Democratic Republic of the Congo', '1', NULL, NULL),
(50, 'CG', 'Republic of Congo', '1', NULL, NULL),
(51, 'CK', 'Cook Islands', '1', NULL, NULL),
(52, 'CR', 'Costa Rica', '1', NULL, NULL),
(53, 'HR', 'Croatia (Hrvatska)', '1', NULL, NULL),
(54, 'CU', 'Cuba', '1', NULL, NULL),
(55, 'CY', 'Cyprus', '1', NULL, NULL),
(56, 'CZ', 'Czech Republic', '1', NULL, NULL),
(57, 'DK', 'Denmark', '1', NULL, NULL),
(58, 'DJ', 'Djibouti', '1', NULL, NULL),
(59, 'DM', 'Dominica', '1', NULL, NULL),
(60, 'DO', 'Dominican Republic', '1', NULL, NULL),
(61, 'TP', 'East Timor', '1', NULL, NULL),
(62, 'EC', 'Ecuador', '1', NULL, NULL),
(63, 'EG', 'Egypt', '1', NULL, NULL),
(64, 'SV', 'El Salvador', '1', NULL, NULL),
(65, 'GQ', 'Equatorial Guinea', '1', NULL, NULL),
(66, 'ER', 'Eritrea', '1', NULL, NULL),
(67, 'EE', 'Estonia', '1', NULL, NULL),
(68, 'ET', 'Ethiopia', '1', NULL, NULL),
(69, 'FK', 'Falkland Islands (Malvinas)', '1', NULL, NULL),
(70, 'FO', 'Faroe Islands', '1', NULL, NULL),
(71, 'FJ', 'Fiji', '1', NULL, NULL),
(72, 'FI', 'Finland', '1', NULL, NULL),
(73, 'FR', 'France', '1', NULL, NULL),
(74, 'FX', 'France, Metropolitan', '1', NULL, NULL),
(75, 'GF', 'French Guiana', '1', NULL, NULL),
(76, 'PF', 'French Polynesia', '1', NULL, NULL),
(77, 'TF', 'French Southern Territories', '1', NULL, NULL),
(78, 'GA', 'Gabon', '1', NULL, NULL),
(79, 'GM', 'Gambia', '1', NULL, NULL),
(80, 'GE', 'Georgia', '1', NULL, NULL),
(81, 'DE', 'Germany', '1', NULL, NULL),
(82, 'GH', 'Ghana', '1', NULL, NULL),
(83, 'GI', 'Gibraltar', '1', NULL, NULL),
(84, 'GK', 'Guernsey', '1', NULL, NULL),
(85, 'GR', 'Greece', '1', NULL, NULL),
(86, 'GL', 'Greenland', '1', NULL, NULL),
(87, 'GD', 'Grenada', '1', NULL, NULL),
(88, 'GP', 'Guadeloupe', '1', NULL, NULL),
(89, 'GU', 'Guam', '1', NULL, NULL),
(90, 'GT', 'Guatemala', '1', NULL, NULL),
(91, 'GN', 'Guinea', '1', NULL, NULL),
(92, 'GW', 'Guinea-Bissau', '1', NULL, NULL),
(93, 'GY', 'Guyana', '1', NULL, NULL),
(94, 'HT', 'Haiti', '1', NULL, NULL),
(95, 'HM', 'Heard and Mc Donald Islands', '1', NULL, NULL),
(96, 'HN', 'Honduras', '1', NULL, NULL),
(97, 'HK', 'Hong Kong', '1', NULL, NULL),
(98, 'HU', 'Hungary', '1', NULL, NULL),
(99, 'IS', 'Iceland', '1', NULL, NULL),
(100, 'IN', 'India', '1', NULL, NULL),
(101, 'IM', 'Isle of Man', '1', NULL, NULL),
(102, 'ID', 'Indonesia', '1', NULL, NULL),
(103, 'IR', 'Iran (Islamic Republic of)', '1', NULL, NULL),
(104, 'IQ', 'Iraq', '1', NULL, NULL),
(105, 'IE', 'Ireland', '1', NULL, NULL),
(106, 'IL', 'Israel', '1', NULL, NULL),
(107, 'IT', 'Italy', '1', NULL, NULL),
(108, 'CI', 'Ivory Coast', '1', NULL, NULL),
(109, 'JE', 'Jersey', '1', NULL, NULL),
(110, 'JM', 'Jamaica', '1', NULL, NULL),
(111, 'JP', 'Japan', '1', NULL, NULL),
(112, 'JO', 'Jordan', '1', NULL, NULL),
(113, 'KZ', 'Kazakhstan', '1', NULL, NULL),
(114, 'KE', 'Kenya', '1', NULL, NULL),
(115, 'KI', 'Kiribati', '1', NULL, NULL),
(116, 'KP', 'Korea, Democratic People\'s Republic of', '1', NULL, NULL),
(117, 'KR', 'Korea, Republic of', '1', NULL, NULL),
(118, 'XK', 'Kosovo', '1', NULL, NULL),
(119, 'KW', 'Kuwait', '1', NULL, NULL),
(120, 'KG', 'Kyrgyzstan', '1', NULL, NULL),
(121, 'LA', 'Lao People\'s Democratic Republic', '1', NULL, NULL),
(122, 'LV', 'Latvia', '1', NULL, NULL),
(123, 'LB', 'Lebanon', '1', NULL, NULL),
(124, 'LS', 'Lesotho', '1', NULL, NULL),
(125, 'LR', 'Liberia', '1', NULL, NULL),
(126, 'LY', 'Libyan Arab Jamahiriya', '1', NULL, NULL),
(127, 'LI', 'Liechtenstein', '1', NULL, NULL),
(128, 'LT', 'Lithuania', '1', NULL, NULL),
(129, 'LU', 'Luxembourg', '1', NULL, NULL),
(130, 'MO', 'Macau', '1', NULL, NULL),
(131, 'MK', 'North Macedonia', '1', NULL, NULL),
(132, 'MG', 'Madagascar', '1', NULL, NULL),
(133, 'MW', 'Malawi', '1', NULL, NULL),
(134, 'MY', 'Malaysia', '1', NULL, NULL),
(135, 'MV', 'Maldives', '1', NULL, NULL),
(136, 'ML', 'Mali', '1', NULL, NULL),
(137, 'MT', 'Malta', '1', NULL, NULL),
(138, 'MH', 'Marshall Islands', '1', NULL, NULL),
(139, 'MQ', 'Martinique', '1', NULL, NULL),
(140, 'MR', 'Mauritania', '1', NULL, NULL),
(141, 'MU', 'Mauritius', '1', NULL, NULL),
(142, 'TY', 'Mayotte', '1', NULL, NULL),
(143, 'MX', 'Mexico', '1', NULL, NULL),
(144, 'FM', 'Micronesia, Federated States of', '1', NULL, NULL),
(145, 'MD', 'Moldova, Republic of', '1', NULL, NULL),
(146, 'MC', 'Monaco', '1', NULL, NULL),
(147, 'MN', 'Mongolia', '1', NULL, NULL),
(148, 'ME', 'Montenegro', '1', NULL, NULL),
(149, 'MS', 'Montserrat', '1', NULL, NULL),
(150, 'MA', 'Morocco', '1', NULL, NULL),
(151, 'MZ', 'Mozambique', '1', NULL, NULL),
(152, 'MM', 'Myanmar', '1', NULL, NULL),
(153, 'NA', 'Namibia', '1', NULL, NULL),
(154, 'NR', 'Nauru', '1', NULL, NULL),
(155, 'NP', 'Nepal', '1', NULL, NULL),
(156, 'NL', 'Netherlands', '1', NULL, NULL),
(157, 'AN', 'Netherlands Antilles', '1', NULL, NULL),
(158, 'NC', 'New Caledonia', '1', NULL, NULL),
(159, 'NZ', 'New Zealand', '1', NULL, NULL),
(160, 'NI', 'Nicaragua', '1', NULL, NULL),
(161, 'NE', 'Niger', '1', NULL, NULL),
(162, 'NG', 'Nigeria', '1', NULL, NULL),
(163, 'NU', 'Niue', '1', NULL, NULL),
(164, 'NF', 'Norfolk Island', '1', NULL, NULL),
(165, 'MP', 'Northern Mariana Islands', '1', NULL, NULL),
(166, 'NO', 'Norway', '1', NULL, NULL),
(167, 'OM', 'Oman', '1', NULL, NULL),
(168, 'PK', 'Pakistan', '1', NULL, NULL),
(169, 'PW', 'Palau', '1', NULL, NULL),
(170, 'PS', 'Palestine', '1', NULL, NULL),
(171, 'PA', 'Panama', '1', NULL, NULL),
(172, 'PG', 'Papua New Guinea', '1', NULL, NULL),
(173, 'PY', 'Paraguay', '1', NULL, NULL),
(174, 'PE', 'Peru', '1', NULL, NULL),
(175, 'PH', 'Philippines', '1', NULL, NULL),
(176, 'PN', 'Pitcairn', '1', NULL, NULL),
(177, 'PL', 'Poland', '1', NULL, NULL),
(178, 'PT', 'Portugal', '1', NULL, NULL),
(179, 'PR', 'Puerto Rico', '1', NULL, NULL),
(180, 'QA', 'Qatar', '1', NULL, NULL),
(181, 'RE', 'Reunion', '1', NULL, NULL),
(182, 'RO', 'Romania', '1', NULL, NULL),
(183, 'RU', 'Russian Federation', '1', NULL, NULL),
(184, 'RW', 'Rwanda', '1', NULL, NULL),
(185, 'KN', 'Saint Kitts and Nevis', '1', NULL, NULL),
(186, 'LC', 'Saint Lucia', '1', NULL, NULL),
(187, 'VC', 'Saint Vincent and the Grenadines', '1', NULL, NULL),
(188, 'WS', 'Samoa', '1', NULL, NULL),
(189, 'SM', 'San Marino', '1', NULL, NULL),
(190, 'ST', 'Sao Tome and Principe', '1', NULL, NULL),
(191, 'SA', 'Saudi Arabia', '1', NULL, NULL),
(192, 'SN', 'Senegal', '1', NULL, NULL),
(193, 'RS', 'Serbia', '1', NULL, NULL),
(194, 'SC', 'Seychelles', '1', NULL, NULL),
(195, 'SL', 'Sierra Leone', '1', NULL, NULL),
(196, 'SG', 'Singapore', '1', NULL, NULL),
(197, 'SK', 'Slovakia', '1', NULL, NULL),
(198, 'SI', 'Slovenia', '1', NULL, NULL),
(199, 'SB', 'Solomon Islands', '1', NULL, NULL),
(200, 'SO', 'Somalia', '1', NULL, NULL),
(201, 'ZA', 'South Africa', '1', NULL, NULL),
(202, 'GS', 'South Georgia South Sandwich Islands', '1', NULL, NULL),
(203, 'SS', 'South Sudan', '1', NULL, NULL),
(204, 'ES', 'Spain', '1', NULL, NULL),
(205, 'LK', 'Sri Lanka', '1', NULL, NULL),
(206, 'SH', 'St. Helena', '1', NULL, NULL),
(207, 'PM', 'St. Pierre and Miquelon', '1', NULL, NULL),
(208, 'SD', 'Sudan', '1', NULL, NULL),
(209, 'SR', 'Suriname', '1', NULL, NULL),
(210, 'SJ', 'Svalbard and Jan Mayen Islands', '1', NULL, NULL),
(211, 'SZ', 'Swaziland', '1', NULL, NULL),
(212, 'SE', 'Sweden', '1', NULL, NULL),
(213, 'CH', 'Switzerland', '1', NULL, NULL),
(214, 'SY', 'Syrian Arab Republic', '1', NULL, NULL),
(215, 'TW', 'Taiwan', '1', NULL, NULL),
(216, 'TJ', 'Tajikistan', '1', NULL, NULL),
(217, 'TZ', 'Tanzania, United Republic of', '1', NULL, NULL),
(218, 'TH', 'Thailand', '1', NULL, NULL),
(219, 'TG', 'Togo', '1', NULL, NULL),
(220, 'TK', 'Tokelau', '1', NULL, NULL),
(221, 'TO', 'Tonga', '1', NULL, NULL),
(222, 'TT', 'Trinidad and Tobago', '1', NULL, NULL),
(223, 'TN', 'Tunisia', '1', NULL, NULL),
(224, 'TR', 'Turkey', '1', NULL, NULL),
(225, 'TM', 'Turkmenistan', '1', NULL, NULL),
(226, 'TC', 'Turks and Caicos Islands', '1', NULL, NULL),
(227, 'TV', 'Tuvalu', '1', NULL, NULL),
(228, 'UG', 'Uganda', '1', NULL, NULL),
(229, 'UA', 'Ukraine', '1', NULL, NULL),
(230, 'AE', 'United Arab Emirates', '1', NULL, NULL),
(231, 'GB', 'United Kingdom', '1', NULL, NULL),
(232, 'US', 'United States', '1', NULL, NULL),
(233, 'UM', 'United States minor outlying islands', '1', NULL, NULL),
(234, 'UY', 'Uruguay', '1', NULL, NULL),
(235, 'UZ', 'Uzbekistan', '1', NULL, NULL),
(236, 'VU', 'Vanuatu', '1', NULL, NULL),
(237, 'VA', 'Vatican City State', '1', NULL, NULL),
(238, 'VE', 'Venezuela', '1', NULL, NULL),
(239, 'VN', 'Vietnam', '1', NULL, NULL),
(240, 'VG', 'Virgin Islands (British)', '1', NULL, NULL),
(241, 'VI', 'Virgin Islands (U.S.)', '1', NULL, NULL),
(242, 'WF', 'Wallis and Futuna Islands', '1', NULL, NULL),
(243, 'EH', 'Western Sahara', '1', NULL, NULL),
(244, 'YE', 'Yemen', '1', NULL, NULL),
(245, 'ZM', 'Zambia', '1', NULL, NULL),
(246, 'ZW', 'Zimbabwe', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_symbol` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_groups`
--

CREATE TABLE `customer_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_groups`
--

INSERT INTO `customer_groups` (`id`, `title`, `type`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', '2', '10000', '1', '2021-04-12 07:06:50', '2021-04-12 07:06:50');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homeslideres`
--

CREATE TABLE `homeslideres` (
  `id` int(11) NOT NULL,
  `title` varchar(405) DEFAULT NULL,
  `type` varchar(405) DEFAULT NULL,
  `product` varchar(405) DEFAULT NULL,
  `Position` varchar(405) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `homeslideres`
--

INSERT INTO `homeslideres` (`id`, `title`, `type`, `product`, `Position`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Virat1', 'All', NULL, NULL, '1', '2021-04-08 06:13:06', '2021-04-08 06:13:06'),
(3, 'cholate', 'All', '13', '123dfasd', '1', '2021-04-08 06:18:30', '2021-04-08 06:18:30'),
(4, 'titanic12', 'coffee', NULL, 'asdf', '1', '2021-04-08 07:17:19', '2021-04-08 07:17:19');

-- --------------------------------------------------------

--
-- Table structure for table `mail_templates`
--

CREATE TABLE `mail_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `template_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bcc_mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_mail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_mail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_mail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_templates`
--

INSERT INTO `mail_templates` (`id`, `template_name`, `bcc_mail`, `subject_mail`, `content_mail`, `footer_mail`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'awedawe', 'qwewe', '<p>qweqweqwewq</p>', '<p>eqweqweqwe</p>', '1', '2021-04-08 00:32:16', '2021-04-08 00:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `map_groups`
--

CREATE TABLE `map_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filter` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `combined_price` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sort_order` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `map_groups`
--

INSERT INTO `map_groups` (`id`, `group_name`, `attribute`, `filter`, `front`, `combined_price`, `sort_order`, `status`, `created_at`, `updated_at`) VALUES
(1, '3', '1,2,3', '3', '1', '2', '1,2,3', '1', '2021-04-09 04:57:36', '2021-04-09 04:58:23'),
(2, '1', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16', '0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0', '1', '2021-04-10 05:26:48', '2021-04-10 05:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2021_04_01_043321_create_taxes_table', 9),
(41, '2014_10_12_000000_create_users_table', 10),
(42, '2014_10_12_100000_create_password_resets_table', 10),
(43, '2019_08_19_000000_create_failed_jobs_table', 10),
(44, '2021_03_22_120629_create_admins_table', 10),
(45, '2021_03_29_045812_create_roles_table', 10),
(46, '2021_03_29_122505_create_permissions_table', 10),
(47, '2021_03_29_132958_create_banners_table', 10),
(48, '2021_03_30_130145_create_mail_templates_table', 10),
(49, '2021_03_31_043442_create_attributes_table', 10),
(50, '2021_03_31_061541_create_attribute_types_table', 10),
(51, '2021_03_31_124844_create_attribute_groups_table', 10),
(52, '2021_03_31_132439_create_currencies_table', 10),
(53, '2021_04_01_045903_create_countries_table', 10),
(54, '2021_04_01_055125_create_taxes_table', 10),
(55, '2021_04_02_091139_create_states_table', 11),
(56, '2021_04_02_100251_create_cities_table', 11),
(57, '2021_04_02_115844_create_pincodes_table', 12),
(58, '2021_04_08_101329_create_map_groups_table', 13),
(59, '2021_04_09_104304_create_customer_groups_table', 14),
(60, '2021_04_12_085255_create_products_table', 15),
(61, '2021_04_13_125454_group_number_to_products_table', 16),
(62, '2021_04_14_081953_user_to_products_table', 17),
(63, '2021_04_16_060220_permission_to_roles_table', 18),
(64, '2021_04_19_100151_create_carts_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manage_permission` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pincodes`
--

CREATE TABLE `pincodes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pincodes`
--

INSERT INTO `pincodes` (`id`, `country_id`, `state_id`, `city_id`, `pincode`, `status`, `created_at`, `updated_at`) VALUES
(1, '100', '1', '1', '600087', '1', '2021-04-02 06:51:53', '2021-04-02 06:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_base_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_sku` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attribute_values` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trending` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image4` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image5` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `similar_products` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `related_products` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `attribute_map` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `sub_category`, `product_title`, `product_base_price`, `product_sku`, `attribute_values`, `tax`, `weight`, `weight_unit`, `product_description`, `trending`, `delivery_date`, `image1`, `image2`, `image3`, `image4`, `image5`, `similar_products`, `related_products`, `status`, `created_at`, `updated_at`, `attribute_map`, `user_id`) VALUES
(1, '3', NULL, 'Tamil Wedding Dolls', '3350', 'TWD335', '', '1', '500', '1', '<p>Tamil Wedding Dolls</p>', 'on', '5', '1618817077handmade-wedding-doll-500x500.jpg', '', '', '', '', '', '', '1', '2021-04-19 01:54:37', '2021-04-19 01:54:37', '0', '1'),
(2, '3', NULL, 'Brahmin Wedding Dolls', '1500', 'BWD150', '', '1', '500', '1', '<p>Brahmin Wedding Dolls</p>', 'on', '5', '1618822631product-jpeg-500x500.jpg', '', '', '', '', '1', '1', '1', '2021-04-19 03:27:11', '2021-04-19 03:27:11', '0', '1'),
(3, '4', NULL, 'Kollu Dolls', '2500', 'KD250', '', '1', '600', '1', '<p>Kollu Dolls</p>', 'on', NULL, '1618822763A17_0.jpg', '', '', '', '', '', '', '1', '2021-04-19 03:29:23', '2021-04-19 03:29:23', '0', '1'),
(4, '7', NULL, 'Wooden Dolls', '5000', 'WD5000', '', '1', '450', '1', '<p>Wooden Dolls</p>', 'on', NULL, '1618822879mar008_woodenindiandoll.jpg', '', '', '', '', '', '', '1', '2021-04-19 03:31:19', '2021-04-19 03:31:19', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_permission` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `status`, `created_at`, `updated_at`, `user_permission`) VALUES
(1, 'Admin', '1', '2021-04-01 07:49:16', '2021-04-01 07:49:16', NULL),
(2, 'Staff', '1', '2021-04-01 07:49:23', '2021-04-01 07:49:23', NULL),
(3, 'Test1', '1', '2021-04-08 00:28:53', '2021-04-16 07:27:29', 'permission1,role2,user3,banner1,currency1,customer2,map2,tax2,mail3,group3,attribute4,category1,product2,homepage3,configs4,state1,city2,pincode3,pincode4');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `country_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `country_id`, `state_name`, `status`, `created_at`, `updated_at`) VALUES
(1, '100', 'Tamil Nadu', '1', '2021-03-06 00:02:12', '2021-04-02 06:24:47'),
(2, '100', 'kerala', '1', '2021-03-06 00:03:30', '2021-04-02 05:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `storeconfigurations`
--

CREATE TABLE `storeconfigurations` (
  `id` int(11) NOT NULL,
  `store_name` varchar(450) DEFAULT NULL,
  `status` varchar(45) DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `logo` varchar(405) DEFAULT NULL,
  `ownershiptype` varchar(405) DEFAULT NULL,
  `billing_address` text DEFAULT NULL,
  `location_address` text DEFAULT NULL,
  `GSTIN` varchar(450) DEFAULT NULL,
  `tax_type` varchar(405) DEFAULT NULL,
  `fav_icon` varchar(405) DEFAULT NULL,
  `Store_Meta_Title` varchar(450) DEFAULT NULL,
  `Store_Meta_Description` text DEFAULT NULL,
  `Store_Meta_Keywords` text DEFAULT NULL,
  `meta_keywords` varchar(450) DEFAULT NULL,
  `Order_Emails_From` varchar(450) DEFAULT NULL,
  `Order_Emails_To` varchar(450) DEFAULT NULL,
  `Order_Emails_BCC` varchar(450) DEFAULT NULL,
  `Contact_Us_Emails_To` varchar(450) DEFAULT NULL,
  `Contact_Us_Emails_BCC` varchar(450) DEFAULT NULL,
  `Default_Currency` varchar(405) DEFAULT NULL,
  `Date_Format` varchar(405) DEFAULT NULL,
  `Date_Timezone` varchar(405) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storeconfigurations`
--

INSERT INTO `storeconfigurations` (`id`, `store_name`, `status`, `created_at`, `updated_at`, `logo`, `ownershiptype`, `billing_address`, `location_address`, `GSTIN`, `tax_type`, `fav_icon`, `Store_Meta_Title`, `Store_Meta_Description`, `Store_Meta_Keywords`, `meta_keywords`, `Order_Emails_From`, `Order_Emails_To`, `Order_Emails_BCC`, `Contact_Us_Emails_To`, `Contact_Us_Emails_BCC`, `Default_Currency`, `Date_Format`, `Date_Timezone`) VALUES
(1, 'adsfsa', '1', NULL, '2021-04-08 09:03:02', 'watermelon.jpg', 'sdfs', '<p>dfsdvga</p>', '<p>xvbdfbv</p>', 'fgdfsg', 'fgdsfg', 'THE_SECRETS.jpg', 'fgsdafg', '<p>dfgsdfgsdf</p>', '<p>dfgsdgfsdg</p>', 'dhgsdgh', 'ghsdhg', 'ghdsfhg', 'ghdfhg', 'ghsdfgh', 'ghsdfg', 'ghdsfgh', 'ghdfgh', 'ghfdg');

-- --------------------------------------------------------

--
-- Table structure for table `taxes`
--

CREATE TABLE `taxes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tax_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tax_states` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taxes`
--

INSERT INTO `taxes` (`id`, `tax_name`, `tax_description`, `tax_type`, `tax_rate`, `tax_country`, `tax_states`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Wedding Doll', '<p>SGST</p>', '1', '6', '100', '2', '1', '2021-04-01 05:02:20', '2021-04-19 01:43:49');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` int(11) NOT NULL,
  `template_name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `template`
--

INSERT INTO `template` (`id`, `template_name`, `status`) VALUES
(1, 'Register', 1),
(2, 'Pending', 1),
(3, 'Proccessing', 1),
(4, 'Order Placed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_admin_email_unique` (`admin_email`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attributes_attribute_name_unique` (`attribute_name`);

--
-- Indexes for table `attribute_groups`
--
ALTER TABLE `attribute_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_groups_attribute_group_name_unique` (`attribute_group_name`);

--
-- Indexes for table `attribute_types`
--
ALTER TABLE `attribute_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `attribute_types_attribute_type_unique` (`attribute_type`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_country_code_unique` (`country_code`),
  ADD UNIQUE KEY `countries_country_name_unique` (`country_name`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `currencies_currency_title_unique` (`currency_title`),
  ADD UNIQUE KEY `currencies_currency_symbol_unique` (`currency_symbol`);

--
-- Indexes for table `customer_groups`
--
ALTER TABLE `customer_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `homeslideres`
--
ALTER TABLE `homeslideres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_templates`
--
ALTER TABLE `mail_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `map_groups`
--
ALTER TABLE `map_groups`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_role_id_unique` (`role_id`);

--
-- Indexes for table `pincodes`
--
ALTER TABLE `pincodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_role_name_unique` (`role_name`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storeconfigurations`
--
ALTER TABLE `storeconfigurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taxes`
--
ALTER TABLE `taxes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `taxes_tax_name_unique` (`tax_name`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `attribute_groups`
--
ALTER TABLE `attribute_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attribute_types`
--
ALTER TABLE `attribute_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_groups`
--
ALTER TABLE `customer_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `homeslideres`
--
ALTER TABLE `homeslideres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mail_templates`
--
ALTER TABLE `mail_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `map_groups`
--
ALTER TABLE `map_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pincodes`
--
ALTER TABLE `pincodes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `storeconfigurations`
--
ALTER TABLE `storeconfigurations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `taxes`
--
ALTER TABLE `taxes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
