-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 25, 2024 at 12:19 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_lms`
--
CREATE DATABASE IF NOT EXISTS `db_lms` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_lms`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `borrower`
--

CREATE TABLE IF NOT EXISTS `borrower` (
  `borrower_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `tax_id` varchar(20) NOT NULL,
  PRIMARY KEY (`borrower_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, 'Seyi Femi-Lawal', 'femilawalseyi@gmail.com', 2147483647, 'qwertyuioplkjhgfdsazxcvbnmnqqqqqqqqqqqqqqqqqqqqqq');

-- --------------------------------------------------------

--
-- Table structure for table `income_expenses`
--

CREATE TABLE IF NOT EXISTS `income_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `i_amount` int(20) NOT NULL,
  `i_particulars` varchar(250) NOT NULL,
  `e_amount` int(20) NOT NULL,
  `e_particulars` varchar(250) NOT NULL,
  `transactiondate` varchar(15) NOT NULL,
  `profit` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `income_expenses`
--

INSERT INTO `income_expenses` (`id`, `i_amount`, `i_particulars`, `e_amount`, `e_particulars`, `transactiondate`, `profit`) VALUES
(1, 10000, 'qwertyui opsd', 5000, 'qwzas cefr ', '2024-02-24', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `investment`
--

CREATE TABLE IF NOT EXISTS `investment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `home_address` varchar(250) NOT NULL,
  `office_address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `origin` varchar(80) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `occupation` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `kin_name` varchar(80) NOT NULL,
  `kin_address` varchar(250) NOT NULL,
  `kin_phone` int(11) NOT NULL,
  `kin_relationship` varchar(50) NOT NULL,
  `investment_amount` int(15) NOT NULL,
  `amount_in_words` varchar(200) NOT NULL,
  `interest` varchar(100) NOT NULL,
  `tenure` varchar(50) NOT NULL,
  `investment_type_upfront` varchar(200) NOT NULL,
  `investment_type_others` varchar(200) NOT NULL,
  `account_name` varchar(80) NOT NULL,
  `bank_name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_no` (`account_no`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `investment`
--

INSERT INTO `investment` (`id`, `account_no`, `name`, `home_address`, `office_address`, `phone`, `origin`, `dob`, `gender`, `marital_status`, `occupation`, `email`, `kin_name`, `kin_address`, `kin_phone`, `kin_relationship`, `investment_amount`, `amount_in_words`, `interest`, `tenure`, `investment_type_upfront`, `investment_type_others`, `account_name`, `bank_name`) VALUES
(1, 1234567890, 'Seyi Femi-Lawal', 'Oyigbo', 'akure', 2147483647, 'Ondo', '123456', 'male', 'single', 'lawyer', 'femilawalseyi@gmail.com', 'Seyi Femi-Lawal', 'Oyigbo', 0, 'father', 5000, 'five thousand naira', '2 percent', '2 years', 'upfront', 'others', 'Oluwadamilare', 'Palmpay '),
(2, 123456789, 'Seyi Femi-Lawal', 'Oyigbo', 'futa', 2147483647, 'Ondo', '123452', 'uqbwf', 'aRffd', 'doctor', 'femilawalseyi@gmail.com', 'Seyi Femi-Lawal', 'Oyigbo', 0, 'GVYEWEL', 20000, 'SHDBFGKVHDJFD', 'gEFWW', 'WEGFVKWJH', 'LUEBH FBVUWE', 'IBTAWHL', 'Oluwadamilare', 'Palmpay ');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(50) NOT NULL,
  `ltype_id` int(30) NOT NULL,
  `borrower_id` int(30) NOT NULL,
  `purpose` text NOT NULL,
  `amount` double NOT NULL,
  `lplan_id` int(30) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0=request, 1=confirmed, 2=released, 3=completed, 4=denied',
  `date_released` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`loan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loanpage`
--

CREATE TABLE IF NOT EXISTS `loanpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(11) NOT NULL,
  `bankname_accountno` varchar(80) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` int(11) NOT NULL,
  `r_address` varchar(250) NOT NULL,
  `office_address` varchar(255) NOT NULL,
  `dob` varchar(15) NOT NULL,
  `valid_id_detail` varchar(255) NOT NULL,
  `marital_status` text NOT NULL,
  `nature_of_business` text NOT NULL,
  `bvn` int(11) NOT NULL,
  `place_of_work` varchar(200) NOT NULL,
  `spouse_name` varchar(80) NOT NULL,
  `kin_name` varchar(80) NOT NULL,
  `kin_phone_no` varchar(20) NOT NULL,
  `kin_address` varchar(80) NOT NULL,
  `kin_relationship` text NOT NULL,
  `loan_amount` int(12) NOT NULL,
  `purpose_of_loan` varchar(150) NOT NULL,
  `monthly_income` int(12) NOT NULL,
  `monthly_repayment` int(12) NOT NULL,
  `repayment_period` varchar(60) NOT NULL,
  `source_of_repayment` varchar(80) NOT NULL,
  `details_of_cheque` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`phone`,`bvn`),
  UNIQUE KEY `account_no` (`bankname_accountno`),
  UNIQUE KEY `ref_no` (`ref_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `loanpage`
--

