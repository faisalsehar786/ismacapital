-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 15, 2021 at 07:36 AM
-- Server version: 5.6.51-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitcoinismcapitals`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(500) DEFAULT NULL,
  `des` text,
  `image` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `commission_values`
--

CREATE TABLE `commission_values` (
  `id` int(10) UNSIGNED NOT NULL,
  `transaction_fee_sell` double NOT NULL,
  `transaction_fee_buy` double DEFAULT NULL,
  `cryptocurrency_additional_sell_price` double NOT NULL,
  `cryptocurrency_decremental_sell_price` double DEFAULT NULL,
  `cryptocurrency_additional_buy_price` double DEFAULT NULL,
  `cryptocurrency_decremental_buy_price` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `commission_values`
--

INSERT INTO `commission_values` (`id`, `transaction_fee_sell`, `transaction_fee_buy`, `cryptocurrency_additional_sell_price`, `cryptocurrency_decremental_sell_price`, `cryptocurrency_additional_buy_price`, `cryptocurrency_decremental_buy_price`, `created_at`, `updated_at`) VALUES
(1, 0.3, 0.3, 0, 0, 0, 0, NULL, '2021-06-06 21:25:36');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metaTags`
--

CREATE TABLE `metaTags` (
  `id` int(10) NOT NULL,
  `home` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `buy` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `sell` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `blog` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `support` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `legal` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `contact` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `myaccount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `orderby` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ordersell` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `metaTags`
--

INSERT INTO `metaTags` (`id`, `home`, `buy`, `sell`, `blog`, `support`, `legal`, `contact`, `myaccount`, `orderby`, `ordersell`, `created_at`, `updated_at`) VALUES
(1, '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n    <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n       <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n        <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n       <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n       <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n     <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n        <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n    <    <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n    <    <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', '<!-- start: Meta -->\r\n    <meta charset=\"utf-8\">\r\n       <title>ismcapitals.com | Buy Bitcoin best rate in 2021</title>\r\n    <meta name=\"description\" content=\"Buy Bitcoin in best rate in 2021. ISMCAPITAL Provide Best deal on Cryptocurrency. Ismcapital is leading company to Sell Bitcoin in Best rate \">\r\n    <meta name=\"author\" content=\"ismcapital\">\r\n    <meta name=\"keyword\" content=\"Buy Cheapest Bitcoin in 2021, Bitcoin Price, Bitcoin deal, Buy Bitcoin 2021, ismcapital, Best Deal on Cryptocurrency, Sell bitcoin in best rate, Best rate of bitcoin, Buy Bitcoin ismcapital, trade in Cryptocurrency, trade with ismcapital\">\r\n    <!-- end: Meta -->\r\n    \r\n    <!-- start: Mobile Specific -->\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">', NULL, '2021-03-27 22:35:12');

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
(29, '2014_10_12_000000_create_users_table', 1),
(30, '2014_10_12_100000_create_password_resets_table', 1),
(31, '2018_04_16_194401_create_admin_users_table', 1),
(32, '2019_08_19_000000_create_failed_jobs_table', 1),
(33, '2020_12_14_080846_create_tbl_bitcoin_values_table', 1),
(34, '2020_12_21_064634_create_commission_values_tbale', 1),
(35, '2020_12_22_063239_create_recived_order_tbl_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('faisalsehar786@gmail.com', '$2y$10$aDwEWb9OMN.DUiUU3j/.h.GfX4k2ZUavFIu8O2.hDLN71n4/yEgcq', '2021-02-24 14:57:55'),
('Info@ismcapitals.com', '$2y$10$KayoSPQDX7ZLLCqoc4sE1.iFn2LxOXUw7RJUxwntL0ZxTfXLeD.Qa', '2021-06-06 21:20:01');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) NOT NULL,
  `rating` varchar(100) DEFAULT NULL,
  `review` text,
  `user_id` int(10) DEFAULT NULL,
  `order_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `del` enum('yes','no') NOT NULL DEFAULT 'no',
  `view_admin` enum('yes','no') NOT NULL DEFAULT 'no'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rating`, `review`, `user_id`, `order_id`, `created_at`, `updated_at`, `del`, `view_admin`) VALUES
