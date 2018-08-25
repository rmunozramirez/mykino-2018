-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 25-08-2018 a las 07:28:37
-- Versión del servidor: 5.7.19
-- Versión de PHP: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mykino`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors`
--

CREATE TABLE `actors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `gender_id` int(11) NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`id`, `name`, `image_id`, `gender_id`, `slug`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Meryl Streep', 44, 1, 'meryl-streep', '2018-08-24 07:36:32', '2018-08-24 07:36:32', NULL),
(2, 'Jack Nicholson', 45, 2, 'jack-nicholson', '2018-08-24 07:37:15', '2018-08-24 07:37:15', NULL),
(3, 'Morgan Freeman', 46, 2, 'morgan-freeman', '2018-08-24 07:37:44', '2018-08-24 07:37:44', NULL),
(4, 'Will Smith', 47, 2, 'will-smith', '2018-08-24 07:38:09', '2018-08-24 07:38:09', NULL),
(5, 'Martin Lawrence', 48, 2, 'martin-lawrence', '2018-08-24 07:38:37', '2018-08-24 07:38:37', NULL),
(6, 'Steve Carell', 49, 2, 'steve-carell', '2018-08-24 07:39:04', '2018-08-24 07:39:04', NULL),
(7, 'Brad Pitt', 50, 2, 'brad-pitt', '2018-08-24 07:39:26', '2018-08-24 07:39:26', NULL),
(8, 'Sandra Bullock', 51, 1, 'sandra-bullock', '2018-08-24 07:39:48', '2018-08-24 07:39:48', NULL),
(9, 'Hugh Grant', 52, 2, 'hugh-grant', '2018-08-24 07:40:13', '2018-08-24 07:40:13', NULL),
(10, 'Renée Zellwege', 53, 1, 'renee-zellwege', '2018-08-24 07:40:35', '2018-08-24 07:40:35', NULL),
(11, 'Franka Potente', 54, 1, 'franka-potente', '2018-08-24 07:40:56', '2018-08-24 07:40:56', NULL),
(12, 'Ben Kingsley', 55, 2, 'ben-kingsley', '2018-08-24 07:41:19', '2018-08-24 07:41:19', NULL),
(13, 'Patricia Clarkson\'', 56, 1, 'patricia-clarkson', '2018-08-24 07:41:36', '2018-08-24 07:41:36', NULL),
(14, 'Pierce Brosnan', 57, 2, 'pierce-brosnan', '2018-08-24 07:42:00', '2018-08-24 07:42:00', NULL),
(15, 'Amanda Seyfried', 58, 1, 'amanda-seyfried', '2018-08-24 07:42:19', '2018-08-24 07:42:19', NULL),
(16, 'Colin Firth', 59, 2, 'colin-firth', '2018-08-24 07:42:44', '2018-08-24 07:42:44', NULL),
(17, 'Christine Baransk', 60, 1, 'christine-baransk', '2018-08-24 07:43:06', '2018-08-24 07:43:06', NULL),
(18, 'Dominic Cooper', 61, 2, 'dominic-cooper', '2018-08-24 07:43:28', '2018-08-24 07:43:28', NULL),
(19, 'Julie Walters', 62, 1, 'julie-walters', '2018-08-24 07:43:56', '2018-08-24 07:43:56', NULL),
(20, 'Stellan Skarsgård', 63, 2, 'stellan-skarsgard', '2018-08-24 07:44:17', '2018-08-24 07:44:17', NULL),
(21, 'Chiwetel Ejiofor', 64, 2, 'chiwetel-ejiofor', '2018-08-24 07:44:39', '2018-08-24 07:44:39', NULL),
(22, 'Denzel Washington\'', 65, 2, 'denzel-washington', '2018-08-24 07:44:59', '2018-08-24 07:44:59', NULL),
(23, 'Robin Williams', 66, 2, 'robin-williams', '2018-08-24 07:45:21', '2018-08-24 07:45:21', NULL),
(24, 'Julia Roberts', 67, 1, 'julia-roberts', '2018-08-24 07:45:49', '2018-08-24 07:45:49', NULL),
(25, 'James Franco', 68, 2, 'james-franco', '2018-08-24 07:46:10', '2018-08-24 07:46:10', NULL),
(26, 'Tina Fey', 69, 1, 'tina-fey', '2018-08-24 07:46:28', '2018-08-24 07:46:28', NULL),
(27, 'Javier Bardem', 70, 2, 'javier-bardem', '2018-08-24 07:46:49', '2018-08-24 07:46:49', NULL),
(28, 'Richard Jenkins', 71, 2, 'richard-jenkins', '2018-08-24 07:47:14', '2018-08-24 07:47:14', NULL),
(29, 'Robert De Niro', 72, 2, 'robert-de-niro', '2018-08-24 07:47:35', '2018-08-24 07:47:35', NULL),
(30, 'Julie Andrews', 73, 1, 'julie-andrews', '2018-08-24 07:47:58', '2018-08-24 07:47:58', NULL),
(31, 'Johnny Depp', 74, 2, 'johnny-depp', '2018-08-24 07:48:28', '2018-08-24 07:48:28', NULL),
(32, 'Shah Rukh Khan', 75, 2, 'shah-rukh-khan', '2018-08-24 07:48:52', '2018-08-24 07:48:52', NULL),
(33, 'Dick Van Dyke', 76, 2, 'dick-van-dyke', '2018-08-24 07:49:14', '2018-08-24 07:49:14', NULL),
(34, 'Kajol Devgan', 77, 1, 'kajol-devgan', '2018-08-24 07:49:38', '2018-08-24 07:49:38', NULL),
(35, 'Don Cheadle', 78, 2, 'don-cheadle', '2018-08-24 07:50:04', '2018-08-24 07:50:04', NULL),
(36, 'Margot Robbie', 79, 1, 'margot-robbie', '2018-08-24 07:50:27', '2018-08-24 07:50:27', NULL),
(37, 'Mylène Saint-Sauveur', 80, 1, 'mylene-saint-sauveur', '2018-08-24 07:51:32', '2018-08-24 07:51:32', NULL),
(38, 'Tom cruise', 81, 2, 'tom-cruise', '2018-08-24 07:51:54', '2018-08-24 07:51:54', NULL),
(39, 'César Evora', 82, 2, 'cesar-evora', '2018-08-24 07:52:14', '2018-08-24 07:55:18', NULL),
(40, 'Gene Wilder', 83, 2, 'gene-wilder', '2018-08-24 07:52:32', '2018-08-24 07:52:32', NULL),
(41, 'Anthony Quinn', 84, 2, 'anthony-quinn', '2018-08-24 07:53:11', '2018-08-24 07:53:11', NULL),
(42, 'Kevin James', 85, 2, 'kevin-james', '2018-08-24 07:53:36', '2018-08-24 07:53:36', NULL),
(43, 'Wesley Snipes', 86, 2, 'wesley-snipes', '2018-08-24 07:53:55', '2018-08-24 07:53:55', NULL),
(44, 'Daysi Granados', 87, 1, 'daysi-granados', '2018-08-24 07:54:15', '2018-08-24 07:54:15', NULL),
(45, 'Russell Crowe', 88, 2, 'russell-crowe', '2018-08-24 07:54:36', '2018-08-24 07:54:36', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor_film`
--

