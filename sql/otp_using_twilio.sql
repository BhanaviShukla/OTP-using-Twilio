-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 13, 2017 at 06:49 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1931932_testkisan`
--
CREATE DATABASE IF NOT EXISTS `id1931932_testkisan` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id1931932_testkisan`;

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'Bhanvi', 'Shukla', 9560500864),
(2, 'Test ', 'Random1', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `OTP`
--

CREATE TABLE `OTP` (
  `number` bigint(10) NOT NULL,
  `otp` int(6) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `OTP`
--

INSERT INTO `OTP` (`number`, `otp`, `timestamp`) VALUES
(9560500864, 172855, '2017-06-12 13:00:55'),
(9560500864, 491376, '2017-06-12 13:01:30'),
(9560500864, 663313, '2017-06-12 13:05:55'),
(9560500864, 965064, '2017-06-12 13:08:24'),
(9560500864, 420361, '2017-06-12 18:38:07'),
(9560500864, 420361, '2017-06-12 18:38:31'),
(9560500864, 420361, '2017-06-12 18:38:32'),
(9560500864, 420361, '2017-06-12 18:38:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `OTP`
--
ALTER TABLE `OTP`
  ADD PRIMARY KEY (`timestamp`),
  ADD KEY `number` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;--
-- Database: `id1931932_testkisan`
--
CREATE DATABASE IF NOT EXISTS `id1931932_testkisan` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id1931932_testkisan`;

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'Bhanvi', 'Shukla', 9560500864),
(2, 'Test ', 'Random1', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `OTP`
--

CREATE TABLE `OTP` (
  `number` bigint(10) NOT NULL,
  `otp` int(6) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `OTP`
--

INSERT INTO `OTP` (`number`, `otp`, `timestamp`) VALUES
(9560500864, 172855, '2017-06-12 13:00:55'),
(9560500864, 491376, '2017-06-12 13:01:30'),
(9560500864, 663313, '2017-06-12 13:05:55'),
(9560500864, 965064, '2017-06-12 13:08:24'),
(9560500864, 420361, '2017-06-12 18:38:07'),
(9560500864, 420361, '2017-06-12 18:38:31'),
(9560500864, 420361, '2017-06-12 18:38:32'),
(9560500864, 420361, '2017-06-12 18:38:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `OTP`
--
ALTER TABLE `OTP`
  ADD PRIMARY KEY (`timestamp`),
  ADD KEY `number` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;--
-- Database: `id1931932_testkisan`
--
CREATE DATABASE IF NOT EXISTS `id1931932_testkisan` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id1931932_testkisan`;

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'Bhanvi', 'Shukla', 9560500864),
(2, 'Test ', 'Random1', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `OTP`
--

CREATE TABLE `OTP` (
  `number` bigint(10) NOT NULL,
  `otp` int(6) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `OTP`
--

INSERT INTO `OTP` (`number`, `otp`, `timestamp`) VALUES
(9560500864, 172855, '2017-06-12 13:00:55'),
(9560500864, 491376, '2017-06-12 13:01:30'),
(9560500864, 663313, '2017-06-12 13:05:55'),
(9560500864, 965064, '2017-06-12 13:08:24'),
(9560500864, 420361, '2017-06-12 18:38:07'),
(9560500864, 420361, '2017-06-12 18:38:31'),
(9560500864, 420361, '2017-06-12 18:38:32'),
(9560500864, 420361, '2017-06-12 18:38:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `OTP`
--
ALTER TABLE `OTP`
  ADD PRIMARY KEY (`timestamp`),
  ADD KEY `number` (`number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;--
-- Database: `id1931932_testkisan`
--
CREATE DATABASE IF NOT EXISTS `id1931932_testkisan` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id1931932_testkisan`;

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `id` int(10) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`id`, `first_name`, `last_name`, `phone_number`) VALUES
(1, 'Bhanvi', 'Shukla', 9560500864),
(2, 'Test ', 'Random1', 9876543210);
<div class="error"><h1>Error</h1><p><strong>SQL query:</strong>
<a href="server_sql.php?sql_query=SHOW+TABLE+STATUS+FROM+%60id1931932_testkisan%60+WHERE+Name+%3D+%27OTP%27&amp;show_query=1&amp;token=0de313f43bcc34e2b2a890ae0b62ead9"><span class="nowrap"><img src="themes/dot.gif" title="Edit" alt="Edit" class="icon ic_b_edit" />&nbsp;Edit</span></a>    </p>
<p>
<code class="sql"><pre>
SHOW TABLE STATUS FROM `id1931932_testkisan` WHERE Name = 'OTP'
</pre></code>
</p>
<p>
    <strong>MySQL said: </strong><a href="./url.php?url=https%3A%2F%2Fdev.mysql.com%2Fdoc%2Frefman%2F5.7%2Fen%2Ferror-messages-server.html" target="mysql_doc"><img src="themes/dot.gif" title="Documentation" alt="Documentation" class="icon ic_b_help" /></a>
</p>
<code>#2006 - MySQL server has gone away</code><br/></div>