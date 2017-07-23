-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2017 at 09:39 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `s61`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_settings`
--

CREATE TABLE `all_settings` (
  `all_id` int(3) NOT NULL,
  `all_name_settings` varchar(60) NOT NULL,
  `all_value_settings` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `all_settings`
--

INSERT INTO `all_settings` (`all_id`, `all_name_settings`, `all_value_settings`) VALUES
(1, 'footer', 'Copyright Â© Shop Online 2015'),
(2, 'site_name', 'shop online');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`) VALUES
(1, 'Test article one'),
(2, 'Test article two'),
(3, 'Test article three');

-- --------------------------------------------------------

--
-- Table structure for table `articles_ratings`
--

CREATE TABLE `articles_ratings` (
  `id` int(11) NOT NULL,
  `article` int(11) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles_ratings`
--

INSERT INTO `articles_ratings` (`id`, `article`, `rating`) VALUES
(23, 1, 3),
(24, 2, 4),
(25, 3, 5);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `pid` int(10) NOT NULL,
  `src` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `rate` float(2,1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`pid`, `src`, `title`, `description`, `rate`) VALUES
(1, '5.jpg', 'Tarzan', 'Tarzan, having acclimated to life in London, is called back to his former home in the jungle to investigate the activities at a mining encampment.', 0.0),
(2, '2.jpg', 'Maximum Ride', 'Six children, genetically cross-bred with avian DNA, take flight around the country to discover their origins. Along the way, their mysterious past is ...', 0.0),
(3, '3.jpg', 'Independence', 'The fate of humanity hangs in the balance as the U.S. President and citizens decide if these aliens are to be trusted ...or feared.', 0.0),
(4, '4.jpg', 'Central Intelligence', 'Bullied as a teen for being overweight, Bob Stone (Dwayne Johnson) shows up to his high school reunion looking fit and muscular. Claiming to be on a top-secret ...', 0.0),
(5, '6.jpg', 'Ice Age', 'In the film\'s epilogue, Scrat keeps struggling to control the alien ship until it crashes on Mars, destroying all life on the planet.', 2.5),
(6, '7.jpg', 'X - Man', 'In 1977, paranormal investigators Ed (Patrick Wilson) and Lorraine Warren come out of a self-imposed sabbatical to travel to Enfield, a borough in north ...', 0.0);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(10) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `uid` bigint(10) NOT NULL,
  `pid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `comments`, `uid`, `pid`, `name`) VALUES
(17, 'hi light oceans', 2222222226, 11111134, 'test'),
(18, 'hi this isdont think twice', 2222222226, 11111137, 'test'),
(19, 'this is peter', 2222222226, 11111138, 'test'),
(20, 'this is central intelligence', 2222222226, 11111136, 'test'),
(21, 'testing', 2222222228, 11111136, 'vinay'),
(22, 'hellow ms gods compass', 2222222228, 11111139, 'vinay'),
(23, 'hellow gays', 2222222226, 11111139, 'test'),
(24, 'hellow gays', 2222222226, 11111139, 'test'),
(25, 'hellow\r\n', 2222222226, 11111129, 'test'),
(26, 'testing', 2222222255, 11111132, 'admin'),
(27, 'hellow vinay', 2222222255, 11111133, 'admin'),
(28, 'vinay', 2222222255, 11111158, 'admin'),
(29, 'hello', 2222222255, 11111167, 'admin'),
(30, 'vinay\r\n', 2222222255, 11111159, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `pid` int(10) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sbj` varchar(200) NOT NULL,
  `msg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`pid`, `fname`, `lname`, `email`, `sbj`, `msg`) VALUES
