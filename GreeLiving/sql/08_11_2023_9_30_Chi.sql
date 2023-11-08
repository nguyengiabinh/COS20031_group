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

INSERT INTO `business_profile` (`business_id`, `business_name`, `business_email`, `business_phone_number`, `business_description`) VALUES
(3363805, 'Hermiston-Shanahan', 'cferdinand1d@amazon.de', '48(331)195-6642', 'Lower leg/ankle reat'),
(15885312, 'Jast Group', 'lsinnatt1o@live.com', '975(783)445-9621', 'Insert spinal canal '),
(15947748, 'Kerluke Inc', 'csimioni24@dailymotion.com', '880(669)925-4873', 'Suture of mouth lac '),
(16592347, 'Zieme Group', 'bodwyer7@artisteer.com', '86(355)646-3685', 'Incis salivary glnd/'),
(32789664, 'Nienow and Sons', 'bwillimott1l@typepad.com', '420(253)774-2145', 'Opn dir ing hern-gft'),
(34905343, 'Stokes, Pacocha and Harber', 'djaszczak1b@rediff.com', '55(971)262-1808', 'Oth metatars/tars in'),
(46253640, 'Stehr, Kemmer and Spencer', 'rpepperill8@last.fm', '595(905)516-3533', 'Blood vessel dx proc'),
(50898901, 'Durgan-Gusikowski', 'kashurst1i@wix.com', '63(169)723-4397', 'Tularemia vaccinatio'),
(59383784, 'Weber-Hahn', 'bmapletoft2a@marketwatch.com', '86(754)711-5424', 'Total splenectomy'),
(78152568, 'Waters-Daugherty', 'glampett0@amazon.de', '358(229)600-8566', 'Close nephrost & pye'),
(79120806, 'Lind-Sawayn', 'wbaudinelli17@multiply.com', '504(995)880-8519', 'Heart aneurysm excis'),
(81508012, 'Macejkovic and Sons', 'msaffill1u@howstuffworks.com', '375(455)136-6057', 'Local gastr excision'),
(89965026, 'White-Barrows', 'cdeveral2@nasa.gov', '1(901)157-0561', 'Hemodialysis'),
(108639246, 'Mitchell Group', 'grp@mail.mitchell.com', '420333077', 'we sells magnets :3'),
(118892799, 'Thiel Group', 'rkacheller2g@buzzfeed.com', '7(983)868-4282', 'Ventricl shunt-head/'),
(145069732, 'Kirlin LLC', 'hmcmichael2j@nih.gov', '86(842)109-9378', 'Magnet remov post se'),
(175568947, 'Hayes Group', 'rrebichon1a@purevolume.com', '86(800)506-1888', 'Insert 2 vascular st'),
(176422923, 'Heidenreich, Jenkins and Renner', 'hfazziolie@ucoz.ru', '56(792)837-3356', 'Other local destruc '),
(176822929, 'Legros Group', 'ptregust2f@webs.com', '351(490)464-6603', 'Intracapsul lens ext'),
(185880095, 'Bruen-Aufderhar', 'rmacailinev@yelp.com', '62(815)920-3033', 'Leg vein resect/anas'),
(190099007, 'Pouros LLC', 'drushmare1g@walmart.com', '30(370)985-7161', 'Removal superfic FB '),
(199995840, 'Krajcik LLC', 'sdressel1y@dailymotion.com', '62(606)979-8280', 'Oth arthrotomy-foot/'),
(201861293, 'Haag and Sons', 'jhearep@e-recht24.de', '1(755)308-1838', 'Unilat breast implan'),
(202700718, 'Schowalter-Wisoky', 'cmoreby1t@bloglines.com', '505(931)159-6490', 'Suture of vein'),
(215557685, 'Littel-Spencer', 'mdmytryk29@pbs.org', '970(398)133-3537', 'Reconstruction of pe'),
(216177096, 'Rath, O\'Connell and Price', 'jsheldrick28@nbcnews.com', '86(958)182-3738', 'Bilat tubal crushing'),
(225368027, 'Bernier-Lehner', 'cwaldren2k@digg.com', '1(614)796-5459', 'Lap marsup ovarian c'),
(235534908, 'Legros, Pacocha and Block', 'lbellow2h@shinystat.com', '66(388)888-3216', 'Destruction lid lesi'),
(249206829, 'Murray Pty Ltd', 'hurray@murray.pty.com', '432717269', 'we just do things id'),
(267284013, 'Murazik, Runolfsson and Stokes', 'vbaulcombe1x@adobe.com', '62(941)302-7691', 'Metacar/car division'),
(278861800, 'Gleichner, Donnelly and McLaughlin', 'nwhiffen27@free.fr', '375(285)686-0138', 'Epididymectomy'),
(280835158, 'Luettgen and Sons', 'aoliveg@tinyurl.com', '86(285)350-6592', 'Clos large bowel bio'),
(285786903, 'Runolfsdottir LLC', 'gphillcox2d@lycos.com', '32(345)404-6773', 'Trephin sclera w iri'),
(297612188, 'Kuhic LLC', 'hbuttelf@imageshack.us', '216(749)785-5955', 'Nonoperative exams N'),
(324005930, 'Wiza, Kiehn and Leannon', 'khinzt@guardian.co.uk', '86(473)965-4763', 'Prod subq tunnel no '),
(328056325, 'Miller-Heathcote', 'msearight2m@bluehost.com', '51(342)691-2044', 'Suture lg bowel lace'),
(336582272, 'Littel-Frami', 'hinsall1f@washington.edu', '30(857)349-5835', 'Unil femor hrn rep-g'),
(341118083, 'Macejkovic Inc', 'gdumphries2p@goo.ne.jp', '62(703)771-7794', 'Hand muscle reattach'),
(345314352, 'Wilkinson, Bernier and Hirthe', 'cheeley1k@dell.com', '7(249)893-3978', 'Procedure-one vessel'),
(353281870, 'Cormier, Weber and Turner', 'mhelleker18@theatlantic.com', '351(930)500-6376', 'Refus drs/drslmb ant'),
(379502552, 'Doherty Corp', 'bus@doherty.corp.co', '412415355', 'local post office'),
(393933041, 'Stamm, Hayes and Herman', 'emattevi13@china.com.cn', '84(756)399-9449', 'Open breast biopsy'),
(395157065, 'Baumbach LLC', 'ataberq@bravesites.com', '56(752)691-2718', 'Detach ret photocoag'),
(405072989, 'Kunze LLC', 'reasen15@techcrunch.com', '57(115)988-4256', 'Therapeu plateltpher'),
(405210964, 'Breitenberg, Block and Breitenberg', 'ubrierton2l@wunderground.com', '351(432)726-6813', 'Oth spinal thecal sh'),
(409845328, 'Green Partners', 'yourpartner@we.love.green', '483232912', 'we sell green paints'),
(434152681, 'Bechtelar Group', 'hgullane22@illinois.edu', '81(645)512-9852', 'Lap incis hern repr-'),
(436318336, 'Botsford LLC', 'blandre5@plala.or.jp', '41(198)252-1390', 'Arterial bld gas mea'),
(443600525, 'Gleichner and Sons', 'mdumphreysi@unblog.fr', '993(705)591-3602', 'Vasc shunt & bypass '),
(448243462, 'Ward-Deckow', 'ceusden1m@miibeian.gov.cn', '267(148)913-7225', 'Eyelid operation NEC'),
(472982744, 'Sporer-Krajcik', 'mgippes16@com.com', '86(305)563-4946', 'Proctopexy NEC'),
(479975209, 'Price-Conroy', 'dlazare1w@facebook.com', '86(692)866-3525', 'Suture peptic ulcer '),
(482048118, 'Romaguera Inc', 'mrapiera@scientificamerican.com', '358(187)967-3066', 'Sm bowel exterioriza'),
(483267293, 'Treutel-Howe', 'adraggeb@canalblog.com', '86(664)858-0137', 'Suture of mouth lac '),
(483957874, 'Weimann-Roberts', 'ljeandelh@wordpress.com', '351(439)194-7718', 'Intra-abdomin shunt '),
(503820873, 'Bailey, Shields and Botsford', 'dneaversonu@mapquest.com', '7(694)110-8923', 'Inject anticoagulant'),
(511077390, 'Robel, Rempel and Roberts', 'htowner1n@google.com', '86(568)476-9110', 'Gastric freezing'),
(512920890, 'Kirlin - Beier', 'mail@kirlin.beier.bffs', '472108343', 'local restaurant'),
(523702786, 'Leffler and Sons', 'apeaddie2q@lulu.com', '55(965)542-1967', 'Hand mus/ten/fas/ops'),
(529815849, 'Carter Inc', 'gslator2r@senate.gov', '34(331)314-4536', 'Remov imp dev-radius'),
(537426225, 'Reichert LLC', 'nrichmont25@creativecommons.org', '351(272)328-2464', 'Imp/rep subcue card '),
(554492693, 'Osinski, Stark and Schmitt', 'dbore14@naver.com', '380(946)355-4899', 'Thorac exc lung lesi'),
(555495477, 'Hettinger and Sons', 'csatterley2i@nationalgeographic.com', '53(497)901-0659', 'Cannulation pancrea '),
(556258094, 'Sawayn Group', 'cpakeman20@dyndns.org', '46(222)274-4775', 'Periurethral biopsy'),
(612220546, 'Huels, Cormier and Dickens', 'ebrocklesby26@wired.com', '62(571)265-2620', 'Epididymotomy'),
(614171758, 'Corwin-Anderson', 'gmclearys@spotify.com', '504(490)609-3751', 'Disarticulation of k'),
(629270287, 'Parisian, Volkman and Heidenreich', 'edieton6@cafepress.com', '34(930)842-1069', 'Postop vasc op hem c'),
(693745258, 'Murazik and Sons', 'cwoollerk@booking.com', '51(574)514-2341', 'Open fx site debride'),
(704937952, 'D\'Amore LLC', 'ugoodhay1e@spotify.com', '86(125)440-3275', 'Hip synovectomy'),
(708567035, 'Wilderman-Cole', 'rpablo1@shareasale.com', '86(655)167-1523', 'Per cardiopulmon byp'),
(710547554, 'Bogan-Feil', 'jsargentz@vinaora.com', '1(815)930-0620', 'Perc angio extracran'),
(722000403, 'Von and Sons', 'egaul23@people.com.cn', '86(421)957-4248', 'Injec therap sbst tm'),
(763712232, 'Stanton, Stokes and Steuber', 'fpurdeyo@arizona.edu', '98(732)724-1966', 'Finger injury op NOS'),
(773112931, 'Yost-Boehm', 'oiskower1q@tripadvisor.com', '98(165)277-6981', 'Anal/perian dx proc '),
(778094757, 'Hayes, Hilpert and Kuhn', 'fsamsworthw@tmall.com', '375(864)995-2249', 'Oth salpingo-oophoro'),
(784245299, 'Legros, Mueller and Wiza', 'mpammentx@earthlink.net', '351(686)951-4572', 'Refus drs/drslmb pst'),
(796956546, 'Hansen-Barrows', 'abayldon2c@usda.gov', '359(884)107-7430', 'Other tenodesis of h'),
(807076750, 'Berge LLC', 'dmclaffertyy@cornell.edu', '7(461)363-1799', 'Detach retina xenon '),
(812433170, 'Gulgowski, Collier and Koss', 'lblamire11@com.com', '46(854)200-4273', 'Heart/pericard repr '),
(813934832, 'Schaden, Smitham and Schoen', 'csaul2b@macromedia.com', '353(193)840-0026', 'Unilat fallop tube d'),
(831404792, 'Bauch LLC', 'lstandon9@oaic.gov.au', '62(207)947-1978', 'Mech remov cornea ep'),
(835854712, 'Leffler, Waelchi and Davis', 'cdrewe2n@geocities.com', '27(483)871-0760', 'Appendiceal ops NEC'),
(849019829, 'Von, Hills and Batz', 'lbuckston1v@uiuc.edu', '81(989)597-8430', 'Chordae tendineae op'),
(850160469, 'Kuhlman, Champlin and White', 'mcortese21@un.org', '62(628)794-0044', 'Inject bursa of hand'),
(850817712, 'Gutkowski-Huels', 'pickovicz1z@symantec.com', '86(678)384-2135', 'Other skeletal x-ray'),
(858027852, 'Rempel, Johns and Kiehn', 'amacbainr@hao123.com', '57(352)274-7943', 'Keratomileusis'),
(870361656, 'Lebsack Group', 'ipriddisl@bigcartel.com', '7(876)543-7251', 'Insert testicular pr'),
(871299462, 'Bahringer, Leannon and Kirlin', 'rkennea1s@jigsy.com', '62(772)392-8289', 'Choledochohepat intu'),
(871383361, 'Murphy Group', 'cleclercq2e@youku.com', '55(654)276-8734', 'Cerebral thermograph'),
(882024847, 'Thompson and Sons', 'lsimonelli1c@simplemachines.org', '236(793)350-7174', 'Alcohol rehab/detox'),
(898627173, 'Runolfsson-Willms', 'knoot1h@nasa.gov', '62(434)688-3392', 'Ethmoid art ligat-ep'),
(899450271, 'Kautzer LLC', 'ljennions2o@quantcast.com', '31(733)966-1052', 'Vectorcardiogram'),
(902001034, 'Bechtelar-Leuschke', 'lwarstalln@4shared.com', '1(817)406-7941', 'Tooth implantation'),
(906646291, 'Moen Inc', 'gclotherm@pen.io', '81(569)692-7105', 'Urethral dx proc NEC'),
(917198957, 'Abernathy Inc', 'cgeldert12@squarespace.com', '62(410)918-1585', 'Insert palatal impla'),
(919063935, 'Tremblay-Hegmann', 'msnoddin4@cnn.com', '62(990)564-3433', 'Other laryngeal repa'),
(919940472, 'Russel-Batz', 'rsnawdond@cloudflare.com', '33(133)467-6639', 'Open reduc-ankle dis'),
(931092674, 'Marquardt, McKenzie and Predovic', 'chedworth10@vk.com', '33(749)943-9539', 'Implant mechanic kid'),
(937419900, 'Barton-West', 'tstenning1p@ebay.com', '60(660)852-3010', 'Allergy immunization'),
(966747766, 'Bahringer, Langworth and Gutmann', 'dchatell3@umn.edu', '55(120)286-3375', 'Remov trunk packing '),
(972834957, 'Kilback, Pouros and Kautzer', 'crennelsj@networksolutions.com', '62(618)593-2825', 'Remov trunk suture N'),
(973677230, 'Heaney and Sons', 'asheardc@washington.edu', '86(837)234-2600', 'IVUS intrathoracic v'),
(986621371, 'Macejkovic-Legros', 'etuddenham1j@cloudflare.com', '86(675)193-1354', 'Polio vaccine admini'),
(989012318, 'Cummerata Inc', 'wmoyer1r@issuu.com', '48(198)443-4064', 'Sphinct of oddi op N'),
(991143578, 'Morar, Reynolds and Hudson', 'ibernardt19@sohu.com', '48(592)970-1060', 'Symbleph rep w free ');

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
  `position` varchar(255) NOT NULL,
  `job_application_date` date DEFAULT NULL,
  `job_application_status` varchar(255) DEFAULT NULL,
  `salary_req` varchar(255) DEFAULT NULL,
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
  `job_name` varchar(255) DEFAULT NULL,
  `business_id` int(11) DEFAULT NULL,
  `job_offer_status` varchar(255) DEFAULT NULL,
  `job_contact_email` varchar(255) DEFAULT NULL,
  `job_contact_phone` varchar(255) DEFAULT NULL,
  `job_schedule` date DEFAULT NULL,
  `salary_range` varchar(255) DEFAULT NULL,
  `job_location` varchar(255) DEFAULT NULL,
  `job_type` varchar(255) DEFAULT NULL,
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
