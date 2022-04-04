-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 02:18 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_news`
--

CREATE TABLE `history_news` (
  `id` int(10) NOT NULL,
  `image` varchar(300) NOT NULL,
  `title` varchar(100) NOT NULL,
  `url` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_news`
--

INSERT INTO `history_news` (`id`, `image`, `title`, `url`) VALUES
(12, 'https://static01.nyt.com/images/2022/03/31/us/politics/31dc-rickscott/31dc-rickscott-facebookJumbo.jpg', 'Income Taxes for All? Rick Scott Has a Plan, and That’s a Problem.', 'https://www.nytimes.com/2022/03/31/us/politics/rick-scott.html'),
(13, 'https://i.kinja-img.com/gawker-media/image/upload/c_fill,f_auto,fl_progressive,g_center,h_675,pg_1,q_80,w_1200/2f5eaec0952092a70cb45df7db04fa91.png', 'The OnePlus 10 Pro Is a Perfectly Respectable Third Choice in the Android Wars', 'https://gizmodo.com/oneplus-10-pro-review-a-solid-third-choice-in-the-andr-1848730090'),
(14, 'https://www.reuters.com/resizer/I3mbRlQF7DShxm-7e7diUjOokk8=/1200x628/smart/filters:quality(80)/cloudfront-us-east-2.images.arcpublishing.com/reuters/TSSJTMRETFLFDED5Z26H2KXOLU.jpg', 'Gary Oldman leads team of failed spies in thriller series \'Slow Horses\' - Reuters.com', 'https://www.reuters.com/lifestyle/gary-oldman-leads-team-failed-spies-thriller-series-slow-horses-2022-03-31/'),
(15, 'https://cdn.mos.cms.futurecdn.net/H9TwUCwEHqRriUKE7zgqCX-1200-80.jpg', 'How to watch Moonshot online: stream Cole Sprouse\'s outer space rom-com', 'https://www.androidcentral.com/streaming-tv/how-to-watch-moonshot-online-stream-cole-sprouses-outer-space-rom-com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_news`
--
ALTER TABLE `history_news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_news`
--
ALTER TABLE `history_news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
