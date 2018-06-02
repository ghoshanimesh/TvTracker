-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 03:24 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tv_show_time`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `episode_id` int(11) NOT NULL,
  `comment_description` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `approved_at` datetime NOT NULL,
  `approved_by` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `episode_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `episode_no` int(11) NOT NULL,
  `runtime` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `airdate` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `poolid`
--

CREATE TABLE `poolid` (
  `table_id` int(11) NOT NULL,
  `api_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `poolid`
--

INSERT INTO `poolid` (`table_id`, `api_id`) VALUES
(1, 139),
(2, 82),
(3, 22),
(4, 172),
(5, 525),
(6, 20055),
(7, 800),
(8, 8817),
(9, 6489),
(10, 18754),
(11, 3289),
(12, 12403),
(13, 4398),
(14, 510),
(15, 5421),
(16, 9546),
(17, 6784),
(18, 28837),
(19, 1989),
(20, 7759),
(21, 33320),
(22, 4751),
(23, 24371),
(24, 202),
(25, 23737),
(26, 1418),
(27, 1775),
(28, 2601),
(29, 7093),
(30, 2039),
(31, 2382),
(32, 1072),
(33, 6761),
(34, 1632),
(35, 3839),
(36, 1853),
(37, 1863),
(38, 2327),
(39, 1638),
(40, 1177),
(74, 3394),
(75, 1500),
(76, 2773),
(77, 4298),
(78, 693),
(79, 5798),
(80, 2061),
(81, 6),
(82, 398),
(83, 731),
(84, 1852),
(85, 3432),
(86, 224),
(87, 3662),
(88, 19244),
(89, 3887),
(90, 3062),
(91, 2964),
(92, 2082),
(93, 1769),
(94, 12557),
(95, 1377),
(96, 294),
(97, 14842),
(98, 2614),
(99, 2380),
(100, 2759),
(101, 3327),
(102, 209),
(103, 3285),
(104, 73),
(105, 11825),
(106, 678),
(107, 453),
(108, 248),
(109, 850),
(110, 15266),
(111, 1442),
(112, 623),
(113, 4340),
(114, 762),
(115, 358),
(116, 18198),
(117, 7139),
(118, 472),
(119, 338),
(120, 1705),
(121, 1366),
(122, 3892),
(123, 832),
(124, 2796),
(125, 676),
(126, 3182),
(127, 3142),
(128, 4250),
(129, 1488),
(130, 348),
(131, 25),
(132, 238),
(133, 2381),
(134, 3309),
(135, 92),
(136, 168),
(137, 22711),
(138, 6032),
(139, 3527),
(140, 4466),
(141, 5275),
(142, 9393),
(143, 20412),
(144, 4208),
(145, 14995),
(146, 3943),
(147, 953),
(148, 3593),
(149, 4708),
(150, 913),
(151, 524),
(152, 16671),
(153, 33),
(154, 1250),
(155, 1920),
(156, 4164),
(157, 222),
(158, 6775),
(159, 967),
(160, 20055),
(161, 30828),
(162, 162),
(163, 25242),
(164, 2061),
(165, 1335),
(166, 3155),
(167, 3968),
(168, 200),
(169, 2740),
(170, 7513),
(171, 315),
(172, 114),
(173, 169),
(174, 5513),
(175, 28425),
(176, 3601),
(177, 577),
(178, 11401),
(179, 114),
(180, 19231),
(181, 288),
(182, 20487),
(183, 1151),
(184, 354);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `season_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `approved_at` datetime NOT NULL,
  `approved_by` int(11) NOT NULL,
  `deleted` int(11) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `season_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `season_no` int(11) NOT NULL,
  `total_epi` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `show`
--

CREATE TABLE `show` (
  `show_id` int(11) NOT NULL,
  `global_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_season` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `start_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `permalink` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `network` varchar(255) NOT NULL,
  `rating` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(2) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(2) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email_id` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `created_at` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `updated_by` int(11) NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL,
  `deleted_by` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email_id`, `password`, `role`, `user_image`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted`, `deleted_at`, `deleted_by`) VALUES
(1, 'anim', 'anim123', 'user', '', '2018-05-28 04:11:28', 1, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0),
(2, 'vatsal', 'vatsal123', 'user', '', '2018-05-29 03:21:23', 1, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_epi_watch`
--

CREATE TABLE `user_epi_watch` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `episode_id` int(11) NOT NULL,
  `watched_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_show_follow`
--

CREATE TABLE `user_show_follow` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `show_id` int(11) NOT NULL,
  `followed_at` datetime NOT NULL,
  `deleted` int(2) NOT NULL,
  `deleted_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_show_follow`
--

INSERT INTO `user_show_follow` (`id`, `user_id`, `show_id`, `followed_at`, `deleted`, `deleted_at`) VALUES
(1, 1, 4398, '2018-05-29 08:59:27', 0, '0000-00-00 00:00:00'),
(2, 1, 1632, '2018-05-29 09:00:42', 0, '0000-00-00 00:00:00'),
(3, 1, 1989, '2018-05-29 09:02:20', 0, '0000-00-00 00:00:00'),
(4, 1, 73, '2018-05-29 09:04:17', 1, '2018-05-29 00:00:00'),
(5, 1, 11825, '2018-05-29 09:05:19', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`episode_id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poolid`
--
ALTER TABLE `poolid`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`season_id`);

--
-- Indexes for table `show`
--
ALTER TABLE `show`
  ADD PRIMARY KEY (`show_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_epi_watch`
--
ALTER TABLE `user_epi_watch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_show_follow`
--
ALTER TABLE `user_show_follow`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `episode_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poolid`
--
ALTER TABLE `poolid`
  MODIFY `table_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `season_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `show`
--
ALTER TABLE `show`
  MODIFY `show_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_epi_watch`
--
ALTER TABLE `user_epi_watch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_show_follow`
--
ALTER TABLE `user_show_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
