create database if not exists `LABFAT`;
use `LABFAT`;
create table if not exists `Movie`(
  `id` int(11) not null auto_increment,
  `name` varchar(255) not null,
  `length` int(11) not null, --this will be in minutes
  `rating` int(11) not null,
  `showtime` datetime not null,
  `hallnames` varchar(255) not null,
  `language` varchar(255) not null,
  `showDate` date not null
);
