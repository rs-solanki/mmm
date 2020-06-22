-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 09:20 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `Id` int(11) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `Account_id` varchar(255) NOT NULL,
  `Account_name` varchar(255) NOT NULL,
  `Select_currency` varchar(255) NOT NULL,
  `Bank_name` varchar(255) NOT NULL,
  `Currency_address` varchar(255) NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `total` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`Id`, `User_id`, `Account_id`, `Account_name`, `Select_currency`, `Bank_name`, `Currency_address`, `Fname`, `Lname`, `total`) VALUES
(1, 'akramali121314@gmail.com', '333480965', 'Akram', 'BTC', 'BTC BitCoin', 'dhgjsdfjsadjashjdjasdjasgjdgasjdgj', 'Akram', 'Ali', '1'),
(2, 'Roman12@gmai.com', '9464893787', 'Roman Hill', 'BTC', 'BTC BitCoin', 'dsadasdfasndhjakshdjkahsjdkhasjkdh', 'roamn', 'Hill', '1'),
(3, 'rockusa@gmail.com', '5099952333', 'rock', 'BTC', 'BTC BitCoin', 'ashfkaFHAIkwfhwaksvcnmzxvnaifhwask', 'rock', 'mlm', '1'),
(4, 'ram@gmail.com', '6002980703', 'ram', 'BTC', 'BTC BitCoin', 'wehfr2o3irh2iowehfcslfkh2393r8hqoi', 'ram', 'singh', '1'),
(5, 'kkkk@gmail.com', '899192101', 'testgh', 'BTC', 'BTC BitCoin', '1234567890123456789012341231234123', 'testgh', 'testgh', '1'),
(6, 'ayn@gmail.com', '54693394', 'ayankhan', 'BTC', 'BTC BitCoin', '6546546546848664654564654654564654', 'ayankhan', 'ayankhan', '1'),
(7, 'jonh123@gmail.com', '7363661489', 'jonh', 'BTC', 'BTC BitCoin', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', 'jonh', 'asasa', '1'),
(8, 'kellysen12@gmail.com', '7938160661', 'altaf', 'BTC', 'BTC BitCoin', 'ffffffffffffffffffffffffffffffffff', 'Akram', 'ali', '1');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chattings`
--

CREATE TABLE `chattings` (
  `chat_id` int(11) NOT NULL,
  `chat_phid` varchar(10) NOT NULL,
  `chat_message` tinytext NOT NULL,
  `chat_open` varchar(255) NOT NULL,
  `chat_image_path` varchar(255) NOT NULL,
  `chat_order_id` varchar(255) NOT NULL,
  `chat_created` varchar(30) NOT NULL,
  `chat_type` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chattings`
--

INSERT INTO `chattings` (`chat_id`, `chat_phid`, `chat_message`, `chat_open`, `chat_image_path`, `chat_order_id`, `chat_created`, `chat_type`) VALUES
(7, '2', 'hello', 'No', 'Images/images_chat/1566208312.', '7557142431', '2019-08-19 15:21:52', 'GH');

-- --------------------------------------------------------

--
-- Table structure for table `gh`
--

CREATE TABLE `gh` (
  `Id` int(11) NOT NULL,
  `GH_id` varchar(255) NOT NULL,
  `Participant` varchar(255) NOT NULL,
  `Participant_email` varchar(100) NOT NULL DEFAULT '',
  `Select_currency` varchar(255) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Balance` varchar(255) NOT NULL,
  `GH_date` varchar(255) NOT NULL,
  `Order_date` varchar(100) NOT NULL DEFAULT '',
  `Status` varchar(255) NOT NULL,
  `record_type` varchar(5) NOT NULL DEFAULT 'Main',
  `phid` varchar(254) NOT NULL DEFAULT '',
  `ph_amount` varchar(254) NOT NULL DEFAULT '0',
  `payment_status` varchar(10) NOT NULL DEFAULT 'None',
  `last_block_time` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gh`
--

INSERT INTO `gh` (`Id`, `GH_id`, `Participant`, `Participant_email`, `Select_currency`, `Amount`, `Balance`, `GH_date`, `Order_date`, `Status`, `record_type`, `phid`, `ph_amount`, `payment_status`, `last_block_time`) VALUES
(1, '6579052834', 'khan', 'kkkk@gmail.com', 'USD', '100', '0', '10-09-2019', '10/09/19 11:43:40', 'Processed', 'Main', '519', '100', 'Confirm', '1568268842'),
(2, '9638648117', 'khan', 'kkkk@gmail.com', 'BTC', '1', '0', '10-09-2019', '10/09/19 11:49:07', 'Processed', 'Main', '521', '1', 'Confirm', '1568269167'),
(3, '5504029323', 'Akram', 'akramali121314@gmail.com', 'BTC', '1', '0', '10-09-2019', '10/09/19 11:50:54', 'Processed', 'Main', '524', '1', 'Confirm', '1568269278'),
(4, '7993612749', 'Akram', 'akramali121314@gmail.com', 'USD', '100', '0', '30-09-2019', '30/09/19 12:12:59', 'Processed', 'Main', '528', '100', 'Confirm', '1569998601'),
(5, '8760347503', 'Ayan', 'ayn@gmail.com', 'BTC', '122', '122', '30-09-2019', '30/09/19 12:24:05', 'Orders Created(+)', 'Main', '', '0', 'None', '');

-- --------------------------------------------------------

--
-- Table structure for table `mmmtask`
--

CREATE TABLE `mmmtask` (
  `id` int(11) NOT NULL,
  `Link` varchar(1000) NOT NULL,
  `Link_name` varchar(255) NOT NULL,
  `Task_name` varchar(255) NOT NULL,
  `Task_title` varchar(255) NOT NULL,
  `Task_code` varchar(255) NOT NULL,
  `Task_tag` varchar(255) NOT NULL,
  `Task_date` varchar(255) NOT NULL,
  `Step_1` varchar(1000) NOT NULL,
  `Step_2` varchar(1000) NOT NULL,
  `Step_3` varchar(1000) NOT NULL,
  `Step_4` varchar(1000) NOT NULL,
  `Step_5` varchar(1000) NOT NULL,
  `Step_6` varchar(1000) NOT NULL,
  `Img_1` varchar(1000) NOT NULL,
  `Img_2` varchar(1000) NOT NULL,
  `Img_3` varchar(1000) NOT NULL,
  `Img_4` varchar(1000) NOT NULL,
  `Img_5` varchar(1000) NOT NULL,
  `Img_6` varchar(1000) NOT NULL,
  `Img_7` varchar(1000) NOT NULL,
  `Img_8` varchar(1000) NOT NULL,
  `Img_9` varchar(1000) NOT NULL,
  `Img_10` varchar(1000) NOT NULL,
  `Img_11` varchar(255) NOT NULL,
  `Step_7` varchar(1000) NOT NULL,
  `Step_8` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mmmtask`
--

INSERT INTO `mmmtask` (`id`, `Link`, `Link_name`, `Task_name`, `Task_title`, `Task_code`, `Task_tag`, `Task_date`, `Step_1`, `Step_2`, `Step_3`, `Step_4`, `Step_5`, `Step_6`, `Img_1`, `Img_2`, `Img_3`, `Img_4`, `Img_5`, `Img_6`, `Img_7`, `Img_8`, `Img_9`, `Img_10`, `Img_11`, `Step_7`, `Step_8`) VALUES
(16, 'https://fb.com/', 'Facebook', '#1 Repost a photo \"Together we change the world\" on you page.', 'Facebook', 'fb_1', '#mmm #world #BTC #Dollar', '04/10/19 03:31:32', '1.Post your facebook comment + your mmm global linkand then share tou your facebook wall', '2.Make your original comment, choose on your timeline', '3.Click on time \"Just Now\" to copy the URL your task', '', '', '', '../dash/Taskimg/amazon.PNG', '../dash/Taskimg/', '../dash/Taskimg/biz7.jpg', '../dash/Taskimg/biz2.jpg', '../dash/Taskimg/', '../dash/Taskimg/', '../dash/Taskimg/', '../dash/Taskimg/', '../dash/Taskimg/', '../dash/Taskimg/', '../dash/Taskimg/besttttt.PNG', '', 'copy link above And paste and send');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `Id` int(11) NOT NULL,
  `News_id` int(255) NOT NULL,
  `News_date` varchar(255) NOT NULL,
  `News_title` varchar(255) NOT NULL,
  `News` longtext NOT NULL,
  `regards` varchar(255) NOT NULL,
  `Dialog` varchar(100) NOT NULL DEFAULT 'No',
  `Img` varchar(255) NOT NULL,
  `Guider_mmm` varchar(100) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `News_id`, `News_date`, `News_title`, `News`, `regards`, `Dialog`, `Img`, `Guider_mmm`) VALUES
(1, 0, '02/09/19', 'SIZAWE Community Program', 'ç¤¾åŒºè§„åˆ™ï¼š\r\n\r\n1ï¼šç¬¬ä¸€æ¬¡æä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰æŠ•èµ„é‡‘é¢ï¼š10ç¾Žé‡‘---5000ç¾Žé‡‘ï¼Œåˆ©æ¶¦ï¼š50%/æœˆï¼Œ0--72å°æ—¶ä¹‹å†…åŒ¹é…20%çš„é¢„ä»˜æ¬¾ï¼Œå°¾æ¬¾7--15å¤©å†…åŒ¹é…æ‰“æ¬¾ï¼\r\n2ï¼šç¬¬äºŒæ¬¡æä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰æŠ•èµ„é‡‘é¢ï¼š10ç¾Žé‡‘---2500ç¾Žé‡‘ï¼Œåˆ©æ¶¦ï¼š100%/æœˆï¼Œ0--72å°æ—¶ä¹‹å†…åŒ¹é…10%çš„é¢„ä»˜æ¬¾ï¼Œå°¾æ¬¾7--15å¤©å†…åŒ¹é…æ‰“æ¬¾ï¼\r\n3ï¼šç”³è¯·å¾—åˆ°å¸®åŠ©ï¼ˆæçŽ°ï¼‰ä¹‹å‰å¿…é¡»å…ˆæä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰ï¼Œè€Œä¸”é‡‘é¢å¿…é¡»å¤§äºŽæˆ–ç­‰äºŽä¹‹å‰æŽ’å•çš„é‡‘é¢ï¼Œæ‰“å®Œé¢„ä»˜æ¬¾åŽåˆ©æ¯æ‰å¼€å§‹å¢žé•¿è®¡ç®—ï¼è¶…è¿‡30å¤©ä¸è®¡åˆ©æ¯ï¼\r\n4ï¼šç”³è¯·å¾—åˆ°å¸®åŠ©ï¼ˆæçŽ°ï¼‰ é‡‘é¢ä¸º3000ç¾Žé‡‘/å¤©ï¼Œæœ€å°‘10ç¾Žé‡‘èµ·æï¼æçŽ°åŒ¹é…æ—¶é—´ï¼š24--72å°æ—¶\r\n5ï¼šä¸€äººåªèƒ½æ³¨å†Œä¸€ä¸ªå¸å·ï¼Œä¸¥ç¦å¤šå¸å·æ“ä½œï¼å‘çŽ°å¤šå¸å·æ°¸ä¹…å°å·', 'Best Regards, MMMGLOBAL & CRO Team.', 'No', '', 'No'),
(2, 0, '02/09/19', 'Good News', 'ç¤¾åŒºè§„åˆ™ï¼š\r\n\r\n1ï¼šç¬¬ä¸€æ¬¡æä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰æŠ•èµ„é‡‘é¢ï¼š10ç¾Žé‡‘---5000ç¾Žé‡‘ï¼Œåˆ©æ¶¦ï¼š50%/æœˆï¼Œ0--72å°æ—¶ä¹‹å†…åŒ¹é…20%çš„é¢„ä»˜æ¬¾ï¼Œå°¾æ¬¾7--15å¤©å†…åŒ¹é…æ‰“æ¬¾ï¼\r\n2ï¼šç¬¬äºŒæ¬¡æä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰æŠ•èµ„é‡‘é¢ï¼š10ç¾Žé‡‘---2500ç¾Žé‡‘ï¼Œåˆ©æ¶¦ï¼š100%/æœˆï¼Œ0--72å°æ—¶ä¹‹å†…åŒ¹é…10%çš„é¢„ä»˜æ¬¾ï¼Œå°¾æ¬¾7--15å¤©å†…åŒ¹é…æ‰“æ¬¾ï¼\r\n3ï¼šç”³è¯·å¾—åˆ°å¸®åŠ©ï¼ˆæçŽ°ï¼‰ä¹‹å‰å¿…é¡»å…ˆæä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰ï¼Œè€Œä¸”é‡‘é¢å¿…é¡»å¤§äºŽæˆ–ç­‰äºŽä¹‹å‰æŽ’å•çš„é‡‘é¢ï¼Œæ‰“å®Œé¢„ä»˜æ¬¾åŽåˆ©æ¯æ‰å¼€å§‹å¢žé•¿è®¡ç®—ï¼è¶…è¿‡30å¤©ä¸è®¡åˆ©æ¯ï¼\r\n4ï¼šç”³è¯·å¾—åˆ°å¸®åŠ©ï¼ˆæçŽ°ï¼‰ é‡‘é¢ä¸º3000ç¾Žé‡‘/å¤©ï¼Œæœ€å°‘10ç¾Žé‡‘èµ·æï¼æçŽ°åŒ¹é…æ—¶é—´ï¼š24--72å°æ—¶\r\n5ï¼šä¸€äººåªèƒ½æ³¨å†Œä¸€ä¸ªå¸å·ï¼Œä¸¥ç¦å¤šå¸å·æ“ä½œï¼å‘çŽ°å¤šå¸å·æ°¸ä¹…å°å·', 'Best Regards, MMMGLOBAL & CRO Team.', 'No', '', 'No'),
(3, 0, '02/09/19', 'FRAUDALERT: The Site mmmeu.com does NOT belong to the MMM Community', 'ç¤¾åŒºè§„åˆ™ï¼š\r\n\r\n1ï¼šç¬¬ä¸€æ¬¡æä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰æŠ•èµ„é‡‘é¢ï¼š10ç¾Žé‡‘---5000ç¾Žé‡‘ï¼Œåˆ©æ¶¦ï¼š50%/æœˆï¼Œ0--72å°æ—¶ä¹‹å†…åŒ¹é…20%çš„é¢„ä»˜æ¬¾ï¼Œå°¾æ¬¾7--15å¤©å†…åŒ¹é…æ‰“æ¬¾ï¼\r\n2ï¼šç¬¬äºŒæ¬¡æä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰æŠ•èµ„é‡‘é¢ï¼š10ç¾Žé‡‘---2500ç¾Žé‡‘ï¼Œåˆ©æ¶¦ï¼š100%/æœˆï¼Œ0--72å°æ—¶ä¹‹å†…åŒ¹é…10%çš„é¢„ä»˜æ¬¾ï¼Œå°¾æ¬¾7--15å¤©å†…åŒ¹é…æ‰“æ¬¾ï¼\r\n3ï¼šç”³è¯·å¾—åˆ°å¸®åŠ©ï¼ˆæçŽ°ï¼‰ä¹‹å‰å¿…é¡»å…ˆæä¾›å¸®åŠ©ï¼ˆæŽ’å•ï¼‰ï¼Œè€Œä¸”é‡‘é¢å¿…é¡»å¤§äºŽæˆ–ç­‰äºŽä¹‹å‰æŽ’å•çš„é‡‘é¢ï¼Œæ‰“å®Œé¢„ä»˜æ¬¾åŽåˆ©æ¯æ‰å¼€å§‹å¢žé•¿è®¡ç®—ï¼è¶…è¿‡30å¤©ä¸è®¡åˆ©æ¯ï¼\r\n4ï¼šç”³è¯·å¾—åˆ°å¸®åŠ©ï¼ˆæçŽ°ï¼‰ é‡‘é¢ä¸º3000ç¾Žé‡‘/å¤©ï¼Œæœ€å°‘10ç¾Žé‡‘èµ·æï¼æçŽ°åŒ¹é…æ—¶é—´ï¼š24--72å°æ—¶\r\n5ï¼šä¸€äººåªèƒ½æ³¨å†Œä¸€ä¸ªå¸å·ï¼Œä¸¥ç¦å¤šå¸å·æ“ä½œï¼å‘çŽ°å¤šå¸å·æ°¸ä¹…å°å·', 'Best Regards, MMMGLOBAL & CRO Team.', 'No', '', 'No');

-- --------------------------------------------------------

--
-- Table structure for table `ph`
--

CREATE TABLE `ph` (
  `Id` int(11) NOT NULL,
  `PH_id` varchar(255) NOT NULL DEFAULT '',
  `Marvo_id` varchar(255) NOT NULL DEFAULT '',
  `Order_id` varchar(255) NOT NULL DEFAULT '',
  `Type` varchar(255) NOT NULL DEFAULT '',
  `Select_currency` varchar(255) NOT NULL,
  `Payment_mood` varchar(255) NOT NULL DEFAULT '',
  `Participant` varchar(255) NOT NULL,
  `Participant_email` varchar(255) NOT NULL DEFAULT '',
  `gh_id` varchar(254) DEFAULT NULL,
  `gh_amount` varchar(254) NOT NULL DEFAULT '0',
  `payment_image` varchar(254) NOT NULL DEFAULT ' ',
  `payment_value` varchar(254) NOT NULL DEFAULT '0',
  `payment_currency` varchar(254) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `payment_date` varchar(254) NOT NULL DEFAULT '',
  `payment_remarks` varchar(254) NOT NULL DEFAULT '',
  `payment_status` varchar(10) NOT NULL DEFAULT 'None',
  `Type_c` varchar(255) NOT NULL DEFAULT '',
  `Amount` varchar(255) NOT NULL DEFAULT '',
  `Bonus` varchar(255) NOT NULL DEFAULT '',
  `Growth` varchar(255) NOT NULL DEFAULT '',
  `Balance` varchar(255) NOT NULL DEFAULT '',
  `PH_date` varchar(255) NOT NULL DEFAULT '',
  `Order_date` varchar(100) NOT NULL DEFAULT '',
  `Status` varchar(255) NOT NULL DEFAULT '',
  `record_type` varchar(5) NOT NULL DEFAULT 'Main',
  `last_block_time` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ph`
--

INSERT INTO `ph` (`Id`, `PH_id`, `Marvo_id`, `Order_id`, `Type`, `Select_currency`, `Payment_mood`, `Participant`, `Participant_email`, `gh_id`, `gh_amount`, `payment_image`, `payment_value`, `payment_currency`, `payment_date`, `payment_remarks`, `payment_status`, `Type_c`, `Amount`, `Bonus`, `Growth`, `Balance`, `PH_date`, `Order_date`, `Status`, `record_type`, `last_block_time`) VALUES
(518, '3635835035', '112541055', '', 'Confirm', 'USD', '20%-80%', 'Akram', 'akramali121314@gmail.com', '', '0', '', '0', '', '', '', 'None', 'USD', '20', 'Registration Bonus', '20', '', '10-09-2019', '', '', 'Reg', ''),
(519, '4022146390', '8394579495', '6579052834', 'Confirm', 'USD', '20%-80%', 'Akram', 'akramali121314@gmail.com', '6579052834', '100', 'Images/payment_images/1568096130.jpg', '100', 'USD', '10-09-2019 11:09:30', '', 'Confirm', 'USD', '100', 'MARVO 30%', '100', '0', '10-09-2019', '10/09/19 11:41:35', 'Processed', 'Main', '1568268842'),
(520, '4022146390', '8394579495', '', 'Confirm', '', '', 'MMMGlobal', 'akramali121314@gmail.com', '', '0', '', '0', '', '', '', 'None', 'USD', '100', 'Refferal Bonus', '10', '', '10-09-2019', '', '', 'Bonus', ''),
(521, '8966003183', '9807944511', '9638648117', 'Confirm', 'BTC', '20%-80%', 'Akram', 'akramali121314@gmail.com', '9638648117', '1', 'Images/payment_images/1568096550.jpg', '1', 'BTC', '10-09-2019 11:09:30', '', 'Confirm', 'BTC', '1', 'MARVO 30%', '1', '0', '10-09-2019', '10/09/19 11:48:44', 'Processed', 'Main', '1568269167'),
(522, '8966003183', '9807944511', '', 'Confirm', '', '', 'MMMGlobal', 'akramali121314@gmail.com', '', '0', '', '0', '', '', '', 'None', 'BTC', '1', 'Refferal Bonus', '0.07', '', '10-09-2019', '', '', 'Bonus', ''),
(523, '6033361215', '9048501019', '', 'Confirm', 'BTC', '20%-80%', 'khan', 'kkkk@gmail.com', '', '0', '', '0', '', '', '', 'None', 'BTC', '0.026', 'Registration Bonus', '0.026', '', '10-09-2019', '', '', 'Reg', ''),
(524, '6848268340', '9615940875', '5504029323', 'Confirm', 'BTC', '20%-80%', 'khan', 'kkkk@gmail.com', '5504029323', '1', 'Images/payment_images/1568096942.jpg', '1', 'BTC', '10-09-2019 11:09:02', '', 'Confirm', 'BTC', '1', 'MARVO 30%', '1', '0', '10-09-2019', '10/09/19 11:50:20', 'Processed', 'Main', '1568269278'),
(525, '6848268340', '9615940875', '', 'Confirm', '', '', 'Akram', 'kkkk@gmail.com', '', '0', '', '0', '', '', '', 'None', 'BTC', '1', 'Refferal Bonus', '0.1', '', '10-09-2019', '', '', 'Bonus', ''),
(526, '6848268340', '9615940875', '', 'Confirm', '', '', 'MMMGlobal', 'kkkk@gmail.com', '', '0', '', '0', '', '', '', 'None', 'BTC', '1', 'Guider Bonus', '0.05', '', '10-09-2019', '', '', 'Bonus', ''),
(527, '1544948681', '301601316', '', 'Confirm', 'USD', '20%-80%', 'Ayan', 'ayn@gmail.com', '', '0', '', '0', '', '', '', 'None', 'USD', '20', 'Registration Bonus', '20', '', '30-09-2019', '', '', 'Reg', ''),
(528, '3692285048', '2024109043', '7993612749', 'Confirm', 'USD', '20%-80%', 'Ayan', 'ayn@gmail.com', '7993612749', '100', 'Images/payment_images/1569825851.jpg', '100', 'USD', '30-09-2019 12:09:11', '', 'Confirm', 'USD', '100', 'MARVO 30%', '100', '0', '30-09-2019', '30/09/19 12:12:18', 'Processed', 'Main', '1569998601'),
(529, '3692285048', '2024109043', '', 'Confirm', '', '', 'Akram', 'ayn@gmail.com', '', '0', '', '0', '', '', '', 'None', 'USD', '100', 'Refferal Bonus', '10', '', '30-09-2019', '', '', 'Bonus', ''),
(530, '3692285048', '2024109043', '', 'Confirm', '', '', 'MMMGlobal', 'ayn@gmail.com', '', '0', '', '0', '', '', '', 'None', 'USD', '100', 'Guider Bonus', '5', '', '30-09-2019', '', '', 'Bonus', ''),
(531, '5504029323', '5504029323', '', 'Confirm', 'BTC', '', 'Akram', 'akramali121314@gmail.com', NULL, '1', ' ', '0', '', '', '', 'None', 'BTC', '1', 'Video Bonus', '0.05', '', '30-09-2019 12:18:58', '', '', 'Bonus', '1569998938'),
(532, '2609824063', '461730280', '', 'Unconfirm', 'BTC', '20%-80%', 'raj1919', 'mmmindia@gmail.com', '', '0', '', '0', '', '', '', 'None', 'BTC', '0.026', 'Registration Bonus', '0.026', '', '30-09-2019', '', '', 'Reg', ''),
(533, '5158172497', '1777372524', '6914217443', 'Unconfirm', 'BTC', '20%-80%', 'raj1919', 'mmmindia@gmail.com', '', '0', '', '0', '', '', '', 'None', 'BTC', '1', 'MARVO 30%', '1', '1', '30-09-2019', '30/09/19 12:44:24', 'Orders Created(+)', 'Main', ''),
(534, '5158172497', '1777372524', '', 'Unconfirm', '', '', 'mmmru', 'mmmindia@gmail.com', '', '0', '', '0', '', '', '', 'None', 'BTC', '1', 'Refferal Bonus', '0.1', '', '30-09-2019', '', '', 'Bonus', ''),
(535, '5158172497', '1777372524', '', 'Unconfirm', '', '', 'Akram', 'mmmindia@gmail.com', '', '0', '', '0', '', '', '', 'None', 'BTC', '1', 'Guider Bonus', '0.0001', '', '30-09-2019', '', '', 'Bonus', '');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `User_id` int(255) NOT NULL,
  `Reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `User_name` varchar(255) NOT NULL,
  `Mobile_number` varchar(255) NOT NULL,
  `Country` varchar(255) NOT NULL,
  `E_mail` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Level` varchar(20) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Invite_email` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL DEFAULT 'Member',
  `Indir` varchar(255) NOT NULL,
  `Ph_amount` varchar(255) NOT NULL,
  `Type_c` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`User_id`, `Reg_date`, `User_name`, `Mobile_number`, `Country`, `E_mail`, `Password`, `Level`, `Status`, `Invite_email`, `Position`, `Indir`, `Ph_amount`, `Type_c`) VALUES
(1, '2019-05-21 14:21:56', 'MMMGlobal', '432342342', 'Russia', 'MMMglobal@gmail.com', 'mmmglobal', '10K Guider', 'Active', '', 'Guider', '', '1', 'BTC'),
(2, '2019-05-21 15:05:04', 'Akram', '34342342', 'Denmark', 'akramali121314@gmail.com', 'akramali', '1K MANAGER', 'Active', 'MMMglobal@gmail.com', 'Guider', '', '1', 'BTC'),
(3, '2019-05-21 15:08:11', 'khan', '342342342', 'Reunion', 'kkkk@gmail.com', 'khan1234', '100 MANAGER', 'Active', 'akramali121314@gmail.com', 'Guider', '1', '1', 'BTC'),
(4, '2019-05-30 13:57:44', 'Ayan', '323232243423', 'Jamaica', 'ayn@gmail.com', 'ayankhan', 'Participant', 'Active', 'akramali121314@gmail.com', 'Guider', '1', '100', 'USD'),
(5, '2019-05-30 14:00:50', 'Javed', '34342342', 'Lao', 'javed233@gmail.com', 'javedkhan', 'Participant', 'Block', 'akramali121314@gmail.com', '', '1', '', ''),
(6, '2019-05-30 14:02:28', 'Jonh', '34342342', 'Dominica', 'jonh123@gmail.com', 'jonh12345', 'Participant', 'registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(7, '2019-05-30 14:05:36', 'Ken', '323232243423', 'Cambodia', 'Kenkat89@gmail.com', 'ken123456', 'Participant', 'registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(8, '2019-06-03 12:33:27', 'Roman', '5353453453', 'Kenya', 'Roman12@gmai.com', 'roman123', 'Participant', 'registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(9, '2019-06-03 12:40:36', 'kelly', '353543534', 'Reunion', 'kellysen12@gmail.com', 'kelly123', 'Participant', 'Active', 'kkkk@gmail.com', '', '1', '100', 'USD'),
(10, '2019-06-03 13:32:35', 'Smith', '745645645', 'Oman', 'smith12@gmail.com', 'smith123', 'Participant', 'registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(11, '2019-06-08 14:17:07', 'raj', '3423423423', 'Zambia', 'raj23@gmail.com', 'rajesh123', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(12, '2019-06-08 19:56:59', 'Altaf', '427481724891789412', 'Armenia', 'atalf112@gmail.com', 'kala1234', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(13, '2019-07-24 12:55:25', 'test123', '9828151694', 'Armenia', 'aylkkljljn@gmail.com', '123123123', 'Participant', 'Registrar', 'mmmglobal@gmail.com', '', '6', '', ''),
(14, '2019-07-27 11:19:57', 'test456', '321654798654', 'Austria', 'test456@gmail.com', '123123123', 'Participant', 'Registrar', 'mmmglobal@gmail.com', '', '6', '', ''),
(15, '2019-08-02 10:59:25', 'sen', '34342342', 'East Timor', 'sen123@gmail.com', '12345678', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(16, '2019-08-05 17:27:26', 'rock', '235264373462', 'India', 'rockusa@gmail.com', 'khan1234', 'Participant', 'Registrar', 'MMMglobal@gmail.com', '', '6', '', ''),
(17, '2019-08-06 18:35:57', 'ram', '3587571097947', 'India', 'ram@gmail.com', '123456789', 'Participant', 'Registrar', 'MMMglobal@gmail.com', '', '6', '', ''),
(18, '2019-08-22 10:22:07', 'Show', '32423423', 'Haiti', 'show@gmail.com', '12345678', 'Participant', 'Registrar', 'kkkk@gmail.com', '', '1', '', ''),
(19, '2019-08-22 13:24:23', 'wast', '323232243423', 'Gabon', 'wast@gmail.com', '12345678', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(20, '2019-08-22 13:35:23', 'hobs', '5353453453', 'Fiji', 'hobs123@gmail.com', '98765432', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(21, '2019-08-22 13:45:26', 'ben', '5353453453', 'Kazakhstan', 'benrr@gmail.com', '123456789', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(22, '2019-08-22 14:56:47', 'lava', '423423423', 'Lao', 'lava1234@gmail.com', 'lavalava', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(23, '2019-08-22 15:08:15', 'jemi', '427481724891789412', 'Austria', 'jemi123@gmail.com', '12345678', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(24, '2019-08-23 15:54:03', 'global', '323232243423', 'Falkland Islands', 'global12@gmail.com', '123456789', 'Participant', 'Registrar', 'raj23@gmail.com', '', '1', '', ''),
(25, '2019-08-23 16:16:17', 'biz', '3423423423', 'Gabon', 'bzv12@gmail.com', '123456789', 'Participant', 'Registrar', 'raj23@gmail.com', '', '1', '', ''),
(26, '2019-08-23 16:33:46', 'xyz', '5353453453', 'Saint Kitts and Nevis', 'xyz123@gmail.com', '123456789', 'Participant', 'Registrar', 'raj23@gmail.com', '', '1', '', ''),
(27, '2019-08-23 16:41:28', 'back', '427481724891789412', 'Falkland Islands', 'back9@gmail.com', '123456789', 'Participant', 'Registrar', 'raj23@gmail.com', '', '1', '', ''),
(28, '2019-08-23 16:44:17', 'sazam', '427481724891789412', 'Armenia', 'sazam12@gmail.com', '123456789', 'Participant', 'Registrar', 'raj23@gmail.com', '', '1', '', ''),
(29, '2019-08-23 18:30:06', 'bell', '323232243423', 'Antigua and Barbuda', 'bell123@gmail.com', '123456789', 'Participant', 'Registrar', 'raj23@gmail.com', '', '1', '', ''),
(30, '2019-08-23 18:33:46', 'kken', '323232243423', 'select Country', 'kk12@gmail.com', '121212121212121212', 'Participant', 'Registrar', 'raj23@gmail.com', '', '1', '', ''),
(31, '2019-08-24 12:07:04', 'malina', '34342342', 'Macau', 'malina12@gmail.com', '123456789', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(32, '2019-08-24 13:41:01', 'thomas', '3321312', 'Taiwan', 'thomas12@gmail.com', '123456789', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(33, '2019-08-24 14:05:15', 'jimm', '3423423423', 'Aruba', 'jimm10@gmail.com', '123456789', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(34, '2019-08-24 16:06:02', 'ShaikPanjab', '323232243423', 'Saint Kitts and Nevis', 'shaik12@gmail.com', '123456789', 'Participant', 'Active', 'akramali121314@gmail.com', '', '1', '', ''),
(35, '2019-08-24 16:13:29', 'Tman', '427481724891789412', 'Falkland Islands', 'T20@gmail.com', '123456789', 'Participant', 'Registrar', 'akramali121314@gmail.com', '', '1', '', ''),
(36, '2019-08-24 18:34:56', 'JamesB', '5353453453', 'Falkland Islands', 'Jam12@gmail.com', '123456789', 'Participant', 'Registrar', 'global12@gmail.com', '', '2', '', ''),
(37, '2019-09-26 13:44:02', 'Himan', '323232243423', 'Haiti', 'HIman12@gmail.com', '123456789', 'Participant', 'Active', 'kellysen12@gmail.com', 'Member', '2', '600', 'USD'),
(38, '0000-00-00 00:00:00', 'anc', '3321312', 'Azerbaijan', 'anc@gmail.com', '123456789', 'Participant', 'Active', 'HIman12@gmail.com', 'Member', '3', '100', 'USD'),
(39, '2019-09-28 16:28:25', 'nks', '3321312', 'select Country', 'bjs12@gmail.com', '123456789', 'Participant', 'Active', 'anc@gmail.com', 'Member', '4', '100', 'USD'),
(40, '2019-09-28 16:39:37', 'kj', '5353453453', 'Australia', 'nk12@gmail.com', '123456789', 'Participant', 'Active', 'bjs12@gmail.com', 'Member', '5', '100', 'USD'),
(41, '2019-09-28 16:46:58', 'AZR', '323232243423', 'Aruba', 'azr12@gmail.com', '123456789', 'Participant', 'Registrar', 'ayn@gmail.com', 'Member', '1', '', ''),
(42, '2019-09-28 17:26:13', 'waft', '3321312', 'Azerbaijan', 'waft12@gmail.com', '123456789', 'Participant', 'Active', 'nk12@gmail.com', 'Member', '6', '100', 'USD'),
(43, '2019-09-28 17:32:41', 'bjskdsa', '3423423', 'Australia', 'jhjshfj12@gmail.com', '1234567890', 'Participant', 'Registrar', 'nk12@gmail.com', 'Member', '6', '', ''),
(44, '2019-09-29 10:36:28', 'Dev', '3423423423', 'Armenia', 'Dev12@gmail.com', '123456789', 'Participant', 'Active', 'waft12@gmail.com', 'Member', '7', '100', 'USD'),
(45, '2019-09-10 11:20:00', 'level 8', '3423423423', 'Bahrain', 'level8@gmail.com', '12345678', 'Participant', 'Registrar', 'Dev12@gmail.com', 'Member', '8', '', ''),
(46, '2019-09-10 11:23:24', 'level9', '427481724891789412', 'Denmark', 'level9@gmail.com', '12345678', 'Participant', 'Registrar', 'level8@gmail.com', 'Member', '9', '', ''),
(47, '2019-09-10 11:30:50', 'level10', '323232243423', 'Falkland Islands', 'level10@gmail.com', '123456789', 'Participant', 'Registrar', 'level9@gmail.com', 'Member', '10', '', ''),
(48, '2019-09-10 11:42:40', 'lvele', '3423423423', 'Azerbaijan', 'jbcj@gmail.com', '123456789', 'Participant', 'Registrar', 'level10@gmail.com', 'Member', '11', '', ''),
(49, '2019-09-10 11:44:29', 'mmmstbt', '5353453453', 'Armenia', 'mmmst@gmail.com', '12345678', 'Participant', 'Registrar', 'jbcj@gmail.com', 'Member', '12', '', ''),
(50, '2019-09-10 11:46:47', 'mmmuk', '323232243423', 'Bangladesh', 'mmmuk@gmail.com', '123456789', 'Participant', 'Registrar', 'mmmst@gmail.com', 'Member', '13', '', ''),
(51, '2019-09-10 11:51:15', 'mmmru', '5353453453', 'Andorra', 'mmmrussia@gmail.com', '12345678', 'Participant', 'Registrar', 'mmmuk@gmail.com', 'Member', '14', '', ''),
(52, '2019-09-10 11:53:18', 'raj1919', '3423423423', 'India', 'mmmindia@gmail.com', '123456789', 'Participant', 'Active', 'mmmrussia@gmail.com', 'Member', '15', '1', 'BTC');

-- --------------------------------------------------------

--
-- Table structure for table `testmonials`
--

CREATE TABLE `testmonials` (
  `Id` int(4) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `gh_id` varchar(254) NOT NULL,
  `entrydate` varchar(22) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `TestMsg` varchar(1000) NOT NULL,
  `Msg_status` varchar(3) NOT NULL DEFAULT 'NO',
  `Img` varchar(255) NOT NULL,
  `Video_Ink` varchar(255) NOT NULL,
  `Video_status` varchar(3) NOT NULL DEFAULT 'NO',
  `Accept_msg` varchar(254) NOT NULL DEFAULT '',
  `bonus_check` varchar(3) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'reject'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testmonials`
--

INSERT INTO `testmonials` (`Id`, `User_id`, `gh_id`, `entrydate`, `Amount`, `TestMsg`, `Msg_status`, `Img`, `Video_Ink`, `Video_status`, `Accept_msg`, `bonus_check`, `status`) VALUES
(28, 'ayn@gmail.com', '3358899599', '03-09-2019 04:04:58', '100', 'hiiiiiiiiiiiii', 'NO', '', 'https://youo.com', 'NO', '', 'Yes', 'reject'),
(29, 'kkkk@gmail.com', '708284559', '09-09-2019 04:27:56', '300', 'hiiiiiiiiiiii', 'YES', '', 'https://youo.com', 'YES', 'hiiiiiiiiiiii', 'Yes', 'accept'),
(30, 'akramali121314@gmail.com', '5504029323', '30-09-2019 12:16:45', '1', 'my name yaseen form india.', 'YES', '', '', 'YES', 'my name yaseen form india.', 'No', 'accept');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `Id` int(11) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `User_email` varchar(255) NOT NULL,
  `Ticket_id` varchar(255) NOT NULL,
  `Msg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `Topics` varchar(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Msg` varchar(1000) NOT NULL,
  `Img` varchar(255) NOT NULL,
  `CRO_name` varchar(255) NOT NULL,
  `CRO_reply` varchar(1000) NOT NULL,
  `CRO_date` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`Id`, `User_id`, `User_email`, `Ticket_id`, `Msg_date`, `Topics`, `Title`, `Msg`, `Img`, `CRO_name`, `CRO_reply`, `CRO_date`, `Status`) VALUES
(9, 'Ayan', 'ayn@gmail.com', '916407', '2019-08-03 12:51:12', 'I got help, but the order has been cancelled.', 'PHP', 'cxdvsdvds', 'SupportImg/', 'Watson', 'Wiil be soon new order', '03/08/19 09:08:40', 'no'),
(10, 'Ayan', 'ayn@gmail.com', '689436', '2019-08-03 12:51:38', 'My account was hacked/stolen', 'hackerd', 'sdfsdfsd', 'SupportImg/', 'jonh CRO', 'ok', '03/08/19 09:08:55', 'Yes'),
(11, 'Akram', 'akramali121314@gmail.com', '939890', '2019-08-03 12:52:03', 'My account was hacked/stolen', 'hmtl', 'jhjuchsuifsd', 'SupportImg/', 'can', 'done', '03/08/19 09:08:34', 'Yes'),
(12, 'Roman', 'Roman12@gmai.com', '282055', '2019-08-03 12:52:38', 'The problems with providing help', 'problem', 'xczxczxczxcz', 'SupportImg/BOM elemrnts.PNG', 'kelly', 'bjhjcfs', '03/08/19 09:08:21', 'Yes'),
(13, 'khan', 'kkkk@gmail.com', '492759', '2019-08-03 13:11:42', 'Ð¡hange phone number', 'change', 'jdcugvevvd', '../panel/SupportImg/goals-for-your-business_512861902.jpg', 'hawkings', 'xcxcx', '03/08/19 09:08:13', 'Yes'),
(14, 'khan', 'kkkk@gmail.com', '128745', '2019-09-02 16:51:35', 'Other questions', 'My gh has block pls unblk', 'hsdjhsjkdhasd kskhjdjkashjkdhjks dua', '../panel/SupportImg/', 'Watson', 'ok', '02/09/19 01:09:51', 'Yes'),
(15, 'khan', 'kkkk@gmail.com', '763847', '2019-09-02 17:03:59', 'Sender attached false screenshot of payment.', 'KSK', 'hello my ph is 120 BTC', '../panel/SupportImg/akk.jpg', '', '', '', 'no');

-- --------------------------------------------------------

--
-- Table structure for table `user_task`
--

CREATE TABLE `user_task` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `date_task` varchar(255) NOT NULL,
  `date_time` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `Task_code` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Growth` varchar(100) NOT NULL DEFAULT '0%'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_task`
--

INSERT INTO `user_task` (`id`, `user_name`, `date_task`, `date_time`, `link`, `Task_code`, `Status`, `Growth`) VALUES
(22, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(23, 'akramali121314@gmail.com', '05-10-2019', '05-10-2019 04:24', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(24, 'akramali121314@gmail.com', '06-10-2019', '06-10-2019 04:36', 'hghgjgjgjgj', 'fb_1', 'Confirm', '2.67%'),
(25, 'akramali121314@gmail.com', '07-10-2019', '07-10-2019 04:45', 'uniqueplus.net', 'fb_1', 'Confirm', '2.67%'),
(26, 'akramali121314@gmail.com', '08-10-2019', '08-10-2019 04:48', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(27, 'akramali121314@gmail.com', '09-10-2019', '09-10-2019 05:10', 'hghjgjgjgjgj', 'fb_1', 'Confirm', '2.67%'),
(28, 'akramali121314@gmail.com', '10-10-2019', '10-10-2019 05:14', 'gyftfgdfg', 'fb_1', 'Confirm', '2.67%'),
(29, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(30, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(31, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(32, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(33, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(34, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(35, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(36, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(37, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(38, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(39, 'akramali121314@gmail.com', '09-09-2019', '09-09-2019 10:23', 'gfhdfgfdgdfgdfhdfgd', 'fb_1', 'Confirm', '2.67%'),
(40, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(41, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(42, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(43, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(44, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(45, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(46, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(47, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(48, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(49, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_1', 'Confirm', '2.67%'),
(50, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_3', 'Confirm', '2.67%'),
(51, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_3', 'Confirm', '2.67%'),
(52, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_3', 'Confirm', '2.67%'),
(53, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_3', 'Confirm', '2.67%'),
(54, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_3', 'Confirm', '2.67%'),
(55, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_3', 'Confirm', '2.67%'),
(56, 'akramali121314@gmail.com', '04-10-2019', '04-10-2019 03:51', 'http://localhost/dash/mmm%20task.php?id=4', 'fb_3', 'Confirm', '2.67%'),
(57, 'kellysen12@gmail.com', '30-09-2019', '30-09-2019 12:29', 'kelly123SEGHWSEHSHS', 'fb_1', 'Confirm', '0%');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `chattings`
--
ALTER TABLE `chattings`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `gh`
--
ALTER TABLE `gh`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `mmmtask`
--
ALTER TABLE `mmmtask`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ph`
--
ALTER TABLE `ph`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`User_id`);

--
-- Indexes for table `testmonials`
--
ALTER TABLE `testmonials`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user_task`
--
ALTER TABLE `user_task`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chattings`
--
ALTER TABLE `chattings`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `gh`
--
ALTER TABLE `gh`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `mmmtask`
--
ALTER TABLE `mmmtask`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ph`
--
ALTER TABLE `ph`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=536;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `User_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `testmonials`
--
ALTER TABLE `testmonials`
  MODIFY `Id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user_task`
--
ALTER TABLE `user_task`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
