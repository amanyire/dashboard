-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2019 at 10:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eauganda`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `aid` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `online` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`aid`, `name`, `username`, `password`, `online`) VALUES
(1, 'Eyeeza Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '535bf15bd7e54926e3a207336237f090c5579cc8', 1),
(2, 'admin', 'admin', 'admin2', 1);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(45) NOT NULL,
  `branch_desc` varchar(1000) NOT NULL,
  `photo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `branch_desc`, `photo_id`) VALUES
(1, 'Oasis mall', 'Sparkles Salon Oasis mall is one of our centrally situated sites covering a wide area of service. Bringing both talent and skill to our lines of service, our folks down at Oasis mall have been known to craft brilliance in their services rendering outstanding customer service with dedication. For a long time going, our service center at Oasis mall has branded itself as an icon of great customer service, as well as creativity and talent.  Although a unit one of many, Sparkles Salon delivers award winning service across our his and hers lines, diligently representing the impeccable taste available across our service sites. We know and believe that this has been qualified and appreciated over the years as one of our soft spots, thus making Sparkles salons a household brand and icon in the beauty industry. Our team at Oasis mall, like all the other folks are always excited to deliver outstanding service to not only our first time patrons, but also those long standing esteemed clients', 0),
(2, 'Lugogo mall', 'Our earliest and pioneer site, Sparkles Salon, Lugogo continues to drive impeccable  style and unrivaled creativity. Located within appropriate proximity, our branch at Lugogo mall is well equipped to serve our clients within the Nakawa, Ntinda, and Lugogo suburbs as well as any clients coming around and shopping within one of the oldest city malls in Uganda.  Like most of our sites, our branch at Lugogo has had the pleasure of serving a uniquely cosmopolitan nature of our clients, bring our exceptional satisfaction to many of our international and local patrons alike. We know how important our clients’ image and looks are, which is why even as our oldest site, Sparkles Salon, Lugogo has over the years been fitted with ultra modern and state of the art equipment to cater to the taste of all our clients, as well as provide outstanding contemporary results.', 0),
(3, 'Garden city mall', 'Sparkles Salon, Garden City is on the 1st floor of Garden City mall, along Yusuf Lule Road. Strategically situated approximately three minutes from the main business hub of the city, Garden city is a large mall complete with numerous businesses, and relaxation and entertainment spots.  With ample parking space, this is perhaps the most ideal service site for most of our clientele working long hours within the central business district.  Offering award winning dedication and service, our garden city service site caters to the needs of our clientele with various backgrounds. Because of the nature of the location, this site has had the pleasure of serving a uniquely cosmopolitan nature of our clients, bring our exceptional satisfaction to many of our international and local patrons alike. We are always happy to widen this experience to even more of our walk-in patrons as well as the many that have made us their long time preferred service providers.', 0),
(4, 'Acacia mall', 'Sparkles Salon, Acacia mall.  Offering award winning dedication and service, our Acacia service site caters to the needs of our clientele with various backgrounds. Because of the nature of the location, this site has had the pleasure of serving a uniquely cosmopolitan nature of our clients, bring our exceptional satisfaction to many of our international and local patrons alike. We are always happy to widen this experience to even more of our walk-in patrons as well as the many that have made us their long time preferred service providers.', 0),
(5, 'Forest mall', 'Sparkles Salon, Forest mall is our latest addition to the sparkles sites of impeccable service. Situated at Forest Mall, Lugogo Bypass, approximately 10 minutes outside the main business district, Sparkles salon offers outstanding service catering to the needs and tastes of our elite clientele irrespective of age, gender, race, ethnic, political or sexual orientation.  With ample parking space and a conducive ambience, our service site at Forest mall is strategically positioned to serve our busy clientele, living or working within the mall and its surroundings. We welcome you to place your appointment at Sparkles Salon, Forest Mall.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `file_name`, `uploaded`) VALUES
(1, 'Gucci.JPG', '2016-04-16 12:07:07'),
(2, 'add_animal.png', '2016-04-16 12:31:38'),
(3, 'vegetables.jpg', '2016-04-16 12:32:45'),
(4, 'automatic_addition.txt', '2016-04-16 12:38:56');

-- --------------------------------------------------------

--
-- Table structure for table `last_edited`
--

CREATE TABLE `last_edited` (
  `id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `photo_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_edited`
--

INSERT INTO `last_edited` (`id`, `category`, `photo_name`) VALUES
(1, 'color', '1461245734928.jpg'),
(2, 'black', '1466655686191.jpg'),
(3, 'events', '2.jpg'),
(4, 'street', '2.jpg'),
(5, 'wedding', '2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `photo_id` int(11) NOT NULL,
  `category` varchar(45) NOT NULL,
  `photo_name` varchar(100) NOT NULL,
  `thumb_nail` varchar(45) NOT NULL,
  `title` text NOT NULL,
  `comment` longtext NOT NULL,
  `update_time` int(11) NOT NULL,
  `video_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `category`, `photo_name`, `thumb_nail`, `title`, `comment`, `update_time`, `video_id`) VALUES
(911, 'slider', '1524778254734.jpg', '1524778285560.jpg', 'With EA, everyone succeeds.', '<h3><span style=\"font-family: Arial, Helvetica, sans-serif;\">Therefore respect for one another</span></h3>', 1524778596, 'none'),
(912, 'slider', '1521526482527.jpg', '1521526497709.jpg', 'We work to beat deadlines', '<span style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Delivery of timely assignments is important to us as it is one of the ways we can ensure\r\na long term relationship with our clients.</span>', 1521526497, 'none'),
(913, 'slider', '1524487325439.jpg', '1524487392856.jpg', 'Team Work is key to our success', '<span style=\"font-family: Arial, Helvetica, sans-serif; font-size: medium;\">Client confidentiality is the principle we hold in high regard.</span>', 1524778125, 'none'),
(914, 'about', '', '', 'About us', '<p style=\"text-align: justify;\"><span style=\"font-family: \" trebuchet=\"\" ms\",=\"\" sans-serif;=\"\" font-size:=\"\" medium;\"=\"\">Excellence Associates (E.A) is a privately owned research, academic and consultancy\r\ninternational firm based in Uganda.<span style=\"\" bookman=\"\" old=\"\" style\",=\"\" serif;\"=\"\">&nbsp;The firm</span><span style=\"\" times=\"\" new=\"\" roman\",=\"\" times,=\"\" serif;\"=\"\">&nbsp;was established in 2015 and formally\r\nregistered in 2017 under the URSB in accordance to the constitution of Uganda. E.A\r\nconstitutes of a multidisciplinary consultancy and research team. We are a highly professional team of consultants with tested and proven intellectual diversity, global networks, experience and skills. We undertake consultancy in all fields, projects\r\n(small, medium to large). Within two years, our commitment to\r\nclients work has put us a step ahead of the competition. With EA, everyone succeeds.&nbsp;</span></span></p>', 1525706418, 'none'),
(915, 'services', '', '', 'Social science research', 'One of the most covered fields in academia is social science. Its also too wide. This makes it very challenging for students, organizations, governments to adopt to emerging societal problems and complexities. We at EA assist our clients address this challenge through innovative approaches, and up-to-date quantitative and qualitative methods. With these we empirically integrate both social science theory and practice.', 1524776705, 'none'),
(916, 'services', '', '', 'International Student Exchange Programs', '<p align=\"center\" style=\"box-sizing: border-box; margin: 0px 0px 10px; background-color: rgb(255, 255, 255);\"><span style=\"text-align: justify;\"><span style=\"font-family: &quot;Trebuchet MS&quot;, sans-serif; color: rgb(51, 51, 51);\"><span style=\"font-size: 14px;\">EA can help your institution create sustainable student exchange programs. We draw working papers and proposals that can establish study partnerships between local universities in Uganda&nbsp;and universities in Europe, US and Asia. Do you want your university, institute to attain international leverage and tap into global study networks? EA is you best partner. Write to us for more details on available opportunities.</span></span></span></p>', 1528030873, 'none'),
(917, 'services', '', '', 'Scholarship and Fellowship Opportunities around the world', 'Are you looking for a scholarship or study fellowship across the global? EA helps you find the best fit study opportunities. We also assist you in all application procedures and processes. With EA you will succeed. Write to us and find out the latest opportunities for free.', 1528029981, 'none'),
(918, 'services', '', '', 'Our services', 'EA offers Academic, Consultancy , and Research services in &nbsp;Social Science, Public Health, Management Consultancy, Team building, ICT, Marketing, &nbsp;Proposal Writing, Networking, Project design and planning, Monitoring and Evaluation etc.', 1524473145, 'none'),
(921, 'services', '', '', 'Academic assignments', 'University students often find it hard to meet academic deadlines. EA provides tutorial support, intellectual guidance and academic literature assistance for student clients to enable them meet these deadlines and enable them gain good grades. Our student clientele cuts across numerous academic fields, like Public Health, business, entrepreneurship, Marketing, Accounting and Finance, ICT, engineering and many more. In all these assignments we ensure client autonomy, zero tolerance of plagiarism, excellence and timeliness. ', 1506155539, 'none'),
(927, 'works', '1521704807578.jpg', '1521704812291.jpg', 'GRANTS AND DONATIONS', 'EA will help your organisation draw competitive and innovative proposals that will be satisfactory to meet donor objectives and criteria. With our worldwide network and experience with the donor community, civil society and NGOs, we guarantee our clients the possibility of having their proposals funded.', 1527936005, 'none'),
(928, 'works', '1527939885253.jpg', '1527939920494.jpg', 'Advisory services', 'EA offers the most reliable and trendy advisory services to our clients. We offer personal consultancy, business advisory and government services.', 1529321589, 'none'),
(929, 'works', '1521528564345.jpg', '1521528578598.jpg', 'management consultancy', 'Management\r\nis one of the most exigent organizational functions globally. Both governments\r\nand civil society often find it tasking in fathoming the dynamism and competing&nbsp;functions\r\nof organizational management. We help our clients address these complexities,\r\nanalyze existing problems, and draw work plans. We offer management\r\nrestructuring services, recruitment, advisory services, organizational\r\nre-engineering, project planning, Monitoring and Evaluation and so much more.\r\nWe work with over 200 companies across the Sub-Saharan region.', 1529321574, 'Are you looking for a scholarship or study fellows'),
(930, 'works', '1527939600776.jpg', '1527939644989.jpg', 'Branding', 'We assist you define your brand in dynamic markets. We also offer placement and promotional strategies of our your brand can attain a competitive advantage over competitors.&nbsp;', 1527939644, 'none'),
(931, 'works', '1527940704156.jpg', '1527940711299.jpg', 'Academic assignments', 'EA helps students complete their academic assignments on time. We offer assignment interpretation services, academic and carrier guidance, and thesis services in all academic fields. We liaise with students from universities around the world to share knowledge, experience and best academic practices that guide our academic precision and define our success in this field.', 1527940711, 'none'),
(932, 'works', '1527940037252.jpg', '1527940048587.jpg', 'Public health research', '<p Normal\"><span style=\"color: rgb(51, 51, 51); background: white;\"><span style=\"font-family: &quot;Trebuchet MS&quot;, sans-serif; font-size: x-small;\">Public health research is the fastest field of\r\nstudy around the world. This comes at the backdrop of emergency on new\r\ncommunicable and non-communicable diseases. EA offers evidence-based research ,\r\nworking papers, advisory consultancy in this area. We have experience in more\r\nthan 14 African countries where we have engaged in healthcare feasibility\r\nprojects, public health financing and health economics like Malawi, Rwanda,\r\nKenya, Ethiopia, Tanzania, South Africa and others.</span></span></p>', 1528030981, 'none'),
(933, 'team', '1522335696326.jpg', '1522335718982.jpg', 'Raymond M. Tayebwa', 'Consultant\r\nRaymond holds a Graduate degree in Science of marketing of Ndejje University, and undergraduate degree in Mass communication and Journalism of St Lawrence University. He holds a certificate in entrepreneurship of Pacific University (USA). He has 8 years experience and technical knowledge in marketing communications and research. He brings to EA his skills in diversified administrative programs, management planning and operations support.', 1537196091, 'none'),
(934, 'team', '1521529601371.jpg', '1521529655396.jpg', 'Adire Simon Deng (Phd)', 'Consultant\r\nSimon is Phd candidate in Business Management, Financial option at Moi University, and an MBA finance graduate degree. He has a 10 year experience in financial research and auditing. He is a widely sought after financial consultant in South Sudan, Kenya and Uganda. He bring to EA a wide range of financial diversity , knowledge and exposure.', 1537196104, 'none'),
(935, 'team', '1521704966458.jpg', '1521704992195.jpg', 'Frederick Mugisa', 'Consultant\r\nFrederick holds a Graduate degree in Science of Urban Ecological Planning at the Norwegian University of science and Technology (NTNU), Undergraduate degree of Urban Planning. He is an urban development specialist and enthusiast with vast experience working with communities of urban informal settlements. He brings to EA skills and knowledge in geographical information systems, data collection and Monitoring and Evaluation.', 1537196115, 'none'),
(948, 'services', '1519977250867.jpg', '', 'Proposal writing', 'Statistics show that poor proposal writing is hinged of low funding and lobby systems in Africa. Likewise in academia, many students fail to graduate at undergraduate, graduate and PhDs levels due to failure to carry out adequate proposal writing and research. At EA, we have a team of experienced professionals that write excellent proposals in every one of the fields at an affordable rate.', 1524472734, 'l'),
(949, 'about', '', '', 'Vision', '<p>\r\nOur vision is to succeed in the spheres of consultancy &amp; research through providing top-notch evidence-based services in a consistent, reliable and affordable manner.</p>', 1525707743, 'none'),
(950, 'about', '', '', 'Mission', '<p>\r\nThe mission of Excellence Associates is to accelerate and provide stewardship for the conduct of high quality research from our clients around the world.</p>', 1525706337, 'none'),
(951, 'about', '', '', 'Core values', '<p>EA core values are; Study, Unique, Consistent,Credible, Efficient, Exposed and Dedicated. This is all embedded in the acronym: SUCCEED. At Excellence Associates, we all succeed.&nbsp;</p>', 1530867209, 'none'),
(952, 'team', '1521535265496.jpg', '1521535273929.jpg', 'Rhoda Greyson Musiima', 'Senior partner Rhoda is a Public relations expert in digital communications. A graduate at Makerere University in Journalism and Communication with five years experience. She has worked with reputable companies like Coca-cola, MTN Uganda and Capital Markets Authority. She brings to EA skills in crisis communications, public relations, stakeholder and strategic communications.', 1537196127, 'none'),
(953, 'team', '1521705359649.jpg', '1521705424703.jpg', 'Mirembe Emma Mulumba', 'Senior partner', 1530048404, 'none'),
(954, 'team', '1522335737933.jpg', '1522335751668.jpg', 'Mukiibi Peter', 'Senior partner Peter is a trained computer engineer from Makerere University and holds a certificate in Entrepreneurship and innovations management from Eindhoven University of Technology in Netherlands. He brings to EA knowledge and expertise in Information and computer technology.', 1537196167, 'none'),
(955, 'team', '1522335779311.jpg', '1522335793949.jpg', 'Ssenyondo Racheal', 'Senior Partner Racheal is a chartered marketer ACIM (UK) and holds a Bachelors degree in Economics of Makerere University. She has worked with UAP insurance, Equity Bank and CIC insurance group. Racheal has 10 years experience in insurance policy, Banking and sustainable business growth. She brings to EA her knowledge and skill in strategic management, market segmentation and integrated communications.&nbsp;', 1537196180, 'none'),
(956, 'team', '1524470576236.jpg', '15244705891000.jpg', 'Ninsiima Immaculate', 'Administrator', 1524470589, 'none'),
(957, 'team', '1524470934997.jpg', '1524470939205.jpg', 'David Freeman Kayiira', 'Legal Supervisor', 1524470939, 'none'),
(958, 'team', '1529156030586.jpg', '1529156063927.jpg', 'Deborah Ssempebwa', '<p><span style=\"color: rgb(255, 255, 255);\">\r\nJunior Consultant\r\n</span></p>\r\n<p normal\"=\"\" style=\"text-align:justify\"><span style=\"color: rgb(255, 255, 255);\">Deborah holds a graduate degree\r\nin social sciences of Makerere University and possesses professional\r\nexperience gained during her internships at Community Consortium and Jonâ€™s Home\r\nAfrica. She designs, and ensures timely monitoring and evaluation of projects. Confident in managing and mitigating risks and uncertainty, whilst\r\nmaintaining progress in line with project plans. She brings to EA her commitment\r\nto delivering customer service excellence and a reputation for ensuring\r\ncomplete customer satisfaction. </span></p><br />', 1544022872, 'none'),
(960, 'services', '', '', 'Academy of Excellence (AoE)', 'The year 2019 is bound to be exciting! EA will open its online study site called the Academy of Excellence (AoE). This platform will be used by our clients around the world as a tool to share knowledge, information and study experiences. We shall also have tutorials on basic research , information technology and business administration. Our students will be awarded certificates of completion after every study period. In order to be part of this network, you have to sign up on our site. Start with sharing your interest in this program with us on info@eauganda.com.', 1544002098, 'none'),
(961, 'team', '1545121859843.jpg', '1545121862360.jpg', 'werty', 'wertyhj', 1545121862, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(11) NOT NULL,
  `sid` varchar(100) NOT NULL,
  `fvisit` int(11) NOT NULL,
  `lvisit` int(11) NOT NULL,
  `visits` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `sid`, `fvisit`, `lvisit`, `visits`, `online`, `name`, `clicks`) VALUES
(53, 'cgh', 1, 1554815292, 1, 1, '1', 2008),
(54, 'k1ooukkl1k4f3a7kden8dges00', 1504597469, 1554815292, 1, 1, 'Unknown', 2008),
(55, '', 1527252682, 1554815292, 1, 1, 'Unknown', 2002);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_edited`
--
ALTER TABLE `last_edited`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `last_edited`
--
ALTER TABLE `last_edited`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=962;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
