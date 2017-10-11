-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: 198.23.52.190:3306
-- Generation Time: Oct 10, 2017 at 02:12 PM
-- Server version: 5.6.26
-- PHP Version: 5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `syedathar_idis`
--

-- --------------------------------------------------------

--
-- Table structure for table `ids_all`
--

CREATE TABLE IF NOT EXISTS `ids_all` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `BW` varchar(60) NOT NULL,
  `clr` varchar(60) NOT NULL,
  `Hard_bound_Buckram_Cover` tinyint(1) NOT NULL,
  `Hard_bound_Magesta_Cover` tinyint(1) NOT NULL,
  `file_name` varchar(200) NOT NULL,
  `Soft_Magesta_Covers` tinyint(1) NOT NULL,
  `Soft_Bound_Acetate_Cover` tinyint(1) NOT NULL,
  `Wiro_Bound` tinyint(1) NOT NULL,
  `Front_and_Spine_Hotfoil_Lettering` tinyint(1) NOT NULL,
  `CD` tinyint(1) NOT NULL,
  `Pocket_for_CD` tinyint(1) NOT NULL,
  `Bound_Copy_include_Printing_Cost` tinyint(1) NOT NULL,
  `per_page` tinyint(1) NOT NULL,
  `Turnitin_Black_and_white` tinyint(1) NOT NULL,
  `Turnitin_Colour` tinyint(1) NOT NULL,
  `Turnitin_Report_Sleeve` tinyint(1) NOT NULL,
  `total` varchar(60) NOT NULL,
  `total_pages` int(60) NOT NULL,
  `transaction_id` varchar(90) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ids_all`
--

INSERT INTO `ids_all` (`id`, `name`, `email`, `BW`, `clr`, `Hard_bound_Buckram_Cover`, `Hard_bound_Magesta_Cover`, `file_name`, `Soft_Magesta_Covers`, `Soft_Bound_Acetate_Cover`, `Wiro_Bound`, `Front_and_Spine_Hotfoil_Lettering`, `CD`, `Pocket_for_CD`, `Bound_Copy_include_Printing_Cost`, `per_page`, `Turnitin_Black_and_white`, `Turnitin_Colour`, `Turnitin_Report_Sleeve`, `total`, `total_pages`, `transaction_id`, `created`, `updated`) VALUES
(22, 'zxdsfd', 'swfwf@ssdf.vom', '22', '2', 0, 0, '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF_2.pdf', 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 1, '23.22', 2, 'QWEQ12312', '2017-09-18 00:57:54', '2017-09-18 00:58:37'),
(23, 'athar', 'atharnaqvi@gmail.com', '66', '6', 0, 0, 'test1.pdf', 0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, '4.91', 67, '', '2017-09-18 16:31:12', '0000-00-00 00:00:00'),
(24, 'fa', '0571351@gmail.com', '1', '1', 1, 0, 'cv.pdf', 0, 0, 0, 0, 0, 1, 0, 1, 0, 1, 0, '35.11', 1, '', '2017-09-18 16:38:25', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `ids_allz`
--

CREATE TABLE IF NOT EXISTS `ids_allz` (
  `id` int(11) NOT NULL,
  `name` varchar(90) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `email` varchar(90) NOT NULL,
  `cell` varchar(90) NOT NULL,
  `inst` varchar(90) NOT NULL,
  `address` text NOT NULL,
  `address2` text NOT NULL,
  `postal_code` varchar(100) NOT NULL,
  `p_BW` varchar(90) NOT NULL,
  `p_clr` varchar(90) NOT NULL,
  `p_copies` varchar(90) NOT NULL,
  `p_pages` varchar(90) NOT NULL,
  `p_total` varchar(90) NOT NULL,
  `t_BW` varchar(90) NOT NULL,
  `t_clr` varchar(90) NOT NULL,
  `t_copies` varchar(90) NOT NULL,
  `t_pages` varchar(90) NOT NULL,
  `t_total` varchar(90) NOT NULL,
  `b_bin` varchar(90) NOT NULL,
  `b_copies` varchar(90) NOT NULL,
  `b_true` varchar(90) NOT NULL,
  `b_total` varchar(90) NOT NULL,
  `e_cdp` varchar(90) NOT NULL,
  `e_cd` varchar(90) NOT NULL,
  `e_tr` varchar(90) NOT NULL,
  `e_total` varchar(90) NOT NULL,
  `grand_total` varchar(90) NOT NULL,
  `file` varchar(200) NOT NULL,
  `file2` varchar(200) NOT NULL,
  `user_status` varchar(100) NOT NULL,
  `user_notes` text NOT NULL,
  `admin_status` varchar(100) NOT NULL,
  `admin_notes` text NOT NULL,
  `tracking` varchar(100) NOT NULL,
  `payment` varchar(100) NOT NULL,
  `tp_bm_1` text NOT NULL,
  `tp_bm_2` text NOT NULL,
  `tp_bm_3` text NOT NULL,
  `tp_bm_4` text NOT NULL,
  `tp_bm_5` text NOT NULL,
  `tp_bm_6` text NOT NULL,
  `foil_1` text NOT NULL,
  `foil_2` text NOT NULL,
  `foil_3` text NOT NULL,
  `foil_4` text NOT NULL,
  `myImage` text NOT NULL,
  `logo` text NOT NULL,
  `text_color` text NOT NULL,
  `foil_spine` text NOT NULL,
  `hotfoilcolour` text NOT NULL,
  `spine_up_down` text NOT NULL,
  `l_position` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `notes` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ids_allz`
--

