-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 19 2021 г., 20:00
-- Версия сервера: 10.4.18-MariaDB
-- Версия PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `midterm`
--

-- --------------------------------------------------------

--
-- Структура таблицы `countries`
--

CREATE TABLE `countries` (
  `id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'Kazakhstan'),
(2, 'USA'),
(3, 'Russia'),
(4, 'United Kingdom');

-- --------------------------------------------------------

--
-- Структура таблицы `manga`
--

CREATE TABLE `manga` (
  `manga_isbn` varchar(20) NOT NULL,
  `manga_title` varchar(100) NOT NULL,
  `manga_author` varchar(100) NOT NULL,
  `manga_image` varchar(40) NOT NULL,
  `manga_descr` text NOT NULL,
  `old_price` int(100) NOT NULL,
  `promotion` int(11) NOT NULL,
  `publisherid` int(20) UNSIGNED NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `manga`
--

INSERT INTO `manga` (`manga_isbn`, `manga_title`, `manga_author`, `manga_image`, `manga_descr`, `old_price`, `promotion`, `publisherid`, `genre`) VALUES
('111111111111', 'Goodnight Punpun', 'Asano, Inio', 'Goodnight Punpun.png', 'Punpun Onodera is a normal 11-year-old boy living in Japan. Hopelessly idealistic and romantic, Punpun begins to see his life take a subtle—though nonetheless startling—turn to the adult when he meets the new girl in his class, Aiko Tanaka. It is then that the quiet boy learns just how fickle maintaining a relationship can be, and the surmounting difficulties of transitioning from a naïve boyhood to a convoluted adulthood.', 2000, 5, 13, 'Drama'),
('22222222', 'Love is War', 'Akasaka, Aka', 'Love is War.jpg', '\"IQ у меня 3, но я никого не подведу ^^ \"  ', 3000, 5, 17, 'Romance'),
('3333333', 'Slam Dunk                         ', 'For final test', 'Slam Dunk.png', 'Хоть Фара отрицает, но я являюсь его собственницей', 4500, 15, 14, 'Sport'),
('44444', 'Kingdom', 'Inoue, Takehiko', 'Kingdom.jpg', 'Про троецарствие ', 2000, 10, 18, 'Historic'),
('777', 'Last Test ', 'My paranoia', 'Slam Dunk.png', 'My last test. Пока паранойя', 6300, 5, 21, 'test genre '),
('978-0-321-94786-4', 'Berserk', 'Miura, Kentarou', 'Берсерк.png', 'Guts, a former mercenary now known as the \"Black Swordsman,\" is out for revenge. After a tumultuous childhood, he finally finds someone he respects and believes he can trust, only to have everything fall apart when this person takes away everything important to Guts for the purpose of fulfilling his own desires. Now marked for death, Guts becomes condemned to a fate in which he is relentlessly pursued by demonic beings.', 2000, 15, 1, 'Action'),
('978-0-7303-1484-4', 'JoJo Adventures', 'Araki, Hirohiko', 'Невероятные.png', 'In the American Old West, the world\'s greatest race is about to begin. Thousands line up in San Diego to travel over six thousand kilometers for a chance to win the grand prize of fifty million dollars. With the era of the horse reaching its end, contestants are allowed to use any kind of vehicle they wish. Competitors will have to endure grueling conditions, traveling up to a hundred kilometers a day through uncharted wastelands. The Steel Ball Run is truly a one-of-a-kind event.', 2800, 20, 2, 'Action'),
('978-1-118-94924-5', 'One Piece', 'Oda, Eiichiro', 'One Piece.png', 'Gol D. Roger was known as the \"Pirate King,\" the strongest and most infamous being to have sailed the Grand Line. The capture and execution of Roger by the World Government brought a change throughout the world. His last words before his death revealed the existence of the greatest treasure in the world, One Piece. It was this revelation that brought about the Grand Age of Pirates, men who dreamed of finding One Piece—which promises an unlimited amount of riches and fame—and quite possibly the pinnacle of glory and the title of the Pirate King.', 2000, 10, 3, 'Action'),
('978-1-1180-2669-4', 'Vagabond', 'Inoue, Takehiko', 'Бродяга.png', 'In 16th century Japan, Shinmen Takezou is a wild, rough young man, in both his appearance and his actions. ', 2000, 15, 4, 'Drama'),
('978-1-44937-019-0', 'Monster', 'Urasawa, Naoki', 'Монстр.png', 'Kenzou Tenma, a renowned Japanese neurosurgeon working in post-war Germany, faces a difficult choice: to operate on Johan Liebert, an orphan boy on the verge of death, or on the mayor of Düsseldorf. In the end, Tenma decides to gamble his reputation by saving Johan, effectively leaving the mayor for dead.', 2300, 10, 5, 'Thriller '),
('978-1-44937-075-6', 'Fullmetal Alchemist', 'Arakawa, Hiromu', 'Стальной Алхимик.png', 'Alchemy is bound by this Law of Equivalent Exchange—something the young brothers Edward and Alphonse Elric only realize after attempting human transmutation: the one forbidden act of alchemy. They pay a terrible price for their transgression—Edward loses his left leg, Alphonse his physical body. It is only by the desperate sacrifice of Edward\'s right arm that he is able to affix Alphonse\'s soul to a suit of armor. Devastated and alone, it is the hope that they would both eventually return to their original bodies that gives Edward the inspiration to obtain metal limbs called \"automail\" and become a state alchemist, the Fullmetal Alchemist.', 2800, 15, 6, 'Action'),
('978-1-4571-0402-2', 'Naruto', 'Kishimoto, Masashi', 'Наруто.png', 'Moments prior to Naruto Uzumaki\'s birth, a huge demon known as the Kyuubi, the Nine-Tailed Fox, attacked Konohagakure, the Hidden Leaf Village, and wreaked havoc. In order to put an end to the Kyuubi\'s rampage, the leader of the village, the Fourth Hokage, sacrificed his life and sealed the monstrous beast inside the newborn Naruto.', 2300, 10, 7, 'Drama'),
('978-1-484216-40-10', 'Tokyo Ghoul', 'Ishida, Sui', 'Токийский гуль.png', '', 2300, 10, 8, 'Drama'),
('978-1-484216-40-8', 'Attack on Titan', 'Isayama, Hajime', 'Атака Титанов.png', 'Hundreds of years ago, horrifying creatures which resembled humans appeared. These mindless, towering giants, called \"titans,\" proved to be an existential threat, as they preyed on whatever humans they could find in order to satisfy a seemingly unending appetite. Unable to effectively combat the titans, mankind was forced to barricade themselves within large walls surrounding what may very well be humanity\'s last safe haven in the world.', 2800, 5, 9, 'Drama'),
('978-1-484216-40-9', 'Death Note', 'Obata, Takeshi', 'Тетрадь смерти.png', '', 2000, 15, 10, 'Drama');

-- --------------------------------------------------------

--
-- Структура таблицы `mymanga`
--

CREATE TABLE `mymanga` (
  `id` int(100) NOT NULL,
  `manga_title` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `publisherid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `mymanga`
--

INSERT INTO `mymanga` (`id`, `manga_title`, `user_id`, `user_email`, `publisherid`) VALUES
(3, ' Monster ', 7, ' admin@gmail.com ', 5),
(18, ' Goodnight Punpun ', 26, ' takayan@gmail.com ', 13),
(19, ' Vagabond ', 26, ' takayan@gmail.com ', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL,
  `order_id` int(5) NOT NULL,
  `user_id` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `name`, `order_id`, `user_id`) VALUES
(2, 'hanabi', 1, '0'),
(3, 'aiko', 2, '0'),
(4, 'nargiz', 1, '0'),
(5, 'TEST', 2, '0'),
(6, 'New Course TEST', 6, ''),
(7, 'LOLO', 1, ''),
(8, 'NewTest', 1, ''),
(9, 'lastTest', 3, '');

-- --------------------------------------------------------

--
-- Структура таблицы `shipping_manga`
--

CREATE TABLE `shipping_manga` (
  `id` int(5) NOT NULL,
  `country_id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL,
  `cost` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shipping_manga`
--

INSERT INTO `shipping_manga` (`id`, `country_id`, `name`, `cost`) VALUES
(1, 1, 'Free Delivery', 0),
(2, 2, 'Standard-Delivery- 2000 tenge', 2000),
(3, 2, 'Fast-Delivery- 3000 tenge', 3000),
(4, 3, 'Standard-Delivery- 1000 tenge', 1000),
(5, 3, 'Fast-Delivery- 1500 tenge', 1500),
(6, 4, 'Standard-Delivery- 2500 tenge', 2500),
(7, 4, 'Fast-Delivery- 3000 tenge', 3000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `gender`, `password`, `role_id`) VALUES
(1, 'moderator', 'moderator', 'moderator@gmail.com', 'Male', 'moderator0', 2),
(7, 'admin', 'admin', 'admin@gmail.com', 'Female', 'adminadmin', 1),
(21, 'Bob', 'Bob', 'Bob@gmail.com', 'Male', '123456789', 3),
(26, 'takayan', 'Husband', 'takayan@gmail.com', 'Male', 'takayan000', 3);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `manga`
--
ALTER TABLE `manga`
  ADD PRIMARY KEY (`manga_isbn`),
  ADD UNIQUE KEY `publisherid` (`publisherid`);

--
-- Индексы таблицы `mymanga`
--
ALTER TABLE `mymanga`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `publisherid` (`publisherid`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shipping_manga`
--
ALTER TABLE `shipping_manga`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `mymanga`
--
ALTER TABLE `mymanga`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `shipping_manga`
--
ALTER TABLE `shipping_manga`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
