-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3308
-- Generation Time: Jul 20, 2024 at 08:36 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbvote`
--

-- --------------------------------------------------------

--
-- Table structure for table `addparty`
--

CREATE TABLE `addparty` (
  `id` int(11) NOT NULL,
  `partyname` varchar(200) NOT NULL,
  `picture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addparty`
--

INSERT INTO `addparty` (`id`, `partyname`, `picture`) VALUES
(6, 'BJP', 'symbolbjp.png'),
(7, 'congress', 'congress-symbol.png'),
(8, 'BSP', 'bsp-symbol.jpeg'),
(9, 'Akalidal', 'akali-symbol.jpeg'),
(10, 'AAP', 'aap-symbol.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'kiran', 'kiran123');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `postby` varchar(20) NOT NULL,
  `poston` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `description`, `picture`, `postby`, `poston`) VALUES
(2, '  This article is more than 1 month old India election results 2024: Narendra Modi claims third term but projections show party unlikely to win outright majority – as it happened', ' Narendra Modi’s ruling Bharatiya Janata party (BJP) looks likely to lose its parliamentary majority, dealing an unexpected blow to the Indian prime minister as voters defied predictions of another landslide for the BJP. It is the first time since Modi was elected in 2014 that the BJP has not won a clear majority on its own.\r\n Modi instead will be forced to negotiate with coalition partners in order to return to power. The BJP and its political allies, known as the National Democratic Alliance (NDA), have enough seats to form a majority government to rule for the next five years and return Modi to office for a third term.\r\n Modi, in a victory speech, insisted he had been given a mandate to lead again. “Our third term will be one of big decisions and the country will write a new chapter of development. This is Modi’s guarantee,” he told a crowd of cheering supporters in the capital, New Delhi.\r\n BJP officials were insistent it would form the next government and denied any setback. “The ', 'blog2.jpeg', 'admin', '2024-07-16'),
(4, 'Right To Vote : The Pillar of Democracy', 'In any democratic nation, the right to vote is not just a privilege but a fundamental cornerstone of the governance system. In India, the Right to Vote holds profound significance, reflecting the essence of democracy enshrined in its constitution.\r\n\r\n \r\n\r\nWhat is the Right To Vote?\r\nThe Right to Vote, also known as suffrage, is the constitutional right bestowed upon citizens to participate in the electoral process by casting their votes to elect representatives who will govern them. It ensures that every eligible citizen has a voice in shaping the destiny of the nation.\r\n\r\n \r\n\r\nConstitutional Foundation\r\nIn India, the Right to Vote finds its roots in various provisions of the Constitution, primarily under Articles 326 to 329. Article 326 specifically guarantees the Right to Vote to every citizen above the age of 18, irrespective of caste, creed, gender, or religion, subject to certain exceptions as prescribed by law.\r\n\r\n \r\n\r\nWho Is Eligible?\r\nAn Indian citizen whose age is 18 and above', 'navbg-1.webp', 'admin', '2024-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `candidateregister`
--

CREATE TABLE `candidateregister` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `e-mail` varchar(200) NOT NULL,
  `age` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `bankdetail` text NOT NULL,
  `selfdetails` int(11) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `castvote`
--

CREATE TABLE `castvote` (
  `id` int(11) NOT NULL,
  `votedparty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `castvote`
--

INSERT INTO `castvote` (`id`, `votedparty`) VALUES
(3, 'BSP'),
(5, 'AAP'),
(6, 'congress'),
(7, 'congress'),
(8, 'AAP'),
(9, 'AAP');

-- --------------------------------------------------------

--
-- Table structure for table `contactform`
--

CREATE TABLE `contactform` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `curdate` date NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactform`
--

INSERT INTO `contactform` (`id`, `name`, `email`, `number`, `curdate`, `subject`, `message`) VALUES
(1, 'kiran', 'kirangadher34@gmail.com', '43398859802', '2024-07-10', 'kgjdkj', 'kjfgk'),
(3, 'kajal', 'kajal@gmail.com', '9876543210', '2024-07-15', 'ok', 'ok');

-- --------------------------------------------------------

--
-- Table structure for table `donar`
--

CREATE TABLE `donar` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` int(11) NOT NULL,
  `number` int(20) NOT NULL,
  `donate` varchar(500) NOT NULL,
  `about` varchar(700) NOT NULL,
  `address` varchar(700) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `picture` varchar(100) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `poston` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `description`, `picture`, `postby`, `poston`) VALUES
