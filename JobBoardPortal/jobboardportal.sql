-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2022 at 07:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobboardportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Username`, `Email`, `Password`) VALUES
(26, 'John Smith', 'email@address.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `submissionform`
--

CREATE TABLE `submissionform` (
  `Id` int(11) NOT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Description` longtext DEFAULT NULL,
  `Company` varchar(50) DEFAULT NULL,
  `Salary_field` decimal(15,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `submissionform`
--

INSERT INTO `submissionform` (`Id`, `Title`, `Description`, `Company`, `Salary_field`) VALUES
(13, 'Senior Technical Animator Avatar: Frontiers of Pandora', '      Avatar Frontiers of Pandora is a first person, action-adventure game developed by Massive Entertainment – a Ubisoft studio in collaboration with Lightstorm Entertainment and Disney. Built using the latest iteration of the Snowdrop engine, and developed exclusively for the new generation of consoles and PC, Avatar Frontiers of Pandora brings to life the alluring world of Pandora with all of its beauty and danger in an immersive, open world experience.\r\nAs a Senior Technical Animator at Massive, you ll be the link between art and code. You ll work with industry leading tools, like our Snowdrop game engine and collaborate with a cross functional team of Technical Animators, Artists and Programmers.\r\nThis is a permanent position based in Malmo Sweden, with the opportunity to work partially from home according to our Flexible Workplace Policy. Please apply in English (our company language), and we ll check your application asap!\r\nWhat you ll do  \r\nDevelop and maintain tools for DCC packages using Python\r\nTest and Debug tools and processes to ensure stability and usability\r\nCollaborating with a team of technical animators to develop current and new tools \r\nActing as a mentor for more junior staff and sharing your knowledge\r\nBe ready for quick tweaks during production to fit the animator s current needs.      ', 'Ubisoft', '2000.00'),
(14, 'Audio Hardware Engineer', 'At Apple, new ideas have a way of quickly becoming extraordinary products, services, and customer experiences. Sound is an essential and compelling facet of the customer experience so Apple has assembled a best-in-class Acoustics Technologies team that enables our customers to experience music with delight, communicate with clarity, and appreciate our products without disturbance from noise. In Apple Acoustics Technologies we work with passionate attention to detail, directly contributing to products that ship to millions of people around the world. If you are ready to join a dynamic and innovative team, then we want to hear from you!\r\n\r\nOur Audio Electrical Engineering team contributes to defining, designing and integrating high quality audio electronics into all Apple products. We are a diverse team of electrical engineers with a passion for audio, music, and making excellent products. Does this sound like you?', 'Apple', '6000.00'),
(15, ' Full-Time Senior Software Engineer', 'Bigpark is looking for a Senior Software Engineer who is passionate about improving and creating media experiences for photos on Windows 11. In this role you will be working to improve and expand the Photos application experience on Windows which helps millions of people to achieve more. \r\n\r\nBigpark, located in Vancouver, BC, Canada, is part of the Office Media Group inside the Experiences + Devices division.  We have a history of creating showcase experiences for Xbox, Windows, OneDrive and Microsoft Office. We are a diverse team of developers, creatives, data scientists and program managers delivering a full spectrum of software and services from incubation and envisioning right through to software development, customer delivery and service operations. \r\n\r\nWe have a great studio culture that includes internal conferences (engineering, Microsoft tech stack, and data science), three hack weeks a year for your own side projects, regular culture events, multiple clubs that organize events for people to hang out at (board games! mountain bikers!), and lots of people to test your foosball and ping pong skills against (good luck!). ', 'Microsoft', '7000.00'),
(16, 'C++ Game Developer, Minecraft', 'The Minecraft: Bedrock Edition team is expanding to help realize our dream of a better Minecraft experience. As a member of this team, you will have the unique challenges of helping to design and implement gameplay systems, allowing our incredible community to realize their creations using mechanics and technologies that you created, and improving the performance and stability of the game as a whole. Youll join a cross-functional team and work closely with the other developers, designers, producers, all working together on a game enjoyed by over 100,000,000 players worldwide. We have big dreams for the future of Minecraft and need you to help make them happen. \r\n \r\nBy joining the gameplay team, you will find an environment that enables you to leverage your knowledge and values to maintain and evolve a healthy and collaborative culture as we grow. ', 'Mojang', '10481.25'),
(17, 'Audio Designer', '   Id Software, part of the ZeniMax Media Inc. family of companies, is seeking an Audio Designer to join our team in making AAA games. This position assumes a prominent position on the team, helps establish and optimize production pipelines, and contributes to the execution of the vision of the game in close collaboration with colleagues.   ', 'Id Software', '5000.00'),
(61, 'awgagag', 'wafawfafag', 'Ubisoft', '1000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Username` (`Username`) USING BTREE,
  ADD KEY `Email` (`Email`) USING BTREE;

--
-- Indexes for table `submissionform`
--
ALTER TABLE `submissionform`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `submissionform`
--
ALTER TABLE `submissionform`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
