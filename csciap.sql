-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2013 at 03:45 AM
-- Server version: 5.6.11-log
-- PHP Version: 5.4.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `csciap`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `assID` int(11) NOT NULL AUTO_INCREMENT,
  `assTitle` varchar(80) DEFAULT NULL,
  `assText` varchar(255) DEFAULT NULL,
  `assDate` date DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  PRIMARY KEY (`assID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`assID`, `assTitle`, `assText`, `assDate`, `userID`) VALUES
(15, 'baaba', 'uashuashuashuashuashuashas', '2013-09-04', 1);

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

CREATE TABLE IF NOT EXISTS `calendar` (
  `day` date DEFAULT NULL,
  `event` text,
  `userID` int(11) DEFAULT NULL,
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comID` int(11) NOT NULL AUTO_INCREMENT,
  `comText` varchar(255) DEFAULT NULL,
  `comDate` date DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  PRIMARY KEY (`comID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `eventID` int(11) NOT NULL AUTO_INCREMENT,
  `eventTitle` text,
  `eventDescription` text,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventID`, `eventTitle`, `eventDescription`) VALUES
(1, 'Self Improvement Talk', 'Lets get wild and free the animal inside us'),
(2, 'Business Fair!', 'Free snacks!');

-- --------------------------------------------------------

--
-- Table structure for table `goals`
--

CREATE TABLE IF NOT EXISTS `goals` (
  `goalID` int(11) NOT NULL AUTO_INCREMENT,
  `goalTitle` varchar(80) DEFAULT NULL,
  `goalDescription` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`goalID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `goals`
--

INSERT INTO `goals` (`goalID`, `goalTitle`, `goalDescription`) VALUES
(1, 'Business Networking Goal', 'With this goal you aim to achieve business friends. The tasks start easy, introducing you to “meeting environments” and slowly taking you to create new career buddies.'),
(2, 'Newcomer Goal', 'Hey foreigners! Because you are unfamiliar with a certain culture and society, we guide you to fit in this new environment.'),
(3, 'Get Socializing', 'With this goal you will learn how to behave in events so you can be mister popular!'),
(4, 'Study', 'This goal will help you focus on your studies.');

-- --------------------------------------------------------

--
-- Table structure for table `mentorship`
--

CREATE TABLE IF NOT EXISTS `mentorship` (
  `progID` int(11) NOT NULL AUTO_INCREMENT,
  `menteeID` int(11) DEFAULT NULL,
  `mentorID` int(11) DEFAULT NULL,
  `progBegin` date DEFAULT NULL,
  `progEnd` date DEFAULT NULL,
  PRIMARY KEY (`progID`),
  KEY `menteeID` (`menteeID`),
  KEY `mentorID` (`mentorID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mentorship`
--

INSERT INTO `mentorship` (`progID`, `menteeID`, `mentorID`, `progBegin`, `progEnd`) VALUES
(1, 1, 2, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE IF NOT EXISTS `program` (
  `userID` int(11) DEFAULT NULL,
  `taskID` int(11) DEFAULT NULL,
  `taskBegin` date DEFAULT NULL,
  `taskEnd` date DEFAULT NULL,
  `taskCheck` tinyint(1) DEFAULT NULL,
  KEY `userID` (`userID`),
  KEY `taskID` (`taskID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`userID`, `taskID`, `taskBegin`, `taskEnd`, `taskCheck`) VALUES
(1, 4, '2013-08-23', '2013-08-20', 1),
(1, 5, '2013-08-25', '2013-08-15', 0),
(1, 18, '2013-07-24', '2013-08-31', 1),
(1, 19, '2013-08-15', '2013-08-22', 1),
(1, 20, '2013-08-22', '2013-08-31', 0),
(1, 21, '2013-08-22', '2013-08-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `taskID` int(11) NOT NULL AUTO_INCREMENT,
  `taskTitle` varchar(80) DEFAULT NULL,
  `taskDescription` varchar(255) DEFAULT NULL,
  `goalID` int(11) DEFAULT NULL,
  PRIMARY KEY (`taskID`),
  KEY `goalID` (`goalID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`taskID`, `taskTitle`, `taskDescription`, `goalID`) VALUES
(4, 'Meeting people', 'Go to one social event with a friend. Try to get business cards.', 1),
(5, 'Attach Strings', 'Now that you know your way to meet new interesting and engaged people, you need now to improve your relationship with them. Send some more emails introducing yourself and ask if they remember you. Come up with a good reason to talk to them. Ask your mento', 1),
(6, 'Go shopping around the city', 'Talk to the people behind the counter about the weather, try to be sociable and easy going.', 2),
(18, 'Talk to people', 'If you see someone reading a book you like, ask about it.The person might not like it, but he might enjoy talking about the book!', 1),
(19, 'Walk around', 'Go to an open library, get a coffee and a book. Try this to relax and leave the house.', 2),
(20, 'Eat out', 'Big cities have lots of restaurants. Try to find something you like and make it your favorite!', 3),
(21, 'Meet ups', 'Go to meet ups and find some nice events to go ', 3);

-- --------------------------------------------------------

--
-- Table structure for table `userexpertise`
--

CREATE TABLE IF NOT EXISTS `userexpertise` (
  `userID` int(11) DEFAULT NULL,
  `expertise` text,
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userexpertise`
--

INSERT INTO `userexpertise` (`userID`, `expertise`) VALUES
(2, 'accountFinance'),
(2, 'Arts & History'),
(2, 'Engineering'),
(2, 'Arts & History'),
(2, 'Engineering'),
(2, ''),
(2, ''),
(2, ''),
(2, ''),
(2, ''),
(2, 'Architecture'),
(2, 'Language'),
(2, 'Mathematics'),
(2, 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `usarName` varchar(80) DEFAULT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userBday` date DEFAULT NULL,
  `userPhone` int(11) DEFAULT NULL,
  `userLocation` varchar(255) DEFAULT NULL,
  `userCareer` varchar(255) DEFAULT NULL,
  `userComment` text NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `usarName`, `userEmail`, `userBday`, `userPhone`, `userLocation`, `userCareer`, `userComment`) VALUES
(1, 'Catarina Smidth', 'csmidthp@gmail.com', '0000-00-00', 2147483647, 'Toronto-CA', 'Student', 'I am an exchange student in UofT, and I L-O-V-E travelling. '),
(2, 'Bianca Sayan', 'biasayan@gmail.com', '0000-00-00', 2147483647, 'Toronto-CA', 'Programmer', 'Expert in technology and environmental friendly.'),
(23, 'Gustavo Lima', 'gustavodemais@hotmail.com', '1992-08-28', 45678392, 'Ponta Grossa ', 'Programmer', 'I like country music and a I have been working at UofT in motion recording lab.');

-- --------------------------------------------------------

--
-- Table structure for table `userskills`
--

CREATE TABLE IF NOT EXISTS `userskills` (
  `userID` int(11) DEFAULT NULL,
  `bsnAnalysis` text,
  KEY `userID` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userskills`
--

INSERT INTO `userskills` (`userID`, `bsnAnalysis`) VALUES
(2, '4');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignments`
--
ALTER TABLE `assignments`
  ADD CONSTRAINT `assignments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `calendar`
--
ALTER TABLE `calendar`
  ADD CONSTRAINT `calendar_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `mentorship`
--
ALTER TABLE `mentorship`
  ADD CONSTRAINT `mentorship_ibfk_1` FOREIGN KEY (`menteeID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `mentorship_ibfk_2` FOREIGN KEY (`mentorID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `program`
--
ALTER TABLE `program`
  ADD CONSTRAINT `program_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`),
  ADD CONSTRAINT `program_ibfk_2` FOREIGN KEY (`taskID`) REFERENCES `tasks` (`taskID`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`goalID`) REFERENCES `goals` (`goalID`);

--
-- Constraints for table `userexpertise`
--
ALTER TABLE `userexpertise`
  ADD CONSTRAINT `userexpertise_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

--
-- Constraints for table `userskills`
--
ALTER TABLE `userskills`
  ADD CONSTRAINT `userskills_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
