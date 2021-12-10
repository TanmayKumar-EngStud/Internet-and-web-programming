create database if not exists `IWP_LAB_FAT`;
use `IWP_LAB_FAT`;
create table if not exists `IWP_LAB_FAT`.`users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL UNIQUE,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);

create table if not exists `IWP_LAB_FAT`.`courses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `course_ID` int(11) NOT NULL UNIQUE,
  PRIMARY KEY (`id`)
);
