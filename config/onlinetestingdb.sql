-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2024 at 08:28 PM
-- Server version: 5.7.24
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinetestingdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answer_id` int(10) NOT NULL,
  `question_id` int(10) NOT NULL,
  `answer_exam` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`answer_id`, `question_id`, `answer_exam`, `user_id`) VALUES
(8, 1, 1, 2),
(9, 10, 1, 2),
(10, 11, 4, 4),
(11, 12, 2, 4),
(12, 13, 2, 4),
(13, 14, 3, 4),
(14, 15, 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `num` int(10) NOT NULL,
  `question_exam` varchar(500) NOT NULL,
  `answer1` varchar(255) NOT NULL,
  `answer2` varchar(255) NOT NULL,
  `answer3` varchar(255) DEFAULT NULL,
  `answer4` varchar(255) DEFAULT NULL,
  `ans_true` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `subject_id`, `num`, `question_exam`, `answer1`, `answer2`, `answer3`, `answer4`, `ans_true`) VALUES
(1, 3, 1, 'คำถามๆๆๆ123w', 'คำตอบ1', 'คำตอบ2', 'คำตอบ33', '', 2),
(10, 3, 2, 'ข้อที่2', 'คำตอบ1111', 'คำตอบ1122', 'คำตอบ1133', 'คำตอบ1144', 1),
(11, 7, 1, 'กำหนดให้ x,y,z = \"Orange\", \"Banana\", \"Cherry\" ถ้าใช้คำสั่ง print(z) จะได้ผลลัพธ์ใด', 'Orange', 'Banana', 'Cherry', '  \"Orange\", \"Banana\", \"Cherry\"', 3),
(12, 7, 2, 'กำหนดให้ z =float(3) ถ้าใช้คำสั่ง print(z) จะได้ผลลัพธ์ใด', 'float', '3', '3.0', '9', 3),
(13, 7, 3, 'กำหนดให้ a = \"Hello, World!\" ถ้าใช้คำสั่ง print(a[1]) จะได้ผลลัพธ์ใด', 'H', 'e', 'l', 'o', 2),
(14, 7, 4, 'กำหนดให้ a = \"Hello\" ถ้าใช้คำสั่ง print(len(a)) จะได้ผลลัพธ์ใด', '1', '5', 'H', 'Hello', 2),
(15, 7, 5, 'กำหนดให้ list =[\"apple\", \"banana\", \"cherry\"] ถ้าใช้คำสั่ง print(list[-1]) จะได้ผลลัพธ์ใด', 'apple', 'banana', 'cherry', 'Null', 3),
(16, 8, 1, 'ภาษา C เป็นภาษาคอมพิวเตอร์ที่ถูกค้นคิดขึ้นโดยใคร', 'Denis Ritchie', 'Richard', 'JohnWar', 'Calvin Jones', 1),
(17, 8, 2, 'Editor ของภาษาซี หมายถึงอะไร', 'พื้นที่สำหรับรวบรวมโปรแกรม', 'พื้นที่สำหรับเขียนโปรแกรม ', 'พื้นที่สำหรับรับข้อมูลของโปรแกรม', 'พื้นที่สำหรับตรวจสอบข้อมูล', 2),
(18, 8, 3, 'เฮดเดอร์ไฟล์ stdio.hซึ่งจะเป็นที่เก็บไลบรารี่มาตรฐานที่จัดการเกี่ยวกับอะไร', 'อินพุต', 'เอาท์พุต', 'อินพุตและเอาท์พุต', 'ไม่มีข้อใดถูก', 3),
(19, 8, 4, 'ในภาษาซี ฟังก์ชันหลักที่ทุกโปรแกรมต้องมี คือฟังก์ชันอะไร', 'ฟังก์ชัน main()', 'ฟังก์ชันadd_num', 'ฟังก์ชันdata_in', 'ฟังก์ชัน local', 1),
(20, 8, 5, 'ข้อใดไม่ใช่ชนิดข้อมูลมาตรฐานของภาษาซี', 'ชนิดข้อมูลแบบไม่มีค่า หรือ Void Type (Void)', 'ชนิดข้อมูลมูลแบบจำนวนเต็ม หรือ Integer Type (int)', 'ชนิดข้อมูลแบบอักษร หรือ Character Type (char)', 'ชนิดข้อมูลแบบเปลี่ยนแปลง Change Type (change)', 4);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `score_id` int(10) NOT NULL,
  `subject_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `score_exam` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`score_id`, `subject_id`, `user_id`, `score_exam`) VALUES
(1, 3, 2, 1),
(2, 7, 4, 1),
(3, 6, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subject_information`
--

CREATE TABLE `subject_information` (
  `subject_id` int(10) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `subject_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subject_information`
--

INSERT INTO `subject_information` (`subject_id`, `subject_name`, `subject_image`) VALUES
(3, 'ภาษา HTML เพื่อการพัฒนาเว็บไซต์', 'download (1).jpg'),
(6, 'Class and Object-Oriented Programming', 'OOP.jpg'),
(7, 'Python', 'Python.jpg'),
(8, 'ภาษา C', 'C.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `urole` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `password`, `urole`) VALUES
(1, 'admin123456@admin.com', 'a66abb5684c45962d887564f08346e8d', 'admin'),
(2, 'useruser123456@gmail.com', 'fc95dfb493f5f64dd10c8c58e54bccfe', 'user'),
(3, 'thawit@gmail.com', '1234', 'admin'),
(4, 'T@gmail.com', 'fb2d00938c0a2619164c8a136264a439', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `subject_information`
--
ALTER TABLE `subject_information`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer`
--
ALTER TABLE `answer`
  MODIFY `answer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `score`
--
ALTER TABLE `score`
  MODIFY `score_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject_information`
--
ALTER TABLE `subject_information`
  MODIFY `subject_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
