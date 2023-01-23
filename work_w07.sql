-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2023 at 05:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_bd`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `number_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสลูกค้า',
  `name` varchar(30) NOT NULL COMMENT 'ชื่อ',
  `surname` varchar(30) NOT NULL COMMENT 'นามสกุล',
  `telephone` int(10) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `address` varchar(300) NOT NULL COMMENT 'ที่อยู่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`number_id`, `name`, `surname`, `telephone`, `address`) VALUES
(000001, 'วราเทพ', 'ธัญญารักษ์', 624362776, 'จ.จันทบุรี อ.เมื่อง ต.ท่าช้าง 22210 แคหะ1/3 หอพัก'),
(000002, 'ปุญฤทธิ์', 'กว้างทอง', 985352234, 'จ.จันทบุรี อ.เมื่อง ต.ท่าช้าง 22210 ศิริกาล ซ.8'),
(000003, 'ปฎิภานณ์', 'ทรีศุกร์', 736455268, 'Chanthaburi Khao Khitchakut Jat Klom'),
(000006, 'สันติ ', 'นวลจันทร์', 835546787, 'ถนนศรีธาตุ ต.ในเมือง อ.เมืองขอนแก่น จ.ขอนแก่น 40000'),
(000012, 'ปฎิttttttt', 'นวลจันทร์', 999999998, 'home');

-- --------------------------------------------------------

--
-- Table structure for table `pro`
--

