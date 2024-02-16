-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2024 at 12:17 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fathforcecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `event`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'mail_template', 'created', 'App\\Models\\Config\\MailTemplate', 1, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"cc\": null, \"id\": 1, \"bcc\": null, \"code\": \"reset-password-confirmation\", \"from\": null, \"meta\": null, \"name\": \"Reset Password Confirmation\", \"uuid\": \"1a2fad2f-d144-465c-8743-093bcbf7fc0f\", \"content\": \"<p>Hi ##NAME##,</p><p>You are receiving this email because we received a password reset request for your account.</p><p>Your password reset code is ##CODE##. This code is valid for next ##TOKEN_LIFETIME## minutes.</p><p>If you did not request a password reset, no further action is required.</p><p>Thank you!</p>\", \"subject\": \"Reset Password Confirmation\", \"reply_to\": null, \"from_name\": null, \"created_at\": \"2024-02-11T09:08:26.000000Z\", \"reply_to_name\": null}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(2, 'mail_template', 'created', 'App\\Models\\Config\\MailTemplate', 2, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"cc\": null, \"id\": 2, \"bcc\": null, \"code\": \"email-change-confirmation\", \"from\": null, \"meta\": null, \"name\": \"Email Change Confirmation\", \"uuid\": \"14eb96bf-cda0-4a4f-89ff-bbf31ea12d85\", \"content\": \"<p>Hi ##NAME##,</p><p>We have recevied email change request from you!</p><p>Your one time verification code is ##CODE##.</p><p>This code is valid for ##TOKEN_LIFETIME## minutes.</p><p>If you haven\'t requested for email change, please ignore this email.</p><p>Thank you!</p>\", \"subject\": \"Email Change Confirmation\", \"reply_to\": null, \"from_name\": null, \"created_at\": \"2024-02-11T09:08:26.000000Z\", \"reply_to_name\": null}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(3, 'mail_template', 'created', 'App\\Models\\Config\\MailTemplate', 3, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"cc\": null, \"id\": 3, \"bcc\": null, \"code\": \"reset-password-alert\", \"from\": null, \"meta\": null, \"name\": \"Reset Password Alert\", \"uuid\": \"8750f0ae-40f7-4120-8ed2-26627bc3b949\", \"content\": \"<p>Hi ##NAME##,</p><p>Your password has been reset successfully!</p><p>Click on the below link to continue login.</p>[Login Now](##URL##)<p>If you haven\'t changed your password, please contact administrator.</p><p>Thank you!</p>\", \"subject\": \"Reset Password Alert\", \"reply_to\": null, \"from_name\": null, \"created_at\": \"2024-02-11T09:08:26.000000Z\", \"reply_to_name\": null}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(4, 'mail_template', 'created', 'App\\Models\\Config\\MailTemplate', 4, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"cc\": null, \"id\": 4, \"bcc\": null, \"code\": \"send-email-otp\", \"from\": null, \"meta\": null, \"name\": \"Email OTP\", \"uuid\": \"d99d4129-8a62-4a49-92a2-996825b20eae\", \"content\": \"<p>Hi ##NAME##,</p><p>Your one time password is: ##CODE##</p><p>This code is valid for the next ##TOKEN_LIFETIME## minutes!</p><p>Do not share this code with anyone else.</p><p>Thank you!</p>\", \"subject\": \"Email OTP\", \"reply_to\": null, \"from_name\": null, \"created_at\": \"2024-02-11T09:08:26.000000Z\", \"reply_to_name\": null}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(5, 'mail_template', 'created', 'App\\Models\\Config\\MailTemplate', 5, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"cc\": null, \"id\": 5, \"bcc\": null, \"code\": \"two-factor-security\", \"from\": null, \"meta\": null, \"name\": \"Two Factor Security\", \"uuid\": \"776f7cf3-09ee-47fe-af6a-b7d4ddaa7730\", \"content\": \"<p>Hi ##NAME##,</p><p>Your one time two factor security code is: ##CODE##</p><p>This code is valid for the next ##TOKEN_LIFETIME## minutes!</p><p>Do not share this code with anyone else.</p><p>Thank you!</p>\", \"subject\": \"Two Factor Security\", \"reply_to\": null, \"from_name\": null, \"created_at\": \"2024-02-11T09:08:26.000000Z\", \"reply_to_name\": null}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(6, 'mail_template', 'created', 'App\\Models\\Config\\MailTemplate', 6, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"cc\": null, \"id\": 6, \"bcc\": null, \"code\": \"user-email-verification\", \"from\": null, \"meta\": null, \"name\": \"Email Verification\", \"uuid\": \"a1a437aa-eea2-46bb-984b-0a6da9c4c382\", \"content\": \"<p>Hi ##NAME##,</p><p>Thank you for registering an account with us.</p><p>Click on the below link to verify your account.</p>[Verify my Email](##URL##)<p>If you haven\'t registered with us, please ignore this email.</p><p>Thank you!</p>\", \"subject\": \"Email Verification\", \"reply_to\": null, \"from_name\": null, \"created_at\": \"2024-02-11T09:08:27.000000Z\", \"reply_to_name\": null}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:27', '2024-02-11 02:08:27'),
(7, 'mail_template', 'created', 'App\\Models\\Config\\MailTemplate', 7, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"cc\": null, \"id\": 7, \"bcc\": null, \"code\": \"username-change-confirmation\", \"from\": null, \"meta\": null, \"name\": \"Username Change Confirmation\", \"uuid\": \"14d84f2a-52e4-46a2-8043-57e620628e1e\", \"content\": \"<p>Hi ##NAME##,</p><p>We have recevied username change request from you!</p><p>Your one time verification code is ##CODE##</p><p>This code is valid for the next ##TOKEN_LIFETIME## minutes!</p><p>If you haven\'t requested for username change, please ignore this email.</p><p>Thank you!</p>\", \"subject\": \"Username Change Confirmation\", \"reply_to\": null, \"from_name\": null, \"created_at\": \"2024-02-11T09:08:27.000000Z\", \"reply_to_name\": null}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:27', '2024-02-11 02:08:27'),
(8, 'mail_template', 'created', 'App\\Models\\Config\\MailTemplate', 8, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"cc\": null, \"id\": 8, \"bcc\": null, \"code\": \"account-registered\", \"from\": null, \"meta\": null, \"name\": \"Account Registered\", \"uuid\": \"cc4a8c38-1560-46fd-b5cc-c025620931fc\", \"content\": \"<p>Hi ##NAME##,</p><p>Thank you for registering an account with us.</p><p>Click on the below link to login.</p>[Login Now](##URL##)<p>If you haven\'t registered with us, please ignore this email.</p><p>Thank you!</p>\", \"subject\": \"Account Registered\", \"reply_to\": null, \"from_name\": null, \"created_at\": \"2024-02-11T09:08:27.000000Z\", \"reply_to_name\": null}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:27', '2024-02-11 02:08:27'),
(9, 'user', 'created', 'User', 1, 'created', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 1, \"meta\": null, \"name\": \"farhan\", \"uuid\": \"1c8cf0d3-2de7-401a-9d56-df948519abdc\", \"email\": \"farhanmrzk@gmail.com\", \"status\": \"activated\", \"password\": \"$2y$10$b7fdYIXg15rZ/4SAkS./6OUklvQmfHW0Dk9MUoFRyk26.BQwRp1fW\", \"username\": \"parann\", \"created_at\": \"2024-02-11T09:08:27.000000Z\", \"preference\": null, \"pending_update\": null, \"remember_token\": null, \"email_verified_at\": \"2024-02-11 09:08:27\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:27', '2024-02-11 02:08:27'),
(10, 'user', 'updated', 'User', 1, 'updated', NULL, NULL, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": null}, \"attributes\": {\"meta\": {\"is_default\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:08:27', '2024-02-11 02:08:27'),
(11, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 02:11:05', '2024-02-11 02:11:05'),
(12, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 07:15:32', '2024-02-11 07:15:32'),
(13, 'config', 'created', 'Config', 1, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 1, \"meta\": null, \"name\": \"system\", \"value\": null, \"created_at\": \"2024-02-11T14:16:23.000000Z\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 07:16:23', '2024-02-11 07:16:23'),
(14, 'config', 'updated', 'Config', 1, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"value\": null}, \"attributes\": {\"value\": {\"locale\": \"en\", \"currency\": \"USD\", \"per_page\": \"10\", \"timezone\": \"Asia/Kolkata\", \"currencies\": \"USD\", \"date_format\": \"MMMM D, YYYY\", \"time_format\": \"h:mm A\", \"footer_credit\": \"Designed with ❤️ by Fathforce\", \"enable_dark_theme\": false, \"enable_mini_sidebar\": true, \"show_version_number\": true, \"enable_maintenance_mode\": false, \"maintenance_mode_message\": null}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 07:16:23', '2024-02-11 07:16:23'),
(15, 'media', 'created', 'App\\Models\\Media', 1, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 1, \"meta\": {\"hash\": \"6Xj35qPY\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/S3i1MDhryF4U9FlnE7wzCCrEHtTQdsp5Q5s5w4Vz.png\", \"uuid\": \"d98726bf-89e6-4d03-a54c-f1638458930a\", \"token\": \"c6b044cb-862b-4365-952b-5088e55998ef\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T15:59:35.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 08:59:35', '2024-02-11 08:59:35'),
(16, 'media', 'created', 'App\\Models\\Media', 2, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 2, \"meta\": {\"hash\": \"ElSnf320\", \"mime\": \"image/png\", \"size\": 346511, \"is_temp_deleted\": false}, \"name\": \"public/partnerschool/3kiMt34xla46XgsofmKJTwBmVVy1Ztx46jNQbBdz.png\", \"uuid\": \"2b782f2e-0228-468f-8022-39d3c40f5eb7\", \"token\": \"7c95bf77-d080-4b86-a1f4-df6cce08b512\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"woman@2x.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:20:37.000000Z\", \"model_type\": \"Partnerschool\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:20:37', '2024-02-11 09:20:37'),
(17, 'media', 'created', 'App\\Models\\Media', 3, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 3, \"meta\": {\"hash\": \"yk2wBwiu\", \"mime\": \"image/png\", \"size\": 120752, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/WiPrBZ3QbNdYnYQxGYSiF4TsIbCQlHsHaxXtez2p.png\", \"uuid\": \"7ddbf2f3-6d53-4b27-874c-94958e883eac\", \"token\": \"fa8d8f1c-1fce-4e53-bab6-c8caf019f797\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"vt3.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:24:18.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:24:18', '2024-02-11 09:24:18'),
(18, 'media', 'created', 'App\\Models\\Media', 4, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 4, \"meta\": {\"hash\": \"cMM4mikY\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/product/8sab3EO1nVY49nnHDnjbSTihCRSuK6dHnusBDbQQ.jpg\", \"uuid\": \"349719f7-2d7e-4347-b771-70178f3c3642\", \"token\": \"de421388-d704-4cb3-9b32-8ea50279b0a7\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:24:43.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:24:43', '2024-02-11 09:24:43'),
(19, 'media', 'created', 'App\\Models\\Media', 5, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 5, \"meta\": {\"hash\": \"K5H2YvnE\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/portfolio/m1AZeIEX7gAeh78PMmMsOfp5calGCybV0kzmIuVc.jpg\", \"uuid\": \"55f433ce-b44f-48bd-adfd-f429c3b74a0e\", \"token\": \"322ecba1-5a3a-4e69-ad6d-dc624a30d4c3\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:25:05.000000Z\", \"model_type\": \"Portfolio\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:25:05', '2024-02-11 09:25:05'),
(20, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:34:56', '2024-02-11 09:34:56'),
(21, 'media', 'created', 'App\\Models\\Media', 6, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 6, \"meta\": {\"hash\": \"yvNgDxk6\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/F0YYurC6Pe8Q1MG4iFoe3Z9AhAWuyPWifzn1MYL1.png\", \"uuid\": \"be7077ff-db6c-4ba2-bf78-608f24060ea6\", \"token\": \"b62ada4c-ebb5-43be-98ca-1fe86dd5c488\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:37:53.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:37:53', '2024-02-11 09:37:53'),
(22, 'media', 'created', 'App\\Models\\Media', 7, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 7, \"meta\": {\"hash\": \"M2ZvUvsu\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/HmBjXj5RP7F4VoMzDsOwa1WspjxyKXTUOE82cjgk.png\", \"uuid\": \"2bea849a-ad9b-40c3-84de-9b05e1b1fbb8\", \"token\": \"bbc28a5a-dc7d-4a54-972b-3ad2aa81415f\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:38:03.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:38:03', '2024-02-11 09:38:03'),
(23, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:40:37', '2024-02-11 09:40:37'),
(24, 'media', 'created', 'App\\Models\\Media', 8, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 8, \"meta\": {\"hash\": \"btRvNy2V\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/gallery/xvJno4OL2IUDCRLK0xeegKPaxjRsu42P5Rzyl503.png\", \"uuid\": \"38c074b5-d7a2-4fc1-ab83-876a4845800a\", \"token\": \"350e85d6-4e82-43e0-9bb7-ef56b70a0ac4\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:40:59.000000Z\", \"model_type\": \"Gallery\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:40:59', '2024-02-11 09:40:59'),
(25, 'media', 'created', 'App\\Models\\Media', 9, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 9, \"meta\": {\"hash\": \"8zPxzVT7\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnerschool/ujaD6Sx3HdZVYDGRe1RbMpTK7QSTywgrZi6Pm9Vy.jpg\", \"uuid\": \"eec531ba-eede-413f-9a04-1e3dc3b77d3a\", \"token\": \"be9d61f7-ca05-47d3-b60e-eac915699f3e\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:42:01.000000Z\", \"model_type\": \"Partnerschool\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:42:01', '2024-02-11 09:42:01'),
(26, 'media', 'created', 'App\\Models\\Media', 10, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 10, \"meta\": {\"hash\": \"AZZqCtRb\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/WKfRQhRdzH5foEBM6TEYcCSbHYAzPWTIPKhNWO5N.jpg\", \"uuid\": \"3cafbd0f-07b5-4917-841e-e949148fbefa\", \"token\": \"c7128038-ff5f-44b5-92f9-53296f455529\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:42:25.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:42:25', '2024-02-11 09:42:25'),
(27, 'media', 'created', 'App\\Models\\Media', 11, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 11, \"meta\": {\"hash\": \"HvojfZHT\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/KxwuKszi5SyQJGuzgxtvasdZICt2Vij3Gx71l7H5.jpg\", \"uuid\": \"4e08d17d-0262-49a9-b803-f9747e952a5c\", \"token\": \"6b2ef583-0e60-43b9-ab21-e008643459bf\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:47:46.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:47:46', '2024-02-11 09:47:46'),
(28, 'media', 'created', 'App\\Models\\Media', 12, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 12, \"meta\": {\"hash\": \"lB72bNpn\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/t1mlDI4UCxovqNYJqufwMK5OIrI9J5oQEA84La2S.jpg\", \"uuid\": \"8baafd21-0bc1-4ade-b3dc-42ec2a9dbdd5\", \"token\": \"c78b9b7c-231f-4ac6-9671-7d8e6f830ae3\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:52:17.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:52:17', '2024-02-11 09:52:17'),
(29, 'media', 'created', 'App\\Models\\Media', 13, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 13, \"meta\": {\"hash\": \"N8EK8nWu\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/ooYcuk8dOOHLJhQJRj9rtYRkBszBqOCVhIf330Cd.jpg\", \"uuid\": \"105882cd-6cdb-48a0-bf0a-b373ea9bae85\", \"token\": \"4b50156b-d5da-46f5-95d3-a3cfd3025395\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:55:32.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:55:32', '2024-02-11 09:55:32'),
(30, 'media', 'created', 'App\\Models\\Media', 14, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 14, \"meta\": {\"hash\": \"A6Ay2JWv\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnerschool/p7rxouORRStgYsu5ACeMZk8sJKQkTlOtbB4TAxfG.jpg\", \"uuid\": \"61459bf8-5bbc-4116-ad90-cfcd33cc80b5\", \"token\": \"e69076af-f125-4211-bd94-c9a73a7738a4\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:55:51.000000Z\", \"model_type\": \"Partnerschool\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:55:51', '2024-02-11 09:55:51'),
(31, 'media', 'created', 'App\\Models\\Media', 15, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 15, \"meta\": {\"hash\": \"ecd3XtaR\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/VfWZZFl6L1a7zQ2Jet8yfmv7uMqh255zli8AuqvE.jpg\", \"uuid\": \"41fc896e-4049-454c-bd22-92a8cf2843b0\", \"token\": \"30b1593a-474c-46f7-96b5-53fc873c10a0\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:56:37.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:56:37', '2024-02-11 09:56:37'),
(32, 'media', 'created', 'App\\Models\\Media', 16, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 16, \"meta\": {\"hash\": \"22LtA9YR\", \"mime\": \"image/png\", \"size\": 120752, \"is_temp_deleted\": false}, \"name\": \"public/product/ZWCbsE7xxZZ4BuPmQNTPmjH2RDY3FwTpxy9kE4YT.png\", \"uuid\": \"9f48a108-480b-4cf4-908b-0e7b341352ee\", \"token\": \"b45c96af-a024-4346-bd19-bfa72fb6275d\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"vt3.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:57:27.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 09:57:27', '2024-02-11 09:57:27'),
(33, 'media', 'created', 'App\\Models\\Media', 17, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 17, \"meta\": {\"hash\": \"8SnyQ1XT\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/1VUgtqrbDRtZW0i3syTm0NdJuxO84MicSaCDu0TR.jpg\", \"uuid\": \"8b186e37-25be-4a37-acec-7b7597fbe542\", \"token\": \"e2bc32a3-c793-4bb3-b3e5-56674f3929fa\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:01:03.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 10:01:03', '2024-02-11 10:01:03'),
(34, 'media', 'created', 'App\\Models\\Media', 18, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 18, \"meta\": {\"hash\": \"COxAOZ91\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/product/6uF5R7U426rUmLI9ddynLIXEIVYq8IcXPB04DqdW.jpg\", \"uuid\": \"d1725218-f532-43fa-a3f9-0d71480f97fa\", \"token\": \"630c442c-fe0a-4542-82c7-59d07e0d92cb\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:01:34.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 10:01:34', '2024-02-11 10:01:34'),
(35, 'media', 'created', 'App\\Models\\Media', 19, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 19, \"meta\": {\"hash\": \"eSAVn5qU\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/product/A3SBarrHvIxJ0DDv516qvOF6AibLmVIEr9KqB8Hi.jpg\", \"uuid\": \"f436bbea-6209-4bd5-8c86-b4099d48e8a7\", \"token\": \"fe004fda-6ec1-4894-9c81-fa6c9006932a\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:02:18.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 10:02:18', '2024-02-11 10:02:18'),
(36, 'media', 'created', 'App\\Models\\Media', 20, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 20, \"meta\": {\"hash\": \"tTYnUdZQ\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/product/WzSRJv9sadp9VW8Y4t3DMZ0hgnpLLKrFErRaZ0DR.jpg\", \"uuid\": \"f236bb11-2c9e-497d-97b1-279a926fc40d\", \"token\": \"1f00c244-0a42-4e23-9ae7-2804977fcd78\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:02:51.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 10:02:51', '2024-02-11 10:02:51'),
(37, 'media', 'created', 'App\\Models\\Media', 21, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 21, \"meta\": {\"hash\": \"KwomXHAN\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/portfolio/8AXWkYvEMBCT9GtPReP0obrtK2VPohdRPSFxjXO5.jpg\", \"uuid\": \"4a734fd7-d182-406a-8190-2ffd1b132e51\", \"token\": \"bec2f9e0-0dfc-4750-8b08-47bcb2f3f24b\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:03:39.000000Z\", \"model_type\": \"Portfolio\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 10:03:39', '2024-02-11 10:03:39'),
(38, 'user', 'logged_out', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 11:14:28', '2024-02-11 11:14:28'),
(39, 'media', 'created', 'App\\Models\\Media', 22, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 22, \"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 92741, \"is_temp_deleted\": false}, \"name\": \"public/product/Kyu0BCDOAf08YKs6mkOlj8aQtP0Hl2OvteWJauVA.png\", \"uuid\": \"58d5260f-4c9f-4059-8deb-92bf6a5819ed\", \"token\": \"1f00c244-0a42-4e23-9ae7-2804977fcd78\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"woman.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T18:18:26.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 11:18:26', '2024-02-11 11:18:26'),
(40, 'media', 'created', 'App\\Models\\Media', 23, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 23, \"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 346511, \"is_temp_deleted\": false}, \"name\": \"public/product/CaZgnK2FJshwrttRKkryg9HqqHrsqNI9vGGEzR1v.png\", \"uuid\": \"90bc7798-e547-4bec-9ee2-fc81ec91ea1e\", \"token\": \"1f00c244-0a42-4e23-9ae7-2804977fcd78\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"woman@2x.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T18:18:26.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 11:18:26', '2024-02-11 11:18:26'),
(41, 'media', 'created', 'App\\Models\\Media', 24, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 24, \"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 390723, \"is_temp_deleted\": false}, \"name\": \"public/product/Pboxi3z3MY5xmuQQ4Lg52vMB7LPQkpPtF5rLuAAl.png\", \"uuid\": \"be5902b7-3924-4268-b949-bbf3c5fa8654\", \"token\": \"1f00c244-0a42-4e23-9ae7-2804977fcd78\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"vt3@2x.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T18:18:26.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 11:18:26', '2024-02-11 11:18:26'),
(42, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 12:01:43', '2024-02-11 12:01:43'),
(43, 'media', 'created', 'App\\Models\\Media', 25, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 25, \"meta\": {\"hash\": \"MiRSPkrF\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/product/rmEpcBGtyMH6m2G7CBZrnmwUGgvYd3hGioSvtFjG.png\", \"uuid\": \"47bac139-8242-43fe-a3e8-78ad10da8568\", \"token\": \"1f00c244-0a42-4e23-9ae7-2804977fcd78\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T19:02:30.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 12:02:30', '2024-02-11 12:02:30'),
(44, 'user', 'logged_out', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 12:12:22', '2024-02-11 12:12:22'),
(45, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 16:27:25', '2024-02-11 16:27:25'),
(46, 'media', 'updated', 'App\\Models\\Media', 22, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 92741, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 92741, \"delete_hash\": \"B9jdF9on\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 16:31:06', '2024-02-11 16:31:06'),
(47, 'media', 'updated', 'App\\Models\\Media', 23, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 346511, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 346511, \"delete_hash\": \"B9jdF9on\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 16:31:09', '2024-02-11 16:31:09'),
(48, 'media', 'updated', 'App\\Models\\Media', 24, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 390723, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"90D0gF0U\", \"mime\": \"image/png\", \"size\": 390723, \"delete_hash\": \"B9jdF9on\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 16:31:12', '2024-02-11 16:31:12'),
(49, 'media', 'updated', 'App\\Models\\Media', 25, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"MiRSPkrF\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"MiRSPkrF\", \"mime\": \"image/png\", \"size\": 820913, \"delete_hash\": \"B9jdF9on\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 16:31:15', '2024-02-11 16:31:15'),
(50, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 21:06:55', '2024-02-11 21:06:55'),
(51, 'media', 'created', 'App\\Models\\Media', 26, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 26, \"meta\": {\"hash\": \"y1W1O2TF\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnerschool/qWqjdQcaEl5z7LQ8OxGSUJBJDrtV2RzboGOBHdUK.jpg\", \"uuid\": \"ec0ce3ad-627c-4965-8e01-de6ed1c4daf7\", \"token\": \"651b0b69-5a2d-4bf8-8a61-9e5badab6a82\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-12T04:10:59.000000Z\", \"model_type\": \"Partnerschool\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 21:10:59', '2024-02-11 21:10:59'),
(52, 'media', 'created', 'App\\Models\\Media', 27, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 27, \"meta\": {\"hash\": \"AkhXOEJA\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/portfolio/XOmfwT5ZgkmWIn2cEl62eNWR0bgjCKi7rPsbN5A9.jpg\", \"uuid\": \"60744d18-bc18-4f0a-ac72-a862013951c5\", \"token\": \"ada036dd-35c0-442a-b3ce-e0ffd9ce93db\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-12T04:24:04.000000Z\", \"model_type\": \"Portfolio\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 21:24:04', '2024-02-11 21:24:04'),
(53, 'media', 'created', 'App\\Models\\Media', 28, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 28, \"meta\": {\"hash\": \"t4HmG1zv\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/portfolio/HfT95Dcg876ItrvtFPsnyiEf3XNmhPCVnnRwb7ph.png\", \"uuid\": \"8bbb923a-1023-458f-8e2b-e577470e659a\", \"token\": \"745a7907-2960-4f06-be9e-f51eb4184922\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-12T04:24:27.000000Z\", \"model_type\": \"Portfolio\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 21:24:27', '2024-02-11 21:24:27'),
(54, 'media', 'created', 'App\\Models\\Media', 29, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 29, \"meta\": {\"hash\": \"XXfuQ2Ql\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/post/Q0e9meEWaB9RMAkBPKn64jALJGC6DkPr5t8sG6OQ.png\", \"uuid\": \"35ff06ce-1c00-476c-be4c-44e69ff8f73b\", \"token\": \"175ad13e-156a-43b1-abef-288c413d27aa\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-12T04:44:08.000000Z\", \"model_type\": \"Post\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 21:44:09', '2024-02-11 21:44:09'),
(55, 'media', 'created', 'App\\Models\\Media', 30, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 30, \"meta\": {\"hash\": \"vEqFvpsz\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/post/cs03Z9k9c7KW7OJLX9UXoSnVb1SUb47eZT4fkEFW.png\", \"uuid\": \"d018e14c-3a9e-48ff-9910-7a36cdf7c33d\", \"token\": \"150dcb19-00dd-4920-ac48-d6dc66e4f3d1\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-12T04:44:24.000000Z\", \"model_type\": \"Post\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 21:44:24', '2024-02-11 21:44:24'),
(56, 'media', 'created', 'App\\Models\\Media', 31, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 31, \"meta\": {\"hash\": \"Rj4UWurB\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/post/QRxQ9CZfZynG7eZ9fYR4TWirmcJ3x72ZO4gyPEdi.jpg\", \"uuid\": \"b255b851-a96f-4a20-94f0-ad92ddb7e84f\", \"token\": \"1d4c613f-3ae2-40f9-b902-78989d93826e\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-12T04:44:53.000000Z\", \"model_type\": \"Post\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 21:44:53', '2024-02-11 21:44:53'),
(57, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-11 23:48:26', '2024-02-11 23:48:26'),
(58, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 19:30:44', '2024-02-12 19:30:44'),
(59, 'media', 'created', 'App\\Models\\Media', 32, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 32, \"meta\": {\"hash\": \"MomaDa3V\", \"mime\": \"image/png\", \"size\": 14599, \"is_temp_deleted\": false}, \"name\": \"public/testimony/6Op3GjNKpQV0Z4NgnsbGb2Q57KBzi92YXumL3nGG.png\", \"uuid\": \"c4851532-1c5c-4f42-9e3d-f6edb9f2643f\", \"token\": \"66e812da-cb13-4df2-adc9-cb5ea85ce00c\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"blogblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T02:58:50.000000Z\", \"model_type\": \"Testimony\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 19:58:51', '2024-02-12 19:58:51'),
(60, 'media', 'deleted', 'App\\Models\\Media', 32, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 32, \"meta\": {\"hash\": \"MomaDa3V\", \"mime\": \"image/png\", \"size\": 14599, \"is_temp_deleted\": false}, \"name\": \"public/testimony/6Op3GjNKpQV0Z4NgnsbGb2Q57KBzi92YXumL3nGG.png\", \"uuid\": \"c4851532-1c5c-4f42-9e3d-f6edb9f2643f\", \"token\": \"66e812da-cb13-4df2-adc9-cb5ea85ce00c\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"blogblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T02:58:50.000000Z\", \"model_type\": \"Testimony\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 19:58:56', '2024-02-12 19:58:56'),
(61, 'media', 'created', 'App\\Models\\Media', 33, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 33, \"meta\": {\"hash\": \"MomaDa3V\", \"mime\": \"image/png\", \"size\": 6574, \"is_temp_deleted\": false}, \"name\": \"public/testimony/KsohEWEKZf73AZwNoIrlUHb16NKzq9DLPdOOIqYq.png\", \"uuid\": \"d14907fe-97e0-4868-96af-1558d9c356b0\", \"token\": \"66e812da-cb13-4df2-adc9-cb5ea85ce00c\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"guess.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T02:59:09.000000Z\", \"model_type\": \"Testimony\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 19:59:09', '2024-02-12 19:59:09'),
(62, 'media', 'created', 'App\\Models\\Media', 34, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 34, \"meta\": {\"hash\": \"mJUPYpmi\", \"mime\": \"image/png\", \"size\": 6574, \"is_temp_deleted\": false}, \"name\": \"public/testimony/bygF1F4mY2HeGKcbFHbvlvrgHH37cpP4pA0jyQIb.png\", \"uuid\": \"1ade6b8e-b82a-4c1c-8cd9-017d02a31b7d\", \"token\": \"221fbfbf-332d-414e-b386-780695878b8c\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"guess.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T03:07:26.000000Z\", \"model_type\": \"Testimony\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 20:07:26', '2024-02-12 20:07:26'),
(63, 'media', 'created', 'App\\Models\\Media', 35, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 35, \"meta\": {\"hash\": \"yty9atf1\", \"mime\": \"image/png\", \"size\": 6574, \"is_temp_deleted\": false}, \"name\": \"public/testimony/e2SSSTKYhJUU0bWnI0OizYVISQz0h7EE95MS5hHF.png\", \"uuid\": \"fbe410d3-0f86-43eb-b989-22a7fcce9746\", \"token\": \"93b0863a-b1e8-4a0e-b58a-e1a0c32955be\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"guess.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T03:08:25.000000Z\", \"model_type\": \"Testimony\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 20:08:25', '2024-02-12 20:08:25'),
(64, 'media', 'created', 'App\\Models\\Media', 36, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 36, \"meta\": {\"hash\": \"nmuX0UNa\", \"mime\": \"image/png\", \"size\": 6574, \"is_temp_deleted\": false}, \"name\": \"public/testimony/lTcubkm9VX1cfyCpAfTJCFcMIuoeKhpyLAbUC1x4.png\", \"uuid\": \"871e9ec7-5205-44cd-9cdd-b245910b7f15\", \"token\": \"2757fbd6-3422-43dc-a379-ff496efcc87c\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"guess.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T03:14:35.000000Z\", \"model_type\": \"Testimony\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 20:14:35', '2024-02-12 20:14:35'),
(65, 'media', 'created', 'App\\Models\\Media', 37, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 37, \"meta\": {\"hash\": \"cxvRN17O\", \"mime\": \"image/png\", \"size\": 14599, \"is_temp_deleted\": false}, \"name\": \"public/page/Nh0KkOCRDhWhdYVJnKULqpDJxz4uEcYwIZXeg2m3.png\", \"uuid\": \"f4b28d84-3663-40ae-98bf-7b95bc385c5e\", \"token\": \"a40d2360-851e-4131-9dee-a72cc165107f\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"blogblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T04:26:48.000000Z\", \"model_type\": \"Page\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:26:48', '2024-02-12 21:26:48'),
(66, 'media', 'created', 'App\\Models\\Media', 38, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 38, \"meta\": {\"hash\": \"lKC4DAHD\", \"mime\": \"image/png\", \"size\": 38903, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/ITsmzPbH2JoCS82rKrXMmpj4B5UnQBHkvJPFnhM7.png\", \"uuid\": \"9087f61d-62dd-4524-ab39-99fcd5eeb3e9\", \"token\": \"3401c204-edd8-4f07-95cc-1edbde453fed\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"i25.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T04:30:30.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:30:30', '2024-02-12 21:30:30'),
(67, 'media', 'updated', 'App\\Models\\Media', 1, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"6Xj35qPY\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"6Xj35qPY\", \"mime\": \"image/png\", \"size\": 820913, \"delete_hash\": \"PDrbQWus\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:33:02', '2024-02-12 21:33:02'),
(68, 'media', 'updated', 'App\\Models\\Media', 10, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"AZZqCtRb\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"AZZqCtRb\", \"mime\": \"image/jpeg\", \"size\": 355027, \"delete_hash\": \"PDrbQWus\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:33:05', '2024-02-12 21:33:05'),
(69, 'media', 'updated', 'App\\Models\\Media', 15, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"ecd3XtaR\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"ecd3XtaR\", \"mime\": \"image/jpeg\", \"size\": 355027, \"delete_hash\": \"PDrbQWus\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:33:08', '2024-02-12 21:33:08'),
(70, 'media', 'created', 'App\\Models\\Media', 39, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 39, \"meta\": {\"hash\": \"R8xgug31\", \"mime\": \"image/png\", \"size\": 37459, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/vXK2VpscCHCzxuZVnIoCGVPevnDRTyuZIDni0Skq.png\", \"uuid\": \"bbe1b59a-be23-4ed8-a5f9-00d5d511980e\", \"token\": \"339a67d8-f116-483a-b8e4-64955714719a\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"i26.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T04:33:57.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:33:57', '2024-02-12 21:33:57'),
(71, 'media', 'created', 'App\\Models\\Media', 40, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 40, \"meta\": {\"hash\": \"XwlJqgYj\", \"mime\": \"image/png\", \"size\": 25583, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/zSXnTm9rE06DiRFrCAPToRu3srW0sSJqY5yk1iIi.png\", \"uuid\": \"46e63870-61cb-4a44-aa62-7fca4b2088a4\", \"token\": \"7163af85-f6ed-4b4b-9407-698c8d0f81f0\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"i23.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T04:34:43.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:34:43', '2024-02-12 21:34:43');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `subject_id`, `event`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(72, 'media', 'created', 'App\\Models\\Media', 41, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 41, \"meta\": {\"hash\": \"wG986Znu\", \"mime\": \"image/png\", \"size\": 23667, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/Zx1sFkqVyYvZnjOWugu5a6dlIoL7zcEJC7iinsic.png\", \"uuid\": \"cb47fa5a-bb8c-485e-85d3-270aea25a95a\", \"token\": \"f40d4ab6-565c-4928-bb55-9b1c9243ef5f\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"i20.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T04:35:28.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:35:28', '2024-02-12 21:35:28'),
(73, 'media', 'created', 'App\\Models\\Media', 42, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 42, \"meta\": {\"hash\": \"5qennRxF\", \"mime\": \"image/png\", \"size\": 37188, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/veX2fWCj53VOokEsXgQOLGhMHMbKQUV4pAoZyHoT.png\", \"uuid\": \"e5f8e9ef-7bf5-4a02-9d39-a0c096506455\", \"token\": \"b842bd4c-7b45-425d-ba22-0ecbc32c778b\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"i22.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T04:36:31.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:36:31', '2024-02-12 21:36:31'),
(74, 'media', 'created', 'App\\Models\\Media', 43, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 43, \"meta\": {\"hash\": \"z6qaVSg9\", \"mime\": \"image/png\", \"size\": 24490, \"is_temp_deleted\": false}, \"name\": \"public/servicelist/lhOctUiXd5hEWZVgKQQo4eMaSpl48kQayq0v8IgX.png\", \"uuid\": \"6e9bb8e7-6e91-48fa-853a-97037765673d\", \"token\": \"b7318d10-f149-48e1-bc6f-e5f8b5d76a43\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"i21.png\", \"collection\": \"default\", \"created_at\": \"2024-02-13T04:37:27.000000Z\", \"model_type\": \"Servicelist\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-12 21:37:27', '2024-02-12 21:37:27'),
(75, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-13 19:43:02', '2024-02-13 19:43:02'),
(76, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-13 21:49:43', '2024-02-13 21:49:43'),
(77, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:07:26', '2024-02-15 15:07:26'),
(78, 'media', 'deleted', 'App\\Models\\Media', 19, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 19, \"meta\": {\"hash\": \"eSAVn5qU\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/product/A3SBarrHvIxJ0DDv516qvOF6AibLmVIEr9KqB8Hi.jpg\", \"uuid\": \"f436bbea-6209-4bd5-8c86-b4099d48e8a7\", \"token\": \"fe004fda-6ec1-4894-9c81-fa6c9006932a\", \"status\": 1, \"user_id\": 1, \"model_id\": 2, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:02:18.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:41:36', '2024-02-15 15:41:36'),
(79, 'media', 'deleted', 'App\\Models\\Media', 20, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 20, \"meta\": {\"hash\": \"tTYnUdZQ\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/product/WzSRJv9sadp9VW8Y4t3DMZ0hgnpLLKrFErRaZ0DR.jpg\", \"uuid\": \"f236bb11-2c9e-497d-97b1-279a926fc40d\", \"token\": \"1f00c244-0a42-4e23-9ae7-2804977fcd78\", \"status\": 1, \"user_id\": 1, \"model_id\": 3, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:02:51.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:41:40', '2024-02-15 15:41:40'),
(80, 'media', 'deleted', 'App\\Models\\Media', 4, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 4, \"meta\": {\"hash\": \"cMM4mikY\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/product/8sab3EO1nVY49nnHDnjbSTihCRSuK6dHnusBDbQQ.jpg\", \"uuid\": \"349719f7-2d7e-4347-b771-70178f3c3642\", \"token\": \"de421388-d704-4cb3-9b32-8ea50279b0a7\", \"status\": 1, \"user_id\": 1, \"model_id\": 1, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:24:43.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:41:45', '2024-02-15 15:41:45'),
(81, 'media', 'deleted', 'App\\Models\\Media', 18, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 18, \"meta\": {\"hash\": \"COxAOZ91\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/product/6uF5R7U426rUmLI9ddynLIXEIVYq8IcXPB04DqdW.jpg\", \"uuid\": \"d1725218-f532-43fa-a3f9-0d71480f97fa\", \"token\": \"630c442c-fe0a-4542-82c7-59d07e0d92cb\", \"status\": 1, \"user_id\": 1, \"model_id\": 1, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:01:34.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:41:45', '2024-02-15 15:41:45'),
(82, 'media', 'created', 'App\\Models\\Media', 44, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 44, \"meta\": {\"hash\": \"SO0cVcT8\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}, \"name\": \"public/product/PUiT3PlTotXhOgDcLKppeMHxEqnsi6j3K3Kk7MS0.png\", \"uuid\": \"13dae8a9-f06e-400b-809d-759197597302\", \"token\": \"e8b102b3-dfcf-4c59-9340-6f939f50ac18\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"productblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-15T22:47:29.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:47:29', '2024-02-15 15:47:29'),
(83, 'media', 'created', 'App\\Models\\Media', 45, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 45, \"meta\": {\"hash\": \"lUdzMFzA\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}, \"name\": \"public/product/qAKjsL75DAhqK7HWbUMnWagBW235SwVtcOuTtX8n.png\", \"uuid\": \"2e48199f-1e19-4c78-aeb0-d392ce44a253\", \"token\": \"6758b6d0-c266-4a25-9cdc-bbd092a0888c\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"productblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-15T22:50:12.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:50:12', '2024-02-15 15:50:12'),
(84, 'media', 'created', 'App\\Models\\Media', 46, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 46, \"meta\": {\"hash\": \"EFywuczt\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}, \"name\": \"public/product/2cgCZfD7kqgibwkqqyBcxFSMeXJECdgt7033ESmK.png\", \"uuid\": \"3d9caeb6-a1df-432a-97e1-2a0679b95ff8\", \"token\": \"35b86715-e536-4143-974f-72e946d8b0aa\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"productblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-15T22:51:32.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:51:32', '2024-02-15 15:51:32'),
(85, 'media', 'created', 'App\\Models\\Media', 47, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 47, \"meta\": {\"hash\": \"SyfIxw9w\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}, \"name\": \"public/product/zyv71g2H2HOseGTbBZz88UAaK7qfIHEMRfIY9dux.png\", \"uuid\": \"ed4878ed-5a8a-408d-bf63-087cf5e04725\", \"token\": \"769854ed-4986-4814-850c-5c72ad87142b\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"productblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-15T22:52:42.000000Z\", \"model_type\": \"Product\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:52:42', '2024-02-15 15:52:42'),
(86, 'media', 'created', 'App\\Models\\Media', 48, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 48, \"meta\": {\"hash\": \"945fqjxW\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}, \"name\": \"public/portfolio/plr3kyoJgW9uxqpLGvr84mZ5BswtqjN4RpLkjmnZ.png\", \"uuid\": \"5824a834-bf65-4fb1-89c7-9dadfbd13e1d\", \"token\": \"f74f945c-a05d-45eb-95a8-aeed34028c05\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"productblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-15T22:56:31.000000Z\", \"model_type\": \"Portfolio\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 15:56:31', '2024-02-15 15:56:31'),
(87, 'media', 'created', 'App\\Models\\Media', 49, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 49, \"meta\": {\"hash\": \"BtySH9hU\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}, \"name\": \"public/portfolio/sUVK6YFaoueIlzmDfWIX07HNmmz12HkohH3xpL0m.png\", \"uuid\": \"cabe607c-e7f8-4cbd-980c-3d5eead436f6\", \"token\": \"1b36a788-fe27-4351-b287-178bd2acc33c\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"productblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-15T23:04:38.000000Z\", \"model_type\": \"Portfolio\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 16:04:38', '2024-02-15 16:04:38'),
(88, 'media', 'created', 'App\\Models\\Media', 50, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 50, \"meta\": {\"hash\": \"a9V71n4Z\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}, \"name\": \"public/portfolio/N6ejbxz2EmUHVtjtPUPBUEYRuZzf9cpPI8mGYM6W.png\", \"uuid\": \"19286105-35ff-4831-a048-343193cb798f\", \"token\": \"281fd23a-36b0-4a8d-b4fe-fa5894bbe1de\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"productblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-15T23:59:20.000000Z\", \"model_type\": \"Portfolio\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 16:59:20', '2024-02-15 16:59:20'),
(89, 'user', 'logged_in', NULL, NULL, NULL, 'User', 1, '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:09:32', '2024-02-15 17:09:32'),
(90, 'media', 'created', 'App\\Models\\Media', 51, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 51, \"meta\": {\"hash\": \"0CBl5mZU\", \"mime\": \"image/png\", \"size\": 1832, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/g2rFafpLaKgzI5523qoB2hOP4ozfBkHd1NoY3RT7.png\", \"uuid\": \"b64ab0cd-22e2-47c1-8cbf-3e896de63ba3\", \"token\": \"fd74b7f5-a012-4ba8-b806-22fc53816ff1\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"logo.png\", \"collection\": \"default\", \"created_at\": \"2024-02-16T00:10:22.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:10:22', '2024-02-15 17:10:22'),
(91, 'media', 'created', 'App\\Models\\Media', 52, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 52, \"meta\": {\"hash\": \"6o6zLDzI\", \"mime\": \"image/png\", \"size\": 1832, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/IvUq9j9HFVVCdC6XFq2IhkX2CDm62o9X0x5o120d.png\", \"uuid\": \"b4d46ed1-a316-4d20-92db-3180fe30959b\", \"token\": \"3365d3f4-decc-4db0-9ab0-0bce7e3f96a2\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"logo.png\", \"collection\": \"default\", \"created_at\": \"2024-02-16T00:10:45.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:10:45', '2024-02-15 17:10:45'),
(92, 'media', 'created', 'App\\Models\\Media', 53, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 53, \"meta\": {\"hash\": \"TAAH7UEa\", \"mime\": \"image/png\", \"size\": 1832, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/aFQlx6BMniH44ybK2xglXVqINpzww1MvndFmPErL.png\", \"uuid\": \"6d676ef3-79e3-46d1-9504-d6b7cb85f409\", \"token\": \"2583ac11-be80-4d76-909e-4b4d75ca9d14\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"logo.png\", \"collection\": \"default\", \"created_at\": \"2024-02-16T00:10:57.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:10:57', '2024-02-15 17:10:57'),
(93, 'media', 'deleted', 'App\\Models\\Media', 3, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 3, \"meta\": {\"hash\": \"yk2wBwiu\", \"mime\": \"image/png\", \"size\": 120752, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/WiPrBZ3QbNdYnYQxGYSiF4TsIbCQlHsHaxXtez2p.png\", \"uuid\": \"7ddbf2f3-6d53-4b27-874c-94958e883eac\", \"token\": \"fa8d8f1c-1fce-4e53-bab6-c8caf019f797\", \"status\": 1, \"user_id\": 1, \"model_id\": 1, \"file_name\": \"vt3.png\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:24:18.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:11:08', '2024-02-15 17:11:08'),
(94, 'media', 'deleted', 'App\\Models\\Media', 13, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 13, \"meta\": {\"hash\": \"N8EK8nWu\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/ooYcuk8dOOHLJhQJRj9rtYRkBszBqOCVhIf330Cd.jpg\", \"uuid\": \"105882cd-6cdb-48a0-bf0a-b373ea9bae85\", \"token\": \"4b50156b-d5da-46f5-95d3-a3cfd3025395\", \"status\": 1, \"user_id\": 1, \"model_id\": 1, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T16:55:32.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:11:08', '2024-02-15 17:11:08'),
(95, 'media', 'deleted', 'App\\Models\\Media', 17, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 17, \"meta\": {\"hash\": \"8SnyQ1XT\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/1VUgtqrbDRtZW0i3syTm0NdJuxO84MicSaCDu0TR.jpg\", \"uuid\": \"8b186e37-25be-4a37-acec-7b7597fbe542\", \"token\": \"e2bc32a3-c793-4bb3-b3e5-56674f3929fa\", \"status\": 1, \"user_id\": 1, \"model_id\": 1, \"file_name\": \"yubangkit.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-11T17:01:03.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:11:08', '2024-02-15 17:11:08'),
(96, 'media', 'created', 'App\\Models\\Media', 54, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 54, \"meta\": {\"hash\": \"TKbvrNJL\", \"mime\": \"image/jpeg\", \"size\": 148790, \"is_temp_deleted\": false}, \"name\": \"public/gallery/gSOpslVuQ3h2WNHpzG1M4UjLf0W7MJTldsLiRHdd.jpg\", \"uuid\": \"3449ddd3-21e1-4631-989e-40e6f4931f88\", \"token\": \"21f411a9-fa44-4c50-ab36-94143676e0f6\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"tm1.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-16T00:17:02.000000Z\", \"model_type\": \"Gallery\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:17:02', '2024-02-15 17:17:02'),
(97, 'media', 'created', 'App\\Models\\Media', 55, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 55, \"meta\": {\"hash\": \"dUvTTtmh\", \"mime\": \"image/jpeg\", \"size\": 223387, \"is_temp_deleted\": false}, \"name\": \"public/gallery/lNOBekzacMt6RwSeQMvAp9AtfqltqyZ4VqBxWolh.jpg\", \"uuid\": \"f0d62235-dfba-4491-8361-fe9c87def08f\", \"token\": \"c2953e2d-eef4-49b1-9834-f2eb51311eba\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"fathforce3d.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-16T00:17:43.000000Z\", \"model_type\": \"Gallery\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:17:43', '2024-02-15 17:17:43'),
(98, 'media', 'created', 'App\\Models\\Media', 56, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 56, \"meta\": {\"hash\": \"J84Izdfz\", \"mime\": \"image/jpeg\", \"size\": 282000, \"is_temp_deleted\": false}, \"name\": \"public/gallery/kXbdKicJyfWiqL97ZBhdLarWhG6FyS2GV3zx4zIL.jpg\", \"uuid\": \"1a48222c-b0e9-4e22-b11f-d8f8120c42bc\", \"token\": \"f67e4022-6e5f-4fa0-97f0-6895427a25a9\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"senamdanjumsi.jpg\", \"collection\": \"default\", \"created_at\": \"2024-02-16T00:18:30.000000Z\", \"model_type\": \"Gallery\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:18:30', '2024-02-15 17:18:30'),
(99, 'media', 'deleted', 'App\\Models\\Media', 30, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 30, \"meta\": {\"hash\": \"vEqFvpsz\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/post/cs03Z9k9c7KW7OJLX9UXoSnVb1SUb47eZT4fkEFW.png\", \"uuid\": \"d018e14c-3a9e-48ff-9910-7a36cdf7c33d\", \"token\": \"150dcb19-00dd-4920-ac48-d6dc66e4f3d1\", \"status\": 1, \"user_id\": 1, \"model_id\": 2, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-12T04:44:24.000000Z\", \"model_type\": \"Post\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:26:16', '2024-02-15 17:26:16'),
(100, 'media', 'deleted', 'App\\Models\\Media', 29, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 29, \"meta\": {\"hash\": \"XXfuQ2Ql\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}, \"name\": \"public/post/Q0e9meEWaB9RMAkBPKn64jALJGC6DkPr5t8sG6OQ.png\", \"uuid\": \"35ff06ce-1c00-476c-be4c-44e69ff8f73b\", \"token\": \"175ad13e-156a-43b1-abef-288c413d27aa\", \"status\": 1, \"user_id\": 1, \"model_id\": 1, \"file_name\": \"xaba.png\", \"collection\": \"default\", \"created_at\": \"2024-02-12T04:44:08.000000Z\", \"model_type\": \"Post\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:26:23', '2024-02-15 17:26:23'),
(101, 'media', 'updated', 'App\\Models\\Media', 31, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"Rj4UWurB\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"Rj4UWurB\", \"mime\": \"image/jpeg\", \"size\": 355027, \"delete_hash\": \"zOTaKlNe\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:26:55', '2024-02-15 17:26:55'),
(102, 'media', 'created', 'App\\Models\\Media', 57, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 57, \"meta\": {\"hash\": \"zOTaKlNe\", \"mime\": \"image/png\", \"size\": 14599, \"is_temp_deleted\": false}, \"name\": \"public/post/vLoijKDGFsUQOzom4oPHkg0MZPg3ZFUNFXDQljZU.png\", \"uuid\": \"252049d3-537f-4d84-a8ce-05fe67669055\", \"token\": \"1d4c613f-3ae2-40f9-b902-78989d93826e\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"blogblank.png\", \"collection\": \"default\", \"created_at\": \"2024-02-16T00:27:01.000000Z\", \"model_type\": \"Post\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 17:27:02', '2024-02-15 17:27:02'),
(103, 'media', 'created', 'App\\Models\\Media', 58, 'created', 'User', 1, '{\"ip\": \"127.0.0.1\", \"attributes\": {\"id\": 58, \"meta\": {\"hash\": \"xHLC12Xc\", \"mime\": \"image/png\", \"size\": 4914, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/Nq301k9HHxXqcTnux1hlBkZ9QSskiqzeWn6I9RfF.png\", \"uuid\": \"8690e1ed-dbae-4c3d-8822-610274293295\", \"token\": \"3365d3f4-decc-4db0-9ab0-0bce7e3f96a2\", \"status\": 0, \"user_id\": 1, \"model_id\": null, \"file_name\": \"download.png\", \"collection\": \"default\", \"created_at\": \"2024-02-16T01:21:36.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 18:21:36', '2024-02-15 18:21:36'),
(104, 'media', 'updated', 'App\\Models\\Media', 52, 'updated', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"meta\": {\"hash\": \"6o6zLDzI\", \"mime\": \"image/png\", \"size\": 1832, \"is_temp_deleted\": false}}, \"attributes\": {\"meta\": {\"hash\": \"6o6zLDzI\", \"mime\": \"image/png\", \"size\": 1832, \"delete_hash\": \"xHLC12Xc\", \"is_temp_deleted\": true}}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 18:21:44', '2024-02-15 18:21:44'),
(105, 'media', 'deleted', 'App\\Models\\Media', 53, 'deleted', 'User', 1, '{\"ip\": \"127.0.0.1\", \"old\": {\"id\": 53, \"meta\": {\"hash\": \"TAAH7UEa\", \"mime\": \"image/png\", \"size\": 1832, \"is_temp_deleted\": false}, \"name\": \"public/partnercompany/aFQlx6BMniH44ybK2xglXVqINpzww1MvndFmPErL.png\", \"uuid\": \"6d676ef3-79e3-46d1-9504-d6b7cb85f409\", \"token\": \"2583ac11-be80-4d76-909e-4b4d75ca9d14\", \"status\": 1, \"user_id\": 1, \"model_id\": 4, \"file_name\": \"logo.png\", \"collection\": \"default\", \"created_at\": \"2024-02-16T00:10:57.000000Z\", \"model_type\": \"Partnercompany\"}, \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', NULL, '2024-02-15 18:23:41', '2024-02-15 18:23:41');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_id` bigint UNSIGNED DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `configs`
--

CREATE TABLE `configs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` json DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `configs`
--

INSERT INTO `configs` (`id`, `name`, `value`, `meta`, `created_at`, `updated_at`) VALUES
(1, 'system', '{\"locale\": \"en\", \"currency\": \"USD\", \"per_page\": \"10\", \"timezone\": \"Asia/Kolkata\", \"currencies\": \"USD\", \"date_format\": \"MMMM D, YYYY\", \"time_format\": \"h:mm A\", \"footer_credit\": \"Designed with ❤️ by Fathforce\", \"enable_dark_theme\": false, \"enable_mini_sidebar\": true, \"show_version_number\": true, \"enable_maintenance_mode\": false, \"maintenance_mode_message\": null}', NULL, '2024-02-11 07:16:23', '2024-02-11 07:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_login_attempts`
--

CREATE TABLE `failed_login_attempts` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `failed_login_attempts`
--

INSERT INTO `failed_login_attempts` (`id`, `uuid`, `email`, `password`, `meta`, `created_at`, `updated_at`) VALUES
(1, 'ba7ff505-16c1-46c1-95ae-14ab06dec7a9', 'farhanmrzk@gmail.com', '$2y$10$c0QTDZYA5NSzxRmdHA0RoekPuU.CL0PZfEMBMX/cxR.87wX.OSVl6', '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', '2024-02-13 19:42:57', '2024-02-13 19:42:57'),
(2, '277ef184-6872-4783-b55f-d1b611072441', 'farhanmrzk@gmail.com', '$2y$10$92DdvroDaNwfbtHV6lrmw.Iz05e9SZPstZKDUctjkMY9IRDM00mKm', '{\"ip\": \"127.0.0.1\", \"user_agent\": \"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/121.0.0.0 Safari/537.36\"}', '2024-02-15 15:07:18', '2024-02-15 15:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `uuid`, `slug`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'be8fb3d7-ce3a-4b64-8dc3-ce2dc6b34148', 'what-services-does-fathforce-offer-in-web-development?', 'What services does Fathforce offer in web development?', 'Fathforce specializes in a wide array of web development services, including but not limited to custom website design, front-end and back-end development, e-commerce solutions, content management systems (CMS), and web application development. Our experienced team is dedicated to creating tailored solutions that align with your unique business goals.', '2024-02-13 21:50:18', '2024-02-13 21:50:18'),
(2, '5ad2935d-db74-4396-8ad2-9510098f9879', 'can-fathforce-assist-with-website-maintenance-and-updates?', 'Can Fathforce assist with website maintenance and updates?', 'Absolutely! Fathforce offers comprehensive website maintenance services to ensure your site remains current, secure, and fully functional. From routine updates to addressing issues promptly, our dedicated support team is committed to keeping your web presence optimized and running smoothly.', '2024-02-13 21:51:16', '2024-02-13 21:51:16'),
(3, '1e6970eb-8ae7-4375-8971-8dfb0073705f', 'what-sets-fathforce-apart-from-other-web-development-companies?', 'What sets Fathforce apart from other web development companies?', 'Fathforce stands out through its commitment to innovation, customer-centric approach, and a highly skilled team of developers and designers. We prioritize client collaboration, delivering tailored solutions that not only meet but exceed expectations. Our dedication to quality, creativity, and cutting-edge technology sets Fathforce apart as your trusted web development partner.', '2024-02-13 21:51:53', '2024-02-13 21:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `gallerys`
--

CREATE TABLE `gallerys` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_category_id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallerys`
--

INSERT INTO `gallerys` (`id`, `uuid`, `gallery_category_id`, `name`, `slug`, `meta`, `created_at`, `updated_at`) VALUES
(1, 'f87f840f-5109-40ad-a216-29bad80a5f24', 1, 'fathforce', 'fathforce', '{\"media_token\": \"21f411a9-fa44-4c50-ab36-94143676e0f6\"}', '2024-02-15 17:17:04', '2024-02-15 17:17:04'),
(2, '2a0965f1-3435-4ff0-87dd-4a0a4be24366', 1, 'fathforce 3d', 'fathforce-3d', '{\"media_token\": \"c2953e2d-eef4-49b1-9834-f2eb51311eba\"}', '2024-02-15 17:17:58', '2024-02-15 17:17:58'),
(3, 'dde2c3fa-3f68-4ca8-86d5-e707aa78e0e9', 2, 'Morning exercise', 'morning-exercise', '{\"media_token\": \"f67e4022-6e5f-4fa0-97f0-6895427a25a9\"}', '2024-02-15 17:18:17', '2024-02-15 17:19:02');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_categories`
--

CREATE TABLE `gallery_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallery_categories`
--

INSERT INTO `gallery_categories` (`id`, `uuid`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, '7a296ed7-bfb4-4e5b-8aa5-e6a0bc6235af', 'Work', 'work', '2024-02-15 17:15:57', '2024-02-15 17:15:57'),
(2, 'd382c4d9-33e2-4cc0-b9ec-ef56625e895f', 'Activity', 'activity', '2024-02-15 17:16:11', '2024-02-15 17:16:11'),
(3, 'a1963f0a-db94-4b59-ab22-4143f418aeae', 'Meeting', 'meeting', '2024-02-15 17:16:20', '2024-02-15 17:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_templates`
--

CREATE TABLE `mail_templates` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `from` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply_to` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply_to_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bcc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_templates`
--

INSERT INTO `mail_templates` (`id`, `uuid`, `name`, `code`, `subject`, `content`, `from`, `from_name`, `reply_to`, `reply_to_name`, `cc`, `bcc`, `meta`, `created_at`, `updated_at`) VALUES
(1, '1a2fad2f-d144-465c-8743-093bcbf7fc0f', 'Reset Password Confirmation', 'reset-password-confirmation', 'Reset Password Confirmation', '<p>Hi ##NAME##,</p><p>You are receiving this email because we received a password reset request for your account.</p><p>Your password reset code is ##CODE##. This code is valid for next ##TOKEN_LIFETIME## minutes.</p><p>If you did not request a password reset, no further action is required.</p><p>Thank you!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(2, '14eb96bf-cda0-4a4f-89ff-bbf31ea12d85', 'Email Change Confirmation', 'email-change-confirmation', 'Email Change Confirmation', '<p>Hi ##NAME##,</p><p>We have recevied email change request from you!</p><p>Your one time verification code is ##CODE##.</p><p>This code is valid for ##TOKEN_LIFETIME## minutes.</p><p>If you haven\'t requested for email change, please ignore this email.</p><p>Thank you!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(3, '8750f0ae-40f7-4120-8ed2-26627bc3b949', 'Reset Password Alert', 'reset-password-alert', 'Reset Password Alert', '<p>Hi ##NAME##,</p><p>Your password has been reset successfully!</p><p>Click on the below link to continue login.</p>[Login Now](##URL##)<p>If you haven\'t changed your password, please contact administrator.</p><p>Thank you!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(4, 'd99d4129-8a62-4a49-92a2-996825b20eae', 'Email OTP', 'send-email-otp', 'Email OTP', '<p>Hi ##NAME##,</p><p>Your one time password is: ##CODE##</p><p>This code is valid for the next ##TOKEN_LIFETIME## minutes!</p><p>Do not share this code with anyone else.</p><p>Thank you!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(5, '776f7cf3-09ee-47fe-af6a-b7d4ddaa7730', 'Two Factor Security', 'two-factor-security', 'Two Factor Security', '<p>Hi ##NAME##,</p><p>Your one time two factor security code is: ##CODE##</p><p>This code is valid for the next ##TOKEN_LIFETIME## minutes!</p><p>Do not share this code with anyone else.</p><p>Thank you!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(6, 'a1a437aa-eea2-46bb-984b-0a6da9c4c382', 'Email Verification', 'user-email-verification', 'Email Verification', '<p>Hi ##NAME##,</p><p>Thank you for registering an account with us.</p><p>Click on the below link to verify your account.</p>[Verify my Email](##URL##)<p>If you haven\'t registered with us, please ignore this email.</p><p>Thank you!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 02:08:27', '2024-02-11 02:08:27'),
(7, '14d84f2a-52e4-46a2-8043-57e620628e1e', 'Username Change Confirmation', 'username-change-confirmation', 'Username Change Confirmation', '<p>Hi ##NAME##,</p><p>We have recevied username change request from you!</p><p>Your one time verification code is ##CODE##</p><p>This code is valid for the next ##TOKEN_LIFETIME## minutes!</p><p>If you haven\'t requested for username change, please ignore this email.</p><p>Thank you!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 02:08:27', '2024-02-11 02:08:27'),
(8, 'cc4a8c38-1560-46fd-b5cc-c025620931fc', 'Account Registered', 'account-registered', 'Account Registered', '<p>Hi ##NAME##,</p><p>Thank you for registering an account with us.</p><p>Click on the below link to login.</p>[Login Now](##URL##)<p>If you haven\'t registered with us, please ignore this email.</p><p>Thank you!</p>', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-11 02:08:27', '2024-02-11 02:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `medias`
--

CREATE TABLE `medias` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_id` bigint UNSIGNED DEFAULT NULL,
  `collection` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medias`
--

INSERT INTO `medias` (`id`, `uuid`, `token`, `model_type`, `model_id`, `collection`, `name`, `file_name`, `status`, `user_id`, `meta`, `created_at`, `updated_at`) VALUES
(1, 'd98726bf-89e6-4d03-a54c-f1638458930a', 'c6b044cb-862b-4365-952b-5088e55998ef', 'Servicelist', 1, 'default', 'public/servicelist/S3i1MDhryF4U9FlnE7wzCCrEHtTQdsp5Q5s5w4Vz.png', 'xaba.png', 1, 1, '{\"hash\": \"6Xj35qPY\", \"mime\": \"image/png\", \"size\": 820913, \"delete_hash\": \"PDrbQWus\", \"is_temp_deleted\": true}', '2024-02-11 08:59:35', '2024-02-12 21:33:02'),
(2, '2b782f2e-0228-468f-8022-39d3c40f5eb7', '7c95bf77-d080-4b86-a1f4-df6cce08b512', 'Partnerschool', NULL, 'default', 'public/partnerschool/3kiMt34xla46XgsofmKJTwBmVVy1Ztx46jNQbBdz.png', 'woman@2x.png', 0, 1, '{\"hash\": \"ElSnf320\", \"mime\": \"image/png\", \"size\": 346511, \"is_temp_deleted\": false}', '2024-02-11 09:20:37', '2024-02-11 09:20:37'),
(5, '55f433ce-b44f-48bd-adfd-f429c3b74a0e', '322ecba1-5a3a-4e69-ad6d-dc624a30d4c3', 'Portfolio', 1, 'default', 'public/portfolio/m1AZeIEX7gAeh78PMmMsOfp5calGCybV0kzmIuVc.jpg', 'yubangkit.jpg', 1, 1, '{\"hash\": \"K5H2YvnE\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}', '2024-02-11 09:25:05', '2024-02-11 09:25:05'),
(6, 'be7077ff-db6c-4ba2-bf78-608f24060ea6', 'b62ada4c-ebb5-43be-98ca-1fe86dd5c488', 'Partnercompany', NULL, 'default', 'public/partnercompany/F0YYurC6Pe8Q1MG4iFoe3Z9AhAWuyPWifzn1MYL1.png', 'xaba.png', 0, 1, '{\"hash\": \"yvNgDxk6\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}', '2024-02-11 09:37:53', '2024-02-11 09:37:53'),
(7, '2bea849a-ad9b-40c3-84de-9b05e1b1fbb8', 'bbc28a5a-dc7d-4a54-972b-3ad2aa81415f', 'Partnercompany', NULL, 'default', 'public/partnercompany/HmBjXj5RP7F4VoMzDsOwa1WspjxyKXTUOE82cjgk.png', 'xaba.png', 0, 1, '{\"hash\": \"M2ZvUvsu\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}', '2024-02-11 09:38:03', '2024-02-11 09:38:03'),
(8, '38c074b5-d7a2-4fc1-ab83-876a4845800a', '350e85d6-4e82-43e0-9bb7-ef56b70a0ac4', 'Gallery', NULL, 'default', 'public/gallery/xvJno4OL2IUDCRLK0xeegKPaxjRsu42P5Rzyl503.png', 'xaba.png', 0, 1, '{\"hash\": \"btRvNy2V\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}', '2024-02-11 09:40:59', '2024-02-11 09:40:59'),
(9, 'eec531ba-eede-413f-9a04-1e3dc3b77d3a', 'be9d61f7-ca05-47d3-b60e-eac915699f3e', 'Partnerschool', NULL, 'default', 'public/partnerschool/ujaD6Sx3HdZVYDGRe1RbMpTK7QSTywgrZi6Pm9Vy.jpg', 'yubangkit.jpg', 0, 1, '{\"hash\": \"8zPxzVT7\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}', '2024-02-11 09:42:01', '2024-02-11 09:42:01'),
(10, '3cafbd0f-07b5-4917-841e-e949148fbefa', 'c7128038-ff5f-44b5-92f9-53296f455529', 'Servicelist', 1, 'default', 'public/servicelist/WKfRQhRdzH5foEBM6TEYcCSbHYAzPWTIPKhNWO5N.jpg', 'yubangkit.jpg', 1, 1, '{\"hash\": \"AZZqCtRb\", \"mime\": \"image/jpeg\", \"size\": 355027, \"delete_hash\": \"PDrbQWus\", \"is_temp_deleted\": true}', '2024-02-11 09:42:25', '2024-02-12 21:33:05'),
(11, '4e08d17d-0262-49a9-b803-f9747e952a5c', '6b2ef583-0e60-43b9-ab21-e008643459bf', 'Partnercompany', NULL, 'default', 'public/partnercompany/KxwuKszi5SyQJGuzgxtvasdZICt2Vij3Gx71l7H5.jpg', 'yubangkit.jpg', 0, 1, '{\"hash\": \"HvojfZHT\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}', '2024-02-11 09:47:46', '2024-02-11 09:47:46'),
(12, '8baafd21-0bc1-4ade-b3dc-42ec2a9dbdd5', 'c78b9b7c-231f-4ac6-9671-7d8e6f830ae3', 'Partnercompany', NULL, 'default', 'public/partnercompany/t1mlDI4UCxovqNYJqufwMK5OIrI9J5oQEA84La2S.jpg', 'yubangkit.jpg', 0, 1, '{\"hash\": \"lB72bNpn\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}', '2024-02-11 09:52:17', '2024-02-11 09:52:17'),
(14, '61459bf8-5bbc-4116-ad90-cfcd33cc80b5', 'e69076af-f125-4211-bd94-c9a73a7738a4', 'Partnerschool', 1, 'default', 'public/partnerschool/p7rxouORRStgYsu5ACeMZk8sJKQkTlOtbB4TAxfG.jpg', 'yubangkit.jpg', 1, 1, '{\"hash\": \"A6Ay2JWv\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}', '2024-02-11 09:55:51', '2024-02-11 09:55:53'),
(15, '41fc896e-4049-454c-bd22-92a8cf2843b0', '30b1593a-474c-46f7-96b5-53fc873c10a0', 'Servicelist', 1, 'default', 'public/servicelist/VfWZZFl6L1a7zQ2Jet8yfmv7uMqh255zli8AuqvE.jpg', 'yubangkit.jpg', 1, 1, '{\"hash\": \"ecd3XtaR\", \"mime\": \"image/jpeg\", \"size\": 355027, \"delete_hash\": \"PDrbQWus\", \"is_temp_deleted\": true}', '2024-02-11 09:56:37', '2024-02-12 21:33:08'),
(16, '9f48a108-480b-4cf4-908b-0e7b341352ee', 'b45c96af-a024-4346-bd19-bfa72fb6275d', 'Product', NULL, 'default', 'public/product/ZWCbsE7xxZZ4BuPmQNTPmjH2RDY3FwTpxy9kE4YT.png', 'vt3.png', 0, 1, '{\"hash\": \"22LtA9YR\", \"mime\": \"image/png\", \"size\": 120752, \"is_temp_deleted\": false}', '2024-02-11 09:57:27', '2024-02-11 09:57:27'),
(21, '4a734fd7-d182-406a-8190-2ffd1b132e51', 'bec2f9e0-0dfc-4750-8b08-47bcb2f3f24b', 'Portfolio', 1, 'default', 'public/portfolio/8AXWkYvEMBCT9GtPReP0obrtK2VPohdRPSFxjXO5.jpg', 'yubangkit.jpg', 1, 1, '{\"hash\": \"KwomXHAN\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}', '2024-02-11 10:03:39', '2024-02-11 10:03:41'),
(26, 'ec0ce3ad-627c-4965-8e01-de6ed1c4daf7', '651b0b69-5a2d-4bf8-8a61-9e5badab6a82', 'Partnerschool', 1, 'default', 'public/partnerschool/qWqjdQcaEl5z7LQ8OxGSUJBJDrtV2RzboGOBHdUK.jpg', 'yubangkit.jpg', 1, 1, '{\"hash\": \"y1W1O2TF\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}', '2024-02-11 21:10:59', '2024-02-11 21:11:00'),
(27, '60744d18-bc18-4f0a-ac72-a862013951c5', 'ada036dd-35c0-442a-b3ce-e0ffd9ce93db', 'Portfolio', 2, 'default', 'public/portfolio/XOmfwT5ZgkmWIn2cEl62eNWR0bgjCKi7rPsbN5A9.jpg', 'yubangkit.jpg', 1, 1, '{\"hash\": \"AkhXOEJA\", \"mime\": \"image/jpeg\", \"size\": 355027, \"is_temp_deleted\": false}', '2024-02-11 21:24:04', '2024-02-11 21:24:05'),
(28, '8bbb923a-1023-458f-8e2b-e577470e659a', '745a7907-2960-4f06-be9e-f51eb4184922', 'Portfolio', 3, 'default', 'public/portfolio/HfT95Dcg876ItrvtFPsnyiEf3XNmhPCVnnRwb7ph.png', 'xaba.png', 1, 1, '{\"hash\": \"t4HmG1zv\", \"mime\": \"image/png\", \"size\": 820913, \"is_temp_deleted\": false}', '2024-02-11 21:24:27', '2024-02-11 21:24:28'),
(33, 'd14907fe-97e0-4868-96af-1558d9c356b0', '66e812da-cb13-4df2-adc9-cb5ea85ce00c', 'Testimony', 1, 'default', 'public/testimony/KsohEWEKZf73AZwNoIrlUHb16NKzq9DLPdOOIqYq.png', 'guess.png', 1, 1, '{\"hash\": \"MomaDa3V\", \"mime\": \"image/png\", \"size\": 6574, \"is_temp_deleted\": false}', '2024-02-12 19:59:09', '2024-02-12 19:59:11'),
(34, '1ade6b8e-b82a-4c1c-8cd9-017d02a31b7d', '221fbfbf-332d-414e-b386-780695878b8c', 'Testimony', 2, 'default', 'public/testimony/bygF1F4mY2HeGKcbFHbvlvrgHH37cpP4pA0jyQIb.png', 'guess.png', 1, 1, '{\"hash\": \"mJUPYpmi\", \"mime\": \"image/png\", \"size\": 6574, \"is_temp_deleted\": false}', '2024-02-12 20:07:26', '2024-02-12 20:07:28'),
(35, 'fbe410d3-0f86-43eb-b989-22a7fcce9746', '93b0863a-b1e8-4a0e-b58a-e1a0c32955be', 'Testimony', 3, 'default', 'public/testimony/e2SSSTKYhJUU0bWnI0OizYVISQz0h7EE95MS5hHF.png', 'guess.png', 1, 1, '{\"hash\": \"yty9atf1\", \"mime\": \"image/png\", \"size\": 6574, \"is_temp_deleted\": false}', '2024-02-12 20:08:25', '2024-02-12 20:08:26'),
(36, '871e9ec7-5205-44cd-9cdd-b245910b7f15', '2757fbd6-3422-43dc-a379-ff496efcc87c', 'Testimony', 4, 'default', 'public/testimony/lTcubkm9VX1cfyCpAfTJCFcMIuoeKhpyLAbUC1x4.png', 'guess.png', 1, 1, '{\"hash\": \"nmuX0UNa\", \"mime\": \"image/png\", \"size\": 6574, \"is_temp_deleted\": false}', '2024-02-12 20:14:35', '2024-02-12 20:14:37'),
(37, 'f4b28d84-3663-40ae-98bf-7b95bc385c5e', 'a40d2360-851e-4131-9dee-a72cc165107f', 'Page', 1, 'default', 'public/page/Nh0KkOCRDhWhdYVJnKULqpDJxz4uEcYwIZXeg2m3.png', 'blogblank.png', 1, 1, '{\"hash\": \"cxvRN17O\", \"mime\": \"image/png\", \"size\": 14599, \"is_temp_deleted\": false}', '2024-02-12 21:26:48', '2024-02-12 21:26:50'),
(38, '9087f61d-62dd-4524-ab39-99fcd5eeb3e9', '3401c204-edd8-4f07-95cc-1edbde453fed', 'Servicelist', 1, 'default', 'public/servicelist/ITsmzPbH2JoCS82rKrXMmpj4B5UnQBHkvJPFnhM7.png', 'i25.png', 1, 1, '{\"hash\": \"lKC4DAHD\", \"mime\": \"image/png\", \"size\": 38903, \"is_temp_deleted\": false}', '2024-02-12 21:30:30', '2024-02-12 21:30:31'),
(39, 'bbe1b59a-be23-4ed8-a5f9-00d5d511980e', '339a67d8-f116-483a-b8e4-64955714719a', 'Servicelist', 2, 'default', 'public/servicelist/vXK2VpscCHCzxuZVnIoCGVPevnDRTyuZIDni0Skq.png', 'i26.png', 1, 1, '{\"hash\": \"R8xgug31\", \"mime\": \"image/png\", \"size\": 37459, \"is_temp_deleted\": false}', '2024-02-12 21:33:57', '2024-02-12 21:33:59'),
(40, '46e63870-61cb-4a44-aa62-7fca4b2088a4', '7163af85-f6ed-4b4b-9407-698c8d0f81f0', 'Servicelist', 3, 'default', 'public/servicelist/zSXnTm9rE06DiRFrCAPToRu3srW0sSJqY5yk1iIi.png', 'i23.png', 1, 1, '{\"hash\": \"XwlJqgYj\", \"mime\": \"image/png\", \"size\": 25583, \"is_temp_deleted\": false}', '2024-02-12 21:34:43', '2024-02-12 21:34:45'),
(41, 'cb47fa5a-bb8c-485e-85d3-270aea25a95a', 'f40d4ab6-565c-4928-bb55-9b1c9243ef5f', 'Servicelist', 4, 'default', 'public/servicelist/Zx1sFkqVyYvZnjOWugu5a6dlIoL7zcEJC7iinsic.png', 'i20.png', 1, 1, '{\"hash\": \"wG986Znu\", \"mime\": \"image/png\", \"size\": 23667, \"is_temp_deleted\": false}', '2024-02-12 21:35:28', '2024-02-12 21:35:30'),
(42, 'e5f8e9ef-7bf5-4a02-9d39-a0c096506455', 'b842bd4c-7b45-425d-ba22-0ecbc32c778b', 'Servicelist', 5, 'default', 'public/servicelist/veX2fWCj53VOokEsXgQOLGhMHMbKQUV4pAoZyHoT.png', 'i22.png', 1, 1, '{\"hash\": \"5qennRxF\", \"mime\": \"image/png\", \"size\": 37188, \"is_temp_deleted\": false}', '2024-02-12 21:36:31', '2024-02-12 21:36:33'),
(43, '6e9bb8e7-6e91-48fa-853a-97037765673d', 'b7318d10-f149-48e1-bc6f-e5f8b5d76a43', 'Servicelist', 6, 'default', 'public/servicelist/lhOctUiXd5hEWZVgKQQo4eMaSpl48kQayq0v8IgX.png', 'i21.png', 1, 1, '{\"hash\": \"z6qaVSg9\", \"mime\": \"image/png\", \"size\": 24490, \"is_temp_deleted\": false}', '2024-02-12 21:37:27', '2024-02-12 21:38:39'),
(44, '13dae8a9-f06e-400b-809d-759197597302', 'e8b102b3-dfcf-4c59-9340-6f939f50ac18', 'Product', 4, 'default', 'public/product/PUiT3PlTotXhOgDcLKppeMHxEqnsi6j3K3Kk7MS0.png', 'productblank.png', 1, 1, '{\"hash\": \"SO0cVcT8\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}', '2024-02-15 15:47:29', '2024-02-15 15:47:32'),
(45, '2e48199f-1e19-4c78-aeb0-d392ce44a253', '6758b6d0-c266-4a25-9cdc-bbd092a0888c', 'Product', 5, 'default', 'public/product/qAKjsL75DAhqK7HWbUMnWagBW235SwVtcOuTtX8n.png', 'productblank.png', 1, 1, '{\"hash\": \"lUdzMFzA\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}', '2024-02-15 15:50:12', '2024-02-15 15:50:14'),
(46, '3d9caeb6-a1df-432a-97e1-2a0679b95ff8', '35b86715-e536-4143-974f-72e946d8b0aa', 'Product', 6, 'default', 'public/product/2cgCZfD7kqgibwkqqyBcxFSMeXJECdgt7033ESmK.png', 'productblank.png', 1, 1, '{\"hash\": \"EFywuczt\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}', '2024-02-15 15:51:32', '2024-02-15 15:51:33'),
(47, 'ed4878ed-5a8a-408d-bf63-087cf5e04725', '769854ed-4986-4814-850c-5c72ad87142b', 'Product', 7, 'default', 'public/product/zyv71g2H2HOseGTbBZz88UAaK7qfIHEMRfIY9dux.png', 'productblank.png', 1, 1, '{\"hash\": \"SyfIxw9w\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}', '2024-02-15 15:52:42', '2024-02-15 15:52:44'),
(48, '5824a834-bf65-4fb1-89c7-9dadfbd13e1d', 'f74f945c-a05d-45eb-95a8-aeed34028c05', 'Portfolio', NULL, 'default', 'public/portfolio/plr3kyoJgW9uxqpLGvr84mZ5BswtqjN4RpLkjmnZ.png', 'productblank.png', 0, 1, '{\"hash\": \"945fqjxW\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}', '2024-02-15 15:56:31', '2024-02-15 15:56:31'),
(49, 'cabe607c-e7f8-4cbd-980c-3d5eead436f6', '1b36a788-fe27-4351-b287-178bd2acc33c', 'Portfolio', 4, 'default', 'public/portfolio/sUVK6YFaoueIlzmDfWIX07HNmmz12HkohH3xpL0m.png', 'productblank.png', 1, 1, '{\"hash\": \"BtySH9hU\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}', '2024-02-15 16:04:38', '2024-02-15 16:04:39'),
(50, '19286105-35ff-4831-a048-343193cb798f', '281fd23a-36b0-4a8d-b4fe-fa5894bbe1de', 'Portfolio', 5, 'default', 'public/portfolio/N6ejbxz2EmUHVtjtPUPBUEYRuZzf9cpPI8mGYM6W.png', 'productblank.png', 1, 1, '{\"hash\": \"a9V71n4Z\", \"mime\": \"image/png\", \"size\": 314912, \"is_temp_deleted\": false}', '2024-02-15 16:59:20', '2024-02-15 16:59:21'),
(51, 'b64ab0cd-22e2-47c1-8cbf-3e896de63ba3', 'fd74b7f5-a012-4ba8-b806-22fc53816ff1', 'Partnercompany', 2, 'default', 'public/partnercompany/g2rFafpLaKgzI5523qoB2hOP4ozfBkHd1NoY3RT7.png', 'logo.png', 1, 1, '{\"hash\": \"0CBl5mZU\", \"mime\": \"image/png\", \"size\": 1832, \"is_temp_deleted\": false}', '2024-02-15 17:10:22', '2024-02-15 17:10:24'),
(54, '3449ddd3-21e1-4631-989e-40e6f4931f88', '21f411a9-fa44-4c50-ab36-94143676e0f6', 'Gallery', 1, 'default', 'public/gallery/gSOpslVuQ3h2WNHpzG1M4UjLf0W7MJTldsLiRHdd.jpg', 'tm1.jpg', 1, 1, '{\"hash\": \"TKbvrNJL\", \"mime\": \"image/jpeg\", \"size\": 148790, \"is_temp_deleted\": false}', '2024-02-15 17:17:02', '2024-02-15 17:17:04'),
(55, 'f0d62235-dfba-4491-8361-fe9c87def08f', 'c2953e2d-eef4-49b1-9834-f2eb51311eba', 'Gallery', 2, 'default', 'public/gallery/lNOBekzacMt6RwSeQMvAp9AtfqltqyZ4VqBxWolh.jpg', 'fathforce3d.jpg', 1, 1, '{\"hash\": \"dUvTTtmh\", \"mime\": \"image/jpeg\", \"size\": 223387, \"is_temp_deleted\": false}', '2024-02-15 17:17:43', '2024-02-15 17:17:58'),
(56, '1a48222c-b0e9-4e22-b11f-d8f8120c42bc', 'f67e4022-6e5f-4fa0-97f0-6895427a25a9', 'Gallery', 3, 'default', 'public/gallery/kXbdKicJyfWiqL97ZBhdLarWhG6FyS2GV3zx4zIL.jpg', 'senamdanjumsi.jpg', 1, 1, '{\"hash\": \"J84Izdfz\", \"mime\": \"image/jpeg\", \"size\": 282000, \"is_temp_deleted\": false}', '2024-02-15 17:18:30', '2024-02-15 17:18:50'),
(57, '252049d3-537f-4d84-a8ce-05fe67669055', '1d4c613f-3ae2-40f9-b902-78989d93826e', 'Post', 3, 'default', 'public/post/vLoijKDGFsUQOzom4oPHkg0MZPg3ZFUNFXDQljZU.png', 'blogblank.png', 1, 1, '{\"hash\": \"zOTaKlNe\", \"mime\": \"image/png\", \"size\": 14599, \"is_temp_deleted\": false}', '2024-02-15 17:27:01', '2024-02-15 17:27:03'),
(58, '8690e1ed-dbae-4c3d-8822-610274293295', '3365d3f4-decc-4db0-9ab0-0bce7e3f96a2', 'Partnercompany', 3, 'default', 'public/partnercompany/Nq301k9HHxXqcTnux1hlBkZ9QSskiqzeWn6I9RfF.png', 'download.png', 1, 1, '{\"hash\": \"xHLC12Xc\", \"mime\": \"image/png\", \"size\": 4914, \"is_temp_deleted\": false}', '2024-02-15 18:21:36', '2024-02-15 18:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_08_08_100000_create_telescope_entries_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_04_02_133851_create_activity_log_table', 1),
(7, '2021_04_02_134344_create_permission_tables', 1),
(8, '2021_04_02_135516_create_jobs_table', 1),
(9, '2021_04_03_133553_create_tags_table', 1),
(10, '2021_04_03_133628_create_taggables_table', 1),
(11, '2021_04_03_133705_create_comments_table', 1),
(12, '2021_04_04_100237_create_configs_table', 1),
(13, '2021_04_07_133811_create_medias_table', 1),
(14, '2021_10_03_133737_create_options_table', 1),
(15, '2021_10_03_133823_create_todos_table', 1),
(16, '2022_10_15_095734_create_mail_templates_table', 1),
(17, '2022_11_27_110101_create_projects_table', 1),
(29, '2024_02_11_064602_create_pages_table', 1),
(30, '2024_02_11_064615_create_page_categories_table', 1),
(31, '2024_02_11_064640_create_superioritys_table', 1),
(35, '2024_02_11_153444_create_faqs_table', 2),
(36, '2024_02_11_153509_create_service_lists_table', 2),
(37, '2024_02_11_153528_create_terms_table', 2),
(93, '2022_12_28_025905_create_failed_login_attempts_table', 3),
(94, '2024_01_11_021518_create_product_categories_table', 3),
(95, '2024_01_11_033743_create_products_table', 3),
(96, '2024_01_13_060336_create_post_categories_table', 3),
(97, '2024_01_13_060345_create_posts_table', 3),
(98, '2024_01_31_042248_create_portfolios_table', 3),
(99, '2024_01_31_042806_create_portfolio_categories_table', 3),
(100, '2024_02_02_121210_create_partner_companys_table', 3),
(101, '2024_02_05_093122_create_partner_schools_table', 3),
(102, '2024_02_05_121645_create_gallerys_table', 3),
(103, '2024_02_05_121748_create_gallery_categories_table', 3),
(104, '2024_02_07_032607_create_pages_table', 3),
(105, '2024_02_07_100228_create_page_categories_table', 3),
(112, '2024_02_08_125159_create_faqs_table', 4),
(113, '2024_02_08_135403_create_service_lists_table', 4),
(114, '2024_02_09_100357_create_superioritys_table', 4),
(115, '2024_02_10_032311_create_terms_table', 4),
(116, '2024_02_13_023902_create_testimonys_table', 5),
(117, '2024_02_14_025711_create_superioritys_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_category_id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `uuid`, `page_category_id`, `name`, `slug`, `description`, `meta`, `created_at`, `updated_at`) VALUES
(1, '7132bd98-21e9-4539-8c48-ae98454d59ed', 1, 'as', 'as', 'as', '{\"media_token\": \"a40d2360-851e-4131-9dee-a72cc165107f\"}', '2024-02-12 21:26:50', '2024-02-12 21:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`id`, `uuid`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'd80c56e7-aa49-47b5-bcd6-fa12d1683f37', 'as', 'as', '2024-02-12 21:26:23', '2024-02-12 21:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `partner_companys`
--

CREATE TABLE `partner_companys` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_companys`
--

INSERT INTO `partner_companys` (`id`, `uuid`, `slug`, `name`, `description`, `meta`, `created_at`, `updated_at`) VALUES
(2, '2848d161-c258-4e0d-b0c5-9dce2bc46d14', 'google', 'google', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non semper suscipit posuere a pede.\n\nDonec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.\n\nMorbi in sem quis dui placerat ornare. Pellentesque odio nisi euismod in pharetra a ultricies in diam. Sed arcu. Cras consequat.', '{\"media_token\": \"fd74b7f5-a012-4ba8-b806-22fc53816ff1\"}', '2024-02-15 17:10:24', '2024-02-15 18:24:18'),
(3, 'f93d164c-d2e0-4390-981a-696555c3ed45', 'fathforce', 'fathforce', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh viverra non semper suscipit posuere a pede.\n\nDonec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.\n\nMorbi in sem quis dui placerat ornare. Pellentesque odio nisi euismod in pharetra a ultricies in diam. Sed arcu. Cras consequat.', '{\"media_token\": \"3365d3f4-decc-4db0-9ab0-0bce7e3f96a2\"}', '2024-02-15 17:10:46', '2024-02-15 18:24:47');

-- --------------------------------------------------------

--
-- Table structure for table `partner_schools`
--

CREATE TABLE `partner_schools` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_schools`
--

INSERT INTO `partner_schools` (`id`, `uuid`, `slug`, `name`, `description`, `meta`, `created_at`, `updated_at`) VALUES
(1, '7aa01f10-aebf-4be9-8a75-987e11c7e984', 'asd', 'asd', 'asd', '{\"media_token\": \"651b0b69-5a2d-4bf8-8a61-9e5badab6a82\"}', '2024-02-11 21:11:00', '2024-02-11 21:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `uuid`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, '47a8fff5-ee68-4ad7-a319-00096af17f57', 'login:action', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(2, 'bb9e9268-84c0-4a5e-af64-f663f41e886b', 'config:store', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(3, '41c68052-398d-4a2c-9ed2-bce28dea8ecc', 'locale:read', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(4, '4133bc39-3349-4630-9c56-69223109f4ca', 'locale:create', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(5, '2fe978ac-e409-4d4a-832f-0c53e7066762', 'locale:edit', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(6, 'e3f35b0e-ce21-4318-a31c-865665887297', 'locale:delete', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(7, 'aafd386e-06b8-49f8-bfd4-73888388b34d', 'backup:manage', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(8, 'b747dd42-83f6-413d-8a1e-2cb6f551f89e', 'activity-log:manage', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(9, '2bc5080a-cb9b-41b8-939d-96b46cb0dd07', 'activity-log:export', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(10, 'de99447d-8fa5-40fd-8fff-6b661b5cada1', 'utility:config', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(11, '8cd2ee59-8d5b-416d-9e13-80cab917b038', 'todo:manage', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(12, 'ddfcfeaa-acf0-4855-a3c3-6c0865974730', 'todo:export', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(13, 'b32b919e-be2f-4aa1-a789-6e4d2bed46a4', 'user:read', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(14, 'cfc14527-a776-43d8-9071-00bf9af397d3', 'user:create', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(15, '9e2c89e0-9aa8-40e1-8fe0-452037962343', 'user:edit', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(16, 'b15c12e6-bfc9-4049-884d-f4e7d9031fe0', 'user:delete', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(17, '23ba9c70-c2f9-450d-8352-5e27cc852e78', 'user:export', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(18, '5b242de6-efa3-4a62-88d6-21e2303fadfc', 'project:read', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(19, 'b0ec4812-991c-47bf-9022-2f1a2c17e074', 'project:create', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(20, 'cad5732d-d4c4-416a-8009-5336785c843c', 'project:edit', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(21, '63a7a01e-4b87-482b-840f-5d67b9aeb2db', 'project:delete', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(22, 'ad03040b-efc8-478c-a43a-538e56bb15c0', 'project:export', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(23, 'a39603c7-7496-423f-9122-f03a8ccc3264', 'product:read', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(24, 'a9f4b31b-c425-4d6f-90bd-28f565075307', 'product:create', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(25, '97912004-9375-42db-a6de-1c4f1a184b58', 'product:edit', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(26, '3840ec77-d286-418b-9014-8ffee14a85cf', 'product:delete', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(27, 'deaeb152-5417-45bb-ac0c-746e8ace1f64', 'product:export', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(28, '534e6358-6738-4a27-9e79-4c1c3a237574', 'productcategory:read', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(29, '0844e27f-9fe3-4f31-8f10-3a0b33f6728b', 'productcategory:create', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(30, '7ec98e91-66c0-4a8e-9380-669f5b86b853', 'productcategory:edit', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(31, '0e161d1c-7616-4e40-b3fd-091023577a79', 'productcategory:delete', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(32, 'c62793f8-2702-430e-9b68-6ec6dfcb1a53', 'productcategory:export', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(33, 'f1ae7d43-d412-421b-b3b3-876179c32dd6', 'post:read', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(34, '6c18d7b6-f7b2-4de7-8559-657b67960996', 'post:create', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(35, 'dd4e5acc-c55d-4c2d-9db0-58142e727bd1', 'post:edit', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(36, '430eafec-eb20-446b-9803-fda6104b5373', 'post:delete', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(37, 'bb865f4e-4a19-462a-b1e7-5abb58e1a2f3', 'post:export', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(38, 'b166386d-5de1-4c90-8fb5-f7011694dd9b', 'postcategory:read', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(39, '09715b0e-5b50-4296-98b6-5af069554ba5', 'postcategory:create', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(40, '5553c7a2-1f52-4e18-841a-ea2f71125465', 'postcategory:edit', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(41, '58ccc536-8775-4954-a9a1-eeae1b59e0fa', 'postcategory:delete', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(42, '0769e431-fb65-4d37-91cc-162bf950f8af', 'postcategory:export', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
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
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_category_id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `uuid`, `portfolio_category_id`, `name`, `slug`, `description`, `meta`, `created_at`, `updated_at`) VALUES
(2, '1a8bfb29-d87f-42cd-ba4c-b64c0c6bf5f3', 1, 'Apzah', 'apzah', 'asdasd', '{\"media_token\": \"ada036dd-35c0-442a-b3ce-e0ffd9ce93db\"}', '2024-02-11 21:24:05', '2024-02-11 21:24:05'),
(3, '931916e5-b34c-4dd1-ad77-4298fca75a55', 2, 'FathERP', 'fatherp', 'asda', '{\"media_token\": \"745a7907-2960-4f06-be9e-f51eb4184922\"}', '2024-02-11 21:24:28', '2024-02-11 21:24:28'),
(4, 'ea75f8a3-f072-4653-876a-572d11097c48', 6, 'LSP GPPB', 'lsp-gppb', 'asd', '{\"media_token\": \"1b36a788-fe27-4351-b287-178bd2acc33c\"}', '2024-02-15 16:04:39', '2024-02-15 16:04:39'),
(5, '07bba9e5-10f4-4239-9c25-1923aee6c716', 6, 'FathSchool', 'fathschool', 'ad', '{\"media_token\": \"281fd23a-36b0-4a8d-b4fe-fa5894bbe1de\"}', '2024-02-15 16:59:21', '2024-02-15 16:59:21');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

CREATE TABLE `portfolio_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `uuid`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(4, '092a5918-8bdf-448e-bbff-3c5cfae069cd', 'POS', 'pos', '2024-02-15 15:53:27', '2024-02-15 15:53:27'),
(5, 'bf9ec487-7973-40c5-aad6-6e5463e24b7c', 'Education', 'education', '2024-02-15 15:53:58', '2024-02-15 15:53:58'),
(6, '90be756e-919a-42f3-92eb-4b090e2eb255', 'Company Profile', 'company-profile', '2024-02-15 15:54:10', '2024-02-15 15:54:10'),
(7, '8523bb30-9e2d-4747-9ef3-e974f265b99e', 'Reservation', 'reservation', '2024-02-15 15:54:25', '2024-02-15 15:54:25');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_category_id` bigint DEFAULT NULL,
  `user_id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `uuid`, `post_category_id`, `user_id`, `name`, `slug`, `description`, `meta`, `created_at`, `updated_at`) VALUES
(3, '158ae9ed-8e17-4020-bc0c-e80dfcc3fce7', 2, 1, 'The Evolving Landscape of Technology: A Glimpse into the Future', 'the-evolving-landscape-of-technology:-a-glimpse-into-the-future', 'In this rapidly advancing era, technology has become an integral part of our daily lives. From revolutionary innovations to the continuous evolution of existing gadgets, the tech industry is shaping the way we live, work, and communicate. Let\'s delve into the exciting developments that lie ahead on the horizon of technology.', '{\"media_token\": \"1d4c613f-3ae2-40f9-b902-78989d93826e\"}', '2024-02-11 21:44:55', '2024-02-15 17:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `uuid`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'bb0c6650-4c3f-48bb-99bd-f4cb4585944e', 'Tech', 'tech', '2024-02-11 21:44:35', '2024-02-15 17:27:35');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_category_id` bigint DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `uuid`, `product_category_id`, `name`, `slug`, `description`, `meta`, `created_at`, `updated_at`) VALUES
(4, 'd917a87b-223f-4b2b-aed3-557bdf500898', 6, 'FathSchool', 'fathschool', 'Welcome to FathSchool, an innovative and dynamic school website application designed to revolutionize the educational experience. FathSchool seamlessly integrates cutting-edge technology with a user-friendly interface, creating a virtual hub that fosters effective communication, collaboration, and engagement between students, parents, teachers, and administrators. Our platform offers a comprehensive suite of features, including real-time grade tracking, assignment submission and feedback, attendance monitoring, and a robust messaging system to facilitate open communication. FathSchool goes beyond traditional boundaries by incorporating interactive virtual classrooms, enabling educators to conduct live lessons, share resources, and encourage student participation. With a focus on personalization, FathSchool empowers educators to tailor their teaching methods to individual student needs, fostering a more inclusive and effective learning environment. Parents can stay actively involved in their child\'s education through personalized dashboards, event notifications, and direct communication channels with teachers. Administrators benefit from streamlined administrative processes, data analytics, and the ability to make informed decisions to enhance overall school efficiency. FathSchool is not just a platform; it\'s a transformative tool that redefines the educational landscape, promoting collaboration, accessibility, and student success.', '{\"media_token\": \"e8b102b3-dfcf-4c59-9340-6f939f50ac18\"}', '2024-02-15 15:47:32', '2024-02-15 15:47:32'),
(5, '5278b9be-5a74-423c-8a4b-c38e626c0d94', 6, 'FathERP', 'fatherp', 'FathERP, the pinnacle of comprehensive business management solutions encapsulated in a cutting-edge web application. FathERP stands as a revolutionary platform, offering an all-encompassing suite of tools designed to streamline and elevate every facet of company operations. From efficient inventory management, seamless order processing, and integrated financial tracking to advanced human resource management and analytics, FathERP empowers organizations with the tools they need to thrive in today\'s competitive business landscape. The platform\'s user-friendly interface ensures that businesses of all sizes can harness the power of enterprise resource planning without the need for extensive training. FathERP not only facilitates internal efficiency but also provides real-time insights through its robust reporting and analytics features, enabling informed decision-making at every level. With modules dedicated to project management, customer relationship management (CRM), and supply chain optimization, FathERP is a versatile solution that adapts to the unique needs of diverse industries. By fostering connectivity and collaboration within an organization, FathERP redefines how businesses operate, ensuring scalability, adaptability, and sustained success in an ever-evolving marketplace. Join the future of enterprise management with FathERP and experience a new era of productivity, innovation, and business excellence.', '{\"media_token\": \"6758b6d0-c266-4a25-9cdc-bbd092a0888c\"}', '2024-02-15 15:50:14', '2024-02-15 15:50:14'),
(6, '1d41254f-277f-459e-984b-a28c072a2de6', 5, 'Fathstore', 'fathstore', 'FathStore, the premier online marketplace for digital asset transactions at https://fathstore.com. FathStore represents a cutting-edge platform that seamlessly connects buyers and sellers in the vibrant digital asset marketplace. With a sleek and intuitive interface, users can explore a diverse range of digital assets, including graphics, templates, audio files, and more, all meticulously curated to meet the ever-evolving needs of creators, businesses, and enthusiasts alike. FathStore goes beyond conventional e-commerce platforms by providing a secure and transparent environment, leveraging blockchain technology to ensure the authenticity and provenance of digital assets. Sellers can easily showcase their creations, set prices, and reach a global audience, while buyers enjoy a hassle-free purchasing experience with instant downloads and secure payment options. FathStore also incorporates a robust review and rating system, fostering a community-driven approach to quality assurance. Whether you\'re a digital artist looking to monetize your talents or a business seeking premium digital assets, FathStore is your go-to destination, offering a seamless and reliable marketplace for all your digital asset needs. Join FathStore today and embark on a journey of discovering, buying, and selling digital creativity like never before.', '{\"media_token\": \"35b86715-e536-4143-974f-72e946d8b0aa\"}', '2024-02-15 15:51:33', '2024-02-15 15:51:33'),
(7, '0a2ddd4d-f7e9-4d82-979c-515084fd71e8', 6, 'FathCoop', 'fathcoop', 'FathCoop, a revolutionary web application designed to streamline and enhance cooperative management. FathCoop is a comprehensive platform that caters to the diverse needs of cooperative societies, offering an array of features to simplify and optimize their operations. With a user-friendly interface, the application provides a centralized hub for members, administrators, and stakeholders to collaborate efficiently. FathCoop facilitates transparent financial management through its integrated accounting system, allowing for seamless tracking of transactions, expenditures, and profits. Cooperative members can access real-time updates on their financial contributions, dividends, and overall account status. The application also promotes effective communication by offering a secure messaging system and announcement features to keep all stakeholders informed about important events and decisions. FathCoop takes cooperative management to the next level by automating routine tasks such as member registrations, loan approvals, and document submissions, thereby reducing administrative burdens. Additionally, the platform prioritizes data security, ensuring that sensitive cooperative information remains confidential and protected. FathCoop is not just a tool; it\'s a catalyst for cooperative growth, fostering efficiency, transparency, and collaboration within the cooperative community. Embrace the future of cooperative management with FathCoop by visiting https://coop.fath.my.id.', '{\"media_token\": \"769854ed-4986-4814-850c-5c72ad87142b\"}', '2024-02-15 15:52:44', '2024-02-15 15:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `uuid`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(4, '286f8cea-c0af-4c35-b9f4-1d2a05430bd3', 'Mobile', 'mobile', '2024-02-15 15:42:13', '2024-02-15 15:42:13'),
(5, '9d0febc6-12fe-4bea-9d07-c01f242356bb', 'Website', 'website', '2024-02-15 15:42:22', '2024-02-15 15:42:22'),
(6, '334b1e24-14ca-444c-b765-398f130a4f67', 'Mobile & Website', 'mobile-&-website', '2024-02-15 15:42:54', '2024-02-15 15:42:54'),
(7, '32f46a43-483d-4567-9f6d-f00eacb752ec', 'Wordpress', 'wordpress', '2024-02-15 15:43:10', '2024-02-15 15:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `uuid`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, '5c8f884f-284e-475a-b1a9-22ad0531a42e', 'admin', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26'),
(2, 'b877dd60-7999-48f3-83bd-90ce8072a2fa', 'user', 'web', '2024-02-11 02:08:26', '2024-02-11 02:08:26');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(11, 2);

-- --------------------------------------------------------

--
-- Table structure for table `service_lists`
--

CREATE TABLE `service_lists` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_lists`
--

INSERT INTO `service_lists` (`id`, `uuid`, `slug`, `name`, `description`, `meta`, `created_at`, `updated_at`) VALUES
(1, 'a5930b5c-ef5d-4caf-a21e-2fdbdfd22506', 'web-development', 'Web Development', 'We build websites from start to finish, starting with an analysis tailored to the needs of a particular business flow. Propose the best and implement according to their needs.', '{\"media_token\": \"3401c204-edd8-4f07-95cc-1edbde453fed\"}', '2024-02-12 21:30:31', '2024-02-12 21:30:31'),
(2, '66faf2c6-5a86-4628-bb86-65dd6928a200', 'mobile-development', 'Mobile Development', 'We build mobile applications from your business design, and use flutter technology which will make it easier to integrate with various android, ios and desktop platforms.', '{\"media_token\": \"339a67d8-f116-483a-b8e4-64955714719a\"}', '2024-02-12 21:33:59', '2024-02-12 21:33:59'),
(3, '18119f3a-80ef-44c6-a943-ed212461d901', 'cloud-vps', 'Cloud VPS', 'We built cloud infrastructure on top of aws for several years. we see the cloud will be one of the directions of future technological change. and aws became one of our choices after we tried digital ocean, google cloud and others.', '{\"media_token\": \"7163af85-f6ed-4b4b-9407-698c8d0f81f0\"}', '2024-02-12 21:34:45', '2024-02-12 21:34:45'),
(4, '22b634c7-e9f9-4681-bdb6-6973d1c17350', 'internet-of-things-arduino', 'Internet Of Things Arduino', 'We build integrations using the Arduino internet of things (IoT) to increase efficiency and better application connectivity.', '{\"media_token\": \"f40d4ab6-565c-4928-bb55-9b1c9243ef5f\"}', '2024-02-12 21:35:30', '2024-02-12 21:35:30'),
(5, '2d198f22-5fac-4638-b5ae-5adc12988ebb', 'it-consultant', 'IT Consultant', 'Design the system you need according to your needs, we have more than 10 years of experience to help plan a system that fits your needs.', '{\"media_token\": \"b842bd4c-7b45-425d-ba22-0ecbc32c778b\"}', '2024-02-12 21:36:33', '2024-02-12 21:36:33'),
(6, '0770481c-cc68-47b1-a38d-949aa4f968f3', 'game-development', 'Game Development', 'We build game from start to finish, starting with an analysis tailored to the needs of a particular flow. Propose the best and implement according to their needs.', '{\"media_token\": \"b7318d10-f149-48e1-bc6f-e5f8b5d76a43\"}', '2024-02-12 21:38:39', '2024-02-12 21:38:39');

-- --------------------------------------------------------

--
-- Table structure for table `superioritys`
--

CREATE TABLE `superioritys` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `superioritys`
--

INSERT INTO `superioritys` (`id`, `uuid`, `slug`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, '62a58d51-ea2a-42c2-96c1-8444d95dae08', 'expertise-and-skills', 'Expertise and Skills', 'We bring a team of professionals who are skilled and experienced in various technologies and frameworks. Our expertise will ensure that your website or application is developed using the latest and most efficient practices.', '2024-02-13 20:25:11', '2024-02-13 20:25:11'),
(4, '7825c088-bc6d-4cfd-a1cc-2928af33ed26', 'strategic-planning', 'Strategic Planning', 'We often engages in strategic planning to understand your business goals and align the development process accordingly. We help in creating digital solutions that fit into your overall business strategy.', '2024-02-13 20:27:51', '2024-02-13 20:27:51'),
(5, '30c218ce-2735-49ec-ace2-8c76661599eb', 'support-and-maintanance', 'Support and Maintanance', 'Provides ongoing support and maintenance services after the project is completed. This ensures that your website or application remains functional, secure, and up-to-date.', '2024-02-13 20:28:10', '2024-02-13 20:28:25');

-- --------------------------------------------------------

--
-- Table structure for table `taggables`
--

CREATE TABLE `taggables` (
  `id` bigint UNSIGNED NOT NULL,
  `tag_id` bigint UNSIGNED NOT NULL,
  `taggable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries`
--

CREATE TABLE `telescope_entries` (
  `sequence` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `family_hash` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `should_display_on_index` tinyint(1) NOT NULL DEFAULT '1',
  `type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `telescope_entries`
--

INSERT INTO `telescope_entries` (`sequence`, `uuid`, `batch_id`, `family_hash`, `should_display_on_index`, `type`, `content`, `created_at`) VALUES
(1, '9b4fdb3d-5853-4289-b74e-2ec3e03a469d', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-11 17:33:49'),
(2, '9b4fdb3d-906d-4910-951c-e5c905cb7931', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-11 17:33:49'),
(3, '9b4fdb3d-9e74-406a-99f6-185f8926298c', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `users` where `id` = 1 limit 1\",\"time\":\"3.40\",\"slow\":false,\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Middleware\\\\Init.php\",\"line\":21,\"hash\":\"082e27d9c4fc4a40315cae2c646c0509\",\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-11 17:33:49'),
(4, '9b4fdb3d-9eba-4ad3-b4bb-c40aac63acb6', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\User\",\"count\":1,\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-11 17:33:49'),
(5, '9b4fdb3d-a063-447c-b7fe-58a9f767ba26', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"f1f70ec40aaa556905d4a030501c0ba4\",\"value\":4,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(6, '9b4fdb3d-a5a7-43e4-80d4-f903003cfc77', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'log', '{\"level\":\"warning\",\"message\":\"ctype_lower(): Argument of type null will be interpreted as string in the future in C:\\\\laragon\\\\www\\\\fathforcecom\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Support\\\\Str.php on line 1330\",\"context\":[],\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(7, '9b4fdb3d-a603-4ad3-81d6-a8210ec09eeb', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'log', '{\"level\":\"warning\",\"message\":\"ucwords(): Passing null to parameter #1 ($string) of type string is deprecated in C:\\\\laragon\\\\www\\\\fathforcecom\\\\vendor\\\\laravel\\\\framework\\\\src\\\\Illuminate\\\\Support\\\\Str.php on line 1331\",\"context\":[],\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(8, '9b4fdb3d-a842-43f2-888a-6ef0ec07e734', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select count(*) as aggregate from `portfolio_categories`\",\"time\":\"1.66\",\"slow\":false,\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Services\\\\Master\\\\PortfolioCategoryListService.php\",\"line\":53,\"hash\":\"afec2552eee3b165c60567be5fd9f28b\",\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(9, '9b4fdb3d-a8d9-450e-85ca-1eab82d62c30', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'query', '{\"connection\":\"mysql\",\"bindings\":[],\"sql\":\"select * from `portfolio_categories` order by `title` desc limit 10 offset 0\",\"time\":\"0.69\",\"slow\":false,\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Services\\\\Master\\\\PortfolioCategoryListService.php\",\"line\":53,\"hash\":\"389321aaaec17a0984ebe0c9eb678224\",\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(10, '9b4fdb3d-a917-4bc6-aee8-221aeca84f9a', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'model', '{\"action\":\"retrieved\",\"model\":\"App\\\\Models\\\\Master\\\\PortfolioCategory\",\"count\":3,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(11, '9b4fdb3d-ac26-4587-83b5-32bec8a62266', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"spatie.permission.cache\",\"value\":{\"alias\":{\"a\":\"id\",\"b\":\"uuid\",\"c\":\"name\",\"d\":\"guard_name\",\"r\":\"roles\"},\"permissions\":[{\"a\":1,\"b\":\"47a8fff5-ee68-4ad7-a319-00096af17f57\",\"c\":\"login:action\",\"d\":\"web\",\"r\":[2]},{\"a\":2,\"b\":\"bb9e9268-84c0-4a5e-af64-f663f41e886b\",\"c\":\"config:store\",\"d\":\"web\"},{\"a\":3,\"b\":\"41c68052-398d-4a2c-9ed2-bce28dea8ecc\",\"c\":\"locale:read\",\"d\":\"web\"},{\"a\":4,\"b\":\"4133bc39-3349-4630-9c56-69223109f4ca\",\"c\":\"locale:create\",\"d\":\"web\"},{\"a\":5,\"b\":\"2fe978ac-e409-4d4a-832f-0c53e7066762\",\"c\":\"locale:edit\",\"d\":\"web\"},{\"a\":6,\"b\":\"e3f35b0e-ce21-4318-a31c-865665887297\",\"c\":\"locale:delete\",\"d\":\"web\"},{\"a\":7,\"b\":\"aafd386e-06b8-49f8-bfd4-73888388b34d\",\"c\":\"backup:manage\",\"d\":\"web\"},{\"a\":8,\"b\":\"b747dd42-83f6-413d-8a1e-2cb6f551f89e\",\"c\":\"activity-log:manage\",\"d\":\"web\"},{\"a\":9,\"b\":\"2bc5080a-cb9b-41b8-939d-96b46cb0dd07\",\"c\":\"activity-log:export\",\"d\":\"web\"},{\"a\":10,\"b\":\"de99447d-8fa5-40fd-8fff-6b661b5cada1\",\"c\":\"utility:config\",\"d\":\"web\"},{\"a\":11,\"b\":\"8cd2ee59-8d5b-416d-9e13-80cab917b038\",\"c\":\"todo:manage\",\"d\":\"web\",\"r\":[2]},{\"a\":12,\"b\":\"ddfcfeaa-acf0-4855-a3c3-6c0865974730\",\"c\":\"todo:export\",\"d\":\"web\"},{\"a\":13,\"b\":\"b32b919e-be2f-4aa1-a789-6e4d2bed46a4\",\"c\":\"user:read\",\"d\":\"web\"},{\"a\":14,\"b\":\"cfc14527-a776-43d8-9071-00bf9af397d3\",\"c\":\"user:create\",\"d\":\"web\"},{\"a\":15,\"b\":\"9e2c89e0-9aa8-40e1-8fe0-452037962343\",\"c\":\"user:edit\",\"d\":\"web\"},{\"a\":16,\"b\":\"b15c12e6-bfc9-4049-884d-f4e7d9031fe0\",\"c\":\"user:delete\",\"d\":\"web\"},{\"a\":17,\"b\":\"23ba9c70-c2f9-450d-8352-5e27cc852e78\",\"c\":\"user:export\",\"d\":\"web\"},{\"a\":18,\"b\":\"5b242de6-efa3-4a62-88d6-21e2303fadfc\",\"c\":\"project:read\",\"d\":\"web\"},{\"a\":19,\"b\":\"b0ec4812-991c-47bf-9022-2f1a2c17e074\",\"c\":\"project:create\",\"d\":\"web\"},{\"a\":20,\"b\":\"cad5732d-d4c4-416a-8009-5336785c843c\",\"c\":\"project:edit\",\"d\":\"web\"},{\"a\":21,\"b\":\"63a7a01e-4b87-482b-840f-5d67b9aeb2db\",\"c\":\"project:delete\",\"d\":\"web\"},{\"a\":22,\"b\":\"ad03040b-efc8-478c-a43a-538e56bb15c0\",\"c\":\"project:export\",\"d\":\"web\"},{\"a\":23,\"b\":\"a39603c7-7496-423f-9122-f03a8ccc3264\",\"c\":\"product:read\",\"d\":\"web\"},{\"a\":24,\"b\":\"a9f4b31b-c425-4d6f-90bd-28f565075307\",\"c\":\"product:create\",\"d\":\"web\"},{\"a\":25,\"b\":\"97912004-9375-42db-a6de-1c4f1a184b58\",\"c\":\"product:edit\",\"d\":\"web\"},{\"a\":26,\"b\":\"3840ec77-d286-418b-9014-8ffee14a85cf\",\"c\":\"product:delete\",\"d\":\"web\"},{\"a\":27,\"b\":\"deaeb152-5417-45bb-ac0c-746e8ace1f64\",\"c\":\"product:export\",\"d\":\"web\"},{\"a\":28,\"b\":\"534e6358-6738-4a27-9e79-4c1c3a237574\",\"c\":\"productcategory:read\",\"d\":\"web\"},{\"a\":29,\"b\":\"0844e27f-9fe3-4f31-8f10-3a0b33f6728b\",\"c\":\"productcategory:create\",\"d\":\"web\"},{\"a\":30,\"b\":\"7ec98e91-66c0-4a8e-9380-669f5b86b853\",\"c\":\"productcategory:edit\",\"d\":\"web\"},{\"a\":31,\"b\":\"0e161d1c-7616-4e40-b3fd-091023577a79\",\"c\":\"productcategory:delete\",\"d\":\"web\"},{\"a\":32,\"b\":\"c62793f8-2702-430e-9b68-6ec6dfcb1a53\",\"c\":\"productcategory:export\",\"d\":\"web\"},{\"a\":33,\"b\":\"f1ae7d43-d412-421b-b3b3-876179c32dd6\",\"c\":\"post:read\",\"d\":\"web\"},{\"a\":34,\"b\":\"6c18d7b6-f7b2-4de7-8559-657b67960996\",\"c\":\"post:create\",\"d\":\"web\"},{\"a\":35,\"b\":\"dd4e5acc-c55d-4c2d-9db0-58142e727bd1\",\"c\":\"post:edit\",\"d\":\"web\"},{\"a\":36,\"b\":\"430eafec-eb20-446b-9803-fda6104b5373\",\"c\":\"post:delete\",\"d\":\"web\"},{\"a\":37,\"b\":\"bb865f4e-4a19-462a-b1e7-5abb58e1a2f3\",\"c\":\"post:export\",\"d\":\"web\"},{\"a\":38,\"b\":\"b166386d-5de1-4c90-8fb5-f7011694dd9b\",\"c\":\"postcategory:read\",\"d\":\"web\"},{\"a\":39,\"b\":\"09715b0e-5b50-4296-98b6-5af069554ba5\",\"c\":\"postcategory:create\",\"d\":\"web\"},{\"a\":40,\"b\":\"5553c7a2-1f52-4e18-841a-ea2f71125465\",\"c\":\"postcategory:edit\",\"d\":\"web\"},{\"a\":41,\"b\":\"58ccc536-8775-4954-a9a1-eeae1b59e0fa\",\"c\":\"postcategory:delete\",\"d\":\"web\"},{\"a\":42,\"b\":\"0769e431-fb65-4d37-91cc-162bf950f8af\",\"c\":\"postcategory:export\",\"d\":\"web\"}],\"roles\":[{\"a\":2,\"b\":\"b877dd60-7999-48f3-83bd-90ce8072a2fa\",\"c\":\"user\",\"d\":\"web\"}]},\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(12, '9b4fdb3d-aea3-44c8-a02a-d0cb68e75455', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:create\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":22,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(13, '9b4fdb3d-af38-430b-a976-f35e57819aa4', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:edit\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":23,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(14, '9b4fdb3d-af9a-4c4e-afa8-683472db42ec', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:delete\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":24,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(15, '9b4fdb3d-aff5-4d32-9b9e-07a8852b9a6e', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:read\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":25,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(16, '9b4fdb3d-b0fb-4a04-a0a9-22c91d27cc3f', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:create\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":22,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(17, '9b4fdb3d-b158-42aa-86e8-51110c395575', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:edit\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":23,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(18, '9b4fdb3d-b1ac-4f02-929b-ba10373f4598', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:delete\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":24,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(19, '9b4fdb3d-b208-4f5a-8d79-adcaab417674', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:read\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":25,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(20, '9b4fdb3d-b27e-4ea2-8bbe-a6d6c111f40d', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:create\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":22,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(21, '9b4fdb3d-b2d3-49f3-a5e1-dcb7c8b9427e', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:edit\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":23,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(22, '9b4fdb3d-b37c-4dc5-9b88-9229fb2e2620', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:delete\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":24,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(23, '9b4fdb3d-b431-4569-b764-92aaa5a4bcb7', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'gate', '{\"ability\":\"portfoliocategory:read\",\"result\":\"allowed\",\"arguments\":[],\"file\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\app\\\\Http\\\\Resources\\\\Master\\\\PortfolioCategoryResource.php\",\"line\":25,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(24, '9b4fdb3d-b712-44db-b62e-8c63e843949e', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"f1f70ec40aaa556905d4a030501c0ba4\",\"value\":5,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(25, '9b4fdb3d-b84d-457e-8cd5-3295778d513c', '9b4fdb3d-bab7-4f36-a160-bf939f875bc5', NULL, 1, 'request', '{\"ip_address\":\"127.0.0.1\",\"uri\":\"\\/api\\/v1\\/app\\/master\\/portfoliocategories\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\Master\\\\PortfolioCategoryController@index\",\"middleware\":[\"api\",\"auth:sanctum\",\"two.factor.security\",\"screen.lock\",\"under.maintenance\",\"user.config\"],\"headers\":{\"host\":\"fathforcecom.test\",\"connection\":\"keep-alive\",\"accept\":\"application\\/json, text\\/plain, *\\/*\",\"x-xsrf-token\":\"eyJpdiI6IkFOWlp2U3RINGsvdTQyaHNPRjczdmc9PSIsInZhbHVlIjoiaHNYYld1NXNtR05HZGFCTEtEcWRuTUxCbzFOYmtqNlRZSGpQWXlFblJnQ1FHYzNNT29yQTNPYzVpNmFqcXVhN1dpMjIzYmZvc2hwRkZqN2xnWEVBNW1pVnJRbVVvdEhpUlNJOHFzeTJjWDZqbEt5VmhHTHUyS1ZmSUZybGsvYUMiLCJtYWMiOiI4YzU2NmUzM2I2NzhmYjUwN2U4N2E2MTgxNjkwY2JlOGEwYWVmYTEzOTViZTRkYmI2MjI1YmRkMzA2N2U5NGIwIiwidGFnIjoiIn0=\",\"x-csrf-token\":\"rHIHMSM7mv5RixWUd278Wpvh1wZwtV5XO9z4Am1i\",\"x-requested-with\":\"XMLHttpRequest\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/121.0.0.0 Safari\\/537.36\",\"referer\":\"http:\\/\\/fathforcecom.test\\/app\\/master\\/portfoliocategories\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"cookie\":\"XSRF-TOKEN=eyJpdiI6IkFOWlp2U3RINGsvdTQyaHNPRjczdmc9PSIsInZhbHVlIjoiaHNYYld1NXNtR05HZGFCTEtEcWRuTUxCbzFOYmtqNlRZSGpQWXlFblJnQ1FHYzNNT29yQTNPYzVpNmFqcXVhN1dpMjIzYmZvc2hwRkZqN2xnWEVBNW1pVnJRbVVvdEhpUlNJOHFzeTJjWDZqbEt5VmhHTHUyS1ZmSUZybGsvYUMiLCJtYWMiOiI4YzU2NmUzM2I2NzhmYjUwN2U4N2E2MTgxNjkwY2JlOGEwYWVmYTEzOTViZTRkYmI2MjI1YmRkMzA2N2U5NGIwIiwidGFnIjoiIn0%3D; fathforcecom_session=eyJpdiI6IkJNdHl3bHYwV1dDMjNKNVAwL2RBL2c9PSIsInZhbHVlIjoiamdoai9mbDFHREp5c3czbGRVa2lVa2RDeGN1bkZqUjYvQUdxMVEwTnNwaGdDa3ZkZDVLN0FpVGpocWwzSEpVQTVsek1VcFR4OTE1SjF1OVowdmNyUm5SNm5jbnRyU0dzN0VDYXRnZU96QnFKK2dabFVWaWNGN2JrWTNQdTRQWUMiLCJtYWMiOiI2ZTUwNGM2YzZjZmVkOTc5NjJlODk3NGU0Y2ZlMGYwMDc2NzgxMTE2Mzc3ZDM0NTA4ODU3ZWNmNzk5YWNjMGFiIiwidGFnIjoiIn0%3D\"},\"payload\":[],\"session\":{\"_token\":\"rHIHMSM7mv5RixWUd278Wpvh1wZwtV5XO9z4Am1i\",\"_previous\":{\"url\":\"http:\\/\\/fathforcecom.test\\/app\\/master\\/portfoliocategories\"},\"_flash\":{\"old\":[],\"new\":[]},\"login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d\":1},\"response_status\":200,\"response\":{\"data\":[{\"uuid\":\"5bf92b1f-1eff-46e5-8604-94ed086bf608\",\"title\":\"weq\",\"is_createtable\":true,\"is_editable\":true,\"is_deletable\":true,\"is_readtable\":true,\"created_at\":\"2024-02-11 22:33:23\",\"updated_at\":\"2024-02-11 22:33:23\"},{\"uuid\":\"3e30d4f7-84a7-4370-9f5a-9ba101c49bd6\",\"title\":\"iio\",\"is_createtable\":true,\"is_editable\":true,\"is_deletable\":true,\"is_readtable\":true,\"created_at\":\"2024-02-11 22:36:15\",\"updated_at\":\"2024-02-11 22:36:15\"},{\"uuid\":\"665bfc5b-c7a6-4644-ae51-f77af3c9ea7f\",\"title\":\"asdas\",\"is_createtable\":true,\"is_editable\":true,\"is_deletable\":true,\"is_readtable\":true,\"created_at\":\"2024-02-11 22:36:41\",\"updated_at\":\"2024-02-11 22:36:41\"}],\"links\":{\"first\":\"http:\\/\\/fathforcecom.test\\/api\\/v1\\/app\\/master\\/portfoliocategories?current_page=1\",\"last\":\"http:\\/\\/fathforcecom.test\\/api\\/v1\\/app\\/master\\/portfoliocategories?current_page=1\",\"prev\":null,\"next\":null},\"meta\":{\"current_page\":1,\"from\":1,\"last_page\":1,\"links\":[{\"url\":null,\"label\":\"Previous\",\"active\":false},{\"url\":\"http:\\/\\/fathforcecom.test\\/api\\/v1\\/app\\/master\\/portfoliocategories?current_page=1\",\"label\":\"1\",\"active\":true},{\"url\":null,\"label\":\"Next\",\"active\":false}],\"path\":\"http:\\/\\/fathforcecom.test\\/api\\/v1\\/app\\/master\\/portfoliocategories\",\"per_page\":10,\"to\":3,\"total\":3,\"allowed_sorts\":[\"created_at\",\"title\"],\"default_sort\":\"title\",\"default_order\":\"desc\"},\"headers\":[{\"key\":\"title\",\"label\":\"Title\",\"sortable\":true,\"visibility\":true},{\"key\":\"action\",\"label\":\"\",\"sortable\":false,\"visibility\":true}]},\"duration\":756,\"memory\":30,\"hostname\":\"DESKTOP-NJHLKEN\",\"user\":{\"id\":1,\"name\":\"farhan\",\"email\":\"farhanmrzk@gmail.com\"}}', '2024-02-11 17:33:49'),
(26, '9b4fdcb5-a3ec-4d1c-b9f3-595f5f0a03b7', '9b4fdcb5-c5a6-4ae9-8c53-c3e28b59b284', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-11 17:37:56'),
(27, '9b4fdcb5-bc1e-454d-8551-c96d7139564c', '9b4fdcb5-c5a6-4ae9-8c53-c3e28b59b284', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-11 17:37:56'),
(28, '9b4fdcb5-c344-4ea8-83af-4f7f983feebb', '9b4fdcb5-c5a6-4ae9-8c53-c3e28b59b284', NULL, 1, 'request', '{\"ip_address\":\"127.0.0.1\",\"uri\":\"\\/api\\/v1\\/auth\\/user\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\Auth\\\\AuthController@me\",\"middleware\":[\"api\",\"user.config\",\"auth:sanctum\",\"two.factor.security\",\"under.maintenance\"],\"headers\":{\"host\":\"fathforcecom.test\",\"connection\":\"keep-alive\",\"accept\":\"application\\/json, text\\/plain, *\\/*\",\"dnt\":\"1\",\"x-xsrf-token\":\"eyJpdiI6Imh1UGZ0TDBHMUpvd2dRb0EvS0E0MVE9PSIsInZhbHVlIjoiYy8xaEtlK2ovS2N4V3UrVCtsTU4xdDA5OEt3S3lYNFhIdDUrTFdCbzZBWGF4K0xVdkNjOGdhN1VhZ2hPYWZNYjNLU0dDZW5MT3NZekJza2FZMXc1U1o1ZU5aS3J4TEZXcU5vbXpMbkpYNGtyeHhwUnZNdWVvWTIxcEg4dDhnUFMiLCJtYWMiOiI3ODNhMDAyNThmM2EzZmI3MDZlMjc4OTEwOTI5ZTJjYzUzYjhkYzlmMjEwYjJkNjUxMWQ0YjFiMjdmNmRmMGUwIiwidGFnIjoiIn0=\",\"x-csrf-token\":\"AKwd9dV8Kwqe1RWKhvRB2ihLVEdj2CzxaP8uSD2o\",\"x-requested-with\":\"XMLHttpRequest\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/121.0.0.0 Safari\\/537.36\",\"referer\":\"http:\\/\\/fathforcecom.test\\/app\\/master\\/productcategories\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9,id;q=0.8\",\"cookie\":\"XSRF-TOKEN=eyJpdiI6Imh1UGZ0TDBHMUpvd2dRb0EvS0E0MVE9PSIsInZhbHVlIjoiYy8xaEtlK2ovS2N4V3UrVCtsTU4xdDA5OEt3S3lYNFhIdDUrTFdCbzZBWGF4K0xVdkNjOGdhN1VhZ2hPYWZNYjNLU0dDZW5MT3NZekJza2FZMXc1U1o1ZU5aS3J4TEZXcU5vbXpMbkpYNGtyeHhwUnZNdWVvWTIxcEg4dDhnUFMiLCJtYWMiOiI3ODNhMDAyNThmM2EzZmI3MDZlMjc4OTEwOTI5ZTJjYzUzYjhkYzlmMjEwYjJkNjUxMWQ0YjFiMjdmNmRmMGUwIiwidGFnIjoiIn0%3D; fathforcecom_session=eyJpdiI6InQxV3YwRXlQd3VCdnJVZ1A4RjFQbXc9PSIsInZhbHVlIjoibzZ2REtjWUN6eHFNc1RIVjdiYnVsZDRtTFRCMWVnUkFoYUdvdTVXbFpxZERkWEp6LzBPcTZJZVo3YkM5ckNYenJpMG9hRjkzREFRRWRCNVc0V1NkMW01MXg5YXBXVUROVXIwRnYzMWU5andWM3U2VjFLbW1SaXJDOTV0U2Y0aEciLCJtYWMiOiIwOTUwNjAyZjgxYzNkMDliODMxNzY5OTQwYzViYTllYmQ2NWY0YWE2MGYyZTNiN2JkOTg3NTZkYTk0ZjZkNzM5IiwidGFnIjoiIn0%3D\"},\"payload\":[],\"session\":[],\"response_status\":401,\"response\":{\"message\":\"Your session is expired, please login again.\",\"reload\":true},\"duration\":586,\"memory\":28,\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-11 17:37:56'),
(29, '9b54a86b-406b-4524-a7d7-af93aaaad2b9', '9b54a86b-effd-4cf3-8d4e-3d9108f25114', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 02:50:51'),
(30, '9b54a86b-acda-47dc-b3d1-c0ec9be5798e', '9b54a86b-effd-4cf3-8d4e-3d9108f25114', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 02:50:51'),
(31, '9b54a86b-d307-44a6-a9ce-ebf6db8bba25', '9b54a86b-effd-4cf3-8d4e-3d9108f25114', NULL, 1, 'view', '{\"name\":\"app\",\"path\":\"\\\\resources\\\\views\\/app.blade.php\",\"data\":[],\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 02:50:51'),
(32, '9b54a86b-e6b6-4323-8ec3-dacbaa5d2174', '9b54a86b-effd-4cf3-8d4e-3d9108f25114', NULL, 1, 'request', '{\"ip_address\":\"127.0.0.1\",\"uri\":\"\\/app\\/dashboard\",\"method\":\"GET\",\"controller_action\":\"Closure\",\"middleware\":[\"web\",\"user.config\"],\"headers\":{\"host\":\"fathforcecom.test\",\"connection\":\"keep-alive\",\"cache-control\":\"max-age=0\",\"upgrade-insecure-requests\":\"1\",\"dnt\":\"1\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/121.0.0.0 Safari\\/537.36\",\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"referer\":\"http:\\/\\/fathforcecom.test\\/app\\/dashboard\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9,id;q=0.8\",\"cookie\":\"XSRF-TOKEN=eyJpdiI6IlRYeU4yTnZDV1Y5bzg5UUZnaVlsSWc9PSIsInZhbHVlIjoiTEdaMFpJZ2gra3k1WFRaVDM0TnVkVnI5cnhqRHhseWVjaVE5eXVHdnRUaStpYWl2U1VkUHVtRFdzZmY1ZkNXRDg4MDZVWDBlQTJ5MHdFMGpMZHNOc0pEUW5NUjVhME90ZDIxOFEyaUxIUCtkVVlWL0dORWZkYkg4ME1xbzQ0bjgiLCJtYWMiOiJkZmUxM2RkM2I4ZWJmODZlMDA0OTA5NDU2ZGQyMGQ2NmQ1MTYzYjdmNTM5OTEwMmMwMzg1ZTNjZWY3ZjM2YzcwIiwidGFnIjoiIn0%3D; fathforcecom_session=eyJpdiI6IjB0VlNzNFRlMWt3Wk9BRUZIOU1aSVE9PSIsInZhbHVlIjoiMGFjeUwxaTI4c2NBMXRpcVFIZm9DaVJYYXJEVGE0Vk5pdmd6a3FsNWx0Q1ZpdWNqUUhxSW5UdGRwVWZZaUZFeXJPUGVxYzF6SmJOV205UzcrZlBtVFBlVTE3VjNFcTc5ZTZuNDdCQjgyNmhwdzUrdTZ6VmZPUE1HWXZZb244NVEiLCJtYWMiOiIxNzY2MTZhZmM2MDU0MmNiOTBiOGY0ZDZhZTBhNjdiOWYyMTU4ZWUyMTRlYTQ0YTlhMDRjZDQ2NWQ5MTE2ZGE5IiwidGFnIjoiIn0%3D\"},\"payload\":[],\"session\":{\"_token\":\"WTYK0yQIims02sjBktWgNHsHP36B7VnLMaZA1v5o\",\"_previous\":{\"url\":\"http:\\/\\/fathforcecom.test\\/app\\/dashboard\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":{\"view\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\resources\\\\views\\/app.blade.php\",\"data\":[]},\"duration\":2026,\"memory\":28,\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 02:50:52'),
(33, '9b54b6ed-7640-44e2-9881-38130c3a12bc', '9b54b6ed-b716-40a2-a884-d9fd450587ff', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 03:31:25'),
(34, '9b54b6ed-a66f-4329-bea4-850509baa2c3', '9b54b6ed-b716-40a2-a884-d9fd450587ff', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 03:31:25'),
(35, '9b54b6ed-b3b5-45c6-9dd9-81df5088845d', '9b54b6ed-b716-40a2-a884-d9fd450587ff', NULL, 1, 'request', '{\"ip_address\":\"127.0.0.1\",\"uri\":\"\\/api\\/v1\\/auth\\/user\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\Auth\\\\AuthController@me\",\"middleware\":[\"api\",\"user.config\",\"auth:sanctum\",\"two.factor.security\",\"under.maintenance\"],\"headers\":{\"host\":\"fathforcecom.test\",\"connection\":\"keep-alive\",\"accept\":\"application\\/json, text\\/plain, *\\/*\",\"dnt\":\"1\",\"x-xsrf-token\":\"eyJpdiI6Iktic1YrUm9SU1hjT2lrbEtlRkxDcHc9PSIsInZhbHVlIjoiekpIdkFyNTFVUFlnWXJnYkgzUTRKQkhDSnN0THdnSG5DaUF0Ly96U005NmpId1lpNi8rVkc1OXFVZUJGNVpVNFhHdnd2RlJDcVBCeEhzKzdoSGZnbzN1aTluV29EVXpYNHRLYlZ4ZFBheHNmZjB5M2YyV3E3bWx1ZFNqRlFNZlEiLCJtYWMiOiJhYzQwMTFlNGZkNWNjMjczYmFhNmFmOGI1ZjFiZjBkZGJmMDM1ZDZkNjdlMmJlMzQ2ZjBkM2M1NzllMDFlYzU3IiwidGFnIjoiIn0=\",\"x-csrf-token\":\"wktMP5Knsyrkr4L4D2pJzb1A061r6a65rE3EdZR7\",\"x-requested-with\":\"XMLHttpRequest\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/121.0.0.0 Safari\\/537.36\",\"referer\":\"http:\\/\\/fathforcecom.test\\/app\\/dashboard\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9,id;q=0.8\",\"cookie\":\"XSRF-TOKEN=eyJpdiI6Iktic1YrUm9SU1hjT2lrbEtlRkxDcHc9PSIsInZhbHVlIjoiekpIdkFyNTFVUFlnWXJnYkgzUTRKQkhDSnN0THdnSG5DaUF0Ly96U005NmpId1lpNi8rVkc1OXFVZUJGNVpVNFhHdnd2RlJDcVBCeEhzKzdoSGZnbzN1aTluV29EVXpYNHRLYlZ4ZFBheHNmZjB5M2YyV3E3bWx1ZFNqRlFNZlEiLCJtYWMiOiJhYzQwMTFlNGZkNWNjMjczYmFhNmFmOGI1ZjFiZjBkZGJmMDM1ZDZkNjdlMmJlMzQ2ZjBkM2M1NzllMDFlYzU3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlIxS3NPM1ora0ZyeCtJZUhPYU1IdFE9PSIsInZhbHVlIjoibXRuQ0gwZW5wQmNIK2NzRkpZbjFjb3Riek1KRXdVSk5IZzJVS3hmU0pwbVZ5cW1qWEl2enRSU3dJRjMxUmRkR0dNQXhyK21hVEtweEFhWDA5cjJxOE5aQmpRZW0yZEorblBlbW9RZ3hrZWVpTzJBaEFCVEtRZThQRmlJMUlXVWgiLCJtYWMiOiIyNjQ5MGIxNDU1MWVlZWM3OGUyMmU3Y2IyNjg2N2M3OTk2N2MzZDRlNTNiZTMzOWQyOTdiOTZjNzc3YjdkNTU5IiwidGFnIjoiIn0%3D; XSRF-TOKEN=eyJpdiI6Ik9yek1hWGhWQnJiQmMyUGFTc243T1E9PSIsInZhbHVlIjoiejZoZDZ5NVBnaVlmQmNEeVltaDg2WFo2R2ZOcGl2ZnNWbVRyNHZhWS9WWTkxV0hSMU5SdEhVOHlPSmIycWRyOE9tMmE2d200NnZQd1lUM3M5Lzl5MlltS2EwRjZCUjRwOE95Sytuakd1UEF5K0NQTzgrS1FRclVBbnQ5SmV0QkkiLCJtYWMiOiIzZGY5NjQ1ZWNkODgxN2Q4ODNjYzhlZTA2YTk0ODdlNzBmOGI0MTViZWQzODkwZDA0OTg4Nzk4YWNiNWU1NDk3IiwidGFnIjoiIn0%3D; fathforcecom_session=eyJpdiI6InluT2RCeEpaSk9PRjJZbHAzQ1hEaUE9PSIsInZhbHVlIjoic1k5SUc5RFhyU2ZEdGNvRHI1WkQvemUrMGpyalhMZzB2anRXanpJTzh4Mk9zbmFRUUZtdUlpeHpkczdpSGJqUGJRK29vUm9sbGRMdWgvU284VjFzNm9BY1VrNUdPa1huVUNFQVhBMjM4TGRSeUJveHR3WG43MkdSSTJWMFkrOFoiLCJtYWMiOiI1NjQwOGEwYWZhN2RjNTA3YTU0NzViMTA1ODJjOTdkMmI5YzUyZTAxYjgxNTYzY2E1ZDk1NGZlODhjY2I0MGZmIiwidGFnIjoiIn0%3D\"},\"payload\":[],\"session\":[],\"response_status\":401,\"response\":{\"message\":\"Your session is expired, please login again.\",\"reload\":true},\"duration\":859,\"memory\":28,\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 03:31:25'),
(36, '9b54c35a-49a7-427b-ab1d-df2f3d417a27', '9b54c35a-b85c-48a9-b4a6-b3f781d37884', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 04:06:10'),
(37, '9b54c35a-9a5f-44f6-a2d1-05a5934a4ec7', '9b54c35a-b85c-48a9-b4a6-b3f781d37884', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 04:06:10'),
(38, '9b54c35a-b049-4e2f-8ede-7bcab519a380', '9b54c35a-b85c-48a9-b4a6-b3f781d37884', NULL, 1, 'request', '{\"ip_address\":\"127.0.0.1\",\"uri\":\"\\/api\\/v1\\/auth\\/user\",\"method\":\"GET\",\"controller_action\":\"App\\\\Http\\\\Controllers\\\\Auth\\\\AuthController@me\",\"middleware\":[\"api\",\"user.config\",\"auth:sanctum\",\"two.factor.security\",\"under.maintenance\"],\"headers\":{\"host\":\"fathforcecom.test\",\"connection\":\"keep-alive\",\"accept\":\"application\\/json, text\\/plain, *\\/*\",\"dnt\":\"1\",\"x-xsrf-token\":\"eyJpdiI6Iktic1YrUm9SU1hjT2lrbEtlRkxDcHc9PSIsInZhbHVlIjoiekpIdkFyNTFVUFlnWXJnYkgzUTRKQkhDSnN0THdnSG5DaUF0Ly96U005NmpId1lpNi8rVkc1OXFVZUJGNVpVNFhHdnd2RlJDcVBCeEhzKzdoSGZnbzN1aTluV29EVXpYNHRLYlZ4ZFBheHNmZjB5M2YyV3E3bWx1ZFNqRlFNZlEiLCJtYWMiOiJhYzQwMTFlNGZkNWNjMjczYmFhNmFmOGI1ZjFiZjBkZGJmMDM1ZDZkNjdlMmJlMzQ2ZjBkM2M1NzllMDFlYzU3IiwidGFnIjoiIn0=\",\"x-csrf-token\":\"wktMP5Knsyrkr4L4D2pJzb1A061r6a65rE3EdZR7\",\"x-requested-with\":\"XMLHttpRequest\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/121.0.0.0 Safari\\/537.36\",\"referer\":\"http:\\/\\/fathforcecom.test\\/app\\/?ref=\\/login?ref=\\/dashboard\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9,id;q=0.8\",\"cookie\":\"XSRF-TOKEN=eyJpdiI6Iktic1YrUm9SU1hjT2lrbEtlRkxDcHc9PSIsInZhbHVlIjoiekpIdkFyNTFVUFlnWXJnYkgzUTRKQkhDSnN0THdnSG5DaUF0Ly96U005NmpId1lpNi8rVkc1OXFVZUJGNVpVNFhHdnd2RlJDcVBCeEhzKzdoSGZnbzN1aTluV29EVXpYNHRLYlZ4ZFBheHNmZjB5M2YyV3E3bWx1ZFNqRlFNZlEiLCJtYWMiOiJhYzQwMTFlNGZkNWNjMjczYmFhNmFmOGI1ZjFiZjBkZGJmMDM1ZDZkNjdlMmJlMzQ2ZjBkM2M1NzllMDFlYzU3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlIxS3NPM1ora0ZyeCtJZUhPYU1IdFE9PSIsInZhbHVlIjoibXRuQ0gwZW5wQmNIK2NzRkpZbjFjb3Riek1KRXdVSk5IZzJVS3hmU0pwbVZ5cW1qWEl2enRSU3dJRjMxUmRkR0dNQXhyK21hVEtweEFhWDA5cjJxOE5aQmpRZW0yZEorblBlbW9RZ3hrZWVpTzJBaEFCVEtRZThQRmlJMUlXVWgiLCJtYWMiOiIyNjQ5MGIxNDU1MWVlZWM3OGUyMmU3Y2IyNjg2N2M3OTk2N2MzZDRlNTNiZTMzOWQyOTdiOTZjNzc3YjdkNTU5IiwidGFnIjoiIn0%3D; XSRF-TOKEN=eyJpdiI6InVqZ1FCUTNVdWJGQXVCYUhxN1ExNFE9PSIsInZhbHVlIjoibUh3ZFp2b1B6ZGVjeUdnQzEzZUJIaG1ydGlGUnVFRmJJOE94RTlIYnV1OGtCYzlMdXphUkxxK1IzVUcxWE9sNCtvWHdWSUsyL3FlWFpOV3FubFBnVWxJS3lRMmtHaWVjVjN3cVJxU0dFRGh2K2pHVWVpS1MzUm9Gem02MWhURWwiLCJtYWMiOiIxOTExNjkzMmY5NDUwNmExZWQ2MDAyY2ZlMTc2NzJiNjUzYmNjNDE3ZmE0OWQwYzRkZjM3MzVhZGE5ZjlhNTA1IiwidGFnIjoiIn0%3D; fathforcecom_session=eyJpdiI6Ii9iLzFvUy92Vkp0YjRmRHl5UWh4WGc9PSIsInZhbHVlIjoiTXM1b01Gck1zK2JjWUpXNnQ2WGErbG9CUkRDMjhyZmNDSHNHSk9lK2Q2VlVLTzRzdDZYSm40a3B2cC9rYmMwUkVyS2pKRE5hT0I5SklGYTg2d0tMRHBIUWsxUWJpYTlUU3haWUo2a01paDN5KzJWUWx1dS96L25Jc0tLV2lMTVgiLCJtYWMiOiIwMTFjMTJjZjczZjRjMzJhZWYyOTlkOThiMmNjNmNhNDdjMWU2YmIzNTJhOTVhMWYyYTRiMzM1M2RhNTg5ZmE2IiwidGFnIjoiIn0%3D\"},\"payload\":[],\"session\":[],\"response_status\":401,\"response\":{\"message\":\"Your session is expired, please login again.\",\"reload\":true},\"duration\":1006,\"memory\":28,\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 04:06:10'),
(39, '9b54ccde-be13-449a-bec7-cd5628f04852', '9b54ccdf-0ffe-46ba-a372-e6e8b3e7d8ae', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 04:32:47'),
(40, '9b54ccde-f652-4878-a668-fb4ff351fb13', '9b54ccdf-0ffe-46ba-a372-e6e8b3e7d8ae', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 04:32:47'),
(41, '9b54ccdf-06e0-4c95-9cd8-35aa83bc23cc', '9b54ccdf-0ffe-46ba-a372-e6e8b3e7d8ae', NULL, 1, 'view', '{\"name\":\"app\",\"path\":\"\\\\resources\\\\views\\/app.blade.php\",\"data\":[],\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 04:32:47'),
(42, '9b54ccdf-0b5e-48e9-9228-0e620a972523', '9b54ccdf-0ffe-46ba-a372-e6e8b3e7d8ae', NULL, 1, 'request', '{\"ip_address\":\"127.0.0.1\",\"uri\":\"\\/app?ref=%2Flogin%3Fref%3D%2Flogin%3Fref%3D%2Fdashboard\",\"method\":\"GET\",\"controller_action\":\"Closure\",\"middleware\":[\"web\",\"user.config\"],\"headers\":{\"host\":\"fathforcecom.test\",\"connection\":\"keep-alive\",\"cache-control\":\"max-age=0\",\"upgrade-insecure-requests\":\"1\",\"dnt\":\"1\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/121.0.0.0 Safari\\/537.36\",\"accept\":\"text\\/html,application\\/xhtml+xml,application\\/xml;q=0.9,image\\/avif,image\\/webp,image\\/apng,*\\/*;q=0.8,application\\/signed-exchange;v=b3;q=0.7\",\"referer\":\"http:\\/\\/fathforcecom.test\\/app?ref=\\/login?ref=\\/login?ref=\\/dashboard\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9,id;q=0.8\",\"cookie\":\"XSRF-TOKEN=eyJpdiI6Iktic1YrUm9SU1hjT2lrbEtlRkxDcHc9PSIsInZhbHVlIjoiekpIdkFyNTFVUFlnWXJnYkgzUTRKQkhDSnN0THdnSG5DaUF0Ly96U005NmpId1lpNi8rVkc1OXFVZUJGNVpVNFhHdnd2RlJDcVBCeEhzKzdoSGZnbzN1aTluV29EVXpYNHRLYlZ4ZFBheHNmZjB5M2YyV3E3bWx1ZFNqRlFNZlEiLCJtYWMiOiJhYzQwMTFlNGZkNWNjMjczYmFhNmFmOGI1ZjFiZjBkZGJmMDM1ZDZkNjdlMmJlMzQ2ZjBkM2M1NzllMDFlYzU3IiwidGFnIjoiIn0%3D; laravel_session=eyJpdiI6IlIxS3NPM1ora0ZyeCtJZUhPYU1IdFE9PSIsInZhbHVlIjoibXRuQ0gwZW5wQmNIK2NzRkpZbjFjb3Riek1KRXdVSk5IZzJVS3hmU0pwbVZ5cW1qWEl2enRSU3dJRjMxUmRkR0dNQXhyK21hVEtweEFhWDA5cjJxOE5aQmpRZW0yZEorblBlbW9RZ3hrZWVpTzJBaEFCVEtRZThQRmlJMUlXVWgiLCJtYWMiOiIyNjQ5MGIxNDU1MWVlZWM3OGUyMmU3Y2IyNjg2N2M3OTk2N2MzZDRlNTNiZTMzOWQyOTdiOTZjNzc3YjdkNTU5IiwidGFnIjoiIn0%3D; XSRF-TOKEN=eyJpdiI6InFWd1ZuejVMZjZ1SVFhOUEvdXZ1VUE9PSIsInZhbHVlIjoiZURCMlZGNEdtVWZDSTNEM2d1eG9FWHVwaTI3OVJtNkhDbFNQY1B6TjVxL1g2Ny9VOEVLQUsvYmZjMHZEbCt5dkkxTFF1SFJmWnVqWFoydkdLSnlnb04ySzE1VTVoWEY0Ymt2aXhZb29MSklaOVR4TTg4NUtQS1BHQUFvU0xwWXoiLCJtYWMiOiI4YzY5YzcyN2U0MDJiYmVmOGMxMmVhOTBkNjE1YTJhNTBmMTIxYTQxMDA4ZjU4YzkxMmY1ZjkzM2Y3NzZmOWM3IiwidGFnIjoiIn0%3D; fathforcecom_session=eyJpdiI6ImRpUkJMWS9HRDd6R2VEeXpuemw2WEE9PSIsInZhbHVlIjoid013TjUrOCtkZkVxcnZ0Z3J1ZVUzVlJieE5DYXNzMFZnQjMrZkFtVFVYd213dVlSQkZlWEdzSGc4V1dLNzR0RGlpOVk5b2M4Tko3ZDFIdXoyMzJTeG1NQ3JIYk1MWTRBelRnQWpiOHF0OFFwTW9XM3RVdlZLTkhZWXdmeXFTcngiLCJtYWMiOiJhMTc5ZTQ0OWExNTBjNTU5OWQzMDczMDRiZTVkNzMzMmUwZDUyYzA4Mjc5NmMwN2FmYTcyNGJlZmU4MmYxZTQzIiwidGFnIjoiIn0%3D\"},\"payload\":{\"ref\":\"\\/login?ref=\\/login?ref=\\/dashboard\"},\"session\":{\"_token\":\"WTYK0yQIims02sjBktWgNHsHP36B7VnLMaZA1v5o\",\"_previous\":{\"url\":\"http:\\/\\/fathforcecom.test\\/app?ref=%2Flogin%3Fref%3D%2Flogin%3Fref%3D%2Fdashboard\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":200,\"response\":{\"view\":\"C:\\\\laragon\\\\www\\\\fathforcecom\\\\resources\\\\views\\/app.blade.php\",\"data\":[]},\"duration\":1400,\"memory\":28,\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 04:32:47'),
(43, '9b54d795-c6e9-44fa-bc84-3dfe46a10bac', '9b54d796-3e0d-44ce-b643-23444359a02d', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 05:02:44'),
(44, '9b54d796-1c11-4d1f-b1eb-552889c49ab7', '9b54d796-3e0d-44ce-b643-23444359a02d', NULL, 1, 'cache', '{\"type\":\"hit\",\"key\":\"query_config_list_all\",\"value\":{\"system\":{\"locale\":\"en\",\"currency\":\"USD\",\"per_page\":\"10\",\"timezone\":\"Asia\\/Kolkata\",\"currencies\":\"USD\",\"date_format\":\"MMMM D, YYYY\",\"time_format\":\"h:mm A\",\"footer_credit\":\"Designed with \\u2764\\ufe0f by Fathforce\",\"enable_dark_theme\":false,\"enable_mini_sidebar\":true,\"show_version_number\":true,\"enable_maintenance_mode\":false,\"maintenance_mode_message\":null}},\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 05:02:44'),
(45, '9b54d796-2f61-4755-9901-a4c4dc092ec0', '9b54d796-3e0d-44ce-b643-23444359a02d', NULL, 1, 'view', '{\"name\":\"errors::404\",\"path\":\"\\\\resources\\\\views\\/errors\\/404.blade.php\",\"data\":[\"exception\"],\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 05:02:45'),
(46, '9b54d796-34fb-44c4-99d6-c0ca925ed130', '9b54d796-3e0d-44ce-b643-23444359a02d', NULL, 1, 'view', '{\"name\":\"components.errors.layout\",\"path\":\"\\\\resources\\\\views\\/components\\/errors\\/layout.blade.php\",\"data\":[\"attributes\",\"slot\",\"__laravel_slots\"],\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 05:02:45'),
(47, '9b54d796-3ba8-4ba1-a15f-fa1b211f89db', '9b54d796-3e0d-44ce-b643-23444359a02d', NULL, 1, 'request', '{\"ip_address\":\"127.0.0.1\",\"uri\":\"\\/portfolios\\/fonts\\/unicons\\/Unicons.woff\",\"method\":\"GET\",\"controller_action\":\"Closure\",\"middleware\":[\"web\",\"user.config\"],\"headers\":{\"host\":\"fathforcecom.test\",\"connection\":\"keep-alive\",\"origin\":\"http:\\/\\/fathforcecom.test\",\"user-agent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/121.0.0.0 Safari\\/537.36\",\"accept\":\"*\\/*\",\"referer\":\"http:\\/\\/fathforcecom.test\\/portfolios\\/detail\\/931916e5-b34c-4dd1-ad77-4298fca75a55\",\"accept-encoding\":\"gzip, deflate\",\"accept-language\":\"en-US,en;q=0.9\",\"cookie\":\"XSRF-TOKEN=eyJpdiI6IjBrL1ZwcUFCdHExVUM3YmxmTm4zSGc9PSIsInZhbHVlIjoicHFhSU5qNno5RWYyT0tneXhvU21SaUtvUm5PRVNCUHpocGFGU2UydU1rbUpIMXNPSVZ1dGY1WUFtK2tZek9FK2x0QkdrTVQ3Q1hJUTcvaU5DZ3NwOEQ5bWl6M0hSOHlGMDU1dXM3cnpCMDlORHJRM2hFUnJUVjcrQ0xLNlZDbjUiLCJtYWMiOiI0MWYxYjQyM2M4MGUxYTg5ZTA2MjlmMzk3YjBlOTkxNWEzY2Q3Mjc1NDYwY2M1NjdlMTQxNWZlNGQ1ZWMyMDczIiwidGFnIjoiIn0%3D; fathforcecom_session=eyJpdiI6IlQyMmFtWmlTNHAzR3lHMVk0ZllyT0E9PSIsInZhbHVlIjoiSEJEeGRDck91aUtoS3FkRVNNYW1qOEhCSWpPRTJiL2owZHdrcG12bDJpRlN1VW00SFZoQXZUSlJ3UzZhL2RJc0RaN3VWN3FWNk42TnpiUTcrN1pLMEZrZE12Y2ZoUzhzdXYzR1EweHYxWG5rMDhUbSs2bmsxYWlUWTY2Q0J4TysiLCJtYWMiOiIzYjY1MTRhZjIwZTI5M2M2ODkxYjZlNTYzMzNjZjU4MTk4ZTUyNzA5NjQ2MjQ5M2E3MDUxY2NlNTBjMmUxZjUzIiwidGFnIjoiIn0%3D\"},\"payload\":[],\"session\":{\"_token\":\"TzjBzbcCszDuMJ7qyjXtUJhoPO2KOR9To1Tdietz\",\"_previous\":{\"url\":\"http:\\/\\/fathforcecom.test\\/portfolios\\/fonts\\/unicons\\/Unicons.woff\"},\"_flash\":{\"old\":[],\"new\":[]}},\"response_status\":404,\"response\":\"HTML Response\",\"duration\":889,\"memory\":30,\"hostname\":\"DESKTOP-NJHLKEN\"}', '2024-02-14 05:02:45');

-- --------------------------------------------------------

--
-- Table structure for table `telescope_entries_tags`
--

CREATE TABLE `telescope_entries_tags` (
  `entry_uuid` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `telescope_entries_tags`
--

INSERT INTO `telescope_entries_tags` (`entry_uuid`, `tag`) VALUES
('9b4fdb3d-9eba-4ad3-b4bb-c40aac63acb6', 'App\\Models\\User'),
('9b4fdb3d-a063-447c-b7fe-58a9f767ba26', 'Auth:1'),
('9b4fdb3d-a5a7-43e4-80d4-f903003cfc77', 'Auth:1'),
('9b4fdb3d-a603-4ad3-81d6-a8210ec09eeb', 'Auth:1'),
('9b4fdb3d-a842-43f2-888a-6ef0ec07e734', 'Auth:1'),
('9b4fdb3d-a8d9-450e-85ca-1eab82d62c30', 'Auth:1'),
('9b4fdb3d-a917-4bc6-aee8-221aeca84f9a', 'App\\Models\\Master\\PortfolioCategory'),
('9b4fdb3d-a917-4bc6-aee8-221aeca84f9a', 'Auth:1'),
('9b4fdb3d-ac26-4587-83b5-32bec8a62266', 'Auth:1'),
('9b4fdb3d-aea3-44c8-a02a-d0cb68e75455', 'Auth:1'),
('9b4fdb3d-af38-430b-a976-f35e57819aa4', 'Auth:1'),
('9b4fdb3d-af9a-4c4e-afa8-683472db42ec', 'Auth:1'),
('9b4fdb3d-aff5-4d32-9b9e-07a8852b9a6e', 'Auth:1'),
('9b4fdb3d-b0fb-4a04-a0a9-22c91d27cc3f', 'Auth:1'),
('9b4fdb3d-b158-42aa-86e8-51110c395575', 'Auth:1'),
('9b4fdb3d-b1ac-4f02-929b-ba10373f4598', 'Auth:1'),
('9b4fdb3d-b208-4f5a-8d79-adcaab417674', 'Auth:1'),
('9b4fdb3d-b27e-4ea2-8bbe-a6d6c111f40d', 'Auth:1'),
('9b4fdb3d-b2d3-49f3-a5e1-dcb7c8b9427e', 'Auth:1'),
('9b4fdb3d-b37c-4dc5-9b88-9229fb2e2620', 'Auth:1'),
('9b4fdb3d-b431-4569-b764-92aaa5a4bcb7', 'Auth:1'),
('9b4fdb3d-b712-44db-b62e-8c63e843949e', 'Auth:1'),
('9b4fdb3d-b84d-457e-8cd5-3295778d513c', 'Auth:1');

-- --------------------------------------------------------

--
-- Table structure for table `telescope_monitoring`
--

CREATE TABLE `telescope_monitoring` (
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `uuid`, `slug`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'aeaa5522-00a8-4ba6-a10c-58787a80c069', 'term-&-conditions', 'Term & Conditions', 'FathForce, where innovation meets integrity. By accessing and using our website, you agree to comply with and be bound by the following terms and conditions. The content on this site is for general information and use only, subject to change without notice. We strive to ensure the accuracy and timeliness of the information provided, but we do not guarantee its completeness or suitability for any particular purpose. Your use of any information or materials on this website is entirely at your own risk, and we shall not be liable. FathForce reserves the right to restrict access to certain areas of the website or the entire site at our discretion. The use of this website is subject to the laws of the United States. Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offense. From time to time, this website may also include links to other websites; these links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). Your use of this website and any dispute arising out of such use is subject to the laws of the United States. By continuing to browse and use this website, you are agreeing to comply with and be bound by these terms and conditions.', '2024-02-13 22:13:19', '2024-02-13 22:13:31'),
(2, '0c1aadd3-159b-4e34-a0e0-099ecef68243', 'privacy-policy', 'Privacy Policy', 'FathForce, committed to safeguarding your privacy. This Privacy Policy outlines how we collect, use, disclose, and protect your personal information when you visit our website or engage with our services. We may collect information such as your name, contact details, and demographic information for purposes such as processing your inquiries, providing services, and improving our offerings. Your data may be shared with trusted third parties for essential business operations, and we ensure they adhere to stringent privacy standards. We employ industry-standard security measures to protect your information, but we cannot guarantee absolute security. Cookies and similar technologies may be used to enhance your browsing experience. FathForce may also collect non-personal information for analytical purposes. By using our website, you consent to the terms outlined in this Privacy Policy. We reserve the right to update and modify this policy periodically, and any changes will be reflected on this page. It is advisable to review this policy regularly to stay informed about how we handle your personal information. If you have any questions or concerns regarding our privacy practices, please contact us. Your privacy matters to us at FathForce.', '2024-02-13 22:15:35', '2024-02-13 22:15:35'),
(3, '40c88783-7aa5-4103-8a3d-caea14938f5f', 'user-policy', 'User Policy', 'FathForce, where your user experience is of utmost importance to us. By accessing and using our website, you agree to comply with the following user policy. Users are expected to conduct themselves responsibly and respect the intellectual property, privacy, and rights of others while interacting with FathForce\'s online platform. Any content you submit, post, or share on our website should be lawful, respectful, and free from offensive material. FathForce reserves the right to remove or restrict access to any content that violates these guidelines. Users are responsible for maintaining the confidentiality of their account information and should promptly notify us of any unauthorized access or security breaches. We may collect user data in accordance with our Privacy Policy, and by using our website, you consent to the collection and use of such information. FathForce may use cookies to enhance user experience. We reserve the right to suspend or terminate user accounts that violate our policies or engage in any form of misuse. This user policy is subject to change, and users are encouraged to review it regularly. Your continued use of our website constitutes acceptance of this user policy. If you have any questions or concerns, please contact us. Thank you for being a valued member of the FathForce community.', '2024-02-13 22:16:43', '2024-02-13 22:19:27'),
(4, '5194292a-92f4-4843-9cce-cfe6f7d52c4e', 'copyright', 'Copyright', 'FathForce, where creativity is valued, and intellectual property rights are respected. All content and materials on this website, including but not limited to text, graphics, logos, images, audio clips, and software, are the property of FathForce or its content suppliers and are protected by United States and international copyright laws. The compilation of all content on this site is the exclusive property of FathForce and is protected by copyright as a collective work. Users are granted a limited, revocable license to access and use our website and its content for personal, non-commercial use. Unauthorized reproduction, distribution, or modification of any part of this website may violate copyright laws and result in legal consequences. FathForce welcomes and encourages users to share content responsibly, respecting the rights of the original creators. If you believe that your work has been used on our website in a way that constitutes copyright infringement, please contact us promptly. FathForce reserves the right to take appropriate action against any individual or entity found violating our copyright policies. Your compliance with these terms is appreciated as we strive to create a platform that fosters creativity and respects intellectual property rights.', '2024-02-13 22:17:49', '2024-02-13 22:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `testimonys`
--

CREATE TABLE `testimonys` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonys`
--

INSERT INTO `testimonys` (`id`, `uuid`, `slug`, `name`, `description`, `meta`, `created_at`, `updated_at`) VALUES
(1, '408104f8-86b8-45e9-a611-e8785ffd2144', 'farhan', 'farhan', '\"sangat baik, kerja bagus\"', '{\"media_token\": \"66e812da-cb13-4df2-adc9-cb5ea85ce00c\"}', '2024-02-12 19:59:11', '2024-02-12 19:59:11'),
(2, '8d32821e-4dfe-4e21-a5ec-ebc418966600', 'galan', 'Galan', '\"sangat bagus\"', '{\"media_token\": \"221fbfbf-332d-414e-b386-780695878b8c\"}', '2024-02-12 20:07:28', '2024-02-15 17:21:49'),
(3, 'bc938372-a9c6-4b51-a5ba-baaffbf9fb53', 'ucup', 'Ucup', '\"kerja cerdas\"', '{\"media_token\": \"93b0863a-b1e8-4a0e-b58a-e1a0c32955be\"}', '2024-02-12 20:08:26', '2024-02-15 17:22:03'),
(4, 'c0cc43c4-9486-4191-a4c5-ce27ad5d0f25', 'athala', 'athala', '\"kerja keras\"', '{\"media_token\": \"2757fbd6-3422-43dc-a379-ff496efcc87c\"}', '2024-02-12 20:14:37', '2024-02-15 17:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `list_id` bigint UNSIGNED DEFAULT NULL,
  `position` int NOT NULL DEFAULT '0',
  `due_date` date DEFAULT NULL,
  `due_time` time DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `archived_at` datetime DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preference` json DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pending_update` json DEFAULT NULL,
  `meta` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `email`, `username`, `email_verified_at`, `password`, `status`, `preference`, `remember_token`, `pending_update`, `meta`, `created_at`, `updated_at`) VALUES
(1, '1c8cf0d3-2de7-401a-9d56-df948519abdc', 'farhan', 'farhanmrzk@gmail.com', 'parann', '2024-02-11 02:08:27', '$2y$10$b7fdYIXg15rZ/4SAkS./6OUklvQmfHW0Dk9MUoFRyk26.BQwRp1fW', 'activated', NULL, NULL, NULL, '{\"is_default\": true}', '2024-02-11 02:08:27', '2024-02-11 02:08:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `configs`
--
ALTER TABLE `configs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `failed_login_attempts`
--
ALTER TABLE `failed_login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallerys`
--
ALTER TABLE `gallerys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `mail_templates`
--
ALTER TABLE `mail_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medias_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `medias_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_categories`
--
ALTER TABLE `page_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_companys`
--
ALTER TABLE `partner_companys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_schools`
--
ALTER TABLE `partner_schools`
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
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

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
-- Indexes for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `service_lists`
--
ALTER TABLE `service_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superioritys`
--
ALTER TABLE `superioritys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taggables`
--
ALTER TABLE `taggables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `taggables_tag_id_foreign` (`tag_id`),
  ADD KEY `taggables_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  ADD PRIMARY KEY (`sequence`),
  ADD UNIQUE KEY `telescope_entries_uuid_unique` (`uuid`),
  ADD KEY `telescope_entries_batch_id_index` (`batch_id`),
  ADD KEY `telescope_entries_family_hash_index` (`family_hash`),
  ADD KEY `telescope_entries_created_at_index` (`created_at`),
  ADD KEY `telescope_entries_type_should_display_on_index_index` (`type`,`should_display_on_index`);

--
-- Indexes for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD KEY `telescope_entries_tags_entry_uuid_tag_index` (`entry_uuid`,`tag`),
  ADD KEY `telescope_entries_tags_tag_index` (`tag`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonys`
--
ALTER TABLE `testimonys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `todos_list_id_foreign` (`list_id`),
  ADD KEY `todos_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `configs`
--
ALTER TABLE `configs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_login_attempts`
--
ALTER TABLE `failed_login_attempts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallerys`
--
ALTER TABLE `gallerys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `gallery_categories`
--
ALTER TABLE `gallery_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_templates`
--
ALTER TABLE `mail_templates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `partner_companys`
--
ALTER TABLE `partner_companys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `partner_schools`
--
ALTER TABLE `partner_schools`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolio_categories`
--
ALTER TABLE `portfolio_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_lists`
--
ALTER TABLE `service_lists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `superioritys`
--
ALTER TABLE `superioritys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taggables`
--
ALTER TABLE `taggables`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `telescope_entries`
--
ALTER TABLE `telescope_entries`
  MODIFY `sequence` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testimonys`
--
ALTER TABLE `testimonys`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `medias`
--
ALTER TABLE `medias`
  ADD CONSTRAINT `medias_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `options` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `taggables`
--
ALTER TABLE `taggables`
  ADD CONSTRAINT `taggables_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `telescope_entries_tags`
--
ALTER TABLE `telescope_entries_tags`
  ADD CONSTRAINT `telescope_entries_tags_entry_uuid_foreign` FOREIGN KEY (`entry_uuid`) REFERENCES `telescope_entries` (`uuid`) ON DELETE CASCADE;

--
-- Constraints for table `todos`
--
ALTER TABLE `todos`
  ADD CONSTRAINT `todos_list_id_foreign` FOREIGN KEY (`list_id`) REFERENCES `options` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `todos_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
