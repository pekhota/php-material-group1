-- Adminer 4.8.1 MySQL 5.5.5-10.6.4-MariaDB-1:10.6.4+maria~focal dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `news`;
CREATE TABLE `news` (
                        `id` int(11) NOT NULL AUTO_INCREMENT,
                        `title` varchar(255) NOT NULL,
                        `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
                        `author` varchar(255) NOT NULL,
                        `body` text NOT NULL,
                        PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `news` (`id`, `title`, `date`, `author`, `body`) VALUES
                                                                 (1,	'page1',	'2021-11-03 18:28:24',	'John Doe',	'Well organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Python, PHP, Bootstrap, Java, ...\r\n'),
                                                                 (2,	'Indonesia criticises \'unfair\' deal to end deforestation',	'2021-11-04 00:00:00',	'Example',	'Environment Minister Siti Nurbaya Bakar said the authorities could not \"promise what we can\'t do\".  She said forcing Indonesia to commit to zero deforestation by 2030 was \"clearly inappropriate and unfair\".  Despite President Joko Widodo signing the forest deal, she said development remained Indonesia\'s top priority.  The deal, agreed between more than 100 world leaders, was announced on Monday at the COP26 climate summit in Glasgow. It was the event\'s first major announcement.  It promises to end and reverse deforestation by 2030, and includes almost £14bn ($19.2bn) of public and private funds.  In a Facebook post (in Indonesian), Ms Nurbaya argued that the country\'s vast natural resources must be used for the benefit of its people.  She cited the need to to cut down forests to make way for new roads.  \"The massive development of President Jokowi\'s era must not stop in the name of carbon emissions or in the name of deforestation,\" she said, referring to Mr Widodo by his nickname.');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
                         `id` int(11) NOT NULL AUTO_INCREMENT,
                         `email` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- 2021-11-04 19:28:06