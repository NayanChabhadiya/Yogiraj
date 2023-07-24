-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2021 at 03:17 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yogirajrowhouses`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `mobile_no`, `email`, `password`, `profile_pic`, `created_at`, `updated_at`) VALUES
(1, 'Nayan Chabhadiya ', '7048158322', 'nayanchabhadiya123@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'uploads/user_profiles/nayan.jpg', '2021-05-27 10:08:09', '2021-06-19 10:18:12'),
(9, 'YOGIRAJ ROW HOUSE', '7048158322', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'uploads/user_profiles/beard.png', '2021-07-14 12:15:39', '2021-07-14 15:10:52');

-- --------------------------------------------------------

--
-- Table structure for table `bhupatbhai`
--

CREATE TABLE `bhupatbhai` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_date` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bhupatbhai`
--

INSERT INTO `bhupatbhai` (`id`, `name`, `amount`, `amount_date`, `description`) VALUES
(1, 'મનુભાઈ', 113970, '2021-04-16', 'અગાઉ ની બેલેન્સ'),
(2, 'મનુભાઈ ', 73800, '2021-04-19', 'મેઈન્ટેનન્સ ના આપ્યા'),
(3, 'મનુભાઈ', 48150, '2021-04-23', 'મેઈન્ટેનન્સ ના આપ્યા'),
(4, 'મનુભાઈ', 36900, '2021-04-28', 'મેઈન્ટેનન્સ ના આપ્યા'),
(5, 'મનુભાઈ', 24000, '2021-04-30', 'મેઈન્ટેનન્સ ના આપ્યા'),
(6, 'મનુભાઈ ', 26400, '2021-05-03', 'મેઈન્ટેનન્સ ના આપ્યા'),
(7, 'મનુભાઈ', 19500, '2021-05-04', 'મેઈન્ટેનન્સ ના આપ્યા'),
(8, 'મનુભાઈ', 72000, '2021-05-04', 'ટ્રાન્સફર ફી ના આવ્યા તે આપ્યા'),
(9, 'મનુભાઈ', 31900, '2021-05-04', 'મેઈન્ટેનન્સ ના આપ્યા'),
(10, 'મનુભાઈ', 64500, '2021-05-13', 'મેઈન્ટેનન્સ ના આપ્યા'),
(11, 'મનુભાઈ', 21600, '2021-05-13', 'મેઈન્ટેનન્સ ના આપ્યા'),
(12, 'નયનભાઈ', 53000, '2021-05-28', 'ટ્રાન્સફર ફી ના આવ્યા તે આપ્યા ( દેવશીભાઈ ને ઉપાડ માં આપ્યા )'),
(13, 'નયનભાઈ', 59000, '2021-06-01', 'ટ્રાન્સફર ફી ના આવ્યા તે આપ્યા'),
(14, 'નયનભાઈ', 72000, '2021-06-05', 'ટ્રાન્સફર ફી ના આવ્યા તે આપ્યા'),
(15, 'નયનભાઈ ', 40000, '2021-06-08', 'ટ્રાન્સફર ફી ના આવ્યા તે આપ્યા'),
(18, 'નયનભાઈ', 64000, '2021-06-30', 'ટ્રાન્સફર ફી ના આવ્યા તે આપ્યા તેમાંથી 25000 મનુભાઈ પાસે  અને 39000 દેવશીભાઈ ને પગાર અને અન્ય ખર્ચ માટે આપ્યા 25000 મનુભાઈ વાળા નાગજીભાઈ ને આપ્યા ખુડશી લેવા માટે ઉપાડ '),
(19, 'નયનભાઈ', 54000, '2021-06-30', 'ટ્રાન્સફર ફી ના આવ્યા તે આપ્યા.'),
(20, 'મનુભાઈ ', 25000, '2021-07-11', 'ટ્રાન્સફર ફી ના આવ્યા તે આપ્યા'),
(21, 'નયનભાઈ', 680, '2021-07-11', 'દેવશીભાઈ એ ઉપાડ કર્યો હતો એમાંથી થી વધ્યા તેના'),
(22, 'નયનભાઈ', 15510, '2021-07-11', 'મેઈન્ટેનન્સ ના આવ્યા તેના આવ્યા તેના આપ્યા A વિભાગ ની શેરી નંબર 4 નું'),
(23, 'નયનભાઈ', 930, '2021-05-24', 'મેઈન્ટેનન્સ ના હતા તેમાંથી દેવશીભાઈ ને આપ્યા 930 અનુદાનની ફાઇલ નો ચાર્જ ચુકવવા માટે ');

-- --------------------------------------------------------

--
-- Table structure for table `devashibhai`
--

CREATE TABLE `devashibhai` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_date` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `devashibhai`
--

