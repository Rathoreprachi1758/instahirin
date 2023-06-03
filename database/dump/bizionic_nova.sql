-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 03, 2023 at 01:04 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizionic_nova`
--

-- --------------------------------------------------------

--
-- Table structure for table `action_events`
--

CREATE TABLE `action_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actionable_id` bigint(20) UNSIGNED NOT NULL,
  `target_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fields` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'running',
  `exception` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `original` mediumtext COLLATE utf8mb4_unicode_ci,
  `changes` mediumtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `action_events`
--

INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`) VALUES
(1, '9943d18e-6ca6-4cb1-9bae-60552cf205f9', 1, 'Create', 'App\\Models\\ExpertCategory', 1, 'App\\Models\\ExpertCategory', 1, 'App\\Models\\ExpertCategory', 1, '', 'finished', '', '2023-05-27 00:32:56', '2023-05-27 00:32:56', NULL, '{\"title\":\"Web & Mobile\",\"updated_at\":\"2023-05-27T05:32:56.000000Z\",\"created_at\":\"2023-05-27T05:32:56.000000Z\",\"id\":1}'),
(2, '9943d1ac-9ee7-40ec-86e4-5484530d4787', 1, 'Create', 'App\\Models\\ExpertCategory', 2, 'App\\Models\\ExpertCategory', 2, 'App\\Models\\ExpertCategory', 2, '', 'finished', '', '2023-05-27 00:33:16', '2023-05-27 00:33:16', NULL, '{\"title\":\"Social Media & Online Marketing\",\"updated_at\":\"2023-05-27T05:33:16.000000Z\",\"created_at\":\"2023-05-27T05:33:16.000000Z\",\"id\":2}'),
(3, '9943d1d3-d714-40a3-8924-8ff755db19d9', 1, 'Create', 'App\\Models\\ExpertCategory', 3, 'App\\Models\\ExpertCategory', 3, 'App\\Models\\ExpertCategory', 3, '', 'finished', '', '2023-05-27 00:33:41', '2023-05-27 00:33:41', NULL, '{\"title\":\"Salesforce experts\",\"updated_at\":\"2023-05-27T05:33:41.000000Z\",\"created_at\":\"2023-05-27T05:33:41.000000Z\",\"id\":3}'),
(4, '9943d24b-f666-4905-80d1-9e52562c3452', 1, 'Create', 'App\\Models\\Experty', 1, 'App\\Models\\Experty', 1, 'App\\Models\\Experty', 1, '', 'finished', '', '2023-05-27 00:35:00', '2023-05-27 00:35:00', NULL, '{\"title\":\"CRM\",\"updated_at\":\"2023-05-27T05:35:00.000000Z\",\"created_at\":\"2023-05-27T05:35:00.000000Z\",\"id\":1}'),
(5, '9943d25c-7523-4674-9cbf-364b858f5efc', 1, 'Create', 'App\\Models\\Skill', 1, 'App\\Models\\Skill', 1, 'App\\Models\\Skill', 1, '', 'finished', '', '2023-05-27 00:35:11', '2023-05-27 00:35:11', NULL, '{\"title\":\"Linux\",\"updated_at\":\"2023-05-27T05:35:11.000000Z\",\"created_at\":\"2023-05-27T05:35:11.000000Z\",\"id\":1}'),
(6, '9943d26d-920c-4721-a265-5888fd2e528a', 1, 'Create', 'App\\Models\\Expert', 1, 'App\\Models\\Expert', 1, 'App\\Models\\Expert', 1, '', 'finished', '', '2023-05-27 00:35:22', '2023-05-27 00:35:22', NULL, '{\"expert_category_id\":3,\"title\":\"Syed Mumtaz Ul Hassan\",\"sub_title\":\"2X Certified Salesforce Consultant and Trailhead Ranger\",\"availability\":\"Full Time\",\"experience\":\"15 years\",\"avatar\":\"pOietKBeU0VASnIqD5RoeCnvr2DPXVC3oHVLEqtu.png\",\"status\":\"New\",\"published\":true,\"description\":\"<div>Check Mate<\\/div>\",\"updated_at\":\"2023-05-27T05:35:22.000000Z\",\"created_at\":\"2023-05-27T05:35:22.000000Z\",\"id\":1}'),
(7, '99443b2d-5056-4a0d-a713-bf12a826ea63', 1, 'Create', 'Outl1ne\\MenuBuilder\\Models\\Menu', 1, 'Outl1ne\\MenuBuilder\\Models\\Menu', 1, 'Outl1ne\\MenuBuilder\\Models\\Menu', 1, '', 'finished', '', '2023-05-27 05:28:16', '2023-05-27 05:28:16', NULL, '{\"name\":\"Hire\",\"slug\":\"header\",\"updated_at\":\"2023-05-27T10:28:16.000000Z\",\"created_at\":\"2023-05-27T10:28:16.000000Z\",\"id\":1}'),
(8, '9944abac-e12a-44b7-a7fd-2352c1dbf1e7', 1, 'Update', 'Outl1ne\\MenuBuilder\\Models\\Menu', 1, 'Outl1ne\\MenuBuilder\\Models\\Menu', 1, 'Outl1ne\\MenuBuilder\\Models\\Menu', 1, '', 'finished', '', '2023-05-27 10:42:50', '2023-05-27 10:42:50', '{\"name\":\"Hire\"}', '{\"name\":\"Header\"}'),
(9, '9946bda9-818b-4fc9-9886-ba9a6bac5271', 1, 'Update', 'App\\Models\\Expert', 1, 'App\\Models\\Expert', 1, 'App\\Models\\Expert', 1, '', 'finished', '', '2023-05-28 11:24:47', '2023-05-28 11:24:47', '{\"avatar\":\"pOietKBeU0VASnIqD5RoeCnvr2DPXVC3oHVLEqtu.png\",\"published\":1}', '{\"avatar\":\"P7lmFI90CPzJWp1hgMnaeClSYcOe9t0YPDRceVub.png\",\"published\":true}'),
(10, '9946c029-9ee6-4525-8219-a5907cb18b75', 1, 'Create', 'App\\Models\\Client', 1, 'App\\Models\\Client', 1, 'App\\Models\\Client', 1, '', 'finished', '', '2023-05-28 11:31:47', '2023-05-28 11:31:47', NULL, '{\"title\":\"Amazon\",\"reviwer\":\"Marketing Manager\",\"tag_line\":\"Amazon Product Development Team Management\",\"logo\":\"DbPzOeQHneryL8SK9dTrWYq52oNjGDJeVjzYX1ko.png\",\"published\":true,\"description\":\"<div>Your assistance was just outstanding. You said, \\\"That\'s something I can handle and I\'m going to solve that for you,\\\" after we informed you about our issues. And even though we only had a little window of time 4 to 8 weeks you kept your word. We now have a product development team in place. You truly followed through on your promises, and that is fantastic!<\\/div>\",\"updated_at\":\"2023-05-28T16:31:47.000000Z\",\"created_at\":\"2023-05-28T16:31:47.000000Z\",\"id\":1}'),
(11, '9946c256-02d8-4082-8bd8-c95bd34900d3', 1, 'Create', 'App\\Models\\Experty', 2, 'App\\Models\\Experty', 2, 'App\\Models\\Experty', 2, '', 'finished', '', '2023-05-28 11:37:51', '2023-05-28 11:37:51', NULL, '{\"title\":\"Web Development\",\"updated_at\":\"2023-05-28T16:37:51.000000Z\",\"created_at\":\"2023-05-28T16:37:51.000000Z\",\"id\":2}'),
(12, '9946c26e-344d-4567-9709-0896bf28293f', 1, 'Create', 'App\\Models\\Skill', 2, 'App\\Models\\Skill', 2, 'App\\Models\\Skill', 2, '', 'finished', '', '2023-05-28 11:38:07', '2023-05-28 11:38:07', NULL, '{\"title\":\"Java Spring boot\",\"updated_at\":\"2023-05-28T16:38:07.000000Z\",\"created_at\":\"2023-05-28T16:38:07.000000Z\",\"id\":2}'),
(13, '9951b378-e097-4504-b099-a194ca405163', 1, 'Create', 'App\\Models\\Page', 1, 'App\\Models\\Page', 1, 'App\\Models\\Page', 1, '', 'finished', '', '2023-06-02 22:10:24', '2023-06-02 22:10:24', NULL, '{\"title\":\"Hire\",\"slug\":\"hire\",\"meta_title\":\"Hire best IT professional across the globe\",\"meta_keywords\":\"IT, Professionals\",\"meta_description\":\"Hire best IT professional across the globe\",\"template\":\"hire\",\"updated_at\":\"2023-06-03T03:10:24.000000Z\",\"created_at\":\"2023-06-03T03:10:24.000000Z\",\"id\":1}'),
(14, '995277cb-f401-40af-b0fd-9aa680bdeb42', 1, 'Update', 'App\\Models\\Page', 1, 'App\\Models\\Page', 1, 'App\\Models\\Page', 1, '', 'finished', '', '2023-06-03 07:19:22', '2023-06-03 07:19:22', '{\"template\":\"hire\"}', '{\"template\":\"home\"}'),
(15, '99527d98-b29b-4f90-978b-a4965b9db6f9', 1, 'Create', 'App\\Models\\Page', 2, 'App\\Models\\Page', 2, 'App\\Models\\Page', 2, '', 'finished', '', '2023-06-03 07:35:35', '2023-06-03 07:35:35', NULL, '{\"title\":\"Get A Free Consultation\",\"slug\":\"get-a-free-consultation\",\"meta_title\":\"Get Free consultation\",\"meta_keywords\":\"Keywords\",\"meta_description\":\"Desc of page\",\"template\":\"contact_us\",\"updated_at\":\"2023-06-03T12:35:35.000000Z\",\"created_at\":\"2023-06-03T12:35:35.000000Z\",\"id\":2}'),
(16, '99527e04-d79b-4d4d-9d01-21ab419347af', 1, 'Create', 'App\\Models\\Page', 3, 'App\\Models\\Page', 3, 'App\\Models\\Page', 3, '', 'finished', '', '2023-06-03 07:36:46', '2023-06-03 07:36:46', NULL, '{\"title\":\"About Us\",\"slug\":\"abous-us\",\"meta_title\":\"About Us\",\"meta_keywords\":\"Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"aboutus\",\"updated_at\":\"2023-06-03T12:36:46.000000Z\",\"created_at\":\"2023-06-03T12:36:46.000000Z\",\"id\":3}'),
(17, '99527e23-105b-4236-ba57-5bec71e6f8f3', 1, 'Update', 'App\\Models\\Page', 3, 'App\\Models\\Page', 3, 'App\\Models\\Page', 3, '', 'finished', '', '2023-06-03 07:37:05', '2023-06-03 07:37:05', '{\"slug\":\"abous-us\"}', '{\"slug\":\"about-us\"}'),
(18, '99527e9c-277e-4cc8-ab4e-2875ab395fb6', 1, 'Create', 'App\\Models\\Page', 4, 'App\\Models\\Page', 4, 'App\\Models\\Page', 4, '', 'finished', '', '2023-06-03 07:38:25', '2023-06-03 07:38:25', NULL, '{\"title\":\"Marketing\",\"slug\":\"marketing\",\"meta_title\":\"Marketing\",\"meta_keywords\":\"Marketing\",\"meta_description\":\"Marketing\",\"template\":\"marketing\",\"updated_at\":\"2023-06-03T12:38:25.000000Z\",\"created_at\":\"2023-06-03T12:38:25.000000Z\",\"id\":4}'),
(19, '99527edb-3581-4422-8dd5-7b92fb76bfbd', 1, 'Create', 'App\\Models\\Page', 5, 'App\\Models\\Page', 5, 'App\\Models\\Page', 5, '', 'finished', '', '2023-06-03 07:39:06', '2023-06-03 07:39:06', NULL, '{\"title\":\"Technology\",\"slug\":\"technology\",\"meta_title\":\"Technolgy\",\"meta_keywords\":\"Technology\",\"meta_description\":\"Technology\",\"template\":\"technology\",\"updated_at\":\"2023-06-03T12:39:06.000000Z\",\"created_at\":\"2023-06-03T12:39:06.000000Z\",\"id\":5}'),
(20, '99528116-ffed-45b5-bce4-c430f1a6477a', 1, 'Create', 'App\\Models\\Page', 6, 'App\\Models\\Page', 6, 'App\\Models\\Page', 6, '', 'finished', '', '2023-06-03 07:45:21', '2023-06-03 07:45:21', NULL, '{\"title\":\"Services\",\"slug\":\"services\",\"meta_title\":\"services\",\"meta_keywords\":\"services\",\"meta_description\":\"services\",\"template\":\"services\",\"updated_at\":\"2023-06-03T12:45:21.000000Z\",\"created_at\":\"2023-06-03T12:45:21.000000Z\",\"id\":6}'),
(21, '99528144-f1f2-4f4c-a289-24028c8168d9', 1, 'Create', 'App\\Models\\Page', 7, 'App\\Models\\Page', 7, 'App\\Models\\Page', 7, '', 'finished', '', '2023-06-03 07:45:51', '2023-06-03 07:45:51', NULL, '{\"title\":\"Industries\",\"slug\":\"industries\",\"meta_title\":\"industries\",\"meta_keywords\":\"industries\",\"meta_description\":\"industries\",\"template\":\"industries\",\"updated_at\":\"2023-06-03T12:45:51.000000Z\",\"created_at\":\"2023-06-03T12:45:51.000000Z\",\"id\":7}');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviwer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_line` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `title`, `reviwer`, `tag_line`, `logo`, `description`, `published`, `created_at`, `updated_at`) VALUES
(1, 'Amazon', 'Marketing Manager', 'Amazon Product Development Team Management', 'DbPzOeQHneryL8SK9dTrWYq52oNjGDJeVjzYX1ko.png', '<div>Your assistance was just outstanding. You said, \"That\'s something I can handle and I\'m going to solve that for you,\" after we informed you about our issues. And even though we only had a little window of time 4 to 8 weeks you kept your word. We now have a product development team in place. You truly followed through on your promises, and that is fantastic!</div>', 1, '2023-05-28 11:31:47', '2023-05-28 11:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `experties`
--

CREATE TABLE `experties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experties`
--

INSERT INTO `experties` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'CRM', '2023-05-27 00:35:00', '2023-05-27 00:35:00'),
(2, 'Web Development', '2023-05-28 11:37:51', '2023-05-28 11:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `experts`
--

CREATE TABLE `experts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `availability` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` tinyint(1) DEFAULT '0',
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'new',
  `expert_category_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experts`
--

INSERT INTO `experts` (`id`, `title`, `sub_title`, `availability`, `experience`, `avatar`, `resume`, `published`, `status`, `expert_category_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Syed Mumtaz Ul Hassan', '2X Certified Salesforce Consultant and Trailhead Ranger', 'Full Time', '15 years', 'P7lmFI90CPzJWp1hgMnaeClSYcOe9t0YPDRceVub.png', NULL, 1, 'New', 3, '<div>Check Mate</div>', '2023-05-27 00:35:22', '2023-05-28 11:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `expert_categories`
--

