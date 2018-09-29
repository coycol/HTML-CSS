-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 29, 2018 at 10:46 AM
-- Server version: 5.7.21
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sastanak`
--
CREATE DATABASE IF NOT EXISTS `sastanak` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sastanak`;

-- --------------------------------------------------------

--
-- Table structure for table `boxes`
--

DROP TABLE IF EXISTS `boxes`;
CREATE TABLE `boxes` (
  `box_id` int(3) NOT NULL,
  `box_title` varchar(255) NOT NULL,
  `box_content` varchar(500) NOT NULL,
  `box_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `boxes`
--

INSERT INTO `boxes` (`box_id`, `box_title`, `box_content`, `box_image`) VALUES
(1, 'EXPLORERS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. ', 'krug1.png'),
(2, 'CREATORS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'krug2.png'),
(3, 'CONNECTORS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'krug3.png'),
(4, 'CATALYSTS', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.', 'krug4.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'PR AND COMMUNICATIONS'),
(2, 'EVENT MANAGMENT'),
(3, 'CLIENTS'),
(4, 'ABOUT'),
(5, 'OFFICES');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `c_id` int(3) NOT NULL,
  `c_title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `c_cat` int(3) NOT NULL DEFAULT '3',
  `c_image` text CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`c_id`, `c_title`, `c_cat`, `c_image`) VALUES
(1, 'MCDONALD\'S: THESTRAW', 3, 'client1.png'),
(2, 'MCDONALD\'S: FORK', 3, 'client2.png'),
(3, 'GUINNESS: MADE OF MORE', 3, 'client3.png'),
(4, 'MAGNUM: MAGNUM X MOSCHINO', 3, 'client4.png'),
(5, 'GULDEN\'S:#DEFENDTHEDOG', 3, 'client5.png'),
(6, 'TOBLERONE: THE TOBLERONE TAKE', 3, 'client6.png');

-- --------------------------------------------------------

--
-- Table structure for table `goallin`
--