INSERT INTO `ids_allz` (`id`, `name`, `lname`, `email`, `cell`, `inst`, `address`, `address2`, `postal_code`, `p_BW`, `p_clr`, `p_copies`, `p_pages`, `p_total`, `t_BW`, `t_clr`, `t_copies`, `t_pages`, `t_total`, `b_bin`, `b_copies`, `b_true`, `b_total`, `e_cdp`, `e_cd`, `e_tr`, `e_total`, `grand_total`, `file`, `file2`, `user_status`, `user_notes`, `admin_status`, `admin_notes`, `tracking`, `payment`, `tp_bm_1`, `tp_bm_2`, `tp_bm_3`, `tp_bm_4`, `tp_bm_5`, `tp_bm_6`, `foil_1`, `foil_2`, `foil_3`, `foil_4`, `myImage`, `logo`, `text_color`, `foil_spine`, `hotfoilcolour`, `spine_up_down`, `l_position`, `created`, `updated`, `notes`) VALUES
(4, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:23:32', '2017-09-22 16:22:46', ''),
(5, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:36:09', '0000-00-00 00:00:00', ''),
(6, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:37:05', '0000-00-00 00:00:00', ''),
(7, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:42:13', '0000-00-00 00:00:00', ''),
(8, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:52:55', '0000-00-00 00:00:00', ''),
(9, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:53:48', '0000-00-00 00:00:00', ''),
(10, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:54:02', '0000-00-00 00:00:00', ''),
(11, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:54:09', '0000-00-00 00:00:00', ''),
(12, 'salman saeed', '', 'salman@salman.com', '', '', '', '', '', '1', '2', '3', '', 'Â£ 2.55', '4', '5', '6', '', 'Â£ 13.20', '15', '3', '1', 'Â£ 54', '9', '', '10', 'Â£ 19.80', 'Â£ 89.55', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 19:55:21', '0000-00-00 00:00:00', ''),
(13, 'asaasd', '', 'asd@dsfcs.com', '', '', '', '', '', '0', '0', '1', '', 'Â£ 0.00', '0', '0', '1', '', 'Â£ 0.00', '18', '1', '0', 'Â£ 18', '0', '', '0', 'Â£ 0.00', 'Â£ 18.00', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 20:50:48', '0000-00-00 00:00:00', ''),
(14, 'asaasd', '', 'asd@dsfcs.com', '', '', '', '', '', '0', '0', '1', '', 'Â£ 0.00', '0', '0', '1', '', 'Â£ 0.00', '18', '1', '0', 'Â£ 18', '0', '', '0', 'Â£ 0.00', 'Â£ 18.00', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 20:51:07', '0000-00-00 00:00:00', ''),
(15, 'sdff@swdfs.csd', '', 'aassa@dfcwedf.com', '', '', '', '', '', '0', '0', '1', '', '0', '0', '0', '1', '', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', 'USER-GUIDE.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 20:55:37', '0000-00-00 00:00:00', ''),
(16, 'sdff@swdfs.csd', '', 'aassa@dfcwedf.com', '', '', '', '', '', '0', '0', '1', '', '0', '0', '0', '1', '', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', 'USER-GUIDE.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 20:55:57', '0000-00-00 00:00:00', ''),
(17, 'asaasd', '', 'asd@dsfcs.com', '', '', '', '', '', '0', '0', '1', '', 'Â£ 0.00', '0', '0', '1', '', 'Â£ 0.00', '18', '1', '0', 'Â£ 18', '0', '', '0', 'Â£ 0.00', 'Â£ 18.00', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 22:24:18', '0000-00-00 00:00:00', ''),
(18, 'rana g', '', 'salman@gmail.com', '', '', '', '', '', '0', '0', '4', '', 'Â£ 0.00', '0', '0', '1', '', 'Â£ 0.00', '0', '4', '0', 'Â£ 0', '6', '5', '7', 'Â£ 12.60', 'Â£ 12.60', '9B193AFE952D7C1A4497F196E38B55D63C7FD2ACA7A5B1BA96392F00BFB756AF.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 00:16:16', '0000-00-00 00:00:00', ''),
(19, 'salman salman', '', 'salman@salman.com', '123124', '123 123123', 'qasdwq wwef,wef', '', '', '5', '2', '1', '', 'Â£ 1.05', '76', '0', '1', '76', 'Â£ 3.80', '0', '1', '0', 'Â£ 0', '0', '0', '0', 'Â£ 0.00', 'Â£ 4.85', '181450-basic-integration-f.pdf', 'USER-GUIDE.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 04:05:30', '0000-00-00 00:00:00', ''),
(20, 'adnansaeed343@gmail.com', '', 'adnansaeed343@gmail.com', '1231231231', 'uni', 'lahore', '', '', '1', '75', '1', '', '£ 30.05', '2', '5', '1', '7', '£ 2.10', '15', '1', '1', '£ 18', '2', '1', '3', '£ 3.00', '£ 53.15', 'USER-GUIDE.pdf', '181450-basic-integration-f.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-19 23:16:23', '0000-00-00 00:00:00', ''),
(21, 'xvc', '', 'asifakram74@gmail.com', '3214667225', '1231', '1332', '', '', '1', '0', '1', '', '£ 0.05', '1', '0', '1', '1', '£ 0.05', '18', '1', '0', '£ 18', '1', '1', '1', '£ 2.40', '£ 20.50', 'attachment_4920a03d11c720d8d2f7f24db853bfab.pdf', 'attachment_4920a03d11c720d8d2f7f24db853bfab.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 01:39:23', '0000-00-00 00:00:00', ''),
(22, 'Saqib javaid ', '', 'networktso@gmail.com', '00923218395574', 'Virtual University ', 'Lahore,  Pakistan ', '', '', '1', '4', '5', '', '£ 8.25', '5', '0', '4', '5', '£ 1.00', '18', '5', '0', '£ 90', '0', '0', '0', '£ 0.00', '£ 99.25', 'asdfsf.pdf', 'asdfsf.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 08:28:28', '0000-00-00 00:00:00', ''),
(23, 'athar naqvi', '', 'atharnaqvi@gmail.com', '07815675656', 'university', 'lskfjlasjdflajsflajflaf', '', '', '54', '13', '4', '', '£ 31.60', '1', '0', '1', '1', '£ 0.05', '15', '4', '0', '£ 60', '3', '3', '3', '£ 7.20', '£ 98.85', 'test1.pdf', 'tobedelete.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 12:51:11', '0000-00-00 00:00:00', ''),
(24, 'sdjklfskldjf', '', 'lsdjkflksjfJ@lksjfl.com', '89078907890', 'jdflsjdfkjl', 'lklsdjflksjl', '', '', '67', '0', '2', '', '£ 6.70', '1', '0', '0', '1', '£ 0.00', '18', '2', '0', '£ 36', '3', '3', '3', '£ 7.20', '£ 49.90', 'test1.pdf', 'tobedelete.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 13:28:57', '0000-00-00 00:00:00', ''),
(25, 'sdjklfskldjf', '', 'lsdjkflksjfJ@lksjfl.com', '89078907890', 'jdflsjdfkjl', 'lklsdjflksjl', '', '', '67', '0', '2', '', '£ 6.70', '1', '0', '0', '1', '£ 0.00', '18', '2', '0', '£ 36', '3', '3', '0', '£ 6.60', '£ 49.30', 'test1.pdf', 'tobedelete.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 13:30:31', '0000-00-00 00:00:00', ''),
(26, 'athar', '', 'aalinaqvi@chester.ac.uk', '253535', 'dfgsdgs', '3534535', '', '', '55', '12', '1', '', '£ 7.55', '67', '0', '1', '67', '£ 3.35', '18', '1', '0', '0', '0', '0', '£ 0.00', '£ 28.90', '0', 'test1.pdf', 'test1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 21:31:34', '0000-00-00 00:00:00', ''),
(27, 'Saqib Javaid ', '', 'networktso@gmail.com', '2834238472387', 'university of the lahore ', 'Lahroe ', '', '', '0', '0', '1', '', '0', '1', '0', '0', '0', '0', '0', '1', '0', '0', '0', '0', '0', '0', '0', 'asdfsf.pdf', '', '', '', '1', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 21:31:52', '2017-09-24 20:45:04', ''),
(28, 'Athar', '', 'aalinaqvi@chester.ac.uk', '253535', 'dfgsdgs', '3534535', '', '', '55', '12', '1', '', '£ 7.55', '67', '0', '1', '67', '£ 3.35', '18', '1', '0', '£ 18', '0', '2', '0', '£ 4.00', '£ 32.90', 'test1.pdf', 'test1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-20 22:44:39', '0000-00-00 00:00:00', ''),
(29, 'Saqib ', 'Javaid ', 'networktso@gmail.com', '00232397234973947', 'Virtual University ', 'lahore, Pakistan ', 'LDA-505 Jamil Park Kot Khwaja Saeed, Lahore', '54000', '3', '2', '4', '', '£ 3.80', '1', '0', '1', '1', '£ 0.05', '18', '4', '0', '£ 72', '0', '0', '0', '£ 0.00', '£ 75.85', 'asdfsf.pdf', 'AirWayBills (43).pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-21 21:10:37', '0000-00-00 00:00:00', ''),
(30, 'athar', 'Naqvi', 'aalinaqvi@chester.ac.uk', '00980980809', 'glamorgan', 'barking barking, london', 'london', 'mk23 8ek', '44', '23', '2', '', '£ 22.80', '64', '3', '2', '67', '£ 8.80', '18', '2', '1', '£ 42', '2', '2', '2', '£ 4.80', '£ 78.40', 'test1.pdf', 'test1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-21 21:11:02', '0000-00-00 00:00:00', ''),
(31, 'Saqib ', 'Javaid ', 'networktso@gmail.com', '00232397234973947', 'Virtual University ', 'lahore, Pakistan ', 'LDA-505 Jamil Park Kot Khwaja Saeed, Lahore', '54000', '3', '2', '4', '', '£ 3.80', '1', '0', '1', '1', '£ 0.05', '18', '4', '0', '£ 72', '0', '0', '0', '£ 0.00', '£ 75.85', 'asdfsf.pdf', 'AirWayBills (43).pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-21 21:22:23', '0000-00-00 00:00:00', ''),
(32, 'athar', 'Naqvi', 'aalinaqvi@chester.ac.uk', '00980980809', 'glamorgan', 'barking barking, london', 'london', 'mk23 8ek', '44', '23', '2', '', '£ 22.80', '64', '3', '2', '67', '£ 8.80', '18', '2', '1', '2', '2', '2', '£ 4.80', '£ 78.40', '0', 'test1.pdf', 'test1.pdf', '', '', '1', '', '', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-21 21:23:38', '2017-10-10 13:22:49', ''),
(33, 'athr', 'lksfjl', 'atharnaqvi@hotmail.com', '23456789', 'defghjkl;cfvbnm ghjk', 'tyujikghjkghjkl', 'ghjkyhjukilhjkl', 'dfghjkl;', '55', '12', '2', '', '£ 15.10', '67', '0', '1', '67', '£ 3.35', '18', '2', '1', '£ 42', '2', '2', '2', '£ 4.80', '£ 65.25', 'test1.pdf', 'test1.pdf', '', '', '2', '', '', '2', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-22 08:23:10', '2017-09-22 16:30:41', ''),
(34, 'salman saeed', 'saeed', 'salman@salman.com', '12432343', 'wsdfcewrv', 'fwefwed wfew ef', 'wefwef ewr gfer', '2132423', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '0', '£ 0', '0', '0', '0', '£ 0.00', '£ 0.00', '181450-basic-integration-f.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-23 11:38:23', '0000-00-00 00:00:00', 'wfgervbertbtr'),
(35, 'athar', 'naqvi', 'atharnaqvi@hotmail.com', '456789876556', 'ghjkjhghj', 'jhghjkj', 'jhjkjh', 'kjhjkjh', '55', '23', '2', '', '£ 23.90', '20', '0', '1', '20', '£ 1.00', '18', '2', '1', '£ 42', '2', '2', '2', '£ 4.80', '£ 71.70', '1-istqb_foundation_level_syllabus_2011.pdf', 'TEST-STRATEGY-DOCUMENT.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-23 20:53:27', '0000-00-00 00:00:00', 'jhjkj'),
(36, 'Saqib ', 'Javaid ', 'networktso@gmail.com', '23824778787', 'university of the lahore ', 'Lahore ', 'Pakistan ', '65999', '5', '0', '1', '', '£ 0.25', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '3', '3', '3', '£ 7.20', '£ 10.45', 'asdfsf.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-23 21:09:36', '0000-00-00 00:00:00', 'No Special Notes.  '),
(37, 'sddfsdf', 'ssdfsdf', 'swdfsdf@sdfs.svdsdv', '34234', 'sddfsdf', 'SDVSDF', 'swfdsdfsdv', 'sdsdf', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '0', '£ 0', '0', '0', '0', '£ 0.00', '£ 0.00', '181450-basic-integration-f.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-25 15:13:50', '0000-00-00 00:00:00', 'SDFSDF'),
(38, 'sddfsdf', 'ssdfsdf', 'swdfsdf@sdfs.svdsdv', '34234', 'sddfsdf', 'SDVSDF', 'swfdsdfsdv', 'sdsdf', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '0', '£ 0', '0', '0', '0', '£ 0.00', '£ 0.00', '181450-basic-integration-f.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-25 15:17:27', '0000-00-00 00:00:00', 'SDFSDF'),
(39, 'athar', 'naqvi', 'atharnaqvi@hotmailmail.com', '07815675656', 'ytuhijomctvybunimok', 'hjklghjklghjkl', 'dcfvgbjnmkl,', 'sdfghjk', '55', '23', '5', '', '£ 59.75', '20', '0', '1', '20', '£ 1.00', '18', '5', '1', '£ 105', '2', '2', '2', '£ 4.80', '£ 170.55', '1-istqb_foundation_level_syllabus_2011.pdf', 'TEST-STRATEGY-DOCUMENT.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-25 21:02:44', '0000-00-00 00:00:00', 'fghjkl'),
(40, 'athar', 'naqvi', 'atharnaqvi@gmail.com', '567890', '67890-hjkl;', 'hlkksdfjklsjfkl', 'sdhfkshfkshfjks', 'mk13 8es', '55', '12', '2', '', '£ 15.10', '1', '0', '1', '1', '£ 0.05', '18', '2', '1', '£ 42', '2', '2', '2', '£ 4.80', '£ 61.95', 'test1.pdf', 'tobedelete.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-26 17:28:47', '0000-00-00 00:00:00', 'asdadad'),
(41, 'Saqib ', 'Javaid ', 'networktso@gmail.com', '28478748787', 'Virtual University ', 'Lahore,  Pakistan ', 'Lahore Pakistan ', '54000', '0', '5', '1', '', '£ 2.00', '1', '0', '0', '0', '£ 0.00', '15', '1', '1', '£ 18', '2', '1', '2', '£ 2.80', '£ 22.80', 'asdfsf.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-26 19:24:20', '0000-00-00 00:00:00', 'No special Notes '),
(42, 'Saqib ', 'Javaid ', 'networktso@gmail.com', '28478748787', 'Virtual University ', 'Lahore,  Pakistan ', 'Lahore Pakistan ', '54000', '0', '5', '1', '', '£ 2.00', '1', '0', '0', '0', '£ 0.00', '15', '1', '1', '£ 18', '2', '1', '2', '£ 2.80', '£ 22.80', 'asdfsf.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-09-26 19:24:21', '0000-00-00 00:00:00', 'No special Notes '),
(43, 'asdsa', 'sdfcsd', 'asda@dcw.com', '213123', 'qowd', 'kdjnwe', 'wkecnjw', '23423', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '0', '£ 0', '0', '0', '0', '£ 0.00', '£ 0.00', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-04 18:00:20', '0000-00-00 00:00:00', 'wkejnwek'),
(44, 'asdsa', 'sdfcsd', 'asda@dcw.com', '213123', 'qowd', 'kdjnwe', 'wkecnjw', '23423', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ NaN', '£ NaN', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-04 18:02:38', '0000-00-00 00:00:00', 'wkejnwek'),
(45, 'asdsa', 'sdfcsd', 'asda@dcw.com', '213123', 'qowd', 'kdjnwe', 'wkecnjw', '23423', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '0', '£ 0', '0', '0', '0', '£ 0.00', '£ 0.00', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-04 18:07:41', '0000-00-00 00:00:00', 'wkejnwek'),
(46, 'dfgsdfgsdg', 'dfgsdgsdgf', 'dsfgsdgsdg@sdfjlksjf.com', '2324234234', 'sdgfagfagf', 'sdfasdfaf', 'asdfasdf', 'asdfasf', '44', '23', '1', '', '£ 11.40', '1', '0', '0', '0', '£ 0.00', '18', '1', '0', '£ 18', '4', '4', '4', '£ 9.60', '£ 39.00', 'test1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-06 13:40:16', '0000-00-00 00:00:00', 'sdafa'),
(47, 'dfgsdfgsdg', 'dfgsdgsdgf', 'dsfgsdgsdg@sdfjlksjf.com', '2324234234', 'sdgfagfagf', 'sdfasdfaf', 'asdfasdf', 'asdfasf', '44', '23', '1', '', '£ 11.40', '1', '0', '0', '0', '£ 0.00', '18', '1', '1', '£ 21', '4', '4', '0', '£ 8.80', '£ 41.20', 'test1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-06 13:42:28', '0000-00-00 00:00:00', 'sdafa'),
(48, 'sdfsfs', 'sdf', 'sdfsf@gmail.com', '2342424', '23sfsdfsf', 'sdfsf', 'sdfsf', 'sfsfs', '44', '23', '1', '', '£ 11.40', '1', '0', '0', '0', '£ 0.00', '18', '1', '1', '£ 21', '3', '3', '3', '£ 7.20', '£ 39.60', 'test1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-06 13:44:37', '0000-00-00 00:00:00', 'sfsff'),
(49, 'SALMAN', 'saeed', 'salman@gmail.com', '24334', 'WEJHKJ', 'Knkijnk', 'jnkjn', '1231', '1', '3', '1', '', '£ 1.25', '1', '0', '0', '0', '£ 0.00', '15', '1', '1', '£ 18', '2', '22', '32', '£ 50.80', '£ 70.05', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2017-10-06 16:15:09', '0000-00-00 00:00:00', 'dbhjdwe'),
(50, 'SALMAN', 'saeed', 'salman@gmail.com', '24334', 'WEJHKJ', 'Knkijnk', 'jnkjn', '1231', '1', '3', '1', '', '£ 1.25', '1', '0', '0', '0', '£ 0.00', '15', '1', '1', '£ 18', '2', '22', '32', '£ 50.80', '£ 70.05', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', 'ojoij', 'oijoi', 'jojoijoj', 'oijojojo', 'oijojojojoji', '', 'sacsd', 'jhjoh', 'oijoij', '', 'rose_cover.png', 'true', 'silver', '', 'images/silver_cover.png', 'up', '3', '2017-10-06 16:30:10', '0000-00-00 00:00:00', 'dbhjdwe'),
(51, 'SALMAN', 'saeed', 'salman@gmail.com', '24334', 'WEJHKJ', 'Knkijnk', 'jnkjn', '1231', '1', '3', '1', '', '£ 1.25', '1', '0', '0', '0', '£ 0.00', '15', '1', '1', '£ 18', '2', '22', '32', '£ 50.80', '£ 70.05', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', 'ojoij', 'oijoi', 'jojoijoj', 'oijojojo', 'oijojojojoji', '', 'sacsd', 'jhjoh', 'oijoij', '', 'rose_cover.png', 'true', 'silver', '', 'images/silver_cover.png', 'up', '3', '2017-10-06 16:40:29', '0000-00-00 00:00:00', 'dbhjdwe'),
(52, 'SALMAN', 'saeed', 'salman@gmail.com', '24334', 'WEJHKJ', 'Knkijnk', 'jnkjn', '1231', '1', '3', '1', '', '£ 1.25', '1', '0', '0', '0', '£ 0.00', '15', '1', '1', '£ 18', '2', '22', '32', '£ 50.80', '£ 70.05', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', 'ojoij', 'oijoi', 'jojoijoj', 'oijojojo', 'oijojojojoji', '', 'sacsd', 'jhjoh', 'oijoij', '', 'rose_cover.png', 'true', 'silver', '', 'images/silver_cover.png', 'up', '3', '2017-10-06 16:42:41', '0000-00-00 00:00:00', 'dbhjdwe'),
(53, 'kj', 'oijoij', 'salman@gmail.com', '342432', 'wkedjnkn', 'okok,mjok', 'ojmok,okml', '989', '0', '1', '1', '', '£ 0.40', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '99', '8', '9', '£ 37.60', '£ 41.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', 'jo', 'joijoi', 'ojoijo', 'jojoijo', 'ojoijoijoj', '', 'kjnhk', 'jkjnkj', 'kjnkjn', '', '', 'true', '', '', 'images/rose_cover.png', 'down', '3', '2017-10-06 17:37:44', '0000-00-00 00:00:00', 'kjnknk'),
(54, 'kj', 'oijoij', 'salman@gmail.com', '342432', 'wkedjnkn', 'okok,mjok', 'ojmok,okml', '989', '0', '1', '1', '', '£ 0.40', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '99', '8', '9', '£ 37.60', '£ 41.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', 'jo', 'joijoi', 'ojoijo', 'jojoijo', 'ojoijoijoj', '', 'kjnhk', 'jkjnkj', 'kjnkjn', '', '/tmp/php0vr8xk', 'true', '', '', 'images/rose_cover.png', 'down', '3', '2017-10-06 17:40:18', '0000-00-00 00:00:00', 'kjnknk'),
(55, '/tmp/phpnJVffL', 'oijoij', 'salman@gmail.com', '342432', 'wkedjnkn', 'okok,mjok', 'ojmok,okml', '989', '0', '1', '1', '', '£ 0.40', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '99', '8', '9', '£ 37.60', '£ 41.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', 'jo', 'joijoi', 'ojoijo', 'jojoijo', 'ojoijoijoj', '', 'kjnhk', 'jkjnkj', 'kjnkjn', '', 'DSC_5741 - Copy.png', 'true', '', '', 'images/rose_cover.png', 'down', '3', '2017-10-06 17:46:10', '0000-00-00 00:00:00', 'kjnknk'),
(56, '/tmp/phps3Hj1E', 'dfgdfgdg', 'asfasf@hotmail.com', '4567890', 'ishfihsfh', 'asfhkashdfk', 'khsjkfhks', 'isdhfksjdh', '55', '12', '2', '', '£ 15.10', '67', '0', '2', '67', '£ 6.70', '18', '2', '1', '£ 42', '2', '2', '2', '£ 4.80', '£ 68.60', 'test1.pdf', 'test1.pdf', '', '', '', '', '', '', 'This to evaluate how computer can help people with their life', 'Athar Naqvi', 'MPhil', '2017', 'University of Glmorgan', '', 'A. Naqvi', 'MPhil', '2017', '', 'ChesterUni.png', 'true', 'gold', '', 'images/silver_cover.png', 'down', '4', '2017-10-07 13:58:59', '0000-00-00 00:00:00', 'ksdfhkshf'),
(57, '/tmp/phpsSUHCI', 'saeed', 'salman@gmail.com', '4234234', 'asfslkdn', 'lkml', 'klkmlkm', '243234', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', 'text 1', 'text 2', 'text 3', 'text 4', 'text 5', 'text 6', 'foil 1', 'foil 2', 'foil 3', '', 'gold_cover.png', 'true', 'gold', '', 'images/Red_cover.png', 'down', '4', '2017-10-09 16:41:44', '0000-00-00 00:00:00', 'notes'),
(58, '/tmp/phpgfVFzT', 'saeed', 'salman@gmail.com', '4234234', 'asfslkdn', 'lkml', 'klkmlkm', '243234', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', 'text 1', 'text 2', 'text 3', 'text 4', 'text 5', 'text 6', 'foil 1', 'foil 2', 'foil 3', '', 'gold_cover.png', 'true', 'gold', '', 'images/Red_cover.png', 'down', '4', '2017-10-09 16:44:56', '0000-00-00 00:00:00', 'notes'),
(59, '/tmp/phpomdiK6', 'saeed', 'salman@gmail.com', '4234234', 'asfslkdn', 'lkml', 'klkmlkm', '243234', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', 'text 1', 'text 2', 'text 3', 'text 4', 'text 5', 'text 6', 'foil 1', 'foil 2', 'foil 3', '', 'gold_cover.png', 'true', 'gold', '', 'images/Red_cover.png', 'down', '4', '2017-10-09 16:48:08', '0000-00-00 00:00:00', 'notes'),
(60, '/tmp/phpv4wy7v', 'saeed', 'salman@gmail.com', '4234234', 'asfslkdn', 'lkml', 'klkmlkm', '243234', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'gold_cover.png', 'false', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 16:48:49', '0000-00-00 00:00:00', 'notes'),
(61, '/tmp/php0aGA5X', 'saeed', 'swdsjl@DF.com', '3242', 'kjnkjn', 'kjnkjnkj', 'biuyhjn', '132231', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', 'text 1', 'text 2', 'text 3', 'text 4', 'text 5', 'text 6', 'foil 1', 'foil 2', 'foil 3', '', 'DSC_5741 - Copy.png', 'true', 'silver', '', 'images/rose_cover.png', 'down', '4', '2017-10-09 16:52:39', '0000-00-00 00:00:00', 'notes'),
(62, '/tmp/phpvBZvxI', 'saeed', 'swdsjl@DF.com', '3242', 'kjnkjn', 'kjnkjnkj', 'biuyhjn', '132231', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', 'text 1', 'text 2', 'text 3', 'text 4', 'text 5', 'text 6', 'foil 1', 'foil 2', 'foil 3', '', 'DSC_5741 - Copy.png', 'true', 'silver', '', 'images/rose_cover.png', 'down', '4', '2017-10-09 17:01:15', '0000-00-00 00:00:00', 'notes'),
(63, '/tmp/phpf5y0S8', 'saeed', 'swdsjl@DF.com', '3242', 'kjnkjn', 'kjnkjnkj', 'biuyhjn', '132231', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', 'text 1', 'text 2', 'text 3', 'text 4', 'text 5', 'text 6', 'foil 1', 'foil 2', 'foil 3', '', 'DSC_5741 - Copy.png', 'true', 'silver', '', 'images/rose_cover.png', 'down', '4', '2017-10-09 17:05:10', '0000-00-00 00:00:00', 'notes'),
(64, '/tmp/phpJ5PL2L', 'saeed', 'swdsjl@DF.com', '3242', 'kjnkjn', 'kjnkjnkj', 'biuyhjn', '132231', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', 'text 1', 'text 2', 'text 3', 'text 4', 'text 5', 'text 6', 'foil 1', 'foil 2', 'foil 3', '', 'DSC_5741 - Copy.png', 'true', 'silver', '', 'images/rose_cover.png', 'down', '4', '2017-10-09 17:09:18', '0000-00-00 00:00:00', 'notes'),
(65, '/tmp/phpzjZMe9', 'saeed', 'swdsjl@DF.com', '3242', 'kjnkjn', 'kjnkjnkj', 'biuyhjn', '132231', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'ITECH3224 (1).pdf', '', '', '', '', '', '', '', 'text 1', 'text 2', 'text 3', 'text 4', 'text 5', 'text 6', 'foil 1', 'foil 2', 'foil 3', '', 'DSC_5741 - Copy.png', 'true', 'silver', '', 'images/rose_cover.png', 'down', '4', '2017-10-09 17:09:37', '0000-00-00 00:00:00', 'notes'),
(66, '/tmp/php9nPApk', 'saeed', 'salman@gmail.com', '324234', 'wefwegf', 'wsfergv', 'sdsdg', '12312', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DSC_5741 - Copy.png', 'true', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 17:10:55', '0000-00-00 00:00:00', 'notes'),
(67, '/tmp/phpz1QcW0', 'saeed', 'salman@gmail.com', '324234', 'wefwegf', 'wsfergv', 'sdsdg', '12312', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DSC_5741 - Copy.png', 'true', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 17:13:50', '0000-00-00 00:00:00', 'notes'),
(68, '/tmp/phpsyU6pp', 'saeed', 'salman@gmail.com', '324234', 'wefwegf', 'wsfergv', 'sdsdg', '12312', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DSC_5741 - Copy.png', 'true', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 17:14:14', '0000-00-00 00:00:00', 'notes'),
(69, '/tmp/phpHWBlip', 'saeed', 'salman@gmail.com', '324234', 'wefwegf', 'wsfergv', 'sdsdg', '12312', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DSC_5741 - Copy.png', 'true', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 17:14:26', '0000-00-00 00:00:00', 'notes'),
(70, '/tmp/phpHEV6SP', 'saeed', 'salman@gmail.com', '324234', 'wefwegf', 'wsfergv', 'sdsdg', '12312', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DSC_5741 - Copy.png', 'true', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 17:14:45', '0000-00-00 00:00:00', 'notes'),
(71, '', 'saeed', 'salman@gmail.com', '324234', 'wefwegf', 'wsfergv', 'sdsdg', '12312', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DSC_5741 - Copy.png', 'true', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 17:17:12', '0000-00-00 00:00:00', 'notes'),
(72, 'salman', 'saeed', 'salman@gmail.com', '2342342342', 'tesresre', 'lahore', 'jhgjhgj', '72342', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '0', '1', '1', '£ 3', '0', '0', '0', '£ 0.00', '£ 3.00', 'Salman-Saeed.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'DSC_5741 - Copy.png', 'true', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 17:19:59', '0000-00-00 00:00:00', 'notes'),
(73, '', 'javaid', 'networktso@gmail.com', '+923218395574', 'Virtual University ', 'Lahore Pakistan ', 'Lahore Pakistan ', '54000', '0', '5', '1', '', '£ 2.00', '1', '0', '0', '0', '£ 0.00', '5', '1', '1', '£ 8', '0', '0', '0', '£ 0.00', '£ 10.00', 'asdfsf.pdf', '', '', '', '', '', '', '', 'afasdf', 'asfdasdfasf', 'sdfasdfas', 'dfasdfa', 'dfasdfa', 'dfasdfasdfsdfsf', '2017', 'Mphil', 'Saqib Javaid ', '', 'HOLYCOCOA!.png', 'true', 'gold', '', 'images/Red_cover.png', 'up', '3', '2017-10-09 17:32:05', '0000-00-00 00:00:00', 'No '),
(74, 'ALi Athar', 'Syed', 'atharnaqvi@gmail.com', '07815675656', 'Glamorgan University', 'Barking, Uk Address 1', 'England Address 2', 'AB12 34C', '55', '12', '1', '', '£ 7.55', '64', '3', '1', '67', '£ 4.40', '18', '1', '0', '£ 18', '0', '0', '0', '£ 0.00', '£ 29.95', 'test1.pdf', 'test1.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 17:35:56', '0000-00-00 00:00:00', 'This extra notes if someone whant to giveThis extra notes if someone whant to giveThis extra notes if someone whant to g'),
(75, 'Saqib', 'Javaid', 'networktso@gmail.com', '3218395574', 'Virtual University ', '551 C & D Sundar Industrial estate, Raiwind Road, Lahore', 'Lahore,  Pakistan', '54000', '0', '1', '1', '', '£ 0.40', '1', '0', '0', '0', '£ 0.00', '15', '1', '0', '£ 15', '0', '0', '0', '£ 0.00', '£ 15.40', 'AirWayBills.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 18:41:53', '0000-00-00 00:00:00', 'asdada'),
(76, 'Saqib', 'Javaid', 'networktso@gmail.com', '3218395574', 'Virtual University ', '551 C & D Sundar Industrial estate, Raiwind Road, Lahore', 'Lahore,  Pakistan', '54000', '0', '1', '1', '', '£ 0.40', '1', '0', '0', '0', '£ 0.00', '15', '1', '0', '£ 15', '0', '0', '0', '£ 0.00', '£ 15.40', 'AirWayBills.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'false', '', '', 'images/rose_cover.png', 'down', '1', '2017-10-09 18:47:48', '0000-00-00 00:00:00', 'asdada'),
(77, 'Naqvi', 'Sahib ', 'nannndng@gmail.com', '3743466768', 'Virtual University', 'Lahore,  Pakistan ', 'Lahore,  Pakistan', '65000', '0', '0', '1', '', '£ 0.00', '1', '0', '0', '0', '£ 0.00', '15', '1', '1', '£ 18', '0', '0', '0', '£ 0.00', '£ 18.00', 'AirWayBills.pdf', '', '', '', '', '', '', '', 'Hello', 'Brother ', 'How ', 'Are ', 'You? ', 'Hope ', 'Hello ', 'Brother ', 'How ', '', 'CGF Logo.png', 'true', 'gold', '', 'images/blackcover.png', 'down', '2', '2017-10-09 19:19:34', '0000-00-00 00:00:00', 'No Special Notes '),
(78, 'Test Samifinal ', 'Semi Final ', 'gggfinal@test.com', '2432342342', 'Virtual University ', 'Lahore,  Pakistan ', 'Lahore, Pakistan ', '545625', '0', '5', '1', '', '£ 2.00', '5', '0', '1', '5', '£ 0.25', '15', '1', '1', '£ 18', '3', '2', '4', '£ 5.40', '£ 25.65', 'asdfsf.pdf', 'asdfsf.pdf', '', '', '', '', '', '', 'gsdfgs', 'fgsdfg', 'dfgs', 'gsdfg', 'sdfgsd', 'fgsdfgsdfgsdfgsdg', '2016', 'MPhill', 'Flodida University', '', 'Be Wellth-Final-01.png', 'true', 'rose', '', 'images/Red_cover.png', 'down', '3', '2017-10-09 21:15:03', '0000-00-00 00:00:00', 'Special Notes no '),
(79, 'Final', 'Test', 'final@test.com', '234567890', 'University of Glmorgan', 'gusfjshjskhfjksf', 'lksdkjfslkl', 'mk1234ks', '22', '15', '2', '', '£ 14.20', '37', '0', '1', '37', '£ 1.85', '15', '2', '1', '£ 36', '2', '2', '2', '£ 4.80', '£ 56.85', 'Laming Report.pdf', 'Laming Report.pdf', '', '', '', '', '', '', 'An evaluation to see how the advance computing can help in shoping', 'Athar Naqvi', 'MPhil', '', '2017', 'University of Glamorgan', 'A. Naqvi', 'Mphil', '2017', '', 'WCUGoldenRams.PNG', 'true', 'gold', '', 'images/green_cover.png', 'up', '4', '2017-10-09 21:15:11', '0000-00-00 00:00:00', 'This is notes sectionThis is notes sectionThis is notes sectionThis is notes sectionThis is notes sectionThis is notes s'),
(80, 'Andrea', 'Bunget', 'andrea@gmail.com', '123456745678', 'University of Chester', 'sifhksjhfkhajkfhjkhkj askdfhjkashf asdkfhjkah', 'ksdhfjksahjkfhjkahfjk', 'kasdfhksafj', '44', '23', '2', '', '£ 22.80', '67', '0', '2', '67', '£ 6.70', '18', '2', '1', '£ 42', '2', '2', '2', '£ 4.80', '£ 76.30', 'test1.pdf', 'test1.pdf', '', '', '3', '', '', '1', 'A CRITICAL EVALUATION TO SEE HOW', 'ATHAR NAQVI', 'MPHIL', '', '2017', 'UNIVERSITY OF GLAMORGAN', 'A. Naqvi', '2017', 'Mphil', '', 'ChesterUni.png', 'true', 'gold', '', 'images/silver_cover.png', 'up', '4', '2017-10-10 13:14:35', '2017-10-10 13:24:23', 'skdjfhksahfkjasdhjka'),
(81, 'aa', 'asda', 'dfd@dfa.com', 'asdfa', 'dsaf', 'fdsa', 'daf', 'dsfa', '1', '0', '1', '', '£ 0.05', '1', '0', '0', '0', '£ 0.00', '18', '1', '1', '£ 21', '0', '0', '0', '£ 0.00', '£ 21.05', 'ptcl bil.pdf', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'false', 'rose', '', 'images/green_cover.png', 'down', '1', '2017-10-10 13:47:43', '0000-00-00 00:00:00', 'asdfas'),
(82, 'Ali', 'Abbass', 'ali@ghjkl.com', '23456789', 'uni of glmorgan', 'ghhfghfghfgfgh', 'hjfhfhffhggfg', 'sdfghjk', '55', '12', '2', '', '£ 15.10', '67', '0', '2', '67', '£ 6.70', '18', '2', '1', '£ 42', '2', '2', '2', '£ 4.80', '£ 68.60', 'test1.pdf', 'test1.pdf', '', '', '', '', '', '', 'THIS IS SAMPLE TEXT', 'ATHAR NAQVI', 'MSc', '', '2009', 'University of Glamorgan', 'A.Naqvi', 'MSc', '2009', '', 'ChesterUni.png', 'true', 'gold', '', 'images/blackcover.png', 'up', '4', '2017-10-10 14:01:58', '0000-00-00 00:00:00', 'hgfghfghfgh fgfghfghf ghfghfghfghfg hfghfghfgh fghfghfgh fghfghfghf ghffghfg hfghfghf ghfghffghfhgfghfghfghfghfghfghgfghfghfghfghfghffghfffffghfhgfh fgfhfghfghf ghfghfg hfghfghfg hfghfhgghfhfg hfghfg ');

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(122) unsigned NOT NULL,
  `user_type` varchar(250) DEFAULT NULL,
  `data` text
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `user_type`, `data`) VALUES
(1, 'Member', '{"users":{"own_create":"0","own_read":"0","own_update":"1","own_delete":"1"}}'),
(2, 'admin', '{"users":{"own_create":"1","own_read":"1","own_update":"1","own_delete":"1","all_create":"1","all_read":"1","all_update":"1","all_delete":"1"}}');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(122) unsigned NOT NULL,
  `keys` varchar(255) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `keys`, `value`) VALUES
(1, 'website', 'Idis Admin'),
(2, 'logo', NULL),
(3, 'favicon', NULL),
(4, 'SMTP_EMAIL', ''),
(5, 'HOST', ''),
(6, 'PORT', ''),
(7, 'SMTP_SECURE', ''),
(8, 'SMTP_PASSWORD', ''),
(9, 'mail_setting', 'simple_mail'),
(10, 'company_name', 'Company Name'),
(11, 'crud_list', 'users,User'),
(12, 'EMAIL', 'rm.salman.dev@gmail.com'),
(13, 'UserModules', 'yes'),
(14, 'register_allowed', '1'),
(15, 'email_invitation', '1'),
(16, 'admin_approval', '0'),
(17, 'user_type', '["Member"]');

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE IF NOT EXISTS `templates` (
  `id` int(121) unsigned NOT NULL,
  `module` varchar(255) DEFAULT NULL,
  `code` varchar(255) DEFAULT NULL,
  `template_name` varchar(255) DEFAULT NULL,
  `html` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templates`
--

INSERT INTO `templates` (`id`, `module`, `code`, `template_name`, `html`) VALUES
(1, 'forgot_pass', 'forgot_password', 'Forgot password', '<html xmlns="http://www.w3.org/1999/xhtml"><head>\n  <meta name="viewport" content="width=device-width, initial-scale=1.0">\n  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">\n  <style type="text/css" rel="stylesheet" media="all">\n    /* Base ------------------------------ */\n    *:not(br):not(tr):not(html) {\n      font-family: Arial, ''Helvetica Neue'', Helvetica, sans-serif;\n      -webkit-box-sizing: border-box;\n      box-sizing: border-box;\n    }\n    body {\n      \n    }\n    a {\n      color: #3869D4;\n    }\n\n\n    /* Masthead ----------------------- */\n    .email-masthead {\n      padding: 25px 0;\n      text-align: center;\n    }\n    .email-masthead_logo {\n      max-width: 400px;\n      border: 0;\n    }\n    .email-footer {\n      width: 570px;\n      margin: 0 auto;\n      padding: 0;\n      text-align: center;\n    }\n    .email-footer p {\n      color: #AEAEAE;\n    }\n  \n    .content-cell {\n      padding: 35px;\n    }\n    .align-right {\n      text-align: right;\n    }\n\n    /* Type ------------------------------ */\n    h1 {\n      margin-top: 0;\n      color: #2F3133;\n      font-size: 19px;\n      font-weight: bold;\n      text-align: left;\n    }\n    h2 {\n      margin-top: 0;\n      color: #2F3133;\n      font-size: 16px;\n      font-weight: bold;\n      text-align: left;\n    }\n    h3 {\n      margin-top: 0;\n      color: #2F3133;\n      font-size: 14px;\n      font-weight: bold;\n      text-align: left;\n    }\n    p {\n      margin-top: 0;\n      color: #74787E;\n      font-size: 16px;\n      line-height: 1.5em;\n      text-align: left;\n    }\n    p.sub {\n      font-size: 12px;\n    }\n    p.center {\n      text-align: center;\n    }\n\n    /* Buttons ------------------------------ */\n    .button {\n      display: inline-block;\n      width: 200px;\n      background-color: #3869D4;\n      border-radius: 3px;\n      color: #ffffff;\n      font-size: 15px;\n      line-height: 45px;\n      text-align: center;\n      text-decoration: none;\n      -webkit-text-size-adjust: none;\n      mso-hide: all;\n    }\n    .button--green {\n      background-color: #22BC66;\n    }\n    .button--red {\n      background-color: #dc4d2f;\n    }\n    .button--blue {\n      background-color: #3869D4;\n    }\n  </style>\n</head>\n<body style="width: 100% !important;\n      height: 100%;\n      margin: 0;\n      line-height: 1.4;\n      background-color: #F2F4F6;\n      color: #74787E;\n      -webkit-text-size-adjust: none;">\n  <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0" style="\n    width: 100%;\n    margin: 0;\n    padding: 0;">\n    <tbody><tr>\n      <td align="center">\n        <table class="email-content" width="100%" cellpadding="0" cellspacing="0" style="width: 100%;\n      margin: 0;\n      padding: 0;">\n          <!-- Logo -->\n\n          <tbody>\n          <!-- Email Body -->\n          <tr>\n            <td class="email-body" width="100%" style="width: 100%;\n    margin: 0;\n    padding: 0;\n    border-top: 1px solid #edeef2;\n    border-bottom: 1px solid #edeef2;\n    background-color: #edeef2;">\n              <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0" style=" width: 570px;\n    margin:  14px auto;\n    background: #fff;\n    padding: 0;\n    border: 1px outset rgba(136, 131, 131, 0.26);\n    box-shadow: 0px 6px 38px rgb(0, 0, 0);\n       ">\n                <!-- Body content -->\n                <thead style="background: #3869d4;"><tr><th><div align="center" style="padding: 15px; color: #000;"><a href="{var_action_url}" class="email-masthead_name" style="font-size: 16px;\n      font-weight: bold;\n      color: #bbbfc3;\n      text-decoration: none;\n      text-shadow: 0 1px 0 white;">{var_sender_name}</a></div></th></tr>\n                </thead>\n                <tbody><tr>\n                  <td class="content-cell" style="padding: 35px;">\n                    <h1>Hi {var_user_name},</h1>\n                    <p>You recently requested to reset your password for your {var_website_name} account. Click the button below to reset it.</p>\n                    <!-- Action -->\n                    <table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0" style="\n      width: 100%;\n      margin: 30px auto;\n      padding: 0;\n      text-align: center;">\n                      <tbody><tr>\n                        <td align="center">\n                          <div>\n                            <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{var_action_url}}" style="height:45px;v-text-anchor:middle;width:200px;" arcsize="7%" stroke="f" fill="t">\n                              <v:fill type="tile" color="#dc4d2f" />\n                              <w:anchorlock/>\n                              <center style="color:#ffffff;font-family:sans-serif;font-size:15px;">Reset your password</center>\n                            </v:roundrect><![endif]-->\n                            <a href="{var_varification_link}" class="button button--red" style="background-color: #dc4d2f;display: inline-block;\n      width: 200px;\n      background-color: #3869D4;\n      border-radius: 3px;\n      color: #ffffff;\n      font-size: 15px;\n      line-height: 45px;\n      text-align: center;\n      text-decoration: none;\n      -webkit-text-size-adjust: none;\n      mso-hide: all;">Reset your password</a>\n                          </div>\n                        </td>\n                      </tr>\n                    </tbody></table>\n                    <p>If you did not request a password reset, please ignore this email or reply to let us know.</p>\n                    <p>Thanks,<br>{var_sender_name} and the {var_website_name} Team</p>\n                   <!-- Sub copy -->\n                    <table class="body-sub" style="margin-top: 25px;\n      padding-top: 25px;\n      border-top: 1px solid #EDEFF2;">\n                      <tbody><tr>\n                        <td> \n                          <p class="sub" style="font-size:12px;">If you are having trouble clicking the password reset button, copy and paste the URL below into your web browser.</p>\n                          <p class="sub"  style="font-size:12px;"><a href="{var_varification_link}">{var_varification_link}</a></p>\n                        </td>\n                      </tr>\n                    </tbody></table>\n                  </td>\n                </tr>\n              </tbody></table>\n            </td>\n          </tr>\n        </tbody></table>\n      </td>\n    </tr>\n  </tbody></table>\n\n\n</body></html>'),
(3, 'users', 'invitation', 'Invitation', '<p>Hello <strong>{var_user_email}</strong></p>\r\n\r\n<p>Click below link to register&nbsp;<br />\r\n{var_inviation_link}</p>\r\n\r\n<p>Thanks&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(121) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `var_key` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `is_deleted` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `profile_pic` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `user_id`, `var_key`, `status`, `is_deleted`, `name`, `password`, `email`, `profile_pic`, `user_type`) VALUES
(1, '1', '', 'active', '0', 'admin', '$2y$10$TnVpdAcKKGi5dh/naZGjzuehc1WdjXE7cbYZpuRKj9GB3j3p2j8Pe', 'rm.salman.dev@gmail.com', '21624317_1525936840832864_951981508_n_1505992268.jpg', 'admin'),
(2, '1', NULL, 'active', '0', 'salman', '$2y$10$Z37lXmEPPQC9co2xhVZLXOh7XiButMUcAsALVrPrXHN98zpoTDl5q', 'salman@salman.com', '21584668_1490939640952934_746363033_n_1505996098.jpg', 'Member'),
(3, '1', NULL, 'active', '0', 'rana', '$2y$10$XLP9KrSfZCo3Yvnxv6Sp7u9Mh6b65WyVZJVDJ1qPdTShsorqepakC', 'salman@gmail.com', 'user.png', 'Member'),
(4, '1', NULL, 'active', '0', 'salman', '$2y$10$a9.3rtFV2k/xWdwTR1RnZu42Jd.xDdfacf7RBBP5GgKU7DjovEBhC', 'salman.saeed786921@gmail.com', NULL, 'Member'),
(5, '1', NULL, 'active', '0', 'Saqib Javaid ', '$2y$10$KGCXnA6uXdhydxjhOF/IM.jG2NUVgYVJCEN3kpz0iajzC/p.WmYqO', 'networktso@gmail.com', '13177095_1014984185205891_56600154851716698_n_1506029569.jpg', 'Member'),
(6, '1', NULL, 'active', '0', 'Atharhotmail', '$2y$10$PN3JOtYtg3W5.sEgu3wiSOZn6.gKhtzz4Z9GlnSKGd67NRL.Pnqkq', 'atharnaqvi@hotmail.com', 'user.png', 'Member'),
(7, '1', NULL, 'active', '0', 'salman saeed', '$2y$10$lRc6CsbKYsM0I28OwyiK3OCOlB5JPm8If9r.9Upn4GXE7HmTp6aUu', 'rm.salman.uae@gmail.com', 'user.png', 'Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ids_all`
--
ALTER TABLE `ids_all`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ids_allz`
--
ALTER TABLE `ids_allz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ids_all`
--
ALTER TABLE `ids_all`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `ids_allz`
--
ALTER TABLE `ids_allz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(122) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(122) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `id` int(121) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(121) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
