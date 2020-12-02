-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 09, 2018 at 07:28 AM
-- Server version: 5.6.35
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `industry_waste`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

CREATE TABLE IF NOT EXISTS `account_types` (
  `acc_code` int(11) DEFAULT NULL,
  `acc_type_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_types`
--

INSERT INTO `account_types` (`acc_code`, `acc_type_name`) VALUES
(1, '  منزلى'),
(2, 'قائم عمارة'),
(8, 'تجاري'),
(10, 'حكومة'),
(22, 'خدمي'),
(23, 'صناعي'),
(24, 'سياحي'),
(25, 'أخرى'),
(40, 'ممارسة منزلي'),
(41, 'ممارسة 2 غرفة'),
(42, 'ممارسة 3 غرفة'),
(43, 'ممارسة'),
(44, 'ممارسة تجاري'),
(46, 'ممارسة حكومي '),
(50, 'ممارسة'),
(51, 'ممارسة صرف صحي '),
(52, 'ممارسة صرف صحي'),
(53, 'ممارسة صرف صحي'),
(54, 'ممارسة صرف صحي'),
(55, 'ممارسة صرف صحي'),
(56, 'ممارسة صرف صحي'),
(57, 'ممارسة صرف صحي'),
(58, 'ممارسة صرف مغسلة'),
(59, 'ممارسة صرف صحي');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `id` int(11) NOT NULL,
  `ar_name` varchar(50) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `ar_name`) VALUES
(1, 'غرب المنصورة'),
(2, 'شرق المنصورة'),
(3, 'مركز المنصورة'),
(4, 'ميت سلسيل'),
(5, 'طلخا'),
(6, 'نبروه'),
(7, 'بلقاس'),
(8, 'الجمالية'),
(9, 'المطرية'),
(10, 'المنزلة'),
(11, 'بنى عبيد'),
(12, 'جمصه'),
(13, 'شربين'),
(14, 'دكرنس'),
(15, 'تمي الأمديد'),
(16, 'منية النصر'),
(17, 'أجا'),
(18, 'ميت غمر'),
(19, 'السنبلاوين'),
(22, 'الكردى');

-- --------------------------------------------------------

--
-- Table structure for table `building_info`
--

CREATE TABLE IF NOT EXISTS `building_info` (
  `building_code` int(11) NOT NULL,
  `building_name` varchar(255) NOT NULL,
  `building_address` varchar(255) NOT NULL,
  `building_tele` int(10) NOT NULL,
  `building_mobile` int(11) NOT NULL,
  `building_fax` int(10) NOT NULL,
  `industry_name` tinyint(4) NOT NULL,
  `building_activity` text NOT NULL,
  `building_area_m2` int(11) NOT NULL,
  `building_emp_num` int(11) NOT NULL,
  `building_vac` varchar(255) NOT NULL,
  `building_work_days` int(2) NOT NULL,
  `building_shifts` int(2) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_tele` int(11) NOT NULL,
  `manager_name` varchar(255) NOT NULL,
  `manager_tele` int(11) NOT NULL,
  `government_name` varchar(50) NOT NULL DEFAULT 'الدقهلية',
  `state_name` varchar(100) NOT NULL,
  `area` int(2) NOT NULL,
  `account_num` int(8) NOT NULL,
  `branch_num` int(2) NOT NULL,
  `account_type` int(2) NOT NULL,
  `materials_used` text NOT NULL,
  `waste_type` bit(1) NOT NULL,
  `waste_location` varchar(255) NOT NULL,
  `contract_type` bit(1) NOT NULL,
  `contract_open_date` date NOT NULL,
  `contract_num` int(11) NOT NULL,
  `contract_date` date NOT NULL,
  `contract_end_date` date NOT NULL,
  `license_type` bit(1) NOT NULL,
  `notes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(25) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `joining_date` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_password`, `joining_date`) VALUES
(1, 'root', 'b253e1e205a532bbe503d544fe0dc3c7', '2018-06-05 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `building_info`
--
ALTER TABLE `building_info`
  ADD PRIMARY KEY (`building_code`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
