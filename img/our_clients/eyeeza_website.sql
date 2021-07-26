-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 26, 2017 at 06:43 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `eyeeza_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `online` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`aid`, `name`, `username`, `password`, `online`) VALUES
(1, 'Eyeeza Admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '535bf15bd7e54926e3a207336237f090c5579cc8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(45) NOT NULL,
  `branch_desc` varchar(1000) NOT NULL,
  `photo_id` int(11) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

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

CREATE TABLE IF NOT EXISTS `last_edited` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `photo_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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
-- Table structure for table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `photo_id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  `photo_name` varchar(100) NOT NULL,
  `thumb_nail` varchar(45) NOT NULL,
  `title` varchar(150) NOT NULL,
  `comment` varchar(8000) NOT NULL,
  `update_time` int(11) NOT NULL,
  `video_id` varchar(50) NOT NULL,
  PRIMARY KEY (`photo_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=945 ;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`photo_id`, `category`, `photo_name`, `thumb_nail`, `title`, `comment`, `update_time`, `video_id`) VALUES
(910, 'slider', '1506150720924.jpg', '1506150726694.jpg', 'EYEEZA', '&nbsp;ICT &amp; &nbsp;ENTREPRENEURSHIP TRAINING CENTER', 1506150726, 'none'),
(911, 'slider', '1506150892838.jpg', '1506150908578.jpg', 'EYEEZA', 'CHARITY MANAGEMENT<br />\r\n A charity management platform.', 1506150909, 'none'),
(912, 'slider', '1506150964558.jpg', '1506151019475.jpg', 'EYEEZA', 'CRANE FINDER <br />\r\nFind a crane near you so easily', 1506151020, 'none'),
(913, 'slider', '1506151226313.jpg', '1506151242891.jpg', 'EYEEZA', 'SAFE WATER<br />\r\n The water project.', 1506151243, 'none'),
(914, 'who_we_are', '', '', 'WHO WE ARE', '<div style="text-align: justify;">Since 2009 with an office in Kampala Uganda, Eyeeza Enterprise provides superior I.C.T. solutions and outsourcing services for the smooth running of corporate businesses, schools and organizations serving both the domestic and international sectors. \r\n\r\nWe are devoted to deliver the most reliable, timely, professional and dependable services to our clients. Eyeeza Enterprise proficiently assists its clients to fulfill their Information and Communications Technology needs including consultation, design, development, testing, implementation, training, and maintenance. \r\n\r\nOur objective is to go beyond the expectations of every client by offering outstanding customer I.C.T services.\r\nThank you for taking interest in Eyeeza Enterprise we take pride in quality work and we guarantee you of proficient superb services. \r\nWe have no doubt that you would enjoy our enthusiastic I.C.T companionship and solutions.\r\n</div>', 1506153977, 'none'),
(915, 'services', '', '', 'IT Outsourcing / Off shoring', 'Outsourcing is an allocation of specific business processes to a specialist external service provider. With our committed team, you can shift the work load to us hence giving your company the 24 hour service merit. Areas: Web and Software Development, Support, Data Entry.', 1506154505, 'none'),
(916, 'services', '', '', 'Systems & Software Development', 'Custom Solution, specifically designed to meet companies unique business requirements. We work closely with our clients not only documenting their requirements but also becoming their partner in providing optimized solutions for their variety needs. We develop solution using various platform such as C, C++, C#, Java, .NET, PHP / MySQl, Python and more.', 1506154559, 'none'),
(917, 'services', '', '', 'Networking', 'We are here to help you handle the difficulties innate in designing network security for complex networks; Eyeeza will develop and implement a systematic, top-down approach that focuses on securing your network and business information.', 1506155083, 'none'),
(918, 'services', '', '', 'Website Design & Hosting', 'Looking for WEBSITE HOSTING or website Design company then Eyeeza is the right company to contact. Launch your site with a reliable company. Get your website built by experienced professional''s right from start. Your website says a lot about you. Make sure it looks its best and attracts customers', 1506155120, 'none'),
(919, 'services', '', '', 'Graphics Design', '<p style="text-align: justify; color:#333"><strong>We do creative Graphic Design; </strong></p>\r\n<ul style="text-align: justify; color:#333">\r\n <li style="text-align: left;">Magazines, Manuals,</li>\r\n <li style="text-align: left;">Newsletters, Brochures, Fliers, Diaries</li>\r\n <li style="text-align: left;">Company Logos, Calendars,</li>\r\n <li style="text-align: left;">Posters, Stickers, Logo Retouch, CD covers</li>\r\n <li style="text-align: left;">Cover Design, Letterhead, Screen</li>\r\n <li style="text-align: left;">Savers, Stationery Design, Branding</li>\r\n <li style="text-align: left;">Personalized Cards,</li>\r\n <li style="text-align: left;">Business Cards, Photo, Retouching,</li>\r\n <li style="text-align: left;">Design Vectorization, Web mockups, Web Banners,</li>\r\n <li style="text-align: left;">T-Shirt Designs</li>\r\n</ul>', 1506155181, 'none'),
(920, 'services', '', '', 'ICT Consultancy', '<p style="text-align: justify; color:#333">We conduct a wide range of ICT based consultations that includes;</p>\r\n<ul style="text-align: justify; color:#333">\r\n <li style="text-align: left;">Digital marketing (online marketing),</li>\r\n <li style="text-align: left;">Mobile apps for all platforms,</li>\r\n <li style="text-align: left;">All website designs,</li>\r\n <li style="text-align: left;">Graphics Design,</li>\r\n <li style="text-align: left;">Networks,</li>\r\n <li style="text-align: left;">Computer repair &amp; Maintenance,</li>\r\n <li style="text-align: left;">Network plans, Saver &amp; Database security</li>\r\n</ul>', 1506155498, 'none'),
(921, 'services', '', '', 'Mobile Apps Development', 'We love anything mobile so that''s why we are getting better everyday in mobile app development.So if you want to build that idea even on mobile,we have you covered.', 1506155539, 'none'),
(922, 'services', '', '', 'Computer Repairs and Maintenance', 'Slow Computer or Laptop, Lost Your Files, Internet Slow or Not Working? Email Problems? Wireless Issues? We are able to troubleshoot all computer hardware, wireless issues, networking, internet and software. We offer a total onsite computer repairs service. The experience we have, coupled with a dedicated and caring team, you are covered!', 1506155580, 'none'),
(923, 'projects', '', '', 'Pay me for water App', 'Mobile App that monitors and calculates tap water sales..', 1506339352, '205'),
(924, 'projects', '', '', 'Isave sacco software', 'Isave sacco Management software', 1506339457, '6'),
(925, 'projects', '', '', 'Charity Manage System', 'Charity Manage System, is a SaaS that enables you and your organisation manage and stream line workflow..', 1506339500, '15'),
(926, 'projects', '', '', 'Church Manage System', 'Church Manage System is a Saas that Helps churches to manage projects, tithe, communicate..', 1506397826, '5'),
(927, 'works', '1506398691217.jpg', '1506398733954.jpg', 'Crane Finder', 'Crane Finder', 1506399029, 'http://eyeeza.com/'),
(928, 'works', '1506398987527.jpg', '1506399007738.jpg', 'Charity Manage', 'Charity Management', 1506399008, 'http://charitymanage.org/'),
(929, 'works', '1506399092754.jpg', '1506399114547.jpg', 'Church Manage', 'Church Manage', 1506399114, 'http://churchmanage.org/'),
(930, 'works', '1506399219665.jpg', '1506399229190.jpg', 'Church Manage', 'Church Manage', 1506399229, 'http://churchmanage.org/'),
(931, 'works', '1506399252271.jpg', '1506399286389.jpg', 'Church Manage', 'Church Manage', 1506399286, 'http://churchmanage.org/'),
(932, 'works', '1506399316390.jpg', '1506399343226.jpg', 'Church Manage', 'Church Manage', 1506399344, 'http://churchmanage.org/'),
(933, 'works', '1506399493914.jpg', '1506399515900.jpg', 'Charity Management', 'Charity Management', 1506399516, 'http://charitymanage.org/'),
(934, 'works', '1506399565757.jpg', '1506399581216.jpg', 'Charity Management', 'Charity Management', 1506399581, 'http://charitymanage.org/'),
(935, 'works', '1506399652283.jpg', '1506399666610.jpg', 'Sacco Software', 'Sacco Software', 1506399666, 'http://eyeeza.com/'),
(936, 'team', '1506400753656.jpg', '1506400765782.jpg', 'Morris Kabuye', 'C.E.O', 1506400766, 'none'),
(937, 'team', '1506400844372.jpg', '1506400866667.jpg', 'Davie S. Diba', 'Manager', 1506400867, 'none'),
(938, 'team', '1506400957214.jpg', '1506400970212.jpg', 'Kamoga Charles', 'C.T', 1506400970, 'none'),
(939, 'team', '1506401059616.jpg', '1506401086379.jpg', 'Kenneth Kisegerwa', 'M.K', 1506401087, 'none'),
(940, 'team', '1506401185742.jpg', '1506401227655.jpg', 'David Mugisha', 'Head Development', 1506401227, 'none'),
(941, 'team', '1506401297838.jpg', '1506401311292.jpg', 'Fred Musisi', 'Developer', 1506401311, 'none'),
(942, 'team', '1506401384449.jpg', '1506401393187.jpg', 'Steshire Buyinza', 'Administrator', 1506401394, 'none'),
(943, 'team', '1506401443456.jpg', '1506401453583.jpg', 'Jane', 'Accountant', 1506401454, 'none'),
(944, 'our_clients', '1506400753656.jpg', '1506400765782.jpg', 'Crane Network', 'Crane Network', 1506404754, 'none');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `visitor_id` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(100) NOT NULL,
  `fvisit` int(11) NOT NULL,
  `lvisit` int(11) NOT NULL,
  `visits` int(11) NOT NULL,
  `online` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `clicks` int(11) NOT NULL,
  PRIMARY KEY (`visitor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `sid`, `fvisit`, `lvisit`, `visits`, `online`, `name`, `clicks`) VALUES
(53, 'cgh', 1, 1504598581, 1, 1, '1', 7),
(54, 'k1ooukkl1k4f3a7kden8dges00', 1504597469, 1504598581, 1, 1, 'Unknown', 7);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
