-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2018 at 08:01 AM
-- Server version: 5.7.19
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_tutorial`
--
CREATE DATABASE IF NOT EXISTS `blog_tutorial` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `blog_tutorial`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_06_175142_create_posts_table', 1),
('2016_03_20_162017_add_slug_to_users', 1),
('2016_04_28_021908_create_categories_table', 1),
('2016_04_28_022255_add_category_id_to_posts', 1),
('2016_05_30_153615_create_tags_table', 1),
('2016_05_30_155417_create_post_tag_table', 1),
('2016_07_16_173641_create_comments_table', 1),
('2016_08_15_000718_add_image_col_to_posts', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_tag_post_id_foreign` (`post_id`),
  ADD KEY `post_tag_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD CONSTRAINT `post_tag_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`);
--
-- Database: `mykino`
--
CREATE DATABASE IF NOT EXISTS `mykino` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mykino`;

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` enum('masculine','femenine') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`, `image_id`, `slug`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Al Pacino', 5, 'al-pacino', 'masculine', '2018-03-22 21:03:52', '2018-03-22 21:03:52'),
(2, 'Meryl Streep', 6, 'meryl-streep', 'femenine', '2018-03-22 21:04:32', '2018-03-22 21:04:32'),
(3, 'Jack Nicholson', 31, 'jack-nicholson', 'masculine', '2018-03-23 06:45:28', '2018-03-23 06:45:28'),
(4, 'Morgan Freeman', 32, 'morgan-freeman', 'masculine', '2018-03-23 06:45:55', '2018-03-23 06:45:55'),
(5, 'Will Smith', 33, 'will-smith', 'masculine', '2018-03-23 06:46:13', '2018-03-23 06:46:13'),
(6, 'Martin Lawrence', 34, 'martin-lawrence', 'masculine', '2018-03-23 06:46:39', '2018-03-23 06:46:39'),
(7, 'Steve Carell', 35, 'steve-carell', 'masculine', '2018-03-23 06:46:57', '2018-03-23 06:46:57'),
(8, 'Brad Pitt', 36, 'brad-pitt', 'masculine', '2018-03-23 06:47:13', '2018-03-23 06:47:13'),
(9, 'Sandra Bullock', 37, 'sandra-bullock', 'femenine', '2018-03-23 06:47:30', '2018-03-23 06:47:30'),
(10, 'Hugh Grant', 38, 'hugh-grant', 'masculine', '2018-03-23 06:47:46', '2018-03-23 06:47:46'),
(11, 'Renée Zellweger', 39, 'renee-zellweger', 'femenine', '2018-03-23 06:48:02', '2018-03-23 06:48:02'),
(12, 'Franka Potente', 40, 'franka-potente', 'femenine', '2018-03-23 06:48:18', '2018-03-23 06:48:18'),
(13, 'Ben Kingsley', 41, 'ben-kingsley', 'masculine', '2018-03-23 06:48:33', '2018-03-23 06:48:33'),
(14, 'Patricia Clarkson', 42, 'patricia-clarkson', 'femenine', '2018-03-23 06:48:52', '2018-03-23 06:48:52'),
(15, 'Pierce Brosnan', 43, 'pierce-brosnan', 'masculine', '2018-03-23 06:49:11', '2018-03-23 06:49:11'),
(16, 'Amanda Seyfried', 44, 'amanda-seyfried', 'femenine', '2018-03-23 06:49:26', '2018-03-23 06:49:26'),
(17, 'Colin Firth', 45, 'colin-firth', 'masculine', '2018-03-23 06:49:49', '2018-03-23 06:49:49'),
(18, 'Christine Baranski', 46, 'christine-baranski', 'femenine', '2018-03-23 06:50:10', '2018-03-23 06:50:10'),
(19, 'Dominic Cooper', 47, 'dominic-cooper', 'masculine', '2018-03-23 06:51:22', '2018-03-23 06:51:22'),
(20, 'Julie Walters', 48, 'julie-walters', 'femenine', '2018-03-23 06:51:39', '2018-03-23 06:51:39'),
(21, 'Stellan Skarsgård', 49, 'stellan-skarsgard', 'masculine', '2018-03-23 06:51:55', '2018-03-23 06:51:55'),
(22, 'Chiwetel Ejiofor', 50, 'chiwetel-ejiofor', 'masculine', '2018-03-23 06:52:09', '2018-03-23 06:52:09'),
(23, 'Denzel Washington', 51, 'denzel-washington', 'masculine', '2018-03-23 06:52:25', '2018-03-23 06:52:25'),
(24, 'Robin Williams', 52, 'robin-williams', 'masculine', '2018-03-23 06:52:44', '2018-03-23 06:52:44'),
(25, 'Julia Roberts', 53, 'julia-roberts', 'femenine', '2018-03-23 06:52:59', '2018-03-23 06:52:59'),
(26, 'James Franco', 54, 'james-franco', 'masculine', '2018-03-23 06:53:16', '2018-03-23 06:53:16'),
(27, 'Tina Fey', 55, 'tina-fey', 'femenine', '2018-03-23 06:53:30', '2018-03-23 06:53:30'),
(28, 'Javier Bardem', 56, 'javier-bardem', 'masculine', '2018-03-23 06:53:48', '2018-03-23 06:53:48'),
(29, 'Richard Jenkins', 57, 'richard-jenkins', 'masculine', '2018-03-23 06:54:06', '2018-03-23 06:54:06'),
(30, 'Robert De Niro', 58, 'robert-de-niro', 'masculine', '2018-03-23 06:54:22', '2018-03-23 06:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `actor_film`
--

CREATE TABLE `actor_film` (
  `id` int(10) UNSIGNED NOT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `slug`, `description`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 'Action', 'action', 'Action Films', 5, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(2, 'Adventure', 'adventure', 'Adventure Films', 6, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(3, 'Animate', 'animate', 'Animate Films', 7, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(4, 'Comedy', 'comedy', 'Comedy Films', 8, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(5, 'Crime / Ganster', 'crime-ganster', 'Crime / Ganster Films', 9, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(6, 'Drama', 'drama', 'Drama Films', 10, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(7, 'Fantasy', 'fantasy', 'fantasy Films', 11, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(8, 'Fairy Tale', 'fairy-tale', 'Fairy Tale Films', 12, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(9, 'Epic / historical', 'epic-historical', 'Epic / historical Films', 13, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(10, 'Historical fiction', 'historical-fiction', 'Historical fiction Films', 14, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(11, 'Horror', 'horror', 'Horror Films', 15, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(12, 'Love Story', 'love-story', 'Love Story Films', 16, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(13, 'Musical / Dance', 'musical-dance', 'Musical / Dance Films', 17, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(14, 'Mistery', 'mistery', 'mistery Films', 18, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(15, 'Paranoid / Paranormal', 'paranoid-paranormal', 'Paranoid / Paranormal Films', 19, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(16, 'Scince Fiction', 'scince-fiction', 'Scince Fiction Films', 20, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(17, 'Western', 'western', 'Western Films', 21, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(18, 'Martial arts', 'martial-arts', 'Martial arts Films', 22, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(19, 'Documentation', 'documentation', 'Documentation Films', 23, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(20, 'Kids', 'kids', 'Kids Films', 24, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(21, 'Biography', 'biography', 'Biography Films', 25, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(22, 'War / Military', 'war-military', 'War / Military Films', 26, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(23, 'Thriller', 'thriller', 'Thriller Films', 27, '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(24, 'TV Series', 'tv-series', 'TV Series', 28, '2018-03-20 20:42:51', '2018-03-20 20:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` date DEFAULT NULL,
  `duration` time NOT NULL,
  `fsk_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `image_id`, `description`, `slug`, `trailer`, `year`, `duration`, `fsk_id`, `language_id`, `category_id`, `created_at`, `updated_at`) VALUES
(21, 'Bin ich schön?', 1, 'Die Schicksale 16 verschiedener Personen in München oder im spanischen Sevilla sind miteinander verknüpft. Dabei verlagert sich die Handlung von Spanien nach Deutschland und wieder zurück. Sie alle sind verstrickt in Eifersucht und Liebesaffären, Ehedramen und Hochzeiten, Sehnsüchten und geheimen Wünschen. Gemeinsamkeit aller Figuren ist ihre Traurigkeit und Sehnsucht nach einem anderen Leben. Sie hängen ihren Erinnerungen nach oder beklagen den Verlust einer nahestehenden Person.', 'bin-ich-schon', 'https://youtu.be/gdUrdivQ4_M', '1998-09-17', '01:52:00', 3, 2, 4, '2018-03-20 22:01:34', '2018-03-20 22:01:34'),
(22, 'Ratatouille', 2, 'Remy is an idealistic and ambitious young rat, gifted with highly developed senses of taste and smell. Inspired by his idol, the recently deceased chef Auguste Gusteau, Remy dreams of becoming a cook himself. When an old French woman discovers Remy\\\'s clan in her house, they are forced to flee, and Remy becomes separated from his family in the panic. He ends up in the sewers of Paris and eventually finds himself at a skylight overlooking the kitchen of Gusteau\\\'s restaurant.', 'ratatouille', 'https://www.youtube.com/watch?v=niD-jahFURU', '2007-01-01', '01:51:00', 1, 1, 3, '2018-03-20 22:25:48', '2018-03-20 22:25:48'),
(23, 'Concussion', 3, 'In 2002, former Pittsburgh Steelers center Mike Webster is found dead in his pickup truck, after years of self-mutilation and homelessness. Before his death, a fellow football player, Justin Strzelczyk, comes to him, and confides that he is starting to lose his memory, that he is saying odd things to his children, and nearly threw his wife against the wall. A disoriented Webster brushes the worries off, and deliriously tells him that the most important thing \\\"is to finish the game\\\", which is what he said during his Hall of Fame speech.', 'concussion', 'https://www.youtube.com/watch?v=Io6hPdC41RM', '1998-01-01', '02:02:00', 4, 1, 6, '2018-03-22 20:21:27', '2018-03-22 20:21:27'),
(24, 'Minions', 4, 'minions', 'minions', 'https://www.youtube.com/watch?v=niD-jahFURU', '2007-10-10', '02:01:00', 1, 1, 3, '2018-03-22 20:52:11', '2018-03-22 20:52:11'),
(25, 'Learning to drive', 7, 'Learning to Drive is about the unlikely friendship that develops between two very different New Yorkers. Wendy is a sharp-tongued author whose husband just left her, inspiring her to embrace her independence and learn how to drive. Her teacher, Darwan, is a gentle Indian Sikh driving instructor with an impending arranged marriage. As Darwan teaches Wendy how to drive, they both learn valuable lessons about relationships, life, and the value of friendship.', 'learning-to-drive', 'https://www.youtube.com/watch?v=IThfFYmEGEs', '2014-01-01', '01:30:00', 3, 1, 4, '2018-03-23 05:46:48', '2018-03-23 05:46:48'),
(26, 'Mamma Mia!', 8, 'On a Greek island called Kalokairi, bride-to-be Sophie Sheridan posts three wedding invitations (\\\\\\\"I Have a Dream\\\\\\\") to different men.\\\\\\\\r\\\\\\\\n\\\\\\\\r\\\\\\\\nSophie\\\\\\\'s bridesmaids, Ali and Lisa, arrive. Sophie reveals that she found her mother\\\\\\\'s diary and has three possible fathers: Irish-American architect Sam Carmichael, Swedish adventurer and writer Bill Anderson, and British banker Harry Bright. As Sophie wants her father to give her away at the altar, she invited them without telling her mother, believing that after she spends time with them she will know who her father is (\\\\\\\"Honey, Honey\\\\\\\"). Villa owner Donna Sheridan, Sophie\\\\\\\'s mom, is ecstatic to reunite with her former Dynamos bandmates, wisecracking author Rosie Mulligan and wealthy multiple divorcée Tanya Chesham-Leigh, and reveals her bafflement at her daughter\\\\\\\'s desire to get married. Donna shows off the villa to Rosie and Tanya (\\\\\\\"Money, Money, Money\\\\\\\"). The three men arrive; Sophie smuggles them to their room and explains that she sent the invitations. She begs them to hide so Donna will have a surprise at the wedding: seeing the old friends of whom she \\\\\\\"so often\\\\\\\" favourably speaks. They overhear Donna working (humming \\\\\\\"Fernando\\\\\\\") and swear not to reveal her secret.', 'mamma-mia', 'https://www.youtube.com/watch?v=CiVnD9i7BpE', '2008-01-01', '01:49:00', 3, 1, 13, '2018-03-23 05:49:38', '2018-03-23 05:49:38'),
(27, '12 Years a Slave', 9, 'In 1841, Solomon Northup is a free African-American man working as a violinist, living with his wife and two children in Saratoga Springs, New York. Two white men, Brown and Hamilton, offer him short-term employment as a musician if he will travel with them to Washington, D.C. However, once they arrive, the duo drug Northup and conspire to deliver him to a slave pen. Northup is later shipped to New Orleans along with others who have been detained against their will. A slave trader named Freeman gives Northup the identity of \\\\\\\"Platt\\\\\\\", a runaway slave from Georgia, and sells him and another slave Eliza to plantation owner William Ford. Due to tension between Northup and another plantation worker, Ford sells him to another slave owner named Edwin Epps. In the process, Northup attempts to explain that he is actually a free man, but to no avail.', '12-years-a-slave', 'https://www.youtube.com/watch?v=z02Ie8wKKRg', '2013-01-01', '02:14:00', 4, 1, 6, '2018-03-23 05:51:06', '2018-03-23 05:51:06'),
(28, 'Eat pray love', 10, 'Elizabeth Gilbert had everything a modern woman is supposed to dream of having - a husband, a house, a successful career – yet like so many others, she found herself lost, confused, and searching for what she really wanted in life. Newly divorced and at a crossroads, Gilbert steps out of her comfort zone, risking everything to change her life, embarking on a journey around the world that becomes a quest for self-discovery. In her travels, she discovers the true pleasure of nourishment by eating in Italy, the power of prayer in India, and, finally and unexpectedly, the inner peace and balance of true love in Indonesia.', 'eat-pray-love', 'https://www.youtube.com/watch?v=_tlMo1S8HNE', '2010-01-01', '02:20:00', 3, 1, 12, '2018-03-23 05:53:15', '2018-03-23 05:53:15'),
(29, 'Mary Poppins', 11, 'In Edwardian London, 1910, Cockney one-man band Bert is entertaining a crowd when he senses a change in the wind. Afterwards, he directly addresses the audience and gives them a tour of Cherry Tree Lane, stopping outside the home of the Banks family. George Banks returns home from his job at the bank to learn from his wife Winifred that their hired nanny, Katie Nanna, has left their service after his children, Jane and Michael, ran away \\\\\\\"again\\\\\\\". They are returned shortly after by the local constable, who reveals that the children were chasing a lost kite. The children ask their father to help build a better kite, but he dismisses them. Taking it upon himself to hire a nanny, George advertises for a stern, no-nonsense nanny. Instead, Jane and Michael present their own advertisement for a kinder, sweeter nanny, but when George rips up the letter and throws the scraps in the fireplace, the remains of the advertisement magically float up and out into the air.', 'mary-poppins', 'https://www.youtube.com/watch?v=fuWf9fP-A-U', '1964-01-01', '02:19:00', 1, 1, 20, '2018-03-23 05:55:08', '2018-03-23 05:55:08'),
(30, 'Pirates of the Caribbean: The Curse of the Black Pearl', 12, '(10, \'Pirates of the Caribbean: The Curse of the Black Pearl\', 21, \'(10, \\\'Pirates of the Caribbean: The Curse of the Black Pearl\\\', \\\'10\\\', \\\'n the early 18th Century while sailing to Port Royal, Jamaica, Governor Weatherby Swann, his daughter Elizabeth, and Lieutenant James Norrington encounter a shipwreck and recover a boy, Will Turner. Elizabeth discovers a golden pirate medallion around his neck, keeping it so as to protect him. Elizabeth sees a ghost ship vanish into the fog.  Eight years later, Norrington is promoted to Commodore and proposes to Elizabeth, but her corset makes her faint and fall into the sea. Captain Jack Sparrow comes to Port Royal to commandeer a ship, and rescues her. Norrington identifies Jack, and a chase ensues. Jack encounters Will, now a blacksmith and swordsman. They duel, and Jack is captured and imprisoned.', 'pirates-of-the-caribbean-the-curse-of-the-black-pearl', 'https://www.youtube.com/watch?v=naQr0uTrH_s', '2009-01-01', '02:23:00', 2, 1, 2, '2018-03-23 05:58:37', '2018-03-23 05:58:37'),
(31, '1492', 13, 'In the beginning, Columbus is obsessed with making a trip westwards to Asia, but lacks crew and a ship. The Catholic theologians at the University of Salamanca heavily disapprove of it, and they are not keen on ideas that go against the writings of Ptolemaeus. After continuous warnings at the monastery, he becomes involved in a brawl with the monks, ending up lying in the monastery courtyard to pay penance. His eldest son, Diego, one of the monks, looks on disapprovingly. As Columbus continues his penance through a vow of silence, he is approached by Martín Pinzon, a shipowner from Palos, who introduces Columbus to the banker Santángel. Queen Isabella I (Sigourney Weaver) owes money to Santángel. Columbus meets with the queen, who grants him his journey in exchange for his promise to bring back sufficient amounts of riches in gold.', '1492', 'https://www.youtube.com/watch?v=bmnLrzG2zKw\\', '1992-01-01', '02:22:00', 3, 1, 9, '2018-03-23 06:04:57', '2018-03-23 06:04:57'),
(32, 'My Name Is Khan', 14, 'Rizwan Khan (Tanay Chheda) is a Muslim child who grew up with his brother Zakir and his mother Razia Khan (Zarina Wahab) in a middle-class family in the section of Mumbai. Rizwan is different from other children, however. He has certain gifts, particularly a special ability to repair mechanical things. His difference leads to special tutoring from a reclusive scholar and extra attention from his mother, both of which lead to heightened jealousy from his brother Zakir, who eventually leaves his family for a life in the United States.', 'my-name-is-khan', 'https://www.youtube.com/watch?v=nqxgYT3TYzY', '2010-01-01', '02:45:00', 3, 1, 6, '2018-03-23 06:06:27', '2018-03-23 06:06:27'),
(33, 'Hotel Rwanda', 15, 'Tensions between the Hutu and Tutsi peoples lead to a civil war in Rwanda, where corruption and bribes between politicians are routine. Paul Rusesabagina (Cheadle), the manager of the Sabena owned Hôtel des Mille Collines, is Hutu, but his wife Tatiana (Okonedo), is Tutsi. His marriage is a source of friction with Hutu extremists, most prominently Georges Rutaganda (Kae-Kazim), a friendly goods supplier to the hotel who is also the local leader of Interahamwe, a brutal Hutu militia.', 'hotel-rwanda', 'https://www.youtube.com/watch?v=4dd8rX5Dy_Q', '2005-01-01', '02:01:00', 5, 1, 6, '2018-03-23 06:08:17', '2018-03-23 06:08:17'),
(34, 'Eine ganz heisse Nummer', 16, '(15, \'Eine ganz heisse Nummer\', 26, \'In der niederbayerischen Gemeinde Marienzell treibt die Wirtschaftskrise die Bewohner in die Arbeitslosigkeit. Nach Schließung der örtlichen Glashütte warten auch die beiden Inhaberinnen des Tante-Emma-Ladens Lebensmittel Brandner, Waltraud Wackernagel und Maria Brandner, samt ihrer Verkäuferin Lena vergeblich auf die letzte verbliebene Kundschaft ihres Geschäftes, die inzwischen lieber im Discount-Supermarkt in Zwiesel einkaufen geht. Obendrein erscheint eines Tages Herr Sonnleitner von der Bayernbank unangemeldet im Laden und verkündet die Kündigung des zukunftssichernden Geschäftskredits mit einer Frist von vier Wochen. Da Waltrauds Ehemann durch die Schließung der Glashütte arbeitslos geworden ist, droht dem Ehepaar zudem der Verlust des Eigenheims. Waltraud, Maria und Lena bleiben nur wenige Wochen Zeit, sich mit Zusatzeinnahmen aus der Misere zu befreien. Da scheint die Schnapsidee, heimlich eine Sexhotline zu gründen, bald wie die Rettung – nicht ohne in der streng katholischen Heimat jedoch einen haushohen Skandal heraufzubeschwören.', 'eine-ganz-heisse-nummer', 'https://www.youtube.com/watch?v=oMrjwAA-VOI', '2011-01-01', '01:35:00', 4, 2, 4, '2018-03-23 06:14:57', '2018-03-23 06:14:57'),
(35, '7 vírgenes', 17, 'Es verano en un barrio obrero y marginal de Sevilla. Tano, un adolescente que cumple condena en un reformatorio, recibe un permiso especial de 48 horas para asistir a la boda de su hermano Santacana. Con su mejor amigo, Richi, se lanza a vivir esas horas con el firme propósito de divertirse y de hacer todo lo que le está prohibido: se emborracha, se droga, roba, ama y vuelve a sentirse vivo y libre. Pero, a medida que pasan las horas, Tano también asiste al desmoronamiento de todos sus puntos de referencía: el barrio, la familia, el amor, la amistad, todo ha cambiado. Más allá de un permiso de 48 horas, la libertad de Tano se convierte en un viaje obligado hacia la madurez.', '7-virgenes', 'https://www.youtube.com/watch?v=29txqk7I-0U', '2005-01-01', '01:25:00', 4, 3, 6, '2018-03-23 06:19:14', '2018-03-23 06:19:14'),
(36, 'Hable con ella', 18, 'Dos hombres se enfrentan a la soledad de la manera más cruda y cruel que puedan imaginarse. Dos almas heridas por el azar del destino, dos espíritus aparentemente muertos y convalecientes en camas hospitalarias a la espera de un milagro sobrenatural. La incomunicación, soledad, amistad y pasión irracional son temas de plena efervescencia en Hable con ella; el filme de Pedro Almodóvar se centra principalmente en la vida de dos hombres.', 'hable-con-ella', 'https://www.youtube.com/watch?v=KNdzcTZUW54', '2002-01-01', '01:52:00', 4, 3, 6, '2018-03-23 06:20:30', '2018-03-23 06:20:30'),
(37, 'Mujeres al borde de un ataque de nervios', 19, 'Mujeres al borde de un ataque de nervios\', 29, \'Pepa e Iván son una pareja sentimental y ambos se dedican al doblaje de películas. Cuando Iván rompe con ella, Pepa descubre que está embarazada, y lo busca para decírselo.  Iván, por su parte, estuvo casado anteriormente con Lucía, que al dar a luz enloqueció y tuvo que ser internada en un psiquiátrico, donde es abandonada por Iván. Una noche, Lucía oye la voz de Iván en el televisor, doblando a un actor de una película. En ese momento decide fingir que está curada para salir del psiquiátrico y volver a casa con Iván, descubriendo que éste se ha separado de ella.', 'mujeres-al-borde-de-un-ataque-de-nervios', 'https://www.youtube.com/watch?v=Q31VFLBkmSs', '1998-01-01', '01:28:00', 3, 3, 4, '2018-03-23 06:22:01', '2018-03-23 06:22:01'),
(38, 'Amistad', 20, 'Amistad is the name of a slave ship traveling from Cuba to the United States in 1839. It is carrying African people as its cargo. As the ship is crossing from Cuba to the United States, Cinqué, a leader of the Africans, leads a mutiny and takes over the ship. The mutineers spare the lives of two Spanish navigators to help them sail the ship back to Africa. Instead, the navigators play out the Africans and sail north to the east coast of the United States, where the ship is stopped by the American Navy, and the 53 living Africans imprisoned as runaway slaves.', 'amistad', 'https://www.youtube.com/watch?v=ej9C5rQOaYU', '1997-01-01', '02:34:00', 4, 1, 9, '2018-03-23 06:23:07', '2018-03-23 06:23:07'),
(39, 'Back to the Future', 21, 'Teenager Marty McFly is an aspiring musician dating girlfriend Jennifer Parker in Hill Valley, California. His father George is bullied by his supervisor, Biff Tannen, while his mother Lorraine is an overweight, depressed alcoholic. While dissatisfied with Marty\\\\\\\'s relationship with Jennifer, Lorraine recalls how she met George when her father hit him with a car.\\\\n\\\\nOn October 26, 1985, Marty meets his scientist friend, Dr. Emmett Brown, at a shopping mall parking lot. Doc unveils a time machine built from a modified DeLorean and powered by plutonium stolen from Libyan terrorists. Doc demonstrates the navigation system with the example date of November 5, 1955: the day he conceived the machine. A moment later, the Libyans arrive and kill him. Marty escapes in the DeLorean, but inadvertently activates the time machine, and arrives in 1955 without the required plutonium needed to return.', 'back-to-the-future', 'https://www.youtube.com/watch?v=qvsgGtivCgs', '1985-01-01', '01:56:00', 3, 1, 4, '2018-03-23 06:24:48', '2018-03-23 06:24:48'),
(40, 'Back to the future II', 22, 'On October 26, 1985, Dr. Emmett Brown arrives in his flying time machine and persuades Marty McFly and his girlfriend, Jennifer Parker, to come back to the future with him to help their future children. Biff Tannen witnesses their departure. They arrive on October 21, 2015, where Doc electronically knocks out Jennifer and leaves her asleep in an alley, explaining that she should not have too much knowledge of future events. He has Marty pose as his own son to refuse an offer to participate in a robbery with Biffs grandson Griff, thus saving both of Martys children from prison.', 'back-to-the-future-ii', 'https://www.youtube.com/watch?v=MdENmefJRpw', '1989-01-01', '01:48:00', 3, 1, 4, '2018-03-23 06:25:55', '2018-03-23 06:25:55'),
(41, 'Back to the future III', 23, 'On November 12, 1955, Marty McFly discovers that his friend, Dr. Emmett Brown is now trapped in 1885. Marty and Docs 1955 self use the information in Docs 1885 letter to locate and repair the DeLorean. Marty spots a tombstone with Docs name, dated six days after the letter. Learning that Doc was killed by Biff Tannens great-grandfather, Buford \\\\\\\"Mad Dog\\\\\\\" Tannen, Marty travels back to 1885 to save Doc.', 'back-to-the-future-iii', 'https://www.youtube.com/watch?v=3C8c3EoEfw4', '1990-01-01', '01:59:00', 3, 1, 4, '2018-03-23 06:26:54', '2018-03-23 06:26:54'),
(42, 'Pixels', 24, 'In 1982, 13-year-old friends Sam Brenner and Will Cooper visit the local video game arcade, where Brenner discovers he can master the games there with little prior knowledge, realizing that there were recognizable patterns. Participating in the video game championships, he loses in a match with obnoxious arcade player Eddie Plant in Donkey Kong. A videocassette with footage of the event is included in a time capsule that is launched into space.  33 years later, Brenner has become an installer of home-theater systems while Cooper is the President of the United States. In Guam, a U.S. military base is attacked by UFOs of Galaga that turn pieces of the base into small glowing cubes and one of the soldiers is abducted.', 'pixels', 'https://www.youtube.com/watch?v=XAHprLW48no', '2015-01-01', '01:46:00', 3, 1, 7, '2018-03-23 06:29:55', '2018-03-23 06:29:55'),
(43, '10000 BC', 25, 'In about 10,000 BC, a tribe of hunter-gatherers called the Yagahl live in a remote mountain range in the Urals and survive by killing woolly mammoths. The camp is led by a hunter who has proven his bravery by killing a mammoth, and taking the White Spear. The people also strongly venerate an elderly woman, called Old Mother.', '10000-bc', 'https://www.youtube.com/watch?v=kxLKoa6pkxo', '2008-01-01', '01:49:00', 3, 1, 10, '2018-03-23 06:34:17', '2018-03-23 06:34:17'),
(44, '2 guns', 26, 'Criminals Robert Trench (Denzel Washington) and Michael Stigman (Mark Wahlberg) are questioned by the United States Border Patrol after a meeting with drug lord Manny \\\\\\\"Papi\\\\\\\" Greco (Edward James Olmos) in Mexico. Unknown to Stigman, Trench is an undercover DEA agent and reports to his superior, Jessup (Robert John Burke), that he failed to acquire cocaine from Greco that they could use as evidence to convict him.', '2-guns', 'https://www.youtube.com/watch?v=AK6EbfdnTHg', '2013-01-01', '01:49:00', 4, 1, 1, '2018-03-23 06:35:40', '2018-03-23 06:35:40'),
(45, '7 Days in Havana', 27, '(26, \'7 Days in Havana\', 37, \'7 Days in Havana (Spanish: 7 días en La Habana) is a 2012 Spanish-language anthology film. Set during a week in the Cuban capital Havana, the film features one segment for each day, each segment directed by a different filmmaker. The directors are Julio Médem, Laurent Cantet, Juan Carlos Tabío, Benicio del Toro, Gaspar Noé, Pablo Trapero and Elia Suleiman. The screenplay was written by the Cuban novelist Leonardo Padura Fuentes. The film is a co-production between companies in Spain, France and Cuba. It was shot on location in Havana.', '7-days-in-havana', 'https://www.youtube.com/watch?v=qM7i9jkUP20', '2012-01-01', '02:09:00', 3, 3, 6, '2018-03-23 06:37:05', '2018-03-23 06:37:05'),
(46, 'The Aristocats', 28, 'In Paris in 1910, mother cat Duchess and her three kittens, Marie, Berlioz, and Toulouse, live with retired opera diva Madame Adelaide Bonfamille, and her English butler, Edgar. One day while preparing her will with lawyer Georges Hautecourt, Madame declares her fortune to be left to her cats until their deaths, and thereafter to Edgar. Edgar hears this through a speaking tube, and plots to eliminate the cats. Therefore, he sedates the cats by sleeping pills in their food, and enters the countryside to abandon them. There, he is ambushed by two hounds, named Napoleon and Lafayette, and the cats are stranded in the countryside, while Madame Adelaide, Roquefort the mouse, and Frou-Frou the horse discover their absence. In the morning, Duchess meets an alley cat named Thomas O\\\'Malley, who offers to guide her and the kittens to Paris. The group briefly hitchhike in a milk cart before being chased off by the driver. Later, while crossing a railroad trestle, the cats narrowly avoid an oncoming train, but Marie falls into a river and is saved by O\\\'Malley; himself rescued by two English geese, Amelia and Abigail Gabble, who accompany the cats to Paris. Edgar returns to the country to retrieve his possessions from Napoleon and Lafayette, as the only evidence that could incriminate him.  Travelling across the rooftops of the city, the cats meet O\\\'Malley\\\'s friend Scat Cat and his musicians, who perform the scat song Ev\\\'rybody Wants to Be a Cat. After the band has departed, O\\\'Malley and Duchess converse on a nearby rooftop while the kittens listen at a windowsill. Here, Duchess\\\' loyalty to Madame prompts her to decline O\\\'Malley\\\'s proposal of marriage. Duchess and the kittens return to Madame\\\'s mansion, but Edgar places them in a sack and prepares to ship them to Timbuktu; whereupon they direct Roquefort to retrieve O\\\'Malley. He does so, and O\\\'Malley returns to the mansion, ordering Roquefort to find Scat Cat and his gang. This done, the alley cats and Frou-Frou fight Edgar, while Roquefort frees Duchess and the kittens. In the end of the fight, Edgar is locked in his own packing-case and sent to Timbuktu himself. Madame Adelaide\\\'s will is rewritten to exclude Edgar, with Madame expressing surprise at Edgar’s departure. After adopting O’Malley into the family, Madame establishes a charity foundation housing Paris\\\' stray cats (represented by Scat Cat and his band, who reprise their song).', 'the-aristocats', 'https://www.youtube.com/watch?v=scZSFUwgeIM', '1970-12-11', '01:18:00', 1, 1, 3, '2018-03-23 06:41:02', '2018-03-23 06:41:02'),
(47, '9', 29, 'Prior to the events of the film, a Scientist is ordered by his dictator to create a machine in the apparent name of progress. The Scientist uses his own intellect to create the B.R.A.I.N., a thinking robot. However, the dictator quickly seizes it and integrates it into the Fabrication Machine, an armature that can construct an army of war machines to destroy the dictator\\\'s enemies. Lacking a soul, the Fabrication Machine becomes corrupted and decides to exterminate all life on Earth. The Fabrication Machine reprograms the other war machines to turn against humans by using toxic gas and chemical weapons. On the verge of destruction, the Scientist uses alchemy to create nine homunculus-like rag dolls known as \\\"Stitchpunks\\\" using portions of his own soul via a talisman and dies upon finishing the last one.', '9', 'https://www.youtube.com/watch?v=_qApXdc1WPY', '2009-09-09', '01:19:00', 2, 1, 16, '2018-03-23 06:42:47', '2018-03-23 06:42:47'),
(48, '28 days', 30, 'Gwen Cummings (Sandra Bullock) spends her nights in a drunken haze with her boyfriend, Jasper (Dominic West). She ruins her sister (Elizabeth Perkins) Lily\\\'s wedding by showing up late and disheveled, delivering a drunken, rambling speech, and knocking over the wedding cake. Intoxicated, Gwen steals a limousine from the reception, tries to locate a cake store, and winds up losing control of the car and crashing into a house. She is given a choice between 28 days in jail or in a rehab center, and she chooses rehab.', '28-days', 'https://www.youtube.com/watch?v=y7RXmrlGe-k', '2000-04-14', '01:44:00', 3, 1, 4, '2018-03-23 06:43:59', '2018-03-23 06:43:59');

-- --------------------------------------------------------

--
-- Table structure for table `fsks`
--

CREATE TABLE `fsks` (
  `id` int(10) UNSIGNED NOT NULL,
  `fsk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fsks`
--

INSERT INTO `fsks` (`id`, `fsk`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Approved for 0', 'approved-0', 'fsk-0.jpg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(2, 'Approved for 6', 'approved-6', 'fsk-6.jpg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(3, 'Approved for 12', 'approved-12', 'fsk-12.jpg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(4, 'Approved for 16', 'approved-16', 'fsk-16.jpg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(5, 'Approved for 18', 'approved-18', 'fsk-18.jpg', '2018-03-20 20:42:51', '2018-03-20 20:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `actor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `film_id`, `actor_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '1521586894-bin-ich-schoen.jpg', '21', '0', '0', '2018-03-20 22:01:34', '2018-03-20 22:01:34'),
(2, '1521588348-RatatouillePoster.jpg', '22', '0', '0', '2018-03-20 22:25:48', '2018-03-20 22:25:48'),
(3, '1521753687-concussion.jpg', '23', '0', '0', '2018-03-22 20:21:27', '2018-03-22 20:21:27'),
(4, '1521755531-minions.jpg', '24', '0', '0', '2018-03-22 20:52:11', '2018-03-22 20:52:11'),
(5, '1521756232-al-pacino.jpg', '0', '1', '0', '2018-03-22 21:03:52', '2018-03-22 21:03:52'),
(6, '1521756272-meryl-streep.jpg', '0', '2', '0', '2018-03-22 21:04:32', '2018-03-22 21:04:32'),
(7, '1521787608-learning-to-drive.jpg', '25', '0', '0', '2018-03-23 05:46:48', '2018-03-23 05:46:48'),
(8, '1521787778-mammamia.JPG', '26', '0', '0', '2018-03-23 05:49:38', '2018-03-23 05:49:38'),
(9, '1521787866-12-years-slave.jpg', '27', '0', '0', '2018-03-23 05:51:06', '2018-03-23 05:51:06'),
(10, '1521787995-eat-pray-love.jpg', '28', '0', '0', '2018-03-23 05:53:15', '2018-03-23 05:53:15'),
(11, '1521788108-mary-poppins.jpg', '29', '0', '0', '2018-03-23 05:55:08', '2018-03-23 05:55:08'),
(12, '1521788317-pirates-of-the-caribbean.jpg', '30', '0', '0', '2018-03-23 05:58:37', '2018-03-23 05:58:37'),
(13, '1521788697-1492.jpg', '31', '0', '0', '2018-03-23 06:04:57', '2018-03-23 06:04:57'),
(14, '1521788787-my-name-is-khan.jpg', '32', '0', '0', '2018-03-23 06:06:27', '2018-03-23 06:06:27'),
(15, '1521788897-hotel-rwanda.jpg', '33', '0', '0', '2018-03-23 06:08:17', '2018-03-23 06:08:17'),
(16, '1521789297-eine-ganz-hummer.jpg', '34', '0', '0', '2018-03-23 06:14:57', '2018-03-23 06:14:57'),
(17, '1521789554-7-virgenes.jpg', '35', '0', '0', '2018-03-23 06:19:14', '2018-03-23 06:19:14'),
(18, '1521789630-hable-con-ella.jpg', '36', '0', '0', '2018-03-23 06:20:30', '2018-03-23 06:20:30'),
(19, '1521789721-mujeres-al-borde-de-un-ataque-de-nervios.jpg', '37', '0', '0', '2018-03-23 06:22:01', '2018-03-23 06:22:01'),
(20, '1521789787-amistad.jpg', '38', '0', '0', '2018-03-23 06:23:07', '2018-03-23 06:23:07'),
(21, '1521789888-back-to-the-future.jpg', '39', '0', '0', '2018-03-23 06:24:48', '2018-03-23 06:24:48'),
(22, '1521789955-back-to-the-future-II.jpg', '40', '0', '0', '2018-03-23 06:25:55', '2018-03-23 06:25:55'),
(23, '1521790014-back-to-the-future-III.jpg', '41', '0', '0', '2018-03-23 06:26:54', '2018-03-23 06:26:54'),
(24, '1521790195-pixels.jpg', '42', '0', '0', '2018-03-23 06:29:55', '2018-03-23 06:29:55'),
(25, '1521790457-10000-bc.jpg', '43', '0', '0', '2018-03-23 06:34:17', '2018-03-23 06:34:17'),
(26, '1521790540-2-guns.jpg', '44', '0', '0', '2018-03-23 06:35:40', '2018-03-23 06:35:40'),
(27, '1521790625-7-dias-en-la-habana.jpg', '45', '0', '0', '2018-03-23 06:37:05', '2018-03-23 06:37:05'),
(28, '1521790862-the-aristocats.jpg', '46', '0', '0', '2018-03-23 06:41:02', '2018-03-23 06:41:02'),
(29, '1521790967-9.jpg', '47', '0', '0', '2018-03-23 06:42:47', '2018-03-23 06:42:47'),
(30, '1521791039-28-days.jpg', '48', '0', '0', '2018-03-23 06:43:59', '2018-03-23 06:43:59'),
(31, '1521791128-jack-nicholson.jpg', '0', '3', '0', '2018-03-23 06:45:28', '2018-03-23 06:45:28'),
(32, '1521791155-morgan-freeman.jpg', '0', '4', '0', '2018-03-23 06:45:55', '2018-03-23 06:45:55'),
(33, '1521791173-will-smith.jpg', '0', '5', '0', '2018-03-23 06:46:13', '2018-03-23 06:46:13'),
(34, '1521791199-martin-lawrence.jpg', '0', '6', '0', '2018-03-23 06:46:39', '2018-03-23 06:46:39'),
(35, '1521791217-steve-carell.jpg', '0', '7', '0', '2018-03-23 06:46:57', '2018-03-23 06:46:57'),
(36, '1521791233-brad-pitt.jpg', '0', '8', '0', '2018-03-23 06:47:13', '2018-03-23 06:47:13'),
(37, '1521791250-sandra-bullock.jpg', '0', '9', '0', '2018-03-23 06:47:30', '2018-03-23 06:47:30'),
(38, '1521791266-hugh-grant.jpg', '0', '10', '0', '2018-03-23 06:47:46', '2018-03-23 06:47:46'),
(39, '1521791282-renee-zellweger.jpg', '0', '11', '0', '2018-03-23 06:48:02', '2018-03-23 06:48:02'),
(40, '1521791298-franka-potente.jpg', '0', '12', '0', '2018-03-23 06:48:18', '2018-03-23 06:48:18'),
(41, '1521791313-ben-kingsley.jpg', '0', '13', '0', '2018-03-23 06:48:33', '2018-03-23 06:48:33'),
(42, '1521791332-patricia-clarkson.jpg', '0', '14', '0', '2018-03-23 06:48:52', '2018-03-23 06:48:52'),
(43, '1521791351-pierce-brosnan.jpg', '0', '15', '0', '2018-03-23 06:49:11', '2018-03-23 06:49:11'),
(44, '1521791366-amanda-seyfried.jpg', '0', '16', '0', '2018-03-23 06:49:26', '2018-03-23 06:49:26'),
(45, '1521791389-colin-firth.jpg', '0', '17', '0', '2018-03-23 06:49:49', '2018-03-23 06:49:49'),
(46, '1521791410-christine-baranski.jpg', '0', '18', '0', '2018-03-23 06:50:10', '2018-03-23 06:50:10'),
(47, '1521791482-dominic-cooper.jpg', '0', '19', '0', '2018-03-23 06:51:22', '2018-03-23 06:51:22'),
(48, '1521791499-julie-walters.jpg', '0', '20', '0', '2018-03-23 06:51:40', '2018-03-23 06:51:40'),
(49, '1521791515-stellan-skarsgard.jpg', '0', '21', '0', '2018-03-23 06:51:55', '2018-03-23 06:51:55'),
(50, '1521791529-chiwetel-ejiofor.JPG', '0', '22', '0', '2018-03-23 06:52:09', '2018-03-23 06:52:09'),
(51, '1521791545-denzel-washington.jpg', '0', '23', '0', '2018-03-23 06:52:25', '2018-03-23 06:52:25'),
(52, '1521791564-robin-williams.jpg', '0', '24', '0', '2018-03-23 06:52:44', '2018-03-23 06:52:44'),
(53, '1521791579-julia-roberts.JPG', '0', '25', '0', '2018-03-23 06:52:59', '2018-03-23 06:52:59'),
(54, '1521791596-james-franco.jpg', '0', '26', '0', '2018-03-23 06:53:16', '2018-03-23 06:53:16'),
(55, '1521791610-tina-fey.jpg', '0', '27', '0', '2018-03-23 06:53:30', '2018-03-23 06:53:30'),
(56, '1521791628-javier-bardem.jpg', '0', '28', '0', '2018-03-23 06:53:48', '2018-03-23 06:53:48'),
(57, '1521791646-richard-jenkins.jpg', '0', '29', '0', '2018-03-23 06:54:06', '2018-03-23 06:54:06'),
(58, '1521791662-robert-de-niro.JPG', '0', '30', '0', '2018-03-23 06:54:22', '2018-03-23 06:54:22');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'English', 'english', 'english.svg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(2, 'German', 'german', 'german.svg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(3, 'Spanish', 'spanish', 'spanish.svg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(4, 'French', 'french', 'french.svg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(5, 'Italian', 'italian', 'italian.svg', '2018-03-20 20:42:51', '2018-03-20 20:42:51'),
(6, 'Chinese', 'chinese', 'chinese.svg', '2018-03-20 20:42:51', '2018-03-20 20:42:51');

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
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2018_03_12_190728_create_films_table', 1),
(40, '2018_03_12_190955_create_categories_table', 1),
(41, '2018_03_12_191429_create_fsks_table', 1),
(42, '2018_03_12_191630_create_languages_table', 1),
(43, '2018_03_12_191701_create_actors_table', 1),
(44, '2018_03_12_230253_create_images_table', 1),
(45, '2018_03_15_052331_create_actor_film_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafael Muñoz', 'rafaelmunoznl@yahoo.com', '$2y$10$QGcuKFGlE0Flacsol.x89eqoHaZxBf6d1Y6GOMdFiBpSs6qVjbU9S', NULL, '2018-03-20 20:42:51', '2018-03-20 20:42:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `actors_slug_unique` (`slug`),
  ADD KEY `actors_image_id_index` (`image_id`);

--
-- Indexes for table `actor_film`
--
ALTER TABLE `actor_film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_film_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_film_film_id_foreign` (`film_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_unique` (`category`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_image_id_index` (`image_id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `films_slug_unique` (`slug`),
  ADD KEY `films_image_id_index` (`image_id`);

--
-- Indexes for table `fsks`
--
ALTER TABLE `fsks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fsks_fsk_unique` (`fsk`),
  ADD UNIQUE KEY `fsks_slug_unique` (`slug`),
  ADD UNIQUE KEY `fsks_image_unique` (`image`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_film_id_index` (`film_id`),
  ADD KEY `images_actor_id_index` (`actor_id`),
  ADD KEY `images_category_id_index` (`category_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_language_unique` (`language`),
  ADD UNIQUE KEY `languages_slug_unique` (`slug`),
  ADD UNIQUE KEY `languages_image_unique` (`image`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `actor_film`
--
ALTER TABLE `actor_film`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `fsks`
--
ALTER TABLE `fsks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_film`
--
ALTER TABLE `actor_film`
  ADD CONSTRAINT `actor_film_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`),
  ADD CONSTRAINT `actor_film_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`);
--
-- Database: `mykino_back`
--
CREATE DATABASE IF NOT EXISTS `mykino_back` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mykino_back`;

-- --------------------------------------------------------

--
-- Table structure for table `actors`
--

CREATE TABLE `actors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` enum('masculine','femenine') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `actors`
--

INSERT INTO `actors` (`id`, `name`, `image_id`, `slug`, `genre`, `created_at`, `updated_at`) VALUES
(1, 'Meryl Streep', 2, 'meryl-streep', 'femenine', '2018-03-18 19:34:49', '2018-03-18 19:34:49'),
(2, 'Jack Nicholson', 3, 'jack-nicholson', 'masculine', '2018-03-18 19:35:29', '2018-03-18 19:35:29'),
(3, 'Morgan Freeman', 7, 'morgan-freeman', 'masculine', '2018-03-19 18:43:59', '2018-03-19 18:43:59'),
(4, 'Will Smith', 8, 'will-smith', 'masculine', '2018-03-19 18:44:21', '2018-03-19 18:44:21'),
(5, 'Martin Lawrence', 9, 'martin-lawrence', 'masculine', '2018-03-19 18:44:43', '2018-03-19 18:44:43'),
(6, 'Steve Carell', 10, 'steve-carell', 'masculine', '2018-03-19 18:49:59', '2018-03-19 18:49:59'),
(7, 'Brad Pitt', 11, 'brad-pitt', 'masculine', '2018-03-19 18:50:27', '2018-03-19 18:50:27'),
(8, 'Sandra Bullock', 12, 'sandra-bullock', 'femenine', '2018-03-19 18:51:01', '2018-03-19 18:51:01'),
(9, 'Hugh Grant', 13, 'hugh-grant', 'masculine', '2018-03-19 18:51:44', '2018-03-19 18:51:44'),
(10, 'Renée Zellweger', 14, 'renee-zellweger', 'femenine', '2018-03-19 18:52:20', '2018-03-19 18:52:20'),
(11, 'Franka Potente', 15, 'franka-potente', 'femenine', '2018-03-19 18:53:24', '2018-03-19 18:53:24');

-- --------------------------------------------------------

--
-- Table structure for table `actor_film`
--

CREATE TABLE `actor_film` (
  `id` int(10) UNSIGNED NOT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `slug`, `description`, `image_id`, `created_at`, `updated_at`) VALUES
(1, 'Action', 'action', 'Action Films', 5, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(2, 'Adventure', 'adventure', 'Adventure Films', 6, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(3, 'Animate', 'animate', 'Animate Films', 7, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(4, 'Comedy', 'comedy', 'Comedy Films', 8, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(5, 'Crime / Ganster', 'crime-ganster', 'Crime / Ganster Films', 9, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(6, 'Drama', 'drama', 'Drama Films', 10, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(7, 'Fantasy', 'fantasy', 'fantasy Films', 11, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(8, 'Fairy Tale', 'fairy-tale', 'Fairy Tale Films', 12, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(9, 'Epic / historical', 'epic-historical', 'Epic / historical Films', 13, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(10, 'Historical fiction', 'historical-fiction', 'Historical fiction Films', 14, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(11, 'Horror', 'horror', 'Horror Films', 15, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(12, 'Love Story', 'love-story', 'Love Story Films', 16, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(13, 'Musical / Dance', 'musical-dance', 'Musical / Dance Films', 17, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(14, 'Mistery', 'mistery', 'mistery Films', 18, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(15, 'Paranoid / Paranormal', 'paranoid-paranormal', 'Paranoid / Paranormal Films', 19, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(16, 'Scince Fiction', 'scince-fiction', 'Scince Fiction Films', 20, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(17, 'Western', 'western', 'Western Films', 21, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(18, 'Martial arts', 'martial-arts', 'Martial arts Films', 22, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(19, 'Documentation', 'documentation', 'Documentation Films', 23, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(20, 'Kids', 'kids', 'Kids Films', 24, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(21, 'Biography', 'biography', 'Biography Films', 25, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(22, 'War / Military', 'war-military', 'War / Military Films', 26, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(23, 'Thriller', 'thriller', 'Thriller Films', 27, '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(24, 'TV Series', 'tv-series', 'TV Series', 28, '2018-03-18 19:32:16', '2018-03-18 19:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `duration` time NOT NULL,
  `fsk_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `name`, `image_id`, `description`, `slug`, `trailer`, `year`, `duration`, `fsk_id`, `language_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Bin ich schön?', 1, 'Die Schicksale 16 verschiedener Personen in München oder im spanischen Sevilla sind miteinander verknüpft. Dabei verlagert sich die Handlung von Spanien nach Deutschland und wieder zurück. Sie alle sind verstrickt in Eifersucht und Liebesaffären, Ehedramen und Hochzeiten, Sehnsüchten und geheimen Wünschen. Gemeinsamkeit aller Figuren ist ihre Traurigkeit und Sehnsucht nach einem anderen Leben. Sie hängen ihren Erinnerungen nach oder beklagen den Verlust einer nahestehenden Person.', 'bin-ich-schon', 'https://youtu.be/gdUrdivQ4_M', 1998, '01:52:00', 3, 2, 4, '2018-03-18 19:33:59', '2018-03-18 19:33:59'),
(2, 'Ratatouille', 4, 'Remy is an idealistic and ambitious young rat, gifted with highly developed senses of taste and smell. Inspired by his idol, the recently deceased chef Auguste Gusteau, Remy dreams of becoming a cook himself. When an old French woman discovers Remy\\\'s clan in her house, they are forced to flee, and Remy becomes separated from his family in the panic. He ends up in the sewers of Paris and eventually finds himself at a skylight overlooking the kitchen of Gusteau\\\'s restaurant.', 'ratatouille', 'https://www.youtube.com/watch?v=niD-jahFURU', 2007, '01:51:00', 1, 1, 3, '2018-03-18 19:36:40', '2018-03-18 19:36:40'),
(3, 'Concussion', 5, 'In 2002, former Pittsburgh Steelers center Mike Webster is found dead in his pickup truck, after years of self-mutilation and homelessness. Before his death, a fellow football player, Justin Strzelczyk, comes to him, and confides that he is starting to lose his memory, that he is saying odd things to his children, and nearly threw his wife against the wall. A disoriented Webster brushes the worries off, and deliriously tells him that the most important thing \\\"is to finish the game\\\", which is what he said during his Hall of Fame speech.', 'concussion', 'https://www.youtube.com/watch?v=Io6hPdC41RM', 2015, '02:02:00', 4, 1, 6, '2018-03-19 17:52:49', '2018-03-19 17:52:49'),
(4, 'Learning to drive', 6, 'Learning to Drive is about the unlikely friendship that develops between two very different New Yorkers. Wendy is a sharp-tongued author whose husband just left her, inspiring her to embrace her independence and learn how to drive. Her teacher, Darwan, is a gentle Indian Sikh driving instructor with an impending arranged marriage. As Darwan teaches Wendy how to drive, they both learn valuable lessons about relationships, life, and the value of friendship.', 'learning-to-drive', 'https://www.youtube.com/watch?v=IThfFYmEGEs', 2014, '01:30:00', 3, 1, 4, '2018-03-19 18:02:26', '2018-03-19 18:02:26'),
(5, 'Minions', 16, 'Minions are small, yellow creatures who have existed since the beginning of time, evolving from single-celled organisms into beings who exist only to serve history\\\'s most despicable masters.', 'minions', 'https://www.youtube.com/watch?v=eisKxhjBnZ0', 2015, '01:31:00', 1, 1, 3, '2018-03-19 19:04:04', '2018-03-19 19:04:04'),
(6, 'Mamma Mia!', 17, 'On a Greek island called Kalokairi, bride-to-be Sophie Sheridan posts three wedding invitations (\\\"I Have a Dream\\\") to different men.\\\\r\\\\n\\\\r\\\\nSophie\\\'s bridesmaids, Ali and Lisa, arrive. Sophie reveals that she found her mother\\\'s diary and has three possible fathers: Irish-American architect Sam Carmichael, Swedish adventurer and writer Bill Anderson, and British banker Harry Bright. As Sophie wants her father to give her away at the altar, she invited them without telling her mother, believing that after she spends time with them she will know who her father is (\\\"Honey, Honey\\\"). Villa owner Donna Sheridan, Sophie\\\'s mom, is ecstatic to reunite with her former Dynamos bandmates, wisecracking author Rosie Mulligan and wealthy multiple divorcée Tanya Chesham-Leigh, and reveals her bafflement at her daughter\\\'s desire to get married. Donna shows off the villa to Rosie and Tanya (\\\"Money, Money, Money\\\"). The three men arrive; Sophie smuggles them to their room and explains that she sent the invitations. She begs them to hide so Donna will have a surprise at the wedding: seeing the old friends of whom she \\\"so often\\\" favourably speaks. They overhear Donna working (humming \\\"Fernando\\\") and swear not to reveal her secret.', 'mamma-mia', 'https://www.youtube.com/watch?v=CiVnD9i7BpE', 2008, '01:49:00', 3, 1, 13, '2018-03-19 19:07:23', '2018-03-19 19:07:23'),
(7, '12 Years a Slave', 18, 'In 1841, Solomon Northup is a free African-American man working as a violinist, living with his wife and two children in Saratoga Springs, New York. Two white men, Brown and Hamilton, offer him short-term employment as a musician if he will travel with them to Washington, D.C. However, once they arrive, the duo drug Northup and conspire to deliver him to a slave pen. Northup is later shipped to New Orleans along with others who have been detained against their will. A slave trader named Freeman gives Northup the identity of \\\"Platt\\\", a runaway slave from Georgia, and sells him and another slave Eliza to plantation owner William Ford. Due to tension between Northup and another plantation worker, Ford sells him to another slave owner named Edwin Epps. In the process, Northup attempts to explain that he is actually a free man, but to no avail.', '12-years-a-slave', 'https://www.youtube.com/watch?v=z02Ie8wKKRg', 2013, '02:14:00', 4, 1, 6, '2018-03-19 19:11:16', '2018-03-19 19:11:16'),
(8, 'Eat pray love', 19, 'Elizabeth Gilbert had everything a modern woman is supposed to dream of having - a husband, a house, a successful career – yet like so many others, she found herself lost, confused, and searching for what she really wanted in life. Newly divorced and at a crossroads, Gilbert steps out of her comfort zone, risking everything to change her life, embarking on a journey around the world that becomes a quest for self-discovery. In her travels, she discovers the true pleasure of nourishment by eating in Italy, the power of prayer in India, and, finally and unexpectedly, the inner peace and balance of true love in Indonesia.', 'eat-pray-love', 'https://www.youtube.com/watch?v=_tlMo1S8HNE', 2010, '02:20:00', 3, 1, 12, '2018-03-19 19:13:57', '2018-03-19 19:13:57'),
(9, 'Mary Poppins', 20, 'In Edwardian London, 1910, Cockney one-man band Bert is entertaining a crowd when he senses a change in the wind. Afterwards, he directly addresses the audience and gives them a tour of Cherry Tree Lane, stopping outside the home of the Banks family. George Banks returns home from his job at the bank to learn from his wife Winifred that their hired nanny, Katie Nanna, has left their service after his children, Jane and Michael, ran away \\\"again\\\". They are returned shortly after by the local constable, who reveals that the children were chasing a lost kite. The children ask their father to help build a better kite, but he dismisses them. Taking it upon himself to hire a nanny, George advertises for a stern, no-nonsense nanny. Instead, Jane and Michael present their own advertisement for a kinder, sweeter nanny, but when George rips up the letter and throws the scraps in the fireplace, the remains of the advertisement magically float up and out into the air.', 'mary-poppins', 'https://www.youtube.com/watch?v=fuWf9fP-A-U', 1964, '02:19:00', 1, 1, 8, '2018-03-19 19:17:18', '2018-03-19 19:17:18'),
(10, 'Pirates of the Caribbean: The Curse of the Black Pearl', 21, '(10, \'Pirates of the Caribbean: The Curse of the Black Pearl\', \'10\', \'n the early 18th Century while sailing to Port Royal, Jamaica, Governor Weatherby Swann, his daughter Elizabeth, and Lieutenant James Norrington encounter a shipwreck and recover a boy, Will Turner. Elizabeth discovers a golden pirate medallion around his neck, keeping it so as to protect him. Elizabeth sees a ghost ship vanish into the fog.  Eight years later, Norrington is promoted to Commodore and proposes to Elizabeth, but her corset makes her faint and fall into the sea. Captain Jack Sparrow comes to Port Royal to commandeer a ship, and rescues her. Norrington identifies Jack, and a chase ensues. Jack encounters Will, now a blacksmith and swordsman. They duel, and Jack is captured and imprisoned.', 'pirates-of-the-caribbean-the-curse-of-the-black-pearl', 'https://www.youtube.com/watch?v=naQr0uTrH_s', 2009, '02:23:00', 2, 1, 2, '2018-03-19 19:20:28', '2018-03-19 19:20:28'),
(11, 'The Aristocats', 22, 'In Paris in 1910, mother cat Duchess and her three kittens, Marie, Berlioz, and Toulouse, live with retired opera diva Madame Adelaide Bonfamille, and her English butler, Edgar. One day while preparing her will with lawyer Georges Hautecourt, Madame declares her fortune to be left to her cats until their deaths, and thereafter to Edgar. Edgar hears this through a speaking tube, and plots to eliminate the cats. Therefore, he sedates the cats by sleeping pills in their food, and enters the countryside to abandon them. There, he is ambushed by two hounds, named Napoleon and Lafayette, and the cats are stranded in the countryside, while Madame Adelaide, Roquefort the mouse, and Frou-Frou the horse discover their absence. In the morning, Duchess meets an alley cat named Thomas O\\\'Malley, who offers to guide her and the kittens to Paris. The group briefly hitchhike in a milk cart before being chased off by the driver. Later, while crossing a railroad trestle, the cats narrowly avoid an oncoming train, but Marie falls into a river and is saved by O\\\'Malley; himself rescued by two English geese, Amelia and Abigail Gabble, who accompany the cats to Paris. Edgar returns to the country to retrieve his possessions from Napoleon and Lafayette, as the only evidence that could incriminate him.  Travelling across the rooftops of the city, the cats meet O\\\'Malley\\\'s friend Scat Cat and his musicians, who perform the scat song Ev\\\'rybody Wants to Be a Cat. After the band has departed, O\\\'Malley and Duchess converse on a nearby rooftop while the kittens listen at a windowsill. Here, Duchess\\\' loyalty to Madame prompts her to decline O\\\'Malley\\\'s proposal of marriage. Duchess and the kittens return to Madame\\\'s mansion, but Edgar places them in a sack and prepares to ship them to Timbuktu; whereupon they direct Roquefort to retrieve O\\\'Malley. He does so, and O\\\'Malley returns to the mansion, ordering Roquefort to find Scat Cat and his gang. This done, the alley cats and Frou-Frou fight Edgar, while Roquefort frees Duchess and the kittens. In the end of the fight, Edgar is locked in his own packing-case and sent to Timbuktu himself. Madame Adelaide\\\'s will is rewritten to exclude Edgar, with Madame expressing surprise at Edgar’s departure. After adopting O’Malley into the family, Madame establishes a charity foundation housing Paris\\\' stray cats (represented by Scat Cat and his band, who reprise their song).', 'the-aristocats', 'https://www.youtube.com/watch?v=scZSFUwgeIM', 1970, '01:18:00', 1, 1, 3, '2018-03-19 19:22:38', '2018-03-19 19:22:38'),
(12, '1492', 23, 'In the beginning, Columbus is obsessed with making a trip westwards to Asia, but lacks crew and a ship. The Catholic theologians at the University of Salamanca heavily disapprove of it, and they are not keen on ideas that go against the writings of Ptolemaeus. After continuous warnings at the monastery, he becomes involved in a brawl with the monks, ending up lying in the monastery courtyard to pay penance. His eldest son, Diego, one of the monks, looks on disapprovingly. As Columbus continues his penance through a vow of silence, he is approached by Martín Pinzon, a shipowner from Palos, who introduces Columbus to the banker Santángel. Queen Isabella I (Sigourney Weaver) owes money to Santángel. Columbus meets with the queen, who grants him his journey in exchange for his promise to bring back sufficient amounts of riches in gold.', '1492', 'https://www.youtube.com/watch?v=bmnLrzG2zKw\'', 1992, '02:22:00', 3, 1, 9, '2018-03-19 20:51:46', '2018-03-19 20:51:46'),
(13, 'My Name Is Khan', 24, 'Rizwan Khan (Tanay Chheda) is a Muslim child who grew up with his brother Zakir and his mother Razia Khan (Zarina Wahab) in a middle-class family in the section of Mumbai. Rizwan is different from other children, however. He has certain gifts, particularly a special ability to repair mechanical things. His difference leads to special tutoring from a reclusive scholar and extra attention from his mother, both of which lead to heightened jealousy from his brother Zakir, who eventually leaves his family for a life in the United States.', 'my-name-is-khan', 'https://www.youtube.com/watch?v=nqxgYT3TYzY', 2010, '02:45:00', 4, 1, 6, '2018-03-19 22:23:43', '2018-03-19 22:23:43'),
(14, 'Hotel Rwanda', 25, 'Tensions between the Hutu and Tutsi peoples lead to a civil war in Rwanda, where corruption and bribes between politicians are routine. Paul Rusesabagina (Cheadle), the manager of the Sabena owned Hôtel des Mille Collines, is Hutu, but his wife Tatiana (Okonedo), is Tutsi. His marriage is a source of friction with Hutu extremists, most prominently Georges Rutaganda (Kae-Kazim), a friendly goods supplier to the hotel who is also the local leader of Interahamwe, a brutal Hutu militia.', 'hotel-rwanda', 'https://www.youtube.com/watch?v=4dd8rX5Dy_Q', 2005, '02:01:00', 5, 1, 6, '2018-03-19 22:28:54', '2018-03-19 22:28:54'),
(15, 'Eine ganz heisse Nummer', 26, 'In der niederbayerischen Gemeinde Marienzell treibt die Wirtschaftskrise die Bewohner in die Arbeitslosigkeit. Nach Schließung der örtlichen Glashütte warten auch die beiden Inhaberinnen des Tante-Emma-Ladens Lebensmittel Brandner, Waltraud Wackernagel und Maria Brandner, samt ihrer Verkäuferin Lena vergeblich auf die letzte verbliebene Kundschaft ihres Geschäftes, die inzwischen lieber im Discount-Supermarkt in Zwiesel einkaufen geht. Obendrein erscheint eines Tages Herr Sonnleitner von der Bayernbank unangemeldet im Laden und verkündet die Kündigung des zukunftssichernden Geschäftskredits mit einer Frist von vier Wochen. Da Waltrauds Ehemann durch die Schließung der Glashütte arbeitslos geworden ist, droht dem Ehepaar zudem der Verlust des Eigenheims. Waltraud, Maria und Lena bleiben nur wenige Wochen Zeit, sich mit Zusatzeinnahmen aus der Misere zu befreien. Da scheint die Schnapsidee, heimlich eine Sexhotline zu gründen, bald wie die Rettung – nicht ohne in der streng katholischen Heimat jedoch einen haushohen Skandal heraufzubeschwören.', 'eine-ganz-heisse-nummer', 'https://www.youtube.com/watch?v=oMrjwAA-VOI', 2011, '01:35:00', 3, 2, 4, '2018-03-19 22:32:35', '2018-03-19 22:32:35'),
(16, '7 vírgenes', 27, '(15, \'7 vírgenes\', \'15\', \'Es verano en un barrio obrero y marginal de Sevilla. Tano, un adolescente que cumple condena en un reformatorio, recibe un permiso especial de 48 horas para asistir a la boda de su hermano Santacana. Con su mejor amigo, Richi, se lanza a vivir esas horas con el firme propósito de divertirse y de hacer todo lo que le está prohibido: se emborracha, se droga, roba, ama y vuelve a sentirse vivo y libre. Pero, a medida que pasan las horas, Tano también asiste al desmoronamiento de todos sus puntos de referencía: el barrio, la familia, el amor, la amistad, todo ha cambiado. Más allá de un permiso de 48 horas, la libertad de Tano se convierte en un viaje obligado hacia la madurez.\', \'7_virgenes\', \'https://www.youtube.com/watch?v=29txqk7I-0U\', \'2005-01-01\', \'01:25:00\', 3, 3, 6, \'2016-09-14 07:50:59\', \'2016-09-14 07:50:59\'),', '7-virgenes', 'https://www.youtube.com/watch?v=29txqk7I-0U', 2005, '01:25:00', 5, 3, 6, '2018-03-19 22:35:17', '2018-03-19 22:35:17'),
(17, 'Hable con ella', 28, 'Dos hombres se enfrentan a la soledad de la manera más cruda y cruel que puedan imaginarse. Dos almas heridas por el azar del destino, dos espíritus aparentemente muertos y convalecientes en camas hospitalarias a la espera de un milagro sobrenatural. La incomunicación, soledad, amistad y pasión irracional son temas de plena efervescencia en Hable con ella; el filme de Pedro Almodóvar se centra principalmente en la vida de dos hombres.', 'hable-con-ella', 'https://www.youtube.com/watch?v=KNdzcTZUW54', 2002, '01:52:00', 4, 3, 6, '2018-03-19 22:50:22', '2018-03-19 22:50:22'),
(18, 'Mujeres al borde de un ataque de nervios', 29, 'Pepa e Iván son una pareja sentimental y ambos se dedican al doblaje de películas. Cuando Iván rompe con ella, Pepa descubre que está embarazada, y lo busca para decírselo.  Iván, por su parte, estuvo casado anteriormente con Lucía, que al dar a luz enloqueció y tuvo que ser internada en un psiquiátrico, donde es abandonada por Iván. Una noche, Lucía oye la voz de Iván en el televisor, doblando a un actor de una película. En ese momento decide fingir que está curada para salir del psiquiátrico y volver a casa con Iván, descubriendo que éste se ha separado de ella.', 'mujeres-al-borde-de-un-ataque-de-nervios', 'https://www.youtube.com/watch?v=Q31VFLBkmSs', 1988, '01:28:00', 3, 3, 4, '2018-03-19 22:52:57', '2018-03-19 22:52:57'),
(19, 'Amistad', 30, 'Amistad is the name of a slave ship traveling from Cuba to the United States in 1839. It is carrying African people as its cargo. As the ship is crossing from Cuba to the United States, Cinqué, a leader of the Africans, leads a mutiny and takes over the ship. The mutineers spare the lives of two Spanish navigators to help them sail the ship back to Africa. Instead, the navigators play out the Africans and sail north to the east coast of the United States, where the ship is stopped by the American Navy, and the 53 living Africans imprisoned as runaway slaves.', 'amistad', 'https://www.youtube.com/watch?v=ej9C5rQOaYU', 1997, '02:34:00', 4, 1, 10, '2018-03-20 04:26:37', '2018-03-20 04:26:37'),
(20, 'Back to the Future', 31, 'Teenager Marty McFly is an aspiring musician dating girlfriend Jennifer Parker in Hill Valley, California. His father George is bullied by his supervisor, Biff Tannen, while his mother Lorraine is an overweight, depressed alcoholic. While dissatisfied with Marty\\\'s relationship with Jennifer, Lorraine recalls how she met George when her father hit him with a car.\\n\\nOn October 26, 1985, Marty meets his scientist friend, Dr. Emmett Brown, at a shopping mall parking lot. Doc unveils a time machine built from a modified DeLorean and powered by plutonium stolen from Libyan terrorists. Doc demonstrates the navigation system with the example date of November 5, 1955: the day he conceived the machine. A moment later, the Libyans arrive and kill him. Marty escapes in the DeLorean, but inadvertently activates the time machine, and arrives in 1955 without the required plutonium needed to return.', 'back-to-the-future', 'https://www.youtube.com/watch?v=qvsgGtivCgs', 1985, '01:56:00', 3, 1, 4, '2018-03-20 04:31:35', '2018-03-20 04:31:35'),
(21, 'Back to the future II', 32, 'images/back-to-the-future-ii.jpg\', \' On October 26, 1985, Dr. Emmett Brown arrives in his flying time machine and persuades Marty McFly and his girlfriend, Jennifer Parker, to come back to the future with him to help their future children. Biff Tannen witnesses their departure. They arrive on October 21, 2015, where Doc electronically knocks out Jennifer and leaves her asleep in an alley, explaining that she should not have too much knowledge of future events. He has Marty pose as his own son to refuse an offer to participate in a robbery with Biffs grandson Griff, thus saving both of Martys children from prison.', 'back-to-the-future-ii', 'https://www.youtube.com/watch?v=MdENmefJRpw', 1989, '01:48:00', 3, 1, 4, '2018-03-20 04:33:23', '2018-03-20 04:33:23'),
(22, 'Back to the future III', 33, 'On November 12, 1955, Marty McFly discovers that his friend, Dr. Emmett Brown is now trapped in 1885. Marty and Docs 1955 self use the information in Docs 1885 letter to locate and repair the DeLorean. Marty spots a tombstone with Docs name, dated six days after the letter. Learning that Doc was killed by Biff Tannens great-grandfather, Buford \\\"Mad Dog\\\" Tannen, Marty travels back to 1885 to save Doc.', 'back-to-the-future-iii', 'https://www.youtube.com/watch?v=3C8c3EoEfw4', 1990, '01:59:00', 3, 1, 4, '2018-03-20 04:35:49', '2018-03-20 04:35:49'),
(23, 'Pixels', 34, 'In 1982, 13-year-old friends Sam Brenner and Will Cooper visit the local video game arcade, where Brenner discovers he can master the games there with little prior knowledge, realizing that there were recognizable patterns. Participating in the video game championships, he loses in a match with obnoxious arcade player Eddie Plant in Donkey Kong. A videocassette with footage of the event is included in a time capsule that is launched into space.  33 years later, Brenner has become an installer of home-theater systems while Cooper is the President of the United States. In Guam, a U.S. military base is attacked by UFOs of Galaga that turn pieces of the base into small glowing cubes and one of the soldiers is abducted.', 'pixels', 'https://www.youtube.com/watch?v=XAHprLW48no', 2015, '01:46:00', 3, 1, 20, '2018-03-20 18:34:54', '2018-03-20 18:34:54'),
(24, '10000 BC', 35, 'In about 10,000 BC, a tribe of hunter-gatherers called the Yagahl live in a remote mountain range in the Urals and survive by killing woolly mammoths. The camp is led by a hunter who has proven his bravery by killing a mammoth, and taking the White Spear. The people also strongly venerate an elderly woman, called Old Mother.', '10000-bc', 'https://www.youtube.com/watch?v=kxLKoa6pkxo', 2008, '01:49:00', 3, 1, 9, '2018-03-20 18:37:01', '2018-03-20 18:37:01'),
(25, '2 guns', 36, 'Criminals Robert Trench (Denzel Washington) and Michael Stigman (Mark Wahlberg) are questioned by the United States Border Patrol after a meeting with drug lord Manny \\\"Papi\\\" Greco (Edward James Olmos) in Mexico. Unknown to Stigman, Trench is an undercover DEA agent and reports to his superior, Jessup (Robert John Burke), that he failed to acquire cocaine from Greco that they could use as evidence to convict him.', '2-guns', 'https://www.youtube.com/watch?v=AK6EbfdnTHg', 2013, '01:49:00', 3, 1, 1, '2018-03-20 18:51:03', '2018-03-20 18:51:03'),
(26, '7 Days in Havana', 37, '7 Days in Havana (Spanish: 7 días en La Habana) is a 2012 Spanish-language anthology film. Set during a week in the Cuban capital Havana, the film features one segment for each day, each segment directed by a different filmmaker. The directors are Julio Médem, Laurent Cantet, Juan Carlos Tabío, Benicio del Toro, Gaspar Noé, Pablo Trapero and Elia Suleiman. The screenplay was written by the Cuban novelist Leonardo Padura Fuentes. The film is a co-production between companies in Spain, France and Cuba. It was shot on location in Havana.', '7-days-in-havana', 'https://www.youtube.com/watch?v=qM7i9jkUP20', 2012, '02:09:00', 4, 3, 6, '2018-03-20 19:06:52', '2018-03-20 19:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `fsks`
--

CREATE TABLE `fsks` (
  `id` int(10) UNSIGNED NOT NULL,
  `fsk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `fsks`
--

INSERT INTO `fsks` (`id`, `fsk`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Approved for 0', 'approved-0', 'fsk-0.jpg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(2, 'Approved for 6', 'approved-6', 'fsk-6.jpg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(3, 'Approved for 12', 'approved-12', 'fsk-12.jpg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(4, 'Approved for 16', 'approved-16', 'fsk-16.jpg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(5, 'Approved for 18', 'approved-18', 'fsk-18.jpg', '2018-03-18 19:32:16', '2018-03-18 19:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `actor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `film_id`, `actor_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, '1521405239-bin-ich-schoen.jpg', '1', '0', '0', '2018-03-18 19:33:59', '2018-03-18 19:33:59'),
(2, '1521405289-meryl-streep.jpg', '0', '1', '0', '2018-03-18 19:34:49', '2018-03-18 19:34:49'),
(3, '1521405329-jack-nicholson.jpg', '0', '2', '0', '2018-03-18 19:35:29', '2018-03-18 19:35:29'),
(4, '1521405400-RatatouillePoster.jpg', '2', '0', '0', '2018-03-18 19:36:40', '2018-03-18 19:36:40'),
(5, '1521485569-concussion.jpg', '3', '0', '0', '2018-03-19 17:52:49', '2018-03-19 17:52:49'),
(6, '1521486146-learning-to-drive.jpg', '4', '0', '0', '2018-03-19 18:02:26', '2018-03-19 18:02:26'),
(7, '1521488639-morgan-freeman.jpg', '0', '3', '0', '2018-03-19 18:43:59', '2018-03-19 18:43:59'),
(8, '1521488661-will-smith.jpg', '0', '4', '0', '2018-03-19 18:44:21', '2018-03-19 18:44:21'),
(9, '1521488683-martin-lawrence.jpg', '0', '5', '0', '2018-03-19 18:44:43', '2018-03-19 18:44:43'),
(10, '1521488999-steve-carell.jpg', '0', '6', '0', '2018-03-19 18:49:59', '2018-03-19 18:49:59'),
(11, '1521489027-brad-pitt.jpg', '0', '7', '0', '2018-03-19 18:50:27', '2018-03-19 18:50:27'),
(12, '1521489061-sandra-bullock.jpg', '0', '8', '0', '2018-03-19 18:51:01', '2018-03-19 18:51:01'),
(13, '1521489104-hugh-grant.jpg', '0', '9', '0', '2018-03-19 18:51:44', '2018-03-19 18:51:44'),
(14, '1521489140-renee-zellweger.jpg', '0', '10', '0', '2018-03-19 18:52:20', '2018-03-19 18:52:20'),
(15, '1521489204-franka-potente.jpg', '0', '11', '0', '2018-03-19 18:53:24', '2018-03-19 18:53:24'),
(16, '1521489844-minions.jpg', '5', '0', '0', '2018-03-19 19:04:04', '2018-03-19 19:04:04'),
(17, '1521490043-mammamia.JPG', '6', '0', '0', '2018-03-19 19:07:23', '2018-03-19 19:07:23'),
(18, '1521490275-12-years-slave.jpg', '7', '0', '0', '2018-03-19 19:11:16', '2018-03-19 19:11:16'),
(19, '1521490437-eat-pray-love.jpg', '8', '0', '0', '2018-03-19 19:13:57', '2018-03-19 19:13:57'),
(20, '1521490638-mary-poppins.jpg', '9', '0', '0', '2018-03-19 19:17:18', '2018-03-19 19:17:18'),
(21, '1521490828-pirates-of-the-caribbean.jpg', '10', '0', '0', '2018-03-19 19:20:28', '2018-03-19 19:20:28'),
(22, '1521490958-the-aristocats.jpg', '11', '0', '0', '2018-03-19 19:22:38', '2018-03-19 19:22:38'),
(23, '1521496306-1492.jpg', '12', '0', '0', '2018-03-19 20:51:46', '2018-03-19 20:51:46'),
(24, '1521501823-my-name-is-khan.jpg', '13', '0', '0', '2018-03-19 22:23:43', '2018-03-19 22:23:43'),
(25, '1521502134-hotel-rwanda.jpg', '14', '0', '0', '2018-03-19 22:28:54', '2018-03-19 22:28:54'),
(26, '1521502355-eine-ganz-hummer.jpg', '15', '0', '0', '2018-03-19 22:32:35', '2018-03-19 22:32:35'),
(27, '1521502517-7-virgenes.jpg', '16', '0', '0', '2018-03-19 22:35:17', '2018-03-19 22:35:17'),
(28, '1521503422-hable-con-ella.jpg', '17', '0', '0', '2018-03-19 22:50:22', '2018-03-19 22:50:22'),
(29, '1521503577-mujeres-al-borde-de-un-ataque-de-nervios.jpg', '18', '0', '0', '2018-03-19 22:52:57', '2018-03-19 22:52:57'),
(30, '1521523597-amistad.jpg', '19', '0', '0', '2018-03-20 04:26:37', '2018-03-20 04:26:37'),
(31, '1521523895-back-to-the-future.jpg', '20', '0', '0', '2018-03-20 04:31:35', '2018-03-20 04:31:35'),
(32, '1521524003-back-to-the-future-II.jpg', '21', '0', '0', '2018-03-20 04:33:23', '2018-03-20 04:33:23'),
(33, '1521524149-back-to-the-future-III.jpg', '22', '0', '0', '2018-03-20 04:35:49', '2018-03-20 04:35:49'),
(34, '1521574494-pixels.jpg', '23', '0', '0', '2018-03-20 18:34:54', '2018-03-20 18:34:54'),
(35, '1521574621-10000-bc.jpg', '24', '0', '0', '2018-03-20 18:37:01', '2018-03-20 18:37:01'),
(36, '1521575463-2-guns.jpg', '25', '0', '0', '2018-03-20 18:51:03', '2018-03-20 18:51:03'),
(37, '1521576412-7-dias-en-la-habana.jpg', '26', '0', '0', '2018-03-20 19:06:52', '2018-03-20 19:06:52');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `language`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'English', 'english', 'english.svg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(2, 'German', 'german', 'german.svg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(3, 'Spanish', 'spanish', 'spanish.svg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(4, 'French', 'french', 'french.svg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(5, 'Italian', 'italian', 'italian.svg', '2018-03-18 19:32:16', '2018-03-18 19:32:16'),
(6, 'Chinese', 'chinese', 'chinese.svg', '2018-03-18 19:32:16', '2018-03-18 19:32:16');

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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2018_03_12_190728_create_films_table', 1),
(13, '2018_03_12_190955_create_categories_table', 1),
(14, '2018_03_12_191429_create_fsks_table', 1),
(15, '2018_03_12_191630_create_languages_table', 1),
(16, '2018_03_12_191701_create_actors_table', 1),
(17, '2018_03_12_230253_create_images_table', 1),
(18, '2018_03_15_052331_create_actor_film_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rafael Muñoz', 'rafaelmunoznl@yahoo.com', '$2y$10$ePL/aY3FxEMtIpThvVWtoesA50QxSEVXuOt19.uGBe8ikV0bnD/Qu', NULL, '2018-03-18 19:32:16', '2018-03-18 19:32:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `actors_slug_unique` (`slug`),
  ADD KEY `actors_image_id_index` (`image_id`);

--
-- Indexes for table `actor_film`
--
ALTER TABLE `actor_film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_film_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_film_film_id_foreign` (`film_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_category_unique` (`category`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_image_id_index` (`image_id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `films_slug_unique` (`slug`),
  ADD KEY `films_image_id_index` (`image_id`);

--
-- Indexes for table `fsks`
--
ALTER TABLE `fsks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fsks_fsk_unique` (`fsk`),
  ADD UNIQUE KEY `fsks_slug_unique` (`slug`),
  ADD UNIQUE KEY `fsks_image_unique` (`image`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_film_id_index` (`film_id`),
  ADD KEY `images_actor_id_index` (`actor_id`),
  ADD KEY `images_category_id_index` (`category_id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_language_unique` (`language`),
  ADD UNIQUE KEY `languages_slug_unique` (`slug`),
  ADD UNIQUE KEY `languages_image_unique` (`image`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `actor_film`
--
ALTER TABLE `actor_film`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `fsks`
--
ALTER TABLE `fsks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor_film`
--
ALTER TABLE `actor_film`
  ADD CONSTRAINT `actor_film_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`),
  ADD CONSTRAINT `actor_film_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
