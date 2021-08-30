



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `agpulse`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cId` int(11) NOT NULL,
  `cName` varchar(100) NOT NULL,
  `nBlogs` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


--
-- Table structure for table 'blogs'
--

CREATE TABLE `blogs`(
    `blogId` int(11) NOT NULL,
    `blogTitle` varchar(100) NOT NULL,
    `blogDesc` text NOT NULL,
    `blogCategory` varchar(40) NOT NULL,
    `blogDate` varchar(20) NOT NULL
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ---------------------------------------------------------


--
-- Table structure for table 'admin'
--

CREATE TABLE `admin`(
    `adminId` int(11) NOT NULL,
    `adminName` varchar(100) NOT NULL,
    `adminUsername` varchar(100) NOT NULL,
    `adminPass` varchar(100) NOT NULL,
    `role` int(10) NOT NULL
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ---------------------------------------------------------


--
-- Table structure for table 'users'
--

CREATE TABLE `users`(
    `userId` int(11) NOT NULL,
    `userName` varchar(100) NOT NULL,
    `userEmail` varchar(100) NOT NULL,
    `countryCode` varchar(10) NOT NULL,
    `userNumber` varchar(20) NOT NULL,
    `userProducts` varchar(50) NOT NULL,
    `userArrive` varchar(20) NOT NULL,
    `userPass` varchar(100) NOT NULL
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ---------------------------------------------------------


--
-- Table structure for table 'gusers'
--

CREATE TABLE `gusers`(
    `gId` int(11) NOT NULL,
    `gName` varchar(100) NOT NULL,
    `gCompany` varchar(255) NOT NULL,
    `gEmail` varchar(100) NOT NULL,
    `gPhone` varchar(20) NOT NULL,
    `gReq` text NOT NULL,
    `date` varchar(20) NOT NULL
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ---------------------------------------------------------


--
-- Table structure for table 'gusers'
--

CREATE TABLE `indsub`(
    `sId` int(11) NOT NULL,
    `sName`  varchar(100) NOT NULL,
    `sCompany`  varchar(255) NOT NULL,
    `spName` varchar(40) NOT NULL,
    `spPrice`  varchar(100) NOT NULL,
    `swPhone` varchar(20) NOT NULL,
    `sPhone`varchar(20) NOT NULL,
    `sEmail` varchar(100) NOT NULL,
    `sGst` varchar(30) NOT NULL,
    `sAdd` varchar(500) NOT NULL,
    `sCity` varchar(100) NOT NULL,
    `sState` varchar(100) NOT NULL,
    `sPin` varchar(10) NOT NULL,
    `sRem`varchar(10) NOT NULL,
    `sdate` varchar(20) NOT NULL
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ---------------------------------------------------------

--
-- Table structure for table 'gusers'
--

CREATE TABLE `indpay`(
    `sId` int(11) NOT NULL,
    `orderId`  varchar(100) NOT NULL,
    `paymentId`  varchar(255) NOT NULL,
    `status` varchar(40) NOT NULL,
    `pDate`  varchar(100) NOT NULL,
    `sName` varchar(100) NOT NULL,
    `swPhone` varchar(20) NOT NULL,
    `sEmail`varchar(100) NOT NULL,
    `spName` varchar(40) NOT NULL,
    `spPrice` varchar(400) NOT NULL
 ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ---------------------------------------------------------



-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cId`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogId`);


--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`);

--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--

--
-- Indexes for table `gusers"
--
ALTER TABLE `gusers`
  ADD PRIMARY KEY (`gId`);

--

--
-- Indexes for table `indsub"
--
ALTER TABLE `indsub`
  ADD PRIMARY KEY (`sId`);

--

--
-- Indexes for table `gusers"
--
ALTER TABLE `indpay`
  ADD PRIMARY KEY (`sId`);

--



-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogId` int(11) NOT NULL AUTO_INCREMENT;


--
--  AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT;

--

--
-- AUTO_INCREMENTfor table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT;
--

--
--  AUTO_INCREMENT for table `gusers"
--
ALTER TABLE `gusers`
  MODIFY `gId` int(11) NOT NULL AUTO_INCREMENT;
--

--
--  AUTO_INCREMENT for table `indsub"
--
ALTER TABLE `indsub`
  MODIFY `sId` int(11) NOT NULL AUTO_INCREMENT;

--

--
--  AUTO_INCREMENT for table `gusers"
--
ALTER TABLE `indpay`
  MODIFY `sId` int(11) NOT NULL AUTO_INCREMENT;

--

COMMIT;