(2, 'Education', 'The Indian government has promised to provide scholarships for quality education. They have pledged to offer education loans for children\'s\r\nstudies and vowed to establish good colleges and appoint experienced teachers in states lacking quality educational institutions.', 'vol-pic.jpg', 'BJP', '2024-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `picture` varchar(100) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `poston` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `title`, `description`, `picture`, `postby`, `poston`) VALUES
(1, 'Facility for Public', 'The Indian government has promised to provide numerous facilities to the people. It will ensure a better and safe environment for the citizens. The government will provide free gas cylinders to women for household work and other assistance such as free sewing to make clothes. Additionally, the government has pledged to provide loans to people who want to start their own businesses. In some states of India, the government has announced free electricity up to 600 units. The government has also promised compensation if a farmer\'s crop is damaged due to a natural disaster.', 'facility.png', 'Bjp', '2024-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `picture` varchar(200) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `poston` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `picture`, `postby`, `poston`) VALUES
(1, 'Food and Meal', 'The Indian government has promised that below poverty line individuals will receive free rations every month according to their needs through ration cards, such as wheat, lentils, etc. Additionally, children in government schools will be provided with nutritious and healthy meals.', 'food.png', 'congress', '2024-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `health`
--

CREATE TABLE `health` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` mediumtext NOT NULL,
  `picture` varchar(100) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `poston` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health`
--

INSERT INTO `health` (`id`, `title`, `description`, `picture`, `postby`, `poston`) VALUES
(1, 'Health and Care', 'The Indian government has promised to provide pensions to the elderly, widowed women, disabled individuals, and destitute. Through the Ayushman card, the government has also committed to providing free healthcare up to ₹5 lakh. For the health and care of citizens, the government has pledged to establish a clinic and appoint experienced doctors in every city and village. Furthermore, it has announced that if anyone helps an injured person and takes them to the hospital, they will not be subjected to police inspection.', 'health.png', 'Bjp', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `studentfacility`
--

CREATE TABLE `studentfacility` (
  `id` int(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` mediumtext NOT NULL,
  `picture` varchar(200) NOT NULL,
  `postby` varchar(100) NOT NULL,
  `poston` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentfacility`
--

INSERT INTO `studentfacility` (`id`, `title`, `description`, `picture`, `postby`, `poston`) VALUES
(1, 'Facility for Students', 'The Indian government has made a commitment to enhance educational opportunities for students across the country. Ensuring access to resources is a cornerstone of this promise, with plans to establish libraries in every city and village. These libraries aim to empower students to pursue knowledge beyond their academic curriculum, fostering a spirit of innovation and academic excellence that will contribute to the nation\'s progress.\r\n\r\nIn addition to infrastructure support, the government has pledged to provide free laptops and tablets to students, recognizing the importance of digital literacy in today\'s world. This initiative not only aims to bridge the digital divide but also equips students with the tools necessary to excel in their studies and beyond.\r\n\r\nFurthermore, the government has promised to facilitate education loans, ensuring that financial constraints do not hinder students from accessing quality education. By alleviating the burden of educational expenses, this initiative seeks to enable every aspiring student to achieve their academic and professional goals, ultimately contributing to the nation\'s growth and prosperity.\r\n\r\nThese efforts underscore the government\'s commitment to nurturing a skilled and educated youth population, poised to lead India into a future characterized by knowledge, innovation, and inclusive development.', 'vol-pic.jpg', 'AAP', '2024-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `about` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `name`, `age`, `email`, `number`, `address`, `about`, `gender`, `curdate`) VALUES
(1, 'kiran', 22, 'kiran@gmail.com', '1234567890', '', '', 'on', '2024-07-10'),
(4, 'kajal', 19, 'kajal@gmail.com', '1234567890', '', '', 'on', '2024-07-11'),
(5, 'kajal', 19, 'kajal@gmail.com', '1234567890', '', '', 'on', '2024-07-11'),
(6, 'kajal', 19, 'kajal@gmail.com', '1234567890', 'punjab', 'ok', 'on', '2024-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `voterlogin`
--

CREATE TABLE `voterlogin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `assemblycon` varchar(1000) NOT NULL,
  `epicnum` mediumtext NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voterlogin`
--

INSERT INTO `voterlogin` (`id`, `name`, `fname`, `assemblycon`, `epicnum`, `gender`) VALUES
(2, 'Kiran', 'Manphool Ram', 'Nihal Khera', '123', 'female'),
(3, 'Kajal', 'Sanjiv Kumar', 'Dabwali', '456', 'female');

-- --------------------------------------------------------

--
-- Table structure for table `voterregister`
--

CREATE TABLE `voterregister` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `assemblycon` varchar(500) NOT NULL,
  `epicnum` varchar(500) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `curdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voterregister`
--

INSERT INTO `voterregister` (`id`, `name`, `age`, `fname`, `assemblycon`, `epicnum`, `gender`, `curdate`) VALUES
(1, 'kiran', 32, 'Manphool Ram', '82-Balluana(sc)', 'dkfj29831', 'Female', '2024-07-11'),
(2, 'kamal', 22, 'Manphool Ram', '82-Balluana(sc)', '1234', 'Male', '2024-07-13'),
(12, 'kiran', 22, 'Manphool Ram', 'Nihal Khera', '123', 'Female', '2024-07-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addparty`
--
ALTER TABLE `addparty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `castvote`
--
ALTER TABLE `castvote`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactform`
--
ALTER TABLE `contactform`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donar`
--
ALTER TABLE `donar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health`
--
ALTER TABLE `health`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentfacility`
--
ALTER TABLE `studentfacility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voterlogin`
--
ALTER TABLE `voterlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voterregister`
--
ALTER TABLE `voterregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addparty`
--
ALTER TABLE `addparty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `castvote`
--
ALTER TABLE `castvote`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contactform`
--
ALTER TABLE `contactform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `donar`
--
ALTER TABLE `donar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `health`
--
ALTER TABLE `health`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentfacility`
--
ALTER TABLE `studentfacility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voterlogin`
--
ALTER TABLE `voterlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `voterregister`
--
ALTER TABLE `voterregister`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
