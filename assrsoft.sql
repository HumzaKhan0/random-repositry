-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2020 at 01:38 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assrsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE `hire` (
  `user_id` int(11) NOT NULL,
  `karigar_id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone_number` bigint(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `problems` varchar(100) NOT NULL,
  `services` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`user_id`, `karigar_id`, `fname`, `lname`, `phone_number`, `email`, `address`, `problems`, `services`) VALUES
(42, 33, 'talha', 'khan', 3092773597, 'tk@gmail.com', 'qwert hjk street near aqjfdj karachi', 'leaking pipes', 'replacement of pipelines');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `email` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user-type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `title` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL,
  `kariger_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `title`, `message`, `kariger_id`, `user_id`) VALUES
(1, 'Post approved', 'Congratulations your post with id 13 has been approved by admin', 7, 0),
(2, 'Post Approved', 'congratulations your post yaseen khan\n	2147483647\n	yk@gmail.com\n	7 months\n	carpainter has been successfuly approved by admin', 44, 0),
(4, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 7, 0),
(5, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 7, 0),
(6, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 7, 0),
(7, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 7, 0),
(8, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 44, 0),
(9, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 44, 0),
(10, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 44, 0),
(11, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 44, 0),
(12, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(13, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(14, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(15, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(16, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(17, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(18, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(19, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(20, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0),
(21, 'Poor Rating', 'your rating is starting to get low pay attention on your rating', 43, 0);

-- --------------------------------------------------------

--
-- Table structure for table `post_approval`
--

CREATE TABLE `post_approval` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phone_number` int(16) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `expirence` varchar(50) NOT NULL,
  `skills` varchar(150) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `qutation`
--

CREATE TABLE `qutation` (
  `company_name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `qutation_number` varchar(30) NOT NULL,
  `qutation_to` varchar(50) NOT NULL,
  `srt_date` date NOT NULL,
  `end_date` date NOT NULL,
  `technology` varchar(50) NOT NULL,
  `feature` varchar(50) NOT NULL,
  `requirement` varchar(50) NOT NULL,
  `payment_method` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qutation`
--

INSERT INTO `qutation` (`company_name`, `id`, `name`, `qutation_number`, `qutation_to`, `srt_date`, `end_date`, `technology`, `feature`, `requirement`, `payment_method`) VALUES
('', 1, 'hamza', 'h54maa321z', 'arisha071026@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 2, 'hamza', 'a4a35h12zm', 'hk071026@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 3, 'hamza', '23hmaa154z', 'hamzakhan.karachi@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 4, 'hamza', 'mah52a1z34', 'irzem.aptech@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 5, 'hamza', '3ama1zh245', 'hk071026@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 6, 'hamza', 'aa42hm13z5', 'shaheer.aptech@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 7, 'hamza', '2a1ah534mz', '', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 8, 'hamza', '453mz2aa1h', 'hammad@aptech.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 10, 'hamza', 'z2h5a1m3a4', 'hammad@aptech.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 12, 'hamza', '135h4a2maz', 'umair@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 14, 'hamza', 'az2h415a3m', 'meer@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 16, 'hamza', 'a1243hz5am', 'shahron@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 18, 'hamza', 'a1243hz5am', 'shahron@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 19, 'hamza', 'a14ha23z5m', '', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 20, 'hamza', 'zm512h4aa3', 'yousaf@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 21, 'hamza', 'zm512h4aa3', 'yousaf@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 22, 'hamza', '1ahm3a254z', 'hk071026@gmail.com', '0000-00-00', '0000-00-00', '', '', '', ''),
('', 23, 'ismail', 'mhz34a25a1', 'ismail@gmail.com', '2020-12-15', '0000-00-00', '', '', '', ''),
('', 24, 'osaka', '31aaz2hm45', 'osaka$yahoo.com', '2020-12-14', '0000-00-00', '', '', '', ''),
('', 25, 'hamza', '2534ham1za', 'osama@gmail.com', '2020-12-14', '0000-00-00', '', '', '', ''),
('', 26, 'hamza', 'zha3m4a215', 'farhan@gmail.com', '2020-12-14', '2020-12-17', '', '', '', ''),
('', 27, 'hamza', '3m514aza2h', 'rizwan@gmail.com', '2020-12-14', '2020-12-31', '', '', '', ''),
('', 31, 'hamza', 'h5421a3mza', '', '2020-12-15', '0000-00-00', '', '', '', ''),
('', 32, 'hamza', '25aha14zm3', '', '2020-12-15', '0000-00-00', '', '', '', ''),
('', 33, 'danish', '1ai3sd45n2h', 'hk071026@gmail.com', '2020-12-21', '2020-12-25', '', '', '', ''),
('', 34, 'danish', '4sh125ina3d', 'hk071026@gmail.com', '2020-12-21', '2021-01-01', '', '', '', ''),
('', 35, 'danish', 'an5hd23i1s4', 'hk071026@gmail.com', '2020-12-21', '2020-12-30', '', '', '', ''),
('', 36, 'danish', '3521sahdni4', 'hammad@aptech.com', '2020-12-21', '2021-01-07', '', '', '', ''),
('', 37, 'hamza', 'h5321z4aam', 'saifahmed@hotmail.com', '2020-12-28', '2020-12-31', '', '', '', ''),
('', 38, 'hamza', 'mz153aa24h', 'hk071026@gmail.com', '2020-12-29', '2020-12-16', '', '', '', ''),
('', 39, 'shahid', 'a1ihsh5423d', 'mehraaj@gmail.com', '2020-12-29', '2020-12-08', '', '', '', ''),
('my company', 40, 'shahid', '214sa5hdhi3', 'mehraaj@gmail.com', '2020-12-31', '2020-12-22', '', '', '', ''),
('company&co', 41, 'shahid', 'h2s4ih3d5a1', 'hammad@aptech.com', '2020-12-31', '2020-12-22', '', '', '', ''),
('my company', 42, 'shahid', '3s421ha5dih', 'irzem.aptech@gmail.com', '2020-12-31', '2020-12-17', '', '', '', ''),
('my company', 43, 'shahid', '25a4sdi1h3h', 'irzem.aptech@gmail.com', '2020-12-31', '2020-12-17', '', '', '', ''),
('my company', 44, 'shahid', '23sad1h5h4i', 'irzem.aptech@gmail.com', '2020-12-31', '2020-12-17', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user-type` int(11) NOT NULL COMMENT '0 for admin 1 for karigar 2 for user',
  `image` varchar(600) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `fname`, `lname`, `phone_number`, `email`, `password`, `user-type`, `image`, `status`) VALUES
(43, 'danish', 'butt', 321213444, 'db@gmail.com', 'danishbutt', 0, 'img/l5.jpg', 'active'),
(44, 'hamza', 'khan', 310215769, 'hk@gmail.com', 'hamzakhan', 2, 'b1.jpg', 'active'),
(46, 'talha', 'khan', 2147483647, 'tk@gmail.com', '$2y$10$8hLA1mSQ9ieV3', 2, '', 'active'),
(47, 'Sameer ', 'Khan', 2147483647, 'sameer@gmail.com', '$2y$10$DMcrR7UEVQAXK', 2, '', 'inactive'),
(48, 'tahira', 'khan', 2147483647, 'tahira@gmail.com', '$2y$10$sYv.E7OsXhctW', 2, '', 'Inactive'),
(50, 'hamza', 'khan', 0, 'hamzakhn@gmail.com', '$2y$10$KKLesKw0h9PDu', 0, '', 'Active'),
(51, 'Arisha', 'Rashid', 0, 'arisha071026@gmail.com', '$2y$10$7K.7DCE96tMvG', 0, '', 'Inactive'),
(52, 'arisha', 'rashid', 0, 'arishar071026@gmail.com', 'conpass', 0, '', 'Active'),
(53, 'uzair', 'ahmed', 0, 'ua@gmail.com', 'uzair', 0, '', 'Inactive'),
(54, 'arisha', 'rashid', 0, 'rashid@gmail.com', 'heyheyhey', 0, '', ''),
(55, '', '', 0, '', '', 0, '', ''),
(56, 'hamza', 'rashid', 0, 'hr@gmail.com', 'hamzarashid', 0, '', ''),
(57, 'hamza', 'rashid', 0, 'hamras@gmail.com', 'hamzarashid', 0, '', ''),
(58, 'usman', 'khan', 0, 'usmkhn@gmail.com', 'ariham4321', 0, '', ''),
(59, 'umaima', 'malik', 0, 'um@gmail.com', 'umaima', 0, '', ''),
(60, 'shahid', 'khan', 0, 'sk@yahoo.com', 'shahid', 0, '', ''),
(61, 'shahid', 'jamal', 0, 'sj@gmail.com', 'shahidj', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `review` varchar(300) NOT NULL,
  `user_id` int(11) NOT NULL,
  `karigar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_karigar`
--

CREATE TABLE `tbl_karigar` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `about` varchar(100) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `expirence` varchar(30) NOT NULL,
  `skills` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `password` varchar(30) NOT NULL,
  `category` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0 for inactive | 1 for active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_karigar`
--

INSERT INTO `tbl_karigar` (`id`, `image`, `fname`, `lname`, `about`, `phone_number`, `email`, `expirence`, `skills`, `description`, `password`, `category`, `status`) VALUES
(7, 'i1.jpg', 'talha', 'khan', 'a plumber working in streets for about 8 years', 35686543, 'talha@gmail.com', '8years', 'many', '', 'talhakhan', 'plumber', 0),
(9, 'i3.jpg', 'hamza', 'khan', 'a plumber working in streets for about 8 years', 2147483647, 'tk@gmail.com', '8years', 'many', 'hey i am hamza', '', 'plumber', 1),
(10, 'i8.jpg', 'talha', 'khan', 'a plumber working in streets for about 8 years', 2147483647, 'tk@gmail.com', '8years', 'many', 'qwertyu nm,', '', 'plumber', 1),
(11, 't1.png', 'talha', 'khan', 'a plumber working in streets for about 8 years', 1234567890, 'tk@gmail.com', '8years', 'many', 'hty tuh fcc', '', 'plumber', 1),
(12, 't1.png', 'talha', 'khan', 'a carpainter working in streets for about 8 years', 1234567890, 'tk@gmail.com', '8years', 'many', 'hty tuh fcc', '', 'carpainter', 0),
(13, 'header-bg.jpg', 'talha', 'khan', 'a mechsnic working in streets for about 8 years', 1234567890, 'tk@gmail.com', '8years', 'many', 'qwe dfg m,', '', 'mechanic', 1),
(16, 'i7.jpg', 'ibtehaj', 'khan', 'a bike mechanic working in streets for about 8 years', 1234567890, 'ibtk@gmail.com', '8years', 'many', 'hello i am ibtehaj', '', 'bike mechanic', 1),
(18, '', 'talha', 'khan', 'a electretion working in streets for about 8 years', 1234567890, 'andd@gmail.com', '8years', 'many', 'qwertyuio', '', 'electrition', 1),
(19, 'd1.png', 'hamza', 'khan', '', 1234567890, 'mt@gmail.com', '1month', 'html, css, php', 'qwertyuio', '', '', 1),
(21, 'l4.jpg', 'fabiha', 'shafiq', '', 309871234, 'someone@gmail.com', '4 months', 'writing,sketching, drawing', 'qwr fyu jukl', '', '', 1),
(22, 'd1.png', 'maaz', 'khan', '', 987654321, 'maaz@gmail.com', '2 months', 'many', 'hey i am maaz dfghjkcvbnqwertyupkjbvcx', '', '', 1),
(23, 'header-bg.jpg', 'sarim', 'khan', '', 1234567, 'sarim@gmail.com', 'none', 'none', 'hey i am sarim qwertyuiopzxcvbnm', '', '', 1),
(24, 'header-bg.jpg', 'aaraiz', 'khan', '', 1234567, 'aaraiz@gmail.com', 'none', 'none', 'hey i am aaraiz qwertyuiopzxcvbnm', '', '', 1),
(25, 't1.png', 'ibrahim', 'khan', '', 987654321, 'ibrahim@gmail.com', 'none', 'none', 'hey i am ibrahim\r\nzxcvbn dfghj\r\ntyui\r\ntyuio\r\n', '', '', 1),
(26, 't4.jpg', 'zainab', 'nasir', '', 2147483647, 'zainab@yahoo.com', 'none', 'none', 'hey this is zainab qweryuiokjj\r\nhgdgfdcxnxmxhgdteu', '', '', 1),
(27, 't3.jpg', 'ali', 'imran', '', 123456789, 'aliimran@gmail.com', 'none', 'drawing ,sketching,portrait,painting', 'hello i am ali\r\nqwertyuio\r\nxcvbnm,\r\nertyuiop[cvbnm,', '', '', 1),
(28, 't2.jpg', 'maaz', 'khan', '', 2109876543, 'maazk@gmail.com', 'none', 'none', 'hello tis is maaz\r\nqwecjmxkcx\r\nxmjdjxm\r\nmckd,kckd.', '', '', 1),
(30, 't3.jpg', 'araiz', 'khan', '', 2147483647, 'araiz@gmail.com', 'none', 'drawing ,sketching,sports,exersice', 'hey i am araiz wertyuiosdfghjkl vcbnm', '', '', 1),
(31, 't4.jpg', 'laiba', 'khan', '', 2147483647, 'laiba@gmail.com', 'none', 'not yet', 'hey its laiba qwertuio dghjk\r\ncvbnm\r\nghjkl', '', '', 1),
(32, 't1.jpg', 'talha', 'khan', '', 1234567890, 'hk071026@gmail.com', '2 months', 'drawing ,sketching,portrait,painting', 'asdfghjk', '', '', 1),
(33, 't4.jpg', 'khurram', 'shehzad', '', 2147483647, 'ks@gmail.com', '5 years', 'many', 'hey this is khurram', '', '', 1),
(34, 'c1.jpg', 'farhan', 'khan', '', 2147483647, 'farhan@gmail.com', '2 months', 'html css', 'hey farhan here \r\naaaaaaaaaaaa\r\naaaaaaaaaaa\r\nddddddddd\r\nffffffffffffff\r\nggggggggg\r\nggggggggggg\r\nffffffffff\r\nvvvvvvvvv', '', '', 1),
(35, 'c1.jpg', 'talha', 'khan', '', 1234567890, 'ks@gmail.com', '1 month', 'drawing ,sketching,portrait,painting', 'qwertyui', '', '', 1),
(36, 'blog2.jpg', 'abdul', 'ahad', '', 213456789, 'aa@yahoo.com', '2 years', 'uncountable', 'wertydfghjcvbn', '', '', 1),
(38, 'd1.png', 'yumna', 'khan', '', 2147483647, 'yk@gmail.com', '3 years', 'many', 'hey', '', '', 1),
(43, 'nasir', 'khan', '2147483647', '', 0, 't2.png', '9 years', 'html,css,php', 'hello i am nasir khan i work as a electrition now for 9 years and my costumers remain satisfied by my work i recieve about 1 to 2 % from my costumers ', '', '', 1),
(44, 'yaseen', 'khan', '2147483647', '', 0, 'i3.jpg', '7 months', 'carpainter', 'hey this is yaseen i have been a carpainter for about 7 months ', '', '', 1),
(45, 'blog2.jpg', 'talha', 'khan', 'very good person', 2147483647, 'talhakhan@gmail.com', '8 years', '', 'qwertyui cvbnm\r\nghjkl qsvf\r\nkjj \r\nkkk\r\n', 'talhakhan', '', 1),
(46, 'i4.jpg', 'tahira', 'khan', 'great worker', 2147483647, 'tahira@gmail.com', '8 years', '', 'qrty vxbxxnxnm\r\nxkxkx', '$2y$10$.iEovrA8nQdA8PaDNnzRQe6', '', 1),
(47, 'header-bg.jpg', 'yumna', 'khan', 'hey', 2147483647, 'yumna@gmail.com', '3 years', '', 'qwertyu', '$2y$10$5hkaOOvuVDbE9R3eQt2kROP', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 1,
  `Karigar_id` int(11) NOT NULL,
  `rating` int(2) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`id`, `user_id`, `Karigar_id`, `rating`, `timestamp`, `comment`) VALUES
(14, 23, 7, 4, '2020-11-27 08:57:00', 'exellent man with exellent skills and exellent personality but doesn\'t respects sop'),
(15, 44, 21, 5, '2020-11-20 19:43:56', 'very talented girl 3 years experience in jobs'),
(16, 48, 22, 5, '2020-11-20 19:44:05', 'satisfied'),
(17, 45, 22, 5, '2020-11-20 19:44:13', 'good'),
(18, 49, 27, 5, '2020-11-20 19:44:33', 'nice'),
(21, 43, 27, 5, '2020-11-20 19:45:21', 'great work'),
(22, 46, 31, 5, '2020-11-20 19:45:34', 'need improvement'),
(23, 47, 31, 5, '2020-11-20 19:45:44', 'nice work'),
(24, 44, 26, 4, '2020-11-20 19:45:54', 'good'),
(33, 43, 9, 1, '2020-11-20 19:51:10', 'performance very poor'),
(34, 47, 27, 4, '2020-11-20 19:46:03', 'abgfdsfs'),
(35, 45, 26, 3, '2020-11-20 19:47:06', 'tests'),
(41, 47, 33, 0, '2020-11-20 19:47:17', 'good'),
(42, 44, 13, 5, '2020-11-20 19:47:29', 'very great work with fast speed and cleanliness i would suggest everyone to hire him for plumbering'),
(45, 42, 30, 2, '2020-11-20 19:48:19', 'hhgtsst'),
(46, 44, 30, 1, '2020-11-20 19:49:14', 'dissapointed'),
(47, 49, 30, 1, '2020-11-20 19:49:32', 'work not satisfactory'),
(48, 45, 34, 5, '2020-11-20 19:49:44', 'very impressive work'),
(49, 43, 36, 5, '2020-11-20 19:49:53', 'Wonderfull Work '),
(50, 42, 10, 4, '2020-11-25 20:08:27', 'great work'),
(51, 42, 11, 4, '2020-11-25 20:45:54', 'great work'),
(52, 42, 10, 5, '2020-11-27 06:48:33', 'good'),
(53, 42, 7, 5, '2020-11-27 08:08:33', 'very  nice this guy is expert in his field'),
(54, 42, 11, 2, '2020-11-27 08:35:43', 'very bad work'),
(55, 42, 7, 1, '2020-11-27 08:39:09', 'not following sops'),
(56, 44, 7, 5, '2020-11-27 08:51:08', 'great work i  am satisfied'),
(57, 44, 7, 4, '2020-11-27 08:55:44', 'satisfactory work');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `priority` varchar(30) NOT NULL,
  `message` varchar(300) NOT NULL,
  `screenshot` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `ticket_id` varchar(20) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0 for pending | 1 for completed | 2 for cancelled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`name`, `email`, `subject`, `dept`, `priority`, `message`, `screenshot`, `id`, `ticket_id`, `status`) VALUES
('hamza khan', 'hk071026@gmail.com', 'to check', 'query', 'high', 'this is just to check', 'img', 1, 'random_code', 0),
('hamza khan', 'hk@gmail.com', 'introduction', '1', 'Medium', 'this to check', 'Untitled.png', 2, 'ninudtcrtoio', 0),
('arisha rashid', 'arisha071026@gmail.com', 'for conformation', '6', 'High', 'this to check record insertion', 'Untitled.png', 3, ' oomrfnonrcfoita', 0),
('abdul ahd ', 'abdahad@gmail.com', 'introduction', '1', 'High', 'to check', 'Untitled.png', 4, 'notrinoictdu', 0),
('shaheer ansari', 'shaheerans@gmail.com', 'testing', 'support', 'Medium', 'this is for testing purpose', 'wallpaper-download-8.jpg', 5, 'ngsetti', 2),
('khurram shehzad', 'ks@gmail.com', 'complain', 'support', 'Medium', 'the site is lagging alot kindly resolve this issue', 'images.jpg', 6, 'l3o2cp1n54aim', 0),
('iffat iqbal', 'ii@gmail.com', 'miscommunication', 'support', 'Medium', 'there was a misunderstanding', 'images.jpg', 7, 'ao1tn24muncm5oicsim3', 0),
('obaid khan', 'ok@gmail.com', 'testing', 'support', 'Medium', 'to check', 'wallpaper-download-8.jpg', 8, '42titg1s5ne3', 1),
('irzem subhan', 'is@gmail.com', 'for conformation', 'support', 'Medium', 'for conformation', 'uploads/./images.jpg', 9, '2mnr1ot aoorfocf354n', 1),
('kulsoom shahid', 'ks@gmail.com', 'to check', 'support', 'Medium', 'just to check', 'uploads/images.jpg', 10, 'to 1ech5k4c23', 0),
('hamza khan', 'hamzakhn@gmail.com', 'miscommunication', 'support', 'High', 'just to check', 'uploads/b4cde73a1d42d64bf11ea684ea1c2dd0.jpg', 12, '5itcoscio23i1mnuma4m', 0),
('farhan khan', 'fk@gmail.com', 'suggestion', 'support', 'Medium', 'the frog on the front looks kinda gross if possible change it to something not so gross', '', 14, 'o2s1t5u4nge3gis', 0),
('qurzam khan', 'qa@gmail.com', 'billing error', 'billing', 'High', 'i have payed my monthly subscription charges but still reciving the message to clear my bills', 'uploads/wallpaper-download-8.jpg', 15, 'bog1i eri5rlrnl234', 1),
('rida umair', 'ru@gmail.com', 'sales', 'support', 'Medium', 'i recived a email from sales team realated to some products i am not intrested in kindly stop it', 'uploads/Untitled.png', 17, 's41a2e35sl', 2),
('hamza khan', 'hamk@gmail.com', 'miscommunication', 'support', 'Medium', 'hhwnhwvgwvh', 'uploads/b4cde73a1d42d64bf11ea684ea1c2dd0.jpg', 18, '5mnia3tmccoin1o2mu4s', 2),
('Arisha', 'rashid@gmail.com', 'Complain', 'support', 'Medium', 'you are bad.', '', 19, 'pa3mn12o5iCl4', 0),
('hamza khan', 'hk1@gmail.com', 'swertui', 'support', 'medium', 'drytgygu', '', 20, 'u4tr25w1eis3', 2),
('hamza khan', 'hk@gmail.com', 'introduction', 'billing', 'High', 'fguhu', 'uploads/Untitled.png', 21, 'ront41d3c2itui5on', 0),
('$name', '$email', '$subj', 'sales', '$priority', '$msg', '', 22, '$tickid', 2),
('', '', '', 'support', 'Medium', '', '', 23, '31425', 0),
('', '', '', 'support', 'Medium', '', '', 24, '24351', 0),
('hamza khan', '', '', 'support', 'Medium', '', '', 25, '23154', 0),
('hamza khan', 'hk@gmail.com', '', 'support', 'Medium', '', '', 26, '35142', 0),
('abdul ahd ', 'hamzakhn@gmail.com', 'introduction', 'support', 'Medium', '', '', 27, '5tn2uon4cri31todi', 0),
('hamza khan', 'talha@gmail.com', 'testing', 'support', 'Medium', 'hello', '', 28, 'n32tsgi45et1', 0),
('khurzan khan', 'humzakhan.karachi@gmail.com', 'bug', 'Billing', 'High', 'there is a bug in your site', '$image_name', 29, '$tickid', 2),
('hamza', 'talha@gmail.com', 'testing', 'support', 'Medium', 'hello', '', 30, 'tn153its24eg', 2),
('hamza khan', 'hk@gmail.com', 'introduction', 'support', 'Medium', 'ahsausai', '', 31, 'n5ct2tid431ionuor', 2),
('araiz', 'araiz@gmail.com', 'yyyyyy', 'support', 'Medium', '', '', 32, 'yyy15yyy423', 0),
('araiz', 'araiz@gmail.com', 'maths', 'support', 'High', 'hello bear naam araiz ha', '', 33, 'sa23ht451m', 0),
('farhan iftekhar', 'farhan@hotmail.com', 'query', 'support', 'Medium', 'i like to know chdiewjidow jidswkswkspow wkdsowkspwkq', '', 34, '1rqy32e45u', 0),
('Farhan Iftekhar', 'farhansahb@gmail.com', 'query', 'support', 'Medium', 'i like to move move it', 'uploads/img.png', 35, 'h0z4m3a4a6', 1),
('Alina Ayub', 'alina@gmail.com', 'billing', 'support', 'Medium', 'jdmeudnuemxe \r\nmsuxmwurtuwjdwytrwiwwi \r\nmdwudhjwuw wiiwiwiw', 'NAN', 36, 'll1i5n3gb2i4', 2),
('ijlal khan', 'ijlal@gmail.com', 'misbehave', 'support', 'Medium', 'dmxi,xsi,xowx ,ow,oewd,owd,wodwl', 'uploads/images.jpg', 38, 'ivehma13s24b5e', 0),
('', '', '', 'support', 'Medium', '', '', 39, '12345', 0),
('', '', '', 'support', 'Medium', '', '', 40, '34215', 0),
('farhan iftekhar', 'farhan@hotmail.com', 'complain', 'abuse', 'High', 'msmismismxdsmc,dcmdod', 'uploads/logo.jpg', 41, 'n34i1ol2p5acm', 0),
('hamza khan', 'db@gmail.com', 'miscommunication', 'support', 'Medium', 'vtyhjjimio', 'uploads/images.jpg', 42, 'm3cmc5o1tmi4nsn2uiao', 2),
('hamza khan', 'hamk@gmail.com', 'checking', 'sales', 'Medium', 'hello mr xnxsmos', 'uploads/logo.png', 43, '4g25kce3in1hc', 0),
('shiza khan', 'shiza@gmail.com', 'hello', 'support', 'Medium', 'hdsdiwmxiw', 'uploads/logo.jpg', 44, 'e4o52ll31h', 2),
('aezaz rafiq', 'aezaz@gmail.com', 'introduction', 'support', 'Medium', 'hello im aezaz', '', 45, 'rdniuo4nt23cto15i', 0),
('hamza khan', 'hk@gmail.com', 'jijokkp', 'support', 'Medium', 'wrt7ujo okp klokp', 'uploads/laptop.png', 46, 'ip2kkoj531j4', 2),
('hamza khan', 'hk@gmail.com', 'jijokkp', 'support', 'Medium', 'wrt7ujo okp klokp', 'uploads/laptop.png', 47, 'j21jokikp543', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `experience` varchar(20) NOT NULL,
  `skills` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `Description`, `experience`, `skills`) VALUES
('kalam', 'carpainter', '2years', 'automobile'),
('hamza', 'web-developer', '-1-month', 'php-html-css'),
('ibtehaj', 'web-developer', '3months', 'wordpress'),
('zain', 'seo-intern', 'not mentioned', 'seo');

-- --------------------------------------------------------

--
-- Table structure for table `user_approval`
--

CREATE TABLE `user_approval` (
  `id` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(20) NOT NULL,
  `user-type` int(11) NOT NULL COMMENT '0 for admin 1 for karigar 2 for user',
  `image` varchar(600) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_approval`
--

INSERT INTO `user_approval` (`id`, `fname`, `lname`, `phone_number`, `email`, `password`, `user-type`, `image`, `status`) VALUES
(0, 'arisha', 'rashid', 39876543, 'arisha@gmail.com', 'arisha', 1, 'upload/img.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_approval`
--
ALTER TABLE `post_approval`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qutation`
--
ALTER TABLE `qutation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_karigar`
--
ALTER TABLE `tbl_karigar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `post_approval`
--
ALTER TABLE `post_approval`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `qutation`
--
ALTER TABLE `qutation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `tbl_karigar`
--
ALTER TABLE `tbl_karigar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
