-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2018 at 03:29 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school_dcis_mahbub`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `AboutID` int(5) NOT NULL,
  `AboutName` varchar(55) NOT NULL,
  `AboutDesignation` varchar(55) NOT NULL,
  `AboutBody` longtext NOT NULL,
  `AboutMission` longtext NOT NULL,
  `AboutVission` longtext NOT NULL,
  `AboutStatus` int(2) NOT NULL,
  `Created` varchar(32) NOT NULL,
  `Modified` varchar(32) NOT NULL,
  `UserName` varchar(55) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `AboutBangla` int(2) NOT NULL,
  `AboutEnglish` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`AboutID`, `AboutName`, `AboutDesignation`, `AboutBody`, `AboutMission`, `AboutVission`, `AboutStatus`, `Created`, `Modified`, `UserName`, `Image`, `AboutBangla`, `AboutEnglish`) VALUES
(5, 'আব্দুর রাজ্জাক স্কুল অ্যান্ড কলেজ', 'এই প্রতিষ্ঠানের লক্ষ্য ও উদ্দেশ্য হচ্ছে ছাত্র/ছাত্রীদের', '<p><span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">শিক্ষানুরাগী</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">আব্দুর</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">রাজ্জাক</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">নিজের</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">আবাসস্থল</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">ঢাকার</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">বনশ্রীতে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">২০০৮</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">সালে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">প্রতিষ্ঠা</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">করেছেন</span> &lsquo;<span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">আব্দুর</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">রাজ্জাক</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">স্কুল</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">অ্যান্ড</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">কলেজ।</span>&rsquo; <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">কোমলমতি</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">সোনামণিদের</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">কথা</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">চিন্তা</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">করে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">প্রতিষ্ঠানটি</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">গড়ে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">উঠলেও</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">এর</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">কার্যক্রম</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">পর্যায়ক্রমে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">যেমন</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">বিস্তৃতি</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">ঘটেছে</span>, <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">তেমনি</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">এটি</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">এখন</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">কিশোর</span>&nbsp; <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">তরুণ</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">শিক্ষার্থীদেরও</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">প্রিয়</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">প্রতিষ্ঠান।</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">কারণ</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">স্কুলের</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">সঙ্গে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">এটির</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">নতুন</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">মাত্রা</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">সংযোজিত</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">হয়েছে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">কলেজ।</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">আধুনিক</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">ও</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">সময়োপযোগী</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">শিক্ষাপ্রতিষ্ঠান</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">হিসেবে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">এটি</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">এখন</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">সুপরিচিত।</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">মেধাবী</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">ও</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">দক্ষ</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">শিক্ষকেরা</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">যেখানে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">আন্তরিকভাবে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">পাঠ্য</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">বিষয়</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">ছাড়াও</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">শিল্প</span>-<span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">সাহিত্য</span>-<span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">সংস্কৃতিমনা</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">করে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">গড়ে</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">তোলেন</span> <span style=\"font-family:&quot;Nirmala UI&quot;,sans-serif\">শিক্ষার্থীদের।</span></p>\r\n\r\n<p>&nbsp;</p>', '<p>এই প্রতিষ্ঠানের লক্ষ্য ও উদ্দেশ্য হচ্ছে ছাত্র/ছাত্রীদের&nbsp; বা সামগ্রিক শিক্ষা প্রদান করা। খেলাধুলা, নানাবিধ সামাজিক ও সাংস্কৃতিক কর্মকান্ডের মাধ্যমে শিক্ষার্থীর সুপ্ত প্রতিভা বিকশিত করা এবং চরিত্র গঠন ও নেতৃত্ব বিকাশের গুণাবলী অর্জনের উপযোগী করে গড়ে তোলা। প্রতিষ্ঠানের আরেকটি অনন্য বৈশিষ্ট্য হচ্ছে শিক্ষার্থীদের কাছ থেকে প্রাপ্ত সমুদয় অর্থ প্রতিষ্ঠানের কল্যাণেই ব্যয় করা হয়।</p>', '', 1, '19-08-2018 01:06:23', '', '1', '', 1, 2),
(7, 'eZ©gv‡b RvZxq', 'eZ©gv‡b RvZxq', '<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:SutonnyMJ\">eZ&copy;gv&Dagger;b RvZxq KvwiKzjv&Dagger;g evsjv I Bswjk fvm&copy;&Dagger;b &dagger;c&oslash;-M&Ouml;&aelig;c &dagger;_&Dagger;K &Oslash;v`k &dagger;k&ordf;wY ch&copy;&scaron;&Iacute; cvV`vb Kvh&copy;&micro;g Pj&Dagger;Q| Avmyb GB &cedil;YMZ wk&para;v we&macr;&Iacute;vi wec&oslash;&Dagger;e AskM&Ouml;nY K&Dagger;i Avgv&Dagger;`i&Dagger;K mnvqZv Ki&aelig;b| gnvb m&bdquo;w&oacute;KZ&copy;v Avgv&Dagger;`i mevB&Dagger;K &dagger;ndvRZ Ki&aelig;b| Avwgb|</span></span></p>', '<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:SutonnyMJ\">eZ&copy;gv&Dagger;b RvZxq KvwiKzjv&Dagger;g evsjv I Bswjk fvm&copy;&Dagger;b &dagger;c&oslash;-M&Ouml;&aelig;c &dagger;_&Dagger;K &Oslash;v`k &dagger;k&ordf;wY ch&copy;&scaron;&Iacute; cvV`vb Kvh&copy;&micro;g Pj&Dagger;Q| Avmyb GB &cedil;YMZ wk&para;v we&macr;&Iacute;vi wec&oslash;&Dagger;e AskM&Ouml;nY K&Dagger;i Avgv&Dagger;`i&Dagger;K mnvqZv Ki&aelig;b| gnvb m&bdquo;w&oacute;KZ&copy;v Avgv&Dagger;`i mevB&Dagger;K &dagger;ndvRZ Ki&aelig;b| Avwgb|</span></span></p>', '<p style=\"text-align:justify\"><span style=\"font-size:12.0pt\"><span style=\"font-family:SutonnyMJ\">eZ&copy;gv&Dagger;b RvZxq KvwiKzjv&Dagger;g evsjv I Bswjk fvm&copy;&Dagger;b &dagger;c&oslash;-M&Ouml;&aelig;c &dagger;_&Dagger;K &Oslash;v`k &dagger;k&ordf;wY ch&copy;&scaron;&Iacute; cvV`vb Kvh&copy;&micro;g Pj&Dagger;Q| Avmyb GB &cedil;YMZ wk&para;v we&macr;&Iacute;vi wec&oslash;&Dagger;e AskM&Ouml;nY K&Dagger;i Avgv&Dagger;`i&Dagger;K mnvqZv Ki&aelig;b| gnvb m&bdquo;w&oacute;KZ&copy;v Avgv&Dagger;`i mevB&Dagger;K &dagger;ndvRZ Ki&aelig;b| Avwgb|</span></span></p>', 1, '19-08-2018 12:47:06', '', '1', '', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_transaction`
--

CREATE TABLE `tbl_account_transaction` (
  `account_trn_ID` int(11) NOT NULL,
  `account_trn_Student_ID` int(11) NOT NULL,
  `account_Medium_ID` int(5) NOT NULL,
  `account_Shift_ID` int(5) NOT NULL,
  `account_Class_ID` int(11) NOT NULL,
  `account_trn_Invoice_number` varchar(20) NOT NULL,
  `account_trn_Invoice_type` varchar(20) NOT NULL,
  `account_trn_Amount` varchar(20) NOT NULL,
  `account_trn_payment_amount` varchar(20) NOT NULL,
  `account_trn_collection_date` varchar(20) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `account_trn_Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account_transaction`
--

INSERT INTO `tbl_account_transaction` (`account_trn_ID`, `account_trn_Student_ID`, `account_Medium_ID`, `account_Shift_ID`, `account_Class_ID`, `account_trn_Invoice_number`, `account_trn_Invoice_type`, `account_trn_Amount`, `account_trn_payment_amount`, `account_trn_collection_date`, `Created`, `Modified`, `account_trn_Status`) VALUES
(1, 201831698, 0, 0, 1, '87554', '1', '1100.00', '1000', '19-04-2018', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 2),
(2, 201825763, 0, 0, 1, '87554', '1', '1100.00', '1100.00', '19-04-2018', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(3, 20181676, 0, 0, 1, '87554', '1', '1100.00', '1100.00', '19-04-2018', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(4, 201823196, 0, 0, 1, '87554', '1', '1100.00', '1100.00', '19-04-2018', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(5, 112018, 0, 0, 1, '87554', '1', '1100.00', '1100.00', '19-04-2018', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(6, 112019, 0, 0, 1, '87554', '1', '1100.00', '1100.00', '19-04-2018', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(7, 1001, 0, 0, 1, '123', '1', '2250.00', '2250.00', '10-06-2018', '10-06-2018 11:52:53', '', 2),
(8, 1002, 0, 0, 1, '123', '1', '2250.00', '2250.00', '10-06-2018', '10-06-2018 11:52:53', '', 2),
(9, 1004, 0, 0, 1, '123', '1', '2250.00', '2200', '10-06-2018', '10-06-2018 11:52:53', '10-06-2018 11:54:31', 2),
(10, 2007, 0, 0, 1, '123', '1', '2250.00', '2250.00', '10-06-2018', '10-06-2018 11:52:53', '', 2),
(11, 2009, 0, 0, 1, '123', '1', '2250.00', '2250.00', '10-06-2018', '10-06-2018 11:52:53', '', 2),
(12, 2010, 0, 0, 1, '123', '1', '2250.00', '2250.00', '10-06-2018', '10-06-2018 11:52:53', '', 2),
(13, 5002, 0, 0, 5, '54534', '3', '1280.00', '1280.00', '12-06-2018', '12-06-2018 11:43:54', '12-06-2018 11:55:48', 2),
(14, 5003, 0, 0, 5, '54534', '3', '1280.00', '1280.00', '12-06-2018', '12-06-2018 11:43:55', '12-06-2018 11:52:50', 2),
(15, 5004, 0, 0, 5, '54534', '3', '1280.00', '1280.00', '12-06-2018', '12-06-2018 11:43:55', '12-06-2018 11:52:50', 2),
(16, 1001, 1, 1, 1, '0123456', '1', '3000.00', '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2),
(17, 1002, 1, 1, 1, '0123456', '1', '3000.00', '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2),
(18, 1004, 1, 1, 1, '0123456', '1', '3000.00', '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2),
(19, 2007, 1, 1, 1, '0123456', '1', '3000.00', '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2),
(20, 2009, 1, 1, 1, '0123456', '1', '3000.00', '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2),
(21, 2010, 1, 1, 1, '0123456', '1', '3000.00', '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2),
(22, 20170018, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(23, 20170019, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(24, 20170248, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(25, 20170330, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(26, 20170030, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(27, 20170028, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(28, 20170039, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(29, 20170037, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(30, 20170022, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(31, 20170032, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(32, 1002, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(33, 20170250, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(34, 20170257, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(35, 20170251, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(36, 20170252, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(37, 20170253, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(38, 1004, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(39, 20170262, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(40, 20170256, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(41, 20170038, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(42, 20170031, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(43, 20170024, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(44, 20170017, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(45, 20170332, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(46, 20170021, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(47, 20170333, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(48, 20170259, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(49, 20170334, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(50, 20170027, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(51, 20170023, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(52, 20170029, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(53, 20170036, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(54, 20170261, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(55, 20170255, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(56, 20170263, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(57, 20170264, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(58, 20170265, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(59, 20170266, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(60, 20170267, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(61, 20170272, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(62, 20170303, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2),
(63, 20170331, 1, 1, 1, '123', '1', '2000.00', '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_addfee`
--

CREATE TABLE `tbl_addfee` (
  `Add_fee_ID` int(11) NOT NULL,
  `Add_fee_Name` varchar(100) NOT NULL,
  `Add_fee_Status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_addfee`
--

INSERT INTO `tbl_addfee` (`Add_fee_ID`, `Add_fee_Name`, `Add_fee_Status`, `Created`, `Modified`) VALUES
(1, 'Tuition Fee', 1, '', ''),
(2, 'School Uniforms', 1, '', ''),
(3, 'Activities / Club Fees', 1, '', ''),
(4, 'Medical Insurance ', 1, '', ''),
(5, 'Tuition Fee', 1, '', ''),
(6, 'Registration Fee', 1, '', ''),
(7, 'Health Care', 1, '', ''),
(9, 'Coaching Fees', 1, '', ''),
(10, 'T C Fee', 1, '', ''),
(11, 'Monthly Fee', 1, '', ''),
(12, 'Day Care Fees', 1, '', ''),
(13, 'New Admission', 1, '', ''),
(14, 'Form Filup Fee', 1, '', ''),
(15, 'special Coaching Fees', 1, '', ''),
(16, 'Development Fee', 1, '', ''),
(17, 'Annual Sports & Culture Fee', 1, '', ''),
(18, 'Genarator Fee', 1, '', ''),
(19, 'ICT Fee', 1, '', ''),
(20, 'Dairy Fee', 1, '', ''),
(21, 'ID Card', 1, '', ''),
(22, 'Selabus', 1, '', ''),
(23, 'Previus Due', 1, '', ''),
(24, 'Re Admission Fees', 1, '', ''),
(25, 'Yearly Exam', 1, '', ''),
(26, 'Form Filup', 1, '', ''),
(27, 'Absent Fine', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book_category`
--

CREATE TABLE `tbl_book_category` (
  `Book_cat_ID` int(11) NOT NULL,
  `Book_cat_Name` varchar(255) NOT NULL,
  `Book_cat_Status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_book_category`
--

INSERT INTO `tbl_book_category` (`Book_cat_ID`, `Book_cat_Name`, `Book_cat_Status`, `Created`, `Modified`) VALUES
(1, 'Science fiction.', 1, '', ''),
(2, 'Drama', 1, '', ''),
(3, 'Action and Adventure.', 1, '', ''),
(4, 'Romance.', 1, '', ''),
(5, 'Horror.', 1, '', ''),
(6, 'children\'s fiction,', 1, '', ''),
(7, 'classic literary fiction ', 1, '', ''),
(8, 'historical fiction', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class`
--

CREATE TABLE `tbl_class` (
  `Class_ID` int(11) NOT NULL,
  `Class_Name` varchar(50) NOT NULL,
  `Class_teacher_ID` int(11) NOT NULL,
  `Class_subject_ID` int(11) NOT NULL,
  `Class_Status` tinyint(3) NOT NULL DEFAULT '1',
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class`
--

INSERT INTO `tbl_class` (`Class_ID`, `Class_Name`, `Class_teacher_ID`, `Class_subject_ID`, `Class_Status`, `Created`, `Modified`) VALUES
(1, 'Play', 0, 0, 1, '', ''),
(2, 'Nursery', 0, 0, 1, '', ''),
(3, 'Junior One', 0, 0, 1, '', ''),
(4, 'One', 0, 0, 1, '', ''),
(5, 'Two', 0, 0, 1, '', ''),
(6, 'Three', 0, 0, 1, '', ''),
(7, 'Four', 0, 0, 1, '', ''),
(8, 'Five', 0, 0, 1, '', ''),
(9, 'Six', 0, 0, 1, '', ''),
(10, 'Seven', 0, 0, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_classtime`
--

CREATE TABLE `tbl_classtime` (
  `ClassTime_ID` int(5) NOT NULL,
  `ClassTime_Name` varchar(55) NOT NULL,
  `ClassTime_Status` int(5) NOT NULL,
  `Created` varchar(32) NOT NULL,
  `Modified` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_classtime`
--

INSERT INTO `tbl_classtime` (`ClassTime_ID`, `ClassTime_Name`, `ClassTime_Status`, `Created`, `Modified`) VALUES
(1, '10 AM', 1, '', ''),
(2, '11 AM', 1, '', ''),
(3, '12 AM', 1, '', ''),
(4, '1 PM', 1, '', ''),
(5, '2 PM', 1, '', ''),
(6, '3 PM', 1, '', ''),
(7, '4 PM', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `ContactID` int(5) NOT NULL,
  `MobileNo` varchar(55) NOT NULL,
  `TelephoneNo` varchar(55) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Website` varchar(55) NOT NULL,
  `ContactTitle` varchar(255) NOT NULL,
  `Image` varchar(55) NOT NULL,
  `Address1` varchar(55) NOT NULL,
  `Address2` varchar(55) NOT NULL,
  `FacebookLink` varchar(255) NOT NULL,
  `TwitterLink` int(11) NOT NULL,
  `UserName` varchar(55) NOT NULL,
  `HeaderTitle` varchar(55) NOT NULL,
  `YouTubeLink` varchar(255) NOT NULL,
  `ContactStatus` int(5) NOT NULL,
  `AddLink1` varchar(55) NOT NULL,
  `AddLink2` varchar(55) NOT NULL,
  `Created` varchar(55) NOT NULL,
  `Modifed` varchar(55) NOT NULL,
  `ExtraInfo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`ContactID`, `MobileNo`, `TelephoneNo`, `Email`, `Website`, `ContactTitle`, `Image`, `Address1`, `Address2`, `FacebookLink`, `TwitterLink`, `UserName`, `HeaderTitle`, `YouTubeLink`, `ContactStatus`, `AddLink1`, `AddLink2`, `Created`, `Modifed`, `ExtraInfo`) VALUES
(1, '01749717065', '89205367', 'demoemail@gmail.com', 'http://localhost/ctl_school/', '', '', '1/6/1 Tolar Bagh, Mirpur-1, Dhaka-1216', '1/6/1 Tolar Bagh, Mirpur-1, Dhaka-1217', 'https://www.facebook.com/', 0, '1', '', 'https://www.youtube.com/', 1, '', '', '29-04-2018 14:02:01', '', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departments`
--

CREATE TABLE `tbl_departments` (
  `id` int(11) NOT NULL,
  `department` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `d_order` int(11) NOT NULL,
  `created` varchar(20) NOT NULL,
  `modified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_departments`
--

INSERT INTO `tbl_departments` (`id`, `department`, `status`, `d_order`, `created`, `modified`) VALUES
(5, 'CZM', '1', 10, '15-06-2017 12:27:02', '17-06-2017 13:47:43'),
(6, 'Livelihood Development', '1', 5, '15-06-2017 12:31:17', '17-06-2017 13:48:09'),
(8, 'Finance & Accounts', '1', 4, '15-06-2017 14:20:49', '17-06-2017 13:48:38'),
(9, 'Monitoring & Evaluation', '1', 2, '15-06-2017 14:21:20', '19-12-2017 12:54:58'),
(10, 'PR & Corporate Affairs', '1', 1, '15-06-2017 14:21:50', '17-06-2017 13:50:08'),
(11, 'Highter Eduction & Vocational Training', '1', 7, '15-06-2017 14:22:16', '17-06-2017 13:50:27'),
(12, 'Primary Education', '1', 8, '15-06-2017 14:22:46', '17-06-2017 13:50:40'),
(13, 'Healthcare & Emergency Support', '1', 6, '15-06-2017 14:28:14', '17-06-2017 13:51:10'),
(14, 'Human Resource Management', '1', 3, '15-06-2017 14:29:34', '17-06-2017 13:49:36'),
(15, 'Research & Training', '1', 9, '17-06-2017 13:47:11', '17-06-2017 13:47:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_depart_desig_notice`
--

CREATE TABLE `tbl_depart_desig_notice` (
  `depart_desg_id` int(11) NOT NULL,
  `notice_publish_id` int(11) NOT NULL,
  `notice_view_type` tinyint(4) NOT NULL COMMENT '1:all, 2:department, 3:designation',
  `depart_or_desig` int(11) DEFAULT NULL,
  `created` varchar(50) NOT NULL,
  `modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_depart_desig_notice`
--

INSERT INTO `tbl_depart_desig_notice` (`depart_desg_id`, `notice_publish_id`, `notice_view_type`, `depart_or_desig`, `created`, `modified`) VALUES
(1, 3, 2, 2, '09-04-2018 18:37:56', '09-04-2018 18:37:56'),
(2, 3, 2, 5, '09-04-2018 18:37:56', '09-04-2018 18:37:56'),
(3, 3, 2, 10, '09-04-2018 18:37:56', '09-04-2018 18:37:56'),
(4, 4, 1, NULL, '28-08-2018 16:21:49', '28-08-2018 16:21:49'),
(5, 5, 1, NULL, '28-08-2018 17:29:54', '28-08-2018 17:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designation`
--

CREATE TABLE `tbl_designation` (
  `DesignationID` int(11) NOT NULL,
  `DesignationName` varchar(100) NOT NULL,
  `DesignationStatus` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_designation`
--

INSERT INTO `tbl_designation` (`DesignationID`, `DesignationName`, `DesignationStatus`, `Created`, `Modified`) VALUES
(1, 'অধ্যক্ষ', 1, '30-08-2018 19:42:55', ''),
(2, 'উপাধ্যক্ষ', 1, '30-08-2018 19:43:08', ''),
(3, 'সিনিয়র শিক্ষক', 1, '30-08-2018 19:43:20', ''),
(4, 'শিক্ষক', 1, '30-08-2018 19:43:31', ''),
(5, 'সহকারী শিক্ষক', 1, '30-08-2018 19:43:41', ''),
(6, 'সহ-ব্যবস্থাপক (প্রশাসন)', 1, '30-08-2018 19:43:50', ''),
(7, 'কম্পিউটার অপারেটর', 1, '30-08-2018 19:44:01', '30-08-2018 19:44:31'),
(8, 'সেবিকা', 1, '30-08-2018 19:44:43', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_designations`
--

CREATE TABLE `tbl_designations` (
  `id` int(11) NOT NULL,
  `modified` varchar(20) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_designations`
--

INSERT INTO `tbl_designations` (`id`, `modified`, `designation`, `status`, `created`) VALUES
(3, '05/27/2017 16:45:33', 'CEO', '1', '05/27/2017 16:45:33'),
(8, '05/29/2017 14:23:03', 'Manager', '1', '05/29/2017 14:23:03'),
(9, '15-06-2017 12:34:28', 'HOO', '1', '15-06-2017 12:34:28'),
(10, '15-06-2017 12:34:36', 'General Manager', '1', '15-06-2017 12:34:36'),
(11, '15-06-2017 13:37:56', 'Asst. General Manager ', '1', '15-06-2017 13:37:56'),
(12, '15-06-2017 13:38:20', 'Deputy Manager', '1', '15-06-2017 13:38:20'),
(13, '15-06-2017 13:39:06', 'Asst. Manager', '1', '15-06-2017 13:39:06'),
(14, '15-06-2017 13:39:49', 'Administrative Officer', '1', '15-06-2017 13:39:49'),
(15, '15-06-2017 13:40:46', 'Technical Officer', '1', '15-06-2017 13:40:46'),
(16, '15-06-2017 13:41:14', 'Driver', '1', '15-06-2017 13:41:14'),
(17, '15-06-2017 13:41:38', 'Office Assistant', '1', '15-06-2017 13:41:38'),
(18, '15-06-2017 14:49:44', 'Deputy General Manager', '1', '15-06-2017 14:49:44'),
(19, '17-06-2017 13:35:48', 'Program Support Officer', '1', '17-06-2017 13:35:48'),
(20, '17-06-2017 13:36:07', 'Health Coordinator', '1', '17-06-2017 13:36:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `DISID` int(11) NOT NULL,
  `DivisionID` int(11) NOT NULL,
  `DistrictName` varchar(255) NOT NULL,
  `ActiveStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_division`
--

CREATE TABLE `tbl_division` (
  `DIVID` int(11) NOT NULL,
  `DivisionName` varchar(255) NOT NULL,
  `ActiveStatus` int(11) NOT NULL COMMENT '0 = NO, 1 = Yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_division`
--

INSERT INTO `tbl_division` (`DIVID`, `DivisionName`, `ActiveStatus`) VALUES
(1, 'Rajshahi', 1),
(2, 'Dhaka', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_routine`
--

CREATE TABLE `tbl_exam_routine` (
  `Exam_routine_ID` int(5) NOT NULL,
  `Exam_routine_UNQ_ID` varchar(35) NOT NULL,
  `Exam_routine_Class_ID` varchar(5) NOT NULL,
  `Exam_routine_Section_ID` varchar(5) NOT NULL,
  `Exam_routine_Medium_ID` varchar(5) NOT NULL,
  `Exam_routine_Shift_ID` varchar(5) NOT NULL,
  `Exam_routine_Group_ID` varchar(5) NOT NULL,
  `Exam_routine_Subject_Name` varchar(32) NOT NULL,
  `Exam_routine_Subject_Code` varchar(32) NOT NULL,
  `Exam_routine_Subject_Status` int(5) NOT NULL,
  `Exam_routine_Exam_Date` varchar(32) NOT NULL,
  `Exam_routine_Exam_Day` varchar(32) NOT NULL,
  `Exam_routine_Exam_Start_Time` varchar(32) NOT NULL,
  `Exam_routine_Exam_End_Time` varchar(32) NOT NULL,
  `Exam_routine_Invigilator_Name` varchar(52) NOT NULL,
  `Exam_routine_Room_Name` varchar(10) NOT NULL,
  `Created` varchar(32) NOT NULL,
  `Modified` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam_routine`
--

INSERT INTO `tbl_exam_routine` (`Exam_routine_ID`, `Exam_routine_UNQ_ID`, `Exam_routine_Class_ID`, `Exam_routine_Section_ID`, `Exam_routine_Medium_ID`, `Exam_routine_Shift_ID`, `Exam_routine_Group_ID`, `Exam_routine_Subject_Name`, `Exam_routine_Subject_Code`, `Exam_routine_Subject_Status`, `Exam_routine_Exam_Date`, `Exam_routine_Exam_Day`, `Exam_routine_Exam_Start_Time`, `Exam_routine_Exam_End_Time`, `Exam_routine_Invigilator_Name`, `Exam_routine_Room_Name`, `Created`, `Modified`) VALUES
(1, '1', '1', '1', '1', '1', '0', 'English', '101', 0, '2018/04/21', 'Saturday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:32:25', ''),
(2, '1', '1', '1', '1', '1', '0', 'Bangla', '102', 0, '2018/04/23', 'Monday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:32:25', ''),
(3, '1', '1', '2', '1', '1', '0', 'Mathematics', '103', 0, '2018/04/25', 'Wednesday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:32:26', ''),
(4, '1', '1', '1', '1', '1', '0', 'Science', '110', 0, '2018/04/26', 'Thusday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:32:26', ''),
(5, '1', '1', '1', '1', '1', '0', 'Religion', '105', 0, '2018/04/29', 'Saturday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:32:26', ''),
(6, '2', '1', '1', '1', '1', '0', 'English', '101', 0, '2018/04/21', 'Saturday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:34:05', ''),
(7, '2', '1', '1', '1', '1', '0', 'Bangla', '102', 0, '2018/04/23', 'Monday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:34:05', ''),
(8, '2', '1', '1', '1', '1', '0', 'Science', '110', 0, '2018/04/25', 'Wednesday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:34:05', ''),
(9, '2', '1', '1', '1', '1', '0', 'Religion', '105', 0, '2018/04/26', 'Thusday', '10.00', '12.00', 'Mahbub', '101', '29-04-2018 17:34:05', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_exam_term`
--

CREATE TABLE `tbl_exam_term` (
  `Exam_term_ID` int(11) NOT NULL,
  `Exam_term_Name` varchar(100) NOT NULL,
  `Exam_term_Status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `Exam_term_Name_Result` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_exam_term`
--

INSERT INTO `tbl_exam_term` (`Exam_term_ID`, `Exam_term_Name`, `Exam_term_Status`, `Created`, `Modified`, `Exam_term_Name_Result`) VALUES
(1, '1st Term Exam - 2018', 1, '', '', '1st Term Exam Marks Sheet- 2018'),
(2, '2nd Term Exam - 2018', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense`
--

CREATE TABLE `tbl_expense` (
  `Expense_ID` int(11) NOT NULL,
  `Expense_Amount` varchar(20) NOT NULL,
  `Expense_Date` varchar(20) NOT NULL,
  `Expense_cat_ID` int(11) NOT NULL,
  `Expense_notes` varchar(255) NOT NULL,
  `Expense_By_ID` int(11) NOT NULL,
  `Expense_Status` tinyint(3) NOT NULL DEFAULT '1',
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_expense`
--

INSERT INTO `tbl_expense` (`Expense_ID`, `Expense_Amount`, `Expense_Date`, `Expense_cat_ID`, `Expense_notes`, `Expense_By_ID`, `Expense_Status`, `Created`, `Modified`) VALUES
(3, '200', '09-04-2018', 5, 'dgdfgfdg', 0, 1, '09-04-2018 14:36:37', ''),
(4, '500', '09-04-2018', 7, 'dsfdsfdsf', 0, 1, '09-04-2018 14:37:40', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expense_cat`
--

CREATE TABLE `tbl_expense_cat` (
  `expense_cat_ID` int(11) NOT NULL,
  `expense_cat_Name` varchar(255) NOT NULL,
  `expense_cat_Status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_expense_cat`
--

INSERT INTO `tbl_expense_cat` (`expense_cat_ID`, `expense_cat_Name`, `expense_cat_Status`, `Created`, `Modified`) VALUES
(1, 'Room & Board', 1, '', ''),
(2, 'Rent', 1, '', ''),
(3, 'Utilities', 1, '', ''),
(4, 'Personal', 1, '', ''),
(5, 'Health/Medical Insurance', 1, '', ''),
(6, 'Transportation', 1, '', ''),
(7, 'Books', 1, '', ''),
(8, 'Others', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `FooterID` int(5) NOT NULL,
  `MobileNo` varchar(32) NOT NULL,
  `TelephoneNo` varchar(32) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `FacebookLink` varchar(100) NOT NULL,
  `TwitterLink` varchar(100) NOT NULL,
  `AddLink1` varchar(100) NOT NULL,
  `AddLink2` varchar(100) NOT NULL,
  `ExtraInfo` varchar(100) NOT NULL,
  `Created` varchar(100) NOT NULL,
  `Modified` varchar(100) NOT NULL,
  `FooterStatus` int(2) NOT NULL,
  `YouTubeLink` varchar(100) NOT NULL,
  `UserName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`FooterID`, `MobileNo`, `TelephoneNo`, `Email`, `Website`, `Image`, `Address1`, `Address2`, `FacebookLink`, `TwitterLink`, `AddLink1`, `AddLink2`, `ExtraInfo`, `Created`, `Modified`, `FooterStatus`, `YouTubeLink`, `UserName`) VALUES
(1, '০১৭৪১৪৬৩৮৭১', '৮৩৯৬২৯৫', 'info.arsc2014@gmail.com', '', '', ' বাসা # ৩৬, রাস্তা # ৩, বনশ্রী, ঢাকা-১২১৯ ', 'বাসা # ৩৬, রাস্তা # ৩, বনশ্রী, ঢাকা-১২১৯', '', '', '', '', '', '29-04-2018 14:00:52', '28-08-2018 12:17:48', 1, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `Group_ID` int(11) NOT NULL,
  `Group_Name` varchar(100) NOT NULL,
  `Group_Class_ID` int(11) NOT NULL,
  `Group_Section_ID` int(11) NOT NULL,
  `Group_status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`Group_ID`, `Group_Name`, `Group_Class_ID`, `Group_Section_ID`, `Group_status`, `Created`, `Modified`) VALUES
(1, 'Science', 1, 1, 1, '', ''),
(3, 'Commerce', 2, 2, 1, '', ''),
(4, 'Humanities', 9, 5, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guardian`
--

CREATE TABLE `tbl_guardian` (
  `Guardian_ID` int(11) NOT NULL,
  `Guardian_Name` varchar(100) NOT NULL,
  `Guardian_UNQ_ID` varchar(20) NOT NULL,
  `Guardian_address` varchar(255) NOT NULL,
  `Guardian_email` varchar(100) NOT NULL,
  `Guardian_mobile` varchar(20) NOT NULL,
  `Guardian_gender` varchar(20) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Guardian_st_link` varchar(100) NOT NULL,
  `Guardian_NID` varchar(50) NOT NULL,
  `Guardian_status` varchar(3) NOT NULL DEFAULT '1',
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `Guardian_BloodGroup` varchar(5) NOT NULL,
  `Guardian_religion` varchar(5) NOT NULL,
  `Guardian_medium` int(2) NOT NULL,
  `Guardian_shift` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guardian`
--

INSERT INTO `tbl_guardian` (`Guardian_ID`, `Guardian_Name`, `Guardian_UNQ_ID`, `Guardian_address`, `Guardian_email`, `Guardian_mobile`, `Guardian_gender`, `Image`, `Guardian_st_link`, `Guardian_NID`, `Guardian_status`, `Created`, `Modified`, `Guardian_BloodGroup`, `Guardian_religion`, `Guardian_medium`, `Guardian_shift`) VALUES
(3, 'ASHRAFUL ISLAM ASHIK', '201827640', '                                                                                                                  Dhaka                                                                                                                        ', 'email@gmail.com', '017438481864', '1', 'Image-04.jpg', '201827481', '21456546564', '2', '', '21-04-2018 16:28:22', '1', '1', 1, 1),
(5, 'Mahbub Rahman', '102018', '                                                                                                                                                                                                                                                               ', 'mahbub.cse2016@gmail.com', '01912751486', '2', '63EB6188-3EA4-4175-88F9-8EF27FE9C8DD.jpg', '201818013', '123123123123', '1', '', '21-04-2018 16:21:46', '4', '2', 2, 2),
(8, 'Fatema', '1020111', '                                                         Dhaka                                                            ', 'mahbub.cse2016@gmail.com', '01721547852', '2', 'Image-10.jpg', '201825763', '21456546564', '1', '', '21-04-2018 16:28:08', '2', '2', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_header`
--

CREATE TABLE `tbl_header` (
  `HeaderID` int(5) NOT NULL,
  `HeaderTitle` varchar(255) NOT NULL,
  `MobileNo` varchar(32) NOT NULL,
  `TelephoneNo` varchar(32) NOT NULL,
  `Email` varchar(55) NOT NULL,
  `Website` varchar(255) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Address1` varchar(255) NOT NULL,
  `Address2` varchar(255) NOT NULL,
  `FacebookLink` varchar(100) NOT NULL,
  `TwitterLink` varchar(100) NOT NULL,
  `AddLink1` varchar(100) NOT NULL,
  `AddLink2` varchar(100) NOT NULL,
  `ExtraInfo` varchar(100) NOT NULL,
  `Created` varchar(100) NOT NULL,
  `HeaderStatus` int(2) NOT NULL,
  `Modified` varchar(100) NOT NULL,
  `YouTubeLink` varchar(100) NOT NULL,
  `UserName` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_header`
--

INSERT INTO `tbl_header` (`HeaderID`, `HeaderTitle`, `MobileNo`, `TelephoneNo`, `Email`, `Website`, `Image`, `Address1`, `Address2`, `FacebookLink`, `TwitterLink`, `AddLink1`, `AddLink2`, `ExtraInfo`, `Created`, `HeaderStatus`, `Modified`, `YouTubeLink`, `UserName`) VALUES
(1, 'আব্দুর রাজ্জাক স্কুল অ্যান্ড কলেজ', '০১৭৪১৪৬৩৮৭১', '৮৩৯৬২৯৫', 'info.arsc2014@gmail.com', 'www.arscbd.com', 'logo2.png', 'বাসা # ৩৬, রাস্তা # ৩, বনশ্রী, ঢাকা-১২১৯', 'বাসা # ৩৬, রাস্তা # ৩, বনশ্রী, ঢাকা-১২১৯', '', '', '', '', '', '29-04-2018 13:59:27', 1, '28-08-2018 12:15:57', '', '1'),
(2, 'Avãyi iv¾vK ¯‹zj A¨vÛ K‡jR', '', '', '', '', '', '', '', '', '', '', '', '', '12-08-2018 17:48:44', 1, '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_header_info`
--

CREATE TABLE `tbl_header_info` (
  `header_info_id` int(11) NOT NULL,
  `image` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `add_link` varchar(20) NOT NULL,
  `extra_info` text NOT NULL,
  `created` varchar(20) NOT NULL,
  `modified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice`
--

CREATE TABLE `tbl_invoice` (
  `Invoice_ID` int(11) NOT NULL,
  `Invoice_student_ID` int(11) NOT NULL,
  `Invoice_class_ID` varchar(50) NOT NULL,
  `Invoice_section_ID` varchar(50) NOT NULL,
  `Invoice_exam_term` int(11) NOT NULL,
  `Invoice_date` varchar(20) NOT NULL,
  `Invoice_totall_amount` varchar(50) NOT NULL,
  `Invoice_payment` varchar(100) NOT NULL,
  `Invoice_method` varchar(100) NOT NULL,
  `Invoice_Status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice`
--

INSERT INTO `tbl_invoice` (`Invoice_ID`, `Invoice_student_ID`, `Invoice_class_ID`, `Invoice_section_ID`, `Invoice_exam_term`, `Invoice_date`, `Invoice_totall_amount`, `Invoice_payment`, `Invoice_method`, `Invoice_Status`, `Created`, `Modified`) VALUES
(1, 201818013, '2', '1', 1, '20-03-2018', '3200', '1200', '1', 0, '', ''),
(2, 201831698, '1', '1', 1, '22-03-2018', '1200', '1200', '1', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_print`
--

CREATE TABLE `tbl_invoice_print` (
  `Invoice_p_ID` int(11) NOT NULL,
  `Invoice_p_cl_ID` int(11) NOT NULL,
  `Invoice_p_se_ID` int(11) NOT NULL,
  `Invoice_p_exfeedt_ID` int(11) NOT NULL,
  `Invoice_p_st_info_ID` int(11) NOT NULL,
  `Invoice_p_ex_term_ID` int(11) NOT NULL,
  `Invoice_p_totall` varchar(20) NOT NULL,
  `Invoice_p_payment` varchar(20) NOT NULL,
  `Invoice_p_method` varchar(20) NOT NULL,
  `Invoice_p_date` varchar(20) NOT NULL,
  `Invoice_date` varchar(20) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modfied` varchar(50) NOT NULL,
  `Invoice_p_Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_trans`
--

CREATE TABLE `tbl_invoice_trans` (
  `Invoice_trans_ID` int(11) NOT NULL,
  `Invoice_Number` varchar(20) NOT NULL,
  `Invoice_Date` varchar(50) NOT NULL,
  `Invoice_Medium_ID` int(5) NOT NULL,
  `Invoice_Shift_ID` int(5) NOT NULL,
  `Invoice_Class_ID` int(11) NOT NULL,
  `Invoice_Section_ID` int(11) NOT NULL,
  `Invoice_Type_ID` int(11) NOT NULL,
  `Invoice_Month` varchar(255) NOT NULL,
  `total_amount` varchar(50) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `Invoice_trans_Status` tinyint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice_trans`
--

INSERT INTO `tbl_invoice_trans` (`Invoice_trans_ID`, `Invoice_Number`, `Invoice_Date`, `Invoice_Medium_ID`, `Invoice_Shift_ID`, `Invoice_Class_ID`, `Invoice_Section_ID`, `Invoice_Type_ID`, `Invoice_Month`, `total_amount`, `Created`, `Modified`, `Invoice_trans_Status`) VALUES
(1, '87554', '19-04-2018', 0, 0, 1, 0, 1, '', '1100.00', '19-04-2018 15:21:58', '', 1),
(2, '123', '10-06-2018', 0, 0, 1, 1, 1, '1', '2250.00', '10-06-2018 11:52:53', '', 1),
(3, '54534', '12-06-2018', 0, 0, 5, 0, 3, '', '1280.00', '12-06-2018 11:43:54', '', 1),
(4, '0123456', '12-06-2018', 1, 1, 1, 1, 1, '1', '3000.00', '12-06-2018 13:12:21', '', 1),
(5, '0123456', '12-06-2018', 1, 1, 1, 1, 1, '1', '3000.00', '12-06-2018 13:25:09', '', 1),
(6, '123', '02-04-2018', 1, 1, 1, 0, 1, '1', '2000.00', '01-08-2018 18:58:26', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_trans_details`
--

CREATE TABLE `tbl_invoice_trans_details` (
  `Invoice_tdetails_ID` int(11) NOT NULL,
  `Invoice_trans_ID` int(11) NOT NULL,
  `Invoice_tdetails_Number` int(11) NOT NULL,
  `Invoice_tdetails_Date` varchar(255) NOT NULL,
  `Invoice_tdetails_Month` varchar(50) NOT NULL,
  `Invoice_tdetails_Medium_ID` int(5) NOT NULL,
  `Invoice_tdetails_Shift_ID` int(5) NOT NULL,
  `Invoice_tdetails_Class_ID` int(11) NOT NULL,
  `Invoice_tdetails_Section_ID` int(11) NOT NULL,
  `Invoice_tdetails_Type_ID` int(11) NOT NULL,
  `Invoice_tdetails_Amount` varchar(20) NOT NULL,
  `Invoice_tdetails_cat_ID` int(11) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `Invoice_tdetails_Status` tinyint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice_trans_details`
--

INSERT INTO `tbl_invoice_trans_details` (`Invoice_tdetails_ID`, `Invoice_trans_ID`, `Invoice_tdetails_Number`, `Invoice_tdetails_Date`, `Invoice_tdetails_Month`, `Invoice_tdetails_Medium_ID`, `Invoice_tdetails_Shift_ID`, `Invoice_tdetails_Class_ID`, `Invoice_tdetails_Section_ID`, `Invoice_tdetails_Type_ID`, `Invoice_tdetails_Amount`, `Invoice_tdetails_cat_ID`, `Created`, `Modified`, `Invoice_tdetails_Status`) VALUES
(1, 1, 87554, '19-04-2018', '', 0, 0, 1, 0, 1, '100', 5, '19-04-2018 15:21:59', '19-04-2018 15:21:59', 1),
(2, 1, 87554, '19-04-2018', '', 0, 0, 1, 0, 1, '200', 10, '19-04-2018 15:21:59', '19-04-2018 15:21:59', 1),
(3, 1, 87554, '19-04-2018', '', 0, 0, 1, 0, 1, '200', 22, '19-04-2018 15:21:59', '19-04-2018 15:21:59', 1),
(4, 1, 87554, '19-04-2018', '', 0, 0, 1, 0, 1, '500', 23, '19-04-2018 15:21:59', '19-04-2018 15:21:59', 1),
(5, 1, 87554, '19-04-2018', '', 0, 0, 1, 0, 1, '100', 24, '19-04-2018 15:21:59', '19-04-2018 15:21:59', 1),
(6, 2, 123, '10-06-2018', '1', 0, 0, 1, 1, 1, '200', 2, '10-06-2018 11:52:54', '10-06-2018 11:52:54', 1),
(7, 2, 123, '10-06-2018', '1', 0, 0, 1, 1, 1, '100', 3, '10-06-2018 11:52:54', '10-06-2018 11:52:54', 1),
(8, 2, 123, '10-06-2018', '1', 0, 0, 1, 1, 1, '450', 15, '10-06-2018 11:52:54', '10-06-2018 11:52:54', 1),
(9, 2, 123, '10-06-2018', '1', 0, 0, 1, 1, 1, '1200', 17, '10-06-2018 11:52:54', '10-06-2018 11:52:54', 1),
(10, 2, 123, '10-06-2018', '1', 0, 0, 1, 1, 1, '300', 12, '10-06-2018 11:52:54', '10-06-2018 11:52:54', 1),
(11, 3, 54534, '12-06-2018', '', 0, 0, 5, 0, 3, '200', 10, '12-06-2018 11:43:55', '12-06-2018 11:43:55', 1),
(12, 3, 54534, '12-06-2018', '', 0, 0, 5, 0, 3, '150', 5, '12-06-2018 11:43:55', '12-06-2018 11:43:55', 1),
(13, 3, 54534, '12-06-2018', '', 0, 0, 5, 0, 3, '250', 18, '12-06-2018 11:43:55', '12-06-2018 11:43:55', 1),
(14, 3, 54534, '12-06-2018', '', 0, 0, 5, 0, 3, '120', 17, '12-06-2018 11:43:55', '12-06-2018 11:43:55', 1),
(15, 3, 54534, '12-06-2018', '', 0, 0, 5, 0, 3, '560', 13, '12-06-2018 11:43:55', '12-06-2018 11:43:55', 1),
(16, 5, 123456, '12-06-2018', '1', 1, 1, 1, 1, 1, '2000', 1, '12-06-2018 13:25:10', '12-06-2018 13:25:10', 1),
(17, 5, 123456, '12-06-2018', '1', 1, 1, 1, 1, 1, '1000', 19, '12-06-2018 13:25:10', '12-06-2018 13:25:10', 1),
(18, 6, 123, '02-04-2018', '1', 1, 1, 1, 0, 1, '2000', 1, '01-08-2018 18:58:29', '01-08-2018 18:58:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invoice_type`
--

CREATE TABLE `tbl_invoice_type` (
  `Invoice_type_ID` int(11) NOT NULL,
  `Invoice_type_Name` varchar(255) NOT NULL,
  `Invoice_Status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_invoice_type`
--

INSERT INTO `tbl_invoice_type` (`Invoice_type_ID`, `Invoice_type_Name`, `Invoice_Status`, `Created`, `Modified`) VALUES
(1, 'Admission Fees', 1, '', ''),
(2, 'Session Charges', 1, '', ''),
(3, 'Tuition Fees', 1, '', ''),
(4, 'ID Card Fees', 1, '', ''),
(5, 'Cultural Fees', 1, '', ''),
(6, 'Annual Milad Fees', 1, '', ''),
(7, 'Receipt Book Fees', 1, '', ''),
(8, 'Generator & Air Conditioner Fees', 1, '', ''),
(9, 'Examination Fees', 1, '', ''),
(10, 'Fine', 1, '', ''),
(11, 'Others', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_library`
--

CREATE TABLE `tbl_library` (
  `Lib_ID` int(11) NOT NULL,
  `Lib_Book_Name` varchar(100) NOT NULL,
  `Lib_Book_cat_ID` int(11) NOT NULL,
  `Lib_author_Name` varchar(100) NOT NULL,
  `Lib_Quantity` varchar(20) NOT NULL,
  `Lib_Book_details` varchar(255) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Lib_status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_library`
--

INSERT INTO `tbl_library` (`Lib_ID`, `Lib_Book_Name`, `Lib_Book_cat_ID`, `Lib_author_Name`, `Lib_Quantity`, `Lib_Book_details`, `Image`, `Lib_status`, `Created`, `Modified`) VALUES
(2, 'hello World123', 6, 'shanto halder123', '20123', '                                                                                                                                                                                                                                                               ', 'cctv-24175591.jpg', 1, '09-04-2018 11:04:44', '09-04-2018 11:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_location`
--

CREATE TABLE `tbl_location` (
  `LOCID` int(11) NOT NULL,
  `LocDivisionID` int(11) NOT NULL,
  `LocDistrictID` int(11) NOT NULL,
  `LocUpozilaID` int(11) NOT NULL,
  `LocationName` varchar(255) NOT NULL,
  `GPSLocationName` varchar(255) NOT NULL,
  `LocationoImage` varchar(255) NOT NULL,
  `ActiveStatus` int(11) NOT NULL COMMENT '0 = NO, 1 = Yes'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_location`
--

INSERT INTO `tbl_location` (`LOCID`, `LocDivisionID`, `LocDistrictID`, `LocUpozilaID`, `LocationName`, `GPSLocationName`, `LocationoImage`, `ActiveStatus`) VALUES
(1, 1, 2, 128, 'Kingdom Tower Shariatpur Sadar', 'NILL', '', 1),
(2, 8, 52, 486, 'Orphanage Shelter & Vocational Technical Traning ', 'NILL', '', 1),
(3, 8, 53, 501, 'kingdom Stone Crusher', 'NILL', '', 1),
(4, 8, 52, 485, 'Dakshin Sunamgonj Autiorium', 'NILL', '', 1),
(5, 1, 1, 507, 'Demra Hazi Abdul Latif Vhuiyan College ', 'NILL', '', 1),
(6, 1, 2, 128, 'Shariatpur Sadar', 'NILL', '', 1),
(7, 0, 43, 1, 'Joypurhat Sadar', 'NILL', '', 1),
(8, 0, 43, 2, 'Akkelpur', 'NILL', '', 1),
(9, 0, 43, 3, 'Kalai', 'NILL', '', 1),
(10, 0, 43, 4, 'Khetlal', 'NILL', '', 1),
(11, 0, 43, 5, 'Panchbibi', 'NILL', '', 1),
(12, 0, 42, 6, 'Adamdighi', 'NILL', '', 1),
(13, 0, 42, 7, 'Bogra Sadar', 'NILL', '', 1),
(14, 0, 42, 8, 'Dhunat', 'NILL', '', 1),
(15, 0, 42, 9, 'Dhupchanchia', 'NILL', '', 1),
(16, 0, 42, 10, 'Gabtali', 'NILL', '', 1),
(17, 0, 42, 11, 'Kahaloo', 'NILL', '', 1),
(18, 0, 42, 12, 'Nandigram', 'NILL', '', 1),
(19, 0, 42, 13, 'Sariakandi', 'NILL', '', 1),
(20, 0, 42, 14, 'Shajahanpur', 'NILL', '', 1),
(21, 0, 42, 15, 'Sherpur', 'NILL', '', 1),
(22, 0, 42, 16, 'Shibganj', 'NILL', '', 1),
(23, 0, 42, 17, 'Sonatola', 'NILL', '', 1),
(24, 0, 44, 18, 'Atrai', 'NILL', '', 1),
(25, 0, 44, 19, 'Badalgachhi', 'NILL', '', 1),
(26, 0, 44, 20, 'Manda', 'NILL', '', 1),
(27, 0, 44, 21, 'Dhamoirhat', 'NILL', '', 1),
(28, 0, 44, 22, 'Mohadevpur', 'NILL', '', 1),
(29, 0, 44, 23, 'Naogaon Sadar', 'NILL', '', 1),
(30, 0, 44, 24, 'Niamatpur', 'NILL', '', 1),
(31, 0, 44, 25, 'Patnitala', 'NILL', '', 1),
(32, 0, 44, 26, 'Porsha', 'NILL', '', 1),
(33, 0, 44, 27, 'Raninagar', 'NILL', '', 1),
(34, 0, 44, 28, 'Sapahar ', 'NILL', '', 1),
(35, 0, 45, 29, 'Bagatipara', 'NILL', '', 1),
(36, 0, 45, 30, 'Baraigram', 'NILL', '', 1),
(37, 0, 45, 31, 'Gurudaspur', 'NILL', '', 1),
(38, 0, 45, 32, 'Lalpur', 'NILL', '', 1),
(39, 0, 45, 33, 'Natore Sadar', 'NILL', '', 1),
(40, 0, 45, 34, 'Singra', 'NILL', '', 1),
(41, 0, 45, 35, 'Naldanga', 'NILL', '', 1),
(42, 0, 46, 36, 'Bholahat', 'NILL', '', 1),
(43, 0, 46, 37, 'Gomastapur', 'NILL', '', 1),
(44, 0, 46, 38, 'Nachole', 'NILL', '', 1),
(45, 0, 46, 39, 'Nawabganj Sadar', 'NILL', '', 1),
(46, 0, 46, 40, 'Shibganj', 'NILL', '', 1),
(47, 0, 47, 41, 'Ataikula', 'NILL', '', 1),
(48, 0, 47, 42, 'Atgharia', 'NILL', '', 1),
(49, 0, 47, 43, 'Atgharia', 'NILL', '', 1),
(50, 0, 47, 44, 'Bera', 'NILL', '', 1),
(51, 0, 47, 45, 'Bhangura', 'NILL', '', 1),
(52, 0, 47, 46, 'Chatmohar', 'NILL', '', 1),
(53, 0, 47, 47, 'Faridpur', 'NILL', '', 1),
(54, 0, 47, 48, 'Ishwardi', 'NILL', '', 1),
(55, 0, 47, 49, 'Pabna Sadar', 'NILL', '', 1),
(56, 0, 47, 50, 'Santhia', 'NILL', '', 1),
(57, 0, 47, 51, 'Sujanagar', 'NILL', '', 1),
(58, 0, 49, 52, 'Belkuchi', 'NILL', '', 1),
(59, 0, 49, 53, 'Chauhali', 'NILL', '', 1),
(60, 0, 49, 54, 'Kamarkhanda', 'NILL', '', 1),
(61, 0, 49, 55, 'Kazipur', 'NILL', '', 1),
(62, 0, 49, 56, 'Raiganj', 'NILL', '', 1),
(63, 0, 49, 57, 'Shahjadpur', 'NILL', '', 1),
(64, 0, 49, 58, 'Sirajganj Sadar', 'NILL', '', 1),
(65, 0, 49, 59, 'Tarash', 'NILL', '', 1),
(66, 0, 49, 60, 'Ullahpara', 'NILL', '', 1),
(67, 0, 48, 61, 'Bagha', 'NILL', '', 1),
(68, 0, 48, 62, 'Bagmara', 'NILL', '', 1),
(69, 0, 48, 63, 'Charghat', 'NILL', '', 1),
(70, 0, 48, 64, 'Durgapur', 'NILL', '', 1),
(71, 0, 48, 65, 'Godagari', 'NILL', '', 1),
(72, 0, 48, 66, 'Mohanpur', 'NILL', '', 1),
(73, 0, 48, 67, 'Paba', 'NILL', '', 1),
(74, 0, 48, 68, 'Puthia', 'NILL', '', 1),
(75, 0, 48, 69, 'Tanore', 'NILL', '', 1),
(76, 0, 1, 70, 'Dhamrai Upazila', 'NILL', '', 1),
(77, 0, 1, 71, 'Dohar Upazila', 'NILL', '', 1),
(78, 0, 1, 72, 'Keraniganj Upazila', 'NILL', '', 1),
(79, 0, 1, 73, 'Nawabganj Upazila', 'NILL', '', 1),
(80, 0, 1, 74, 'Savar', 'NILL', '', 1),
(81, 0, 11, 75, 'Gazipur Sadar', 'NILL', '', 1),
(82, 0, 11, 76, 'Kaliakair', 'NILL', '', 1),
(83, 0, 11, 77, 'Kaliganj', 'NILL', '', 1),
(84, 0, 11, 78, 'Kapasia', 'NILL', '', 1),
(85, 0, 11, 79, 'Sreepur', 'NILL', '', 1),
(86, 0, 12, 80, 'Gopalganj Sadar', 'NILL', '', 1),
(87, 0, 1, 81, 'Kashiani', 'NILL', '', 1),
(88, 0, 12, 82, 'Kotalipara', 'NILL', '', 1),
(89, 0, 12, 83, 'Muksudpur', 'NILL', '', 1),
(90, 0, 12, 84, 'Tungipara', 'NILL', '', 1),
(91, 0, 3, 85, 'Austagram', 'NILL', '', 1),
(92, 0, 3, 86, 'Bajitpur', 'NILL', '', 1),
(93, 0, 3, 87, 'Bhairab', 'NILL', '', 1),
(94, 0, 3, 88, 'Hossainpur', 'NILL', '', 1),
(95, 0, 3, 89, 'Itna Upazila', 'NILL', '', 1),
(96, 0, 3, 90, 'Karimganj', 'NILL', '', 1),
(97, 0, 3, 91, 'Katiadi', 'NILL', '', 1),
(98, 0, 3, 92, 'Kishoreganj Sadar', 'NILL', '', 1),
(99, 0, 3, 93, 'Kuliarchar', 'NILL', '', 1),
(100, 0, 3, 94, 'Mithamain', 'NILL', '', 1),
(101, 0, 3, 95, 'Nikli Upazila', 'NILL', '', 1),
(102, 0, 3, 96, 'Pakundia', 'NILL', '', 1),
(103, 0, 3, 97, 'Tarail', 'NILL', '', 1),
(104, 0, 5, 98, 'Rajoir', 'NILL', '', 1),
(105, 0, 5, 99, 'Madaripur Sadar', 'NILL', '', 1),
(106, 0, 5, 100, 'Kalkini', 'NILL', '', 1),
(107, 0, 5, 101, 'Shibchar', 'NILL', '', 1),
(108, 0, 7, 102, 'Daulatpur', 'NILL', '', 1),
(109, 0, 7, 103, 'Ghior', 'NILL', '', 1),
(110, 0, 7, 104, 'Harirampur', 'NILL', '', 1),
(111, 0, 7, 105, 'Manikgonj Sadar', 'NILL', '', 1),
(112, 0, 7, 106, 'Saturia', 'NILL', '', 1),
(113, 0, 7, 107, 'Shivalaya', 'NILL', '', 1),
(114, 0, 7, 108, 'Singair', 'NILL', '', 1),
(115, 0, 8, 109, 'Gazaria', 'NILL', '', 1),
(116, 0, 8, 110, 'Lohajang', 'NILL', '', 1),
(117, 0, 8, 111, 'Munshiganj Sadar', 'NILL', '', 1),
(118, 0, 8, 112, 'Sirajdikhan', 'NILL', '', 1),
(119, 0, 8, 113, 'Sreenagar', 'NILL', '', 1),
(120, 0, 8, 114, 'Tongibari', 'NILL', '', 1),
(121, 0, 9, 115, 'Araihazar', 'NILL', '', 1),
(122, 0, 9, 116, 'Bandar', 'NILL', '', 1),
(123, 0, 9, 117, 'Narayanganj Sadar ', 'NILL', '', 1),
(124, 0, 9, 118, 'Rupganj', 'NILL', '', 1),
(125, 0, 9, 119, 'Sonargaon', 'NILL', '', 1),
(126, 0, 6, 120, 'Baliakandi', 'NILL', '', 1),
(127, 0, 6, 121, 'Goalandaghat', 'NILL', '', 1),
(128, 0, 6, 122, 'Pangsha', 'NILL', '', 1),
(129, 0, 6, 123, 'Rajbari Sadar', 'NILL', '', 1),
(130, 0, 2, 124, 'Bhedarganj', 'NILL', '', 1),
(131, 0, 2, 125, 'Damudya', 'NILL', '', 1),
(132, 0, 2, 126, 'Gosairhat', 'NILL', '', 1),
(133, 0, 2, 127, 'Naria', 'NILL', '', 1),
(134, 0, 2, 128, 'Shariatpur Sadar', 'NILL', '', 1),
(135, 0, 2, 129, 'Zajira', 'NILL', '', 1),
(136, 0, 2, 130, 'Shakhipur', 'NILL', '', 1),
(137, 0, 4, 131, 'Alfadanga', 'NILL', '', 1),
(138, 0, 4, 132, 'Boalmari', 'NILL', '', 1),
(139, 0, 4, 133, 'Faridpur Sadar', 'NILL', '', 1),
(140, 0, 4, 134, 'Nagarkanda', 'NILL', '', 1),
(141, 0, 4, 135, 'Saltha', 'NILL', '', 1),
(142, 0, 4, 136, 'Bhanga', 'NILL', '', 1),
(143, 0, 4, 137, 'Charbhadrasan', 'NILL', '', 1),
(144, 0, 4, 138, 'Madhukhali', 'NILL', '', 1),
(145, 0, 4, 139, 'Sadarpur', 'NILL', '', 1),
(146, 0, 64, 140, 'Gopalpur', 'NILL', '', 1),
(147, 0, 64, 141, 'Bhuapur', 'NILL', '', 1),
(148, 0, 64, 142, 'Ghatail', 'NILL', '', 1),
(149, 0, 64, 143, 'Madhupur', 'NILL', '', 1),
(150, 0, 64, 144, 'Nagarpur', 'NILL', '', 1),
(151, 0, 64, 145, 'Dhanbari', 'NILL', '', 1),
(152, 0, 64, 146, 'Basail', 'NILL', '', 1),
(153, 0, 64, 147, 'Delduar', 'NILL', '', 1),
(154, 0, 64, 148, 'Kalihati', 'NILL', '', 1),
(155, 0, 64, 149, 'Mirzapur', 'NILL', '', 1),
(156, 0, 64, 150, 'Sakhipur', 'NILL', '', 1),
(157, 0, 64, 151, 'Tangail Sadar', 'NILL', '', 1),
(158, 0, 10, 152, 'Narsingdi Sadar', 'NILL', '', 1),
(159, 0, 10, 153, 'Belabo', 'NILL', '', 1),
(160, 0, 10, 154, 'Monohardi', 'NILL', '', 1),
(161, 0, 10, 155, 'Palash', 'NILL', '', 1),
(162, 0, 10, 156, 'Raipura', 'NILL', '', 1),
(163, 0, 10, 157, 'Shibpur', 'NILL', '', 1),
(164, 0, 34, 158, 'Birampur', 'NILL', '', 1),
(165, 0, 34, 159, 'Birganj', 'NILL', '', 1),
(166, 0, 34, 160, 'Biral', 'NILL', '', 1),
(167, 0, 34, 161, 'Bochaganj', 'NILL', '', 1),
(168, 0, 34, 162, 'Chirirbandar', 'NILL', '', 1),
(169, 0, 34, 163, 'Phulbari', 'NILL', '', 1),
(170, 0, 34, 164, 'Ghoraghat', 'NILL', '', 1),
(171, 0, 34, 165, 'Hakimpur', 'NILL', '', 1),
(172, 0, 34, 166, 'Kaharole', 'NILL', '', 1),
(173, 0, 34, 167, 'Khansama', 'NILL', '', 1),
(174, 0, 34, 168, 'Dinajpur Sadar', 'NILL', '', 1),
(175, 0, 34, 169, 'Nawabganj', 'NILL', '', 1),
(176, 0, 34, 170, 'Parbatipur', 'NILL', '', 1),
(177, 0, 35, 171, 'Phulchhari', 'NILL', '', 1),
(178, 0, 35, 172, 'Gaibandha Sadar', 'NILL', '', 1),
(179, 0, 35, 173, 'Gobindaganj', 'NILL', '', 1),
(180, 0, 35, 174, 'Palashbari', 'NILL', '', 1),
(181, 0, 35, 175, 'Sadullapur', 'NILL', '', 1),
(182, 0, 35, 176, 'Sughatta', 'NILL', '', 1),
(183, 0, 35, 177, 'Sundarganj', 'NILL', '', 1),
(184, 0, 36, 178, 'Bhurungamari', 'NILL', '', 1),
(185, 0, 36, 179, 'Char Rajibpur', 'NILL', '', 1),
(186, 0, 36, 180, 'Chilmari', 'NILL', '', 1),
(187, 0, 36, 181, 'Phulbari', 'NILL', '', 1),
(188, 0, 36, 182, 'Kurigram Sadar', 'NILL', '', 1),
(189, 0, 36, 183, 'Nageshwari', 'NILL', '', 1),
(190, 0, 36, 184, 'Rajarhat', 'NILL', '', 1),
(191, 0, 36, 185, 'Raomari', 'NILL', '', 1),
(192, 0, 36, 186, 'Ulipur', 'NILL', '', 1),
(193, 0, 37, 187, 'Aditmari', 'NILL', '', 1),
(194, 0, 37, 188, 'Hatibandha', 'NILL', '', 1),
(195, 0, 37, 189, 'Kaliganj', 'NILL', '', 1),
(196, 0, 37, 190, 'Lalmonirhat Sadar', 'NILL', '', 1),
(197, 0, 37, 191, 'Patgram', 'NILL', '', 1),
(198, 0, 38, 192, 'Dimla', 'NILL', '', 1),
(199, 0, 38, 193, 'Domar', 'NILL', '', 1),
(200, 0, 38, 194, 'Jaldhaka', 'NILL', '', 1),
(201, 0, 38, 195, 'Kishoreganj', 'NILL', '', 1),
(202, 0, 38, 196, 'Nilphamari Sadar', 'NILL', '', 1),
(203, 0, 38, 197, 'Saidpur', 'NILL', '', 1),
(204, 0, 39, 198, 'Atwari', 'NILL', '', 1),
(205, 0, 39, 199, 'Boda Upazila', 'NILL', '', 1),
(206, 0, 39, 200, 'Debiganj', 'NILL', '', 1),
(207, 0, 39, 201, 'Panchagarh Sadar', 'NILL', '', 1),
(208, 0, 39, 202, 'Tetulia Upazila', 'NILL', '', 1),
(209, 0, 40, 203, 'Badarganj', 'NILL', '', 1),
(210, 0, 40, 204, 'Gangachhara', 'NILL', '', 1),
(211, 0, 40, 205, 'Kaunia', 'NILL', '', 1),
(212, 0, 40, 206, 'Rangpur Sadar', 'NILL', '', 1),
(213, 0, 40, 207, 'Mithapukur', 'NILL', '', 1),
(214, 0, 40, 208, 'Pirgachha', 'NILL', '', 1),
(215, 0, 40, 209, 'Pirganj', 'NILL', '', 1),
(216, 0, 40, 210, 'Taraganj', 'NILL', '', 1),
(217, 0, 41, 211, 'Baliadangi', 'NILL', '', 1),
(218, 0, 41, 212, 'Haripur', 'NILL', '', 1),
(219, 0, 41, 213, 'Pirganj', 'NILL', '', 1),
(220, 0, 41, 214, 'Ranisankail', 'NILL', '', 1),
(221, 0, 41, 215, 'Thakurgaon Sadar', 'NILL', '', 1),
(222, 0, 62, 216, 'Atpara', 'NILL', '', 1),
(223, 0, 62, 217, 'Barhatta', 'NILL', '', 1),
(224, 0, 62, 218, 'Durgapur', 'NILL', '', 1),
(225, 0, 62, 219, 'Khaliajuri', 'NILL', '', 1),
(226, 0, 62, 220, 'Kalmakanda', 'NILL', '', 1),
(227, 0, 62, 221, 'Kendua', 'NILL', '', 1),
(228, 0, 62, 222, 'Madan', 'NILL', '', 1),
(229, 0, 62, 223, 'Mohanganj', 'NILL', '', 1),
(230, 0, 62, 224, 'Netrokona Sadar', 'NILL', '', 1),
(231, 0, 62, 225, 'Purbadhala', 'NILL', '', 1),
(232, 0, 63, 226, 'Jhenaigati', 'NILL', '', 1),
(233, 0, 63, 227, 'Nakla', 'NILL', '', 1),
(234, 0, 63, 228, 'Nakla', 'NILL', '', 1),
(235, 0, 63, 229, 'Nalitabari', 'NILL', '', 1),
(236, 0, 63, 230, 'Sherpur Sadar', 'NILL', '', 1),
(237, 0, 63, 231, 'Sreebardi', 'NILL', '', 1),
(238, 0, 60, 232, 'Baksiganj', 'NILL', '', 1),
(239, 0, 60, 233, 'Dewanganj', 'NILL', '', 1),
(240, 0, 60, 234, 'Islampur', 'NILL', '', 1),
(241, 0, 60, 235, 'Jamalpur Sadar', 'NILL', '', 1),
(242, 0, 60, 236, 'Madarganj', 'NILL', '', 1),
(243, 0, 60, 237, 'Melandaha', 'NILL', '', 1),
(244, 0, 60, 238, 'Sarishabari', 'NILL', '', 1),
(245, 0, 61, 239, 'Bhaluka', 'NILL', '', 1),
(246, 0, 61, 240, 'Dhobaura', 'NILL', '', 1),
(247, 0, 61, 241, 'Fulbaria', 'NILL', '', 1),
(248, 0, 61, 242, 'Gaffargaon', 'NILL', '', 1),
(249, 0, 61, 243, 'Gauripur', 'NILL', '', 1),
(250, 0, 61, 244, 'Haluaghat', 'NILL', '', 1),
(251, 0, 61, 245, 'Ishwarganj', 'NILL', '', 1),
(252, 0, 61, 246, 'Mymensingh Sadar ', 'NILL', '', 1),
(253, 0, 61, 247, 'Muktagachha', 'NILL', '', 1),
(254, 0, 61, 248, 'Nandail', 'NILL', '', 1),
(255, 0, 61, 249, 'Phulpur', 'NILL', '', 1),
(256, 0, 61, 250, 'Trishal', 'NILL', '', 1),
(257, 0, 61, 251, 'Tara Khanda', 'NILL', '', 1),
(258, 0, 54, 252, 'Amtali', 'NILL', '', 1),
(259, 0, 54, 253, 'Bamna', 'NILL', '', 1),
(260, 0, 54, 254, 'Barguna Sadar', 'NILL', '', 1),
(261, 0, 54, 255, 'Betagi', 'NILL', '', 1),
(262, 0, 54, 256, 'Patharghata', 'NILL', '', 1),
(263, 0, 54, 257, 'Taltali', 'NILL', '', 1),
(264, 0, 55, 258, 'Agailjhara', 'NILL', '', 1),
(265, 0, 55, 259, 'Babuganj', 'NILL', '', 1),
(266, 0, 55, 260, 'Bakerganj', 'NILL', '', 1),
(267, 0, 55, 261, 'Banaripara', 'NILL', '', 1),
(268, 0, 55, 262, 'Gaurnadi', 'NILL', '', 1),
(269, 0, 55, 263, 'Hizla', 'NILL', '', 1),
(270, 0, 55, 264, 'Barisal Sadar', 'NILL', '', 1),
(271, 0, 55, 265, 'Mehendiganj', 'NILL', '', 1),
(272, 0, 55, 266, 'Muladi', 'NILL', '', 1),
(273, 0, 55, 267, 'Wazirpur', 'NILL', '', 1),
(274, 0, 56, 268, 'Bhola Sadar', 'NILL', '', 1),
(275, 0, 56, 269, 'Burhanuddin', 'NILL', '', 1),
(276, 0, 56, 270, 'Char Fasson', 'NILL', '', 1),
(277, 0, 56, 271, 'Daulatkhan', 'NILL', '', 1),
(278, 0, 56, 272, 'Lalmohan', 'NILL', '', 1),
(279, 0, 56, 273, 'Manpura', 'NILL', '', 1),
(280, 0, 56, 274, 'Tazumuddin', 'NILL', '', 1),
(281, 0, 57, 275, 'Jhalokati Sadar', 'NILL', '', 1),
(282, 0, 57, 276, 'Kathalia', 'NILL', '', 1),
(283, 0, 57, 277, 'Nalchity', 'NILL', '', 1),
(284, 0, 57, 278, 'Rajapur', 'NILL', '', 1),
(285, 0, 58, 279, 'Bauphal', 'NILL', '', 1),
(286, 0, 58, 280, 'Dashmina', 'NILL', '', 1),
(287, 0, 58, 281, 'Galachipa', 'NILL', '', 1),
(288, 0, 58, 282, 'Kalapara', 'NILL', '', 1),
(289, 0, 58, 283, 'Mirzaganj', 'NILL', '', 1),
(290, 0, 58, 284, 'Patuakhali Sadar', 'NILL', '', 1),
(291, 0, 58, 285, 'Rangabali', 'NILL', '', 1),
(292, 0, 58, 286, 'Dumki', 'NILL', '', 1),
(293, 0, 59, 287, 'Bhandaria', 'NILL', '', 1),
(294, 0, 59, 288, 'Kawkhali', 'NILL', '', 1),
(295, 0, 59, 289, 'Mathbaria', 'NILL', '', 1),
(296, 0, 59, 290, 'Nazirpur', 'NILL', '', 1),
(297, 0, 59, 291, 'Pirojpur Sadar', 'NILL', '', 1),
(298, 0, 59, 292, 'Nesarabad (Swarupkati)', 'NILL', '', 1),
(299, 0, 59, 293, 'Zianagar', 'NILL', '', 1),
(300, 0, 13, 294, 'Ali Kadam', 'NILL', '', 1),
(301, 0, 13, 295, 'Bandarban Sadar', 'NILL', '', 1),
(302, 0, 13, 296, 'Lama', 'NILL', '', 1),
(303, 0, 13, 297, 'Naikhongchhari', 'NILL', '', 1),
(304, 0, 13, 298, 'Rowangchhari', 'NILL', '', 1),
(305, 0, 13, 299, 'Ruma', 'NILL', '', 1),
(306, 0, 13, 300, 'Thanchi', 'NILL', '', 1),
(307, 0, 14, 301, 'Akhaura', 'NILL', '', 1),
(308, 0, 14, 302, 'Bancharampur', 'NILL', '', 1),
(309, 0, 14, 303, 'Brahmanbaria Sadar', 'NILL', '', 1),
(310, 0, 14, 304, 'Kasba', 'NILL', '', 1),
(311, 0, 14, 305, 'Nabinagar', 'NILL', '', 1),
(312, 0, 14, 306, 'Nasirnagar', 'NILL', '', 1),
(313, 0, 14, 307, 'Sarail', 'NILL', '', 1),
(314, 0, 14, 308, 'Ashuganj', 'NILL', '', 1),
(315, 0, 14, 309, 'Bijoynagar', 'NILL', '', 1),
(316, 0, 15, 310, 'Chandpur Sadar', 'NILL', '', 1),
(317, 0, 15, 311, 'Faridganj', 'NILL', '', 1),
(318, 0, 15, 312, 'Haimchar', 'NILL', '', 1),
(319, 0, 15, 313, 'Haziganj', 'NILL', '', 1),
(320, 0, 15, 314, 'Kachua', 'NILL', '', 1),
(321, 0, 15, 315, 'Matlab Dakshin', 'NILL', '', 1),
(322, 0, 15, 316, 'Matlab Uttar', 'NILL', '', 1),
(323, 0, 15, 317, 'Shahrasti', 'NILL', '', 1),
(324, 0, 16, 318, 'Anwara', 'NILL', '', 1),
(325, 0, 16, 319, 'Banshkhali', 'NILL', '', 1),
(326, 0, 16, 320, 'Boalkhali', 'NILL', '', 1),
(327, 0, 16, 321, 'Chandanaish', 'NILL', '', 1),
(328, 0, 16, 322, 'Fatikchhari', 'NILL', '', 1),
(329, 0, 16, 323, 'Hathazari', 'NILL', '', 1),
(330, 0, 16, 324, 'Karnaphuli', 'NILL', '', 1),
(331, 0, 16, 325, 'Lohagara', 'NILL', '', 1),
(332, 0, 16, 326, 'Mirsharai', 'NILL', '', 1),
(333, 0, 16, 327, 'Patiya', 'NILL', '', 1),
(334, 0, 16, 328, 'Rangunia', 'NILL', '', 1),
(335, 0, 16, 329, 'Raozan', 'NILL', '', 1),
(336, 0, 16, 330, 'Sandwip', 'NILL', '', 1),
(337, 0, 16, 331, 'Satkania', 'NILL', '', 1),
(338, 0, 16, 332, 'Sitakunda', 'NILL', '', 1),
(339, 0, 16, 333, 'Bandar Thana', 'NILL', '', 1),
(340, 0, 16, 334, 'Chandgaon Thana', 'NILL', '', 1),
(341, 0, 15, 335, 'Double Mooring Thana', 'NILL', '', 1),
(342, 0, 16, 336, 'Kotwali Thana', 'NILL', '', 1),
(343, 0, 16, 337, 'Pahartali Thana', 'NILL', '', 1),
(344, 0, 16, 338, 'Panchlaish Thana', 'NILL', '', 1),
(345, 0, 16, 339, 'Bhujpur Thana', 'NILL', '', 1),
(346, 0, 17, 340, 'Barura', 'NILL', '', 1),
(347, 0, 17, 341, 'Brahmanpara', 'NILL', '', 1),
(348, 0, 17, 342, 'Burichang', 'NILL', '', 1),
(349, 0, 17, 343, 'Chandina', 'NILL', '', 1),
(350, 0, 17, 344, 'Chauddagram', 'NILL', '', 1),
(351, 0, 17, 345, 'Daudkandi', 'NILL', '', 1),
(352, 0, 17, 346, 'Debidwar', 'NILL', '', 1),
(353, 0, 17, 347, 'Homna', 'NILL', '', 1),
(354, 0, 17, 348, 'Laksam', 'NILL', '', 1),
(355, 0, 17, 349, 'Muradnagar', 'NILL', '', 1),
(356, 0, 17, 350, 'Nangalkot', 'NILL', '', 1),
(357, 0, 17, 351, 'Comilla Adarsha Sadar ', 'NILL', '', 1),
(358, 0, 17, 352, 'Meghna', 'NILL', '', 1),
(359, 0, 17, 353, 'Titas', 'NILL', '', 1),
(360, 0, 17, 354, 'Monohargonj', 'NILL', '', 1),
(361, 0, 17, 355, 'Comilla Sadar Dakshin ', 'NILL', '', 1),
(362, 0, 18, 356, 'Chakaria', 'NILL', '', 1),
(363, 0, 18, 357, 'Cox\'s Bazar Sadar', 'NILL', '', 1),
(364, 0, 18, 358, 'Kutubdia', 'NILL', '', 1),
(365, 0, 18, 359, 'Maheshkhali', 'NILL', '', 1),
(366, 0, 18, 360, 'Ramu', 'NILL', '', 1),
(367, 0, 18, 361, 'Teknaf', 'NILL', '', 1),
(368, 0, 18, 362, 'Ukhia', 'NILL', '', 1),
(369, 0, 18, 363, 'Pekua', 'NILL', '', 1),
(370, 0, 19, 364, 'Chhagalnaiya', 'NILL', '', 1),
(371, 0, 19, 365, 'Daganbhuiyan', 'NILL', '', 1),
(372, 0, 19, 366, 'Feni Sadar', 'NILL', '', 1),
(373, 0, 19, 367, 'Parshuram', 'NILL', '', 1),
(374, 0, 19, 368, 'Sonagazi', 'NILL', '', 1),
(375, 0, 19, 369, 'Fulgazi', 'NILL', '', 1),
(376, 0, 20, 370, 'Dighinala', 'NILL', '', 1),
(377, 0, 20, 371, 'Khagrachhari', 'NILL', '', 1),
(378, 0, 20, 372, 'Lakshmichhari', 'NILL', '', 1),
(379, 0, 20, 373, 'Mahalchhari', 'NILL', '', 1),
(380, 0, 20, 374, 'Manikchhari', 'NILL', '', 1),
(381, 0, 20, 375, 'Matiranga', 'NILL', '', 1),
(382, 0, 20, 376, 'Panchhari', 'NILL', '', 1),
(383, 0, 20, 377, 'Ramgarh', 'NILL', '', 1),
(384, 0, 21, 378, 'Lakshmipur Sadar', 'NILL', '', 1),
(385, 0, 21, 379, 'Raipur', 'NILL', '', 1),
(386, 0, 21, 380, 'Ramganj', 'NILL', '', 1),
(387, 0, 21, 381, 'Ramgati', 'NILL', '', 1),
(388, 0, 21, 382, 'Kamalnagar', 'NILL', '', 1),
(389, 0, 22, 383, 'Begumganj', 'NILL', '', 1),
(390, 0, 22, 384, 'Noakhali Sadar', 'NILL', '', 1),
(391, 0, 22, 385, 'Chatkhil', 'NILL', '', 1),
(392, 0, 22, 386, 'Companiganj', 'NILL', '', 1),
(393, 0, 22, 387, 'Hatiya', 'NILL', '', 1),
(394, 0, 22, 388, 'Senbagh', 'NILL', '', 1),
(395, 0, 22, 389, 'Sonaimuri', 'NILL', '', 1),
(396, 0, 22, 390, 'Subarnachar', 'NILL', '', 1),
(397, 0, 22, 391, 'Kabirhat', 'NILL', '', 1),
(398, 0, 23, 392, 'Bagaichhari', 'NILL', '', 1),
(399, 0, 23, 393, 'Barkal', 'NILL', '', 1),
(400, 0, 23, 394, 'Kawkhali (Betbunia)', 'NILL', '', 1),
(401, 0, 23, 395, 'Belaichhari', 'NILL', '', 1),
(402, 0, 23, 396, 'Kaptai', 'NILL', '', 1),
(403, 0, 23, 397, 'Juraichhari', 'NILL', '', 1),
(404, 0, 23, 398, 'Langadu', 'NILL', '', 1),
(405, 0, 23, 399, 'Naniyachar', 'NILL', '', 1),
(406, 0, 23, 400, 'Rajasthali', 'NILL', '', 1),
(407, 0, 23, 401, 'Rangamati Sadar', 'NILL', '', 1),
(408, 0, 24, 402, 'Bagerhat Sadar', 'NILL', '', 1),
(409, 0, 24, 403, 'Chitalmari', 'NILL', '', 1),
(410, 0, 24, 404, 'Fakirhat', 'NILL', '', 1),
(411, 0, 24, 405, 'Kachua', 'NILL', '', 1),
(412, 0, 24, 406, 'Mollahat', 'NILL', '', 1),
(413, 0, 24, 407, 'Mongla', 'NILL', '', 1),
(414, 0, 24, 408, 'Morrelganj', 'NILL', '', 1),
(415, 0, 24, 409, 'Rampal', 'NILL', '', 1),
(416, 0, 24, 410, 'Sarankhola', 'NILL', '', 1),
(417, 0, 25, 411, 'Alamdanga', 'NILL', '', 1),
(418, 0, 25, 412, 'Chuadanga Sadar', 'NILL', '', 1),
(419, 0, 25, 413, 'Damurhuda', 'NILL', '', 1),
(420, 0, 25, 414, 'Jibannagar', 'NILL', '', 1),
(421, 0, 26, 415, 'Abhaynagar', 'NILL', '', 1),
(422, 0, 26, 416, 'Bagherpara', 'NILL', '', 1),
(423, 0, 26, 417, 'Chaugachha', 'NILL', '', 1),
(424, 0, 26, 418, 'Jhikargachha', 'NILL', '', 1),
(425, 0, 26, 419, 'Keshabpur', 'NILL', '', 1),
(426, 0, 26, 420, 'Jessore Sadar', 'NILL', '', 1),
(427, 0, 26, 421, 'Manirampur', 'NILL', '', 1),
(428, 0, 26, 422, 'Sharsha', 'NILL', '', 1),
(429, 0, 27, 423, 'Harinakunda', 'NILL', '', 1),
(430, 0, 27, 424, 'Jhenaidah Sadar', 'NILL', '', 1),
(431, 0, 27, 425, 'Kaliganj', 'NILL', '', 1),
(432, 0, 27, 426, 'Kotchandpur', 'NILL', '', 1),
(433, 0, 27, 427, 'Maheshpur', 'NILL', '', 1),
(434, 0, 27, 428, 'Shailkupa', 'NILL', '', 1),
(435, 0, 28, 429, 'Batiaghata', 'NILL', '', 1),
(436, 0, 28, 430, 'Dacope', 'NILL', '', 1),
(437, 0, 28, 431, 'Dumuria', 'NILL', '', 1),
(438, 0, 28, 432, 'Dighalia', 'NILL', '', 1),
(439, 0, 28, 433, 'Koyra', 'NILL', '', 1),
(440, 0, 28, 434, 'Paikgachha', 'NILL', '', 1),
(441, 0, 28, 435, 'Phultala', 'NILL', '', 1),
(442, 0, 28, 436, 'Rupsha', 'NILL', '', 1),
(443, 0, 28, 437, 'Terokhada', 'NILL', '', 1),
(444, 0, 28, 438, 'Daulatpur Thana', 'NILL', '', 1),
(445, 0, 28, 439, 'Khalishpur Thana', 'NILL', '', 1),
(446, 0, 28, 440, 'Khan Jahan Ali Thana', 'NILL', '', 1),
(447, 0, 28, 441, 'Kotwali Thana', 'NILL', '', 1),
(448, 0, 28, 442, 'Sonadanga Thana', 'NILL', '', 1),
(449, 0, 28, 443, 'Harintana Thana', 'NILL', '', 1),
(450, 0, 29, 444, 'Bheramara', 'NILL', '', 1),
(451, 0, 29, 445, 'Daulatpur', 'NILL', '', 1),
(452, 0, 29, 446, 'Khoksa', 'NILL', '', 1),
(453, 0, 29, 447, 'Kumarkhali', 'NILL', '', 1),
(454, 0, 29, 448, 'Kushtia Sadar', 'NILL', '', 1),
(455, 0, 29, 449, 'Mirpur', 'NILL', '', 1),
(456, 0, 30, 450, 'Magura Sadar', 'NILL', '', 1),
(457, 0, 30, 451, 'Mohammadpur', 'NILL', '', 1),
(458, 0, 30, 452, 'Shalikha', 'NILL', '', 1),
(459, 0, 30, 453, 'Sreepur', 'NILL', '', 1),
(460, 0, 31, 454, 'Gangni', 'NILL', '', 1),
(461, 0, 31, 455, 'Meherpur Sadar', 'NILL', '', 1),
(462, 0, 31, 456, 'Mujibnagar', 'NILL', '', 1),
(463, 0, 32, 457, 'Kalia', 'NILL', '', 1),
(464, 0, 32, 458, 'Lohagara', 'NILL', '', 1),
(465, 0, 32, 459, 'Narail Sadar', 'NILL', '', 1),
(466, 0, 32, 460, 'Naragati Thana', 'NILL', '', 1),
(467, 0, 33, 461, 'Assasuni', 'NILL', '', 1),
(468, 0, 33, 462, 'Debhata', 'NILL', '', 1),
(469, 0, 33, 463, 'Kalaroa', 'NILL', '', 1),
(470, 0, 33, 464, 'Kaliganj', 'NILL', '', 1),
(471, 0, 33, 465, 'Satkhira Sadar', 'NILL', '', 1),
(472, 0, 33, 466, 'Shyamnagar', 'NILL', '', 1),
(473, 0, 33, 467, 'Tala', 'NILL', '', 1),
(474, 0, 50, 468, 'Ajmiriganj', 'NILL', '', 1),
(475, 0, 50, 469, 'Bahubal', 'NILL', '', 1),
(476, 0, 50, 470, 'Baniyachong', 'NILL', '', 1),
(477, 0, 50, 471, 'Chunarughat', 'NILL', '', 1),
(478, 0, 50, 472, 'Habiganj Sadar', 'NILL', '', 1),
(479, 0, 50, 473, 'Lakhai', 'NILL', '', 1),
(480, 0, 50, 474, 'Nabiganj', 'NILL', '', 1),
(481, 0, 50, 475, 'Madhabpur', 'NILL', '', 1),
(482, 0, 51, 476, 'Barlekha', 'NILL', '', 1),
(483, 0, 51, 477, 'Juri', 'NILL', '', 1),
(484, 0, 51, 478, 'Kamalganj', 'NILL', '', 1),
(485, 0, 51, 479, 'Kulaura', 'NILL', '', 1),
(486, 0, 51, 480, 'Moulvibazar Sadar', 'NILL', '', 1),
(487, 0, 51, 481, 'Rajnagar', 'NILL', '', 1),
(488, 0, 51, 482, 'Sreemangal', 'NILL', '', 1),
(489, 0, 52, 483, 'Bishwamvarpur', 'NILL', '', 1),
(490, 0, 52, 484, 'Chhatak', 'NILL', '', 1),
(491, 0, 52, 485, 'Dakshin Sunamganj', 'NILL', '', 1),
(492, 0, 52, 486, 'Derai', 'NILL', '', 1),
(493, 0, 52, 487, 'Dharamapasha', 'NILL', '', 1),
(494, 0, 52, 488, 'Dowarabazar', 'NILL', '', 1),
(495, 0, 52, 489, 'Jagannathpur', 'NILL', '', 1),
(496, 0, 52, 490, 'Jamalganj', 'NILL', '', 1),
(497, 0, 52, 491, 'Sullah', 'NILL', '', 1),
(498, 0, 52, 492, 'Sunamganj Sadar', 'NILL', '', 1),
(499, 0, 52, 493, 'Tahirpur', 'NILL', '', 1),
(500, 0, 53, 494, 'Balaganj', 'NILL', '', 1),
(501, 0, 53, 495, 'Beanibazar', 'NILL', '', 1),
(502, 0, 53, 496, 'Bishwanath', 'NILL', '', 1),
(503, 0, 53, 497, 'Companigonj', 'NILL', '', 1),
(504, 0, 53, 498, 'Dakshin Surma', 'NILL', '', 1),
(505, 0, 53, 499, 'Fenchuganj', 'NILL', '', 1),
(506, 0, 53, 500, 'Golapganj', 'NILL', '', 1),
(507, 0, 53, 501, 'Gowainghat', 'NILL', '', 1),
(508, 0, 53, 502, 'Jaintiapur', 'NILL', '', 1),
(509, 0, 53, 503, 'Kanaighat', 'NILL', '', 1),
(510, 0, 53, 504, 'Osmani Nagar', 'NILL', '', 1),
(511, 0, 53, 505, 'Sylhet Sadar', 'NILL', '', 1),
(512, 0, 53, 506, 'Zakiganj', 'NILL', '', 1),
(513, 0, 1, 507, 'Dhaka Metropolitan ', 'NILL', '', 1),
(518, 1, 2, 128, 'DC Office Shariatpur', '23.205899, 90.347420', '', 1),
(519, 0, 1, 70, 'Tolar Bagh', 'NILL', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `MemberID` int(5) NOT NULL,
  `MemberName` varchar(100) NOT NULL,
  `FathersName` varchar(100) NOT NULL,
  `ProfessionID` varchar(5) NOT NULL,
  `Gender` varchar(5) NOT NULL,
  `Voter` varchar(5) NOT NULL,
  `NationalID` varchar(32) NOT NULL,
  `EmailID` varchar(32) NOT NULL,
  `MobileNo` varchar(32) NOT NULL,
  `DateOfBirth` varchar(32) NOT NULL,
  `JoiningDate` varchar(32) NOT NULL,
  `Nationality` varchar(55) NOT NULL,
  `DivisionID` varchar(55) NOT NULL,
  `DistrictID` varchar(55) NOT NULL,
  `UpazilaID` varchar(55) NOT NULL,
  `UnionID` varchar(55) NOT NULL,
  `VillageOrWordID` varchar(55) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `MemberStatus` tinyint(2) NOT NULL,
  `Created` varchar(32) NOT NULL,
  `modified` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`MemberID`, `MemberName`, `FathersName`, `ProfessionID`, `Gender`, `Voter`, `NationalID`, `EmailID`, `MobileNo`, `DateOfBirth`, `JoiningDate`, `Nationality`, `DivisionID`, `DistrictID`, `UpazilaID`, `UnionID`, `VillageOrWordID`, `Image`, `MemberStatus`, `Created`, `modified`) VALUES
(3, 'Muhammad Mahbubur Rahman', 'Abdul Awal', '1', '1', '1', '14657495465', 'mahbub.cse06@gmail.com', '0156465416541', '11-12-1989', '28-01-2018', 'Bangladeshi', '1', '2', '2', '2', '2', 'saiful.jpg', 1, '20-01-2018', '29-01-2018'),
(4, 'Ashiq', 'Hamid', '2', '1', '1', '14657495465', 'ashiq@gmail.com', '0156465416541', '07-02-2000', '29-01-2018', 'Bangladeshi', '1', '2', '2', '2', '2', 'admin.jpg', 2, '29-01-2018', '29-01-2018'),
(6, 'Ashiq', 'Hashem Khan', '1', '1', '1', '14657495465', 'abc@gmail.com', '0156465416541', '29-01-2000', '29-01-2018', 'Bangladeshi', '1', '2', '2', '2', '2', 'Md_-Saiful-Islam-12.jpg', 1, '29-01-2018', '29-01-2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notes`
--

CREATE TABLE `tbl_notes` (
  `note_id` int(11) NOT NULL,
  `note_type` smallint(6) NOT NULL COMMENT '1=leave; 2=notice',
  `note_title` varchar(60) NOT NULL,
  `noteBody` text NOT NULL,
  `status` int(11) NOT NULL,
  `created` varchar(20) NOT NULL,
  `modified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notice_publish`
--

CREATE TABLE `tbl_notice_publish` (
  `notice_id` int(11) NOT NULL,
  `notice_date` varchar(50) NOT NULL,
  `expired_date` varchar(50) NOT NULL,
  `notice_view_type` int(11) NOT NULL COMMENT '1:all, 2:department, 3:designation',
  `department_or_designation_list` varchar(100) DEFAULT 'NULL',
  `notice_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `notice_body_details` text CHARACTER SET utf8 NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '1:actvie; 2:inactive',
  `created` varchar(50) NOT NULL,
  `modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notice_publish`
--

INSERT INTO `tbl_notice_publish` (`notice_id`, `notice_date`, `expired_date`, `notice_view_type`, `department_or_designation_list`, `notice_title`, `notice_body_details`, `status`, `created`, `modified`) VALUES
(5, '28-08-2018', '28-08-2018', 0, 'NULL', '', 'বর্তমানে এই ওয়েবসাইটটি নির্মাণাধীন অবস্থায় আছে, তাই আপনাদের সাময়িক অসুবিধার জন্য আমরা দুঃখিত, ধন্যবাদ ।  ', 1, '28-08-2018 17:29:54', '28-08-2018 17:29:54');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages`
--

CREATE TABLE `tbl_pages` (
  `id` int(11) NOT NULL,
  `pages_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `page_url` varchar(100) NOT NULL,
  `is_group` int(11) NOT NULL,
  `page_order` int(11) NOT NULL,
  `order_level` int(11) NOT NULL,
  `status` tinyint(20) NOT NULL,
  `created` varchar(100) NOT NULL,
  `modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages`
--

INSERT INTO `tbl_pages` (`id`, `pages_id`, `parent_id`, `title`, `page_url`, `is_group`, `page_order`, `order_level`, `status`, `created`, `modified`) VALUES
(1, 0, 0, 'CTL Menu', '', 1, 11, 1, 1, '07-06-2017 18:10:39', '13-03-2018 20:45:49'),
(2, 0, 1, 'Page Add', 'users_role/users/page_add', 0, 1, 1, 1, '07-06-2017 18:10:39', '07-06-2017 18:10:39'),
(11, 0, 0, 'Roles & Permissions', '', 1, 11, 1, 1, '07-06-2017 12:11:38', '11-03-2018 02:05:58'),
(12, 0, 11, 'Add Role', 'users_role/users/add_role', 0, 1, 2, 1, '07-06-2017 12:18:41', '07-06-2017 12:18:41'),
(13, 0, 11, 'Role List', 'users_role/users/role_list', 0, 2, 2, 1, '07-06-2017 12:19:29', '07-06-2017 12:19:29'),
(14, 0, 11, 'Permission', 'users_role/users/permissions', 0, 3, 2, 1, '07-06-2017 12:20:00', '07-06-2017 12:20:00'),
(24, 0, 0, 'User Management', '', 1, 12, 1, 1, '07-06-2017 13:09:08', '11-03-2018 02:05:04'),
(25, 0, 24, 'Add User', 'users_role/users/add_user', 0, 1, 2, 1, '07-06-2017 13:10:21', '07-06-2017 13:10:21'),
(26, 0, 24, 'User List', 'users_role/users/user_list', 0, 2, 2, 1, '07-06-2017 13:11:04', '07-06-2017 13:11:04'),
(27, 0, 1, 'Page LIst', 'users_role/users/page_list', 0, 2, 1, 1, '07-06-2017 13:12:19', '07-06-2017 13:12:19'),
(44, 0, 0, 'Admin', '', 1, 1, 1, 1, '30-07-2017 17:42:44', '17-12-2017 13:35:41'),
(47, 0, 0, 'Slider', '', 1, 2, 1, 0, '31-07-2017 11:19:35', '12-12-2017 17:14:58'),
(48, 0, 47, 'Add Slider', 'slider/slider/add_slider', 0, 1, 2, 0, '31-07-2017 11:21:48', '31-07-2017 18:53:04'),
(49, 0, 47, 'Slider List', 'slider/slider/list_slider', 0, 2, 2, 1, '31-07-2017 11:26:12', '31-07-2017 11:26:12'),
(50, 0, 0, 'Appearance', '', 1, 3, 1, 0, '09-08-2017 10:46:38', '14-10-2017 11:47:24'),
(51, 0, 50, 'Menus', 'appearance/menus/second_menu', 0, 1, 2, 1, '09-08-2017 10:47:44', '09-08-2017 11:02:39'),
(52, 0, 161, 'Photo Gallery', '', 1, 2, 2, 1, '22-08-2017 13:03:39', '25-04-2018 19:13:16'),
(53, 0, 52, 'Gallery / Album list', 'photo_gallery/gallery/gallery_list', 0, 1, 2, 1, '22-08-2017 13:06:49', '22-08-2017 13:51:22'),
(54, 0, 50, 'Contents', 'appearance/contents/content_manage', 0, 2, 2, 1, '27-08-2017 12:32:09', '27-08-2017 13:08:09'),
(55, 0, 58, 'Notice', 'notice_management/notice/add_notice', 0, 2, 2, 1, '28-08-2017 18:04:24', '09-10-2017 15:19:54'),
(57, 0, 0, 'Widgets', '', 1, 5, 1, 1, '29-08-2017 10:37:11', '29-08-2017 10:37:11'),
(60, 0, 58, 'List of Job Position', 'job_circular/circular/job_post_list', 0, 3, 2, 1, '09-09-2017 12:07:39', '09-10-2017 15:19:28'),
(67, 0, 0, 'Member Management', '', 1, 5, 1, 0, '30-11-2017 09:16:49', '08-03-2018 12:45:34'),
(68, 0, 67, 'Add Member', 'member/member/index', 0, 1, 2, 1, '30-11-2017 09:17:46', '13-01-2018 15:32:09'),
(69, 0, 0, 'Category', '', 1, 6, 1, 0, '14-12-2017 14:19:49', '17-01-2018 18:34:45'),
(71, 0, 44, 'Contact Message', 'contact/contact_message/all_message', 0, 5, 2, 0, '17-12-2017 13:32:50', '17-01-2018 17:18:18'),
(80, 0, 67, 'Print All Member', 'member/member/print_all_member_index', 0, 2, 2, 1, '22-01-2018 17:36:44', '22-01-2018 17:39:37'),
(82, 0, 0, 'Student', '', 1, 2, 1, 1, '08-03-2018 12:48:43', '08-03-2018 12:51:00'),
(83, 0, 82, 'Admission', 'student/student/add_admission', 0, 1, 2, 1, '08-03-2018 12:55:24', '08-03-2018 12:55:24'),
(84, 0, 82, 'Student List', 'student/student/student_list', 0, 2, 2, 1, '08-03-2018 13:00:44', '08-03-2018 13:00:44'),
(85, 0, 82, 'Student Summary ', 'student/student/student_summary', 0, 3, 2, 1, '08-03-2018 13:02:46', '08-03-2018 13:02:46'),
(86, 0, 82, 'Student Add Attendance ', 'student/student/student_attendance', 0, 4, 2, 1, '08-03-2018 13:03:54', '14-03-2018 11:27:41'),
(87, 0, 82, 'Student  Report', '', 1, 1, 2, 1, '08-03-2018 13:05:02', '10-03-2018 16:26:51'),
(89, 0, 0, 'Teacher', '', 1, 3, 1, 1, '08-03-2018 13:31:39', '08-03-2018 13:31:39'),
(90, 0, 89, 'Teacher Registration', 'teacher/teacher/add_teacher', 0, 1, 2, 1, '08-03-2018 13:33:41', '10-03-2018 23:50:34'),
(91, 0, 89, 'Teacher List', 'teacher/teacher/teacher_list', 0, 2, 2, 1, '08-03-2018 13:34:21', '08-03-2018 13:34:21'),
(92, 0, 0, 'Guardian', '', 1, 4, 1, 1, '08-03-2018 13:36:29', '02-04-2018 11:28:04'),
(93, 0, 92, 'Guardian Registration', 'guardian/guardian/add_guardian', 0, 1, 2, 1, '08-03-2018 13:38:17', '02-04-2018 11:29:21'),
(94, 0, 92, 'Guardian List', 'guardian/guardian/guardian_list', 0, 2, 2, 1, '08-03-2018 13:39:10', '02-04-2018 11:28:40'),
(95, 0, 0, 'Admin Panel', '', 1, 1, 1, 1, '10-03-2018 15:28:48', '24-03-2018 12:28:12'),
(96, 0, 95, 'Add Class', 'academic/academic/add_class', 0, 1, 2, 1, '10-03-2018 15:29:59', '10-03-2018 15:29:59'),
(97, 0, 95, 'Add Section', 'academic/academic/add_section', 0, 2, 2, 1, '10-03-2018 15:31:07', '10-03-2018 15:31:07'),
(98, 0, 95, 'Add Group', 'academic/academic/add_group', 0, 3, 2, 1, '10-03-2018 15:31:58', '10-03-2018 15:31:58'),
(101, 0, 95, 'Add Academic Year', 'academic/academic/add_academic_year', 0, 5, 2, 1, '10-03-2018 15:33:47', '12-03-2018 19:18:55'),
(102, 0, 95, 'Subject', '', 1, 8, 2, 1, '10-03-2018 15:51:02', '12-03-2018 19:18:21'),
(103, 0, 95, 'Add Subject', 'academic/academic/add_subject', 0, 5, 2, 1, '10-03-2018 15:52:06', '19-03-2018 21:52:20'),
(105, 0, 0, 'Time Table', '', 1, 6, 1, 1, '10-03-2018 15:55:33', '11-03-2018 02:02:32'),
(106, 0, 105, 'Create Time Slots', 'time_slot/time_slot/add_time_slots', 0, 1, 2, 1, '10-03-2018 15:57:34', '14-03-2018 02:06:57'),
(107, 0, 105, 'View Time Slots', 'time_slot/time_slot/view_time_slots', 0, 2, 2, 1, '10-03-2018 15:58:16', '14-03-2018 02:04:53'),
(109, 0, 0, 'Student Account', '', 1, 5, 1, 1, '10-03-2018 16:05:26', '24-03-2018 12:14:11'),
(110, 0, 109, 'Invoice Generate', 'fees/fees/fees_collection', 0, 1, 2, 1, '10-03-2018 16:06:16', '27-03-2018 17:45:11'),
(111, 0, 109, 'Fees Category', 'fees/fees/add_fees', 0, 6, 2, 0, '10-03-2018 16:07:29', '24-03-2018 12:45:49'),
(112, 0, 109, 'Invoice List', 'fees/fees/fees_invoice', 0, 2, 2, 1, '10-03-2018 16:08:35', '24-03-2018 12:31:45'),
(113, 0, 0, 'Exam', '', 1, 9, 1, 1, '10-03-2018 16:11:42', '05-04-2018 22:03:31'),
(114, 0, 95, 'Add Exam', 'academic/academic/add_exam', 0, 13, 2, 1, '10-03-2018 16:12:21', '12-04-2018 18:30:37'),
(116, 0, 0, 'Library', '', 1, 8, 1, 1, '10-03-2018 16:15:37', '07-04-2018 14:01:07'),
(117, 0, 116, 'Add New Books', 'library/library/add_new_book', 0, 1, 2, 1, '10-03-2018 16:17:39', '07-04-2018 15:54:14'),
(118, 0, 116, 'Book Summery', 'library/library/book_details', 0, 3, 2, 0, '10-03-2018 16:19:22', '09-04-2018 11:58:54'),
(119, 0, 116, 'Book List', 'library/library/library_list', 0, 2, 2, 1, '10-03-2018 16:20:34', '07-04-2018 18:45:47'),
(120, 0, 0, 'Reports', '', 1, 10, 1, 1, '10-03-2018 16:22:16', '10-03-2018 16:22:16'),
(121, 0, 120, 'Students Report', 'report/report/students_report', 1, 1, 2, 1, '10-03-2018 16:24:28', '10-03-2018 16:24:28'),
(122, 0, 121, 'Student Info Report', 'student/student/student_report', 0, 1, 3, 1, '10-03-2018 16:27:33', '10-03-2018 16:27:33'),
(123, 0, 121, 'Student Attendance Report', 'student/student/student_attendance_report', 0, 2, 3, 1, '10-03-2018 16:28:47', '10-03-2018 16:28:47'),
(124, 0, 121, 'Student exam Report', 'student/student/student_exam_report', 0, 3, 3, 0, '10-03-2018 16:29:42', '27-03-2018 17:42:49'),
(125, 0, 113, 'Exam Routine Create', 'exam/exam/exam_routine', 0, 1, 2, 1, '12-03-2018 18:52:38', '29-04-2018 17:29:03'),
(126, 0, 113, 'Exam Marks Input', 'exam/exam/exam_marks', 0, 2, 2, 1, '12-03-2018 18:53:38', '12-03-2018 19:20:16'),
(127, 0, 113, 'Exam Result Creation', 'exam/exam/exam_report_create_position', 0, 3, 2, 1, '12-03-2018 19:25:29', '08-07-2018 17:08:09'),
(128, 0, 120, 'Teacher Report', '', 1, 2, 2, 1, '13-03-2018 20:34:12', '13-03-2018 20:34:12'),
(129, 0, 128, 'Teacher Info Report', 'teacher/teacher/teacher_info_report', 0, 1, 3, 1, '13-03-2018 20:35:23', '27-03-2018 17:37:41'),
(130, 0, 128, 'Teacher Attendance Report', 'teacher/teacher/teacher_attendance_report', 0, 2, 3, 1, '13-03-2018 20:38:58', '27-03-2018 17:38:40'),
(131, 0, 120, 'Fees Collection', '', 1, 4, 2, 1, '13-03-2018 20:42:12', '02-04-2018 14:26:50'),
(132, 0, 131, 'Fees Collection Report', 'fees/fees/fees_collection_report', 0, 1, 3, 1, '13-03-2018 20:43:05', '02-04-2018 14:29:45'),
(133, 0, 89, 'Add Designation', 'teacher/designation/add_designation', 0, 3, 2, 1, '17-03-2018 15:43:40', '19-03-2018 19:44:38'),
(135, 0, 109, 'Fees Generate', 'fees/fees/add_exam_fees', 0, 3, 2, 1, '17-03-2018 16:03:52', '24-03-2018 12:37:56'),
(136, 0, 109, 'Fess List', 'fees/fees/add_exam_fees_list', 0, 4, 2, 1, '17-03-2018 16:04:31', '24-03-2018 12:37:47'),
(137, 0, 0, 'Notice', '', 1, 6, 1, 1, '20-03-2018 13:48:13', '24-03-2018 12:29:43'),
(138, 0, 95, 'Add Notice', 'notice/notice/notice_notes', 0, 12, 2, 1, '20-03-2018 13:49:26', '09-04-2018 15:00:14'),
(139, 0, 137, 'Add Notice', 'notice/notice/add_notice', 0, 2, 2, 1, '20-03-2018 13:52:26', '09-04-2018 15:01:02'),
(140, 0, 95, 'Add Fees Category', 'academic/academic/add_fees', 0, 6, 2, 1, '24-03-2018 12:41:05', '24-03-2018 12:41:49'),
(141, 0, 95, 'Add Invoice Type', 'academic/academic/add_invoice_type', 0, 7, 2, 1, '24-03-2018 16:15:22', '24-03-2018 16:15:22'),
(142, 0, 89, 'Teacher Attendance', 'teacher/teacher/teacher_attendance', 0, 3, 2, 1, '27-03-2018 17:47:33', '27-03-2018 17:47:33'),
(143, 0, 0, 'Accounting', '', 1, 16, 1, 1, '27-03-2018 17:56:47', '11-04-2018 17:29:36'),
(144, 0, 143, 'HRM', 'accounting/accounting/index1', 0, 1, 2, 1, '27-03-2018 17:57:51', '27-03-2018 18:26:20'),
(145, 0, 143, 'Accounting', 'accounting/accounting/', 0, 16, 2, 1, '27-03-2018 17:58:44', '11-04-2018 17:29:14'),
(146, 0, 120, 'Guardian Report', '', 1, 3, 2, 1, '02-04-2018 11:30:27', '02-04-2018 11:30:27'),
(147, 0, 146, 'Guardian Info report ', 'guardian/guardian/guardian_info_report', 0, 1, 3, 1, '02-04-2018 11:32:02', '02-04-2018 11:32:02'),
(148, 0, 95, 'Add Class Room', 'academic/academic/add_room', 0, 8, 2, 1, '02-04-2018 15:29:14', '02-04-2018 15:32:43'),
(149, 0, 95, 'Add Class Time', 'academic/academic/add_classTime', 0, 9, 2, 1, '02-04-2018 15:29:40', '02-04-2018 15:29:40'),
(150, 0, 95, 'Add Book Category', 'academic/academic/add_book_category', 0, 10, 2, 1, '07-04-2018 14:44:27', '07-04-2018 14:44:27'),
(151, 0, 95, 'Add Expense Category ', 'academic/academic/add_expence_cat', 0, 11, 2, 1, '09-04-2018 12:16:30', '09-04-2018 12:16:30'),
(152, 0, 0, 'Expense', '', 1, 10, 1, 1, '09-04-2018 12:53:38', '09-04-2018 12:57:40'),
(153, 0, 152, 'Add Expense', 'expense/expense/add_expense', 0, 1, 2, 1, '09-04-2018 12:55:51', '09-04-2018 12:55:51'),
(154, 0, 152, 'Expense List', 'expense/expense/expense_list', 0, 2, 2, 1, '09-04-2018 12:56:48', '09-04-2018 12:56:48'),
(155, 0, 120, 'Expense Report', '', 1, 5, 2, 1, '11-04-2018 12:49:01', '11-04-2018 12:49:01'),
(156, 0, 155, 'Expense Report', 'expense/expense/expense_report', 0, 1, 3, 1, '11-04-2018 12:50:11', '11-04-2018 12:50:11'),
(157, 0, 120, 'Exam Report', '', 1, 5, 2, 1, '18-04-2018 13:33:26', '18-04-2018 13:33:26'),
(158, 0, 157, 'Exam Report All', 'exam/exam/exam_report_all', 0, 1, 3, 1, '18-04-2018 13:35:09', '12-07-2018 15:32:46'),
(159, 0, 157, 'Exam Routine  Print', 'exam/exam/exam_routine_print', 0, 2, 3, 1, '21-04-2018 18:04:35', '21-04-2018 18:06:44'),
(160, 0, 157, 'Exam Report single', 'exam/exam/exam_report_single', 0, 3, 3, 1, '22-04-2018 18:28:02', '22-04-2018 18:30:21'),
(161, 0, 0, 'Website Panel', '', 1, 1, 1, 1, '25-04-2018 19:03:37', '25-04-2018 19:14:02'),
(162, 0, 161, 'Admin', '', 1, 1, 2, 1, '25-04-2018 19:05:20', '25-04-2018 19:05:20'),
(163, 0, 162, 'Header', 'header/header/index', 0, 1, 3, 1, '25-04-2018 19:06:51', '25-04-2018 19:06:51'),
(164, 0, 162, 'Footer', 'footer/footer/index', 0, 2, 3, 1, '25-04-2018 19:07:31', '25-04-2018 19:07:31'),
(165, 0, 162, 'Add Contact', 'contact/contact/index', 0, 3, 3, 1, '25-04-2018 19:08:45', '25-04-2018 19:08:45'),
(166, 0, 162, 'About School', 'about/about/index', 0, 4, 3, 1, '25-04-2018 19:11:12', '25-04-2018 19:11:12'),
(168, 0, 161, 'Video Gallery', '', 1, 3, 2, 1, '25-04-2018 19:20:26', '25-04-2018 19:20:26'),
(169, 0, 168, 'Video List', 'video/video/video_list', 0, 1, 3, 1, '25-04-2018 19:21:31', '25-04-2018 19:21:31'),
(170, 0, 0, 'Promotion', '', 1, 10, 1, 1, '05-05-2018 12:36:35', '05-05-2018 12:36:35'),
(171, 0, 170, 'Add Promotion', 'promotion/promotion/add_promotion', 0, 1, 2, 1, '05-05-2018 12:38:07', '05-05-2018 12:38:07'),
(172, 0, 0, 'SMS', '', 1, 10, 1, 1, '06-05-2018 18:27:02', '06-05-2018 18:27:02'),
(173, 0, 172, 'SMS || Mail', 'sms/sms/send_sms', 0, 1, 2, 1, '06-05-2018 18:27:50', '28-07-2018 11:47:52'),
(174, 0, 95, 'SMS Create', 'sms/sms/sms_create', 0, 10, 2, 1, '08-05-2018 18:30:10', '08-05-2018 18:31:08'),
(175, 0, 0, 'Staff ', '', 1, 5, 1, 1, '12-05-2018 13:13:52', '12-05-2018 13:17:13'),
(176, 0, 175, 'Staff Reg.', 'staff/staff/add_staff', 0, 1, 2, 1, '12-05-2018 13:15:23', '12-05-2018 13:15:23'),
(177, 0, 175, 'Staff Attendance', 'staff/staff/staff_attendance', 0, 2, 2, 1, '12-05-2018 14:55:24', '12-05-2018 14:55:24'),
(178, 0, 127, 'Student Create Position', 'exam/exam/exam_report_create_position', 0, 3, 3, 0, '08-07-2018 17:01:12', '08-07-2018 17:09:03'),
(179, 0, 121, 'Student Password report', 'student/student/student_report_password', 0, 2, 3, 1, '18-07-2018 23:33:41', '18-07-2018 23:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pages_name`
--

CREATE TABLE `tbl_pages_name` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL,
  `p_order` int(11) NOT NULL,
  `created` varchar(100) NOT NULL,
  `modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pages_name`
--

INSERT INTO `tbl_pages_name` (`id`, `name`, `status`, `p_order`, `created`, `modified`) VALUES
(1, 'News Posts', '1', 1, '04/26/2017 16:14:33', '04/26/2017 16:14:33'),
(2, 'Appearance', '1', 2, '04/26/2017 16:14:52', '04/26/2017 16:14:52'),
(3, 'Facebook Auto Post', '1', 3, '04/26/2017 16:15:07', '04/26/2017 16:15:07'),
(4, 'Database Backup', '1', 4, '04/26/2017 16:15:31', '04/26/2017 16:15:31'),
(5, 'Users', '1', 5, '04/26/2017 16:15:45', '04/26/2017 16:15:45'),
(6, 'Users Role Settings', '1', 6, '05/09/2017 13:47:43', '05/09/2017 13:47:43'),
(7, 'CTL Menu', '1', 7, '05/09/2017 13:48:00', '05/09/2017 16:26:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parents`
--

CREATE TABLE `tbl_parents` (
  `Parents_ID` int(11) NOT NULL,
  `Parents_Name` varchar(100) NOT NULL,
  `Parents_UNQ_ID` varchar(20) NOT NULL,
  `Parents_address` varchar(255) NOT NULL,
  `Parents_email` varchar(100) NOT NULL,
  `Parents_mobile` varchar(20) NOT NULL,
  `Parents_gender` varchar(20) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Parents_st_link` varchar(100) NOT NULL,
  `nid` int(50) NOT NULL,
  `Parents_status` varchar(3) NOT NULL DEFAULT '1',
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_parents`
--

INSERT INTO `tbl_parents` (`Parents_ID`, `Parents_Name`, `Parents_UNQ_ID`, `Parents_address`, `Parents_email`, `Parents_mobile`, `Parents_gender`, `Image`, `Parents_st_link`, `nid`, `Parents_status`, `Created`, `Modified`) VALUES
(1, 'Md Mihadul Islam Shawn', '201830314', 'Dhaka', 'email@gmail.com', '017438481864', 'Male', 'Image-04.jpg', '201818013', 0, '1', '12-03-2018 04:23:50', ''),
(2, 'MISS. JERIN AKTAR', '201826459', 'Dhaka', 'email@gmail.com', '017438481864', 'Female', 'Image-10.jpg', '201813216', 0, '1', '12-03-2018 04:25:11', ''),
(3, 'ASHRAFUL ISLAM ASHIK', '201827640', 'Dhaka', 'email@gmail.com', '017438481864', 'Male', 'Image-031.jpg', '201827481', 0, '1', '12-03-2018 04:25:57', ''),
(4, 'hjhjjkjkkj', '2018825976518', 'ccc', 'abc@gmail.com', '01749717065', 'Male', '1506935314.png', '122', 0, '1', '13-03-2018 15:48:16', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_permissions`
--

CREATE TABLE `tbl_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pages_actions_id` int(20) NOT NULL,
  `add_permission` tinyint(100) NOT NULL COMMENT '1: Permitted 0: Not Permitted',
  `edit_permission` tinyint(4) NOT NULL COMMENT '1: Permitted 0: Not Permitted',
  `delete_permission` tinyint(4) NOT NULL COMMENT '1: Permitted 0: Not Permitted',
  `created` varchar(100) NOT NULL,
  `modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_permissions`
--

INSERT INTO `tbl_permissions` (`id`, `role_id`, `user_id`, `pages_actions_id`, `add_permission`, `edit_permission`, `delete_permission`, `created`, `modified`) VALUES
(42, 3, 1, 56, 0, 0, 0, '28-08-2017 18:05:36', '28-08-2017 18:05:36'),
(43, 3, 1, 58, 0, 0, 0, '29-08-2017 10:45:57', '29-08-2017 10:45:57'),
(46, 3, 1, 59, 0, 0, 0, '13-09-2017 10:43:01', '13-09-2017 10:43:01'),
(48, 3, 1, 61, 0, 0, 0, '13-09-2017 10:43:01', '13-09-2017 10:43:01'),
(49, 3, 1, 62, 0, 0, 0, '04-10-2017 15:16:46', '04-10-2017 15:16:46'),
(50, 3, 1, 63, 0, 0, 0, '08-10-2017 15:22:55', '08-10-2017 15:22:55'),
(51, 3, 1, 64, 0, 0, 0, '09-10-2017 15:18:43', '09-10-2017 15:18:43'),
(52, 3, 1, 65, 0, 0, 0, '14-10-2017 11:50:27', '14-10-2017 11:50:27'),
(53, 3, 1, 66, 0, 0, 0, '17-10-2017 16:26:20', '17-10-2017 16:26:20'),
(54, 1, 1, 56, 0, 0, 0, '28-11-2017 12:12:25', '28-11-2017 12:12:25'),
(55, 1, 1, 62, 0, 0, 0, '28-11-2017 12:12:25', '28-11-2017 12:12:25'),
(58, 3, 1, 70, 0, 0, 0, '14-12-2017 14:21:14', '14-12-2017 14:21:14'),
(60, 3, 1, 73, 0, 0, 0, '20-12-2017 16:52:18', '20-12-2017 16:52:18'),
(77, 1, 1, 79, 0, 0, 0, '28-01-2018 13:42:31', '28-01-2018 13:42:31'),
(79, 1, 1, 74, 0, 0, 0, '28-01-2018 13:43:40', '28-01-2018 13:43:40'),
(80, 1, 1, 75, 0, 0, 0, '28-01-2018 13:43:40', '28-01-2018 13:43:40'),
(81, 1, 1, 76, 0, 0, 0, '28-01-2018 13:43:40', '28-01-2018 13:43:40'),
(82, 1, 1, 77, 0, 0, 0, '28-01-2018 13:43:40', '28-01-2018 13:43:40'),
(84, 1, 1, 81, 0, 0, 0, '28-01-2018 13:43:40', '28-01-2018 13:43:40'),
(88, 3, 1, 2, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(89, 3, 1, 12, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(90, 3, 1, 13, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(91, 3, 1, 14, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(92, 3, 1, 25, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(93, 3, 1, 26, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(94, 3, 1, 27, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(95, 3, 1, 45, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(96, 3, 1, 46, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(97, 3, 1, 48, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(98, 3, 1, 49, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(99, 3, 1, 51, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(100, 3, 1, 53, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(101, 3, 1, 54, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(102, 3, 1, 68, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(103, 3, 1, 71, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(104, 3, 1, 74, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(105, 3, 1, 75, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(106, 3, 1, 76, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(107, 3, 1, 77, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(108, 3, 1, 79, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(109, 3, 1, 80, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(110, 3, 1, 81, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(111, 3, 1, 83, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(112, 3, 1, 84, 0, 0, 0, '08-03-2018 13:06:58', '08-03-2018 13:06:58'),
(113, 3, 1, 85, 0, 0, 0, '08-03-2018 13:07:13', '08-03-2018 13:07:13'),
(114, 3, 1, 86, 0, 0, 0, '08-03-2018 13:07:13', '08-03-2018 13:07:13'),
(115, 3, 1, 87, 0, 0, 0, '08-03-2018 13:07:13', '08-03-2018 13:07:13'),
(116, 3, 1, 88, 0, 0, 0, '08-03-2018 13:07:13', '08-03-2018 13:07:13'),
(117, 3, 1, 90, 0, 0, 0, '08-03-2018 13:34:33', '08-03-2018 13:34:33'),
(118, 3, 1, 91, 0, 0, 0, '08-03-2018 13:34:33', '08-03-2018 13:34:33'),
(119, 3, 1, 93, 0, 0, 0, '08-03-2018 13:39:20', '08-03-2018 13:39:20'),
(120, 3, 1, 94, 0, 0, 0, '08-03-2018 13:39:20', '08-03-2018 13:39:20'),
(121, 5, 1, 83, 0, 0, 0, '08-03-2018 14:19:09', '08-03-2018 14:19:09'),
(122, 5, 1, 84, 0, 0, 0, '08-03-2018 14:19:10', '08-03-2018 14:19:10'),
(123, 5, 1, 85, 0, 0, 0, '08-03-2018 14:19:10', '08-03-2018 14:19:10'),
(124, 5, 1, 86, 0, 0, 0, '08-03-2018 14:19:10', '08-03-2018 14:19:10'),
(125, 5, 1, 87, 0, 0, 0, '08-03-2018 14:19:10', '08-03-2018 14:19:10'),
(126, 5, 1, 88, 0, 0, 0, '08-03-2018 14:19:10', '08-03-2018 14:19:10'),
(131, 6, 1, 74, 0, 0, 0, '08-03-2018 14:23:26', '08-03-2018 14:23:26'),
(132, 6, 1, 75, 0, 0, 0, '08-03-2018 14:23:26', '08-03-2018 14:23:26'),
(133, 6, 1, 76, 0, 0, 0, '08-03-2018 14:23:26', '08-03-2018 14:23:26'),
(134, 6, 1, 77, 0, 0, 0, '08-03-2018 14:23:26', '08-03-2018 14:23:26'),
(135, 6, 1, 79, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(137, 6, 1, 81, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(138, 6, 1, 83, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(139, 6, 1, 84, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(140, 6, 1, 85, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(141, 6, 1, 86, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(142, 6, 1, 87, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(143, 6, 1, 88, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(144, 6, 1, 90, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(145, 6, 1, 91, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(146, 6, 1, 93, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(147, 6, 1, 94, 0, 0, 0, '08-03-2018 14:23:27', '08-03-2018 14:23:27'),
(160, 3, 1, 96, 0, 0, 0, '10-03-2018 15:30:27', '10-03-2018 15:30:27'),
(161, 3, 1, 97, 0, 0, 0, '10-03-2018 15:34:00', '10-03-2018 15:34:00'),
(162, 3, 1, 98, 0, 0, 0, '10-03-2018 15:34:00', '10-03-2018 15:34:00'),
(163, 3, 1, 99, 0, 0, 0, '10-03-2018 15:34:00', '10-03-2018 15:34:00'),
(164, 3, 1, 100, 0, 0, 0, '10-03-2018 15:34:00', '10-03-2018 15:34:00'),
(165, 3, 1, 101, 0, 0, 0, '10-03-2018 15:34:00', '10-03-2018 15:34:00'),
(166, 3, 1, 103, 0, 0, 0, '10-03-2018 15:52:52', '10-03-2018 15:52:52'),
(167, 3, 1, 104, 0, 0, 0, '10-03-2018 15:52:52', '10-03-2018 15:52:52'),
(168, 3, 1, 106, 0, 0, 0, '10-03-2018 15:58:24', '10-03-2018 15:58:24'),
(169, 3, 1, 107, 0, 0, 0, '10-03-2018 15:58:24', '10-03-2018 15:58:24'),
(170, 3, 1, 108, 0, 0, 0, '10-03-2018 16:03:26', '10-03-2018 16:03:26'),
(171, 3, 1, 110, 0, 0, 0, '10-03-2018 16:08:46', '10-03-2018 16:08:46'),
(172, 3, 1, 111, 0, 0, 0, '10-03-2018 16:08:46', '10-03-2018 16:08:46'),
(173, 3, 1, 112, 0, 0, 0, '10-03-2018 16:08:46', '10-03-2018 16:08:46'),
(174, 3, 1, 114, 0, 0, 0, '10-03-2018 16:13:52', '10-03-2018 16:13:52'),
(175, 3, 1, 115, 0, 0, 0, '10-03-2018 16:13:52', '10-03-2018 16:13:52'),
(176, 3, 1, 117, 0, 0, 0, '10-03-2018 16:17:51', '10-03-2018 16:17:51'),
(177, 3, 1, 118, 0, 0, 0, '10-03-2018 16:20:45', '10-03-2018 16:20:45'),
(178, 3, 1, 119, 0, 0, 0, '10-03-2018 16:20:45', '10-03-2018 16:20:45'),
(179, 3, 1, 122, 0, 0, 0, '10-03-2018 16:27:42', '10-03-2018 16:27:42'),
(180, 3, 1, 123, 0, 0, 0, '10-03-2018 16:30:11', '10-03-2018 16:30:11'),
(181, 3, 1, 124, 0, 0, 0, '10-03-2018 16:30:11', '10-03-2018 16:30:11'),
(182, 3, 1, 125, 0, 0, 0, '12-03-2018 19:10:30', '12-03-2018 19:10:30'),
(183, 3, 1, 126, 0, 0, 0, '12-03-2018 19:10:30', '12-03-2018 19:10:30'),
(184, 3, 1, 127, 0, 0, 0, '12-03-2018 19:25:48', '12-03-2018 19:25:48'),
(185, 3, 1, 129, 0, 0, 0, '13-03-2018 20:35:39', '13-03-2018 20:35:39'),
(186, 3, 1, 130, 0, 0, 0, '13-03-2018 20:39:08', '13-03-2018 20:39:08'),
(187, 3, 1, 132, 0, 0, 0, '13-03-2018 20:44:26', '13-03-2018 20:44:26'),
(188, 3, 1, 133, 0, 0, 0, '17-03-2018 15:43:57', '17-03-2018 15:43:57'),
(189, 3, 1, 134, 0, 0, 0, '17-03-2018 15:46:59', '17-03-2018 15:46:59'),
(190, 3, 1, 135, 0, 0, 0, '17-03-2018 16:04:43', '17-03-2018 16:04:43'),
(191, 3, 1, 136, 0, 0, 0, '17-03-2018 16:04:43', '17-03-2018 16:04:43'),
(192, 3, 1, 138, 0, 0, 0, '20-03-2018 13:53:34', '20-03-2018 13:53:34'),
(193, 3, 1, 139, 0, 0, 0, '20-03-2018 13:53:34', '20-03-2018 13:53:34'),
(194, 3, 1, 140, 0, 0, 0, '24-03-2018 12:41:16', '24-03-2018 12:41:16'),
(195, 3, 1, 141, 0, 0, 0, '24-03-2018 16:15:34', '24-03-2018 16:15:34'),
(196, 3, 1, 142, 0, 0, 0, '27-03-2018 17:47:49', '27-03-2018 17:47:49'),
(197, 3, 1, 144, 0, 0, 0, '27-03-2018 17:58:53', '27-03-2018 17:58:53'),
(198, 3, 1, 145, 0, 0, 0, '27-03-2018 17:58:53', '27-03-2018 17:58:53'),
(199, 6, 1, 96, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(200, 6, 1, 97, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(201, 6, 1, 98, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(202, 6, 1, 101, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(203, 6, 1, 103, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(204, 6, 1, 106, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(205, 6, 1, 107, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(206, 6, 1, 110, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(207, 6, 1, 111, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(208, 6, 1, 112, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(209, 6, 1, 122, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(210, 6, 1, 123, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(211, 6, 1, 124, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(212, 6, 1, 129, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(213, 6, 1, 130, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(214, 6, 1, 132, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(215, 6, 1, 133, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(216, 6, 1, 135, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(217, 6, 1, 136, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(219, 6, 1, 139, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(220, 6, 1, 140, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(221, 6, 1, 141, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(222, 6, 1, 142, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(223, 6, 1, 144, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(224, 6, 1, 145, 0, 0, 0, '02-04-2018 09:50:48', '02-04-2018 09:50:48'),
(225, 3, 1, 147, 0, 0, 0, '02-04-2018 11:32:20', '02-04-2018 11:32:20'),
(226, 3, 1, 148, 0, 0, 0, '02-04-2018 15:29:52', '02-04-2018 15:29:52'),
(227, 3, 1, 149, 0, 0, 0, '02-04-2018 15:29:52', '02-04-2018 15:29:52'),
(228, 3, 1, 150, 0, 0, 0, '07-04-2018 14:44:40', '07-04-2018 14:44:40'),
(229, 3, 1, 151, 0, 0, 0, '09-04-2018 12:16:59', '09-04-2018 12:16:59'),
(230, 3, 1, 153, 0, 0, 0, '09-04-2018 12:57:00', '09-04-2018 12:57:00'),
(231, 3, 1, 154, 0, 0, 0, '09-04-2018 12:57:00', '09-04-2018 12:57:00'),
(232, 3, 1, 155, 0, 0, 0, '09-04-2018 14:54:40', '09-04-2018 14:54:40'),
(233, 3, 1, 156, 0, 0, 0, '11-04-2018 12:50:22', '11-04-2018 12:50:22'),
(234, 6, 1, 117, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(235, 6, 1, 118, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(236, 6, 1, 119, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(237, 6, 1, 125, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(238, 6, 1, 126, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(239, 6, 1, 127, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(240, 6, 1, 147, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(241, 6, 1, 153, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(242, 6, 1, 154, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(243, 6, 1, 156, 0, 0, 0, '12-04-2018 10:57:36', '12-04-2018 10:57:36'),
(244, 6, 1, 114, 0, 0, 0, '12-04-2018 10:59:16', '12-04-2018 10:59:16'),
(245, 6, 1, 138, 0, 0, 0, '12-04-2018 10:59:16', '12-04-2018 10:59:16'),
(246, 6, 1, 148, 0, 0, 0, '12-04-2018 10:59:16', '12-04-2018 10:59:16'),
(247, 6, 1, 149, 0, 0, 0, '12-04-2018 10:59:16', '12-04-2018 10:59:16'),
(248, 6, 1, 150, 0, 0, 0, '12-04-2018 10:59:16', '12-04-2018 10:59:16'),
(249, 6, 1, 151, 0, 0, 0, '12-04-2018 10:59:16', '12-04-2018 10:59:16'),
(250, 1, 1, 84, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(251, 1, 1, 91, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(252, 1, 1, 122, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(253, 1, 1, 123, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(254, 1, 1, 125, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(255, 1, 1, 126, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(256, 1, 1, 130, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(257, 1, 1, 142, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(258, 1, 1, 147, 0, 0, 0, '12-04-2018 11:03:43', '12-04-2018 11:03:43'),
(259, 3, 1, 158, 0, 0, 0, '18-04-2018 13:35:20', '18-04-2018 13:35:20'),
(260, 3, 1, 159, 0, 0, 0, '21-04-2018 18:04:58', '21-04-2018 18:04:58'),
(261, 3, 1, 160, 0, 0, 0, '22-04-2018 18:31:02', '22-04-2018 18:31:02'),
(262, 3, 1, 163, 0, 0, 0, '25-04-2018 19:08:58', '25-04-2018 19:08:58'),
(263, 3, 1, 164, 0, 0, 0, '25-04-2018 19:08:58', '25-04-2018 19:08:58'),
(264, 3, 1, 165, 0, 0, 0, '25-04-2018 19:08:58', '25-04-2018 19:08:58'),
(265, 3, 1, 166, 0, 0, 0, '25-04-2018 19:13:31', '25-04-2018 19:13:31'),
(266, 3, 1, 169, 0, 0, 0, '25-04-2018 19:21:39', '25-04-2018 19:21:39'),
(267, 3, 1, 171, 0, 0, 0, '05-05-2018 12:38:23', '05-05-2018 12:38:23'),
(268, 3, 1, 173, 0, 0, 0, '06-05-2018 18:28:04', '06-05-2018 18:28:04'),
(269, 3, 1, 174, 0, 0, 0, '08-05-2018 18:30:21', '08-05-2018 18:30:21'),
(270, 3, 1, 175, 0, 0, 0, '12-05-2018 13:15:43', '12-05-2018 13:15:43'),
(271, 3, 1, 176, 0, 0, 0, '12-05-2018 13:17:30', '12-05-2018 13:17:30'),
(272, 3, 1, 177, 0, 0, 0, '12-05-2018 14:55:42', '12-05-2018 14:55:42'),
(273, 3, 1, 179, 0, 0, 0, '18-07-2018 23:34:03', '18-07-2018 23:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photos`
--

CREATE TABLE `tbl_photos` (
  `photos_id` int(11) NOT NULL,
  `photo_gallery_id` int(11) NOT NULL,
  `ph_image` varchar(50) NOT NULL,
  `ph_caption` varchar(50) NOT NULL,
  `ph_description` text NOT NULL,
  `photo_order` int(11) NOT NULL,
  `ph_status` tinyint(4) NOT NULL COMMENT '1:active; 0:inactive',
  `ph_slider_images` varchar(255) NOT NULL,
  `ph_gallery1_image` int(5) NOT NULL,
  `ph_gallery2_image` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_photos`
--

INSERT INTO `tbl_photos` (`photos_id`, `photo_gallery_id`, `ph_image`, `ph_caption`, `ph_description`, `photo_order`, `ph_status`, `ph_slider_images`, `ph_gallery1_image`, `ph_gallery2_image`) VALUES
(9, 6, 'Kazi_Afroza_Begum.jpg', 'কাজী আফরোজা বেগম (সিনিয়র শিক্ষিকা) ', '', 0, 1, '0', 1, 1),
(11, 1, 'arsc2.jpg', 'arsc2', '', 2, 1, '1', 1, 0),
(12, 1, 'arsc3.jpg', 'arsc3', '', 3, 1, '1', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo_galleries`
--

CREATE TABLE `tbl_photo_galleries` (
  `gallery_id` int(11) NOT NULL,
  `gallery_title` varchar(50) NOT NULL,
  `image` varchar(50) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `gallery_status` tinyint(4) NOT NULL COMMENT '1:active; 0:inactive'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_photo_galleries`
--

INSERT INTO `tbl_photo_galleries` (`gallery_id`, `gallery_title`, `image`, `gallery_status`) VALUES
(1, 'Slider Picture', '', 1),
(2, 'Gallery Picture', '', 1),
(3, 'Library Picture', '', 1),
(4, 'Lab Picture', '', 1),
(5, 'School Celebration', '', 1),
(6, 'Teachers And Staffs', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profession`
--

CREATE TABLE `tbl_profession` (
  `ProfessionID` int(5) NOT NULL,
  `ProfessionName` varchar(55) NOT NULL,
  `ProfessionStatus` int(5) NOT NULL,
  `CreatedBy` varchar(55) NOT NULL,
  `Created` varchar(55) NOT NULL,
  `Modified` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_profession`
--

INSERT INTO `tbl_profession` (`ProfessionID`, `ProfessionName`, `ProfessionStatus`, `CreatedBy`, `Created`, `Modified`) VALUES
(1, 'Teacher ', 1, '', '22-01-2018 14:32:53', '23-01-2018 19:11:16'),
(2, 'Farmer', 1, '', '22-01-2018 14:37:14', '23-01-2018 19:11:28'),
(4, 'Private Job', 0, '', '22-01-2018 17:21:53', '23-01-2018 19:11:21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `edit_permission` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role_name`, `edit_permission`, `status`, `created`, `modified`) VALUES
(1, 'Teacher', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Super Admin', 1, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Parents', 0, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Student', 1, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Admin', 1, '1', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `Room_ID` int(11) NOT NULL,
  `Room_Name` varchar(100) NOT NULL,
  `Room_Status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`Room_ID`, `Room_Name`, `Room_Status`, `Created`, `Modified`) VALUES
(1, 'Kabi Nazrul Room', 1, '', ''),
(2, 'Begum Sufia Room', 1, '', ''),
(3, 'Rabindro Room', 1, '', ''),
(4, 'Lab Room', 1, '', ''),
(5, 'Teacher\'s Room', 1, '', ''),
(6, 'Common Room', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_section`
--

CREATE TABLE `tbl_section` (
  `Section_ID` int(11) NOT NULL,
  `Section_Name` varchar(20) NOT NULL,
  `Section_title` varchar(255) NOT NULL,
  `Section_class_ID` int(11) NOT NULL,
  `Section_shift_ID` int(11) NOT NULL,
  `Section_Status` tinyint(3) NOT NULL DEFAULT '1',
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_section`
--

INSERT INTO `tbl_section` (`Section_ID`, `Section_Name`, `Section_title`, `Section_class_ID`, `Section_shift_ID`, `Section_Status`, `Created`, `Modified`) VALUES
(1, 'A', '', 0, 0, 1, '', ''),
(2, 'B', '', 0, 0, 1, '', ''),
(3, 'C', '', 0, 0, 1, '', ''),
(4, 'D', '', 0, 0, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_shift`
--

CREATE TABLE `tbl_shift` (
  `Shift_ID` int(11) NOT NULL,
  `Shift_Name` varchar(50) NOT NULL,
  `Shift_status` tinyint(3) NOT NULL DEFAULT '1',
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_shift`
--

INSERT INTO `tbl_shift` (`Shift_ID`, `Shift_Name`, `Shift_status`, `Created`, `Modified`) VALUES
(1, 'N/A', 1, '', ''),
(2, '2nd Shift', 1, '', ''),
(3, '3rd Shift', 1, '', ''),
(4, '4th shift', 1, '', ''),
(5, '3rd Shift1', 1, '', ''),
(6, '3rd Shift', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms`
--

CREATE TABLE `tbl_sms` (
  `SMSID` int(5) NOT NULL,
  `SMSTitle` varchar(100) NOT NULL,
  `SMSCategory` int(11) NOT NULL COMMENT 'Present:1, General:2;  Result:3; Teacher:4;',
  `SMSBody` varchar(255) NOT NULL,
  `Created` varchar(55) NOT NULL,
  `Modified` varchar(55) NOT NULL,
  `SMS_Status` int(5) NOT NULL,
  `SMS_SendStatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms`
--

INSERT INTO `tbl_sms` (`SMSID`, `SMSTitle`, `SMSCategory`, `SMSBody`, `Created`, `Modified`, `SMS_Status`, `SMS_SendStatus`) VALUES
(1, 'Absent', 1, '<p>is absent today. Please send your $ to&nbsp;school;</p>\r\n\r\n<p>Principal,</p>\r\n\r\n<p>Dhaka Cambridge Int. School.</p>\r\n', '08-05-2018 18:58:14', '30-07-2018 13:35:52', 1, 0),
(2, 'Present', 1, '<p>is present at school today.<br />\r\nPrincipal,<br />\r\nDhaka Cambridge Int. School.</p>\r\n', '', '30-07-2018 13:36:02', 1, 0),
(3, 'Holy Day', 2, '<p>01 july,2018 is the Holiday. so School will be closed.<br />\r\nRegards<br />\r\nPrincipal<br />\r\nDhaka Cambridge Int. School</p>\r\n', '', '01-07-2018 12:17:03', 1, 0),
(4, ' Teacher General Notice', 4, '<p>Dear Teacher, 10 July,2018 will be an important meeting in school. please attend in time.<br />\r\nRegards,<br />\r\nPrincipal,<br />\r\nDhaka Cambridge Int. School.</p>\r\n', '', '04-07-2018 13:17:56', 1, 0),
(5, 'Student Result', 3, '<p>Result has been published today.</p>\r\n', '', '11-07-2018 18:05:20', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sms_transactions`
--

CREATE TABLE `tbl_sms_transactions` (
  `SMSID` int(11) NOT NULL,
  `SMS_stu_medium_ID` int(5) NOT NULL,
  `SMS_stu_shift_ID` int(5) NOT NULL,
  `SMS_stu_section_ID` int(12) NOT NULL,
  `SMS_stu_group_ID` int(11) NOT NULL,
  `SMS_stu_UNQ_ID` int(5) NOT NULL,
  `SMS_stu_class_ID` int(5) NOT NULL,
  `SMS_Std_parent_mobile` varchar(15) NOT NULL,
  `SMS_attendance_sms` varchar(255) NOT NULL,
  `SMS_Stu_general_status` int(5) NOT NULL,
  `SMS_student_status_attendance` int(2) NOT NULL COMMENT '1:Present;2:Absent',
  `SMS_Stu_general_date` varchar(20) NOT NULL,
  `smsBodyfindGeneral` varchar(255) NOT NULL,
  `SMS_attendance_date` varchar(32) NOT NULL,
  `SMS_stu_craeted` varchar(32) NOT NULL,
  `SmsDate` varchar(15) NOT NULL,
  `BranchID` int(11) NOT NULL,
  `VoucherNumber` varchar(100) NOT NULL,
  `SmsAutoReceiver` int(11) NOT NULL COMMENT '0 = No, 1 = Yes',
  `SmsRegisterID` int(11) NOT NULL,
  `SmsReceiverName` varchar(150) NOT NULL,
  `SmsReceiverNumber` varchar(50) NOT NULL,
  `SmsReceiverType` int(11) NOT NULL COMMENT '1 = system regisger, 2 =  non system register',
  `SmsTextID` int(11) NOT NULL,
  `SmsText` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SmsActiveStatus` int(11) NOT NULL COMMENT '0 = Not sent, 1 = Sent',
  `SmsSentDate` varchar(15) NOT NULL,
  `SMS_Teacher_medium_ID` int(3) NOT NULL,
  `SMS_Teacher_shift_ID` int(3) NOT NULL,
  `SMS_Teacher_general_date` varchar(32) NOT NULL,
  `SMS_Teacher_UNQ_ID` int(15) NOT NULL,
  `SMS_Teacher_mobile` varchar(32) NOT NULL,
  `SMS_Teacher_general_status` int(3) NOT NULL,
  `smsBodyTeacherfindGeneral` varchar(255) NOT NULL,
  `SMS_Teacher_craeted` varchar(32) NOT NULL,
  `SMS_Result_Exam_ID` int(5) NOT NULL,
  `SMS_Result_Exam_Starus` int(3) NOT NULL,
  `SMS_Result_Exam_Body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sms_transactions`
--

INSERT INTO `tbl_sms_transactions` (`SMSID`, `SMS_stu_medium_ID`, `SMS_stu_shift_ID`, `SMS_stu_section_ID`, `SMS_stu_group_ID`, `SMS_stu_UNQ_ID`, `SMS_stu_class_ID`, `SMS_Std_parent_mobile`, `SMS_attendance_sms`, `SMS_Stu_general_status`, `SMS_student_status_attendance`, `SMS_Stu_general_date`, `smsBodyfindGeneral`, `SMS_attendance_date`, `SMS_stu_craeted`, `SmsDate`, `BranchID`, `VoucherNumber`, `SmsAutoReceiver`, `SmsRegisterID`, `SmsReceiverName`, `SmsReceiverNumber`, `SmsReceiverType`, `SmsTextID`, `SmsText`, `SmsActiveStatus`, `SmsSentDate`, `SMS_Teacher_medium_ID`, `SMS_Teacher_shift_ID`, `SMS_Teacher_general_date`, `SMS_Teacher_UNQ_ID`, `SMS_Teacher_mobile`, `SMS_Teacher_general_status`, `smsBodyTeacherfindGeneral`, `SMS_Teacher_craeted`, `SMS_Result_Exam_ID`, `SMS_Result_Exam_Starus`, `SMS_Result_Exam_Body`) VALUES
(1, 1, 1, 1, 0, 20170091, 4, '8801783365990', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(2, 1, 1, 1, 0, 20170179, 4, '8801556510302', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(3, 1, 1, 1, 0, 20170180, 4, '8801883997945', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(4, 1, 1, 1, 0, 20170181, 4, '8801946386860', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(5, 1, 1, 1, 0, 20170182, 4, '8801711143723', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(6, 1, 1, 1, 0, 20170183, 4, '8801718420693', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(7, 1, 1, 1, 0, 20170184, 4, '8801716045805', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(8, 1, 1, 1, 0, 20170185, 4, '8801716564213', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(9, 1, 1, 1, 0, 20170096, 4, '8801884715598', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(10, 1, 1, 1, 0, 20170186, 4, '8801927407975', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(11, 1, 1, 1, 0, 20170092, 4, '8801812257454', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(12, 1, 1, 1, 0, 20170097, 4, '8801712743571', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(13, 1, 1, 1, 0, 20170188, 4, '8801952491755', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(14, 1, 1, 1, 0, 20170094, 4, '8801917289897', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(15, 1, 1, 1, 0, 20170095, 4, '8801680802965', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(16, 1, 1, 1, 0, 20170189, 4, '8801933122095', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(17, 1, 1, 1, 0, 20170190, 4, '8801720426663', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(18, 1, 1, 1, 0, 20170203, 4, '8801688929848', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(19, 1, 1, 1, 0, 20170275, 4, '8801735966252', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(20, 1, 1, 2, 0, 20170088, 4, '8801778743580', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(21, 1, 1, 2, 0, 20170087, 4, '8801905700663', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(22, 1, 1, 2, 0, 20170084, 4, '8801516150565', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(23, 1, 1, 2, 0, 20170085, 4, '8801956604329', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(24, 1, 1, 2, 0, 20170086, 4, '8801830337016', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(25, 1, 1, 2, 0, 20170191, 4, '8801761389268', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(26, 1, 1, 2, 0, 20170082, 4, '8801790167895', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(27, 1, 1, 2, 0, 20170089, 4, '8801913380094', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(28, 1, 1, 2, 0, 20170192, 4, '8801911172984', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(29, 1, 1, 2, 0, 20170081, 4, '8801765454145', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(30, 1, 1, 2, 0, 20170194, 4, '8801715458666', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(31, 1, 1, 2, 0, 20170195, 4, '8801989863767', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(32, 1, 1, 2, 0, 20170100, 4, '8801828432932', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(33, 1, 1, 2, 0, 20170099, 4, '8801933237248', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(34, 1, 1, 2, 0, 20170196, 4, '8801908983844', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(35, 1, 1, 2, 0, 20170198, 4, '8801917442589', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(36, 1, 1, 2, 0, 20170083, 4, '8801720191113', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(37, 1, 1, 2, 0, 1018, 4, '8801726407562', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(38, 1, 1, 2, 0, 20170199, 4, '8801971304863', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(39, 1, 1, 2, 0, 20170201, 4, '8801971304863', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(40, 1, 1, 1, 0, 20170338, 5, '8801829589569', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(41, 1, 1, 1, 0, 20170164, 5, '8801981365141', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(42, 1, 1, 1, 0, 20170079, 5, '8801795512736', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(43, 1, 1, 1, 0, 20170080, 5, '8801726487562', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(44, 1, 1, 1, 0, 20170074, 5, '8801843419245', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(45, 1, 1, 1, 0, 20170076, 5, '8801789502694', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(46, 1, 1, 1, 0, 20170077, 5, '8801843926633', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(47, 1, 1, 1, 0, 20170075, 5, '8801625004812', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(48, 1, 1, 1, 0, 20170078, 5, '8801718403986', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(49, 1, 1, 1, 0, 20170168, 5, '8801855372576', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(50, 1, 1, 1, 0, 20170165, 5, '8801867515023', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(51, 1, 1, 1, 0, 20170169, 5, '8801914751148', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(52, 1, 1, 1, 0, 20170166, 5, '8801914505621', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(53, 1, 1, 1, 0, 20170073, 5, '8801923085800', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(54, 1, 1, 1, 0, 20170167, 5, '8801983671884', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(55, 1, 1, 1, 0, 20170170, 5, '8801721111247', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(56, 1, 1, 1, 0, 20170268, 5, '8801722711877', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(57, 1, 1, 2, 0, 20170171, 5, '8801735660276', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(58, 1, 1, 2, 0, 20170172, 5, '8801715516100', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(59, 1, 1, 2, 0, 20170065, 5, '8801795479693', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(60, 1, 1, 2, 0, 20170173, 5, '8801707562902', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(61, 1, 1, 2, 0, 20170061, 5, '8801746010345', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(62, 1, 1, 2, 0, 20170069, 5, '8801923832584', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(63, 1, 1, 2, 0, 20170072, 5, '8801720208743', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(64, 1, 1, 2, 0, 20170174, 5, '8801775263650', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(65, 1, 1, 2, 0, 20170070, 5, '8801955667856', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(66, 1, 1, 2, 0, 20170071, 5, '8801981234880', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(67, 1, 1, 2, 0, 20170064, 5, '8801769900334', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(68, 1, 1, 2, 0, 20170063, 5, '8801740751036', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(69, 1, 1, 2, 0, 20170068, 5, '8801789502694', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(70, 1, 1, 2, 0, 20170175, 5, '8801834870234', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(71, 1, 1, 2, 0, 20170176, 5, '8801914488270', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(72, 1, 1, 2, 0, 20170067, 5, '8801715852483', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(73, 1, 1, 2, 0, 20170178, 5, '8801725828179', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(74, 1, 1, 2, 0, 20170336, 5, '8801798757386', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(75, 1, 1, 0, 0, 20170279, 6, '8801912848798', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(76, 1, 1, 0, 0, 20170126, 6, '8801719686734', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(77, 1, 1, 0, 0, 20170127, 6, '8801756221944', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(78, 1, 1, 0, 0, 20170128, 6, '8801715691703', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(79, 1, 1, 0, 0, 20170130, 6, '8801961896190', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(80, 1, 1, 0, 0, 20170129, 6, '8801717559311', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(81, 1, 1, 0, 0, 20170131, 6, '8801911816389', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(82, 1, 1, 0, 0, 20170132, 6, '8801725392837', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(83, 1, 1, 0, 0, 20170052, 6, '8801999796661', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(84, 1, 1, 0, 0, 20170133, 6, '8801726586797', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(85, 1, 1, 0, 0, 20170134, 6, '8801765802915', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(86, 1, 1, 0, 0, 20170135, 6, '8801993301652', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(87, 1, 1, 0, 0, 20170136, 6, '8801718882715', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(88, 1, 1, 0, 0, 20170137, 6, '8801729321697', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(89, 1, 1, 0, 0, 20170139, 6, '8801960690727', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(90, 1, 1, 0, 0, 20170138, 6, '8801625482870', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(91, 1, 1, 0, 0, 20170053, 6, '8801716290556', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(92, 1, 1, 0, 0, 20170141, 6, '8801723607380', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(93, 1, 1, 0, 0, 20170142, 6, '8801789777832', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(94, 1, 1, 0, 0, 20170143, 6, '8801918102354', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(95, 1, 1, 0, 0, 20170276, 6, '8801838301636', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(96, 1, 1, 0, 0, 20170304, 6, '8801993313652', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(97, 1, 1, 0, 0, 20170040, 7, '8801981324089', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(98, 1, 1, 0, 0, 20170144, 7, '8801762893126', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(99, 1, 1, 0, 0, 20170041, 7, '8801917615279', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(100, 1, 1, 0, 0, 20170042, 7, '8801865505606', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(101, 1, 1, 0, 0, 20170043, 7, '8801830337016', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(102, 1, 1, 0, 0, 20170044, 7, '8801989457530', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(103, 1, 1, 0, 0, 20170045, 7, '8801718479503', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(104, 1, 1, 0, 0, 20170145, 7, '8801939863506', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(105, 1, 1, 0, 0, 20170046, 7, '8801728366893', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(106, 1, 1, 0, 0, 20170054, 7, '8801843166900', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(107, 1, 1, 0, 0, 20170047, 7, '8801715852483', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(108, 1, 1, 0, 0, 1025, 7, '8801724938833', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(109, 1, 1, 0, 0, 20170146, 7, '8801776457413', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(110, 1, 1, 0, 0, 20170147, 7, '8801994003394', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(111, 1, 1, 0, 0, 20170003, 8, '8801795358101', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(112, 1, 1, 0, 0, 20170004, 8, '8801717319573', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(113, 1, 1, 0, 0, 20170014, 8, '8801757004621', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(114, 1, 1, 0, 0, 20170006, 8, '8801714750556', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(115, 1, 1, 0, 0, 20170005, 8, '8801865505606', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(116, 1, 1, 0, 0, 20170007, 8, '8801911701538', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(117, 1, 1, 0, 0, 20170148, 8, '8801865147730', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(118, 1, 1, 0, 0, 20170009, 8, '8801999796661', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(119, 1, 1, 0, 0, 20170008, 8, '8801516150565', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(120, 1, 1, 0, 0, 20170016, 8, '8801912242149', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(121, 1, 1, 0, 0, 20170010, 8, '8801981434294', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(122, 1, 1, 0, 0, 20170015, 8, '8801728852581', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(123, 1, 1, 0, 0, 20170011, 8, '8801708110674', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(124, 1, 1, 0, 0, 20170013, 8, '8801962658979', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(125, 1, 1, 0, 0, 20170012, 8, '8801706990355', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(126, 1, 1, 0, 0, 1026, 8, '8801729338833', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(127, 1, 1, 0, 0, 20170002, 9, '8801749448785', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(128, 1, 1, 0, 0, 20170150, 9, '8801938247469', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(129, 1, 1, 0, 0, 20170151, 9, '8801687743784', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(130, 1, 1, 0, 0, 20170152, 9, '881756725548', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(131, 1, 1, 0, 0, 20170153, 9, '8801768539686', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(132, 1, 1, 0, 0, 20170154, 9, '8801856697517', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(133, 1, 1, 0, 0, 20170155, 9, '8801689925326', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(134, 1, 1, 0, 0, 20170337, 9, '8801706990355', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(135, 1, 1, 0, 0, 20170157, 9, '8801876506697', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(136, 1, 1, 0, 0, 20170158, 9, '8801760425533', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(137, 1, 1, 0, 0, 20170162, 10, '8801908983844', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(138, 1, 1, 0, 0, 20170059, 10, '8801715852483', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(139, 1, 1, 0, 0, 20170163, 10, '8801944662967', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(140, 1, 1, 0, 0, 20170060, 10, '8801968541114', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(141, 1, 1, 0, 0, 20170056, 10, '8801703800624', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(142, 1, 1, 0, 0, 20170058, 10, '8801937037825', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(143, 1, 1, 0, 0, 20170159, 10, '8801551077728', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(144, 1, 1, 0, 0, 20170160, 10, '8801756221944', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(145, 1, 1, 0, 0, 20170161, 10, '8801985129188', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, ''),
(146, 1, 1, 0, 0, 20170057, 10, '8801915619214', '', 1, 0, '02-08-2018', '01 july,2018 is the Holiday. so School will be closed.RegardsPrincipalDhaka Cambridge Int. School', '', '02-08-2018 19:00:45', '', 0, '', 0, 0, '', '', 0, 0, '', 0, '', 0, 0, '', 0, '', 0, '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `Staff_ID` int(10) NOT NULL,
  `Staff_UniqueID` varchar(15) NOT NULL,
  `Staff_Name` varchar(55) NOT NULL,
  `Staff_FathersName` varchar(55) NOT NULL,
  `Staff_MothersName` varchar(55) NOT NULL,
  `Staff_IndexNo` varchar(25) NOT NULL,
  `Staff_NationalID` varchar(55) NOT NULL,
  `Staff_gender` int(2) NOT NULL,
  `Staff_DateOfBirth` varchar(55) NOT NULL,
  `Staff_email` varchar(55) NOT NULL,
  `Staff_address` varchar(55) NOT NULL,
  `Staff_mobile` int(15) NOT NULL,
  `Staff_joining_date` varchar(32) NOT NULL,
  `Staff_designation` int(5) NOT NULL,
  `Staff_marital_status` int(3) NOT NULL,
  `Staff_shift` int(2) NOT NULL,
  `Staff_medium` int(11) NOT NULL,
  `Staff_BloodGroup` varchar(10) NOT NULL,
  `Staff_religion` varchar(5) NOT NULL,
  `Staff_status` varchar(5) NOT NULL,
  `Image` varchar(55) NOT NULL,
  `Created` varchar(55) NOT NULL,
  `Modified` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`Staff_ID`, `Staff_UniqueID`, `Staff_Name`, `Staff_FathersName`, `Staff_MothersName`, `Staff_IndexNo`, `Staff_NationalID`, `Staff_gender`, `Staff_DateOfBirth`, `Staff_email`, `Staff_address`, `Staff_mobile`, `Staff_joining_date`, `Staff_designation`, `Staff_marital_status`, `Staff_shift`, `Staff_medium`, `Staff_BloodGroup`, `Staff_religion`, `Staff_status`, `Image`, `Created`, `Modified`) VALUES
(1, '101', 'Arif haque', 'Ariful Islam', 'Fahima', '121212', '124121335456', 1, '12-05-2018', 'arif@gmail.com', '                              Dhaka', 127664565, '12-05-2012', 4, 1, 1, 1, '1', '1', '1', 'img-03.jpg', '12-05-2018 14:09:52', '12-05-2018 14:45:58'),
(3, '103', 'Abdus salam', 'Abdulla', 'Halima', '1212', '12554454564', 1, '12-05-21988', 'salam@gmial.com', 'Dhaka', 2147483647, '12-05-2018', 4, 1, 1, 1, '', '1', '1', 'mahbub2.jpg', '12-05-2018 14:47:44', ''),
(4, '0125', 'ss', 'sssa', 'ssaas', '154554', '453641', 1, '12-05-2018', '', '                                                       ', 2454545, '12-05-2018', 0, 1, 1, 1, '1', '1', '1', 'img-032.jpg', '12-05-2018 14:48:22', '12-05-2018 14:48:39');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `Std_ID` int(11) NOT NULL,
  `Std_Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `STD_UNQ_ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Std_class_ID` int(11) NOT NULL,
  `Std_roll` int(11) NOT NULL,
  `Std_shift_ID` int(5) NOT NULL,
  `Std_medium_ID` int(5) NOT NULL,
  `Std_section_ID` int(11) NOT NULL,
  `Std_group_ID` int(11) NOT NULL,
  `Std_parent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_parent2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_registration_date` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Std_parent_mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_EntryDateTime` datetime NOT NULL,
  `Std_birthday` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Std_gender` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_address` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Std_mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_email` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Std_religion` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Std_transport_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Std_hostel_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Created` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Modified` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Std_birth_ID` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Student_BloodGroup` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `Std_academic_ID` int(11) NOT NULL,
  `Std_Promotion_Status` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`Std_ID`, `Std_Name`, `STD_UNQ_ID`, `Std_class_ID`, `Std_roll`, `Std_shift_ID`, `Std_medium_ID`, `Std_section_ID`, `Std_group_ID`, `Std_parent`, `Std_parent2`, `Std_registration_date`, `Std_parent_mobile`, `Std_EntryDateTime`, `Std_birthday`, `Std_gender`, `Image`, `Std_address`, `Std_mobile`, `Std_email`, `Std_religion`, `Std_transport_ID`, `Std_hostel_ID`, `Created`, `Modified`, `Std_status`, `Std_birth_ID`, `Student_BloodGroup`, `Std_academic_ID`, `Std_Promotion_Status`) VALUES
(1, 'Md. Tanzim al Ayat', '20170018', 1, 1, 2, 1, 1, 0, 'Abdul Hannan', 'Mahfuza Alam', '06-07-2018', '8801717925256', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '', '', '1', '', '', '25-07-2018 18:25:34', '', '1', '', '1', 1, 0),
(2, 'Md Mihad Khan', '20170019', 1, 2, 2, 1, 1, 0, 'Ujjal Hosen Khan', 'Mukta Agory', '06-07-2018', '881905700663', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '25-07-2018 18:22:25', '', '1', '', '1', 1, 0),
(3, 'Fariha Akter Mumu', '20170248', 1, 3, 2, 1, 1, 0, 'Forhad Hosen', 'Sathi Akter', '06-07-2018', '8801785461766', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:52:40', '', '1', '', '1', 1, 0),
(4, 'Tanima Islam', '20170330', 1, 4, 2, 1, 1, 0, 'Masud Haolader', 'Kamrunnahar', '06-07-2018', '8801716293873', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 12:34:22', '', '1', '', '1', 1, 0),
(5, 'K.M Ferdous Hasan Siam', '20170030', 1, 5, 2, 1, 1, 0, 'Mahbubur Rahman', 'Rabeya Hasan', '06-07-2018', '8801703800624', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:53:15', '', '1', '', '1', 1, 0),
(6, 'Zarif Abdulla Inan', '20170028', 1, 6, 2, 1, 1, 0, 'Kabir Hosen', 'Himu Binte Noor', '06-07-2018', '8801773241351', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:53:34', '', '1', '', '1', 1, 0),
(7, 'Umme Faiza Safa', '20170039', 1, 7, 2, 1, 1, 0, 'Salim Ullah', 'Farzana Khanam', '06-07-2018', '8801914848215', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:53:54', '', '1', '', '1', 1, 0),
(8, 'Adrita', '20170037', 1, 8, 2, 1, 1, 0, 'Manik Mia ', 'Laboni Akter', '06-07-2018', '8801925729046', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:54:10', '', '1', '', '1', 1, 0),
(9, 'Azharul Islam', '20170022', 1, 9, 2, 1, 1, 0, 'Afzal Hosen', 'Jesmin Begum', '06-07-2018', '8801917418734', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '25-07-2018 17:48:22', '', '1', '', '1', 1, 0),
(13, 'Siya Moni', '20170032', 1, 10, 2, 1, 1, 0, 'Shahin Prodan', 'Anika', '06-07-2018', '8801966856291', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:54:49', '', '1', '', '1', 1, 0),
(14, 'Israt Jahan Lamia', '1002', 1, 12, 2, 1, 1, 0, 'Ripon Sarker', 'Fariha Sultana', '06-07-2018', '8801726407562', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:55:18', '', '2', '', '1', 1, 0),
(15, 'Ayesha Siddika', '20170250', 1, 13, 2, 1, 1, 0, 'Abu bakar Siddik', 'Asma Begum', '06-07-2018', '8801709377050', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 14:02:42', '', '1', '', '1', 1, 0),
(16, 'Yeasin Arafat Inkiat', '20170257', 1, 14, 2, 1, 1, 0, 'Abdul Kader', 'Yesmin Akter', '06-07-2018', '8801998825908', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 11:47:45', '', '1', '', '', 1, 0),
(17, 'Haa Meem', '20170251', 1, 15, 2, 1, 1, 0, 'Jalal Mia', 'Rupali Begum', '06-07-2018', '8801821789006', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 11:48:50', '', '1', '', '', 1, 0),
(18, 'Sumia Akter Meem', '20170252', 1, 16, 2, 1, 1, 0, 'Abu bakar Siddik', 'Salma Khatun', '06-07-2018', '8801701910044', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 13:09:24', '', '1', '', '', 1, 0),
(19, 'Hafizur Islam Rakib', '20170253', 1, 17, 2, 1, 1, 0, 'Hanif', 'Lipi Akter', '06-07-2018', '8801778841944', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 11:52:18', '', '1', '', '', 1, 0),
(20, 'Arsh Rahman Ayat', '1004', 1, 18, 2, 1, 1, 0, 'Arman Munna', 'Kanika Yesmin', '06-07-2018', '8801928965583', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 12:38:10', '', '2', '', '', 1, 0),
(21, 'Arian Arub', '20170262', 1, 19, 2, 1, 1, 0, 'Osman Goni', 'Salma Akter', '06-07-2018', '8801815066578', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 13:08:48', '', '1', '', '', 1, 0),
(22, 'Tanvir Rahman Tayef', '20170256', 1, 20, 2, 1, 1, 0, 'Abdul Hakim', 'Rabeya Akter', '06-07-2018', '8801718403986', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:47:45', '', '1', '', '', 1, 0),
(23, 'Ismot Ara Mousumi', '20170038', 1, 1, 2, 1, 2, 0, 'Nurul Islam', 'Rubina Akter', '06-07-2018', '8801946558138', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 11:56:13', '', '1', '', '', 1, 0),
(24, 'Md. Salman Hasan Ajoy', '20170031', 1, 2, 2, 1, 2, 0, ' Nazmul Hasan', 'Shuchana hasan', '06-07-2018', '8801850505607', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 11:56:58', '', '1', '', '', 1, 0),
(25, 'Md. Yeasin Arafat Jihad', '20170024', 1, 3, 2, 1, 2, 0, 'Ibrahim Khan', 'Yesmin Akter', '06-07-2018', '8801964007364', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 11:57:38', '', '1', '', '', 1, 0),
(26, 'Tasnoor Khan Joya', '20170017', 1, 4, 2, 1, 2, 0, 'Delwar Hosen', 'Rubi Akter', '06-07-2018', '8801707562902', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 11:58:20', '', '1', '', '', 1, 0),
(27, 'Jobayer Hosen Jaber', '20170332', 1, 5, 2, 1, 2, 0, 'Mahbubur Rahman', 'Sathi Akter', '06-07-2018', '8801928534603', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:48:02', '', '1', '', '', 1, 0),
(28, 'Jobayer Hosen Zarif', '20170021', 1, 6, 2, 1, 2, 0, 'Salauddin', 'Jahida Islam', '06-07-2018', '8801727412351', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:00:06', '', '1', '', '', 1, 0),
(29, 'Parthona Debi', '20170333', 1, 7, 2, 1, 2, 0, 'Sumon Basfore', 'Mitu Basfore', '06-07-2018', '8801705268930', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '2', '', '', '16-07-2018 12:39:44', '', '1', '', '', 1, 0),
(30, 'Mumtahana Reem', '20170259', 1, 8, 2, 1, 2, 0, 'Salauddin', 'Afroza Iti', '06-07-2018', '8801681166131', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 13:05:53', '', '1', '', '', 1, 0),
(31, 'Md. Ibrahim Hossen Ador', '20170334', 1, 9, 2, 1, 2, 0, 'Delwar Hosen', 'Rubina Islam', '06-07-2018', '8801853661222', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 12:40:09', '', '1', '', '', 1, 0),
(32, 'Rahib Ahmed', '20170027', 1, 10, 2, 1, 2, 0, 'Saki Ahmed', 'Samsun Nahar', '06-07-2018', '8801710299818', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:03:17', '', '1', '', '', 1, 0),
(33, 'Tasnim Jahan Janna', '20170023', 1, 11, 2, 1, 2, 0, 'Jahirul Islam', ' Fatema Khatun', '06-07-2018', '8801783591628', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:04:08', '', '1', '', '', 1, 0),
(34, 'Farzana Akter Fariha', '20170029', 1, 12, 2, 1, 2, 0, 'Omar Faruk', 'Suchana Khatun', '06-07-2018', '8801781818010', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:05:00', '', '1', '', '', 1, 0),
(35, 'Maimuna Tasnim Nabiha', '20170036', 1, 13, 2, 1, 2, 0, 'Emdadul Haq', 'Selina Khanom', '06-07-2018', '8801724050925', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:05:42', '', '1', '', '', 1, 0),
(36, 'Abdullah Al Sadid', '20170261', 1, 14, 2, 1, 2, 0, 'Samiul Islam', 'Sumita Akter', '06-07-2018', '8801794428686', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:06:30', '', '1', '', '', 1, 0),
(37, 'Shah Arian', '20170255', 1, 15, 2, 1, 2, 0, 'Shah Sarwar', 'Kusum Sarwar', '06-07-2018', '8801701658495', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:07:11', '', '1', '', '', 1, 0),
(38, 'Taspia Sultana', '20170263', 1, 16, 2, 1, 2, 0, 'Mokbul Sarder', 'Hasina Begum', '06-07-2018', '8801966405801', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:07:55', '', '1', '', '', 1, 0),
(39, 'Atifa Islam Nusha', '20170264', 1, 17, 2, 1, 2, 0, 'Atif Islam', 'Farzana Akter', '06-07-2018', '8801672460449', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:08:44', '', '1', '', '', 1, 0),
(40, 'Moutusi Talukder', '20170265', 1, 18, 2, 1, 2, 0, 'Masum Hasan', 'Nishat Shahid', '06-07-2018', '8801771908682', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:09:32', '', '1', '', '', 1, 0),
(41, 'Kotha Rani Das', '20170266', 1, 19, 2, 1, 2, 0, 'Sanjit Kumer Das', 'Baby Rani Das', '06-07-2018', '8801936188831', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '2', '', '', '06-07-2018 12:10:31', '', '1', '', '', 1, 0),
(42, 'Atib Ahmed', '20170267', 1, 20, 2, 1, 2, 0, 'Sohel Ahmed', 'Rabeya Akter', '06-07-2018', '8801517909586', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:11:17', '', '1', '', '', 1, 0),
(43, 'Amena Akter Meem', '20170272', 1, 21, 2, 1, 2, 0, 'Delwar Saied', 'Urmi Sultana', '06-07-2018', '8801913684139', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:12:07', '', '1', '', '', 1, 0),
(44, 'Ikhtiar uddin khan', '20170303', 1, 22, 2, 1, 2, 0, 'Shariful islam', 'Hasna Banu', '06-07-2018', '8801733177812', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 14:03:24', '', '1', '', '1', 1, 0),
(45, 'Habibur Rahman', '20170111', 2, 1, 2, 1, 1, 0, 'Aminur rahman', 'Sajeda khatun', '06-07-2018', '8801777123734', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:17:07', '', '1', '', '', 1, 0),
(46, 'Adib Hasan', '20170102', 2, 2, 2, 1, 1, 0, 'Samsul haq', 'Khaleda Akter', '06-07-2018', '8801739535340', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:17:54', '', '1', '', '', 1, 0),
(47, 'purnami dey', '20170224', 2, 3, 2, 1, 1, 0, 'Sanchoy Dey', 'Lila Mojumder', '06-07-2018', '8801739447854', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '2', '', '', '06-07-2018 12:19:10', '', '1', '', '', 1, 0),
(48, 'Mirza Samiul', '2170225', 2, 4, 2, 1, 1, 0, 'Liton Mirza', 'Amena Khatun', '06-07-2018', '8801729349510', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:19:52', '', '1', '', '', 1, 0),
(49, 'Saiful Islam Samir', '20170103', 2, 5, 2, 1, 1, 0, 'Akter Hosen', 'Nargis Akter', '06-07-2018', '8801996805446', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:20:32', '', '1', '', '', 1, 0),
(50, 'Shah Ali Noor', '20170226', 2, 6, 2, 1, 1, 0, 'Sha Sarwar', 'Kusum Sarwar', '06-07-2018', '8801616565838', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:21:10', '', '1', '', '', 1, 0),
(51, 'Umme Habiba', '20170106', 2, 7, 2, 1, 1, 0, 'Asom Ali', 'Sumaia Bithi', '06-07-2018', '8801720580164', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:21:49', '', '1', '', '', 1, 0),
(52, 'Sabrina islam Marium', '20170104', 2, 8, 2, 1, 1, 0, 'Samsul haq', 'Runa Akter', '06-07-2018', '8801926192068', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:22:33', '', '1', '', '', 1, 0),
(53, 'Washfia Hasan', '20170113', 2, 9, 2, 1, 1, 0, 'Nazmul Hasan', 'Tania Rahman', '06-07-2018', '8801867515023', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:23:25', '', '1', '', '', 1, 0),
(54, 'Asia Afsana', '20170227', 2, 10, 2, 1, 1, 0, 'Alamgir Hosen', 'Amina Khatun', '06-07-2018', '8801735660276', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:24:07', '', '1', '', '', 1, 0),
(55, 'Khadizatul Kubra', '20170228', 2, 11, 2, 1, 1, 0, 'Abdul Khalek', 'Mahmuda Khatun', '06-07-2018', '8801763216082', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:24:42', '', '1', '', '', 1, 0),
(56, 'Samira Islam Arina', '20170229', 2, 13, 2, 1, 1, 0, 'Arifur Rahman', 'Shahinur Akter', '06-07-2018', '8801734046755', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 12:25:24', '', '1', '', '', 1, 0),
(57, 'Wayes Karuni', '20170230', 2, 14, 2, 1, 1, 0, 'Shahidul Islam', 'Ankhi', '06-07-2018', '8801930741327', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 12:26:45', '', '1', '', '', 1, 0),
(58, 'Fardin Ali', '20170001', 2, 15, 2, 1, 1, 0, 'Nekbor Ali', 'Jesmin Akter', '06-07-2018', '8801920485262', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 14:22:04', '', '1', '', '1', 1, 0),
(59, 'Humayra Tasnim Raisa', '20170231', 2, 16, 2, 1, 1, 0, 'Rubel', 'Kulsum', '06-07-2018', '8801867539529', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 14:22:32', '', '1', '', '1', 1, 0),
(60, 'Tanha Tahrin Tamanna', '20170270', 2, 17, 2, 1, 1, 0, 'Ali Baker', 'Bina Akter', '06-07-2018', '8801686092782', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 14:23:02', '', '1', '', '1', 1, 0),
(61, 'Tawhid Alam', '20170108', 2, 1, 2, 1, 2, 0, 'Nazmul Alam', 'Tahmina Afroz', '06-07-2018', '8801742802424', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 13:58:12', '', '1', '', '', 1, 0),
(62, 'Ayesha Tahsin', '20170234', 2, 2, 2, 1, 2, 0, 'Abusaleh', 'Sarmin Akter', '06-07-2018', '8801632068692', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 13:58:55', '', '1', '', '', 1, 0),
(63, 'Abrar walid', '20170107', 2, 3, 2, 1, 2, 0, 'Sohel Rana', 'Farzana Islam', '06-07-2018', '8801676595217', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 13:59:43', '', '1', '', '', 1, 0),
(64, 'Maymuna Akter', '20170105', 2, 4, 2, 1, 2, 0, 'Ahsan Ullah', 'Parul Begum', '06-07-2018', '8801732337943', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 13:14:24', '', '1', '', '', 1, 0),
(65, 'Alfesani Milon', '20170110', 2, 5, 2, 1, 2, 0, 'Rajob Ali', 'Modhu Mala', '06-07-2018', '8801793894211', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:01:16', '', '1', '', '', 1, 0),
(66, 'Arian Ahmed swapnil', '20170235', 2, 6, 2, 1, 2, 0, 'Hosen Kabir', 'Swapna Akter', '06-07-2018', '8801992707719', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 13:02:26', '', '1', '', '', 1, 0),
(67, 'Aria afsin', '20170236', 2, 7, 2, 1, 2, 0, 'Badal Hosen', 'Shahana akter', '06-07-2018', '8801627766452', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:04:21', '', '1', '', '', 1, 0),
(68, 'Ahnaf adil Ishrak', '20170238', 2, 9, 2, 1, 2, 0, 'Ainul Haq', 'Sanzia', '06-07-2018', '8801734146038', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:05:33', '', '1', '', '', 1, 0),
(69, 'Sarwar Islam', '20170237', 2, 10, 2, 1, 2, 0, 'Abdul karim', 'sumi Akter', '06-07-2018', '8801793317416', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:06:24', '', '1', '', '', 1, 0),
(70, 'Nusrat Jahan Jidnee', '20170239', 2, 11, 2, 1, 2, 0, 'Noor Ahmed', 'Dipa Akter', '06-07-2018', '8801725815105', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:07:03', '', '1', '', '', 1, 0),
(71, 'Mahin Sahriar', '20170269', 2, 12, 2, 1, 2, 0, 'Merajul Islam', 'Rumi Khatun', '06-07-2018', '8801746010345', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 15:24:59', '', '1', '', '', 1, 0),
(72, 'Momtahina Zaman', '20170240', 2, 13, 2, 1, 2, 0, 'Masudzzaman', '', '06-07-2018', '8801917759403', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:08:31', '', '1', '', '', 1, 0),
(73, 'Mahmudul Hasan Nibir', '20170109', 2, 14, 2, 1, 2, 0, 'Nazmul haq Nazak', 'Salma Akter', '06-07-2018', '8801910722703', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:09:38', '', '1', '', '', 1, 0),
(74, 'Afnun Ahmed', '20170241', 2, 15, 2, 1, 2, 0, 'Rasheduzzaman', 'Anika Bushra', '06-07-2018', '8801763204313', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 13:01:57', '', '1', '', '', 1, 0),
(75, 'Afsana Akter meem', '20170242', 2, 16, 2, 1, 2, 0, 'Alamgir Hosen', 'Maksuda Akter', '06-07-2018', '8801834870234', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:11:36', '', '1', '', '', 1, 0),
(76, 'Huzaifa Hosen', '20170243', 2, 17, 2, 1, 2, 0, 'Feroz Hosen', 'Khadiza Akter', '06-07-2018', '8801935203123', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:12:14', '', '1', '', '', 1, 0),
(77, 'Saim Hasan Sifat', '20170244', 2, 18, 2, 1, 2, 0, 'Insan Ali', 'Sayma Begum', '06-07-2018', '8801740751036', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:13:02', '', '1', '', '', 1, 0),
(78, 'Sneha Hasan Ohana', '20170245', 2, 19, 2, 1, 2, 0, 'Nazmul Hasan', 'Suchana Hasan', '06-07-2018', '8801881654720', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 14:24:01', '', '1', '', '1', 1, 0),
(79, 'Miftahul Arefin Adib', '20170246', 2, 20, 2, 1, 2, 0, 'Golam Sarwar', 'Afroza Khatun', '06-07-2018', '8801724894343', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:14:43', '', '1', '', '', 1, 0),
(80, 'Rabiul Islam', '20170247', 2, 21, 2, 1, 2, 0, 'Manik mia', 'RunaBegum', '06-07-2018', '8801917442589', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:28:19', '', '1', '', '', 1, 0),
(81, 'Ayesha Siddika Maisha', '20170214', 3, 1, 2, 1, 1, 0, 'Abubakar Sddik', 'Tahmina Afroz', '06-07-2018', '8801718689229', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:17:14', '', '1', '', '', 1, 0),
(82, 'Md. Jabir Ahmed Sinha', '20170119', 3, 3, 2, 1, 1, 0, 'Mamunor Rashid', 'Jesmin Akter', '06-07-2018', '8801792157174', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:18:01', '', '1', '', '', 1, 0),
(83, 'Reshadul Islam', '20170216', 3, 4, 2, 1, 1, 0, 'Rafiqul Islam', 'Roksana Islam', '06-07-2018', '8801716135252', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:34:32', '', '1', '', '', 1, 0),
(84, 'D.M Al Kaif', '20170217', 3, 5, 2, 1, 1, 0, 'Iqbal Hosen', 'Tahrima Khan', '06-07-2018', '8801790830670', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:19:36', '', '1', '', '', 1, 0),
(85, 'Mohtasimul Haque', '20170121', 3, 6, 2, 1, 1, 0, 'Rashedul Haq', 'Farida Parvin', '06-07-2018', '8801872229817', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:20:20', '', '1', '', '', 1, 0),
(86, 'Ayesha Siddika Humayra', '20170116', 3, 7, 2, 1, 1, 0, 'Ariful Islam', 'Sima Begum', '06-07-2018', '8801736235260', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:21:02', '', '1', '', '', 1, 0),
(87, 'Syed Alvi Al Avin', '20170218', 3, 8, 2, 1, 1, 0, 'Rasel Hosen', 'Nusrat Sharmin', '06-07-2018', '8801628463500', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:21:40', '', '1', '', '', 1, 0),
(88, 'Sadia Islam Diba', '1014', 3, 9, 2, 1, 1, 0, 'Sahidul Islam', 'Zannat Ara', '06-07-2018', '8801671971093', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 13:20:57', '', '2', '', '', 1, 0),
(89, 'Arifa Rahman', '20170219', 3, 10, 2, 1, 1, 0, 'Arif Hosen', 'Shamsunnahar', '06-07-2018', '8801739096891', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:33:06', '', '1', '', '', 1, 0),
(90, 'Akibur Rahman', '20170220', 3, 11, 2, 1, 1, 0, 'Manjur E Elahi', 'Sanjida Islam', '06-07-2018', '8801712530153', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:24:48', '', '1', '', '', 1, 0),
(91, 'Jafrin Sadaf', '20170125', 3, 12, 2, 1, 1, 0, 'Monjur Kabir', 'Kohinur Akter', '06-07-2018', '8801969103649', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:31:52', '', '1', '', '', 1, 0),
(92, 'Wakkimun Billah', '20170221', 3, 13, 2, 1, 1, 0, 'Wasir Billah', 'Nigar Sultana', '06-07-2018', '8801918169491', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:27:15', '', '1', '', '', 1, 0),
(93, 'Mahjabin Nusrat', '20170222', 3, 14, 2, 1, 1, 0, 'Mahbubul Alam', 'Moyna Khatun', '06-07-2018', '8801716293873', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:28:01', '', '1', '', '', 1, 0),
(94, 'Mohammad Ibrahim', '20170277', 3, 15, 2, 1, 1, 0, 'Chanchal Hosen', 'Rabeya Akter', '06-07-2018', '8801643960761', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:28:45', '', '1', '', '', 1, 0),
(95, 'Afifa Tasnim Megha', '20170223', 3, 16, 2, 1, 1, 0, 'Masud Zamadder', 'Parvin Akter', '06-07-2018', '8801739338423', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '18-07-2018 23:40:51', '', '1', '', '', 1, 0),
(96, 'Tawhid Al Mahmud', '20170204', 3, 1, 2, 1, 2, 0, 'Abdullah Al Baki', 'Jesmin Akter', '06-07-2018', '8801733933400', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:29:56', '', '1', '', '', 1, 0),
(97, 'Mahjabin Fariha Mridula', '20170124', 3, 2, 2, 1, 2, 0, 'Monsur Ali', 'Farzana Bobi', '06-07-2018', '8801741457605', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:31:29', '', '1', '', '', 1, 0),
(98, 'Jassica Islam', '20170123', 3, 3, 2, 1, 2, 0, 'Johirul Islam', 'Sabina Yesmin', '06-07-2018', '8801716575543', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:32:30', '', '1', '', '', 1, 0),
(99, 'Sidratul Muntaha Naomi', '20170122', 3, 4, 2, 1, 2, 0, 'Shahjahan Talu', 'Roksana Begum', '06-07-2018', '8801712458615', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:33:11', '', '1', '', '', 1, 0),
(100, 'Tahsin Islam', '20170118', 3, 5, 2, 1, 2, 0, 'Abdul Jalil', 'Sathi Akter', '06-07-2018', '8801920183216', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:33:59', '', '1', '', '', 1, 0),
(101, 'Noor-E Modina', '20170115', 3, 6, 2, 1, 2, 0, 'Hafijur Rahman', 'Sonia Sultana', '06-07-2018', '8801937315933', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:35:31', '', '1', '', '', 1, 0),
(102, 'Md. Fahim Hossian', '20170120', 3, 7, 2, 1, 2, 0, 'Saiful Islam', 'Firoza Parvin', '06-07-2018', '8801718935239', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:36:08', '', '1', '', '', 1, 0),
(103, 'Maimuna Akter Jui', '20170205', 3, 8, 2, 1, 2, 0, 'Jalal Mia', 'Rupali Begum', '06-07-2018', '8801821789006', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:36:55', '', '1', '', '', 1, 0),
(104, 'Arefin Al Samiul', '20170206', 3, 9, 2, 1, 2, 0, 'Yeasin Sarder', 'Lina Begum', '06-07-2018', '88001822722608', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:43:50', '', '1', '', '', 1, 0),
(105, 'Shekh Raid Al Alam', '20170207', 3, 10, 2, 1, 2, 0, 'Robiul Alam', 'Sabina Yesmin', '06-07-2018', '8801926789548', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:44:29', '', '1', '', '', 1, 0),
(106, 'Ruhan Ahmed Jaad', '20170208', 3, 11, 2, 1, 2, 0, 'Rafiur Rahman', 'Rojina Akter', '06-07-2018', '8801714750556', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:45:14', '', '1', '', '', 1, 0),
(107, 'Mahim Mahmud', '20170210', 3, 12, 2, 1, 2, 0, 'Rashed Mahmud', 'Mahfuja Khatun', '06-07-2018', '8801782113536', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:45:50', '', '1', '', '', 1, 0),
(108, 'Meer Risalat Islam', '20170211', 3, 13, 2, 1, 2, 0, 'Meer Shariful Islam', 'Rajia Akter', '06-07-2018', '8801917275591', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:46:40', '', '1', '', '', 1, 0),
(109, 'Taiyaba Islam Sayma', '20170212', 3, 14, 2, 1, 2, 0, 'Masud Haolader', 'Kamrunnahar', '06-07-2018', '8801739481261', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:47:18', '', '1', '', '', 1, 0),
(110, ' Umme Habiba Nadia', '20170213', 3, 15, 2, 1, 2, 0, 'Nadim Vandari', 'Nasima Akter', '06-07-2018', '8801759535080', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 13:13:11', '', '1', '', '', 1, 0),
(111, 'Farhana Bushra', '20170274', 3, 16, 2, 1, 2, 0, 'Mofazzal Hosen', 'Nasrin Nahar', '06-07-2018', '8801783169658', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 14:48:49', '', '1', '', '', 1, 0),
(112, 'Ismat Abiat Indira', '20170335', 3, 17, 2, 1, 2, 0, 'Irtiza Hosen', 'Taslima Akter', '06-07-2018', '8801912898353', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 12:41:25', '', '1', '', '', 1, 0),
(113, 'Md. Sayad Ibn Mamun', '20170091', 4, 1, 1, 1, 1, 0, 'Mamunur Rashid', 'Alema Jahan', '06-07-2018', '8801783365990', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:50:42', '', '1', '', '', 1, 0),
(114, 'Tahmid Bin Obayed', '20170179', 4, 2, 1, 1, 1, 0, 'Obaydul Haq', 'Yesmin', '06-07-2018', '8801556510302', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 15:38:09', '', '1', '', '1', 1, 0),
(115, 'Abdur Rahim Muyid ', '20170180', 4, 3, 1, 1, 1, 0, 'Taj Uddin', 'Rikta Akter', '06-07-2018', '8801883997945', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:57:37', '', '1', '', '', 1, 0),
(116, 'Tanvir Tonmoy Siam', '20170181', 4, 4, 1, 1, 1, 0, 'Shahanur Alam', 'Shimu Akter', '06-07-2018', '8801946386860', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:58:31', '', '1', '', '', 1, 0),
(117, 'Mainul Hasan', '20170182', 4, 4, 1, 1, 1, 0, 'Billal Hosen', 'Mukta Begum', '06-07-2018', '8801711143723', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 14:59:18', '', '1', '', '', 1, 0),
(118, 'Sharif Mahmud', '20170183', 4, 5, 1, 1, 1, 0, 'Aminur Islam', 'Shamima Islam', '06-07-2018', '8801718420693', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:44:21', '', '1', '', '', 1, 0),
(119, 'Sanjid Islam Sanjid', '20170184', 4, 6, 1, 1, 1, 0, 'Aktaruzzaman', 'Shahanaz parvin', '06-07-2018', '8801716045805', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:00:42', '', '1', '', '', 1, 0),
(120, 'Rafidul Islam Rihan', '20170185', 4, 7, 1, 1, 1, 0, 'Dulal Hosen', 'Reshma Khatun', '06-07-2018', '8801716564213', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '26-07-2018 13:46:47', '', '1', '', '', 1, 0),
(121, 'Fahim Ahmed Shuvo', '20170096', 4, 8, 1, 1, 1, 0, 'Faridul Islam', 'Nasrin akter', '06-07-2018', '8801884715598', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:03:13', '', '1', '', '', 1, 0),
(122, 'Anas Talukder', '20170186', 4, 9, 1, 1, 1, 0, 'Masud Rana', 'Nasrin akter', '06-07-2018', '8801927407975', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:04:00', '', '1', '', '', 1, 0),
(123, 'Abir Datto', '20170092', 4, 10, 1, 1, 1, 0, 'Liton Datta', 'Rekha datta', '06-07-2018', '8801812257454', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '2', '', '', '06-07-2018 15:04:46', '', '1', '', '', 1, 0),
(124, 'Mehadi Hasan Sourav', '20170097', 4, 12, 1, 1, 1, 0, 'Shahinur Rahman', 'Nasima Akter', '06-07-2018', '8801712743571', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 15:38:43', '', '1', '', '1', 1, 0),
(125, 'Sah Wali Ullah Swapnil', '20170188', 4, 13, 1, 1, 1, 0, 'Dulal Hosen', 'Romana Akter', '06-07-2018', '8801952491755', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:06:19', '', '1', '', '', 1, 0),
(126, 'Khabbab Hossain Didar', '20170094', 4, 14, 1, 1, 1, 0, 'Delwar Hosen', 'Rani Begum', '06-07-2018', '8801917289897', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:07:02', '', '1', '', '', 1, 0),
(127, 'Abdulla Sikdar', '20170095', 4, 15, 1, 1, 1, 0, 'Abdul Alim', 'Latifa Begum', '06-07-2018', '8801680802965', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:07:43', '', '1', '', '', 1, 0),
(128, ' Anas Ahmed Sinha', '20170189', 4, 16, 1, 1, 1, 0, 'Abu Bakar Siddik', 'Rupali Begum', '06-07-2018', '8801933122095', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:08:40', '', '1', '', '', 1, 0),
(129, 'Sajjad Hosen', '20170190', 4, 17, 1, 1, 1, 0, 'Showkat Hosen', 'Nusrat Jahan', '06-07-2018', '8801720426663', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:09:25', '', '1', '', '', 1, 0),
(130, 'Rafiul Jahan Parosh', '20170203', 4, 18, 1, 1, 1, 0, 'Ishtiak Ahmed', 'Popy Akter', '06-07-2018', '8801688929848', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '26-07-2018 13:47:14', '', '1', '', '', 1, 0),
(131, 'Abdullah Al Noman', '20170275', 4, 19, 1, 1, 1, 0, 'Ataur Rahman', 'Naznin Sultana', '06-07-2018', '8801735966252', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 15:14:29', '', '1', '', '', 1, 0),
(132, 'Ms. Rafia Akter Rifaya', '20170088', 4, 1, 1, 1, 2, 0, 'Rafiqul Islam', 'Salma Begum', '06-07-2018', '8801778743580', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                                                                                                ', '', '', '1', '', '', '26-07-2018 13:47:49', '', '1', '', '1', 1, 0),
(133, 'Urmi Khan Mili', '20170087', 4, 1, 1, 1, 2, 0, 'Uzzal Hosen Khan', 'Mukta Agory', '06-07-2018', '8801905700663', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:41:18', '', '1', '', '', 1, 0),
(134, 'Intia Ila', '20170084', 4, 2, 1, 1, 2, 0, 'Younus Ali', 'Tasfia Sultana', '06-07-2018', '8801516150565', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 12:50:30', '', '1', '', '', 1, 0),
(135, 'Baitun Nahar Chahat', '20170085', 4, 3, 1, 1, 2, 0, 'Sazzadul Islam', 'Nipa Begum', '06-07-2018', '8801956604329', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 15:40:26', '', '1', '', '', 1, 0),
(136, 'Nusrat Jahan Mahi', '20170086', 4, 4, 1, 1, 2, 0, 'Faruk Hosen', 'Surma Begum', '06-07-2018', '8801830337016', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 15:57:28', '', '1', '', '', 1, 0),
(137, 'Tasmia Talukder', '20170191', 4, 5, 1, 1, 2, 0, 'Kutub Uddin', 'Sadia Akter', '06-07-2018', '8801761389268', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 15:58:11', '', '1', '', '', 1, 0),
(138, 'Asifa Ashrafi Noshin', '20170082', 4, 6, 1, 1, 2, 0, 'Ashraful Islam', 'Nurjahan Khatun', '06-07-2018', '8801790167895', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 15:58:48', '', '1', '', '', 1, 0),
(139, 'Kaniz Fatema', '20170089', 4, 7, 1, 1, 2, 0, 'Tarikul Islam', 'Salma Akter', '06-07-2018', '8801913380094', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 15:59:20', '', '1', '', '', 1, 0),
(140, 'Anisa Tabassum', '20170192', 4, 8, 1, 1, 2, 0, 'Abdul Karim', 'Tania Sultana', '06-07-2018', '8801911172984', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '25-07-2018 18:39:51', '', '1', '', '', 1, 0),
(141, 'Jannatul Ferdous Jui ', '20170081', 4, 9, 1, 1, 2, 0, 'Jamir Hosen', 'Farjana Akter', '06-07-2018', '8801765454145', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:01:04', '', '1', '', '', 1, 0),
(142, 'Nusrat Jahan Tanjila', '20170194', 4, 10, 1, 1, 2, 0, 'Yeasin Bhunia', 'Morium Akter', '06-07-2018', '8801715458666', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:01:48', '', '1', '', '', 1, 0),
(143, 'Afsana Akter Meem', '20170195', 4, 11, 1, 1, 2, 0, 'Alamin', 'Mukta Begum', '06-07-2018', '8801989863767', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:37:25', '', '1', '', '', 1, 0),
(144, 'Israt Jahan Sumia', '20170100', 4, 12, 1, 1, 2, 0, 'Ismail Hosen', 'Roksana Akter', '06-07-2018', '8801828432932', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:03:10', '', '1', '', '', 1, 0),
(145, 'Jannatul Ferdous  ', '20170099', 4, 13, 1, 1, 2, 0, 'Ibrahim Hosen', 'Salma Akter', '06-07-2018', '8801933237248', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:03:46', '', '1', '', '', 1, 0),
(146, 'Safana Binte Masud', '20170196', 4, 14, 1, 1, 2, 0, 'Hedayet Ullah', 'Airin Akter', '06-07-2018', '8801908983844', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 15:40:57', '', '1', '', '', 1, 0),
(147, 'Morium Akter Ria', '20170198', 4, 15, 1, 1, 2, 0, 'Manik Mia', 'Runa Begum', '06-07-2018', '8801917442589', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '25-07-2018 18:36:08', '', '1', '', '', 1, 0),
(148, 'Akhi Akter Amena', '20170083', 4, 16, 1, 1, 2, 0, 'Ali Ahmed', 'Sakhina Begum', '06-07-2018', '8801720191113', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:06:24', '', '1', '', '', 1, 0),
(149, 'Nusrat Jahan Rimi', '1018', 4, 17, 1, 1, 2, 0, 'Ripon Sarker', 'Fariha Sultana', '06-07-2018', '8801726407562', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 12:42:35', '', '2', '', '', 1, 0),
(150, 'Ispria Jannat Lamia', '20170199', 4, 18, 1, 1, 2, 0, 'Monir Hosen', 'Shanaz', '06-07-2018', '8801971304863', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:08:14', '', '1', '', '', 1, 0),
(151, 'Jannatul Ferdows Nabila', '20170201', 4, 19, 1, 1, 2, 0, 'Abul Kalam', 'Anowara', '06-07-2018', '8801971304863', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:08:51', '', '1', '', '', 1, 0),
(152, 'MD-Rakibul Hasan', '20170164', 5, 1, 1, 1, 1, 0, 'Abdul Karim', 'Rahima Begum', '06-07-2018', '8801981365141', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:11:33', '', '1', '', '', 1, 0),
(153, 'Sadik Hasan Shuvo', '20170079', 5, 2, 1, 1, 1, 0, 'Saidur Rahman', 'Pipasha Akter', '06-07-2018', '8801795512736', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:12:11', '', '1', '', '', 1, 0),
(154, 'Shafiul Islam Shafin', '20170080', 5, 3, 1, 1, 1, 0, 'Saiful Islam', 'Selina Islam', '06-07-2018', '8801726487562', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '26-07-2018 13:48:43', '', '1', '', '', 1, 0),
(155, 'Naim Uddin Nabir', '20170074', 5, 4, 1, 1, 1, 0, 'Mohiuddin', 'Nasima Akter', '06-07-2018', '8801843419245', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:13:34', '', '1', '', '', 1, 0),
(156, 'Salim Sadman Ovi', '20170076', 5, 5, 1, 1, 1, 0, 'Nazmul Hasan', 'Swapna Hasan', '06-07-2018', '8801789502694', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:14:37', '', '1', '', '', 1, 0),
(157, 'Kawsar Ahmed Saif', '20170077', 5, 6, 1, 1, 1, 0, 'Sabuj Mia', 'Salma Sultana', '06-07-2018', '8801843926633', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:15:18', '', '1', '', '', 1, 0),
(158, 'Jahirul Islam', '20170075', 5, 7, 1, 1, 1, 0, 'Jahangir Alam', 'Rupali Begum', '06-07-2018', '8801625004812', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:16:10', '', '1', '', '', 1, 0),
(159, 'Talha Jobayer', '20170078', 5, 8, 1, 1, 1, 0, 'Abdul Hakim', 'Rabeya Akter', '06-07-2018', '8801718403986', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 12:47:59', '', '1', '', '', 1, 0),
(160, 'Arafat Islam Pial', '20170168', 5, 9, 1, 1, 1, 0, 'Nazrul Islam', 'Kamrunnahar', '06-07-2018', '8801855372576', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '26-07-2018 13:49:10', '', '1', '', '', 1, 0),
(161, 'Walid Hasan Jahin', '20170165', 5, 10, 1, 1, 1, 0, 'Nazmul Hasan', 'Tania Rahman', '06-07-2018', '8801867515023', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:18:36', '', '1', '', '', 1, 0),
(162, 'Jahidul Islam', '20170169', 5, 11, 1, 1, 1, 0, 'Nurul Islam', 'Rokeya Begum', '06-07-2018', '8801914751148', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '25-07-2018 18:45:31', '', '1', '', '', 1, 0),
(163, 'MD- Niloy', '20170166', 5, 12, 1, 1, 1, 0, 'MD- Nahid', 'Suma Akter', '06-07-2018', '8801914505621', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:20:17', '', '1', '', '', 1, 0),
(164, 'Mezbaul Alam Riad', '20170073', 5, 13, 1, 1, 1, 0, 'Khayrul Alam', 'Shamima Akter', '06-07-2018', '8801923085800', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:21:03', '', '1', '', '', 1, 0),
(165, 'Junayed Hasan', '20170167', 5, 14, 1, 1, 1, 0, 'Hannan Mia', 'Majeda Begum', '06-07-2018', '8801983671884', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:23:50', '', '1', '', '', 1, 0),
(166, 'Shahriar kabir', '20170170', 5, 15, 1, 1, 1, 0, 'Humayun Kabir', 'Rishanta Khatun', '06-07-2018', '8801721111247', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:24:34', '', '1', '', '', 1, 0),
(167, 'Fahardis Hosen', '20170268', 5, 16, 1, 1, 1, 0, 'Shakhawat Hosen', 'Farhana Begum', '06-07-2018', '8801722711877', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 16:25:12', '', '1', '', '', 1, 0),
(168, 'Ayesha Siddika ', '20170171', 5, 1, 1, 1, 2, 0, 'Alamgir Hosen', 'Amina Khatun', '06-07-2018', '8801735660276', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:27:16', '', '1', '', '', 1, 0),
(169, 'Tahsina Tabassum', '20170172', 5, 2, 1, 1, 2, 0, 'Basir Ahmed Ratan', 'Kohinur Parvin', '06-07-2018', '8801715516100', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:30:07', '', '1', '', '', 1, 0),
(170, 'Jerin Islam', '20170065', 5, 3, 1, 1, 2, 0, 'Zahirul slam', 'Sumi akter', '06-07-2018', '8801795479693', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 16:13:50', '', '1', '', '', 1, 0),
(171, 'Tanha Khan Tawoa', '20170173', 5, 3, 1, 1, 2, 0, 'Delwar Hosen', 'Rubi Akter', '06-07-2018', '8801707562902', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:31:45', '', '1', '', '', 1, 0),
(172, 'Maisha Tabassum', '20170061', 5, 4, 1, 1, 2, 0, 'Merajul Islam', 'Rumi Khatun', '06-07-2018', '8801746010345', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:32:21', '', '1', '', '', 1, 0),
(173, 'Jannatul Fer. Shraboni', '20170069', 5, 5, 1, 1, 2, 0, 'Yousuf Ahmed', 'Dalia Sultana', '06-07-2018', '8801923832584', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:32:57', '', '1', '', '', 1, 0),
(174, 'Faizajahan Aksa', '20170072', 5, 6, 1, 1, 2, 0, 'Jahangir Hosen', 'Asma Akter', '06-07-2018', '8801720208743', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 12:54:55', '', '1', '', '', 1, 0),
(175, 'Hafiza Akter', '20170174', 5, 7, 1, 1, 2, 0, 'Hanif Mia', 'Maksuda Akter', '06-07-2018', '8801775263650', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:34:14', '', '1', '', '', 1, 0),
(176, 'Farzana Akter Meem	', '20170070', 5, 8, 1, 1, 2, 0, 'Anowar Hosen	', 'Hajera Khatun', '06-07-2018', '8801955667856', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:35:19', '', '1', '', '', 1, 0),
(177, 'Rifa Tasfia', '20170071', 5, 9, 1, 1, 2, 0, 'Robiul Karim', 'Rebeka Sultana', '06-07-2018', '8801981234880', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:35:59', '', '1', '', '', 1, 0),
(178, 'Julekha khatun', '20170064', 5, 10, 1, 1, 2, 0, 'Jillur Rahman', 'Farida Parvin', '06-07-2018', '8801769900334', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:36:33', '', '1', '', '', 1, 0);
INSERT INTO `tbl_student` (`Std_ID`, `Std_Name`, `STD_UNQ_ID`, `Std_class_ID`, `Std_roll`, `Std_shift_ID`, `Std_medium_ID`, `Std_section_ID`, `Std_group_ID`, `Std_parent`, `Std_parent2`, `Std_registration_date`, `Std_parent_mobile`, `Std_EntryDateTime`, `Std_birthday`, `Std_gender`, `Image`, `Std_address`, `Std_mobile`, `Std_email`, `Std_religion`, `Std_transport_ID`, `Std_hostel_ID`, `Created`, `Modified`, `Std_status`, `Std_birth_ID`, `Student_BloodGroup`, `Std_academic_ID`, `Std_Promotion_Status`) VALUES
(179, 'Israt Jahan Shifa', '20170063', 5, 11, 1, 1, 2, 0, 'Insan Ali', 'Sayma Begum', '06-07-2018', '8801740751036', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:37:13', '', '1', '', '', 1, 0),
(180, 'Naziba Anjum Eva', '20170068', 5, 12, 1, 1, 2, 0, 'Nazmul Hasan', 'Swapna Hasan', '06-07-2018', '8801789502694', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:37:55', '', '1', '', '', 1, 0),
(181, 'Adrika Akter', '20170175', 5, 13, 1, 1, 2, 0, 'Alamgir Hosen', 'Maksuda Akter', '06-07-2018', '8801834870234', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:38:47', '', '1', '', '', 1, 0),
(182, 'Sohana Akter', '20170176', 5, 14, 1, 1, 2, 0, 'Sohel Mia', 'Taslima Akter', '06-07-2018', '8801914488270', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:39:28', '', '1', '', '', 1, 0),
(183, 'Sayma Akter', '20170067', 5, 15, 1, 1, 2, 0, 'Jomshed Alam', 'Naima Khatun ', '06-07-2018', '8801715852483', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:40:07', '', '1', '', '', 1, 0),
(184, 'Sumaia Akter Toma', '  20170178', 5, 16, 1, 1, 2, 0, 'Touhidul Islam', 'Sharmin Akter', '06-07-2018', '8801725828179', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:41:22', '', '1', '', '', 1, 0),
(185, 'Nawrin Islam Rahi', '20170336', 5, 17, 1, 1, 2, 0, 'Nazrul Islam', 'Ranjana Akter', '06-07-2018', '8801798757386', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 12:43:05', '', '1', '', '', 1, 0),
(186, 'Saiara Noor', '20170279', 6, 1, 1, 1, 0, 0, 'kawsar Hakim', 'Sameli Akter', '06-07-2018', '8801912848798', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:48:34', '', '1', '', '', 1, 0),
(187, 'Maliha Momtaj', '20170126', 6, 2, 1, 1, 0, 0, 'Mizanur Rahman', '', '06-07-2018', '8801719686734', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:49:12', '', '1', '', '', 1, 0),
(188, 'Sumaia Zannat Mithila', '20170127', 6, 4, 1, 1, 0, 0, 'Monayem Khan', 'Moni Khanom', '06-07-2018', '8801756221944', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 16:15:53', '', '1', '', '', 1, 0),
(189, 'Rahmatul Ripti', '20170128', 6, 5, 1, 1, 0, 0, 'Obaydul Haq', 'Shahina Akter', '06-07-2018', '8801715691703', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 16:16:16', '', '1', '', '', 1, 0),
(190, 'Zannatul Fer. Tisha', '20170130', 6, 6, 1, 1, 0, 0, 'Tanmoy', 'Lipy Akter', '06-07-2018', '8801961896190', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:51:56', '', '1', '', '', 1, 0),
(191, 'Afia Rahman Maliha', '20170129', 6, 6, 1, 1, 0, 0, 'Mizanur Rahman', 'Farzana Rahman', '06-07-2018', '8801717559311', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 12:33:31', '', '1', '', '', 1, 0),
(192, 'Tahira Islam Tawki', '20170131', 6, 7, 1, 1, 0, 0, 'MD.Taouhid', 'Rupa Akter', '06-07-2018', '8801911816389', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:53:10', '', '1', '', '', 1, 0),
(193, 'Jarin Tasnim', '20170132', 6, 8, 1, 1, 0, 0, 'Jahangir Alam', 'Sharmin Jahan', '06-07-2018', '8801725392837', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 16:53:55', '', '1', '', '', 1, 0),
(194, 'Israt Jahan Muskan', '20170052', 6, 9, 1, 1, 0, 0, 'Shahidul Islam', 'Parvin Akter', '06-07-2018', '8801999796661', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '26-07-2018 13:49:51', '', '1', '', '', 1, 0),
(195, 'Meer Sayma', '20170133', 6, 10, 1, 1, 0, 0, 'Meer Shamim', 'Shathi Sarker', '06-07-2018', '8801726586797', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:01:31', '', '1', '', '', 1, 0),
(196, 'Sanjida Mehjabin Bristi', '20170134', 6, 11, 1, 1, 0, 0, 'Hasmot Ali', 'Romana Akter', '06-07-2018', '8801765802915', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:02:14', '', '1', '', '', 1, 0),
(197, 'Saif Rahman', '20170135', 6, 12, 1, 1, 0, 0, 'Arif Hosen', 'Shamsunnahar', '06-07-2018', '8801993301652', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:02:53', '', '1', '', '', 1, 0),
(198, 'Tanvir Rahman Tajun', '20170136', 6, 13, 1, 1, 0, 0, 'Nasimuzzaman', 'Nileema', '06-07-2018', '8801718882715', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:03:34', '', '1', '', '', 1, 0),
(199, 'Mustakimur Rahman', '20170137', 6, 14, 1, 1, 0, 0, 'Monirul Islam', 'Amena Begum', '06-07-2018', '8801729321697', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:04:25', '', '1', '', '', 1, 0),
(200, 'Rakibul Islam Apu', '20170139', 6, 15, 1, 1, 0, 0, 'Anisur Rahman', 'Rokeya Begum', '06-07-2018', '8801960690727', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:05:02', '', '1', '', '', 1, 0),
(201, 'MD.Ibrahim', '20170138', 6, 16, 1, 1, 0, 0, 'Alamgir Hosen', '', '06-07-2018', '8801625482870', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 12:03:41', '', '1', '', '', 1, 0),
(202, 'Nusrat Jahan Najifa', '20170053', 6, 17, 1, 1, 0, 0, 'Sabbir Hosen', 'Nasrin Begum', '06-07-2018', '8801716290556', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:06:25', '', '1', '', '', 1, 0),
(203, 'Mahmudul Hasan', '20170141', 6, 18, 1, 1, 0, 0, 'Abubakar Siddik', 'Salma Khatun', '06-07-2018', '8801723607380', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 12:03:08', '', '1', '', '', 1, 0),
(204, 'Maymuna Akter Sneha', '20170142', 6, 19, 1, 1, 0, 0, 'Aiub Dali', 'Dayna Begum', '06-07-2018', '8801789777832', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:07:41', '', '1', '', '', 1, 0),
(205, 'Imtiaz Ahmed Fahad', '20170143', 6, 20, 1, 1, 0, 0, 'Abul Kalam', 'Mahfuza Akter', '06-07-2018', '8801918102354', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:08:19', '', '1', '', '', 1, 0),
(206, 'Mohaiminul Haq', '20170276', 6, 21, 1, 1, 0, 0, 'Monjurul Haq', 'Rahima Akter', '06-07-2018', '8801838301636', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:08:56', '', '1', '', '', 1, 0),
(207, 'Kawsar ahmed', '20170304', 6, 22, 1, 1, 0, 0, 'Alil Sheikh', 'Khuku Moni', '06-07-2018', '8801993313652', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:09:33', '', '1', '', '', 1, 0),
(208, 'Humayra Tasnim Samira', '20170040', 7, 1, 1, 1, 0, 0, 'Mohiuddin Ahmad', 'Farhana Sultana', '06-07-2018', '8801981324089', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:11:26', '', '1', '', '', 1, 0),
(209, 'Susmita Islam prithila', '20170144', 7, 1, 1, 1, 0, 0, 'Robiuj Islam', 'Shilpi Akter', '06-07-2018', '8801762893126', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:12:15', '', '1', '', '', 1, 0),
(210, 'Zannatul Fer. Esha', '20170041', 7, 2, 1, 1, 0, 0, 'Ferdous wahed', 'Nahida Akter', '06-07-2018', '8801917615279', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '26-07-2018 13:50:37', '', '1', '', '', 1, 0),
(211, 'Samia Hasan Odhara', '20170042', 7, 3, 1, 1, 0, 0, 'Safder Hasan', 'Meherunnesa', '06-07-2018', '8801865505606', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:13:46', '', '1', '', '', 1, 0),
(212, 'Sakib Al Hasan', '20170043', 7, 4, 1, 1, 0, 0, 'Faruk Hosen', 'Surma Begum', '06-07-2018', '8801830337016', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:14:22', '', '1', '', '', 1, 0),
(213, 'Rasel Hosen', '20170044', 7, 5, 1, 1, 0, 0, 'Hekmot Ali', 'Ruma Akter', '06-07-2018', '8801989457530', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:14:56', '', '1', '', '', 1, 0),
(214, 'Bakhtiar Fahim', '20170045', 7, 6, 1, 1, 0, 0, 'Khorshed Alam', 'Taslima Begum', '06-07-2018', '8801718479503', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 12:01:32', '', '1', '', '', 1, 0),
(215, 'Nadia Sultana', '20170145', 7, 7, 1, 1, 0, 0, 'Lutfor Rahman', 'Rina Begum', '06-07-2018', '8801939863506', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:17:53', '', '1', '', '', 1, 0),
(216, 'Julia Parvin', '20170046', 7, 8, 1, 1, 0, 0, 'Jillur Rahman', 'Farida Parvin', '06-07-2018', '8801728366893', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:18:30', '', '1', '', '', 1, 0),
(217, ' Tanvir Rahman Emon', '20170054', 7, 9, 1, 1, 0, 0, 'Badsha Mia', 'Shilpi Akter', '06-07-2018', '8801843166900', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:19:16', '', '1', '', '', 1, 0),
(218, 'Abdullah Al Muaj', '20170047', 7, 10, 1, 1, 0, 0, 'Jamshed Alam', 'Naima Khatun', '06-07-2018', '8801715852483', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:19:57', '', '1', '', '', 1, 0),
(219, 'Raisa Islam', '1025', 7, 11, 1, 1, 0, 0, '', 'Tarin Sultana', '06-07-2018', '8801724938833', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 12:47:29', '', '2', '', '', 1, 0),
(220, 'Neha Afroz', '20170146', 7, 12, 1, 1, 0, 0, 'Mokbul Sarder', 'Hasina Begum', '06-07-2018', '8801776457413', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:21:25', '', '1', '', '', 1, 0),
(221, 'Ashik Ullah Ratul', '20170147', 7, 13, 1, 1, 0, 0, 'Rana Bhunia', 'Mitu Akter', '06-07-2018', '8801994003394', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:22:39', '', '1', '', '', 1, 0),
(222, 'Mashrur Rashid', '20170003', 8, 1, 1, 1, 0, 0, 'Mamunur Rashid', 'Farhana sharmin', '06-07-2018', '8801795358101', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:25:37', '', '1', '', '', 1, 0),
(223, 'Nushrat Jahan Abida', '20170004', 8, 2, 1, 1, 0, 0, 'Shafikul Islam', 'Selina Begum', '06-07-2018', '8801717319573', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:26:22', '', '1', '', '', 1, 0),
(224, 'Danisa Tabassum', '20170014', 8, 3, 1, 1, 0, 0, 'Shirajul Islam', 'Tamanna oahida Rumi', '06-07-2018', '8801757004621', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:27:05', '', '1', '', '', 1, 0),
(225, 'Raian Ahmad Raad', '20170006', 8, 4, 1, 1, 0, 0, 'Rafiur Rahman', 'Rujina Begum', '06-07-2018', '8801714750556', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:27:58', '', '1', '', '', 1, 0),
(226, 'Sabrina Hasan Ohana', '20170005', 8, 5, 1, 1, 0, 0, 'Safder Hasan', 'Meherunnesa', '06-07-2018', '8801865505606', '0000-00-00 00:00:00', '06-07-2018', '2', '', '', '', '', '1', '', '', '06-07-2018 17:28:33', '', '1', '', '', 1, 0),
(227, 'Monir Hosen', '20170007', 8, 6, 1, 1, 0, 0, 'Monjil Mia', 'Raiton Akter', '06-07-2018', '8801911701538', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:29:15', '', '1', '', '', 1, 0),
(228, 'Nadia Akter Meem', '20170148', 8, 7, 1, 1, 0, 0, 'Abu Jafor Ali', 'Nasrin Akter', '06-07-2018', '8801865147730', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '07-07-2018 10:47:59', '', '1', '', '', 1, 0),
(229, 'Nushrat Jahan Mumtahina', '20170009', 8, 8, 1, 1, 0, 0, 'Sahidul Islam', 'Parvin Akter', '06-07-2018', '8801999796661', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '26-07-2018 13:50:59', '', '1', '', '', 1, 0),
(230, 'Iffat Rijia Ifty', '20170008', 8, 9, 1, 1, 0, 0, 'Younus Ali', 'Asfia Sultana', '06-07-2018', '8801516150565', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '14-07-2018 12:36:43', '', '1', '', '', 1, 0),
(231, 'Marjia Akter Hima', '20170016', 8, 10, 1, 1, 0, 0, 'Abdul Hannan', 'Mahmuda Akter', '06-07-2018', '8801912242149', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '07-07-2018 10:47:13', '', '1', '', '', 1, 0),
(232, 'Junayed Rahman', '20170010', 8, 11, 1, 1, 0, 0, 'Mahbubur Rahman', 'Minara Begum', '06-07-2018', '8801981434294', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:33:31', '', '1', '', '', 1, 0),
(233, 'Alif Islam Risan', '20170015', 8, 12, 1, 1, 0, 0, 'Ashikul Islam', 'Jharna Islam', '06-07-2018', '8801728852581', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:34:25', '', '1', '', '', 1, 0),
(234, 'Amena Khatun', '20170011', 8, 13, 1, 1, 0, 0, 'Banat Ali', 'Aroda Khatun', '06-07-2018', '8801708110674', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '07-07-2018 10:35:30', '', '1', '', '', 1, 0),
(235, 'Akibur Rahman', '20170013', 8, 14, 1, 1, 0, 0, 'Ahsan Ullah', 'Dulali Begum', '06-07-2018', '8801962658979', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:35:50', '', '1', '', '', 1, 0),
(236, 'Maisha Akter', '20170012', 8, 15, 1, 1, 0, 0, 'Jalal Shikder', 'Sonia Sarker', '06-07-2018', '8801706990355', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '07-07-2018 10:35:12', '', '1', '', '', 1, 0),
(238, 'Meraz Alam Sinha', '1026', 8, 16, 1, 1, 0, 0, 'Saidul Haq', 'Tarin Sutana', '06-07-2018', '8801729338833', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 12:47:58', '', '2', '', '', 1, 0),
(239, 'Laboni Akter', '20170002', 9, 1, 1, 1, 0, 0, 'Babul Mia', 'Farida Begum', '06-07-2018', '8801749448785', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '07-07-2018 10:33:54', '', '1', '', '', 1, 0),
(240, 'Amirul Islam Likhon', '20170150', 9, 2, 1, 1, 0, 0, 'Anwar Islam', 'Shahin Akter', '06-07-2018', '8801938247469', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:41:13', '', '1', '', '', 1, 0),
(241, 'Alamin Maruf', '20170151', 9, 3, 1, 1, 0, 0, 'Yeasin Sarder', 'Lina Begum', '06-07-2018', '8801687743784', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '26-07-2018 13:51:19', '', '1', '', '', 1, 0),
(242, 'Fahmida Ulfat', '20170152', 9, 4, 1, 1, 0, 0, 'Omar Faruk', 'Asma Akter', '06-07-2018', '881756725548', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '26-07-2018 13:51:49', '', '1', '', '', 1, 0),
(243, 'Injamul Haq', '20170153', 9, 5, 1, 1, 0, 0, 'Jahirul Haq', 'Rekha Haq', '06-07-2018', '8801768539686', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 11:59:05', '', '1', '', '', 1, 0),
(244, 'Forhad Hosen', '20170154', 9, 6, 1, 1, 0, 0, 'Monir Hosen', 'Farjana Akter', '06-07-2018', '8801856697517', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:46:45', '', '1', '', '', 1, 0),
(245, 'Jahidul Islam', '20170155', 9, 7, 1, 1, 0, 0, 'Harun Haolader', 'Jumur Begum', '06-07-2018', '8801689925326', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '16-07-2018 16:20:03', '', '1', '', '', 1, 0),
(246, 'Abdullah Al Noman', '20170337', 9, 8, 1, 1, 0, 0, 'Jalal Sikder', 'Sonia Sarker', '06-07-2018', '8801706990355', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 12:48:44', '', '1', '', '', 1, 0),
(247, 'Saimun Sourob', '20170157', 9, 9, 1, 1, 0, 0, 'Sahab Uddin', 'Hasina Begum', '06-07-2018', '8801876506697', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '28-07-2018 19:01:53', '', '1', '', '', 1, 0),
(248, 'Shakila Jahan', '20170158', 9, 10, 1, 1, 0, 0, 'Sahab Uddin', 'Hasina Begum', '06-07-2018', '8801760425533', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                ', '', '', '1', '', '', '28-07-2018 19:02:34', '', '1', '', '', 1, 0),
(249, 'Mehrima Tasnim Sumaia', '20170060', 10, 1, 1, 1, 0, 0, 'Mohiuddin', 'Farhana Sultana', '06-07-2018', '8801968541114', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                ', '', '', '1', '', '', '15-07-2018 12:45:57', '', '1', '', '', 1, 0),
(250, 'Naeem Hasan Swapnil', '20170056', 10, 2, 1, 1, 0, 0, 'Mahbubur Rahman', 'Rabeya Hasan', '06-07-2018', '8801703800624', '0000-00-00 00:00:00', '06-07-2018', '1', '', '', '', '', '1', '', '', '06-07-2018 17:51:46', '', '1', '', '', 1, 0),
(251, 'Abdullah Jisan', '20170058', 10, 3, 1, 1, 0, 0, 'Mokbul Hosen', 'Shirin Sultana', '06-07-2018', '8801937037825', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '14-07-2018 11:10:18', '', '1', '', '', 1, 0),
(252, 'Montasir Mahmud Alvi', '20170159', 10, 4, 1, 1, 0, 0, 'Masud Zamadder', 'Parvin Akter', '06-07-2018', '8801551077728', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                                                                                                                                                                                ', '', '', '1', '', '', '30-07-2018 13:37:02', '', '1', '', '', 1, 0),
(253, 'Morium Zannat Meem', '20170160', 10, 5, 1, 1, 0, 0, 'Monayem Khan', 'Moni Kham', '06-07-2018', '8801756221944', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                ', '', '', '1', '', '', '07-07-2018 10:31:39', '', '1', '', '', 1, 0),
(254, 'Mahir Hosen Pritom', '20170161', 10, 6, 1, 1, 0, 0, 'Lotfor Rahman', 'Nazma Akter', '06-07-2018', '8801985129188', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '07-07-2018 10:30:59', '', '1', '', '', 1, 0),
(255, 'Abdullah Al Jihad', '20170057', 10, 7, 1, 1, 0, 0, 'Mokbul Hosen', 'Shirin Sultana', '06-07-2018', '8801915619214', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                ', '', '', '1', '', '', '14-07-2018 11:09:07', '', '1', '', '', 1, 0),
(256, 'Ahnaf Masud', '20170162', 10, 8, 1, 1, 0, 0, 'Hedayet Ullah', 'Airin Akter', '06-07-2018', '8801908983844', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '07-07-2018 10:30:41', '', '1', '', '', 1, 0),
(257, 'Ayesha Akter', '20170059', 10, 9, 1, 1, 0, 0, 'Jomshed Alam', 'Naima Khatun', '06-07-2018', '8801715852483', '0000-00-00 00:00:00', '06-07-2018', '2', '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '', '', '1', '', '', '28-07-2018 18:58:55', '', '1', '', '', 1, 0),
(258, 'Saroyar Hosen', '20170163', 10, 10, 1, 1, 0, 0, 'Delwar Hosen', 'Sharmin Akter', '06-07-2018', '8801944662967', '0000-00-00 00:00:00', '06-07-2018', '1', '', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', '', '', '1', '', '', '28-07-2018 19:01:08', '', '1', '', '1', 1, 0),
(259, 'Md. Rahat Islam', '20170331', 1, 11, 2, 1, 1, 0, 'Shah Jamal Sarker', 'Rujina Khatun', '16-07-2018', '8801751636948', '0000-00-00 00:00:00', '16-07-2018', '1', '', '                                                                                ', '', '', '1', '', '', '16-07-2018 14:11:28', '', '1', '', '', 1, 0),
(260, 'Sahriar Emon', '20170338', 5, 17, 1, 1, 1, 0, 'Ishak Mia', 'Amena Begum', '16-07-2018', '8801829589569', '0000-00-00 00:00:00', '16-07-2018', '1', '', '', '', '', '1', '', '', '16-07-2018 16:11:11', '', '1', '', '', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_account`
--

CREATE TABLE `tbl_student_account` (
  `St_Account_ID` int(11) NOT NULL,
  `St_Student_ID` int(11) NOT NULL,
  `St_class_ID` int(11) NOT NULL,
  `St_medium_ID` int(5) NOT NULL,
  `St_shift_ID` int(5) NOT NULL,
  `St_Total_Amount` varchar(20) NOT NULL,
  `St_Paid_Amount` varchar(20) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `St_Status` tinyint(3) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_account`
--

INSERT INTO `tbl_student_account` (`St_Account_ID`, `St_Student_ID`, `St_class_ID`, `St_medium_ID`, `St_shift_ID`, `St_Total_Amount`, `St_Paid_Amount`, `Created`, `Modified`, `St_Status`) VALUES
(1, 201831698, 1, 0, 0, '100', '1000', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(2, 201825763, 1, 0, 0, '0', '1100.00', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(3, 20181676, 1, 0, 0, '0', '1100.00', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(4, 201823196, 1, 0, 0, '0', '1100.00', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(5, 112018, 1, 0, 0, '0', '1100.00', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(6, 112019, 1, 0, 0, '0', '1100.00', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1),
(7, 1001, 1, 0, 0, '2250.00', '', '10-06-2018 11:52:53', '10-06-2018 11:52:53', 1),
(8, 1002, 1, 0, 0, '2250.00', '', '10-06-2018 11:52:53', '10-06-2018 11:52:53', 1),
(9, 1004, 1, 0, 0, '2250.00', '', '10-06-2018 11:52:53', '10-06-2018 11:52:53', 1),
(10, 2007, 1, 0, 0, '2250.00', '', '10-06-2018 11:52:53', '10-06-2018 11:52:53', 1),
(11, 2009, 1, 0, 0, '2250.00', '', '10-06-2018 11:52:53', '10-06-2018 11:52:53', 1),
(12, 2010, 1, 0, 0, '2250.00', '', '10-06-2018 11:52:53', '10-06-2018 11:52:53', 1),
(13, 5002, 5, 0, 0, '1280.00', '', '12-06-2018 11:43:54', '12-06-2018 11:43:54', 1),
(14, 5003, 5, 0, 0, '1280.00', '', '12-06-2018 11:43:54', '12-06-2018 11:43:54', 1),
(15, 5004, 5, 0, 0, '1280.00', '', '12-06-2018 11:43:54', '12-06-2018 11:43:54', 1),
(16, 1001, 1, 1, 1, '3000.00', '', '12-06-2018 13:25:09', '12-06-2018 13:25:09', 1),
(17, 1002, 1, 1, 1, '3000.00', '', '12-06-2018 13:25:09', '12-06-2018 13:25:09', 1),
(18, 1004, 1, 1, 1, '3000.00', '', '12-06-2018 13:25:10', '12-06-2018 13:25:10', 1),
(19, 2007, 1, 1, 1, '3000.00', '', '12-06-2018 13:25:10', '12-06-2018 13:25:10', 1),
(20, 2009, 1, 1, 1, '3000.00', '', '12-06-2018 13:25:10', '12-06-2018 13:25:10', 1),
(21, 2010, 1, 1, 1, '3000.00', '', '12-06-2018 13:25:10', '12-06-2018 13:25:10', 1),
(22, 20170018, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(23, 20170019, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(24, 20170248, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(25, 20170330, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(26, 20170030, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(27, 20170028, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(28, 20170039, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(29, 20170037, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(30, 20170022, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(31, 20170032, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(32, 1002, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(33, 20170250, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(34, 20170257, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:26', '01-08-2018 18:58:26', 1),
(35, 20170251, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(36, 20170252, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(37, 20170253, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(38, 1004, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(39, 20170262, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(40, 20170256, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(41, 20170038, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(42, 20170031, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(43, 20170024, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(44, 20170017, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(45, 20170332, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(46, 20170021, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(47, 20170333, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(48, 20170259, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(49, 20170334, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(50, 20170027, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(51, 20170023, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(52, 20170029, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(53, 20170036, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(54, 20170261, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(55, 20170255, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(56, 20170263, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(57, 20170264, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(58, 20170265, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(59, 20170266, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(60, 20170267, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(61, 20170272, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(62, 20170303, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1),
(63, 20170331, 1, 1, 1, '2000.00', '', '01-08-2018 18:58:27', '01-08-2018 18:58:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_attendance`
--

CREATE TABLE `tbl_student_attendance` (
  `Std_Attendance_ID` int(11) NOT NULL,
  `Std_Attendance_NameID` varchar(255) NOT NULL,
  `Std_Attendance_shift_ID` int(5) NOT NULL,
  `Std_Attendance_medium_ID` int(5) NOT NULL,
  `Std_Attendance_class_ID` varchar(20) NOT NULL,
  `Std_Attendance_section_ID` varchar(20) NOT NULL,
  `Std_Attendance_group_ID` int(5) NOT NULL,
  `Std_Attendance_Roll` varchar(20) NOT NULL,
  `Std_Attendance_Date` varchar(20) NOT NULL,
  `Std_Attendance_Status` varchar(20) NOT NULL COMMENT 'Present:1, Absent:2',
  `Created` varchar(32) NOT NULL DEFAULT '1',
  `Modified` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_attendance`
--

INSERT INTO `tbl_student_attendance` (`Std_Attendance_ID`, `Std_Attendance_NameID`, `Std_Attendance_shift_ID`, `Std_Attendance_medium_ID`, `Std_Attendance_class_ID`, `Std_Attendance_section_ID`, `Std_Attendance_group_ID`, `Std_Attendance_Roll`, `Std_Attendance_Date`, `Std_Attendance_Status`, `Created`, `Modified`) VALUES
(1, '20170060', 1, 1, '10', '0', 0, '1', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(2, '20170056', 1, 1, '10', '0', 0, '2', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(3, '20170058', 1, 1, '10', '0', 0, '3', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(4, '20170159', 1, 1, '10', '0', 0, '4', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(5, '20170160', 1, 1, '10', '0', 0, '5', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(6, '20170161', 1, 1, '10', '0', 0, '6', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(7, '20170057', 1, 1, '10', '0', 0, '7', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(8, '20170162', 1, 1, '10', '0', 0, '8', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(9, '20170059', 1, 1, '10', '0', 0, '9', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(10, '20170163', 1, 1, '10', '0', 0, '10', '29-07-2018', '1', '29-07-2018 11:52:06', ''),
(11, '20170002', 1, 1, '9', '0', 0, '1', '29-07-2018', '1', '29-07-2018 11:57:59', ''),
(12, '20170150', 1, 1, '9', '0', 0, '2', '29-07-2018', '1', '29-07-2018 11:57:59', ''),
(13, '20170151', 1, 1, '9', '0', 0, '3', '29-07-2018', '1', '29-07-2018 11:57:59', ''),
(14, '20170152', 1, 1, '9', '0', 0, '4', '29-07-2018', '1', '29-07-2018 11:57:59', ''),
(15, '20170153', 1, 1, '9', '0', 0, '5', '29-07-2018', '2', '29-07-2018 11:57:59', ''),
(16, '20170154', 1, 1, '9', '0', 0, '6', '29-07-2018', '2', '29-07-2018 11:57:59', ''),
(17, '20170155', 1, 1, '9', '0', 0, '7', '29-07-2018', '1', '29-07-2018 11:57:59', ''),
(18, '20170337', 1, 1, '9', '0', 0, '8', '29-07-2018', '2', '29-07-2018 11:57:59', ''),
(19, '20170157', 1, 1, '9', '0', 0, '9', '29-07-2018', '1', '29-07-2018 11:57:59', ''),
(20, '20170158', 1, 1, '9', '0', 0, '10', '29-07-2018', '1', '29-07-2018 11:57:59', ''),
(21, '20170003', 1, 1, '8', '0', 0, '1', '29-07-2018', '2', '29-07-2018 11:59:02', ''),
(22, '20170004', 1, 1, '8', '0', 0, '2', '29-07-2018', '1', '29-07-2018 11:59:03', ''),
(23, '20170014', 1, 1, '8', '0', 0, '3', '29-07-2018', '1', '29-07-2018 11:59:03', ''),
(24, '20170006', 1, 1, '8', '0', 0, '4', '29-07-2018', '1', '29-07-2018 11:59:03', ''),
(25, '20170005', 1, 1, '8', '0', 0, '5', '29-07-2018', '1', '29-07-2018 11:59:03', ''),
(26, '20170007', 1, 1, '8', '0', 0, '6', '29-07-2018', '1', '29-07-2018 11:59:03', ''),
(27, '20170148', 1, 1, '8', '0', 0, '7', '29-07-2018', '1', '29-07-2018 11:59:04', ''),
(28, '20170009', 1, 1, '8', '0', 0, '8', '29-07-2018', '1', '29-07-2018 11:59:04', ''),
(29, '20170008', 1, 1, '8', '0', 0, '9', '29-07-2018', '1', '29-07-2018 11:59:04', ''),
(30, '20170016', 1, 1, '8', '0', 0, '10', '29-07-2018', '1', '29-07-2018 11:59:04', ''),
(31, '20170010', 1, 1, '8', '0', 0, '11', '29-07-2018', '1', '29-07-2018 11:59:04', ''),
(32, '20170015', 1, 1, '8', '0', 0, '12', '29-07-2018', '1', '29-07-2018 11:59:04', ''),
(33, '20170011', 1, 1, '8', '0', 0, '13', '29-07-2018', '1', '29-07-2018 11:59:04', ''),
(34, '20170013', 1, 1, '8', '0', 0, '14', '29-07-2018', '1', '29-07-2018 11:59:05', ''),
(35, '20170012', 1, 1, '8', '0', 0, '15', '29-07-2018', '1', '29-07-2018 11:59:05', ''),
(36, '1026', 1, 1, '8', '0', 0, '16', '29-07-2018', '1', '29-07-2018 11:59:05', ''),
(37, '20170040', 1, 1, '7', '0', 0, '1', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(38, '20170144', 1, 1, '7', '0', 0, '1', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(39, '20170041', 1, 1, '7', '0', 0, '2', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(40, '20170042', 1, 1, '7', '0', 0, '3', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(41, '20170043', 1, 1, '7', '0', 0, '4', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(42, '20170044', 1, 1, '7', '0', 0, '5', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(43, '20170045', 1, 1, '7', '0', 0, '6', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(44, '20170145', 1, 1, '7', '0', 0, '7', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(45, '20170046', 1, 1, '7', '0', 0, '8', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(46, '20170054', 1, 1, '7', '0', 0, '9', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(47, '20170047', 1, 1, '7', '0', 0, '10', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(48, '1025', 1, 1, '7', '0', 0, '11', '29-07-2018', '2', '29-07-2018 12:00:49', ''),
(49, '20170146', 1, 1, '7', '0', 0, '12', '29-07-2018', '1', '29-07-2018 12:00:49', ''),
(50, '20170147', 1, 1, '7', '0', 0, '13', '29-07-2018', '2', '29-07-2018 12:00:49', ''),
(51, '20170279', 1, 1, '6', '0', 0, '1', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(52, '20170126', 1, 1, '6', '0', 0, '2', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(53, '20170127', 1, 1, '6', '0', 0, '4', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(54, '20170128', 1, 1, '6', '0', 0, '5', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(55, '20170130', 1, 1, '6', '0', 0, '6', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(56, '20170129', 1, 1, '6', '0', 0, '6', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(57, '20170131', 1, 1, '6', '0', 0, '7', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(58, '20170132', 1, 1, '6', '0', 0, '8', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(59, '20170052', 1, 1, '6', '0', 0, '9', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(60, '20170133', 1, 1, '6', '0', 0, '10', '29-07-2018', '2', '29-07-2018 12:08:46', ''),
(61, '20170134', 1, 1, '6', '0', 0, '11', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(62, '20170135', 1, 1, '6', '0', 0, '12', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(63, '20170136', 1, 1, '6', '0', 0, '13', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(64, '20170137', 1, 1, '6', '0', 0, '14', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(65, '20170139', 1, 1, '6', '0', 0, '15', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(66, '20170138', 1, 1, '6', '0', 0, '16', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(67, '20170053', 1, 1, '6', '0', 0, '17', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(68, '20170141', 1, 1, '6', '0', 0, '18', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(69, '20170142', 1, 1, '6', '0', 0, '19', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(70, '20170143', 1, 1, '6', '0', 0, '20', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(71, '20170276', 1, 1, '6', '0', 0, '21', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(72, '20170304', 1, 1, '6', '0', 0, '22', '29-07-2018', '1', '29-07-2018 12:08:46', ''),
(73, '20170164', 1, 1, '5', '1', 0, '1', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(74, '20170079', 1, 1, '5', '1', 0, '2', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(75, '20170080', 1, 1, '5', '1', 0, '3', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(76, '20170074', 1, 1, '5', '1', 0, '4', '29-07-2018', '2', '29-07-2018 12:11:31', ''),
(77, '20170076', 1, 1, '5', '1', 0, '5', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(78, '20170077', 1, 1, '5', '1', 0, '6', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(79, '20170075', 1, 1, '5', '1', 0, '7', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(80, '20170078', 1, 1, '5', '1', 0, '8', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(81, '20170168', 1, 1, '5', '1', 0, '9', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(82, '20170165', 1, 1, '5', '1', 0, '10', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(83, '20170169', 1, 1, '5', '1', 0, '11', '29-07-2018', '2', '29-07-2018 12:11:31', ''),
(84, '20170166', 1, 1, '5', '1', 0, '12', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(85, '20170073', 1, 1, '5', '1', 0, '13', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(86, '20170167', 1, 1, '5', '1', 0, '14', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(87, '20170170', 1, 1, '5', '1', 0, '15', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(88, '20170268', 1, 1, '5', '1', 0, '16', '29-07-2018', '2', '29-07-2018 12:11:31', ''),
(89, '20170338', 1, 1, '5', '1', 0, '17', '29-07-2018', '1', '29-07-2018 12:11:31', ''),
(90, '20170171', 1, 1, '5', '2', 0, '1', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(91, '20170172', 1, 1, '5', '2', 0, '2', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(92, '20170065', 1, 1, '5', '2', 0, '3', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(93, '20170173', 1, 1, '5', '2', 0, '3', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(94, '20170061', 1, 1, '5', '2', 0, '4', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(95, '20170069', 1, 1, '5', '2', 0, '5', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(96, '20170072', 1, 1, '5', '2', 0, '6', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(97, '20170174', 1, 1, '5', '2', 0, '7', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(98, '20170070', 1, 1, '5', '2', 0, '8', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(99, '20170071', 1, 1, '5', '2', 0, '9', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(100, '20170064', 1, 1, '5', '2', 0, '10', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(101, '20170063', 1, 1, '5', '2', 0, '11', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(102, '20170068', 1, 1, '5', '2', 0, '12', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(103, '20170175', 1, 1, '5', '2', 0, '13', '29-07-2018', '2', '29-07-2018 12:13:12', ''),
(104, '20170176', 1, 1, '5', '2', 0, '14', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(105, '20170067', 1, 1, '5', '2', 0, '15', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(106, '  20170178', 1, 1, '5', '2', 0, '16', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(107, '20170336', 1, 1, '5', '2', 0, '17', '29-07-2018', '1', '29-07-2018 12:13:12', ''),
(108, '20170091', 1, 1, '4', '1', 0, '1', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(109, '20170179', 1, 1, '4', '1', 0, '2', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(110, '20170180', 1, 1, '4', '1', 0, '3', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(111, '20170181', 1, 1, '4', '1', 0, '4', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(112, '20170182', 1, 1, '4', '1', 0, '4', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(113, '20170183', 1, 1, '4', '1', 0, '5', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(114, '20170184', 1, 1, '4', '1', 0, '6', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(115, '20170185', 1, 1, '4', '1', 0, '7', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(116, '20170096', 1, 1, '4', '1', 0, '8', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(117, '20170186', 1, 1, '4', '1', 0, '9', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(118, '20170092', 1, 1, '4', '1', 0, '10', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:03'),
(119, '20170097', 1, 1, '4', '1', 0, '12', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:04'),
(120, '20170188', 1, 1, '4', '1', 0, '13', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:04'),
(121, '20170094', 1, 1, '4', '1', 0, '14', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:04'),
(122, '20170095', 1, 1, '4', '1', 0, '15', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:04'),
(123, '20170189', 1, 1, '4', '1', 0, '16', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:04'),
(124, '20170190', 1, 1, '4', '1', 0, '17', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:04'),
(125, '20170203', 1, 1, '4', '1', 0, '18', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:04'),
(126, '20170275', 1, 1, '4', '1', 0, '19', '29-07-2018', '1', '29-07-2018 12:15:25', '01-08-2018 17:22:04'),
(127, '20170088', 1, 1, '4', '2', 0, '1', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(128, '20170087', 1, 1, '4', '2', 0, '1', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(129, '20170084', 1, 1, '4', '2', 0, '2', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(130, '20170085', 1, 1, '4', '2', 0, '3', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(131, '20170086', 1, 1, '4', '2', 0, '4', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(132, '20170191', 1, 1, '4', '2', 0, '5', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(133, '20170082', 1, 1, '4', '2', 0, '6', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(134, '20170089', 1, 1, '4', '2', 0, '7', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(135, '20170192', 1, 1, '4', '2', 0, '8', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(136, '20170081', 1, 1, '4', '2', 0, '9', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(137, '20170194', 1, 1, '4', '2', 0, '10', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(138, '20170195', 1, 1, '4', '2', 0, '11', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(139, '20170100', 1, 1, '4', '2', 0, '12', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(140, '20170099', 1, 1, '4', '2', 0, '13', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(141, '20170196', 1, 1, '4', '2', 0, '14', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(142, '20170198', 1, 1, '4', '2', 0, '15', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(143, '20170083', 1, 1, '4', '2', 0, '16', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(144, '1018', 1, 1, '4', '2', 0, '17', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(145, '20170199', 1, 1, '4', '2', 0, '18', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:04'),
(146, '20170201', 1, 1, '4', '2', 0, '19', '29-07-2018', '1', '29-07-2018 12:18:46', '01-08-2018 17:22:05'),
(147, '20170111', 2, 1, '2', '1', 0, '1', '29-07-2018', '1', '29-07-2018 12:21:17', ''),
(148, '20170102', 2, 1, '2', '1', 0, '2', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(149, '20170224', 2, 1, '2', '1', 0, '3', '29-07-2018', '2', '29-07-2018 12:21:18', ''),
(150, '2170225', 2, 1, '2', '1', 0, '4', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(151, '20170103', 2, 1, '2', '1', 0, '5', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(152, '20170226', 2, 1, '2', '1', 0, '6', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(153, '20170106', 2, 1, '2', '1', 0, '7', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(154, '20170104', 2, 1, '2', '1', 0, '8', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(155, '20170113', 2, 1, '2', '1', 0, '9', '29-07-2018', '2', '29-07-2018 12:21:18', ''),
(156, '20170227', 2, 1, '2', '1', 0, '10', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(157, '20170228', 2, 1, '2', '1', 0, '11', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(158, '20170229', 2, 1, '2', '1', 0, '13', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(159, '20170230', 2, 1, '2', '1', 0, '14', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(160, '20170001', 2, 1, '2', '1', 0, '15', '29-07-2018', '2', '29-07-2018 12:21:18', ''),
(161, '20170231', 2, 1, '2', '1', 0, '16', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(162, '20170270', 2, 1, '2', '1', 0, '17', '29-07-2018', '1', '29-07-2018 12:21:18', ''),
(163, '20170108', 2, 1, '2', '2', 0, '1', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(164, '20170234', 2, 1, '2', '2', 0, '2', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(165, '20170107', 2, 1, '2', '2', 0, '3', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(166, '20170105', 2, 1, '2', '2', 0, '4', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(167, '20170110', 2, 1, '2', '2', 0, '5', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(168, '20170235', 2, 1, '2', '2', 0, '6', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(169, '20170236', 2, 1, '2', '2', 0, '7', '29-07-2018', '2', '29-07-2018 12:23:03', ''),
(170, '20170238', 2, 1, '2', '2', 0, '9', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(171, '20170237', 2, 1, '2', '2', 0, '10', '29-07-2018', '2', '29-07-2018 12:23:03', ''),
(172, '20170239', 2, 1, '2', '2', 0, '11', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(173, '20170269', 2, 1, '2', '2', 0, '12', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(174, '20170240', 2, 1, '2', '2', 0, '13', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(175, '20170109', 2, 1, '2', '2', 0, '14', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(176, '20170241', 2, 1, '2', '2', 0, '15', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(177, '20170242', 2, 1, '2', '2', 0, '16', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(178, '20170243', 2, 1, '2', '2', 0, '17', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(179, '20170244', 2, 1, '2', '2', 0, '18', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(180, '20170245', 2, 1, '2', '2', 0, '19', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(181, '20170246', 2, 1, '2', '2', 0, '20', '29-07-2018', '1', '29-07-2018 12:23:03', ''),
(182, '20170247', 2, 1, '2', '2', 0, '21', '29-07-2018', '2', '29-07-2018 12:23:03', ''),
(183, '20170038', 2, 1, '1', '2', 0, '1', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(184, '20170031', 2, 1, '1', '2', 0, '2', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(185, '20170024', 2, 1, '1', '2', 0, '3', '29-07-2018', '2', '29-07-2018 12:26:43', ''),
(186, '20170017', 2, 1, '1', '2', 0, '4', '29-07-2018', '2', '29-07-2018 12:26:43', ''),
(187, '20170332', 2, 1, '1', '2', 0, '5', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(188, '20170021', 2, 1, '1', '2', 0, '6', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(189, '20170333', 2, 1, '1', '2', 0, '7', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(190, '20170259', 2, 1, '1', '2', 0, '8', '29-07-2018', '2', '29-07-2018 12:26:43', ''),
(191, '20170334', 2, 1, '1', '2', 0, '9', '29-07-2018', '2', '29-07-2018 12:26:43', ''),
(192, '20170027', 2, 1, '1', '2', 0, '10', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(193, '20170023', 2, 1, '1', '2', 0, '11', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(194, '20170029', 2, 1, '1', '2', 0, '12', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(195, '20170036', 2, 1, '1', '2', 0, '13', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(196, '20170261', 2, 1, '1', '2', 0, '14', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(197, '20170255', 2, 1, '1', '2', 0, '15', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(198, '20170263', 2, 1, '1', '2', 0, '16', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(199, '20170264', 2, 1, '1', '2', 0, '17', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(200, '20170265', 2, 1, '1', '2', 0, '18', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(201, '20170266', 2, 1, '1', '2', 0, '19', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(202, '20170267', 2, 1, '1', '2', 0, '20', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(203, '20170272', 2, 1, '1', '2', 0, '21', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(204, '20170303', 2, 1, '1', '2', 0, '22', '29-07-2018', '1', '29-07-2018 12:26:43', ''),
(205, '20170018', 2, 1, '1', '1', 0, '1', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(206, '20170019', 2, 1, '1', '1', 0, '2', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(207, '20170248', 2, 1, '1', '1', 0, '3', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(208, '20170330', 2, 1, '1', '1', 0, '4', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(209, '20170030', 2, 1, '1', '1', 0, '5', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(210, '20170028', 2, 1, '1', '1', 0, '6', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(211, '20170039', 2, 1, '1', '1', 0, '7', '29-07-2018', '2', '29-07-2018 12:30:01', ''),
(212, '20170037', 2, 1, '1', '1', 0, '8', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(213, '20170022', 2, 1, '1', '1', 0, '9', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(214, '20170032', 2, 1, '1', '1', 0, '10', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(215, '1002', 2, 1, '1', '1', 0, '12', '29-07-2018', '2', '29-07-2018 12:30:01', ''),
(216, '20170250', 2, 1, '1', '1', 0, '13', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(217, '20170257', 2, 1, '1', '1', 0, '14', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(218, '20170251', 2, 1, '1', '1', 0, '15', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(219, '20170252', 2, 1, '1', '1', 0, '16', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(220, '20170253', 2, 1, '1', '1', 0, '17', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(221, '1004', 2, 1, '1', '1', 0, '18', '29-07-2018', '2', '29-07-2018 12:30:01', ''),
(222, '20170262', 2, 1, '1', '1', 0, '19', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(223, '20170256', 2, 1, '1', '1', 0, '20', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(224, '20170331', 2, 1, '1', '1', 0, '11', '29-07-2018', '1', '29-07-2018 12:30:01', ''),
(225, '20170214', 2, 1, '3', '1', 0, '1', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(226, '20170119', 2, 1, '3', '1', 0, '3', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(227, '20170216', 2, 1, '3', '1', 0, '4', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(228, '20170217', 2, 1, '3', '1', 0, '5', '29-07-2018', '2', '29-07-2018 12:33:12', ''),
(229, '20170121', 2, 1, '3', '1', 0, '6', '29-07-2018', '2', '29-07-2018 12:33:12', ''),
(230, '20170116', 2, 1, '3', '1', 0, '7', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(231, '20170218', 2, 1, '3', '1', 0, '8', '29-07-2018', '2', '29-07-2018 12:33:12', ''),
(232, '1014', 2, 1, '3', '1', 0, '9', '29-07-2018', '2', '29-07-2018 12:33:12', ''),
(233, '20170219', 2, 1, '3', '1', 0, '10', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(234, '20170220', 2, 1, '3', '1', 0, '11', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(235, '20170125', 2, 1, '3', '1', 0, '12', '29-07-2018', '2', '29-07-2018 12:33:12', ''),
(236, '20170221', 2, 1, '3', '1', 0, '13', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(237, '20170222', 2, 1, '3', '1', 0, '14', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(238, '20170277', 2, 1, '3', '1', 0, '15', '29-07-2018', '1', '29-07-2018 12:33:12', ''),
(239, '20170223', 2, 1, '3', '1', 0, '16', '29-07-2018', '2', '29-07-2018 12:33:12', ''),
(240, '20170204', 2, 1, '3', '2', 0, '1', '29-07-2018', '1', '29-07-2018 12:35:24', ''),
(241, '20170124', 2, 1, '3', '2', 0, '2', '29-07-2018', '1', '29-07-2018 12:35:24', ''),
(242, '20170123', 2, 1, '3', '2', 0, '3', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(243, '20170122', 2, 1, '3', '2', 0, '4', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(244, '20170118', 2, 1, '3', '2', 0, '5', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(245, '20170115', 2, 1, '3', '2', 0, '6', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(246, '20170120', 2, 1, '3', '2', 0, '7', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(247, '20170205', 2, 1, '3', '2', 0, '8', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(248, '20170206', 2, 1, '3', '2', 0, '9', '29-07-2018', '2', '29-07-2018 12:35:25', ''),
(249, '20170207', 2, 1, '3', '2', 0, '10', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(250, '20170208', 2, 1, '3', '2', 0, '11', '29-07-2018', '2', '29-07-2018 12:35:25', ''),
(251, '20170210', 2, 1, '3', '2', 0, '12', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(252, '20170211', 2, 1, '3', '2', 0, '13', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(253, '20170212', 2, 1, '3', '2', 0, '14', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(254, '20170213', 2, 1, '3', '2', 0, '15', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(255, '20170274', 2, 1, '3', '2', 0, '16', '29-07-2018', '2', '29-07-2018 12:35:25', ''),
(256, '20170335', 2, 1, '3', '2', 0, '17', '29-07-2018', '1', '29-07-2018 12:35:25', ''),
(257, '20170204', 2, 1, '3', '2', 0, '1', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(258, '20170124', 2, 1, '3', '2', 0, '2', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(259, '20170123', 2, 1, '3', '2', 0, '3', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(260, '20170122', 2, 1, '3', '2', 0, '4', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(261, '20170118', 2, 1, '3', '2', 0, '5', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(262, '20170115', 2, 1, '3', '2', 0, '6', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(263, '20170120', 2, 1, '3', '2', 0, '7', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(264, '20170205', 2, 1, '3', '2', 0, '8', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(265, '20170206', 2, 1, '3', '2', 0, '9', '30-07-2018', '2', '30-07-2018 10:43:29', ''),
(266, '20170207', 2, 1, '3', '2', 0, '10', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(267, '20170208', 2, 1, '3', '2', 0, '11', '30-07-2018', '2', '30-07-2018 10:43:29', ''),
(268, '20170210', 2, 1, '3', '2', 0, '12', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(269, '20170211', 2, 1, '3', '2', 0, '13', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(270, '20170212', 2, 1, '3', '2', 0, '14', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(271, '20170213', 2, 1, '3', '2', 0, '15', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(272, '20170274', 2, 1, '3', '2', 0, '16', '30-07-2018', '2', '30-07-2018 10:43:29', ''),
(273, '20170335', 2, 1, '3', '2', 0, '17', '30-07-2018', '1', '30-07-2018 10:43:29', ''),
(274, '20170214', 2, 1, '3', '1', 0, '1', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(275, '20170119', 2, 1, '3', '1', 0, '3', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(276, '20170216', 2, 1, '3', '1', 0, '4', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(277, '20170217', 2, 1, '3', '1', 0, '5', '30-07-2018', '2', '30-07-2018 10:44:48', ''),
(278, '20170121', 2, 1, '3', '1', 0, '6', '30-07-2018', '2', '30-07-2018 10:44:48', ''),
(279, '20170116', 2, 1, '3', '1', 0, '7', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(280, '20170218', 2, 1, '3', '1', 0, '8', '30-07-2018', '2', '30-07-2018 10:44:48', ''),
(281, '1014', 2, 1, '3', '1', 0, '9', '30-07-2018', '2', '30-07-2018 10:44:48', ''),
(282, '20170219', 2, 1, '3', '1', 0, '10', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(283, '20170220', 2, 1, '3', '1', 0, '11', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(284, '20170125', 2, 1, '3', '1', 0, '12', '30-07-2018', '2', '30-07-2018 10:44:48', ''),
(285, '20170221', 2, 1, '3', '1', 0, '13', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(286, '20170222', 2, 1, '3', '1', 0, '14', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(287, '20170277', 2, 1, '3', '1', 0, '15', '30-07-2018', '1', '30-07-2018 10:44:48', ''),
(288, '20170223', 2, 1, '3', '1', 0, '16', '30-07-2018', '2', '30-07-2018 10:44:48', ''),
(289, '20170111', 2, 1, '2', '1', 0, '1', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(290, '20170102', 2, 1, '2', '1', 0, '2', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(291, '20170224', 2, 1, '2', '1', 0, '3', '30-07-2018', '2', '30-07-2018 10:45:38', ''),
(292, '2170225', 2, 1, '2', '1', 0, '4', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(293, '20170103', 2, 1, '2', '1', 0, '5', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(294, '20170226', 2, 1, '2', '1', 0, '6', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(295, '20170106', 2, 1, '2', '1', 0, '7', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(296, '20170104', 2, 1, '2', '1', 0, '8', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(297, '20170113', 2, 1, '2', '1', 0, '9', '30-07-2018', '2', '30-07-2018 10:45:38', ''),
(298, '20170227', 2, 1, '2', '1', 0, '10', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(299, '20170228', 2, 1, '2', '1', 0, '11', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(300, '20170229', 2, 1, '2', '1', 0, '13', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(301, '20170230', 2, 1, '2', '1', 0, '14', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(302, '20170001', 2, 1, '2', '1', 0, '15', '30-07-2018', '2', '30-07-2018 10:45:38', ''),
(303, '20170231', 2, 1, '2', '1', 0, '16', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(304, '20170270', 2, 1, '2', '1', 0, '17', '30-07-2018', '1', '30-07-2018 10:45:38', ''),
(305, '20170108', 2, 1, '2', '2', 0, '1', '30-07-2018', '1', '30-07-2018 10:46:42', ''),
(306, '20170234', 2, 1, '2', '2', 0, '2', '30-07-2018', '2', '30-07-2018 10:46:43', ''),
(307, '20170107', 2, 1, '2', '2', 0, '3', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(308, '20170105', 2, 1, '2', '2', 0, '4', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(309, '20170110', 2, 1, '2', '2', 0, '5', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(310, '20170235', 2, 1, '2', '2', 0, '6', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(311, '20170236', 2, 1, '2', '2', 0, '7', '30-07-2018', '2', '30-07-2018 10:46:43', ''),
(312, '20170238', 2, 1, '2', '2', 0, '9', '30-07-2018', '2', '30-07-2018 10:46:43', ''),
(313, '20170237', 2, 1, '2', '2', 0, '10', '30-07-2018', '2', '30-07-2018 10:46:43', ''),
(314, '20170239', 2, 1, '2', '2', 0, '11', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(315, '20170269', 2, 1, '2', '2', 0, '12', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(316, '20170240', 2, 1, '2', '2', 0, '13', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(317, '20170109', 2, 1, '2', '2', 0, '14', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(318, '20170241', 2, 1, '2', '2', 0, '15', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(319, '20170242', 2, 1, '2', '2', 0, '16', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(320, '20170243', 2, 1, '2', '2', 0, '17', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(321, '20170244', 2, 1, '2', '2', 0, '18', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(322, '20170245', 2, 1, '2', '2', 0, '19', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(323, '20170246', 2, 1, '2', '2', 0, '20', '30-07-2018', '1', '30-07-2018 10:46:43', ''),
(324, '20170247', 2, 1, '2', '2', 0, '21', '30-07-2018', '2', '30-07-2018 10:46:43', ''),
(325, '20170018', 2, 1, '1', '1', 0, '1', '30-07-2018', '2', '30-07-2018 10:47:52', ''),
(326, '20170019', 2, 1, '1', '1', 0, '2', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(327, '20170248', 2, 1, '1', '1', 0, '3', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(328, '20170330', 2, 1, '1', '1', 0, '4', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(329, '20170030', 2, 1, '1', '1', 0, '5', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(330, '20170028', 2, 1, '1', '1', 0, '6', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(331, '20170039', 2, 1, '1', '1', 0, '7', '30-07-2018', '2', '30-07-2018 10:47:52', ''),
(332, '20170037', 2, 1, '1', '1', 0, '8', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(333, '20170022', 2, 1, '1', '1', 0, '9', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(334, '20170032', 2, 1, '1', '1', 0, '10', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(335, '1002', 2, 1, '1', '1', 0, '12', '30-07-2018', '2', '30-07-2018 10:47:52', ''),
(336, '20170250', 2, 1, '1', '1', 0, '13', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(337, '20170257', 2, 1, '1', '1', 0, '14', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(338, '20170251', 2, 1, '1', '1', 0, '15', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(339, '20170252', 2, 1, '1', '1', 0, '16', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(340, '20170253', 2, 1, '1', '1', 0, '17', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(341, '1004', 2, 1, '1', '1', 0, '18', '30-07-2018', '2', '30-07-2018 10:47:52', ''),
(342, '20170262', 2, 1, '1', '1', 0, '19', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(343, '20170256', 2, 1, '1', '1', 0, '20', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(344, '20170331', 2, 1, '1', '1', 0, '11', '30-07-2018', '1', '30-07-2018 10:47:52', ''),
(345, '20170038', 2, 1, '1', '2', 0, '1', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(346, '20170031', 2, 1, '1', '2', 0, '2', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(347, '20170024', 2, 1, '1', '2', 0, '3', '30-07-2018', '2', '30-07-2018 10:48:38', ''),
(348, '20170017', 2, 1, '1', '2', 0, '4', '30-07-2018', '2', '30-07-2018 10:48:38', ''),
(349, '20170332', 2, 1, '1', '2', 0, '5', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(350, '20170021', 2, 1, '1', '2', 0, '6', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(351, '20170333', 2, 1, '1', '2', 0, '7', '30-07-2018', '2', '30-07-2018 10:48:38', ''),
(352, '20170259', 2, 1, '1', '2', 0, '8', '30-07-2018', '2', '30-07-2018 10:48:38', ''),
(353, '20170334', 2, 1, '1', '2', 0, '9', '30-07-2018', '2', '30-07-2018 10:48:38', ''),
(354, '20170027', 2, 1, '1', '2', 0, '10', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(355, '20170023', 2, 1, '1', '2', 0, '11', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(356, '20170029', 2, 1, '1', '2', 0, '12', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(357, '20170036', 2, 1, '1', '2', 0, '13', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(358, '20170261', 2, 1, '1', '2', 0, '14', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(359, '20170255', 2, 1, '1', '2', 0, '15', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(360, '20170263', 2, 1, '1', '2', 0, '16', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(361, '20170264', 2, 1, '1', '2', 0, '17', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(362, '20170265', 2, 1, '1', '2', 0, '18', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(363, '20170266', 2, 1, '1', '2', 0, '19', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(364, '20170267', 2, 1, '1', '2', 0, '20', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(365, '20170272', 2, 1, '1', '2', 0, '21', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(366, '20170303', 2, 1, '1', '2', 0, '22', '30-07-2018', '1', '30-07-2018 10:48:38', ''),
(367, '20170060', 1, 1, '10', '0', 0, '1', '30-07-2018', '1', '30-07-2018 12:10:06', ''),
(368, '20170056', 1, 1, '10', '0', 0, '2', '30-07-2018', '1', '30-07-2018 12:10:06', ''),
(369, '20170058', 1, 1, '10', '0', 0, '3', '30-07-2018', '1', '30-07-2018 12:10:07', ''),
(370, '20170159', 1, 1, '10', '0', 0, '4', '30-07-2018', '2', '30-07-2018 12:10:07', ''),
(371, '20170160', 1, 1, '10', '0', 0, '5', '30-07-2018', '1', '30-07-2018 12:10:07', ''),
(372, '20170161', 1, 1, '10', '0', 0, '6', '30-07-2018', '1', '30-07-2018 12:10:07', ''),
(373, '20170057', 1, 1, '10', '0', 0, '7', '30-07-2018', '1', '30-07-2018 12:10:07', ''),
(374, '20170162', 1, 1, '10', '0', 0, '8', '30-07-2018', '1', '30-07-2018 12:10:07', ''),
(375, '20170059', 1, 1, '10', '0', 0, '9', '30-07-2018', '1', '30-07-2018 12:10:07', ''),
(376, '20170163', 1, 1, '10', '0', 0, '10', '30-07-2018', '1', '30-07-2018 12:10:07', ''),
(377, '20170002', 1, 1, '9', '0', 0, '1', '30-07-2018', '1', '30-07-2018 12:11:47', ''),
(378, '20170150', 1, 1, '9', '0', 0, '2', '30-07-2018', '1', '30-07-2018 12:11:47', ''),
(379, '20170151', 1, 1, '9', '0', 0, '3', '30-07-2018', '1', '30-07-2018 12:11:47', ''),
(380, '20170152', 1, 1, '9', '0', 0, '4', '30-07-2018', '1', '30-07-2018 12:11:47', ''),
(381, '20170153', 1, 1, '9', '0', 0, '5', '30-07-2018', '2', '30-07-2018 12:11:47', ''),
(382, '20170154', 1, 1, '9', '0', 0, '6', '30-07-2018', '2', '30-07-2018 12:11:47', ''),
(383, '20170155', 1, 1, '9', '0', 0, '7', '30-07-2018', '1', '30-07-2018 12:11:47', ''),
(384, '20170337', 1, 1, '9', '0', 0, '8', '30-07-2018', '2', '30-07-2018 12:11:47', ''),
(385, '20170157', 1, 1, '9', '0', 0, '9', '30-07-2018', '1', '30-07-2018 12:11:47', ''),
(386, '20170158', 1, 1, '9', '0', 0, '10', '30-07-2018', '1', '30-07-2018 12:11:47', ''),
(387, '20170003', 1, 1, '8', '0', 0, '1', '30-07-2018', '2', '30-07-2018 12:12:36', ''),
(388, '20170004', 1, 1, '8', '0', 0, '2', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(389, '20170014', 1, 1, '8', '0', 0, '3', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(390, '20170006', 1, 1, '8', '0', 0, '4', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(391, '20170005', 1, 1, '8', '0', 0, '5', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(392, '20170007', 1, 1, '8', '0', 0, '6', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(393, '20170148', 1, 1, '8', '0', 0, '7', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(394, '20170009', 1, 1, '8', '0', 0, '8', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(395, '20170008', 1, 1, '8', '0', 0, '9', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(396, '20170016', 1, 1, '8', '0', 0, '10', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(397, '20170010', 1, 1, '8', '0', 0, '11', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(398, '20170015', 1, 1, '8', '0', 0, '12', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(399, '20170011', 1, 1, '8', '0', 0, '13', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(400, '20170013', 1, 1, '8', '0', 0, '14', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(401, '20170012', 1, 1, '8', '0', 0, '15', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(402, '1026', 1, 1, '8', '0', 0, '16', '30-07-2018', '1', '30-07-2018 12:12:37', ''),
(403, '20170040', 1, 1, '7', '0', 0, '1', '30-07-2018', '2', '30-07-2018 12:19:13', ''),
(404, '20170144', 1, 1, '7', '0', 0, '1', '30-07-2018', '1', '30-07-2018 12:19:13', ''),
(405, '20170041', 1, 1, '7', '0', 0, '2', '30-07-2018', '1', '30-07-2018 12:19:13', ''),
(406, '20170042', 1, 1, '7', '0', 0, '3', '30-07-2018', '1', '30-07-2018 12:19:13', ''),
(407, '20170043', 1, 1, '7', '0', 0, '4', '30-07-2018', '1', '30-07-2018 12:19:14', ''),
(408, '20170044', 1, 1, '7', '0', 0, '5', '30-07-2018', '1', '30-07-2018 12:19:14', ''),
(409, '20170045', 1, 1, '7', '0', 0, '6', '30-07-2018', '1', '30-07-2018 12:19:14', ''),
(410, '20170145', 1, 1, '7', '0', 0, '7', '30-07-2018', '1', '30-07-2018 12:19:14', ''),
(411, '20170046', 1, 1, '7', '0', 0, '8', '30-07-2018', '1', '30-07-2018 12:19:14', ''),
(412, '20170054', 1, 1, '7', '0', 0, '9', '30-07-2018', '1', '30-07-2018 12:19:14', ''),
(413, '20170047', 1, 1, '7', '0', 0, '10', '30-07-2018', '1', '30-07-2018 12:19:14', ''),
(414, '1025', 1, 1, '7', '0', 0, '11', '30-07-2018', '2', '30-07-2018 12:19:14', ''),
(415, '20170146', 1, 1, '7', '0', 0, '12', '30-07-2018', '1', '30-07-2018 12:19:14', ''),
(416, '20170147', 1, 1, '7', '0', 0, '13', '30-07-2018', '2', '30-07-2018 12:19:14', ''),
(417, '20170279', 1, 1, '6', '0', 0, '1', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(418, '20170126', 1, 1, '6', '0', 0, '2', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(419, '20170127', 1, 1, '6', '0', 0, '4', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(420, '20170128', 1, 1, '6', '0', 0, '5', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(421, '20170130', 1, 1, '6', '0', 0, '6', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(422, '20170129', 1, 1, '6', '0', 0, '6', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(423, '20170131', 1, 1, '6', '0', 0, '7', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(424, '20170132', 1, 1, '6', '0', 0, '8', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(425, '20170052', 1, 1, '6', '0', 0, '9', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(426, '20170133', 1, 1, '6', '0', 0, '10', '30-07-2018', '2', '30-07-2018 12:20:27', ''),
(427, '20170134', 1, 1, '6', '0', 0, '11', '30-07-2018', '2', '30-07-2018 12:20:27', ''),
(428, '20170135', 1, 1, '6', '0', 0, '12', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(429, '20170136', 1, 1, '6', '0', 0, '13', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(430, '20170137', 1, 1, '6', '0', 0, '14', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(431, '20170139', 1, 1, '6', '0', 0, '15', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(432, '20170138', 1, 1, '6', '0', 0, '16', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(433, '20170053', 1, 1, '6', '0', 0, '17', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(434, '20170141', 1, 1, '6', '0', 0, '18', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(435, '20170142', 1, 1, '6', '0', 0, '19', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(436, '20170143', 1, 1, '6', '0', 0, '20', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(437, '20170276', 1, 1, '6', '0', 0, '21', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(438, '20170304', 1, 1, '6', '0', 0, '22', '30-07-2018', '1', '30-07-2018 12:20:27', ''),
(439, '20170164', 1, 1, '5', '1', 0, '1', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(440, '20170079', 1, 1, '5', '1', 0, '2', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(441, '20170080', 1, 1, '5', '1', 0, '3', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(442, '20170074', 1, 1, '5', '1', 0, '4', '30-07-2018', '2', '30-07-2018 12:25:44', ''),
(443, '20170076', 1, 1, '5', '1', 0, '5', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(444, '20170077', 1, 1, '5', '1', 0, '6', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(445, '20170075', 1, 1, '5', '1', 0, '7', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(446, '20170078', 1, 1, '5', '1', 0, '8', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(447, '20170168', 1, 1, '5', '1', 0, '9', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(448, '20170165', 1, 1, '5', '1', 0, '10', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(449, '20170169', 1, 1, '5', '1', 0, '11', '30-07-2018', '2', '30-07-2018 12:25:44', ''),
(450, '20170166', 1, 1, '5', '1', 0, '12', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(451, '20170073', 1, 1, '5', '1', 0, '13', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(452, '20170167', 1, 1, '5', '1', 0, '14', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(453, '20170170', 1, 1, '5', '1', 0, '15', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(454, '20170268', 1, 1, '5', '1', 0, '16', '30-07-2018', '2', '30-07-2018 12:25:44', ''),
(455, '20170338', 1, 1, '5', '1', 0, '17', '30-07-2018', '1', '30-07-2018 12:25:44', ''),
(456, '20170171', 1, 1, '5', '2', 0, '1', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(457, '20170172', 1, 1, '5', '2', 0, '2', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(458, '20170065', 1, 1, '5', '2', 0, '3', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(459, '20170173', 1, 1, '5', '2', 0, '3', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(460, '20170061', 1, 1, '5', '2', 0, '4', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(461, '20170069', 1, 1, '5', '2', 0, '5', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(462, '20170072', 1, 1, '5', '2', 0, '6', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(463, '20170174', 1, 1, '5', '2', 0, '7', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(464, '20170070', 1, 1, '5', '2', 0, '8', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(465, '20170071', 1, 1, '5', '2', 0, '9', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(466, '20170064', 1, 1, '5', '2', 0, '10', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(467, '20170063', 1, 1, '5', '2', 0, '11', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(468, '20170068', 1, 1, '5', '2', 0, '12', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(469, '20170175', 1, 1, '5', '2', 0, '13', '30-07-2018', '2', '30-07-2018 12:26:46', ''),
(470, '20170176', 1, 1, '5', '2', 0, '14', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(471, '20170067', 1, 1, '5', '2', 0, '15', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(472, '  20170178', 1, 1, '5', '2', 0, '16', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(473, '20170336', 1, 1, '5', '2', 0, '17', '30-07-2018', '1', '30-07-2018 12:26:46', ''),
(474, '20170088', 1, 1, '4', '2', 0, '1', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(475, '20170087', 1, 1, '4', '2', 0, '1', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(476, '20170084', 1, 1, '4', '2', 0, '2', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(477, '20170085', 1, 1, '4', '2', 0, '3', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(478, '20170086', 1, 1, '4', '2', 0, '4', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(479, '20170191', 1, 1, '4', '2', 0, '5', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(480, '20170082', 1, 1, '4', '2', 0, '6', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(481, '20170089', 1, 1, '4', '2', 0, '7', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(482, '20170192', 1, 1, '4', '2', 0, '8', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(483, '20170081', 1, 1, '4', '2', 0, '9', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(484, '20170194', 1, 1, '4', '2', 0, '10', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(485, '20170195', 1, 1, '4', '2', 0, '11', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(486, '20170100', 1, 1, '4', '2', 0, '12', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(487, '20170099', 1, 1, '4', '2', 0, '13', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(488, '20170196', 1, 1, '4', '2', 0, '14', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(489, '20170198', 1, 1, '4', '2', 0, '15', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(490, '20170083', 1, 1, '4', '2', 0, '16', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(491, '1018', 1, 1, '4', '2', 0, '17', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(492, '20170199', 1, 1, '4', '2', 0, '18', '30-07-2018', '1', '30-07-2018 12:28:29', '01-08-2018 17:22:04'),
(493, '20170201', 1, 1, '4', '2', 0, '19', '30-07-2018', '1', '30-07-2018 12:28:30', '01-08-2018 17:22:05'),
(494, '20170091', 1, 1, '4', '1', 0, '1', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(495, '20170179', 1, 1, '4', '1', 0, '2', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(496, '20170180', 1, 1, '4', '1', 0, '3', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(497, '20170181', 1, 1, '4', '1', 0, '4', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(498, '20170182', 1, 1, '4', '1', 0, '4', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(499, '20170183', 1, 1, '4', '1', 0, '5', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(500, '20170184', 1, 1, '4', '1', 0, '6', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(501, '20170185', 1, 1, '4', '1', 0, '7', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(502, '20170096', 1, 1, '4', '1', 0, '8', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(503, '20170186', 1, 1, '4', '1', 0, '9', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(504, '20170092', 1, 1, '4', '1', 0, '10', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:03'),
(505, '20170097', 1, 1, '4', '1', 0, '12', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:04'),
(506, '20170188', 1, 1, '4', '1', 0, '13', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:04'),
(507, '20170094', 1, 1, '4', '1', 0, '14', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:04'),
(508, '20170095', 1, 1, '4', '1', 0, '15', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:04'),
(509, '20170189', 1, 1, '4', '1', 0, '16', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:04'),
(510, '20170190', 1, 1, '4', '1', 0, '17', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:04'),
(511, '20170203', 1, 1, '4', '1', 0, '18', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:04'),
(512, '20170275', 1, 1, '4', '1', 0, '19', '30-07-2018', '1', '30-07-2018 12:31:07', '01-08-2018 17:22:04'),
(513, '20170214', 2, 1, '3', '1', 0, '1', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(514, '20170119', 2, 1, '3', '1', 0, '3', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(515, '20170216', 2, 1, '3', '1', 0, '4', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(516, '20170217', 2, 1, '3', '1', 0, '5', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(517, '20170121', 2, 1, '3', '1', 0, '6', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(518, '20170116', 2, 1, '3', '1', 0, '7', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(519, '20170218', 2, 1, '3', '1', 0, '8', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(520, '1014', 2, 1, '3', '1', 0, '9', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(521, '20170219', 2, 1, '3', '1', 0, '10', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(522, '20170220', 2, 1, '3', '1', 0, '11', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(523, '20170125', 2, 1, '3', '1', 0, '12', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(524, '20170221', 2, 1, '3', '1', 0, '13', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(525, '20170222', 2, 1, '3', '1', 0, '14', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(526, '20170277', 2, 1, '3', '1', 0, '15', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(527, '20170223', 2, 1, '3', '1', 0, '16', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(528, '20170204', 2, 1, '3', '2', 0, '1', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(529, '20170124', 2, 1, '3', '2', 0, '2', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(530, '20170123', 2, 1, '3', '2', 0, '3', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(531, '20170122', 2, 1, '3', '2', 0, '4', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(532, '20170118', 2, 1, '3', '2', 0, '5', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(533, '20170115', 2, 1, '3', '2', 0, '6', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(534, '20170120', 2, 1, '3', '2', 0, '7', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(535, '20170205', 2, 1, '3', '2', 0, '8', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(536, '20170206', 2, 1, '3', '2', 0, '9', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(537, '20170207', 2, 1, '3', '2', 0, '10', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(538, '20170208', 2, 1, '3', '2', 0, '11', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(539, '20170210', 2, 1, '3', '2', 0, '12', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(540, '20170211', 2, 1, '3', '2', 0, '13', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(541, '20170212', 2, 1, '3', '2', 0, '14', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(542, '20170213', 2, 1, '3', '2', 0, '15', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(543, '20170274', 2, 1, '3', '2', 0, '16', '31-07-2018', '2', '31-07-2018 10:46:32', ''),
(544, '20170335', 2, 1, '3', '2', 0, '17', '31-07-2018', '1', '31-07-2018 10:46:32', ''),
(545, '20170038', 2, 1, '1', '2', 0, '1', '31-07-2018', '1', '31-07-2018 10:53:06', ''),
(546, '20170031', 2, 1, '1', '2', 0, '2', '31-07-2018', '2', '31-07-2018 10:53:06', ''),
(547, '20170024', 2, 1, '1', '2', 0, '3', '31-07-2018', '2', '31-07-2018 10:53:06', ''),
(548, '20170017', 2, 1, '1', '2', 0, '4', '31-07-2018', '2', '31-07-2018 10:53:06', ''),
(549, '20170332', 2, 1, '1', '2', 0, '5', '31-07-2018', '1', '31-07-2018 10:53:06', ''),
(550, '20170021', 2, 1, '1', '2', 0, '6', '31-07-2018', '1', '31-07-2018 10:53:06', ''),
(551, '20170333', 2, 1, '1', '2', 0, '7', '31-07-2018', '1', '31-07-2018 10:53:06', ''),
(552, '20170259', 2, 1, '1', '2', 0, '8', '31-07-2018', '2', '31-07-2018 10:53:06', '');
INSERT INTO `tbl_student_attendance` (`Std_Attendance_ID`, `Std_Attendance_NameID`, `Std_Attendance_shift_ID`, `Std_Attendance_medium_ID`, `Std_Attendance_class_ID`, `Std_Attendance_section_ID`, `Std_Attendance_group_ID`, `Std_Attendance_Roll`, `Std_Attendance_Date`, `Std_Attendance_Status`, `Created`, `Modified`) VALUES
(553, '20170334', 2, 1, '1', '2', 0, '9', '31-07-2018', '2', '31-07-2018 10:53:07', ''),
(554, '20170027', 2, 1, '1', '2', 0, '10', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(555, '20170023', 2, 1, '1', '2', 0, '11', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(556, '20170029', 2, 1, '1', '2', 0, '12', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(557, '20170036', 2, 1, '1', '2', 0, '13', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(558, '20170261', 2, 1, '1', '2', 0, '14', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(559, '20170255', 2, 1, '1', '2', 0, '15', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(560, '20170263', 2, 1, '1', '2', 0, '16', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(561, '20170264', 2, 1, '1', '2', 0, '17', '31-07-2018', '2', '31-07-2018 10:53:07', ''),
(562, '20170265', 2, 1, '1', '2', 0, '18', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(563, '20170266', 2, 1, '1', '2', 0, '19', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(564, '20170267', 2, 1, '1', '2', 0, '20', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(565, '20170272', 2, 1, '1', '2', 0, '21', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(566, '20170303', 2, 1, '1', '2', 0, '22', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(567, '20170018', 2, 1, '1', '1', 0, '1', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(568, '20170019', 2, 1, '1', '1', 0, '2', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(569, '20170248', 2, 1, '1', '1', 0, '3', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(570, '20170330', 2, 1, '1', '1', 0, '4', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(571, '20170030', 2, 1, '1', '1', 0, '5', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(572, '20170028', 2, 1, '1', '1', 0, '6', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(573, '20170039', 2, 1, '1', '1', 0, '7', '31-07-2018', '2', '31-07-2018 10:53:07', ''),
(574, '20170037', 2, 1, '1', '1', 0, '8', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(575, '20170022', 2, 1, '1', '1', 0, '9', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(576, '20170032', 2, 1, '1', '1', 0, '10', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(577, '1002', 2, 1, '1', '1', 0, '12', '31-07-2018', '2', '31-07-2018 10:53:07', ''),
(578, '20170250', 2, 1, '1', '1', 0, '13', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(579, '20170257', 2, 1, '1', '1', 0, '14', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(580, '20170251', 2, 1, '1', '1', 0, '15', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(581, '20170252', 2, 1, '1', '1', 0, '16', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(582, '20170253', 2, 1, '1', '1', 0, '17', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(583, '1004', 2, 1, '1', '1', 0, '18', '31-07-2018', '2', '31-07-2018 10:53:07', ''),
(584, '20170262', 2, 1, '1', '1', 0, '19', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(585, '20170256', 2, 1, '1', '1', 0, '20', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(586, '20170331', 2, 1, '1', '1', 0, '11', '31-07-2018', '1', '31-07-2018 10:53:07', ''),
(587, '20170111', 2, 1, '2', '1', 0, '1', '31-07-2018', '1', '31-07-2018 10:56:33', ''),
(588, '20170102', 2, 1, '2', '1', 0, '2', '31-07-2018', '1', '31-07-2018 10:56:33', ''),
(589, '20170224', 2, 1, '2', '1', 0, '3', '31-07-2018', '2', '31-07-2018 10:56:33', ''),
(590, '2170225', 2, 1, '2', '1', 0, '4', '31-07-2018', '1', '31-07-2018 10:56:33', ''),
(591, '20170103', 2, 1, '2', '1', 0, '5', '31-07-2018', '1', '31-07-2018 10:56:33', ''),
(592, '20170226', 2, 1, '2', '1', 0, '6', '31-07-2018', '1', '31-07-2018 10:56:33', ''),
(593, '20170106', 2, 1, '2', '1', 0, '7', '31-07-2018', '1', '31-07-2018 10:56:33', ''),
(594, '20170104', 2, 1, '2', '1', 0, '8', '31-07-2018', '1', '31-07-2018 10:56:33', ''),
(595, '20170113', 2, 1, '2', '1', 0, '9', '31-07-2018', '2', '31-07-2018 10:56:33', ''),
(596, '20170227', 2, 1, '2', '1', 0, '10', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(597, '20170228', 2, 1, '2', '1', 0, '11', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(598, '20170229', 2, 1, '2', '1', 0, '13', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(599, '20170230', 2, 1, '2', '1', 0, '14', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(600, '20170001', 2, 1, '2', '1', 0, '15', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(601, '20170231', 2, 1, '2', '1', 0, '16', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(602, '20170270', 2, 1, '2', '1', 0, '17', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(603, '20170108', 2, 1, '2', '2', 0, '1', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(604, '20170234', 2, 1, '2', '2', 0, '2', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(605, '20170107', 2, 1, '2', '2', 0, '3', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(606, '20170105', 2, 1, '2', '2', 0, '4', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(607, '20170110', 2, 1, '2', '2', 0, '5', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(608, '20170235', 2, 1, '2', '2', 0, '6', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(609, '20170236', 2, 1, '2', '2', 0, '7', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(610, '20170238', 2, 1, '2', '2', 0, '9', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(611, '20170237', 2, 1, '2', '2', 0, '10', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(612, '20170239', 2, 1, '2', '2', 0, '11', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(613, '20170269', 2, 1, '2', '2', 0, '12', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(614, '20170240', 2, 1, '2', '2', 0, '13', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(615, '20170109', 2, 1, '2', '2', 0, '14', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(616, '20170241', 2, 1, '2', '2', 0, '15', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(617, '20170242', 2, 1, '2', '2', 0, '16', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(618, '20170243', 2, 1, '2', '2', 0, '17', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(619, '20170244', 2, 1, '2', '2', 0, '18', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(620, '20170245', 2, 1, '2', '2', 0, '19', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(621, '20170246', 2, 1, '2', '2', 0, '20', '31-07-2018', '1', '31-07-2018 10:56:34', ''),
(622, '20170247', 2, 1, '2', '2', 0, '21', '31-07-2018', '2', '31-07-2018 10:56:34', ''),
(623, '20170002', 1, 1, '9', '0', 0, '1', '31-07-2018', '1', '31-07-2018 11:49:11', ''),
(624, '20170150', 1, 1, '9', '0', 0, '2', '31-07-2018', '1', '31-07-2018 11:49:11', ''),
(625, '20170151', 1, 1, '9', '0', 0, '3', '31-07-2018', '1', '31-07-2018 11:49:11', ''),
(626, '20170152', 1, 1, '9', '0', 0, '4', '31-07-2018', '1', '31-07-2018 11:49:11', ''),
(627, '20170153', 1, 1, '9', '0', 0, '5', '31-07-2018', '2', '31-07-2018 11:49:11', ''),
(628, '20170154', 1, 1, '9', '0', 0, '6', '31-07-2018', '2', '31-07-2018 11:49:11', ''),
(629, '20170155', 1, 1, '9', '0', 0, '7', '31-07-2018', '1', '31-07-2018 11:49:11', ''),
(630, '20170337', 1, 1, '9', '0', 0, '8', '31-07-2018', '2', '31-07-2018 11:49:11', ''),
(631, '20170157', 1, 1, '9', '0', 0, '9', '31-07-2018', '1', '31-07-2018 11:49:11', ''),
(632, '20170158', 1, 1, '9', '0', 0, '10', '31-07-2018', '1', '31-07-2018 11:49:11', ''),
(633, '20170060', 1, 1, '10', '0', 0, '1', '31-07-2018', '1', '31-07-2018 11:50:47', ''),
(634, '20170056', 1, 1, '10', '0', 0, '2', '31-07-2018', '1', '31-07-2018 11:50:47', ''),
(635, '20170058', 1, 1, '10', '0', 0, '3', '31-07-2018', '2', '31-07-2018 11:50:47', ''),
(636, '20170159', 1, 1, '10', '0', 0, '4', '31-07-2018', '1', '31-07-2018 11:50:47', ''),
(637, '20170160', 1, 1, '10', '0', 0, '5', '31-07-2018', '1', '31-07-2018 11:50:47', ''),
(638, '20170161', 1, 1, '10', '0', 0, '6', '31-07-2018', '1', '31-07-2018 11:50:47', ''),
(639, '20170057', 1, 1, '10', '0', 0, '7', '31-07-2018', '1', '31-07-2018 11:50:48', ''),
(640, '20170162', 1, 1, '10', '0', 0, '8', '31-07-2018', '1', '31-07-2018 11:50:48', ''),
(641, '20170059', 1, 1, '10', '0', 0, '9', '31-07-2018', '1', '31-07-2018 11:50:48', ''),
(642, '20170163', 1, 1, '10', '0', 0, '10', '31-07-2018', '1', '31-07-2018 11:50:48', ''),
(643, '20170164', 1, 1, '5', '1', 0, '1', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(644, '20170079', 1, 1, '5', '1', 0, '2', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(645, '20170080', 1, 1, '5', '1', 0, '3', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(646, '20170074', 1, 1, '5', '1', 0, '4', '31-07-2018', '2', '31-07-2018 12:03:04', ''),
(647, '20170076', 1, 1, '5', '1', 0, '5', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(648, '20170077', 1, 1, '5', '1', 0, '6', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(649, '20170075', 1, 1, '5', '1', 0, '7', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(650, '20170078', 1, 1, '5', '1', 0, '8', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(651, '20170168', 1, 1, '5', '1', 0, '9', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(652, '20170165', 1, 1, '5', '1', 0, '10', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(653, '20170169', 1, 1, '5', '1', 0, '11', '31-07-2018', '2', '31-07-2018 12:03:04', ''),
(654, '20170166', 1, 1, '5', '1', 0, '12', '31-07-2018', '1', '31-07-2018 12:03:04', ''),
(655, '20170073', 1, 1, '5', '1', 0, '13', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(656, '20170167', 1, 1, '5', '1', 0, '14', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(657, '20170170', 1, 1, '5', '1', 0, '15', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(658, '20170268', 1, 1, '5', '1', 0, '16', '31-07-2018', '2', '31-07-2018 12:03:05', ''),
(659, '20170338', 1, 1, '5', '1', 0, '17', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(660, '20170171', 1, 1, '5', '2', 0, '1', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(661, '20170172', 1, 1, '5', '2', 0, '2', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(662, '20170065', 1, 1, '5', '2', 0, '3', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(663, '20170173', 1, 1, '5', '2', 0, '3', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(664, '20170061', 1, 1, '5', '2', 0, '4', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(665, '20170069', 1, 1, '5', '2', 0, '5', '31-07-2018', '1', '31-07-2018 12:03:05', ''),
(666, '20170072', 1, 1, '5', '2', 0, '6', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(667, '20170174', 1, 1, '5', '2', 0, '7', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(668, '20170070', 1, 1, '5', '2', 0, '8', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(669, '20170071', 1, 1, '5', '2', 0, '9', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(670, '20170064', 1, 1, '5', '2', 0, '10', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(671, '20170063', 1, 1, '5', '2', 0, '11', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(672, '20170068', 1, 1, '5', '2', 0, '12', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(673, '20170175', 1, 1, '5', '2', 0, '13', '31-07-2018', '2', '31-07-2018 12:03:06', ''),
(674, '20170176', 1, 1, '5', '2', 0, '14', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(675, '20170067', 1, 1, '5', '2', 0, '15', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(676, '  20170178', 1, 1, '5', '2', 0, '16', '31-07-2018', '1', '31-07-2018 12:03:06', ''),
(677, '20170336', 1, 1, '5', '2', 0, '17', '31-07-2018', '1', '31-07-2018 12:03:07', ''),
(678, '20170040', 1, 1, '7', '0', 0, '1', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(679, '20170144', 1, 1, '7', '0', 0, '1', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(680, '20170041', 1, 1, '7', '0', 0, '2', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(681, '20170042', 1, 1, '7', '0', 0, '3', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(682, '20170043', 1, 1, '7', '0', 0, '4', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(683, '20170044', 1, 1, '7', '0', 0, '5', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(684, '20170045', 1, 1, '7', '0', 0, '6', '31-07-2018', '2', '31-07-2018 13:41:58', ''),
(685, '20170145', 1, 1, '7', '0', 0, '7', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(686, '20170046', 1, 1, '7', '0', 0, '8', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(687, '20170054', 1, 1, '7', '0', 0, '9', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(688, '20170047', 1, 1, '7', '0', 0, '10', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(689, '1025', 1, 1, '7', '0', 0, '11', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(690, '20170146', 1, 1, '7', '0', 0, '12', '31-07-2018', '2', '31-07-2018 13:41:58', ''),
(691, '20170147', 1, 1, '7', '0', 0, '13', '31-07-2018', '1', '31-07-2018 13:41:58', ''),
(692, '20170279', 1, 1, '6', '0', 0, '1', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(693, '20170126', 1, 1, '6', '0', 0, '2', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(694, '20170127', 1, 1, '6', '0', 0, '4', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(695, '20170128', 1, 1, '6', '0', 0, '5', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(696, '20170130', 1, 1, '6', '0', 0, '6', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(697, '20170129', 1, 1, '6', '0', 0, '6', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(698, '20170131', 1, 1, '6', '0', 0, '7', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(699, '20170132', 1, 1, '6', '0', 0, '8', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(700, '20170052', 1, 1, '6', '0', 0, '9', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(701, '20170133', 1, 1, '6', '0', 0, '10', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(702, '20170134', 1, 1, '6', '0', 0, '11', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(703, '20170135', 1, 1, '6', '0', 0, '12', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(704, '20170136', 1, 1, '6', '0', 0, '13', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(705, '20170137', 1, 1, '6', '0', 0, '14', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(706, '20170139', 1, 1, '6', '0', 0, '15', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(707, '20170138', 1, 1, '6', '0', 0, '16', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(708, '20170053', 1, 1, '6', '0', 0, '17', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(709, '20170141', 1, 1, '6', '0', 0, '18', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(710, '20170142', 1, 1, '6', '0', 0, '19', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(711, '20170143', 1, 1, '6', '0', 0, '20', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(712, '20170276', 1, 1, '6', '0', 0, '21', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(713, '20170304', 1, 1, '6', '0', 0, '22', '31-07-2018', '1', '31-07-2018 13:52:54', ''),
(714, '20170003', 1, 1, '8', '0', 0, '1', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(715, '20170004', 1, 1, '8', '0', 0, '2', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(716, '20170014', 1, 1, '8', '0', 0, '3', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(717, '20170006', 1, 1, '8', '0', 0, '4', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(718, '20170005', 1, 1, '8', '0', 0, '5', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(719, '20170007', 1, 1, '8', '0', 0, '6', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(720, '20170148', 1, 1, '8', '0', 0, '7', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(721, '20170009', 1, 1, '8', '0', 0, '8', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(722, '20170008', 1, 1, '8', '0', 0, '9', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(723, '20170016', 1, 1, '8', '0', 0, '10', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(724, '20170010', 1, 1, '8', '0', 0, '11', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(725, '20170015', 1, 1, '8', '0', 0, '12', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(726, '20170011', 1, 1, '8', '0', 0, '13', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(727, '20170013', 1, 1, '8', '0', 0, '14', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(728, '20170012', 1, 1, '8', '0', 0, '15', '31-07-2018', '1', '31-07-2018 13:54:29', ''),
(729, '1026', 1, 1, '8', '0', 0, '16', '31-07-2018', '2', '31-07-2018 13:54:29', ''),
(730, '20170091', 1, 1, '4', '1', 0, '1', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(731, '20170179', 1, 1, '4', '1', 0, '2', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(732, '20170180', 1, 1, '4', '1', 0, '3', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(733, '20170181', 1, 1, '4', '1', 0, '4', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(734, '20170182', 1, 1, '4', '1', 0, '4', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(735, '20170183', 1, 1, '4', '1', 0, '5', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(736, '20170184', 1, 1, '4', '1', 0, '6', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(737, '20170185', 1, 1, '4', '1', 0, '7', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(738, '20170096', 1, 1, '4', '1', 0, '8', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(739, '20170186', 1, 1, '4', '1', 0, '9', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(740, '20170092', 1, 1, '4', '1', 0, '10', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:03'),
(741, '20170097', 1, 1, '4', '1', 0, '12', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:04'),
(742, '20170188', 1, 1, '4', '1', 0, '13', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:04'),
(743, '20170094', 1, 1, '4', '1', 0, '14', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:04'),
(744, '20170095', 1, 1, '4', '1', 0, '15', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:04'),
(745, '20170189', 1, 1, '4', '1', 0, '16', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:04'),
(746, '20170190', 1, 1, '4', '1', 0, '17', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:04'),
(747, '20170203', 1, 1, '4', '1', 0, '18', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:04'),
(748, '20170275', 1, 1, '4', '1', 0, '19', '31-07-2018', '1', '31-07-2018 13:57:42', '01-08-2018 17:22:04'),
(749, '20170088', 1, 1, '4', '2', 0, '1', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(750, '20170087', 1, 1, '4', '2', 0, '1', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(751, '20170084', 1, 1, '4', '2', 0, '2', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(752, '20170085', 1, 1, '4', '2', 0, '3', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(753, '20170086', 1, 1, '4', '2', 0, '4', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(754, '20170191', 1, 1, '4', '2', 0, '5', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(755, '20170082', 1, 1, '4', '2', 0, '6', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(756, '20170089', 1, 1, '4', '2', 0, '7', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(757, '20170192', 1, 1, '4', '2', 0, '8', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(758, '20170081', 1, 1, '4', '2', 0, '9', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(759, '20170194', 1, 1, '4', '2', 0, '10', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(760, '20170195', 1, 1, '4', '2', 0, '11', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(761, '20170100', 1, 1, '4', '2', 0, '12', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(762, '20170099', 1, 1, '4', '2', 0, '13', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(763, '20170196', 1, 1, '4', '2', 0, '14', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(764, '20170198', 1, 1, '4', '2', 0, '15', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(765, '20170083', 1, 1, '4', '2', 0, '16', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(766, '1018', 1, 1, '4', '2', 0, '17', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(767, '20170199', 1, 1, '4', '2', 0, '18', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:04'),
(768, '20170201', 1, 1, '4', '2', 0, '19', '31-07-2018', '1', '31-07-2018 13:59:16', '01-08-2018 17:22:05'),
(769, '20170091', 1, 1, '4', '1', 0, '1', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(770, '20170179', 1, 1, '4', '1', 0, '2', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(771, '20170180', 1, 1, '4', '1', 0, '3', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(772, '20170181', 1, 1, '4', '1', 0, '4', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(773, '20170182', 1, 1, '4', '1', 0, '4', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(774, '20170183', 1, 1, '4', '1', 0, '5', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(775, '20170184', 1, 1, '4', '1', 0, '6', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(776, '20170185', 1, 1, '4', '1', 0, '7', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(777, '20170096', 1, 1, '4', '1', 0, '8', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(778, '20170186', 1, 1, '4', '1', 0, '9', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(779, '20170092', 1, 1, '4', '1', 0, '10', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:03'),
(780, '20170097', 1, 1, '4', '1', 0, '12', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(781, '20170188', 1, 1, '4', '1', 0, '13', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(782, '20170094', 1, 1, '4', '1', 0, '14', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(783, '20170095', 1, 1, '4', '1', 0, '15', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(784, '20170189', 1, 1, '4', '1', 0, '16', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(785, '20170190', 1, 1, '4', '1', 0, '17', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(786, '20170203', 1, 1, '4', '1', 0, '18', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(787, '20170275', 1, 1, '4', '1', 0, '19', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(788, '20170088', 1, 1, '4', '2', 0, '1', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(789, '20170087', 1, 1, '4', '2', 0, '1', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(790, '20170084', 1, 1, '4', '2', 0, '2', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(791, '20170085', 1, 1, '4', '2', 0, '3', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(792, '20170086', 1, 1, '4', '2', 0, '4', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(793, '20170191', 1, 1, '4', '2', 0, '5', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(794, '20170082', 1, 1, '4', '2', 0, '6', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(795, '20170089', 1, 1, '4', '2', 0, '7', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(796, '20170192', 1, 1, '4', '2', 0, '8', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(797, '20170081', 1, 1, '4', '2', 0, '9', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(798, '20170194', 1, 1, '4', '2', 0, '10', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(799, '20170195', 1, 1, '4', '2', 0, '11', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(800, '20170100', 1, 1, '4', '2', 0, '12', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(801, '20170099', 1, 1, '4', '2', 0, '13', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(802, '20170196', 1, 1, '4', '2', 0, '14', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(803, '20170198', 1, 1, '4', '2', 0, '15', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(804, '20170083', 1, 1, '4', '2', 0, '16', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(805, '1018', 1, 1, '4', '2', 0, '17', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(806, '20170199', 1, 1, '4', '2', 0, '18', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:04'),
(807, '20170201', 1, 1, '4', '2', 0, '19', '01-08-2018', '1', '01-08-2018 17:14:47', '01-08-2018 17:22:05'),
(808, '20170164', 1, 1, '5', '1', 0, '1', '01-08-2018', '1', '01-08-2018 17:22:16', ''),
(809, '20170079', 1, 1, '5', '1', 0, '2', '01-08-2018', '1', '01-08-2018 17:22:16', ''),
(810, '20170080', 1, 1, '5', '1', 0, '3', '01-08-2018', '1', '01-08-2018 17:22:16', ''),
(811, '20170074', 1, 1, '5', '1', 0, '4', '01-08-2018', '1', '01-08-2018 17:22:16', ''),
(812, '20170076', 1, 1, '5', '1', 0, '5', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(813, '20170077', 1, 1, '5', '1', 0, '6', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(814, '20170075', 1, 1, '5', '1', 0, '7', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(815, '20170078', 1, 1, '5', '1', 0, '8', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(816, '20170168', 1, 1, '5', '1', 0, '9', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(817, '20170165', 1, 1, '5', '1', 0, '10', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(818, '20170169', 1, 1, '5', '1', 0, '11', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(819, '20170166', 1, 1, '5', '1', 0, '12', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(820, '20170073', 1, 1, '5', '1', 0, '13', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(821, '20170167', 1, 1, '5', '1', 0, '14', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(822, '20170170', 1, 1, '5', '1', 0, '15', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(823, '20170268', 1, 1, '5', '1', 0, '16', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(824, '20170171', 1, 1, '5', '2', 0, '1', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(825, '20170172', 1, 1, '5', '2', 0, '2', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(826, '20170065', 1, 1, '5', '2', 0, '3', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(827, '20170173', 1, 1, '5', '2', 0, '3', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(828, '20170061', 1, 1, '5', '2', 0, '4', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(829, '20170069', 1, 1, '5', '2', 0, '5', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(830, '20170072', 1, 1, '5', '2', 0, '6', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(831, '20170174', 1, 1, '5', '2', 0, '7', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(832, '20170070', 1, 1, '5', '2', 0, '8', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(833, '20170071', 1, 1, '5', '2', 0, '9', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(834, '20170064', 1, 1, '5', '2', 0, '10', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(835, '20170063', 1, 1, '5', '2', 0, '11', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(836, '20170068', 1, 1, '5', '2', 0, '12', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(837, '20170175', 1, 1, '5', '2', 0, '13', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(838, '20170176', 1, 1, '5', '2', 0, '14', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(839, '20170067', 1, 1, '5', '2', 0, '15', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(840, '  20170178', 1, 1, '5', '2', 0, '16', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(841, '20170336', 1, 1, '5', '2', 0, '17', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(842, '20170338', 1, 1, '5', '1', 0, '17', '01-08-2018', '1', '01-08-2018 17:22:17', ''),
(843, '20170279', 1, 1, '6', '0', 0, '1', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(844, '20170126', 1, 1, '6', '0', 0, '2', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(845, '20170127', 1, 1, '6', '0', 0, '4', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(846, '20170128', 1, 1, '6', '0', 0, '5', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(847, '20170130', 1, 1, '6', '0', 0, '6', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(848, '20170129', 1, 1, '6', '0', 0, '6', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(849, '20170131', 1, 1, '6', '0', 0, '7', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(850, '20170132', 1, 1, '6', '0', 0, '8', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(851, '20170052', 1, 1, '6', '0', 0, '9', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(852, '20170133', 1, 1, '6', '0', 0, '10', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(853, '20170134', 1, 1, '6', '0', 0, '11', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(854, '20170135', 1, 1, '6', '0', 0, '12', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(855, '20170136', 1, 1, '6', '0', 0, '13', '01-08-2018', '1', '01-08-2018 17:23:17', ''),
(856, '20170137', 1, 1, '6', '0', 0, '14', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(857, '20170139', 1, 1, '6', '0', 0, '15', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(858, '20170138', 1, 1, '6', '0', 0, '16', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(859, '20170053', 1, 1, '6', '0', 0, '17', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(860, '20170141', 1, 1, '6', '0', 0, '18', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(861, '20170142', 1, 1, '6', '0', 0, '19', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(862, '20170143', 1, 1, '6', '0', 0, '20', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(863, '20170276', 1, 1, '6', '0', 0, '21', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(864, '20170304', 1, 1, '6', '0', 0, '22', '01-08-2018', '1', '01-08-2018 17:23:18', ''),
(865, '20170040', 1, 1, '7', '0', 0, '1', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(866, '20170144', 1, 1, '7', '0', 0, '1', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(867, '20170041', 1, 1, '7', '0', 0, '2', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(868, '20170042', 1, 1, '7', '0', 0, '3', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(869, '20170043', 1, 1, '7', '0', 0, '4', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(870, '20170044', 1, 1, '7', '0', 0, '5', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(871, '20170045', 1, 1, '7', '0', 0, '6', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(872, '20170145', 1, 1, '7', '0', 0, '7', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(873, '20170046', 1, 1, '7', '0', 0, '8', '01-08-2018', '1', '01-08-2018 17:23:49', ''),
(874, '20170054', 1, 1, '7', '0', 0, '9', '01-08-2018', '1', '01-08-2018 17:23:50', ''),
(875, '20170047', 1, 1, '7', '0', 0, '10', '01-08-2018', '1', '01-08-2018 17:23:50', ''),
(876, '1025', 1, 1, '7', '0', 0, '11', '01-08-2018', '1', '01-08-2018 17:23:50', ''),
(877, '20170146', 1, 1, '7', '0', 0, '12', '01-08-2018', '1', '01-08-2018 17:23:50', ''),
(878, '20170147', 1, 1, '7', '0', 0, '13', '01-08-2018', '1', '01-08-2018 17:23:50', ''),
(879, '20170091', 1, 1, '4', '1', 0, '1', '02-08-2018', '1', '02-08-2018 16:10:55', ''),
(880, '20170179', 1, 1, '4', '1', 0, '2', '02-08-2018', '1', '02-08-2018 16:10:55', ''),
(881, '20170180', 1, 1, '4', '1', 0, '3', '02-08-2018', '1', '02-08-2018 16:10:55', ''),
(882, '20170181', 1, 1, '4', '1', 0, '4', '02-08-2018', '1', '02-08-2018 16:10:55', ''),
(883, '20170182', 1, 1, '4', '1', 0, '4', '02-08-2018', '1', '02-08-2018 16:10:55', ''),
(884, '20170183', 1, 1, '4', '1', 0, '5', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(885, '20170184', 1, 1, '4', '1', 0, '6', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(886, '20170185', 1, 1, '4', '1', 0, '7', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(887, '20170096', 1, 1, '4', '1', 0, '8', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(888, '20170186', 1, 1, '4', '1', 0, '9', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(889, '20170092', 1, 1, '4', '1', 0, '10', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(890, '20170097', 1, 1, '4', '1', 0, '12', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(891, '20170188', 1, 1, '4', '1', 0, '13', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(892, '20170094', 1, 1, '4', '1', 0, '14', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(893, '20170095', 1, 1, '4', '1', 0, '15', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(894, '20170189', 1, 1, '4', '1', 0, '16', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(895, '20170190', 1, 1, '4', '1', 0, '17', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(896, '20170203', 1, 1, '4', '1', 0, '18', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(897, '20170275', 1, 1, '4', '1', 0, '19', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(898, '20170088', 1, 1, '4', '2', 0, '1', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(899, '20170087', 1, 1, '4', '2', 0, '1', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(900, '20170084', 1, 1, '4', '2', 0, '2', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(901, '20170085', 1, 1, '4', '2', 0, '3', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(902, '20170086', 1, 1, '4', '2', 0, '4', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(903, '20170191', 1, 1, '4', '2', 0, '5', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(904, '20170082', 1, 1, '4', '2', 0, '6', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(905, '20170089', 1, 1, '4', '2', 0, '7', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(906, '20170192', 1, 1, '4', '2', 0, '8', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(907, '20170081', 1, 1, '4', '2', 0, '9', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(908, '20170194', 1, 1, '4', '2', 0, '10', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(909, '20170195', 1, 1, '4', '2', 0, '11', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(910, '20170100', 1, 1, '4', '2', 0, '12', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(911, '20170099', 1, 1, '4', '2', 0, '13', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(912, '20170196', 1, 1, '4', '2', 0, '14', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(913, '20170198', 1, 1, '4', '2', 0, '15', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(914, '20170083', 1, 1, '4', '2', 0, '16', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(915, '1018', 1, 1, '4', '2', 0, '17', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(916, '20170199', 1, 1, '4', '2', 0, '18', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(917, '20170201', 1, 1, '4', '2', 0, '19', '02-08-2018', '1', '02-08-2018 16:10:56', ''),
(918, '20170164', 1, 1, '5', '1', 0, '1', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(919, '20170079', 1, 1, '5', '1', 0, '2', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(920, '20170080', 1, 1, '5', '1', 0, '3', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(921, '20170074', 1, 1, '5', '1', 0, '4', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(922, '20170076', 1, 1, '5', '1', 0, '5', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(923, '20170077', 1, 1, '5', '1', 0, '6', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(924, '20170075', 1, 1, '5', '1', 0, '7', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(925, '20170078', 1, 1, '5', '1', 0, '8', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(926, '20170168', 1, 1, '5', '1', 0, '9', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(927, '20170165', 1, 1, '5', '1', 0, '10', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(928, '20170169', 1, 1, '5', '1', 0, '11', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(929, '20170166', 1, 1, '5', '1', 0, '12', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(930, '20170073', 1, 1, '5', '1', 0, '13', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(931, '20170167', 1, 1, '5', '1', 0, '14', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(932, '20170170', 1, 1, '5', '1', 0, '15', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(933, '20170268', 1, 1, '5', '1', 0, '16', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(934, '20170171', 1, 1, '5', '2', 0, '1', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(935, '20170172', 1, 1, '5', '2', 0, '2', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(936, '20170065', 1, 1, '5', '2', 0, '3', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(937, '20170173', 1, 1, '5', '2', 0, '3', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(938, '20170061', 1, 1, '5', '2', 0, '4', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(939, '20170069', 1, 1, '5', '2', 0, '5', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(940, '20170072', 1, 1, '5', '2', 0, '6', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(941, '20170174', 1, 1, '5', '2', 0, '7', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(942, '20170070', 1, 1, '5', '2', 0, '8', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(943, '20170071', 1, 1, '5', '2', 0, '9', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(944, '20170064', 1, 1, '5', '2', 0, '10', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(945, '20170063', 1, 1, '5', '2', 0, '11', '02-08-2018', '1', '02-08-2018 16:11:09', ''),
(946, '20170068', 1, 1, '5', '2', 0, '12', '02-08-2018', '1', '02-08-2018 16:11:10', ''),
(947, '20170175', 1, 1, '5', '2', 0, '13', '02-08-2018', '1', '02-08-2018 16:11:10', ''),
(948, '20170176', 1, 1, '5', '2', 0, '14', '02-08-2018', '1', '02-08-2018 16:11:10', ''),
(949, '20170067', 1, 1, '5', '2', 0, '15', '02-08-2018', '1', '02-08-2018 16:11:10', ''),
(950, '  20170178', 1, 1, '5', '2', 0, '16', '02-08-2018', '1', '02-08-2018 16:11:10', ''),
(951, '20170336', 1, 1, '5', '2', 0, '17', '02-08-2018', '1', '02-08-2018 16:11:10', ''),
(952, '20170338', 1, 1, '5', '1', 0, '17', '02-08-2018', '1', '02-08-2018 16:11:10', ''),
(953, '20170279', 1, 1, '6', '0', 0, '1', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(954, '20170126', 1, 1, '6', '0', 0, '2', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(955, '20170127', 1, 1, '6', '0', 0, '4', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(956, '20170128', 1, 1, '6', '0', 0, '5', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(957, '20170130', 1, 1, '6', '0', 0, '6', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(958, '20170129', 1, 1, '6', '0', 0, '6', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(959, '20170131', 1, 1, '6', '0', 0, '7', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(960, '20170132', 1, 1, '6', '0', 0, '8', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(961, '20170052', 1, 1, '6', '0', 0, '9', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(962, '20170133', 1, 1, '6', '0', 0, '10', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(963, '20170134', 1, 1, '6', '0', 0, '11', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(964, '20170135', 1, 1, '6', '0', 0, '12', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(965, '20170136', 1, 1, '6', '0', 0, '13', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(966, '20170137', 1, 1, '6', '0', 0, '14', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(967, '20170139', 1, 1, '6', '0', 0, '15', '02-08-2018', '1', '02-08-2018 16:11:24', ''),
(968, '20170138', 1, 1, '6', '0', 0, '16', '02-08-2018', '1', '02-08-2018 16:11:25', ''),
(969, '20170053', 1, 1, '6', '0', 0, '17', '02-08-2018', '1', '02-08-2018 16:11:25', ''),
(970, '20170141', 1, 1, '6', '0', 0, '18', '02-08-2018', '1', '02-08-2018 16:11:25', ''),
(971, '20170142', 1, 1, '6', '0', 0, '19', '02-08-2018', '1', '02-08-2018 16:11:25', ''),
(972, '20170143', 1, 1, '6', '0', 0, '20', '02-08-2018', '1', '02-08-2018 16:11:25', ''),
(973, '20170276', 1, 1, '6', '0', 0, '21', '02-08-2018', '1', '02-08-2018 16:11:25', ''),
(974, '20170304', 1, 1, '6', '0', 0, '22', '02-08-2018', '1', '02-08-2018 16:11:25', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_atten_summary`
--

CREATE TABLE `tbl_student_atten_summary` (
  `Stu_atten_Sum_ID` int(11) NOT NULL,
  `Stu_atten_Sum_Stu_ID` int(11) NOT NULL,
  `Stu_atten_Sum_Stu_Roll` int(3) NOT NULL,
  `Stu_atten_Sum_Stu_Class` int(11) NOT NULL,
  `Stu_atten_Sum_Section_ID` int(3) NOT NULL,
  `Stu_atten_Sum_Shift_ID` int(3) NOT NULL,
  `Stu_atten_Sum_Medium_ID` int(5) NOT NULL,
  `Stu_atten_Sum_Group_ID` int(3) NOT NULL,
  `Stu_atten_Sum_MonthName` varchar(32) NOT NULL,
  `Stu_atten_Sum_Date01` int(32) NOT NULL,
  `Stu_atten_Sum_Date02` int(3) NOT NULL,
  `Stu_atten_Sum_Date03` int(3) NOT NULL,
  `Stu_atten_Sum_Date04` int(3) NOT NULL,
  `Stu_atten_Sum_Date05` int(3) NOT NULL,
  `Stu_atten_Sum_Date06` int(3) NOT NULL,
  `Stu_atten_Sum_Date07` int(3) NOT NULL,
  `Stu_atten_Sum_Date08` int(3) NOT NULL,
  `Stu_atten_Sum_Date09` int(3) NOT NULL,
  `Stu_atten_Sum_Date10` int(3) NOT NULL,
  `Stu_atten_Sum_Date11` int(3) NOT NULL,
  `Stu_atten_Sum_Date12` int(3) NOT NULL,
  `Stu_atten_Sum_Date13` int(3) NOT NULL,
  `Stu_atten_Sum_Date14` int(3) NOT NULL,
  `Stu_atten_Sum_Date15` int(3) NOT NULL,
  `Stu_atten_Sum_Date16` int(3) NOT NULL,
  `Stu_atten_Sum_Date17` int(3) NOT NULL,
  `Stu_atten_Sum_Date18` int(3) NOT NULL,
  `Stu_atten_Sum_Date19` int(3) NOT NULL,
  `Stu_atten_Sum_Date20` int(3) NOT NULL,
  `Stu_atten_Sum_Date21` int(3) NOT NULL,
  `Stu_atten_Sum_Date22` int(3) NOT NULL,
  `Stu_atten_Sum_Date23` int(3) NOT NULL,
  `Stu_atten_Sum_Date24` int(3) NOT NULL,
  `Stu_atten_Sum_Date25` int(3) NOT NULL,
  `Stu_atten_Sum_Date26` int(3) NOT NULL,
  `Stu_atten_Sum_Date27` int(3) NOT NULL,
  `Stu_atten_Sum_Date28` int(3) NOT NULL,
  `Stu_atten_Sum_Date29` int(3) NOT NULL,
  `Stu_atten_Sum_Date30` int(3) NOT NULL,
  `Stu_atten_Sum_Date31` int(3) NOT NULL,
  `Stu_atten_Sum_Created` varchar(32) NOT NULL,
  `Stu_atten_Sum_YearName` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_atten_summary`
--

INSERT INTO `tbl_student_atten_summary` (`Stu_atten_Sum_ID`, `Stu_atten_Sum_Stu_ID`, `Stu_atten_Sum_Stu_Roll`, `Stu_atten_Sum_Stu_Class`, `Stu_atten_Sum_Section_ID`, `Stu_atten_Sum_Shift_ID`, `Stu_atten_Sum_Medium_ID`, `Stu_atten_Sum_Group_ID`, `Stu_atten_Sum_MonthName`, `Stu_atten_Sum_Date01`, `Stu_atten_Sum_Date02`, `Stu_atten_Sum_Date03`, `Stu_atten_Sum_Date04`, `Stu_atten_Sum_Date05`, `Stu_atten_Sum_Date06`, `Stu_atten_Sum_Date07`, `Stu_atten_Sum_Date08`, `Stu_atten_Sum_Date09`, `Stu_atten_Sum_Date10`, `Stu_atten_Sum_Date11`, `Stu_atten_Sum_Date12`, `Stu_atten_Sum_Date13`, `Stu_atten_Sum_Date14`, `Stu_atten_Sum_Date15`, `Stu_atten_Sum_Date16`, `Stu_atten_Sum_Date17`, `Stu_atten_Sum_Date18`, `Stu_atten_Sum_Date19`, `Stu_atten_Sum_Date20`, `Stu_atten_Sum_Date21`, `Stu_atten_Sum_Date22`, `Stu_atten_Sum_Date23`, `Stu_atten_Sum_Date24`, `Stu_atten_Sum_Date25`, `Stu_atten_Sum_Date26`, `Stu_atten_Sum_Date27`, `Stu_atten_Sum_Date28`, `Stu_atten_Sum_Date29`, `Stu_atten_Sum_Date30`, `Stu_atten_Sum_Date31`, `Stu_atten_Sum_Created`, `Stu_atten_Sum_YearName`) VALUES
(1, 20170002, 1, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:00:59', '2018'),
(2, 20170150, 2, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:00:59', '2018'),
(3, 20170151, 3, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:00:59', '2018'),
(4, 20170152, 4, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:00:59', '2018'),
(5, 20170153, 5, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:00:59', '2018'),
(6, 20170154, 6, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:00:59', '2018'),
(7, 20170155, 7, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 2, '31-07-2018 13:01:00', '2018'),
(8, 20170337, 8, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:01:00', '2018'),
(9, 20170157, 9, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:01:00', '2018'),
(10, 20170158, 10, 9, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:01:00', '2018'),
(11, 20170003, 1, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, '31-07-2018 13:12:16', '2018'),
(12, 20170004, 2, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(13, 20170014, 3, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, 1, '31-07-2018 13:12:16', '2018'),
(14, 20170006, 4, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(15, 20170005, 5, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(16, 20170007, 6, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(17, 20170148, 7, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(18, 20170009, 8, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(19, 20170008, 9, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(20, 20170016, 10, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(21, 20170010, 11, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(22, 20170015, 12, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(23, 20170011, 13, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(24, 20170013, 14, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(25, 20170012, 15, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(26, 1026, 16, 8, 0, 1, 1, 0, '07', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, '31-07-2018 13:12:16', '2018'),
(27, 20170164, 1, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:06', '2018'),
(28, 20170079, 2, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:06', '2018'),
(29, 20170080, 3, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:06', '2018'),
(30, 20170074, 4, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:06', '2018'),
(31, 20170076, 5, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:06', '2018'),
(32, 20170077, 6, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:06', '2018'),
(33, 20170075, 7, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:06', '2018'),
(34, 20170078, 8, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:06', '2018'),
(35, 20170168, 9, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(36, 20170165, 10, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(37, 20170169, 11, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(38, 20170166, 12, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(39, 20170073, 13, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(40, 20170167, 14, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(41, 20170170, 15, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(42, 20170268, 16, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(43, 20170171, 1, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(44, 20170172, 2, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(45, 20170065, 3, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(46, 20170173, 3, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(47, 20170061, 4, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(48, 20170069, 5, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(49, 20170072, 6, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(50, 20170174, 7, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(51, 20170070, 8, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(52, 20170071, 9, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(53, 20170064, 10, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(54, 20170063, 11, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(55, 20170068, 12, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(56, 20170175, 13, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(57, 20170176, 14, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(58, 20170067, 15, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(59, 20170178, 16, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(60, 20170336, 17, 5, 2, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(61, 20170338, 17, 5, 1, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:07', '2018'),
(62, 20170279, 1, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(63, 20170126, 2, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(64, 20170127, 4, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(65, 20170128, 5, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(66, 20170130, 6, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(67, 20170129, 6, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(68, 20170131, 7, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(69, 20170132, 8, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(70, 20170052, 9, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(71, 20170133, 10, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(72, 20170134, 11, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(73, 20170135, 12, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(74, 20170136, 13, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(75, 20170137, 14, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(76, 20170139, 15, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:18', '2018'),
(77, 20170138, 16, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:19', '2018'),
(78, 20170053, 17, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:19', '2018'),
(79, 20170141, 18, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:19', '2018'),
(80, 20170142, 19, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:19', '2018'),
(81, 20170143, 20, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:19', '2018'),
(82, 20170276, 21, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:19', '2018'),
(83, 20170304, 22, 6, 0, 1, 1, 0, '08', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:19', '2018'),
(84, 20170040, 1, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(85, 20170144, 1, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(86, 20170041, 2, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(87, 20170042, 3, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(88, 20170043, 4, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(89, 20170044, 5, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(90, 20170045, 6, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(91, 20170145, 7, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(92, 20170046, 8, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(93, 20170054, 9, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(94, 20170047, 10, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(95, 1025, 11, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(96, 20170146, 12, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(97, 20170147, 13, 7, 0, 1, 1, 0, '08', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '01-08-2018 17:23:50', '2018'),
(98, 20170091, 1, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(99, 20170179, 2, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(100, 20170180, 3, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(101, 20170181, 4, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(102, 20170182, 4, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(103, 20170183, 5, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(104, 20170184, 6, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(105, 20170185, 7, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(106, 20170096, 8, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(107, 20170186, 9, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(108, 20170092, 10, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(109, 20170097, 12, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(110, 20170188, 13, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(111, 20170094, 14, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(112, 20170095, 15, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(113, 20170189, 16, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(114, 20170190, 17, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(115, 20170203, 18, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(116, 20170275, 19, 4, 1, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(117, 20170088, 1, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(118, 20170087, 1, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(119, 20170084, 2, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(120, 20170085, 3, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(121, 20170086, 4, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(122, 20170191, 5, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(123, 20170082, 6, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(124, 20170089, 7, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(125, 20170192, 8, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(126, 20170081, 9, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(127, 20170194, 10, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(128, 20170195, 11, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(129, 20170100, 12, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(130, 20170099, 13, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(131, 20170196, 14, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(132, 20170198, 15, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(133, 20170083, 16, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(134, 1018, 17, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(135, 20170199, 18, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018'),
(136, 20170201, 19, 4, 2, 1, 1, 0, '08', 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '02-08-2018 16:10:57', '2018');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_invoice`
--

CREATE TABLE `tbl_student_invoice` (
  `Std_Invoicve_ID` int(11) NOT NULL,
  `St_Student_ID` int(11) NOT NULL,
  `St_Collect_Amount` varchar(20) NOT NULL,
  `St_Invoice_number` varchar(20) NOT NULL,
  `St_Invoice_Moth` varchar(255) NOT NULL,
  `St_Invoice_type_ID` varchar(20) NOT NULL,
  `Invoice_Class_ID` int(11) NOT NULL,
  `Invoice_section_ID` int(11) NOT NULL,
  `St_Invoice_Amount` varchar(20) NOT NULL,
  `St_invoice_date` varchar(255) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `St_Invoice_Status` tinyint(3) NOT NULL DEFAULT '1',
  `Invoice_Medium_ID` int(5) NOT NULL,
  `Invoice_Shift_ID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_student_invoice`
--

INSERT INTO `tbl_student_invoice` (`Std_Invoicve_ID`, `St_Student_ID`, `St_Collect_Amount`, `St_Invoice_number`, `St_Invoice_Moth`, `St_Invoice_type_ID`, `Invoice_Class_ID`, `Invoice_section_ID`, `St_Invoice_Amount`, `St_invoice_date`, `Created`, `Modified`, `St_Invoice_Status`, `Invoice_Medium_ID`, `Invoice_Shift_ID`) VALUES
(1, 201831698, '100', '87554', '', '1', 1, 0, '1100.00', '19-04-2018', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 2, 0, 0),
(2, 201825763, '0', '87554', '', '1', 1, 0, '1100.00', '19-04-2018', '19-04-2018 15:21:58', '19-04-2018 15:22:25', 1, 0, 0),
(3, 20181676, '0', '87554', '', '1', 1, 0, '1100.00', '19-04-2018', '19-04-2018 15:21:59', '19-04-2018 15:22:26', 1, 0, 0),
(4, 201823196, '0', '87554', '', '1', 1, 0, '1100.00', '19-04-2018', '19-04-2018 15:21:59', '19-04-2018 15:22:26', 1, 0, 0),
(5, 112018, '0', '87554', '', '1', 1, 0, '1100.00', '19-04-2018', '19-04-2018 15:21:59', '19-04-2018 15:22:26', 1, 0, 0),
(6, 112019, '0', '87554', '', '1', 1, 0, '1100.00', '19-04-2018', '19-04-2018 15:21:59', '19-04-2018 15:22:26', 1, 0, 0),
(7, 1001, '2250.00', '123', '1', '1', 1, 1, '2250.00', '10-06-2018', '10-06-2018 11:52:53', '', 2, 0, 0),
(8, 1002, '2250.00', '123', '1', '1', 1, 1, '2250.00', '10-06-2018', '10-06-2018 11:52:53', '', 2, 0, 0),
(9, 1004, '2250.00', '123', '1', '1', 1, 1, '2250.00', '10-06-2018', '10-06-2018 11:52:53', '', 2, 0, 0),
(10, 2007, '2250.00', '123', '1', '1', 1, 1, '2250.00', '10-06-2018', '10-06-2018 11:52:54', '', 2, 0, 0),
(11, 2009, '2250.00', '123', '1', '1', 1, 1, '2250.00', '10-06-2018', '10-06-2018 11:52:54', '', 2, 0, 0),
(12, 2010, '2250.00', '123', '1', '1', 1, 1, '2250.00', '10-06-2018', '10-06-2018 11:52:54', '', 2, 0, 0),
(13, 5002, '1280.00', '54534', '', '3', 5, 0, '1280.00', '12-06-2018', '12-06-2018 11:43:55', '', 2, 0, 0),
(14, 5003, '1280.00', '54534', '', '3', 5, 0, '1280.00', '12-06-2018', '12-06-2018 11:43:55', '', 2, 0, 0),
(15, 5004, '1280.00', '54534', '', '3', 5, 0, '1280.00', '12-06-2018', '12-06-2018 11:43:55', '', 2, 0, 0),
(16, 1001, '3000.00', '0123456', '1', '1', 1, 1, '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2, 1, 1),
(17, 1002, '3000.00', '0123456', '1', '1', 1, 1, '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2, 1, 1),
(18, 1004, '3000.00', '0123456', '1', '1', 1, 1, '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2, 1, 1),
(19, 2007, '3000.00', '0123456', '1', '1', 1, 1, '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2, 1, 1),
(20, 2009, '3000.00', '0123456', '1', '1', 1, 1, '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2, 1, 1),
(21, 2010, '3000.00', '0123456', '1', '1', 1, 1, '3000.00', '12-06-2018', '12-06-2018 13:25:10', '', 2, 1, 1),
(22, 20170018, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2, 1, 1),
(23, 20170019, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2, 1, 1),
(24, 20170248, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2, 1, 1),
(25, 20170330, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2, 1, 1),
(26, 20170030, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2, 1, 1),
(27, 20170028, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:27', '', 2, 1, 1),
(28, 20170039, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(29, 20170037, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(30, 20170022, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(31, 20170032, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(32, 1002, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(33, 20170250, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(34, 20170257, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(35, 20170251, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(36, 20170252, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(37, 20170253, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(38, 1004, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(39, 20170262, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(40, 20170256, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(41, 20170038, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(42, 20170031, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(43, 20170024, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(44, 20170017, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(45, 20170332, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(46, 20170021, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(47, 20170333, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(48, 20170259, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(49, 20170334, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(50, 20170027, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:28', '', 2, 1, 1),
(51, 20170023, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(52, 20170029, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(53, 20170036, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(54, 20170261, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(55, 20170255, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(56, 20170263, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(57, 20170264, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(58, 20170265, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(59, 20170266, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(60, 20170267, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(61, 20170272, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(62, 20170303, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1),
(63, 20170331, '2000.00', '123', '1', '1', 1, 0, '2000.00', '02-04-2018', '01-08-2018 18:58:29', '', 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_marks_input`
--

CREATE TABLE `tbl_stu_marks_input` (
  `Marks_ID` int(5) NOT NULL,
  `Marks_stu_UNQ_ID` int(5) NOT NULL,
  `Marks_stu_name` varchar(55) NOT NULL,
  `Marks_stu_class_ID` int(5) NOT NULL,
  `Marks_stu_section_ID` int(5) NOT NULL,
  `Marks_stu_medium_ID` int(5) NOT NULL,
  `Marks_stu_shift_ID` int(5) NOT NULL,
  `Marks_stu_sub_code_ID` int(5) NOT NULL,
  `Marks_stu_exam_code_ID` int(5) NOT NULL,
  `Marks_stu_group_ID` int(5) NOT NULL,
  `Marks_stu_sub_full_marks` decimal(11,2) NOT NULL,
  `Marks_stu_sub_ct_marks` decimal(11,2) NOT NULL,
  `Marks_stu_sub_mt_marks` decimal(11,2) NOT NULL,
  `Marks_stu_sub_mcq_marks` decimal(11,2) NOT NULL COMMENT 'mcq: Oral marks; ',
  `Marks_stu_sub_cq_marks` decimal(11,2) NOT NULL COMMENT 'cq: Written marks;',
  `Marks_stu_sub_total_marks` decimal(11,2) NOT NULL,
  `Marks_stu_sub_name` varchar(20) NOT NULL,
  `Marks_stu_sub_note` varchar(100) NOT NULL,
  `Marks_stu_craeted` varchar(32) NOT NULL,
  `Marks_stu_modified` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stu_marks_input`
--

INSERT INTO `tbl_stu_marks_input` (`Marks_ID`, `Marks_stu_UNQ_ID`, `Marks_stu_name`, `Marks_stu_class_ID`, `Marks_stu_section_ID`, `Marks_stu_medium_ID`, `Marks_stu_shift_ID`, `Marks_stu_sub_code_ID`, `Marks_stu_exam_code_ID`, `Marks_stu_group_ID`, `Marks_stu_sub_full_marks`, `Marks_stu_sub_ct_marks`, `Marks_stu_sub_mt_marks`, `Marks_stu_sub_mcq_marks`, `Marks_stu_sub_cq_marks`, `Marks_stu_sub_total_marks`, `Marks_stu_sub_name`, `Marks_stu_sub_note`, `Marks_stu_craeted`, `Marks_stu_modified`) VALUES
(1, 20170060, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:27', ''),
(2, 20170056, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '86.00', '86.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:27', ''),
(3, 20170058, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.00', '88.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:27', ''),
(4, 20170159, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:27', ''),
(5, 20170160, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '84.00', '84.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:27', ''),
(6, 20170161, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:28', ''),
(7, 20170057, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:28', ''),
(8, 20170162, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '60.00', '60.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:28', ''),
(9, 20170059, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '55.00', '55.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:28', ''),
(10, 20170163, '', 10, 0, 1, 1, 72, 1, 0, '100.00', '0.00', '0.00', '0.00', '61.00', '61.00', 'Bangla 1st Paper', '', '16-07-2018 17:45:28', ''),
(11, 20170060, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:46', ''),
(12, 20170056, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '41.00', '41.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:46', ''),
(13, 20170058, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:46', ''),
(14, 20170159, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:46', ''),
(15, 20170160, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:46', ''),
(16, 20170161, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:46', ''),
(17, 20170057, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:46', ''),
(18, 20170162, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '36.00', '36.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:46', ''),
(19, 20170059, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '30.00', '30.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:47', ''),
(20, 20170163, '', 10, 0, 1, 1, 73, 1, 0, '50.00', '0.00', '0.00', '0.00', '41.00', '41.00', 'Bangla 2nd Paper', '', '16-07-2018 17:47:47', ''),
(21, 20170060, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'English 1st Paper', '', '16-07-2018 17:49:40', ''),
(22, 20170056, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'English 1st Paper', '', '16-07-2018 17:49:40', ''),
(23, 20170058, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'English 1st Paper', '', '16-07-2018 17:49:40', ''),
(24, 20170159, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'English 1st Paper', '', '16-07-2018 17:49:41', ''),
(25, 20170160, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '76.00', '76.00', 'English 1st Paper', '', '16-07-2018 17:49:41', ''),
(26, 20170161, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'English 1st Paper', '', '16-07-2018 17:49:41', ''),
(27, 20170057, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'English 1st Paper', '', '16-07-2018 17:49:41', ''),
(28, 20170162, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'English 1st Paper', '', '16-07-2018 17:49:41', ''),
(29, 20170059, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'English 1st Paper', '', '16-07-2018 17:49:41', ''),
(30, 20170163, '', 10, 0, 1, 1, 74, 1, 0, '100.00', '0.00', '0.00', '0.00', '82.00', '82.00', 'English 1st Paper', '', '16-07-2018 17:49:41', ''),
(31, 20170060, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'English 2nd Paper', '', '16-07-2018 17:52:25', ''),
(32, 20170056, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(33, 20170058, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(34, 20170159, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(35, 20170160, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(36, 20170161, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(37, 20170057, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.00', '43.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(38, 20170162, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '21.00', '21.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(39, 20170059, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '33.00', '33.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(40, 20170163, '', 10, 0, 1, 1, 75, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'English 2nd Paper', '', '16-07-2018 17:52:26', ''),
(41, 20170060, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(42, 20170056, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.50', '99.50', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(43, 20170058, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.50', '99.50', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(44, 20170159, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(45, 20170160, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.50', '96.50', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(46, 20170161, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.50', '95.50', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(47, 20170057, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(48, 20170162, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '70.00', '70.00', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(49, 20170059, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Mathematics', '', '16-07-2018 17:54:25', ''),
(50, 20170163, '', 10, 0, 1, 1, 76, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'Mathematics', '', '16-07-2018 17:54:26', ''),
(51, 20170060, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '83.00', '83.00', 'Science', '', '16-07-2018 18:24:26', ''),
(52, 20170056, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'Science', '', '16-07-2018 18:24:26', ''),
(53, 20170058, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '83.00', '83.00', 'Science', '', '16-07-2018 18:24:26', ''),
(54, 20170159, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '84.00', '84.00', 'Science', '', '16-07-2018 18:24:26', ''),
(55, 20170160, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '83.00', '83.00', 'Science', '', '16-07-2018 18:24:26', ''),
(56, 20170161, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '65.00', '65.00', 'Science', '', '16-07-2018 18:24:26', ''),
(57, 20170057, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '83.00', '83.00', 'Science', '', '16-07-2018 18:24:26', ''),
(58, 20170162, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Science', '', '16-07-2018 18:24:26', ''),
(59, 20170059, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Science', '', '16-07-2018 18:24:27', ''),
(60, 20170163, '', 10, 0, 1, 1, 77, 1, 0, '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Science', '', '16-07-2018 18:24:27', ''),
(61, 20170060, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '82.00', '82.00', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(62, 20170056, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(63, 20170058, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.50', '96.50', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(64, 20170159, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.50', '90.50', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(65, 20170160, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.00', '88.00', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(66, 20170161, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '77.50', '77.50', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(67, 20170057, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '77.50', '77.50', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(68, 20170162, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '60.50', '60.50', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(69, 20170059, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '54.00', '54.00', 'B & G Science', '', '16-07-2018 18:28:07', ''),
(70, 20170163, '', 10, 0, 1, 1, 78, 1, 0, '100.00', '0.00', '0.00', '0.00', '65.50', '65.50', 'B & G Science', '', '16-07-2018 18:28:08', ''),
(71, 20170060, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '82.00', '82.00', 'Religion', '', '16-07-2018 18:29:31', ''),
(72, 20170056, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'Religion', '', '16-07-2018 18:29:31', ''),
(73, 20170058, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '84.00', '84.00', 'Religion', '', '16-07-2018 18:29:31', ''),
(74, 20170159, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '74.00', '74.00', 'Religion', '', '16-07-2018 18:29:31', ''),
(75, 20170160, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '70.00', '70.00', 'Religion', '', '16-07-2018 18:29:31', ''),
(76, 20170161, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '72.00', '72.00', 'Religion', '', '16-07-2018 18:29:31', ''),
(77, 20170057, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'Religion', '', '16-07-2018 18:29:31', ''),
(78, 20170162, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Religion', '', '16-07-2018 18:29:31', ''),
(79, 20170059, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '61.00', '61.00', 'Religion', '', '16-07-2018 18:29:32', ''),
(80, 20170163, '', 10, 0, 1, 1, 79, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'Religion', '', '16-07-2018 18:29:32', ''),
(81, 20170060, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(82, 20170056, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '89.00', '89.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(83, 20170058, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '85.00', '85.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(84, 20170159, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(85, 20170160, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(86, 20170161, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(87, 20170057, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '78.00', '78.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(88, 20170162, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '55.00', '55.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(89, 20170059, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '71.00', '71.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(90, 20170163, '', 10, 0, 1, 1, 80, 1, 0, '100.00', '0.00', '0.00', '0.00', '71.00', '71.00', 'Agri./H. Science', '', '16-07-2018 18:31:13', ''),
(91, 20170060, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'I.C.T', '', '16-07-2018 18:32:29', ''),
(92, 20170056, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'I.C.T', '', '16-07-2018 18:32:29', ''),
(93, 20170058, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'I.C.T', '', '16-07-2018 18:32:29', ''),
(94, 20170159, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.00', '43.00', 'I.C.T', '', '16-07-2018 18:32:29', ''),
(95, 20170160, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'I.C.T', '', '16-07-2018 18:32:29', ''),
(96, 20170161, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'I.C.T', '', '16-07-2018 18:32:29', ''),
(97, 20170057, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'I.C.T', '', '16-07-2018 18:32:30', ''),
(98, 20170162, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'I.C.T', '', '16-07-2018 18:32:30', ''),
(99, 20170059, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'I.C.T', '', '16-07-2018 18:32:30', ''),
(100, 20170163, '', 10, 0, 1, 1, 81, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'I.C.T', '', '16-07-2018 18:32:30', ''),
(101, 20170002, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(102, 20170150, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '61.00', '61.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(103, 20170151, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '52.00', '52.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(104, 20170152, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(105, 20170153, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(106, 20170154, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '36.00', '36.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(107, 20170155, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(108, 20170337, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(109, 20170157, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(110, 20170158, '', 9, 0, 1, 1, 62, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Bangla 1st Paper', '', '16-07-2018 18:42:25', ''),
(111, 20170002, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:40', ''),
(112, 20170150, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:40', ''),
(113, 20170151, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:40', ''),
(114, 20170152, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '34.00', '34.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:40', ''),
(115, 20170153, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '32.00', '32.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:40', ''),
(116, 20170154, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '19.00', '19.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:40', ''),
(117, 20170155, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '33.00', '33.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:40', ''),
(118, 20170337, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '25.00', '25.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:40', ''),
(119, 20170157, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:41', ''),
(120, 20170158, '', 9, 0, 1, 1, 63, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Bangla 2nd Paper', '', '16-07-2018 18:43:41', ''),
(121, 20170002, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(122, 20170150, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '74.00', '74.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(123, 20170151, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(124, 20170152, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(125, 20170153, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(126, 20170154, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(127, 20170155, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(128, 20170337, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(129, 20170157, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'English 1st Paper', '', '16-07-2018 18:45:06', ''),
(130, 20170158, '', 9, 0, 1, 1, 64, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'English 1st Paper', '', '16-07-2018 18:45:07', ''),
(131, 20170002, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(132, 20170150, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(133, 20170151, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '30.00', '30.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(134, 20170152, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(135, 20170153, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(136, 20170154, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '20.00', '20.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(137, 20170155, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '24.00', '24.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(138, 20170337, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '29.00', '29.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(139, 20170157, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(140, 20170158, '', 9, 0, 1, 1, 65, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'English 2nd Paper', '', '16-07-2018 18:52:28', ''),
(141, 20170002, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(142, 20170150, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '82.00', '82.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(143, 20170151, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.00', '87.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(144, 20170152, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '86.00', '86.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(145, 20170153, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(146, 20170154, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '60.00', '60.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(147, 20170155, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(148, 20170337, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(149, 20170157, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(150, 20170158, '', 9, 0, 1, 1, 66, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'Mathematics', '', '16-07-2018 18:53:44', ''),
(151, 20170002, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'B & G Science', '', '16-07-2018 18:55:00', ''),
(152, 20170150, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'B & G Science', '', '16-07-2018 18:55:00', ''),
(153, 20170151, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'B & G Science', '', '16-07-2018 18:55:00', ''),
(154, 20170152, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'B & G Science', '', '16-07-2018 18:55:00', ''),
(155, 20170153, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '54.00', '54.00', 'B & G Science', '', '16-07-2018 18:55:01', ''),
(156, 20170154, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '32.00', '32.00', 'B & G Science', '', '16-07-2018 18:55:01', ''),
(157, 20170155, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '61.00', '61.00', 'B & G Science', '', '16-07-2018 18:55:01', ''),
(158, 20170337, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'B & G Science', '', '16-07-2018 18:55:01', ''),
(159, 20170157, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'B & G Science', '', '16-07-2018 18:55:01', ''),
(160, 20170158, '', 9, 0, 1, 1, 67, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'B & G Science', '', '16-07-2018 18:55:01', ''),
(161, 20170002, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Science', '', '16-07-2018 18:56:06', ''),
(162, 20170150, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '62.00', '62.00', 'Science', '', '16-07-2018 18:56:06', ''),
(163, 20170151, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '52.00', '52.00', 'Science', '', '16-07-2018 18:56:06', ''),
(164, 20170152, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '58.00', '58.00', 'Science', '', '16-07-2018 18:56:06', ''),
(165, 20170153, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '60.00', '60.00', 'Science', '', '16-07-2018 18:56:06', ''),
(166, 20170154, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'Science', '', '16-07-2018 18:56:06', ''),
(167, 20170155, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '54.00', '54.00', 'Science', '', '16-07-2018 18:56:06', ''),
(168, 20170337, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Science', '', '16-07-2018 18:56:06', ''),
(169, 20170157, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '89.00', '89.00', 'Science', '', '16-07-2018 18:56:06', ''),
(170, 20170158, '', 9, 0, 1, 1, 68, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'Science', '', '16-07-2018 18:56:06', ''),
(171, 20170002, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '84.00', '84.00', 'Religion', '', '16-07-2018 18:57:17', ''),
(172, 20170150, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Religion', '', '16-07-2018 18:57:17', ''),
(173, 20170151, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Religion', '', '16-07-2018 18:57:17', ''),
(174, 20170152, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '55.00', '55.00', 'Religion', '', '16-07-2018 18:57:17', ''),
(175, 20170153, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Religion', '', '16-07-2018 18:57:18', ''),
(176, 20170154, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '51.00', '51.00', 'Religion', '', '16-07-2018 18:57:18', ''),
(177, 20170155, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Religion', '', '16-07-2018 18:57:18', ''),
(178, 20170337, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Religion', '', '16-07-2018 18:57:18', ''),
(179, 20170157, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'Religion', '', '16-07-2018 18:57:18', ''),
(180, 20170158, '', 9, 0, 1, 1, 69, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Religion', '', '16-07-2018 18:57:18', ''),
(181, 20170002, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Agri./H. Science', '', '16-07-2018 18:58:29', ''),
(182, 20170150, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '55.00', '55.00', 'Agri./H. Science', '', '16-07-2018 18:58:29', ''),
(183, 20170151, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '31.00', '31.00', 'Agri./H. Science', '', '16-07-2018 18:58:29', ''),
(184, 20170152, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Agri./H. Science', '', '16-07-2018 18:58:29', ''),
(185, 20170153, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '59.00', '59.00', 'Agri./H. Science', '', '16-07-2018 18:58:29', ''),
(186, 20170154, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Agri./H. Science', '', '16-07-2018 18:58:29', ''),
(187, 20170155, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Agri./H. Science', '', '16-07-2018 18:58:30', ''),
(188, 20170337, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '51.00', '51.00', 'Agri./H. Science', '', '16-07-2018 18:58:30', ''),
(189, 20170157, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '79.00', '79.00', 'Agri./H. Science', '', '16-07-2018 18:58:30', ''),
(190, 20170158, '', 9, 0, 1, 1, 70, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.50', '97.50', 'Agri./H. Science', '', '16-07-2018 18:58:30', ''),
(191, 20170002, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'I.C.T', '', '16-07-2018 19:01:21', ''),
(192, 20170150, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'I.C.T', '', '16-07-2018 19:01:21', ''),
(193, 20170151, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '41.00', '41.00', 'I.C.T', '', '16-07-2018 19:01:21', ''),
(194, 20170152, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'I.C.T', '', '16-07-2018 19:01:21', ''),
(195, 20170153, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'I.C.T', '', '16-07-2018 19:01:21', ''),
(196, 20170154, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '28.00', '28.00', 'I.C.T', '', '16-07-2018 19:01:22', ''),
(197, 20170155, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '27.00', '27.00', 'I.C.T', '', '16-07-2018 19:01:22', ''),
(198, 20170337, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '28.00', '28.00', 'I.C.T', '', '16-07-2018 19:01:22', ''),
(199, 20170157, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'I.C.T', '', '16-07-2018 19:01:22', ''),
(200, 20170158, '', 9, 0, 1, 1, 71, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'I.C.T', '', '16-07-2018 19:01:22', ''),
(201, 20170040, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Bangla', '', '16-07-2018 19:14:09', ''),
(202, 20170144, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Bangla', '', '16-07-2018 19:14:09', ''),
(203, 20170041, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Bangla', '', '16-07-2018 19:14:09', ''),
(204, 20170042, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Bangla', '', '16-07-2018 19:14:09', ''),
(205, 20170043, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Bangla', '', '16-07-2018 19:14:09', ''),
(206, 20170044, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '73.00', '73.00', 'Bangla', '', '16-07-2018 19:14:09', ''),
(207, 20170045, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '85.00', '85.00', 'Bangla', '', '16-07-2018 19:14:09', ''),
(208, 20170145, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '60.50', '60.50', 'Bangla', '', '16-07-2018 19:14:09', ''),
(209, 20170046, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '66.00', '66.00', 'Bangla', '', '16-07-2018 19:14:10', ''),
(210, 20170054, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '62.00', '62.00', 'Bangla', '', '16-07-2018 19:14:10', ''),
(211, 20170047, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '73.00', '73.00', 'Bangla', '', '16-07-2018 19:14:10', ''),
(212, 1025, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '64.50', '64.50', 'Bangla', '', '16-07-2018 19:14:10', ''),
(213, 20170146, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '19.00', '19.00', 'Bangla', '', '16-07-2018 19:14:10', ''),
(214, 20170147, '', 7, 0, 1, 1, 46, 1, 0, '100.00', '0.00', '0.00', '0.00', '29.00', '29.00', 'Bangla', '', '16-07-2018 19:14:10', ''),
(215, 20170040, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(216, 20170144, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(217, 20170041, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(218, 20170042, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(219, 20170043, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.00', '87.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(220, 20170044, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(221, 20170045, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(222, 20170145, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '84.00', '84.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(223, 20170046, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '82.00', '82.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(224, 20170054, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '58.00', '58.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(225, 20170047, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(226, 1025, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(227, 20170146, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '34.00', '34.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(228, 20170147, '', 7, 0, 1, 1, 47, 1, 0, '100.00', '0.00', '0.00', '0.00', '28.00', '28.00', 'Mathematics', '', '16-07-2018 19:16:34', ''),
(229, 20170040, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.50', '99.50', 'English', '', '16-07-2018 19:22:17', ''),
(230, 20170144, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'English', '', '16-07-2018 19:22:17', ''),
(231, 20170041, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.50', '95.50', 'English', '', '16-07-2018 19:22:17', ''),
(232, 20170042, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'English', '', '16-07-2018 19:22:17', ''),
(233, 20170043, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'English', '', '16-07-2018 19:22:17', ''),
(234, 20170044, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.50', '96.50', 'English', '', '16-07-2018 19:22:17', ''),
(235, 20170045, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'English', '', '16-07-2018 19:22:17', ''),
(236, 20170145, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '60.50', '60.50', 'English', '', '16-07-2018 19:22:17', ''),
(237, 20170046, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '72.00', '72.00', 'English', '', '16-07-2018 19:22:17', ''),
(238, 20170054, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '73.00', '73.00', 'English', '', '16-07-2018 19:22:18', ''),
(239, 20170047, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'English', '', '16-07-2018 19:22:18', ''),
(240, 1025, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'English', '', '16-07-2018 19:22:18', ''),
(241, 20170146, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '23.00', '23.00', 'English', '', '16-07-2018 19:22:18', ''),
(242, 20170147, '', 7, 0, 1, 1, 48, 1, 0, '100.00', '0.00', '0.00', '0.00', '60.50', '60.50', 'English', '', '16-07-2018 19:22:18', ''),
(243, 20170040, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '50.00', '50.00', '100.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(244, 20170144, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '50.00', '50.00', '100.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(245, 20170041, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '49.00', '50.00', '99.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(246, 20170042, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '49.00', '50.00', '99.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(247, 20170043, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '41.00', '49.00', '90.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(248, 20170044, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '48.00', '49.00', '97.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(249, 20170045, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '48.00', '49.00', '97.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(250, 20170145, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '41.00', '40.00', '81.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(251, 20170046, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '29.00', '44.00', '73.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(252, 20170054, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '43.00', '38.00', '81.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(253, 20170047, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '50.00', '49.00', '99.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(254, 1025, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '45.00', '43.00', '88.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(255, 20170146, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '31.00', '1.00', '32.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(256, 20170147, '', 7, 0, 1, 1, 49, 1, 0, '100.00', '0.00', '0.00', '48.00', '24.00', '72.00', 'B & G  Science', '', '16-07-2018 19:25:50', ''),
(257, 20170040, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '50.00', '50.00', '100.00', 'Science', '', '16-07-2018 19:35:53', ''),
(258, 20170144, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '50.00', '50.00', '100.00', 'Science', '', '16-07-2018 19:35:53', ''),
(259, 20170041, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '50.00', '50.00', '100.00', 'Science', '', '16-07-2018 19:35:53', ''),
(260, 20170042, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '49.00', '49.75', '98.75', 'Science', '', '16-07-2018 19:35:53', ''),
(261, 20170043, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '46.00', '50.00', '96.00', 'Science', '', '16-07-2018 19:35:53', ''),
(262, 20170044, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '38.00', '29.00', '67.00', 'Science', '', '16-07-2018 19:35:53', ''),
(263, 20170045, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '48.00', '47.00', '95.00', 'Science', '', '16-07-2018 19:35:53', ''),
(264, 20170145, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '49.00', '42.00', '91.00', 'Science', '', '16-07-2018 19:35:53', ''),
(265, 20170046, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '40.00', '14.00', '54.00', 'Science', '', '16-07-2018 19:35:53', ''),
(266, 20170054, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '43.00', '24.00', '67.00', 'Science', '', '16-07-2018 19:35:53', ''),
(267, 20170047, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '48.00', '47.00', '95.00', 'Science', '', '16-07-2018 19:35:53', ''),
(268, 1025, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '49.00', '45.50', '94.50', 'Science', '', '16-07-2018 19:35:53', ''),
(269, 20170146, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '19.00', '0.00', '19.00', 'Science', '', '16-07-2018 19:35:53', ''),
(270, 20170147, '', 7, 0, 1, 1, 50, 1, 0, '100.00', '0.00', '0.00', '45.00', '33.00', '78.00', 'Science', '', '16-07-2018 19:35:53', ''),
(271, 20170040, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '47.00', '50.00', '97.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(272, 20170144, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '46.00', '50.00', '96.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(273, 20170041, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '46.00', '50.00', '96.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(274, 20170042, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '49.00', '50.00', '99.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(275, 20170043, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '48.00', '47.00', '95.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(276, 20170044, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '45.00', '45.00', '90.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(277, 20170045, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '44.00', '37.00', '81.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(278, 20170145, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '47.00', '50.00', '97.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(279, 20170046, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '45.00', '36.00', '81.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(280, 20170054, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '35.00', '29.00', '64.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(281, 20170047, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(282, 1025, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '38.00', '41.00', '79.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(283, 20170146, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '24.00', '0.00', '24.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(284, 20170147, '', 7, 0, 1, 1, 51, 1, 0, '100.00', '0.00', '0.00', '45.00', '28.00', '73.00', 'Religion', '', '16-07-2018 19:39:24', ''),
(285, 20170040, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(286, 20170144, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(287, 20170041, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(288, 20170042, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(289, 20170043, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(290, 20170044, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(291, 20170045, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(292, 20170145, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(293, 20170046, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(294, 20170054, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(295, 20170047, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(296, 1025, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(297, 20170146, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(298, 20170147, '', 7, 0, 1, 1, 53, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Moktab', '', '16-07-2018 19:40:27', ''),
(299, 20170040, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '16-07-2018 19:42:19', ''),
(300, 20170144, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '16-07-2018 19:42:19', ''),
(301, 20170041, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '16-07-2018 19:42:19', ''),
(302, 20170042, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '16-07-2018 19:42:19', ''),
(303, 20170043, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '16-07-2018 19:42:19', ''),
(304, 20170044, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '16-07-2018 19:42:20', ''),
(305, 20170045, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Practical', '', '16-07-2018 19:42:20', ''),
(306, 20170145, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.50', '49.50', 'Practical', '', '16-07-2018 19:42:20', ''),
(307, 20170046, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Practical', '', '16-07-2018 19:42:20', ''),
(308, 20170054, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'Practical', '', '16-07-2018 19:42:20', ''),
(309, 20170047, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Practical', '', '16-07-2018 19:42:20', ''),
(310, 1025, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.50', '45.50', 'Practical', '', '16-07-2018 19:42:20', ''),
(311, 20170146, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Practical', '', '16-07-2018 19:42:20', ''),
(312, 20170147, '', 7, 0, 1, 1, 52, 1, 0, '50.00', '0.00', '0.00', '0.00', '20.00', '20.00', 'Practical', '', '16-07-2018 19:42:20', ''),
(313, 20170164, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Bangla', '', '17-07-2018 15:01:28', ''),
(314, 20170079, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.75', '14.50', '0.00', '74.50', '98.75', 'Bangla', '', '17-07-2018 15:01:28', ''),
(315, 20170080, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.25', '15.00', '0.00', '71.50', '95.75', 'Bangla', '', '17-07-2018 15:01:28', ''),
(316, 20170074, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.50', '14.50', '0.00', '70.50', '94.50', 'Bangla', '', '17-07-2018 15:01:28', ''),
(317, 20170076, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Bangla', '', '17-07-2018 15:01:28', ''),
(318, 20170077, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.50', '13.50', '0.00', '69.00', '92.00', 'Bangla', '', '17-07-2018 15:01:28', ''),
(319, 20170075, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.00', '13.50', '0.00', '67.50', '90.00', 'Bangla', '', '17-07-2018 15:01:28', ''),
(320, 20170078, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '8.50', '0.00', '0.00', '62.00', '70.50', 'Bangla', '', '17-07-2018 15:01:28', ''),
(321, 20170168, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '8.75', '12.00', '0.00', '68.00', '88.75', 'Bangla', '', '17-07-2018 15:01:28', ''),
(322, 20170165, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.00', '12.00', '0.00', '63.50', '84.50', 'Bangla', '', '17-07-2018 15:01:28', ''),
(323, 20170169, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '8.00', '0.00', '0.00', '41.50', '49.50', 'Bangla', '', '17-07-2018 15:01:28', ''),
(324, 20170166, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '3.50', '8.00', '0.00', '11.00', '22.50', 'Bangla', '', '17-07-2018 15:01:28', ''),
(325, 20170073, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.50', '14.00', '0.00', '68.50', '92.00', 'Bangla', '', '17-07-2018 15:01:28', ''),
(326, 20170167, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '8.25', '13.50', '0.00', '57.00', '78.75', 'Bangla', '', '17-07-2018 15:01:28', ''),
(327, 20170170, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.50', '15.00', '0.00', '73.50', '98.00', 'Bangla', '', '17-07-2018 15:01:28', ''),
(328, 20170268, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '9.75', '15.00', '0.00', '74.50', '99.25', 'Bangla', '', '17-07-2018 15:01:29', ''),
(329, 20170171, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(330, 20170172, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '10.00', '14.50', '0.00', '74.50', '99.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(331, 20170065, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.00', '99.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(332, 20170173, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'Bangla', '', '17-07-2018 15:01:29', ''),
(333, 20170061, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.00', '99.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(334, 20170069, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '9.75', '14.59', '0.00', '74.00', '98.34', 'Bangla', '', '17-07-2018 15:01:29', ''),
(335, 20170072, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '7.00', '14.00', '0.00', '72.50', '93.50', 'Bangla', '', '17-07-2018 15:01:29', ''),
(336, 20170174, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '9.50', '13.50', '0.00', '65.50', '88.50', 'Bangla', '', '17-07-2018 15:01:29', ''),
(337, 20170070, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '8.50', '13.50', '0.00', '67.00', '89.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(338, 20170071, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '9.50', '13.50', '0.00', '68.50', '91.50', 'Bangla', '', '17-07-2018 15:01:29', ''),
(339, 20170064, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '8.50', '13.50', '0.00', '70.00', '92.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(340, 20170063, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '9.75', '11.00', '0.00', '73.00', '93.75', 'Bangla', '', '17-07-2018 15:01:29', ''),
(341, 20170068, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(342, 20170175, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '8.75', '8.00', '0.00', '43.50', '60.25', 'Bangla', '', '17-07-2018 15:01:29', ''),
(343, 20170176, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '9.75', '12.50', '0.00', '50.50', '72.75', 'Bangla', '', '17-07-2018 15:01:29', ''),
(344, 20170067, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '9.50', '13.00', '0.00', '64.50', '87.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(345, 20170178, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '10.00', '0.00', '0.00', '74.50', '84.50', 'Bangla', '', '17-07-2018 15:01:29', ''),
(346, 20170336, '', 5, 2, 1, 1, 30, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(347, 20170338, '', 5, 1, 1, 1, 30, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '17-07-2018 15:01:29', ''),
(348, 20170279, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(349, 20170126, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(350, 20170127, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(351, 20170128, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(352, 20170130, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(353, 20170129, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(354, 20170131, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(355, 20170132, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(356, 20170052, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(357, 20170133, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'Bangla', '', '17-07-2018 16:08:19', '');
INSERT INTO `tbl_stu_marks_input` (`Marks_ID`, `Marks_stu_UNQ_ID`, `Marks_stu_name`, `Marks_stu_class_ID`, `Marks_stu_section_ID`, `Marks_stu_medium_ID`, `Marks_stu_shift_ID`, `Marks_stu_sub_code_ID`, `Marks_stu_exam_code_ID`, `Marks_stu_group_ID`, `Marks_stu_sub_full_marks`, `Marks_stu_sub_ct_marks`, `Marks_stu_sub_mt_marks`, `Marks_stu_sub_mcq_marks`, `Marks_stu_sub_cq_marks`, `Marks_stu_sub_total_marks`, `Marks_stu_sub_name`, `Marks_stu_sub_note`, `Marks_stu_craeted`, `Marks_stu_modified`) VALUES
(358, 20170134, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.50', '94.50', 'Bangla', '', '17-07-2018 16:08:19', ''),
(359, 20170135, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '79.00', '79.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(360, 20170136, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '89.00', '89.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(361, 20170137, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '53.00', '53.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(362, 20170139, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(363, 20170138, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.00', '88.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(364, 20170053, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(365, 20170141, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(366, 20170142, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '82.00', '82.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(367, 20170143, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '62.00', '62.00', 'Bangla', '', '17-07-2018 16:08:19', ''),
(368, 20170276, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'Bangla', '', '17-07-2018 16:08:20', ''),
(369, 20170304, '', 6, 0, 1, 1, 38, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '17-07-2018 16:08:20', ''),
(370, 20170279, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Mathematics', '', '17-07-2018 16:14:53', ''),
(371, 20170126, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Mathematics', '', '17-07-2018 16:14:53', ''),
(372, 20170127, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'Mathematics', '', '17-07-2018 16:14:53', ''),
(373, 20170128, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '86.00', '86.00', 'Mathematics', '', '17-07-2018 16:14:53', ''),
(374, 20170130, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Mathematics', '', '17-07-2018 16:14:53', ''),
(375, 20170129, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.50', '88.50', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(376, 20170131, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(377, 20170132, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(378, 20170052, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(379, 20170133, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(380, 20170134, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.00', '88.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(381, 20170135, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(382, 20170136, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '62.00', '62.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(383, 20170137, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '53.00', '53.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(384, 20170139, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.00', '87.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(385, 20170138, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '53.00', '53.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(386, 20170053, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(387, 20170141, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(388, 20170142, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(389, 20170143, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '77.00', '77.00', 'Mathematics', '', '17-07-2018 16:14:54', ''),
(390, 20170276, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '89.50', '89.50', 'Mathematics', '', '17-07-2018 16:14:55', ''),
(391, 20170304, '', 6, 0, 1, 1, 39, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '17-07-2018 16:14:55', ''),
(392, 20170279, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'English', '', '17-07-2018 16:20:42', ''),
(393, 20170126, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'English', '', '17-07-2018 16:20:42', ''),
(394, 20170127, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'English', '', '17-07-2018 16:20:42', ''),
(395, 20170128, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'English', '', '17-07-2018 16:20:42', ''),
(396, 20170130, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '69.00', '69.00', 'English', '', '17-07-2018 16:20:42', ''),
(397, 20170129, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'English', '', '17-07-2018 16:20:42', ''),
(398, 20170131, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.00', '87.00', 'English', '', '17-07-2018 16:20:42', ''),
(399, 20170132, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '17-07-2018 16:20:42', ''),
(400, 20170052, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '86.00', '86.00', 'English', '', '17-07-2018 16:20:42', ''),
(401, 20170133, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '66.00', '66.00', 'English', '', '17-07-2018 16:20:42', ''),
(402, 20170134, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'English', '', '17-07-2018 16:20:42', ''),
(403, 20170135, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'English', '', '17-07-2018 16:20:42', ''),
(404, 20170136, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'English', '', '17-07-2018 16:20:43', ''),
(405, 20170137, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '28.00', '28.00', 'English', '', '17-07-2018 16:20:43', ''),
(406, 20170139, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'English', '', '17-07-2018 16:20:43', ''),
(407, 20170138, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '79.00', '79.00', 'English', '', '17-07-2018 16:20:43', ''),
(408, 20170053, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'English', '', '17-07-2018 16:20:43', ''),
(409, 20170141, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'English', '', '17-07-2018 16:20:43', ''),
(410, 20170142, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '61.00', '61.00', 'English', '', '17-07-2018 16:20:43', ''),
(411, 20170143, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'English', '', '17-07-2018 16:20:43', ''),
(412, 20170276, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'English', '', '17-07-2018 16:20:43', ''),
(413, 20170304, '', 6, 0, 1, 1, 40, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '17-07-2018 16:20:43', ''),
(414, 20170279, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.50', '99.50', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(415, 20170126, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(416, 20170127, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(417, 20170128, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(418, 20170130, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(419, 20170129, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(420, 20170131, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(421, 20170132, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '73.00', '73.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(422, 20170052, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(423, 20170133, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '85.50', '85.50', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(424, 20170134, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.50', '96.50', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(425, 20170135, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(426, 20170136, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(427, 20170137, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '71.00', '71.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(428, 20170139, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(429, 20170138, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(430, 20170053, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(431, 20170141, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'B & G  Science', '', '17-07-2018 16:28:00', ''),
(432, 20170142, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'B & G  Science', '', '17-07-2018 16:28:01', ''),
(433, 20170143, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'B & G  Science', '', '17-07-2018 16:28:01', ''),
(434, 20170276, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.50', '91.50', 'B & G  Science', '', '17-07-2018 16:28:01', ''),
(435, 20170304, '', 6, 0, 1, 1, 42, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'B & G  Science', '', '17-07-2018 16:28:01', ''),
(436, 20170279, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Religion', '', '17-07-2018 16:31:29', ''),
(437, 20170126, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Religion', '', '17-07-2018 16:31:29', ''),
(438, 20170127, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Religion', '', '17-07-2018 16:31:29', ''),
(439, 20170128, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'Religion', '', '17-07-2018 16:31:29', ''),
(440, 20170130, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '85.00', '85.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(441, 20170129, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.00', '88.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(442, 20170131, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(443, 20170132, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(444, 20170052, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(445, 20170133, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '73.00', '73.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(446, 20170134, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '92.00', '92.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(447, 20170135, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '89.00', '89.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(448, 20170136, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(449, 20170137, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(450, 20170139, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(451, 20170138, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(452, 20170053, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(453, 20170141, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(454, 20170142, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '76.00', '76.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(455, 20170143, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(456, 20170276, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(457, 20170304, '', 6, 0, 1, 1, 41, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Religion', '', '17-07-2018 16:31:30', ''),
(458, 20170279, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Science', '', '17-07-2018 16:34:43', ''),
(459, 20170126, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'Science', '', '17-07-2018 16:34:43', ''),
(460, 20170127, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'Science', '', '17-07-2018 16:34:43', ''),
(461, 20170128, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'Science', '', '17-07-2018 16:34:43', ''),
(462, 20170130, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Science', '', '17-07-2018 16:34:43', ''),
(463, 20170129, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Science', '', '17-07-2018 16:34:43', ''),
(464, 20170131, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '94.00', '94.00', 'Science', '', '17-07-2018 16:34:43', ''),
(465, 20170132, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Science', '', '17-07-2018 16:34:43', ''),
(466, 20170052, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'Science', '', '17-07-2018 16:34:43', ''),
(467, 20170133, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '89.00', '89.00', 'Science', '', '17-07-2018 16:34:43', ''),
(468, 20170134, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'Science', '', '17-07-2018 16:34:43', ''),
(469, 20170135, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '80.00', '80.00', 'Science', '', '17-07-2018 16:34:43', ''),
(470, 20170136, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Science', '', '17-07-2018 16:34:43', ''),
(471, 20170137, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '63.00', '63.00', 'Science', '', '17-07-2018 16:34:44', ''),
(472, 20170139, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.00', '87.00', 'Science', '', '17-07-2018 16:34:44', ''),
(473, 20170138, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'Science', '', '17-07-2018 16:34:44', ''),
(474, 20170053, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '89.00', '89.00', 'Science', '', '17-07-2018 16:34:44', ''),
(475, 20170141, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.00', '97.00', 'Science', '', '17-07-2018 16:34:44', ''),
(476, 20170142, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.00', '88.00', 'Science', '', '17-07-2018 16:34:44', ''),
(477, 20170143, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '70.00', '70.00', 'Science', '', '17-07-2018 16:34:44', ''),
(478, 20170276, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Science', '', '17-07-2018 16:34:44', ''),
(479, 20170304, '', 6, 0, 1, 1, 43, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Science', '', '17-07-2018 16:34:44', ''),
(480, 20170279, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 16:40:28', ''),
(481, 20170126, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '17-07-2018 16:40:28', ''),
(482, 20170127, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 16:40:28', ''),
(483, 20170128, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 16:40:28', ''),
(484, 20170130, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 16:40:28', ''),
(485, 20170129, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 16:40:28', ''),
(486, 20170131, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Practical', '', '17-07-2018 16:40:28', ''),
(487, 20170132, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(488, 20170052, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(489, 20170133, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(490, 20170134, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(491, 20170135, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(492, 20170136, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(493, 20170137, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(494, 20170139, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(495, 20170138, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(496, 20170053, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(497, 20170141, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(498, 20170142, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(499, 20170143, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(500, 20170276, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(501, 20170304, '', 6, 0, 1, 1, 44, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '17-07-2018 16:40:29', ''),
(502, 20170279, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(503, 20170126, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(504, 20170127, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(505, 20170128, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(506, 20170130, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(507, 20170129, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(508, 20170131, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(509, 20170132, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(510, 20170052, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(511, 20170133, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(512, 20170134, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(513, 20170135, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(514, 20170136, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(515, 20170137, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(516, 20170139, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(517, 20170138, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:06', ''),
(518, 20170053, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:07', ''),
(519, 20170141, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:07', ''),
(520, 20170142, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:07', ''),
(521, 20170143, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Moktab', '', '17-07-2018 16:58:07', ''),
(522, 20170276, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 16:58:07', ''),
(523, 20170304, '', 6, 0, 1, 1, 45, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Moktab', '', '17-07-2018 16:58:07', ''),
(524, 20170164, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:22', ''),
(525, 20170079, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:22', ''),
(526, 20170080, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.50', '15.00', '0.00', '74.00', '98.50', 'English', '', '17-07-2018 17:16:22', ''),
(527, 20170074, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.25', '15.00', '0.00', '72.00', '96.25', 'English', '', '17-07-2018 17:16:22', ''),
(528, 20170076, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:22', ''),
(529, 20170077, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.75', '15.00', '0.00', '65.00', '89.75', 'English', '', '17-07-2018 17:16:22', ''),
(530, 20170075, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.25', '14.50', '0.00', '71.00', '94.75', 'English', '', '17-07-2018 17:16:22', ''),
(531, 20170078, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.00', '13.50', '0.00', '73.00', '95.50', 'English', '', '17-07-2018 17:16:22', ''),
(532, 20170168, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.50', '14.50', '0.00', '66.00', '90.00', 'English', '', '17-07-2018 17:16:22', ''),
(533, 20170165, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '8.50', '14.50', '0.00', '71.00', '94.00', 'English', '', '17-07-2018 17:16:22', ''),
(534, 20170169, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.75', '0.00', '0.00', '26.00', '35.75', 'English', '', '17-07-2018 17:16:22', ''),
(535, 20170166, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '4.75', '9.00', '0.00', '15.00', '28.75', 'English', '', '17-07-2018 17:16:22', ''),
(536, 20170073, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:22', ''),
(537, 20170167, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '8.50', '14.50', '0.00', '69.00', '92.00', 'English', '', '17-07-2018 17:16:22', ''),
(538, 20170170, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.50', '15.00', '0.00', '69.50', '94.00', 'English', '', '17-07-2018 17:16:22', ''),
(539, 20170268, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '9.75', '15.00', '0.00', '70.00', '94.75', 'English', '', '17-07-2018 17:16:23', ''),
(540, 20170171, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:23', ''),
(541, 20170172, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:23', ''),
(542, 20170065, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:23', ''),
(543, 20170173, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'English', '', '17-07-2018 17:16:23', ''),
(544, 20170061, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:23', ''),
(545, 20170069, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '10.00', '14.50', '0.00', '72.50', '97.00', 'English', '', '17-07-2018 17:16:23', ''),
(546, 20170072, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '9.25', '14.50', '0.00', '61.00', '84.75', 'English', '', '17-07-2018 17:16:23', ''),
(547, 20170174, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '9.50', '14.00', '0.00', '70.50', '94.00', 'English', '', '17-07-2018 17:16:23', ''),
(548, 20170070, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '9.76', '14.50', '0.00', '61.00', '85.26', 'English', '', '17-07-2018 17:16:23', ''),
(549, 20170071, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '8.75', '14.00', '0.00', '73.00', '95.75', 'English', '', '17-07-2018 17:16:23', ''),
(550, 20170064, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '9.60', '13.00', '0.00', '64.50', '87.10', 'English', '', '17-07-2018 17:16:23', ''),
(551, 20170063, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '9.50', '13.00', '0.00', '63.50', '86.00', 'English', '', '17-07-2018 17:16:23', ''),
(552, 20170068, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '17-07-2018 17:16:23', ''),
(553, 20170175, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '8.00', '8.50', '0.00', '26.00', '42.50', 'English', '', '17-07-2018 17:16:24', ''),
(554, 20170176, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '8.00', '14.50', '0.00', '39.00', '61.50', 'English', '', '17-07-2018 17:16:24', ''),
(555, 20170067, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '9.75', '14.50', '0.00', '49.00', '73.25', 'English', '', '17-07-2018 17:16:24', ''),
(556, 20170178, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'English', '', '17-07-2018 17:16:24', ''),
(557, 20170336, '', 5, 2, 1, 1, 31, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '17-07-2018 17:16:24', ''),
(558, 20170338, '', 5, 1, 1, 1, 31, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '17-07-2018 17:16:24', ''),
(559, 20170164, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(560, 20170079, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.50', '15.00', '0.00', '75.00', '99.50', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(561, 20170080, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.00', '15.00', '0.00', '69.50', '93.50', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(562, 20170074, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.50', '15.00', '0.00', '72.50', '97.00', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(563, 20170076, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(564, 20170077, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.00', '15.00', '0.00', '75.00', '99.00', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(565, 20170075, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.50', '15.00', '0.00', '75.00', '99.50', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(566, 20170078, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.00', '14.50', '0.00', '55.00', '78.50', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(567, 20170168, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '10.00', '12.50', '0.00', '61.00', '83.50', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(568, 20170165, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '7.25', '14.50', '0.00', '63.50', '85.25', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(569, 20170169, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.50', '0.00', '0.00', '33.00', '42.50', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(570, 20170166, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '6.00', '12.50', '0.00', '35.50', '54.00', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(571, 20170073, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.25', '15.00', '0.00', '75.00', '99.25', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(572, 20170167, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '8.25', '15.00', '0.00', '64.00', '87.25', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(573, 20170170, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '9.50', '15.00', '0.00', '75.00', '99.50', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(574, 20170268, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(575, 20170171, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '17-07-2018 18:00:44', ''),
(576, 20170172, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(577, 20170065, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '71.50', '96.50', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(578, 20170173, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '73.00', '98.00', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(579, 20170061, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '9.75', '14.50', '0.00', '73.50', '97.75', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(580, 20170069, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '9.50', '15.00', '0.00', '66.00', '90.50', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(581, 20170072, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '8.75', '15.00', '0.00', '72.00', '95.75', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(582, 20170174, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '8.25', '15.00', '0.00', '62.50', '85.75', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(583, 20170070, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '9.00', '15.00', '0.00', '70.00', '94.00', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(584, 20170071, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '9.00', '14.50', '0.00', '66.50', '90.00', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(585, 20170064, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '9.25', '15.00', '0.00', '57.00', '81.25', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(586, 20170063, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '9.00', '14.50', '0.00', '69.50', '93.00', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(587, 20170068, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '72.50', '97.50', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(588, 20170175, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '8.75', '14.00', '0.00', '0.00', '22.75', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(589, 20170176, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '8.00', '14.00', '0.00', '41.00', '63.00', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(590, 20170067, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '9.25', '15.00', '0.00', '68.50', '92.75', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(591, 20170178, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '10.00', '15.00', '0.00', '72.50', '97.50', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(592, 20170336, '', 5, 2, 1, 1, 32, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(593, 20170338, '', 5, 1, 1, 1, 32, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '17-07-2018 18:00:45', ''),
(594, 20170164, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '9.75', '15.00', '0.00', '74.00', '98.75', 'Arabic', '', '17-07-2018 18:10:19', ''),
(595, 20170079, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '71.50', '96.50', 'Arabic', '', '17-07-2018 18:10:19', ''),
(596, 20170080, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '10.00', '14.50', '0.00', '61.50', '86.00', 'Arabic', '', '17-07-2018 18:10:19', ''),
(597, 20170074, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '9.75', '14.00', '0.00', '62.00', '85.75', 'Arabic', '', '17-07-2018 18:10:19', ''),
(598, 20170076, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '17-07-2018 18:10:19', ''),
(599, 20170077, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '9.25', '14.50', '0.00', '71.00', '94.75', 'Arabic', '', '17-07-2018 18:10:19', ''),
(600, 20170075, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '9.50', '15.00', '0.00', '64.00', '88.50', 'Arabic', '', '17-07-2018 18:10:19', ''),
(601, 20170078, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '7.00', '13.50', '0.00', '60.00', '80.50', 'Arabic', '', '17-07-2018 18:10:19', ''),
(602, 20170168, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '8.75', '13.00', '0.00', '62.00', '83.75', 'Arabic', '', '17-07-2018 18:10:20', ''),
(603, 20170165, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '8.25', '14.00', '0.00', '60.00', '82.25', 'Arabic', '', '17-07-2018 18:10:20', ''),
(604, 20170169, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '9.00', '0.00', '0.00', '40.00', '49.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(605, 20170166, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '0.00', '9.00', '0.00', '19.00', '28.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(606, 20170073, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '9.75', '14.00', '0.00', '70.50', '94.25', 'Arabic', '', '17-07-2018 18:10:20', ''),
(607, 20170167, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '9.00', '14.50', '0.00', '68.00', '91.50', 'Arabic', '', '17-07-2018 18:10:20', ''),
(608, 20170170, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '10.00', '14.50', '0.00', '70.50', '95.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(609, 20170268, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '10.00', '14.50', '0.00', '69.00', '93.50', 'Arabic', '', '17-07-2018 18:10:20', ''),
(610, 20170171, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(611, 20170172, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(612, 20170065, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(613, 20170173, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(614, 20170061, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '10.00', '14.00', '0.00', '74.00', '98.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(615, 20170069, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '0.00', '0.00', '0.00', '74.00', '74.00', 'Arabic', '', '17-07-2018 18:10:20', ''),
(616, 20170072, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '8.75', '15.00', '0.00', '66.00', '89.75', 'Arabic', '', '17-07-2018 18:10:21', ''),
(617, 20170174, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '9.75', '15.00', '0.00', '67.00', '91.75', 'Arabic', '', '17-07-2018 18:10:21', ''),
(618, 20170070, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '9.25', '15.00', '0.00', '71.00', '95.25', 'Arabic', '', '17-07-2018 18:10:21', ''),
(619, 20170071, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '71.00', '96.00', 'Arabic', '', '17-07-2018 18:10:21', ''),
(620, 20170064, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '9.75', '10.00', '0.00', '62.00', '81.75', 'Arabic', '', '17-07-2018 18:10:21', ''),
(621, 20170063, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '9.50', '14.50', '0.00', '73.00', '97.00', 'Arabic', '', '17-07-2018 18:10:21', ''),
(622, 20170068, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '17-07-2018 18:10:21', ''),
(623, 20170175, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '7.00', '4.50', '0.00', '41.00', '52.50', 'Arabic', '', '17-07-2018 18:10:21', ''),
(624, 20170176, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '8.75', '0.60', '0.00', '45.00', '54.35', 'Arabic', '', '17-07-2018 18:10:21', ''),
(625, 20170067, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '9.75', '14.00', '0.00', '0.00', '23.75', 'Arabic', '', '17-07-2018 18:10:21', ''),
(626, 20170178, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.00', '99.00', 'Arabic', '', '17-07-2018 18:10:21', ''),
(627, 20170336, '', 5, 2, 1, 1, 33, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '17-07-2018 18:10:21', ''),
(628, 20170338, '', 5, 1, 1, 1, 33, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '17-07-2018 18:10:21', ''),
(629, 20170164, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(630, 20170079, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(631, 20170080, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.00', '88.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(632, 20170074, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(633, 20170076, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(634, 20170077, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(635, 20170075, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(636, 20170078, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(637, 20170168, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(638, 20170165, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '66.00', '66.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(639, 20170169, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '34.00', '34.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(640, 20170166, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '27.00', '27.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(641, 20170073, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(642, 20170167, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '58.00', '58.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(643, 20170170, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(644, 20170268, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(645, 20170171, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(646, 20170172, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Environment', '', '17-07-2018 18:15:47', ''),
(647, 20170065, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(648, 20170173, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(649, 20170061, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(650, 20170069, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.50', '96.50', 'Environment', '', '17-07-2018 18:15:48', ''),
(651, 20170072, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(652, 20170174, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.00', '98.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(653, 20170070, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(654, 20170071, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '97.50', '97.50', 'Environment', '', '17-07-2018 18:15:48', ''),
(655, 20170064, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.50', '90.50', 'Environment', '', '17-07-2018 18:15:48', ''),
(656, 20170063, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.50', '99.50', 'Environment', '', '17-07-2018 18:15:48', ''),
(657, 20170068, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(658, 20170175, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '57.50', '57.50', 'Environment', '', '17-07-2018 18:15:48', ''),
(659, 20170176, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.50', '87.50', 'Environment', '', '17-07-2018 18:15:48', ''),
(660, 20170067, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(661, 20170178, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.50', '99.50', 'Environment', '', '17-07-2018 18:15:48', ''),
(662, 20170336, '', 5, 2, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Environment', '', '17-07-2018 18:15:48', ''),
(663, 20170338, '', 5, 1, 1, 1, 34, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Environment', '', '17-07-2018 18:15:49', ''),
(664, 20170164, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '17-07-2018 19:11:55', ''),
(665, 20170079, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '17-07-2018 19:11:55', ''),
(666, 20170080, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '88.00', '88.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(667, 20170074, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(668, 20170076, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(669, 20170077, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(670, 20170075, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(671, 20170078, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(672, 20170168, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(673, 20170165, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '66.00', '66.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(674, 20170169, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '34.00', '34.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(675, 20170166, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '27.00', '27.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(676, 20170073, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(677, 20170167, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '58.00', '58.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(678, 20170170, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(679, 20170268, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(680, 20170171, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '17-07-2018 19:11:56', ''),
(681, 20170172, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(682, 20170065, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(683, 20170173, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(684, 20170061, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(685, 20170069, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '90.00', '90.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(686, 20170072, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '72.00', '72.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(687, 20170174, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '77.50', '77.50', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(688, 20170070, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.50', '87.50', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(689, 20170071, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(690, 20170064, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '79.00', '79.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(691, 20170063, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(692, 20170068, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(693, 20170175, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '58.50', '58.50', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(694, 20170176, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '45.50', '45.50', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(695, 20170067, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '54.50', '54.50', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(696, 20170178, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(697, 20170336, '', 5, 2, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(698, 20170338, '', 5, 1, 1, 1, 35, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '17-07-2018 19:11:57', ''),
(699, 20170164, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(700, 20170079, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(701, 20170080, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(702, 20170074, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(703, 20170076, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(704, 20170077, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(705, 20170075, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(706, 20170078, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(707, 20170168, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(708, 20170165, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(709, 20170169, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(710, 20170166, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(711, 20170073, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:26', ''),
(712, 20170167, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(713, 20170170, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(714, 20170268, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(715, 20170171, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(716, 20170172, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(717, 20170065, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(718, 20170173, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', '');
INSERT INTO `tbl_stu_marks_input` (`Marks_ID`, `Marks_stu_UNQ_ID`, `Marks_stu_name`, `Marks_stu_class_ID`, `Marks_stu_section_ID`, `Marks_stu_medium_ID`, `Marks_stu_shift_ID`, `Marks_stu_sub_code_ID`, `Marks_stu_exam_code_ID`, `Marks_stu_group_ID`, `Marks_stu_sub_full_marks`, `Marks_stu_sub_ct_marks`, `Marks_stu_sub_mt_marks`, `Marks_stu_sub_mcq_marks`, `Marks_stu_sub_cq_marks`, `Marks_stu_sub_total_marks`, `Marks_stu_sub_name`, `Marks_stu_sub_note`, `Marks_stu_craeted`, `Marks_stu_modified`) VALUES
(719, 20170061, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(720, 20170069, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(721, 20170072, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(722, 20170174, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(723, 20170070, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(724, 20170071, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(725, 20170064, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(726, 20170063, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:27', ''),
(727, 20170068, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:28', ''),
(728, 20170175, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:28', ''),
(729, 20170176, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:28', ''),
(730, 20170067, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:28', ''),
(731, 20170178, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '17-07-2018 19:21:28', ''),
(732, 20170336, '', 5, 2, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Moktab', '', '17-07-2018 19:21:28', ''),
(733, 20170338, '', 5, 1, 1, 1, 82, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Moktab', '', '17-07-2018 19:21:28', ''),
(734, 20170164, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(735, 20170079, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(736, 20170080, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(737, 20170074, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(738, 20170076, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(739, 20170077, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(740, 20170075, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(741, 20170078, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(742, 20170168, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(743, 20170165, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(744, 20170169, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(745, 20170166, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(746, 20170073, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Drawing', '', '17-07-2018 19:24:29', ''),
(747, 20170167, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(748, 20170170, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(749, 20170268, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(750, 20170171, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.50', '46.50', 'Drawing', '', '17-07-2018 19:24:30', ''),
(751, 20170172, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(752, 20170065, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(753, 20170173, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Drawing', '', '17-07-2018 19:24:30', ''),
(754, 20170061, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.00', '43.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(755, 20170069, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '41.00', '41.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(756, 20170072, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(757, 20170174, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(758, 20170070, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(759, 20170071, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '41.00', '41.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(760, 20170064, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(761, 20170063, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(762, 20170068, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Drawing', '', '17-07-2018 19:24:30', ''),
(763, 20170175, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Drawing', '', '17-07-2018 19:24:31', ''),
(764, 20170176, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Drawing', '', '17-07-2018 19:24:31', ''),
(765, 20170067, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Drawing', '', '17-07-2018 19:24:31', ''),
(766, 20170178, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'Drawing', '', '17-07-2018 19:24:31', ''),
(767, 20170336, '', 5, 2, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Drawing', '', '17-07-2018 19:24:31', ''),
(768, 20170338, '', 5, 1, 1, 1, 36, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Drawing', '', '17-07-2018 19:24:31', ''),
(769, 20170164, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 19:27:44', ''),
(770, 20170079, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 19:27:44', ''),
(771, 20170080, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 19:27:44', ''),
(772, 20170074, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Practical', '', '17-07-2018 19:27:44', ''),
(773, 20170076, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(774, 20170077, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(775, 20170075, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(776, 20170078, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(777, 20170168, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(778, 20170165, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(779, 20170169, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '29.50', '29.50', 'Practical', '', '17-07-2018 19:27:45', ''),
(780, 20170166, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.50', '46.50', 'Practical', '', '17-07-2018 19:27:45', ''),
(781, 20170073, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(782, 20170167, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Practical', '', '17-07-2018 19:27:45', ''),
(783, 20170170, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(784, 20170268, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(785, 20170171, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(786, 20170172, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.50', '46.50', 'Practical', '', '17-07-2018 19:27:45', ''),
(787, 20170065, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(788, 20170173, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(789, 20170061, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Practical', '', '17-07-2018 19:27:45', ''),
(790, 20170069, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '17-07-2018 19:27:45', ''),
(791, 20170072, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(792, 20170174, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Practical', '', '17-07-2018 19:27:46', ''),
(793, 20170070, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Practical', '', '17-07-2018 19:27:46', ''),
(794, 20170071, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Practical', '', '17-07-2018 19:27:46', ''),
(795, 20170064, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(796, 20170063, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Practical', '', '17-07-2018 19:27:46', ''),
(797, 20170068, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(798, 20170175, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '38.00', '38.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(799, 20170176, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(800, 20170067, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(801, 20170178, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(802, 20170336, '', 5, 2, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(803, 20170338, '', 5, 1, 1, 1, 37, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '17-07-2018 19:27:46', ''),
(804, 20170091, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '9.75', '14.50', '0.00', '74.00', '98.25', 'Bangla', '', '18-07-2018 12:18:05', ''),
(805, 20170179, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '9.50', '15.00', '0.00', '75.00', '99.50', 'Bangla', '', '18-07-2018 12:18:05', ''),
(806, 20170180, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '8.75', '10.50', '0.00', '71.00', '90.25', 'Bangla', '', '18-07-2018 12:18:05', ''),
(807, 20170181, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '4.75', '13.50', '0.00', '73.00', '91.25', 'Bangla', '', '18-07-2018 12:18:05', ''),
(808, 20170182, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '9.00', '15.00', '0.00', '73.00', '97.00', 'Bangla', '', '18-07-2018 12:18:05', ''),
(809, 20170183, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.00', '99.00', 'Bangla', '', '18-07-2018 12:18:05', ''),
(810, 20170184, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '9.75', '14.50', '0.00', '73.00', '97.25', 'Bangla', '', '18-07-2018 12:18:05', ''),
(811, 20170185, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '8.75', '15.00', '0.00', '72.00', '95.75', 'Bangla', '', '18-07-2018 12:18:05', ''),
(812, 20170096, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '8.75', '15.00', '0.00', '72.00', '95.75', 'Bangla', '', '18-07-2018 12:18:05', ''),
(813, 20170186, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '9.75', '15.00', '0.00', '72.00', '96.75', 'Bangla', '', '18-07-2018 12:18:05', ''),
(814, 20170092, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '9.00', '15.00', '0.00', '72.00', '96.00', 'Bangla', '', '18-07-2018 12:18:06', ''),
(815, 20170097, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '7.25', '14.00', '0.00', '73.00', '94.25', 'Bangla', '', '18-07-2018 12:18:06', ''),
(816, 20170188, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '7.25', '14.00', '0.00', '64.00', '85.25', 'Bangla', '', '18-07-2018 12:18:06', ''),
(817, 20170094, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '8.75', '0.00', '0.00', '52.00', '60.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(818, 20170095, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '6.75', '13.50', '0.00', '57.00', '77.25', 'Bangla', '', '18-07-2018 12:18:06', ''),
(819, 20170189, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '7.75', '15.00', '0.00', '67.00', '89.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(820, 20170190, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '9.25', '13.00', '0.00', '73.00', '95.25', 'Bangla', '', '18-07-2018 12:18:06', ''),
(821, 20170203, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '9.50', '15.00', '0.00', '74.00', '98.50', 'Bangla', '', '18-07-2018 12:18:06', ''),
(822, 20170275, '', 4, 1, 1, 1, 22, 1, 0, '100.00', '8.50', '14.00', '0.00', '73.00', '95.50', 'Bangla', '', '18-07-2018 12:18:06', ''),
(823, 20170088, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'Bangla', '', '18-07-2018 12:18:06', ''),
(824, 20170087, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '7.25', '15.00', '0.00', '73.50', '95.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(825, 20170084, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '9.75', '14.50', '0.00', '74.00', '98.25', 'Bangla', '', '18-07-2018 12:18:06', ''),
(826, 20170085, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '9.75', '15.00', '0.00', '73.00', '97.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(827, 20170086, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '9.50', '15.00', '0.00', '70.50', '95.00', 'Bangla', '', '18-07-2018 12:18:06', ''),
(828, 20170191, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '7.25', '15.00', '0.00', '68.50', '90.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(829, 20170082, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '9.50', '14.50', '0.00', '72.00', '96.00', 'Bangla', '', '18-07-2018 12:18:06', ''),
(830, 20170089, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '10.00', '15.00', '0.00', '73.00', '98.00', 'Bangla', '', '18-07-2018 12:18:06', ''),
(831, 20170192, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '0.00', '0.00', '0.00', '71.00', '71.00', 'Bangla', '', '18-07-2018 12:18:06', ''),
(832, 20170081, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '9.25', '14.50', '0.00', '50.00', '73.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(833, 20170194, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '9.00', '14.50', '0.00', '68.50', '92.00', 'Bangla', '', '18-07-2018 12:18:06', ''),
(834, 20170195, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '9.50', '15.00', '0.00', '72.50', '97.00', 'Bangla', '', '18-07-2018 12:18:06', ''),
(835, 20170100, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '7.25', '13.50', '0.00', '53.00', '73.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(836, 20170099, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '7.00', '13.00', '0.00', '49.50', '69.50', 'Bangla', '', '18-07-2018 12:18:06', ''),
(837, 20170196, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '8.25', '0.00', '0.00', '54.50', '62.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(838, 20170198, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '8.25', '13.00', '0.00', '26.50', '47.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(839, 20170083, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '9.00', '14.00', '0.00', '64.50', '87.50', 'Bangla', '', '18-07-2018 12:18:06', ''),
(840, 1018, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '7.25', '14.50', '0.00', '74.00', '95.75', 'Bangla', '', '18-07-2018 12:18:06', ''),
(841, 20170199, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '5.75', '13.00', '0.00', '26.00', '44.75', 'Bangla', '', '18-07-2018 12:18:07', ''),
(842, 20170201, '', 4, 2, 1, 1, 22, 1, 0, '100.00', '4.25', '2.00', '0.00', '10.00', '16.25', 'Bangla', '', '18-07-2018 12:18:07', ''),
(843, 20170091, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.50', '15.00', '0.00', '75.00', '99.50', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(844, 20170179, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '10.00', '15.00', '0.00', '73.50', '98.50', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(845, 20170180, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '10.00', '14.00', '0.00', '66.50', '90.50', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(846, 20170181, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '0.00', '15.00', '0.00', '73.00', '88.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(847, 20170182, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '7.50', '15.00', '0.00', '74.50', '97.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(848, 20170183, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.50', '15.00', '0.00', '73.50', '98.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(849, 20170184, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.75', '15.00', '0.00', '63.50', '88.25', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(850, 20170185, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.50', '15.00', '0.00', '69.50', '94.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(851, 20170096, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.00', '15.00', '0.00', '63.50', '87.50', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(852, 20170186, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.50', '15.00', '0.00', '59.50', '84.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(853, 20170092, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.50', '15.00', '0.00', '65.00', '89.50', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(854, 20170097, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '7.75', '14.00', '0.00', '74.50', '96.25', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(855, 20170188, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.75', '15.00', '0.00', '61.00', '85.75', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(856, 20170094, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.50', '0.00', '0.00', '54.50', '64.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(857, 20170095, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.25', '15.00', '0.00', '65.50', '89.75', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(858, 20170189, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '7.75', '15.00', '0.00', '72.50', '95.25', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(859, 20170190, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.00', '15.00', '0.00', '73.50', '97.50', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(860, 20170203, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '9.75', '15.00', '0.00', '73.50', '98.25', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(861, 20170275, '', 4, 1, 1, 1, 23, 1, 0, '100.00', '8.75', '15.00', '0.00', '69.50', '93.25', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(862, 20170088, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.25', '15.00', '0.00', '75.00', '99.25', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(863, 20170087, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '7.50', '12.50', '0.00', '75.00', '95.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(864, 20170084, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(865, 20170085, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(866, 20170086, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.75', '15.00', '0.00', '75.00', '99.75', 'Mathematics', '', '18-07-2018 12:31:17', ''),
(867, 20170191, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '5.00', '15.00', '0.00', '75.00', '95.00', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(868, 20170082, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.00', '13.00', '0.00', '75.00', '97.00', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(869, 20170089, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.25', '15.00', '0.00', '75.00', '99.25', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(870, 20170192, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.25', '14.50', '0.00', '75.00', '98.75', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(871, 20170081, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.75', '14.50', '0.00', '67.00', '91.25', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(872, 20170194, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '8.00', '15.00', '0.00', '75.00', '98.00', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(873, 20170195, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.50', '15.00', '0.00', '54.50', '79.00', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(874, 20170100, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '8.00', '14.00', '0.00', '75.00', '97.00', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(875, 20170099, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '7.25', '7.00', '0.00', '74.50', '88.75', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(876, 20170196, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.25', '11.50', '0.00', '40.00', '60.75', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(877, 20170198, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '6.50', '10.50', '0.00', '46.50', '63.50', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(878, 20170083, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.00', '15.00', '0.00', '49.50', '73.50', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(879, 1018, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '9.00', '14.00', '0.00', '73.00', '96.00', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(880, 20170199, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '5.75', '8.00', '0.00', '66.00', '79.75', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(881, 20170201, '', 4, 2, 1, 1, 23, 1, 0, '100.00', '0.00', '11.50', '0.00', '38.50', '50.00', 'Mathematics', '', '18-07-2018 12:31:18', ''),
(882, 20170091, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.75', '0.00', '0.00', '74.00', '83.75', 'English', '', '18-07-2018 12:43:15', ''),
(883, 20170179, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '10.00', '15.00', '0.00', '70.00', '95.00', 'English', '', '18-07-2018 12:43:15', ''),
(884, 20170180, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.25', '13.50', '0.00', '74.50', '97.25', 'English', '', '18-07-2018 12:43:15', ''),
(885, 20170181, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '5.00', '14.00', '0.00', '73.50', '92.50', 'English', '', '18-07-2018 12:43:15', ''),
(886, 20170182, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.25', '14.00', '0.00', '73.00', '96.25', 'English', '', '18-07-2018 12:43:15', ''),
(887, 20170183, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.75', '15.00', '0.00', '74.50', '99.25', 'English', '', '18-07-2018 12:43:15', ''),
(888, 20170184, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.50', '14.50', '0.00', '49.50', '73.50', 'English', '', '18-07-2018 12:43:15', ''),
(889, 20170185, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.75', '14.50', '0.00', '73.00', '97.25', 'English', '', '18-07-2018 12:43:15', ''),
(890, 20170096, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.50', '15.00', '0.00', '73.50', '98.00', 'English', '', '18-07-2018 12:43:16', ''),
(891, 20170186, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.75', '15.00', '0.00', '74.50', '99.25', 'English', '', '18-07-2018 12:43:16', ''),
(892, 20170092, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '7.00', '15.00', '0.00', '70.50', '92.50', 'English', '', '18-07-2018 12:43:16', ''),
(893, 20170097, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '7.25', '15.00', '0.00', '48.00', '70.25', 'English', '', '18-07-2018 12:43:16', ''),
(894, 20170188, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.50', '14.00', '0.00', '66.50', '90.00', 'English', '', '18-07-2018 12:43:16', ''),
(895, 20170094, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '8.50', '0.00', '0.00', '64.00', '72.50', 'English', '', '18-07-2018 12:43:16', ''),
(896, 20170095, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '8.75', '10.50', '0.00', '39.50', '58.75', 'English', '', '18-07-2018 12:43:16', ''),
(897, 20170189, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '9.25', '14.00', '0.00', '46.00', '69.25', 'English', '', '18-07-2018 12:43:16', ''),
(898, 20170190, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '7.00', '15.00', '0.00', '75.00', '97.00', 'English', '', '18-07-2018 12:43:16', ''),
(899, 20170203, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '7.50', '15.00', '0.00', '74.50', '97.00', 'English', '', '18-07-2018 12:43:16', ''),
(900, 20170275, '', 4, 1, 1, 1, 24, 1, 0, '100.00', '4.75', '13.50', '0.00', '59.00', '77.25', 'English', '', '18-07-2018 12:43:16', ''),
(901, 20170088, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '18-07-2018 12:43:16', ''),
(902, 20170087, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '7.25', '15.00', '0.00', '73.00', '95.25', 'English', '', '18-07-2018 12:43:16', ''),
(903, 20170084, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '9.25', '14.50', '0.00', '74.50', '98.25', 'English', '', '18-07-2018 12:43:16', ''),
(904, 20170085, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '9.75', '15.00', '0.00', '67.50', '92.25', 'English', '', '18-07-2018 12:43:16', ''),
(905, 20170086, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '9.25', '14.00', '0.00', '63.00', '86.25', 'English', '', '18-07-2018 12:43:16', ''),
(906, 20170191, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '7.50', '13.00', '0.00', '60.50', '81.00', 'English', '', '18-07-2018 12:43:16', ''),
(907, 20170082, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '9.50', '14.50', '0.00', '56.50', '80.50', 'English', '', '18-07-2018 12:43:16', ''),
(908, 20170089, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '9.75', '14.50', '0.00', '66.00', '90.25', 'English', '', '18-07-2018 12:43:16', ''),
(909, 20170192, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '2.25', '0.00', '0.00', '52.50', '54.75', 'English', '', '18-07-2018 12:43:16', ''),
(910, 20170081, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '8.75', '0.00', '0.00', '34.00', '42.75', 'English', '', '18-07-2018 12:43:16', ''),
(911, 20170194, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '8.75', '13.00', '0.00', '52.50', '74.25', 'English', '', '18-07-2018 12:43:16', ''),
(912, 20170195, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '9.75', '12.00', '0.00', '72.50', '94.25', 'English', '', '18-07-2018 12:43:17', ''),
(913, 20170100, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '8.25', '10.50', '0.00', '30.50', '49.25', 'English', '', '18-07-2018 12:43:17', ''),
(914, 20170099, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '9.00', '0.00', '0.00', '38.00', '47.00', 'English', '', '18-07-2018 12:43:17', ''),
(915, 20170196, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '7.75', '9.00', '0.00', '35.00', '51.75', 'English', '', '18-07-2018 12:43:17', ''),
(916, 20170198, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '7.75', '14.00', '0.00', '25.00', '46.75', 'English', '', '18-07-2018 12:43:17', ''),
(917, 20170083, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '8.75', '12.50', '0.00', '39.00', '60.25', 'English', '', '18-07-2018 12:43:17', ''),
(918, 1018, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '6.50', '14.00', '0.00', '55.00', '75.50', 'English', '', '18-07-2018 12:43:17', ''),
(919, 20170199, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '6.75', '13.00', '0.00', '41.00', '60.75', 'English', '', '18-07-2018 12:43:17', ''),
(920, 20170201, '', 4, 2, 1, 1, 24, 1, 0, '100.00', '5.50', '7.00', '0.00', '18.00', '30.50', 'English', '', '18-07-2018 12:43:17', ''),
(921, 20170091, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '10.00', '0.00', '0.00', '73.00', '83.00', 'Arabic', '', '18-07-2018 13:14:48', ''),
(922, 20170179, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '18-07-2018 13:14:48', ''),
(923, 20170180, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '9.50', '15.00', '0.00', '71.00', '95.50', 'Arabic', '', '18-07-2018 13:14:48', ''),
(924, 20170181, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '5.00', '15.00', '0.00', '73.50', '93.50', 'Arabic', '', '18-07-2018 13:14:48', ''),
(925, 20170182, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '9.75', '0.00', '0.00', '46.00', '55.75', 'Arabic', '', '18-07-2018 13:14:48', ''),
(926, 20170183, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '9.75', '14.50', '0.00', '68.00', '92.25', 'Arabic', '', '18-07-2018 13:14:48', ''),
(927, 20170184, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '9.75', '15.00', '0.00', '64.50', '89.25', 'Arabic', '', '18-07-2018 13:14:48', ''),
(928, 20170185, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '9.75', '15.00', '0.00', '72.50', '97.25', 'Arabic', '', '18-07-2018 13:14:48', ''),
(929, 20170096, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '9.75', '15.00', '0.00', '67.00', '91.75', 'Arabic', '', '18-07-2018 13:14:49', ''),
(930, 20170186, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '10.00', '15.00', '0.00', '70.50', '95.50', 'Arabic', '', '18-07-2018 13:14:49', ''),
(931, 20170092, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '9.75', '14.50', '0.00', '60.50', '84.75', 'Arabic', '', '18-07-2018 13:14:49', ''),
(932, 20170097, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '8.75', '15.00', '0.00', '66.00', '89.75', 'Arabic', '', '18-07-2018 13:14:49', ''),
(933, 20170188, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '8.75', '15.00', '0.00', '34.50', '58.25', 'Arabic', '', '18-07-2018 13:14:49', ''),
(934, 20170094, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '8.50', '0.00', '0.00', '16.00', '24.50', 'Arabic', '', '18-07-2018 13:14:49', ''),
(935, 20170095, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '8.50', '15.00', '0.00', '34.00', '57.50', 'Arabic', '', '18-07-2018 13:14:49', ''),
(936, 20170189, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '8.75', '15.00', '0.00', '70.00', '93.75', 'Arabic', '', '18-07-2018 13:14:49', ''),
(937, 20170190, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '10.00', '15.00', '0.00', '73.00', '98.00', 'Arabic', '', '18-07-2018 13:14:49', ''),
(938, 20170203, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '10.00', '15.00', '0.00', '70.50', '95.50', 'Arabic', '', '18-07-2018 13:14:49', ''),
(939, 20170275, '', 4, 1, 1, 1, 25, 1, 0, '100.00', '10.00', '15.00', '0.00', '68.00', '93.00', 'Arabic', '', '18-07-2018 13:14:49', ''),
(940, 20170088, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.75', '15.00', '0.00', '75.00', '99.75', 'Arabic', '', '18-07-2018 13:14:49', ''),
(941, 20170087, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '7.25', '15.00', '0.00', '73.00', '95.25', 'Arabic', '', '18-07-2018 13:14:49', ''),
(942, 20170084, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'Arabic', '', '18-07-2018 13:14:49', ''),
(943, 20170085, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.50', '15.00', '0.00', '71.00', '95.50', 'Arabic', '', '18-07-2018 13:14:49', ''),
(944, 20170086, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.50', '15.00', '0.00', '72.50', '97.00', 'Arabic', '', '18-07-2018 13:14:49', ''),
(945, 20170191, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '7.25', '13.00', '0.00', '67.00', '87.25', 'Arabic', '', '18-07-2018 13:14:49', ''),
(946, 20170082, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.50', '14.00', '0.00', '74.00', '97.50', 'Arabic', '', '18-07-2018 13:14:49', ''),
(947, 20170089, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.50', '14.50', '0.00', '71.50', '95.50', 'Arabic', '', '18-07-2018 13:14:49', ''),
(948, 20170192, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.25', '0.00', '0.00', '72.00', '81.25', 'Arabic', '', '18-07-2018 13:14:49', ''),
(949, 20170081, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '8.00', '0.00', '0.00', '60.50', '68.50', 'Arabic', '', '18-07-2018 13:14:50', ''),
(950, 20170194, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.25', '15.00', '0.00', '50.50', '74.75', 'Arabic', '', '18-07-2018 13:14:50', ''),
(951, 20170195, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.75', '15.00', '0.00', '71.00', '95.75', 'Arabic', '', '18-07-2018 13:14:50', ''),
(952, 20170100, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.75', '10.00', '0.00', '58.50', '78.25', 'Arabic', '', '18-07-2018 13:14:50', ''),
(953, 20170099, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '9.75', '0.00', '0.00', '46.00', '55.75', 'Arabic', '', '18-07-2018 13:14:50', ''),
(954, 20170196, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '8.00', '2.00', '0.00', '48.00', '58.00', 'Arabic', '', '18-07-2018 13:14:50', ''),
(955, 20170198, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '8.25', '13.00', '0.00', '48.50', '69.75', 'Arabic', '', '18-07-2018 13:14:50', ''),
(956, 20170083, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '7.75', '15.00', '0.00', '50.00', '72.75', 'Arabic', '', '18-07-2018 13:14:50', ''),
(957, 1018, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '7.00', '14.50', '0.00', '49.00', '70.50', 'Arabic', '', '18-07-2018 13:14:50', ''),
(958, 20170199, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '4.75', '11.00', '0.00', '52.50', '68.25', 'Arabic', '', '18-07-2018 13:14:50', ''),
(959, 20170201, '', 4, 2, 1, 1, 25, 1, 0, '100.00', '5.00', '10.00', '0.00', '11.00', '26.00', 'Arabic', '', '18-07-2018 13:14:50', ''),
(960, 20170091, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '18-07-2018 13:20:19', ''),
(961, 20170179, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(962, 20170180, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.50', '95.50', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(963, 20170181, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(964, 20170182, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.50', '87.50', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(965, 20170183, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '91.00', '91.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(966, 20170184, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(967, 20170185, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(968, 20170096, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '84.00', '84.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(969, 20170186, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(970, 20170092, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '87.50', '87.50', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(971, 20170097, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '64.00', '64.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(972, 20170188, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(973, 20170094, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '64.00', '64.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(974, 20170095, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(975, 20170189, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '93.00', '93.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(976, 20170190, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(977, 20170203, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '81.00', '81.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(978, 20170275, '', 4, 1, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(979, 20170088, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(980, 20170087, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(981, 20170084, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.50', '99.50', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(982, 20170085, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '98.50', '98.50', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(983, 20170086, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '86.00', '86.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(984, 20170191, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '64.50', '64.50', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(985, 20170082, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.50', '99.50', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(986, 20170089, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '99.00', '99.00', 'G. Knowledge', '', '18-07-2018 13:20:20', ''),
(987, 20170192, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '96.00', '96.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(988, 20170081, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '86.50', '86.50', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(989, 20170194, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '95.00', '95.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(990, 20170195, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(991, 20170100, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '51.00', '51.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(992, 20170099, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(993, 20170196, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(994, 20170198, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '58.00', '58.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(995, 20170083, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(996, 1018, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '100.00', '100.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(997, 20170199, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '70.00', '70.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(998, 20170201, '', 4, 2, 1, 1, 26, 1, 0, '100.00', '0.00', '0.00', '0.00', '27.00', '27.00', 'G. Knowledge', '', '18-07-2018 13:20:21', ''),
(999, 20170091, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'Drawing', '', '18-07-2018 13:23:31', ''),
(1000, 20170179, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.50', '39.50', 'Drawing', '', '18-07-2018 13:23:31', ''),
(1001, 20170180, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Drawing', '', '18-07-2018 13:23:31', ''),
(1002, 20170181, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1003, 20170182, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1004, 20170183, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '33.00', '33.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1005, 20170184, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '38.00', '38.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1006, 20170185, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.00', '39.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1007, 20170096, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1008, 20170186, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1009, 20170092, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '36.00', '36.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1010, 20170097, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '28.00', '28.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1011, 20170188, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '17.00', '17.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1012, 20170094, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '26.00', '26.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1013, 20170095, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '28.50', '28.50', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1014, 20170189, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '30.00', '30.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1015, 20170190, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '31.00', '31.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1016, 20170203, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1017, 20170275, '', 4, 1, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '25.00', '25.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1018, 20170088, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.00', '43.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1019, 20170087, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.50', '40.50', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1020, 20170084, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '38.00', '38.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1021, 20170085, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '32.00', '32.00', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1022, 20170086, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '36.50', '36.50', 'Drawing', '', '18-07-2018 13:23:32', ''),
(1023, 20170191, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.50', '39.50', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1024, 20170082, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1025, 20170089, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1026, 20170192, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1027, 20170081, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1028, 20170194, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '34.00', '34.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1029, 20170195, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '32.00', '32.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1030, 20170100, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1031, 20170099, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '35.00', '35.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1032, 20170196, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '31.00', '31.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1033, 20170198, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '16.00', '16.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1034, 20170083, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '31.00', '31.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1035, 1018, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '31.00', '31.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1036, 20170199, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '16.00', '16.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1037, 20170201, '', 4, 2, 1, 1, 27, 1, 0, '50.00', '0.00', '0.00', '0.00', '25.00', '25.00', 'Drawing', '', '18-07-2018 13:23:33', ''),
(1038, 20170091, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:52', ''),
(1039, 20170179, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:52', ''),
(1040, 20170180, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:52', ''),
(1041, 20170181, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:52', ''),
(1042, 20170182, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:52', ''),
(1043, 20170183, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:52', ''),
(1044, 20170184, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1045, 20170185, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1046, 20170096, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1047, 20170186, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1048, 20170092, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1049, 20170097, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1050, 20170188, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1051, 20170094, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1052, 20170095, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1053, 20170189, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1054, 20170190, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1055, 20170203, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1056, 20170275, '', 4, 1, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1057, 20170088, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1058, 20170087, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Practical', '', '18-07-2018 13:26:53', ''),
(1059, 20170084, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1060, 20170085, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Practical', '', '18-07-2018 13:26:53', ''),
(1061, 20170086, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1062, 20170191, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1063, 20170082, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1064, 20170089, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.50', '49.50', 'Practical', '', '18-07-2018 13:26:53', ''),
(1065, 20170192, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1066, 20170081, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.50', '49.50', 'Practical', '', '18-07-2018 13:26:53', ''),
(1067, 20170194, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1068, 20170195, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1069, 20170100, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1070, 20170099, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:53', ''),
(1071, 20170196, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.50', '44.50', 'Practical', '', '18-07-2018 13:26:54', ''),
(1072, 20170198, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 13:26:54', ''),
(1073, 20170083, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 13:26:54', ''),
(1074, 1018, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Practical', '', '18-07-2018 13:26:54', ''),
(1075, 20170199, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Practical', '', '18-07-2018 13:26:54', ''),
(1076, 20170201, '', 4, 2, 1, 1, 28, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.50', '44.50', 'Practical', '', '18-07-2018 13:26:54', ''),
(1077, 20170091, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1078, 20170179, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1079, 20170180, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1080, 20170181, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1081, 20170182, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', '');
INSERT INTO `tbl_stu_marks_input` (`Marks_ID`, `Marks_stu_UNQ_ID`, `Marks_stu_name`, `Marks_stu_class_ID`, `Marks_stu_section_ID`, `Marks_stu_medium_ID`, `Marks_stu_shift_ID`, `Marks_stu_sub_code_ID`, `Marks_stu_exam_code_ID`, `Marks_stu_group_ID`, `Marks_stu_sub_full_marks`, `Marks_stu_sub_ct_marks`, `Marks_stu_sub_mt_marks`, `Marks_stu_sub_mcq_marks`, `Marks_stu_sub_cq_marks`, `Marks_stu_sub_total_marks`, `Marks_stu_sub_name`, `Marks_stu_sub_note`, `Marks_stu_craeted`, `Marks_stu_modified`) VALUES
(1082, 20170183, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1083, 20170184, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1084, 20170185, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1085, 20170096, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1086, 20170186, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1087, 20170092, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1088, 20170097, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1089, 20170188, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1090, 20170094, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:01', ''),
(1091, 20170095, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1092, 20170189, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1093, 20170190, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1094, 20170203, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1095, 20170275, '', 4, 1, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1096, 20170088, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1097, 20170087, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1098, 20170084, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1099, 20170085, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1100, 20170086, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1101, 20170191, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1102, 20170082, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1103, 20170089, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1104, 20170192, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1105, 20170081, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1106, 20170194, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1107, 20170195, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1108, 20170100, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1109, 20170099, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1110, 20170196, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1111, 20170198, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 13:29:02', ''),
(1112, 20170083, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:03', ''),
(1113, 1018, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 13:29:03', ''),
(1114, 20170199, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 13:29:03', ''),
(1115, 20170201, '', 4, 2, 1, 1, 29, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 13:29:03', ''),
(1116, 20170111, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '24.00', '50.00', '99.00', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1117, 20170102, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.75', '15.00', '24.00', '50.00', '98.75', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1118, 20170224, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.00', '14.00', '23.00', '50.00', '96.00', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1119, 2170225, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.00', '14.50', '23.00', '50.00', '96.50', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1120, 20170103, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.25', '14.50', '23.00', '50.00', '96.75', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1121, 20170226, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.00', '14.00', '23.00', '49.00', '95.00', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1122, 20170106, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '0.00', '0.00', '25.00', '50.00', '75.00', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1123, 20170104, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.50', '11.00', '22.00', '49.00', '91.50', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1124, 20170113, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '8.50', '14.00', '22.00', '48.50', '93.00', 'Bangla', '', '18-07-2018 14:33:32', ''),
(1125, 20170227, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '8.00', '12.50', '21.00', '49.00', '90.50', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1126, 20170228, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.00', '15.00', '25.00', '50.00', '99.00', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1127, 20170229, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '8.75', '14.50', '25.00', '49.50', '97.75', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1128, 20170230, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.25', '15.00', '24.00', '49.50', '97.75', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1129, 20170001, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '7.75', '11.50', '21.50', '48.00', '88.75', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1130, 20170231, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '9.25', '14.50', '25.00', '50.00', '98.75', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1131, 20170270, '', 2, 1, 1, 2, 7, 1, 0, '100.00', '0.00', '9.50', '14.00', '43.00', '66.50', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1132, 20170108, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1133, 20170234, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1134, 20170107, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1135, 20170105, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1136, 20170110, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.00', '99.00', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1137, 20170235, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1138, 20170236, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.50', '99.50', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1139, 20170238, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '9.75', '15.00', '25.00', '50.00', '99.75', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1140, 20170237, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '14.50', '25.00', '49.00', '98.50', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1141, 20170239, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '9.50', '15.00', '25.00', '49.50', '99.00', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1142, 20170269, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '9.75', '15.00', '25.00', '49.50', '99.25', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1143, 20170240, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '9.75', '15.00', '25.00', '50.00', '99.75', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1144, 20170109, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.50', '99.50', 'Bangla', '', '18-07-2018 14:33:33', ''),
(1145, 20170241, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.00', '99.00', 'Bangla', '', '18-07-2018 14:33:34', ''),
(1146, 20170242, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '22.00', '49.00', '96.00', 'Bangla', '', '18-07-2018 14:33:34', ''),
(1147, 20170243, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '7.75', '12.00', '20.00', '27.00', '66.75', 'Bangla', '', '18-07-2018 14:33:34', ''),
(1148, 20170244, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Bangla', '', '18-07-2018 14:33:34', ''),
(1149, 20170245, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '9.75', '15.00', '25.00', '48.50', '98.25', 'Bangla', '', '18-07-2018 14:33:34', ''),
(1150, 20170246, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '9.25', '15.00', '25.00', '49.00', '98.25', 'Bangla', '', '18-07-2018 14:33:34', ''),
(1151, 20170247, '', 2, 2, 1, 2, 7, 1, 0, '100.00', '7.00', '14.75', '20.00', '28.50', '70.25', 'Bangla', '', '18-07-2018 14:33:34', ''),
(1152, 20170111, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1153, 20170102, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1154, 20170224, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.50', '15.00', '25.00', '49.50', '99.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1155, 2170225, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.50', '15.00', '25.00', '50.00', '99.50', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1156, 20170103, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1157, 20170226, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.50', '15.00', '20.00', '47.00', '91.50', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1158, 20170106, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '0.00', '0.00', '25.00', '50.00', '75.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1159, 20170104, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.50', '15.00', '22.00', '48.00', '94.50', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1160, 20170113, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.75', '15.00', '21.00', '47.50', '93.25', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1161, 20170227, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.00', '10.00', '21.00', '47.00', '87.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1162, 20170228, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.75', '15.00', '23.00', '50.00', '97.75', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1163, 20170229, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '8.75', '15.00', '23.00', '49.00', '95.75', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1164, 20170230, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.50', '14.50', '24.50', '48.50', '97.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1165, 20170001, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '8.25', '14.50', '23.00', '45.00', '90.75', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1166, 20170231, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '9.50', '15.00', '25.00', '50.00', '99.50', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1167, 20170270, '', 2, 1, 1, 2, 8, 1, 0, '100.00', '0.00', '10.50', '20.00', '44.00', '74.50', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1168, 20170108, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1169, 20170234, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1170, 20170107, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1171, 20170105, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1172, 20170110, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1173, 20170235, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '9.75', '15.00', '25.00', '50.00', '99.75', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1174, 20170236, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1175, 20170238, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '9.75', '15.00', '25.00', '50.00', '99.75', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1176, 20170237, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '9.50', '15.00', '25.00', '50.00', '99.50', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1177, 20170239, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1178, 20170269, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:45', ''),
(1179, 20170240, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1180, 20170109, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '9.50', '15.00', '25.00', '50.00', '99.50', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1181, 20170241, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1182, 20170242, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '9.00', '15.00', '25.00', '49.00', '98.00', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1183, 20170243, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '7.75', '12.00', '20.00', '38.00', '77.75', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1184, 20170244, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '9.75', '15.00', '25.00', '50.00', '99.75', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1185, 20170245, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '9.75', '14.50', '25.00', '50.00', '99.25', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1186, 20170246, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '9.75', '14.50', '25.00', '50.00', '99.25', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1187, 20170247, '', 2, 2, 1, 2, 8, 1, 0, '100.00', '8.25', '14.50', '20.00', '38.00', '80.75', 'Mathematics', '', '18-07-2018 14:44:46', ''),
(1188, 20170111, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'English', '', '18-07-2018 15:01:07', ''),
(1189, 20170102, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'English', '', '18-07-2018 15:01:07', ''),
(1190, 20170224, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.25', '15.00', '25.00', '48.50', '97.75', 'English', '', '18-07-2018 15:01:07', ''),
(1191, 2170225, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.75', '15.00', '25.00', '50.00', '99.75', 'English', '', '18-07-2018 15:01:07', ''),
(1192, 20170103, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.25', '15.00', '25.00', '50.00', '99.25', 'English', '', '18-07-2018 15:01:07', ''),
(1193, 20170226, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.25', '14.50', '22.00', '48.00', '93.75', 'English', '', '18-07-2018 15:01:07', ''),
(1194, 20170106, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '0.00', '0.00', '25.00', '50.00', '75.00', 'English', '', '18-07-2018 15:01:07', ''),
(1195, 20170104, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.75', '14.00', '25.00', '47.00', '95.75', 'English', '', '18-07-2018 15:01:07', ''),
(1196, 20170113, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.25', '14.50', '25.00', '48.50', '97.25', 'English', '', '18-07-2018 15:01:07', ''),
(1197, 20170227, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '7.75', '14.00', '25.00', '46.00', '92.75', 'English', '', '18-07-2018 15:01:07', ''),
(1198, 20170228, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.50', '15.00', '25.00', '50.00', '99.50', 'English', '', '18-07-2018 15:01:07', ''),
(1199, 20170229, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.00', '15.00', '25.00', '50.00', '99.00', 'English', '', '18-07-2018 15:01:07', ''),
(1200, 20170230, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.25', '15.00', '25.00', '49.00', '98.25', 'English', '', '18-07-2018 15:01:07', ''),
(1201, 20170001, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '8.50', '13.50', '22.00', '43.00', '87.00', 'English', '', '18-07-2018 15:01:08', ''),
(1202, 20170231, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '9.75', '15.00', '24.00', '49.00', '97.75', 'English', '', '18-07-2018 15:01:08', ''),
(1203, 20170270, '', 2, 1, 1, 2, 9, 1, 0, '100.00', '0.00', '11.50', '8.50', '38.00', '58.00', 'English', '', '18-07-2018 15:01:08', ''),
(1204, 20170108, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'English', '', '18-07-2018 15:01:08', ''),
(1205, 20170234, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.88', '15.00', '25.00', '49.50', '99.38', 'English', '', '18-07-2018 15:01:08', ''),
(1206, 20170107, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'English', '', '18-07-2018 15:01:08', ''),
(1207, 20170105, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.50', '99.50', 'English', '', '18-07-2018 15:01:08', ''),
(1208, 20170110, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '47.00', '97.00', 'English', '', '18-07-2018 15:01:08', ''),
(1209, 20170235, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.50', '15.00', '25.00', '49.50', '99.00', 'English', '', '18-07-2018 15:01:08', ''),
(1210, 20170236, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.75', '15.00', '25.00', '49.00', '98.75', 'English', '', '18-07-2018 15:01:08', ''),
(1211, 20170238, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '48.00', '98.00', 'English', '', '18-07-2018 15:01:08', ''),
(1212, 20170237, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.75', '15.00', '25.00', '43.75', '93.50', 'English', '', '18-07-2018 15:01:08', ''),
(1213, 20170239, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.75', '15.00', '25.00', '49.50', '99.25', 'English', '', '18-07-2018 15:01:08', ''),
(1214, 20170269, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.75', '15.00', '25.00', '43.00', '92.75', 'English', '', '18-07-2018 15:01:08', ''),
(1215, 20170240, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.50', '15.00', '25.00', '48.50', '98.00', 'English', '', '18-07-2018 15:01:08', ''),
(1216, 20170109, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.75', '15.00', '25.00', '44.00', '93.75', 'English', '', '18-07-2018 15:01:08', ''),
(1217, 20170241, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.50', '15.00', '25.00', '43.50', '93.00', 'English', '', '18-07-2018 15:01:08', ''),
(1218, 20170242, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.50', '15.00', '19.00', '42.00', '85.50', 'English', '', '18-07-2018 15:01:08', ''),
(1219, 20170243, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '7.50', '14.75', '20.00', '25.00', '67.25', 'English', '', '18-07-2018 15:01:08', ''),
(1220, 20170244, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '44.50', '94.50', 'English', '', '18-07-2018 15:01:08', ''),
(1221, 20170245, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '9.75', '15.00', '25.00', '48.00', '97.75', 'English', '', '18-07-2018 15:01:08', ''),
(1222, 20170246, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '10.00', '15.00', '25.00', '47.00', '97.00', 'English', '', '18-07-2018 15:01:08', ''),
(1223, 20170247, '', 2, 2, 1, 2, 9, 1, 0, '100.00', '8.00', '12.00', '20.00', '16.00', '56.00', 'English', '', '18-07-2018 15:01:09', ''),
(1224, 20170111, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:12', ''),
(1225, 20170102, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:12', ''),
(1226, 20170224, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '9.75', '14.50', '20.00', '50.00', '94.25', 'Arabic', '', '18-07-2018 15:19:12', ''),
(1227, 2170225, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '9.25', '15.00', '25.00', '49.50', '98.75', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1228, 20170103, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '9.00', '14.50', '25.00', '50.00', '98.50', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1229, 20170226, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '8.50', '14.00', '17.00', '47.50', '87.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1230, 20170106, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '0.00', '0.00', '25.00', '49.50', '74.50', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1231, 20170104, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '10.00', '14.50', '25.00', '50.00', '99.50', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1232, 20170113, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '8.50', '14.50', '25.00', '48.50', '96.50', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1233, 20170227, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '9.25', '14.50', '25.00', '50.00', '98.75', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1234, 20170228, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '9.50', '15.00', '25.00', '50.00', '99.50', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1235, 20170229, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '9.00', '15.00', '25.00', '49.50', '98.50', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1236, 20170230, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '9.25', '15.00', '25.00', '49.50', '98.75', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1237, 20170001, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '7.50', '11.00', '22.00', '43.50', '84.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1238, 20170231, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '9.25', '15.00', '25.00', '49.00', '98.25', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1239, 20170270, '', 2, 1, 1, 2, 10, 1, 0, '100.00', '0.00', '12.00', '10.00', '45.00', '67.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1240, 20170108, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1241, 20170234, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1242, 20170107, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1243, 20170105, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1244, 20170110, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1245, 20170235, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1246, 20170236, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1247, 20170238, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1248, 20170237, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '9.75', '15.00', '25.00', '49.50', '99.25', 'Arabic', '', '18-07-2018 15:19:13', ''),
(1249, 20170239, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '48.00', '98.00', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1250, 20170269, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '9.75', '15.00', '25.00', '47.00', '96.75', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1251, 20170240, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '48.50', '98.50', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1252, 20170109, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.50', '99.50', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1253, 20170241, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.50', '99.50', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1254, 20170242, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '9.75', '15.00', '0.00', '0.00', '24.75', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1255, 20170243, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '8.75', '10.00', '21.00', '45.00', '84.75', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1256, 20170244, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '9.75', '15.00', '25.00', '49.50', '99.25', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1257, 20170245, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '9.50', '15.00', '25.00', '49.00', '98.50', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1258, 20170246, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '9.25', '14.75', '25.00', '49.50', '98.50', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1259, 20170247, '', 2, 2, 1, 2, 10, 1, 0, '100.00', '8.00', '11.00', '0.00', '0.00', '19.00', 'Arabic', '', '18-07-2018 15:19:14', ''),
(1260, 20170111, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1261, 20170102, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1262, 20170224, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.50', '44.50', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1263, 2170225, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1264, 20170103, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1265, 20170226, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1266, 20170106, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1267, 20170104, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1268, 20170113, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.50', '46.50', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1269, 20170227, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1270, 20170228, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.50', '44.50', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1271, 20170229, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1272, 20170230, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.00', '43.00', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1273, 20170001, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '41.00', '41.00', 'Drawing', '', '18-07-2018 16:14:47', ''),
(1274, 20170231, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1275, 20170270, '', 2, 1, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '38.00', '38.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1276, 20170108, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1277, 20170234, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1278, 20170107, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.50', '49.50', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1279, 20170105, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.50', '49.50', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1280, 20170110, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1281, 20170235, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1282, 20170236, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1283, 20170238, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1284, 20170237, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1285, 20170239, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.50', '42.50', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1286, 20170269, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1287, 20170240, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1288, 20170109, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1289, 20170241, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1290, 20170242, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1291, 20170243, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1292, 20170244, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1293, 20170245, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1294, 20170246, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '36.00', '36.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1295, 20170247, '', 2, 2, 1, 2, 11, 1, 0, '50.00', '0.00', '0.00', '0.00', '34.00', '34.00', 'Drawing', '', '18-07-2018 16:14:48', ''),
(1296, 20170111, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1297, 20170102, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1298, 20170224, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1299, 2170225, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1300, 20170103, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1301, 20170226, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1302, 20170106, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1303, 20170104, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1304, 20170113, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1305, 20170227, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1306, 20170228, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1307, 20170229, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1308, 20170230, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1309, 20170001, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1310, 20170231, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1311, 20170270, '', 2, 1, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '30.00', '30.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1312, 20170108, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1313, 20170234, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1314, 20170107, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1315, 20170105, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1316, 20170110, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1317, 20170235, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1318, 20170236, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:24', ''),
(1319, 20170238, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1320, 20170237, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1321, 20170239, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1322, 20170269, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1323, 20170240, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1324, 20170109, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1325, 20170241, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1326, 20170242, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1327, 20170243, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1328, 20170244, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1329, 20170245, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1330, 20170246, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1331, 20170247, '', 2, 2, 1, 2, 12, 1, 0, '50.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'G. Knowledge', '', '18-07-2018 16:18:25', ''),
(1332, 20170111, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:08', ''),
(1333, 20170102, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:08', ''),
(1334, 20170224, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:08', ''),
(1335, 2170225, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:08', ''),
(1336, 20170103, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:08', ''),
(1337, 20170226, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 16:23:08', ''),
(1338, 20170106, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Practical', '', '18-07-2018 16:23:08', ''),
(1339, 20170104, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1340, 20170113, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1341, 20170227, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1342, 20170228, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1343, 20170229, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1344, 20170230, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.00', '43.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1345, 20170001, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '36.00', '36.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1346, 20170231, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1347, 20170270, '', 2, 1, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.00', '43.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1348, 20170108, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1349, 20170234, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1350, 20170107, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1351, 20170105, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.50', '49.50', 'Practical', '', '18-07-2018 16:23:09', ''),
(1352, 20170110, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1353, 20170235, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1354, 20170236, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1355, 20170238, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1356, 20170237, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1357, 20170239, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1358, 20170269, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1359, 20170240, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1360, 20170109, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:09', ''),
(1361, 20170241, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.50', '40.50', 'Practical', '', '18-07-2018 16:23:09', ''),
(1362, 20170242, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Practical', '', '18-07-2018 16:23:09', ''),
(1363, 20170243, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.50', '46.50', 'Practical', '', '18-07-2018 16:23:10', ''),
(1364, 20170244, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.50', '48.50', 'Practical', '', '18-07-2018 16:23:10', ''),
(1365, 20170245, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 16:23:10', ''),
(1366, 20170246, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '18-07-2018 16:23:10', ''),
(1367, 20170247, '', 2, 2, 1, 2, 13, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Practical', '', '18-07-2018 16:23:10', ''),
(1368, 20170111, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:33', ''),
(1369, 20170102, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:33', ''),
(1370, 20170224, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:33', ''),
(1371, 2170225, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:33', ''),
(1372, 20170103, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:33', ''),
(1373, 20170226, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Moktab', '', '18-07-2018 16:26:33', ''),
(1374, 20170106, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1375, 20170104, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1376, 20170113, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1377, 20170227, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1378, 20170228, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1379, 20170229, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1380, 20170230, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1381, 20170001, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1382, 20170231, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1383, 20170270, '', 2, 1, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1384, 20170108, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1385, 20170234, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1386, 20170107, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1387, 20170105, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1388, 20170110, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1389, 20170235, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1390, 20170236, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1391, 20170238, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1392, 20170237, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1393, 20170239, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1394, 20170269, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:34', ''),
(1395, 20170240, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1396, 20170109, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1397, 20170241, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1398, 20170242, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1399, 20170243, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1400, 20170244, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1401, 20170245, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1402, 20170246, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1403, 20170247, '', 2, 2, 1, 2, 14, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Moktab', '', '18-07-2018 16:26:35', ''),
(1404, 20170214, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1405, 20170119, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '9.75', '14.00', '0.00', '74.50', '98.25', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1406, 20170216, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1407, 20170217, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1408, 20170121, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '9.75', '15.00', '0.00', '75.00', '99.75', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1409, 20170116, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '0.00', '73.50', '98.50', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1410, 20170218, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '9.50', '15.00', '0.00', '0.00', '24.50', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1411, 1014, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '7.25', '14.50', '0.00', '74.00', '95.75', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1412, 20170219, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '9.75', '15.00', '0.00', '74.00', '98.75', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1413, 20170220, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1414, 20170125, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.00', '99.00', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1415, 20170221, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '9.75', '15.00', '0.00', '71.00', '95.75', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1416, 20170222, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '0.00', '73.50', '98.50', 'Bangla', '', '18-07-2018 17:19:54', ''),
(1417, 20170277, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '0.00', '14.50', '0.00', '75.00', '89.50', 'Bangla', '', '18-07-2018 17:19:55', ''),
(1418, 20170223, '', 3, 1, 1, 2, 15, 1, 0, '100.00', '7.25', '0.00', '0.00', '75.00', '82.25', 'Bangla', '', '18-07-2018 17:19:55', ''),
(1419, 20170214, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.00', '99.00', 'Mathematics', '', '18-07-2018 17:22:31', ''),
(1420, 20170119, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1421, 20170216, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1422, 20170217, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1423, 20170121, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1424, 20170116, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1425, 20170218, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '10.00', '15.00', '0.00', '0.00', '25.00', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1426, 1014, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '7.00', '15.00', '0.00', '75.00', '97.00', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1427, 20170219, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '9.75', '15.00', '0.00', '75.00', '99.75', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1428, 20170220, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '9.75', '15.00', '0.00', '75.00', '99.75', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1429, 20170125, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '9.75', '15.00', '0.00', '75.00', '99.75', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1430, 20170221, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '10.00', '14.50', '0.00', '74.00', '98.50', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1431, 20170222, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '9.25', '15.00', '0.00', '75.00', '99.25', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1432, 20170277, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '0.00', '15.00', '0.00', '75.00', '90.00', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1433, 20170223, '', 3, 1, 1, 2, 16, 1, 0, '100.00', '7.50', '0.00', '0.00', '75.00', '82.50', 'Mathematics', '', '18-07-2018 17:22:32', ''),
(1434, 20170214, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '72.50', '97.50', 'English', '', '18-07-2018 17:24:48', ''),
(1435, 20170119, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '9.75', '14.50', '0.00', '74.50', '98.75', 'English', '', '18-07-2018 17:24:48', ''),
(1436, 20170216, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'English', '', '18-07-2018 17:24:48', ''),
(1437, 20170217, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.00', '99.00', 'English', '', '18-07-2018 17:24:48', ''),
(1438, 20170121, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'English', '', '18-07-2018 17:24:48', ''),
(1439, 20170116, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'English', '', '18-07-2018 17:24:48', ''),
(1440, 20170218, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '72.00', '97.00', 'English', '', '18-07-2018 17:24:48', ''),
(1441, 1014, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '7.25', '13.00', '0.00', '72.50', '92.75', 'English', '', '18-07-2018 17:24:48', '');
INSERT INTO `tbl_stu_marks_input` (`Marks_ID`, `Marks_stu_UNQ_ID`, `Marks_stu_name`, `Marks_stu_class_ID`, `Marks_stu_section_ID`, `Marks_stu_medium_ID`, `Marks_stu_shift_ID`, `Marks_stu_sub_code_ID`, `Marks_stu_exam_code_ID`, `Marks_stu_group_ID`, `Marks_stu_sub_full_marks`, `Marks_stu_sub_ct_marks`, `Marks_stu_sub_mt_marks`, `Marks_stu_sub_mcq_marks`, `Marks_stu_sub_cq_marks`, `Marks_stu_sub_total_marks`, `Marks_stu_sub_name`, `Marks_stu_sub_note`, `Marks_stu_craeted`, `Marks_stu_modified`) VALUES
(1442, 20170219, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '14.50', '0.00', '72.00', '96.50', 'English', '', '18-07-2018 17:24:48', ''),
(1443, 20170220, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '73.10', '98.10', 'English', '', '18-07-2018 17:24:48', ''),
(1444, 20170125, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'English', '', '18-07-2018 17:24:48', ''),
(1445, 20170221, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '9.50', '12.00', '0.00', '68.00', '89.50', 'English', '', '18-07-2018 17:24:48', ''),
(1446, 20170222, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '0.00', '72.00', '97.00', 'English', '', '18-07-2018 17:24:48', ''),
(1447, 20170277, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '0.00', '9.00', '0.00', '71.50', '80.50', 'English', '', '18-07-2018 17:24:48', ''),
(1448, 20170223, '', 3, 1, 1, 2, 17, 1, 0, '100.00', '7.25', '10.50', '0.00', '73.00', '90.75', 'English', '', '18-07-2018 17:24:48', ''),
(1449, 20170214, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '10.00', '14.50', '0.00', '75.00', '99.50', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1450, 20170119, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1451, 20170216, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.00', '99.00', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1452, 20170217, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1453, 20170121, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '10.00', '15.00', '0.00', '75.00', '100.00', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1454, 20170116, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '10.00', '14.50', '0.00', '75.00', '99.50', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1455, 20170218, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '9.75', '14.50', '0.00', '72.50', '96.75', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1456, 1014, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '7.50', '4.00', '0.00', '72.50', '84.00', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1457, 20170219, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '10.00', '14.00', '0.00', '74.50', '98.50', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1458, 20170220, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '9.25', '9.00', '0.00', '73.00', '91.25', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1459, 20170125, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '10.00', '15.00', '0.00', '74.50', '99.50', 'Arabic', '', '18-07-2018 17:27:34', ''),
(1460, 20170221, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '9.25', '9.00', '0.00', '72.50', '90.75', 'Arabic', '', '18-07-2018 17:27:35', ''),
(1461, 20170222, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '9.25', '10.00', '0.00', '72.50', '91.75', 'Arabic', '', '18-07-2018 17:27:35', ''),
(1462, 20170277, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '0.00', '5.00', '0.00', '73.00', '78.00', 'Arabic', '', '18-07-2018 17:27:35', ''),
(1463, 20170223, '', 3, 1, 1, 2, 18, 1, 0, '100.00', '7.50', '5.00', '0.00', '72.00', '84.50', 'Arabic', '', '18-07-2018 17:27:35', ''),
(1464, 20170214, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '49.50', '0.00', '0.00', '0.00', '49.50', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1465, 20170119, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '47.50', '0.00', '0.00', '0.00', '47.50', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1466, 20170216, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '48.00', '0.00', '0.00', '0.00', '48.00', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1467, 20170217, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '49.50', '0.00', '0.00', '0.00', '49.50', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1468, 20170121, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '47.50', '0.00', '0.00', '0.00', '47.50', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1469, 20170116, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '48.50', '0.00', '0.00', '0.00', '48.50', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1470, 20170218, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1471, 1014, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '44.00', '0.00', '0.00', '0.00', '44.00', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1472, 20170219, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '45.00', '0.00', '0.00', '0.00', '45.00', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1473, 20170220, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '44.00', '0.00', '0.00', '0.00', '44.00', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1474, 20170125, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '46.50', '0.00', '0.00', '0.00', '46.50', 'Drawing', '', '18-07-2018 17:28:42', ''),
(1475, 20170221, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '48.00', '0.00', '0.00', '0.00', '48.00', 'Drawing', '', '18-07-2018 17:28:43', ''),
(1476, 20170222, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '43.00', '0.00', '0.00', '0.00', '43.00', 'Drawing', '', '18-07-2018 17:28:43', ''),
(1477, 20170277, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '45.00', '0.00', '0.00', '0.00', '45.00', 'Drawing', '', '18-07-2018 17:28:43', ''),
(1478, 20170223, '', 3, 1, 1, 2, 19, 1, 0, '50.00', '46.50', '0.00', '0.00', '0.00', '46.50', 'Drawing', '', '18-07-2018 17:28:43', ''),
(1479, 20170214, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '72.50', '72.50', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1480, 20170119, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.50', '74.50', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1481, 20170216, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.50', '74.50', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1482, 20170217, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1483, 20170121, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1484, 20170116, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.00', '74.00', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1485, 20170218, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '72.50', '72.50', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1486, 1014, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1487, 20170219, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '73.50', '73.50', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1488, 20170220, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.50', '74.50', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1489, 20170125, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1490, 20170221, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.50', '74.50', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1491, 20170222, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.00', '74.00', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1492, 20170277, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1493, 20170223, '', 3, 1, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.00', '74.00', 'G. Knowledge', '', '18-07-2018 17:30:22', ''),
(1494, 20170214, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:58', ''),
(1495, 20170119, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:58', ''),
(1496, 20170216, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:58', ''),
(1497, 20170217, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:58', ''),
(1498, 20170121, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:58', ''),
(1499, 20170116, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1500, 20170218, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1501, 1014, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1502, 20170219, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1503, 20170220, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1504, 20170125, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1505, 20170221, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1506, 20170222, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1507, 20170277, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1508, 20170223, '', 3, 1, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Moktab', '', '18-07-2018 17:31:59', ''),
(1509, 20170214, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 17:37:06', ''),
(1510, 20170119, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Practical', '', '18-07-2018 17:37:06', ''),
(1511, 20170216, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.50', '45.50', 'Practical', '', '18-07-2018 17:37:06', ''),
(1512, 20170217, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 17:37:06', ''),
(1513, 20170121, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.50', '46.50', 'Practical', '', '18-07-2018 17:37:06', ''),
(1514, 20170116, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 17:37:06', ''),
(1515, 20170218, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 17:37:06', ''),
(1516, 1014, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 17:37:06', ''),
(1517, 20170219, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.50', '43.50', 'Practical', '', '18-07-2018 17:37:06', ''),
(1518, 20170220, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '34.50', '34.50', 'Practical', '', '18-07-2018 17:37:06', ''),
(1519, 20170125, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.50', '39.50', 'Practical', '', '18-07-2018 17:37:06', ''),
(1520, 20170221, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.50', '42.50', 'Practical', '', '18-07-2018 17:37:06', ''),
(1521, 20170222, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 17:37:07', ''),
(1522, 20170277, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 17:37:07', ''),
(1523, 20170223, '', 3, 1, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 17:37:07', ''),
(1524, 20170204, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1525, 20170124, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1526, 20170123, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1527, 20170122, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '8.50', '15.00', '15.00', '60.00', '98.50', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1528, 20170118, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '15.00', '59.50', '99.50', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1529, 20170115, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1530, 20170120, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '10.00', '13.50', '15.00', '58.50', '97.00', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1531, 20170205, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '9.13', '15.00', '15.00', '58.50', '97.63', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1532, 20170206, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '8.25', '14.00', '15.00', '55.00', '92.25', 'Bangla', '', '18-07-2018 17:45:07', ''),
(1533, 20170207, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '10.00', '15.00', '0.00', '0.00', '25.00', 'Bangla', '', '18-07-2018 17:45:08', ''),
(1534, 20170208, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '9.00', '14.50', '15.00', '59.50', '98.00', 'Bangla', '', '18-07-2018 17:45:08', ''),
(1535, 20170210, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '9.25', '15.00', '0.00', '0.00', '24.25', 'Bangla', '', '18-07-2018 17:45:08', ''),
(1536, 20170211, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '8.25', '14.00', '15.00', '58.00', '95.25', 'Bangla', '', '18-07-2018 17:45:08', ''),
(1537, 20170212, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '9.75', '14.00', '15.00', '54.00', '92.75', 'Bangla', '', '18-07-2018 17:45:08', ''),
(1538, 20170213, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '7.50', '12.00', '12.00', '42.00', '73.50', 'Bangla', '', '18-07-2018 17:45:08', ''),
(1539, 20170274, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '0.00', '12.50', '15.00', '57.00', '84.50', 'Bangla', '', '18-07-2018 17:45:08', ''),
(1540, 20170335, '', 3, 2, 1, 2, 15, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '18-07-2018 17:45:08', ''),
(1541, 20170204, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.75', '15.00', '15.00', '60.00', '99.75', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1542, 20170124, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.75', '15.00', '15.00', '60.00', '99.75', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1543, 20170123, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1544, 20170122, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.25', '15.00', '15.00', '59.50', '98.75', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1545, 20170118, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.75', '14.00', '15.00', '60.00', '98.75', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1546, 20170115, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.75', '15.00', '15.00', '59.50', '99.25', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1547, 20170120, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.75', '15.00', '15.00', '59.50', '99.25', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1548, 20170205, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.50', '14.00', '15.00', '60.00', '98.50', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1549, 20170206, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.75', '12.00', '15.00', '59.00', '95.75', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1550, 20170207, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.50', '13.50', '0.00', '0.00', '23.00', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1551, 20170208, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.50', '15.00', '15.00', '59.50', '99.00', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1552, 20170210, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.25', '15.00', '0.00', '0.00', '24.25', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1553, 20170211, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.25', '14.00', '15.00', '59.00', '97.25', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1554, 20170212, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '9.75', '13.00', '15.00', '60.00', '97.75', 'Mathematics', '', '18-07-2018 17:48:19', ''),
(1555, 20170213, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '8.50', '8.50', '15.00', '50.50', '82.50', 'Mathematics', '', '18-07-2018 17:48:20', ''),
(1556, 20170274, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '0.00', '11.50', '15.00', '57.50', '84.00', 'Mathematics', '', '18-07-2018 17:48:20', ''),
(1557, 20170335, '', 3, 2, 1, 2, 16, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '18-07-2018 17:48:20', ''),
(1558, 20170204, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'English', '', '18-07-2018 17:51:54', ''),
(1559, 20170124, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'English', '', '18-07-2018 17:51:54', ''),
(1560, 20170123, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '15.00', '59.50', '99.50', 'English', '', '18-07-2018 17:51:54', ''),
(1561, 20170122, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '8.25', '14.50', '15.00', '56.75', '94.50', 'English', '', '18-07-2018 17:51:54', ''),
(1562, 20170118, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'English', '', '18-07-2018 17:51:54', ''),
(1563, 20170115, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '9.75', '15.00', '15.00', '59.00', '98.75', 'English', '', '18-07-2018 17:51:54', ''),
(1564, 20170120, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '10.00', '14.50', '15.00', '46.00', '85.50', 'English', '', '18-07-2018 17:51:54', ''),
(1565, 20170205, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '7.75', '9.50', '15.00', '54.00', '86.25', 'English', '', '18-07-2018 17:51:54', ''),
(1566, 20170206, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '8.25', '6.50', '12.00', '35.00', '61.75', 'English', '', '18-07-2018 17:51:54', ''),
(1567, 20170207, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '9.75', '14.50', '0.00', '0.00', '24.25', 'English', '', '18-07-2018 17:51:54', ''),
(1568, 20170208, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '9.50', '13.50', '15.00', '58.50', '96.50', 'English', '', '18-07-2018 17:51:54', ''),
(1569, 20170210, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '9.50', '11.00', '0.00', '0.00', '20.50', 'English', '', '18-07-2018 17:51:54', ''),
(1570, 20170211, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '8.50', '14.50', '15.00', '59.50', '97.50', 'English', '', '18-07-2018 17:51:54', ''),
(1571, 20170212, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '7.25', '7.00', '15.00', '50.50', '79.75', 'English', '', '18-07-2018 17:51:54', ''),
(1572, 20170213, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '6.25', '6.50', '11.00', '37.50', '61.25', 'English', '', '18-07-2018 17:51:54', ''),
(1573, 20170274, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '0.00', '5.00', '15.00', '58.00', '78.00', 'English', '', '18-07-2018 17:51:54', ''),
(1574, 20170335, '', 3, 2, 1, 2, 17, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '18-07-2018 17:51:54', ''),
(1575, 20170204, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1576, 20170124, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1577, 20170123, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '10.00', '15.00', '15.00', '60.00', '100.00', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1578, 20170122, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '9.00', '14.00', '13.50', '56.50', '93.00', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1579, 20170118, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '9.75', '15.00', '15.00', '60.00', '99.75', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1580, 20170115, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '9.50', '14.50', '15.00', '59.50', '98.50', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1581, 20170120, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '9.25', '13.50', '12.50', '53.00', '88.25', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1582, 20170205, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '6.75', '13.50', '13.50', '55.00', '88.75', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1583, 20170206, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '7.50', '7.00', '11.00', '51.00', '76.50', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1584, 20170207, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '9.25', '14.00', '0.00', '0.00', '23.25', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1585, 20170208, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '9.50', '14.50', '15.00', '59.50', '98.50', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1586, 20170210, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '9.25', '14.00', '0.00', '0.00', '23.25', 'Arabic', '', '18-07-2018 17:55:38', ''),
(1587, 20170211, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '8.50', '10.00', '15.00', '57.50', '91.00', 'Arabic', '', '18-07-2018 17:55:39', ''),
(1588, 20170212, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '8.00', '10.00', '8.00', '54.00', '80.00', 'Arabic', '', '18-07-2018 17:55:39', ''),
(1589, 20170213, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '6.25', '3.00', '10.00', '30.00', '49.25', 'Arabic', '', '18-07-2018 17:55:39', ''),
(1590, 20170274, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '0.00', '0.00', '15.00', '58.00', '73.00', 'Arabic', '', '18-07-2018 17:55:39', ''),
(1591, 20170335, '', 3, 2, 1, 2, 18, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '18-07-2018 17:55:39', ''),
(1592, 20170204, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1593, 20170124, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1594, 20170123, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1595, 20170122, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1596, 20170118, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1597, 20170115, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1598, 20170120, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1599, 20170205, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1600, 20170206, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1601, 20170207, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1602, 20170208, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1603, 20170210, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1604, 20170211, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1605, 20170212, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1606, 20170213, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1607, 20170274, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.00', '45.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1608, 20170335, '', 3, 2, 1, 2, 19, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Drawing', '', '18-07-2018 17:57:45', ''),
(1609, 20170204, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1610, 20170124, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1611, 20170123, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1612, 20170122, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1613, 20170118, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1614, 20170115, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '75.00', '75.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1615, 20170120, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '69.00', '69.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1616, 20170205, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.00', '74.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1617, 20170206, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '68.00', '68.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1618, 20170207, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 17:59:01', ''),
(1619, 20170208, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.50', '74.50', 'G. Knowledge', '', '18-07-2018 17:59:02', ''),
(1620, 20170210, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 17:59:02', ''),
(1621, 20170211, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '74.00', '74.00', 'G. Knowledge', '', '18-07-2018 17:59:02', ''),
(1622, 20170212, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '72.50', '72.50', 'G. Knowledge', '', '18-07-2018 17:59:02', ''),
(1623, 20170213, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '69.00', '69.00', 'G. Knowledge', '', '18-07-2018 17:59:02', ''),
(1624, 20170274, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '73.00', '73.00', 'G. Knowledge', '', '18-07-2018 17:59:02', ''),
(1625, 20170335, '', 3, 2, 1, 2, 20, 1, 0, '75.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 17:59:02', ''),
(1626, 20170204, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1627, 20170124, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1628, 20170123, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1629, 20170122, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1630, 20170118, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '45.50', '45.50', 'Practical', '', '18-07-2018 18:00:03', ''),
(1631, 20170115, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1632, 20170120, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1633, 20170205, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1634, 20170206, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.50', '40.50', 'Practical', '', '18-07-2018 18:00:03', ''),
(1635, 20170207, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1636, 20170208, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1637, 20170210, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1638, 20170211, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.50', '47.50', 'Practical', '', '18-07-2018 18:00:03', ''),
(1639, 20170212, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1640, 20170213, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '43.00', '43.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1641, 20170274, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1642, 20170335, '', 3, 2, 1, 2, 83, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 18:00:03', ''),
(1643, 20170204, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1644, 20170124, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1645, 20170123, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1646, 20170122, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1647, 20170118, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1648, 20170115, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1649, 20170120, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1650, 20170205, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1651, 20170206, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1652, 20170207, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1653, 20170208, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1654, 20170210, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1655, 20170211, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1656, 20170212, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Moktab', '', '18-07-2018 18:01:02', ''),
(1657, 20170213, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Moktab', '', '18-07-2018 18:01:03', ''),
(1658, 20170274, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Moktab', '', '18-07-2018 18:01:03', ''),
(1659, 20170335, '', 3, 2, 1, 2, 21, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Moktab', '', '18-07-2018 18:01:03', ''),
(1660, 20170018, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.88', '14.75', '25.00', '48.50', '98.13', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1661, 20170019, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.50', '14.25', '25.00', '46.50', '95.25', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1662, 20170248, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.75', '14.75', '25.00', '50.00', '99.50', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1663, 20170330, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.75', '14.75', '25.00', '48.50', '98.00', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1664, 20170030, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.75', '14.50', '25.00', '49.00', '98.25', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1665, 20170028, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.50', '14.00', '25.00', '47.50', '96.00', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1666, 20170039, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '8.13', '14.25', '22.00', '46.50', '90.88', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1667, 20170037, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.38', '0.00', '24.00', '47.50', '80.88', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1668, 20170022, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.25', '14.75', '25.00', '48.00', '97.00', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1669, 20170032, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.88', '14.75', '25.00', '48.50', '98.13', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1670, 1002, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.63', '14.75', '25.00', '47.50', '96.88', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1671, 20170250, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.38', '14.75', '25.00', '48.00', '97.13', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1672, 20170257, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '6.88', '0.00', '25.00', '48.00', '79.88', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1673, 20170251, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.25', '14.25', '23.00', '45.50', '92.00', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1674, 20170252, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.63', '14.50', '25.00', '49.00', '98.13', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1675, 20170253, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '9.25', '14.25', '25.00', '46.50', '95.00', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1676, 1004, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '7.88', '14.00', '18.00', '46.50', '86.38', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1677, 20170262, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '8.13', '13.00', '25.00', '46.50', '92.63', 'Bangla', '', '18-07-2018 18:17:23', ''),
(1678, 20170256, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '7.88', '13.00', '23.00', '42.00', '85.88', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1679, 20170038, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '7.00', '12.00', '21.00', '43.50', '83.50', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1680, 20170031, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '8.50', '13.00', '15.00', '32.00', '68.50', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1681, 20170024, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '8.75', '15.00', '25.00', '48.50', '97.25', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1682, 20170017, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '9.00', '14.50', '25.00', '47.50', '96.00', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1683, 20170332, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '8.25', '13.00', '25.00', '47.50', '93.75', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1684, 20170021, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '8.25', '13.00', '25.00', '47.00', '93.25', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1685, 20170333, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '8.50', '13.50', '25.00', '48.00', '95.00', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1686, 20170259, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1687, 20170334, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '9.25', '0.00', '25.00', '44.50', '78.75', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1688, 20170027, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '7.75', '14.00', '21.00', '26.00', '68.75', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1689, 20170023, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '9.75', '15.00', '25.00', '50.00', '99.75', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1690, 20170029, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '7.75', '13.00', '23.00', '45.00', '88.75', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1691, 20170036, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '8.75', '15.00', '25.00', '48.50', '97.25', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1692, 20170261, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '8.05', '14.00', '25.00', '48.00', '95.05', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1693, 20170255, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '8.75', '14.00', '19.00', '42.50', '84.25', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1694, 20170263, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1695, 20170264, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1696, 20170265, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '9.00', '0.00', '25.00', '47.50', '81.50', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1697, 20170266, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '9.00', '14.00', '25.00', '48.50', '96.50', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1698, 20170267, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '9.25', '13.50', '25.00', '47.50', '95.25', 'Bangla', '', '18-07-2018 18:17:24', ''),
(1699, 20170272, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '9.00', '15.00', '25.00', '49.50', '98.50', 'Bangla', '', '18-07-2018 18:17:25', ''),
(1700, 20170303, '', 1, 2, 1, 2, 1, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '18-07-2018 18:17:25', ''),
(1701, 20170331, '', 1, 1, 1, 2, 1, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Bangla', '', '18-07-2018 18:17:25', ''),
(1702, 20170018, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '10.00', '15.00', '23.00', '47.00', '95.00', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1703, 20170019, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.38', '14.75', '23.00', '48.00', '95.13', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1704, 20170248, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.88', '15.00', '25.00', '50.00', '99.88', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1705, 20170330, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.88', '15.00', '23.00', '49.50', '97.38', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1706, 20170030, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.88', '15.00', '25.00', '48.00', '97.88', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1707, 20170028, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.75', '14.75', '25.00', '48.50', '98.00', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1708, 20170039, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '8.50', '14.50', '21.00', '46.50', '90.50', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1709, 20170037, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.50', '0.00', '21.00', '47.00', '77.50', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1710, 20170022, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.38', '14.75', '25.00', '47.50', '96.63', 'Mathematics', '', '18-07-2018 18:37:37', ''),
(1711, 20170032, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.75', '15.00', '23.00', '49.50', '97.25', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1712, 1002, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.75', '15.00', '23.00', '48.00', '95.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1713, 20170250, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.88', '15.00', '25.00', '47.00', '96.88', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1714, 20170257, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '6.63', '0.00', '25.00', '47.50', '79.13', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1715, 20170251, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.50', '14.25', '25.00', '47.00', '95.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1716, 20170252, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '9.88', '15.00', '23.00', '48.00', '95.88', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1717, 20170253, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '8.75', '14.50', '23.00', '46.50', '92.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1718, 1004, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '8.13', '13.00', '16.50', '46.50', '84.13', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1719, 20170262, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '8.38', '13.00', '17.50', '46.50', '85.38', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1720, 20170256, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '8.00', '13.00', '19.00', '43.00', '83.00', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1721, 20170038, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '6.00', '13.00', '19.00', '29.00', '67.00', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1722, 20170031, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.25', '12.50', '8.00', '19.00', '47.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1723, 20170024, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '9.25', '14.00', '25.00', '46.75', '95.00', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1724, 20170017, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.75', '14.00', '25.00', '50.00', '97.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1725, 20170332, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.75', '14.00', '20.00', '46.50', '89.25', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1726, 20170021, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.00', '13.00', '23.00', '45.25', '89.25', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1727, 20170333, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '9.00', '13.50', '23.00', '46.00', '91.50', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1728, 20170259, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1729, 20170334, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.75', '0.00', '25.00', '45.00', '78.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1730, 20170027, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.25', '13.50', '18.00', '41.00', '80.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1731, 20170023, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1732, 20170029, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '6.25', '14.00', '19.00', '39.50', '78.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1733, 20170036, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '9.25', '15.00', '25.00', '49.50', '98.75', 'Mathematics', '', '18-07-2018 18:37:38', ''),
(1734, 20170261, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '9.00', '14.00', '23.00', '46.50', '92.50', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1735, 20170255, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.25', '14.00', '15.00', '48.50', '85.75', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1736, 20170263, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1737, 20170264, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1738, 20170265, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.75', '0.00', '19.00', '41.75', '69.50', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1739, 20170266, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '9.75', '14.00', '25.00', '47.50', '96.25', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1740, 20170267, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.50', '14.00', '12.00', '27.00', '61.50', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1741, 20170272, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '8.75', '15.00', '23.00', '49.75', '96.50', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1742, 20170303, '', 1, 2, 1, 2, 2, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1743, 20170331, '', 1, 1, 1, 2, 2, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Mathematics', '', '18-07-2018 18:37:39', ''),
(1744, 20170018, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.88', '14.50', '25.00', '48.50', '97.88', 'English', '', '18-07-2018 18:47:52', ''),
(1745, 20170019, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.38', '14.25', '22.00', '46.50', '92.13', 'English', '', '18-07-2018 18:47:52', ''),
(1746, 20170248, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.50', '99.50', 'English', '', '18-07-2018 18:47:52', ''),
(1747, 20170330, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.75', '15.00', '25.00', '49.00', '98.75', 'English', '', '18-07-2018 18:47:52', ''),
(1748, 20170030, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '10.00', '15.00', '25.00', '48.00', '98.00', 'English', '', '18-07-2018 18:47:52', ''),
(1749, 20170028, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.75', '14.00', '25.00', '48.00', '96.75', 'English', '', '18-07-2018 18:47:53', ''),
(1750, 20170039, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '8.50', '14.00', '20.00', '44.00', '86.50', 'English', '', '18-07-2018 18:47:53', ''),
(1751, 20170037, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.50', '0.00', '24.50', '49.00', '83.00', 'English', '', '18-07-2018 18:47:53', ''),
(1752, 20170022, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.63', '14.25', '25.00', '48.00', '96.88', 'English', '', '18-07-2018 18:47:53', ''),
(1753, 20170032, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.88', '15.00', '25.00', '48.50', '98.38', 'English', '', '18-07-2018 18:47:53', ''),
(1754, 1002, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.75', '15.00', '25.00', '48.00', '97.75', 'English', '', '18-07-2018 18:47:53', ''),
(1755, 20170250, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.88', '15.00', '24.50', '48.50', '97.88', 'English', '', '18-07-2018 18:47:53', ''),
(1756, 20170257, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '7.00', '0.00', '24.50', '47.50', '79.00', 'English', '', '18-07-2018 18:47:53', ''),
(1757, 20170251, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '8.88', '14.25', '18.50', '45.50', '87.13', 'English', '', '18-07-2018 18:47:53', ''),
(1758, 20170252, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '10.00', '15.00', '25.00', '48.50', '98.50', 'English', '', '18-07-2018 18:47:53', ''),
(1759, 20170253, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '9.38', '14.25', '23.50', '47.00', '94.13', 'English', '', '18-07-2018 18:47:53', ''),
(1760, 1004, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '7.88', '0.00', '19.00', '46.50', '73.38', 'English', '', '18-07-2018 18:47:53', ''),
(1761, 20170262, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '8.50', '13.00', '23.50', '45.50', '90.50', 'English', '', '18-07-2018 18:47:53', ''),
(1762, 20170256, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '8.00', '0.00', '12.00', '40.00', '60.00', 'English', '', '18-07-2018 18:47:53', ''),
(1763, 20170038, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '8.00', '12.50', '7.50', '22.00', '50.00', 'English', '', '18-07-2018 18:47:53', ''),
(1764, 20170031, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '8.75', '14.00', '14.50', '37.50', '74.75', 'English', '', '18-07-2018 18:47:53', ''),
(1765, 20170024, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.25', '14.50', '25.00', '49.50', '98.25', 'English', '', '18-07-2018 18:47:53', ''),
(1766, 20170017, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.25', '15.00', '25.00', '44.50', '93.75', 'English', '', '18-07-2018 18:47:53', ''),
(1767, 20170332, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.00', '14.00', '25.00', '47.50', '95.50', 'English', '', '18-07-2018 18:47:53', ''),
(1768, 20170021, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '8.00', '13.50', '25.00', '48.00', '94.50', 'English', '', '18-07-2018 18:47:53', ''),
(1769, 20170333, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '7.75', '14.00', '23.50', '49.50', '94.75', 'English', '', '18-07-2018 18:47:53', ''),
(1770, 20170259, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '18-07-2018 18:47:53', ''),
(1771, 20170334, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.25', '0.00', '18.50', '47.50', '75.25', 'English', '', '18-07-2018 18:47:54', ''),
(1772, 20170027, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '8.75', '14.00', '15.00', '35.00', '72.75', 'English', '', '18-07-2018 18:47:54', ''),
(1773, 20170023, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '10.00', '15.00', '25.00', '50.00', '100.00', 'English', '', '18-07-2018 18:47:54', ''),
(1774, 20170029, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '8.00', '13.00', '19.50', '44.00', '84.50', 'English', '', '18-07-2018 18:47:54', ''),
(1775, 20170036, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.00', '14.50', '25.00', '47.00', '95.50', 'English', '', '18-07-2018 18:47:54', ''),
(1776, 20170261, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.25', '14.50', '24.50', '47.00', '95.25', 'English', '', '18-07-2018 18:47:54', ''),
(1777, 20170255, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '8.75', '13.50', '21.00', '44.50', '87.75', 'English', '', '18-07-2018 18:47:54', ''),
(1778, 20170263, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '18-07-2018 18:47:54', ''),
(1779, 20170264, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '18-07-2018 18:47:54', ''),
(1780, 20170265, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.25', '0.00', '17.50', '43.00', '69.75', 'English', '', '18-07-2018 18:47:54', ''),
(1781, 20170266, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.50', '14.00', '24.00', '48.50', '96.00', 'English', '', '18-07-2018 18:47:54', ''),
(1782, 20170267, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '7.00', '14.00', '23.50', '19.00', '63.50', 'English', '', '18-07-2018 18:47:54', ''),
(1783, 20170272, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '9.50', '15.00', '25.00', '50.00', '99.50', 'English', '', '18-07-2018 18:47:54', ''),
(1784, 20170303, '', 1, 2, 1, 2, 3, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '18-07-2018 18:47:54', ''),
(1785, 20170331, '', 1, 1, 1, 2, 3, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'English', '', '18-07-2018 18:47:54', ''),
(1786, 20170018, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '10.00', '14.50', '25.00', '47.50', '97.00', 'Arabic', '', '18-07-2018 18:58:11', ''),
(1787, 20170019, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '8.75', '14.25', '23.00', '45.50', '91.50', 'Arabic', '', '18-07-2018 18:58:11', ''),
(1788, 20170248, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.88', '14.75', '25.00', '49.50', '99.13', 'Arabic', '', '18-07-2018 18:58:11', ''),
(1789, 20170330, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.88', '15.00', '25.00', '49.00', '98.88', 'Arabic', '', '18-07-2018 18:58:11', ''),
(1790, 20170030, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.88', '15.00', '25.00', '48.00', '97.88', 'Arabic', '', '18-07-2018 18:58:11', ''),
(1791, 20170028, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.63', '14.50', '25.00', '47.50', '96.63', 'Arabic', '', '18-07-2018 18:58:11', ''),
(1792, 20170039, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '8.50', '14.00', '25.00', '44.50', '92.00', 'Arabic', '', '18-07-2018 18:58:11', ''),
(1793, 20170037, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.50', '0.00', '25.00', '47.00', '81.50', 'Arabic', '', '18-07-2018 18:58:11', ''),
(1794, 20170022, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.50', '14.75', '25.00', '46.50', '95.75', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1795, 20170032, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.75', '14.75', '25.00', '46.50', '96.00', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1796, 1002, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.75', '15.00', '25.00', '47.00', '96.75', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1797, 20170250, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.75', '15.00', '25.00', '48.50', '98.25', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1798, 20170257, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '7.25', '0.00', '25.00', '47.00', '79.25', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1799, 20170251, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.13', '14.50', '25.00', '46.00', '94.63', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1800, 20170252, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '10.00', '15.00', '25.00', '46.50', '96.50', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1801, 20170253, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '9.00', '14.00', '25.00', '47.00', '95.00', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1802, 1004, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '8.13', '0.00', '15.00', '45.00', '68.13', 'Arabic', '', '18-07-2018 18:58:12', '');
INSERT INTO `tbl_stu_marks_input` (`Marks_ID`, `Marks_stu_UNQ_ID`, `Marks_stu_name`, `Marks_stu_class_ID`, `Marks_stu_section_ID`, `Marks_stu_medium_ID`, `Marks_stu_shift_ID`, `Marks_stu_sub_code_ID`, `Marks_stu_exam_code_ID`, `Marks_stu_group_ID`, `Marks_stu_sub_full_marks`, `Marks_stu_sub_ct_marks`, `Marks_stu_sub_mt_marks`, `Marks_stu_sub_mcq_marks`, `Marks_stu_sub_cq_marks`, `Marks_stu_sub_total_marks`, `Marks_stu_sub_name`, `Marks_stu_sub_note`, `Marks_stu_craeted`, `Marks_stu_modified`) VALUES
(1803, 20170262, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '8.25', '13.00', '19.00', '44.50', '84.75', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1804, 20170256, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '7.88', '0.00', '19.00', '42.00', '68.88', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1805, 20170038, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '5.00', '7.00', '5.00', '24.00', '41.00', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1806, 20170031, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.00', '14.50', '2.00', '12.00', '37.50', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1807, 20170024, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.75', '14.50', '21.00', '41.00', '86.25', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1808, 20170017, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.50', '14.50', '25.00', '48.50', '97.50', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1809, 20170332, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.25', '13.50', '25.00', '42.50', '90.25', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1810, 20170021, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.00', '14.00', '25.00', '45.00', '93.00', 'Arabic', '', '18-07-2018 18:58:12', ''),
(1811, 20170333, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '10.00', '14.00', '25.00', '50.00', '99.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1812, 20170259, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1813, 20170334, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.75', '0.00', '20.00', '40.50', '70.25', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1814, 20170027, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '8.25', '14.00', '16.00', '21.50', '59.75', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1815, 20170023, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '10.00', '15.00', '25.00', '49.50', '99.50', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1816, 20170029, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '8.50', '14.00', '11.00', '29.00', '62.50', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1817, 20170036, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.00', '15.00', '25.00', '48.00', '97.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1818, 20170261, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.50', '14.00', '24.00', '34.50', '82.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1819, 20170255, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '8.75', '15.00', '14.00', '41.50', '79.25', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1820, 20170263, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1821, 20170264, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1822, 20170265, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '9.50', '0.00', '15.00', '46.50', '71.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1823, 20170266, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '10.00', '14.00', '25.00', '50.00', '99.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1824, 20170267, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '8.25', '14.00', '15.00', '4.00', '41.25', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1825, 20170272, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1826, 20170303, '', 1, 2, 1, 2, 4, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1827, 20170331, '', 1, 1, 1, 2, 4, 1, 0, '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Arabic', '', '18-07-2018 18:58:13', ''),
(1828, 20170018, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:15', ''),
(1829, 20170019, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:15', ''),
(1830, 20170248, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1831, 20170330, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1832, 20170030, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1833, 20170028, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1834, 20170039, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1835, 20170037, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1836, 20170022, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1837, 20170032, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1838, 1002, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1839, 20170250, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1840, 20170257, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1841, 20170251, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1842, 20170252, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1843, 20170253, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1844, 1004, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1845, 20170262, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '25.00', '25.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1846, 20170256, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1847, 20170038, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '30.00', '30.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1848, 20170031, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '20.00', '20.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1849, 20170024, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1850, 20170017, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:16', ''),
(1851, 20170332, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1852, 20170021, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1853, 20170333, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1854, 20170259, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1855, 20170334, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1856, 20170027, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1857, 20170023, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1858, 20170029, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1859, 20170036, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1860, 20170261, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1861, 20170255, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1862, 20170263, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1863, 20170264, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1864, 20170265, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1865, 20170266, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1866, 20170267, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1867, 20170272, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1868, 20170303, '', 1, 2, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1869, 20170331, '', 1, 1, 1, 2, 5, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'G. Knowledge', '', '18-07-2018 19:03:17', ''),
(1870, 20170018, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:26', ''),
(1871, 20170019, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1872, 20170248, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1873, 20170330, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1874, 20170030, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1875, 20170028, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1876, 20170039, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.50', '44.50', 'Practical', '', '18-07-2018 19:06:27', ''),
(1877, 20170037, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '41.00', '41.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1878, 20170022, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1879, 20170032, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.00', '42.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1880, 1002, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '39.50', '39.50', 'Practical', '', '18-07-2018 19:06:27', ''),
(1881, 20170250, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1882, 20170257, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1883, 20170251, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1884, 20170252, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '47.00', '47.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1885, 20170253, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1886, 1004, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.50', '42.50', 'Practical', '', '18-07-2018 19:06:27', ''),
(1887, 20170262, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1888, 20170256, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.00', '44.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1889, 20170038, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '44.50', '44.50', 'Practical', '', '18-07-2018 19:06:27', ''),
(1890, 20170031, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '37.00', '37.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1891, 20170024, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '40.00', '40.00', 'Practical', '', '18-07-2018 19:06:27', ''),
(1892, 20170017, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1893, 20170332, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.50', '46.50', 'Practical', '', '18-07-2018 19:06:28', ''),
(1894, 20170021, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.50', '42.50', 'Practical', '', '18-07-2018 19:06:28', ''),
(1895, 20170333, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '42.50', '42.50', 'Practical', '', '18-07-2018 19:06:28', ''),
(1896, 20170259, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1897, 20170334, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '38.50', '38.50', 'Practical', '', '18-07-2018 19:06:28', ''),
(1898, 20170027, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '30.50', '30.50', 'Practical', '', '18-07-2018 19:06:28', ''),
(1899, 20170023, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1900, 20170029, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1901, 20170036, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1902, 20170261, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '49.00', '49.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1903, 20170255, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1904, 20170263, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1905, 20170264, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1906, 20170265, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '48.00', '48.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1907, 20170266, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1908, 20170267, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '46.00', '46.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1909, 20170272, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '50.00', '50.00', 'Practical', '', '18-07-2018 19:06:28', ''),
(1910, 20170303, '', 1, 2, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 19:06:29', ''),
(1911, 20170331, '', 1, 1, 1, 2, 6, 1, 0, '50.00', '0.00', '0.00', '0.00', '0.00', '0.00', 'Practical', '', '18-07-2018 19:06:29', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_marks_summary`
--

CREATE TABLE `tbl_stu_marks_summary` (
  `Marks_Sum_ID` int(5) NOT NULL,
  `Marks_Sum_Student_ID` int(11) NOT NULL,
  `Marks_Sum_Medium_ID` int(5) NOT NULL,
  `Marks_Sum_Shift_ID` int(5) NOT NULL,
  `Marks_Sum_Group_ID` int(5) NOT NULL,
  `Marks_Sum_Sectoin_ID` varchar(5) NOT NULL,
  `Marks_Sum_Class_ID` int(5) NOT NULL,
  `Marks_Sum_Exam_code_ID` int(5) NOT NULL,
  `Marks_Sum_sub_code_ID` int(5) NOT NULL,
  `Marks_Sum_Bangla_Ist` decimal(11,2) NOT NULL,
  `Marks_Sum_Bangla_2nd` decimal(11,2) NOT NULL,
  `Marks_Sum_English_1st` decimal(11,2) NOT NULL,
  `Marks_Sum_English_2nd` decimal(11,2) NOT NULL,
  `Marks_Sum_Mathematics` decimal(11,2) NOT NULL,
  `Marks_Sum_Science` decimal(11,2) NOT NULL,
  `Marks_Sum_B_G_Science` decimal(11,2) NOT NULL,
  `Marks_Sum_ICT` decimal(11,2) NOT NULL,
  `Marks_Sum_Drawing` decimal(11,2) NOT NULL,
  `Marks_Sum_Moktab` decimal(11,2) NOT NULL,
  `Marks_Sum_Practical` decimal(11,2) NOT NULL,
  `Marks_Sum_Grand_total` decimal(11,2) NOT NULL,
  `Marks_Sum_Created` varchar(32) NOT NULL,
  `Marks_Sum_Religion` decimal(11,2) NOT NULL,
  `Marks_Sum_Modified` varchar(32) NOT NULL,
  `Marks_Sum_Avg` decimal(5,0) NOT NULL,
  `Marks_Sum_GPA` decimal(11,2) NOT NULL,
  `Marks_Sum_Grade` varchar(5) NOT NULL,
  `Marks_Sum_Merit_position` int(5) NOT NULL,
  `Marks_Sum_Computer` decimal(11,2) NOT NULL,
  `Marks_Sum_Bangla` decimal(11,2) NOT NULL,
  `Marks_Sum_English` decimal(11,2) NOT NULL,
  `Marks_Sum_GKnowledge` decimal(11,2) NOT NULL COMMENT 'class: Play',
  `Marks_Sum_Agri_H_Science` decimal(11,2) NOT NULL,
  `Marks_Sum_Environment` decimal(11,2) NOT NULL,
  `Marks_Sum_Arabic` decimal(11,2) NOT NULL COMMENT 'Class: Two'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stu_marks_summary`
--

INSERT INTO `tbl_stu_marks_summary` (`Marks_Sum_ID`, `Marks_Sum_Student_ID`, `Marks_Sum_Medium_ID`, `Marks_Sum_Shift_ID`, `Marks_Sum_Group_ID`, `Marks_Sum_Sectoin_ID`, `Marks_Sum_Class_ID`, `Marks_Sum_Exam_code_ID`, `Marks_Sum_sub_code_ID`, `Marks_Sum_Bangla_Ist`, `Marks_Sum_Bangla_2nd`, `Marks_Sum_English_1st`, `Marks_Sum_English_2nd`, `Marks_Sum_Mathematics`, `Marks_Sum_Science`, `Marks_Sum_B_G_Science`, `Marks_Sum_ICT`, `Marks_Sum_Drawing`, `Marks_Sum_Moktab`, `Marks_Sum_Practical`, `Marks_Sum_Grand_total`, `Marks_Sum_Created`, `Marks_Sum_Religion`, `Marks_Sum_Modified`, `Marks_Sum_Avg`, `Marks_Sum_GPA`, `Marks_Sum_Grade`, `Marks_Sum_Merit_position`, `Marks_Sum_Computer`, `Marks_Sum_Bangla`, `Marks_Sum_English`, `Marks_Sum_GKnowledge`, `Marks_Sum_Agri_H_Science`, `Marks_Sum_Environment`, `Marks_Sum_Arabic`) VALUES
(1, 20170060, 1, 1, 0, '0', 10, 1, 0, '80.00', '40.00', '100.00', '48.00', '97.00', '83.00', '82.00', '46.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:28', '82.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '96.00', '0.00', '0.00'),
(2, 20170056, 1, 1, 0, '0', 10, 1, 0, '86.00', '41.00', '100.00', '48.00', '99.50', '92.00', '96.00', '50.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:28', '80.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '89.00', '0.00', '0.00'),
(3, 20170058, 1, 1, 0, '0', 10, 1, 0, '88.00', '44.00', '99.00', '44.00', '99.50', '83.00', '96.50', '48.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:28', '84.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '85.00', '0.00', '0.00'),
(4, 20170159, 1, 1, 0, '0', 10, 1, 0, '80.00', '42.00', '97.00', '46.00', '91.00', '84.00', '90.50', '43.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:28', '74.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '81.00', '0.00', '0.00'),
(5, 20170160, 1, 1, 0, '0', 10, 1, 0, '84.00', '45.00', '76.00', '40.00', '96.50', '83.00', '88.00', '47.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:28', '70.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '90.00', '0.00', '0.00'),
(6, 20170161, 1, 1, 0, '0', 10, 1, 0, '81.00', '39.00', '94.00', '42.00', '95.50', '65.00', '77.50', '39.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:28', '72.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '63.00', '0.00', '0.00'),
(7, 20170057, 1, 1, 0, '0', 10, 1, 0, '80.00', '40.00', '92.00', '43.00', '95.00', '83.00', '77.50', '45.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:28', '80.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '78.00', '0.00', '0.00'),
(8, 20170162, 1, 1, 0, '0', 10, 1, 0, '60.00', '36.00', '63.00', '21.00', '70.00', '50.00', '60.50', '35.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:29', '48.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '55.00', '0.00', '0.00'),
(9, 20170059, 1, 1, 0, '0', 10, 1, 0, '55.00', '30.00', '63.00', '33.00', '90.00', '0.00', '54.00', '0.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:29', '61.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '71.00', '0.00', '0.00'),
(10, 20170163, 1, 1, 0, '0', 10, 1, 0, '61.00', '41.00', '82.00', '39.00', '81.00', '50.00', '65.50', '40.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 17:45:29', '63.00', '16-07-2018 18:32:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '71.00', '0.00', '0.00'),
(11, 20170002, 1, 1, 0, '0', 9, 1, 0, '93.00', '48.00', '96.00', '48.00', '99.00', '91.00', '94.00', '48.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:25', '84.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00'),
(12, 20170150, 1, 1, 0, '0', 9, 1, 0, '61.00', '39.00', '74.00', '39.00', '82.00', '62.00', '63.00', '45.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:25', '50.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '55.00', '0.00', '0.00'),
(13, 20170151, 1, 1, 0, '0', 9, 1, 0, '52.00', '40.00', '80.00', '30.00', '87.00', '52.00', '35.00', '41.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:26', '46.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '31.00', '0.00', '0.00'),
(14, 20170152, 1, 1, 0, '0', 9, 1, 0, '63.00', '34.00', '48.00', '0.00', '86.00', '58.00', '44.00', '0.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:26', '55.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(15, 20170153, 1, 1, 0, '0', 9, 1, 0, '49.00', '32.00', '63.00', '35.00', '95.00', '60.00', '54.00', '35.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:26', '48.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '59.00', '0.00', '0.00'),
(16, 20170154, 1, 1, 0, '0', 9, 1, 0, '36.00', '19.00', '39.00', '20.00', '60.00', '35.00', '32.00', '28.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:26', '51.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '39.00', '0.00', '0.00'),
(17, 20170155, 1, 1, 0, '0', 9, 1, 0, '44.00', '33.00', '50.00', '24.00', '81.00', '54.00', '61.00', '27.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:26', '49.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '42.00', '0.00', '0.00'),
(18, 20170337, 1, 1, 0, '0', 9, 1, 0, '49.00', '25.00', '40.00', '29.00', '48.00', '48.00', '45.00', '28.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:26', '42.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '51.00', '0.00', '0.00'),
(19, 20170157, 1, 1, 0, '0', 9, 1, 0, '90.00', '49.00', '96.00', '46.00', '95.00', '89.00', '93.00', '46.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:26', '81.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '79.00', '0.00', '0.00'),
(20, 20170158, 1, 1, 0, '0', 9, 1, 0, '93.00', '49.00', '90.00', '44.00', '94.00', '96.00', '90.00', '45.00', '0.00', '0.00', '0.00', '0.00', '16-07-2018 18:42:26', '90.00', '16-07-2018 19:01:22', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '97.50', '0.00', '0.00'),
(21, 20170040, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.00', '100.00', '100.00', '0.00', '0.00', '50.00', '50.00', '0.00', '16-07-2018 19:14:10', '97.00', '16-07-2018 19:42:20', '0', '0.00', '', 0, '0.00', '100.00', '99.50', '0.00', '0.00', '0.00', '0.00'),
(22, 20170144, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.00', '100.00', '100.00', '0.00', '0.00', '50.00', '50.00', '0.00', '16-07-2018 19:14:10', '96.00', '16-07-2018 19:42:20', '0', '0.00', '', 0, '0.00', '100.00', '98.50', '0.00', '0.00', '0.00', '0.00'),
(23, 20170041, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '100.00', '99.00', '0.00', '0.00', '50.00', '50.00', '0.00', '16-07-2018 19:14:10', '96.00', '16-07-2018 19:42:20', '0', '0.00', '', 0, '0.00', '99.00', '95.50', '0.00', '0.00', '0.00', '0.00'),
(24, 20170042, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '98.75', '99.00', '0.00', '0.00', '50.00', '50.00', '0.00', '16-07-2018 19:14:10', '99.00', '16-07-2018 19:42:20', '0', '0.00', '', 0, '0.00', '91.00', '99.00', '0.00', '0.00', '0.00', '0.00'),
(25, 20170043, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '87.00', '96.00', '90.00', '0.00', '0.00', '50.00', '50.00', '0.00', '16-07-2018 19:14:10', '95.00', '16-07-2018 19:42:20', '0', '0.00', '', 0, '0.00', '91.00', '98.50', '0.00', '0.00', '0.00', '0.00'),
(26, 20170044, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.00', '67.00', '97.00', '0.00', '0.00', '50.00', '49.00', '0.00', '16-07-2018 19:14:10', '90.00', '16-07-2018 19:42:20', '0', '0.00', '', 0, '0.00', '73.00', '96.50', '0.00', '0.00', '0.00', '0.00'),
(27, 20170045, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '96.00', '95.00', '97.00', '0.00', '0.00', '50.00', '48.50', '0.00', '16-07-2018 19:14:10', '81.00', '16-07-2018 19:42:20', '0', '0.00', '', 0, '0.00', '85.00', '92.00', '0.00', '0.00', '0.00', '0.00'),
(28, 20170145, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '84.00', '91.00', '81.00', '0.00', '0.00', '50.00', '49.50', '0.00', '16-07-2018 19:14:10', '97.00', '16-07-2018 19:42:20', '0', '0.00', '', 0, '0.00', '60.50', '60.50', '0.00', '0.00', '0.00', '0.00'),
(29, 20170046, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '82.00', '54.00', '73.00', '0.00', '0.00', '50.00', '47.00', '0.00', '16-07-2018 19:14:10', '81.00', '16-07-2018 19:42:21', '0', '0.00', '', 0, '0.00', '66.00', '72.00', '0.00', '0.00', '0.00', '0.00'),
(30, 20170054, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '58.00', '67.00', '81.00', '0.00', '0.00', '50.00', '37.00', '0.00', '16-07-2018 19:14:10', '64.00', '16-07-2018 19:42:21', '0', '0.00', '', 0, '0.00', '62.00', '73.00', '0.00', '0.00', '0.00', '0.00'),
(31, 20170047, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '92.00', '95.00', '99.00', '0.00', '0.00', '50.00', '46.00', '0.00', '16-07-2018 19:14:10', '0.00', '16-07-2018 19:42:21', '0', '0.00', '', 0, '0.00', '73.00', '91.00', '0.00', '0.00', '0.00', '0.00'),
(32, 1025, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '92.00', '94.50', '88.00', '0.00', '0.00', '50.00', '45.50', '0.00', '16-07-2018 19:14:10', '79.00', '16-07-2018 19:42:21', '0', '0.00', '', 0, '0.00', '64.50', '98.50', '0.00', '0.00', '0.00', '0.00'),
(33, 20170146, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '34.00', '19.00', '32.00', '0.00', '0.00', '40.00', '40.00', '0.00', '16-07-2018 19:14:10', '24.00', '16-07-2018 19:42:21', '0', '0.00', '', 0, '0.00', '19.00', '23.00', '0.00', '0.00', '0.00', '0.00'),
(34, 20170147, 1, 1, 0, '0', 7, 1, 0, '0.00', '0.00', '0.00', '0.00', '28.00', '78.00', '72.00', '0.00', '0.00', '0.00', '20.00', '0.00', '16-07-2018 19:14:10', '73.00', '16-07-2018 19:42:21', '0', '0.00', '', 0, '0.00', '29.00', '60.50', '0.00', '0.00', '0.00', '0.00'),
(35, 20170164, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', '50.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:46', '0', '0.00', '', 0, '0.00', '100.00', '100.00', '100.00', '0.00', '100.00', '98.75'),
(36, 20170079, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '49.00', '50.00', '50.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:46', '0', '0.00', '', 0, '0.00', '98.75', '100.00', '100.00', '0.00', '100.00', '96.50'),
(37, 20170080, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '93.50', '0.00', '0.00', '0.00', '48.00', '50.00', '50.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:46', '0', '0.00', '', 0, '0.00', '95.75', '98.50', '88.00', '0.00', '88.00', '86.00'),
(38, 20170074, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.00', '0.00', '0.00', '0.00', '48.00', '50.00', '48.50', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:46', '0', '0.00', '', 0, '0.00', '94.50', '96.25', '91.00', '0.00', '91.00', '85.75'),
(39, 20170076, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', '50.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '100.00', '100.00', '100.00', '0.00', '100.00', '100.00'),
(40, 20170077, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.00', '0.00', '0.00', '0.00', '49.00', '50.00', '48.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '92.00', '89.75', '96.00', '0.00', '96.00', '94.75'),
(41, 20170075, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '48.00', '50.00', '49.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '90.00', '94.75', '96.00', '0.00', '96.00', '88.50'),
(42, 20170078, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '78.50', '0.00', '0.00', '0.00', '46.00', '50.00', '45.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '70.50', '95.50', '99.00', '0.00', '99.00', '80.50'),
(43, 20170168, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '83.50', '0.00', '0.00', '0.00', '49.00', '50.00', '42.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '88.75', '90.00', '93.00', '0.00', '93.00', '83.75'),
(44, 20170165, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '85.25', '0.00', '0.00', '0.00', '48.00', '50.00', '48.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '84.50', '94.00', '66.00', '0.00', '66.00', '82.25'),
(45, 20170169, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '42.50', '0.00', '0.00', '0.00', '48.00', '50.00', '29.50', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '49.50', '35.75', '34.00', '0.00', '34.00', '49.00'),
(46, 20170166, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '54.00', '0.00', '0.00', '0.00', '44.00', '50.00', '46.50', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '22.50', '28.75', '27.00', '0.00', '27.00', '28.00'),
(47, 20170073, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.25', '0.00', '0.00', '0.00', '47.00', '50.00', '50.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '92.00', '100.00', '100.00', '0.00', '100.00', '94.25'),
(48, 20170167, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '87.25', '0.00', '0.00', '0.00', '45.00', '50.00', '47.50', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '78.75', '92.00', '58.00', '0.00', '58.00', '91.50'),
(49, 20170170, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '47.00', '50.00', '48.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '98.00', '94.00', '93.00', '0.00', '93.00', '95.00'),
(50, 20170268, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '49.00', '50.00', '50.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '99.25', '94.75', '99.00', '0.00', '99.00', '93.50'),
(51, 20170171, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '46.50', '50.00', '44.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '100.00', '100.00', '100.00', '0.00', '100.00', '100.00'),
(52, 20170172, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '45.00', '50.00', '46.50', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '99.00', '100.00', '99.00', '0.00', '100.00', '100.00'),
(53, 20170065, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '96.50', '0.00', '0.00', '0.00', '42.00', '50.00', '48.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '99.00', '100.00', '100.00', '0.00', '99.00', '100.00'),
(54, 20170173, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.00', '0.00', '0.00', '0.00', '48.50', '50.00', '49.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '99.50', '99.50', '99.00', '0.00', '100.00', '100.00'),
(55, 20170061, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.75', '0.00', '0.00', '0.00', '43.00', '50.00', '48.50', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '99.00', '100.00', '99.00', '0.00', '98.00', '98.00'),
(56, 20170069, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '90.50', '0.00', '0.00', '0.00', '41.00', '50.00', '48.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '98.34', '97.00', '90.00', '0.00', '96.50', '74.00'),
(57, 20170072, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.75', '0.00', '0.00', '0.00', '39.00', '50.00', '45.00', '0.00', '17-07-2018 15:01:30', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '93.50', '84.75', '72.00', '0.00', '98.00', '89.75'),
(58, 20170174, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '85.75', '0.00', '0.00', '0.00', '39.00', '50.00', '48.50', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:47', '0', '0.00', '', 0, '0.00', '88.50', '94.00', '77.50', '0.00', '98.00', '91.75'),
(59, 20170070, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '94.00', '0.00', '0.00', '0.00', '40.00', '50.00', '48.50', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '89.00', '85.26', '87.50', '0.00', '93.00', '95.25'),
(60, 20170071, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '90.00', '0.00', '0.00', '0.00', '41.00', '50.00', '47.50', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '91.50', '95.75', '91.00', '0.00', '97.50', '96.00'),
(61, 20170064, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '81.25', '0.00', '0.00', '0.00', '39.00', '50.00', '49.00', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '92.00', '87.10', '79.00', '0.00', '90.50', '81.75'),
(62, 20170063, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '93.00', '0.00', '0.00', '0.00', '39.00', '50.00', '47.50', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '93.75', '86.00', '93.00', '0.00', '99.50', '97.00'),
(63, 20170068, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.50', '0.00', '0.00', '0.00', '45.00', '50.00', '50.00', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '100.00', '100.00', '100.00', '0.00', '100.00', '100.00'),
(64, 20170175, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '22.75', '0.00', '0.00', '0.00', '0.00', '50.00', '38.00', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '60.25', '42.50', '58.50', '0.00', '57.50', '52.50'),
(65, 20170176, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '63.00', '0.00', '0.00', '0.00', '42.00', '50.00', '49.00', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '72.75', '42.00', '45.50', '0.00', '87.50', '54.35'),
(66, 20170067, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '92.75', '0.00', '0.00', '0.00', '40.00', '50.00', '47.00', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '87.00', '73.25', '54.50', '0.00', '91.00', '23.75'),
(67, 20170178, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.50', '0.00', '0.00', '0.00', '44.00', '50.00', '49.00', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '84.50', '99.50', '100.00', '0.00', '99.50', '99.00'),
(68, 20170336, 1, 1, 0, '2', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(69, 20170338, 1, 1, 0, '1', 5, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '17-07-2018 15:01:31', '0.00', '17-07-2018 19:27:48', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(70, 20170279, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.00', '98.00', '99.50', '0.00', '0.00', '50.00', '50.00', '0.00', '17-07-2018 16:08:20', '93.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '96.00', '92.00', '0.00', '0.00', '0.00', '0.00'),
(71, 20170126, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '96.00', '98.50', '0.00', '0.00', '50.00', '49.00', '0.00', '17-07-2018 16:08:20', '91.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '96.00', '96.00', '0.00', '0.00', '0.00', '0.00'),
(72, 20170127, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.00', '95.00', '98.50', '0.00', '0.00', '50.00', '50.00', '0.00', '17-07-2018 16:08:20', '90.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '99.00', '93.00', '0.00', '0.00', '0.00', '0.00'),
(73, 20170128, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '86.00', '94.00', '99.00', '0.00', '0.00', '50.00', '50.00', '0.00', '17-07-2018 16:08:20', '92.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '99.00', '92.00', '0.00', '0.00', '0.00', '0.00'),
(74, 20170130, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '91.00', '93.00', '98.00', '0.00', '0.00', '50.00', '48.00', '0.00', '17-07-2018 16:08:20', '85.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '94.00', '69.00', '0.00', '0.00', '0.00', '0.00'),
(75, 20170129, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '88.50', '98.00', '97.00', '0.00', '0.00', '50.00', '48.00', '0.00', '17-07-2018 16:08:20', '88.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '94.00', '97.00', '0.00', '0.00', '0.00', '0.00'),
(76, 20170131, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '91.00', '94.00', '98.00', '0.00', '0.00', '50.00', '45.00', '0.00', '17-07-2018 16:08:20', '92.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '95.00', '87.00', '0.00', '0.00', '0.00', '0.00'),
(77, 20170132, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '73.00', '0.00', '0.00', '0.00', '0.00', '0.00', '17-07-2018 16:08:20', '90.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(78, 20170052, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '97.00', '98.50', '0.00', '0.00', '50.00', '49.00', '0.00', '17-07-2018 16:08:20', '93.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '90.00', '86.00', '0.00', '0.00', '0.00', '0.00'),
(79, 20170133, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '80.00', '89.00', '85.50', '0.00', '0.00', '50.00', '48.00', '0.00', '17-07-2018 16:08:20', '73.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '81.00', '66.00', '0.00', '0.00', '0.00', '0.00'),
(80, 20170134, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '88.00', '97.00', '96.50', '0.00', '0.00', '50.00', '47.00', '0.00', '17-07-2018 16:08:20', '92.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '94.50', '100.00', '0.00', '0.00', '0.00', '0.00'),
(81, 20170135, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '63.00', '80.00', '95.00', '0.00', '0.00', '50.00', '48.00', '0.00', '17-07-2018 16:08:20', '89.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '79.00', '81.00', '0.00', '0.00', '0.00', '0.00'),
(82, 20170136, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '62.00', '98.00', '94.00', '0.00', '0.00', '50.00', '47.00', '0.00', '17-07-2018 16:08:20', '90.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '89.00', '80.00', '0.00', '0.00', '0.00', '0.00'),
(83, 20170137, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '53.00', '63.00', '71.00', '0.00', '0.00', '50.00', '48.00', '0.00', '17-07-2018 16:08:20', '46.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '53.00', '28.00', '0.00', '0.00', '0.00', '0.00'),
(84, 20170139, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '87.00', '87.00', '99.00', '0.00', '0.00', '50.00', '46.00', '0.00', '17-07-2018 16:08:21', '63.00', '17-07-2018 16:58:07', '0', '0.00', '', 0, '0.00', '90.00', '80.00', '0.00', '0.00', '0.00', '0.00'),
(85, 20170138, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '53.00', '97.00', '90.00', '0.00', '0.00', '50.00', '48.00', '0.00', '17-07-2018 16:08:21', '81.00', '17-07-2018 16:58:08', '0', '0.00', '', 0, '0.00', '88.00', '79.00', '0.00', '0.00', '0.00', '0.00'),
(86, 20170053, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '89.00', '94.00', '0.00', '0.00', '50.00', '49.00', '0.00', '17-07-2018 16:08:21', '80.00', '17-07-2018 16:58:08', '0', '0.00', '', 0, '0.00', '91.00', '92.00', '0.00', '0.00', '0.00', '0.00'),
(87, 20170141, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.00', '97.00', '99.00', '0.00', '0.00', '50.00', '48.00', '0.00', '17-07-2018 16:08:21', '93.00', '17-07-2018 16:58:08', '0', '0.00', '', 0, '0.00', '98.00', '97.00', '0.00', '0.00', '0.00', '0.00'),
(88, 20170142, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.50', '88.00', '94.00', '0.00', '0.00', '50.00', '47.00', '0.00', '17-07-2018 16:08:21', '76.00', '17-07-2018 16:58:08', '0', '0.00', '', 0, '0.00', '82.00', '61.00', '0.00', '0.00', '0.00', '0.00'),
(89, 20170143, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '77.00', '70.00', '42.00', '0.00', '0.00', '48.00', '46.00', '0.00', '17-07-2018 16:08:21', '47.00', '17-07-2018 16:58:08', '0', '0.00', '', 0, '0.00', '62.00', '35.00', '0.00', '0.00', '0.00', '0.00'),
(90, 20170276, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '89.50', '98.00', '91.50', '0.00', '0.00', '50.00', '46.00', '0.00', '17-07-2018 16:08:21', '93.00', '17-07-2018 16:58:08', '0', '0.00', '', 0, '0.00', '95.00', '98.50', '0.00', '0.00', '0.00', '0.00'),
(91, 20170304, 1, 1, 0, '0', 6, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '17-07-2018 16:08:21', '0.00', '17-07-2018 16:58:08', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(92, 20170091, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '35.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '98.25', '83.75', '99.00', '0.00', '0.00', '83.00'),
(93, 20170179, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.50', '0.00', '0.00', '0.00', '39.50', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '99.50', '95.00', '95.00', '0.00', '0.00', '100.00'),
(94, 20170180, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '90.50', '0.00', '0.00', '0.00', '39.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '90.25', '97.25', '95.50', '0.00', '0.00', '95.50'),
(95, 20170181, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '88.00', '0.00', '0.00', '0.00', '37.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '91.25', '92.50', '99.00', '0.00', '0.00', '93.50'),
(96, 20170182, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.00', '0.00', '0.00', '0.00', '37.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '97.00', '96.25', '87.50', '0.00', '0.00', '55.75'),
(97, 20170183, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.00', '0.00', '0.00', '0.00', '33.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '99.00', '99.25', '91.00', '0.00', '0.00', '92.25'),
(98, 20170184, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '88.25', '0.00', '0.00', '0.00', '38.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '97.25', '73.50', '81.00', '0.00', '0.00', '89.25'),
(99, 20170185, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '94.00', '0.00', '0.00', '0.00', '39.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '95.75', '97.25', '100.00', '0.00', '0.00', '97.25'),
(100, 20170096, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '87.50', '0.00', '0.00', '0.00', '42.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '95.75', '98.00', '84.00', '0.00', '0.00', '91.75'),
(101, 20170186, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '84.00', '0.00', '0.00', '0.00', '37.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '96.75', '99.25', '93.00', '0.00', '0.00', '95.50'),
(102, 20170092, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '89.50', '0.00', '0.00', '0.00', '36.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '96.00', '92.50', '87.50', '0.00', '0.00', '84.75'),
(103, 20170097, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '96.25', '0.00', '0.00', '0.00', '28.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '94.25', '70.25', '64.00', '0.00', '0.00', '89.75'),
(104, 20170188, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '85.75', '0.00', '0.00', '0.00', '17.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '85.25', '90.00', '81.00', '0.00', '0.00', '58.25'),
(105, 20170094, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '64.00', '0.00', '0.00', '0.00', '26.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '60.75', '72.50', '64.00', '0.00', '0.00', '24.50'),
(106, 20170095, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '89.75', '0.00', '0.00', '0.00', '28.50', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '77.25', '58.75', '47.00', '0.00', '0.00', '57.50'),
(107, 20170189, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.25', '0.00', '0.00', '0.00', '30.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '89.75', '69.25', '93.00', '0.00', '0.00', '93.75'),
(108, 20170190, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.50', '0.00', '0.00', '0.00', '31.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '95.25', '97.00', '95.00', '0.00', '0.00', '98.00'),
(109, 20170203, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.25', '0.00', '0.00', '0.00', '37.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '98.50', '97.00', '81.00', '0.00', '0.00', '95.50'),
(110, 20170275, 1, 1, 0, '1', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '93.25', '0.00', '0.00', '0.00', '25.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '95.50', '77.25', '95.00', '0.00', '0.00', '93.00'),
(111, 20170088, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.25', '0.00', '0.00', '0.00', '43.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '99.50', '100.00', '99.00', '0.00', '0.00', '99.75'),
(112, 20170087, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.00', '0.00', '0.00', '0.00', '40.50', '50.00', '47.50', '0.00', '18-07-2018 12:18:07', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '95.75', '95.25', '100.00', '0.00', '0.00', '95.25'),
(113, 20170084, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '38.00', '49.00', '50.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:03', '0', '0.00', '', 0, '0.00', '98.25', '98.25', '99.50', '0.00', '0.00', '99.50'),
(114, 20170085, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '32.00', '50.00', '48.50', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '97.75', '92.25', '98.50', '0.00', '0.00', '95.50'),
(115, 20170086, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '36.50', '50.00', '49.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '95.00', '86.25', '86.00', '0.00', '0.00', '97.00'),
(116, 20170191, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.00', '0.00', '0.00', '0.00', '39.50', '50.00', '50.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '90.75', '81.00', '64.50', '0.00', '0.00', '87.25'),
(117, 20170082, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.00', '0.00', '0.00', '0.00', '42.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '96.00', '80.50', '99.50', '0.00', '0.00', '97.50'),
(118, 20170089, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.25', '0.00', '0.00', '0.00', '35.00', '50.00', '49.50', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '98.00', '90.25', '99.00', '0.00', '0.00', '95.50'),
(119, 20170192, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.75', '0.00', '0.00', '0.00', '35.00', '48.00', '50.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '71.00', '54.75', '96.00', '0.00', '0.00', '81.25'),
(120, 20170081, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '91.25', '0.00', '0.00', '0.00', '37.00', '50.00', '49.50', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '73.75', '42.75', '86.50', '0.00', '0.00', '68.50'),
(121, 20170194, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.00', '0.00', '0.00', '0.00', '34.00', '50.00', '48.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '92.00', '74.25', '95.00', '0.00', '0.00', '74.75'),
(122, 20170195, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '79.00', '0.00', '0.00', '0.00', '32.00', '50.00', '48.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '97.00', '94.25', '100.00', '0.00', '0.00', '95.75'),
(123, 20170100, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.00', '0.00', '0.00', '0.00', '35.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '73.75', '49.25', '51.00', '0.00', '0.00', '78.25'),
(124, 20170099, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '88.75', '0.00', '0.00', '0.00', '35.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '69.50', '47.00', '49.00', '0.00', '0.00', '55.75'),
(125, 20170196, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '60.75', '0.00', '0.00', '0.00', '31.00', '50.00', '44.50', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '62.75', '51.75', '50.00', '0.00', '0.00', '58.00'),
(126, 20170198, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '63.50', '0.00', '0.00', '0.00', '16.00', '49.00', '49.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '47.75', '46.75', '58.00', '0.00', '0.00', '69.75'),
(127, 20170083, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '73.50', '0.00', '0.00', '0.00', '31.00', '50.00', '50.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '87.50', '60.25', '37.00', '0.00', '0.00', '72.75'),
(128, 1018, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '96.00', '0.00', '0.00', '0.00', '31.00', '50.00', '45.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '95.75', '75.50', '100.00', '0.00', '0.00', '70.50'),
(129, 20170199, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '79.75', '0.00', '0.00', '0.00', '16.00', '49.00', '46.00', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '44.75', '60.75', '70.00', '0.00', '0.00', '68.25'),
(130, 20170201, 1, 1, 0, '2', 4, 1, 0, '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '0.00', '0.00', '25.00', '49.00', '44.50', '0.00', '18-07-2018 12:18:08', '0.00', '18-07-2018 13:29:04', '0', '0.00', '', 0, '0.00', '16.25', '30.50', '27.00', '0.00', '0.00', '26.00'),
(131, 20170111, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '48.50', '50.00', '50.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '99.00', '100.00', '50.00', '0.00', '0.00', '100.00'),
(132, 20170102, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '48.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '98.75', '100.00', '50.00', '0.00', '0.00', '100.00'),
(133, 20170224, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.00', '0.00', '0.00', '0.00', '44.50', '50.00', '50.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '96.00', '97.75', '50.00', '0.00', '0.00', '94.25'),
(134, 2170225, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '47.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '96.50', '99.75', '50.00', '0.00', '0.00', '98.75'),
(135, 20170103, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '47.50', '50.00', '50.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '96.75', '99.25', '50.00', '0.00', '0.00', '98.50'),
(136, 20170226, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '91.50', '0.00', '0.00', '0.00', '48.50', '40.00', '49.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '95.00', '93.75', '50.00', '0.00', '0.00', '87.00'),
(137, 20170106, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '75.00', '0.00', '0.00', '0.00', '48.50', '50.00', '40.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '75.00', '75.00', '50.00', '0.00', '0.00', '74.50'),
(138, 20170104, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '94.50', '0.00', '0.00', '0.00', '48.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '91.50', '95.75', '50.00', '0.00', '0.00', '99.50'),
(139, 20170113, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '93.25', '0.00', '0.00', '0.00', '46.50', '50.00', '45.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:35', '0', '0.00', '', 0, '0.00', '93.00', '97.25', '50.00', '0.00', '0.00', '96.50'),
(140, 20170227, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '87.00', '0.00', '0.00', '0.00', '47.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:34', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '90.50', '92.75', '50.00', '0.00', '0.00', '98.75'),
(141, 20170228, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.75', '0.00', '0.00', '0.00', '44.50', '50.00', '0.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.00', '99.50', '0.00', '0.00', '0.00', '99.50'),
(142, 20170229, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.75', '0.00', '0.00', '0.00', '45.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '97.75', '99.00', '50.00', '0.00', '0.00', '98.50'),
(143, 20170230, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.00', '0.00', '0.00', '0.00', '43.00', '50.00', '43.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '97.75', '98.25', '50.00', '0.00', '0.00', '98.75'),
(144, 20170001, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '90.75', '0.00', '0.00', '0.00', '41.00', '48.00', '36.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '88.75', '87.00', '50.00', '0.00', '0.00', '84.00'),
(145, 20170231, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '45.00', '49.00', '49.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '98.75', '97.75', '50.00', '0.00', '0.00', '98.25'),
(146, 20170270, 1, 2, 0, '1', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '74.50', '0.00', '0.00', '0.00', '38.00', '40.00', '43.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '66.50', '58.00', '30.00', '0.00', '0.00', '67.00'),
(147, 20170108, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '100.00', '100.00', '50.00', '0.00', '0.00', '100.00'),
(148, 20170234, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '50.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '100.00', '99.38', '50.00', '0.00', '0.00', '100.00'),
(149, 20170107, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '49.50', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '100.00', '100.00', '0.00', '0.00', '0.00', '100.00'),
(150, 20170105, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '49.50', '50.00', '49.50', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '100.00', '99.50', '50.00', '0.00', '0.00', '100.00'),
(151, 20170110, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '47.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.00', '97.00', '50.00', '0.00', '0.00', '100.00'),
(152, 20170235, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '48.50', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '100.00', '99.00', '50.00', '0.00', '0.00', '100.00'),
(153, 20170236, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '48.50', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.50', '98.75', '50.00', '0.00', '0.00', '100.00'),
(154, 20170238, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '47.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.75', '98.00', '50.00', '0.00', '0.00', '100.00'),
(155, 20170237, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '42.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '98.50', '93.50', '50.00', '0.00', '0.00', '99.25'),
(156, 20170239, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '42.50', '48.00', '47.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.00', '99.25', '50.00', '0.00', '0.00', '98.00'),
(157, 20170269, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '46.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.25', '92.75', '50.00', '0.00', '0.00', '96.75'),
(158, 20170240, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '44.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.75', '98.00', '50.00', '0.00', '0.00', '98.50'),
(159, 20170109, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.50', '0.00', '0.00', '0.00', '40.00', '50.00', '50.00', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.50', '93.75', '50.00', '0.00', '0.00', '99.50'),
(160, 20170241, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '48.00', '48.00', '40.50', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '99.00', '93.00', '50.00', '0.00', '0.00', '99.50'),
(161, 20170242, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.00', '0.00', '0.00', '0.00', '47.50', '50.00', '47.50', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:36', '0', '0.00', '', 0, '0.00', '96.00', '85.50', '50.00', '0.00', '0.00', '24.75'),
(162, 20170243, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '77.75', '0.00', '0.00', '0.00', '40.00', '49.00', '46.50', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:37', '0', '0.00', '', 0, '0.00', '66.75', '67.25', '50.00', '0.00', '0.00', '84.75'),
(163, 20170244, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '47.00', '50.00', '48.50', '0.00', '18-07-2018 14:33:35', '0.00', '18-07-2018 16:26:37', '0', '0.00', '', 0, '0.00', '100.00', '94.50', '50.00', '0.00', '0.00', '99.25'),
(164, 20170245, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '48.50', '50.00', '50.00', '0.00', '18-07-2018 14:33:36', '0.00', '18-07-2018 16:26:37', '0', '0.00', '', 0, '0.00', '98.25', '97.75', '50.00', '0.00', '0.00', '98.50'),
(165, 20170246, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.25', '0.00', '0.00', '0.00', '36.00', '50.00', '48.00', '0.00', '18-07-2018 14:33:36', '0.00', '18-07-2018 16:26:37', '0', '0.00', '', 0, '0.00', '98.25', '97.00', '50.00', '0.00', '0.00', '98.50'),
(166, 20170247, 1, 2, 0, '2', 2, 1, 0, '0.00', '0.00', '0.00', '0.00', '80.75', '0.00', '0.00', '0.00', '34.00', '40.00', '40.00', '0.00', '18-07-2018 14:33:36', '0.00', '18-07-2018 16:26:37', '0', '0.00', '', 0, '0.00', '70.25', '56.00', '37.00', '0.00', '0.00', '19.00'),
(167, 20170214, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.00', '0.00', '0.00', '0.00', '49.50', '50.00', '50.00', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '100.00', '97.50', '72.50', '0.00', '0.00', '99.50'),
(168, 20170119, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '47.50', '50.00', '47.50', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '98.25', '98.75', '74.50', '0.00', '0.00', '99.50'),
(169, 20170216, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '48.00', '50.00', '45.50', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '99.50', '99.50', '74.50', '0.00', '0.00', '99.00'),
(170, 20170217, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '49.50', '50.00', '50.00', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '100.00', '99.00', '75.00', '0.00', '0.00', '100.00'),
(171, 20170121, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '47.50', '50.00', '46.50', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '99.75', '100.00', '75.00', '0.00', '0.00', '100.00'),
(172, 20170116, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '48.50', '50.00', '50.00', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '98.50', '99.50', '74.00', '0.00', '0.00', '99.50'),
(173, 20170218, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '25.00', '0.00', '0.00', '0.00', '0.00', '50.00', '50.00', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '24.50', '97.00', '72.50', '0.00', '0.00', '96.75'),
(174, 1014, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.00', '0.00', '0.00', '0.00', '44.00', '50.00', '50.00', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '95.75', '92.75', '75.00', '0.00', '0.00', '84.00'),
(175, 20170219, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '45.00', '50.00', '43.50', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '98.75', '96.50', '73.50', '0.00', '0.00', '98.50'),
(176, 20170220, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '44.00', '50.00', '34.50', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '99.50', '98.10', '74.50', '0.00', '0.00', '91.25'),
(177, 20170125, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '46.50', '40.00', '39.50', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '99.00', '99.50', '75.00', '0.00', '0.00', '99.50'),
(178, 20170221, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.50', '0.00', '0.00', '0.00', '48.00', '50.00', '42.50', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '95.75', '89.50', '74.50', '0.00', '0.00', '90.75'),
(179, 20170222, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.25', '0.00', '0.00', '0.00', '43.00', '49.00', '50.00', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '98.50', '97.00', '74.00', '0.00', '0.00', '91.75'),
(180, 20170277, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '90.00', '0.00', '0.00', '0.00', '45.00', '46.00', '50.00', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '89.50', '80.50', '75.00', '0.00', '0.00', '78.00');
INSERT INTO `tbl_stu_marks_summary` (`Marks_Sum_ID`, `Marks_Sum_Student_ID`, `Marks_Sum_Medium_ID`, `Marks_Sum_Shift_ID`, `Marks_Sum_Group_ID`, `Marks_Sum_Sectoin_ID`, `Marks_Sum_Class_ID`, `Marks_Sum_Exam_code_ID`, `Marks_Sum_sub_code_ID`, `Marks_Sum_Bangla_Ist`, `Marks_Sum_Bangla_2nd`, `Marks_Sum_English_1st`, `Marks_Sum_English_2nd`, `Marks_Sum_Mathematics`, `Marks_Sum_Science`, `Marks_Sum_B_G_Science`, `Marks_Sum_ICT`, `Marks_Sum_Drawing`, `Marks_Sum_Moktab`, `Marks_Sum_Practical`, `Marks_Sum_Grand_total`, `Marks_Sum_Created`, `Marks_Sum_Religion`, `Marks_Sum_Modified`, `Marks_Sum_Avg`, `Marks_Sum_GPA`, `Marks_Sum_Grade`, `Marks_Sum_Merit_position`, `Marks_Sum_Computer`, `Marks_Sum_Bangla`, `Marks_Sum_English`, `Marks_Sum_GKnowledge`, `Marks_Sum_Agri_H_Science`, `Marks_Sum_Environment`, `Marks_Sum_Arabic`) VALUES
(181, 20170223, 1, 2, 0, '1', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '82.50', '0.00', '0.00', '0.00', '46.50', '40.00', '50.00', '0.00', '18-07-2018 17:19:55', '0.00', '18-07-2018 17:37:07', '0', '0.00', '', 0, '0.00', '82.25', '90.75', '74.00', '0.00', '0.00', '84.50'),
(182, 20170204, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '50.00', '50.00', '50.00', '0.00', '18-07-2018 17:45:08', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '100.00', '100.00', '75.00', '0.00', '0.00', '100.00'),
(183, 20170124, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.75', '0.00', '0.00', '0.00', '50.00', '50.00', '50.00', '0.00', '18-07-2018 17:45:08', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '100.00', '100.00', '75.00', '0.00', '0.00', '100.00'),
(184, 20170123, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '50.00', '49.00', '50.00', '0.00', '18-07-2018 17:45:08', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '100.00', '99.50', '75.00', '0.00', '0.00', '100.00'),
(185, 20170122, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.75', '0.00', '0.00', '0.00', '49.00', '50.00', '50.00', '0.00', '18-07-2018 17:45:08', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '98.50', '94.50', '75.00', '0.00', '0.00', '93.00'),
(186, 20170118, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.75', '0.00', '0.00', '0.00', '48.00', '50.00', '45.50', '0.00', '18-07-2018 17:45:08', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '99.50', '100.00', '75.00', '0.00', '0.00', '99.75'),
(187, 20170115, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.25', '0.00', '0.00', '0.00', '48.00', '50.00', '50.00', '0.00', '18-07-2018 17:45:08', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '100.00', '98.75', '75.00', '0.00', '0.00', '98.50'),
(188, 20170120, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.25', '0.00', '0.00', '0.00', '45.00', '50.00', '49.00', '0.00', '18-07-2018 17:45:08', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '97.00', '85.50', '69.00', '0.00', '0.00', '88.25'),
(189, 20170205, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.50', '0.00', '0.00', '0.00', '49.00', '50.00', '50.00', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '97.63', '86.25', '74.00', '0.00', '0.00', '88.75'),
(190, 20170206, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.75', '0.00', '0.00', '0.00', '44.00', '49.00', '40.50', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '92.25', '61.75', '68.00', '0.00', '0.00', '76.50'),
(191, 20170207, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '23.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '25.00', '24.25', '0.00', '0.00', '0.00', '23.25'),
(192, 20170208, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.00', '0.00', '0.00', '0.00', '48.00', '50.00', '50.00', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '98.00', '96.50', '74.50', '0.00', '0.00', '98.50'),
(193, 20170210, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '24.25', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '24.25', '20.50', '0.00', '0.00', '0.00', '23.25'),
(194, 20170211, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.25', '0.00', '0.00', '0.00', '42.00', '50.00', '47.50', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '95.25', '97.50', '74.00', '0.00', '0.00', '91.00'),
(195, 20170212, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.75', '0.00', '0.00', '0.00', '48.00', '49.00', '50.00', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '92.75', '79.75', '72.50', '0.00', '0.00', '80.00'),
(196, 20170213, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '82.50', '0.00', '0.00', '0.00', '46.00', '50.00', '43.00', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '73.50', '61.25', '69.00', '0.00', '0.00', '49.25'),
(197, 20170274, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '84.00', '0.00', '0.00', '0.00', '45.00', '48.00', '40.00', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '84.50', '78.00', '73.00', '0.00', '0.00', '73.00'),
(198, 20170335, 1, 2, 0, '2', 3, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18-07-2018 17:45:09', '0.00', '18-07-2018 18:01:03', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(199, 20170018, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.00', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '98.13', '97.88', '50.00', '0.00', '0.00', '97.00'),
(200, 20170019, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.13', '0.00', '0.00', '0.00', '0.00', '0.00', '49.00', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '95.25', '92.13', '50.00', '0.00', '0.00', '91.50'),
(201, 20170248, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '99.88', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '99.50', '99.50', '50.00', '0.00', '0.00', '99.13'),
(202, 20170330, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.38', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '98.00', '98.75', '50.00', '0.00', '0.00', '98.88'),
(203, 20170030, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.88', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '98.25', '98.00', '50.00', '0.00', '0.00', '97.88'),
(204, 20170028, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.00', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '96.00', '96.75', '50.00', '0.00', '0.00', '96.63'),
(205, 20170039, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '90.50', '0.00', '0.00', '0.00', '0.00', '0.00', '44.50', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '90.88', '86.50', '50.00', '0.00', '0.00', '92.00'),
(206, 20170037, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '77.50', '0.00', '0.00', '0.00', '0.00', '0.00', '41.00', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '80.88', '83.00', '50.00', '0.00', '0.00', '81.50'),
(207, 20170022, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '96.63', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:25', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '97.00', '96.88', '50.00', '0.00', '0.00', '95.75'),
(208, 20170032, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.25', '0.00', '0.00', '0.00', '0.00', '0.00', '42.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '98.13', '98.38', '50.00', '0.00', '0.00', '96.00'),
(209, 1002, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.75', '0.00', '0.00', '0.00', '0.00', '0.00', '39.50', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '96.88', '97.75', '50.00', '0.00', '0.00', '96.75'),
(210, 20170250, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '96.88', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '97.13', '97.88', '50.00', '0.00', '0.00', '98.25'),
(211, 20170257, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '79.13', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '79.88', '79.00', '50.00', '0.00', '0.00', '79.25'),
(212, 20170251, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.75', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '92.00', '87.13', '50.00', '0.00', '0.00', '94.63'),
(213, 20170252, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.88', '0.00', '0.00', '0.00', '0.00', '0.00', '47.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '98.13', '98.50', '50.00', '0.00', '0.00', '96.50'),
(214, 20170253, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '92.75', '0.00', '0.00', '0.00', '0.00', '0.00', '49.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '95.00', '94.13', '50.00', '0.00', '0.00', '95.00'),
(215, 1004, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '84.13', '0.00', '0.00', '0.00', '0.00', '0.00', '42.50', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:29', '0', '0.00', '', 0, '0.00', '86.38', '73.38', '50.00', '0.00', '0.00', '68.13'),
(216, 20170262, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '85.38', '0.00', '0.00', '0.00', '0.00', '0.00', '48.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '92.63', '90.50', '25.00', '0.00', '0.00', '84.75'),
(217, 20170256, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '83.00', '0.00', '0.00', '0.00', '0.00', '0.00', '44.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '85.88', '60.00', '40.00', '0.00', '0.00', '68.88'),
(218, 20170038, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '67.00', '0.00', '0.00', '0.00', '0.00', '0.00', '44.50', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '83.50', '50.00', '30.00', '0.00', '0.00', '41.00'),
(219, 20170031, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '47.75', '0.00', '0.00', '0.00', '0.00', '0.00', '37.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '68.50', '74.75', '20.00', '0.00', '0.00', '37.50'),
(220, 20170024, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '95.00', '0.00', '0.00', '0.00', '0.00', '0.00', '40.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '97.25', '98.25', '50.00', '0.00', '0.00', '86.25'),
(221, 20170017, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '97.75', '0.00', '0.00', '0.00', '0.00', '0.00', '48.00', '0.00', '18-07-2018 18:17:26', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '96.00', '93.75', '50.00', '0.00', '0.00', '97.50'),
(222, 20170332, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '89.25', '0.00', '0.00', '0.00', '0.00', '0.00', '46.50', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '93.75', '95.50', '50.00', '0.00', '0.00', '90.25'),
(223, 20170021, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '89.25', '0.00', '0.00', '0.00', '0.00', '0.00', '42.50', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '93.25', '94.50', '50.00', '0.00', '0.00', '93.00'),
(224, 20170333, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '91.50', '0.00', '0.00', '0.00', '0.00', '0.00', '42.50', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '95.00', '94.75', '50.00', '0.00', '0.00', '99.00'),
(225, 20170259, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(226, 20170334, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '78.75', '0.00', '0.00', '0.00', '0.00', '0.00', '38.50', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '78.75', '75.25', '50.00', '0.00', '0.00', '70.25'),
(227, 20170027, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '80.75', '0.00', '0.00', '0.00', '0.00', '0.00', '30.50', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '68.75', '72.75', '50.00', '0.00', '0.00', '59.75'),
(228, 20170023, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '100.00', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '99.75', '100.00', '50.00', '0.00', '0.00', '99.50'),
(229, 20170029, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '78.75', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '88.75', '84.50', '50.00', '0.00', '0.00', '62.50'),
(230, 20170036, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '98.75', '0.00', '0.00', '0.00', '0.00', '0.00', '49.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '97.25', '95.50', '50.00', '0.00', '0.00', '97.00'),
(231, 20170261, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '92.50', '0.00', '0.00', '0.00', '0.00', '0.00', '49.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '95.05', '95.25', '50.00', '0.00', '0.00', '82.00'),
(232, 20170255, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '85.75', '0.00', '0.00', '0.00', '0.00', '0.00', '48.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '84.25', '87.75', '50.00', '0.00', '0.00', '79.25'),
(233, 20170263, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(234, 20170264, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:30', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(235, 20170265, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '69.50', '0.00', '0.00', '0.00', '0.00', '0.00', '48.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:31', '0', '0.00', '', 0, '0.00', '81.50', '69.75', '50.00', '0.00', '0.00', '71.00'),
(236, 20170266, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '96.25', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:31', '0', '0.00', '', 0, '0.00', '96.50', '96.00', '50.00', '0.00', '0.00', '99.00'),
(237, 20170267, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '61.50', '0.00', '0.00', '0.00', '0.00', '0.00', '46.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:31', '0', '0.00', '', 0, '0.00', '95.25', '63.50', '40.00', '0.00', '0.00', '41.25'),
(238, 20170272, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '96.50', '0.00', '0.00', '0.00', '0.00', '0.00', '50.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:31', '0', '0.00', '', 0, '0.00', '98.50', '99.50', '50.00', '0.00', '0.00', '0.00'),
(239, 20170303, 1, 2, 0, '2', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:31', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00'),
(240, 20170331, 1, 2, 0, '1', 1, 1, 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '18-07-2018 18:17:27', '0.00', '18-07-2018 19:06:31', '0', '0.00', '', 0, '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stu_password`
--

CREATE TABLE `tbl_stu_password` (
  `stu_pass_id` int(11) NOT NULL,
  `stu_pass_unique_id` int(11) NOT NULL,
  `stu_pass_username` varchar(32) NOT NULL,
  `stu_pass_role_id` int(3) NOT NULL,
  `stu_pass_password` int(11) NOT NULL,
  `stu_pass_created` varchar(32) NOT NULL,
  `stu_pass_modified` varchar(32) NOT NULL,
  `stu_pass_stutas` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_stu_password`
--

INSERT INTO `tbl_stu_password` (`stu_pass_id`, `stu_pass_unique_id`, `stu_pass_username`, `stu_pass_role_id`, `stu_pass_password`, `stu_pass_created`, `stu_pass_modified`, `stu_pass_stutas`) VALUES
(1, 20170018, '20170018', 5, 3285, '18-07-2018 22:59:49', '18-07-2018 22:59:49', 1),
(2, 20170248, '20170248', 5, 2678, '18-07-2018 23:46:52', '18-07-2018 23:46:52', 1),
(3, 20170330, '20170330', 5, 3404, '18-07-2018 23:47:21', '18-07-2018 23:47:21', 1),
(4, 20170030, '20170030', 5, 8358, '18-07-2018 23:47:57', '18-07-2018 23:47:57', 1),
(5, 20170028, '20170028', 5, 3446, '18-07-2018 23:48:06', '18-07-2018 23:48:06', 1),
(6, 20170039, '20170039', 5, 5760, '18-07-2018 23:48:20', '18-07-2018 23:48:20', 1),
(7, 20170037, '20170037', 5, 3015, '18-07-2018 23:48:35', '18-07-2018 23:48:35', 1),
(8, 20170022, '20170022', 5, 1888, '18-07-2018 23:48:47', '18-07-2018 23:48:47', 1),
(9, 20170032, '20170032', 5, 9009, '18-07-2018 23:48:56', '18-07-2018 23:48:56', 1),
(10, 20170250, '20170250', 5, 2207, '18-07-2018 23:57:03', '18-07-2018 23:57:03', 1),
(11, 20170257, '20170257', 5, 2400, '18-07-2018 23:57:14', '18-07-2018 23:57:14', 1),
(12, 20170251, '20170251', 5, 7964, '18-07-2018 23:57:25', '18-07-2018 23:57:25', 1),
(13, 20170252, '20170252', 5, 3389, '18-07-2018 23:57:42', '18-07-2018 23:57:42', 1),
(14, 20170253, '20170253', 5, 5114, '18-07-2018 23:57:51', '18-07-2018 23:57:51', 1),
(15, 20170262, '20170262', 5, 4250, '18-07-2018 23:58:44', '18-07-2018 23:58:44', 1),
(16, 20170256, '20170256', 5, 1509, '18-07-2018 23:58:52', '18-07-2018 23:58:52', 1),
(17, 20170038, '20170038', 5, 5647, '18-07-2018 23:59:02', '18-07-2018 23:59:02', 1),
(18, 20170031, '20170031', 5, 5796, '18-07-2018 23:59:12', '18-07-2018 23:59:12', 1),
(19, 20170024, '20170024', 5, 9523, '18-07-2018 23:59:26', '18-07-2018 23:59:26', 1),
(20, 20170017, '20170017', 5, 6791, '18-07-2018 23:59:34', '18-07-2018 23:59:34', 1),
(21, 20170332, '20170332', 5, 5324, '18-07-2018 23:59:41', '18-07-2018 23:59:41', 1),
(22, 20170021, '20170021', 5, 4812, '18-07-2018 23:59:58', '18-07-2018 23:59:58', 1),
(23, 20170333, '20170333', 5, 6314, '19-07-2018 00:00:06', '19-07-2018 00:00:06', 1),
(24, 20170259, '20170259', 5, 6939, '19-07-2018 00:00:14', '19-07-2018 00:00:14', 1),
(25, 20170334, '20170334', 5, 2825, '19-07-2018 00:00:21', '19-07-2018 00:00:21', 1),
(26, 20170027, '20170027', 5, 6286, '19-07-2018 00:00:27', '19-07-2018 00:00:27', 1),
(27, 20170023, '20170023', 5, 9274, '19-07-2018 00:00:35', '19-07-2018 00:00:35', 1),
(28, 20170029, '20170029', 5, 6002, '19-07-2018 00:00:41', '19-07-2018 00:00:41', 1),
(29, 20170036, '20170036', 5, 1888, '19-07-2018 00:00:51', '19-07-2018 00:00:51', 1),
(30, 20170261, '20170261', 5, 7665, '19-07-2018 00:01:04', '19-07-2018 00:01:04', 1),
(31, 20170255, '20170255', 5, 1593, '19-07-2018 00:01:12', '19-07-2018 00:01:12', 1),
(32, 20170263, '20170263', 5, 3326, '19-07-2018 00:01:19', '19-07-2018 00:01:19', 1),
(33, 20170264, '20170264', 5, 1634, '19-07-2018 00:01:26', '19-07-2018 00:01:26', 1),
(34, 20170265, '20170265', 5, 7343, '19-07-2018 00:01:38', '19-07-2018 00:01:38', 1),
(35, 20170266, '20170266', 5, 5644, '19-07-2018 00:01:45', '19-07-2018 00:01:45', 1),
(36, 20170267, '20170267', 5, 4037, '19-07-2018 00:01:52', '19-07-2018 00:01:52', 1),
(37, 20170272, '20170272', 5, 3758, '19-07-2018 00:01:59', '19-07-2018 00:01:59', 1),
(38, 20170303, '20170303', 5, 7496, '19-07-2018 00:02:08', '19-07-2018 00:02:08', 1),
(39, 20170303, '20170303', 5, 7496, '19-07-2018 00:02:19', '19-07-2018 00:02:19', 1),
(40, 20170111, '20170111', 5, 9462, '19-07-2018 00:03:26', '19-07-2018 00:03:26', 1),
(41, 20170102, '20170102', 5, 3946, '19-07-2018 00:06:01', '19-07-2018 00:06:01', 1),
(42, 20170224, '20170224', 5, 5110, '19-07-2018 00:06:14', '19-07-2018 00:06:14', 1),
(43, 2170225, '2170225', 5, 4594, '19-07-2018 00:06:23', '19-07-2018 00:06:23', 1),
(44, 20170103, '20170103', 5, 4607, '19-07-2018 00:06:30', '19-07-2018 00:06:30', 1),
(45, 20170226, '20170226', 5, 2014, '19-07-2018 00:06:36', '19-07-2018 00:06:36', 1),
(46, 20170106, '20170106', 5, 4687, '19-07-2018 00:06:41', '19-07-2018 00:06:41', 1),
(47, 20170104, '20170104', 5, 1839, '19-07-2018 00:06:50', '19-07-2018 00:06:50', 1),
(48, 20170113, '20170113', 5, 3610, '19-07-2018 00:07:14', '19-07-2018 00:07:14', 1),
(49, 20170227, '20170227', 5, 4233, '19-07-2018 00:07:21', '19-07-2018 00:07:21', 1),
(50, 20170228, '20170228', 5, 1249, '19-07-2018 00:07:27', '19-07-2018 00:07:27', 1),
(51, 20170229, '20170229', 5, 1412, '19-07-2018 00:07:34', '19-07-2018 00:07:34', 1),
(52, 20170230, '20170230', 5, 4596, '19-07-2018 00:07:40', '19-07-2018 00:07:40', 1),
(53, 20170001, '20170001', 5, 2731, '19-07-2018 00:07:48', '19-07-2018 00:07:48', 1),
(54, 20170231, '20170231', 5, 7059, '19-07-2018 00:07:55', '19-07-2018 00:07:55', 1),
(55, 20170270, '20170270', 5, 4945, '19-07-2018 00:08:01', '19-07-2018 00:08:01', 1),
(56, 20170108, '20170108', 5, 2935, '19-07-2018 00:08:09', '19-07-2018 00:08:09', 1),
(57, 20170234, '20170234', 5, 4776, '19-07-2018 00:08:15', '19-07-2018 00:08:15', 1),
(58, 20170107, '20170107', 5, 1790, '19-07-2018 00:08:23', '19-07-2018 00:08:23', 1),
(59, 20170105, '20170105', 5, 2800, '19-07-2018 00:08:34', '19-07-2018 00:08:34', 1),
(60, 20170110, '20170110', 5, 3468, '19-07-2018 00:08:43', '19-07-2018 00:08:43', 1),
(61, 20170235, '20170235', 5, 9226, '19-07-2018 00:08:50', '19-07-2018 00:08:50', 1),
(62, 20170236, '20170236', 5, 5050, '19-07-2018 00:08:56', '19-07-2018 00:08:56', 1),
(63, 20170238, '20170238', 5, 2225, '19-07-2018 00:09:16', '19-07-2018 00:09:16', 1),
(64, 20170237, '20170237', 5, 5544, '19-07-2018 00:09:30', '19-07-2018 00:09:30', 1),
(65, 20170239, '20170239', 5, 9425, '19-07-2018 00:09:38', '19-07-2018 00:09:38', 1),
(66, 20170269, '20170269', 5, 5484, '19-07-2018 00:09:47', '19-07-2018 00:09:47', 1),
(67, 20170240, '20170240', 5, 9587, '19-07-2018 00:09:57', '19-07-2018 00:09:57', 1),
(68, 20170109, '20170109', 5, 6041, '19-07-2018 00:10:05', '19-07-2018 00:10:05', 1),
(69, 20170241, '20170241', 5, 9610, '19-07-2018 00:10:14', '19-07-2018 00:10:14', 1),
(70, 20170242, '20170242', 5, 2729, '19-07-2018 00:10:22', '19-07-2018 00:10:22', 1),
(71, 20170243, '20170243', 5, 6641, '19-07-2018 00:10:29', '19-07-2018 00:10:29', 1),
(72, 20170244, '20170244', 5, 8059, '19-07-2018 00:10:34', '19-07-2018 00:10:34', 1),
(73, 20170245, '20170245', 5, 6672, '19-07-2018 00:10:42', '19-07-2018 00:10:42', 1),
(74, 20170246, '20170246', 5, 6991, '19-07-2018 00:11:03', '19-07-2018 00:11:03', 1),
(75, 20170247, '20170247', 5, 5635, '19-07-2018 00:11:10', '19-07-2018 00:11:10', 1),
(76, 20170214, '20170214', 5, 3952, '19-07-2018 00:13:21', '19-07-2018 00:13:21', 1),
(77, 20170119, '20170119', 5, 7134, '19-07-2018 00:13:42', '19-07-2018 00:13:42', 1),
(78, 20170216, '20170216', 5, 8562, '19-07-2018 00:13:51', '19-07-2018 00:13:51', 1),
(79, 20170217, '20170217', 5, 6227, '19-07-2018 00:13:57', '19-07-2018 00:13:57', 1),
(80, 20170121, '20170121', 5, 9750, '19-07-2018 00:14:03', '19-07-2018 00:14:03', 1),
(81, 20170116, '20170116', 5, 3490, '19-07-2018 00:14:10', '19-07-2018 00:14:10', 1),
(82, 20170218, '20170218', 5, 3069, '19-07-2018 00:14:18', '19-07-2018 00:14:18', 1),
(83, 20170219, '20170219', 5, 1319, '19-07-2018 00:15:37', '19-07-2018 00:15:37', 1),
(84, 20170220, '20170220', 5, 1532, '19-07-2018 00:15:45', '19-07-2018 00:15:45', 1),
(85, 20170125, '20170125', 5, 5187, '19-07-2018 00:15:53', '19-07-2018 00:15:53', 1),
(86, 20170221, '20170221', 5, 3084, '19-07-2018 00:15:59', '19-07-2018 00:15:59', 1),
(87, 20170222, '20170222', 5, 6149, '19-07-2018 00:16:06', '19-07-2018 00:16:06', 1),
(88, 20170277, '20170277', 5, 7338, '19-07-2018 00:16:11', '19-07-2018 00:16:11', 1),
(89, 20170223, '20170223', 5, 9481, '19-07-2018 00:16:18', '19-07-2018 00:16:18', 1),
(90, 20170204, '20170204', 5, 1410, '19-07-2018 00:16:25', '19-07-2018 00:16:25', 1),
(91, 20170124, '20170124', 5, 9549, '19-07-2018 00:16:31', '19-07-2018 00:16:31', 1),
(92, 20170123, '20170123', 5, 2333, '19-07-2018 00:16:37', '19-07-2018 00:16:37', 1),
(93, 20170122, '20170122', 5, 6009, '19-07-2018 00:16:44', '19-07-2018 00:16:44', 1),
(94, 20170118, '20170118', 5, 5563, '19-07-2018 00:16:51', '19-07-2018 00:16:51', 1),
(95, 20170115, '20170115', 5, 4298, '19-07-2018 00:17:01', '19-07-2018 00:17:01', 1),
(96, 20170120, '20170120', 5, 4244, '19-07-2018 00:17:12', '19-07-2018 00:17:12', 1),
(97, 20170205, '20170205', 5, 5606, '19-07-2018 00:17:23', '19-07-2018 00:17:23', 1),
(98, 20170206, '20170206', 5, 5532, '19-07-2018 00:17:31', '19-07-2018 00:17:31', 1),
(99, 20170207, '20170207', 5, 7664, '19-07-2018 00:17:39', '19-07-2018 00:17:39', 1),
(100, 20170208, '20170208', 5, 8538, '19-07-2018 00:17:45', '19-07-2018 00:17:45', 1),
(101, 20170210, '20170210', 5, 7299, '19-07-2018 00:17:52', '19-07-2018 00:17:52', 1),
(102, 20170211, '20170211', 5, 3196, '19-07-2018 00:17:58', '19-07-2018 00:17:58', 1),
(103, 20170212, '20170212', 5, 4003, '19-07-2018 00:18:04', '19-07-2018 00:18:04', 1),
(104, 20170213, '20170213', 5, 2158, '19-07-2018 00:18:11', '19-07-2018 00:18:11', 1),
(105, 20170274, '20170274', 5, 1990, '19-07-2018 00:18:21', '19-07-2018 00:18:21', 1),
(106, 20170335, '20170335', 5, 6777, '19-07-2018 00:18:28', '19-07-2018 00:18:28', 1),
(107, 20170091, '20170091', 5, 4052, '19-07-2018 00:19:32', '19-07-2018 00:19:32', 1),
(108, 20170179, '20170179', 5, 4505, '19-07-2018 00:19:38', '19-07-2018 00:19:38', 1),
(109, 20170180, '20170180', 5, 3691, '19-07-2018 00:19:43', '19-07-2018 00:19:43', 1),
(110, 20170181, '20170181', 5, 7519, '19-07-2018 00:19:49', '19-07-2018 00:19:49', 1),
(111, 20170182, '20170182', 5, 9735, '19-07-2018 00:19:55', '19-07-2018 00:19:55', 1),
(112, 20170183, '20170183', 5, 4564, '19-07-2018 00:20:01', '19-07-2018 00:20:01', 1),
(113, 20170184, '20170184', 5, 4711, '19-07-2018 00:20:06', '19-07-2018 00:20:06', 1),
(114, 20170185, '20170185', 5, 3571, '19-07-2018 00:20:11', '19-07-2018 00:20:11', 1),
(115, 20170096, '20170096', 5, 6483, '19-07-2018 00:20:17', '19-07-2018 00:20:17', 1),
(116, 20170186, '20170186', 5, 3093, '19-07-2018 00:20:23', '19-07-2018 00:20:23', 1),
(117, 20170092, '20170092', 5, 3121, '19-07-2018 00:20:29', '19-07-2018 00:20:29', 1),
(118, 20170097, '20170097', 5, 4975, '19-07-2018 00:20:58', '19-07-2018 00:20:58', 1),
(119, 20170188, '20170188', 5, 7696, '19-07-2018 00:21:09', '19-07-2018 00:21:09', 1),
(120, 20170094, '20170094', 5, 7361, '19-07-2018 00:21:17', '19-07-2018 00:21:17', 1),
(121, 20170095, '20170095', 5, 4087, '19-07-2018 00:21:22', '19-07-2018 00:21:22', 1),
(122, 20170189, '20170189', 5, 6409, '19-07-2018 00:21:28', '19-07-2018 00:21:28', 1),
(123, 20170190, '20170190', 5, 5125, '19-07-2018 00:21:33', '19-07-2018 00:21:33', 1),
(124, 20170203, '20170203', 5, 1810, '19-07-2018 00:21:39', '19-07-2018 00:21:39', 1),
(125, 20170275, '20170275', 5, 9759, '19-07-2018 00:21:45', '19-07-2018 00:21:45', 1),
(126, 20170088, '20170088', 5, 2844, '19-07-2018 00:21:51', '19-07-2018 00:21:51', 1),
(127, 20170087, '20170087', 5, 8306, '19-07-2018 00:21:56', '19-07-2018 00:21:56', 1),
(128, 20170084, '20170084', 5, 8658, '19-07-2018 00:22:03', '19-07-2018 00:22:03', 1),
(129, 20170085, '20170085', 5, 9093, '19-07-2018 00:22:09', '19-07-2018 00:22:09', 1),
(130, 20170086, '20170086', 5, 9712, '19-07-2018 00:22:16', '19-07-2018 00:22:16', 1),
(131, 20170191, '20170191', 5, 9018, '19-07-2018 00:22:23', '19-07-2018 00:22:23', 1),
(132, 20170082, '20170082', 5, 6718, '19-07-2018 00:22:29', '19-07-2018 00:22:29', 1),
(133, 20170089, '20170089', 5, 8368, '19-07-2018 00:22:34', '19-07-2018 00:22:34', 1),
(134, 20170192, '20170192', 5, 4546, '19-07-2018 00:22:39', '19-07-2018 00:22:39', 1),
(135, 20170081, '20170081', 5, 5307, '19-07-2018 00:22:45', '19-07-2018 00:22:45', 1),
(136, 20170194, '20170194', 5, 5088, '19-07-2018 00:22:50', '19-07-2018 00:22:50', 1),
(137, 20170195, '20170195', 5, 5582, '19-07-2018 00:22:56', '19-07-2018 00:22:56', 1),
(138, 20170100, '20170100', 5, 3579, '19-07-2018 00:23:02', '19-07-2018 00:23:02', 1),
(139, 20170099, '20170099', 5, 8375, '19-07-2018 00:23:08', '19-07-2018 00:23:08', 1),
(140, 20170196, '20170196', 5, 5051, '19-07-2018 00:23:14', '19-07-2018 00:23:14', 1),
(141, 20170198, '20170198', 5, 9344, '19-07-2018 00:23:19', '19-07-2018 00:23:19', 1),
(142, 20170083, '20170083', 5, 6324, '19-07-2018 00:23:24', '19-07-2018 00:23:24', 1),
(143, 20170199, '20170199', 5, 7797, '19-07-2018 00:24:07', '19-07-2018 00:24:07', 1),
(144, 20170201, '20170201', 5, 8224, '19-07-2018 00:24:15', '19-07-2018 00:24:15', 1),
(145, 20170164, '20170164', 5, 3772, '19-07-2018 00:25:09', '19-07-2018 00:25:09', 1),
(146, 20170079, '20170079', 5, 7692, '19-07-2018 00:25:18', '19-07-2018 00:25:18', 1),
(147, 20170080, '20170080', 5, 8033, '19-07-2018 00:25:24', '19-07-2018 00:25:24', 1),
(148, 20170074, '20170074', 5, 5553, '19-07-2018 00:25:29', '19-07-2018 00:25:29', 1),
(149, 20170076, '20170076', 5, 5373, '19-07-2018 00:25:34', '19-07-2018 00:25:34', 1),
(150, 20170077, '20170077', 5, 6366, '19-07-2018 00:25:39', '19-07-2018 00:25:39', 1),
(151, 20170075, '20170075', 5, 2375, '19-07-2018 00:25:44', '19-07-2018 00:25:44', 1),
(152, 20170078, '20170078', 5, 4293, '19-07-2018 00:25:50', '19-07-2018 00:25:50', 1),
(153, 20170168, '20170168', 5, 3255, '19-07-2018 00:25:56', '19-07-2018 00:25:56', 1),
(154, 20170165, '20170165', 5, 9754, '19-07-2018 00:26:06', '19-07-2018 00:26:06', 1),
(155, 20170169, '20170169', 5, 2470, '19-07-2018 00:26:12', '19-07-2018 00:26:12', 1),
(156, 20170166, '20170166', 5, 2200, '19-07-2018 00:26:18', '19-07-2018 00:26:18', 1),
(157, 20170073, '20170073', 5, 1750, '19-07-2018 00:26:25', '19-07-2018 00:26:25', 1),
(158, 20170167, '20170167', 5, 5652, '19-07-2018 00:26:31', '19-07-2018 00:26:31', 1),
(159, 20170170, '20170170', 5, 2358, '19-07-2018 00:26:36', '19-07-2018 00:26:36', 1),
(160, 20170268, '20170268', 5, 5992, '19-07-2018 00:26:41', '19-07-2018 00:26:41', 1),
(161, 20170171, '20170171', 5, 2759, '19-07-2018 00:26:47', '19-07-2018 00:26:47', 1),
(162, 20170172, '20170172', 5, 3590, '19-07-2018 00:26:53', '19-07-2018 00:26:53', 1),
(163, 20170065, '20170065', 5, 3857, '19-07-2018 00:26:59', '19-07-2018 00:26:59', 1),
(164, 20170173, '20170173', 5, 5775, '19-07-2018 00:27:05', '19-07-2018 00:27:05', 1),
(165, 20170061, '20170061', 5, 4616, '19-07-2018 00:27:11', '19-07-2018 00:27:11', 1),
(166, 20170069, '20170069', 5, 7202, '19-07-2018 00:27:17', '19-07-2018 00:27:17', 1),
(167, 20170072, '20170072', 5, 8749, '19-07-2018 00:27:22', '19-07-2018 00:27:22', 1),
(168, 20170174, '20170174', 5, 3537, '19-07-2018 00:27:26', '19-07-2018 00:27:26', 1),
(169, 20170070, '20170070', 5, 3218, '19-07-2018 00:27:33', '19-07-2018 00:27:33', 1),
(170, 20170071, '20170071', 5, 1549, '19-07-2018 00:27:39', '19-07-2018 00:27:39', 1),
(171, 20170064, '20170064', 5, 5433, '19-07-2018 00:27:44', '19-07-2018 00:27:44', 1),
(172, 20170063, '20170063', 5, 2149, '19-07-2018 00:27:50', '19-07-2018 00:27:50', 1),
(173, 20170068, '20170068', 5, 7988, '19-07-2018 00:27:56', '19-07-2018 00:27:56', 1),
(174, 20170175, '20170175', 5, 7328, '19-07-2018 00:28:02', '19-07-2018 00:28:02', 1),
(175, 20170176, '20170176', 5, 8223, '19-07-2018 00:28:07', '19-07-2018 00:28:07', 1),
(176, 20170067, '20170067', 5, 5302, '19-07-2018 00:28:13', '19-07-2018 00:28:13', 1),
(177, 20170178, '20170067', 5, 5302, '19-07-2018 00:28:19', '19-07-2018 00:28:19', 1),
(178, 20170336, '20170336', 5, 4433, '19-07-2018 00:28:25', '19-07-2018 00:28:25', 1),
(179, 20170338, '20170338', 5, 7564, '19-07-2018 00:28:31', '19-07-2018 00:28:31', 1),
(180, 20170279, '20170279', 5, 2021, '19-07-2018 00:29:10', '19-07-2018 00:29:10', 1),
(181, 20170126, '20170126', 5, 1397, '19-07-2018 00:29:17', '19-07-2018 00:29:17', 1),
(182, 20170127, '20170127', 5, 4749, '19-07-2018 00:29:23', '19-07-2018 00:29:23', 1),
(183, 20170128, '20170128', 5, 2941, '19-07-2018 00:29:29', '19-07-2018 00:29:29', 1),
(184, 20170130, '20170130', 5, 3105, '19-07-2018 00:29:34', '19-07-2018 00:29:34', 1),
(185, 20170129, '20170129', 5, 6768, '19-07-2018 00:29:39', '19-07-2018 00:29:39', 1),
(186, 20170131, '20170131', 5, 9555, '19-07-2018 00:29:48', '19-07-2018 00:29:48', 1),
(187, 20170132, '20170132', 5, 9480, '19-07-2018 00:29:53', '19-07-2018 00:29:53', 1),
(188, 20170052, '20170052', 5, 8201, '19-07-2018 00:29:58', '19-07-2018 00:29:58', 1),
(189, 20170133, '20170133', 5, 6932, '19-07-2018 00:30:03', '19-07-2018 00:30:03', 1),
(190, 20170134, '20170134', 5, 9374, '19-07-2018 00:30:09', '19-07-2018 00:30:09', 1),
(191, 20170135, '20170135', 5, 9520, '19-07-2018 00:30:14', '19-07-2018 00:30:14', 1),
(192, 20170136, '20170136', 5, 2410, '19-07-2018 00:30:20', '19-07-2018 00:30:20', 1),
(193, 20170137, '20170137', 5, 4343, '19-07-2018 00:30:27', '19-07-2018 00:30:27', 1),
(194, 20170139, '20170139', 5, 7402, '19-07-2018 00:30:33', '19-07-2018 00:30:33', 1),
(195, 20170138, '20170138', 5, 1431, '19-07-2018 00:30:38', '19-07-2018 00:30:38', 1),
(196, 20170053, '20170053', 5, 6033, '19-07-2018 00:30:47', '19-07-2018 00:30:47', 1),
(197, 20170141, '20170141', 5, 8592, '19-07-2018 00:30:54', '19-07-2018 00:30:54', 1),
(198, 20170142, '20170142', 5, 4818, '19-07-2018 00:30:59', '19-07-2018 00:30:59', 1),
(199, 20170143, '20170143', 5, 9818, '19-07-2018 00:31:05', '19-07-2018 00:31:05', 1),
(200, 20170276, '20170276', 5, 7441, '19-07-2018 00:31:10', '19-07-2018 00:31:10', 1),
(201, 20170304, '20170304', 5, 4954, '19-07-2018 00:31:16', '19-07-2018 00:31:16', 1),
(202, 20170040, '20170040', 5, 3945, '19-07-2018 00:35:01', '19-07-2018 00:35:01', 1),
(203, 20170144, '20170144', 5, 7443, '19-07-2018 00:35:08', '19-07-2018 00:35:08', 1),
(204, 20170041, '20170041', 5, 5403, '19-07-2018 00:35:15', '19-07-2018 00:35:15', 1),
(205, 20170042, '20170042', 5, 5376, '19-07-2018 00:35:25', '19-07-2018 00:35:25', 1),
(206, 20170043, '20170043', 5, 1307, '19-07-2018 00:35:32', '19-07-2018 00:35:32', 1),
(207, 20170044, '20170044', 5, 3185, '19-07-2018 00:35:37', '19-07-2018 00:35:37', 1),
(208, 20170045, '20170045', 5, 7641, '19-07-2018 00:35:42', '19-07-2018 00:35:42', 1),
(209, 20170145, '20170145', 5, 3526, '19-07-2018 00:35:47', '19-07-2018 00:35:47', 1),
(210, 20170046, '20170046', 5, 3725, '19-07-2018 00:35:54', '19-07-2018 00:35:54', 1),
(211, 20170054, '20170054', 5, 7472, '19-07-2018 00:36:02', '19-07-2018 00:36:02', 1),
(212, 20170047, '20170047', 5, 3903, '19-07-2018 00:36:08', '19-07-2018 00:36:08', 1),
(213, 20170146, '20170146', 5, 1668, '19-07-2018 00:37:01', '19-07-2018 00:37:01', 1),
(214, 20170147, '20170147', 5, 3306, '19-07-2018 00:37:09', '19-07-2018 00:37:09', 1),
(215, 20170003, '20170003', 5, 2944, '19-07-2018 00:37:30', '19-07-2018 00:37:30', 1),
(216, 20170004, '20170004', 5, 1377, '19-07-2018 00:37:37', '19-07-2018 00:37:37', 1),
(217, 20170014, '20170014', 5, 1642, '19-07-2018 00:37:43', '19-07-2018 00:37:43', 1),
(218, 20170006, '20170006', 5, 9661, '19-07-2018 00:37:49', '19-07-2018 00:37:49', 1),
(219, 20170005, '20170005', 5, 4804, '19-07-2018 00:37:54', '19-07-2018 00:37:54', 1),
(220, 20170007, '20170007', 5, 8158, '19-07-2018 00:37:59', '19-07-2018 00:37:59', 1),
(221, 20170148, '20170148', 5, 3673, '19-07-2018 00:38:05', '19-07-2018 00:38:05', 1),
(222, 20170009, '20170009', 5, 4261, '19-07-2018 00:38:11', '19-07-2018 00:38:11', 1),
(223, 20170008, '20170008', 5, 7504, '19-07-2018 00:38:17', '19-07-2018 00:38:17', 1),
(224, 20170016, '20170016', 5, 5234, '19-07-2018 00:38:26', '19-07-2018 00:38:26', 1),
(225, 20170010, '20170010', 5, 8037, '19-07-2018 00:38:32', '19-07-2018 00:38:32', 1),
(226, 20170015, '20170015', 5, 1275, '19-07-2018 00:38:38', '19-07-2018 00:38:38', 1),
(227, 20170011, '20170011', 5, 8387, '19-07-2018 00:38:43', '19-07-2018 00:38:43', 1),
(228, 20170013, '20170013', 5, 5368, '19-07-2018 00:38:49', '19-07-2018 00:38:49', 1),
(229, 20170012, '20170012', 5, 7876, '19-07-2018 00:38:55', '19-07-2018 00:38:55', 1),
(230, 20170002, '20170002', 5, 7967, '19-07-2018 00:39:47', '19-07-2018 00:39:47', 1),
(231, 20170150, '20170150', 5, 3548, '19-07-2018 00:39:54', '19-07-2018 00:39:54', 1),
(232, 20170151, '20170151', 5, 7537, '19-07-2018 00:40:00', '19-07-2018 00:40:00', 1),
(233, 20170152, '20170152', 5, 8444, '19-07-2018 00:40:05', '19-07-2018 00:40:05', 1),
(234, 20170153, '20170153', 5, 3118, '19-07-2018 00:40:10', '19-07-2018 00:40:10', 1),
(235, 20170154, '20170154', 5, 4674, '19-07-2018 00:40:16', '19-07-2018 00:40:16', 1),
(236, 20170155, '20170155', 5, 6290, '19-07-2018 00:40:25', '19-07-2018 00:40:25', 1),
(237, 20170337, '20170337', 5, 2296, '19-07-2018 00:40:31', '19-07-2018 00:40:31', 1),
(238, 20170157, '20170157', 5, 6290, '19-07-2018 00:40:37', '19-07-2018 00:40:37', 1),
(239, 20170158, '20170158', 5, 8157, '19-07-2018 00:40:48', '19-07-2018 00:40:48', 1),
(240, 20170060, '20170060', 5, 3863, '19-07-2018 00:41:08', '19-07-2018 00:41:08', 1),
(241, 20170056, '20170056', 5, 6397, '19-07-2018 00:41:15', '19-07-2018 00:41:15', 1),
(242, 20170058, '20170058', 5, 9362, '19-07-2018 00:41:28', '19-07-2018 00:41:28', 1),
(243, 20170159, '20170159', 5, 9758, '19-07-2018 00:41:37', '19-07-2018 00:41:37', 1),
(244, 20170160, '20170160', 5, 1326, '19-07-2018 00:41:43', '19-07-2018 00:41:43', 1),
(245, 20170161, '20170161', 5, 7395, '19-07-2018 00:41:48', '19-07-2018 00:41:48', 1),
(246, 20170057, '20170057', 5, 2213, '19-07-2018 00:41:53', '19-07-2018 00:41:53', 1),
(247, 20170162, '20170162', 5, 9455, '19-07-2018 00:41:59', '19-07-2018 00:41:59', 1),
(248, 20170059, '20170059', 5, 4108, '19-07-2018 00:42:05', '19-07-2018 00:42:05', 1),
(249, 20170163, '20170163', 5, 3785, '19-07-2018 00:42:10', '19-07-2018 00:42:10', 1),
(250, 20170019, '20170019', 5, 4596, '19-07-2018 00:42:39', '19-07-2018 00:42:39', 1),
(251, 20170331, '20170331', 5, 6746, '19-07-2018 10:25:43', '19-07-2018 10:25:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `Subject_ID` int(11) NOT NULL,
  `Subject_Name` varchar(100) NOT NULL,
  `Subject_Code` varchar(20) NOT NULL,
  `Medium_ID` int(5) NOT NULL,
  `Class_ID` int(5) NOT NULL,
  `Group_ID` int(5) NOT NULL,
  `Shift_ID` int(5) NOT NULL,
  `Section_ID` int(5) NOT NULL,
  `Subject_Status` tinyint(3) NOT NULL,
  `Subject_Created` varchar(50) NOT NULL,
  `Subject_Modified` varchar(50) NOT NULL,
  `Subject_ExamID` int(5) NOT NULL,
  `Subject_Full_Marks` decimal(11,2) NOT NULL,
  `Subject_CT_Marks` decimal(11,2) NOT NULL,
  `Subject_MT_Marks` decimal(11,2) NOT NULL,
  `Subject_CQ_Marks` decimal(11,2) NOT NULL,
  `Subject_MCQ_Marks` decimal(11,2) NOT NULL,
  `Subject_Result_Order` int(3) NOT NULL,
  `Subject_Exam_Status` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`Subject_ID`, `Subject_Name`, `Subject_Code`, `Medium_ID`, `Class_ID`, `Group_ID`, `Shift_ID`, `Section_ID`, `Subject_Status`, `Subject_Created`, `Subject_Modified`, `Subject_ExamID`, `Subject_Full_Marks`, `Subject_CT_Marks`, `Subject_MT_Marks`, `Subject_CQ_Marks`, `Subject_MCQ_Marks`, `Subject_Result_Order`, `Subject_Exam_Status`) VALUES
(1, 'Bangla', '', 1, 1, 0, 2, 0, 1, '14-07-2018 12:35:08', '17-07-2018 14:21:47', 1, '100.00', '10.00', '15.00', '50.00', '25.00', 1, 1),
(2, 'Mathematics', '', 1, 1, 0, 2, 0, 1, '14-07-2018 15:01:00', '', 1, '100.00', '10.00', '15.00', '50.00', '25.00', 2, 1),
(3, 'English', '', 1, 1, 0, 2, 0, 1, '14-07-2018 15:01:49', '', 1, '100.00', '10.00', '15.00', '50.00', '25.00', 3, 1),
(4, 'Arabic', '0015', 1, 1, 0, 2, 0, 1, '14-07-2018 15:02:48', '17-07-2018 14:21:23', 1, '100.00', '10.00', '15.00', '50.00', '25.00', 4, 1),
(5, 'G. Knowledge', '', 1, 1, 0, 2, 0, 1, '14-07-2018 15:03:27', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 5, 1),
(6, 'Practical', '', 1, 1, 0, 2, 0, 1, '14-07-2018 15:04:41', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 6, 1),
(7, 'Bangla', '0125', 1, 2, 0, 2, 0, 1, '14-07-2018 16:01:32', '15-07-2018 13:01:59', 1, '100.00', '10.00', '15.00', '50.00', '25.00', 1, 1),
(8, 'Mathematics', '', 1, 2, 0, 2, 0, 1, '14-07-2018 16:04:03', '', 1, '100.00', '10.00', '15.00', '50.00', '25.00', 2, 1),
(9, 'English', '', 1, 2, 0, 2, 0, 1, '14-07-2018 16:04:29', '', 1, '100.00', '10.00', '15.00', '50.00', '25.00', 3, 1),
(10, 'Arabic', '0125', 1, 2, 0, 2, 0, 1, '14-07-2018 16:06:36', '17-07-2018 14:22:40', 1, '100.00', '10.00', '15.00', '50.00', '25.00', 4, 1),
(11, 'Drawing							', '0152', 1, 2, 0, 2, 0, 1, '14-07-2018 16:08:53', '15-07-2018 13:02:49', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 5, 1),
(12, 'G. Knowledge', '', 1, 2, 0, 2, 0, 1, '14-07-2018 16:09:34', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 6, 1),
(13, 'Practical', '', 1, 2, 0, 2, 0, 1, '14-07-2018 16:10:19', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 7, 1),
(14, 'Moktab', '', 1, 2, 0, 2, 0, 1, '14-07-2018 16:10:42', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 8, 1),
(15, 'Bangla', '', 1, 3, 0, 2, 0, 1, '14-07-2018 16:14:30', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 1, 1),
(16, 'Mathematics', '', 1, 3, 0, 2, 0, 1, '14-07-2018 16:15:04', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 2, 1),
(17, 'English', '', 1, 3, 0, 2, 0, 1, '14-07-2018 16:15:35', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 3, 1),
(18, 'Arabic', '0035', 1, 3, 0, 2, 0, 1, '14-07-2018 16:16:14', '17-07-2018 14:23:22', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 4, 1),
(19, 'Drawing', '', 1, 3, 0, 2, 0, 1, '14-07-2018 16:17:13', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 5, 1),
(20, 'G. Knowledge', '', 1, 3, 0, 2, 0, 1, '14-07-2018 16:17:55', '', 1, '75.00', '0.00', '0.00', '75.00', '0.00', 6, 1),
(21, 'Moktab', '', 1, 3, 0, 2, 0, 1, '14-07-2018 16:18:30', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 8, 1),
(22, 'Bangla', '', 1, 4, 0, 1, 0, 1, '14-07-2018 16:21:52', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 1, 1),
(23, 'Mathematics', '', 1, 4, 0, 1, 0, 1, '14-07-2018 16:22:54', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 2, 1),
(24, 'English', '', 1, 4, 0, 1, 0, 1, '14-07-2018 16:23:41', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 3, 1),
(25, 'Arabic', '015', 1, 4, 0, 1, 0, 1, '14-07-2018 16:24:02', '17-07-2018 14:24:05', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 4, 1),
(26, 'G. Knowledge', '', 1, 4, 0, 1, 0, 1, '14-07-2018 16:24:59', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 5, 1),
(27, 'Drawing', '', 1, 4, 0, 1, 0, 1, '14-07-2018 16:25:48', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 6, 1),
(28, 'Practical', '', 1, 4, 0, 1, 0, 1, '14-07-2018 16:26:12', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 7, 1),
(29, 'Moktab', '', 1, 4, 0, 1, 0, 1, '14-07-2018 16:26:50', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 8, 1),
(30, 'Bangla', '', 1, 5, 0, 1, 0, 1, '14-07-2018 16:27:43', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 1, 1),
(31, 'English', '', 1, 5, 0, 1, 0, 1, '14-07-2018 16:28:11', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 2, 1),
(32, 'Mathematics', '', 1, 5, 0, 1, 0, 1, '14-07-2018 16:28:37', '', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 3, 1),
(33, 'Arabic', '205', 1, 5, 0, 1, 0, 1, '14-07-2018 16:29:07', '16-07-2018 17:21:06', 1, '100.00', '10.00', '15.00', '75.00', '0.00', 4, 1),
(34, 'Environment', '', 1, 5, 0, 1, 0, 1, '14-07-2018 16:30:06', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 5, 1),
(35, 'G. Knowledge', '', 1, 5, 0, 1, 0, 1, '14-07-2018 16:31:12', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 6, 1),
(36, 'Drawing', '', 1, 5, 0, 1, 0, 1, '14-07-2018 16:31:41', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 7, 1),
(37, 'Practical', '', 1, 5, 0, 1, 0, 1, '14-07-2018 16:32:03', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 8, 1),
(38, 'Bangla', '', 1, 6, 0, 1, 0, 1, '14-07-2018 16:34:45', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 1, 1),
(39, 'Mathematics', '', 1, 6, 0, 1, 0, 1, '14-07-2018 16:35:53', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 2, 1),
(40, 'English', '', 1, 6, 0, 1, 0, 1, '14-07-2018 16:36:23', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 3, 1),
(41, 'Religion', '', 1, 6, 0, 1, 0, 1, '14-07-2018 16:36:48', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 4, 1),
(42, 'B & G  Science', '', 1, 6, 0, 1, 0, 1, '14-07-2018 16:37:56', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 5, 1),
(43, 'Science', '', 1, 6, 0, 1, 0, 1, '14-07-2018 16:38:25', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 6, 1),
(44, 'Practical', '', 1, 6, 0, 1, 0, 1, '14-07-2018 16:39:21', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 7, 1),
(45, 'Moktab', '', 1, 6, 0, 1, 0, 1, '14-07-2018 16:39:39', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 8, 1),
(46, 'Bangla', '', 1, 7, 0, 1, 0, 1, '14-07-2018 16:41:12', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 1, 1),
(47, 'Mathematics', '', 1, 7, 0, 1, 0, 1, '14-07-2018 16:41:30', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 2, 1),
(48, 'English', '', 1, 7, 0, 1, 0, 1, '14-07-2018 16:42:12', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 3, 1),
(49, 'B & G  Science', '401', 1, 7, 0, 1, 0, 1, '14-07-2018 16:43:42', '14-07-2018 16:48:02', 1, '100.00', '0.00', '0.00', '50.00', '50.00', 4, 1),
(50, 'Science', '', 1, 7, 0, 1, 0, 1, '14-07-2018 16:47:23', '', 1, '100.00', '0.00', '0.00', '50.00', '50.00', 5, 1),
(51, 'Religion', '', 1, 7, 0, 1, 0, 1, '14-07-2018 16:48:48', '', 1, '100.00', '0.00', '0.00', '50.00', '50.00', 6, 1),
(52, 'Practical', '407', 1, 7, 0, 1, 0, 1, '14-07-2018 16:49:26', '15-07-2018 12:53:47', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 7, 1),
(53, 'Moktab', '', 1, 7, 0, 1, 0, 1, '14-07-2018 16:49:47', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 8, 1),
(54, 'Bangla', '', 1, 8, 0, 1, 0, 1, '14-07-2018 17:17:25', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 1, 1),
(55, 'Mathematics', '', 1, 8, 0, 1, 0, 1, '14-07-2018 17:17:53', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 2, 1),
(56, 'English', '', 1, 8, 0, 1, 0, 1, '14-07-2018 17:18:10', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 3, 1),
(57, 'Religion', '', 1, 8, 0, 1, 0, 1, '14-07-2018 17:19:21', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 4, 1),
(58, 'B & G Science			', '', 1, 8, 0, 1, 0, 1, '14-07-2018 17:20:27', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 5, 1),
(59, 'Science ', '', 1, 8, 0, 1, 0, 1, '14-07-2018 17:21:36', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 6, 1),
(60, 'Moktab', '507', 1, 8, 0, 1, 0, 1, '14-07-2018 17:22:17', '14-07-2018 17:23:45', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 7, 1),
(61, 'Practical', '507', 1, 8, 0, 1, 0, 1, '14-07-2018 17:22:49', '14-07-2018 17:24:00', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 8, 1),
(62, 'Bangla 1st Paper', '601', 1, 9, 0, 1, 0, 1, '14-07-2018 17:30:57', '14-07-2018 17:33:44', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 1, 1),
(63, 'Bangla 2nd Paper', '602', 1, 9, 0, 1, 0, 1, '14-07-2018 17:32:55', '15-07-2018 18:15:08', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 2, 1),
(64, 'English 1st Paper', '', 1, 9, 0, 1, 0, 1, '14-07-2018 17:34:15', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 1, 1),
(65, 'English 2nd Paper', '', 1, 9, 0, 1, 0, 1, '14-07-2018 17:34:46', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 4, 1),
(66, 'Mathematics', '', 1, 9, 0, 1, 0, 1, '14-07-2018 17:35:09', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 5, 1),
(67, 'B & G Science			', '', 1, 9, 0, 1, 0, 1, '14-07-2018 17:35:45', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 7, 1),
(68, 'Science ', '', 1, 9, 0, 1, 0, 1, '14-07-2018 17:36:13', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 8, 1),
(69, 'Religion', '', 1, 9, 0, 1, 0, 1, '14-07-2018 17:36:40', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 8, 1),
(70, 'Agri./H. Science', '', 1, 9, 0, 1, 0, 1, '14-07-2018 17:38:34', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 9, 1),
(71, 'I.C.T', '', 1, 9, 0, 1, 0, 1, '14-07-2018 17:38:54', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 10, 1),
(72, 'Bangla 1st Paper', '', 1, 10, 0, 1, 0, 1, '14-07-2018 17:40:10', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 1, 1),
(73, 'Bangla 2nd Paper', '', 1, 10, 0, 1, 0, 1, '14-07-2018 17:40:35', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 2, 1),
(74, 'English 1st Paper', '', 1, 10, 0, 1, 0, 1, '14-07-2018 17:40:56', '', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 3, 1),
(75, 'English 2nd Paper', '', 1, 10, 0, 1, 0, 1, '14-07-2018 17:41:13', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 4, 1),
(76, 'Mathematics', '705', 1, 10, 0, 1, 0, 1, '14-07-2018 17:42:51', '14-07-2018 17:46:57', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 5, 1),
(77, 'Science', '706', 1, 10, 0, 1, 0, 1, '14-07-2018 17:43:18', '15-07-2018 16:27:21', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 6, 1),
(78, 'B & G Science', '707', 1, 10, 0, 1, 0, 1, '14-07-2018 17:43:39', '14-07-2018 17:47:52', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 7, 1),
(79, 'Religion', '708', 1, 10, 0, 1, 0, 1, '14-07-2018 17:43:59', '14-07-2018 17:49:16', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 8, 1),
(80, 'Agri./H. Science', '709', 1, 10, 0, 1, 0, 1, '14-07-2018 17:44:19', '15-07-2018 17:01:07', 1, '100.00', '0.00', '0.00', '100.00', '0.00', 9, 1),
(81, 'I.C.T', '', 1, 10, 0, 1, 0, 1, '14-07-2018 17:50:07', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 10, 1),
(82, 'Moktab', '', 1, 5, 0, 1, 0, 1, '17-07-2018 19:16:37', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 8, 1),
(83, 'Practical', '', 1, 3, 0, 2, 0, 1, '18-07-2018 17:34:00', '', 1, '50.00', '0.00', '0.00', '50.00', '0.00', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `Teacher_ID` int(11) NOT NULL,
  `Teacher_Name` varchar(100) NOT NULL,
  `Teacher_FathersName` varchar(50) NOT NULL,
  `Teacher_MothersName` varchar(50) NOT NULL,
  `Teacher_IndexNo` varchar(5) NOT NULL,
  `Teacher_UniqueID` varchar(20) NOT NULL,
  `Teacher_NationalID` varchar(12) NOT NULL,
  `Teacher_gender` varchar(20) NOT NULL,
  `Teacher_email` varchar(50) NOT NULL,
  `Teacher_mobile` varchar(20) NOT NULL,
  `Teacher_DateOfBirth` varchar(20) NOT NULL,
  `Teacher_joining_date` varchar(32) NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Teacher_designation` varchar(100) NOT NULL,
  `Teacher_BloodGroup` varchar(5) NOT NULL,
  `Teacher_religion` varchar(50) NOT NULL,
  `Teacher_address` varchar(255) NOT NULL,
  `Teacher_status` varchar(2) NOT NULL DEFAULT '',
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `Teacher_marital_status` int(2) NOT NULL,
  `Teacher_shift` int(2) NOT NULL,
  `Teacher_medium` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`Teacher_ID`, `Teacher_Name`, `Teacher_FathersName`, `Teacher_MothersName`, `Teacher_IndexNo`, `Teacher_UniqueID`, `Teacher_NationalID`, `Teacher_gender`, `Teacher_email`, `Teacher_mobile`, `Teacher_DateOfBirth`, `Teacher_joining_date`, `Image`, `Teacher_designation`, `Teacher_BloodGroup`, `Teacher_religion`, `Teacher_address`, `Teacher_status`, `Created`, `Modified`, `Teacher_marital_status`, `Teacher_shift`, `Teacher_medium`) VALUES
(11, 'ড. এম এ কে নেওয়াজ', '', '', '', '001', '', '1', '', '', '19-08-2018', '19-08-2018', 'profdrmakneoaj.jpg', '1', '1', '1', '                                                                                                                                                                                                                                                               ', '1', '19-08-2018 12:15:48', '13-09-2018 18:56:50', 1, 1, 1),
(16, 'সানজিদা সুলতানা', '', '', '', '002', '', '2', '', '', '30-08-2018', '30-08-2018', 'sanjidasultana.jpg', '2', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:46:16', '13-09-2018 18:47:40', 1, 1, 1),
(17, 'বিদৌরা সুলতানা', '', '', '', '003', '', '2', '', '', '30-08-2018', '30-08-2018', 'bidorasultana.jpg', '3', '1', '1', '                                                                                                                          ', '1', '30-08-2018 19:49:06', '13-09-2018 18:47:59', 1, 1, 1),
(18, 'ফারহানা আহমেদ', '', '', '', '004', '', '2', '', '', '30-08-2018', '30-08-2018', 'farhanaahmed.jpg', '3', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:49:54', '13-09-2018 18:48:18', 1, 1, 1),
(19, 'শামীম আরা বেগম', '', '', '', '005', '', '2', '', '', '30-08-2018', '30-08-2018', 'shamimarabegum.jpg', '3', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:50:12', '13-09-2018 18:48:41', 1, 1, 1),
(20, 'নাসরীন বেগম ', '', '', '', '006', '', '2', '', '', '30-08-2018', '30-08-2018', 'nasreenbegum.jpg', '3', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:50:31', '13-09-2018 18:48:54', 1, 1, 1),
(21, 'কাজী আফরোজা বেগম', '', '', '', '007', '', '2', '', '', '30-08-2018', '30-08-2018', 'kaziafrozabegum.jpg', '3', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:51:40', '13-09-2018 18:57:08', 1, 1, 1),
(22, 'মোঃ মাজহারুল ইসলাম', '', '', '', '008', '', '1', '', '', '30-08-2018', '30-08-2018', 'mdmazharulislam.jpg', '3', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:52:26', '13-09-2018 18:49:11', 1, 1, 1),
(23, 'মাহফুজা ইয়াসমিন স্বপ্না', '', '', '', '009', '', '2', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 19:52:57', '', 1, 1, 1),
(24, 'মাহবুবা চৌধুরী সনেট', '', '', '', '010', '', '2', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 19:53:56', '', 1, 1, 1),
(25, 'ফারজানা ইসলাম', '', '', '', '011', '', '2', '', '', '30-08-2018', '30-08-2018', 'farzanaislam.jpg', '4', '1', '1', '                                                                                                                          ', '1', '30-08-2018 19:54:28', '13-09-2018 18:50:19', 1, 1, 1),
(26, 'ছাবিনা ইয়াসমিন', '', '', '', '012', '', '2', '', '', '30-08-2018', '30-08-2018', 'sabinayeasmin.jpg', '4', '1', '1', '                                                                                                                          ', '1', '30-08-2018 19:55:07', '13-09-2018 18:50:33', 1, 1, 1),
(27, 'শক্তিময়ী হিরা', '', '', '', '013', '', '2', '', '', '30-08-2018', '30-08-2018', 'shoktimoyeehira.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:55:30', '13-09-2018 19:02:47', 1, 1, 1),
(28, 'আফসানা আক্তার', '', '', '', '014', '', '2', '', '', '30-08-2018', '30-08-2018', 'afsanaaktar.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:56:37', '13-09-2018 19:03:08', 1, 1, 1),
(29, 'তামান্না সুলতানা', '', '', '', '015', '', '2', '', '', '30-08-2018', '30-08-2018', 'tamannasultana.jpg', '4', '1', '1', '                                                                                                                          ', '1', '30-08-2018 19:57:13', '13-09-2018 18:51:19', 1, 1, 1),
(30, 'ফারহানা আফরোজ', '', '', '', '016', '', '2', '', '', '30-08-2018', '30-08-2018', 'farzanaafroze.jpg', '5', '1', '1', '                                                                                                                          ', '1', '30-08-2018 19:57:42', '13-09-2018 18:52:07', 1, 1, 1),
(31, 'নাদিয়া সুলতানা', '', '', '', '017', '', '2', '', '', '30-08-2018', '30-08-2018', 'nadiasultana.jpg', '5', '1', '1', '                                                                                                                          ', '1', '30-08-2018 19:58:07', '13-09-2018 18:52:24', 1, 1, 1),
(32, 'তৌহিদা আক্তার', '', '', '', '018', '', '2', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 19:59:18', '', 1, 1, 1),
(33, 'মোহাম্মদ কামরুজ্জামান', '', '', '', '019', '', '1', '', '', '30-08-2018', '30-08-2018', 'mohammadkamruzzaman.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 19:59:37', '13-09-2018 19:00:33', 1, 1, 1),
(34, 'জুবাইদা গুলশান আরা', '', '', '', '020', '', '2', '', '', '30-08-2018', '30-08-2018', 'jubaidagulshanara.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:00:10', '13-09-2018 18:57:33', 1, 1, 1),
(35, 'সাদিয়া আক্তার', '', '', '', '021', '', '2', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 20:00:51', '', 1, 1, 1),
(36, 'হাসিবুল হাসান', '', '', '', '022', '', '1', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 20:01:06', '', 1, 1, 1),
(37, 'অরিন ফারিয়া শাওন', '', '', '', '023', '', '2', '', '', '30-08-2018', '30-08-2018', 'orinfariashaon.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:01:43', '13-09-2018 18:58:54', 1, 1, 1),
(38, 'সুমী আক্তার', '', '', '', '024', '', '2', '', '', '30-08-2018', '30-08-2018', 'sumeakter.jpg', '5', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:01:58', '13-09-2018 18:59:26', 1, 1, 1),
(39, 'ফারহানা জেসমিন', '', '', '', '025', '', '2', '', '', '30-08-2018', '30-08-2018', 'farhanajesmin.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:02:16', '13-09-2018 18:59:42', 1, 1, 1),
(40, 'লিপা সুলতানা', '', '', '', '026', '', '2', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 20:02:50', '', 1, 1, 1),
(41, 'নাজিয়া আলম', '', '', '', '027', '', '2', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 20:03:06', '', 1, 1, 1),
(42, 'মারুফা আক্তার মৌ', '', '', '', '028', '', '2', '', '', '30-08-2018', '30-08-2018', '', '5', '', '1', '', '1', '30-08-2018 20:03:33', '', 1, 1, 1),
(43, 'মোঃ শামীম শেখ', '', '', '', '029', '', '1', '', '', '30-08-2018', '30-08-2018', 'shamimsheikh.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:03:48', '13-09-2018 19:00:09', 1, 1, 1),
(44, 'সেলিনা আক্তার', '', '', '', '030', '', '2', '', '', '30-08-2018', '30-08-2018', 'selinaakhter.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:04:07', '13-09-2018 19:01:29', 1, 1, 1),
(45, 'সোহেলী আফরোজ', '', '', '', '031', '', '2', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 20:04:22', '', 1, 1, 1),
(46, 'মাসুদ রানা', '', '', '', '032', '', '1', '', '', '30-08-2018', '30-08-2018', 'mdmasudrana.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:04:37', '13-09-2018 19:02:12', 1, 1, 1),
(47, 'ফারজানা আফরোজ', '', '', '', '033', '', '2', '', '', '30-08-2018', '30-08-2018', 'farzanaafroze1.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:04:54', '13-09-2018 19:01:13', 1, 1, 1),
(48, 'সুজানা ইসলাম	', '', '', '', '034', '', '2', '', '', '30-08-2018', '30-08-2018', 'sujanaislam.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:05:20', '13-09-2018 19:03:55', 1, 1, 1),
(49, 'আবুল খায়ের', '', '', '', '035', '', '1', '', '', '30-08-2018', '30-08-2018', 'mdabulkhair.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:06:12', '13-09-2018 19:04:21', 1, 1, 1),
(50, 'মো. আল-মামুন খান', '', '', '', '036', '', '1', '', '', '30-08-2018', '30-08-2018', 'mdalmamunkhan.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:06:31', '13-09-2018 19:04:34', 1, 1, 1),
(51, 'শামীমা রহমান বীথি', '', '', '', '037', '', '2', '', '', '30-08-2018', '30-08-2018', '', '4', '', '1', '', '1', '30-08-2018 20:06:48', '', 1, 1, 1),
(52, 'জান্নাত আরা দিবা', '', '', '', '038', '', '2', '', '', '30-08-2018', '30-08-2018', 'jannataradiba.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:07:09', '13-09-2018 19:05:06', 1, 1, 1),
(53, 'কিসমত আরা', '', '', '', '039', '', '2', '', '', '30-08-2018', '30-08-2018', 'kismatara.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:07:29', '13-09-2018 19:05:23', 1, 1, 1),
(54, 'সাজিয়া লাইজু', '', '', '', '040', '', '2', '', '', '30-08-2018', '30-08-2018', 'sazialaizu.jpg', '4', '1', '1', '                                                                                                                                                                                                                                                    ', '1', '30-08-2018 20:07:47', '13-09-2018 19:05:31', 1, 1, 1),
(55, 'ফরিদা আক্তার', '', '', '', '041', '', '2', '', '', '30-08-2018', '30-08-2018', '', '5', '', '1', '', '1', '30-08-2018 20:08:11', '', 1, 1, 1),
(56, 'খাদিজা আক্তার', '', '', '', '042', '', '2', '', '', '30-08-2018', '30-08-2018', '', '6', '', '1', '', '1', '30-08-2018 20:08:36', '', 1, 1, 1),
(57, 'দলিল উদ্দিন আহমেদ', '', '', '', '043', '', '1', '', '', '30-08-2018', '30-08-2018', '', '7', '1', '1', '                                                                                                                          ', '1', '30-08-2018 20:09:00', '13-09-2018 19:06:03', 1, 1, 1),
(58, 'মানবী বিশ্বাস', '', '', '', '044', '', '2', '', '', '30-08-2018', '30-08-2018', '', '8', '', '1', '', '1', '30-08-2018 20:09:14', '', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher_attendance`
--

CREATE TABLE `tbl_teacher_attendance` (
  `Teacher_Attendance_ID` int(5) NOT NULL,
  `Teacher_UniqueID` int(5) NOT NULL,
  `Teacher_Attendance_NameID` varchar(55) NOT NULL,
  `Teacher_Attendance_ShiftID` varchar(32) NOT NULL,
  `Teacher_Attendance_MediumID` varchar(32) NOT NULL,
  `Teacher_Attendance_InTime` varchar(32) NOT NULL,
  `Teacher_Attendance_OutTime` varchar(32) NOT NULL,
  `Teacher_Attendance_Date` varchar(32) NOT NULL,
  `Teacher_present_status` int(5) NOT NULL,
  `Created` varchar(32) NOT NULL,
  `Modified` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacher_attendance`
--

INSERT INTO `tbl_teacher_attendance` (`Teacher_Attendance_ID`, `Teacher_UniqueID`, `Teacher_Attendance_NameID`, `Teacher_Attendance_ShiftID`, `Teacher_Attendance_MediumID`, `Teacher_Attendance_InTime`, `Teacher_Attendance_OutTime`, `Teacher_Attendance_Date`, `Teacher_present_status`, `Created`, `Modified`) VALUES
(1, 20189791, '1', '2', '2', '', '', '26-03-2017', 1, '26-03-2018 17:34:06', ''),
(2, 201811020, '2', '1', '1', '', '', '26-03-2018', 1, '26-03-2018 17:34:06', ''),
(3, 201811349, '3', '2', '2', '', '', '26-03-2018', 1, '26-03-2018 17:34:06', ''),
(4, 102018, '4', '1', '1', '', '', '26-03-2018', 1, '26-03-2018 17:34:07', ''),
(5, 112019, '5', '1', '1', '', '', '26-03-2018', 1, '26-03-2018 17:34:07', ''),
(6, 141525, '7', '1', '1', '', '', '26-03-2018', 1, '26-03-2018 17:34:07', ''),
(7, 151213, '8', '2', '2', '', '', '26-03-2018', 1, '26-03-2018 17:34:07', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_time_slot`
--

CREATE TABLE `tbl_time_slot` (
  `Time_ID` int(11) NOT NULL,
  `Time_Day` varchar(20) NOT NULL,
  `Time_Slot` varchar(20) NOT NULL,
  `Time_Class_ID` varchar(50) NOT NULL,
  `Time_Section_ID` varchar(50) NOT NULL,
  `Time_Subject` varchar(50) NOT NULL,
  `Time_Teacher` varchar(100) NOT NULL,
  `Time_Class_Room` varchar(50) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` varchar(50) NOT NULL,
  `Time_Status` tinyint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_time_slot`
--

INSERT INTO `tbl_time_slot` (`Time_ID`, `Time_Day`, `Time_Slot`, `Time_Class_ID`, `Time_Section_ID`, `Time_Subject`, `Time_Teacher`, `Time_Class_Room`, `Created`, `Modified`, `Time_Status`) VALUES
(2, 'Monday', '3', '4', '7', '2', '2', '1', '14-03-2018 13:47:46', '', 1),
(3, 'Tuesday', '2', '5', '14', '2', '2', '2', '14-03-2018 14:12:41', '', 1),
(4, 'Tuesday', '3', '6', '9', '2', '3', '2', '14-03-2018 14:13:03', '', 1),
(5, 'Thursday', '5', '8', '11', '1', '2', '1', '14-03-2018 14:13:19', '', 1),
(6, 'Monday', '2', '5', '8', '2', '2', '2', '14-03-2018 16:57:59', '', 1),
(7, 'Monday', '3', '4', '7', '3', '1', '2', '14-03-2018 16:58:24', '', 1),
(8, 'Thursday', '5', '6', '9', '1', '2', '1', '14-03-2018 16:58:41', '', 1),
(9, 'Thursday', '7', '1', '3', '2', '3', '2', '14-03-2018 16:58:57', '', 1),
(10, 'Friday', '7', '8', '11', '3', '2', '2', '14-03-2018 16:59:21', '', 1),
(11, 'Wednesday', '4', '5', '14', '2', '2', '1', '14-03-2018 16:59:33', '', 1),
(12, 'Wednesday', '5', '5', '14', '3', '2', '1', '14-03-2018 16:59:44', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `UserID` int(11) NOT NULL,
  `RoleID` int(11) NOT NULL,
  `EmployeeId` int(11) DEFAULT NULL,
  `FullName` varchar(255) CHARACTER SET latin1 NOT NULL,
  `UserName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Designation` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `Password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Status` int(11) NOT NULL,
  `created` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `modified` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`UserID`, `RoleID`, `EmployeeId`, `FullName`, `UserName`, `Designation`, `Email`, `Password`, `Status`, `created`, `modified`) VALUES
(1, 3, NULL, 'Super Admin', 'superadmin', '', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '', ''),
(3, 6, 0, 'Admin', 'admin', '', 'ashiq@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '28-01-2018 13:35:30', '08-03-2018 14:27:44'),
(4, 5, NULL, 'shanto', 'shanto', '', 'santho@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '08-03-2018 14:17:06', '08-03-2018 14:17:06'),
(6, 1, 101, '', 'alamgirkabir', '', 'alamgirkabir@gmail.com', '202cb962ac59075b964b07152d234b70', 1, '23-06-2018 13:50:36', '23-06-2018 13:50:36'),
(7, 5, 1001, '', 'mehedi', '', 'mehedi@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 1, '23-06-2018 15:26:59', '23-06-2018 15:26:59'),
(9, 5, 20170018, '', '20170018', '', '', '72b386224056bf940cd5b01341f65e9d', 1, '18-07-2018 22:59:49', '18-07-2018 22:59:49'),
(10, 5, 20170248, '', '20170248', '', '', '94aef38441efa3380a3bed3faf1f9d5d', 1, '18-07-2018 23:46:52', '18-07-2018 23:46:52'),
(11, 5, 20170330, '', '20170330', '', '', 'c6b8c8d762da15fa8dbbdfb6baf9e260', 1, '18-07-2018 23:47:21', '18-07-2018 23:47:21'),
(12, 5, 20170030, '', '20170030', '', '', 'ee715daa76f1b51d80343f45547be570', 1, '18-07-2018 23:47:57', '18-07-2018 23:47:57'),
(13, 5, 20170028, '', '20170028', '', '', '5b4a2146246bc3a3a941f32225bbb792', 1, '18-07-2018 23:48:06', '18-07-2018 23:48:06'),
(14, 5, 20170039, '', '20170039', '', '', '9ec51f6eb240fb631a35864e13737bca', 1, '18-07-2018 23:48:20', '18-07-2018 23:48:20'),
(15, 5, 20170037, '', '20170037', '', '', '51be2fed6c55f5aa0c16ff14c140b187', 1, '18-07-2018 23:48:35', '18-07-2018 23:48:35'),
(16, 5, 20170022, '', '20170022', '', '', '2d1b2a5ff364606ff041650887723470', 1, '18-07-2018 23:48:47', '18-07-2018 23:48:47'),
(17, 5, 20170032, '', '20170032', '', '', 'ddf354219aac374f1d40b7e760ee5bb7', 1, '18-07-2018 23:48:56', '18-07-2018 23:48:56'),
(18, 5, 20170250, '', '20170250', '', '', '4aecfbe5d21e3f7912bf8eb29124423a', 1, '18-07-2018 23:57:03', '18-07-2018 23:57:03'),
(19, 5, 20170257, '', '20170257', '', '', '03cf87174debaccd689c90c34577b82f', 1, '18-07-2018 23:57:14', '18-07-2018 23:57:14'),
(20, 5, 20170251, '', '20170251', '', '', 'e0a0a422a9069a4cb2b91211a451da4b', 1, '18-07-2018 23:57:25', '18-07-2018 23:57:25'),
(21, 5, 20170252, '', '20170252', '', '', '8643c8e2107ba86c47371e037059c4b7', 1, '18-07-2018 23:57:42', '18-07-2018 23:57:42'),
(22, 5, 20170253, '', '20170253', '', '', '9e95248d9b714a96f47fd159b4c6e911', 1, '18-07-2018 23:57:51', '18-07-2018 23:57:51'),
(23, 5, 20170262, '', '20170262', '', '', 'fcac695db02687ffb7955b66a43fe6e6', 1, '18-07-2018 23:58:44', '18-07-2018 23:58:44'),
(24, 5, 20170256, '', '20170256', '', '', '1cd3882394520876dc88d1472aa2a93f', 1, '18-07-2018 23:58:52', '18-07-2018 23:58:52'),
(25, 5, 20170038, '', '20170038', '', '', '06563f3b418fe57f8fc331872343ce44', 1, '18-07-2018 23:59:02', '18-07-2018 23:59:02'),
(26, 5, 20170031, '', '20170031', '', '', '49856ed476ad01fcff881d57e161d73f', 1, '18-07-2018 23:59:12', '18-07-2018 23:59:12'),
(27, 5, 20170024, '', '20170024', '', '', 'db079083386e2e0885f278fbd1d8a476', 1, '18-07-2018 23:59:26', '18-07-2018 23:59:26'),
(28, 5, 20170017, '', '20170017', '', '', '35b50410da00df8ef6c41f0cb537a9a3', 1, '18-07-2018 23:59:34', '18-07-2018 23:59:34'),
(29, 5, 20170332, '', '20170332', '', '', '510731ac096ebcb3989fb1ed5b7075bb', 1, '18-07-2018 23:59:41', '18-07-2018 23:59:41'),
(30, 5, 20170021, '', '20170021', '', '', '7c022d9c6dd601e087e186ee6dfe1fc7', 1, '18-07-2018 23:59:58', '18-07-2018 23:59:58'),
(31, 5, 20170333, '', '20170333', '', '', 'ec20019911a77ad39d023710be68aaa1', 1, '19-07-2018 00:00:06', '19-07-2018 00:00:06'),
(32, 5, 20170259, '', '20170259', '', '', 'f056bfa71038e04a2400266027c169f9', 1, '19-07-2018 00:00:14', '19-07-2018 00:00:14'),
(33, 5, 20170334, '', '20170334', '', '', '3fc2c60b5782f641f76bcefc39fb2392', 1, '19-07-2018 00:00:21', '19-07-2018 00:00:21'),
(34, 5, 20170027, '', '20170027', '', '', 'caa145542f7333f6ebf99a72b87bdeba', 1, '19-07-2018 00:00:27', '19-07-2018 00:00:27'),
(35, 5, 20170023, '', '20170023', '', '', 'b0cf188d74589db9b23d5d277238a929', 1, '19-07-2018 00:00:35', '19-07-2018 00:00:35'),
(36, 5, 20170029, '', '20170029', '', '', '4b01078e96f65f2ad6573ce6fecc944d', 1, '19-07-2018 00:00:41', '19-07-2018 00:00:41'),
(37, 5, 20170036, '', '20170036', '', '', '2d1b2a5ff364606ff041650887723470', 1, '19-07-2018 00:00:51', '19-07-2018 00:00:51'),
(38, 5, 20170261, '', '20170261', '', '', 'd128a9569b806e3a93c91293aed3f40b', 1, '19-07-2018 00:01:04', '19-07-2018 00:01:04'),
(39, 5, 20170255, '', '20170255', '', '', '06a81a4fb98d149f2d31c68828fa6eb2', 1, '19-07-2018 00:01:12', '19-07-2018 00:01:12'),
(40, 5, 20170263, '', '20170263', '', '', 'dba132f6ab6a3e3d17a8d59e82105f4c', 1, '19-07-2018 00:01:19', '19-07-2018 00:01:19'),
(41, 5, 20170264, '', '20170264', '', '', '6dd4e10e3296fa63738371ec0d5df818', 1, '19-07-2018 00:01:26', '19-07-2018 00:01:26'),
(42, 5, 20170265, '', '20170265', '', '', 'f7ae58c7f1a1cc4abe9273a0f971ba2a', 1, '19-07-2018 00:01:38', '19-07-2018 00:01:38'),
(43, 5, 20170266, '', '20170266', '', '', '8db1d4a631a6e9a24e2c0e842e1f1772', 1, '19-07-2018 00:01:45', '19-07-2018 00:01:45'),
(44, 5, 20170267, '', '20170267', '', '', 'd360a502598a4b64b936683b44a5523a', 1, '19-07-2018 00:01:52', '19-07-2018 00:01:52'),
(45, 5, 20170272, '', '20170272', '', '', '3df07fdae1ab273a967aaa1d355b8bb6', 1, '19-07-2018 00:01:59', '19-07-2018 00:01:59'),
(46, 5, 20170303, '', '20170303', '', '', '6a130f1dc6f0c829f874e92e5458dced', 1, '19-07-2018 00:02:08', '19-07-2018 00:02:08'),
(47, 5, 20170303, '', '20170303', '', '', '6a130f1dc6f0c829f874e92e5458dced', 1, '19-07-2018 00:02:19', '19-07-2018 00:02:19'),
(48, 5, 20170111, '', '20170111', '', '', '9cafd121ba982e6de30ffdf5ada9ce2e', 1, '19-07-2018 00:03:26', '19-07-2018 00:03:26'),
(49, 5, 20170102, '', '20170102', '', '', '71a8b2ffe0b594a5c1b3c28090384fd7', 1, '19-07-2018 00:06:01', '19-07-2018 00:06:01'),
(50, 5, 20170224, '', '20170224', '', '', '3f1656d9668dffcf8119e3ecff873558', 1, '19-07-2018 00:06:14', '19-07-2018 00:06:14'),
(51, 5, 2170225, '', '2170225', '', '', '28659414dab9eca0219dd592b8136434', 1, '19-07-2018 00:06:23', '19-07-2018 00:06:23'),
(52, 5, 20170103, '', '20170103', '', '', 'f2708856060b3b50379aeb13c54a563e', 1, '19-07-2018 00:06:30', '19-07-2018 00:06:30'),
(53, 5, 20170226, '', '20170226', '', '', 'cee8d6b7ce52554fd70354e37bbf44a2', 1, '19-07-2018 00:06:36', '19-07-2018 00:06:36'),
(54, 5, 20170106, '', '20170106', '', '', 'fc152e73692bc3c934d248f639d9e963', 1, '19-07-2018 00:06:41', '19-07-2018 00:06:41'),
(55, 5, 20170104, '', '20170104', '', '', '728f206c2a01bf572b5940d7d9a8fa4c', 1, '19-07-2018 00:06:50', '19-07-2018 00:06:50'),
(56, 5, 20170113, '', '20170113', '', '', 'f95ec3de395b4bce25b39ef6138da871', 1, '19-07-2018 00:07:14', '19-07-2018 00:07:14'),
(57, 5, 20170227, '', '20170227', '', '', '47257279d0b4f033e373b16e65f8f089', 1, '19-07-2018 00:07:21', '19-07-2018 00:07:21'),
(58, 5, 20170228, '', '20170228', '', '', '2ba8698b79439589fdd2b0f7218d8b07', 1, '19-07-2018 00:07:27', '19-07-2018 00:07:27'),
(59, 5, 20170229, '', '20170229', '', '', '0e4e946668cf2afc4299b462b812caca', 1, '19-07-2018 00:07:34', '19-07-2018 00:07:34'),
(60, 5, 20170230, '', '20170230', '', '', 'ed46558a56a4a26b96a68738a0d28273', 1, '19-07-2018 00:07:40', '19-07-2018 00:07:40'),
(61, 5, 20170001, '', '20170001', '', '', '08f38e0434442128fab5ead6217ca759', 1, '19-07-2018 00:07:48', '19-07-2018 00:07:48'),
(62, 5, 20170231, '', '20170231', '', '', '84cdde86a4560c17d00c9c437fc2f0da', 1, '19-07-2018 00:07:55', '19-07-2018 00:07:55'),
(63, 5, 20170270, '', '20170270', '', '', 'db095bd14b838cbf3abf886f492c721b', 1, '19-07-2018 00:08:01', '19-07-2018 00:08:01'),
(64, 5, 20170108, '', '20170108', '', '', 'b6617980ce90f637e68c3ebe8b9be745', 1, '19-07-2018 00:08:09', '19-07-2018 00:08:09'),
(65, 5, 20170234, '', '20170234', '', '', '04c6906524cd877e833fe26ddaddc62f', 1, '19-07-2018 00:08:15', '19-07-2018 00:08:15'),
(66, 5, 20170107, '', '20170107', '', '', 'd25414405eb37dae1c14b18d6a2cac34', 1, '19-07-2018 00:08:23', '19-07-2018 00:08:23'),
(67, 5, 20170105, '', '20170105', '', '', '0fc170ecbb8ff1afb2c6de48ea5343e7', 1, '19-07-2018 00:08:34', '19-07-2018 00:08:34'),
(68, 5, 20170110, '', '20170110', '', '', '322f62469c5e3c7dc3e58f5a4d1ea399', 1, '19-07-2018 00:08:43', '19-07-2018 00:08:43'),
(69, 5, 20170235, '', '20170235', '', '', '1d7c2aae840867027b7edd17b6aaa0e9', 1, '19-07-2018 00:08:50', '19-07-2018 00:08:50'),
(70, 5, 20170236, '', '20170236', '', '', '8977ecbb8cb82d77fb091c7a7f186163', 1, '19-07-2018 00:08:56', '19-07-2018 00:08:56'),
(71, 5, 20170238, '', '20170238', '', '', '443dec3062d0286986e21dc0631734c9', 1, '19-07-2018 00:09:16', '19-07-2018 00:09:16'),
(72, 5, 20170237, '', '20170237', '', '', '97785e0500ad16c18574c64189ccf4b4', 1, '19-07-2018 00:09:30', '19-07-2018 00:09:30'),
(73, 5, 20170239, '', '20170239', '', '', '65cf25ef90de99d93fa96dc49d0d8b3c', 1, '19-07-2018 00:09:38', '19-07-2018 00:09:38'),
(74, 5, 20170269, '', '20170269', '', '', '03b2ceb73723f8b53cd533e4fba898ee', 1, '19-07-2018 00:09:47', '19-07-2018 00:09:47'),
(75, 5, 20170240, '', '20170240', '', '', '68bc9477d0f2c908eed9498bf926d89e', 1, '19-07-2018 00:09:57', '19-07-2018 00:09:57'),
(76, 5, 20170109, '', '20170109', '', '', '58ee2794cc87707943624dc8db2ff5a0', 1, '19-07-2018 00:10:05', '19-07-2018 00:10:05'),
(77, 5, 20170241, '', '20170241', '', '', '5943a6c821a417791dffc82b4b6268a8', 1, '19-07-2018 00:10:14', '19-07-2018 00:10:14'),
(78, 5, 20170242, '', '20170242', '', '', 'b7f1f29db7c23648f2bb8d6a8ee0469b', 1, '19-07-2018 00:10:22', '19-07-2018 00:10:22'),
(79, 5, 20170243, '', '20170243', '', '', 'fcf55a303b71b84d326fb1d06e332a26', 1, '19-07-2018 00:10:29', '19-07-2018 00:10:29'),
(80, 5, 20170244, '', '20170244', '', '', 'e382f91e2c82c3853aeb0d3948275232', 1, '19-07-2018 00:10:34', '19-07-2018 00:10:34'),
(81, 5, 20170245, '', '20170245', '', '', 'b9b852ac7bd1776bc5ac5ce3b41d8af7', 1, '19-07-2018 00:10:42', '19-07-2018 00:10:42'),
(82, 5, 20170246, '', '20170246', '', '', '0394ea68951e3299bcdfa75a097d7c11', 1, '19-07-2018 00:11:03', '19-07-2018 00:11:03'),
(83, 5, 20170247, '', '20170247', '', '', '6b493230205f780e1bc26945df7481e5', 1, '19-07-2018 00:11:10', '19-07-2018 00:11:10'),
(84, 5, 20170214, '', '20170214', '', '', 'af8d9c4e238c63fb074b44eb6aed80ae', 1, '19-07-2018 00:13:21', '19-07-2018 00:13:21'),
(85, 5, 20170119, '', '20170119', '', '', '4206e38996fae4028a26d43b24f68d32', 1, '19-07-2018 00:13:42', '19-07-2018 00:13:42'),
(86, 5, 20170216, '', '20170216', '', '', '37cfff3c04f95b22bcf166df586cd7a9', 1, '19-07-2018 00:13:51', '19-07-2018 00:13:51'),
(87, 5, 20170217, '', '20170217', '', '', '56f0b515214a7ec9f08a4bbf9a56f7ba', 1, '19-07-2018 00:13:57', '19-07-2018 00:13:57'),
(88, 5, 20170121, '', '20170121', '', '', 'e369628fed6bf2eebe51b12efe570e6b', 1, '19-07-2018 00:14:03', '19-07-2018 00:14:03'),
(89, 5, 20170116, '', '20170116', '', '', '72f67e70f6b7cdc4cc893edaddf0c4c6', 1, '19-07-2018 00:14:10', '19-07-2018 00:14:10'),
(90, 5, 20170218, '', '20170218', '', '', 'bdb6920adcd0457aa17b53b22963dad9', 1, '19-07-2018 00:14:18', '19-07-2018 00:14:18'),
(91, 5, 20170219, '', '20170219', '', '', '1ee3dfcd8a0645a25a35977997223d22', 1, '19-07-2018 00:15:37', '19-07-2018 00:15:37'),
(92, 5, 20170220, '', '20170220', '', '', '08040837089cdf46631a10aca5258e16', 1, '19-07-2018 00:15:45', '19-07-2018 00:15:45'),
(93, 5, 20170125, '', '20170125', '', '', 'ae3a12e662884604c069b4dfc5a13afd', 1, '19-07-2018 00:15:53', '19-07-2018 00:15:53'),
(94, 5, 20170221, '', '20170221', '', '', '1706f191d760c78dfcec5012e43b6714', 1, '19-07-2018 00:15:59', '19-07-2018 00:15:59'),
(95, 5, 20170222, '', '20170222', '', '', 'b04c387c8384ca083a71b8da516f65f6', 1, '19-07-2018 00:16:06', '19-07-2018 00:16:06'),
(96, 5, 20170277, '', '20170277', '', '', '23c894276a2c5a16470e6a31f4618d73', 1, '19-07-2018 00:16:11', '19-07-2018 00:16:11'),
(97, 5, 20170223, '', '20170223', '', '', '689016f6ee80ef507e2f5d67614b4be8', 1, '19-07-2018 00:16:18', '19-07-2018 00:16:18'),
(98, 5, 20170204, '', '20170204', '', '', '512c5cad6c37edb98ae91c8a76c3a291', 1, '19-07-2018 00:16:25', '19-07-2018 00:16:25'),
(99, 5, 20170124, '', '20170124', '', '', '6a21bd02b3d17059c61bcb2eeb48b8cd', 1, '19-07-2018 00:16:31', '19-07-2018 00:16:31'),
(100, 5, 20170123, '', '20170123', '', '', 'f7e0b956540676a129760a3eae309294', 1, '19-07-2018 00:16:37', '19-07-2018 00:16:37'),
(101, 5, 20170122, '', '20170122', '', '', '37d7902cb2d3de686e497e31624d82e0', 1, '19-07-2018 00:16:44', '19-07-2018 00:16:44'),
(102, 5, 20170118, '', '20170118', '', '', 'd02e9bdc27a894e882fa0c9055c99722', 1, '19-07-2018 00:16:51', '19-07-2018 00:16:51'),
(103, 5, 20170115, '', '20170115', '', '', '5dd3e474f6e08e3316ce5e3bc36c666e', 1, '19-07-2018 00:17:01', '19-07-2018 00:17:01'),
(104, 5, 20170120, '', '20170120', '', '', '7369f3c86bf3c0a354615432832d9e8f', 1, '19-07-2018 00:17:12', '19-07-2018 00:17:12'),
(105, 5, 20170205, '', '20170205', '', '', 'e6385d39ec9394f2f3a354d9d2b88eec', 1, '19-07-2018 00:17:23', '19-07-2018 00:17:23'),
(106, 5, 20170206, '', '20170206', '', '', '378fb9f589cf7930275f25e4b5afbddd', 1, '19-07-2018 00:17:31', '19-07-2018 00:17:31'),
(107, 5, 20170207, '', '20170207', '', '', '22cdb13a83f73ccd1f79ffaf607b0621', 1, '19-07-2018 00:17:39', '19-07-2018 00:17:39'),
(108, 5, 20170208, '', '20170208', '', '', 'a378383b89e6719e15cd1aa45478627c', 1, '19-07-2018 00:17:45', '19-07-2018 00:17:45'),
(109, 5, 20170210, '', '20170210', '', '', '29e11dc359bad383e1243f730bdbe032', 1, '19-07-2018 00:17:52', '19-07-2018 00:17:52'),
(110, 5, 20170211, '', '20170211', '', '', '6c4bb406b3e7cd5447f7a76fd7008806', 1, '19-07-2018 00:17:58', '19-07-2018 00:17:58'),
(111, 5, 20170212, '', '20170212', '', '', '3ce83f544dbe69bb4fb19211fc442c2f', 1, '19-07-2018 00:18:04', '19-07-2018 00:18:04'),
(112, 5, 20170213, '', '20170213', '', '', '697e382cfd25b07a3e62275d3ee132b3', 1, '19-07-2018 00:18:11', '19-07-2018 00:18:11'),
(113, 5, 20170274, '', '20170274', '', '', 'dc513ea4fbdaa7a14786ffdebc4ef64e', 1, '19-07-2018 00:18:21', '19-07-2018 00:18:21'),
(114, 5, 20170335, '', '20170335', '', '', '6459257ddab7b85bf4b57845e875e4d4', 1, '19-07-2018 00:18:28', '19-07-2018 00:18:28'),
(115, 5, 20170091, '', '20170091', '', '', '90525e70b7842930586545c6f1c9310c', 1, '19-07-2018 00:19:32', '19-07-2018 00:19:32'),
(116, 5, 20170179, '', '20170179', '', '', '149ef6419512be56a93169cd5e6fa8fd', 1, '19-07-2018 00:19:38', '19-07-2018 00:19:38'),
(117, 5, 20170180, '', '20170180', '', '', '8abfe8ac9ec214d68541fcb888c0b4c3', 1, '19-07-2018 00:19:43', '19-07-2018 00:19:43'),
(118, 5, 20170181, '', '20170181', '', '', '4493f5351e66c44bc87515f72d07aec2', 1, '19-07-2018 00:19:49', '19-07-2018 00:19:49'),
(119, 5, 20170182, '', '20170182', '', '', 'fecbfa88f364df34c32702b62f11a7d9', 1, '19-07-2018 00:19:55', '19-07-2018 00:19:55'),
(120, 5, 20170183, '', '20170183', '', '', '75429d136f65d2d6168b9b6c5f6ec951', 1, '19-07-2018 00:20:01', '19-07-2018 00:20:01'),
(121, 5, 20170184, '', '20170184', '', '', 'b52340b4de4566b804c9880aa0b4af5f', 1, '19-07-2018 00:20:06', '19-07-2018 00:20:06'),
(122, 5, 20170185, '', '20170185', '', '', 'f8f5161cf94df05793592f5fab95138b', 1, '19-07-2018 00:20:11', '19-07-2018 00:20:11'),
(123, 5, 20170096, '', '20170096', '', '', '4559912e7a94a9c32b09d894f2bc3c82', 1, '19-07-2018 00:20:17', '19-07-2018 00:20:17'),
(124, 5, 20170186, '', '20170186', '', '', '8004d637b6236202217be3dfcdd8ce59', 1, '19-07-2018 00:20:23', '19-07-2018 00:20:23'),
(125, 5, 20170092, '', '20170092', '', '', '097e26b2ffb0339458b55da17425a71f', 1, '19-07-2018 00:20:29', '19-07-2018 00:20:29'),
(126, 5, 20170097, '', '20170097', '', '', '0f2818101a7ac4b96ceeba38de4b934c', 1, '19-07-2018 00:20:58', '19-07-2018 00:20:58'),
(127, 5, 20170188, '', '20170188', '', '', 'ac6b3cce8c74b2e23688c3e45532e2a7', 1, '19-07-2018 00:21:09', '19-07-2018 00:21:09'),
(128, 5, 20170094, '', '20170094', '', '', '3e9f7c16bd1cdea78f8e2eea72dfdfbe', 1, '19-07-2018 00:21:17', '19-07-2018 00:21:17'),
(129, 5, 20170095, '', '20170095', '', '', 'd2a2c1da2acde3ed27003dba9c3c1ccc', 1, '19-07-2018 00:21:22', '19-07-2018 00:21:22'),
(130, 5, 20170189, '', '20170189', '', '', '0b7a9d54deeb611edc4540d286e9a042', 1, '19-07-2018 00:21:28', '19-07-2018 00:21:28'),
(131, 5, 20170190, '', '20170190', '', '', '37f65c068b7723cd7809ee2d31d7861c', 1, '19-07-2018 00:21:33', '19-07-2018 00:21:33'),
(132, 5, 20170203, '', '20170203', '', '', '6e79ed05baec2754e25b4eac73a332d2', 1, '19-07-2018 00:21:39', '19-07-2018 00:21:39'),
(133, 5, 20170275, '', '20170275', '', '', '5fa5a5225db0056c06c029611d79e1b1', 1, '19-07-2018 00:21:45', '19-07-2018 00:21:45'),
(134, 5, 20170088, '', '20170088', '', '', '6f1d0705c91c2145201df18a1a0c7345', 1, '19-07-2018 00:21:51', '19-07-2018 00:21:51'),
(135, 5, 20170087, '', '20170087', '', '', '7fc9fd4c6654dea5be92c8ffd53bea1e', 1, '19-07-2018 00:21:56', '19-07-2018 00:21:56'),
(136, 5, 20170084, '', '20170084', '', '', '14319d9cfc6123106878dc20b94fbaf3', 1, '19-07-2018 00:22:03', '19-07-2018 00:22:03'),
(137, 5, 20170085, '', '20170085', '', '', '7beadac50e1ce55dc31343cc1a89ac5c', 1, '19-07-2018 00:22:09', '19-07-2018 00:22:09'),
(138, 5, 20170086, '', '20170086', '', '', 'c55d22f5c88cc6f04c0bb2e0025dd70b', 1, '19-07-2018 00:22:16', '19-07-2018 00:22:16'),
(139, 5, 20170191, '', '20170191', '', '', 'a24bdc3e59a4c624eee8318a51bb55b9', 1, '19-07-2018 00:22:23', '19-07-2018 00:22:23'),
(140, 5, 20170082, '', '20170082', '', '', 'd582ac40970f9885836a61d7b2c662e4', 1, '19-07-2018 00:22:29', '19-07-2018 00:22:29'),
(141, 5, 20170089, '', '20170089', '', '', '83004190b1793d7aa15f8d0d49a13eba', 1, '19-07-2018 00:22:34', '19-07-2018 00:22:34'),
(142, 5, 20170192, '', '20170192', '', '', '09def3ebbc44ff3426b28fcd88c83554', 1, '19-07-2018 00:22:39', '19-07-2018 00:22:39'),
(143, 5, 20170081, '', '20170081', '', '', '764a9f2462bf088af07b6ae6c107e62c', 1, '19-07-2018 00:22:45', '19-07-2018 00:22:45'),
(144, 5, 20170194, '', '20170194', '', '', '04fcc65450efcccdc9869442c3e36310', 1, '19-07-2018 00:22:50', '19-07-2018 00:22:50'),
(145, 5, 20170195, '', '20170195', '', '', 'c2368d3d45705a56e51ec5940e187f8d', 1, '19-07-2018 00:22:56', '19-07-2018 00:22:56'),
(146, 5, 20170100, '', '20170100', '', '', '0d441de75945e5acbc865406fc9a2559', 1, '19-07-2018 00:23:02', '19-07-2018 00:23:02'),
(147, 5, 20170099, '', '20170099', '', '', 'ea20aed6df7caa746052d227d194a395', 1, '19-07-2018 00:23:08', '19-07-2018 00:23:08'),
(148, 5, 20170196, '', '20170196', '', '', '744878fbdd26871c594f57ca61733e09', 1, '19-07-2018 00:23:14', '19-07-2018 00:23:14'),
(149, 5, 20170198, '', '20170198', '', '', '4042483f5c2c4015e2a6abd47aa76b6f', 1, '19-07-2018 00:23:19', '19-07-2018 00:23:19'),
(150, 5, 20170083, '', '20170083', '', '', '5e15fb59326e7a9c3d6558ca74621683', 1, '19-07-2018 00:23:24', '19-07-2018 00:23:24'),
(151, 5, 20170199, '', '20170199', '', '', '8558cb408c1d76621371888657d2eb1d', 1, '19-07-2018 00:24:07', '19-07-2018 00:24:07'),
(152, 5, 20170201, '', '20170201', '', '', 'ecd1b059424d5e0056f579a391d1ead9', 1, '19-07-2018 00:24:15', '19-07-2018 00:24:15'),
(153, 5, 20170164, '', '20170164', '', '', '83ddfbd1c4f871159c148d7a010e69be', 1, '19-07-2018 00:25:09', '19-07-2018 00:25:09'),
(154, 5, 20170079, '', '20170079', '', '', '15bb63b28926cd083b15e3b97567bbea', 1, '19-07-2018 00:25:18', '19-07-2018 00:25:18'),
(155, 5, 20170080, '', '20170080', '', '', 'fc5b3186f1cf0daece964f78259b7ba0', 1, '19-07-2018 00:25:24', '19-07-2018 00:25:24'),
(156, 5, 20170074, '', '20170074', '', '', '54e8912427a8d007ece906c577fdca60', 1, '19-07-2018 00:25:29', '19-07-2018 00:25:29'),
(157, 5, 20170076, '', '20170076', '', '', '04a1bf2d968f1ce381cf1f9184a807a9', 1, '19-07-2018 00:25:34', '19-07-2018 00:25:34'),
(158, 5, 20170077, '', '20170077', '', '', 'f8580959e35cb0934479bb007fb241c2', 1, '19-07-2018 00:25:39', '19-07-2018 00:25:39'),
(159, 5, 20170075, '', '20170075', '', '', '123b7f02433572a0a560e620311a469c', 1, '19-07-2018 00:25:44', '19-07-2018 00:25:44'),
(160, 5, 20170078, '', '20170078', '', '', '7d62a275027741d98073d42b8f735c68', 1, '19-07-2018 00:25:50', '19-07-2018 00:25:50'),
(161, 5, 20170168, '', '20170168', '', '', '2067e2650cd701ae71c68080f9dbbdc1', 1, '19-07-2018 00:25:56', '19-07-2018 00:25:56'),
(162, 5, 20170165, '', '20170165', '', '', 'bc37e109d92bdc1ea71da6c919d54907', 1, '19-07-2018 00:26:06', '19-07-2018 00:26:06'),
(163, 5, 20170169, '', '20170169', '', '', '7cc234202e98d2722580858573fd0817', 1, '19-07-2018 00:26:12', '19-07-2018 00:26:12'),
(164, 5, 20170166, '', '20170166', '', '', '5249ee8e0cff02ad6b4cc0ee0e50b7d1', 1, '19-07-2018 00:26:18', '19-07-2018 00:26:18'),
(165, 5, 20170073, '', '20170073', '', '', '6a5dfac4be1502501489fc0f5a24b667', 1, '19-07-2018 00:26:25', '19-07-2018 00:26:25'),
(166, 5, 20170167, '', '20170167', '', '', 'b4f1ec9f4b5c8207f8fc29522efe783d', 1, '19-07-2018 00:26:31', '19-07-2018 00:26:31'),
(167, 5, 20170170, '', '20170170', '', '', 'd20be76a86c0d71c75035fced631f874', 1, '19-07-2018 00:26:36', '19-07-2018 00:26:36'),
(168, 5, 20170268, '', '20170268', '', '', '675f9820626f5bc0afb47b57890b466e', 1, '19-07-2018 00:26:41', '19-07-2018 00:26:41'),
(169, 5, 20170171, '', '20170171', '', '', '35c5a2cb362c4d214156f930e7d13252', 1, '19-07-2018 00:26:47', '19-07-2018 00:26:47'),
(170, 5, 20170172, '', '20170172', '', '', 'da6ea77475918a3d83c7e49223d453cc', 1, '19-07-2018 00:26:53', '19-07-2018 00:26:53'),
(171, 5, 20170065, '', '20170065', '', '', 'f269cb7796c3319c9aa4d146b52139e6', 1, '19-07-2018 00:26:59', '19-07-2018 00:26:59'),
(172, 5, 20170173, '', '20170173', '', '', '7a5200e5e9b3a893e1c2b0ccba7dd72f', 1, '19-07-2018 00:27:05', '19-07-2018 00:27:05'),
(173, 5, 20170061, '', '20170061', '', '', '761e6675f9e54673cc778e7fdb2823d2', 1, '19-07-2018 00:27:11', '19-07-2018 00:27:11'),
(174, 5, 20170069, '', '20170069', '', '', 'f862d13454fd267baa5fedfffb200567', 1, '19-07-2018 00:27:17', '19-07-2018 00:27:17'),
(175, 5, 20170072, '', '20170072', '', '', 'c359889a833e7612e0cff1dc69d272bc', 1, '19-07-2018 00:27:22', '19-07-2018 00:27:22'),
(176, 5, 20170174, '', '20170174', '', '', '416849da96fb73bee793e2bf65ae43ac', 1, '19-07-2018 00:27:26', '19-07-2018 00:27:26'),
(177, 5, 20170070, '', '20170070', '', '', 'b0169350cd35566c47ba83c6ec1d6f82', 1, '19-07-2018 00:27:33', '19-07-2018 00:27:33'),
(178, 5, 20170071, '', '20170071', '', '', 'c88d8d0a6097754525e02c2246d8d27f', 1, '19-07-2018 00:27:39', '19-07-2018 00:27:39'),
(179, 5, 20170064, '', '20170064', '', '', 'bf25356fd2a6e038f1a3a59c26687e80', 1, '19-07-2018 00:27:44', '19-07-2018 00:27:44'),
(180, 5, 20170063, '', '20170063', '', '', 'd30960ce77e83d896503d43ba249caf7', 1, '19-07-2018 00:27:50', '19-07-2018 00:27:50'),
(181, 5, 20170068, '', '20170068', '', '', 'c02d0450cdd75ce7595f5eaeb5f041a3', 1, '19-07-2018 00:27:56', '19-07-2018 00:27:56'),
(182, 5, 20170175, '', '20170175', '', '', '7c250678f61f49092fa0d4040e5e54e9', 1, '19-07-2018 00:28:02', '19-07-2018 00:28:02'),
(183, 5, 20170176, '', '20170176', '', '', '3e91970f771a2c473ae36b60d1146068', 1, '19-07-2018 00:28:07', '19-07-2018 00:28:07'),
(184, 5, 20170067, '', '20170067', '', '', 'b7046757c3682a28c5bf2024e57678a0', 1, '19-07-2018 00:28:13', '19-07-2018 00:28:13'),
(185, 5, 20170178, '', '20170067', '', '', 'b7046757c3682a28c5bf2024e57678a0', 1, '19-07-2018 00:28:19', '19-07-2018 00:28:19'),
(186, 5, 20170336, '', '20170336', '', '', '60e1deb043af37db5ea4ce9ae8d2c9ea', 1, '19-07-2018 00:28:25', '19-07-2018 00:28:25'),
(187, 5, 20170338, '', '20170338', '', '', '8c6d39a0e9e6f344fb6a2d83c7c6787c', 1, '19-07-2018 00:28:31', '19-07-2018 00:28:31'),
(188, 5, 20170279, '', '20170279', '', '', '05a5cf06982ba7892ed2a6d38fe832d6', 1, '19-07-2018 00:29:10', '19-07-2018 00:29:10'),
(189, 5, 20170126, '', '20170126', '', '', '215a71a12769b056c3c32e7299f1c5ed', 1, '19-07-2018 00:29:17', '19-07-2018 00:29:17'),
(190, 5, 20170127, '', '20170127', '', '', '91665c93b72f55b2e4f1048fc8289d04', 1, '19-07-2018 00:29:23', '19-07-2018 00:29:23'),
(191, 5, 20170128, '', '20170128', '', '', '4b21cf96d4cf612f239a6c322b10c8fe', 1, '19-07-2018 00:29:29', '19-07-2018 00:29:29'),
(192, 5, 20170130, '', '20170130', '', '', '37e7897f62e8d91b1ce60515829ca282', 1, '19-07-2018 00:29:34', '19-07-2018 00:29:34'),
(193, 5, 20170129, '', '20170129', '', '', '9a84a0448b11c17666c7e5db74042219', 1, '19-07-2018 00:29:39', '19-07-2018 00:29:39'),
(194, 5, 20170131, '', '20170131', '', '', '8ff3fdef6f5144f50eb2a83cd34baa5d', 1, '19-07-2018 00:29:48', '19-07-2018 00:29:48'),
(195, 5, 20170132, '', '20170132', '', '', '6f4b7fd3eea0af87f9990faa8e3287f1', 1, '19-07-2018 00:29:53', '19-07-2018 00:29:53'),
(196, 5, 20170052, '', '20170052', '', '', 'c61aed648da48aa3893fb3eaadd88a7f', 1, '19-07-2018 00:29:58', '19-07-2018 00:29:58'),
(197, 5, 20170133, '', '20170133', '', '', 'caaa29eab72b231b0af62fbdff89bfce', 1, '19-07-2018 00:30:03', '19-07-2018 00:30:03'),
(198, 5, 20170134, '', '20170134', '', '', '6a80e309f1922a25cb00ebcbabc017ae', 1, '19-07-2018 00:30:09', '19-07-2018 00:30:09'),
(199, 5, 20170135, '', '20170135', '', '', 'd28a3097fa7cf63ad01c4f328314e2f2', 1, '19-07-2018 00:30:14', '19-07-2018 00:30:14'),
(200, 5, 20170136, '', '20170136', '', '', 'a6ea8471c120fe8cc35a2954c9b9c595', 1, '19-07-2018 00:30:20', '19-07-2018 00:30:20'),
(201, 5, 20170137, '', '20170137', '', '', '2000f6325dfc4fc3201fc45ed01c7a5d', 1, '19-07-2018 00:30:27', '19-07-2018 00:30:27'),
(202, 5, 20170139, '', '20170139', '', '', 'b6846b0186a035fcc76b1b1d26fd42fa', 1, '19-07-2018 00:30:33', '19-07-2018 00:30:33'),
(203, 5, 20170138, '', '20170138', '', '', 'e11943a6031a0e6114ae69c257617980', 1, '19-07-2018 00:30:38', '19-07-2018 00:30:38'),
(204, 5, 20170053, '', '20170053', '', '', '317d17f10845da500bcf49780b7f35bf', 1, '19-07-2018 00:30:47', '19-07-2018 00:30:47'),
(205, 5, 20170141, '', '20170141', '', '', '670c26185a3783678135b4697f7dbd1a', 1, '19-07-2018 00:30:54', '19-07-2018 00:30:54'),
(206, 5, 20170142, '', '20170142', '', '', 'e88f243bf341ded9b4ced444795c3f17', 1, '19-07-2018 00:30:59', '19-07-2018 00:30:59'),
(207, 5, 20170143, '', '20170143', '', '', '7c7077ca5231fd6ad758b9d49a2a1eeb', 1, '19-07-2018 00:31:05', '19-07-2018 00:31:05'),
(208, 5, 20170276, '', '20170276', '', '', 'e35d7a5768c4b85b4780384d55dc3620', 1, '19-07-2018 00:31:10', '19-07-2018 00:31:10'),
(209, 5, 20170304, '', '20170304', '', '', '87ba276ebbe553ec05d2f5b37c20125f', 1, '19-07-2018 00:31:16', '19-07-2018 00:31:16'),
(210, 5, 20170040, '', '20170040', '', '', 'c3810d4a9513b028fc0f2a83cb6d7b50', 1, '19-07-2018 00:35:01', '19-07-2018 00:35:01'),
(211, 5, 20170144, '', '20170144', '', '', '4afa19649ae378da31a423bcd78a97c8', 1, '19-07-2018 00:35:08', '19-07-2018 00:35:08'),
(212, 5, 20170041, '', '20170041', '', '', 'bb1443cc31d7396bf73e7858cea114e1', 1, '19-07-2018 00:35:15', '19-07-2018 00:35:15'),
(213, 5, 20170042, '', '20170042', '', '', '0cd6a40ae578078bc72e5310df41e918', 1, '19-07-2018 00:35:25', '19-07-2018 00:35:25'),
(214, 5, 20170043, '', '20170043', '', '', 'f93882cbd8fc7fb794c1011d63be6fb6', 1, '19-07-2018 00:35:32', '19-07-2018 00:35:32'),
(215, 5, 20170044, '', '20170044', '', '', '39ae2ed11b14a4ccb41d35e9d1ba5d11', 1, '19-07-2018 00:35:37', '19-07-2018 00:35:37'),
(216, 5, 20170045, '', '20170045', '', '', 'bc3ea21614e0fdc4359bdd4d3315313f', 1, '19-07-2018 00:35:42', '19-07-2018 00:35:42'),
(217, 5, 20170145, '', '20170145', '', '', '0e4f5cc9f4f3f7f1651a6b9f9214e5b1', 1, '19-07-2018 00:35:47', '19-07-2018 00:35:47'),
(218, 5, 20170046, '', '20170046', '', '', '94ef7214c4a90790186e255304f8fd1f', 1, '19-07-2018 00:35:54', '19-07-2018 00:35:54'),
(219, 5, 20170054, '', '20170054', '', '', 'e5e6851e7f7ffd3530e7389e183aa468', 1, '19-07-2018 00:36:02', '19-07-2018 00:36:02'),
(220, 5, 20170047, '', '20170047', '', '', '9d949c3d8baa0f9df6f22c4661946a61', 1, '19-07-2018 00:36:08', '19-07-2018 00:36:08'),
(221, 5, 20170146, '', '20170146', '', '', 'b0f2ad44d26e1a6f244201fe0fd864d1', 1, '19-07-2018 00:37:01', '19-07-2018 00:37:01'),
(222, 5, 20170147, '', '20170147', '', '', '16fc18d787294ad5171100e33d05d4e2', 1, '19-07-2018 00:37:09', '19-07-2018 00:37:09'),
(223, 5, 20170003, '', '20170003', '', '', '0c1c995b77ea7312f887ddd9f9d35de5', 1, '19-07-2018 00:37:30', '19-07-2018 00:37:30'),
(224, 5, 20170004, '', '20170004', '', '', 'f52378e14237225a6f6c7d802dc6abbd', 1, '19-07-2018 00:37:37', '19-07-2018 00:37:37'),
(225, 5, 20170014, '', '20170014', '', '', '81c650caac28cdefce4de5ddc18befa0', 1, '19-07-2018 00:37:43', '19-07-2018 00:37:43'),
(226, 5, 20170006, '', '20170006', '', '', '953ecc4b20bb9dfcbfa3faaa4967bfda', 1, '19-07-2018 00:37:49', '19-07-2018 00:37:49'),
(227, 5, 20170005, '', '20170005', '', '', '45c68484c6fc509cb25bdfca881e5cd8', 1, '19-07-2018 00:37:54', '19-07-2018 00:37:54'),
(228, 5, 20170007, '', '20170007', '', '', '7ae26cbe9586dea7d1f0fa372aa86811', 1, '19-07-2018 00:37:59', '19-07-2018 00:37:59'),
(229, 5, 20170148, '', '20170148', '', '', '740a02d0786a4239a62076f650cd26da', 1, '19-07-2018 00:38:05', '19-07-2018 00:38:05'),
(230, 5, 20170009, '', '20170009', '', '', '13384ffc9d8bdb21c53c6f72d46f7866', 1, '19-07-2018 00:38:11', '19-07-2018 00:38:11'),
(231, 5, 20170008, '', '20170008', '', '', 'fd9042c9b077fe393b18ae78feb58279', 1, '19-07-2018 00:38:17', '19-07-2018 00:38:17'),
(232, 5, 20170016, '', '20170016', '', '', '5d78d182fd5f5510588695863d22ac27', 1, '19-07-2018 00:38:26', '19-07-2018 00:38:26'),
(233, 5, 20170010, '', '20170010', '', '', '3a9de64a6c62c8cd6ff8320bafb8452f', 1, '19-07-2018 00:38:32', '19-07-2018 00:38:32'),
(234, 5, 20170015, '', '20170015', '', '', 'bb04af0f7ecaee4aae62035497da1387', 1, '19-07-2018 00:38:38', '19-07-2018 00:38:38'),
(235, 5, 20170011, '', '20170011', '', '', 'be7ecaca534f98c4ca134e527b12d4c8', 1, '19-07-2018 00:38:43', '19-07-2018 00:38:43'),
(236, 5, 20170013, '', '20170013', '', '', 'f461285987ddc0629f8a4ab6477642b5', 1, '19-07-2018 00:38:49', '19-07-2018 00:38:49'),
(237, 5, 20170012, '', '20170012', '', '', '42dab56861d81108ee356d037190c315', 1, '19-07-2018 00:38:55', '19-07-2018 00:38:55'),
(238, 5, 20170002, '', '20170002', '', '', 'dab1263d1e6a88c9ba5e7e294def5e8b', 1, '19-07-2018 00:39:47', '19-07-2018 00:39:47'),
(239, 5, 20170150, '', '20170150', '', '', '50cf0763d8eb871776d4f28b39deb564', 1, '19-07-2018 00:39:54', '19-07-2018 00:39:54'),
(240, 5, 20170151, '', '20170151', '', '', '256bf8e6923a52fda8ddf7dc050a1148', 1, '19-07-2018 00:40:00', '19-07-2018 00:40:00'),
(241, 5, 20170152, '', '20170152', '', '', 'c24f4c5eef7ec01c46e003a9296c8645', 1, '19-07-2018 00:40:05', '19-07-2018 00:40:05'),
(242, 5, 20170153, '', '20170153', '', '', 'f0031c7a91d74015a9addfbc589f3fe5', 1, '19-07-2018 00:40:10', '19-07-2018 00:40:10'),
(243, 5, 20170154, '', '20170154', '', '', '1f5795e7b93f423c397e6f7aaff80133', 1, '19-07-2018 00:40:16', '19-07-2018 00:40:16'),
(244, 5, 20170155, '', '20170155', '', '', '5d8c6ee0d8964e66a3225458f981522d', 1, '19-07-2018 00:40:25', '19-07-2018 00:40:25'),
(245, 5, 20170337, '', '20170337', '', '', '130f1a8e9e102707f3f91b010f151b0b', 1, '19-07-2018 00:40:31', '19-07-2018 00:40:31'),
(246, 5, 20170157, '', '20170157', '', '', '5d8c6ee0d8964e66a3225458f981522d', 1, '19-07-2018 00:40:37', '19-07-2018 00:40:37'),
(247, 5, 20170158, '', '20170158', '', '', '3ba716f4a7265eef381f7cef9e271f27', 1, '19-07-2018 00:40:48', '19-07-2018 00:40:48'),
(248, 5, 20170060, '', '20170060', '', '', 'c4d2ce3f3ebb5393a77c33c0cd95dc93', 1, '19-07-2018 00:41:08', '19-07-2018 00:41:08'),
(249, 5, 20170056, '', '20170056', '', '', '5e62d03aec0d17facfc5355dd90d441c', 1, '19-07-2018 00:41:15', '19-07-2018 00:41:15'),
(250, 5, 20170058, '', '20170058', '', '', '7296d81c3d5e425bc1785994bea8a0d2', 1, '19-07-2018 00:41:28', '19-07-2018 00:41:28'),
(251, 5, 20170159, '', '20170159', '', '', '29e48b79ae6fc68e9b6480b677453586', 1, '19-07-2018 00:41:37', '19-07-2018 00:41:37'),
(252, 5, 20170160, '', '20170160', '', '', 'c70daf247944fe3add32218f914c75a6', 1, '19-07-2018 00:41:43', '19-07-2018 00:41:43'),
(253, 5, 20170161, '', '20170161', '', '', 'a7b23e6eefbe6cf04b8e62a6f0915550', 1, '19-07-2018 00:41:48', '19-07-2018 00:41:48'),
(254, 5, 20170057, '', '20170057', '', '', '01894d6f048493d2cacde3c579c315a3', 1, '19-07-2018 00:41:53', '19-07-2018 00:41:53'),
(255, 5, 20170162, '', '20170162', '', '', 'f30824bacaaabc2fc3aa0b6d658a56e9', 1, '19-07-2018 00:41:59', '19-07-2018 00:41:59'),
(256, 5, 20170059, '', '20170059', '', '', 'b2b7c555125ecacf4bb7678d9dc39a21', 1, '19-07-2018 00:42:05', '19-07-2018 00:42:05'),
(257, 5, 20170163, '', '20170163', '', '', '44feb0096faa8326192570788b38c1d1', 1, '19-07-2018 00:42:10', '19-07-2018 00:42:10'),
(258, 5, 20170019, '', '20170019', '', '', 'ed46558a56a4a26b96a68738a0d28273', 1, '19-07-2018 00:42:39', '19-07-2018 00:42:39'),
(259, 5, 20170331, '', '20170331', '', '', 'f1a94cef23357f68031e958c443c0dfe', 1, '19-07-2018 10:25:43', '19-07-2018 10:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_details`
--

CREATE TABLE `tbl_user_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `present_address` text NOT NULL,
  `permanent_address` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `date_birth` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `created` varchar(100) NOT NULL,
  `modified` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user_details`
--

INSERT INTO `tbl_user_details` (`id`, `user_id`, `image`, `present_address`, `permanent_address`, `mobile`, `employee_id`, `joining_date`, `date_birth`, `gender`, `marital_status`, `created`, `modified`) VALUES
(1, 2, 'mahbub.jpg', 'Dhaka', 'Gazipur', '01722150447', '5', '', '', '1', '1', '', ''),
(2, 1, 'mrmonju.jpg', 'Dhaka', 'Dhaka', '01912751486', '', '', '', '1', '1', '', ''),
(3, 3, 'admin1.jpg', '', '', '', '', '', '', '', '', '', ''),
(4, 4, 'admin1.jpg', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `VideoID` int(11) NOT NULL,
  `VideoTitle` varchar(100) NOT NULL,
  `VideoSlug` varchar(50) NOT NULL,
  `VideoUrl` varchar(50) NOT NULL,
  `VideoGallarySilderStatus` int(5) NOT NULL,
  `VideoGallery1Status` int(5) NOT NULL,
  `VideoGallery2Status` int(5) NOT NULL,
  `VideoStatus` int(11) NOT NULL,
  `created` varchar(32) NOT NULL,
  `modified` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`VideoID`, `VideoTitle`, `VideoSlug`, `VideoUrl`, `VideoGallarySilderStatus`, `VideoGallery1Status`, `VideoGallery2Status`, `VideoStatus`, `created`, `modified`) VALUES
(1, 'Mother Song', 'Mother Song', 'https://www.youtube.com/embed/KppTNku6M5A', 1, 1, 1, 1, '14-11-2017 18:19:40', '29-04-2018 13:20:49'),
(3, 'Islamic Song', 'Islamic Song', 'https://www.youtube.com/embed/ifqkvusTreo', 1, 1, 1, 1, '14-11-2017 18:34:43', '04-02-2018 15:07:25'),
(4, 'Islamic Song', 'Islamic Song', 'https://www.youtube.com/embed/vylayGJlbDY', 1, 1, 1, 1, '14-11-2017 20:37:05', '04-02-2018 15:07:16'),
(6, 'Islamic Song', 'Islamic Song', 'https://www.youtube.com/embed/n8Rg7qqg0f8', 1, 1, 1, 1, '15-11-2017 12:50:34', '04-02-2018 15:19:32'),
(7, ' Muslim', 'Muslim', 'https://www.youtube.com/embed/n8Rg7qqg0f8', 1, 1, 1, 1, '15-11-2017 13:09:15', '05-02-2018 14:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_year`
--

CREATE TABLE `tbl_year` (
  `Year_ID` int(11) NOT NULL,
  `Year_Name` int(20) NOT NULL,
  `Year_status` tinyint(3) NOT NULL,
  `Created` varchar(50) NOT NULL,
  `Modified` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_year`
--

INSERT INTO `tbl_year` (`Year_ID`, `Year_Name`, `Year_status`, `Created`, `Modified`) VALUES
(1, 2018, 1, '', 0),
(2, 2019, 1, '', 0),
(4, 2020, 1, '', 0),
(5, 2017, 1, '', 0),
(6, 2016, 1, '', 0),
(7, 2015, 1, '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`AboutID`);

--
-- Indexes for table `tbl_account_transaction`
--
ALTER TABLE `tbl_account_transaction`
  ADD PRIMARY KEY (`account_trn_ID`);

--
-- Indexes for table `tbl_addfee`
--
ALTER TABLE `tbl_addfee`
  ADD PRIMARY KEY (`Add_fee_ID`);

--
-- Indexes for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  ADD PRIMARY KEY (`Book_cat_ID`);

--
-- Indexes for table `tbl_class`
--
ALTER TABLE `tbl_class`
  ADD PRIMARY KEY (`Class_ID`);

--
-- Indexes for table `tbl_classtime`
--
ALTER TABLE `tbl_classtime`
  ADD PRIMARY KEY (`ClassTime_ID`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`ContactID`);

--
-- Indexes for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_depart_desig_notice`
--
ALTER TABLE `tbl_depart_desig_notice`
  ADD PRIMARY KEY (`depart_desg_id`);

--
-- Indexes for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  ADD PRIMARY KEY (`DesignationID`);

--
-- Indexes for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`DISID`);

--
-- Indexes for table `tbl_division`
--
ALTER TABLE `tbl_division`
  ADD PRIMARY KEY (`DIVID`);

--
-- Indexes for table `tbl_exam_routine`
--
ALTER TABLE `tbl_exam_routine`
  ADD PRIMARY KEY (`Exam_routine_ID`);

--
-- Indexes for table `tbl_exam_term`
--
ALTER TABLE `tbl_exam_term`
  ADD PRIMARY KEY (`Exam_term_ID`);

--
-- Indexes for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  ADD PRIMARY KEY (`Expense_ID`);

--
-- Indexes for table `tbl_expense_cat`
--
ALTER TABLE `tbl_expense_cat`
  ADD PRIMARY KEY (`expense_cat_ID`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`FooterID`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`Group_ID`);

--
-- Indexes for table `tbl_guardian`
--
ALTER TABLE `tbl_guardian`
  ADD PRIMARY KEY (`Guardian_ID`),
  ADD UNIQUE KEY `Parents_UNQ_ID` (`Guardian_UNQ_ID`);

--
-- Indexes for table `tbl_header`
--
ALTER TABLE `tbl_header`
  ADD PRIMARY KEY (`HeaderID`);

--
-- Indexes for table `tbl_header_info`
--
ALTER TABLE `tbl_header_info`
  ADD PRIMARY KEY (`header_info_id`);

--
-- Indexes for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  ADD PRIMARY KEY (`Invoice_ID`);

--
-- Indexes for table `tbl_invoice_print`
--
ALTER TABLE `tbl_invoice_print`
  ADD PRIMARY KEY (`Invoice_p_ID`);

--
-- Indexes for table `tbl_invoice_trans`
--
ALTER TABLE `tbl_invoice_trans`
  ADD PRIMARY KEY (`Invoice_trans_ID`);

--
-- Indexes for table `tbl_invoice_trans_details`
--
ALTER TABLE `tbl_invoice_trans_details`
  ADD PRIMARY KEY (`Invoice_tdetails_ID`);

--
-- Indexes for table `tbl_invoice_type`
--
ALTER TABLE `tbl_invoice_type`
  ADD PRIMARY KEY (`Invoice_type_ID`);

--
-- Indexes for table `tbl_library`
--
ALTER TABLE `tbl_library`
  ADD PRIMARY KEY (`Lib_ID`);

--
-- Indexes for table `tbl_location`
--
ALTER TABLE `tbl_location`
  ADD PRIMARY KEY (`LOCID`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`MemberID`);

--
-- Indexes for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  ADD PRIMARY KEY (`note_id`);

--
-- Indexes for table `tbl_notice_publish`
--
ALTER TABLE `tbl_notice_publish`
  ADD PRIMARY KEY (`notice_id`);

--
-- Indexes for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pages_name`
--
ALTER TABLE `tbl_pages_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_parents`
--
ALTER TABLE `tbl_parents`
  ADD PRIMARY KEY (`Parents_ID`),
  ADD UNIQUE KEY `Parents_UNQ_ID` (`Parents_UNQ_ID`);

--
-- Indexes for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  ADD PRIMARY KEY (`photos_id`);

--
-- Indexes for table `tbl_photo_galleries`
--
ALTER TABLE `tbl_photo_galleries`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_profession`
--
ALTER TABLE `tbl_profession`
  ADD PRIMARY KEY (`ProfessionID`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`Room_ID`);

--
-- Indexes for table `tbl_section`
--
ALTER TABLE `tbl_section`
  ADD PRIMARY KEY (`Section_ID`);

--
-- Indexes for table `tbl_shift`
--
ALTER TABLE `tbl_shift`
  ADD PRIMARY KEY (`Shift_ID`);

--
-- Indexes for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  ADD PRIMARY KEY (`SMSID`);

--
-- Indexes for table `tbl_sms_transactions`
--
ALTER TABLE `tbl_sms_transactions`
  ADD PRIMARY KEY (`SMSID`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`Staff_ID`),
  ADD UNIQUE KEY `Staff_UniqueID` (`Staff_UniqueID`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`Std_ID`),
  ADD UNIQUE KEY `STD_UNQ_ID` (`STD_UNQ_ID`);

--
-- Indexes for table `tbl_student_account`
--
ALTER TABLE `tbl_student_account`
  ADD PRIMARY KEY (`St_Account_ID`);

--
-- Indexes for table `tbl_student_attendance`
--
ALTER TABLE `tbl_student_attendance`
  ADD PRIMARY KEY (`Std_Attendance_ID`);

--
-- Indexes for table `tbl_student_atten_summary`
--
ALTER TABLE `tbl_student_atten_summary`
  ADD PRIMARY KEY (`Stu_atten_Sum_ID`);

--
-- Indexes for table `tbl_student_invoice`
--
ALTER TABLE `tbl_student_invoice`
  ADD PRIMARY KEY (`Std_Invoicve_ID`);

--
-- Indexes for table `tbl_stu_marks_input`
--
ALTER TABLE `tbl_stu_marks_input`
  ADD PRIMARY KEY (`Marks_ID`);

--
-- Indexes for table `tbl_stu_marks_summary`
--
ALTER TABLE `tbl_stu_marks_summary`
  ADD PRIMARY KEY (`Marks_Sum_ID`);

--
-- Indexes for table `tbl_stu_password`
--
ALTER TABLE `tbl_stu_password`
  ADD PRIMARY KEY (`stu_pass_id`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`Subject_ID`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`Teacher_ID`),
  ADD UNIQUE KEY `Teachers_UNQ_ID` (`Teacher_UniqueID`);

--
-- Indexes for table `tbl_teacher_attendance`
--
ALTER TABLE `tbl_teacher_attendance`
  ADD PRIMARY KEY (`Teacher_Attendance_ID`);

--
-- Indexes for table `tbl_time_slot`
--
ALTER TABLE `tbl_time_slot`
  ADD PRIMARY KEY (`Time_ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_year`
--
ALTER TABLE `tbl_year`
  ADD PRIMARY KEY (`Year_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `AboutID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_account_transaction`
--
ALTER TABLE `tbl_account_transaction`
  MODIFY `account_trn_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_addfee`
--
ALTER TABLE `tbl_addfee`
  MODIFY `Add_fee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_book_category`
--
ALTER TABLE `tbl_book_category`
  MODIFY `Book_cat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_class`
--
ALTER TABLE `tbl_class`
  MODIFY `Class_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_classtime`
--
ALTER TABLE `tbl_classtime`
  MODIFY `ClassTime_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `ContactID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_departments`
--
ALTER TABLE `tbl_departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_depart_desig_notice`
--
ALTER TABLE `tbl_depart_desig_notice`
  MODIFY `depart_desg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_designation`
--
ALTER TABLE `tbl_designation`
  MODIFY `DesignationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_designations`
--
ALTER TABLE `tbl_designations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `DISID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_division`
--
ALTER TABLE `tbl_division`
  MODIFY `DIVID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_exam_routine`
--
ALTER TABLE `tbl_exam_routine`
  MODIFY `Exam_routine_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_exam_term`
--
ALTER TABLE `tbl_exam_term`
  MODIFY `Exam_term_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_expense`
--
ALTER TABLE `tbl_expense`
  MODIFY `Expense_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_expense_cat`
--
ALTER TABLE `tbl_expense_cat`
  MODIFY `expense_cat_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `FooterID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `Group_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_guardian`
--
ALTER TABLE `tbl_guardian`
  MODIFY `Guardian_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_header`
--
ALTER TABLE `tbl_header`
  MODIFY `HeaderID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_header_info`
--
ALTER TABLE `tbl_header_info`
  MODIFY `header_info_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_invoice`
--
ALTER TABLE `tbl_invoice`
  MODIFY `Invoice_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_invoice_print`
--
ALTER TABLE `tbl_invoice_print`
  MODIFY `Invoice_p_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_invoice_trans`
--
ALTER TABLE `tbl_invoice_trans`
  MODIFY `Invoice_trans_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_invoice_trans_details`
--
ALTER TABLE `tbl_invoice_trans_details`
  MODIFY `Invoice_tdetails_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_invoice_type`
--
ALTER TABLE `tbl_invoice_type`
  MODIFY `Invoice_type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_library`
--
ALTER TABLE `tbl_library`
  MODIFY `Lib_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_location`
--
ALTER TABLE `tbl_location`
  MODIFY `LOCID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=520;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `MemberID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_notes`
--
ALTER TABLE `tbl_notes`
  MODIFY `note_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_notice_publish`
--
ALTER TABLE `tbl_notice_publish`
  MODIFY `notice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_pages`
--
ALTER TABLE `tbl_pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `tbl_pages_name`
--
ALTER TABLE `tbl_pages_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_parents`
--
ALTER TABLE `tbl_parents`
  MODIFY `Parents_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_permissions`
--
ALTER TABLE `tbl_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `tbl_photos`
--
ALTER TABLE `tbl_photos`
  MODIFY `photos_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_photo_galleries`
--
ALTER TABLE `tbl_photo_galleries`
  MODIFY `gallery_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_profession`
--
ALTER TABLE `tbl_profession`
  MODIFY `ProfessionID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `Room_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_section`
--
ALTER TABLE `tbl_section`
  MODIFY `Section_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_shift`
--
ALTER TABLE `tbl_shift`
  MODIFY `Shift_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_sms`
--
ALTER TABLE `tbl_sms`
  MODIFY `SMSID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_sms_transactions`
--
ALTER TABLE `tbl_sms_transactions`
  MODIFY `SMSID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `Staff_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `Std_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=261;

--
-- AUTO_INCREMENT for table `tbl_student_account`
--
ALTER TABLE `tbl_student_account`
  MODIFY `St_Account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_student_attendance`
--
ALTER TABLE `tbl_student_attendance`
  MODIFY `Std_Attendance_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=975;

--
-- AUTO_INCREMENT for table `tbl_student_atten_summary`
--
ALTER TABLE `tbl_student_atten_summary`
  MODIFY `Stu_atten_Sum_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;

--
-- AUTO_INCREMENT for table `tbl_student_invoice`
--
ALTER TABLE `tbl_student_invoice`
  MODIFY `Std_Invoicve_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `tbl_stu_marks_input`
--
ALTER TABLE `tbl_stu_marks_input`
  MODIFY `Marks_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1912;

--
-- AUTO_INCREMENT for table `tbl_stu_marks_summary`
--
ALTER TABLE `tbl_stu_marks_summary`
  MODIFY `Marks_Sum_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `tbl_stu_password`
--
ALTER TABLE `tbl_stu_password`
  MODIFY `stu_pass_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=252;

--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `Subject_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `Teacher_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `tbl_teacher_attendance`
--
ALTER TABLE `tbl_teacher_attendance`
  MODIFY `Teacher_Attendance_ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_time_slot`
--
ALTER TABLE `tbl_time_slot`
  MODIFY `Time_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=260;

--
-- AUTO_INCREMENT for table `tbl_user_details`
--
ALTER TABLE `tbl_user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_year`
--
ALTER TABLE `tbl_year`
  MODIFY `Year_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
