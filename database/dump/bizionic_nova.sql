-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 23, 2023 at 10:02 AM
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
-- Database: `Bizionic_nova_new`
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
(21, '99528144-f1f2-4f4c-a289-24028c8168d9', 1, 'Create', 'App\\Models\\Page', 7, 'App\\Models\\Page', 7, 'App\\Models\\Page', 7, '', 'finished', '', '2023-06-03 07:45:51', '2023-06-03 07:45:51', NULL, '{\"title\":\"Industries\",\"slug\":\"industries\",\"meta_title\":\"industries\",\"meta_keywords\":\"industries\",\"meta_description\":\"industries\",\"template\":\"industries\",\"updated_at\":\"2023-06-03T12:45:51.000000Z\",\"created_at\":\"2023-06-03T12:45:51.000000Z\",\"id\":7}'),
(22, '996827ea-74d9-4432-be55-5f92e20546d8', 1, 'Update', 'App\\Models\\Page', 1, 'App\\Models\\Page', 1, 'App\\Models\\Page', 1, '', 'finished', '', '2023-06-14 02:04:13', '2023-06-14 02:04:13', '[]', '[]'),
(23, '9968f88c-88df-44bb-bd96-ad0370379abd', 1, 'Create', 'App\\Models\\Page', 8, 'App\\Models\\Page', 8, 'App\\Models\\Page', 8, '', 'finished', '', '2023-06-14 11:47:36', '2023-06-14 11:47:36', NULL, '{\"title\":\"Hire Me\",\"slug\":\"hire-me\",\"meta_title\":\"Hire Me\",\"meta_keywords\":\"Hire Me\",\"meta_description\":\"Hire Me\",\"template\":\"hireMe\",\"updated_at\":\"2023-06-14T16:47:36.000000Z\",\"created_at\":\"2023-06-14T16:47:36.000000Z\",\"id\":8}'),
(24, '9968fde2-8a3b-4a76-a64d-68cb8ad0e154', 1, 'Create', 'App\\Models\\Page', 9, 'App\\Models\\Page', 9, 'App\\Models\\Page', 9, '', 'finished', '', '2023-06-14 12:02:31', '2023-06-14 12:02:31', NULL, '{\"title\":\"China\",\"slug\":\"marketing|marketing-services-we-provide|more|china\",\"meta_title\":\"China Title\",\"meta_keywords\":\"China Keywords\",\"meta_description\":\"China Description\",\"template\":\"china\",\"updated_at\":\"2023-06-14T17:02:31.000000Z\",\"created_at\":\"2023-06-14T17:02:31.000000Z\",\"id\":9}'),
(25, '9968fe12-a47d-4d3d-ae95-9120494285da', 1, 'Create', 'App\\Models\\Page', 10, 'App\\Models\\Page', 10, 'App\\Models\\Page', 10, '', 'finished', '', '2023-06-14 12:03:02', '2023-06-14 12:03:02', NULL, '{\"title\":\"India\",\"slug\":\"marketing|marketing-services-we-provide|more|india\",\"meta_title\":\"India title\",\"meta_keywords\":\"India Keywords\",\"meta_description\":\"India Meta Desc\",\"template\":\"india\",\"updated_at\":\"2023-06-14T17:03:02.000000Z\",\"created_at\":\"2023-06-14T17:03:02.000000Z\",\"id\":10}'),
(26, '99690339-2c33-4cdc-9f60-004d3eba42e5', 1, 'Create', 'App\\Models\\Page', 11, 'App\\Models\\Page', 11, 'App\\Models\\Page', 11, '', 'finished', '', '2023-06-14 12:17:26', '2023-06-14 12:17:26', NULL, '{\"title\":\"Marketing About Us Detail\",\"slug\":\"marketing|marketing-services-we-provide|more|about-us-detail\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"aboutuUsDetail\",\"updated_at\":\"2023-06-14T17:17:26.000000Z\",\"created_at\":\"2023-06-14T17:17:26.000000Z\",\"id\":11}'),
(27, '9969f38f-be8f-4475-8850-9a52ae91336e', 1, 'Update', 'App\\Models\\ExpertCategory', 3, 'App\\Models\\ExpertCategory', 3, 'App\\Models\\ExpertCategory', 3, '', 'finished', '', '2023-06-14 23:29:29', '2023-06-14 23:29:29', '{\"title\":\"Salesforce experts\"}', '{\"title\":\"Sales and Marketing\"}'),
(28, '9969f3bf-71b9-4a84-b05f-d52c9deebe33', 1, 'Update', 'App\\Models\\ExpertCategory', 1, 'App\\Models\\ExpertCategory', 1, 'App\\Models\\ExpertCategory', 1, '', 'finished', '', '2023-06-14 23:30:00', '2023-06-14 23:30:00', '{\"title\":\"Web & Mobile\"}', '{\"title\":\"Development and IT\"}'),
(29, '9969f3dc-735d-464b-a98a-6566f67c289c', 1, 'Update', 'App\\Models\\ExpertCategory', 2, 'App\\Models\\ExpertCategory', 2, 'App\\Models\\ExpertCategory', 2, '', 'finished', '', '2023-06-14 23:30:19', '2023-06-14 23:30:19', '{\"title\":\"Social Media & Online Marketing\"}', '{\"title\":\"Design and Creatives\"}'),
(30, '9969f412-8067-4891-b468-f6d6df2a06b8', 1, 'Update', 'App\\Models\\Experty', 1, 'App\\Models\\Experty', 1, 'App\\Models\\Experty', 1, '', 'finished', '', '2023-06-14 23:30:54', '2023-06-14 23:30:54', '{\"title\":\"CRM\"}', '{\"title\":\"ReactJS\"}'),
(31, '9969f42c-9290-40f1-b154-a1e27ff7d50a', 1, 'Update', 'App\\Models\\Experty', 2, 'App\\Models\\Experty', 2, 'App\\Models\\Experty', 2, '', 'finished', '', '2023-06-14 23:31:11', '2023-06-14 23:31:11', '{\"title\":\"Web Development\"}', '{\"title\":\"AngularJS\"}'),
(32, '9969f440-c243-416b-8d21-d5b0ec65ddd9', 1, 'Create', 'App\\Models\\Experty', 3, 'App\\Models\\Experty', 3, 'App\\Models\\Experty', 3, '', 'finished', '', '2023-06-14 23:31:25', '2023-06-14 23:31:25', NULL, '{\"title\":\"Bootstrap\",\"updated_at\":\"2023-06-15T04:31:24.000000Z\",\"created_at\":\"2023-06-15T04:31:24.000000Z\",\"id\":3}'),
(33, '9969f44b-0ebc-431a-86d5-543292406110', 1, 'Create', 'App\\Models\\Experty', 4, 'App\\Models\\Experty', 4, 'App\\Models\\Experty', 4, '', 'finished', '', '2023-06-14 23:31:31', '2023-06-14 23:31:31', NULL, '{\"title\":\"Web Services\",\"updated_at\":\"2023-06-15T04:31:31.000000Z\",\"created_at\":\"2023-06-15T04:31:31.000000Z\",\"id\":4}'),
(34, '9969f457-8774-481f-98d5-af388aec62a9', 1, 'Create', 'App\\Models\\Experty', 5, 'App\\Models\\Experty', 5, 'App\\Models\\Experty', 5, '', 'finished', '', '2023-06-14 23:31:39', '2023-06-14 23:31:39', NULL, '{\"title\":\"Automation Testing\",\"updated_at\":\"2023-06-15T04:31:39.000000Z\",\"created_at\":\"2023-06-15T04:31:39.000000Z\",\"id\":5}'),
(35, '9969f460-5659-4759-8578-1903770dff53', 1, 'Create', 'App\\Models\\Experty', 6, 'App\\Models\\Experty', 6, 'App\\Models\\Experty', 6, '', 'finished', '', '2023-06-14 23:31:45', '2023-06-14 23:31:45', NULL, '{\"title\":\"Tableau\",\"updated_at\":\"2023-06-15T04:31:45.000000Z\",\"created_at\":\"2023-06-15T04:31:45.000000Z\",\"id\":6}'),
(36, '9969f46e-6e05-4745-b6ba-bfc56a0aae17', 1, 'Create', 'App\\Models\\Experty', 7, 'App\\Models\\Experty', 7, 'App\\Models\\Experty', 7, '', 'finished', '', '2023-06-14 23:31:54', '2023-06-14 23:31:54', NULL, '{\"title\":\"Data Structures & Algorithms\",\"updated_at\":\"2023-06-15T04:31:54.000000Z\",\"created_at\":\"2023-06-15T04:31:54.000000Z\",\"id\":7}'),
(37, '9969f477-2e4d-482d-932d-297c8975a23d', 1, 'Create', 'App\\Models\\Experty', 8, 'App\\Models\\Experty', 8, 'App\\Models\\Experty', 8, '', 'finished', '', '2023-06-14 23:32:00', '2023-06-14 23:32:00', NULL, '{\"title\":\"Nodejs\",\"updated_at\":\"2023-06-15T04:32:00.000000Z\",\"created_at\":\"2023-06-15T04:32:00.000000Z\",\"id\":8}'),
(38, '9969f489-0526-4b25-b555-88cee24626c4', 1, 'Create', 'App\\Models\\Experty', 9, 'App\\Models\\Experty', 9, 'App\\Models\\Experty', 9, '', 'finished', '', '2023-06-14 23:32:12', '2023-06-14 23:32:12', NULL, '{\"title\":\"SAP APO-SNP\",\"updated_at\":\"2023-06-15T04:32:12.000000Z\",\"created_at\":\"2023-06-15T04:32:12.000000Z\",\"id\":9}'),
(39, '9969f496-ab2d-4901-88c2-f07a8d659c16', 1, 'Create', 'App\\Models\\Experty', 10, 'App\\Models\\Experty', 10, 'App\\Models\\Experty', 10, '', 'finished', '', '2023-06-14 23:32:21', '2023-06-14 23:32:21', NULL, '{\"title\":\"SAP MM & SAP S4 HANA\",\"updated_at\":\"2023-06-15T04:32:21.000000Z\",\"created_at\":\"2023-06-15T04:32:21.000000Z\",\"id\":10}'),
(40, '9969f4f1-7e53-4b81-8db3-f62683ccc876', 1, 'Update', 'App\\Models\\Skill', 1, 'App\\Models\\Skill', 1, 'App\\Models\\Skill', 1, '', 'finished', '', '2023-06-14 23:33:20', '2023-06-14 23:33:20', '{\"title\":\"Linux\"}', '{\"title\":\"Developing smart contracts using solidity\"}'),
(41, '9969f50c-47a0-4364-aec0-a6669920cc3d', 1, 'Update', 'App\\Models\\Skill', 2, 'App\\Models\\Skill', 2, 'App\\Models\\Skill', 2, '', 'finished', '', '2023-06-14 23:33:38', '2023-06-14 23:33:38', '{\"title\":\"Java Spring boot\"}', '{\"title\":\"Blockchain technology\"}'),
(42, '9969f522-3649-40f5-b61a-c34160064c43', 1, 'Create', 'App\\Models\\Skill', 3, 'App\\Models\\Skill', 3, 'App\\Models\\Skill', 3, '', 'finished', '', '2023-06-14 23:33:52', '2023-06-14 23:33:52', NULL, '{\"title\":\"Cryptocurrency\",\"updated_at\":\"2023-06-15T04:33:52.000000Z\",\"created_at\":\"2023-06-15T04:33:52.000000Z\",\"id\":3}'),
(43, '9969f547-a4d6-4abd-bc88-6aa800099b8c', 1, 'Create', 'App\\Models\\Skill', 4, 'App\\Models\\Skill', 4, 'App\\Models\\Skill', 4, '', 'finished', '', '2023-06-14 23:34:17', '2023-06-14 23:34:17', NULL, '{\"title\":\"Protocols (Proof-of-Work & Proof-of-Stakes)\",\"updated_at\":\"2023-06-15T04:34:17.000000Z\",\"created_at\":\"2023-06-15T04:34:17.000000Z\",\"id\":4}'),
(44, '9969f55f-72f0-400b-8fd7-31dd44ffaf17', 1, 'Create', 'App\\Models\\Skill', 5, 'App\\Models\\Skill', 5, 'App\\Models\\Skill', 5, '', 'finished', '', '2023-06-14 23:34:32', '2023-06-14 23:34:32', NULL, '{\"title\":\"Symmetric Asymmetric\",\"updated_at\":\"2023-06-15T04:34:32.000000Z\",\"created_at\":\"2023-06-15T04:34:32.000000Z\",\"id\":5}'),
(45, '9969f650-1354-4fc5-8c9e-ab3a3e6d47a3', 1, 'Create', 'App\\Models\\Experty', 11, 'App\\Models\\Experty', 11, 'App\\Models\\Experty', 11, '', 'finished', '', '2023-06-14 23:37:10', '2023-06-14 23:37:10', NULL, '{\"title\":\"Java\",\"updated_at\":\"2023-06-15T04:37:10.000000Z\",\"created_at\":\"2023-06-15T04:37:10.000000Z\",\"id\":11}'),
(46, '9969f6df-af5a-4d0a-b595-f77805b2df97', 1, 'Update', 'App\\Models\\Expert', 1, 'App\\Models\\Expert', 1, 'App\\Models\\Expert', 1, '', 'finished', '', '2023-06-14 23:38:44', '2023-06-14 23:38:44', '{\"title\":\"Syed Mumtaz Ul Hassan\",\"sub_title\":\"2X Certified Salesforce Consultant and Trailhead Ranger\",\"experience\":\"15 years\",\"published\":1,\"status\":\"New\",\"expert_category_id\":3,\"description\":\"<div>Check Mate<\\/div>\"}', '{\"title\":\"Ashwini Kumar\",\"sub_title\":\"12+ Years Experienced Software Engineer\",\"experience\":\"12 years\",\"published\":true,\"status\":\"Reviewed\",\"expert_category_id\":1,\"description\":\"<div>&nbsp;12+ Years of diverse experience in Information Technology spanning various projects with an emphasis on Application Development in areas of Involvement in all implementation stages, from business requirement collection, business process analysis, configuration, data loads, unit test, integration testing, end-user training, and production support&nbsp;<\\/div>\"}'),
(47, '9969f779-3678-4ce3-a456-9cf64e206654', 1, 'Create', 'App\\Models\\Experty', 12, 'App\\Models\\Experty', 12, 'App\\Models\\Experty', 12, '', 'finished', '', '2023-06-14 23:40:25', '2023-06-14 23:40:25', NULL, '{\"title\":\"ES6\",\"updated_at\":\"2023-06-15T04:40:25.000000Z\",\"created_at\":\"2023-06-15T04:40:25.000000Z\",\"id\":12}'),
(48, '9969f791-0ef4-4689-a751-c5f42c68114e', 1, 'Create', 'App\\Models\\Experty', 13, 'App\\Models\\Experty', 13, 'App\\Models\\Experty', 13, '', 'finished', '', '2023-06-14 23:40:40', '2023-06-14 23:40:40', NULL, '{\"title\":\"User Interface UI\",\"updated_at\":\"2023-06-15T04:40:40.000000Z\",\"created_at\":\"2023-06-15T04:40:40.000000Z\",\"id\":13}'),
(49, '9969f7ad-2fc2-499a-9c08-ad2b3125b1e7', 1, 'Create', 'App\\Models\\Experty', 14, 'App\\Models\\Experty', 14, 'App\\Models\\Experty', 14, '', 'finished', '', '2023-06-14 23:40:59', '2023-06-14 23:40:59', NULL, '{\"title\":\"Redux\",\"updated_at\":\"2023-06-15T04:40:59.000000Z\",\"created_at\":\"2023-06-15T04:40:59.000000Z\",\"id\":14}'),
(50, '9969f7ca-36cf-44cb-ba4d-b2b7f2278801', 1, 'Create', 'App\\Models\\Experty', 15, 'App\\Models\\Experty', 15, 'App\\Models\\Experty', 15, '', 'finished', '', '2023-06-14 23:41:18', '2023-06-14 23:41:18', NULL, '{\"title\":\"MongoDB\",\"updated_at\":\"2023-06-15T04:41:18.000000Z\",\"created_at\":\"2023-06-15T04:41:18.000000Z\",\"id\":15}'),
(51, '9969f7da-9df2-41e1-bf6d-fbae15b26c45', 1, 'Create', 'App\\Models\\Experty', 16, 'App\\Models\\Experty', 16, 'App\\Models\\Experty', 16, '', 'finished', '', '2023-06-14 23:41:29', '2023-06-14 23:41:29', NULL, '{\"title\":\"HTML\",\"updated_at\":\"2023-06-15T04:41:29.000000Z\",\"created_at\":\"2023-06-15T04:41:29.000000Z\",\"id\":16}'),
(52, '9969f7e7-b2fa-47bd-86ea-d6d37c8ea1e0', 1, 'Create', 'App\\Models\\Experty', 17, 'App\\Models\\Experty', 17, 'App\\Models\\Experty', 17, '', 'finished', '', '2023-06-14 23:41:37', '2023-06-14 23:41:37', NULL, '{\"title\":\"CSS\",\"updated_at\":\"2023-06-15T04:41:37.000000Z\",\"created_at\":\"2023-06-15T04:41:37.000000Z\",\"id\":17}'),
(53, '9969f7fb-f913-4422-b454-c9cc0778dc7e', 1, 'Create', 'App\\Models\\Experty', 18, 'App\\Models\\Experty', 18, 'App\\Models\\Experty', 18, '', 'finished', '', '2023-06-14 23:41:51', '2023-06-14 23:41:51', NULL, '{\"title\":\"Javascript\",\"updated_at\":\"2023-06-15T04:41:51.000000Z\",\"created_at\":\"2023-06-15T04:41:51.000000Z\",\"id\":18}'),
(54, '9969f80c-9134-4cf8-9c36-828e5ef0e874', 1, 'Create', 'App\\Models\\Experty', 19, 'App\\Models\\Experty', 19, 'App\\Models\\Experty', 19, '', 'finished', '', '2023-06-14 23:42:01', '2023-06-14 23:42:01', NULL, '{\"title\":\"Jsx\",\"updated_at\":\"2023-06-15T04:42:01.000000Z\",\"created_at\":\"2023-06-15T04:42:01.000000Z\",\"id\":19}'),
(55, '9969f81d-87e5-448f-a02f-4b4f281e74d2', 1, 'Create', 'App\\Models\\Experty', 20, 'App\\Models\\Experty', 20, 'App\\Models\\Experty', 20, '', 'finished', '', '2023-06-14 23:42:13', '2023-06-14 23:42:13', NULL, '{\"title\":\"Restful Web API\",\"updated_at\":\"2023-06-15T04:42:12.000000Z\",\"created_at\":\"2023-06-15T04:42:12.000000Z\",\"id\":20}'),
(56, '9969f8a4-9c0e-41b2-a0ec-6a3471787eb8', 1, 'Create', 'App\\Models\\Skill', 6, 'App\\Models\\Skill', 6, 'App\\Models\\Skill', 6, '', 'finished', '', '2023-06-14 23:43:41', '2023-06-14 23:43:41', NULL, '{\"title\":\"SAP BIBO Universe Designer\",\"updated_at\":\"2023-06-15T04:43:41.000000Z\",\"created_at\":\"2023-06-15T04:43:41.000000Z\",\"id\":6}'),
(57, '9969f8c5-22ae-45f3-9ddc-397948cea1ae', 1, 'Create', 'App\\Models\\Skill', 7, 'App\\Models\\Skill', 7, 'App\\Models\\Skill', 7, '', 'finished', '', '2023-06-14 23:44:02', '2023-06-14 23:44:02', NULL, '{\"title\":\"Data Analytics\",\"updated_at\":\"2023-06-15T04:44:02.000000Z\",\"created_at\":\"2023-06-15T04:44:02.000000Z\",\"id\":7}'),
(58, '9969f8dc-8d89-44bf-aab4-7a0bcc7a1e29', 1, 'Create', 'App\\Models\\Skill', 8, 'App\\Models\\Skill', 8, 'App\\Models\\Skill', 8, '', 'finished', '', '2023-06-14 23:44:18', '2023-06-14 23:44:18', NULL, '{\"title\":\"Agile Methodology\",\"updated_at\":\"2023-06-15T04:44:18.000000Z\",\"created_at\":\"2023-06-15T04:44:18.000000Z\",\"id\":8}'),
(59, '9969f902-2baa-4ad7-9180-0eb07646290d', 1, 'Create', 'App\\Models\\Expert', 2, 'App\\Models\\Expert', 2, 'App\\Models\\Expert', 2, '', 'finished', '', '2023-06-14 23:44:42', '2023-06-14 23:44:42', NULL, '{\"expert_category_id\":1,\"title\":\"Sourabh Ranakoti\",\"sub_title\":\"3+ Years Expert React-developer\",\"availability\":\"Full Time\",\"experience\":\"3+ Years\",\"avatar\":\"O7WibYAeS4BnnK1hU9cXgXW2iGVWiDpT1eWJZJVU.jpg\",\"status\":\"In Review\",\"published\":false,\"description\":\"<div>&nbsp;3+ years of experience as a React-developer, implementing user interfaces for web-based Supply Chain application. Skilled in data visualization libraries such as works and ag-grid. Collaborates effectively with team members to ensure code quality, maintainability, and scalability. I have worked on visualization or reporting tool like SAP BO.&nbsp;<\\/div>\",\"updated_at\":\"2023-06-15T04:44:42.000000Z\",\"created_at\":\"2023-06-15T04:44:42.000000Z\",\"id\":2}'),
(60, '9969f936-37f0-4ade-83d2-0f13369a3b29', 1, 'Update', 'App\\Models\\Expert', 2, 'App\\Models\\Expert', 2, 'App\\Models\\Expert', 2, '', 'finished', '', '2023-06-14 23:45:16', '2023-06-14 23:45:16', '{\"published\":0,\"status\":\"In Review\"}', '{\"published\":false,\"status\":\"Reviewed\"}'),
(61, '9969f949-0451-4a7a-a3b2-91f143bbda9c', 1, 'Update', 'App\\Models\\Expert', 2, 'App\\Models\\Expert', 2, 'App\\Models\\Expert', 2, '', 'finished', '', '2023-06-14 23:45:29', '2023-06-14 23:45:29', '{\"published\":0}', '{\"published\":true}'),
(62, '9969f9ea-2939-48dd-8552-363ce0340861', 1, 'Create', 'App\\Models\\Experty', 21, 'App\\Models\\Experty', 21, 'App\\Models\\Experty', 21, '', 'finished', '', '2023-06-14 23:47:14', '2023-06-14 23:47:14', NULL, '{\"title\":\"Java\\/J2EE\",\"updated_at\":\"2023-06-15T04:47:14.000000Z\",\"created_at\":\"2023-06-15T04:47:14.000000Z\",\"id\":21}'),
(63, '9969f9fa-b1ac-464b-a3fd-488978bb5ef6', 1, 'Create', 'App\\Models\\Experty', 22, 'App\\Models\\Experty', 22, 'App\\Models\\Experty', 22, '', 'finished', '', '2023-06-14 23:47:25', '2023-06-14 23:47:25', NULL, '{\"title\":\"Jsp\",\"updated_at\":\"2023-06-15T04:47:25.000000Z\",\"created_at\":\"2023-06-15T04:47:25.000000Z\",\"id\":22}'),
(64, '9969fa1d-4dfd-4abe-bdc1-cf55ac2f442f', 1, 'Create', 'App\\Models\\Experty', 23, 'App\\Models\\Experty', 23, 'App\\Models\\Experty', 23, '', 'finished', '', '2023-06-14 23:47:48', '2023-06-14 23:47:48', NULL, '{\"title\":\"Spring Boot\",\"updated_at\":\"2023-06-15T04:47:48.000000Z\",\"created_at\":\"2023-06-15T04:47:48.000000Z\",\"id\":23}'),
(65, '9969fa2d-e5ca-4690-a359-f3844b79eed7', 1, 'Create', 'App\\Models\\Experty', 24, 'App\\Models\\Experty', 24, 'App\\Models\\Experty', 24, '', 'finished', '', '2023-06-14 23:47:59', '2023-06-14 23:47:59', NULL, '{\"title\":\"Hibernate\",\"updated_at\":\"2023-06-15T04:47:59.000000Z\",\"created_at\":\"2023-06-15T04:47:59.000000Z\",\"id\":24}'),
(66, '9969fa3e-5f41-4a2e-a638-5971e9c43ac7', 1, 'Create', 'App\\Models\\Experty', 25, 'App\\Models\\Experty', 25, 'App\\Models\\Experty', 25, '', 'finished', '', '2023-06-14 23:48:10', '2023-06-14 23:48:10', NULL, '{\"title\":\"Spring Microservices\",\"updated_at\":\"2023-06-15T04:48:10.000000Z\",\"created_at\":\"2023-06-15T04:48:10.000000Z\",\"id\":25}'),
(67, '9969fa6f-521b-4e39-954d-c96ee7f7919b', 1, 'Create', 'App\\Models\\Experty', 26, 'App\\Models\\Experty', 26, 'App\\Models\\Experty', 26, '', 'finished', '', '2023-06-14 23:48:42', '2023-06-14 23:48:42', NULL, '{\"title\":\"MySQL\",\"updated_at\":\"2023-06-15T04:48:42.000000Z\",\"created_at\":\"2023-06-15T04:48:42.000000Z\",\"id\":26}'),
(68, '9969fa86-b951-4d5d-9ac3-91654da7d1ea', 1, 'Create', 'App\\Models\\Experty', 27, 'App\\Models\\Experty', 27, 'App\\Models\\Experty', 27, '', 'finished', '', '2023-06-14 23:48:57', '2023-06-14 23:48:57', NULL, '{\"title\":\"Eclipse\",\"updated_at\":\"2023-06-15T04:48:57.000000Z\",\"created_at\":\"2023-06-15T04:48:57.000000Z\",\"id\":27}'),
(69, '9969fa97-e5ed-4d1f-bf95-f63ec19a4b26', 1, 'Create', 'App\\Models\\Experty', 28, 'App\\Models\\Experty', 28, 'App\\Models\\Experty', 28, '', 'finished', '', '2023-06-14 23:49:08', '2023-06-14 23:49:08', NULL, '{\"title\":\"Git\",\"updated_at\":\"2023-06-15T04:49:08.000000Z\",\"created_at\":\"2023-06-15T04:49:08.000000Z\",\"id\":28}'),
(70, '9969faa9-0f99-4b62-96f6-33983388e004', 1, 'Create', 'App\\Models\\Experty', 29, 'App\\Models\\Experty', 29, 'App\\Models\\Experty', 29, '', 'finished', '', '2023-06-14 23:49:19', '2023-06-14 23:49:19', NULL, '{\"title\":\"MAVEN\",\"updated_at\":\"2023-06-15T04:49:19.000000Z\",\"created_at\":\"2023-06-15T04:49:19.000000Z\",\"id\":29}'),
(71, '9969fabc-3669-41e6-9e3b-a9852f50c86e', 1, 'Create', 'App\\Models\\Experty', 30, 'App\\Models\\Experty', 30, 'App\\Models\\Experty', 30, '', 'finished', '', '2023-06-14 23:49:32', '2023-06-14 23:49:32', NULL, '{\"title\":\"jQuery\",\"updated_at\":\"2023-06-15T04:49:32.000000Z\",\"created_at\":\"2023-06-15T04:49:32.000000Z\",\"id\":30}'),
(72, '9969fad1-2493-42c0-97d3-1643396c0fc9', 1, 'Create', 'App\\Models\\Experty', 31, 'App\\Models\\Experty', 31, 'App\\Models\\Experty', 31, '', 'finished', '', '2023-06-14 23:49:46', '2023-06-14 23:49:46', NULL, '{\"title\":\"Data Table\",\"updated_at\":\"2023-06-15T04:49:46.000000Z\",\"created_at\":\"2023-06-15T04:49:46.000000Z\",\"id\":31}'),
(73, '9969fae8-d1cb-4ac6-9cea-33a9e70a5b90', 1, 'Create', 'App\\Models\\Experty', 32, 'App\\Models\\Experty', 32, 'App\\Models\\Experty', 32, '', 'finished', '', '2023-06-14 23:50:01', '2023-06-14 23:50:01', NULL, '{\"title\":\"SonarQube\",\"updated_at\":\"2023-06-15T04:50:01.000000Z\",\"created_at\":\"2023-06-15T04:50:01.000000Z\",\"id\":32}'),
(74, '9969faf9-adb7-4929-b3ab-3d1b42a90c32', 1, 'Create', 'App\\Models\\Experty', 33, 'App\\Models\\Experty', 33, 'App\\Models\\Experty', 33, '', 'finished', '', '2023-06-14 23:50:12', '2023-06-14 23:50:12', NULL, '{\"title\":\"HP Fortify\",\"updated_at\":\"2023-06-15T04:50:12.000000Z\",\"created_at\":\"2023-06-15T04:50:12.000000Z\",\"id\":33}'),
(75, '9969fb1f-a3c2-4edd-bbc5-21f4dbdffe9d', 1, 'Create', 'App\\Models\\Skill', 9, 'App\\Models\\Skill', 9, 'App\\Models\\Skill', 9, '', 'finished', '', '2023-06-14 23:50:37', '2023-06-14 23:50:37', NULL, '{\"title\":\"Core Java\",\"updated_at\":\"2023-06-15T04:50:37.000000Z\",\"created_at\":\"2023-06-15T04:50:37.000000Z\",\"id\":9}'),
(76, '9969fb2e-e88d-4642-be06-50c071be0a78', 1, 'Create', 'App\\Models\\Skill', 10, 'App\\Models\\Skill', 10, 'App\\Models\\Skill', 10, '', 'finished', '', '2023-06-14 23:50:47', '2023-06-14 23:50:47', NULL, '{\"title\":\"SQL\",\"updated_at\":\"2023-06-15T04:50:47.000000Z\",\"created_at\":\"2023-06-15T04:50:47.000000Z\",\"id\":10}'),
(77, '9969fb41-b6a6-429d-b0cf-b0359858df00', 1, 'Create', 'App\\Models\\Skill', 11, 'App\\Models\\Skill', 11, 'App\\Models\\Skill', 11, '', 'finished', '', '2023-06-14 23:51:00', '2023-06-14 23:51:00', NULL, '{\"title\":\"Spring Boot\",\"updated_at\":\"2023-06-15T04:51:00.000000Z\",\"created_at\":\"2023-06-15T04:51:00.000000Z\",\"id\":11}'),
(78, '9969fb59-67db-4dae-887a-57508acf2224', 1, 'Create', 'App\\Models\\Skill', 12, 'App\\Models\\Skill', 12, 'App\\Models\\Skill', 12, '', 'finished', '', '2023-06-14 23:51:15', '2023-06-14 23:51:15', NULL, '{\"title\":\"Web Technologies\",\"updated_at\":\"2023-06-15T04:51:15.000000Z\",\"created_at\":\"2023-06-15T04:51:15.000000Z\",\"id\":12}'),
(79, '9969fb6d-721c-41da-902a-cfcc91abe495', 1, 'Create', 'App\\Models\\Skill', 13, 'App\\Models\\Skill', 13, 'App\\Models\\Skill', 13, '', 'finished', '', '2023-06-14 23:51:28', '2023-06-14 23:51:28', NULL, '{\"title\":\"Hibernate\",\"updated_at\":\"2023-06-15T04:51:28.000000Z\",\"created_at\":\"2023-06-15T04:51:28.000000Z\",\"id\":13}'),
(80, '9969fb88-2fde-4fe8-a17f-42f2ca1b7268', 1, 'Create', 'App\\Models\\Skill', 14, 'App\\Models\\Skill', 14, 'App\\Models\\Skill', 14, '', 'finished', '', '2023-06-14 23:51:46', '2023-06-14 23:51:46', NULL, '{\"title\":\"JDBC\",\"updated_at\":\"2023-06-15T04:51:46.000000Z\",\"created_at\":\"2023-06-15T04:51:46.000000Z\",\"id\":14}'),
(81, '9969fbb4-cdfb-4cfa-9e73-bc159e50ce28', 1, 'Create', 'App\\Models\\Expert', 3, 'App\\Models\\Expert', 3, 'App\\Models\\Expert', 3, '', 'finished', '', '2023-06-14 23:52:15', '2023-06-14 23:52:15', NULL, '{\"expert_category_id\":1,\"title\":\"Manisha Verma\",\"sub_title\":\"4.5 years of industrial experience as a Java Web Application Developer\",\"availability\":\"Full Time\",\"experience\":\"4.5 Years\",\"avatar\":\"8ixCuhDlHscnuuRBdKVh9vstbOxeM7xESi1pl1W3.jpg\",\"status\":\"Reviewed\",\"published\":true,\"description\":\"<div>4.5 years of industrial experience as a Java Web Application Developer specializing in the Windchill PLM domain with Spring Boot, Java 8, and MySQL knowledge. Involved in requirement gathering and understanding\\/analyzing the product. Worked on tuning the performance of applications. Conducted code reviews and implemented unit testing to ensure code quality and maintainability.&nbsp;<\\/div>\",\"updated_at\":\"2023-06-15T04:52:15.000000Z\",\"created_at\":\"2023-06-15T04:52:15.000000Z\",\"id\":3}'),
(82, '9969fcd0-467c-4275-9001-90f1b7c80a28', 1, 'Create', 'App\\Models\\Experty', 34, 'App\\Models\\Experty', 34, 'App\\Models\\Experty', 34, '', 'finished', '', '2023-06-14 23:55:21', '2023-06-14 23:55:21', NULL, '{\"title\":\"AWS\",\"updated_at\":\"2023-06-15T04:55:21.000000Z\",\"created_at\":\"2023-06-15T04:55:21.000000Z\",\"id\":34}'),
(83, '9969fce8-92bc-4733-86c7-7b5291b1dba1', 1, 'Create', 'App\\Models\\Experty', 35, 'App\\Models\\Experty', 35, 'App\\Models\\Experty', 35, '', 'finished', '', '2023-06-14 23:55:37', '2023-06-14 23:55:37', NULL, '{\"title\":\"Sequalae\",\"updated_at\":\"2023-06-15T04:55:37.000000Z\",\"created_at\":\"2023-06-15T04:55:37.000000Z\",\"id\":35}'),
(84, '9969fd1c-d8f5-4309-8472-d8db76242320', 1, 'Create', 'App\\Models\\Experty', 36, 'App\\Models\\Experty', 36, 'App\\Models\\Experty', 36, '', 'finished', '', '2023-06-14 23:56:11', '2023-06-14 23:56:11', NULL, '{\"title\":\"ExpressJs\",\"updated_at\":\"2023-06-15T04:56:11.000000Z\",\"created_at\":\"2023-06-15T04:56:11.000000Z\",\"id\":36}'),
(85, '9969fd43-70cc-4ea0-b84e-172d5ec871bf', 1, 'Create', 'App\\Models\\Skill', 15, 'App\\Models\\Skill', 15, 'App\\Models\\Skill', 15, '', 'finished', '', '2023-06-14 23:56:36', '2023-06-14 23:56:36', NULL, '{\"title\":\"Lambda\",\"updated_at\":\"2023-06-15T04:56:36.000000Z\",\"created_at\":\"2023-06-15T04:56:36.000000Z\",\"id\":15}'),
(86, '9969fd5a-6bcc-4ce5-86f8-ae0fc5211e92', 1, 'Create', 'App\\Models\\Skill', 16, 'App\\Models\\Skill', 16, 'App\\Models\\Skill', 16, '', 'finished', '', '2023-06-14 23:56:51', '2023-06-14 23:56:51', NULL, '{\"title\":\"API Gateway\",\"updated_at\":\"2023-06-15T04:56:51.000000Z\",\"created_at\":\"2023-06-15T04:56:51.000000Z\",\"id\":16}'),
(87, '9969fd65-2878-4a1b-9869-0bca72986773', 1, 'Create', 'App\\Models\\Skill', 17, 'App\\Models\\Skill', 17, 'App\\Models\\Skill', 17, '', 'finished', '', '2023-06-14 23:56:58', '2023-06-14 23:56:58', NULL, '{\"title\":\"RDS\",\"updated_at\":\"2023-06-15T04:56:58.000000Z\",\"created_at\":\"2023-06-15T04:56:58.000000Z\",\"id\":17}'),
(88, '9969fd7e-bc46-4947-9f21-6d61eb3c1feb', 1, 'Create', 'App\\Models\\Skill', 18, 'App\\Models\\Skill', 18, 'App\\Models\\Skill', 18, '', 'finished', '', '2023-06-14 23:57:15', '2023-06-14 23:57:15', NULL, '{\"title\":\"Cloud Watch\",\"updated_at\":\"2023-06-15T04:57:15.000000Z\",\"created_at\":\"2023-06-15T04:57:15.000000Z\",\"id\":18}'),
(89, '9969fd8b-0ec2-4e7f-abf7-8fe07bcfbbd7', 1, 'Create', 'App\\Models\\Skill', 19, 'App\\Models\\Skill', 19, 'App\\Models\\Skill', 19, '', 'finished', '', '2023-06-14 23:57:23', '2023-06-14 23:57:23', NULL, '{\"title\":\"S3\",\"updated_at\":\"2023-06-15T04:57:23.000000Z\",\"created_at\":\"2023-06-15T04:57:23.000000Z\",\"id\":19}'),
(90, '9969fd96-b94e-4896-b71c-f2fc85805db9', 1, 'Create', 'App\\Models\\Skill', 20, 'App\\Models\\Skill', 20, 'App\\Models\\Skill', 20, '', 'finished', '', '2023-06-14 23:57:31', '2023-06-14 23:57:31', NULL, '{\"title\":\"VPC\",\"updated_at\":\"2023-06-15T04:57:31.000000Z\",\"created_at\":\"2023-06-15T04:57:31.000000Z\",\"id\":20}'),
(91, '9969fda5-2b63-434b-b1f1-23f02cde7fe1', 1, 'Create', 'App\\Models\\Skill', 21, 'App\\Models\\Skill', 21, 'App\\Models\\Skill', 21, '', 'finished', '', '2023-06-14 23:57:40', '2023-06-14 23:57:40', NULL, '{\"title\":\"Cognito\",\"updated_at\":\"2023-06-15T04:57:40.000000Z\",\"created_at\":\"2023-06-15T04:57:40.000000Z\",\"id\":21}'),
(92, '9969fdb1-b9ec-4aa8-b51d-a529c59056dd', 1, 'Create', 'App\\Models\\Skill', 22, 'App\\Models\\Skill', 22, 'App\\Models\\Skill', 22, '', 'finished', '', '2023-06-14 23:57:48', '2023-06-14 23:57:48', NULL, '{\"title\":\"IAM\",\"updated_at\":\"2023-06-15T04:57:48.000000Z\",\"created_at\":\"2023-06-15T04:57:48.000000Z\",\"id\":22}'),
(93, '9969fdbc-8690-4bda-aa68-74fefbc8af0a', 1, 'Create', 'App\\Models\\Skill', 23, 'App\\Models\\Skill', 23, 'App\\Models\\Skill', 23, '', 'finished', '', '2023-06-14 23:57:56', '2023-06-14 23:57:56', NULL, '{\"title\":\"CI\\/CD\",\"updated_at\":\"2023-06-15T04:57:56.000000Z\",\"created_at\":\"2023-06-15T04:57:56.000000Z\",\"id\":23}'),
(94, '9969fddc-6aaa-434e-a9ca-f8e89311d4bd', 1, 'Create', 'App\\Models\\Expert', 4, 'App\\Models\\Expert', 4, 'App\\Models\\Expert', 4, '', 'finished', '', '2023-06-14 23:58:16', '2023-06-14 23:58:16', NULL, '{\"expert_category_id\":1,\"title\":\"Abishek S\",\"sub_title\":\"2+ Years Experienced Full-Stack Developer\",\"availability\":\"Full Time\",\"experience\":\"2+ Years\",\"avatar\":\"aZi4v7kBM7fcLfzDDCVmBbKkpoSH9U1oSPo8U1jB.jpg\",\"status\":\"Reviewed\",\"published\":true,\"description\":\"<div>&nbsp;Full-Stack Developer with nearly 2 years of experience in HTML, CSS, REACT, NODEJS, AWS, MYSQL, JAVASCRIPT, and MongoDB. An ambitious and self-motivated Full-Stack Developer with nearly 2 years of industry experience who possesses self-discipline and ability to work with the minimum of supervision.&nbsp;<\\/div>\",\"updated_at\":\"2023-06-15T04:58:16.000000Z\",\"created_at\":\"2023-06-15T04:58:16.000000Z\",\"id\":4}'),
(95, '9969fe8b-fd1c-4b62-9341-97298730cea1', 1, 'Update', 'App\\Models\\Skill', 23, 'App\\Models\\Skill', 23, 'App\\Models\\Skill', 23, '', 'finished', '', '2023-06-15 00:00:12', '2023-06-15 00:00:12', '{\"title\":\"CI\\/CD\"}', '{\"title\":\"CI\\/CD Pipelines\"}'),
(96, '9969fea2-9716-42b9-a1eb-815643866b02', 1, 'Update', 'App\\Models\\Skill', 17, 'App\\Models\\Skill', 17, 'App\\Models\\Skill', 17, '', 'finished', '', '2023-06-15 00:00:26', '2023-06-15 00:00:26', '{\"title\":\"RDS\"}', '{\"title\":\"RDS Aurora\"}'),
(97, '9969fedb-4990-4ede-ad97-d270fdf13136', 1, 'Update', 'App\\Models\\Expert', 4, 'App\\Models\\Expert', 4, 'App\\Models\\Expert', 4, '', 'finished', '', '2023-06-15 00:01:04', '2023-06-15 00:01:04', '{\"published\":1}', '{\"published\":true}'),
(98, '9970ca75-17bd-4988-b132-a5e7bc6f8a8c', 1, 'Update', 'App\\Models\\Client', 1, 'App\\Models\\Client', 1, 'App\\Models\\Client', 1, '', 'finished', '', '2023-06-18 09:05:20', '2023-06-18 09:05:20', '{\"description\":\"<div>Your assistance was just outstanding. You said, \\\"That\'s something I can handle and I\'m going to solve that for you,\\\" after we informed you about our issues. And even though we only had a little window of time 4 to 8 weeks you kept your word. We now have a product development team in place. You truly followed through on your promises, and that is fantastic!<\\/div>\",\"published\":1}', '{\"description\":\"our assistance was just outstanding. You said, \\\"That\'s something I can handle and I\'m going to solve that for you,\\\" after we informed you about our issues. And even though we only had a little window of time 4 to 8 weeks you kept your word. We now have a product development team in place. You truly followed through on your promises, and that is fantastic!\",\"published\":true}'),
(99, '9970d48f-6ba7-4c0b-8740-5ca42d96e894', 1, 'Update', 'App\\Models\\Client', 1, 'App\\Models\\Client', 1, 'App\\Models\\Client', 1, '', 'finished', '', '2023-06-18 09:33:35', '2023-06-18 09:33:35', '{\"description\":\"our assistance was just outstanding. You said, \\\"That\'s something I can handle and I\'m going to solve that for you,\\\" after we informed you about our issues. And even though we only had a little window of time 4 to 8 weeks you kept your word. We now have a product development team in place. You truly followed through on your promises, and that is fantastic!\",\"published\":1}', '{\"description\":\"Your assistance was just outstanding. You said, \\\"That\'s something I can handle and I\'m going to solve that for you,\\\" after we informed you about our issues. And even though we only had a little window of time 4 to 8 weeks you kept your word. We now have a product development team in place. You truly followed through on your promises, and that is fantastic!\",\"published\":true}'),
(100, '9970d521-45e4-4e61-b02e-a85ed9f97583', 1, 'Create', 'App\\Models\\Client', 2, 'App\\Models\\Client', 2, 'App\\Models\\Client', 2, '', 'finished', '', '2023-06-18 09:35:11', '2023-06-18 09:35:11', NULL, '{\"title\":\"Spotify\",\"reviwer\":\"Spotify\\u2019s Technology Dev Team\",\"tag_line\":\"All of the teams\' excitement was wonderful, but one partner, in particular, caught our attention.\",\"logo\":\"TELscspNucIl6wVRY6o8fLOwcVBX4IkNudmZhG3v.png\",\"published\":true,\"description\":\"All of the teams\' excitement was wonderful, but one partner, in particular, caught our attention. He provided insightful advice on strengthening our concept, kept cool under pressure, and was very proactive. In some ways, he was highly motivated. similar to us! Apart from that, we were quite impressed with how well Bizionic teams were able to hand-pick a fantastic squad. Furthermore, you went above and above. We are really grateful for it.\",\"updated_at\":\"2023-06-18T14:35:11.000000Z\",\"created_at\":\"2023-06-18T14:35:11.000000Z\",\"id\":2}'),
(101, '9970d57c-9bd5-4720-9836-98b01ea30a68', 1, 'Create', 'App\\Models\\Client', 3, 'App\\Models\\Client', 3, 'App\\Models\\Client', 3, '', 'finished', '', '2023-06-18 09:36:11', '2023-06-18 09:36:11', NULL, '{\"title\":\"SKY\",\"reviwer\":\"Sky\\u2019s Technology Dev Team\",\"tag_line\":\"We have prior experience with development organizations that carried out agreed-upon tasks.\",\"logo\":\"Bl1O47ZBMwY5Icybe329EcG1CQ6QOsYWtBRyo2Xs.png\",\"published\":true,\"description\":\"We have prior experience with development organizations that carried out agreed-upon tasks. This organization, which BIZIONIC employees introduced to us, goes above and above. And is far less expensive than our previous ones. We also appreciated that there was no fee for the BIZIONIC teams\' services. In fact, we would be more than happy to pay if we had known the conclusion in advance. Aside from that, I like the fantastic possibilities (partners) they give us. We spent less time and effort as a result. Moreover, they provided us with outstanding support throughout the entire procedure. I recommend BIZIONIC teams to anybody searching for exceptional engineers.\",\"updated_at\":\"2023-06-18T14:36:10.000000Z\",\"created_at\":\"2023-06-18T14:36:10.000000Z\",\"id\":3}'),
(102, '9970d5bb-3a0e-4fc7-859b-ad26087b5029', 1, 'Create', 'App\\Models\\Client', 4, 'App\\Models\\Client', 4, 'App\\Models\\Client', 4, '', 'finished', '', '2023-06-18 09:36:52', '2023-06-18 09:36:52', NULL, '{\"title\":\"Emporium Capital\",\"reviwer\":\"Emporium Capital Management Team\",\"tag_line\":\"Working with this marketing agency was a game-changer for our business.\",\"logo\":\"37ybUvtKPFX8TOKXVVVUUH1vXWkhTcbc4CHA8Io7.png\",\"published\":true,\"description\":\"Working with this marketing agency was a game-changer for our business. They developed a comprehensive strategy that helped us reach our target audience and increase our sales. Their team was responsive, creative, and always professional. We would highly recommend them to anyone looking for a results-driven marketing partner.\",\"updated_at\":\"2023-06-18T14:36:52.000000Z\",\"created_at\":\"2023-06-18T14:36:52.000000Z\",\"id\":4}'),
(103, '9970d604-2ebf-4c40-b7fe-f0fea9d0398e', 1, 'Create', 'App\\Models\\Client', 5, 'App\\Models\\Client', 5, 'App\\Models\\Client', 5, '', 'finished', '', '2023-06-18 09:37:39', '2023-06-18 09:37:39', NULL, '{\"title\":\"Nakheel Properties\",\"reviwer\":\"Marketing Manager Nakheel Properties\",\"tag_line\":\"Digitech agency, Bizionic team has mastered the digitech tech marketing combination concept.\",\"logo\":\"Hyp1AupNXpu1VSdcEASMoAHPhHOXs7NsTyknMoFB.png\",\"published\":true,\"description\":\"Digitech agency, Bizionic team has mastered the digitech tech marketing combination\\r\\nconcept. A professional team, with excellent turnaround time, and very proactive, to say the least. Nakheel properties qualified lead pipeline increased over 300% over the last 6 months since we started cooperating with Bizionic, an incredible feat and tremendous results. We\\r\\nappreciate this partnership and look forward to years of cooperation ahead.\\r\\nAll the best, and thank you SID, you a WIZ.\",\"updated_at\":\"2023-06-18T14:37:39.000000Z\",\"created_at\":\"2023-06-18T14:37:39.000000Z\",\"id\":5}'),
(104, '9970d647-6aef-4e02-b00e-e7283a464a19', 1, 'Create', 'App\\Models\\Client', 6, 'App\\Models\\Client', 6, 'App\\Models\\Client', 6, '', 'finished', '', '2023-06-18 09:38:23', '2023-06-18 09:38:23', NULL, '{\"title\":\"American Hospital\",\"reviwer\":\"American Hospital Management Team\",\"tag_line\":\"Bizionic IT outsourcing company has been critical to our digital transformation efforts.\",\"logo\":\"wtBrLNhzcWUp379Gk5fK4QVazEZ1I5BnizzloLMQ.png\",\"published\":true,\"description\":\"Bizionic IT outsourcing company has been critical to our digital transformation efforts. They have helped us identify and implement the right technology solutions to support our business objectives. Their team is innovative, proactive, and always up-to-date with the latest technology trends. We appreciate their strategic approach and their ability to deliver measurable results.\",\"updated_at\":\"2023-06-18T14:38:23.000000Z\",\"created_at\":\"2023-06-18T14:38:23.000000Z\",\"id\":6}'),
(105, '9970d6a8-a790-41b5-b35a-a21d32ece53a', 1, 'Create', 'App\\Models\\Client', 7, 'App\\Models\\Client', 7, 'App\\Models\\Client', 7, '', 'finished', '', '2023-06-18 09:39:27', '2023-06-18 09:39:27', NULL, '{\"title\":\"Nestle\",\"reviwer\":\"Nestle, Middle East\",\"tag_line\":\"We were looking for a marketing agency that could help us increase our online presence and drive more traffic to our website.\",\"logo\":\"WXPZQm9OFx15L1UyQEhrJ63M96H3buEmJUhPjxdG.png\",\"published\":true,\"description\":\"We were looking for a marketing agency that could help us increase our online presence and drive more traffic to our website. This agency exceeded our expectations, developing a comprehensive digital strategy that included SEO, social media, and content marketing. Their team was responsive and provided regular updates on our progress. We saw a significant increase in website traffic and leads, and we would definitely recommend them to others.\",\"updated_at\":\"2023-06-18T14:39:27.000000Z\",\"created_at\":\"2023-06-18T14:39:27.000000Z\",\"id\":7}'),
(106, '9970d710-3205-4150-8073-1109fbc98782', 1, 'Create', 'App\\Models\\Client', 8, 'App\\Models\\Client', 8, 'App\\Models\\Client', 8, '', 'finished', '', '2023-06-18 09:40:35', '2023-06-18 09:40:35', NULL, '{\"title\":\"Music\",\"reviwer\":\"Music Marketing Team\",\"tag_line\":\"We have been working with BIZIONIC technology company for several years\",\"logo\":\"PUV5GlaYQXOFpAYsQx0fyn36yqrKbr1WRetSw7kf.png\",\"published\":true,\"description\":\"We have been working with BIZIONIC technology company for several years, and they have consistently provided us with cutting-edge solutions that have helped us stay ahead of the curve. Their team is knowledgeable, responsive, and always available to answer our questions. We appreciate their commitment to innovation and look forward to continuing to work with them.\",\"updated_at\":\"2023-06-18T14:40:35.000000Z\",\"created_at\":\"2023-06-18T14:40:35.000000Z\",\"id\":8}'),
(107, '9970d754-f80a-43e3-8dc4-5bebe609fd44', 1, 'Create', 'App\\Models\\Client', 9, 'App\\Models\\Client', 9, 'App\\Models\\Client', 9, '', 'finished', '', '2023-06-18 09:41:20', '2023-06-18 09:41:20', NULL, '{\"title\":\"Turkish Airlines\",\"reviwer\":\"Turkish Airlines, Middle East and Asia\",\"tag_line\":\"BIZIONIC marketing agency helped us improve our brand awareness and attract new customers from the middle east and Asian region.\",\"logo\":\"2OiHdAilszpKv84dDN3P17NpUNUEoUMFh0ks4XzZ.png\",\"published\":true,\"description\":\"BIZIONIC marketing agency helped us improve our brand awareness and attract new customers from the middle east and Asian region. They developed a targeted campaign that resonated with our audience and helped us stand out from our competitors. Their team was knowledgeable and professional, and we appreciated their transparent approach to reporting and analytics.\",\"updated_at\":\"2023-06-18T14:41:20.000000Z\",\"created_at\":\"2023-06-18T14:41:20.000000Z\",\"id\":9}'),
(108, '9970d798-8564-497b-a3de-dd5ed71a247e', 1, 'Create', 'App\\Models\\Client', 10, 'App\\Models\\Client', 10, 'App\\Models\\Client', 10, '', 'finished', '', '2023-06-18 09:42:04', '2023-06-18 09:42:04', NULL, '{\"title\":\"Letwizard.com\",\"reviwer\":\"Letwizard Founder\",\"tag_line\":\"BIZIONIC TEAM created the whole propfintech project. From the initial idea stage to the design, development, and launch, Bizionic is our primary software development partner and marketing agency.\",\"logo\":\"F8E05A9WHFhCK46rRQSswUcpIsB8B1osshmfDxv1.png\",\"published\":true,\"description\":\"BIZIONIC TEAM created the whole propfintech project. From the initial idea stage to the design, development, and launch, Bizionic is our primary software development partner and marketing agency. Throughout the phases of project design, development, and execution, they have produced reliable, high-quality measurable outcomes. We strongly advise any STARTUPS searching for a comprehensive solution for their complicated and challenging tasks. The assistance provided by team BIZIONIC during the project and their professionalism, responsiveness, communication, and clear project deliverables are appreciated.\",\"updated_at\":\"2023-06-18T14:42:04.000000Z\",\"created_at\":\"2023-06-18T14:42:04.000000Z\",\"id\":10}');
INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`) VALUES
(109, '9970d7e6-aaf9-4be8-9534-e4834bd00902', 1, 'Create', 'App\\Models\\Client', 11, 'App\\Models\\Client', 11, 'App\\Models\\Client', 11, '', 'finished', '', '2023-06-18 09:42:56', '2023-06-18 09:42:56', NULL, '{\"title\":\"Baazex\",\"reviwer\":\"Baazex Management Team\",\"tag_line\":\"Our company had a great experience working with this BIZIONIC marketing agency.\",\"logo\":\"KkZeSlklco3vURKfGAHCBx8ND7Tfnt8YP2VKVaZd.png\",\"published\":true,\"description\":\"Our company had a great experience working with this BIZIONIC marketing agency. They listened to our needs and provided a customized solution aligned with our business objectives. Their team was collaborative and kept us informed throughout the entire process. We were impressed by their creativity and the results they delivered.\",\"updated_at\":\"2023-06-18T14:42:56.000000Z\",\"created_at\":\"2023-06-18T14:42:56.000000Z\",\"id\":11}'),
(110, '9970d822-40f9-49dc-8b38-cf32349393bb', 1, 'Create', 'App\\Models\\Client', 12, 'App\\Models\\Client', 12, 'App\\Models\\Client', 12, '', 'finished', '', '2023-06-18 09:43:35', '2023-06-18 09:43:35', NULL, '{\"title\":\"Montblanc\",\"reviwer\":\"Montblanc Asia\",\"tag_line\":\"BIZIONIC Marketing company developed a comprehensive marketing plan for our business that exceeded our expectations\",\"logo\":\"fP3l2VggDCV2jwgMc9ri1INboOlKEt5IL7OwWf8A.png\",\"published\":true,\"description\":\"BIZIONIC Marketing company developed a comprehensive marketing plan for our business that exceeded our expectations. They took the time to understand our unique needs and provided a customized solution that aligned with our business goals. Their team was professional, responsive, and always available to answer our questions. We would highly recommend them to anyone looking for a top-notch marketing partner.\",\"updated_at\":\"2023-06-18T14:43:35.000000Z\",\"created_at\":\"2023-06-18T14:43:35.000000Z\",\"id\":12}'),
(111, '9970d85c-0615-421d-86b5-bbe0dc519b95', 1, 'Create', 'App\\Models\\Client', 13, 'App\\Models\\Client', 13, 'App\\Models\\Client', 13, '', 'finished', '', '2023-06-18 09:44:12', '2023-06-18 09:44:12', NULL, '{\"title\":\"Virgin\",\"reviwer\":\"Virgin Middle east & Asia\",\"tag_line\":\"We were impressed by the Bizionic marketing company\'s ability to create a powerful and effective social media strategy for our business.\",\"logo\":\"gYCj6qszXp0t0mAjho2St8whx3VlnEzP8PVjBGR8.png\",\"published\":true,\"description\":\"We were impressed by the Bizionic marketing company\'s ability to create a powerful and effective social media strategy for our business. They helped us identify our target audience and provided us with compelling content that resonated with our customers. Their team was easy to work with, and we appreciated their attention to detail and creativity.\",\"updated_at\":\"2023-06-18T14:44:12.000000Z\",\"created_at\":\"2023-06-18T14:44:12.000000Z\",\"id\":13}'),
(112, '9970d8a3-69ef-4bc4-98b8-2ea385814157', 1, 'Create', 'App\\Models\\Client', 14, 'App\\Models\\Client', 14, 'App\\Models\\Client', 14, '', 'finished', '', '2023-06-18 09:44:59', '2023-06-18 09:44:59', NULL, '{\"title\":\"Fujifilm\",\"reviwer\":\"Fujifilm\\u2019s Technology Dev Team\",\"tag_line\":\"The most effective and efficient approach to uncovering and communicating information is through compelling data visualization.\",\"logo\":\"dcFydfauM7jExKvifpWHPqq1qr0IWpVJk0ZF5MNQ.png\",\"published\":true,\"description\":\"The most effective and efficient approach to uncovering and communicating information is through compelling data visualization. This partner has been recommended as an authority in web development using Telerik\'s technologies. We have determined that Kendo UI is the best framework for creating rich web apps for interactive data visualization. The partner swiftly comprehended our needs and created a very attractive and responsive web application in a very aggressive timeframe. We are extremely happy with the result.\",\"updated_at\":\"2023-06-18T14:44:59.000000Z\",\"created_at\":\"2023-06-18T14:44:59.000000Z\",\"id\":14}'),
(113, '9970d8ed-740c-4281-a4ec-722c5ee475a9', 1, 'Create', 'App\\Models\\Client', 15, 'App\\Models\\Client', 15, 'App\\Models\\Client', 15, '', 'finished', '', '2023-06-18 09:45:48', '2023-06-18 09:45:48', NULL, '{\"title\":\"Hubun\",\"reviwer\":\"Hubun Marketing Team\",\"tag_line\":\"Bizionic marketing company helped us launch a successful email marketing campaign that resulted in increased engagement and sales.\",\"logo\":\"stlXL91GHb0JeWs5If6Q3tPuCzg4iywysmcOCa1x.png\",\"published\":true,\"description\":\"Bizionic marketing company helped us launch a successful email marketing campaign that resulted in increased engagement and sales. Their team was knowledgeable and provided us with regular updates on our progress. We appreciated their transparency and their ability to deliver measurable results.\",\"updated_at\":\"2023-06-18T14:45:48.000000Z\",\"created_at\":\"2023-06-18T14:45:48.000000Z\",\"id\":15}'),
(114, '9970d92b-a7ee-497b-994e-4d46fa1d9bdc', 1, 'Create', 'App\\Models\\Client', 16, 'App\\Models\\Client', 16, 'App\\Models\\Client', 16, '', 'finished', '', '2023-06-18 09:46:29', '2023-06-18 09:46:29', NULL, '{\"title\":\"Continental\",\"reviwer\":\"Continental Middle East\",\"tag_line\":\"We were looking for a performance marketing agency that could help us improve our email marketing and automation.\",\"logo\":\"hcA17S2K5X2HqQX03HC4r0VjxQ2pHacP9cqsAD0D.png\",\"published\":true,\"description\":\"We were looking for a performance marketing agency that could help us improve our email marketing and automation. This agency provided us with a comprehensive solution that included email design, segmentation, and A\\/B testing. Their team was professional and delivered high-quality work that exceeded our expectations. We saw a significant increase in our email open rates and click-through rates, and we would definitely work with them again.\",\"updated_at\":\"2023-06-18T14:46:29.000000Z\",\"created_at\":\"2023-06-18T14:46:29.000000Z\",\"id\":16}'),
(115, '9970d988-b41a-401b-9788-5ae7aab072c6', 1, 'Create', 'App\\Models\\Client', 17, 'App\\Models\\Client', 17, 'App\\Models\\Client', 17, '', 'finished', '', '2023-06-18 09:47:30', '2023-06-18 09:47:30', NULL, '{\"title\":\"Kenwood\",\"reviwer\":\"Kenwood House Marketing Team\",\"tag_line\":\"We have been working with BIZIONIC marketing company for several years, and they have helped us significantly increase our brand awareness and drive more sales.\",\"logo\":\"u3j3opbLiCcsmZif0oKmpjXX0VYkBScFrk6fyHFM.png\",\"published\":true,\"description\":\"We have been working with BIZIONIC marketing company for several years, and they have helped us significantly increase our brand awareness and drive more sales. Their team is creative, strategic, and always up-to-date with the latest marketing trends. We appreciate their collaborative approach and their ability to deliver results.\",\"updated_at\":\"2023-06-18T14:47:30.000000Z\",\"created_at\":\"2023-06-18T14:47:30.000000Z\",\"id\":17}'),
(116, '9970d9c7-b8ac-4753-8c1b-f2d591583028', 1, 'Create', 'App\\Models\\Client', 18, 'App\\Models\\Client', 18, 'App\\Models\\Client', 18, '', 'finished', '', '2023-06-18 09:48:11', '2023-06-18 09:48:11', NULL, '{\"title\":\"ECSTASY\",\"reviwer\":\"Ecstacy Technology Dev Team\",\"tag_line\":\"We were looking for a technology partner that could help us streamline our operations and improve our customer experience.\",\"logo\":\"uVKGf8RbwSSiGwBNzbRxBCn5a1nd8l5vhQpRch9a.png\",\"published\":true,\"description\":\"We were looking for a technology partner that could help us streamline our operations and improve our customer experience. This technology company provided us with a customized solution that exceeded our expectations. Their team was professional and creative and always went above and beyond to ensure our success. We would highly recommend them to anyone looking for a reliable technology partner.\",\"updated_at\":\"2023-06-18T14:48:11.000000Z\",\"created_at\":\"2023-06-18T14:48:11.000000Z\",\"id\":18}'),
(117, '9970da11-cd72-44f4-8171-d4e399a00de2', 1, 'Create', 'App\\Models\\Client', 19, 'App\\Models\\Client', 19, 'App\\Models\\Client', 19, '', 'finished', '', '2023-06-18 09:48:59', '2023-06-18 09:48:59', NULL, '{\"title\":\"Time House\",\"reviwer\":\"Time House Marketing Team\",\"tag_line\":\"We were impressed by this Bizionic digital agency\'s ability to create a powerful and effective website design for our business\",\"logo\":\"ax1BR6axOkHYMdsFaxc0RdI7LT3srF0mZ33cAm3j.png\",\"published\":true,\"description\":\"We were impressed by this Bizionic digital agency\'s ability to create a powerful and effective website design for our business. They helped us identify our target audience and provided us with a user-friendly, visually appealing website. Their team was easy to work with, and we appreciated their attention to detail and creativity.\",\"updated_at\":\"2023-06-18T14:48:59.000000Z\",\"created_at\":\"2023-06-18T14:48:59.000000Z\",\"id\":19}'),
(118, '9970da5c-febf-4be0-b2fd-056ae683bd6b', 1, 'Create', 'App\\Models\\Client', 20, 'App\\Models\\Client', 20, 'App\\Models\\Client', 20, '', 'finished', '', '2023-06-18 09:49:49', '2023-06-18 09:49:49', NULL, '{\"title\":\"Century Financials\",\"reviwer\":\"Century Financials Management Team\",\"tag_line\":\"We have been working with Bizionic performance marketing agency for over a year, and they have significantly increased our online sales.\",\"logo\":\"aV6mqryOePKwtruEzCDis8gAMuEpLuIfQGQrSNBf.png\",\"published\":true,\"description\":\"We have been working with Bizionic performance marketing agency for over a year, and they have significantly increased our online sales. Their team is data-driven, results-oriented, and always up-to-date with the latest performance marketing trends. We appreciate their collaborative approach and their ability to deliver measurable results.\",\"updated_at\":\"2023-06-18T14:49:49.000000Z\",\"created_at\":\"2023-06-18T14:49:49.000000Z\",\"id\":20}'),
(119, '9970daaf-bf1b-4e6d-995c-7bcbc91bb98c', 1, 'Create', 'App\\Models\\Client', 21, 'App\\Models\\Client', 21, 'App\\Models\\Client', 21, '', 'finished', '', '2023-06-18 09:50:43', '2023-06-18 09:50:43', NULL, '{\"title\":\"Bhuth\",\"reviwer\":\"Bhuth Management Team\",\"tag_line\":\"Working with this technology company has been a great experience.\",\"logo\":\"yU8xpu0YmEVUxhYipEnYYmINLbm3NWWiCtOnAZEA.png\",\"published\":true,\"description\":\"Working with this technology company has been a great experience. They have helped us optimize our IT infrastructure, which has resulted in increased efficiency and cost savings. Their team was easy to work with, and we appreciated their attention to detail and commitment to our success. We would definitely recommend them to other businesses.\",\"updated_at\":\"2023-06-18T14:50:43.000000Z\",\"created_at\":\"2023-06-18T14:50:43.000000Z\",\"id\":21}'),
(120, '9970db01-cce9-4504-b85c-047b7626f0bf', 1, 'Create', 'App\\Models\\Client', 22, 'App\\Models\\Client', 22, 'App\\Models\\Client', 22, '', 'finished', '', '2023-06-18 09:51:37', '2023-06-18 09:51:37', NULL, '{\"title\":\"Jobtome\",\"reviwer\":\"Jobtome Marketing Team\",\"tag_line\":\"BIZIONIC performance marketing agency helped us launch a successful affiliate marketing campaign that resulted in increased conversions and sales.\",\"logo\":\"u9OaGGML8XZzlnWMz968VB1r6Dp4OXxN8kVGQzWH.png\",\"published\":true,\"description\":\"BIZIONIC performance marketing agency helped us launch a successful affiliate marketing campaign that resulted in increased conversions and sales. Their team was knowledgeable and provided us with regular updates on our progress. We appreciated their transparency and their ability to deliver measurable results.\",\"updated_at\":\"2023-06-18T14:51:37.000000Z\",\"created_at\":\"2023-06-18T14:51:37.000000Z\",\"id\":22}'),
(121, '9970db50-3d62-44e6-acb6-e7a4bd576a27', 1, 'Create', 'App\\Models\\Client', 23, 'App\\Models\\Client', 23, 'App\\Models\\Client', 23, '', 'finished', '', '2023-06-18 09:52:28', '2023-06-18 09:52:28', NULL, '{\"title\":\"Ericsson\",\"reviwer\":\"Ericsson Human Resources Team\",\"tag_line\":\"Bizionic IT Outstaffing solutions has helped us reduce our IT costs and improve our overall efficiency. They deeply understand our business needs and have provided us with reliable support and maintenance services.\",\"logo\":\"I6l9MZNMQnCIrVq4hMoWlZmMjly5uzWnHrESQ5SQ.png\",\"published\":true,\"description\":\"Bizionic IT Outstaffing solutions has helped us reduce our IT costs and improve our overall efficiency. They deeply understand our business needs and have provided us with reliable support and maintenance services. Their team is responsive, knowledgeable, and proactive in identifying and addressing issues before they become problems. We highly recommend them to anyone looking for a reliable IT partner\",\"updated_at\":\"2023-06-18T14:52:28.000000Z\",\"created_at\":\"2023-06-18T14:52:28.000000Z\",\"id\":23}'),
(122, '9970db9b-127d-49c3-9246-a224d31ee604', 1, 'Create', 'App\\Models\\Client', 24, 'App\\Models\\Client', 24, 'App\\Models\\Client', 24, '', 'finished', '', '2023-06-18 09:53:17', '2023-06-18 09:53:17', NULL, '{\"title\":\"ByteDance\",\"reviwer\":\"ByteDance Technology Dev Team\",\"tag_line\":\"Byte dance team was impressed by this IT outsourcing company\'s ability to quickly ramp up and provide us with a scalable and cost-effective solution for our software development needs.\",\"logo\":\"p4lXlsR6R3ztzMUDtc6nT6HCsmBHH168oGypucWm.png\",\"published\":true,\"description\":\"Byte dance team was impressed by this IT outsourcing company\'s ability to quickly ramp up and provide us with a scalable and cost-effective solution for our software development needs. Their team is experienced, talented, and collaborative, and we appreciate their ability to work seamlessly with our internal team. They have helped us successfully deliver several projects on time and within budget\",\"updated_at\":\"2023-06-18T14:53:17.000000Z\",\"created_at\":\"2023-06-18T14:53:17.000000Z\",\"id\":24}'),
(123, '9970dc17-24d9-428f-9e55-89012f4adfd6', 1, 'Create', 'App\\Models\\Client', 25, 'App\\Models\\Client', 25, 'App\\Models\\Client', 25, '', 'finished', '', '2023-06-18 09:54:38', '2023-06-18 09:54:38', NULL, '{\"title\":\"Just Eat Management Team\",\"reviwer\":\"Just Eat Management Team\",\"tag_line\":\"Bizionic performance marketing team helped us launch a successful affiliate marketing campaign that resulted in increased conversions and sales.\",\"logo\":\"uZhSSpo7lfAsVyU220IQiWcKyDgnnhBvrlOuCIFN.png\",\"published\":true,\"description\":\"Bizionic performance marketing team helped us launch a successful affiliate marketing campaign that resulted in increased conversions and sales. Their team was knowledgeable and provided us with regular updates on our progress. We appreciated their transparency and their ability to deliver measurable results\",\"updated_at\":\"2023-06-18T14:54:38.000000Z\",\"created_at\":\"2023-06-18T14:54:38.000000Z\",\"id\":25}'),
(124, '997e7466-271e-4adb-944d-c080e8682593', 1, 'Create', 'App\\Models\\Page', 12, 'App\\Models\\Page', 12, 'App\\Models\\Page', 12, '', 'finished', '', '2023-06-25 04:06:17', '2023-06-25 04:06:17', NULL, '{\"title\":\"Industries-Startup\",\"slug\":\"industries|industries-we-serve|industries|startups\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"startup\",\"updated_at\":\"2023-06-25T09:06:17.000000Z\",\"created_at\":\"2023-06-25T09:06:17.000000Z\",\"id\":12}'),
(125, '997ecdf7-3745-401f-aa35-d51c44e225a3', 1, 'Create', 'App\\Models\\Page', 13, 'App\\Models\\Page', 13, 'App\\Models\\Page', 13, '', 'finished', '', '2023-06-25 08:16:44', '2023-06-25 08:16:44', NULL, '{\"title\":\"Instant Hirin\",\"slug\":\"Insta Hirin\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"instahirin\",\"updated_at\":\"2023-06-25T13:16:44.000000Z\",\"created_at\":\"2023-06-25T13:16:44.000000Z\",\"id\":13}'),
(126, '997ed5b4-0cbe-4415-bc8a-c7b52ab15133', 1, 'Update', 'App\\Models\\Page', 13, 'App\\Models\\Page', 13, 'App\\Models\\Page', 13, '', 'finished', '', '2023-06-25 08:38:22', '2023-06-25 08:38:22', '{\"slug\":\"Insta Hirin\"}', '{\"slug\":\"InstaHirin\"}'),
(127, '99850c18-6852-4418-b640-97d8682df8b7', 1, 'Create', 'App\\Models\\Page', 14, 'App\\Models\\Page', 14, 'App\\Models\\Page', 14, '', 'finished', '', '2023-06-28 10:45:26', '2023-06-28 10:45:26', NULL, '{\"title\":\"Insta Requirement Form\",\"slug\":\"hire|developer|developers-other|instaRequirement\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"instaRequirement\",\"updated_at\":\"2023-06-28T15:45:26.000000Z\",\"created_at\":\"2023-06-28T15:45:26.000000Z\",\"id\":14}'),
(128, '99913da2-d2ca-458c-b9db-ec320eab64a7', 1, 'Create', 'App\\Models\\Page', 15, 'App\\Models\\Page', 15, 'App\\Models\\Page', 15, '', 'finished', '', '2023-07-04 12:13:53', '2023-07-04 12:13:53', NULL, '{\"title\":\"Real Estate\",\"slug\":\"industries|industries-we-serve|industries|real-estate\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"realestate\",\"updated_at\":\"2023-07-04T17:13:53.000000Z\",\"created_at\":\"2023-07-04T17:13:53.000000Z\",\"id\":15}'),
(129, '99913e29-89e3-408b-975b-a6cb95e26057', 1, 'Create', 'App\\Models\\Page', 16, 'App\\Models\\Page', 16, 'App\\Models\\Page', 16, '', 'finished', '', '2023-07-04 12:15:22', '2023-07-04 12:15:22', NULL, '{\"title\":\"B2B Solutions\",\"slug\":\"industries|industries-we-serve|industries|b2b-solutions\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"b2b\",\"updated_at\":\"2023-07-04T17:15:22.000000Z\",\"created_at\":\"2023-07-04T17:15:22.000000Z\",\"id\":16}'),
(130, '99913e73-4a3c-456e-892d-d9e860bd8624', 1, 'Create', 'App\\Models\\Page', 17, 'App\\Models\\Page', 17, 'App\\Models\\Page', 17, '', 'finished', '', '2023-07-04 12:16:10', '2023-07-04 12:16:10', NULL, '{\"title\":\"B2C Solutions\",\"slug\":\"industries|industries-we-serve|industries|b2c-solutions\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"b2c\",\"updated_at\":\"2023-07-04T17:16:10.000000Z\",\"created_at\":\"2023-07-04T17:16:10.000000Z\",\"id\":17}'),
(131, '99913ed1-3c5f-4bb6-bf9f-ae687e9d38ce', 1, 'Create', 'App\\Models\\Page', 18, 'App\\Models\\Page', 18, 'App\\Models\\Page', 18, '', 'finished', '', '2023-07-04 12:17:12', '2023-07-04 12:17:12', NULL, '{\"title\":\"Health Care\",\"slug\":\"industries|industries-we-serve|industries|healthcare\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"health\",\"updated_at\":\"2023-07-04T17:17:12.000000Z\",\"created_at\":\"2023-07-04T17:17:12.000000Z\",\"id\":18}'),
(132, '99913fb2-3486-450e-9f34-32573b3cb849', 1, 'Create', 'App\\Models\\Page', 19, 'App\\Models\\Page', 19, 'App\\Models\\Page', 19, '', 'finished', '', '2023-07-04 12:19:39', '2023-07-04 12:19:39', NULL, '{\"title\":\"Travel & Hospitality\",\"slug\":\"industries|industries-we-serve|industries|travel-and-hospitality\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"travel\",\"updated_at\":\"2023-07-04T17:19:39.000000Z\",\"created_at\":\"2023-07-04T17:19:39.000000Z\",\"id\":19}'),
(133, '99914002-2ee9-4345-993b-91f295503e85', 1, 'Create', 'App\\Models\\Page', 20, 'App\\Models\\Page', 20, 'App\\Models\\Page', 20, '', 'finished', '', '2023-07-04 12:20:31', '2023-07-04 12:20:31', NULL, '{\"title\":\"Banking & Finance\",\"slug\":\"industries|industries-we-serve|industries|banking-and-finance\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"bankingfinance\",\"updated_at\":\"2023-07-04T17:20:31.000000Z\",\"created_at\":\"2023-07-04T17:20:31.000000Z\",\"id\":20}'),
(134, '9991405b-3d88-4993-bcdc-4a2d6df80e59', 1, 'Create', 'App\\Models\\Page', 21, 'App\\Models\\Page', 21, 'App\\Models\\Page', 21, '', 'finished', '', '2023-07-04 12:21:30', '2023-07-04 12:21:30', NULL, '{\"title\":\"Media & Publishing\",\"slug\":\"industries|industries-we-serve|industries|media-and-publishing\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"mediapub\",\"updated_at\":\"2023-07-04T17:21:30.000000Z\",\"created_at\":\"2023-07-04T17:21:30.000000Z\",\"id\":21}'),
(135, '99914205-6dc2-425f-8c09-f4e738b0178e', 1, 'Create', 'App\\Models\\Page', 22, 'App\\Models\\Page', 22, 'App\\Models\\Page', 22, '', 'finished', '', '2023-07-04 12:26:09', '2023-07-04 12:26:09', NULL, '{\"title\":\"Education and E-Learning\",\"slug\":\"industries|industries-we-serve|industries|education-and-e-Learning\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"educationlearning\",\"updated_at\":\"2023-07-04T17:26:09.000000Z\",\"created_at\":\"2023-07-04T17:26:09.000000Z\",\"id\":22}'),
(136, '9991426e-2deb-40b0-8629-9c4dcc76ac65', 1, 'Create', 'App\\Models\\Page', 23, 'App\\Models\\Page', 23, 'App\\Models\\Page', 23, '', 'finished', '', '2023-07-04 12:27:18', '2023-07-04 12:27:18', NULL, '{\"title\":\"Food & FMCG\",\"slug\":\"industries|industries-we-serve|industries|food-and-fmcg\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"foodorder\",\"updated_at\":\"2023-07-04T17:27:18.000000Z\",\"created_at\":\"2023-07-04T17:27:18.000000Z\",\"id\":23}'),
(137, '999142c2-33f7-4dd6-9935-9f78f44b8766', 1, 'Create', 'App\\Models\\Page', 24, 'App\\Models\\Page', 24, 'App\\Models\\Page', 24, '', 'finished', '', '2023-07-04 12:28:13', '2023-07-04 12:28:13', NULL, '{\"title\":\"Automotive\",\"slug\":\"industries|industries-we-serve|industries|automotive\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"automotive\",\"updated_at\":\"2023-07-04T17:28:13.000000Z\",\"created_at\":\"2023-07-04T17:28:13.000000Z\",\"id\":24}'),
(138, '99914332-6e5b-4d0a-a494-a569a6116073', 1, 'Create', 'App\\Models\\Page', 25, 'App\\Models\\Page', 25, 'App\\Models\\Page', 25, '', 'finished', '', '2023-07-04 12:29:26', '2023-07-04 12:29:26', NULL, '{\"title\":\"E-Commerce\",\"slug\":\"industries|industries-we-serve|industries|e-commerce\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"train\",\"updated_at\":\"2023-07-04T17:29:26.000000Z\",\"created_at\":\"2023-07-04T17:29:26.000000Z\",\"id\":25}'),
(139, '99ab6159-d08e-4b29-81e1-74b83a1ce278', 1, 'Create', 'App\\Models\\Page', 26, 'App\\Models\\Page', 26, 'App\\Models\\Page', 26, '', 'finished', '', '2023-07-17 12:05:17', '2023-07-17 12:05:17', NULL, '{\"title\":\"Hire Form\",\"slug\":\"hire|developer|developers-other|HireForm\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hireForm\",\"updated_at\":\"2023-07-17T17:05:17.000000Z\",\"created_at\":\"2023-07-17T17:05:17.000000Z\",\"id\":26}'),
(140, '99ad63a7-f5cc-486b-a7a2-0f7379117ec4', 1, 'Create', 'App\\Models\\Page', 27, 'App\\Models\\Page', 27, 'App\\Models\\Page', 27, '', 'finished', '', '2023-07-18 12:03:23', '2023-07-18 12:03:23', NULL, '{\"title\":\"Bizionic Team\",\"slug\":\"hire|developer|developers-other|BizionicTeam\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"bizionicTeam\",\"updated_at\":\"2023-07-18T17:03:23.000000Z\",\"created_at\":\"2023-07-18T17:03:23.000000Z\",\"id\":27}'),
(141, '99ad673a-3f56-4163-8e4e-4bb53b70adbb', 1, 'Update', 'App\\Models\\Page', 27, 'App\\Models\\Page', 27, 'App\\Models\\Page', 27, '', 'finished', '', '2023-07-18 12:13:22', '2023-07-18 12:13:22', '{\"slug\":\"hire|developer|developers-other|BizionicTeam\"}', '{\"slug\":\"BizionicTeam\"}'),
(142, '99ad6882-a204-4c4e-87dc-624e8f99313a', 1, 'Update', 'App\\Models\\Page', 27, 'App\\Models\\Page', 27, 'App\\Models\\Page', 27, '', 'finished', '', '2023-07-18 12:16:57', '2023-07-18 12:16:57', '{\"slug\":\"BizionicTeam\"}', '{\"slug\":\"bizionic-team\"}'),
(143, '99b19271-aa4f-492d-8117-b49225226046', 1, 'Create', 'App\\Models\\Page', 28, 'App\\Models\\Page', 28, 'App\\Models\\Page', 28, '', 'finished', '', '2023-07-20 13:57:31', '2023-07-20 13:57:31', NULL, '{\"title\":\"Insta Hirin View All\",\"slug\":\"hire|developer|developers-other|hirin-view-all\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"instahirinViewAll\",\"updated_at\":\"2023-07-20T18:57:31.000000Z\",\"created_at\":\"2023-07-20T18:57:31.000000Z\",\"id\":28}'),
(144, '99b19ae3-ef9f-42b5-b927-f0afdec88efd', 1, 'Create', 'App\\Models\\Page', 29, 'App\\Models\\Page', 29, 'App\\Models\\Page', 29, '', 'finished', '', '2023-07-20 14:21:08', '2023-07-20 14:21:08', NULL, '{\"title\":\"Hire Html5 Css3 Developer\",\"slug\":\"hire|developer|front-end-developement|hire-html5-css3-developer\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-html5-css3\",\"updated_at\":\"2023-07-20T19:21:08.000000Z\",\"created_at\":\"2023-07-20T19:21:08.000000Z\",\"id\":29}'),
(145, '99b1a73f-eeca-4f0d-828c-fe005ca0c477', 1, 'Update', 'App\\Models\\Page', 29, 'App\\Models\\Page', 29, 'App\\Models\\Page', 29, '', 'finished', '', '2023-07-20 14:55:42', '2023-07-20 14:55:42', '[]', '[]'),
(146, '99b28fee-7d32-4234-9645-0c4a71b60407', 1, 'Create', 'App\\Models\\Page', 30, 'App\\Models\\Page', 30, 'App\\Models\\Page', 30, '', 'finished', '', '2023-07-21 01:46:20', '2023-07-21 01:46:20', NULL, '{\"title\":\"Hire Angular Developers\",\"slug\":\"hire|developer|front-end-developement|hire-angular-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-angular\",\"updated_at\":\"2023-07-21T06:46:19.000000Z\",\"created_at\":\"2023-07-21T06:46:19.000000Z\",\"id\":30}'),
(147, '99b29912-e978-4ad7-858e-7dfd5d756f80', 1, 'Create', 'App\\Models\\Page', 31, 'App\\Models\\Page', 31, 'App\\Models\\Page', 31, '', 'finished', '', '2023-07-21 02:11:53', '2023-07-21 02:11:53', NULL, '{\"title\":\"Hire Angular 2.0 Developers\",\"slug\":\"hire|developer|front-end-developement|hire-angular-2-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-angular-2\",\"updated_at\":\"2023-07-21T07:11:53.000000Z\",\"created_at\":\"2023-07-21T07:11:53.000000Z\",\"id\":31}'),
(148, '99b29ee8-4e5d-4539-98be-5907175118bf', 1, 'Create', 'App\\Models\\Page', 32, 'App\\Models\\Page', 32, 'App\\Models\\Page', 32, '', 'finished', '', '2023-07-21 02:28:12', '2023-07-21 02:28:12', NULL, '{\"title\":\"Hire Vue.js Developers\",\"slug\":\"hire|developer|front-end-developement|hire-vue-js-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-vueJs\",\"updated_at\":\"2023-07-21T07:28:12.000000Z\",\"created_at\":\"2023-07-21T07:28:12.000000Z\",\"id\":32}'),
(149, '99b2c26c-7194-41de-90d3-436b34580e0e', 1, 'Create', 'App\\Models\\Page', 33, 'App\\Models\\Page', 33, 'App\\Models\\Page', 33, '', 'finished', '', '2023-07-21 04:07:31', '2023-07-21 04:07:31', NULL, '{\"title\":\"Hire Gatsby JS Developers\",\"slug\":\"hire|developer|front-end-developement|hire-gatsby-js-develpers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-gatsby-js\",\"updated_at\":\"2023-07-21T09:07:31.000000Z\",\"created_at\":\"2023-07-21T09:07:31.000000Z\",\"id\":33}'),
(150, '99b2d078-ba6b-49b8-a008-a7d6f7ccbb2b', 1, 'Create', 'App\\Models\\Page', 34, 'App\\Models\\Page', 34, 'App\\Models\\Page', 34, '', 'finished', '', '2023-07-21 04:46:48', '2023-07-21 04:46:48', NULL, '{\"title\":\"Hire Next.js Developers\",\"slug\":\"hire|developer|front-end-developement|hire-next-js-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-next-js\",\"updated_at\":\"2023-07-21T09:46:47.000000Z\",\"created_at\":\"2023-07-21T09:46:47.000000Z\",\"id\":34}'),
(151, '99b2ebfe-f33d-47da-a78b-7bcfd1c6a780', 1, 'Create', 'App\\Models\\Page', 35, 'App\\Models\\Page', 35, 'App\\Models\\Page', 35, '', 'finished', '', '2023-07-21 06:03:45', '2023-07-21 06:03:45', NULL, '{\"title\":\"Hire Node.js Developers\",\"slug\":\"hire|developer|back-end-development|hire-node-js-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"backend-nodeJs\",\"updated_at\":\"2023-07-21T11:03:45.000000Z\",\"created_at\":\"2023-07-21T11:03:45.000000Z\",\"id\":35}'),
(152, '99b2f8f2-cf60-409b-a39b-ec1debeb325a', 1, 'Create', 'App\\Models\\Page', 36, 'App\\Models\\Page', 36, 'App\\Models\\Page', 36, '', 'finished', '', '2023-07-21 06:39:58', '2023-07-21 06:39:58', NULL, '{\"title\":\"Hire Python Developers\",\"slug\":\"hire|developer|back-end-development|hire-python-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"backend-pythonJs\",\"updated_at\":\"2023-07-21T11:39:58.000000Z\",\"created_at\":\"2023-07-21T11:39:58.000000Z\",\"id\":36}'),
(153, '99b301cc-765e-4765-9ea3-e51d6d1c5240', 1, 'Create', 'App\\Models\\Page', 37, 'App\\Models\\Page', 37, 'App\\Models\\Page', 37, '', 'finished', '', '2023-07-21 07:04:43', '2023-07-21 07:04:43', NULL, '{\"title\":\"Hire .Net Developers\",\"slug\":\"hire|developer|back-end-development|hire-dot-net-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"backend-dot-net\",\"updated_at\":\"2023-07-21T12:04:43.000000Z\",\"created_at\":\"2023-07-21T12:04:43.000000Z\",\"id\":37}'),
(154, '99b30815-338b-43e0-8780-27486461c975', 1, 'Create', 'App\\Models\\Page', 38, 'App\\Models\\Page', 38, 'App\\Models\\Page', 38, '', 'finished', '', '2023-07-21 07:22:18', '2023-07-21 07:22:18', NULL, '{\"title\":\"Hire Laravel Developers\",\"slug\":\"hire|developer|back-end-development|hire-laravel-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"backend-laravel\",\"updated_at\":\"2023-07-21T12:22:17.000000Z\",\"created_at\":\"2023-07-21T12:22:17.000000Z\",\"id\":38}'),
(155, '99b30dc2-8adc-4292-8eb7-e9fdb9692d28', 1, 'Create', 'App\\Models\\Page', 39, 'App\\Models\\Page', 39, 'App\\Models\\Page', 39, '', 'finished', '', '2023-07-21 07:38:10', '2023-07-21 07:38:10', NULL, '{\"title\":\"Hire Ruby on Rails Developers\",\"slug\":\"hire|developer|back-end-development|hire-ruby-on-rails-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"backend-ruby-on-rails\",\"updated_at\":\"2023-07-21T12:38:10.000000Z\",\"created_at\":\"2023-07-21T12:38:10.000000Z\",\"id\":39}'),
(156, '99b31cba-9884-408d-9276-21aae4b62923', 1, 'Create', 'App\\Models\\Page', 40, 'App\\Models\\Page', 40, 'App\\Models\\Page', 40, '', 'finished', '', '2023-07-21 08:20:01', '2023-07-21 08:20:01', NULL, '{\"title\":\"Hire Golang Developers\",\"slug\":\"hire|developer|back-end-development|hire-golang-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Users\\r\\nMenus\\r\\nCreate Page\\r\\nTitle*\\r\\nHire Golang Developers\\r\\nSlug*\\r\\n\\r\\nHire Talent | DEVELOPERS | BACK-END DEVELOPMENT | Hire Golang Developers\\r\\nMeta Title\\r\\nMeta Title\\r\\nMeta Keywords\\r\\nMeta Keywords\\r\\nMeta Description\",\"template\":\"backend-golang\",\"updated_at\":\"2023-07-21T13:20:01.000000Z\",\"created_at\":\"2023-07-21T13:20:01.000000Z\",\"id\":40}'),
(157, '99b3879c-98de-4891-b0a8-096b7ce68c6a', 1, 'Create', 'App\\Models\\Page', 41, 'App\\Models\\Page', 41, 'App\\Models\\Page', 41, '', 'finished', '', '2023-07-21 13:18:53', '2023-07-21 13:18:53', NULL, '{\"title\":\"Hire JavaScript Developers\",\"slug\":\"hire|developer|back-end-development|hire-javaScript-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"backend-javascript\",\"updated_at\":\"2023-07-21T18:18:53.000000Z\",\"created_at\":\"2023-07-21T18:18:53.000000Z\",\"id\":41}'),
(158, '99b38fc3-dced-4a63-9e82-5adf5c9de384', 1, 'Create', 'App\\Models\\Page', 42, 'App\\Models\\Page', 42, 'App\\Models\\Page', 42, '', 'finished', '', '2023-07-21 13:41:41', '2023-07-21 13:41:41', NULL, '{\"title\":\"Hire AWS Developers\",\"slug\":\"hire|developer|devops-services|hire-aws-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"devops-aws-developers\",\"updated_at\":\"2023-07-21T18:41:41.000000Z\",\"created_at\":\"2023-07-21T18:41:41.000000Z\",\"id\":42}'),
(159, '99b39523-0790-4ec7-af95-ba7f068e9b92', 1, 'Create', 'App\\Models\\Page', 43, 'App\\Models\\Page', 43, 'App\\Models\\Page', 43, '', 'finished', '', '2023-07-21 13:56:42', '2023-07-21 13:56:42', NULL, '{\"title\":\"Hire Azure Developers\",\"slug\":\"hire|developer|devops-services|hire-azure-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"devops-azure-developers\",\"updated_at\":\"2023-07-21T18:56:42.000000Z\",\"created_at\":\"2023-07-21T18:56:42.000000Z\",\"id\":43}'),
(160, '99b39a5c-c5ef-4fcf-9136-2d1c0235583f', 1, 'Create', 'App\\Models\\Page', 44, 'App\\Models\\Page', 44, 'App\\Models\\Page', 44, '', 'finished', '', '2023-07-21 14:11:19', '2023-07-21 14:11:19', NULL, '{\"title\":\"Hire Google Cloud Consultants\",\"slug\":\"hire|developer|devops-services|hire-google-cloud-consultants\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"devops-googleCloud-developers\",\"updated_at\":\"2023-07-21T19:11:19.000000Z\",\"created_at\":\"2023-07-21T19:11:19.000000Z\",\"id\":44}'),
(161, '99b3a225-a661-4f4c-8f89-13e307ea0a79', 1, 'Update', 'App\\Models\\Page', 44, 'App\\Models\\Page', 44, 'App\\Models\\Page', 44, '', 'finished', '', '2023-07-21 14:33:05', '2023-07-21 14:33:05', '{\"template\":\"devops-googleCloud-developers\"}', '{\"template\":\"devops-googleCloud-consultants\"}'),
(162, '99b3a2f8-9d60-4ed5-a7db-5dd661112750', 1, 'Create', 'App\\Models\\Page', 45, 'App\\Models\\Page', 45, 'App\\Models\\Page', 45, '', 'finished', '', '2023-07-21 14:35:23', '2023-07-21 14:35:23', NULL, '{\"title\":\"Hire Oracle Cloud Infrastructure (OCI) Consultants\",\"slug\":\"hire|developer|devops-services|hire-oracle-cloud-infra-consultants\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"devops-oracleCloud-consultants\",\"updated_at\":\"2023-07-21T19:35:23.000000Z\",\"created_at\":\"2023-07-21T19:35:23.000000Z\",\"id\":45}'),
(163, '99b491b6-8fd9-43bb-9790-3df1e8d50d3f', 1, 'Create', 'App\\Models\\Page', 46, 'App\\Models\\Page', 46, 'App\\Models\\Page', 46, '', 'finished', '', '2023-07-22 01:42:58', '2023-07-22 01:42:58', NULL, '{\"title\":\"Hire Smart Contract Developers\",\"slug\":\"hire|developer|blockchain-developers|hire-smart-contact-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"blockchain-smart-contract-developer\",\"updated_at\":\"2023-07-22T06:42:58.000000Z\",\"created_at\":\"2023-07-22T06:42:58.000000Z\",\"id\":46}'),
(164, '99b49a38-6d4c-4bc2-aeb4-106b13cce1f7', 1, 'Create', 'App\\Models\\Page', 47, 'App\\Models\\Page', 47, 'App\\Models\\Page', 47, '', 'finished', '', '2023-07-22 02:06:45', '2023-07-22 02:06:45', NULL, '{\"title\":\"Hire dApps Development\",\"slug\":\"hire|developer|blockchain-developers|hire-dapps-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"blockchain-d-apps-developer\",\"updated_at\":\"2023-07-22T07:06:45.000000Z\",\"created_at\":\"2023-07-22T07:06:45.000000Z\",\"id\":47}'),
(165, '99b4a0a3-981f-4559-91b8-33c0e46e1a7d', 1, 'Create', 'App\\Models\\Page', 48, 'App\\Models\\Page', 48, 'App\\Models\\Page', 48, '', 'finished', '', '2023-07-22 02:24:42', '2023-07-22 02:24:42', NULL, '{\"title\":\"Hire Blockchain Developers\",\"slug\":\"hire|developer|blockchain-developers|hire-blockchain-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-blockchain-developer\",\"updated_at\":\"2023-07-22T07:24:42.000000Z\",\"created_at\":\"2023-07-22T07:24:42.000000Z\",\"id\":48}'),
(166, '99b4a679-1f03-4a1a-b120-d4f4d2c9615a', 1, 'Create', 'App\\Models\\Page', 49, 'App\\Models\\Page', 49, 'App\\Models\\Page', 49, '', 'finished', '', '2023-07-22 02:41:01', '2023-07-22 02:41:01', NULL, '{\"title\":\"Hire ICO Development\",\"slug\":\"hire|developer|blockchain-developers|hire-ico-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"blockchain-ico-developer\",\"updated_at\":\"2023-07-22T07:41:01.000000Z\",\"created_at\":\"2023-07-22T07:41:01.000000Z\",\"id\":49}'),
(167, '99b4ad07-ce5e-45c0-9ef1-778ceb09a529', 1, 'Create', 'App\\Models\\Page', 50, 'App\\Models\\Page', 50, 'App\\Models\\Page', 50, '', 'finished', '', '2023-07-22 02:59:21', '2023-07-22 02:59:21', NULL, '{\"title\":\"Hire Cryptocurrency Exchange Developers\",\"slug\":\"hire|developer|blockchain-developers|hire-cryptocurrency-exchange-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"blockchain-crypto-exchange-developer\",\"updated_at\":\"2023-07-22T07:59:21.000000Z\",\"created_at\":\"2023-07-22T07:59:21.000000Z\",\"id\":50}'),
(168, '99b4b207-9502-4642-85fc-39873372f30e', 1, 'Create', 'App\\Models\\Page', 51, 'App\\Models\\Page', 51, 'App\\Models\\Page', 51, '', 'finished', '', '2023-07-22 03:13:20', '2023-07-22 03:13:20', NULL, '{\"title\":\"Hire DeFi Developers\",\"slug\":\"hire|developer|blockchain-developers|hire-defi-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"blockchain-defi-developer\",\"updated_at\":\"2023-07-22T08:13:20.000000Z\",\"created_at\":\"2023-07-22T08:13:20.000000Z\",\"id\":51}'),
(169, '99b4b928-b7ee-4ed8-bd1d-c006ea58314c', 1, 'Create', 'App\\Models\\Page', 52, 'App\\Models\\Page', 52, 'App\\Models\\Page', 52, '', 'finished', '', '2023-07-22 03:33:16', '2023-07-22 03:33:16', NULL, '{\"title\":\"Hire NFT Developers\",\"slug\":\"hire|developer|blockchain-developers|hire-nft-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"blockchain-nft-developer\",\"updated_at\":\"2023-07-22T08:33:16.000000Z\",\"created_at\":\"2023-07-22T08:33:16.000000Z\",\"id\":52}'),
(170, '99b4f126-7b7d-4e07-87f8-6026b38dcde5', 1, 'Create', 'App\\Models\\Page', 53, 'App\\Models\\Page', 53, 'App\\Models\\Page', 53, '', 'finished', '', '2023-07-22 06:09:49', '2023-07-22 06:09:49', NULL, '{\"title\":\"Hire Android App Developers\",\"slug\":\"hire|developer|mobile-app-developers|hire-android-app-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"mobile-android-developer\",\"updated_at\":\"2023-07-22T11:09:49.000000Z\",\"created_at\":\"2023-07-22T11:09:49.000000Z\",\"id\":53}'),
(171, '99b4f7be-30be-40f5-bd75-d63cb984535b', 1, 'Create', 'App\\Models\\Page', 54, 'App\\Models\\Page', 54, 'App\\Models\\Page', 54, '', 'finished', '', '2023-07-22 06:28:16', '2023-07-22 06:28:16', NULL, '{\"title\":\"Hire iOS App Developers\",\"slug\":\"hire|developer|mobile-app-developers|hire-ios-app-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"mobile-ios-developer\",\"updated_at\":\"2023-07-22T11:28:15.000000Z\",\"created_at\":\"2023-07-22T11:28:15.000000Z\",\"id\":54}'),
(172, '99b4fd38-4ef6-46a6-ba57-94e1e78e3f44', 1, 'Create', 'App\\Models\\Page', 55, 'App\\Models\\Page', 55, 'App\\Models\\Page', 55, '', 'finished', '', '2023-07-22 06:43:34', '2023-07-22 06:43:34', NULL, '{\"title\":\"Hire React Native Developers\",\"slug\":\"hire|developer|mobile-app-developers|hire-react-native-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"mobile-react-native-developer\",\"updated_at\":\"2023-07-22T11:43:34.000000Z\",\"created_at\":\"2023-07-22T11:43:34.000000Z\",\"id\":55}'),
(173, '99b50329-5e9b-4395-90b1-46dae2923c3c', 1, 'Create', 'App\\Models\\Page', 56, 'App\\Models\\Page', 56, 'App\\Models\\Page', 56, '', 'finished', '', '2023-07-22 07:00:11', '2023-07-22 07:00:11', NULL, '{\"title\":\"Hire Flutter Developers\",\"slug\":\"hire|developer|mobile-app-developers|hire-flutter-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"mobile-flutter-developer\",\"updated_at\":\"2023-07-22T12:00:11.000000Z\",\"created_at\":\"2023-07-22T12:00:11.000000Z\",\"id\":56}'),
(174, '99b50954-2e94-4006-a2ad-fbad9d39ceba', 1, 'Create', 'App\\Models\\Page', 57, 'App\\Models\\Page', 57, 'App\\Models\\Page', 57, '', 'finished', '', '2023-07-22 07:17:26', '2023-07-22 07:17:26', NULL, '{\"title\":\"Hire Kotlin App Developers\",\"slug\":\"hire|developer|mobile-app-developers|hire-kotlin-app-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"mobile-kotlin-developer\",\"updated_at\":\"2023-07-22T12:17:26.000000Z\",\"created_at\":\"2023-07-22T12:17:26.000000Z\",\"id\":57}'),
(175, '99b519ee-8165-41c9-bebd-932486783847', 1, 'Create', 'App\\Models\\Page', 58, 'App\\Models\\Page', 58, 'App\\Models\\Page', 58, '', 'finished', '', '2023-07-22 08:03:51', '2023-07-22 08:03:51', NULL, '{\"title\":\"Hire Data Scientists\",\"slug\":\"hire|developer|data-science-developers|hire-data-scientists\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-data-scientist-developer\",\"updated_at\":\"2023-07-22T13:03:51.000000Z\",\"created_at\":\"2023-07-22T13:03:51.000000Z\",\"id\":58}'),
(176, '99b526c5-edaa-45dd-86d1-fce292d4f681', 1, 'Create', 'App\\Models\\Page', 59, 'App\\Models\\Page', 59, 'App\\Models\\Page', 59, '', 'finished', '', '2023-07-22 08:39:46', '2023-07-22 08:39:46', NULL, '{\"title\":\"Hire Tableau Developers\",\"slug\":\"hire|developer|data-science-developers|hire-tableau-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-tableau-developer\",\"updated_at\":\"2023-07-22T13:39:46.000000Z\",\"created_at\":\"2023-07-22T13:39:46.000000Z\",\"id\":59}'),
(177, '99b57dc8-1d2e-44fb-970f-7478a97ad15e', 1, 'Create', 'App\\Models\\Page', 60, 'App\\Models\\Page', 60, 'App\\Models\\Page', 60, '', 'finished', '', '2023-07-22 12:43:03', '2023-07-22 12:43:03', NULL, '{\"title\":\"C++ Developers\",\"slug\":\"hire|developer|other-developers|hire-c-plus-plus-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-c-plus-plus-developer\",\"updated_at\":\"2023-07-22T17:43:03.000000Z\",\"created_at\":\"2023-07-22T17:43:03.000000Z\",\"id\":60}'),
(178, '99b58319-489e-423a-926a-9f8668317981', 1, 'Create', 'App\\Models\\Page', 61, 'App\\Models\\Page', 61, 'App\\Models\\Page', 61, '', 'finished', '', '2023-07-22 12:57:56', '2023-07-22 12:57:56', NULL, '{\"title\":\"C# Developers\",\"slug\":\"hire|developer|other-developers|hire-c-sharp-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-c-sharp-developer\",\"updated_at\":\"2023-07-22T17:57:55.000000Z\",\"created_at\":\"2023-07-22T17:57:55.000000Z\",\"id\":61}'),
(179, '99b587be-0c64-422d-a363-2001a7cedc7e', 1, 'Create', 'App\\Models\\Page', 62, 'App\\Models\\Page', 62, 'App\\Models\\Page', 62, '', 'finished', '', '2023-07-22 13:10:55', '2023-07-22 13:10:55', NULL, '{\"title\":\"Hire SAP Developers\",\"slug\":\"hire|developer|other-developers|hire-sap-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-sap-developer\",\"updated_at\":\"2023-07-22T18:10:55.000000Z\",\"created_at\":\"2023-07-22T18:10:55.000000Z\",\"id\":62}'),
(180, '99b59032-2fd8-4702-9119-54a5a8cde755', 1, 'Create', 'App\\Models\\Page', 63, 'App\\Models\\Page', 63, 'App\\Models\\Page', 63, '', 'finished', '', '2023-07-22 13:34:33', '2023-07-22 13:34:33', NULL, '{\"title\":\"Hire Solidity Developers\",\"slug\":\"hire|developer|other-developers|hire-solidity-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-solidity-developer\",\"updated_at\":\"2023-07-22T18:34:33.000000Z\",\"created_at\":\"2023-07-22T18:34:33.000000Z\",\"id\":63}'),
(181, '99b59365-7421-4853-a2d5-805bc8acab28', 1, 'Create', 'App\\Models\\Page', 64, 'App\\Models\\Page', 64, 'App\\Models\\Page', 64, '', 'finished', '', '2023-07-22 13:43:30', '2023-07-22 13:43:30', NULL, '{\"title\":\"Hire Swift Developers\",\"slug\":\"hire|developer|other-developers|hire-swift-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-swift-developer\",\"updated_at\":\"2023-07-22T18:43:30.000000Z\",\"created_at\":\"2023-07-22T18:43:30.000000Z\",\"id\":64}'),
(182, '99b59764-7f4c-4885-a717-fd6f5a99ecdf', 1, 'Create', 'App\\Models\\Page', 65, 'App\\Models\\Page', 65, 'App\\Models\\Page', 65, '', 'finished', '', '2023-07-22 13:54:40', '2023-07-22 13:54:40', NULL, '{\"title\":\"Hire Unity Developers\",\"slug\":\"hire|developer|other-developers|hire-unity-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-unity-developer\",\"updated_at\":\"2023-07-22T18:54:40.000000Z\",\"created_at\":\"2023-07-22T18:54:40.000000Z\",\"id\":65}'),
(183, '99b59c97-17b4-47df-acb7-367336befb17', 1, 'Create', 'App\\Models\\Page', 66, 'App\\Models\\Page', 66, 'App\\Models\\Page', 66, '', 'finished', '', '2023-07-22 14:09:12', '2023-07-22 14:09:12', NULL, '{\"title\":\"Hire Craft CMS Developers\",\"slug\":\"hire|developer|other-developers|hire-craft-cms-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-craft-cms-developer\",\"updated_at\":\"2023-07-22T19:09:12.000000Z\",\"created_at\":\"2023-07-22T19:09:12.000000Z\",\"id\":66}'),
(184, '99b5a125-5004-450b-9931-3021ed93b8e3', 1, 'Create', 'App\\Models\\Page', 68, 'App\\Models\\Page', 68, 'App\\Models\\Page', 68, '', 'finished', '', '2023-07-22 14:21:57', '2023-07-22 14:21:57', NULL, '{\"title\":\"Hire Salesforce Developers\",\"slug\":\"hire|developer|other-developers|hire-salesforce-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-salesforce-developer\",\"updated_at\":\"2023-07-22T19:21:57.000000Z\",\"created_at\":\"2023-07-22T19:21:57.000000Z\",\"id\":68}'),
(185, '99b5a7ff-4e07-430d-b325-c42f1cc453da', 1, 'Create', 'App\\Models\\Page', 69, 'App\\Models\\Page', 69, 'App\\Models\\Page', 69, '', 'finished', '', '2023-07-22 14:41:06', '2023-07-22 14:41:06', NULL, '{\"title\":\"Hire WordPress Developers\",\"slug\":\"hire|developer|other-developers|hire-wordPress-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-wordpress-developer\",\"updated_at\":\"2023-07-22T19:41:06.000000Z\",\"created_at\":\"2023-07-22T19:41:06.000000Z\",\"id\":69}'),
(186, '99b5ac08-ac3e-456d-bcdd-135c2b3ea0a6', 1, 'Create', 'App\\Models\\Page', 70, 'App\\Models\\Page', 70, 'App\\Models\\Page', 70, '', 'finished', '', '2023-07-22 14:52:23', '2023-07-22 14:52:23', NULL, '{\"title\":\"Hire WooCommerce Developers\",\"slug\":\"hire|developer|other-developers|hire-wooCommerce-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-wooCommerce-developer\",\"updated_at\":\"2023-07-22T19:52:23.000000Z\",\"created_at\":\"2023-07-22T19:52:23.000000Z\",\"id\":70}');
INSERT INTO `action_events` (`id`, `batch_id`, `user_id`, `name`, `actionable_type`, `actionable_id`, `target_type`, `target_id`, `model_type`, `model_id`, `fields`, `status`, `exception`, `created_at`, `updated_at`, `original`, `changes`) VALUES
(187, '99b5b0e7-2a24-42cd-b55e-3b8c84d3776b', 1, 'Create', 'App\\Models\\Page', 71, 'App\\Models\\Page', 71, 'App\\Models\\Page', 71, '', 'finished', '', '2023-07-22 15:06:00', '2023-07-22 15:06:00', NULL, '{\"title\":\"Hire Symfony Developers\",\"slug\":\"hire|developer|other-developers|hire-symfony-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-symfony-developer\",\"updated_at\":\"2023-07-22T20:06:00.000000Z\",\"created_at\":\"2023-07-22T20:06:00.000000Z\",\"id\":71}'),
(188, '99b5b51b-a2ed-4f0f-849f-52c040ded68a', 1, 'Create', 'App\\Models\\Page', 72, 'App\\Models\\Page', 72, 'App\\Models\\Page', 72, '', 'finished', '', '2023-07-22 15:17:46', '2023-07-22 15:17:46', NULL, '{\"title\":\"Hire HubSpot Developers\",\"slug\":\"hire|developer|other-developers|hire-hubSpot-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-hubspot-developer\",\"updated_at\":\"2023-07-22T20:17:46.000000Z\",\"created_at\":\"2023-07-22T20:17:46.000000Z\",\"id\":72}'),
(189, '99b5ba50-aba3-4731-9271-7b2a1a755d97', 1, 'Create', 'App\\Models\\Page', 73, 'App\\Models\\Page', 73, 'App\\Models\\Page', 73, '', 'finished', '', '2023-07-22 15:32:19', '2023-07-22 15:32:19', NULL, '{\"title\":\"Hire Full Stack Developers\",\"slug\":\"hire|developer|other-developers|hire-full-stack-developers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-full-stack-developer\",\"updated_at\":\"2023-07-22T20:32:19.000000Z\",\"created_at\":\"2023-07-22T20:32:19.000000Z\",\"id\":73}'),
(190, '99b67f1e-0699-4c58-aae2-69a000ea0bee', 1, 'Create', 'App\\Models\\Page', 74, 'App\\Models\\Page', 74, 'App\\Models\\Page', 74, '', 'finished', '', '2023-07-23 00:42:37', '2023-07-23 00:42:37', NULL, '{\"title\":\"Hire QA Software Engineers\",\"slug\":\"hire|developer|other-developers|hire-software-engineers\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"hire-qa-engineer-developer\",\"updated_at\":\"2023-07-23T05:42:37.000000Z\",\"created_at\":\"2023-07-23T05:42:37.000000Z\",\"id\":74}'),
(191, '99b685bd-49b0-4a6e-a4b7-0b3fecdaa4b7', 1, 'Create', 'App\\Models\\Page', 75, 'App\\Models\\Page', 75, 'App\\Models\\Page', 75, '', 'finished', '', '2023-07-23 01:01:08', '2023-07-23 01:01:08', NULL, '{\"title\":\"Looking for Other Technology?\",\"slug\":\"hire|developer|developers-other|looking-for-other-technology?\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"developer-looking-other-technology\",\"updated_at\":\"2023-07-23T06:01:08.000000Z\",\"created_at\":\"2023-07-23T06:01:08.000000Z\",\"id\":75}'),
(192, '99b68676-e540-4c13-bbae-21d17f5e48d7', 1, 'Update', 'App\\Models\\Page', 75, 'App\\Models\\Page', 75, 'App\\Models\\Page', 75, '', 'finished', '', '2023-07-23 01:03:10', '2023-07-23 01:03:10', '[]', '[]'),
(193, '99b686a8-455b-444b-a047-28dc79caf928', 1, 'Delete', 'App\\Models\\Page', 75, 'App\\Models\\Page', 75, 'App\\Models\\Page', 75, '', 'finished', '', '2023-07-23 01:03:42', '2023-07-23 01:03:42', NULL, NULL),
(194, '99b68708-c377-40dc-b8b0-e985525d4dde', 1, 'Create', 'App\\Models\\Page', 76, 'App\\Models\\Page', 76, 'App\\Models\\Page', 76, '', 'finished', '', '2023-07-23 01:04:45', '2023-07-23 01:04:45', NULL, '{\"title\":\"Meta Description\",\"slug\":\"hire|developer|developers-other|looking-for-other-technology?\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"developer-looking-other-technology\",\"updated_at\":\"2023-07-23T06:04:45.000000Z\",\"created_at\":\"2023-07-23T06:04:45.000000Z\",\"id\":76}'),
(195, '99b68fb1-2647-45b1-9b26-02e22bccc0ea', 1, 'Create', 'App\\Models\\Page', 87, 'App\\Models\\Page', 87, 'App\\Models\\Page', 87, '', 'finished', '', '2023-07-23 01:28:58', '2023-07-23 01:28:58', NULL, '{\"title\":\"insta Hirin Onboard Form\",\"slug\":\"hire|developer|developers-other|instaHirin Onboard Form\",\"meta_title\":\"Meta Title\",\"meta_keywords\":\"Meta Keywords\",\"meta_description\":\"Meta Description\",\"template\":\"onboard-form\",\"updated_at\":\"2023-07-23T06:28:58.000000Z\",\"created_at\":\"2023-07-23T06:28:58.000000Z\",\"id\":87}'),
(196, '99b6b525-2821-4c72-9d5e-86141074e885', 1, 'Update', 'App\\Models\\Page', 76, 'App\\Models\\Page', 76, 'App\\Models\\Page', 76, '', 'finished', '', '2023-07-23 03:13:42', '2023-07-23 03:13:42', '{\"title\":\"Meta Description\"}', '{\"title\":\"Looking for Other Technology?\"}'),
(197, '99b6b76d-54c6-406e-be67-2f537ff56361', 1, 'Update', 'App\\Models\\Page', 76, 'App\\Models\\Page', 76, 'App\\Models\\Page', 76, '', 'finished', '', '2023-07-23 03:20:04', '2023-07-23 03:20:04', '[]', '[]'),
(198, '99b6d1a2-1b6d-47eb-a3d1-60e7cfce8fd2', 1, 'Update', 'App\\Models\\Page', 25, 'App\\Models\\Page', 25, 'App\\Models\\Page', 25, '', 'finished', '', '2023-07-23 04:33:21', '2023-07-23 04:33:21', '{\"template\":\"train\"}', '{\"template\":\"eCommerce\"}'),
(199, '99b6d50f-f967-4d02-bf81-8432647959e3', 1, 'Update', 'App\\Models\\Page', 27, 'App\\Models\\Page', 27, 'App\\Models\\Page', 27, '', 'finished', '', '2023-07-23 04:42:56', '2023-07-23 04:42:56', '{\"slug\":\"bizionic-team\"}', '{\"slug\":\"industries|industries-we-serve|industries|bizionic-team\"}'),
(200, '99b6d811-ce4c-4fbf-95ec-cc0dac387dad', 1, 'Update', 'App\\Models\\Page', 76, 'App\\Models\\Page', 76, 'App\\Models\\Page', 76, '', 'finished', '', '2023-07-23 04:51:21', '2023-07-23 04:51:21', '{\"slug\":\"hire|developer|developers-other|looking-for-other-technology?\"}', '{\"slug\":\"hire|developer|developers-other|looking-for-other-technology\"}');

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
(1, 'Amazon', 'Marketing Manager', 'Amazon Product Development Team Management', 'DbPzOeQHneryL8SK9dTrWYq52oNjGDJeVjzYX1ko.png', 'Your assistance was just outstanding. You said, \"That\'s something I can handle and I\'m going to solve that for you,\" after we informed you about our issues. And even though we only had a little window of time 4 to 8 weeks you kept your word. We now have a product development team in place. You truly followed through on your promises, and that is fantastic!', 1, '2023-05-28 11:31:47', '2023-06-18 09:33:35'),
(2, 'Spotify', 'Spotify’s Technology Dev Team', 'All of the teams\' excitement was wonderful, but one partner, in particular, caught our attention.', 'TELscspNucIl6wVRY6o8fLOwcVBX4IkNudmZhG3v.png', 'All of the teams\' excitement was wonderful, but one partner, in particular, caught our attention. He provided insightful advice on strengthening our concept, kept cool under pressure, and was very proactive. In some ways, he was highly motivated. similar to us! Apart from that, we were quite impressed with how well Bizionic teams were able to hand-pick a fantastic squad. Furthermore, you went above and above. We are really grateful for it.', 1, '2023-06-18 09:35:11', '2023-06-18 09:35:11'),
(3, 'SKY', 'Sky’s Technology Dev Team', 'We have prior experience with development organizations that carried out agreed-upon tasks.', 'Bl1O47ZBMwY5Icybe329EcG1CQ6QOsYWtBRyo2Xs.png', 'We have prior experience with development organizations that carried out agreed-upon tasks. This organization, which BIZIONIC employees introduced to us, goes above and above. And is far less expensive than our previous ones. We also appreciated that there was no fee for the BIZIONIC teams\' services. In fact, we would be more than happy to pay if we had known the conclusion in advance. Aside from that, I like the fantastic possibilities (partners) they give us. We spent less time and effort as a result. Moreover, they provided us with outstanding support throughout the entire procedure. I recommend BIZIONIC teams to anybody searching for exceptional engineers.', 1, '2023-06-18 09:36:10', '2023-06-18 09:36:10'),
(4, 'Emporium Capital', 'Emporium Capital Management Team', 'Working with this marketing agency was a game-changer for our business.', '37ybUvtKPFX8TOKXVVVUUH1vXWkhTcbc4CHA8Io7.png', 'Working with this marketing agency was a game-changer for our business. They developed a comprehensive strategy that helped us reach our target audience and increase our sales. Their team was responsive, creative, and always professional. We would highly recommend them to anyone looking for a results-driven marketing partner.', 1, '2023-06-18 09:36:52', '2023-06-18 09:36:52'),
(5, 'Nakheel Properties', 'Marketing Manager Nakheel Properties', 'Digitech agency, Bizionic team has mastered the digitech tech marketing combination concept.', 'Hyp1AupNXpu1VSdcEASMoAHPhHOXs7NsTyknMoFB.png', 'Digitech agency, Bizionic team has mastered the digitech tech marketing combination\r\nconcept. A professional team, with excellent turnaround time, and very proactive, to say the least. Nakheel properties qualified lead pipeline increased over 300% over the last 6 months since we started cooperating with Bizionic, an incredible feat and tremendous results. We\r\nappreciate this partnership and look forward to years of cooperation ahead.\r\nAll the best, and thank you SID, you a WIZ.', 1, '2023-06-18 09:37:39', '2023-06-18 09:37:39'),
(6, 'American Hospital', 'American Hospital Management Team', 'Bizionic IT outsourcing company has been critical to our digital transformation efforts.', 'wtBrLNhzcWUp379Gk5fK4QVazEZ1I5BnizzloLMQ.png', 'Bizionic IT outsourcing company has been critical to our digital transformation efforts. They have helped us identify and implement the right technology solutions to support our business objectives. Their team is innovative, proactive, and always up-to-date with the latest technology trends. We appreciate their strategic approach and their ability to deliver measurable results.', 1, '2023-06-18 09:38:23', '2023-06-18 09:38:23'),
(7, 'Nestle', 'Nestle, Middle East', 'We were looking for a marketing agency that could help us increase our online presence and drive more traffic to our website.', 'WXPZQm9OFx15L1UyQEhrJ63M96H3buEmJUhPjxdG.png', 'We were looking for a marketing agency that could help us increase our online presence and drive more traffic to our website. This agency exceeded our expectations, developing a comprehensive digital strategy that included SEO, social media, and content marketing. Their team was responsive and provided regular updates on our progress. We saw a significant increase in website traffic and leads, and we would definitely recommend them to others.', 1, '2023-06-18 09:39:27', '2023-06-18 09:39:27'),
(8, 'Music', 'Music Marketing Team', 'We have been working with BIZIONIC technology company for several years', 'PUV5GlaYQXOFpAYsQx0fyn36yqrKbr1WRetSw7kf.png', 'We have been working with BIZIONIC technology company for several years, and they have consistently provided us with cutting-edge solutions that have helped us stay ahead of the curve. Their team is knowledgeable, responsive, and always available to answer our questions. We appreciate their commitment to innovation and look forward to continuing to work with them.', 1, '2023-06-18 09:40:35', '2023-06-18 09:40:35'),
(9, 'Turkish Airlines', 'Turkish Airlines, Middle East and Asia', 'BIZIONIC marketing agency helped us improve our brand awareness and attract new customers from the middle east and Asian region.', '2OiHdAilszpKv84dDN3P17NpUNUEoUMFh0ks4XzZ.png', 'BIZIONIC marketing agency helped us improve our brand awareness and attract new customers from the middle east and Asian region. They developed a targeted campaign that resonated with our audience and helped us stand out from our competitors. Their team was knowledgeable and professional, and we appreciated their transparent approach to reporting and analytics.', 1, '2023-06-18 09:41:20', '2023-06-18 09:41:20'),
(10, 'Letwizard.com', 'Letwizard Founder', 'BIZIONIC TEAM created the whole propfintech project. From the initial idea stage to the design, development, and launch, Bizionic is our primary software development partner and marketing agency.', 'F8E05A9WHFhCK46rRQSswUcpIsB8B1osshmfDxv1.png', 'BIZIONIC TEAM created the whole propfintech project. From the initial idea stage to the design, development, and launch, Bizionic is our primary software development partner and marketing agency. Throughout the phases of project design, development, and execution, they have produced reliable, high-quality measurable outcomes. We strongly advise any STARTUPS searching for a comprehensive solution for their complicated and challenging tasks. The assistance provided by team BIZIONIC during the project and their professionalism, responsiveness, communication, and clear project deliverables are appreciated.', 1, '2023-06-18 09:42:04', '2023-06-18 09:42:04'),
(11, 'Baazex', 'Baazex Management Team', 'Our company had a great experience working with this BIZIONIC marketing agency.', 'KkZeSlklco3vURKfGAHCBx8ND7Tfnt8YP2VKVaZd.png', 'Our company had a great experience working with this BIZIONIC marketing agency. They listened to our needs and provided a customized solution aligned with our business objectives. Their team was collaborative and kept us informed throughout the entire process. We were impressed by their creativity and the results they delivered.', 1, '2023-06-18 09:42:56', '2023-06-18 09:42:56'),
(12, 'Montblanc', 'Montblanc Asia', 'BIZIONIC Marketing company developed a comprehensive marketing plan for our business that exceeded our expectations', 'fP3l2VggDCV2jwgMc9ri1INboOlKEt5IL7OwWf8A.png', 'BIZIONIC Marketing company developed a comprehensive marketing plan for our business that exceeded our expectations. They took the time to understand our unique needs and provided a customized solution that aligned with our business goals. Their team was professional, responsive, and always available to answer our questions. We would highly recommend them to anyone looking for a top-notch marketing partner.', 1, '2023-06-18 09:43:35', '2023-06-18 09:43:35'),
(13, 'Virgin', 'Virgin Middle east & Asia', 'We were impressed by the Bizionic marketing company\'s ability to create a powerful and effective social media strategy for our business.', 'gYCj6qszXp0t0mAjho2St8whx3VlnEzP8PVjBGR8.png', 'We were impressed by the Bizionic marketing company\'s ability to create a powerful and effective social media strategy for our business. They helped us identify our target audience and provided us with compelling content that resonated with our customers. Their team was easy to work with, and we appreciated their attention to detail and creativity.', 1, '2023-06-18 09:44:12', '2023-06-18 09:44:12'),
(14, 'Fujifilm', 'Fujifilm’s Technology Dev Team', 'The most effective and efficient approach to uncovering and communicating information is through compelling data visualization.', 'dcFydfauM7jExKvifpWHPqq1qr0IWpVJk0ZF5MNQ.png', 'The most effective and efficient approach to uncovering and communicating information is through compelling data visualization. This partner has been recommended as an authority in web development using Telerik\'s technologies. We have determined that Kendo UI is the best framework for creating rich web apps for interactive data visualization. The partner swiftly comprehended our needs and created a very attractive and responsive web application in a very aggressive timeframe. We are extremely happy with the result.', 1, '2023-06-18 09:44:59', '2023-06-18 09:44:59'),
(15, 'Hubun', 'Hubun Marketing Team', 'Bizionic marketing company helped us launch a successful email marketing campaign that resulted in increased engagement and sales.', 'stlXL91GHb0JeWs5If6Q3tPuCzg4iywysmcOCa1x.png', 'Bizionic marketing company helped us launch a successful email marketing campaign that resulted in increased engagement and sales. Their team was knowledgeable and provided us with regular updates on our progress. We appreciated their transparency and their ability to deliver measurable results.', 1, '2023-06-18 09:45:48', '2023-06-18 09:45:48'),
(16, 'Continental', 'Continental Middle East', 'We were looking for a performance marketing agency that could help us improve our email marketing and automation.', 'hcA17S2K5X2HqQX03HC4r0VjxQ2pHacP9cqsAD0D.png', 'We were looking for a performance marketing agency that could help us improve our email marketing and automation. This agency provided us with a comprehensive solution that included email design, segmentation, and A/B testing. Their team was professional and delivered high-quality work that exceeded our expectations. We saw a significant increase in our email open rates and click-through rates, and we would definitely work with them again.', 1, '2023-06-18 09:46:29', '2023-06-18 09:46:29'),
(17, 'Kenwood', 'Kenwood House Marketing Team', 'We have been working with BIZIONIC marketing company for several years, and they have helped us significantly increase our brand awareness and drive more sales.', 'u3j3opbLiCcsmZif0oKmpjXX0VYkBScFrk6fyHFM.png', 'We have been working with BIZIONIC marketing company for several years, and they have helped us significantly increase our brand awareness and drive more sales. Their team is creative, strategic, and always up-to-date with the latest marketing trends. We appreciate their collaborative approach and their ability to deliver results.', 1, '2023-06-18 09:47:30', '2023-06-18 09:47:30'),
(18, 'ECSTASY', 'Ecstacy Technology Dev Team', 'We were looking for a technology partner that could help us streamline our operations and improve our customer experience.', 'uVKGf8RbwSSiGwBNzbRxBCn5a1nd8l5vhQpRch9a.png', 'We were looking for a technology partner that could help us streamline our operations and improve our customer experience. This technology company provided us with a customized solution that exceeded our expectations. Their team was professional and creative and always went above and beyond to ensure our success. We would highly recommend them to anyone looking for a reliable technology partner.', 1, '2023-06-18 09:48:11', '2023-06-18 09:48:11'),
(19, 'Time House', 'Time House Marketing Team', 'We were impressed by this Bizionic digital agency\'s ability to create a powerful and effective website design for our business', 'ax1BR6axOkHYMdsFaxc0RdI7LT3srF0mZ33cAm3j.png', 'We were impressed by this Bizionic digital agency\'s ability to create a powerful and effective website design for our business. They helped us identify our target audience and provided us with a user-friendly, visually appealing website. Their team was easy to work with, and we appreciated their attention to detail and creativity.', 1, '2023-06-18 09:48:59', '2023-06-18 09:48:59'),
(20, 'Century Financials', 'Century Financials Management Team', 'We have been working with Bizionic performance marketing agency for over a year, and they have significantly increased our online sales.', 'aV6mqryOePKwtruEzCDis8gAMuEpLuIfQGQrSNBf.png', 'We have been working with Bizionic performance marketing agency for over a year, and they have significantly increased our online sales. Their team is data-driven, results-oriented, and always up-to-date with the latest performance marketing trends. We appreciate their collaborative approach and their ability to deliver measurable results.', 1, '2023-06-18 09:49:49', '2023-06-18 09:49:49'),
(21, 'Bhuth', 'Bhuth Management Team', 'Working with this technology company has been a great experience.', 'yU8xpu0YmEVUxhYipEnYYmINLbm3NWWiCtOnAZEA.png', 'Working with this technology company has been a great experience. They have helped us optimize our IT infrastructure, which has resulted in increased efficiency and cost savings. Their team was easy to work with, and we appreciated their attention to detail and commitment to our success. We would definitely recommend them to other businesses.', 1, '2023-06-18 09:50:43', '2023-06-18 09:50:43'),
(22, 'Jobtome', 'Jobtome Marketing Team', 'BIZIONIC performance marketing agency helped us launch a successful affiliate marketing campaign that resulted in increased conversions and sales.', 'u9OaGGML8XZzlnWMz968VB1r6Dp4OXxN8kVGQzWH.png', 'BIZIONIC performance marketing agency helped us launch a successful affiliate marketing campaign that resulted in increased conversions and sales. Their team was knowledgeable and provided us with regular updates on our progress. We appreciated their transparency and their ability to deliver measurable results.', 1, '2023-06-18 09:51:37', '2023-06-18 09:51:37'),
(23, 'Ericsson', 'Ericsson Human Resources Team', 'Bizionic IT Outstaffing solutions has helped us reduce our IT costs and improve our overall efficiency. They deeply understand our business needs and have provided us with reliable support and maintenance services.', 'I6l9MZNMQnCIrVq4hMoWlZmMjly5uzWnHrESQ5SQ.png', 'Bizionic IT Outstaffing solutions has helped us reduce our IT costs and improve our overall efficiency. They deeply understand our business needs and have provided us with reliable support and maintenance services. Their team is responsive, knowledgeable, and proactive in identifying and addressing issues before they become problems. We highly recommend them to anyone looking for a reliable IT partner', 1, '2023-06-18 09:52:28', '2023-06-18 09:52:28'),
(24, 'ByteDance', 'ByteDance Technology Dev Team', 'Byte dance team was impressed by this IT outsourcing company\'s ability to quickly ramp up and provide us with a scalable and cost-effective solution for our software development needs.', 'p4lXlsR6R3ztzMUDtc6nT6HCsmBHH168oGypucWm.png', 'Byte dance team was impressed by this IT outsourcing company\'s ability to quickly ramp up and provide us with a scalable and cost-effective solution for our software development needs. Their team is experienced, talented, and collaborative, and we appreciate their ability to work seamlessly with our internal team. They have helped us successfully deliver several projects on time and within budget', 1, '2023-06-18 09:53:17', '2023-06-18 09:53:17'),
(25, 'Just Eat Management Team', 'Just Eat Management Team', 'Bizionic performance marketing team helped us launch a successful affiliate marketing campaign that resulted in increased conversions and sales.', 'uZhSSpo7lfAsVyU220IQiWcKyDgnnhBvrlOuCIFN.png', 'Bizionic performance marketing team helped us launch a successful affiliate marketing campaign that resulted in increased conversions and sales. Their team was knowledgeable and provided us with regular updates on our progress. We appreciated their transparency and their ability to deliver measurable results', 1, '2023-06-18 09:54:38', '2023-06-18 09:54:38');

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
(1, 'ReactJS', '2023-05-27 00:35:00', '2023-06-14 23:30:54'),
(2, 'AngularJS', '2023-05-28 11:37:51', '2023-06-14 23:31:11'),
(3, 'Bootstrap', '2023-06-14 23:31:24', '2023-06-14 23:31:24'),
(4, 'Web Services', '2023-06-14 23:31:31', '2023-06-14 23:31:31'),
(5, 'Automation Testing', '2023-06-14 23:31:39', '2023-06-14 23:31:39'),
(6, 'Tableau', '2023-06-14 23:31:45', '2023-06-14 23:31:45'),
(7, 'Data Structures & Algorithms', '2023-06-14 23:31:54', '2023-06-14 23:31:54'),
(8, 'Nodejs', '2023-06-14 23:32:00', '2023-06-14 23:32:00'),
(9, 'SAP APO-SNP', '2023-06-14 23:32:12', '2023-06-14 23:32:12'),
(10, 'SAP MM & SAP S4 HANA', '2023-06-14 23:32:21', '2023-06-14 23:32:21'),
(11, 'Java', '2023-06-14 23:37:10', '2023-06-14 23:37:10'),
(12, 'ES6', '2023-06-14 23:40:25', '2023-06-14 23:40:25'),
(13, 'User Interface UI', '2023-06-14 23:40:40', '2023-06-14 23:40:40'),
(14, 'Redux', '2023-06-14 23:40:59', '2023-06-14 23:40:59'),
(15, 'MongoDB', '2023-06-14 23:41:18', '2023-06-14 23:41:18'),
(16, 'HTML', '2023-06-14 23:41:29', '2023-06-14 23:41:29'),
(17, 'CSS', '2023-06-14 23:41:37', '2023-06-14 23:41:37'),
(18, 'Javascript', '2023-06-14 23:41:51', '2023-06-14 23:41:51'),
(19, 'Jsx', '2023-06-14 23:42:01', '2023-06-14 23:42:01'),
(20, 'Restful Web API', '2023-06-14 23:42:12', '2023-06-14 23:42:12'),
(21, 'Java/J2EE', '2023-06-14 23:47:14', '2023-06-14 23:47:14'),
(22, 'Jsp', '2023-06-14 23:47:25', '2023-06-14 23:47:25'),
(23, 'Spring Boot', '2023-06-14 23:47:48', '2023-06-14 23:47:48'),
(24, 'Hibernate', '2023-06-14 23:47:59', '2023-06-14 23:47:59'),
(25, 'Spring Microservices', '2023-06-14 23:48:10', '2023-06-14 23:48:10'),
(26, 'MySQL', '2023-06-14 23:48:42', '2023-06-14 23:48:42'),
(27, 'Eclipse', '2023-06-14 23:48:57', '2023-06-14 23:48:57'),
(28, 'Git', '2023-06-14 23:49:08', '2023-06-14 23:49:08'),
(29, 'MAVEN', '2023-06-14 23:49:19', '2023-06-14 23:49:19'),
(30, 'jQuery', '2023-06-14 23:49:32', '2023-06-14 23:49:32'),
(31, 'Data Table', '2023-06-14 23:49:46', '2023-06-14 23:49:46'),
(32, 'SonarQube', '2023-06-14 23:50:01', '2023-06-14 23:50:01'),
(33, 'HP Fortify', '2023-06-14 23:50:12', '2023-06-14 23:50:12'),
(34, 'AWS', '2023-06-14 23:55:21', '2023-06-14 23:55:21'),
(35, 'Sequalae', '2023-06-14 23:55:37', '2023-06-14 23:55:37'),
(36, 'ExpressJs', '2023-06-14 23:56:11', '2023-06-14 23:56:11');

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
(1, 'Ashwini Kumar', '12+ Years Experienced Software Engineer', 'Full Time', '12 years', 'P7lmFI90CPzJWp1hgMnaeClSYcOe9t0YPDRceVub.png', NULL, 1, 'Reviewed', 1, '<div>&nbsp;12+ Years of diverse experience in Information Technology spanning various projects with an emphasis on Application Development in areas of Involvement in all implementation stages, from business requirement collection, business process analysis, configuration, data loads, unit test, integration testing, end-user training, and production support&nbsp;</div>', '2023-05-27 00:35:22', '2023-06-14 23:38:44'),
(2, 'Sourabh Ranakoti', '3+ Years Expert React-developer', 'Full Time', '3+ Years', 'O7WibYAeS4BnnK1hU9cXgXW2iGVWiDpT1eWJZJVU.jpg', NULL, 1, 'Reviewed', 1, '<div>&nbsp;3+ years of experience as a React-developer, implementing user interfaces for web-based Supply Chain application. Skilled in data visualization libraries such as works and ag-grid. Collaborates effectively with team members to ensure code quality, maintainability, and scalability. I have worked on visualization or reporting tool like SAP BO.&nbsp;</div>', '2023-06-14 23:44:42', '2023-06-14 23:45:29'),
(3, 'Manisha Verma', '4.5 years of industrial experience as a Java Web Application Developer', 'Full Time', '4.5 Years', '8ixCuhDlHscnuuRBdKVh9vstbOxeM7xESi1pl1W3.jpg', NULL, 1, 'Reviewed', 1, '<div>4.5 years of industrial experience as a Java Web Application Developer specializing in the Windchill PLM domain with Spring Boot, Java 8, and MySQL knowledge. Involved in requirement gathering and understanding/analyzing the product. Worked on tuning the performance of applications. Conducted code reviews and implemented unit testing to ensure code quality and maintainability.&nbsp;</div>', '2023-06-14 23:52:15', '2023-06-14 23:52:15'),
(4, 'Abishek S', '2+ Years Experienced Full-Stack Developer', 'Full Time', '2+ Years', 'aZi4v7kBM7fcLfzDDCVmBbKkpoSH9U1oSPo8U1jB.jpg', NULL, 1, 'Reviewed', 1, '<div>&nbsp;Full-Stack Developer with nearly 2 years of experience in HTML, CSS, REACT, NODEJS, AWS, MYSQL, JAVASCRIPT, and MongoDB. An ambitious and self-motivated Full-Stack Developer with nearly 2 years of industry experience who possesses self-discipline and ability to work with the minimum of supervision.&nbsp;</div>', '2023-06-14 23:58:16', '2023-06-15 00:01:04');

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
(1, 'Development and IT', '2023-05-27 00:32:56', '2023-06-14 23:30:00'),
(2, 'Design and Creatives', '2023-05-27 00:33:16', '2023-06-14 23:30:19'),
(3, 'Sales and Marketing', '2023-05-27 00:33:41', '2023-06-14 23:29:29');

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
(1, 1),
(1, 11),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 10),
(1, 9),
(2, 12),
(2, 13),
(2, 1),
(2, 14),
(2, 8),
(2, 15),
(2, 16),
(2, 17),
(2, 18),
(2, 20),
(2, 19),
(3, 21),
(3, 22),
(3, 18),
(3, 16),
(3, 23),
(3, 24),
(3, 25),
(3, 20),
(3, 26),
(3, 27),
(3, 28),
(3, 29),
(3, 17),
(3, 31),
(3, 3),
(3, 32),
(3, 33),
(4, 8),
(4, 18),
(4, 20),
(4, 26),
(4, 34),
(4, 35),
(4, 28),
(4, 17),
(4, 16),
(4, 1),
(4, 36),
(4, 15);

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
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 6),
(2, 7),
(3, 9),
(3, 10),
(3, 11),
(3, 12),
(3, 13),
(3, 14),
(4, 15),
(4, 16),
(4, 17),
(4, 18),
(4, 19),
(4, 20),
(4, 21),
(4, 23);

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
(1, 1, 'Hire Talent', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"0\"}', NULL, 2, 1, '2023-05-27 10:43:08', '2023-06-26 05:58:30', 1, NULL),
(3, 1, 'Marketing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": null}', NULL, 3, 1, '2023-05-27 10:43:39', '2023-06-26 05:58:08', 1, NULL),
(4, 1, 'Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"services\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": null}', NULL, 5, 1, '2023-05-27 10:44:14', '2023-06-26 05:58:08', 1, NULL),
(5, 1, 'Industries', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"industries\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": null}', NULL, 6, 1, '2023-05-27 10:44:34', '2023-06-26 05:58:08', 1, NULL),
(6, 1, 'About Us', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"about-us\", \"template\": \"home\", \"menu_columns\": null, \"is_action_item\": \"0\"}', NULL, 1, 1, '2023-05-27 10:44:42', '2023-06-26 05:58:08', 1, NULL),
(7, 1, 'Get a free Consultation', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"get-a-free-consultation\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"btn_default\"}', NULL, 9, 1, '2023-05-27 10:45:15', '2023-07-23 04:40:26', 1, NULL),
(8, 1, 'DEVELOPERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"developer\", \"template\": null, \"menu_icon\": \"hirenav_icon1.png\", \"menu_columns\": null, \"is_action_item\": \"col-lg-6 col-md-6 pr-0\"}', 1, 1, 1, '2023-05-27 10:45:38', '2023-06-14 03:49:29', 1, NULL),
(16, 1, 'BACK-END DEVELOPMENT', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"back-end-development\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 287, 2, 1, '2023-06-13 03:56:10', '2023-06-14 05:28:07', 1, NULL),
(17, 1, 'Hire Node.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-node-js-developers\", \"template\": \"backend-nodeJs\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 1, 1, '2023-06-13 03:57:07', '2023-07-21 06:03:07', 1, NULL),
(18, 1, 'Hire Python Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-python-developers\", \"template\": \"backend-pythonJs\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 2, 1, '2023-06-13 03:57:07', '2023-07-21 06:39:18', 1, NULL),
(19, 1, 'Hire .Net Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-dot-net-developers\", \"template\": \"backend-dot-net\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 3, 1, '2023-06-13 03:57:07', '2023-07-21 07:03:39', 1, NULL),
(20, 1, 'Hire Laravel Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-laravel-developers\", \"template\": \"backend-laravel\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 4, 1, '2023-06-13 03:57:07', '2023-07-21 07:21:41', 1, NULL),
(21, 1, 'Hire Ruby on Rails Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ruby-on-rails-developers\", \"template\": \"backend-ruby-on-rails\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 5, 1, '2023-06-13 03:57:07', '2023-07-21 07:37:05', 1, NULL),
(22, 1, 'Hire Golang Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-golang-developers\", \"template\": \"backend-golang\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 6, 1, '2023-06-13 03:57:07', '2023-07-21 08:19:21', 1, NULL),
(23, 1, 'Hire JavaScript Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-javaScript-developers\", \"template\": \"backend-javascript\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 7, 1, '2023-06-13 03:57:07', '2023-07-21 13:18:16', 1, NULL),
(24, 1, 'DEVOPS SERVICES', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"devops-services\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 287, 3, 1, '2023-06-13 03:56:10', '2023-06-14 05:28:11', 1, NULL),
(25, 1, 'Hire AWS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-aws-developers\", \"template\": \"devops-aws-developers\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 24, 1, 1, '2023-06-13 03:57:07', '2023-07-21 13:41:04', 1, NULL),
(26, 1, 'Hire Azure Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-azure-developers\", \"template\": \"devops-azure-developers\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 24, 2, 1, '2023-06-13 03:57:07', '2023-07-21 13:56:06', 1, NULL),
(27, 1, 'Hire Google Cloud Consultants', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-google-cloud-consultants\", \"template\": \"devops-googleCloud-consultants\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 24, 3, 1, '2023-06-13 03:57:07', '2023-07-21 14:32:33', 1, NULL),
(28, 1, 'Hire Oracle Cloud Infrastructure (OCI) Consultants', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-oracle-cloud-infra-consultants\", \"template\": \"devops-oracleCloud-consultants\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 24, 4, 1, '2023-06-13 03:57:07', '2023-07-21 14:34:45', 1, NULL),
(29, 1, 'BLOCKCHAIN DEVELOPERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"blockchain-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 288, 1, 1, '2023-06-13 03:56:10', '2023-06-14 05:29:04', 1, NULL),
(30, 1, 'Hire Smart Contract Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-smart-contact-developers\", \"template\": \"blockchain-smart-contract-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 1, 1, '2023-06-13 03:56:10', '2023-07-22 01:42:14', 1, NULL),
(31, 1, 'Hire dApps Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-dapps-developers\", \"template\": \"blockchain-d-apps-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 2, 1, '2023-06-13 03:56:10', '2023-07-22 02:05:49', 1, NULL),
(32, 1, 'Hire Blockchain Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-blockchain-developers\", \"template\": \"hire-blockchain-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 3, 1, '2023-06-13 03:56:10', '2023-07-22 02:24:04', 1, NULL),
(33, 1, 'Hire ICO Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ico-developers\", \"template\": \"blockchain-ico-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 4, 1, '2023-06-13 03:56:10', '2023-07-22 02:40:22', 1, NULL),
(34, 1, 'Hire Cryptocurrency Exchange Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-cryptocurrency-exchange-developers\", \"template\": \"blockchain-crypto-exchange-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 5, 1, '2023-06-13 03:56:10', '2023-07-22 02:58:42', 1, NULL),
(35, 1, 'Hire DeFi Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-defi-developers\", \"template\": \"blockchain-defi-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 6, 1, '2023-06-13 03:56:10', '2023-07-22 03:12:41', 1, NULL),
(36, 1, 'Hire NFT Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-nft-developers\", \"template\": \"blockchain-nft-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 7, 1, '2023-06-13 03:56:10', '2023-07-22 03:31:40', 1, NULL),
(37, 1, 'HIRE MOBILE APP DEVELOPERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"mobile-app-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 288, 2, 1, '2023-06-13 03:56:10', '2023-06-14 05:29:05', 1, NULL),
(38, 1, 'Hire Android App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-android-app-developers\", \"template\": \"mobile-android-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 1, 1, '2023-06-13 03:56:10', '2023-07-22 06:09:04', 1, NULL),
(39, 1, 'Hire iOS App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ios-app-developers\", \"template\": \"mobile-ios-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 2, 1, '2023-06-13 03:56:10', '2023-07-22 06:27:34', 1, NULL),
(40, 1, 'Hire React Native Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-react-native-developers\", \"template\": \"mobile-react-native-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 3, 1, '2023-06-13 03:56:10', '2023-07-22 06:42:57', 1, NULL),
(41, 1, 'Hire Flutter Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-flutter-developers\", \"template\": \"mobile-flutter-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 4, 1, '2023-06-13 03:56:10', '2023-07-22 06:59:34', 1, NULL),
(42, 1, 'Hire Kotlin App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-kotlin-app-developers\", \"template\": \"mobile-kotlin-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 5, 1, '2023-06-13 03:56:10', '2023-07-22 07:16:06', 1, NULL),
(43, 1, 'DATA SCIENCE', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"data-science-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 288, 3, 1, '2023-06-13 03:56:10', '2023-06-14 05:29:06', 1, NULL),
(44, 1, 'Hire Data Scientists', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-data-scientists\", \"template\": \"hire-data-scientist-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 43, 1, 1, '2023-06-13 03:56:10', '2023-07-22 08:03:17', 1, NULL),
(45, 1, 'Hire Tableau Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-tableau-developers\", \"template\": \"hire-tableau-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 43, 2, 1, '2023-06-13 03:56:10', '2023-07-22 08:38:40', 1, NULL),
(46, 1, 'OTHER DEVELOPERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"other-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 289, 1, 1, '2023-06-13 03:56:10', '2023-06-14 05:29:45', 1, NULL),
(47, 1, 'C# Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-c-sharp-developers\", \"template\": \"hire-c-sharp-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 1, 1, '2023-06-13 03:56:10', '2023-07-22 12:56:58', 1, NULL),
(48, 1, 'C++ Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-c-plus-plus-developers\", \"template\": \"hire-c-plus-plus-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 2, 1, '2023-06-13 03:56:10', '2023-07-22 12:42:20', 1, NULL),
(49, 1, 'Hire SAP Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-sap-developers\", \"template\": \"hire-sap-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 3, 1, '2023-06-13 03:56:10', '2023-07-22 13:10:12', 1, NULL),
(50, 1, 'Hire QA Software Engineers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-software-engineers\", \"template\": \"hire-qa-engineer-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 4, 1, '2023-06-13 06:22:16', '2023-07-23 00:41:48', 1, NULL),
(51, 1, 'Hire Solidity Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-solidity-developers\", \"template\": \"hire-solidity-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 5, 1, '2023-06-13 06:22:51', '2023-07-22 13:33:53', 1, NULL),
(58, 1, 'Hire Swift Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-swift-developers\", \"template\": \"hire-swift-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 6, 1, '2023-06-13 06:24:34', '2023-07-22 13:42:47', 1, NULL),
(59, 1, 'Hire Unity Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-unity-developers\", \"template\": \"hire-unity-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 7, 1, '2023-06-13 06:25:30', '2023-07-22 13:54:01', 1, NULL),
(60, 1, 'Hire Craft CMS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-craft-cms-developers\", \"template\": \"hire-craft-cms-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 8, 1, '2023-06-13 06:25:59', '2023-07-22 14:08:35', 1, NULL),
(61, 1, 'Hire Salesforce Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-salesforce-developers\", \"template\": \"hire-salesforce-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 9, 1, '2023-06-13 06:26:31', '2023-07-22 14:21:19', 1, NULL),
(62, 1, 'Hire WordPress Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-wordPress-developers\", \"template\": \"hire-wordpress-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 10, 1, '2023-06-13 06:27:26', '2023-07-22 14:40:14', 1, NULL),
(63, 1, 'Hire WooCommerce Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-wooCommerce-developers\", \"template\": \"hire-wooCommerce-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 11, 1, '2023-06-13 06:28:07', '2023-07-22 14:51:40', 1, NULL),
(64, 1, 'Hire Symfony Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-symfony-developers\", \"template\": \"hire-symfony-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 12, 1, '2023-06-13 06:28:50', '2023-07-22 15:05:14', 1, NULL),
(65, 1, 'Hire HubSpot Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-hubSpot-developers\", \"template\": \"hire-hubspot-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 13, 1, '2023-06-13 06:29:18', '2023-07-22 15:17:01', 1, NULL),
(66, 1, 'Hire Full Stack Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-full-stack-developers\", \"template\": \"hire-full-stack-developer\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 14, 1, '2023-06-13 06:29:43', '2023-07-22 15:31:30', 1, NULL),
(67, 1, 'OTHER', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"developers-other\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 289, 2, 1, '2023-06-13 06:30:42', '2023-06-14 05:29:47', 1, NULL),
(68, 1, 'Looking for Other Technology?', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"looking-for-other-technology\", \"template\": \"developer-looking-other-technology\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 67, 1, 1, '2023-06-13 06:30:42', '2023-07-23 04:50:34', 1, NULL),
(72, 1, 'MARKETERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-3 col-md-3  p-0\"}', 1, 2, 1, '2023-06-13 06:32:31', '2023-06-14 06:02:28', 1, NULL),
(73, 1, 'MARKETING TEAM AUGMENTATION', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing-team-augmentation\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6  col-md-6 pr-0\"}', 290, 1, 1, '2023-06-13 06:33:37', '2023-06-14 05:31:54', 1, NULL),
(74, 1, 'OTHER', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketers-other\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6 col-md-6 pr-0\"}', 290, 2, 1, '2023-06-13 06:35:46', '2023-06-14 05:32:00', 1, NULL),
(75, 1, 'Looking for Other Marketing Skills?', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"looking-for-other-marketing-skills\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 74, 1, 1, '2023-06-13 06:36:25', '2023-06-13 06:36:52', 1, NULL),
(76, 1, 'Marketing Manager', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing-manager\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 1, 1, '2023-06-13 06:37:10', '2023-06-13 06:37:25', 1, NULL),
(77, 1, 'Digital Marketing Specialist', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"digital-marketing-specialist\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 2, 1, '2023-06-13 06:37:33', '2023-06-13 06:37:57', 1, NULL),
(78, 1, 'SEM (Search Engine Marketing) Specialist', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"sem-search-engine-marketing-specialist\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 3, 1, '2023-06-13 06:38:11', '2023-06-13 06:38:45', 1, NULL),
(79, 1, 'SEO (Search Engine Optimization) Specialist', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"sem-search-engine-optimization-specialist\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 4, 1, '2023-06-13 06:38:49', '2023-06-13 06:39:17', 1, NULL),
(80, 1, 'PPC (Pay-Per-Click) Google Ads Specialist', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ppc-pay-per-click-google-ads-specialist\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 5, 1, '2023-06-13 06:40:02', '2023-06-13 06:40:49', 1, NULL),
(81, 1, 'Social Media Manager', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"social-media-manager\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 6, 1, '2023-06-13 06:40:57', '2023-06-13 06:41:19', 1, NULL),
(82, 1, 'Content Marketer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"content-marketer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 7, 1, '2023-06-13 06:43:06', '2023-06-13 06:43:22', 1, NULL),
(83, 1, 'Product Marketing Manager', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"product-marketing-manager\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 8, 1, '2023-06-13 06:43:32', '2023-06-13 06:43:52', 1, NULL),
(84, 1, 'Influencer Marketer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"influencer-marketer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 9, 1, '2023-06-13 06:44:06', '2023-06-13 06:44:23', 1, NULL),
(85, 1, 'Market Research Analyst', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"market-research-analyst\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 10, 1, '2023-06-13 06:44:32', '2023-06-13 06:44:51', 1, NULL),
(86, 1, 'Public Relations (PR) Specialist', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"public-relations-pr-specialist\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 11, 1, '2023-06-13 06:45:01', '2023-06-13 06:45:26', 1, NULL),
(87, 1, 'Email Marketing Specialist', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"email-marketing-specialist\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 12, 1, '2023-06-13 06:45:37', '2023-06-13 06:45:54', 1, NULL),
(88, 1, 'Marketing Coordinator', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing-coordinator\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 13, 1, '2023-06-13 06:46:03', '2023-06-13 06:46:20', 1, NULL),
(89, 1, 'Marketing Communications Specialist', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing-communications-specialist\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 73, 14, 1, '2023-06-13 06:46:31', '2023-06-13 06:46:51', 1, NULL),
(90, 1, 'spacer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"for-marketers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6 col-md-6 pr-0\"}', 291, 1, 1, '2023-06-13 06:48:45', '2023-06-14 05:33:01', 1, NULL),
(91, 1, 'Paid Advertising Specialist', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"paid-advertising-specialist\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 1, 1, '2023-06-13 06:48:45', '2023-06-13 06:50:04', 1, NULL),
(92, 1, 'Brand Manager', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"brand-manager\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 2, 1, '2023-06-13 06:51:57', '2023-06-13 06:52:14', 1, NULL),
(93, 1, 'Graphic Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"graphic-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 3, 1, '2023-06-13 06:52:27', '2023-06-13 06:52:43', 1, NULL),
(94, 1, 'UI UX Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ui-ux-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 4, 1, '2023-06-13 06:53:01', '2023-06-13 06:53:22', 1, NULL),
(95, 1, 'Web Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"web-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 5, 1, '2023-06-13 06:53:34', '2023-06-13 06:53:49', 1, NULL),
(96, 1, 'Motion Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"motion-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 6, 1, '2023-06-13 06:57:18', '2023-06-13 06:57:42', 1, NULL),
(97, 1, 'Product Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"product-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 7, 1, '2023-06-13 06:57:46', '2023-06-13 06:58:10', 1, NULL),
(98, 1, 'Brand Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"brand-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 8, 1, '2023-06-13 06:58:22', '2023-06-13 06:58:35', 1, NULL),
(99, 1, 'UX Researcher', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ux-researcher\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 9, 1, '2023-06-13 06:58:39', '2023-06-13 06:59:01', 1, NULL),
(100, 1, 'User Experience (UX) Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"user-experience-ux-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 10, 1, '2023-06-13 06:59:10', '2023-06-13 06:59:37', 1, NULL),
(101, 1, 'Visual Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"visual-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 11, 1, '2023-06-13 06:59:46', '2023-06-13 07:00:06', 1, NULL),
(102, 1, 'Print Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"print-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 12, 1, '2023-06-13 07:00:15', '2023-06-13 07:00:30', 1, NULL),
(103, 1, 'Exhibition Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"exhibition-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 13, 1, '2023-06-13 07:00:40', '2023-06-13 07:00:56', 1, NULL),
(104, 1, 'Packaging Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"packaging-designer\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 90, 14, 1, '2023-06-13 07:01:05', '2023-06-13 07:01:21', 1, NULL),
(105, 1, 'Technologies', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"technology\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": null}', NULL, 4, 1, '2023-06-13 12:51:53', '2023-06-26 05:58:57', 1, NULL),
(106, 1, 'Hire Me', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-me\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"hire_me_button\"}', NULL, 8, 1, '2023-06-13 12:52:22', '2023-06-26 05:58:08', 1, NULL),
(107, 1, 'MARKETING SERVICES WE PROVIDE', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing-services-we-provide\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-7 col-md-7 pr-0\"}', 3, 1, 1, '2023-06-14 02:08:51', '2023-06-14 04:28:47', 1, NULL),
(108, 1, 'MARKETING & MEDIA', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing-and-media\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 292, 1, 1, '2023-06-14 02:09:38', '2023-06-14 05:34:42', 1, NULL),
(109, 1, 'UI/UX SERVICES', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ui-ux-services\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 292, 2, 1, '2023-06-14 02:10:04', '2023-06-14 05:34:43', 1, NULL),
(110, 1, 'MORE', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"more\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 292, 3, 1, '2023-06-14 02:10:30', '2023-06-14 05:34:44', 1, NULL),
(111, 1, '360 E-COMMERCE SOLUTIONS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"36-ecommerce-solutions\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 293, 1, 1, '2023-06-14 02:10:49', '2023-06-14 05:35:31', 1, NULL),
(112, 1, 'SERVICES', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"services\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 293, 2, 1, '2023-06-14 02:11:36', '2023-06-14 05:35:32', 1, NULL),
(113, 1, 'Media Planning And Buying', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"media-planning-and-buying\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 108, 1, 1, '2023-06-14 02:12:57', '2023-06-14 02:13:43', 1, NULL),
(114, 1, 'Social Media Management (SMM)', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"social-media-management-smm\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 108, 2, 1, '2023-06-14 02:13:52', '2023-06-14 02:14:59', 1, NULL),
(115, 1, 'Search Engine Optimization (SEO)', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"search-engine-optimization-seo\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 108, 3, 1, '2023-06-14 02:15:36', '2023-06-14 02:16:04', 1, NULL),
(116, 1, 'Google Adverts And PPC', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"google-adverts-and-ppc\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 108, 4, 1, '2023-06-14 02:16:14', '2023-06-14 02:16:36', 1, NULL),
(117, 1, 'Technical Analysis', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"technical-analysis\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 108, 5, 1, '2023-06-14 02:16:45', '2023-06-14 02:17:03', 1, NULL),
(118, 1, 'Creative Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"creative-solutions\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 108, 6, 1, '2023-06-14 02:17:10', '2023-06-14 02:17:27', 1, NULL),
(119, 1, 'UI/UX Designs', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ui-ux-designs\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 109, 1, 1, '2023-06-14 02:29:36', '2023-06-14 02:29:55', 1, NULL),
(120, 1, 'Usability Testing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"usability-testing\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 109, 2, 1, '2023-06-14 02:30:06', '2023-06-14 02:30:27', 1, NULL),
(121, 1, 'Usability Audit (UX Audit)', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"usability-audit-ux-audit\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 109, 3, 1, '2023-06-14 02:31:26', '2023-06-14 02:31:49', 1, NULL),
(122, 1, 'Layout Wireframes', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"layout-wireframes\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 109, 4, 1, '2023-06-14 02:31:58', '2023-06-14 02:32:18', 1, NULL),
(123, 1, 'Animations', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"animations\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 109, 5, 1, '2023-06-14 02:32:24', '2023-06-14 02:32:37', 1, NULL),
(124, 1, 'Illustrations', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"illustrations\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 109, 6, 1, '2023-06-14 02:32:44', '2023-06-14 02:32:56', 1, NULL),
(125, 1, 'Campaign Monitoring', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"campaign-monitoring\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 110, 1, 1, '2023-06-14 02:33:06', '2023-06-14 02:33:28', 1, NULL),
(126, 1, 'Influencer Marketing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"influencer-marketing\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 110, 2, 1, '2023-06-14 02:33:39', '2023-06-14 02:33:56', 1, NULL),
(127, 1, 'Display Advertising', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"display-advertising\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 110, 3, 1, '2023-06-14 02:34:07', '2023-06-14 02:34:23', 1, NULL),
(128, 1, 'Data Science', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"data-science\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 110, 4, 1, '2023-06-14 02:34:36', '2023-06-14 02:34:48', 1, NULL),
(129, 1, 'E-Commerce Store', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"e-commerce-store\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 111, 1, 1, '2023-06-14 02:35:09', '2023-06-14 02:35:27', 1, NULL),
(130, 1, 'Payment Gateway', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"payment-gateway\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 111, 2, 1, '2023-06-14 02:35:38', '2023-06-14 02:35:57', 1, NULL),
(131, 1, 'Voice Commerce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"voice-commerce\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 111, 3, 1, '2023-06-14 02:36:08', '2023-06-14 02:36:22', 1, NULL),
(132, 1, 'Chatbots Commerce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"chatbots-commerce\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 111, 4, 1, '2023-06-14 02:36:29', '2023-06-14 02:36:46', 1, NULL),
(133, 1, 'Customer Service Automation', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"customer-service-automation\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 111, 5, 1, '2023-06-14 02:36:55', '2023-06-14 02:37:16', 1, NULL),
(134, 1, 'Artificial Intelligence', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"artificial-intelligence\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 111, 6, 1, '2023-06-14 02:37:25', '2023-06-14 02:37:41', 1, NULL),
(135, 1, 'Social Media Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"social-media-solutions\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 1, 1, '2023-06-14 02:38:21', '2023-06-14 02:38:49', 1, NULL),
(136, 1, 'Digital Marketing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"digital-marketing\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 2, 1, '2023-06-14 02:38:56', '2023-06-14 02:39:14', 1, NULL),
(137, 1, 'SMM Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"smm-services\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 3, 1, '2023-06-14 02:39:20', '2023-06-14 02:39:35', 1, NULL),
(138, 1, 'SEO Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"seo-services\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 4, 1, '2023-06-14 02:40:17', '2023-06-14 02:40:27', 1, NULL),
(139, 1, 'Online Advertising', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"online-advertising\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 5, 1, '2023-06-14 02:40:35', '2023-06-14 02:40:50', 1, NULL),
(140, 1, 'UI/UX Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ui-ux-services\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 6, 1, '2023-06-14 02:41:13', '2023-06-14 02:41:29', 1, NULL),
(141, 1, 'Chatbots', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"chatbots\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 7, 1, '2023-06-14 02:41:34', '2023-06-14 02:41:45', 1, NULL),
(142, 1, 'Video Production', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"video-production\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 8, 1, '2023-06-14 02:41:52', '2023-06-14 02:42:07', 1, NULL),
(143, 1, 'Programmatic Ads', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"programmatic-ads\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 9, 1, '2023-06-14 02:43:03', '2023-06-14 02:43:18', 1, NULL),
(144, 1, 'Event Management', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"event-management\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 112, 10, 1, '2023-06-14 02:43:39', '2023-06-14 02:43:52', 1, NULL),
(145, 1, 'TECHNOLOGIES WE MASTER', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"technology-we-master\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-8 col-md-8 pr-0\"}', 105, 1, 1, '2023-06-14 02:44:44', '2023-06-14 04:29:25', 1, NULL),
(146, 1, 'E-COMMERCE', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"e-commerce\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 294, 1, 1, '2023-06-14 02:45:18', '2023-06-14 05:37:58', 1, NULL),
(147, 1, 'PHP', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"php\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 294, 2, 1, '2023-06-14 02:45:54', '2023-06-14 05:38:00', 1, NULL),
(148, 1, 'GAME DEVELOPMENT', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"game-development\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 295, 1, 1, '2023-06-14 02:46:11', '2023-06-14 05:38:54', 1, NULL),
(149, 1, '.NET', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"dot-net\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 295, 2, 1, '2023-06-14 02:46:29', '2023-06-14 05:38:57', 1, NULL),
(150, 1, 'CRM SOLUTIONS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"crm-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 295, 3, 1, '2023-06-14 02:46:57', '2023-06-14 05:38:58', 1, NULL),
(151, 1, 'CMS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"cms\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 296, 1, 1, '2023-06-14 02:47:14', '2023-06-14 05:39:54', 1, NULL),
(152, 1, 'MOBILE APPS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"mobile-apps\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 296, 2, 1, '2023-06-14 02:47:31', '2023-06-14 05:40:11', 1, NULL),
(153, 1, 'MORE', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"more\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 296, 3, 1, '2023-06-14 02:47:50', '2023-06-14 05:40:13', 1, NULL),
(154, 1, 'OTHERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"others\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 296, 4, 1, '2023-06-14 02:48:05', '2023-06-14 05:40:19', 1, NULL),
(155, 1, 'SERVICES WE EXCEL AT', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"services-we-excel-at\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-7 col-md-7 pr-0\"}', 4, 1, 1, '2023-06-14 02:48:52', '2023-06-14 04:29:56', 1, NULL),
(156, 1, 'INDUSTRIES WE SERVE', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"industries-we-serve\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-5 col-md-6 pr-0\"}', 5, 1, 1, '2023-06-14 02:49:23', '2023-06-14 04:30:23', 1, NULL),
(157, 1, 'spacer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"industries\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 299, 1, 1, '2023-06-14 02:51:30', '2023-06-14 05:44:02', 1, NULL),
(158, 1, 'Startups', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"startups\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 1, 1, '2023-06-14 02:52:34', '2023-06-14 12:25:01', 1, NULL),
(159, 1, 'Real Estate', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"real-estate\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 2, 1, '2023-06-14 02:52:56', '2023-06-14 02:53:09', 1, NULL),
(160, 1, 'B2B Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"b2b-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 3, 1, '2023-06-14 02:53:17', '2023-06-14 02:53:37', 1, NULL),
(161, 1, 'B2C Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"b2c-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 4, 1, '2023-06-14 02:53:43', '2023-06-14 02:53:55', 1, NULL),
(162, 1, 'Healthcare', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"healthcare\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 5, 1, '2023-06-14 02:54:00', '2023-06-14 02:54:10', 1, NULL),
(163, 1, 'Travel & Hospitality', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"travel-and-hospitality\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 6, 1, '2023-06-14 02:54:20', '2023-06-14 02:54:41', 1, NULL),
(164, 1, 'Banking & Finance', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"banking-and-finance\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 7, 1, '2023-06-14 02:54:49', '2023-06-14 02:55:05', 1, NULL),
(165, 1, 'Media & Publishing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"media-and-publishing\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 8, 1, '2023-06-14 02:55:14', '2023-06-14 02:55:32', 1, NULL),
(166, 1, 'Education and E-Learning', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"education-and-e-Learning\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 9, 1, '2023-06-14 02:55:41', '2023-07-04 12:30:48', 1, NULL),
(167, 1, 'Food & FMCG', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"food-and-fmcg\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 10, 1, '2023-06-14 02:56:10', '2023-06-14 02:56:34', 1, NULL),
(168, 1, 'Automotive', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"automotive\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 11, 1, '2023-06-14 02:56:40', '2023-06-14 02:56:50', 1, NULL),
(169, 1, 'E-Commerce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"e-commerce\", \"template\": \"eCommerce\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 12, 1, '2023-06-14 02:56:57', '2023-07-23 04:31:46', 1, NULL),
(170, 1, 'WEB', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"web\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 297, 1, 1, '2023-06-14 02:58:19', '2023-06-14 05:41:46', 1, NULL),
(171, 1, 'DIGITAL MARKETING', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"digital-marketing\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 297, 2, 1, '2023-06-14 02:58:38', '2023-06-14 05:41:48', 1, NULL),
(172, 1, 'SEO', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"seo\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 297, 3, 1, '2023-06-14 02:59:05', '2023-06-14 05:41:55', 1, NULL),
(173, 1, 'OTHERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"others\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 297, 4, 1, '2023-06-14 02:59:22', '2023-06-14 13:13:30', 1, NULL),
(174, 1, 'APP', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"app\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 298, 1, 1, '2023-06-14 02:59:45', '2023-06-14 05:42:33', 1, NULL),
(175, 1, 'CLOUD & HOSTING', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"cloud-and-hosting\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 298, 2, 1, '2023-06-14 03:00:02', '2023-06-14 13:15:53', 1, NULL),
(176, 1, 'GAMES', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 298, 3, 1, '2023-06-14 03:00:22', '2023-06-14 13:18:28', 1, NULL),
(187, 1, 'Magento', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"magento\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 1, 1, '2023-06-14 03:02:25', '2023-06-14 03:02:37', 1, NULL),
(188, 1, 'Shopify', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"shopify\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 2, 1, '2023-06-14 03:02:47', '2023-06-14 03:02:58', 1, NULL),
(189, 1, 'Core PHP', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"core-php\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 1, 1, '2023-06-14 03:03:07', '2023-06-14 03:03:19', 1, NULL),
(190, 1, 'Cake PHP', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"cake-php\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 2, 1, '2023-06-14 03:03:22', '2023-06-14 03:03:32', 1, NULL);
INSERT INTO `nova_menu_menu_items` (`id`, `menu_id`, `name`, `locale`, `class`, `value`, `target`, `data`, `parent_id`, `order`, `enabled`, `created_at`, `updated_at`, `nestable`, `slug`) VALUES
(191, 1, 'Laravel', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"laravel\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 3, 1, '2023-06-14 03:03:38', '2023-06-14 03:03:49', 1, NULL),
(192, 1, 'Flash Games', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"flash-games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 1, 1, '2023-06-14 03:04:01', '2023-06-14 03:04:15', 1, NULL),
(193, 1, 'Unity 3D', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"unity-3d\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 2, 1, '2023-06-14 03:04:21', '2023-06-14 03:04:32', 1, NULL),
(194, 1, 'ASP.NET', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"asp-dot-net\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 149, 1, 1, '2023-06-14 03:04:41', '2023-06-14 03:04:54', 1, NULL),
(195, 1, 'C#', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"c-sharp\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 149, 2, 1, '2023-06-14 03:05:04', '2023-06-14 03:05:16', 1, NULL),
(196, 1, 'MS Dynamics CRM', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ms-dynamics-crm\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 150, 1, 1, '2023-06-14 03:05:30', '2023-06-14 03:05:57', 1, NULL),
(197, 1, 'SugarCRM', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"sugar-crm\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 150, 2, 1, '2023-06-14 03:06:06', '2023-06-14 03:06:20', 1, NULL),
(198, 1, 'Salesforce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"salesforce\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 150, 3, 1, '2023-06-14 03:06:28', '2023-06-14 03:06:37', 1, NULL),
(199, 1, 'Drupal', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"drupal\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 151, 1, 1, '2023-06-14 03:06:47', '2023-06-14 03:06:58', 1, NULL),
(200, 1, 'Wordpress', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"wordpress\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 151, 2, 1, '2023-06-14 03:07:03', '2023-06-14 03:07:14', 1, NULL),
(201, 1, 'iOS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ios\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 152, 1, 1, '2023-06-14 03:07:25', '2023-06-14 03:07:35', 1, NULL),
(202, 1, 'Android', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"android\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 152, 2, 1, '2023-06-14 03:07:41', '2023-06-14 03:07:52', 1, NULL),
(203, 1, 'Hybrid', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hybrid\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 152, 3, 1, '2023-06-14 03:07:57', '2023-06-14 03:08:08', 1, NULL),
(204, 1, 'Python', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"python\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 153, 1, 1, '2023-06-14 03:08:21', '2023-06-14 03:08:33', 1, NULL),
(205, 1, 'Website Designer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"website-designer\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 153, 2, 1, '2023-06-14 03:09:13', '2023-06-14 03:09:25', 1, NULL),
(206, 1, 'Quality Analyst', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"quality-analyst\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 153, 3, 1, '2023-06-14 03:09:35', '2023-06-14 03:09:50', 1, NULL),
(207, 1, 'Artificial Intelligence (AI)', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"artificial-intelligence-ai\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 154, 1, 1, '2023-06-14 03:10:08', '2023-06-14 03:10:43', 1, NULL),
(208, 1, 'Virtual Reality (VR) Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"virtual-reality-vr-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 154, 2, 1, '2023-06-14 03:10:52', '2023-06-14 03:11:13', 1, NULL),
(209, 1, 'Augmented Reality (AR) Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"augmented-reality-ar-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 154, 3, 1, '2023-06-14 03:11:21', '2023-06-14 03:11:39', 1, NULL),
(218, 1, 'Web Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"web-development\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 170, 1, 1, '2023-06-14 03:13:21', '2023-06-14 03:13:32', 1, NULL),
(219, 1, 'PHP Development Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"php-development-services\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 170, 2, 1, '2023-06-14 03:13:41', '2023-06-14 03:13:57', 1, NULL),
(220, 1, 'e-Commerce Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"e-commerce-development\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 170, 3, 1, '2023-06-14 03:14:05', '2023-06-14 03:14:18', 1, NULL),
(221, 1, 'Digital Marketing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"digital-marketing\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 171, 1, 1, '2023-06-14 03:14:25', '2023-06-14 03:14:44', 1, NULL),
(222, 1, 'Pay Per Click Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"pay-per-click-services\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 171, 2, 1, '2023-06-14 03:14:53', '2023-06-14 03:15:12', 1, NULL),
(223, 1, 'Social Media Optimization', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"social-media-optimization\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 171, 3, 1, '2023-06-14 03:15:20', '2023-06-14 03:15:37', 1, NULL),
(224, 1, 'Conversion Rate Optimization', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"conversion-rate-optimization\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 171, 4, 1, '2023-06-14 03:15:46', '2023-06-14 03:16:03', 1, NULL),
(227, 1, 'Hire HTML5/CSS3 Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-node-js-developer\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"0\"}', 226, 1, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(228, 1, 'Hire Angular Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-angular-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 226, 2, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(229, 1, 'Hire Angular 2.0 Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-angular-2-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 226, 3, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(230, 1, 'Hire Vue.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-vue-js-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 226, 4, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(231, 1, 'Hire Gatsby JS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-gatsby-js-develpers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 226, 5, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(232, 1, 'Hire Next.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-next-js-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 226, 6, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(234, 1, 'Hire Node.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-node-js-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 233, 1, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(235, 1, 'Hire Python Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-python-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 233, 2, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(236, 1, 'Hire .Net Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-dot-net-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 233, 3, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(237, 1, 'Hire Laravel Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-laravel-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 233, 4, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(238, 1, 'Hire Ruby on Rails Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ruby-on-rails-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 233, 5, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(239, 1, 'Hire Golang Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-golang-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 233, 6, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(240, 1, 'Hire JavaScript Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-javaScript-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 233, 7, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(242, 1, 'Hire AWS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-aws-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 241, 1, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(243, 1, 'Hire Azure Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-azure-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 241, 2, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(244, 1, 'Hire Google Cloud Consultants', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-google-cloud-consultants\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 241, 3, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(245, 1, 'Hire Oracle Cloud Infrastructure (OCI) Consultants', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-oracle-cloud-infra-consultants\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 241, 4, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(247, 1, 'Hire Smart Contract Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-smart-contact-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 246, 1, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(248, 1, 'Hire dApps Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-dapps-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 246, 2, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(249, 1, 'Hire Blockchain Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-blockchain-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 246, 3, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(250, 1, 'Hire ICO Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ico-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 246, 4, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(251, 1, 'Hire Cryptocurrency Exchange Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-cryptocurrency-exchange-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 246, 5, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(252, 1, 'Hire DeFi Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-defi-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 246, 6, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(253, 1, 'Hire NFT Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-nft-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 246, 7, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(255, 1, 'Hire Android App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-android-app-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 254, 1, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(256, 1, 'Hire iOS App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ios-app-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 254, 2, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(257, 1, 'Hire React Native Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-react-native-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 254, 3, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(258, 1, 'Hire Flutter Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-flutter-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 254, 4, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(259, 1, 'Hire Kotlin App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-kotlin-app-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 254, 5, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(261, 1, 'Hire Data Scientists', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-data-scientists\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 260, 1, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(262, 1, 'Hire Tableau Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-tableau-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 260, 2, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(264, 1, 'C# Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-c-sharp-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 1, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(265, 1, 'C++ Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-c-plus-plus-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 2, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(266, 1, 'Hire SAP Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-sap-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 3, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(267, 1, 'Hire Software Engineers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-software-engineers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 4, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(268, 1, 'Hire Solidity Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-solidity-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 5, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(269, 1, 'Hire Swift Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-swift-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 6, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(270, 1, 'Hire Unity Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-unity-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 7, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(271, 1, 'Hire Craft CMS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-craft-cms-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 8, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(272, 1, 'Hire Salesforce Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-salesforce-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 9, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(273, 1, 'Hire WordPress Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-wordPress-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 10, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(274, 1, 'Hire WooCommerce Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-wooCommerce-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 11, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(275, 1, 'Hire Symfony Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-symfony-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 12, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(276, 1, 'Hire HubSpot Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-hubSpot-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 13, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(277, 1, 'Hire Full Stack Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-full-stack-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 263, 14, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(279, 1, 'Looking for Other Technology?', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"looking-for-other-technology?\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 278, 1, 1, '2023-06-14 05:25:16', '2023-06-14 05:25:16', 1, NULL),
(280, 1, 'FRONT-END DEVELOPMENT', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"front-end-developement\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 287, 1, 1, '2023-06-14 05:25:32', '2023-06-14 05:28:05', 1, NULL),
(281, 1, 'Hire HTML5/CSS3 Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-html5-css3-developer\", \"template\": \"hire-html5-css3\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"0\"}', 280, 1, 1, '2023-06-14 05:25:32', '2023-07-20 14:56:14', 1, NULL),
(282, 1, 'Hire Angular Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-angular-developers\", \"template\": \"hire-angular\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 2, 1, '2023-06-14 05:25:32', '2023-07-21 01:45:32', 1, NULL),
(283, 1, 'Hire Angular 2.0 Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-angular-2-developers\", \"template\": \"hire-angular-2\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 3, 1, '2023-06-14 05:25:32', '2023-07-21 02:11:14', 1, NULL),
(284, 1, 'Hire Vue.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-vue-js-developers\", \"template\": \"hire-vueJs\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 4, 1, '2023-06-14 05:25:32', '2023-07-21 02:27:34', 1, NULL),
(285, 1, 'Hire Gatsby JS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-gatsby-js-develpers\", \"template\": \"hire-gatsby-js\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 5, 1, '2023-06-14 05:25:32', '2023-07-21 04:06:46', 1, NULL),
(286, 1, 'Hire Next.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-next-js-developers\", \"template\": \"hire-next-js\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 6, 1, '2023-06-14 05:25:32', '2023-07-21 04:45:58', 1, NULL),
(287, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 8, 1, 1, '2023-06-14 05:27:38', '2023-06-14 05:30:27', 1, NULL),
(288, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 p-0\"}', 8, 2, 1, '2023-06-14 05:28:37', '2023-06-14 05:30:52', 1, NULL),
(289, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pl-0\"}', 8, 3, 1, '2023-06-14 05:29:29', '2023-06-14 05:31:07', 1, NULL),
(290, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6 col-md-6 pr-0\"}', 72, 1, 1, '2023-06-14 05:31:36', '2023-06-14 05:32:23', 1, NULL),
(291, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6 col-md-6 pl-0\"}', 72, 2, 1, '2023-06-14 05:32:51', '2023-06-14 05:32:59', 1, NULL),
(292, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6  col-md-4 pr-0\"}', 107, 1, 1, '2023-06-14 05:34:34', '2023-06-14 05:34:40', 1, NULL),
(293, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6  col-md-4 pl-0\"}', 107, 2, 1, '2023-06-14 05:35:17', '2023-06-14 05:35:28', 1, NULL),
(294, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 145, 1, 1, '2023-06-14 05:37:47', '2023-06-14 05:37:57', 1, NULL),
(295, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 p-0\"}', 145, 2, 1, '2023-06-14 05:38:36', '2023-06-14 05:38:45', 1, NULL),
(296, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pl-0\"}', 145, 3, 1, '2023-06-14 05:39:43', '2023-06-14 05:40:08', 1, NULL),
(297, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6  col-md-4 pr-0\"}', 155, 1, 1, '2023-06-14 05:41:37', '2023-06-14 05:41:43', 1, NULL),
(298, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-6  col-md-4 pl-0\"}', 155, 2, 1, '2023-06-14 05:42:23', '2023-06-14 05:42:32', 1, NULL),
(299, 1, 'Segment', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"segment\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-12  col-md-12\"}', 156, 1, 1, '2023-06-14 05:43:55', '2023-06-14 05:44:01', 1, NULL),
(300, 1, 'China', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"china\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"d-none\"}', 110, 5, 1, '2023-06-14 12:00:51', '2023-06-14 12:16:09', 1, NULL),
(301, 1, 'India', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"india\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"d-none\"}', 110, 6, 1, '2023-06-14 12:01:12', '2023-06-14 12:15:58', 1, NULL),
(302, 1, 'About Us Detail', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"about-us-detail\", \"template\": \"marketing\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"d-none\"}', 110, 7, 1, '2023-06-14 12:14:50', '2023-06-14 12:15:38', 1, NULL),
(303, 1, 'Opencart', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"opencart\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 3, 1, '2023-06-14 12:57:15', '2023-06-14 12:57:50', 1, NULL),
(304, 1, 'Symfony', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"symfony\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 5, 1, '2023-06-14 12:57:57', '2023-06-14 12:58:08', 1, NULL),
(305, 1, 'Opencart', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"opencart\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 4, 1, '2023-06-14 12:57:57', '2023-06-14 12:57:57', 1, NULL),
(306, 1, 'VirtueMart', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"virtue-mart\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 6, 1, '2023-06-14 12:58:16', '2023-06-14 12:58:32', 1, NULL),
(307, 1, 'PrestaShop', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"presta-shop\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 7, 1, '2023-06-14 12:58:40', '2023-06-14 12:59:04', 1, NULL),
(308, 1, 'BigCommerce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"big-commerce\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 8, 1, '2023-06-14 12:59:11', '2023-06-14 12:59:25', 1, NULL),
(309, 1, 'NopCommerce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"nop-commerce\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 10, 1, '2023-06-14 12:59:32', '2023-06-14 13:00:18', 1, NULL),
(310, 1, 'WooCommerce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"woo-commerce\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 9, 1, '2023-06-14 12:59:32', '2023-06-14 13:00:00', 1, NULL),
(311, 1, 'Zencart', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"zencart\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 12, 1, '2023-06-14 13:00:25', '2023-06-14 13:00:40', 1, NULL),
(312, 1, 'NopCommerce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"nop-commerce\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 146, 11, 1, '2023-06-14 13:00:25', '2023-06-14 13:00:25', 1, NULL),
(313, 1, 'Zend', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"zend\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 4, 1, '2023-06-14 13:01:23', '2023-06-14 13:01:35', 1, NULL),
(314, 1, 'YII', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"yii\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 6, 1, '2023-06-14 13:01:41', '2023-06-14 13:01:56', 1, NULL),
(315, 1, 'Zend', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"zend\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 5, 1, '2023-06-14 13:01:41', '2023-06-14 13:01:41', 1, NULL),
(316, 1, 'Codeigniter', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"codeigniter\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 7, 1, '2023-06-14 13:02:10', '2023-06-14 13:02:28', 1, NULL),
(317, 1, 'iOS Games', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"ios-games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 3, 1, '2023-06-14 13:02:47', '2023-06-14 13:03:08', 1, NULL),
(318, 1, 'Android Games', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"android-games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 4, 1, '2023-06-14 13:03:11', '2023-06-14 13:03:36', 1, NULL),
(319, 1, 'Coco2dx Games', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"coco2dx-games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 5, 1, '2023-06-14 13:03:39', '2023-06-14 13:03:59', 1, NULL),
(320, 1, 'React JS Games', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"react-js-games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 7, 1, '2023-06-14 13:04:07', '2023-06-14 13:04:53', 1, NULL),
(321, 1, 'HTML5 Games', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"html5-games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 6, 1, '2023-06-14 13:04:07', '2023-06-14 13:04:27', 1, NULL),
(322, 1, 'Unreal Games', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"unreal-games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 8, 1, '2023-06-14 13:05:00', '2023-06-14 13:05:16', 1, NULL),
(323, 1, 'DNN', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"dnn\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 149, 3, 1, '2023-06-14 13:05:31', '2023-06-14 13:05:42', 1, NULL),
(324, 1, 'Xamarin', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"xamarin\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 149, 5, 1, '2023-06-14 13:05:49', '2023-06-14 13:06:18', 1, NULL),
(325, 1, 'Umbraco', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"umbraco\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 149, 4, 1, '2023-06-14 13:05:50', '2023-06-14 13:06:04', 1, NULL),
(326, 1, 'Database Developer', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"database-developer\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 149, 6, 1, '2023-06-14 13:06:28', '2023-06-14 13:06:41', 1, NULL),
(327, 1, 'Craft CMS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"craft-cms\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 151, 3, 1, '2023-06-14 13:07:09', '2023-06-14 13:07:44', 1, NULL),
(328, 1, 'Joomla', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"joomla\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 151, 4, 1, '2023-06-14 13:07:51', '2023-06-14 13:08:04', 1, NULL),
(329, 1, 'HubSpot', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hub-spot\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 151, 5, 1, '2023-06-14 13:08:11', '2023-06-14 13:08:26', 1, NULL),
(330, 1, 'SharePoint', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"share-point\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 151, 6, 1, '2023-06-14 13:08:33', '2023-06-14 13:08:48', 1, NULL),
(331, 1, 'CRM Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"crm-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 170, 4, 1, '2023-06-14 13:11:32', '2023-06-14 13:12:08', 1, NULL),
(332, 1, 'Enterprise Portal Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"enterprise-portal-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 170, 5, 1, '2023-06-14 13:12:19', '2023-06-14 13:12:37', 1, NULL),
(333, 1, 'Magento Enterprise Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"magento-enterprise-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 170, 6, 1, '2023-06-14 13:12:48', '2023-06-14 13:13:09', 1, NULL),
(334, 1, 'Search Engine Optimisation', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"search-engine-optimisation\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 172, 1, 1, '2023-06-14 13:13:26', '2023-06-14 13:14:06', 1, NULL),
(335, 1, 'Keyword Research', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"keyword-research\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 172, 3, 1, '2023-06-14 13:14:16', '2023-06-14 13:14:52', 1, NULL),
(336, 1, 'Link Building', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"link-building\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 172, 2, 1, '2023-06-14 13:14:16', '2023-06-14 13:14:32', 1, NULL),
(337, 1, 'Tailor Made Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"tailor-made-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 173, 1, 1, '2023-06-14 13:15:08', '2023-06-14 13:15:28', 1, NULL),
(338, 1, 'Mobile App Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"mobile-app-development\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 174, 1, 1, '2023-06-14 13:15:49', '2023-06-14 13:16:20', 1, NULL),
(339, 1, 'Progressive Web App Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"progressive-web-app-development\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 174, 2, 1, '2023-06-14 13:16:24', '2023-06-14 13:17:15', 1, NULL),
(340, 1, 'Enterprise Mobility Solutions', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"enterprise-mobility-solutions\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 174, 3, 1, '2023-06-14 13:17:24', '2023-06-14 13:17:43', 1, NULL),
(341, 1, 'Internet of Things', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"internet-of-things\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 174, 4, 1, '2023-06-14 13:17:54', '2023-06-14 13:18:12', 1, NULL),
(342, 1, 'Cloud Computing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"cloud-computing\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 175, 1, 1, '2023-06-14 13:18:23', '2023-06-14 13:18:59', 1, NULL),
(343, 1, 'Azure Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"azure-services\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 175, 3, 1, '2023-06-14 13:19:12', '2023-06-14 13:19:49', 1, NULL),
(344, 1, 'Amazon Web Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"amazon-web-services\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 175, 2, 1, '2023-06-14 13:19:12', '2023-06-14 13:19:30', 1, NULL),
(345, 1, 'Server Support Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"server-support-services\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 175, 4, 1, '2023-06-14 13:19:58', '2023-06-14 13:20:15', 1, NULL),
(346, 1, 'Game Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"game-development\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 176, 1, 1, '2023-06-14 13:20:31', '2023-06-14 13:20:54', 1, NULL),
(347, 1, '2D Art', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"2d-art\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 176, 2, 1, '2023-06-14 13:21:03', '2023-06-14 13:21:16', 1, NULL),
(348, 1, '3D Art', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"3d-art\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 176, 3, 1, '2023-06-14 13:21:20', '2023-06-14 13:21:34', 1, NULL),
(349, 1, 'Virtual Reality (VR)', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"virtual-reality-vr\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 176, 4, 1, '2023-06-14 13:21:44', '2023-06-14 13:22:11', 1, NULL),
(350, 1, 'Augmented Reality(AR)', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"augmented-reality-ar\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 176, 5, 1, '2023-06-14 13:22:21', '2023-06-14 13:22:44', 1, NULL),
(351, 1, 'Insta Hirin', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"InstaHirin\", \"template\": \"instahirin\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"hire_me_button\"}', NULL, 7, 1, '2023-06-25 08:07:42', '2023-06-26 05:58:08', 1, NULL),
(352, 1, 'Insta Requirement Form', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"instaRequirement\", \"template\": \"instaRequirement\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"d-none\"}', 67, 2, 1, '2023-06-28 10:40:08', '2023-06-28 10:41:11', 1, NULL),
(353, 1, 'Hire Form', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"HireForm\", \"template\": \"hireForm\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"d-none\"}', 67, 3, 1, '2023-07-17 12:03:04', '2023-07-17 12:04:31', 1, NULL),
(354, 1, 'Bizionic Team', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"bizionic-team\", \"template\": \"bizionicTeam\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"d-none\"}', 157, 13, 1, '2023-07-18 12:01:35', '2023-07-23 04:41:20', 1, NULL),
(355, 1, 'Insta Hirin View All', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hirin-view-all\", \"template\": \"instahirinViewAll\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"d-none\"}', 67, 5, 1, '2023-07-20 13:52:38', '2023-07-23 01:24:12', 1, NULL),
(357, 1, 'insta Hirin Onboard Form', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"instaHirin Onboard Form\", \"template\": \"onboard-form\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"d-none\"}', 67, 4, 1, '2023-07-23 01:24:12', '2023-07-23 01:28:19', 1, NULL);

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
(7, 'Industries', 'industries', 'industries', 'industries', 'industries', 'industries', '2023-06-03 07:45:51', '2023-06-03 07:45:51'),
(8, 'Hire Me', 'hire-me', 'Hire Me', 'Hire Me', 'Hire Me', 'hireMe', '2023-06-14 11:47:36', '2023-06-14 11:47:36'),
(9, 'China', 'marketing|marketing-services-we-provide|more|china', 'China Title', 'China Keywords', 'China Description', 'china', '2023-06-14 12:02:31', '2023-06-14 12:02:31'),
(10, 'India', 'marketing|marketing-services-we-provide|more|india', 'India title', 'India Keywords', 'India Meta Desc', 'india', '2023-06-14 12:03:02', '2023-06-14 12:03:02'),
(11, 'Marketing About Us Detail', 'marketing|marketing-services-we-provide|more|about-us-detail', 'Meta Title', 'Meta Keywords', 'Meta Description', 'aboutuUsDetail', '2023-06-14 12:17:26', '2023-06-14 12:17:26'),
(12, 'Industries-Startup', 'industries|industries-we-serve|industries|startups', 'Meta Title', 'Meta Keywords', 'Meta Description', 'startup', '2023-06-25 04:06:17', '2023-06-25 04:06:17'),
(13, 'Instant Hirin', 'InstaHirin', 'Meta Title', 'Meta Keywords', 'Meta Description', 'instahirin', '2023-06-25 08:16:44', '2023-06-25 08:38:22'),
(14, 'Insta Requirement Form', 'hire|developer|developers-other|instaRequirement', 'Meta Title', 'Meta Keywords', 'Meta Description', 'instaRequirement', '2023-06-28 10:45:26', '2023-06-28 10:45:26'),
(15, 'Real Estate', 'industries|industries-we-serve|industries|real-estate', 'Meta Title', 'Meta Keywords', 'Meta Description', 'realestate', '2023-07-04 12:13:53', '2023-07-04 12:13:53'),
(16, 'B2B Solutions', 'industries|industries-we-serve|industries|b2b-solutions', 'Meta Title', 'Meta Keywords', 'Meta Description', 'b2b', '2023-07-04 12:15:22', '2023-07-04 12:15:22'),
(17, 'B2C Solutions', 'industries|industries-we-serve|industries|b2c-solutions', 'Meta Title', 'Meta Keywords', 'Meta Description', 'b2c', '2023-07-04 12:16:10', '2023-07-04 12:16:10'),
(18, 'Health Care', 'industries|industries-we-serve|industries|healthcare', 'Meta Title', 'Meta Keywords', 'Meta Description', 'health', '2023-07-04 12:17:12', '2023-07-04 12:17:12'),
(19, 'Travel & Hospitality', 'industries|industries-we-serve|industries|travel-and-hospitality', 'Meta Title', 'Meta Keywords', 'Meta Description', 'travel', '2023-07-04 12:19:39', '2023-07-04 12:19:39'),
(20, 'Banking & Finance', 'industries|industries-we-serve|industries|banking-and-finance', 'Meta Title', 'Meta Keywords', 'Meta Description', 'bankingfinance', '2023-07-04 12:20:31', '2023-07-04 12:20:31'),
(21, 'Media & Publishing', 'industries|industries-we-serve|industries|media-and-publishing', 'Meta Title', 'Meta Keywords', 'Meta Description', 'mediapub', '2023-07-04 12:21:30', '2023-07-04 12:21:30'),
(22, 'Education and E-Learning', 'industries|industries-we-serve|industries|education-and-e-Learning', 'Meta Title', 'Meta Keywords', 'Meta Description', 'educationlearning', '2023-07-04 12:26:09', '2023-07-04 12:26:09'),
(23, 'Food & FMCG', 'industries|industries-we-serve|industries|food-and-fmcg', 'Meta Title', 'Meta Keywords', 'Meta Description', 'foodorder', '2023-07-04 12:27:18', '2023-07-04 12:27:18'),
(24, 'Automotive', 'industries|industries-we-serve|industries|automotive', 'Meta Title', 'Meta Keywords', 'Meta Description', 'automotive', '2023-07-04 12:28:13', '2023-07-04 12:28:13'),
(25, 'E-Commerce', 'industries|industries-we-serve|industries|e-commerce', 'Meta Title', 'Meta Keywords', 'Meta Description', 'eCommerce', '2023-07-04 12:29:26', '2023-07-23 04:33:21'),
(26, 'Hire Form', 'hire|developer|developers-other|HireForm', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hireForm', '2023-07-17 12:05:17', '2023-07-17 12:05:17'),
(27, 'Bizionic Team', 'industries|industries-we-serve|industries|bizionic-team', 'Meta Title', 'Meta Keywords', 'Meta Description', 'bizionicTeam', '2023-07-18 12:03:23', '2023-07-23 04:42:56'),
(28, 'Insta Hirin View All', 'hire|developer|developers-other|hirin-view-all', 'Meta Title', 'Meta Keywords', 'Meta Description', 'instahirinViewAll', '2023-07-20 13:57:31', '2023-07-20 13:57:31'),
(29, 'Hire Html5 Css3 Developer', 'hire|developer|front-end-developement|hire-html5-css3-developer', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-html5-css3', '2023-07-20 14:21:08', '2023-07-20 14:21:08'),
(30, 'Hire Angular Developers', 'hire|developer|front-end-developement|hire-angular-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-angular', '2023-07-21 01:46:19', '2023-07-21 01:46:19'),
(31, 'Hire Angular 2.0 Developers', 'hire|developer|front-end-developement|hire-angular-2-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-angular-2', '2023-07-21 02:11:53', '2023-07-21 02:11:53'),
(32, 'Hire Vue.js Developers', 'hire|developer|front-end-developement|hire-vue-js-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-vueJs', '2023-07-21 02:28:12', '2023-07-21 02:28:12'),
(33, 'Hire Gatsby JS Developers', 'hire|developer|front-end-developement|hire-gatsby-js-develpers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-gatsby-js', '2023-07-21 04:07:31', '2023-07-21 04:07:31'),
(34, 'Hire Next.js Developers', 'hire|developer|front-end-developement|hire-next-js-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-next-js', '2023-07-21 04:46:47', '2023-07-21 04:46:47'),
(35, 'Hire Node.js Developers', 'hire|developer|back-end-development|hire-node-js-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'backend-nodeJs', '2023-07-21 06:03:45', '2023-07-21 06:03:45'),
(36, 'Hire Python Developers', 'hire|developer|back-end-development|hire-python-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'backend-pythonJs', '2023-07-21 06:39:58', '2023-07-21 06:39:58'),
(37, 'Hire .Net Developers', 'hire|developer|back-end-development|hire-dot-net-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'backend-dot-net', '2023-07-21 07:04:43', '2023-07-21 07:04:43'),
(38, 'Hire Laravel Developers', 'hire|developer|back-end-development|hire-laravel-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'backend-laravel', '2023-07-21 07:22:17', '2023-07-21 07:22:17'),
(39, 'Hire Ruby on Rails Developers', 'hire|developer|back-end-development|hire-ruby-on-rails-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'backend-ruby-on-rails', '2023-07-21 07:38:10', '2023-07-21 07:38:10'),
(40, 'Hire Golang Developers', 'hire|developer|back-end-development|hire-golang-developers', 'Meta Title', 'Meta Keywords', 'Users\r\nMenus\r\nCreate Page\r\nTitle*\r\nHire Golang Developers\r\nSlug*\r\n\r\nHire Talent | DEVELOPERS | BACK-END DEVELOPMENT | Hire Golang Developers\r\nMeta Title\r\nMeta Title\r\nMeta Keywords\r\nMeta Keywords\r\nMeta Description', 'backend-golang', '2023-07-21 08:20:01', '2023-07-21 08:20:01'),
(41, 'Hire JavaScript Developers', 'hire|developer|back-end-development|hire-javaScript-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'backend-javascript', '2023-07-21 13:18:53', '2023-07-21 13:18:53'),
(42, 'Hire AWS Developers', 'hire|developer|devops-services|hire-aws-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'devops-aws-developers', '2023-07-21 13:41:41', '2023-07-21 13:41:41'),
(43, 'Hire Azure Developers', 'hire|developer|devops-services|hire-azure-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'devops-azure-developers', '2023-07-21 13:56:42', '2023-07-21 13:56:42'),
(44, 'Hire Google Cloud Consultants', 'hire|developer|devops-services|hire-google-cloud-consultants', 'Meta Title', 'Meta Keywords', 'Meta Description', 'devops-googleCloud-consultants', '2023-07-21 14:11:19', '2023-07-21 14:33:05'),
(45, 'Hire Oracle Cloud Infrastructure (OCI) Consultants', 'hire|developer|devops-services|hire-oracle-cloud-infra-consultants', 'Meta Title', 'Meta Keywords', 'Meta Description', 'devops-oracleCloud-consultants', '2023-07-21 14:35:23', '2023-07-21 14:35:23'),
(46, 'Hire Smart Contract Developers', 'hire|developer|blockchain-developers|hire-smart-contact-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'blockchain-smart-contract-developer', '2023-07-22 01:42:58', '2023-07-22 01:42:58'),
(47, 'Hire dApps Development', 'hire|developer|blockchain-developers|hire-dapps-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'blockchain-d-apps-developer', '2023-07-22 02:06:45', '2023-07-22 02:06:45'),
(48, 'Hire Blockchain Developers', 'hire|developer|blockchain-developers|hire-blockchain-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-blockchain-developer', '2023-07-22 02:24:42', '2023-07-22 02:24:42'),
(49, 'Hire ICO Development', 'hire|developer|blockchain-developers|hire-ico-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'blockchain-ico-developer', '2023-07-22 02:41:01', '2023-07-22 02:41:01'),
(50, 'Hire Cryptocurrency Exchange Developers', 'hire|developer|blockchain-developers|hire-cryptocurrency-exchange-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'blockchain-crypto-exchange-developer', '2023-07-22 02:59:21', '2023-07-22 02:59:21'),
(51, 'Hire DeFi Developers', 'hire|developer|blockchain-developers|hire-defi-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'blockchain-defi-developer', '2023-07-22 03:13:20', '2023-07-22 03:13:20'),
(52, 'Hire NFT Developers', 'hire|developer|blockchain-developers|hire-nft-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'blockchain-nft-developer', '2023-07-22 03:33:16', '2023-07-22 03:33:16'),
(53, 'Hire Android App Developers', 'hire|developer|mobile-app-developers|hire-android-app-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'mobile-android-developer', '2023-07-22 06:09:49', '2023-07-22 06:09:49'),
(54, 'Hire iOS App Developers', 'hire|developer|mobile-app-developers|hire-ios-app-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'mobile-ios-developer', '2023-07-22 06:28:15', '2023-07-22 06:28:15'),
(55, 'Hire React Native Developers', 'hire|developer|mobile-app-developers|hire-react-native-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'mobile-react-native-developer', '2023-07-22 06:43:34', '2023-07-22 06:43:34'),
(56, 'Hire Flutter Developers', 'hire|developer|mobile-app-developers|hire-flutter-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'mobile-flutter-developer', '2023-07-22 07:00:11', '2023-07-22 07:00:11'),
(57, 'Hire Kotlin App Developers', 'hire|developer|mobile-app-developers|hire-kotlin-app-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'mobile-kotlin-developer', '2023-07-22 07:17:26', '2023-07-22 07:17:26'),
(58, 'Hire Data Scientists', 'hire|developer|data-science-developers|hire-data-scientists', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-data-scientist-developer', '2023-07-22 08:03:51', '2023-07-22 08:03:51'),
(59, 'Hire Tableau Developers', 'hire|developer|data-science-developers|hire-tableau-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-tableau-developer', '2023-07-22 08:39:46', '2023-07-22 08:39:46'),
(60, 'C++ Developers', 'hire|developer|other-developers|hire-c-plus-plus-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-c-plus-plus-developer', '2023-07-22 12:43:03', '2023-07-22 12:43:03'),
(61, 'C# Developers', 'hire|developer|other-developers|hire-c-sharp-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-c-sharp-developer', '2023-07-22 12:57:55', '2023-07-22 12:57:55'),
(62, 'Hire SAP Developers', 'hire|developer|other-developers|hire-sap-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-sap-developer', '2023-07-22 13:10:55', '2023-07-22 13:10:55'),
(63, 'Hire Solidity Developers', 'hire|developer|other-developers|hire-solidity-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-solidity-developer', '2023-07-22 13:34:33', '2023-07-22 13:34:33'),
(64, 'Hire Swift Developers', 'hire|developer|other-developers|hire-swift-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-swift-developer', '2023-07-22 13:43:30', '2023-07-22 13:43:30'),
(65, 'Hire Unity Developers', 'hire|developer|other-developers|hire-unity-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-unity-developer', '2023-07-22 13:54:40', '2023-07-22 13:54:40'),
(66, 'Hire Craft CMS Developers', 'hire|developer|other-developers|hire-craft-cms-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-craft-cms-developer', '2023-07-22 14:09:12', '2023-07-22 14:09:12'),
(68, 'Hire Salesforce Developers', 'hire|developer|other-developers|hire-salesforce-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-salesforce-developer', '2023-07-22 14:21:57', '2023-07-22 14:21:57'),
(69, 'Hire WordPress Developers', 'hire|developer|other-developers|hire-wordPress-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-wordpress-developer', '2023-07-22 14:41:06', '2023-07-22 14:41:06'),
(70, 'Hire WooCommerce Developers', 'hire|developer|other-developers|hire-wooCommerce-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-wooCommerce-developer', '2023-07-22 14:52:23', '2023-07-22 14:52:23'),
(71, 'Hire Symfony Developers', 'hire|developer|other-developers|hire-symfony-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-symfony-developer', '2023-07-22 15:06:00', '2023-07-22 15:06:00'),
(72, 'Hire HubSpot Developers', 'hire|developer|other-developers|hire-hubSpot-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-hubspot-developer', '2023-07-22 15:17:46', '2023-07-22 15:17:46'),
(73, 'Hire Full Stack Developers', 'hire|developer|other-developers|hire-full-stack-developers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-full-stack-developer', '2023-07-22 15:32:19', '2023-07-22 15:32:19'),
(74, 'Hire QA Software Engineers', 'hire|developer|other-developers|hire-software-engineers', 'Meta Title', 'Meta Keywords', 'Meta Description', 'hire-qa-engineer-developer', '2023-07-23 00:42:37', '2023-07-23 00:42:37'),
(76, 'Looking for Other Technology?', 'hire|developer|developers-other|looking-for-other-technology', 'Meta Title', 'Meta Keywords', 'Meta Description', 'developer-looking-other-technology', '2023-07-23 01:04:45', '2023-07-23 04:51:21'),
(87, 'insta Hirin Onboard Form', 'hire|developer|developers-other|instaHirin Onboard Form', 'Meta Title', 'Meta Keywords', 'Meta Description', 'onboard-form', '2023-07-23 01:28:58', '2023-07-23 01:28:58');

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
(1, 'Developing smart contracts using solidity', '2023-05-27 00:35:11', '2023-06-14 23:33:20'),
(2, 'Blockchain technology', '2023-05-28 11:38:07', '2023-06-14 23:33:38'),
(3, 'Cryptocurrency', '2023-06-14 23:33:52', '2023-06-14 23:33:52'),
(4, 'Protocols (Proof-of-Work & Proof-of-Stakes)', '2023-06-14 23:34:17', '2023-06-14 23:34:17'),
(5, 'Symmetric Asymmetric', '2023-06-14 23:34:32', '2023-06-14 23:34:32'),
(6, 'SAP BIBO Universe Designer', '2023-06-14 23:43:41', '2023-06-14 23:43:41'),
(7, 'Data Analytics', '2023-06-14 23:44:02', '2023-06-14 23:44:02'),
(8, 'Agile Methodology', '2023-06-14 23:44:18', '2023-06-14 23:44:18'),
(9, 'Core Java', '2023-06-14 23:50:37', '2023-06-14 23:50:37'),
(10, 'SQL', '2023-06-14 23:50:47', '2023-06-14 23:50:47'),
(11, 'Spring Boot', '2023-06-14 23:51:00', '2023-06-14 23:51:00'),
(12, 'Web Technologies', '2023-06-14 23:51:15', '2023-06-14 23:51:15'),
(13, 'Hibernate', '2023-06-14 23:51:28', '2023-06-14 23:51:28'),
(14, 'JDBC', '2023-06-14 23:51:46', '2023-06-14 23:51:46'),
(15, 'Lambda', '2023-06-14 23:56:36', '2023-06-14 23:56:36'),
(16, 'API Gateway', '2023-06-14 23:56:51', '2023-06-14 23:56:51'),
(17, 'RDS Aurora', '2023-06-14 23:56:58', '2023-06-15 00:00:26'),
(18, 'Cloud Watch', '2023-06-14 23:57:15', '2023-06-14 23:57:15'),
(19, 'S3', '2023-06-14 23:57:23', '2023-06-14 23:57:23'),
(20, 'VPC', '2023-06-14 23:57:31', '2023-06-14 23:57:31'),
(21, 'Cognito', '2023-06-14 23:57:40', '2023-06-14 23:57:40'),
(22, 'IAM', '2023-06-14 23:57:48', '2023-06-14 23:57:48'),
(23, 'CI/CD Pipelines', '2023-06-14 23:57:56', '2023-06-15 00:00:12');

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

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `name`, `email`, `opted_out`, `created_at`, `updated_at`) VALUES
(1, 'Mumtaz Hassan', 'letwizard6@getnada.com', 0, '2023-06-11 08:52:17', '2023-06-11 08:52:17');

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
(1, 'Super User', 'admin@admin.com', '2023-05-27 00:32:37', '$2y$10$o1iqRxm6hHvXlHwFoqmNqu6NhDWqdeljgdk3V3/fW2.MRP5y98aEO', 'wRY2lGxvbtk8UNV7n4NtEdU7qRHFrM4WTz3uR2SK6sBt9ZXhvzVoYBzz8MTw', '2023-05-27 00:32:37', '2023-05-27 00:32:37');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `experties`
--
ALTER TABLE `experties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `experts`
--
ALTER TABLE `experts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT for table `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
