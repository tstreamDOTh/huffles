-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2016 at 07:41 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `huffles`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(3) NOT NULL AUTO_INCREMENT,
  `comment_post_id` int(3) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `comment_email` varchar(255) NOT NULL,
  `comment_content` text NOT NULL,
  `comment_status` varchar(255) NOT NULL,
  `comment_date` date NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) VALUES
(3, 9, 'RAM', 'ram@gmail.com', 'Its fantastic', 'approved', '2016-06-21');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE IF NOT EXISTS `dogs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `lookfor` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `short` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1525 ;

-- --------------------------------------------------------

--
-- Table structure for table `head_categories`
--

CREATE TABLE IF NOT EXISTS `head_categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(255) NOT NULL,
  `cat_addrss` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`),
  UNIQUE KEY `cat_name` (`cat_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `head_categories`
--

INSERT INTO `head_categories` (`cat_id`, `cat_name`, `cat_addrss`) VALUES
(1, 'HOME', 'index.php'),
(3, 'EVENTS', 'events-archive.php'),
(11, 'Gallery', 'gallery.php'),
(15, 'TED', 'https://www.ted.com/'),
(17, 'Dashboard', 'login1.php'),
(18, 'Competition Register', 'competition.php');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE IF NOT EXISTS `materials` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(255) NOT NULL,
  `breed` varchar(255) NOT NULL,
  `Food` varchar(255) NOT NULL,
  `accessories` varchar(255) NOT NULL,
  `toys` varchar(255) NOT NULL,
  `services` varchar(255) NOT NULL,
  `healthcare` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `type`, `breed`, `Food`, `accessories`, `toys`, `services`, `healthcare`) VALUES
(1, 'dogs', 'Puppies', 'Food', 'Accessories', 'Toys', 'Services', 'Healthcare'),
(2, 'cats', 'Kittens', 'Food', 'Accessories', 'Toys', 'Services', 'Healthcare'),
(3, 'birds', 'Chicks', 'Food', 'Accessories', 'Toys', 'Services', 'Healthcare'),
(4, 'small pets', 'Pet Varities', 'Food', 'Accessories', 'Toys', 'Services', 'Healthcare'),
(5, 'aquarium', 'Aquariums', 'Food', 'Tank Accessories', 'Help', 'Tanks', 'Help');

-- --------------------------------------------------------

--
-- Table structure for table `petstores`
--

CREATE TABLE IF NOT EXISTS `petstores` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `lookfor` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `petstores`
--

INSERT INTO `petstores` (`id`, `name`, `image`, `address`, `type`, `lookfor`, `location`, `work`, `phone`, `email`) VALUES
(36, 'shals', 'tesla-alpha-model-s-2012_90675-1920x1200.jpg', '', '', '', 'ANNANAGAR', '', '8499303030', 'subhamvit542@gmail.com'),
(37, 'ANNAJI', '2015_tesla_model_s_p85d_14_1920x1080.jpg', '', '', '', 'VIT MENS HOSTEL,NEAR KATPADI,CHITTOR BUS STAND', '', '09994313955', 'subhamvit542@gmail.com'),
(38, 'MAHONTO MALIK', '2016 Tesla Model X 87.jpg', '', '', '', 'VIT MENS HOSTEL,NEAR KATPADI,CHITTOR BUS STAND', '', '09994313955', 'subhamvit542@gmail.com'),
(39, 'RAMJI', '1920-warren-buffett-quotes-wallpaper-8.jpg', '', '', '', 'VIT VELLORE', '', '899393939', 'rani@gmail.com'),
(40, 'radhaji', '1920-warren-buffett-quotes-wallpaper-8.jpg', '', '', '', 'vitvelore', '', '09994313955', 'rani@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `content` text NOT NULL,
  `comment_count` int(10) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `randSalt`) VALUES
(1, 'Subham543', '123', 'Subham', 'Sahay', 'subham@gmail.com', '', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertry`
--

CREATE TABLE IF NOT EXISTS `usertry` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `validation_code` text NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `usertry`
--

INSERT INTO `usertry` (`user_id`, `username`, `password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_role`, `validation_code`) VALUES
(6, 'reena', '202cb962ac59075b964b07152d234b70', 'reenas', 'shrivastava', 'reena@gmail.com', 'image', 'admin', '479b8674a5dc8d2563a37692f7edbcb3'),
(45, 'thiyagaraj', '6374538319a98a1d2dea943912a84470', 'thiyag', 'raj', 'tstream.h@gmail.com', 'image', 'admin', '0'),
(46, 'thyg', '202cb962ac59075b964b07152d234b70', 'reenas', 'shrivastava', 't@gmail.com', 'image', 'user', '479b8674a5dc8d2563a37692f7edbcb3'),
(47, 'ramki', '202cb962ac59075b964b07152d234b70', 'ramki', 'ramki', 'rani@gmail.com', 'image', 'user', 'a9a8d814f0e9fc625680c649084353d5');

-- --------------------------------------------------------

--
-- Table structure for table `user_online`
--

CREATE TABLE IF NOT EXISTS `user_online` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `user_online`
--

INSERT INTO `user_online` (`id`, `session`, `time`) VALUES
(1, '3fcc68qg1q3mln40pqj0va52q3', 1466908012),
(2, '285n4cud8najjrf5eqj6i79945', 1467015849),
(3, 'kld68fulv917jjft7gcntju5v0', 1467041306),
(4, '2bkrbens26e6r3ocnnglg0vri4', 1467069038),
(5, 'r4irrl930bld88i7prja46k0s2', 1467178536),
(6, 'upggvffn1qta0ddksdq8eveec0', 1467182074),
(7, 'jp7lu8t3idud9ea6nsr8vqv651', 1467198838),
(8, 'tr00f1umvnt0p3tu60mp7ug3p6', 1467250352),
(9, 'smtl8h83tcpga2cborho93bvh1', 1473352054),
(10, '68q7jiqdsj2sufv9ihr94m53b6', 1473405560),
(11, 'es9sbs76u3mlj4bkv3j8fmkh10', 1473408229),
(12, 'vnq8v5lg4llkqgntfrphvcu7t5', 1473455553),
(13, '0i82ieh18cnqb3v8fj9bk0vut3', 1473519018),
(14, '9t85sj3g7fjnsgau1r3svp14k1', 1473490205),
(15, '5bj8a60gonjtiaftpgb9b2gjp3', 1474049052),
(16, 'o368vennl1oq065ansn8cqv481', 1474195100),
(17, 'lbnbe0nsk7udfrpfdqktpoikq2', 1474200267),
(18, 'lo6d7cerj6detso6ps56mcdb46', 1474278601),
(19, 'h1l13lsp9jm23pi6id4e3nodu3', 1474311696),
(20, '9crcm4ps9rgfg694cham1ggga7', 1474490894),
(21, 'nfhrp5huj53enel5rc2u3sutb7', 1474568437),
(22, 'fn2jbess5u5vss6e7sh5t2q7p2', 1474836549),
(23, '8eeoi8r74kdsmu9gl4vgr2ic42', 1474993330),
(24, 't9ui14v206b9qetvc2kgpn5vu2', 1475318426),
(25, 'b00c82pn659it23d8udupt2c74', 1475513439),
(26, 'lh4jk8okm9qnt3v6dsa68u7jj1', 1475947448);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
