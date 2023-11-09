-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 08:11 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cos20031 group2.1`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_profile`
--

CREATE TABLE `business_profile` (
  `business_id` int(11) NOT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `business_email` varchar(255) DEFAULT NULL,
  `business_phone_number` varchar(20) DEFAULT NULL,
  `business_description` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_date` date DEFAULT NULL,
  `instructor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `education_id` int(11) NOT NULL,
  `education_photo` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(11) NOT NULL,
  `ins_first_name` varchar(255) DEFAULT NULL,
  `ins_last_name` varchar(255) DEFAULT NULL,
  `ins_email` varchar(255) DEFAULT NULL,
  `ins_phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `interview_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `interview_date` date DEFAULT NULL,
  `interviewer_name` varchar(255) DEFAULT NULL,
  `interview_status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_application`
--

CREATE TABLE `job_application` (
  `application_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `education_id` int(11) NOT NULL,
  `job_application_date` date DEFAULT NULL,
  `job_application_status` varchar(255) DEFAULT NULL,
  `job_application_first_name` varchar(255) NOT NULL,
  `job_application_last_name` varchar(255) NOT NULL,
  `job_application_email` varchar(255) NOT NULL,
  `job_application_phone` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `salary_req` varchar(255) DEFAULT NULL,
  `start_working` varchar(255) DEFAULT NULL,
  `prev_company` varchar(255) DEFAULT NULL,
  `cv_photo` varbinary(5000) DEFAULT NULL,
  `prefer_contact` varchar(25) DEFAULT NULL,
  `questions` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_offer`
--

CREATE TABLE `job_offer` (
  `job_id` int(11) NOT NULL,
  `business_id` int(11) NOT NULL,
  `job_offer_status` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `job_contact_email` varchar(255) NOT NULL,
  `job_contact_phone` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `job_description` TEXT DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_offer`
--

INSERT INTO `job_offer` (`job_id`, `job_name`, `business_id`, `job_offer_status`, `job_contact_email`, `job_contact_phone`, `job_schedule`, `salary_range`, `job_location`, `job_type`, `job_description`) VALUES
(1, 'delivery driver', 108639246, 'open', NULL, NULL, '2023-11-12', '$15.50 - $17.50 per hour', '13 Seninis Road; SHELLY BEACH; Queensland(QLD)', NULL, 'you pick up orders and deliver them to customers / requirement: has a driving license and a clean driving record idk'),
(2, 'security guard', 249206829, 'open', NULL, NULL, '2023-12-14', '$14.76 - $16.76 per hour', '45 Atkinson Way; WICKHAM; Western Australia(WA)', NULL, 'we need a someone willing to keep watch the entrance; requirements: high school diploma and a clean background, no criminal record'),
(3, 'receptionist', 379502552, 'open', NULL, NULL, '2023-11-26', '$16.76 - $19.76 per hour', '45 Atkinson Way; WICKHAM; Western Australia(WA)', NULL, 'we need a someone to answers emails; phone calls; manage data entries as well as assisting clients and customers; requirements: high school diploma and basic computer skills; prefer those who has a microsoft certification'),
(4, 'mail carrier', 379502552, 'open', NULL, NULL, '2023-12-19', '$16.76 - $18.76 per hour', '2 Eurack Court; DEMONDRILLE; New South Wales(NSW)', NULL, 'deliver and retrieves letters; mails and package and organize them; requirements: high school diploma'),
(5, 'warehouse worker', 409845328, 'open', NULL, NULL, '2023-11-30', '$17.76 - $20.76 per hour', '13 Cornish Street; TAYLORS LAKES; Victoria(VIC)', NULL, 'organize and maintain stocks; resupply items when its low and order more when needed; requirements: high school diploma and good physical strength'),
(6, 'waiter', 512920890, 'open', NULL, NULL, '2023-12-21', '$20.76 - $21.76 per hour', '96 Mendooran Road; GOAN CREEK; New South Wales(NSW)', NULL, 'takes order and serve customers; assist them to the table when they arrive; requirements: high school diploma'),
(7, 'janitor', 379502552, 'open', NULL, NULL, '2023-12-27', '$15.76 - $17.76 per hour', '2 Eurack Court; DEMONDRILLE; New South Wales(NSW)', NULL, 'keep the place clean and water the plants; requirements: high school diploma');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

CREATE TABLE `tag` (
  `tag_id` int(11) NOT NULL,
  `tag_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tag`
--

INSERT INTO `tag` (`tag_id`, `tag_name`) VALUES
(7, 'cleaner'),
(8, 'customer service'),
(4, 'delivery'),
(3, 'desk work'),
(1, 'driver'),
(9, 'guard'),
(10, 'reception'),
(2, 'security'),
(6, 'service worker'),
(5, 'warehouse');

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `user_course_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_education`
--

CREATE TABLE `user_education` (
  `user_educationid` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `education_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tag`
--

CREATE TABLE `user_tag` (
  `user_tag_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_profile`
--
ALTER TABLE `business_profile`
  ADD PRIMARY KEY (`business_id`),
  ADD KEY `business_name` (`business_name`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `instructor_id` (`instructor_id`),
  ADD KEY `course_name` (`course_name`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`education_id`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `ins_first_name` (`ins_first_name`),
  ADD KEY `ins_last_name` (`ins_last_name`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`interview_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `interview_date` (`interview_date`),
  ADD KEY `interviewer_name` (`interviewer_name`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `job_id` (`job_id`),
  ADD KEY `education_id` (`education_id`),
  ADD KEY `position` (`position`),
  ADD KEY `position_2` (`position`);

--
-- Indexes for table `job_offer`
--
ALTER TABLE `job_offer`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `business_id` (`business_id`),
  ADD KEY `job_name` (`job_name`),
  ADD KEY `job_location` (`job_location`),
  ADD KEY `salary_range` (`salary_range`);

--
-- Indexes for table `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`tag_id`),
  ADD KEY `tag_name` (`tag_name`);

--
-- Indexes for table `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`user_course_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `user_education`
--
ALTER TABLE `user_education`
  ADD PRIMARY KEY (`user_educationid`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `education_id` (`education_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `first_name` (`first_name`),
  ADD KEY `last_name` (`last_name`);

--
-- Indexes for table `user_tag`
--
ALTER TABLE `user_tag`
  ADD PRIMARY KEY (`user_tag_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `skill_id` (`tag_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job_application`
ALTER TABLE `job_application`
MODIFY `application_id` int(11) NOT NULL AUTO_INCREMENT;
-- AUTO_INCREMENT for table `instructor`
--
ALTER TABLE `instructor`
  MODIFY `instructor_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `user_course_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`instructor_id`) REFERENCES `instructor` (`instructor_id`);

--
-- Constraints for table `interview`
--
ALTER TABLE `interview`
  ADD CONSTRAINT `interview_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`),
  ADD CONSTRAINT `interview_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job_offer` (`job_id`);

--
-- Constraints for table `job_application`
--
ALTER TABLE `job_application`
  ADD CONSTRAINT `job_application_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`),
  ADD CONSTRAINT `job_application_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job_offer` (`job_id`),
  ADD CONSTRAINT `job_application_ibfk_3` FOREIGN KEY (`education_id`) REFERENCES `education` (`education_id`);

--
-- Constraints for table `job_offer`
--
ALTER TABLE `job_offer`
  ADD CONSTRAINT `job_offer_ibfk_1` FOREIGN KEY (`business_id`) REFERENCES `business_profile` (`business_id`);

--
-- Constraints for table `user_course`
--
ALTER TABLE `user_course`
  ADD CONSTRAINT `user_course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`),
  ADD CONSTRAINT `user_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `user_education`
--
ALTER TABLE `user_education`
  ADD CONSTRAINT `user_education_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`),
  ADD CONSTRAINT `user_education_ibfk_2` FOREIGN KEY (`education_id`) REFERENCES `education` (`education_id`);

--
-- Constraints for table `user_tag`
--
ALTER TABLE `user_tag`
  ADD CONSTRAINT `user_tag_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_profile` (`user_id`),
  ADD CONSTRAINT `user_tag_ibfk_2` FOREIGN KEY (`tag_id`) REFERENCES `tag` (`tag_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
