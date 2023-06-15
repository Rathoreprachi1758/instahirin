-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 15, 2023 at 04:57 PM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

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
(97, '9969fedb-4990-4ede-ad97-d270fdf13136', 1, 'Update', 'App\\Models\\Expert', 4, 'App\\Models\\Expert', 4, 'App\\Models\\Expert', 4, '', 'finished', '', '2023-06-15 00:01:04', '2023-06-15 00:01:04', '{\"published\":1}', '{\"published\":true}');

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
(1, 1, 'Hire', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"0\"}', NULL, 1, 1, '2023-05-27 10:43:08', '2023-05-27 11:59:42', 1, NULL),
(3, 1, 'Marketing', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"marketing\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": null}', NULL, 2, 1, '2023-05-27 10:43:39', '2023-06-14 04:35:51', 1, NULL),
(4, 1, 'Services', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"services\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": null}', NULL, 4, 1, '2023-05-27 10:44:14', '2023-06-14 04:36:10', 1, NULL),
(5, 1, 'Industries', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"industries\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": null}', NULL, 5, 1, '2023-05-27 10:44:34', '2023-06-14 04:36:30', 1, NULL),
(6, 1, 'About Us', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"about-us\", \"template\": \"home\", \"menu_columns\": null, \"is_action_item\": \"0\"}', NULL, 7, 1, '2023-05-27 10:44:42', '2023-06-14 02:49:26', 1, NULL),
(7, 1, 'Get a free Consultation', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"get-a-free-consultation\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"btn_default\"}', NULL, 8, 1, '2023-05-27 10:45:15', '2023-06-14 02:49:26', 1, NULL),
(8, 1, 'DEVELOPERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"developer\", \"template\": null, \"menu_icon\": \"hirenav_icon1.png\", \"menu_columns\": null, \"is_action_item\": \"col-lg-6 col-md-6 pr-0\"}', 1, 1, 1, '2023-05-27 10:45:38', '2023-06-14 03:49:29', 1, NULL),
(16, 1, 'BACK-END DEVELOPMENT', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"back-end-development\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 287, 2, 1, '2023-06-13 03:56:10', '2023-06-14 05:28:07', 1, NULL),
(17, 1, 'Hire Node.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-node-js-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 1, 1, '2023-06-13 03:57:07', '2023-06-13 03:57:13', 1, NULL),
(18, 1, 'Hire Python Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-python-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 2, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(19, 1, 'Hire .Net Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-dot-net-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 3, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(20, 1, 'Hire Laravel Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-laravel-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 4, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(21, 1, 'Hire Ruby on Rails Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ruby-on-rails-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 5, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(22, 1, 'Hire Golang Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-golang-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 6, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(23, 1, 'Hire JavaScript Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-javaScript-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 16, 7, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(24, 1, 'DEVOPS SERVICES', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"devops-services\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 287, 3, 1, '2023-06-13 03:56:10', '2023-06-14 05:28:11', 1, NULL),
(25, 1, 'Hire AWS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-aws-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 24, 1, 1, '2023-06-13 03:57:07', '2023-06-13 03:57:13', 1, NULL),
(26, 1, 'Hire Azure Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-azure-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 24, 2, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(27, 1, 'Hire Google Cloud Consultants', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-google-cloud-consultants\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 24, 3, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(28, 1, 'Hire Oracle Cloud Infrastructure (OCI) Consultants', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-oracle-cloud-infra-consultants\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 24, 4, 1, '2023-06-13 03:57:07', '2023-06-13 06:32:35', 1, NULL),
(29, 1, 'BLOCKCHAIN DEVELOPERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"blockchain-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 288, 1, 1, '2023-06-13 03:56:10', '2023-06-14 05:29:04', 1, NULL),
(30, 1, 'Hire Smart Contract Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-smart-contact-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 1, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(31, 1, 'Hire dApps Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-dapps-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 2, 1, '2023-06-13 03:56:10', '2023-06-13 03:56:17', 1, NULL),
(32, 1, 'Hire Blockchain Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-blockchain-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 3, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(33, 1, 'Hire ICO Development', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ico-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 4, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(34, 1, 'Hire Cryptocurrency Exchange Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-cryptocurrency-exchange-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 5, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(35, 1, 'Hire DeFi Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-defi-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 6, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(36, 1, 'Hire NFT Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-nft-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 29, 7, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(37, 1, 'HIRE MOBILE APP DEVELOPERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"mobile-app-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 288, 2, 1, '2023-06-13 03:56:10', '2023-06-14 05:29:05', 1, NULL),
(38, 1, 'Hire Android App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-android-app-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 1, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(39, 1, 'Hire iOS App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-ios-app-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 2, 1, '2023-06-13 03:56:10', '2023-06-13 03:56:17', 1, NULL),
(40, 1, 'Hire React Native Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-react-native-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 3, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(41, 1, 'Hire Flutter Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-flutter-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 4, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(42, 1, 'Hire Kotlin App Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-kotlin-app-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 37, 5, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(43, 1, 'DATA SCIENCE', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"data-science-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 288, 3, 1, '2023-06-13 03:56:10', '2023-06-14 05:29:06', 1, NULL),
(44, 1, 'Hire Data Scientists', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-data-scientists\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 43, 1, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(45, 1, 'Hire Tableau Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-tableau-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 43, 2, 1, '2023-06-13 03:56:10', '2023-06-13 03:56:17', 1, NULL),
(46, 1, 'OTHER DEVELOPERS', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"other-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 289, 1, 1, '2023-06-13 03:56:10', '2023-06-14 05:29:45', 1, NULL),
(47, 1, 'C# Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-c-sharp-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 1, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(48, 1, 'C++ Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-c-plus-plus-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 2, 1, '2023-06-13 03:56:10', '2023-06-13 03:56:17', 1, NULL),
(49, 1, 'Hire SAP Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-sap-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 3, 1, '2023-06-13 03:56:10', '2023-06-13 06:32:35', 1, NULL),
(50, 1, 'Hire Software Engineers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-software-engineers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 4, 1, '2023-06-13 06:22:16', '2023-06-13 06:32:35', 1, NULL),
(51, 1, 'Hire Solidity Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-solidity-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 5, 1, '2023-06-13 06:22:51', '2023-06-13 06:32:35', 1, NULL),
(58, 1, 'Hire Swift Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-swift-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 6, 1, '2023-06-13 06:24:34', '2023-06-13 06:32:35', 1, NULL),
(59, 1, 'Hire Unity Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-unity-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 7, 1, '2023-06-13 06:25:30', '2023-06-13 06:32:35', 1, NULL),
(60, 1, 'Hire Craft CMS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-craft-cms-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 8, 1, '2023-06-13 06:25:59', '2023-06-13 06:32:35', 1, NULL),
(61, 1, 'Hire Salesforce Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-salesforce-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 9, 1, '2023-06-13 06:26:31', '2023-06-13 06:32:35', 1, NULL),
(62, 1, 'Hire WordPress Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-wordPress-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 10, 1, '2023-06-13 06:27:26', '2023-06-13 06:32:35', 1, NULL),
(63, 1, 'Hire WooCommerce Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-wooCommerce-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 11, 1, '2023-06-13 06:28:07', '2023-06-13 06:32:35', 1, NULL),
(64, 1, 'Hire Symfony Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-symfony-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 12, 1, '2023-06-13 06:28:50', '2023-06-13 06:32:35', 1, NULL),
(65, 1, 'Hire HubSpot Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-hubSpot-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 13, 1, '2023-06-13 06:29:18', '2023-06-13 06:32:35', 1, NULL),
(66, 1, 'Hire Full Stack Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-full-stack-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 46, 14, 1, '2023-06-13 06:29:43', '2023-06-13 06:32:35', 1, NULL),
(67, 1, 'OTHER', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"developers-other\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"col-lg-4  col-md-4 pr-0\"}', 289, 2, 1, '2023-06-13 06:30:42', '2023-06-14 05:29:47', 1, NULL),
(68, 1, 'Looking for Other Technology?', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"looking-for-other-technology?\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 67, 1, 1, '2023-06-13 06:30:42', '2023-06-13 06:31:56', 1, NULL),
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
(105, 1, 'Technology', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"technology\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": null}', NULL, 3, 1, '2023-06-13 12:51:53', '2023-06-14 04:35:59', 1, NULL),
(106, 1, 'Hire Me', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-me\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"hire_me_button\"}', NULL, 6, 1, '2023-06-13 12:52:22', '2023-06-14 02:49:26', 1, NULL),
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
(166, 1, 'Education and e-Learning', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"education-and-e-Learning\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 9, 1, '2023-06-14 02:55:41', '2023-06-14 02:56:01', 1, NULL),
(167, 1, 'Food & FMCG', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"food-and-fmcg\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 10, 1, '2023-06-14 02:56:10', '2023-06-14 02:56:34', 1, NULL),
(168, 1, 'Automotive', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"automotive\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 11, 1, '2023-06-14 02:56:40', '2023-06-14 02:56:50', 1, NULL),
(169, 1, 'e-Commerce', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"e-commerce\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 157, 12, 1, '2023-06-14 02:56:57', '2023-06-14 02:57:10', 1, NULL),
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
(190, 1, 'Cake PHP', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"cake-php\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 2, 1, '2023-06-14 03:03:22', '2023-06-14 03:03:32', 1, NULL),
(191, 1, 'Laravel', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"laravel\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 147, 3, 1, '2023-06-14 03:03:38', '2023-06-14 03:03:49', 1, NULL),
(192, 1, 'Flash Games', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"flash-games\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 1, 1, '2023-06-14 03:04:01', '2023-06-14 03:04:15', 1, NULL),
(193, 1, 'Unity 3D', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"unity-3d\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 148, 2, 1, '2023-06-14 03:04:21', '2023-06-14 03:04:32', 1, NULL);
INSERT INTO `nova_menu_menu_items` (`id`, `menu_id`, `name`, `locale`, `class`, `value`, `target`, `data`, `parent_id`, `order`, `enabled`, `created_at`, `updated_at`, `nestable`, `slug`) VALUES
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
(281, 1, 'Hire HTML5/CSS3 Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-node-js-developer\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": \"1\", \"is_action_item\": \"0\"}', 280, 1, 1, '2023-06-14 05:25:32', '2023-06-14 05:25:32', 1, NULL),
(282, 1, 'Hire Angular Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-angular-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 2, 1, '2023-06-14 05:25:32', '2023-06-14 05:25:32', 1, NULL),
(283, 1, 'Hire Angular 2.0 Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-angular-2-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 3, 1, '2023-06-14 05:25:32', '2023-06-14 05:25:32', 1, NULL),
(284, 1, 'Hire Vue.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-vue-js-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 4, 1, '2023-06-14 05:25:32', '2023-06-14 05:25:32', 1, NULL),
(285, 1, 'Hire Gatsby JS Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-gatsby-js-develpers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 5, 1, '2023-06-14 05:25:32', '2023-06-14 05:25:32', 1, NULL),
(286, 1, 'Hire Next.js Developers', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"hire-next-js-developers\", \"template\": null, \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 280, 6, 1, '2023-06-14 05:25:32', '2023-06-14 05:25:32', 1, NULL),
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
(350, 1, 'Augmented Reality(AR)', 'en_US', 'App\\MenuItemTypes\\BizionicMenuItemType', NULL, '_self', '{\"slug\": \"augmented-reality-ar\", \"template\": \"home\", \"menu_icon\": null, \"menu_columns\": null, \"is_action_item\": \"0\"}', 176, 5, 1, '2023-06-14 13:22:21', '2023-06-14 13:22:44', 1, NULL);

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
(11, 'Marketing About Us Detail', 'marketing|marketing-services-we-provide|more|about-us-detail', 'Meta Title', 'Meta Keywords', 'Meta Description', 'aboutuUsDetail', '2023-06-14 12:17:26', '2023-06-14 12:17:26');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=351;

--
-- AUTO_INCREMENT for table `nova_pending_field_attachments`
--
ALTER TABLE `nova_pending_field_attachments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