CREATE TABLE `expert_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_categories`
--

INSERT INTO `expert_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Web & Mobile', '2023-05-27 00:32:56', '2023-05-27 00:32:56'),
(2, 'Social Media & Online Marketing', '2023-05-27 00:33:16', '2023-05-27 00:33:16'),
(3, 'Salesforce experts', '2023-05-27 00:33:41', '2023-05-27 00:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `expert_experty`
--

CREATE TABLE `expert_experty` (
  `expert_id` int(11) NOT NULL,
  `experty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_experty`
--

INSERT INTO `expert_experty` (`expert_id`, `experty_id`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `expert_skill`
--

CREATE TABLE `expert_skill` (
  `expert_id` int(11) NOT NULL,
  `skill_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expert_skill`
--

INSERT INTO `expert_skill` (`expert_id`, `skill_id`) VALUES
(1, 1);

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hiring_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `budget` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Consultation',
  `details` text COLLATE utf8mb4_unicode_ci,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'New',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2018_01_01_000000_create_action_events_table', 1),
(4, '2019_05_10_000000_add_fields_to_action_events_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2021_08_25_193039_create_nova_notifications_table', 1),
(8, '2022_04_26_000000_add_fields_to_nova_notifications_table', 1),
(9, '2022_12_19_000000_create_field_attachments_table', 1),
(10, '2023_05_26_121355_create_experts_table', 1),
(11, '2023_05_26_175953_create_experties_table', 1),
(12, '2023_05_26_180006_create_skills_table', 1),
(13, '2023_05_26_184018_expert_experty_table', 1),
(14, '2023_05_26_184301_expert_skill_table', 1),
(15, '2023_05_27_041943_create_clients_table', 1),
(16, '2023_05_27_051531_create_expert_categories_table', 1),
(17, '2019_11_08_000000_create_menus_table', 2),
(18, '2022_04_16_000000_create_nestable_field_to_menus_table', 2),
(19, '2023_05_27_161430_alter_table_nova_menu_items', 3),
(22, '2023_05_28_160200_create_leads_table', 4),
(23, '2023_05_28_160851_create_subscriptions_table', 4),
(24, '2023_06_03_025329_create_pages_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `nova_field_attachments`
--

CREATE TABLE `nova_field_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `attachable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachable_id` bigint(20) UNSIGNED NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nova_menu_menus`
--

CREATE TABLE `nova_menu_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nova_menu_menus`
--

INSERT INTO `nova_menu_menus` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Header', 'header', '2023-05-27 05:28:16', '2023-05-27 10:42:50');

-- --------------------------------------------------------

--
-- Table structure for table `nova_menu_menu_items`
--

CREATE TABLE `nova_menu_menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `data` json DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `nestable` tinyint(1) NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nova_menu_menu_items`
--

INSERT INTO `nova_menu_menu_items` (`id`, `menu_id`, `name`, `locale`, `class`, `value`, `target`, `data`, `parent_id`, `order`, `enabled`, `created_at`, `updated_at`, `nestable`, `slug`) VALUES
(1, 1, 'Hire', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"0\"}', NULL, 1, 1, '2023-05-27 10:43:08', '2023-05-27 11:59:42', 1, NULL),
(2, 1, 'Marketing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing\", \"template\": \"home\", \"menu_columns\": null, \"is_action_item\": \"0\"}', NULL, 2, 1, '2023-05-27 10:43:22', '2023-05-30 23:12:23', 1, NULL),
(3, 1, 'Technology', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"technology\", \"template\": \"home\", \"menu_columns\": null, \"is_action_item\": \"0\"}', NULL, 3, 1, '2023-05-27 10:43:39', '2023-05-30 23:12:23', 1, NULL),
(4, 1, 'Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"services\", \"template\": \"home\", \"menu_columns\": null, \"is_action_item\": \"0\"}', NULL, 4, 1, '2023-05-27 10:44:14', '2023-05-30 23:12:23', 1, NULL),
(5, 1, 'Industries', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"industries\", \"template\": \"home\", \"menu_columns\": null, \"is_action_item\": \"0\"}', NULL, 5, 1, '2023-05-27 10:44:34', '2023-05-30 23:12:23', 1, NULL),
(6, 1, 'About Us', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"about-us\", \"template\": \"home\", \"menu_columns\": null, \"is_action_item\": \"0\"}', NULL, 6, 1, '2023-05-27 10:44:42', '2023-05-30 23:12:23', 1, NULL),
(7, 1, 'Get a free Consultation', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"get-a-free-consultation\", \"template\": \"home\", \"menu_columns\": \"1\", \"is_action_item\": \"1\"}', NULL, 7, 1, '2023-05-27 10:45:15', '2023-05-30 23:12:23', 1, NULL),
(8, 1, 'Developer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"developer\", \"template\": null, \"menu_icon\": \"hirenav_icon1.png\", \"menu_columns\": null, \"is_action_item\": \"0\"}', 1, 1, 1, '2023-05-27 10:45:38', '2023-05-30 23:26:46', 1, NULL),
(9, 1, 'Node Js Developer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"node-js-developer\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"0\"}', 8, 1, 1, '2023-05-27 20:16:10', '2023-05-30 21:09:58', 1, NULL),
(10, 1, 'React Js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"react-js-developers\", \"template\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 8, 2, 1, '2023-05-30 23:12:18', '2023-05-30 23:12:23', 1, NULL),
(11, 1, 'Vue Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"vue-developers\", \"template\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 8, 3, 1, '2023-05-30 23:18:27', '2023-05-30 23:18:31', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `nova_notifications`
--

CREATE TABLE `nova_notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nova_pending_field_attachments`
--

CREATE TABLE `nova_pending_field_attachments` (
  `id` int(10) UNSIGNED NOT NULL,
  `draft_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `meta_title`, `meta_keywords`, `meta_description`, `template`, `created_at`, `updated_at`) VALUES
