-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2023 at 05:48 PM
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
-- Database: `fixerror`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_profile`
--

CREATE TABLE `business_profile` (
  `business_id` int(50) NOT NULL,
  `business_name` varchar(255) DEFAULT NULL,
  `business_email` varchar(255) DEFAULT NULL,
  `business_phone_number` varchar(20) DEFAULT NULL,
  `business_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `business_profile`
--

INSERT INTO `business_profile` (`business_id`, `business_name`, `business_email`, `business_phone_number`, `business_description`) VALUES
(66831, 'Weimann-Zulauf', 'fwhitlam0@desdev.cn', '7(355)311-0185', 'Lap right hemicolectomy'),
(66832, 'Powlowski, Feeney and Schimmel', 'lbuckeridge1@fastcompany.com', '62(674)911-3425', 'Blepharoptos repair NEC'),
(66833, 'Gulgowski Inc', 'cbeesey2@4shared.com', '1(336)870-9719', 'Abltn lung tiss NEC/NOS'),
(66834, 'Collins, Schaden and Goyette', 'gjosefowicz3@newyorker.com', '420(571)244-4726', 'Rejected kidney nephrect'),
(66835, 'Considine LLC', 'ghowat4@multiply.com', '420(764)745-3899', 'Insert lens at catar ext'),
(66836, 'Connelly-Zulauf', 'nornillos5@yolasite.com', '62(496)664-9446', 'Micro exam-upper GI NEC'),
(66837, 'Raynor, Pfannerstill and Hintz', 'rbedwell6@ihg.com', '7(817)303-9692', 'Repair colovagin fistula'),
(66838, 'Crona and Sons', 'ccolum7@smugmug.com', '92(999)586-6780', 'Replace gast/esoph tube'),
(66839, 'Weissnat Inc', 'ainsull8@hao123.com', '593(310)399-1388', 'Op red-int fix metat/tar'),
(668310, 'Huel, Zulauf and Stehr', 'agligori9@desdev.cn', '33(781)784-5471', 'Solitary kidney nephrect');

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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_date`, `instructor_id`) VALUES
(671, 'International Mixology Expert', '2023-12-05', 731),
(672, 'Basic makeup', '2023-12-10', 732),
(673, 'Spa - Skin and body care', '2023-12-15', 733),
(674, 'Mixing', '2023-12-20', 734),
(675, 'Nail care and styling', '2023-12-25', 735);

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

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `ins_first_name`, `ins_last_name`, `ins_email`, `ins_phone_number`) VALUES
(731, 'John', 'Smith', 'johnsmith@example.com', '555-123-1001'),
(732, 'Emily', 'Johnson', '555-234-2002', 'emilyjohnson@example'),
(733, 'Michael', 'Williams', 'michaelwilliams@example.com', '555-345-3003'),
(734, 'Sophia', 'Brown', 'sophiabrown@example.com', '555-456-4004'),
(735, 'Daniel', 'Davis', 'danieldavis@example.com', '555-567-5005');

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
  `application_id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
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
  `cv_photo` mediumblob DEFAULT NULL,
  `prefer_contact` varchar(25) DEFAULT NULL,
  `questions` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_application`
--

INSERT INTO `job_application` (`application_id`, `user_id`, `job_id`, `job_application_date`, `job_application_status`, `job_application_first_name`, `job_application_last_name`, `job_application_email`, `job_application_phone`, `position`, `salary_req`, `start_working`, `prev_company`, `cv_photo`, `prefer_contact`, `questions`) VALUES
(74651, 8521, 741, '2023-11-01', 'Pending', 'Tristan', 'Golby', 'tgolbyk@cocolog-nifty.com', '217-288-4755', 'Web Developer', '$60,000', 'Immediate', 'ABC Corp', NULL, 'Phone', 'I am excited about the opportunity to work as a Web Developer, bringing creative designs to life and enhancing user experiences.'),
(74652, 8510, 742, '2023-10-25', 'Pending', 'Zorina', 'Robilliard', 'zrobilliard9@booking.com', 'NA', 'HR Coordinator', '$55,000', '2 weeks', 'XYZ Corp', NULL, 'Email', 'I have a strong background in human resources and am eager to contribute to an organizations success through effective HR strategies.'),
(74653, 8535, 744, '2023-11-10', 'Pending', 'Katine', 'Casseldine', 'kcasseldiney@unicef.org', '290-466-7995', 'Digital Marketing Manager', '$70,000', '1 month', 'LMN Corp', NULL, 'Phone', 'As a seasoned digital marketer, Im enthusiastic about leveraging innovative strategies to drive impactful marketing campaigns.'),
(74654, 8514, 745, '2023-11-05', 'Pending', 'Clarke', 'Burkett', 'cburkettd@liveinternet.ru', '472-801-5384', 'Content Writer', '$45,000', 'Immediate', 'PQR Corp', NULL, 'Email', 'My passion for writing combined with my diverse skill set makes me an ideal candidate for the Content Writer role.'),
(74655, 853, 747, '2023-10-30', 'Pending', 'Romain', 'Goddert.sf', 'rgoddertsf2@nyu.edu', 'NA', 'Civil Engineer', '$80,000', '3 weeks', 'IJK Corp', NULL, 'Phone', 'I bring a wealth of experience in civil engineering and am eager to apply my skills to complex infrastructure projects.'),
(74656, 8528, 748, '2023-11-08', 'Pending', 'Rhea', 'Dukesbury', 'rdukesburyr@alibaba.com', '942-975-6483', 'Research Scientist', '$90,000', '1 month', 'EFG Corp', NULL, 'Email', 'With a strong background in scientific research, I am excited about contributing to groundbreaking projects as a Research Scientist.'),
(74657, 859, 7410, '2023-11-15', 'Pending', 'Flemming', 'Camis', 'fcamis8@tuttocitta.it', '292-983-1110', 'Financial Advisor', '$75,000', 'Immediate', 'HIJ Corp', NULL, 'Phone', 'I am passionate about assisting clients in achieving their financial goals and making informed investment decisions.'),
(74658, 8520, 7412, '2023-11-12', 'Pending', 'Wynne', 'Mariolle', 'wmariollej@oakley.com', '319-245-6802', 'Data Analyst', '$65,000', '2 weeks', 'KLM Corp', NULL, 'Email', 'As a skilled data analyst, I am eager to utilize my analytical skills to derive valuable insights and drive informed decision-making.'),
(74659, 8517, 7413, '2023-11-18', 'Pending', 'Marnia', 'Topham', 'mtophamg@amazon.co.jp', '716-913-3474', 'Mechanical Engineer', '$85,000', '1 month', 'NOP Corp', NULL, 'Phone', 'Im enthusiastic about employing my mechanical engineering expertise to innovate and develop cutting-edge technologies.'),
(746510, 8522, 7415, '2023-11-22', 'Pending', 'Kennan', 'Danilovitch', 'kdanilovitchm@arstechnica.com', '636-868-5689', 'Software Developer', '$70,000', '3 weeks', 'QRS Corp', NULL, 'Email', 'With a strong background in software development, Im excited about contributing to high-impact projects and delivering innovative solutions.'),
(746511, 8526, 7417, '2023-11-01', 'Pending', 'Costanza', 'Gocke', 'cgockep@cpanel.net', 'NA', 'Web Developer', '$60,000', 'Immediate', 'UVW Corp', NULL, 'Phone', 'As a dedicated web developer, I aim to create dynamic and user-friendly web applications to enhance user experiences.'),
(746512, 8534, 7418, '2023-10-25', 'Pending', 'Shirlee', 'Miklem', 'smiklemx@sogou.com', '572-698-7547', 'Marketing Specialist', '$55,000', '2 weeks', 'XYZ Corp', NULL, 'Email', 'With a creative approach, I seek to develop marketing strategies to elevate brand visibility and market penetration.'),
(746513, 8529, 7420, '2023-11-10', 'Pending', 'Leland', 'Wakerley', 'lwakerleys@free.fr', '259-987-1414', 'Project Manager', '$75,000', '1 month', 'LMN Corp', NULL, 'Phone', 'As a project manager, I strive to oversee complex projects with meticulous planning and efficient execution.'),
(746514, 8518, 741, '2023-11-05', 'Pending', 'Kassandra', 'Rhead', 'krheadh@hexun.com', '614-489-2463', 'E-commerce Specialist', '$45,000', 'Immediate', 'PQR Corp', NULL, 'Email', 'With a penchant for e-commerce, I endeavor to manage and optimize online sales platforms for seamless shopping experiences.'),
(746515, 8523, 742, '2023-10-30', 'Pending', 'Kennan', 'Danilovitch', 'kdanilovitchm@arstechnica.com', '636-868-5689', 'Architect', '$80,000', '3 weeks', 'IJK Corp', NULL, 'Phone', 'Experienced in architectural designs, I aim to innovate and oversee cutting-edge architectural projects.'),
(746516, 8515, 744, '2023-11-08', 'Pending', 'Vally', 'Elegood', 'velegoode@usatoday.com', '370-255-2934', 'Baker', '$50,000', '1 month', 'EFG Corp', NULL, 'Phone', 'Passionate about baking, I endeavor to create delectable baked goods and maintain high production standards.'),
(746517, 8530, 745, '2023-11-15', 'Pending', 'Letty', 'Raynor', 'lraynort@fc2.com', '371-136-8888', 'Education Consultant', '$85,000', 'Immediate', 'HIJ Corp', NULL, 'Email', 'Skilled in educational consulting, Im eager to develop effective curriculum and foster learning opportunities.'),
(746518, 8525, 748, '2023-11-12', 'Pending', 'Staford', 'McElwee', 'smcelweeo@latimes.com', '261-825-9228', 'Content Writer', '$40,000', '2 weeks', 'KLM Corp', NULL, 'Phone', 'Committed to writing, I aim to create engaging content that resonates with diverse audiences.'),
(746519, 8512, 7410, '2023-11-18', 'Pending', 'Dennison', 'Glackin', 'dglackinb@hatena.ne.jp', '788-407-3597', 'Customer Service Representative', '$35,000', '1 month', 'NOP Corp', NULL, 'Email', 'With a dedication to customer service, I strive to ensure high levels of customer satisfaction and support.'),
(746520, 8528, 7410, '2023-11-22', 'Pending', 'Rhea', 'Dukesbury', 'rdukesburyr@alibaba.com', '942-975-6483', 'Curriculum Developer', '$75,000', '3 weeks', 'QRS Corp', NULL, 'Phone', 'As a curriculum developer, I aim to create engaging and innovative educational content to facilitate effective learning experiences.');

-- --------------------------------------------------------

--
-- Table structure for table `job_offer`
--

CREATE TABLE `job_offer` (
  `job_id` int(50) NOT NULL,
  `business_id` int(11) NOT NULL,
  `job_offer_status` varchar(255) DEFAULT NULL,
  `job_title` varchar(255) NOT NULL,
  `business_name` varchar(255) NOT NULL,
  `job_contact_email` varchar(255) NOT NULL,
  `job_contact_phone` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_type` varchar(255) NOT NULL,
  `job_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_offer`
