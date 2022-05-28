SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `registration` (
  `id` int(10) NOT NULL,
  `drivername` varchar(20) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `Ambregno` varchar(20) NOT NULL,
  `rcno` varchar(20) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `registration` (`id`,`drivername`,`mobileno`,`Ambregno`,`rcno`) VALUES
(1, 'abc',3456789765,87656,'bgy564'),
(2,'xyz',9876543254,87654,'hyt546'),
(3,'rcb',9876576809,65432,'juy876');


CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `feedbk` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `feedback`(`id`,`name`,`email`,`feedbk`) VALUES
(1, 'joy', 'joy123@gmail.com', 'helpful website'),
(2, 'amar', 'amar56@gmail.com', 'benki(fire) website'),
(3, 'adam', 'adamgray@gmail.com', 'life saving website');

CREATE TABLE `hospitals` (
  `hid` int(10) NOT NULL,
  `hname` varchar(20) NOT NULL,
  `haddress` varchar(15) NOT NULL,
  `hphone` int(15) NOT NULL,
  `hcity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `hospitals` (`hid`, `hname`, `haddress`,`hphone`, `hcity`) VALUES
(1, 'Pristyn Care - Mysore', 'No. 2, C-1, A, 2nd Main Rd Vijay Nagar 3rd Stage , Mysore','78869565', 'Mysore'),
(2, 'JSS Hospital', 'Mahathma Gandhi Road , Mysore - 570004','78869565', 'Mysore');

ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

 ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hid`); 

ALTER TABLE `registration`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `hospitals`
  MODIFY `hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;