INSERT INTO `devashibhai` (`id`, `name`, `amount`, `amount_date`, `description`) VALUES
(1, 'મનુભાઈ', 10617, '2021-04-10', 'અગાઉ ની વાડીભાડાની બેલેન્સ '),
(2, 'મનુભાઈ', 1000, '2021-04-16', 'વાડીની ડિપોજીટ આપી  તારીખ  25/04/2021 ની '),
(3, 'મનુભાઈ', 2500, '2021-04-16', 'વાડીનું ભાડુ આવ્યું તે આપ્યું'),
(4, 'મનુભાઈ', 1000, '2021-04-16', 'વાડીની ડિપોજીટ આપી ગણેશ ભાઈ પાસેથી આવી'),
(5, 'મનુભાઈ', 1000, '2021-04-19', 'વાડીની ડિપોજીટ આપી'),
(6, 'મનુભાઈ', 3200, '2021-04-28', 'વાડીભાડાના આવ્યા તે આપ્યા'),
(7, 'મનુભાઈ', 2050, '2021-05-03', 'વાડીભાડાના આવ્યા તે આપ્યા '),
(8, 'નયનભાઈ', 3000, '2021-06-30', 'વાડીભાડાના આવ્યા તે આપ્યા'),
(9, 'નયનભાઈ', 4640, '2021-07-04', 'વાડીભાડાના આવ્યા તે આપ્યા');

-- --------------------------------------------------------

--
-- Table structure for table `expance`
--

