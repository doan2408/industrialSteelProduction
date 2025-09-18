-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 15, 2025 at 08:05 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/* !40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/* !40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/* !40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/* !40101 SET NAMES utf8mb4 */;

--
-- Database: `htc`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

DROP TABLE IF EXISTS `password_reminders`;
CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  KEY `password_reminders_email_index` (`email`) USING BTREE,
  KEY `password_reminders_token_index` (`token`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

DROP TABLE IF EXISTS `tbl_brand`;
CREATE TABLE IF NOT EXISTS `tbl_brand` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `name`, `slug`, `status`, `created_at`, `updated_at`, `avatar`) VALUES
(1, 'jfe', 'jfe-2', 1, '2025-08-08 04:28:44', '2025-08-08 04:28:44', '/public_folder/files_upload/202508/313-doitac2-120x111.webp'),
(2, 'ansteel', 'ansteel-7', 1, '2025-08-08 04:28:54', '2025-08-08 04:28:54', '/public_folder/files_upload/202508/106-doitac4-120x111.webp'),
(3, 'doi tac 5', 'doi-tac-5-1', 1, '2025-08-08 04:28:59', '2025-08-08 04:30:03', '/public_folder/files_upload/202508/911-doitac5.webp'),
(4, 'vina', 'vina-7', 1, '2025-08-08 04:29:24', '2025-08-08 04:29:24', '/public_folder/files_upload/202508/210-vinakyoei-logo201381211120.webp'),
(5, 'tis', 'tis-4', 1, '2025-08-08 04:29:33', '2025-08-08 04:29:33', '/public_folder/files_upload/202508/295-tisco-logo2013812112334.webp'),
(6, 'vps', 'vps-8', 1, '2025-08-08 04:30:17', '2025-08-08 04:30:17', '/public_folder/files_upload/202508/451-vps-logo201381211427.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

DROP TABLE IF EXISTS `tbl_contact`;
CREATE TABLE IF NOT EXISTS `tbl_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `phone` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `name`, `phone`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'regg', '435345345', 'rgerg@gmail.com', 'dfgdfg', '2025-05-21 03:20:50', '2025-05-21 03:20:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

DROP TABLE IF EXISTS `tbl_customer`;
CREATE TABLE IF NOT EXISTS `tbl_customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `name`, `slug`, `avatar`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ong thep', 'ong-thep-1', '/public_folder/files_upload/202508/697-logo-190.webp', 1, '2025-08-08 04:38:32', '2025-08-08 04:38:32'),
(2, 'vgs', 'vgs-9', '/public_folder/files_upload/202508/851-vgs-logor.webp', 1, '2025-08-08 04:38:43', '2025-08-08 04:38:43'),
(3, 'ke', 'ke-9', '/public_folder/files_upload/202508/410-ke.webp', 1, '2025-08-08 04:39:04', '2025-08-08 04:39:04'),
(4, 'ith', 'ith-2', '/public_folder/files_upload/202508/651-logo.webp', 1, '2025-08-08 04:39:24', '2025-08-08 04:39:46'),
(5, 'savipie', 'savipie-4', '/public_folder/files_upload/202508/500-logo-savipipe.webp', 1, '2025-08-08 04:39:38', '2025-08-08 04:39:38');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_department`
--

DROP TABLE IF EXISTS `tbl_department`;
CREATE TABLE IF NOT EXISTS `tbl_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_department`
--

INSERT INTO `tbl_department` (`id`, `name`, `phone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PKD1', '0934.623.336', 1, '2025-08-11 07:42:43', '2025-08-11 07:42:43'),
(2, 'PKD2', '0936.281.836', 1, '2025-08-11 07:42:52', '2025-08-11 07:42:52'),
(3, 'PKD3', '0906.211.236', 1, '2025-08-11 07:42:59', '2025-08-11 07:42:59'),
(4, 'PKD4', '0934.581.136', 1, '2025-08-11 07:43:06', '2025-08-11 07:43:06'),
(5, 'Phòng nhân sự', '0904.171.560', 1, '2025-08-11 07:43:14', '2025-08-11 07:43:14'),
(6, 'Phòng KSC', '0916.161.595', 1, '2025-08-11 07:43:23', '2025-08-11 07:43:23'),
(7, 'Phòng TCKT', '0912.465.444', 1, '2025-08-11 07:43:30', '2025-08-11 07:43:30'),
(8, 'Phòng kỹ thuật', '0975.622.799', 1, '2025-08-11 07:43:37', '2025-08-11 07:43:37'),
(9, 'Phòng R&D', '0913.239.535', 1, '2025-08-11 07:43:46', '2025-08-11 07:43:46'),
(10, 'Phòng kho 1', '0987.885.630', 1, '2025-08-11 07:43:57', '2025-08-11 07:43:57'),
(11, 'Phòng kho 2', '0931.506.473', 1, '2025-08-11 07:44:05', '2025-08-11 07:44:05'),
(12, 'Phòng vận tải', '0931.672.436', 1, '2025-08-11 07:44:15', '2025-08-11 07:44:15'),
(13, 'Phòng quan hệ cộng đồng', '0913.239.536', 1, '2025-08-11 07:44:25', '2025-08-11 07:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lang`
--

DROP TABLE IF EXISTS `tbl_lang`;
CREATE TABLE IF NOT EXISTS `tbl_lang` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_default` tinyint(4) DEFAULT '0',
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_lang`
--

INSERT INTO `tbl_lang` (`id`, `name`, `code`, `is_default`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Việt Nam', 'vi', 1, 1, '2019-03-15 21:20:04', '2019-03-16 00:21:46'),
(2, 'English', 'en', 0, 1, '2019-03-15 21:20:38', '2019-03-15 21:20:38'),
(4, 'Japanese', 'ja', 0, 1, '2022-08-22 03:15:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

DROP TABLE IF EXISTS `tbl_menu`;
CREATE TABLE IF NOT EXISTS `tbl_menu` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `parent_id` int(10) DEFAULT NULL,
  `position` int(10) DEFAULT '1',
  `group_id` int(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `name`, `url`, `parent_id`, `position`, `group_id`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', NULL, 0, 1, 1, '2025-08-09 03:48:55', '2025-08-09 03:48:55'),
(2, 'Về chúng tôi', NULL, 0, 2, 1, '2025-08-09 03:49:05', '2025-08-09 03:49:05'),
(3, 'Sản phẩm', NULL, 0, 3, 1, '2025-08-09 03:49:10', '2025-08-09 03:49:10'),
(4, 'Dịch vụ', NULL, 0, 4, 1, '2025-08-09 03:49:15', '2025-08-09 03:50:27'),
(5, 'Tin tức', NULL, 0, 5, 1, '2025-08-09 03:49:20', '2025-08-09 03:50:27'),
(6, 'Liên hệ', NULL, 0, 6, 1, '2025-08-09 03:49:25', '2025-08-09 03:50:27'),
(7, 'Thép cuộn cán nóng', NULL, 3, 1, 1, '2025-08-09 03:49:34', '2025-08-09 03:50:27'),
(8, 'Thép tấm cán nóng', NULL, 3, 2, 1, '2025-08-09 03:49:42', '2025-08-09 03:50:30'),
(9, 'Thép tấm chống trượt', NULL, 3, 3, 1, '2025-08-09 03:49:50', '2025-08-09 03:50:31'),
(10, 'Thép định hình nguội', NULL, 3, 4, 1, '2025-08-09 03:49:57', '2025-08-09 03:50:33'),
(11, 'Thép U dập - cừ dập', NULL, 10, 1, 1, '2025-08-09 03:50:08', '2025-08-09 03:50:45'),
(12, 'Thép C dập', NULL, 10, 2, 1, '2025-08-09 03:50:17', '2025-08-09 03:50:48'),
(13, 'Thép góc dập', NULL, 10, 3, 1, '2025-08-09 03:50:22', '2025-08-09 03:50:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu_group`
--

DROP TABLE IF EXISTS `tbl_menu_group`;
CREATE TABLE IF NOT EXISTS `tbl_menu_group` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_menu_group`
--

INSERT INTO `tbl_menu_group` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Menu chính', '2025-08-09 03:48:49', '2025-08-09 03:48:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

DROP TABLE IF EXISTS `tbl_news`;
CREATE TABLE IF NOT EXISTS `tbl_news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` int(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `seo_id` bigint(20) DEFAULT NULL,
  `timepost` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `user_id` tinyint(10) DEFAULT '0',
  `tags` text COLLATE utf8mb4_unicode_ci,
  `views` bigint(20) DEFAULT '0',
  `cate_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `name_index` (`name`(250))
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `name`, `description`, `content`, `slug`, `status`, `created_at`, `updated_at`, `avatar`, `seo_id`, `timepost`, `user_id`, `tags`, `views`, `cate_id`) VALUES
(1, 'THÉP TẤM ĐẠT CHUẨN ĐỂ CẮT LAZER', 'Bạn đã biết các thông tin liên quan đến thép cuộn cán nóng ở thị trường Việt Nam chưa??? Thép Công Nghiệp Việt Nam xin được cung cấp cho bạn vài thông tin căn cơ về HRC nhé Nguồn cung cấp HRC: Từ tập đoàn Hòa phát', '<p>Bạn đ&atilde; biết c&aacute;c th&ocirc;ng tin li&ecirc;n quan đến th&eacute;p cuộn c&aacute;n n&oacute;ng ở thị trường Việt Nam chưa???</p>\r\n<p>Th&eacute;p C&ocirc;ng Nghiệp Việt Nam xin được cung cấp cho bạn v&agrave;i th&ocirc;ng tin căn cơ về HRC nh&eacute;</p>\r\n<h3 id=\"sec1\">Nguồn cung cấp HRC:</h3>\r\n<p>Từ tập đo&agrave;n H&ograve;a ph&aacute;t</p>\r\n<p>Từ C&ocirc;ng Ty Fomosa</p>\r\n<p>Từ Nhập Khẩu</p>\r\n<h3>Sản xuất ti&ecirc;u thụ th&eacute;p c&ocirc;ng nghiệp trong nước năm 2024</h3>\r\n<p>Sản lượng sản sản xuất trong nước năm 2024: tổng sản lượng th&eacute;p HRC sản xuất tại Việt Nam trong năm 2024 đạt khoảng 6.82 triệu tấn. So với năm 2023, sản lượng n&agrave;y tăng nhẹ khoảng 1.5%. Mức tăng trưởng kh&ocirc;ng đ&aacute;ng kể n&agrave;y cho thấy sự tăng trưởng khi&ecirc;m tốn trong năng lực sản xuất HRC nội địa hoặc hiệu suất sử dụng c&ocirc;ng suất hiện c&oacute;. C&oacute; thể thấy rằng, c&ocirc;ng suất sản xuất HRC trong nước kh&ocirc;ng c&oacute; sự đột ph&aacute; lớn trong năm 2024.</p>\r\n<p>Sản lượng ti&ecirc;u thụ nội địa năm 2024: tổng khối lượng th&eacute;p HRC ti&ecirc;u thụ tại thị trường Việt Nam trong năm 2024 đạt khoảng 6.58 triệu tấn.</p>\r\n<h3 id=\"sec2\">Th&eacute;p HRC được ti&ecirc;u thụ chủ yếu bởi c&aacute;c ng&agrave;nh c&ocirc;ng nghiệp:</h3>\r\n<p>T&ocirc;n mạ</p>\r\n<p>Sản xuất ống hộp đen v&agrave; mạ kẽm</p>\r\n<p>Đ&oacute;ng tầu thủy</p>\r\n<p>Kết cấu th&eacute;p nh&agrave; xưởng C&ocirc;ng Nghiệp</p>\r\n<h3 id=\"sec3\">Nhập khẩu HRC năm 2024:</h3>\r\n<p>Tổng sản lượng nhập khẩu: Việt Nam l&agrave; một quốc gia nhập khẩu đ&aacute;ng kể th&eacute;p HRC, với tổng khối lượng nhập khẩu trong năm 2024 đạt 12.6 triệu tấn. Khối lượng nhập khẩu HRC vượt xa sản lượng sản xuất trong nước (6.82 triệu tấn), cho thấy sự phụ thuộc lớn v&agrave;o nguồn cung nước ngo&agrave;i để đ&aacute;p ứng nhu cầu.</p>\r\n<p>Nguồn nhập khẩu HRC ch&iacute;nh v&agrave;o Việt Nam: Trung Quốc l&agrave; quốc gia xuất khẩu HRC lớn nhất sang Việt Nam. Trong 4 th&aacute;ng đầu năm 2024, th&eacute;p HRC nhập khẩu từ Trung Quốc chiếm tới 73% tổng lượng nhập khẩu. Tỷ lệ n&agrave;y vẫn duy tr&igrave; ở mức cao trong suốt năm, với 71% v&agrave;o th&aacute;ng 4, 72% trong 9 th&aacute;ng đầu năm v&agrave; 74% trong nửa đầu năm.</p>\r\n<p>C&aacute;c quốc gia kh&aacute;c như Đ&agrave;i Loan, H&agrave;n Quốc, Ấn Độ v&agrave; Nhật Bản cũng l&agrave; những nguồn cung HRC quan trọng cho Việt Nam. Sự thống trị của Trung Quốc trong nguồn cung nhập khẩu HRC cho thấy tầm quan trọng của mối quan hệ thương mại giữa hai nước trong lĩnh vực n&agrave;y.</p>\r\n<h3 id=\"sec4\">T&aacute;c động của việc nhập khẩu HRC thị trường nội địa:</h3>\r\n<p>Lượng HRC nhập khẩu lớn đ&atilde; g&acirc;y &aacute;p lực l&ecirc;n thị phần của c&aacute;c nh&agrave; sản xuất trong nước. nhận định rằng h&agrave;ng nhập khẩu chiếm lĩnh thị phần b&aacute;n h&agrave;ng của HRC sản xuất trong nước. Th&eacute;p HRC nhập khẩu, đặc biệt từ Trung Quốc, thường c&oacute; gi&aacute; thấp hơn so với sản phẩm nội địa từ 30 &ndash; 60USD/tấn. Điều n&agrave;y tạo ra một m&ocirc;i trường cạnh tranh khốc liệt cho c&aacute;c nh&agrave; sản xuất trong nước.</p>\r\n<h3 id=\"sec5\">Xuất khẩu HRC năm 2024</h3>\r\n<p>Tổng khối lượng xuất khẩu:</p>\r\n<p>Tổng khối lượng th&eacute;p HRC xuất khẩu từ Việt Nam trong năm 2024 đạt khoảng 2.25 triệu tấn. So với năm 2023, lượng xuất khẩu n&agrave;y giảm đ&aacute;ng kể, khoảng 33.8%.</p>\r\n<p>C&aacute;c thị trường xuất khẩu ch&iacute;nh:</p>\r\n<p>Li&ecirc;n minh ch&acirc;u &Acirc;u (EU) nhờ Hiệp định Thương mại Tự do Việt Nam &ndash; EU (EVFTA).</p>\r\n<p>Thị trường Mỹ</p>\r\n<p>C&aacute;c nước trong Đ&ocirc;ng Nam &Aacute;</p>\r\n<p>Như vậy thị trường th&eacute;p HRC tại Việt Nam trong năm 2024 cho thấy sự tăng trưởng nhẹ trong sản xuất nội địa nhưng vẫn phụ thuộc lớn v&agrave;o nhập khẩu để đ&aacute;p ứng nhu cầu ti&ecirc;u thụ. Lượng nhập khẩu HRC, chủ yếu từ Trung Quốc, vượt xa sản lượng sản xuất trong nước, g&acirc;y &aacute;p lực l&ecirc;n thị phần v&agrave; gi&aacute; cả của c&aacute;c nh&agrave; sản xuất nội địa. C&aacute;c yếu tố kinh tế vĩ m&ocirc;, ch&iacute;nh s&aacute;ch của ch&iacute;nh phủ v&agrave; diễn biến thị trường to&agrave;n cầu đ&atilde; định h&igrave;nh thị trường HRC trong suốt năm 2024. Việc điều tra v&agrave; &aacute;p dụng c&aacute;c biện ph&aacute;p ph&ograve;ng vệ thương mại đối với HRC nhập khẩu c&oacute; thể mang lại những thay đổi đ&aacute;ng kể cho thị trường trong tương lai, tạo ra một s&acirc;n chơi cạnh tranh hơn cho c&aacute;c doanh nghiệp th&eacute;p Việt Nam.</p>\r\n<p>Th&eacute;p Nghiệp HTC l&agrave; nh&agrave; nhập khẩu HRC h&agrave;ng đầu Việt Nam.</p>\r\n<p>Bạn h&atilde;y đến Th&eacute;p C&ocirc;ng Nghiệp HTC để được phục vụ hải l&ograve;ng c&aacute;c loại th&eacute;p C&ocirc;ng Nghiệp.</p>', 'thep-tam-dat-chuan-de-cat-lazer-364', 1, '2025-07-14 02:03:06', '2025-08-11 03:33:14', '/public_folder/files_upload/202508/945-anh-nen-1-2048x1536.webp', 17, '1752458570', 1, 'thép', 45, 2),
(2, 'Các thông tin của thép cuộn cán nóng – HRC ở Việt Nam', 'Bạn đã biết các thông tin liên quan đến thép cuộn cán nóng ở thị trường Việt Nam chưa??? Thép Công Nghiệp Việt Nam xin được cung cấp cho bạn vài thông tin căn cơ về HRC nhé Nguồn cung cấp HRC: Từ tập đoàn Hòa phát', '<p>Bạn đ&atilde; biết c&aacute;c th&ocirc;ng tin li&ecirc;n quan đến th&eacute;p cuộn c&aacute;n n&oacute;ng ở thị trường Việt Nam chưa???</p>\n<p>Th&eacute;p C&ocirc;ng Nghiệp Việt Nam xin được cung cấp cho bạn v&agrave;i th&ocirc;ng tin căn cơ về HRC nh&eacute;</p>\n<h3 id=\"sec1\">Nguồn cung cấp HRC:</h3>\n<p>Từ tập đo&agrave;n H&ograve;a ph&aacute;t</p>\n<p>Từ C&ocirc;ng Ty Fomosa</p>\n<p>Từ Nhập Khẩu</p>\n<h3>Sản xuất ti&ecirc;u thụ th&eacute;p c&ocirc;ng nghiệp trong nước năm 2024</h3>\n<p>Sản lượng sản sản xuất trong nước năm 2024: tổng sản lượng th&eacute;p HRC sản xuất tại Việt Nam trong năm 2024 đạt khoảng 6.82 triệu tấn. So với năm 2023, sản lượng n&agrave;y tăng nhẹ khoảng 1.5%. Mức tăng trưởng kh&ocirc;ng đ&aacute;ng kể n&agrave;y cho thấy sự tăng trưởng khi&ecirc;m tốn trong năng lực sản xuất HRC nội địa hoặc hiệu suất sử dụng c&ocirc;ng suất hiện c&oacute;. C&oacute; thể thấy rằng, c&ocirc;ng suất sản xuất HRC trong nước kh&ocirc;ng c&oacute; sự đột ph&aacute; lớn trong năm 2024.</p>\n<p>Sản lượng ti&ecirc;u thụ nội địa năm 2024: tổng khối lượng th&eacute;p HRC ti&ecirc;u thụ tại thị trường Việt Nam trong năm 2024 đạt khoảng 6.58 triệu tấn.</p>\n<h3 id=\"sec2\">Th&eacute;p HRC được ti&ecirc;u thụ chủ yếu bởi c&aacute;c ng&agrave;nh c&ocirc;ng nghiệp:</h3>\n<p>T&ocirc;n mạ</p>\n<p>Sản xuất ống hộp đen v&agrave; mạ kẽm</p>\n<p>Đ&oacute;ng tầu thủy</p>\n<p>Kết cấu th&eacute;p nh&agrave; xưởng C&ocirc;ng Nghiệp</p>\n<h3 id=\"sec3\">Nhập khẩu HRC năm 2024:</h3>\n<p>Tổng sản lượng nhập khẩu: Việt Nam l&agrave; một quốc gia nhập khẩu đ&aacute;ng kể th&eacute;p HRC, với tổng khối lượng nhập khẩu trong năm 2024 đạt 12.6 triệu tấn. Khối lượng nhập khẩu HRC vượt xa sản lượng sản xuất trong nước (6.82 triệu tấn), cho thấy sự phụ thuộc lớn v&agrave;o nguồn cung nước ngo&agrave;i để đ&aacute;p ứng nhu cầu.</p>\n<p>Nguồn nhập khẩu HRC ch&iacute;nh v&agrave;o Việt Nam: Trung Quốc l&agrave; quốc gia xuất khẩu HRC lớn nhất sang Việt Nam. Trong 4 th&aacute;ng đầu năm 2024, th&eacute;p HRC nhập khẩu từ Trung Quốc chiếm tới 73% tổng lượng nhập khẩu. Tỷ lệ n&agrave;y vẫn duy tr&igrave; ở mức cao trong suốt năm, với 71% v&agrave;o th&aacute;ng 4, 72% trong 9 th&aacute;ng đầu năm v&agrave; 74% trong nửa đầu năm.</p>\n<p>C&aacute;c quốc gia kh&aacute;c như Đ&agrave;i Loan, H&agrave;n Quốc, Ấn Độ v&agrave; Nhật Bản cũng l&agrave; những nguồn cung HRC quan trọng cho Việt Nam. Sự thống trị của Trung Quốc trong nguồn cung nhập khẩu HRC cho thấy tầm quan trọng của mối quan hệ thương mại giữa hai nước trong lĩnh vực n&agrave;y.</p>\n<h3 id=\"sec4\">T&aacute;c động của việc nhập khẩu HRC thị trường nội địa:</h3>\n<p>Lượng HRC nhập khẩu lớn đ&atilde; g&acirc;y &aacute;p lực l&ecirc;n thị phần của c&aacute;c nh&agrave; sản xuất trong nước. nhận định rằng h&agrave;ng nhập khẩu chiếm lĩnh thị phần b&aacute;n h&agrave;ng của HRC sản xuất trong nước. Th&eacute;p HRC nhập khẩu, đặc biệt từ Trung Quốc, thường c&oacute; gi&aacute; thấp hơn so với sản phẩm nội địa từ 30 &ndash; 60USD/tấn. Điều n&agrave;y tạo ra một m&ocirc;i trường cạnh tranh khốc liệt cho c&aacute;c nh&agrave; sản xuất trong nước.</p>\n<h3 id=\"sec5\">Xuất khẩu HRC năm 2024</h3>\n<p>Tổng khối lượng xuất khẩu:</p>\n<p>Tổng khối lượng th&eacute;p HRC xuất khẩu từ Việt Nam trong năm 2024 đạt khoảng 2.25 triệu tấn. So với năm 2023, lượng xuất khẩu n&agrave;y giảm đ&aacute;ng kể, khoảng 33.8%.</p>\n<p>C&aacute;c thị trường xuất khẩu ch&iacute;nh:</p>\n<p>Li&ecirc;n minh ch&acirc;u &Acirc;u (EU) nhờ Hiệp định Thương mại Tự do Việt Nam &ndash; EU (EVFTA).</p>\n<p>Thị trường Mỹ</p>\n<p>C&aacute;c nước trong Đ&ocirc;ng Nam &Aacute;</p>\n<p>Như vậy thị trường th&eacute;p HRC tại Việt Nam trong năm 2024 cho thấy sự tăng trưởng nhẹ trong sản xuất nội địa nhưng vẫn phụ thuộc lớn v&agrave;o nhập khẩu để đ&aacute;p ứng nhu cầu ti&ecirc;u thụ. Lượng nhập khẩu HRC, chủ yếu từ Trung Quốc, vượt xa sản lượng sản xuất trong nước, g&acirc;y &aacute;p lực l&ecirc;n thị phần v&agrave; gi&aacute; cả của c&aacute;c nh&agrave; sản xuất nội địa. C&aacute;c yếu tố kinh tế vĩ m&ocirc;, ch&iacute;nh s&aacute;ch của ch&iacute;nh phủ v&agrave; diễn biến thị trường to&agrave;n cầu đ&atilde; định h&igrave;nh thị trường HRC trong suốt năm 2024. Việc điều tra v&agrave; &aacute;p dụng c&aacute;c biện ph&aacute;p ph&ograve;ng vệ thương mại đối với HRC nhập khẩu c&oacute; thể mang lại những thay đổi đ&aacute;ng kể cho thị trường trong tương lai, tạo ra một s&acirc;n chơi cạnh tranh hơn cho c&aacute;c doanh nghiệp th&eacute;p Việt Nam.</p>\n<p>Th&eacute;p Nghiệp HTC l&agrave; nh&agrave; nhập khẩu HRC h&agrave;ng đầu Việt Nam.</p>\n<p>Bạn h&atilde;y đến Th&eacute;p C&ocirc;ng Nghiệp HTC để được phục vụ hải l&ograve;ng c&aacute;c loại th&eacute;p C&ocirc;ng Nghiệp.</p>', 'cac-thong-tin-cua-thep-cuon-can-nong-hrc-o-viet-nam', 1, '2025-08-08 04:33:13', '2025-08-11 03:32:20', '/public_folder/files_upload/202508/849-anh-thep-tam-1.webp', 20, '1754627560', 1, 'thép', 13, 2),
(3, 'XÀ GỒ DẬP – C DẬ', 'Bạn đã biết các thông tin liên quan đến thép cuộn cán nóng ở thị trường Việt Nam chưa??? Thép Công Nghiệp Việt Nam xin được cung cấp cho bạn vài thông tin căn cơ về HRC nhé Nguồn cung cấp HRC: Từ tập đoàn Hòa phát', 'Bạn đã biết các thông tin liên quan đến thép cuộn cán nóng ở thị trường Việt Nam chưa??? Thép Công Nghiệp Việt Nam xin được cung cấp cho bạn vài thông tin căn cơ về HRC nhé Nguồn cung cấp HRC: Từ tập đoàn Hòa phát', 'xa-go-dap-c-da', 1, '2025-08-08 04:33:47', '2025-08-11 07:03:31', '/public_folder/files_upload/202508/177-thep-c-dap-3-600x800.webp', 21, '1754627593', 1, NULL, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_category`
--

DROP TABLE IF EXISTS `tbl_news_category`;
CREATE TABLE IF NOT EXISTS `tbl_news_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) DEFAULT '0',
  `parent` int(11) DEFAULT '0',
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(11) DEFAULT NULL,
  `pin` tinyint(4) DEFAULT '0',
  `status` int(4) DEFAULT '1',
  `avatar` text COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_news_category`
--

INSERT INTO `tbl_news_category` (`id`, `position`, `parent`, `name`, `description`, `slug`, `created_at`, `updated_at`, `seo_id`, `pin`, `status`, `avatar`) VALUES
(1, 0, 0, 'Danh mục 1', 'Hướng dẫn', 'danh-muc-1-326', '2025-07-14 02:02:47', '2025-08-08 04:32:28', 18, 0, 1, NULL),
(2, 0, 0, 'Danh mục 2', NULL, 'danh-muc-2-324', '2025-07-14 02:43:38', '2025-08-08 04:32:37', 19, 0, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

DROP TABLE IF EXISTS `tbl_page`;
CREATE TABLE IF NOT EXISTS `tbl_page` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `seo_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

DROP TABLE IF EXISTS `tbl_product`;
CREATE TABLE IF NOT EXISTS `tbl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `images` text COLLATE utf8mb4_unicode_ci,
  `used` longtext COLLATE utf8mb4_unicode_ci,
  `seo_id` int(11) DEFAULT '0',
  `pdf` text COLLATE utf8mb4_unicode_ci,
  `specification` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `description`, `content`, `slug`, `status`, `created_at`, `updated_at`, `avatar`, `images`, `used`, `seo_id`, `pdf`, `specification`) VALUES
(1, 'Thép tấm cán nóng', 'Ứng dụng trong các ngành sản xuất công nghiệp: đóng tàu, cầu đường, sản xuất các sản phẩm chịu áp lực như nồi hơi, bồn bể xăng dầu…, sản xuất các chi tiết như thùng bệ-sàn ô tô, sản xuất kết cấu…', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'thep-tam-can-nong-8', 1, '2025-08-08 04:15:19', '2025-08-08 04:19:44', '/public_folder/files_upload/202508/501-thep-tam-can-nong-1-787x452.webp', '/public_folder/files_upload/202508/995-anh-tam-vr1.webp,/public_folder/files_upload/202508/507-anh-tam-vr2-250x333.webp,/public_folder/files_upload/202508/721-anh-tam-vr3-250x333.webp,/public_folder/files_upload/202508/345-anh-tam-vr4-768x1024.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 9, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>Th&eacute;p tấm thường (tấm cường độ thấp)</td><td>SS400/A36/Q235B</td></tr><tr><td>Th&eacute;p tấm hợp kim thấp, cường độ cao</td><td>Q345B/ ASTM A572 Gr.50/SM490</td></tr><tr><td>Quy c&aacute;ch</td><td>3-100 (mm) x 1500/2000 (mm) x 6000/12000</td></tr><tr><td>Xuất xứ</td><td>Trung quốc, Ấn độ, Nhật Bản, Nga, Nam Phi, Indonesia&hellip;</td></tr></tbody></table>'),
(2, 'Thép tấm kiện', 'Thép tấm chống trượt (hay còn gọi là thép tấm nhám) là thép tấm cán nóng có những đường gân nổi lên trên bề mặt của tấm thép, mặt còn lại là một tấm phẳng.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'thep-tam-kien-1', 1, '2025-08-08 04:16:26', '2025-08-08 04:19:52', '/public_folder/files_upload/202508/168-thep-tam-can-nguoi.webp', '/public_folder/files_upload/202508/995-anh-tam-vr1.webp,/public_folder/files_upload/202508/507-anh-tam-vr2-250x333.webp,/public_folder/files_upload/202508/721-anh-tam-vr3-250x333.webp,/public_folder/files_upload/202508/345-anh-tam-vr4-768x1024.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 10, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>Th&eacute;p tấm thường (tấm cường độ thấp)</td><td>SS400/A36/Q235B</td></tr><tr><td>Th&eacute;p tấm hợp kim thấp, cường độ cao</td><td>Q345B/ ASTM A572 Gr.50/SM490</td></tr><tr><td>Quy c&aacute;ch</td><td>3-100 (mm) x 1500/2000 (mm) x 6000/12000</td></tr><tr><td>Xuất xứ</td><td>Trung quốc, Ấn độ, Nhật Bản, Nga, Nam Phi, Indonesia&hellip;</td></tr></tbody></table>'),
(3, 'Thép cuộn cán nóng', 'Thép cuộn cán nóng là sản phẩm thép cán nóng ở dạng cuộn dùng trong công nghiệp.', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'thep-cuon-can-nong-9', 1, '2025-08-08 04:16:47', '2025-08-08 04:20:00', '/public_folder/files_upload/202508/911-thep-cuon-can-nguoi.webp', '/public_folder/files_upload/202508/995-anh-tam-vr1.webp,/public_folder/files_upload/202508/507-anh-tam-vr2-250x333.webp,/public_folder/files_upload/202508/721-anh-tam-vr3-250x333.webp,/public_folder/files_upload/202508/345-anh-tam-vr4-768x1024.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 11, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>Th&eacute;p tấm thường (tấm cường độ thấp)</td><td>SS400/A36/Q235B</td></tr><tr><td>Th&eacute;p tấm hợp kim thấp, cường độ cao</td><td>Q345B/ ASTM A572 Gr.50/SM490</td></tr><tr><td>Quy c&aacute;ch</td><td>3-100 (mm) x 1500/2000 (mm) x 6000/12000</td></tr><tr><td>Xuất xứ</td><td>Trung quốc, Ấn độ, Nhật Bản, Nga, Nam Phi, Indonesia&hellip;</td></tr></tbody></table>'),
(4, 'Thép u đúc', 'Thép U cũng tương tự như các sản phẩm thép hình khác là có độ cứng cao, đặc chắc, có trọng lượng lớn và độ bền rất cao. Thép U được sản xuất với rất nhiều', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'thep-u-duc-2', 1, '2025-08-08 04:17:26', '2025-08-08 04:17:26', '/public_folder/files_upload/202508/911-thep-u-dap.webp', '/public_folder/files_upload/202508/995-anh-tam-vr1.webp,/public_folder/files_upload/202508/507-anh-tam-vr2-250x333.webp,/public_folder/files_upload/202508/721-anh-tam-vr3-250x333.webp,/public_folder/files_upload/202508/345-anh-tam-vr4-768x1024.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 12, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>Th&eacute;p tấm thường (tấm cường độ thấp)</td><td>SS400/A36/Q235B</td></tr><tr><td>Th&eacute;p tấm hợp kim thấp, cường độ cao</td><td>Q345B/ ASTM A572 Gr.50/SM490</td></tr><tr><td>Quy c&aacute;ch</td><td>3-100 (mm) x 1500/2000 (mm) x 6000/12000</td></tr><tr><td>Xuất xứ</td><td>Trung quốc, Ấn độ, Nhật Bản, Nga, Nam Phi, Indonesia&hellip;</td></tr></tbody></table>'),
(5, 'Thép góc đúc', 'Thép V hay thép góc đúc là loại thép mà mặt cắt ngang của nó có hình chữ V trong bảng chữ cái. Loại thép này nằm trong nhóm các sản phẩm thép hình, bê tông', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'thep-goc-duc-9', 1, '2025-08-08 04:18:02', '2025-08-08 04:18:02', '/public_folder/files_upload/202508/660-thep-v-goc-duc-inox-3.webp', '/public_folder/files_upload/202508/995-anh-tam-vr1.webp,/public_folder/files_upload/202508/507-anh-tam-vr2-250x333.webp,/public_folder/files_upload/202508/721-anh-tam-vr3-250x333.webp,/public_folder/files_upload/202508/345-anh-tam-vr4-768x1024.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 13, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>Th&eacute;p tấm thường (tấm cường độ thấp)</td><td>SS400/A36/Q235B</td></tr><tr><td>Th&eacute;p tấm hợp kim thấp, cường độ cao</td><td>Q345B/ ASTM A572 Gr.50/SM490</td></tr><tr><td>Quy c&aacute;ch</td><td>3-100 (mm) x 1500/2000 (mm) x 6000/12000</td></tr><tr><td>Xuất xứ</td><td>Trung quốc, Ấn độ, Nhật Bản, Nga, Nam Phi, Indonesia&hellip;</td></tr></tbody></table>'),
(6, 'Thép I/H đúc', 'Thép I và H đúc được ứng dụng chủ yếu cho các công trình xây dựng kết cấu và sản xuất công nghiệp nặng. làm cột nhà xưởng, dầm cầu, chống văng', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'thep-ih-duc-5', 1, '2025-08-08 04:18:21', '2025-08-08 04:18:21', '/public_folder/files_upload/202508/919-thep-hinh-chu-h-i.webp', '/public_folder/files_upload/202508/995-anh-tam-vr1.webp,/public_folder/files_upload/202508/507-anh-tam-vr2-250x333.webp,/public_folder/files_upload/202508/721-anh-tam-vr3-250x333.webp,/public_folder/files_upload/202508/345-anh-tam-vr4-768x1024.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 14, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>Th&eacute;p tấm thường (tấm cường độ thấp)</td><td>SS400/A36/Q235B</td></tr><tr><td>Th&eacute;p tấm hợp kim thấp, cường độ cao</td><td>Q345B/ ASTM A572 Gr.50/SM490</td></tr><tr><td>Quy c&aacute;ch</td><td>3-100 (mm) x 1500/2000 (mm) x 6000/12000</td></tr><tr><td>Xuất xứ</td><td>Trung quốc, Ấn độ, Nhật Bản, Nga, Nam Phi, Indonesia&hellip;</td></tr></tbody></table>'),
(7, 'Thép cắt bản', 'Thép Bản mã sản xuất tại Thép Công Nghiệp HTC, chúng được ứng dụng trong nhiều lĩnh vực công nghiệp cũng như dân dụng như làm bích chân cột hoặc đỉnh', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'thep-cat-ban-7', 1, '2025-08-08 04:18:46', '2025-08-08 04:18:46', '/public_folder/files_upload/202508/148-ban-ma-1-1067x800.webp', '/public_folder/files_upload/202508/995-anh-tam-vr1.webp,/public_folder/files_upload/202508/507-anh-tam-vr2-250x333.webp,/public_folder/files_upload/202508/721-anh-tam-vr3-250x333.webp,/public_folder/files_upload/202508/345-anh-tam-vr4-768x1024.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 15, NULL, '<table class=\"table table-bordered\"><tbody><tr><td>Th&eacute;p tấm thường (tấm cường độ thấp)</td><td>SS400/A36/Q235B</td></tr><tr><td>Th&eacute;p tấm hợp kim thấp, cường độ cao</td><td>Q345B/ ASTM A572 Gr.50/SM490</td></tr><tr><td>Quy c&aacute;ch</td><td>3-100 (mm) x 1500/2000 (mm) x 6000/12000</td></tr><tr><td>Xuất xứ</td><td>Trung quốc, Ấn độ, Nhật Bản, Nga, Nam Phi, Indonesia&hellip;</td></tr></tbody></table>'),
(8, 'Thép u dập - cừ dập', 'Thép u dập – u cừ được định hình nguội là sản phẩm được tạo bởi tác động cơ lý như cắt, chấn, lốc, dập thép bản để định hình, không tác động bởi nhiệt độ hay', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'thep-u-dap---cu-dap-1', 1, '2025-08-08 04:19:06', '2025-08-11 05:54:49', '/public_folder/files_upload/202508/295-ban-cu-thep-u200-c200.webp', '/public_folder/files_upload/202508/995-anh-tam-vr1.webp,/public_folder/files_upload/202508/507-anh-tam-vr2-250x333.webp,/public_folder/files_upload/202508/721-anh-tam-vr3-250x333.webp,/public_folder/files_upload/202508/345-anh-tam-vr4-768x1024.webp', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 16, '/public_folder/files_upload/202508/900-dummy.pdf', '<table class=\"table table-bordered\"><tbody><tr><td>Th&eacute;p tấm thường (tấm cường độ thấp)</td><td>SS400/A36/Q235B</td></tr><tr><td>Th&eacute;p tấm hợp kim thấp, cường độ cao</td><td>Q345B/ ASTM A572 Gr.50/SM490</td></tr><tr><td>Quy c&aacute;ch</td><td>3-100 (mm) x 1500/2000 (mm) x 6000/12000</td></tr><tr><td>Xuất xứ</td><td>Trung quốc, Ấn độ, Nhật Bản, Nga, Nam Phi, Indonesia&hellip;</td></tr></tbody></table>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_category`
--

DROP TABLE IF EXISTS `tbl_product_category`;
CREATE TABLE IF NOT EXISTS `tbl_product_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(11) DEFAULT '0',
  `parent` int(11) DEFAULT NULL,
  `name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `slug` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(11) DEFAULT NULL,
  `status` int(4) DEFAULT '1',
  `content` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 AVG_ROW_LENGTH=5461 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_product_category`
--

INSERT INTO `tbl_product_category` (`id`, `position`, `parent`, `name`, `description`, `slug`, `created_at`, `updated_at`, `seo_id`, `status`, `content`) VALUES
(1, 0, 0, 'Danh mục 1', 'Danh mục 1', 'danh-muc-1-2', '2025-08-07 10:09:46', '2025-08-07 10:10:23', 3, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'),
(2, 0, 0, 'Danh mục 2', 'Danh mục 2', 'danh-muc-2-9', '2025-08-07 10:10:17', '2025-08-07 10:10:17', NULL, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>'),
(3, 0, 0, 'Danh mục 3', 'Danh mục 3', 'danh-muc-3-9', '2025-08-07 10:15:05', '2025-08-07 10:15:05', NULL, 1, NULL),
(4, 0, 0, 'Danh mục 4', 'Danh mục 4', 'danh-muc-4-3', '2025-08-07 10:15:09', '2025-08-07 10:15:09', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product_views`
--

DROP TABLE IF EXISTS `tbl_product_views`;
CREATE TABLE IF NOT EXISTS `tbl_product_views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT '0',
  `cat_id` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product_views`
--

INSERT INTO `tbl_product_views` (`id`, `product_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(8, 1, 3, '2025-08-08 04:19:44', '2025-08-08 04:19:44'),
(7, 1, 2, '2025-08-08 04:19:44', '2025-08-08 04:19:44'),
(9, 2, 1, '2025-08-08 04:19:52', '2025-08-08 04:19:52'),
(4, 5, 1, '2025-08-08 04:18:02', '2025-08-08 04:18:02'),
(5, 5, 3, '2025-08-08 04:18:02', '2025-08-08 04:18:02'),
(12, 8, 3, '2025-08-11 05:54:49', '2025-08-11 05:54:49');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

DROP TABLE IF EXISTS `tbl_project`;
CREATE TABLE IF NOT EXISTS `tbl_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `client` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimension` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `list_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_id` int(11) DEFAULT '0',
  `image1` text COLLATE utf8mb4_unicode_ci,
  `image2` text COLLATE utf8mb4_unicode_ci,
  `image3` text COLLATE utf8mb4_unicode_ci,
  `image4` text COLLATE utf8mb4_unicode_ci,
  `image5` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_project`
--

INSERT INTO `tbl_project` (`id`, `name`, `avatar`, `slug`, `description`, `content`, `status`, `created_at`, `updated_at`, `client`, `dimension`, `address`, `type`, `list_p`, `seo_id`, `image1`, `image2`, `image3`, `image4`, `image5`) VALUES
(1, 'Dự án AEON Hà Đông', '/public_folder/files_upload/202508/916-vinhomes-smart-city.webp', 'du-an-aeon-ha-dong', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.', '<h2 class=\"text-black font-weight-600 m-b15\">Lorem ipsum dolor sit amet</h2>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2025-08-08 08:26:32', '2025-08-08 08:26:32', 'Lorem Ipsum', '1,200m', 'Hà Đông, Hà Nội', 'Trung tâm thương mại', '2,3', 32, '/public_folder/files_upload/202508/678-aeon-mall-hd.webp', '/public_folder/files_upload/202508/639-slide-du-an-vinhomes-vu-yen.webp', '/public_folder/files_upload/202508/385-vinhomes-smart-city.webp', '/public_folder/files_upload/202508/624-aeon-mall-ha-dong.webp', '/public_folder/files_upload/202508/903-vinhomes-co-loa.webp'),
(2, 'Dự án vin cổ loa', '/public_folder/files_upload/202508/938-vinhomes-co-loa.webp', 'du-an-vin-co-loa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.', '<h2 class=\"text-black font-weight-600 m-b15\">Lorem ipsum dolor sit amet</h2>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2025-08-08 08:30:09', '2025-08-08 08:30:09', 'Lorem Ipsum', '1,200m', 'Hà Đông, Hà Nội', 'Trung tâm thương mại', '5,6', 33, '/public_folder/files_upload/202508/678-aeon-mall-hd.webp', '/public_folder/files_upload/202508/639-slide-du-an-vinhomes-vu-yen.webp', '/public_folder/files_upload/202508/385-vinhomes-smart-city.webp', '/public_folder/files_upload/202508/624-aeon-mall-ha-dong.webp', '/public_folder/files_upload/202508/903-vinhomes-co-loa.webp'),
(3, 'Dự án vin tây mỗ', '/public_folder/files_upload/202508/447-aeon-mall-ha-dong.webp', 'du-an-vin-tay-mo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.', '<h2 class=\"text-black font-weight-600 m-b15\">Lorem ipsum dolor sit amet</h2>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2025-08-08 08:30:24', '2025-08-08 08:30:24', 'Lorem Ipsum', '1,200m', 'Hà Đông, Hà Nội', 'Trung tâm thương mại', NULL, 34, '/public_folder/files_upload/202508/678-aeon-mall-hd.webp', '/public_folder/files_upload/202508/639-slide-du-an-vinhomes-vu-yen.webp', '/public_folder/files_upload/202508/385-vinhomes-smart-city.webp', '/public_folder/files_upload/202508/624-aeon-mall-ha-dong.webp', '/public_folder/files_upload/202508/903-vinhomes-co-loa.webp'),
(4, 'Dự án vin vũ yên', '/public_folder/files_upload/202508/214-z6113302460098-a71f0c50e181c83-2640-2804-1733740177.webp', 'du-an-vin-vu-yen', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.', '<h2 class=\"text-black font-weight-600 m-b15\">Lorem ipsum dolor sit amet</h2>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2025-08-08 08:30:45', '2025-08-08 08:30:45', 'Lorem Ipsum', '1,200m', 'Hà Đông, Hà Nội', 'Trung tâm thương mại', NULL, 35, '/public_folder/files_upload/202508/678-aeon-mall-hd.webp', '/public_folder/files_upload/202508/639-slide-du-an-vinhomes-vu-yen.webp', '/public_folder/files_upload/202508/385-vinhomes-smart-city.webp', '/public_folder/files_upload/202508/624-aeon-mall-ha-dong.webp', '/public_folder/files_upload/202508/903-vinhomes-co-loa.webp'),
(5, 'Dự án AEON thanh hoá', '/public_folder/files_upload/202508/689-image-extractword-1-out-4761-1624009420.webp', 'du-an-aeon-thanh-hoa', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.', '<h2 class=\"text-black font-weight-600 m-b15\">Lorem ipsum dolor sit amet</h2>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 1, '2025-08-08 08:31:09', '2025-08-08 10:23:56', 'Lorem Ipsum', '1,200m', 'Hà Đông, Hà Nội', 'Trung tâm thương mại', '1,2,3', 36, '/public_folder/files_upload/202508/678-aeon-mall-hd.webp', '/public_folder/files_upload/202508/639-slide-du-an-vinhomes-vu-yen.webp', '/public_folder/files_upload/202508/385-vinhomes-smart-city.webp', '/public_folder/files_upload/202508/624-aeon-mall-ha-dong.webp', '/public_folder/files_upload/202508/903-vinhomes-co-loa.webp');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_seo`
--

DROP TABLE IF EXISTS `tbl_seo`;
CREATE TABLE IF NOT EXISTS `tbl_seo` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `seo_title` text COLLATE utf8_unicode_ci,
  `seo_description` text COLLATE utf8_unicode_ci,
  `seo_keyword` text COLLATE utf8_unicode_ci,
  `fb_title` text COLLATE utf8_unicode_ci,
  `fb_description` text COLLATE utf8_unicode_ci,
  `fb_image` text COLLATE utf8_unicode_ci,
  `g_title` text COLLATE utf8_unicode_ci,
  `g_description` text COLLATE utf8_unicode_ci,
  `g_image` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=37 AVG_ROW_LENGTH=237 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_seo`
--

INSERT INTO `tbl_seo` (`id`, `seo_title`, `seo_description`, `seo_keyword`, `fb_title`, `fb_description`, `fb_image`, `g_title`, `g_description`, `g_image`, `created_at`, `updated_at`) VALUES
(1, 'Danh mục 1', NULL, '', 'Danh mục 1', NULL, NULL, NULL, NULL, NULL, '2025-08-07 10:09:45', '2025-08-07 10:09:45'),
(2, 'Danh mục 2', 'Danh mục 2', '', 'Danh mục 2', 'Danh mục 2', NULL, NULL, NULL, NULL, '2025-08-07 10:10:17', '2025-08-07 10:10:17'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-07 10:10:23', '2025-08-07 10:10:23'),
(4, 'Danh mục 3', 'Danh mục 3', '', 'Danh mục 3', 'Danh mục 3', NULL, NULL, NULL, NULL, '2025-08-07 10:15:05', '2025-08-07 10:15:05'),
(5, 'Danh mục 4', 'Danh mục 4', '', 'Danh mục 4', 'Danh mục 4', NULL, NULL, NULL, NULL, '2025-08-07 10:15:09', '2025-08-07 10:15:09'),
(6, 'Thép tấm cán nóng', '<p>Ứng dụng trong c&aacute;c ng&agrave;nh sản xuất c&ocirc;ng nghiệp: đ&oacute;ng t&agrave;u, cầu đường, sản xuất c&aacute;c sản phẩm chịu &aacute;p lực như nồi hơi, bồn bể xăng dầu&hellip;, sản xuất c&aacute;c chi tiết như th&ugrave;ng bệ-s&agrave;n &ocirc; t&ocirc;, sản xuất kết cấu</p>', '', 'Thép tấm cán nóng', '<p>Ứng dụng trong c&aacute;c ng&agrave;nh sản xuất c&ocirc;ng nghiệp: đ&oacute;ng t&agrave;u, cầu đường, sản xuất c&aacute;c sản phẩm chịu &aacute;p lực như nồi hơi, bồn bể xăng dầu&hellip;, sản xuất c&aacute;c chi tiết như th&ugrave;ng bệ-s&agrave;n &ocirc; t&ocirc;, sản xuất kết cấu</p>', NULL, NULL, NULL, NULL, '2025-08-08 04:12:14', '2025-08-08 04:12:14'),
(7, 'Thép tấm cán nóng', '<p>Ứng dụng trong c&aacute;c ng&agrave;nh sản xuất c&ocirc;ng nghiệp: đ&oacute;ng t&agrave;u, cầu đường, sản xuất c&aacute;c sản phẩm chịu &aacute;p lực như nồi hơi, bồn bể xăng dầu&hellip;, sản xuất c&aacute;c chi tiết như th&ugrave;ng bệ-s&agrave;n &ocirc; t&ocirc;, sản xuất kết cấu</p>', '', 'Thép tấm cán nóng', '<p>Ứng dụng trong c&aacute;c ng&agrave;nh sản xuất c&ocirc;ng nghiệp: đ&oacute;ng t&agrave;u, cầu đường, sản xuất c&aacute;c sản phẩm chịu &aacute;p lực như nồi hơi, bồn bể xăng dầu&hellip;, sản xuất c&aacute;c chi tiết như th&ugrave;ng bệ-s&agrave;n &ocirc; t&ocirc;, sản xuất kết cấu</p>', NULL, NULL, NULL, NULL, '2025-08-08 04:13:10', '2025-08-08 04:13:10'),
(8, 'Thép tấm cán nóng', '<p>Ứng dụng trong c&aacute;c ng&agrave;nh sản xuất c&ocirc;ng nghiệp: đ&oacute;ng t&agrave;u, cầu đường, sản xuất c&aacute;c sản phẩm chịu &aacute;p lực như nồi hơi, bồn bể xăng dầu&hellip;, sản xuất c&aacute;c chi tiết như th&ugrave;ng bệ-s&agrave;n &ocirc; t&ocirc;, sản xuất kết cấu&hellip;</p>', '', 'Thép tấm cán nóng', '<p>Ứng dụng trong c&aacute;c ng&agrave;nh sản xuất c&ocirc;ng nghiệp: đ&oacute;ng t&agrave;u, cầu đường, sản xuất c&aacute;c sản phẩm chịu &aacute;p lực như nồi hơi, bồn bể xăng dầu&hellip;, sản xuất c&aacute;c chi tiết như th&ugrave;ng bệ-s&agrave;n &ocirc; t&ocirc;, sản xuất kết cấu&hellip;</p>', NULL, NULL, NULL, NULL, '2025-08-08 04:14:15', '2025-08-08 04:14:15'),
(9, 'Thép tấm cán nóng', '<p>Ứng dụng trong các ngành sản xuất công nghiệp: đóng tàu, cầu đường, sản xuất các sản phẩm chịu áp lực như nồi hơi, bồn bể xăng dầu…, sản xuất các chi tiết như thùng bệ-sàn ô tô, sản xuất kết cấu…</p>', NULL, 'Thép tấm cán nóng', '<p>Ứng dụng trong các ngành sản xuất công nghiệp: đóng tàu, cầu đường, sản xuất các sản phẩm chịu áp lực như nồi hơi, bồn bể xăng dầu…, sản xuất các chi tiết như thùng bệ-sàn ô tô, sản xuất kết cấu…</p>', NULL, NULL, NULL, NULL, '2025-08-08 04:15:19', '2025-08-08 04:19:44'),
(10, 'Thép tấm kiện', '<p>Thép tấm chống trượt (hay còn gọi là thép tấm nhám) là thép tấm cán nóng có những đường gân nổi lên trên bề mặt của tấm thép, mặt còn lại là một tấm phẳng.</p>', NULL, 'Thép tấm kiện', '<p>Thép tấm chống trượt (hay còn gọi là thép tấm nhám) là thép tấm cán nóng có những đường gân nổi lên trên bề mặt của tấm thép, mặt còn lại là một tấm phẳng.</p>', NULL, NULL, NULL, NULL, '2025-08-08 04:16:26', '2025-08-08 04:19:52'),
(11, 'Thép cuộn cán nóng', '<p>Thép cuộn cán nóng là sản phẩm thép cán nóng ở dạng cuộn dùng trong công nghiệp.</p>', NULL, 'Thép cuộn cán nóng', '<p>Thép cuộn cán nóng là sản phẩm thép cán nóng ở dạng cuộn dùng trong công nghiệp.</p>', NULL, NULL, NULL, NULL, '2025-08-08 04:16:47', '2025-08-08 04:20:00'),
(12, 'Thép u đúc', 'Thép U cũng tương tự như các sản phẩm thép hình khác là có độ cứng cao, đặc chắc, có trọng lượng lớn và độ bền rất cao. Thép U được sản xuất với rất nhiều', '', 'Thép u đúc', 'Thép U cũng tương tự như các sản phẩm thép hình khác là có độ cứng cao, đặc chắc, có trọng lượng lớn và độ bền rất cao. Thép U được sản xuất với rất nhiều', NULL, NULL, NULL, NULL, '2025-08-08 04:17:26', '2025-08-08 04:17:26'),
(13, 'Thép góc đúc', 'Thép V hay thép góc đúc là loại thép mà mặt cắt ngang của nó có hình chữ V trong bảng chữ cái. Loại thép này nằm trong nhóm các sản phẩm thép hình, bê tông', '', 'Thép góc đúc', 'Thép V hay thép góc đúc là loại thép mà mặt cắt ngang của nó có hình chữ V trong bảng chữ cái. Loại thép này nằm trong nhóm các sản phẩm thép hình, bê tông', NULL, NULL, NULL, NULL, '2025-08-08 04:18:02', '2025-08-08 04:18:02'),
(14, 'Thép I/H đúc', 'Thép I và H đúc được ứng dụng chủ yếu cho các công trình xây dựng kết cấu và sản xuất công nghiệp nặng. làm cột nhà xưởng, dầm cầu, chống văng', '', 'Thép I/H đúc', 'Thép I và H đúc được ứng dụng chủ yếu cho các công trình xây dựng kết cấu và sản xuất công nghiệp nặng. làm cột nhà xưởng, dầm cầu, chống văng', NULL, NULL, NULL, NULL, '2025-08-08 04:18:21', '2025-08-08 04:18:21'),
(15, 'Thép cắt bản', 'Thép Bản mã sản xuất tại Thép Công Nghiệp HTC, chúng được ứng dụng trong nhiều lĩnh vực công nghiệp cũng như dân dụng như làm bích chân cột hoặc đỉnh', '', 'Thép cắt bản', 'Thép Bản mã sản xuất tại Thép Công Nghiệp HTC, chúng được ứng dụng trong nhiều lĩnh vực công nghiệp cũng như dân dụng như làm bích chân cột hoặc đỉnh', NULL, NULL, NULL, NULL, '2025-08-08 04:18:45', '2025-08-08 04:18:45'),
(16, 'Thép u dập - cừ dập', 'Thép u dập – u cừ được định hình nguội là sản phẩm được tạo bởi tác động cơ lý như cắt, chấn, lốc, dập thép bản để định hình, không tác động bởi nhiệt độ hay', NULL, 'Thép u dập - cừ dập', 'Thép u dập – u cừ được định hình nguội là sản phẩm được tạo bởi tác động cơ lý như cắt, chấn, lốc, dập thép bản để định hình, không tác động bởi nhiệt độ hay', NULL, NULL, NULL, NULL, '2025-08-08 04:19:06', '2025-08-08 07:44:03'),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-08 04:32:14', '2025-08-08 04:32:14'),
(18, 'Danh mục 1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-08 04:32:28', '2025-08-08 04:32:28'),
(19, 'Danh mục 2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2025-08-08 04:32:37', '2025-08-08 04:32:37'),
(20, 'Các thông tin của thép cuộn cán nóng – HRC ở Việt Nam', NULL, '', 'Các thông tin của thép cuộn cán nóng – HRC ở Việt Nam', NULL, NULL, NULL, NULL, NULL, '2025-08-08 04:33:13', '2025-08-08 04:33:13'),
(21, 'XÀ GỒ DẬP – C DẬ', NULL, '', 'XÀ GỒ DẬP – C DẬ', NULL, NULL, NULL, NULL, NULL, '2025-08-08 04:33:47', '2025-08-08 04:33:47'),
(22, 'Pha cắt theo yêu cầu', NULL, '', 'Pha cắt theo yêu cầu', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:36:59', '2025-08-08 05:36:59'),
(23, 'Chấn dập đa địa hình', NULL, '', 'Chấn dập đa địa hình', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:37:45', '2025-08-08 05:37:45'),
(24, 'Cắt bản mã lập là', NULL, NULL, 'Cắt bản mã lập là', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:37:59', '2025-08-11 05:57:43'),
(25, 'Nhận gửi kho', NULL, '', 'Nhận gửi kho', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:38:14', '2025-08-08 05:38:14'),
(26, 'Cho thuê kho bãi', NULL, '', 'Cho thuê kho bãi', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:38:42', '2025-08-08 05:38:42'),
(27, 'Cân điện tử 120 tấn', NULL, '', 'Cân điện tử 120 tấn', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:38:55', '2025-08-08 05:38:55'),
(28, 'Nhập khẩu uỷ thác', NULL, '', 'Nhập khẩu uỷ thác', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:39:16', '2025-08-08 05:39:16'),
(29, 'Vận tải', NULL, '', 'Vận tải', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:39:33', '2025-08-08 05:39:33'),
(30, 'Pha cắt theo yêu cầu', NULL, '', 'Pha cắt theo yêu cầu', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:40:14', '2025-08-08 05:40:14'),
(31, 'Cắt xẻ cuộn', NULL, '', 'Cắt xẻ cuộn', NULL, NULL, NULL, NULL, NULL, '2025-08-08 05:40:24', '2025-08-08 05:40:24'),
(32, 'Dự án AEON Hà Đông', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.', '', 'Dự án AEON Hà Đông', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the when an printer took a galley of type and scrambled it to make.', NULL, NULL, NULL, NULL, '2025-08-08 08:26:32', '2025-08-08 08:26:32'),
(33, 'Dự án vin cổ loa', NULL, '', 'Dự án vin cổ loa', NULL, NULL, NULL, NULL, NULL, '2025-08-08 08:30:09', '2025-08-08 08:30:09'),
(34, 'Dự án vin tây mỗ', NULL, '', 'Dự án vin tây mỗ', NULL, NULL, NULL, NULL, NULL, '2025-08-08 08:30:24', '2025-08-08 08:30:24'),
(35, 'Dự án vin vũ yên', NULL, '', 'Dự án vin vũ yên', NULL, NULL, NULL, NULL, NULL, '2025-08-08 08:30:45', '2025-08-08 08:30:45'),
(36, 'Dự án AEON thanh hoá', NULL, NULL, 'Dự án AEON thanh hoá', NULL, NULL, NULL, NULL, NULL, '2025-08-08 08:31:09', '2025-08-08 10:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

DROP TABLE IF EXISTS `tbl_services`;
CREATE TABLE IF NOT EXISTS `tbl_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `slug` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `seo_id` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `name`, `avatar`, `slug`, `content`, `status`, `created_at`, `updated_at`, `seo_id`) VALUES
(1, 'Chấn dập đa địa hình', '/public_folder/files_upload/202508/840-angle.webp', 'chan-dap-da-dia-hinh', '<p>Bạn đ&atilde; biết c&aacute;c th&ocirc;ng tin li&ecirc;n quan đến th&eacute;p cuộn c&aacute;n n&oacute;ng ở thị trường Việt Nam chưa???</p>\n<p>Th&eacute;p C&ocirc;ng Nghiệp Việt Nam xin được cung cấp cho bạn v&agrave;i th&ocirc;ng tin căn cơ về HRC nh&eacute;</p>\n<h3 id=\"sec1\">Nguồn cung cấp HRC:</h3>\n<p>Từ tập đo&agrave;n H&ograve;a ph&aacute;t</p>\n<p>Từ C&ocirc;ng Ty Fomosa</p>\n<p>Từ Nhập Khẩu</p>\n<h3>Sản xuất ti&ecirc;u thụ th&eacute;p c&ocirc;ng nghiệp trong nước năm 2024</h3>\n<p>Sản lượng sản sản xuất trong nước năm 2024: tổng sản lượng th&eacute;p HRC sản xuất tại Việt Nam trong năm 2024 đạt khoảng 6.82 triệu tấn. So với năm 2023, sản lượng n&agrave;y tăng nhẹ khoảng 1.5%. Mức tăng trưởng kh&ocirc;ng đ&aacute;ng kể n&agrave;y cho thấy sự tăng trưởng khi&ecirc;m tốn trong năng lực sản xuất HRC nội địa hoặc hiệu suất sử dụng c&ocirc;ng suất hiện c&oacute;. C&oacute; thể thấy rằng, c&ocirc;ng suất sản xuất HRC trong nước kh&ocirc;ng c&oacute; sự đột ph&aacute; lớn trong năm 2024.</p>\n<p>Sản lượng ti&ecirc;u thụ nội địa năm 2024: tổng khối lượng th&eacute;p HRC ti&ecirc;u thụ tại thị trường Việt Nam trong năm 2024 đạt khoảng 6.58 triệu tấn.</p>\n<h3 id=\"sec2\">Th&eacute;p HRC được ti&ecirc;u thụ chủ yếu bởi c&aacute;c ng&agrave;nh c&ocirc;ng nghiệp:</h3>\n<p>T&ocirc;n mạ</p>\n<p>Sản xuất ống hộp đen v&agrave; mạ kẽm</p>\n<p>Đ&oacute;ng tầu thủy</p>\n<p>Kết cấu th&eacute;p nh&agrave; xưởng C&ocirc;ng Nghiệp</p>\n<h3 id=\"sec3\">Nhập khẩu HRC năm 2024:</h3>\n<p>Tổng sản lượng nhập khẩu: Việt Nam l&agrave; một quốc gia nhập khẩu đ&aacute;ng kể th&eacute;p HRC, với tổng khối lượng nhập khẩu trong năm 2024 đạt 12.6 triệu tấn. Khối lượng nhập khẩu HRC vượt xa sản lượng sản xuất trong nước (6.82 triệu tấn), cho thấy sự phụ thuộc lớn v&agrave;o nguồn cung nước ngo&agrave;i để đ&aacute;p ứng nhu cầu.</p>\n<p>Nguồn nhập khẩu HRC ch&iacute;nh v&agrave;o Việt Nam: Trung Quốc l&agrave; quốc gia xuất khẩu HRC lớn nhất sang Việt Nam. Trong 4 th&aacute;ng đầu năm 2024, th&eacute;p HRC nhập khẩu từ Trung Quốc chiếm tới 73% tổng lượng nhập khẩu. Tỷ lệ n&agrave;y vẫn duy tr&igrave; ở mức cao trong suốt năm, với 71% v&agrave;o th&aacute;ng 4, 72% trong 9 th&aacute;ng đầu năm v&agrave; 74% trong nửa đầu năm.</p>\n<p>C&aacute;c quốc gia kh&aacute;c như Đ&agrave;i Loan, H&agrave;n Quốc, Ấn Độ v&agrave; Nhật Bản cũng l&agrave; những nguồn cung HRC quan trọng cho Việt Nam. Sự thống trị của Trung Quốc trong nguồn cung nhập khẩu HRC cho thấy tầm quan trọng của mối quan hệ thương mại giữa hai nước trong lĩnh vực n&agrave;y.</p>\n<h3 id=\"sec4\">T&aacute;c động của việc nhập khẩu HRC thị trường nội địa:</h3>\n<p>Lượng HRC nhập khẩu lớn đ&atilde; g&acirc;y &aacute;p lực l&ecirc;n thị phần của c&aacute;c nh&agrave; sản xuất trong nước. nhận định rằng h&agrave;ng nhập khẩu chiếm lĩnh thị phần b&aacute;n h&agrave;ng của HRC sản xuất trong nước. Th&eacute;p HRC nhập khẩu, đặc biệt từ Trung Quốc, thường c&oacute; gi&aacute; thấp hơn so với sản phẩm nội địa từ 30 &ndash; 60USD/tấn. Điều n&agrave;y tạo ra một m&ocirc;i trường cạnh tranh khốc liệt cho c&aacute;c nh&agrave; sản xuất trong nước.</p>\n<h3 id=\"sec5\">Xuất khẩu HRC năm 2024</h3>\n<p>Tổng khối lượng xuất khẩu:</p>\n<p>Tổng khối lượng th&eacute;p HRC xuất khẩu từ Việt Nam trong năm 2024 đạt khoảng 2.25 triệu tấn. So với năm 2023, lượng xuất khẩu n&agrave;y giảm đ&aacute;ng kể, khoảng 33.8%.</p>\n<p>C&aacute;c thị trường xuất khẩu ch&iacute;nh:</p>\n<p>Li&ecirc;n minh ch&acirc;u &Acirc;u (EU) nhờ Hiệp định Thương mại Tự do Việt Nam &ndash; EU (EVFTA).</p>\n<p>Thị trường Mỹ</p>\n<p>C&aacute;c nước trong Đ&ocirc;ng Nam &Aacute;</p>\n<p>Như vậy thị trường th&eacute;p HRC tại Việt Nam trong năm 2024 cho thấy sự tăng trưởng nhẹ trong sản xuất nội địa nhưng vẫn phụ thuộc lớn v&agrave;o nhập khẩu để đ&aacute;p ứng nhu cầu ti&ecirc;u thụ. Lượng nhập khẩu HRC, chủ yếu từ Trung Quốc, vượt xa sản lượng sản xuất trong nước, g&acirc;y &aacute;p lực l&ecirc;n thị phần v&agrave; gi&aacute; cả của c&aacute;c nh&agrave; sản xuất nội địa. C&aacute;c yếu tố kinh tế vĩ m&ocirc;, ch&iacute;nh s&aacute;ch của ch&iacute;nh phủ v&agrave; diễn biến thị trường to&agrave;n cầu đ&atilde; định h&igrave;nh thị trường HRC trong suốt năm 2024. Việc điều tra v&agrave; &aacute;p dụng c&aacute;c biện ph&aacute;p ph&ograve;ng vệ thương mại đối với HRC nhập khẩu c&oacute; thể mang lại những thay đổi đ&aacute;ng kể cho thị trường trong tương lai, tạo ra một s&acirc;n chơi cạnh tranh hơn cho c&aacute;c doanh nghiệp th&eacute;p Việt Nam.</p>\n<p>Th&eacute;p Nghiệp HTC l&agrave; nh&agrave; nhập khẩu HRC h&agrave;ng đầu Việt Nam.</p>\n<p>Bạn h&atilde;y đến Th&eacute;p C&ocirc;ng Nghiệp HTC để được phục vụ hải l&ograve;ng c&aacute;c loại th&eacute;p C&ocirc;ng Nghiệp.</p>', 1, '2025-08-08 05:37:45', '2025-08-08 05:37:45', 23),
(2, 'Cắt bản mã lập là', '/public_folder/files_upload/202508/603-steel-1.webp', 'cat-ban-ma-lap-la', '<p>sdfsdfsdf</p>', 1, '2025-08-08 05:37:59', '2025-08-11 05:57:43', 24),
(3, 'Nhận gửi kho', '/public_folder/files_upload/202508/172-receive.webp', 'nhan-gui-kho', NULL, 1, '2025-08-08 05:38:14', '2025-08-08 05:38:14', 25),
(4, 'Cho thuê kho bãi', '/public_folder/files_upload/202508/426-storage-space.webp', 'cho-thue-kho-bai', NULL, 1, '2025-08-08 05:38:42', '2025-08-08 05:38:42', 26),
(5, 'Cân điện tử 120 tấn', '/public_folder/files_upload/202508/697-scale.webp', 'can-dien-tu-120-tan', NULL, 1, '2025-08-08 05:38:55', '2025-08-08 05:38:55', 27),
(6, 'Nhập khẩu uỷ thác', '/public_folder/files_upload/202508/322-import.webp', 'nhap-khau-uy-thac', NULL, 1, '2025-08-08 05:39:16', '2025-08-08 05:39:16', 28),
(7, 'Vận tải', '/public_folder/files_upload/202508/162-car.webp', 'van-tai', NULL, 1, '2025-08-08 05:39:33', '2025-08-08 05:39:33', 29),
(8, 'Pha cắt theo yêu cầu', '/public_folder/files_upload/202508/513-product-demand.webp', 'pha-cat-theo-yeu-cau', NULL, 1, '2025-08-08 05:40:14', '2025-08-08 05:40:14', 30),
(9, 'Cắt xẻ cuộn', '/public_folder/files_upload/202508/643-steel.webp', 'cat-xe-cuon', NULL, 1, '2025-08-08 05:40:24', '2025-08-08 05:40:24', 31);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_setting`
--

DROP TABLE IF EXISTS `tbl_setting`;
CREATE TABLE IF NOT EXISTS `tbl_setting` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=67 AVG_ROW_LENGTH=204 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_setting`
--

INSERT INTO `tbl_setting` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, '_token', 'vpYrrKsVLpsHgzDJ22QdoIgRfiS4TprV05TdnJed', '2025-08-09 03:12:02', '2025-08-11 03:50:24'),
(2, 'website_banner1', '/public_folder/files_upload/202508/417-slide26.webp', '2025-08-09 03:12:02', '2025-08-09 03:12:02'),
(3, 'website_video', '/public_folder/files_upload/202508/194-video-nha-may-thep.mp4', '2025-08-09 03:12:02', '2025-08-09 03:12:02'),
(4, 'setting_website_home1', 'H.T.C Việt Nam <br/>  Sản xuất kinh doanh thép công nghiệp', '2025-08-09 03:12:02', '2025-08-09 03:12:02'),
(5, 'setting_website_home2', 'Về chúng tôi', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(6, 'setting_website_home3', 'Đơn vị sản xuất thép uy tín <br> từ <span class=\"text-primary\"> 											năm 1998 </span>', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(7, 'setting_website_home4', 'HTC Vietnam được thành lập ngày 02/05/1998. Lĩnh vực hoạt động chủ yếu của công ty là kinh doanh các mặt hàng thép công nghiệp: thép tấm/kiện cán nóng; thép cuộn cán nóng (chính phẩm và loại 2); thép cuộn cán nguội; thép mạ các loại, thép hình đúc các loại (U, I, H, V); thép chế tạo…', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(8, 'website_banner2', '/public_folder/files_upload/202508/480-daa64304c7cc5ac4db931185b8ce7d35.webp', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(9, 'website_banner3', '/public_folder/files_upload/202508/421-659f09cf63ebad13108a5405ca799454.webp', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(10, 'website_banner4', '/public_folder/files_upload/202508/691-millennial-asia-businessmen-businesswomen-meeting-brainstorming-ideas-about-new-paperwork-project-colleagues-working-together-planning-success-strategy-enjoy-teamwork-small-modern-night-office.webp', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(11, 'setting_website_home5', 'H.T.C được xếp hạng top 500 doanh nghiệp lớn nhất Việt nam', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(12, 'setting_website_home6', 'Chúng tôi liên tục hoàn thiện quy trình, nâng cấp cơ sở vật chất, trang thiết bị, để sản xuất những sản phẩm chất lượng cao nhất, đáp ứng nhu cầu trong nước và hướng tới xuất khẩu.', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(13, 'setting_website_home7', 'Sản phẩm của chúng tôi', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(14, 'setting_website_home8', 'Nhà máy sản xuất hiện đại với đầy đủ các loại máy móc, thiết bị phục vụ nhu cầu của khách hàng đối với các mặt hàng thép cắt theo kích thước, thép định U, C, Z, thép kết cấu, thép bản mã, lập là.', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(15, 'setting_website_home9', 'Dịch vụ của chúng tôi', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(16, 'setting_website_home10', 'Nhà máy sản xuất hiện đại với đầy đủ các loại máy móc, thiết bị phục vụ nhu cầu của khách hàng đối với các mặt hàng thép cắt theo kích thước, thép định U, C, Z, thép kết cấu, thép bản mã, lập là.', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(17, 'setting_website_home11', 'Bạn muốn tìm hiểu về đặc tính kỹ thuật, giá thành sản phẩm cho dự án 									của bạn?', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(18, 'setting_website_home12', 'Dự án mà thép H.T.C được sử dụng', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(19, 'setting_website_home13', 'Sản phẩm uy tín chất lượng, được các nhà đâu tư Bất động sản hàng đầu Việt nam lựa chọn, đảm bảo yêu cầu kỹ thuật và tuổi thọ của công trình.', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(20, 'website_banner5', '/public_folder/files_upload/202508/710-pic4.webp', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(21, 'setting_website_home14', 'Nhập khẩu', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(22, 'setting_website_home15', 'HTC Việt Nam hiện đang nhập khẩu thép trực tiếp từ các nhà máy lớn trên thế giới', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(23, 'setting_website_home16', '#', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(24, 'website_banner6', '/public_folder/files_upload/202508/227-pic3.webp', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(25, 'setting_website_home17', 'Đối tác bán hàng', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(26, 'setting_website_home18', 'Chúng tôi cung cấp cho nhiều đối tác uy tín trong nước', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(27, 'setting_website_home19', '#', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(28, 'website_banner7', '/public_folder/files_upload/202508/599-pic5.webp', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(29, 'setting_website_home20', 'Nhà máy', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(30, 'setting_website_home21', 'Hai nhà máy với diện tích 100ha - trang thiết bị hiện đại', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(31, 'setting_website_home22', '#', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(32, 'setting_website_home23', 'Đối tác', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(33, 'setting_website_home24', 'Hiện nay đối tác của chúng tôi đến từ nhiều quốc gia trên thế giới như Trung Quốc, Nhật Bản, Nga, Hàn Quốc, Anh, Hồng Kông, Mỹ, Đài Loan...và đặc biệt các khách hàng là những tập đoàn lớn, uy tín tại Việt Nam.', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(34, 'setting_website_home25', 'Tin tức sự kiện', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(35, 'setting_website_home26', 'Thông tin cập nhật mới nhất về ngành thép và thông cáo của HTC Việt nam.', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(36, 'setting_website_home27', 'Khách hàng của chúng tôi', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(37, 'setting_website_home28', 'HTC hân hạnh phục vụ những khách hàng lớn trong và ngoài nước.', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(38, 'setting_website_home29', 'Thép HTC - niềm tin cho mọi công trình', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(39, 'setting_website_home30', 'Bạn muốn nhận được thông số kỹ thuật, báo giá tốt nhất cho công trình và dự án của bạn.', '2025-08-09 03:12:03', '2025-08-09 03:12:03'),
(40, 'website_logo', '/public_folder/files_upload/202508/744-logo-thanhbinh.gif', '2025-08-09 03:32:40', '2025-08-09 03:32:40'),
(41, 'setting_website_title', 'htc', '2025-08-09 03:51:21', '2025-08-09 03:51:21'),
(42, 'setting_website_desc', 'htc', '2025-08-09 03:51:21', '2025-08-09 03:51:21'),
(43, 'website_menu', '1', '2025-08-09 03:51:21', '2025-08-09 03:51:21'),
(44, 'website_menu1', '1', '2025-08-09 03:51:21', '2025-08-09 03:51:21'),
(45, 'setting_product', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', '2025-08-11 03:50:24', '2025-08-11 03:50:24'),
(46, 'setting_phone', '0934623336', '2025-08-11 07:30:16', '2025-08-11 07:30:16'),
(47, 'setting_email', 'Tamthanhbinhhtc@gmail.com', '2025-08-11 07:30:16', '2025-08-11 07:30:16'),
(48, 'setting_zalo', '0989898989', '2025-08-11 07:30:16', '2025-08-11 07:30:16'),
(49, 'setting_address1', 'Số 109, Ngõ 53 Đức Giang, Phường Đức Giang, Quận Long Biên, Hà Nội.', '2025-08-11 07:30:17', '2025-08-11 07:30:17'),
(50, 'setting_hotline1', '0934623336', '2025-08-11 07:30:17', '2025-08-11 07:30:17'),
(51, 'setting_address2', 'Số 109, Ngõ 53 Đức Giang, Phường Đức Giang, Quận Long Biên, Hà Nội.', '2025-08-11 07:30:17', '2025-08-11 07:30:17'),
(52, 'setting_hotline2', '0934623336', '2025-08-11 07:30:17', '2025-08-11 07:30:17'),
(53, 'setting_map1', NULL, '2025-08-11 07:35:56', '2025-08-11 07:35:56'),
(54, 'setting_map2', NULL, '2025-08-11 07:35:56', '2025-08-11 07:35:56'),
(55, 'setting_facebook', NULL, '2025-08-11 07:35:56', '2025-08-11 07:35:56'),
(56, 'setting_google', NULL, '2025-08-11 07:35:56', '2025-08-11 07:35:56'),
(57, 'setting_linkedin', NULL, '2025-08-11 07:35:56', '2025-08-11 07:35:56'),
(58, 'setting_instagram', NULL, '2025-08-11 07:35:56', '2025-08-11 07:35:56'),
(59, 'setting_twitter', NULL, '2025-08-11 07:35:56', '2025-08-11 07:35:56'),
(60, 'setting_map', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14899.585626821448!2d105.84077260000001!3d20.9967893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1752638373821!5m2!1svi!2s\"\r\nwidth=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '2025-08-11 07:35:56', '2025-08-11 07:36:07'),
(61, 'website_about1', '/public_folder/files_upload/202508/646-daa64304c7cc5ac4db931185b8ce7d35.webp', '2025-08-11 08:51:06', '2025-08-11 08:51:06'),
(62, 'setting_about2', '<ul><li>X&acirc;y dựng đội ngũ nh&acirc;n sự c&oacute; T&Acirc;M, c&oacute; T&Agrave;I v&igrave; sự ph&aacute;t triển bền vững của c&ocirc;ng ty.</li><li>Thỏa m&atilde;n nhu cầu của kh&aacute;ch h&agrave;ng bằng chất lượng &ndash; gi&aacute; &ndash; tiến độ &ndash; dịch vụ.</li><li>Mang lại gi&aacute; trị cao nhất cho c&ocirc;ng ty, CBNV, cổ đ&ocirc;ng; thực hiện tốt tr&aacute;ch nhiệm với x&atilde; hội</li></ul>', '2025-08-11 08:51:06', '2025-08-11 08:51:06'),
(63, 'website_about3', '/public_folder/files_upload/202508/646-daa64304c7cc5ac4db931185b8ce7d35.webp', '2025-08-11 08:51:06', '2025-08-11 08:51:06'),
(64, 'setting_about4', '<p>C&ocirc;ng ty cổ phần Thanh B&igrave;nh HTC Việt nam sẽ ph&aacute;t triển bền vững, l&agrave; một trong những doanh nghiệp sản xuất v&agrave; kinh doanh th&eacute;p c&ocirc;ng nghiệp c&oacute; năng lực v&agrave; uy t&iacute;n h&agrave;ng đầu tại Việt nam.</p>', '2025-08-11 08:51:06', '2025-08-11 08:51:06'),
(65, 'website_about5', '/public_folder/files_upload/202508/646-daa64304c7cc5ac4db931185b8ce7d35.webp', '2025-08-11 08:51:06', '2025-08-11 08:51:06'),
(66, 'setting_about6', '<ul><li>Kết hợp h&agrave;i h&ograve;a lợi &iacute;ch: c&ocirc;ng ty &ndash; kh&aacute;ch h&agrave;ng &ndash; nh&acirc;n vi&ecirc;n để ph&aacute;t triển bền vững</li><li>Chất lượng nh&acirc;n sự v&agrave; hiệu quả hoạt động l&agrave; sức mạnh sống c&ograve;n của c&ocirc;ng ty.</li><li>Tận t&acirc;m, chuy&ecirc;n nghiệp, đo&agrave;n kết, kỷ luật l&agrave; văn h&oacute;a doanh nghiệp ri&ecirc;ng của c&ocirc;ng ty.</li></ul>', '2025-08-11 08:51:06', '2025-08-11 08:51:06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

DROP TABLE IF EXISTS `tbl_slide`;
CREATE TABLE IF NOT EXISTS `tbl_slide` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `url` text COLLATE utf8mb4_unicode_ci,
  `position` int(10) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(4) DEFAULT '0',
  `name` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`id`, `avatar`, `url`, `position`, `created_at`, `updated_at`, `type`, `name`, `content`) VALUES
(1, '/public_folder/files_upload/202505/1-pc7ccabc01-c8ad-4ed9-b765-444db05bf58cwebp-1747795466.webp', '#', 1, '2025-05-21 02:44:32', NULL, 0, NULL, NULL),
(2, '/public_folder/files_upload/202505/20-pcwebp-1747795466.webp', '#', 2, '2025-05-21 02:44:32', NULL, 0, NULL, NULL),
(3, '/public_folder/files_upload/202505/20-mwebp-1747795503.webp', '#', 1, '2025-05-21 02:45:10', NULL, 1, NULL, NULL),
(4, '/public_folder/files_upload/202505/index-m90999e71-59db-4f29-b622-21f99c836962webp-1747795503.webp', '#', 2, '2025-05-21 02:45:10', NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tags`
--

DROP TABLE IF EXISTS `tbl_tags`;
CREATE TABLE IF NOT EXISTS `tbl_tags` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 AVG_ROW_LENGTH=2340 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_tags`
--

INSERT INTO `tbl_tags` (`id`, `name`, `slug`, `created_at`, `updated_at`, `status`) VALUES
(1, 'thép', 'thep', '2025-08-08 04:32:14', '2025-08-08 04:32:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tags_views`
--

DROP TABLE IF EXISTS `tbl_tags_views`;
CREATE TABLE IF NOT EXISTS `tbl_tags_views` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) DEFAULT '0',
  `post_id` int(11) DEFAULT NULL COMMENT 'lang id',
  `tags_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `id` (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 AVG_ROW_LENGTH=409 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_tags_views`
--

INSERT INTO `tbl_tags_views` (`id`, `type`, `post_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, '2025-08-08 04:32:14', '2025-08-08 04:32:14'),
(2, 1, 2, 1, '2025-08-08 04:33:13', '2025-08-08 04:33:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_timeline`
--

DROP TABLE IF EXISTS `tbl_timeline`;
CREATE TABLE IF NOT EXISTS `tbl_timeline` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) DEFAULT '0',
  `name` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_timeline`
--

INSERT INTO `tbl_timeline` (`id`, `year`, `name`, `content`, `created_at`, `updated_at`) VALUES
(7, 1214845200, '2007 - 2008', 'Công ty được xếp hạng top 500 doanh nghiệp lớn nhất Việt nam và đứng thứ 28 trong các doanh nghiệp kinh doanh thép Việt nam.', '2024-09-19 02:06:18', '2025-08-11 08:29:43'),
(8, 1243789200, '2009', 'HTC Việt Nam được thành lập ngày 02/05/1998. Lĩnh vực hoạt động chủ yếu của công ty là kinh doanh các mặt hàng thép công nghiệp: thép tấm/kiện cán	nóng; thép cuộn cán nóng (chính phẩm và loại 2); thép cuộn cán nguội;						thép mạ các loại, thép hình đúc các loại (U, I, H, V); thép chế tạo…', '2024-09-19 02:09:58', '2025-08-11 08:29:09'),
(9, 894042000, '2/5/1998', 'Công ty cổ phần Thanh Bình HTC Việt nam (HTC Vietnam) được thành lập', '2024-09-19 04:00:41', '2025-08-11 08:27:56'),
(10, 1312995600, '2011 - 2013', 'Công ty cổ phần Thanh Bình HTC Việt nam (HTC Vietnam) được thành lập', '2025-08-11 08:30:08', '2025-08-11 08:30:08'),
(11, 1660150800, '2022', 'Công ty cổ phần Thanh Bình HTC Việt nam (HTC Vietnam) được thành lập', '2025-08-11 08:30:17', '2025-08-11 08:30:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text COLLATE utf8_unicode_ci,
  `generate_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` text COLLATE utf8_unicode_ci,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(25) COLLATE utf8_unicode_ci DEFAULT '0',
  `address` text COLLATE utf8_unicode_ci,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8_unicode_ci,
  `remember_token` text COLLATE utf8_unicode_ci,
  `admin` tinyint(4) DEFAULT '0',
  `root` tinyint(4) NOT NULL DEFAULT '0',
  `status` tinyint(4) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `point` decimal(20,2) DEFAULT '0.00',
  `type` int(11) DEFAULT '0',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=2 AVG_ROW_LENGTH=4096 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `email`, `generate_code`, `password`, `name`, `dob`, `address`, `phone`, `avatar`, `remember_token`, `admin`, `root`, `status`, `created_at`, `updated_at`, `point`, `type`) VALUES
(1, 'admin@gmail.com', '12312321', '$2y$10$VHzlWXRPTA0yWl896ghxqOUQZBQNTAcm5xurE/CRnWoLw7CU8oge6', 'admin', '1652806800', 'hnnnnn', '02432056168', NULL, 'P3YCiu1kE89AxqMyqpIArBGnq7SZg9ntIyIkU4MZAS66iPrtrAgDmLJJSluJ', 1, 1, 1, '2019-03-05 03:41:13', '2024-09-30 18:38:15', '249000.00', 0);
COMMIT;

/* !40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/* !40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/* !40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
