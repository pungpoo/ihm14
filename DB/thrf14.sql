-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 10:29 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thrf14`
--

-- --------------------------------------------------------

--
-- Table structure for table `publications`
--

CREATE TABLE `publications` (
  `paper_id` int(11) NOT NULL,
  `register_id` int(11) NOT NULL,
  `paper_name` varchar(255) NOT NULL,
  `paper_subtheme` int(11) NOT NULL,
  `paper_upload_date` date NOT NULL,
  `paper_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `publications`
--

INSERT INTO `publications` (`paper_id`, `register_id`, `paper_name`, `paper_subtheme`, `paper_upload_date`, `paper_status`) VALUES
(1, 0, 'E-00070.pdf', 0, '0000-00-00', ''),
(2, 0, 'E-00070.pdf', 0, '0000-00-00', ''),
(3, 0, 'E-00070.pdf', 0, '0000-00-00', ''),
(4, 0, 'E-00070.pdf', 0, '0000-00-00', ''),
(5, 0, '2020-02-07-045413.docx', 0, '0000-00-00', ''),
(6, 0, '2020-02-07-045413.docx', 0, '0000-00-00', ''),
(7, 0, '2020-02-07-045608.docx', 0, '0000-00-00', ''),
(8, 0, '2020-02-07-045608.docx', 0, '0000-00-00', ''),
(9, 0, '2020-02-07-045641.docx', 0, '0000-00-00', ''),
(10, 0, '2020-02-07-045641.docx', 0, '0000-00-00', ''),
(11, 0, '2020-02-07-045952.docx', 0, '0000-00-00', ''),
(12, 0, '2020-02-07-045952.docx', 0, '0000-00-00', ''),
(13, 0, '2020-02-07-051911.docx', 0, '0000-00-00', ''),
(14, 0, '2020-02-07-051927.docx', 0, '0000-00-00', ''),
(15, 0, '2020-02-07-052001.docx', 0, '0000-00-00', ''),
(16, 0, '2020-02-07-063242.docx', 0, '0000-00-00', ''),
(17, 0, '2020-02-07-063517.docx', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(6) UNSIGNED NOT NULL,
  `regis_title_name` varchar(255) NOT NULL,
  `regis_name` varchar(50) NOT NULL,
  `regis_lastname` varchar(50) DEFAULT NULL,
  `regis_gender` varchar(1) NOT NULL,
  `regis_age` int(2) NOT NULL,
  `regis_nationality` varchar(100) NOT NULL,
  `regis_mail` varchar(100) NOT NULL,
  `regis_phone` varchar(50) NOT NULL,
  `regis_emergency_phone` varchar(20) DEFAULT NULL,
  `regis_affiliation` varchar(255) NOT NULL,
  `regis_affiliation_address` varchar(255) NOT NULL,
  `regis_food` int(1) NOT NULL,
  `regis_food_other` varchar(255) DEFAULT NULL,
  `regis_food_allergy` varchar(50) DEFAULT NULL,
  `regis_day7-11` int(11) DEFAULT NULL,
  `regis_day8-9` int(11) DEFAULT NULL,
  `regis_paper_submission` int(11) DEFAULT NULL,
  `regis_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `regis_title_name`, `regis_name`, `regis_lastname`, `regis_gender`, `regis_age`, `regis_nationality`, `regis_mail`, `regis_phone`, `regis_emergency_phone`, `regis_affiliation`, `regis_affiliation_address`, `regis_food`, `regis_food_other`, `regis_food_allergy`, `regis_day7-11`, `regis_day8-9`, `regis_paper_submission`, `regis_date`) VALUES
(1, 'ผศ.ดร. (Asst. Prof. Dr.)', 'ปริวรรต', 'พูลเพิ่ม', 'M', 50, 'ไทย', 'fvetpap@ku.ac.th', '0818049626', '', 'Professional Training and Consultant ', '123/272 ม.เพอร์เฟคพาร์ค บางบัวทอง อ.บางบัวทอง จ.นนทบุรี 11110', 1, '', '', 0, 0, NULL, '2020-01-28 05:23:04'),
(2, 'นาย (Mr.)', 'ธิติพัฒน์', 'เอี่ยมนิรันดร์', 'M', 55, 'ไทย', 'titipat@hotmail.com', '0836592414', '', 'มสธ.', '39/16 หมู่ 6 ต.บางตลาด อ.ปากเกร็ด นนทบุรี 11120', 1, '', '', 0, 0, NULL, '2020-01-28 01:46:57'),
(3, 'นาย (Mr.)', 'นำโชค', 'ขุนหมื่นวงค์', 'M', 30, 'ไทย', 'pungpoo23@gmail.com', '0875980464', '', 'สถาบันนวัตกรรมการเรียนรู้', 'สถาบันนวัตกรรมการเรียนรู้', 4, 'เจasv', '', 0, 0, NULL, '2020-01-28 09:08:02'),
(4, 'นาย (Mr.)', 'นำโชค', 'ขุนหมื่นวงค์', 'M', 30, 'ไทย', 'pungpoo23@gmail.comy', '0875980464', '', 'สถาบันนวัตกรรมการเรียนรู้', 'สถาบันนวัตกรรมการเรียนรู้', 4, 'เจasv', '', 0, 0, NULL, '2020-01-28 09:07:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_province`
--

CREATE TABLE `tbl_province` (
  `﻿province_id` int(3) NOT NULL,
  `country_id` int(3) DEFAULT NULL,
  `province_name_th` varchar(255) DEFAULT NULL,
  `province_name_en` varchar(255) DEFAULT NULL,
  `province_regional_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_province`
--

INSERT INTO `tbl_province` (`﻿province_id`, `country_id`, `province_name_th`, `province_name_en`, `province_regional_name`) VALUES
(10, 217, 'กรุงเทพมหานคร', 'BANGKOK', 'BKK'),
(11, 217, 'สมุทรปราการ', 'SAMUT PRAKAN', 'NearBKK'),
(12, 217, 'นนทบุรี', 'NONTHABURI', 'NearBKK'),
(13, 217, 'ปทุมธานี', 'PATHUM THANI', 'NearBKK'),
(14, 217, 'พระนครศรีอยุธยา', 'PHRA NAKHON SI AYUTTHAYA', 'Central'),
(15, 217, 'อ่างทอง', 'ANG THONG', 'Central'),
(16, 217, 'ลพบุรี', 'LOPBURI', 'Central'),
(17, 217, 'สิงห์บุรี', 'SING BURI', 'Central'),
(18, 217, 'ชัยนาท', 'CHAINAT', 'Central'),
(19, 217, 'สระบุรี', 'SARABURI', 'Central'),
(20, 217, 'ชลบุรี', 'CHONBURI', 'East'),
(21, 217, 'ระยอง', 'RAYONG', 'East'),
(22, 217, 'จันทบุรี', 'CHANTHABURI', 'East'),
(23, 217, 'ตราด', 'TRAT', 'East'),
(24, 217, 'ฉะเชิงเทรา', 'CHACHOENGSAO', 'East'),
(25, 217, 'ปราจีนบุรี', 'PRACHINBURI', 'East'),
(26, 217, 'นครนายก', 'NAKHON NAYOK', 'Central'),
(27, 217, 'สระแก้ว', 'SA KAEO', 'East'),
(30, 217, 'นครราชสีมา', 'NAKHON RATCHASIMA', 'NEast'),
(31, 217, 'บุรีรัมย์', 'BURIRAM', 'NEast'),
(32, 217, 'สุรินทร์', 'SURIN', 'NEast'),
(33, 217, 'ศรีสะเกษ', 'SISAKET', 'NEast'),
(34, 217, 'อุบลราชธานี', 'UBON RATCHATHANI', 'NEast'),
(35, 217, 'ยโสธร', 'YASOTHON', 'NEast'),
(36, 217, 'ชัยภูมิ', 'CHAIYAPHUM', 'NEast'),
(37, 217, 'อำนาจเจริญ', 'AMNAT CHAROEN', 'NEast'),
(38, 217, 'บึงกาฬ', 'BUENG KAN', 'NEast'),
(39, 217, 'หนองบัวลำภู', 'NONG BUA LAMPHU', 'NEast'),
(40, 217, 'ขอนแก่น', 'KHON KAEN', 'NEast'),
(41, 217, 'อุดรธานี', 'UDON THANI', 'NEast'),
(42, 217, 'เลย', 'LOEI', 'NEast'),
(43, 217, 'หนองคาย', 'NONG KHAI', 'NEast'),
(44, 217, 'มหาสารคาม', 'MAHA SARAKHAM', 'NEast'),
(45, 217, 'ร้อยเอ็ด', 'ROI ET', 'NEast'),
(46, 217, 'กาฬสินธุ์', 'KALASIN', 'NEast'),
(47, 217, 'สกลนคร', 'SAKON NAKHON', 'NEast'),
(48, 217, 'นครพนม', 'NAKHON PHANOM', 'NEast'),
(49, 217, 'มุกดาหาร', 'MUKDAHAN', 'NEast'),
(50, 217, 'เชียงใหม่', 'CHIANG MAI', 'North'),
(51, 217, 'ลำพูน', 'LAMPHUN', 'North'),
(52, 217, 'ลำปาง', 'LAMPANG', 'North'),
(53, 217, 'อุตรดิตถ์', 'UTTARADIT', 'North'),
(54, 217, 'แพร่', 'PHRAE', 'North'),
(55, 217, 'น่าน', 'NAN', 'North'),
(56, 217, 'พะเยา', 'PHAYAO', 'North'),
(57, 217, 'เชียงราย', 'CHIANG RAI', 'North'),
(58, 217, 'แม่ฮ่องสอน', 'MAE HONG SON', 'North'),
(60, 217, 'นครสวรรค์', 'NAKHON SAWAN', 'Central'),
(61, 217, 'อุทัยธานี', 'UTHAI THANI', 'Central'),
(62, 217, 'กำแพงเพชร', 'KAMPHAENG PHET', 'Central'),
(63, 217, 'ตาก', 'TAK', 'West'),
(64, 217, 'สุโขทัย', 'SUKHOTHAI', 'Central'),
(65, 217, 'พิษณุโลก', 'PHITSANULOK', 'Central'),
(66, 217, 'พิจิตร', 'PHICHIT', 'Central'),
(67, 217, 'เพชรบูรณ์', 'PHETCHABUN', 'Central'),
(70, 217, 'ราชบุรี', 'RATCHABURI', 'West'),
(71, 217, 'กาญจนบุรี', 'KANCHANABURI', 'West'),
(72, 217, 'สุพรรณบุรี', 'SUPHAN BURI', 'Central'),
(73, 217, 'นครปฐม', 'NAKHON PATHOM', 'NearBKK'),
(74, 217, 'สมุทรสาคร', 'SAMUT SAKHON', 'Central'),
(75, 217, 'สมุทรสงคราม', 'SAMUT SONGKHRAM', 'Central'),
(76, 217, 'เพชรบุรี', 'PHETCHABURI', 'West'),
(77, 217, 'ประจวบคีรีขันธ์', 'PRACHUAP KHIRI KHAN', 'West'),
(80, 217, 'นครศรีธรรมราช', 'NAKHON SI THAMMARAT', 'South'),
(81, 217, 'กระบี่', 'KRABI', 'South'),
(82, 217, 'พังงา', 'PHANG NGA', 'South'),
(83, 217, 'ภูเก็ต', 'PHUKET', 'South'),
(84, 217, 'สุราษฎร์ธานี', 'SURAT THANI', 'South'),
(85, 217, 'ระนอง', 'RANONG', 'South'),
(86, 217, 'ชุมพร', 'CHUMPHON', 'South'),
(90, 217, 'สงขลา', 'SONGKHLA', 'South'),
(91, 217, 'สตูล', 'SATUN', 'South'),
(92, 217, 'ตรัง', 'TRANG', 'South'),
(93, 217, 'พัทลุง', 'PHATTHALUNG', 'South'),
(94, 217, 'ปัตตานี', 'PATTANI', 'South'),
(95, 217, 'ยะลา', 'YALA', 'South'),
(96, 217, 'นราธิวาส', 'NARATHIWAT', 'South');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `publications`
--
ALTER TABLE `publications`
  ADD PRIMARY KEY (`paper_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_province`
--
ALTER TABLE `tbl_province`
  ADD PRIMARY KEY (`﻿province_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `publications`
--
ALTER TABLE `publications`
  MODIFY `paper_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