INSERT INTO `loanpage` (`id`, `ref_no`, `bankname_accountno`, `name`, `email`, `phone`, `r_address`, `office_address`, `dob`, `valid_id_detail`, `marital_status`, `nature_of_business`, `bvn`, `place_of_work`, `spouse_name`, `kin_name`, `kin_phone_no`, `kin_address`, `kin_relationship`, `loan_amount`, `purpose_of_loan`, `monthly_income`, `monthly_repayment`, `repayment_period`, `source_of_repayment`, `details_of_cheque`) VALUES
(1, '0000000001', 'GTB BANK/1234567890', 'Seyi Femi-Lawal', 'femilawalseyi@gmail.com', 2147483647, 'Oyigbo', 'Futa', '02/22/2004', 'qwertyuiop', 'single', 'bricklayer', 2147483647, 'futa', 'toyin', 'Lawrencium', '08066980440', 'Oyigbo', 'Father', 2000, 'school fees', 200, 50, '4 months', 'salary', 'qwertyuioplkjhff'),
(2, '0000000002', 'UBA/0987654321', 'Lawrence Emmanuel Ayodeji ', 'lawemma000@gmail.com', 2147483647, 'Oritaobele', 'Futa south gate', '02/22/2005', 'HRTUERBVHEUR', 'Married', 'jsfgnhgr', 2147483647, 'futa', 'lawrencium', 'mr Lawrence', '08066161180', 'Oritaobele', 'Mother', 10000, 'school fees', 100000, 2000, '6 months', 'salary', 'wgulbuvge ');

-- --------------------------------------------------------

--
-- Table structure for table `loan_plan`
--

CREATE TABLE IF NOT EXISTS `loan_plan` (
  `lplan_id` int(11) NOT NULL AUTO_INCREMENT,
  `lplan_month` int(11) NOT NULL,
  `lplan_interest` float NOT NULL,
  `lplan_penalty` int(11) NOT NULL,
  PRIMARY KEY (`lplan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loan_schedule`
--

CREATE TABLE IF NOT EXISTS `loan_schedule` (
  `loan_sched_id` int(50) NOT NULL AUTO_INCREMENT,
  `loan_id` int(11) NOT NULL,
  `due_date` date NOT NULL,
  PRIMARY KEY (`loan_sched_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `loan_type`
--

CREATE TABLE IF NOT EXISTS `loan_type` (
  `ltype_id` int(11) NOT NULL AUTO_INCREMENT,
  `ltype_name` text NOT NULL,
  `ltype_desc` text NOT NULL,
  PRIMARY KEY (`ltype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `outstanding`
--

CREATE TABLE IF NOT EXISTS `outstanding` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(250) NOT NULL,
  `transactiondate` varchar(60) NOT NULL,
  `outstandingamount` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `outstanding`
--

INSERT INTO `outstanding` (`id`, `ref_no`, `name`, `email`, `transactiondate`, `outstandingamount`) VALUES
(1, '0000000001', 'Seyi Femi-Lawal', 'femilawalseyi@gmail.com', '2024-02-23', 0),
(2, '0000000002', 'Lawrence Emmanuel Ayodeji ', 'lawemma000@gmail.com', '2024-02-23', -10000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` varchar(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(150) NOT NULL,
  `transactiondate` varchar(80) NOT NULL,
  `amount` int(12) NOT NULL,
  `particulars` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `ref_no`, `name`, `email`, `transactiondate`, `amount`, `particulars`) VALUES
(1, '0000000001', 'Seyi Femi-Lawal', 'femilawalseyi@gmail.com', '2024-02-23', 2000, 'payment for loan'),
(4, '0000000002', 'Lawrence Emmanuel Ayodeji ', 'lawemma000@gmail.com', '2024-02-23', 20000, 'cash deposit');

-- --------------------------------------------------------

--
-- Table structure for table `savingpage`
--

CREATE TABLE IF NOT EXISTS `savingpage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_no` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `residential_address` varchar(250) NOT NULL,
  `office_address` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `origin` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `valid_id_detail` varchar(80) NOT NULL,
  `nature_of_business` varchar(100) NOT NULL,
  `bvn` int(10) NOT NULL,
  `bank_name` varchar(80) NOT NULL,
  `kin_name` varchar(80) NOT NULL,
  `kin_address` varchar(250) NOT NULL,
  `kin_phone` int(11) NOT NULL,
  `kin_relationship` varchar(80) NOT NULL,
  `savings_amount` int(60) NOT NULL,
  `frequency` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `phone` (`phone`,`kin_phone`),
  UNIQUE KEY `account_no` (`account_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `savingpage`
--

INSERT INTO `savingpage` (`id`, `account_no`, `name`, `residential_address`, `office_address`, `phone`, `gender`, `dob`, `origin`, `email`, `valid_id_detail`, `nature_of_business`, `bvn`, `bank_name`, `kin_name`, `kin_address`, `kin_phone`, `kin_relationship`, `savings_amount`, `frequency`) VALUES
(1, 1234567890, 'Seyi Femi-Lawal', 'Oyigbo', 'akure', 2147483647, 'male', '123456', 'Ondo', 'femilawalseyi@gmail.com', 'burygue', 'aturfr', 2147483647, 'Palmpay ', 'Seyi Femi-Lawal', 'Oyigbo', 2147483647, 'father', 2000, '13');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
