-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 06:58 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boat_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `Admin_ID` int(11) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`Admin_ID`, `F_name`, `L_name`, `Email`) VALUES
(1, 'Peterson', 'Andrew', 'petersonandrew@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `administrator_contact`
--

CREATE TABLE `administrator_contact` (
  `Admin_ID` int(11) NOT NULL,
  `Phone_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `administrator_contact`
--

INSERT INTO `administrator_contact` (`Admin_ID`, `Phone_no`) VALUES
(1, '0718080200');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `Booking_ID` int(11) NOT NULL,
  `Package_type` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Manager_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`Booking_ID`, `Package_type`, `Date`, `Manager_ID`) VALUES
(1, 'Adventure Tours', '2023-10-07', 101),
(2, 'Island Hopping', '2023-09-30', 101),
(3, 'Sunset Cruises', '2023-09-18', 101),
(4, 'Wildlife Safari', '2023-09-15', 101),
(5, 'Wildlife Safari', '2023-09-10', 101);

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `Cus_ID` int(11) NOT NULL,
  `Booking_ID` int(11) NOT NULL,
  `Payment_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`Cus_ID`, `Booking_ID`, `Payment_ID`) VALUES
(1, 1, 4321),
(2, 2, 5432),
(3, 3, 3210),
(4, 4, 6543),
(5, 5, 7654);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cus_ID` int(11) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Age` int(11) NOT NULL,
  `User_name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Admin_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Cus_ID`, `F_name`, `L_name`, `Address`, `Email`, `Gender`, `Age`, `User_name`, `Password`, `Admin_ID`) VALUES
(1, 'Shane', 'Watson', '1/23 Main \r\nStreet,Mel', 'shanewatson@gmail.com', 'Male', 25, 'shane.watson', 'password', 1),
(2, 'Amal', 'jackson', '456 \r\nKottawa,Colombo', 'amaljackson@gmail.com', 'Male', 23, 'samal.jackson', 'password', 1),
(3, 'Kamal', 'Wayne', '110 \r\nMalabe', 'kamalwayne@gmail.com', 'Male', 28, 'kamal.wayne', 'password', 1),
(4, 'Peter', 'Perera', '2090 \r\nRatnapura', 'peterperera@gmail.com', 'Male', 26, 'speter.perera', 'password', 1),
(5, 'Vinuji', 'Fernando', '1/40 \r\nKuruwita', 'vinujifernando@gmail.com', 'Female', 30, 'vinuji.fernando', 'password', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer_contact`
--

CREATE TABLE `customer_contact` (
  `Cus_ID` int(11) NOT NULL,
  `Phone_no` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_contact`
--

INSERT INTO `customer_contact` (`Cus_ID`, `Phone_no`) VALUES
(1, '0112674459'),
(2, '0452229300'),
(3, '0717621250'),
(4, '0717558631'),
(5, '0717504735');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Feedback_ID` int(11) NOT NULL,
  `Comment` text DEFAULT NULL,
  `Cus_ID` int(11) NOT NULL,
  `Sup_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Comment`, `Cus_ID`, `Sup_ID`) VALUES
(101, 'We had a wonderful time on our vacation!', 1, 1),
(102, 'The safari was great, the food was delicious,and the activities were fun \r\nfor everyone', 2, 1),
(103, 'We saw dolphines, Coral reefs in your boat safari package.The package was \r\nworth to the price.', 3, 1),
(104, 'Surfing package was perfect for my needs.', 4, 1),
(105, 'Boat safari was a great experience for my family.', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inquery_ID` int(11) NOT NULL,
  `Subject` text DEFAULT NULL,
  `Date` date NOT NULL,
  `Cus_ID` int(11) NOT NULL,
  `Sup_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`Inquery_ID`, `Subject`, `Date`, `Cus_ID`, `Sup_ID`) VALUES
(1010, '', '2023-10-05', 1, 1),
(1020, '', '2023-10-07', 2, 1),
(1030, '', '2023-09-29', 3, 1),
(1040, '', '2023-09-08', 4, 1),
(1050, '', '2023-09-16', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `Manager_ID` int(11) NOT NULL,
  `F_name` varchar(255) NOT NULL,
  `L_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`Manager_ID`, `F_name`, `L_name`, `Email`) VALUES
