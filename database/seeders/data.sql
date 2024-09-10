-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 04:38 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rmaker_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `documents_coverletter`
--

CREATE TABLE `documents_coverletter` (
  `id` int(11) NOT NULL,
  `id_user` bigint(11) NOT NULL,
  `id_template` int(11) NOT NULL,
  `image_template` text NOT NULL,
  `doc_name` text DEFAULT NULL,
  `contact_firstname` text DEFAULT NULL,
  `contact_lastname` text DEFAULT NULL,
  `job_title` text DEFAULT NULL,
  `contact_email` text DEFAULT NULL,
  `contact_phone` text DEFAULT NULL,
  `contact_address` text DEFAULT NULL,
  `greeting` text DEFAULT NULL,
  `recipient_title` text DEFAULT NULL,
  `recipient_firstname` text DEFAULT NULL,
  `recipient_lastname` text DEFAULT NULL,
  `company_name` text DEFAULT NULL,
  `doc_body` text DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `documents_coverletter`
--

INSERT INTO `documents_coverletter` (`id`, `id_user`, `id_template`, `image_template`, `doc_name`, `contact_firstname`, `contact_lastname`, `job_title`, `contact_email`, `contact_phone`, `contact_address`, `greeting`, `recipient_title`, `recipient_firstname`, `recipient_lastname`, `company_name`, `doc_body`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '1719502393template-1.png', NULL, '123', 'huy', 'developer', 'ngoquanghuy@gmail.com', '123154844', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-07-17 18:06:59', '2024-07-17 18:06:59'),
(5, 2, 4, '1719502408template-2.png', NULL, 'Huy@', 'Quang', 'engineer', 'dfsfd@gmail.com', '121654', 's7', 'dear', 'mr', 'jym', 'hen', 'grab', '<p>hello 1234</p>', '2024-07-17 17:22:24', '2024-08-11 15:12:33'),
(7, 2, 4, '1719502408template-2.png', NULL, 'Huy', NULL, 'Engineer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<p>this is test</p>', '2024-07-17 18:18:07', '2024-07-17 18:18:07'),
(12, 2, 7, '1719502457template-5.png', NULL, 'Huy', NULL, 'Developer', 'dfsfd@gmail.com', '121654', 's7', NULL, NULL, NULL, NULL, NULL, '<p>hi, this is testtt</p>', '2024-07-23 17:35:37', '2024-07-23 17:35:37');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_06_12_161901_add_new_template', 1),
(6, '2024_06_19_184759_add_new_user', 1);

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
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `id` int(11) NOT NULL,
  `type` varchar(3) NOT NULL,
  `name` text NOT NULL,
  `image` text DEFAULT NULL,
  `html` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `type`, `name`, `image`, `html`, `created_at`, `updated_at`) VALUES
(3, 'COV', 'Cover Letter 1', '1719502393template-1.png', '<div class=\"preview-letter-content container-fluid p-0\" style=\"height:1121px\"><div class=\"row cover-letter-body h-100 m-0\">\r\n                        <div class=\"col-4 p-0\" style=\"background: #373d48; color: #fff;\"><div class=\"cover_letter-header contact_info p-4 pb-2\"><h2 class=\"contact-name mb-1\" style=\"font-size: 1.6rem;\"><span class=\"contact-firstname\">Matthew</span> <span class=\"contact-lastname\">Jones</span></h2><p class=\"contact-job job-title\" style=\"color: #afafaf; font-weight: 500;\">Account Administration Assistant</p></div><div class=\"mb-2 px-4 py-3\" style=\"background: #252930;\"><h5 class=\"m-0 p-0\">Personal Info</h5></div><div class=\"contact_information my-3 px-4\"><strong>Phone</strong><p class=\"mb-3 contact-phone\">(+84) 45698731</p><strong>Email</strong><p class=\"mb-3\"><a href=\"#\" class=\"contact-email\">example123@gmail.com</a></p><strong>Address</strong><p class=\"mb-3 contact-address\">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p></div></div>\r\n                        <div class=\"col-8 h-100 p-4\"><div class=\"recipient_information my-2 mb-4\"><p class=\"my-1 recipient-name\"><strong class=\"recipient-firstname\">Jenkins</strong> <strong class=\"recipient-lastname\">Hawk</strong></p><p class=\"my-1 company-name\">Maste Foods</p></div><p class=\"my-2\"><span class=\"greeting\">Dear</span> <span class=\"recipient-title-name\">Mrs.</span><span class=\"recipient-firstname\">Jenkins</span>,</p><div class=\"mb-3 body-content\">I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.\r\n                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.\r\n                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.\r\n                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.</div><i>Kind regards</i><p class=\"my-1 contact-name\"><strong class=\"contact-firstname\">Matthew</strong> <strong class=\"contact-lastname\">Jones</strong></p></div></div></div>', '2024-06-27 08:33:13', '2024-06-27 08:56:14'),
(4, 'COV', 'Cover Letter 2', '1719502408template-2.png', '<div class=\"preview-letter-content container-fluid h-auto\"><div class=\"cover_letter-header contact_info\"><h3 class=\"contact-name mb-1\" style=\"font-size: 1.6rem;\"><spanclass=\"contact-firstname\">Matthew</span> <spanclass=\"contact-lastname\">Jones</span></h3><p class=\"contact-job job-title\" style=\"color: #7a7a7a; font-weight: 500;\">Account Administration Assistant</p></div><div class=\"row cover-letter-body h-100\">\r\n                        <div class=\"col-4\"><div class=\"my-2\" style=\"border-bottom: 1px solid #8f8f8f;\"><h5><i class=\"fa fa-user me-2\"></i> Personal Info</h5></div><div class=\"contact_information my-4\"><strong>Phone</strong><p class=\"mb-3 contact-phone\">(+84) 45698731</p><strong>Email</strong><p class=\"mb-3\"><a href=\"#\"class=\"contact-email\">example123@gmail.com</a></p><strong>Address</strong><p class=\"mb-3 contact-address\">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p></div></div>\r\n                        <div class=\"col-8 h-100\"><div class=\"recipient_information my-2 mb-4\"><p class=\"my-1 recipient-name\"><strong class=\"recipient-firstname\">Jenkins</strong> <strong class=\"recipient-lastname\">Hawk</strong></p><p class=\"my-1 company-name\">Maste Foods</p></div><p class=\"my-2\"><span class=\"greeting\">Dear</span> <spanclass=\"recipient-title-name\">Mrs.</span><span class=\"recipient-firstname\">Jenkins</span>,</p><div class=\"mb-3 body-content\">I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.\r\n                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.\r\n                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.\r\n                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.</div><i>Kind regards</i><p class=\"my-1 contact-name\"><strong class=\"contact-firstname\">Matthew</strong> <strong class=\"contact-lastname\">Jones</strong></p></div></div></div>', '2024-06-27 08:33:28', '2024-06-27 08:56:37'),
(5, 'COV', 'Cover Letter 3', '1719502423template-3.png', '<div class=\"preview-letter-content container-fluid\"><div class=\"cover_letter-header contact_info\"><h3 class=\"contact-name mb-1\" style=\"font-size: 1.6rem;\"><span class=\"contact-firstname\">Matthew</span> <span class=\"contact-lastname\">Jones</span></h3><p class=\"contact-job job-title\" style=\"color: #7a7a7a; font-weight: 500;\">Account Administration Assistant</p></div><div class=\"row cover-letter-body h-100\">\r\n                        <div class=\"col-8 h-100\"><div class=\"recipient_information my-2 mb-4\"><p class=\"my-1 recipient-name\"><strong class=\"recipient-firstname\">Jenkins</strong> <strong class=\"recipient-lastname\">Hawk</strong></p><p class=\"my-1 company-name\">Maste Foods</p></div><p class=\"my-2\"><span class=\"greeting\">Dear</span> <span class=\"recipient-title-name\">Mrs.</span> <span class=\"recipient-firstname\">Jenkins</span>,</p><div class=\"mb-3 body-content\">I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.\r\n                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.\r\n                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.\r\n                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.</div><i>Kind regards</i><p class=\"my-1 contact-name\"><strong class=\"contact-firstname\">Matthew</strong> <strong class=\"contact-lastname\">Jones</strong></p></div>\r\n                        <div class=\"col-4\"><div class=\"my-2\" style=\"border-bottom: 1px solid #8f8f8f;\"><h5><i class=\"fa fa-user me-2\"></i> Personal Info</h5></div><div class=\"contact_information my-4\"><strong>Phone</strong><p class=\"mb-3 contact-phone\">(+84) 45698731</p><strong>Email</strong><p class=\"mb-3\"><a href=\"#\" class=\"contact-email\">example123@gmail.com</a></p><strong>Address</strong><p class=\"mb-3 contact-address\">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p></div></div></div></div>', '2024-06-27 08:33:43', '2024-06-27 08:57:01'),
(6, 'COV', 'Cover Letter 4', '1719502440template-4.png', '<div class=\"preview-letter-content container-fluid p-0\" style=\"height:925px\">\r\n                        <div class=\"row m-0 p-0\"><div class=\"col p-5 pb-3\" style=\"background: #373d48; color: #fff; height: fit-content;\"><div class=\"cover_letter-header contact_info\"><h3 class=\"contact-name mb-1\" style=\"font-size: 1.6rem;\"><span class=\"contact-firstname\">Matthew</span> <span class=\"contact-lastname\">Jones</span></h3><p class=\"contact-job job-title\" style=\"color: #afafaf; font-weight: 500;\">Account Administration Assistant</p></div><div class=\"contact_information\"><p class=\"mb-1 p-0\"><strong>Phone:</strong> <span class=\"contact-phone\">(+84) 45698731</span></p><p class=\"mb-1 p-0\"><strong>Email:</strong> <span class=\"\"><a href=\"#\" class=\"contact-email\">example123@gmail.com</a></span></p><p class=\"mb-1 p-0\"><strong>Address:</strong> <span class=\"contact-address\">Nguyen Huu Tho, District 7, Ho Chi Minh City.</span></p></div></div></div>\r\n                        <div class=\"row m-0 p-0 h-100\"><div class=\"col h-100 p-5 pt-3\"><div class=\"recipient_information mb-4\"><p class=\"my-1 recipient-name\"><strong class=\"recipient-firstname\">Jenkins</strong> <strong class=\"recipient-lastname\">Hawk</strong></p><p class=\"my-1 company-name\">Maste Foods</p></div><p class=\"my-2\"><span class=\"greeting\">Dear</span> <span class=\"recipient-title-name\">Mrs.</span><span class=\"recipient-firstname\">Jenkins</span>,</p><div class=\"mb-3 body-content\">I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.\r\n                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.\r\n                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.\r\n                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.</div><i>Kind regards</i><p class=\"my-1 contact-name\"><strong class=\"contact-firstname\">Matthew</strong> <strong class=\"contact-lastname\">Jones</strong></p></div></div></div>', '2024-06-27 08:34:00', '2024-06-27 08:57:52'),
(7, 'COV', 'Cover Letter 5', '1719502457template-5.png', '<div class=\"preview-letter-content container-fluid\"><div class=\"cover_letter-header contact_info\"><h3 class=\"contact-name mb-1\" style=\"font-size: 1.6rem;\"><span class=\"contact-firstname\">Matthew</span> <span class=\"contact-lastname\">Jones</span></h3><p class=\"contact-job job-title\" style=\"color: #7a7a7a; font-weight: 500;\">Account Administration Assistant</p></div><div class=\"row cover-letter-body h-100\">\r\n                        <div class=\"col-4\"><div class=\"my-2\" style=\"border-bottom: 1px solid #8f8f8f;\"><h5>Personal Info</h5></div><div class=\"contact_information my-4\"><strong>Phone</strong><p class=\"mb-3 contact-phone\">(+84) 45698731</p><strong>Email</strong><p class=\"mb-3\"><a href=\"#\"class=\"contact-email\">example123@gmail.com</a></p><strong>Address</strong><p class=\"mb-3 contact-address\">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p></div></div>\r\n                        <div class=\"col-8 h-100\"><div class=\"recipient_information my-2 mb-4\"><p class=\"my-1 recipient-name\"><strong class=\"recipient-firstname\">Jenkins</strong> <strong class=\"recipient-lastname\">Hawk</strong></p><p class=\"my-1 company-name\">Maste Foods</p></div><p class=\"my-2\"><span class=\"greeting\">Dear</span> <spanclass=\"recipient-title-name\">Mrs.</span><span class=\"recipient-firstname\">Jenkins</span>,</p><div class=\"mb-3 body-content\">I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.\r\n                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.\r\n                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.\r\n                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.</div><i>Kind regards</i><p class=\"my-1 contact-name\"><strong class=\"contact-firstname\">Matthew</strong> <strong class=\"contact-lastname\">Jones</strong></p></div></div></div>', '2024-06-27 08:34:17', '2024-06-27 08:58:10'),
(8, 'COV', 'Cover Letter 6', '1719502775berlin-cover-letter-templates.jpg', '<div class=\"preview-letter-content container-fluid\" style=\"height: 1000px;\"><div class=\"cover_letter-header contact_info\"><h3 class=\"contact-name mb-1\" style=\"font-size: 2.2rem;\"><span class=\"contact-firstname\">Matthew</span><br><span class=\"contact-lastname\">Jones</span></h3><p class=\"contact-job job-title\" style=\"color: #7a7a7a; font-weight: 500;\">Account Administration Assistant</p></div><div class=\"row cover-letter-body h-100\" style=\"border-top: 1px solid #797979;\">\r\n                        <div class=\"col-4 pt-2\" style=\"border-right: 1px solid #797979;\"><div class=\"recipient_information my-2\"><strong>To</strong><p class=\"my-1 recipient-name\"><span class=\"recipient-title-name\">Mrs.</span> <span class=\"recipient-firstname\">Jenkins</span> <span class=\"recipient-lastname\">Hawk</span></p><p class=\"my-1 company-name\">Maste Foods</p></div><div class=\"contact_information my-4\"><strong>From</strong><p class=\"my-1 contact-name\"><span class=\"contact-firstname\">Matthew</span> <span class=\"contact-lastname\">Jones</span></p><p class=\"my-1 job-title\">Account Administration Assistant</p><p class=\"my-1 contact-address\">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p><p class=\"my-1 contact-phone\">(+84) 45698731</p><p class=\"my-1\"><a href=\"#\" class=\"contact-email\">example123@gmail.com</a></p></div></div>\r\n                        <div class=\"col-8 pt-2 ps-3 h-100\"><p class=\"my-2\"><span class=\"greeting\">Dear</span> <span class=\"recipient-title-name\">Mrs.</span> <span class=\"recipient-firstname\">Jenkins</span>,</p><div class=\"mb-3 body-content\">I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.\r\n                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.\r\n                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.\r\n                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.</div><i>Yours sincerely</i><p class=\"my-1 contact-name\"><strong class=\"contact-firstname\">Matthew</strong> <strong class=\"contact-lastname\">Jones</strong></p></div></div></div>', '2024-06-27 08:39:35', '2024-06-27 09:00:24'),
(9, 'COV', 'Cover Letter 7', '1719502794new-york-cover-letter-templates.jpg', '<div class=\"preview-letter-content container-fluid\" style=\"height:1121px\"><div class=\"row cover-letter-body h-100\">\r\n                        <div class=\"col-4 text-end pe-3\" style=\"border-right: 1px solid #797979;\"><div class=\"cover_letter-header contact_info mb-5\"><h3 class=\"contact-name mb-1\" style=\"font-size: 1.6rem;\"><span class=\"contact-firstname\">Matthew</span><br><span class=\"contact-lastname\">Jones</span></h3><p class=\"contact-job job-title\" style=\"color: #7a7a7a; font-weight: 500;\">Account Administration Assistant</p></div><div class=\"recipient_information my-2\"><strong>To</strong><p class=\"my-1 recipient-name\"><span class=\"recipient-title-name\">Mrs.</span> <span class=\"recipient-firstname\">Jenkins</span> <span class=\"recipient-lastname\">Hawk</span></p><p class=\"my-1 company-name\">Maste Foods</p></div><div class=\"contact_information my-4\"><strong>From</strong><p class=\"my-1 contact-name\"><span class=\"contact-firstname\">Matthew</span> <span class=\"contact-lastname\">Jones</span></p><p class=\"my-1 job-title\">Account Administration Assistant</p><p class=\"my-1 contact-address\">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p><p class=\"my-1 contact-phone\">(+84) 45698731</p><p class=\"my-1\"><a href=\"#\" class=\"contact-email\">example123@gmail.com</a></p></div></div>\r\n                        <div class=\"col-8 h-100 ps-3\"><div class=\"p-5 m-3\"></div><p class=\"my-2\"><span class=\"greeting\">Dear</span> <span class=\"recipient-title-name\">Mrs.</span> <span class=\"recipient-firstname\">Jenkins</span>,</p><div class=\"mb-3 body-content\">I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.\r\n                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.\r\n                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.\r\n                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.</div><i>Yours sincerely</i><p class=\"my-1 contact-name\"><strong class=\"contact-firstname\">Matthew</strong> <strong class=\"contact-lastname\">Jones</strong></p></div></div></div>', '2024-06-27 08:39:54', '2024-06-27 09:01:44'),
(10, 'COV', 'Cover Letter 8', '1719502811stockholm-cover-letter-templates.jpg', '<div class=\"preview-letter-content container-fluid\" style=\"height:1121px\"><div class=\"cover_letter-header contact_info\"><h3 class=\"contact-name mb-1\" style=\"font-size: 1.6rem;\"><span class=\"contact-firstname\">Matthew</span> <span class=\"contact-lastname\">Jones</span></h3><p class=\"contact-job job-title\" style=\"color: #7a7a7a; font-weight: 500;\">Account Administration Assistant</p></div><div class=\"row cover-letter-body h-100\">\r\n                        <div class=\"col-8 h-100\"><p class=\"my-2\"><span class=\"greeting\">Dear</span> <span class=\"recipient-title-name\">Mrs.</span> <span class=\"recipient-firstname\">Jenkins</span>,</p><div class=\"mb-3 body-content\">I have recently been informed of a new position available at your company as an Account Administration Assistant and I attach to this letter my resume as part of my application for this role.\r\n                                                As can be seen in my resume, I have years of experience in administration and with client relations which I believe are central to any business and therefore I dedicate a great deal of my time to improving communications and human relations within the workplace.\r\n                                                I also often do new courses in IT and business administration related subjects in order to keep up-to-date with the latest methods and technologies available to carry out my tasks in client account administration support and optimize systems and processes throughout the office.\r\n                                                In addition to my vast experience and varied skills, I feel I would be able to offer new ideas and a fresh perspective to your company and look forward to our future collaboration. Thank you for considering my application. For any further details or references, do not hesitate to contact me.</div><i>Yours sincerely</i><p class=\"my-1 contact-name\"><strong class=\"contact-firstname\">Matthew</strong> <strong class=\"contact-lastname\">Jones</strong></p></div>\r\n                        <div class=\"col-4\"><div class=\"recipient_information my-2\"><strong>To</strong><p class=\"my-1 company-name\">Maste Foods</p><p class=\"my-1 recipient-name\"><span class=\"recipient-title-name\">Mrs.</span> <span class=\"recipient-firstname\">Jenkins</span> <span class=\"recipient-lastname\">Hawk</span></p></div><div class=\"contact_information my-4\"><strong>From</strong><p class=\"my-1 contact-name\"><span class=\"contact-firstname\">Matthew</span> <span class=\"contact-lastname\">Jones</span></p><p class=\"my-1 job-title\">Account Administration Assistant</p><p class=\"my-1 contact-address\">Nguyen Huu Tho, District 7, Ho Chi Minh City.</p><p class=\"my-1 contact-phone\">(+84) 45698731</p><p class=\"my-1\"><a href=\"#\" class=\"contact-email\">example123@gmail.com</a></p></div></div></div></div>', '2024-06-27 08:40:11', '2024-06-27 09:02:09'),
(13, 'RES', 'Resume 1', '1719507715template-cv-1.jpg', '<div class=\"preview-resume-content container-fluid p-0\" style=\"height:1121px\">\r\n                                <div class=\"row resume-body h-100 m-0\">\r\n                                    <div class=\"col-4 p-0\" style=\"background: #373d48; color: #fff;\">\r\n                                        <div class=\"photo-container d-flex justify-content-center align-items-center\">\r\n                                            <div class=\"preview-resume-photo\" style=\"background: url(../../templates/photo-users/default_photo.png) center / cover;\"></div>\r\n                                            <style>.preview-resume-photo{width: 160px;height: 160px;margin: 40px 0 20px 0;border-radius: 50%;}</style>\r\n                                        </div>\r\n                                        <div class=\"side-informations ps-5\">\r\n                                            <div class=\"info-section mb-3\">\r\n                                                <div class=\"mb-2 py-2\" style=\"border-bottom: 2px solid #fff;\">\r\n                                                    <h4 class=\"section-title m-0 p-0\">Contact</h4>\r\n                                                </div>\r\n                                                <div class=\"contact-information my-3 pe-4\">\r\n                                                    <strong>Phone</strong>\r\n                                                    <p class=\"mb-3 contact-phone\">(+84) 45698731</p>\r\n                                                    <strong>Email</strong>\r\n                                                    <p class=\"mb-3 contact-email\">example123@gmail.com</p>\r\n                                                    <strong>Address</strong>\r\n                                                    <p class=\"mb-3 contact-address\">District 7, HCM City.</p>\r\n                                                </div>\r\n                                            </div>\r\n                                            <div class=\"info-section mb-3\">\r\n                                                <div class=\"mb-2 py-2\" style=\"border-bottom: 2px solid #fff;\">\r\n                                                    <h4 class=\"section-title m-0 p-0\">Education</h4>\r\n                                                </div>\r\n                                                <div class=\"edu-information my-3 pe-4\">\r\n                                                    <ul class=\"list-edu-info\" style=\"list-style: none; padding: 0;\">\r\n                                                        <li>\r\n                                                            <p class=\" m-0 edu-year\">2008</p>\r\n                                                            <strong class=\"job-position\">Enter Your Degree</strong>\r\n                                                            <p class=\"uni-name\">University/College</p>\r\n                                                        </li>\r\n                                                        <li>\r\n                                                            <p class=\" m-0 edu-year\">2008</p>\r\n                                                            <strong class=\"job-position\">Enter Your Degree</strong>\r\n                                                            <p class=\"uni-name\">University/College</p>\r\n                                                        </li>\r\n                                                    </ul>\r\n                                                </div>\r\n                                            </div>\r\n                                            <div class=\"info-section mb-3\">\r\n                                                <div class=\"mb-2 py-2\" style=\"border-bottom: 2px solid #fff;\">\r\n                                                    <h4 class=\"section-title m-0 p-0\">Expertise</h4>\r\n                                                </div>\r\n                                                <div class=\"expertise-information my-3 pe-4\">\r\n                                                    <ul class=\"list-expertises-info\" style=\"padding-left: 20px;\">\r\n                                                        <li>UI/UX</li>\r\n                                                        <li>Visual Design</li>\r\n                                                        <li>Wireframes</li>\r\n                                                        <li>Storyboards</li>\r\n                                                        <li>User Flows</li>\r\n                                                        <li>Process Flows</li>\r\n                                                    </ul>\r\n                                                </div>\r\n                                            </div>\r\n                                            <div class=\"info-section mb-3\">\r\n                                                <div class=\"mb-2 py-2\" style=\"border-bottom: 2px solid #fff;\">\r\n                                                    <h4 class=\"section-title m-0 p-0\">Language</h4>\r\n                                                </div>\r\n                                                <div class=\"lang-information my-3 pe-4\">\r\n                                                    <p class=\"mb-1\"><strong>English</strong></p>\r\n                                                    <p class=\"mb-1\"><strong>Spanish</strong></p>\r\n                                                </div>\r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n                                    <div class=\"col-8 h-100 p-4\">\r\n                                        <div class=\"resume-header pt-4 pb-2\">\r\n                                            <h1 class=\"contact-name mb-1\" style=\"font-size: 2.3rem; color: #373d48;\"><span class=\"contact-firstname\" style=\"font-weight: 700;\">Matthew</span> <span class=\"contact-lastname\">Jones</span></h1>\r\n                                            <p class=\"contact-job job-title mb-2\" style=\"color: #373d48; font-size: 1.2rem; font-weight: 400; letter-spacing: 2px\">Account Administration Assistant</p>\r\n                                            <p class=\"intro-summary\">Lorem ipsum, dolor sit amet consectetur adipisicing elit. A, vel odio. Cupiditate blanditiis ratione ipsam expedita quisquam nam. Quasi dicta hic nisi esse autem accusamus suscipit. Nam numquam tempora eum!</p>\r\n                                        </div>\r\n\r\n                                        <div class=\"res-body\" style=\"color: #373d48;\">\r\n                                            <div class=\"info-section mb-3\">\r\n                                                <div class=\"mb-2 py-2\" style=\"border-bottom: 2px solid #373d48;\">\r\n                                                    <h4 class=\"section-title m-0 p-0\">Experience</h4>\r\n                                                </div>\r\n                                                <div class=\"exp-information my-3 pe-4\">\r\n                                                    <ul class=\"list-exp-info\" style=\"list-style-type: circle;padding-left: 20px;\">\r\n                                                        <li>\r\n                                                            <div class=\"exp-description position-relative\">\r\n                                                                <strong class=\" m-0\"><span class=\"exp-start-year\">2019</span> - <span class=\"exp-stop-year\">2022</span></strong>\r\n                                                                <p class=\"mb-0\"><span class=\"exp-company-name\">Company Name</span> | <span class=\"company-address\">123 Anywhere St., Any City</span></p>\r\n                                                                <strong class=\"job-position mb-0\" style=\"font-size: 1.1rem;\">Job position here</strong>\r\n                                                                <p class=\"position-description mb-4 d-inline-block\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p>\r\n                                                                <div class=\"process-line position-absolute\" style=\"background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;\"></div>\r\n                                                            </div>\r\n                                                        </li>\r\n                                                        <li>\r\n                                                            <div class=\"exp-description position-relative\">\r\n                                                                <strong class=\" m-0\"><span class=\"exp-start-year\">2017</span> - <span class=\"exp-stop-year\">2019</span></strong>\r\n                                                                <p class=\"mb-0\"><span class=\"exp-company-name\">Company Name</span> | <span class=\"company-address\">123 Anywhere St., Any City</span></p>\r\n                                                                <strong class=\"job-position mb-0\" style=\"font-size: 1.1rem;\">Job position here</strong>\r\n                                                                <p class=\"position-description mb-4 d-inline-block\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p>\r\n                                                                <div class=\"process-line position-absolute\" style=\"background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;\"></div>\r\n                                                            </div>\r\n                                                        </li>\r\n                                                        <li>\r\n                                                            <div class=\"exp-description position-relative\">\r\n                                                                <strong class=\" m-0\"><span class=\"exp-start-year\">2015</span> - <span class=\"exp-stop-year\">2017</span></strong>\r\n                                                                <p class=\"mb-0\"><span class=\"exp-company-name\">Company Name</span> | <span class=\"company-address\">123 Anywhere St., Any City</span></p>\r\n                                                                <strong class=\"job-position mb-0\" style=\"font-size: 1.1rem;\">Job position here</strong>\r\n                                                                <p class=\"position-description mb-4 d-inline-block\">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis amet sit molestias consectetur deleniti quisquam, eum, necessitatibus hic distinctio eaque debitis quam incidunt nihil quod dolore facilis optio ipsa. Necessitatibus.</p>\r\n                                                                <div class=\"process-line position-absolute\" style=\"background-color:#373d48; width:2px; height: calc(100% - 5px); top: 15px; left: -15px;\"></div>\r\n                                                            </div>\r\n                                                        </li>\r\n                                                    </ul>\r\n                                                </div>\r\n                                            </div>\r\n                                            <div class=\"info-section mb-3\">\r\n                                                <div class=\"mb-2 py-2\" style=\"border-bottom: 2px solid #373d48;\">\r\n                                                    <h4 class=\"section-title m-0 p-0\">Reference</h4>\r\n                                                </div>\r\n                                                <div class=\"reference-information my-3\">\r\n                                                    <ul class=\"list-ref-info d-flex flex-wrap justify-content-between\" style=\"list-style: none; padding: 0;\">\r\n                                                        <li>\r\n                                                            <div class=\"ref-detail pe-2\" style=\"width: 225px;\">\r\n                                                                <p class=\"m-0 contact-name\"><strong class=\"contact-firstname\">Name</strong> <strong class=\"contact-lastname\">Surname</strong></p>\r\n                                                                <p class=\"m-0\"><span class=\"ref-position\">Job position</span>, <span class=\"ref-company-name\">Company Name</span></p>\r\n                                                                <p class=\"ref-contact m-0\"><strong>Phone:</strong> <span class=\"ref-contact-phone\">123456789</span></p>\r\n                                                                <p class=\"ref-contact m-0\"><strong>Email:</strong> <span class=\"ref-contact-email\">hello@gmail.com</span></p>\r\n                                                            </div>\r\n                                                        </li>\r\n                                                        <li>\r\n                                                            <div class=\"ref-detail pe-2\" style=\"width: 225px;\">\r\n                                                                <p class=\"m-0 contact-name\"><strong class=\"contact-firstname\">Name</strong> <strong class=\"contact-lastname\">Surname</strong></p>\r\n                                                                <p class=\"m-0\"><span class=\"ref-position\">Job position</span>, <span class=\"ref-company-name\">Company Name</span></p>\r\n                                                                <p class=\"ref-contact m-0\"><strong>Phone:</strong> <span class=\"ref-contact-phone\">123456789</span></p>\r\n                                                                <p class=\"ref-contact m-0\"><strong>Email:</strong> <span class=\"ref-contact-email\">hello@gmail.com</span></p>\r\n                                                            </div>\r\n                                                        </li>\r\n                                                    </ul>\r\n                                                </div>\r\n                                            </div>\r\n                                        </div>\r\n                                    </div>\r\n                                </div>\r\n                            </div>', '2024-06-27 10:01:55', '2024-07-06 08:17:32'),
(14, 'RES', 'Resume 2', '1719507774template-cv-2.jpg', NULL, '2024-06-27 10:02:55', '2024-06-27 10:02:55'),
(15, 'RES', 'Resume 3', '1719507791template-cv-3.jpg', NULL, '2024-06-27 10:03:11', '2024-06-27 10:03:11'),
(16, 'RES', 'Resume 4', '1719507815template-cv-4.jpg', NULL, '2024-06-27 10:03:35', '2024-06-27 10:03:35'),
(17, 'RES', 'Resume 5', '1719507836dublin-resume-templates.jpg', NULL, '2024-06-27 10:03:56', '2024-06-27 10:03:56'),
(18, 'RES', 'Resume 6', '1719507894stockholm-resume-templates.jpg', NULL, '2024-06-27 10:04:54', '2024-06-27 10:04:54'),
(19, 'RES', 'Resume 7', '1719507917sydney-resume-templates.jpg', NULL, '2024-06-27 10:05:17', '2024-06-27 10:05:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dark_mode` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `level`, `image`, `firstname`, `lastname`, `email`, `email_verified_at`, `phone`, `address`, `password`, `google_id`, `remember_token`, `dark_mode`, `created_at`, `updated_at`) VALUES
(1, 'user', NULL, 'Huy Ngo', 'Quang', 'ngoquanghuy59@gmail.com', NULL, NULL, '123654', NULL, '101323970479320718247', NULL, 1, '2024-06-26 13:22:36', '2024-08-16 10:52:15'),
(2, 'user', '17237424763d-illustration-human-avatar-profile.jpg', 'Huy', 'Ngô Quang', 'huyquang0310@gmail.com', NULL, '1234123', '12 Nguyen Huu Tho, HCM', NULL, '115515907813577778476', NULL, 1, '2024-06-26 13:24:28', '2024-08-16 10:40:13'),
(3, 'user', NULL, 'Bi', 'Double', 'doublebi.217@gmail.com', NULL, NULL, NULL, NULL, '105894185308288957897', NULL, 0, '2024-06-27 01:47:14', '2024-06-27 01:47:14'),
(1719508066, 'admin', NULL, 'Admin', '1', 'admin1@gmail.com', NULL, '(+1) 123456', '123654', '$2y$12$U5JfaJ5/.vjt3xk2kKVsfO/CYJAQ0y3/SwxeTup6BYe.XtL4mIyl.', NULL, NULL, 1, '2024-06-27 10:07:46', '2024-08-16 11:20:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `documents_coverletter`
--
ALTER TABLE `documents_coverletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `templates`
--
ALTER TABLE `templates`
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
-- AUTO_INCREMENT for table `documents_coverletter`
--
ALTER TABLE `documents_coverletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1719508067;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
