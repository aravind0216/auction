-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 03:52 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$e5D4Q5L954x3DeH0.CHqtu0AVXdOaYCtoHkTYBqgjRkxgn.Dm1AI2', '0', NULL, '2020-06-10 06:30:45', '2020-06-10 06:30:45');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `sub_title`, `keyword`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Stories Behind Car Brand Names', NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). There are many variations of passages of Lorem Ipsum available', '1012654202.jpg', '2020-06-15 00:05:10', '2020-06-15 00:05:10'),
(2, 'Stories Behind Car Names', NULL, NULL, 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like). There are many variations of passages of Lorem Ipsum available', '398494747.jpg', '2020-06-15 00:05:29', '2020-06-15 00:05:29');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hyundai', '1865580945.jpg', '2020-06-23 01:18:33', '2020-06-23 01:19:12'),
(2, 'Maruti Suzuki', '502833142.png', '2020-06-23 01:19:20', '2020-06-23 01:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `damages`
--

CREATE TABLE `damages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `damage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `damages`
--

INSERT INTO `damages` (`id`, `damage`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Water Flood', '0', '2020-07-25 01:29:32', '2020-07-25 01:29:32');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `member_id`, `deposit`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', '1000', '850800030.jpg', '0', '2020-07-27 03:37:30', '2020-07-27 03:37:30');

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
-- Table structure for table `member_passwords`
--

CREATE TABLE `member_passwords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member_passwords`
--

INSERT INTO `member_passwords` (`id`, `date`, `end_date`, `member_id`, `name`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '2020-07-21', '2020-08-04', '6', 'Aravind', 'aravind.0216@gmail.com', '0', '2020-07-21 03:33:02', '2020-07-21 03:33:02'),
(2, '2020-07-21', '2020-08-04', '7', 'Aravind', 'aravind.0216@gmail.com', '1', '2020-07-21 03:35:31', '2020-07-21 06:40:24');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_06_10_114607_create_blogs_table', 1),
(5, '2020_06_10_114633_create_site_infos_table', 2),
(6, '2020_06_10_114641_create_sliders_table', 2),
(7, '2020_06_22_133335_create_admins_table', 3),
(8, '2020_06_23_063451_create_brands_table', 4),
(10, '2020_06_23_100501_create_vehicles_table', 5),
(11, '2020_06_23_100508_create_vehicle_images_table', 5),
(12, '2020_07_21_085117_create_member_passwords_table', 6),
(13, '2020_07_24_080937_create_vehicle_types_table', 7),
(14, '2020_07_24_095223_create_push_notifications_table', 8),
(15, '2020_07_25_063121_create_damages_table', 9),
(18, '2020_07_25_064214_create_cars_table', 10),
(19, '2020_07_27_074835_create_banks_table', 10),
(20, '2020_07_27_075651_create_deposits_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `push_notifications`
--

CREATE TABLE `push_notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `site_infos`
--

CREATE TABLE `site_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_iframe` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_plus_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `how_it_works` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_fees` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_and_conditions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `site_infos`
--

INSERT INTO `site_infos` (`id`, `mobile_1`, `mobile_2`, `email_1`, `email_2`, `city`, `state`, `address`, `map_iframe`, `facebook_url`, `twitter_url`, `instagram_url`, `youtube_url`, `linkedin_url`, `google_plus_url`, `about_title`, `about_info`, `how_it_works`, `services`, `member_fees`, `terms_and_conditions`, `logo`, `created_at`, `updated_at`) VALUES
(1, '+1-202-555-0137', '+1-202-555-0137', 'dummymail@mail.com', 'yourmail@mail.com', 'Orlando , US', NULL, '514 S. Magnolia St.', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14523.868361362094!2d54.3596453!3d24.4865971!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x27f86f27f04b128!2sLRB%20INFO%20TECH%20(Best%20Website%20Design%20%7C%20Web%20Development%20%7C%20Digital%20Marketing%20%7C%20Ecommerce%20%7C%20SEO%20%7C%20IT%20%7C%20Company%20in%20abu%20dhabi%20%7C%20UAE%20)!5e0!3m2!1sen!2sin!4v1591617863833!5m2!1sen!2sin\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0;\" allowfullscreen=\"\" aria-hidden=\"false\" tabindex=\"0\"></iframe>', NULL, NULL, NULL, NULL, NULL, NULL, 'ABOUT US', '&lt;div class=&quot;col-md-12&quot;&gt;\r\n&lt;div class=&quot;row&quot;&gt;\r\n&lt;p&gt;Established in 2006, we are UAE&#39;s leading car auctioneers with around 5 outlets located all around the UAE. We have consistently delivered superior customer service by bridging the gap between a buyer and a seller. With the abundance of our seller databases, we have always provided the buyer with a wide variety of vehicles to choose from. Honesty and integrity are two of our core principals that guide us in providing a 100% satisfaction to both the buyer and the seller.&lt;/p&gt;\r\n&lt;p&gt;From Shipping services for the seller, to Live online and physical auctions for the buyer, we can offer the service that best suits your needs. New York Car Auto Auctions has got you covered if you want to ship your used car from USA or Canada.&lt;/p&gt;\r\n&lt;p&gt;With Live Online and Physical bidding, buyers can now bid for their chosen car at the comfort of their home or visit us anytime during the auction. By choosing New York Car Auto Auction in UAE, buyers can reduce the cost of selling the car significantly and the buyers can source good quality finds at the touch of their fingertips.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', '&lt;p&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;&lt;strong&gt;Seller:&lt;/strong&gt;&lt;/span&gt;&lt;/p&gt;\r\n&lt;p&gt;If you are a seller, please read the following carefully to understand the process involved in selling your car through New York Car Auction in UAE.&lt;/p&gt;\r\n&lt;ol&gt;\r\n&lt;li&gt;Register on our website or visit our office to complete the registration form.&lt;/li&gt;\r\n&lt;li&gt;Read the Terms and Conditions carefully and then sign them.&lt;/li&gt;\r\n&lt;li&gt;Submit pictures of the vehicle from all sides and angles, including the interior.&lt;/li&gt;\r\n&lt;li&gt;Provide details on the usage and/or the extent of the damage.&lt;/li&gt;\r\n&lt;li&gt;Submit the paperwork related to the ownership of the car like the registration, etc.&lt;/li&gt;\r\n&lt;li&gt;Provide us with your estimated sale value.&lt;/li&gt;\r\n&lt;/ol&gt;\r\n&lt;p&gt;After all the documents have been submitted, we will review your application and choose to accept or decline the same. The decision will be entirely dependent on the discretion of the company and will be final.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;&lt;span style=&quot;font-size: 14px;&quot;&gt;Buyer:&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Interested bidders must read the following process carefully:&lt;/p&gt;\r\n&lt;ol&gt;\r\n&lt;li&gt;Create a log-in using a valid Email and Phone number.&lt;/li&gt;\r\n&lt;li&gt;Read the Terms and Conditions carefully and accept them.&lt;/li&gt;\r\n&lt;li&gt;Choose the right plan based on the car value you are interested in.&lt;/li&gt;\r\n&lt;li&gt;Make the deposit. (The deposit will usually be around 10% of the Bid Limit Value. Please read the Terms and Conditions for more information.)&lt;/li&gt;\r\n&lt;li&gt;Start bidding online in the comfort of your home using our Live Auction Platform. All the information about the car will be made available.&lt;/li&gt;\r\n&lt;li&gt;Visit our store anytime to bid at one of the Live Physical Auctions.&lt;/li&gt;\r\n&lt;li&gt;Once the car has been sold to the highest bidder, the Deposit will be utilized immediately against the payment. The remaining amount must be cleared within 48 hours.&lt;/li&gt;\r\n&lt;/ol&gt;', '&lt;p&gt;&lt;strong&gt;We are providing the following services:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;ol&gt;\r\n&lt;li&gt;Sell cars through our Online Platform&lt;/li&gt;\r\n&lt;li&gt;Buy Car online from the USA and Canada&lt;/li&gt;\r\n&lt;li&gt;Shipping and Customs Clearance&lt;/li&gt;\r\n&lt;li&gt;Storage Facilities and Auctioning (Online and Physical)&lt;/li&gt;\r\n&lt;/ol&gt;', '&lt;p&gt;We are&amp;nbsp; Auctioning Cars every day From&amp;nbsp;&lt;strong&gt;Saturday&lt;/strong&gt;&amp;nbsp;to&lt;strong&gt;&amp;nbsp;Thursday at 6:00 PM&amp;nbsp;&lt;/strong&gt;and&amp;nbsp;&lt;strong&gt;Special Auction on Friday at 4:00 PM&lt;/strong&gt;&amp;nbsp;through&amp;nbsp;Live&amp;nbsp;&lt;strong&gt;Online&amp;nbsp;&lt;/strong&gt;and&amp;nbsp;&lt;strong&gt;In-House&lt;/strong&gt;&lt;strong&gt;&amp;nbsp;Auction&lt;/strong&gt;.&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;Through&amp;nbsp;Online Bid on our Live Auction along other Bidders, you can win a Bid on your desire Car at Home/Office Comfort.&lt;/p&gt;\r\n&lt;p&gt;In order to get an Online Auction Facility, we have a&amp;nbsp;&lt;strong&gt;Deposit Fee&lt;/strong&gt;&amp;nbsp;for an online Bidder to secure the Bid on the live auction that is&amp;nbsp;&lt;strong&gt;Refundable&amp;nbsp;&lt;/strong&gt;at any time. After paying that Deposit you will get the&amp;nbsp;&lt;strong&gt;User ID&lt;/strong&gt;&amp;nbsp;and&amp;nbsp;&lt;strong&gt;Pass&lt;/strong&gt;&amp;nbsp;with Approved Account Status&amp;nbsp;for Live Online Auction.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Deposit Fee:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;3000 AED&lt;/strong&gt;&amp;nbsp;for 70,000 AED Limit Car&lt;/p&gt;\r\n&lt;p&gt;To bid&lt;strong&gt;&amp;nbsp;&lt;/strong&gt;up-to 70,000 AED worth a Car you have to Deposit 3,000 AED Fee (Deposit is completely refundable anytime or can be adjusted with the purchased car).&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;You can pay this Fee by visiting our Auction House (2nd Industrial Area, Sharjah) or can Send us through Remittance (We will provide the detail on demand).&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;For In-house Auction, please visit our Auction House every Sunday,&amp;nbsp;Tuesday, and Thursday&amp;nbsp;Live Auction and place your Bid for&amp;nbsp;Free (&lt;/strong&gt;No&amp;nbsp;&lt;strong&gt;Registration&lt;/strong&gt;&amp;nbsp;and&amp;nbsp;&lt;strong&gt;Fee&lt;/strong&gt;&amp;nbsp;Required for In-house Bidder&lt;strong&gt;).&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;br /&gt;If you are not registered Member then You can register yourself on our website and participate Online in a Live Auction.&lt;/p&gt;\r\n&lt;p&gt;&lt;br /&gt;For registration, you can follow&amp;nbsp;the link.&amp;nbsp;&lt;br /&gt;&lt;br /&gt;We will also send you the detail for our auction list through Whatsapp before the auction so you can better make your mind for your desire Car.&lt;/p&gt;\r\n&lt;p&gt;Kindly don&#39;t hesitate to contact us for any query @&lt;/p&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;p&gt;For regular update, Kindly do like our&amp;nbsp;&lt;strong&gt;Facebook&amp;nbsp;Page&lt;/strong&gt;&amp;nbsp;(&amp;nbsp;&amp;nbsp;) And follows on&amp;nbsp;&lt;strong&gt;Instagram&lt;/strong&gt;&amp;nbsp;(&amp;nbsp;&amp;nbsp;).&lt;/p&gt;', '&lt;p&gt;&lt;strong&gt;English Language:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;Any user of our services online and or offline is liable to have read and understood these Terms and Conditions. In this document, terms like &amp;ldquo;We&amp;rdquo;, &amp;ldquo;Us&amp;rdquo;, &amp;ldquo;Our&amp;rdquo;, are invariably a reference to New York Car Auction Co. LLC. By continuing the use of the Website, the user is in acceptance of our Terms and Conditions.&lt;/p&gt;\r\n&lt;p&gt;If you don&amp;rsquo;t accept or agree to our Terms and Conditions, please stop using our services immediately and contact us for any further clarification. New York Car Auction Co. LLC reserves the right to change, in any way, shape or form, the Terms and Conditions without any prior notice to you. We will not be held liable in case of any issues that may arise while the use of our services.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Buyer Terms and Conditions:&lt;/strong&gt;&lt;br /&gt;By signing up, you are accepting the terms and conditions set forth. New York Car Auction Co. LLC shall not be held liable in the case of disputes arising after the bidding has been won. We relinquish all liability related to the transaction. The used cars / vehicles that are sold will be sold &amp;lsquo;as is&amp;rsquo; and the buyer is liable to have checked and examined the car / vehicle before bidding. We are not responsible to verify the accuracy of the information provided by the seller of the Car / vehicle.&lt;/p&gt;\r\n&lt;p&gt;Any issues resulting from faulty information about the car / vehicle are not the responsibility of New York Car Auction Co. LLC. After the bidding process is complete, and the highest bidder has been sold the car, the deposit will be used as the basis for the payment. The remaining amount mustbe cleared within 48 hours of the bidding. Failure to do so will result in the revoking of the bid with the deposit being non-refundable.&lt;/p&gt;\r\n&lt;p&gt;If the buyer has made a bid and decides that they don&amp;rsquo;t want the car / vehicle, the deposit will be charged and will be non-refundable. In the case of the buyer making no bids whatsoever, the deposit can be reclaimed at the time of deactivating the account. However, as long as the account remains active, the deposit cannot be withdrawn.&lt;/p&gt;\r\n&lt;p&gt;&lt;br /&gt;&lt;strong&gt;Seller Terms and Conditions:&lt;/strong&gt;&lt;br /&gt;New York Car Auction Co. LLC hereby renounces all the obligations and liabilities with regards to the sale of your car / vehicle. Our commission will be charged on the Bid Limit Value and it will be a fixed percentage charge for our services. New York Car Auction Co. LLC will not be responsible for guaranteeing the safety and security of the car / vehicle if the shipping services are availed.&lt;/p&gt;\r\n&lt;p&gt;Any issues resulting from damage during the shipping must be taken up with the Shipping Company; we will not be held liable for the same. All the fees and payments must be cleared in a timely manner.&lt;/p&gt;\r\n&lt;p&gt;Failure to do so will result in the agreement becoming void. If the car / vehicle has already been shipped to the UAE and the Seller wishes to withdraw the car from the auction, they will be responsible for arranging for the shipping and removal of the car / vehicle from our storage facility within 3 business days.&lt;/p&gt;\r\n&lt;p&gt;Once the bidding process has begun for the car, it cannot be withdrawn. The Seller is responsible for providing us with the accurate documentation that we request before we accept the car for the auction. We may choose to accept or reject any car / vehicle. The decision will be final and it will depend on the sole discretion of New York Car Auction Co. LLC&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Payment &amp;amp; Privacy Terms:&lt;/strong&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Privacy Terms:&lt;/strong&gt;&amp;nbsp;The website will use cookies to enhance the user experience. All the information that is provided to us by you is done so voluntarily. New York Car Auction Co. LLC, or any persons associated with it, will never sell or distribute your private information including your E-mail, Contact Number and/or your payment information.&lt;/p&gt;\r\n&lt;p&gt;However, New York Car Auction Co. LLC will not be held responsible for the leak of the said information. The private information will only be used to contact you and to make the payment or the deposit.&lt;/p&gt;\r\n&lt;p&gt;&lt;strong&gt;Payment Terms:&lt;/strong&gt;&amp;nbsp;We do not&amp;nbsp; accept Credit and Debit Cards as of now, payments can be made via Direct Bank Transfer and cash. Once the payment has been made, you will receive a notification on your email and the mobile number provided.&lt;/p&gt;\r\n&lt;p&gt;In the event of New York Car Auction Co. LLC paying the Seller the sale amount of the car, the amount will be sent to the Seller using their preferred method after the deduction of our commission. New York Car Auction Co. LLC will not be held responsible for any issues relating to the amount being paid. Any issues arising out of the misunderstanding of these Terms and Conditions cannot be used against New York Car Auction Co. LLC at any given moment.&lt;/p&gt;\r\n&lt;p&gt;The Website contains hypertext links to websites that are not operated by us or by our associated companies. We do not control such websites and are not responsible for their content. Our inclusion of hypertext links to such websites does not imply any endorsement of the material contained on the websites or of the owners.&lt;/p&gt;\r\n&lt;p&gt;To gain access to certain services on the Website you will need to register (free of charge). As part of the registration process, you will select a username and password. You agree that the information supplied with your registration will be truthful, accurate and complete.&lt;/p&gt;\r\n&lt;p&gt;You also agree that you will not attempt to register in the name of any other individual nor will you adopt any username with we deem to be offensive. All personal information supplied by you as part of the registration process will be protected.&lt;/p&gt;\r\n&lt;p&gt;Our website (www.New York Carautoauction.com) uses &#39;cookie&#39; The cookies we use do not reveal any personal information about you. Cookies help us improve your experience of the Site and also help us understand what content you are interested.&lt;/p&gt;\r\n&lt;p&gt;You are always free to decline our cookies if your browser permits, although doing so may interfere with your use of the Site. Except as expressly permitted by these terms and conditions, you may not copy, reproduce, redistribute, download, republish, transmit, display, adapt, alter, create derivative works from or otherwise extract or re-utilize any of the contents of the Website. In particular, you must not cache any of the contents for access by third parties nor mirror or frame any of the content of the Website nor incorporate it into another website without our express written permission.&lt;/p&gt;\r\n&lt;p&gt;We make no warranty that the Website (or websites which are linked to the Website) is free from computer viruses or any other malicious or impairing computer programs. It is your responsibility to ensure that you use appropriate virus checking software. We are not liable for any failure to perform any of our obligations under these terms and conditions caused by matters beyond our reasonable control.&lt;/p&gt;\r\n&lt;p&gt;If you do not agree to obey these terms and conditions, you must stop using the platforms we are providing. We also keep updating our Terms and Conditions as we update and improve our services and introduce new features and or functions or services with in our company (online and or offline). It is your sole responsibility to keep your self updated with the terms and conditions statement and privacy policies. If you have any questions, you can get in touch with us using the following information for correspondence.&lt;/p&gt;', '994420274.png', NULL, '2020-06-15 00:27:42');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `url`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Accelerate Your Dreams', 'Buy your car on New York car Auction', NULL, '537221141.jpg', '2020-06-13 11:43:10', '2020-06-13 11:43:10'),
(2, 'We\'re Your One Stop <br /> Destination for That !', NULL, NULL, '430844800.jpg', '2020-06-13 11:43:45', '2020-06-13 11:43:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `busisness_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_extension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `most_intrested` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buy_vehicles_for` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `role_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `busisness_type`, `company_name`, `address`, `country`, `state`, `city`, `postal_code`, `phone_number`, `phone_extension`, `most_intrested`, `buy_vehicles_for`, `wallet`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$e5D4Q5L954x3DeH0.CHqtu0AVXdOaYCtoHkTYBqgjRkxgn.Dm1AI2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2', NULL, '0', '0', NULL, '2020-06-10 06:30:45', '2020-07-27 01:57:51'),
(7, 'Aravind', 'aravind.0216@gmail.com', NULL, '$2y$10$/hju5IPeRAYMFujMhU0kiuh4v6lPxH4olluxRMz9W3ewusgzjKkSe', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', '0', NULL, '2020-07-21 03:35:31', '2020-07-21 06:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lot_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `car_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vehicle_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `document_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exterior_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `interior_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `odometer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlights` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primary_damage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secondary_damage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cylinders` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fuel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keys` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_style` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_enable_future_vehicles` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_visible_website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drive` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `lot_number`, `car_id`, `brand_id`, `model`, `vehicle_type`, `price`, `year`, `document_type`, `exterior_color`, `interior_color`, `odometer`, `engine_type`, `highlights`, `primary_damage`, `transmission`, `secondary_damage`, `cylinders`, `fuel`, `vin`, `keys`, `body_style`, `description`, `image`, `is_enable_future_vehicles`, `is_visible_website`, `drive`, `location`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, '1', '1', NULL, '1', NULL, '2012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '929202290.png', NULL, NULL, NULL, NULL, '0', '2020-06-23 07:43:32', '2020-07-25 04:17:21'),
(14, NULL, '2', '1', NULL, '1', NULL, '1982', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1368160908.jpg', NULL, NULL, NULL, NULL, '0', '2020-07-24 03:20:10', '2020-07-25 04:17:58');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_images`
--

CREATE TABLE `vehicle_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `vehicle_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_types`
--

CREATE TABLE `vehicle_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vehicle_types`
--

INSERT INTO `vehicle_types` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'AutoMobile', '0', '2020-07-24 02:48:19', '2020-07-24 02:48:19'),
(2, 'Boat', '0', '2020-07-24 02:48:29', '2020-07-24 02:48:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `damages`
--
ALTER TABLE `damages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member_passwords`
--
ALTER TABLE `member_passwords`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `push_notifications`
--
ALTER TABLE `push_notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_infos`
--
ALTER TABLE `site_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `damages`
--
ALTER TABLE `damages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member_passwords`
--
ALTER TABLE `member_passwords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `push_notifications`
--
ALTER TABLE `push_notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `site_infos`
--
ALTER TABLE `site_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `vehicle_images`
--
ALTER TABLE `vehicle_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vehicle_types`
--
ALTER TABLE `vehicle_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
