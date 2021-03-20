-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 09:29 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `electric_bill_generator`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_07_30_095909_create_tbl_admin_table', 1),
(2, '2018_07_30_144145_create_tbl_rajdip_bill_record_table', 2),
(3, '2018_07_30_150250_create_tbl_rajdip_bill_record_table', 3),
(4, '2018_07_30_150432_create_tbl_ground_bill_record_table', 4),
(5, '2018_07_30_150712_create_tbl_rongon_bill_record_table', 5),
(6, '2018_07_31_064359_create_tbl_member_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_email`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'nasir93cse@gmail.com', '12345', 'Nasir Uddin', '01707568468', '2018-07-30 10:17:14', '2018-07-30 10:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ground_bill_record`
--

CREATE TABLE `tbl_ground_bill_record` (
  `ground_bill_id` int(10) UNSIGNED NOT NULL,
  `ground_last_kwh` int(11) NOT NULL,
  `ground_current_kwh` int(11) NOT NULL,
  `ground_consumed_unit` int(11) NOT NULL,
  `total_consumed_unit` int(11) NOT NULL,
  `ground_kwh_ratio` double NOT NULL,
  `ground_comsumed_taka` double NOT NULL,
  `ground_recharge_taka` int(11) NOT NULL,
  `recarge_total_taka` int(11) NOT NULL,
  `ground_prev_DRorCr` double NOT NULL,
  `ground_total_advance` double NOT NULL,
  `ground_ramaining_balance` double NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_ground_bill_record`
--

INSERT INTO `tbl_ground_bill_record` (`ground_bill_id`, `ground_last_kwh`, `ground_current_kwh`, `ground_consumed_unit`, `total_consumed_unit`, `ground_kwh_ratio`, `ground_comsumed_taka`, `ground_recharge_taka`, `recarge_total_taka`, `ground_prev_DRorCr`, `ground_total_advance`, `ground_ramaining_balance`, `created_at`, `updated_at`) VALUES
(1, 6325, 6410, 85, 0, 15.68, 752.64, 1000, 4800, 236.92, 1236.92, 484.28, '2018-07-30 15:14:57', '2018-07-30 15:14:57'),
(3, 6410, 6528, 118, 678, 17.404129793510325, 835.3982300884957, 500, 4800, 484.28, 984.28, 148.8817699115043, '2018-07-30 19:51:29', '2018-07-30 19:51:29'),
(4, 6528, 6641, 113, 755, 14.966887417218544, 793.2450331125829, 1000, 5300, 148.8817699115043, 1148.8817699115043, 355.63673679892145, '2018-07-31 04:51:47', '2018-07-31 04:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `student_id` int(10) UNSIGNED NOT NULL,
  `student_first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_program` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_father_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mother_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_DoB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval_status` int(11) NOT NULL,
  `student_village` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_post_office` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_thana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `honours_registration_no` int(11) NOT NULL,
  `honours_roll_no` int(11) NOT NULL,
  `honours_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `honours_institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `honours_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `honours_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HSC_registration_no` int(11) NOT NULL,
  `HSC_roll_no` int(11) NOT NULL,
  `HSC_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HSC_institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HSC_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `HSC_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SSC_registration_no` int(11) NOT NULL,
  `SSC_roll_no` int(11) NOT NULL,
  `SSC_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SSC_institution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SSC_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SSC_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`student_id`, `student_first_name`, `student_last_name`, `student_program`, `admission_date`, `student_contact`, `student_email`, `student_image`, `student_father_name`, `student_mother_name`, `student_DoB`, `student_password`, `approval_status`, `student_village`, `student_post_office`, `student_thana`, `student_district`, `student_division`, `honours_registration_no`, `honours_roll_no`, `honours_result`, `honours_institution`, `honours_from`, `honours_to`, `HSC_registration_no`, `HSC_roll_no`, `HSC_result`, `HSC_institution`, `HSC_from`, `HSC_to`, `SSC_registration_no`, `SSC_roll_no`, `SSC_result`, `SSC_institution`, `SSC_from`, `SSC_to`, `created_at`, `updated_at`) VALUES
(1, 'Nasir', 'Uddin', 'Iftah', '25-07-2018', '017075684687', 'nasir93cse@gmail.com', 'student_image/fRovpbGi26eJm6lJC96P.jpeg', 'Anaus Mia', 'Somola Khatun', '2018-01-16', 'asdfg', 1, 'Gonergaw', 'Achmita', 'Katiadi', 'Kishoregonj', 'Dhaka', 6666, 7777, '4', 'IUBAT', '2004', '2006', 6666, 8888, '5', 'Collage', '2000', '2002', 4444, 5555, '5', 'Madrasah', '1990', '1992', '2018-07-31 07:08:56', '2018-07-31 07:08:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rajdip_bill_record`
--

CREATE TABLE `tbl_rajdip_bill_record` (
  `rajdip_bill_id` int(10) UNSIGNED NOT NULL,
  `rajdip_last_kwh` int(11) NOT NULL,
  `rajdip_current_kwh` int(11) NOT NULL,
  `rajdip_consumed_unit` int(11) NOT NULL,
  `total_consumed_unit` int(11) NOT NULL,
  `rajdip_kwh_ratio` double NOT NULL,
  `rajdip_comsumed_taka` double NOT NULL,
  `rajdip_recharge_taka` int(11) NOT NULL,
  `recarge_total_taka` int(11) NOT NULL,
  `rajdip_prev_DRorCr` double NOT NULL,
  `rajdip_total_advance` double NOT NULL,
  `rajdip_ramaining_balance` double NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_rajdip_bill_record`
--

INSERT INTO `tbl_rajdip_bill_record` (`rajdip_bill_id`, `rajdip_last_kwh`, `rajdip_current_kwh`, `rajdip_consumed_unit`, `total_consumed_unit`, `rajdip_kwh_ratio`, `rajdip_comsumed_taka`, `rajdip_recharge_taka`, `recarge_total_taka`, `rajdip_prev_DRorCr`, `rajdip_total_advance`, `rajdip_ramaining_balance`, `created_at`, `updated_at`) VALUES
(1, 6664, 6918, 254, 0, 46.86, 2249.28, 2500, 4800, -180, 2319, 70.56, '2018-07-30 15:02:03', '2018-07-30 15:02:03'),
(5, 6918, 7254, 336, 678, 49.557522123893804, 2378.7610619469024, 2500, 4800, 70.56, 2570.56, 191.79893805309757, '2018-07-30 19:51:29', '2018-07-30 19:51:29'),
(7, 7254, 7694, 440, 755, 58.27814569536424, 3088.7417218543046, 2500, 5300, 191.79893805309757, 2691.7989380530976, -396.94278380120704, '2018-07-31 04:51:47', '2018-07-31 04:51:47');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rongon_bill_record`
--

CREATE TABLE `tbl_rongon_bill_record` (
  `rongon_bill_id` int(10) UNSIGNED NOT NULL,
  `rongon_last_kwh` int(11) NOT NULL,
  `rongon_current_kwh` int(11) NOT NULL,
  `rongon_consumed_unit` int(11) NOT NULL,
  `total_consumed_unit` int(11) NOT NULL,
  `rongon_kwh_ratio` double NOT NULL,
  `rongon_comsumed_taka` double NOT NULL,
  `rongon_recharge_taka` int(11) NOT NULL,
  `recarge_total_taka` int(11) NOT NULL,
  `rongon_prev_DRorCr` double NOT NULL,
  `rongon_total_advance` double NOT NULL,
  `rongon_ramaining_balance` double NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_rongon_bill_record`
--

INSERT INTO `tbl_rongon_bill_record` (`rongon_bill_id`, `rongon_last_kwh`, `rongon_current_kwh`, `rongon_consumed_unit`, `total_consumed_unit`, `rongon_kwh_ratio`, `rongon_comsumed_taka`, `rongon_recharge_taka`, `recarge_total_taka`, `rongon_prev_DRorCr`, `rongon_total_advance`, `rongon_ramaining_balance`, `created_at`, `updated_at`) VALUES
(1, 3761, 3964, 203, 0, 37.45, 1797.6, 1300, 4800, -12, 1287.89, -509.71, NULL, NULL),
(3, 3964, 4188, 224, 678, 33.03834808259587, 1585.8407079646017, 1800, 4800, -509.71, 1290.29, -295.55070796460177, '2018-07-30 19:51:29', '2018-07-30 19:51:29'),
(4, 4188, 4390, 202, 755, 26.75496688741722, 1418.0132450331125, 1800, 5300, -295.55070796460177, 1504.4492920353982, 86.4360470022857, '2018-07-31 04:51:47', '2018-07-31 04:51:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_ground_bill_record`
--
ALTER TABLE `tbl_ground_bill_record`
  ADD PRIMARY KEY (`ground_bill_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `tbl_rajdip_bill_record`
--
ALTER TABLE `tbl_rajdip_bill_record`
  ADD PRIMARY KEY (`rajdip_bill_id`);

--
-- Indexes for table `tbl_rongon_bill_record`
--
ALTER TABLE `tbl_rongon_bill_record`
  ADD PRIMARY KEY (`rongon_bill_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ground_bill_record`
--
ALTER TABLE `tbl_ground_bill_record`
  MODIFY `ground_bill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `student_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_rajdip_bill_record`
--
ALTER TABLE `tbl_rajdip_bill_record`
  MODIFY `rajdip_bill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_rongon_bill_record`
--
ALTER TABLE `tbl_rongon_bill_record`
  MODIFY `rongon_bill_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
