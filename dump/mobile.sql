-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2019 at 04:49 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `pID` int(11) NOT NULL,
  `pImage` varchar(255) NOT NULL,
  `Product_Name` varchar(100) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Pdesc` text NOT NULL,
  `Quan` int(25) NOT NULL,
  `Price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`pID`, `pImage`, `Product_Name`, `Category`, `Pdesc`, `Quan`, `Price`) VALUES
(3, 'uploads/Appleiphone6.jpg', 'Apple Iphone 6', 'Apple', 'Apple iPhone 6 (Space Grey, 1GB RAM, 32GB Storage)\r\nby Apple\r\n 3.8 out of 5 stars    4,476 customer reviews | 684 answered questions\r\nM.R.P.:	   31,900.00 \r\nPrice:	   23,053.00  FREE Delivery.Details\r\nYou Save:	   8,847.00 (28%)\r\nInclusive of all taxes\r\nEMI starts at â‚¹1,085 per month. Options \r\nIn stock.\r\nGuaranteed delivery to pincode 600125 - Chennai by Tomorrow 9pm with One-Day Delivery â€” Order in the next', 10, 23053),
(4, 'uploads/Appleiphone8plus.jpg', 'Apple Iphone 8 plus', 'Apple', 'Apple iPhone 8 Plus (Space Grey, 64GB)\r\nby Apple\r\n 4.2 out of 5 stars    317 customer reviews | 241 answered questions\r\nM.R.P.:	   77,560.00 \r\nPrice:	   69,900.00  FREE Delivery.Details\r\nYou Save:	   7,660.00 (10%)\r\nInclusive of all taxes\r\nEMI starts at â‚¹3,290 per month. Options \r\nIn stock.', 30, 69900),
(6, 'uploads/LG.JPG', 'LG LTE 10', 'Android', 'Enter description', 15, 100000),
(9, 'uploads/RedmiY2(RoseGold,32GB).jpg', 'Redmi Y2', 'Android', 'Redmi\'s  brand new series phone', 15, 12999),
(10, 'uploads/samsung j7.jpg', 'samsung J7', 'Android', 'Samsung\'s best ever phone', 15, 15000),
(11, 'uploads/samsunggalaxyj7nxt.jpg', 'samsung Galaxy J7 NXT', 'Android', 'Enter Description', 15, 17999),
(12, 'uploads/samsunggalaxyj7prime.jpeg', 'samsung Galaxy J7 Prime', 'Android', 'Enter Description', 40, 19999),
(13, 'uploads/OppoF9Pro.jpg', 'Oppo F9 Pro', 'Android', 'Oppo F9 Pro (Twilight Blue, 6GB RAM, 64GB Storage) with Offers\r\nby Oppo\r\n 4.2 out of 5 stars    188 customer reviews  | 117 answered questions\r\nAmazon\'s\r\nChoice\r\nfor &quot;oppo f9 pro&quot;\r\nM.R.P.:	   25,990.00 \r\nDeal of the Day:	   23,990.00  FREE Delivery.Details\r\nEnds in 04h 26m 29s\r\nYou Save:	   2,000.00 (8%)\r\nInclusive of all taxes\r\nPay on Delivery (Cash/Card) eligible What is this? \r\nNo Cost EMI from â‚¹2,666. Options \r\nIn stock.\r\nGuaranteed delivery to pincode 600125 - Chennai by Tomorrow 9pm with One-Day Delivery â€” Order in the next 11 minutes Details\r\nSold by Appario Retail Private Ltd (4.7 out of 5 | 87,884 ratings) and Fulfilled by Amazon. Gift-wrap available.\r\n10-day replacement only', 50, 50000),
(14, 'uploads/RealMe1.jpg', 'Real Me 1', 'Android', 'RealMe 1 (Solar Red, 4GB RAM, 64GB Storage)\r\nby Realme\r\n 4.4 out of 5 stars    18,929 customer reviews | 1000+ answered questions\r\nM.R.P.:	   12,990.00 \r\nDeal of the Day:	   10,490.00  FREE Delivery.Details\r\nEnds in 04h 17m 07s\r\nYou Save:	   2,500.00 (19%)\r\nInclusive of all taxes\r\nPay on Delivery (Cash/Card) eligible What is this? \r\nNo Cost EMI from â‚¹1,748. Options \r\nIn stock.\r\nGuaranteed delivery to pincode 600125 - Chennai by Tomorrow 9pm with One-Day Delivery â€” Order in the next 7 minutes Details\r\nSold by Darshita Electronics (4.6 out of 5 | 30,504 ratings) and Fulfilled by Amazon. Gift-wrap available.\r\n10-day replacement only \r\n1 offer from    10,490.00', 40, 10490),
(15, 'uploads/Honor7x.jpg', 'Honor 7X', 'Android', 'Honor 7X (Black, 4GB RAM, 32GB Storage)\r\nby HONOR\r\n 4.1 out of 5 stars    17,765 customer reviews | 1000+ answered questions\r\nM.R.P.:	   13,999.00 \r\nPrice:	   11,999.00\r\nDeal Price:	   9,999.00  FREE Delivery.Details\r\nYou Save:	   4,000.00 (29%)\r\nInclusive of all taxes\r\nPay on Delivery (Cash/Card) eligible What is this? \r\nNo Cost EMI from â‚¹1,667. Options \r\nIn stock.\r\nGuaranteed delivery to pincode 600125 - Chennai by Tomorrow 9pm with One-Day Delivery â€” Order in the next 2 minutes Details\r\nSold by Darshita Electronics (4.6 out of 5 | 30,504 ratings) and Fulfilled by Amazon. Gift-wrap available.\r\n10-day replacement only \r\n1 offer from    9,999.00', 20, 9999),
(16, 'uploads/OnePlus6.jpg', 'One Plus 6', 'Android', 'OnePlus 6 (Mirror Black, 8GB RAM, 128GB Storage)\r\nby OnePlus\r\n 4.5 out of 5 stars    15,716 customer reviews | 1000+ answered questions\r\nAmazon\'s\r\nChoice\r\nfor &quot;oneplus6 mobile phone&quot;\r\nPrice:	   39,999.00 \r\nDeal of the Day:	   34,999.00  FREE Delivery.Details\r\nEnds in 04h 09m 58s\r\nYou Save:	   5,000.00 (13%)\r\nInclusive of all taxes\r\nNo Cost EMI from â‚¹11,666. Options \r\nIn stock.\r\nGuaranteed delivery to pincode 600125 - Chennai by Tomorrow 9pm with One-Day Delivery â€” Order in the next 3 seconds Details\r\nSold by GreenMobiles! (4.6 out of 5 | 12,418 ratings) and Fulfilled by Amazon. Gift-wrap available.\r\n10-day replacement only \r\n1 offer from    34,999.00', 20, 34999),
(17, 'uploads/Nokia3.jpg', 'Nokia 3', 'Android', 'Nokia 3 (Matte Black)\r\nby Nokia\r\n 3.0 out of 5 stars    758 customer reviews  | 747 answered questions\r\nM.R.P.:	   10,299.00 \r\nPrice:	   7,500.00  FREE Delivery.Details\r\nYou Save:	   2,799.00 (27%)\r\nInclusive of all taxes\r\nPay on Delivery (Cash/Card) eligible What is this? \r\nEMI starts at â‚¹353 per month.', 10, 7500),
(22, 'uploads/Redmi6A.jpg', 'Xiaomi Redmi 6A', 'Android', 'Red mi\'s best ever phone', 17, 100000),
(27, 'uploads/Honor7x.jpg', 'Honor 7X', 'Android', 'Honor 7X (Black, 4GB RAM, 32GB Storage) by HONOR 4.1 out of 5 stars 17,765 customer reviews | 1000+ answered questions M.R.P.: 13,999.00 Price: 11,999.00 Deal Price:	9,999.00 FREE Delivery.Details You Save: 4,000.00 (29%) Inclusive of all taxes Pay on Delivery (Cash/Card) eligible What is this? No Cost EMI from â‚¹1,667. Options In stock. Guaranteed delivery to pincode 600125 - Chennai by Tomorrow 9pm with One-Day Delivery â€” Order in the next 2 minutes Details Sold by Darshita Electronics (4.6 out of 5 | 30,504 ratings) and Fulfilled by Amazon. Gift-wrap available. 10-day replacement only 1 offer from 9,999.00', 20, 9999),
(28, 'uploads/3228.jpg', 'jkj', 'jkj', 'jkjk Enter description', 0, 100000),
(29, 'uploads/3228.jpg', 'jkj', 'kjk', 'jk Enter description', 10, 13),
(30, 'uploads/WIN_20190119_12_52_41_Pro.jpg', 'hkj', 'jkj', 'jk Enter descriptionjkj', 10, 13);

