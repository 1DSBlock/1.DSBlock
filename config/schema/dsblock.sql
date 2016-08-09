-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2016 at 05:45 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsblock`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL,
  `article_category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_category_id`, `title`, `alias`, `description`, `created`, `modified`, `status`) VALUES
(1, NULL, 'About us', 'about-us', '<p>About us</p>', '2016-07-31 05:23:19', '2016-07-31 05:52:04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE IF NOT EXISTS `article_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `article_categories`
--

INSERT INTO `article_categories` (`id`, `title`, `alias`, `description`, `status`, `created`, `modified`) VALUES
(1, 'Introductions', 'introductions', '<b></b>introductions 123', 1, '0000-00-00 00:00:00', '2016-07-31 05:35:53'),
(2, 'Q & A', 'q-a', 'Q &amp; A', 1, '2016-07-31 04:12:35', '2016-07-31 05:35:56');

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE IF NOT EXISTS `forms` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `dir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `description`, `filename`, `dir`, `created`, `modified`) VALUES
(13, 'test 1', 'adobe-acrobat-xi-create-form-or-template-tutorial_ue.pdf', '4c9f4ea2-8eb6-441f-b27c-6cfcbc7e2a39', '2016-07-31 04:27:58', '2016-07-31 14:14:48'),
(14, 'test 2', 'adobe-acrobat-xi-create-form-or-template-tutorial_ue.pdf', '59d42955-f7dc-44be-8e69-d4d757926e64', '2016-07-31 14:14:40', '2016-07-31 14:14:40'),
(15, 'test 3', 'adobe-acrobat-xi-create-form-or-template-tutorial_ue.pdf', 'f88f3a91-c946-43b8-a211-f7c1bfd4ffb7', '2016-07-31 14:15:17', '2016-07-31 14:15:17'),
(16, 'test 4', 'adobe-acrobat-xi-create-form-or-template-tutorial_ue.pdf', 'bce7c4e3-4938-4d81-aad9-b21f8a15aac1', '2016-08-08 16:41:31', '2016-08-08 16:41:31'),
(17, 'test 5', 'Pillar Seminary Feature.docx', 'e6648ad5-5326-4cac-b43e-d863d7422f46', '2016-08-08 16:46:26', '2016-08-08 16:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `type`) VALUES
(29, 'about-us', 0),
(30, 'introductions', 1),
(31, 'qa', 2),
(34, 'forms', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page_articles`
--

CREATE TABLE IF NOT EXISTS `page_articles` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `article_category_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_articles`
--

INSERT INTO `page_articles` (`id`, `article_id`, `article_category_id`, `page_id`) VALUES
(32, 1, 0, 29),
(33, 0, 1, 30);

-- --------------------------------------------------------

--
-- Table structure for table `page_urls`
--

CREATE TABLE IF NOT EXISTS `page_urls` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `page_urls`
--

INSERT INTO `page_urls` (`id`, `page_id`, `link`) VALUES
(11, 34, '/forms'),
(23, 29, '/articles/view?id=1'),
(24, 30, '/articles/view?cid=1'),
(27, 31, '/questions');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `answer`, `created`, `modified`) VALUES
(1, 'Có phải Liệu pháp Tế bào tươi thích hợp cho tất cả mọi người không?', '<p>Thông thường liệu pháp tế bào tươi thích hợp cho mọi đối tương hách hàng. Tuy nhiên, có một vài trường hợp chống chỉ định sử dụng Liệu pháp Tế bào tươi. Việc khám, xét nghiệm trước điều trị sẽ chỉ ra những người không phù hợp với Liệu pháp Tế bào tươi.<br></p>', '2016-08-09 15:29:02', '2016-08-09 15:29:02'),
(2, 'Những người sử dụng Liệu pháp Tế bào tươi có hiệu quả giống nhau không? Nếu không, hiệu quả của liệu pháp bị ảnh hưởng bởi những yếu tố nào?', '<p>Hiệu quả của liệu pháp tế bào tươi phụ thuộc vào rất nhiều yếu tố: hệ thống miễn dịch cơ thể của mỗi cá nhân, sức khỏe tổng thể của khách hàng. Việc Khách hàng thực hiện đúng các khuyến cáo trước và sau khi tiến hành trị liệu là một yếu tố ảnh hưởng nhiều đến hiệu quả của trị liệu<br></p>', '2016-08-09 15:29:28', '2016-08-09 15:29:28');

-- --------------------------------------------------------

--
-- Table structure for table `system_users`
--

CREATE TABLE IF NOT EXISTS `system_users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `system_users`
--

INSERT INTO `system_users` (`id`, `email`, `password`, `active`, `created`, `modified`) VALUES
(1, 'admin@gmail.com', 'de75c26b23f7ce1ac1e7a549ec9902d91cb8201b207898a225e5910d0530a40a', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'admin1111@gmail.com', 'd6a5553c485eec31c9872ac2c47fb4062c13b09b08b40d01cccd1daf85ad14a0', 1, '2016-07-31 14:29:14', '2016-07-31 14:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_category_id` (`article_category_id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD FULLTEXT KEY `name_2` (`name`);

--
-- Indexes for table `page_articles`
--
ALTER TABLE `page_articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_id` (`page_id`);

--
-- Indexes for table `page_urls`
--
ALTER TABLE `page_urls`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_id` (`page_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_users`
--
ALTER TABLE `system_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `page_articles`
--
ALTER TABLE `page_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `page_urls`
--
ALTER TABLE `page_urls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `system_users`
--
ALTER TABLE `system_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