--

INSERT INTO `job_offer` (`job_id`, `business_id`, `job_offer_status`, `job_title`, `business_name`, `job_contact_email`, `job_contact_phone`, `job_location`, `job_type`, `job_description`) VALUES
(741, 66831, 'Open', 'Software Engineer', 'Weimann-Zulauf', 'softwarejobs@weimannzulauf.com', '123-456-7890', 'San Francisco, CA', 'Full-time', 'Weimann-Zulauf is seeking a highly skilled Software Engineer to join our team. The ideal candidate should have strong programming skills and experience in software development projects.'),
(742, 66832, NULL, 'Marketing Specialist', 'Powlowski, Feeney and Schimmel', 'marketingjobs@powlowskifeeney.com', '987-654-3210', 'New York City, NY', 'Part-time', 'Powlowski, Feeney and Schimmel is looking for a talented Marketing Specialist to develop and execute marketing strategies. Must have a creative approach and strong analytical skills.'),
(744, 66833, 'Open', 'Project Manager', 'Gulgowski Inc', 'projectmanager@gulgowski.com', '333-555-7777', 'Los Angeles, CA', 'Full-time', NULL),
(745, 66834, 'Closed', 'E-commerce Specialist', 'Collins, Schaden and Goyette', 'ecommercejobs@collinsschaden.com', '444-777-9999', 'Seattle, WA', 'Full-time', 'We are hiring an E-commerce Specialist responsible for managing online sales platforms, developing marketing strategies, and ensuring a seamless online shopping experience.'),
(747, 66835, 'Open', 'Architect', 'Considine LLC', 'architectjobs@consinde.com', '222-333-4444', 'Miami, FL', 'Full-time', 'Considine LLC seeks an experienced Architect to design and oversee various architectural projects. Candidates should have a strong portfolio and design skills.'),
(748, 66836, NULL, 'Baker', 'Connelly-Zulauf', 'bakerjobs@connellyzulauf.com', '333-666-8888', 'Denver, CO', 'Part-time', 'Connelly-Zulauf is looking for a passionate Baker to join our team. This role involves creating high-quality baked goods and maintaining production standards.'),
(7410, 66837, 'Open', 'Education Consultant', 'Huel, Zulauf and Stehr', 'educationjobs@huelzulauf.com', '999-000-1111', 'Boston, MA', 'Full-time', NULL),
(7412, 66838, NULL, 'Data Analyst', 'Weimann-Zulauf', 'datajobs@weimannzulauf.com', '123-456-7890', 'San Francisco, CA', 'Full-time', 'Weimann-Zulauf is looking for a skilled Data Analyst to analyze and interpret complex data sets.'),
(7413, 66839, 'Closed', 'Content Writer', 'Powlowski, Feeney and Schimmel', 'contentwriter@powlowskifeeney.com', '987-654-3210', 'HaNoi', 'Full-time', NULL),
(7415, 668310, NULL, 'Customer Service Representative', 'Connelly-Zulauf', 'customerservice@connellyzulauf.com', '333-666-8888', 'Denver, CO', 'Full-time', 'Connelly-Zulauf is looking for a dedicated Customer Service Representative to ensure high levels of customer satisfaction.'),
(7417, 66831, 'Open', 'Civil Engineer', 'Raynor, Pfannerstill and Hintz', 'engineerjobs@raynorpfa.com', '222-333-4444', 'Miami, FL', 'Full-time', 'Raynor, Pfannerstill and Hintz seeks an experienced Civil Engineer to work on various infrastructure projects.'),
(7418, 66832, NULL, 'Research Scientist', 'Weissnat Inc', 'research@weissnat.com', '444-777-9999', 'Seattle, WA', 'Full-time', 'Weissnat Inc is seeking a Research Scientist to lead scientific research projects and develop new innovations.'),
(7420, 66833, 'Open', 'Curriculum Developer', 'Huel, Zulauf and Stehr', 'curriculum@huelzulauf.com', '999-000-1111', 'Boston, MA', 'Full-time', 'Huel, Zulauf and Stehr is looking for a Curriculum Developer to create engaging and effective educational content.');

