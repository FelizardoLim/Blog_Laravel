-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 05:06 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `created_at`, `updated_at`, `user_id`) VALUES
(1, 'The Frogs & the Ox', '<p>An Ox came down to a reedy pool to drink. </p><p>As he splashed heavily into the water, he crushed a young Frog into the mud.\r\n</p><p>\r\nThe old Frog soon missed the little one and asked his brothers and sisters what had become of him.\r\n\r\n"A great big monster," said one of them, "stepped on little brother with one of his huge feet!"\r\n\r\n"Big, was he!" said the old Frog, puffing herself up. "Was he as big as this?"\r\n\r\n"Oh, much bigger!" they cried.\r\n\r\nThe Frog puffed up still more.\r\n"He could not have been bigger than this," she said. But the little Frogs all declared that the monster was much, much bigger and the old Frog kept puffing herself out more and more until, all at once, she burst.\r\n</p><p><b>\r\nDo not attempt the impossible.</b></p>', '2017-04-17 18:07:56', '2017-04-20 23:52:02', 1),
(2, 'The Dog & His Reflection', '<p style="text-align: justify; ">A Dog, to whom the butcher had thrown a bone, was hurrying home with his prize as fast as he could go. </p><p style="text-align: justify; ">As he crossed a narrow footbridge, he happened to look down and saw himself reflected in the quiet water as if in a mirror. But the greedy Dog thought he saw a real Dog carrying a bone much bigger than his own.\r\n\r\nIf he had stopped to think he would have known better. </p><p style="text-align: justify; ">But instead of thinking, he dropped his bone and sprang at the Dog in the river, only to find himself swimming for dear life to reach the shore. At last he managed to scramble out, and as he stood sadly thinking about the good bone he had lost, he realized what a stupid Dog he had been.\r\n</p><p style="text-align: justify;"><b>\r\nIt is very foolish to be greedy.</b></p>', '2017-04-17 18:20:46', '2017-04-24 20:03:30', 3),
(3, 'The Wolf in Sheep''s Clothing', '<p style="text-align: justify; ">A certain Wolf could not get enough to eat because of the watchfulness of the Shepherds. </p><p style="text-align: justify;">But one night he found a sheep skin that had been cast aside and forgotten. The next day, dressed in the skin, the Wolf strolled into the pasture with the Sheep. Soon a little Lamb was following him about and was quickly led away to slaughter.\r\n</p><p style="text-align: justify;">\r\nThat evening the Wolf entered the fold with the flock. But it happened that the Shepherd took a fancy for mutton broth that very evening, and, picking up a knife, went to the fold. There the first he laid hands on and killed was the Wolf.\r\n</p><p style="text-align: justify;"><b>\r\nThe evil doer often comes to harm through his own deceit.</b></p>', '2017-04-17 18:21:09', '2017-04-24 20:03:38', 3),
(5, 'The Lion & the Mouse', '<p style="text-align: justify;">A Lion lay asleep in the forest, his great head resting on his paws. </p><p style="text-align: justify;">A timid little Mouse came upon him unexpectedly, and in her fright and haste to get away, ran across the Lion''s nose. Roused from his nap, the Lion laid his huge paw angrily on the tiny creature to kill her.\r\n\r\n"Spare me!" begged the poor Mouse. "Please let me go and some day I will surely repay you."\r\n</p><p style="text-align: justify;">\r\nThe Lion was much amused to think that a Mouse could ever help him. But he was generous and finally let the Mouse go.\r\n\r\nSome days later, while stalking his prey in the forest, the Lion was caught in the toils of a hunter''s net. Unable to free himself, he filled the forest with his angry roaring. </p><p style="text-align: justify;">The Mouse knew the voice and quickly found the Lion struggling in the net. Running to one of the great ropes that bound him, she gnawed it until it parted, and soon the Lion was free.\r\n\r\n"You laughed when I said I would repay you," said the Mouse. "Now you see that even a Mouse can help a Lion."\r\n</p><p style="text-align: justify; "><b>\r\nA kindness is never wasted.</b></p>', '2017-04-17 18:22:08', '2017-04-24 22:24:18', 2),
(6, 'The Plane Tree', '<p style="text-align: justify;">Two Travellers, walking in the noonday sun, sought the shade of a widespreading tree to rest. </p><p style="text-align: justify;">As they lay looking up among the pleasant leaves, they saw that it was a Plane Tree.\r\n\r\n"How useless is the Plane!" said one of them. "It bears no fruit whatever, and only serves to litter the ground with leaves."\r\n</p><p style="text-align: justify;">\r\n"Ungrateful creatures!" said a voice from the Plane Tree. "You lie here in my cooling shade, and yet you say I am useless! Thus ungratefully, O Jupiter, do men receive their blessings!"\r\n</p><p style="text-align: justify;"><b>\r\nOur best blessings are often the least appreciated.</b></p>', '2017-04-17 18:22:25', '2017-04-18 20:26:43', 2),
(7, 'The Oak & the Reeds', '<p style="text-align: justify; ">A Giant Oak stood near a brook in which grew some slender Reeds. </p><p style="text-align: justify;">When the wind blew, the great Oak stood proudly upright with its hundred arms uplifted to the sky. But the Reeds bowed low in the wind and sang a sad and mournful song.\r\n\r\n"You have reason to complain," said the Oak. "The slightest breeze that ruffles the surface of the water makes you bow your heads, while I, the mighty Oak, stand upright and firm before the howling tempest."\r\n</p><p style="text-align: justify;">\r\n"Do not worry about us," replied the Reeds. "The winds do not harm us. We bow before them and so we do not break. You, in all your pride and strength, have so far resisted their blows. But the end is coming."\r\n</p><p style="text-align: justify; ">\r\nAs the Reeds spoke a great hurricane rushed out of the north. The Oak stood proudly and fought against the storm, while the yielding Reeds bowed low. The wind redoubled in fury, and all at once the great tree fell, torn up by the roots, and lay among the pitying Reeds.\r\n</p><p style="text-align: justify;"><b>\r\nBetter to yield when it is folly to resist, than to resist stubbornly and be destroyed.</b></p>', '2017-04-17 18:46:26', '2017-04-18 19:40:25', 2),
(12, 'New Post', '<p><b>Post details....</b></p>', '2017-04-23 19:23:30', '2017-04-23 19:23:30', 4),
(18, ' ', ' ', '2017-04-24 17:23:17', '2017-04-24 17:23:17', 3),
(21, ' ', ' ', '2017-04-24 17:53:53', '2017-04-24 17:53:53', 2),
(22, ' ', ' ', '2017-04-24 20:06:35', '2017-04-24 20:06:35', 1),
(31, ' ', ' ', '2017-04-24 23:54:18', '2017-04-24 23:54:18', 1),
(32, ' ', ' ', '2017-04-25 16:16:01', '2017-04-25 16:16:01', 1),
(33, ' ', ' ', '2017-04-25 17:27:09', '2017-04-25 17:27:09', 1),
(34, ' ', ' ', '2017-04-25 19:29:28', '2017-04-25 19:29:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, 'No more comment also. CHANGING...', 2, 1, '2017-04-17 20:42:08', '2017-04-18 23:53:10'),
(2, 'Second Comment', 3, 4, '2017-04-17 20:53:44', '2017-04-17 20:53:44'),
(3, 'Third Comment', 3, 2, '2017-04-17 20:53:54', '2017-04-17 20:53:54'),
(6, 'Great story!! the quick brown fox jumps over the lazy dog the quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dog', 1, 1, '2017-04-18 22:12:22', '2017-04-23 17:24:05'),
(8, 'This fable is very moving. I really loved how the story ended with a moral story.', 2, 5, '2017-04-18 23:56:35', '2017-04-19 00:04:44'),
(9, 'Haru Liked this Article', 1, 6, '2017-04-19 17:26:35', '2017-04-19 17:26:35'),
(11, 'Another comment', 3, 1, '2017-04-19 22:39:13', '2017-04-19 22:39:13'),
(12, 'Comment 1', 3, 7, '2017-04-19 23:38:36', '2017-04-19 23:38:36'),
(13, '2nd Comment to this article.', 2, 2, '2017-04-23 17:52:32', '2017-04-23 17:52:32'),
(14, 'Trying comment for test purposes. \r\n\r\nTrying comment for test purposes. AGAIN.', 2, 9, '2017-04-23 19:02:50', '2017-04-23 19:03:33'),
(15, 'Another comment for real.', 2, 9, '2017-04-23 19:04:48', '2017-04-23 19:04:48'),
(16, 'pwede na magcomment?', 2, 21, '2017-04-24 18:06:22', '2017-04-24 18:06:22'),
(22, 'Nice post.', 2, 22, '2017-04-24 22:26:22', '2017-04-24 22:26:22'),
(23, 'First comment for this article.', 2, 3, '2017-04-24 22:27:07', '2017-04-24 22:27:07'),
(24, 'First comment for this post.', 2, 18, '2017-04-24 22:27:33', '2017-04-24 22:27:33'),
(26, 'qweqwe', 1, 26, '2017-04-25 23:10:38', '2017-04-25 23:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `follow`
--

CREATE TABLE `follow` (
  `id` int(10) UNSIGNED NOT NULL,
  `requester` int(10) UNSIGNED NOT NULL,
  `approver` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follow`
--

INSERT INTO `follow` (`id`, `requester`, `approver`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 2, 1, NULL, NULL),
(8, 1, 2, 1, NULL, NULL),
(9, 1, 2, 1, NULL, NULL),
(10, 1, 2, 1, NULL, NULL),
(11, 1, 2, 1, NULL, NULL),
(12, 1, 3, 1, NULL, NULL),
(13, 3, 1, 1, NULL, NULL),
(14, 1, 2, 1, NULL, NULL),
(15, 3, 2, 1, NULL, NULL),
(16, 2, 4, 0, NULL, NULL),
(17, 3, 4, 0, NULL, NULL),
(18, 1, 4, 0, NULL, NULL),
(19, 2, 7, 0, NULL, NULL);

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
(3, '2017_04_15_063214_create_articles_table', 1),
(4, '2017_04_15_072248_create_comments_table', 1),
(5, '2017_04_18_015506_create_profiles_table', 1),
(6, '2017_04_20_050454_create_replies_table', 2),
(7, '2017_04_21_004219_create_follow_table', 3),
(8, '2017_04_24_142016_create_photos_table', 4),
(9, '2017_04_25_072312_create_videos_table', 5);

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
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `id` int(10) UNSIGNED NOT NULL,
  `caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`id`, `caption`, `photo_src`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, '<b>No more caption.</b>', 'photo14.png', 3, 14, '2017-04-24 16:29:28', '2017-04-24 19:23:55'),
(2, 'test again test again', 'photo15.png', 3, 15, '2017-04-24 16:30:06', '2017-04-24 16:30:06'),
(3, '<p><b>Third caption to latest photo post.&nbsp;</b></p><p style="text-align: justify;">The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog. The quick brown fox jumps over the lazy dog.&nbsp;</p>', 'photo18.jpeg', 3, 18, '2017-04-24 17:23:17', '2017-04-24 20:02:56'),
(4, '<p><b>Trying new thumbnail for photos.</b></p>', 'photo19.$ext', 3, 19, '2017-04-24 17:48:41', '2017-04-24 19:34:18'),
(5, '<p><b>The quick brown fox jumps over the lazy dog.&nbsp;</b></p><p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p><p><span style="text-align: justify;"><b>Lorem Ipsum Dolor Sit Amet.&nbsp;</b></span></p>', 'photo21.$ext', 2, 21, '2017-04-24 17:53:53', '2017-04-24 22:13:27'),
(6, '<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'photo22.jpeg', 1, 22, '2017-04-24 20:06:35', '2017-04-24 22:11:59'),
(7, '<p>Test photo</p>', 'photo34.jpeg', 1, 34, '2017-04-25 19:29:28', '2017-04-25 19:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar_src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `avatar_src`, `blog_description`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'avatar1.png', 'Welcome to my first blog. I hope you like it :)', 1, '2017-04-18 02:11:36', '2017-04-26 18:52:56'),
(2, 'avatar2.png', 'Welcome to my blog. Don''t forget to leave a comment! :)', 2, '2017-04-18 02:19:08', '2017-04-26 19:02:12'),
(3, 'avatar3.png', 'Please update your blog description in your Profile', 3, '2017-04-18 02:19:56', '2017-04-19 20:16:06'),
(5, 'default.png', 'Please update your blog description in your Profile', 7, '2017-04-20 23:15:57', '2017-04-20 23:15:57'),
(6, 'avatar4.png', 'Please update your blog description in your Profile', 4, NULL, '2017-04-20 23:24:41'),
(7, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-20 23:24:12', '2017-04-20 23:24:12'),
(8, 'default.png', 'Please update your blog description in your Profile', 4, '2017-04-20 23:24:31', '2017-04-20 23:24:31'),
(9, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-20 23:34:33', '2017-04-20 23:34:33'),
(10, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-23 16:46:10', '2017-04-23 16:46:10'),
(11, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 17:49:50', '2017-04-23 17:49:50'),
(12, 'default.png', 'Please update your blog description in your Profile', 3, '2017-04-23 17:50:56', '2017-04-23 17:50:56'),
(13, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 17:51:44', '2017-04-23 17:51:44'),
(14, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:38:16', '2017-04-23 18:38:16'),
(15, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:43:49', '2017-04-23 18:43:49'),
(16, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:44:14', '2017-04-23 18:44:14'),
(17, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:44:38', '2017-04-23 18:44:38'),
(18, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:46:01', '2017-04-23 18:46:01'),
(19, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:46:18', '2017-04-23 18:46:18'),
(20, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:49:55', '2017-04-23 18:49:55'),
(21, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:50:20', '2017-04-23 18:50:20'),
(22, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:51:26', '2017-04-23 18:51:26'),
(23, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:53:37', '2017-04-23 18:53:37'),
(24, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:54:50', '2017-04-23 18:54:50'),
(25, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:55:27', '2017-04-23 18:55:27'),
(26, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-23 18:55:54', '2017-04-23 18:55:54'),
(27, 'default.png', '', 2, '2017-04-23 18:56:51', '2017-04-23 18:56:51'),
(28, 'default.png', '', 2, '2017-04-23 18:57:58', '2017-04-23 18:57:58'),
(29, 'default.png', '', 2, '2017-04-23 18:58:21', '2017-04-23 18:58:21'),
(30, 'default.png', '', 2, '2017-04-23 18:58:43', '2017-04-23 18:58:43'),
(31, 'default.png', '', 2, '2017-04-23 18:59:07', '2017-04-23 18:59:07'),
(32, 'default.png', '', 2, '2017-04-23 19:00:09', '2017-04-23 19:00:09'),
(33, 'default.png', '', 2, '2017-04-23 19:00:30', '2017-04-23 19:00:30'),
(34, 'default.png', '', 2, '2017-04-23 19:00:39', '2017-04-23 19:00:39'),
(35, 'default.png', '', 2, '2017-04-23 19:00:57', '2017-04-23 19:00:57'),
(36, 'default.png', '', 2, '2017-04-23 19:06:26', '2017-04-23 19:06:26'),
(37, 'default.png', '', 2, '2017-04-23 19:07:52', '2017-04-23 19:07:52'),
(38, 'default.png', '', 2, '2017-04-23 19:08:10', '2017-04-23 19:08:10'),
(39, 'default.png', '', 2, '2017-04-23 19:08:19', '2017-04-23 19:08:19'),
(40, 'default.png', '', 2, '2017-04-23 19:18:49', '2017-04-23 19:18:49'),
(41, 'default.png', '', 2, '2017-04-23 19:19:25', '2017-04-23 19:19:25'),
(42, 'default.png', '', 2, '2017-04-23 19:21:35', '2017-04-23 19:21:35'),
(43, 'default.png', '', 2, '2017-04-23 19:22:11', '2017-04-23 19:22:11'),
(44, 'default.png', '', 2, '2017-04-23 19:22:18', '2017-04-23 19:22:18'),
(45, 'default.png', '', 3, '2017-04-23 19:22:53', '2017-04-23 19:22:53'),
(46, 'default.png', '', 4, '2017-04-23 19:23:11', '2017-04-23 19:23:11'),
(47, 'default.png', '', 4, '2017-04-23 20:04:42', '2017-04-23 20:04:42'),
(48, 'default.png', '', 4, '2017-04-23 20:05:19', '2017-04-23 20:05:19'),
(49, 'default.png', '', 4, '2017-04-23 22:59:54', '2017-04-23 22:59:54'),
(50, 'default.png', '', 4, '2017-04-23 23:00:37', '2017-04-23 23:00:37'),
(51, 'default.png', '', 4, '2017-04-23 23:00:49', '2017-04-23 23:00:49'),
(52, 'default.png', '', 4, '2017-04-23 23:01:59', '2017-04-23 23:01:59'),
(53, 'default.png', '', 4, '2017-04-23 23:22:10', '2017-04-23 23:22:10'),
(54, 'default.png', '', 4, '2017-04-23 23:44:07', '2017-04-23 23:44:07'),
(55, 'default.png', '', 4, '2017-04-23 23:44:12', '2017-04-23 23:44:12'),
(56, 'default.png', '', 1, '2017-04-24 00:13:41', '2017-04-24 00:13:41'),
(57, 'default.png', '', 3, '2017-04-24 00:13:52', '2017-04-24 00:13:52'),
(58, 'default.png', '', 4, '2017-04-24 00:14:02', '2017-04-24 00:14:02'),
(59, 'default.png', '', 3, '2017-04-24 16:15:32', '2017-04-24 16:15:32'),
(60, 'default.png', '', 2, '2017-04-24 17:51:56', '2017-04-24 17:51:56'),
(61, 'default.png', '', 3, '2017-04-24 19:20:41', '2017-04-24 19:20:41'),
(62, 'default.png', '', 3, '2017-04-24 19:22:24', '2017-04-24 19:22:24'),
(63, 'default.png', '', 3, '2017-04-24 19:24:20', '2017-04-24 19:24:20'),
(64, 'default.png', '', 3, '2017-04-24 19:29:33', '2017-04-24 19:29:33'),
(65, 'default.png', '', 3, '2017-04-24 19:31:38', '2017-04-24 19:31:38'),
(66, 'default.png', '', 3, '2017-04-24 19:31:53', '2017-04-24 19:31:53'),
(67, 'default.png', '', 3, '2017-04-24 19:32:15', '2017-04-24 19:32:15'),
(68, 'default.png', '', 3, '2017-04-24 19:32:43', '2017-04-24 19:32:43'),
(69, 'default.png', '', 3, '2017-04-24 19:32:53', '2017-04-24 19:32:53'),
(70, 'default.png', '', 3, '2017-04-24 19:33:06', '2017-04-24 19:33:06'),
(71, 'default.png', '', 3, '2017-04-24 19:33:52', '2017-04-24 19:33:52'),
(72, 'default.png', '', 3, '2017-04-24 19:33:54', '2017-04-24 19:33:54'),
(73, 'default.png', '', 3, '2017-04-24 19:50:29', '2017-04-24 19:50:29'),
(74, 'default.png', '', 3, '2017-04-24 19:55:47', '2017-04-24 19:55:47'),
(75, 'default.png', '', 3, '2017-04-24 19:57:47', '2017-04-24 19:57:47'),
(76, 'default.png', '', 3, '2017-04-24 19:58:27', '2017-04-24 19:58:27'),
(77, 'default.png', '', 3, '2017-04-24 19:58:33', '2017-04-24 19:58:33'),
(78, 'default.png', '', 3, '2017-04-24 19:58:51', '2017-04-24 19:58:51'),
(79, 'default.png', '', 3, '2017-04-24 19:59:04', '2017-04-24 19:59:04'),
(80, 'default.png', '', 3, '2017-04-24 19:59:13', '2017-04-24 19:59:13'),
(81, 'default.png', '', 3, '2017-04-24 19:59:50', '2017-04-24 19:59:50'),
(82, 'default.png', '', 3, '2017-04-24 19:59:57', '2017-04-24 19:59:57'),
(83, 'default.png', '', 3, '2017-04-24 20:03:13', '2017-04-24 20:03:13'),
(84, 'default.png', '', 3, '2017-04-24 20:03:31', '2017-04-24 20:03:31'),
(85, 'default.png', '', 3, '2017-04-24 20:03:39', '2017-04-24 20:03:39'),
(86, 'default.png', '', 3, '2017-04-24 20:03:58', '2017-04-24 20:03:58'),
(87, 'default.png', '', 1, '2017-04-24 20:04:54', '2017-04-24 20:04:54'),
(88, 'default.png', '', 1, '2017-04-24 20:05:01', '2017-04-24 20:05:01'),
(89, 'default.png', '', 1, '2017-04-24 20:14:27', '2017-04-24 20:14:27'),
(90, 'default.png', '', 1, '2017-04-24 20:15:24', '2017-04-24 20:15:24'),
(91, 'default.png', '', 1, '2017-04-24 20:21:55', '2017-04-24 20:21:55'),
(92, 'default.png', '', 1, '2017-04-24 21:13:31', '2017-04-24 21:13:31'),
(93, 'default.png', '', 1, '2017-04-24 21:13:44', '2017-04-24 21:13:44'),
(94, 'default.png', '', 1, '2017-04-24 21:46:42', '2017-04-24 21:46:42'),
(95, 'default.png', '', 1, '2017-04-24 21:47:38', '2017-04-24 21:47:38'),
(96, 'default.png', '', 1, '2017-04-24 21:47:54', '2017-04-24 21:47:54'),
(97, 'default.png', '', 1, '2017-04-24 21:48:04', '2017-04-24 21:48:04'),
(98, 'default.png', '', 1, '2017-04-24 21:50:06', '2017-04-24 21:50:06'),
(99, 'default.png', '', 2, '2017-04-24 22:12:43', '2017-04-24 22:12:43'),
(100, 'default.png', '', 2, '2017-04-24 22:14:20', '2017-04-24 22:14:20'),
(101, 'default.png', '', 2, '2017-04-24 22:14:55', '2017-04-24 22:14:55'),
(102, 'default.png', '', 2, '2017-04-24 22:15:04', '2017-04-24 22:15:04'),
(103, 'default.png', '', 2, '2017-04-24 22:15:16', '2017-04-24 22:15:16'),
(104, 'default.png', '', 2, '2017-04-24 22:15:50', '2017-04-24 22:15:50'),
(105, 'default.png', '', 2, '2017-04-24 22:16:05', '2017-04-24 22:16:05'),
(106, 'default.png', '', 2, '2017-04-24 22:16:12', '2017-04-24 22:16:12'),
(107, 'default.png', '', 2, '2017-04-24 22:23:54', '2017-04-24 22:23:54'),
(108, 'default.png', '', 2, '2017-04-24 22:24:04', '2017-04-24 22:24:04'),
(109, 'default.png', '', 2, '2017-04-24 22:24:09', '2017-04-24 22:24:09'),
(110, 'default.png', '', 2, '2017-04-24 22:24:19', '2017-04-24 22:24:19'),
(111, 'default.png', '', 2, '2017-04-24 22:25:13', '2017-04-24 22:25:13'),
(112, 'default.png', '', 1, '2017-04-24 22:27:50', '2017-04-24 22:27:50'),
(113, 'default.png', '', 1, '2017-04-24 22:37:02', '2017-04-24 22:37:02'),
(114, 'default.png', '', 1, '2017-04-24 22:37:33', '2017-04-24 22:37:33'),
(115, 'default.png', '', 1, '2017-04-24 22:37:46', '2017-04-24 22:37:46'),
(116, 'default.png', '', 1, '2017-04-24 23:01:06', '2017-04-24 23:01:06'),
(117, 'default.png', '', 1, '2017-04-24 23:34:08', '2017-04-24 23:34:08'),
(118, 'default.png', '', 1, '2017-04-25 16:14:18', '2017-04-25 16:14:18'),
(119, 'default.png', '', 1, '2017-04-25 17:26:56', '2017-04-25 17:26:56'),
(120, 'default.png', '', 1, '2017-04-25 17:27:56', '2017-04-25 17:27:56'),
(121, 'default.png', '', 1, '2017-04-25 17:28:54', '2017-04-25 17:28:54'),
(122, 'default.png', '', 1, '2017-04-25 17:29:05', '2017-04-25 17:29:05'),
(123, 'default.png', '', 1, '2017-04-25 17:36:23', '2017-04-25 17:36:23'),
(124, 'default.png', '', 1, '2017-04-25 19:27:27', '2017-04-25 19:27:27'),
(125, 'default.png', '', 1, '2017-04-25 19:28:20', '2017-04-25 19:28:20'),
(126, 'default.png', '', 1, '2017-04-25 19:28:32', '2017-04-25 19:28:32'),
(127, 'default.png', '', 1, '2017-04-25 20:06:07', '2017-04-25 20:06:07'),
(128, 'default.png', '', 1, '2017-04-25 20:07:29', '2017-04-25 20:07:29'),
(129, 'default.png', '', 1, '2017-04-25 20:08:55', '2017-04-25 20:08:55'),
(130, 'default.png', '', 1, '2017-04-25 20:10:02', '2017-04-25 20:10:02'),
(131, 'default.png', '', 1, '2017-04-25 20:11:51', '2017-04-25 20:11:51'),
(132, 'default.png', '', 1, '2017-04-25 20:11:56', '2017-04-25 20:11:56'),
(133, 'default.png', '', 1, '2017-04-25 20:13:54', '2017-04-25 20:13:54'),
(134, 'default.png', '', 1, '2017-04-25 20:15:58', '2017-04-25 20:15:58'),
(135, 'default.png', '', 2, '2017-04-25 22:02:51', '2017-04-25 22:02:51'),
(136, 'default.png', '', 2, '2017-04-25 22:04:34', '2017-04-25 22:04:34'),
(137, 'default.png', '', 2, '2017-04-25 22:13:15', '2017-04-25 22:13:15'),
(138, 'default.png', '', 2, '2017-04-25 22:13:26', '2017-04-25 22:13:26'),
(139, 'default.png', '', 2, '2017-04-25 22:17:14', '2017-04-25 22:17:14'),
(140, 'default.png', '', 2, '2017-04-25 22:17:22', '2017-04-25 22:17:22'),
(141, 'default.png', '', 2, '2017-04-25 22:18:38', '2017-04-25 22:18:38'),
(142, 'default.png', '', 2, '2017-04-25 22:18:52', '2017-04-25 22:18:52'),
(143, 'default.png', '', 2, '2017-04-25 22:19:16', '2017-04-25 22:19:16'),
(144, 'default.png', '', 2, '2017-04-25 22:19:30', '2017-04-25 22:19:30'),
(145, 'default.png', '', 1, '2017-04-25 22:22:40', '2017-04-25 22:22:40'),
(146, 'default.png', '', 3, '2017-04-25 22:22:54', '2017-04-25 22:22:54'),
(147, 'default.png', '', 7, '2017-04-25 22:23:07', '2017-04-25 22:23:07'),
(148, 'default.png', '', 1, '2017-04-25 22:23:18', '2017-04-25 22:23:18'),
(149, 'default.png', '', 4, '2017-04-25 22:23:34', '2017-04-25 22:23:34'),
(150, 'default.png', '', 4, '2017-04-25 22:36:13', '2017-04-25 22:36:13'),
(151, 'default.png', '', 4, '2017-04-25 22:37:56', '2017-04-25 22:37:56'),
(152, 'default.png', '', 4, '2017-04-25 22:50:42', '2017-04-25 22:50:42'),
(153, 'default.png', '', 4, '2017-04-25 22:52:39', '2017-04-25 22:52:39'),
(154, 'default.png', '', 4, '2017-04-25 23:02:55', '2017-04-25 23:02:55'),
(155, 'default.png', '', 1, '2017-04-25 23:10:22', '2017-04-25 23:10:22'),
(156, 'default.png', '', 1, '2017-04-25 23:10:45', '2017-04-25 23:10:45'),
(157, 'default.png', '', 1, '2017-04-25 23:11:05', '2017-04-25 23:11:05'),
(158, 'default.png', '', 4, '2017-04-25 23:11:59', '2017-04-25 23:11:59'),
(159, 'default.png', '', 4, '2017-04-25 23:14:33', '2017-04-25 23:14:33'),
(160, 'default.png', '', 1, '2017-04-25 23:14:44', '2017-04-25 23:14:44'),
(161, 'default.png', '', 1, '2017-04-25 23:44:58', '2017-04-25 23:44:58'),
(162, 'default.png', '', 1, '2017-04-26 00:02:25', '2017-04-26 00:02:25'),
(163, 'default.png', '', 1, '2017-04-26 00:02:33', '2017-04-26 00:02:33'),
(164, 'default.png', '', 1, '2017-04-26 00:09:09', '2017-04-26 00:09:09'),
(165, 'default.png', '', 2, '2017-04-26 17:30:41', '2017-04-26 17:30:41'),
(166, 'default.png', '', 2, '2017-04-26 17:30:47', '2017-04-26 17:30:47'),
(167, 'default.png', '', 2, '2017-04-26 17:34:08', '2017-04-26 17:34:08'),
(168, 'default.png', '', 2, '2017-04-26 17:34:14', '2017-04-26 17:34:14'),
(169, 'default.png', '', 2, '2017-04-26 17:59:33', '2017-04-26 17:59:33'),
(170, 'default.png', '', 2, '2017-04-26 18:00:01', '2017-04-26 18:00:01'),
(171, 'default.png', '', 4, '2017-04-26 18:04:06', '2017-04-26 18:04:06'),
(172, 'default.png', '', 4, '2017-04-26 18:16:10', '2017-04-26 18:16:10'),
(173, 'default.png', '', 2, '2017-04-26 18:16:31', '2017-04-26 18:16:31'),
(174, 'default.png', '', 3, '2017-04-26 18:18:33', '2017-04-26 18:18:33'),
(175, 'default.png', '', 1, '2017-04-26 18:18:48', '2017-04-26 18:18:48'),
(176, 'default.png', '', 1, '2017-04-26 18:19:04', '2017-04-26 18:19:04'),
(177, 'default.png', '', 1, '2017-04-26 18:20:10', '2017-04-26 18:20:10'),
(178, 'default.png', '', 1, '2017-04-26 18:25:06', '2017-04-26 18:25:06'),
(179, 'default.png', '', 1, '2017-04-26 18:32:16', '2017-04-26 18:32:16'),
(180, 'default.png', '', 1, '2017-04-26 18:32:30', '2017-04-26 18:32:30'),
(181, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:44:22', '2017-04-26 18:44:22'),
(182, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:46:47', '2017-04-26 18:46:47'),
(183, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:47:45', '2017-04-26 18:47:45'),
(184, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:49:20', '2017-04-26 18:49:20'),
(185, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:50:09', '2017-04-26 18:50:09'),
(186, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:50:20', '2017-04-26 18:50:20'),
(187, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:52:11', '2017-04-26 18:52:11'),
(188, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:52:24', '2017-04-26 18:52:24'),
(189, 'default.png', 'Please update your blog description in your Profile', 1, '2017-04-26 18:53:19', '2017-04-26 18:53:19'),
(190, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 18:53:41', '2017-04-26 18:53:41'),
(191, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 18:54:05', '2017-04-26 18:54:05'),
(192, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 18:54:12', '2017-04-26 18:54:12'),
(193, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 18:54:40', '2017-04-26 18:54:40'),
(194, 'default.png', 'Please update your blog description in your Profile', 4, '2017-04-26 18:54:51', '2017-04-26 18:54:51'),
(195, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 18:57:38', '2017-04-26 18:57:38'),
(196, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 18:58:34', '2017-04-26 18:58:34'),
(197, 'default.png', 'Please update your blog description in your Profile', 7, '2017-04-26 18:59:31', '2017-04-26 18:59:31'),
(198, 'default.png', 'Please update your blog description in your Profile', 7, '2017-04-26 18:59:49', '2017-04-26 18:59:49'),
(199, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 19:00:04', '2017-04-26 19:00:04'),
(200, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 19:00:07', '2017-04-26 19:00:07'),
(201, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 19:01:24', '2017-04-26 19:01:24'),
(202, 'default.png', 'Please update your blog description in your Profile', 2, '2017-04-26 19:02:16', '2017-04-26 19:02:16'),
(203, 'default.png', 'Please update your blog description in your Profile', 7, '2017-04-26 19:02:37', '2017-04-26 19:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(10) UNSIGNED NOT NULL,
  `reply_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `reply_content`, `user_id`, `comment_id`, `created_at`, `updated_at`) VALUES
(1, 'Testing again testing ult', 3, 1, '2017-04-19 23:14:06', '2017-04-19 23:59:09'),
(2, 'whyyyyy', 3, 1, '2017-04-19 23:14:24', '2017-04-19 23:59:16'),
(3, 'Sa kabila testing', 3, 6, '2017-04-19 23:14:40', '2017-04-19 23:14:40'),
(4, 'Tas eto nalang eto pa eto pa eto pa', 3, 11, '2017-04-19 23:14:48', '2017-04-19 23:37:10'),
(5, 'next latest', 3, 6, '2017-04-19 23:29:36', '2017-04-19 23:29:36'),
(7, 'again', 3, 1, '2017-04-19 23:57:38', '2017-04-19 23:59:22'),
(8, 'the quick brown fox jumps over the lazy dog  the quick brown fox jumps over the lazy dog  the quick brown fox jumps over the lazy dog  the quick brown fox jumps over the lazy dog  the quick brown fox jumps over the lazy dog  the quick brown fox jumps over the lazy dog', 1, 1, '2017-04-23 16:56:55', '2017-04-23 17:34:45'),
(9, 'the quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dog  the quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dogthe quick brown fox jumps over the lazy dog', 1, 11, '2017-04-23 17:24:45', '2017-04-23 17:26:13'),
(10, 'Reply # 1 to comment 1', 1, 3, '2017-04-23 17:49:26', '2017-04-23 17:49:26'),
(11, 'Reply # 1 to comment #1', 2, 9, '2017-04-23 17:50:42', '2017-04-23 17:50:42'),
(12, 'Reply #2 to Comment #1', 3, 3, '2017-04-23 17:51:27', '2017-04-23 17:51:27'),
(13, 'Reply #3 to comment #1', 2, 3, '2017-04-23 17:52:04', '2017-04-23 17:52:04'),
(14, '3rd Reply to second comment', 2, 6, '2017-04-23 18:12:25', '2017-04-23 18:26:14'),
(15, '3rD comment to last reply.', 2, 11, '2017-04-23 18:30:31', '2017-04-23 19:09:08'),
(16, 'Test Reply #1', 2, 14, '2017-04-23 19:03:53', '2017-04-23 19:03:53'),
(17, 'Another comment. /// Reply', 2, 14, '2017-04-23 19:04:07', '2017-04-23 19:04:17'),
(18, 'Reply to 2nd comment.', 2, 15, '2017-04-23 19:04:58', '2017-04-23 19:04:58'),
(19, 'Pwede na magreply? Pwede pa rin ba?', 2, 16, '2017-04-24 18:06:30', '2017-04-24 19:19:31'),
(20, 'Sa pang reply. Try ko ult. Edit test.', 2, 16, '2017-04-24 18:07:35', '2017-04-24 22:23:43'),
(29, 'Reply to my own comment.', 2, 21, '2017-04-24 22:17:40', '2017-04-24 22:17:40'),
(30, 'Thanks for the replies.', 2, 1, '2017-04-24 22:26:03', '2017-04-24 22:26:03'),
(31, 'Thanks for the comment.', 1, 8, '2017-04-24 22:28:40', '2017-04-24 22:28:40'),
(33, 'Reply to existing article.', 1, 23, '2017-04-26 00:04:05', '2017-04-26 00:04:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Felizardo Lim', 'felizardolim@yahoo.com', '$2y$10$mmcgP9lHCGuuDNiCMrD5ZeuOMYrGwOBOW87Z4posCWq6ymQ5RY2M2', '8FdE8HTGOAzgGHRydlt560XFRhlXsjaBTxgPC7vKlWId1ATWD5DIqPRUlQic', '2017-04-17 18:07:39', '2017-04-17 18:07:39'),
(2, 'Mike Lim', 'mikelim@yahoo.com', '$2y$10$LxjLV.xtN7HXRZezIr5ugOipyDCeXeIDn7bV8LZUYL3P3lGGZiYhu', 'MjSY9AwneIDeMaBH8P5OGZRBjmcJ1ouizYQGCn94MpomwDmXPPwCYMnbDOgU', '2017-04-17 18:18:39', '2017-04-17 18:18:39'),
(3, 'Narcy Din', 'narcydin@yahoo.com', '$2y$10$4isTBdtmlPDYDBndiE73l.Se03avWjX8NVJgxuJWfBLUYhMvox5/C', 'ln6DATJPzrfmw06N2rGtyUPpgUzD4HzGgkQflJAVniQ8s1tdNXAS3wcIwLyU', '2017-04-17 18:19:39', '2017-04-17 18:19:39'),
(4, 'Aizel Lim', 'aizellim@yahoo.com', '$2y$10$DZZZISxDa2ymwVqALvK2f.hkRkcJ1jNDEcNfwtS7zwyHmxmVCkH0i', 'SfWtkKlhRpwAeV7UlmljraKfEXs1QrbjW3UXgGKco58m9MclaBjPs1Ky8HVA', '2017-04-20 23:02:44', '2017-04-20 23:02:44'),
(7, 'peejay', 'peejay@email.com', '$2y$10$HHs24xeeB4Wt8HV0EfVAJOXYAxqnFB34rNlnrpSAnf3OJBzREOdku', 'OdmgBcfmpsl8E96enTzIIei3uKB3yIwMMrnBBNXDp4J0gU48axDwYSMoCA5x', '2017-04-20 23:15:24', '2017-04-20 23:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `video_caption` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `article_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `video_caption`, `video_src`, `user_id`, `article_id`, `created_at`, `updated_at`) VALUES
(1, '<p><b>NBA Best Crossovers 2017</b></p>', 'RK8ryjZY2c8', 1, 31, '2017-04-24 23:54:19', '2017-04-24 23:54:19'),
(2, '<p style="text-align: center; "><b>Top Plays of the Day.&nbsp;</b></p>', 'CIP_t4HxeCA', 1, 32, '2017-04-25 16:16:01', '2017-04-25 16:16:01'),
(3, '<p>Kingsmen 2</p>', '6Nxc-3WpMbg', 1, 33, '2017-04-25 17:27:09', '2017-04-25 17:36:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow`
--
ALTER TABLE `follow`
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
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `follow`
--
ALTER TABLE `follow`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
