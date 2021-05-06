-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 07:15 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `report_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(60) NOT NULL,
  `passkey` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `passkey`) VALUES
('CID/A1093', 'admin1'),
('CID/A1094', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `id_employee` varchar(30) NOT NULL,
  `id_num` varchar(30) NOT NULL,
`report_id` int(250) NOT NULL,
  `your_report` varchar(500) NOT NULL,
  `picture` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id_employee`, `id_num`, `report_id`, `your_report`, `picture`, `date`, `time`) VALUES
('CID/001002', '01035539', 8, 'Today report is about the construction building operating in high area at 13 floor with 2 lifting machine. There are 30 workers and 5 HSSE in the operation. The lifting object is glass for window with weight of 200kg and there are 30 of glass need to be place at the 13 floor building. Today operation we finish installing 15 window glass and we cannot proceed to another 15 glass installation due to extreme windy weather. For our safety, we stop the operation and continue by tomorrow.', '507122313.jpg', '2017-12-03', '09:55:58.000000'),
('CID/001003', '01453216', 9, 'The 2 project manager and project assistance discussing about the electrical generator plan. The generator plan will be placed near the construction building. Today the operation will be installing the piping, rail, iron electrical, power supply and wiring. A lot of operation need to be done within 60hr but since the weather is rain, the operation is cancel and wait for good weather to continue work given by the project manager.', 'construction.jpg', '2017-12-13', '10:07:03.000000'),
('CID/001004', '01891234', 10, 'This is my design for multimedia image adv. I am able to finish it within 4hr. The image consist of a person with both hand touching the cube that represent a person can do a lot of idea inside the cube box with the technology. The cube represent the technology idea, the hand is represent the new skill that can be done. The image also represent about the blue light near the cube. This blue light represent the future for multimedia technology that a person can reach.', 'doc_1957_2.png', '2017-12-13', '10:19:33.000000'),
('CID/001005', '05791536', 17, 'Today report is about the project document given by oil company. i just finish analysis about the document project at offshore. i have to OT my works hours to read and approved by my permission sign. The document is good for the company and a lot of tender given by oil big company. All the pages i have sign and approved by for this project to be done and proceed as soon as possible.', 'home-office-decor-for-writers.jpg', '2017-12-13', '10:52:06.000000'),
('CID/001006', '01449275', 18, 'This is the image that i design for our art gallery. i am using photoshop to edit and using the payment brush from google. The image is about the horse coming out from the glass. This is represent that  a person can become successful and break all the wall of any problem in life. I am choosing animal such as horse that can run faster and break the wall in shattered breaking wall.', 'Magnus.jpg', '2017-12-13', '10:58:42.000000'),
('CID/001008', '01691574', 19, 'i found that the programming for PHP website system is a lot of error and might not functioning well. I have solve hundred of hundred PHP programming. The problem with this code is a lot of mixing with java script without any opening and closing script. Right now this code is function well for the system to operate and using it as open source to global. There should be no error with the code and already check several times.', 'MLCode-688x400.png', '2017-12-13', '11:10:04.000000');

-- --------------------------------------------------------

--
-- Table structure for table `pic_store_view`
--

CREATE TABLE IF NOT EXISTS `pic_store_view` (
  `id_employee` varchar(30) NOT NULL,
`picture_id` int(225) NOT NULL,
  `Picture_uploading` varchar(80) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pic_store_view`
--

INSERT INTO `pic_store_view` (`id_employee`, `picture_id`, `Picture_uploading`) VALUES
('CID/001002', 1, '507122313.jpg'),
('CID/001003', 2, 'construction.jpg'),
('CID/001004', 3, 'doc_1957_2.png'),
('CID/001005', 14, 'home-office-decor-for-writers.jpg'),
('CID/001006', 15, 'Magnus.jpg'),
('CID/001007', 16, 'webdesignlayout7.jpg'),
('CID/001008', 17, 'MLCode-688x400.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`), ADD UNIQUE KEY `id_admin` (`id_admin`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`report_id`), ADD UNIQUE KEY `report_id` (`report_id`);

--
-- Indexes for table `pic_store_view`
--
ALTER TABLE `pic_store_view`
 ADD PRIMARY KEY (`id_employee`), ADD KEY `picture_id` (`picture_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `report_id` int(250) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `pic_store_view`
--
ALTER TABLE `pic_store_view`
MODIFY `picture_id` int(225) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