CREATE TABLE `pro` (
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL COMMENT 'รหัสสินค้า',
  `pro_name` varchar(40) NOT NULL COMMENT 'ชื่อหนังสือ',
  `detail` text NOT NULL COMMENT 'รายละเอียด',
  `image` varchar(50) NOT NULL COMMENT 'รูปหนังสือ',
  `price` int(4) NOT NULL COMMENT 'ราคาสินค้า'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pro`
--

INSERT INTO `pro` (`pro_id`, `pro_name`, `detail`, `image`, `price`) VALUES
(000001, 'The psychology of money', '\"เงิน\" พรอันประเสริฐและคำสาปแช่งอันขมขื่นต่อชีวิตความเป็นอยู่ของเรา    \r\n\r\nหลายคนเหลือกินเหลือใช้ หลายคนอดมื้อกินมื้อ    \r\nหลายคนนอนอุ่น หลายคนไร้บ้าน    \r\nหลายคนมั่งคั่งเพิ่มขึ้นในระดับวินาที\r\nหลายคนไม่เคยจะมีตลอดชั่วนาตาปี    \r\nหลายคนสุขสบาย หลายคนขมขื่นข้นแค้น    \r\nและอีกมากมาย ทั้งหมดนี้ล้วนแล้วแต่เป็นผลมาจากเงินทั้งสิ้น… จริงหรือ?    \r\n\r\nหากระยะเวลา คือหนึ่งในตัวแปรต่อความชำนาญในสิ่งใดๆ\r\nคนเราก็น่าจะมีทักษะทางการเงินที่ดีพอจนสามารถสร้างสมดุลในการใช้ชีวิตได้\r\nไปจนถึงการได้มาซึ่งอิสรภาพและการใช้ชีวิตตามแบบที่ใจปรารถนา\r\nเพราะเงินนั้นวนเวียนอยู่กับเราตั้งแต่วินาทีที่ลืมตาดูโลกจนถึงวาระสุดท้ายของชีวิต\r\nแต่ในโลกแห่งความเป็นจริงก็เป็นอย่างที่เรารู้ๆกัน    \r\n\r\nหนังสือเล่มนี้ จะพาคุณไปกะเทาะเปลือกความเป็นมนุษย์ เพื่อให้คุณได้เห็นว่า...\r\n\"เมื่อเป็นเรื่องเงิน รู้อะไรไม่สำคัญเท่าทำอย่างไร และการตัดสินใจลงมือทำ\r\nเพื่อให้ได้ผลลัพธ์ที่ดีนั้นเป็นสิ่งที่สอนกันได้ยากยิ่ง\"', '', 290),
(000002, 'INTO THE MAGIC SHOP ', 'หนังสือเล่มนี้เล่าเรื่องราวการผจญภัยอันน่าทึ่งของประสาทศัลยแพทย์คนหนึ่งเพื่อไขปริศนาในความโยงใยระหว่างสมองและหัวใจ ตั้งแต่ตอนที่เขายังเด็ก เมื่อการแสดงออกซึ่งความเมตตาเล็กน้อยของคนคนหนึ่งได้เปลี่ยนเส้นทางชีวิตเขาให้กลายมาเป็นผู้ก่อตั้งศูนย์เพื่อการศึกษาเรื่องความเมตตาที่มหาวิทยาลัยสแตนฟอร์ด ชีวิตของจิม โดตี แสดงให้เห็นว่าเราแต่ละคนจะสร้างความเปลี่ยนแปลงได้อย่างไร เราเปลี่ยนโลกให้เป็นที่ที่มีเมตตายิ่งขึ้นได้ อาตมามั่นใจว่าผู้อ่านมากมายจะซาบซึ้งไปกับเรื่องราวอันเป็นแรงบันดาลใจนี้ที่จะเปิดหัวใจของพวกเขาและทำให้เห็นว่าพวกเขาก็ทำเพื่อผู้อื่นได้เช่นกัน\" -องค์ทะไลลามะ-\r\n\r\nเราทุกคนล้วนมีร้านเวทมนตร์อยู่ในใจ นำเสนอการเดินทางที่บอกเล่าอย่างวิจิตรบรรจงน่าติดตาม สู่ความลึกลับของจิตและสมองของมนุษย์ ประสาทศัลยแพทย์ เจมส์ โดตี ได้เขียนตำนานอุ่นหัวใจแห่งความกล้าหาญและความเมตตา\" -ดร.แดเนียล โกลแมน ผู้เขียน EMOTIONAL INTELLIGENCE-\r\n\r\n\"เป็นหนังสือที่จับใจและสร้างแรงบันดาลใจที่สุดเล่มหนึ่งเท่าที่ผมได้อ่านมา เราอยู่กับจิมในแต่ละย่างก้าวที่เขาต่อสู้กับความยากจนและความเจ็บปวด จนกลายมาเป็นศัลยแพทย์ผ่าตัดสมองระดับโลก ได้มาและสูญเสียซึ่งความมั่นคั่ง และได้เรียนรู้บทเรียนอันลึกซึ้งเกี่ยวกับกลวิเศษในหัวใจของเราทุกคน ดึงดูด ลึกซึ้ง ไม่ธรรมดา\" -ดร.ริค แฮนสัน ผู้เขียน Buddha\'s Brain (สมองแห่งพุทธะ)-\r\n\r\n\"กึ่งบันทึกความทรงจำ กึ่งการสำรวจทางวิทยาศาสตร์ เราทุกคนล้วนมีร้านเวทมนตร์อยู่ในใจ เป็นผลงานแห่งอารมณ์และการค้นพบที่ทรงพลัง ทำให้เห็นว่าพวกเราทุกคนต่างมีร้านมายากลเล็กๆ อยู่ในตัวเรา มันคือสถานที่แห่งความสงบและงดงามที่เรากลับไปได้เมื่อใดที่ต้องการ เจมส์ โดตี แสดงให้เราเห็นอย่างครบถ้วนบริบูรณ์ว่าเราแค่ต้องเปิดประตู แล้วก้าวเข้าไป\" -แอเรียนนา ฮัฟฟิงตัน ผู้เขียน THRIVE-\r\n\r\n', '', 196),
(000004, 'ชีวิตเรามีแค่สี่พันสัปดาห์', ' เราสำรวจปรัชญาน่าทึ่งเกี่ยวกับเวลาและการบริหารเวลา ที่จะช่วยให้คุณมองเวลาชีวิตที่มีอยู่แค่ราวๆ 4000 พันสัปดาห์เปลี่ยนไปโดยสิ้นเชิง และปลดแอกตัวเองจาก “คำสาปของยุคโมเดิร์น” ที่เรียกร้องให้เรายัดทุกอย่างลงในเวลาที่มีอย่างมีประสิทธิภาพ ทำทุกอย่างให้เสร็จอย่างดี (getting thing done)  หนังสือทำให้เห็นว่า เราถูกตั้งโปรแกรมให้มีความคิดผิดเพี้ยนแค่ไหนเกี่ยวกับเวลา ความจริงด้านเวลาที่จะไม่มีวันเปลี่ยนแปลงคืออะไร พร้อมกับให้เครื่องมือที่ช่วยให้คุณได้สร้างชีวิตที่มีความหมาย ด้วยการยินดีโอบรับขีดจำกัดของชีวิต และเปลี่ยนแปลงสิ่งที่เราทำได้ในฐานะปัจเจก และสังคม', '', 212);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(3) NOT NULL COMMENT 'รหัสหมวดหมู่สินค้า',
  `type_name` varchar(30) NOT NULL COMMENT 'ชื่อหมวดหมู่'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'จิตวิทยา'),
(2, 'ธุรกิจการเงิน');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`number_id`);

--
-- Indexes for table `pro`
--
ALTER TABLE `pro`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `number_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสลูกค้า', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pro`
--
ALTER TABLE `pro`
  MODIFY `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT COMMENT 'รหัสสินค้า', AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(3) NOT NULL AUTO_INCREMENT COMMENT 'รหัสหมวดหมู่สินค้า', AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
