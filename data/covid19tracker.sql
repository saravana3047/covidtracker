-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Oct 02, 2020 at 02:26 PM
-- Server version: 5.7.28
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid19tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(250) NOT NULL,
  `admin_firstname` varchar(50) DEFAULT NULL,
  `admin_lastname` varchar(50) DEFAULT NULL,
  `role` int(11) NOT NULL COMMENT '1 => admin, 2=> staff',
  `status` enum('Y','N') NOT NULL,
  `create_date` datetime DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`, `admin_firstname`, `admin_lastname`, `role`, `status`, `create_date`) VALUES
(1, 'admin@admin.in', 'admin', 'admin', 'Conduit', 1, 'Y', '2017-08-21 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

DROP TABLE IF EXISTS `country`;
CREATE TABLE IF NOT EXISTS `country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(2) DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `status` enum('Y','N') DEFAULT 'Y',
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=246 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_code`, `name`, `status`) VALUES
(1, 'AF', 'Afghanistan', 'Y'),
(2, 'AL', 'Albania', 'Y'),
(3, 'DZ', 'Algeria', 'Y'),
(4, 'DS', 'American Samoa', 'Y'),
(5, 'AD', 'Andorra', 'Y'),
(6, 'AO', 'Angola', 'Y'),
(7, 'AI', 'Anguilla', 'Y'),
(8, 'AQ', 'Antarctica', 'Y'),
(9, 'AG', 'Antigua and Barbuda', 'Y'),
(10, 'AR', 'Argentina', 'Y'),
(11, 'AM', 'Armenia', 'Y'),
(12, 'AW', 'Aruba', 'Y'),
(13, 'AU', 'Australia', 'Y'),
(14, 'AT', 'Austria', 'Y'),
(15, 'AZ', 'Azerbaijan', 'Y'),
(16, 'BS', 'Bahamas', 'Y'),
(17, 'BH', 'Bahrain', 'Y'),
(18, 'BD', 'Bangladesh', 'Y'),
(19, 'BB', 'Barbados', 'Y'),
(20, 'BY', 'Belarus', 'Y'),
(21, 'BE', 'Belgium', 'Y'),
(22, 'BZ', 'Belize', 'Y'),
(23, 'BJ', 'Benin', 'Y'),
(24, 'BM', 'Bermuda', 'Y'),
(25, 'BT', 'Bhutan', 'Y'),
(26, 'BO', 'Bolivia', 'Y'),
(27, 'BA', 'Bosnia and Herzegovina', 'Y'),
(28, 'BW', 'Botswana', 'Y'),
(30, 'BR', 'Brazil', 'Y'),
(31, 'IO', 'British Indian Ocean Territory', 'Y'),
(32, 'BN', 'Brunei Darussalam', 'Y'),
(33, 'BG', 'Bulgaria', 'Y'),
(34, 'BF', 'Burkina Faso', 'Y'),
(35, 'BI', 'Burundi', 'Y'),
(36, 'KH', 'Cambodia', 'Y'),
(37, 'CM', 'Cameroon', 'Y'),
(38, 'CA', 'Canada', 'Y'),
(39, 'CV', 'Cape Verde', 'Y'),
(41, 'CF', 'Central African Republic', 'Y'),
(42, 'TD', 'Chad', 'Y'),
(43, 'CL', 'Chile', 'Y'),
(44, 'CN', 'China', 'Y'),
(47, 'CO', 'Colombia', 'Y'),
(48, 'KM', 'Comoros', 'Y'),
(49, 'CG', 'Congo', 'Y'),
(51, 'CR', 'Costa Rica', 'Y'),
(52, 'HR', 'Croatia (Hrvatska)', 'Y'),
(53, 'CU', 'Cuba', 'Y'),
(54, 'CY', 'Cyprus', 'Y'),
(55, 'CZ', 'Czech Republic', 'Y'),
(56, 'DK', 'Denmark', 'Y'),
(57, 'DJ', 'Djibouti', 'Y'),
(58, 'DM', 'Dominica', 'Y'),
(59, 'DO', 'Dominican Republic', 'Y'),
(60, 'TP', 'East Timor', 'Y'),
(61, 'EC', 'Ecuador', 'Y'),
(62, 'EG', 'Egypt', 'Y'),
(63, 'SV', 'El Salvador', 'Y'),
(64, 'GQ', 'Equatorial Guinea', 'Y'),
(65, 'ER', 'Eritrea', 'Y'),
(66, 'EE', 'Estonia', 'Y'),
(67, 'ET', 'Ethiopia', 'Y'),
(70, 'FJ', 'Fiji', 'Y'),
(71, 'FI', 'Finland', 'Y'),
(72, 'FR', 'France', 'Y'),
(73, 'FX', 'France, Metropolitan', 'Y'),
(74, 'GF', 'French Guiana', 'Y'),
(75, 'PF', 'French Polynesia', 'Y'),
(76, 'TF', 'French Southern Territories', 'Y'),
(77, 'GA', 'Gabon', 'Y'),
(78, 'GM', 'Gambia', 'Y'),
(79, 'GE', 'Georgia', 'Y'),
(80, 'DE', 'Germany', 'Y'),
(81, 'GH', 'Ghana', 'Y'),
(82, 'GI', 'Gibraltar', 'Y'),
(83, 'GK', 'Guernsey', 'Y'),
(84, 'GR', 'Greece', 'Y'),
(85, 'GL', 'Greenland', 'Y'),
(86, 'GD', 'Grenada', 'Y'),
(87, 'GP', 'Guadeloupe', 'Y'),
(88, 'GU', 'Guam', 'Y'),
(89, 'GT', 'Guatemala', 'Y'),
(90, 'GN', 'Guinea', 'Y'),
(91, 'GW', 'Guinea-Bissau', 'Y'),
(92, 'GY', 'Guyana', 'Y'),
(93, 'HT', 'Haiti', 'Y'),
(95, 'HN', 'Honduras', 'Y'),
(96, 'HK', 'Hong Kong', 'Y'),
(97, 'HU', 'Hungary', 'Y'),
(98, 'IS', 'Iceland', 'Y'),
(99, 'IN', 'India', 'Y'),
(100, 'IM', 'Isle of Man', 'Y'),
(101, 'ID', 'Indonesia', 'Y'),
(102, 'IR', 'Iran', 'Y'),
(103, 'IQ', 'Iraq', 'Y'),
(104, 'IE', 'Ireland', 'Y'),
(105, 'IL', 'Israel', 'Y'),
(106, 'IT', 'Italy', 'Y'),
(107, 'CI', 'Ivory Coast', 'Y'),
(108, 'JE', 'Jersey', 'Y'),
(109, 'JM', 'Jamaica', 'Y'),
(110, 'JP', 'Japan', 'Y'),
(111, 'JO', 'Jordan', 'Y'),
(112, 'KZ', 'Kazakhstan', 'Y'),
(113, 'KE', 'Kenya', 'Y'),
(114, 'KI', 'Kiribati', 'Y'),
(115, 'KP', 'Korea, Democratic People\'s Republic of', 'Y'),
(116, 'KR', 'Korea, Republic of', 'Y'),
(117, 'XK', 'Kosovo', 'Y'),
(118, 'KW', 'Kuwait', 'Y'),
(119, 'KG', 'Kyrgyzstan', 'Y'),
(120, 'LA', 'Lao People\'s Democratic Republic', 'Y'),
(121, 'LV', 'Latvia', 'Y'),
(122, 'LB', 'Lebanon', 'Y'),
(123, 'LS', 'Lesotho', 'Y'),
(124, 'LR', 'Liberia', 'Y'),
(125, 'LY', 'Libyan Arab Jamahiriya', 'Y'),
(126, 'LI', 'Liechtenstein', 'Y'),
(127, 'LT', 'Lithuania', 'Y'),
(128, 'LU', 'Luxembourg', 'Y'),
(129, 'MO', 'Macau', 'Y'),
(130, 'MK', 'Macedonia', 'Y'),
(131, 'MG', 'Madagascar', 'Y'),
(132, 'MW', 'Malawi', 'Y'),
(133, 'MY', 'Malaysia', 'Y'),
(134, 'MV', 'Maldives', 'Y'),
(135, 'ML', 'Mali', 'Y'),
(136, 'MT', 'Malta', 'Y'),
(138, 'MQ', 'Martinique', 'Y'),
(139, 'MR', 'Mauritania', 'Y'),
(140, 'MU', 'Mauritius', 'Y'),
(141, 'TY', 'Mayotte', 'Y'),
(142, 'MX', 'Mexico', 'Y'),
(143, 'FM', 'Micronesia, Federated States of', 'Y'),
(144, 'MD', 'Moldova, Republic of', 'Y'),
(145, 'MC', 'Monaco', 'Y'),
(146, 'MN', 'Mongolia', 'Y'),
(147, 'ME', 'Montenegro', 'Y'),
(148, 'MS', 'Montserrat', 'Y'),
(149, 'MA', 'Morocco', 'Y'),
(150, 'MZ', 'Mozambique', 'Y'),
(151, 'MM', 'Myanmar', 'Y'),
(152, 'NA', 'Namibia', 'Y'),
(153, 'NR', 'Nauru', 'Y'),
(154, 'NP', 'Nepal', 'Y'),
(155, 'NL', 'Netherlands', 'Y'),
(156, 'AN', 'Netherlands Antilles', 'Y'),
(157, 'NC', 'New Caledonia', 'Y'),
(158, 'NZ', 'New Zealand', 'Y'),
(159, 'NI', 'Nicaragua', 'Y'),
(160, 'NE', 'Niger', 'Y'),
(161, 'NG', 'Nigeria', 'Y'),
(162, 'NU', 'Niue', 'Y'),
(165, 'NO', 'Norway', 'Y'),
(166, 'OM', 'Oman', 'Y'),
(167, 'PK', 'Pakistan', 'Y'),
(168, 'PW', 'Palau', 'Y'),
(169, 'PS', 'Palestine', 'Y'),
(170, 'PA', 'Panama', 'Y'),
(171, 'PG', 'Papua New Guinea', 'Y'),
(172, 'PY', 'Paraguay', 'Y'),
(173, 'PE', 'Peru', 'Y'),
(174, 'PH', 'Philippines', 'Y'),
(175, 'PN', 'Pitcairn', 'Y'),
(176, 'PL', 'Poland', 'Y'),
(177, 'PT', 'Portugal', 'Y'),
(178, 'PR', 'Puerto Rico', 'Y'),
(179, 'QA', 'Qatar', 'Y'),
(180, 'RE', 'Reunion', 'Y'),
(181, 'RO', 'Romania', 'Y'),
(182, 'RU', 'Russian Federation', 'Y'),
(183, 'RW', 'Rwanda', 'Y'),
(184, 'KN', 'Saint Kitts and Nevis', 'Y'),
(185, 'LC', 'Saint Lucia', 'Y'),
(186, 'VC', 'Saint Vincent and the Grenadines', 'Y'),
(187, 'WS', 'Samoa', 'Y'),
(188, 'SM', 'San Marino', 'Y'),
(189, 'ST', 'Sao Tome and Principe', 'Y'),
(190, 'SA', 'Saudi Arabia', 'Y'),
(191, 'SN', 'Senegal', 'Y'),
(192, 'RS', 'Serbia', 'Y'),
(193, 'SC', 'Seychelles', 'Y'),
(194, 'SL', 'Sierra Leone', 'Y'),
(195, 'SG', 'Singapore', 'Y'),
(196, 'SK', 'Slovakia', 'Y'),
(197, 'SI', 'Slovenia', 'Y'),
(199, 'SO', 'Somalia', 'Y'),
(200, 'ZA', 'South Africa', 'Y'),
(202, 'ES', 'Spain', 'Y'),
(203, 'LK', 'Sri Lanka', 'Y'),
(204, 'SH', 'St. Helena', 'Y'),
(205, 'PM', 'St. Pierre and Miquelon', 'Y'),
(206, 'SD', 'Sudan', 'Y'),
(207, 'SR', 'Suriname', 'Y'),
(209, 'SZ', 'Swaziland', 'Y'),
(210, 'SE', 'Sweden', 'Y'),
(211, 'CH', 'Switzerland', 'Y'),
(212, 'SY', 'Syrian Arab Republic', 'Y'),
(213, 'TW', 'Taiwan', 'Y'),
(214, 'TJ', 'Tajikistan', 'Y'),
(215, 'TZ', 'Tanzania, United Republic of', 'Y'),
(216, 'TH', 'Thailand', 'Y'),
(217, 'TG', 'Togo', 'Y'),
(218, 'TK', 'Tokelau', 'Y'),
(219, 'TO', 'Tonga', 'Y'),
(220, 'TT', 'Trinidad and Tobago', 'Y'),
(221, 'TN', 'Tunisia', 'Y'),
(222, 'TR', 'Turkey', 'Y'),
(223, 'TM', 'Turkmenistan', 'Y'),
(225, 'TV', 'Tuvalu', 'Y'),
(226, 'UG', 'Uganda', 'Y'),
(227, 'UA', 'Ukraine', 'Y'),
(228, 'AE', 'United Arab Emirates', 'Y'),
(229, 'GB', 'United Kingdom', 'Y'),
(230, 'US', 'United States', 'Y'),
(232, 'UY', 'Uruguay', 'Y'),
(233, 'UZ', 'Uzbekistan', 'Y'),
(234, 'VU', 'Vanuatu', 'Y'),
(235, 'VA', 'Vatican City State', 'Y'),
(236, 'VE', 'Venezuela', 'Y'),
(237, 'VN', 'Vietnam', 'Y'),
(241, 'EH', 'Western Sahara', 'Y'),
(242, 'YE', 'Yemen', 'Y'),
(243, 'ZR', 'Zaire', 'Y'),
(244, 'ZM', 'Zambia', 'Y'),
(245, 'ZW', 'Zimbabwe', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `covid19tracker`
--

DROP TABLE IF EXISTS `covid19tracker`;
CREATE TABLE IF NOT EXISTS `covid19tracker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `up_date` date DEFAULT NULL,
  `new_infections` int(11) DEFAULT NULL,
  `new_deaths` int(11) DEFAULT NULL,
  `new_recovered` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=333 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `covid19tracker`