(101, 'David', 'Miller', 'davidmiller@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `manager_contact`
--

CREATE TABLE `manager_contact` (
  `Manager_ID` int(11) NOT NULL,
  `Phone_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager_contact`
--

INSERT INTO `manager_contact` (`Manager_ID`, `Phone_no`) VALUES
(101, '0779090200');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_ID` int(11) NOT NULL,
  `Payment_date` date NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Pay_online` varchar(10) DEFAULT NULL,
  `Pay_offline` varchar(10) DEFAULT NULL,
  `Manager_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_ID`, `Payment_date`, `Amount`, `Pay_online`, `Pay_offline`, `Manager_ID`) VALUES
(3210, '2023-09-10', 20000.00, 'Yes', 'No', 101),
(4321, '2023-08-05', 15000.00, 'Yes', 'No', 101),
(5432, '2023-09-07', 25000.00, 'Yes', 'No', 101),
(6543, '2023-09-05', 30000.00, 'Yes', 'No', 101),
(7654, '2023-09-01', 30000.00, 'Yes', 'No', 101);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Report_ID` int(11) NOT NULL,
  `Report_type` varchar(255) NOT NULL,
  `Admin_ID` int(11) NOT NULL,
  `Manager_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Report_ID`, `Report_type`, `Admin_ID`, `Manager_ID`) VALUES
(1, 'Booking Report', 1, 101),
(2, 'Payment Report', 1, 101),
(3, 'Inquiry Report', 1, 101),
(4, 'Customer Report', 1, 101),
(5, 'Manager Report', 1, 101);

-- --------------------------------------------------------

--
-- Table structure for table `support_agent`
--

CREATE TABLE `support_agent` (
  `Sup_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_agent`
--

INSERT INTO `support_agent` (`Sup_ID`, `Name`, `Email`) VALUES
(1, 'John', 'john@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `support_contact`
--

CREATE TABLE `support_contact` (
  `Sup_ID` int(11) NOT NULL,
  `Phone_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `support_contact`
--

INSERT INTO `support_contact` (`Sup_ID`, `Phone_no`) VALUES
(1, '0778906543');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `administrator_contact`
--
ALTER TABLE `administrator_contact`
  ADD PRIMARY KEY (`Admin_ID`,`Phone_no`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `bookingmanagerFK` (`Manager_ID`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`Cus_ID`,`Booking_ID`,`Payment_ID`),
  ADD KEY `BD_FK2` (`Booking_ID`),
  ADD KEY `BD_FK3` (`Payment_ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cus_ID`),
  ADD KEY `CustomerAdminidFK` (`Admin_ID`);

--
-- Indexes for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD PRIMARY KEY (`Cus_ID`,`Phone_no`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`Feedback_ID`),
  ADD KEY `feedback_customer_FK1` (`Cus_ID`),
  ADD KEY `feedback_support_agent_FK2` (`Sup_ID`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inquery_ID`),
  ADD KEY `inquiry_customer_FK1` (`Cus_ID`),
  ADD KEY `inquiry_support_agent_FK2` (`Sup_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`Manager_ID`);

--
-- Indexes for table `manager_contact`
--
ALTER TABLE `manager_contact`
  ADD PRIMARY KEY (`Manager_ID`,`Phone_no`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_ID`),
  ADD KEY `paymenetFK` (`Manager_ID`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Report_ID`),
  ADD KEY `report_admin_FK1` (`Admin_ID`),
  ADD KEY `report_manager_FK2` (`Manager_ID`);

--
-- Indexes for table `support_agent`
--
ALTER TABLE `support_agent`
  ADD PRIMARY KEY (`Sup_ID`);

--
-- Indexes for table `support_contact`
--
ALTER TABLE `support_contact`
  ADD PRIMARY KEY (`Sup_ID`,`Phone_no`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator_contact`
--
ALTER TABLE `administrator_contact`
  ADD CONSTRAINT `admincontact_FK` FOREIGN KEY (`Admin_ID`) REFERENCES `administrator` (`Admin_ID`);

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `bookingmanagerFK` FOREIGN KEY (`Manager_ID`) REFERENCES `manager` (`Manager_ID`);

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `BD_FK1` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`),
  ADD CONSTRAINT `BD_FK2` FOREIGN KEY (`Booking_ID`) REFERENCES `booking` (`Booking_ID`),
  ADD CONSTRAINT `BD_FK3` FOREIGN KEY (`Payment_ID`) REFERENCES `payment` (`Payment_ID`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `CustomerAdminidFK` FOREIGN KEY (`Admin_ID`) REFERENCES `administrator` (`Admin_ID`);

--
-- Constraints for table `customer_contact`
--
ALTER TABLE `customer_contact`
  ADD CONSTRAINT `cuscontact_FK` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`);

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_customer_FK1` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`),
  ADD CONSTRAINT `feedback_support_agent_FK2` FOREIGN KEY (`Sup_ID`) REFERENCES `support_agent` (`Sup_ID`);

--
-- Constraints for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD CONSTRAINT `inquiry_customer_FK1` FOREIGN KEY (`Cus_ID`) REFERENCES `customer` (`Cus_ID`),
  ADD CONSTRAINT `inquiry_support_agent_FK2` FOREIGN KEY (`Sup_ID`) REFERENCES `support_agent` (`Sup_ID`);

--
-- Constraints for table `manager_contact`
--
ALTER TABLE `manager_contact`
  ADD CONSTRAINT `managercontact_FK` FOREIGN KEY (`Manager_ID`) REFERENCES `manager` (`Manager_ID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `paymenetFK` FOREIGN KEY (`Manager_ID`) REFERENCES `manager` (`Manager_ID`);

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_admin_FK1` FOREIGN KEY (`Admin_ID`) REFERENCES `administrator` (`Admin_ID`),
  ADD CONSTRAINT `report_manager_FK2` FOREIGN KEY (`Manager_ID`) REFERENCES `manager` (`Manager_ID`);

--
-- Constraints for table `support_contact`
--
ALTER TABLE `support_contact`
  ADD CONSTRAINT `supcontact_FK` FOREIGN KEY (`Sup_ID`) REFERENCES `support_agent` (`Sup_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