CREATE TABLE `expance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `expance`
--

INSERT INTO `expance` (`id`, `name`, `amount`, `date`, `description`) VALUES
(1, 'મનુભાઈ', 360, '2021-04-13', 'સ્ટેશનરી ખર્ચ ( ફાઇલ , વાડી બૂકિંગ માટે બૂક , ખાતાવહી )'),
(2, 'મનુભાઈ', 300, '2021-04-14', 'સેનેટાઇજર લાવ્યા તેના.'),
(3, 'મનુભાઈ', 50, '2021-04-14', 'સ્ટેશનરી ખર્ચ ( પંખાનું  કેપેસીટેર લાવ્યા  )'),
(4, 'મનુભાઈ', 100, '2021-04-15', 'પરચુરણ ખર્ચ ( તાળુ લાવ્યા ઓફિસ માટે )'),
(5, 'મનુભાઈ', 8120, '2021-04-17', 'લાઇટ બિલ ભર્યું તેના '),
(6, 'મનુભાઈ', 42, '2021-04-17', 'સ્ટેશનરી ખર્ચ '),
(7, 'મનુભાઈ', 220, '2021-04-24', 'પરચુરણ ખર્ચ ( ઘઉના )'),
(8, 'મનુભાઈ', 2700, '2021-04-24', 'સ્ટેશનરી ખર્ચ ( મેઈન્ટેનન્સ બુક , ટ્રાન્સફર ફી બુક, લેટર પેડ છપાવી તેના )'),
(9, 'મનુભાઈ', 441, '2021-04-26', 'વાડી નું બારણું રીપેર કરાવ્યું તેના'),
(10, 'મનુભાઈ', 1000, '2021-04-26', 'કડીયાની મજુરી'),
(11, 'મનુભાઈ', 36500, '2021-04-30', 'પગાર ખર્ચ ( તારીખ :- 01/04/2021 થી 30/04/2021 સુધી નો )'),
(12, 'દેવશીભાઈ', 9817, '2021-05-29', 'લાઇટ બિલ ભર્યું તેના'),
(13, 'દેવશીભાઈ', 3403, '2021-05-29', 'ગેસ બિલ ભર્યું તેના'),
(14, 'દેવશીભાઈ', 33500, '2021-06-01', 'પગાર ખર્ચ ( ( તારીખ :- 01/05/2021 થી 31/05 /2021 સુધી નો )'),
(15, 'દેવશીભાઈ', 7880, '2021-06-23', 'લાઇટ બિલ ભર્યું તેના '),
(16, 'દેવશીભાઈ', 1060, '2021-07-02', 'ગેસ બિલ ભર્યું તેના'),
(17, 'દેવશીભાઈ', 33500, '2021-07-01', 'પગાર ખર્ચ ( તારીખ :- 01/06/2021 થી 30/06/2021 સુધી નો )'),
(18, 'દેવશીભાઈ', 930, '2021-05-24', 'અનુદાનની ફાઇલનો ચાર્જ '),
(19, 'નાગજીભાઈ ', 25000, '2021-07-04', 'ખુડશી લાવ્યા તેના આપ્યા'),
(20, 'દેવશીભાઈ', 1500, '2021-07-10', 'ઇલેક્ટ્રિક વાળાને બિલ ચુકવ્યુ તેના'),
(21, 'નયનભાઈ', 10, '2021-06-02', 'સ્ટેશનરી ખર્ચ ( રબર ની રિંગ )'),
(22, 'નયનભાઈ', 10, '2021-06-02', 'સ્ટેશનરી ખર્ચ ( કેલસીનો સેલ )'),
(23, 'નયનભાઈ', 90, '2021-06-02', 'સ્ટેશનરી ખર્ચ ( 6 નંગ બુક લાવ્યા તેના )'),
(24, 'નયનભાઈ', 350, '2021-07-07', 'કેમેરા માટે સ્પાર્કલ બોર્ડ લીધું તેના'),
(25, 'નયનભાઈ', 200, '2021-07-10', 'સ્ટેમ્પ બનાવરાવ્યો તેના'),
(27, 'દેવશીભાઈ', 680, '2021-07-11', 'દેવશીભાઈ એ ઉપાડ કર્યો હતો તેમાંથી વધેલી રકમ ભુપતભાઈ ને આપી. ');

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `section` varchar(255) NOT NULL,
  `home_no` int(11) NOT NULL,
  `line_no` int(11) NOT NULL,
  `g` int(11) NOT NULL,
  `1` int(11) NOT NULL,
  `2` int(11) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `total_amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `maintenancet`
--