DROP TABLE IF EXISTS `goallin`;
CREATE TABLE `goallin` (
  `allin_id` int(3) NOT NULL,
  `a_title` varchar(255) NOT NULL,
  `a_content` varchar(255) NOT NULL,
  `a_image` text NOT NULL,
  `a_content1` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goallin`
--

INSERT INTO `goallin` (`allin_id`, `a_title`, `a_content`, `a_image`, `a_content1`) VALUES
(1, 'WE ARE THE RELEVANCE AGENCY', 'We’re relevance obsessed. More importantly, we’re relevance equipped.', 'go-all-in.gif', 'We are an integrated agency with PR, Digital and Content at our core. Our ambition is to create change through brave, relevant work worthy of awe, action and awards. By embracing new technologies and pushing creative boundaries, we help our clients adapt and win in a constantly evolving world.<br>We are committed to delivering the deepest insights, boldest ideas and broadest engagement to the world’s leading brands through seamless integrated communications.<br>We’re the nice guys who kick ass.');

-- --------------------------------------------------------

--
-- Table structure for table `hero`
--

DROP TABLE IF EXISTS `hero`;
CREATE TABLE `hero` (
  `hero_id` int(3) NOT NULL,
  `hero_title` varchar(255) NOT NULL,
  `hero_content` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hero`
--

INSERT INTO `hero` (`hero_id`, `hero_title`, `hero_content`) VALUES
(1, 'Amplitudo<br>affiliate of golin', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `home_about1`
--

DROP TABLE IF EXISTS `home_about1`;
CREATE TABLE `home_about1` (
  `h_id` int(3) NOT NULL,
  `h_title` varchar(255) NOT NULL,
  `h_image` text NOT NULL,
  `h_content` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_about1`
--

INSERT INTO `home_about1` (`h_id`, `h_title`, `h_image`, `h_content`) VALUES
(1, 'Pr and communications', 'fotka2.png', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.');

-- --------------------------------------------------------

--
-- Table structure for table `home_about2`
--

DROP TABLE IF EXISTS `home_about2`;
CREATE TABLE `home_about2` (
  `h1_id` int(3) NOT NULL,
  `h1_title` varchar(255) NOT NULL,
  `h1_image` text NOT NULL,
  `h1_content` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `home_about2`
--

INSERT INTO `home_about2` (`h1_id`, `h1_title`, `h1_image`, `h1_content`) VALUES
(1, 'Event Managment', 'fotka3.png', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.\r\n\r\nLorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.\r\n\r\nDuis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.');

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

DROP TABLE IF EXISTS `offices`;
CREATE TABLE `offices` (
  `off_id` int(3) NOT NULL,
  `off_title` varchar(255) NOT NULL,
  `off_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`off_id`, `off_title`, `off_image`) VALUES
(1, 'PODGORICA', 'podgorica.png'),
(2, 'BELGRADE', 'Belgrade.png'),
(3, 'BRUSSELS', 'brussels.jpg'),
(4, 'BUCHAREST', 'bucharest.jpg'),
(5, 'DUBAI', 'dubai.jpg'),
(6, 'HAMBURG', 'Hamburg.jpg'),
(7, 'ISTANBUL', 'Istanbul.jpg'),
(8, 'LONDON', 'london.jpg'),
(9, 'MADRID', 'madrid.jpg'),
(10, 'MILANO', 'milan.jpg'),
(11, 'MOSCOW', 'moscow.jpg'),
(12, 'PARIS', 'paris.jpg'),
(13, 'RIGA', 'riga.jpg'),
(14, 'STOCKHOLM', 'stockholm.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sastanak_info`
--

DROP TABLE IF EXISTS `sastanak_info`;
CREATE TABLE `sastanak_info` (
  `id` int(4) NOT NULL,
  `first_last_name` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(13) NOT NULL,
  `party_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sastanak_info`
--

INSERT INTO `sastanak_info` (`id`, `first_last_name`, `company`, `email`, `phone_number`, `party_time`) VALUES
(1, 'Sokol Mehmeti', '', 'SOKOL@ASD.COM', '131341', '2018-06-12'),
(2, 'Sokol Mehmeti', 'erfg', 'SOKOL@ASD.COM', '12414', '2018-06-12'),
(4, 'John Smith', 'CAD', 'john_smith@cad.com', '+1234142345', '2018-09-02'),
(5, 'John wick', 'Mega', 'john@mega.com', '13141241', '2018-08-08'),
(6, 'John Smith', 'CAD', 'john_smith@cad.com', '+1234142345', '2018-09-08'),
(7, 'John Smith', 'CAD', 'coycol@live.com', '+1234142345', '2018-09-08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `username` varchar(18) NOT NULL,
  `password` varchar(200) NOT NULL,
  `first_name` varchar(20) NOT NULL DEFAULT 'user',
  `last_name` varchar(20) NOT NULL DEFAULT 'user',
  `user_role` varchar(20) NOT NULL DEFAULT 'moderator',
  `user_email` varchar(50) NOT NULL DEFAULT 'add'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_role`, `user_email`) VALUES
(3, 'mehmeti', '$2y$10$isthisokorineedtoput1urg/9rCCUPi75qWoMsYVQLH1QR16a4ge', 'user', 'user', 'moderator', 'add'),
(4, 'sokol', '$2y$10$isthisokorineedtoput1uscsYFw7odIt9lyWblrJsAJAUe2rkkXa', 'user', 'user', 'moderator', 'add');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boxes`
--
ALTER TABLE `boxes`
  ADD PRIMARY KEY (`box_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `goallin`
--
ALTER TABLE `goallin`
  ADD PRIMARY KEY (`allin_id`);

--
-- Indexes for table `hero`
--
ALTER TABLE `hero`
  ADD PRIMARY KEY (`hero_id`);

--
-- Indexes for table `home_about1`
--
ALTER TABLE `home_about1`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `home_about2`
--
ALTER TABLE `home_about2`
  ADD PRIMARY KEY (`h1_id`);

--
-- Indexes for table `offices`
--
ALTER TABLE `offices`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `sastanak_info`
--
ALTER TABLE `sastanak_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boxes`
--
ALTER TABLE `boxes`
  MODIFY `box_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `c_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `goallin`
--
ALTER TABLE `goallin`
  MODIFY `allin_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hero`
--
ALTER TABLE `hero`
  MODIFY `hero_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_about1`
--
ALTER TABLE `home_about1`
  MODIFY `h_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_about2`
--
ALTER TABLE `home_about2`
  MODIFY `h1_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `offices`
--
ALTER TABLE `offices`
  MODIFY `off_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sastanak_info`
--
ALTER TABLE `sastanak_info`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
