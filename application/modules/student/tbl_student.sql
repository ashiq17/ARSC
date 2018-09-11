-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2018 at 11:57 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `Std_ID` int(11) NOT NULL,
  `Std_Name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `STD_UNQ_ID` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Std_academic_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Std_group_ID` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `Std_parent` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_parent2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_registration_date` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `Std_parent_mobile` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_EntryDateTime` datetime NOT NULL,
  `Std_class_ID` longtext COLLATE utf8_unicode_ci NOT NULL,
  `Std_section_ID` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Std_roll` longtext COLLATE utf8_unicode_ci NOT NULL,
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
  `Std_status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`Std_ID`, `Std_Name`, `STD_UNQ_ID`, `Std_academic_ID`, `Std_group_ID`, `Std_parent`, `Std_parent2`, `Std_registration_date`, `Std_parent_mobile`, `Std_EntryDateTime`, `Std_class_ID`, `Std_section_ID`, `Std_roll`, `Std_birthday`, `Std_gender`, `Image`, `Std_address`, `Std_mobile`, `Std_email`, `Std_religion`, `Std_transport_ID`, `Std_hostel_ID`, `Created`, `Modified`, `Std_status`) VALUES
(1, 'RAKIBUL HASAN OVI', '201818013', '1', '1', 'kamal khalifa', 'kaleda', '12-03-2018', '01725632518', '0000-00-00 00:00:00', '2', '1', '0112', '12-03-2018', '1', 'muhaimin-300x300.jpg', '                                                                                                                                                                    Dhaka,Bangladesh                                                                                                                                                            ', '', 'rakibovi1@gmail.com', '1', '', '', '22-03-2018 11:59:55', '', '1'),
(2, 'PRIYA AKTAR', '201831698', '1', '2', 'Hossain Rahaman', '', '12-03-2018', '01725632518', '0000-00-00 00:00:00', '1', '1', '05', '12-03-2018', '1', 'jannatul-warda-subyta-std-ii-girls-300x300.jpg', 'Dhaka,Bangladesh', '01738481864', 'priya123@gmail.com', '1', '', '', '12-03-2018 04:08:12', '', '1'),
(3, 'MD. MARUP', '201825763', '1', '1', 'Hossain Rahaman', '', '12-03-2018', '01725632518', '0000-00-00 00:00:00', '1', '1', '07', '12-03-2018', '1', 'image_06_2.jpg', 'Dhaka,Bangladesh', '01738481864', 'maruppersonal@gmail.com', '2', '', '', '12-03-2018 04:09:57', '', '1'),
(4, 'NAHIDA SULTANA', '201813216', '1', '1', 'Morshed Alom', 'Halima', '03-04-2011', '01725632518', '0000-00-00 00:00:00', '2', '2', '01', '12-03-2015', '1', 'shahara-khaton-std-iv-girls1.jpg', '                                                                                                                                                                    Dhaka Bangladesh                                                                                                                                                            ', '', 'nahid06@gmail.com', '1', '', '', '22-03-2018 11:53:17', '', '1'),
(5, 'Mrs Shariha Akter Jhuma', '201827481', '1', '1', 'Hossain Rahaman', '', '14-03-2018', '01725632518', '0000-00-00 00:00:00', '3', '3', '110', '14-03-2014', '1', 'mahbub5.jpg', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       Dhaka,Bangladesh                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                         ', '', 'priya123@gmail.com', '2', '', '', '14-03-2018 15:04:46', '', '1'),
(6, 'Mahbub', '20181676310781', '1', '4', 'Abdul Awal', '', '14-03-2018', '01711150447', '0000-00-00 00:00:00', '9', '2', '10', '10-03-2011', '1', 'mahbub6.jpg', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      Dahka                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          ', '', 'shant1o@gmail.com', '1', '', '', '14-03-2018 15:05:05', '', '1'),
(9, 'abc', '201822045', '2', '1', '', '', '18-03-2018', '', '0000-00-00 00:00:00', '4', '2', '11', '18-03-2018', '1', 'alomgir-kabir.jpg', '                                                                                ', '', '', '1', '', '', '19-03-2018 19:34:17', '', '1'),
(10, 'sss', '201823196', '1', '1', 'ffff', 'mmm', '20-03-2018', '01749717065', '0000-00-00 00:00:00', '1', '1', '01', '20-03-2018', 'Male', '63EB6188-3EA4-4175-88F9-8EF27FE9C8DD.jpg', 'dhaka', '', 'dhaka@gmail.com', '1', '', '', '20-03-2018 14:10:50', '', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`Std_ID`),
  ADD UNIQUE KEY `STD_UNQ_ID` (`STD_UNQ_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `Std_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