(1, 'Hire', 'hire', 'Hire best IT professional across the globe', 'IT, Professionals', 'Hire best IT professional across the globe', 'home', '2023-06-02 22:10:24', '2023-06-03 07:19:22'),
(2, 'Get A Free Consultation', 'get-a-free-consultation', 'Get Free consultation', 'Keywords', 'Desc of page', 'contact_us', '2023-06-03 07:35:35', '2023-06-03 07:35:35'),
(3, 'About Us', 'about-us', 'About Us', 'Keywords', 'Meta Description', 'aboutus', '2023-06-03 07:36:46', '2023-06-03 07:37:05'),
(4, 'Marketing', 'marketing', 'Marketing', 'Marketing', 'Marketing', 'marketing', '2023-06-03 07:38:25', '2023-06-03 07:38:25'),
(5, 'Technology', 'technology', 'Technolgy', 'Technology', 'Technology', 'technology', '2023-06-03 07:39:06', '2023-06-03 07:39:06'),
(6, 'Services', 'services', 'services', 'services', 'services', 'services', '2023-06-03 07:45:21', '2023-06-03 07:45:21'),
(7, 'Industries', 'industries', 'industries', 'industries', 'industries', 'industries', '2023-06-03 07:45:51', '2023-06-03 07:45:51');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Linux', '2023-05-27 00:35:11', '2023-05-27 00:35:11'),
(2, 'Java Spring boot', '2023-05-28 11:38:07', '2023-05-28 11:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opted_out` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super User', 'admin@admin.com', '2023-05-27 00:32:37', '$2y$10$o1iqRxm6hHvXlHwFoqmNqu6NhDWqdeljgdk3V3/fW2.MRP5y98aEO', 'Ex5s3qxOSYmWyX074h4qWPc6KFGeaCGT91m26XrJgyTHX9MWRkZ1TBxkDIHV', '2023-05-27 00:32:37', '2023-05-27 00:32:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action_events`
--
ALTER TABLE `action_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `action_events_actionable_type_actionable_id_index` (`actionable_type`,`actionable_id`),
  ADD KEY `action_events_target_type_target_id_index` (`target_type`,`target_id`),
  ADD KEY `action_events_batch_id_model_type_model_id_index` (`batch_id`,`model_type`,`model_id`),
  ADD KEY `action_events_user_id_index` (`user_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experties`
--
ALTER TABLE `experties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experts`
--
ALTER TABLE `experts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expert_categories`
--
ALTER TABLE `expert_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nova_field_attachments`
--
ALTER TABLE `nova_field_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_field_attachments_attachable_type_attachable_id_index` (`attachable_type`,`attachable_id`),
  ADD KEY `nova_field_attachments_url_index` (`url`);

--
-- Indexes for table `nova_menu_menus`
--
ALTER TABLE `nova_menu_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nova_menu_menu_items`
--
ALTER TABLE `nova_menu_menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_menu_menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `nova_notifications`
--
ALTER TABLE `nova_notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nova_pending_field_attachments_draft_id_index` (`draft_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

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
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
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
-- AUTO_INCREMENT for table `action_events`
--
ALTER TABLE `action_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `experties`
--
ALTER TABLE `experties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `expert_categories`
--
ALTER TABLE `expert_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `nova_field_attachments`
--
ALTER TABLE `nova_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nova_menu_menus`
--
ALTER TABLE `nova_menu_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nova_menu_menu_items`
--
ALTER TABLE `nova_menu_menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nova_menu_menu_items`
--
ALTER TABLE `nova_menu_menu_items`
  ADD CONSTRAINT `nova_menu_menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `nova_menu_menus` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
