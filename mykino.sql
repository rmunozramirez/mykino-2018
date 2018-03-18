-- --------------------------------------------------------
-- Host:                         localhost
-- Server Version:               5.7.19 - MySQL Community Server (GPL)
-- Server Betriebssystem:        Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Exportiere Datenbank Struktur für mykino
CREATE DATABASE IF NOT EXISTS `mykino` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `mykino`;

-- Exportiere Struktur von Tabelle mykino.actors
CREATE TABLE IF NOT EXISTS `actors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` enum('masculine','femenine') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `actors_slug_unique` (`slug`),
  KEY `actors_image_id_index` (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.actors: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.actor_film
CREATE TABLE IF NOT EXISTS `actor_film` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `actor_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.actor_film: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `actor_film` DISABLE KEYS */;
/*!40000 ALTER TABLE `actor_film` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_category_unique` (`category`),
  UNIQUE KEY `categories_slug_unique` (`slug`),
  KEY `categories_image_id_index` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.categories: ~27 rows (ungefähr)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
REPLACE INTO `categories` (`id`, `category`, `slug`, `description`, `image_id`, `created_at`, `updated_at`) VALUES
	(1, 'Action', 'action', 'Action Films', 5, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(2, 'Adventure', 'adventure', 'Adventure Films', 6, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(3, 'Animate', 'animate', 'Animate Films', 7, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(4, 'Comedy', 'comedy', 'Comedy Films', 8, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(5, 'Crime / Ganster', 'crime-ganster', 'Crime / Ganster Films', 9, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(6, 'Drama', 'drama', 'Drama Films', 10, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(7, 'Fantasy', 'fantasy', 'fantasy Films', 11, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(8, 'Fairy Tale', 'fairy-tale', 'Fairy Tale Films', 12, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(9, 'Epic / historical', 'epic-historical', 'Epic / historical Films', 13, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(10, 'Historical fiction', 'historical-fiction', 'Historical fiction Films', 14, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(11, 'Horror', 'horror', 'Horror Films', 15, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(12, 'Love Story', 'love-story', 'Love Story Films', 16, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(13, 'Musical / Dance', 'musical-dance', 'Musical / Dance Films', 17, '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(14, 'Mistery', 'mistery', 'mistery Films', 18, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(15, 'Paranoid / Paranormal', 'paranoid-paranormal', 'Paranoid / Paranormal Films', 19, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(16, 'Scince Fiction', 'scince-fiction', 'Scince Fiction Films', 20, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(17, 'Western', 'western', 'Western Films', 21, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(18, 'Martial arts', 'martial-arts', 'Martial arts Films', 22, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(19, 'Documentation', 'documentation', 'Documentation Films', 23, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(20, 'Kids', 'kids', 'Kids Films', 24, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(21, 'Biography', 'biography', 'Biography Films', 25, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(22, 'War / Military', 'war-military', 'War / Military Films', 26, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(23, 'Thriller', 'thriller', 'Thriller Films', 27, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(24, 'TV Series', 'tv-series', 'TV Series', 28, '2018-03-17 14:14:43', '2018-03-17 14:14:43'),
	(26, 'Dibujos ani', 'dibujos-animados', '<p>Animate Films.</p><p>24255<br>Esto es lo que digo<br></p>', 11, '2018-03-17 15:29:46', '2018-03-17 15:53:58'),
	(27, 'Dibujos mios', 'dibujos-mios', 'Animate Films.<br>mios<br>', 9, '2018-03-17 15:32:51', '2018-03-17 16:22:03'),
	(28, 'gut gemacht', 'gut-gemacht', 'gut gemacht<br>', 14, '2018-03-17 15:33:45', '2018-03-17 16:06:56');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.films
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) unsigned NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `duration` time NOT NULL,
  `fsk_id` int(10) unsigned NOT NULL,
  `language_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `films_slug_unique` (`slug`),
  KEY `films_image_id_index` (`image_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.films: ~4 rows (ungefähr)
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
REPLACE INTO `films` (`id`, `name`, `image_id`, `description`, `slug`, `trailer`, `year`, `duration`, `fsk_id`, `language_id`, `category_id`, `created_at`, `updated_at`) VALUES
	(1, 'Bin ich schön?', 1, '$img_id <br><p><br></p>', 'bin-ich-schon', 'https://www.youtube.com/watch?v=gdUrdivQ4_M', 1998, '01:30:54', 3, 2, 4, '2018-03-17 15:05:11', '2018-03-17 15:05:11'),
	(2, 'Ratatouille', 2, '<p>$img_id <br></p>', 'ratatouille', 'https://www.youtube.com/watch?v=gdUrdivQ4_M', 1998, '01:52:00', 1, 1, 3, '2018-03-17 15:10:58', '2018-03-17 15:10:58'),
	(3, 'Concussion', 4, '<p>(3, \'Concussion\', \'3\', \'In 2002, former Pittsburgh Steelers center Mike Webster is found dead in his pickup truck, after years of self-mutilation and homelessness. Before his death, a fellow football player, Justin Strzelczyk, comes to him, and confides that he is starting to lose his memory, that he is saying odd things to his children, and nearly threw his wife against the wall. A disoriented Webster brushes the worries off, and deliriously tells him that the most important thing \\"is to finish the game\\", which is what he said during his Hall of Fame speech.\', \'concussion\', \'https://www.youtube.com/watch?v=Io6hPdC41RM\', \'2015-01-01\', \'02:02:00\', 4, 1, 6, \'2016-07-30 08:00:00\', \'2016-09-09 04:00:00\'),<br><br></p>', 'concussion', 'https://www.youtube.com/watch?v=gdUrdivQ4_M', 2007, '01:30:54', 4, 1, 6, '2018-03-17 15:14:58', '2018-03-17 15:14:58'),
	(4, 'Learning to drive', 7, '<p>(4, \'Learning to drive\', \'4\', \'Learning to Drive is about the unlikely friendship that develops between two very different New Yorkers. Wendy is a sharp-tongued author whose husband just left her, inspiring her to embrace her independence and learn how to drive. Her teacher, Darwan, is a gentle Indian Sikh driving instructor with an impending arranged marriage. As Darwan teaches Wendy how to drive, they both learn valuable lessons about relationships, life, and the value of friendship\', \'learning-to-drive\', \'\', \'2014-01-01\', \'01:30:00\', 3, 1, 6, \'2016-07-30 08:00:00\', \'2016-09-09 04:00:00\'),<br><br></p>', 'learning-to-drive', 'https://www.youtube.com/watch?v=IThfFYmEGEs', 2014, '01:51:00', 3, 1, 6, '2018-03-17 15:24:59', '2018-03-17 15:24:59');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.fsks
CREATE TABLE IF NOT EXISTS `fsks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fsk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `fsks_fsk_unique` (`fsk`),
  UNIQUE KEY `fsks_slug_unique` (`slug`),
  UNIQUE KEY `fsks_image_unique` (`image`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.fsks: ~5 rows (ungefähr)
/*!40000 ALTER TABLE `fsks` DISABLE KEYS */;
REPLACE INTO `fsks` (`id`, `fsk`, `slug`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'Approved for 0', 'approved-0', 'fsk-0.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(2, 'Approved for 6', 'approved-6', 'fsk-6.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(3, 'Approved for 12', 'approved-12', 'fsk-12.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(4, 'Approved for 16', 'approved-16', 'fsk-16.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(5, 'Approved for 18', 'approved-18', 'fsk-18.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42');
/*!40000 ALTER TABLE `fsks` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.images
CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `film_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `actor_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_film_id_index` (`film_id`),
  KEY `images_actor_id_index` (`actor_id`),
  KEY `images_category_id_index` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.images: ~15 rows (ungefähr)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
REPLACE INTO `images` (`id`, `image`, `film_id`, `actor_id`, `category_id`, `created_at`, `updated_at`) VALUES
	(1, '1521299111-bin-ich-schoen.jpg', '1', '1', '1', '2018-03-17 15:05:11', '2018-03-17 15:05:11'),
	(2, '1521299458-RatatouillePoster.jpg', '2', '1', '1', '2018-03-17 15:10:58', '2018-03-17 15:10:58'),
	(3, '1521299485-36-chambers-of-shaolin.jpg', '1', '1', '1', '2018-03-17 15:11:25', '2018-03-17 15:11:25'),
	(4, '1521299698-inside-man.jpg', '3', '1', '1', '2018-03-17 15:14:58', '2018-03-17 15:14:58'),
	(5, '1521299744-1473911459.jpg', '1', '1', '1', '2018-03-17 15:15:44', '2018-03-17 15:15:44'),
	(6, '1521300165-1474139642.jpg', '1', '1', '1', '2018-03-17 15:22:45', '2018-03-17 15:22:45'),
	(7, '1521300299-learning-to-drive.jpg', '4', '1', '1', '2018-03-17 15:24:59', '2018-03-17 15:24:59'),
	(8, '1521300586-carstoons.png', '1', '1', '26', '2018-03-17 15:29:46', '2018-03-17 15:29:46'),
	(9, '1521300771-1473911847.jpg', '1', '1', '27', '2018-03-17 15:32:51', '2018-03-17 15:32:51'),
	(10, '1521300825-1474141016.jpg', '1', '1', '28', '2018-03-17 15:33:45', '2018-03-17 15:33:45'),
	(11, '1521302038-adam-sandler.jpg', '1', '1', '1', '2018-03-17 15:53:58', '2018-03-17 15:53:58'),
	(12, '1521302094-2015_Focus_film_poster.png', '1', '1', '1', '2018-03-17 15:54:54', '2018-03-17 15:54:54'),
	(13, '1521302128-1474139642.jpg', '1', '1', '1', '2018-03-17 15:55:28', '2018-03-17 15:55:28'),
	(14, '1521302234-1474378471.jpg', '1', '1', '1', '2018-03-17 15:57:14', '2018-03-17 15:57:14'),
	(15, '1521310760-indiana-jones-and-the-temple-of-doom.jpg', '1', '1', '1', '2018-03-17 18:19:20', '2018-03-17 18:19:20');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.languages
CREATE TABLE IF NOT EXISTS `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `languages_language_unique` (`language`),
  UNIQUE KEY `languages_slug_unique` (`slug`),
  UNIQUE KEY `languages_image_unique` (`image`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.languages: ~9 rows (ungefähr)
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
REPLACE INTO `languages` (`id`, `language`, `slug`, `image`, `created_at`, `updated_at`) VALUES
	(1, 'English', 'english', 'english.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(2, 'German', 'german', 'german.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(3, 'Spanish', 'spanish', 'spanish.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(4, 'French', 'french', 'french.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(5, 'Italian', 'italian', 'italian.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(6, 'Chinese', 'chinese', 'chinese.jpg', '2018-03-17 14:14:42', '2018-03-17 14:14:42'),
	(7, 'Sueco', 'sueco', '1521299485-36-chambers-of-shaolin.jpg', '2018-03-17 15:11:25', '2018-03-17 15:11:25'),
	(8, 'hindish', 'hindish', '1521299744-1473911459.jpg', '2018-03-17 15:15:44', '2018-03-17 15:15:44'),
	(9, 'greek', 'greek', '1521300165-1474139642.jpg', '2018-03-17 15:22:45', '2018-03-17 15:22:45');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.migrations: ~9 rows (ungefähr)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(247, '2014_10_12_000000_create_users_table', 1),
	(248, '2014_10_12_100000_create_password_resets_table', 1),
	(249, '2018_03_12_190728_create_films_table', 1),
	(250, '2018_03_12_190955_create_categories_table', 1),
	(251, '2018_03_12_191429_create_fsks_table', 1),
	(252, '2018_03_12_191630_create_languages_table', 1),
	(253, '2018_03_12_191701_create_actors_table', 1),
	(254, '2018_03_12_230253_create_images_table', 1),
	(255, '2018_03_15_052331_create_actor_film_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.password_resets: ~0 rows (ungefähr)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle mykino.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Exportiere Daten aus Tabelle mykino.users: ~1 rows (ungefähr)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
REPLACE INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Rafael Muñoz', 'rafaelmunoznl@yahoo.com', '$2y$10$XDme42VxMDupaWWUF2hBD.HR/NIItmtiYwlmhUmlur0smS56msXYC', NULL, '2018-03-17 14:14:42', '2018-03-17 14:14:42');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
