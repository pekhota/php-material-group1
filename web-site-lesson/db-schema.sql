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

-- Adminer 4.8.1 MySQL 5.5.5-10.6.4-MariaDB-1:10.6.4+maria~focal dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

CREATE DATABASE `step-group1` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `step-group1`;

DROP TABLE IF EXISTS `bricks`;
CREATE TABLE `bricks` (
                          `id` int(11) NOT NULL AUTO_INCREMENT,
                          `title` varchar(255) NOT NULL,
                          `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
                          `body` text NOT NULL,
                          `picture` varchar(2048) NOT NULL,
                          PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `bricks` (`id`, `title`, `date`, `body`, `picture`) VALUES
                                                                    (7,	'Обучение',	'2021-11-07 17:44:00',	'Обуче́ние (в педагогике) — целенаправленный педагогический процесс организации и стимулирования активной учебно-познавательной деятельности учащихся по овладению знаниями, умениями и навыками, развитию творческих способностей и нравственных этических взглядов.',	'http://471spb.edusite.ru/images/93029867'),
                                                                    (8,	'Что такое Lorem Ipsum?',	'2021-11-07 17:44:50',	'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века.',	'https://bilimdinews.kz/wp-content/uploads/2020/04/scale_1200-4.jpg'),
                                                                    (9,	'Почему он используется?',	'2021-11-07 17:42:35',	'Давно выяснено, что при оценке дизайна и композиции читаемый текст мешает сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона.',	'https://bilimdinews.kz/wp-content/uploads/2020/07/slide4-1.jpg'),
                                                                    (10,	'Откуда он появился?',	'2021-11-07 17:05:26',	'Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад.',	'https://cdn.otus.ru/media/public/9f/b7/pickl103-20219-9fb796.jpg'),
                                                                    (11,	'Где его взять?',	'2021-11-07 17:43:17',	'Есть много вариантов Lorem Ipsum, но большинство из них имеет не всегда приемлемые модификации, например, юмористические вставки или слова, которые даже отдалённо не напоминают латынь. Если вам нужен Lorem Ipsum для серьёзного проекта, вы наверняка не хотите какой-нибудь шутки, скрытой в середине абзаца.',	'https://www.if24.ru/wp-content/uploads/2020/09/Depositphotos_10470050_l-2015-e1601383240187.jpg'),
                                                                    (12,	'Классический текст Lorem Ipsum',	'2021-11-07 17:41:45',	'\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',	'https://obrmos.ru/go/go_scool/dist/img/dis102.jpg');

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

INSERT INTO `users` (`id`, `email`, `password`) VALUES
    (1,	'levchenko.natalka@gmail.com',	'8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92');

-- 2021-11-07 17:57:21