-- --------------------------------------------------------

--
-- Table structure for table `user_course`
--

CREATE TABLE `user_course` (
  `user_course_id` int(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `user_id` int(50) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`user_id`, `first_name`, `last_name`, `date_of_birth`, `user_address`, `user_email`, `phone_number`) VALUES
(853, 'Ginger', 'Madigan', '0000-00-00', '1818 Towne Place', 'gmadigan2@nsw.gov.au', NULL),
(854, 'Adrian', 'Heiden', '0000-00-00', '3 Northridge Road', 'aheiden3@discuz.net', '864-496-1236'),
(855, 'Edie', 'Labbey', '0000-00-00', '081 Jay Drive', 'elabbey4@liveinternet.ru', '660-747-8664'),
(856, 'Alva', 'Shane', '0000-00-00', '593 Algoma Court', 'ashane5@businessinsider.com', '976-929-2201'),
(857, 'Jackie', 'Pavy', '0000-00-00', '45844 Menomonie Hill', 'jpavy6@shareasale.com', '230-778-2527'),
(858, 'Petronilla', 'Bundey', '0000-00-00', '11 Londonderry Way', 'pbundey7@microsoft.com', '809-378-4196'),
(859, 'Lauretta', 'Hargreaves', '0000-00-00', '288 Boyd Junction', 'lhargreaves8@hp.com', '468-637-9633'),
(8510, 'Darbee', 'Guare', '0000-00-00', '0 Becker Park', 'dguare9@ameblo.jp', NULL),
(8511, 'Lara', 'Trytsman', '0000-00-00', '49431 Tomscot Park', 'ltrytsmana@chicagotribune.com', '344-381-4007'),
(8512, 'Gussie', 'Bligh', '0000-00-00', '28838 Chinook Park', 'gblighb@aboutads.info', '174-998-5853'),
(8513, 'Kitty', 'Tavener', '0000-00-00', '0336 Mandrake Hill', 'ktavenerc@booking.com', '844-852-6336'),
(8514, 'Estell', 'Steiner', '0000-00-00', '3 Butterfield Circle', 'esteinerd@amazon.co.jp', '949-643-8807'),
(8515, 'Toinette', 'Mil', '0000-00-00', '31680 Texas Way', 'tmile@techcrunch.com', '792-696-8688'),
(8516, 'Caye', 'Hargreves', '0000-00-00', '85 Bonner Avenue', 'chargrevesf@epa.gov', '384-951-9148'),
(8517, 'Alica', 'O\'Loghlen', '0000-00-00', '5 Bellgrove Avenue', 'aologhleng@tripadvisor.com', '264-352-8194'),
(8518, 'Marylou', 'Marzella', '0000-00-00', '00853 Banding Crossing', 'mmarzellah@usa.gov', '679-644-2159'),
(8519, 'Hugibert', 'Manjot', '0000-00-00', '43 Lakewood Gardens Alley', 'hmanjoti@elegantthemes.com', '746-420-9837'),
(8520, 'Valenka', 'Josephov', '0000-00-00', NULL, 'vjosephovj@mapquest.com', NULL),
(8521, 'Iolande', 'Sleith', '0000-00-00', '268 Arapahoe Hill', 'isleithl@cdc.gov', '319-436-9798'),
(8522, 'Cassie', 'Rushby', '0000-00-00', '3788 Johnson Crossing', 'crushbym@twitter.com', '846-164-6046'),
(8523, 'Phyllis', 'Hain', '0000-00-00', '329 Gateway Drive', 'phainn@jigsy.com', '208-742-2518'),
(8524, 'Tildie', 'Gumby', '0000-00-00', '4 Mcbride Way', 'tgumbyo@hubpages.com', NULL),
(8525, 'Penny', 'McArd', '0000-00-00', '9103 Valley Edge Trail', 'pmcardp@howstuffworks.com', '724-537-1658'),
(8526, 'Oliviero', 'Clemenson', '0000-00-00', '18283 Mallard Junction', 'oclemensonq@comsenz.com', '613-833-1598'),
(8527, 'Linnie', 'Allsupp', '0000-00-00', '71700 Helena Park', 'lallsuppr@furl.net', '163-688-2064'),
(8528, 'Dacey', 'Maker', '0000-00-00', '38 Dwight Terrace', 'dmakers@timesonline.co.uk', '847-643-4317'),
(8529, 'Bertram', 'Wohlers', '0000-00-00', '51881 Erie Park', 'bwohlerst@com.com', '495-662-0128'),
(8530, 'Maddi', 'Swinfon', '0000-00-00', '06102 Lotheville Center', 'mswinfonu@kickstarter.com', '242-173-1721'),
(8531, 'Errick', 'Igglesden', '0000-00-00', '09692 Vernon Lane', 'eigglesdenv@lycos.com', NULL),
(8532, 'Abra', 'Pelcheur', '0000-00-00', '75788 Johnson Point', 'apelcheurw@ucsd.edu', '557-731-3894'),
(8533, 'Read', 'O\'Heyne', '0000-00-00', '61828 Mallory Drive', 'roheynex@i2i.jp', '386-843-6981'),
(8534, 'Shelbi', 'O\'Murtagh', '0000-00-00', '44034 Drewry Point', 'somurtaghy@mit.edu', '387-104-1992'),
(8535, 'Jobye', 'Dutnall', '0000-00-00', '099 Tennessee Junction', 'jdutnallz@altervista.org', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `business_profile`
--
ALTER TABLE `business_profile`
  ADD PRIMARY KEY (`business_id`),
  ADD KEY `business_id` (`business_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `course_ibfk_1` (`instructor_id`),
  ADD KEY `course_name` (`course_name`);

--
-- Indexes for table `instructor`
--
ALTER TABLE `instructor`
  ADD PRIMARY KEY (`instructor_id`),
  ADD KEY `instructor_id` (`instructor_id`);

--
-- Indexes for table `interview`
--
ALTER TABLE `interview`
  ADD PRIMARY KEY (`interview_id`),
  ADD KEY `interview_ibfk_1` (`user_id`),
  ADD KEY `interview_ibfk_2` (`job_id`);

--
-- Indexes for table `job_application`
--
ALTER TABLE `job_application`
  ADD PRIMARY KEY (`application_id`),
  ADD KEY `job_application_ibfk_2` (`job_id`),
  ADD KEY `job_application_ibfk_1` (`user_id`),
  ADD KEY `job_application_first_name` (`job_application_first_name`),
  ADD KEY `job_application_last_name` (`job_application_last_name`);

--
-- Indexes for table `job_offer`
--
ALTER TABLE `job_offer`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `job_offer_ibfk_1` (`business_id`),
  ADD KEY `job_title` (`job_title`),
  ADD KEY `job_id` (`job_id`);

--
-- Indexes for table `user_course`
--
ALTER TABLE `user_course`
  ADD PRIMARY KEY (`user_course_id`),
  ADD KEY `user_course_ibfk_1` (`user_id`),
  ADD KEY `user_course_ibfk_2` (`course_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `business_profile`
--
ALTER TABLE `business_profile`
  MODIFY `business_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=668311;

--
-- AUTO_INCREMENT for table `job_application`
--
ALTER TABLE `job_application`
  MODIFY `application_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=746521;

--
-- AUTO_INCREMENT for table `job_offer`
--
ALTER TABLE `job_offer`
  MODIFY `job_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7421;

--
-- AUTO_INCREMENT for table `user_course`
--
ALTER TABLE `user_course`
  MODIFY `user_course_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8567;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8536;

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
  ADD CONSTRAINT `job_application_ibfk_2` FOREIGN KEY (`job_id`) REFERENCES `job_offer` (`job_id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
