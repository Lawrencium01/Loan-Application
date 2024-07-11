-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 24, 2024 at 09:54 PM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`password`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'bayo', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'tolu', 'fcea920f7412b5da7be0cf42b8c93759');

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE IF NOT EXISTS `approved` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_no` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` int(12) NOT NULL,
  `bankname` varchar(150) NOT NULL,
  `accountno` varchar(50) NOT NULL,
  `loan_amount` int(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ref_no` (`ref_no`,`name`,`email`,`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`id`, `ref_no`, `name`, `email`, `phone`, `bankname`, `accountno`, `loan_amount`) VALUES
(1, 2147483647, 'Seyi Femi-Lawal', 'femilawalseyi@gmail.com', 66980440, 'GTB', '0000000001', 34600);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `income_expenses`
--

CREATE TABLE IF NOT EXISTS `income_expenses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `principal` int(25) NOT NULL,
  `repayment` int(25) NOT NULL,
  `in_terest` int(25) NOT NULL,
  `processing_fee` int(25) NOT NULL,
  `loan_extension` int(25) NOT NULL,
  `others` int(25) NOT NULL,
  `o_particulars` varchar(255) NOT NULL,
  `i_amount` int(20) NOT NULL,
  `i_particulars` varchar(250) NOT NULL,
  `insurance` int(25) NOT NULL,
  `bank_charges` int(25) NOT NULL,
  `legal_fee` int(25) NOT NULL,
  `commission` int(25) NOT NULL,
  `rent` int(25) NOT NULL,
  `salary` int(25) NOT NULL,
  `generator` int(25) NOT NULL,
  `furniture_fitting` int(25) NOT NULL,
  `referral_bonus` int(25) NOT NULL,
  `gift` int(25) NOT NULL,
  `phcn` int(25) NOT NULL,
  `bad_debt` int(25) NOT NULL,
  `office_stationeries` int(25) NOT NULL,
  `telephone` int(25) NOT NULL,
  `internet` int(25) NOT NULL,
  `repairs` int(25) NOT NULL,
  `loan_rec` int(25) NOT NULL,
  `license` int(25) NOT NULL,
  `web_design` int(25) NOT NULL,
  `interest_savings` int(25) NOT NULL,
  `interest_investment` int(25) NOT NULL,
  `utilities` int(25) NOT NULL,
  `e_amount` int(25) NOT NULL,
  `e_particulars` varchar(250) NOT NULL,
  `transactiondate` varchar(15) NOT NULL,
  `profit` int(15) NOT NULL,
  `month` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `accountno` varchar(80) NOT NULL,
  `bankname` varchar(80) NOT NULL,
  `accountname` varchar(80) NOT NULL,
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
  `interest` int(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`,`phone`,`bvn`),
  UNIQUE KEY `ref_no` (`ref_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
