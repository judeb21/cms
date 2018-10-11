-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2018 at 12:49 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog1`
--

-- --------------------------------------------------------

--
-- Table structure for table `annuals`
--

CREATE TABLE `annuals` (
  `id` int(10) UNSIGNED NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateStart` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `annuals`
--

INSERT INTO `annuals` (`id`, `link`, `title`, `time`, `location`, `dateStart`, `created_at`, `updated_at`) VALUES
(2, '', 'Septemner Annual Meetin', '10:00 AM', 'Mushin', '2018-08-07 00:00:00', '2018-09-06 12:18:31', '2018-09-06 12:18:31'),
(3, 'http://issan.dodo.ng/contact', 'Annual Meeting', '12:00 AM', 'Isolo', '2018-09-22 00:00:00', '2018-09-06 12:22:51', '2018-09-19 09:28:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_posts`
--

CREATE TABLE `category_posts` (
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(80) COLLATE utf8mb4_unicode_ci NOT NULL,
  `day` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateStart` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `title`, `day`, `location`, `time`, `dateStart`, `created_at`, `updated_at`) VALUES
(13, 'General meeting October', '', 'Ibadan Express Way', '10:00 AM', '2018-10-02', '2018-09-03 12:57:16', '2018-09-03 12:57:16'),
(14, 'New general meeting', '', 'Mushin', '12:00 Pm', '2018-08-29', '2018-09-03 13:07:23', '2018-09-03 16:22:10'),
(15, 'General Event 1', '', 'Marina Lagos', '1:00 PM', '2018-11-07', '2018-09-03 16:23:01', '2018-09-03 16:23:01'),
(16, 'General Meetin 2', '', 'UBA headquarters Marina', '1:00 PM', '2018-09-25', '2018-09-14 15:47:32', '2018-09-14 15:47:32'),
(17, 'General Meeting', '', 'UBA headquaters Marina', '1:00 PM', '0000-00-00', '2018-09-14 15:48:56', '2018-09-14 15:48:56'),
(18, 'General meeting 3', '', 'UBA marina', '1:00PM', '2018-10-23', '2018-09-14 15:58:44', '2018-09-14 15:58:44'),
(20, 'General Meeting', '', 'UBA headquarter Marina Lagos', '1:00 PM', '2018-10-02', '2018-09-17 09:39:54', '2018-09-17 09:39:54'),
(21, 'General Meeting', '', 'Marina Lagos', '1:00PM', '2018-10-20', '2018-09-17 09:52:49', '2018-09-17 09:52:49'),
(23, 'General Meeting', '', 'UBA Marina', '1:00PM', '2018-10-02', '2018-09-17 11:15:17', '2018-09-17 11:15:17'),
(24, 'General Meeting', '', 'UBA headquarters Marina Lagos', '1:00PM', '2018-10-02', '2018-09-17 11:23:41', '2018-09-17 11:23:41'),
(25, 'General Meeting', '', 'UBA headquarter, Marina Lagos', '1:00PM', '2018-09-25', '2018-09-17 11:29:50', '2018-09-17 11:29:50'),
(26, 'General Meeting', '', 'UBA marina', '1:00PM', '2018-10-09', '2018-09-18 09:06:48', '2018-09-18 09:06:48'),
(27, 'General Meeting', '', 'UBA headquarters marina', '1:00PM', '2018-10-30', '2018-09-18 09:16:58', '2018-09-18 09:16:58'),
(28, 'General', '', 'UBA headquarters Marina', '1:00PM', '2018-11-06', '2018-09-18 09:18:23', '2018-09-18 09:18:23'),
(29, 'General', '', 'UBA Marina Lagos', '1:00PM', '2018-11-06', '2018-09-18 09:19:39', '2018-09-18 09:19:39');

-- --------------------------------------------------------

--
-- Table structure for table `meetings`
--

CREATE TABLE `meetings` (
  `id` int(10) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `files` blob NOT NULL,
  `title` varchar(70) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meetings`
--

INSERT INTO `meetings` (`id`, `date`, `image`, `files`, `title`, `created_at`, `updated_at`) VALUES
(10, 'Jan 2019', 'Asset-1.png', 0x41737365742d312e706e67, 'Login', '2018-09-03 11:49:35', '2018-09-03 11:49:35'),
(15, 'October 2018', 'the-peel_DODO-blog2.jpg', 0x42616e636f72204d656d6265722050522047756964656c696e6573202d20323031382e706466, 'General', '2018-09-04 10:51:55', '2018-09-04 10:51:55'),
(16, 'Feburary 2017', 'Capture7.PNG', 0x76657273696f6e2e747874, 'Electronic Banking Fraud In Nigeria', '2018-09-19 14:16:49', '2018-09-19 14:16:49'),
(17, 'March 2017', 'Capture2.PNG', 0x4c6963656e73652e747874, 'Cybersecurity Incidence In The Financial Sector', '2018-09-19 14:18:17', '2018-09-19 14:18:17'),
(18, 'January 2016', 'CR.gif', 0x7777772e446f776e6c6f616468612e636f6d2e747874, 'The Nigerian Cybercrime Act And Its Impact On Organisations', '2018-09-19 15:07:13', '2018-09-19 15:07:13');

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
(3, '2018_08_23_075558_create_posts_table', 1),
(4, '2018_08_23_081232_create_categories_table', 1),
(5, '2018_08_23_081510_create_category_posts_table', 1),
(6, '2018_08_27_074055_laratrust_setup_tables', 1),
(7, '2018_08_30_145217_create_meetings_table', 1),
(8, '2018_08_30_145252_create_generals_table', 1),
(9, '2018_08_30_145316_create_annuals_table', 1),
(10, '2018_09_06_094753_create_permissions_table', 2),
(11, '2018_09_06_095122_create_roles_table', 2),
(12, '2018_09_06_100822_create_permissions_table', 3),
(13, '2018_09_06_101355_create_user_roles_table', 4),
(14, '2018_09_06_123100_create_role_users_table', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'post-create', 'Create Post', '2018-09-06 09:35:22', '2018-09-06 09:35:22'),
(2, 'post-edit', 'Edit Post', '2018-09-06 09:35:50', '2018-09-06 09:35:50'),
(3, 'post-delete', 'Delete Post', '2018-09-06 09:36:17', '2018-09-06 09:36:17'),
(4, 'create-user', 'Create User', '2018-09-06 09:36:42', '2018-09-06 09:36:42'),
(5, 'edit-user', 'Edit User', '2018-09-06 09:37:03', '2018-09-06 09:37:03'),
(6, 'delete-user', 'Delete User', '2018-09-06 09:37:28', '2018-09-06 09:37:28'),
(7, 'create-ACL', 'Create ACL', '2018-09-06 09:38:51', '2018-09-06 09:38:51'),
(8, 'delete-acl', 'Delete ACL', '2018-09-06 09:39:20', '2018-09-06 09:39:20'),
(9, 'read-profile', 'Read Profile', '2018-09-06 09:40:20', '2018-09-06 09:40:20'),
(10, 'edit-acl', 'Edit ACL', '2018-09-06 09:40:47', '2018-09-06 09:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`id`, `role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(3, 2, 1, NULL, NULL),
(4, 2, 2, NULL, NULL),
(5, 2, 3, NULL, NULL),
(6, 2, 4, NULL, NULL),
(7, 2, 6, NULL, NULL),
(8, 1, 1, NULL, NULL),
(9, 1, 2, NULL, NULL),
(10, 1, 3, NULL, NULL),
(11, 1, 4, NULL, NULL),
(12, 1, 5, NULL, NULL),
(13, 1, 6, NULL, NULL),
(14, 1, 7, NULL, NULL),
(15, 1, 8, NULL, NULL),
(16, 1, 9, NULL, NULL),
(17, 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(10) UNSIGNED NOT NULL,
  `publish` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `slug`, `user_id`, `title`, `image`, `excerpt`, `body`, `count`, `publish`, `status`, `created_at`, `updated_at`) VALUES
(18, 'new-post3', 11, 'New Post3', 'Capture.PNG', 'ew pOST 3', '<p>ew pOST 3</p>', 0, '2017-11-13 00:00:00', 1, '2017-11-13 13:52:40', '2018-09-26 09:55:29'),
(19, 'new-post-4', 11, 'New  Post 4', '', 'New Post 4', '<p>New Post 4</p>', 0, '2017-06-15 00:00:00', 1, '2017-06-15 12:59:38', '2018-09-26 09:55:58'),
(22, 'new-post-5', 11, 'New Post 5', '', 'New Post 5', '<p>New Post 5</p>', 0, '2017-06-15 00:00:00', 1, '2017-06-15 13:04:49', '2018-09-26 09:56:27'),
(23, 'new-post-6', 11, 'New Post 6', '', 'New Post 6', '<p>New Post 6</p>', 0, '2017-05-18 00:00:00', 1, '2017-05-18 13:05:13', '2018-09-26 09:56:50'),
(24, 'new-post-7', 11, 'New Post 7', '', 'ew Post 7', '<p>ew Post 7</p>', 0, '2017-05-15 00:00:00', 1, '2017-05-15 13:05:31', '2018-09-26 09:57:36'),
(25, 'new-post-8', 11, 'New post 8', '', 'New Post 8', '<p>New Post 8</p>', 0, '2017-05-08 00:00:00', 1, '2017-05-08 13:05:59', '2018-09-26 09:58:06'),
(26, 'new-post-9', 11, 'New Post 9', '', 'New Post 9', 'New Post 9', 0, '2017-02-14 00:00:00', 1, '2017-02-14 14:06:20', '2018-09-26 09:58:33'),
(27, 'new-post-10-with-an-edit', 11, 'New post 10 with an Edit', '', 'New Post 10', '<p>New Post 10</p>', 0, '2017-02-03 00:00:00', 1, '2017-02-03 14:06:41', '2018-09-26 09:59:07');
INSERT INTO `posts` (`id`, `slug`, `user_id`, `title`, `image`, `excerpt`, `body`, `count`, `publish`, `status`, `created_at`, `updated_at`) VALUES
(28, 'this-is-a-test-is', 11, 'This is a test is', 'Capture.PNG', 'This is a sample!\r\n\r\n', '<h1>This is a sample!</h1>\r\n<p><img src=\"data:image/png;base64,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\"\r\n  /><br /></p>\r\n<p><br /></p>', 0, '2017-03-07 00:00:00', 1, '2017-03-07 11:50:17', '2018-09-26 09:59:57');
INSERT INTO `posts` (`id`, `slug`, `user_id`, `title`, `image`, `excerpt`, `body`, `count`, `publish`, `status`, `created_at`, `updated_at`) VALUES
(29, 'this-is-a-draft', 11, 'This is a draft', '', 'I\'M TESTING THIS ONCE MORE', '<p>I\'M TESTING THIS ONCE MORE</p>', 0, '2017-09-13 00:00:00', 1, '2017-09-13 13:34:29', '2018-09-26 10:00:57'),
(30, 'one-more-draft', 11, 'ONE MORE DRAFT', '', 'FOR TESTING', '<p>FOR TESTING</p>', 0, '2017-05-17 00:00:00', 1, '2017-05-17 13:39:09', '2018-09-26 10:01:31'),
(32, 'ust-new-draft', 11, 'ust new draft', '', 'new draft', '<p>new draft</p>', 0, '2018-09-02 16:45:00', 1, '2018-01-02 14:43:54', '2018-09-28 13:28:46'),
(33, 'new-post-for-later', 11, 'new post for later', 'Capture.PNG', 'new post for later', '<p>new post for later</p>', 0, '2018-01-01 00:00:00', 1, '2018-01-01 14:46:53', '2018-09-26 10:02:28'),
(37, 'drafts-to-be-saved', 11, 'Drafts to be saved', 'postusercontroller.PNG', 'draft to be saved.', '<p>draft to be saved.</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 08:17:19', '2018-09-24 08:17:19'),
(39, 'draft-control2', 11, 'Draft control2', 'postusercontroller.PNG', 'draft control 2', '<p>draft control 2</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 08:45:40', '2018-09-24 08:45:40'),
(40, 'draft', 11, 'Draft', 'postusercontroller.PNG', 'Draft', '<p>Draft</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 08:50:16', '2018-09-24 08:50:16'),
(41, 'draft-post', 11, 'Draft Post', 'postModel.PNG', 'Draft Post', '<p>Draft Post</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 12:44:54', '2018-09-24 12:44:54'),
(42, 'new-draft-post', 11, 'new draft post', 'postModel.PNG', 'new draft post', '<p>new draft post</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 12:58:55', '2018-09-24 12:58:55'),
(43, 'new-draft-for-post', 11, 'new draft for post', 'Capture7.PNG', 'new draft for post', '<p>new draft for post</p>', 0, '2017-12-11 00:00:00', 1, '2017-12-11 14:02:39', '2018-09-26 10:02:55'),
(44, 'draft-controller', 11, 'draft controller', 'Capture.PNG', 'drft controller', '<p>drft controller</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 13:05:36', '2018-09-24 13:05:36'),
(45, 'how-did-it-go', 11, 'how did it go', '', 'Pressure got me done', '<p>Pressure got me done</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 13:30:06', '2018-09-24 13:30:06'),
(46, 'do-it-all-again', 11, 'Do it all again', 'Capture7.PNG', 'I\'mma do it all again', '<p>I\'mma do it all again</p>', 0, '2017-10-16 00:00:00', 1, '2017-10-16 13:37:37', '2018-09-26 10:03:30'),
(47, 'new-post-for-draft', 11, 'new post for draft', 'Capture7.PNG', 'no one can take your place', '<p>no one can take your place</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 13:42:09', '2018-09-24 13:42:09'),
(48, 'test-for-edit', 11, 'test for edit', 'Capture7.PNG', 'test for edit', '<p>test for edit</p>', 0, '2017-04-11 00:00:00', 1, '2017-04-11 13:46:08', '2018-09-26 10:04:03'),
(49, 'time-bomb', 11, 'Time bomb', 'Capture.PNG', 'by samini', '<p>by samini</p>', 0, '2016-12-21 00:00:00', 1, '2016-12-21 14:47:08', '2018-09-26 12:42:51'),
(50, 'count-down', 11, 'count down', '', 'save for draft', '<p>save for draft</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 13:50:15', '2018-09-24 13:50:15'),
(51, 'draft-testing', 11, 'Draft testing', '', 'draft testing', '<p>draft testing</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 14:11:09', '2018-09-24 14:11:09'),
(52, 'testing', 11, 'Testing', '', 'testing draft', '<p>testing draft</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-24 14:27:49', '2018-09-24 14:27:49'),
(54, 'testing-draft', 11, 'Testing draft', '', 'Testing draft', '<p>Testing draft</p>', 0, '2017-07-17 00:00:00', 1, '2017-07-17 14:33:54', '2018-09-26 09:53:46'),
(55, 'draft-test', 11, 'draft test', '', 'draft test', '<p>draft test</p>', 0, '2017-07-11 00:00:00', 1, '2017-07-11 14:35:37', '2018-09-25 14:14:18'),
(56, 'post-title', 11, 'post title', '', 'post title', '<p>post title<br /></p>', 0, '0000-00-00 00:00:00', 0, '2018-09-25 10:15:39', '2018-09-25 10:15:39'),
(57, 'ready-to-explode', 11, 'ready to explode', '', 'time bomb', '<p>time bomb<br /></p>', 0, '0000-00-00 00:00:00', 0, '2018-09-25 10:20:03', '2018-09-25 10:20:03'),
(58, 'not-now', 11, 'not now', '', 'not now', '<p>not now</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-26 15:05:43', '2018-09-26 15:05:43'),
(60, 'help-now', 11, 'help now', '', 'help now', '<p>help now</p>', 0, '0000-00-00 00:00:00', 0, '2018-09-26 15:07:15', '2018-09-26 15:07:15'),
(61, 'this-is-a-thank-you', 11, 'This is a thank you', '', 'return redirect', '<p>return redirect</p>', 0, '2018-08-16 00:25:00', 1, '2018-09-26 15:09:07', '2018-10-02 12:13:49'),
(62, 'blogpost', 13, 'blogpost', 'Capture.PNG', 'blog post', '<p>blog post</p>', 0, '0000-00-00 00:00:00', 1, '2018-10-02 11:04:49', '2018-10-02 11:04:49'),
(67, 'posted-by', 13, 'posted by', 'Capture.PNG', 'by posted', '<p>by posted</p>', 0, '2018-10-23 16:45:00', 1, '2018-10-02 11:49:13', '2018-10-02 11:49:13');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', 'Allows User to Everything in the Website', '2018-09-06 09:59:36', '2018-09-06 09:59:36'),
(2, 'Administrator', 'Has the Same Access Level With the Superadministrator', '2018-09-06 10:27:09', '2018-09-06 10:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 7, 1, NULL, NULL),
(3, 8, 1, NULL, NULL),
(4, 9, 1, NULL, NULL),
(5, 10, 1, NULL, NULL),
(6, 11, 1, NULL, NULL),
(7, 12, 2, NULL, NULL),
(10, 13, 2, NULL, NULL),
(11, 14, 2, NULL, NULL),
(12, 15, 2, NULL, NULL),
(13, 16, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobTitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `description`, `jobTitle`, `phone`, `status`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 'Susan', 'hello@dodo.ng', '$2y$10$4PwYU/vMSM.X1ic./AoFeeAV0sKl2YVAVcZyhsv8hS4A9fLqnaGdG', '', 'CEO DODO DESIGN AGENCY', '', 1, '1532383912.jpg', 'KkdetyEqqfTY8gYGQK5RPDniCIDtkvTvb4ZHd01J7zmbXwHaP0kSzaaPcLit', '2018-09-06 14:06:33', '2018-09-28 12:29:50'),
(13, 'Jude', 'jude@dodo.ng', '$2y$10$nu3uPM0AI/vi767135GRZOe9VFjh00xy0lLQaniZH8H9.PdhTI8ki', '', 'Backend Developer', '', 1, 'Jude.jpg', NULL, '2018-09-06 15:04:52', '2018-09-13 13:01:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `annuals`
--
ALTER TABLE `annuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_posts`
--
ALTER TABLE `category_posts`
  ADD KEY `category_posts_post_id_index` (`post_id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `meetings`
--
ALTER TABLE `meetings`
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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `publish` (`publish`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
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
-- AUTO_INCREMENT for table `annuals`
--
ALTER TABLE `annuals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `meetings`
--
ALTER TABLE `meetings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
