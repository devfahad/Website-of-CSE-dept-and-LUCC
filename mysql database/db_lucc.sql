-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 21, 2019 at 05:39 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lucc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `email`, `password`, `first_name`, `last_name`, `mobile_number`, `gender`, `bio`) VALUES
(1, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Fahad', 'Ahmed', '01756952743', 'male', 'Hi i am admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

DROP TABLE IF EXISTS `tbl_blog`;
CREATE TABLE IF NOT EXISTS `tbl_blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `body`, `image`, `author`, `date`) VALUES
(6, 'LAST DAY CELEBRATION OF 39TH BATCH', '<p>Tail short ribs laboris bacon tongue bresaola picanha ground round lore leberkas tenderloin capicola incididunt fugiat. Qui nulla alcatra anim laborum pork belly. Adipisici short ribs laborum, eu est t-bone nulla turducken bacon pork cho ground round ipsum in fatback irure. Anim ribeye capicola filet mignon. Ham eius fatback landjaeger culpa chicken spare ribs. Laborum ham kevin shank, capicol frankfurter anim corned beef doner kielbasa tempor commodo. Pastrami dolor enim fatback jerky fugiat, ham hock landjaeger minim pancetta elit ground round exercitation. Deserunt bresao ground round, tri-tip drumstick capicola sed ham hock labori velit consequat swine duis. Bacon alcatra meatball kielbasa, sausage ham hock salami. Ham hock venison fatback pastrami, tenderloin sirloin tongue beef ribs strip steak flank cow. Rump tail chick turkey meatball shankle jerky tongue jowl filet mignon tri-tip biltong short ribs pork. Andouille hamburger. Beef ribs frankfurter, landjaeger pastrami kielbasa sirloin kevin chuck sausage ground round pork belly, doner beef tail biltong strip steak shankle hamburger. Short loin ham capicola, venison jerky t-bone tail pig filet mignon be meatloaf. Picanha doner venison prosciutto shank, meatloaf pastrami salami.</p>', 'upload/f3aa93869a.jpg', 'FAHAD AHMED', '2019-05-19 23:02:44'),
(7, 'LAST DAY CELEBRATION', '<p>Tail short ribs laboris bacon tongue bresaola picanha ground round lore leberkas tenderloin capicola incididunt fugiat. Qui nulla alcatra anim laborum pork belly. Adipisici short ribs laborum, eu est t-bone nulla turducken bacon pork cho ground round ipsum in fatback irure. Anim ribeye capicola filet mignon. Ham eius fatback landjaeger culpa chicken spare ribs. Laborum ham kevin shank, capicol frankfurter anim corned beef doner kielbasa tempor commodo. Pastrami dolor enim fatback jerky fugiat, ham hock landjaeger minim pancetta elit ground round exercitation. Deserunt bresao ground round, tri-tip drumstick capicola sed ham hock labori velit consequat swine duis. Bacon alcatra meatball kielbasa, sausage ham hock salami. Ham hock venison fatback pastrami, tenderloin sirloin tongue beef ribs strip steak flank cow. Rump tail chick turkey meatball shankle jerky tongue jowl filet mignon tri-tip biltong short ribs pork. Andouille hamburger. Beef ribs frankfurter, landjaeger pastrami kielbasa sirloin kevin chuck sausage ground round pork belly, doner beef tail biltong strip steak shankle hamburger. Short loin ham capicola, venison jerky t-bone tail pig filet mignon be meatloaf. Picanha doner venison prosciutto shank, meatloaf pastrami salami.</p>', 'upload/dc4e847fe6.jpg', 'FAHAD AHMED', '2019-05-19 23:04:00'),
(9, 'test post from userpanel', '<p>tecwae vsdfds vfdsfdsf</p>', 'upload/31df9619b1.jpg', 'Test', '2019-05-21 06:30:55');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog_comment`
--

DROP TABLE IF EXISTS `tbl_blog_comment`;
CREATE TABLE IF NOT EXISTS `tbl_blog_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(350) NOT NULL,
  `phone` varchar(350) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_blog_comment`
--

INSERT INTO `tbl_blog_comment` (`id`, `post_id`, `name`, `email`, `phone`, `message`, `date`, `status`) VALUES
(1, 0, 'emon ahmed', 'emon@gmail.com', '0175952743', 'this is test message', '2019-05-20 18:43:48', 'Approved'),
(4, 8, 'LAST DAY', 'test@gmail.com', '01756952743', 'this is test message', '2019-05-21 05:40:25', 'Approved'),
(3, 7, 'test comment', 'test@gmail.com', '01756952743', 'this is test comment for this post', '2019-05-20 19:43:52', 'Approved'),
(5, 6, 'test', 'test2@gmail.com', '01185451125', 'this is test message', '2019-05-21 05:41:40', 'Approved'),
(6, 6, 'test4', 'test@gmail.com', '01234165789', 'this is test message', '2019-05-21 05:42:42', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

DROP TABLE IF EXISTS `tbl_category`;
CREATE TABLE IF NOT EXISTS `tbl_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'EVENTS'),
(2, 'GALLERY'),
(3, 'BLOG');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_committeelist`
--

DROP TABLE IF EXISTS `tbl_committeelist`;
CREATE TABLE IF NOT EXISTS `tbl_committeelist` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_committeelist`
--

INSERT INTO `tbl_committeelist` (`id`, `title`) VALUES
(1, 'Leading University Computer Club Committee 2019'),
(2, 'Leading University Computer Club Committee 2018\r\n'),
(3, 'Leading University Computer Club Committee 2017\r\n'),
(4, 'Leading University Computer Club Committee 2016'),
(5, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

DROP TABLE IF EXISTS `tbl_event`;
CREATE TABLE IF NOT EXISTS `tbl_event` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(450) NOT NULL,
  `image` varchar(350) NOT NULL,
  `body` text NOT NULL,
  `event_date` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `title`, `image`, `body`, `event_date`) VALUES
(1, 'this is  event one', 'img.jpg', 'this is body', '12/02/2020'),
(4, 'test is test event', 'upload/3415b5a653.jpg', '<p>efrevt 4fewfdefdsfdsfdsf</p>', '2020-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event_comment`
--

DROP TABLE IF EXISTS `tbl_event_comment`;
CREATE TABLE IF NOT EXISTS `tbl_event_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `name` varchar(350) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event_comment`
--

INSERT INTO `tbl_event_comment` (`id`, `post_id`, `name`, `email`, `phone`, `message`, `date`, `status`) VALUES
(1, 3, 'test', 'test@gmail.com', '0123879841', 'this is test message', '2019-05-21 05:50:30', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

DROP TABLE IF EXISTS `tbl_gallery`;
CREATE TABLE IF NOT EXISTS `tbl_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `folder_id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `name`, `folder_id`, `image`, `date`) VALUES
(2, '', 2, 'upload/6aa7fba10f.jpg', '2019-05-20 12:07:15'),
(3, 'test image', 2, 'upload/61792cc100.jpg', '2019-05-20 12:16:24'),
(4, 'new photo', 5, 'upload/10fb4c7098.jpg', '2019-05-20 12:28:42');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery_folder`
--

DROP TABLE IF EXISTS `tbl_gallery_folder`;
CREATE TABLE IF NOT EXISTS `tbl_gallery_folder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folder_name` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery_folder`
--

INSERT INTO `tbl_gallery_folder` (`id`, `folder_name`) VALUES
(1, 'test folder'),
(2, 'test 2 folder'),
(3, 'test 3 folder'),
(4, 'test 4 folder'),
(5, 'new folder');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(350) NOT NULL,
  `bkash_no` varchar(350) NOT NULL,
  `transactin_id` varchar(500) NOT NULL,
  `amount` int(11) NOT NULL,
  `comment` text NOT NULL,
  `status` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`id`, `date`, `name`, `bkash_no`, `transactin_id`, `amount`, `comment`, `status`) VALUES
(2, '2019-05-21 06:23:27', 'emon Ahmed', '01756952743', 'KLJIOHNKN0142', 4000, '', 'Approved'),
(3, '2019-05-21 06:57:22', 'emon ahmed', '01756952743', 'fgre012453', 5000, 'this is a bkash form comment', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

DROP TABLE IF EXISTS `tbl_post`;
CREATE TABLE IF NOT EXISTS `tbl_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `title`, `body`, `image`, `author`, `date`) VALUES
(1, 'Event Title', '<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s.</p>', '1.jpg', 'Fahad', '2019-05-09 07:04:08'),
(2, 'Gallery', '<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s. </p>', '2.jpg', 'Tanvir', '2019-05-09 07:07:13'),
(3, 'Blog', '<p>Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s. </p>', '3.jpg', 'Nafi', '2019-05-09 07:09:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `student_id` varchar(255) NOT NULL,
  `department` varchar(350) NOT NULL,
  `batch` int(11) NOT NULL,
  `role` int(11) NOT NULL,
  `committee` varchar(500) NOT NULL,
  `bio` varchar(1000) NOT NULL,
  `image` varchar(500) NOT NULL,
  `status` varchar(350) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `first_name`, `last_name`, `birthday`, `mobile_number`, `gender`, `student_id`, `department`, `batch`, `role`, `committee`, `bio`, `image`, `status`) VALUES
(5, '', 'd41d8cd98f00b204e9800998ecf8427e', 'user', 'ahmed', '20/02/1995', '', 'male', '123456', '', 12345, 1, 'Leading University Computer Club Committee 2019', '', '', 'Approved'),
(7, 'emon@gmail.com', '12345', 'emon', 'ahmed', '2', '0175952478', 'on', '123456', 'EEE', 3, 0, 'Leading University Computer Club Committee 2016', 'hi this is my bio', '', 'Approved'),
(8, 'fahad@gmail.com', '12345', 'fahad', 'ahmed', '4', '0123456789', 'on', '123456', 'EEE', 15, 0, 'Leading University Computer Club Committee 2017\r\n', 'hi this my bio', '', 'Pending'),
(12, 'test@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'test', 'user', '12', '01756952743', 'on', '12345', 'MBA', 12, 1, 'Leading University Computer Club Committee 2018\r\n', 'this is my bio', '', 'Approved');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
