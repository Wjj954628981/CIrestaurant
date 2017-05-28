-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 17, 2017 at 12:46 PM
-- Server version: 5.6.35
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `db_res`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `idorder` int(11) NOT NULL,
  `appointment_time` datetime DEFAULT NULL,
  `appointment_contact` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `table_idtable` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `idemployee` int(11) NOT NULL,
  `employee_name` varchar(45) DEFAULT NULL,
  `employeecol_ position` varchar(45) DEFAULT NULL,
  `join_time` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `label`
--

CREATE TABLE `label` (
  `idlabel` int(11) NOT NULL,
  `label_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `idmaterial` int(11) NOT NULL,
  `material_name` varchar(45) DEFAULT NULL,
  `material_num` int(11) DEFAULT NULL,
  `material_min` int(11) DEFAULT NULL,
  `material_ unit` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` int(11) NOT NULL,
  `dish_name` varchar(45) DEFAULT NULL,
  `dish_price` varchar(45) DEFAULT NULL,
  `dish_type` int(11) DEFAULT NULL,
  `dish_description` varchar(200) DEFAULT NULL,
  `dish_photo` varchar(45) DEFAULT NULL,
  `dish_state` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idorder` int(11) NOT NULL,
  `order_time` datetime DEFAULT NULL,
  `table_idtable` int(11) NOT NULL,
  `menu_idmenu` int(11) NOT NULL,
  `order_state` int(11) DEFAULT NULL,
  `order_description` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `table`
--

CREATE TABLE `table` (
  `idtable` int(11) NOT NULL,
  `state` int(11) DEFAULT NULL,
  `table_num` int(11) DEFAULT NULL,
  `table_type` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `idUser` int(11) NOT NULL,
  `user_type` int(11) DEFAULT NULL COMMENT '0为客户；1为服务员；2为厨师；10为大堂经理',
  `username` varchar(45) DEFAULT NULL,
  `userpassword` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`idUser`, `user_type`, `username`, `userpassword`) VALUES
(1, 1, 'watier1', '1'),
(2, 2, 'cook1', '1'),
(3, 10, 'manager1', '1'),
(4, 1, 'waiter2', '1'),
(7, 2, 'cook2', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `fk_appointment_table1_idx` (`table_idtable`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idemployee`);

--
-- Indexes for table `label`
--
ALTER TABLE `label`
  ADD PRIMARY KEY (`idlabel`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`idmaterial`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`),
  ADD KEY `fk_order_table_idx` (`table_idtable`),
  ADD KEY `fk_order_menu1_idx` (`menu_idmenu`);

--
-- Indexes for table `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`idtable`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `fk_appointment_table1` FOREIGN KEY (`table_idtable`) REFERENCES `table` (`idtable`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_menu1` FOREIGN KEY (`menu_idmenu`) REFERENCES `menu` (`idmenu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_table` FOREIGN KEY (`table_idtable`) REFERENCES `table` (`idtable`) ON DELETE NO ACTION ON UPDATE NO ACTION;
