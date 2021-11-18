CREATE TABLE `student` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`name` varchar(250) NOT NULL,
`gender` int(1) NOT NULL,
`faculty` char(3) NOT NULL,
`birthday_year` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;