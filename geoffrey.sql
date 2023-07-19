-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2023 at 04:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geoffrey`
--

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE `web` (
  `aboutme` text NOT NULL,
  `contacts` text NOT NULL,
  `skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`aboutme`, `contacts`, `skills`) VALUES
(' <b>Hello,I\'m Geoffrey </b></P>\r\n        <p>\r\n        I\'m an upgrading student at Mzuzu University,<br>\r\n        studying bachalor of science in Informstionand Communication Technology<br>\r\n        am aweb developer and aprogrammer,i care deeply about creating softwares<br>\r\n        that help people in different working industries and make a difference.\r\n        show all details <br> and work experience of web development   \r\n     </P>', '   Mr Mwangomba<br>P.O.Box 20150<br>Lilongwe <br> Malawi\r\n            \r\n                    <p>\r\n                        <a href=\"\">+265 882 851 116</a>\r\n                    </p>\r\n                \r\n                    <p>\r\n                        <a href=\"\">geoffreymwangomba@gmail.com</a> \r\n                    </p>', ' <ul>\r\n            <li>  Expert in computer Maintanance</li><br><br>\r\n            <li>  Expert in networking</li><br><br>\r\n            <li>  Expect in gaming development</li><br><br>\r\n            <li>  Expert in Programming</li><br><br>\r\n			<li>  HTML</li><br><br>\r\n			<li>  CSS</li><br><br>\r\n			\r\n        </ul>');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
