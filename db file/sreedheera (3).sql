-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 05:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sreedheera`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state` varchar(100) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `preferred_contact_method` varchar(50) DEFAULT NULL,
  `contact_time` varchar(50) DEFAULT NULL,
  `interested_property_type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leads`
--

CREATE TABLE `leads` (
  `lead_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `lead_name` varchar(255) DEFAULT NULL,
  `lead_number` varchar(20) DEFAULT NULL,
  `lead_source` varchar(50) DEFAULT NULL,
  `lead_email` varchar(255) DEFAULT NULL,
  `lead_interest` varchar(255) DEFAULT NULL,
  `lead_message` text DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_department`
--

CREATE TABLE `mst_department` (
  `sk_department_id` bigint(20) NOT NULL,
  `department_name` varchar(100) DEFAULT NULL,
  `department_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mst_department`
--

INSERT INTO `mst_department` (`sk_department_id`, `department_name`, `department_status`) VALUES
(1, 'Admin', 1),
(2, 'Accounts', 1),
(3, 'Finance', 1),
(4, 'Marketing', 1),
(5, 'Sales Manager', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_employee`
--

CREATE TABLE `mst_employee` (
  `sk_employee_id` bigint(20) NOT NULL,
  `employee_type` varchar(30) DEFAULT NULL,
  `designation` bigint(20) DEFAULT NULL,
  `department` bigint(20) DEFAULT NULL,
  `employee_code` varchar(30) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `qualification` varchar(30) DEFAULT NULL,
  `experience` varchar(30) DEFAULT NULL,
  `esi` varchar(40) DEFAULT NULL,
  `pf` varchar(40) DEFAULT NULL,
  `insurance` varchar(30) DEFAULT NULL,
  `skill_type` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `employee_name` varchar(50) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `religion` varchar(30) DEFAULT NULL,
  `nationality` varchar(20) DEFAULT NULL,
  `caste` varchar(20) DEFAULT NULL,
  `martial_status` varchar(20) DEFAULT NULL,
  `resident_status` varchar(20) DEFAULT NULL,
  `physically_handicaped` varchar(10) DEFAULT NULL,
  `mobile` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `employee_pic` varchar(200) DEFAULT NULL,
  `aadhar` varchar(30) DEFAULT NULL,
  `driving_licence` varchar(30) DEFAULT NULL,
  `blood_group` varchar(30) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL,
  `father_name` varchar(30) DEFAULT NULL,
  `mother_name` varchar(40) DEFAULT NULL,
  `country` bigint(20) DEFAULT NULL,
  `state` bigint(20) DEFAULT NULL,
  `place` varchar(30) DEFAULT NULL,
  `pincode` varchar(10) DEFAULT NULL,
  `permanent_address` longtext DEFAULT NULL,
  `residence_country` bigint(20) DEFAULT NULL,
  `residence_state` bigint(20) DEFAULT NULL,
  `residence_place` varchar(30) DEFAULT NULL,
  `residence_pincode` varchar(10) DEFAULT NULL,
  `residence_address` varchar(30) DEFAULT NULL,
  `emergency_name` varchar(30) DEFAULT NULL,
  `emergency_no` varchar(30) DEFAULT NULL,
  `contact_address` longtext DEFAULT NULL,
  `login_status` tinyint(1) DEFAULT 1,
  `login_password` varchar(100) DEFAULT NULL,
  `resignation_date` date DEFAULT NULL,
  `employee_status` tinyint(1) DEFAULT 1,
  `updated_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_by` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mst_employee`
--

INSERT INTO `mst_employee` (`sk_employee_id`, `employee_type`, `designation`, `department`, `employee_code`, `doj`, `qualification`, `experience`, `esi`, `pf`, `insurance`, `skill_type`, `category`, `employee_name`, `dob`, `religion`, `nationality`, `caste`, `martial_status`, `resident_status`, `physically_handicaped`, `mobile`, `email`, `employee_pic`, `aadhar`, `driving_licence`, `blood_group`, `gender`, `father_name`, `mother_name`, `country`, `state`, `place`, `pincode`, `permanent_address`, `residence_country`, `residence_state`, `residence_place`, `residence_pincode`, `residence_address`, `emergency_name`, `emergency_no`, `contact_address`, `login_status`, `login_password`, `resignation_date`, `employee_status`, `updated_date`, `updated_by`) VALUES
(1, 'Permanent', 1, 1, '0098', '2012-08-08', 'ii', 'i', 'i', 'i', 'i', 'Skilled', 'MBC', 'Vivek', '2024-07-01', 'Hindhu', 'Indian', 'ST', 'Married', 'ap', 'No', '8019884557', 'vivekchilukala@gmail.com', '', '6578578587', 'bjkh', 'bjk', 'Male', 'CKR', 'GRD', 1, 0, 'knl', '518002', 'knl', 1, 0, 'knl', 'snkjnk', 'njknkj', 'r', 'r', 'r', 1, 'sme', '2024-07-12', 1, '2024-07-17 10:15:05', ''),
(4, 'Permanent', 1, 1, '0098', '2012-08-08', 'ii', 'i', 'i', 'i', 'i', 'Skilled', 'MBC', 'Vivek', '2024-07-01', 'Hindhu', 'Indian', 'ST', 'Married', 'ap', 'No', '8019884557', 'vivekchilukala@gmail.com', '', '6578578587', 'bjkh', 'bjk', 'Male', 'CKR', 'GRD', 1, 0, 'knl', '518002', 'knl', 1, 0, 'knl', 'snkjnk', 'njknkj', 'r', 'r', 'r', 1, 'sme', '2024-07-12', 1, '2024-07-17 11:36:23', '');

-- --------------------------------------------------------

--
-- Table structure for table `mst_employee_designation`
--

CREATE TABLE `mst_employee_designation` (
  `sk_designation_id` bigint(20) NOT NULL,
  `designation_name` varchar(40) DEFAULT NULL,
  `designation_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mst_employee_designation`
--

INSERT INTO `mst_employee_designation` (`sk_designation_id`, `designation_name`, `designation_status`) VALUES
(1, 'CEO', 1),
(2, 'Accountant', 1),
(3, 'Surveyor', 1),
(4, 'Office Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_employee_payroll`
--

CREATE TABLE `mst_employee_payroll` (
  `sk_payroll_id` bigint(20) NOT NULL,
  `employee_id` bigint(20) DEFAULT NULL,
  `payroll_set_date` date DEFAULT NULL,
  `basic` double DEFAULT NULL,
  `hra_per` double DEFAULT NULL,
  `hra` double DEFAULT NULL,
  `allowances_per` double DEFAULT NULL,
  `allowances` double DEFAULT NULL,
  `pf_per` double DEFAULT NULL,
  `pf` double DEFAULT NULL,
  `pt` double DEFAULT NULL,
  `gross_salary` double DEFAULT NULL,
  `payroll_stop_date` date DEFAULT NULL,
  `per_hour` decimal(10,0) DEFAULT NULL,
  `payroll_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mst_employee_payroll`
--

INSERT INTO `mst_employee_payroll` (`sk_payroll_id`, `employee_id`, `payroll_set_date`, `basic`, `hra_per`, `hra`, `allowances_per`, `allowances`, `pf_per`, `pf`, `pt`, `gross_salary`, `payroll_stop_date`, `per_hour`, `payroll_status`) VALUES
(1, 311, '2022-09-15', 15000, NULL, 0, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 1),
(2, 191, '2022-09-23', 20000, NULL, 1500, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 1),
(3, 194, '2022-09-23', 25000, NULL, 0, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 1),
(4, 247, '2022-09-23', 32000, NULL, 0, NULL, 0, NULL, 0, 0, NULL, NULL, NULL, 1),
(5, 316, '2022-11-04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, NULL, 10, 1),
(6, 435, '2024-05-23', 1000, NULL, 10, NULL, 10, NULL, 10, 10, NULL, NULL, NULL, 0),
(7, 435, '2024-05-23', 10000, NULL, 100, NULL, 100, NULL, 100, 100, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_employee_supervisor`
--

CREATE TABLE `mst_employee_supervisor` (
  `id` int(11) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `supervisor_id` bigint(30) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mst_geo_country`
--

CREATE TABLE `mst_geo_country` (
  `sk_country_id` bigint(20) NOT NULL,
  `country_name` varchar(40) DEFAULT NULL,
  `country_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mst_geo_country`
--

INSERT INTO `mst_geo_country` (`sk_country_id`, `country_name`, `country_status`) VALUES
(1, 'India', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_geo_state`
--

CREATE TABLE `mst_geo_state` (
  `sk_state_id` bigint(20) NOT NULL,
  `country_id` bigint(20) DEFAULT NULL,
  `state_name` varchar(40) DEFAULT NULL,
  `state_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `mst_geo_state`
--

INSERT INTO `mst_geo_state` (`sk_state_id`, `country_id`, `state_name`, `state_status`) VALUES
(1, 1, 'Andhra Pradesh', 1),
(2, 1, 'Arunachal Pradesh', 1),
(3, 1, 'Assam', 1),
(4, 1, 'Bihar', 1),
(5, 1, 'Chandigarh', 1),
(6, 1, 'Chhattisgarh', 1),
(7, 1, 'Delhi', 1),
(8, 1, 'Goa', 1),
(9, 1, 'Gujarat', 1),
(10, 1, 'Haryana', 1),
(11, 1, 'Himachal Pradesh', 1),
(12, 1, 'Jammu and Kashmir', 1),
(13, 1, 'Jharkhand', 1),
(14, 1, 'Karnataka', 1),
(15, 1, 'Kerala', 1),
(16, 1, 'Lakshadweep', 1),
(17, 1, 'Madhya Pradesh', 1),
(18, 1, 'Maharashtra', 1),
(19, 1, 'Arunachal Pradesh', 1),
(20, 1, 'Manipur', 1),
(21, 1, 'Arunachal Pradesh', 1),
(22, 1, 'Meghalaya', 1),
(23, 1, 'Arunachal Pradesh', 1),
(24, 1, 'Mizoram', 1),
(25, 1, 'Arunachal Pradesh', 1),
(26, 1, 'Nagaland', 1),
(27, 1, 'Arunachal Pradesh', 1),
(28, 1, 'Odisha', 1),
(29, 1, 'Arunachal Pradesh', 1),
(30, 1, 'Puducherry', 1),
(31, 1, 'Arunachal Pradesh', 1),
(32, 1, 'Rajasthan', 1),
(33, 1, 'Arunachal Pradesh', 1),
(34, 1, 'Sikkim', 1),
(35, 1, 'Arunachal Pradesh', 1),
(36, 1, 'Tamil Nadu', 1),
(37, 1, 'Arunachal Pradesh', 1),
(38, 1, 'Telangana', 1),
(39, 1, 'Arunachal Pradesh', 1),
(40, 1, 'Tripura', 1),
(41, 1, 'Arunachal Pradesh', 1),
(42, 1, 'Uttar Pradesh', 1),
(43, 1, 'Arunachal Pradesh', 1),
(44, 1, 'Uttarakhand', 1),
(45, 1, 'Arunachal Pradesh', 1),
(46, 1, 'West Bengal', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_type` varchar(50) NOT NULL,
  `property_location` varchar(255) DEFAULT NULL,
  `property_address` text NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `total_units` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'active',
  `latitude` decimal(10,8) DEFAULT NULL,
  `longitude` decimal(11,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_type`, `property_location`, `property_address`, `city`, `state`, `total_units`, `status`, `latitude`, `longitude`) VALUES
(1, 'Nandakam', 'Villas', 'hyderbad', 'ramalayam', 'kurnool', 'Andhra Pradesh', 200, 'active', 15.77543130, 78.03437790),
(2, 'rlds', 'Individual', 'kurnool', 'ramalayam', 'kurnool', 'Andhra Pradesh', 500, 'inactive', NULL, NULL),
(3, 'car', 'Farmlands', NULL, 'ramalayam', 'kurnool', 'Andhra Pradesh', 200, 'inactive', 15.81383680, 78.05337600);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_amenities`
--

CREATE TABLE `tbl_amenities` (
  `amenity_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `amenity_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bankdetails`
--

CREATE TABLE `tbl_bankdetails` (
  `id` bigint(20) NOT NULL,
  `account_holder` varchar(60) NOT NULL,
  `account_number` varchar(30) NOT NULL,
  `ifsc_code` varchar(20) NOT NULL,
  `bank_name` varchar(20) NOT NULL,
  `branch_name` varchar(20) NOT NULL,
  `pan_number` varchar(12) NOT NULL,
  `reference_type` varchar(20) NOT NULL,
  `reference_id` int(11) NOT NULL,
  `status` varchar(12) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `preferred_contact_method` enum('phone','email') NOT NULL,
  `contact_time` varchar(50) NOT NULL,
  `interested_property_type` enum('apartment','house','commercial') NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `city`, `state`, `zip_code`, `country`, `created_at`, `preferred_contact_method`, `contact_time`, `interested_property_type`, `status`) VALUES
(1, 'rachuru', 'venkateswarlu', 'datasai006@gmail.com', '09550262808', 'ramalayam', 'kurnool', 'Andhra Pradesh', '518411', 'India', '2024-06-27 11:29:45', 'phone', '9', 'commercial', 'active'),
(2, 'vakadhari', 'vasu', 'vasu@gmail.com', '000012222', 'ramalayam', 'kurnool', 'Andhra Pradesh', '518411', 'India', '2024-06-27 12:03:20', 'phone', '1', 'house', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer_leads`
--

CREATE TABLE `tbl_customer_leads` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone_number` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip_code` varchar(20) DEFAULT NULL,
  `country` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `preferred_contact_method` enum('phone','email') NOT NULL,
  `contact_time` varchar(50) NOT NULL,
  `interested_property_type` enum('Apartment','House','Commercial','Villas') NOT NULL,
  `lead_source` varchar(30) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customer_leads`
--

INSERT INTO `tbl_customer_leads` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `address`, `city`, `state`, `zip_code`, `country`, `created_at`, `preferred_contact_method`, `contact_time`, `interested_property_type`, `lead_source`, `employee_id`, `created_by`, `status`) VALUES
(1, 'Balu', NULL, NULL, '8886069230', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:16', 'phone', '11:00', 'Villas', 'Digital Ads', 4, 1, 'active'),
(2, 'DR. Hima Bindu Vacharla', NULL, NULL, '8919687172', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:16', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(3, 'Ashok jain', NULL, NULL, '9490552120', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:16', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(4, 'Rahul Kanna', NULL, NULL, '9030142015', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:16', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(5, 'Fakruddin', NULL, NULL, '7799293533', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:16', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(6, 'DR. Govardhanaa', NULL, NULL, '9505541984', 'Adoni', 'Adoni', 'AP', NULL, 'IN', '2024-07-17 10:03:16', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(7, 'Ravi reddy', NULL, NULL, '9989677780', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:16', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(8, 'Dhanunjaya Reddy', NULL, NULL, '9666578678', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(9, 'Kopur Sivasankar', NULL, NULL, '9490500591', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(10, 'Sai', NULL, NULL, '9866050676', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(11, 'Pradeep Kumar', NULL, NULL, '8019861085', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(12, 'Sowjanya Reddy P', NULL, NULL, '9880620001', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(13, 'DR.G.Reena', NULL, NULL, '9949765039', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(14, 'Reshma Mansoor', NULL, NULL, '8332802483', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(15, 'Vimal Babu Pabbathi', NULL, NULL, '7780779372', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(16, 'Mohan Rao', NULL, NULL, '7350900399', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(17, 'Kiran Kumar', NULL, NULL, '9885552233', 'Kadapa', 'Kadapa', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(18, 'G.Ramanjaneyulu', NULL, NULL, '9581412574', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(19, 'Guturu Raghavendra', NULL, NULL, '9848988243', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(20, 'Mahesh', NULL, NULL, '9182168575', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(21, 'Anji Anjaneyulu', NULL, NULL, '8125526766', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(22, 'Kanikireddy Venkata Krishna Reddy', NULL, NULL, '9398289834', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(23, 'Raghunatha Reddy', NULL, NULL, '9666076470', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(24, 'Venkate Chatakonda', NULL, NULL, '9985999059', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(25, 'Machani Srikanth', NULL, NULL, '7569128034', 'Bangalore', 'Bangalore', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(26, 'Jangam Reddy Balakrishna', NULL, NULL, '8019690198', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(27, 'Venkat Narasimha Reddy', NULL, NULL, '9966329267', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(28, 'Lakshman Murthy', NULL, NULL, '8142947368', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(29, 'Chandrababu Naidu Mellamputi', NULL, NULL, '9490869227', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(30, 'Raju', NULL, NULL, '8317640699', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(31, 'Bhavya Theja', NULL, NULL, '8142550529', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(32, 'CA Venkatesh', NULL, NULL, '9848662402', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(33, 'Mani Kanta', NULL, NULL, '9032097750', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(34, 'Suraj Baanu Beesu', NULL, NULL, '7358556552', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(35, 'Baireddi Subash Reddi', NULL, NULL, '9849262681', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(36, 'Vinay', NULL, NULL, '9703940178', 'Adoni', 'Adoni', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(37, 'Ramana Rao Gayakwad', NULL, NULL, '8291993860', 'Atmakur', 'Atmakur', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(38, 'Deepa Batchu', NULL, NULL, '9849194474', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(39, 'Syed Soharab', NULL, NULL, '8333816789', 'KURNOOL', 'KURNOOL', 'AP', NULL, 'IN', '2024-07-17 10:03:17', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(40, 'Upendra Bheemaraju', NULL, NULL, '9908051054', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(41, 'Zohaib Zuby', NULL, NULL, '9505969096', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(42, 'Praveena Ganapa', NULL, NULL, '9989493162', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(43, 'Latha Bijjam', NULL, NULL, '9505481961', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(44, 'Sharmila Reddy', NULL, NULL, '7042898174', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(45, 'Rama Krishna Chintalapalli', NULL, NULL, '9949566999', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(46, 'Somesh Sutraye', NULL, NULL, '9182314248', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(47, 'Yeshwanth Chowdary Jampala', NULL, NULL, '8106255419', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(48, 'Srinivasa Gupta Cheruku', NULL, NULL, '8555832810', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(49, 'Kiran', NULL, NULL, '9491853475', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(50, 'Naarasimha Neelipalli', NULL, NULL, '9154063134', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(51, 'Shaik Ghouse', NULL, NULL, '9949771560', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(52, 'Raj', NULL, NULL, '9000798123', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(53, 'Nukala Upendra', NULL, NULL, '9010496214', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(54, 'Lakshmi Ramayanam', NULL, NULL, '8985250571', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(55, 'Madhu Javuli', NULL, NULL, '9940047263', 'Chennai', 'Chennai', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(56, 'Perugu Venkatesh Reddy', NULL, NULL, '9581473020', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(57, 'Vaishnavi Ellur', NULL, NULL, '9113206221', 'raichur', 'raichur', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(58, 'Sreeja Reddy', NULL, NULL, '8886810802', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(59, 'Srinivasa Reddy Ande', NULL, NULL, '9440567599', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(60, 'Reddy', NULL, NULL, '7989346202', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(61, 'Shakeel Goldsmith', NULL, NULL, '9885337171', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(62, 'Mohan', NULL, NULL, '9494710099', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(63, 'Mandapati Anil', NULL, NULL, '7661075709', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:18', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(64, 'DR.Nadeem', NULL, NULL, '9491852955', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(65, 'Raghavendra Cheruku', NULL, NULL, '8341440069', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(66, 'Sailohith Suryam', NULL, NULL, '9494466628', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(67, 'DK Himakar', NULL, NULL, '9700687249', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(68, 'మండ్ల.వీరవసంత్ వసంత్', NULL, NULL, '9866216227', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(69, 'Prathyusha Reddy', NULL, NULL, '7842743018', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(70, 'Srinath Reddy', NULL, NULL, '9000471416', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(71, 'Shareef ShaiKh', NULL, NULL, '9381425348', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(72, 'Shaik Fathima', NULL, NULL, '8501024211', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(73, 'Srinivas Thaduvai', NULL, NULL, '7799448909', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(74, 'Sanjeeva Reddy', NULL, NULL, '9440292365', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(75, 'HariPrasad Sepuri', NULL, NULL, '9600070789', 'Bangalore', 'Bangalore', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(76, 'Balraj Macha', NULL, NULL, '9402541984', 'nellore', 'nellore', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(77, 'αмυℓγα αммυ', NULL, NULL, '9182185871', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(78, 'Vinay Babu K', NULL, NULL, '9063513034', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(79, 'Hamshini Raghu Pavan', NULL, NULL, '9000199880', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(80, 'Ramana VM', NULL, NULL, '7993370029', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(81, 'mreddy', NULL, NULL, '9182374600', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(82, 'Shaik rahim', NULL, NULL, '8985295158', 'Nellore', 'Nellore', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(83, 'Syed Rahem', NULL, NULL, '8897960903', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(84, 'Abhi', NULL, NULL, '+16787445588', 'Arlington', 'Arlington', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(85, 'Ibrahim Saheb', NULL, NULL, '9701336516', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(86, 'Praveen', NULL, NULL, '9642772229', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(87, 'p c sureshreddy', NULL, NULL, '7981446005', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(88, 'Nagesh Rao', NULL, NULL, '9966030285', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(89, 'Doppalapudi Suresh', NULL, NULL, '8185888111', 'Tenali', 'Tenali', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(90, 'Krishna', NULL, NULL, '9390683181', 'vijayawada', 'vijayawada', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(91, 'Babu', NULL, NULL, '8886637359', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(92, 'Nuthanapati Aravind', NULL, NULL, '9989724745', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(93, 'M. Murlidhar', NULL, NULL, '8297930823', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(94, 'Guru Balaji Gondrala', NULL, NULL, '9595188329', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(95, 'Mymoon Syed', NULL, NULL, '7702174786', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(96, 'mubeena afreen', NULL, NULL, '8951198206', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(97, 'Sankara Palle', NULL, NULL, '9550749348', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(98, 'Kalyan', NULL, NULL, '9032234752', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(99, 'Sri Sabari Constructions', NULL, NULL, '9642531700', 'Pathikonda', 'Pathikonda', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(100, 'Naveen Cherry', NULL, NULL, '9966243218', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:19', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(101, 'Venu Gopal', NULL, NULL, '9704989879', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(102, 'DeepthiN', NULL, NULL, '9014008253', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(103, 'Bojugu kishore', NULL, NULL, '8099302437', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(104, 'Krishna Samhitha', NULL, NULL, '8332942019', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(105, 'nasreen anjum', NULL, NULL, '7780436372', 'Hyd', 'Hyd', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(106, 'Vinay Kumar', NULL, NULL, '9493344955', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(107, 'Alamuri Madhavi Latha', NULL, NULL, '9849668255', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(108, 'Medam Sunkanna', NULL, NULL, '8639386819', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(109, 'Venkateswara Reddy', NULL, NULL, '9985889975', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(110, 'Sireesha Harinath', NULL, NULL, '9701809822', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(111, 'DR. Abdul Samad', NULL, NULL, '9618208933', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(112, 'Kausar osman', NULL, NULL, '7794900333', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(113, 'Kapileswaraiah Kurnool', NULL, NULL, '9440470499', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(114, 'Himaja Batikeri', NULL, NULL, '8106930363', 'Hyderabad', 'Hyderabad', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(115, 'Naga Satyanarayana', NULL, NULL, '9440205009', 'Nandikotkur', 'Nandikotkur', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(116, 'Ranganath Yadav', NULL, NULL, '9916170949', 'Bangalore', 'Bangalore', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(117, 'Eshwar', NULL, NULL, '9652325361', 'Bangalore', 'Bangalore', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(118, 'Murahari Sushma', NULL, NULL, '8985224777', 'Kurnool', 'Kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(119, 'Jalli Divakar', NULL, NULL, '8309508088', 'Vijayawada', 'Vijayawada', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(120, 'Harrish Harrish', NULL, NULL, '9581034951', 'Greater Noida', 'Greater Noida', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(121, 'Challapalli Babu Rao', NULL, NULL, '7032254764', 'kurnool', 'kurnool', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active'),
(122, 'Bharathi Mahesh', NULL, NULL, '9966755299', 'Bangalore', 'Bangalore', 'AP', NULL, 'IN', '2024-07-17 10:03:20', 'phone', '11:00', 'Villas', 'Digital Ads', 1, 1, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `country` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `doj` date NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `attendance` text DEFAULT NULL,
  `payroll` text DEFAULT NULL,
  `performance_reviews` text DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `country`, `state`, `mobile_no`, `doj`, `qualification`, `role_id`, `attendance`, `payroll`, `performance_reviews`, `status`) VALUES
(1, 'rachuru', 'venkateswarlu', 'datasai006@gmail.com', '$2y$10$/Nwrr36LQg3DQ/Qtm1E5beco/0W.SmIVEn4zXib/WSLem0Inucwuu', 'male', 'India', 'Andhra Pradesh', '09550262808', '2024-07-01', 'Btech ', 0, '', '', '', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lead_calls`
--

CREATE TABLE `tbl_lead_calls` (
  `id` int(11) NOT NULL,
  `lead_id` bigint(20) NOT NULL,
  `employee_id` bigint(20) NOT NULL,
  `date_of_communication` date NOT NULL DEFAULT current_timestamp(),
  `call_status` varchar(100) NOT NULL,
  `schedule_date` date DEFAULT NULL,
  `schedule_time` time DEFAULT NULL,
  `interested_property_type` varchar(30) NOT NULL,
  `interested_project` varchar(30) NOT NULL,
  `site_visit_status` varchar(150) DEFAULT NULL,
  `site_visit_schedule_date` date DEFAULT NULL,
  `remarks` varchar(500) NOT NULL,
  `assign_to` varchar(20) DEFAULT NULL,
  `assign_to_employee` bigint(20) DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lead_calls`
--

INSERT INTO `tbl_lead_calls` (`id`, `lead_id`, `employee_id`, `date_of_communication`, `call_status`, `schedule_date`, `schedule_time`, `interested_property_type`, `interested_project`, `site_visit_status`, `site_visit_schedule_date`, `remarks`, `assign_to`, `assign_to_employee`, `status`) VALUES
(3, 1, 1, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Not Interested because of heavy pricing.', NULL, NULL, 'active'),
(4, 2, 4, '2024-07-17', 'Invalid Lead', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not relatable enquiry,not interested because of long distance', NULL, NULL, 'active'),
(5, 3, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Not Interested/ cust not responding properly', NULL, NULL, 'active'),
(6, 4, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Not Interested to purchase now', NULL, NULL, 'active'),
(7, 5, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'july month visit / call back', NULL, NULL, 'active'),
(8, 6, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Explained all the details, Sent her Broucher she inform us about site visiting / price issue / not interested', NULL, NULL, 'active'),
(9, 7, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, '17/07/2024 revisit & sitting ', NULL, NULL, 'active'),
(10, 8, 4, '2024-07-17', 'Not Answering', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested/not responding the call ', NULL, NULL, 'active'),
(11, 9, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'call rejected ', NULL, NULL, 'active'),
(12, 10, 4, '2024-07-17', 'Clicked By Mistake', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding the call', NULL, NULL, 'active'),
(13, 11, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested', NULL, NULL, 'active'),
(14, 12, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding the call ', NULL, NULL, 'active'),
(15, 13, 4, '2024-07-17', 'Office Visited - Further Discussion', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'site visit completed.customer want two days time', NULL, NULL, 'active'),
(16, 14, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'August month 2d Saturday visit ', NULL, NULL, 'active'),
(17, 15, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'JULY 2nd SAT VISIT / not answering', NULL, NULL, 'active'),
(18, 16, 4, '2024-07-17', 'Invalid Number', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Invalid lead', NULL, NULL, 'active'),
(19, 17, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer he want some time on 12th', NULL, NULL, 'active'),
(20, 18, 4, '2024-07-17', 'Invalid Number', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, ' invalid lead', NULL, NULL, 'active'),
(21, 19, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not answering', NULL, NULL, 'active'),
(22, 20, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding the call ', NULL, NULL, 'active'),
(23, 21, 4, '2024-07-17', 'Existing Buyer', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'nandhakum villas ', NULL, NULL, 'active'),
(24, 22, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding the call ', NULL, NULL, 'active'),
(25, 23, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer present stay khambum - july month visit ', NULL, NULL, 'active'),
(26, 24, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, ' call rejected', NULL, NULL, 'active'),
(27, 25, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'valli sir handle ', NULL, NULL, 'active'),
(28, 26, 4, '2024-07-17', 'Responded - Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'busy', NULL, NULL, 'active'),
(29, 27, 4, '2024-07-17', 'Responded - Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'busy', NULL, NULL, 'active'),
(30, 28, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested ', NULL, NULL, 'active'),
(31, 29, 4, '2024-07-17', 'Invalid Lead', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead', NULL, NULL, 'active'),
(32, 30, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'demo villa ', NULL, NULL, 'active'),
(33, 31, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer pricing 75 to 80 lakhs only ', NULL, NULL, 'active'),
(34, 32, 4, '2024-07-17', 'Agent ', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'agent ', NULL, NULL, 'active'),
(35, 33, 4, '2024-07-17', 'Office Visited - Further Discussion', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer pricing 1 CR / ', NULL, NULL, 'active'),
(36, 34, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Designation: software works in hyd right now financial problem he will visit in next year january', NULL, NULL, 'active'),
(37, 35, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'monday/15/2024 VISIT', NULL, NULL, 'active'),
(38, 36, 4, '2024-07-17', 'Clicked By Mistake', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead', NULL, NULL, 'active'),
(39, 37, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'july month last visit  2024', NULL, NULL, 'active'),
(40, 38, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not intrested', NULL, NULL, 'active'),
(41, 39, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding the call ', NULL, NULL, 'active'),
(42, 40, 4, '2024-07-17', 'Not Answering', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'call not responding ', NULL, NULL, 'active'),
(43, 41, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested ', NULL, NULL, 'active'),
(44, 42, 4, '2024-07-17', 'Clicked By Mistake', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(45, 43, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested / pricing issue ', NULL, NULL, 'active'),
(46, 44, 4, '2024-07-17', 'Invalid Lead', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(47, 45, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested / pricing issue ', NULL, NULL, 'active'),
(48, 46, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'july month visit 2024', NULL, NULL, 'active'),
(49, 47, 4, '2024-07-17', 'Invalid Lead', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(50, 48, 4, '2024-07-17', 'Invalid Number', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(51, 49, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'August month visit 2024', NULL, NULL, 'active'),
(52, 50, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer santha residency site visit completed.he want see park view appartment and finalise', NULL, NULL, 'active'),
(53, 51, 4, '2024-07-17', 'Invalid Number', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(54, 52, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer will come to see villa after complitingdemo villa.', NULL, NULL, 'active'),
(55, 53, 4, '2024-07-17', 'Responded - Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'incoming call s not available ', NULL, NULL, 'active'),
(56, 54, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'she will come to knl next month 10th', NULL, NULL, 'active'),
(57, 55, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Designation: CI - Stay in Chennai / july month ending visit ', NULL, NULL, 'active'),
(58, 56, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'budget 45 lakhs / not interested ', NULL, NULL, 'active'),
(59, 57, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'present not interested', NULL, NULL, 'active'),
(60, 58, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'stay in Hyderabad : free time visit / customer not responding properly ', NULL, NULL, 'active'),
(61, 59, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested ', NULL, NULL, 'active'),
(62, 60, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested ', NULL, NULL, 'active'),
(63, 61, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'july/13/07 site visit completed customer seeing other projects also he wil update in two days', NULL, NULL, 'active'),
(64, 62, 4, '2024-07-17', 'Invalid Lead', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(65, 63, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'switch off ', NULL, NULL, 'active'),
(66, 64, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested ', NULL, NULL, 'active'),
(67, 65, 4, '2024-07-17', 'Clicked By Mistake', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(68, 66, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer out of station he will discuss with family members and call ', NULL, NULL, 'active'),
(69, 67, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'switch off ', NULL, NULL, 'active'),
(70, 68, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'free time visit ', NULL, NULL, 'active'),
(71, 69, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested / heavy price ', NULL, NULL, 'active'),
(72, 70, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'free time visit ', NULL, NULL, 'active'),
(73, 71, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'call rejected ', NULL, NULL, 'active'),
(74, 72, 4, '2024-07-17', 'Clicked By Mistake', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead', NULL, NULL, 'active'),
(75, 73, 4, '2024-07-17', 'Clicked By Mistake', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(76, 74, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested heavy budget ', NULL, NULL, 'active'),
(77, 75, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Near to village', NULL, NULL, 'active'),
(78, 76, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'july 16 or 17 visit  2024', NULL, NULL, 'active'),
(79, 77, 4, '2024-07-17', 'Invalid Lead', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(80, 78, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, ' not responding the call ', NULL, NULL, 'active'),
(81, 79, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, '15/07: July 16 or 17 visiting planning', NULL, NULL, 'active'),
(82, 80, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding call', NULL, NULL, 'active'),
(83, 81, 4, '2024-07-17', 'Agent ', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Agent', NULL, NULL, 'active'),
(84, 82, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Destination: Doctor/Time 11:15 am interested villa customer out of station july 16 visit in nandhakum villas', NULL, NULL, 'active'),
(85, 83, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer will come to isit in two days', NULL, NULL, 'active'),
(86, 84, 4, '2024-07-17', 'Yet to Call', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'USA NUMBER', NULL, NULL, 'active'),
(87, 85, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding the call ', NULL, NULL, 'active'),
(88, 86, 4, '2024-07-17', 'Agent ', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not answering ', NULL, NULL, 'active'),
(89, 87, 4, '2024-07-17', 'Agent ', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'agent ', NULL, NULL, 'active'),
(90, 88, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'call rejected ', NULL, NULL, 'active'),
(91, 89, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding the call ', NULL, NULL, 'active'),
(92, 90, 4, '2024-07-17', 'Invalid Number', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'proper location Vijayawada not interested ', NULL, NULL, 'active'),
(93, 91, 4, '2024-07-17', 'Invalid Number', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'invalid lead ', NULL, NULL, 'active'),
(94, 92, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not connecting the call', NULL, NULL, 'active'),
(95, 93, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer busy hw will call later.he will plan to visit on 3rd sunday', NULL, NULL, 'active'),
(96, 94, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer is from pune he will come to knl on August 1st week 05/07/24', NULL, NULL, 'active'),
(97, 95, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'switch off', NULL, NULL, 'active'),
(98, 96, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested / customer pricing 80 lakhs ', NULL, NULL, 'active'),
(99, 97, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'out of station ', NULL, NULL, 'active'),
(100, 98, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Customer family members are not intrested due to long distanceCustomer family members are not intrested due to long distance', NULL, NULL, 'active'),
(101, 99, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'right now busy call back later', NULL, NULL, 'active'),
(102, 100, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'call rejected ', NULL, NULL, 'active'),
(103, 101, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'switch off ', NULL, NULL, 'active'),
(104, 102, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not interested heavy budget ', NULL, NULL, 'active'),
(105, 103, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'long distance from his house and office.', NULL, NULL, 'active'),
(106, 104, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'incoming calls not available ', NULL, NULL, 'active'),
(107, 105, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Designation : Software employee August month visit ', NULL, NULL, 'active'),
(108, 106, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not connecting the call', NULL, NULL, 'active'),
(109, 107, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'free time visit ', NULL, NULL, 'active'),
(110, 108, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'July/18/2024 visit', NULL, NULL, 'active'),
(111, 109, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'Designation : revenue office employee july 16 & 17 visit. cus works in delhi', NULL, NULL, 'active'),
(112, 110, 4, '2024-07-17', 'Not Interested', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer husband is not intrested due to long distanace', NULL, NULL, 'active'),
(113, 111, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'August month visit 2024', NULL, NULL, 'active'),
(114, 112, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'call rejected ', NULL, NULL, 'active'),
(115, 113, 4, '2024-07-17', 'Interested - Yet To Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'free time visit ', NULL, NULL, 'active'),
(116, 114, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'july month week end visit ', NULL, NULL, 'active'),
(117, 115, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'He is visiting another project now. If he doesn\'t like that, then he will come to us. ', NULL, NULL, 'active'),
(118, 116, 4, '2024-07-17', 'Clicked By Mistake', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'click by mistake /not interested click by mistake /not interested ', NULL, NULL, 'active'),
(119, 117, 4, '2024-07-17', 'Scheduled Visit', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, '15/07: 20 to 21 july month visit', NULL, NULL, 'active'),
(120, 118, 4, '2024-07-17', 'Site Visited', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'customer want two days time 18/07', NULL, NULL, 'active'),
(121, 119, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'call back on 12/07', NULL, NULL, 'active'),
(122, 120, 4, '2024-07-17', 'Invalid Number', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'number not working', NULL, NULL, 'active'),
(123, 121, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not responding the call ', NULL, NULL, 'active'),
(124, 122, 4, '2024-07-17', 'Call Back', NULL, NULL, 'Villas', 'Nandakam Villas', NULL, NULL, 'not intrested', NULL, NULL, 'active'),
(125, 1, 1, '2024-07-17', 'Scheduled Visit', '2024-07-18', '17:55:00', 'Villas', 'Nandakam Villas', NULL, NULL, 'NA', '4', NULL, 'active'),
(126, 1, 1, '2024-07-17', 'Interested to Visit Site', '0000-00-00', '00:00:00', 'Villas', 'Nandakam Villas', NULL, NULL, 'NA', '1', NULL, 'active'),
(127, 1, 1, '2024-07-17', 'Interested to Visit Site', '0000-00-00', '00:00:00', 'Villas', 'Nandakam Villas', NULL, NULL, 'NA', '4', NULL, 'active'),
(128, 1, 1, '2024-07-17', 'Interested to Visit Site', '0000-00-00', '00:00:00', 'Villas', 'Nandakam Villas', NULL, NULL, 'NA', '4', NULL, 'active'),
(129, 1, 1, '2024-07-17', 'Interested to Visit Site', '0000-00-00', '00:00:00', 'Villas', 'Nandakam Villas', NULL, NULL, 'NA', '4', NULL, 'active'),
(130, 1, 1, '2024-07-17', 'Interested to Visit Site', '0000-00-00', '00:00:00', 'Villas', 'Nandakam Villas', NULL, NULL, 'NA', '4', NULL, 'active'),
(131, 1, 1, '2024-07-17', 'Interested to Visit Site', '0000-00-00', '00:00:00', 'Villas', 'Nandakam Villas', NULL, NULL, 'NA', '4', NULL, 'active'),
(132, 1, 1, '2024-07-17', 'Interested to Visit Site', '0000-00-00', '00:00:00', 'Villas', 'Nandakam Villas', NULL, NULL, 'NA', '4', NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payments`
--

CREATE TABLE `tbl_payments` (
  `id` bigint(20) NOT NULL,
  `bill_number` varchar(30) NOT NULL,
  `payment_ref_no` varchar(50) NOT NULL,
  `payment_date` date NOT NULL,
  `description` varchar(500) NOT NULL,
  `payment_towards` int(11) NOT NULL,
  `payment_category` varchar(50) NOT NULL,
  `payment_to` int(11) NOT NULL,
  `mode_of_payment` varchar(50) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `transaction_ref_no` varchar(50) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `approved_by` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('pending','approved','rejected','cancelled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_payments`
--

INSERT INTO `tbl_payments` (`id`, `bill_number`, `payment_ref_no`, `payment_date`, `description`, `payment_towards`, `payment_category`, `payment_to`, `mode_of_payment`, `amount`, `transaction_ref_no`, `created_by`, `updated_by`, `approved_by`, `created_at`, `updated_at`, `status`) VALUES
(1, '1234565', '1346', '2024-07-29', 'cement', 2, 'employee', 2, 'check', '15000', '1254', 1, 1, 1, '2024-07-30 06:14:35', '2024-07-30 06:14:35', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `unit_number_or_plot_number` varchar(50) DEFAULT NULL,
  `area_sq_ft` float DEFAULT NULL,
  `size` varchar(50) DEFAULT NULL,
  `facing` varchar(50) DEFAULT NULL,
  `sides` varchar(255) DEFAULT NULL,
  `first_floor` text DEFAULT NULL,
  `second_floor` text DEFAULT NULL,
  `construction_area` varchar(50) DEFAULT NULL,
  `total_floors` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `parking_spot` varchar(255) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` bigint(20) DEFAULT NULL,
  `updated_by` bigint(20) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`, `description`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 'admin', 'Who does Auditing', '2024-05-29 09:49:51', '2024-07-15 06:52:54', 1, 1, 'active'),
(2, 'Accounts', 'Controls all in portal', '2024-05-29 10:51:27', '2024-07-15 06:53:06', NULL, NULL, 'active'),
(3, 'Finance', NULL, '2024-07-15 06:53:16', '2024-07-15 06:53:16', NULL, NULL, 'active'),
(4, 'Marketing', NULL, '2024-07-15 06:53:34', '2024-07-15 06:53:34', NULL, NULL, 'active'),
(5, 'Sales', NULL, '2024-07-15 06:53:44', '2024-07-15 06:53:44', NULL, NULL, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_specifications`
--

CREATE TABLE `tbl_specifications` (
  `specification_id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `specification_name` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `mobile`, `password`, `employee_id`, `role_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `status`) VALUES
(1, 'rachuru venkateswarlu', '', '', '9550262808', '$2y$10$FS.HraZAcK7pVFuOLAgKLeoHoRZ93ZsOeAAZP3j09qNz6l2aLqrF.', 1, 4, 0, 0, 0, 0, 'active'),
(3, 'Vivek', 'vivekchilukala', 'vivekchilukala@gmail.com', '8019884557', '$2y$10$BkfeHjTQedtp0YPThPabWeduxgticlmbhw.gr.jSUS44j/XepYMua', 4, 5, 0, 0, 0, 0, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vendor`
--

CREATE TABLE `tbl_vendor` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `gst_number` varchar(20) NOT NULL,
  `gst_state` varchar(50) NOT NULL,
  `pan` varchar(15) NOT NULL,
  `tds_percentage` varchar(10) NOT NULL,
  `billing_address` varchar(500) NOT NULL,
  `created_by` bigint(20) NOT NULL,
  `updated_by` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(10) NOT NULL DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vendor`
--

INSERT INTO `tbl_vendor` (`id`, `name`, `email_id`, `mobile`, `gst_number`, `gst_state`, `pan`, `tds_percentage`, `billing_address`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status`) VALUES
(1, 'rachuru venkateswarlu', 'datasai006@gmail.com', '09550262808', 'GST000123', 'Andhra Pradesh', 'BWUPV7761k', '15%', 'ramalayam', 1, 1, '2024-07-30 05:05:55', '2024-07-30 05:05:55', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_workforce`
--

CREATE TABLE `tbl_workforce` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `aadhar_number` varchar(12) DEFAULT NULL,
  `mobile_number` varchar(15) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `txn_attendance_2022`
--

CREATE TABLE `txn_attendance_2022` (
  `sk_attendance_id` bigint(20) NOT NULL,
  `employee_id` bigint(20) DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `attendance` varchar(20) DEFAULT NULL,
  `start_time` varchar(20) DEFAULT NULL,
  `end_time` varchar(20) DEFAULT NULL,
  `total_hrs` time DEFAULT NULL,
  `login_id` bigint(20) DEFAULT NULL,
  `attendance_status` varchar(20) DEFAULT NULL,
  `salary_state` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `txn_attendance_2022`
--

INSERT INTO `txn_attendance_2022` (`sk_attendance_id`, `employee_id`, `attendance_date`, `attendance`, `start_time`, `end_time`, `total_hrs`, `login_id`, `attendance_status`, `salary_state`) VALUES
(1, 1, '2022-05-09', 'P', NULL, NULL, NULL, 1, 'active', 0),
(2, 1, '2022-06-25', 'P', NULL, NULL, NULL, 1, 'active', 0),
(3, 311, '2022-08-02', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(4, 311, '2022-08-12', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(5, 311, '2022-08-09', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(6, 191, '2022-09-24', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(7, 311, '2022-09-24', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(8, 345, '2022-09-24', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(9, 311, '2022-10-28', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(10, 259, '2022-10-28', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(11, 345, '2022-10-28', 'P', NULL, NULL, '00:00:08', 1, 'active', 0),
(12, 262, '2022-10-28', 'P', NULL, NULL, '00:00:08', 1, 'active', 0);

-- --------------------------------------------------------

--
-- Table structure for table `txn_employee_advance_salary`
--

CREATE TABLE `txn_employee_advance_salary` (
  `id` bigint(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `advance_amount` decimal(10,0) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `txn_employee_advance_salary`
--

INSERT INTO `txn_employee_advance_salary` (`id`, `employee_id`, `advance_amount`, `date`, `status`) VALUES
(7, 1, 1000, '2022-08-10', 'Active'),
(8, 311, 1000, '2022-08-11', 'Active'),
(9, 311, 500, '2022-08-26', 'Active'),
(10, 435, 2000, '2024-05-23', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `txn_employee_bank`
--

CREATE TABLE `txn_employee_bank` (
  `sk_emp_bank_id` bigint(20) NOT NULL,
  `bank_name` varchar(50) DEFAULT NULL,
  `account_no` varchar(20) DEFAULT NULL,
  `ifsc_code` varchar(20) DEFAULT NULL,
  `branch_name` varchar(50) DEFAULT NULL,
  `bank_status` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `employee_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `txn_employee_bank`
--

INSERT INTO `txn_employee_bank` (`sk_emp_bank_id`, `bank_name`, `account_no`, `ifsc_code`, `branch_name`, `bank_status`, `create_date`, `employee_id`) VALUES
(1, 'SBI', '33633715880', 'SBIN0015512', 'NARI BARI', 1, '2020-08-28', 7),
(2, 'INDIA POST', '008110033556', 'IOPS0000001', 'PANDOOI', 1, '2020-08-28', 8),
(3, 'STATE BANK OF INDIA', '32688212824', 'SBIN0015596', 'PINJAUR', 1, '2020-08-28', 9),
(4, 'SBI', '2098890', 'hgtch', 'sn', 1, '2024-05-23', 435),
(5, NULL, NULL, NULL, NULL, 1, '2024-05-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `txn_employee_doc`
--

CREATE TABLE `txn_employee_doc` (
  `sk_doc_id` bigint(20) NOT NULL,
  `doc_name` varchar(40) DEFAULT NULL,
  `doc_expire` date DEFAULT NULL,
  `doc` varchar(300) DEFAULT NULL,
  `employee_id` bigint(20) DEFAULT NULL,
  `doc_uploaded_date` date DEFAULT NULL,
  `doc_status` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `txn_employee_doc`
--

INSERT INTO `txn_employee_doc` (`sk_doc_id`, `doc_name`, `doc_expire`, `doc`, `employee_id`, `doc_uploaded_date`, `doc_status`) VALUES
(1, 'AAdhar', '2022-11-02', '', 316, '2022-11-02', 1),
(2, 'AAdhar', '2022-11-02', '', 316, '2022-11-02', 1),
(3, 'AAdhar', '2022-11-02', '', 316, '2022-11-02', 1),
(4, 'AAdhar', '2022-11-02', '', 316, '2022-11-02', 1),
(5, 'AAdhar', '2022-11-02', 'WhatsApp_Image_2022-11-01_at_5_00_39_PM.jpeg', 316, '2022-11-02', 1),
(6, 'Offer', '2024-05-23', 'bill.jpeg', 435, '2024-05-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `txn_employee_education`
--

CREATE TABLE `txn_employee_education` (
  `sk_emp_edu_id` bigint(20) NOT NULL,
  `qualification` varchar(20) DEFAULT NULL,
  `branch` varchar(20) DEFAULT NULL,
  `institute_name` varchar(50) DEFAULT NULL,
  `marks_obtained` varchar(20) DEFAULT NULL,
  `percentage` varchar(20) DEFAULT NULL,
  `grade` varchar(20) DEFAULT NULL,
  `year_pass` int(11) DEFAULT NULL,
  `education_status` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `employee_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `txn_employee_education`
--

INSERT INTO `txn_employee_education` (`sk_emp_edu_id`, `qualification`, `branch`, `institute_name`, `marks_obtained`, `percentage`, `grade`, `year_pass`, `education_status`, `create_date`, `employee_id`) VALUES
(1, 'BE', 'CSE', 'jntu', '80', '99', '9', 2015, 1, '2024-05-23', 435);

-- --------------------------------------------------------

--
-- Table structure for table `txn_employee_experience`
--

CREATE TABLE `txn_employee_experience` (
  `sk_emp_exp_id` bigint(20) NOT NULL,
  `organization_name` varchar(50) DEFAULT NULL,
  `designation_starting` varchar(50) DEFAULT NULL,
  `designation_leaving` varchar(50) DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `dol` date DEFAULT NULL,
  `salary_starting` double DEFAULT NULL,
  `salary_leaving` double DEFAULT NULL,
  `experience_status` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `employee_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `txn_employee_experience`
--

INSERT INTO `txn_employee_experience` (`sk_emp_exp_id`, `organization_name`, `designation_starting`, `designation_leaving`, `doj`, `dol`, `salary_starting`, `salary_leaving`, `experience_status`, `create_date`, `employee_id`) VALUES
(1, 'KRFT', 'cc', 'cc', '2024-05-01', '2024-05-24', 11, 111, 1, '2024-05-23', 435);

-- --------------------------------------------------------

--
-- Table structure for table `txn_employee_family`
--

CREATE TABLE `txn_employee_family` (
  `sk_emp_family_id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `relationship` varchar(50) DEFAULT NULL,
  `dob` varchar(20) DEFAULT NULL,
  `qualification` varchar(50) DEFAULT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  `annual_income` varchar(50) DEFAULT NULL,
  `famliy_status` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `employee_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `txn_employee_family`
--

INSERT INTO `txn_employee_family` (`sk_emp_family_id`, `name`, `relationship`, `dob`, `qualification`, `occupation`, `annual_income`, `famliy_status`, `create_date`, `employee_id`) VALUES
(1, 'CKR', 'father', '65', 'n', 'n', '1000', 1, '2024-05-23', 435);

-- --------------------------------------------------------

--
-- Table structure for table `txn_employee_other`
--

CREATE TABLE `txn_employee_other` (
  `sk_emp_other_id` bigint(20) NOT NULL,
  `language_name` varchar(50) DEFAULT NULL,
  `read_lan` varchar(10) DEFAULT NULL,
  `write_lan` varchar(10) DEFAULT NULL,
  `speak_lan` varchar(10) DEFAULT NULL,
  `other_status` int(11) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `employee_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `txn_employee_payslip`
--

CREATE TABLE `txn_employee_payslip` (
  `id` bigint(20) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `basic` decimal(10,0) NOT NULL,
  `hra` decimal(10,0) NOT NULL,
  `allowance` decimal(10,0) NOT NULL,
  `extra` int(11) DEFAULT NULL,
  `present_days` float NOT NULL,
  `ot_hours` float DEFAULT NULL,
  `ot_earnings` decimal(10,0) DEFAULT NULL,
  `gross_salary` decimal(10,0) NOT NULL,
  `ctc` decimal(10,0) NOT NULL,
  `epf` decimal(10,0) NOT NULL,
  `esi` decimal(10,0) NOT NULL,
  `pt` decimal(10,0) NOT NULL,
  `advance` decimal(10,0) NOT NULL,
  `total_deduction` decimal(10,0) NOT NULL,
  `take_home` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `txn_employee_payslip`
--

INSERT INTO `txn_employee_payslip` (`id`, `employee_id`, `month`, `year`, `basic`, `hra`, `allowance`, `extra`, `present_days`, `ot_hours`, `ot_earnings`, `gross_salary`, `ctc`, `epf`, `esi`, `pt`, `advance`, `total_deduction`, `take_home`) VALUES
(5, 311, 8, '2022', 1500, 0, 0, 0, 3, NULL, NULL, 1500, 1534, 34, 15, 0, 1000, 1049, 451);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`lead_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `mst_department`
--
ALTER TABLE `mst_department`
  ADD PRIMARY KEY (`sk_department_id`);

--
-- Indexes for table `mst_employee`
--
ALTER TABLE `mst_employee`
  ADD PRIMARY KEY (`sk_employee_id`);

--
-- Indexes for table `mst_employee_designation`
--
ALTER TABLE `mst_employee_designation`
  ADD PRIMARY KEY (`sk_designation_id`);

--
-- Indexes for table `mst_employee_payroll`
--
ALTER TABLE `mst_employee_payroll`
  ADD PRIMARY KEY (`sk_payroll_id`);

--
-- Indexes for table `mst_employee_supervisor`
--
ALTER TABLE `mst_employee_supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_geo_country`
--
ALTER TABLE `mst_geo_country`
  ADD PRIMARY KEY (`sk_country_id`);

--
-- Indexes for table `mst_geo_state`
--
ALTER TABLE `mst_geo_state`
  ADD PRIMARY KEY (`sk_state_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `property_location` (`property_location`);

--
-- Indexes for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  ADD PRIMARY KEY (`amenity_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tbl_bankdetails`
--
ALTER TABLE `tbl_bankdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_customer_leads`
--
ALTER TABLE `tbl_customer_leads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_lead_calls`
--
ALTER TABLE `tbl_lead_calls`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_specifications`
--
ALTER TABLE `tbl_specifications`
  ADD PRIMARY KEY (`specification_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_workforce`
--
ALTER TABLE `tbl_workforce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_attendance_2022`
--
ALTER TABLE `txn_attendance_2022`
  ADD PRIMARY KEY (`sk_attendance_id`);

--
-- Indexes for table `txn_employee_advance_salary`
--
ALTER TABLE `txn_employee_advance_salary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `txn_employee_bank`
--
ALTER TABLE `txn_employee_bank`
  ADD PRIMARY KEY (`sk_emp_bank_id`);

--
-- Indexes for table `txn_employee_doc`
--
ALTER TABLE `txn_employee_doc`
  ADD PRIMARY KEY (`sk_doc_id`);

--
-- Indexes for table `txn_employee_education`
--
ALTER TABLE `txn_employee_education`
  ADD PRIMARY KEY (`sk_emp_edu_id`);

--
-- Indexes for table `txn_employee_experience`
--
ALTER TABLE `txn_employee_experience`
  ADD PRIMARY KEY (`sk_emp_exp_id`);

--
-- Indexes for table `txn_employee_family`
--
ALTER TABLE `txn_employee_family`
  ADD PRIMARY KEY (`sk_emp_family_id`);

--
-- Indexes for table `txn_employee_other`
--
ALTER TABLE `txn_employee_other`
  ADD PRIMARY KEY (`sk_emp_other_id`);

--
-- Indexes for table `txn_employee_payslip`
--
ALTER TABLE `txn_employee_payslip`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leads`
--
ALTER TABLE `leads`
  MODIFY `lead_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mst_department`
--
ALTER TABLE `mst_department`
  MODIFY `sk_department_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `mst_employee`
--
ALTER TABLE `mst_employee`
  MODIFY `sk_employee_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=438;

--
-- AUTO_INCREMENT for table `mst_employee_designation`
--
ALTER TABLE `mst_employee_designation`
  MODIFY `sk_designation_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mst_employee_payroll`
--
ALTER TABLE `mst_employee_payroll`
  MODIFY `sk_payroll_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mst_employee_supervisor`
--
ALTER TABLE `mst_employee_supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mst_geo_country`
--
ALTER TABLE `mst_geo_country`
  MODIFY `sk_country_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_geo_state`
--
ALTER TABLE `mst_geo_state`
  MODIFY `sk_state_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  MODIFY `amenity_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_bankdetails`
--
ALTER TABLE `tbl_bankdetails`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_customer_leads`
--
ALTER TABLE `tbl_customer_leads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_lead_calls`
--
ALTER TABLE `tbl_lead_calls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tbl_payments`
--
ALTER TABLE `tbl_payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_specifications`
--
ALTER TABLE `tbl_specifications`
  MODIFY `specification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_vendor`
--
ALTER TABLE `tbl_vendor`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_workforce`
--
ALTER TABLE `tbl_workforce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn_attendance_2022`
--
ALTER TABLE `txn_attendance_2022`
  MODIFY `sk_attendance_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `txn_employee_advance_salary`
--
ALTER TABLE `txn_employee_advance_salary`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `txn_employee_bank`
--
ALTER TABLE `txn_employee_bank`
  MODIFY `sk_emp_bank_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `txn_employee_doc`
--
ALTER TABLE `txn_employee_doc`
  MODIFY `sk_doc_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `txn_employee_education`
--
ALTER TABLE `txn_employee_education`
  MODIFY `sk_emp_edu_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `txn_employee_experience`
--
ALTER TABLE `txn_employee_experience`
  MODIFY `sk_emp_exp_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `txn_employee_family`
--
ALTER TABLE `txn_employee_family`
  MODIFY `sk_emp_family_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `txn_employee_other`
--
ALTER TABLE `txn_employee_other`
  MODIFY `sk_emp_other_id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `txn_employee_payslip`
--
ALTER TABLE `txn_employee_payslip`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `leads_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `tbl_amenities`
--
ALTER TABLE `tbl_amenities`
  ADD CONSTRAINT `tbl_amenities_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD CONSTRAINT `tbl_project_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);

--
-- Constraints for table `tbl_specifications`
--
ALTER TABLE `tbl_specifications`
  ADD CONSTRAINT `tbl_specifications_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
