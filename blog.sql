-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2017 at 10:04 AM
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
(1, 'The Frogs & the Ox', '<p>An Ox came down to a reedy pool to drink. </p><p>As he splashed heavily into the water, he crushed a young Frog into the mud.\r\n</p><p>\r\nThe old Frog soon missed the little one and asked his brothers and sisters what had become of him.\r\n\r\n"A great big monster," said one of them, "stepped on little brother with one of his huge feet!"\r\n\r\n"Big, was he!" said the old Frog, puffing herself up. "Was he as big as this?"\r\n\r\n"Oh, much bigger!" they cried.\r\n\r\nThe Frog puffed up still more.\r\n"He could not have been bigger than this," she said. But the little Frogs all declared that the monster was much, much bigger and the old Frog kept puffing herself out more and more until, all at once, she burst.\r\n</p><p><b>\r\nDo not attempt the impossible.</b></p>', '2017-04-17 18:07:56', '2017-04-18 19:00:53', 1),
(2, 'The Dog & His Reflection', '<p>A Dog, to whom the butcher had thrown a bone, was hurrying home with his prize as fast as he could go. </p><p>As he crossed a narrow footbridge, he happened to look down and saw himself reflected in the quiet water as if in a mirror. But the greedy Dog thought he saw a real Dog carrying a bone much bigger than his own.\r\n\r\nIf he had stopped to think he would have known better. </p><p>But instead of thinking, he dropped his bone and sprang at the Dog in the river, only to find himself swimming for dear life to reach the shore. At last he managed to scramble out, and as he stood sadly thinking about the good bone he had lost, he realized what a stupid Dog he had been.\r\n</p><p><b>\r\nIt is very foolish to be greedy.</b></p>', '2017-04-17 18:20:46', '2017-04-18 19:21:23', 3),
(3, 'The Wolf in Sheep''s Clothing', '<p>A certain Wolf could not get enough to eat because of the watchfulness of the Shepherds. </p><p>But one night he found a sheep skin that had been cast aside and forgotten. The next day, dressed in the skin, the Wolf strolled into the pasture with the Sheep. Soon a little Lamb was following him about and was quickly led away to slaughter.\r\n</p><p>\r\nThat evening the Wolf entered the fold with the flock. But it happened that the Shepherd took a fancy for mutton broth that very evening, and, picking up a knife, went to the fold. There the first he laid hands on and killed was the Wolf.\r\n</p><p><b>\r\nThe evil doer often comes to harm through his own deceit.</b></p>', '2017-04-17 18:21:09', '2017-04-18 19:22:30', 3),
(5, 'The Lion & the Mouse', '<p style="text-align: justify;">A Lion lay asleep in the forest, his great head resting on his paws. </p><p style="text-align: justify;">A timid little Mouse came upon him unexpectedly, and in her fright and haste to get away, ran across the Lion''s nose. Roused from his nap, the Lion laid his huge paw angrily on the tiny creature to kill her.\r\n\r\n"Spare me!" begged the poor Mouse. "Please let me go and some day I will surely repay you."\r\n</p><p style="text-align: justify;">\r\nThe Lion was much amused to think that a Mouse could ever help him. But he was generous and finally let the Mouse go.\r\n\r\nSome days later, while stalking his prey in the forest, the Lion was caught in the toils of a hunter''s net. Unable to free himself, he filled the forest with his angry roaring. </p><p style="text-align: justify;">The Mouse knew the voice and quickly found the Lion struggling in the net. Running to one of the great ropes that bound him, she gnawed it until it parted, and soon the Lion was free.\r\n\r\n"You laughed when I said I would repay you," said the Mouse. "Now you see that even a Mouse can help a Lion."\r\n</p><p style="text-align: justify; "><b>\r\nA kindness is never wasted.</b></p>', '2017-04-17 18:22:08', '2017-04-18 21:59:40', 2),
(6, 'The Plane Tree', '<p style="text-align: justify;">Two Travellers, walking in the noonday sun, sought the shade of a widespreading tree to rest. </p><p style="text-align: justify;">As they lay looking up among the pleasant leaves, they saw that it was a Plane Tree.\r\n\r\n"How useless is the Plane!" said one of them. "It bears no fruit whatever, and only serves to litter the ground with leaves."\r\n</p><p style="text-align: justify;">\r\n"Ungrateful creatures!" said a voice from the Plane Tree. "You lie here in my cooling shade, and yet you say I am useless! Thus ungratefully, O Jupiter, do men receive their blessings!"\r\n</p><p style="text-align: justify;"><b>\r\nOur best blessings are often the least appreciated.</b></p>', '2017-04-17 18:22:25', '2017-04-18 20:26:43', 2),
(7, 'The Oak & the Reeds', '<p style="text-align: justify; ">A Giant Oak stood near a brook in which grew some slender Reeds. </p><p style="text-align: justify;">When the wind blew, the great Oak stood proudly upright with its hundred arms uplifted to the sky. But the Reeds bowed low in the wind and sang a sad and mournful song.\r\n\r\n"You have reason to complain," said the Oak. "The slightest breeze that ruffles the surface of the water makes you bow your heads, while I, the mighty Oak, stand upright and firm before the howling tempest."\r\n</p><p style="text-align: justify;">\r\n"Do not worry about us," replied the Reeds. "The winds do not harm us. We bow before them and so we do not break. You, in all your pride and strength, have so far resisted their blows. But the end is coming."\r\n</p><p style="text-align: justify; ">\r\nAs the Reeds spoke a great hurricane rushed out of the north. The Oak stood proudly and fought against the storm, while the yielding Reeds bowed low. The wind redoubled in fury, and all at once the great tree fell, torn up by the roots, and lay among the pitying Reeds.\r\n</p><p style="text-align: justify;"><b>\r\nBetter to yield when it is folly to resist, than to resist stubbornly and be destroyed.</b></p>', '2017-04-17 18:46:26', '2017-04-18 19:40:25', 2);

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
(4, 'Test comment', 1, 2, '2017-04-17 20:54:32', '2017-04-17 20:54:32'),
(6, 'Great story!!', 1, 1, '2017-04-18 22:12:22', '2017-04-18 22:12:22'),
(8, 'This fable is very moving. I really loved how the story ended with a moral story.', 2, 5, '2017-04-18 23:56:35', '2017-04-19 00:04:44'),
(9, 'Haru Liked this Article', 1, 6, '2017-04-19 17:26:35', '2017-04-19 17:26:35'),
(11, 'Another comment', 3, 1, '2017-04-19 22:39:13', '2017-04-19 22:39:13'),
(12, 'Comment 1', 3, 7, '2017-04-19 23:38:36', '2017-04-19 23:38:36');

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
(6, '2017_04_20_050454_create_replies_table', 2);

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `avatar_src` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `avatar_src`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'avatar1.png', 1, '2017-04-18 02:11:36', '2017-04-19 20:02:06'),
(2, 'avatar2.png', 2, '2017-04-18 02:19:08', '2017-04-19 20:14:46'),
(3, 'avatar3.png', 3, '2017-04-18 02:19:56', '2017-04-19 20:16:06');

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
(7, 'again', 3, 1, '2017-04-19 23:57:38', '2017-04-19 23:59:22');

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
(1, 'Felizardo Lim', 'felizardolim@yahoo.com', '$2y$10$mmcgP9lHCGuuDNiCMrD5ZeuOMYrGwOBOW87Z4posCWq6ymQ5RY2M2', '8oFJFQlMCzvWHtUlSus2GKFZaVEL8mo5N6ldZj4NPidNQEme3ZlbhR2VRuQV', '2017-04-17 18:07:39', '2017-04-17 18:07:39'),
(2, 'Mike Lim', 'mikelim@yahoo.com', '$2y$10$LxjLV.xtN7HXRZezIr5ugOipyDCeXeIDn7bV8LZUYL3P3lGGZiYhu', 'LAfZs3cARktNqmWt3KRCOJ7hR8dyLdThPmsfNhdvjHw9sC8LvF4pYn9cypEP', '2017-04-17 18:18:39', '2017-04-17 18:18:39'),
(3, 'Narcy Din', 'narcydin@yahoo.com', '$2y$10$4isTBdtmlPDYDBndiE73l.Se03avWjX8NVJgxuJWfBLUYhMvox5/C', 'ol02RVh3yR3HKdG99FsCwOb3LFq2KzR9kxkLcXJFgnGof671Ks1miPdWhqFV', '2017-04-17 18:19:39', '2017-04-17 18:19:39');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
