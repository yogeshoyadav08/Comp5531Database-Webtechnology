
create database dbcomment;

CREATE TABLE `tbl_comments` (
  `id` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `comment_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tbl_comments` (`id`, `name`, `comment`, `comment_time`) VALUES
(8, 'Adones', 'Hello World\r\n', '2021-03-11 08:07:25'),
(9, 'Mark Jason', 'Hi Adones', '2021-03-11 10:09:14'),
(10, 'Angel', 'Hello everyone', '2021-03-11 08:11:55');


