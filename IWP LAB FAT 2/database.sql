create database if not exists `LABFAT`;
use `LABFAT`;
create table if not exists `LABFAT`.`Movie`(
  `id` int(11) not null auto_increment,
  `name` varchar(255) not null,
  `length` int(11) not null, 
  `rating` int(11) not null,
  `theaterName` varchar(255) not null,
  `showtime` datetime not null,
  `hallnames` varchar(255) not null,
  `language` varchar(255) not null,
  `showDate` date not null,
  PRIMARY KEY (`id`)
);
create table if not exists `LABFAT`.`users`(
  `id` int(11) not null auto_increment,
  `username` varchar(255) not null,
  `password` varchar(255) not null,
  `email` varchar(255) not null,
  `firstname` varchar(255) not null,
  `lastname` varchar(255) not null,
  `phone` varchar(255) not null,
  PRIMARY KEY (`id`)
);
Insert into `LABFAT`.`users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`) 
values (1, 'tushar', 'Tushar123!', 'tushar@gmail.com', 'Tushar', 'goel', '1234567890');

-- Entering any 5 movies in the database
Insert into `LABFAT`.`Movie` (`id`, `name`, `length`, `rating`, `theaterName`, `showtime`, `hallnames`, `language`, `showDate`)
values (1, 'The Shawshank Redemption', '280', '9', 'AMC', '2019-01-01 00:00:00', 'Hall 1, Hall 2, Hall 3', 'English', '2019-01-01'),
(2, 'The Godfather', '200', '9', 'AMC', '2019-01-01 00:00:00', 'Hall 1, Hall 2, Hall 3', 'English', '2019-01-01'),
(3, 'The Dark Knight', '190', '9', 'AMC', '2019-01-01 00:00:00', 'Hall 1, Hall 2, Hall 3', 'English', '2019-01-01'),
(4, 'Schindler''s List', '185', '9', 'AMC', '2019-01-01 00:00:00', 'Hall 1, Hall 2, Hall 3', 'English', '2019-01-01'),
(5, 'Pulp Fiction', '130', '9', 'AMC', '2019-01-01 00:00:00', 'Hall 1, Hall 2, Hall 3', 'English', '2019-01-01');