CREATE TABLE `maintenancet` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `section` varchar(255) NOT NULL,
  `line_no` int(11) NOT NULL,
  `home_no_from` int(11) NOT NULL,
  `home_no_to` int(11) NOT NULL,
  `home_no_from1` int(11) NOT NULL,
  `home_no_to1` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maintenancet`
--

INSERT INTO `maintenancet` (`id`, `date`, `section`, `line_no`, `home_no_from`, `home_no_to`, `home_no_from1`, `home_no_to1`, `from_date`, `to_date`, `amount`, `description`) VALUES
(1, '2021-04-19', 'B', 4, 80, 91, 0, 0, '2021-01-01', '2021-06-30', 14400, ''),
(2, '2021-04-19', 'B', 4, 70, 79, 0, 0, '2021-01-01', '2021-06-30', 17100, ''),
(3, '2021-04-19', 'B', 3, 46, 69, 0, 0, '2021-01-01', '2021-06-30', 42300, ''),
(4, '2021-04-23', 'B', 4, 92, 102, 0, 0, '2021-01-01', '2021-06-30', 9900, ''),
(5, '2021-04-23', 'B', 2, 23, 45, 0, 0, '2021-01-01', '2021-06-30', 38250, ''),
(6, '2021-04-28', 'A', 1, 9, 15, 0, 0, '2021-01-01', '2021-06-30', 11700, ''),
(7, '2021-04-30', 'A', 1, 1, 8, 16, 23, '0000-00-00', '2021-06-30', 24000, ''),
(8, '2021-05-03', 'A', 2, 32, 45, 0, 0, '2021-01-01', '2021-06-30', 15600, ''),
(9, '2021-05-03', 'B', 4, 103, 107, 129, 132, '2021-01-01', '2021-06-30', 10800, 'B વિભાગ ની મેઈન લાઈન  નું ૧૨૯ થી ૧૩૨ A વિભાગ ના મકાન છે. '),
(10, '2021-05-04', 'A', 3, 54, 61, 76, 83, '2021-01-01', '2021-06-30', 19500, ''),
(11, '2021-05-06', 'B', 1, 1, 22, 0, 0, '2021-01-01', '2021-06-30', 31900, ''),
(12, '2021-05-13', 'શોપિંગ', 0, 1, 10, 0, 0, '2021-01-01', '2021-06-30', 6000, '૧૦ દુકાન નું ૬૦૦ લેખે '),
(13, '2021-05-13', 'A', 4, 84, 128, 0, 0, '2021-01-01', '2021-06-30', 58500, '૧૧૪ ( નીચેના માળ નું બાકી ), ૧૧૫, ૧૨૦ ( એક રસોડાના બાકી ), ૧૨૮ (એક રસોડાના બાકી ) '),
(14, '2021-05-13', 'A', 2, 24, 31, 46, 53, '2021-01-01', '2021-06-30', 21600, '૪૯ નંબર નું બાકી '),
(15, '2021-05-28', 'શોપિંગ', 0, 11, 0, 0, 0, '2021-01-01', '2021-06-30', 7440, 'મંડપ સર્વિસનું લાઈટબિલ પાણી બિલ '),
(16, '2021-07-11', 'A', 4, 85, 127, 0, 0, '2021-01-01', '2021-06-30', 9000, '૧૧૪ ( નીચેના માળ નું બાકી ), ૧૧૫, ૧૨૦ ( એક રસોડાના બાકી ), ૧૨૮ (એક રસોડાના બાકી ) '),
(17, '2021-04-28', 'A', 3, 62, 75, 0, 0, '2021-01-01', '2021-06-30', 25200, '');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_fee`
--

CREATE TABLE `transfer_fee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `home_no` int(11) NOT NULL,
  `line_no` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer_fee`
--

INSERT INTO `transfer_fee` (`id`, `name`, `mobile_no`, `section`, `home_no`, `line_no`, `amount`, `payment_date`) VALUES
(1, 'સંજયભાઈ ', '', 'A', 82, 3, 72000, '2021-05-04'),
(2, 'છગનભાઈ ', '', 'B', 92, 4, 59000, '2021-06-01'),
(3, 'ચિરાગભાઈ ઉકાણી', '', 'B', 31, 2, 53000, '2021-05-28'),
(4, 'દિનેશભાઈ', '', 'B', 34, 2, 40000, '2021-06-08'),
(5, 'આશીષભાઈ મગનભાઈ કુંભાણી', '', 'B', 85, 4, 64000, '2021-06-30'),
(6, 'ભરતભાઈ જેરામભાઈ માણિયા', '', 'A', 115, 4, 54000, '2021-06-30'),
(7, 'દિનેશભાઈ મનજીભાઈ માંડણકા', '', 'A', 60, 3, 72000, '2021-06-05');

-- --------------------------------------------------------

--
-- Table structure for table `upad`
--

CREATE TABLE `upad` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `upad_date` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `upad`
--

