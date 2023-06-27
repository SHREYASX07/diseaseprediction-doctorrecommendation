-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 07:20 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbkdiseaseprediction`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `mobile`, `username`, `password`) VALUES
(1, 'admin', 'admin@admin.com', '1234567890', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `diseases`
--

CREATE TABLE `diseases` (
  `id` int(11) NOT NULL,
  `disease_name` text NOT NULL,
  `cause` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diseases`
--

INSERT INTO `diseases` (`id`, `disease_name`, `cause`) VALUES
(1, 'Brain Tumors', 'Brain tumors happen when cells in or near the brain get changes in their DNA.'),
(2, 'Stroke', 'They happen when a blood clot blocks the flow of blood and oxygen to the brain.These blood clots typically form in areas where the arteries have been narrowed or blocked over time by fatty deposits (plaques).'),
(3, 'Kidney Stone','Kidney stones form when your urine contains more crystal-forming substances such as calcium, oxalate and uric acid than the fluid in your urine can dilute. At the same time, your urine may lack substances that prevent crystals from sticking together, creating an ideal environment for kidney stones to form.'),
(4, 'Chronic Kideny Disease','Diabetes and high blood pressure are the most common causes of chronic kidney disease (CKD).'),
(5, 'Tuberculosis (TB)','Tuberculosis is caused by a bacterium called Mycobacterium tuberculosis.'),
(6, 'Lung Cancer',' Cigarette smoking is the number one cause of lung cancer. Lung cancer also can be caused by using other types of tobacco (such as pipes or cigars), breathing secondhand smoke, being exposed to substances such as asbestos or radon at home or work, and having a family history of lung cancer.'),
(7, 'Pancreatic Cancer','Pancreatic cancer develops when uncontrolled cell growth begins in a part of the pancreas. Symptoms include jaundice and pain located in the abdomen or back, but these might not appear until the later stages.'),
(8, 'Diabetes','Diabetes occurs when your immune system, infection-fighting mechanisms in the body, attacks and destroys the insulin-producing beta cells of the pancreas. diabetes is caused by genes and environmental factors, such as viruses, that might trigger the disease.');

-- --------------------------------------------------------

--
-- Table structure for table `link_symptoms`
--

CREATE TABLE `link_symptoms` (
  `id` int(11) NOT NULL,
  `organ_id` int(11) NOT NULL,
  `disease_id` int(11) NOT NULL,
  `symptom_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `link_symptoms`
--

INSERT INTO `link_symptoms` (`id`, `organ_id`, `disease_id`, `symptom_id`) VALUES
(1,1,1,1),
(2,1,1,2),
(3,1,1,3),
(4,1,1,4),
(5,1,1,5),
(6,1,1,6),
(7,1,2,2),
(8,1,2,4),
(9,1,2,7),
(10,1,2,8),
(11,1,2,9),
(12,1,2,10),
(13,1,2,11),
(14,2,3,12),
(15,2,3,13),
(16,2,3,14),
(17,2,3,15),
(18,2,3,16),
(19,2,4,17),
(20,2,4,18),
(21,2,4,19),
(22,2,4,20),
(23,2,4,21),
(24,2,4,22),
(25,3,5,4),
(26,3,5,22),
(27,3,5,23),
(28,3,5,24),
(29,3,5,25),
(30,3,5,26),
(31,3,5,27),
(32,3,5,28),
(33,3,5,29),
(34,3,5,30),
(35,3,6,4),
(36,3,6,24),
(37,3,6,31),
(38,3,6,32),
(39,3,6,33),
(40,3,6,34),
(41,3,6,35),
(42,4,7,17),
(43,4,7,36),
(44,4,7,37),
(45,4,7,38),
(46,4,7,39),
(47,4,7,40),
(48,4,7,41),
(49,4,8,2),
(50,4,8,4),
(51,4,8,17),
(52,4,8,20),
(53,4,8,42),
(54,4,8,43),
(55,4,8,44),
(56,4,8,45),
(57,4,8,46),
(58,4,8,47);

-- --------------------------------------------------------

--
-- Table structure for table `organs`
--

CREATE TABLE `organs` (
  `id` int(11) NOT NULL,
  `organ_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organs`
--

INSERT INTO `organs` (`id`, `organ_name`) VALUES
(1, 'Brain'),
(2, 'Kidneys'),
(3, 'Lungs'),
(4, 'Pancreas');

-- --------------------------------------------------------

--
-- Table structure for table `symptoms`
--

CREATE TABLE `symptoms` (
  `id` int(11) NOT NULL,
  `symptom_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `symptoms`
--

INSERT INTO `symptoms` (`id`, `symptom_name`) VALUES

(1, 'very severe headache.'),
(2, 'Eye problems,(As blurry vision)'),
(3, 'Trouble with balance.'),
(4, 'Feeling very tired'),
(5, 'Hearing problems.'),
(6, 'Feeling very hungry and gaining weight.'),
(7, 'Complete paralysis of 1 side of the body.'),
(8, 'confusion.'),
(9, 'difficulty swallowing (dysphagia)'),
(10, 'a sudden and very severe headache'),
(11, 'loss of consciousness'),

(12, 'Abnormal urine color.'),
(13, 'Blood in the urine'),
(14, 'Fever'),
(15, 'Nausea and vomiting'),
(16, 'Pain may be felt in the belly area'),
(17, 'weight loss'),
(18, 'swollen ankles, feet or hands'),
(19, 'blood in your pee.'),
(20, 'An increased need to pee (particularly at night).'),
(21, 'feeling sick'),
(22, 'Trouble breathing'),

(23, 'Not wanting to eat.'),
(24, 'Chest pain.'),
(25, 'Coughing up blood or mucus.'),
(26, 'Low fever.'),
(27, 'Fever.'),
(28, 'Night sweats.'),
(29, 'Not feeling well in general.'),
(30, 'Weight loss.'),
(31, 'Coughing that stays or grows worse'),
(32, 'Shortness of breath.'),
(33, 'Wheezing.'),
(34, 'Coughing up blood.'),
(35, 'Weight loss with no known cause.'),

(36, 'Abdominal Pain'),
(37, 'Jaundic'),
(38, 'Digestive Problems'),
(39, 'Weakness'),
(40, 'Digestive Enzyme Deficiency'),
(41, 'Blood Clots.'),
(42, 'Are very thirsty'),
(43, 'Are very hungry'),
(44, 'Have numb or tingling hands or feet'),
(45, 'Have very dry skin'),
(46, 'Have sores that heal slowly'),
(47, 'Have more infections than usual');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(255) NOT NULL,
  `hospital_phone` varchar(255) NOT NULL,
  `hospital_email` varchar(255) NOT NULL,
  `hospital_city` varchar(254) NOT NULL,
  `hospital_address` text NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `doctor_phone` varchar(255) NOT NULL,
  `doctor_qualification` varchar(255) NOT NULL,
  `doctor_speciality` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diseases`
--
ALTER TABLE `diseases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `link_symptoms`
--
ALTER TABLE `link_symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organs`
--
ALTER TABLE `organs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `symptoms`
--
ALTER TABLE `symptoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `diseases`
--
ALTER TABLE `diseases`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `link_symptoms`
--
ALTER TABLE `link_symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `organs`
--
ALTER TABLE `organs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `symptoms`
--
ALTER TABLE `symptoms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