(14, '5', 'Awesomely good and reliable platform. Trusted and hassle free', 29, NULL, '2021-04-07 13:29:52', '2021-06-06 21:23:48', 'yes', 'yes'),
(15, '5', 'Amazing and easy to use website to buy and sell your bitcoin. Excellent platform', 27, 125, '2021-04-07 14:03:35', '2021-06-06 21:23:56', 'yes', 'yes'),
(16, '5', 'its provide me Good Services to buy and Sell The coins..', 2, 126, '2021-04-07 15:24:08', '2021-04-25 19:54:28', 'yes', 'yes'),
(18, '5', 'Absolutely the best exchange platform! I had a wonderful experience trading with ismcapitals.com. User friendly, highly recommend', 28, 128, '2021-04-07 16:06:10', '2021-06-06 21:24:50', 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `recived_order_buy_tbl`
--

CREATE TABLE `recived_order_buy_tbl` (
  `PersonID` int(11) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `recived_order_tbl`
--

CREATE TABLE `recived_order_tbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(200) DEFAULT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankwire_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankwire_swift_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankwire_bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankwire_iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bankwire_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `westrenunion_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `westrenunion_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `westrenunion_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `westrenunion_phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perfectmoney_pm_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payza_payza_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payoneer_payoneer_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `webmoney_webmoney_purse` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `okpay_okpay_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skrill_skrill_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nettler_nettler_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dash_dash_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moneygram_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moneygram_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moneygram_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `moneygram_phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creditcard_card_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creditcard_expiry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creditcard_cvv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instaforex_instaforex_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `solidtrustpay_std_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usbank_us_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usbank_expiry` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usbank_cvv` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advcash_wallet_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alipaychina_email_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paysafecard_email_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `onecard_email_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sofort_email_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qiviwallet_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entromoney_wallet_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilewallet_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilewallet_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordremit_wallet_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordremit_swift_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordremit_bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordremit_iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wordremit_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilepay_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobilepay_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capitalone_email_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applepay_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applepay_phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chasequickpay_email_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transferwise_email_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `venmomobilepayment_full_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `xoommoneytransfer_email_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swifttransfer_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swifttransfer_swift_card` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swifttransfer_bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swifttransfer_iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swifttransfer_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directbankdeposit_holder_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directbankdeposit_bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directbankdeposit_iban` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `directbankdeposit_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `buyvirtualcard_email_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reciver_wallet_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transection_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recived_total_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `recived_bitcoin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transection_url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commission_fee` double DEFAULT NULL,
  `bitcoin_current_val` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coinType` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `convertedCurrency` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('on','off') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ordertype` enum('sell','buy') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sell',
  `order_email` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bTransfer_bank_name` text COLLATE utf8mb4_unicode_ci,
  `bTransfer_account` text COLLATE utf8mb4_unicode_ci,
  `bTransfer_ac_name` text COLLATE utf8mb4_unicode_ci,
  `bTransfer_ref` text COLLATE utf8mb4_unicode_ci,
  `cashDeposit_bank_name` text COLLATE utf8mb4_unicode_ci,
  `cashDeposit_account` text COLLATE utf8mb4_unicode_ci,
  `cashDeposit_ac_name` text COLLATE utf8mb4_unicode_ci,
  `cashDeposit_ref` text COLLATE utf8mb4_unicode_ci,
  `view_admin` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `view_user` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recived_order_tbl`
--

INSERT INTO `recived_order_tbl` (`id`, `user_id`, `order_number`, `payment_method`, `paypal_email`, `bankwire_holder_name`, `bankwire_swift_card`, `bankwire_bank_name`, `bankwire_iban`, `bankwire_country`, `westrenunion_full_name`, `westrenunion_address`, `westrenunion_country`, `westrenunion_phone_no`, `perfectmoney_pm_id`, `payza_payza_email`, `payoneer_payoneer_email`, `webmoney_webmoney_purse`, `okpay_okpay_email`, `skrill_skrill_email`, `nettler_nettler_id`, `dash_dash_id`, `moneygram_full_name`, `moneygram_address`, `moneygram_country`, `moneygram_phone_no`, `creditcard_card_number`, `creditcard_expiry`, `creditcard_cvv`, `instaforex_instaforex_id`, `solidtrustpay_std_id`, `usbank_us_id`, `usbank_expiry`, `usbank_cvv`, `advcash_wallet_id`, `alipaychina_email_id`, `paysafecard_email_id`, `onecard_email_id`, `sofort_email_id`, `qiviwallet_id`, `entromoney_wallet_address`, `mobilewallet_full_name`, `mobilewallet_phone_number`, `wordremit_wallet_address`, `wordremit_swift_card`, `wordremit_bank_name`, `wordremit_iban`, `wordremit_country`, `mobilepay_full_name`, `mobilepay_phone_number`, `capitalone_email_id`, `applepay_full_name`, `applepay_phone_number`, `chasequickpay_email_id`, `transferwise_email_address`, `venmomobilepayment_full_name`, `xoommoneytransfer_email_address`, `swifttransfer_holder_name`, `swifttransfer_swift_card`, `swifttransfer_bank_name`, `swifttransfer_iban`, `swifttransfer_country`, `directbankdeposit_holder_name`, `directbankdeposit_bank_name`, `directbankdeposit_iban`, `directbankdeposit_country`, `buyvirtualcard_email_address`, `reciver_wallet_address`, `transection_id`, `recived_total_amount`, `recived_bitcoin`, `transection_url`, `order_date`, `commission_fee`, `bitcoin_current_val`, `coinType`, `convertedCurrency`, `status`, `created_at`, `updated_at`, `ordertype`, `order_email`, `wallet_address`, `invoice`, `bTransfer_bank_name`, `bTransfer_account`, `bTransfer_ac_name`, `bTransfer_ref`, `cashDeposit_bank_name`, `cashDeposit_account`, `cashDeposit_ac_name`, `cashDeposit_ref`, `view_admin`, `view_user`) VALUES
(135, 39, '16195171826087defee0253', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '54766.72035', '1', '14nGXPBngxCmBaTekTr2gD6vyCqEi2bEEo', '27-04-2121', 0.5, '55041.93', 'BTC', 'USD', 'off', '2021-04-27 16:53:18', '2021-04-27 18:08:50', 'sell', NULL, NULL, '1619517198.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'no'),
(136, 39, '16195177176087e1152825f', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '108901.2177', '2', 'llll', '27-04-2121', 0.5, '54924.23', 'BTC', 'USD', 'off', '2021-04-27 17:02:22', '2021-04-27 18:08:50', 'sell', NULL, NULL, '1619517742.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'yes'),
(137, 39, '16195181276087e2af30d47', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '54796.07285', '1', '14nGXPBngxCmBaTekTr2gD6vyCqEi2bEEo', '27-04-2121', 0.5, '55071.43', 'BTC', 'USD', 'off', '2021-04-27 17:09:01', '2021-04-27 18:08:50', 'sell', NULL, NULL, '1619518141.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'no'),
(138, 39, '16195185026087e426ccdd3', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '54675.9266', '1', '14nGXPBngxCmBaTekTr2gD6vyCqEi2bEEo', '27-04-2121', 0.5, '54950.68', 'BTC', 'USD', 'off', '2021-04-27 17:15:15', '2021-04-27 19:22:12', 'sell', NULL, NULL, '1619518515.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'no'),
(139, 39, '16195188936087e5ad5df0a', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '54671.55855', '1', '14nGXPBngxCmBaTekTr2gD6vyCqEi2bEEo', '27-04-2121', 0.5, '54946.29', 'BTC', 'USD', 'off', '2021-04-27 17:21:46', '2021-04-27 18:08:50', 'sell', NULL, NULL, '1619518906.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'no'),
(140, 39, '16195207396087ece3304c5', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'islamabd', NULL, '0.05071666814767266', '3000', '14nGXPBngxCmBaTekTr2gD6vyCqEi2bEEo', '27-04-2121', 0.5, '58856.39', 'BTC', 'USD', 'off', '2021-04-27 17:52:38', '2021-05-30 19:04:09', 'buy', 'faisalsehar786@gmail.com', NULL, '1619520758.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'yes'),
(141, 39, '16195214006087ef78093f6', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'islamabd', NULL, '0.000020095602557049293', '1', '234', '27-04-2121', 0.5, '49513.32', 'BTC', 'EUR', 'on', '2021-04-27 18:03:38', '2021-04-28 19:19:47', 'buy', 'faisalsehar786@gmail.com', NULL, '1619521418.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'yes'),
(142, 18, '1619547344608854d02f239', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '11299.9563', '0.2', NULL, '27-04-2121', 0.5, '55183.7', 'BTC', 'USD', 'off', '2021-04-28 01:16:51', '2021-04-29 03:13:25', 'sell', NULL, NULL, '1619547411.jpg', 'FNB', '6876569876', 'ism capital', '3876523', NULL, NULL, NULL, NULL, 'yes', 'yes'),
(143, 18, '16195476966088563049a73', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '5852.356175', '0.1', NULL, '27-04-2121', 0.5, '55217.65', 'BTC', 'USD', 'on', '2021-04-28 01:22:14', '2021-04-28 19:16:35', 'sell', NULL, NULL, '1619547734.jpg', 'FNB', '6876569876', 'ism capital', '3876523', NULL, NULL, NULL, NULL, 'yes', 'yes'),
(144, 39, '1619620540608972bc6d8c4', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '54833.10675', '1', '14nGXPBngxCmBaTekTr2gD6vyCqEi2bEEo', '28-04-2121', 0.5, '55108.65', 'BTC', 'USD', 'on', '2021-04-28 21:35:58', '2021-04-28 22:01:02', 'sell', NULL, NULL, '1619620558.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'yes'),
(145, 39, '16196211486089751c8614c', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'islamabd', NULL, '0.05091167719438284', '3000', '234', '28-04-2121', 0.5, '58630.95', 'BTC', 'USD', 'on', '2021-04-28 21:46:06', '2021-05-30 19:09:02', 'buy', 'faisalsehar786@gmail.com', NULL, '1619621166.jpg', 'bpo', '8939483', '9054xnc,zn', 'lfjlsdf', NULL, NULL, NULL, NULL, 'yes', 'yes'),
(146, 18, '1619729614608b1cced16a7', 'bTransfer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bc1qs3ry3zckuar7z26ps0xe9fdk8xj8wp29cm3u32', NULL, '53017.90835', '1', NULL, '29-04-2121', 0.5, '53284.33', 'BTC', 'USD', 'off', '2021-04-30 03:54:41', '2021-05-30 19:08:04', 'sell', NULL, NULL, '1619729680.jpg', 'FNB', '87654456', 'ISM Cap', '8765333', NULL, NULL, NULL, NULL, 'yes', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bitcoin_values`
--

CREATE TABLE `tbl_bitcoin_values` (
  `tbl_id` int(10) UNSIGNED NOT NULL,
  `id` int(11) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_market_pairs` double DEFAULT NULL,
  `date_added` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_supply` double DEFAULT NULL,
  `circulating_supply` double DEFAULT NULL,
  `total_supply` double DEFAULT NULL,
  `platform` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmc_rank` double DEFAULT NULL,
  `last_updated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double DEFAULT NULL,
  `volume_24h` double DEFAULT NULL,
  `percent_change_1h` double DEFAULT NULL,
  `percent_change_24h` double DEFAULT NULL,
  `percent_change_7d` double DEFAULT NULL,
  `market_cap` double DEFAULT NULL,
  `img_url` text COLLATE utf8mb4_unicode_ci,
  `lasts_updated` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_bitcoin_values`
--

INSERT INTO `tbl_bitcoin_values` (`tbl_id`, `id`, `name`, `symbol`, `slug`, `num_market_pairs`, `date_added`, `max_supply`, `circulating_supply`, `total_supply`, `platform`, `cmc_rank`, `last_updated`, `price`, `volume_24h`, `percent_change_1h`, `percent_change_24h`, `percent_change_7d`, `market_cap`, `img_url`, `lasts_updated`, `created_at`, `updated_at`) VALUES
(427, 1182, 'Bitcoin', 'BTC', 'BTC', NULL, NULL, 20999999.9769, NULL, 18735631, NULL, NULL, '2021-06-15 14:35:59', 39924.62, 49136.77307333, -0.95522984931406, -1.5483867467702, NULL, 748012948135.22, '/media/37746251/btc.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(428, 7605, 'Ethereum', 'ETH', 'ETH', NULL, NULL, -1, NULL, 116301962.124, NULL, NULL, '2021-06-15 14:36:01', 2544.98, 349621.41460156, -1.6524071197261, -0.44594309140269, NULL, 295986167566.34, '/media/37746238/eth.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(429, 4614, 'Stellar', 'XLM', 'XLM', NULL, NULL, -1, NULL, 50001803117.545, NULL, NULL, '2021-06-15 14:35:55', 0.3326, 139608425.23711, -1.7139479905437, -2.5490770583065, NULL, 16630599716.895, '/media/37746346/xlm.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(430, 3808, 'Litecoin', 'LTC', 'LTC', NULL, NULL, 84000000, NULL, 67881208.233471, NULL, NULL, '2021-06-15 14:36:01', 173.14, 419926.71775264, -1.7589650476623, -0.90430402930404, NULL, 11752952393.543, '/media/37746243/ltc.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(431, 5031, 'XRP', 'XRP', 'XRP', NULL, NULL, 1215752192, NULL, 1206127787, NULL, NULL, '2021-06-15 14:36:01', 0.8627, 68011600.530894, -2.0549500454133, -2.8053177106805, NULL, 86261697025.807, '/media/37746347/xrp.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(432, 321992, 'Cardano', 'ADA', 'ADA', NULL, NULL, 2050327040, NULL, 32154791426.141, NULL, NULL, '2021-06-15 14:35:53', 1.549, 40126696.994592, -1.7755231452124, -1.6507936507937, NULL, 49807771919.093, '/media/37746235/ada.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(433, 202330, 'Bitcoin Cash', 'BCH', 'BCH', NULL, NULL, 20999999.9769, NULL, 18764312.396789, NULL, NULL, '2021-06-15 14:35:54', 617.78, 63354.68227432, -1.8181240265726, -1.1203943788213, NULL, 11592216912.489, '/media/37746245/bch.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(434, 171986, 'Tether', 'USDT', 'USDT', NULL, NULL, -1, NULL, 62774622898.343, NULL, NULL, '2021-06-15 14:36:00', 1, 303605020.01806, 0, 0, NULL, 62774622898.343, '/media/37746338/usdt.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(435, 166503, 'EOS', 'EOS', 'EOS', NULL, NULL, -1, NULL, 1030441063.468, NULL, NULL, '2021-06-15 14:35:45', 5.142, 3235940.9130275, -1.7013955266679, -0.48383975227404, NULL, 5298527948.3525, '/media/37746349/eos.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(436, 318169, 'Loopring', 'LRC', 'LRC', NULL, NULL, -1, NULL, 1373873440.4425, NULL, NULL, '2021-06-08 13:15:50', 0.3054, 26560899.916982, -0.22868343678536, -14.068655036578, NULL, 419580948.71113, '/media/36798698/lrc-logo.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(437, 309621, 'Chainlink', 'LINK', 'LINK', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-15 14:35:56', 24.91, 4914990.1222031, -3.0362008563643, 3.1043046357616, NULL, -859803776, '/media/37746242/link.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(438, 935731, 'Polkadot', 'DOT', 'DOT', NULL, NULL, -1, NULL, 1083176647.5173, NULL, NULL, '2021-06-15 14:35:57', 23.7, 2624453.7463275, -2.7891714520098, 5.4739652870494, NULL, 25671286546.16, '/media/37746348/dot.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(439, 932135, 'BUSD', 'BUSD', 'BUSD', NULL, NULL, -1, NULL, 9459638146.67, NULL, NULL, '2021-06-15 14:35:55', 1, 2125222.18, 0, 0, NULL, 9459638146.67, '/media/37746248/busd.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(440, 310829, 'TRON', 'TRX', 'TRX', NULL, NULL, -1, NULL, 2066496004, NULL, NULL, '2021-06-15 14:35:51', 0.0711, 70536648.366342, -1.8091423836487, -1.2225618227285, NULL, 7170487885.0332, '/media/37746879/trx.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(441, 936630, 'Uniswap Protocol Token', 'UNI', 'UNI', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-15 14:35:51', 23.47, 728743.68024319, -2.1267723102586, -1.3865546218487, NULL, 1995163520, '/media/37746885/uni.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(442, 5324, 'Ethereum Classic', 'ETC', 'ETC', NULL, NULL, 210700000, NULL, 127908679.04731, NULL, NULL, '2021-06-15 14:35:14', 57.71, 99455.23822966, -1.6530334014997, -2.3354205449315, NULL, 7381609867.8204, '/media/37746862/etc.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(443, 236131, 'VeChain', 'VET', 'VET', NULL, NULL, 813288546, NULL, 85695257, NULL, NULL, '2021-06-15 14:35:59', 0.1106, 151728467.7265, -1.4260249554367, -3.4061135371179, NULL, 9509945554.1762, '/media/12318129/ven.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(444, 4432, 'Dogecoin', 'DOGE', 'DOGE', NULL, NULL, -1, NULL, 129897486383.71, NULL, NULL, '2021-06-15 14:35:53', 0.3177, 185238826.18443, -1.8838789376158, -3.4052903618121, NULL, 41268431424.103, '/media/37746339/doge.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(445, 187440, 'OMG Network', 'OMG', 'OMG', NULL, NULL, -1, NULL, 140245398.24513, NULL, NULL, '2021-05-14 17:36:01', 10.81, 4451614.3543052, 3.2473734479465, 15.269780336959, NULL, 1516052755.0299, '/media/37071946/omg.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(446, 930992, 'Algorand', 'ALGO', 'ALGO', NULL, NULL, 1410065408, NULL, 5560095680.5601, NULL, NULL, '2021-06-15 14:35:54', 1.038, 6626735.8757498, -1.5180265654649, -3.0812324929972, NULL, 5771379316.4214, '/media/35650900/algo.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(447, 714811, 'Theta', 'THETA', 'THETA', NULL, NULL, 1000000000, NULL, 1000000000, NULL, NULL, '2021-06-15 14:36:00', 8.86326564, 2773172.0701906, -1.5318451703884, -3.5469631852735, NULL, 273331048, '/media/37746670/theta.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(448, 204788, 'Binance Coin', 'BNB', 'BNB', NULL, NULL, -1, NULL, 169433763.9, NULL, NULL, '2021-06-15 14:35:53', 364.78, 90100.10971007, -1.4001513677154, -2.1276595744681, NULL, 61806048395.442, '/media/37746880/bnb.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(449, 926591, 'Bitcoin SV', 'BSV', 'BSV', NULL, NULL, 20999999.9769, NULL, 18761057.894239, NULL, NULL, '2021-06-15 14:35:55', 169.41, 3888.81473438, -1.1437241057361, -2.7497129735936, NULL, 3178310817.863, '/media/35309257/bsv1.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(450, 925809, 'USD Coin', 'USDC', 'USDC', NULL, NULL, -1, NULL, 23121568017.7, NULL, NULL, '2021-06-15 14:35:31', 1, 26211274.314115, 0, 0, NULL, 23121568017.7, '/media/34835941/usdc.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(451, 716725, 'Zilliqa', 'ZIL', 'ZIL', NULL, NULL, -474836480, NULL, 14572291511.659, NULL, NULL, '2021-05-14 17:35:17', 0.2042, 24069733.186968, -0.96993210475267, 12.013165112452, NULL, 2975661926.6808, '/media/37746856/zil.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(452, 935926, 'yearn.finance', 'YFI', 'YFI', NULL, NULL, -1, NULL, 36666, NULL, NULL, '2021-06-08 13:15:57', 39165.848, 16.06601357, -0.33081360970386, -10.019020921543, NULL, 1436054982.768, '/media/37747048/yfi.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(453, 199107, 'Cosmos', 'ATOM', 'ATOM', NULL, NULL, -1, NULL, 268335553.96984, NULL, NULL, '2021-06-15 14:35:49', 12.8, 889823.86011162, -3.1770045385779, -0.62111801242236, NULL, 3434695090.814, '/media/37746867/atom.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(454, 166390, 'Tezos', 'XTZ', 'XTZ', NULL, NULL, -1, NULL, 842133795.04335, NULL, NULL, '2021-06-15 14:35:56', 3.245, 2566724.4072396, -1.8748110069549, -1.5771913861086, NULL, 2732724164.9157, '/media/37747535/xtz.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(455, 816635, 'Synthetix', 'SNX', 'SNX', NULL, NULL, -1, NULL, 227477432.04902, NULL, NULL, '2021-06-09 23:24:55', 10.89, 684832.19311709, 0.46125461254613, 4.4103547459252, NULL, 2477229235.0139, '/media/37747673/snx.png', NULL, '2021-01-06 14:27:03', '2021-06-10 06:25:03'),
(456, 930621, 'Reserve Rights', 'RSR', 'RSR', NULL, NULL, -1, NULL, 100000000000, NULL, NULL, '2021-06-15 14:35:16', 0.03083, 34914460, -2.1269841269841, -3.23289391086, NULL, 3083000000, '/media/37747018/rsr.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(457, 27368, 'NEO', 'NEO', 'NEO', NULL, NULL, 100000000, NULL, 100000000, NULL, NULL, '2021-06-15 14:35:30', 49.6, 28095.60163311, -1.7627252921371, -2.4965598584627, NULL, 665032704, '/media/37746892/neo.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(458, 5038, 'Monero', 'XMR', 'XMR', NULL, NULL, -1, NULL, 17932367.699615, NULL, NULL, '2021-06-15 14:35:53', 276.88, 44923.457019406, -1.086024578451, 3.9456395239704, NULL, 4965113968.6695, '/media/37746883/xmr.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(459, 936306, 'Sushi', 'SUSHI', 'SUSHI', NULL, NULL, -1, NULL, 223473007.8402, NULL, NULL, '2021-06-09 18:57:49', 10.13, 3507568.7234835, -2.1256038647343, 3.9507439712673, NULL, 2263781569.4212, '/media/37746894/sushi.png', NULL, '2021-01-06 14:27:03', '2021-06-10 01:58:03'),
(460, 936952, 'Aave', 'AAVE', 'AAVE', NULL, NULL, -1, NULL, 16000000, NULL, NULL, '2021-06-15 14:35:53', 312.55, 89807.54658303, -2.3403324584427, -4.6696760812542, NULL, 705832704, '/media/37747534/aave.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(461, 932096, 'Band Protocol', 'BAND', 'BAND', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-06-08 13:08:52', 6.899, 733929.92256479, -0.47605308713215, -15.937614231753, NULL, 689900000, '/media/37747672/band.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(462, 3807, 'Dash', 'DASH', 'DASH', NULL, NULL, 18900000, NULL, 10177177.103874, NULL, NULL, '2021-06-08 13:08:32', 169.05, 53722.50974262, -0.93759156167594, -12.309368191721, NULL, 1720451789.4098, '/media/37746893/dash.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(463, 5285, 'NEM', 'XEM', 'XEM', NULL, NULL, -1, NULL, 410065407, NULL, NULL, '2021-05-14 17:35:56', 0.3242461464, 45675952.899643, 0.14948825397013, 9.1950050944563, NULL, 2918215317.2758, '/media/37747011/xem.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(464, 127356, 'IOTA', 'MIOTA', 'MIOTA', NULL, NULL, 2779530283.2778, NULL, 2779530283.2778, NULL, NULL, '2021-06-15 14:33:36', 1.113, 1690346.2735439, -1.7652250661959, -0.53619302949062, NULL, 3093617205.2881, '/media/1383540/iota_logo.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(465, 938098, 'The Graph', 'GRT', 'GRT', NULL, NULL, -1, NULL, 10123512980.878, NULL, NULL, '2021-06-15 14:35:49', 0.7307, 35970003.138166, -0.88171459576776, 4.8350071736012, NULL, 7397250935.1278, '/media/37747239/grt.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(466, 24854, 'ZCash', 'ZEC', 'ZEC', NULL, NULL, 21000000, NULL, 11093576.204945, NULL, NULL, '2021-05-14 17:35:56', 311.38, 148102.12416116, -0.86912228200313, 8.9922643424691, NULL, 3454317758.6959, '/media/37746899/zec.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(467, 186277, '0x', 'ZRX', 'ZRX', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:15:50', 0.9001, 9854187.63551, -0.71696448268254, -15.404135338346, NULL, 900100000, '/media/1383799/zrx.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(468, 936373, 'Elrond', 'EGLD', 'EGLD', NULL, NULL, -1, NULL, 20397843, NULL, NULL, '2021-06-08 13:15:43', 86.75, 29080.35251121, 0.17321016166282, -13.084861236349, NULL, 1769512880.25, '/media/35651026/erd.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(469, 112392, 'QTUM', 'QTUM', 'QTUM', NULL, NULL, 107822402.25, NULL, 103466068, NULL, NULL, '2021-06-08 13:14:31', 9.105, 286212.92404285, -0.4265091863517, -17.302452316076, NULL, 942058549.14, '/media/37746863/qtum.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(470, 936137, 'Curve DAO Token', 'CRV', 'CRV', NULL, NULL, -1, NULL, 1524002644.2136, NULL, NULL, '2021-06-15 14:35:42', 2.21, 3568093.1769096, -2.5573192239859, -3.5355739851593, NULL, 3368045843.7121, '/media/37747537/crv.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(471, 20131, 'Waves', 'WAVES', 'WAVES', NULL, NULL, -1, NULL, 105101602, NULL, NULL, '2021-05-14 17:35:19', 33.13, 177345.87021361, -0.95665171898356, 9.4844679444812, NULL, 3482016074.26, '/media/37746257/waves.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(472, 936118, 'Serum', 'SRM', 'SRM', NULL, NULL, -1, NULL, 161000001, NULL, NULL, '2021-05-14 17:35:57', 8.998, 2113221, 0.022232103156946, 13.097033685269, NULL, 1448678008.998, '/media/37747019/srm.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(473, 324068, 'ICON Project', 'ICX', 'ICX', NULL, NULL, -1, NULL, 891693963.93452, NULL, NULL, '2021-06-08 13:15:29', 0.959, 2159124.0310337, -1.0728285537446, -18.728813559322, NULL, 855134511.41321, '/media/37747580/icx.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(474, 929418, 'Crypto.com Chain Token', 'CRO', 'CRO', NULL, NULL, -1, NULL, 39387819635.966, NULL, NULL, '2021-06-15 14:35:59', 0.1165798904, 76043728.246459, -1.2932666075075, -3.2058213133229, NULL, 4591827696.2559, '/media/34478435/mco.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(475, 808414, 'Ontology', 'ONT', 'ONT', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:15:45', 0.9395, 755715.20558488, -0.35002121340687, -14.590909090909, NULL, 939500000, '/media/36798656/ont.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(476, 213663, 'FileCoin', 'FIL', 'FIL', NULL, NULL, 2000000000, NULL, 79121668, NULL, NULL, '2021-06-15 14:35:52', 72.5, 342892.96392797, -1.7615176151761, -1.7348875033885, NULL, 1441353634, '/media/37747014/fil.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(477, 932932, 'Kusama', 'KSM', 'KSM', NULL, NULL, -1, NULL, 9651217.4512621, NULL, NULL, '2021-06-15 14:35:18', 395.03, 24231.93910978, -2.0748636588994, -5.5155588509651, NULL, 3812520429.7721, '/media/36639823/ksm.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(478, 928761, 'Wrapped Bitcoin', 'WBTC', 'WBTC', NULL, NULL, -1, NULL, 188960.83782947, NULL, NULL, '2021-06-15 14:36:01', 39905.2864, 250.58611652, -0.95759432481087, -1.6997725235009, NULL, 7540536351.969, '/media/35309588/wbtc.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(479, 771595, 'Huobi Token', 'HT', 'HT', NULL, NULL, -1, NULL, 276889282.25487, NULL, NULL, '2021-06-15 14:35:32', 14.13, 45797.5, -1.4644351464435, 0.56939501779359, NULL, 3912445558.2613, '/media/37747536/ht.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(480, 937212, 'NuCypher', 'NU', 'NU', NULL, NULL, -1, NULL, 3885390081.7482, NULL, NULL, '2021-06-08 13:15:18', 0.3116, 36005633.428427, -1.765447667087, -13.898867090356, NULL, 1210687549.4728, '/media/37459029/nu.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(481, 930246, 'Polygon', 'MATIC', 'MATIC', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-06-15 14:35:53', 1.655, 64942533.662125, -2.3598820058997, 6.0217809096733, NULL, -629869184, '/media/37746047/matic.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(482, 107672, 'Basic Attention Token', 'BAT', 'BAT', NULL, NULL, -1, NULL, 1500000000, NULL, NULL, '2021-06-08 13:07:32', 0.672, 2590847.2368899, -0.14858841010401, -15.054986727342, NULL, 1008000000, '/media/37746356/bat.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(483, 932121, 'Hedera Hashgraph', 'HBAR', 'HBAR', NULL, NULL, -1539607552, NULL, -12238263, NULL, NULL, '2021-06-08 13:15:53', 0.2084, 32033186.44673, 0.28873917228103, -9.1938997821351, NULL, 1787591914.9636, '/media/35651541/hbar.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(484, 935805, 'Avalanche', 'AVAX', 'AVAX', NULL, NULL, 720000000, NULL, 385922102.35045, NULL, NULL, '2021-06-15 14:35:59', 14.796064172, 410549.32655124, -1.9080924162368, -0.8528046966115, NULL, 5710128191.7704, '/media/37305719/avax.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(485, 178978, 'FunFair', 'FUN', 'FUN', NULL, NULL, -1, NULL, 10999873621.398, NULL, NULL, '2021-06-08 13:08:58', 0.02035026, 67142995.24, -0.29498686365265, -11.04808063006, NULL, 223850288.16259, '/media/37747077/fun.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(486, 935546, 'Compound Governance Token', 'COMP', 'COMP', NULL, NULL, -1, NULL, 10000000, NULL, NULL, '2021-06-15 14:35:53', 329.83, 36013.95599791, -1.985082166949, -2.7996345740135, NULL, -996667296, '/media/37747538/comp.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(487, 931676, 'FTX Token', 'FTT', 'FTT', NULL, NULL, -1, NULL, 326187761.06402, NULL, NULL, '2021-06-15 14:35:16', 33.87, 598066.65198514, -1.3686662783926, 0.1182382500739, NULL, 11047979467.238, '/media/35651305/ftxt.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(488, 937105, 'Near', 'NEAR', 'NEAR', NULL, NULL, 1000000000, NULL, 397283453, NULL, NULL, '2021-06-08 13:08:54', 2.84148711, 1298665.9329717, -0.16813570190156, -11.544535789657, NULL, 1128875810.7158, '/media/37458963/near.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(489, 935634, 'Celo', 'CELO', 'CELO', NULL, NULL, 1000000000, NULL, 624581371.77032, NULL, NULL, '2021-06-08 13:08:42', 2.88, 1856006.9714782, -0.24246622791826, -10.614525139665, NULL, 1798794350.6985, '/media/37747585/celo.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(490, 930413, 'Ocean Protocol', 'OCEAN', 'OCEAN', NULL, NULL, -1, NULL, 613099141, NULL, NULL, '2021-06-08 13:15:44', 0.5662, 3185363.4959699, -0.4220893422441, -17.173785839672, NULL, 347136733.6342, '/media/35650582/ocean.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(491, 716522, 'IOS token', 'IOST', 'IOST', NULL, NULL, -194313216, NULL, 22569259192.341, NULL, NULL, '2021-06-08 13:15:57', 0.0279277275, 389410378.1507, -1.3548200653459, -12.606511384121, NULL, 630308120.60058, '/media/27010459/iost.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(492, 934443, 'Solana', 'SOLAN', 'SOLAN', NULL, NULL, -1, NULL, 488586926.43114, NULL, NULL, '2021-01-29 00:24:54', 3.94466949, 347082.8867, 2.6053173422306, 7.5363415166677, NULL, 1927313941.9058, '/media/36934955/solan.png', NULL, '2021-01-06 14:27:03', '2021-01-29 07:25:03'),
(493, 931777, 'Swipe', 'SXP', 'SXP', NULL, NULL, -1, NULL, 285368788.73913, NULL, NULL, '2021-06-08 13:07:19', 1.859, 1341482.3, -0.37513397642016, -15.538391640164, NULL, 530500578.26605, '/media/37746865/sxp.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(494, 22327, 'Bancor Network Token', 'BNT', 'BNT', NULL, NULL, -1, NULL, 202803560.94948, NULL, NULL, '2021-06-08 13:15:44', 4.053, 701049.329719, -0.29520295202953, -12.063354306791, NULL, 821962832.52824, '/media/37747631/bnt.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(495, 41192, 'Maker', 'MKR', 'MKR', NULL, NULL, -1, NULL, 991423.40367497, NULL, NULL, '2021-06-15 14:35:56', 3132.46, 1532.3077003, -1.9856567123082, -2.5255008370622, NULL, 3105594155.0757, '/media/1382296/mkr.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(496, 932637, 'Dai', 'DAI', 'DAI', NULL, NULL, -1, NULL, 5081123452.0595, NULL, NULL, '2021-06-15 14:35:33', 1.001, 4853092.731671, 0, 0, NULL, 5086204575.5115, '/media/37747610/dai.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(497, 310497, 'Kyber Network', 'KNC', 'KNC', NULL, NULL, -1, NULL, 122504026.93717, NULL, NULL, '2021-05-14 17:35:52', 3.242, 2859148.7361691, 1.1544461778471, 12.141127637496, NULL, 397158055.33032, '/media/37746773/kyber-network-trans.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(498, 517477, 'GIFTO', 'GTO', 'GTO', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-04-23 02:25:01', 0.058755864, 277584773.706, -14.753872455692, -37.581605631819, NULL, 58755864, '/media/16746671/gto.png', NULL, '2021-01-06 14:27:03', '2021-04-23 09:26:03'),
(499, 844139, 'True USD', 'TUSD', 'TUSD', NULL, NULL, -1, NULL, 1210517169.88, NULL, NULL, '2021-06-08 13:10:10', 1, 695759.62797129, 0, 0.050025012506248, NULL, 1210517169.88, '/media/37746939/tusd.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(500, 930244, 'Thorecoin', 'THR', 'THR', NULL, NULL, -1, NULL, 1111111, NULL, NULL, '2021-03-03 09:09:30', 10433.102, 820, -0.069011380604037, -3.4325313026688, NULL, 1159233.4396328, '/media/35650475/thorecoin.png', NULL, '2021-01-06 14:27:03', '2021-03-03 16:11:02'),
(501, 932760, 'Thorchain', 'RUNE', 'RUNE', NULL, NULL, -1, NULL, 500000000, NULL, NULL, '2021-06-15 14:35:53', 9.711, 922912, -2.4706236818319, 8.0681059425773, NULL, 560532704, '/media/36569446/rune.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(502, 932609, 'Kava', 'KAVA', 'KAVA', NULL, NULL, -1, NULL, 131977694, NULL, NULL, '2021-06-08 13:07:55', 3.958, 429381.68464252, -0.050505050505045, -17.404006677796, NULL, 522367712.852, '/media/37747651/kava.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(503, 877073, 'NEXO', 'NEXO', 'NEXO', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 08:01:55', 2.1474975896, 1752660.535165, 0.2000850548735, -11.896159462099, NULL, 2147497589.6, '/media/37746922/nexo.png', NULL, '2021-01-06 14:27:03', '2021-06-08 15:02:03'),
(504, 931799, 'Chiliz', 'CHZ', 'CHZ', NULL, NULL, -1, NULL, 298954296, NULL, NULL, '2021-06-14 16:36:31', 0.2832328576, 39926499.497047, -1.5086356672022, 3.7628725835459, NULL, 2517625400.6371, '/media/37747540/chz.png', NULL, '2021-01-06 14:27:03', '2021-06-14 23:37:02'),
(505, 794350, 'Ravencoin', 'RVN', 'RVN', NULL, NULL, -474836480, NULL, 8927379397.7735, NULL, NULL, '2021-05-14 17:35:13', 0.142, 18953992.587649, 0.21171489061397, 9.0629800307219, NULL, 1267687874.4838, '/media/37746688/rvn.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(506, 139467, 'Civic', 'CVC', 'CVC', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-05-09 16:18:49', 0.5832, 399805.5, 0.24063251976625, -3.1872509960159, NULL, 583200000, '/media/1383611/cvc.png', NULL, '2021-01-06 14:27:03', '2021-05-09 23:20:03'),
(507, 788239, 'REN', 'REN', 'REN', NULL, NULL, -1, NULL, 999999632.80375, NULL, NULL, '2021-06-08 13:15:39', 0.4552, 13996408.358157, -0.4809794490599, -15.406058353466, NULL, 455199832.85227, '/media/27010916/ren.jpg', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(508, 929751, 'Theta Fuel', 'TFUEL', 'TFUEL', NULL, NULL, -1, NULL, 1006251904, NULL, NULL, '2021-06-15 14:35:59', 0.5146283518, 30498392, -3.060965281523, -4.6550492235813, NULL, 2728157699.4265, '/media/37746931/tfuel.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(509, 166548, 'Crypto.com', 'MCO', 'MCO', NULL, NULL, -1, NULL, 31587682.363206, NULL, NULL, '2021-01-15 02:00:57', 2.804420674, 184765.4321, -0.18256028091413, 0.58604385135047, NULL, 88585149.46312, '/media/34478435/mco.png', NULL, '2021-01-06 14:27:03', '2021-01-15 09:01:03'),
(510, 836492, 'Loom Network', 'LOOM', 'LOOM', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-03-14 17:33:54', 0.171007551, 78354974.287202, -0.2770757827169, 0.2613715543637, NULL, 171007551, '/media/30001890/untitled-1.png', NULL, '2021-01-06 14:27:03', '2021-03-15 00:34:05'),
(511, 172091, 'Nano', 'NANO', 'NANO', NULL, NULL, 133248290, NULL, 133248290, NULL, NULL, '2021-06-08 13:13:18', 6.855, 1214165.9241773, -0.52242054854157, -11.365399534523, NULL, 913417027.95, '/media/30001997/untitled-1.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(512, 933019, 'Tellor', 'TRB', 'TRB', NULL, NULL, -1, NULL, 1716753.4758511, NULL, NULL, '2021-05-14 17:36:03', 112.41888336, 43258.622998841, 0.70050821387323, 15.230706627167, NULL, 192995508.75958, '/media/36639873/trb.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(513, 4430, 'DigiByte', 'DGB', 'DGB', NULL, NULL, -474836480, NULL, 14381804338.325, NULL, NULL, '2021-06-08 13:09:00', 0.05744, 20376303.146049, -0.57123074259997, -20.695844263427, NULL, 826090841.19336, '/media/12318264/7638-nty_400x400.jpg', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(514, 13072, 'Siacoin', 'SC', 'SC', NULL, NULL, -1, NULL, 547602736, NULL, NULL, '2021-05-14 17:35:18', 0.03275, 274488602.30578, -0.33475349969568, 10.82910321489, NULL, 1565195957.988, '/media/20726/siacon-logo.png', NULL, '2021-01-06 14:27:03', '2021-05-15 00:36:04'),
(515, 137013, 'Status Network Token', 'SNT', 'SNT', NULL, NULL, -1, NULL, 6804870174.8782, NULL, NULL, '2021-06-08 13:08:57', 0.08008812, 21859663.247016, -0.29498686365265, -15.823140571613, NULL, 544989259.15006, '/media/37747590/snt.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(516, 887527, 'True Chain', 'TRUE', 'TRUE', NULL, NULL, 0, NULL, 100000000, NULL, NULL, '2021-03-11 14:00:58', 0.2558218359, 31428595.394, 0.31977327646111, 0.51288289052909, NULL, 25582183.59, '/media/37746097/truejpg.png', NULL, '2021-01-06 14:27:03', '2021-03-11 21:01:03'),
(517, 933032, 'Orchid Protocol', 'OXT', 'OXT', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:55', 0.3315, 18928154.349161, -1.2216924910608, -13.649387861422, NULL, 331500000, '/media/37746869/oxt.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(518, 935695, 'Balancer', 'BAL', 'BAL', NULL, NULL, -1, NULL, 42540000, NULL, NULL, '2021-06-08 13:15:51', 25.49, 98683.03832274, -2.0368946963874, -15.371845949535, NULL, 1084344600, '/media/37072101/bal.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(519, 931668, 'Terra', 'LUNA', 'LUNA', NULL, NULL, -1, NULL, 994557289.72923, NULL, NULL, '2021-06-15 14:35:59', 6.659426616, 2881832.8381606, -2.5329341525993, 6.7038927266974, NULL, 6623181286.3597, '/media/37459367/luna.png', NULL, '2021-01-06 14:27:03', '2021-06-15 21:36:03'),
(520, 933125, 'BOSAGORA', 'BOA', 'BOA', NULL, NULL, -1, NULL, 542130130.19585, NULL, NULL, '2021-01-06 15:00:53', 0.0710513217, 71268.15000251, 0, -5.9090909090909, NULL, 38519062.283808, '/media/36639915/boa.png', NULL, '2021-01-06 14:27:03', '2021-01-06 22:01:03'),
(521, 816702, 'TomoChain', 'TOMO', 'TOMO', NULL, NULL, 100000000, NULL, 100000000, NULL, NULL, '2021-03-22 13:47:45', 2.748, 343020.2, -1.2931034482758, 1.4396456256921, NULL, 274800000, '/media/30001748/tomo.jpg', NULL, '2021-01-06 14:27:03', '2021-03-22 20:49:02'),
(522, 199148, 'Decentraland', 'MANA', 'MANA', NULL, NULL, -1, NULL, 2194336227.3201, NULL, NULL, '2021-06-08 13:08:51', 0.6973, 9656102.8083224, -0.14320492624946, -14.765921036548, NULL, 1530110651.3103, '/media/37746665/mana.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(523, 925939, 'Paxos Standard', 'PAX', 'PAX', NULL, NULL, -1, NULL, 1118726815.93, NULL, NULL, '2021-06-08 12:54:55', 0.9992, 874313.6860273, 0, -0.02001200720432, NULL, 1117831834.4773, '/media/37746929/pax.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(524, 928921, 'LTO Network', 'LTO', 'LTO', NULL, NULL, -1, NULL, 80529305.819595, NULL, NULL, '2021-03-25 15:02:57', 0.6148478814, 27378154, -0.22851913321109, -18.459666026924, NULL, 49513273.073791, '/media/37746178/lto.png', NULL, '2021-01-06 14:27:03', '2021-03-25 22:03:03'),
(525, 937509, 'Oasis Labs', 'ROSE', 'ROSE', NULL, NULL, 1410065408, NULL, 1410065408, NULL, NULL, '2021-06-08 13:15:57', 0.066369423, 12530751, -0.68594228775366, -13.381284993818, NULL, 663694230, '/media/37746937/rose.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:16:02'),
(526, 926388, 'ABBC Coin', 'ABBC', 'ABBC', NULL, NULL, 1502169571, NULL, 1500000000, NULL, NULL, '2021-06-08 12:53:52', 0.289, 6501173.4, 0, -8.1081081081081, NULL, 433500000, '/media/34836013/abbc_ticker.png', NULL, '2021-01-06 14:27:03', '2021-06-08 20:09:03'),
(527, 116180, 'Horizen', 'ZEN', 'ZEN', NULL, NULL, 21000000, NULL, 11169006.25, NULL, NULL, '2021-06-08 13:07:16', 80.47, 7272.49967385, -0.65432098765432, -16.844063242741, NULL, 898769932.9375, '/media/37747044/zen.png', NULL, '2021-01-06 17:32:09', '2021-06-08 20:09:03'),
(528, 936047, 'DIA', 'DIA', 'DIA', NULL, NULL, -1, NULL, 175588246.13339, NULL, NULL, '2021-06-08 13:15:57', 1.6227652485, 1655235.7322045, -0.41607900662139, -19.322861964685, NULL, 284938503.87032, '/media/37747030/dia.png', NULL, '2021-01-06 18:59:03', '2021-06-08 20:16:02'),
(529, 187347, 'Storj', 'STORJ', 'STORJ', NULL, NULL, -1, NULL, 424999998.00001, NULL, NULL, '2021-06-08 13:15:44', 0.9551, 7436646.2863702, -1.0976493735114, -16.439195100612, NULL, 405917498.08981, '/media/20422/sjcx.png', NULL, '2021-01-06 19:23:02', '2021-06-08 20:16:02'),
(530, 17778, 'Augur', 'REP', 'REP', NULL, NULL, -1, NULL, 6413673.7951298, NULL, NULL, '2021-05-06 23:55:45', 50.37, 221349.28915786, 6.5130048636075, 6.8066157760814, NULL, 323056749.06069, '/media/37747024/rep.png', NULL, '2021-01-06 19:40:10', '2021-05-07 06:57:03'),
(531, 5296, 'MonaCoin', 'MONA', 'MONA', NULL, NULL, -1, NULL, 81383899.971579, NULL, NULL, '2021-04-19 21:09:58', 3.3843748396, 161422.16345989, -0.74959827283056, 4.9287343175535, NULL, 275433623.41234, '/media/35309574/mona.png', NULL, '2021-01-06 20:00:03', '2021-04-20 04:10:03'),
(532, 283116, 'Enjin Coin', 'ENJ', 'ENJ', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-05-14 17:35:47', 2.147, 2362137.3694682, -0.60185185185187, 6.7097415506958, NULL, 2147000000, '/media/37747010/enj.png', NULL, '2021-01-06 21:03:03', '2021-05-15 00:36:04'),
(533, 4433, 'Verge', 'XVG', 'XVG', NULL, NULL, -624869184, NULL, 16451534649.431, NULL, NULL, '2021-05-11 00:08:08', 0.05998, 4737968.0967287, 0.53637277908146, -10.903149138443, NULL, 986763048.27289, '/media/12318032/xvg.png', NULL, '2021-01-06 21:27:04', '2021-05-11 07:14:03'),
(534, 218008, 'Bytom', 'BTM', 'BTM', NULL, NULL, 210000000, NULL, 1671704962.5, NULL, NULL, '2021-04-22 06:03:01', 0.2303445222, 54266154.357847, 0.17129537955765, -1.8094657139994, NULL, 385068080.84643, '/media/1383996/btm.png', NULL, '2021-01-06 22:48:03', '2021-04-22 13:03:02'),
(535, 5039, 'Bitshares', 'BTS', 'BTS', NULL, NULL, -694396794, NULL, 2994901152.4471, NULL, NULL, '2021-04-17 21:28:19', 0.1460982, 97769692.207335, -0.39757768178613, -1.2073062215252, NULL, 437549667.55045, '/media/37746917/bts.png', NULL, '2021-01-07 02:03:02', '2021-04-18 04:29:04'),
(536, 16713, 'Decred', 'DCR', 'DCR', NULL, NULL, 21000000, NULL, 13005153.003079, NULL, NULL, '2021-06-08 13:08:54', 129.289797, 30365.927350958, -0.29498686365265, -10.969510703941, NULL, 1681433591.722, '/media/1382607/decred.png', NULL, '2021-01-07 04:35:02', '2021-06-08 20:09:03'),
(537, 177175, 'district0x', 'DNT', 'DNT', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:54', 0.15623748, 4796192.5384858, -0.50401204842484, -12.730152520259, NULL, 156237480, '/media/1383701/dnt.png', NULL, '2021-01-07 06:11:03', '2021-06-08 20:09:03'),
(538, 935562, 'UMA', 'UMA', 'UMA', NULL, NULL, -1, NULL, 102783948.81204, NULL, NULL, '2021-06-08 13:15:53', 12.61, 938239.83857541, -0.63041765169425, -17.742987606001, NULL, 1296105594.5198, '/media/37072053/uma.png', NULL, '2021-01-07 10:36:03', '2021-06-08 20:16:02'),
(539, 932843, 'Klaytn', 'KLAY', 'KLAY', NULL, NULL, -1, NULL, 10595629091.2, NULL, NULL, '2021-06-15 14:35:59', 1.1889551836, 1141970.114182, -1.1543815319227, 11.098485891671, NULL, 12597728131.485, '/media/37747671/klay.png', NULL, '2021-01-07 13:02:04', '2021-06-15 21:36:03'),
(540, 24294, 'Stratis', 'STRAX', 'STRAX', NULL, NULL, -1, NULL, 131168528, NULL, NULL, '2021-05-12 22:50:00', 3.3892515389, 2723365.0340481, -5.306993781978, -3.3806175070161, NULL, 444563135.37925, '/media/37746904/strax.png', NULL, '2021-01-07 16:01:03', '2021-05-13 05:50:02'),
(541, 936966, 'Alpha Finance Lab', 'ALPHA', 'ALPHA', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:15:57', 0.6817651125, 1091144, -0.097997449907663, -14.312288123824, NULL, 681765112.5, '/media/37747634/alpha.png', NULL, '2021-01-07 19:04:02', '2021-06-08 20:16:02'),
(542, 347235, 'Bitcoin Gold', 'BTG', 'BTG', NULL, NULL, 21000000, NULL, 18746936.110885, NULL, NULL, '2021-06-08 13:15:57', 52.79983305, 83448.09, -1.2390527576857, -7.271626754928, NULL, 989835096.85375, '/media/37747569/btg.png', NULL, '2021-01-07 19:12:26', '2021-06-08 20:16:02'),
(543, 13070, 'Groestlcoin', 'GRS', 'GRS', NULL, NULL, 105000000, NULL, 77514053.887389, NULL, NULL, '2021-05-09 23:56:54', 1.6753631223, 8019434.3103478, -0.63067838099887, 0.72015614884788, NULL, 129864187.34291, '/media/37746990/grs.png', NULL, '2021-01-07 22:04:22', '2021-05-10 06:57:03'),
(544, 45260, 'TenX', 'PAY', 'PAY', NULL, NULL, -1, NULL, 205218255.94858, NULL, NULL, '2021-02-24 21:22:56', 0.154699584, 67003025.730923, -2.9101166027657, 9.4928832605341, NULL, 31747178.824451, '/media/1383687/pay.png', NULL, '2021-01-08 01:17:15', '2021-02-25 04:24:04'),
(545, 19745, 'Lisk', 'LSK', 'LSK', NULL, NULL, -1, NULL, 144172064, NULL, NULL, '2021-06-08 13:03:33', 3.081, 106004.82678004, 1.016393442623, -16.998922413793, NULL, 444194129.184, '/media/37747050/lsk.png', NULL, '2021-01-08 02:03:03', '2021-06-08 20:16:02'),
(546, 856139, 'Cortex', 'CTXC', 'CTXC', NULL, NULL, -1, NULL, 10061554.068444, NULL, NULL, '2021-05-10 19:09:44', 0.420342422, 25060679.14106, -0.23081302502021, -5.8759589268922, NULL, 4229298.0062139, '/media/30002149/ctxc.png', NULL, '2021-01-08 09:06:03', '2021-05-11 02:11:02'),
(547, 571314, 'aelf', 'ELF', 'ELF', NULL, NULL, -1, NULL, 879999999.98647, NULL, NULL, '2021-06-08 13:08:54', 0.22713516, 17536704.784651, -0.29498686365264, -12.886425625575, NULL, 199878940.79693, '/media/37746930/elf.png', NULL, '2021-01-08 10:19:05', '2021-06-08 20:09:03'),
(548, 930681, 'USDK', 'USDK', 'USDK', NULL, NULL, 32478711, NULL, 32478711, NULL, NULL, '2021-01-08 17:20:59', 1.0011772156009, 23698491.06042, -0.42298574351314, 3.282401844575, NULL, 32516945.445288, '/media/35650734/usdk.png', NULL, '2021-01-08 18:11:34', '2021-01-09 00:22:02'),
(549, 925272, 'COTI', 'COTI', 'COTI', NULL, NULL, 2000000000, NULL, 2000000000, NULL, NULL, '2021-06-08 13:15:57', 0.1902371085, 20223143.026391, -0.70875096692613, -16.714242364981, NULL, 380474217, '/media/37746149/coti.png', NULL, '2021-01-08 19:03:03', '2021-06-08 20:16:02'),
(550, 141464, 'Voyager Token', 'VGX', 'VGX', NULL, NULL, -1, NULL, 222295208.23845, NULL, NULL, '2021-03-05 17:29:59', 5.633631528, 5847425.5, 0.84170555440288, -5.076521415551, NULL, 1252329293.6555, '/media/36569441/vgx.png', NULL, '2021-01-08 20:10:03', '2021-03-06 00:30:02'),
(551, 338541, 'Worldwide Asset eXchange', 'WAXP', 'WAXP', NULL, NULL, -1, NULL, 3720108650.3498, NULL, NULL, '2021-04-13 19:28:58', 0.254224089, 30694800.795993, 1.9210489724287, -1.5601828891155, NULL, 945741232.61618, '/media/37746259/waxp.png', NULL, '2021-01-08 20:15:02', '2021-04-14 02:29:03'),
(552, 795662, 'Refereum', 'RFR', 'RFR', NULL, NULL, -1, NULL, 704682704, NULL, NULL, '2021-03-22 06:44:53', 0.0343257148, 2345263.9777267, -1.9737833807657, 3.0790638243563, NULL, 171616559.99982, '/media/37746196/rfr.png', NULL, '2021-01-08 20:17:24', '2021-03-22 13:45:03'),
(553, 927515, 'Metadium', 'META', 'META', NULL, NULL, 0, NULL, 2000000000, NULL, NULL, '2021-03-18 00:03:00', 0.2103938112, 3260651.0437151, 0.8900342341752, 7.2212486720979, NULL, 420787622.4, '/media/35521068/meta.png', NULL, '2021-01-08 21:03:04', '2021-03-18 07:05:02'),
(554, 179164, 'Metal', 'MTL', 'MTL', NULL, NULL, -1, NULL, 66588888, NULL, NULL, '2021-05-09 10:58:58', 3.961544796, 1434211.1218638, -0.85792328326942, -6.8626353845001, NULL, 263794862.72783, '/media/37746820/mtl.png', NULL, '2021-01-08 21:26:03', '2021-05-09 18:01:02'),
(555, 925144, 'Okex', 'OKB', 'OKB', NULL, NULL, -1, NULL, 269444872.26, NULL, NULL, '2021-06-15 14:35:59', 14.324953656, 469517.4725, -0.73390075400528, -0.2697943668581, NULL, 3859785307.9713, '/media/37747532/okb.png', NULL, '2021-01-09 00:03:03', '2021-06-15 21:36:03'),
(556, 708404, 'IDEX', 'IDEX', 'IDEX', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-04-25 22:16:57', 0.1100500491, 250486583, 0.79462342429716, -18.809479831301, NULL, 110050049.1, '/media/37454832/idex.png', NULL, '2021-01-09 02:30:03', '2021-04-26 05:17:02'),
(557, 731516, 'Pundi X', 'NPXS', 'NPXS', NULL, NULL, -1, NULL, 258498693019.07, NULL, NULL, '2021-04-05 11:26:25', 0.006853095, 1497855260.8749, -1.8775252620706, -5.8054047183127, NULL, 1771516100.6355, '/media/27010505/pxs.png', NULL, '2021-01-09 07:49:03', '2021-04-05 18:28:03'),
(558, 930623, 'Harmony', 'ONE', 'ONE', NULL, NULL, -1, NULL, 13063183693.793, NULL, NULL, '2021-06-08 13:15:08', 0.0844, 155631251, -0.70588235294118, -14.052953156823, NULL, 1102532703.7561, '/media/37746590/one.png', NULL, '2021-01-09 13:09:03', '2021-06-08 20:16:02'),
(559, 931013, 'MovieBloc', 'MBL', 'MBL', NULL, NULL, -1, NULL, -64771072, NULL, NULL, '2021-06-08 13:08:53', 0.0083321644, 3275016.6366015, -0.62753688766149, -16.116679999945, NULL, 249964932, '/media/35650914/mbl.png', NULL, '2021-01-09 23:32:03', '2021-06-08 20:09:03'),
(560, 929313, 'Ankr Network', 'ANKR', 'ANKR', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-06-08 13:08:58', 0.09059148, 31497380.312633, -0.29498686365266, -12.773743852667, NULL, 905914800, '/media/37747591/ankr.png', NULL, '2021-01-10 03:12:03', '2021-06-08 20:09:03'),
(561, 194883, 'Everex', 'EVX', 'EVX', NULL, NULL, 25000000, NULL, 25000000, NULL, NULL, '2021-01-10 15:09:01', 0.3780151075, 23650222.542893, -0.30991735537187, -12.906137184116, NULL, 9450377.6875, '/media/1383850/evx.png', NULL, '2021-01-10 06:03:03', '2021-01-10 22:09:02'),
(562, 409492, 'Bitcoin Diamond', 'BCD', 'BCD', NULL, NULL, 210000000, NULL, 200387812.5, NULL, NULL, '2021-06-08 13:09:00', 2.19815631, 2462971.453397, -0.71011554288205, -14.61147608678, NULL, 440483734.49397, '/media/37746158/bcd.png', NULL, '2021-01-10 06:52:03', '2021-06-08 20:09:03'),
(563, 933586, 'APIX', 'APIX', 'APIX', NULL, NULL, -1, NULL, 204047845.21, NULL, NULL, '2021-04-14 06:04:06', 0.1390720016, 0, 0.021193946459533, 5.58802755931, NULL, 28377342.255522, '/media/36640225/apix.png', NULL, '2021-01-10 17:01:04', '2021-04-14 13:06:03'),
(564, 23728, 'Steem Dollars', 'SBD', 'SBD', NULL, NULL, 1, NULL, 6214644.906, NULL, NULL, '2021-02-27 17:56:53', 6.327167774, 35461.22747235, 1.3839177800441, -22.624491203559, NULL, 39321100.976096, '/media/350907/steem.png', NULL, '2021-01-10 18:14:02', '2021-02-28 00:57:03'),
(565, 936810, 'Flamingo', 'FLM', 'FLM', NULL, NULL, -1, NULL, 221907321.41494, NULL, NULL, '2021-05-11 13:01:58', 0.955374344, 4931987, 1.0697363440348, -11.534419079156, NULL, 212004561.6256, '/media/37305642/flm.png', NULL, '2021-01-11 08:37:02', '2021-05-11 20:02:03'),
(566, 937954, 'SKALE Network', 'SKL', 'SKL', NULL, NULL, -1, NULL, 4244569911.789, NULL, NULL, '2021-05-07 06:23:54', 0.615637071, 14034904.432731, 0.38410574921479, -4.7728502233585, NULL, 2613114588.1485, '/media/37746911/skl.png', NULL, '2021-01-11 17:42:03', '2021-05-07 13:24:04'),
(567, 799472, 'Celsius Network', 'CEL', 'CEL', NULL, NULL, -1, NULL, 695658160.9671, NULL, NULL, '2021-06-15 14:31:52', 6.875, 365991.3165234, -0.18873403019744, -0.86517664023071, NULL, 4782649856.6488, '/media/37747676/cel.png', NULL, '2021-01-11 21:35:44', '2021-06-15 21:36:03'),
(568, 931395, 'FNB protocol', 'FNB', 'FNB', NULL, NULL, -1804967136, NULL, -1804967136, NULL, NULL, '2021-01-14 09:59:12', 0.0049389834, 29917, 0, 0, NULL, 12298069.456237, '/media/35651151/fnb.png', NULL, '2021-01-12 05:21:03', '2021-01-14 17:01:02'),
(569, 934837, 'JUST', 'JST', 'JST', NULL, NULL, -1, NULL, 1310065408, NULL, NULL, '2021-06-08 13:08:56', 0.06400485, 119007600.35004, 0.21895650302956, -10.07452851714, NULL, 633648015, '/media/37746866/jst.png', NULL, '2021-01-12 07:02:03', '2021-06-08 20:09:03'),
(570, 166594, 'Numeraire', 'NMR', 'NMR', NULL, NULL, -1, NULL, 10972260.041707, NULL, NULL, '2021-06-08 13:15:41', 43.03, 110846.504, -0.41657023837075, -12.022081373952, NULL, 472136349.59465, '/media/37746161/nmr.png', NULL, '2021-01-12 09:00:25', '2021-06-08 20:16:02'),
(571, 925815, 'Ontology Gas', 'ONGAS', 'ONGAS', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:15:57', 0.8723307825, 3197202.7487436, -0.60609004686658, -15.534811449433, NULL, 872330782.5, '/media/36798657/ong-logo.png', NULL, '2021-01-12 18:02:05', '2021-06-08 20:16:02'),
(572, 936009, 'Wrapped NXM', 'WNXM', 'WNXM', NULL, NULL, -1, NULL, 2054218.3267018, NULL, NULL, '2021-04-25 05:05:10', 72.83120376, 59284.777601066, 0.32103003442817, -13.312207740965, NULL, 149611193.51955, '/media/37072275/wnxm.png', NULL, '2021-01-12 22:31:05', '2021-04-25 12:06:02'),
(573, 348628, 'KuCoin Token', 'KCS', 'KCS', NULL, NULL, -1, NULL, 170118638, NULL, NULL, '2021-06-08 13:15:57', 7.869047925, 103268.45821078, -1.0208368718027, -10.085176174358, NULL, 1338671715.3577, '/media/37747086/kcs.png', NULL, '2021-01-13 01:02:02', '2021-06-08 20:16:02'),
(574, 937043, 'Injective Protocol', 'INJ', 'INJ', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-06-08 13:15:57', 7.87233354, 319292.02444796, -0.73288307760077, -20.064453029321, NULL, 787233354, '/media/37746944/inj.png', NULL, '2021-01-13 07:11:03', '2021-06-08 20:16:02'),
(575, 236358, 'Utrust', 'UTK', 'UTK', NULL, NULL, -1, NULL, 500000000, NULL, NULL, '2021-05-08 16:57:53', 0.7899936096, 15126708.12073, 2.1320783968069, 1.3691629389211, NULL, 394996804.8, '/media/37747012/utk.png', NULL, '2021-01-13 13:28:03', '2021-05-08 23:58:03'),
(576, 868276, 'Holo', 'HOLO', 'HOLO', NULL, NULL, -1, NULL, 177619433541.14, NULL, NULL, '2021-03-18 06:15:52', 0.007656516, 1134933397, -0.46410553213795, 3.3935190433611, NULL, 1359946034.8187, '/media/30002313/hot.jpg', NULL, '2021-01-13 17:50:02', '2021-03-18 13:16:03'),
(577, 928723, 'BitTorrent', 'BTT', 'BTT', NULL, NULL, -1, NULL, 989988496187.43, NULL, NULL, '2021-06-15 14:35:59', 0.0035932158, 340081078.18303, -0.95522984931407, -1.5483867467702, NULL, 3557242306.3189, '/media/37746887/btt.png', NULL, '2021-01-14 00:41:04', '2021-06-15 21:36:03'),
(578, 930835, 'WaykiChain', 'WICC', 'WICC', NULL, NULL, 210000000, NULL, 189000000, NULL, NULL, '2021-04-22 15:59:38', 0.502363998, 1404157.9595133, 1.2084822763978, -4.6704549798066, NULL, 94946795.622, '/media/37747161/wicc.png', NULL, '2021-01-14 00:41:04', '2021-04-22 23:01:03'),
(579, 936218, 'DFI.money', 'YFII', 'YFII', NULL, NULL, -1, NULL, 39999.998509884, NULL, NULL, '2021-05-13 20:00:58', 2586.2005466, 1866.7784565547, 0.79523511854405, -16.633861375988, NULL, 103448018.01026, '/media/37747539/yfii.png', NULL, '2021-01-14 00:41:04', '2021-05-14 03:02:02'),
(580, 930669, 'Mossland', 'MOC', 'MOC', NULL, NULL, -1, NULL, 500000000, NULL, NULL, '2021-03-28 01:49:58', 0.321707412, 556581.84992464, 8.493157749822, 47.718970202005, NULL, 160853706, '/media/35650730/moc.png', NULL, '2021-01-14 11:27:06', '2021-03-28 08:50:03'),
(581, 936964, 'Venus', 'XVS', 'XVS', NULL, NULL, -1, NULL, 30000000, NULL, NULL, '2021-06-08 13:15:57', 24.763680255, 141779.62, -0.45842962830886, -15.529243177456, NULL, 742910407.65, '/media/37747613/xvs.png', NULL, '2021-01-14 15:28:03', '2021-06-08 20:16:02'),
(582, 906271, 'Sentinel Protocol', 'UPP', 'UPP', NULL, NULL, -1, NULL, 500000000, NULL, NULL, '2021-03-22 13:52:50', 0.285961288, 1629800.1792992, -4.5535986290247, 62.815521120738, NULL, 142980644, '/media/37746175/uppjpg.png', NULL, '2021-01-14 17:45:03', '2021-03-22 20:53:02'),
(583, 937531, 'Hard Protocol', 'HARD', 'HARD', NULL, NULL, -1, NULL, 200000000, NULL, NULL, '2021-03-18 03:33:54', 2.7217849907, 3541483.6, -4.2384557374438, 17.01195353041, NULL, 544356998.14, '/media/37746060/hard.png', NULL, '2021-01-14 17:45:03', '2021-03-18 10:35:02'),
(584, 930287, 'ThunderCore', 'TT', 'TT', NULL, NULL, 1410065408, NULL, 1399894927, NULL, NULL, '2021-04-14 15:24:01', 0.0233337762, 29787258.258203, 0.1015074370269, -14.356823374482, NULL, 233100446.2725, '/media/37747029/tt.png', NULL, '2021-01-14 17:45:03', '2021-04-14 22:24:03'),
(585, 931927, 'Thore Exchange', 'THEX', 'THEX', NULL, NULL, 10000000, NULL, 10000000, NULL, NULL, '2021-01-14 10:55:54', 18.5792, 399802, 0, 23.076923076923, NULL, 185792000, '/media/35651401/thoreexchange.png', NULL, '2021-01-14 17:45:03', '2021-01-14 17:56:03'),
(586, 78152, 'Aragon', 'ANT', 'ANT', NULL, NULL, -1, NULL, 40072895.556217, NULL, NULL, '2021-06-08 13:00:58', 4.607, 122882.9263014, 0.39224231858792, -14.192587073943, NULL, 184615829.82749, '/media/1383244/ant.png', NULL, '2021-01-14 17:45:03', '2021-06-08 20:09:03'),
(587, 231674, 'Ignis', 'IGNIS', 'IGNIS', NULL, NULL, 0, NULL, 999449694.5986, NULL, NULL, '2021-01-15 10:55:52', 0.0408324296, 38839097.071709, -3.0801054367793, -0.86491417545262, NULL, 40809959.293439, '/media/1384046/ignis.png', NULL, '2021-01-14 17:45:03', '2021-01-15 17:56:03'),
(588, 936585, 'Frontier', 'FRONT', 'FRONT', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-04-30 16:53:24', 2.662890928, 7053707.1203082, 3.0312740924979, 3.1051618828121, NULL, 266289092.8, '/media/37305534/front.png', NULL, '2021-01-14 17:45:03', '2021-04-30 23:54:02'),
(589, 925204, 'ZB', 'ZB', 'ZB', NULL, NULL, 2100000000, NULL, 390393910, NULL, NULL, '2021-01-14 10:55:58', 0.2748299848, 106396.92, -2.8378378378379, -6.25814863103, NULL, 107291952.35131, '/media/35651549/zb.png', NULL, '2021-01-14 17:45:03', '2021-01-14 17:56:03'),
(590, 255777, 'Primas', 'PST', 'PST', NULL, NULL, 100000000, NULL, 100000000, NULL, NULL, '2021-01-14 10:55:58', 0.015289568, 271176179.293, 0, 0, NULL, 1528956.8, '/media/9350792/pst.jpg', NULL, '2021-01-14 17:45:03', '2021-01-14 17:56:03'),
(591, 936844, 'Maro', 'MARO', 'MARO', NULL, NULL, 1000000000, NULL, 669783565.811, NULL, NULL, '2021-06-08 13:08:54', 0.23501268, 113750.72779875, -0.29498686365264, -15.402842527108, NULL, 157407630.8212, '/media/37746992/maro.png', NULL, '2021-01-14 17:45:03', '2021-06-08 20:09:03'),
(592, 777990, 'Creditcoin', 'CTC', 'CTC', NULL, NULL, 2000000000, NULL, 667468260.81, NULL, NULL, '2021-06-11 14:09:00', 3.2753437335, 4925.62728165, -0.42422087355703, -0.79953923783624, NULL, 2186187985.3542, '/media/37746926/ctc.png', NULL, '2021-01-14 17:45:03', '2021-06-11 21:10:03'),
(593, 192400, 'DMarket', 'DMT', 'DMT', NULL, NULL, -1, NULL, 56921773.171971, NULL, NULL, '2021-03-07 13:57:59', 0.569491356, 3758.64115243, -0.39036306159594, 0.5057937748643, NULL, 32416457.78963, '/media/1383841/dmarket.png', NULL, '2021-01-14 17:45:03', '2021-03-07 20:58:03'),
(594, 926044, 'HyperCash', 'HC', 'HC', NULL, NULL, 84000000, NULL, 45071909.329052, NULL, NULL, '2021-04-17 22:00:52', 3.056031657, 371203.97636101, -0.30113677492217, 11.680086121797, NULL, 137741181.75102, '/media/34835738/hcash.png', NULL, '2021-01-14 17:45:03', '2021-04-18 05:03:02'),
(595, 930306, 'Lambda', 'LAMB', 'LAMB', NULL, NULL, -1, NULL, 1705032704, NULL, NULL, '2021-03-29 11:03:36', 0.1002745541, 44180011.021087, 0.46450313980244, -7.3953677101616, NULL, 601647324.6, '/media/35650511/lambda.png', NULL, '2021-01-14 17:45:03', '2021-03-29 18:05:03'),
(596, 30173, 'Ardor', 'ARDR', 'ARDR', NULL, NULL, 998999495, NULL, 998999495, NULL, NULL, '2021-06-08 13:08:54', 0.19299924, 7407807.2732129, -0.464265323986, -15.63914743625, NULL, 192806143.29538, '/media/37746964/ardr.png', NULL, '2021-01-14 17:45:03', '2021-06-08 20:09:03'),
(597, 925271, 'ContentBox', 'BOX', 'BOX', NULL, NULL, -1, NULL, -1294967296, NULL, NULL, '2021-01-14 10:55:58', 0.0011467176, 4061625359.7385, 0, -25, NULL, 3440152.8, '/media/34478217/contentbox.png', NULL, '2021-01-14 17:45:03', '2021-01-14 17:56:03'),
(598, 744987, 'Elastos', 'ELA', 'ELA', NULL, NULL, -1, NULL, 23645468.789762, NULL, NULL, '2021-01-14 10:52:00', 2.2821859, 107397.39928828, -2.5717111770524, 5.4603854389722, NULL, 53963355.470884, '/media/27010574/ela.png', NULL, '2021-01-14 17:45:03', '2021-01-14 17:52:10'),
(599, 879044, 'CyberVein', 'CVT', 'CVT', NULL, NULL, -2147483648, NULL, -2147483648, NULL, NULL, '2021-01-14 10:55:58', 0.1024401056, 121961.031, 2.2900763358779, -9.7643097643098, NULL, 219988451.67539, '/media/32655908/cvt.jpg', NULL, '2021-01-14 17:45:03', '2021-01-14 17:56:03'),
(600, 337162, 'AirSwap', 'AST', 'AST', NULL, NULL, 500000000, NULL, 500000000, NULL, NULL, '2021-01-14 10:55:58', 0.1326370024, 30515862.246154, -3.072625698324, 9.8101265822785, NULL, 66318501.2, '/media/35309639/ast.png', NULL, '2021-01-14 17:45:03', '2021-01-14 17:56:03'),
(601, 936492, 'Sun Token', 'SUN', 'SUN', NULL, NULL, -1, NULL, 19900730, NULL, NULL, '2021-05-14 17:35:56', 32.312805624, 174613.38203924, 4.092220960138, 12.148154798591, NULL, 643048420.26571, '/media/37747233/sun.png', NULL, '2021-01-14 17:53:02', '2021-05-15 00:36:04'),
(602, 170452, 'AdEx', 'ADX', 'ADX', NULL, NULL, -1, NULL, 109384587.41135, NULL, NULL, '2021-03-01 00:02:20', 0.7328383856, 16583681.467732, 0.25529417630867, 3.4570619613462, NULL, 80161224.448058, '/media/1383667/adx1.png', NULL, '2021-01-14 17:53:02', '2021-03-01 07:04:02'),
(603, 937839, 'API3', 'API3', 'API3', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-06-08 13:15:59', 3.018165939, 114055.1, -2.5804627030234, -22.469161978225, NULL, 301816593.9, '/media/37746935/api3.png', NULL, '2021-01-14 17:53:02', '2021-06-08 20:16:02'),
(604, 931844, 'COCOS BCX', 'COCOS', 'COCOS', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-03-12 13:05:16', 0.00156617244, 0, -7.391363581211, -1.7435056596787, NULL, 156617.244, '/media/35651407/cocos.png', NULL, '2021-01-16 01:43:03', '2021-03-12 20:06:02'),
(605, 929174, 'Fetch.AI', 'FET', 'FET', NULL, NULL, -1, NULL, 1152997575, NULL, NULL, '2021-06-08 13:08:54', 0.29376585, 18523482.68174, -0.40626478009942, -18.204214526337, NULL, 338711312.66781, '/media/37746958/fet.png', NULL, '2021-01-16 02:48:02', '2021-06-08 20:09:03'),
(606, 369132, 'Simple Token', 'OST', 'OST', NULL, NULL, -1, NULL, 800000000, NULL, NULL, '2021-01-31 21:02:09', 0.0236928456, 97441183.031989, -5.2340139543094, 15.733815004331, NULL, 18954276.48, '/media/35650392/ost.png', NULL, '2021-01-16 10:01:03', '2021-02-01 04:03:02');
INSERT INTO `tbl_bitcoin_values` (`tbl_id`, `id`, `name`, `symbol`, `slug`, `num_market_pairs`, `date_added`, `max_supply`, `circulating_supply`, `total_supply`, `platform`, `cmc_rank`, `last_updated`, `price`, `volume_24h`, `percent_change_1h`, `percent_change_24h`, `percent_change_7d`, `market_cap`, `img_url`, `lasts_updated`, `created_at`, `updated_at`) VALUES
(607, 380641, 'SirinLabs', 'SRN', 'SRN', NULL, NULL, 572166103.88572, NULL, 572166103.88572, NULL, NULL, '2021-01-17 00:20:02', 0.0238148992, 9204267.6521985, -5.1140991750039, -2.2604918922139, NULL, 13626078.089695, '/media/14913556/srn.png', NULL, '2021-01-17 02:03:03', '2021-01-17 07:20:03'),
(608, 931849, 'Akropolis', 'AKRO', 'AKRO', NULL, NULL, -1, NULL, -294967296, NULL, NULL, '2021-04-08 10:50:50', 0.0749267904, 278077717.45838, 1.7315737972937, -5.8218487335808, NULL, 299707161.6, '/media/37746781/akropolis-trans.png', NULL, '2021-01-17 05:52:03', '2021-04-08 17:51:02'),
(609, 30022, 'Firo', 'FIRO', 'FIRO', NULL, NULL, 21400000, NULL, 11840088.23952, NULL, NULL, '2021-05-08 23:20:55', 19.295488428, 698337.00733614, 0.54278614891595, 3.5778187460157, NULL, 228460285.61216, '/media/37747103/firo.png', NULL, '2021-01-18 03:33:03', '2021-05-09 06:21:03'),
(610, 936461, 'Bella Protocol', 'BEL', 'BEL', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-03-15 08:44:59', 3.189848921, 2514820, -0.26848125369334, 5.1880828470518, NULL, 318984892.1, '/media/37746061/bel.png', NULL, '2021-01-18 14:40:03', '2021-03-15 15:46:03'),
(611, 937709, 'Unifi Protocol DAO', 'UNFI', 'UNFI', NULL, NULL, -1, NULL, 10000000, NULL, NULL, '2021-04-15 18:17:58', 32.334164046, 254694.4, -0.37375863336635, 2.0195561338078, NULL, 323341640.46, '/media/37746616/unifi-protocol-dao-trans.png', NULL, '2021-01-18 18:08:03', '2021-04-16 01:18:02'),
(612, 926064, 'VeChainThor', 'VTHO', 'VTHO', NULL, NULL, -1, NULL, 1957593413, NULL, NULL, '2021-06-08 13:15:36', 0.0082, 574775032, -1.2048192771084, -11.827956989247, NULL, 297802120.6042, '/media/37746957/vtho.png', NULL, '2021-01-19 04:17:03', '2021-06-08 20:16:02'),
(613, 929872, 'Orbs', 'ORBS', 'ORBS', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-06-08 13:08:54', 0.07417998, 498538.18895934, 1.0463361830247, -13.808532190744, NULL, 741799800, '/media/37747674/orbs.png', NULL, '2021-01-19 05:21:03', '2021-06-08 20:09:03'),
(614, 917211, 'Mainframe', 'MFT', 'MFT', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-03-22 13:24:52', 0.02632403, 79463473, -1.3118028553675, -0.12925401080425, NULL, 263240300, '/media/34333427/mft.jpg', NULL, '2021-01-19 10:42:03', '2021-03-22 20:25:02'),
(615, 758055, 'ArcBlock', 'ABT', 'ABT', NULL, NULL, -1, NULL, 186000000, NULL, NULL, '2021-01-23 02:17:58', 0.125864397, 3637951.9904353, 0.38601324742815, 30.038231516211, NULL, 23410777.842, '/media/27010666/abt2.png', NULL, '2021-01-19 17:07:04', '2021-01-23 09:20:03'),
(616, 752710, 'Bluzelle', 'BLZ', 'BLZ', NULL, NULL, -1, NULL, 500000000, NULL, NULL, '2021-03-29 04:46:01', 0.519747526, 24211974.75542, -0.22749328245313, -14.910257631675, NULL, 259873763, '/media/37746114/bluzelle.png', NULL, '2021-01-19 23:03:02', '2021-03-29 11:48:03'),
(617, 934361, 'Hive', 'HIVE', 'HIVE', NULL, NULL, 401330942.858, NULL, 371968555.228, NULL, NULL, '2021-04-28 14:15:53', 0.6401028944, 10454935.522771, -0.18749565515061, -6.3550054910025, NULL, 238098148.82723, '/media/37746903/hive.png', NULL, '2021-01-21 09:03:03', '2021-04-28 21:18:03'),
(618, 61877, 'iExec', 'RLC', 'RLC', NULL, NULL, -1, NULL, 86999784.986845, NULL, NULL, '2021-06-08 13:15:57', 4.03473522, 645877.85131711, 0.29575587310049, -14.203134646501, NULL, 351021096.61885, '/media/37747617/rlc.png', NULL, '2021-01-21 13:36:03', '2021-06-08 20:16:02'),
(619, 936179, 'The Sandbox', 'SAND', 'SAND', NULL, NULL, -1, NULL, -1294967296, NULL, NULL, '2021-06-08 13:08:54', 0.27275913, 6705404.4707291, -0.41482461982613, -16.076773566868, NULL, 818277390, '/media/37746667/sand.png', NULL, '2021-01-21 15:06:03', '2021-06-08 20:09:03'),
(620, 240142, 'Wanchain', 'WAN', 'WAN', NULL, NULL, 210000000, NULL, 193027434.3648, NULL, NULL, '2021-05-11 18:02:55', 2.4288845088, 8974309.8773093, -0.38826829592719, -1.4305002847508, NULL, 468841345.10207, '/media/9350742/wan.jpg', NULL, '2021-01-21 15:20:03', '2021-05-12 01:03:03'),
(621, 937457, 'CertiK', 'CTK', 'CTK', NULL, NULL, -1, NULL, 100958043.44684, NULL, NULL, '2021-01-28 00:34:01', 0.8677141724, 899503.6, -2.0885239447194, -7.5801426254648, NULL, 87602725.116599, '/media/37459106/ctk.png', NULL, '2021-01-21 19:55:03', '2021-01-28 07:34:03'),
(622, 933180, 'Origin Protocol', 'OGN', 'OGN', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:15:59', 0.8407888785, 5232440.8943324, 2.985006304265, -11.459613144136, NULL, 840788878.5, '/media/37746928/ogn.png', NULL, '2021-01-22 01:23:03', '2021-06-08 20:16:02'),
(623, 921524, 'VITE', 'VITE', 'VITE', NULL, NULL, -1, NULL, 1013745879, NULL, NULL, '2021-05-01 01:27:59', 0.2123399977, 88007124.407636, -2.15435401955, 6.5458011266232, NULL, 215258797.61524, '/media/34477806/vite.jpg', NULL, '2021-01-22 04:23:03', '2021-05-01 08:28:03'),
(624, 893122, 'IoTeX Network', 'IOTX', 'IOTX', NULL, NULL, 1410065408, NULL, 9533054329.32, NULL, NULL, '2021-06-08 13:08:54', 0.02264787, 143862550.87915, -0.29498686365264, -15.720576830617, NULL, 215903375.15338, '/media/37746980/iotx.png', NULL, '2021-01-22 19:48:04', '2021-06-08 20:09:03'),
(625, 377792, 'Nuls', 'NULS', 'NULS', NULL, NULL, 210000000, NULL, 114032817.8158, NULL, NULL, '2021-05-09 14:00:56', 1.250004756, 8061936.5220638, 0.20416456719365, -8.1958851774676, NULL, 142541564.60984, '/media/37747025/nuls.png', NULL, '2021-01-24 03:16:02', '2021-05-09 21:01:02'),
(626, 928158, 'Fantom', 'FTM', 'FTM', NULL, NULL, -1119967296, NULL, 2541152731.01, NULL, NULL, '2021-06-08 13:08:54', 0.28293426, 23463244, -0.52578550517197, -17.639246175681, NULL, 718979167.49529, '/media/37747650/ftm.png', NULL, '2021-01-24 03:26:03', '2021-06-08 20:09:03'),
(627, 930849, 'STP Network', 'STPT', 'STPT', NULL, NULL, -1, NULL, 1942420283.0271, NULL, NULL, '2021-05-05 11:02:59', 0.0862474715, 88734458.264039, 1.2292166995001, -5.2473893896236, NULL, 167528838.0014, '/media/35650824/stpt.png', NULL, '2021-01-24 17:14:03', '2021-05-05 18:03:03'),
(628, 929828, 'bZx', 'BZRX', 'BZRX', NULL, NULL, -1, NULL, 1030000000, NULL, NULL, '2021-06-08 13:15:57', 0.268763307, 4545067, -0.92102915415414, -20.246794060276, NULL, 276826206.21, '/media/37746923/bzrx.png', NULL, '2021-01-26 00:07:02', '2021-06-08 20:16:02'),
(629, 937569, 'Axie Infinity Shards', 'AXS', 'AXS', NULL, NULL, -1, NULL, 270000000, NULL, NULL, '2021-06-08 13:15:57', 3.75874356, 260744.2836716, -0.2814550969329, -15.573579445947, NULL, 1014860761.2, '/media/37746925/axs.png', NULL, '2021-01-26 17:06:03', '2021-06-08 20:16:02'),
(630, 932619, 'Nervos Network', 'CKB', 'CKB', NULL, NULL, -1, NULL, 32402946051.955, NULL, NULL, '2021-06-08 13:08:54', 0.01739619, 99170573.87023, -0.29498686365264, -15.95629349852, NULL, 563687806.07956, '/media/37747678/ckb.png', NULL, '2021-01-26 20:03:04', '2021-06-08 20:09:03'),
(631, 937428, 'Audius', 'AUDIO', 'AUDIO', NULL, NULL, -1, NULL, 1025236927.2752, NULL, NULL, '2021-05-02 13:04:06', 2.786, 1090045, -0.10756543564002, 10.42409829568, NULL, 2856310079.3888, '/media/37747027/audio.png', NULL, '2021-01-27 20:03:03', '2021-05-02 20:06:04'),
(632, 718353, 'SWFTCoin', 'SWFTC', 'SWFTC', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-04-12 16:00:58', 0.008382829, 530011283.52, -0.21442848567528, 28.011627351727, NULL, 83828290, '/media/27010472/swftc.png', NULL, '2021-01-28 23:37:03', '2021-04-12 23:03:03'),
(633, 752993, 'SwissBorg', 'CHSB', 'CHSB', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:54', 0.67877964, 5186345.3585092, -0.10176009400857, -12.858020428654, NULL, 678779640, '/media/37747001/chsb.png', NULL, '2021-01-29 00:53:02', '2021-06-08 20:09:03'),
(634, 136244, 'SONM', 'SNM', 'SNM', NULL, NULL, -1, NULL, 444000000, NULL, NULL, '2021-05-01 11:02:48', 0.9305333194, 52452835.6, -0.33597046180212, -28.528407929989, NULL, 413156793.8136, '/media/1383564/snm.png', NULL, '2021-01-29 08:01:37', '2021-05-01 18:04:03'),
(635, 936742, 'New BitShares', 'NBS', 'NBS', NULL, NULL, -1, NULL, 3095681111.7566, NULL, NULL, '2021-03-12 18:51:54', 0.028744155, 436260764.97715, 0.55204679017203, -5.742586536514, NULL, 88982737.706905, '/media/37305605/nbs.png', NULL, '2021-01-29 11:22:02', '2021-03-13 01:53:02'),
(636, 935195, 'StormX', 'STMX', 'STMX', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-05-12 13:00:59', 0.0462018258, 134223101.08276, -0.10226701940042, -1.402673367264, NULL, 462018258, '/media/37071978/stmx.png', NULL, '2021-01-30 13:16:03', '2021-05-12 20:03:02'),
(637, 847172, 'Mithril', 'MITH', 'MITH', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-04-30 01:11:00', 0.1267913265, 58919663, 0.20113854266988, -6.4093931968308, NULL, 126791326.5, '/media/37746860/mith.png', NULL, '2021-01-30 17:40:06', '2021-04-30 08:11:03'),
(638, 4592, 'Reddcoin', 'RDD', 'RDD', NULL, NULL, -1, NULL, 29958100775.573, NULL, NULL, '2021-01-30 14:21:00', 0.003420761, 4275894214.7892, -0.18004447711377, 15.020771761594, NULL, 102479502.76715, '/media/19887/rdd.png', NULL, '2021-01-30 19:05:03', '2021-01-30 21:21:03'),
(639, 26132, 'Komodo', 'KMD', 'KMD', NULL, NULL, 200000000, NULL, 128079357.5976, NULL, NULL, '2021-06-08 13:08:54', 1.38381768, 2158728.377092, -0.27133205626561, -16.100831664284, NULL, 177238479.48661, '/media/37746989/kmd.png', NULL, '2021-01-31 04:27:07', '2021-06-08 20:09:03'),
(640, 198710, 'Viberate', 'VIB', 'VIB', NULL, NULL, -1, NULL, 200000000, NULL, NULL, '2021-02-01 04:58:56', 0.0315674936, 479278050.45628, -1.0754903764224, -31.859423493845, NULL, 6313498.72, '/media/1383893/vib.png', NULL, '2021-01-31 19:45:03', '2021-02-01 12:01:02'),
(641, 710240, 'BF Token', 'BFT', 'BFT', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-02-01 02:02:51', 0.03336575, 411481486.8106, 0.75583903048519, -11.004188374428, NULL, 33365750, '/media/25792654/bft.png', NULL, '2021-02-01 00:03:02', '2021-02-01 09:04:02'),
(642, 346812, 'AppCoins', 'APPC', 'APPC', NULL, NULL, -1, NULL, 245561589.06221, NULL, NULL, '2021-02-01 17:03:02', 0.0497631541, 126858674.38138, -0.15339587556132, -30.327638198576, NULL, 12219919.197544, '/media/12318370/app.png', NULL, '2021-02-01 01:06:02', '2021-02-02 00:04:02'),
(643, 310297, 'pNetwork Token', 'PNT', 'PNT', NULL, NULL, -1, NULL, 76284609.737038, NULL, NULL, '2021-05-10 01:03:00', 2.4505739996, 4001324.6615684, -0.31951533748905, -9.8557609953973, NULL, 186941081.19122, '/media/37746983/pnt.png', NULL, '2021-02-01 04:06:03', '2021-05-10 08:03:02'),
(644, 938812, 'Flow - Dapper Labs', 'FLOW', 'FLOW', NULL, NULL, -1, NULL, 1361072788.8121, NULL, NULL, '2021-06-15 14:35:44', 12.33, 55048.89566784, -0.56451612903226, 0.48899755501223, NULL, 16782027486.053, '/media/37746240/flow.png', NULL, '2021-02-01 18:14:03', '2021-06-15 21:36:03'),
(645, 934443, 'Solana', 'SOL', 'SOL', NULL, NULL, -1, NULL, 494518831.81069, NULL, NULL, '2021-06-15 14:35:47', 39.67, 1273848.2835736, -2.2183879714074, 3.5229645093946, NULL, 19617562057.93, '/media/37747734/sol.png', NULL, '2021-02-01 20:28:08', '2021-06-15 21:36:03'),
(646, 930795, 'SpendCoin', 'SPENDC', 'SPENDC', NULL, NULL, -1, NULL, 2000000000, NULL, NULL, '2021-02-03 17:32:06', 0.0136988282, 145184335.19998, 41.587780884316, 35.520543021273, NULL, 27397656.4, '/media/35650797/spnd.png', NULL, '2021-02-02 11:52:03', '2021-02-04 00:33:02'),
(647, 899553, 'QuarkChain', 'QKC', 'QKC', NULL, NULL, 1410065408, NULL, -2142928883, NULL, NULL, '2021-03-16 17:29:02', 0.0431161692, 291161067, -1.9527565955261, -11.614523150354, NULL, 277970188.98261, '/media/33434307/qkc.jpg', NULL, '2021-02-02 20:54:02', '2021-03-17 00:29:03'),
(648, 930770, 'Carry', 'CARRY', 'CARRY', NULL, NULL, -1, NULL, 8977684545.8936, NULL, NULL, '2021-03-22 06:21:52', 0.0294129597, 7400028.76, -1.7925024755081, 1.0103403746803, NULL, 264060273.74768, '/media/35650781/cre.png', NULL, '2021-02-03 18:19:04', '2021-03-22 13:24:02'),
(649, 360299, 'SelfKey', 'KEY', 'KEY', NULL, NULL, -1, NULL, 5999999954.4641, NULL, NULL, '2021-05-02 11:35:54', 0.01922, 16781256.8, -0.87674058793192, -0.20768431983384, NULL, 115319999.1248, '/media/37747020/key.png', NULL, '2021-02-03 19:27:03', '2021-05-02 18:37:03'),
(650, 930345, 'DREP', 'DREP', 'DREP', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-04-10 00:02:59', 2.5540329192, 7329498, -2.454151085421, -16.185733085825, NULL, 255403291.92, '/media/35650539/drep.png', NULL, '2021-02-03 20:03:02', '2021-04-10 07:03:02'),
(651, 920805, 'Everipedia', 'IQ', 'IQ', NULL, NULL, -1, NULL, 10018399353.657, NULL, NULL, '2021-04-18 14:46:57', 0.02891, 1781177.4422399, 3.6572248117605, -9.65625, NULL, 289631925.31422, '/media/34477786/iq.png', NULL, '2021-02-03 20:11:05', '2021-04-18 21:50:03'),
(652, 136269, 'Skycoin', 'SKY', 'SKY', NULL, NULL, 100000000, NULL, 25000000, NULL, NULL, '2021-02-15 20:00:54', 3.4698774188, 12219242, 0.62433707258324, -26.623227121976, NULL, 86746935.47, '/media/30001806/sky.png', NULL, '2021-02-04 04:11:03', '2021-02-16 03:01:04'),
(653, 925371, 'The Midas Touch Gold', 'TMTG', 'TMTG', NULL, NULL, -1, NULL, 9161139666.073, NULL, NULL, '2021-02-21 09:00:00', 0.0079153662, 21008222.3172, -0.00035374106824825, 2.2771354464961, NULL, 72513775.266314, '/media/35650738/dge.png', NULL, '2021-02-04 05:51:03', '2021-02-21 16:02:02'),
(654, 768219, 'Fusion', 'FSN', 'FSN', NULL, NULL, 81920000, NULL, 67007078.264853, NULL, NULL, '2021-03-09 03:31:58', 1.3597948791, 4344029.4301316, -0.85912480629294, 34.039573957756, NULL, 91115881.888, '/media/37746148/fsn.png', NULL, '2021-02-05 11:03:02', '2021-03-09 10:32:03'),
(655, 934149, '3X Short BNB Token', 'BNBBEAR', 'BNBBEAR', NULL, NULL, -1, NULL, 7566824730594.4, NULL, NULL, '2021-05-14 12:05:54', 0.00000022, 1483490560, 0, 4.7619047619048, NULL, 1664701.4407308, '/media/35651305/ftxt.png', NULL, '2021-02-06 06:25:03', '2021-05-14 19:27:03'),
(656, 33022, 'Golem Network Token', 'GLM', 'GLM', NULL, NULL, -1, NULL, 483544752.45923, NULL, NULL, '2021-03-28 23:01:56', 0.6168299156, 18807468.354864, -0.070810264791022, 5.8736310313042, NULL, 298264868.84825, '/media/37746177/glm.png', NULL, '2021-02-06 11:06:03', '2021-03-29 06:02:04'),
(657, 935149, 'Proton', 'XPR', 'XPR', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-02-08 14:01:58', 0.006506604, 46912846.4227, 0.76947683798754, 6.2813260691961, NULL, 65066040, '/media/37071955/xpr.png', NULL, '2021-02-06 12:59:03', '2021-02-08 21:03:04'),
(658, 714866, 'Measurable Data Token', 'MSDT', 'MSDT', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-03-22 13:52:50', 0.101966276, 164533472.47165, -1.6595963422928, 15.36236101309, NULL, 101966276, '/media/27010451/mdt.png', NULL, '2021-02-09 00:55:05', '2021-03-22 20:53:02'),
(659, 897496, 'NKN', 'NKN', 'NKN', NULL, NULL, -1, NULL, 700000000, NULL, NULL, '2021-06-08 13:08:54', 0.31017735, 6564722.0005535, -0.18936714634718, -13.371842575257, NULL, 217124145, '/media/37746868/nkn.png', NULL, '2021-02-09 10:00:04', '2021-06-08 20:09:03'),
(660, 932603, 'Stacks', 'STX', 'STX', NULL, NULL, 1818000000, NULL, 1150554235.731, NULL, NULL, '2021-06-08 13:08:54', 0.88983153, 1999720.9111606, -0.18453079296984, -12.890811296915, NULL, 1023799435.9285, '/media/37746986/stx.png', NULL, '2021-02-09 14:14:04', '2021-06-08 20:09:03'),
(661, 931583, 'WINk', 'WIN', 'WIN', NULL, NULL, -1, NULL, 994719859245.61, NULL, NULL, '2021-06-08 13:08:54', 0.00032823, 47943556.291382, -0.29498686365264, -9.6133722531255, NULL, 326496899.40019, '/media/35651255/win.png', NULL, '2021-02-09 16:05:03', '2021-06-08 20:09:03'),
(662, 934538, 'Cartesi', 'CTSI', 'CTSI', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:54', 0.59770683, 11521697.692829, -0.29498686365264, -15.851713125226, NULL, 597706830, '/media/36935008/ctsi.png', NULL, '2021-02-11 03:31:03', '2021-06-08 20:09:03'),
(663, 930686, 'Chromia', 'CHR', 'CHR', NULL, NULL, -1, NULL, 561369439.3262, NULL, NULL, '2021-05-14 17:35:56', 0.35575596, 63486010.13118, 0.26524822159345, 5.9759635902943, NULL, 199710523.80216, '/media/37747038/chr.png', NULL, '2021-02-11 21:04:02', '2021-05-15 00:36:04'),
(664, 930104, 'Huobi Pool Token', 'HPT', 'HPT', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-02-28 01:02:39', 0.0212886344, 72512492.902495, -0.29526017473457, 1.32301603091, NULL, 212886344, '/media/37746191/hpt.png', NULL, '2021-02-11 23:41:03', '2021-02-28 08:04:03'),
(665, 141331, 'Dent', 'DENT', 'DENT', NULL, NULL, -1, NULL, 1215752192, NULL, NULL, '2021-06-08 13:15:57', 0.0031681928, 275728070, -1.8760723134294, -15.262707600419, NULL, 316819280, '/media/37746692/dent.png', NULL, '2021-02-12 02:34:02', '2021-06-08 20:16:02'),
(666, 369151, 'Streamr DATAcoin', 'DATA', 'DATA', NULL, NULL, -1, NULL, 987154514, NULL, NULL, '2021-04-07 19:00:02', 0.2155508534, 252960306.6203, 6.6187412993912, -30.778853995828, NULL, 212781997.93036, '/media/30002338/data.png', NULL, '2021-02-12 16:57:03', '2021-04-08 02:02:03'),
(667, 299397, 'Waltonchain', 'WTC', 'WTC', NULL, NULL, -1, NULL, 26878827.15519, NULL, NULL, '2021-05-09 15:01:56', 2.0730829434, 6802185.147597, 1.2685147217986, -1.2034028463624, NULL, 55722038.114022, '/media/37746952/wtc.png', NULL, '2021-02-13 10:36:02', '2021-05-09 22:02:03'),
(668, 916728, 'Egretia', 'EGT', 'EGT', NULL, NULL, -1, NULL, -589934592, NULL, NULL, '2021-02-15 16:30:07', 0.0067889626, 343951701.59106, -21.41774102946, 15.338007631888, NULL, 54311700.8, '/media/34333415/egt.jpg', NULL, '2021-02-14 23:03:04', '2021-02-15 23:30:12'),
(669, 930935, 'IRIS Network', 'IRIS', 'IRIS', NULL, NULL, 0, NULL, 2017554359.2271, NULL, NULL, '2021-05-13 15:02:57', 0.1618381164, 99580982.620785, -0.51386441127578, -17.365750950889, NULL, 326517197.23193, '/media/37746915/iris.png', NULL, '2021-02-16 19:48:03', '2021-05-13 22:04:02'),
(670, 930682, 'MIXMARVEL', 'MIX', 'MIX', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-02-19 05:00:57', 0.0052761575, 2463109.1140993, 0.12458078827575, 12.377022345299, NULL, 52761575, '/media/35650741/mixmarvel.png', NULL, '2021-02-18 12:01:03', '2021-02-19 12:01:02'),
(671, 930697, 'BORA', 'BORA', 'BORA', NULL, NULL, -1, NULL, 1205750000, NULL, NULL, '2021-03-16 16:00:55', 0.3422076791, 876733.15628388, -0.043635173423398, -6.7994549355709, NULL, 412616909.07482, '/media/35650744/bora.png', NULL, '2021-02-19 03:21:02', '2021-03-16 23:02:03'),
(672, 744820, 'Polymath Network', 'POLY', 'POLY', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:54', 0.23665383, 18301385.435379, -0.98166050784236, -4.5845408411471, NULL, 236653830, '/media/27010571/poly.png', NULL, '2021-02-19 06:13:03', '2021-06-08 20:09:03'),
(673, 931871, 'Decentralized Vulnerability Platform', 'DVP', 'DVP', NULL, NULL, -1, NULL, 705032704, NULL, NULL, '2021-02-19 14:07:56', 0.04125147, 0, 0.17325494464161, 1.1764719386496, NULL, 20625.735000011, '/media/35651421/dvp.png', NULL, '2021-02-19 12:24:02', '2021-02-19 21:09:02'),
(674, 213532, 'Gas', 'GAS', 'GAS', NULL, NULL, -1, NULL, 13935116.239122, NULL, NULL, '2021-04-20 00:03:56', 17.232371268, 1246039.0783694, -2.4006857419315, -18.114681672544, NULL, 240135096.69529, '/media/1383858/neo.jpg', NULL, '2021-02-21 11:48:02', '2021-04-20 07:04:03'),
(675, 936880, 'PancakeSwap', 'CAKE', 'CAKE', NULL, NULL, -1, NULL, 181234891.11191, NULL, NULL, '2021-06-15 14:35:59', 17.06777505, 298902.48, -1.5310715362366, -2.8438027106285, NULL, 3093276352.7093, '/media/37747616/cake.png', NULL, '2021-02-24 18:08:04', '2021-06-15 21:36:03'),
(676, 935922, 'Orion Protocol', 'ORN', 'ORN', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-06-08 13:15:57', 6.3740931, 142744.81, -0.75700654085273, -19.297815407692, NULL, 637409310, '/media/37305708/orion.png', NULL, '2021-02-24 18:08:04', '2021-06-08 20:16:02'),
(677, 431235, 'Aion', 'AION', 'AION', NULL, NULL, -1, NULL, 492427074, NULL, NULL, '2021-05-10 09:56:58', 0.5173584372, 23144134.358028, -3.0486683445135, -0.10666912254347, NULL, 254761301.43961, '/media/37746924/aion.png', NULL, '2021-02-26 06:02:04', '2021-05-10 16:57:02'),
(678, 20333, 'Steem', 'STEEM', 'STEEM', NULL, NULL, -1, NULL, 382472022.538, NULL, NULL, '2021-05-08 21:36:53', 1.2637070515, 12093341.501867, 3.1400632418267, 11.197222297096, NULL, 483332591.88274, '/media/350907/steem.png', NULL, '2021-02-26 17:45:03', '2021-05-09 04:37:03'),
(679, 935898, 'FIO Protocol', 'FIO', 'FIO', NULL, NULL, 1000000000, NULL, 754854200.23849, NULL, NULL, '2021-04-26 16:12:56', 0.32058126, 38505297.69394, -1.7147784455628, -2.9121699078538, NULL, 241992110.62875, '/media/37072220/fio.png', NULL, '2021-02-27 04:43:03', '2021-04-26 23:13:03'),
(680, 936826, 'Tokamak Network', 'TON', 'TON', NULL, NULL, -1, NULL, 50000000, NULL, NULL, '2021-06-08 13:15:57', 6.903077115, 2725.48645244, -0.19428853670295, -18.168659577054, NULL, 345153855.75, '/media/37746182/ton.png', NULL, '2021-02-27 07:01:04', '2021-06-08 20:16:02'),
(681, 935346, 'dKargo', 'DKA', 'DKA', NULL, NULL, -1, NULL, 705032704, NULL, NULL, '2021-06-08 13:08:53', 0.1549682792, 451809.43, -0.52218032474317, -10.964086520533, NULL, 774841396, '/media/37746651/dka.png', NULL, '2021-02-27 07:05:03', '2021-06-08 20:09:03'),
(682, 929546, 'Celer Network', 'CELR', 'CELR', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-06-08 13:15:57', 0.035484642, 63513079, 0.73847512183253, -17.189659441145, NULL, 354846420, '/media/37746115/celr.png', NULL, '2021-02-27 19:09:03', '2021-06-08 20:16:02'),
(683, 32699, 'ARK', 'ARK', 'ARK', NULL, NULL, -1, NULL, 157803220, NULL, NULL, '2021-06-08 13:08:54', 1.0995705, 2908132.5763112, 0.03348128384655, -17.897179242942, NULL, 173515765.51701, '/media/37746978/ark.png', NULL, '2021-02-28 04:02:04', '2021-06-08 20:09:03'),
(684, 936841, 'Meme', 'MEME', 'MEME', NULL, NULL, -1, NULL, 27999.75, NULL, NULL, '2021-03-02 19:23:54', 2038.1286, 3758.4538, 17.320758661674, 18.001876516732, NULL, 57067091.26785, '/media/37746276/meme.png', NULL, '2021-02-28 09:18:05', '2021-03-03 02:24:02'),
(685, 339617, 'Power Ledger', 'POWR', 'POWR', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:54', 0.23665383, 12844133.330842, -0.15650767874105, -11.814940993915, NULL, 236653830, '/media/37746985/powr.png', NULL, '2021-02-28 14:25:03', '2021-06-08 20:09:03'),
(686, 935422, '3X Short Cardano Token', 'ADABEAR', 'ADABEAR', NULL, NULL, 2147075955138.7, NULL, 2147075955138.7, NULL, NULL, '2021-03-02 12:11:52', 0.00000365, 685136560, -1.6172506738544, 10.271903323263, NULL, 7836827.2362562, '/media/36935318/ftx.png', NULL, '2021-03-02 11:55:03', '2021-03-02 19:18:03'),
(687, 928382, 'AERGO', 'AERGO', 'AERGO', NULL, NULL, -1, NULL, 500000000, NULL, NULL, '2021-03-27 23:59:54', 0.3861033673, 21860802.792209, 0.087272878165628, 10.096027672388, NULL, 193051683.65, '/media/35309360/aergo.jpg', NULL, '2021-03-04 07:14:02', '2021-03-28 07:01:03'),
(688, 222085, 'Neblio', 'NEBL', 'NEBL', NULL, NULL, -1, NULL, 17566054.633513, NULL, NULL, '2021-03-05 15:01:51', 2.0700377964, 10080747.368788, -0.42971088302186, -12.998871063451, NULL, 36362397.024998, '/media/1384016/nebl.png', NULL, '2021-03-05 00:00:03', '2021-03-05 22:02:03'),
(689, 931523, 'ARPA Chain', 'ARPA', 'ARPA', NULL, NULL, -1, NULL, 1380000000, NULL, NULL, '2021-05-01 16:01:58', 0.108561033, 146099708.23146, 0.081508311478138, 1.2114246163893, NULL, 149814225.54, '/media/35651223/arpa.png', NULL, '2021-03-05 04:03:03', '2021-05-01 23:02:02'),
(690, 936067, 'MiL.k', 'MLK', 'MLK', NULL, NULL, -1, NULL, 1186245419, NULL, NULL, '2021-03-22 11:17:41', 1.4054388866, 242986.52387465, -2.4016501846284, 69.707588748426, NULL, 1667195440.9137, '/media/37072303/mlk.png', NULL, '2021-03-05 12:08:02', '2021-03-22 18:18:02'),
(691, 931693, 'Perlin', 'PERL', 'PERL', NULL, NULL, -1, NULL, 974919572.02946, NULL, NULL, '2021-04-05 18:04:55', 0.2407088208, 126006829, -0.40468112787354, 5.3891479639691, NULL, 234671740.55805, '/media/37746070/perlin.png', NULL, '2021-03-05 13:02:03', '2021-04-06 01:05:03'),
(692, 866363, 'Dock.io', 'DOCK', 'DOCK', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-04-05 05:01:55', 0.1358932404, 120982791.10378, -1.2037713159649, -19.062891104556, NULL, 135893240.4, '/media/30002275/dock.png', NULL, '2021-03-05 18:23:03', '2021-04-05 12:04:02'),
(693, 936590, 'Wing Finance', 'WING', 'WING', NULL, NULL, -1, NULL, 2579807.9888547, NULL, NULL, '2021-03-29 12:21:58', 53.79530772, 214469.448, 0.26839261858297, -9.5436333027735, NULL, 138781564.61895, '/media/37746064/wing.png', NULL, '2021-03-06 08:15:03', '2021-03-29 19:23:02'),
(694, 716574, 'TokenClub', 'TCT', 'TCT', NULL, NULL, -1, NULL, 995239500, NULL, NULL, '2021-05-10 15:25:01', 0.0827475408, 184341395.23, 4.3404244701422, -13.167060939103, NULL, 82353621.132022, '/media/37746954/tct.png', NULL, '2021-03-07 02:02:02', '2021-05-10 22:25:03'),
(695, 179896, 'Populous', 'PPT', 'PPT', NULL, NULL, -1, NULL, 53252246, NULL, NULL, '2021-04-13 07:01:54', 6.23788145, 5220674.1566313, 0.26398274054054, -3.9484224884631, NULL, 332181197.49424, '/media/1383747/ppt.png', NULL, '2021-03-07 22:43:03', '2021-04-13 14:02:03'),
(696, 936181, 'MANTRA DAO', 'OM', 'OM', NULL, NULL, -1, NULL, 220999999.96, NULL, NULL, '2021-03-09 05:05:59', 0.421944639, 5655056.5468, -1.6803368968681, 42.23657259919, NULL, 93249765.202122, '/media/37746163/mantra-dao-om-token.png', NULL, '2021-03-08 20:36:04', '2021-03-09 12:08:03'),
(697, 931674, 'Piction Network', 'PIXEL', 'PIXEL', NULL, NULL, -1, NULL, 987500000, NULL, NULL, '2021-03-16 10:36:54', 0.205878175, 1008036.4836551, 0.66298300054598, 30.389921126952, NULL, 203304697.8125, '/media/37746157/piction-network.png', NULL, '2021-03-09 02:16:04', '2021-03-16 17:37:02'),
(698, 927166, 'Contentos', 'CONT', 'CONT', NULL, NULL, -1, NULL, 4100000000, NULL, NULL, '2021-03-26 07:39:59', 0.0393232448, 605781507, 2.3940244653561, -2.2454274217934, NULL, 161225303.68, '/media/35280522/contentos.png', NULL, '2021-03-10 01:02:02', '2021-03-26 14:41:02'),
(699, 932868, 'Troy', 'TROY', 'TROY', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-04-18 00:26:59', 0.0304798083, 860100226, -0.48263093137412, 5.4305635925151, NULL, 304798083, '/media/36634471/troy.png', NULL, '2021-03-11 09:04:02', '2021-04-18 07:29:02'),
(700, 935965, 'Helium', 'HNT', 'HNT', NULL, NULL, 223000000, NULL, 90091812.010218, NULL, NULL, '2021-06-08 13:15:08', 12.28, 283201.52, -1.523656776263, -12.660028449502, NULL, 1106327451.4855, '/media/37747031/hnt.png', NULL, '2021-03-11 13:02:02', '2021-06-08 20:16:02'),
(701, 938199, '1inch', '1INCH', '1INCH', NULL, NULL, -1, NULL, 1500000000, NULL, NULL, '2021-06-15 14:35:44', 3.555, 1683409.94, -2.4155915454296, -4.8447537473233, NULL, 1037532704, '/media/37747036/1inch.png', NULL, '2021-03-11 17:37:03', '2021-06-15 21:36:03'),
(702, 938107, 'Reef', 'REEF', 'REEF', NULL, NULL, 8946352654.6511, NULL, 8946352654.6511, NULL, NULL, '2021-06-08 13:08:58', 0.02133495, 312404278.50577, 1.2629039666028, -14.853176760191, NULL, 190869986.56935, '/media/37747047/reef.png', NULL, '2021-03-11 18:14:03', '2021-06-08 20:09:03'),
(703, 838328, 'GoChain', 'GO', 'GO', NULL, NULL, -1, NULL, 1124735086, NULL, NULL, '2021-03-12 22:00:56', 0.0519023141, 814502169.49243, 0.090235713161353, -17.806664689765, NULL, 58376353.712863, '/media/36640158/zjtrvlwk_400x400.jpg', NULL, '2021-03-12 09:04:03', '2021-03-13 05:01:03'),
(704, 788409, 'All Sports Coin', 'SOC', 'SOC', NULL, NULL, -1, NULL, 1500000000, NULL, NULL, '2021-03-14 05:18:58', 0.026871856, 58301824.617496, -2.417953856358, -54.46221197432, NULL, 40307784, '/media/27010918/soc.png', NULL, '2021-03-12 21:12:03', '2021-03-14 12:20:03'),
(705, 439963, 'CyberMiles', 'CMT', 'CMT', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-03-14 08:00:01', 0.029020488, 112485893.47558, -0.0052429174304954, 3.1352254350986, NULL, 29020488, '/media/30002257/cmt.png', NULL, '2021-03-13 19:32:03', '2021-03-14 15:00:05'),
(706, 931695, 'EMOGI Network', 'LOL', 'LOL', NULL, NULL, -1, NULL, -474836480, NULL, NULL, '2021-03-13 16:10:55', 0.0011944812, 2185103434.8691, -33.265922194271, 197.23690741643, NULL, 25084105.2, '/media/35651315/lol.png', NULL, '2021-03-13 22:41:08', '2021-03-13 23:11:03'),
(707, 933778, 'WazirX', 'WRX', 'WRX', NULL, NULL, -1, NULL, 989300001, NULL, NULL, '2021-06-08 13:15:57', 1.4781981885, 4673913.441524, -0.61401153754461, -16.294393765915, NULL, 1462381469.3612, '/media/37746933/wrx.png', NULL, '2021-03-14 08:03:07', '2021-06-08 20:16:02'),
(708, 938151, 'Terra Virtua Kolect', 'TVK', 'TVK', NULL, NULL, -1, NULL, 1200000000, NULL, NULL, '2021-06-08 13:08:54', 0.17363367, 13483318, 0.083400282974861, -23.374156926127, NULL, 208360404, '/media/37746277/tvk.png', NULL, '2021-03-15 21:22:03', '2021-06-08 20:09:03'),
(709, 924979, 'Hdac', 'HDAC', 'HDAC', NULL, NULL, -1, NULL, -1442984796, NULL, NULL, '2021-03-16 14:54:51', 0.0727463567, 1289957.3050881, -11.109581277569, 153.85104056572, NULL, 207471336.24716, '/media/34478062/hdac.png', NULL, '2021-03-16 15:09:03', '2021-03-16 21:55:03'),
(710, 901906, 'BitMart Coin', 'BMX', 'BMX', NULL, NULL, -1, NULL, 896826149.09024, NULL, NULL, '2021-03-18 13:43:51', 0.0418196232, 932533197.1, -1.3840061178122, 3.9282155234143, NULL, 37504931.630861, '/media/33842910/bmx.jpg', NULL, '2021-03-17 05:02:03', '2021-03-18 20:44:02'),
(711, 931774, '12Ships', 'TSHP', 'TSHP', NULL, NULL, -1, NULL, 4981037175.988, NULL, NULL, '2021-03-18 02:14:53', 0.031972995, 4259645.2535161, 2.1835963288569, 0.48976297427216, NULL, 159258676.72268, '/media/37746183/tshp.png', NULL, '2021-03-18 09:13:02', '2021-03-18 09:15:03'),
(712, 868276, 'Holo', 'HOT', 'HOT', NULL, NULL, -1, NULL, 1560000000, NULL, NULL, '2021-05-14 17:32:32', 0.01204, 44066041.855966, -0.16583747927031, 10.865561694291, NULL, 18782400, '/media/37746864/hot.png', NULL, '2021-03-18 17:29:02', '2021-05-15 00:36:04'),
(713, 939096, 'Auction', 'AUCTION', 'AUCTION', NULL, NULL, 2279013.337602, NULL, 2279013.337602, NULL, NULL, '2021-03-19 07:01:51', 30.691253942, 488464.16606448, -0.15784058252104, 1.3650802366533, NULL, 69945777.081546, '/media/37746044/auction.png', NULL, '2021-03-18 20:32:02', '2021-03-19 14:02:02'),
(714, 930859, 'Content Value Network', 'CVNT', 'CVNT', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-03-22 13:52:53', 2.88251292, 8454992.3853691, -2.500410993173, 0.076408385907836, NULL, -1412454376, '/media/35650829/cvnt.png', NULL, '2021-03-19 09:02:02', '2021-03-22 20:53:02'),
(715, 928919, 'BitMax Token', 'BTMX', 'BTMX', NULL, NULL, -1, NULL, 743798994.444, NULL, NULL, '2021-06-08 13:15:57', 0.432386934, 121336.5, -0.042377255936891, -1.9200975905828, NULL, 321608966.71992, '/media/35309667/btmx.jpg', NULL, '2021-03-28 01:01:03', '2021-06-08 20:16:02'),
(716, 732098, 'FairGame', 'FAIRG', 'FAIRG', NULL, NULL, -1, NULL, 1200000000, NULL, NULL, '2021-03-27 19:21:50', 0.0190050628, 0, 0.030489592494876, 2.4040048740373, NULL, 22806075.36, '/media/35521307/fair.png', NULL, '2021-03-28 01:01:03', '2021-03-28 02:22:02'),
(717, 42433, 'Private Instant Verified Transaction', 'PIVX', 'PIVX', NULL, NULL, -1, NULL, 65609256.235606, NULL, NULL, '2021-03-29 17:02:54', 1.6338899717, 8445852.0095141, 0.53534093782901, -16.186065248233, NULL, 107198305.81405, '/media/37459237/pivx.png', NULL, '2021-03-29 00:41:03', '2021-03-30 00:03:03'),
(718, 372369, 'Raiden Network', 'RDNN', 'RDNN', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-03-29 16:00:28', 1.4316977052, 41633764.041424, 0.16222091378638, 3.3894938424861, NULL, 143169770.52, '/media/14913482/rdn.png', NULL, '2021-03-29 05:02:02', '2021-03-29 23:02:03'),
(719, 928497, 'Beam', 'BEAM', 'BEAM', NULL, NULL, 262800000, NULL, 68625585.2081, NULL, NULL, '2021-04-14 18:01:52', 1.5859916487, 6808241.8667155, -0.81237099683869, -12.100270010105, NULL, 108839605.0272, '/media/35309429/v3jr4j6q_400x400.jpg', NULL, '2021-04-12 04:21:04', '2021-04-15 01:02:02'),
(720, 5015, 'ViaCoin', 'VIA', 'VIA', NULL, NULL, -1, NULL, 23173944.26803, NULL, NULL, '2021-04-22 16:27:55', 1.7061839294, 24283850.953204, 0.77215757597303, -16.935907622173, NULL, 39539011.290924, '/media/37747107/via.png', NULL, '2021-04-12 04:21:04', '2021-04-22 23:28:03'),
(721, 757969, 'BiboxCoin', 'BIX', 'BIX', NULL, NULL, -1, NULL, 235972808.27, NULL, NULL, '2021-04-11 21:22:59', 0.369368844, 13250379.411029, -1.2821292256256, 47.300566874429, NULL, 87161003.406124, '/media/37746994/bix.png', NULL, '2021-04-12 04:21:04', '2021-04-12 04:23:02'),
(722, 931795, 'Gatechain Token', 'GT', 'GT', NULL, NULL, -1, NULL, 186481418.79249, NULL, NULL, '2021-06-08 13:15:57', 4.15958859, 209892.32398252, -0.19428853670296, -12.560989854352, NULL, 775685981.85627, '/media/37747632/gt.png', NULL, '2021-04-12 09:11:03', '2021-06-08 20:16:02'),
(723, 931881, 'ForTube', 'FOR', 'FOR', NULL, NULL, -1, NULL, 991227671.9, NULL, NULL, '2021-04-26 22:59:58', 0.0959666077, 462267658.38611, -2.3364657341916, 29.549293913706, NULL, 95124757.130612, '/media/37622107/for.png', NULL, '2021-04-12 15:19:03', '2021-04-27 06:01:02'),
(724, 713186, 'Data', 'DTA', 'DTA', NULL, NULL, -1, NULL, 1314940539.5718, NULL, NULL, '2021-04-13 14:24:57', 0.00251186, 684838670.019, -0.0076749979140669, 4.8529063823414, NULL, 3302946.5437287, '/media/25792680/dta.png', NULL, '2021-04-12 23:10:03', '2021-04-13 21:27:02'),
(725, 4440, 'Einsteinium', 'EMC2', 'EMC2', NULL, NULL, -1, NULL, 221506894.5, NULL, NULL, '2021-04-14 00:39:57', 0.6052090884, 1538743.6417757, -10.67446577074, 2.6010975209533, NULL, 134057985.69466, '/media/37459315/emc2.png', NULL, '2021-04-14 02:26:02', '2021-04-14 07:40:03'),
(726, 930779, 'Wirex Token', 'WXT', 'WXT', NULL, NULL, -1, NULL, 9999999874.815, NULL, NULL, '2021-04-19 14:46:59', 0.0248444865, 436411131.96577, -4.7262534069745, -4.3132234586876, NULL, 248444861.88984, '/media/35650786/wxt.png', NULL, '2021-04-18 22:37:03', '2021-04-19 21:47:03'),
(727, 930369, 'Function X', 'FUNX', 'FUNX', NULL, NULL, -1, NULL, 378604525.46289, NULL, NULL, '2021-04-19 06:01:57', 0.9309213912, 3560816.1463434, 0.21123490676871, 57.393811123367, NULL, 352451051.55853, '/media/35650553/funx.png', NULL, '2021-04-19 10:02:03', '2021-04-19 13:02:03'),
(728, 938007, 'Mirror Protocol', 'MIRROR', 'MIRROR', NULL, NULL, -1, NULL, 0, NULL, NULL, '2021-05-05 17:14:52', 10.854673806, 1186355.28, 0.0041768084797552, -7.2084644433214, NULL, 0, '/media/37747354/mir.png', NULL, '2021-04-20 16:50:03', '2021-05-06 00:15:03'),
(729, 659770, 'GXChain', 'GXC', 'GXC', NULL, NULL, 100000000, NULL, 99229293.73444, NULL, NULL, '2021-05-13 18:42:58', 1.0976081954, 17083760.007837, -3.6077261220519, -18.903703824402, NULL, 108914886.02668, '/media/37747541/gxc.png', NULL, '2021-04-25 01:35:02', '2021-05-14 01:43:03'),
(730, 936852, 'BakeryToken', 'BAKE', 'BAKE', NULL, NULL, -1, NULL, 693553682.13395, NULL, NULL, '2021-06-12 07:07:53', 3.17929444, 4547.49893194, 2.8042189931911, 8.2594567574341, NULL, 2205011365.45, '/media/37746920/bake.png', NULL, '2021-04-27 21:28:03', '2021-06-12 14:09:03'),
(731, 936629, 'Dego Finance', 'DEGO', 'DEGO', NULL, NULL, -1, NULL, 8915542.7097171, NULL, NULL, '2021-04-30 01:01:56', 14.96882028, 10107.45781241, -0.3322401974576, -17.080207227276, NULL, 133455156.52042, '/media/37746279/dego.png', NULL, '2021-04-28 10:02:02', '2021-04-30 08:02:03'),
(732, 937013, 'DODO', 'DODO', 'DODO', NULL, NULL, 1000000000, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:57', 1.411389, 600036.2, -0.57245907089665, -18.055555700704, NULL, 1411389000, '/media/37747680/dodo.png', NULL, '2021-04-29 15:39:03', '2021-06-08 20:09:03'),
(733, 936494, 'Swerve', 'SWRV', 'SWRV', NULL, NULL, -1, NULL, 13981196.919011, NULL, NULL, '2021-05-01 01:01:39', 2.3461334381, 281208.43907055, -0.9021587207042, -8.2909371712823, NULL, 32801753.596352, '/media/37305490/swrv.png', NULL, '2021-04-30 04:07:02', '2021-05-01 08:03:02'),
(734, 4618, 'SysCoin', 'SYS', 'SYS', NULL, NULL, 888000000, NULL, 611556902.73894, NULL, NULL, '2021-05-07 03:49:52', 0.5229981405, 116825152.40975, -1.0252166790533, -42.447489347155, NULL, 319843122.9424, '/media/36798499/unytrhxp_400x400.jpg', NULL, '2021-04-30 09:03:03', '2021-05-07 10:50:02'),
(735, 937475, 'Small Love Potion', 'SLP', 'SLP', NULL, NULL, -1, NULL, 404090637, NULL, NULL, '2021-05-02 11:33:57', 0.383245005, 173127372.65, 1.4812453885672, 25.820159922216, NULL, 154865718.19752, '/media/37746624/small-love-potion-trans.png', NULL, '2021-04-30 21:13:03', '2021-05-02 18:35:03'),
(736, 931123, 'CNNS', 'CNNS', 'CNNS', NULL, NULL, -1, NULL, 1402507408, NULL, NULL, '2021-05-09 16:25:52', 0.0103798746, 188783019.91468, -4.8378605037283, -18.912583990938, NULL, 103720294.90777, '/media/35650971/cnns.png', NULL, '2021-05-09 21:15:05', '2021-05-09 23:26:02'),
(737, 683827, 'Telcoin', 'TEL', 'TEL', NULL, NULL, -1, NULL, 1215752192, NULL, NULL, '2021-06-15 14:36:01', 0.0323721456, 37015096.239695, -1.1863047838006, -2.1385159291068, NULL, -1057752736, '/media/25792569/tel.png', NULL, '2021-05-10 07:02:02', '2021-06-15 21:36:03'),
(738, 900419, 'Endor Protocol Token', 'EPT', 'EPT', NULL, NULL, -1, NULL, 1469212017.4378, NULL, NULL, '2021-05-12 07:44:58', 0.0765232728, 5512634.1922602, -0.68472397358168, 42.880085701083, NULL, 112428912.01143, '/media/33752291/endor.png', NULL, '2021-05-12 04:56:03', '2021-05-12 14:45:02'),
(739, 932263, 'MX Token', 'MX', 'MX', NULL, NULL, -1, NULL, 575030518.48, NULL, NULL, '2021-06-08 13:16:02', 0.8000472525, 1160736.4718456, 0.052246773622198, -13.568519416562, NULL, 460051586.41357, '/media/35651616/mx.png', NULL, '2021-05-12 08:33:03', '2021-06-08 20:16:02'),
(740, 935292, 'Arweave', 'AR', 'AR', NULL, NULL, 66000000, NULL, 64183456.462021, NULL, NULL, '2021-05-14 17:35:56', 32.455108008, 92506.00941636, 5.2583388699587, 21.750841078093, NULL, 2083081011.8017, '/media/37747131/ar.png', NULL, '2021-05-14 16:03:02', '2021-05-15 00:36:04'),
(741, 936528, 'Amp', 'AMP', 'AMP', NULL, NULL, -1, NULL, 99217014766.321, NULL, NULL, '2021-06-15 14:35:44', 0.09311, 423769387.37015, -1.9894736842105, 38.990894163308, NULL, 9238096244.8921, '/media/37747162/amp.png', NULL, '2021-05-15 00:35:03', '2021-06-15 21:36:03'),
(742, 936865, 'TitanSwap', 'TITAN', 'TITAN', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-15 14:36:01', 4.48679974, 24140.96, -1.7081597233997, 4.2862758941515, NULL, 191832444, '/media/37305672/titan.png', NULL, '2021-05-19 12:12:02', '2021-06-15 21:36:03'),
(743, 939986, 'Anchor Protocol', 'ANC', 'ANC', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-15 14:36:01', 2.70276876, 5967.52516536, -0.71754406953338, -2.8249922454684, NULL, -1592198536, '/media/37747069/anc.png', NULL, '2021-05-19 17:33:04', '2021-06-15 21:36:03'),
(744, 930571, 'LEO Token', 'LEO', 'LEO', NULL, NULL, -1, NULL, 951157629.9, NULL, NULL, '2021-06-14 21:00:52', 2.7, 133568.91376866, -0.4424778761062, -3.4680014301037, NULL, 2568125600.73, '/media/35650675/leo.png', NULL, '2021-05-19 19:58:03', '2021-06-15 04:01:02'),
(745, 938007, 'Mirror Protocol', 'MIR', 'MIR', NULL, NULL, -1, NULL, 370575000, NULL, NULL, '2021-06-08 13:15:57', 4.261442655, 174055.14, -0.11727795687014, -10.145543494622, NULL, 1579184111.8766, '/media/37747354/mir.png', NULL, '2021-05-19 20:10:04', '2021-06-08 20:16:02'),
(746, 933001, 'Xinfin Network', 'XDC', 'XDC', NULL, NULL, -1, NULL, -982958561, NULL, NULL, '2021-06-08 12:43:13', 0.04965, 1382831.3225763, 0, -8.6476540938363, NULL, 1870402243.6639, '/media/37072107/xdc-logocc.png', NULL, '2021-05-19 20:10:04', '2021-06-08 20:16:02'),
(747, 936422, 'TerraUSD', 'UST', 'UST', NULL, NULL, -1, NULL, 1907523728.0113, NULL, NULL, '2021-06-08 13:08:54', 0.99946035, 50917.88587934, -0.29498686365264, 0.04626735341069, NULL, 1906494332.8315, '/media/37305450/ust.png', NULL, '2021-05-19 20:16:03', '2021-06-08 20:09:03'),
(748, 935924, 'DeFiChain', 'DFI', 'DFI', NULL, NULL, 1200000000, NULL, 447693268.58923, NULL, NULL, '2021-06-08 13:15:57', 3.59446281, 148092.22404769, -0.64836365710011, -1.6074618637827, NULL, 1609216804.2313, '/media/37459025/dfi.png', NULL, '2021-05-19 20:21:05', '2021-06-08 20:16:02'),
(749, 66193, 'Gnosis', 'GNO', 'GNO', NULL, NULL, -1, NULL, 10000000, NULL, NULL, '2021-06-08 13:08:53', 172.0816468, 688.94073998, -1.6559062105148, -8.7797209939117, NULL, 1720816468, '/media/1383083/gnosis-logo.png', NULL, '2021-05-19 20:21:05', '2021-06-08 20:09:03'),
(750, 941276, 'Internet Computer', 'ICP', 'ICP', NULL, NULL, -1, NULL, 470334535.87467, NULL, NULL, '2021-06-15 14:35:52', 59.22, 983343.008, -3.6603221083455, -10.530291584832, NULL, 27853211214.498, '/media/37747502/icp.png', NULL, '2021-05-26 22:40:03', '2021-06-15 21:36:03'),
(751, 928755, 'HedgeTrade', 'HEDG', 'HEDG', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-07 04:48:56', 2.4966311657, 32828.06531519, -1.2048951506252, 79.621096717213, NULL, 2496631165.7, '/media/35309585/hedg.png', NULL, '2021-06-06 12:35:03', '2021-06-07 11:50:02'),
(752, 930803, 'Bitpanda Ecosystem Token', 'BEST', 'BEST', NULL, NULL, -1, NULL, 860463935.9, NULL, NULL, '2021-06-08 13:15:57', 1.2974893635, 10070.8541, 0.16080166926559, -4.0296850551216, NULL, 1116442804.5056, '/media/37747365/best-2.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:16:02'),
(753, 930480, 'Pirate Chain', 'ARRR', 'ARRR', NULL, NULL, 200000000, NULL, 182463887.14702, NULL, NULL, '2021-06-08 13:15:57', 5.05327587, 56102.63076954, -7.417862345868, -5.8490462212244, NULL, 922040358.06644, '/media/37747379/arrr.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:16:02'),
(754, 936869, 'Crust Network', 'CRU', 'CRU', NULL, NULL, -1, NULL, 20000000, NULL, NULL, '2021-06-08 13:08:53', 45.527545, 8160.7354, 0.44048782937597, -11.51266934022, NULL, 910550900, '/media/37305674/cru.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(755, 934491, 'Homeros', 'HMR', 'HMR', NULL, NULL, -1, NULL, 1410065408, NULL, NULL, '2021-06-08 13:15:57', 0.0896972895, 4735601.15, -0.19428853670293, -8.5167245966062, NULL, 896972895, '/media/36934982/hmr.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:16:02'),
(756, 939147, 'Mdex', 'MDX', 'MDX', NULL, NULL, 400000000, NULL, 400000000, NULL, NULL, '2021-06-08 13:08:53', 2.05061052, 25021.67219298, -1.2906891016353, -7.9024518697341, NULL, 820244208, '/media/37746075/mdx1.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(757, 926589, 'Livepeer', 'LPT', 'LPT', NULL, NULL, -1, NULL, 23724918.302081, NULL, NULL, '2021-06-08 13:08:54', 25.3295091, 12865.70144616, -0.29498686365265, -1.3417812839278, NULL, 600940534.02932, '/media/35264132/lpt.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(758, 934997, 'LUKSO', 'LYXE', 'LYXE', NULL, NULL, -1, NULL, 100000000, NULL, NULL, '2021-06-08 13:15:57', 5.35848672, 33891.39675741, -1.2957988168022, -16.31892561386, NULL, 535848672, '/media/37746675/lyxe-2.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:16:02'),
(759, 934334, 'Energy Web Token', 'EWT', 'EWT', NULL, NULL, 100000000, NULL, 63143961.319483, NULL, NULL, '2021-06-08 13:15:57', 8.47031547, 64610.4337162, -0.73336259553249, -14.371441645708, NULL, 534849272.4015, '/media/36934896/ewt.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:16:02'),
(760, 938629, 'TrueFi', 'TRU', 'TRU', NULL, NULL, 1441129426.9854, NULL, 1441129426.9854, NULL, NULL, '2021-06-08 13:15:57', 0.2815772055, 1868757.1733807, -0.19428853670295, -15.626098221146, NULL, 405789196.81435, '/media/37747178/tru.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:16:02'),
(761, 932902, 'Neutrino USD', 'USDN', 'USDN', NULL, NULL, -1, NULL, 357373151.27374, NULL, NULL, '2021-06-08 13:08:53', 1.0156293892772, 3738.0193043969, -0.047187411373122, 0.23797387996004, NULL, 362958675.37223, '/media/37747683/usdn.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(762, 934102, 'Ergo', 'ERG', 'ERG', NULL, NULL, 97739924.5, NULL, 37951875, NULL, NULL, '2021-06-08 13:08:53', 8.8435697, 7468.59232042, -0.048062674677163, -14.934681758489, NULL, 335630051.80819, '/media/36798665/erg.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(763, 936208, 'renBTC', 'RENBTC', 'RENBTC', NULL, NULL, -1, NULL, 10225.82652919, NULL, NULL, '2021-06-08 13:08:53', 32655.0994, 1.64506, -0.33001454301376, -10.041647711559, NULL, 333925381.75786, '/media/37072378/renbtc.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(764, 936465, 'MATH', 'MATH', 'MATH', NULL, NULL, -1, NULL, 200000000, NULL, NULL, '2021-06-08 12:51:50', 1.467, 32849, 0, -3.9921465968586, NULL, 293400000, '/media/37305476/math.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(765, 5293, 'MaidSafe Coin', 'MAID', 'MAID', NULL, NULL, -1, NULL, 452552412, NULL, NULL, '2021-06-08 13:15:57', 0.6574515615, 693475.78232795, 0.86425688790779, -10.989966895755, NULL, 297531289.92999, '/media/352247/maid.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:16:02'),
(766, 938060, 'Badger DAO', 'BADGER', 'BADGER', NULL, NULL, -1, NULL, 21000000, NULL, NULL, '2021-06-08 13:08:54', 13.1653053, 78524.353939605, -0.51820704231611, -13.495403509255, NULL, 276471411.3, '/media/37746462/badger-dao-trans.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(767, 936623, 'REVV', 'REVV', 'REVV', NULL, NULL, -1, NULL, -1294967296, NULL, NULL, '2021-06-08 13:08:53', 0.090805624, 26260314, -0.4940353638426, -19.443764904198, NULL, 272416872, '/media/37746273/revv.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(768, 934316, 'USDJ', 'USDJ', 'USDJ', NULL, NULL, -1, NULL, 269462447.29786, NULL, NULL, '2021-06-08 13:08:54', 1.0013795931268, 65639.841855244, -0.29498686365272, 1.3074947894581, NULL, 269834195.83809, '/media/34477805/trx.jpg', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(769, 931402, 'GNY', 'GNY', 'GNY', NULL, NULL, 400000000, NULL, 400000000, NULL, NULL, '2021-06-08 13:08:54', 0.6498954, 403970, -0.29498686365264, -7.7021542347543, NULL, 259958160, '/media/35651155/gny.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(770, 936821, 'PowerTrade Fuel', 'PTF', 'PTF', NULL, NULL, -1, NULL, 400000000, NULL, NULL, '2021-06-08 13:08:54', 0.59343984, 797.5, -0.29498686365265, -1.5548054419584, NULL, 237375936, '/media/37305648/ptf.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(771, 931131, 'Ampleforth', 'AMPL', 'AMPL', NULL, NULL, -1, NULL, 272556357.14513, NULL, NULL, '2021-06-08 13:05:28', 0.8467, 629152.57126517, -0.35306578792515, -5.7546749777382, NULL, 230773467.59478, '/media/35650976/ampl.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(772, 939661, 'Kylin Network', 'KYL', 'KYL', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:53', 0.227263526, 87918.22616903, -0.11071864541863, -22.205151847772, NULL, 227263526, '/media/37746445/kyl.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(773, 924823, 'Syntropy', 'NOIA', 'NOIA', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:54', 0.20809782, 775511.49494432, -1.0751512856898, -20.187852379501, NULL, 208097820, '/media/37747384/noia-2.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(774, 934479, 'DEAPCOIN', 'DEP', 'DEP', NULL, NULL, -1, NULL, -64771072, NULL, NULL, '2021-06-08 13:08:54', 0.00689283, 2821177.5845045, -0.29498686365264, -5.0940408657818, NULL, 206784900, '/media/36934976/dep.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(775, 930024, 'RedFOX Labs', 'RFOX', 'RFOX', NULL, NULL, -1, NULL, 2000000000, NULL, NULL, '2021-06-08 13:08:53', 0.0849182264, 235516.14244648, -0.33001454301378, -4.8916351274828, NULL, 169836452.8, '/media/37746249/rfox.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(776, 939330, 'Bondly', 'BONDLY', 'BONDLY', NULL, NULL, -1, NULL, 983620758.62069, NULL, NULL, '2021-06-08 13:08:53', 0.1583610168, 3246059.6591065, 0.09572341100279, -13.056741173772, NULL, 155767183.48076, '/media/37746260/bondly.png', NULL, '2021-06-08 20:09:03', '2021-06-08 20:09:03'),
(777, 928790, 'Quant', 'QNT', 'QNT', NULL, NULL, -1, NULL, 35921234.049011, NULL, NULL, '2021-06-08 13:15:57', 42.1872966, 7023.73755505, -0.19428853670294, -6.3115268910299, NULL, 1515419755.0636, '/media/35309600/qnt.jpg', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(778, 418694, 'Uquid Coin', 'UQC', 'UQC', NULL, NULL, -1, NULL, 40000000, NULL, NULL, '2021-06-08 13:15:57', 23.521717785, 15442.71274767, 4.2622338196036, -9.9622255799848, NULL, 940868711.4, '/media/16746443/uqc.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(779, 939074, 'DAO Maker', 'DAO', 'DAO', NULL, NULL, -1, NULL, 306349749, NULL, NULL, '2021-06-08 13:15:57', 2.82143784, 21237.01978704, -0.76949840895692, -11.530813287825, NULL, 864346774.1031, '/media/37746504/dao.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(780, 934099, 'Sologenic', 'SOLO', 'SOLO', NULL, NULL, 400000000, NULL, 399996351.9856, NULL, NULL, '2021-06-08 13:14:59', 1.341, 168171.2447, -0.22321428571429, 42.629227823867, NULL, 536395108.01269, '/media/37747160/solo.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(781, 542140, 'MediBloc', 'MEDIB', 'MEDIB', NULL, NULL, -1, NULL, 8531612390.8936, NULL, NULL, '2021-06-08 13:15:57', 0.0564287568, 266906.88480016, -0.50675215584737, -17.182407524966, NULL, 481428280.7176, '/media/16746766/med.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(782, 939961, 'Oxygen', 'OXY', 'OXY', NULL, NULL, -1, NULL, 200000000, NULL, NULL, '2021-06-08 12:49:23', 2, 117712, 0, -5.2581714827096, NULL, 400000000, '/media/37746641/oxy.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(783, 932906, 'Brazilian Digital Token', 'BRZ', 'BRZ', NULL, NULL, -1, NULL, 2000000000, NULL, NULL, '2021-06-08 13:15:58', 0.1646093115, 1593010.5411023, -0.19428853670295, -6.3440902747474, NULL, 329218623, '/media/36639804/brz.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(784, 931955, 'Ultra', 'ULTRA', 'ULTRA', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:08:13', 0.3682, 729878.03818962, -0.1085187194791, -18.050300467394, NULL, 368200000, '/media/37746246/ultra.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02');
INSERT INTO `tbl_bitcoin_values` (`tbl_id`, `id`, `name`, `symbol`, `slug`, `num_market_pairs`, `date_added`, `max_supply`, `circulating_supply`, `total_supply`, `platform`, `cmc_rank`, `last_updated`, `price`, `volume_24h`, `percent_change_1h`, `percent_change_24h`, `percent_change_7d`, `market_cap`, `img_url`, `lasts_updated`, `created_at`, `updated_at`) VALUES
(785, 916813, 'CoinEx Token', 'CET', 'CET', NULL, NULL, -1, NULL, 5868849037.6132, NULL, NULL, '2021-06-08 13:15:57', 0.0572270416, 2369982.4188457, -0.069443365673373, -9.7661187495052, NULL, 335856868.01961, '/media/30002253/coinex.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(786, 934995, 'Trust Wallet Token', 'TWT', 'TWT', NULL, NULL, -1, NULL, 1000000000, NULL, NULL, '2021-06-08 13:15:57', 0.3065478795, 30462614, -0.30114690015401, -23.397512658074, NULL, 306547879.5, '/media/37747700/twt.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(787, 936754, 'LGCY Network', 'LGCY', 'LGCY', NULL, NULL, -1, NULL, 87347782078, NULL, NULL, '2021-06-08 13:15:57', 0.0032929248, 247959942, -0.33081360970387, -7.0721540105532, NULL, 287629677.82964, '/media/37305613/lgcy.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02'),
(788, 932177, 'PAX Gold', 'PAXG', 'PAXG', NULL, NULL, -1, NULL, 144694.879, NULL, NULL, '2021-06-08 13:15:57', 1905.9852615, 3461.00247835, 0.047162985758811, 0.60622448453145, NULL, 275786306.78853, '/media/37747633/paxg.png', NULL, '2021-06-08 20:16:02', '2021-06-08 20:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ref` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci,
  `role` int(100) DEFAULT '2',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `admin_view` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `user_ref`, `email`, `email_verified_at`, `password`, `remember_token`, `phone`, `address`, `profile_photo_path`, `role`, `created_at`, `updated_at`, `admin_view`) VALUES
(2, 'Admin', NULL, 'Info@ismcapitals.com', '2021-02-15 23:49:49', '$2y$10$2wr.VAAmB9gMzMYXpXevwO11S3yRq75guQnA2n4cuOoEk.ASXLNCe', '5qPPtvbiI3JGsx8cAhbRx6o2YVjzIo8GG6ZY4zrEkUC30T5hERWOUI6MWvQz', NULL, NULL, '1613460451602b73e333fb6.jpg', 1, '2020-12-22 19:26:36', '2021-04-30 02:42:00', 'yes'),
(18, 'Ism Capital', NULL, 'ismcapital2@gmail.com', '2021-02-15 23:49:49', '$2y$10$VCK/J/a06.QIgVYHvrxsVOmTJgSLjUV6gi9fp9F6uxlBGUBZ9CxgK', 'su9nKppGxcAHeQNH1Tm4jaXDk4QHiWsefxlM7q07us2mjiooBtu4Qs36Wsm1', NULL, NULL, NULL, 2, '2021-02-15 23:37:31', '2021-04-28 01:13:45', 'yes'),
(19, 'khan', NULL, 'khan@gmail.com', NULL, '$2y$10$/4qeR2CaHje3B7n0ji8o7.AsxZ3hICfe0Gnl/mpg5WEKMg7xljEXy', NULL, NULL, NULL, NULL, 2, '2021-02-19 01:05:39', '2021-04-07 15:13:36', 'yes'),
(20, 'Brunild Muskaj', NULL, 'brunomuskaj2@gmail.com', NULL, '$2y$10$DZ.6GJj8F07BzrQ7BLlzqecyPU7uq2J1PKEav3cCMhoCqdnRLQgfi', 'rAqsPCvfkOnMRXhBx6A0FiP0DyTRmO4p5zNBljd1QodBE6KytqFflmx34OuZ', NULL, NULL, NULL, 2, '2021-03-23 07:00:10', '2021-04-07 15:13:36', 'yes'),
(21, 'Saadiqah', NULL, 'saadiqahabrahams25@gmail.com', '2021-03-27 17:53:20', '$2y$10$PjGg9Mm4GSnd1SnoF.CeQufYcOyN4qrD7C9KEE4T9spLtP5fr7h36', 'zvnFuSdA18OLIfzTDLHEg0Fb8PTFOIdxZSJJLrZGcy3Rrp9RrkO14fZoiJgb', NULL, NULL, NULL, 2, '2021-03-27 17:51:11', '2021-04-07 15:13:36', 'yes'),
(22, 'Keith barisa', NULL, 'barikeith@gmail.com', NULL, '$2y$10$DK3guTFE0Xe4AwXCtOa1KOC2J.LSjqELrNJUp3C/IulQk.408od3K', NULL, NULL, NULL, NULL, 2, '2021-03-27 21:59:06', '2021-04-07 15:13:36', 'yes'),
(23, 'Eesa Wiskey', NULL, 'eesawiskey920@gmail.com', NULL, '$2y$10$1ouSC7OAg8wv/JDClufWZ.f0qblizfBOBT27pe0uP1cgYfhpMtGXe', NULL, NULL, NULL, NULL, 2, '2021-03-30 11:40:00', '2021-04-07 15:13:36', 'yes'),
(24, 'Ian Mwaniki', NULL, 'ianmwaniki89@gmail.com', '2021-04-03 17:14:57', '$2y$10$Moo.Qe7SJQuC9nTVjZy6xOywD37XgrEGFu7EEskxRviNGoPeQZbP.', 'RVPn5Tm69RvUwxgOpfijTD2aMKSxiHzoW9Mhb41xoA4bsVJLz2DWdSWr11Sp', NULL, NULL, NULL, 2, '2021-04-03 17:12:20', '2021-04-07 15:13:36', 'yes'),
(25, 'Sinqobile Dimema', NULL, 'sinqobile1@icloud.com', NULL, '$2y$10$44rsbAasbiG9kTQMGzdKYOr4P7o/OachyM36m9LhnHhUGGWLT1viW', NULL, NULL, NULL, NULL, 2, '2021-04-06 20:22:14', '2021-04-07 15:13:36', 'yes'),
(26, 'Masimbonge', NULL, 'masimbongendlovu4@gmail.com', NULL, '$2y$10$3CfKBkkWaBQjPfWFpEYjrO5atQgmdKWwA9nSUsKqKEY5OYY1TCdXW', NULL, NULL, NULL, NULL, 2, '2021-04-07 16:45:01', '2021-04-07 17:37:54', 'yes'),
(27, 'Kudusaliu', NULL, 'kudusaliu1234@gmail.com', '2021-04-14 13:59:15', '$2y$10$HkJCnFpbErwXJGlSQLFLPO9d1M3IZDaNVJeEMY5K6mno9GU0/C1za', NULL, '+2348168554877', '207 Ojo Igbede Road ajangbadi', '1618383747607693836b7f4.jpeg', 2, '2021-04-14 13:57:07', '2021-04-15 17:19:52', 'yes'),
(28, 'Isa', NULL, 'sarkiisa1@gmail.com', '2021-04-23 09:35:14', '$2y$10$s8s2Vi/SUujmpS5NxpsymeqMy1vQlgNnmubQ5AYaYEkdSH7eZto5G', NULL, '+2347064396272', '1 Ilogbo road Ilemba Hausa Ojo lagos Nigeria', '1619145638608233a670e8f.jpg', 2, '2021-04-23 09:33:23', '2021-04-25 18:27:14', 'yes'),
(29, 'Sunday folashade', NULL, 'sundayfolashade704@gmail.com', '2021-04-25 20:04:06', '$2y$10$rYMQtrel.Not7LS1x0A/0OqFLs.gogAh3U7D9GlP4hPTN1qm5Fw6u', NULL, NULL, NULL, NULL, 2, '2021-04-25 19:39:48', '2021-04-25 20:04:06', 'yes'),
(30, 'Olufunmi', NULL, 'sikkyrheartolufunmi@gmail.com', NULL, '$2y$10$invXcY8y.7hCo8wPZXsb2.LioMwD4D5RrlJ9rStqRxQe53xgxkW/2', NULL, NULL, NULL, NULL, 2, '2021-04-26 01:10:37', '2021-04-27 00:48:45', 'yes'),
(39, 'faisal abbas', '0000001886', 'faisalsehar786@gmail.com', '2021-04-27 16:11:06', '$2y$10$QpThB0eQYozRGHYHHb2SReDjUgduoazhKmwmoMNpWv.aGnYTdxXgO', 'BaFdj9csJnwrOqqLzaExQlQfWQuGzUxcGjv2sOHMQthm5D85sIny5L5XM0M3', NULL, NULL, '16195217846087f0f830baf.jpg', 2, '2021-04-27 16:06:16', '2021-04-27 18:09:44', 'yes'),
(40, 'KingStar', '0000001594', 'Kingstar2019999@gmail.com', NULL, '$2y$10$EmtJK/BojA8TrBgDp0cdvOzFwW3.MxpZJy07mDRb8IlIcnqEOcmb6', NULL, NULL, NULL, NULL, 2, '2021-05-06 20:46:41', '2021-05-20 13:18:09', 'yes'),
(41, 'Johan', '0000003773', 'jsforex@icloud.com', NULL, '$2y$10$PH8Zdk5oq6w6kVHAw.pNQegvAw.JrCBciFkWlT3d77LLRYOjHZXJO', NULL, NULL, NULL, NULL, 2, '2021-05-12 22:30:24', '2021-05-20 13:18:09', 'yes'),
(42, 'Francisco José Prieto Müller', '0000002295', 'cypher_ninjutsu@pm.me', '2021-05-14 06:57:02', '$2y$10$cwHfUdrQ6/lRHYkAWrbutumOBAGEFxrcYlC2wxsbTAql8BJiWyPNm', NULL, NULL, NULL, NULL, 2, '2021-05-14 06:44:49', '2021-05-20 13:18:09', 'yes'),
(43, 'locas', '0000003172', 'yaaya9540@hotmail.com', NULL, '$2y$10$Wb6/bzplTMOhszsh2LKJ0.9eq2T.0P4PJEbiknoMOxmpj.ZeN1zLS', NULL, NULL, NULL, NULL, 2, '2021-05-25 13:42:47', '2021-05-30 19:07:09', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_email_unique` (`email`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commission_values`
--
ALTER TABLE `commission_values`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metaTags`
--
ALTER TABLE `metaTags`
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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recived_order_tbl`
--
ALTER TABLE `recived_order_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bitcoin_values`
--
ALTER TABLE `tbl_bitcoin_values`
  ADD PRIMARY KEY (`tbl_id`);

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
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `commission_values`
--
ALTER TABLE `commission_values`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metaTags`
--
ALTER TABLE `metaTags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `recived_order_tbl`
--
ALTER TABLE `recived_order_tbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `tbl_bitcoin_values`
--
ALTER TABLE `tbl_bitcoin_values`
  MODIFY `tbl_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=789;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