CREATE TABLE `actor_film` (
  `id` int(10) UNSIGNED NOT NULL,
  `actor_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actor_film`
--

INSERT INTO `actor_film` (`id`, `actor_id`, `film_id`, `created_at`, `updated_at`) VALUES
(1, 15, 6, NULL, NULL),
(2, 17, 6, NULL, NULL),
(3, 19, 6, NULL, NULL),
(4, 14, 6, NULL, NULL),
(5, 16, 6, NULL, NULL),
(6, 18, 6, NULL, NULL),
(7, 20, 6, NULL, NULL),
(8, 1, 6, NULL, NULL),
(9, 21, 7, NULL, NULL),
(10, 7, 7, NULL, NULL),
(11, 24, 8, NULL, NULL),
(12, 27, 8, NULL, NULL),
(13, 25, 8, NULL, NULL),
(14, 28, 8, NULL, NULL),
(15, 30, 9, NULL, NULL),
(16, 33, 9, NULL, NULL),
(17, 31, 10, NULL, NULL),
(18, 32, 12, NULL, NULL),
(19, 34, 12, NULL, NULL),
(20, 35, 13, NULL, NULL),
(21, 3, 18, NULL, NULL),
(22, 20, 18, NULL, NULL),
(23, 21, 18, NULL, NULL),
(24, 22, 24, NULL, NULL),
(25, 8, 27, NULL, NULL),
(26, 45, 30, NULL, NULL),
(27, 1, 33, NULL, NULL),
(28, 4, 35, NULL, NULL),
(29, 31, 38, NULL, NULL),
(30, 11, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Action', 'action', 'Action Films', 5, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(2, 'Adventure', 'adventure', 'Adventure Films', 6, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(3, 'Animate', 'animate', 'Animate Films', 7, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(4, 'Comedy', 'comedy', 'Comedy Films', 8, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(5, 'Crime / Ganster', 'crime-ganster', 'Crime / Ganster Films', 9, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(6, 'Drama', 'drama', 'Drama Films', 10, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(7, 'Fantasy', 'fantasy', 'fantasy Films', 11, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(8, 'Fairy Tale', 'fairy-tale', 'Fairy Tale Films', 12, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(9, 'Epic / historical', 'epic-historical', 'Epic / historical Films', 13, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(10, 'Historical fiction', 'historical-fiction', 'Historical fiction Films', 14, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(11, 'Horror', 'horror', 'Horror Films', 15, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(12, 'Love Story', 'love-story', 'Love Story Films', 16, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(13, 'Musical / Dance', 'musical-dance', 'Musical / Dance Films', 17, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(14, 'Mistery', 'mistery', 'mistery Films', 18, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(15, 'Paranoid / Paranormal', 'paranoid-paranormal', 'Paranoid / Paranormal Films', 19, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(16, 'Scince Fiction', 'scince-fiction', 'Scince Fiction Films', 20, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(17, 'Western', 'western', 'Western Films', 21, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(18, 'Martial arts', 'martial-arts', 'Martial arts Films', 22, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(19, 'Documentation', 'documentation', 'Documentation Films', 23, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(20, 'Kids', 'kids', 'Kids Films', 24, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(21, 'Biography', 'biography', 'Biography Films', 25, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(22, 'War / Military', 'war-military', 'War / Military Films', 26, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(23, 'Thriller', 'thriller', 'Thriller Films', 27, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(24, 'TV Series', 'tv-series', 'TV Series', 28, '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trailer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` date DEFAULT NULL,
  `duration` time DEFAULT NULL,
  `fsk_id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `films`
--

INSERT INTO `films` (`id`, `name`, `image_id`, `description`, `slug`, `trailer`, `year`, `duration`, `fsk_id`, `language_id`, `category_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bin ich schön?', 6, '<p>Die Schicksale 16 verschiedener Personen in München oder im spanischen Sevilla sind miteinander verknüpft. Dabei verlagert sich die Handlung von Spanien nach Deutschland und wieder zurück. Sie alle sind verstrickt in Eifersucht und Liebesaffären, Ehedramen und Hochzeiten, Sehnsüchten und geheimen Wünschen. Gemeinsamkeit aller Figuren ist ihre Traurigkeit und Sehnsucht nach einem anderen Leben. Sie hängen ihren Erinnerungen nach oder beklagen den Verlust einer nahestehenden Person.<br></p>', 'bin-ich-schon', 'https://www.youtube.com/embed/gdUrdivQ4_M', '1998-09-17', '01:52:00', 3, 2, 4, '2018-08-22 12:37:09', '2018-08-22 12:37:09', NULL),
(2, 'Ratatouille', 7, '<p>Remy is an idealistic and ambitious young rat, gifted with highly developed senses of taste and smell. Inspired by his idol, the recently deceased chef Auguste Gusteau, Remy dreams of becoming a cook himself. When an old French woman discovers Remy\'\'s clan in her house, they are forced to flee, and Remy becomes separated from his family in the panic. He ends up in the sewers of Paris and eventually finds himself at a skylight overlooking the kitchen of Gusteau\'\'s restaurant.<br></p>', 'ratatouille', 'https://www.youtube.com/embed/niD-jahFURU', '2007-01-01', '01:51:00', 1, 1, 3, '2018-08-22 12:39:05', '2018-08-22 14:44:49', NULL),
(3, 'Concussion', 8, '<p>In 2002, former Pittsburgh Steelers center Mike Webster is found dead in his pickup truck, after years of self-mutilation and homelessness. Before his death, a fellow football player, Justin Strzelczyk, comes to him, and confides that he is starting to lose his memory, that he is saying odd things to his children, and nearly threw his wife against the wall. A disoriented Webster brushes the worries off, and deliriously tells him that the most important thing \"is to finish the game\", which is what he said during his Hall of Fame speech.<br></p>', 'concussion', 'https://www.youtube.com/embed/Io6hPdC41RM', '2015-07-30', '02:02:00', 4, 1, 6, '2018-08-22 12:43:56', '2018-08-22 12:43:56', NULL),
(4, 'Learning to drive', 9, '<p>Learning to Drive is about the unlikely friendship that develops between two very different New Yorkers. Wendy is a sharp-tongued author whose husband just left her, inspiring her to embrace her independence and learn how to drive. Her teacher, Darwan, is a gentle Indian Sikh driving instructor with an impending arranged marriage. As Darwan teaches Wendy how to drive, they both learn valuable lessons about relationships, life, and the value of friendship.<br></p>', 'learning-to-drive', 'https://www.youtube.com/embed/IThfFYmEGEs', '2014-01-01', '01:30:00', 3, 1, 6, '2018-08-22 12:50:04', '2018-08-22 12:50:04', NULL),
(5, 'Minions', 10, '<p>Minions are small, yellow creatures who have existed since the beginning of time, evolving from single-celled organisms into beings who exist only to serve history\'\'s most despicable masters<br></p>', 'minions', 'https://www.youtube.com/embed/eisKxhjBnZ0', '2015-01-01', '01:31:00', 1, 1, 3, '2018-08-22 12:52:55', '2018-08-22 12:52:55', NULL),
(6, 'Mamma Mia!', 11, '<p>On a Greek island called Kalokairi, bride-to-be Sophie Sheridan posts three wedding invitations (\"I Have a Dream\") to different men.\\\\r\\\\n\\\\r\\\\nSophie\'\'s bridesmaids, Ali and Lisa, arrive. Sophie reveals that she found her mother\'\'s diary and has three possible fathers: Irish-American architect Sam Carmichael, Swedish adventurer and writer Bill Anderson, and British banker Harry Bright. As Sophie wants her father to give her away at the altar, she invited them without telling her mother, believing that after she spends time with them she will know who her father is (\"Honey, Honey\"). Villa owner Donna Sheridan, Sophie\'\'s mom, is ecstatic to reunite with her former Dynamos bandmates, wisecracking author Rosie Mulligan and wealthy multiple divorcée Tanya Chesham-Leigh, and reveals her bafflement at her daughter\'\'s desire to get married. Donna shows off the villa to Rosie and Tanya (\"Money, Money, Money\"). The three men arrive; Sophie smuggles them to their room and explains that she sent the invitations. She begs them to hide so Donna will have a surprise at the wedding: seeing the old friends of whom she \"so often\" favourably speaks. They overhear Donna working (humming \"Fernando\") and swear not to reveal her secret.<br></p>', 'mamma-mia', 'https://www.youtube.com/embed/CiVnD9i7BpE', '2008-07-18', '01:49:00', 2, 1, 13, '2018-08-22 12:55:08', '2018-08-22 12:55:08', NULL),
(7, '12 Years a Slave', 12, '<p>In 1841, Solomon Northup is a free African-American man working as a violinist, living with his wife and two children in Saratoga Springs, New York. Two white men, Brown and Hamilton, offer him short-term employment as a musician if he will travel with them to Washington, D.C. However, once they arrive, the duo drug Northup and conspire to deliver him to a slave pen. Northup is later shipped to New Orleans along with others who have been detained against their will. A slave trader named Freeman gives Northup the identity of \"Platt\", a runaway slave from Georgia, and sells him and another slave Eliza to plantation owner William Ford. Due to tension between Northup and another plantation worker, Ford sells him to another slave owner named Edwin Epps. In the process, Northup attempts to explain that he is actually a free man, but to no avail.\', \'12-years-slave<br></p>', '12-years-a-slave', 'https://www.youtube.com/embed/z02Ie8wKKRg', '2014-01-16', '02:14:00', 4, 1, 9, '2018-08-22 12:58:42', '2018-08-22 12:58:42', NULL),
(8, 'Eat pray love', 13, '<p>Elizabeth Gilbert had everything a modern woman is supposed to dream of having - a husband, a house, a successful career – yet like so many others, she found herself lost, confused, and searching for what she really wanted in life. Newly divorced and at a crossroads, Gilbert steps out of her comfort zone, risking everything to change her life, embarking on a journey around the world that becomes a quest for self-discovery. In her travels, she discovers the true pleasure of nourishment by eating in Italy, the power of prayer in India, and, finally and unexpectedly, the inner peace and balance of true love in Indonesia.<br></p>', 'eat-pray-love', 'https://www.youtube.com/embed/_tlMo1S8HNE', '2010-08-13', '02:20:00', 3, 1, 12, '2018-08-22 13:02:41', '2018-08-22 13:02:41', NULL),
(9, 'Mary Poppins', 14, '<p>In Edwardian London, 1910, Cockney one-man band Bert is entertaining a crowd when he senses a change in the wind. Afterwards, he directly addresses the audience and gives them a tour of Cherry Tree Lane, stopping outside the home of the Banks family. George Banks returns home from his job at the bank to learn from his wife Winifred that their hired nanny, Katie Nanna, has left their service after his children, Jane and Michael, ran away \"again\". They are returned shortly after by the local constable, who reveals that the children were chasing a lost kite. The children ask their father to help build a better kite, but he dismisses them. Taking it upon himself to hire a nanny, George advertises for a stern, no-nonsense nanny. Instead, Jane and Michael present their own advertisement for a kinder, sweeter nanny, but when George rips up the letter and throws the scraps in the fireplace, the remains of the advertisement magically float up and out into the air.<br></p>', 'mary-poppins', 'https://www.youtube.com/embed/fuWf9fP-A-U', '1964-08-07', '02:19:00', 1, 1, 20, '2018-08-22 13:08:00', '2018-08-22 13:08:00', NULL),
(10, 'Pirates of the Caribbean', 15, '<p>In the early 18th Century while sailing to Port Royal, Jamaica, Governor Weatherby Swann, his daughter Elizabeth, and Lieutenant James Norrington encounter a shipwreck and recover a boy, Will Turner. Elizabeth discovers a golden pirate medallion around his neck, keeping it so as to protect him. Elizabeth sees a ghost ship vanish into the fog.&nbsp; Eight years later, Norrington is promoted to Commodore and proposes to Elizabeth, but her corset makes her faint and fall into the sea. Captain Jack Sparrow comes to Port Royal to commandeer a ship, and rescues her. Norrington identifies Jack, and a chase ensues. Jack encounters Will, now a blacksmith and swordsman. They duel, and Jack is captured and imprisoned.<br></p>', 'pirates-of-the-caribbean', 'https://www.youtube.com/embed/naQr0uTrH_s', '2009-07-09', '02:23:00', 2, 1, 4, '2018-08-22 13:10:36', '2018-08-22 13:10:36', NULL),
(11, 'The Aristocats', 16, '<p>In Paris in 1910, mother cat Duchess and her three kittens, Marie, Berlioz, and Toulouse, live with retired opera diva Madame Adelaide Bonfamille, and her English butler, Edgar. One day while preparing her will with lawyer Georges Hautecourt, Madame declares her fortune to be left to her cats until their deaths, and thereafter to Edgar. Edgar hears this through a speaking tube, and plots to eliminate the cats. Therefore, he sedates the cats by sleeping pills in their food, and enters the countryside to abandon them. There, he is ambushed by two hounds, named Napoleon and Lafayette, and the cats are stranded in the countryside, while Madame Adelaide, Roquefort the mouse, and Frou-Frou the horse discover their absence. In the morning, Duchess meets an alley cat named Thomas O\'\'Malley, who offers to guide her and the kittens to Paris. The group briefly hitchhike in a milk cart before being chased off by the driver. Later, while crossing a railroad trestle, the cats narrowly avoid an oncoming train, but Marie falls into a river and is saved by O\'\'Malley; himself rescued by two English geese, Amelia and Abigail Gabble, who accompany the cats to Paris. Edgar returns to the country to retrieve his possessions from Napoleon and Lafayette, as the only evidence that could incriminate him.&nbsp; Travelling across the rooftops of the city, the cats meet O\'\'Malley\'\'s friend Scat Cat and his musicians, who perform the scat song Ev\'\'rybody Wants to Be a Cat. After the band has departed, O\'\'Malley and Duchess converse on a nearby rooftop while the kittens listen at a windowsill. Here, Duchess\'\' loyalty to Madame prompts her to decline O\'\'Malley\'\'s proposal of marriage. Duchess and the kittens return to Madame\'\'s mansion, but Edgar places them in a sack and prepares to ship them to Timbuktu; whereupon they direct Roquefort to retrieve O\'\'Malley. He does so, and O\'\'Malley returns to the mansion, ordering Roquefort to find Scat Cat and his gang. This done, the alley cats and Frou-Frou fight Edgar, while Roquefort frees Duchess and the kittens. In the end of the fight, Edgar is locked in his own packing-case and sent to Timbuktu himself. Madame Adelaide\'\'s will is rewritten to exclude Edgar, with Madame expressing surprise at Edgar’s departure. After adopting O’Malley into the family, Madame establishes a charity foundation housing Paris\'\' stray cats (represented by Scat Cat and his band, who reprise their song).<br></p>', 'the-aristocats', 'https://www.youtube.com/embed/scZSFUwgeIM', '1970-12-11', '01:18:00', 1, 1, 3, '2018-08-22 13:14:40', '2018-08-22 13:14:40', NULL),
(12, 'My Name Is Khan', 17, '<p>Rizwan Khan (Tanay Chheda) is a Muslim child who grew up with his brother Zakir and his mother Razia Khan (Zarina Wahab) in a middle-class family in the section of Mumbai. Rizwan is different from other children, however. He has certain gifts, particularly a special ability to repair mechanical things. His difference leads to special tutoring from a reclusive scholar and extra attention from his mother, both of which lead to heightened jealousy from his brother Zakir, who eventually leaves his family for a life in the United States.<br></p>', 'my-name-is-khan', 'https://www.youtube.com/embed/nqxgYT3TYzY', '2010-02-10', '02:45:00', 3, 1, 6, '2018-08-23 07:05:07', '2018-08-23 07:05:07', NULL),
(13, 'Hotel Rwanda', 18, '<p>Tensions between the Hutu and Tutsi peoples lead to a civil war in Rwanda, where corruption and bribes between politicians are routine. Paul Rusesabagina (Cheadle), the manager of the Sabena owned Hôtel des Mille Collines, is Hutu, but his wife Tatiana (Okonedo), is Tutsi. His marriage is a source of friction with Hutu extremists, most prominently Georges Rutaganda (Kae-Kazim), a friendly goods supplier to the hotel who is also the local leader of Interahamwe, a brutal Hutu militia.<br></p>', 'hotel-rwanda', 'https://www.youtube.com/embed/4dd8rX5Dy_Q', '2005-02-24', '02:01:00', 5, 1, 9, '2018-08-23 07:10:08', '2018-08-23 07:10:08', NULL),
(14, 'Eine ganz heisse Nummer', 19, '<p>In der niederbayerischen Gemeinde Marienzell treibt die Wirtschaftskrise die Bewohner in die Arbeitslosigkeit. Nach Schließung der örtlichen Glashütte warten auch die beiden Inhaberinnen des Tante-Emma-Ladens Lebensmittel Brandner, Waltraud Wackernagel und Maria Brandner, samt ihrer Verkäuferin Lena vergeblich auf die letzte verbliebene Kundschaft ihres Geschäftes, die inzwischen lieber im Discount-Supermarkt in Zwiesel einkaufen geht. Obendrein erscheint eines Tages Herr Sonnleitner von der Bayernbank unangemeldet im Laden und verkündet die Kündigung des zukunftssichernden Geschäftskredits mit einer Frist von vier Wochen. Da Waltrauds Ehemann durch die Schließung der Glashütte arbeitslos geworden ist, droht dem Ehepaar zudem der Verlust des Eigenheims. Waltraud, Maria und Lena bleiben nur wenige Wochen Zeit, sich mit Zusatzeinnahmen aus der Misere zu befreien. Da scheint die Schnapsidee, heimlich eine Sexhotline zu gründen, bald wie die Rettung – nicht ohne in der streng katholischen Heimat jedoch einen haushohen Skandal heraufzubeschwören.<br></p>', 'eine-ganz-heisse-nummer', 'https://www.youtube.com/embed/oMrjwAA-VOI', '2011-01-01', '01:35:00', 3, 2, 4, '2018-08-23 07:12:08', '2018-08-23 07:12:08', NULL),
(15, '7 vírgenes', 20, '<p>Es verano en un barrio obrero y marginal de Sevilla. Tano, un adolescente que cumple condena en un reformatorio, recibe un permiso especial de 48 horas para asistir a la boda de su hermano Santacana. Con su mejor amigo, Richi, se lanza a vivir esas horas con el firme propósito de divertirse y de hacer todo lo que le está prohibido: se emborracha, se droga, roba, ama y vuelve a sentirse vivo y libre. Pero, a medida que pasan las horas, Tano también asiste al desmoronamiento de todos sus puntos de referencía: el barrio, la familia, el amor, la amistad, todo ha cambiado. Más allá de un permiso de 48 horas, la libertad de Tano se convierte en un viaje obligado hacia la madurez.<br></p>', '7-virgenes', 'https://www.youtube.com/embed/29txqk7I-0U', '2005-01-01', '01:25:00', 4, 3, 6, '2018-08-23 07:13:35', '2018-08-23 07:13:35', NULL),
(16, 'Hable con ella', 21, '<p>Dos hombres se enfrentan a la soledad de la manera más cruda y cruel que puedan imaginarse. Dos almas heridas por el azar del destino, dos espíritus aparentemente muertos y convalecientes en camas hospitalarias a la espera de un milagro sobrenatural. La incomunicación, soledad, amistad y pasión irracional son temas de plena efervescencia en Hable con ella; el filme de Pedro Almodóvar se centra principalmente en la vida de dos hombres.<br></p>', 'hable-con-ella', 'https://www.youtube.com/embed/KNdzcTZUW54', '2002-01-01', '01:52:00', 4, 3, 6, '2018-08-23 07:20:01', '2018-08-23 07:20:01', NULL),
(17, 'Mujeres al borde de un ataque de nervios', 22, '<p>Pepa e Iván son una pareja sentimental y ambos se dedican al doblaje de películas. Cuando Iván rompe con ella, Pepa descubre que está embarazada, y lo busca para decírselo.&nbsp; Iván, por su parte, estuvo casado anteriormente con Lucía, que al dar a luz enloqueció y tuvo que ser internada en un psiquiátrico, donde es abandonada por Iván. Una noche, Lucía oye la voz de Iván en el televisor, doblando a un actor de una película. En ese momento decide fingir que está curada para salir del psiquiátrico y volver a casa con Iván, descubriendo que éste se ha separado de ella.\', \'mujeres-al-borde-de-un-ataque-de-nervios.<br></p>', 'mujeres-al-borde-de-un-ataque-de-nervios', 'https://www.youtube.com/embed/Q31VFLBkmSs', '1998-01-01', '01:28:00', 3, 3, 4, '2018-08-23 07:21:37', '2018-08-23 07:21:37', NULL),
(18, 'Amistad', 23, '<p>Amistad is the name of a slave ship traveling from Cuba to the United States in 1839. It is carrying African people as its cargo. As the ship is crossing from Cuba to the United States, Cinqué, a leader of the Africans, leads a mutiny and takes over the ship. The mutineers spare the lives of two Spanish navigators to help them sail the ship back to Africa. Instead, the navigators play out the Africans and sail north to the east coast of the United States, where the ship is stopped by the American Navy, and the 53 living Africans imprisoned as runaway slaves.<br></p>', 'amistad', 'https://www.youtube.com/embed/ej9C5rQOaYU', '1997-12-10', '02:34:00', 3, 1, 9, '2018-08-24 04:38:15', '2018-08-24 04:38:15', NULL),
(19, 'Back to the Future', 24, '<p>Teenager Marty McFly is an aspiring musician dating girlfriend Jennifer Parker in Hill Valley, California. His father George is bullied by his supervisor, Biff Tannen, while his mother Lorraine is an overweight, depressed alcoholic. While dissatisfied with Marty\'\'s relationship with Jennifer, Lorraine recalls how she met George when her father hit him with a car.\\n\\nOn October 26, 1985, Marty meets his scientist friend, Dr. Emmett Brown, at a shopping mall parking lot. Doc unveils a time machine built from a modified DeLorean and powered by plutonium stolen from Libyan terrorists. Doc demonstrates the navigation system with the example date of November 5, 1955: the day he conceived the machine. A moment later, the Libyans arrive and kill him. Marty escapes in the DeLorean, but inadvertently activates the time machine, and arrives in 1955 without the required plutonium needed to return.\', \'back-to-the-future<br></p>', 'back-to-the-future', 'https://www.youtube.com/embed/qvsgGtivCgs', '1985-07-03', '01:56:00', 2, 1, 7, '2018-08-24 04:40:16', '2018-08-24 04:40:16', NULL),
(20, 'Back to the future II', 25, '<p>On October 26, 1985, Dr. Emmett Brown arrives in his flying time machine and persuades Marty McFly and his girlfriend, Jennifer Parker, to come back to the future with him to help their future children. Biff Tannen witnesses their departure. They arrive on October 21, 2015, where Doc electronically knocks out Jennifer and leaves her asleep in an alley, explaining that she should not have too much knowledge of future events. He has Marty pose as his own son to refuse an offer to participate in a robbery with Biffs grandson Griff, thus saving both of Martys children from prison.<br></p>', 'back-to-the-future-ii', 'https://www.youtube.com/embed/MdENmefJRpw', '1989-11-22', '01:48:00', 2, 1, 7, '2018-08-24 04:49:47', '2018-08-24 04:49:47', NULL),
(21, 'Back to the future III', 26, '<p>On November 12, 1955, Marty McFly discovers that his friend, Dr. Emmett Brown is now trapped in 1885. Marty and Docs 1955 self use the information in Docs 1885 letter to locate and repair the DeLorean. Marty spots a tombstone with Docs name, dated six days after the letter. Learning that Doc was killed by Biff Tannens great-grandfather, Buford \"Mad Dog\" Tannen, Marty travels back to 1885 to save Doc<br></p>', 'back-to-the-future-iii', 'https://www.youtube.com/embed/3C8c3EoEfw4', '1990-05-25', '01:59:00', 2, 1, 7, '2018-08-24 04:52:07', '2018-08-24 04:52:07', NULL),
(22, 'Pixels', 27, '<p>In 1982, 13-year-old friends Sam Brenner and Will Cooper visit the local video game arcade, where Brenner discovers he can master the games there with little prior knowledge, realizing that there were recognizable patterns. Participating in the video game championships, he loses in a match with obnoxious arcade player Eddie Plant in Donkey Kong. A videocassette with footage of the event is included in a time capsule that is launched into space.&nbsp; 33 years later, Brenner has become an installer of home-theater systems while Cooper is the President of the United States. In Guam, a U.S. military base is attacked by UFOs of Galaga that turn pieces of the base into small glowing cubes and one of the soldiers is abducted.<br></p>', 'pixels', 'https://www.youtube.com/embed/XAHprLW48no', '2015-07-24', '01:46:00', 2, 1, 20, '2018-08-24 04:54:17', '2018-08-24 04:54:17', NULL),
(23, '10000 BC', 28, '<p>In about 10,000 BC, a tribe of hunter-gatherers called the Yagahl live in a remote mountain range in the Urals and survive by killing woolly mammoths. The camp is led by a hunter who has proven his bravery by killing a mammoth, and taking the White Spear. The people also strongly venerate an elderly woman, called Old Mother.<br></p>', '10000-bc', 'https://www.youtube.com/embed/kxLKoa6pkxo', '2008-03-07', '01:49:00', 3, 1, 10, '2018-08-24 04:55:24', '2018-08-24 04:55:24', NULL),
(24, '2 gun', 29, '<p>Criminals Robert Trench (Denzel Washington) and Michael Stigman (Mark Wahlberg) are questioned by the United States Border Patrol after a meeting with drug lord Manny \"Papi\" Greco (Edward James Olmos) in Mexico. Unknown to Stigman, Trench is an undercover DEA agent and reports to his superior, Jessup (Robert John Burke), that he failed to acquire cocaine from Greco that they could use as evidence to convict him<br></p>', '2-gun', 'https://www.youtube.com/embed/AK6EbfdnTHg', '2013-08-02', '01:49:00', 3, 1, 4, '2018-08-24 04:56:19', '2018-08-24 04:56:19', NULL),
(25, '7 Days in Havana', 30, '<p>7 Days in Havana (Spanish: 7 días en La Habana) is a 2012 Spanish-language anthology film. Set during a week in the Cuban capital Havana, the film features one segment for each day, each segment directed by a different filmmaker. The directors are Julio Médem, Laurent Cantet, Juan Carlos Tabío, Benicio del Toro, Gaspar Noé, Pablo Trapero and Elia Suleiman. The screenplay was written by the Cuban novelist Leonardo Padura Fuentes.[2] The film is a co-production between companies in Spain, France and Cuba. It was shot on location in Havana.<br></p>', '7-days-in-havana', 'https://www.youtube.com/embed/qM7i9jkUP20', '2012-05-30', '02:09:00', 4, 3, 6, '2018-08-24 04:57:32', '2018-08-24 04:57:32', NULL),
(26, '9', 31, '<p>Prior to the events of the film, a Scientist is ordered by his dictator to create a machine in the apparent name of progress. The Scientist uses his own intellect to create the B.R.A.I.N., a thinking robot. However, the dictator quickly seizes it and integrates it into the Fabrication Machine, an armature that can construct an army of war machines to destroy the dictator\'\'s enemies. Lacking a soul, the Fabrication Machine becomes corrupted and decides to exterminate all life on Earth. The Fabrication Machine reprograms the other war machines to turn against humans by using toxic gas and chemical weapons. On the verge of destruction, the Scientist uses alchemy to create nine homunculus-like rag dolls known as \"Stitchpunks\" using portions of his own soul via a talisman and dies upon finishing the last one.<br></p>', '9', 'https://www.youtube.com/embed/_qApXdc1WPY', '2009-09-09', '01:19:00', 2, 1, 7, '2018-08-24 04:58:26', '2018-08-24 04:58:26', NULL),
(27, '28 days', 32, '<p>Gwen Cummings (Sandra Bullock) spends her nights in a drunken haze with her boyfriend, Jasper (Dominic West). She ruins her sister (Elizabeth Perkins) Lily\'\'s wedding by showing up late and disheveled, delivering a drunken, rambling speech, and knocking over the wedding cake. Intoxicated, Gwen steals a limousine from the reception, tries to locate a cake store, and winds up losing control of the car and crashing into a house. She is given a choice between 28 days in jail or in a rehab center, and she chooses rehab.<br></p>', '28-days', 'https://www.youtube.com/embed/y7RXmrlGe-k', '2000-04-14', '01:44:00', 3, 1, 4, '2018-08-24 04:59:23', '2018-08-24 04:59:23', NULL),
(28, '101 Dalmatians', 33, '<p>American video game designer Roger Dearly (Jeff Daniels) lives with his pet dalmatian, Pongo, in London. One day, Pongo sets his eyes on a beautiful female dalmatian named Perdita. After a frantic chase through the streets and into St. James\'\'s Park, Roger and Pongo discover that Perdita likes Pongo. Her owner, Anita Campbell-Green (Joely Richardson), falls in love with Roger when they meet. After they both end up falling into the lake as a result of their dogs, they return to Roger\'\'s home, and Anita accepts his proposal. They get married along with Perdita and Pongo.<br></p>', '101-dalmatians', 'https://www.youtube.com/embed/Rm-ujO_yESE', '1996-11-27', '01:43:00', 2, 1, 20, '2018-08-24 05:00:40', '2018-08-24 05:00:40', NULL),
(29, 'The 36th Chamber of Shaolin', 34, '<p>A young student named Liu Yude is drawn by his activist teacher into the local rebellion against the Manchu government. The government officials, headed by the brutal General Tien Ta, however, quickly discover and suppress the uprising, liquidating the school and killing the students\'\' friends and family members. Yude decides to seek vengeance and liberation for the people, and heads for the Shaolin temple to learn kung fu.<br></p>', 'the-36th-chamber-of-shaolin', 'https://www.youtube.com/embed/9e4HDsEJfro', '1978-01-01', '01:55:00', 2, 6, 18, '2018-08-24 05:02:03', '2018-08-24 05:02:03', NULL),
(30, 'A beautiful mind', 35, '<p>In 1947, John Nash (Crowe) arrives at Princeton University. He is co-recipient, with Martin Hansen (Lucas), of the prestigious Carnegie Scholarship for mathematics. At a reception, he meets a group of other promising math and science graduate students, Richard Sol (Goldberg), Ainsley (Jason Gray-Stanford), and Bender (Rapp). He also meets his roommate Charles Herman (Bettany), a literature student.<br></p>', 'a-beautiful-mind', 'https://www.youtube.com/embed/nIR3wj9Ssaw', '2001-12-13', '02:15:00', 4, 1, 6, '2018-08-24 05:03:26', '2018-08-24 05:03:26', NULL),
(31, 'A christmas Carol', 36, '<p>On Christmas Eve in 19th-century London, Ebenezer Scrooge, a miserly old money-lender at a London counting house, does not share the merriment of Christmas. He declines his cheerful nephew Freds invitation to a Christmas dinner party and dismisses two gentlemen collecting money for charity. His loyal employee Bob Cratchit offers Scrooge to have Christmas off, since there will be no business for Scrooge during the day. Scrooge agrees and leaves. In his house, Scrooge encounters the ghost of his deceased business partner Jacob Marley, who warns him to repent his wicked ways or he will condemned in the afterlife like he did, carrying heavy chains forged for his own greedy ways. He informs Scrooge that three time-travelling spirits will visit him for the next three nights.<br></p>', 'a-christmas-carol', 'https://www.youtube.com/embed/AEyKKt9EfeI', '2009-11-03', '01:06:50', 3, 1, 7, '2018-08-24 05:04:24', '2018-08-24 05:04:24', NULL),
(32, 'A league of their own', 37, '<p>In 1988, Dottie Hinson (Geena Davis) attends the opening of the new All-American Girls Professional Baseball League (AAGPBL) exhibit at the Baseball Hall of Fame. She sees many of her former teammates and friends, prompting a flashback to 1943.<br></p>', 'a-league-of-their-own', 'https://www.youtube.com/embed/8LhpYfjGZvw', '1992-07-01', '02:08:00', 3, 1, 9, '2018-08-24 05:05:56', '2018-08-24 05:05:56', NULL),
(33, 'Adaptation', 38, '<p>The self-loathing Charlie Kaufman is hired to write the screenplay for The Orchid Thief. Kaufman is going through depression and is not happy that his twin brother, Donald, has moved into his house and is taking advantage of him. Donald decides to become a screenwriter like Charlie and attends one of Robert McKee\'\'s famous seminars.\\n\\nCharlie, who rejects formulaic script writing, wants to ensure that his script is a faithful adaptation of The Orchid Thief. However, he comes to realize that the book does not have a usable narrative and that it is impossible to turn into a film, leaving him with a serious case of writer\'\'s block. Already well over his deadline with Columbia Pictures, and despairing at writing his script with self-reference, Charlie travels to New York to discuss the screenplay with Orlean directly. Unable to face her and with the surprising news that Donald\'\'s spec script for a clichéd psychological thriller, called The 3, is selling for six or seven figures, Kaufman resorts to attending McKee\'\'s seminar in New York and asks him for advice. Charlie ends up asking Donald to join him in New York to assist with the story structure.<br></p>', 'adaptation', 'https://www.youtube.com/embed/yZA2BlRH-6o', '2002-12-06', '01:54:00', 4, 1, 6, '2018-08-24 05:07:08', '2018-08-24 05:07:08', NULL),
(34, 'Adventures of Tin Tin: the secret of the unicorn', 39, '<p>In 1955, journalist Tintin and his dog Snowy are browsing in an outdoor market in Brussels, Belgium. Tintin buys a miniature model of a ship, the Unicorn, but is then accosted by Barnaby and Ivan Ivanovitch Sakharine, who both unsuccessfully try to buy the model from Tintin. Tintin takes the ship home, but it is accidentally broken in an incident with Snowy and a cat in his apartment, resulting in a parchment scroll slipping out of the model and rolling under a piece of furniture. Meanwhile, bumbling police detectives Thomson and Thompson are on the trail of a pickpocket, Aristides Silk.\\n\\nAfter visiting Maritime Library, Tintin returns to finds that the Unicorn has been stolen. He visits Sakharine in Marlinspike Hall and accuses him of the theft. When he sees a miniature model of the Unicorn, he notices that Sakharine\'\'s model is not broken, realizing that there are two Unicorn models. Once Tintin returns home, Snowy shows him the scroll. Barnaby visits them in a second attempt to give him the Unicorn, but is assassinated. After reading an old message written on it, Tintin puts the scroll in his wallet, but it is stolen by Silk the next morning.<br></p>', 'adventures-of-tin-tin-the-secret-of-the-unicorn', 'https://www.youtube.com/embed/7NWtW699XME', '2011-10-23', '01:47:00', 2, 1, 3, '2018-08-24 05:10:11', '2018-08-24 05:10:11', NULL),
(35, 'After earth', 40, '<p>In the 21st century, an environmental cataclysm forces the human race to abandon Earth and to settle on a new world, Nova Prime.\\n\\nOne thousand years later, the Ranger Corps, a peacekeeping organization commanded by General Cypher Raige (Will Smith), comes into conflict with the S\'\'krell, alien creatures who intend to conquer Nova Prime. Their secret weapons are the Ursas, large predatory creatures that hunt by \"sensing\" fear. The Rangers struggle against the Ursas until Cypher learns how to completely suppress his fear, a technique called \"ghosting\". After teaching this technique to the other Rangers, he leads the Ranger Corps to victory. Meanwhile, Cypher\'\'s son Kitai Raige (Jaden Smith) blames himself for the death of his sister Senshi (Zoë Kravitz) at the hands of an Ursa. Kitai trains to become a Ranger like Cypher, but his application is rejected due to his recklessness, and Cypher views him as a disappointment. Kitai\'\'s mother Faia (Sophie Okonedo) convinces Cypher to take Kitai on his last voyage before retirement.<br></p>', 'after-earth', 'https://www.youtube.com/embed/Exq0jyvpSg8', '2013-05-31', '01:40:00', 3, 1, 16, '2018-08-24 05:11:19', '2018-08-24 05:11:19', NULL),
(36, 'Air', 41, '<p>A chemical weapons catastrophe has wiped out most of mankind and rendered the air un-breathable. The US government hastily built a few makeshift underground bunkers in which a few scientists are kept in cryogenic sleep until the air is no longer toxic. Each of those bunkers is kept up by a couple of maintenance workers who are awoken for two hours every six months in order to perform routine tasks and inspections to keep the facility going.\\n\\nThe story begins with two workers of one of such facility, Cartwright (Hounsou) and Bauer (Reedus). They go about their normal list of tasks during one wake cycle. Cartwright has occasional visions of his wife Abby (Holt) and has conversations with her, to Bauer\'\'s annoyance.<br></p>', 'air', 'https://www.youtube.com/embed/HxCw1n67jW4', '1988-01-01', '01:25:00', 4, 1, 6, '2018-08-24 05:13:02', '2018-08-24 05:13:02', NULL),
(37, 'Aladdin', 42, '<p>A peddler sets up shop in the fictional sultanate of Agrabah, offering to tell the audience about the story of an oil lamp in his possession. Jafar, the Grand Vizier of the Sultan, and his parrot Iago, seek the lamp hidden within the Cave of Wonders but is told that only a “diamond in the rough” may enter. Jafar identifies a street urchin named Aladdin as worthy. Aladdin and his pet monkey Abu cross paths with Princess Jasmine, who has run away from the palace, unwilling to be married off to another snobbish suitor. Aladdin and Jasmine become friends and fall in love, but Jafar has Aladdin apprehended, tricking Jasmine into thinking that he was decapitated.<br></p>', 'aladdin', 'https://www.youtube.com/embed/gWLa6y7Z2TE', '1995-11-25', '01:30:00', 1, 1, 3, '2018-08-24 05:14:00', '2018-08-24 05:14:00', NULL),
(38, 'Alice in Wonderland', 43, '<p>Troubled by a strange recurring dream and mourning the loss of her beloved father, nineteen-year-old Alice Kingsleigh attends a garden party at Lord Ascot\'\'s estate. There she is confronted by an unwanted marriage proposal to Hamish Ascot and the stifling expectations of the society in which she lives. Unsure of how to proceed, she pursues a rabbit wearing a blue waistcoat and accidentally falls into a large rabbit hole under a tree. She emerges in a forest where she is greeted by the White Rabbit, the Dormouse, the Dodo, the Talking Flowers, and Tweedledee and Tweedledum. They argue over her identity as \"the right Alice\" who must slay the Red Queen\'\'s Jabberwocky and restore the White Queen to power, as foretold by Absolem the Caterpillar and his prophetic scroll. The group is then ambushed by the Bandersnatch and a group of playing-card soldiers led by the Knave of Hearts. Alice, Tweedledum and Tweedledee escape into the woods. The Knave steals the Caterpillar\'\'s scroll. The Dormouse leaves the others behind with one of the Bandersnatch\'\'s eyes in her possession. Tweedledum and Tweedledee are then captured by the Red Queen\'\'s Jubjub bird.<br></p>', 'alice-in-wonderland', 'https://www.youtube.com/embed/x3IWwnNe5mc', '2010-02-25', '01:48:00', 1, 1, 3, '2018-08-24 05:16:33', '2018-08-24 05:16:33', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fsks`
--

CREATE TABLE `fsks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fsks`
--

INSERT INTO `fsks` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Approved for 0', 'approved-0', 'fsk-0.jpg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(2, 'Approved for 6', 'approved-6', 'fsk-6.jpg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(3, 'Approved for 12', 'approved-12', 'fsk-12.jpg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(4, 'Approved for 16', 'approved-16', 'fsk-16.jpg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(5, 'Approved for 18', 'approved-18', 'fsk-18.jpg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genders`
--

INSERT INTO `genders` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Femenine', 'femenine', '2018-08-22 12:34:28', '2018-08-22 12:34:28'),
(2, 'Masculine', 'masculine', '2018-08-22 12:34:28', '2018-08-22 12:34:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `images`
--

INSERT INTO `images` (`id`, `image_name`, `slug`, `alt`, `about`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Films', 'film.png', 'films image', 'About films', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(2, 'Categories', 'category.png', 'Categories image', 'About categories', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(3, 'Languages', 'language.png', 'Languages image', 'About languages', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(4, 'Users', 'user.png', 'Users image', 'About users', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(5, 'Rafael', 'rafael.jpg', 'Rafael, el creador de esto', 'Rafael, el creador de esto', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(6, 'Bin ich schön?', '1534948629-bin-ich-schoen.jpg', 'Bin ich schön?', 'Bin ich schön?', '2018-08-22 12:37:09', '2018-08-22 12:37:09', NULL),
(7, 'Ratatouille', '1534948745-Ratatouille.jpg', 'Ratatouille', 'Ratatouille', '2018-08-22 12:39:05', '2018-08-22 12:39:05', NULL),
(8, 'Concussion', '1534949036-concussion.jpg', 'Concussion', 'Concussion', '2018-08-22 12:43:56', '2018-08-22 12:43:56', NULL),
(9, 'Learning to drive', '1534949404-learning-to-drive.jpg', 'Learning to drive', 'Learning to drive', '2018-08-22 12:50:04', '2018-08-22 12:50:04', NULL),
(10, 'Minions', '1534949575-minions.jpg', 'Minions', 'Minions', '2018-08-22 12:52:55', '2018-08-22 12:52:55', NULL),
(11, 'Mamma Mia!', '1534949708-mamma-mia.jpg', 'Mamma Mia!', 'Mamma Mia!', '2018-08-22 12:55:08', '2018-08-22 12:55:08', NULL),
(12, '12 Years a Slave', '1534949922-12-years-slave.jpg', '12 Years a Slave', '12 Years a Slave', '2018-08-22 12:58:42', '2018-08-22 12:58:42', NULL),
(13, 'Eat pray love', '1534950161-eat-pray-love.jpg', 'Eat pray love', 'Eat pray love', '2018-08-22 13:02:41', '2018-08-22 13:02:41', NULL),
(14, 'Mary Poppins', '1534950480-mary-poppins.jpg', 'Mary Poppins', 'Mary Poppins', '2018-08-22 13:08:00', '2018-08-22 13:08:00', NULL),
(15, 'Pirates of the Caribbean', '1534950636-pirates-of-the-caribbean.jpg', 'Pirates of the Caribbean', 'Pirates of the Caribbean', '2018-08-22 13:10:36', '2018-08-22 13:10:36', NULL),
(16, 'The Aristocats', '1534950880-the-aristocats.jpg', 'The Aristocats', 'The Aristocats', '2018-08-22 13:14:40', '2018-08-22 13:14:40', NULL),
(17, 'My Name Is Khan', '1535015107-my-name-is-khan.jpg', 'My Name Is Khan', 'My Name Is Khan', '2018-08-23 07:05:07', '2018-08-23 07:05:07', NULL),
(18, 'Hotel Rwanda', '1535015408-hotel-rwanda.jpg', 'Hotel Rwanda', 'Hotel Rwanda', '2018-08-23 07:10:08', '2018-08-23 07:10:08', NULL),
(19, 'Eine ganz heisse Nummer', '1535015528-eine-ganz-heisse-nummer.jpg', 'Eine ganz heisse Nummer', 'Eine ganz heisse Nummer', '2018-08-23 07:12:08', '2018-08-23 07:12:08', NULL),
(20, '7 vírgenes', '1535015615-7-virgenes.jpg', '7 vírgenes', '7 vírgenes', '2018-08-23 07:13:35', '2018-08-23 07:13:35', NULL),
(21, 'Hable con ella', '1535016001-hable-con-ella.jpg', 'Hable con ella', 'Hable con ella', '2018-08-23 07:20:01', '2018-08-23 07:20:01', NULL),
(22, 'Mujeres al borde de un ataque de nervios', '1535016097-mujeres-al-borde-de-un-ataque-de-nervios.jpg', 'Mujeres al borde de un ataque de nervios', 'Mujeres al borde de un ataque de nervios', '2018-08-23 07:21:37', '2018-08-23 07:21:37', NULL),
(23, 'Amistad', '1535092695-amistad.jpg', 'Amistad', 'Amistad', '2018-08-24 04:38:15', '2018-08-24 04:38:15', NULL),
(24, 'Back to the Future', '1535092816-back-to-the-future.jpg', 'Back to the Future', 'Back to the Future', '2018-08-24 04:40:16', '2018-08-24 04:40:16', NULL),
(25, 'Back to the future II', '1535093387-back-to-the-future-II.jpg', 'Back to the future II', 'Back to the future II', '2018-08-24 04:49:47', '2018-08-24 04:49:47', NULL),
(26, 'Back to the future III', '1535093527-back-to-the-future-III.jpg', 'Back to the future III', 'Back to the future III', '2018-08-24 04:52:07', '2018-08-24 04:52:07', NULL),
(27, 'Pixels', '1535093657-pixels.jpg', 'Pixels', 'Pixels', '2018-08-24 04:54:17', '2018-08-24 04:54:17', NULL),
(28, '10000 BC', '1535093724-10000-bc.jpg', '10000 BC', '10000 BC', '2018-08-24 04:55:24', '2018-08-24 04:55:24', NULL),
(29, '2 gun', '1535093779-2-guns.jpg', '2 gun', '2 gun', '2018-08-24 04:56:19', '2018-08-24 04:56:19', NULL),
(30, '7 Days in Havana', '1535093852-7-dias-en-la-habana.jpg', '7 Days in Havana', '7 Days in Havana', '2018-08-24 04:57:32', '2018-08-24 04:57:32', NULL),
(31, '9', '1535093906-9.jpg', '9', '9', '2018-08-24 04:58:26', '2018-08-24 04:58:26', NULL),
(32, '28 days', '1535093963-28-days.jpg', '28 days', '28 days', '2018-08-24 04:59:23', '2018-08-24 04:59:23', NULL),
(33, '101 Dalmatians', '1535094040-101-dalmatians.jpg', '101 Dalmatians', '101 Dalmatians', '2018-08-24 05:00:40', '2018-08-24 05:00:40', NULL),
(34, 'The 36th Chamber of Shaolin', '1535094123-36-chambers-of-shaolin.jpg', 'The 36th Chamber of Shaolin', 'The 36th Chamber of Shaolin', '2018-08-24 05:02:03', '2018-08-24 05:02:03', NULL),
(35, 'A beautiful mind', '1535094206-a-beautiful-mind.jpg', 'A beautiful mind', 'A beautiful mind', '2018-08-24 05:03:26', '2018-08-24 05:03:26', NULL),
(36, 'A christmas Carol', '1535094264-a-christmas-carol.jpg', 'A christmas Carol', 'A christmas Carol', '2018-08-24 05:04:24', '2018-08-24 05:04:24', NULL),
(37, 'A league of their own', '1535094356-a-league-of-their-own.jpg', 'A league of their own', 'A league of their own', '2018-08-24 05:05:56', '2018-08-24 05:05:56', NULL),
(38, 'Adaptation', '1535094428-adaptation.jpg', 'Adaptation', 'Adaptation', '2018-08-24 05:07:08', '2018-08-24 05:07:08', NULL),
(39, 'Adventures of Tin Tin: the secret of the unicorn', '1535094611-the-adventures-of-tintin-secret-of-the-unicorn.jpg', 'Adventures of Tin Tin: the secret of the unicorn', 'Adventures of Tin Tin: the secret of the unicorn', '2018-08-24 05:10:11', '2018-08-24 05:10:11', NULL),
(40, 'After earth', '1535094679-after-earth.jpg', 'After earth', 'After earth', '2018-08-24 05:11:19', '2018-08-24 05:11:19', NULL),
(41, 'Air', '1535094782-air.jpg', 'Air', 'Air', '2018-08-24 05:13:02', '2018-08-24 05:13:02', NULL),
(42, 'Aladdin', '1535094840-aladdin.jpg', 'Aladdin', 'Aladdin', '2018-08-24 05:14:00', '2018-08-24 05:14:00', NULL),
(43, 'Alice in Wonderland', '1535094993-alice-in-wonderland.jpg', 'Alice in Wonderland', 'Alice in Wonderland', '2018-08-24 05:16:33', '2018-08-24 05:16:33', NULL),
(44, 'Meryl Streep', '1535103392-meryl-streep.jpg', 'Meryl Streep', 'Meryl Streep', '2018-08-24 07:36:32', '2018-08-24 07:36:32', NULL),
(45, 'Jack Nicholson', '1535103435-jack-nicholson.jpg', 'Jack Nicholson', 'Jack Nicholson', '2018-08-24 07:37:15', '2018-08-24 07:37:15', NULL),
(46, 'Morgan Freeman', '1535103464-morgan-freeman.jpg', 'Morgan Freeman', 'Morgan Freeman', '2018-08-24 07:37:44', '2018-08-24 07:37:44', NULL),
(47, 'Will Smith', '1535103489-will-smith.jpg', 'Will Smith', 'Will Smith', '2018-08-24 07:38:09', '2018-08-24 07:38:09', NULL),
(48, 'Martin Lawrence', '1535103517-martin-lawrence.jpg', 'Martin Lawrence', 'Martin Lawrence', '2018-08-24 07:38:37', '2018-08-24 07:38:37', NULL),
(49, 'Steve Carell', '1535103544-steve-carell.jpg', 'Steve Carell', 'Steve Carell', '2018-08-24 07:39:04', '2018-08-24 07:39:04', NULL),
(50, 'Brad Pitt', '1535103566-brad-pitt.jpg', 'Brad Pitt', 'Brad Pitt', '2018-08-24 07:39:26', '2018-08-24 07:39:26', NULL),
(51, 'Sandra Bullock', '1535103588-sandra-bullock.jpg', 'Sandra Bullock', 'Sandra Bullock', '2018-08-24 07:39:48', '2018-08-24 07:39:48', NULL),
(52, 'Hugh Grant', '1535103613-hugh-grant.jpg', 'Hugh Grant', 'Hugh Grant', '2018-08-24 07:40:13', '2018-08-24 07:40:13', NULL),
(53, 'Renée Zellwege', '1535103635-renee-zellweger.jpg', 'Renée Zellwege', 'Renée Zellwege', '2018-08-24 07:40:35', '2018-08-24 07:40:35', NULL),
(54, 'Franka Potente', '1535103656-franka-potente.jpg', 'Franka Potente', 'Franka Potente', '2018-08-24 07:40:56', '2018-08-24 07:40:56', NULL),
(55, 'Ben Kingsley', '1535103679-ben-kingsley.jpg', 'Ben Kingsley', 'Ben Kingsley', '2018-08-24 07:41:19', '2018-08-24 07:41:19', NULL),
(56, 'Patricia Clarkson\'', '1535103696-patricia-clarkson.jpg', 'Patricia Clarkson\'', 'Patricia Clarkson\'', '2018-08-24 07:41:36', '2018-08-24 07:41:36', NULL),
(57, 'Pierce Brosnan', '1535103720-pierce-brosnan.jpg', 'Pierce Brosnan', 'Pierce Brosnan', '2018-08-24 07:42:01', '2018-08-24 07:42:01', NULL),
(58, 'Amanda Seyfried', '1535103739-amanda-seyfried.jpg', 'Amanda Seyfried', 'Amanda Seyfried', '2018-08-24 07:42:19', '2018-08-24 07:42:19', NULL),
(59, 'Colin Firth', '1535103764-colin-firth.jpg', 'Colin Firth', 'Colin Firth', '2018-08-24 07:42:44', '2018-08-24 07:42:44', NULL),
(60, 'Christine Baransk', '1535103786-christine-baranski.jpg', 'Christine Baransk', 'Christine Baransk', '2018-08-24 07:43:06', '2018-08-24 07:43:06', NULL),
(61, 'Dominic Cooper', '1535103808-dominic-cooper.jpg', 'Dominic Cooper', 'Dominic Cooper', '2018-08-24 07:43:28', '2018-08-24 07:43:28', NULL),
(62, 'Julie Walters', '1535103836-julie-walters.jpg', 'Julie Walters', 'Julie Walters', '2018-08-24 07:43:56', '2018-08-24 07:43:56', NULL),
(63, 'Stellan Skarsgård', '1535103857-stellan-skarsgard.jpg', 'Stellan Skarsgård', 'Stellan Skarsgård', '2018-08-24 07:44:17', '2018-08-24 07:44:17', NULL),
(64, 'Chiwetel Ejiofor', '1535103879-chiwetel-ejiofor.JPG', 'Chiwetel Ejiofor', 'Chiwetel Ejiofor', '2018-08-24 07:44:39', '2018-08-24 07:44:39', NULL),
(65, 'Denzel Washington\'', '1535103899-denzel-washington.jpg', 'Denzel Washington\'', 'Denzel Washington\'', '2018-08-24 07:44:59', '2018-08-24 07:44:59', NULL),
(66, 'Robin Williams', '1535103921-robin-williams.jpg', 'Robin Williams', 'Robin Williams', '2018-08-24 07:45:21', '2018-08-24 07:45:21', NULL),
(67, 'Julia Roberts', '1535103949-julia-roberts.JPG', 'Julia Roberts', 'Julia Roberts', '2018-08-24 07:45:49', '2018-08-24 07:45:49', NULL),
(68, 'James Franco', '1535103970-james-franco.jpg', 'James Franco', 'James Franco', '2018-08-24 07:46:10', '2018-08-24 07:46:10', NULL),
(69, 'Tina Fey', '1535103988-tina-fey.jpg', 'Tina Fey', 'Tina Fey', '2018-08-24 07:46:28', '2018-08-24 07:46:28', NULL),
(70, 'Javier Bardem', '1535104009-javier-bardem.jpg', 'Javier Bardem', 'Javier Bardem', '2018-08-24 07:46:49', '2018-08-24 07:46:49', NULL),
(71, 'Richard Jenkins', '1535104034-richard-jenkins.jpg', 'Richard Jenkins', 'Richard Jenkins', '2018-08-24 07:47:14', '2018-08-24 07:47:14', NULL),
(72, 'Robert De Niro', '1535104055-robert-de-niro.JPG', 'Robert De Niro', 'Robert De Niro', '2018-08-24 07:47:35', '2018-08-24 07:47:35', NULL),
(73, 'Julie Andrews', '1535104078-julie-andrews.jpg', 'Julie Andrews', 'Julie Andrews', '2018-08-24 07:47:58', '2018-08-24 07:47:58', NULL),
(74, 'Johnny Depp', '1535104108-johnny-depp.jpg', 'Johnny Depp', 'Johnny Depp', '2018-08-24 07:48:28', '2018-08-24 07:48:28', NULL),
(75, 'Shah Rukh Khan', '1535104132-shah-rukh-khan.jpg', 'Shah Rukh Khan', 'Shah Rukh Khan', '2018-08-24 07:48:52', '2018-08-24 07:48:52', NULL),
(76, 'Dick Van Dyke', '1535104154-dick-van-dyke.jpg', 'Dick Van Dyke', 'Dick Van Dyke', '2018-08-24 07:49:14', '2018-08-24 07:49:14', NULL),
(77, 'Kajol Devgan', '1535104178-kajol-devgan.jpg', 'Kajol Devgan', 'Kajol Devgan', '2018-08-24 07:49:38', '2018-08-24 07:49:38', NULL),
(78, 'Don Cheadle', '1535104204-don-cheadle.jpg', 'Don Cheadle', 'Don Cheadle', '2018-08-24 07:50:04', '2018-08-24 07:50:04', NULL),
(79, 'Margot Robbie', '1535104227-margot-robbie.jpg', 'Margot Robbie', 'Margot Robbie', '2018-08-24 07:50:27', '2018-08-24 07:50:27', NULL),
(80, 'Mylène Saint-Sauveur', '1535104292-mylene-saint-sauveur.jpg', 'Mylène Saint-Sauveur', 'Mylène Saint-Sauveur', '2018-08-24 07:51:32', '2018-08-24 07:51:32', NULL),
(81, 'Tom cruise', '1535104314-tom-cruise.jpg', 'Tom cruise', 'Tom cruise', '2018-08-24 07:51:54', '2018-08-24 07:51:54', NULL),
(82, 'César Evor', '1535104334-cesar-evora.jpg', 'César Evor', 'César Evor', '2018-08-24 07:52:14', '2018-08-24 07:52:14', NULL),
(83, 'Gene Wilder', '1535104352-gene-wilder.jpg', 'Gene Wilder', 'Gene Wilder', '2018-08-24 07:52:32', '2018-08-24 07:52:32', NULL),
(84, 'Anthony Quinn', '1535104391-anthony-quinn.JPG', 'Anthony Quinn', 'Anthony Quinn', '2018-08-24 07:53:11', '2018-08-24 07:53:11', NULL),
(85, 'Kevin James', '1535104416-kevin-james.jpg', 'Kevin James', 'Kevin James', '2018-08-24 07:53:36', '2018-08-24 07:53:36', NULL),
(86, 'Wesley Snipes', '1535104435-wesley-snipes.jpg', 'Wesley Snipes', 'Wesley Snipes', '2018-08-24 07:53:55', '2018-08-24 07:53:55', NULL),
(87, 'Daysi Granados', '1535104455-daysi-granados.jpg', 'Daysi Granados', 'Daysi Granados', '2018-08-24 07:54:15', '2018-08-24 07:54:15', NULL),
(88, 'Russell Crowe', '1535104476-russell-crowe.jpg', 'Russell Crowe', 'Russell Crowe', '2018-08-24 07:54:36', '2018-08-24 07:54:36', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `languages`
--

INSERT INTO `languages` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', 'english', 'english.svg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(2, 'German', 'german', 'german.svg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(3, 'Spanish', 'spanish', 'spanish.svg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(4, 'French', 'french', 'french.svg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(5, 'Italian', 'italian', 'italian.svg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL),
(6, 'Chinese', 'chinese', 'chinese.svg', '2018-08-22 12:34:28', '2018-08-22 12:34:28', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(155, '2014_10_12_000000_create_users_table', 1),
(156, '2014_10_12_100000_create_password_resets_table', 1),
(157, '2018_03_12_190728_create_films_table', 1),
(158, '2018_03_12_190955_create_categories_table', 1),
(159, '2018_03_12_191429_create_fsks_table', 1),
(160, '2018_03_12_191630_create_languages_table', 1),
(161, '2018_03_12_191701_create_actors_table', 1),
(162, '2018_03_12_230253_create_images_table', 1),
(163, '2018_03_15_052331_create_actor_film_table', 1),
(164, '2018_08_02_135255_create_roles_table', 1),
(165, '2018_08_21_054736_create_genders_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Guest', 'guest', '2018-08-22 12:34:28', '2018-08-22 12:34:28'),
(2, 'Invited', 'invited', '2018-08-22 12:34:28', '2018-08-22 12:34:28'),
(3, 'Admin', 'admin', '2018-08-22 12:34:28', '2018-08-22 12:34:28'),
(4, 'Super admin', 'super_admin', '2018-08-22 12:34:28', '2018-08-22 12:34:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '0',
  `image_id` int(11) NOT NULL DEFAULT '4',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `role_id`, `image_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, 5, 'Rafael Muñoz', 'rafaelmunoznl@yahoo.com', '$2y$10$A7sEELJUMLnbopcKBnXRQenPPPtoiqoxmiuW9f2TUGaZW4FP8BH0.', NULL, '2018-08-22 12:34:28', '2018-08-22 12:34:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `actors_slug_unique` (`slug`),
  ADD KEY `actors_image_id_index` (`image_id`),
  ADD KEY `actors_gender_id_index` (`gender_id`);

--
-- Indices de la tabla `actor_film`
--
ALTER TABLE `actor_film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_film_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_film_film_id_foreign` (`film_id`);

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_image_id_index` (`image_id`);

--
-- Indices de la tabla `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `films_slug_unique` (`slug`),
  ADD KEY `films_image_id_index` (`image_id`);

--
-- Indices de la tabla `fsks`
--
ALTER TABLE `fsks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fsks_name_unique` (`name`),
  ADD UNIQUE KEY `fsks_slug_unique` (`slug`),
  ADD UNIQUE KEY `fsks_image_unique` (`image`);

--
-- Indices de la tabla `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `genders_name_unique` (`name`),
  ADD UNIQUE KEY `genders_slug_unique` (`slug`);

--
-- Indices de la tabla `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `images_slug_unique` (`slug`);

--
-- Indices de la tabla `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `languages_name_unique` (`name`),
  ADD UNIQUE KEY `languages_slug_unique` (`slug`),
  ADD UNIQUE KEY `languages_image_unique` (`image`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actors`
--
ALTER TABLE `actors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `actor_film`
--
ALTER TABLE `actor_film`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `fsks`
--
ALTER TABLE `fsks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actor_film`
--
ALTER TABLE `actor_film`
  ADD CONSTRAINT `actor_film_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`),
  ADD CONSTRAINT `actor_film_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
