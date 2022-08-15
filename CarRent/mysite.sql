
--
-- Database: `mysite`
--
CREATE DATABASE IF NOT EXISTS `mysite` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mysite`;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `driverName` varchar(45) NOT NULL,
  `carCompany` varchar(45) NOT NULL,
  `carName` varchar(45) NOT NULL,
  `carModel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;
