-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2018 at 03:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fin_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `cm_cams`
--

CREATE TABLE `cm_cams` (
  `sno` int(11) NOT NULL,
  `FOLIOCHK` varchar(20) DEFAULT NULL,
  `INV_NAME` varchar(70) DEFAULT NULL,
  `ADDRESS1` varchar(120) DEFAULT NULL,
  `ADDRESS2` varchar(120) DEFAULT NULL,
  `ADDRESS3` varchar(120) DEFAULT NULL,
  `CITY` varchar(35) DEFAULT NULL,
  `PINCODE` varchar(15) DEFAULT NULL,
  `PRODUCT` varchar(8) DEFAULT NULL,
  `SCH_NAME` varchar(100) DEFAULT NULL,
  `REP_DATE` date DEFAULT NULL,
  `CLOS_BAL` float DEFAULT NULL,
  `RUPEE_BAL` float DEFAULT NULL,
  `JNT_NAME1` varchar(70) DEFAULT NULL,
  `JNT_NAME2` varchar(70) DEFAULT NULL,
  `PHONE_OFF` varchar(35) DEFAULT NULL,
  `PHONE_RES` varchar(35) DEFAULT NULL,
  `EMAIL` varchar(254) DEFAULT NULL,
  `HOLDING_NA` varchar(2) DEFAULT NULL,
  `UIN_NO` varchar(15) DEFAULT NULL,
  `PAN_NO` varchar(45) DEFAULT NULL,
  `JOINT1_PAN` varchar(45) DEFAULT NULL,
  `JOINT2_PAN` varchar(45) DEFAULT NULL,
  `GUARD_PAN` varchar(45) DEFAULT NULL,
  `TAX_STATUS` varchar(35) DEFAULT NULL,
  `BROKER_COD` varchar(20) DEFAULT NULL,
  `SUBBROKER` varchar(30) DEFAULT NULL,
  `REINV_FLAG` varchar(1) DEFAULT NULL,
  `BANK_NAME` varchar(40) DEFAULT NULL,
  `BRANCH` varchar(40) DEFAULT NULL,
  `AC_TYPE` varchar(5) DEFAULT NULL,
  `AC_NO` varchar(40) DEFAULT NULL,
  `B_ADDRESS1` varchar(35) DEFAULT NULL,
  `B_ADDRESS2` varchar(35) DEFAULT NULL,
  `B_ADDRESS3` varchar(35) DEFAULT NULL,
  `B_CITY` varchar(35) DEFAULT NULL,
  `B_PINCODE` varchar(15) DEFAULT NULL,
  `INV_DOB` date DEFAULT NULL,
  `MOBILE_NO` varchar(30) DEFAULT NULL,
  `OCCUPATION` varchar(35) DEFAULT NULL,
  `INV_IIN` float DEFAULT NULL,
  `NOM_NAME` varchar(70) DEFAULT NULL,
  `RELATION` varchar(20) DEFAULT NULL,
  `NOM_ADDR1` varchar(120) DEFAULT NULL,
  `NOM_ADDR2` varchar(120) DEFAULT NULL,
  `NOM_ADDR3` varchar(120) DEFAULT NULL,
  `NOM_CITY` varchar(40) DEFAULT NULL,
  `NOM_STATE` varchar(2) DEFAULT NULL,
  `NOM_PINCOD` varchar(15) DEFAULT NULL,
  `NOM_PH_OFF` varchar(40) DEFAULT NULL,
  `NOM_PH_RES` varchar(35) DEFAULT NULL,
  `NOM_EMAIL` varchar(128) DEFAULT NULL,
  `NOM_PERCEN` float DEFAULT NULL,
  `NOM2_NAME` varchar(209) DEFAULT NULL,
  `NOM2_RELAT` varchar(20) DEFAULT NULL,
  `NOM2_ADDR1` varchar(120) DEFAULT NULL,
  `NOM2_ADDR2` varchar(120) DEFAULT NULL,
  `NOM2_ADDR3` varchar(120) DEFAULT NULL,
  `NOM2_CITY` varchar(40) DEFAULT NULL,
  `NOM2_STATE` varchar(2) DEFAULT NULL,
  `NOM2_PINCO` varchar(15) DEFAULT NULL,
  `NOM2_PH_OF` varchar(40) DEFAULT NULL,
  `NOM2_PH_RE` varchar(35) DEFAULT NULL,
  `NOM2_EMAIL` varchar(128) DEFAULT NULL,
  `NOM2_PERCE` float DEFAULT NULL,
  `NOM3_NAME` varchar(209) DEFAULT NULL,
  `NOM3_RELAT` varchar(20) DEFAULT NULL,
  `NOM3_ADDR1` varchar(120) DEFAULT NULL,
  `NOM3_ADDR2` varchar(120) DEFAULT NULL,
  `NOM3_ADDR3` varchar(120) DEFAULT NULL,
  `NOM3_CITY` varchar(40) DEFAULT NULL,
  `NOM3_STATE` varchar(2) DEFAULT NULL,
  `NOM3_PINCO` varchar(15) DEFAULT NULL,
  `NOM3_PH_OF` varchar(40) DEFAULT NULL,
  `NOM3_PH_RE` varchar(35) DEFAULT NULL,
  `NOM3_EMAIL` varchar(128) DEFAULT NULL,
  `NOM3_PERCE` float DEFAULT NULL,
  `IFSC_CODE` varchar(40) DEFAULT NULL,
  `DP_ID` varchar(20) DEFAULT NULL,
  `DEMAT` varchar(1) DEFAULT NULL,
  `GUARD_NAME` varchar(60) DEFAULT NULL,
  `BROKCODE` varchar(20) DEFAULT NULL,
  `FOLIO_DATE` date DEFAULT NULL,
  `AADHAAR` varchar(100) DEFAULT NULL,
  `TPA_LINKED` varchar(1) DEFAULT NULL,
  `FH_CKYC_NO` varchar(15) DEFAULT NULL,
  `JH1_CKYC` varchar(254) DEFAULT NULL,
  `JH2_CKYC` varchar(254) DEFAULT NULL,
  `G_CKYC_NO` varchar(15) DEFAULT NULL,
  `JH1_DOB` date DEFAULT NULL,
  `JH2_DOB` date DEFAULT NULL,
  `GUARDIAN_D` date DEFAULT NULL,
  `AMC_CODE` varchar(3) DEFAULT NULL,
  `GST_STATE_` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cm_cams`
--

INSERT INTO `cm_cams` (`sno`, `FOLIOCHK`, `INV_NAME`, `ADDRESS1`, `ADDRESS2`, `ADDRESS3`, `CITY`, `PINCODE`, `PRODUCT`, `SCH_NAME`, `REP_DATE`, `CLOS_BAL`, `RUPEE_BAL`, `JNT_NAME1`, `JNT_NAME2`, `PHONE_OFF`, `PHONE_RES`, `EMAIL`, `HOLDING_NA`, `UIN_NO`, `PAN_NO`, `JOINT1_PAN`, `JOINT2_PAN`, `GUARD_PAN`, `TAX_STATUS`, `BROKER_COD`, `SUBBROKER`, `REINV_FLAG`, `BANK_NAME`, `BRANCH`, `AC_TYPE`, `AC_NO`, `B_ADDRESS1`, `B_ADDRESS2`, `B_ADDRESS3`, `B_CITY`, `B_PINCODE`, `INV_DOB`, `MOBILE_NO`, `OCCUPATION`, `INV_IIN`, `NOM_NAME`, `RELATION`, `NOM_ADDR1`, `NOM_ADDR2`, `NOM_ADDR3`, `NOM_CITY`, `NOM_STATE`, `NOM_PINCOD`, `NOM_PH_OFF`, `NOM_PH_RES`, `NOM_EMAIL`, `NOM_PERCEN`, `NOM2_NAME`, `NOM2_RELAT`, `NOM2_ADDR1`, `NOM2_ADDR2`, `NOM2_ADDR3`, `NOM2_CITY`, `NOM2_STATE`, `NOM2_PINCO`, `NOM2_PH_OF`, `NOM2_PH_RE`, `NOM2_EMAIL`, `NOM2_PERCE`, `NOM3_NAME`, `NOM3_RELAT`, `NOM3_ADDR1`, `NOM3_ADDR2`, `NOM3_ADDR3`, `NOM3_CITY`, `NOM3_STATE`, `NOM3_PINCO`, `NOM3_PH_OF`, `NOM3_PH_RE`, `NOM3_EMAIL`, `NOM3_PERCE`, `IFSC_CODE`, `DP_ID`, `DEMAT`, `GUARD_NAME`, `BROKCODE`, `FOLIO_DATE`, `AADHAAR`, `TPA_LINKED`, `FH_CKYC_NO`, `JH1_CKYC`, `JH2_CKYC`, `G_CKYC_NO`, `JH1_DOB`, `JH2_DOB`, `GUARDIAN_D`, `AMC_CODE`, `GST_STATE_`) VALUES
(10, '4304174/21', 'Sanjay Kumar And Sons (Huf)', 'A - 81 , V D CLOTH MARKET', 'FAJALPURA', '', 'UJJAIN', '456001', 'F154L', 'L&T Liquid Fund - Regular Growth', '2018-12-02', 138.855, 346285, '', '', '', '0734 - 2550010', '', 'SI', '', 'AAGHS6790H', '', '', '', 'HUF', 'ARN-85092', '', 'Z', 'IDBI Bank Ltd', 'Ujjain', 'SB', '088104000100687', '', '', '', 'Ujjain', '', '0000-00-00', '+919425379911', 'BUSINESS', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 'IBKL0000088', '', 'N', '', 'ARN-85092', '2018-03-22', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'F', '23'),
(11, '4304174/21', 'Sanjay Kumar And Sons (Huf)', 'A - 81 , V D CLOTH MARKET', 'FAJALPURA', '', 'UJJAIN', '456001', 'FLEBFG', 'L&T Emerging Businesses Fund Growth', '2018-12-02', 18509.2, 451439, '', '', '', '0734 - 2550010', '', 'SI', '', 'AAGHS6790H', '', '', '', 'HUF', 'ARN-85092', '', 'Z', 'IDBI Bank Ltd', 'Ujjain', 'SB', '088104000100687', '', '', '', 'Ujjain', '', '0000-00-00', '+919425379911', 'BUSINESS', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', 0, 'IBKL0000088', '', 'N', '', 'ARN-85092', '2018-03-22', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', 'F', '23');

-- --------------------------------------------------------

--
-- Table structure for table `cm_franklin`
--

CREATE TABLE `cm_franklin` (
  `sno` int(11) NOT NULL,
  `COMP_CODE` varchar(3) DEFAULT NULL,
  `FOLIO_NO` varchar(20) DEFAULT NULL,
  `INV_NAME` varchar(100) DEFAULT NULL,
  `JOINT_NAM1` varchar(126) DEFAULT NULL,
  `JOINT_NAM2` varchar(126) DEFAULT NULL,
  `ADDRESS1` varchar(40) DEFAULT NULL,
  `ADDRESS2` varchar(40) DEFAULT NULL,
  `ADDRESS3` varchar(40) DEFAULT NULL,
  `CITY` varchar(80) DEFAULT NULL,
  `PINCODE` varchar(12) DEFAULT NULL,
  `STATE` varchar(30) DEFAULT NULL,
  `COUNTRY` varchar(50) DEFAULT NULL,
  `TPIN` varchar(16) DEFAULT NULL,
  `D_BIRTH` varchar(10) DEFAULT NULL,
  `F_NAME` varchar(100) DEFAULT NULL,
  `M_NAME` varchar(100) DEFAULT NULL,
  `PHONE_RES` varchar(100) DEFAULT NULL,
  `PHONE_RES1` varchar(3) DEFAULT NULL,
  `PHONE_RES2` varchar(3) DEFAULT NULL,
  `PHONE_OFF` varchar(100) DEFAULT NULL,
  `PHONE_OFF1` varchar(100) DEFAULT NULL,
  `PHONE_OFF2` varchar(100) DEFAULT NULL,
  `FAX_RES` varchar(100) DEFAULT NULL,
  `FAX_OFF` varchar(100) DEFAULT NULL,
  `TAX_STATUS` varchar(100) DEFAULT NULL,
  `OCCU_CODE` varchar(100) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `ACCNT_NO` varchar(100) DEFAULT NULL,
  `BANK_NAME` varchar(100) DEFAULT NULL,
  `AC_TYPE` varchar(100) DEFAULT NULL,
  `BRANCH` varchar(100) DEFAULT NULL,
  `B_ADDRESS1` varchar(100) DEFAULT NULL,
  `B_ADDRESS2` varchar(100) DEFAULT NULL,
  `B_ADDRESS3` varchar(100) DEFAULT NULL,
  `B_CITY` varchar(100) DEFAULT NULL,
  `B_PINCODE` varchar(12) DEFAULT NULL,
  `B_STATE` varchar(2) DEFAULT NULL,
  `B_COUNTRY` varchar(100) DEFAULT NULL,
  `INVEST_ID` varchar(100) DEFAULT NULL,
  `BROK_CODE` varchar(32) DEFAULT NULL,
  `PANNO1` varchar(60) DEFAULT NULL,
  `PANNO2` varchar(60) DEFAULT NULL,
  `PANNO3` varchar(60) DEFAULT NULL,
  `PAN_STATU0` varchar(60) DEFAULT NULL,
  `PAN_STATU1` varchar(60) DEFAULT NULL,
  `PAN_STATU2` varchar(60) DEFAULT NULL,
  `MAPIN1` varchar(15) DEFAULT NULL,
  `MAPIN2` varchar(15) DEFAULT NULL,
  `MAPIN3` varchar(15) DEFAULT NULL,
  `CREA_DATE` date DEFAULT NULL,
  `CREA_TIME` varchar(6) DEFAULT NULL,
  `CUSTOMER_3` varchar(8) DEFAULT NULL,
  `FAMILY_SO4` varchar(3) DEFAULT NULL,
  `GOAL_SHEET` varchar(3) DEFAULT NULL,
  `GOAL` varchar(60) DEFAULT NULL,
  `GOAL_DETA5` varchar(60) DEFAULT NULL,
  `KYC_ID` varchar(10) DEFAULT NULL,
  `KYC_STATUS` varchar(20) DEFAULT NULL,
  `HOLDING_T6` varchar(19) DEFAULT NULL,
  `SOCIAL_ST7` varchar(255) DEFAULT NULL,
  `FOLIO_SOU8` varchar(3) DEFAULT NULL,
  `PBANK_NAME` varchar(60) DEFAULT NULL,
  `PERSONAL_9` varchar(60) DEFAULT NULL,
  `PAYMENT_10` varchar(1) DEFAULT NULL,
  `ACCOUNT_11` varchar(20) DEFAULT NULL,
  `BRANCH_N12` varchar(60) DEFAULT NULL,
  `PAYMENT_13` varchar(1) DEFAULT NULL,
  `CUSTOMER14` varchar(1) DEFAULT NULL,
  `DD_PAYAB15` varchar(40) DEFAULT NULL,
  `BANK_CODE` varchar(9) DEFAULT NULL,
  `IFSC_CODE` varchar(120) DEFAULT NULL,
  `PAYMENT_16` varchar(60) DEFAULT NULL,
  `NEFT_CODE` varchar(20) DEFAULT NULL,
  `DEFAULT_17` varchar(1) DEFAULT NULL,
  `EUIN` varchar(20) DEFAULT NULL,
  `SUB_BROK18` varchar(20) DEFAULT NULL,
  `NOMINEE1` varchar(130) DEFAULT NULL,
  `NOMINEE2` varchar(130) DEFAULT NULL,
  `NOMINEE3` varchar(130) DEFAULT NULL,
  `NOMINEE_19` varchar(30) DEFAULT NULL,
  `DP_ID` varchar(8) DEFAULT NULL,
  `BENF_ID` varchar(8) DEFAULT NULL,
  `GUARDIAN20` varchar(126) DEFAULT NULL,
  `GUARDIAN21` varchar(60) DEFAULT NULL,
  `DIVIDEND22` varchar(1) DEFAULT NULL,
  `CKYC_ID` varchar(3) DEFAULT NULL,
  `H1_CKYC_ID` varchar(3) DEFAULT NULL,
  `H2_CKYC_ID` varchar(3) DEFAULT NULL,
  `G_CKYC_ID` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cm_franklin`
--

INSERT INTO `cm_franklin` (`sno`, `COMP_CODE`, `FOLIO_NO`, `INV_NAME`, `JOINT_NAM1`, `JOINT_NAM2`, `ADDRESS1`, `ADDRESS2`, `ADDRESS3`, `CITY`, `PINCODE`, `STATE`, `COUNTRY`, `TPIN`, `D_BIRTH`, `F_NAME`, `M_NAME`, `PHONE_RES`, `PHONE_RES1`, `PHONE_RES2`, `PHONE_OFF`, `PHONE_OFF1`, `PHONE_OFF2`, `FAX_RES`, `FAX_OFF`, `TAX_STATUS`, `OCCU_CODE`, `EMAIL`, `ACCNT_NO`, `BANK_NAME`, `AC_TYPE`, `BRANCH`, `B_ADDRESS1`, `B_ADDRESS2`, `B_ADDRESS3`, `B_CITY`, `B_PINCODE`, `B_STATE`, `B_COUNTRY`, `INVEST_ID`, `BROK_CODE`, `PANNO1`, `PANNO2`, `PANNO3`, `PAN_STATU0`, `PAN_STATU1`, `PAN_STATU2`, `MAPIN1`, `MAPIN2`, `MAPIN3`, `CREA_DATE`, `CREA_TIME`, `CUSTOMER_3`, `FAMILY_SO4`, `GOAL_SHEET`, `GOAL`, `GOAL_DETA5`, `KYC_ID`, `KYC_STATUS`, `HOLDING_T6`, `SOCIAL_ST7`, `FOLIO_SOU8`, `PBANK_NAME`, `PERSONAL_9`, `PAYMENT_10`, `ACCOUNT_11`, `BRANCH_N12`, `PAYMENT_13`, `CUSTOMER14`, `DD_PAYAB15`, `BANK_CODE`, `IFSC_CODE`, `PAYMENT_16`, `NEFT_CODE`, `DEFAULT_17`, `EUIN`, `SUB_BROK18`, `NOMINEE1`, `NOMINEE2`, `NOMINEE3`, `NOMINEE_19`, `DP_ID`, `BENF_ID`, `GUARDIAN20`, `GUARDIAN21`, `DIVIDEND22`, `CKYC_ID`, `H1_CKYC_ID`, `H2_CKYC_ID`, `G_CKYC_ID`) VALUES
(1, 'FTI', '2199907615646', 'RAHUL JAIN', '', '', 'H NO 17P O TENGRAGALLA BAZARTILAK MA', 'RG', '', 'UJJAIN', '456010', '', 'INDIA', '', '06/24/1981', 'RAHUL', 'JAIN', '07342553669', '', '', '07342553669', '', '', '', '', 'Individual', 'O', 'rahulakjain1jain@gmail.com', '088104000158534', 'IDBI BANK LTD', 'SA', 'UJJAIN', '', '', '', '', '', '', '', 'RH00005970', 'ARN-85092', 'AFBPJ8773K', '', '', 'PP', '', '', '', '', '', '2018-11-27', '101106', '18933077', 'NO', 'NO', '', '', '3122927688', 'Authorized', 'Single', 'Individual', '', 'IDBI BANK LTD', '088104000158534', 'A', 'SA', 'UJJAIN', 'N', 'C', '', '000259000', 'IBKL0000088', '', 'IBKL0000088', 'Y', 'E028413', '', 'SHALU JAIN', '', '', '100.00;;', '', '', '', '', 'G', '', '', '', ''),
(2, 'FTI', '2199911388796', 'SHANTANU DHANUKA', '', '', 'HOUSE/BIDG/APT 10 ST/ROAD/LANE', 'SHANKU MARG VIL/TOWN/PO UJJAIN', 'M L NGR AREA/LCTY/SEC FREEGANJ', 'FOOL WALI GALI UJJAIN', '456010', '', 'INDIA', '', '04/03/1984', 'SHANTANU', 'DHANUKA', '', '', '', '', '', '', '', '', 'Individual', '', 'shantanu.dhanuka@gmail.com', '09081530000285', 'HDFC BANK LTD', 'SA', 'UJJAIN', '', '', '', '', '', '', '', 'ST00031571', 'ARN-85092', 'AHIPD3838N', '', '', 'PP', '', '', '', '', '', '2018-11-27', '101106', '21411104', 'NO', 'NO', '', '', '3126681574', 'Authorized', 'Single', 'Individual', '', 'HDFC BANK LTD', '09081530000285', 'A', 'SA', 'UJJAIN', 'N', 'C', '', '456240002', 'HDFC0000908', '', 'HDFC0000908', 'Y', 'E224033', '', 'TEJASHRI DHANUKA', '', '', '100.00;;', '', '', '', '', 'G', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cm_karvy`
--

CREATE TABLE `cm_karvy` (
  `sno` int(11) NOT NULL,
  `PRCODE` varchar(10) DEFAULT NULL,
  `FUND` varchar(5) DEFAULT NULL,
  `ACNO` float DEFAULT NULL,
  `DIVOPT` varchar(1) DEFAULT NULL,
  `FUNDDESC` varchar(255) DEFAULT NULL,
  `INVNAME` varchar(160) DEFAULT NULL,
  `JTNAME1` varchar(40) DEFAULT NULL,
  `JTNAME2` varchar(40) DEFAULT NULL,
  `ADD1` varchar(40) DEFAULT NULL,
  `ADD2` varchar(40) DEFAULT NULL,
  `ADD3` varchar(40) DEFAULT NULL,
  `CITY` varchar(40) DEFAULT NULL,
  `PIN` float DEFAULT NULL,
  `STATE` varchar(40) DEFAULT NULL,
  `COUNTRY` varchar(40) DEFAULT NULL,
  `TPIN` varchar(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `FNAME` varchar(1) DEFAULT NULL,
  `MNAME` varchar(1) DEFAULT NULL,
  `RPHONE` varchar(40) DEFAULT NULL,
  `PH_RES1` varchar(1) DEFAULT NULL,
  `PH_RES2` varchar(1) DEFAULT NULL,
  `OPHONE` varchar(40) DEFAULT NULL,
  `PH_OFF1` varchar(1) DEFAULT NULL,
  `PH_OFF2` varchar(1) DEFAULT NULL,
  `FAX` varchar(40) DEFAULT NULL,
  `FAX_OFF` varchar(1) DEFAULT NULL,
  `STATUS` varchar(1) DEFAULT NULL,
  `OCCPN` float DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `BNKACNO` varchar(20) DEFAULT NULL,
  `BNAME` varchar(40) DEFAULT NULL,
  `BNKACTYPE` varchar(40) DEFAULT NULL,
  `BRANCH` varchar(1) DEFAULT NULL,
  `BADD1` varchar(40) DEFAULT NULL,
  `BADD2` varchar(40) DEFAULT NULL,
  `BADD3` varchar(40) DEFAULT NULL,
  `BCITY` varchar(40) DEFAULT NULL,
  `BPHONE` varchar(40) DEFAULT NULL,
  `BSTATE` varchar(40) DEFAULT NULL,
  `BCOUNTRY` varchar(40) DEFAULT NULL,
  `INV_ID` varchar(1) DEFAULT NULL,
  `BROKCODE` varchar(20) DEFAULT NULL,
  `PANGNO` varchar(50) DEFAULT NULL,
  `MOBILE` varchar(50) DEFAULT NULL,
  `CRDATE` date DEFAULT NULL,
  `CRTIME` varchar(6) DEFAULT NULL,
  `OCCP_DESC` varchar(60) DEFAULT NULL,
  `MODECD` varchar(1) DEFAULT NULL,
  `MODEOFHOLD` varchar(60) DEFAULT NULL,
  `MAPIN` varchar(20) DEFAULT NULL,
  `IMCATEGORY` float DEFAULT NULL,
  `PAN2` varchar(50) DEFAULT NULL,
  `PAN3` varchar(50) DEFAULT NULL,
  `GUARDIANN0` varchar(50) DEFAULT NULL,
  `NOMINEE` varchar(50) DEFAULT NULL,
  `CLIENTID` varchar(20) DEFAULT NULL,
  `DPID` varchar(20) DEFAULT NULL,
  `CATEGORYD1` varchar(100) DEFAULT NULL,
  `IFSC` varchar(30) DEFAULT NULL,
  `STATUSDESC` varchar(100) DEFAULT NULL,
  `NOMINEE2` varchar(100) DEFAULT NULL,
  `NOMINEE3` varchar(100) DEFAULT NULL,
  `KYC1FLAG` varchar(10) DEFAULT NULL,
  `KYC2FLAG` varchar(10) DEFAULT NULL,
  `KYC3FLAG` varchar(10) DEFAULT NULL,
  `GUARDPANNO` varchar(20) DEFAULT NULL,
  `LASTUPDAT2` date DEFAULT NULL,
  `CAN` varchar(20) DEFAULT NULL,
  `NOMINEEREL` varchar(150) DEFAULT NULL,
  `NOMINEE2R3` varchar(150) DEFAULT NULL,
  `NOMINEE3R4` varchar(150) DEFAULT NULL,
  `NOMINEERA5` float DEFAULT NULL,
  `NOMINEE2R6` float DEFAULT NULL,
  `NOMINEE3R7` float DEFAULT NULL,
  `ADRH1INFO` varchar(50) DEFAULT NULL,
  `ADRH2INFO` varchar(50) DEFAULT NULL,
  `ADRH3NFO` varchar(30) DEFAULT NULL,
  `ADRGINFO` varchar(30) DEFAULT NULL,
  `NOMINEE_A8` varchar(50) DEFAULT NULL,
  `NOMINEE_A9` varchar(50) DEFAULT NULL,
  `NOMINEE_10` varchar(50) DEFAULT NULL,
  `NOMINEE_11` varchar(50) DEFAULT NULL,
  `NOMINEE_12` varchar(50) DEFAULT NULL,
  `NOMINEE_13` float DEFAULT NULL,
  `NOMINEE_14` float DEFAULT NULL,
  `NOMINEE_15` varchar(30) DEFAULT NULL,
  `NOMINEE216` varchar(50) DEFAULT NULL,
  `NOMINEE217` varchar(50) DEFAULT NULL,
  `NOMINEE218` varchar(50) DEFAULT NULL,
  `NOMINEE219` varchar(50) DEFAULT NULL,
  `NOMINEE220` varchar(50) DEFAULT NULL,
  `NOMINEE221` float DEFAULT NULL,
  `NOMINEE222` float DEFAULT NULL,
  `NOMINEE223` varchar(30) DEFAULT NULL,
  `NOMINEE324` varchar(50) DEFAULT NULL,
  `NOMINEE325` varchar(50) DEFAULT NULL,
  `NOMINEE326` varchar(50) DEFAULT NULL,
  `NOMINEE327` varchar(50) DEFAULT NULL,
  `NOMINEE328` varchar(50) DEFAULT NULL,
  `NOMINEE329` float DEFAULT NULL,
  `NOMINEE330` float DEFAULT NULL,
  `NOMINEE331` varchar(30) DEFAULT NULL,
  `CKYC_NO` varchar(20) DEFAULT NULL,
  `JH1_CKYC` varchar(20) DEFAULT NULL,
  `JH2_CKYC` varchar(20) DEFAULT NULL,
  `GUARDIAN32` varchar(20) DEFAULT NULL,
  `JOINT_HO33` float DEFAULT NULL,
  `JOINT_HO34` float DEFAULT NULL,
  `INVESTOR35` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cm_karvy`
--

INSERT INTO `cm_karvy` (`sno`, `PRCODE`, `FUND`, `ACNO`, `DIVOPT`, `FUNDDESC`, `INVNAME`, `JTNAME1`, `JTNAME2`, `ADD1`, `ADD2`, `ADD3`, `CITY`, `PIN`, `STATE`, `COUNTRY`, `TPIN`, `DOB`, `FNAME`, `MNAME`, `RPHONE`, `PH_RES1`, `PH_RES2`, `OPHONE`, `PH_OFF1`, `PH_OFF2`, `FAX`, `FAX_OFF`, `STATUS`, `OCCPN`, `EMAIL`, `BNKACNO`, `BNAME`, `BNKACTYPE`, `BRANCH`, `BADD1`, `BADD2`, `BADD3`, `BCITY`, `BPHONE`, `BSTATE`, `BCOUNTRY`, `INV_ID`, `BROKCODE`, `PANGNO`, `MOBILE`, `CRDATE`, `CRTIME`, `OCCP_DESC`, `MODECD`, `MODEOFHOLD`, `MAPIN`, `IMCATEGORY`, `PAN2`, `PAN3`, `GUARDIANN0`, `NOMINEE`, `CLIENTID`, `DPID`, `CATEGORYD1`, `IFSC`, `STATUSDESC`, `NOMINEE2`, `NOMINEE3`, `KYC1FLAG`, `KYC2FLAG`, `KYC3FLAG`, `GUARDPANNO`, `LASTUPDAT2`, `CAN`, `NOMINEEREL`, `NOMINEE2R3`, `NOMINEE3R4`, `NOMINEERA5`, `NOMINEE2R6`, `NOMINEE3R7`, `ADRH1INFO`, `ADRH2INFO`, `ADRH3NFO`, `ADRGINFO`, `NOMINEE_A8`, `NOMINEE_A9`, `NOMINEE_10`, `NOMINEE_11`, `NOMINEE_12`, `NOMINEE_13`, `NOMINEE_14`, `NOMINEE_15`, `NOMINEE216`, `NOMINEE217`, `NOMINEE218`, `NOMINEE219`, `NOMINEE220`, `NOMINEE221`, `NOMINEE222`, `NOMINEE223`, `NOMINEE324`, `NOMINEE325`, `NOMINEE326`, `NOMINEE327`, `NOMINEE328`, `NOMINEE329`, `NOMINEE330`, `NOMINEE331`, `CKYC_NO`, `JH1_CKYC`, `JH2_CKYC`, `GUARDIAN32`, `JOINT_HO33`, `JOINT_HO34`, `INVESTOR35`) VALUES
(1, '108ASGP', '108', 51117400000, '', 'UTI-Transportation & Logistics Fund - GROWTH PLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1954-05-20', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'INDIAN OVERSEAS BANK', '', '', '', 'BHARTPURI', 'UJJAIN MP', '', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SMT ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(2, '108ASGP', '108', 523277000000, 'G', 'UTI-Transportation & Logistics Fund - GROWTH PLAN', 'ANIL KUMAR DUBEY', '', '', 'B - 6/8 SHRI GURU', 'MAHAKAL VANIJYA KENDRA', 'NANAKHEDA', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1953-05-29', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'BANK OF INDIA', '', '', 'DASHEHRA MAIDAN', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABSPD1475H', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SADHNA DUBEY', '', '', 'RESIDENT INDIAN', 'BKID0009103', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-09-28', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(3, '108ASGP', '108', 523306000000, 'G', 'UTI-Transportation & Logistics Fund - GROWTH PLAN', 'MANISHA PEDNEKAR', '', '', '38/A UNIVERSITY ROAD', 'OPPOSIT DURGA PLAZA', 'FREEGANJ', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'ANDHRA BANK', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ALJPP0788Q', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'KEDAR PEDNEKAR', '', '', 'RESIDENT INDIAN', 'ANDB0001656', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-03-05', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '38/A UNIVERCITY ROAD', 'OPPOSIT DURGA PLAZA', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(4, '108ASGP', '108', 523314000000, 'G', 'UTI-Transportation & Logistics Fund - GROWTH PLAN', 'KEENA JAIN', 'RAJENDRA KUMAR JAIN', '', '13 C SURAJ NAGAR RANGBAWDI ROAD', '', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'BANK OF BARODA', '', '', 'UJJAIN BRANCH', 'KHIRSAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BGMPJ9819D', '7000907037', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AFBPJ8796A', '', '', 'AVAKASH JAIN', '', '', 'RESIDENT INDIAN', 'BARB0UJJAIN', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(5, '108ASGP', '108', 523315000000, 'G', 'UTI-Transportation & Logistics Fund - GROWTH PLAN', 'AMITABH TRIPATHI', '', '', '153,', 'MAHASHWETA NAGAR', 'UJJAIN', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1963-07-31', '', '', '', '', '', '', '', '', '', '', 'I', 0, '', '', 'INDIAN OVERSEAS BANK', '', '', 'BHARATPURI ADMN.COMPLEX', 'DEVAS RDUJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACEPT9728L', '9425021517', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'SMT KANCHAN TRIPATHI', '', '', 'RESIDENT INDIAN', 'IOBA0001550', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(6, '108ASGP', '108', 523319000000, 'G', 'UTI-Transportation & Logistics Fund - GROWTH PLAN', 'SHAKUNTALA CHOPRA', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'STATE BANK OF INDIA', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACCPC9402G', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'MANISH CHOPRA', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-01', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 'MADHYA PRADESH', 456001, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(7, '108BAGP', '108', 51138200000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'INDIAN OVERSEAS BANK', '', '', '', '', 'M P', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'OTHERS', '1', 'SINGLY', '', 11, '', '', '', 'SMT. ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(8, '108BAGP', '108', 501220000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'AMITA JAIN', '', '', '63/1 VARUCHI MARG', '', '', 'UJJAIN MP', 456010, 'MADHYA PRADESH', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'BANK OF INDIA', '', '', 'FREEGANJ BR', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABMPJ1952B', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'ATUL JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '63', '', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(9, '108BAGP', '108', 511210000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'ALKA JAIN', 'SHRI JINDER KUMAR JAIN', '', '9, ANKPAT MARG', 'GEETA COLONY', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'INDIAN OVERSEAS BANK', '', '', '', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AHDPJ6971B', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', '', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-03-10', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(10, '108BAGP', '108', 523232000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'TRUPTI JAIN', 'JINDEV KUMAR JAIN', '', '71, TUKOGANJ ROAD', 'DEWAS', '', 'DEWAS', 455001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'ICICI BANK LTD', '', '', 'MADHAV CLUB RD', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGCPJ4547K', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(11, '108BAGP', '108', 523304000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'AMIT MANDIWAL', '', '', '9/7, PRAGATI NAGAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 9, 'MANDIWAL.AMIT07@GMAIL.COM', '', 'STATE BANK OF INDIA', '', '', 'JAWAHAR MARG', 'NAGDA', '', 'NAGDA', '', '', '', '', 'ARN-77989', 'BHAPM0056J', '9770352537', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'KRISHNA MANDIWAL', '', '', 'RESIDENT INDIAN', 'SBIN0005678', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-05-18', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(12, '108BAGP', '108', 523306000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'MANISHA PEDNEKAR', '', '', '38/A UNIVERSITY ROAD', 'OPPOSIT DURGA PLAZA', 'FREEGANJ', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'ANDHRA BANK', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ALJPP0788Q', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'KEDAR PEDNEKAR', '', '', 'RESIDENT INDIAN', 'ANDB0001656', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-03-05', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '38/A UNIVERCITY ROAD', 'OPPOSIT DURGA PLAZA', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(13, '108BAGP', '108', 523307000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'ISMAIL HUSSAIN', '', '', '92, TAIYABPURA BAKHAL', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'BANK OF MAHARASHTRA', '', '', 'UJJAIN BRANCH', 'UJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABVPH6905R', '9424562548', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'SABERA BADSHAH', '', '', 'RESIDENT INDIAN', 'MAHB0000233', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-05-01', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(14, '108BAGP', '108', 523310000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'CHANDMAL JAIN', '', '', '29 1 SITARAM PLAZA MANANA MARG NEAR', 'CHHIPA DHARSHALA', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 5, '', '', 'ORIENTAL BANK OF COMMERCE', '', '', 'DABRI PITHA', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ANXPJ3351M', '9424865910', '2018-12-03', '52412', 'RETIRED', '1', 'SINGLY', '', 11, '', '', '', 'ANIL KUMAR JAIN', '', '', 'RESIDENT INDIAN', 'ORBC0100268', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-07-31', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '60003345676655', '0', '0', '0', 0, 0, ''),
(15, '108BAGP', '108', 523314000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'HAIDER ALI KANCHWALA', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'ICICI BANK', '', '', 'TELIWADA', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGHPK7525P', '', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'BATUL KANCHWALA', '', '', 'RESIDENT INDIAN', 'ICIC0006585', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-07-09', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 'MADHYA PRADESH', 456006, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(16, '108BAGP', '108', 523314000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'PRERANA ZINGRE', '', '', 'A 13 2', 'MAHANANDA NAGAR', 'DEWAS ROAD', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 9, 'PRASHANT.ZINGRE@OUTLOOK.COM', '', 'BANK OF INDIA', '', '', 'UJJAIN', 'MAHANANDA NAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BMYPP4714R', '9826214545', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'PRASHANT ZINGRE', '', '', 'RESIDENT INDIAN', 'BKID0009109', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-28', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(17, '108BAGP', '108', 523314000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'KEENA JAIN', 'RAJENDRA KUMAR JAIN', '', '13 C SURAJ NAGAR RANGBAWDI ROAD', '', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'BANK OF BARODA', '', '', 'UJJAIN BRANCH', 'KHIRSAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BGMPJ9819D', '7000907037', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AFBPJ8796A', '', '', 'AVAKASH JAIN', '', '', 'RESIDENT INDIAN', 'BARB0UJJAIN', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(18, '108BAGP', '108', 523315000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'BATUL KANCHWALA', '', '', '16 ANKPAT MARG', 'BADA TELIWADO CHOURAHA', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'ICICI BANK LIMITED', '', '', 'TELIWADA CHAWRAHA', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AHOPB8605M', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'HAIDER ALI KANCHWALA', '', '', 'RESIDENT INDIAN', 'ICIC0006585', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-22', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(19, '108BAGP', '108', 523315000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'AMITABH TRIPATHI', '', '', '153,', 'MAHASHWETA NAGAR', 'UJJAIN', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1963-07-31', '', '', '', '', '', '', '', '', '', '', 'I', 0, '', '', 'INDIAN OVERSEAS BANK', '', '', 'BHARATPURI ADMN.COMPLEX', 'DEVAS RDUJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACEPT9728L', '9425021517', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'SMT KANCHAN TRIPATHI', '', '', 'RESIDENT INDIAN', 'IOBA0001550', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(20, '108BAGP', '108', 523316000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'REVANT DAVE', '', '', '3/3 RISHI NAGAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '2006-09-24', '', '', '', '', '', '', '', '', '', '', 'M', 9, 'VINODDAVE06@GMAIL.COM', '', 'AXIS BANK', '', '', 'HOTEL ASHRAY', 'GROUND FLOOR,77', 'DEWAS ROAD,UJJAIN', 'UJJAIN', '', '', '', '', 'ARN-77989', '', '8349627965', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', 'VINOD DAVE', '', '', '', 'RESIDENT INDIAN', 'UTIB0000329', 'MINOR', '', '', '', '', '', 'ALUPD2697P', '2018-11-16', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', 'Aadhaar not submitted', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(21, '108BAGP', '108', 523319000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'SHAKUNTALA CHOPRA', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'STATE BANK OF INDIA', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACCPC9402G', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'MANISH CHOPRA', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-01', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 'MADHYA PRADESH', 456001, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(22, '108BAGP', '108', 523319000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'THAKUR DAS CHANDNANI', '', '', '78 SHRIRAM NAGAR', '', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'STATE BANK OF INDIA', '', '', 'L.M.COMPLEX', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACAPC9190M', '', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'MONIKA CHANDNANI', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-02', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '78 SHRIRAM NAGAR', '', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(23, '108BAGP', '108', 523319000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'MONIKA CHANDNANI', '', '', '78 SHREE RAM NAGAR', '', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 9, '', '', 'STATE BANK OF INDIA', '', '', 'L.M.COMPLEX', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AXLPC1170F', '9826980753', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'THAKUR DAS CHANDNANI', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-11', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '78, SHREE RAM NAGAR', 'UJJAIN', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(24, '108BAGP', '108', 523319000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'JYOTI CHANDNANI', '', '', 'A-78 SHREE RAM NAGAR BEHIND SAI BABA MAN', '', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 10, '', '', 'STATE BANK OF INDIA', '', '', 'L.M.COMPLEX', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', '', '9826480753', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'MONIKA CHANDNANI', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-02', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', 'A-78, SHREE RAM NAGAR', 'BEHIND SAI BABA MANDIR', 'UJJAIN', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(25, '108BAGP', '108', 523320000000, 'G', 'UTI HYBRID EQUITY FUND - GROWTHPLAN', 'HAIDER ALI KANCHWALA', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'ICICI BANK LIMITED', '', '', 'UJJAIN TELLWADA CHAURAHA BRANC', '29,TELIWADA CHAURAHA', 'UJJAIN,MADHYA PRADESH', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGHPK7525P', '', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'BATUL KANCHWALA', '', '', 'RESIDENT INDIAN', 'ICIC0006585', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-07-09', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 'MADHYA PRADESH', 456006, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(26, '108BKGP', '108', 11119000000, 'G', 'UTI BANKING & FINANCIAL SERVICES FUND - GROWTH PLAN', 'ASHOK JHALANI', '', '', '71 CHHOTA SARAFA', '', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1950-12-10', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'PUNJAB NATIONAL BANK', '', '', '', 'UJJAIN', 'MP', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABIPJ0465B', '9977004321', '2018-12-03', '52412', 'OTHERS', '1', 'SINGLY', '', 11, '', '', '', 'SMT SUSHMA JHALANI', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-03-15', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(27, '108BKGP', '108', 51117400000, 'G', 'UTI BANKING & FINANCIAL SERVICES FUND - GROWTH PLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1954-05-20', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'INDIAN OVERSEAS BANK', '', '', '', 'BHARTPURI', 'UJJAIN MP', '', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SMT ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(28, '108BKGP', '108', 501220000000, 'G', 'UTI BANKING & FINANCIAL SERVICES FUND - GROWTH PLAN', 'AMITA JAIN', '', '', '63/1 VARUCHI MARG', '', '', 'UJJAIN MP', 456010, 'MADHYA PRADESH', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'BANK OF INDIA', '', '', 'FREEGANJ BR', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABMPJ1952B', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'ATUL JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '63', '', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(29, '108BKGP', '108', 523232000000, 'G', 'UTI BANKING & FINANCIAL SERVICES FUND - GROWTH PLAN', 'TRUPTI JAIN', 'JINDEV KUMAR JAIN', '', '71, TUKOGANJ ROAD', 'DEWAS', '', 'DEWAS', 455001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'ICICI BANK LTD', '', '', 'MADHAV CLUB RD', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGCPJ4547K', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(30, '108BKGP', '108', 523277000000, 'G', 'UTI BANKING & FINANCIAL SERVICES FUND - GROWTH PLAN', 'ANIL KUMAR DUBEY', '', '', 'B - 6/8 SHRI GURU', 'MAHAKAL VANIJYA KENDRA', 'NANAKHEDA', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1953-05-29', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'BANK OF INDIA', '', '', 'DASHEHRA MAIDAN', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABSPD1475H', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SADHNA DUBEY', '', '', 'RESIDENT INDIAN', 'BKID0009103', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-09-28', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(31, '108BKGP', '108', 523315000000, 'G', 'UTI BANKING & FINANCIAL SERVICES FUND - GROWTH PLAN', 'AMITABH TRIPATHI', '', '', '153,', 'MAHASHWETA NAGAR', 'UJJAIN', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1963-07-31', '', '', '', '', '', '', '', '', '', '', 'I', 0, '', '', 'INDIAN OVERSEAS BANK', '', '', 'BHARATPURI ADMN.COMPLEX', 'DEVAS RDUJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACEPT9728L', '9425021517', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'SMT KANCHAN TRIPATHI', '', '', 'RESIDENT INDIAN', 'IOBA0001550', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(32, '108DYGP', '108', 523232000000, 'G', 'UTI - DIVIDEND YIELD FUND GROWTH OPTION', 'TRUPTI JAIN', 'JINDEV JAIN', '', '71, TUKOGANJ ROAD', 'DEWAS', '', 'DEWAS', 455001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'ICICI BANK LTD', '', '', 'MADHAV CLUB ROAD', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGCPJ4547K', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(33, '108DYGP', '108', 523307000000, 'G', 'UTI - DIVIDEND YIELD FUND GROWTH OPTION', 'ISMAIL HUSSAIN', '', '', '92, TAIYABPURA BAKHAL', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'BANK OF MAHARASHTRA', '', '', 'UJJAIN BRANCH', 'UJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABVPH6905R', '9424562548', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'SABERA BADSHAH', '', '', 'RESIDENT INDIAN', 'MAHB0000233', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-05-01', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(34, '108EQGP', '108', 51117400000, '', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1954-05-20', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'INDIAN OVERSEAS BANK', '', '', '', 'BHARTPURI', 'UJJAIN MP', '', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SMT ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(35, '108EQGP', '108', 511196000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'Alka Jain', 'Jindev Kumar Jain', '', '9, ANKPAT MARG', 'GEETA COLONY', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'Indian Overseas Bank', '', '', '', '', '', 'Ujjain', '', '', '', '', 'ARN-77989', 'AHDPJ6971B', '', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'Anu Shree', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-03-10', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', 'C/o Jindev Kumar Jain', '9 A Geeta Colony', 'Budhwaria', 'Ujjain', '', 456006, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(36, '108EQGP', '108', 523232000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'TRUPTI JAIN', 'JINDEV KUMAR JAIN', '', '71, TUKOGANJ ROAD', 'DEWAS', '', 'DEWAS', 455001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'ICICI BANK LTD', '', '', 'MADHAV CLUB RD', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGCPJ4547K', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(37, '108EQGP', '108', 523306000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'MANISHA PEDNEKAR', '', '', '38/A UNIVERSITY ROAD', 'OPPOSIT DURGA PLAZA', 'FREEGANJ', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'ANDHRA BANK', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ALJPP0788Q', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'KEDAR PEDNEKAR', '', '', 'RESIDENT INDIAN', 'ANDB0001656', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-03-05', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '38/A UNIVERCITY ROAD', 'OPPOSIT DURGA PLAZA', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(38, '108EQGP', '108', 523314000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'MALHAR RAO ZINGRE', '', '', 'A-13/2 MAHANANDA NAGAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 5, '', '', 'STATE BANK OF INDIA', '', '', 'UJJAIN BRANCH', 'MADHAV NAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AAOPZ8335P', '', '2018-12-03', '52412', 'RETIRED', '1', 'SINGLY', '', 11, '', '', '', 'PRASHANT ZINGRE', '', '', 'RESIDENT INDIAN', 'SBIN0001309', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-02-27', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', 'A-13/2 MAHANANDA NAGAR', 'UJJAIN', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(39, '108EQGP', '108', 523314000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'PRERANA ZINGRE', '', '', 'A 13 2', 'MAHANANDA NAGAR', 'DEWAS ROAD', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 9, 'PRASHANT.ZINGRE@OUTLOOK.COM', '', 'BANK OF INDIA', '', '', 'UJJAIN', 'MAHANANDA NAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BMYPP4714R', '9826214545', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'PRASHANT ZINGRE', '', '', 'RESIDENT INDIAN', 'BKID0009109', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-28', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(40, '108EQGP', '108', 523314000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'KEENA JAIN', 'RAJENDRA KUMAR JAIN', '', '13 C SURAJ NAGAR RANGBAWDI ROAD', '', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'BANK OF BARODA', '', '', 'UJJAIN BRANCH', 'KHIRSAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BGMPJ9819D', '7000907037', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AFBPJ8796A', '', '', 'AVAKASH JAIN', '', '', 'RESIDENT INDIAN', 'BARB0UJJAIN', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(41, '108EQGP', '108', 523315000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'BATUL KANCHWALA', '', '', '16 ANKPAT MARG', 'BADA TELIWADO CHOURAHA', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'ICICI BANK LIMITED', '', '', 'TELIWADA CHAWRAHA', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AHOPB8605M', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'HAIDER ALI KANCHWALA', '', '', 'RESIDENT INDIAN', 'ICIC0006585', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-22', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(42, '108EQGP', '108', 523315000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'AMITABH TRIPATHI', '', '', '153,', 'MAHASHWETA NAGAR', 'UJJAIN', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1963-07-31', '', '', '', '', '', '', '', '', '', '', 'I', 0, '', '', 'INDIAN OVERSEAS BANK', '', '', 'BHARATPURI ADMN.COMPLEX', 'DEVAS RDUJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACEPT9728L', '9425021517', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'SMT KANCHAN TRIPATHI', '', '', 'RESIDENT INDIAN', 'IOBA0001550', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(43, '108EQGP', '108', 523320000000, 'G', 'UTI-EQUITY FUND (Formerly UTI-Mastergain Unit Scheme) - GROWTH PLAN', 'HAIDER ALI KANCHWALA', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'ICICI BANK LIMITED', '', '', 'UJJAIN TELLWADA CHAURAHA BRANC', '29,TELIWADA CHAURAHA', 'UJJAIN,MADHYA PRADESH', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGHPK7525P', '', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'BATUL KANCHWALA', '', '', 'RESIDENT INDIAN', 'ICIC0006585', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-07-09', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 'MADHYA PRADESH', 456006, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(44, '108FSGP', '108', 523304000000, 'G', 'UTI ULTRA SHORT TERM FUND - ( GROWTH OPTION )', 'AMIT MANDIWAL', '', '', '9/7, PRAGATI NAGAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 9, 'MANDIWAL.AMIT07@GMAIL.COM', '', 'STATE BANK OF INDIA', '', '', 'JAWAHAR MARG', 'NAGDA', '', 'NAGDA', '', '', '', '', 'ARN-77989', 'BHAPM0056J', '9770352537', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'KRISHNA MANDIWAL', '', '', 'RESIDENT INDIAN', 'SBIN0005678', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-05-18', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(45, '108FSGP', '108', 523316000000, 'G', 'UTI ULTRA SHORT TERM FUND - ( GROWTH OPTION )', 'REVANT DAVE', '', '', '3/3 RISHI NAGAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '2006-09-24', '', '', '', '', '', '', '', '', '', '', 'M', 9, 'VINODDAVE06@GMAIL.COM', '', 'AXIS BANK', '', '', 'HOTEL ASHRAY', 'GROUND FLOOR,77', 'DEWAS ROAD,UJJAIN', 'UJJAIN', '', '', '', '', 'ARN-77989', '', '8349627965', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', 'VINOD DAVE', '', '', '', 'RESIDENT INDIAN', 'UTIB0000329', 'MINOR', '', '', '', '', '', 'ALUPD2697P', '2018-11-16', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', 'Aadhaar not submitted', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(46, '108FSGP', '108', 523319000000, 'G', 'UTI ULTRA SHORT TERM FUND - ( GROWTH OPTION )', 'SHAKUNTALA CHOPRA', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'STATE BANK OF INDIA', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACCPC9402G', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'MANISH CHOPRA', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-01', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 'MADHYA PRADESH', 456001, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(47, '108FSGP', '108', 523319000000, 'G', 'UTI ULTRA SHORT TERM FUND - ( GROWTH OPTION )', 'THAKUR DAS CHANDNANI', '', '', '78 SHRIRAM NAGAR', '', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'STATE BANK OF INDIA', '', '', 'L.M.COMPLEX', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACAPC9190M', '', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'MONIKA CHANDNANI', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-02', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '78 SHRIRAM NAGAR', '', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(48, '108FSGP', '108', 523319000000, 'G', 'UTI ULTRA SHORT TERM FUND - ( GROWTH OPTION )', 'MONIKA CHANDNANI', '', '', '78 SHREE RAM NAGAR', '', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 9, '', '', 'STATE BANK OF INDIA', '', '', 'L.M.COMPLEX', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AXLPC1170F', '9826980753', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'THAKUR DAS CHANDNANI', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-11', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '78, SHREE RAM NAGAR', 'UJJAIN', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(49, '108FSGP', '108', 523319000000, 'G', 'UTI ULTRA SHORT TERM FUND - ( GROWTH OPTION )', 'JYOTI CHANDNANI', '', '', 'A-78 SHREE RAM NAGAR BEHIND SAI BABA MAN', '', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 10, '', '', 'STATE BANK OF INDIA', '', '', 'L.M.COMPLEX', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', '', '9826480753', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'MONIKA CHANDNANI', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-02', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', 'A-78, SHREE RAM NAGAR', 'BEHIND SAI BABA MANDIR', 'UJJAIN', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(50, '108FSGP', '108', 523320000000, 'G', 'UTI ULTRA SHORT TERM FUND - ( GROWTH OPTION )', 'HAIDER ALI KANCHWALA', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'ICICI BANK LIMITED', '', '', 'UJJAIN TELLWADA CHAURAHA BRANC', '29,TELIWADA CHAURAHA', 'UJJAIN,MADHYA PRADESH', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGHPK7525P', '', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'BATUL KANCHWALA', '', '', 'RESIDENT INDIAN', 'ICIC0006585', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-07-09', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 'MADHYA PRADESH', 456006, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(51, '108INGP', '108', 11119000000, 'G', 'UTI-INFRASTRUCTURE FUND - GROWTH PLAN', 'ASHOK JHALANI', '', '', '71 CHHOTA SARAFA', '', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1950-12-10', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'PUNJAB NATIONAL BANK', '', '', '', 'UJJAIN', 'MP', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABIPJ0465B', '9977004321', '2018-12-03', '52412', 'OTHERS', '1', 'SINGLY', '', 11, '', '', '', 'SMT SUSHMA JHALANI', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-03-15', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(52, '108INGP', '108', 51117400000, '', 'UTI-INFRASTRUCTURE FUND - GROWTH PLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1954-05-20', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'INDIAN OVERSEAS BANK', '', '', '', 'BHARTPURI', 'UJJAIN MP', '', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SMT ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(53, '108INGP', '108', 511210000000, '', 'UTI-INFRASTRUCTURE FUND - GROWTH PLAN', 'ALKA JAIN', 'SHRI JINDER KUMAR JAIN', '', '9, ANKPAT MARG', 'GEETA COLONY', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'INDIAN OVERSEAS BANK', '', '', '', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AHDPJ6971B', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', '', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-03-10', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(54, '108INGP', '108', 523310000000, 'G', 'UTI-INFRASTRUCTURE FUND - GROWTH PLAN', 'DAKSHA CHIRANJILAL BHATHA', 'CHIRANJIVLAL BHATHA', '', '16/10, VASANT VIHAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'UCO BANK', '', '', 'UJJAIN BRANCH', 'NAI SADAK', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BEAPB4125C', '', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEHPB9551J', '', '', 'MEET BHATHA', '', '', 'RESIDENT INDIAN', 'UCBA0000053', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2017-12-27', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '16/10, VASANT VIHAR', 'UJJAIN', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(55, '108MCGP', '108', 51117400000, '', 'UTI - MID CAP FUND GROWTH PLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1954-05-20', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'INDIAN OVERSEAS BANK', '', '', '', 'BHARTPURI', 'UJJAIN MP', '', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SMT ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(56, '108MCGP', '108', 511196000000, '', 'UTI - MID CAP FUND GROWTH PLAN', 'Alka Jain', 'Jindev Kumar Jain', '', '9, ANKPAT MARG', 'GEETA COLONY', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'Indian Overseas Bank', '', '', '', '', '', 'Ujjain', '', '', '', '', 'ARN-77989', 'AHDPJ6971B', '', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'Anu Shree', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-03-10', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', 'C/o Jindev Kumar Jain', '9 A Geeta Colony', 'Budhwaria', 'Ujjain', '', 456006, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(57, '108MCGP', '108', 523306000000, 'G', 'UTI - MID CAP FUND GROWTH PLAN', 'MANISHA PEDNEKAR', '', '', '38/A UNIVERSITY ROAD', 'OPPOSIT DURGA PLAZA', 'FREEGANJ', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'ANDHRA BANK', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ALJPP0788Q', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'KEDAR PEDNEKAR', '', '', 'RESIDENT INDIAN', 'ANDB0001656', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-03-05', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '38/A UNIVERCITY ROAD', 'OPPOSIT DURGA PLAZA', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(58, '108MCGP', '108', 523310000000, 'G', 'UTI - MID CAP FUND GROWTH PLAN', 'DAKSHA CHIRANJILAL BHATHA', 'CHIRANJIVLAL BHATHA', '', '16/10, VASANT VIHAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'UCO BANK', '', '', 'UJJAIN BRANCH', 'NAI SADAK', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BEAPB4125C', '', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEHPB9551J', '', '', 'MEET BHATHA', '', '', 'RESIDENT INDIAN', 'UCBA0000053', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2017-12-27', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '16/10, VASANT VIHAR', 'UJJAIN', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(59, '108MFGP', '108', 523319000000, 'G', 'UTI-MNC FUND - GROWTH PLAN', 'SHAKUNTALA CHOPRA', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'STATE BANK OF INDIA', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACCPC9402G', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'MANISH CHOPRA', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-01', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 'MADHYA PRADESH', 456001, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(60, '108MGGP', '108', 501220000000, 'G', 'UTI CORE EQUITY FUND - GROWTH PLAN', 'AMITA JAIN', '', '', '63/1 VARUCHI MARG', '', '', 'UJJAIN MP', 456010, 'MADHYA PRADESH', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'BANK OF INDIA', '', '', 'FREEGANJ BR', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABMPJ1952B', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'ATUL JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '63', '', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(61, '108MGGP', '108', 523314000000, 'G', 'UTI CORE EQUITY FUND - GROWTH PLAN', 'KEENA JAIN', 'RAJENDRA KUMAR JAIN', '', '13 C SURAJ NAGAR RANGBAWDI ROAD', '', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'BANK OF BARODA', '', '', 'UJJAIN BRANCH', 'KHIRSAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BGMPJ9819D', '7000907037', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AFBPJ8796A', '', '', 'AVAKASH JAIN', '', '', 'RESIDENT INDIAN', 'BARB0UJJAIN', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, '');
INSERT INTO `cm_karvy` (`sno`, `PRCODE`, `FUND`, `ACNO`, `DIVOPT`, `FUNDDESC`, `INVNAME`, `JTNAME1`, `JTNAME2`, `ADD1`, `ADD2`, `ADD3`, `CITY`, `PIN`, `STATE`, `COUNTRY`, `TPIN`, `DOB`, `FNAME`, `MNAME`, `RPHONE`, `PH_RES1`, `PH_RES2`, `OPHONE`, `PH_OFF1`, `PH_OFF2`, `FAX`, `FAX_OFF`, `STATUS`, `OCCPN`, `EMAIL`, `BNKACNO`, `BNAME`, `BNKACTYPE`, `BRANCH`, `BADD1`, `BADD2`, `BADD3`, `BCITY`, `BPHONE`, `BSTATE`, `BCOUNTRY`, `INV_ID`, `BROKCODE`, `PANGNO`, `MOBILE`, `CRDATE`, `CRTIME`, `OCCP_DESC`, `MODECD`, `MODEOFHOLD`, `MAPIN`, `IMCATEGORY`, `PAN2`, `PAN3`, `GUARDIANN0`, `NOMINEE`, `CLIENTID`, `DPID`, `CATEGORYD1`, `IFSC`, `STATUSDESC`, `NOMINEE2`, `NOMINEE3`, `KYC1FLAG`, `KYC2FLAG`, `KYC3FLAG`, `GUARDPANNO`, `LASTUPDAT2`, `CAN`, `NOMINEEREL`, `NOMINEE2R3`, `NOMINEE3R4`, `NOMINEERA5`, `NOMINEE2R6`, `NOMINEE3R7`, `ADRH1INFO`, `ADRH2INFO`, `ADRH3NFO`, `ADRGINFO`, `NOMINEE_A8`, `NOMINEE_A9`, `NOMINEE_10`, `NOMINEE_11`, `NOMINEE_12`, `NOMINEE_13`, `NOMINEE_14`, `NOMINEE_15`, `NOMINEE216`, `NOMINEE217`, `NOMINEE218`, `NOMINEE219`, `NOMINEE220`, `NOMINEE221`, `NOMINEE222`, `NOMINEE223`, `NOMINEE324`, `NOMINEE325`, `NOMINEE326`, `NOMINEE327`, `NOMINEE328`, `NOMINEE329`, `NOMINEE330`, `NOMINEE331`, `CKYC_NO`, `JH1_CKYC`, `JH2_CKYC`, `GUARDIAN32`, `JOINT_HO33`, `JOINT_HO34`, `INVESTOR35`) VALUES
(62, '108MGGP', '108', 523315000000, 'G', 'UTI CORE EQUITY FUND - GROWTH PLAN', 'AMITABH TRIPATHI', '', '', '153,', 'MAHASHWETA NAGAR', 'UJJAIN', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1963-07-31', '', '', '', '', '', '', '', '', '', '', 'I', 0, '', '', 'INDIAN OVERSEAS BANK', '', '', 'BHARATPURI ADMN.COMPLEX', 'DEVAS RDUJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACEPT9728L', '9425021517', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'SMT KANCHAN TRIPATHI', '', '', 'RESIDENT INDIAN', 'IOBA0001550', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(63, '108MIGP', '108', 11119000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'ASHOK JHALANI', '', '', '71 CHHOTA SARAFA', '', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1950-12-10', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'PUNJAB NATIONAL BANK', '', '', '', 'UJJAIN', 'MP', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABIPJ0465B', '9977004321', '2018-12-03', '52412', 'OTHERS', '1', 'SINGLY', '', 11, '', '', '', 'SMT SUSHMA JHALANI', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-03-15', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(64, '108MIGP', '108', 51117400000, '', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1954-05-20', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'INDIAN OVERSEAS BANK', '', '', '', 'BHARTPURI', 'UJJAIN MP', '', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SMT ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(65, '108MIGP', '108', 51138200000, '', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'INDIAN OVERSEAS BANK', '', '', '', '', 'M P', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'OTHERS', '1', 'SINGLY', '', 11, '', '', '', 'SMT. ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(66, '108MIGP', '108', 511177000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'KARISHMA SHAH', '', '', '2 MUSADDIPURA', '', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1992-07-01', '', '', '7697270628', '', '', '', '', '', '', '', 'I', 6, '', '', 'UNION BANK OF INDIA', '', '', 'UJJAIN BRANCH', 'FAWARA CHOWK, TILAK MARG', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ERTPS7133C', '8989647201', '2018-12-03', '52412', 'OTHERS', '1', 'SINGLY', '', 11, '', '', '', 'DINESH KUMAR SHAH', '', '', 'RESIDENT INDIAN', 'UBIN0532665', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-06', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(67, '108MIGP', '108', 511196000000, '', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'Alka Jain', 'Jindev Kumar Jain', '', '9, ANKPAT MARG', 'GEETA COLONY', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'Indian Overseas Bank', '', '', '', '', '', 'Ujjain', '', '', '', '', 'ARN-77989', 'AHDPJ6971B', '', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'Anu Shree', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-03-10', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', 'C/o Jindev Kumar Jain', '9 A Geeta Colony', 'Budhwaria', 'Ujjain', '', 456006, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(68, '108MIGP', '108', 523232000000, '', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'TRUPTI JAIN', 'JINDEV JAIN', '', '71, TUKOGANJ ROAD', 'DEWAS', '', 'DEWAS', 455001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'ICICI BANK LTD', '', '', 'MADHAV CLUB ROAD', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGCPJ4547K', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(69, '108MIGP', '108', 523232000000, '', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'TRUPTI JAIN', 'JINDEV KUMAR JAIN', '', '71, TUKOGANJ ROAD', 'DEWAS', '', 'DEWAS', 455001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'ICICI BANK LTD', '', '', 'MADHAV CLUB RD', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGCPJ4547K', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', 'ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(70, '108MIGP', '108', 523303000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'AMITOJ BHARGAVA', '', '', '14 NEAR SETHI NAGAR POOJA', 'UJJAIN', 'UJJAIN', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, 'AMITOJBHARGAVA@GMAIL.COM', '', 'ALLAHABAD BANK', '', '', 'RISHI NAGAR BRANCH', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACIPB3495J', '9425918085', '2018-12-03', '52412', 'OTHERS', '1', 'SINGLY', '', 11, '', '', '', 'SANYOGITA BHARGAVA', '', '', 'RESIDENT INDIAN', 'ALLA0211877', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-02-11', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '14, POOJA NAGAR', 'NEAR SETHI NAGAR UJJAIN', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(71, '108MIGP', '108', 523306000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'MANISHA PEDNEKAR', '', '', '38/A UNIVERSITY ROAD', 'OPPOSIT DURGA PLAZA', 'FREEGANJ', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'ANDHRA BANK', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ALJPP0788Q', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'KEDAR PEDNEKAR', '', '', 'RESIDENT INDIAN', 'ANDB0001656', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-03-05', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '38/A UNIVERCITY ROAD', 'OPPOSIT DURGA PLAZA', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(72, '108MIGP', '108', 523307000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'ISMAIL HUSSAIN', '', '', '92, TAIYABPURA BAKHAL', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'BANK OF MAHARASHTRA', '', '', 'UJJAIN BRANCH', 'UJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ABVPH6905R', '9424562548', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'SABERA BADSHAH', '', '', 'RESIDENT INDIAN', 'MAHB0000233', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-05-01', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(73, '108MIGP', '108', 523307000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'ACHLA SHARMA', '', '', '9 AZAD NAGAR', '', '', 'INDORE', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 17, '', '', 'BHARATIYA MAHILA BANK', '', '', 'UJJAIN', 'VARRUCHI MARG', 'FREEGANY', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AHCPS5336E', '9827065564', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'MANU SHARMA', '', '', 'RESIDENT INDIAN', 'BMBL0000053', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2017-12-23', '', 'SON', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(74, '108MIGP', '108', 523310000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'DAKSHA CHIRANJILAL BHATHA', 'CHIRANJIVLAL BHATHA', '', '16/10, VASANT VIHAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'UCO BANK', '', '', 'UJJAIN BRANCH', 'NAI SADAK', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BEAPB4125C', '', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEHPB9551J', '', '', 'MEET BHATHA', '', '', 'RESIDENT INDIAN', 'UCBA0000053', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2017-12-27', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '16/10, VASANT VIHAR', 'UJJAIN', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(75, '108MIGP', '108', 523310000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'CHANDMAL JAIN', '', '', '29 1 SITARAM PLAZA MANANA MARG NEAR', 'CHHIPA DHARSHALA', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 5, '', '', 'ORIENTAL BANK OF COMMERCE', '', '', 'DABRI PITHA', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ANXPJ3351M', '9424865910', '2018-12-03', '52412', 'RETIRED', '1', 'SINGLY', '', 11, '', '', '', 'ANIL KUMAR JAIN', '', '', 'RESIDENT INDIAN', 'ORBC0100268', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-07-31', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '60003345676655', '0', '0', '0', 0, 0, ''),
(76, '108MIGP', '108', 523314000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'HAIDER ALI KANCHWALA', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 3, '', '', 'ICICI BANK', '', '', 'TELIWADA', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AGHPK7525P', '', '2018-12-03', '52412', 'BUSINESS', '1', 'SINGLY', '', 11, '', '', '', 'BATUL KANCHWALA', '', '', 'RESIDENT INDIAN', 'ICIC0006585', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-07-09', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '16, ANKPAT MARG', 'BADA TELIWADA', '', 'UJJAIN', 'MADHYA PRADESH', 456006, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(77, '108MIGP', '108', 523314000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'MALHAR RAO ZINGRE', '', '', 'A-13/2 MAHANANDA NAGAR', 'UJJAIN', '', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 5, '', '', 'STATE BANK OF INDIA', '', '', 'UJJAIN BRANCH', 'MADHAV NAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AAOPZ8335P', '', '2018-12-03', '52412', 'RETIRED', '1', 'SINGLY', '', 11, '', '', '', 'PRASHANT ZINGRE', '', '', 'RESIDENT INDIAN', 'SBIN0001309', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-02-27', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', 'A-13/2 MAHANANDA NAGAR', 'UJJAIN', '', 'UJJAIN', 'MADHYA PRADESH', 456010, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(78, '108MIGP', '108', 523314000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'PRERANA ZINGRE', '', '', 'A 13 2', 'MAHANANDA NAGAR', 'DEWAS ROAD', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 9, 'PRASHANT.ZINGRE@OUTLOOK.COM', '', 'BANK OF INDIA', '', '', 'UJJAIN', 'MAHANANDA NAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BMYPP4714R', '9826214545', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'PRASHANT ZINGRE', '', '', 'RESIDENT INDIAN', 'BKID0009109', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-28', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(79, '108MIGP', '108', 523314000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'KEENA JAIN', 'RAJENDRA KUMAR JAIN', '', '13 C SURAJ NAGAR RANGBAWDI ROAD', '', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'BANK OF BARODA', '', '', 'UJJAIN BRANCH', 'KHIRSAGAR', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'BGMPJ9819D', '7000907037', '2018-12-03', '52412', 'HOUSE WIFE', '4', 'ANYONE OR SURVIVOR', '', 11, 'AFBPJ8796A', '', '', 'AVAKASH JAIN', '', '', 'RESIDENT INDIAN', 'BARB0UJJAIN', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-04-20', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(80, '108MIGP', '108', 523315000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'BATUL KANCHWALA', '', '', '16 ANKPAT MARG', 'BADA TELIWADO CHOURAHA', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'ICICI BANK LIMITED', '', '', 'TELIWADA CHAWRAHA', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AHOPB8605M', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'HAIDER ALI KANCHWALA', '', '', 'RESIDENT INDIAN', 'ICIC0006585', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-22', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, ''),
(81, '108MIGP', '108', 523315000000, 'G', 'UTI REGULAR SAVINGS FUND - GROWTH PLAN', 'AMITABH TRIPATHI', '', '', '153,', 'MAHASHWETA NAGAR', 'UJJAIN', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1963-07-31', '', '', '', '', '', '', '', '', '', '', 'I', 0, '', '', 'INDIAN OVERSEAS BANK', '', '', 'BHARATPURI ADMN.COMPLEX', 'DEVAS RDUJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACEPT9728L', '9425021517', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'SMT KANCHAN TRIPATHI', '', '', 'RESIDENT INDIAN', 'IOBA0001550', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(82, '108OPGP', '108', 51117400000, '', 'UTI VALUE OPPORTUNITIES FUND - GROWTH PLAN', 'SHRI JINDEV KUMAR JAIN', '', '', '9, GEETA COLONY', 'UJJAIN', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1954-05-20', '', '', '', '', '', '', '', '', '', '', 'I', 1, '', '', 'INDIAN OVERSEAS BANK', '', '', '', 'BHARTPURI', 'UJJAIN MP', '', '', '', '', '', 'ARN-77989', 'AEPPJ3027B', '', '2018-12-03', '52412', 'SERVICE', '1', 'SINGLY', '', 11, '', '', '', 'SMT ALKA JAIN', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-20', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(83, '108OPGP', '108', 511210000000, 'G', 'UTI VALUE OPPORTUNITIES FUND - GROWTH PLAN', 'ALKA JAIN', 'SHRI JINDER KUMAR JAIN', '', '9, ANKPAT MARG', 'GEETA COLONY', '', 'UJJAIN', 456006, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 6, '', '', 'INDIAN OVERSEAS BANK', '', '', '', '', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AHDPJ6971B', '', '2018-12-03', '52412', 'OTHERS', '4', 'ANYONE OR SURVIVOR', '', 11, 'AEPPJ3027B', '', '', '', '', '', 'RESIDENT INDIAN', '', 'INDIVIDUAL', '', '', 'Y', 'Y', '', '', '2018-03-10', '', '', '', '', 0, 0, 0, 'Aadhaar not submitted', 'Aadhaar not submitted', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(84, '108OPGP', '108', 523307000000, 'G', 'UTI VALUE OPPORTUNITIES FUND - GROWTH PLAN', 'ACHLA SHARMA', '', '', '9 AZAD NAGAR', '', '', 'INDORE', 456010, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 17, '', '', 'BHARATIYA MAHILA BANK LIMITED', '', '', 'UJJAIN BRANCH', 'VARRUCHI MARG', 'FREEGANJ', 'UJJAIN', '', '', '', '', 'ARN-77989', 'AHCPS5336E', '9827065564', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'MANUSHARMA', '', '', 'RESIDENT INDIAN', 'BMBL0000053', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2017-12-23', '', 'SON', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(85, '108OPGP', '108', 523315000000, 'G', 'UTI VALUE OPPORTUNITIES FUND - GROWTH PLAN', 'AMITABH TRIPATHI', '', '', '153,', 'MAHASHWETA NAGAR', 'UJJAIN', 'UJJAIN', 456010, 'MADHYA PRADESH', '', '', '1963-07-31', '', '', '', '', '', '', '', '', '', '', 'I', 0, '', '', 'INDIAN OVERSEAS BANK', '', '', 'BHARATPURI ADMN.COMPLEX', 'DEVAS RDUJJAIN', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACEPT9728L', '9425021517', '2018-12-03', '52412', 'NOT AVAILABLE', '1', 'SINGLY', '', 11, '', '', '', 'SMT KANCHAN TRIPATHI', '', '', 'RESIDENT INDIAN', 'IOBA0001550', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-04-19', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', 0, 0, ''),
(86, '108OPGP', '108', 523319000000, 'G', 'UTI VALUE OPPORTUNITIES FUND - GROWTH PLAN', 'SHAKUNTALA CHOPRA', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 456001, 'MADHYA PRADESH', '', '', '1900-01-01', '', '', '', '', '', '', '', '', '', '', 'I', 2, '', '', 'STATE BANK OF INDIA', '', '', 'UJJAIN BRANCH', 'FREEGANJ', '', 'UJJAIN', '', '', '', '', 'ARN-77989', 'ACCPC9402G', '', '2018-12-03', '52412', 'HOUSE WIFE', '1', 'SINGLY', '', 11, '', '', '', 'MANISH CHOPRA', '', '', 'RESIDENT INDIAN', 'SBIN0030108', 'INDIVIDUAL', '', '', 'Y', '', '', '', '2018-06-01', '', '', '', '', 100, 0, 0, 'Aadhaar not submitted', '', '', '', '34 AMAR SINGH MARG', 'NEAR FAGUNIYA HALL FREEGANJ', '', 'UJJAIN', 'MADHYA PRADESH', 456001, 0, '', '', '', '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, '', '0', '0', '0', '0', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_cams`
--

CREATE TABLE `tr_cams` (
  `sno` int(11) NOT NULL,
  `AMC_CODE` varchar(3) DEFAULT NULL,
  `FOLIO_NO` varchar(20) DEFAULT NULL,
  `PRODCODE` varchar(8) DEFAULT NULL,
  `SCHEME` varchar(100) DEFAULT NULL,
  `INV_NAME` varchar(70) DEFAULT NULL,
  `TRXNTYPE` varchar(7) DEFAULT NULL,
  `TRXNNO` float DEFAULT NULL,
  `TRXNMODE` varchar(2) DEFAULT NULL,
  `TRXNSTAT` varchar(1) DEFAULT NULL,
  `USERCODE` varchar(10) DEFAULT NULL,
  `USRTRXNO` float DEFAULT NULL,
  `TRADDATE` date DEFAULT NULL,
  `POSTDATE` date DEFAULT NULL,
  `PURPRICE` float DEFAULT NULL,
  `UNITS` float DEFAULT NULL,
  `AMOUNT` float DEFAULT NULL,
  `BROKCODE` varchar(20) DEFAULT NULL,
  `SUBBROK` varchar(30) DEFAULT NULL,
  `BROKPERC` float DEFAULT NULL,
  `BROKCOMM` float DEFAULT NULL,
  `ALTFOLIO` float DEFAULT NULL,
  `REP_DATE` date DEFAULT NULL,
  `TIME1` varchar(5) DEFAULT NULL,
  `TRXNSUBTYP` varchar(32) DEFAULT NULL,
  `APPLICATIO` varchar(20) DEFAULT NULL,
  `TRXN_NATUR` varchar(80) DEFAULT NULL,
  `TAX` float DEFAULT NULL,
  `TOTAL_TAX` float DEFAULT NULL,
  `TE_15H` varchar(2) DEFAULT NULL,
  `MICR_NO` varchar(40) DEFAULT NULL,
  `REMARKS` varchar(100) DEFAULT NULL,
  `SWFLAG` varchar(12) DEFAULT NULL,
  `OLD_FOLIO` varchar(30) DEFAULT NULL,
  `SEQ_NO` float DEFAULT NULL,
  `REINVEST_F` varchar(1) DEFAULT NULL,
  `MULT_BROK` varchar(32) DEFAULT NULL,
  `STT` float DEFAULT NULL,
  `LOCATION` varchar(30) DEFAULT NULL,
  `SCHEME_TYP` varchar(15) DEFAULT NULL,
  `TAX_STATUS` varchar(35) DEFAULT NULL,
  `LOAD` float DEFAULT NULL,
  `SCANREFNO` varchar(50) DEFAULT NULL,
  `PAN` varchar(20) DEFAULT NULL,
  `INV_IIN` float DEFAULT NULL,
  `TARG_SRC_S` varchar(100) DEFAULT NULL,
  `TRXN_TYPE_` varchar(32) DEFAULT NULL,
  `TICOB_TRTY` varchar(2) DEFAULT NULL,
  `TICOB_TRNO` varchar(2) DEFAULT NULL,
  `TICOB_POST` varchar(2) DEFAULT NULL,
  `DP_ID` varchar(20) DEFAULT NULL,
  `TRXN_CHARG` float DEFAULT NULL,
  `ELIGIB_AMT` float DEFAULT NULL,
  `SRC_OF_TXN` varchar(14) DEFAULT NULL,
  `TRXN_SUFFI` varchar(150) DEFAULT NULL,
  `SIPTRXNNO` float DEFAULT NULL,
  `TER_LOCATI` varchar(1) DEFAULT NULL,
  `EUIN` varchar(20) DEFAULT NULL,
  `EUIN_VALID` varchar(1) DEFAULT NULL,
  `EUIN_OPTED` varchar(1) DEFAULT NULL,
  `SUB_BRK_AR` varchar(20) DEFAULT NULL,
  `EXCH_DC_FL` varchar(1) DEFAULT NULL,
  `SRC_BRK_CO` varchar(20) DEFAULT NULL,
  `SYS_REGN_D` date DEFAULT NULL,
  `AC_NO` varchar(40) DEFAULT NULL,
  `BANK_NAME` varchar(40) DEFAULT NULL,
  `REVERSAL_C` float DEFAULT NULL,
  `EXCHANGE_F` varchar(3) DEFAULT NULL,
  `CA_INITIAT` date DEFAULT NULL,
  `GST_STATE_` varchar(2) DEFAULT NULL,
  `IGST_AMOUN` float DEFAULT NULL,
  `CGST_AMOUN` float DEFAULT NULL,
  `SGST_AMOUN` float DEFAULT NULL,
  `REV_REMARK` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_cams`
--

INSERT INTO `tr_cams` (`sno`, `AMC_CODE`, `FOLIO_NO`, `PRODCODE`, `SCHEME`, `INV_NAME`, `TRXNTYPE`, `TRXNNO`, `TRXNMODE`, `TRXNSTAT`, `USERCODE`, `USRTRXNO`, `TRADDATE`, `POSTDATE`, `PURPRICE`, `UNITS`, `AMOUNT`, `BROKCODE`, `SUBBROK`, `BROKPERC`, `BROKCOMM`, `ALTFOLIO`, `REP_DATE`, `TIME1`, `TRXNSUBTYP`, `APPLICATIO`, `TRXN_NATUR`, `TAX`, `TOTAL_TAX`, `TE_15H`, `MICR_NO`, `REMARKS`, `SWFLAG`, `OLD_FOLIO`, `SEQ_NO`, `REINVEST_F`, `MULT_BROK`, `STT`, `LOCATION`, `SCHEME_TYP`, `TAX_STATUS`, `LOAD`, `SCANREFNO`, `PAN`, `INV_IIN`, `TARG_SRC_S`, `TRXN_TYPE_`, `TICOB_TRTY`, `TICOB_TRNO`, `TICOB_POST`, `DP_ID`, `TRXN_CHARG`, `ELIGIB_AMT`, `SRC_OF_TXN`, `TRXN_SUFFI`, `SIPTRXNNO`, `TER_LOCATI`, `EUIN`, `EUIN_VALID`, `EUIN_OPTED`, `SUB_BRK_AR`, `EXCH_DC_FL`, `SRC_BRK_CO`, `SYS_REGN_D`, `AC_NO`, `BANK_NAME`, `REVERSAL_C`, `EXCHANGE_F`, `CA_INITIAT`, `GST_STATE_`, `IGST_AMOUN`, `CGST_AMOUN`, `SGST_AMOUN`, `REV_REMARK`) VALUES
(1, 'H', '12237327/94', 'HPREG', 'HDFC Hybrid Equity Fund - Regular Plan - Growth', 'Hina Husain', 'SI24A', 197739000, 'N', 'Y', 'NSELM', 352701000, '2018-11-30', '2018-11-30', 50.981, 49.038, 2500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '1487186', 'Systematic - From HDFC Low Duration Fund-Retail-Gr', 0, 0, 'N', '', '', 'INTER', '', 17311500000, 'Z', '', 0, 'Mumbai', 'Balanced', 'Individual', 0, '', 'AAHPH7742R', 0, 'H54', 'Switch In', '', '', '', '', 0, 0, '', '- From HDFC Low Duration Fund-Retail-Gr', 3391360, 'B', 'E028413', 'Y', 'Y', '', '', '', '2018-01-19', '09081530002445', 'HDFC Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(2, 'H', '13027006/88', 'HLFGN', 'HDFC Liquid Fund - Regular Plan - Growth', 'Abhishek Jain', 'SO2', 197685000, 'N', 'Y', 'CBEAGNES', 5295170, '2018-11-30', '2018-11-30', 3574.17, 0.28, 1000, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - To HDFC Hybrid Equity Fund-Growth - Instalment 52/60', 0, 0, 'N', '', '', 'NA', '', 17310100000, 'Z', '', 0, 'Indore', 'Cash', 'Individual', 0, '', 'AVEPJ8246J', 0, 'HPREG', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To HDFC Hybrid Equity Fund-Growth - Instalment 52/60', 2762320, 'B', 'E197444', '', 'N', '', '', '', '0000-00-00', '818010004906', 'Kotak Mahindra Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(3, 'H', '12237327/94', 'H54', 'HDFC Low Duration Fund - Retail - Regular Plan - Growth', 'Hina Husain', 'SO2', 197691000, 'N', 'Y', 'NSELM', 352701000, '2018-11-30', '2018-11-30', 38.0326, 65.733, 2500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '1487186', 'Systematic - To HDFC Hybrid Equity Fund-Growth', 0, 0, 'N', '', '', 'NA', '', 17310100000, 'Z', '', 0, 'Mumbai', 'Ultra Liquid', 'Individual', 0, '', 'AAHPH7742R', 0, 'HPREG', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To HDFC Hybrid Equity Fund-Growth', 3391360, 'B', 'E028413', '', 'Y', '', '', '', '0000-00-00', '09081530002445', 'HDFC Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(4, 'H', '14288706/25', 'H54', 'HDFC Low Duration Fund - Retail - Regular Plan - Growth', 'Akanksha Dham', 'SO2', 197689000, 'N', 'Y', 'CBEVPRAJ', 1488660, '2018-11-30', '2018-11-30', 38.0326, 13.147, 500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - To HDFC Hybrid Equity Fund-Growth - Instalment 119/250', 0, 0, 'N', '', '', 'NA', '', 17310100000, 'Z', '', 0, 'Ujjain', 'Ultra Liquid', 'Individual', 0, '', 'BGBPD7715B', 0, 'HPREG', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To HDFC Hybrid Equity Fund-Growth - Instalment 119/250', 4721790, 'B', 'E028413', 'Y', 'Y', '', '', '', '0000-00-00', '002401566531', 'ICICI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(5, 'H', '12892957/73', 'HPREG', 'HDFC Hybrid Equity Fund - Regular Plan - Growth', 'Hina Husain', 'SI24A', 197739000, 'N', 'Y', 'NSELM', 352701000, '2018-11-30', '2018-11-30', 50.981, 49.038, 2500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '1487187', 'Systematic - From HDFC Low Duration Fund-Retail-Gr', 0, 0, 'N', '', '', 'INTER', '', 17311500000, 'Z', '', 0, 'Mumbai', 'Balanced', 'Individual', 0, '', 'AAHPH7742R', 0, 'H54', 'Switch In', '', '', '', '', 0, 0, '', '- From HDFC Low Duration Fund-Retail-Gr', 3395930, 'B', 'E028413', 'Y', 'Y', '', '', '', '2018-01-19', '09081530002445', 'HDFC Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(6, 'H', '13027006/88', 'HPREG', 'HDFC Hybrid Equity Fund - Regular Plan - Growth', 'Abhishek Jain', 'SI24A', 197733000, 'N', 'Y', 'CBEAGNES', 5295170, '2018-11-30', '2018-11-30', 50.981, 19.615, 1000, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - From HDFC Liquid Fund-Growth', 0, 0, 'N', '', '', 'INTER', '', 17311400000, 'Z', '', 0, 'Indore', 'Balanced', 'Individual', 0, '', 'AVEPJ8246J', 0, 'HLFGN', 'Switch In', '', '', '', '', 0, 0, '', '- From HDFC Liquid Fund-Growth', 2762320, 'B', 'E197444', '', 'N', '', '', '', '2017-11-24', '818010004906', 'Kotak Mahindra Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(7, 'H', '14288706/25', 'HPREG', 'HDFC Hybrid Equity Fund - Regular Plan - Growth', 'Akanksha Dham', 'SI45AS', 197731000, 'N', 'Y', 'CBEVPRAJ', 1488660, '2018-11-30', '2018-11-30', 50.981, 9.808, 500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - From HDFC Low Duration Fund-Retail-Gr', 0, 0, 'N', '', '', 'INTER', '', 17311400000, 'Z', '', 0, 'Ujjain', 'Balanced', 'Individual', 0, '', 'BGBPD7715B', 0, 'H54', 'Switch In', '', '', '', '', 0, 0, '', '- From HDFC Low Duration Fund-Retail-Gr', 4721790, 'B', 'E028413', '', 'N', '', '', '', '2018-05-31', '002401566531', 'ICICI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(8, 'H', '12892957/73', 'H54', 'HDFC Low Duration Fund - Retail - Regular Plan - Growth', 'Hina Husain', 'SO2', 197691000, 'N', 'Y', 'NSELM', 352701000, '2018-11-30', '2018-11-30', 38.0326, 65.733, 2500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '1487187', 'Systematic - To HDFC Hybrid Equity Fund-Growth', 0, 0, 'N', '', '', 'NA', '', 17310100000, 'Z', '', 0, 'Mumbai', 'Ultra Liquid', 'Individual', 0, '', 'AAHPH7742R', 0, 'HPREG', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To HDFC Hybrid Equity Fund-Growth', 3395930, 'B', 'E028413', '', 'Y', '', '', '', '0000-00-00', '09081530002445', 'HDFC Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(9, 'F', '4304174/21', 'FLEBFG', 'L&T Emerging Businesses Fund Growth', 'Sanjay Kumar And Sons (Huf)', 'SI51S', 40574500, 'N', 'Y', 'NAGARAJK', 996587000, '2018-11-30', '2018-11-30', 24.39, 123.001, 3000, 'ARN-85092', '', 0.25, 7.5, 0, '2018-12-03', '', 'N', '', 'Systematic - From L&T Liquid Fund - Reg.  Growth', 0, 0, 'N', '', '', 'INTER', '', 2589810000, 'Z', '', 0, 'Ujjain', 'Equity(G)', 'HUF', -7.5, '', 'AAGHS6790H', 0, 'F154L', 'Switch In', '', '', '', '', 0, 3000, '', '- From L&T Liquid Fund - Reg.  Growth', 1346900, 'B', 'E177143', '', 'N', '', '', '', '2018-03-28', '088104000100687', 'IDBI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(10, 'F', '4304174/21', 'F154L', 'L&T Liquid Fund - Regular Growth', 'Sanjay Kumar And Sons (Huf)', 'SOH', 40574500, 'N', 'Y', 'NAGARAJK', 996587000, '2018-11-30', '2018-11-30', 2492.89, 1.203, 3000, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - To L&T Emerging Businesses Fund Growth - Instalment 174/714', 0, 0, 'N', '', '', 'NA', '', 2589810000, 'Z', '', 0, 'Ujjain', 'Cash', 'HUF', 0, '', 'AAGHS6790H', 0, 'FLEBFG', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To L&T Emerging Businesses Fund Growth - Instalment 174/714', 1346900, 'B', 'E177143', 'Y', 'Y', '', '', '', '0000-00-00', '088104000100687', 'IDBI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(11, 'G', '2260947/78', 'G215', 'IDFC Sterling Value Fund-Growth-(Regular Plan) (formerly known as IDFC Sterling Equity Fund-Growth-(', 'Ajay Kumar And Sons (Huf)', 'SINEFP3', 27420400, 'N', 'Y', 'KMENAKA', 7147580, '2018-11-30', '2018-11-30', 49.95, 100.1, 5000, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - From IDFC MMF - Growth - (Reg Pln)', 0, 0, 'N', '', '', 'INTER', '', 2021820000, 'Z', '', 0, 'Ujjain', 'Equity(G)', 'HUF', 0, '', 'AADHA0033J', 0, 'GFRG', 'Switch In', '', '', '', '', 0, 0, '', '- From IDFC MMF - Growth - (Reg Pln)', 916577, 'B', 'E177143', '', 'N', '', '', '', '2018-05-03', '088104000101066', 'IDBI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(12, 'G', '1949589/42', 'G311', 'IDFC Hybrid Equity Fund Regular Plan-Growth (formerly known as IDFC Balanced Fund Regular Plan-Growt', 'Sanjeeta Sharma', 'SINBAL1', 27419200, 'N', 'Y', 'NSELM', 352702000, '2018-11-30', '2018-11-30', 11.12, 224.82, 2500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '1486902', 'Systematic - From IDFC MMF - Growth - (Reg Pln)', 0, 0, 'N', '', '', 'INTER', '', 2021780000, 'Z', '', 0, 'Mumbai', 'Balanced', 'Resident Individual', 0, '5220367', 'AEXPS8616K', 0, 'GFRG', 'Switch In', '', '', '', '', 0, 0, '', '- From IDFC MMF - Growth - (Reg Pln)', 724953, 'B', 'E028413', 'Y', 'Y', '', '', '', '2018-01-19', '0088104000201926', 'IDBI Bank', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(13, 'G', '1977107/35', 'GFRG', 'IDFC Money Manager Fund - Growth-(Regular Plan) (formerly known as IDFC Money Manager Fund-Treasury', 'Hina Husain', 'SO1', 27419200, 'N', 'Y', 'NSELM', 352702000, '2018-11-30', '2018-11-30', 28.0743, 89.049, 2500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '1487188', 'Systematic - To IDFC Hybrid Eq Fund-Reg-Growth', 0, 0, 'N', '', '', 'NA', '', 2021780000, 'Z', '', 0, 'Mumbai', 'Ultra Liquid', 'Resident Individual', 0, '', 'AAHPH7742R', 0, 'G311', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To IDFC Hybrid Eq Fund-Reg-Growth', 724954, 'B', 'E028413', '', 'Y', '', '', '', '0000-00-00', '09081530002445', 'HDFC Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(14, 'G', '2260947/78', 'GFRG', 'IDFC Money Manager Fund - Growth-(Regular Plan) (formerly known as IDFC Money Manager Fund-Treasury', 'Ajay Kumar And Sons (Huf)', 'SO1', 27420400, 'N', 'Y', 'KMENAKA', 7147580, '2018-11-30', '2018-11-30', 28.0743, 178.099, 5000, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - To IDFC Sterling Val.Fund-Gr-(Reg Pln) - Instalment 152/250', 0, 0, 'N', '', '', 'NA', '', 2021820000, 'Z', '', 0, 'Ujjain', 'Ultra Liquid', 'HUF', 0, '', 'AADHA0033J', 0, 'G215', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To IDFC Sterling Val.Fund-Gr-(Reg Pln) - Instalment 152/250', 916577, 'B', 'E177143', 'Y', 'Y', '', '', '', '0000-00-00', '088104000101066', 'IDBI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(15, 'G', '1977107/35', 'G311', 'IDFC Hybrid Equity Fund Regular Plan-Growth (formerly known as IDFC Balanced Fund Regular Plan-Growt', 'Hina Husain', 'SINBAL1', 27419200, 'N', 'Y', 'NSELM', 352702000, '2018-11-30', '2018-11-30', 11.12, 224.82, 2500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '1487188', 'Systematic - From IDFC MMF - Growth - (Reg Pln)', 0, 0, 'N', '', '', 'INTER', '', 2021780000, 'Z', '', 0, 'Mumbai', 'Balanced', 'Resident Individual', 0, '', 'AAHPH7742R', 0, 'GFRG', 'Switch In', '', '', '', '', 0, 0, '', '- From IDFC MMF - Growth - (Reg Pln)', 724954, 'B', 'E028413', 'Y', 'Y', '', '', '', '2018-01-19', '09081530002445', 'HDFC Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(16, 'G', '1949589/42', 'GFRG', 'IDFC Money Manager Fund - Growth-(Regular Plan) (formerly known as IDFC Money Manager Fund-Treasury', 'Sanjeeta Sharma', 'SO1', 27419200, 'N', 'Y', 'NSELM', 352702000, '2018-11-30', '2018-11-30', 28.0743, 89.049, 2500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '1486902', 'Systematic - To IDFC Hybrid Eq Fund-Reg-Growth', 0, 0, 'N', '', '', 'NA', '', 2021780000, 'Z', '', 0, 'Mumbai', 'Ultra Liquid', 'Resident Individual', 0, '5220367', 'AEXPS8616K', 0, 'G311', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To IDFC Hybrid Eq Fund-Reg-Growth', 724953, 'B', 'E028413', '', 'Y', '', '', '', '0000-00-00', '0088104000201926', 'IDBI Bank', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(17, 'L', '20634135', 'L079B', 'SBI Savings Fund - Regular Plan - Growth', 'Shyam Bhavsar', 'SOSTP', 136652000, 'N', 'Y', 'RGKUMAR', 5020490, '2018-11-30', '2018-11-30', 28.1717, 17.748, 500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - To SBI Equity Hybrid Fund Reg Growth - Instalment 68/5000', 0, 0, 'N', '', '', 'NA', '', 8439720000, 'Z', '', 0, 'Ujjain', 'STP', 'Individual', 0, '', 'ADIPB3097K', 0, 'L24G', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To SBI Equity Hybrid Fund Reg Growth - Instalment 68/5000', 4731750, 'B', 'E028413', 'Y', 'Y', '', '', '', '0000-00-00', '329010100004862', 'Axis Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(18, 'L', '20634135', 'L24G', 'SBI Equity Hybrid Fund Regular Growth', 'Shyam Bhavsar', 'SISTL34', 136652000, 'N', 'Y', 'RGKUMAR', 5020490, '2018-11-30', '2018-11-30', 126.018, 3.968, 500, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - From SBI Savings Fund - Reg Growth', 0, 0, 'N', '', '', 'INTER', '', 8439720000, 'Z', '', 0, 'Ujjain', 'Balanced', 'Individual', 0, '', 'ADIPB3097K', 0, 'L079B', 'Switch In', '', '', '', '', 0, 0, '', '- From SBI Savings Fund - Reg Growth', 4731750, 'B', 'E028413', '', 'N', '', '', '', '2018-07-03', '329010100004862', 'Axis Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(19, 'P', '8869498/61', 'P61', 'ICICI Prudential Equity & Debt Fund - Growth', 'Sangeeta Bumb', 'SISTC7S', 133044000, 'N', 'Y', 'MSANG', 10707200, '2018-11-30', '2018-11-30', 126.23, 7.922, 1000, 'ARN-85092', '', 0.25, 2.5, 0, '2018-12-03', '', 'N', '', 'Systematic - From Floating Interest Fund - Growth - ARN-85092/E028413', 0, 0, 'N', '', '', 'INTER', '', 9911260000, 'Z', '', 0, 'Ujjain', 'Balanced', 'Individual', -2.5, '', 'AFAPB6077R', 0, 'P1543', 'Switch In', '', '', '', '', 0, 1000, '', '- From Floating Interest Fund - Growth - ARN-85092/E028413', 4065040, 'B', 'E028413', '', 'N', '', '', '', '2018-04-18', '030001506314', 'ICICI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(20, 'P', '8869539/35', 'P1543', 'ICICI Prudential Floating Interest Fund - Growth', 'Sangeeta Bumb', 'SO2', 133038000, 'N', 'Y', 'JADU', 4146010, '2018-11-30', '2018-11-30', 270.58, 3.696, 1000, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - To Equity&Debt Fund - Growth - Instalment 145/250', 0, 0, 'N', '', '', 'NA', '', 9911090000, 'Z', '', 0, 'Ujjain', 'Ultra Liquid', 'Individual', 0, '', 'AFAPB6077R', 0, 'P61', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To Equity&Debt Fund - Growth - Instalment 145/250', 4066400, 'B', 'E028413', 'Y', 'Y', '', '', '', '0000-00-00', '030001506314', 'ICICI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(21, 'P', '8869539/35', 'P61', 'ICICI Prudential Equity & Debt Fund - Growth', 'Sangeeta Bumb', 'SISTC7S', 133038000, 'N', 'Y', 'JADU', 4146010, '2018-11-30', '2018-11-30', 126.23, 7.922, 1000, 'ARN-85092', '', 0.25, 2.5, 0, '2018-12-03', '', 'N', '', 'Systematic - From Floating Interest Fund - Growth - ARN-85092/E028413', 0, 0, 'N', '', '', 'INTER', '', 9911100000, 'Z', '', 0, 'Ujjain', 'Balanced', 'Individual', -2.5, '', 'AFAPB6077R', 0, 'P1543', 'Switch In', '', '', '', '', 0, 1000, '', '- From Floating Interest Fund - Growth - ARN-85092/E028413', 4066400, 'B', 'E028413', 'Y', 'Y', '', '', '', '2018-04-18', '030001506314', 'ICICI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, ''),
(22, 'P', '8869498/61', 'P1543', 'ICICI Prudential Floating Interest Fund - Growth', 'Sangeeta Bumb', 'SO2', 133044000, 'N', 'Y', 'MSANG', 10707200, '2018-11-30', '2018-11-30', 270.58, 3.696, 1000, 'ARN-85092', '', 0, 0, 0, '2018-12-03', '', 'N', '', 'Systematic - To Equity&Debt Fund - Growth - Instalment 145/400', 0, 0, 'N', '', '', 'NA', '', 9911260000, 'Z', '', 0, 'Ujjain', 'Ultra Liquid', 'Individual', 0, '', 'AFAPB6077R', 0, 'P61', 'Partial Switch Out', '', '', '', '', 0, 0, '', '- To Equity&Debt Fund - Growth - Instalment 145/400', 4065040, 'B', 'E028413', 'Y', 'Y', '', '', '', '0000-00-00', '030001506314', 'ICICI Bank Ltd', 0, '', '0000-00-00', '23', 0, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_franklin`
--

CREATE TABLE `tr_franklin` (
  `sno` int(11) NOT NULL,
  `COMP_CODE` varchar(3) DEFAULT NULL,
  `SCHEME_CO0` varchar(16) DEFAULT NULL,
  `SCHEME_NA1` varchar(100) DEFAULT NULL,
  `FOLIO_NO` varchar(13) DEFAULT NULL,
  `TRXN_TYPE` varchar(15) DEFAULT NULL,
  `TRXN_NO` varchar(51) DEFAULT NULL,
  `INVESTOR_2` varchar(126) DEFAULT NULL,
  `TRXN_DATE` date DEFAULT NULL,
  `POSTDT_DA3` date DEFAULT NULL,
  `NAV` float DEFAULT NULL,
  `POP` float DEFAULT NULL,
  `UNITS` float DEFAULT NULL,
  `AMOUNT` float DEFAULT NULL,
  `CHECK_NO` varchar(20) DEFAULT NULL,
  `DIVIDEND_4` varchar(1) DEFAULT NULL,
  `JOINT_NAM1` varchar(126) DEFAULT NULL,
  `JOINT_NAM2` varchar(126) DEFAULT NULL,
  `ADDRESS1` varchar(80) DEFAULT NULL,
  `ADDRESS2` varchar(80) DEFAULT NULL,
  `ADDRESS3` varchar(80) DEFAULT NULL,
  `CITY` varchar(40) DEFAULT NULL,
  `PIN_CODE` varchar(12) DEFAULT NULL,
  `STATE` varchar(40) DEFAULT NULL,
  `COUNTRY` varchar(50) DEFAULT NULL,
  `D_BIRTH` varchar(10) DEFAULT NULL,
  `PHONE_RES` varchar(40) DEFAULT NULL,
  `PHONE_OFF` varchar(40) DEFAULT NULL,
  `TAX_STATUS` varchar(2) DEFAULT NULL,
  `OCCU_CODE` varchar(20) DEFAULT NULL,
  `EMAIL` varchar(60) DEFAULT NULL,
  `TRXN_MODE` varchar(1) DEFAULT NULL,
  `TRXN_STAT` varchar(1) DEFAULT NULL,
  `ISC_CODE` varchar(6) DEFAULT NULL,
  `BROK_CODE` varchar(20) DEFAULT NULL,
  `SUB_BROKE5` varchar(20) DEFAULT NULL,
  `EUIN` varchar(20) DEFAULT NULL,
  `BROK_PERC` float DEFAULT NULL,
  `BROK_COMM` float DEFAULT NULL,
  `INVEST_ID` varchar(8) DEFAULT NULL,
  `CREA_DATE` varchar(10) DEFAULT NULL,
  `CREA_TIME` varchar(8) DEFAULT NULL,
  `TRXN_SUB` varchar(1) DEFAULT NULL,
  `APPL_NO` varchar(20) DEFAULT NULL,
  `TRXN_ID` varchar(24) DEFAULT NULL,
  `STT` float DEFAULT NULL,
  `CUSTOMER_6` varchar(10) DEFAULT NULL,
  `DIRECT_FL7` varchar(1) DEFAULT NULL,
  `IT_PAN_NO1` varchar(50) DEFAULT NULL,
  `IT_PAN_NO2` varchar(50) DEFAULT NULL,
  `IT_PAN_NO3` varchar(50) DEFAULT NULL,
  `PAN_STATU8` varchar(2) DEFAULT NULL,
  `PAN_STATU9` varchar(2) DEFAULT NULL,
  `PAN_STAT10` varchar(2) DEFAULT NULL,
  `REGD_DATE` date DEFAULT NULL,
  `ISIN` varchar(12) DEFAULT NULL,
  `FAMILY_S11` varchar(3) DEFAULT NULL,
  `GOAL_SHEET` varchar(3) DEFAULT NULL,
  `GOAL` varchar(60) DEFAULT NULL,
  `GOAL_DET12` varchar(60) DEFAULT NULL,
  `TXN_CHG` float DEFAULT NULL,
  `GROSS_AM13` float DEFAULT NULL,
  `ALLOTMEN14` varchar(3) DEFAULT NULL,
  `SIP_INST15` float DEFAULT NULL,
  `ACCOUNT_16` varchar(20) DEFAULT NULL,
  `FUND_OPT17` varchar(3) DEFAULT NULL,
  `REMARKS` varchar(255) DEFAULT NULL,
  `SOCIAL_S18` varchar(255) DEFAULT NULL,
  `KYC_ID` varchar(10) DEFAULT NULL,
  `KYC_STATUS` varchar(20) DEFAULT NULL,
  `HOLDING_19` varchar(19) DEFAULT NULL,
  `FOLIO_SO20` varchar(1) DEFAULT NULL,
  `PLAN_TYPE` varchar(25) DEFAULT NULL,
  `BRANCH_C21` varchar(10) DEFAULT NULL,
  `KARVY_AC22` varchar(10) DEFAULT NULL,
  `PBANK_NAME` varchar(60) DEFAULT NULL,
  `PERSONAL23` varchar(60) DEFAULT NULL,
  `PAYMENT_24` varchar(1) DEFAULT NULL,
  `ACCOUNT_25` varchar(20) DEFAULT NULL,
  `BRANCH_N26` varchar(60) DEFAULT NULL,
  `PAYMENT_27` varchar(1) DEFAULT NULL,
  `CUSTOMER28` varchar(1) DEFAULT NULL,
  `DD_PAYAB29` varchar(40) DEFAULT NULL,
  `BANK_CODE` varchar(9) DEFAULT NULL,
  `IFSC_CODE` varchar(120) DEFAULT NULL,
  `PAYMENT_30` varchar(60) DEFAULT NULL,
  `NEFT_CODE` varchar(20) DEFAULT NULL,
  `DEFAULT_31` varchar(1) DEFAULT NULL,
  `SUB_BROK32` varchar(20) DEFAULT NULL,
  `EUIN_INV33` varchar(1) DEFAULT NULL,
  `B15_T15_34` varchar(3) DEFAULT NULL,
  `COMMISSI35` varchar(7) DEFAULT NULL,
  `SWITCH_R36` varchar(11) DEFAULT NULL,
  `LOAD_AMO37` float DEFAULT NULL,
  `TDS_AMOUNT` float DEFAULT NULL,
  `ELECMODE38` varchar(14) DEFAULT NULL,
  `NOMINEE1` varchar(126) DEFAULT NULL,
  `NOMINEE2` varchar(126) DEFAULT NULL,
  `NOMINEE3` varchar(126) DEFAULT NULL,
  `NOMINEE_39` varchar(23) DEFAULT NULL,
  `DP_ID` varchar(8) DEFAULT NULL,
  `BENF_ID` varchar(8) DEFAULT NULL,
  `STP_REGN40` varchar(10) DEFAULT NULL,
  `TRANSFER41` varchar(50) DEFAULT NULL,
  `SIP_UNIQ42` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tr_franklin`
--

INSERT INTO `tr_franklin` (`sno`, `COMP_CODE`, `SCHEME_CO0`, `SCHEME_NA1`, `FOLIO_NO`, `TRXN_TYPE`, `TRXN_NO`, `INVESTOR_2`, `TRXN_DATE`, `POSTDT_DA3`, `NAV`, `POP`, `UNITS`, `AMOUNT`, `CHECK_NO`, `DIVIDEND_4`, `JOINT_NAM1`, `JOINT_NAM2`, `ADDRESS1`, `ADDRESS2`, `ADDRESS3`, `CITY`, `PIN_CODE`, `STATE`, `COUNTRY`, `D_BIRTH`, `PHONE_RES`, `PHONE_OFF`, `TAX_STATUS`, `OCCU_CODE`, `EMAIL`, `TRXN_MODE`, `TRXN_STAT`, `ISC_CODE`, `BROK_CODE`, `SUB_BROKE5`, `EUIN`, `BROK_PERC`, `BROK_COMM`, `INVEST_ID`, `CREA_DATE`, `CREA_TIME`, `TRXN_SUB`, `APPL_NO`, `TRXN_ID`, `STT`, `CUSTOMER_6`, `DIRECT_FL7`, `IT_PAN_NO1`, `IT_PAN_NO2`, `IT_PAN_NO3`, `PAN_STATU8`, `PAN_STATU9`, `PAN_STAT10`, `REGD_DATE`, `ISIN`, `FAMILY_S11`, `GOAL_SHEET`, `GOAL`, `GOAL_DET12`, `TXN_CHG`, `GROSS_AM13`, `ALLOTMEN14`, `SIP_INST15`, `ACCOUNT_16`, `FUND_OPT17`, `REMARKS`, `SOCIAL_S18`, `KYC_ID`, `KYC_STATUS`, `HOLDING_19`, `FOLIO_SO20`, `PLAN_TYPE`, `BRANCH_C21`, `KARVY_AC22`, `PBANK_NAME`, `PERSONAL23`, `PAYMENT_24`, `ACCOUNT_25`, `BRANCH_N26`, `PAYMENT_27`, `CUSTOMER28`, `DD_PAYAB29`, `BANK_CODE`, `IFSC_CODE`, `PAYMENT_30`, `NEFT_CODE`, `DEFAULT_31`, `SUB_BROK32`, `EUIN_INV33`, `B15_T15_34`, `COMMISSI35`, `SWITCH_R36`, `LOAD_AMO37`, `TDS_AMOUNT`, `ELECMODE38`, `NOMINEE1`, `NOMINEE2`, `NOMINEE3`, `NOMINEE_39`, `DP_ID`, `BENF_ID`, `STP_REGN40`, `TRANSFER41`, `SIP_UNIQ42`) VALUES
(1, 'FTI', 'FISCFGP', 'Franklin India Smaller Companies Fund', '2199911388796', 'SIPR', 'PT643759329', 'SHANTANU DHANUKA', '2018-11-20', '2018-11-26', 51.7164, 51.7164, 77.345, 4000, 'SIP-ACH', 'G', '', '', 'HOUSE/BIDG/APT 10 ST/ROAD/LANE', 'SHANKU MARG VIL/TOWN/PO UJJAIN', 'M L NGR AREA/LCTY/SEC FREEGANJ', 'FOOL WALI GALI UJJAIN', '456010', '', 'INDIA', '04/03/1984', '', '', 'I', '', 'shantanu.dhanuka@gmail.com', 'N', 'R', 'BR0033', 'ARN-85092', '', 'E224033', 0, 0, 'ST000315', '11/27/2018', '10:31:05', 'N', 'HDFC0000000006299530', 'BR0033PT64375932', 0, '21411104', 'N', 'AHIPD3838N', '', '', 'PP', '', '', '2018-03-22', 'INF090I01569', 'NO', 'NO', '', '', 0, 4000, '', 9, '4109904026175', '410', 'INSUFFICIENT BALANCE', 'Individual', '3126681574', 'Authorized', 'Single', '', 'GROWTH', 'BR0033', '', 'HDFC BANK LTD', '09081530000285', 'A', 'SA', 'UJJAIN', 'N', 'C', '', '456240002', 'HDFC0000908', '', 'HDFC0000908', 'Y', '', 'N', 'B15', 'VALID', 'RE23485206', 0, 0, '', 'TEJASHRI DHANUKA', '', '', '100.00;;', '', '', '', '', ''),
(2, 'FTI', 'FISCFGP', 'Franklin India Smaller Companies Fund', '2199907615646', 'SIP', 'PT3787452347', 'RAHUL JAIN', '2018-11-26', '2018-11-26', 51.4763, 51.4763, 19.426, 1000, 'SIP-BD', 'G', '', '', 'H NO 17P O TENGRAGALLA BAZARTILAK MA', 'RG', '', 'UJJAIN', '456010', '', 'INDIA', '06/24/1981', '07342553669', '07342553669', 'I', 'O', 'rahulakjain1jain@gmail.com', 'N', 'F', 'BR0033', 'ARN-85092', '', 'E028413', 0, 0, 'RH000059', '11/27/2018', '10:31:05', 'N', '764100', 'BR0033PT37874523', 0, '18933077', 'N', 'AFBPJ8773K', '', '', 'PP', '', '', '2015-01-07', 'INF090I01569', 'NO', 'NO', '', '', 0, 1000, '', 47, '', '', '', 'Individual', '3122927688', 'Authorized', 'Single', '', 'GROWTH', 'BR0033', '', 'IDBI BANK LTD', '088104000158534', 'A', 'SA', 'UJJAIN', 'N', 'C', '', '000259000', 'IBKL0000088', '', 'IBKL0000088', 'Y', '', 'N', 'B15', 'VALID', 'RE10433075', 0, 0, '', 'SHALU JAIN', '', '', '100.00;;', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tr_karvy`
--

CREATE TABLE `tr_karvy` (
  `sno` int(11) NOT NULL,
  `FMCODE` varchar(10) DEFAULT NULL,
  `TD_FUND` varchar(4) DEFAULT NULL,
  `TD_ACNO` float DEFAULT NULL,
  `SCHPLN` varchar(4) DEFAULT NULL,
  `DIVOPT` varchar(1) DEFAULT NULL,
  `FUNDDESC` varchar(200) DEFAULT NULL,
  `TD_PURRED` varchar(1) DEFAULT NULL,
  `TD_TRNO` float DEFAULT NULL,
  `SMCODE` float DEFAULT NULL,
  `CHQNO` varchar(20) DEFAULT NULL,
  `INVNAME` varchar(80) DEFAULT NULL,
  `TRNMODE` varchar(1) DEFAULT NULL,
  `TRNSTAT` varchar(1) DEFAULT NULL,
  `TD_BRANCH` varchar(50) DEFAULT NULL,
  `ISCTRNO` float DEFAULT NULL,
  `TD_TRDT` date DEFAULT NULL,
  `TD_PRDT` date DEFAULT NULL,
  `TD_POP` varchar(30) DEFAULT NULL,
  `LOADPER` float DEFAULT NULL,
  `TD_UNITS` float DEFAULT NULL,
  `TD_AMT` float DEFAULT NULL,
  `LOAD1` float DEFAULT NULL,
  `TD_AGENT` varchar(20) DEFAULT NULL,
  `TD_BROKER` varchar(20) DEFAULT NULL,
  `BROKPER` float DEFAULT NULL,
  `BROKCOMM` float DEFAULT NULL,
  `INVID` varchar(1) DEFAULT NULL,
  `CRDATE` date DEFAULT NULL,
  `CRTIME` varchar(6) DEFAULT NULL,
  `TRNSUB` varchar(1) DEFAULT NULL,
  `TD_APPNO` varchar(20) DEFAULT NULL,
  `UNQNO` varchar(50) DEFAULT NULL,
  `TRDESC` varchar(40) DEFAULT NULL,
  `TD_TRTYPE` varchar(10) DEFAULT NULL,
  `PURDATE` date DEFAULT NULL,
  `PURAMT` float DEFAULT NULL,
  `PURUNITS` float DEFAULT NULL,
  `TRFLAG` varchar(2) DEFAULT NULL,
  `SFUNDDT` date DEFAULT NULL,
  `CHQDATE` date DEFAULT NULL,
  `CHQBANK` varchar(40) DEFAULT NULL,
  `TD_NAV` varchar(30) DEFAULT NULL,
  `TD_PTRNO` float DEFAULT NULL,
  `STT` float DEFAULT NULL,
  `IHNO` float DEFAULT NULL,
  `BRANCHCODE` varchar(5) DEFAULT NULL,
  `INWARDNO` varchar(20) DEFAULT NULL,
  `PAN1` varchar(30) DEFAULT NULL,
  `NCTREMARKS` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `sno` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sno`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cm_cams`
--
ALTER TABLE `cm_cams`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cm_franklin`
--
ALTER TABLE `cm_franklin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cm_karvy`
--
ALTER TABLE `cm_karvy`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tr_cams`
--
ALTER TABLE `tr_cams`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tr_franklin`
--
ALTER TABLE `tr_franklin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `tr_karvy`
--
ALTER TABLE `tr_karvy`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cm_cams`
--
ALTER TABLE `cm_cams`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cm_franklin`
--
ALTER TABLE `cm_franklin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cm_karvy`
--
ALTER TABLE `cm_karvy`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `tr_cams`
--
ALTER TABLE `tr_cams`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tr_franklin`
--
ALTER TABLE `tr_franklin`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tr_karvy`
--
ALTER TABLE `tr_karvy`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
