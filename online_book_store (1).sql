-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 09:06 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `online book store`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `Book_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Book_Name` varchar(100) NOT NULL,
  `Book_Image` text NOT NULL,
  `Author_Name` varchar(100) NOT NULL,
  `Book_Rate` char(100) NOT NULL,
  `Format` varchar(100) NOT NULL,
  `Language` varchar(100) NOT NULL,
  `Released` date NOT NULL,
  `Pages` char(100) NOT NULL,
  `Cathegory` varchar(100) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  `Available_Books` char(200) NOT NULL,
  PRIMARY KEY (`Book_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`Book_Id`, `Book_Name`, `Book_Image`, `Author_Name`, `Book_Rate`, `Format`, `Language`, `Released`, `Pages`, `Cathegory`, `Description`, `Available_Books`) VALUES
(31, 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', 'J.K Rowling', '560', 'Paper', 'English', '2000-10-12', '345', '2', 'This book had been adapted into a film (two-part) like all other Harry Potter books.\nIt was judged as the ‘Best Book for Young Adults’ by the American Library Association, and also won the 2008 Colorado Spruce Award.\nIt is the fastest-selling book in history and it broke the record of the previous book in the series, Harry Potter and the Half-Blood Prince.', '10'),
(32, 'Wings of Fire', 'uploads/516wObHOvbL._SL218_PIsitb-sticker-arrow-dp,TopRight,12,-18_SH30_OU31_AC_US218_.jpg', 'A B J . Abdul Kalam', '350', 'Paper', 'Tamil', '2013-12-16', '240', '3', 'Wings of Fire is an autobiography of APJ Abdul Kalam written jointly by Arun Tiwari and Abdul\nKalam. It was published in 1999 and it covers Kalam''s life before he became the President of India.\nThe book covers his early life and his work in Indian space research and missile programs. It is the\nstory of a boy from a humble background who went on to become a great scientist in the field of\nspace research and missile programs and later became the President of India.', '7'),
(33, 'Adolf Hitler', 'uploads/Hitler.jpg', 'V.K Giri', '564', 'Paper', 'English', '2015-08-15', '300', '5', 'Hitler began Mein Kampf while imprisoned for what he considered to be ', '10'),
(34, 'The Davinci Code', 'uploads/davinci_code.jpg', 'Sunthar', '450', 'Paper', 'English', '2013-09-14', '385', '2', 'The Da Vinci Code is a 2003 mystery-detective novel by Dan Brown. It follows symbologist Robert Langdon and cryptologist Sophie Neveu after a murder in the Louvre Museum in Paris causes them to become involved in a battle between the Priory of Sion and Opus Dei over the possibility of Jesus Christ having been a companion to Mary Magdalene. The title of the novel refers to the finding of the first murder victim in the Grand Gallery of the Louvre, naked and posed similar to Leonardo da Vinci''s famous drawing, the Vitruvian Man, with a cryptic message written beside his body and a pentagram drawn on his chest in his own blood.', '6'),
(61, 'Attitude Is Everything', 'uploads/710jnzKlDTL.jpg', 'Jeef Killer', '560', 'Paper', 'English', '2017-12-09', '400', '1', 'Do you dread going to work? Do you feel tired, unhappy, weighed down? Have you given up on your dreams?', '10'),
(62, 'Mind Reader', 'uploads/81pROazhQFL.jpg', 'Darwin', '460', 'Paper', 'English', '2017-12-06', '300', '4', 'Unlocking the Power of Your Mind ', '15'),
(63, 'I Do What I Do', 'uploads/51ovu3Vvf4L._SX333_BO1,204,203,200_.jpg', 'Rajan', '300', 'Paper', 'English', '2017-12-06', '290', '5', 'When Raghuram G. Rajan took charge as Governor of the Reserve Bank of India in September 2013, the rupee was in free fall, inflation was high,', '15'),
(64, 'Immortal India', 'uploads/51E3JS7TLEL._SX323_BO1,204,203,200_.jpg', 'Drumph', '600', 'Paper', 'English', '2017-02-08', '300', '2', 'This has made him a powerhouse of knowledge on all things Indian, the fastest selling book series in Indian history, he is also an avid student of Indian history and culture.. He is also renowned for stirring speeches across literary festivals and corporate gatherings that offer insights from our culture which are timeless and relevant to present-day India.', '15'),
(65, 'Three Thousand Stitches', 'uploads/51XkLUjkpuL._SX324_BO1,204,203,200_.jpg', 'Murthy', '280', 'Paper', 'English', '2017-12-28', '400', '1', 'So often, it''s the simplest acts of courage that touch the lives of others. Sudha Murty-through the exceptional work of the Infosys Foundation as well as through', '30'),
(66, 'Behind the Scenes', 'uploads/51YDwQTMsWL.jpg', 'Vikram Rana', '450', 'Paper', 'English', '2017-03-09', '300', '4', 'Fading superstar of the Bengali film industry Ryan Gomez is poisoned to death while shooting for a film in the pretty hill town of Darjeeling. Sheila Dhar, the film’s beautiful female lead with whom Ryan had recently broken his engagement is the chief suspect.', '12');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `Cart_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Cust_Id` int(200) NOT NULL,
  `Book_Id` int(200) NOT NULL,
  `Cust_Name` varchar(200) NOT NULL,
  `Book_Name` varchar(200) NOT NULL,
  `Book_Image` text NOT NULL,
  `Book_Price` varchar(200) NOT NULL,
  `Quantity` varchar(200) NOT NULL,
  PRIMARY KEY (`Cart_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_Id`, `Cust_Id`, `Book_Id`, `Cust_Name`, `Book_Name`, `Book_Image`, `Book_Price`, `Quantity`) VALUES
(12, 0, 0, 'Ajosh', 'Adolf Hitler', 'uploads/Hitler.jpg', '564', ''),
(13, 0, 0, 'Ajosh', 'Mind Reader', 'uploads/81pROazhQFL.jpg', '460', ''),
(14, 0, 0, 'Ajosh', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(15, 0, 0, 'Ajosh', 'Mind Reader', 'uploads/81pROazhQFL.jpg', '460', ''),
(16, 0, 0, 'Ajosh', 'Attitude Is Everything', 'uploads/710jnzKlDTL.jpg', '560', ''),
(17, 0, 0, 'Ajosh', '', '', '', ''),
(25, 0, 0, '', 'Adolf Hitler', 'uploads/Hitler.jpg', '564', ''),
(38, 0, 0, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(39, 0, 0, '', 'Wings of Fire', 'uploads/516wObHOvbL._SL218_PIsitb-sticker-arrow-dp,TopRight,12,-18_SH30_OU31_AC_US218_.jpg', '350', ''),
(53, 0, 0, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(55, 2, 0, 'Abish', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', '7'),
(58, 2, 0, 'Abish', 'Mind Reader', 'uploads/81pROazhQFL.jpg', '460', '2'),
(59, 2, 0, 'Abish', 'Attitude Is Everything', 'uploads/710jnzKlDTL.jpg', '560', ''),
(79, 9, 31, 'Ajosh', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', '5'),
(80, 9, 61, 'Ajosh', 'Attitude Is Everything', 'uploads/710jnzKlDTL.jpg', '560', '1'),
(81, 9, 65, 'Ajosh', 'Three Thousand Stitches', 'uploads/51XkLUjkpuL._SX324_BO1,204,203,200_.jpg', '280', '3'),
(82, 9, 32, 'Ajosh', 'Wings of Fire', 'uploads/516wObHOvbL._SL218_PIsitb-sticker-arrow-dp,TopRight,12,-18_SH30_OU31_AC_US218_.jpg', '350', '4'),
(83, 9, 31, 'Ajosh', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', '5'),
(88, 0, 61, '', 'Attitude Is Everything', 'uploads/710jnzKlDTL.jpg', '560', ''),
(89, 0, 31, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(90, 0, 31, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(91, 0, 31, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(92, 0, 31, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(93, 0, 31, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(95, 0, 31, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', ''),
(96, 0, 33, '', 'Adolf Hitler', 'uploads/Hitler.jpg', '564', ''),
(97, 0, 33, '', 'Adolf Hitler', 'uploads/Hitler.jpg', '564', ''),
(98, 0, 31, '', 'Harry Potter and Deathly Hallows', 'uploads/harry_potter_deathly_hallows.jpg', '560', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cateogry_Id` int(11) NOT NULL AUTO_INCREMENT,
  `category_Name` varchar(100) NOT NULL,
  PRIMARY KEY (`cateogry_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cateogry_Id`, `category_Name`) VALUES
(1, 'Sports'),
(2, 'Arts'),
(3, 'Science'),
(4, 'Computer'),
(5, 'Politics');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `cont_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL,
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `name`, `phone`, `email`, `subject`, `message`) VALUES
(1, 'kljn', '5656', 'hjhg@g', 'hg', 'jhjgg6'),
(2, 'kljn', '5656', 'hjhg@g', 'hg', 'jhjgg6'),
(3, 'dffd', '234', 'ajoshdl13@gmail.com', 'cdcdc', 'sdsdf'),
(4, 'hgff', '87675', 'ggf@dsd', 'hgyy', 'ytttf'),
(5, ' x  ', '6565', 'f@Ggg', 'jjhug', 'hbdhbdh'),
(6, ' x  ', '6565', 'f@Ggg', 'jjhug', 'hbdhbdh');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `Cust_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Confirm_Password` varchar(100) NOT NULL,
  `Contact_Num` char(100) NOT NULL,
  PRIMARY KEY (`Cust_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cust_Id`, `Name`, `Email`, `Password`, `Confirm_Password`, `Contact_Num`) VALUES
(2, 'Abish', 'abish@gmail.com', 'abish123', 'abish', '7889906578'),
(6, 'Abish', 'abish@email.com', 'hello', 'hello', '89765423100'),
(9, 'Ajosh', 'ajoshdl13@gmail.com', 'haii', 'haii', '236158'),
(14, 'Abish', 'abish@gmail.com', '123', '123', '677334355');

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `Delivery_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Pincode` char(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Landmark` varchar(100) NOT NULL,
  `Payment` varchar(200) NOT NULL,
  PRIMARY KEY (`Delivery_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=201 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`Delivery_Id`, `Name`, `Email`, `Address`, `Pincode`, `City`, `State`, `Country`, `Landmark`, `Payment`) VALUES
(8, '', '', '	  gbfgbgfb', 'cgbfgbgfb', 'gfbfbb', 'Andra Pradesh', 'Australia', 'gbfgbgfb', '0'),
(9, '', '', '              Naduthali vilai,malayadi', '629153', 'kaliyakavilai', 'TamilNadu', 'India', 'malayadi junction', '0'),
(10, '', '', '	  ', '', '', 'Andra Pradesh', 'Australia', '', '0'),
(11, '', '', 'fffff', '456', 'fgh', 'Andra Pradesh', 'Australia', 'fgggg', '0'),
(12, '', '', '	  aaaa', '456', 'fgfg', 'Andra Pradesh', 'Australia', 'gfggr', '0'),
(13, '', '', '	  csacd', '5674', 'hhcc', 'Andra Pradesh', 'Australia', 'dbchcgc', '0'),
(14, '', '', '	  dd', '45465', 'vsvf', 'Andra Pradesh', 'Australia', 'vfdth', '0'),
(15, '', '', '	  xxcc', '677', 'ff', 'Gujarath', 'India', 'gb', '0'),
(16, '', '', '	fff  ', '566', 'ffff', 'Andra Pradesh', 'Australia', 'eeee', 'on'),
(17, '', '', '	  vyfgfybv', '75757', 'cjvvf', 'Andra Pradesh', 'Australia', 'marthandam', 'COD'),
(18, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(19, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(20, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(21, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(22, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(23, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(24, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(25, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(26, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(27, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(28, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(29, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(30, '', '', '	  vdfdv', '54365874', 'j nxcjc', 'Andra Pradesh', 'Australia', 'hccc', 'COD'),
(31, '', '', '	  hgvg', '56', 'hhb', 'Andra Pradesh', 'Australia', 'ygff', 'COD'),
(32, '', '', '	  hgvg', '56', 'hhb', 'Andra Pradesh', 'Australia', 'ygff', 'COD'),
(33, '', '', '	  hgvg', '56', 'hhb', 'Andra Pradesh', 'Australia', 'ygff', 'COD'),
(34, '', '', '	  hgvg', '56', 'hhb', 'Andra Pradesh', 'Australia', 'ygff', 'COD'),
(35, '', '', '	  ccj', '4545', 'ggjfnfj', 'Andra Pradesh', 'Australia', 'gfgff', 'COD'),
(36, '', '', '	  ccj', '4545', 'ggjfnfj', 'Andra Pradesh', 'Australia', 'gfgff', 'COD'),
(37, '', '', '	  ccj', '4545', 'ggjfnfj', 'Andra Pradesh', 'Australia', 'gfgff', 'COD'),
(38, '', '', '	  fede', '5454', 'dm', 'Andra Pradesh', 'Australia', 'vfmvff', 'COD'),
(39, '', '', '	  dd', '44', '  cc', 'Andra Pradesh', 'Australia', 'vfvfvfv', 'COD'),
(40, '', '', '	  dd', '44', '  cc', 'Andra Pradesh', 'Australia', 'vfvfvfv', 'COD'),
(41, '', '', '	egtg  ', '54', 'fgfff', 'Andra Pradesh', 'Australia', 'vfv', 'COD'),
(42, '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '', '', '', ''),
(47, '', '', '', '', '', '', '', '', ''),
(48, '', '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '', '', '', ''),
(51, '', '', '', '', '', '', '', '', ''),
(52, '', '', '', '', '', '', '', '', ''),
(53, '', '', '', '', '', '', '', '', ''),
(54, '', '', '', '', '', '', '', '', ''),
(55, '', '', '', '', '', '', '', '', ''),
(56, '', '', '', '', '', '', '', '', ''),
(57, '', '', '', '', '', '', '', '', ''),
(58, '', '', '', '', '', '', '', '', ''),
(59, '', '', '', '', '', '', '', '', ''),
(60, '', '', '', '', '', '', '', '', ''),
(61, '', '', '', '', '', '', '', '', ''),
(62, '', '', '', '', '', '', '', '', ''),
(63, '', '', '', '', '', '', '', '', ''),
(64, '', '', '', '', '', '', '', '', ''),
(65, '', '', '', '', '', '', '', '', ''),
(66, '', '', '', '', '', '', '', '', ''),
(67, '', '', '', '', '', '', '', '', ''),
(68, '', '', '', '', '', '', '', '', ''),
(69, '', '', '', '', '', '', '', '', ''),
(70, '', '', '', '', '', '', '', '', ''),
(71, '', '', '', '', '', '', '', '', ''),
(72, '', '', '	  cvvv', '4', 'sfgfgss', 'Andra Pradesh', 'Australia', 'gfgf', 'COD'),
(73, '', '', '	  cvvv', '4', 'sfgfgss', 'Andra Pradesh', 'Australia', 'gfgf', 'COD'),
(74, '', '', '	  cvvv', '4', 'sfgfgss', 'Andra Pradesh', 'Australia', 'gfgf', 'COD'),
(75, '', '', '	xfd566565  ', '656', 'ghg', 'Andra Pradesh', 'Australia', 'hhgg', 'COD'),
(76, '', '', '', '', '', '', '', '', ''),
(77, '', '', '	xfd566565  ', '656', 'ghg', 'Andra Pradesh', 'Australia', 'hhgg', 'COD'),
(78, '', '', '	  EREE', '455', 'gfgf', 'Andra Pradesh', 'Australia', 'gfg', 'COD'),
(79, '', '', '', '', '', '', '', '', ''),
(80, '', '', '', '', '', '', '', '', ''),
(81, '', '', '', '', '', '', '', '', ''),
(82, '', '', '', '', '', '', '', '', ''),
(83, '', '', '', '', '', '', '', '', ''),
(84, '', '', '', '', '', '', '', '', ''),
(85, '', '', '', '', '', '', '', '', ''),
(86, '', '', '', '', '', '', '', '', ''),
(87, '', '', '', '', '', '', '', '', ''),
(88, '', '', '', '', '', '', '', '', ''),
(89, '', '', 'ddc', '54', 'fggfd', 'Andra Pradesh', 'Australia', 'fggggg', 'COD'),
(90, '', '', 'ddc', '54', 'fggfd', 'Andra Pradesh', 'Australia', 'fggggg', 'COD'),
(91, '', '', '', '', '', '', '', '', ''),
(92, '', '', '', '', '', '', '', '', ''),
(93, '', '', '	tftff  ', '56', 'ugygt', 'Andra Pradesh', 'Australia', 'yttttttt', 'COD'),
(94, '', '', 'tftff  d', '56', 'ugygt', 'Andra Pradesh', 'Australia', 'yttttttt', 'COD'),
(95, '', '', 'tftff  d', '56', 'ugygt', 'Andra Pradesh', 'Australia', 'yttttttt', 'COD'),
(96, '', '', 'tftff  d', '56', 'ugygt', 'Andra Pradesh', 'Australia', 'yttttttt', 'COD'),
(97, '', '', 'tftff  d', '56', 'ugygt', 'Andra Pradesh', 'Australia', 'yttttttt', 'COD'),
(98, '', '', '	  sdsds', '5454', 'fgfgfg', 'Andra Pradesh', 'Australia', 'rtrtr', 'COD'),
(99, '', '', 'sdsd	  ', '545', 'gfgff', 'Karnadaka', 'USA', 'ggfg', 'COD'),
(100, '', '', 'xcd	  ', '555', 'gg', 'Andra Pradesh', 'Australia', 'xccd', 'COD'),
(101, '', '', 'dsdsd	  ', '45454', 'fgdfgf', 'Andra Pradesh', 'Australia', 'fvffg', 'COD'),
(102, '', '', 'dsdsd	  ', '45454', 'fgdfgf', 'Andra Pradesh', 'Australia', 'fvffg', 'COD'),
(103, '', '', '	fefee  ', '4454', 'fdfdd', 'Andra Pradesh', 'Australia', 'fdfd', 'COD'),
(104, '', '', 'fdff	  ', '545', 'fdff', 'Andra Pradesh', 'Australia', 'dff', 'COD'),
(105, '', '', 'fdff	  ', '545', 'fdff', 'Andra Pradesh', 'Australia', 'dff', 'COD'),
(106, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(107, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(108, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(109, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(110, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(111, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(112, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(113, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(114, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(115, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(116, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(117, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(118, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(119, '', '', '	  ddgdg', '6565', 'rtr', 'Andra Pradesh', 'Australia', 'trt', 'COD'),
(120, '', '', '', '', '', '', '', '', ''),
(121, '', '', 'cchbsdbhbd	  ', '65656', ' xbchgd', 'Andra Pradesh', 'Australia', 'chhdgdy', 'COD'),
(122, '', '', 'cchbsdbhbd	  ', '65656', ' xbchgd', 'Andra Pradesh', 'Australia', 'chhdgdy', 'COD'),
(123, '', '', 'cchbsdbhbd	  ', '65656', ' xbchgd', 'Andra Pradesh', 'Australia', 'chhdgdy', 'COD'),
(124, '', '', 'cchbsdbhbd	  ', '65656', ' xbchgd', 'Andra Pradesh', 'Australia', 'chhdgdy', 'COD'),
(125, '', '', 'fdfd	  ', '6656', 'fdfdfd', 'Andra Pradesh', 'Australia', 'vdfrr', 'COD'),
(126, '', '', 'fdfd	  ', '6656', 'fdfdfd', 'Andra Pradesh', 'Australia', 'vdfrr', 'COD'),
(127, '', '', 'fdfd	  ', '6656', 'fdfdfd', 'Andra Pradesh', 'Australia', 'vdfrr', 'COD'),
(128, '', '', 'fdfd	  ', '6656', 'fdfdfd', 'Andra Pradesh', 'Australia', 'vdfrr', 'COD'),
(129, '', '', '	xcdd  ', '444', 'gggf', 'Andra Pradesh', 'Australia', 'gffg', 'COD'),
(130, '', '', 'dfdfxv	  ', '6565', 'dgdgdgd', 'Andra Pradesh', 'Australia', 'fdfd', 'COD'),
(131, '', '', 'dfdfd	  ', '6565', 'gfgfgf', 'Andra Pradesh', 'Australia', 'gff', 'COD'),
(132, '', '', '	ffg  ', '6556', 'fgfg', 'Andra Pradesh', 'Australia', 'dfgh', 'COD'),
(133, '', '', 'vfgf	  ', '656', 'fgfgf', 'Andra Pradesh', 'Australia', 'dfdgfgf', 'COD'),
(134, 'Ajosh', 'ajoshdl13@gmail.com', 'Naduthali vilai,malayadi	  ', '629153', 'kaliyakavilai', 'TamilNadu', 'India', 'marthandam', 'COD'),
(135, 'Ajosh', 'ajoshdl13@gmail.com', 'Naduthali vilai,malayadi	  ', '629153', 'kaliyakavilai', 'TamilNadu', 'India', 'marthandam', 'COD'),
(136, 'Abish', 'abish@gmail.com', '	  cgdcdc', '656464', 'hhdgdy', 'Andra Pradesh', 'Australia', 'zcgsdygtgf', 'COD'),
(137, 'Ajosh', 'ajoshdl13@gmail.com', '	fffff  ', '66677', 'gghgghhhg', 'Andra Pradesh', 'Australia', 'hghffd', 'COD'),
(138, 'Ajosh', 'ajoshdl13@gmail.com', 'gdrfc	  ', '5656', 'bgg', 'Andra Pradesh', 'Australia', 'hjhjgfyt', 'COD'),
(139, 'Ajosh', 'ajoshdl13@gmail.com', 'dfddf	  ', '565', 'gfgg', 'Andra Pradesh', 'Australia', 'fgtt', 'COD'),
(140, 'cvdv@gxf', 'gvsgds@gcvgvcd', 'jvjffn	  ', '57674', 'hdufd', 'Andra Pradesh', 'Australia', 'bdhbd', 'COD'),
(141, 'jefe', 'jdbh@xc', '	  fjfhuhf', '57567', 'xcnc', 'Andra Pradesh', 'Australia', 'mcdjcd', 'COD'),
(142, 'Ajosh', 'ajoshdl13@gmail.com', 'eefewfrf	  ', '54656', 'fdff', 'Andra Pradesh', 'Australia', 'sdfffr', 'COD'),
(143, 'Ajosh', 'ajoshdl13@gmail.com', 'eefewfrf	  ', '54656', 'fdff', 'Andra Pradesh', 'Australia', 'sdfffr', 'COD'),
(144, 'Ajosh', 'ajoshdl13@gmail.com', '	  dfdfdf', '574', 'jdhdb', 'Andra Pradesh', 'Australia', 'jfhfhf', 'COD'),
(145, 'Ajosh', 'ajoshdl13@gmail.com', '	  dfdfdf', '574', 'jdhdb', 'Andra Pradesh', 'Australia', 'jfhfhf', 'COD'),
(146, 'Ajosh', 'ajoshdl13@gmail.com', '	  dfdfdf', '574', 'jdhdb', 'Andra Pradesh', 'Australia', 'jfhfhf', 'COD'),
(147, 'Ajosh', 'ajoshdl13@gmail.com', '	  dfdfdf', '574', 'jdhdb', 'Andra Pradesh', 'Australia', 'jfhfhf', 'COD'),
(148, 'Ajosh', 'ajoshdl13@gmail.com', '	  dfdfdf', '574', 'jdhdb', 'Andra Pradesh', 'Australia', 'jfhfhf', 'COD'),
(149, 'Ajosh', 'ajoshdl13@gmail.com', '	  dfdfdf', '574', 'jdhdb', 'Andra Pradesh', 'Australia', 'jfhfhf', 'COD'),
(150, 'Ajosh', 'ajoshdl13@gmail.com', 'chcdc	  ', '74674', 'jjhdbh', 'Andra Pradesh', 'Australia', 'jfvhfb', 'COD'),
(151, 'Ajosh', 'ajoshdl13@gmail.com', 'chcdc	  ', '74674', 'jjhdbh', 'Andra Pradesh', 'Australia', 'jfvhfb', 'COD'),
(152, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(153, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(154, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(155, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(156, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(157, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(158, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(159, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(160, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(161, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(162, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(163, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(164, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(165, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(166, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(167, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(168, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(169, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(170, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(171, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(172, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(173, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(174, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(175, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(176, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(177, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(178, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(179, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(180, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(181, 'Ajosh', 'ajoshdl13@gmail.com', 'ffef	  ', '5454', 'trtr', 'Andra Pradesh', 'Australia', 'gtgtg', 'COD'),
(182, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(183, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(184, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(185, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(186, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(187, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(188, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(189, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(190, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(191, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(192, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(193, 'Ajosh', 'ajoshdl13@gmail.com', 'wdwd	  ', '54554', ' cve', 'Andra Pradesh', 'Australia', 'ertrt', 'COD'),
(194, 'Ajosh', 'ajoshdl13@gmail.com', 'dff', '44545', 'gfgg', 'Andra Pradesh', 'Australia', 'fgg', 'COD'),
(195, 'Ajosh', 'ajoshdl13@gmail.com', '	dfdf  ', '789', 'vbfbfb', 'Andra Pradesh', 'Australia', 'bbff', 'COD'),
(196, 'Ajosh', 'ajoshdl13@gmail.com', 'fefef	  ', '65', 'fgfg', 'Andra Pradesh', 'Australia', 'fff', 'COD'),
(197, 'Ajosh', 'ajoshdl13@gmail.com', 'fefef	  ', '65', 'fgfg', 'Andra Pradesh', 'Australia', 'fff', 'COD'),
(198, 'Ajosh', 'ajoshdl13@gmail.com', 'fefef	  ', '65', 'fgfg', 'Andra Pradesh', 'Australia', 'fff', 'COD'),
(199, 'Ajosh', 'ajoshdl13@gmail.com', 'duhd	  ', '567', 'hcb', 'Andra Pradesh', 'Australia', 'cdhdcd', 'COD'),
(200, 'Ajosh', 'ajoshdl13@gmail.com', 'duhd	  ', '567', 'hcb', 'Andra Pradesh', 'Australia', 'cdhdcd', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Customer_Id` int(11) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `feedback_Rate` varchar(10) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Customer_Id`, `Email`, `feedback_Rate`, `Comment`) VALUES
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, '', '', ''),
(0, 'dsfdsf@gmail.com', '5', 'yhththr5t	  '),
(0, 'ajoshdl13@gmail.com', '5', 'Your service is Good....	  '),
(0, 'ai@gmil.com', '4', 'good	  '),
(0, 'ajoshdl13@gmail.com', '4', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `Order_Id` int(11) NOT NULL AUTO_INCREMENT,
  `Book_Id` int(11) NOT NULL,
  `Quntity` char(100) NOT NULL,
  `Total_Amount` char(100) NOT NULL,
  PRIMARY KEY (`Order_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE IF NOT EXISTS `purchase_details` (
  `Cust_Id` int(10) NOT NULL,
  `Purchase_Num` int(11) NOT NULL AUTO_INCREMENT,
  `Purchase_Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Payment` varchar(100) NOT NULL,
  `Tax` varchar(100) NOT NULL,
  `Delivery_Charge` varchar(100) NOT NULL,
  `Total_Amount` char(100) NOT NULL,
  PRIMARY KEY (`Purchase_Num`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`Cust_Id`, `Purchase_Num`, `Purchase_Date`, `Payment`, `Tax`, `Delivery_Charge`, `Total_Amount`) VALUES
(0, 1, '0000-00-00 00:00:00', 'C O D', '100', '150', '250'),
(0, 2, '0000-00-00 00:00:00', 'C O D', '100', '150', '250'),
(0, 3, '2017-08-18 19:51:20', 'C O D', '100', '150', '350'),
(0, 4, '2017-08-19 10:40:40', 'C O D', '565', '56', '67');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `User_Id` int(11) NOT NULL AUTO_INCREMENT,
  `User_Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` varchar(100) NOT NULL,
  `Phone_Number` varchar(100) NOT NULL,
  PRIMARY KEY (`User_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `User_Name`, `Email`, `Password`, `Role`, `Phone_Number`) VALUES
(6, 'Ajosh', 'ajoshdl13@gmail.com', 'ajoshajo', 'Admin', '9976044313'),
(10, 'Arun', 'arun@gmail.com', 'arunar', 'Non Admin', '8976688901'),
(11, 'Aqustin', 'aqustin@gmail.com', 'auqastin', 'Non Admin', '7854673490'),
(12, 'juyj', 'jkikik@gmail.com', 'kj', 'Admin', '676576575'),
(13, '', '', '', '', ''),
(14, '', '', '', '', ''),
(15, '', '', '', '', ''),
(16, '', '', '', '', ''),
(17, '', '', '', '', ''),
(18, 'Ajo', 'ajoshdl13@gmail.com', 'haiii', 'Non Admin', '9979044313'),
(19, 'Ajosh', 'ajoshdl13@gmail.com', 'haii', 'Admin', '9976044313'),
(20, 'Ajosh', 'ajoshdl13@gmail.com', 'haiiii', 'Admin', '9976044313'),
(21, 'Ajosh', 'ajoshdl13@gmail.com', '12345', 'Admin', '9976044313'),
(22, 'Ajosh', 'ajoshdl13@gmail.com', '1234', 'Admin', '9976044313'),
(23, 'Ajosh', 'ajoshdl13@gmail.com', '123', 'Admin', '9976044313'),
(24, 'ggg', '3@gmail.com', 'ajoshajo', 'Admin', '788'),
(25, '', '', '', '', ''),
(26, 'ggg', '3@gmail.com', 'ee', 'Admin', '788'),
(27, 'Ajosh', 'ajoshdl13@gmail.com', 'ajoshajo', 'Admin', '54454');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