--

INSERT INTO `covid19tracker` (`id`, `userid`, `country`, `up_date`, `new_infections`, `new_deaths`, `new_recovered`) VALUES
(257, NULL, 'India', '2020-10-01', 86748, 1179, 78646),
(256, NULL, 'India', '2020-09-30', 86748, 1179, 85373),
(255, NULL, 'India', '2020-09-29', 80500, 1178, 86061),
(254, NULL, 'India', '2020-09-28', 82767, 1040, 85206),
(253, NULL, 'India', '2020-09-27', 89010, 1124, 74726),
(252, NULL, 'India', '2020-09-26', 88942, 1123, 92473),
(251, NULL, 'India', '2020-09-25', 85919, 1144, 93177),
(250, NULL, 'India', '2020-09-24', 89688, 1152, 81141),
(249, NULL, 'India', '2020-09-23', 89688, 1152, 90030),
(248, NULL, 'India', '2020-09-22', 80391, 1056, 0),
(332, 1, 'India', '2020-05-13', 3763, 136, 1980),
(331, 1, 'India', '2020-05-12', 3607, 121, 1871),
(330, 1, 'India', '2020-05-11', 4353, 111, 1580),
(329, 1, 'India', '2020-05-10', 4353, 111, 1611),
(328, 1, 'India', '2020-05-09', 1331, 13, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