(1, 'yyyy', 'tttt', 'employee@codeinsect.com', 'eeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(2, 'eeeeee', 'eeeeeee', 'eeeeee', 'eeeeeee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'),
(3, 'eeer', 'yyyyyyyy', 'uuuuu', 'uiiiiiiii', 'ooooooooooooo');

-- --------------------------------------------------------

--
-- Table structure for table `featured`
--

CREATE TABLE `featured` (
  `pid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` date NOT NULL,
  `rate` float(2,1) NOT NULL,
  `src` varchar(50) NOT NULL,
  `href` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featured`
--

INSERT INTO `featured` (`pid`, `name`, `year`, `rate`, `src`, `href`) VALUES
(1, 'Assassin\'s Creed 3', '2017-06-18', 2.5, 'm22.jpg', 'single'),
(2, 'Bad Moms', '2017-06-14', 5.0, 'm2.jpg', 'single'),
(3, 'Central Intelligence', '2017-06-16', 3.6, 'm9.jpg', 'single'),
(4, 'Light B/t Oceans', '2017-06-06', 4.5, 'm7.jpg', 'single'),
(5, 'X-Men', '2017-06-13', 4.5, 'm11.jpg', 'single'),
(6, 'The BFG', '2017-06-07', 4.0, 'm8.jpg', 'single'),
(7, 'Peter', '2017-06-07', 3.5, 'm17.jpg', 'single'),
(8, 'Don\'t Think Twice', '2017-06-06', 3.5, 'm10.jpg', 'single'),
(9, 'Dead Island 2', '2017-06-08', 4.3, 'm23.jpg', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `fr_star`
--

CREATE TABLE `fr_star` (
  `id` int(11) NOT NULL,
  `rate_id` varchar(40) NOT NULL,
  `user_id` varchar(40) NOT NULL,
  `rate` float NOT NULL,
  `rated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `gro_id` tinyint(1) NOT NULL,
  `gro_name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`gro_id`, `gro_name`) VALUES
(1, 'admin'),
(2, 'c_admin'),
(3, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` int(16) NOT NULL,
  `data` datetime NOT NULL,
  `due_date` datetime NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` enum('paid','confirmed','unpaid','canceled','expired') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `data`, `due_date`, `user_id`, `status`) VALUES
(10001001, '2015-05-06 08:13:09', '2015-05-07 08:13:09', 2, 'confirmed'),
(10001002, '2015-05-06 08:17:15', '2015-05-07 08:17:15', 3, 'unpaid');

-- --------------------------------------------------------

--
-- Table structure for table `movieslist`
--

CREATE TABLE `movieslist` (
  `id` bigint(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `src` varchar(20) NOT NULL,
  `href` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `rate` float(2,1) NOT NULL,
  `ctrated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL,
  `user_id` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movieslist`
--

INSERT INTO `movieslist` (`id`, `name`, `description`, `src`, `href`, `year`, `rate`, `ctrated`, `status`, `user_id`) VALUES
(11111155, 'Upside Down', 'i love this movie', '11111155.png', 'single', 2013, 5.0, '2017-07-06 12:39:01', 0, 2222222255),
(11111158, 'Baby Driver', 'After being coerced into working for a crime boss, a young getaway driver finds himself taking part in a heist doomed to fail.', '11111158.jpg', 'single', 2017, 3.4, '2017-07-07 07:19:15', 0, 2222222255),
(11111159, 'The Shawshank Redemption', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency', '11111159.jpg', 'single', 1994, 2.0, '2017-07-07 07:58:00', 0, 2222222255),
(11111160, 'The Godfather', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son. ', '11111160.jpg', 'single', 1972, 3.0, '2017-07-07 07:59:27', 0, 2222222255),
(11111161, 'The Dark Knight', 'When the menace known as the Joker emerges from his mysterious past, he wreaks havoc and chaos on the people of Gotham, the Dark Knight must accept one of the greatest psychological and physical tests', '11111161.jpg', 'single', 2008, 3.0, '2017-07-07 08:00:48', 0, 2222222255),
(11111162, '12 Angry Men ', '\nA jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence. ', '11111162.jpg', 'single', 1957, 5.0, '2017-07-08 13:54:15', 0, 2222222255),
(11111163, ' The Lord of the Rings: The Re', 'Gandalf and Aragorn lead the World of Men against Sauron&#039;s army to draw his gaze from Frodo and Sam as they approach Mount Doom with the One Ring. ', '11111163.jpg', 'single', 2003, 4.0, '2017-07-07 08:03:36', 0, 2222222255),
(11111164, ' Schindler&#039;s List ', '\r\nIn German-occupied Poland during World War II, Oskar Schindler gradually becomes concerned for his Jewish workforce after witnessing their persecution by the Nazi Germans. ', '11111164.jpg', 'single', 1993, 3.0, '2017-07-07 08:05:25', 0, 2222222255),
(11111166, ' Pulp Fiction', 'The lives of two mob hit men, a boxer, a gangster&#039;s wife, and a pair of diner bandits intertwine in four tales of violence and redemption. ', '11111166.jpg', 'single', 1994, 4.0, '2017-07-07 08:07:22', 0, 2222222255),
(11111167, 'nenu kori', 'hi vinay many', '11111167.png', 'single', 2017, 5.3, '2017-07-07 13:14:16', 0, 2222222255);

-- --------------------------------------------------------

--
-- Table structure for table `next`
--

CREATE TABLE `next` (
  `pid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dir` varchar(50) NOT NULL,
  `year` date NOT NULL,
  `src` varchar(20) NOT NULL,
  `href` varchar(20) NOT NULL,
  `views` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `next`
--

INSERT INTO `next` (`pid`, `name`, `dir`, `year`, `src`, `href`, `views`) VALUES
(1, ' Nullam interdum metus', 'John Maniy', '2017-06-01', 'm1.jpg', 'single', 11111),
(2, 'badmoms', 'abcd', '2017-06-03', 'm2.jpg', 'single', 22222),
(3, 'abcd', 'avcvc', '2017-06-04', 'm4.jpg', 'single', 33333),
(4, 'bcde', 'cvdf', '2017-06-05', 'm5.jpg', 'single', 44444),
(5, 'cdef', 'abcd', '2017-06-06', 'c5.jpg', 'single', 55555),
(6, 'defg', 'vuvu', '2017-06-07', 'm6.jpg', 'single', 66666),
(7, 'm3', 'bfbbf', '2017-06-07', 'm3.jpg', 'single', 77777),
(8, 'm15', 'gfggf', '2017-06-08', 'm15.jpg', 'single', 88888);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(16) NOT NULL,
  `invoice_id` int(16) NOT NULL,
  `product_id` int(16) NOT NULL,
  `product_type` varchar(60) NOT NULL,
  `product_title` varchar(60) NOT NULL,
  `qty` int(3) NOT NULL,
  `price` int(9) NOT NULL,
  `options` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `invoice_id`, `product_id`, `product_type`, `product_title`, `qty`, `price`, `options`) VALUES
(10001001, 10001001, 1, 'PC', 'Dell', 1, 25000, ''),
(10001002, 10001002, 5, 'Mobile', 'Iphone 6', 1, 46000, '');

-- --------------------------------------------------------

--
-- Table structure for table `post_rating`
--

CREATE TABLE `post_rating` (
  `rating_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `rating_number` int(11) NOT NULL,
  `total_points` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_rating`
--

INSERT INTO `post_rating` (`rating_id`, `post_id`, `rating_number`, `total_points`, `created`, `modified`, `status`) VALUES
(11, 1, 8, 30, '2017-06-23 14:10:27', '2017-06-23 16:04:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(16) NOT NULL,
  `pro_name` varchar(50) NOT NULL,
  `pro_title` varchar(20) NOT NULL,
  `pro_description` text NOT NULL,
  `pro_price` int(9) NOT NULL,
  `pro_stock` int(3) NOT NULL,
  `pro_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_title`, `pro_description`, `pro_price`, `pro_stock`, `pro_image`) VALUES
(1, 'PC', 'Dell', 'Dell INSPIRON N5111\r\nRAM 2GB\r\nCORE i5\r\nAVG 1Gb\r\nCPU 3000', 25000, 3, 'Dell_Computer.jpg'),
(2, 'Laptop', 'Toshiba', 'RAM 1GB\r\nCORE i7\r\nAVG 2Gb\r\nCPU 3500', 50000, 5, 'prod_satA205-OFTWH_300-01.jpg'),
(3, 'PC', 'HP', 'HP 300 \r\nram 2 gb\r\navg 2\r\ncpu 3500\r\ndvd\r\ncam 16 px\r\n', 75000, 1, 'images.jpg'),
(4, 'Mobile', 'HTC sensation XL', 'htc', 45000, 1, 'htc_sensation_xl_28.jpg'),
(5, 'Mobile', 'Iphone 6', 'Iphone 6', 46000, 1, 'aabffb1c6425f95fd26db8595ee28c0e_png.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `vote` float NOT NULL,
  `uid` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `product_id`, `vote`, `uid`) VALUES
(262, 11111129, 3.9, 2222222255),
(263, 11111139, 3.8, 2222222255),
(264, 11111138, 4, 2222222255),
(265, 11111149, 4, 2222222255),
(266, 11111150, 4.2, 2222222255),
(267, 11111147, 4.2, 2222222255),
(268, 11111151, 4.4, 2222222255),
(269, 11111133, 3, 2222222255),
(270, 11111134, 3.9, 2222222255),
(271, 11111135, 3.9, 2222222255),
(272, 11111136, 3.7, 2222222255),
(273, 11111143, 3.8, 2222222255),
(274, 11111144, 4.7, 2222222255),
(275, 11111145, 3.8, 2222222255),
(276, 11111146, 3.9, 2222222255),
(277, 11111153, 3.9, 2222222255),
(278, 11111148, 2.9, 2222222255),
(279, 11111152, 3.9, 2222222255),
(280, 11111141, 3.8, 2222222255),
(281, 11111137, 3.6, 2222222255),
(282, 11111142, 3.9, 2222222255),
(283, 11111154, 3.7, 2222222255),
(284, 11111132, 3.7, 2222222255),
(285, 11111155, 4.8, 2222222255),
(286, 11111157, 3.8, 2222222255),
(287, 11111158, 4.1, 2222222255),
(288, 11111159, 3.8, 2222222255),
(289, 11111160, 2.8, 2222222255),
(290, 11111167, 5, 2222222255),
(291, 11111161, 3.8, 2222222255);

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `rep_id` int(9) NOT NULL,
  `rep_name` varchar(60) NOT NULL,
  `rep_id_product` int(9) NOT NULL,
  `rep_title_product` varchar(60) NOT NULL,
  `rep_usr_name` varchar(60) NOT NULL,
  `rep_usr_group` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`rep_id`, `rep_name`, `rep_id_product`, `rep_title_product`, `rep_usr_name`, `rep_usr_group`) VALUES
(3, 'PC', 1, 'Dell', '', '0'),
(4, 'Laptop', 2, 'Toshiba', '', '0'),
(5, 'Mobile', 4, 'HTC sensation XL', 'test', '3'),
(6, 'Laptop', 2, 'Toshiba', 'test', '3'),
(7, 'PC', 3, 'HP', 'Gost', 'Gost'),
(8, 'PC', 1, 'Dell', 'hichamtest', '3');

-- --------------------------------------------------------

--
-- Table structure for table `shop_session`
--

CREATE TABLE `shop_session` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shop_session`
--

INSERT INTO `shop_session` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('11b433b91da91fd2df474c65209d5bdf04f52391', '::1', 1430886198, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838353930363b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('18e5031ed538645b4ccb810918bb6bb4def54f0f', '::1', 1430885736, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838353630353b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('216782d346ecb725467fa1a08f49f3e057705ad8', '::1', 1430882453, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838323430303b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('303d5ff594029d513c5b48c68edde9af03ed959f', '::1', 1430889412, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838393133383b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('473886d26486392bbc947defc69cdcf66424de77', '::1', 1430886630, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838363433363b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('75026a28ee50856686459e50bbf04e02fbdbe1b7', '::1', 1430887393, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838373136333b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('8f1b75f2af02d572e0b06950a4286efa36064e28', '::1', 1430892337, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303839323333353b),
('8f5d8f2b27c17d06a261c2d12b9c6783791f23b0', '::1', 1430888044, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838373836323b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('a460a08a293ae491ad52e0381efaa0070ec01c76', '::1', 1430888288, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838383137303b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('ac03e0e37872a413802709d8289adcfe1d6574db', '::1', 1430887766, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838373437343b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('c64d3fd803821b27ddca58c1de092623cc89ee8a', '::1', 1430890441, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303839303334343b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b6d6573736167657c733a35383a225468616e6b20796f75202e2e2e2e2e2077652077696c6c20636865636b206f6e20796f7572207061796d656e7420636f6e6669726d6174696f6e223b5f5f63695f766172737c613a313a7b733a373a226d657373616765223b733a333a226f6c64223b7d),
('d03788541a1ed30cb5f5fb7acc025264b50bf1fe', '::1', 1430888790, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838383532303b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('d7a7a2250ad798163a90ba09c3e0501aa17bbf2b', '::1', 1430883463, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303838333230313b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b),
('e5a96ef2ea1800a7dc0a794c1fc53ebbd742aa3e', '::1', 1430893426, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303839333432363b),
('e6528b002d7aacfeaa0d5e91ca1b9e3d714d5487', '::1', 1430891019, 0x5f5f63695f6c6173745f726567656e65726174657c693a313433303839303733343b757365726e616d657c733a363a2268696368616d223b67726f75707c733a313a2233223b);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `pid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` date NOT NULL,
  `rate` float(2,1) NOT NULL,
  `src` varchar(50) NOT NULL,
  `href` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`pid`, `name`, `year`, `rate`, `src`, `href`) VALUES
(1, 'Citizen Soldier', '2017-06-01', 4.3, 'm13.jpg', 'single'),
(2, 'X-Men', '2017-06-02', 4.0, 'm11.jpg', 'single'),
(3, 'Greater', '2017-06-03', 3.0, 'm12.jpg', 'single'),
(4, 'Light B/t Oceans', '2017-06-04', 3.5, 'm7.jpg', 'single'),
(5, 'The BFG', '2017-06-05', 4.5, 'm8.jpg', 'single'),
(6, 'Central Intelligence', '2017-06-06', 4.0, 'm9.jpg', 'single'),
(7, 'Don\'t Think Twice', '2017-06-07', 3.0, 'm10.jpg', 'single'),
(8, 'Peter', '2017-06-08', 5.0, 'm17.jpg', 'single'),
(9, 'God’s Compass', '2017-06-08', 3.5, 'm15.jpg', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `slider2`
--

CREATE TABLE `slider2` (
  `pid` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `year` date NOT NULL,
  `genres` varchar(50) NOT NULL,
  `rating` float(2,1) NOT NULL,
  `src` varchar(50) NOT NULL,
  `href` varchar(50) NOT NULL,
  `story` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider2`
--

INSERT INTO `slider2` (`pid`, `name`, `year`, `genres`, `rating`, `src`, `href`, `story`) VALUES
(1, 'civil war captain America', '2017-05-15', 'action,sci-fri', 4.5, 'h3-1.jpg', 'single.php', 'After the Avengers leaves some&nbsp;collateral damage, political pressure mounts to install a system of accountability.&nbsp;The new status quo deeply divides ...'),
(2, 'the conjuring 2', '2017-06-06', 'anime,family', 5.0, 'h1-1.jpg', 'single.php', ' 720p,Bluray HD Free Movie Downloads, Watch Free Movies Online with high speed Free Movie Streaming | MyDownloadTube Lorraine and Ed Warren go to north London to help a single...'),
(3, 'a haunting in cawdor', '2017-06-13', 'horror,family', 2.0, 'h2-1.jpg', 'single.php', 'Vivian Miller, sent to a rehabilitation programme for young offenders, where a theatre camp is used as an alternative to jail time. After she views tape ...');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE `subcat` (
  `cid` int(10) NOT NULL,
  `pid` bigint(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `scid` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`cid`, `pid`, `name`, `scid`) VALUES
(1, 11111152, 'Action', 8),
(2, 11111152, 'Biography', 7),
(3, 11111152, 'crime', 6),
(4, 11111152, 'family', 5),
(5, 11111152, 'horror', 4),
(6, 11111153, 'romance', 15),
(7, 11111153, 'sports', 14),
(8, 11111153, 'war', 13),
(9, 11111153, 'Adventure', 12),
(10, 11111153, 'comedy', 1),
(11, 11111153, 'documentary', 10),
(12, 11111153, 'fantasy', 9),
(13, 11111153, 'thriller', 8),
(14, 11111153, 'Animatio', 7),
(15, 11111154, 'costume', 13),
(16, 11111154, 'history', 12),
(17, 11111154, 'musical', 1),
(18, 11111154, 'Psychological', 10),
(19, 11111154, NULL, 9),
(20, 11111154, NULL, 8),
(21, 11111154, NULL, 7),
(22, 11111154, NULL, 6),
(23, 11111154, NULL, 5),
(24, 11111154, NULL, 4),
(25, 11111155, NULL, 17),
(26, 11111155, NULL, 12),
(27, 11111155, NULL, 9),
(28, 11111155, NULL, 4),
(29, 11111156, NULL, 14),
(30, 11111156, NULL, 1),
(31, 11111156, NULL, 9),
(32, 11111156, NULL, 1),
(33, 11111156, NULL, 8),
(34, 11111156, NULL, 6),
(35, 11111156, NULL, 5),
(36, 11111156, NULL, 2),
(37, 11111156, NULL, 1),
(38, 11111158, NULL, 7),
(39, 11111158, NULL, 6),
(40, 11111158, NULL, 5),
(41, 11111158, NULL, 4),
(42, 11111159, NULL, 13),
(43, 11111159, NULL, 3),
(44, 11111160, NULL, 13),
(45, 11111160, NULL, 3),
(46, 11111161, NULL, 13),
(47, 11111161, NULL, 3),
(48, 11111161, NULL, 1),
(49, 11111162, NULL, 13),
(50, 11111162, NULL, 3),
(51, 11111163, NULL, 12),
(52, 11111163, NULL, 9),
(53, 11111163, NULL, 1),
(54, 11111164, NULL, 18),
(55, 11111164, NULL, 4),
(56, 11111164, NULL, 2),
(57, 11111166, NULL, 5),
(58, 11111166, NULL, 3),
(59, 11111166, NULL, 1),
(60, 11111167, NULL, 12),
(61, 11111167, NULL, 1),
(62, 11111167, NULL, 10),
(63, 11111167, NULL, 9),
(64, 11111167, NULL, 4),
(65, 11111167, NULL, 2),
(66, 11111167, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tempemail`
--

CREATE TABLE `tempemail` (
  `eid` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempemail`
--

INSERT INTO `tempemail` (`eid`, `email`, `code`) VALUES
(1, 'vinay541@gmail.com', 'ocNX0VK71pMhGwS3HBuv'),
(2, 'a@a.a', 'tCgbuHoAvJudQ9FjnXvz'),
(3, 'vinay541@d.d', 'qB5dP32XWMp2CLPabsoy'),
(4, 'a@d.d', '9l9w8onc19K9DBQ5lcKd'),
(5, 'c@c.c', 'YV3hSeTsT6Own0VD9UPy'),
(6, 'Vinay541@g.g', 'uQFVSnKuc2gZNihCv6o6'),
(7, 'vinayip541@gmail.com', 'apbhNZjKQM5Z7K5HYoo7'),
(8, 'vinayip541@gmail.com', 'CWkZQq0oGfDkcE4L1mEa'),
(9, 'vinayip541@gmail.com', 'eun18eBVdlvZPi9sN4a1'),
(10, 'vinayip541@gmail.com', 'J3UTByxFrrHqdi5wodVN'),
(11, 'vinay@gmail.com', 'BUIp5QQpH2I72eFXcByW'),
(12, 'vinayip541@gmail.com', 'NVAk8kKxPPC1XE2K8wmc'),
(13, 'vinayip541@gmail.com', 'whzmMjH10za4ihOugaZL'),
(14, 'vinay541@gmail.com', 'jonGtrnF3ftEhFCeR3jv'),
(15, 'vinayip541@gmail.com', 'pksMyCi6C1ylY1jJqAbX'),
(16, 'admin@gmail.com', 'K8e0ei4jNLUp9SdnwtXP');

-- --------------------------------------------------------

--
-- Table structure for table `tutorial`
--

CREATE TABLE `tutorial` (
  `id` int(8) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rating` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutorial`
--

INSERT INTO `tutorial` (`id`, `title`, `description`, `rating`) VALUES
(1, 'Favorite Star Rating with jQuery', 'This tutorial is for doing favorite star rating using jQuery. It displays list of HTML stars by using li tags. These stars are highlighted by using CSS and jQuery based on the favorite rating selected by the user.', 1),
(2, 'PHP RSS Feed Read and List', 'PHP\'s simplexml_load_file() function is used for reading data from xml file. Using this function, we can parse RSS feed to get item object array.', 3),
(3, 'jQuery AJAX Autocomplete – Country Example', 'Autocomplete feature is used to provide auto suggestion for users while entering input. It suggests country names for the users based on the keyword they entered into the input field by using jQuery AJAX.', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usr_id` bigint(10) NOT NULL,
  `usr_name` varchar(25) NOT NULL,
  `usr_password` varchar(60) NOT NULL,
  `usr_group` tinyint(1) NOT NULL,
  `stuts` tinyint(1) NOT NULL,
  `usr_email` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usr_id`, `usr_name`, `usr_password`, `usr_group`, `stuts`, `usr_email`, `created`, `last`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1, '', '2017-06-23 07:38:49', '0000-00-00 00:00:00'),
(2222222255, 'admin', '0192023a7bbd73250516f069df18b500', 3, 1, 'admin@gmail.com', '2017-07-05 05:04:22', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_settings`
--
ALTER TABLE `all_settings`
  ADD PRIMARY KEY (`all_id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles_ratings`
--
ALTER TABLE `articles_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `featured`
--
ALTER TABLE `featured`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `fr_star`
--
ALTER TABLE `fr_star`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`gro_id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movieslist`
--
ALTER TABLE `movieslist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `next`
--
ALTER TABLE `next`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_rating`
--
ALTER TABLE `post_rating`
  ADD PRIMARY KEY (`rating_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`rep_id`);

--
-- Indexes for table `shop_session`
--
ALTER TABLE `shop_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `slider2`
--
ALTER TABLE `slider2`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tempemail`
--
ALTER TABLE `tempemail`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `tutorial`
--
ALTER TABLE `tutorial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `all_settings`
--
ALTER TABLE `all_settings`
  MODIFY `all_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `articles_ratings`
--
ALTER TABLE `articles_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `featured`
--
ALTER TABLE `featured`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `fr_star`
--
ALTER TABLE `fr_star`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `gro_id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001003;
--
-- AUTO_INCREMENT for table `movieslist`
--
ALTER TABLE `movieslist`
  MODIFY `id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11111168;
--
-- AUTO_INCREMENT for table `next`
--
ALTER TABLE `next`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10001003;
--
-- AUTO_INCREMENT for table `post_rating`
--
ALTER TABLE `post_rating`
  MODIFY `rating_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;
--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `rep_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `slider2`
--
ALTER TABLE `slider2`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT for table `tempemail`
--
ALTER TABLE `tempemail`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tutorial`
--
ALTER TABLE `tutorial`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usr_id` bigint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