INSERT INTO `upad` (`id`, `name`, `amount`, `upad_date`, `description`) VALUES
(1, 'મનુભાઈ', 10000, '2021-04-16', 'સ્ટેશનરી ખર્ચ અને અન્ય ખર્ચ  માટે'),
(2, 'મનુભાઈ', 36000, '2021-04-28', 'પગાર ચૂકવવા માટે અને અન્ય ખર્ચ માટે આપ્યા હતા.'),
(3, 'મનુભાઈ', 4000, '2021-04-30', 'પગાર ચૂકવવા  માટે'),
(4, 'દેવશીભાઈ', 53000, '2021-05-28', 'પગાર ચૂકવવા તથા અન્ય ખર્ચ માટે'),
(5, 'દેવશીભાઈ', 39000, '2021-06-30', 'પગાર ચુકવવા તથા અન્ય ખર્ચ માટે'),
(6, 'નાગજીભાઈ', 25000, '2021-07-04', 'ખુરશી લેવા માટે આપ્યા '),
(7, 'દેવશીભાઈ', 930, '2021-05-24', 'દેવશીભાઈ ( અનુદાન ની ફાઇલ નો ચાર્જ  ચુકવવા )');

-- --------------------------------------------------------

--
-- Table structure for table `vadi_booking`
--

