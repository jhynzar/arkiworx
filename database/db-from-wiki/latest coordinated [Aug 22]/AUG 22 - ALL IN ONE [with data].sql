-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2018 at 10:10 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arkiworxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccounts`
--

CREATE TABLE `tblaccounts` (
  `intAccountId` int(11) NOT NULL,
  `varUserName` varchar(45) NOT NULL,
  `varPassWord` varchar(45) NOT NULL,
  `strUserType` char(25) NOT NULL,
  `intActive` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblaccounts`
--

INSERT INTO `tblaccounts` (`intAccountId`, `varUserName`, `varPassWord`, `strUserType`, `intActive`) VALUES
(666, 'Erwin6', 'abcd1234', 'Admin', '1'),
(777, 'Julia7', '1234abcd', 'Engineer', '1'),
(888, 'DusRos', '12345678', 'Client', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblclient`
--

CREATE TABLE `tblclient` (
  `intClientId` int(11) NOT NULL,
  `strClientFName` char(25) NOT NULL,
  `strClientMName` char(25) DEFAULT NULL,
  `strClientLName` char(25) NOT NULL,
  `strClientSex` char(10) NOT NULL,
  `dtmClientBDay` date DEFAULT NULL,
  `varClientEMail` varchar(45) NOT NULL,
  `varClientContactNo` varchar(45) NOT NULL,
  `intClientHouseNo` int(11) NOT NULL,
  `strClientStreet` varchar(45) NOT NULL,
  `strClientBrgy` varchar(45) NOT NULL,
  `strClientCity` char(45) NOT NULL,
  `intAccountId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblclient`
--

INSERT INTO `tblclient` (`intClientId`, `strClientFName`, `strClientMName`, `strClientLName`, `strClientSex`, `dtmClientBDay`, `varClientEMail`, `varClientContactNo`, `intClientHouseNo`, `strClientStreet`, `strClientBrgy`, `strClientCity`, `intAccountId`) VALUES
(888, 'Dus', 'Ros', 'Erwin', 'Female', '2000-01-01', 'lol@gmail.com', '09111111111', 1, '12', 'barangay', 'city', 888);

-- --------------------------------------------------------

--
-- Table structure for table `tblemployee`
--

CREATE TABLE `tblemployee` (
  `intEmployeeId` int(11) NOT NULL,
  `strEmployeeFName` char(25) NOT NULL,
  `strEmployeeMName` char(25) DEFAULT NULL,
  `strEmployeeLName` char(25) NOT NULL,
  `strEmployeeSex` char(10) NOT NULL,
  `dtmEmployeeBDay` date DEFAULT NULL,
  `varEmployeeEMail` varchar(45) NOT NULL,
  `varEmployeeContactNo` varchar(45) NOT NULL,
  `intEmployeeHouseNo` varchar(45) NOT NULL,
  `strEmployeeStreet` varchar(45) NOT NULL,
  `strEmployeeBrgy` varchar(45) NOT NULL,
  `strEmployeeCity` char(45) NOT NULL,
  `intAccountId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblemployee`
--

INSERT INTO `tblemployee` (`intEmployeeId`, `strEmployeeFName`, `strEmployeeMName`, `strEmployeeLName`, `strEmployeeSex`, `dtmEmployeeBDay`, `varEmployeeEMail`, `varEmployeeContactNo`, `intEmployeeHouseNo`, `strEmployeeStreet`, `strEmployeeBrgy`, `strEmployeeCity`, `intAccountId`) VALUES
(666, 'Erwin', 'Abriol', 'Andres', 'Male', '1999-05-30', 'eaa03niwre@gmail.com', '09550956605', '63', 'H. Bautista Street', 'Concepcion Uno', 'Marikina City', 666),
(777, 'Juliamar', 'Juju', 'Soriano', 'Female', '1998-04-28', 'hamartia28@gmail.com', '09987654321', '77', 'Maputisha Street', 'Pirubatganern ', 'Manila', 777);

-- --------------------------------------------------------

--
-- Table structure for table `tblformulavalues`
--

CREATE TABLE `tblformulavalues` (
  `intFormulaValueId` int(11) NOT NULL,
  `intHorizontalOptionsId` int(11) NOT NULL,
  `intVerticalOptionsId` int(11) NOT NULL,
  `decValue` decimal(15,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblformulavalues`
--

INSERT INTO `tblformulavalues` (`intFormulaValueId`, `intHorizontalOptionsId`, `intVerticalOptionsId`, `decValue`) VALUES
(1, 1, 1, '12.0000'),
(2, 1, 2, '9.0000'),
(3, 1, 3, '7.5000'),
(4, 1, 4, '6.0000'),
(5, 2, 5, '3.7640'),
(6, 2, 6, '3.0620'),
(7, 2, 7, '2.5840'),
(8, 2, 8, '2.2320'),
(9, 2, 9, '1.9800'),
(10, 2, 10, '1.7860'),
(11, 2, 11, '1.6270'),
(12, 3, 5, '2.9370'),
(13, 3, 6, '2.3810'),
(14, 3, 7, '2.0040'),
(15, 3, 8, '1.7260'),
(16, 3, 9, '1.5280'),
(17, 3, 10, '1.3690'),
(18, 3, 11, '1.2500'),
(19, 4, 5, '2.4210'),
(20, 4, 6, '1.9340'),
(21, 4, 7, '1.6360'),
(22, 4, 8, '1.4070'),
(23, 4, 9, '1.2580'),
(24, 4, 10, '1.1090'),
(25, 4, 11, '1.0140'),
(26, 5, 5, '1.7690'),
(27, 5, 6, '1.4270'),
(28, 5, 7, '1.1970'),
(29, 5, 8, '1.0330'),
(30, 5, 9, '0.9140'),
(31, 5, 10, '0.8100'),
(32, 5, 11, '0.7360'),
(33, 6, 12, '0.4740'),
(34, 6, 13, '0.3160'),
(35, 6, 14, '0.2280'),
(36, 6, 15, '0.1680'),
(37, 6, 16, '0.1320'),
(38, 6, 17, '0.1100'),
(39, 6, 18, '0.0890'),
(40, 7, 12, '0.6320'),
(41, 7, 13, '0.4220'),
(42, 7, 14, '0.3030'),
(43, 7, 15, '0.2240'),
(44, 7, 16, '0.1750'),
(45, 7, 17, '0.1470'),
(46, 7, 18, '0.1180'),
(47, 8, 12, '0.4620'),
(48, 8, 13, '0.3070'),
(49, 8, 14, '0.2170'),
(50, 8, 15, '0.1620'),
(51, 8, 16, '0.1260'),
(52, 8, 17, '0.1020'),
(53, 8, 18, '0.0860'),
(54, 9, 12, '0.6160'),
(55, 9, 13, '0.4090'),
(56, 9, 14, '0.2890'),
(57, 9, 15, '0.2160'),
(58, 9, 16, '0.1680'),
(59, 9, 17, '0.1350'),
(60, 9, 18, '0.1140'),
(61, 10, 12, '0.4600'),
(62, 10, 13, '0.2950'),
(63, 10, 14, '0.2140'),
(64, 10, 15, '0.1580'),
(65, 10, 16, '0.1250'),
(66, 10, 17, '0.0990'),
(67, 10, 18, '0.0810'),
(68, 11, 12, '0.6140'),
(69, 11, 13, '0.3940'),
(70, 11, 14, '0.2850'),
(71, 11, 15, '0.2100'),
(72, 11, 16, '0.1670'),
(73, 11, 17, '0.1320'),
(74, 11, 18, '0.1080'),
(75, 12, 12, '0.4480'),
(76, 12, 13, '0.2930'),
(77, 12, 14, '0.2070'),
(78, 12, 15, '0.1530'),
(79, 12, 16, '0.1200'),
(80, 12, 17, '0.0950'),
(81, 12, 18, '0.0770'),
(82, 13, 12, '0.5980'),
(83, 13, 13, '0.3910'),
(84, 13, 14, '0.2760'),
(85, 13, 15, '0.2040'),
(86, 13, 16, '0.1600'),
(87, 13, 17, '0.1260'),
(88, 13, 18, '0.1030'),
(89, 14, 19, '2.9300'),
(90, 15, 19, '2.1300'),
(91, 16, 19, '1.6000'),
(92, 17, 20, '0.0650'),
(93, 17, 21, '0.0860'),
(94, 18, 20, '0.0470'),
(95, 18, 21, '0.0630'),
(96, 19, 20, '0.0290'),
(97, 19, 21, '0.0390'),
(98, 20, 20, '0.0440'),
(99, 20, 21, '0.0570'),
(100, 21, 20, '0.0320'),
(101, 21, 21, '0.0420'),
(102, 22, 20, '0.0240'),
(103, 22, 21, '0.0320'),
(104, 23, 20, '0.0180'),
(105, 23, 21, '0.0240');

-- --------------------------------------------------------

--
-- Table structure for table `tblhorizontaloptions`
--

CREATE TABLE `tblhorizontaloptions` (
  `intHorizontalOptionsId` int(11) NOT NULL,
  `strDesc` varchar(45) NOT NULL,
  `intWorksFormulaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblhorizontaloptions`
--

INSERT INTO `tblhorizontaloptions` (`intHorizontalOptionsId`, `strDesc`, `intWorksFormulaId`) VALUES
(1, 'Cement Bag 40kg', 1),
(2, '6.00m', 2),
(3, '7.50m', 2),
(4, '9.00m', 2),
(5, '12.00m', 2),
(6, '30cm-6m', 3),
(7, '40cm-6m', 3),
(8, '30cm-7.5m', 3),
(9, '40cm-7.5m', 3),
(10, '30cm-9m', 3),
(11, '40cm-9m', 3),
(12, '30cm-12m', 3),
(13, '40cm-12m', 3),
(14, '40cm', 4),
(15, '60cm', 4),
(16, '80cm', 4),
(17, '2-40cm', 5),
(18, '3-40cm', 5),
(19, '4-40cm', 5),
(20, '2-60cm', 5),
(21, '3-60cm', 5),
(22, '4-60cm', 5),
(23, '2-80cm', 5),
(24, '3-80cm', 5),
(25, '4-80cm', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbllabouractualshistory`
--

CREATE TABLE `tbllabouractualshistory` (
  `intLabourActualsHistory` int(11) NOT NULL,
  `decCost` decimal(15,2) NOT NULL,
  `dtmDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `intLabourActualId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbllabourcost`
--

CREATE TABLE `tbllabourcost` (
  `intLabourActualId` int(11) NOT NULL,
  `decLabourEstimate` decimal(15,2) NOT NULL,
  `decLabourActual` decimal(15,2) NOT NULL,
  `iintProjectId` int(11) NOT NULL,
  `intWorkSubCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmaterialactuals`
--

CREATE TABLE `tblmaterialactuals` (
  `intMaterialActualsId` int(11) NOT NULL,
  `intMaterialId` int(11) NOT NULL,
  `intProjectId` int(11) NOT NULL,
  `intWorkSubCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmaterialactualshistory`
--

CREATE TABLE `tblmaterialactualshistory` (
  `intMaterialActualsHistoryId` int(11) NOT NULL,
  `intQty` int(11) NOT NULL,
  `decCost` decimal(15,2) NOT NULL,
  `dtmDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `intMaterialActualsId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblmaterialestimates`
--

CREATE TABLE `tblmaterialestimates` (
  `intMaterialEstimatesId` int(11) NOT NULL,
  `intQty` int(11) NOT NULL,
  `decCost` decimal(15,2) NOT NULL,
  `intMaterialId` int(11) NOT NULL,
  `intProjectId` int(11) NOT NULL,
  `intWorkSubCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmaterialestimates`
--

INSERT INTO `tblmaterialestimates` (`intMaterialEstimatesId`, `intQty`, `decCost`, `intMaterialId`, `intProjectId`, `intWorkSubCategoryId`) VALUES
(1, 10, '5000.00', 1, 1, 5),
(2, 5, '600.00', 1, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `tblmaterials`
--

CREATE TABLE `tblmaterials` (
  `intMaterialId` int(11) NOT NULL,
  `strMaterialName` varchar(45) NOT NULL,
  `strUnit` char(5) NOT NULL,
  `intActive` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblmaterials`
--

INSERT INTO `tblmaterials` (`intMaterialId`, `strMaterialName`, `strUnit`, `intActive`) VALUES
(1, 'cement 40kg', 'bags', '1'),
(2, 'sand', 'cum', '1'),
(3, 'gravel', 'cum', '1'),
(4, 'Main bars-12mm�', 'pcs', '1'),
(5, 'ties/stirrups bars-10mm�', 'pcs', '1'),
(6, 'Tie wire', 'kgs', '1'),
(7, 'bars-10mm�', 'pcs', '1'),
(8, '2x6 tubular rafter', 'pcs', '1'),
(9, '2x6 C purlins', 'pcs', '1'),
(10, '2x3 C purlins', 'pcs', '1'),
(11, 'sog rod 10mm', 'pcs', '1'),
(12, 'cleats-10mm bar', 'pcs', '1'),
(13, 'Scaffolding - for beam and painting', 'lot', '1'),
(14, 'Dowel bars-10mm�', 'pcs', '1'),
(15, '5\" chb wall', 'pcs', '1'),
(16, '4\" chb wall', 'pcs', '1'),
(17, 'roof sheet w/ insullation', 'sm', '1'),
(18, 'gutter', 'lm', '1'),
(19, 'end flashing', 'lm', '1'),
(20, 'flashing on firewall', 'lm', '1'),
(21, 'fascia bd 1x10', 'lm', '1'),
(22, 'window W1', 'pcs', '1'),
(23, 'window W2', 'pcs', '1'),
(24, 'window W3', 'pc', '1'),
(25, 'door D1', 'pc', '1'),
(26, 'door D2', 'pc', '1'),
(27, 'door D3', 'pc', '1'),
(28, 'door stopper', 'pcs', '1'),
(29, 'service door knob', 'pc', '1'),
(30, 'doorknob', 'pcs', '1'),
(31, '1/4 hardiflex - for toilet', 'pcs', '1'),
(32, '1/4 plywood marine', 'pcs', '1'),
(33, '2x2x3 ceiling haner', 'pcs', '1'),
(34, '2x2x3 ceiling joist', 'pcs', '1'),
(35, 'kitchen cabinet', 'set', '1'),
(36, 'door jamb', 'pcs', '1'),
(37, 'sanding paper', 'pcs', '1'),
(38, 'flat coating', 'gal', '1'),
(39, 'patching compound + glazing putty', 'set', '1'),
(40, 'flat first coating', 'gal', '1'),
(41, 'semi gloss latex', 'gal', '1'),
(42, 'skim coat', 'bags', '1'),
(43, '#14 THHN', 'box', '1'),
(44, '#12 THHN', 'box', '1'),
(45, '#10 THHN', 'box', '1'),
(46, '3/4\" Electrical Pipe PVC Conduit', 'pcs', '1'),
(47, 'pvc clips', 'pcs', '1'),
(48, 'bushing', 'pcs', '1'),
(49, 'lights', 'pcs', '1'),
(50, 'junction box', 'pcs', '1'),
(51, 'light switch + utility box', 'pcs', '1'),
(52, 'current outlets + cover + utility box', 'pcs', '1'),
(53, '4\" SaniGuard PVC Pipe', 'pcs', '1'),
(54, '3\" SaniGuard PVC Pipe', 'pcs', '1'),
(55, '2\" SaniGuard PCS Pipe', 'pcs', '1'),
(56, '3/4\" Waterline Pipe', 'pcs', '1'),
(57, '1/2 Waterline Pipe', 'pcs', '1'),
(58, 'PVC Cement', 'can', '1'),
(59, 'sealants', 'lot', '1'),
(60, 'assorted fittings', 'pcs', '1'),
(61, 'kitchen sink', 'pcs', '1'),
(62, 'faucet', 'pcs', '1'),
(63, 'lavatory faucet', 'pcs', '1'),
(64, 'kitchen faucet', 'pcs', '1'),
(65, 'floor drain', 'pcs', '1'),
(66, 'shower head', 'pcs', '1'),
(67, 'water closet', 'pcs', '1'),
(68, 'Lavatory \"HCG\"', 'pcs', '1'),
(69, 'Catch Basins', 'pcs', '1'),
(70, 'septic tank', 'lot', '1'),
(71, '24x24', 'pcs', '1'),
(72, 'tile adhesive', 'bags', '1'),
(73, 'tile grout', 'bags', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tblprice`
--

CREATE TABLE `tblprice` (
  `intPriceId` int(11) NOT NULL,
  `dtmPriceAsOf` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `decPrice` decimal(15,2) NOT NULL,
  `intMaterialId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblprice`
--

INSERT INTO `tblprice` (`intPriceId`, `dtmPriceAsOf`, `decPrice`, `intMaterialId`) VALUES
(1, '2018-08-22 19:26:00', '4000.00', 1),
(2, '2018-08-22 19:26:00', '1500.00', 2),
(3, '2018-08-22 19:26:00', '1500.00', 3),
(4, '2018-08-22 19:26:00', '350.00', 4),
(5, '2018-08-22 19:26:00', '350.00', 5),
(6, '2018-08-22 19:26:00', '600.00', 6),
(7, '2018-08-22 19:26:00', '235.00', 7),
(8, '2018-08-22 19:26:00', '800.00', 8),
(9, '2018-08-22 19:26:00', '1500.00', 9),
(10, '2018-08-22 19:26:00', '182.00', 10),
(11, '2018-08-22 19:26:00', '122.00', 11),
(12, '2018-08-22 19:26:00', '60.00', 12),
(13, '2018-08-22 19:26:00', '122.00', 13),
(14, '2018-08-22 19:26:00', '6000.00', 14),
(15, '2018-08-22 19:26:00', '700.00', 15),
(16, '2018-08-22 19:26:00', '500.00', 16),
(17, '2018-08-22 19:26:00', '122.00', 17),
(18, '2018-08-22 19:26:00', '122.00', 18),
(19, '2018-08-22 19:26:00', '25000.00', 19),
(20, '2018-08-22 19:26:00', '122.00', 20),
(21, '2018-08-22 19:26:00', '15.00', 21),
(22, '2018-08-22 19:26:00', '10.00', 22),
(23, '2018-08-22 19:26:00', '450.00', 23),
(24, '2018-08-22 19:26:00', '50.00', 24),
(25, '2018-08-22 19:26:00', '100.00', 25),
(26, '2018-08-22 19:26:00', '50.00', 26),
(27, '2018-08-22 19:26:00', '75.00', 27),
(28, '2018-08-22 19:26:00', '2500.00', 28),
(29, '2018-08-22 19:26:00', '1800.00', 29),
(30, '2018-08-22 19:26:00', '1200.00', 30),
(31, '2018-08-22 19:26:00', '4500.00', 31),
(32, '2018-08-22 19:26:00', '3500.00', 32),
(33, '2018-08-22 19:26:00', '2500.00', 33),
(34, '2018-08-22 19:26:00', '150.00', 34),
(35, '2018-08-22 19:26:00', '1500.00', 35),
(36, '2018-08-22 19:26:00', '600.00', 36),
(37, '2018-08-22 19:26:00', '800.00', 37),
(38, '2018-08-22 19:26:00', '400.00', 38),
(39, '2018-08-22 19:26:00', '285.00', 39),
(40, '2018-08-22 19:26:00', '285.00', 40),
(41, '2018-08-22 19:26:00', '8000.00', 41),
(42, '2018-08-22 19:26:00', '1500.00', 42),
(43, '2018-08-22 19:26:00', '12.00', 43),
(44, '2018-08-22 19:26:00', '450.00', 44),
(45, '2018-08-22 19:26:00', '600.00', 45),
(46, '2018-08-22 19:26:00', '450.00', 46),
(47, '2018-08-22 19:26:00', '600.00', 47),
(48, '2018-08-22 19:26:00', '550.00', 48),
(49, '2018-08-22 19:26:00', '2100.00', 49),
(50, '2018-08-22 19:26:00', '3100.00', 50),
(51, '2018-08-22 19:26:00', '4700.00', 51),
(52, '2018-08-22 19:26:00', '100.00', 52),
(53, '2018-08-22 19:26:00', '3.00', 53),
(54, '2018-08-22 19:26:00', '10.00', 54),
(55, '2018-08-22 19:26:00', '500.00', 55),
(56, '2018-08-22 19:26:00', '25.00', 56),
(57, '2018-08-22 19:26:00', '200.00', 57),
(58, '2018-08-22 19:26:00', '200.00', 58),
(59, '2018-08-22 19:26:00', '750.00', 59),
(60, '2018-08-22 19:26:00', '560.00', 60),
(61, '2018-08-22 19:26:00', '260.00', 61),
(62, '2018-08-22 19:26:00', '120.00', 62),
(63, '2018-08-22 19:26:00', '75.00', 63),
(64, '2018-08-22 19:26:00', '70.00', 64),
(65, '2018-08-22 19:26:00', '250.00', 65),
(66, '2018-08-22 19:26:00', '100.00', 66),
(67, '2018-08-22 19:26:00', '2500.00', 67),
(68, '2018-08-22 19:26:00', '300.00', 68),
(69, '2018-08-22 19:26:00', '1000.00', 69),
(70, '2018-08-22 19:26:00', '1000.00', 70),
(71, '2018-08-22 19:26:00', '250.00', 71),
(72, '2018-08-22 19:26:00', '1500.00', 72),
(73, '2018-08-22 19:26:00', '4000.00', 73);

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

CREATE TABLE `tblproject` (
  `intProjectId` int(11) NOT NULL,
  `strProjectName` varchar(30) NOT NULL,
  `txtProjectDesc` text NOT NULL,
  `strProjectStatus` char(25) NOT NULL,
  `strProjectLocation` varchar(45) NOT NULL,
  `intClientId` int(11) NOT NULL,
  `intEmployeeId` int(11) NOT NULL,
  `intActive` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tblproject`
--

INSERT INTO `tblproject` (`intProjectId`, `strProjectName`, `txtProjectDesc`, `strProjectStatus`, `strProjectLocation`, `intClientId`, `intEmployeeId`, `intActive`) VALUES
(1, 'Project 1', 'adasdasdsad', 'on going', 'aaaaa', 888, 777, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectrequirements`
--

CREATE TABLE `tblprojectrequirements` (
  `intRequirementId` int(11) NOT NULL,
  `strDesc` varchar(30) NOT NULL,
  `decEstimatedPrice` decimal(15,2) NOT NULL,
  `decActualPrice` decimal(15,2) DEFAULT NULL,
  `intProjectId` int(11) NOT NULL,
  `intWorkSubCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblschedules`
--

CREATE TABLE `tblschedules` (
  `intScheduleId` int(11) NOT NULL,
  `dtmEstimatedStart` date NOT NULL,
  `dtmEstimatedEnd` date NOT NULL,
  `dtmActualStart` date NOT NULL,
  `dtmActualEnd` date NOT NULL,
  `intProjectId` int(11) NOT NULL,
  `intWorkSubCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tblverticaloptions`
--

CREATE TABLE `tblverticaloptions` (
  `intVerticalOptionsId` int(11) NOT NULL,
  `strDesc` varchar(45) NOT NULL,
  `intWorksFormulaId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblverticaloptions`
--

INSERT INTO `tblverticaloptions` (`intVerticalOptionsId`, `strDesc`, `intWorksFormulaId`) VALUES
(1, 'Class AA', 1),
(2, 'Class A', 1),
(3, 'Class B', 1),
(4, 'Class C', 1),
(5, '10.0cm', 2),
(6, '12.5cm', 2),
(7, '15.0cm', 2),
(8, '17.5cm', 2),
(9, '20.0cm', 2),
(10, '22.5cm', 2),
(11, '25.0cm', 2),
(12, '10.0cm', 3),
(13, '12.5cm', 3),
(14, '15.0cm', 3),
(15, '17.5cm', 3),
(16, '20.0cm', 3),
(17, '22.5cm', 3),
(18, '25.0cm', 3),
(19, 'per sq. m', 4),
(20, '30cm', 5),
(21, '40cm', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tblworkcategory`
--

CREATE TABLE `tblworkcategory` (
  `intWorkCategoryId` int(11) NOT NULL,
  `strWorkCategoryDesc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblworkcategory`
--

INSERT INTO `tblworkcategory` (`intWorkCategoryId`, `strWorkCategoryDesc`) VALUES
(1, 'General Requirements'),
(2, 'Construction Requirements');

-- --------------------------------------------------------

--
-- Table structure for table `tblworksformula`
--

CREATE TABLE `tblworksformula` (
  `intWorksFormulaId` int(11) NOT NULL,
  `strDesc` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblworksformula`
--

INSERT INTO `tblworksformula` (`intWorksFormulaId`, `strDesc`) VALUES
(1, 'Concretes'),
(2, 'Slab One Way Reinforcement'),
(3, 'One Way Tie Wire'),
(4, 'CHB'),
(5, 'CHB Tie Wire');

-- --------------------------------------------------------

--
-- Table structure for table `tblworksubcategory`
--

CREATE TABLE `tblworksubcategory` (
  `intWorkSubCategoryId` int(11) NOT NULL,
  `strWorkSubCategoryDesc` varchar(45) NOT NULL,
  `intWorkCategoryId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblworksubcategory`
--

INSERT INTO `tblworksubcategory` (`intWorkSubCategoryId`, `strWorkSubCategoryDesc`, `intWorkCategoryId`) VALUES
(1, 'Permits', 1),
(2, 'Miscellaneous', 1),
(3, 'Earthworks', 1),
(4, 'Others', 1),
(5, 'Column', 2),
(6, 'Footing', 2),
(7, 'Slab', 2),
(8, 'Beams', 2),
(9, 'Wall Footing', 2),
(10, 'Floor Beams', 2),
(11, 'Roof Beams', 2),
(12, 'Masonry', 2),
(13, 'Roofing', 2),
(14, 'Windows', 2),
(15, 'Doors', 2),
(16, 'Ceiling', 2),
(17, 'Paint Ceiling', 2),
(18, 'Paint Walls', 2),
(19, 'Electrical Works', 2),
(20, 'Plumbing Works', 2),
(21, 'Tiles', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  ADD PRIMARY KEY (`intAccountId`),
  ADD UNIQUE KEY `intAccountId_UNIQUE` (`intAccountId`),
  ADD UNIQUE KEY `varUserName_UNIQUE` (`varUserName`);

--
-- Indexes for table `tblclient`
--
ALTER TABLE `tblclient`
  ADD PRIMARY KEY (`intClientId`),
  ADD UNIQUE KEY `intClientId_UNIQUE` (`intClientId`),
  ADD UNIQUE KEY `varClientEMail_UNIQUE` (`varClientEMail`),
  ADD UNIQUE KEY `varClientContactNo_UNIQUE` (`varClientContactNo`),
  ADD UNIQUE KEY `intAccountId_UNIQUE` (`intAccountId`),
  ADD KEY `fk_tblClient_tblAccounts1_idx` (`intAccountId`);

--
-- Indexes for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD PRIMARY KEY (`intEmployeeId`),
  ADD UNIQUE KEY `intEmployeeId_UNIQUE` (`intEmployeeId`),
  ADD UNIQUE KEY `intAccountId_UNIQUE` (`intAccountId`),
  ADD UNIQUE KEY `varEmployeeContactNo_UNIQUE` (`varEmployeeContactNo`),
  ADD UNIQUE KEY `varEmployeeEMail_UNIQUE` (`varEmployeeEMail`),
  ADD KEY `fk_tblEmployee_tblAccounts1_idx` (`intAccountId`);

--
-- Indexes for table `tblformulavalues`
--
ALTER TABLE `tblformulavalues`
  ADD PRIMARY KEY (`intFormulaValueId`),
  ADD UNIQUE KEY `intFormulaId_UNIQUE` (`intFormulaValueId`),
  ADD KEY `fk_tblHorizontalOptions_has_tblVerticalOptions_tblVerticalO_idx` (`intVerticalOptionsId`),
  ADD KEY `fk_tblHorizontalOptions_has_tblVerticalOptions_tblHorizonta_idx` (`intHorizontalOptionsId`);

--
-- Indexes for table `tblhorizontaloptions`
--
ALTER TABLE `tblhorizontaloptions`
  ADD PRIMARY KEY (`intHorizontalOptionsId`),
  ADD UNIQUE KEY `intHorizontalOptionsId_UNIQUE` (`intHorizontalOptionsId`),
  ADD KEY `fk_tblHorizontalOptions_tblWoksFormula1_idx` (`intWorksFormulaId`);

--
-- Indexes for table `tbllabouractualshistory`
--
ALTER TABLE `tbllabouractualshistory`
  ADD PRIMARY KEY (`intLabourActualsHistory`),
  ADD UNIQUE KEY `intLabourActualsHistory_UNIQUE` (`intLabourActualsHistory`),
  ADD KEY `fk_tblLabourActualsHistory_tblLabourCost1_idx` (`intLabourActualId`);

--
-- Indexes for table `tbllabourcost`
--
ALTER TABLE `tbllabourcost`
  ADD PRIMARY KEY (`intLabourActualId`),
  ADD UNIQUE KEY `intLabourActualId_UNIQUE` (`intLabourActualId`),
  ADD KEY `fk_tblLabourCost_tblproject1_idx` (`iintProjectId`),
  ADD KEY `fk_tblLabourCost_tblworksubcategory1_idx` (`intWorkSubCategoryId`);

--
-- Indexes for table `tblmaterialactuals`
--
ALTER TABLE `tblmaterialactuals`
  ADD PRIMARY KEY (`intMaterialActualsId`),
  ADD KEY `fk_tblmaterialactuals_tblmaterials1_idx` (`intMaterialId`),
  ADD KEY `fk_tblmaterialactuals_tblproject1_idx` (`intProjectId`),
  ADD KEY `fk_tblmaterialactuals_tblworksubcategory1_idx` (`intWorkSubCategoryId`);

--
-- Indexes for table `tblmaterialactualshistory`
--
ALTER TABLE `tblmaterialactualshistory`
  ADD PRIMARY KEY (`intMaterialActualsHistoryId`),
  ADD KEY `fk_tblmaterialactualshistory_tblmaterialactuals1_idx` (`intMaterialActualsId`);

--
-- Indexes for table `tblmaterialestimates`
--
ALTER TABLE `tblmaterialestimates`
  ADD PRIMARY KEY (`intMaterialEstimatesId`),
  ADD KEY `fk_tblmaterialsestimate_tblmaterials1_idx` (`intMaterialId`),
  ADD KEY `fk_tblmaterialsestimate_tblproject1_idx` (`intProjectId`),
  ADD KEY `fk_tblmaterialestimates_tblworksubcategory1_idx` (`intWorkSubCategoryId`);

--
-- Indexes for table `tblmaterials`
--
ALTER TABLE `tblmaterials`
  ADD PRIMARY KEY (`intMaterialId`);

--
-- Indexes for table `tblprice`
--
ALTER TABLE `tblprice`
  ADD PRIMARY KEY (`intPriceId`),
  ADD UNIQUE KEY `intPriceId_UNIQUE` (`intPriceId`),
  ADD KEY `fk_tblPrice_tblMaterials1_idx` (`intMaterialId`);

--
-- Indexes for table `tblproject`
--
ALTER TABLE `tblproject`
  ADD PRIMARY KEY (`intProjectId`),
  ADD UNIQUE KEY `intProjectId_UNIQUE` (`intProjectId`),
  ADD KEY `fk_tblProject_tblClient_idx` (`intClientId`),
  ADD KEY `fk_tblProject_tblEmployee1_idx` (`intEmployeeId`);

--
-- Indexes for table `tblprojectrequirements`
--
ALTER TABLE `tblprojectrequirements`
  ADD PRIMARY KEY (`intRequirementId`),
  ADD KEY `fk_tblcustomestimates_tblproject1_idx` (`intProjectId`),
  ADD KEY `fk_tblProjectRequirements_tblworksubcategory1_idx` (`intWorkSubCategoryId`);

--
-- Indexes for table `tblschedules`
--
ALTER TABLE `tblschedules`
  ADD PRIMARY KEY (`intScheduleId`),
  ADD UNIQUE KEY `intScheduleId_UNIQUE` (`intScheduleId`),
  ADD KEY `fk_tblSchedules_tblProject1_idx` (`intProjectId`),
  ADD KEY `fk_tblschedules_tblworkcategory1_idx` (`intWorkSubCategoryId`);

--
-- Indexes for table `tblverticaloptions`
--
ALTER TABLE `tblverticaloptions`
  ADD PRIMARY KEY (`intVerticalOptionsId`),
  ADD UNIQUE KEY `intVerticalOptionsId_UNIQUE` (`intVerticalOptionsId`),
  ADD KEY `fk_tblVerticalOptions_tblWoksFormula1_idx` (`intWorksFormulaId`);

--
-- Indexes for table `tblworkcategory`
--
ALTER TABLE `tblworkcategory`
  ADD PRIMARY KEY (`intWorkCategoryId`);

--
-- Indexes for table `tblworksformula`
--
ALTER TABLE `tblworksformula`
  ADD PRIMARY KEY (`intWorksFormulaId`),
  ADD UNIQUE KEY `intWoksFormulaId_UNIQUE` (`intWorksFormulaId`);

--
-- Indexes for table `tblworksubcategory`
--
ALTER TABLE `tblworksubcategory`
  ADD PRIMARY KEY (`intWorkSubCategoryId`),
  ADD UNIQUE KEY `intWorkCategoryId_UNIQUE` (`intWorkSubCategoryId`),
  ADD UNIQUE KEY `strDesc_UNIQUE` (`strWorkSubCategoryDesc`),
  ADD KEY `fk_tblworksubcategory_tblworkcategory1_idx` (`intWorkCategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccounts`
--
ALTER TABLE `tblaccounts`
  MODIFY `intAccountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT for table `tblclient`
--
ALTER TABLE `tblclient`
  MODIFY `intClientId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=889;

--
-- AUTO_INCREMENT for table `tblemployee`
--
ALTER TABLE `tblemployee`
  MODIFY `intEmployeeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=778;

--
-- AUTO_INCREMENT for table `tblformulavalues`
--
ALTER TABLE `tblformulavalues`
  MODIFY `intFormulaValueId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `tblhorizontaloptions`
--
ALTER TABLE `tblhorizontaloptions`
  MODIFY `intHorizontalOptionsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tbllabouractualshistory`
--
ALTER TABLE `tbllabouractualshistory`
  MODIFY `intLabourActualsHistory` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbllabourcost`
--
ALTER TABLE `tbllabourcost`
  MODIFY `intLabourActualId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmaterialactuals`
--
ALTER TABLE `tblmaterialactuals`
  MODIFY `intMaterialActualsId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmaterialactualshistory`
--
ALTER TABLE `tblmaterialactualshistory`
  MODIFY `intMaterialActualsHistoryId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblmaterialestimates`
--
ALTER TABLE `tblmaterialestimates`
  MODIFY `intMaterialEstimatesId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblmaterials`
--
ALTER TABLE `tblmaterials`
  MODIFY `intMaterialId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tblprice`
--
ALTER TABLE `tblprice`
  MODIFY `intPriceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `tblproject`
--
ALTER TABLE `tblproject`
  MODIFY `intProjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblprojectrequirements`
--
ALTER TABLE `tblprojectrequirements`
  MODIFY `intRequirementId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblschedules`
--
ALTER TABLE `tblschedules`
  MODIFY `intScheduleId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblverticaloptions`
--
ALTER TABLE `tblverticaloptions`
  MODIFY `intVerticalOptionsId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblworkcategory`
--
ALTER TABLE `tblworkcategory`
  MODIFY `intWorkCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblworksformula`
--
ALTER TABLE `tblworksformula`
  MODIFY `intWorksFormulaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblworksubcategory`
--
ALTER TABLE `tblworksubcategory`
  MODIFY `intWorkSubCategoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblclient`
--
ALTER TABLE `tblclient`
  ADD CONSTRAINT `fk_tblClient_tblAccounts1` FOREIGN KEY (`intAccountId`) REFERENCES `tblaccounts` (`intAccountId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblemployee`
--
ALTER TABLE `tblemployee`
  ADD CONSTRAINT `fk_tblEmployee_tblAccounts1` FOREIGN KEY (`intAccountId`) REFERENCES `tblaccounts` (`intAccountId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblformulavalues`
--
ALTER TABLE `tblformulavalues`
  ADD CONSTRAINT `fk_tblHorizontalOptions_has_tblVerticalOptions_tblHorizontalO1` FOREIGN KEY (`intHorizontalOptionsId`) REFERENCES `tblhorizontaloptions` (`intHorizontalOptionsId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblHorizontalOptions_has_tblVerticalOptions_tblVerticalOpt1` FOREIGN KEY (`intVerticalOptionsId`) REFERENCES `tblverticaloptions` (`intVerticalOptionsId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblhorizontaloptions`
--
ALTER TABLE `tblhorizontaloptions`
  ADD CONSTRAINT `fk_tblHorizontalOptions_tblWoksFormula1` FOREIGN KEY (`intWorksFormulaId`) REFERENCES `tblworksformula` (`intWorksFormulaId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbllabouractualshistory`
--
ALTER TABLE `tbllabouractualshistory`
  ADD CONSTRAINT `fk_tblLabourActualsHistory_tblLabourCost1` FOREIGN KEY (`intLabourActualId`) REFERENCES `tbllabourcost` (`intLabourActualId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbllabourcost`
--
ALTER TABLE `tbllabourcost`
  ADD CONSTRAINT `fk_tblLabourCost_tblproject1` FOREIGN KEY (`iintProjectId`) REFERENCES `tblproject` (`intProjectId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblLabourCost_tblworksubcategory1` FOREIGN KEY (`intWorkSubCategoryId`) REFERENCES `tblworksubcategory` (`intWorkSubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblmaterialactuals`
--
ALTER TABLE `tblmaterialactuals`
  ADD CONSTRAINT `fk_tblmaterialactuals_tblmaterials1` FOREIGN KEY (`intMaterialId`) REFERENCES `tblmaterials` (`intMaterialId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblmaterialactuals_tblproject1` FOREIGN KEY (`intProjectId`) REFERENCES `tblproject` (`intProjectId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblmaterialactuals_tblworksubcategory1` FOREIGN KEY (`intWorkSubCategoryId`) REFERENCES `tblworksubcategory` (`intWorkSubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblmaterialactualshistory`
--
ALTER TABLE `tblmaterialactualshistory`
  ADD CONSTRAINT `fk_tblmaterialactualshistory_tblmaterialactuals1` FOREIGN KEY (`intMaterialActualsId`) REFERENCES `tblmaterialactuals` (`intMaterialActualsId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblmaterialestimates`
--
ALTER TABLE `tblmaterialestimates`
  ADD CONSTRAINT `fk_tblmaterialestimates_tblworksubcategory1` FOREIGN KEY (`intWorkSubCategoryId`) REFERENCES `tblworksubcategory` (`intWorkSubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblmaterialsestimate_tblmaterials1` FOREIGN KEY (`intMaterialId`) REFERENCES `tblmaterials` (`intMaterialId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblmaterialsestimate_tblproject1` FOREIGN KEY (`intProjectId`) REFERENCES `tblproject` (`intProjectId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblprice`
--
ALTER TABLE `tblprice`
  ADD CONSTRAINT `fk_tblPrice_tblMaterials1` FOREIGN KEY (`intMaterialId`) REFERENCES `tblmaterials` (`intMaterialId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblproject`
--
ALTER TABLE `tblproject`
  ADD CONSTRAINT `fk_tblProject_tblClient` FOREIGN KEY (`intClientId`) REFERENCES `tblclient` (`intClientId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblProject_tblEmployee1` FOREIGN KEY (`intEmployeeId`) REFERENCES `tblemployee` (`intEmployeeId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblprojectrequirements`
--
ALTER TABLE `tblprojectrequirements`
  ADD CONSTRAINT `fk_tblProjectRequirements_tblworksubcategory1` FOREIGN KEY (`intWorkSubCategoryId`) REFERENCES `tblworksubcategory` (`intWorkSubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblcustomestimates_tblproject1` FOREIGN KEY (`intProjectId`) REFERENCES `tblproject` (`intProjectId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblschedules`
--
ALTER TABLE `tblschedules`
  ADD CONSTRAINT `fk_tblSchedules_tblProject1` FOREIGN KEY (`intProjectId`) REFERENCES `tblproject` (`intProjectId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tblschedules_tblworkcategory1` FOREIGN KEY (`intWorkSubCategoryId`) REFERENCES `tblworksubcategory` (`intWorkSubCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblverticaloptions`
--
ALTER TABLE `tblverticaloptions`
  ADD CONSTRAINT `fk_tblVerticalOptions_tblWoksFormula1` FOREIGN KEY (`intWorksFormulaId`) REFERENCES `tblworksformula` (`intWorksFormulaId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tblworksubcategory`
--
ALTER TABLE `tblworksubcategory`
  ADD CONSTRAINT `fk_tblworksubcategory_tblworkcategory1` FOREIGN KEY (`intWorkCategoryId`) REFERENCES `tblworkcategory` (`intWorkCategoryId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
