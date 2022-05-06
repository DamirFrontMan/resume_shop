-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 07 2022 г., 08:18
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cinema`
--

-- --------------------------------------------------------

--
-- Структура таблицы `advert`
--

CREATE TABLE `advert` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url_adv_img` text NOT NULL,
  `url_site` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `advert`
--

INSERT INTO `advert` (`id`, `name`, `url_adv_img`, `url_site`) VALUES
(1, '1xbet', 'ad/1xbet.png', 'https://m.1xbet.kz/?whn=desctop');

-- --------------------------------------------------------

--
-- Структура таблицы `catergories`
--

CREATE TABLE `catergories` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `url_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `catergories`
--

INSERT INTO `catergories` (`id`, `name`, `url_cat`) VALUES
(1, 'Главная', 'index.php'),
(2, 'Гарантия надёжности', ''),
(3, 'О нас', 'o_nas.php');

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `name` text NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `id_film`, `name`, `comment`) VALUES
(21, 3, 'Damir', 'Privet'),
(24, 1, 'Damir', 'Отличный сайт !!'),
(25, 1, 'Damir', 'Стильно, модно, молодежно !!'),
(29, 1, 'Дамир', 'Где комментарий '),
(36, 1, '', ''),
(37, 1, '', ''),
(38, 1, '', ''),
(39, 1, '', ''),
(40, 1, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `filmy`
--

CREATE TABLE `filmy` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `opisanie` text NOT NULL,
  `url_img` text NOT NULL,
  `url_img_fon` text NOT NULL,
  `proizvod` text NOT NULL,
  `prem_mir` date NOT NULL,
  `prem_kz` date NOT NULL,
  `link` text NOT NULL,
  `rezhiser` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `filmy`
--

INSERT INTO `filmy` (`id`, `name`, `opisanie`, `url_img`, `url_img_fon`, `proizvod`, `prem_mir`, `prem_kz`, `link`, `rezhiser`) VALUES
(1, 'Смартфоны', 'Анна, Эльза, Кристоф, его верный олень Свен и никогда не унывающий снеговик Олаф должны будут покинуть уютное королевство Эренделл и отправиться ещё дальше на север, в путешествие, которое приведет их к истокам древних легенд и поможет раскрыть тайны, касающиеся прошлого их родной страны.', 'img_shop_kz/iphone_13.jpg', 'img/frozen2.jpg', 'США, 2019', '2019-11-20', '2019-11-28', 'https://www.kinopoisk.ru/', 'Крис Бак'),
(2, 'Ноутбуцки', 'Когда сразу после 85-летия известного автора криминальных романов Харлана Тромби находят мертвым в его имении, за расследование неожиданно берется обаятельный и дотошный детектив Бенуа Блан. Ему предстоит разорвать тугую сеть уловок и корыстной лжи, которой его опутывают члены неблагополучной семьи Харлана и преданный ему персонал…', 'img/dostat_nozhi.jpg', 'img/noji.jpg', 'США, 2019', '2019-11-20', '2019-11-28', 'https://www.kinopoisk.ru/', 'Дженнифер Ли'),
(3, 'Смарт часы', 'В жизни Эвана все прекрасно и стабильно — любящая жена, маленький ребенок и интересная работа школьного психолога. Но никто из окружающих не догадывается, что у Эвана есть и другая, тёмная сторона, на которую лучше не заходить никому.', 'img/tem_torona.jpg', 'img/tem_stor.jpg', 'США, 2018', '2019-09-20', '2019-11-28', 'https://www.kinopoisk.ru/', 'Генри Джейкобсон'),
(4, 'Наушники', 'Старшеклассник Ходака Морисима переезжает со своего родного острова в Токио, где у парня сразу кончаются деньги. Когда он устраивается на подработку в журнал, пишущий о сверхъестественном, погода портится, и начинаются бесконечные дожди. Однажды Ходака знакомится с девушкой по имени Хина Амано, которая обладает удивительной способностью разгонять тучи и останавливать дождь.', 'img/ditya_pogody.jpg', 'img/DITY_POG.jpg', 'Япония, 2019', '2019-07-19', '2019-10-30', 'https://www.kinopoisk.ru/', 'Макото Синкай');

-- --------------------------------------------------------

--
-- Структура таблицы `razdely`
--

CREATE TABLE `razdely` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `opisanie` text DEFAULT NULL,
  `url_img` text DEFAULT NULL,
  `url_img_fon` text DEFAULT NULL,
  `proizvod` text DEFAULT NULL,
  `prem_mir` text DEFAULT NULL,
  `prem_kz` text DEFAULT NULL,
  `link` text DEFAULT NULL,
  `rezhiser` text DEFAULT NULL,
  `id_cotegorii` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `razdely`
--

INSERT INTO `razdely` (`id`, `name`, `opisanie`, `url_img`, `url_img_fon`, `proizvod`, `prem_mir`, `prem_kz`, `link`, `rezhiser`, `id_cotegorii`) VALUES
(1, 'Смартфон Apple iPhone 13, 128Gb, Starlight', 'Дисплей Super Retina XDR\nДисплей OLED стал на 28% ярче — до 800 кд/м². На нём всё хорошо видно даже в самый солнечный день. А яркость при просмотре контента в HDR достигает 1200 кд/м². Вы сможете различить мельчайшие оттенки чёрного и белого — как и всех остальных цветов. При этом дисплей расходует заряд аккумулятора ещё более экономно, чем прежде.\nШирокий цветовой охват дисплея iPhone 13 соответствует стандартам киноиндустрии, которые помогают создателям фильмов добиваться максимально точной цветопередачи. Поэтому изображение на экране выглядит абсолютно естественно.\nДисплей Super Retina XDR отличается невероятно высокой плотностью пикселей — фотографии, видео и текст выглядят поразительно чётко. А благодаря уменьшенной площади камеры TrueDepth на дисплее теперь больше места для изображения.\n\nЧип A15 Bionic\nСверхбыстрый чип A15 Bionic обеспечивает работу режима «Киноэффект», Фотографических стилей и других функций. Secure Enclave защищает персональные данные, в том числе Face ID и контакты. А ещё данный чип увеличивает время работы от аккумулятора.\n\nНа связи. В моменте\nВ iOS 15 вы можете делиться с собеседниками фильмами, музыкой и другим контентом с вашего экрана прямо во время разговора по FaceTime. Уведомления легко настроить так, чтобы видеть только актуальные на данный момент и фокусироваться на главном. А чтобы мгновенно отправить электронное письмо или сделать звонок, достаточно коснуться соответствующего текста на фото.', 'img_shop_kz/iphone_13.jpg', 'img_shop_kz/Smartphone.jpg', 'Apple', '7 х 14.6 х 0.7 см', '0.17 кг', 'https://www.apple.com/ru/', '474 990 ₸', 1),
(2, 'ми бенд 6', 'вфывф', NULL, NULL, 'выфвфв', 'фывф', 'вфывф', 'вфыф', 'вффыв', 3),
(3, 'легион', 'выфвф', NULL, NULL, 'выфвф', 'ывфы', 'вфывф', 'вфыв', 'фывфы', 2),
(4, 'сони', 'вфывфвыф', NULL, NULL, 'вфыф', 'вфывф', 'ывфы', 'вфывф', 'вфывф', 4),
(5, 'Самсунг ', 'хрень', NULL, NULL, 'вфывфы', 'фывфыв', 'фывфы', 'фывфы', 'фывфывф', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `zakaz`
--

CREATE TABLE `zakaz` (
  `id` int(11) NOT NULL,
  `phone` text NOT NULL,
  `name` text NOT NULL,
  `article` text NOT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `zakaz`
--

INSERT INTO `zakaz` (`id`, `phone`, `name`, `article`, `value`) VALUES
(7, '800000000009', 'fgdgfdfgdfgd', '1', '474 990 ₸');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `advert`
--
ALTER TABLE `advert`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `catergories`
--
ALTER TABLE `catergories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `razdely`
--
ALTER TABLE `razdely`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `zakaz`
--
ALTER TABLE `zakaz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `advert`
--
ALTER TABLE `advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `catergories`
--
ALTER TABLE `catergories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT для таблицы `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `razdely`
--
ALTER TABLE `razdely`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `zakaz`
--
ALTER TABLE `zakaz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