CREATE TABLE `vadi_booking` (
  `id` int(11) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `booking_date` date NOT NULL,
  `function_date` date NOT NULL,
  `function_time` varchar(255) NOT NULL,
  `function_name` varchar(255) NOT NULL,
  `function_k` varchar(255) NOT NULL,
  `function_deposit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadi_booking`
--

INSERT INTO `vadi_booking` (`id`, `party_name`, `address`, `mobile_no`, `s_name`, `booking_date`, `function_date`, `function_time`, `function_name`, `function_k`, `function_deposit`) VALUES
(4, 'ધર્મેશભાઈ ', 'B - ૯૪ યોગીરાજ રો હાઉસ', '૮૨૦૦૮૩૪૦૭૦ ', 'જુની કમિટી ', '2021-02-28', '2021-05-25', 'સાંજ ', 'લગ્ન', 'જમણવાર છે ', 2000),
(5, 'ધર્મેશભાઈ', 'B - ૯૪ યોગીરાજ રો હાઉસ', '૮૨૦૦૮૩૪૦૭૦', 'જુની કમિટી', '2021-02-28', '2021-05-26', 'બપોર', 'લગ્ન', 'જમણવાર છે.', 0),
(7, 'જગદીશભાઈ', 'A - ૬૮ યોગીરાજ રો હાઉસ', '૯૩૭૬૦૪૮૮૬૮', 'જુની કમિટી', '2021-03-08', '2021-07-14', 'બપોર', 'લગ્ન', 'જમણવાર છે', 1000),
(9, 'ચંદુભાઈ ', 'A - ૬૨૪ તિરૂપતિ સોસાયટી', '૯૯૧૩૩૨૬૧૮૮', 'નયનભાઈ', '2021-06-25', '2021-07-11', 'બપોર', 'શ્રીમંત વિધિ ', 'જમણવાર છે', 1000),
(12, 'મિલનભાઈ', 'B - ૧૦૫ યોગીરાજ રો હાઉસ', '૯૬૩૮૬૦૩૧૫૨', 'નયનભાઈ', '2021-06-27', '2021-09-24', 'બપોર', 'જમણવાર', 'જમણવાર છે', 500),
(13, 'વિપુલભાઈ ', 'વિભાગ C ઘર નંબર ૧૬ મહાલક્ષ્મી સોસાયટી', '૯૯૭૯૨૬૯૨૫૧', 'જુની કમિટી', '2021-03-27', '2021-11-20', 'સાંજ', 'લગ્ન', 'જમણવાર છે', 4000),
(14, 'વિપુલભાઈ', 'વિભાગ C ઘર નંબર ૧૬ મહાલક્ષ્મી સોસાયટી', '૯૯૭૯૨૬૯૨૫૧', 'જુની કમિટી', '2021-03-27', '2021-11-21', 'બપોર', 'લગ્ન', 'જમણવાર છે', 0),
(15, 'ખોડાભાઈ મેંદપરા ', 'B - ૫૨ યોગીરાજ રો હાઉસ', '૯૭૩૭૫૭૫૪૨૩ ', 'મનુભાઈ', '2021-04-11', '2021-11-30', 'સાંજ', 'લગ્ન', 'જમણવાર છે', 1000),
(16, 'ખોડાભાઈ મેંદપરા', 'B - ૫૨ યોગીરાજ રો હાઉસ', '૯૭૩૭૫૭૫૪૨૩', 'મનુભાઈ', '2021-04-11', '2021-12-01', 'બપોર', 'લગ્ન ', 'જમણવાર છે ', 0),
(17, 'ધર્મિકભાઈ બોઘરા', 'B - ૨૩ યોગીરાજ રો હાઉસ ', '૭૯૮૪૫૨૦૩૧૧', 'નયનભાઈ', '2021-06-26', '2021-11-15', 'સાંજ', 'લગ્ન ( રાસ - ગરબા )', 'જમણવાર છે', 2000),
(18, 'ધર્મિકભાઈ બોઘરા', 'B - ૨૩ યોગીરાજ રો હાઉસ', '૭૯૮૪૫૨૦૩૧૧ ', 'નયનભાઈ', '2021-06-26', '2021-11-16', 'બપોર', 'લગ્ન', 'જમણવાર છે', 0),
(19, 'મિલનભાઈ ', 'A - ૭૪ યોગીરાજ રો હાઉસ', '૯૯૦૪૨૮૪૯૨૮', 'જુની કમિટી', '2021-03-21', '2021-12-06', 'સાંજ', 'લગ્ન', 'જમણવાર છે', 1000),
(20, 'મિલનભાઈ', 'A - ૭૪ યોગીરાજ રો હાઉસ', '૯૯૦૪૨૮૪૯૨૮', 'જુની કમિટી', '2021-03-23', '2021-12-07', 'બપોર', 'લગ્ન ', 'જમણવાર છે', 0),
(21, 'નિતિનભાઈ', 'A - ૧૨૬ યોગીરાજ રો હાઉસ', '૮૮૬૬૬૧૬૫૬૯  ', 'નયનભાઈ', '2021-06-17', '2021-12-12', 'સાંજ', 'લગ્ન', 'જમણવાર છે', 1000),
(22, 'નિતિનભાઈ', 'A - ૧૨૬ યોગીરાજ રો હાઉસ', '૮૮૬૬૬૧૬૫૬૯ ', 'નયનભાઈ', '2021-06-17', '2021-12-13', 'બપોર', 'લગ્ન', 'જમણવાર છે', 0),
(23, 'મનસુખભાઈ કુકડીયા ', 'A - 23 યોગીરાજ રો હાઉસ ', '૯૩૭૪૭૧૦૨૩૦ ', 'નયનભાઈ', '2021-07-05', '2021-07-18', 'બપોર', 'ચાંદલા વિધિ ', 'જમણવાર છે ', 2000),
(24, 'અમિતભાઈ ', 'સંગના સોસાયટી', '૯૮૭૯૧૫૦૦૦૫ ', 'નયનભાઈ', '2021-07-05', '2021-07-25', 'બપોર', 'ચાંદલા વિધિ', 'જમણવાર છે', 1000),
(25, 'ધરમશીભાઈ', 'મેરીગોલ્ડ ', '૯૮૨૫૩૩૧૫૦૯', 'નયનભાઈ', '2021-07-06', '2021-07-12', 'બપોર', 'પાણીઢોળ', 'જમણવાર છે', 1000),
(26, 'રામેશ્વરભાઈ', 'B - ૫૯ યોગીરાજ રો હાઉસ', '', 'નયનભાઈ', '2021-07-11', '2021-07-11', '૪ થી ૬', 'બેસણું ', 'નથી', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vadi_income`
--

CREATE TABLE `vadi_income` (
  `id` int(11) NOT NULL,
  `party_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `function_name` varchar(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `function_date` date NOT NULL,
  `function_bhadu` int(11) NOT NULL,
  `lightbill` int(11) NOT NULL,
  `table_bhadu` int(11) NOT NULL,
  `chair_bhadu` int(11) NOT NULL,
  `gt_bhadu` int(11) NOT NULL,
  `mixer_bhadu` int(11) NOT NULL,
  `gesbill` int(11) NOT NULL,
  `charge` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `payment_date` date NOT NULL,
  `sleep_no` int(11) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vadi_income`
--

INSERT INTO `vadi_income` (`id`, `party_name`, `address`, `function_name`, `s_name`, `function_date`, `function_bhadu`, `lightbill`, `table_bhadu`, `chair_bhadu`, `gt_bhadu`, `mixer_bhadu`, `gesbill`, `charge`, `total_amount`, `payment_date`, `sleep_no`, `description`) VALUES
(1, 'રમેશભાઈ વેકરીયા ', 'વિશ્વામિત્રી સોસાયટી ', 'બેસણું ', 'મનુભાઈ ', '2021-04-11', 2000, 500, 0, 0, 0, 0, 0, 0, 2500, '2021-04-11', 1, 'બેસણા માટે આપેલી'),
(3, 'હિંમતભાઈ ઈટાળીયા ', '૭ નંબર સરસ્વતી સોસાયટી ', 'લગ્ન પ્રસંગ ', 'મનુભાઈ ', '2021-04-25', 3000, 500, 200, 0, 0, 0, 0, 500, 4200, '2021-04-27', 2, 'વાડીના નુકશાન નો રિપેરિંગ ચાર્જ લીધેલો'),
(4, 'વિનુભાઈ લાઠીયા ', 'B - ૬૮ યોગીરાજ રો હાઉસ', 'પાણીઢોળ', 'મનુભાઈ', '2021-05-02', 2000, 0, 50, 0, 0, 0, 0, 0, 2050, '2021-05-03', 3, 'સોસાયટી વાળાને પાણીઢોળ માં લાઈટબિલ ચૂકવાનું રહેતું નથી '),
(5, 'રોટરેક્ટ ક્લબ', 'સુરત', 'મિટિંગ', 'નયનભાઈ', '2021-06-30', 3000, 0, 0, 0, 0, 0, 0, 0, 3000, '2021-06-30', 4, 'રોટરેક્ટ કલબ વાળ ને ૩૦૦૦ માં લાઈટબિલ અને ટેબલ સાથે વાડી આપી હતી.'),
(6, 'જયસુખભાઈ બોઘરા', '૨૬ નંબર મનમંદિર સોસાયટી', 'જમણવાર', 'નયનભાઈ', '2021-07-04', 3000, 500, 0, 0, 0, 0, 1140, 0, 4640, '2021-07-04', 5, 'ખાલી જમણવાર માટે આપી હતી ૧૬.૩૪ યુનિટ નું ગેસબિલ ૧૧૪૦ લીધેલ છે');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bhupatbhai`
--
ALTER TABLE `bhupatbhai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devashibhai`
--
ALTER TABLE `devashibhai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expance`
--
ALTER TABLE `expance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintenancet`
--
ALTER TABLE `maintenancet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfer_fee`
--
ALTER TABLE `transfer_fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upad`
--
ALTER TABLE `upad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vadi_booking`
--
ALTER TABLE `vadi_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vadi_income`
--
ALTER TABLE `vadi_income`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bhupatbhai`
--
ALTER TABLE `bhupatbhai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `devashibhai`
--
ALTER TABLE `devashibhai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `expance`
--
ALTER TABLE `expance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maintenancet`
--
ALTER TABLE `maintenancet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transfer_fee`
--
ALTER TABLE `transfer_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `upad`
--
ALTER TABLE `upad`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vadi_booking`
--
ALTER TABLE `vadi_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `vadi_income`
--
ALTER TABLE `vadi_income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