-- --------------------------------------------------------

--
-- Table structure for table `orderid`
--

CREATE TABLE `orderid` (
  `id` int(11) NOT NULL,
  `t1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderid`
--

INSERT INTO `orderid` (`id`, `t1`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ordertable`
--

CREATE TABLE `ordertable` (
  `CurrDate` datetime NOT NULL,
  `product` varchar(100) NOT NULL,
  `user` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `amount` float NOT NULL,
  `order_id` int(100) NOT NULL,
  `Status` varchar(100) NOT NULL DEFAULT 'NOT DELIVERED'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertable`
--

INSERT INTO `ordertable` (`CurrDate`, `product`, `user`, `quantity`, `amount`, `order_id`, `Status`) VALUES
('2018-10-22 14:11:27', 'Apple Iphone 6', 'Shakthi', 1, 23053, 3, 'DELIVERED'),
('2018-10-22 14:12:02', 'Apple Iphone 6', 'Shakthi', 1, 23053, 4, 'DELIVERED'),
('2018-10-22 14:12:02', 'Apple Iphone 6', 'Shakthi', 1, 23053, 4, 'DELIVERED'),
('2018-10-22 14:12:46', 'Apple Iphone 6', 'Shakthi', 1, 23053, 5, 'DELIVERED'),
('2018-10-22 14:12:46', 'Apple Iphone 6', 'Shakthi', 1, 23053, 5, 'DELIVERED'),
('2018-10-22 14:13:58', 'Apple Iphone 6', 'Shakthi', 1, 23053, 6, 'DELIVERED'),
('2018-10-22 14:13:58', 'Apple Iphone 6', 'Shakthi', 1, 23053, 6, 'DELIVERED'),
('2018-10-22 14:14:06', 'Apple Iphone 6', 'Shakthi', 1, 23053, 7, 'NOT DELIVERED'),
('2018-10-22 14:14:06', 'Apple Iphone 8 plus', 'Shakthi', 1, 69900, 7, 'NOT DELIVERED'),
('2018-10-22 14:14:20', 'Apple Iphone 6', 'Shakthi', 1, 23053, 8, 'NOT DELIVERED'),
('2018-10-22 14:14:20', 'Apple Iphone 8 plus', 'Shakthi', 1, 69900, 8, 'NOT DELIVERED'),
('2018-10-22 14:15:56', 'Apple Iphone 6', 'Shakthi', 1, 23053, 9, 'NOT DELIVERED'),
('2018-10-22 14:15:56', 'Apple Iphone 8 plus', 'Shakthi', 1, 69900, 9, 'NOT DELIVERED'),
('2018-10-22 14:17:46', 'Apple Iphone 6', 'Shakthi', 1, 23053, 10, 'NOT DELIVERED'),
('2018-10-22 14:17:46', 'Apple Iphone 8 plus', 'Shakthi', 2, 139800, 10, 'NOT DELIVERED'),
('2018-10-22 14:48:41', 'Apple Iphone X', 'Shakthi', 1, 89358, 11, 'NOT DELIVERED'),
('2018-10-22 14:48:41', 'Nokia 3', 'Shakthi', 1, 7500, 11, 'NOT DELIVERED'),
('2018-10-23 06:20:01', 'LG LTE 10', 'Shakthi', 2, 200000, 14, 'NOT DELIVERED'),
('2018-10-23 10:26:13', 'LG LTE 10', 'Shakthi', 1, 100000, 15, 'NOT DELIVERED'),
('2018-10-23 10:26:13', 'Apple Iphone 8 plus', 'Shakthi', 2, 139800, 15, 'NOT DELIVERED'),
('2018-10-23 10:26:13', 'Nokia 3', 'Shakthi', 1, 7500, 15, 'NOT DELIVERED'),
('2018-10-25 06:59:15', 'LG LTE 10', 'Shakthi', 1, 100000, 19, 'NOT DELIVERED'),
('2018-10-25 06:59:15', 'Honor 7X', 'Shakthi', 1, 9999, 19, 'NOT DELIVERED'),
('2018-10-25 06:59:35', 'LG LTE 10', 'Shakthi', 1, 100000, 20, 'NOT DELIVERED'),
('2018-10-25 06:59:35', 'Honor 7X', 'Shakthi', 1, 9999, 20, 'NOT DELIVERED'),
('2018-10-25 07:00:04', 'LG LTE 10', 'Shakthi', 1, 100000, 21, 'NOT DELIVERED'),
('2018-10-25 07:00:04', 'Honor 7X', 'Shakthi', 1, 9999, 21, 'NOT DELIVERED'),
('2018-10-25 07:01:20', 'LG LTE 10', 'Shakthi', 2, 200000, 22, 'NOT DELIVERED'),
('2018-10-25 07:01:20', 'Honor 7X', 'Shakthi', 1, 9999, 22, 'NOT DELIVERED'),
('2018-10-25 07:02:21', 'LG LTE 10', 'Shakthi', 2, 200000, 23, 'NOT DELIVERED'),
('2018-10-25 07:02:21', 'Honor 7X', 'Shakthi', 1, 9999, 23, 'NOT DELIVERED'),
('2018-10-25 07:15:48', 'Apple Iphone X', 'Rohan', 1, 89358, 24, 'NOT DELIVERED'),
('2018-10-25 07:15:48', 'Nokia 3', 'Rohan', 1, 7500, 24, 'NOT DELIVERED'),
('2018-10-25 07:15:48', 'Apple Iphone 6', 'Rohan', 1, 23053, 24, 'NOT DELIVERED'),
('2018-10-25 07:16:50', 'Apple Iphone X', 'Rohan', 1, 89358, 25, 'NOT DELIVERED'),
('2018-10-25 07:16:50', 'Nokia 3', 'Rohan', 1, 7500, 25, 'NOT DELIVERED'),
('2018-10-25 07:16:50', 'Apple Iphone 6', 'Rohan', 1, 23053, 25, 'NOT DELIVERED'),
('2018-10-25 07:17:54', 'Nokia 3', 'Rohan', 1, 7500, 26, 'NOT DELIVERED'),
('2018-10-25 07:18:43', 'Nokia 3', 'Rohan', 1, 7500, 27, 'NOT DELIVERED'),
('2018-10-25 07:18:43', 'LG LTE 10', 'Rohan', 1, 100000, 27, 'NOT DELIVERED'),
('2018-10-25 07:19:41', 'Nokia 3', 'Rohan', 1, 7500, 28, 'NOT DELIVERED'),
('2018-10-25 07:19:41', 'LG LTE 10', 'Rohan', 1, 100000, 28, 'NOT DELIVERED'),
('2018-10-25 07:21:30', 'Nokia 3', 'Rohan', 1, 7500, 29, 'NOT DELIVERED'),
('2018-10-25 07:21:30', 'LG LTE 10', 'Rohan', 2, 200000, 29, 'NOT DELIVERED'),
('2018-10-25 07:23:46', 'Nokia 3', 'Rohan', 1, 7500, 30, 'NOT DELIVERED'),
('2018-10-25 07:23:46', 'LG LTE 10', 'Rohan', 3, 300000, 30, 'NOT DELIVERED'),
('2018-10-25 07:24:27', 'Nokia 3', 'Rohan', 1, 7500, 31, 'NOT DELIVERED'),
('2018-10-25 07:24:27', 'LG LTE 10', 'Rohan', 4, 400000, 31, 'NOT DELIVERED'),
('2018-10-25 07:25:44', 'Nokia 3', 'Rohan', 1, 7500, 32, 'NOT DELIVERED'),
('2018-10-25 07:25:44', 'LG LTE 10', 'Rohan', 5, 500000, 32, 'NOT DELIVERED'),
('2018-10-25 07:26:33', 'Nokia 3', 'Rohan', 1, 7500, 33, 'NOT DELIVERED'),
('2018-10-25 07:26:33', 'LG LTE 10', 'Rohan', 5, 500000, 33, 'NOT DELIVERED'),
('2018-10-25 07:27:48', 'Nokia 3', 'Rohan', 1, 7500, 34, 'NOT DELIVERED'),
('2018-10-25 07:27:48', 'LG LTE 10', 'Rohan', 5, 500000, 34, 'NOT DELIVERED'),
('2018-10-25 07:41:00', 'Nokia 3', 'Shakthi', 2, 15000, 36, 'NOT DELIVERED'),
('2018-10-25 07:41:00', 'Honor 7X', 'Shakthi', 1, 9999, 36, 'NOT DELIVERED'),
('2018-10-25 08:47:01', 'Honor 7X', 'Karthikeyan iyer', 1, 9999, 37, 'NOT DELIVERED'),
('2018-10-25 09:09:35', 'Apple Iphone 6', 'Karthikeyan iyer', 1, 23053, 38, 'NOT DELIVERED'),
('2018-10-25 09:09:35', 'Real Me 1', 'Karthikeyan iyer', 1, 10490, 38, 'NOT DELIVERED'),
('2018-10-25 12:53:47', 'Apple Iphone 6', 'Shakthi', 1, 23053, 39, 'NOT DELIVERED'),
('2018-10-25 12:53:47', 'Xiaomi Redmi 6A', 'Shakthi', 1, 100000, 39, 'NOT DELIVERED'),
('2018-10-29 10:13:06', 'Honor 7X', 'Shakthi', 1, 9999, 40, 'NOT DELIVERED'),
('2019-01-30 10:16:40', 'Redmi Y2', 'Shakthi', 1, 12999, 41, 'NOT DELIVERED'),
('2019-01-30 11:14:23', 'Honor 7X', 'Shakthi', 2, 19998, 43, 'NOT DELIVERED'),
('2019-04-01 17:06:21', 'hkj', 'Shakthi', 1, 13, 44, 'NOT DELIVERED');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `UserID` int(255) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `EMail` varchar(100) NOT NULL,
  `Address` text NOT NULL,
  `Password` varchar(10) NOT NULL,
  `Type` varchar(10) NOT NULL DEFAULT 'Customer',
  `Contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`UserID`, `Name`, `EMail`, `Address`, `Password`, `Type`, `Contact`) VALUES
(1, 'Shakthi', 'Shakthi.mudaliar16@siesgst.ac.in', 'Ambika sadan BG1,Khuntavli,Ambernath(west)', '123', 'Customer', '8149071084'),
(2, 'Karthikeyan iyer', 'Karthik.iyer@gmail.com', 'Ambika sadan BG1,Khuntavli,Ambernath(west)', '123', 'Customer', '1234567789'),
(3, 'Sabestin', 'sabestin.nadar16@siesgst.ac.in', 'noorani apt,room 179 ,near alishan theatre,mumbra,thane dist- 400612', 'abcd', 'Customer', '9167647858'),
(4, 'Shakthi mudaliar', 'Shakthi.mudaliar@siesgst.ac.in', 'Ambika sadan BG1,Khuntavli,Ambernath(west)', '1234', '', '8149071084'),
(5, 'Rohan', 'Rohan@yahoo.com', 'Ambika sadan BG1,Khuntavli,Ambernath(west)', '753', '', '1234567789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`pID`);

--
-- Indexes for table `orderid`
--
ALTER TABLE `orderid`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `pID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orderid`
--
ALTER TABLE `orderid`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `UserID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
